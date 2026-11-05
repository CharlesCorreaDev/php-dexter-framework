# Server Issues with LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/ts-server/

---

# Server Issues[¶](#server-issues "Permanent link")

This page will address problems that may occur with a LiteSpeed Web Server/WHM installation. The installation process is covered in our [Quick Start Guide](lsws__cp__cpanel__quickstart.md#installation).

**Note:** For free support of LSWS please use the [LiteSpeed forum](http://www.litespeedtech.com/support/forum/). If you have an issue with cPanel (even while using LSWS) please contact cPanel support. They are fully trained to handle LiteSpeed Web Server.

## Insufficient Process Memory[¶](#insufficient-process-memory "Permanent link")

Insufficient process memory may result in the following error messages (when you try to build matching PHP):

```
Found Errors

ERROR: /usr/local/bin/php -i returns 6 

You can try to build matching PHP from command line: 
"/usr/local/cpanel/whostmgr/cgi/lsws/cmd_buildmatchingphp.sh"
```

or

```
Found Errors

ERROR: /usr/local/bin/php -i returns 134

You can try to build matching PHP from command line: 
"/usr/local/cpanel/whostmgr/cgi/lsws/cmd_buildmatchingphp.sh"
```

To fix this, try increasing the **Max cPanel process memory (Minimum: 512)** in **WHM > Server Configuration > Tweak Settings**.

## LiteSpeed Does Not Restart When Configuration Changes[¶](#litespeed-does-not-restart-when-configuration-changes "Permanent link")

In order for configuration changes to take effect, LiteSpeed Web Server should restart automatically. Do **NOT** uncheck the `httpd` service under **WHM > Service Configuration > Service Manager**. If unchecked, WHM will not restart LiteSpeed automatically when configurations have been changed.

## Incorrect gcc Permissions[¶](#incorrect-gcc-permissions "Permanent link")

cPanel may set permissions for `/usr/bin/gcc` to `0700`. This will break our PHP build script. To fix this, change the permissions for the directory:

```
chmod 0755 /usr/bin/gcc
```

After finishing your PHP build, you can change permissions back:

```
chmod 0700 /usr/bin/gcc
```

## mod\_lsapi Incompatibility[¶](#mod_lsapi-incompatibility "Permanent link")

LSWS is not compatible with mod\_lsapi so we recommend disabling it *before* installing LiteSpeed. All the functionality that mod\_lsapi offers is already built directly inside of LSWS, so mod\_lsapi is unnecessary, and in fact may cause issues and performance decreases.

## Unexplained site downtime[¶](#unexplained-site-downtime "Permanent link")

If you have sites experiencing unexplained downtime, and you are using a proxy shield (such as CloudLinux Imunify360) we recommend disabling the shield. If the downtime ceases, then this is likely not a LiteSpeed or cPanel issue. Please contact the proxy shield software's support team.

## 404 and Default SSL Certificate Shown for Dedicated IP Domain[¶](#404-and-default-ssl-certificate-shown-for-dedicated-ip-domain "Permanent link")

There is a use case where you may have a dedicated IP for your cPanel account, and only one domain.

Under normal circumstances, if you directly access the dedicated IP, the correct SSL certificate and website will be shown. You may find, though, that the main server certificate shows a 404 error, if your account has been suspended and then reactivated.

This is because the sequence of SSL virtual host configuration in httpd.conf matters. For a given IP, the default SSL certificate used is the first SSL vhost configured for that IP. In the case of an account that has been suspended and then reactivated, the vhost configuration sequence has been changed. As such, the default SSL vhost is configured *first* for the IP, and so the default certificate is used.

You can manually move the vhost configuration for your domain above the default SSL vhost, so that your IP will use the certificate configured for your vhost.

How to force the vhost configuration to be generated in the desired order is out of the control of LiteSpeed Web Server software. If you wish to do this, please contact the control panel vendor for further assistance.

## LSWS Not Logging but Apache Is[¶](#lsws-not-logging-but-apache-is "Permanent link")

There are two ModSecurity log modes: Concurrent and Serial. Apache supports both modes, but LiteSpeed Web Server only supports the Serial audit log mode.

If you are finding that logging is not working under LSWS but it is fine under Apache, it may be your log mode.

Set your ModSecurity log mode to Serial like so:

```
SecAuditLogType Serial
```

## LSWS Randomly Killed[¶](#lsws-randomly-killed "Permanent link")

The `wswatch` script was developed to monitor and start `lshttpd` automatically when needed.

If you are having an issue with a cPanel process randomly killing LiteSpeed Web Server, first check **cPanel Service Manager** and make sure the **Enabled** and **Monitor** boxes are ticked for Apache Web Server. If that doesn't help, you can use `/usr/local/lsws/bin/wswatch.sh`, which will restart LiteSpeed when it detects it is no longer running.
