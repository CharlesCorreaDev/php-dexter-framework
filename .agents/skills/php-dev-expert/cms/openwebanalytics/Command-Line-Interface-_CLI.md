# Command Line Interface (CLI) · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Command-Line-Interface-(CLI)

---

OWA has a command line interface (CLI) that allows administrators to perform certain commands from the server's shell instead of via the web.

## A Note About Security

The CLI interface relies on the security of your filesystem for access control so be sure that only authorized system users have access to read, write and execute this file. See [File System Permissions](File-System-Permissions.md) for more info on how to secure your OWA installation.

## Invoking the CLI

The CLI is invoked as a PHP script on the command line. The argument `cmd` must be present and contain a valid command name.

```
/path/to/php /path/to/owa/cli.php cmd=command_name arg1=bar
```

### Argument syntax

Arguments that take a **value** are written `key=value`. A leading `--` is optional, so `--keep=24` and `keep=24` are the same.

Arguments that are **switches** are written `--switch`, and mean "on" by being present. There is no need to write `--dry-run=0`; leave the switch off instead.

```
cli.php cmd=partition-rotate keep=24 --dry-run
```

An argument that is neither — a bare word with no `=` and no leading `--` — is rejected, since it is almost always a value whose key was forgotten.

## Commands

The CLI can be used to perform multiple tasks using the commands outlines below.

### instance-info

```
/path/to/php cli.php cmd=instance-info
```

One report describing the whole instance. **Start here when something is wrong
and you do not yet know what**, and run it after an upgrade or a move to a new
server.

It changes nothing and is safe on a live instance: every query it makes is a
count or a metadata read.

What it reports:

| Section | Answers |
| --- | --- |
| *(heading)* | Version, location, public URL, database, PHP, timezone |
| Environment | The same checks the install wizard runs — PHP version, database driver, required extensions, writable directories, config file, dependencies, built assets — plus whether the error log is writable |
| Modules | Which modules are active, and which are present on disk but switched off |
| Schema | Each active module's schema version, and whether an update is pending |
| Scheduler | Whether the cron entry is running, and every registered job with its last run and failure count |
| Fact tables | Which fact tables are partitioned, how many partitions each has, and whether a retention window is set |
| Freshness | How old the user-agent patterns and the GeoIP database are |
| Event queue | How many events are waiting, and how old the oldest is |
| Contents | Counts of organizations, properties, sites and users |

Each line is marked `+` (fine), `!` (worth a look) or `x` (needs fixing), and
anything not fine is followed by what to do about it. A summary line at the end
counts each. Colour is used only when the output is going to a terminal.

The distinction between `!` and `x` matters: `!` is usually a **choice you have
not made**, such as unlimited retention, rather than a fault.

#### Arguments

| Argument | Description |
| --- | --- |
| `strict=1` | Exit non-zero when any check is in the `x` state. Off by default, so the command is safe to run from a script that does not expect failure. Use it when driving a monitoring check. |
| `no-color=1` | Never colour the output. Colour is already suppressed when output is not a terminal, and by the `NO_COLOR` environment variable. |

### update

```
/path/to/php cli.php cmd=update
```

This command is used to apply the latest database schema updates to OWA when you move from one version of the code to another. Running the command with no arguments will apply any pending updates that have not already been applied. However several additional arguments are available that provide fine grain control over which updates to apply.

#### Arguments

| Argument | Description |
| --- | --- |
| `--listpending` | Switch. Lists the updates that need to be applied but does *not* apply them. |
| `apply` | Applies a specific update package. Takes a concatenated string consisting of a module name and sequence number of the update that you want to apply (e.g. `apply=base.006`). |
| `rollback` | Un-applies a specific update package. Takes a concatenated string consisting of a module name and sequence number of the update that you want to roll back (e.g. `rollback=base.006`). |
| `--force` | Switch. Applies the update even if OWA believes it has already been applied. Use with `apply`. |

### add-site

```
/path/to/php cli.php cmd=add-site
```

This command is used to add a new tracked site to OWA.

#### Arguments

