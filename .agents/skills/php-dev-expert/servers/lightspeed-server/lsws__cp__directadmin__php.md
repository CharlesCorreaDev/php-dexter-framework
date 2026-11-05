# PHP | DirectAdmin | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/directadmin/php/

---

# PHP[¶](#php "Permanent link")

When LiteSpeed Web Server is installed on DirectAdmin, it automatically configures LSPHP to work out of the box. No extra setup is required for most deployments.

LiteSpeed Web Server detects the installed handler and uses the PHP version defined by DirectAdmin. You only need external app or script handler overrides for special cases.

## Set up multiple PHP versions[¶](#set-up-multiple-php-versions "Permanent link")

DirectAdmin CustomBuild supports multiple PHP versions using `php1_release`, `php2_release`, `php3_release`, and up to `php9_release` in `/usr/local/directadmin/custombuild/options.conf`. The default version is `php1_release`, unless it is overridden by a domain-level `AddHandler` rule.

Compiled handlers are typically available in `/usr/local/phpxx/bin/`.

To set a PHP version for a domain:

1. Navigate to **User Level > Domain Setup**.
2. Select the domain you want to edit.
3. Open **PHP Version Selector**.
4. Select the desired PHP version.
5. Click **Save**.

When you select a version such as `php85`, DirectAdmin writes an Apache handler entry to the domain virtual host configuration, such as:

```
<FilesMatch "\.php$">
    AddHandler application/x-httpd-php85 .php
</FilesMatch>
```

For more details or switching the PHP version with `da`, please refer to [Multiple PHP versions](https://docs.directadmin.com/webservices/php/multiple-php.html).

## Use CloudLinux PHP Selector with DirectAdmin[¶](#use-cloudlinux-php-selector-with-directadmin "Permanent link")

When CloudLinux PHP Selector and DirectAdmin PHP Selector are both enabled:

- **DirectAdmin PHP Selector** is applied per domain.
- **CloudLinux PHP Selector** is applied per user.
- Domain-level DirectAdmin selection takes priority over user-level CloudLinux selection.

If a domain does not have an explicit DirectAdmin PHP selection, the CloudLinux user-level selection is used.

Navigate to **User Level > Advanced Features > Select PHP Version** to manage CloudLinux PHP Selector settings.

According to [DirectAdmin documentation](https://docs.directadmin.com/webservices/php/multiple-php.html#cloudlinux-php-selector), CloudLinux PHP Selector support requires `php1_mode=lsphp`.

Tip

If you use both selectors, CloudLinux selection only affects domains that use the first DirectAdmin PHP instance.

If you cannot resolve selector precedence in your environment, you can force LiteSpeed Web Server to use CloudLinux PHP Selector in `.htaccess`:

```
<IfModule LiteSpeed>
    AddHandler application/x-httpd-phpsel .php
</IfModule>
```

You can also force a specific `alt-php` version, such as `php85`, in `.htaccess`:

```
<IfModule LiteSpeed>
    AddHandler application/x-httpd-alt-php85 .php
</IfModule>
```

## Set a default PHP version[¶](#set-a-default-php-version "Permanent link")

Note

This step is only necessary in some older DirectAdmin configurations that are not using DirectAdmin's native per-domain multi-PHP handler assignment.

In some DirectAdmin installations, Apache virtual hosts may be created without an explicit PHP handler assignment. In such cases, Apache falls back to the `php1` version configured by DirectAdmin. LiteSpeed Web Server does not automatically use `php1` as a fallback, so a default PHP version should be configured manually in LiteSpeed WebAdmin.

Navigate to **Configuration > Server > PHP**, and set **Default PHP Versions** to `phpxx`, where `xx` is your preferred PHP version.

**Default PHP Versions** is a generic LiteSpeed Web Server setting. It applies to all control panels and standalone deployments. cPanel or Plesk may override defaults through Apache `httpd.conf`, but DirectAdmin relies on this LiteSpeed setting when no handler is explicitly defined.
