# 500 Error | cPanel | Control Panels | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/500-error/

---

# 500 Error[¶](#500-error "Permanent link")

The HTTP 500 status code, or “Internal Server Error,” means that the server cannot process the request for an unknown reason. Sometimes this code appears when more specific 5xx errors are more appropriate.

The most common causes of this error are server misconfiguration (for example, a malformed `.htaccess` file), missing packages (for example, attempting to execute a PHP file without PHP installed properly), permission or ownership changes, an improperly configured `php.ini` file, or a PHP upgrade. Anything that the server cannot handle can trigger an HTTP 500 error. The impact varies based on the event that triggered it.

Before proceeding with the troubleshooting steps, determine whether the issue is LiteSpeed-specific or also occurs with Apache.

## Does it Occur with Apache?[¶](#does-it-occur-with-apache "Permanent link")

If your server is running on an Apache control panel, such as cPanel or Plesk, there is an easy way to determine whether an issue is caused by your LiteSpeed server:

1. Temporarily switch to Apache
2. Repeat the steps that originally led to the issue.

Are you able to reproduce the error under Apache?

### NO[¶](#no "Permanent link")

If the error could not be triggered under Apache, then the problem is likely to be a LiteSpeed server issue. Please open a ticket from your client area or email `support@litespeedtech.com` and provide as many details as possible, so that we may assist you.

### YES[¶](#yes "Permanent link")

If Apache experiences the same problems, then the issue is not a LiteSpeed Web Server issue.

Switch back to LiteSpeed Web Server, and keep reading! Even though it is not a server problem, we have provided the following troubleshooting documentation that we hope will help you to find the solution.

Tip

Overwhelmed? Don't have the time or interest to deal with these steps? We can help. [Engage our team through **Hourly Support**](https://store.litespeedtech.com/store/index.php?rp=/store/supportservice), and we'll do the troubleshooting for you!

## Determine the scope[¶](#determine-the-scope "Permanent link")

To troubleshoot an HTTP 500 error, first check whether the error affects one site or every site on the server. Depending on the impact of the error, you can investigate further. If only one domain is affected, the issue may be isolated to a specific script error or permission issue. If multiple domains show an HTTP 500 error, the cause could be a server-wide configuration change or update.

Check the server `error_log`, `stderr.log`, or PHP error log, normally located where the PHP script is running, for clues about the error. During troubleshooting, ensure that PHP error reporting is enabled in `php.ini`. Revert the settings when you finish debugging.

```
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT  ->   error_reporting = E_ALL
display_errors = Off -> display_errors = On
display_startup_errors = Off -> display_startup_errors = On
error_log = errors_log
```

To apply these settings to a single domain for quick testing, add the following PHP override to the domain’s `.htaccess` file. Comment out or remove the lines after testing.

```
php_flag display_startup_errors on
php_flag display_errors on
php_value error_log errors_log
php_value error_reporting 32767
```

Not all HTTP 500 errors appear in the logs, so it is common to find no useful information in the log files. This makes troubleshooting more difficult.

The following common causes and examples may help during the troubleshooting process.

## Permission or ownership changes[¶](#permission-or-ownership-changes "Permanent link")

Permission or ownership changes may cause an HTTP 500 error.

For example, to enable the LiteMage extension in a Magento installation through SSH, run the command as a non-root user. If you run the command incorrectly as the root user, the Magento front end may immediately return an HTTP 500 error. Reverse the file ownership and permissions to the original user to fix the issue.

## phpinfo.php owned by root instead of a user[¶](#phpinfophp-owned-by-root-instead-of-a-user "Permanent link")

You may need to check the phpinfo page during troubleshooting. If you log in to the server through SSH as root, navigate to the document root, and create `phpinfo.php`, the file will be owned by `root:root` instead of `user:user`.

Accessing `example.com/phpinfo.php` may return an HTTP 500 error if a restriction is configured, although this does not always occur.

The server error may show the following:

```
[Thu Jun 07 21:04:36.450359 2018] [:error] [pid 3807521:tid 139749549020928] [client 192.0.2.132:9254] SoftException in Application.cpp:382: UID of script "/home/user/public_html/phpBB2/info.php" is smaller than min_uid
[Thu Jun 07 21:04:36.450651 2018] [core:error] [pid 3807521:tid 139749549020928] [client 192.0.2.132:9254] End of script output before headers: info.php
```