| Argument | Description |
| --- | --- |
| `domain` | **Required.** The fully qualified domain name (including the protocol). e.g. `http://some.domain.com` |
| `name` | A label for the name of your website. |
| `description` | A brief description of the site useful for notes. |
| `site_family` | An arbitrary tag for grouping websites in the UI. |

### flush-cache

```
/path/to/php cli.php cmd=flush-cache
```

Flushes the persistent object cache. This is important to do after updates. Also more important to do this regularly if you are using OWA's file based object cache.

### processEventQueue

```
/path/to/php cli.php cmd=processEventQueue
```

This command is used to process OWA's event queue. See [Event processing](Event-Queueing.md) for more info on why one would need to use this.

#### Arguments

| Argument | Description |
| --- | --- |
| `source` | Optional. The type of event queue to read from. Supported values are: `file`, `database` |
| `destination` | Optional. The type of event queue to place any new events that are created as a result of processing the source queue. Supported values are: `file` , `database` |

The `source` and `destination` arguments are typically used in situations where there are multiple OWA servers logging events that need to process events from a local queue but deposit second order events in a shared queue on another machine. See [Deployment](Deployment.md) and [Event processing](Event-Queueing.md) for more info.

### flush-processed-events

```
/path/to/php cli.php cmd=flush-processed-events
```

Removes events that have already been processed from the event queue.

### prune-event-queue-archives

```
/path/to/php cli.php cmd=prune-event-queue-archives
```

Prunes archived event queue files/records older than a given interval.

#### Arguments

| Argument | Description |
| --- | --- |
| `queues` | Optional. A comma separated list of queues to prune. Defaults to all queues registered by modules. |
| `interval` | Optional. The age interval beyond which archives should be pruned. |

### install

```
/path/to/php cli.php cmd=install
```

This command will install OWA by applying the database schema, creating the admin user, and adding a first tracked website. You must create OWA's [configuration](Configuration.md) file manually before running this command.

The admin user's password is set to the **database password** from your configuration file. Change it after logging in, with [`change-password`](#change-password) or from the admin interface.

#### Arguments

| Argument | Description |
| --- | --- |
| `user_id` | Required. The user name for the admin account you will log in with. There is no default — omit it and the account is created with an empty user name that you cannot log in as. |
| `email_address` | Required. This is the email address of the admin user. This is used in password recovery. |
| `domain` | Required. This is the domain of the first web site that you want to track. |

```
/path/to/php cli.php cmd=install user_id=admin email_address=you@example.com domain=http://www.example.com
```

### install-module *(deprecated)*

```
/path/to/php cli.php cmd=install-module module=some_module
```

