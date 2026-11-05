# Converting Dimension Ids · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Converting-Dimension-Ids

---

OWA derives a dimension's id from its own content — a document's id from its URL, a user agent's from its string — so that any node can compute an id without asking the database. That property is what lets a tracking node log events with no database round trip at all.

Those ids used to be 32-bit. A 32-bit space collides at ordinary scale: measured over eight trials, the first collision arrived at a median of about **96,000 distinct values**. Two different pages sharing an id are merged in every report that touches them, silently and permanently. At 63 bits, a table of ten million rows carries roughly a 0.0005% chance of a single collision.

New installations are created with 63-bit ids and never need any of this. An existing installation keeps deriving 32-bit ids until you convert it, so its data stays internally consistent in the meantime. There is no hurry, and no partial state to worry about while you wait.

## Partition your fact tables first. This is a prerequisite, not a tuning tip.

**Do not run this conversion on unpartitioned fact tables.**

The fact-key rewrite is issued one partition at a time. On a partitioned table every statement is bounded: it touches one month, holds a short lock, and — apart from the current month — works on data nothing is writing to. On an **unpartitioned** table that same work collapses into one statement per key column across the entire table. One lock, held for as long as it takes to rewrite every fact row you have ever collected, on a table your tracker is still writing to.

The verification pass that follows the rewrite is scoped the same way, and degrades the same way without partitions.

There is no hurry to convert ids — an unconverted installation keeps deriving 32-bit ids and stays internally consistent indefinitely. So if your fact tables are not partitioned yet, partition them first and convert ids afterwards. Converting first gains you nothing and costs you the bounded execution that makes this safe to run on a live installation.

```
/path/to/php cli.php cmd=partition-init --dry-run
/path/to/php cli.php cmd=partition-init
```

See [Partitioning Fact Tables](Partitioning-Fact-Tables.md).

## Then prune, and the migration gets much smaller

The conversion's cost is driven almost entirely by **how many fact rows it has to touch**, not by how many dimension ids it has to plan. So once partitioned, the biggest remaining lever is having fewer rows.

### Drop history you do not need

Every fact row you remove beforehand is a row the rewrite never has to update and the verification never has to scan.

Once the tables are partitioned, dropping old data is a metadata operation rather than a mass delete:

```
/path/to/php cli.php cmd=partition-drop older-than=24months
```

If two years of history is more than you report on, pruning to what you actually use can remove most of the work before it starts. Take a backup first — this is not reversible.

Doing it in this order matters: `partition-drop` needs partitions to drop, so partitioning has to come first.

## Running the conversion

> **Check first:** are your fact tables partitioned? If not, stop and read the section above. `cmd=partition-status` will tell you.

Take a database backup. Then look at what it intends to do:

```
/path/to/php cli.php cmd=rederive-dimension-ids --dry-run
```

The dry run changes nothing and reports what would be converted. When you are ready:

```
/path/to/php cli.php cmd=rederive-dimension-ids
```

It runs in three phases:

1. **Plan.** Every dimension row's new id is computed and written to a temporary map table. Nothing else has changed yet.
2. **Rewrite.** Each dimension row is copied to its new id, every fact key is repointed at the copy, and only then is the original removed. Both ids resolve throughout, so a report run mid-migration still resolves every dimension.
3. **Verify.** Nothing is declared finished until the data says so — no narrow keys left, and every sampled row's content re-deriving to the id it is stored at. Only then does the installation switch to deriving 63-bit ids.

**It is resumable.** A run that is killed part way can simply be run again. Old ids are below 2³² and new ones are 63-bit, so applying the map twice is a no-op, and what remains to do is visible in the data rather than in any bookkeeping.

## Timing and performance

The work is dominated by **storage I/O**, not by CPU and not by row count on its own. Every fact row read has to be matched against the id map, and if that map cannot stay in the database's buffer pool, each match becomes a disk read.

