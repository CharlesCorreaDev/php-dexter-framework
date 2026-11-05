# Upgrade overview - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Upgrade_overview

---

# Upgrade overview

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Upgrade overview

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
- Upgrade overview
- [Automatic updates deployment](Automatic_updates_deployment.md "Automatic updates deployment")
- [Git guide](Git_for_Administrators.md "Git for Administrators")
- [Administration via command line](Administration_via_command_line.md "Administration via command line")
- [Upgrading FAQ](Upgrading_FAQ.md "Upgrading FAQ")
- [Moodle migration](Moodle_migration.md "Moodle migration")

*Moodle 5.3 available now!*
Start enjoying the cool features of the latest and greatest version of Moodle in five steps...

## Step 1: Make sure that your server can run Moodle 5.3

|  |
| --- |
| **Warning:** The directory structure of Moodle files has changed in 5.1. A new "public" folder has been introduced to contain all web accessible files. Configuration and other sensitive files are now stored outside this folder for better security. If you are upgrading from Moodle 5.0 or earlier, you will need to reconfigure your web server to accommodate this change as part of the upgrade process. See [Upgrading - Code directories restructure](Upgrading.md#Code_directories_restructure "Upgrading"). |

Go to *Site administration > Server > Environment*.

Status OK for everything? Great! Go to step 2...

Any problems? You probably need to upgrade your server software (such as PHP) to a more recent version.

## Step 2: Be prepared!

As usual with any large upgrade, you should always be prepared to "roll back" if there's an issue with your data or some custom code you've added.

A test install
:   We highly advise you make a copy of your production site to practice the upgrade on first. That way, if you run into any problems that need fixing you won't affect your main site.

Always make backups
:   When upgrading your production instance, make sure you have copies of everything, just in case. Full instructions are here: [Site backup](Site_backup.md "Site backup").

## Step 3: Replace your Moodle code

At this point you can replace the Moodle code on your server with the version you downloaded.

Check plugins
:   Any plugins you have installed will also need to be replaced with a version for your new Moodle version. If there is not yet an updated version of the plugin available, it will need to be uninstalled before upgrading your site.

Check your web server configuration
:   A new `public` directory has been introduced to separate web accessible files from configuration and other sensitive files. Your web server must be configured to serve content only from this folder. The upgrade cannot proceed until this configuration is in place. For more information, see [Upgrading - Code directories restructure](Upgrading.md#Code_directories_restructure "Upgrading"). Your web server may also need to be configured for the router. See [Upgrading - Routing](Upgrading.md#Routing "Upgrading").

Update Composer dependencies
:   If your Moodle root directory has a `vendor/` directory, run `composer install --no-dev --classmap-authoritative` from the Moodle root directory every time you replace the code, before you run the upgrade. Composer is optional in Moodle 5.3, except for new features such as OAuth 2 Server. See [Upgrading - Update Composer dependencies](Upgrading.md#Update_Composer_dependencies "Upgrading").

## Step 4: Perform the upgrade!

Trigger the upgrade by [visiting the admin page](Upgrading.md#Finishing_the_upgrade "Upgrading").

If you have a large site this may take hours, so we recommend [upgrading via command line](Administration_via_command_line.md#Upgrading "Administration via command line").

## Step 5: Check where your third party plugins are located

If you upgraded through git, then existing third party plugins are still located in their original locations, and will need to be shifted over to their respective areas in the /public directory structure.

## How did you go?

Yes - it worked!
:   Great! Now repeat the process on your production site, and please post in the [Installation help forum](http://moodle.org/mod/forum/view.php?id=28) and share your success with the Moodle community!

No - I had an error
:   Don't worry, help is at hand. Post in the [Installation help forum](http://moodle.org/mod/forum/view.php?id=28) where our experts are waiting to explain any errors you obtain.

## See also

- [Upgrading](Upgrading.md "Upgrading") for full details of the process
- [Upgrading FAQ](Upgrading_FAQ.md "Upgrading FAQ")

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Upgrade_overview&oldid=156784>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Installation](Category_Installation.md "Category:Installation")
