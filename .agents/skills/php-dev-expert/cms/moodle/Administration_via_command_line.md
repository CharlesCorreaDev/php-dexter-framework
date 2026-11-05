# Administration via command line - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Administration_via_command_line

---

# Administration via command line

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Administration via command line

[Installation](Installation.md "Installation")

- [Installing Moodle](Installing_Moodle.md "Installing Moodle")
- [Installation quick guide](Installation_quick_guide.md "Installation quick guide")
- [Cron](Cron.md "Cron")
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
- Administration via command line
- [Upgrading FAQ](Upgrading_FAQ.md "Upgrading FAQ")
- [Moodle migration](Moodle_migration.md "Moodle migration")

## Running CLI scripts

If you have shell access to your web server, you may find various CLI (command line interface) scripts useful during Moodle administration. Core admin CLI tools are located in the `admin/cli/*` folder. Other plugins may provide CLI functionality via scripts in their own `cli` folder.

To avoid problems with access control, you should run them as the owner of the web server process. It is especially important for CLI installation and upgrade as they create new files in moodledata directory and the web server has to have write access to them. In Linux distributions, the user that runs the web server is usually apache or www-data or httpd or something similar. As a root, you will probably want to execute Moodle CLI scripts like this:

```
   $ cd /path/to/your/moodle/dir
   $ sudo -u apache /usr/bin/php admin/cli/somescript.php --params
```

Most of the scripts accept common --help (or -h) parameter to display the full usage information, for example:

```
   $ sudo -u apache /usr/bin/php admin/cli/install.php --help
```

**Note:** These scripts are supposed to be run under the identity of the web server user. Examples on this page use the apache user for illustration. The particular value depends on your OS distribution and local set-up. Typical values may be apache, www-data or httpd.

## Upgrading

Moodle can be upgraded from the command line. As with the installation script, there is either interactive or non-interactive mode of the upgrade. The script itself does not put the site into the maintenance mode, you have to do it on your own. Also, the script does not backup any data.

**Note:** As mentioned above, the upgrade php script does not perform a backup of the Moodle site data. Before running this script, make sure you have taken a proper site backup including the software, data directory, and database before you perform the upgrade.

To run the interactive upgrade, execute the following command:

```
   $ sudo -u apache /usr/bin/php admin/cli/upgrade.php
```

Upgrading via command line is a very comfortable way of Moodle upgrade if you use Git checkout of the Moodle source code (see [Git for Administrators](Git_for_Administrators.md "Git for Administrators")). See the following procedure how to upgrade your site within several seconds to the most recent version while preserving your eventual local customizations tracked in git repository:

```
   $ cd /var/www/sites/moodle/htdocs/
   $ sudo -u apache /usr/bin/php admin/cli/maintenance.php --enable
   $ git pull
   $ sudo -u apache /usr/bin/php admin/cli/upgrade.php
   $ sudo -u apache /usr/bin/php admin/cli/maintenance.php --disable
```

Alternatively, instead of using git, the updated Moodle package can be downloaded from the Moodle site using the wget command, and then extracted with the tar command.

```
   $ wget https://download.moodle.org/download.php/direct/stable405/moodle-4.5.1.tgz
   $ tar -xvzf moodle-4.5.1.tgz
```

Note that the path must contain "/direct/", or else wget will not work.

#### PHP Extra Memory

Depending on your environment setup, to perform a CLI upgrade you \*may\* need to run PHP explicitly with more memory.  
This is only required if PHP is failing due to out of memory conditions.

For example:

```
$ sudo -u apache /usr/bin/php --memory_limit=16G admin/cli/upgrade.php
```

The amount of memory will vary between Moodle LMS versions and your specific environment.

## Installation

There are two modes of installing Moodle from the command line. In interactive mode, the install script asks you for all data needed to properly set up new Moodle site. In non-interactive mode, you must provide all required data as the script parameters and then the new site is installed silently. The parameters can be passed in the interactive mode, too. The provided values are then used as the default values during the interactive session.

```
   $ sudo -u apache /usr/bin/php admin/cli/install.php --lang=cs
```

If your arguments contain some specials characters for Linux-based systems, don't forget to *escape* them with a backslash. For example, if you want to create an admin with *pa$sword* as password you should wrote *pa\$sword* instead!

If required, the database install may be skipped, with just config.php populated.

```
  $ sudo -u apache /usr/bin/php admin/cli/install.php --skip-database
```

