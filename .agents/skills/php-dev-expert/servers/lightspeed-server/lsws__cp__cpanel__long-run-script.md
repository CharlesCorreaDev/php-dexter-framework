# PHP Without Timeout | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/long-run-script/

---

# PHP Without Timeout[¶](#php-without-timeout "Permanent link")

Some PHP scripts need to run for long periods of time without interruption. Examples include WordPress modules such as BackupBuddy, ImportBuddy, or any other module that relies on a WordPress built-in cron job. Whenever a PHP application rebuilds MySQL indexes, the process may run for a long time.

**Generally, allowing a PHP script to run forever is not desirable.** Thus there are a number of features (in LiteSpeed Web Server and built into PHP itself) that may prevent a PHP process from running long enough to finish. If you have a PHP script that must be allowed to run for a long time without interruption, you can use `noabort` in your rewrite rules.

## Easiest Solution[¶](#easiest-solution "Permanent link")

The easiest way to avoid aborting long-running PHP scripts is to place the following code into the very top of the domain's document root `.htaccess`:

```
<IfModule Litespeed> 
    RewriteEngine On
    RewriteRule SCRIPT_URL - [E=noabort:1, E=noconntimeout:1]
</IfModule>
```

Replace `SCRIPT_URL` with the actual URL of your script.

Danger

We know it is tempting to simply add `noabort` for all requests (`.*`), but we strongly suggest you do not do this.

Adding `noabort` for all requests to `.htaccess` is not standard practice and may cause unintended consequences. For example, a site running in a Cloudlinux Lightweight Virtual Environment (LVE) that is hitting resource limits can become completely tied up. This is because LSWS is not able to abort any external app requests.

We suggest you add `noabort` selectively, and only when absolutely necessary. Apply it to a specific script URL instead of `.*`. The narrower the scope, the less likely you will run into an issue.

To learn more, read through the rest of this documentation. It explains in detail what `noabort` and `noconntimeout` do for long-running PHP scripts and how to implement them through different methods, if you wish.

## Turn off Broken Connection Aborting[¶](#turn-off-broken-connection-aborting "Permanent link")

When a user closes a connection (by closing a window, for example), LSWS will abort processing that PHP script by killing the PHP process. This is to avoid wasting system resources and to prevent certain types of DoS attacks.

In some cases, though, it is preferable not to abort the PHP script, regardless of whether the connection has been closed. For example, built-in WordPress cron jobs start a background job by sending a request to `wp-cron.php`, then immediately closing the connection without waiting for a response. In order for the cron job to complete, though, the web server must keep the PHP engine running without interruption.

In this case, you need to turn off broken connection aborting. This be done at the server level in LSWS's WebAdmin Console or by using LiteSpeed's `noabort` environment variable.

Tip

With Apache mod\_php, the `ignore_user_abort` setting allows a user to trigger a long-running process and then close the browser or navigate away from the page without killing the PHP/MySQL process. This setting (and any Apache suEXEC setup) is not supported by LSWS.

### By Request Via Environment Variable[¶](#by-request-via-environment-variable "Permanent link")

Aborting for a broken connection can be turned off by using the request-level `noabort` environment variable. You may use a rewrite rule or `SetEnv`/`SetEnvIf` directives. `noabort` is a LiteSpeed-specific environment variable, so all related rules should be placed within LiteSpeed tags, like so:

```
<IfModule Litespeed> 
...
</IfModule>
```

Examples

If you want to make sure the three `wp-cron.php`, `backupbuddy.php,` and `importbuddy.php` scripts for WordPress are allowed to run ininterrupted, you can use a directive, like so:

```
SetEnvIf Request_URI "(wp-cron|backupbuddy|importbuddy)\.php" noabort
```

Or a rewrite rule like this, positioned above any other rules:

```
RewriteEngine On
RewriteRule (wp-cron|backupbuddy|importbuddy)\.php - [E=noabort:1]
```

