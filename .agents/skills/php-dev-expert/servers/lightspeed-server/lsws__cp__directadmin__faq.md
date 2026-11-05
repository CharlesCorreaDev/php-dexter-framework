# Frequently Asked Questions | DirectAdmin | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/directadmin/faq/

---

# Frequently asked questions[¶](#frequently-asked-questions "Permanent link")

## What if I see a failure message when I request a trial license during installation?[¶](#what-if-i-see-a-failure-message-when-i-request-a-trial-license-during-installation "Permanent link")

We track all licenses by Server IP. If your server has been given a trial license before, it won't be able to request another automatically. We will, however, reset it by request for eligible servers. To request another trial, please [contact us](https://store.litespeedtech.com/store/submitticket.php?step=2&deptid=1).

## Will LiteSpeed automatically sync all of my current and new domains?[¶](#will-litespeed-automatically-sync-all-of-my-current-and-new-domains "Permanent link")

LiteSpeed is a full-service drop-in replacement for Apache on DirectAdmin servers. As a result, it will automatically pick up all of the domains hosted on your server. It will also work with any new domains without error.

## Will LiteSpeed match all of my PHP installations?[¶](#will-litespeed-match-all-of-my-php-installations "Permanent link")

LiteSpeed will install PHP according to the options selected during installation, or it will pick up options from the `lsws.options` file in the installation directory, if available.

## How do I troubleshoot errors with LiteSpeed Web Server?[¶](#how-do-i-troubleshoot-errors-with-litespeed-web-server "Permanent link")

If you see an error on your websites while using LiteSpeed, please refer to the [LiteSpeed Web Server documentation](lsws__troubleshooting.md).

## How do I change my WebAdmin port?[¶](#how-do-i-change-my-webadmin-port "Permanent link")

Some services like Bitninja also use TCP 7080, which is LiteSpeed WebAdmin Console's default port. Without it, LiteSpeed will not start. If 7080 is assigned to another service, you can change WebAdmin's port like so:

1. Open `/usr/local/lsws/admin/conf/admin_config.xml` using your preferred editor.
2. Change the value of **Listener** from `7080` to your desired available port.

## How do I change the LiteSpeed WebAdmin Console password?[¶](#how-do-i-change-the-litespeed-webadmin-console-password "Permanent link")

You may change LiteSpeed's WebAdmin Console password, like so:

```
/usr/local/lsws/admin/misc/admpass.sh
```

## How do I add the LSCache plugin to WordPress websites?[¶](#how-do-i-add-the-lscache-plugin-to-wordpress-websites "Permanent link")

