# Troubleshooting LiteSpeed Web Server with Plesk | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/plesk/troubleshoot/

---

# Troubleshooting[¶](#troubleshooting "Permanent link")

## Access to Context Denied[¶](#access-to-context-denied "Permanent link")

On a newly installed LiteSpeed on Plesk, a main website `example.com` is running well, but there is no access to the subdomain `webmail.example.com`. The error log displays the following:

```
[ACL] Access to context [/] is denied!
```

This error is caused by directives from the `mod_access_xxxx` module that say `Deny from ...`.

### Solution[¶](#solution "Permanent link")

A full investigation of Apache `httpd.conf`, included configuration files or `.htaccess` files related to the domain `webmail.example.com` is required.

LiteSpeed reads Apache configuration files but ignored the `mod_php5`,`sapi_apache2`,`python`, and `fcgid` Apache modules.

`/etc/httpd/conf/httpd.conf` is checked and there is no problem.

In `/etc/httpd/conf/plesk.conf.d/horde.conf` we find the following:

```
<IfModule mod_fcgid.c>
    FcgidInitialEnv PP_CUSTOM_PHP_CGI_INDEX fastcgi
    FcgidInitialEnv PP_CUSTOM_PHP_INI "/etc/abcdef-webmail/horde/horde/php.ini"
    FcgidMaxRequestLen 134217728
    <Directory "/usr/share/psa-horde">
        <Files ~ (.php$)>
            SetHandler fcgid-script
            FCGIWrapper /var/www/cgi-bin/cgi_wrapper/cgi_wrapper .php
            Options +ExecCGI
        </Files>
        Order allow,deny
        Allow from all
    </Directory>
</IfModule>
```

Although there is an `Allow from all` line for that directory, it is being ignored completely because `mod_fcgid` is disallowed in the **Apache Ignored Modules** setting.

Add the following to the conf file:

```
<Directory "/usr/share/psa-horde">
Order allow,deny
Allow from all
</Directory>
```

Place it outside of `<IfModule mod_fcgid.c>...</IfModule>` and that should fix problem.

The Plesk template may need to be customized so that it no longer puts everything inside the `<IfModule mod_fcgid.c>` block. Alternatively, try not to use `fcgid` as the default PHP handler.

## Unable to Access IPv6[¶](#unable-to-access-ipv6 "Permanent link")

After installing and switching to LSWS on Plesk, hosted sites may no longer be accessible via IPv6.

LSWS requires an IPv6 listener directive which is not contained by default in Plesk's Apache configuration files.

### Solution[¶](#solution_1 "Permanent link")

Add the following directive into `/etc/httpd/conf/httpd.conf`:

```
<IfModule LiteSpeed>
Listen [::]:80
Listen [::]:443
</IfModule>
```

Graceful restart LSWS to take effect.

## Mismatched PHP Settings[¶](#mismatched-php-settings "Permanent link")

In certain cases you may see that a PHP setting in the panel is not corresponding with the one you see on the phpinfo page. Typically this can happen with **upload\_max\_filesize** and **post\_max\_size**.

In this example, **upload\_max\_filesize** is set to `128M` and **post\_max\_size** is set to `128M`, but phpinfo shows `2M` and `8M`, respectively.

[![!lsphp2](../images/troubleshoot01.png)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot01.png)

Also, the PHP version may not match the one you set in PHP settings. For example, the panel's PHP version is set to `7.3.5`, but phpinfo shows `7.2.18`.

[![!lsphp1](../images/troubleshoot02.png)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot02.png)

### Set PHP Handler to FastCGI[¶](#set-php-handler-to-fastcgi "Permanent link")

LiteSpeed on Plesk requires the PHP handler to be set to `FastCGI application`. When it is set to `FPM application`, it may result in an inability to apply PHP settings. Setting the handler to FastCGI does not mean lower PHP performance when compared to PHP-FPM. LiteSpeed will load PHP with its own seamless, optimized LiteSpeed SAPI.

