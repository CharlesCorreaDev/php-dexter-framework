# Troubleshooting Guide | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/troubleshoot/

---

# Troubleshooting Guide[¶](#troubleshooting-guide "Permanent link")

We do our best to document and provide solutions for any situation you may encounter with LiteSpeed Cache plugins. If you don't see your issue listed here, there are [additional support options](lscache__lscwp.md#additional-support) available.

See Also: [General LSCache Troubleshooting](lscache__troubleshoot.md)

Tip

Before contacting the support team, please verify that you have upgraded to the most recent version of the plugin.

## Common issues and solutions[¶](#common-issues-and-solutions "Permanent link")

Here is a list of common problems that people report with the LiteSpeed Cache plugin for WordPress and/or the QUIC.cloud services. If you have one of these issues, click the link and learn how to solve it.

- [How to tell if your site is being cached](lscache__lscwp__installation.md#verify-your-site-is-being-cached)
- [How to exclude a page from cache](lscache__lscwp__cache.md#do-not-cache-uris)
- [How to verify that an excluded page is *not* being cached](lscache__lscwp__cache.md#verify-a-page-is-not-being-cached)
- [What to do if your site appears "broken" when LSCache is enabled](#first-steps)
- [What to do if your site appears "broken" when a CDN is connected](lscache__lscwp__ts-cdn.md)
- [What to check if you can't save any options in WP-Admin](#unable-to-save-changes-in-wp-admin)
- [What to do if Image Optimization won't start](lscache__lscwp__ts-media.md#trouble-getting-started)
- [What to do if WebP or AVIF images are not being generated](lscache__lscwp__ts-media.md#webp-images-not-generated)
- [What to do if WebP or AVIF images are not replacing JPEGs and PNGs](lscache__lscwp__ts-media.md#webp-not-loading)
- [What to do if your AdSense ads are not displaying](#google-adsense-conflict)
- [How to tell if QUIC.cloud CDN is working](https://docs.quic.cloud/onboarding/enabling/#verify-the-cdn-is-working)
- [What to do if your site is in an incorrect QUIC.cloud free quota tier](https://docs.quic.cloud/billing/tiers/#what-if-my-tier-is-wrong)

If you don't find your issue in this list, you can check out the rest of our [LSCWP Documentation](lscache__lscwp.md) or the [QUIC.cloud Documentation](https://docs.quic.cloud).

If you need to request assistance, please post [a WordPress Support Forum topic](https://wordpress.org/support/plugin/litespeed-cache/) or [open a support ticket](https://www.quic.cloud/support/). Be sure to share your [Report Number](#get-a-report-number) so we may assist you more quickly.

Tip

This guide covers General LSCWP Troubleshooting. If you don't find what you need here, try one of these more specific guides: - [CSS/JS Issues](lscache__lscwp__ts-optimize.md) - [Media Issues](lscache__lscwp__ts-media.md) - [Crawler Issues](lscache__lscwp__ts-crawler.md) - [CDN Support Issues](lscache__lscwp__ts-cdn.md)

## First steps[¶](#first-steps "Permanent link")

### Verify it's an LSCache issue[¶](#verify-its-an-lscache-issue "Permanent link")

1. LSCache plugin should be activated
2. LSCache should be enabled
3. Navigate to **LiteSpeed Cache > Toolbox > Debug Settings** and set **Disable All Features** to `ON`

Are you still having a problem? Then it is probably *not an LSCache plugin issue*.

Is the issue gone? Then the issue *is probably related to the LSCache plugin*.

Tip

You might also try viewing an uncached version or an unoptimized version of the page using [Admin IP Commands](lscache__lscwp__admin.md#admin-ip-commands).

- Uncached: `https://example.com/?LSCWP_CTRL=NOCACHE`
- Unoptimized: `https://example.com/?LSCWP_CTRL=before_optm`

### Check your LSCWP version[¶](#check-your-lscwp-version "Permanent link")

Our LSCWP plugin is developed at a fast pace. Some issues may have already been fixed in the latest version. You should always upgrade to the latest version before spending resources on any issue.

### Pinpoint the problem[¶](#pinpoint-the-problem "Permanent link")

Using the default settings, LiteSpeed Cache does *not* apply any optimizations, and does *not* alter any page content. So, it is likely that one of the settings you have enabled has caused the issue. In order to pinpoint that setting, the first thing you'll need to do is go back to the defaults:

1. [Export your current settings as a backup](lscache__lscwp__toolbox.md#export-settings)
2. [Reset LSCache to its default settings](lscache__lscwp__toolbox.md#reset-all-settings)

If the site is still broken with the default settings, please [contact our support team](lscache__lscwp.md#additional-support). However, if the site works fine with the default settings, that confirms that an option you had enabled is causing the issue.

In order to find the problematic setting, you must re-enable each of your previous settings one-by-one until you find the one that breaks your site.

With each new setting you enable, be sure to **[Purge All](lscache__lscwp__toolbox.md#purge-all)**, and refresh the browser. When the issue comes back, you know you've found the problematic setting.

Tip

**Purge All** does not purge Critical CSS, Unique CSS, or Low-Quality Image Previews. If you are testing features related to CCSS, UCSS, or LQIP you will also need to **Purge All - Critical CSS**, **Purge All - Unique CSS**, or **Purge All - LQIP Cache**, respectively. Just keep in mind that CCSS, UCSS, and LQIP are QUIC.cloud services that may cost money to regenerate after purging.

When you begin re-enabling settings, the following rules of thumb can help you decide the best place to start:

- If certain functionality or buttons have stopped working, it's likely an issue with JavaScript Optimization.
- If pages are rendering badly, then it's likely an issue with CSS Optimization.
- If images aren't loading properly, then it's likely an issue with Media Optimization.

### Get a report number[¶](#get-a-report-number "Permanent link")

If you have been through this Troubleshooting Guide, and you still require support, we may ask to see your Environment Report. The Environment Report tells us what settings you have enabled, what other plugins you have installed, and the contents of your `.htaccess` file, among other useful things.

To generate and share your Environment Report, navigate to **LiteSpeed Cache > Toolbox > Report**, scroll down and press the **Send to LiteSpeed** button. Make note of the **Report Number** that is generated, and include it in your support request so that we may look it up on our end.

### Turn on the debug log[¶](#turn-on-the-debug-log "Permanent link")

Video

See a video demonstration of **Debug LSCWP with the Debug Log** [here](https://www.youtube.com/watch?v=oGuk85gwQc8).

In some situations, it may be helpful to see the WordPress debug log. Because it has the potential to take up a lot of disk space, debug logging is disabled by default. To enable it, navigate to **Toolbox > Debug Settings** and set **Debug Log** to `ON` or to `Admin IP Only`. Set **Debug Level** to `Advanced`.

You can check the generated log by navigating to the **Log View** tab, and pressing the **Debug Log** button.

If you prefer to enable and monitor the debug log from the command line, you can modify `wp-config.php` under WordPress' root directory as follows:

1. Set `WP_DEBUG` to true: `define('WP_DEBUG',true);`
2. Add the following: `define('WP_DEBUG_LOG',true);`

A `debug.log` file will be generated under the `wp-content` directory, and will log information whenever WordPress hits the backend.

You can monitor this log during debugging using the following command:

```
tail -f wp-content/debug.log
```

Be sure to disable logging when you no longer need it.

## LiteSpeed Cache is disabled[¶](#litespeed-cache-is-disabled "Permanent link")

If you see a warning that indicates LiteSpeed Cache is disabled, the warning itself may give a clue as to the source of the problem.

### Disabled at server level[¶](#disabled-at-server-level "Permanent link")

`The LSCache Module is disabled at the server level`

This indicates that cache is turned off at the highest level. You will need to [configure your server](lscache__lscwp.md#server-level-prerequisites), or have your hosting provider do it for you.

### Disabled in plugin settings[¶](#disabled-in-plugin-settings "Permanent link")

`LiteSpeed Cache is disabled in the plugin settings`

This indicates that you haven't turned on caching in the plugin settings. [Do so](lscache__lscwp__cache.md#enable-cache), and the problem should be solved.

### Just plain disabled[¶](#just-plain-disabled "Permanent link")

`LiteSpeed Cache is disabled`

This is a generic error that doesn't indicate any cause. Navigate to **LiteSpeed Cache > Toolbox > Report** and look at the **Report Summary**. The `Server Variables` section right at the top can give you some helpful information. Check the value of `LITESPEED_ON`. It should be `true`.

If this value is `NULL`, it means that you are not running with LiteSpeed Web Server. This is allowed, but it limits the functions that you are able to use. [Learn more](lscache__lscwp__installation.md#without-a-litespeed-server).

## LiteSpeed returns `no-cache`[¶](#litespeed-returns-no-cache "Permanent link")

If a page that should be cached is repeatedly returning `no-cache`, first check whether it's been explicitly excluded: Navigate to **Cache > Excludes** and check all of the settings. Is your page listed in **Do Not Cache URIs**? Or maybe it's in a category or tag that has been excluded?

If you don't see anything in the **Exclude** settings that should affect your page, [check the debug log](#turn-on-the-debug-log). When a page is excluded from cache, you should be able to find the reason in the log. This is an example of a line from a debug log for the page `https://example.com/summer-berry-scone-recipe/`, which was returning `no-cache`:

```
10/26/22 19:28:01.748 [108.5.103.76:56172 1 lCD] [Ctrl] X Cache_control off - Admin configured URI Do not cache: scone
```

The log indicates that the page was not cached because the **Do Not Cache URIs** setting included the string `scone`. That setting prevents any page with the word `scone` in the URL from being cached.

## WordPress lacks permissions[¶](#wordpress-lacks-permissions "Permanent link")

If WordPress doesn't have access to create tables in your database, please run these SQL queries manually after installation:

```
CREATE TABLE IF NOT EXISTS wp_litespeed_optimizer (
id int(11) NOT NULL AUTO_INCREMENT,
hash_name varchar(60) NOT NULL COMMENT "hash.filetype",
src text NOT NULL COMMENT "full url array set",
dateline int(11) NOT NULL,
refer varchar(255) NOT NULL COMMENT "The container page url",
PRIMARY KEY (id),
UNIQUE KEY hash_name (hash_name),
KEY dateline (dateline)
);
```

and

```
CREATE TABLE IF NOT EXISTS `wp_litespeed_img_optm` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `optm_status` varchar(64) NOT NULL DEFAULT '',
  `src` varchar(1000) NOT NULL DEFAULT '',
  `srcpath_md5` varchar(128) NOT NULL DEFAULT '',
  `src_md5` varchar(128) NOT NULL DEFAULT '',
  `server` varchar(255) NOT NULL DEFAULT '',
  `root_id` int(11) NOT NULL DEFAULT '0',
  `src_filesize` int(11) NOT NULL DEFAULT '0',
  `target_filesize` int(11) NOT NULL DEFAULT '0',
  `target_saved` int(11) NOT NULL DEFAULT '0',
  `webp_filesize` int(11) NOT NULL DEFAULT '0',
  `webp_saved` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_id_2` (`post_id`,`srcpath_md5`),
  KEY `post_id` (`post_id`),
  KEY `optm_status` (`optm_status`),
  KEY `root_id` (`root_id`),
  KEY `src_md5` (`src_md5`),
  KEY `srcpath_md5` (`srcpath_md5`)
  );
```

Note

If your site uses a table prefix other than `wp_`, please replace the `wp_` in `wp_litespeed_optimizer` and `wp_litespeed_img_optm` with your site's prefix.

## Unable to save changes in WP-Admin[¶](#unable-to-save-changes-in-wp-admin "Permanent link")

If you are unable to save your settings in WP-Admin, or the options are reset to their previous state after refreshing the page, there are a few possible explanations.

### Accidental caching[¶](#accidental-caching "Permanent link")

WP-Admin may be cached by browser cache or opcode cache. To see if this is the case, check the response headers, like so:

[![!Page is not cached](../images/troubleshoot01.png)](https://docs.litespeedtech.com/lscache/lscwp/images/troubleshoot01.png)

1. From a non-logged-in browser, navigate to the page, open the **Network** tab in the developer tools, refresh the page, and click the first listed resource. This should be the URI of the page, as described above.
2. Look for two headings:
   - `cache-control: no-cache, must-revalidate, max-age=0`
   - `expires: Wed, 11 Jan 1984 05:00:00 GMT` (the value may be set to any date *prior to* today) If either of those headers is not present, or has a different value, the browser is likely caching your page. Typically, browser caching is accidentally enabled via bad optimization rules that add the cache control header to dynamic requests. Check your `.htaccess` file to fix this.
3. If you have opcache enabled, please disable it and see if that helps. You can use the `phpinfo` page to verify.
4. If you have an additional cache layer, particularly object cache with Redis or Memcached, please try disabling that.

### Database corruption[¶](#database-corruption "Permanent link")

If the LiteSpeed Cache plugin's database structure is corrupted or damaged, it could cause this behavior. It's rare that this will happen, but if it does, you may repair it with the following steps:

1. Back up your current database.
2. Disable the LiteSpeed Cache plugin.
3. Create a PHP file named `repair.php` in same directory as your `wp-config.php`. Copy the following contents into `repair.php`:

   ```
   <?php
   define( 'WP_USE_THEMES', false );
   require( './wp-load.php' );

   global $wpdb;
   $table_name = $wpdb->prefix . 'options';
   $table_name = "{$wpdb->prefix}options";
   $wpdb->query( $wpdb->prepare( "DELETE FROM `$table_name` WHERE `option_name` like '%litespeed.%' " ) );

   if ( defined( 'LSCWP_V' ) ) {
   do_action( 'litespeed_purge_all' );
   }
   echo "done";
   ```
4. Visit `https://example.com/repair.php`, replacing `example.com` with your actual domain. It should output "done."
5. Delete `repair.php`, and re-enable the LiteSpeed Cache plugin. The database will be freshly created, and should work fine now.

## Admin bar is missing[¶](#admin-bar-is-missing "Permanent link")

The Admin Bar at the top of the page should display on the frontend for logged in users.

Immediately after logging in, if the admin bar does not display until you manually refresh the page, this could be due to the **Instant Click** setting.

Here's why: When you enable **Instant Click** via **LiteSpeed Cache > Cache > Advanced**, some themes will prefetch the home page content *before* logging you in. As a result, the prefetched version from browser cache does not include the admin bar.

To verify that this is what is happening, turn on the browser developer tools, check the HTTP response header for the login page request. Make sure the **Disable Cache** option in the tool is *not* selected. The HTTP response header should show the status code `200` with `(from Prefetch Cache)` appended. If you see this, it confirms that **Instant Click** is the problem.

Solution: Turn off **Instant Click** when using an incompatible theme.

Note

This behavior occurs with Chrome and Microsoft Edge, but not Firefox.

## LSCache directory too big[¶](#lscache-directory-too-big "Permanent link")

If your `lscache` directory is growing too quickly, it could be due to multiple requests from crawlers or bots using different query strings.

Example

You may get requests every second from Facebook with the user-agent `facebookexternalhit` or `facebot`, and each request uses a different query string.

To mitigate this behavior, check your access log to identify the user-agent, and try one of the following solutions:

- If Facebook is the culprit, follow their [official guide]([https://developers.facebook](https://developers.facebook.com/docs/graph-api/overview/rate-limiting) to enable rate limiting
- Exclude the offending [user-agents](lscache__lscwp__cache.md#do-not-cache-user-agents) from cache.
- If you don't care about the service the user-agent is providing (analytics, etc), then you can set a [rewrite rule to block the user-agent](https://httpd.apache.org/docs/2.4/rewrite/access.html#blocking-of-robots) directly
- Enable a workaround and set a [cron job](lscache__basics.md#cron-job) to clean up the `lscache` folder regularly.

## Caching issues[¶](#caching-issues "Permanent link")

### Forced caching[¶](#forced-caching "Permanent link")

Sometimes, in an effort to make sure that certain pages are always cached, you erroneously force the *entire site* to be cached. This is not a good idea, because you never know when there will be individual exceptions to caching.

Navigate to **LiteSpeed Cache > Cache > Cache** and look in the **Force Cache URIs** box. If you see `/` or `*` there, then you will need to remove it. Save, and then **Purge All LSCache**.

### Logged-in users appearing as logged-out[¶](#logged-in-users-appearing-as-logged-out "Permanent link")

This problem is caused when using multiple web applications under a single domain. You can find more information on this issue and how to resolve it in our [Handling Logged-in Cookie Conflicts documentation](lscache__troubleshoot.md#logged-in-cookie-conflicts).

### Cache always misses[¶](#cache-always-misses "Permanent link")

If you always see `X-LiteSpeed-Cache: miss` in the headers, then something is wrong. Disable and then re-enable LSCache. Does that help? If not, take a look at the following scenarios and see if they apply to your site:

#### Check permissions[¶](#check-permissions "Permanent link")

Verify that the cache directory has the proper permissions (`0755`). If you don't know your [cache root directory](lscache__lscwp.md#configure-the-server), your hosting provider can help.

#### Check your CDN[¶](#check-your-cdn "Permanent link")

Some CDNs have cache settings that can break LSCache and cause `X-LiteSpeed-Cache: miss` to appear at all times. However, accessing the backend server directly achieves `X-LiteSpeed-Cache: hit`. If this happens, turn off the CDN's cache functions.

#### Check your file path[¶](#check-your-file-path "Permanent link")

If your domain path and your file path are different then LSCache will be looking in the wrong place for your `.htaccess` file.

Add the following lines to `wp-config.php`, replacing `/domain_path/` with the actual path where your site's frontend `.htaccess` is located, and `/file_path/` with the actual path where your site's backend `.htaccess` is located:

```
define("LITESPEED_CFG_HTACCESS", "/domain_path/.htaccess");
define("LITESPEED_CFG_HTACCESS_BACKEND", "/file_path/.htaccess");
```

Example

If the files for your `https://www.example.com` site are stored in a `/wordpress/` subdirectory, your domain path might look like `/home/user/public_html/.htaccess` while your file path would look like `/home/user/public_html/worpdress/.htaccess`.

### Browser displays stale content[¶](#browser-displays-stale-content "Permanent link")

Scenario: older cached versions of updated pages are being served. You've checked the response headers for the `X-LiteSpeed-Cache` line, and it is not found. This indicates that the page is not coming from LiteSpeed's cache, even though it should be.

#### Cause[¶](#cause "Permanent link")

The page is being served from the browser cache due to cache rules present in `.htaccess` (most likely in the WordPress root directory).

If `.htaccess` contains an `ExpiresDefault` cache rule, or an `ExpiresByType text/html` cache rule that is not set to `0` seconds, the copy stored by the browser cache will be served. *The page will never be requested from LiteSpeed*. Because the browser cache lacks the advanced purging rules that are the backbone of LiteSpeed's accuracy, this can result in stale content being served.

#### Solution[¶](#solution "Permanent link")

If you have no other cache plugins installed, and you have no interest in using a browser cache, then you can safely remove any of the `ExpiresDefault` or `ExpiresByType` lines.

If you want to leave the existing browser caching functionality in place, you'll need to specifically exclude the pages that are handled by LiteSpeed Cache. Add the following line above the `ExpiresDefault` line:

```
    ExpiresByType text/html "access plus 0 seconds"
```

If the `ExpiresByType text/html` rule already exists, edit it so that it matches the line above.

This rule will make it so that the pages that are cached by LSCWP are not included in the browser cache, but any other browser-cache behavior will remain unchanged.

### PHP Session issues[¶](#php-session-issues "Permanent link")

Some plugins, such as WHMpress, that use **PHP Session** to store values (currency, language...etc) don't work with LiteSpeed Cache. Once LiteSpeed Cache is enabled, user-dependent values like currency do not work or display correctly.

#### Cause[¶](#cause_1 "Permanent link")

Pages whose content depends on **PHP Session** are not cache-friendly. Once the cached page is generated, it will *not* vary on session data.

Why? LiteSpeed Cache is designed to avoid hitting the PHP backend. Therefore, there is no way for the cache module to know what value is stored in **PHP Session** for any visitor other than the first one to load the page.

#### Solution:[¶](#solution_1 "Permanent link")

To make this to work, a code change to the third party plugin is required. The developer can change the plugin to store the value in a cookie and then LiteSpeed Cache can be set to [vary on that cookie](lscache__devguide__advanced.md#cache-varies).

### Cache purges too frequently[¶](#cache-purges-too-frequently "Permanent link")

Scenario: the cache is getting purged quite often, inconsistent with the TTL settings. Some actions may unintentionally trigger a purge, and it may be necessary to do some investigation to find the culprit.

#### Possible explanations[¶](#possible-explanations "Permanent link")

1. **LiteSpeed Cache > Cache > Purge**: Have you enabled `All pages`, and you post frequently?
2. **LiteSpeed Cache > Cache > Purge**: Have you manually added any hooks to **Purge All Hooks**?
3. Do you have any plugins that are automatically enabled or disabled when a page loads?

All of these things will cause a **Purge All** action. If you can disable any of them, that should solve the problem.

#### Diagnosing the problem[¶](#diagnosing-the-problem "Permanent link")

If the cause is not obvious, you'll need to do a little digging. Enable the debug log, repeat the steps that cause a purge, disable logging, and then check the log to find the cause of any **Purge All** actions.

##### Enable LSCWP debug log[¶](#enable-lscwp-debug-log "Permanent link")

Navigate to **Toolbox > Debug** and set **Debug Log** to `Admin IP only`. Add your IP address under **Admin IPs** (`192.0.2.0` in this example), and set **Debug Level** to `Advanced`.

[![!](../images/troubleshoot02.png)](https://docs.litespeedtech.com/lscache/lscwp/images/troubleshoot02.png)

##### Reproduce the issue[¶](#reproduce-the-issue "Permanent link")

Execute the following steps:

- **Purge All - LSCache**
- Access any page twice
- Make sure the cache header is showing `hit`
- Reproduce the steps that are suspected of triggering a purge.

In this example, let's assume you have noticed unusual purging activity when you edit a WooCommerce product's inventory. The steps you would reproduce in this case are: visit home page, edit product, visit home page again.

##### Check the debug log[¶](#check-the-debug-log "Permanent link")

LiteSpeed Cache is a tag-based caching system, so in order to figure out what is happening, you should search for the appropriate tags in the debug log. First, we look for `X-LiteSpeed-Tag` to find the pages that are impacted. We find the following lines, which correspond to home page, edit product, home page:

```
X-LiteSpeed-Tag: 87f1_URL.6666cd76f96956469e7be39d750cc7d9,87f1_F,87f1_Po.24,87f1_PGS,87f1_
X-LiteSpeed-Tag: 87f1_tag_priv,public:87f1_ESI,public:87f1_ESI.admin-bar,public:87f1_
X-LiteSpeed-Tag: 87f1_URL.6666cd76f96956469e7be39d750cc7d9,87f1_F,87f1_Po.24,87f1_PGS,87f1_
```

Then we search for `X-LiteSpeed-Purge` to find the purge action. We find the following lines:

```
X-LiteSpeed-Purge: public,87f1_WC_T.18
X-LiteSpeed-Purge: public,87f1_WC_T.18,87f1_Po.37,87f1_URL.c5058f4b6fbb3ed974efbe319a954e61,87f1_W.recent-posts-2,87f1_T.2,87f1_T.9,87f1_T.18,87f1_A.1,87f1_PT.product,87f1_F,87f1_H,87f1_PGS,87f1_PGSRP,87f1_D.201806
X-LiteSpeed-Purge: public,87f1_WC_T.18,87f1_Po.37,87f1_URL.c5058f4b6fbb3ed974efbe319a954e61,87f1_W.recent-posts-2,87f1_T.2,87f1_T.9,87f1_T.18,87f1_A.1,87f1_PT.product,87f1_F,87f1_H,87f1_PGS,87f1_PGSRP,87f1_D.201806,87f1_REST
X-LiteSpeed-Purge: public,stale,87f1_WC_T.18,87f1_Po.37,87f1_URL.c5058f4b6fbb3ed974efbe319a954e61,87f1_W.recent-posts-2,87f1_T.2,87f1_T.9,87f1_T.18,87f1_A.1,87f1_PT.product,87f1_F,87f1_H,87f1_PGS,87f1_PGSRP,87f1_D.201806,87f1_REST,87f1_WC_T.9
X-LiteSpeed-Purge: public,stale,87f1_WC_T.18,87f1_Po.37,87f1_URL.c5058f4b6fbb3ed974efbe319a954e61,87f1_W.recent-posts-2,87f1_T.2,87f1_T.9,87f1_T.18,87f1_A.1,87f1_PT.product,87f1_F,87f1_H,87f1_PGS,87f1_PGSRP,87f1_D.201806,87f1_REST,87f1_WC_T.9
```

Here's how it works: if the tag(s) in `X-LiteSpeed-Purge` is/are contained in the `X-LiteSpeed-Tag` of other pages, then those other pages will be purged during the action.

Now let's check the above tags. We will see:

`87f1_F` and `87f1_PGS` are contained by the homepage, so it gets purged. `87f1` is the prefix. `F` stands for Front Page, and `PGS` stands for Pages. You can see a full list of tag classes [in the code](https://github.com/litespeedtech/lscache_wp/blob/6f3e5bd70db78e1900a8ba0c68765c7257534f5c/litespeed-cache/inc/tag.class.php#L17), if you wish.

#### Solution[¶](#solution_2 "Permanent link")

`F` and `PGS` are triggered by the setting **Auto Purge Rules For Publish/Update**. If you do not want the `Front page` or `Pages` to be purged every time you update a WooCommerce item, then you need to uncheck those options.

[![!](../images/troubleshoot03.png)](https://docs.litespeedtech.com/lscache/lscwp/images/troubleshoot03.png)

#### Disable auto purge[¶](#disable-auto-purge "Permanent link")

Warning

This is a last resort, for sites that do not actively or frequently update the content. If you disable auto purge, you MUST purge the cache manually any time content on your site changes, or you run the risk of serving stale content.

You can disable auto purge by adding the following code to your theme's `functions.php` file:

```
if (strpos($_SERVER['REQUEST_URI'], "LSCWP_NONCE") === false){
ob_start( function($buffer){
@header('X-LiteSpeed-Purge: nothing');
return $buffer;
} );
}
```

### Page content not updating correctly[¶](#page-content-not-updating-correctly "Permanent link")

If your site uses a plugin that updates the content of a page without editing/saving that page, such as a "like" button that updates a counter when pressed using ajax, LSCache will not be made aware that the page should be purged from cache. As long as the now outdated copy of the page is still in cache and being served, it will appear like these changes never happened.

#### Solution[¶](#solution_3 "Permanent link")

Add our `litespeed_purge_post($pid)` [API call](lscache__lscwp__api.md#purge-a-single-post-by-id) to the offending plugin to have it notify LSCache that the page should be purged.

#### Testing[¶](#testing "Permanent link")

1. Purge the cache and with the inspector open (right click page > **Inspect**) access the page as a guest/non-logged in user.
2. In the inspector, click into the **Network** tab and select the page request - this is usually the first entry. With this selected, click the **Header** tab and check that the **Response Header** does not contain `X-LiteSpeed-Cache: hit`.
3. (If your plugin updates on each visit, skip this step) Refresh the page. You should now see `X-LiteSpeed-Cache: hit` in your response header. This indicates that the page was served from cache.
4. Trigger your plugin and make sure that the page is updated as expected.
5. Refresh the page one last time. `X-LiteSpeed-Cache: hit` should once again be gone from the Response Header and the page should still contain the updated information.

## WP-Cron issues[¶](#wp-cron-issues "Permanent link")

### A scheduled event has failed[¶](#a-scheduled-event-has-failed "Permanent link")

The following notice may appear in the Health Check plugin: `The scheduled event, litespeed_xxxx[image or ccss]_trigger, failed to run, Your site still works, but this may indicate that scheduling posts or automated updates may not work as intended`

For example:

```
The scheduled event, litespeed_imgoptm_trigger, failed to run.
```

Technically, this is not a LiteSpeed issue, but is due to WordPress itself. This usually happens when WP does a version update. It will usually clear up on its own in a day or so, once the WP-Cron is back to normal.

If you don't want to wait, you can disable WP-Cron and use a 3rd party cron like cPanel cron.

### Scheduled posts not publishing on time[¶](#scheduled-posts-not-publishing-on-time "Permanent link")

Scheduled Posts are published in WordPress through a WP-Cron job. Normally, WordPress triggers the cron job each time a request hits the backend. The backend is rarely hit, however, when using a cache, and this causes scheduled posts to publish late.

LSCWP will correctly purge the cache when a scheduled post is published in the cron job. All you need to do is make sure that you can reliably hit the backend. This can be done by scheduling a cron job to hit `wp-cron.php` at your ideal interval.

For example, to update scheduled posts every 15 minutes:

```
    */15 * * * * wget http://your_wp_site/wp-cron.php
```

When using a server level cron job, WordPress suggests defining `DISABLE_WP_CRON` in your `wp-config.php` file to disable checking WP-Cron on a backend hit.

```
    define('DISABLE_WP_CRON', true);
```

This may be useful in reducing the number of calls made to WP-Cron if that is desired.

For a more in-depth discussion of this issue, [see our blog](https://blog.litespeedtech.com/2017/05/17/wpw-using-lscache-for-wp-with-scheduled-posts/).

### WP-Cron PHP timing out[¶](#wp-cron-php-timing-out "Permanent link")

Some WordPress plugins or operations may need to run very long PHP processes, but they may be killed by LiteSpeed Web Server with error 500 after 120 seconds. With that in mind, we have additional environment variables that will resolve that issue.

#### noconntimeout[¶](#noconntimeout "Permanent link")

You can use the `noconntimeout` variable in the `htaccess` file. Exclude WP-Cron with this rule:

```
    <IfModule Litespeed> 
    RewriteEngine On
    RewriteRule (wp-cron).php - [E=noconntimeout:1]
    </IfModule>
```

#### SetEnv/SetEnvIf[¶](#setenvsetenvif "Permanent link")

You can use the `SetEnv`/`SetEnvIf` variable too, but we recommend using it only in a vhost file.

```
    <IfModule Litespeed> 
    SetEnv Request_URI "(wp-cron).php" noabort noconntimeout
    </IfModule>
```

For additional examples and information on how to configure the server, you can see [this wiki](https://docs.litespeedtech.com/cp/cpanel/long-run-script/).

Both of these variables will allow you to run PHP processes with no limits for the web pages affected by this `.htaccess` file.

## QUIC.cloud issues[¶](#quiccloud-issues "Permanent link")

### QUIC.cloud queue issues[¶](#quiccloud-queue-issues "Permanent link")

Access to QUIC.cloud services is achieved through request queues. As visitors access pages on your site, if those pages need to be sent to QUIC.cloud for processing, the URLs are added to the appropriate request queues.

Example

You have a new blog post, which has never had Low-Quality Image Replacements (LQIP) generated. When the first visitor accesses the new post, the post's image URLs will be added to the LSCWP queue.

[![!An example of the LQIP Queue](../images/troubleshoot04.png)](https://docs.litespeedtech.com/lscache/lscwp/images/troubleshoot04.png)

Requests in the queue are sent to QUIC.cloud for processing on a schedule that is controlled by the cron. You may override this schedule and send requests for processing at any time by pressing the **Force Cron** buttons on the **Dashboard** or any **Run Queue Manually** button, located below the queue display, as shown in the screenshot above.

Important

When you force the queue to run manually, that only means that the requests in the queue will be sent to QUIC.cloud immediately. QUIC.cloud still must process the requests, and depending on server load, that may take as much as 24 hours, especially early in the month when activity is highest.

To diagnose issues with any of the QUIC.cloud request queues, you can [turn on and monitor the Debug Log](#turn-on-the-debug-log). Be sure to set **Debug Level** to `Advanced`.

## Third party plugin issues[¶](#third-party-plugin-issues "Permanent link")

### Google Analytics issue[¶](#google-analytics-issue "Permanent link")

The Guest Mode incompatibility with Google Analytics has been fixed. Please update your LiteSpeed plugin to the latest version.

### Google AdSense conflict[¶](#google-adsense-conflict "Permanent link")

The LiteSpeed Cache plugin fully integrates with Google AdSense and should work out of the box without any manual intervention needed.

In some rare cases, a conflict with deferred or delayed JavaScript can cause your ads not to show.

To ensure your Google Ads are displayed at the right time and without any rendering issues, you can exclude `adsbygoogle` from being deferred or delayed. Navigate to **LiteSpeed Cache > Page Optimization > Tuning** and add `adsbygoogle` to three lists:

- **JS Excludes**
- **JS Deferred / Delayed Excludes**
- **Guest Mode JS Excludes**

Make sure in all three settings that `adsbygoogle` is on a line by itself.

Click **Save**. Purge the cache by hovering over the LiteSpeed icon on the Admin Bar and clicking **Purge All**.

If you continue to have problems, you can repeat the above process and exclude `ad` from being deferred or delayed. Just be aware that this will exclude any JS that includes the string `ad` and may have implications beyond just excluding advertising.

### Currency/language switcher plugins[¶](#currencylanguage-switcher-plugins "Permanent link")

Because these plugins are mostly PHP session-based, there's often no way for LiteSpeed to make them cacheable. The plugin author needs to change the plugin code to be compatible with LSCache. [See the API](lscache__lscwp__api.md) for more information on how to do that.

However, if the currency switcher or language switcher uses a predictable URL query string (for example, `?new-currency=USD`) when it switches, you can use rewrite rules to create a cookie and set up a cookie-based vary.

Tip

If the plugin itself already sets a cookie, you can simply add the following to the top of `.htaccess`:

```
<IfModule LiteSpeed>
RewriteEngine On
RewriteRule .* - [E=Cache-Vary:plugin_cookie]
</IfModule>
```

Note that `plugin_cookie` is just an example. You would need to replace it with the actual name of the cookie that the plugin sets.

For plugins that don't set their own cookies, here's how you would set up a custom cookie-based vary. Let's say the currency is switched on your site via this URL: `https://example.com/page?new-currency=USD`

We can use the `new-currency` string to create a cookie that we will call `currency_cookie`. We'll give `currency_cookie` a default value of `EUR`, and then instruct LiteSpeed to create cache varies based on the value of the new `currency_cookie`, like so:

```
<IfModule LiteSpeed>
RewriteEngine On
RewriteCond %{HTTP_COOKIE} !currency_cookie
RewriteRule .* - [CO=currency_cookie:EUR:%{HTTP_HOST}:0:/:true:true]
RewriteCond %{QUERY_STRING} new-currency=(.*)
RewriteRule .* - [CO=currency_cookie:%1:%{HTTP_HOST}:0:/:true:true]
RewriteRule .* - [E=Cache-Vary:currency_cookie]
</IfModule>
```

This ruleset must be placed at the top of `.htaccess`. And of course, `new-currency`, `EUR`, and `currency_cookie` are all examples. You'll want to replace them with the actual query string used by the plugin, your site's own default currency, and whatever name you want to use for the custom cookie, respectively.

Here's what this ruleset actually does:

- The first `RewriteCond` line checks whether `currency_cookie` exists. If it doesn't, it sets `currency_cookie=EUR` to create the cookie and give it `EUR` as the default currency.
- The next `RewriteCond` detects when the currency is switched via the `new-currency` query string (like in our example, where `https://example.com/page?new-currency=USD` changes the currency to `USD`). The next rewrite rule then assigns `currency_cookie` the same value that it detects in `new-currency` (in this case, `USD`).
- The final rewrite rule instructs the LiteSpeed cache engine to vary on the value of the `currency_cookie` cookie.

This ruleset makes it possible to have a copy of the page stored in cache for visitors using the `EUR` currency, and another copy cached for visitors using the `USD` currency.

And if someone were to visit `https://example.com/page?this-currency=AUD`, another copy would be cached for visitors using the `AUD` currency.

### EU Cookie Consent[¶](#eu-cookie-consent "Permanent link")

If you have EU Cookie Consent on your site, you will need a cache vary. Varying on the cookie allows two versions of each page to be stored in cache - one for people who have consented to the cookie, and one for those who have not yet done so.

Add the following line to `.htaccess`:

```
RewriteRule .* - [E=Cache-Vary:%{ENV:LSCACHE_VARY_VALUE}+euCookie]
```

### Excluding cookie-based plugins from cache[¶](#excluding-cookie-based-plugins-from-cache "Permanent link")

Some plugins, such as the YITH WooCommerce Wishlist plugin, are incompatible with LSCache for WordPress. The simplest way to avoid cache-related problems with them is to exclude their pages from cache entirely.

#### Manually[¶](#manually "Permanent link")

If a plugin is cookie-based, you need only add the plugin's specific cookie to LiteSpeed Cache's Exclude settings.

[![!](../images/troubleshoot05.png)](https://docs.litespeedtech.com/lscache/lscwp/images/troubleshoot05.png)

From the WordPress Dashboard, navigate to **LiteSpeed Cache > Cache > Excludes**. Scroll down to **Do Not Cache Cookies** and enter `plugin_cookie` in the box. Be sure to replace "plugin\_cookie" with the *actual* name of the plugin's cookie, as shown in the image. If you are excluding multiple cookies in this setting, make sure each cookie has its own line.

#### Built-in[¶](#built-in "Permanent link")

We have some known incompatible plugins on our development to-do list. We intend to fix LSCache compatibility with these plugins eventually, but for now we have set up LSCache to *automatically* set them to Do Not Cache.

If you are using one of these plugins, you do not have to use the manual steps above! LSCache will automatically exclude them from cache.

1. [Woocommerce Wish List](https://wordpress.org/plugins/yith-woocommerce-wishlist/)
2. [WP Poll](https://wordpress.org/plugins/wp-poll/)

## Additional support[¶](#additional-support "Permanent link")

LSCWP provides comprehensive optimization functionality for your WordPress installation(s). With most typical WordPress installations, LSCWP works right out of the box.

However, as WordPress has many extensions, plugins, and themes available, sometimes there may be conflicts. And sometimes you just want an expert to optimize the settings for you, in order to achieve the best results possible.

If you need professional handling or troubleshooting of your problem, LiteSpeed Technologies offers multiple levels of **Hands-on Support**, provided by our experienced System Engineers and LSCWP Developers.

### Tier 1: Free support[¶](#tier-1-free-support "Permanent link")

Our Free Support Tier provides detailed documentation written by LiteSpeed experts, full support for any LSCWP plugin bug reports, and best-effort assistance provided through our support portal and forum.

Self-service and community-powered:

- Our Troubleshooting Guide (you're looking at it now) and [full screen-by-screen documentation](lscache__lscwp__dashboard.md)
- Our [Slack workspace](https://www.litespeedtech.com/slack), the [#wpcache channel](https://golitespeed.slack.com/archives/C3RJHNBTQ) for community support

Support from the LiteSpeed team:

- [GitHub Issues](https://github.com/litespeedtech/lscache_wp/issues) for bug reports
- Support through the [QUIC.cloud support portal](https://quic.cloud/support)
- Support through the [official WordPress plugin support forum](https://wordpress.org/support/plugin/litespeed-cache)

Note

Free Support does not include hands-on help with personalized LSCWP configurations.

### Tier 2: WordPress Cache Optimization[¶](#tier-2-wordpress-cache-optimization "Permanent link")

If Free Tier support does not meet your needs, and you require an expert to take a look at your website, try our premium **WordPress Cache Optimization** service for WordPress and WooCommerce.

This service includes the following on any single WordPress website:

- Install LiteSpeed Cache for WordPress
- Connect WordPress to QUIC.cloud CDN
- Implement the best possible configuration given your website's current state

[Order **WordPress Cache Optimization** here](https://store.litespeedtech.com/store/cart.php?a=add&pid=37)

Available options:

1. **One-Time Full LSCWP Optimization** ($100): One-time set up of LiteSpeed Cache and QUIC.cloud on a single WordPress website.
2. **One-Time Full LSCWP Optimization + Expert Insights** ($250): One-time set up of LiteSpeed Cache and QUIC.cloud on a single WordPress website, plus development insights to optimize your website even further. Also includes one hour ad-hoc support time to consult on website bottlenecks, find uncacheable pages, or any other hands-on assistance related to any other LiteSpeed or QUIC.cloud products. (Recommended for most high-traffic websites)

Optional: Order our [On-Demand Hourly Support](https://store.litespeedtech.com/store/cart.php?a=confproduct&i=1) add-on at any time, for on-demand optimization, troubleshooting, setup, and configuration-related tasks for any LiteSpeed or QUIC.cloud products.

### Tier 3: Ongoing Optimization for WordPress with LiteSpeed[¶](#tier-3-ongoing-optimization-for-wordpress-with-litespeed "Permanent link")

This is an ongoing service for users who are managing their servers and business websites with LiteSpeed products and without the help of a system admin. We will provide expert assistance to manage anything related to LiteSpeed or QUIC.cloud Products for one website and one server.

Cost: $1200/semi-annually or $2000/annually. Multiple websites can be covered at an additional cost. Please [contact our Sales Team](mailto:sales@litespeedtech.com) for a quote.

[Order **Ongoing Optimization for WordPress with LiteSpeed** here](https://store.litespeedtech.com/store/cart.php?a=add&pid=145)

Includes:

- Everything included in the **One-Time Full LSCWP Optimization + Expert Insights** option of the **WordPress Cache Optimization** service
- Additional ongoing insights integrated with your development cycle to consult on everything speed- and optimization-related for your website.
- Unlimited hands-on configuration-related changes and improvements to LiteSpeed or any of our products during the support phase.

This service is recommended for websites looking to always stay on top of their performance with LiteSpeed.
