# Cache | Screen-by-Screen | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/cache/

---

# Cache[¶](#cache "Permanent link")

## Cache tab[¶](#cache-tab "Permanent link")

[![LSCWP Cache Section Cache Tab](../images/cache01.png)](https://docs.litespeedtech.com/lscache/lscwp/images/cache01.png)

### Enable Cache[¶](#enable-cache "Permanent link")

*ON*

This is the final step required to enable the plugin’s caching functionality. If you have not completed the previous steps, [see the installation instructions](lscache__lscwp__installation.md). When **Enable Cache** is turned `ON`, your site’s pages will be cached. If you later turn it `OFF`, caching will stop, and all existing cached pages will be purged.

For single-site installations, only `ON` and `OFF` are available. Multisite subsite administrators have a third option, `Use Network Admin Setting`, which uses the setting chosen by the Network Admin.

Note

If you see a warning that LSCache is disabled and cannot clear it, see the [troubleshooting instructions](lscache__lscwp__troubleshoot.md#litespeed-cache-is-disabled).

### Cache Logged-in Users[¶](#cache-logged-in-users "Permanent link")

*ON*

This setting allows content to be cached for logged-in users. Pages are stored in private cache by IP address and session ID.

### Cache Commenters[¶](#cache-commenters "Permanent link")

*ON*

When a comment is submitted on a post and moderation is disabled, the comment is published immediately, and the page is purged from cache. Everyone—the commenter and all future visitors to the page—will see the newly published comment when the page reloads.

If moderation is enabled, the comment is not published immediately, the page is not purged, and users continue to be served the cached version of the page without the moderated comment.

The **Cache Commenters** option affects how the person who left the comment sees the page after submitting it:

- When the option is `ON` (the default), the user sees the previously cached version of the page, and their comment does not appear.
- When the option is `OFF`, the user is not served from cache. The page is generated from scratch, and the user sees their comment awaiting moderation.

Regardless of this setting, all visitors who did not leave a comment continue to be served the cached version until the comment is approved and the page is purged.

### Cache REST API[¶](#cache-rest-api "Permanent link")

*ON*

This option allows requests made through WordPress REST API calls to be cached.

### Cache Login Page[¶](#cache-login-page "Permanent link")

*OFF*

This option caches the login page. As of LSCWP v7.9, it defaults to `OFF`.

### Cache favicon.ico[¶](#cache-faviconico "Permanent link")

This option was removed in version 6.2 because it was redundant. The `favicon.ico` 404 response is already cached with the other 404 responses controlled by [**Default HTTP Status Code Page TTL**](#default-http-status-code-page-ttl).

### Cache PHP Resources[¶](#cache-php-resources "Permanent link")

This setting has been deprecated as of v7.2.

### Cache Mobile[¶](#cache-mobile "Permanent link")

*OFF*

This option enables separate cached versions of pages for mobile and desktop views. It is primarily used for non-responsive themes with a mobile-specific design, but there are other situations where you may want to set **Cache Mobile** to `ON`, such as:

- If your site has mobile-specific content, such as widgets that appear only on mobile or desktop.
- If you are using [AMP](https://amp.dev/) on your site.
- If you are using the [CCSS](lscache__lscwp__pageopt.md#generate-critical-css) service.
- If you are using the [UCSS](lscache__lscwp__pageopt.md) service.
- If you have [**Guest Mode** and **Guest Optimization**](lscache__lscwp__general.md#guest-mode) enabled.

Warning

**List of Mobile View User Agents** must not be empty when **Cache Mobile** is set to `ON`.

Warning

Enabling this option will create additional cache varies. If you have crawling enabled, cache varies cause multiple crawlers to be created. Please be sure you have adequate server resources for multiple crawlers before enabling this option. [Learn more about multiple crawlers on our blog](https://blog.litespeedtech.com/2018/12/05/managing-multiple-cache-crawlers-lscache/).

Info

This setting moves to the **Network Admin** screen on multisite networks.

### List of Mobile User Agents[¶](#list-of-mobile-user-agents "Permanent link")

*disabled/string*

Enter a rewrite-rule-friendly list of user agents. This list is used with the **Cache Mobile** setting and is ignored when **Cache Mobile** is set to `OFF`.

Note

Separate each entry with a pipe (`|`). Escape spaces with a backslash (`\`). The default WordPress list is `Mobile|Android|Silk/|Kindle|BlackBerry|Opera Mini|Opera Mobi`.

### Private Cached URIs[¶](#private-cached-uris "Permanent link")

*empty string*

This is a list of path patterns to cache privately. These paths should never be cached publicly. To indicate the beginning of a URI, add `^` to the beginning of the string. To require an exact match, add `$` to the end of the string.

String Matching Examples

Assume you have the following URIs:

1. `/recipes/baking/`
2. `/recipes/baking/cakes`
3. `/recipes/baking/brownies`
4. `/popular/recipes/baking/`

The string `/recipes/baking/` will match all four URIs.

The string `/recipes/baking/$` will match #1 because `$` indicates an exact match.

The string `^/recipes/baking` will match #1, #2, and #3 because `^` indicates the beginning of the URI.

### Force Cache URIs[¶](#force-cache-uris "Permanent link")

*empty string*

Paths containing the listed strings **WILL** be cached, regardless of any “non-cacheable” settings elsewhere. Enter one string per line. Each string is compared with the `REQUEST_URI` server variable. If a string matches, the URI is cached. To indicate the beginning of a URI, add `^` to the beginning of the string. To require an exact match, add `$` to the end of the string.

To define a custom TTL for a URI, add a space followed by the TTL value to the end of the URI. For example, `/mypath/mypage 300` defines a TTL of 300 seconds for `/mypath/mypage`.

### Force Public Cache URIs[¶](#force-public-cache-uris "Permanent link")

*empty string*

Paths containing the listed strings **WILL** be cached in public cache, regardless of any “non-cacheable” settings elsewhere. Enter one string per line. Each string is compared with the `REQUEST_URI` server variable. If a string matches, the URI is cached. To indicate the beginning of a URI, add `^` to the beginning of the string. To require an exact match, add `$` to the end of the string.

To define a custom TTL for a URI, add a space followed by the TTL value to the end of the URI. For example, `/mypath/mypage 300` defines a TTL of 300 seconds for `/mypath/mypage`.

### Drop Query String[¶](#drop-query-string "Permanent link")

*empty string*

This setting lets you specify query strings that LSCache should ignore.

Some query strings, particularly those used for marketing or analytics, do not affect the content displayed on a page. The page renders the same with or without them, so there is no need to store multiple cached copies. [Learn more](https://docs.litespeedtech.com/start/#method-1-apache-style-cachekeymodify).

Warning

This method is compatible only with LiteSpeed Enterprise v5.2.3 and later. For OpenLiteSpeed, you can [manually add rewrite rules to `.htaccess`](https://docs.litespeedtech.com/start/#method-2-rewrite-rules).

Info

This setting moves to the **Network Admin** screen on multisite networks.

## TTL tab[¶](#ttl-tab "Permanent link")

[![LSCWP Cache Section TTL Tab](../images/cache02.png)](https://docs.litespeedtech.com/lscache/lscwp/images/cache02.png)

Values of `30` seconds or more set a TTL. Smaller values indicate that the page should not be cached.

### Default Public Cache TTL[¶](#default-public-cache-ttl "Permanent link")

*604800*

This TTL setting controls most pages. The other TTLs apply to specific pages or page types.

The default value is one week. Other possible values are 1 hour (`3600`), 1 day (`86400`), and 2 weeks (`1209600`). Since most of these pages do not change after they are posted, a longer TTL may be beneficial.

### Default Private Cache TTL[¶](#default-private-cache-ttl "Permanent link")

*1800*

This TTL setting determines how long private pages are cached. Possible values range from `60` to `3600`.

### Default Front Page TTL[¶](#default-front-page-ttl "Permanent link")

*604800*

This TTL setting controls the front page.

Note

This setting can be triggered by the `is_front_page()` check or by a third-party plugin that uses the front page TTL for one of its own pages. For example, WooCommerce uses it for its **Shop** page.

### Default Feed TTL[¶](#default-feed-ttl "Permanent link")

*604800*

This TTL setting controls feeds. Feeds help readers stay up to date on blog entries. They are generally set up to pull from the blog at intervals, which could cause a constant load on the server without caching. Cached feed pages are purged when a post is updated or a comment is added, so they remain up to date.

### Default REST TTL[¶](#default-rest-ttl "Permanent link")

*604800*

This TTL setting controls how long calls to the REST API are cached.

### Default HTTP Status Code Page TTL[¶](#default-http-status-code-page-ttl "Permanent link")

*403 3600 404 3600 500 3600*

This TTL controls pages that return `404`, `403`, `500`, or other status codes you specify.

The default TTL for each listed status code is `3600` seconds, or one hour, though this recommendation may not suit your site.

If visitors frequently encounter 404 pages, caching those pages for at least a short period may help.

Pages returning 403 are usually intentional, so it may be worthwhile to use a longer TTL for this setting.

A 500 error is more severe. Caching the page may mask an issue within WordPress, so you may not want to do so.

You may choose to cache pages with different status codes for longer, or not to cache them at all.

## Purge tab[¶](#purge-tab "Permanent link")

[![LSCWP Cache Section Purge Tab](../images/cache03.png)](https://docs.litespeedtech.com/lscache/lscwp/images/cache03.png)

### Purge All on Upgrade[¶](#purge-all-on-upgrade "Permanent link")

*OFF*

This option determines whether to purge all pages when a plugin, theme, or WordPress core is updated. Because you never know what may change between versions, we recommend leaving this option `ON`.

Info

On multisite networks, this setting moves to the **Network Admin** screen.

### Auto Purge Rules For Publish/Update[¶](#auto-purge-rules-for-publishupdate "Permanent link")

When a post is published or updated, other pages may change as well, including category listings, tag listings, the blog’s front page, and various archives. You can specify which types of pages are automatically purged whenever a post is updated or created.

Your theme and how it displays posts determine which pages you should select.

The **All pages** option is disabled by default. When enabled, it overrides all other checkboxes. It may make sense to select **All pages** if ESI is disabled and dynamic post-related widgets appear on every page. In most cases, however, it is best not to select it.

To optimize performance, select only the necessary options. For example, if the site has a monthly archive but no yearly or daily archive, select only the monthly archive. If the site has no author archives, there is no need to select that option; extra checks only slow down the process.

### Serve Stale[¶](#serve-stale "Permanent link")

*OFF*

When enabled, this setting allows visitors to receive the most recently purged (stale) cached copy of a page if the updated cached copy has not yet been generated.

To understand why you might want to enable **Serve Stale**, consider how LSCache handles purged pages when **Serve Stale** is `OFF`:

- A user visits a page that has been purged from cache.
- The request invokes PHP and begins building the page.
- 100 more users visit that page before the PHP process finishes.
- PHP is invoked 100 times, causing serious server load.
- The first user's request completes, and the page is cached again.
- Future visitors receive the up-to-date cached page.

Now consider what happens when **Serve Stale** is `ON`:

- A user visits a page that has been purged from cache.
- The request invokes PHP and begins building the page.
- 100 more users visit that page before the PHP process finishes.
- All 100 users receive the previously purged (stale) version of the page, with minimal impact on the server.
- The first user's request completes, and the page is cached again.
- Future visitors receive the up-to-date cached page.

#### Should you enable it?[¶](#should-you-enable-it "Permanent link")

This option benefits very busy sites, but has less impact on quiet sites.

Whether to enable it depends on which risk is more acceptable for your site. Weigh the potential for heavy server load (likely when **Serve Stale** is `OFF`) against the possibility of occasionally serving stale content (likely when **Serve Stale** is `ON`), and choose accordingly.

### Scheduled Purge URLs[¶](#scheduled-purge-urls "Permanent link")

*empty string*

You can specify a list of full URLs, one per line, to purge automatically at a certain time of day. Wildcards are supported. This is not usually necessary because LSCWP's purge rules handle most situations. If content is generated by an outside source, however, you may want to purge the relevant pages daily to ensure that the external content is displayed correctly.

Unlike many similar fields in LSCWP, this field uses full-URI matching, not partial-string matching. The domain is optional. Enter the full path for each URI, using wildcards if desired.

Example

To include both `/path/u-1.html` and `/path/u-2.html`, list them on separate lines or use the wildcard `/path/u-*.html`. Be aware that the wildcard also matches other URIs, such as `/path/u-3.html` and `/path/u-abc.html`, so use it carefully.

URI Matching Examples

Assume your site consists of only the following URIs:

1. `https://example.com/recipes/baking/`
2. `https://example.com/recipes/baking/cakes`
3. `https://example.com/recipes/baking/brownies`
4. `https://example.com/popular/recipes/baking/`

List `https://example.com/recipes/baking/` to match only #1.

List `/recipes/baking/` to also match only #1.

List `/recipes/baking/*` to match #1, #2, and #3.

List `*/recipes/baking/` to match #1 and #4.

List `*/recipes/*` to match all of them.

List `/recipes/` to match none of them.

Warning

Scheduled purges for URLs with wildcards may take time to start. LSCache cannot determine which URLs match the pattern until those URLs are purged for the first time or reach their natural expiration. To speed up the process, enter the wildcard string in **Scheduled Purge URLs**, press **Save Settings**, and manually purge the relevant pages so that LSCache recognizes the URLs immediately.

### Scheduled Purge Time[¶](#scheduled-purge-time "Permanent link")

Use this field with the list above. If you provided URLs to purge, specify here when they should be purged.

### Purge All Hooks[¶](#purge-all-hooks "Permanent link")

*a list of recommended hooks*

LSCWP purges the cache when certain WordPress hooks run. You can change this behavior by changing the hooks in this list. For example, to avoid purging the cache whenever you create a tag or category, remove the `create_term` hook. To purge the cache whenever a comment is posted, add the `comment_post` hook.

LiteSpeed recommends purging all cache when the following hooks run:

```
switch_theme
wp_create_nav_menu
wp_update_nav_menu
wp_delete_nav_menu
create_term
edit_terms
delete_term
add_link
edit_link
delete_link
```

See the [WordPress Code Reference](https://developer.wordpress.org/reference/hooks/) for a list of available hooks. Many plugins also have their own hooks that you can reference.

## Excludes tab[¶](#excludes-tab "Permanent link")

[![LSCWP Cache Section Excludes Tab](../images/cache04.png)](https://docs.litespeedtech.com/lscache/lscwp/images/cache04.png)

### Do Not Cache URIs[¶](#do-not-cache-uris "Permanent link")

*empty string*

By default, LiteSpeed caches as many pages as possible. If you have pages that should not be cached, list their URIs here, one per line. Partial URIs are allowed. They are compared with the `REQUEST_URI` server variable, and a URI is excluded from the cache if a match is found.

When listing URIs, include as much of the string as possible to avoid inadvertently matching more URIs than intended. You can also narrow the match with the special characters `^` and `$`. To indicate the beginning of a URI, add `^` to the beginning of the string. To require an exact match, add `$` to the end of the string.

String Matching Examples

Assume your site consists of only the following URIs:

1. `/recipes/baking/`
2. `/recipes/baking/cakes`
3. `/recipes/baking/brownies`
4. `/popular/recipes/baking/`

The string `/recipes/baking/` will match all four URIs.

The string `cakes` will match only #2.

The string `/recipes/baking/$` will match only #1 because `$` indicates an exact match.

The string `^/recipes/baking` will match #1, #2, and #3 because `^` indicates the beginning of the URI.

### Do Not Cache Query Strings[¶](#do-not-cache-query-strings "Permanent link")

*empty string*

You can exclude URLs with certain query strings from caching.

Example

Suppose your site lets visitors change the color scheme with a query string. For a purple color scheme, the URL would be `https://example.com/page?color=purple`. To prevent caching pages rendered with a different color scheme, add `color` to the **Do Not Cache Query Strings** list. This excludes pages with the `?color=` query string. The value of `color` is irrelevant; it can be anything, from `purple` or `green` to `vermillion-and-aquamarine-polka-dots`.

### Do Not Cache Categories[¶](#do-not-cache-categories "Permanent link")

*empty string*

By default, all categories are cached. To exclude categories from the cache, enter their slugs here, one per line.

Example

To exclude `https://www.example.com/category/category-slug/`, enter `category-slug`.

Note

If a category slug is not found, it is removed from the list when you save.

### Do Not Cache Tags[¶](#do-not-cache-tags "Permanent link")

*empty string*

Tags are treated like categories: they are cached by default and excluded when their slugs are listed here, one per line.

### Do Not Cache Cookies[¶](#do-not-cache-cookies "Permanent link")

*empty string*

List cookies that should prevent a page from being cached. Specifically, a page is not cached if a cookie in this list appears in the request headers.

Tip

This option can have a broader effect than you may realize. If you exclude a cookie that appears on every page of your site, you effectively exclude your entire site from caching.

Info

On multisite networks, this setting moves to the **Network Admin** screen.

### Do Not Cache User Agents[¶](#do-not-cache-user-agents "Permanent link")

*empty string*

You can exclude specific user agents from the cache. If a visitor requests a page using a listed user agent, they will not be served the cached version. Enter one user agent per line.

Note

Partial matches are allowed.

Info

On multisite networks, this setting moves to the **Network Admin** screen.

### Do Not Cache Roles[¶](#do-not-cache-roles "Permanent link")

*unchecked*

You may want to exclude some user roles from caching. For example, an admin testing new functionality may want to exclude the `administrator` role until testing is complete.

### Verify a page is not being cached[¶](#verify-a-page-is-not-being-cached "Permanent link")

If you have configured LSCache to exclude certain content, you can use this method to verify that it works as expected:

1. From a non-logged-in browser, navigate to the page, open the **Network** tab in the developer tools, refresh the page, and click the first listed resource. This should be the URI of the page, as described above.
2. Look for the `X-LiteSpeed-Cache-Control: no-cache` header. If you find it, then the page has successfully *not* been served via LSCache.

It's also a good idea to make sure that the browser is not caching the page. For that to be true, you need to look for two headings: - `cache-control: no-cache, must-revalidate, max-age=0` - `expires: Wed, 11 Jan 1984 05:00:00 GMT`

Tip

The date in the `expires` header can be any date that is *prior to* the current date.

If either of those headers is not present, or has a different value, the browser is likely caching your page. This can lead to serving outdated or stale content. Typically, browser caching is accidentally enabled via bad optimization rules that add the cache control header to dynamic requests. Check your `.htaccess` file to fix this.

## ESI tab[¶](#esi-tab "Permanent link")

[LiteSpeed Cache for WordPress](https://wordpress.org/plugins/litespeed-cache/) supports [Edge Side Includes](https://en.wikipedia.org/wiki/Edge_Side_Includes), also known as ESI.

Warning

OpenLiteSpeed does not support ESI. You need [LiteSpeed Web Server Enterprise](https://www.litespeedtech.com/products/litespeed-web-server), [LiteSpeed Web ADC](https://www.litespeedtech.com/products/litespeed-web-adc), or [QUIC.cloud CDN](https://QUIC.cloud) to use ESI or any other functionality in this tab.

ESI allows pages to be served from cache to logged-in users.

ESI divides parts of a dynamic page into separate fragments, which are then assembled into the complete page. In other words, ESI lets you “punch holes” in a page and fill them with content that can be cached privately, cached publicly with its own TTL, or not cached.

Note

ESI has a cost. It is simpler for the server to return full pages than to assemble them from several blocks, so consider this when deciding whether to enable ESI. Whether the speed benefits outweigh the efficiency cost depends on your site.

Video

See a video demonstration of **What is Edge Side Includes (ESI)?** [here](https://www.youtube.com/watch?v=uYpR6D8n3oE).

[![LSCWP Cache Section ESI Tab](../images/cache05.png)](https://docs.litespeedtech.com/lscache/lscwp/images/cache05.png)

### Public Cache vs. Private Cache[¶](#public-cache-vs-private-cache "Permanent link")

LiteSpeed Cache has built-in public and private caches. The public cache contains pages that are the same for everyone. Private caches contain content specific to a user, identified by their IP address and session ID.

ESI lets you divide a full page into pieces and handle each piece differently.

LiteSpeed Web Server lets you store content in either the public cache or a private cache.

Together, these features can divide a page into public and private pieces, cache each piece appropriately, and reassemble the full page from the relevant caches without using the PHP backend.

**This combination allows you to cache content for logged-in WordPress users.** With ESI enabled, you can cache a full page, punch holes for private content, and save that content in the private cache.

### Examples[¶](#examples "Permanent link")

Example #1: Admin Bar

A logged-in site admin visits the publicly cached home page:

**Without ESI:** The request reaches the backend because the admin bar at the top of the page is private content. As a result, this page—and every other page on the site—cannot be served to the admin from cache.

**With ESI:** Most of the page is served from the public cache, while the admin bar is served from the site admin’s private cache. PHP does not need to be invoked.

Example #2: Recent Posts Widget

A large site with mostly static content that rarely changes includes a **Recent Posts** sidebar widget on every page.

**Without ESI:** Every time a new post is published, every page on the site must be purged so that the widget displays up-to-date content. Repopulating the entire cache requires a crawler to run or visitors to visit every page.

**With ESI:** The pages can remain cached with a long TTL, while only the **Recent Posts** widget needs to be purged. A single visitor requesting any page can repopulate the widget in the cache.

### Enabling at the Server Level[¶](#enabling-at-the-server-level "Permanent link")

Cache and ESI must be enabled on the web server before you can use ESI. In a shared hosting environment, your system administrator controls whether a specific virtual host account has `CacheEngine on/off; esi on/off`. Ask your system administrator whether ESI is enabled for your domain.

If you are the system administrator, see [Enabling Cache for an Individual Virtual Host](https://docs.litespeedtech.com/start/#enable-caching) for instructions.

### Enabling at the Plugin Level[¶](#enabling-at-the-plugin-level "Permanent link")

LiteSpeed Cache for WordPress treats all cacheable full pages as public cache.

When you enable ESI, you can punch holes for content that will be cached privately, cached publicly with its own TTL, or not cached.

Once ESI is enabled, the following blocks are created by default:

- Admin Bar
- Comments
- Comment form
- Recent Posts widget
- Recent Comments widget

Any widget can be an ESI block.

Navigate to **LiteSpeed Cache > Cache > ESI** and set **Enable ESI** to `ON`.

This creates the ESI blocks listed above. You can disable caching for the Admin Bar and the Comment Form using the **Cache Admin Bar** and **Cache Comment Form** settings; both are `ON` by default. ESI caching for widgets is handled in the individual widget settings under **Appearance > Widgets**.

Tip

If you are using CloudFlare, do not enable Automatic Platform Optimization (APO). Remember, when using LSCWP with other optimization solutions, you [must not duplicate functions](lscache__lscwp__admin.md#using-multiple-optimization-plugins). APO is a page cache, so it must be turned off in order for this LiteSpeed Cache feature to work correctly.

### Widget ESI Blocks[¶](#widget-esi-blocks "Permanent link")

Warning

ESI widgets do not work with WordPress v5.8 and later. This is a known issue that will be addressed in a future LSCWP version. Until then, if you need ESI widgets, install and activate the [Classic Widgets plugin](https://wordpress.org/plugins/classic-widgets/), then use that plugin to access ESI widget functionality.

[![](../images/cache06.jpg)](https://docs.litespeedtech.com/lscache/lscwp/images/cache06.jpg)

Navigate to **WP Admin > Appearance > Widgets** and select the widget you want to turn into an ESI block.

By default, a widget is not considered an ESI block unless it is **Recent Posts** or **Recent Comments**, as mentioned above. To treat the widget differently from the pages on which it appears, set one of the following configurations in the shaded **LiteSpeed Cache** area:

#### Private widget[¶](#private-widget "Permanent link")

The contents are stored in private cache, with a separate copy for each user, identified by IP address and session ID. Examples include a list of recently viewed posts or a personalized greeting.

- Set **Enable ESI** to `Private`.
- Set **Widget Cache TTL** to a value appropriate for the widget’s contents.

#### Public widget[¶](#public-widget "Permanent link")

The contents are stored in public cache, so every user sees the same content. Examples include a list of recent posts or a calendar of upcoming events.

- Set **Enable ESI** to `Public`.
- Set **Widget Cache TTL** to a value appropriate for the widget’s contents.

#### Uncached widget[¶](#uncached-widget "Permanent link")

The contents are not cached; they are generated dynamically each time they appear on a page.

- Set **Enable ESI** to `Public` or `Private`. Either value works, as long as it is not `Disable`.
- Set **Widget Cache TTL** to `0`.

### Third-Party Plugins[¶](#third-party-plugins "Permanent link")

Our ESI implementation supports several blocks from third-party plugins. For example, the WooCommerce shopping cart is treated as a private ESI block.

As mentioned earlier, when ESI is enabled, your site’s pages are considered publicly cacheable because ESI can create holes for occasional non-public content. This applies to all native WordPress pages and WooCommerce pages, but not to bbPress pages.

A bbPress page contains so much private data that it is more efficient to treat the entire page as private. Therefore, all bbPress pages are considered private.

If one of your favorite plugins needs special consideration, contact us through [the WordPress plugin support forum](https://wordpress.org/support/plugin/litespeed-cache).

### ESI Nonces[¶](#esi-nonces "Permanent link")

*empty string*

List nonces one per line to convert them automatically to ESI blocks. Wildcards are supported.

Nonces often expire before the site TTL, which can cause problems on pages that use them. Converting a nonce to an ESI block allows it to expire independently of the rest of the page, without causing cache conflicts.

LiteSpeed maintains a list of known third-party plugin nonces [here](https://github.com/litespeedtech/lscache_wp/blob/master/data/esi.nonces.txt). This list is automatically merged with the nonces you enter in the **ESI Nonces** setting. This lets you convert all known nonces into ESI blocks automatically.

To request that a nonce be added to this list, [submit a pull request](https://github.com/litespeedtech/lscache_wp/blob/master/data/esi.nonces.txt).

### Vary Groups[¶](#vary-groups "Permanent link")

Note

Although it appears on the ESI settings tab, the Vary Groups function is not related to ESI.

Vary Groups combine [cache varies](lscache__devguide__advanced.md#cache-varies) with [user roles](https://wordpress.org/support/article/roles-and-capabilities/). They let you create multiple publicly cached versions of a page based on the permissions of the users who view it.

Your list of user roles may differ from the one shown in the image above. This is normal.

Vary Groups do not change how your application behaves. They let it save separate cached copies for public views that the application already generates. Without Vary Groups, applications that generate different views for different user roles would need to leave logged-in users uncached or serve them from private cache.

Learn more about Vary Groups [on our blog](https://blog.litespeedtech.com/2017/09/13/wpw-vary-groups/).

Example 1

In some themes, administrator functions appear on public pages, such as an “edit” link at the end of a post. If you create a vary group for administrators, LSCache saves two public copies of the page: one with editing permissions displayed for administrators and a default copy without editing links for everyone else.

Example 2

A shop has two user roles: `retail_customer` and `wholesale_customer`. The site has two sets of prices and three possible views. Users in the `retail_customer` group see the highest prices, users in the `wholesale_customer` group see the lowest prices, and users who are not yet customers see the default page with no prices. This scenario requires two Vary Groups: one for `retail_customer` and one for `wholesale_customer`.

To create a vary group for a user role, enter a nonzero value in the box next to that role. If a role has a `0` next to it, its users receive the default cached copy.

The numbers have no significance beyond identifying unique views. Use a different number for each unique view.

If two user roles share the same view, put them in the same group by assigning them the same number.

Warning

Enabling this option will create additional cache varies. If you have crawling enabled, cache varies cause multiple crawlers to be created. Please be sure you have adequate server resources for multiple crawlers before enabling this option. [Learn more about multiple crawlers on our blog](https://blog.litespeedtech.com/2018/12/05/managing-multiple-cache-crawlers-lscache/).

## Object tab[¶](#object-tab "Permanent link")

[![LSCWP Cache Section Object Tab](../images/cache07.png)](https://docs.litespeedtech.com/lscache/lscwp/images/cache07.png)

Info

On multisite networks, this tab moves to the **Network Admin** screen.

LSCWP does not provide object caching directly. Instead, it supports external object caches such as [Memcached](https://memcached.org/about) and LiteSpeed’s drop-in Memcached replacement, [LSMCD](https://www.litespeedtech.com/open-source/litespeed-memcached). For more information, see [How to set up Object Cache support](lscache__lscwp__admin.md#how-to-set-up-object-cache-support).

### Object Cache[¶](#object-cache "Permanent link")

*OFF*

Object Cache is disabled by default. Select `ON` to enable it, then configure it using the settings below.

Video

Watch [How to set up Redis with LiteSpeed Cache](https://youtu.be/8-xtdnpCLHQ) for an example object cache configuration.

### Status[¶](#status "Permanent link")

This area displays the status of your external object cache. If you see errors here, see [How to Debug your Object Cache Setup](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:cache:lscwp:configuration:cache:object_cache#how_to_debug).

### Method[¶](#method "Permanent link")

*Memcached*

If your object cache is Memcached or LSMCD, set **Method** to `Memcached`. If it is Redis, set **Method** to `Redis`.

LSMCD Warning

If you are using LiteSpeed Memcached with [SASL](https://docs.litespeedtech.com/products/lsmcd/configuration/sasl/), be aware of a known issue that may cause a fatal error like this:

```
PHP Fatal error: Uncaught Error: Cannot use object of type stdClass as array in /home/domainname/public_html/wp-includes/meta.php:588
```

There are two ways to avoid this issue:

1. Disable SASL, if possible.
2. Add `posts` and `post_meta` to the **Do Not Cache Groups** setting. If that does not work, add other problematic groups, such as `users` and `user_meta`.

Redis users will not encounter this issue.

### Host[¶](#host "Permanent link")

*localhost*

This is the hostname or IP address used by your Memcached or LSMCD object cache. The default should work if Memcached is set up over TCP. If you are using a UNIX socket, set **Host** to `/path/to/memcached.sock`, replacing that example path with the actual path used by your installation.

Tip

Using a socket for object cache is common and more efficient.

### Port[¶](#port "Permanent link")

*11211*

This is the port used by your object cache. The default should work if Memcached is set up over TCP. If you are using a UNIX socket, set **Port** to `0`.

### Default Object Lifetime[¶](#default-object-lifetime "Permanent link")

This setting is deprecated as of v7.9.2. Cache keys are now unique per installation, so the cache starts fresh after upgrading, and this setting is no longer needed.

### Username[¶](#username "Permanent link")

This is available only when SASL is installed and the object caching method is Memcached.

### Password[¶](#password "Permanent link")

Specify the password used to connect.

### Redis Database ID[¶](#redis-database-id "Permanent link")

This is the database to use. This field applies only when the object caching method is Redis. If you are using Memcached, ignore this field.

### Global Groups[¶](#global-groups "Permanent link")

*users userlogins usermeta user\_meta site-transient site-options site-lookup blog-lookup blog-details rss global-posts blog-id-cache*

This is a list of groups to cache at the network level.

### Do Not Cache Groups[¶](#do-not-cache-groups "Permanent link")

*comment counts plugins*

This is a list of groups to exclude from the object cache.

### Persistent Connection[¶](#persistent-connection "Permanent link")

*ON*

When enabled, this setting keeps the connection alive to make Memcached or Redis faster.

Tip

For consistent results, make sure this setting matches `memcached.sess_persistent` in `php.ini`. If one setting is disabled while the other is enabled, connection tests may fail intermittently.

### Cache WP Admin[¶](#cache-wp-admin "Permanent link")

*ON*

When enabled, this setting speeds up the WordPress admin, but may occasionally result in stale data being retrieved from the object cache.

### Store Transients[¶](#store-transients "Permanent link")

This setting is deprecated as of v7.8. When available, Object Cache now always stores transients to prevent potential database bloat from uncleared expired transients.

## Browser tab[¶](#browser-tab "Permanent link")

LiteSpeed Cache is a full-page cache. It stores dynamic content that is expensive to generate as static files that are easy to serve. However, full-page caching handles only dynamically generated content. Static content, such as images, videos, and fonts, is not included. Yet this content may be requested from the server repeatedly. For example, a site’s logo may appear on every page a user visits, requiring the server to transfer the same image to that user repeatedly.

Browser caching stores the logo and other static content on the user’s device the first time it is requested. The browser then retrieves the content from local storage until the cache expires. Displaying a locally stored image uses fewer resources than transferring it over the internet, regardless of connection speed.

[![LSCWP Cache Section Browser Tab](../images/cache08.png)](https://docs.litespeedtech.com/lscache/lscwp/images/cache08.png)

### How to set it up[¶](#how-to-set-it-up "Permanent link")

Browser caching is usually enabled at the server level. If you do not have access to your server’s admin interface, you can enable browser caching through the LiteSpeed Cache for WordPress plugin settings instead. Choose the level that works best for your site. Browser caching is enabled if either level is turned on.

#### At the plugin level[¶](#at-the-plugin-level "Permanent link")

Info

On multisite networks, this tab moves to the **Network Admin** screen.

##### Browser Cache[¶](#browser-cache "Permanent link")

*OFF*

When Browser Cache is enabled, static files, such as images, CSS files, and videos, are stored on the user’s device for faster retrieval.

##### Browser Cache TTL[¶](#browser-cache-ttl "Permanent link")

*31557600*

This is how long, in seconds, files remain in the browser cache before expiring. The minimum is `30` seconds. The recommended value is `31557600` seconds, or one year.

#### At the server level[¶](#at-the-server-level "Permanent link")

If you are a server admin, you have more control. In LiteSpeed Web Server Admin, navigate to **Server > General** and scroll to **Expires Settings**.

[![](../images/cache09.png)](https://docs.litespeedtech.com/lscache/lscwp/images/cache09.png)

Set **Enable Expires** to `Yes`.

Set **Expires Default** to a number of seconds, or leave it blank if you do not want a catch-all expiration.

Note

Be careful with this setting. It applies to all content types, including HTML. This may conflict with LSCache and cause stale content to be served. If you are running LSCache, leave **Expires Default** unset.

Set **Expires by Type** to a string like the example above, changing file types or expiration times as needed. The example enables browser caching for images, CSS, and JavaScript, setting their expiration to `604800` seconds (one week). If you leave **Expires Default** blank, as recommended when using LSCache, specify every file type you want the browser to cache in **Expires by Type**.

## Advanced tab[¶](#advanced-tab "Permanent link")

[![LSCWP Cache Section Advanced Tab](../images/cache10.png)](https://docs.litespeedtech.com/lscache/lscwp/images/cache10.png)

### AJAX Cache TTL[¶](#ajax-cache-ttl "Permanent link")

*empty list*

Specify an AJAX action in POST or GET and the number of seconds to cache its request, separated by a space. Enter one action-TTL pair per line.

Example

To cache an AJAX action called `getads` for 30 seconds, add `getads 30` to the list.

### Login Cookie[¶](#login-cookie "Permanent link")

*empty string*

Use this option to configure a unique login cookie when [multiple web applications](lscache__lscwp__troubleshoot.md#logged-in-cookie-conflicts) with an LSCache plugin run in a single virtual host.

Example

An example login cookie is `_wp_login_1`.

Info

On multisite networks, this setting moves to the **Network Admin** screen.

### Vary Cookies[¶](#vary-cookies "Permanent link")

*empty*

Use this option if a third-party plugin uses cookies to change page content.

Enter one cookie per line. Cookies are case-sensitive, may not contain spaces, and must consist of alphanumeric characters or underscores (`_`).

Example

A membership plugin shows one set of shop prices to members and another to non-members. This creates two versions of each page based on the plugin’s `_member` cookie. To store both versions in the cache, configure LSCache to create a vary based on that cookie.

Enter `_member` on its own line in the **Vary Cookies** box.

Learn more about [Cache Varies](lscache__devguide__advanced.md#cache-varies).

### Improve HTTP/HTTPS Compatibility[¶](#improve-httphttps-compatibility "Permanent link")

*OFF*

When a site uses both HTTP and HTTPS, login-cookie conflicts may occur. Cookies are associated with a domain name, regardless of protocol, but an HTTP connection cannot read a cookie saved over HTTPS. As a result, if a user logs in over HTTPS and then connects over HTTP, the user is treated as a guest rather than as a logged-in user.

When this option is enabled, the login cookie is always saved as an HTTP cookie, regardless of the protocol used to access the page. This ensures that both HTTP and HTTPS connections can access it.

### Instant Click[¶](#instant-click "Permanent link")

*OFF*

Clicking a link takes time: the user hovers over it, presses the mouse button, and releases it. Only then is the link considered clicked and the new page loaded. With Instant Click enabled, the page begins loading as soon as the user hovers over the link. By the time the mouse button is released, enough of the page may have loaded for it to appear almost instantly.

This feature generates additional server requests if visitors hover over links without clicking. As a result, it may affect server load.

## WooCommerce tab[¶](#woocommerce-tab "Permanent link")

This tab appears only if WooCommerce is installed and activated.

Note

We highly recommend that you [enable ESI](#esi-tab) when using WooCommerce. ESI allows flexible caching of mixed public and private data in an ecommerce environment.

Note

By default, the **My Account**, **Checkout**, and **Cart** pages are excluded from caching. Misconfigured page associations in WooCommerce settings may cause pages to be classified incorrectly. To verify whether a page is cached, follow [these instructions](lscache__lscwp__installation.md#verify-your-site-is-being-cached).

[![LSCWP Cache Section WooCommerce Tab](../images/cache11.png)](https://docs.litespeedtech.com/lscache/lscwp/images/cache11.png)

### Product Update Interval[¶](#product-update-interval "Permanent link")

*Purge product on changes to the quantity or stock status. Purge categories only when stock status changes.*

Use this area to choose how aggressively to purge the cache when a product’s stock status or quantity changes. The right choice depends on your store’s configuration and theme.

- If you do not use quantity or stock status in a meaningful way, you can minimize caching tied to stock events.
- If you display stock quantities on product and category pages, purge both pages whenever a stock event occurs.

### Vary for Mini Cart[¶](#vary-for-mini-cart "Permanent link")

*OFF*

Enable this option to generate a separate cached copy of the mini cart when it is not empty.

Most themes use JavaScript to update the mini cart, so caching is not an issue. If your theme does not use JavaScript to update it, however, the cart contents will be cached. Enable this option to create a cache vary so that the correct cart contents are always displayed.

Note

This setting automatically updates the `.htaccess` file.
