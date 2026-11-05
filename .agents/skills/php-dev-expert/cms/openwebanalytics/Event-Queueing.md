# Event Queueing · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Event-Queueing

---

OWA's default mode is to process event synchronously within the invoking PHP process. While this makes things simpler, it also ties up server resources by having the PHP process wait around for writes to the database to complete. For very high volume deployments it is possible to configure OWA process events asynchronously using first writing them to an intermediate "event queues" and then periodically using a second PHP process to "process" those queues and write events to the database.

## Activating Event Queuing

To activate event queuing define the OWA\_QUEUE\_EVENTS constant in your owa-config.php file like so:

`define('OWA_QUEUE_EVENTS', true);`

## Incoming Tracking Event Queue

This event queue is used to store incoming events created by OWA trackers. These new tracking events (recorded by log.php) will be written to an events.txt file in the owa-data/logs/ directory.

When this queue is active, accepting a beacon at `log.php` does no fact-table writes at all — the event is serialized and appended to the file queue, and the fact tables are only written when the queue is later drained (see [How to process the Event Queues](#how-to-process-the-event-queues)). This is what keeps `log.php` cheap on a high-volume node: the expensive ingestion work is deferred to the drain process.

### Eliminating database access on a logging node

Even with the file queue on, an ordinary OWA process still makes two database queries **at boot**, before it ever looks at the event:

1. a connection handshake (OWA sets the session `sql_mode` on connect), and
2. a read of your saved settings from the `owa_configuration` table.

These are really one cause: OWA opens the database connection in order to load your saved settings, and opening the connection is what issues the handshake. So a node dedicated to nothing but queuing incoming events to a file is still opening a DB connection on every beacon it accepts.

You can suppress both by telling that node to run on **static configuration only** — its built-in defaults plus whatever its `owa-config.php` defines — and skip the boot-time read of saved settings from the database:

```
define('OWA_USE_STATIC_CONFIG_ONLY', true);
```

With this set, a file-queue logging node accepts and queues tracking events with **zero** database access. The database is only touched later, on the instance that drains the queue.

**This is only appropriate for a dedicated logging node.** Because saved settings are no longer read from the database, everything such a node relies on must be pinned in its `owa-config.php`:

- the database connection constants (still needed so the *drain* — or a co-located reporting instance — can reach the DB),
- `define('OWA_QUEUE_EVENTS', true);` to turn queuing on,
- and any non-default base-module setting the node needs, set with `$this->set('base', '<key>', <value>);` (for example the tracked sites, the queue type, or `async_log_dir`).

Do **not** set `OWA_USE_STATIC_CONFIG_ONLY` on the instance that serves reports or the admin UI. Those read their configuration (and everything you change through the admin Settings screens) from the `owa_configuration` table, and would silently fall back to defaults with it on.

> **Why a config-file `define` and not an admin setting or a caller override?** The switch has to be in effect *before* OWA decides whether to read settings from the database, which happens very early in boot. A config-file `define` is read in time; an admin setting lives in the very table the switch is meant to avoid reading, and a value passed to `new owa([...])` is applied too late to prevent the read. The config file is the only place it works.

### Remote Event Queuing

The Incoming Tracking Event Queue implementation is plug-able and as such you can swap the simple file mechanism for a `http` implementation that will post new tracking events to a remote OWA instance that has been setup as a remote queuing endpoint.

To enable remote http event queuing you must:

1. activate the "Remote Queue" module on your logging instance via the Admin > Settings > Modules screen.
2. specify the URL of the remote queue endpoint in your logging instance's owa-config.php file like so:

`$this->setSetting( 'remoteQueue', 'endpoint', 'http://domain/path/to/owa/queue.php');`

#### Configuring an Remote Event Queue Instance

You must install and configure a separate instance of OWA on another host to act as a remote event queue. To do so you must:

1. Install a new instance of OWA on a separate host. NOTE: Even though it's possible, it's not a good idea to queue over the public Internet. Remote queuing endpoints should be secured on a private subnet and only made accessible to the logging instances within your network.
2. Enable the queue.php endpoint (which is disabled by default) by adding the following to the instance's config file:

`$this->setSetting( 'disabledEndpoints', []);`

3. Explicitly set the event types that you want your remote event queue to process. This can be done in your config file like so:

`$this->setSetting( 'allowed_queued_event_types', ['base.page_request', ...]);`

These steps will be simplified by a module in a future release.

## The Processing Queue

OWA uses a secondary event queue called "processing" for persisting secondary events that need to be retried at a later time. This queue is implemented as a database table and is used in cases where there are multiple OWA logging instances setup to all write to the same database. In this case it is possible for the tracking events from a user's web browsing session could be recorded across multiple servers and therefor be processed out of order. The OWA event processing model assumes eventual consistency and the Processing queue is used to store out of order events so they can be retried at a later date.

## How to process the Event Queues

Event queues are processed via a single command using the command line interface on the instance of OWA where event processing needs to occur. If you are using the file implementation for the Incoming Tracking Event Queue, then processing needs to occur on each of your logging instances. If you are using the http implementation then processing only needs to occur on your Remote Event Queue Instance.

To process all event queues on an OWA instance, run:

`/path/to/php cli.php cmd=processEventQueue`

That is the manual form, and it is what you want when draining by hand or testing.

### Draining on a schedule

Queue processing is **not** scheduled by default, because whether to drain at all, and how often, depends on your traffic and on whether you queue events in the first place. Add it as a job rather than as a second crontab line, in `owa-config.php`:

```
define( 'OWA_SCHEDULED_JOBS', array(

    'drain-queue' => array(
        'command'  => 'processEventQueue',
        'schedule' => '*/2 * * * *',
    ),
) );
```

The job scheduler's own cron entry dispatches it. See [Scheduled Jobs](Scheduled-Jobs.md).

There is a correctness reason to prefer this over your own crontab line, not just tidiness. `getNextItems()` selects unhandled rows without claiming them: there is no `SELECT ... FOR UPDATE`, and the `is_assigned` column that would support a claim is never read or written. Two drainers running at once therefore fetch the same rows and process them twice. A scheduled job takes a per-job lock, so a run that is still working when the next tick arrives is skipped rather than duplicated. Two crontab lines have nothing stopping them overlapping.

If you do keep your own crontab line, make sure only one of the two exists. The job lock does not cover a command you run yourself.
