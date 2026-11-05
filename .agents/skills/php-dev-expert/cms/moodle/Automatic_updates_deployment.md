# Automatic updates deployment - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Automatic_updates_deployment

---

# Automatic updates deployment

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Automatic updates deployment

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
- Automatic updates deployment
- [Git guide](Git_for_Administrators.md "Git for Administrators")
- [Administration via command line](Administration_via_command_line.md "Administration via command line")
- [Upgrading FAQ](Upgrading_FAQ.md "Upgrading FAQ")
- [Moodle migration](Moodle_migration.md "Moodle migration")

## Enabling updates deployment

This functionality requires [Available update notifications](Available_update_notifications.md "Available update notifications") to be enabled. The feature is enabled by default as long as the web server has write access to the folders with plugins being updated.

## Disabling updates deployment

In a few circumstances (such as completely managed servers, which may have a lot of local modifications, or sites that have their own solution for updates deployment - for example via [Git checkouts](Git_for_Administrators.md "Git for Administrators")) it is desirable to not to allow automatic updates deployment. The feature may be disabled completely by adding the following code to the [config.php file](Configuration_file.md "Configuration file"):

```
// Use the following flag to completely disable the installation of plugins
// (new plugins, available updates and missing dependencies) and related
// features (such as cancelling the plugin installation or upgrade) via the
// server administration web interface.
$CFG->disableupdateautodeploy = true;
```

## Possible problems

### Missing install button

If the updates deployment feature is not enabled (or if it is disabled in the config.php file), no button to install the update is displayed. When the feature is enabled, the page displaying the list of available updates performs some pre-checks to make sure the deployment will work. If a pre-check fails, information with a help pop-up is displayed.

### Plugin files not writable

During the deployment, Moodle will replace the whole folder with the plugin code with a new version of the code. The web server process has to have write access to the folder and all its contents. There are several ways how to achieve this, depending on your web server setup and personal preferences. The exact location of the plugin folder depends on the type of the plugin. For a full list of locations see the Moodle path in the [Plugins developer docs](https://docs.moodle.org/dev/Plugins "dev:Plugins").

Example: Let us assume your web server is an Apache running at a Linux server as the user *www-data*. Your Moodle is installed at */var/www/vhosts/moodle/htdocs*. You want to give it write access to the folder with your activity modules to update them:

```
   # cd /var/www/vhosts/moodle/htdocs
   # chown -R www-data mod
   # chmod -R u+w mod
```

See also more about [Installing plugins](Installing_plugins.md "Installing plugins").

### Can not download the package

Make sure that <http://moodle.org/plugins> is up. If the site is down, your Moodle site will not be able to fetch the ZIP packages from it. Wait for <http://moodle.org/plugins> to be up again and then try to repeat the deployment procedure.

There can also be a problem with the validation of the SSL certificate. See [SSL certificate for moodle.org](SSL_certificate_for_moodle.org.md "SSL certificate for moodle.org") for more info.

## Errors and exceptions

The following section describes some errors that you may encounter and how to deal with them.

### Unable to download the package (download\_file\_exception)

Check the bottom of the mdeploy.log file. It will probably contain a line starting with "cURL error" followed by the error number and the cURL error description.

cURL error 7 couldn't connect to host
:   Make sure that the site <http://download.moodle.org> is up and running at the moment. If it is down, your site can't call the web service to fetch the available updates info. Wait for <http://download.moodle.org> to be up again then re-check.

cURL error 60 (SSL certificate problem)
:   This suggests problems with the validation of the SSL certificate of the remote (moodle.org) site. See [SSL certificate for moodle.org](SSL_certificate_for_moodle.org.md "SSL certificate for moodle.org") for more info.

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Automatic_updates_deployment&oldid=153881>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Installation](Category_Installation.md "Category:Installation")
