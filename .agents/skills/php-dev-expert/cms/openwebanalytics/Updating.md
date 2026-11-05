# Updating · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Updating

---

It is possible to update an existing OWA instance in just a few steps, however you will need access to the filesystem of the server where OWA is running.

## Pre-Update Steps

- Take a snapshot/backup of your database just in case the update fails and you need to roll back to your prior version.
- Delete your `/path/to/owa/owa-data/caches/1` directory if it exists.

## Updating From a Release Tarball

Download the latest [fully packaged release tarball](https://github.com/Open-Web-Analytics/Open-Web-Analytics/releases).
The asset is named `owa_<version>_packaged.tar`, and it unpacks its contents **into the
current directory** rather than into an `owa` folder, so unpack it somewhere empty rather
than on top of your install.

It contains `vendor/` and the built JavaScript and CSS already, so there is no Composer or
npm step. It also does not contain `composer.json`, so there is nothing for Composer to
read even if you try.

**Two things in your install are yours rather than the release's.** Neither is in the
tarball, so neither can be overwritten by it — but both have to come with you when you
move to a new directory:

- `owa-config.php` — your database connection and any settings you keep in the file.
- `owa-data/` — your logs and caches, the MaxMind GeoIP database if you use that module,
  and the file event queue if you have one configured.

Anything else you added yourself — a module of your own under `modules/`, a template
override — has to come across too.

### Unpack alongside, then swap

```
# 1. Back up the database, and the install directory as it stands.
cp -a /path/to/owa /path/to/owa-backup

# 2. Unpack the release into an empty directory.
mkdir /tmp/owa-new
tar -xf owa_<version>_packaged.tar -C /tmp/owa-new

# 3. Carry your own files into it.
cp -a /path/to/owa/owa-config.php /tmp/owa-new/
cp -a /path/to/owa/owa-data       /tmp/owa-new/

# 4. Swap.
mv /path/to/owa /path/to/owa-previous
mv /tmp/owa-new /path/to/owa
```

Before step 4, this lists everything the old install has that the new release does not —
your own additions, and anything left behind by earlier updates:

```
diff -rq /path/to/owa /tmp/owa-new | grep '^Only in /path/to/owa'
```

Check that ownership and permissions on the result are what your web server expects; see
[File System Permissions](File-System-Permissions.md).

### Why not unpack over the top

Unpacking over your existing install does work, and it will not touch `owa-config.php` or
your data, because neither is in the archive. What it does not do is **remove the files
the new version deleted**: `tar` writes what is in the archive and leaves everything else
alone, so those files stay on disk through that update and every one after it.

Most of them are inert. The case where they are not is a whole module, because OWA lists
the module directories that are present on disk — so a module dropped from a release goes
on being offered on the Modules settings screen long after you have updated past it.
Swapping directories is what actually removes it.

### Apply any database updates

- Check to see if any database updates are required by opening a web browser and navigating to your OWA dashboard at `http://yourdomain/path/to/owa`.
- If database updates are required OWA will prompt you to do apply those updates via the browser or tell you to run the update command using OWA's [Command Line Interface (CLI)](Command-Line-Interface-_28CLI_29.md).

## Updating from Github

If you installed OWA using Git, you can easily keep our installation up to date using the following steps:

- `cd` into the directory where OWA is installed.
- `git pull` - this updates your install with any new source files
- `composer install` - this brings your PHP dependencies in line with the release, and regenerates the autoloader
- `npm ci` - this installs the node dependencies the release was built against
- `npm run build` - this rebuilds the Javascript and asset packages. `public/` is not committed, so a pull never updates it
- Check to see if any database updates are required by opening a web browser and navigating to your OWA dashboard at `http://yourdomain/path/to/owa`. If database updates are required, OWA will prompt you to do apply those updates or tell you to run the `update` command using OWA's [Command Line Interface (CLI)](Command-Line-Interface-_28CLI_29.md).

**Use `composer install`, not `composer update`.** `install` reproduces the dependency
versions recorded in `composer.lock` — the ones the release was tested against. `update`
ignores the lock file and resolves new versions of everything, which is a dependency bump
nobody asked for and which is not covered by OWA's tests. `npm ci` and `npm update` differ
the same way.

**Run `composer install` even when no dependency changed.** It is also what rewrites
`vendor/composer/autoload_classmap.php`. If you installed with `--optimize-autoloader`, as
the [production install instructions](Installing-from-Github.md) suggest, that file is a
snapshot of which class lived in which file on the day it was generated. A later `git pull`
that deletes or renames a class leaves it pointing at files that no longer exist, and PHP
writes two warnings to your error log every time one of them is looked up before falling
back to resolving the class by namespace. Nothing breaks, which is why it can go unnoticed
for a long time. If you have skipped the step, `composer dump-autoload` on its own repairs
it.

## After Updating to 1.13.0

**1. Report URLs have changed.** Most reports are now [report definitions](Report-Definitions.md) rather than one controller each, and they are reached through a single action with a report id:

```
before:  index.php?do=base.reportPages&siteId=...
now:     index.php?do=base.report&reportId=pages&siteId=...
```

**There is no redirect from the old form** — an old link answers 404. Links inside OWA are already correct, so this only affects links kept outside it: bookmarks, dashboards, emailed links, anything embedding a report URL. The available report ids are listed on the [Reports](Reports.md) page.

Eight detail reports whose parent report already showed the same breakdown were retired, along with the transaction detail report. Those ids answer 404 rather than redirecting to anything.

**2. Your goals are now goal events.** Goals were twenty numbered slots per site; they are rows now, with names and conditions. `cmd=update` migrates existing goals into the new tables — there is nothing to do by hand.

The numbered metrics (`goal1Completions`, `goal2Completions` and so on) still exist and still work, and a goal event keeps its number so those metrics keep resolving. See [Conversion Tracking](Conversion-Tracking.md).

**3. `cmd=activate` now installs a module.** It creates the module's tables and records its schema version — what the Modules settings screen's Activate control has always done. Previously the command only set the active flag, which left a module switched on with no tables and nothing reporting it.

If you have ever enabled a module from the command line, check it:

```
/path/to/php cli.php cmd=instance-info
```

A module in that state is listed as *"active, but never installed"*. Running `cmd=activate module=<name>` on it repairs it, and is safe to run on a module that is already installed.

`cmd=install-module` is deprecated in favour of `activate`. It still works and is removed in 2.0.

**Your site ids do not change.** A site's identity is minted rather than derived from its domain from this version, so one domain can be measured by more than one Profile — but no update rewrites existing values. Tracking code already deployed keeps working.

**Check the result.** `cmd=instance-info` is new in this release and reports the environment, module and schema state, the scheduler, partitioning, data freshness, queue depth and what the instance holds, in one pass. See [Keeping an Install Healthy](Keeping-An-Install-Healthy.md).

## After Updating to 1.12.0

**1. Check the site id in your tracking code.** OWA now refuses tracking events naming a site it does not have. An unregistered site id could never be reported on anyway — reporting is entered through a site — so anything recorded under one was invisible from the moment it was written.

Nothing to do if your tracking code carries a real site id. If it carries the documentation placeholder, a truncated value, or the id of a site you have since deleted, that traffic stops being recorded and the reason is written to the error log:

```
Not logging event: site id "your_site_id" is not registered on this installation.
```

Your site id is the Tracking ID on the Observation Profile's own screen — pick the Profile from the site control at the top of the admin interface. See [Troubleshooting](Troubleshooting.md).

**2. Convert your dimension ids, when it suits you.** Dimension ids are derived from content and were 32-bit, which collides at ordinary scale: the first collision arrives at a median of about 96,000 distinct values, and two pages sharing an id are merged in every report that touches them. They are 63-bit from this version.

A new installation is created that way. An existing one keeps deriving 32-bit ids until you convert it, so its data stays internally consistent in the meantime and there is no hurry. `cmd=update` records that state; the conversion clears it at the end.

**Prepare first — it makes the conversion much smaller.** The cost is driven by how many fact rows have to be touched, so partition your fact tables before converting, and then drop any history you do not report on. Every row removed beforehand is a row the conversion never has to rewrite or scan, and dropping from a partitioned table is a metadata operation rather than a mass delete:

```
/path/to/php cli.php cmd=partition-init                       # partition first
/path/to/php cli.php cmd=partition-drop older-than=24months   # then prune, if it suits you
/path/to/php cli.php cmd=rederive-dimension-ids --dry-run
/path/to/php cli.php cmd=rederive-dimension-ids
```

Run it in a window you choose. It copies each dimension row to its new id, repoints every fact key at the copy, and only then removes the original, so both ids resolve throughout and reports run against a half-converted table still resolve every dimension. The fact-key rewrite is scoped to one partition at a time, so locks stay short and every partition except the current month is data nothing is writing to.

It is resumable: a run that is killed part way can simply be run again.

**Partition your fact tables first — this is a prerequisite, not a tuning tip.** The fact-key rewrite is issued one partition at a time, so on a partitioned table each statement is bounded and holds a short lock. On an unpartitioned table it becomes one statement per key column across the whole table: a single lock held for as long as it takes to rewrite every fact row you have, while your tracker is still writing. There is no hurry to convert ids, so partition first and convert afterwards.

**Check your storage headroom before you start.** The work is dominated by disk I/O rather than CPU. On an installation of roughly 136,000 dimension ids and 2.5 million fact rows across its partitioned fact tables, on storage sustaining 3,000 IOPS, the whole conversion took about **eight minutes**. Because it is I/O-bound, sustained IOPS decides the duration — so on burstable volumes, check your headroom has not been spent.

See [Converting Dimension Ids](Converting-Dimension-Ids.md) for preparation, timing, and what the conversion deliberately leaves behind.

## After Updating to 1.11.0

Two steps that earlier versions did not need.

**1. Add the job scheduler's cron entry.** OWA now runs its periodic maintenance from scheduled jobs, dispatched by one cron entry:

```
* * * * * cd /path/to/owa && php cli.php cmd=schedule-run
```

Nothing periodic runs without it. OWA reminds you at the top of every admin page until it is in place. See [Scheduled Jobs](Scheduled-Jobs.md).

**2. Decide when to partition your fact tables.** New installations are partitioned by date automatically. An existing installation is deliberately **not** converted during the update, because converting rewrites every fact table with writes blocked, and that is something you should schedule rather than have fire during an upgrade.

Until you convert, the `rotate-partitions` job refuses with "no fact table is partitioned". That is the expected state, not a fault. Convert in a maintenance window when it suits you:

```
/path/to/php cli.php cmd=partition-init --dry-run
/path/to/php cli.php cmd=partition-init
```

Budget roughly five seconds per million rows, per table. See [Partitioning Fact Tables](Partitioning-Fact-Tables.md).

## Applying Database Updates from the Command Line Interface

When updating OWA (or any third party modules) from a prior version, the update may require changes be made to OWA's database schema. Because the time to apply updates to database tables vary by the size of the database, it is sometimes not possible to perform these updates via the browser interface.

Instead, all database updates can be applied via OWA's command line interface (CLI). This requires that you have access to run PHP scripts in your server command shell.

To apply database updates via the CLI, run the following in the command shell on your server:

```
/path/to/php /path/to/owa/cli.php cmd=update
```

See the documentation for the [Command Line Interface (CLI)](Command-Line-Interface-_28CLI_29.md) update command.
