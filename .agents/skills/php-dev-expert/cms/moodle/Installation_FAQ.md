# Installation FAQ - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Installation_FAQ

---

# Installation FAQ

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Installation FAQ

[Installation](Installation.md "Installation")

- [Installing Moodle](Installing_Moodle.md "Installing Moodle")
- [Installation quick guide](Installation_quick_guide.md "Installation quick guide")
- [Cron](Cron.md "Cron")
- [Nginx](Nginx.md "Nginx")
- [Apache](Apache.md "Apache")
- [IIS](Internet_Information_Services.md "Internet Information Services")
- [Routing](Configuring_the_Router.md "Configuring the Router")
- [Installing plugins](Installing_plugins.md "Installing plugins")
- Installation FAQ
- [Upgrading](Upgrading.md "Upgrading")
- [Upgrade overview](Upgrade_overview.md "Upgrade overview")
- [Automatic updates deployment](Automatic_updates_deployment.md "Automatic updates deployment")
- [Git guide](Git_for_Administrators.md "Git for Administrators")
- [Administration via command line](Administration_via_command_line.md "Administration via command line")
- [Upgrading FAQ](Upgrading_FAQ.md "Upgrading FAQ")
- [Moodle migration](Moodle_migration.md "Moodle migration")

## System information needed for Installation problems forum

