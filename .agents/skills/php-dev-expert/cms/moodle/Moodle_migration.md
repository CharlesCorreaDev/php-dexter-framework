# Moodle migration - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Moodle_migration

---

# Moodle migration

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Moodle migration

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
- [Administration via command line](Administration_via_command_line.md "Administration via command line")
- [Upgrading FAQ](Upgrading_FAQ.md "Upgrading FAQ")
- Moodle migration

There may be times when you need to move your entire Moodle site from one server to another. For example, you might move a Moodle site from a shared hosting service's server to a dedicated server or VPS, from an old server to a new server, to a second (perhaps experimental) instance on the same server, or even between a server and a local Moodle installation on your computer. These scenarios are referred to as "migration," which is a broad term. Due to the variety of migration scenarios, it is most challenging to describe a common technique applicable to all. However, the general principles and steps will be outlined below.

## Recommended method

There are many ways to migrate a Moodle site. This "recommended method" is one commonly used.

If you desire a Moodle version that is newer than the one you are migrating, this is referred to as "Upgrading," and you should do the upgrade before migrating or after migrating. Refer to Moodle Docs about "Upgrading."

### Turn on maintenance mode

Place your current Moodle site into [Maintenance mode](Maintenance_mode.md "Maintenance mode") via *Site Administration > Server > Maintenance Mode* to prevent any further additions to the Moodle database. Don't let administrators login during the migration as they are not affected by the maintenance mode setting.

### Backup the Moodle database on the old server

The right way to back up your database depends on which database system you are using. The instructions below is one example way to back up a MySQL database using a terminal application. You must modify each line based on your situation. It assumes that you have a folder called "backup\_directory" and that a backup file currently exists. The first line navigates to the backup directory. The second line renames your existing backup to "old." The third line is a MySQL command for "dumping" your database into a file called "moodle-database.sql. If you only write "-p" without your password, you will be prompted for it. These lines can be converted into a script that you can run from command line on UNIX. Some folks will create a UNIX cronjob to run the script regularly, such as every night.

```
cd /my/backup_directory
mv moodle-database.sql.gz moodle-database-old.sql.gz
mysqldump -h example.com -u myusername -p'mypassword' -C -Q -e --create-options mydatabasename > moodle-database.sql
```

Another option would be to use a tool like phpMyAdmin to manually make a backup.

The documentation for your database will give more options.

Which ever method you use, it is paramount that you have a good backup. Without a good backup, you will encounter problems and be wasting time.

### Prepare the new server

Your new server must be capable of running Moodle so it must have a web server (e.g., Apache or Nginx,) a database (e.g., MySQL, MariaDB, or PostgreSQL) and the PHP scripting language. The database and PHP version must be compatible with the Moodle version you plan to migrate.

Consider installing a brand new trial Moodle on the new server to verify all requirements are satisfied and the location of the moodle code and moodledata directories are the same as on your old server. For help installing Moodle, review "Installing Moodle - MoodleDocs." In Moodle, go to Site Administration | Server | Environment to ascertain that everything is okay. ***Fix any problems before attempting your migration!***

Following this check, move a copy of the config.php file to a safe location for reference, then delete the  **new server**  moodle and moodledata directories and "drop" the  **new server**  database so the files and database from your old server can be migrated to replace them.

### Restore the database backup to the new server

Create a database on your new server. It should have the correct collation, typically utf8mb4\_unicode\_ci. You create a database from a command line or from a database tool, such as phpMyAdmin. It will not yet have any tables and table data in it.

Copy the database backup file to the new server.

Once you have created the new database on the new server and copied the database backup file to it, restore the backup with the following command (for MySQL). Again, this code is only an example; you must modify it to match your Moodle.

```
mysql -p new_database < moodle-database.sql
```

Depending on the size of your old Moodle backup file, the restore can time some time.

For other databases, follow their instructions for restoring a backup.

### Copy moodledata from the old server to the new server

