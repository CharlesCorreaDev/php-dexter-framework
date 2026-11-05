# Cron - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Cron

---

# Cron

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Cron

[Installation](Installation.md "Installation")

- [Installing Moodle](Installing_Moodle.md "Installing Moodle")
- [Installation quick guide](Installation_quick_guide.md "Installation quick guide")
- Cron
- [Nginx](Nginx.md "Nginx")
- [Apache](Apache.md "Apache")
- [IIS](Internet_Information_Services.md "Internet Information Services")
- [Routing](Configuring_the_Router.md "Configuring the Router")
- [Installing plugins](Installing_plugins.md "Installing plugins")
- [Installation FAQ](Installation_FAQ.md "Installation FAQ")
- [Upgrading](Upgrading.md "Upgrading")
- [Upgrade overview](Upgrade_overview.md "Upgrade overview")
- [Automatic updates deployment](Automatic_updates_deployment.md "Automatic updates deployment")
- [Git guide](Git_for_Administrators.md "Git for Administrators")
- [Administration via command line](Administration_via_command_line.md "Administration via command line")
- [Upgrading FAQ](Upgrading_FAQ.md "Upgrading FAQ")
- [Moodle migration](Moodle_migration.md "Moodle migration")

The Moodle 'cron' process is a PHP script (part of the standard Moodle installation) that must be run regularly in the background. The Moodle cron script runs different tasks at differently scheduled intervals.

**IMPORTANT: Do not skip setting up the cron process on your server for your Moodle. Your site will not work properly without it.**

It is recommended that *the cron is run every minute*, as required for asynchronous activity deletion when using the [recycle bin](recycle_bin.md "recycle bin").

The cron program (that runs the Moodle script) is a core part of Unix-based systems (including Linux and OSX) being used to run all manner of time-dependent services. On Windows the simplest solution is to create a task in the Windows Task Scheduler and set it to run at regular intervals. On shared hosting, you should find the documentation (or ask support) how cron is configured. Most shared hosting systems use CPanel to manage sites, and usually will have a section for Cron Jobs on the panel.

Essentially, the task involves adding a single command to the list of cron activities on your system. On Unix based systems this list is a file called a 'crontab' which all users have.

## General discussion

See the later sections for your server type; this section contains some general background information.

There are essentially two steps to implementing cron:

1. identifying the correct command to run
2. finding the right place on your system to put the command

### Working out the Moodle cron command

Moodle has two different ways to deploy cron which use different scripts within the Moodle install. These are as follows...

1. The CLI (command line interpreter) script. This will be at the path

   ```
   /path/to/moodle/admin/cli/cron.php
   ```

   If in doubt, this is the correct script to use. This needs to be run by a 'PHP CLI' program on your computer. So the final command may look something like

   ```
   /usr/bin/php /path/to/moodle/admin/cli/cron.php
   ```

   You can (and should) try this on your command line to see if it works. **WARNING: Check your command-line PHP version is compatible with your chosen version of Moodle. The command-line PHP program is different to the one running your web site and is not always the same version.**
2. If, for some reason, you cannot run the CLI script there is the web based script. Note that this is now deprecated and may be removed in future versions. This needs to be run from a web browser and will be accessed via a web url something like **<http://your.moodle.site/admin/cron.php>**. You can find command line based web browser (e.g. wget) so the final command may look like

   ```
   /usr/bin/wget http://your.moodle.site/admin/cron.php
   ```

   This has the advantage that it can be run from \*anywhere\*. If you can't get cron to work on your machine it can be run somewhere else.

### The web based Moodle cron command

- If you have a choice, do not use the web based cron. It is likely to be removed in a future Moodle version.
- From Moodle 2.9 onwards, the cron job can no longer be run from web by default. You will get an error message:

```
!!! Sorry, internet access to this page has been disabled by the administrator. !!!
```

- You can change this in ' Dashboard ► Site administration ► Security ► Site policies ' by deselecting 'Cron execution via command line only'.
  - You will be warned that 'Running the cron from a web browser can expose privileged information to anonymous users. Thus it is recommended to only run the cron from the command line or set a cron password for remote access.'
  - You can then write a 'Cron password for remote access'. If this field is left empty, no password is required.
  - This means that the cron.php script cannot be run from a web browser without supplying the password using the following form of URL:

```
 http://site.example.com/admin/cron.php?password=opensesame
```

### Finding the right place to put the command

This really does depend on the system you are using and you should find and read the documentation for your platform or hosting. In most cases getting the Moodle cron to run consists of establishing the correct command (above) and then adding it, and the time to run the command, to some sort of file. This might be either through a specific user interface or by editing the file directly.

If using the CLI version you also need to make sure that the cron process is run as the correct user. This is not an issue with the web version.

Example... installing cron on Ubuntu/Debian Linux. Assuming logged in as root..