Measured on a test installation of roughly 136,000 dimension ids and 2.5 million fact rows across its partitioned fact tables, on storage sustaining 3,000 IOPS: **about 8 minutes** for the whole conversion.

As a rough planning figure, budget a few minutes per million fact rows, and remember that this scales with the rows you keep — which is why pruning first pays for itself.

**That figure assumes storage with a guaranteed IOPS baseline.** Because the work is I/O-bound, it is sustained IOPS that decides how long it takes, not how much CPU the instance has. On burstable cloud storage a long scan can drain an I/O credit balance and then throttle to a low baseline — and once at baseline, credits stop accruing, so it does not recover on its own while the work continues. On AWS RDS that is the `BurstBalance` metric on `gp2` volumes; `gp3` and provisioned IOPS have a guaranteed baseline and no credit pool to exhaust. Check your headroom before you start.

Two symptoms tell you that is what you are looking at: CPU sits idle while everything crawls, and queries that should be fast are uniformly slow rather than one query being slow.

## What it leaves behind, on purpose

Two categories of row are reported and deliberately left alone. Neither means the conversion failed.

**Rows with no content to hash.** A host row carrying only an IP address, for instance, has nothing to derive an id from. Nothing will ever derive those ids again either, so leaving them costs nothing:

```
5,199 dimension row(s) hold no content to derive an id from ...
```

**Rows keyed on a column that is no longer hashed.** An installation with a long history can hold dimension rows whose ids came from an older derivation. Those are left where they are, and that is the correct outcome rather than a compromise: they were never planned, so their fact keys were never repointed, so the fact rows still reference them and the joins still resolve. Converting them would break exactly what it looks like it would repair:

```
owa_host: 25 sampled row(s) remain at a 32-bit id derived from their ip_address
column, alongside 21,166 converted row(s). Nothing derives that id any more, and
their fact keys still point at it, so they are left as they are.
```

**`owa_feed_request` is not converted.** The conversion selects fact tables by
class, and that table does not extend the fact-table base class even though it
is one and carries `document_id`, `ua_id`, `host_id` and `os_id`. Its keys are
therefore not repointed, and the verification pass does not look at it either.
If you track feeds, treat those columns as unconverted.

**Dangling fact keys** — a fact row pointing at a dimension row that no longer exists — resolved to nothing before the conversion and still do afterwards. Counting them requires a second full pass over every fact table, which roughly doubles the run for a number that changes nothing, so it is off by default:

```
/path/to/php cli.php cmd=rederive-dimension-ids --report-dangling
```

## Confirming it worked

The command says so when it finishes:

```
Done. This installation now derives 63-bit ids.
```

Ask the command itself. Run it again with `--force`:

```
php cli.php cmd=rederive-dimension-ids --dry-run --force
```

```
Nothing to convert: no dimension row and no convertible key is still on a 32-bit id.
```

That is the answer you want, and it is worth understanding why `--force` is the part that makes it meaningful. A plain rerun stops at the flag the conversion clears on success, and reports that the installation already derives 63-bit ids — true, but it is reading a setting, not your data. `--force` skips that gate and goes to the rows.

It is also not just re-checking its own work. The command knows which tables it converts, and separately looks for dimension rows still stored at a 32-bit id in tables it does *not* convert — the case where an entity was left off the list, which is how `owa_site` was missed once. If it finds any it says so and treats the run as failed rather than reporting success:

```
Nothing left to plan, but 1 table(s) still hold rows stored at a 32-bit derived id
```

`--dry-run --force` reads and never writes, so it is safe to run whenever you want to know where an installation stands — including on one you have inherited and know nothing about.

Reports resolving normally is the other half of the answer, and a different question: it means each dimension row's content still derives to the id it is stored at, which is the property every lookup depends on.

See [rederive-dimension-ids](Command-Line-Interface-_28CLI_29.md#rederive-dimension-ids) and [Updating](Updating.md).
