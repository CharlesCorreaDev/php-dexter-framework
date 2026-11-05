# Queue | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/system/queue

---

# Queue

- ### On this Page

  - [Jobs](docs_5x__system__queue.md#jobs)
  - [Queue Runners](docs_5x__system__queue.md#queue-runners)
  - [Local Development](docs_5x__system__queue.md#local-development)
  - [Custom Queues](docs_5x__system__queue.md#custom-queues)
  - [Troubleshooting](docs_5x__system__queue.md#troubleshooting)

The **queue** is Craft’s way of delegating certain long-running tasks to an asynchronous background process.

In most cases, these tasks are either too time-consuming, resource-intensive, or error-prone to handle during a normal HTTP request-response cycle, without significant impacts on responsiveness and user experience in the [control panel](docs_5x__system__control-panel.md) or front-end.

Here are a few of the things Craft uses the queue for:

- Updating search indexes;
- Resaving elements in bulk;
- Generating image transforms;
- Propagating elements between sites;
- Executing a **Find and Replace** operation across all site content (started via Utilities);

Users with the **Queue Manager** [permission](docs_5x__system__user-management.md#permissions) can view information about the queue from the [Utilities](docs_5x__system__control-panel.md#utilities) section of the control panel. The status of any currently-running job (or the last failed job) will also be displayed at the bottom of the main navigation.

## [#](#jobs)Jobs

Each message in the queue is called a **job**. Jobs have a type (corresponding to the kind of work that will happen when it is executed) and often include additional data that helps define their scope—sometimes to a specific element (like when updating the [search](docs_5x__system__searching.md) index) or a set of elements (like when resaving entries after a section’s settings have changed).

Jobs will enter and clear the queue naturally, as you use Craft. In the unlikely event a job fails, it will remain visible in the Queue Manager until it is retried or released. You can view more information about a failed job by clicking its description in the table.

my-craft-project.ddev.site/admin/utilities/queue-manager/884

![Viewing a job in the queue manager utility](/docs/assets/img/queue-manager.bb14893d.png)

Viewing a job in the queue manager utility.

Plugins can take advantage of the queue by providing custom [job types](docs_5x__extend__queue-jobs.md)!

[Commerce](https://craftcms.com/docs/commerce/5.x/), for example, uses the queue to send order emails so that a customer’s checkout experience is not disrupted by esoteric mailer errors.

### [#](#statuses)Statuses

New jobs enter the queue in a **waiting** state. Once a runner picks up the job, it will be marked as **reserved** and Craft will attempt to execute it. Depending on the type of job, it may be allowed a certain number of “attempts” (temporary failures) or an overall “TTR” (time to reserve). If a job exhausts its attempts or runs out of time, it will be marked as **failed**.

Failed jobs can be retried from the control panel, or with the [CLI](docs_5x__reference__cli.md#queue-release). While additional *attempts* are made automatically after a failure, *retries* must be triggered manually.

In addition to a status, jobs also have **description** and a **progress** value, both of which may be updated throughout its life. Jobs that handle large datasets typically report progress after each item processed (like when resaving elements), or are sliced into smaller batches.

## [#](#queue-runners)Queue Runners

By default, the queue is run automatically over [HTTP](#http). For more control, you can use Craft’s CLI via [CRON](#cron)—or even as a [daemonized service](#daemon).

Advanced configuration of the queue (including alternate [drivers  (opens new window)](https://github.com/yiisoft/yii2-queue/tree/master/docs/guide#queue-drivers) and proxies) is possible via [application config](docs_5x__reference__config__app.md#queue).

### [#](#http)HTTP

At the end of every site request, Craft checks whether the queue contains waiting jobs. If it does, a JavaScript snippet is injected into the page, triggering a second request from the client that kicks off a non-blocking background process. This is skipped for [Ajax requests](docs_5x__development__forms.md#ajax), and responses that produced something other than HTML.

This behavior is enabled by default, but can be turned off by setting [runQueueAutomatically](docs_5x__reference__config__general.md#runqueueautomatically) to `false`. If you elect to disable the automatic queue runner, you must configure an alternative.

For control panel requests, the JavaScript bundle included on every page performs a similar request—this is also how Craft is able to display the queue’s status in the sidebar!

### [#](#cli)CLI

All Craft features will work as expected with the default queue configuration.

The following options are configured outside of Craft, and are only recommended for users with some unix systems administration experience. Check with your host to see if they offer native tools for managing services and CRON tasks.

Projects that rely on the queue for time-sensitive or critical features (like sending [order status emails](https://craftcms.com/docs/commerce/5.x/system/emails) in Commerce) can take advantage of Craft’s [CLI](docs_5x__reference__cli.md#queue) for more flexibility over when and where the queue is run:

```
php craft queue/run
```

Let’s look at some examples of how this can be used in different scenarios.

#### [#](#cron)CRON

The `queue/run` action is suitable for manual or scheduled invocation. For example, if you wanted to process the queue every five minutes, you might add this to your system’s `crontab`:

```
*/5 * * * * /usr/bin/env php /var/www/craft queue/run
```

Note that we’re using an absolute path to the Craft installation. CRON’s “working directory” will likely be different than your user’s home directory or your web root!

If your site frequently generates many “expensive” tasks (like transforming images or resaving entries) or tasks that communicate with other web services, make sure your CRON intervals don’t end up overlapping. Just like web requests, running many concurrent jobs in different processes can cause them all to slow down—but even if intervals *do* overlap, Craft will never execute reserved jobs in more than one place.

#### [#](#daemon)Daemon

A “daemonized” queue runner can be registered with most unix-based systems so that the queue operates like other system services—MySQL or Redis, for example. Configuration will depend on the service manager your platform uses (likely `systemd` or `supervisor`), but should follow a similar structure, and will ultimately use the long-running `queue/listen` command:

```
php craft queue/listen --verbose
```

Whereas `queue/run` runs only until the queue is empty, `queue/listen` continually polls the database for new jobs, exiting only when terminated.

The `--verbose` flag tells Craft to write some basic information about the queue’s state to `stdout`. Running this from the command line (locally, or via SSH on a remote server) will output a message when the worker successfully initializes, and a message each time a job starts and finishes.

Let’s look at some configuration, in practice. The following examples are adapted from the underlying [Yii queue component  (opens new window)](https://github.com/yiisoft/yii2-queue/blob/master/docs/guide/worker.md) documentation:

systemdsupervisor

```
# /etc/systemd/system/craft-queue-worker@.service
# Note the @ in the filename above!

[Unit]
Description=Craft CMS Queue %i
After=network.target
After=mysql.service
Requires=mysql.service
# (...or postgresql.service!)

[Service]
# User + Group should agree with HTTP processes:
User=www-data
Group=www-data
# Sometimes required for other packages that rely on `getcwd()`:
WorkingDirectory=/var/www
# The command we want to daemonize:
ExecStart=/usr/bin/php /var/www/craft queue/listen --verbose=1 --color=0
# Only restart after unexpected failures:
Restart=on-failure
# Extend time between restart attempts after a failure:
RestartSec=120
# Allow more time before issuing a kill signal:
TimeoutStopSec=300

[Install]
WantedBy=multi-user.target
```

```
; /etc/supervisor/conf.d/craft-queue-worker.conf

[program:craft-queue-worker]
; Use the process number in its name (required when using `numprocs`):
process_name=%(program_name)s_%(process_num)02d
numprocs=4
; The command we want to daemonize:
command=/usr/bin/php /var/www/craft queue/listen --verbose=1 --color=0
; User + Group should agree with HTTP processes:
user=www-data
group=www-data
; Sometimes required for other packages that rely on `getcwd()`:
directory=/var/www
; Allow more time before issuing a kill signal:
stopwaitsecs=300
```

The `TimeoutStopSec` and `stopwaitsecs` settings in the examples above should agree with (or exceed) [your queue’s `ttr`](docs_5x__reference__config__app.md#queue), so that currently-running jobs may complete and the runner may exit gracefully when the process manager sends a `TERM` signal. At the end of that window (if the queue has not voluntarily exited), the process manager sends a `KILL` signal and may interrupt the queue in the middle of a task. This safeguard relies on the [`pcntl` PHP extension  (opens new window)](https://www.yiiframework.com/extension/yiisoft/yii2-queue/doc/guide/2.3/en/retryable), which is *not* a core Craft [requirement](docs_5x__requirements.md), and may need to be enabled by your host.

Long-running processes must be restarted to pick up code and schema changes after a deployment or migration!

To register your newly created (or updated) service, the process manager itself may need to be restarted, or specifically told to look for new configuration.

Your process manager also has commands for interacting with the service:

systemdsupervisor

```
# Install hooks to run a single worker on boot:
sudo systemctl enable craft-queue-worker

# Start a worker:
sudo systemctl start craft-queue-worker

# Get the worker’s status:
sudo systemctl status craft-queue-worker

# Stop a worker:
sudo systemctl stop craft-queue-worker
```

```
# Enter the supervisor command line utility:
sudo supervisorctl

# Tell supervisord there is a new configuration available:
sudo supervisorctl reread

# Apply new configuration changes and restart affected services:
sudo supervisorctl update
```

While `supervisor` stores the number of processes spawned for a given service as part of its configuration, `systemd` requires you to declare those instances when using the `systemctl` command:

```
# Install four instances of a service:
sudo systemctl enable craft-queue-worker@{1..4}

# Start those instances:
sudo systemctl start craft-queue-worker@{1..4}

# Get the status for any matching instances:
sudo systemctl status "craft-queue-worker@*"

# Restart any matching instances:
sudo systemctl restart "craft-queue-worker@*"
```

This is possible due to the `@` symbol at the end of our service unit file’s name.
Note that the bash-specific [expansion syntax  (opens new window)](https://www.gnu.org/software/bash/manual/bash.html#Brace-Expansion) (`{1..4}`) is *not* surrounded by quotes, but the “glob” patterns (`*`) *are*.
This is critical for the system to be able to expand and map the commands to the appropriate service instances(s).

These setup instructions ensure your service is started whenever the host machine is rebooted, but it’s important to check your work! If your host allows, consider manually rebooting your machine and verifying that the queue is active.

When configuring and testing a daemonized queue runner, disable [runQueueAutomatically](docs_5x__reference__config__general.md#runqueueautomatically). Leaving this on may give the false impression that the queue is working as intended, despite it actually being run over HTTP.

#### [#](#workers)Workers

Some PaaS solutions like Heroku and Digital Ocean support dedicated background services. These workers are typically built from the same base “image,” but rather than running an HTTP server (or being connected to the public internet at all), they execute a provided command—just like the [daemonized](#daemon) runner, above.

This paradigm can be bizarre at first, but it’s similar in many ways to load-balancing—in order to work, shared resources (like the database, cache, and asset storage) must be accessible from each web server and worker. Craft will automatically divide jobs among multiple workers, so applications that make heavy use of the queue (say, to process user-uploaded images) can be scaled appropriately, independent of the front-end.

#### [#](#performance-considerations)Performance Considerations

Running the queue on the same machine that serves HTTP requests can (in extreme cases) cause bottlenecks. The CLI does not abide by the same [resource](docs_5x__reference__config__general.md#phpmaxmemorylimit) or [time  (opens new window)](https://www.php.net/manual/en/info.configuration.php#ini.max-execution-time) limits as web requests, meaning it can degrade or interrupt service for much longer.

To ensure web requests are prioritized, the unix program `nice` can help the kernel schedule workloads on your server’s CPU(s). Replace the queue command in your [daemon](#daemon) with this:

```
/usr/bin/nice -n 10 /usr/bin/php /var/www/craft queue/listen --verbose=1 --color=0
```

Here, `-n 10` just signals that the process should be a *lower* priority than the default (`0`). Negative values (*increased* priority) are not allowed, and `19` is the lowest valid priority. `nice` can also be used in a CRON task, by swapping the `queue/listen` action for `queue/run` as in previous examples.

Do not run the queue as root!

## [#](#local-development)Local Development

If you’ve turned off [runQueueAutomatically](docs_5x__reference__config__general.md#runqueueautomatically) for your live infrastructure, the queue will also be disabled in your local environment. You can [override](docs_5x__configure.md#environment-overrides) the general config setting by declaring `CRAFT_RUN_QUEUE_AUTOMATICALLY=true` in your `.env`, or use the [CLI](#cli) as you would in a [daemon](#daemon):

DDEVOther

```
ddev craft queue/listen --verbose
```

```
php craft queue/listen --verbose
```

## [#](#custom-queues)Custom Queues

This section discusses features that are only relevant to projects that use a [custom module](docs_5x__extend__module-guide.md) or [private plugin](docs_5x__extend__plugin-guide.md#private-plugins).

You can set up additional queues via [application configuration](docs_5x__configure.md#application-configuration), but *only jobs in the default `queue` component will be observable from the control panel*.

Each queue must be defined under a separate `id`:

```
return [
    // ...
    'bootstrap' => [
        'sluggishQueue',
    ],
    'components' => [
        'sluggishQueue' => [
            'class' => craft\queue\Queue::class,
        ],
    ],
];
```

Craft doesn’t know about this queue, so it will never push jobs into it. Secondary queues are only practical when you have implemented a [custom job](docs_5x__extend__queue-jobs.md) that would otherwise interfere with the processing of your main queue. While [multiple runners](#daemon) can help avoid situations where one long-running (but not necessarily time-sensitive) job blocks many other quick (but vital) jobs, the only way to ensure tasks run in completely separate “channels” is to configure multiple queues, and push your custom job into a non-default queue.

Custom queues can be managed from the CLI using their kebab-cased component `id`:

```
php craft sluggish-queue/listen --verbose
```

## [#](#troubleshooting)Troubleshooting

See the knowledge base article on [Resolving Failed Queue Jobs  (opens new window)](https://craftcms.com/knowledge-base/resolving-failed-queue-jobs) for a list of common queue problems.

### [#](#logging)Logging

Any time a job `echo`s text or calls a logger method, that output is sent to a special `queue` log target in addition to the current request type (`web` or `console`). Messages originating from the queue are also given a special `[queue.LEVEL]` tag to make them easier to filter out when aggregated. Read more about these behaviors in the [logging](docs_5x__system__logging.md) section.

Daemonized workers’ output may also be captured in your system’s logs, which can be viewed using the [`journalctl` command  (opens new window)](https://www.freedesktop.org/software/systemd/man/journalctl.html):

```
journalctl -u craft-queue-worker.service
```

`supervisor` users also have access to a [dedicated logs viewer  (opens new window)](http://supervisord.org/running.html#supervisorctl-actions):

```
supervisorctl tail craft-queue-worker
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/system/queue.md)