*use the crontab command to open a crontab editor window for the www-data user. This is the user that Apache (the web server) runs as on Debian based systems*

```
$ crontab -u www-data -e
```

*This will open an editor window. To run the cli cron script every 1 minute, add the line:*

```
* * * * * /usr/bin/php  /path/to/moodle/admin/cli/cron.php >/dev/null
```

NOTE: the final **>/dev/null** sends all the output to the 'bin' and stops you getting an email every 1 minute.

## Setting up cron on your system

Choose the information for your server type:

- [Cron with Unix or Linux](Cron_with_Unix_or_Linux.md "Cron with Unix or Linux")- Cron services on various UNIX and Linux flavored operating systems.
- [Cron with Windows OS](Cron_with_Windows_OS.md "Cron with Windows OS") - Cron services in Windows
- *Apple OSX* - use the built-in 'crontab' service which is exactly the same as [Cron with Unix or Linux](Cron_with_Unix_or_Linux.md "Cron with Unix or Linux"). However, you might want to do it the 'Apple way' using launchd - see [Cron with MAC OS X](Cron_with_MAC_OS_X.md "Cron with MAC OS X")
- [Cron with web hosting services](Cron_with_web_hosting_services.md "Cron with web hosting services")- Cron services in various web hosting examples.

Here are some more instructions for specific hosts (please check that these are up to date):

- [Cron on 1and1 shared servers](Cron_on_1and1_shared_servers.md "Cron on 1and1 shared servers")

## Using third party cron service

Besides using cron hosted on your own server, you may use third party cron service (usually called webcron):

