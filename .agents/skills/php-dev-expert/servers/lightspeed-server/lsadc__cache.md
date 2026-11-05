# Cache | Configuration | LiteSpeed Web ADC | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsadc/cache/

---

# Cache Configuration[¶](#cache-configuration "Permanent link")

[LSCache](lsadc__cache__docs__docs__lsws__cp__cpanel__lscache.md) is available to use at both the backend level and the ADC level. For most basic setups, we suggest you enable LSCache at the ADC level, and disable it at the backend.

Certain LSCache features rely on rewrite rules in `.htaccess` files on the web server to define cache behavior. To accurately and consistently cache at the ADC level, you will need to manually copy the server `.htaccess` rewrite rules to the ADC. This is true for LSCache with or without a plugin.

Example

These are rules created by a backend server's LSCache plugin for WordPress:

```
### marker MOBILE start ###  
RewriteCond %{HTTP_USER_AGENT} Mobile|Android|Silk/|Kindle|BlackBerry|Opera\ Mini|Opera\ Mobi [NC]  
RewriteRule .* - [E=Cache-Control:vary=%{ENV:LSCACHE_VARY_VALUE}+ismobile]  
### marker MOBILE end ###### marker WEBP start ###  
RewriteCond %{HTTP_ACCEPT} image/webp [OR]  
RewriteCond %{HTTP_USER_AGENT} iPhone\ OS\ (1[4-9]|[2-9][0-9]) [OR]  
RewriteCond %{HTTP_USER_AGENT} Firefox/([6-9][0-9]|[1-9][0-9]{2,})  
RewriteRule .* - [E=Cache-Control:vary=%{ENV:LSCACHE_VARY_VALUE}+webp]  
### marker WEBP end ###
```

In this example, if these rules are not copied to the ADC level, users may be served the wrong (mobile or desktop) version of the page, and will not see WebP images where they should.

## Basic Cache Setup[¶](#basic-cache-setup "Permanent link")

There are four steps to setting up LSCache for Web ADC:

- Set an ADC-level cache root (aka "storage path")
- Set a virtual-host-level cache root
- Enable caching in the virtual host cache settings
- Copy LSCache rewrite rules from backend server to Web ADC

All of these steps can be executed from within the ADC WebAdmin Console.

