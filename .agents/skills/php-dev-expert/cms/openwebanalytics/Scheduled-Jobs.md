# Scheduled Jobs · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Scheduled-Jobs

---

# Scheduled Jobs

OWA runs its periodic maintenance from **one** cron entry. Jobs are registered in
code, and any installation can retune them, add its own, or turn one off without
touching crontab again.

```
* * * * * cd /path/to/owa && php cli.php cmd=schedule-run
```

That is the only line you need. Add it once.

## Quick start

1. Add the cron entry above.
2. Wait a minute, then check it took:

```
/path/to/php cli.php cmd=schedule-status
```

If the dispatcher has never run, that command says so in as many words and prints
the crontab line to add — it does not leave you guessing.

## Why every minute

The crontab line is **not the schedule**. It is the *resolution floor* — how
finely the schedules below can be expressed. Each job decides for itself how
often it actually runs; almost every tick does nothing at all.

A minute is the finest interval cron can express, so the floor never binds and a
schedule always means what it says. A coarser entry such as `*/5` would let you
configure a job for `* * * * *` and have it silently run every five minutes, and
configuration that quietly cannot do what it says is worse than none.

The cost is small: a tick that finds nothing due costs one OWA boot, measured at
about 66ms, and does **no** database writes. A full day is roughly 95 seconds of
CPU.

## What runs by default

Two jobs:

| job name | runs | schedule | arguments |
| --- | --- | --- | --- |
| `rotate-partitions` | `partition-rotate` | `@monthly` | **none** |
| `fetch-notifications` | `fetch-notifications` | daily, at an hour derived per installation | **none** |

`fetch-notifications` is spread across the day rather than given a fixed hour,
so that every OWA installation in the world does not call the same endpoint at
midnight. The hour is derived from the installation, so it is stable for you and
different from your neighbour's.

`rotate-partitions` extends the fact tables' partition lead and merges old
periods to stay within the open-file budget. **It deletes nothing.** Retention
only happens if you ask for it, by adding a `keep` argument in your own
configuration — see below.

Nothing else is registered. The user-agent and GeoIP refreshes are *not*
scheduled either, deliberately — both make an outbound request to a third party,
which is an administrator's decision rather than something an upgrade should
start doing. See [Keeping an Install Healthy](Keeping-An-Install-Healthy.md).

Event-queue processing is *not* scheduled by default, because whether to drain the queue at all, and how often,
depends on your traffic and on whether you queue events in the first place.

## Configuring jobs

Define `OWA_SCHEDULED_JOBS` in `owa-config.php`. It is a single array keyed by
**job name**:

```
define( 'OWA_SCHEDULED_JOBS', array(

    // Retune a job OWA registers: keep its @monthly schedule, and add
    // a two-year retention window. THIS is how an installation opts into
    // deleting old data.
    'rotate-partitions' => array( 'params' => array( 'keep' => 24 ) ),

    // Add a job OWA does not register. New entries need both a
    // 'command' and a 'schedule'.
    'drain-queue' => array(
        'command'  => 'processEventQueue',
        'schedule' => '*/2 * * * *',
    ),

    // The same command a second time, under its own name, with its own
    // arguments and cadence.
    'rotate-request-table' => array(
        'command'  => 'partition-rotate',
        'params'   => array( 'table' => 'owa_request' ),
        'schedule' => '@weekly',
    ),
) );
```

Turning a built-in job off is a schedule like any other — but note it is the same
key, so it replaces the entry above rather than joining it:

```
'rotate-partitions' => array( 'schedule' => 'off' ),
```

Three keys, all optional on an existing job:

| key | meaning |
| --- | --- |
| `command` | the CLI command to run. Required for a job OWA does not register itself. |
| `schedule` | a cron expression, an `@` alias, or `off`. Required for a new job. |
| `params` | arguments passed to the command, exactly as on the command line. |

**The array key is the job's identity; `command` is what runs.** They are separate
so the same command can be scheduled more than once: the `rotate-request-table`
example rotates one fact table weekly while everything else stays monthly. The
shipped job shows the same split, being named `rotate-partitions` and running
`partition-rotate`.

The key is matched against the **name**, never the command. A key matching no
registered job name is read as a new job rather than as a way to reach an
existing one by what it runs, so `'partition-rotate' => array( 'params' => ... )`
does not configure the job that runs `partition-rotate`; it is refused as an
incomplete new entry. The name is also what `schedule-status` prints and what
`schedule-run job=<name>` takes.

### Overrides are per key

