# Installing Moodle - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Installing_Moodle

---

# Installing Moodle

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Installing Moodle

[Installation](Installation.md "Installation")

- Installing Moodle
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
- [Moodle migration](Moodle_migration.md "Moodle migration")

*This page explains how to install Moodle. If you are an expert and/or in a hurry try [Installation Quickstart](Installation_Quickstart.md "Installation Quickstart").*

If you want to avoid installing Moodle yourself completely, consider [MoodleCloud](https://moodle.com/products/moodlecloud/), the hosting from Moodle.

## Requirements

Moodle is primarily developed in Linux using [Apache](Apache.md "Apache"), [PostgreSQL](PostgreSQL.md "PostgreSQL")/[MySQL](MySQL.md "MySQL")/[MariaDB](MariaDB.md "MariaDB") and [PHP](PHP.md "PHP") (sometimes known as the LAMP platform). Typically this is also how Moodle is run, although there are other options ([Nginx](Nginx.md "Nginx")/[OpenLiteSpeed](OpenLiteSpeed.md "OpenLiteSpeed")) as long as the software requirements of the [release](https://moodledev.io/general/releases/5.3) are met.

If you are installing Moodle in a Windows server, note that from php5.5 onwards, you will also need to have the Visual C++ Redistributable for Visual Studio 2012 installed from:
<http://www.microsoft.com/en-us/download/details.aspx?id=30679> Visual C++] ( x86 or x64).

The basic requirements for Moodle are as follows:

### Hardware

- Disk space: 200MB for the Moodle code, plus as much as you need to store content. 5GB is probably a realistic minimum.
- Processor: 1 GHz (min), 2 GHz dual core or more recommended.
- Memory: 512MB (min), 1GB or more is recommended. 8GB plus is likely on a large production server
- Consider separate servers for the web "front ends" and the database. It is much easier to "tune"

All the above requirements will vary depending on specific hardware and software combinations as well as the type of use and load; busy sites may well require additional resources. Further guidance can be found under [performance recommendations](performance_recommendations.md "performance recommendations"). Moodle scales easily by increasing hardware.

For very large sites, you are much better starting with a small pilot and gaining some experience and insight. A "what hardware do I need for 50,000 user?" style post in the forums is highly unlikely to get a useful answer.

### Software

See the [release notes](https://moodledev.io/general/releases/5.3) in the dev docs for software requirements.

## Set up your server

A Moodle server may be anything from a Desktop PC (e.g. for testing and evaluating) to a rack-mounted or [clustered](Server_cluster.md "Server cluster") solution to cloud VMs or other hosted solutions. As mentioned above there are lots of possibilities for installing the basic server software, for details see:

- [Nginx](Nginx.md "Nginx")
- [Apache](Apache.md "Apache")
- [Installing AMP](Installing_AMP.md "Installing AMP")
- [IIS](Internet_Information_Services.md "Internet Information Services")
- [OpenLiteSpeed](OpenLiteSpeed.md "OpenLiteSpeed")

You should also read through the instructions on [Configuring the Moodle Router](Configuring_the_Router.md "Configuring the Router").

In addition, starting with Moodle 5.1, Moodle now uses a `public` directory for all web accessible files. Your web server should be configured to serve files from this directory. For guidance on updating your configuration, see the [Code directories restructure](Upgrading.md#Code_directories_restructure "Upgrading") section in the Upgrading web page for more details.

It will help hugely, regardless of your deployment choices, if time is taken to understand how to configure the different parts of your software stack (HTTP daemon, database, PHP etc.). Do not expect the standard server configuration to be optimal for Moodle. For example, the web server and database servers will almost certainly require tuning to get the best out of Moodle.

If you're unsure which packages to use (eg. [MariaDB](MariaDB.md "MariaDB") vs. [MySQL](MySQL.md "MySQL")), then have a look at what the consensus on the internet is, but also have a look at the [Performance recommendations](Performance_recommendations.md "Performance recommendations") page, as this may also help give you an idea of exactly how much work is involved/what your workflow may end up looking like and planning that aspect as well.

If a hosting provider is being used, ensure that all Moodle [requirements](https://moodledev.io/general/releases/5.3#server-requirements) (such as PHP and database versions) are met by the hosting platform before attempting the installation. It will help to become familiar with changing settings within the hosting provider's platform (e.g. PHP file upload maximums) as the options and tools provided vary.

## Download and copy files into place

**IMPORTANT: While there are now a number of places you can get the Moodle code (including host provided Moodle installers), you are strongly advised to only obtain Moodle from moodle.org. If you run into problems it will be a great deal easier to support you.**

You have two options:

- Download your required version from <http://moodle.org/downloads> and unzip/unpack it.
- **OR** Pull the code from the Git repository (recommended for developers and also makes upgrading very simple):

```
$ git clone -b MOODLE_503_STABLE git://git.moodle.org/moodle.git
```

For a fuller discussion see [Git for Administrators](Git_for_Administrators.md "Git for Administrators").

Either of the above should result in a directory called **moodle**, containing a number of files and directories. You can typically place this folder either *inside* or *outside* of web root, or place the contents of **moodle** *within* web root.

Let's assume that your server's web-accessible directory, also known as DocumentRoot, is **public\_html**. Also assume that the **moodle** code directory is named the default **moodle**. There are three possible locations for the Moodle directory or its contents.

1. You can put the entire contents of the **moodle** directory *within* **public\_html**, which usually makes Moodle accessible at www.example.com. People who do this often dedicate their entire website to Moodle. This is somewhat a common approach on dedicated servers. However, for Moodle 5.1 and onwards, you must satisfy some security requirements.
2. In pre-Moodle 5.1, it was common to place the **moodle** directory *inside* **public\_html** (e.g., public\_html/moodle), making Moodle easily accessible at www.example.com/moodle and allowing other files and folders to be served as well. If you are installing an earlier version of Moodle, pre-5.1, this approach is still fine. However, starting with Moodle 5.1, to satisfy security concerns, this approach is no longer advised.
3. If you want to keep Moodle code in its **moodle** directory, it is recommended to place the **moodle** directory *outside* **public\_html** (e.g., moodle/public\_html). Then, you can apply different techniques to serve the Moodle application, making Moodle accessible at www.example.com/moodle, and satisfying security concerns. If you are installing an earlier version of Moodle, pre-5.1, placing the **moodle** directory outside of **publc\_html** is viable following Moodle 5.1's security recommendations, even though it was not commonly done in the past.

**Some options to set up the `public` folder**

1. If your moodle code is *within* **public\_html**, you can

- reconfigure your server's DocumentRoot to point to Moodle's **public** directory.
- reconfigure Apache's configuration files so that the **public** directory is the web-accessible folder
- use a Router method

2. If your moodle directory is *inside* of the **public\_html** directory, you can

- reconfigure your server's DocumentRoot to Moodle's **public** directory.

3. If your moodle directory is *outside* of **public\_html**, you can

- create a symbolic link file, placed *within* **public\_html**, which points to the location of Moodle's **public** directory. The general form of creating this symlink file is as follows:

```
ln -fs path_to/public symbolic_link_name (e.g., ln -fs ~/mdl_sites/moodle/public ~/public_html/moodle).
```

Note: this symlink approach will also work if your **moodle** directory is *inside* of **public\_html**, but it doesn't satify the security intent.

You should refer to your system's or web server's documentation if you are unsure about your options. Discussions on Moodle.org can also be helpful.

:   *Tip:* If you are downloading Moodle to your local computer and then uploading it to your hosted website, it is usually better to upload the compressed Moodle file and then decompress it on your hosted website. If you decompress Moodle on your local computer, because Moodle is comprised of over 25,000 files, trying to upload over 25,000 files using an FTP client or your host's "file manager" can sometimes miss a file and cause errors.

- **Secure the Moodle files:** It is vital that the files are not writeable by the web server user. For example, on Unix/Linux (as root):

```
chown -R root /path/to/moodle
chmod -R 0755 /path/to/moodle
```

(files are owned by the administrator/superuser and are only writeable by them - readable by everyone else)

On test/dev sites you *may* want to make the files writeable to use the built-in plugin installer. This is discouraged for production sites (at least, revert to more secure settings if you do).

This link about setting directory permissions on Linux Webservers may assist as well: [The right folder permissions for a website on a Linux server](https://www.internalpointers.com/post/right-folder-permission-website).

## Install Composer dependencies

Moodle can use Composer to install some third-party libraries. Composer is optional in Moodle 5.3, except for new features such as OAuth 2 Server. It will be required from Moodle 6.0.

To install the dependencies, run this command from the Moodle root directory, as a user with write access to the Moodle code:

```
composer install --no-dev --classmap-authoritative
```

If Composer isn't installed on your server, see the Composer documentation for [how to install Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos).

## Create an empty database

Next create a new, empty database for your installation. You need to find and make a note of following information for use during the final installation stage:

- **dbhost** - the database server hostname. Probably *localhost* if the database and web server are the same machine, otherwise the name of the database server
- **dbname** - the database name. Whatever you called it, e.g. *moodle*
- **dbuser** - the username for the database. Whatever you assigned, e.g. *moodleuser* - do not use the root/superuser account. Create a proper account with the minimum permissions needed.
- **dbpass** - the password for the above user

You should set the collation of the database to its proper setting (e.g., utf8mb4\_unicode\_ci).

If your site is hosted you should find a web-based administration page for databases as part of the control panel (or ask your administrator). For everyone else or for detailed instructions, see the page for your chosen database server:

- [PostgreSQL](PostgreSQL.md "PostgreSQL")
- [MariaDB](MariaDB.md "MariaDB")
- [MySQL](MySQL.md "MySQL")
- [MSSQL](MSSQL.md "MSSQL")

## Create the (*moodledata/*) data directory

Moodle requires a directory to store all of its files (all your site's uploaded files, temporary data, cache, session data etc.). The web server needs to be able to write to this directory. On larger systems consider how much free space you are going to use when allocating this directory.

Due to the default way Moodle caches data you may have serious performance issues if you use relatively slow storage (e.g. NFS) for this directory. Read the [Performance recommendations](Performance_recommendations.md "Performance recommendations") carefully and consider using (e.g.) [redis](Redis_cache_store.md "Redis cache store") or memcached for [Caching](Caching.md "Caching").

**IMPORTANT:** This directory should **NOT** be located inside a web-accessible area (e.g., public\_html/moodledata/). This is a significant security risk. Instead, place it outside your web root (e.g., moodledata/public\_html/).

On certain systems, the Moodle installation may automatically create the moodledata folder. However, we recommend creating it manually. Here is an example (Unix/Linux) of creating the directory and setting permissions for **anyone** on the server to write here. This is only appropriate for Moodle servers that are not shared. Discuss this with your server administrator for better permissions that just allow the web server user to access these files.

```
# mkdir /path/to/moodledata
# chmod 0777 /path/to/moodledata
```

#### Securing moodledata in a web directory

If you are using a hosted site and you have no option but to place 'moodledata' in a web accessible directory, you may be able to secure it by creating an .htaccess file in the 'moodledata' directory. This does not work on all systems - see your host/administrator. Create a file called .htaccess containing only the following lines:

**Apache 2.2**

```
order deny,allow
deny from all
```

**Apache 2.4**

```
Require all denied
```

## Start Moodle install

It's now time to run the installer to create the database tables and configure your new site. The recommended method is to use the command line installer. If you cannot do this for any reason (e.g. on a Windows server) the web-based installer is still available.

### Command line installer

It's best to run the command line as your system's web user. You need to know what that is - see your system's documentation (e.g. Ubuntu/Debian is 'www-data', Centos is 'apache')

- Example of using the command-line (as root - substitute 'www-data' for your web user):

```
# chown www-data /path/to/moodle
# cd /path/to/moodle/admin/cli
# sudo -u www-data /usr/bin/php install.php
# chown -R root /path/to/moodle
```

The chowns allow the script to write a new config.php file. More information about the options can be found using

```
# php install.php --help
```

You will be asked for other settings that have not been discussed on this page - if unsure just accept the defaults. For a full discussion see [Administration via command line](Administration_via_command_line.md "Administration via command line")

### Web-based installer

For ease of use, you can install Moodle via the web. We recommend configuring your web server so that the page is not publicly accessible until the installation is complete.

To run the web installer script, just go to your Moodle's main URL using a web browser (e.g., www.example.com/moodle).

The installation process will take you through a number of pages. You should be asked to confirm the copyright, see the database tables being created, supply administrator account details, and supply the site details. The database creation can take some time - please be patient. You should eventually end up at the Moodle front page with an invitation to create a new course.

If you are asked to download the new config.php file and upload it to your Moodle installation, just follow the on-screen instructions.

### Plesk and cPanel

To install Plesk on your Ubuntu server for managing multiple websites, including your Moodle-based training website, you should follow these steps:

1. Connect to the server via SSH.

2. Install the software-properties-common package to manage repositories:

```
apt-get install software-properties-common
```

3. Add the PPA repository:

```
add-apt-repository ppa:ondrej/php
```

4. Install PHP 7.2:

```
apt -y install php7.2
```

5. Install necessary PHP modules (example):

```
apt install -y php7.2-{bcmath,bz2,cli,common,curl,dev,fpm,gd,gmp,imagick,imap,intl,json,mbstring,mysql,opcache,soap,ssh2,xml,xmlrpc,zip}
```

6. Register the PHP handler in Plesk:

```
plesk bin php_handler --add -displayname php72-fpm-custom -path /usr/sbin/php-fpm7.2 -phpini /etc/php/7.2/fpm/php.ini -type fpm -id php72-fpm-custom -clipath /usr/bin/php -service php7.2-fpm -poold /etc/php/7.2/fpm/pool.d
```

Plesk will handle the installation of Apache, MariaDB/MySQL, PHP, and other necessary components. You can then proceed with the Moodle installation as per the Moodle documentation.

## Final configuration

### Settings within Moodle

There are a number of options within the Moodle Site Administration screens (accessible from the 'Site administration' tab in the 'Administration' block (Classic theme) or the Site administration button in the navigation bar (Boost). Here are a few of the more important ones that you will probably want to check:

- *Administration > Site administration > Server > Email > [Outgoing mail configuration](Mail_configuration.md#Outgoing_mail_configuration "Mail configuration")*: Set your smtp server and authentication if required (so your Moodle site can send emails). You can also set a norepy email on this page.
- *Administration > Site administration > Server > Server > Support contact*. Set your support contact email.
- *Administration > Site administration > Server > System paths*: Set the paths to du, dot and aspell binaries.
- *Administration > Site administration > Server > HTTP*: If you are behind a firewall you may need to set your proxy credentials in the 'Web proxy' section.
- *Administration > Site administration > Location > Update timezones*: Run this to make sure your timezone information is up to date. (more info [Location](Location.md "Location"))
  - [Set server's local timezone](http://php.net/manual/en/timezones.php) inside php.ini (should probably be inside /etc/php.ini or /etc/php.d/date.ini, depending on the underlying OS):

```
[Date] 
; Defines the default timezone used by the date functions 
date.timezone = "YOUR LOCAL TIMEZONE"
```

### Remaining tasks

- **Configure Cron**: Moodle's background tasks (e.g. sending out forum emails and performing course backups) are performed by a script which you can set to execute at specific times of the day. This is known as a cron script. Please refer to the [Cron instructions](Cron.md "Cron").
- **Set up backups**: See [Site backup](Site_backup.md "Site backup") and [Automated course backup](Automated_course_backup.md "Automated course backup").
- **Secure your Moodle site**: Read the [Security recommendations](Security_recommendations.md "Security recommendations"). Also have a look at the Security Checks Section under Site Administration -> Reports -> Security Checks.
- **Increasing the maximum upload size** See [Installation FAQ](Installation_FAQ.md "Installation FAQ") Maximum upload file size - how to change it?
- **Check mail works** : From Site administration > Server > Test outgoing mail configuration, use the link to send yourself a test email. Don't be tempted to skip this step.

### Installation is complete :)

- Create a new course: You can now access Moodle through your web browser (using the same URL as you set during the install process), log in as your admin user and create a new course. See [create a new course](Adding_a_new_course.md "Adding a new course").
- Now that your site is running, when you've got a chance, consider seeing how you can maximize its performance by having a look at [Performance recommendations](Performance_recommendations.md "Performance recommendations").

### If something goes wrong...

Here are some things you should try...

- Check the [Installation FAQ](Installation_FAQ.md "Installation FAQ")
- Check your file permissions carefully. Can your web server read (but not write) the Moodle program files? Can your web server read and write your Moodle data directory? If you don't fully understand how file ownership and permissions work on your operating system it would be time very well spent to find out.
- Check your database permissions. Have you set up your database user with the correct rights and permissions for your configuration (especially if the web server and database server are different machines)?
- Create your [Configuration file](Configuration_file.md "Configuration file") (config.php) by hand. Copy config-dist.php (in the root of the Moodle program directory) to config.php, edit it and set your database/site options there. Installation will continue from the right place.
- Once you have a config.php (see previous tip) you can edit it to turn on debugging (in section 8). This may give you extra information to help track down a problem. If you have access, check your web server error log(s).
- Re-check your php.ini / .htaccess settings. Are they appropriate (e.g. memory\_limit), did you edit the correct php.ini / .htaccess file and (if required) did you restart the web server after making changes?
- Did you include any non-core (optional) plugins, themes or other code before starting the installation script? If so, remove it and try again (it may be broken or incompatible).
- Explain your problem in the [Installation problems forum](http://moodle.org/mod/forum/view.php?id=28). **PLEASE** list your software versions; explain what you did, what happened and what error messages you saw (if any); explain what you tried. There is no such thing as 'nothing', even a blank page is something!

## Platform specific instructions

**Note:** Much of this information is provided by the community. It may not have been checked and may be out of date. Please read in conjunction with the above installation instructions.

- [Windows installation](Windows_installation.md "Windows installation")
  - [Installing Moodle on SmarterASP.NET](Installing_Moodle_on_SmarterASP.NET.md "Installing Moodle on SmarterASP.NET")
- [Unix or Linux Installation](Unix_or_Linux_Installation.md "Unix or Linux Installation")
- [Step-by-step Installation Guide for Ubuntu](Step-by-step_Installation_Guide_for_Ubuntu.md "Step-by-step Installation Guide for Ubuntu")
- [Mac Installation](Mac_Installation.md "Mac Installation")
- [Amazon EC2 Cloud Services Installation](Amazon_EC2_Cloud_Services_Installation.md "Amazon EC2 Cloud Services Installation")

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Installing_Moodle&oldid=156783>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Installation](Category_Installation.md "Category:Installation")
