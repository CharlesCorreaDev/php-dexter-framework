# Troubleshooting | WHM Plugin | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/whm-litespeed-plugin/troubleshooting/

---

# Troubleshooting[¶](#troubleshooting "Permanent link")

The following are issues that might come up when using LiteSpeed's WHM Plugin, the user-end cPanel plugin, or `lscmctl` cache management script. If you are encountering any of the issues on this page please first attempt the solutions listed before contacting support.

## Domain missing in WHM mass operations[¶](#domain-missing-in-whm-mass-operations "Permanent link")

When running **Mass Enable** and **Mass Disable** operations in the WHM Plugin, a list of the server's domains is displayed. The plugin should automatically detect and display all domains, but in some cases it may not.

This may be due to a fatal WordPress error.

If the WHM Plugin encounters a fatal error when trying to load the WordPress environment, the domain will be removed from the list of those automatically detected. In order to solve this problem, you need to determine what has caused WP's fatal error.

One possible cause for a fatal error is a call to an undefined function.

The WHM Plugin loads WordPress with the `SHORTINIT` constant. `SHORTINIT` collects basic information and prevents the bulk of WP from being loaded. This is the most efficient way for our plugin to gather what it needs from each WP installation on your server.

If you are calling functions in `wp-config.php`, they may cause a fatal WP error in a `SHORTINIT` situation.

For example, say you have a line like this in your `wp-config.php` file:

```
update_option('siteurl', 'http://example.com' );
```

The `update_option()` function uses another function, `sanitize_option()`, in its code, but `sanitize_option()` has not been loaded because of the `SHORTINIT` constant. This results in the fatal WP error that causes the WHM Plugin to skip over that domain in its list of detected domains.

If you are calling functions as part of your `wp-config.php` file, you'll need to verify that they are not, in turn, using undefined functions. If they are, you can add a simple conditional statement to your code to avoid a fatal error. Like so:

```
if ( function_exists('sanitize_option') ) {
    update_option('siteurl', 'http://example.com' );
}
```

A more generic example:

If `function1()` calls `function2()` and `function2()` is undefined when loading WP with `SHORTINIT`, then you can replace this:

```
function1();
```

with

```
if ( function_exists('function2') ) {
    function1();
}
```

In the above example, the problem was easily found one function deep in the code, but that will not always be the case. To ferret out where the error is happening, you may need to do one or both of the following things:

