# LSCache Basic Concepts | LiteSpeed Cache | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/basics/

---

# LiteSpeed Cache Basics[¶](#litespeed-cache-basics "Permanent link")

LiteSpeed can store pages in a public cache or a private cache, or it can leave a page uncached, if necessary.

In general, if a page can be served as a static page to every user, then it can be publicly cached. If it can be served as a static page to a *particular* user multiple times, then it can be privately cached. If the response is different every time the page is requested (and therefore cannot be served as a static page to *anyone*) then the page must not be cached.

## Public, Private, and ESI Caching[¶](#public-private-and-esi-caching "Permanent link")

### Public Cache[¶](#public-cache "Permanent link")

If a page can be served as a static page to every user, then it can be publicly cached.

Any page that has no personalized content whatsoever is a good candidate for public cache.

A blog archive page, for instance, could work, if it has no areas on the page that include personalized greetings or anything of that kind. When a user visits the page, they see exactly the same content as the previous user, and the next user.

Many simple sites do just fine with public cache. If you don’t allow your visitors to create logins, and you don’t create any special content based on data that you can learn from their IP address (for instance), the chances are very good that public cache will be adequate for your site.

- PRO: Very little storage space is required.
- CON: There’s no opportunity for personalization – everyone gets the exact same page.

### Private Cache[¶](#private-cache "Permanent link")

If a page can be served as a static page to a particular user multiple times, then it can be privately cached.

A classic example of data that should be cached privately is a shopping cart. You certainly do not want every visitor to your shop to be served the exact same shopping cart page. The contents of one user's cart are bound to differ from the contents of another user’s cart.

The simplest way to deal with this is to store the shopping cart page in private cache.

This is fairly simple to set up, but you have to be careful if you have storage limitations. If you have 10,000 visitors to one page, that’s 10,000 copies of that page in private cache. It adds up!

- PRO: You can personalize each page to a great extent
- CON: A lot more space is required to store all of those individual pages.

### ESI (Edge Side Includes)[¶](#esi-edge-side-includes "Permanent link")

ESI provides an opportunity to combine all types of content on a single page. Usually, you would start with a public page, and then "punch holes" for private or uncached content.

A good example of this would be a shop with a cart widget. The content in the widget must be cached privately, as it differs from customer to customer, but the rest of the page, is suitable for the public. In this case, you would cache the page publicly, and use ESI to cache just the widget in private cache. The mixed content would be re-assembled and served together.

- PROs: Very little space is required, and there’s room for a small amount of personalization.
- CON: It consumes more resources to show a visitor a page that needs to be assembled from several pieces than it does to show them a page that is already intact.

Video

