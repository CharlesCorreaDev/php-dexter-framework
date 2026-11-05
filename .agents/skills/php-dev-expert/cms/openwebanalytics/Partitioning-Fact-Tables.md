# Partitioning Fact Tables · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Partitioning-Fact-Tables

---

OWA's fact tables are partitioned by date. Seven of them — `owa_request`, `owa_session`, `owa_click`, `owa_domstream`, `owa_action_fact`, `owa_commerce_transaction_fact` and `owa_commerce_line_item_fact` — are split into periods on their `yyyymmdd` column.

> **`owa_feed_request` is not among them.** It is a fact table and it has a
> `yyyymmdd` column, but the partition commands select tables by class rather
> than by shape and it does not extend the fact-table base class. So it is not
> partitioned, does not appear in `partition-status`, and **a retention window
> does not reach it** — on an installation that tracks feeds it grows without
> bound. The same selection excludes it from the dimension-id conversion; see
> [Converting Dimension Ids](Converting-Dimension-Ids.md).

Partitioning is essential for performance on two fronts: data retention and reporting. Deleting data that is older than N months completes in milliseconds regardless of the number of rows in the database. Partitioning also lets report queries read only the partitions covering the reporting period instead of scanning the whole table.

Installations running MySQL are partitioned by default. **There is no setting to turn it off, and nothing to enable.** An installation that predates partitioning is not converted automatically, but it can *convert its existing database* at any time with a one-time CLI command (see [Existing installations](#existing-installations)).

Partitioning requires periodic maintenance to keep partitions ahead of incoming data, otherwise performance degrades. OWA registers that maintenance as a scheduled job named `rotate-partitions`, which runs monthly, so there is nothing to schedule by hand. What it does need is the job scheduler's single cron entry, without which no job runs at all: see [Scheduled Jobs](Scheduled-Jobs.md). If you have a new installation and assume this page does not apply because you never switched anything on, see [the catch-all section](#the-catch-all-and-why-a-scheduled-job-is-required).

## How partitioning works

MySQL stores a partitioned table as a set of separate files. Each file holds one **period**: a contiguous range of dates. The table still behaves as a single table. Every row stays visible to every report and nothing about querying it changes. What changes is that a query for a date range reads only the periods overlapping that range, and that removing a period becomes a file operation instead of a `DELETE` over millions of rows.

A maintained fact table looks like this:

```
       merged tail                full granularity              lead: 12 months ahead
+--------+--------+------+---------+---------+------------+---------+---------+------------+
|  2001  |  2002  |  ..  | 2026-07 | 2026-08 |     ..     | 2027-07 | 2027-08 |    pmax    |
| 1 year | 1 year |      | 1 month | 1 month |            | 1 month | 1 month | catch-all  |
+--------+--------+------+---------+---------+------------+---------+---------+------------+
                                        ^ today
```

Four parts of that picture are referred to throughout this page.

### The period and its granularity

A **period** is one partition: a block of dates stored together. **Granularity** is how finely a month is divided into periods. It is a property of the table.

| Granularity | A month becomes | Periods per year |
| --- | --- | --- |
| `monthly` (default) | 1 period | 12 |
| `half-month` | 2 periods | 24 |
| `quarter-month` | 4 periods | 48 |

`partition-rotate` cuts new periods at the table's granularity. `partition-init` sets that granularity when it first converts a table. `partition-reorganize` is the only command that changes it.

Granularities are named for the number of parts a month is divided into, not for a duration. Months are 28 to 31 days long, so any name carrying a day count would be wrong in some month. That is why there is no `weekly`.

A finer granularity is not better by default. It buys retention precision, because only whole periods can be dropped. It costs on the write path, because lookups that name a record's id rather than a date cannot be pruned to a single period and must visit all of them. **`monthly` is the right choice unless you need retention accurate to the fortnight.** See [Choosing a granularity](#choosing-a-granularity) for the full trade-off.

### The tail is merged

Old history is not kept at the table's granularity. Twenty-five years at `monthly` is over three hundred periods for one table, and every period is an open file. No server's open-file budget accommodates that across seven fact tables. Periods older than `OWA_PARTITION_DETAIL_MONTHS` (36 by default) are merged into whole years, and into runs of years if that is still not enough.

A fact table therefore holds several granularities at once: recent months at the table's granularity, older history in coarser blocks. This is why `partition-status` reports a layout in tiers rather than a single word. It is also why the `granularity` it prints describes only the head of the table, meaning the size the next new period will be cut at.

### The lead

A row can only be stored if a period already covers its date. New rows arrive every day, so periods have to exist **before** the data does. OWA keeps twelve months of them ahead of today, which is the **lead**: a date arriving tomorrow, or in six months, already has somewhere to go.

The lead is also what keeps this maintenance cheap. Topping it up appends empty periods to the end of the table, and that is a metadata change which moves no data at all. The expensive case is the one the lead prevents: running out, letting rows pile up in the catch-all below, and then having to redistribute them later.

### The catch-all

Every range-partitioned table ends in an unbounded period named `pmax`. MySQL rejects a row that falls into no partition, so without `pmax` tracking would stop on the day the defined range ran out. On a maintained table `pmax` stays empty.

When the lead runs out, it stops being empty:

```
+---------+---------+------------+
| 2026-07 | 2026-08 |    pmax    |
| 1 month | 1 month | catch-all  |
+---------+---------+------------+
                     ^^^^^^^^^^^^
                     every row written since the lead
                     ran out has landed in here
```

Nothing breaks in that state. The rows are written, queried and reported normally. The cost of it is covered in [If the job stops running](#if-the-job-stops-running).

### What each command does to the layout

| Command | Effect on the layout |
| --- | --- |
| [`partition-status`](#partition-status) | Prints it. Changes nothing. |
| [`partition-init`](#partition-init) | Builds it once, on a table that has no partitions yet. |
| [`partition-rotate`](#partition-rotate) | Tops the lead up and merges the tail. **This is the scheduled job.** |
| [`partition-reorganize`](#partition-reorganize) | Changes the granularity of the periods. |
| [`partition-drop`](#partition-drop) | Removes periods older than a cutoff. |

## Requirements

- MySQL. Partitioning syntax is expressed per driver; a driver that cannot partition simply leaves the feature absent, and the commands say so rather than failing.
- The fact tables are partitioned on `yyyymmdd`, so **the primary key must contain that column**. On an existing installation the `partition-init` command widens the key from `(id)` to `(id, yyyymmdd)` for you.

Partitioning does not change what OWA can read. Every row remains visible to every report regardless of which partition holds it.

## New installations

Fact tables are created already partitioned, covering the current month plus twelve months ahead — thirteen partitions per fact table, plus the catch-all. Nothing needs to be run and nothing needs to be configured to get this; it is not opt-in and there is no setting that disables it.

To see where any installation stands at any time:

```
/path/to/php cli.php cmd=partition-status
```

That command is the quickest way to answer "is this partitioned, and is it healthy". See [partition-status](#partition-status).

The one thing a new installation *does* need is the job scheduler's cron entry. The `rotate-partitions` job is already registered to run monthly, but nothing dispatches it until that entry exists. Twelve months of lead ships with the tables, so nothing goes wrong for a year — which is exactly why it is easy to forget. Until the entry is in place, OWA says so at the top of every admin page.

## Existing installations

Existing installations are **not** converted automatically. There is deliberately no schema update for this: converting rewrites every fact table, which on a busy installation is minutes of I/O with writes blocked, and that should be something an administrator schedules rather than something that fires during an upgrade.

To convert:

```
/path/to/php cli.php cmd=partition-init
```

`partition-init` is a **one-time conversion**. Run it a second time and it reports what it finds and stops — from then on, the scheduled `partition-rotate` job keeps the layout in shape. Make sure the job scheduler's cron entry is in place before or shortly after converting, or the lead you just created is the only lead you will ever have.

Run it in a maintenance window. It rewrites each fact table twice: once to widen the primary key, once to apply the partitioning. MySQL blocks writes for the duration of this operation. Budget roughly five seconds per million rows, per table.

Add `--dry-run` first to see what it would do.

The layout it creates is **tiered**: whole calendar years over old history, and the table's own granularity over recent history and the lead. A long-running installation would otherwise ask for one partition per month of history — over three hundred on a twenty-five year table — which no open-file budget accommodates. How much recent history stays finely partitioned is `OWA_PARTITION_DETAIL_MONTHS`, 36 by default.

## The catch-all, and why a scheduled job is required

A range-partitioned table ends in a catch-all partition that has no upper bound. It exists because MySQL **rejects** a row that falls into no partition — without it, tracking would stop dead the day the defined range ran out.

The catch-all itself is never dropped by retention. Proving that a partition holds only data older than a cutoff is impossible when the partition extends to infinity and is receiving writes right now.

That does **not** make its contents unreclaimable. While rows sit in the catch-all no cutoff can touch them, but the next `partition-rotate` splits the catch-all into the bounded periods those rows belong to, and then drops whichever of those periods fall outside `keep`, in the same run.

So the catch-all costs you one thing: the run that eventually clears it is proportional to what accumulated, rather than being the near-instant split of an empty partition. It does not cost you data, reports, or writes. See [If the job stops running](#if-the-job-stops-running).

That is why partitions are maintained **twelve months ahead** of today, and why the maintenance job matters. If you are running that job regularly, writes always land in a real bounded partition.

**This is already scheduled.** The `rotate-partitions` job runs `partition-rotate` monthly. You do not write a crontab line for it — you write the one line the job scheduler itself needs, and it takes care of dispatching this job and every other:

```
* * * * * cd /path/to/owa && php cli.php cmd=schedule-run
```

That single entry is the whole setup; see [Scheduled Jobs](Scheduled-Jobs.md). Until it exists nothing rotates. OWA reminds you of that at the top of every admin page.

**By default nothing is deleted.** The `rotate-partitions` job is registered with no `keep` param, so it merges old periods into coarser ones — years, and then groups of years if necessary — keeping the partition count inside the server's budget without discarding data. Partition count stops being a reason to delete history.

**Retention is opt-in**, and it is a line of configuration rather than a second cron entry. To keep two years, in `owa-config.php`:

```
define( 'OWA_SCHEDULED_JOBS', array(

    // The array key is the JOB NAME, not the command it runs. Overrides are
    // per key, so a job OWA already registers needs only the key being
    // changed: no 'command' and no 'schedule' here means rotate-partitions
    // keeps both and only gains the keep argument. A job OWA does not
    // register needs both of them.
    'rotate-partitions' => array( 'params' => array( 'keep' => 24 ) ),
) );
```

`keep` is a number of months.

The same entry sets when the job runs. To keep two years and rotate at 4am on the 1st rather than at midnight:

```
define( 'OWA_SCHEDULED_JOBS', array(

    'rotate-partitions' => array(
        'schedule' => '0 4 1 * *',
        'params'   => array( 'keep' => 24 ),
    ),
) );
```

There is one form here, not a short one and a long one. `command`, `schedule` and `params` are three independent keys, and each is applied only if you give it. Omitting a key is how you say "leave this as OWA ships it", which is also what stops an installation pinning a value it never chose: a schedule restated in `owa-config.php` would go on overriding the shipped one long after the shipped one changed. See [Scheduled Jobs](Scheduled-Jobs.md) for the full set of keys and the cron syntax.

`partition-rotate` does both halves of the policy — it adds the future periods needed (up to twelve months ahead) and drops the ones behind. Retention and the lead only make sense together: keeping two years of data means nothing if new periods stop being created. Running it repeatedly is safe; the layout follows from the date, not from how many times the command has run.

### If the job stops running

**If `partition-rotate` is not run regularly, it will be expensive when it finally runs.** That is the whole consequence. Nothing breaks without it, no data is lost, reports are unaffected, and writes keep succeeding. But there are two externalities worth clearly stating:

**1. No retention happens.** Nothing is dropped, so disk is never reclaimed and data outlives whatever window `keep` describes. That is not a partitioning issue — it is simply what happens when the command that deletes old data does not run, and it would be equally true of any pruning mechanism.

**2. The catch-all partition fills, and the next run gets expensive.** This is the part that *is* about the catch-all, and it is the only part.

Once the twelve-month lead set of partitions runs out, new data lands in the catch-all partition. It is written normally, queried normally, and appears in reports normally — nothing breaks and nothing is lost. Queries do not even get slow in the way you might expect, because the bounded partitions still exist and still prune when Mysql plans queries, meaning a report for a recent period reads the catch-all alone rather than the whole table. Measured on a 37,000-row table with 36 months of history, a "last 30 days" query took:

| Table state | Query |
| --- | --- |
| Never partitioned | 1.05 ms |
| Partitioned, catch-all filled with 8 months | 0.74 ms |
| Partitioned and maintained | 0.71 ms |

A neglected installation is still faster than one that was never partitioned but its performance degrades toward that floor as the catch-all grows.

The cost is deferred to the next rotate, which splits the catch-all into proper partitions. An empty catch-all moves no rows and takes milliseconds. One filled with months of data has to rewrite everything that piled up, and MySQL blocks writes on the table while it does, so it is best not to let it build up. `partition-rotate` does all of the necessary actions: it creates new partitions where necessary, redistributes rows into the periods they belong to, and drops any that fall outside a `keep` window.

So the reason to keep the job scheduled is not that something breaks if you do not. It is that running it monthly costs a few unnoticed milliseconds, and running it once a year costs a maintenance window.

## Commands

All commands accept `--dry-run`, which reports the plan and changes nothing, and `table=owa_request` to act on a single fact table instead of all of them.

Boolean arguments are switches: `--dry-run` means on, and leaving it off means off. Values still use `key=value`.

### partition-status

```
/path/to/php cli.php cmd=partition-status
```

Reports the state of every fact table and changes nothing. This is the command to run first, and the one to run after any of the others to check the result.

| Argument | Description |
| --- | --- |
| `table` | Optional. Report on one fact table rather than all of them. |

It reports, per table: how many partitions there are and what share of the open-file budget they are, the range they cover, the granularity new periods will be cut at, the **layout as tiers**, what is in the catch-all, and how much lead is left. It closes with the one thing to act on — a table that has run out of lead, a table that is not partitioned yet, or the date the shortest lead expires.

```
owa_session: 41 partitions (40 bounded + catch-all), 19% of budget.
  covers        2006-01-01 to 2027-10-01
  granularity   half-month -- what new periods will be cut at
  5 years       3 partitions, 2006-01-01 to 2021-01-01
  1 year        4 partitions, 2021-01-01 to 2025-01-01
  monthly       9 partitions, 2025-01-01 to 2025-10-01
  half-month    24 partitions, 2025-10-01 to 2027-10-01
  catch-all     pmax, empty -- every row is in a dated partition.
  lead          26 partitions ahead, through 2027-10-01 -- 411 days from today.
```

**Why tiers rather than one granularity.** A table that has been rotated for a while is not one granularity: the recent months are cut at the granularity in force, and older ones have been merged into blocks of months or years to stay inside the budget. Reporting a single word for the table above would either claim fifteen-year-old data is available at half-month resolution or claim this month's is not. Each run of partitions covering the same length of time is listed with the span it covers, so both ends are visible.

The `granularity` line is separate from the tiers, and is the **head**: what `partition-rotate` will cut new periods at. That is inferred from the most recent month, so a coarsened tail never changes it.

The catch-all is counted by reading the partition and everything else is read from metadata, so the command is cheap to run on a busy installation.

### partition-rotate

```
/path/to/php cli.php cmd=partition-rotate keep=24
```

Keeps a fixed window of data: adds the periods ahead, then drops the ones behind. This is the command the scheduled job runs; the form above is how to run it by hand.

| Argument | Description |
| --- | --- |
| `keep` | Optional. Months of data to retain. **Omit it to retain everything** — old periods are then merged rather than dropped. There is no default: a parameter that discards data has to be stated, so nothing is deleted unless you ask. An unreadable value is refused rather than treated as absent, since the two mean opposite things. |
| `months-ahead` | Optional, defaults to `12`. How far ahead to maintain partitions. Values below 1 are floored to 1; the lead can be shortened but not removed. |
| `granularity` | Optional. By default each table keeps whatever granularity it already uses. |
| `--force` | Optional. Overrides the partition-count guard. |
| `--dry-run` | Optional. Reports what would be added, merged and dropped, and changes nothing. |

The lead is added **before** anything is dropped. Extending is the safe half, so a run that fails partway has gained coverage rather than having discarded history and then failed to create anywhere for new data to go.

### partition-init

```
/path/to/php cli.php cmd=partition-init
```

A **one-time conversion**. It partitions the fact tables that are not partitioned yet, and reports and skips the ones that already are.

It is safe to re-run, because a second run does nothing. It deliberately does not maintain a table it has already converted: topping the lead up and coarsening the tail is exactly what `partition-rotate` does, and applying a `granularity` on a later run would convert only the periods being added and leave the rest as they were — a silent, partial reorganisation that leaves one table holding two granularities. One job each: **init** sets a table up, **rotate** keeps it in shape, **reorganize** changes its granularity.

| Argument | Description |
| --- | --- |
| `granularity` | Optional. `monthly` (default), `half-month`, or `quarter-month`. Applies only to tables being converted by this run. |
| `months-ahead` | Optional, defaults to `12`. |
| `table` | Optional. Convert one fact table rather than all of them. |
| `--force` | Optional. Overrides the partition-count guard. |

### partition-drop

```
/path/to/php cli.php cmd=partition-drop older-than=24months
```

An ad-hoc prune. `older-than` accepts a date as `yyyymmdd`, or a period back from today such as `12months`, `18m`, `2years`, `90days`.

Prefer the period form in anything scheduled: a fixed date stops pruning the moment it is passed, and does so silently.

| Argument | Description |
| --- | --- |
| `older-than` | **Required.** A date or a period back from today. |
| `--force` | Optional. Required to drop every historical partition at once, which is usually a mistyped cutoff. |

### partition-reorganize

```
/path/to/php cli.php cmd=partition-reorganize granularity=half-month
```

Changes granularity. `partition-reorganize` **sets** granularity; `partition-rotate` then **maintains** whatever it finds, so a converted table keeps its choice rather than reverting on the next scheduled run.

| Argument | Description |
| --- | --- |
| `granularity` | **Required.** `monthly`, `half-month`, or `quarter-month`. |
| `from`, `to` | Optional `yyyymmdd` bounds. Converts only the periods the range touches, which is how one table can be coarse over old data and finer over recent data. |

Because no partition ever crosses a month boundary, changing granularity rewrites one month at a time rather than the whole table in a single unresumable statement.

## Choosing a granularity

| Granularity | Cuts on | Parts per month |
| --- | --- | --- |
| `monthly` | 1st | 1 |
| `half-month` | 1st, 16th | 2 |
| `quarter-month` | 1st, 8th, 15th, 22nd | 4 |

A finer granularity buys more precise retention: you can only drop whole partitions, so `monthly` means the boundary you actually reach can be up to a month earlier than the date you asked for.

It costs on the write path, though. Some lookups name a record's id rather than a date, and those cannot be pruned to a partition — they visit every one. That cost grows with the number of partitions, so a fine granularity held over years of history is measurably slower per insert than `monthly`. **`monthly` is the right default**; choose finer only if retention precision matters more than write latency.

`daily` is not offered. A partition per day is a file per day, and the `yyyymmdd` index already selects rows within a period.

## Retention behavior

**Only whole partitions are dropped.** A partition straddling the cutoff is kept, because dropping it would remove data on or after the date you asked for. The command reports the boundary actually reached, which is usually earlier than the one requested:

```
Retention cutoff: 20260115 (from "12months").
owa_request: dropped 2 partition(s). Data before 20260101 no longer exists.
owa_request: kept p20260101 (20260101 to 20260201) -- it also holds data on or
             after 20260115, so the boundary reached is 20260101.
```

**A cutoff later than today is treated as today.** Every bounded partition precedes such a date, so taken literally it would discard the period being written to right now. A future date is a mistyped year, not a request to throw away today's data, and the command says so rather than acting on it.

**Dropping every historical partition requires `--force`.** Collection continues either way — the current period and the catch-all always remain — but a cutoff that removes all history is more often a typo than an intent.

## The partition count guard

Every partition is a file, and MySQL caps how many table files it keeps open at once through `innodb_open_files` — a limit shared with every other table on the server, not a per-table allowance. OWA works out a budget from what is actually left rather than guessing, and refuses a plan that exceeds it.

**How the budget is calculated.** OWA reads the server's own numbers:

```
SELECT @@innodb_open_files,
       (SELECT COUNT(*) FROM information_schema.TABLES
        WHERE TABLE_TYPE = 'BASE TABLE') AS tables_present;
```

and then:

```
spare  = innodb_open_files - tables_present
budget = spare / OWA_PARTITION_BUDGET_RESERVE / number_of_fact_tables
         (never below OWA_PARTITION_MIN_LIMIT)
```

Worked through, on a server reporting 4,000 open files with 1,000 tables already present and seven fact tables to partition:

```
spare  = 4000 - 1000            = 3000
budget = 3000 / 2 / 7           = 214 partitions per fact table
```

The division by `OWA_PARTITION_BUDGET_RESERVE` (2 by default) is why only *half* the spare capacity is claimed: the reading is a snapshot of a shared resource, every other table draws on the same cap, and schemas grow. Taking all of it would be planning for a server that no longer exists by the time the partitions do.

Dividing by the number of fact tables is because they are partitioned together — a budget one table could afford alone is not one seven of them can.

Two ways this does not apply. If the driver cannot report `innodb_open_files`, a fixed default is used instead and the message says so. If `OWA_PARTITION_MAX_PARTITIONS` is set, that number is used verbatim and none of the above runs.

**When a plan exceeds it**, the command refuses and shows its arithmetic:

```
owa_session: refusing to create 500 partitions (limit 214 -- 3000 spare
open-file slots on this server, 1/2 of them shared across 7 table(s)).
Each partition is a file, and past the budget MySQL closes and reopens
tablespaces under load, which slows everything on the instance. Lower
OWA_PARTITION_DETAIL_MONTHS so less history is kept at full granularity,
choose a coarser granularity, or set OWA_PARTITION_MAX_PARTITIONS if you
have checked innodb_open_files yourself.
```

Exceeding the limit does not lose data — MySQL closes and reopens table files as needed — but it degrades performance for everything on the server, not just OWA. That is why the guard exists at all, and why it can be overridden by someone who has checked the number themselves.

## Configuration

Partitioning is shaped by constants in `owa-config.php`. These describe an installation rather than the intent of a single command, so they are not command arguments:

```
define('OWA_PARTITION_DETAIL_MONTHS', 24);
```

| Constant | Default | Controls |
| --- | --- | --- |
| `OWA_PARTITION_DETAIL_MONTHS` | 36 | How much recent history keeps fine granularity. Older periods may be merged into whole years. Lower it if a table cannot fit its budget. |
| `OWA_PARTITION_BUDGET_RESERVE` | 2 | Fraction of the server's spare open-file slots partitioning may claim, as a divisor: 2 means half. The cap is shared with every other table on the instance. |
| `OWA_PARTITION_MIN_LIMIT` | 24 | Fewest partitions a table may be limited to, whatever the arithmetic says. |
| `OWA_PARTITION_MAX_YEARS_PER_BLOCK` | 5 | Largest run of years that may be merged into one partition. A cap: without it, an unreachable budget would drive all of history into a single partition, which fits no better and means the whole past ages out at once. |
| `OWA_PARTITION_MAX_PARTITIONS` | 0 | Set a per-table budget outright instead of deriving it from `innodb_open_files`. `0` derives it. |

## Merging: keeping history without keeping a file per month

Old periods are **merged**, never silently dropped, to stay within the budget. A table can hold decades within a modest open-file allowance:

```
p20010101   2001 .. 2002        whole years, oldest and coarsest
p20020101   2002 .. 2003
   ...
p20240801   monthly, through the detail window and the lead
```

Merging is what lets partition count and retention be independent decisions. Without it, the only way back under an open-file limit is to delete history — which turns a resource constraint into a data-loss decision.

If a table still exceeds its budget after everything outside the detail window has been merged, the command says so and names the remedy: lower `OWA_PARTITION_DETAIL_MONTHS`. It will not collapse all of history into one partition chasing a budget it cannot reach.

## Checking the current state

```
SELECT TABLE_NAME, COUNT(*) AS partitions,
       MIN(PARTITION_DESCRIPTION) AS oldest_boundary,
       MAX(PARTITION_ORDINAL_POSITION) AS last
FROM information_schema.PARTITIONS
WHERE TABLE_SCHEMA = DATABASE() AND PARTITION_NAME IS NOT NULL
GROUP BY TABLE_NAME;
```

To see whether the lead is healthy, check how much data is sitting in the catch-all. In normal operation it should be empty:

```
SELECT COUNT(*) FROM owa_request PARTITION (pmax);
```

A non-zero count means the lead has run out and retention can no longer reach recent data. Run `partition-rotate` to recover.

`cmd=partition-status` answers both of those, for every fact table, without the SQL.

## A note for developers

Fact rows are sometimes fetched by id rather than by date, and such a query cannot prune to a partition. Do **not** "optimise" one by adding the current event's date to the `WHERE` clause: a session keeps the date it was created on for its whole life, so a session running past midnight would be looked for in the wrong partition, not found, and duplicated. Where a bound is available it must come from the row's own stored date, and the query must fall back to an unbounded lookup if the bounded one finds nothing.
