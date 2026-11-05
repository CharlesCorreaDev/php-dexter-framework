# PHP with cPanel and LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/php/

---

# PHP[¶](#php "Permanent link")

When LiteSpeed Web Server is installed on a cPanel/WHM installation, it auto configures LSPHP to work out of the box. There are no extra steps that are needed to get LSPHP working.

For WHM, LSWS will automatically detect the handler installed, and use the cPanel MultiPHP Manager/CloudLinux PHP Selector defined PHP version. There is no external app or script handler required unless you have some special need to override settings.

New installations of LSWS won't have any external apps or script handlers. If upgrading from earlier versions, some external apps and script handler settings may be carried over. Sometimes certain lsphp versions, such as `lsphp73` or `lsphp74`, may be missing. This is absolutely fine. You don't need to manually add them, since LSWS doesn't require them in an external app and will use either `ea-phpxx` or `alt-phpxx` automatically, as defined by cPanel MultiPHP Manager/CloudLinux PHP Selector.

## mod\_lsapi[¶](#mod_lsapi "Permanent link")

It is not recommended to use `mod_lsapi`. This is an Apache Module that can cause issues when running with LiteSpeed Web Server + LSAPI. To disable this, navigate to **WHM > MultiPHP Manager > PHP Handlers** and switch the **PHP Handlers** to anything other than `mod_lsapi`.

## PHP-FPM[¶](#php-fpm "Permanent link")

If you have set your PHP to use `FPM` inside of **WHM > MultiPHP Manager**, you will want to disable it. This can be done by disabling PHP-FPM for each version of PHP under **WHM > MultiPHP Manager**.

## Restart PHP[¶](#restart-php "Permanent link")

In the past, if there were any `php.ini` changes, you would have wanted to restart LSWS to apply the changes, as LSWS would restart PHP processes as well.

As of LiteSpeed Web Server version 5.3, PHP runs in Detached mode and will not be restarted when LSWS restarts. If you want to make `php.ini` changes effective immediately, there are a few ways to restart PHP processes.

### Specific User[¶](#specific-user "Permanent link")

To restart detached PHP processes for the account (vhost) level, you can touch a `.lsphp_restart.txt` file under the user's home directory:

```
$ touch /path/to/user/home/dir/.lsphp_restart.txt
```

Once `.lsphp_restart.txt` is created, the user's PHP will be restarted when the next request comes in. The file `.lsphp_restart.txt` will not be removed. LSWS will check the timestamp of the file to decide if the user's detached PHP needs to be restarted or not. You can manually remove it if you want to but it's not necessary. Every time you want to restart that user's detached PHP, touch the file again, whether it already exists or not, in order to refresh the timestamp.

To maintain CloudLinux `mod_lsapi` CRIU feature compatibility, the server will restart PHP if it finds a `mod_lsapi_reset_me` file as well.

```
$ touch /path/to/user/home/dir/mod_lsapi_reset_me
```

The user may also restart detached PHP processes from the **Advanced** page of the LiteSpeed Web Cache Manager cPanel plugin, which is accessible from within the cPanel dashboard.

### Server[¶](#server "Permanent link")

There are two ways to restart detached PHP processes the server level.

#### Method 1[¶](#method-1 "Permanent link")

Use the `pkill lsphp` command. All PHP workers will be immediately stopped and a new set of workers will restart right away.

#### Method 2[¶](#method-2 "Permanent link")

Touch an `.lsphp_restart.txt` file under the `<lsws_server_root>/admin/tmp/` directory. (Usually that is `/usr/local/lsws/admin/tmp/`.)

```
$ sudo touch /usr/local/lsws/admin/tmp/.lsphp_restart.txt
```

This can also be accomplished from the **Actions** page of the LiteSpeed WebAdmin Console, or by using the **Restart Detached PHP Processes** button in our control panel plugins.

All running detached PHP processes will be restarted, but not immediately. Instead, they will restart one by one, as soon as the server needs to use each PHP handler.
