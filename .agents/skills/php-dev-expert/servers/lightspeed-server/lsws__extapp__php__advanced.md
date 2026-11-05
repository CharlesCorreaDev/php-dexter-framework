# Advanced How-To | PHP | External Applications | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/php/advanced/

---

# Advanced[¶](#advanced "Permanent link")

## Set up Command Line Mode[¶](#set-up-command-line-mode "Permanent link")

Usually, LSPHP(LSAPI + PHP) is managed by LiteSpeed Web Server. In a clustered environment, though, with a single LiteSpeed Web Server or LiteSpeed Web ADC load balancing LSPHP processes running on multiple backend servers, it may be necessary to start LSPHP processes manually. LSPHP is an executable and can be started manually and bound to IPv4, IPv6, or Unix Domain Socket (UDS) addresses with the command line option `-b <address>`

1. First step is to start LSPHP with its `-b` option, this can be accomplished by running the following command in a terminal:

   ```
   $ sudo /path/to/lsphp -b <address>
   ```

Important

You will want to run this command on every server that you want to Load Balance LSPHP to.

- `/path/to/lsphp` - Path to and including the LSPHP binary.
- `<address>` - The address that the LSPHP binary is bound to via `IP_ADDRESS:PORT` or Unix Domain Socket. If using an IP, a PORT is required and can be any open port on your system. Here are a couple of examples:
  - **IPv4 + IPv6:** `[::]:PORT` will bind to every IPv4 and IPv6 IP on your server.
  - **IPv4:** `*:PORT` will bind to every IPv4 IP (and *only* IPv4 IPs) on your server.
  - **Specific IP:** `192.0.2.0:100` will bind to specific IPv4/IPv6 address. (Replace `192.0.2.0` and `100` with the specific IP and port on your system you want LSPHP to run on.)
  - **Unix Domain Socket:** `/var/run/name.sock` will bind to the specific Unix Domain Socket. (Replace path+name with where and what you want to call it.)

Info

[Environment Variables](lsws__extapp__php__configuration__options.md) can be added before the LSPHP executable. The `PHP_LSAPI_CHILDREN=nn` is required when run LSPHP is run as a service to handle concurrent requests. Be sure to replace `nn` with the value of the Max Connections for the External Application on the frontend LiteSpeed Web Server.

Here is an example when using Environment Variables:

```
$ sudo PHP_LSAPI_MAX_REQUESTS=5000 PHP_LSAPI_CHILDREN=35 /path/to/lsphp -b <address>
```

