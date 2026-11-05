# Overview | Troubleshooting | PHP | External Applications | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/php/troubleshooting/

---

# Troubleshooting[¶](#troubleshooting "Permanent link")

## Enable PHP Error Log[¶](#enable-php-error-log "Permanent link")

There are two methods for viewing PHP errors that occur while running your website. You can either display errors directly on your website (viewable from any web browser) or enable error logging to write the errors to a specified file (viewable inside a text file). You can configure this on `php.ini` directly.

### Displaying on Website[¶](#displaying-on-website "Permanent link")

For viewing errors on the website front end, you can add two lines to `php.ini`. The first line specifies which errors to show, and the second enables errors to be displayed.

Show all errors, but not notices:

```
error_reporting = E_ALL & ~E_NOTICE
```

OR, show all errors, *including* notices:

```
error_reporting = E_ALL
```

Enable error display:

```
display_errors = On
```

### Writing to File[¶](#writing-to-file "Permanent link")

To write the errors to a specified file, you can add two lines to `php.ini`. The first enables error logging, and the second specifies the location of the error log.

Enable logging (set `log_errors` to `Off` to disable logging):

```
log_errors = On
```

Save errors from any page to the specified location. In this example, we want to save to a file called `elog` in the document root:

```
error_log = elog
```

## Improve Response Time[¶](#improve-response-time "Permanent link")

To improve site performance, a key step is to enable cache and avoid invoking PHP altogether. However, caching may not be available for some situations or applications, and you will need to improve PHP performance some other way. These ways may include:

- enabling opcode cache
- choosing a higher PHP version with better performance
- disabling `xdebug` and `snmp` PHP modules if they were enabled accidentally
- increasing `PHP suEXEC Max Conn` when WaitQ is frequently higher than 0

See [this doc](lsws__extapp__php__performance.md) to learn more about improving PHP performance in detail.

For an uncachable site that is not busy and has been idle for some time, when a new visitor comes in, the initial PHP load time could be very slow, while the second request is fast. Assuming the opcode cache is enabled for the site, this is likely because PHP processes are being dynamically spawned, which may take time.

There are two settings that may be adjusted to minimize the impact of spawning new PHP processes: **Max Idle Time**, and CloudLinux LVE IO Limit.

### Max Idle Time[¶](#max-idle-time "Permanent link")

