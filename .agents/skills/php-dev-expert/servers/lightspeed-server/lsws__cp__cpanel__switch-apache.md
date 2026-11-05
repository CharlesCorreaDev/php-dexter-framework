# Apache to LiteSpeed Web Server Migration FAQ | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/switch-apache/

---

# Apache Migration FAQ[¶](#apache-migration-faq "Permanent link")

## General[¶](#general "Permanent link")

### Is LiteSpeed Based on Any Existing Web Server?[¶](#is-litespeed-based-on-any-existing-web-server "Permanent link")

No. LiteSpeed Web Server was built from scratch in C++. Some open source or free libraries — such as OpenSSL, OpenLDAP, expat, PCRE, and zlib — were used. All trademarks and copyrights of third party libraries belong to their respective owners.

### Can I Run Multiple Copies of LSWS on One Machine?[¶](#can-i-run-multiple-copies-of-lsws-on-one-machine "Permanent link")

No. Only one instance of LiteSpeed Web Server can exist at one time.

### Is Server Side Includes Supported?[¶](#is-server-side-includes-supported "Permanent link")

Yes. SSI has been supported since release 4.0.

## Apache Modules[¶](#apache-modules "Permanent link")

### Are Apache Modules Supported?[¶](#are-apache-modules-supported "Permanent link")

No. LiteSpeed uses a completely different architecture than Apache and as such does not support modules written for Apache. You will, however, find that features of most commonly-used Apache modules have already been implemented internally by LiteSpeed.

## Mod\_Security Rules[¶](#mod_security-rules "Permanent link")

### Where do I put mod\_security rules?[¶](#where-do-i-put-mod_security-rules "Permanent link")

In a cPanel/WHM environment, LiteSpeed will automatically support your mod\_security rules in the same place you would put them for Apache (in `modsecurity.conf`, etc.) There is no need to use LiteSpeed WebAdmin Console for mod\_security rules.

### Can you turn off mod\_security with .htaccess?[¶](#can-you-turn-off-mod_security-with-htaccess "Permanent link")