[![!lsphp8](../images/troubleshoot03.png)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot03.png)

Log in to Plesk, navigate to the website's **PHP settings** page, set **run PHP as** to `FastCGI application`, and save.

[![!lsphp3](../images/troubleshoot04.jpg)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot04.jpg)

Now check the phpinfo page again. The values should match.

[![!lsphp77](../images/troubleshoot05.png)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot05.png)

Note

If your are using PHP Detached Mode (which is the default), the application of the new configuration may be delayed. A new configuration only takes effect once LSPHP is restarted. You will either need to wait for the LSPHP process to time out and fork again, or you can manually kill it.

### Enable FastCGI[¶](#enable-fastcgi "Permanent link")

If the FastCGI option is not shown, it may have been disabled.

[![!lsphp4](../images/troubleshoot06.jpg)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot06.jpg)

Navigate to **Tools & Settings > PHP Settings**.

[![!lsphp55](../images/troubleshoot07.png)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot07.png)

Click the grey dot in front of the handler to enable it.

[![!lsphp6](../images/troubleshoot08.jpg)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot08.jpg)

## PHP Selector Problem[¶](#php-selector-problem "Permanent link")

A recent Plesk update changed the PHP configuration within the Apache configuration. This may interfere with LiteSpeed Web Server, Plesk PHP Selector, and CloudLinux PHP Selector.

If this issue impacts you, no matter what PHP version you choose in CloudLinux PHP Selector, PHPinfo shows the PHP version that was selected in the Plesk PHP setting.

[![](../images/troubleshoot09.png)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot09.png)

There are two possible solutions for this issue.

### Choose ALT PHP[¶](#choose-alt-php "Permanent link")

Use Plesk PHP Selector to choose an alt-php, such as `alt-php51-fastcgi`. Please note, you must choose `fastcgi` in order for LSWS to work properly.

[![](../images/troubleshoot10.jpg)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot10.jpg)

### Use CloudLinux PHP Selector[¶](#use-cloudlinux-php-selector "Permanent link")

If Plesk PHP Selector is no longer needed, since CloudLinux PHP Selector pretty much covers all of the PHP settings and extensions, you could choose to use CloudLinux PHP Selector exclusively. This will completely disable the Plesk PHP Selector, which means no matter which PHP you choose in Plesk Selector, it will have no effect at all, and only the setting in CloudLinux Selector will be obeyed.

Login to LSWS WebAdmin Console by accessing `https://SERVER_IP:7088`.

