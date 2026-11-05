# Third Party | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/thirdparty/

---

# Third Party Compatibility[¶](#third-party-compatibility "Permanent link")

## Confirmed Compatible[¶](#confirmed-compatible "Permanent link")

This is a list of known popular plugins and themes that we have checked for compatibility. All of the products listed here were compatible with LSCache at the time of testing. If this list looks small, it is because we only test those plugins that have the potential to conflict with a cache solution. **Most WordPress plugins can be used with LiteSpeed Cache with no problems whatsoever.**

Many of the plugins/themes listed below work with LSCWP right out of the box, but others require some action before they will work. Please note the **Action Required** column.

| Plugin or Theme | Action Required | Notes |
| --- | --- | --- |
| **WooCommerce** | If using Recently Viewed Products widget, Set **Enable ESI** to `ON` in **[Cache > ESI](lscache__lscwp__cache.md#esi-tab)** | The plugin respects WooCommerce's own cacheability rules. |
| **WC PDF Product Vouchers** |  |  |
| **WPML** |  | Separate cache copies are stored for each page for each language. |
| **Contact Form 7** | Purge cache after creating/editing a form. Set TTL to 24 hours (86400 seconds) or less. |  |
| **Google XML Sitemaps** |  |  |
| **Yoast SEO** | Purge cache on activation/deactivation |  |
| **Wordfence Security** |  |  |
| **ShortPixel** |  |  |
| **YITH Wishlist** | Define `CacheEngine on esi combine` (or `CacheEngine on crawler esi combine` if you are using the crawler) in Apache config file. |  |
| **iThemes Security Pro** | Add `/wp-content/plugins/litespeed-cache/guest.vary.php` to allowlist |  |
| **Elementor** |  | See [Elementor](#elementor) for suggested settings |
| **Avada** Theme |  |  |
| **Elegant Themes Divi** Theme |  | v3.0.67+ |

## Probably Compatible[¶](#probably-compatible "Permanent link")

This list of plugins and themes were tested some time ago, and found to be compatible. We have done no recent testing, however. If you use one of these plugins regularly and know it to be compatible, please [let us know so](mailto:support@litespeedtech.com) we can move it to the **Confirmed** list.

| Plugin or Theme | Action Required | Notes |
| --- | --- | --- |
| **bbPress** |  | New forums/topics/replies will purge the relevant parent pages. |
| **Caldera Forms** | Set **Enable ESI** to `ON` in **[Cache > ESI](lscache__lscwp__cache.md#esi-tab)** | Forms are exempt from other cache rules on the site. v1.5.6.2+ |
| **NextGen Gallery** |  | Albums and galleries are purged accordingly when related images are updated. |
| **Aelia CurrencySwitcher** |  | Has a vary for the four required cookies. |
| **Fast Velocity Minify** |  |  |
| **Autoptimize** | Disable LSCWP [Page Optimization](lscache__lscwp__pageopt.md) features | Will purge LiteSpeed Cache when Autoptimize cache is purged. |
| **Better WP Minify** |  |  |
| **WP Touch** | Set **Cache Mobile** to `ON` in **[Cache > Cache](lscache__lscwp__cache.md#cache-tab)** |  |
| **Theme My Login** |  |  |
| **wpForo** |  |  |
| **WPLister** |  |  |
| **WP-PostRatings** |  |  |
| **Login With Ajax** |  |  |
| **Ninja Forms** |  |  |
| **Post Types Order** |  | v1.9.3.6+ |
| **BoomBox** Theme |  | Viral Magazine WordPress Theme |

## Incompatible[¶](#incompatible "Permanent link")

These are plugins that we have confirmed to be incompatible with LiteSpeed Cache to some degree.

If you are not an advanced user, we recommend you disable or uninstall all of these plugins.

If you have technical expertise, some of these plugins may be made compatible by employing a work around. Other plugins Are OK to use with LiteSpeed if you turn off any [duplicate functionality](lscache__lscwp__admin.md#using-multiple-optimization-plugins).

| Plugin | Issue | Notes |
| --- | --- | --- |
| **Asset Cleanup** | Potential Conflict | Not compatible with LSCache's Page Optimization features and Guest Mode |
| **Ad Inserter** | Incompatible when Ad Inserter has Caching enabled | LSCache shows "LSCache not supported" and WebP images do not display even when enabled and available. |
| **AirLift** | Incompatible | All LiteSpeed features are disabled, as AirLift plugin sets `LITESPEED_DISABLE_ALL` to `true` in their code |
| **Cache Enabler** | Potential Conflict | Duplicate caching and/or optimization features |
| **Cachify** | Potential Conflict | Duplicate caching and/or optimization features |
| **Cloudflare** | Compatible if you are not using Cloudflare APO | Duplicate caching and/or optimization features |
| **Comet Cache** | Potential Conflict | Duplicate caching and/or optimization features |
| [**Cookie Notice & Compliance for GDPR / CCPA**](https://wordpress.org/plugins/cookie-notice/) | Potential Conflict | Interferes with LSCache's JavaScript Delay functionality |
| **Docket Cache** | Potential Conflict | Duplicate caching and/or optimization features |
| **Duplicator Pro** | Compatible with [work around](#known-plugin-work-arounds) | Without the work around, abort rule kills backup |
| **Fast Velocity Minify** | Potential Conflict | Duplicate caching and/or optimization features |
| **Hummingbird** | Potential Conflict | Duplicate caching and/or optimization features |
| **Nginx Cache** | Potential Conflict | Duplicate caching and/or optimization features |
| **NitroPack** | Potential Conflict | Duplicate caching and/or optimization features |
| **PageSpeed Ninja** | Potential Conflict | Duplicate caching and/or optimization features |
| **Pantheon Advanced Page Cache** | Potential Conflict | Duplicate caching and/or optimization features |
| **Powered Cache** | Potential Conflict | Duplicate caching and/or optimization features |
| **Simple Cache** | Potential Conflict | Duplicate caching and/or optimization features |
| **Speed Optimizer** | Potential Conflict | Duplicate caching and/or optimization features |
| **Super Page Cache for Cloudflare** | Potential Conflict | Duplicate caching and/or optimization features |
| **W3 Total Cache** | Potential Conflict | Duplicate caching and/or optimization features |
| **WP Fastest Cache** | Potential Conflict | Duplicate caching and/or optimization features |
| **WP Meteor** | Potential Conflict | Duplicate caching and/or optimization features |
| **WP Optimize** | Potential Conflict | Duplicate caching and/or optimization features |
| **WP Performance Score Booster** | Potential Conflict | Duplicate caching and/or optimization features |
| **WP REST API Authentication** | Incompatible with optimization features | Blocks `/litespeed/v1` REST API endpoint, which is required for all optimization and CDN services that are provided via QUIC.cloud |
| **WP Rocket** | Potential Conflict | Duplicate caching and/or optimization features |
| **WP Super Cache** | Incompatible | LiteSpeed Cache always returns a cache `miss` when this plugin is active |
| **WP-Postviews** | Compatible with [work around](#known-plugin-work-arounds) | Without the work around, post views are not updated |

## Untested Plugins[¶](#untested-plugins "Permanent link")

It's impossible to list every plugin that is compatible with LiteSpeed Cache, so here is a rule of thumb:

If the plugin is not a cache plugin or an optimization plugin, and it doesn’t generate site content, or do anything out of the ordinary with existing front-end content, then chances are it is 100% compatible with LiteSpeed Cache for WordPress. (The vast majority of plugins fall into this category.)

Still note sure? Consider these points:

- LSCWP purges pages from the cache when certain events are triggered. If your plugin generates content that triggers those same events, then it's compatible in that area.
- LSCWP follows a set of rules to determine whether a page is cacheable. If your plugin generates content that also abides by those same rules, then it's compatible in that area.
- If the plugin uses a [nonce](https://codex.wordpress.org/WordPress_Nonces), customization may be required. Please [see our API](lscache__lscwp__api.md)
- If the plugin claims to speed up your site, then it probably has duplicate functionality and will likely conflict with LiteSpeed Cache.

If you still are unsure, you can ask the plugin author if they have tested for LiteSpeed compatibility, or you can test it yourself.

### Testing For Compatibility[¶](#testing-for-compatibility "Permanent link")

We've tried to make these instruction as easy to understand as possible. **You don't need to be a developer** in order to test for compatibility between two plugins.

Note

While you *could* perform these tests on a production site, we recommend using a test WordPress installation if you have one. This allows you to really take your time, and follow the steps carefully. Testing compatibility is not *hard*, per se, but it is helpful if you can do it without the added pressure of having your production environment effectively offline for the duration of the test.

In whichever environment you are using (test or production) [verify that LSCache for WordPress is working](lscache__lscwp__installation.md#verify-your-site-is-being-cached) as desired before activating the other plugin. Once you have it the way you want it, you may proceed with testing as outlined below.

Since it's cumbersome to keep saying "the plugin you want to test," let's call it "ThatPlugin" for this example.

#### Deactivate[¶](#deactivate "Permanent link")

Deactivate all plugins except for LSCache and ThatPlugin from the WordPress **Plugins** screen, like so:

[![!](../images/thirdparty01.png)](https://docs.litespeedtech.com/lscache/lscwp/images/thirdparty01.png)

From the WordPress Dashboard, navigate to **Plugins**, and click the checkbox next to the **Plugins** column as shown. All of the plugins will be checked. Un-check the boxes next to LiteSpeed Cache and ThatPlugin. Select `Deactivate` from the dropdown **Bulk Actions** box, and click the **Apply** button. All plugins, aside from LSCache and ThatPlugin will be disabled.

Also, be sure that you are using a theme that is compatible with LSCache. If you are not sure about your theme, temporarily switch to the default WordPress theme: Navigate to **Appearance > Themes**, hover over the appropriate card, and press the **Activate** button.

#### Purge[¶](#purge "Permanent link")

Purge the cache: Navigate to **LiteSpeed Cache > Toolbox > Purge** and press the **Purge All** button.

#### Run Tests[¶](#run-tests "Permanent link")

This step varies, depending on how you use ThatPlugin, and what it needs to be able to do. Run through your most common scenarios, and after each step, verify that ThatPlugin is working as expected. Additionally, [check to see if the relevant pages are properly cached](lscache__lscwp__installation.md#verify-your-site-is-being-cached).

If ThatPlugin deals with any private information, run the through the steps twice: once logged-in, and once in incognito mode. When you visit the site incognito, be sure that you are not seeing any private information from your previous logged-in session.

##### Some Testing Examples[¶](#some-testing-examples "Permanent link")

- If ThatPlugin is a forum plugin, run through the steps of creating an account, updating your profile, publishing a post, and submitting a comment. Check the cache at every step.
- If ThatPlugin is a social sharing plugin that counts shares, use it to share a post or a page to social media and then verify that the share count has increased.
- If ThatPlugin is a contact form plugin, use it to send yourself some feedback. Visit the form page again while not logged in, and verify that you are not seeing any of your previous logged-in information.

#### Document + Report[¶](#document-report "Permanent link")

If you encounter an issue that indicates the plugins are not working well together, document it. Take a screenshot, or copy the text of any error messages you may get. Visit the [LiteSpeed Cache for WordPress support forum](https://wordpress.org/support/plugin/litespeed-cache) and share as many details as possible, including the above screenshots.

It might also be helpful to include a copy of your Environment Report so that the support team can see your system settings. To do so, navigate to **LiteSpeed Cache > Toolbox > Report** and click the **Send to LiteSpeed** button. Then make note of the **Report Number** and include it with your forum post.

If you have the skills, you can take a look at [our API](lscache__lscwp__api.md) and make the plugin compatible yourself!

#### Reactivate[¶](#reactivate "Permanent link")

Once you are satisfied that everything works well, or you have documented and reported anything that doesn't, you may re-activate all of the plugins, and restore your preferred theme.

### A Note About Themes[¶](#a-note-about-themes "Permanent link")

Sometimes the plugins all get along well, but there is something unexpected happening in the theme. To test theme compatibility, follow the same steps as above, with the following differences:

- LiteSpeed Cache should be the only active plugin
- The theme you want to test should be activated

## Known Plugin Work Arounds[¶](#known-plugin-work-arounds "Permanent link")

Warning

Any changes you make directly to plugin files as a result of these work-arounds will be lost the next time you update the plugin. Take care to preserve your updates locally, or contact the plugin author and request their help in making the work-around native to the plugin.

### WP-Postviews[¶](#wp-postviews "Permanent link")

Use

```
<div id="postviews_lscwp"></div>
```

to replace

```
<?php if(function_exists('the_views')) { the_views(); } ?>
```

Replace the ajax query in `wp-content/plugins/wp-postviews/postviews-cache.js` with

```
jQuery.ajax({ type:"GET", url:viewsCacheL10n.admin_ajax_url,
     data:"postviews_id="+viewsCacheL10n.post_id+"&action=postviews",
     cache:!1, success:function(data) { 
     if(data) { jQuery('#postviews_lscwp').html(data+' views'); } } });
```

Purge the cache to use the updated pages.

### Duplicator Pro[¶](#duplicator-pro "Permanent link")

Add the following code to your cache root .htaccess file:

```
# BEGIN LiteSpeed noabort
<IfModule rewrite_module>
RewriteEngine On
RewriteRule (wp-cron|duplicator-pro-main|duplicator-pro)\.php - [E=noabort:1]
</IfModule>
# END liteSpeed noabort
```

### Contact Form 7[¶](#contact-form-7 "Permanent link")

If you want to add a custom value to a CF7 form field via JavaScript, you must add the following before your code:

```
wpcf7.cached = false
```

CF7's default behavior is to reset all forms on load when cache is enabled. When that happens, any changes made via JavaScript are lost. The above code prevents the form from resetting.

### Elementor[¶](#elementor "Permanent link")

LSCWP is compatible with the Elementor site builder, though there are some settings that we recommend changing for the best performance.

Tip

As always, we recommend you thoroughly test your site before going live with any optimization setting changes.

Note

The Elementor plugin navigation was verified accurate as of this writing. Please see [Elementor's Help Center](https://elementor.com/help/) if you can't find a specified setting.

In the Elementor **Settings**, navigate to the **Performance** tab and set the following values:

- **CSS Print Method**: we recommend not changing this if the frontend is working as expected.
- **Optimized Image Loading**: `Disable`
- **Optimized Gutenberg Loading**: `Enable`

Navigate to the **Features** tab and set the following values:

- **Inline Font Icons**: `Active`
- **Additional Custom Breakpoints**: `Inactive`
- **Lazy Load Background Images**: `Inactive`

With these settings made, you should be able to use LiteSpeed's [page optimizations](lscache__lscwp__pageopt.md) (CSS and JavaScript Minification and Combination settings, as well as Lazy Loading and Image Placeholders) without conflicting with any of Elementor's optimizations.

Tip

If you are experiencing broken layouts or functionality due to CSS or JavaScript optimizations, see our [Troubleshooting documentation](lscache__lscwp__ts-optimize.md)