Changing the ownership of `info.php` to `user:user` generally fixes the issue.

## Faulty .htaccess[¶](#faulty-htaccess "Permanent link")

The `.htaccess` file can perform a wide range of tasks. However, incorrect syntax can result in an HTTP 500 error.

### Example 1[¶](#example-1 "Permanent link")

For example:

```
RewriteRule ^(.*) http://www.example.com/$1 [P]
```

This rule causes an HTTP 500 error. Change it to the following:

```
RewriteRule (.*) http://www.example.com/$1 [R=301,L]
```

This corrects the issue.

### Example 2[¶](#example-2 "Permanent link")

`<Directory>...</Directory>` cannot be used in `.htaccess`. It causes an HTTP 500 error in Apache, while LiteSpeed Web Server ignores the unsupported directive instead of returning an HTTP 500 error.

For example, do not use the following in `.htaccess`:

```
<Directory /home/user1/public_html/wp-admin/>
  Deny from all
</Directory>
```

Instead, create an `.htaccess` file under `/wp-admin/` and place the directive there:

```
Deny from all
```

To confirm whether a misconfiguration in `.htaccess` causes the HTTP 500 error, temporarily remove or rename the `.htaccess` file, and then reload the page.

### Example 3[¶](#example-3 "Permanent link")

The following `Alias` directive in `.htaccess` causes an HTTP 500 error in Apache because the `Alias` directive is not allowed in `.htaccess`. LiteSpeed Web Server ignores it without returning an HTTP 500 error.

```
Alias "/" "/home/$USER1/public_html/"
```

### Example 4[¶](#example-4 "Permanent link")

The syntax is incorrect for the following directive:

```
Header always set Strict-Transport-Security: max-age=63072000; includeSubDomains; preload
```

This causes the following error in `error_log`:

```
[Tue Sep 11 19:59:40.864917 2018] [core:alert] [pid 15738] [client 192.0.2.139:64740] /home/example/public_html/.htaccess: Too many arguments to directive
```

Use the following syntax to fix the HTTP 500 error in Apache:

```
Header always set Strict-Transport-Security: "max-age=63072000; includeSubDomains; preload"
```

### Example 5[¶](#example-5 "Permanent link")

The syntax is incorrect for the following directive:

```
Options All –Indexes
```

Use the following instead:

```
Options -Indexes
```

### Example 6[¶](#example-6 "Permanent link")

`php_value` and `php_flag` apply to the `mod_php` handler. In most cases, `php-fpm` or `lsphp` is used instead, and `mod_php` has largely been deprecated.

When you use `php_value` or `php_flag`, Apache returns an HTTP 500 error. However, `lsphp` supports PHP overrides in `.htaccess` without returning an HTTP 500 error when LiteSpeed Web Server is running.

## Rewrite rules placed at the wrong level[¶](#rewrite-rules-placed-at-the-wrong-level "Permanent link")

Per-virtual-host rewrite rules, which are in the Apache virtual host configuration, differ from per-directory rewrite rules, which are in `.htaccess`. Placing the same rules in the wrong location may cause an HTTP 500 error.