Copy the contents of your data directory (check for the value in `$CFG->dataroot` in your old config.php file) to the new server. This can be a lot of data, so consider using a good data copying tool like [rsync](https://rsync.samba.org/). If using an FTP client, the transfer of the `filedir` folder must be in **BINARY** mode or the files will get corrupted in the process. You might also consider "tarring" (i.e., zipping, or compressing) the old moodledata folder prior to copying it so that you only have one file to copy instead of thousands.

NB: It is not necessary to copy the contents of these directories:

- /moodledata/cache
- /moodledata/localcache
- /moodledata/sessions
- /moodledata/temp
- /moodledata/trashdir

Omitting these files will reduce transfer time substantially.

Check the file permissions of the copied files. The web server needs read and write access.

### Copy the Moodle code from the old server to the new server

Realize that your current Moodle might contain plugins and code changes, so it is recommended to move your entire Moodle code folder to the new server. You should be able to find your Moodle code folder. It is typically located somewhere in your webroot folder (e.g., /var/www or public\_html) and commonly contains "moodle" in its name, but it can be any name. The folder's name can be found in config.php, and if you have found config.php, you have undoubtedly found the Moodle folder.

Check the file permissions of the copied files. The web server needs read access.

### Update config.php with the URL of the new server

Moodle's config.php file contains information about your Moodle installation, and everything in it must be correct. If your migration moves Moodle to a new URL, you need to check some settings in config.php. Open the config.php file in your old Moodle that you just moved, and copare it with the config.php file that you moved to a safe spot from your "prepared" installation, above. Most likely, you will need to update $CFG->wwwroot to the new URL location, and you will likely need to update $CFG->dataroot.

Also check the other properties, such as $CFG->dbname, $CFG->dbuser, and $CFG->dbpass. Your best guide will be to look at the config.php file from your trial Moodle installation.

While you're at it, potentially consider making a new config.php from the latest config-dist.php, to give you more config override options in the future, should you need them.

### Test the copied site

You should now be able to log into the new site as admin, and verify that most things are working. If your copied site is not working, the first thing to check is usually the settings in config.php. Again, they must be correct. Another common problem is not having the correct database version or PHP version. If your copied site is still not working, this would be a good time to ask for some help in the moodle.org forums, making sure to describe exactly what you have done and the exact error messages you see. Be patient for help, a migration is can be challenging.

### Update links containing wwwroot in the database

The one thing we have not fixed is any internal links stored in the database. To fix these use the [Search and replace tool](Search_and_replace_tool.md "Search and replace tool") by going to {wwwroot}/admin/tool/replace/index.php.

Enter the url for your old server (https://oldserver.com/) and new server (https://newserver.com/) and it will fix any links stored in the database.

### Take the site out of maintenance mode

Test the migration some more, then when you are satisfied, remember to take the site out of maintenance mode.

## Quick and hacky method

If you have shell access on both servers, here is a quick command-line based method.

- Set up a new empty database on the **new** server.
- Place your existing Moodle site into maintenance mode.
- Login to shell on the **old** existing server.
- Use rsync to copy **moodledata** and **public\_html** or **moodle** folders (or whatever directory your Moodle install is in) to the new server - execute (replacing caps with your details; SOURCE = the directory you want to copy) for each directory:

:   :   `rsync -av -e ssh SOURCE/ USERNAME@NEW_SERVER.COM:/PATH/TO/DESTINATION/`

- Dump existing database and move and import into database on new server by executing:

:   :   `mysqldump --allow-keywords --opt -uMySQL_USERNAME -pPASSWORD DATABASE | ssh USER@DOMAIN "mysql -uMySQL_USERNAME -pPASSWORD DATABASE"`

- Replace any links in the database that contain the full site URL:

:   :   `#sed -e 's/oldserver.com/newserver.com/g' oldmysqldump.sql > newmysqldump.sql`

- On the **new server**, update **config.php** with relevant details where applicable (e.g. database name and user details, the wwwroot and the dataroot).
- Check ownership and permissions are correct on both moodle code and moodleData directories.
- Make sure everything is working.

Takes about 15 minutes for a small site. However, transferring several Gigabytes of data for a larger site can take hours depending on your network connection and hard drive read/write speed.

When you are happy all has gone well, set up redirects/make DNS changes if required, take new site out of maintenance mode and "switch off" old site.

- If you are switching the IP address from the old server to the new one, you will need to turn off the old server before firing up the new one to avoid IP addressing conflicts and confusion!

## Other considerations

### Upgrade Moodle at the same time?

While doing the work of migrating Moodle, you might want to [upgrade Moodle](Upgrading.md "Upgrading") to the latest version at the same time. On the other hand, if you do that, and something breaks, you won't be sure which change caused the problem, so the more cautious approach is to change one thing at a time, and test in between to verify that all is well.

Also consider PHP Versions - if you're looking to upgrade PHP as part of the process on the new server, then you'll have to make sure the Moodle Version you're copying across supports both the PHP Versions.

### DNS & masquerading changes

You may have had to change the DNS entries for the new Moodle site. If you have done so, it will take some time for the changes to replicate, so be patient. If your server is located behind a firewall, you may also have to change your firewall rules to allow access to the new server. See the  [masquerading docs](Masquerading.md "Masquerading").

### Internal and external access

If you have a set up where your Moodle site can be accessed via a network and via the internet, ensure you check that the new site can be accessed internally and externally.

### reCAPTCHA

If you migrate to a new domain and have setup [Email-based self-registration](Email-based_self-registration.md "Email-based self-registration"), you need to create new API-Keys at google. You will find the explanation and links to google in [Email-based self-registration](Email-based_self-registration.md "Email-based self-registration").

### Other Documentation

One other thing to consider is to have a look at all the installation documents for everything you're going to migrate to - e.g. Webserver ([Apache](Apache.md "Apache")/[Nginx](Nginx.md "Nginx")/[OpenLiteSpeed](OpenLiteSpeed.md "OpenLiteSpeed")), [MariaDB](MariaDB.md "MariaDB")/[MySQL](MySQL.md "MySQL"), [Redis cache store](Redis_cache_store.md "Redis cache store"), [Microsoft 365](Microsoft_365.md "Microsoft 365") and also the initial [Moodle Installation Guide](Installing_Moodle.md "Installing Moodle") as more specific setup steps are present within each, but it'll also give you an idea as to what you may need to (re)setup on your new server as well.

## See also

- [Site backup](Site_backup.md "Site backup")
- [Site restore](Site_restore.md "Site restore")
- [Backup and restore FAQ](Backup_and_restore_FAQ.md "Backup and restore FAQ")
- [Performance recommendations](Performance_recommendations.md "Performance recommendations")

## Any questions?

Please post in the [Installing and upgrading help forum](http://moodle.org/mod/forum/view.php?id=28) on moodle.org

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Moodle_migration&oldid=150406>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Installation](Category_Installation.md "Category:Installation")
