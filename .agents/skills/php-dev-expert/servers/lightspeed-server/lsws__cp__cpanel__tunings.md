# Tuning LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/tunings/

---

# Tuning[¶](#tuning "Permanent link")

## PHP suEXEC Max Conn[¶](#php-suexec-max-conn "Permanent link")

**PHP suEXEC Max Conn** specifies the maximum number of concurrent PHP processes that can be created by LSWS for each user when running PHP scripts in suEXEC mode. The default setting is `10`. Generally this should be a good enough limit for the shared hosting environment, since you may not want too many processes running for each account on a server with many accounts. However, if you do have a need to allow more PHP processes for each account, you can adjust the value from `10` to a higher number, such as `40`, or `100`.

If you see something like this in `stderr.log`:

```
[STDERR] Reached max children process limit: 10, extra: 3, current: 13, please increase LSAPI_CHILDREN
```

try to increase **LSAPI\_CHILDREN**.

In a control panel environment, you would change the **PHP suEXEC Max Conn** setting, found under **Configuration > Server > General > Using Apache Configuration File**, *not* the **LSAPI\_CHILDREN** setting in **External Apps**.

If you want to explore additional ways to override **PHP suEXEC Max Conn** settings through the Apache configuration, either from the server level or the virtual host level, please see [the **Advanced PHP Configuration** documentation](lsws__extapp__php__configuration__advanced.md).

## Temporary/Swap Directories[¶](#temporaryswap-directories "Permanent link")

### RAM disk[¶](#ram-disk "Permanent link")