Giving only `params` keeps the registered schedule. Giving only `schedule` keeps
the registered arguments. You never have to restate a value you did not mean to change —
restating values is how configuration drifts away from the code.

### What happens to a bad entry

A mistake disables **that job and nothing else**. A typo in one line must never
stop the others running.

| case | what happens |
| --- | --- |
| `command` names something unregistered | refused, named in a notice; other jobs run |
| `command` is `install`, `update` or `reset-secrets` | refused — these re-run schema installation, mutate the schema underneath the running process, or rewrite `owa-config.php`. Checked against the *command*, so a friendly job name cannot smuggle one past. |
| `schedule` cannot be parsed | that job never runs, and is **never** given a default — running something on a cadence nobody chose is worse than not running it |
| new entry missing `command` or `schedule` | refused, named |
| `schedule` is `off` | still registered and still listed, just never due |

`cmd=schedule-status` shows every one of these against the job it affects.

## Schedules

Standard five-field cron expressions, plus the usual shorthands:

|  |  |
| --- | --- |
| `@hourly` | `0 * * * *` |
| `@daily` / `@midnight` | `0 0 * * *` |
| `@weekly` | `0 0 * * 0` |
| `@monthly` | `0 0 1 * *` |
| `@yearly` / `@annually` | `0 0 1 1 *` |

All five fields support `*`, a number, a list (`1,3,5`), a range (`1-5`) and a
step (`*/15`). Day-of-week is `0`–`6` with `0` = Sunday.

Schedules are read in **your installation's configured timezone** — the same one
reports are rendered in — so `0 4 * * *` means four in the morning to the person
reading the reports.

One inherited cron quirk: when *both* day-of-month and day-of-week are
restricted, they are **OR**'d. `0 0 1 * 1` means "the 1st, and every Monday", not
"Mondays that fall on the 1st".

## A missed job runs once, not once per miss

This is the one behaviour worth understanding, because it differs from most
schedulers.

Each job records the **occurrence** its last run satisfied. Being due is then
"has a matching moment passed since then", not "is it exactly 04:00 now". So a
job stays due until it has actually run, and a tick that arrives late still runs
it.

If the machine is off for three days, a daily job runs **once** when it comes
back — not three times. There is no backfill.

That imposes a rule on anything you schedule:

> **A scheduled job must be convergent, not incremental.**

`partition-rotate` is convergent: it extends *to* a boundary computed from
today, so one run after a gap leaves exactly the state three runs would have. A
job that processes "yesterday's data" is incremental — after a gap it would
silently skip days. Make such a job convergent before scheduling it.

## Commands

### schedule-run

The dispatcher. This is the one that belongs in cron.

```
/path/to/php cli.php cmd=schedule-run
```

| flag | effect |
| --- | --- |
| `--dry-run` | report what would run and change nothing |
| `job=NAME --force` | run one job now, ignoring its schedule (still takes the lock) |
| `--force-release job=NAME` | drop a lock left behind by a process that died |
| `--prune-orphans` | forget state for jobs that are no longer registered |

A tick with nothing to do is **silent** and writes nothing.

### schedule-status

Read-only. Run it whenever you want to know what the scheduler is doing, and
after any change to check the result.

```
/path/to/php cli.php cmd=schedule-status
```

```
rotate-partitions   monthly, on the 1st at 00:00 (code)
  runs         partition-rotate (no arguments)
  next due     2026-09-01 00:00
  last run     never
  ACTION       Overdue by 16 day(s), and no job has EVER recorded a run -- the
               dispatcher has not run at all. That almost always means the cron
               entry is missing or wrong. Add:
               * * * * * cd /path/to/owa && php cli.php cmd=schedule-run

The dispatcher has never run. Until the cron entry above is in place, nothing here happens.
```

For each job it shows the schedule and **where it came from** — `code`,
`config`, or `config-override` — so "why is this running at this time with these
arguments" is answerable without reading two files. It also flags when a job's
arguments have changed since its last run, so a change is visible *before* it
takes effect.

### Why a job is not running

Rather than saying only "this is behind", `schedule-status` works through the
possible causes and names the first that applies:

| it reports | meaning |
| --- | --- |
| schema updates pending | the dispatcher refuses every job until `cmd=update` is run |
| scheduler disabled | `OWA_SCHEDULER_ENABLED` is false |
| job disabled | its schedule is `off` |
| orphaned | no longer registered; kept only for its history |
| running now | a lock is held, since when |
| lock past its lease | the run holding it died; how to clear it |
| did not finish | the process was killed mid-run — a fatal error or the OOM killer |
| failing since… | with the recorded reason; it is retried each tick |
| refused | the job declined to act, and why |
| **the dispatcher is not running** | everything else has been excluded. Prints the crontab line to add. |

