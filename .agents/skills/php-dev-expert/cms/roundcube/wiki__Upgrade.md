# Upgrade · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Upgrade

---

# Upgrading Roundcube

## Introduction

You've had Roundcube up and running for a while, and now there is a shiny new version out and you need to upgrade. Where to start?

## Backup, Backup, Backup!

I can't stress this enough: Back everything up!

First, make a copy of your Roundcube directory. This will help in case the new version does not work for you, you can always go back.

Next, perform a database dump (schema *and* data) and save the file in a safe place. If the new version of Roundcube requires any changes to the database schema, you may need to restore this backup if you have to revert to the earlier version.

## On the command line

### Get the latest version

Download it from <https://roundcube.net/download> and copy the Tarball to a directory on your server.

Unpack the tarball and read UPGRADING and INSTALL files and check system requirements of the new version.

```
cd <where-the-tarball-is-saved>
tar xf roundcubemail-*.tar.gz
```

### Update your existing Roundcube installation

- package `rsync` is required, used to copy new Roundcube files to existing Roundcube installation.
- php function `system` must be NOT disabled in `php.ini` parameter `disable_functions`, so that our script can call `rsync` command to copy files. It's recommended to disable `system` function after upgraded Roundcube.
- SQL user used for Roundcube db connection must have required privileges to update SQL tables in Roundcube db.

The easiest way to do this is to use the `installto.sh` shell script bundled with Roundcube.

```
cd <the-unpacked-roundcube-directory>
bin/installto.sh <your-existing-roundcube-directory>
```

Follow the instructions you'll see in the shell. The script first copies all updated files to the target directory and then runs the update script that will update/migrate your local configuration files and update the database schema if necessary.

Instead of using that script you can execute the steps manually. Read the *Updating manually* section of the [UPGRADING](https://github.com/roundcube/roundcubemail/blob/master/docs/UPGRADING.md) file from the release package.

*(For v1.6 and below)* If your web server's document root directory points to `public_html`, then the `/installer/` will not be available. For the database upgrade, let it point to the main roundcube directory.

## Via FTP + Installer

### Get the latest version

Download the files for the newest version first. The easiest way to get it is from <https://roundcube.net/download>. Wait for it to download, and then unzip (using WinZip or "tar xvfz roundcubemail-\*.tar.gz") in the current directory.

Now you should read UPGRADING and INSTALL files and check system requirements of the new version.

### Upload the new files

Use your favorite FTP/SFTP/SCP program to upload the updated files, which are:

- ./bin/\*
- ./SQL/\*
- ./program/\*
- ./installer/\*
- ./vendor/\*

Upload `plugins/*` and `skins/*` from the release package but don't replace the entire `skins` and `plugins` folders! You might have added other skins and plugins to those directories which you want to keep.

Also copy the default config file and the mimetypes mapping:

- config/defaults.inc.php
- config/mimetypes.php

### Run the installer

Edit your Roundcube config (`config/config.inc.php`, or `config/main.inc.php` for versions < 1.0) and set `'enable_installer'` to true.
Then open `http://url-to-roundcube/installer.php` (for v1.6 and below the installer URL is `http://url-to-roundcube/installer/`) in your web browser and click "3. Test config"

Follow the instructions on the screen to update your local config and the database schema.

When you're done and all the lights are green in the installer, edit your Roundcube config file again and set `'enable_installer'` to false if it's still present. To seal your installation, you should even remove the `installer` directory from the webserver.

## Updating from < 0.9 to 1.0 or higher

With version 1.0 of Roundcube, the structure of the config files changed. The previously used `main.inc.php` and `db.inc.php` files are now replaced with one single `config.inc.php` file which only contains the config options that differ from the defaults. This shall make future updates even simpler. Both, the command line update script as well as the installer will take care of the migration. Just note that from now on, the (one and only) config file for Roundcube is `config.inc.php`.

## Updating to 1.1.0 or higher

If you didn't download the "complete" package, 3rd party libraries still need to be installed or updated for your Roundcube installation. This is done using [Composer](https://getcomposer.org):

1. Get composer from <https://getcomposer.org/download/>
2. *(For v1.6 and below)* Rename the `composer.json-dist` file into `composer.json`
3. if you want to use LDAP address books, enable the LDAP libraries in your `composer.json` file by moving the items from "suggest" to the "require" section:

```
    "require": {
        ...
        "pear-pear.php.net/net_ldap2": "~2.2.0",
        "kolab/Net_LDAP3": "dev-master"
    }
```

4. run `php composer.phar install --no-dev`

Please note that this requires shell access to the webserver. If you don't have that, download the "complete" package and copy the `vendor` directory into the Roundcube installation directory. That already contains all the dependencies you'd otherwise install with Composer.

## Updating to 1.7 or higher

From Roundcube 1.7 you must configure your web server to use the `public_html` folder as the document root.

## Conclusion

That should be all that is needed to upgrade. If you have problems, you can always restore the backups and try again, or ask for help on the forums. If you need help, be sure to take note of any errors that appear on your screen or in the log files.

There's also UPGRADING file in Roundcube package to which you should refer to. Wiki can be outdated.