1. Go to your WebAdmin Console (`https://192.0.2.0:7080`) and log in.
2. On the frontend LiteSpeed Web Server you will need to set up an External Application for each server you set up to run LSPHP.

   1. Navigate to **Configuration > Server > External Application**.
   2. Click **Add**, then select **Type: LSAPI App**, and click **Next**.
   3. While on this page be sure to fill in all the required fields and once done click **Save**:
      - Set **Name** to any name you have not used yet for an External Application.
      - Set **Address** to the IP\_ADDRESS:PORT or UDS that LSPHP is listening on.
      - Set **Max Connections** to what you set `PHP_LSAPI_CHILDREN` to.
      - Set **Initial Request Timeout** to `60`.
      - Set **Retry Timeout** to `0`.
      - Set **Start By Server** to `No`.

   [![!webadmin-extapp-extphp](../images/advanced01.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced01.png)
3. Set up LiteSpeed Web Server to load balance these LSPHP External Applications.

   1. Navigate to **Configuration > Server > External Application**.
   2. Click **Add**, then select **Type: Load Balancer**, and click **Next**.
   3. While on this page be sure to fill in all the required fields and once done click **Save**:
      - Set **Name** to any name you have not used yet for an External Application.
      - Set **Workers** to the `EXT_APP_TYPE::EXT_APP_NAME` that you set up previously for each of the LSPHP backend servers you have.

   [![!webadmin-extapp-loadbalancer](../images/advanced04.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced04.png)
4. Once all the External Applications have been set up, you will need to set up a **Script Handler** so all `.php` files are run by the **Load Balancer**.

   1. Navigate to **Configuration > Server > Script Handler**.
   2. Click **Add**, then while on this page be sure to fill in all the required fields and once done click **Save**:
      - Set **Suffixes** to `php`.
      - Set **Handler Type** to `Load Balancer`.
      - Set **Handler Name** to the name of the **Load Balancer** that you setup.

   [![!webadmin-extapp-sh-lb](../images/advanced02.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced02.png)
5. Now that everything has been set up, navigate to **Actions** and press the icons next to **Restart Detached PHP Processes** and then **Apply Changes / Graceful Restart**. [![!webadmin-restart](../images/advanced03.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced03.png)

Notes

- When using a load balancing LSPHP backend setup, everything with PHP files needs to be the same. This means the file locations and files need to be the same on both the master and slave servers.
- For load balancing a backend LSPHP setup, since PHP runs on different servers, a central shared PHP session storage (like memcached, redis, etc) is recommended as LSWS load balancing is not session aware. An ideal set up is using LiteSpeed Web ADC which is session aware in front of LiteSpeed Web Server clusters.

## Unmanaged Process Groups[¶](#unmanaged-process-groups "Permanent link")

To connect an unmanaged PHP handler via a socket address defined within the LiteSpeed PHP handler configuration, add the `LSPHP_ProcessGroup unmanaged` directive to the Apache configuration at the server level or at the virtual host level, like so:

```
<IfModule LiteSpeed>
LSPHP_ProcessGroup unmanaged
</IfModule>
```

This is useful in a situation where you want to use LSPHP command-line mode with some variables in a LiteSpeed external app template, like so:

```
<extProcessorList>
  <extProcessor>
    <type>lsapi</type>
    <name>extapp-php</name>
    <address>uds://tmp/lsphp-$VH_USER.sock</address>
    <maxConns>35</maxConns>
    <initTimeout>60</initTimeout>
    <retryTimeout>0</retryTimeout>
    <respBuffer>0</respBuffer>
    <autoStart>0</autoStart>
  </extProcessor>
</extProcessorList>
```

If you are defining a UNIX socket by using `$VH_USER` or `$VH_NAME` variables in the `<address>` path of the external app, like in the example above, the `LSPHP_ProcessGroup unmanaged` directive makes sure that the variable is applied.

## Per-User PHP.ini[¶](#per-user-phpini "Permanent link")

If you are using CloudLinux with CL PHP Selector, the following instructions do not apply. Please refer to CL's ["substitute global php.ini for individual customer"](https://docs.cloudlinux.com/cloudlinuxos/cloudlinux_os_components/#substitute-global-php-ini-for-individual-customer) documentation.

If you are running LiteSpeed Web Server with Apache configurations, or LiteSpeed Native configs read on, as we discuss the following:

1. [Define `PHPRC` or `PHP_INI_SCAN_DIR` for a domain on cPanel server](#define-phprc-or-php_ini_scan_dir-for-a-domain-on-cpanel-server)
2. [Define `PHPRC` at the Server Level in the WebAdmin Console](#define-phprc-at-the-server-level-in-the-webadmin-console)
3. [Define `PHP_INI_SCAN_DIR` at the Server Level in the WebAdmin Console](#define-php_ini_scan_dir-at-the-server-level-in-the-webadmin-console)
4. [Define `PHPRC` in Apache Configs](#define-phprc-in-apache-configs)
5. [Define `PHPIniDir` in Apache Configs](#define-phpinidir-in-apache-configs)
6. [Use `.user.ini` with LSPHP](#use-userini-with-lsphp)
7. [Override External Application Environment Variables](#override-external-application-environment-variables)
8. [Use of `disable_functions`](#use-of-disable_functions)

### Notes for LiteSpeed Native users[¶](#notes-for-litespeed-native-users "Permanent link")

- ***PHP suEXEC** must be enabled in LiteSpeed Web Server!*
- Make sure the `php.ini` file is readable by the **Run As User** user.
- [Option 3](#define-php_ini_scan_dir-at-the-server-level-in-the-webadmin-console) can be used along with options [1](#define-phprc-or-php_ini_scan_dir-for-a-domain-on-cpanel-server), [2](#define-phprc-at-the-server-level-in-the-webadmin-console), or [4](#define-phprc-in-apache-configs) without conflicts. However, this should rarely be needed.
- [Option 4](#define-phprc-in-apache-configs) takes precedence over options [1](#define-phprc-or-php_ini_scan_dir-for-a-domain-on-cpanel-server) and [2](#define-phprc-at-the-server-level-in-the-webadmin-console), should they be used at the same time.
- Changes in the `php.ini` will not be picked up until new PHP process starts. The `php.ini` is read for the first time when a PHP process starts.
- Per-user `php.ini` files are not compatible with Daemon mode. Our [two other PHP process modes](lsws__extapp__php__configuration__modes.md) both support per-user `php.ini`.
- For native LSWS installs, vhost variables (`$VH_ROOT`, `$VH_NAME`, `$VH_USER`, etc.) need to be inside of a **Virtual Host > External App > Environment** Section, and not inside the general **Server > External App > Environment** Section. This is because the variables are expanded on start up, so the `VH_*` variables cannot be expanded during server-level configurations.

### Notes for cPanel users[¶](#notes-for-cpanel-users "Permanent link")

LiteSpeed Web Server supports cPanel [MultiPHP INI Editor](https://docs.cpanel.net/cpanel/software/multiphp-ini-editor-for-cpanel/) out of the box

When a user logs in to cPanel and edits PHP settings through cPanel's MultiPHP INI Editor, the editor will save changes to three files in `/home/$USER/public_html/`: the `php.ini` file, the `user.ini` file, and the `.htaccess` file.

Example updates in `.htaccess`:

```
# BEGIN cPanel-generated php ini directives, do not edit
# Manual editing of this file may result in unexpected behavior.
# To make changes to this file, use the cPanel MultiPHP INI Editor (Home >> Software >> MultiPHP INI Editor)
# For more information, read our documentation (https://go.cpanel.net/EA4ModifyINI)
<IfModule php7_module>
 php_flag display_errors Off
 php_value max_execution_time 57
 php_value max_input_time 60
 php_value max_input_vars 1000
 php_value memory_limit 33M
 php_value post_max_size 8M
 php_value session.gc_maxlifetime 1440
 php_value session.save_path "/var/cpanel/php/sessions/ea-php72"
 php_value upload_max_filesize 2M
 php_flag zlib.output_compression Off
</IfModule>
<IfModule lsapi_module>
 php_flag display_errors Off
 php_value max_execution_time 57
 php_value max_input_time 60
 php_value max_input_vars 1000
 php_value memory_limit 33M
 php_value post_max_size 8M
 php_value session.gc_maxlifetime 1440
 php_value session.save_path "/var/cpanel/php/sessions/ea-php72"
 php_value upload_max_filesize 2M
 php_flag zlib.output_compression Off
</IfModule>
# END cPanel-generated php ini directives, do not edit
```

Example updates in `.user.ini`:

```
; cPanel-generated php ini directives, do not edit
; Manual editing of this file may result in unexpected behavior.
; To make changes to this file, use the cPanel MultiPHP INI Editor (Home >> Software >> MultiPHP INI Editor)
; For more information, read our documentation (https://go.cpanel.net/EA4ModifyINI)
[PHP]
display_errors = Off
max_execution_time = 57
max_input_time = 60
max_input_vars = 1000
memory_limit = 33M
post_max_size = 8M
session.gc_maxlifetime = 1440
session.save_path = "/var/cpanel/php/sessions/ea-php72"
upload_max_filesize = 2M
zlib.output_compression = Off
```

Example updates in `php.ini`:

```
; cPanel-generated php ini directives, do not edit
; Manual editing of this file may result in unexpected behavior.
; To make changes to this file, use the cPanel MultiPHP INI Editor (Home >> Software >> MultiPHP INI Editor)
; For more information, read our documentation (https://go.cpanel.net/EA4ModifyINI)
display_errors = Off
max_execution_time = 57
max_input_time = 60
max_input_vars = 1000
memory_limit = 33M
post_max_size = 8M
session.gc_maxlifetime = 1440
session.save_path = "/var/cpanel/php/sessions/ea-php72"
upload_max_filesize = 2M
zlib.output_compression = Off
```

You probably noticed that the same changes are being saved to three different files at the same time. This is because different PHP handlers will use different files to apply the settings. You may change the handler at some point, and the three files will be updated accordingly to ensure the cPanel MultiPHP INI Editor settings will continue to apply.

- Apache SuPHP uses `php.ini`.
- Apache PHP CGI and PHP-fpm use `.user.ini`.
- CloudLinux `mod_lsapi` for Apache uses `.htaccess`.
- LiteSpeed uses `.htaccess`.

LiteSpeed is compatible with cPanel MultiPHP INI Editor out of the box with no extra configuration required. Please also keep in mind that you cannot manually change settings in any of the files through SSH. You must use cPanel MultiPhP INI Editor GUI to make any changes for your test.

If at any time you explicitly want to apply `/home/$USER/public_html/php.ini`, regardless of the cPanel default multi-file implementation, you will need to use `PHP_INI_SCAN_DIR` to manually set it up as instructed below. However, this is not recommended, and you are encouraged to just use cPanel MultiPHP INI Editor.

### 1. Define PHPRC or PHP\_INI\_SCAN\_DIR for a domain on cPanel server[¶](#1-define-phprc-or-php_ini_scan_dir-for-a-domain-on-cpanel-server "Permanent link")

To Define `PHPRC` or `PHP_INI_SCAN_DIR` for a particular domain/virtual host on a control panel, such as cPanel, you will need to create an include file and define `PHPRC` or `PHP_INI_SCAN_DIR` in it.

Most likely you will need to install an extra Apache module for it, like this, or something similar:

```
yum install ea-apache24-mod_env
```

Otherwise Apache may return an error like this:

```
Apr 05 16:21:46 cptest.com restartsrv_httpd[21931]: AH00526: Syntax error on line 1 of /etc/apache2/conf.d/userdata/std/2_4/wpuser99/wpuser99.com/ini.conf:
Apr 05 16:21:46 cptest.com restartsrv_httpd[21931]: Invalid command 'SetEnv', perhaps misspelled or defined by a module not included in the server configuration
```

For example, on an EA4 CentOS 7 server, to enable custom `php.ini` for `example.com`, create file, like so:

```
/etc/apache2/conf.d/userdata/std/2_4/$USER/example.com/customphpini.conf
```

Add the following to the file:

```
PHP_INI_SCAN_DIR=/home/$USER/public_html/
```

Or add this:

```
SetEnv PHPRC /home/$USER/public_html/
```

Then, edit your virtual host configuration file (`/etc/apache2/conf/httpd.conf`) and add the new `customphpini.conf` file as an include, like so:

```
Include "/etc/apache2/conf.d/userdata/std/2_4/$USER/example.com/*.conf"
```

Please be aware that you need to be very careful before you set the above up. cPanel EA4 only reads this specified `php.ini` when the `PHPRC` is set, and it won't read original EA4 `php.ini` or other modules in the scan folder. If the user-specified `php.ini` doesn't include a complete set of modules, it may lead to errors.

An example of one such error is missing MySQL.

```
"If you set the suPHP_ConfigPath directive, the specified php.ini file must be a complete .ini file."

"To ensure that your users receive a complete php.ini file, run the following command to combine your existing files:"

cat /opt/cpanel/ea-php##/root/etc/php.ini /opt/cpanel/ea-php##/root/etc/php.d/*.ini > /path/to/specified/php.ini
```

### 2. Define PHPRC at the Server Level in the WebAdmin Console[¶](#2-define-phprc-at-the-server-level-in-the-webadmin-console "Permanent link")

Defining the `PHPRC` environment variable in the WebAdmin Console allows you to use a variable that can set a standard location for the `php.ini` file in each virtual host. This method is also applicable to a control panel environment such as cPanel, but it will modify the behavior of any virtual hosts using this external application. As such, adding an individual include file for the vhost's Apache configuration is normally recommended as described as above.

Navigate to **WebAdmin Console > Server > External App > lsphp5**, and enter `PHPRC=` and the `php.ini` directory in the **Environment** setting.

Example

```
PHPRC=$VH_ROOT/public_html
```

The variables available for use are:

1. `$VH_ROOT`: the virtual host's home directory
2. `$VH_NAME`: the virtual host's domain
3. `$VH_USER`: the virtual host's user

Note

Using this method will cause LSWS to ignore any global `php.ini` files and only use the user-defined `php.ini`. However, if no user-defined `php.ini` found, LSWS will fall back on the global `php.ini` .

LiteSpeed Web Server may automatically configure external applications and script handlers for control panels, hence it may not have external applications or script handlers anymore.

[![](../images/advanced10.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced10.png)

If you want to define `PHPRC` environment variable for all external applications, you can use the **PHP** tab.

### 3. Define PHP\_INI\_SCAN\_DIR at the Server Level in the WebAdmin Console[¶](#3-define-php_ini_scan_dir-at-the-server-level-in-the-webadmin-console "Permanent link")

Using the `PHP_INI_SCAN_DIR` environment variable allows you to set a standard location for the `php.ini` file for each virtual host. Unlike the `PHPRC` environment variable, though, `PHP_INI_SCAN_DIR` allows the use of the global `php.ini` file with the addition of a per-user `php.ini`.

In a control panel environment such as with cPanel, ea-phpxx will normally load the main `php.ini`, then scan additional `.ini` files, like in this example with ea-php73:

[![](../images/advanced11.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced11.png)

To avoid missing any additional folders when scanning from `/opt/cpanel/ea-php73/root/etc/php.d`, you should specify multiple additional scanning folders in `PHP_INI_SCAN_DIR`, separating them with `:`.

In your external application **Environment** setting (**WebAdmin Console > Server > External App > lsphp73**), enter:

```
PHP_INI_SCAN_DIR=/opt/cpanel/ea-php73/root/etc/php.d:$VH_ROOT/public_html
```

Or use a variable:

```
PHP_INI_SCAN_DIR=:$VH_ROOT/public_html
```

[![](../images/advanced12.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced12.png)

After you save the change and restart LSWS, the phpinfo page of the accounts using lsphp73 should change to something similar to the following by scanning additional `.ini` for additional folders from `$VH_ROOT/public_html`:

[![](../images/advanced13.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced13.png)

The variables available for use are:

1. `$VH_ROOT`: the virtual host's home directory
2. `$VH_NAME`: the virtual host's domain
3. `$VH_USER`: the virtual host's user

Note

- This method is not recommended if you replace Apache with suPHP. When replacing Apache with suPHP, the `PHPRC` environment variable is recommended.
- The `PHP_INI_SCAN_DIR` environment variable is available for PHP 5.2.7 and up.

LiteSpeed Web Server may automatically configure external applications and script handlers for control panels, hence it may not have external applications or script handlers anymore. If you want to define the `PHPRC` environment variable for all external applications, you can use the **PHP** tab in WebAdmin Console

### 4. Define PHPRC in Apache Configs[¶](#4-define-phprc-in-apache-configs "Permanent link")

Defining the `PHPRC` environment variable in Apache's virtual host configurations allows you to set a `php.ini` location for a specific virtual host.

In the Apache virtual host configuration file, add the following line:

```
SetEnv PHPRC /php.ini/directory
```

Note

Using this method will cause LSWS to ignore any global `php.ini` files and only use the user-defined `php.ini`.

### 5. Define PHPIniDir in Apache Configs[¶](#5-define-phpinidir-in-apache-configs "Permanent link")

Using the `PHPIniDir` directive in Apache's virtual host configurations allows you to set a `php.ini` location for the main virtual host of a specific user.

In the Apache virtual host configuration file, add the following line:

```
PHPIniDir /path/to/php.ini/directory
```

Note

The `PHPIniDir` directive is effective *only if* placed in the first (or main domain) vhost of the user. Placing this directive in a subdomain vhost will be cause it to be ignored.

### 6. Use .user.ini with LSPHP[¶](#6-use-userini-with-lsphp "Permanent link")

To make `.user.ini` work with LSPHP, you need to change the `lsphpxx` external app configuration by adding the following environment variable:

```
LSPHP_ENABLE_USER_INI=on
```

This directive is supported since PHP LSAPI version V6.10.

### 7. Override External Application Environment Variables[¶](#7-override-external-application-environment-variables "Permanent link")

The special Apache directive `LS_EXTAPP_ENV` can be used on cPanel or other control panel environments to override external application environment variables.

If you have set up `PHP_INI_SCAN_DIR` in step 3, and `PHP_INI_SCAN_DIR` in step 1, LSWS will use `PHP_INI_SCAN_DIR` from an external app environment instead of using Apache directives. You can override this external app environment using a new special Apache directive: `LS_EXTAPP_ENV`. Place the directive in the Apache virtual host include file, like so:.

For example, say you have set the following in an external app environment:

```
PHP_INI_SCAN_DIR=/home/USER1/public_html
```

If you want to override it to another location, such as `/home/USER1/data`, you can add the following to the Apache virtual host include file:

```
<IfModule Litespeed>
LS_EXTAPP_ENV PHP_INI_SCAN_DIR=/home/USER1/data/
</IfModule>
```

### 8. Use of disable\_functions[¶](#8-use-of-disable_functions "Permanent link")

Please be aware, for security and performance reasons, `disable_functions` is unique and can only be set in `php.ini`, cannot be used in `.htaccess`, nor be overridden via `php_admin_value`. You can only apply `disable_functions` via global or per-user `php.ini`. It would be a security flaw if a user could modify it freely, hence it has been restricted by design in PHP itself, not by LiteSpeed.

### Troubleshoot[¶](#troubleshoot "Permanent link")

Some PHP extensions are missing after being loaded with per user `php.ini`, for example

`Your PHP installation appears to be missing the MySQL extension which is required by WordPress.`

This is because once custom `php.ini` is loaded, the default `php.ini` will be ignored. Therefore, extensions will not be loaded.

The easiest way to resolve this problem is to copy the contents of the default `php.ini` into the custom `php.ini` by the following command:

```
cat /opt/cpanel/ea-phpXX/root/etc/php.ini /opt/cpanel/ea-phpXX/root/etc/php.d/*.ini > /path/to/php.ini
```

Replace `ea-phpXX` and `/path/to/php.ini` with the appropriate version and path.

Verify the `php.ini` content and restart LSWS if necessary, as a change in `php.ini` will not take effect until a new PHP process starts. The `php.ini` is read for the first time when a PHP process starts.

## Per-Directory PHP[¶](#per-directory-php "Permanent link")

It is possible to use different versions of PHP in different directories, but only with a Native LiteSpeed Web Server installation. It is not applicable for control panel or Apache configuration modes.

### Set Different PHP Per Virtual Host[¶](#set-different-php-per-virtual-host "Permanent link")

When you use Native LSWS without Apache configuration, you can define the PHP version through a PHP handler for each virtual host. To do so, define multiple server-level external PHP apps, and then assign different handlers at the server level and virtual host level. If no virtual-host-level hander is defined, the virtual host will inherit the server-level PHP configuration.

[![](../images/advanced05.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced05.png) Let's look at an example. In the screenshot above, we set these external apps at the server level: `lsphp54`, `lsphp55`, `lsphp56`, `lsphp70`, `lsphp71`, `lsphp72`.

The configuration for the `lsphp70` external app looks like this, and the rest are similar to it:

- **Name**: `lsphp70`
- **Address**: `uds://tmp/lshttpd/lsphp70.sock`
- **Max Connections**: `35`
- **Environment**: `PHP_LSAPI_MAX_REQUESTS=500` `PHP_LSAPI_CHILDREN=35`
- **Initial Request Timeout (secs)**: `60`
- **Retry Timeout (secs)**: `0`
- **Persistent Connection**: `Yes`
- **Response Buffering**: `No`
- **Auto Start**: `Through CGI Daemon (Async)`
- **Command**: `/usr/local/lsws/lsphp70/bin/lsphp`
- **Back Log**: `100`
- **Instances**: `1`
- **Priority**: `0`
- **Memory Soft Limit (bytes)**: `2047M`
- **Memory Hard Limit (bytes)**: `2047M`
- **Process Soft Limit**: `400`
- **Process Hard Limit**: `500`

Settings not shown above, we left as `Not Set`.

[![](../images/advanced07.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced07.png)

At the server level, we define `lsphp71` as the default handler to handle `.php` and `.php5`.

[![](../images/advanced08.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced08.png)

The virtual host will inherit the server default handler `lsphp71` unless overridden. For this virtual host, we override the PHP version to `lsphp56`.

### Set Different PHP Per Directory Within One Virtual Host[¶](#set-different-php-per-directory-within-one-virtual-host "Permanent link")

I you would like to set different PHPs *within* a single virtual host, there is some additional configuration you can do. Most likely you'll want to do this on a per-directory basis, so in addition to the above steps, you will set more handlers at the server-level under **Script Handler**, and then use `.htaccess` to change the PHP version.

[![](../images/advanced09.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/advanced09.png)

In this example, we added the following handlers to server level, in addition to the existing `.php` and `.php5` suffixes: `.php54`, `.php55`, `.php56`, `.php70`, `.php71`, `.php71`, and `.php72`.

We set the virtual host default to use`lsphp56`, but we can specify different versions for different subdirectories.

Under the subdirectory `/sub1/`, we can change it to use `lsphp72`. Edit the subdirectory's `.htaccess` and add the following line:

```
ForceType application/x-httpd-php72
```

### Set Different php.ini Per Directory[¶](#set-different-phpini-per-directory "Permanent link")

The above instructions will set different PHP versions by using server-level-defined external apps, hence only the global `php.ini` is set for each version. To define a different `php.ini` per directory, give all server level external apps at the virtual host level different names and add the `PHPRC` environment variable definition to `php.ini` for each version under that virtual host.