- [cron-job.org](https://cron-job.org/) is a free service. (1Minute cron is possible)

- [EasyCron](https://www.easycron.com) - A webcron service provider that eliminates the need of crontab or other task schedulers to set cron job.

- [WebCron](https://webcron.talent-factory.ch/) - A free and easy webcron service provider.

### Cron settings in Moodle

An admin can set cron execution via command line only or a cron password for remote access in 'Site security settings' in the Site administration.

### Remote cron

Using the 'web based' version of cron it is perfectly ok to place the cron process on a different machine to the Moodle server. For example, the cron service on a Unix server can invoke the cron web 'page' on a Windows-based Moodle server.

## Scheduling tasks

An administrator can schedule cron tasks very precisely from Administration > Site administration > Server > Scheduled tasks, see [Scheduled tasks](Scheduled_tasks.md "Scheduled tasks")

## Running cron for several Moodle servers

- Tasks can run in parallel and processes use locking to prevent tasks from running at the same time which allows cron to be triggered from multiple web servers that serve the same Moodle instance.

- If you are running different Moodle instances on the same server, then each Moodle instance needs a cron job. (Even a single Apache web server can run different Moodle instances on different domains by using its virtual hosts capability <https://httpd.apache.org/docs/2.2/vhosts/index.html>.)

## Debugging Scheduled Tasks

Sometimes, a particular cron task may not be working correctly. In Moodle versions before 2.7 - any cron task that was throwing exceptions would prevent the rest of cron from running. The only way to monitor if cron was completing each time, was to add some automated checking of the output of running cron (e.g. searching for the string "Cron completed at ").

In Moodle 2.7 and later, a single failing scheduled task will not prevent the remaining tasks from completing. When any single scheduled task fails, it is marked as a failure, and scheduled to be reattempted. If the task keeps failing, the next scheduled time will be backed off until it is attempted at most once every 24 hours. But checking the [Scheduled tasks](Scheduled_tasks.md "Scheduled tasks") admin page, you can see if any task is currently failing (it will have a non-zero fail delay - which is the number of seconds to wait before reattempting a failed task). A simple way to debug a failing task, is to run it immediately using the [cli scheduled task runner](Administration_via_command_line.md#Scheduled_tasks "Administration via command line") and monitor the output.

## Logging and monitoring

Ideally you should also be logging the output of cron somewhere and monitoring it for issues. You can monitor the overall status of cron to make sure there are no errors by visiting:

Site administration / Reports / System status (/report/status/index.php)

You can also wire this status report up to tools like Icinga / Nagios using the Check API (<https://docs.moodle.org/dev/Check_API>) cli commands or with the help of plugins like <https://github.com/catalyst/moodle-tool_heartbeat>.

`/admin/cli/checks.php`

If there are errors then you can get more details for recently run tasks from the Logs column on the Scheduled task page, but this won't show ad hoc task failures:

Site administration / Server / Tasks / Scheduled tasks (/admin/tool/task/scheduledtasks.php)

To see ad hoc task failures you either need to rerun the task manually yourself and see the errors, or you need to have already collected the logs for review. For a Moodle running on a single box you could log to a simple log file, or for a cluster you might want to use syslogd or similar, e.g.:

```
 * * * * * /usr/bin/php  /path/to/moodle/admin/cli/cron.php 2>&1 | /usr/bin/logger ...
```

## Low latency adhoc tasks

Each time cron is run, after the scheduled tasks the ad hoc tasks are also run. While scheduled tasks can run at most once a minute, ad hoc tasks can be queued at any moment, and generally you want them processed as soon as possible and to not have to wait for the scheduled task to run first. If you only run the normal admin/cli/cron.php then not only might it have to wait to process all the scheduled tasks first, if it has already finished you will have to wait until the next minute for cron to start again for it to be processed.

Instead you can run one or more dedicated ad hoc task processors which run in parallel to the main cron process.

```
 * * * * * /usr/bin/php  /path/to/moodle/admin/cli/adhoc_task.php --execute --keep-alive=59
 * * * * * /usr/bin/php  /path/to/moodle/admin/cli/adhoc_task.php --execute --keep-alive=59
...
```

Starting from Moodle 3.9 the—keep-alive option runs like a daemon so when the queue is empty rather than exiting it waits for new tasks to be queued so it can start processing as soon as possible.

## Scaling up cron with multiple processes

As your site grows many of the scheduled tasks will take longer to complete, and also there will be more ad hoc tasks queued which need to be processed. The cron system is designed to work in parallel but each individual process can only process one task at a time so you must run multiple cron cli's. You can generally run a fairly high number of cron processes on a dedicated cron instance before needing to run multiple cron instances. To run more than one process simply spawn multiple cron processes each minute:

```
* * * * * /usr/bin/php  /path/to/moodle/admin/cli/cron.php
* * * * * /usr/bin/php  /path/to/moodle/admin/cli/cron.php
* * * * * /usr/bin/php  /path/to/moodle/admin/cli/cron.php
⋮
* * * * * /usr/bin/php  /path/to/moodle/admin/cli/adhoc_task.php --execute --keep-alive=59
* * * * * /usr/bin/php  /path/to/moodle/admin/cli/adhoc_task.php --execute --keep-alive=59
* * * * * /usr/bin/php  /path/to/moodle/admin/cli/adhoc_task.php --execute --keep-alive=59
⋮
```

It can be especially important to increase the number of adhoc\_task.php processes as certain plugins and systems can generate very large numbers of ad hoc tasks, or tasks that can take a long time to process. Especially tasks like document conversions and automated backups can build up more quickly than they are processed if they are left on default settings.

By default only 3 scheduled tasks and 3 ad hoc tasks can be run concurrently so as you add more processes you need to increase the level of allowed concurrency:

Site administration > Server > Tasks > Task processing

Or in `config.php`:

```
$CFG->task_scheduled_concurrency_limit = 20; // Defaults to 3
$CFG->task_adhoc_concurrency_limit = 50; // Defaults to 3
```

Whatever you set these to make sure the server(s) hosting them can comfortably handle this many processes. Often the bottleneck will be a shared service, usually the database.

You may find that certain types of very long running tasks will consume all the available task processes which means no other tasks will run. e.g. if you have 5 cli processes, but in the task queue there are 20 ad hoc tasks for an automated backup, each of which will take ten minutes to complete, then very quickly all 5 processes will be consumed by backups and nothing else. Other small very fast and light tasks like a document conversion or forum emails will not get sent until the backups are complete and a process frees up. To manage this you can limit the concurrency of specific types of ad hoc tasks. A good rule of thumb is that if all of the 'heavy' tasks consume all of their own limits then you should still have another few processes standing by on idle waiting for anything else which may be added to the queue.

Automated backups are the worst known offender, so hypothetically if you are running 50 ad hoc task processes concurrently a reasonable restriction might be to cap the backups to consume no more than half of those processes, i.e. 25 at most:

In `config.php`:

```
$CFG->task_concurrency_limit = [
    'core\task\course_backup_task' => 25,
    'core_course\task\course_delete_modules' => 5,
];
```

## See also

- [Scheduled tasks](Scheduled_tasks.md "Scheduled tasks")
- [Useful blog post on Cron by Sam Marshall from the UK OU.](https://learn1.open.ac.uk/mod/oublog/viewpost.php?post=281238)
- [Wikipedia article on cron function](https://en.wikipedia.org/wiki/Cron)
- [MDL-50694](https://tracker.moodle.org/browse/MDL-50694) - Cron message "The operation timed out while waiting for a lock" isn't really an error

Forum discussions:

- [How to log the output of a Scheduled Task on Windows](http://moodle.org/mod/forum/discuss.php?d=139263#p609060) - this discussion explains a nice trick that can be very useful when you are experiencing problems with your Windows Scheduled Task and you need to log the output of the Scheduled Task to a log file.

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Cron&oldid=149782>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Installation](Category_Installation.md "Category:Installation")
