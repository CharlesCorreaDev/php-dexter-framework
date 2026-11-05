# Configuration | LiteSpeed Cache for OpenCart | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscoc/settings/

---

# Configuration[¶](#configuration "Permanent link")

This step is optional. Once the plugin is activated, your cache is already up and running, but on the configuration screen, you can customize a few settings.

To change settings, visit `http://example.com/index.php?route=extension/module/lscache`.

## Button Row[¶](#button-row "Permanent link")

[![!](../images/lscache-opencart-configuration.png)](https://docs.litespeedtech.com/lscache/lscoc/images/lscache-opencart-configuration.png)

### Purge All LiteSpeed Cache[¶](#purge-all-litespeed-cache "Permanent link")

The orange trash can button at the top of the page is the **Purge All LiteSpeed Cache** button. It clears the entire LiteSpeed cache for this virtual host. This includes any other web apps using LSCache (WordPress, XenForo, etc.) on this vhost.

### Rebuild All LiteSpeed Cache[¶](#rebuild-all-litespeed-cache "Permanent link")

The green lightning bolt button at the top of the page is the **Rebuild All LiteSpeed Cache** button. It will generate cache files for every cacheable page on this site.

## General Tab[¶](#general-tab "Permanent link")

[![!](../images/lscache-opencart-configuration-general.png)](https://docs.litespeedtech.com/lscache/lscoc/images/lscache-opencart-configuration-general.png)

### LiteSpeed Cache Status[¶](#litespeed-cache-status "Permanent link")

*Enabled*

This is where you turn LSCache on and off. It is `Enabled` by default and should remain that way, if you wish for your site to be cached.

### LiteSpeed Cache TTL (seconds)[¶](#litespeed-cache-ttl-seconds "Permanent link")

*1200000*

The number of seconds that a cache object is valid before it expires. The default of `1200000` is equivalent to roughly 14 days. YOu can change this as necessary to cache your site for more or less time.

### LiteSpeed ESI Feature[¶](#litespeed-esi-feature "Permanent link")

*Enabled*

ESI is what allows LiteSpeed to cache shopping cart and other private content on publicly cached pages. Enable this, if you want pages with private content to be cacheable.

### Seperate View for Logged-in Users[¶](#seperate-view-for-logged-in-users "Permanent link")

*Enabled*

When this option is enabled, two copies of each page are saved in public cache: one for the logged-in users, and one for the guest users. If disabled, only one cache copy is saved for both logged-in and guest users to share.

### Separate View for Mobile Device[¶](#separate-view-for-mobile-device "Permanent link")

*Disabled*

If your mobile and desktop site have two different views, you will want to create two separate cache copies, so that only mobile users are served the mobile view and only desktop users are served the desktop view. Do not enable this option if you have a single responsive theme. It is only for sites where there are two different themes.

Please check your `.htaccess` file. If this option is disabled, then the mobile view section should be commented out. If this option is enabled then the mobile view section should *not* be commented out.

### Separate View for Safari Browser[¶](#separate-view-for-safari-browser "Permanent link")

*Disabled*

You can create a separate view to be cached only for users of the Safari Browser. All other browsers will share another view.

Please check your `.htaccess` file. If this option is disabled, then the Safari view section should be commented out. If this option is enabled then the Safari view section should *not* be commented out.

### Rebuild Cache Options[¶](#rebuild-cache-options "Permanent link")

*Rebuild cache for only default language and default currency*

This option controls what views are processed when the cache is rebuilt. The more views you rebuild, the harder it is on your server. If you have the resources to handle it, you can rebuild cache for all language and currency combinations.

### Rebuild Cache for specific devices/browsers[¶](#rebuild-cache-for-specific-devicesbrowsers "Permanent link")

You may rebuild cache views based on user agent, if you wish. List one device or browser per line.

### Ajax Load Wishlist[¶](#ajax-load-wishlist "Permanent link")

*Disabled*

When enabled, ajax is used to load the wishlist.

### Ajax Load Compare[¶](#ajax-load-compare "Permanent link")

*Disabled*

When enabled, ajax is used to load compare.

### Ajax Load Shopcart[¶](#ajax-load-shopcart "Permanent link")

*Disabled*

When enabled, ajax is used to load the shopcart.

### Logging Level[¶](#logging-level "Permanent link")

*Errors Only*

If you are not currently experiencing issues you wish to debug, you can leave the logging level on `Errors Only`, or `Disabled`. If you are actively debugging the site, set it to `Debug Information`. Just remember to set it back the way it was when you are finished debugging, or the log may consume considerable disk space.

## Page Settings Tab[¶](#page-settings-tab "Permanent link")

[![!](../images/lscache-opencart-configuration-page-setting.png)](https://docs.litespeedtech.com/lscache/lscoc/images/lscache-opencart-configuration-page-setting.png)

All of the pages are listed on this tab, and you have the ability to determine how each page will be cached. Some pages may be cached for logged-in users, some may be cached for non-logged-in users, and some may be cached for both.

Use the green button to add a new page to the list.

Use the orange trash can button to purge the given page from cache.

### Verify a Page is Not Being Cached[¶](#verify-a-page-is-not-being-cached "Permanent link")

If you have configured LSCache to exclude certain content, you can use this method to verify that it works as expected:

1. From a non-logged-in browser, navigate to the page, open the **Network** tab in the developer tools, refresh the page, and click the first listed resource. This should be the URI of the page, as described above.
2. Look for the `X-LiteSpeed-Cache-Control: no-cache` header. If you find it, then the page has successfully *not* been served via LSCache.

It's also a good idea to make sure that the browser is not caching the page. For that to be true, you need to look for two headings: - `cache-control: no-cache, must-revalidate, max-age=0` - `expires: Wed, 11 Jan 1984 05:00:00 GMT`

Tip

The date in the `expires` header can be any date that is *prior to* the current date.

If either of those headers is not present, or has a different value, the browser is likely caching your page. This can lead to serving outdated or stale content. Typically, browser caching is accidentally enabled via bad optimization rules that add the cache control header to dynamic requests. Check your `.htaccess` file to fix this.

## URL Settings Tab[¶](#url-settings-tab "Permanent link")

[![!](../images/lscache-opencart-configuration-url.png)](https://docs.litespeedtech.com/lscache/lscoc/images/lscache-opencart-configuration-url.png)

### Include URLs[¶](#include-urls "Permanent link")

Enter all URLs, one per line, that must be cached, regardless of the page settings.

### Exclude URLs for logged-in users[¶](#exclude-urls-for-logged-in-users "Permanent link")

Enter all URLs, one per line, that must *not* be cached for logged-in users, regardless of the page settings, or the **Include URLs** setting above.

### Exclude URLs[¶](#exclude-urls "Permanent link")

Enter all URLs, one per line, that must *not* be cached for anyone, regardless of the page settings, or the **Include URLs** setting above.

## ESI Modules Tab[¶](#esi-modules-tab "Permanent link")

[![!](../images/lscache-opencart-configuration-esi-modules.png)](https://docs.litespeedtech.com/lscache/lscoc/images/lscache-opencart-configuration-esi-modules.png)

For each module listed, you can determine whether it is to be an ESI module, and if so, whether it will be public, private, or not cached at all. You can also set a TTL (Time to Live) tht differs from the rest of the site. This is particularly useful for time-sensitive widgets.

Choose an ESI tag to indicate that the module should be purged when related events occur.

Use the green buttons to add a new ESI module or ESI route.

Use the orange trash can button to purge the given module from cache.