On the backend web server, you will need to install [a LiteSpeed Cache plugin](lsadc__cache__docs__docs__lsws__cp__cpanel__lscache.md). If there is no cache plugin available for your application yet, you can use [rewrite rules](https://docs.litespeedtech.com/lscache/noplugin) to control LSCache.

### Set Server-Level Cache Root[¶](#set-server-level-cache-root "Permanent link")

- Navigate to **Configuration > Server > Cache** and click **Edit** in the **Cache Storage Settings** section.
- Set **Storage Path** to the directory where you would like to store cache objects.
- Leave the other settings as-is and click **Save**.

[![!Set server-level cache root](/shared/lscache/images/set-cache-root-and-policy01.png)](https://docs.litespeedtech.com/shared/lscache/images/set-cache-root-and-policy01.png)

### Set Virtual-Host-Level Cache Root[¶](#set-virtual-host-level-cache-root "Permanent link")

In this example, we will use a virtual host named `Example_vHost`, but you should replace that with the name of your own preferred virtual host.

- Navigate to **Configuration > Virtual Hosts > Example\_vHost > Cache** and click **Edit** in the **Cache Storage Settings** section.
- Set **Storage Path** to the directory where you would like to store cache objects. In this example, we used `/home/example_vhost/lscache/`.
- Click **Save**.

### Enable Cache for the Virtual Host[¶](#enable-cache-for-the-virtual-host "Permanent link")

- Click **Edit** in the **Cache Policy** section.
- Set **Check Public Cache** to `Yes`.
- Leave the other settings as-is and click **Save**.

[![!Set vhost-level cache policy](/shared/lscache/images/set-cache-root-and-policy02.png)](https://docs.litespeedtech.com/shared/lscache/images/set-cache-root-and-policy02.png)

### Copy Rewrite Rules[¶](#copy-rewrite-rules "Permanent link")

If you're using a [LiteSpeed Cache plugin](lsadc__cache__docs__docs__lsws__cp__cpanel__lscache.md), install and activate it.

- Click the **Rewrite** tab and click **Edit** in the **Rewrite Control** section.
- Set **Enable Rewrite** to `Yes` and click **Save**.
- Click **Edit** in the **Rewrite Rules** section.
- Copy the LSCache-related rewrite rules from the backend server into the box and click **Save**

Tip

Only copy the cache-related rewrite rules. Other `.htaccess` directives may not be supported by Web ADC in that format.

Note

If you are using the LiteMage plugin for Magento, please set **Enable LiteMage** to `yes` in the virtual-host-level cache root setttings.

[![!Copy rewrite rules](../images/cache01.png)](https://docs.litespeedtech.com/lsadc/images/cache01.png)

If you are not using a LiteSpeed Cache plugin, please follow the instructions for setting up LSCache with [rewrite rules](https://docs.litespeedtech.com/lscache/noplugin), and put the rules directly into the ADC Virtual Host as described above.

## Verify Your Site is Being Cached[¶](#verify-your-site-is-being-cached "Permanent link")

You can verify a page is being served from LSCache through the following steps:

1. From a non-logged-in browser, open the developer tools and navigate to your site. Open the **Network** tab.
2. Refresh the page.
3. Click the first resource. This should be an HTML file. For example, if your page is `http://example.com/webapp/`, your first resource should either be something like `example.com/webapp/` or `webapp/`.
4. If you see headings similar to

   ```
   X-LSADC-Cache: miss
   X-LiteSpeed-Cache-Control:public,max-age=1800
   X-LiteSpeed-Tag:B1_F,B1_
   ```

   (for example), this means the page had not yet been cached, but that LiteSpeed has now stored it for future use.
5. Reload the page and you should see `X-LSADC-Cache: hit` in the response header. This means the page is being served by LSCache and is configured correctly.
6. If you don't see `X-LSADC-Cache: hit` or `X-LSADC-Cache: miss`, then there is a problem with the LSCache configuration.

## Enable Static Cache[¶](#enable-static-cache "Permanent link")

LiteSpeed's LSCache engine was designed to cache *dynamic* pages. Static files can be served directly from the web server with the best performance, so under normal circumstances, serving static files from cache would be a waste of resources and unnecessary steps.

However, in the case where an ADC is used in front of your backend servers, it may make sense to use the ADC like a CDN, and cache the static files at that level. This would avoid having to fetch the static files from backend servers every time a request is handled.

Here's how to enable cache for static files on your ADC:

The `mod_expires` directive generates browser cache headers, such as `Cache-Control: max-age=533280`, `Expires: Sun, 03 May 2015 23:02:37 GMT`, etc. These headers are used by the frontend browser to cache static content requested from the server. Similarly, LiteSpeed ADC may be configured to honor these same browser cache headers, thereby storing static files directly in the ADC's cache file location, once they are retrieved from a backend server.

[![!](../images/cache02.png)](https://docs.litespeedtech.com/lsadc/images/cache02.png)

Assuming you want to set up static caching on the `vHost-1` virtual host, navigate to **Configuration > Virtual Hosts > vHost-1 > Cache**. Verify that the **Storage Path** has been set. The key to static file caching is the **Respect Cacheable** setting, which should be set to `Yes` or `Not Set`.

Tip

**Respect Cacheable** is enabled by default. So, assuming it is not explicitly disabled at the server level, it may be left `Not Set` at the virtual host level.

Let's say we have a CSS file which has `Cache-Control: max-age=96592000, public` and `Expires: Fri, 20 Sep 2019 18:04:53 GMT` headers. These headers are set from the backend web server, either through a LiteSpeed Cache plugin or a `mod_expires` directive in `.htaccess`.

[![!](../images/cache03.png)](https://docs.litespeedtech.com/lsadc/images/cache03.png)

ADC will honor such browser cache headers, will store the static files in the cache folder, and serve the files from the ADC cache directly for future requests. When that happens, you will see the `X-LSADC-cache: hit` header.

[![!](../images/cache03.png)](https://docs.litespeedtech.com/lsadc/images/cache03.png)

### Static Cache Tags[¶](#static-cache-tags "Permanent link")

For more fine-grained control in ADC v3.1.7 and above, you can take advantage of LiteSpeed Cache's tagging system to purge static files by type on demand.

The following cache tags are available for your `example.com` domain:

- Images: `example.com_IMG`
- CSS: `example.com_CSS`
- JavaScript: `example.com_JS`
- Fonts: `example.com_FONT`
- Videos: `example.com_VIDEO`

These tags are automatically assigned when the static content is cached, and you may use them for purging. Just like dynamic cache, static cache may be purged with [the `X-LiteSpeed-Purge` header](https://docs.litespeedtech.com/lscache/devguide/controls/#x-litespeed-purge) or through [the `cache-purge` environment variable in rewrite rules](https://docs.litespeedtech.com/lscache/devguide/controls/#cache-purge).

Example

To purge all of `mydomain.org`'s cached images using a response header:

```
X-LiteSpeed-Purge: tag=mydomain.org_IMG
```

## See Also[¶](#see-also "Permanent link")

For more ways to use and configure LSCache, please see [our LSCache documentation](lsadc__cache__docs__docs__lsws__cp__cpanel__lscache.md) in full.