[**RAM Disk Path**](http://www.litespeedtech.com/docs/webserver/config/tuning#ramDiskPath) can be customized via WebAdmin Console under **Configuration > Server > Tuning > RAM Disk Path**. By default, `/dev/shm/lsws` is used. if /dev/shm is too small, you can create a dedicated tmpfs partition for that.

### SWAP directory[¶](#swap-directory "Permanent link")

[**Swap Directory**](http://litespeedtech.com/docs/webserver/config/general#swappingDir) is used to store big request bodies and dynamically generated responses, to reduce the system memory usage. It is different than an OS swap partition.

By default, it is set to `/tmp/lshttpd/swap`. If `/tmp` partition does not have enough space, or runs out of disk space, it could affect server stability.

You can move it to a partition on a fast disk, like an SSD. Or, if the server has enoguh free memory, create a RAM disk (tmpfs partition) for it.

### Static File GZIP Cache Directory[¶](#static-file-gzip-cache-directory "Permanent link")

[**Static Cache Directory**](https://www.litespeedtech.com/docs/webserver/config/tuning#gzipCacheDir) is used to store compressed versions of static files, including both GZIP-compressed and Brotli-compressed versions. By default, it uses [**Swap Directory**](http://litespeedtech.com/docs/webserver/config/general#swappingDir), but can be changed to its own directory. If the partition holding the directory runs out of space, it could affect server stability. We recommend using an SSD-backed partition with enough free disk space for that.

## SSL/TLS tuning[¶](#ssltls-tuning "Permanent link")

### Enable TLS v1.3[¶](#enable-tls-v13 "Permanent link")

By default, cPanel enables TLS 1.2 but not TLS 1.3.

To enable TLS 1.3 in WHM, navigate to **Service Configuration > Apache Configuration > Global Configuration**, and set **SSL/TLS Protocols** to `ALL -SSLv3 -TLSv1 -TLSv1.1`.

Save and restart LSWS.

Tip

When you set **SSL/TLS Protocols** to `ALL -SSLv3 -TLSv1 -TLSv1.1` you are really saying, "use all available protocols, except SSLv3, TLSv1, and TLSv1.1." This will automatically allow new protocols to be enabled. If you would prefer to be explicit about it, you can set **SSL/TLS Protocols** to just the ones you know you want to use. For example: `SSLProtocol TLSv1.2 TLSv1.3`, but when new protocols are introduced, you will need to remember to update this setting to enable them.

Note

SSLv2 is obsolete and a security risk. It is not supported by LSWS and therefore it is not necessary to explicitly exclude it from the list of enabled protocols. However SSLv2 *is still supported by Apache*. If there is a chance that you may switch temporarily to Apache at any time, you should set **SSL/TLS Protocols** to `ALL -SSLv2 -SSLv3 -TLSv1 -TLSv1.1` and ensure that Apache never enables SSLv2.

### Customize SSL Ciphers[¶](#customize-ssl-ciphers "Permanent link")

In WHM, navigate to **Service Configuration > Apache Configuration > Global Configuration**.

Set **SSL Cipher Suite** to the cipher you want to use.

Save and restart LSWS.

Notes

- The default value usually is a good choice. Changing to a bad cipher value may break the SSL handshake, and cause a broken site for some old browsers.
- Cipher suites for TLSv1.3 are not changeable. This is because BoringSSL is used for HTTP/3, and it does not have an API available to modify the cipher suits.
- If you want to use ciphers with an ECDSA handshake, like:

  ```
  ECDHE-ECDSA-AES256-GCM-SHA384
  ECDHE-ECDSA-AES128-GCM-SHA256
  ```

  An SSL certificate signed with an RSA private key does not work. An ECC certificate is required. Starting from LSWS v5.4.9, LiteSpeed's WHM/cPanel Plugin can generate ECC Certificates. Please see [our ECC Certificate Quick Start Guide](lsws__cp__cpanel__ecc-quickstart.md) to learn how to generate ECC Certificates and how to enable multi certificates on LiteSpeed.

Warning

LiteSpeed uses BoringSSL. Support for the following cipher has been removed in BoringSSL:

```
DHE-RSA-AES128-GCM-SHA256
DHE-RSA-AES256-GCM-SHA384
```

This may impact the handshake with Internet Explorer 11 on Windows 8.1. If you really care about that, you may have to enable a weaker AES\_CBC cipher or switch to an ECC certificate. For a weaker cipher, you can use:

```
ECDHE-RSA-AES128-SHA
ECDHE-RSA-AES256-SHA
```

The following ciphers have also been removed from BoringSSL. Please use other available BoringSSL ciphers.

```
AES128-SHA256
AES256-SHA256
ECDHE-ECDSA-AES128-SHA256
ECDHE-ECDSA-AES256-SHA384
ECDHE-RSA-AES128-SHA256
ECDHE-RSA-AES256-SHA384
```

## Harden Server Security[¶](#harden-server-security "Permanent link")

### Disable PHP Override[¶](#disable-php-override "Permanent link")

You can disable the PHP override in `.htaccess` with LiteSpeed Web Server.

`php_value` and `php_flag` can be used in Apache configuration or `.htaccess` to override `php.ini` settings. However, they are only supported by Apache's `mod_php` handler, which is deprecated in most of the control panel systems, having been replaced by php-fpm, fastcgi or lsphp. As a result, if you place `php_value` or `php_flag` in .htaccess, Apache should return an error.

You could see any one of the following errors:

```
500 internal server error

503 Invalid command 'php_flag', perhaps misspelled or defined by a module not included in the server configuration.
The following error can be found in the domain error log in Domains > example.com > Logs:
/var/www/vhosts/example.com/httpdocs/.htaccess: Invalid command 'php_value', perhaps misspelled or defined by a module not included in the server configuration

/var/www/vhosts/example.com/httpdocs/.htaccess: Invalid command 'php_flag', perhaps misspelled or defined by a module not included in the server configuration

/var/www/vhosts/example.com/httpdocs/.htaccess: RewriteRule: bad flag delimiters

/var/www/vhosts/example.com/public_html/.htaccess: Invalid command 'suPHP_ConfigPath', perhaps misspelled or defined by a module not included in the server configuration.
```

LiteSpeed Web Server uses lsphp, which supports `php_value` and `php_flag` usage in .htaccess. You can use these and LSWS will not return a 500 error. LSWS is more tolerant than Apache of these PHP overrides.

In some cases, you may want to disable such PHP overrides in .htaccess for LiteSpeed as well. To achieve this, add

```
<IfModule LiteSpeed>
  DisablePhpOverride htaccess
</IfModule>
```

to `/etc/apache2/conf.d/includes/pre_main_global.conf`.

### Disable CGI Scripts and Disallow .htaccess Override[¶](#disable-cgi-scripts-and-disallow-htaccess-override "Permanent link")

To disable CGI scripts such as `.cgi`, `.pl`, etc, You need to turn off CGI within the Apache configuration, like so:

```
Options -ExecCGI
```

For control panel users, you may need to modify the related template to make the change permanent.

You must also prevent users from overriding the **ExecCGI** option. Do so with the **DisableCgiOverride** option by adding the following to `/etc/apache2/conf.d/includes/pre_main_global.conf`:

```
<IfModule LiteSpeed>
  DisableCgiOverride On
</IfModule>
```

When **DisableCgiOverride** is `ON`, it will impossible to add new CGI scripts through `.htaccess`. If you need to add a new CGI script handler, you have to do it in the virtual host config file, like this:

```
Options -Indexes +ExecCGI
AddHandler cgi-script .pl
```

For more information, please read [Closing the Loopholes](http://blog.litespeedtech.com/2013/03/15/closing-the-loopholes-disable-cgi-override/).

### Symlink Attack Prevention[¶](#symlink-attack-prevention "Permanent link")

A symlink race attack is often used against shared hosting servers. It allows a malicious user to serve files that belong to other users by creating a symbolic link to those files. It is often used to access config.php files that belong to other users.

#### LSWS **Force Strict Ownership**[¶](#lsws-force-strict-ownership "Permanent link")

The **Force Strict Ownership** setting in LSWS Admin specifies whether to enforce strict file ownership checking. If it is enabled, the web server will check if the owner of the file being served is the same as the owner of the virtual host. If it is different, a `403 Access Denied` error will be returned.

It protects LSWS from serving a bad symlink directly, however it won't protect PHP/CGI scripts from following a symlink.

#### CloudLinux Kernel Patch[¶](#cloudlinux-kernel-patch "Permanent link")

To stop PHP/CGI script from executing unwanted symlink traversal, you can use [CloudLinux's free kernel patch for symlink protection](https://www.cloudlinux.com/imunify360-imunifysensor-blog/entry/the-kernelcare-extra-patchset-with-symlink-protection-is-now-available).

### Disable mod\_userdir[¶](#disable-mod_userdir "Permanent link")

On cPanel, there is an [Apache mod\_userdir tweak](https://documentation.cpanel.net/display/72Docs/Apache+mod_userdir+Tweak), which you can use to disable/enable `mod_userdir` for Apache. When you are running Apache, `mod_userdir` is not compatible with the following modules/handlers and is actually disabled when `mod_passenger`, `mod_ruid`, `mod_itk`, `PHP-FPM`, or the CGI handler is used.

Sometimes, when you disable `mod_userdir` on Apache, it seems to still be working with LSWS. Here's how you correctly disable mod\_userdir for LSWS on cPanel:

```
vi /etc/apache2/conf/httpd.conf
```

In server-level configuration, add the following:

```
<IfModule userdir_module>
  UserDir public_html
  <IfModule ruid2_module>
    UserDir disabled
  </IfModule>
  <IfModule mpm_itk.c>
    UserDir disabled
  </IfModule>
  <IfModule mod_passenger.c>
    UserDir disabled
  </IfModule>
</IfModule>
```

In vhost-level configuration, add the following:

```
<IfModule userdir_module>
 <IfModule !mpm_itk.c>
  <IfModule !ruid2_module>
  <IfModule !mod_passenger.c>
    UserDir disabled
    UserDir enabled check10cache
  </IfModule>
 </IfModule>
 </IfModule>
</IfModule>
```

Apache may use `itk`, `ruid2` and/or `mod_passenger`. In any of these cases, `mod_userdir` is disabled on Apache. LSWS does not use config for `ruid2`, `itk` and `mod_passenger`, hence only the following directive is applied, which actually *enables* `mod_userdir`.

```
UserDir public_html
```

To fix this, you can add `UserDir disabled` to `pre_virtualhost_global.conf`:

vi /etc/apache2/conf.d/includes/pre\_virtualhost\_global.conf

```
<IfModule LiteSpeed>
UserDir disabled
</IfModule>
```

and then add `userdir` to the list of Apache modules to ignore in LSWS configuration:

Navigate to **LSWS WebAdmin > Configuration > Server > General > Using Apache Configuration File** and add `userdir` to **Ignore Apache Modules**.

Restart LSWS after the configuration change.

```
service lsws restart
```

## Hotlink Protection[¶](#hotlink-protection "Permanent link")

A hotlink occurs when someone embeds content from your site into another site and uses *your bandwidth* to serve the files.

On cPanel, there is a [hotlink protection feature](https://docs.cpanel.net/cpanel/security/hotlink-protection/) you can enable for Apache. Navigate to **Home > Security > Hotlink Protection** and enable or disable it.

If you find that this does not work for LiteSpeed Web Server, you can add the following rewrite rules to the `.htaccess` of the relevant domains. be sure to replace `example.com` with your own domain:

```
RewriteEngine on
RewriteCond %{HTTP_REFERER} !^$
RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?example.com/.*$ [NC]
RewriteRule \.(jpg|jpeg|gif|png|bmp)$ - [F]
```

## Virtual-Host-Level Limiting[¶](#virtual-host-level-limiting "Permanent link")

### Bandwidth Throttling[¶](#bandwidth-throttling "Permanent link")

LiteSpeed Web Server version 5.0 introduces virtual-host-level bandwidth throttling. Virtual-host-level bandwidth throttling allows you to customize the total bandwidth a virtual host can consume.

You can globally set default virtual-host-level parameters within this Apache configuration file: `/etc/apache2/conf.d/includes/pre_virtualhost_global.conf`

Or, you can configure settings for a specific virtual host in a file that looks like this: `/etc/apache2/conf.d/userdata/ssl/2_4/$USER/example.com/throttling.conf`

#### VhostBandwidthLimit[¶](#vhostbandwidthlimit "Permanent link")

The `VhostBandwidthLimit` directive controls the amount of bandwidth allotted to a virtual host regardless of the number of concurrent visitors. It can only be set at the virtual host level in the Apache configuration file or through Apache-style config in native LSWS configuration.

Syntax:

```
VhostBandwidthLimit [Speed in bytes/s]
```

It takes 1 parameter:

- `Speed` indicates the total speed available to the virtual host. If `Speed` is less than `4097`, there is no limit.

Example: To limit a virtual host to use 1000KB bandwidth maximum. Add the following configuration through a virtual-host-level include file:

```
<IfModule LiteSpeed>
  VhostBandwidthLimit 1024000
</IfModule>
```

### Per-Client-Level Bandwidth Throttling[¶](#per-client-level-bandwidth-throttling "Permanent link")

LSWS's implementation of this bandwidth throttling follows syntax similar to that used by Apache's [mod\_bw](http://bwmod.sourceforge.net/files/mod_bw-0.7.txt).

Note

Bandwidth throttling directives can only be placed in a virtual-host configuration file, not an `.htaccess` file.

#### BandWidth[¶](#bandwidth "Permanent link")

The `BandWidth` directive controls the amount of bandwidth allotted to specific users.

Syntax: `BandWidth [Origin] [Speed in bytes/s]`

It takes 2 parameters:

- `Origin` is the origin of the connections. It can be a single IP address, a set of IP addresses, a network mask, or `all`.
- `Speed` indicates the total speed available to the `Origin`. If `Speed` is `0`, there is no limit.

#### MinBandWidth[¶](#minbandwidth "Permanent link")

LSWS only supports one use of `MinBandWidth`: `MinBandWidth all -1`. When used in conjunction with the `BandWidth` directive (as above), this specifies the top speed for all clients.

Usage:

```
<IfModule LiteSpeed>
  BandWidth all [Speed in bytes/s]
  MinBandWidth all -1
</IfModule>
```

#### LargeFileLimit[¶](#largefilelimit "Permanent link")

The `LargeFileLimit` directive allows you to throttle the bandwidth that certain large files use.

Syntax: `LargeFileLimit [Type] [Minimum Size in kilobytes] [Speed in bytes/s]`

It takes three parameters:

- `Type` is the suffix of files to be throttled. `*` can be used to designate all files.
- `Minimum Size` tells the server the size of files to be throttled.
- `Speed` indicates the maximum speed at which these files can be served.

Example

Limit `.avi` files of 500KB or greater to 10KB/s:

```
<IfModule LiteSpeed>
  LargeFileLimit .avi 500 10240
</IfModule>
```

#### MaxConnPerClient[¶](#maxconnperclient "Permanent link")

The `MaxConnPerClient` directive allows you to configure the maximum concurrent connections from one IP.

Syntax: `MaxConnPerClient [limit_for_connections]`

It takes one parameter:

- `limit_for_connections` is the number of connections permitted per client

### Virtual Host Static/Dynamic Request Limit[¶](#virtual-host-staticdynamic-request-limit "Permanent link")

A new feature as of LSWS 5.4.7 is a static/dynamic request-per-second limit for Apache virtual hosts. **DynReqPerSec** and **StaticReqPerSec** may be used in Apache virtual host configuration. They work the same way as Native static/dynamic request per second.