When posting questions to the [Installation problems forum](http://moodle.org/mod/forum/view.php?id=28), try to provide as much background information as possible about your Moodle system. Consider providing some or all of the following:

- Server Operating System name (version also if possible):
- PHP version (e.g. PHP 5.4.4)
- Database server type and version (e.g. MySQL 5.5.18)
- Browser and version (e.g. Firefox, IE8):
- Moodle version (e.g. 3.0):
- Moodle install type? (New/Upgrade):
- Moodle config.php attached (please remove passwords):
- Phpinfo attached?:

Make sure you provide a sensible description (never HELP! or URGENT!) and a full description of what you did and what happened. Copy and paste any error messages accurately in full. 'Nothing' is not a symptom, even a blank page is something!

[Top](#top)

## PHP - is it installed and what version do I have?

Make a new file on your web site called *info.php*, containing the following text, and call it from your browser:

`<?PHP phpinfo() ?>`

If nothing happens then you don't have PHP installed or your webserver is not configured to handle .php files properly. See the installation docs for some information about where to download it for your computer. See the [phpinfo](phpinfo.md "phpinfo") page for details about the content of this page.

[Top](#top)

## I am being told that I need the **intl php plugin** to continue to install Moodle 2.x

The intl.dll from Zend is part of the PHP 5.2.8 release and later. It is aimed at improving the internationalization of php pages and Moodle 2.x uses it as part of this process. If your install is on a local machine or network, then you can download the latest version of PHP and update your PHP. You then have to uncomment all the required dynamic extensions you need, including the php\_intl.dll extension. The problem is then solved. If the install is on a host server, then you need to contact your host and ask them to do the same. As an alternative, you can unzip/untar the download file, copy and paste the intl.dll file to your php/ext folder and include the line:

```
 extension=php_intl.dll
```

in the Dynamic Extensions section of your php.ini file.

You can also set the error level using:

```
 intl.error_level = E_WARNING
```

but this is not essential

If you are using a Linux install, use your system package manager or specify compilation flag.

```
   * Debian 5.0 (& Ubuntu) use: apt-get install php-intl or apt-get install php5-intl 
   * CentOS 5.5 (& RedHat) you should (probably) be using php 5.3 from remi and then use: yum install php-intl
```

This technique can be applied to any updated dynamic extension from Zend. You may want to use later dll files in your php/ext folder, you can do so by doing the same as above, but be careful, your version may not be able to take full advantage of the extension, or some very new extensions may cause an unexpected instability. The best option is still to update on a regular basis, perhaps once a year or so for the PHP.

[Top](#top)

### What Dynamic Extensions do I really need uncommented in my php.ini file? What else do I need to change?

This assumes you have complete control over the installation and running of your server, if your Moodle is hosted, you need to do something different, which is also discussed below. In the php.ini you need to delete the semi-colon, the ;, from the start of any line to uncomment it. For Moodle, you really should only need to change some values, and make sure the extensions you require are available. These are:

Resource Limits

```
 memory_limit = 128M     //This is the maximum it requires and on a shared server you may get much less.
```

Data Handling

```
 post_max_size = 512M    //This allows postings of up to 512MB, but set it to suit yourself and your circumstances
```

Paths and Directories

```
 doc_root ="driveletter:\path\to\server\active\web\directory"  (e.g. d:\Apache\htdocs or e:\iis\wwwroot )
 and
 extension_dir = "driveletter:\path\to\php\ext" (e.g. d:\php\ext or e:\iis\php\ext)
```

File Uploads

```
 upload_max_filesize = 512M    (This is different from the post_max_size this is for file uploads.)
```

Dynamic Extensions (**Windows Only**)

| PHP 5.3.x |
| --- |
| ```  extension=php_curl.dll  extension=php_gd2.dll  extension=php_gettext.dll  extension=php_intl.dll  extension=php_imap.dll  extension=php_ldap.dll  extension=php_mbstring.dll  extension=php_exif.dll      ; Must be after mbstring as it depends on it  extension=php_mysql.dll  extension=php_mysqli.dll  extension=php_openssl.dll  extension=php_pdo_mssql.dll  extension=php_pdo_mysql.dll  extension=php_soap.dll  extension=php_sockets.dll  extension=php_sqlite.dll  extension=php_xmlrpc.dll  extension=php_zip.dll ``` |

These edits and Dynamic extensions cover a range of options here, there are a number of other possibilities, but these listed are the most common ones. Unless you have a specific need, there may not be any reason to deviate from these settings, but if you do, make sure you know what is going to happen. These extensions will also allow you to successfully install and run many other PHP applications.

[Top](#top)

## What & where are Moodle's configuration settings stored?

Configuration settings are stored in the config.php file stored in your moodle folder. This file is created during the installation process. If there is a problem and the installation cannot create the file, you can try creating it manually from the [Configuration file](Configuration_file.md "Configuration file") docs.
[Top](#top)

## What external domains does a Moodle site contact?

A new installation of Moodle contacts a number of outside domains (using standard HTTP(S) ports) for certain tasks.

- Checking for available updates for core and its plugins is on by default. The endpoint is <https://download.moodle.org/api/1.3/updates.php>. This is controlled by the setting *Site administration > Server > Automatically check for available updates*, which can be adjusted in the Scheduled task 'Check for updates'.

- Site registration checks once a week if you are registered or not. This is on by default. Even if you don't register, it still checks at the domain stats.moodle.org. This is controlled by the Scheduled task 'Site registration'.

- Installed language packs are updated by the Scheduled task 'Update all installed language packs' which by default runs daily at 04:19. This is on by default. It goes to <https://download.moodle.org/langpack/> and its subfolders for the various packs it is checking on. When this task runs, is also updates the list of Available language packs as well.

- The Moodle Campaign tool which is on the *Site administration > Notifications* page makes updates to get image banners, at least. Details are here in the original tracker: <https://tracker.moodle.org/browse/MDL-68320>. This was added to Moodle 3.9. There is no administration setting to control this. Currently, the only way to disable this is to add a CFG setting in the config.php file. How to do that is documented in the tracker above, using $CFG->showcampaigncontent = false; about which also see the config-dist.php file as well.

- The MathJax filter is on by default and connects to <https://cdn.jsdelivr.net/npm/mathjax@2.7.8/MathJax.js> - even if you aren't using it, it still tries to connect. This is controlled in *Site administration > Plugins > Filters > MathJax > Settings*. To stop it, remove the default MathJax URL settings there and leave it blank.

- H5P library updates are on by default. This is controlled by the Scheduled task 'Download available H5P content types from h5p.org' which runs by default once a month on the first day of the month.

## Downloading previous releases of Moodle

Previous versions of Moodle that are not found on [Moodle downloads](http://download.moodle.org) may be downloaded from http://download.moodle.org/stable[version\_number]/ where [version\_number] is the number without a point. For example <http://download.moodle.org/stable22/> or <http://download.moodle.org/stable27/>

You'll see a directory tree with the files displayed. Click on the one you want and download as normal. If you require the latest update of the version, scroll to the end of the list and download the "moodle-latest" file.

- **Windows Packages**: To download other releases not found in [Moodle packages for Windows](http://download.moodle.org/windows/), use this URL:

:   http://download.moodle.org/windows/MoodleWindowsInstaller-latest-[version\_number].zip

- **Mac Packages**: To download other releases not found in [Mac packages](https://download.moodle.org/macosx/), use this URLs:

:   https://download.moodle.org/macosx/Moodle4Mac-[version\_number].zip

For details of how to download a particular weekly version, see the post [Looking for VERY specific release of older Moodle](https://moodle.org/mod/forum/discuss.php?d=346698#p1398162).

[Top](#top)

## How to enable and check PHP error logs

PHP can be set up to log errors in a variety of different ways: two of these involve the use of the php.ini file and the ini\_set command. See [PHP\_error\_logs](https://docs.moodle.org/dev/PHP_error_logs "dev:PHP error logs").

## "Could not find a top level course"

If this appears immediately after you have attempted to install Moodle it almost certainly means that the installation did not complete. A complete installation will ask you for the administrator profile and to name the site just before it completes. Check your logs for errors. Then drop the database and start again. If you used the web-based installer try the command line one. Does your computer definitely have sufficient resource to run Moodle?

## Email copies are not being sent from my forums

You *must* set up cron properly if you want Moodle to send out automatic email from forums, assignments etc. This same process also performs a number of clean-up tasks such as deleting old unconfirmed users, unenrolling old students and so on. Please refer to the [cron instructions](Cron.md "Cron").

Tips:

- Try the default settings in  *Site administration > Server > Email*. This generally works. Except...
- On a Windows server you \*must\* supply the address of an SMTP server (Windows, unlike Unix, does not have a build in mail server) in the above settings page
- Make sure that *allowuseremailcharset* in *Site administration > Server > Email > Outgoing mail configuration* is set to No unless you really know what you are doing. Setting this to Yes can cause a problem in some versions of Moodle.
- Check your firewall or ask your network administrator. Many mail servers are heavily locked down and you may need permission to send mail through them.

[Top](#top)

## I can't log in - I just stay stuck on the login screen

This may also apply if you are seeing “Your session has timed out. Please login again” or "A server error that affects your login session was detected. Please login again or restart your browser" and cannot log in.

The following are possible causes and actions you can take (in no particular order):

- Check first that your main admin account (which will be a manual account) is also a problem. If your users are using an external authentication method (e.g. LDAP) that could be the problem. Isolate the fault and make sure it really is Moodle before going any further.
- Check that your hard disk is not full or if your server is on shared hosting check that you have not reached your disk space quota. This will prevent new sessions being created and nobody will be able to log in.
- Carefully check the permissions in your 'moodledata' area. The web server needs to be able to write to the 'sessions' subdirectory.
- Your own computer (not your Moodle server) may have a firewall that is stripping referrer information from the browser. Here are some instructions for fixing [Norton firewall products](http://service1.symantec.com/SUPPORT/nip.nsf/46f26a2d6dafb0a788256bc7005c3fa3/b9b47ad7eddd343b88256c6b006a85a8?OpenDocument&src=bar_sch_nam).
- Try deleting the *sessions* folder in your moodledata directory (anybody currently logged in will be thrown out)
- Try deleting cookies on your computer and/or try another browser or another client computer
- In *Settings > Site administration > Server > Session Handling*, try setting a value for 'Cookie prefix'. You can also do this by setting `$CFG->sessioncookie='something';` in config.php. This is especially true if you are using multiple Moodles on the same browser.
- Make sure you have not removed or changed the [Password Salt](Password_salting.md "Password salting") value(s) in config.php. If passwords were created using a salt the correct salt must be in config.php for those passwords to continue to work. This is easily done if you recreate config.php while performing an upgrade and forget to transfer the salt values.
- Do you have a .htaccess file in your Moodle folder (or its parent directories). If so, is there anything in there that might be causing trouble (strange redirects, access restrictions etc.)?
- Check the value of **mnet\_localhost\_id** in the mdl\_config database table. It's normally 1 but must match the **mnet\_hostid** field in your user records in the mdl\_user table for the user to be recognised. It can sometimes get changed spuriously during upgrades or site migrations.
- Check config.php - it should NOT have any spaces/new lines at the end of code.
- You are using the correct username and password, yes?

If you are still having problems, read the [Cannot log in](Can_not_log_in.md "Can not log in") page. You **could** also try changing the admin password. Proceed as if you have lost it - see [Administration FAQ](Administration_FAQ.md "Administration FAQ").

[Top](#top)

## I log in but the login link doesn't change. I am logged in and can navigate freely.

Make sure the URL in your `$CFG->wwwroot` setting is exactly the same as the one you are actually using to access the site.

[Top](#top)

## Uploaded files give "File not found"

For example: Not Found: The requested URL /moodle/file.php/2/myfile.jpg was not found on this server.

This indicates that slash arguments are not enabled on your web server. Please see [Using slash arguments](Using_slash_arguments.md "Using slash arguments") for details.

[Top](#top)

## Why are all my pages blank?

One reason might be that PHP has not been configured to support MySQL (or whatever other database you are using). This is common on RedHat and OpenBSD installations. In this case, an error is generated, but since error displays are often disabled by default, all that is seen on the browser is a blank screen. To enable PHP error displays see [How to enable and check PHP error logs](#How_to_enable_and_check_PHP_error_logs).

To determine if database support is your problem, insert this as the second line in your *config.php* file

`phpinfo();`

then reload the web page. Examine the output closely to see if you chosen database is supported. If not, look for a package you are missing.

[Top](#top)

## Why is a particular page blank or incomplete?

- **Check your web server log files!!**

:   If a particular page is blank or incomplete (it doesn't display the footer), before you do anything else switch on [Debugging](Debugging.md "Debugging") and [check your PHP error logs](#How_to_enable_and_check_PHP_error_logs). Having established that PHP error logging is working, reproduce the error. Immediately check the error log file right at the end. Hopefully you will see a PHP error message at or very near the end of the file. This may solve your problem directly or makes it a lot easier to diagnose the problem in the Moodle forums.

- If you are **upgrading to a new version of Moodle**, check that you do not have an old version of a non-standard block or module installed. Remove any such blocks or modules installed using the admin settings page and start the install process again. However, do also make sure that you have included all optional plugins that were required by your courses. This is particularly common with "editing on".

- If you **do not see any blocks listed**, turn editing on and remove any blocks that you have added to that page and try reloading.

- You may get this error immediately after **selecting a language**. At this stage of the installation process your Moodle computer may need to connect to the Internet and download a language pack, so check that the computer can access the Internet by using a browser. Check also that your PHP settings are as given in the Moodle [Moodle Requirements](Installing_Moodle.md#Requirements "Installing Moodle") page.

**See also**:

- Using Moodle [PHP configuration error](http://moodle.org/mod/forum/discuss.php?d=97734) forum discussion

## Installation hangs when setting-up database tables

Sometimes the installation will hang when setting up tables, where only half the page displayed in the browser and/or other outputs are removed. You may see truncated MySQL statements, or the “Scroll to continue” link is displayed but no “Continue” button is there.

See [Unexpected installation halts](Unexpected_installation_halts.md "Unexpected installation halts") for more about solutions that involve:

- Checking for MySQL limits
- Checking the .htaccess files
- Code customizations issues
- Checking memory limit
- Upgrade incrementally
- Fix fopen function

[Top](#top)

## Why can't I upload a new image into my profile?

If you don't see anything on your user profile pages to let you upload user images then it's usually one of the following:

- The permissions associated with the role you are using are preventing you from changing your profile picture.
- GD is not installed, or is not enabled on your server. Make sure **GD has been included in your PHP installation**. You can check this by going to *Site Administration > Server > PHP info* and looking for the gdversion setting. This setting is chosen automatically every time you visit that page. If it shows GD version 1 or version 2 then everything should be fine. Save that configuration page and go back to your user profile.
- GD is installed, but is in some way corrupt. For instance, [see this discussion on empty lines or white spaces in config files.](http://moodle.org/mod/forum/discuss.php?d=44271#p386194)

GD is a library that allows image processing. For example, when all is well with your system, and you upload a new profile image, GD compresses the image and produces two thumbnails, one is 100x100 pixels, and the other is 35x35 pixels.

If Moodle thinks GD is not installed, then you will need to **install the GD library**.

- On Unix you may need to re-compile PHP with arguments something like this:

```
./configure --with-apxs=/usr/local/apache/bin/apxs --with-xml --with-gd 
--with-jpeg-dir=/usr/local --with-png-dir=/usr --with-ttf --enable-gd-native-ttf 
--enable-magic-quotes --with-mysql --enable-sockets --enable-track-vars 
--enable-versioning --with-zlib
```

- On Windows this is usually a matter of "turning on" the extension in PHP by editing your php.ini file. To do this remove the semicolon for the php\_gd2.dll extension - check that this file is actually present in your php extensions folder first (search your php.ini for extension\_dir to determine where this points to on your hard disk). You should then have a line that looks like this:

```
extension=php_gd2.dll
```

:   Windows users should see the [installation instructions](Installing_AMP.md "Installing AMP") for further help.

3. Remember to **restart your webserver** (if possible) and re-visit the Moodle configuration page after making any changes to PHP so it can pick up the correct version of GD.

**See also**: Using Moodle forum discussion [Profile pictures](http://moodle.org/mod/forum/discuss.php?d=44271) for additional information.

## Why doesn't my Moodle site display the time and date correctly?

Please check the timezone settings in settings in *Administration > Site administration > Location > Location settings*.

## How do I uninstall Moodle?

**Webhost/manual installation**: If you have installed Moodle manually or have installed onto a webhost, follow these steps:

- Delete the moodle database using this mysql command (or delete using your mysql client, e.g. PHPMyAdmin):

```
sql>DROP DATABASE moodle;
```

:   In the above example replace 'moodle' with the name of the moodle database you created when installing.

- Delete the moodledata directory. If you, or your users, have uploaded materials into this directory take a copy of these before deleting this directory.
- Delete the moodle directory itself. This will delete all of the moodle PHP script files.

**XAMPP windows installation**: If you have installed Moodle on windows through the XAMPP package, follow these steps:

- Open cmd.exe and navigate to this directory within your installation directory:

```
server/mysql/bin
```

- Run this command, replacing USERNAME with your database username (the default is "root") and DATABASE with your database name (the default is "moodle"):

```
mysqladmin.exe -u USERNAME -p drop DATABASE
```

- Enter your database password at the prompt (the default is "" [blank]).
- Enter "y" to confirm the database drop.
- Delete the moodledata directory. If you, or your users, have uploaded materials into this directory take a copy of these before deleting this directory.
- Delete the moodle directory itself. This will delete all of the moodle PHP script files.

## Migrating Moodle to a new site or server

Migrating Moodle means that you have to move the current installation to a new server, and so may have to change IP addresses or DNS entries. To do this you will need to change the $CFG->wwwroot value in the config.php on the new server. You will also have to change any absolute links stored in the database backup file (before restoring the file on the new server) either using the [Search and replace tool](Search_and_replace_tool.md "Search and replace tool"), your text editor or another "search and replace" tool, e.g. sed. For more details see the [Moodle Migration](Moodle_migration.md "Moodle migration") page.

[Top](#top)

## Why does my new installation display correctly on the server, but when I view it from a different machine, styles and images are missing?

In the installation instructions, one of the suggested settings for 'webroot' is 'localhost'. This is fine if all you want to do is some local testing of your new Moodle installation. If, however, you want to view your new installation from another machine on the same local area network, or view your site on the internet, you will have to change this setting:

- For local testing, 'localhost' is fine for the webroot ($CFG->wwwroot in config.php).
- If you want to test your site from other machines on the same local area network (LAN), then you will have to use the private ip address of the serving machine, (e.g. 192.168.1.2/moodle) or the network name of the serving computer (e.g. network\_name\_of\_serving\_machine/moodle) as the web root. Depending on your LAN setup, it may be better to use the network name of the computer rather than its (private) ip address, because the ip address can and will change from time to time. If you don't want to use the network name, then you will have to speak to your network administrator and have them assign a permanent ip address to the serving machine.
- Finally, if you want to test your new installation across the internet, you will have to use either a domain name or a permanent (public) ip address/moodle as your web root. To handle both types of access, see [masquerading](https://docs.moodle.org/en/masquerading).

[Top](#top)

## Maximum upload file size - how to change it?

There are several places to change the maximum file upload size. The first place to check is in Site administration > Security > Site security settings and look for "Maximum uploaded file size". This is the "maxbyte" variable found in older versions of Moodle (under Admin > Variables). Teachers may also set the maximum file size by the [course administration block](Course_settings.md#Maximum_upload_size "Course settings").

If the above does not provide a large enough figure you will need to make changes in your server settings. The usual place is in your php.ini file (go to Site administration > Server > PHPinfo and check a few lines down for its location). Look for settings **upload\_max\_filesize** and **post\_max\_size**, setting them both to your desired new value (e.g. '64MB'). You will need to restart the web server for these changes to take effect - e.g. on Linux, **/etc/init.d/apache2 force-reload**. Check your documentation or just reboot the server. [NGINX](http://nginx.org/en/docs/http/ngx_http_core_module.html#client_max_body_size) system administrators should also add client\_max\_body\_size=XXX to the "http" section of their nginx main configuration file. ([see more info](https://rtcamp.com/tutorials/php/increase-file-upload-size-limit/#change-in-nginx-config))

For more help see:

- [Administration FAQ#How do the limits on uploaded files work.3F](Administration_FAQ.md#How_do_the_limits_on_uploaded_files_work.3F "Administration FAQ")
- [Installing Moodle#Recheck PHP settings](Installing_Moodle.md#Recheck_PHP_settings "Installing Moodle")
- [Installing Moodle#Using a .htaccess file for webserver and PHP settings](Installing_Moodle.md#Using_a_.htaccess_file_for_webserver_and_PHP_settings "Installing Moodle")
- [Site policies#Maximum uploaded file size](Site_policies.md#Maximum_uploaded_file_size "Site policies")
- These forum posts: <http://moodle.org/mod/forum/discuss.php?d=63840#287960> and <http://moodle.org/mod/forum/discuss.php?d=93882#p414650>

[Top](#top)

## Moodle claims PHP float handling is not compatible

The symptom is that when you try to install or upgrade your Moodle, you get a message "Detected unexpected problem in handling of PHP float numbers".

[This forum thread](http://moodle.org/mod/forum/discuss.php?d=114945) and [MDL-18253](https://tracker.moodle.org/browse/MDL-18253) have more information. In short, this problem should not happen, you can help us by telling posting information about exactly which version of PHP, and OS you are using. That may let us find a way to work around this problem.

You may be able to solve this issue by installing a more recent PHP versions. If you compile PHP yourself from source, changing the compilation options may help. However, since we don't understand the cause, we don't really know. If you do find a solution that works for you, please do tell us about it.

Update: we have a guess that the problem may be the ['precision' setting in your php.ini file](http://au2.php.net/manual/en/ini.core.php#ini.precision). In a default PHP install this is set of 14. On at least one server that exhibited this problem it had been changed to a smaller value. So, if you see this problem, please try adding

```
ini_set('precision', 14);
```

to your config.php file, and report your success in [MDL-18253](https://tracker.moodle.org/browse/MDL-18253).

## How do I run multiple instances of Moodle without duplicating base code?

See [this thread](http://moodle.org/mod/forum/discuss.php?d=13211) for a detailed explanation by [Martin Langhoff](https://docs.moodle.org/503/en/User:Martin_Langhoff).

## How do I install a plugin?

Please see [Installing plugins](Installing_plugins.md "Installing plugins").

## I can't enable a plugin on the Plugins overview page because the icon is not clickable

The open and closed eye icon on the Plugins overview page is simply there to show whether or not a plugin is enabled. You can't edit plugins from this screen. If you wish to enable a plugin, go to the appropriate page for managing the type of plugin you need, for instance *Settings>Site administration>Plugins>Repositories>Manage repositories* or *Settings>Site administration>Plugins>Activity modules>Manage activities.*

## See also

- [Errors FAQ](Errors_FAQ.md "Errors FAQ")
- [Installing and upgrading help forum](http://moodle.org/mod/forum/view.php?id=28) on moodle.org

Installing Moodle in a shared web hosting environment:

- [Finding and Selecting a web host](Finding_and_Selecting_A_Web_Host.md "Finding and Selecting A Web Host")

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Installation_FAQ&oldid=154759>"

[Categories](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Installation](Category_Installation.md "Category:Installation")
- [FAQ](Category_FAQ.md "Category:FAQ")