See a video demonstration of **What is Edge Side Includes (ESI)?** [here](https://www.youtube.com/watch?v=uYpR6D8n3oE).

For detailed information about LiteSpeed's ESI implementation, please see our [Developer's Guide](lscache__devguide__advanced.md#esi).

### Implementation[¶](#implementation "Permanent link")

We strongly recommend using an LSCache plugin [if one is available for your web app](lscache__index.md#available-plugins). Our plugins are built to understand the app rules and implement public, private, and ESI caching as necessary.

If there is no plugin available, please see our instructions for [setting up LSCache with rewrite rules](lscache__noplugin__settings.md).

## Uncacheable Sites[¶](#uncacheable-sites "Permanent link")

There are some cases where the content of a page is different every time it is requested. A random number generator is one such example. If you cache a page that is intended to display a different random number each time it is requested, you will break the functionality of that page.

Advertising sites provide another potentially uncacheable scenario. Typically such sites run customized PHP scripts which use unique query strings for each request. `example.com?query=ABC` is considered a different URL than `example.com?query=DEF`, even though they are both technically `example.com`. Because the query strings actually have an effect on the content displayed, they cannot be [simply ignored](lscache__start.md#drop-junk-query-strings). Essentially, every single request for `example.com` would result in a separate cached entry because of its unique query string.

This has two effects:

1. No visitor is ever served from cache, because each unique URL is a cache miss.
2. The disk is filling up with thousands of generated copies of the same page, but is never serving any of them to anyone.

Our support team has seen 300GB of space quickly fill up with millions of versions of pages that should never have been cached!

For sites like these we recommend:

- Do not enable cache globally for the site
- Selectively choose the pages on the site that may be cached, and [configure them via rewrite rules](lscache__noplugin__settings.md).

## Cache Storage[¶](#cache-storage "Permanent link")

In order to understand cache storage, it's helpful to know a few terms:

- **Cache Object**: A cache entry stored in LSCache. A cache object maps to a URL plus an optional variation. For example, if one URL has a desktop view and a mobile view, there will be two cached objects for that URL: one for each of those views. (You can learn more about cache varies [here](lscache__devguide__advanced.md#cache-varies)). Cache objects may be full page content or content from ESI blocks.
- **Cache Manager SHM**: Shared memory that the cache manager uses to store information about cache objects. It is a memory-mapped file persistent to disk. You can [point it to a RAM disk](lscache__start.md#using-a-ram-disk) for faster access. Just keep in mind that the data on a RAM disk will be lost if your physical server reboots. (A LiteSpeed server restart will not affect this.)
- **LRU**: Least Recently Used cache replacement.

When using LSCache, you don't have to worry about your cache directory maintenance. LiteSpeed Web Server does all of this for you in a light and efficient way. Once your cache is fully warmed up, the cache directory size will not grow any further. When LiteSpeed receives a purge request, it will simply mark the related cache objects as stale. In order to avoid heavy disk operation, it does not delete the actual cache files on disk at this time.

Each cache object has a corresponding entry in the cache manager SHM. LiteSpeed will check periodically for expired cache objects based on the defined TTL (Time to Live) for each object. LiteSpeed will select a list of objects based on LRU, and delete the related cache files on disk. Each time this happens, the batch size is small enough that it will not impact server performance.

Note

The clean-up process is based on TTL only, it does not check for purge events. When you press the **Purge All** button, you will not see the cache storage folder get emptied.

## Purging the Cache[¶](#purging-the-cache "Permanent link")

Sometimes the cache directory maintenance described above can miss some entries. For this reason, LiteSpeed Web Server periodically runs a cron job to delete outdated cache files in server-level storage.

This cron job does *not*, however, apply to virtual-host-level storage. If your vhost has a custom storage location (i.e. it is not using server-level storage), then you might want to consider running your own periodic cleanup. The methods below explain a few ways of doing that.

### Cron Job[¶](#cron-job "Permanent link")

A cron job may be set to clear out old cache files that are past the set **Time To Live (TTL)**.

Run the crontab either as the root user or as the cache owner for self-management.

```
crontab -e
```

The virtual host cache root directory is normally located in `/home/$USER/lscache` for shared hosting users, or `/tmp/diskspace` for dedicated servers. Here's an example for a site that has content cached for a very short time:

Example

This cron job deletes cached files that are more than 8 minutes old every 10 minutes. Since the cache TTL is set at 120 seconds (2 minutes), it is safe to delete these files as they are way past their TTL. If the TTL was longer, you would want to adjust the file age accordingly.

```
*/10 * * * * root find /virtualhost/cache/root/directory/ -type f -mmin +8 -delete 2>/dev/null
```

Here's a good example for a shared hosting server:

Example

This cron job runs every hour on the hour. It checks if the lscache folder size is more than 30Gb. If so, it will delete any cached files that are more than 1440 minutes old.

```
0 0 * * * LARGE_LSDIR="$(du --threshold=30G -sh /home/*/lscache/ | cut -f2-)"; for ls_path in $LARGE_LSDIR; do echo "Clean up $ls_path"; find $ls_path -type f -mmin +1440 -exec rm -f {} \;; done
```

### The cleancache.sh Script[¶](#the-cleancachesh-script "Permanent link")

LSWS comes with a script that you can run on demand:

```
/usr/local/lsws/admin/misc/cleancache.sh /path/to/cache/directory/
```

This script deletes all cache files that were created or modified over 24 hours ago. Again, be careful with this. If your site's TTL is greater than 24 hours, this script will remove files that may not have expired.

### Curl Command[¶](#curl-command "Permanent link")

If you use `%{REQUEST_METHOD}` in your rewrite rules (it is optional in general), and you want the ability to purge the cache via curl, you will need to add `PURGE`, like so:

```
RewriteCond %{REQUEST_METHOD} ^HEAD|GET|PURGE$
```

Then the cache purge can be initiated through the following curl command:

```
curl -i -X PURGE http://example.com/
```

Note

If the home page `http://example.com/index.php` needs to be purged, the trailing `/` is required. The index page will not be purged without it.

The above curl command can be run either within the server or from a remote server. If a purge curl command is to be run from a remote server, the remote server IP will need to be added to LiteSpeed Web Server's Trusted IP list. Navigate to **LSWS Admin Console > Configuration > Server > Security**, and append the source IP with a trailing `T` to **Allow List**. (The `T` signifies the IP is Trusted. It should look like `ALL, 192.0.2.0T`) .

### By URL[¶](#by-url "Permanent link")

There is a script built into LSWS which will allow you to purge the cache by URL. It is located at `/usr/local/lsws/admin/misc/purge_cache_by_url`:

```
 Usage: purge_cache_byurl -(r|p) [-ip <ip>] <URL>

Purge/Refresh cache for specific URL.

Required Arguments:
 -r|-p,    Refreshes/Purges the cache for specific page.
 *,        Full URL of the specific page to refresh/purge.

Optional Arguments:
 -ip,      IP to resolve the hostname of the request to (Only
           if it differs from what the DNS A record is set to.)

Notes:
  If running on a server other than the one the site is located on,
  make sure to add this machines IP to the trusted list inside of
  LiteSpeed Web Server or else the Purge/Refresh requests will not
  work.
```

Example

```
/usr/local/lsws/admin/misc/purge_cache_by_url -r mywebsite.com
```

Example

```
/usr/local/lsws/admin/misc>./purge_cache_by_url -p www.domain.com          
HTTP/1.0 200 Purged
Date: Wed, 03 Jun 2015 05:48:31 GMT
Server: LiteSpeed
Connection: close
```

Note

The URL parameter must be a specific URL and can not include wildcards, otherwise it may return "400 - Bad request error". Alternately, if you want to delete all cached files, you can do it through an OS command such as: `#rm -rf /lsws-cache-folder*/`.

Note

Server IP can not be omitted in some cases!