You can mass enable or manage LiteSpeed Cache through [the DirectAdmin plugin](lsws__cp__directadmin__da-litespeed-plugin__da-install.md). Alternatively, log in to the individual WordPress Dashboard and install the plugin directly from the [WordPress Plugin Directory](https://wordpress.org/plugins/litespeed-cache/).

## How do I install LiteSpeed Cache extensions on other CMSes?[¶](#how-do-i-install-litespeed-cache-extensions-on-other-cmses "Permanent link")

LiteSpeed Cache provides downloadable extensions for various other CMSes, like Joomla and Drupal. Additionally, you can write your own bespoke LSCache extension if you have development skills. See [our LSCache documentation](https://docs.litespeedtech.com/lscache/) for more information.

## How do I use LiteSpeed Cache on CMSes where no plugin exists?[¶](#how-do-i-use-litespeed-cache-on-cmses-where-no-plugin-exists "Permanent link")

Please check out [our no-plugin setup guidelines](https://docs.litespeedtech.com/lscache/noplugin/installation/).

## What happens if my LiteSpeed license domain/RAM limit is crossed, or if my license expires?[¶](#what-happens-if-my-litespeed-license-domainram-limit-is-crossed-or-if-my-license-expires "Permanent link")

In a case where your LiteSpeed license is deemed invalid (due to exceeding limits or reaching the expiration date), your system will automatically switch to Apache.

## Can I disable the Apache fallback for invalid LSWS licenses?[¶](#can-i-disable-the-apache-fallback-for-invalid-lsws-licenses "Permanent link")

LiteSpeed Web Server cannot function without a valid license. For that reason, when a valid license cannot be verified, LSWS automatically switches to Apache. This is done to minimize disruption to the websites hosted on the server.

As of LSWS v6.2.2 you can override this behavior. Add an empty `.stay_with_lsws` file to the `/usr/local/lsws/admin/tmp/` directory, like so:

```
touch /usr/local/lsws/admin/tmp/.stay_with_lsws
```

When LSWS fails to detect a valid license, if this file is found, LSWS will not switch to Apache. Any websites hosted on the server will go down, and users will be unable to access them.

## Which license should I choose?[¶](#which-license-should-i-choose "Permanent link")

[Visit our website](https://www.litespeedtech.com/products/litespeed-web-server/choosing-a-license) for a complete guide to choosing a license. Don't worry if you are not sure what level will be right for your needs. You can upgrade or downgrade your license at any time.

## I want to use DirectAdmin with OpenLiteSpeed instead. How do I do it?[¶](#i-want-to-use-directadmin-with-openlitespeed-instead-how-do-i-do-it "Permanent link")

DirectAdmin does support OpenLiteSpeed as well and can be installed using instructions [here](https://docs.openlitespeed.org/panel/directadmin/).

Info

Installation for LiteSpeed Web Server on DirectAdmin is done using DirectAdmin's CustomBuild Plugin. Please get in touch directly with [DirectAdmin](https://www.directadmin.com/support.php) for any CustomBuild support-related queries. For any LiteSpeed-related queries, please get in touch with us at `support@litespeedtech.com`.

## How do I control HTTP/2 and HTTP/3 via Apache configuration?[¶](#how-do-i-control-http2-and-http3-via-apache-configuration "Permanent link")

You can enable and disable a variety of protocols in `httpd.conf`, using the `SpdyEnabled` directive.

Example

Disable all protocols

```
<IfModule LiteSpeed>
SpdyEnabled off
</IfModule>
```

Example

Enable HTTP protocols and disable everything else

```
<IfModule LiteSpeed>
SpdyEnabled http2 http3
</IfModule>
```

HTTP protocols are enabled by default, while SPDY protols are disabled by default.

| Parameter | Function | Default Value |
| --- | --- | --- |
| `spdy2` | Enable SPDY/2 | Disabled |
| `spdy3` | Enable SPDY/3 | Disabled |
| `http2` | Enable HTTP/2 | Enabled |
| `http3` | Enable HTTP/3 | Enabled |
| `off` | Disable all protocols |  |

Tip

When you use this directive to explicitly enable one or more protocols, anything not selected will be *disabled*. For example, `SpdyEnabled http2` will enable HTTP/2, while SPDY/2, SPDY/3 and HTTP/3 will be disabled. Be careful not to inadvertantly disable a protocol you wanted to use!

## How do I set up cache root and enable LiteSpeed Cache throughout the server?[¶](#how-do-i-set-up-cache-root-and-enable-litespeed-cache-throughout-the-server "Permanent link")

There's [a plugin for this](lsws__cp__directadmin__da-litespeed-plugin__da-install.md). You can use the method below if you prefer not to use the plugin.

### Set server-level cache root[¶](#set-server-level-cache-root "Permanent link")

Add the following lines to the `/etc/httpd/conf/extra/httpd-includes.conf` file:

```
<IfModule Litespeed>
  CacheRoot /home/lscache
</IfModule>
```

Warning

It is recommended that you set the server-level cache root to `/home/lscache/` or a disk partition with enough space. Please never set cache root to `/tmp/` folder.

### Set virtual-host-level cache root for all virtual hosts[¶](#set-virtual-host-level-cache-root-for-all-virtual-hosts "Permanent link")

Create a `/usr/local/directadmin/data/templates/custom/cust_httpd.CUSTOM.2.pre` file with the following content:

```
<IfModule Litespeed>
  CacheRoot lscache
</IfModule>
```

This sets each virtual host's cache directory to its home directory (`/home/<user>/lscache`).

Apply these changes to all virtual hosts by running the following command:

```
cd /usr/local/directadmin/custombuild
./build rewrite_confs
```

LiteSpeed Web Server will restart after running the above commands.
