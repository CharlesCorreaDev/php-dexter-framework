# Moving Blesta | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/guides/moving-blesta

---

Version: 6

On this page

IMPORTANT

Your `config/blesta.php` file contains a very important encryption key that must be copied over to the new server. If you do a fresh install, and only copy your database, **YOU WILL BREAK YOUR INSTALLATION**. You should copy your database and all of your files.

## Moving Blesta to a New Server[â](#moving-blesta-to-a-new-server "Direct link to Moving Blesta to a New Server")

Sometimes it may be necessary to move your Blesta installation to a new server. Before you start, make sure your new server meets the minimum [system requirements](docs__installation.md) for Blesta. It's also advised toÂ disable your cron before proceeding, and put your Blesta install inÂ maintenance mode so that clients cannot login. To enable maintenance mode, visit [Settings] > [System] > [General] > Maintenance and check the "Enable Maintenace" option and save.

### Back up your database and installation files[â](#back-up-your-database-and-installation-files "Direct link to Back up your database and installation files")

The first step of moving Blesta is to make a backup of everything.

1. Back up your MySQL database
2. Back up your installation files

#### Backing up your database[â](#backing-up-your-database "Direct link to Backing up your database")

There are several ways to back up your MySQL database. If you have access to phpMyAdmin, you can select your database, and use the "Export" feature to perform a backup. Be sure to export the data as type SQL.

We recommend performing a database backup via SSH, over the command line. If you have SSH access to your server, this is the best way to go.

```
mysqldump -h localhost -u YOUR_MYSQL_USER -p YOUR_DATABASE_NAME -r blesta-backup.sql
```

Replace YOUR\_MYSQL\_USER with your MySQL username, and YOUR\_DATABASE\_NAME with the name of your database. If you aren't sure what these are, open config/blesta.php as it will contain your database details. If your MySQL server is not on the local server, replace "localhost" with the hostname of your MySQL server.

When you run the command, you'll be prompted to enter your MySQL password. Running the export can take some time, be patient. Once it's finished, there should be a file named blesta-backup.sql. Check the file size, if it's 0 bytes, then there was an issue exporting the file.

#### Backing up your files[â](#backing-up-your-files "Direct link to Backing up your files")

It's important to back up your files for two reasons:

1. You want the version of Blesta to match your database version
2. config/blesta.php contains a VERY IMPORTANT encryption key, that matches your database.

You can download all of your installation files via FTP, SFTP individually, or, preferably, zip up all of the files first. If you have SSH access to your server, you could zip them up like this:

```
zip -r blesta-backup.zip /home/username/*
```

Replace /home/username/ with the path to your Blesta installation.

### Restore your database and installation files[â](#restore-your-database-and-installation-files "Direct link to Restore your database and installation files")

Once you have a backup of the database and installation files, copy them to the new server via FTP, SFTP, SSH (scp, rsync), or another method.

#### Restoring your database[â](#restoring-your-database "Direct link to Restoring your database")

Create a new database on the new server, and import your blesta-backup.sql file. You can do this via phpMyAdmin, using its "Import" feature, but it has some limitations and it may not work with large databases. We recommend restoring the database backup via SSH, over the command line. If you have SSH access to your server, this is the best way to go.

```
mysql -u YOUR_NEW_MYSQL_USER -p YOUR_NEW_DATABASE_NAME < blesta-backup.sql
```

Replace YOUR\_NEW\_MYSQL\_USER with the new MySQL user on the new server, and YOUR\_NEW\_DATABASE\_NAME with the new MySQL database name. You will be prompted for the password, and the import can take a while to finish.

#### Restoring your files[â](#restoring-your-files "Direct link to Restoring your files")

Restore your installation files to the proper location on your new server. This will depend on where your document root is for your virtual host in your web server. You can use FTP, SFTP, SSH (scp, rsync) or another method. If you are uploading a zip file, you can unpack it on the server.

```
unzip blesta-backup.zip
```

### Connect your installation to your database[â](#connect-your-installation-to-your-database "Direct link to Connect your installation to your database")

