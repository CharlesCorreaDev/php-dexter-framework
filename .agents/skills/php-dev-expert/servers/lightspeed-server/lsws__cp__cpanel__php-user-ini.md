# PHP Per User php.ini in LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/php-user-ini/

---

# Per-User php.ini[¶](#per-user-phpini "Permanent link")

To enable a per-user php.ini, you can use either `PHPRC` or `PHP_INI_SCAN_DIR`. If using CloudLinux and CL PHP Selector, please refer to [CloudLinux documentation](https://docs.cloudlinux.com/index.html?substitute_global_php_ini.html).

To apply per-user php.ini to all cPanel virtual hosts globally, you can use `PHPRC` or `PHP_INI_SCAN_DIR` in LiteSpeed PHP `Environment` configuration. To apply per-user php.ini to any particular apache virtual host, you can use `PHPRC` or `PHP_INI_SCAN_DIR` in that cPanel apache virtual host include file.

## To apply per-user php.ini to all virtual hosts globally[¶](#to-apply-per-user-phpini-to-all-virtual-hosts-globally "Permanent link")

To apply per-user php.ini to all virtual hosts globally, you can use either `PHPRC` or `PHP_INI_SCAN_DIR` at **LSWS Web Admin Console > PHP > Environment** as well as **LSWS Web Admin Console > External App > lsphpxx -> Environment**(need to apply to all lsphpxx). `PHPRC` will replace your ea-phpxx php.ini with a new php.ini at specified user's location, while `PHP_INI_SCAN_DIR` will load default ea-phpxx php.ini as well as aditional `*.ini`.

### PHPRC in the WebAdmin Console[¶](#phprc-in-the-webadmin-console "Permanent link")

Defining the `PHPRC` environment variable in the WebAdmin console allows you to use a variable that can set a standard location for the `php.ini` file in each virtual host. This method is also applicable to a control panel environment such as cPanel, but it will modify the behavior of any virtual hosts using this external application. Therefore, adding an individual include file for that host Apache configuration is normally recommended as described as above.

Note

Using this method will cause LSWS to prioritize user-defined `php.ini` files over all global `php.ini` files. Global `php.ini` will only be used, if no user-defined `php.ini` is found.

In your external application Environment setting (**WebAdmin console > Server > External App > lsphp**), enter: `PHPRC=variable/php.ini/directory`

Example:

```
PHPRC=$VH_ROOT/public_html
```

The variables available for use are:

Per user:

1. `$VH_ROOT`: the virtual host's home directory
2. `$VH_NAME`: the virtual host's domain
3. `$VH_USER`: the virtual host's user

Per site:

1. `$DOC_ROOT`: the domain's document root when enabling per domain php.ini.

In order to use `$DOC_ROOT`, you will need to manually add the `phpAppByDomain` setting to the LSWS configuration file at `/usr/local/lsws/conf/httpd_config.xml`

```
<phpConfig>
    <phpAppByDomain>1</phpAppByDomain>
</phpConfig>
```

#### DedicatePhpHandler[¶](#dedicatephphandler "Permanent link")

`phpAppByDomain` is a global setting, which means that it applies to all domains. This can cause excessive resource usage if you don't, in fact, need *all* client domains to run as separate lsphp processes. As of LSWS v6.1.2, you can use the Apache-style directive `DedicatePhpHandler` to enable a dedicated PHP handler selectively for a specific virtual host. Add the following to the Apache virtual host configuration:

```
<IfModule LiteSpeed>
    DedicatePhpHandler on
</IfModule>
```

#### External applications[¶](#external-applications "Permanent link")

LiteSpeed Web Server may automatically configure external applications and script handlers for control panels, hence it may not have external applications or script handlers anymore. If you want to define the `PHPRC` environment variable for all external applications, you can use the **PHP** tab:

[![!PHP Tab](../images/php-user-ini01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-user-ini01.png)

### PHP\_INI\_SCAN\_DIR in the WebAdmin Console[¶](#php_ini_scan_dir-in-the-webadmin-console "Permanent link")

Using the `PHP_INI_SCAN_DIR` environment variable allows you to set a standard location for the `php.ini` file for each virtual host. Unlike the `PHPRC` environment variable, though, `PHP_INI_SCAN_DIR` allows the use of the global `php.ini` file with the addition of a per-user `php.ini`.

Note

- This method is not recommended if you replace Apache with suPHP. When replacing Apache with suPHP, the `PHPRC` environment variable is recommended.
- The `PHP_INI_SCAN_DIR` environment variable is available for PHP 5.2.7 and up.

On cPanel, ea-phpxx will normally load the main `php.ini`, then scan additional `.ini` files, like in this example with ea-php73:

[![!Per User PHP](../images/php-user-ini02.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-user-ini02.png)

To avoid missing any additional folders when scanning from `/opt/cpanel/ea-php73/root/etc/php.d`, you should specify multiple additional scanning folders in `PHP_INI_SCAN_DIR`, separating them with `:`.

In your external application **Environment** setting (**WebAdmin Console > Server > External App > lsphp73**), enter:

```
PHP_INI_SCAN_DIR=/opt/cpanel/ea-php73/root/etc/php.d:$VH_ROOT/public_html
```

or simply:

```
PHP_INI_SCAN_DIR=:$VH_ROOT/public_html
```

[![!Per User PHP](../images/php-user-ini03.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-user-ini03.png)

After you save the change and restart LSWS, the phpinfo page of the accounts using lsphp73 should change to something similar to the following by scanning additional `.ini` for additional folders from `$VH_ROOT/public_html`:

[![!Per User PHP](../images/php-user-ini04.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-user-ini04.png)

The variables available for use are:

Per user: 1. `$VH_ROOT`: the virtual host's home directory 2. `$VH_NAME`: the virtual host's domain 3. `$VH_USER`: the virtual host's user

Per site:

1. `$DOC_ROOT`: the domain's document root when enabling per domain php.ini.

In order to use `$DOC_ROOT`, you will need to manually add the `phpAppByDomain` setting to the LSWS configuration file at `/usr/local/lsws/conf/httpd_config.xml`

```
<phpConfig>
    <phpAppByDomain>1</phpAppByDomain>
</phpConfig>
```

## To apply per-user php.ini to a particular virtual host[¶](#to-apply-per-user-phpini-to-a-particular-virtual-host "Permanent link")

To define `PHPRC` or `PHP_INI_SCAN_DIR` for a particular domain/virtual host on cPanel, you will need to create an include file and define `PHPRC` or `PHP_INI_SCAN_DIR` in it.

Most likely you will need to install an extra Apache module first:

```
$ sudo yum install ea-apache24-mod_env
```

or something similar, otherwise Apache may return an error like the following:

```
Apr 05 16:21:46 cptest.com restartsrv_httpd[21931]: AH00526: Syntax error on line 1 of /etc/apache2/conf.d/userdata/std/2_4/wpuser99/wpuser99.com/ini.conf:
Apr 05 16:21:46 cptest.com restartsrv_httpd[21931]: Invalid command 'SetEnv', perhaps misspelled or defined by a module not included in the server configuration
```

For example, on an EA4 CentOS 7 server, to enable custom `php.ini` for `example.com`, create two files:

```
/etc/apache2/conf.d/userdata/std/2_4/$USER/example.com/customphpini.conf
```

and

```
/etc/apache2/conf.d/userdata/ssl/2_4/$USER/example.com/customphpini.conf
```

The `std` file applies to a standard HTTP vhost, and the `ssl` file is for a secure HTTPS vhost.

Add either:

```
PHP_INI_SCAN_DIR=/home/$USER/public_html/
```

or

```
SetEnv PHPRC /home/$USER/public_html/
```

After making these changes, you must rebuild the Apache config, restart LiteSpeed Web Server, and restart LSPHP in order for them to take effect. Run the following commands, replacing `example-user` with the actual vhost username:

```
/scripts/rebuildhttpdconf
systemctl restart lsws
pkill -u example-user lsphp
```

Note

Be very careful when you set this up. When `PHPRC` is set, cPanel EA4 *only* reads this specified `php.ini`. It won't read the original EA4 `php.ini` or modules in the scan folder. If the user-specified `php.ini` doesn't include a complete set of modules, it may lead to errors, for example, missing MySQL.

Please refer to [The cPanel PHPRC PHP Patch for EasyApache 4](https://documentation.cpanel.net/display/EA4/The+cPanel+PHPRC+PHP+Patch+for+EasyApache+4).

## Can I use .user.ini with LiteSpeed Web Server?[¶](#can-i-use-userini-with-litespeed-web-server "Permanent link")

It is not recommended to use .user.ini with LSWS, since it is part of cPanel's MultiPHP manager function, and is intended for Apache PHP-FPM. It is not intended for use with LiteSpeed Web Server.

When a user logs into cPanel and edits PHP settings through cPanel's [cPanelMultiPHP INI Editor](https://documentation.cpanel.net/display/82Docs/MultiPHP+INI+Editor+for+) ( **cPanel > Home > Software > MultiPHP INI Editor**), the editor will save changes to three files in `/home/$USER/public_html/`: the `php.ini` file, the `.user.ini` file, and the `.htaccess` file.

For example:

```
  [/home/user1/public_html]# ll
  -rw-r--r--  1 user1 user1 4484 Aug 29 12:25 .htaccess
  -rw-r--r--  1 user1 user1  576 Aug 29 12:25 php.ini
  -rw-r--r--  1 user1 user1  582 Aug 29 12:25 .user.ini
```

You have probably noticed that the same changes are being saved to three different files at the same time. This is because different PHP handlers will use different files to apply the settings. A user may change the handler at some point, and the three files will be updated accordingly to ensure the cPanel MultiPHP INI Editor settings will continue to apply.

**Apache SuPHP** uses `php.ini`.

**Apache PHP CGI and PHP-FPM** use `.user.ini`.

**CloudLinux mod\_lsapi for Apache** uses `.htaccess`.

**LiteSpeed** uses `.htaccess`.

LiteSpeed is compatible with cPanel MultiPHP INI Editor out of the box with no extra configuration required. Please also keep in mind that you cannot manually change settings in any of the files through SSH. You must use cPanel MultiPhP INI Editor GUI to make any changes for your test.

If at any time you explicitly want to apply `/home/$USER/public_html/.user.ini`, regardless of the cPanel default multi-file implementation, you will need to use **PHP\_INI\_SCAN\_DIR** to manually set it up as instructed earlier in this documentation. However, this is not recommended, and you are encouraged to just use cPanel MultiPHP INI Editor.

## Per Domain php.ini[¶](#per-domain-phpini "Permanent link")

Most of the time, you should use cPanel's MultiPHP Manager to handle overriding PHP values. However, some PHP settings are not supported by cPanel MultiPHP Manager, such as `allow_url_fopen` and `allow_url_include`. For these settings, you will need to use `PHPRC` or `PHP_INI_SCAN_DIR` to define the php.ini for each user.

One user may have many subdomains or addon domains, which may be located in subdirectories under the main domain's document root. All such domains will use `doc_root/php.ini`. If you prefer for each subdomain to have it's own php.ini, for example `/home/USER1/public_html/subdomain.com/php.ini`, instead of relying on the user-level `/home/USER1/public_html/php.ini`, you can do the following:

- In LSWS Web Admin Console, change php external app from `Environment: PHPRC=$VH_ROOT/public_html` (user based) to `Environment: PHPRC=$DOC_ROOT` (domain based), if the user has a full `php.ini` at `/home/USER1/public_html/php.ini`. Change it from `Environment: PHP_INI_SCAN_DIR=$VH_ROOT/public_html` (user based) to `Environment: PHP_INI_SCAN_DIR=$DOC_ROOT` (domain based) if the user has a patial `php.ini`.
- Restart LSWS and lsphp to put the new Environment into effect.

The main domain and all subdomains should now load their own `php.ini` from their own document root.

If a user modifies the `php.ini`, that user's lsphp will need to be restarted to apply any `php.ini` changes in PHP detached mode. The user can touch a file to do so: `touch /home/USER1/.lsphp_restart.txt`.