#### Expanding the Scope[¶](#expanding-the-scope "Permanent link")

Earlier we explained that setting `noabort` for `.*` can have unintended consequences. We suggested that you should be specific about which URLs to set `noabort` for, and that you should list your script URLs explicitly. But there is some middle ground available between setting it for *all* URLs and listing *specific* URLs. Try using conditional statements. This allows you to expand the scope of `noabort` without having to set it for everything.

This example, adapted from one [provided by ManagedWP](https://managedwp.uk/fix-wordpress-timeouts-and-503-errors-caused-by-noabort/), sets `noabort` for all WordPress Cron tasks, similar to our earlier examples. Then, `RewriteCond` statements are used to determine whether the client is logged in and whether the URL is an Admin URL. `noabort` is set only if both conditions are met.

```
<IfModule LiteSpeed>
    <IfModule mod_rewrite.c>
        RewriteEngine On
        # Set noabort for WP Cron scripts
        RewriteRule ^wp-cron.php$ - [E=noabort:1]
        # Set noabort if user is logged in and URL is an Admin URL
        RewriteCond %{REQUEST_URI} ^(.*)?wp-admin
        RewriteCond %{HTTP_COOKIE} ^.*wordpress_logged_in_.*$
        RewriteRule .* - [E=noabort:1]
    </IfModule>
</IfModule>
```

#### Rewrite Rules vs Directives[¶](#rewrite-rules-vs-directives "Permanent link")

`noabort` rewrite rules and directives should not be used together. We recommend the `SetEnv` directive over a rewrite rule, but here are some facts to help you choose for yourself:

Rewrite rules:

- The `[E=noabort:1]` flag can be added to any rewrite rule. The rewrite rule can be in an Apache `.htaccess` file or vhost-level configuration file.
- Rewrite rules are sensitive to position among the other rules. For best results, add a `noabort` rule to the top of the config file.
- Rewrite rules are not easily inherited, and should generally be used for a single account only.

Directives:

- `SetEnv` can go anywhere in the config file, and is not sensitive to position.
- Directives can be used at the server level to impact all accounts with one setting.

### Globally via the WebAdmin[¶](#globally-via-the-webadmin "Permanent link")

Danger

This is not recommended. You should only turn off abort at the server level in rare, nontradtional use cases.

Navigate to **WebAdmin console > Configuration > Server > General** and set **External Application Abort** to `No Abort`. This will stop all applications from aborting even when a connection has been broken.

## Override LiteSpeed Connection Timeout[¶](#override-litespeed-connection-timeout "Permanent link")

If a script does not communicate with the server for a long time, this can trigger a connection timeout, and the server will close the client connection. This is usually a good thing, and is done to prevent poorly written PHP scripts from tying up the server.

To get desired functionality from your web applications, though, you may need to prevent some connections from being timed out. (If the `noabort` environment variable above has been set, the script will continue to run even though the connection has been broken. Your application, however, may also require the connection to stay open for correct functionality.)

Connection timeout can be prevented by either increasing the global connection timeout setting (via the WebAdmin Console) or by using LiteSpeed's `noconntimeout` environment variable.

### By Request Via Environment Variable[¶](#by-request-via-environment-variable_1 "Permanent link")

Similar to the `noabort` environment variable, you can add the `noconntimeout` environment variable via a rewrite rule, or you can use the `SetEnv`/`SetEnvIf` directives. `noconntimeout` is a LiteSpeed-specific environment variable, so all of the following examples should be placed within LiteSpeed tags, like so:

```
<IfModule Litespeed> 
...
</IfModule>
```

Tip

The rewrite flag is preferred for controlling a single account. The `SetEnv`/`SetEnvIf` directives are preferred for rules that will apply to all accounts.

Examples

If you want to keep the connection unbroken for the three `wp-cron.php`, `backupbuddy.php,` and `importbuddy.php` scripts for WordPress, you can use a directive. Here we have combined `noconntimeout` with `noabort`:

```
SetEnvIf Request_URI "(wp-cron|backupbuddy|importbuddy)\.php" noabort noconntimeout
```

You can accomplish the same with a rewrite rule placed at the top of the file, like this:

```
RewriteEngine On
RewriteRule (wp-cron|backupbuddy|importbuddy)\.php - [E=noabort:1, E=noconntimeout:1]
```

You can also use `noconntimeout` alone, which keeps the connection open while the scripts are running, but does not prevent the scripts from being aborted:

```
RewriteRule (wp-cron|backupbuddy|importbuddy)\.php - [E=noconntimeout:1]
```

### Globally via WebAdmin[¶](#globally-via-webadmin "Permanent link")

Navigate to **WebAdmin CP > Configuration > Server > Tuning** and change **Connection Timeout**. This setting can be increased to allow scripts to run for more seconds. This doesn't prevent timeouts. It simply allows the scripts to run for a longer time before timing out.

Tip

If LiteSpeed ADC is running in front, the ADC connection timeout also needs to be adjusted.

## Set `LSAPI_MAX_PROCESS_TIME` Environment Variable[¶](#set-lsapi_max_process_time-environment-variable "Permanent link")

In ProcessGroup mode, the [`LSAPI_MAX_PROCESS_TIME` environment variable](lsws__extapp__php__configuration__options.md#lsapi_max_process_time) controls the maximum processing time allowed when processing a request (default 3600 seconds). If a child process cannot finish processing the request in the given time period, it will be killed by the parent process. This option can get rid of a dead or a runaway child process.

Set `LSAPI_MAX_PROCESS_TIME` in your external application settings at **WebAdmin > Configuration > Server > PHP > Environments**.

Normally there is no need for an external app, but if you have already defined some external app or carried one over from an earlier version, you will need to change **WebAdmin > Configuration > Server(or Vhost) > External App > your external application > Environments** too.

Example

Globally set all virtual hosts to one day: `LSAPI_MAX_PROCESS_TIME=86400`.

If you would like to set it to a particular virtual host, you can add the following to the Apache virtual host configuration:

```
<IfModule Litespeed> 
DedicatePhpHandler on
LS_EXTAPP_ENV   LSAPI_MAX_PROCESS_TIME=86400
</IfModule>
```

## Set PHP Execution Time in php.ini[¶](#set-php-execution-time-in-phpini "Permanent link")

The `max_execution_time` setting controls the maximum time in seconds a PHP script is allowed to run before it is terminated by the parser. This helps prevent poorly written scripts from tying up the server. This time does not include time spent in system calls or network I/O (unlike the `LSAPI_MAX_PROCESS_TIME` environment variable above). Thus a process will usually trigger `LSAPI_MAX_PROCESS_TIME` before triggering a `max_execution_time` setting of a similar length. The default setting is 30.

Example setting (in a php.ini file):

```
    max_execution_time=36000
```

## Add PHP Code to a Script[¶](#add-php-code-to-a-script "Permanent link")

In order to keep a PHP script from timing out, one of our customers shared this solution, which worked for them. If you are experienced with PHP, you can try adapting the example to your own scripts.

Example

Add the following PHP code to a script:

```
<?php
//avoid apache to kill the php running
ignore_user_abort(true);
//start buffer output
ob_start();

echo "show something to user";
//close session file on server side to avoid blocking other requests
session_write_close();

//send length header
header("Content-Length: ".ob_get_length());
header("Connection: close");
//really send content, can't change the order:
//1.ob buffer to normal buffer, 
//2.normal buffer to output
ob_end_flush();
flush();
//continue do something on server side
ob_start();
//replace it with the background task
sleep(50); 
ob_end_clean();
?>
```

Note

You must turn off keepalive connections for this request. This can be done with a rewrite rule.
