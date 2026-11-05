# Changelog Archive | LiteMage for Magento 1 | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/litemage/changelog-archive/

---

# LiteMage for Magento 1 Changelog (Archive)[¶](#litemage-for-magento-1-changelog-archive "Permanent link")

Note

This is the archived changelog for LiteMage on Magento 1.x. For the current LiteMage 2 (Magento 2.x) changelog, see the [LiteMage changelog](lscache__litemage__changelog.md).

## Version 1.3.14[¶](#version-1314 "Permanent link")

*Released: April 26, 2021*

- [Improvement] Allow pages to be cacheable when the environment vary changed.
- [Bug fix] Keep the Magento session alive when the default session cookie was not `frontend`. This allows the same login-session length as the application.

## Version 1.3.13[¶](#version-1313 "Permanent link")

*Released: June 5, 2019*

- [Improvement] Add support for the built-in cookie notice from the [Magento 1.x security patch](https://docs.magento.com/m1/ce/user_guide/store-operations/cookie-restriction-mode.html) using a private ESI block.

## Version 1.3.12[¶](#version-1312 "Permanent link")

*Released: May 9, 2019*

- [Feature] Allow custom varies to be added with custom code.
- [Feature] Allow use of the `Mobile_Detect` class for separate mobile views.

## Version 1.3.11[¶](#version-1311 "Permanent link")

*Released: March 20, 2019*

- [Security] Fix a security bug that allowed external code injection through crafted ESI block requests.

Warning

We strongly recommend that all LiteMage users on Magento 1.x update to this version as soon as possible.

## Version 1.3.10[¶](#version-1310 "Permanent link")

*Released: November 2, 2018*

- [Feature] Add purging by SKU and purging of related products and categories through the CLI shell purge command.
- [Improvement] When autopurging bundled products, checks up to three levels for sub-bundle conditions.
- [Bug fix] Fix autopurge-related categories when saving a product with an enable or disable status update.
- [Bug fix] Fix the HTTPS `verifyhost` cURL option for the shell purge script. Fixed the base URL when the backend is on a separate server.

## Version 1.3.9[¶](#version-139 "Permanent link")

*Released: September 10, 2018*

- [Improvement] Add support for auto-purging related bundle products when a product is updated.
- [Improvement] Add a restriction that shell commands may only be issued from defined **Admin IPs**.

## Version 1.3.8[¶](#version-138 "Permanent link")

*Released: June 12, 2018*

- [Bug fix] Fix a bug when **Track Recently Viewed Products** was enabled.

## Version 1.3.7[¶](#version-137 "Permanent link")

*Released: March 5, 2018*

- [Improvement] Improve warm-up cron detection when running multiple cron jobs.
- [Bug fix] Fix missing cache statistics in certain cases.
- [Bug fix] Fix an issue where selecting **Purge when product qty change** did not purge cache after a new order was placed.

## Version 1.3.6[¶](#version-136 "Permanent link")

*Released: June 6, 2017*

- [Feature] Add a **Debug Level** option for controlling debug-log message detail.
- [Feature] Add a **Disable Layout Override for Non-Cacheable Routes** option for sites with issues during checkout.
- [Improvement] Add an extra check for mismatched mobile-detection rules between LiteMage and `.htaccess` when mobile views do not respond correctly.
- [Improvement] Add the ability to crawl mobile views for unresponsive themes.
- [Improvement] LiteMage now writes to its own debug log when enabled under **Developer** testing. Magento debug logging no longer needs to be enabled.

## Version 1.3.5[¶](#version-135 "Permanent link")

*Released: March 10, 2017*

- [Improvement] Improve compatibility for Magento 1.7 stores not using `form_key`.
- [Improvement] Improve compatibility with customized themes.
- [Bug fix] Fix a bug where AJAX output containing ESI blocks could break JSON format.
- [Bug fix] Fix a bug where an external extension setting the layout cache ID could break checkout, such as Amasty One Step Checkout.

## Version 1.3.4[¶](#version-134 "Permanent link")

*Released: January 26, 2017*

- [Improvement] Improve compatibility with customized themes where ESI blocks include setter functions.
- [Improvement] 404 pages for disabled products are now tagged with product and category IDs. Related URLs are now auto-purged when these pages become available again.

## Version 1.3.3[¶](#version-133 "Permanent link")

*Released: December 22, 2016*

- [Improvement] Improve compatibility with other plugins when rendering ESI blocks.

## Version 1.3.2[¶](#version-132 "Permanent link")

*Released: December 9, 2016*

- [Bug fix] Fix a bug when an AJAX response contained an ESI block and the ESI URLs were encoded in JSON output.

## Version 1.3.1[¶](#version-131 "Permanent link")

*Released: November 7, 2016*

- [Bug fix] Fix a bug that sometimes prevented layered AJAX navigation from displaying properly.

## Version 1.3.0[¶](#version-130 "Permanent link")

*Released: November 4, 2016*

- [Major Feature] Improve first-page load speed for new visitors. This feature requires LiteSpeed Web Server 5.1.10 or LiteSpeed Load Balancer 2.0.1.
- [Feature] Allow separate cache copies for each defined user group.
- [Feature] Allow crawlers to warm a copy of the site for logged-in users.
- [Improvement] Improve generation of site URLs.
- [Bug fix] Fix a bug caused when ESI blocks had child blocks with special layout handles.

## Version 1.2.3[¶](#version-123 "Permanent link")

*Released: October 3, 2016*

- [Feature] Add a category-purge option on the **Edit Category** screen.
- [Bug fix] Fix a bug introduced in v1.2.0 that affected crawling URLs with a cache vary.
- [Bug fix] Fix a bug where the crawler sometimes did not work properly when setting the LiteMage Server IP.
- [Bug fix] Fix a bug that occurred when user-agent theme exceptions were added for the template and skin, but not the layout.

## Version 1.2.2[¶](#version-122 "Permanent link")

*Released: September 14, 2016*

- [Bug fix] Fix a bug introduced in v1.2.1 where the default value for the LiteMage Server IP option in **Cache Warm Up** settings could cause errors.

## Version 1.2.1[¶](#version-121 "Permanent link")

*Released: September 13, 2016*

- [Feature] Add cache support for FishPig WordPress Integration. WordPress pages are auto-purged by the LiteSpeed Cache for WordPress plugin.
- [Feature] Add support for LiteSpeed Load Balancer (LSLB). LiteMage cache is located on the LSLB, with no need to change the local web server setup.
- [Feature] Add support for purging by store ID.
- [Feature] Add a command-line tool to purge LiteMage cache. The tool is located in the `shell` subdirectory of the Magento root directory.
- [Improvement] Improve the crawler and added delta-crawler logging.
- [Improvement] Improve new-visitor detection when the visitor log is disabled.
- [Improvement] Allow users to specify what is automatically purged when saving a product from the admin panel.
- [Bug fix] Fix a bug caused by specifying a different theme for different categories.

## Version 1.2.0[¶](#version-120 "Permanent link")

*Released: August 5, 2016*

- [Major Feature] Add an auto-collect feature to collect URLs not included in the sitemap, including deep URLs with different filter selections.
- [Major Feature] Add Delta Crawler. URLs related to purged tags are now recrawled.
- [Feature] Add options to customize product-page and related-category purging when product quantities or stock statuses change.
- [Improvement] LiteMage now auto-detects and sets cache varies for product pages based on whether the review form is displayed and whether the site allows guests to write reviews.
- [Improvement] Improve compatibility with third-party themes, including AW, MT, and Ultimo themes.
- [Bug fix] Fix a bug that caused errors when receiving SOAP API requests.

## Version 1.1.2[¶](#version-112 "Permanent link")

*Released: June 17, 2016*

- [Feature] Add a cached-object counter and statistics to the **Cache Management** page.
- [Bug fix] Fix a bug that could result in a blank page after LiteMage installation.

## Version 1.1.1[¶](#version-111 "Permanent link")

*Released: May 31, 2016*

- [Bug fix] Fix a bug introduced in v1.1.0 that prevented the second crawl from starting properly until the cache was flushed.

## Version 1.1.0[¶](#version-110 "Permanent link")

*Released: May 19, 2016*

- [Feature] Add a **Home Page TTL** setting.
- [Feature] Add support for multiple custom URL warm-up lists per store with different intervals and priorities.
- [Feature] Add support for setting a different default vary-cookie name through `.htaccess` to avoid conflicts with other LiteSpeed Cache plugins.
- [Improvement] Update `esi:include` URLs to be compatible with LiteSpeed Load Balancer's PageSpeed module.
- [Improvement] Improve ESI block detection and hole-punching accuracy.
- [Improvement] **URL Blacklist** now performs an exact match unless a `*` is added.
- [Bug fix] Fix a bug where non-cacheable pages that redirected to a 404 page were mistakenly cached.

## Version 1.0.18[¶](#version-1018 "Permanent link")

*Released: April 7, 2016*

- [Feature] LiteMage is now open-source under the GPLv3 license.

## Version 1.0.17[¶](#version-1017 "Permanent link")

*Released: March 9, 2016*

- [Improvement] Domain names are now excluded from ESI URLs.
- [Improvement] Switch cache warm-up URL-list handling from Magento's cache backend to a file-based system to decrease the chance of large lists exceeding memcached's maximum object size.

## Version 1.0.16[¶](#version-1016 "Permanent link")

*Released: January 18, 2016*

- [Feature] Display crawler warm-up progress in the **Magento Admin Panel**, allowed active crawler runs to be reset, and allowed the full crawl list to be viewed.
- [Improvement] Requires LiteSpeed Web Server 5.0.11 or later. The `litemage_walker` crawler now always hits the backend, keeping the cache in an always-warm state when **Warm Up Interval** is set to less than the cache TTL.
- [Bug fix] Fix a bug in the crawler relating to default stores on non-default sites in a multi-site setup.

## Version 1.0.15[¶](#version-1015 "Permanent link")

*Released: January 8, 2016*

- [Bug fix] Fix a bug from v1.0.14 when crawling non-default stores or non-default currencies.
- [Improvement] Excluded inactive stores from the crawler's list.

## Version 1.0.14[¶](#version-1014 "Permanent link")

*Released: January 4, 2016*

- [Feature] Enhance the crawler, allowing it to run in multiple threads. The number of threads is adaptively adjusted based on a user-defined limit and server load.
- [Feature] Add a configuration option allowing users to supply a custom URL list with different crawler priorities and intervals.
- [Bug fix] Fix a bug introduced in v1.0.13 that caused the crawler to stop crawling.

## Version 1.0.13[¶](#version-1013 "Permanent link")

*Released: December 3, 2015*

- [Improvement] Improve first-page load time when a site has multiple currencies or different cached copies per user group.
- [Improvement] Add new and existing customization options to the store-level configuration scope.
- [Improvement] Enhance the built-in crawler to allow designation of stores to crawl and configuration of each store's priority and crawl order.

## Version 1.0.12[¶](#version-1012 "Permanent link")

*Released: November 23, 2015*

- [Feature] Add a system-default configuration to prevent search results from being cached.
- [Bug fix] Fix a bug where cached 404 pages returned a `200 OK` header, causing them to be incorrectly indexed by search engines.
- [Bug fix] Fix a bug causing a blank page after logging in when **Redirect Customer to Account Dashboard after Logging in** was set to `No`. Navigate to **Configuration > CUSTOMERS > Customer Configuration > Login Options** in the **Magento Admin Panel**. This setting is now ignored, and customers are always sent to the dashboard page after logging in.

## Version 1.0.11[¶](#version-1011 "Permanent link")

*Released: October 27, 2015*

- [Feature] Add a configuration option to crawl non-default currencies.
- [Feature] Add an admin function to allow purging tags from external programs.
- [Improvement] Ensure that LiteMage can still function when cache storage is not available, such as during memcached restarts or when layout cache is disabled. A warning message is displayed on the **Cache Management** page in the **Magento Admin Panel**.
- [Improvement] Remove the **Separate Cache Copy for Customized Cookie Values** option. To handle this more efficiently, instructions for using a provided rewrite rule are now shown instead. Rewrite rules are available in LiteSpeed Web Server 5.0.7 and later.
- [Bug fix] Fix a bug where private blocks sometimes did not update when a user logged in.
- [Bug fix] Fix a bug in the warm-up cron process when crawling non-default stores.

Warning

If you are currently using **Separate Cache Copy for Customized Cookie Values**, add the following rewrite rule **before** upgrading the LiteMage extension: `RewriteRule .* - [E=cache-vary:cookie_name]`

## Version 1.0.10[¶](#version-1010 "Permanent link")

*Released: October 6, 2015*

- [Feature] Add the **Admin IPs** field to allow displaying debug information in the browser for listed IPs.
- [Bug fix] Fix a bug that sometimes prevented LiteMage cache warm-up from running.
- [Bug fix] Fix a bug that sometimes prevented mobile views from displaying properly.

## Version 1.0.9[¶](#version-109 "Permanent link")

*Released: August 26, 2015*

- [Feature] Add compatibility with customized message blocks that use templates. Added a configuration option in the **Magento Admin Panel** to define these blocks.
- [Improvement] Improve tolerance of customized extensions that use non-unique block names in layout files, as long as the alias is different.
- [Improvement] Improve compatibility with some extensions involving “cannot add to cart” errors for configurable products.

## Version 1.0.8[¶](#version-108 "Permanent link")

*Released: August 17, 2015*

- [Feature] Add a configuration option for customer-defined block names associated with `welcome` and `toplinks` tags.
- [Feature] Add a configuration option to enable alternative ESI syntax if standard syntax is filtered by another extension.
- [Improvement] Add the version number to the module title under **System > Configuration** in the **Magento Admin Panel**.
- [Bug fix] Fix a bug when a dynamically created block was used.

## Version 1.0.7[¶](#version-107 "Permanent link")

*Released: August 11, 2015*

- [Feature] Add two access-control points for LiteMage in the **Magento Admin Panel**.
- [Feature] Add the option to distinguish between logged-in and logged-out users only in **Separate Cache Copy per Customer Group**.
- [Improvement] Allow the `LITEMAGE_DEBUG` GET parameter only when debug mode is set to `Yes` or the current IP matches an IP listed in **Enable LiteMage Cache Only for Listed IPs**.
- [Bug fix] Fix a bug in a multi-currency setup.
- [Bug fix] Fix a bug caused when **Separate Cache Copy per Customer Group** was enabled.

## Version 1.0.6[¶](#version-106 "Permanent link")

*Released: July 29, 2015*

- [Feature] Add a block attribute to allow programmatic hole-punching of a dynamically created block from a template.
- [Feature] Add user-defined cacheable routes and **Do-Not-Cache** subroutes in the configuration. Settings are saved in the database, so there is no need to update `config.xml`.
- [Feature] Add debugging support that allows users to purge by product, category, or CMS IDs, or by specific URLs, under **Cache Management**. LiteMage automatically triggers purges when information is updated in the **Magento Admin Panel**.
- [Improvement] Adjust the crawler to use a longer timeout.

## Version 1.0.5[¶](#version-105 "Permanent link")

*Released: July 22, 2015*

- [Bug fix] Fix an exception caused when an ESI block had no associated parent block.

## Version 1.0.4[¶](#version-104 "Permanent link")

*Released: July 20, 2015*

- [Improvement] Improve detection of customized ESI blocks.
- [Improvement] Change ESI block configuration. Default settings now cover most customized cases.
- [Bug fix] Fix a bug that caused a removed child block within an ESI block to continue displaying.

## Version 1.0.3[¶](#version-103 "Permanent link")

*Released: June 2, 2015*

- [Bug fix] Fix website errors when **Add Store Code to URLs** was set to `Yes`.
- [Bug fix] Fix a bug in the purge process when a product was out of stock.
- [Bug fix] Fix a bug where the private session expired while the LiteMage private cache had not expired. Requires LiteSpeed Web Server 5.0 build 16.

## Version 1.0.2[¶](#version-102 "Permanent link")

*Released: May 26, 2015*

- [Feature] Restructure LiteMage `config.xml`. ESI blocks are grouped based on cache tags and purge events to reduce duplication.
- [Feature] Add a private `litemage.jsvar` block at the end of the HTML page as a placeholder block to reset JavaScript global variables for each user.
- [Feature] Add an attribute to ESI block configuration to allow injecting a private block into a form-value field.
- [Feature] Add the `LITEMAGE_DEBUG=NOCACHE|SHOWHOLES` GET parameter to assist with integration testing.
- [Improvement] Remove HTML comment tags around `esi:include` to work with HTML-minification extensions.

## Version 1.0.1[¶](#version-101 "Permanent link")

*Released: April 30, 2015*

- [Feature] Allow a separate cache copy for user-defined cookies.
- [Improvement] Send purge headers upfront to avoid issues caused by AJAX cart extensions.

## Version 1.0.0[¶](#version-100 "Permanent link")

*Released: April 17, 2015*

- Initial release.
