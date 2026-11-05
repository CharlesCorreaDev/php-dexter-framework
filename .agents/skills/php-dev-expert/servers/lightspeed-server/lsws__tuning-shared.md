# Shared Hosting Server | Tuning Guide | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/tuning-shared/

---

# Shared Hosting Server[¶](#shared-hosting-server "Permanent link")

We are often asked something like the following:

> What settings do you recommend in order to optimize LiteSpeed Web Server for shared hosting and provide maximium performance to our users?

In a control panel environment, LiteSpeed Web Server reads existing Apache configuration files and acts accordingly. But there are also many settings within the WebAdmin Console, and it can be hard to know which settings should be tuned to improve shared hosting server performance. LiteSpeed is installed with a default configuration that is optimized for real world situations. These settings should be appropriate for most scenarios, and you should not need to worry about tuning. In fact, most settings have little to no performance impact. That said, there are a few areas that can be further optimized for a shared hosting environment.

## Enable LSCache[¶](#enable-lscache "Permanent link")

Caching is the key to improving site performance. You should configure the cache root and cache policy [at the server level](https://docs.litespeedtech.com/lscache/start/#configure-cache-root-and-cache-policy) and for each virtual host. Then, install [the related LSCache plugin](https://docs.litespeedtech.com/lscache/#why-use-a-plugin) for the application used on that vhost. If a plugin is not available, you may also consider [configuring LSCache through rewrite rules](https://docs.litespeedtech.com/lscache/noplugin/). LiteSpeed provides a [WordPress Cache Manager for cPanel, Plesk, and DirectAdmin](https://docs.litespeedtech.com/cp/cpanel/wp-cache-management/). This allows you to scan the server for all installed WordPress instances, and install/activate the LSCache Plugin for WordPress en masse.

## Install and Enable PHP Opcode Cache[¶](#install-and-enable-php-opcode-cache "Permanent link")

An opcode cache is a performance-enhancing extension for PHP. It uses shared memory to store the code generated when a PHP script is interpreted. This allows future requests to avoid the overhead of parsing and compilation, and reduces the execution time for PHP. Check `phpinfo.php` for your application to ensure PHP opcode cache is enabled.

## Increase PHP Memory Limit[¶](#increase-php-memory-limit "Permanent link")

Quite often PHP’s memory limit is set to a low value (like 32M or 64M) by the control panel. We recommend increasing the memory limit to a larger value appropriate to the needs of your application. WordPress is happy with `512`, while Magento might be better off with `768` or `1024`. Check `phpinfo.php` to ensure you have a large enough memory limit. Be careful not to set it *too* high, though, as this can lead to memory leaks which will hurt performance instead of improving it.

## Adjust Maximum Connections[¶](#adjust-maximum-connections "Permanent link")

The challenge for a shared hosting server is that you want to boost performance for each site, but at the same time, you don’t want any single user to monopolize the server’s resources. **PHP SuExec Max Conn** (found in **Configuration > Server > General > Using Apache Configuration File**) controls the maximum number of concurrent LSPHP processes allowed for each account. The default of `10` is good for most cases. If your server can handle it, you can slightly increase the value to `15` or `20`. This setting impacts all accounts on your server.

Tip

Increasing maximum connections does not necessarily mean an increase in performance for your users. This setting simply allows users to start more worker processes. You need to strike a balance between allocated CPU/RAM resources and allowed processes. For example, it would be unrealistic to attempt `100` max connections on a server with two cores and 2GB RAM. It would never work. Even `20` might be too much for the server to handle in that scenario.

If you wish to adjust the maximum connections for a particular account, while leaving the rest as-is, you can add the following code to the virtual host Apache configuration file:

```
<IfModule LiteSpeed>
  LSPHP_Workers 100
</IfModule>
```

You would, of course, replace `100` with the number of maximum connections you wish for that account to have.

### Indicators[¶](#indicators "Permanent link")

What are some good indicators that you may need to allow more concurrent processes? You can check Real-Time Stats and `stderr.log`, but ultimately it is the System Administrator’s judgement that determines whether users should have more PHP processing power, or whether power should be limited and more restrictions added.

#### Real-Time Stats[¶](#real-time-stats "Permanent link")

Navigate to **WebAdmin Console > Actions > Real-Time Stats > External Application** and check the value of **WaitQ**. If It is frequently higher than `0`, it could mean that **PHP SuExec Max Conn** is not high enough for the domain.

Tip

**WaitQ** frequently higher than zero might also mean that CPU is limited and that the workers can’t keep up. If CPU is limited, increasing workers won’t solve the issue.

#### `stderr.log`[¶](#stderrlog "Permanent link")

Check your stderr.log. You may see something like this:

```
[STDERR] Reached max children process limit: 10, extra: 3, current: 13, please increase LSAPI_CHILDREN.
```

Here `LSAPI_CHILDREN` refers to the **PHP suEXEC Max Conn** setting, and it may not be enough for that domain.

## Increase PHP Running Time[¶](#increase-php-running-time "Permanent link")

The purpose of **Max Idle Time** is to specify the number of seconds before an external application is stopped by the server. You can increase this number if you have a machine with idle memory. To make PHP live longer, simply increase **Max Idle Time** to a large number, such as `3600`, in the **PHP** tab, or at the **External App** level.

## Look for High CPU/Memory Usage[¶](#look-for-high-cpumemory-usage "Permanent link")

Check your `top` output to determine which processes or users are using too much CPU or memory. [Verify cache is enabled properly](https://docs.litespeedtech.com/lscache/start/#verify-your-site-is-being-cached) for any offending domains. Also check the domains’ access logs to determine if users are accessing a URL with a combination of query strings that renders the URL uncacheable. Sometimes buggy PHP code is to blame for performance issues.

## Check PHP Info[¶](#check-php-info "Permanent link")

Take a look at your `phpinfo.php` page, and check these few modules:

### `timezonedb`[¶](#timezonedb "Permanent link")

It’s recommended to have the `timezonedb` module enabled for PHP. It’s common to see poor performance on a server with shared storage, as the I/O latency sometimes causes trouble. A lack of `timezonedb` can be very costly, since PHP will need to scan hundreds of directories.

### `xdebug`[¶](#xdebug "Permanent link")

Make sure the PHP `xdebug`module is disabled if you don't need it. `xdebug` is for developer IDE integration only and should not be installed by default.

### `snmp`[¶](#snmp "Permanent link")

Same for `snmp`. The `snmp` module will scan and parse available MIB files, but not everyone needs `snmp` support.
