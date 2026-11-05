# Installing plugins - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Installing_plugins

---

# Installing plugins

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Installing plugins

[Installation](Installation.md "Installation")

- [Installing Moodle](Installing_Moodle.md "Installing Moodle")
- [Installation quick guide](Installation_quick_guide.md "Installation quick guide")
- [Cron](Cron.md "Cron")
- [Nginx](Nginx.md "Nginx")
- [Apache](Apache.md "Apache")
- [IIS](Internet_Information_Services.md "Internet Information Services")
- [Routing](Configuring_the_Router.md "Configuring the Router")
- Installing plugins
- [Installation FAQ](Installation_FAQ.md "Installation FAQ")
- [Upgrading](Upgrading.md "Upgrading")
- [Upgrade overview](Upgrade_overview.md "Upgrade overview")
- [Automatic updates deployment](Automatic_updates_deployment.md "Automatic updates deployment")
- [Git guide](Git_for_Administrators.md "Git for Administrators")
- [Administration via command line](Administration_via_command_line.md "Administration via command line")
- [Upgrading FAQ](Upgrading_FAQ.md "Upgrading FAQ")
- [Moodle migration](Moodle_migration.md "Moodle migration")

## Why install additional plugins?

Plugins enable you to add additional features and functionality to Moodle, such as new activities, new quiz question types, new reports, integrations with other systems and many more.