If config.php already exists admin/cli/install\_database.php must be used instead, for example:

```
 $ sudo -u apache /usr/bin/php admin/cli/install_database.php --agree-license \
   --adminpass='secret' --fullname='My Site' --shortname='My Site' \
   --adminemail=admin@example.com --supportemail=support@example.com
```

## Maintenance mode

To switch your site into the maintenance mode via CLI, you can use

```
   $ sudo -u apache /usr/bin/php admin/cli/maintenance.php --enable
```

To turn maintenance mode off, execute the same script with the --disable parameter:

```
   $ sudo -u apache /usr/bin/php admin/cli/maintenance.php --disable
```

If you don't want to enable maintenance mode immediately, but show a countdown to your users, execute the same script with the --enablelater parameter and the number of minutes which the countdown should run:

```
   $ sudo -u apache /usr/bin/php admin/cli/maintenance.php --enablelater=10
```

This script will also create and remove the climaintenance.html file for "Offline" mode.

## Offline mode

In some situations, you may want to switch your Moodle site into offline mode so that it is not accessible via the web but you can not stop the web server completely (typically because there are other web pages and applications running there). If a file called `climaintenance.html` exists in the root folder of moodledata directory, Moodle will automatically display the contents of that file instead of any other page.

```
   $ cd /var/www/sites/moodle/moodledata/
   $ echo '<h1>Sorry, maintenance in progress</h1>' > climaintenance.html
```

You can prepare a nice formatted HTML page to inform your users about the server being down and keep in the moodledata directory under a name like `climaintenance.off` and rename it to the `climaintenance.html` if needed.

## Custom site defaults