LiteSpeed can disable `mod_security` related directives in .htaccess with a configuration option explained [here](https://www.litespeedtech.com/docs/webserver/config/reqfilter/#disableSecHtaccess).

## PHP Configuration[¶](#php-configuration "Permanent link")

### Where does LiteSpeed keep php.ini?[¶](#where-does-litespeed-keep-phpini "Permanent link")

For server-wide PHP configuration, LSWS uses the same php.ini as Apache: `/usr/local/lib/php.ini`. You need to enable Matching PHP integration from the LSWS cPanel/WHM plugin and build matching PHP in LSWS.

This also means that equivalent PHP extensions will be already installed when the web server is switched from Apache to LiteSpeed.

### How do I set up LiteSpeed with PHP as DSO or PHP + suPHP?[¶](#how-do-i-set-up-litespeed-with-php-as-dso-or-php-suphp "Permanent link")

LSWS uses its own [LSPHP](https://www.litespeedtech.com/products/litespeed-sapi/php) (LSAPI + PHP) to execute PHP requests. It does not matter what you select within your cPanel.

It is similar to FCGI PHP. It has the same or better performance than apache DSO. PHP suEXEC can be enabled easily with a [switch](https://www.litespeedtech.com/docs/webserver/config/general/#phpSuExec) in LSWS.

### Do I need to turn PHP suEXEC on?[¶](#do-i-need-to-turn-php-suexec-on "Permanent link")

In shared hosting, PHP suEXEC should be turned on for security purposes. LiteSpeed's implementation of SuEXEC is much faster than any other PHP implementation's. Refer to our benchmark results [here](https://blog.litespeedtech.com/2010/01/06/benchmark-comparison-on-serving-simple-php-litespeed-vs-apache-vs-nginx/).

### Are you aware of any issues switching from Apache with PHP DSO and Apache with PHP SuPHP to LiteSpeed?[¶](#are-you-aware-of-any-issues-switching-from-apache-with-php-dso-and-apache-with-php-suphp-to-litespeed "Permanent link")

No, LSPHP (with PHP suEXEC on) works just fine. We've had no reports of speed issues, configuration problems, or compatibility issues on cPanel/WHM servers.

## LiteSpeed Configuration[¶](#litespeed-configuration "Permanent link")

### Do I need to modify the standard LiteSpeed configuration to better handle sites on my medium-loaded servers?[¶](#do-i-need-to-modify-the-standard-litespeed-configuration-to-better-handle-sites-on-my-medium-loaded-servers "Permanent link")

No, LSWS standard configuration should handle a medium-loaded server (WordPress, Joomla, some static sites) just fine.

### Can I Change the Server Value in the HTTP Response Header?[¶](#can-i-change-the-server-value-in-the-http-response-header "Permanent link")

Yes. Most web servers, by default, show the server software being used in their response headers. You can hide your software version number by using the **Server Signature** setting (**Configuration > General**) in the WebAdmin Console, or you can opt to hide the server response header field entirely.

## Choosing a License[¶](#choosing-a-license "Permanent link")

### Which LiteSpeed license do I need to buy?[¶](#which-litespeed-license-do-i-need-to-buy "Permanent link")

We usually recommend trying out our trial license. It's equivalent to our two-worker Web Host Professional license, and is good for 15 days. If the `litespeed` or `lshttpd` process takes a lot of CPU on your server, then you know you will need to upgrade to a license that supports a higher number of CPUs.

## Custom Error Pages[¶](#custom-error-pages "Permanent link")

### Is it possible to remove the "Powered by LiteSpeed" information from default error pages served by LiteSpeed?[¶](#is-it-possible-to-remove-the-powered-by-litespeed-information-from-default-error-pages-served-by-litespeed "Permanent link")

Yes, you can create a fully customized error page for the whole server using Apache's `ErrorDocument` Directive. The following example shows how it is done for a 403 Error page:

Create or edit this file: `/usr/local/apache/conf/includes/errordocument.conf`

Add the following content:

```
ErrorDocument 403 /403.shtml
Alias /403.shtml /usr/local/apache/htdocs/403.shtml
Alias /cp_errordocument.shtml /usr/local/apache/htdocs/cp_errordocument.shtml
```

Where `cp_errordocument.shtml` is referenced in `403.shtml`.

If a single user wants to change their own page, they can use this format in their `.htaccess` file or Apache `vHost` Configuration.

For a text-only error page:

```
ErrorDocument 403 "You are NOT allowed to access"
```

For an HTML error page:

```
ErrorDocument 403 /local403.shtml
```

## Changes in Apache Configuration[¶](#changes-in-apache-configuration "Permanent link")

### What changes do I need to make to my Apache configuration to make it work?[¶](#what-changes-do-i-need-to-make-to-my-apache-configuration-to-make-it-work "Permanent link")

LiteSpeed Web Server is a complete drop-in replacement for Apache. No changes are required. LSWS understands Apache configuration and behaves as you would expect Apache to.

`Directory Index Priority` also works without any changes and is completely supported.

## Global Rewrite[¶](#global-rewrite "Permanent link")

As a drop-in replacement, LSWS tries to match Apache rewrite rules as much as it can. Most of the time, you will find LSWS and Apache act the same way. However, to maximize speed and performance, there are some minor differences in rewrite rules implementation between LSWS and Apache by design. Also, we constantly review customer feedback on such rewrite implementations to balance easy rules migration and any performance gains.

One of the differences is with the processing of global rewrite rules.

With Apache, when placing mod\_rewrite files into the main `httpd.conf`, they will operate as expected, so long as they are wrapped in `<Files>`, `<FilesMatch>`, `<Directory>` or `<DirectoryMatch>` tags.

With LiteSpeed, *only* `<Directory>` will trigger the rewrite rules. Rules wrapped in `DirectoryMatch`, `Files` and `FilesMatch` tags do not trigger.

In a cPanel environment, you can test this behavior with a simple rewrite rule, by switching between LSWS and Apache:

```
RewriteRule ^(.*) http://example.com [L,R=301]
```

**Why is this so?** Apache reevaluates everything at runtime for each request. LiteSpeed Web Server, however, precomputes the list of server-level rewrite rules before executing them at runtime, and only the `<Directory>` context can be preprocessed. Preprocessing happens before the `DirectoryMatch`, `Files` and `FilesMatch` contexts can be evaluated.

## Rewrite Rule L Flag[¶](#rewrite-rule-l-flag "Permanent link")

There is a minor difference in the way LiteSpeed Web Server and Apache treat the `[L]` flag in rewrite rules. The `[L]` flag ("L" stands for "Last") causes mod\_rewrite to stop processing the rule set. There are two ways to interpret this:

1. In most contexts, including LiteSpeed Web Server, this means that if the rule matches, *no further rules will be processed*. LSWS exits from the rewrite completely to avoid looping.
2. In Apache, `[L]` means that if the rule matches, no further rules will be processed *in the current iteration*. Apache does not exit from the rewrite rule completely, and so there is a possibility of looping.

**In other words, the ruleset after an [L] flag may still be processed by Apache on a subsequent iteration, but that is not true with LSWS and most other contexts.**

In Apache 2.4 and above, an alternative flag, `[END]`, has been introduced to terminate not only the current round of rewrite processing, but to prevent any subsequent rewrite processing from occurring in `.htaccess`. In other words, the `[L]` flag in LSWS is equivalent to `[END]` in Apache 2.4.

### Adjusting Apache Rules for LiteSpeed[¶](#adjusting-apache-rules-for-litespeed "Permanent link")

You may need to tweak your Apache rule set to work with LiteSpeed.

Tips

- Changing the ruleset order may resolve the issue.
- Try using only one `[L]` in your ruleset instead of multiple `[L]`s.
- Sometimes the situation may be more complicated. The user may have some rules inherited from an older Apache version, such as Apache 2.2, with a lot of `[L]`s. It may not be easy to make it work for both Apache and LiteSpeed at the same time by simply changing the rule order or removing some `[L]`s. You may try to make the ruleset work for LiteSpeed, but that may break it for Apache. In such cases, we would recommend leaving the Apache ruleset untouched, and enclose it with `<IfModule !litespeed> ... </IfModule>`. Then create a new ruleset for LSWS enclosed with `<IfModule litespeed> ... </IfModule>` as a workable alternative.
- Writing rewrite rules may require a deep understanding of how the rewrite engine works and a talent for coding. The end user's rule may be complicated. They may have inherited a lengthy ruleset from a legacy Apache version, or maybe they are not following best practices, or perhaps they even involve some mistake. The final goal is to tweak the existing rules set to work with both LiteSpeed and Apache as quickly as possible, and not to worry about converting the ruleset into a piece of art.

Example

Change the order of rules.

Let's say you have this for Apache:

```
RewriteEngine On
RewriteRule ^([^.]+)$ $1.php [NC,L] 
RewriteRule plato-(.*)- plato_hizmet.php?plato=$1              
RewriteRule isik-(.*)- isik_hizmet.php?isik=$1               
RewriteRule hizmetler-(.*)- hizmetler.php?Git=$1             
RewriteRule ekipmanlar-(.*)- ekipmanlar.php?urun=$1
```

When the second line `RewriteRule ^([^.]+)$ $1.php [NC,L]` is matched, LSWS will exit the rewrite and won't process any rules below, while Apache may continue to process the rest of the rules at the next iteration. Changing the rule order so the `[L]` is on the last line should cause both Apache and LSWS to treat this ruleset the same way.

```
RewriteEngine On
RewriteRule plato-(.*)- plato_hizmet.php?plato=$1              
RewriteRule isik-(.*)- isik_hizmet.php?isik=$1               
RewriteRule hizmetler-(.*)- hizmetler.php?Git=$1             
RewriteRule ekipmanlar-(.*)- ekipmanlar.php?urun=$1
RewriteRule ^([^.]+)$ $1.php [NC,L]
```

Example

Use only one `[L]` instead of multiple.

Let's say you have this ruleset:

```
RewriteEngine On
RewriteBase /
RewriteRule ^es/(.*)$ /$1 [L]
RewriteRule ^reservar.html(.*)$ reservar.php [L]
```

Under Apache:

1. A visitor hits the URL `http://example.com/es/reservar.html` .
2. The web server recognizes the pattern `^es/(.*)$` from the first rewrite rule and the request is internally redirected to `/reservar.html`.
3. `/reservar.html` also matches the rule `^reservar.html(.*)$` and is redirected to `reservar.php`.
4. The contents of this latest file (`reservar.php`) is sent to the visitor.

Under LiteSpeed Web Server:

1. A visitor hits the URL `http://example.com/es/reservar.html` .
2. The web server recognizes the pattern `^es/(.*)$` from the first rewrite rule and the request is internally redirected to `/reservar.html`.
3. Processing stops at the first [L] (`RewriteRule ^es/(.*)$ /$1 [L]`) and never reaches the forth line at all.

If you want LSWS to process these rules with the same results as Apache, you can update them to use only one [L]:

```
RewriteEngine On
RewriteBase /
RewriteRule ^es/(.*)$ /es/$1 [NC]
RewriteRule ^/es/reservar.html(.*)$ reservar.php [L]
```

Example

Use `<IfModule litespeed> ... </IfModule>`.

Change this:

```
RewriteEngine On
RewriteCond   %{REQUEST_FILENAME} -f
RewriteRule   ^(.*).page$    page.php?__page=$1  [L,QSA]
RewriteCond   %{REQUEST_FILENAME} -f
RewriteRule   ^pics/(.*)  pic.php?name=$1     [L,QSA]
RewriteRule   ^index.(html|shtml|htm)$   index.php       [L,QSA]
RewriteRule   ^products-(.*).html$   products.page?c=$1  [L,QSA]
RewriteRule   ^product-(.*).html$    product.page?id=$1  [L,QSA]
RewriteRule   ^(specials|about_us|links|order_complete|view_cart|checkout).html$  $1.page     [L,QSA]
```

To this:

```
<IfModule !litespeed>
RewriteEngine On
RewriteCond   %{REQUEST_FILENAME} -f
RewriteRule   ^(.*).page$    page.php?__page=$1  [L,QSA]
RewriteCond   %{REQUEST_FILENAME} -f
RewriteRule   ^pics/(.*)  pic.php?name=$1     [L,QSA]
RewriteRule   ^index.(html|shtml|htm)$   index.php       [L,QSA]
RewriteRule   ^products-(.*).html$   products.page?c=$1  [L,QSA]
RewriteRule   ^product-(.*).html$    product.page?id=$1  [L,QSA]
RewriteRule   ^(specials|about_us|links|order_complete|view_cart|checkout).html$  $1.page     [L,QSA]
</IfModule>
<IfModule litespeed>
RewriteRule     ^index.(html|shtml|htm)$       index.php
RewriteRule     ^products-(.*).html$   products.page?c=$1
RewriteRule     ^product-(.*).html$    product.page?id=$1
RewriteRule     ^(specials|about_us|links|order_complete|view
RewriteCond     %{REQUEST_FILENAME}     -f
RewriteRule     ^pics/(.*)      pic.php?name=$1         [L,QSA]
RewriteCond     %{REQUEST_FILENAME}     -f
RewriteRule     ^(.*).page$    page.php?__page=$1      [L,QSA] 
</IfModule>
```

## Logging and Troubleshooting[¶](#logging-and-troubleshooting "Permanent link")

### Does LiteSpeed respect my Apache error log settings?[¶](#does-litespeed-respect-my-apache-error-log-settings "Permanent link")

Yes. There are 5 levels of error log, `ERROR`, `WARNING`, `NOTICE`, `INFO`, and `DEBUG`. `ERROR` is the equivalent for Apache cricital errors and is set up by default as they were in Apache.

In cPanel, log locations also remain same as they were in Apache.

### How do I investigate 403, 500, or 503 errors?[¶](#how-do-i-investigate-403-500-or-503-errors "Permanent link")

Please refer to the dedicated troubleshooting guides for these errors: - [403 error](#403-error) - [500 error](#500-error) - [503 error](#503-error)

### How do I troubleshoot other errors?[¶](#how-do-i-troubleshoot-other-errors "Permanent link")

Check your server error and stderr logs located here in cPanel/WHM:

- Server Error Log: `/var/logs/apache2/error_log`
- Stderr Log: `/var/logs/apache2/stderr.log`

Also refer to our Troubleshooting Menu to check for other guides related to cPanel/WHM.

## Keepalive Settings[¶](#keepalive-settings "Permanent link")

### How do I duplicate my advanced Apache keepalive configuration in LiteSpeed?[¶](#how-do-i-duplicate-my-advanced-apache-keepalive-configuration-in-litespeed "Permanent link")

You can turn keepalive on or off in the WebAdmin Console after installation. LiteSpeed works well even without keepalive.

Since LiteSpeed is event-driven, performance is much better. And, as server admin, you needn’t worry about rest parameters any more.

#### Understanding Keepalive settings[¶](#understanding-keepalive-settings "Permanent link")

LiteSpeed Web Server's default configuration turns "keepalive" on. There is no "yes/no" or "on/off" option in LiteSpeed Web Server's settings. However, you can turn it off or control it through the **Max Keep-Alive Requests**, **Smart Keep-Alive**, and **Keep-Alive Timeout (secs)** settings in **WebAdmin Console > Server > Tuning > Connection** section.

[![](../images/switch-apache01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/switch-apache01.png)

You don't need to enable **Smart Keep-Alive** to be able to use "keepalive". **Smart Keep-Alive** is designed to "turn off" Keep-Alive for HTML files, while leaving it enabled for all other file types. If you would like to use keep-alive for everything, you must turn off **Smart Keep-Alive**.

Keepalive is server level configuration and can not be controlled at the virtual host level.

#### Controlling Keepalive[¶](#controlling-keepalive "Permanent link")

We recommend keeping **Max Keep-Alive Requests** at the default value if you have no special requirements.

- Increase it slightly as needed
- Adjust to a large value like `100000` when doing a benchmark test
- Set to `0` to disable keepalive

The default value for **Keep-Alive Timeout (secs)** is `5`. You don't need to adjust this either unless you have some special requirements.

Sometimes you may not see a `Keep-alive` header for a particular URL. This does not mean that keepalive is off. To troubleshoot this you may turn off **Smart Keep-Alive** and increase the value of the **Max Keep-Alive Requests** setting.

Sometimes a PHP external application soft limit may be responsible for limiting keepalive connections. Increasing this soft limit may fix this issue.

## Other Configuration Questions[¶](#other-configuration-questions "Permanent link")

### How does LiteSpeed handle SSL certificates installed via WHM?[¶](#how-does-litespeed-handle-ssl-certificates-installed-via-whm "Permanent link")

Just like with Apache, SSL certificates installed via WHM start working with LSWS right after they are added.

### How does LiteSpeed handle addon domains, parked domains, and subdomains added via cPanel or WHM?[¶](#how-does-litespeed-handle-addon-domains-parked-domains-and-subdomains-added-via-cpanel-or-whm "Permanent link")

Just like with Apache, addon domains, parked domains, and subdomains added via cPanel or WHM start working with LSWS right after they are added.

### Can I disable the Apache fallback for invalid LSWS licenses?[¶](#can-i-disable-the-apache-fallback-for-invalid-lsws-licenses "Permanent link")

LiteSpeed Web Server cannot function without a valid license. For that reason, when a valid license cannot be verified, LSWS automatically switches to Apache. This is done to minimize disruption to the websites hosted on the server.

As of LSWS v6.2.2 you can override this behavior. Add an empty `.stay_with_lsws` file to the `/usr/local/lsws/admin/tmp/` directory, like so:

```
touch /usr/local/lsws/admin/tmp/.stay_with_lsws
```

When LSWS fails to detect a valid license, if this file is found, LSWS will not switch to Apache. Any websites hosted on the server will go down, and users will be unable to access them.

### Can I use IfDefine and IfModule?[¶](#can-i-use-ifdefine-and-ifmodule "Permanent link")

LiteSpeed doesn't fully support the use of [`IfDefine`](https://httpd.apache.org/docs/2.4/mod/core.html#ifdefine) or [`IfModule`](https://httpd.apache.org/docs/2.4/mod/core.html#ifmodule).

All conditional checking via `IfDefine` or `IfModule` (with one notable exception) is ignored, and the directives enclosed within are *always executed*.

The one exception is `<IfModule LiteSpeed>`, which is used to verify that LiteSpeed is running before the directives are executed.

If you already have `IfDefine` or `IfModule` conditionals in use, and you'd like a work-around to allow you to bypass them on LiteSpeed, manually add the definition or module name to the **[Ignore Apache Modules](https://www.litespeedtech.com/docs/webserver/config/general#apacheIgnoredModules)** area.

### Can I use Location and Filematch?[¶](#can-i-use-location-and-filematch "Permanent link")

Rewrite rules located inside `<Location>` or `<FileMatch>` tags are not supported by LiteSpeed Web Server.

Let's say you want to block a URL `/rejectthisurl` for all virtual hosts on a cPanel server. To achieve this, you add an include file for all cPanel virtual hosts at `/etc/apache2/conf.d/userdata/rejectthisurl.conf`, and use a `<Location>` directive, like so:

```
<Location /rejectthisurl>
RewriteEngine on
RewriteRule .* - [F]
</Location>
```

This works for Apache (returning `403` as expected), but not for LSWS (returning `404` instead of `403`).

Since LSWS doesn't support rewrite rules inside of `<Location>` or `<FileMatch>`, you need another way.

Simply use an appropriate rewrite rule to achieve the same goal. For the above example, you can add the following to `/etc/apache2/conf.d/userdata/rejectthisurl.conf`:

```
RewriteRule ^/rejectthisurl - [F]
```

## Can I use Multiviews?[¶](#can-i-use-multiviews "Permanent link")

MultiViews is an Apache per-directory option, which is not natively supported by LiteSpeed Web Server. However, the same results can be achieved through the rewrite rules.

### How Apache Multiviews Works[¶](#how-apache-multiviews-works "Permanent link")

The effect of MultiViews is as follows: if the server receives a request for `/some/dir/foo`, if `some/dir` has MultiViews enabled, and `/some/dir/foo` does not exist, then the server reads the directory looking for files named `foo.*`, and effectively fakes up a type map which names all of those files, assigning them the same media types and content-encodings it would have if the client had asked for one of them by name. It then chooses the best match to the client's requirements.

MultiViews may sometimes cause a very strange rewrite problem. When you turn on the rewrite log, you might see something like the following, which indicates "MultiViews" is enabled:

```
[perdir /var/www/] add path info postfix: /var/www/product.php -> /var/www/product.php/Test__Test.php
[perdir /var/www/] strip per-dir prefix: /var/www/product.php/Test__Test.php -> product.php/Test__Test.php
[perdir /var/www/] applying pattern '^([0-9]+)/([^/]+).php$' to uri 'product.php/Test__Test.php'
[perdir /var/www/] add path info postfix: /var/www/product.php -> /var/www/product.php/Test__Test.php
[perdir /var/www/] strip per-dir prefix: /var/www/product.php/Test__Test.php -> product.php/Test__Test.php
[perdir /var/www/] applying pattern '^prodotto/([^/]+).php$' to uri 'product.php/Test__Test.php'
[perdir /var/www/] add path info postfix: /var/www/product.php -> /var/www/product.php/Test__Test.php
[perdir /var/www/] strip per-dir prefix: /var/www/product.php/Test__Test.php -> product.php/Test__Test.php
[perdir /var/www/] applying pattern '^prodotto/([^/]+).php?id=([0-9]+)$' to uri 'product.php/Test__Test.php'
[perdir /var/www/] add path info postfix: /var/www/product.php -> /var/www/product.php/Test__Test.php
[perdir /var/www/] strip per-dir prefix: /var/www/product.php/Test__Test.php -> product.php/Test__Test.php
[perdir /var/www/] applying pattern '^c/([^/]+)/([^/]+).php$' to uri 'product.php/Test__Test.php'
[perdir /var/www/] pass through /var/www/product.php
```

The request is being modified by MultiViews, substituting `/product/` with `/product.php` and never triggering the mod\_rewrite rule.

### Real Life Example Using pathinfo[¶](#real-life-example-using-pathinfo "Permanent link")

Our customer is using an old jshop which works on Apache. After switching to LSWS, it always redirects to the homepage. There is a very very long rewrite in .htaccess, hence it is not easy to identify what is wrong.

We enable the rewrite log for Apache and LSWS, but it still is not easy to identify the problem.

The following is from the Apache rewrite log:

```
[Wed Sep 12 05:46:58.807252 2018] [rewrite:trace3] [pid 679517:tid 140344885401344] mod_rewrite.c(483): [client 175.156.215.157:58596] 175.156.215.157 - - [www.example.com/sid#7fa4b3f8b5d8][rid#7fa460006a60/initial] [perdir /home/user1/public_html/] add path info postfix: /home/user1/public_html/s.php -> /home/user1/public_html/s.php/2/menus-reading-michelin-star-restaurant-berkshire, referer: https://www.example.com/
[Wed Sep 12 05:46:58.807300 2018] [rewrite:trace3] [pid 679517:tid 140344885401344] mod_rewrite.c(483): [client 175.156.215.157:58596] 175.156.215.157 - - [www.lortolan.com/sid#7fa4b3f8b5d8][rid#7fa460006a60/initial] [perdir /home/user1/public_html/] strip per-dir prefix: /home/user1/public_html/s.php/2/menus-reading-michelin-star-restaurant-berkshire -> s.php/2/menus-reading-michelin-star-restaurant-berkshire, referer: https://www.example.com/
```

We determine that MultiViews is the root cause for the rewrite problem.

If the following MultiViews option were to be disabled in .htaccess, Apache wouldn't work anymore:

```
Options +MultiViews
```

Why does Apache work but LSWS doesn't? Apache supports the above MultiViews while LSWS does not. So how do we make MultiViews work on LSWS?

If a site has a URI that uses pathinfo, here's how the redirection should work:

```
/topic/Office/Work ==> /topic.php/Office/Work
/update/Office/Work ==> /update.php/Office/Work/topic-> /topic.php
```

The following is a code example to implement Multiviews that uses pathinfo through rewrite rules for LSWS:

```
# Multiviews example code...use this in an .htaccess file
RewriteEngine On
RewriteCond %{REQUEST_URI} !.+php*
RewriteCond %{DOCUMENT_ROOT}/$1.php -f
RewriteRule ^([^/]+)/?(.*)$ $1.php/$2 [L]
```

We added the above code, and now LSWS works fine for this particular site.

### Multiple Language Example[¶](#multiple-language-example "Permanent link")

The following is how it's set up with Apache Multiviews:

```
Options +MultiViews
AddLanguage de .de
AddLanguage en .en
```

We can get the same effect with LSWS and the following rewrite rules:

```
AddType text/html .en
AddType text/html .de

SetEnvIf Accept-Language ^de LANG=.de
SetEnvIf Accept-Language ^en LANG=.en
SetEnvIf LANG ^$ LANG=.de

RewriteEngine on
RewriteCond %{REQUEST_URI} !%{ENV:LANG}$
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-l
RewriteRule ^(.*)$ $1%{ENV:LANG} [L,QSA]
```

## cgi-bin Script Redirect Not Found[¶](#cgi-bin-script-redirect-not-found "Permanent link")

Why would a redirect from `/cgi-bin/script` work fine with Apache, but result in a 404 error on LSWS?

Assume you have some redirect rules in `/home/USER1/public_html/.htaccess`. For example:

```
Redirect 301 /cgi-bin/n/v.cgi?c=1&id=930019428 /planet/
```

This will work with Apache, but LSWS will return a 404 error. Why?

In a cPanel environment, under `/home/USER1/public_html`, there is no `cgi-bin` folder normally. However, in a cPanel Apache virtual host setting, you will find a `ScriptAlias` setting like this:

```
<IfModule alias_module>
ScriptAlias /cgi-bin/ /home/USER1/public_html/cgi-bin/
</IfModule>
```

`ScriptAlias /cgi-bin/` makes Apache work, but but LSWS cannot find any existing `/cgi-bin/` folder under `/public_html/`. Hence it returns a 404 error.

To fix the problem, create a `cgi-bin` folder, and create `/cgi-bin/.htaccess`. Then, move the exact redirect rule there:

```
Redirect 301 /cgi-bin/n/v.cgi?c=1&id=930019428 /planet/
```

LSWS should work fine and won't return 404 anymore.
