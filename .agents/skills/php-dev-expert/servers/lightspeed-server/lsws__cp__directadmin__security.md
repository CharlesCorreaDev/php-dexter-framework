# Security | DirectAdmin | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/directadmin/security/

---

# Security[¶](#security "Permanent link")

## ModSecurity[¶](#modsecurity "Permanent link")

LiteSpeed Web Server has its own high-performance ModSecurity engine, offering excellent compatibility and performance. LSWS works well with popular ModSecurity rule sets such as **OWASP**, **Atomicorp**, **Comodo**, and **CloudLinux Imunify360**. Additionally, LiteSpeed works well with firewalls such as ConfigServer Security & Firewall (CSF).

### Set up ModSecurity rules[¶](#set-up-modsecurity-rules "Permanent link")

By default, DirectAdmin CustomBuild can install OWASP rule sets without a third-party installation script. You can run the following commands to enable ModSecurity and install OWASP rules automatically:

```
cd /usr/local/directadmin/custombuild
./build set modsecurity yes
./build set modsecurity_ruleset owasp
./build modsecurity
```

If you prefer Comodo WAF, DA CustomBuild may call the Comodo client agent script to install the rule set, but you run the risk of installing the Apache rule set instead of the LiteSpeed rule set. (The two servers have different rule sets for Comodo WAF.) To avoid installing the wrong rule set, we recommend following [the Comodo WAF Quick Start Guide](https://waf.comodo.com/doc/Comodo_Web_Application_Firewall_Quick_Start_Guide.pdf) instead of using CustomBuild for this.

## WordPress Brute Force Attack Protection[¶](#wordpress-brute-force-attack-protection "Permanent link")

A "brute force" login attack is a type of attack against a website to gain access to the site by guessing the username and password, over and over again. WordPress is the most popular CMS, and is therefore a frequent target of this type of attack. The `wp-login.php` and `xmlrpc.php` pages are the most common target of brute force attack by POST method. WordPress doesn't have any built-in protection to prevent this; hence the need for a third-party solution.

Starting with version 5.2.3, LiteSpeed Enterprise has a built-in WordPress Brute Force Attack Protection system. It will protect shared hosting WordPress environments from large-scale brute force attacks, which have the potential to bring down entire servers.

### How Brute Force Protection works[¶](#how-brute-force-protection-works "Permanent link")

The `WordPressProtect` directive syntax is:

```
WordPressProtect [off|on|drop|deny|throttle|captcha|full_captcha, ] <limit>
```

Note

You can use the `captcha` or `full_captcha` option without setting up the **reCAPTCHA Protection** feature separately. The reCAPTCHA option within `WordPressProtect` is independent of LSWS's separate **reCAPTCHA Protection** feature.

The action is optional, and defaults to `throttle`. The limit can be set together with the action, and has a value of (`0`|`1`|`2`-`1000`)

- `0` disables WordPress Protection.
- `1`, when used by a virtual host, defers to the setting used by the server.
- `2`-`1000` enables WordPress protection and also specifies the login limit.

Tip

Values lower than `2` will be treated as `2`, and values higher than `1000` will be treated as `1000`.

**Example:**

- `WordPressProtect drop, 10`
- `WordPressProtect throttle, 20`
- `WordPressProtect captcha, 2`
- `WordPressProtect full_captcha`

Note

`full_captcha` is a special mode which will always show CAPTCHA on `wp-login.php` page, no need to add extra limit value. Set `<wpProtectAction>6</wpProtectAction>` in the LSWS native configuration file will also take effect.

This directive can be used at server or virtual host level in the Apache configuration or in the `.htaccess` under a virtual host document root. The login limit value specifies the maximum number of `wp-login.php` and `xmlrpc.php` login attempts allowed within 5 minutes before the IP is blocked.

This limit is handled using a quota system that works as follows:

- The quota starts at the specified limit value.
- Each POST attempt decreases the quota by 1.
- Once the quota reaches half of the limit, the IP will be throttled, slowing more as the quota drops further.
- When the quota reaches 0, the desired action (drop, deny, or throttle) is taken.
- Over the course of 5 minutes without further POST attempts, the quota gradually increases back to the set limit.
- Restarting LSWS will reset the quota back to the specified limit value.

### How to enable LiteSpeed's WordPressProtect feature[¶](#how-to-enable-litespeeds-wordpressprotect-feature "Permanent link")

LiteSpeed Web Server's `WordPressProtect` feature is enabled by default and does not need any extra configuration in the LSWS WebAdmin Console or in Apache configurations.

You may wish to override the default settings at the server level, virtual-host level, or even the `.htaccess`-level. Before making any changes, it helps to understand the logic that drives `WordPressProtect` at the different levels.

Changing the settings at the Apache-server-level configuration will override the setting for any Apache-based virtual host, but will have no impact on LSWS-native virtual hosts, which can only be controlled by LSWS-native settings.

Changing the settings at the Apache-virtual-host-level configuration will override the server-level configuration as well as the `.htaccess`-level. This means that the server administrator's virtual host setting will override the end user's setting in `.htaccess`.

Let's look at some examples for a DirectAdmin environment:

You may wish to override the default limit of `10` to another value such as `5`. You will need to set it at the server level of the Apache configuration file here `/usr/local/directadmin/data/templates/custom/cust_httpd.CUSTOM.post`, or per virtual host config `/usr/local/directadmin/data/users/USERNAME/domains/example.cust_httpd`, with the following:

```
<IfModule Litespeed>
WordPressProtect throttle, 5
</IfModule>
```

This will set the limit to `5` for all virtual hosts.

After editing the include file, rebuild Apache configuration and restart LiteSpeed Web Server:

```
/usr/local/directadmin/custombuild/build rewrite_confs
service lsws restart
```

No matter how the server level is set, the end user has the ability to enable or disable it through `.htaccess` by adding the following:

```
<IfModule Litespeed>
WordPressProtect throttle, 15
</IfModule>
```

or

```
<IfModule Litespeed>
WordPressProtect throttle, 0
</IfModule>
```

However, the end user's preference does not override the virtual-host-level, if any setting is specified at that level. For example, if the feature is disabled in the virtual-host-level include file, e.g. `vi /usr/local/directadmin/data/users/USERNAME/domains/example.cust_httpd`, then any directives in `.htaccess` will be ignored.

```
<IfModule Litespeed>
WordPressProtect throttle, 0
</IfModule>
```

The design logic looks like the following:

| Server Level | VHost Level | .htaccess | Result |
| --- | --- | --- | --- |
| not set | not set | not set | 10 |
| 5 | not set | not set | 5 |
| 5 | not set | 20 | 20 |
| 5 | 10 | not set | 10 |
| 5 | 10 | 20 | 10 |