For example, the following works in `.htaccess`:

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule . /index.php [L]
```

Placing the same rules in an Apache virtual host configuration does not work:

```
<VirtualHost *:80>
  ServerName example.com
  DocumentRoot /var/www/example/
  <Directory /var/www/example/>
    Allow From All
  </Directory>
  RewriteEngine On
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule . /index.php [L]
</VirtualHost>
```

Apache does not explain why the configuration fails. You will likely receive an HTTP 500 error and find a message similar to the following in the logs:

```
Request exceeded the limit of 10 internal redirects due to probable configuration error. Use ‘LimitInternalRecursion’ to increase the limit if necessary. Use ‘LogLevel debug’ to get a backtrace.
```

## Incorrect rewrite rules in different directories[¶](#incorrect-rewrite-rules-in-different-directories "Permanent link")

The following rewrite rules in a subfolder are incorrect and cause an HTTP 500 error in LiteSpeed Web Server:

```
/home/user1/public_html/subfolder1] vi .htaccess
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ subfolder1/index.php/$1 [L]
```

Use the following rule instead:

```
/home/user1/public_html/subfolder1] vi .htaccess
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
```

## Bad PHP code[¶](#bad-php-code "Permanent link")

Incorrect PHP code can cause a website to immediately return an HTTP 500 error.

For example, use the following syntax:

```
$this->getResponse()->setRedirect(Mage::getBaseUrl());
```

If the `$` is removed:

```
this->getResponse()->setRedirect(Mage::getBaseUrl());
```

The website immediately returns an HTTP 500 error. This is only one example; many types of incorrect PHP syntax can lead to an HTTP 500 error.

Another example is:

```
<?php
phpinfo():
?>
```

A typing error in the phpinfo page, such as using `:` instead of `;`, can lead to an HTTP 500 error.

## PHP short open tags not enabled in php.ini[¶](#php-short-open-tags-not-enabled-in-phpini "Permanent link")

When PHP parses a file, it looks for the opening and closing tags `<?php` and `?>`, which tell PHP to start and stop interpreting the code between them. This allows PHP to be embedded in other documents because everything outside opening and closing tags is ignored by the PHP parser.

PHP also allows the short open tag `<?`. However, it is available only when `short_open_tag=on` is enabled in `php.ini`. If it is not enabled, a page that uses a short open tag may return an HTTP 500 error.

## PHP code with incorrect configuration settings[¶](#php-code-with-incorrect-configuration-settings "Permanent link")

Sometimes an HTTP 500 error may be difficult to locate. If you move `.htaccess` to `.htaccess.bak`, move `php.ini` to `php.ini.bak`, and the HTTP 500 error still occurs, there may be an issue in the PHP code.

For example, an incorrect setting was placed in the WHMCS `configuration.php` file:

```
$display_errors = E_All;
```

`E_All` is an incorrect value for the PHP `$display_errors` setting. It is intended for the `$error_reporting` setting. `$display_errors` should be set to `true`, `false`, `on`, or `off`.

Changing the setting to `true` fixed the HTTP 500 error:

```
$display_errors = true;
```

## CloudLinux LVE limit reached[¶](#cloudlinux-lve-limit-reached "Permanent link")

When using CloudLinux, a site that reaches its memory or process limits may return an HTTP 500 error because the server cannot execute the script. [Learn more.](https://docs.cloudlinux.com/index.html?lve.html)

For example, you may see the following error:

```
2019-01-11 00:14:23.330946 [ERROR] [APVH_example_Sulsphp56:] Failed to start one instance. Resource limit reached!
```

This indicates a CloudLinux error. Increasing the LVE limit for that user may fix the issue.

## PHP upgrade[¶](#php-upgrade "Permanent link")

A PHP upgrade that introduces a bug may cause an HTTP 500 error.

## Unsupported PHP version[¶](#unsupported-php-version "Permanent link")

An unsupported PHP version used by a site, theme, plugin, or module may lead to an HTTP 500 error.

## PHP script timeouts[¶](#php-script-timeouts "Permanent link")

If a PHP script makes external network connections, the connections may time out. If too many connections are attempted and time out, the script may return an HTTP 500 error.

To prevent timeouts and errors, ensure that PHP scripts include appropriate timeout rules. It can be difficult to catch a timeout error when connecting to a database or remote resource because these operations can freeze the script.

## Syntax or coding errors in CGI or Perl scripts[¶](#syntax-or-coding-errors-in-cgi-or-perl-scripts "Permanent link")

If a web page ending in `.cgi` or `.pl` produces the error, check the script for errors.

## Out of memory in php.ini[¶](#out-of-memory-in-phpini "Permanent link")

In this example, we checked `stderr`:

```
tail /var/log/httpd/stderr.log

