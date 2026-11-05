# Installation quick guide - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Installation_Quickstart

---

# Installation quick guide

From MoodleDocs

(Redirected from [Installation Quickstart](https://docs.moodle.org/503/en/index.php?title=Installation_Quickstart&redirect=no "Installation Quickstart"))

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Installation quick guide

[Installation](Installation.md "Installation")

- [Installing Moodle](Installing_Moodle.md "Installing Moodle")
- Installation quick guide
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
- [Administration via command line](Administration_via_command_line.md "Administration via command line")
- [Upgrading FAQ](Upgrading_FAQ.md "Upgrading FAQ")
- [Moodle migration](Moodle_migration.md "Moodle migration")

*Note that in this quick guide Debian GNU/Linux is taken as an example. The instructions can be easily translated to any other Linux or Unix flavour, if you know the target environment. This is less suitable for IIS.*
*This page is intended for administrators experienced with installing web server applications and in a hurry to get up and running. Otherwise, please see [Installing Moodle](Installing_Moodle.md "Installing Moodle")*.

## Requirements

You will need a working:

- web server (such as [Apache](Apache.md "Apache"), [Nginx](Nginx.md "Nginx"), Litespeed or [IIS](Internet_Information_Services.md "Internet Information Services")).
- database server (for example [PostgreSQL](PostgreSQL.md "PostgreSQL"), [MySQL](MySQL.md "MySQL"), [MariaDB](MariaDB.md "MariaDB"), Aurora MySQL or Microsoft SQL Server)
- [PHP](PHP.md "PHP") installed.

For details the [release notes](https://moodledev.io/general/releases/5.3) under server requirements.

In addition to the above, you will need to:

- install some [PHP#PHP Extensions and libraries](PHP.md#PHP_Extensions_and_libraries "PHP") -- Moodle checks for these early in the installation process, and you can install them one-by-one and restart the web server and retry the install script, if it complains.
- optionally, [configure the Moodle Router](Configuring_the_Router.md "Configuring the Router") and
- ensure that either the server runs a working mail transport agent (MTA) such as Exim, or Sendmail; or have access to an SMTP server.

## Getting Moodle

You have two options:

- Download the code as an archive from <https://download.moodle.org/> ... OR
- Using Git pull the code as a Git repository (recommended for developers and also makes updating/upgrading very simple):

### Download Moodle code as an archive

- If you've downloaded the zip or tgz file earlier, then unzip/untar in a place that it will be served by your web server (e.g. on Debian-based Linux, move to /var/www/html/moodle)
- Check the permissions and make sure that the web server has read permissions but **not** write permssions to any of the files in the Moodle code directories (a very common root cause of sites being hacked).
- Configure your web server to serve the Moodle site from its public/ directory, i.e. if your Moodle source is in /var/www/html/moodle, the web root must be /var/www/html/moodle/public.

### Pull the code from the Git repository

```
git clone -b MOODLE_{{Version2}}_STABLE git://git.moodle.org/moodle.git
```

...this fetches a complete copy of the Moodle repository and then switches to the 5.3 Stable branch.

See [Git for Administrators](Git_for_Administrators.md "Git for Administrators") for details on using Git to install Moodle code.

Note: Only download Moodle from one of the moodle.org sources. Other versions (e.g. control-panel-based installers, Linux distribution repositories, and other "one-click" installers) cannot be guaranteed to work properly, be upgradable or be supportable.

## Install Composer dependencies

Moodle can use Composer to install some third-party libraries. Composer is optional in Moodle 5.3, except for new features such as OAuth 2 Server. It will be required from Moodle 6.0. To install the dependencies, run this command from the Moodle base directory:

```
composer install --no-dev --classmap-authoritative
```

See [Installing Moodle#Install Composer dependencies](Installing_Moodle.md#Install_Composer_dependencies "Installing Moodle") for details.

## Create a database and a database user

- Using your chosen database server, create a new empty database. The default encoding must be UTF8. For example, using MySQL:

```
mysql> CREATE DATABASE moodle DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

The CHARACTER SET and COLLATE may not be necessary if they are the defaults of your database server.

- Create a user/password combination with appropriate permissions for the database. For example, again for MySQL:

```
mysql> GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,CREATE TEMPORARY TABLES,DROP,INDEX,ALTER ON moodle.* TO 'moodleuser'@'localhost' IDENTIFIED BY 'yourpassword';
```

- For MySQL, the IDENTIFIED BY password with GRANT statement has been deprecated since MySQL version 5.7.6. Hence, the above step to add a user/password with the minimum needed permissions is now three steps:

```
mysql> CREATE USER 'moodleuser'@'localhost' IDENTIFIED BY 'yourpassword';
mysql> GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,CREATE TEMPORARY TABLES,DROP,INDEX,ALTER ON moodle.* TO 'moodleuser'@'localhost';
```

Notes:

- GRANT .. ON moodle.\* including the '.\*' and not just the bare database name.
- You can shorten the list of privileges by saying GRANT ALL PRIVILEGES ON ..

Save this password you use for the Moodle user, since you will need it later in the installation.

## Create data directory

- Create an empty directory to hold Moodle files. It **must not** be in the area served by the web server and must have permissions so that the web server user can write to it. Other than that, it can be located anywhere. Typically, either make it owned by the web server user or give the web server write permissions to it. If it is on a shared/NFS drive, then read [Caching](Caching.md "Caching") - Moodle caches to this disk area by default, and a slow share will mean terrible performance.

## Configure Moodle

- Find the file *config-dist.php* in the Moodle base directory, in the example /var/www/html/moodle, and copy it to a new file called *config.php* (if you don't plan Moodle to create it for you - see the next section Run the install script).
- Edit config.php with your favourite editor and change the appropriate settings to point to your site, directories and database.
- From Moodle 5.1 onwards, the *config.php* file and other sensitive files are stored in its base directory which is above the public/ directory which is the web root. Ensure your web server is configured to serve only from this public/ directory. {{Note| There is also a config.php in public/. Don't confuse it with the active config.php in the base directory (a level higher). For details, see the [Upgrading#Code directories restructure](Upgrading.md#Code_directories_restructure "Upgrading") section.

## Run the install script

### In the web GUI

- Go to the URL for your moodle site in a browser (installation will complete automatically).

### In the CLI

```
/usr/bin/php /path/to/moodle/admin/cli/install.php --help
```

**Note:**

- THE Moodle install script, GUI or CLI, will create config.php for you, if it does not exist and the server has write permissions in the Moodle base directory.
- After completing the install, make sure your file permissions are ok for the Moodle program files (not writeable by web server) and the Moodle data files (writeable by web server).

Congratulations! Now you have your own Moodle server. Before start operating with users there are two post-installation setups.

## Post-installation set up

### Set up cron

Moodle requires its admin/cli/cron.php script to run periodically. It is recommended to run it *every minute*. A typical Unix crontab entry will be as follows:

```
* * * * * /usr/bin/php /path/to/moodle/admin/cli/cron.php >/dev/null
```

Your site **will not work properly** unless this script is run regularly. It is important you do not skip this step.

See [Cron](Cron.md "Cron") for details.

### Outgoing mail configuration

Moodle communicates with the users via e-mail. It needs an SMTP service for this. Ensure that either the server runs a working mail transport agent (MTA) such as Exim or Sendmail; or Moodle has access to an external SMTP server. See [Mail configuration](Mail_configuration.md "Mail configuration") for details.

You are now ready to use your Moodle site!

## See also

- [Installing Moodle](Installing_Moodle.md "Installing Moodle") for a longer version
- If you have questions, see the [Installation FAQ](Installation_FAQ.md "Installation FAQ")
- If you run into problems, check the the [Installation help forum](http://moodle.org/mod/forum/view.php?id=28).

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Installation_quick_guide&oldid=156786>"

[Categories](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Installation](Category_Installation.md "Category:Installation")
- [Quick guide](Category_Quick_guide.md "Category:Quick guide")
