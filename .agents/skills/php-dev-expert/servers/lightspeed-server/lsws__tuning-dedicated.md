# Dedicated with Large Site | Tuning Guide | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/tuning-dedicated/

---

# Dedicated Server with a Large Site[¶](#dedicated-server-with-a-large-site "Permanent link")

A dedicated server has different challenges than a shared hosting server. With shared hosting, usually you wish to give high performance without allowing a single user to monopolize server resources. However, on a dedicated server with a relatively large site, you want to maximize the performance without limiting the usage. Most of the default LiteSpeed WebAdmin Console settings are suitable for both scenarios, but there are a few exceptions. Here are some settings that you can adjust to push the maximum capacity.

## Enable Caching[¶](#enable-caching "Permanent link")

Caching is the key to improving site performance. It is fundamental. If possible, you should always enable caching. If there is [an LSCache plugin available for your application](https://docs.litespeedtech.com/lscache/#why-use-a-plugin), use it. If a plugin is not available, you may also consider [configuring LSCache through rewrite rules](https://docs.litespeedtech.com/lscache/noplugin/). Be sure to [test for a cache hit](https://docs.litespeedtech.com/lscache/start/#verify-your-site-is-being-cached) before undertaking any benchmark testing.

## Increase Maximum Connections[¶](#increase-maximum-connections "Permanent link")

With caching enabled to avoid PHP and MySQL processes, the site will undoubtedly be faster. However, there will still sometimes be uncached pages, such as shopping cart checkout pages, or other pages that have expired in cache. For this content, the performance of the application is at the mercy of PHP performance. The **PHP SuEXEC Max CONN** setting controls how many concurrent PHP processes are allowed. The default of `10` may not be enough for a dedicated server. How high you increase it depends on the size of the server, especially in terms of RAM and CPU. While you could technically set it as high as `1000`, higher is not necessarily better. An 8-core physical server, for example, will likely not benefit from any more than fifty to eighty processes.

## Avoid Forking PHP Worker Processes[¶](#avoid-forking-php-worker-processes "Permanent link")

With shared hosting, LiteSpeed Web Server dynamically forks PHP worker processes in order to save server resources. The server spawns new worker groups or forks a child PHP worker process as necessary to serve incoming requests. While this preserves server resources, it penalizes performance by slowing down PHP’s initial start-up response time. This trade-off makes sense for shared hosting, but you may not wish it on a dedicated server. Set the `LSAPI_AVOID_FORK` environment variable to `1` in order to keep the PHP worker process alive for a longer period of time. Doing so ensures that there will always be a PHP worker available to serve incoming requests, and no delay in PHP response time.

Tip

You can set the environment variable within WebAdmin Console in the **PHP** tab, **Environment Variables** field.

## Increase PHP Running Time[¶](#increase-php-running-time "Permanent link")

The purpose of **Max Idle Time** is to specify the number of seconds before an external application is stopped by the server. To make PHP live longer, simply increase **Max Idle Time** to a large number, such as `86400`, in the **PHP** tab, or at the **External App** level.

## Move PHP Session Data[¶](#move-php-session-data "Permanent link")

If the server has enough free memory, you can move PHP sessions and opcode cache disk storage to `/dev/shm`.

## Check PHP Info[¶](#check-php-info "Permanent link")

Take a look at your `phpinfo.php` page, and check these few modules:

### `timezonedb`[¶](#timezonedb "Permanent link")

It’s recommended to have the `timezonedb` module enabled for PHP. You may not notice the absence of `timezonedb` on your dedicated server, but enabling it can keep PHP from needing to scan hundreds of directories.

### `xdebug`[¶](#xdebug "Permanent link")

Make sure the PHP `xdebug`module is disabled if you don't need it. `xdebug` is for developer IDE integration only and should not be installed by default.

### `snmp`[¶](#snmp "Permanent link")

Same for `snmp`. The `snmp` module will scan and parse available MIB files, but not everyone needs `snmp` support.