2016-03-01 12:07:03.573 [STDERR] Tue Mar  1 12:07:03 2016 (12700): Fatal Error Unable to allocate shared memory segment of 134217728 bytes: shmat: Cannot allocate memory (12)
```

We then checked the phpinfo page and found that the memory limit was set to only `128M`. An opcode cache solution can use `128M` by itself, leaving no memory for anything else. This can lead to an HTTP 500 error.

Increase the PHP memory limit from `128M` to `1024M` to fix the issue.

## Too many PHP processes[¶](#too-many-php-processes "Permanent link")

If there are too many processes in the server queue, the server may exceed its available resources and return an HTTP 500 error.

## Apache running as SuEXEC while LiteSpeed Web Server is not on cPanel[¶](#apache-running-as-suexec-while-litespeed-web-server-is-not-on-cpanel "Permanent link")

In a cPanel/WHM environment, Apache runs as SuEXEC, but LiteSpeed Web Server does not.

```
2016-03-10 15:39:45.601 [NOTICE] [192.0.2.237:51548] [STDERR] PHP Warning: require_once(/home/example/public_html/goodmail/wp-config.php): failed to open stream: Permission denied in /home/example/public_html/goodmail/wp-load.php on line 37
2016-03-10 15:39:45.601 [NOTICE] [192.0.2.237:51548] [STDERR] PHP Fatal error: require_once(): Failed opening required '/home/example/public_html/goodmail/wp-config.php' (include_path='.:/opt/cpanel/ea-php70/root/usr/share/pear') in /home/example/public_html/goodmail/wp-load.php on line 37
```

Configure LiteSpeed Web Server to match Apache. Enable LiteSpeed Web Server PHP SuEXEC to fix the issue.

## Run out of swap space[¶](#run-out-of-swap-space "Permanent link")

Checking `error.log` may show the following:

```
Failed to obtain or reinitialize VMemBuf. possibly running out of swap space
```

The server returns an HTTP 500 error. Relocate the LiteSpeed Web Server swap directory to a partition with sufficient space to fix the issue.

## Missing PHP packages[¶](#missing-php-packages "Permanent link")

Installing PrestaShop may return an HTTP 500 error in Chrome. Check the error log to determine whether a package such as `php70-json` is missing. Install the missing packages to correct the issue.

## Missing opcode cache module[¶](#missing-opcode-cache-module "Permanent link")

A WordPress site may return an HTTP 500 error when using go2pay without showing a useful message in the server `error_log`, `stderr.log`, or PHP `error_log`. Upgrading the PHP version and adding the opcode cache module may fix the issue. Some applications and plugins require an opcode cache to run.

## PHP module code conflicts[¶](#php-module-code-conflicts "Permanent link")

Magento may return an HTTP 500 error when a module conflict occurs.

```
a:5:{i:0;s:54:"Mage registry key "umm_top_menu_exists" already exists";i:1;s:4439:"#0 /home/example/public_html/app/Mage.php(223): Mage::throwException('Mage registry k...')
#1 /home/example/public_html/app/design/frontend/ultimo/default/template/infortis/ultramegamenu/mainmenu.phtml(54): Mage::register('umm_top_menu_ex...', true)
#2 /home/example/public_html/app/code/core/Mage/Core/Block/Template.php(241): include('/home/example...')
#3 /home/example/public_html/app/code/core/Mage/Core/Block/Template.php(272): Mage_Core_Block_Template->fetchView('frontend/ultimo...')
#4 /home/example/public_html/app/code/core/Mage/Core/Block/Template.php(286): Mage_Core_Block_Template->renderView()
#5 /home/example/public_html/app/code/core/Mage/Core/Block/Abstract.php(923): Mage_Core_Block_Abstract->_toHtml()
#6 /home/example/public_html/app/code/core/Mage/Core/Block/Text/List.php(43): Mage_Core_Block_Abstract->toHtml()
#7 /home/example/public_html/app/code/core/Mage/Core/Block/Abstract.php(923): Mage_Core_Block_Text_List->_toHtml()
#8 /home/example/public_html/app/code/core/Mage/Core/Block/Abstract.php(641): Mage_Core_Block_Abstract->toHtml()
#9 /home/example/public_html/app/code/core/Mage/Core/Block/Abstract.php(585): Mage_Core_Block_Abstract->_getChildHtml('topMenu', true)
```

## Disable or enable Magento modules[¶](#disable-or-enable-magento-modules "Permanent link")

Disabling `extendare_EWCore.xml` by changing `True` to `false` may cause an HTTP 500 error.

Remove the Magento cache files to fix the problem:

```
rm -rf var/cache/*
```

## Some mod\_security rules may cause an HTTP 500 error[¶](#some-mod_security-rules-may-cause-an-http-500-error "Permanent link")

Adding JavaScript to a WordPress plugin may cause an HTTP 500 error. Enable LiteSpeed Web Server debug logging and look for an entry similar to the following:

```
2018-05-12 04:13:16.673307 [NOTICE] [192.0.2.182:54823#APVH_site.example.com] mod_security rule [Id '2000145'] triggered! [Sat May 12 04:13:16 2018] [error] [client 192.0.2.182] ModSecurity: Access denied with code 500, [Rule: 'REQUEST_URI|REQUEST_BODY' '<space:(script|about|applet|activex|chrome) >.(script|about|applet|activex|chrome)space: >'] [id "2000145"] [rev "1"] [msg "xss"] [severity "CRITICAL"]
```

A `mod_security` rule led to the HTTP 500 error. Disable that rule to fix the issue.

## Hacked site[¶](#hacked-site "Permanent link")

If your site is compromised, it may trigger an HTTP 500 error.

## Perl script missing a Content-Type header[¶](#perl-script-missing-a-content-type-header "Permanent link")

Running a simple `Hello World` Perl script at `http://example.com/cgi-bin/test.pl` may return an HTTP 500 error.

```
#!/usr/bin/perl
print "Hello, World!\n";
```

A Perl CGI script must output the header and HTML code and begin with a special first line. In this case, the `Content-Type` header is missing, so the file is not a valid CGI script. Also note the blank line after `print "Content-Type: text/html\n\n";`.

Use the following script instead:

```
#!/usr/bin/perl

print "Content-Type: text/html\n\n";

print "Hello, World!\n";
```

See this [Perl CGI example](https://users.cs.cf.ac.uk/Dave.Marshall/PERL/node196.html).

## OWASP ModSecurity rule set may trigger an HTTP 500 error with Imunify360[¶](#owasp-modsecurity-rule-set-may-trigger-an-http-500-error-with-imunify360 "Permanent link")

If you use LiteSpeed Web Server earlier than version 5.4.1 build 7, you may receive an HTTP 500 error when OWASP and Imunify360 are used together. LiteSpeed Web Server 5.4.1 and later address this issue, allowing users to use both rule sets at the same time.

The OWASP rule set may conflict with the Imunify360 default rule set on a server running LiteSpeed Web Server. Choose only one `mod_security` rule set.

For OWASP rule sets, add the following to `crs-setup.conf`:

```
SecAction "id:900990, phase:1, nolog, pass, t:none, setvar:tx.crs_setup_version=302"
```

Add the following to `/etc/apache2/conf.d/modsec_vendor_configs/OWASP3/rules/REQUEST-901-INITIALIZATION.conf`:

```
SecRule &TX:crs_setup_version "@eq 0" "id:901001, phase:1, auditlog, log, deny, status:500, severity:CRITICAL, msg:'ModSecurity Core Rule Set is deployed without configuration! Please copy the crs-setup.conf.example template to crs-setup.conf, and include the crs-setup.conf file in your webserver configuration before including the CRS rules. See the INSTALL file in the CRS directory for detailed instructions.'"
```

Load `crs-setup.conf` before the remaining rules, including `REQUEST-901-INITIALIZATION.conf`.

Imunify360 can disrupt the loading order of the rule set and lead to HTTP 500 errors.

## HTTP/2 protocol errors[¶](#http2-protocol-errors "Permanent link")

If a request that normally succeeds instead hangs until it reaches the timeout and then returns an HTTP 500 error—especially on LiteSpeed 6.3.6 build 0 or newer, where HTTP/2 header validation was strengthened—the application may be producing a response that fails HTTP/2 protocol validation. For example, the response may contain a `Content-Length` value that does not match the bytes sent or a malformed response header. See [Troubleshooting HTTP/2 Protocol Errors](lsws__ts-http2.md).

## Use debug logging[¶](#use-debug-logging "Permanent link")

Debug logging is helpful when looking for the cause of HTTP 500 errors. To begin capturing debug logs, see [How to Toggle Debug Logging](lsws__cp__cpanel__debug-log.md).

You can investigate these logs further or forward them to the Support Team for assistance.
