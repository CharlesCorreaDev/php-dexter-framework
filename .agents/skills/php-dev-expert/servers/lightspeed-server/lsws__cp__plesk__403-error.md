# 403 Error | Troubleshooting | Plesk | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/plesk/403-error/

---

# Troubleshooting 403 Error[¶](#troubleshooting-403-error "Permanent link")

Error `403 Forbidden` can be triggered by many things, including permission issues, configuration restrictions, security settings, etc.

Tip

Have you checked your log files? They usually show you the cause of the error!

It is rare for the web server to be the cause of a 403 error, but just to be safe, you should rule that out first thing by checking whether the error occurs with Apache as well.

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

## File Permissions[¶](#file-permissions "Permanent link")

If the file or directory has the wrong permissions, you may see Error 403. Fix the permissions, and the error goes away.

## Wrong File Owner[¶](#wrong-file-owner "Permanent link")

Make sure that the file or directory belongs to the correct user. Lets say that your `httpdocs` directory is owned by the username `test`, and you try to create a file `index.php` as user `test1`. That can trigger the error, as test1 will not have permission to read the file or the directory.

## Denied From the .htaccess File[¶](#denied-from-the-htaccess-file "Permanent link")

Your `.htaccess` may have code like this:

```
deny from all
```

which indicates that all requests will be automatically denied, or it may say something like this:

```
deny from <your ip address>
```

which indicates that all requests coming from `<your ip address>` will be denied.

Access is restored, when the `deny` line is removed or commented out with a `#` symbol.

## Forbidden via a Rewrite Rule[¶](#forbidden-via-a-rewrite-rule "Permanent link")

If you have a rewrite rule that uses an `F` flag, any requests that match the preceding condition will be sent a 403 Forbidden code. That would look something like this:

```
RewriteCond (SOMECONDITION)
RewriteRule ^(.*)$ – [F,L]
```

## Indexes[¶](#indexes "Permanent link")

You may be using directory indexing to prevent a list of files being displayed for when accessing a directory.

However, this can return a 403 error, if the **autoindex** option is `ON` but there is no actual index file (`index.php`, `index.html`, etc.) for that directory.

If you have this line in the `.htaccess` file:

```
Options -Indexes
```

Remove the line, or turn autoindex on:

```
Options +Indexes
```

## Problem/Missing PHP Handler[¶](#problemmissing-php-handler "Permanent link")

If the PHP handler is not set up correctly, the web server will return error 403. This will be shown in the server error log file and you will need to check it for more information. After that, create the correct PHP handler to resolve the issue.

## File Restriction[¶](#file-restriction "Permanent link")

In **Litespeed WebAdmin > Configuration > Server > Security** there is an option called **Restricted Permission Mask**. If you set this to a high value like `644`, very few people will actually be granted permission to view your pages. Lower the value to be more permissive with access.

## Incorrect File Ownership After Migration[¶](#incorrect-file-ownership-after-migration "Permanent link")

When migrating or uploading files to a Plesk account, some image files might incorrectly be assigned to `nobody:nobody`, when they should be `user:psacln`.

```
/var/www/vhosts/jsmith.com/httpdocs>ls -ald images/detailed/130/Untitled-1-Recovered_urba-uz.jpg
-rw-rw-rw- 1 nobody nobody 103609 Apr 12 11:21 images/detailed/130/Untitled-1-Recovered_urba-uz.jpg
/var/www/vhosts/jsmith.com/httpdocs>ls -ald images/detailed/130
drwxrwxrwx 2 nobody nobody 36864 Apr 14 15:12 images/detailed/130
/var/www/vhosts/jsmith.com/httpdocs>ls -ald images/detailed
drwxrwxrwx 51 jsmith psacln 4096 Apr 11 13:16 images/detailed
/var/www/vhosts/jsmith.com/httpdocs>ls -ald images
drwxrwxrwx 48 jsmith psacln 4096 Mar 31 16:30 images
```

The **Force Strict Ownership** setting in LSWS Admin specifies whether to enforce strict file ownership checking. If it is enabled, the web server will check if the owner of the file being served is the same as the owner of the virtual host. If it is different, a `403 Access Denied` error will be returned.

To fix the problem, either change all files `user:group` to `user:psacln` ( in the above example, that would be `jsmith:psacln`), or disable **Force Strict Ownership** in LSWS Admin.

## Incorrect PHP handler after migration from cPanel to Plesk[¶](#incorrect-php-handler-after-migration-from-cpanel-to-plesk "Permanent link")

When migrating from cPanel to Plesk, the `AddHandler` directive that is targeted to `ea-php` in .htaccess may be carried over. This does not exist in Plesk, and will lead to a 403 error. Such directives should be removed from .htaccess.

## Firewall Block[¶](#firewall-block "Permanent link")

If Mod Security, WAF, fail2ban, CPHulk, etc. are enabled, depending on what and how many requests you are doing for a particular website, the firewall can block you. In most cases your IP address will be denied in the system firewall (iptables, firewalld etc) and you need to remove your IP address in order to avoid the error.

If mod\_security rules are enabled, they may be triggerred for 403 error. For example:

```
[modsecurity] [Fri Apr 26 10:07:36 2019] [error] [client 111.111.111.111] ModSecurity: Access denied with code 403, [Rule: 'TX:ANOMALY_SCORE' '@ge %{tx.in_example_score_threshold}'] [id "949110"] [msg "Inbound Anomaly Score Exceeded (Total Score: 10)"] [severity "CRITICAL"] [tag "application-multi"] [tag "language-multi"][tag "platform-multi"] [tag "attack-generic"]
```

## Per Client Throttling[¶](#per-client-throttling "Permanent link")

Similar to the previous case, if you have strict throttling rules and you make too many connections, it can trigger error 403. For example, you may use LiteSpeed's **Per Client Throttling** feature and set **Connection Soft Limit** and **Connection Hard Limit**. If any visitor's IP goes over that connection limit, it will trigger a 403 error and show the following in the logs:

```
[NOTICE] [192.0.2.0] bot detected for vhost [N/A], reason: OverConnSoftLimit, close connection
```

or

```
[NOTICE] [192.0.2.0] bot detected for vhost [N/A], reason: OverConnHardLimit, close connection!
```

## reCAPTCHA[¶](#recaptcha "Permanent link")

If a visitor fails on reCAPTCHA verification, it may trigger a 403 error.

## WordPress Protection[¶](#wordpress-protection "Permanent link")

If a visitor hits the LiteSpeed WordPress Protection feature with over-limit connections, it may trigger a 403 error.

## GeoIP/IP2Loc or Similar Modules[¶](#geoipip2loc-or-similar-modules "Permanent link")

If GeoIP or IP2Loc is allowed, they can block access to files like `wp-login` (WP Admin). In this case you need to allow them access in order to avoid the error.

## Error 403 in LiteSpeed WebAdmin[¶](#error-403-in-litespeed-webadmin "Permanent link")

There is an option to restrict access to the WebAdmin. If you forget to add your IP address, or if it changes, you can edit it from the configuration file in `/usr/local/lsws/admin/conf/admin_config.xml`:

```
<security>
 <accessControl>
   <allow>192.0.2.0</allow>
   <deny>ALL</deny>
 </accessControl>
</security>
```

Put your IP address in the allow list. For multiple IP addresses it looks like this:

```
<allow>192.0.2.0,192.0.2.1</allow>
```

## Additional Information[¶](#additional-information "Permanent link")

The best way to diagnose and resolve that error is to check the system configuration, website configuration and the error logs. If you are unsure what is the correct configuration for some option that is triggering error 403, you can see the documentation for that option.
