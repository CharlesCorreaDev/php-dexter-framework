# Updating FreeScout · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Updating-FreeScout

---

- [After Updating](#after-updating)
- [Method 1. Update from web interface](#method-1-update-from-web-interface)
- [Method 2. Update using console script](#method-2-update-using-console-script)
- [Method 3. Update using GIT](#method-3-update-using-git)
- [Method 4. Update via tools.php](#method-4-update-via-toolsphp)
- [Method 5. Update manually](#method-5-update-manually)
- [Troubleshooting](#troubleshooting)

---

- **Before updating the app make sure to backup application files and database.**
- **If some updating method does not work or results in an error, simply use the next one or use manual updating which works always.**
- **If after updating you receive some new errors re-update using manual updating method.**
- **DO NOT change during the update the `APP_KEY` parameter in the .env file as it's used to encrypt/decrypt passwords.**

## After Updating

Go to Manage > System and make sure that "queue:work" is running and there are no duplicates (it may take a few minutes for it to start).

If you are receiving an error [in some cases](https://github.com/freescout-helpdesk/freescout/issues/2819) it may be needed to restart PHP FPM:\*\*

```
etc/init.d/php8.0-fpm restart
```

## Method 1. Update from web interface

Open FreeScout and go to `Manage » System » Status`. In App Version section click `Check for updates` and follow instructions:

![](https://camo.githubusercontent.com/c1bd66b6a72bc50210b0c55ea86cdacdaa913b66b5e93d526bd5dd2c9b9d5caa/68747470733a2f2f6672656573636f75742d68656c706465736b2e6769746875622e696f2f696d672f6d6973632f636865636b5f666f725f757064617465732e706e67)

Updating process may take several minutes, do not close browser window until it finishes or shows an error. Sometimes when updating finishes you may see the "Error occurred" message. It means updating process did not finish properly and you need to update FreeScout [manually](https://github.com/freescout-helpdesk/freescout/wiki/Updating-FreeScout#method-5-update-manually).

Updating via web interface may work or may not. Some releases may be installed fine via web interface and some - not. Today updating via the web interface may work, tomorrow - not. There are many factors involved.

If updating view web interface fails:

- Try to update again.
- If still no luck, switch to another update methods.

**If version number does not change after updating it means updating process has not finished properly and there may be all kinds of unexpected problems in the future. In this case switch to another update method or use manual updating method (which works always).**

## Method 2. Update using console script

This method requires SSH console and GIT.

1. Go to the root of your FreeScout application.
2. Run update script:

```
sudo -u www-data /var/www/html/tools/update.sh
```

3. Follow instructions.

## Method 3. Update using GIT

This method requires SSH console and GIT.

1. Pull updates from GitHub:

```
git pull
```

2. Run the following console command:

```
php artisan freescout:after-app-update
```

## Method 4. Update via tools.php

Use this method only if you can not use console or GIT.

1. Open <https://example.com/tools.php>

![](https://camo.githubusercontent.com/45590d67b8c359c3b0d321ba65a23409a20b00eb8a5b2063c39f297e44dd03c7/68747470733a2f2f6672656573636f75742d68656c706465736b2e6769746875622e696f2f696d672f73637265656e73686f74732f746f6f6c732e706e67)

2. Enter APP\_KEY from your `.env` file and click **Update App** button.
3. Open and check application.

## Method 5. Update manually

1. Remove `/vendor` (`rm -rf /path/to/freescout/vendor`) and `/overrides` directory (`rm -rf /path/to/freescout/overrides`).
2. [Download](https://freescout.net/download/) and extract archive into FreeScout directory on your server overwriting all existing files (no worries, no configuration files will be overridden).
3. Login to FreeScout, go to "Manage » System » Tools", click "Clear Cache" and "Migrate DB".
4. If previous step did not work use some other method to [clear the cache](https://github.com/freescout-helpdesk/freescout/wiki/Clearing-the-Cache).
5. Click "Migrate DB".
6. Open and check application.

## Troubleshooting

First thing you need to do in case of some problems is to check logs in `/storage/logs`.
If the error still persists just to update again.

**Application does not work after updating**

Try to clear cache via the option 4: [https://github.com/freescout-help-desk/freescout/wiki/Clearing-the-Cache](wiki__Clearing-the-Cache.md)

**'Class NNN\Providers\NnnServiceProvider not found' after update**

Remove all files from `/bootstrap/cache` folder.

**If self-updater script hits your hosting's `PHP memory size` limit or `PHP max execution time**

- Try to update again.
- If still does not work, switch to another update methods.

**If you are facing a database error**

Try to run Migration via <https://example.com/tools.php> or by executing console command:

```
php artisan migrate
```

**Permission denied when writing to some file**

Check permissions section in "Manage > System > Status" and see <https://github.com/freescout-helpdesk/freescout/wiki/Installation-Guide#-permissions-issue>

**open\_basedir restriction in effect**

Try [this](https://stackoverflow.com/questions/1846882/open-basedir-restriction-in-effect-file-is-not-within-the-allowed-paths/34980645#34980645).

**All incoming & outgoing connection's passwords are lost after update**

Never change the `APP_KEY` parameter in the .env file (see [this](https://github.com/freescout-help-desk/freescout/issues/4395)).
