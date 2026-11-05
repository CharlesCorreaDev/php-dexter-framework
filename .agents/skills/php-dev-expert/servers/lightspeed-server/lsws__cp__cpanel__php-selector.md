# PHP Selector with LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/php-selector/

---

# PHP Selector[¶](#php-selector "Permanent link")

If you use cPanel EA4 on a CloudLinux system, the LiteSpeed auto-installer script (in LSWS v5.4 and above) will add the proper external apps for both EA4 MultiPHP and CloudLinux PHP Selector automatically, when installing LiteSpeed Web Server. PHP handlers will be set to use EA4 MultiPHP by default with version 5.6.

However, there is an important change starting from LSWS 5.4: External apps and script handlers are not necessary unless you want to specifically define handlers. External apps may still exist/be inherited if you upgrade LSWS from an earlier version, but you may find the external app and script handler empty for new installations. For most common setups, this auto detection should work well. However, it is still possible to configure the PHP handler explicitly if you have a need to do so.

Tip

Manual PHP handler configuration takes priority over auto detection.

The following guide describes how earlier versions of LiteSpeed Web Server (v5.3.x and below) external apps and script handlers work, as well as inherited external apps and script handlers for LSWS 5.4 and above.

The following external apps are installed: [![!External Apps](../images/php-selector01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-selector01.png)

External app `lsphp56`: [![!External App lsphp56](../images/php-selector02.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-selector02.png)

External app `cl_phpselector`: [![!External App cl_phpselector](../images/php-selector03.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-selector03.png)

PHP Handlers: [![](../images/php-selector04.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-selector04.png)

The suffixes `.php` and `.php5` will be handled by `lsphp56` by default. If you want to use CloudLinux PHP Selector, you should change `.php` and `.php5` to be handled by `cl_phpselector`.

[![!Handler cl_phpselector](../images/php-selector05.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-selector05.png)

## Changing the Default[¶](#changing-the-default "Permanent link")

When CloudLinux is integrated with cPanel EasyApache 4, the CloudLinux PHP Selector will only be used if the cPanel MultiPHP version for a domain is the same as the cPanel system default PHP version, which was set from the very beginning. (See **Understanding How This Works** below for more information.)

For example, say the cPanel system PHP default version is `ea-php56` for `example1.com`, and MultiPHP manager is set to `ea-php56`. Then cPanel will add the following to the `.htaccess` in `example1.com`'s document root:

```
# php -- BEGIN cPanel-generated handler, do not edit
# Set the “ea-php56” package as the default “PHP” programming language.
<IfModule mime_module>
  AddType application/x-httpd-ea-php56 .php .php5 .phtml
</IfModule>
# php -- END cPanel-generated handler, do not edit
```

So, what do you do if you want to use CL PHP Selector 7.0 (for example)?

It's important to understand how the CloudLinux PHP Selector works with cPanel EA4. In this case, you just need to check which CloudLinux PHP Selector is set for this account. If CL PHP Selector is set to `native`, then cPanel EA4 MultiPHP version is used. If a CL PHP Selector version other than `native` is used, then the web server will use the CL PHP Selector version chosen.

There's no need to worry about `AddType application/x-httpd-ea-php56` in the `.htaccess` file. It will be overridden by the CloudLinux PHP Selector setting.

Run the following command to check `example1` user:

```
$ sudo /usr/bin/selectorctl --user-summary --user example1
5.1 e - -
5.2 e - -
5.3 e - -
5.4 e - -
5.5 e - -
5.6 e - -
4.4 e - -
7.0 e - -
7.1 e - -
native e d s
```

You can set it to use `CL PHP Selector 7.0` instead of `native`:

```
$ sudo selectorctl --set-user-current=7.0 --user=example1
```

To verify:

```
$ sudo /usr/bin/selectorctl --user-summary --user example1
5.1 e - -
5.2 e - -
5.3 e - -
5.4 e - -
5.5 e - -
5.6 e - -
4.4 e - -
7.0 e - s
7.1 e - -
native e d -
```

Check the PHP Info page, and you should see CL PHP Selector 7.0 is in use.

## Understanding How This Works[¶](#understanding-how-this-works "Permanent link")

How does cPanel know whether to get the PHP version from `.htaccess` or from the CloudLinux PHP Selector?

A file search for `.htaccess` is performed in the current directory and in the parent directories. If the file is not found, then the system default PHP version is applied. The system default PHP version can be changed via the CloudLinux PHP Selector.

If `.htaccess` is found, then the following rules are applied to determine the PHP version:

1. If CageFS is disabled, then the CL PHP Selector is not active and the PHP version from `.htaccess` is applied.
2. If CageFS is enabled, then:
   1. If the PHP version specified in `.htaccess` differs from the ystem default, then the `.htaccess` version is applied.
   2. If the system default PHP version is specified in the `.htaccess` file, then the CL PHP Selector version is applied:
      1. If `native` is chosen in the CL PHP Selector, then the `.htaccess` PHP version is applied.
      2. If the PHP version chosen in the CL PHP Selector differs from `native`, then the CL PHP Selector version is applied.

Note

If you are using a version of cPanel prior to 11.56, please be aware that it does not support hooks for MultiPHP Manager. As a result, such changes are handled by cron job and come with up to a 10-minute delay.

For more on this, see [the CloudLinux documentation](https://docs.cloudlinux.com/index.html?php_selector_cpanel.html).

## Using alt-php Within MultiPHP Manager[¶](#using-alt-php-within-multiphp-manager "Permanent link")

Tip

As of LSWS v5.3RC1, you can use alt-php directly from MultiPHP Manager

In cPanel & WHM version 66 and later, EasyApache 4 allows you to use Vendor-provided PHP versions such as CloudLinux PHP selector right from MultiPHP Manager. This includes `alt-php44`, `alt-php51`, `alt-php52`, `alt-php53`, `alt-hpp54`, `alt-php55`, `alt-php56`, `alt-php70`, `alt-php71`, `alt-php72`. The `alt-php`s are supported by LiteSpeed from 5.3RC1.

LSWS versions 5.2.x and below *do not* support `alt-php`, so if you are still using a legacy version, please continue to use `ea-phpxx` only. Skip this section, and follow the above steps to determine if CloudLinux PHP selector is used. Do not use MultiPHP Manager.

Using cPanel MultiPHP Manager is the recommended method, since it is easy to understand and supports both `ea-php` and `alt-php`. CloudLinux PHP selector sometimes might be a little complicated to understand, hence it is not recommended. An advanced user can choose either one as preferred, as long as it is understood how CloudLinux PHP selector works together with WHM/cPanel MultiPHP Manager. The following section **Why CloudLinux PHP Selector Works on Apache but Does Not Work on LSWS** provides a good example of how complicated it can be to try enforcing everything to `alt-php` while using CloudLinux PHP Selector. Unless you understand it well, we don't recommend you go through such a complicated path for such little benefit. MultiPHP Manager could simply make your life easier.

[![!cpanel-multiphp-altphp](../images/php-selector06.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-selector06.png)

## Why CloudLinux PHP Selector Works on Apache but Does Not Work on LSWS[¶](#why-cloudlinux-php-selector-works-on-apache-but-does-not-work-on-lsws "Permanent link")

In a cPanel EA4 and CloudLinux environment, Most of the LSWS LSPHP external apps such as `lsphpxx` are pointing to `ea-phpxx`, instead of `alt-phpxx`. Only one external app, `cl_phpselector` is pointing to `/usr/local/bin/lsphp` (the CloudLinux PHP selector binary).

```
lsphp54-> /opt/cpanel/ea-php54/root/usr/bin/lsphp
lsphp55-> /opt/cpanel/ea-php55/root/usr/bin/lsphp
lsphp56-> /opt/cpanel/ea-php56/root/usr/bin/lsphp
lsphp70-> /opt/cpanel/ea-php70/root/usr/bin/lsphp
lsphp71-> /opt/cpanel/ea-php71/root/usr/bin/lsphp
lsphp72-> /opt/cpanel/ea-php72/root/usr/bin/lsphp
cl_phpselector-> /usr/local/bin/lsphp
```

PHP handlers:

```
php  -> cl_phpselector
php5 -> cl_phpselector
php54-> lsphp54
php55-> lsphp55   
php56-> lsphp56
php70-> lsphp70
php71-> lsphp71
php72-> lsphp72
```

The above is the recommended way, and is the default setup for such an environment.

[![!Different PHP](../images/php-selector07.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-selector07.png)

Some users may want to point every external handler to `alt-phpxx`, like so:

```
lsphp54-> /opt/alt/php54/usr/bin/lsphp
lsphp55-> /opt/alt/php55/usr/bin/lsphp
lsphp56-> /opt/alt/php56/usr/bin/lsphp
lsphp70-> /opt/alt/php70/usr/bin/lsphp
lsphp71-> /opt/alt/php71/usr/bin/lsphp
lsphp72-> /opt/alt/php72/usr/bin/lsphp
cl_phpselector->/usr/local/bin/lsphp
```

This causes a problem.

For example: A user account inherits the cPanel system default PHP version, and the CloudLinux PHP selector is set to use `php70` for that user account. Apache seems to return the correct version of `php70`, but LSWS always seems to return `php56` (or whatver cPanel's Multi PHP Manager system default PHP version is).

In actuality, there is nothing wrong with LiteSpeed Web Server. LSWS is following the correct CloudLinux-cPanel-EA4 PHP determination work flow.

- **Apache**: When a user account inherits the cPanel system default PHP configuration from cPanel Multi PHP Manager, the CloudLinux PHP Selector is used. Hence it returns the right PHP version.
- **LSWS**: Since you changed the external app associated with the cPanel default version (`ea-php56` in this example), it will look for the suffix `php56`, which points to `lsphp56`.

`lsphp56` was:

```
lsphp56-> /opt/cpanel/ea-php56/root/usr/bin/lsphp
```

You changed it to:

```
lsphp56-> /opt/alt/php56/usr/bin/lsphp
```

`/opt/alt/php56/usr/bin/lsphp` is different than cPanel's default `ea-php56`(which is `/opt/cpanel/ea-php56/root/usr/bin/lsphp`), hence the CloudLinux PHP Selector won't be used. Instead, `lsphp56` (or, `/opt/alt/php56/usr/bin/lsphp`) will be always used for LSWS.

So, how can you get the PHP version you want? The key is to tell LSWS to use the CloudLinux PHP selector instead of a particular version of alt-php.

You can either update the external app `lsphp56` to point to PHP selector binary `/usr/local/bin/lsphp`, or more easily, update the PHP handler of suffix `php56` to be served by `cl_phpselector` instead of `lsphp56`.

You can apply the second solution through the command line or through LSWS Web Admin Console.

### Through the Command Line[¶](#through-the-command-line "Permanent link")

```
$ sudo vi /usr/local/lsws/conf/httpd_config.xml
```

Change:

```
<scriptHandler>
  <suffix>php56</suffix>
  <type>lsapi</type>
  <handler>lsphp56</handler>
</scriptHandler>
```

To:

```
<scriptHandler>
  <suffix>php56</suffix>
  <type>lsapi</type>
  <handler>cl_phpselector</handler>
</scriptHandler>
```

### Through LSWS Web Admin Console[¶](#through-lsws-web-admin-console "Permanent link")

Before: [![!Different Before Fix](../images/php-selector08.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-selector08.png) After: [![!Different After Fix](../images/php-selector09.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-selector09.png)

Restart LSWS after any configuration change.

## Overriding PHP Handler[¶](#overriding-php-handler "Permanent link")

In special cases you may want to change the behavior of handlers such as `x-httpd-phpXX`, `x-httpd-lsphpxx`, `x-httpd-alt-phpXX`, and `x-httpd-ea-phpXX`, so that they always point to `/usr/local/bin/lsphp` instead of `/opt/alt/phpXX/usr/bin/lsphp`.

It's easy to implement this override in **WebAdmin Console > Server > PHP**. There is no need to use an external app or script handler anymore, as they are mainly for earlier version of LSWS.

Create entries in the **PHP Handlers** table, like so:

- **Handler ID**: `lsphpXX`
- **Command**: `/usr/local/bin/lsphp`
- **Handled Suffixes**: `phpXX`, `ea-phpXX`, `alt-phpXX`

You can create one handler for each version, or create only one handler, for example `lsphp`, and list all versions in the **Handled Suffixes** setting.

Example

```
<phpConfig>
    <controlPanel>auto</controlPanel>
    <clAltPhp>0</clAltPhp>
    <phpHandler>
      <id>php</id>
      <command>/usr/local/bin/lsphp</command>
      <suffixes>php3, php4, php44, php5, php51, php52, php53, php54, php55, php56, php7, php70, php71, php72, php73, php74, php8, php80</suffixes>
    </phpHandler>
    <maxConns>35</maxConns>
    <env>PHP_LSAPI_CHILDREN=35</env>
    <initTimeout>60</initTimeout>
    <retryTimeout>0</retryTimeout>
    <pcKeepAliveTimeout>1</pcKeepAliveTimeout>
    <respBuffer>0</respBuffer>
    <extMaxIdleTime>600</extMaxIdleTime>
    <memSoftLimit>4096M</memSoftLimit>
    <memHardLimit>4096M</memHardLimit>
    <procSoftLimit>400</procSoftLimit>
    <procHardLimit>500</procHardLimit>
</phpConfig>
```