Follow the instructions in the [CloudLinux support documentation](https://docs.cloudlinux.com/cloudlinux_os_components/#litespeed-support) to set up the `lsphp_selector` external app, as seen in the screenshot.

[![](../images/troubleshoot11.jpg)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot11.jpg)

After the external app is created, go to the **Script Handler** page, and create multiple handlers`php`,`php44`,`php51`,`php52`,`php53`,`php54`,`php55`,`php56`,`php70`,`php71`,`php72`,`php73`. Be sure to change **Handler Name** to `lsphp_selector` for each suffix, as seen in the screenshot.

[![](../images/troubleshoot12.jpg)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot12.jpg)

Now all of the handlers will use same `lsphp` binary that is controlled by the CloudLinux Selector.

## PHP 500 Error[¶](#php-500-error "Permanent link")

You may encounter random PHP 500 errors on domains with multiple subdomains.

This occurs when **open\_basedir protection** is set to `{DOCROOT}{/}{:}{TMP}{/}` in Plesk's PHP settings, and multiple subdomains are defined inside a single parent domain, like in this example:

- `/var/www/vhosts/example.com/httpdocs/`
- `/var/www/vhosts/example.com/sub1.example.com/`
- `/var/www/vhosts/example.com/sub2.example.com/`

You may see the 500 error in either the parent domain or one of the subdomains, depending on which domain is accessed first and where lsphp is started. You'll see an entry like this in the debug log:

```
 2019-12-23 17:38:22.972520 [NOTICE] [1659563] [123.123.123.123:51625-1#APVH_example.com:lsapi] [STDERR] PHP Fatal error:  Unknown: Failed opening required '/var/www/vhosts/example.com/sub1.example.com/index.php' (include_path='.:/opt/alt/php73/usr/share/pear') in Unknown on line 0
```

Here's why: when the lsphp process is started by `example.com`, it will apply open\_basedir as `/var/www/vhosts/example.com/httpdocs/`, so the subdomain cannot access its files in `/var/www/vhosts/example.com/sub1.example.com/`.

In Plesk, the `{DOCROOT}` variable is set to `/var/www/vhosts/example.com/httpdocs` or `/var/www/vhosts/example.com/sub1.example.com/`, for a domain and subdomain respectively.

The `{WEBSPACEROOT}` variable is set to `/var/www/vhosts/example.com/`, which is valid for all subdomains inside this same account.

### Solutions[¶](#solutions "Permanent link")

There are several ways to solve this issue:

- If you have CageFS, there might not be much extra benefit to using open\_basedir, so the simplest solution is to turn it off.
- Change open\_basedir from `{DOCROOT}` to `{WEBSPACEROOT}`, though this will not apply individual open\_basedir to each subdomain.
- Edit `/usr/local/lsws/conf/httpd_config.xml`, insert the line `<phpAppByDomain>1</phpAppByDomain>` anywhere between `<phpConfig>` and `</phpConfig>`, as seen in the screenshot below, then restart LSWS, killing lsphp if necessary.

[![PHP-By-Domain](../images/troubleshoot13.png)](https://docs.litespeedtech.com/lsws/cp/plesk/images/troubleshoot13.png)

## Webmail 500 Error[¶](#webmail-500-error "Permanent link")

In Plesk Obsidian 18.x, you may encounter an issue where the `webmail.domain.com` page returns a 500 error.

The issue occurs when Webmail uses PHP with minimal extensions, and some essential PHP extensions for the Webmail application are missing.

### Solution[¶](#solution_2 "Permanent link")

The default LSPHP that comes with a LiteSpeed Web Server installation is `lsphp56`, so you can solve the problem by replacing it with the higher version that is installed by Plesk, like so:

```
mv /usr/local/bin/lsphp /usr/local/bin/lsphp-bk
cp /opt/plesk/php/7.3/bin/lsphp /usr/local/bin/lsphp
```

If PHP 7.3 is not installed on your server, replace `7.3` in the commands above with another appropriate version number.

If your system is a CloudLinux system with CageFS, you must also run the following command:

```
cagefsctl --force-update
```

## Server process stopped[¶](#server-process-stopped "Permanent link")

If your server goes down, and stays down, that may be because of the **Auto Reload On Changes** setting.

The Plesk control panel sometimes has reason to stop the web server process. This is normal. But if LSWS cannot be restarted properly, it will cause downtime.

If you are experiencing downtime issues, check your restart log at `/usr/local/lsws/logs/lsrestart.log`.

In this example, the log shows that Plesk killed LiteSpeed:

```
LSWS does not restart properly, check port 7080
Wed Dec 30 03:49:24 IRST 2015
stop, LSWS running: 0
check port 7080 after kill all litespeed processes
```

For Plesk, the LiteSpeed **Auto Reload On Changes** setting should be `Use Apache binary wrapper`. This will replace the Apache httpd binary with a wrapper script. Whenever Apache is requested to start, stop, or restart, the script will tell LSWS to take the corresponding action.

Consider enabling web server monitoring in Plesk to keep on top of any accidental server stops. The Plesk Watchdog extension is one way. To enable it, navigate to **Extensions > Watchdog > Services > Web Server (Apache)** and enable it. Although it says “Apache,” it will monitor the LiteSpeed Web Server process as well and restart it when it is not running.