**Use [`activate`](#activate) instead.** This command still works and is unchanged,
but `activate` now does exactly the same thing, so there is no longer a reason to
choose between them. It is removed in 2.0.

### activate

```
/path/to/php cli.php cmd=activate module=some_module
```

Installs and activates a module: creates any database tables it needs, records its
schema version, and switches it on. The same thing the **Activate** control on the
Modules settings screen does.

Safe to run on a module that is already installed and already active. It creates
only tables that are missing, and it does not touch the schema version of a module
that already has one — so a module with pending updates keeps them, and
[`update`](#update) still applies them.

**It also repairs a module that was switched on but never installed.** In earlier releases
this command only set the "active" flag: it created no tables and recorded no schema
version, while the Modules screen's Activate control installed properly. A module
enabled from the command line was therefore left half configured, and nothing
reported it — a missing schema version reads as version 1, and every module
currently requires version 1, so it looked current.

`cmd=instance-info` names any module in that state as *"active, but never
installed"*. Running this command on it records the version and creates anything
missing.

#### Arguments

| Argument | Description |
| --- | --- |
| `module` | Required. The name of the module to install and activate. |

### deactivate

```
/path/to/php cli.php cmd=deactivate module=some_module
```

Deactivates an active module.

#### Arguments

| Argument | Description |
| --- | --- |
| `module` | Required. The name of the module to deactivate. |

### change-password

```
/path/to/php cli.php cmd=change-password user=some_user_id password=yournewpasword
```

This command is used to change a user's password.

#### Arguments

| Argument | Description |
| --- | --- |
| `user` | Required. The user id of the user whose password needs to be changed. |
| `password` | Required. The new password. |

### update-ua-regexes

```
/path/to/php cli.php cmd=update-ua-regexes
```

Refreshes the patterns OWA identifies browsers and crawlers with.

Worth understanding why this exists, because updating your Composer
dependencies does **not** do it. The patterns come from `uap-core`, a separate
project from the PHP library that reads them. `uap-core` updates roughly
monthly; the PHP library bundles a copy taken whenever *its* maintainers cut a
release. So the bundled patterns are as old as that release however new the
library is, and there is nothing newer to update to through Composer. Every
browser and crawler added upstream since is unrecognised until you replace the
file.

The file is written to `owa-data/ua-parser/`, outside the source tree, so it
survives an upgrade.

Not scheduled for you — it makes an outbound request to a third party, which is
a decision for the administrator. See
[Keeping an Install Healthy](Keeping-An-Install-Healthy.md).

### fetch-notifications

```
/path/to/php cli.php cmd=fetch-notifications
```

Fetches the OWA release feed and stores anything new as a notification, which is
what puts the "new release available" badge in the admin interface. See
[Notifications](Notifications.md).

Unlike the other two outbound-request commands above, **this one is scheduled for
you** — it is registered as a daily job, so an install running
[`schedule-run`](#schedule-run) from cron already does it. Run it by hand only to
fetch immediately rather than waiting for the next daily tick.

It never fails a run: an unreachable feed, or a response that is not a release
list (a rate-limit message, for example), is reported and leaves the stored
notifications untouched.

#### Arguments

None.

### update-geoip-db

```
/path/to/php cli.php cmd=update-geoip-db
```

Refreshes the GeoLite2 city database that IP lookups resolve against. Only
available when the Maxmind GeoIP module is active, and needs a licence key —
see [Maxmind GeoIP Module](Maxmind-GeoIP-Module.md).

MaxMind publish updates twice a week. A stale database does not fail; it
answers, wrongly, and the reports look normal. Not scheduled for you, for the
same reason as above.

### update-document

```
/path/to/php cli.php cmd=update-document
```

Re-crawls tracked document (page) URLs to refresh their title and snippet attributes. With no `doc` argument it fetches every stored document over the network, so avoid running it too frequently.

#### Arguments

| Argument | Description |
| --- | --- |
| `doc` | Optional. The id of the specific document that needs updating. |

### schedule-run

```
/path/to/php cli.php cmd=schedule-run
```

Runs whatever scheduled jobs are due. **This is the one command that belongs in cron**, and the only one:

```
* * * * * php /path/to/owa/cli.php cmd=schedule-run
```

A tick with nothing due is silent and writes nothing. Full detail on [Scheduled Jobs](Scheduled-Jobs.md).

#### Arguments

| Argument | Description |
| --- | --- |
| `job` | Optional. Act on one job instead of all of them. |
| `--dry-run` | Switch. Reports what would run and changes nothing. |
| `--force` | Switch. With `job=`, runs it now regardless of its schedule. |
| `--force-release` | Switch. With `job=`, drops a lock left by a process that died. |
| `--prune-orphans` | Switch. Forgets state for jobs that are no longer registered. |

### schedule-status

```
/path/to/php cli.php cmd=schedule-status
```

Reports what the scheduler is doing and changes nothing: every registered job, its schedule and where that came from, when it last ran and with what arguments, when it is next due, and — when a job is not running — which of the possible causes applies, down to naming a missing cron entry.

Full detail on [Scheduled Jobs](Scheduled-Jobs.md).

#### Arguments

None.

### partition-status

```
/path/to/php cli.php cmd=partition-status
```

Reports the partitioning state of every fact table and changes nothing: the range covered, the partition count against the open-file budget, the layout as tiers, what is in the catch-all, and how much lead is left before a rotate is due. It ends with the one thing to act on.

Run it before any of the other partition commands, and again afterwards to check the result.

Full detail is on [Partitioning Fact Tables](Partitioning-Fact-Tables.md).

#### Arguments

| Argument | Description |
| --- | --- |
| `table` | Optional. Report on one fact table instead of all of them. |

### partition-rotate

```
/path/to/php cli.php cmd=partition-rotate keep=24
```

Maintains the fact tables' date partitioning: creates the periods ahead, merges old ones to stay within the server's open-file budget, and — if `keep` is given — drops periods outside the retention window. This is the command to schedule; the others are for one-off work.

Full detail, including why a scheduled run matters, is on [Partitioning Fact Tables](Partitioning-Fact-Tables.md).

#### Arguments

| Argument | Description |
| --- | --- |
| `keep` | Optional. Months of data to retain. **Omit it to retain everything** — old periods are then merged rather than dropped. Nothing is deleted unless you ask. |
| `months-ahead` | Optional, defaults to 12. How far ahead to maintain partitions. |
| `granularity` | Optional. By default each table keeps the granularity it already uses. |
| `table` | Optional. Act on one fact table instead of all of them. |
| `--dry-run` | Switch. Reports what would be added, merged and dropped, and changes nothing. |
| `--force` | Switch. Overrides the partition-count guard. |

### partition-init

```
/path/to/php cli.php cmd=partition-init
```

A one-time conversion for an installation that predates the feature. It rewrites every fact table, so run it in a maintenance window.

Safe to re-run, because a second run does nothing: a table that is already partitioned is reported and skipped. Maintaining it afterwards — extending the lead, merging old periods, pruning — is `partition-rotate`; changing its granularity is `partition-reorganize`.

#### Arguments

| Argument | Description |
| --- | --- |
| `granularity` | Optional. `monthly` (default), `half-month` or `quarter-month`. Applies only to tables this run converts. |
| `months-ahead` | Optional, defaults to 12. |
| `table` | Optional. Act on one fact table instead of all of them. |
| `--dry-run` | Switch. Reports the plan and changes nothing. |
| `--force` | Switch. Overrides the partition-count guard. |

### partition-drop

```
/path/to/php cli.php cmd=partition-drop older-than=24months
```

An ad-hoc prune. Only whole partitions are dropped, so the boundary actually reached is usually earlier than the date requested, and the command reports it.

#### Arguments

| Argument | Description |
| --- | --- |
| `older-than` | Required. A date as `yyyymmdd`, or a period back from today such as `12months`, `18m`, `2years`, `90days`. Prefer the period form in anything scheduled. |
| `table` | Optional. Act on one fact table instead of all of them. |
| `--dry-run` | Switch. Reports what would be dropped and changes nothing. |
| `--force` | Switch. Required to drop every historical partition at once. |

### partition-reorganize

```
/path/to/php cli.php cmd=partition-reorganize granularity=half-month
```

Changes the granularity of existing partitions. `partition-rotate` then maintains whatever it finds.

#### Arguments

| Argument | Description |
| --- | --- |
| `granularity` | Required. `monthly`, `half-month` or `quarter-month`. |
| `from`, `to` | Optional `yyyymmdd` bounds. Converts only the periods the range touches. |
| `table` | Optional. Act on one fact table instead of all of them. |
| `--dry-run` | Switch. Reports the plan and changes nothing. |
| `--force` | Switch. Overrides the partition-count guard. |

### rederive-dimension-ids

```
/path/to/php cli.php cmd=rederive-dimension-ids --dry-run
/path/to/php cli.php cmd=rederive-dimension-ids
```

Converts an existing installation's dimension ids from 32-bit to 63-bit. A new installation is created that way and never needs this.

OWA derives a dimension's id from its own content, so that any node can compute it without asking the database. Those ids used to be 32-bit, which collides at ordinary scale: measured over eight trials, the first collision arrived at a median of about 96,000 distinct values. Two different pages sharing an id are merged in every report that touches them, silently. At 63 bits a table of ten million rows carries roughly a 0.0005% chance of one collision.

**Run it in a window you choose.** It copies each dimension row to its new id, repoints every fact key at the copy, and only then removes the original — so both ids resolve throughout and a report run mid-migration still resolves every dimension. The fact-key rewrite is scoped to one partition at a time, which keeps locks short and means every partition except the current month is data nothing is writing to.

Until it runs, the installation keeps deriving 32-bit ids, so its data stays internally consistent. `cmd=update` records that state; this command clears it at the end.

**Safe to run again.** Old ids are below 2^32 and new ones are 63-bit, so applying the map twice is a no-op, and what is left to do is visible in the data rather than in any bookkeeping. A run that is killed part way can simply be run again.

Some keys cannot be converted: a fact row pointing at a dimension row that no longer exists has no content to derive an id from. Those resolved to nothing before the migration too, so they are reported and left alone rather than being counted as unfinished work.

**Partition your fact tables first — this is a prerequisite.** The rewrite is issued one partition at a time; on an unpartitioned table it becomes one unbounded statement per key column across the whole table, holding a single long lock while tracking continues. Then drop any history you do not report on, since the cost is driven by how many fact rows have to be touched. Both reduce the work before it starts, and partitioning is what lets the rewrite and the verification proceed one bounded partition at a time. The whole procedure, including timing figures and how to tell whether your storage can sustain it, is on [Converting Dimension Ids](Converting-Dimension-Ids.md).

#### Arguments

| Argument | Description |
| --- | --- |
| `--dry-run` | Switch. Reports what would be converted and changes nothing. |
| `--force` | Switch. Runs even when the installation is not flagged as needing it, deciding from the data instead. For an installation whose flag was cleared while keys were still unconverted. Combined with `--dry-run` this is also how you confirm a finished conversion, since it checks the rows rather than the flag. |
| `--report-dangling` | Switch. Counts fact keys that reference a dimension row which no longer exists. Off by default: it reads every fact table a second time, roughly doubling the run, to produce a number that prompts no action — those keys resolved to nothing before the conversion and still do afterwards. |

### backfill-visitor-acquisition

```
/path/to/php cli.php cmd=backfill-visitor-acquisition --dry-run
/path/to/php cli.php cmd=backfill-visitor-acquisition
/path/to/php cli.php cmd=backfill-visitor-acquisition batch=2000
```

Fills in how each existing visitor was first acquired. New in 1.14.0, alongside the Acquisition Source, Medium, Campaign, Ad and Search Terms dimensions.

Acquisition was not recorded before 1.14.0, so every visitor created by an earlier version has none, and those five dimensions show nothing for them until this runs. The values are still recoverable because `owa_visitor.first_session_id` names the session the visitor arrived in, so this reads them back off that session.

**It is a command rather than part of `cmd=update`** because a visitor with no acquisition is a consistent state, and because it joins `owa_visitor` to `owa_session` and four dimension tables, which on a database shared with other sites is a decision about timing that belongs to whoever knows what else is running.

**Safe to run again, and safe to stop.** Rows already filled no longer match, so a rerun skips them and continues where the last one ended.

**It never overwrites.** Only rows holding none of the five values are touched; a value written when the visitor was created is left alone.

### repair-geo-encoding

```
/path/to/php cli.php cmd=repair-geo-encoding dry-run=1
/path/to/php cli.php cmd=repair-geo-encoding
```

Repairs city and region names stored as double-encoded UTF-8. New in 1.14.0.

The geolocation reader used to convert every name it read from MaxMind from ISO-8859-1 to UTF-8, but MaxMind stores names as UTF-8 already. Any name containing a non-ASCII character was therefore written twice-encoded and displays as mojibake — `MÃ¼nchen` rather than `München`. The reader was fixed in 1.14.0; this repairs rows written before that.

Names that are already correct are left alone, so it is safe to run more than once.

### reset-secrets

```
/path/to/php cli.php cmd=reset-secrets
```

This command will regenerate the strings for the secrets contained in your config file (e.g. OWA\_AUTH\_KEY, OWA\_AUTH\_SALT, etc.)

## Registering New Commands

Modules can register their own CLI commands by using the `registerCliCommand` method. This method take a command name as well as a controller module/class string (e.g. base.foo). For example, to register new command add the follwing to your module's constructor:

```
$this->registerCliCommand('mycommand', 'mymodule.mycontroller');
```