Note: Certain hosting solutions, such as [MoodleCloud](https://moodle.com/cloud/), prevent plugins being installed from within Moodle.

## Choosing the best plugins for your site

Install and test plugins in a non-production environment before using them on a production site.

When choosing a plugin in [Moodle Marketplace](https://marketplace.moodle.com):

- check that it supports your Moodle version
- review its description, documentation and installation requirements
- check when it was last updated and whether it appears to be actively maintained
- review its support information
- check whether it requires an external service, license or additional payment
- review any awards shown on the plugin page, such as the Privacy friendly or Mobile app award

### Plugins for school teaching

For the various school environments (ages 4 - 18 ) consider the following:

- [Attendance](https://marketplace.moodle.com/plugins/mod_attendance)
- [Checklist](https://marketplace.moodle.com/plugins/mod_checklist)
- [Chemistry editor](https://marketplace.moodle.com/plugins/atto_chemistry)
- [Group choice](https://marketplace.moodle.com/plugins/mod_choicegroup)
- [Level up!](https://marketplace.moodle.com/plugins/block_xp)
- [Quizventure](https://marketplace.moodle.com/plugins/mod_quizgame)
- [Word count](https://marketplace.moodle.com/plugins/tinymce_wordcount)

### Plugins for university teaching

For universities, there is a [list of plugins by/for Universities](https://docs.moodle.org/en/Tertiary_education#Moodle_plugins_by.2Ffor_Universities), and a [link to discipline-specific plugins](https://docs.moodle.org/en/Tertiary_education#Discipline-specific_plugins), which might be worth considering.

## Considerations for production sites (skip if you're just moodling)

**VERY IMPORTANT!**

**Some plugins in the directory have not been reviewed for quality or suitability for your Moodle site, so please use discretion when installing them because a plugin may not behave as expected, and in rare cases could introduce security issues. This is improving as the Moodle Marketplace evolves.**

- If you have a large site for production purposes consider if you **really** need the plugin? More functionality means more things to support, more things to (potentially) go wrong and more things to worry about at upgrade time.
- Is the plugin supported and maintained? If something goes wrong can you get support? Will bugs be fixed?
- If the plugin does not work in a future version of Moodle, what will you do about it?
- Be cautious of any plugin whose installation instructions ask you to manually modify or replace core Moodle files. This isn't standard practice, and isn't guaranteed to survive a future Moodle upgrade, since it bypasses Moodle's normal plugin structure.
- Look at [this](https://moodle.org/mod/forum/discuss.php?d=340821#p1373707) forum thread and [also this](https://moodle.org/mod/forum/discuss.php?d=346296) forum thread since both discuss examples of users worried about installing a plugin.

## Installing a plugin

![](https://i.ytimg.com/vi/p2FDsAiwGpA/hqdefault.jpg)

[How can I install plugins on my Moodle site?](https://www.youtube-nocookie.com/embed/p2FDsAiwGpA?autoplay=1)

Load video

YouTube

YouTube might collect personal data. [Privacy Policy](https://www.youtube.com/howyoutubeworks/user-settings/privacy/)

Continue
Dismiss

Installing plugins from admin interface

To install a plugin, its source code must be put (deployed) into the appropriate location inside the Moodle installation directory and the main administration page *Site administration > Notifications* must be visited. You can deploy a plugin by:

- uploading a plugin ZIP file through the Moodle administration interface
- installing a compatible plugin with Composer, if your Moodle site is Composer-managed
- copying the plugin files to the server manually

To upload a ZIP file through the administration interface, the web server process must have write access to the relevant plugin-type directory.

**Note:** Whenever you install or download a plugin from the Moodle plugins directory, it is extremely important that you have correctly chosen your [Moodle version](Moodle_version.md "Moodle version"). If you mistakenly download and install the wrong version of a plugin for your Moodle server, this may lead to some serious problems, even freezing of the Moodle site.

### Installing plugins with Composer (Packagist)

If your Moodle site is Composer-managed, you can install compatible plugins directly from Packagist.

#### Before you start

- Confirm your site is Composer-managed.
- Confirm your project requires `moodle/composer-installer` in production dependencies.
- Confirm the target plugin is available on Packagist and declares correct Moodle Composer metadata.

#### Install a plugin

From your project root:

```
composer require abgreeve/moodle-block_stash
```

Then complete the Moodle upgrade process if prompted.

#### Update a plugin

```
composer update abgreeve/moodle-block_stash
```

#### Remove a plugin

```
composer remove abgreeve/moodle-block_stash
```

After removal, complete the Moodle uninstall or upgrade flow as needed.

#### Good practice for Composer-managed sites

- Commit changes to `composer.json` and `composer.lock` together.
- Test plugin changes in a non-production environment first.
- Use one installation method per plugin to avoid drift.

#### Notes

- This method does not apply to non-Composer Moodle sites.
- If a plugin is not in Packagist or is not Composer-compatible, use the standard installation methods described elsewhere on this page.

### Installing via uploaded ZIP file

1. Go to the Moodle Marketplace, Sign in, select your current [Moodle version](Moodle_version.md "Moodle version") and download the appropriate plugin version as a ZIP file.
2. Login to your Moodle site as an admin and go to *Site administration > Plugins > Install plugins*. (a) There are two options you can choose when you get to this page. One of them is the **"Install plugins from the Moodle plugins directory"** button. This used to install a plugin directly; that direct-install flow ended with the launch of Moodle Marketplace, so the button now takes you to a temporary page with a link through to Moodle Marketplace instead. Click through, log in to Marketplace, find the plugin you want, and download the ZIP file. (b) The second option on this page (if you haven't clicked the above mentioned button) allows you to upload a previously downloaded zip file.

1. Upload the ZIP file. You should only be prompted to add extra details (in the Show more section) if the location where your plugin will install is not automatically detected.
2. If your target directory is not writeable, you will see a warning message.
3. Check the plugin validation report.

|  |  |
| --- | --- |
| Install plugins | Plugin package validation |

### Installing manually at the server

If you can't deploy the plugin code via the administration web interface, you have to copy it to the server file system manually (e.g. if the web server process does not have write access to the Moodle installation tree to do this for you).

First, establish the correct place in the Moodle code tree for the plugin type. Common locations are:

- /path/to/moodle/theme/ - themes
- /path/to/moodle/mod/ - activity modules and resources
- /path/to/moodle/blocks/ - sidebar blocks
- /path/to/moodle/question/type/ - question types
- /path/to/moodle/question/behaviour/ - question behaviours
- /path/to/moodle/course/format/ - course formats
- /path/to/moodle/admin/report/ - admin reports

See [dev:Plugin types](https://docs.moodle.org/dev/Plugin_types "dev:Plugin types") for the full list of all plugin types and their locations within the Moodle tree.

1. Go to the [Moodle plugins directory](https://moodle.org/plugins); select your current [Moodle version](Moodle_version.md "Moodle version"), then choose a plugin with a Download button and download the ZIP file.
2. Upload or copy it to your Moodle server.
3. Unzip it in the right place for the plugin type (or follow the plugin instructions).
4. In your Moodle site (as admin) go to *Site administration > Notifications* (you should, for most plugin types, get a message saying the plugin is installed).

Note: The plugin may contain language files. They'll be found by your Moodle automatically. These language strings can be customized using the standard *Site administration > Language* editing interface. If you get a "Database error" when you try to edit your language files, there is a strong chance that the language files included within the downloaded ZIP file of this plugin have a coding problem. If you delete the *plugin\_name/lang/other\_language\_different\_to\_English/* folder with the new language strings and the database error disappears, this is indeed the case. Please notify the plugin maintainer, so that it can be fixed in future releases.

## Troubleshooting

### Errors

If you obtain an error, please [turn debugging on](Debugging.md "Debugging") to obtain additional information about the cause of the error.

Database error while doing a language customization
:   May not be related to the [Language customization](Language_customisation.md#Database_error "Language customisation"), but rather a problem with a recently installed plugin.

tool\_installaddon/err\_curl\_exec - cURL error 60
:   This suggests problems with the validation of the SSL certificate of the remote (moodle.org) site. This is also a known problem in Moodle Windows 7 servers running the Moodle package for Windows. See [SSL certificate for moodle.org](SSL_certificate_for_moodle.org.md "SSL certificate for moodle.org") for more info and possible solutions.

### A file permissions error has occurred

On certain 3.0.x versions, when installing plugins via the administration interface, Moodle uses the configuration settings $CFG->directorypermissions and $CFG->filepermissions. If these are not defined explicitly in your config.php, the default value is set automatically to 777 (rwxrwxrwx) for directories and 666 (rw-rw-rw-) for files (see lib/setup.php).

If this default behaviour does not fit your needs and hosting environment, you may wish to specify more strict setting such as

```
$CFG->directorypermissions = 02750;
```

A common error after installing plugins is that when you create an instance of the module and then save and display it, it reports the error, "A file permissions error has occurred. Please check the permissions on the script and the directory it is in and try again." If you get this, the file permissions of the package are most likely set to 711 preventing them from running correctly. With your preferred FTP client or via your web hosts control panel, set the file permissions of all the files and directories in the installed module, e.g. /moodle/mod/[myplugin]/ to 755 and then see if you can successfully view the module instance.

### Default exception handler: Error writing to database Debug: Duplicate entry 'en\_us-...

- These errors are usually caused by a third party plugin.
- To find the involved plugin, go to <http://lang.moodle.org> and use the AMOS tool to find all the strings with the given string identifier.
- Remove the suspected plugin and check if the error has disappeared. If so, please contact the plugin maintainer and report this issue.
- Please see [this forum thread](https://moodle.org/mod/forum/discuss.php?d=219504) for known causes and fixes.

### When installing manually

- Check the file permissions. The web server needs to be able to read the plugin files. If the rest of Moodle works then try to make the plugin permissions and ownership match.
- Did you **definitely** unzip or install the plugin in the correct place?
- Because Moodle scans plugin folders for new plugins you cannot have any other files or folders there. Make sure you delete the zip file and don't try to rename (for example) an old version of the plugin to some other name - it will break.
- Make sure the directory name for the plugin is correct. All the names **have** to match. If you change the name, then it won't work.

### Obtaining help

Ask in a forum in [Moodle in English](http://moodle.org/course/view.php?id=5). Make sure you describe your system (including versions of MySQL, PHP etc.), what you tried and what happened. Copy and paste error messages exactly. Provide the link to the version of the plugin you downloaded (some have very similar names).

## Uninstalling a plugin

To uninstall a plugin

1. Go to *Site Administration > Plugins > Plugins overview* and click the Uninstall link opposite the plugin you wish to remove
2. Use a file manager to remove/delete the actual plugin directory as instructed, otherwise Moodle will reinstall it next time you access the site administration

## Plugins overview

[![](/503/en/images_en/thumb/1/10/plugins_overview.png/400px-plugins_overview.png)](https://docs.moodle.org/503/en/File:plugins_overview.png)

Plugins overview highlighting available check button

The Plugins overview page in *Site Administration > Plugins > Plugins overview* lists all installed plugins, together with the version number,release, availability (enabled or disabled) and settings link (if applicable).

A 'Check for available updates' button enables admins to quickly check for any updates available for plugins installed on the site (from [Moodle Marketplace](https://marketplace.moodle.com/)). Any updates available are highlighted, with further information and a download link in the notes column opposite the plugin.

### Plugin updating from within Moodle

An administrator can enable updates deployment in *Site Administration > Server > Update notifications*. Then when updates are available, 'Install this update' buttons are shown on the Plugins overview page. See [Automatic updates deployment](Automatic_updates_deployment.md "Automatic updates deployment") for more details.

## Preventing installing plugins from within Moodle

If required, installing and updating from within Moodle can be prevented by copying the following lines of code from config-dist.php and pasting them in config.php.

```
// Use the following flag to completely disable the installation of plugins
// (new plugins, available updates and missing dependencies) and related
// features (such as cancelling the plugin installation or upgrade) via the
// server administration web interface.
$CFG->disableupdateautodeploy = true;
```

## See also

- [Notifications](Notifications.md "Notifications") for further details of update notifications
- [Plugin Review Criteria](Plugin_Review_Criteria.md "Plugin Review Criteria")
- [Plugins FAQ](Plugins_FAQ.md "Plugins FAQ")
- Moodle in English [General plugins forum](http://moodle.org/mod/forum/view.php?id=44)
- [Installing a contributed extension from its Git repository](Installing_Moodle_from_Git_repository.md#Installing_a_contributed_extension_from_its_Git_repository "Installing Moodle from Git repository")

For developers:

- [Plugins developer documentation](https://docs.moodle.org/dev/Category:Plugins "dev:Category:Plugins")
- [dev:Plugin validation](https://docs.moodle.org/dev/Plugin_validation "dev:Plugin validation")
- [dev:On-click add-on installation](https://docs.moodle.org/dev/On-click_add-on_installation "dev:On-click add-on installation")

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Installing_plugins&oldid=156177>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Installation](Category_Installation.md "Category:Installation")
