# Controlling LSPHP | Configuration | PHP | External Applications | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/php/configuration/control/

---

# Controlling LSPHP[¶](#controlling-lsphp "Permanent link")

## Concurrency[¶](#concurrency "Permanent link")

In this section we will take a look at how to change the concurrency of LSPHP. Concurrency is a measure of the number of LSPHP processes that can be created to run at the same time. Configuration varies depending on your setup. If you are running a Control Panel, you will use the Apache Configuration. Otherwise, follow the instructions for a [Native install of LiteSpeed Web Server](#native).

### Apache Configuration[¶](#apache-configuration "Permanent link")

When running LiteSpeed Web Server with Apache configuration (as is usually the case when running a Control Panel) it is highly recommended to have **PHP suEXEC** enabled so that each LSPHP process spawned is owned by the `user:group` of the account running it. This greatly improves security, and is the default setting.

You can set the concurrency of LSPHP on Apache using **PHP suEXEC** in the WebAdmin Console or via the terminal.

Note

If you are using Apache but not using **PHP suEXEC** please follow the [override auto detected php guide](lsws__extapp__php__how-to.md#override-auto-detected-php) and set the following for the **External Applications**:

- Set **Max Connections** to the maximum number of concurrent LSPHP processes you want to allow.
- Set **PHP\_LSAPI\_CHILDREN** inside of **Environment** to the maximum number of concurrent LSPHP processes you want to allow.

**Max Connection** and **PHP\_LSAPI\_CHILDREN** must be the same value.

#### WebAdmin[¶](#webadmin "Permanent link")

1. Visit the WebAdmin Console (`https://YOUR_SERVER_IP:7080`) and log in.
2. Navigate to **Configuration > Server > General**.
3. Scroll down to **Using Apache Configuration File** and click **Edit**.
4. Change the following settings and hit **Save**.
   - Set **PHP suEXEC** to `Yes` if it is not already.
   - Set **PHP suEXEC Max Conn** to the maximum number of concurrent LSPHP processes you want to allow. [![!webadmin-general-apache](../images/control01.png)](https://docs.litespeedtech.com/lsws/extapp/php/configuration/images/control01.png)
5. Navigate to **Actions** and press the icons next to **Restart Detached PHP Processes** and then **Apply Changes / Graceful Restart**.

#### Terminal[¶](#terminal "Permanent link")

Open `/usr/local/lsws/conf/httpd_config.xml` with your favorite editor, like so (we are using vi in the example):

```
$ sudo vi /usr/local/lsws/conf/httpd_config.xml
```

Find the main `<httpServerConfig></httpServerConfig>` block and add/edit the following lines near the top:

```
<phpSuExec>1</phpSuExec>
<phpSuExecMaxConn>10</phpSuExecMaxConn>
```

Set **phpSuExec** to `1` to enable it if it is not already enabled and set **phpSuExecMaxConn** to the maximum number of concurrent LSPHP processes you want to allow.

To apply your `/usr/local/lsws/conf/httpd_config.xml` changes to LiteSpeed Web Server, run the following:

```
$ sudo touch /usr/local/lsws/admin/tmp/.lsphp_restart.txt
$ sudo systemctl restart lsws
```

### Native[¶](#native "Permanent link")

On a native LiteSpeed Web Server setup it is simple to set the concurrency for all PHP versions on your server. Starting with LiteSpeed Web Server 5.3 you will only need to change settings inside of the **PHP** section and it will apply to all the PHP versions on your server.

You can set the concurrency of LSPHP on a Native setup using the WebAdmin Console or via the terminal.

Note

If you are using specific External Applications instead of the PHP section or LiteSpeed Web Server prior to 5.3 please follow the [override auto detected php guide](lsws__extapp__php__how-to.md#override-auto-detected-php) and set the following for the **External Applications**:

- Set **Max Connections** to the maximum number of concurrent LSPHP processes you want to allow.
- Set **PHP\_LSAPI\_CHILDREN** inside of **Environment** to the maximum number of concurrent LSPHP processes you want to allow.

**Max Connection** and **PHP\_LSAPI\_CHILDREN** need to be the same value.

#### WebAdmin[¶](#webadmin_1 "Permanent link")

1. Visit the WebAdmin Console (`https://YOUR_SERVER_IP:7080`) and log in.
2. Navigate to **Configuration > Server > PHP**.
3. Scroll down to **PHP Handler Defaults** and click **Edit**.
4. Change the following settings and hit save.
   - Set **Max Connections** to the maximum number of concurrent LSPHP processes you want to allow.
   - Set **Environment** to `PHP_LSAPI_CHILDREN=` the maximum number of concurrent LSPHP processes you want to allow. [![!webadmin-php](../images/control02.png)](https://docs.litespeedtech.com/lsws/extapp/php/configuration/images/control02.png)
5. Navigate to **Actions** and press the icons next to **Restart Detached PHP Processes** and then **Apply Changes / Graceful Restart**.

#### Terminal[¶](#terminal_1 "Permanent link")

Open `/usr/local/lsws/conf/httpd_config.xml` with your favorite editor, like so (we are using vi in the example):

```
$ sudo vi /usr/local/lsws/conf/httpd_config.xml
```

In the main `<phpConfig></phpConfig>` block, add/edit the following lines:

```
<maxConns>35</maxConns>
<env>PHP_LSAPI_CHILDREN=35</env>
```

Set **maxConns** and **PHP\_LSAPI\_CHILDREN** inside of **env** to the maximum number of concurrent LSPHP processes you want to allow. These values need to match.

To apply your `/usr/local/lsws/conf/httpd_config.xml` changes to LiteSpeed Web Server, run the following:

```
$ sudo touch /usr/local/lsws/admin/tmp/.lsphp_restart.txt
$ sudo systemctl restart lsws
```

## Timeouts[¶](#timeouts "Permanent link")

Some PHP scripts need to run for long periods of time without interruption. Examples include WordPress modules such as BackupBuddy, ImportBuddy, or any other module that relies on a WordPress built-in cron job. Whenever a PHP application rebuilds MySQL indexes, the process may run for a long time.

Generally, allowing a PHP script to run forever is not desirable. Thus there are a number of features (in LSWS and built into PHP) that may prevent a PHP process from running long enough to finish. You may need to set up more than one of the following configurations to ensure your application works correctly.

### No Abort[¶](#no-abort "Permanent link")

When a user closes a connection (by closing a window, for example), LSWS will abort processing that PHP script by killing the PHP process. This is to avoid wasting system resources and prevent certain types of DoS attacks.

In some cases, though, it is preferable to not to abort the PHP script regardless of whether the connection has been closed. For example, Wordpress built-in cron jobs start a background job by sending a request to wp-cron.php then immediately closing the connection without waiting for response. In order for the cron job to complete, though, the web server must keep the PHP engine running without interruption.

With Apache mod\_php, the `ignore_user_abort` setting allows a user to trigger a long-running process and then close the browser or navigate away from the page without killing the PHP/MySQL process. This setting is not supported by LSWS (or any Apache suEXEC setup).

Aborting for a broken connection can instead be turned off at the server level in LSWS's WebAdmin console or by using LiteSpeed's `noabort` environment variable.

#### Globally[¶](#globally "Permanent link")

To set up No Abort globally for the server execute the following steps:

1. Go to your WebAdmin Console (`https://YOUR_SERVER_IP:7080`) and log in.
2. Navigate to **Configuration > Server > General > General Settings**.
3. Click **Edit**, then change **External Application Abort** to `No Abort`, and click **Save**.
4. Navigate to **Actions** and press the icons next to **Apply Changes / Graceful Restart**.

#### .htaccess[¶](#htaccess "Permanent link")

Aborting for a broken connection can be turned off by using the request-level `noabort` environment variable. This can be done in a rewrite rule or using the `SetEnv`/`SetEnvIf` directives. `noabort` is a LiteSpeed-specific environment variable, so all the following rules should be placed inside of `<IfModule Litespeed></IfModule>` tags.

The `[E=noabort:1]` flag can be added to any rewrite rule. The rewrite rule can be in an Apache .htaccess file or vhost-level configuration file. The rewrite flag should usually be used for a single account only. If you need to do a server-level configuration that will apply to all accounts (though perhaps only for certain scripts), you should use the `SetEnvIf` directive.

##### Rewrite Rule[¶](#rewrite-rule "Permanent link")

To enable `noabort` for all PHP files via RewriteRules add the following to your .htaccess file:

```
RewriteEngine On
RewriteRule .* - [E=noabort:1]
```

You can replace `.*` with specific files like `(wp-cron|backupbuddy|importbuddy)\.php` which will have `noabort` only happen on those specific files.

##### SetEnv[¶](#setenv "Permanent link")

To enable `noabort` for all PHP files via `SetEnv`/`SetEnvIf` add the following to your .htaccess file:

SetEnvSetEnvIf

```
SetEnv noabort 1
```

```
SetEnvIf Request_URI "(wp-cron|backupbuddy|importbuddy)\.php" noabort
```

Note

Rewrite rules cannot be easily inherited. Thus, if you want to affect all accounts with one setting, the `SetEnvIf` directive should be used.

### No Connection Timeout[¶](#no-connection-timeout "Permanent link")

If a script does not send back anything for a long time, this can trigger a connection timeout and the server will close the client connection. This is done to prevent poorly written PHP scripts from tying up the server. To get desired functionality from your web applications, though, you may need to prevent the connection from being timed out. (If the `noabort` environment variable above has been set, the script will continue to run even though the connection has been broken. Your application, though, may require the connection to stay open for correct functionality.)

Connection timeout can be prevented by either increasing the global connection timeout setting (via the WebAdmin Console) or using LiteSpeed's `noconntimeout` environment variable.

#### Globally[¶](#globally_1 "Permanent link")

To setup No Connection Timeout globally for the server, execute the following steps:

1. Go to your WebAdmin Console (`https://YOUR_SERVER_IP:7080`) and log in.
2. Navigate to **Configuration > Server > Tuning > Connection**.
3. Click **Edit**, then change **Connection Timeout (secs)** to your desired time in seconds, and click **Save**.
4. Navigate to **Actions** and press the icons next to **Apply Changes / Graceful Restart**.

Note

If LiteSpeed ADC is running in front of LSWS, the ADC connection timeout also needs to be adjusted.

#### .htaccess[¶](#htaccess_1 "Permanent link")

Similar to the `noabort` environment variable, you can add the `noconntimeout` environment variable via a rewrite rule or using the `SetEnv`/`SetEnvIf` directives. (The rewrite flag is preferred for controlling a single account. The `SetEnv`/`SetEnvIf` directives are preferred for rules that will apply to all accounts.) `noconntimeout` is a LiteSpeed-specific environment variable, so all the following examples should be placed inside of `<IfModule Litespeed></IfModule>` tags.

##### Rewrite Rule[¶](#rewrite-rule_1 "Permanent link")

To enable `noconntimeout` for all PHP files via RewriteRules add the following to your .htaccess file:

```
RewriteEngine On
RewriteRule .* - [E=noconntimeout:1]
```

You can replace `.*` with specific files like `(wp-cron|backupbuddy|importbuddy)\.php` which will have `noconntimeout` only happen on those specific files.

##### SetEnv[¶](#setenv_1 "Permanent link")

To enable `noconntimeout` for all PHP files via `SetEnv`/`SetEnvIf` add the following to your .htaccess file:

SetEnvSetEnvIf

```
SetEnv noconntimeout 1
```

```
SetEnvIf Request_URI "(wp-cron|backupbuddy|importbuddy)\.php" noconntimeout
```

Note

Rewrite rules cannot be easily inherited. Thus, if you want to affect all accounts with one setting, the `SetEnvIf` directive should be used.

### LSAPI Max Process Time[¶](#lsapi-max-process-time "Permanent link")

In ProcessGroup mode, the `LSAPI_MAX_PROCESS_TIME` environment variable (default 3600 seconds) controls the maximum processing time allowed when processing a request. If a child process cannot finish processing the request in the given time period, it will be killed by the parent process. This option can get rid of a dead or a runaway child process. To find out more about `LSAPI_MAX_PROCESS_TIME` and on how to set it up check out our [Options page](lsws__extapp__php__configuration__options.md) which has all of the variables and directives you can set.

### PHP INI[¶](#php-ini "Permanent link")

The `max_execution_time` setting configures the maximum time in seconds a PHP script is allowed to run before it is terminated by the parser. This helps prevent poorly written scripts from tying up the server. This time does not include time spent in system calls or network I/O (unlike the `LSAPI_MAX_PROCESS_TIME` environment variable above). Thus a process will usually trigger `LSAPI_MAX_PROCESS_TIME` before triggering a `max_execution_time` setting of a similar length. The default setting is `30`.

Example setting (in a php.ini file):

```
max_execution_time=36000
```

## Idle[¶](#idle "Permanent link")

PHP idling has two configuration idling options: **Max Idle Time** and **Keep-Alive Timeout**.

The lifetime of worker processes is controlled by the **Keep Alive Timeout** setting, while the lifetime of the PHP process group is controlled by the **Max Idle Time** setting.

### Max Idle Time[¶](#max-idle-time "Permanent link")

PHP **Max Idle Time** specifies the maximum idle time before PHP is stopped by the server. Set this low to prevent these PHP processes from idling unnecessarily.

1. Go to your WebAdmin Console (`https://YOUR_SERVER_IP:7080`) and log in.
2. Next, navigate to **Configuration > Server > PHP > PHP Handler Defaults**.
3. Click **Edit**, then change **Max Idle Time (secs)** to your desired value, and click **Save**.
4. Navigate to **Actions** and press the icons next to **Restart Detached PHP Processes** and then **Apply Changes / Graceful Restart**.

When using Apache it may be necassary to have a higher **Max Idle Time** then the global one set in the WebAdmin Console. To accomplish this you can add the following to your Apache Virtual Host Include Files:

```
<IfModule LiteSpeed>
LS_EXTAPP_ENV LSAPI_PGRP_MAX_IDLE=3600
</IfModule>
```

### Connection Keep-Alive TImeout[¶](#connection-keep-alive-timeout "Permanent link")

Connection **Keep-Alive Timeout** specifies the maximum time to keep an idle persistent connection open.

1. Go to your WebAdmin Console (`https://YOUR_SERVER_IP:7080`) and log in.
2. Next, navigate to **Configuration > Server > Tuning > Connection**.
3. Click **Edit**, then change **Keep-Alive Timeout (secs)** to your desired value, and click **Save**.
4. Navigate to **Actions** and press the icons next to **Restart Detached PHP Processes** and then **Apply Changes / Graceful Restart**.

## Per-domain PHP[¶](#per-domain-php "Permanent link")

### Globally[¶](#globally_2 "Permanent link")

Normally LiteSpeed uses per-user PHP, even if a particular user has multiple domains. If you want to enable per-domain PHP for this case, you will need to manually add the `phpAppByDomain` setting to the LSWS configuration file at `/usr/local/lsws/conf/httpd_config.xml`.

```
<phpConfig>
    <phpAppByDomain>1</phpAppByDomain>
</phpConfig>
```

### For a Virtual Host[¶](#for-a-virtual-host "Permanent link")

`phpAppByDomain` is a global setting, which means that it applies to all domains. This can cause excessive resource usage if you don't, in fact, need all client domains to run as separate LSPHP processes. As of LSWS v6.1.2, you can use the Apache-style directive `DedicatePhpHandler` to enable a dedicated PHP handler selectively for a specific virtual host. Add the following to the Apache virtual host configuration:

```
<IfModule LiteSpeed>
    DedicatePhpHandler on
</IfModule>
```

### For a Domain[¶](#for-a-domain "Permanent link")

LSPHP environment variables are normally defined globally at **LSWS WebAdmin Console > Server > Environment > PHP tab**.

If you want to apply certain environment variables to a particular domain, you can do so by adding the following to the Apache virtual host configuration:

```
<IfModule LiteSpeed>
    DedicatePhpHandler on
    LS_EXTAPP_ENV   LSAPI_MAX_PROCESS_TIME=86400
    LS_EXTAPP_ENV LSAPI_PGRP_MAX_IDLE=3600
    LS_EXTAPP_ENV ...
    ...
</IfModule>
```