That last one is a conclusion rather than a guess: every way a *live* dispatcher
could leave a job behind is directly observable, so ruling them all out leaves
only one explanation.

## Jobs never overlap themselves

Each job takes its own lock while it runs. If a job is still working when the
next tick arrives, that tick **skips it** — it does not wait, and it never starts
a second copy. The occurrence stays unsatisfied, so the job runs at the first
tick after the lock clears. A skip defers work; it does not lose it.

Locks are per job, so a long queue drain never blocks `rotate-partitions`.

Each lock carries a **lease**, which is purely a crash-recovery timeout: if the
process holding it dies, nothing else can clean up, so after the lease expires
the next tick treats the lock as abandoned and takes it over. Nothing enforces
the lease against a running job — a job that outruns it is not killed.

The lease is calculated by the command from the work it can see, and is
deliberately **not configurable**. Your schedule and arguments are policy and
belong to you; how long a lock is trusted without proof of life is mechanism, and
an operator has strictly less information than code that has just planned the
work. If a lock is stuck, the answer is to release it deliberately:

```
/path/to/php cli.php cmd=schedule-run --force-release job=rotate-partitions
```

## Removing a job

Take it out of `OWA_SCHEDULED_JOBS`, or deactivate the module that registered it,
and it stops running immediately.

**Its history is kept.** `schedule-status` lists it under "orphaned" so a job
that vanished because of a typo is visible rather than silently gone. Nothing is
deleted automatically — auto-pruning would mean a misspelt job name destroyed the
real job's entire run record. Clear them when you mean to:

```
/path/to/php cli.php cmd=schedule-run --prune-orphans
```

Put a job back and it resumes from where it left off. If its stored occurrence is
stale it is due, and runs **once**.

## Turning the whole scheduler off

```
define( 'OWA_SCHEDULER_ENABLED', false );
```

Stops every job without touching crontab — for a migration or an incident.
`schedule-status` says so at the top of its report.

## Before you schedule partition-rotate on an existing install

Two things, in order:

1. **Apply schema updates.** The scheduler adds two tables, so `cmd=update` must
   run first. Until it does, the dispatcher refuses everything — and says so.
2. **Run `partition-rotate` by hand once** on any installation whose partition
   lead has already expired. That first catch-up rewrites everything that
   collected in the catch-all with writes blocked, which can take minutes on a
   busy table. Do it in a window you chose, not at midnight on the 1st.
   `cmd=partition-status` tells you whether the lead has expired.

Also **remove any standalone `partition-rotate` crontab line** you already have.
The job lock does not cover a command you run yourself, so both would run.

## For developers: registering a job

In a module's `registerJobs()`:

```
function registerJobs() {

    // registerJob( name, command, schedule, params )
    //
    // The name is not the command. Keeping them distinct here means the
    // shipped job demonstrates the rule that OWA_SCHEDULED_JOBS keys on the
    // name, rather than leaving every example ambiguous.
    $this->registerJob( 'rotate-partitions', 'partition-rotate', '@monthly', array() );
}
```

All four arguments are stated every time. `$command` is deliberately not
defaulted to `$name`: a registration should be readable without consulting the
CLI command registry to work out whether the first argument is a label or a
command.

A job **is** a CLI command, so anything scheduled can be run by hand with the
same name and produce the same output — a job that cannot be reproduced from a
terminal cannot be debugged from one either. It also means every job already has
a capability check and its own tests.

Two rules for anything you register:

- It must be **convergent** (see above).
- If it is loop-shaped and long-running, call `$this->heartbeat()` every so often
  to extend its lock. The dispatcher cannot do this for you: it runs your job
  in-process and is blocked inside the call while it works. `heartbeat()` does
  nothing when the command is run by hand, so a scheduled run and a manual one
  behave identically.

To report an outcome rather than silently succeeding:

```
return $this->refuse( 'nothing to do, and here is why' );   // declined; occurrence consumed
return $this->fail( 'it went wrong' );                      // failed; stays due, retried
```

A command that says nothing is recorded as `ok`, which is what every existing
command means.

## See also

- [Command Line Interface (CLI)](Command-Line-Interface-_28CLI_29.md)
- [Partitioning Fact Tables](Partitioning-Fact-Tables.md)
- [Event Queueing](Event-Queueing.md)
