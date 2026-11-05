# Upgrading - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Upgrading

---

# Upgrading

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Upgrading

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
- Upgrading
- [Upgrade overview](Upgrade_overview.md "Upgrade overview")
- [Automatic updates deployment](Automatic_updates_deployment.md "Automatic updates deployment")
- [Git guide](Git_for_Administrators.md "Git for Administrators")
- [Administration via command line](Administration_via_command_line.md "Administration via command line")
- [Upgrading FAQ](Upgrading_FAQ.md "Upgrading FAQ")
- [Moodle migration](Moodle_migration.md "Moodle migration")

*This page explains in detail how to upgrade Moodle. For a summary of the process, see [Upgrade overview](Upgrade_overview.md "Upgrade overview").*

**Note:** Upgrading to Moodle 5.3 needs access to your server. Depending on the version you are upgrading from, you may need to change your web server's document root to the [public folder](#Code_directories_restructure), set up [routing](#Routing) in your web server configuration, and [run Composer](#Update_Composer_dependencies).

|  |
| --- |
| **Warning:** **Code directories:** The directory structure of Moodle files and the security model have changed in 5.1.  1. A new "public" folder has been introduced to contain all web accessible files. Configuration and other sensitive files are now stored outside this folder for better security.  2. You will need to reconfigure your web server to accommodate the security change as part of the upgrade process. See the section below [Code directories restructure](#Code_directories_restructure).  **Composer:** If your Moodle root directory has a `vendor/` directory, update the Composer dependencies every time you upgrade. After you update the Moodle code, and before you run the upgrade, run `composer install --no-dev --classmap-authoritative` from the Moodle root directory. An out-of-date `vendor/` directory can break parts of your site after the upgrade. Composer is optional in Moodle 5.3, except for new features such as OAuth 2 Server. It will be required from Moodle 6.0. See [Update Composer dependencies](#Update_Composer_dependencies) below. |

## Check the requirements

Before upgrading, check that your server meets all requirements for 5.3 in *Site administration > Server > [Environment](Environment.md "Environment")*.

See the [Moodle 5.3 release notes](https://moodledev.io/general/releases/5.3) for server and client software requirements.

Note: You can only upgrade to Moodle 5.3 from Moodle 4.4 or later. If upgrading from earlier versions, you must [upgrade to 4.4](https://docs.moodle.org/404/en/Upgrading) or later as an intermediate step.

## Before upgrading

**We advise that you test the upgrade first on a COPY of your production site, to make sure it works as you expect. See [Moodle\_migration.](Moodle_migration.md "Moodle migration")**

Consider setting the [upgrade key](upgrade_key.md "upgrade key") for your site. The feature has been available for a while. It is now encouraged for better security.

## Backup important data

There are three areas that should be backed up before any upgrade:

1. Moodle software (For example, everything in server/www/moodle)
2. Moodle uploaded files (For example, server/moodledata)
3. Moodle database (For example, your Postgres or MySQL database dump)

See [Site backup](Site_backup.md "Site backup") for more specific information.

## Check for plugin updates

If you have [Automatic updates deployment](Automatic_updates_deployment.md "Automatic updates deployment") enabled, you can update installed plugins automatically during the upgrade. Just make sure you check for available updates (via the button for it) at the *Site Administration > Plugins overview* tool.

If you are updating plugins manually, now is a good time to check the [Moodle Plugins directory](http://moodle.org/plugins) to see if a 5.3 version is available for any [plugins (including themes) installed on your site](Installing_plugins.md#Plugins_overview "Installing plugins"). If so, download the plugin package to prepare to copy it to the appropriate location in your Moodle code (see [Installing plugins](Installing_plugins.md "Installing plugins")).

The plugin upgrade will then be part of the Moodle upgrade process.

If an outdated plugin causes your upgrade to fail, you can usually delete the plugin code instead of uninstalling it from within Moodle so that the data associated with it remains intact.

## Put your site into maintenance mode

Before you begin upgrading your site, you should put it into [maintenance mode](maintenance_mode.md "maintenance mode") to stop any non-admin users from logging in. Then you should wait for any currently running cron processes to complete before proceeding.

## Code directories restructure

The directory structure of Moodle files and the security model changed from 5.1.

If you are upgrading to 5.2 from version 5.0 or older, **you will need to update your web server configuration**. Please check the [./<https://docs.moodle.org/501/en/Upgrading#Code_directories_restructure> 5.1 code directories restructure documentation] for full details.

If you are upgrading from 5.1 to 5.2, you have already completed the above-mentioned web server configuration updates, so no further directory restructure actions are required to upgrade to 5.2.

## Routing

A *Router* has been included with Moodle since Moodle 4.5 and its use has increased in this release.

### Apache

If you have access to the Apache configuration you can use the `FallbackResource` directive as follows:

```
<Directory "/path/to/your/site">
    FallbackResource /r.php
</Directory>
```

If you do not have access to the Apache configuration, but your configuration allows setting the `FallbackResource` in an Override file, then you can create a `.htaccess` file in your Moodle `public` folder with the following content:

```
FallbackResource /r.php
```

If your host prevents the use of the `FallbackResource` directive, you may still be able to use `mod_rewrite`. See the documentation below for OpenLiteSpeed.

For more information on the `FallbackResource` directive see the [Apache Documentation](https://httpd.apache.org/docs/2.4/mod/mod_dir.html#fallbackresource).

### nginx

The nginx server does not support per-directory configuration. All configuration must be specified in the central configuration.

The configuration you require will depend on your overall nginx configuration and how php-fpm is integrated.

```
try_files $uri $uri/ /r.php$is_args$args;
```

### OpenLiteSpeed (cPanel)

This configuration is also compatible with Apache.

The following should be placed into the `.htaccess` file of your Moodle `/public` directory.

```
RewriteEngine On

# If we have a request which:
# - is not a file;
# - but is a directory;
# - and the directory contains an index.php;
# then redirect to the index.php in that directory.
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} -d
RewriteCond %{REQUEST_FILENAME}/index.php -f
RewriteRule ^(.*)$ $1/index.php [L]

# Rewrite / to /index.php
RewriteRule ^$ ./index.php [L]

# Anything else should be redirected to the Moodle Router.
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ r.php [L,QSA]
```

## Install the new Moodle software

You can download the latest release from [Moodle downloads](https://download.moodle.org/).

### Standard install package

1. Move your old Moodle software program files to another location. *Do NOT copy new files over the old files.*
2. Unzip or unpack the upgrade file so that all the new Moodle software program files are in the location the old files used to be in on the server. Moodle will adjust SQL and moodledata if it needs to in the upgrade.
3. Copy your old [config.php file](Configuration_file.md "Configuration file") back to the new Moodle directory (not the public subdirectory).

As mentioned above, if you had installed any plugins on your site you should add them to the new code tree (Moodle directory structure) now. It is important to check that you get the correct version for your new version of Moodle. Be particularly careful that you do not overwrite any code in the new version of Moodle and that you place the plugin folders in the correct directory (the same directory that they are in in the current installation.)

Your moodledata folder should be located separately to your Moodle code folder and, as such, should not need anything done to it. Moodle 3.0 will throw a warning if it is located in a web accessible folder and the moodledata should never be located in the Moodle code folder. If you are moving your installation to a new server or new location on your server, then you will need to follow the [Migration](Migration.md "Migration") documents.

#### Linux

```
mv moodle moodle.backup
tar xvzf moodle-latest-5.3.tgz
```

Next, copy across your config.php, any custom plugins, and your .htaccess file if you created one (**check that custom plugins are the correct version for your new Moodle first**):

```
cp moodle.backup/config.php moodle
cp -pr moodle.backup/theme/mytheme moodle/public/theme/mytheme
cp -pr moodle.backup/mod/mymod moodle/public/mod/mymod
```

Don't forget to make moodle/config.php (and the rest of the source code) readable by your www server. For maximum security the files should not be writeable by your server. This is especially important on a 'production' server open to the public internet.
One way of doing this is to change the ownership to the root user whilst allowing the web user to continue accessing, for example:

```
chown -R root:root moodle (Linux debian - or even create a user especially for moodle. Don't use the web server user, e.g. www-data)
chmod -R 755 moodle
```

If you use cron, take care that cron.php is executeable and uses the correct php command:

```
chmod 740 admin/cli/cron.php (some configurations need chmod 750 or chmod 755)
copy the first line from cron.php (if it looks like '#!/usr/local/bin/php' or '#!/usr/local/bin/php5.3', no need to copy '<?php')
```

if necessary. However, for a simple upgrade, there should be no need to change anything with cron.

### Using Git

You can use Git for updating or upgrading your Moodle. See [Git for Administrators](Git_for_Administrators.md "Git for Administrators") for details.

**Important**

Any third party plugins that you have installed will still be located in their original locations above the new /public folder. These will need to be relocated into their relative path within the new /public folder structure to have them continue to work.

### Command line upgrade

On Linux servers, you can run the [upgrade from the command line](CLI.md "CLI"), rather than through a web browser. This is the preferred method and is likely to be more reliable, particularly for large sites.

## Update Composer dependencies

Since Moodle 5.2, Moodle can use Composer to install some third-party libraries. Composer is optional in Moodle 5.3, because Moodle still includes its own copies of most of these libraries. New features in Moodle 5.3, such as OAuth 2 Server, are the exception. To use these features you will need to run a composer install command and purge caches. Composer will be required from Moodle 6.0.

If you use Composer, or your Moodle root directory already has a `vendor/` directory, update the Composer dependencies every time you update the Moodle source code.

From the Moodle root directory, run:

```
composer install --no-dev --classmap-authoritative
```

This ensures that:

- Composer-managed dependencies are updated to the versions required by the new Moodle release.
- Third-party library versions under `vendor/` and `lib/` remain in sync.
- The Composer autoloader is regenerated and optimised.
- Stale dependency information from the previous Moodle version does not cause unexpected behaviour.

Run this command every time you upgrade, after pulling the latest changes from Git or installing the new Moodle release package, and before running the Moodle upgrade.

If you do not use Composer and your Moodle root directory has no `vendor/` directory, you can skip this step, unless you wish to use the OAuth 2 Server functionality introduced in Moodle 5.3. The environment check "Composer installed data not found" is a warning, and the upgrade can continue. See [Composer vendor directory not found](Composer_vendor_directory_not_found.md "Composer vendor directory not found") for more help.

If you see the error `Entry "core\composer" cannot be resolved: Parameter $vendordir of __construct() has no value defined or guessable`, purge all caches (`php admin/cli/purge_caches.php`) and then run the upgrade. This error can appear if you open your site after replacing the code but before running the upgrade.

## Finishing the upgrade

The last step is to trigger the upgrade processes within Moodle.

If you put your site into Maintenance mode earlier; take it out now!

To do this just go to *Site administration > Notifications*.

Moodle will automatically detect the new version and perform all the SQL database or file system upgrades that are necessary. If there is anything it can't do itself (very rare) then you will see messages telling you what you need to do.

Assuming all goes well (no error messages) then you can start using your new version of Moodle and enjoy the new features!

Note: If you are running multiple servers or find some functionality missing (such as the *filepicker* not loading) then you should purge all caches manually (via *Site administration > Development > Purge all caches*) after completing the upgrade.

### Fatal error: Maximum execution time of 30 seconds exceeded...

If your server uses a main language other than English, you may encounter a 'Fatal error: Maximum execution time of 30 seconds exceeded' when you try to upgrade it. You can increase max\_execution\_time = 160 on php.ini to allow the scripts enough time to process the language update. Otherwise, you can switch to English as the default language before doing the upgrade and back to your original language after a successful upgrade. See the forum discussion at <https://moodle.org/mod/forum/discuss.php?d=119598>.

## Possible issues that may affect you in Moodle 5.3

See also the list of [upgrade\_notes-labelled issues](https://tracker.moodle.org/issues/?jql=project%20%3D%20MDL%20AND%20resolution%20%3D%20Fixed%20AND%20fixVersion%20%3D%205.2%20AND%20labels%20%3D%20upgrade_notes) and [ui\_change-labelled issues](https://tracker.moodle.org/issues/?jql=project%20%3D%20MDL%20AND%20resolution%20%3D%20Fixed%20AND%20fixVersion%20%3D%205.2%20AND%20labels%20%3D%20ui_change).

### Upgrade Debugging Messages

You may encounter "Deleting question which is no longer linked to a context..." debugging messages during upgrade. This requires no action. We are addressing this known debugging issue under [MDL-88393](https://tracker.moodle.org/browse/MDL-88393).

### Activities block removal

The Activities block has been removed. Any course or dashboard page using it will lose the block after upgrade. Check for usage before upgrading and communicate to affected sites in advance.

### Subsections removals

[![](/503/en/images_en/thumb/9/93/SubsectionMigrationSettings503v2.png/300px-SubsectionMigrationSettings503v2.png)](https://docs.moodle.org/503/en/File:SubsectionMigrationSettings503v2.png)

The Subsection plugin settings page, showing the manual "Migrate descriptions" and "Delete descriptions" options.

The description field on subsections is removed. Existing subsection descriptions are not automatically migrated during upgrade. They stay hidden from courses until an administrator runs the migration task manually.

To migrate descriptions to Text and media activities, or to remove them instead, go to Site administration > Plugins > Activity modules > Subsection. Run the relevant task from that page.

Only the Name and Restrict access settings remain in the subsection edit form.

### MoodleNet deprecation

MoodleNet integration is deprecated in 5.2 and will be removed in a future release. If a client actively uses MoodleNet sharing or profile links, begin planning for transition.

### MimeTex removal

The MimeTeX library has been removed. If a client site uses the TeX filter with MimeTeX for mathematical formula rendering, switch to MathJax - the recommended replacement, already supported in Moodle.

### Marketplace integration

Moodle 5.2 introduces the initial groundwork for a Marketplace integration. No action required - signals upcoming changes to how plugins and integrations are discovered in future releases.

### New capabilities in Moodle 5.3

- mod/quiz:customisequestionnumbers

## Moodle 4.3, 4.4, 4.5, 5.0 and 5.1 upgrading notes

Depending on which version you are upgrading from, please see the section 'Possible issues that may affect you' in the documentation:

- [Upgrading to Moodle 4.3](https://docs.moodle.org/403/en/Upgrading)
- [Upgrading to Moodle 4.4](https://docs.moodle.org/404/en/Upgrading)
- [Upgrading to Moodle 4.5](https://docs.moodle.org/405/en/Upgrading)
- [Upgrading to Moodle 5.0](https://docs.moodle.org/500/en/Upgrading)
- [Upgrading to Moodle 5.1](https://docs.moodle.org/500/en/Upgrading)

## Any questions about the process?

Please post in the [Installing and upgrading help forum](https://moodle.org/mod/forum/view.php?id=28) on moodle.org.

- Here's a video from Rick, a Moodle.org "Helpful Moodler," demonstrating how he upgraded Moodle 5.0 to Moodle 5.1 on his VPS. It's captioned in several languages.  
   [Upgrading Moodle 5.0 to Moodle 5.1 on a VPS](https://www.edu-gen.com/profession/presentations/Moodle_51/Moodle51.html)
- Rick demonstrates upgrading three of his Moodle sites in under 10 minutes using the method described in the above video, "Upgrading from Moodle 5.0 to Moodle 5.1 on my VPS video.   
  [Update 3 Moodle Sites in Under 10 Minutes](https://vimeo.com/1142103782/82b30de5b1)

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Upgrading&oldid=156781>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Installation](Category_Installation.md "Category:Installation")