- Check the [WordPress error log](https://codex.wordpress.org/Debugging_in_WordPress) for the missing domain.
- Follow the trail in [the WordPress Codex Function Reference](https://codex.wordpress.org/Function_Reference) to see which functions use which other functions.

## Cache Manager `Error` status[¶](#cache-manager-error-status "Permanent link")

While using the **Cache Manager** in the WHM Plugin, you might occasionally see an installation listed with an `Error` status.

[![!WHM Plugin Cache Management "Critical Error Status" Example](../images/troubleshooting01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/whm-litespeed-plugin/images/troubleshooting01.png)

By hovering over the `Error` text, a small explanation as to the cause of the error will be displayed. Here we will list out and explain these possible errors and what can be done to fix them.

### Fatal error encountered during action execution[¶](#fatal-error-encountered-during-action-execution "Permanent link")

This message indicates that PHP encountered a fatal error while loading the WordPress environment and trying to perform some action.

#### Case 1[¶](#case-1 "Permanent link")

**Cause**: This most commonly indicates that the installation is invalid in some way, such as a broken backup or testing installation that was detected during scan.

**Resolution**: Most of the time these installations can be ignored without issue. In the rare case where an installation is working as expected but is still detected with this error, please try running the following command and trying again:

```
lsws/admin/misc/lscmctl --update-lib
```

#### Case 2[¶](#case-2 "Permanent link")

**Cause**: Another potential cause for this error would be our shared code library directory not being included in the user's cage if cageFS is installed and enabled for that user.

This can usually be confirmed by checking the log file, `/usr/local/lsws/logs/webcachemgr.log` for the WHM Plugin or `<user_home_dir>/lscmData/ls_webcachemgr.log` for the cPanel plugin. Look for a message similar to the following:

```
Could not open input file:
/usr/local/lsws/add-ons/webcachemgr/src/UserCommand.php
```

**Resolution**: As the `root` user, please confirm that the `/etc/cagefs/cagefs.mp` file contains the following two entries (each on their own line):

```
/usr/local/lsws
/usr/src/litespeed-wp-plugin
```

Add the lines if they are missing.

After this, run the following command:

```
cagefsctl --remount-all
```

Press the **Refresh Status** button for one of the affected WordPress installations to check if the problem has been resolved. If you are still encountering the same issue, please run the following command and check again:

```
cagefsctl --force-update
```

If neither resolution fixes the issue please [contact our support team](#additional-support) for further investigation.

### Timeout occurred during action execution[¶](#timeout-occurred-during-action-execution "Permanent link")

This message indicates that PHP timed out while loading the WordPress environment and trying to perform some action.

**Cause**: This error is most commonly caused by custom code added in a user's `wp-config.php` file. If the code runs into some issue when executed by our script call, it may hang.

**Resolution**: If the installation is working as expected, you can locate the code causing the error and fix or remove it. If you are in need of assistance you may [contact our support team](#additional-support) for further investigation. Be aware that this issue likely falls outside the scope of free support.

### Could not retrieve WordPress site URL[¶](#could-not-retrieve-wordpress-site-url "Permanent link")

This message indicates that the installation was successfully discovered as a valid WP installation, but the site URL could not be retrieved from WordPress.

**Cause**: WordPress' `get_option()` function failed to retrieve a value for `siteurl`.

**Resolution**: Since this error usually indicates some kind of database issue with WordPress, please [contact our support team](#additional-support) for further investigation, if you've confirmed this is a working WordPress site.

### Could not match WordPress site URL to a known cPanel docroot[¶](#could-not-match-wordpress-site-url-to-a-known-cpanel-docroot "Permanent link")

This message indicates that the site URL retrieved from WordPress did not match any known cPanel document roots.

#### Case 1[¶](#case-1_1 "Permanent link")

**Cause**: Missing cPanel userdata for the installation. Without this userdata, the correct document root cannot be retrieved from cPanel.

**Resolution**: This can be resolved by validating this user account and domain in cPanel. If set up correctly, you should find an entry for the site in the `%%/var/cpanel/userdata/$user/%%` directory.

#### Case 2[¶](#case-2_1 "Permanent link")

**Cause**: The site URL set in the WordPress backend is incorrect. This can happen when the WordPress site is set up using `mod_userdir` (resulting in an IP being set for the site URL) or the site URL has been changed to an incorrect value in the WordPress backend.

**Resolution**: This can be resolved by changing the value of `siteurl` in the WordPress backend to use the site's fully qualified domain name. After which, a document root match should be found.

### Could not find a valid wp-config.php file[¶](#could-not-find-a-valid-wp-configphp-file "Permanent link")

This message indicates that we could not find a possible `wp-config.php` file for that specific installation.

**Cause**: When looking for an installation's `wp-config.php` file, the installation's root directory and parent directory are both checked for a valid copy. If one cannot be found, or the discovered `wp-config.php` file is believed to belong to a different WordPress installation (i.e., it is discovered in a parent directory also containing a `wp-settings.php` file), then this error is set.

**Resolution**: Confirm that this installation has a valid `wp-config.php` file. If the `wp-config.php` file is kept more than one directory above the root installation using symbolic links, it will need to be moved to the installation root or parent directory.

## Additional support[¶](#additional-support "Permanent link")

If you are still running into issues after learning about the error cases above, please [contact our support team](https://www.litespeedtech.com/support) for further assistance.
