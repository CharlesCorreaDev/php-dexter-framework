# Administration FAQ - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Administration_FAQ

---

# Administration FAQ

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site") ► Administration FAQ

[Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site")

- [Admin quick guide](Admin_quick_guide.md "Admin quick guide")
- [Authentication](Authentication.md "Authentication")
- [Managing accounts](Managing_accounts.md "Managing accounts")
- [Enrolments](Enrolments.md "Enrolments")
- [Payment gateways](Payment_gateways.md "Payment gateways")
- [Roles and permissions](Roles_and_permissions.md "Roles and permissions")
- [Security](Security.md "Security")
- [Performance](Performance.md "Performance")
- [Backup](Backup.md "Backup")
- [Site registration](Site_registration.md "Site registration")
- [Site appearance](Site_appearance.md "Site appearance")
- [Language](Language.md "Language")
- [Server settings](Server_settings.md "Server settings")
- [Site-wide reports](Site-wide_reports.md "Site-wide reports")
- [Admin tools](Admin_tools.md "Admin tools")
- [Developer tools](Developer_tools.md "Developer tools")
- [Web services](Web_services.md "Web services")
- [More features](More_features.md "More features")
- [GDPR](GDPR.md "GDPR")
- [Communication](Communication.md "Communication")
- [MoodleNet](MoodleNet.md "MoodleNet")
- [SMS gateways](SMS_gateways.md "SMS gateways")
- Administration FAQ

## Common questions

### How do I find the version of Moodle currently installed?

See the [Moodle version](Moodle_version.md "Moodle version") information on the *Site Administration > Notifications* page.

### I have forgotten the admin password

First, try using the Forgotten password link (if you have one on your site.) If you don't know the admin username, often it is simply 'admin'.

#### Command line method

Cli tool: You can reset the admin user's password [using the command line tool reset\_password.php](Administration_via_command_line.md#Reset_user_password "Administration via command line") provided with Moodle.

Config.php setting: You can also set any user to be an admin user using the setting in the config.php file for this: $CFG->siteadmins="2,#"; where # is the id number of some user you do know the password to. This will turn that user into an administrator. See the details [in the config-dist.php file](https://github.com/moodle/moodle/blob/master/config-dist.php) on how to use this.

#### Database method

If you do not have command line access, but do have access to the database, you can modify a password there. Passwords for all users, including admin, are stored as cryptographic hashes in the table *mdl\_user*. You can manually replace the old hash with md5 value of the new password, it will be upgraded to the strong hash value after the first log-in.

Or, you can also do the equivalent of the config.php siteadmins setting by adding a user id number of a user with a known password to the mdl\_config table where the 'name' equals "siteadmins". (This may be row 23 in the table, since it is built during install.) The 'value' is a comma delimited list of the id numbers of admin users. The default value is 2, for the main predefined admin. Add any other admins here, comma separated. For example, if you want to add user 3 as an admin, edit the value and put 2,3 as the value. You may need to flush caches for this to take effect right away, since lots of user info is cached.

### How do I prevent users from logging in while I do maintenance?

Use one or the other of the two methods for [Maintenance mode](Maintenance_mode.md "Maintenance mode") to do this.

### My site is stuck in maintenance mode

Sometimes Moodle gets stuck in maintenance mode and you'll see the message "This site is undergoing maintenance and is currently unavailable" despite your attempts to turn-off maintenance mode.

When you put Moodle into maintenance mode it creates a file called maintenance.html in moodledata/maintenance.html (the site files folder). To fix this try the following:

- Check that the web server user has write permissions to the moodledata folder.
- Manually delete the maintenance.html file.

### How can I change the domain name or URL of the Moodle site?

The base URL of your site is set in the config.php file setting wwwroot. All dynamic links (e.g. course and activity URLs) are built by prefixing this setting on the fly. These are known as "relative links."

Your Moodle site may also contain "absolute links" to resources which point to the previous URL, if you or anyone has copy/pasted the links into activities like Pages, or other locations in Moodle. These are text strings just like any text or link to a web site.

To change such absolute in bulk, Moodle contains a utility called [Search and replace](Search_and_replace_tool.md "Search and replace tool") to change all the links to the new URL. To change this login as admin and enter <http://yoursite.com/admin/tool/replace/index.php> in your browser address bar. Fill in your old base url and new base in the boxes and run the utility.

If you change the domain name of your site, there may be work you need to do on your web server and/or DNS settings as well to configure it to understand the new domain. See [Migration](Moodle_migration.md "Moodle migration") for more tips.

[![Search and replace interface screenshot](/503/en/images_en/1/11/searchandreplacecommandlinetool_interface_m30.png)](https://docs.moodle.org/503/en/File:searchandreplacecommandlinetool_interface_m30.png "Search and replace interface screenshot")

### My log table has disappeared - No logs found!

The most likely cause is that the mdl\_log table has become corrupted. See the [How to check your database for corruption](How_to_check_your_database_for_corruption.md "How to check your database for corruption"). NOTE: A new logging system has been i place since Moodle 2.7 as an option. Be sure to check in *Site administration > Plugins > Logging > Manage log stores* to see whether you are still using the old style logging, Legacy log, or the Standard log.

### How do I repair a corrupted Moodle database?

Typically, you might see an error message like './moodle/mdl\_quiz\_grades' is marked as crashed and should be repaired. See [How to check your database for corruption](How_to_check_your_database_for_corruption.md "How to check your database for corruption") for the solution.

### How do I change spellings like 'enrol' to 'enroll'?

This is controlled by your language pack and default language. In this case, you are probably using the default Moodle language pack 'en' which is common (and sometimes specifically Australian) spellings. If you need American English, add the en\_us language pack and set it as the default.

## Site policies and settings

### How do the limits on uploaded files work?

See [File upload size](File_upload_size.md "File upload size") for more information.

File upload sizes are restricted in a number of ways - each one in the list restricts the following ones.

1. Not very likely these days (i.e. check if the other settings don't work), there is a setting in Apache 2 which you may need to change. You can change the limit by adding or editing a line in Apache's */usr/local/apache2/conf/httpd.conf* with the upload size in bytes (check your operating system's documentation for the correct location - e.g. under /etc/apache2 is a common alternative):

```
LimitRequestBody 10485760
```

2. PHP also has limits. If you have access to it they are set in your site-wide **php.ini** file. On shared hosting you may be able to set these in a *.htaccess* file or a *php.ini*. You are recommended to check with your hosting company how this works on their systems.

In a php.ini file the lines will look something like:

```
    upload_max_filesize 64M
    post_max_size 64M
```

...in .htaccess the entries will look like this:

```` ```
php_value upload_max_filesize 64M
php_value post_max_size 64M
``` ````

An .htaccess file usually can be placed in the root of your Moodle install and will affect the whole Moodle. A (non site-wide) php.ini file may need to be copied into all the directories it needs to affect. The following are a good start:

```
   * public_html
   * moodle/admin
   * moodle/course
   * moodle/files
   * moodle/repository
   * root of your moodledata directory
```

Please note that a server restart may be required for the above changes to take effect.

3. Moodle has a site-wide limit called maxbytes that may be set in *Site Administration > Security > Site security settings > Maximum uploaded file size*. The default here is (site limit) which it reads from the php.ini files You can set this lower if you wish for Moodle itself but don't set it lower than the largest possible file you will be uploading

To find out the server limit setting in php.ini (without server access, just using the Moodle administration interface), see *Site Administration > Server > PHP info* (Tip: search for filesize)

4. You should usually set the default for all newly created courses to something lower than the site limit. This is set in *Site administration > Courses > Course default settings > Maximum upload size*. Inside each course, this then may be individually set or changed for that course as needed by the usual teacher role in [Course settings](course__edit.md "course/edit").

5. Activity modules that can be set to allow students to upload files to them, such as [Forums](Forums.md "Forums") and [Assignments](Assignments.md "Assignments"), have their own limits which may be set when adding or editing the activity.

**See also**

- Using Moodle [Detailed instructions to increase the maximum allowed size for uploaded files](http://moodle.org/mod/forum/discuss.php?d=39625) forum discussion
- Using Moodle [Instructions to increase maximum allowed size on hosted servers](http://moodle.org/mod/forum/discuss.php?d=97907) forum discussion
- [File Upload Size](File_upload_size.md "File upload size") page
- Instructions below on [How to change the maximum execution time](Administration_FAQ.md#How_to_change_the_maximum_execution_time)

### How to change the maximum execution time for file uploads

A side-effect of increasing the file upload limit is that the php scripts may execute beyond the limit set by default (300 seconds/5 minutes). To change this, look for max\_execution\_time in php.ini and change to something like this:

```
max_execution_time = 600
```

If you are using Apache and have a .htaccess file to change php settings, add this line to your .htaccess file:

```
php_value max_execution_time 600
```

Restart your webserver for these changes to take effect, and check that the values have been changed by looking at your phpinfo output in the moodle admin -> environment page.

## Logging in and out

### My site is logging users out to quickly

User login sessions are checked to see if the user is still active, and will log them out after a specific period of idleness. This is set in *Site administration > Server > Session handling > Timeout*. The default is two hours. Increase it if you need to.

### Users can not login, they need cookies and debug mentions config.php

Your site's [config.php file](Configuration_file.md "Configuration file") probably has extra lines after **?>**. Solution is to delete the last **?>**.

### After using the 'Login as' function, why am I logged out of Moodle?

This is by design. After using the 'Login as' function, for security reasons you are automatically logged out of Moodle when you return to your normal role. If you login again you will be redirected to the page that you were on previously.

## Text and Appearance

### Why do I see [[missing strings]]?

Double square brackets around text indicate that language strings are missing for that function for that language. This is most common with third-party plugins or for languages that may not have all the strings translated for it yet.

First update your language packs to the latest versions in *Site administration > Language > [Language packs](Language_packs.md "Language packs") > Update all installed language packs*.

If the missing strings are for a non-standard plugin, try to update that plugin and / or check with that plugin maintainer to see if this is a reported issue. If you have access to the server code, you can check the code for this plugin; language strings are supposed to be contained in a *lang* folder within the module or plugin folder.

Note: after changing language strings you may see a lag in the cache for these to show up. You can force this in *Site administration > Development > Purge all caches*.

### Changing text in Moodle

The language editing interface in *Administration > Language > [Language customisation](Language_customisation.md "Language customisation")* enables you to easily change any string, any word or phrase, used on the site.

The strings are stored per language pack. So if you change them for 'en' (common English), that will not change them for 'en\_us' (US English) or any other language.

You may need to search through several files to find the word or phrase you are looking for. The file moodle.php contains all common site-wide phrases and the admin.php contains many admin phrases. Tip: if you don't know the file the string is in, select ALL the file options to search through.

Also, these customisations override but do not delete the default language strings but are stored separately in the language folders in your site's moodledata location.

### My style sheet or other theme changes aren't showing up

Browsers usually cache style sheets and so a forced refresh in your browser is required before any changes show up.

The Moodle server also caches all styles. You can force a refresh of the cache from disk in *Site Administration>Appearance>Themes>Theme selector*, click "Clear theme caches".

### How can I change center of the Front Page from course categories to something else?

Go to Front Page > Settings and change "Front page" to None all down. Change "Front page items when logged in" to None all down. Ensure that "Include a topic section" is checked. Save changes and return to the front page. Turn editing on, obviously, and you should now see the "Add a resource" and "Add an activity" drop down combo-boxes. Select "Add a resource" and select "Insert a label". You can then edit the label in any way you want to in the WYSYWYG editor.

### How can I change the initial login screen?

Edit one of the language files. *Site administration > Language> Language customisation*, look in the moodle.php file. Look for *loginusing* or *loginsteps* or *loginstepsnone* string variables.

### How can I change the initial login screen help?

To change or add a help message for the login go to *Site administration > Plugins > Authentication > Manage authentication.* Type your help message in there in the *Instructions* text box.

## Errors and Troubleshooting

### How do I enable/disable debugging?

If you are getting a blank or partially complete page, or receive a page that presents a short error message that is not informative enough, you can turn on debugging to learn more details.

Turning on debugging will let you see what the error message is, which may help you diagnose the problem. Set this in *Site administration > Development > Debugging* - see [Debugging](Debugging.md "Debugging") for more.

### Incomplete page displayed when I click "Turn Editing On"

When you see an incomplete page, it is normally a sign that an error occurred. To find out more, turn on [Debugging](Debugging.md "Debugging"), and you should see an error message which may help you to diagnose the problem.

This is usually as a result of an incompatible contributed module or block that you have installed. Follow these steps:

1. Follow the module removal instructions in [Installing contributed modules or plugins](Installing_contributed_modules_or_plugins.md "Installing contributed modules or plugins").
2. Re-visit your course page and try clicking on the "Turn Editing On" button again.

If you find an incompatible module or block, please report the problem to the person named as the maintainer in the [Modules and Plugins database](https://moodle.org/plugins/).

### Receive error message "a required parameter (id) was missing" when uploading a file or

This message sometimes is generated when attempting to upload a file larger than the upload limit. This can also be caused by user's having more than one login to the same site open in the same browser in different windows or tabs.

### User gets 'an invalid session key' error

A number of things may caused the invalid session key error. The most common is if the person tries to login into the same Moodle site in more than one tab or window in the same browser. That will not work. The fix is to close all those tabs and windows and close and restart the browser. This is almost always a transient issue. The fix is to close and restart the browser, and log back into Moodle.

If you send someone a URL to something in Moodle, like a course activity or particular page, is may be that the session id key is tacked onto the end of the URL. Simply delete that parameter from the URL.

### Why is a page blank, or half missing?

A blank page, or a page that seems to have half missing, is normally a sign that an error occurred. If (as is recommended on production systems) you have display of error messages turned off, it can be very hard to understand what is going on.

The solution is to [turn on the debugging options](Debugging.md "Debugging") temporarily. Then, when you go back to the problem page, you should see the error message. Once you had finished solving the problem, remember to turn debugging off again.

### How can I fix just one bug, without upgrading my whole site?

Suppose:

- You are experiencing a particular bug.
- You have searched in the [tracker](http://tracker.moodle.org/), and found that your problem is MDL-abc, and that it has been fixed in the latest version.
- For some reason, you cannot upgrade your whole site, even though the latest version probably has security fixes.

Then, how can you get the fix for just this one bug, without upgrading your whole site? Well, if you are prepared to manually patch the code, you can probably get this information from the tracker. Please see [How to fix just one bug without upgrading](How_to_fix_just_one_bug_without_upgrading.md "How to fix just one bug without upgrading") guide.

## See also

- [Errors FAQ](Errors_FAQ.md "Errors FAQ")
- [Installation FAQ](Installation_FAQ.md "Installation FAQ")
- [Moodle Administration Settings](https://moodle.academy/enrol/index.php?id=41) - A beginner-level Moodle Academy course exploring key administration settings, site admin presets, reports, and basic file management.

## Any further questions?

Please post in the [General help forum](https://moodle.org/mod/forum/view.php?id=50) on moodle.org.

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Administration_FAQ&oldid=154569>"

[Categories](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Site administration](Category_Site_administration.md "Category:Site administration")
- [FAQ](Category_FAQ.md "Category:FAQ")
