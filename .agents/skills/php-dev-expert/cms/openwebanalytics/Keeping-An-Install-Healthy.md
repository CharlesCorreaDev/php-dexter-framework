# Keeping An Install Healthy · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Keeping-An-Install-Healthy

---

# Keeping an Install Healthy

What needs to keep happening after OWA is installed, in one place.

## Ask the instance first

```
/path/to/php cli.php cmd=instance-info
```

Everything on this page is reported by that one command, alongside the schema
version, the module list, partitioning and the event queue — with each line
marked, and what to do about anything that is not fine. It changes nothing.

Run it after an upgrade, after moving to a new server, and whenever something is
wrong and you do not yet know what. The rest of this page explains *why* each of
those things matters. See
[Command Line Interface (CLI)](Command-Line-Interface-_28CLI_29.md) for its arguments.

Three sets of data go stale on their own, **all three fail quietly**, and two of
them do not run unless you say so.

| What ages | Scheduled for you? | What going stale looks like |
| --- | --- | --- |
| Fact table partitions | Yes, monthly | Partitions keep being added. **Nothing is ever deleted** unless you ask for retention. |
| User-agent patterns | **No** | New browsers and crawlers stop being recognised. No error — they are just counted as something else, or as nothing. |
| GeoIP database (if the Maxmind module is active) | **No** | Locations get quietly wrong. A stale database does not fail; it answers, and the reports look normal. |

## One cron entry runs the scheduled part

```
* * * * * cd /path/to/owa && php cli.php cmd=schedule-run
```

Every minute, because that line is not the schedule — it is the finest
resolution the schedules can use. Each job decides how often it actually runs.

Check it took:

```
php cli.php cmd=schedule-status
```

Out of the box two jobs are registered: `rotate-partitions` monthly, and
notification fetching. See [Scheduled Jobs](Scheduled-Jobs.md) for the full
picture and for how to add, retune or turn off a job.

## Retention is opt-in

`rotate-partitions` extends the fact tables' partitions and merges old periods.
**It deletes nothing.** An installation that wants a retention window asks for
one, by giving the job a `keep` argument in `owa-config.php`:

```
define('OWA_SCHEDULED_JOBS', array(
    // Keep two years of history.
    'rotate-partitions' => array( 'params' => array( 'keep' => 24 ) ),
));
```

Without that, data accumulates forever — which is a reasonable default for
analytics, but it is a choice you are making by not making it. See
[Partitioning Fact Tables](Partitioning-Fact-Tables.md).

## The two refreshes you have to opt into

Neither is scheduled by default, and that is deliberate rather than an
oversight: both make an **outbound HTTP request to a third party**, unattended,
on a schedule. For self-hosted analytics that is a decision the administrator
makes, not one that arrives with an upgrade.

### User-agent patterns

```
php cli.php cmd=update-ua-regexes
```

The patterns that identify browsers and crawlers come from `uap-core`, which is
a separate project from the PHP library that reads them. `uap-core` updates
roughly monthly; the PHP library bundles a copy taken whenever *its* maintainers
cut a release. So the bundled patterns are as old as the library's last release
however new the library is — **updating the Composer dependency does not help,
because there is nothing newer to update to.**

Every browser and crawler added upstream since that copy was taken is invisible
until you replace the file. It is written to `owa-data/ua-parser/`, outside the
source tree, so it survives an upgrade.

### GeoIP database

```
php cli.php cmd=update-geoip-db
```

Only available when the Maxmind GeoIP module is active. MaxMind publish updates
twice a week, and IP ranges are reassigned between countries and cities
continuously. Needs a licence key — see
[Maxmind GeoIP Module](Maxmind-GeoIP-Module.md).

### Scheduling them anyway

Either can be added to OWA's scheduler rather than run by hand:

```
define('OWA_SCHEDULED_JOBS', array(
    'update-ua-regexes' => array(
        'command'  => 'update-ua-regexes',
        'schedule' => '@monthly',
    ),
    'update-geoip-db' => array(
        'command'  => 'update-geoip-db',
        'schedule' => '@weekly',
    ),
));
```

Or run them from your own cron. Both are ordinary CLI commands.

## Related

- [Scheduled Jobs](Scheduled-Jobs.md) — the scheduler, and every job option
- [Partitioning Fact Tables](Partitioning-Fact-Tables.md) — retention and granularity
- [Maxmind GeoIP Module](Maxmind-GeoIP-Module.md) — licence key and setup
- [Command Line Interface (CLI)](Command-Line-Interface-_28CLI_29.md) — every command