**[Max Idle Time](https://www.litespeedtech.com/docs/webserver/config/php#extMaxIdleTime)** controls how long PHP will keep alive for that site when the site is idle. If a fast initial response is critical to your site, you may want to increase it so that PHP can run longer. For example, navigate to **LiteSpeed WebAdmin Console > PHP** , and change **Max Idle Time** from `60` seconds to `86400` (1 day) . Then, PHP will only have to start up once per day, at most, where previously it would require a restart any time after 60 seconds had passed.

### CloudLinux LVE IO Limit[¶](#cloudlinux-lve-io-limit "Permanent link")

CloudLinux LVE limits IO/IOPS. When an account is idle for while, data is not in the kernel cache anymore, and PHP needs to load many things from disk. IO limits slow PHP down when it is loading a file from disk. That's the main factor that causes a page to take a long time to load after a period of idelness. Try raising the IO limit or disabling it altogether to alleviate this problem.

## Session Locking[¶](#session-locking "Permanent link")

**Symptom**: A long-running PHP job eventually makes the server unresponsive and requires a `killall lsphp` to get back to normal

**Potential Cause**: The PHP job is locking the PHP session file. Other PHP requests cannot be processed, as they are waiting for the locked session file.

**Solution**: This issue needs to be addressed within the PHP code itself. If your PHP script is going to be long running, it should create it's own PHP session, or release the session as soon as possible. Long-running PHP scripts should not share PHP sessions with other requests.

If you want more information, here are the steps we have used to diagnose this type of issue.

Run the following command while your long-running PHP script is active, and another request is waiting:

```
ps -ef | grep php
```

Make note of the process ID for the waiting request and use it to run the following command (substitute the actual PID for `123456`):

```
strace -tt -T -p 123465
```

If you see something like this in the output, it indicates that the waiting request is being locked by FD:7:

```
19:57:13.617826 flock(7, LOCK_EX^Cstrace: Process 123456 detached
```

Run this command to see what FD:7 is:

```
lsof -p 123456
```

You should see output that includes a line like this:

```
lsphp   414632 nobody    7u   REG                8,5        0  150633 /tmp/sess_4g9st6gmrvvddj15hn7t0b4csl
```

It indicates that FD:7 is the PHP session file.

If you run the `lsof` command for the long-running PHP script, you should see the PHP session file, locked at FD:7 in that output as well.

## PHP running as web server user[¶](#php-running-as-web-server-user "Permanent link")

In short, if the LiteSpeed binary is owned by the wrong user, it can cause PHP errors. You can restore the correct permissions, with the `lsup` script, like so:

```
/usr/local/lsws/admin/misc/lsup.sh -f
```

The `-f` forces an update, and during the process, all necessary files will be re-deployed with the correct ownership and permissions, enabling PHP to run correctly.

### Why this works[¶](#why-this-works "Permanent link")

In a typical server environment, like with cPanel, Plesk, or DirectAdmin, the web server usually runs as a generic user like `apache`, `nobody`, or `www-data`. For security reasons, PHP is configured to run under the individual site user account.

When you create a new site in your control panel, the system will create a new user for this site, and all files for the site are owned by this user. The Linux file system gives each site its own secure directory, so that each site cannot access files that belong to other sites.

As such, for PHP scripts to read or write files within the site, the PHP process must run as the site’s user. This will give the PHP process the permissions to manipulate files if needed.

But in some unusual situations, or due to mis-configuration, the PHP process might run as `nobody`, `apache`, or `www-data` instead of the intended site's user. When this happens, the PHP process will not be able to manipulate files properly.

One possible reason this might occur is that the `setuid` attribute of the LiteSpeed binary has been changed. For example, try running this command:

```
ls -l "$(readlink -f /usr/local/lsws/bin/lscgid)"
```

It will provide output like this:

```
-r-sr-xr-x 1 root root 246808 Apr 12 01:48 /usr/local/lsws/bin/lscgid.6.3.2
```

In this case, it shows the `r-s` permission, indicating the `setuid` bit is correctly set and the file is owned by `root`.

However, the output may show something else, like this:

```
-r-xr-xr-x 1 nobody nobody 246728 Apr  4 10:40 /usr/local/lsws/bin/lscgid.6.3.2
```

Here you can see that the file ownership and permissions are incorrect. The file is owned by `nobody` instead of `root` and the `setuid` bit is set to `r-x`.

Run the `lsup` script to set the permissions back to normal and allow PHP to run correctly.

## Cannot be Started by Web Server[¶](#cannot-be-started-by-web-server "Permanent link")

You may see the following error in the error log or WebAdmin Console:

```
invalid path - /xxx/bin/lsphp, it cannot be started by Web server!
```

For example:

```
[1857689] [config:server:epsr:lsphp54] invalid path - /opt/cpanel/ea-php54/root/usr/bin/lsphp, it cannot be started by Web server!
[1857689] [config:server:epsr:lsphp55] invalid path - /opt/cpanel/ea-php55/root/usr/bin/lsphp, it cannot be started by Web server!
[1857689] [config:server:epsr:lsphp56] invalid path - /opt/cpanel/ea-php56/root/usr/bin/lsphp, it cannot be started by Web server!
[1857689] [config:server:epsr:lsphp70] invalid path - /opt/cpanel/ea-php70/root/usr/bin/lsphp, it cannot be started by Web server!
[1857689] [config:scripthandler] Can not find handler with type: 17, name: lsphp54.
[1857689] [config:scripthandler] Can not find External Application: lsphp54, type: lsapi
[1857689] [config:scripthandler] use static file handler for suffix [php54]
[1857689] [config:scripthandler] Can not find handler with type: 17, name: lsphp55.
[1857689] [config:scripthandler] Can not find External Application: lsphp55, type: lsapi
[1857689] [config:scripthandler] use static file handler for suffix [php55]
[1857689] [config:scripthandler] Can not find handler with type: 17, name: lsphp56.
[1857689] [config:scripthandler] Can not find External Application: lsphp56, type: lsapi
[1857689] [config:scripthandler] use static file handler for suffix [php56]
[1857689] [config:scripthandler] Can not find handler with type: 17, name: lsphp70.
[1857689] [config:scripthandler] Can not find External Application: lsphp70, type: lsapi
[1857689] [config:scripthandler] use static file handler for suffix [php70]
```

When LiteSpeed Web Server starts up with default settings, it will scan the available PHP binaries. By default, cPanel/WHM does not install `ea-php54` through `ea-php70`, and so LSWS is unable to find those files. Hence the errors.

**It is safe to ignore this error.** If you want it to go away, you can install the missing PHP versions in WHM.

Another option - one we **do not recommend** - is to disable auto-detection and manually configure the external app.

## PHP Not Reporting Errors[¶](#php-not-reporting-errors "Permanent link")

You've enabled PHP error reporting so that you may troubleshoot PHP code, but for some reason, no errors are being reported. Why?

On the `phpinfo.php` page, you see the following local values, which are correct:

```
display_errors On
display_startup_errors On
error_log php_error.log
error_reporting E_ALL
```

To diagnose the issue, let's create a test script called `test.php` and add the following lines:

```
<?php
echo zzzzzxzzzzxd('test');
?>
```

Since the faked function `zzzzzxzzzzxd` doesn't exit at all, visiting `test.php` on your domain should trigger a fatal error. However, there is no output of any error on the web browser, nor on the local virtual host PHP error logs. Why not?

Check `phpinfo.php` again. We see **error\_log**'s global value is `32767`, while the local value is `E_ALL`. Check the global `php.ini` and you will find that **error\_reporting** is set to `E_ALL`. This is because you have a local override set in `.htaccess` as `php_value error_reporting E_ALL`.

The error reporting syntax in the `.htaccess` `php_value` override is incorrect. If it is set in `php.ini`, it should be `error_reporting = E_ALL`, but if it is an override in the Apache conf or `.htaccess`, `error_reporting` should be an integer, and not ASCII characters. Such incorrect syntax will lead to a `500` error for the site.

The corrrect override syntax should be:

```
php_value error_reporting 32767
```

Here `32767` in Apache conf or `.htaccess` is equivalent to `E_ALL` in `php.ini`. After the above change, PHP error reporting should work fine and PHP should report a fatal error for `test.php` in both the browser and the error log.