During the install and upgrade via CLI, Moodle sets the administration variables to the default values. You can use different defaults. See [MDL-17850](https://tracker.moodle.org/browse/MDL-17850) for details. Shortly, all you need to do is to add a file `local/defaults.php` into your Moodle installation. The format of the file is like

```
<?php
$defaults['pluginname']['settingname'] = 'settingvalue'; // for plugins
$defaults['moodle']['settingname'] = 'settingvalue';     // for core settings
```

These defaults are used during install, upgrade and are also displayed as defaults on Site administration pages.

## Reset user password

If you happen to forget your admin password (or you want to set a password for any other user on the site), you can use reset\_password.php script. The script sets the correctly salted password for the given user.

```
   $ sudo -u apache /usr/bin/php admin/cli/reset_password.php
```

## Display manual login form

If you hide the manual login form then find that you can no longer log in, you can display it again using the command line

```
php admin/cli/cfg.php --name=showloginform --set=1
```

## Converting InnoDB to Barracuda

Newer versions of MySQL and MariaDB have an improved file format called Barracuda. To take advantage of this:

1. Ensure your version of MySQL/MariaDB is using Barracuda with the large index key prefix (innodb\_large\_prefix). See below for details.
2. Change to the compressed row format (see [Changing tables to compressed row format](#Changing_tables_to_compressed_row_format))
3. Change the character set and collation for full Unicode support (see [Converting character set and collation](#Converting_character_set_and_collation)).

If you have MySQL 8.0.0 or later, or MariaDB 10.3.0 or later, then these versions only support Barracuda with the large index key prefix. For earlier versions to check if MySQL/MariaDB is using Barracuda run the following statement in the MySQL/MariaDB client or phpMyAdmin SQL tab:

```
SHOW GLOBAL VARIABLES WHERE variable_name IN ('innodb_file_format', 'innodb_large_prefix', 'innodb_file_per_table');
```

If your settings do not match any of the tables below, see [Configure full UTF-8 support](MySQL.md#Configure_full_UTF-8_support "MySQL") for how to change these settings:

[![innodb_file_format=Barracuda;innodb_file_per_table=ON;innodb_large_prefix=ON](/503/en/images_en/c/ca/phpMyAdmin1.png)](https://docs.moodle.org/503/en/File:phpMyAdmin1.png) or [![innodb_file_format=(blank);innodb_file_per_table=ON;innodb_large_prefix=(blank)](/503/en/images_en/d/da/phpMyAdmin2.png)](https://docs.moodle.org/503/en/File:phpMyAdmin2.png) or [![innodb_file_per_table=ON](/503/en/images_en/6/6b/phpMyAdmin3.png)](https://docs.moodle.org/503/en/File:phpMyAdmin3.png)

If your settings match one of these tables then MySQL/MariaDB is using Barracuda with the large index key prefix.

### Changing tables to compressed row format

This script changes tables with many text columns to use ROW\_FORMAT=COMPRESSED. This change isn't required but is recommended. If the database error *Row size too large (> 8126)* occurs when using Moodle then run this script to fix this.

**Note:** If you have MariaDB version 10.6.0 to 10.6.6 or version 10.7.0 to 10.7.2 you must upgrade to a later version before running this script. See [MDL-72131](https://tracker.moodle.org/browse/MDL-72131) for details.

To view tables requiring conversion, use the --list option:

```
$ php admin/cli/mysql_compressed_rows.php --list
```

Here is an example output:

```
mdl_data                            Compact     (needs fixing) 
mdl_data_fields                     Compact     (needs fixing)
mdl_enrol_paypal                    Compact     (needs fixing)
```

To proceed with the conversion, run the command using the fix option:

```
$ php admin/cli/mysql_compressed_rows.php --fix
```

Successful table conversion will be reported in the output, for example:

```
mdl_data                   ... Compressed
mdl_data_fields            ... Compressed
mdl_enrol_paypal           ... Compressed
```

If you get errors due to insufficient privileges to run these commands use --showsql to generate the required SQL commands:

```
$ php admin/cli/mysql_compressed_rows.php --showsql
```

You can then copy the generated SQL into your MySQL/MariaDB client running as the 'root' user.

### Converting character set and collation

This script changes the Moodle database tables to enable full Unicode support.

```
$ php admin/cli/mysql_collation.php --collation=utf8mb4_unicode_ci
```

After making this change edit config.php and change the 'dbcollation' to 'utf8mb4\_unicode\_ci' in the $CFG->dboptions array.

For further details see: [MySQL full unicode support](MySQL_full_unicode_support.md "MySQL full unicode support")

## Running cron via command line

In versions 1.x, you could execute admin/cron.php either from command line or via the web. Since Moodle 2.0, only admin/cli/cron.php script can be run via command line.

## Scheduled tasks

Scheduled tasks are automatically run by the cron script, but the specific tasks which run on each cron iteration are determined by the scheduled tasks configuration. It is possible to override the scheduled tasks configuration and run a single scheduled task, or all due scheduled tasks, immediately using the admin/cli/scheduled\_task.php script.

This script accepts the following arguments:

```
--list - list all the known scheduled tasks. The tasks are listed by the class name used to run the task. This class name is required as the argument to the next option in order to run a specific task immediately.
```

```
-e, --execute - From Moodle 5.3, runs all due scheduled tasks immediately, regardless of scheduling settings, matching the existing behaviour of admin/cli/adhoc_task.php --execute.
```

```
-e, --execute=<task> - Runs a single scheduled task immediately - regardless of scheduling settings. This will even run disabled tasks. Tasks will still use locking to prevent concurrent execution of the same task - even on clusters. The format of the <task> argument must be the same as returned by the --list option above.
```

```
--disable=<task> - Disables a single scheduled task. The format of the <task> argument must be the same as returned by the --list option above.
```

```
--enable=<task> - Enables a single scheduled task. The format of the <task> argument must be the same as returned by the --list option above.
```

```
-f, --force - From Moodle 5.3, runs the task even if cron is disabled site-wide.
```

```
--showsql - Shows sql queries before they are execute
```

```
--showdebugging - Shows developer debugging info
```

**Note:** You must escape the "\" with an extra \ when using the --execute command. Take the following for example:

```
php admin/cli/scheduled_task.php --list
```

will return something like:

```
== List of scheduled tasks (http://yourserver.com/moodle) ==

\enrol_imsenterprise\task\cron_task                10 * * * * *      ASAP
\logstore_legacy\task\cleanup_task                 * 5 * * * *       ASAP
\logstore_standard\task\cleanup_task               * 4 * * * *       Wednesday, November 12, 2014, 4:35 AM
\mod_forum\task\cron_task                          * * * * * *       ASAP
\core\task\automated_backup_task                   50 * * * * *      ASAP

...
```

To run all due scheduled tasks:

```
php admin/cli/scheduled_task.php --execute
```

To run a specific task from that list:

```
php admin/cli/scheduled_task.php --execute='\enrol_imsenterprise\task\cron_task'
```

Be aware of the single quotes. Without them, you would need to use double backlashes to avoid escaping by the shell.

### Ad hoc tasks

[Ad hoc tasks](Cron.md#Low_latency_adhoc_tasks "Cron") are low-latency tasks that are normally run by the cron. You can run just the queued ad hoc tasks with admin/cli/adhoc\_task.php.

This script accepts the following options and arguments:

```
 -h, --help                Print out this help
     --showsql             Show sql queries before they are executed
     --showdebugging       Show developer level debugging information
 -e, --execute             Run all queued adhoc tasks
 -k, --keep-alive=N        Keep this script alive for N seconds and poll for new adhoc tasks
 -i  --ignorelimits        Ignore task_adhoc_concurrency_limit and task_adhoc_max_runtime limits
 -f, --force               Run even if cron is disabled
```

For example to run the currently queued ad hoc tasks:

```
sudo -u apache php admin/cli/adhoc_task.php -e
```

See also the improvements to ad hoc tasks in [Scheduled\_tasks#Ad\_hoc\_tasks](Scheduled_tasks.md#Ad_hoc_tasks "Scheduled tasks")

## Database transfer

A command line script for [Database transfer](Database_transfer.md "Database transfer") may be found in *admin/tool/dbtransfer/cli/migrate.php*.

## Purge caches

You can purge caches using this script:

```
 php admin/cli/purge_caches.php
```

## Kill all sessions

If needed for administrative reasons, you can kill all user sessions using this script:

```
php admin/cli/kill_all_sessions.php --run
```

As a result, all users will be logged out from Moodle.

**From Moodle 5.2**, the script supports targeted session termination and runs in dry mode by default.

To terminate sessions for specific users only, pass a comma-separated list of user IDs with `--for-users`:

```
php admin/cli/kill_all_sessions.php --for-users=2,3,4 --run
```

Without `--run`, the script runs in dry mode — it reports what would happen without making any changes. This is useful for verifying which sessions will be terminated before executing.

Options:

- `--for-users=<id,id,...>` — Comma-separated list of user IDs whose sessions should be terminated. If omitted, all sessions are terminated.
- `--run` — Execute the termination. Without this option, the script runs in dry mode.

## Backup, restore and import of courses or modules

See Backup via CLI in [Course backup](Course_backup.md "Course backup") and Restore via CLI in [Course restore](Course_restore.md "Course restore") (**in 3.10 onwards**). Courses or individual modules can be copied directly on the command line with import.php (**in 4.4 onwards**). See Import via CLI in [Course copy](Course_copy.md "Course copy").

## Deleting courses

Courses can be deleted via CLI if you know the course id:

```
sudo -u www-data /usr/bin/php admin/cli/delete_course.php --courseid=123456
```

**From Moodle 5.2**, courses can also be deleted by shortname or id number:

```
sudo -u www-data /usr/bin/php admin/cli/delete_course.php --shortname=mycourseshortname
sudo -u www-data /usr/bin/php admin/cli/delete_course.php --idnumber=COURSE001
```

## Fix course / module sequences

In rare cases (such as after upgrading from a very old version of Moodle), the course / section / module sequence data can be out of sync. This can cause various problems for affected courses, such as sections not appearing, backups failing, pages not displaying etc. There is a specific check to check for errors caused by this problem, and to fix the data in the database if they are found. To run this script please use the command below:

```
 php admin/cli/fix_course_sequence.php -c=* --fix
```

This will check every course in Moodle and report which ones had errors and were fixed.

## Fix orphaned question categories

When a quiz is created, a new question category for the quiz is automatically created. In versions of Moodle prior to 2.9.1, if the quiz is deleted, the question category and any questions in the category remain in database. These orphaned question categories may be fixed by running the admin/cli/fix\_orphaned\_question\_categories.php script with the --fix option.

## Search and replace text

This script can be used to search and replace text throughout the whole database. Use carefully and backup first always. More info in [Search and replace tool](Search_and_replace_tool.md "Search and replace tool").

```
 php admin/tool/replace/cli/replace.php --search=//oldsitehost --replace=//newsitehost
```

## Build theme CSS cache

If Moodle is not running in theme designer mode it will keep a copy of the compiled CSS on local disk and serve that to the browser when it requests a page. If there isn't a copy on local disk then a copy will be built the first time a page within Moodle is requested.

With this script you can pre-compile the cached CSS files for themes within Moodle to avoid having a user wait for the theme to compile during the first page request.

```
 php admin/cli/build_theme_css.php --themes=boost
```

## Get and set configuration values

Displays the current value of the given setting, or set the given setting to the specified value.

```
$ php admin/cli/cfg.php [--component=<componentname>] [--json] [--shell-arg]
$ php admin/cli/cfg.php --name=<configname> [--component=<componentname>] [--shell-arg] [--no-eol]
$ php admin/cli/cfg.php --name=<configname> [--component=<componentname>] --set=<value>
$ php admin/cli/cfg.php --name=<configname> [--component=<componentname>] --unset
$ php admin/cli/cfg.php [--help|-h]
```

Examples:

```
$ php admin/cli/cfg.php --name=langmenu
```

will display the value of *Display language menu* in *Site administration > Language > Language settings* (0 for *No* or 1 for *Yes*).

```
$ php cfg.php --name=maxsizetodownload --component=folder
```

will display the value of *Maximum folder download size (MB)* accessible from *Site administration > Plugins > Activity modules > Folder*.

```
$ php admin/cli/cfg.php --name=langmenu --set=0
```

will disable the *Language menu*.

## E-mail flag for users

**From Moodle 4.2**, the CLI script to change the email flag for one or many users at a time can be found on the page [E-Mail flag for users](E-Mail_flag_for_users.md "E-Mail flag for users")

## Dashboard reset

If you make changes to the dashboard and want all users to have their dashboard reset to reflect the changes this can be done on the cli:

```
php admin/cli/dashboard_reset.php -e
```

## Managing plugins via command line

### List and uninstall Moodle plugins

Moodle includes a handy command-line tool to display a list of plugins and remove plugins.

```
$ php admin/cli/uninstall_plugins.php
```

This command line tool accepts the following arguments.

Options:

```
    -h --help                   Print this help.
    --show-all                  Displays a list of all installed plugins.
    --show-contrib              Displays a list of all third-party installed plugins.
    --show-missing              Displays a list of plugins missing from disk.
    --purge-missing             Uninstall all missing from disk plugins.
    --plugins=<plugin name>     A comma separated list of plugins to be uninstalled. E.g. mod_assign,mod_forum
    --run                       Execute uninstall. If this option is not set, then the script will be run in a dry mode.
    --showsql                   Show sql queries before they are executed.
    --showdebugging             Show developer level debugging information.
```

Dry Mode does everything the script would normally do except for actually making any changes. This is useful when you want to test the validity of your command.

Run this command from the Moodle wwwroot directory. Here are some examples:

```
    # php admin/cli/uninstall_plugins.php  --show-all
       Prints tab-separated list of all installed plugins.
    # php admin/cli/uninstall_plugins.php  --show-contrib
       Prints tab-separated list of all third-party installed plugins.
    # php admin/cli/uninstall_plugins.php  --show-missing
```

> Prints tab-separated list of all missing from disk plugins.

```
    # php admin/cli/uninstall_plugins.php  --purge-missing
       A dry run of uninstalling all missing plugins. This will NOT uninstall the plugin. To actually uninstall, you need to add the '--run' arguments.
    # php admin/cli/uninstall_plugins.php  --purge-missing --run
       Run uninstall of all missing plugins.
    # php admin/cli/uninstall_plugins.php  --plugins=mod_assign,mod_forum
       A dry run of uninstalling mod_assign and mod_forum plugins. This will NOT uninstall the plugin. To actually uninstall, you need to add the '--run' arguments.
    # php admin/cli/uninstall_plugins.php  --plugins=mod_assign,mod_forum --run
       Run uninstall for mod_assign and mod_forum plugins.
```

This tool does not perform all of the steps needed to fully uninstall a plugin. You must then:

- Remove the files belonging to the plugin manually;
- [Update the Moodle database](#Upgrading) as previously described.

If you skip one or both of these steps, you will be prompted to update the Moodle database or re-install the plugin the next time you log in as a site administrator and access the Site Administration > Notifications page.

## See also

- [MDL-35736](https://tracker.moodle.org/browse/MDL-35736) - Manage plugins via command-line
- [MDL-35736](https://tracker.moodle.org/browse/MDL-35736) - Manage plugins via command-line
- [MDL-36237](https://tracker.moodle.org/browse/MDL-36237) - Resort course list via CLI
- [MOOSH](http://moosh-online.com/) - MOOdle SHell. It is a command-line tool that will allow you to perform many of the most common Moodle tasks.
- MOOSH 2 - for moodle core versions 5.1 and above. See link moosh2 link off the MOOSH link above.

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Administration_via_command_line&oldid=156291>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Installation](Category_Installation.md "Category:Installation")