It's likely that your database name, username, and password are different on the new server, so these details need to be updated in your config file. Open config/blesta.php and look in the "Database" section. It should look similar to the following:

~/config/blesta.php

```
////////////////////////////////////////////////////////////////////////////////  
// Database  
////////////////////////////////////////////////////////////////////////////////  
// Database connection information  
Configure::set("Blesta.database_info", array(  
	'driver' => "mysql",  
	'host'	=> "localhost",  
	//'port' => "8889",  
	'database' => "DATABASE",  
	'user' => "USER",  
	'pass' => "PASSWORD",  
	'persistent' => false,  
	'charset_query' => "SET NAMES 'utf8'",  
	'sqlmode_query' => "SET sql_mode='TRADITIONAL'",  
	'options' => array()  
	)  
);
```

Update DATABASE with your MySQL database name, USER with your MySQL database username, and PASSWORD with your MySQL password.

### Set all writable directories[â](#set-all-writable-directories "Direct link to Set all writable directories")

Blesta writes files (e.g. logs) to a number of directories. You can set these paths under [Settings] > [System] > Basic Setup in Blesta. Be sure those directories are writable by the web server.

### Do you use the plugin "Client Documents"?[â](#do-you-use-the-plugin-client-documents "Direct link to Do you use the plugin \"Client Documents\"?")

The full path to documents uploaded to Blesta through the Client Documents plugin are stored in the file\_name column of the client\_documents table. It may be necessary to run a REPLACE query to update the path. Here's an example:

```
UPDATE client_documents  
SET file_name = REPLACE(file_name, "/home/YOUROLDPATH", "/home/YOURNEWPATH");
```

Replace /home/YOUROLDPATH with the original path to the parent directory of your "uploads" directory. Update /home/YOURNEWPATH to the new parent directory of "uploads".

Records that look like this:

`/home/oldpath/uploads/1/client_documents/20170512T014003+0000_188634ee3bb69c9c40ae90cb52cd2fde.pdf`

Would be changed to look like this:

`/home/newpath/uploads/1/client_documents/20170512T014003+0000_188634ee3bb69c9c40ae90cb52cd2fde.pdf`

### Update IPN/Webhooks[â](#update-ipnwebhooks "Direct link to Update IPN/Webhooks")

Some payment gateways require you to setup callback IPNs/Webhooks for notifying Blesta of accepted payments.Â  Be sure to update these for any such payment providers on their website.Â  Some of the gateways that require this are: 2Checkout, PayPal Payments Standard, and Paystack.

### Clear Navigation Cache[â](#clear-navigation-cache "Direct link to Clear Navigation Cache")

The admin navigation is cached and that cache will need to be cleared the reflect the move.Â  To clear the cache on version 5.0+ of Blesta, visit [Settings] > [Look and Feel] > Navigation and click "Save Navigation".Â  To clear the cache on Blesta older than 5.0, visit [Settings] > [System] > [Staff] > Staff Groups and edit/resave each staff group.

### Final Steps[â](#final-steps "Direct link to Final Steps")

You are almost done. All that remains is to re-issue your license key, double check your paths in the settings, and set up your cron.

1. Log into the client area atÂ <https://account.blesta.com/client/login>Â and click "Manage" next to your license, then "Manage License" on the left, then check and save the "Re-Issue" option. If you obtained your license from a reseller, you will need to perform this step in their client area (which may be different), or by opening a ticket with them.
2. Log into Blesta on your new server and visit [Settings] > [System] > General. Make sure all the paths are correct, update any that are not right.
3. If the hostname changed, be sure to update it under [Settings] > [System] > Companies.
4. You may need to update Email Templates under [Settings] > [Company] > Emails. There is a bulk option to update from name and email.
5. Verify that everything looks good, and then set up your cron. See [Settings] > [System] > Automation for help.

Cron Disabled?

Did you remember to disable the cron on your old Blesta server? If the server remains up and files in place, it will continue to bill customers.
