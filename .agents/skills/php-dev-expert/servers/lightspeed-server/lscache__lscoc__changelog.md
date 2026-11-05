# Changelog | LiteSpeed Cache for OpenCart | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscoc/changelog/

---

# LSCache for OpenCart Changelog[¶](#lscache-for-opencart-changelog "Permanent link")

Note

We do our best to update this changelog in a timely manner. However, if a version is missing, you can always find the release announcement in [our LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users).

Info

Each major version of the plugin targets a specific major version of OpenCart. Install the plugin version that matches your OpenCart version.

## Version 4[¶](#version-4 "Permanent link")

Supports OpenCart 4.x.

### Version 4.0[¶](#version-40 "Permanent link")

*Released: July 13, 2023*

- [Bug fix] Fixed minor bugs and updated the package.

## Version 3[¶](#version-3 "Permanent link")

Supports OpenCart 3.x.

### Version 3.0[¶](#version-30 "Permanent link")

*Released: July 13, 2023*

- [Bug fix] Fixed minor bugs and updated the package.

## Version 2[¶](#version-2 "Permanent link")

Supports OpenCart 2.3.

### Version 2.3[¶](#version-23 "Permanent link")

*Released: October 1, 2021*

- [Feature] Added the **Purge Category Cache on Product Save** option.
- [Feature] Added the **Cache 404 Pages** option.
- [Improvement] Do not purge list pages for products, categories, manufacturers, or information pages after editing an individual item.
- [Improvement] Added debug logging to more easily identify conflicting third-party plugins.
- [Improvement] Generated the vary cookie without requiring cookie consent.
- [Improvement] The crawler now recaches product pages through up to five category layers.
- [Improvement] Recache now adds the number of product category pages.
- [Improvement] Optimized the cache-vary value for mobile views.
- [Bug fix] Addressed the `constant already defined` warning.
- [Bug fix] Addressed a minor warning from validator.w3.org validation.

### Version 2.2[¶](#version-22 "Permanent link")

*Released: December 4, 2020*

- [Feature] Added the **Include URLs** option, which overrides **Page Settings** rules.
- [Feature] Added the **Exclude URLs for logged-in users** option, which overrides **Page Settings** and **Include URLs** rules.
- [Feature] Added the **Exclude URLs** option, which overrides **Page Settings** and other URL rules.
- [Feature] Added the **Purge URLs** feature.
- [Improvement] Do not generate the `_lscache_vary` cookie if the requesting browser Do not support it.
- [Improvement] Placed LiteSpeed directives at the top of the `.htaccess` file to prevent conflicts.
- [Improvement] Added manufacturer URLs to the recache sitemap.
- [Improvement] Used Journal code to check the device type when the Journal theme was installed.
- [Improvement] Allowed the CLI crawler to use the `192.0.2.x` local address in addition to the previously allowed `192.0.2.1` address.
- [Bug fix] Prevented the GUI panel from using HTTP links for HTTPS sites.

### Version 2.1.0[¶](#version-210 "Permanent link")

*Released: September 13, 2020*

- [Feature] Added the **Rebuild Cache for specific devices/browsers** feature and option.
- [Improvement] Changed CLI commands for **Purge All LiteSpeed Cache** and **Rebuild All LiteSpeed Cache**, and improved recache speed.

### Version 2.0.0[¶](#version-200 "Permanent link")

*Released: September 3, 2020*

- [Feature] Added the **Separate Cache for Safari browser** feature and option.
- [Improvement] Logged device-browser `user_agent` information in the first line of page output.
- [Tuning] Changed the default settings for the Journal theme.
- [Bug fix] Prevented redirects from stopping automatic purging.
- [Bug fix] Resolved an ESI cart-display issue in the Journal theme.

## Version 1[¶](#version-1 "Permanent link")

### Version 1.3.1[¶](#version-131 "Permanent link")

*Released: May 13, 2020*

- [Improvement] Added support for additional devices to `mobile_detect.php`.
- [Improvement] Detected more mobile `HTTP_USER_AGENT` values in `.htaccess`.
- [Improvement] Separated tablet cache copies from mobile cache copies according to the Journal theme.

### Version 1.3.0[¶](#version-130 "Permanent link")

*Released: July 31, 2019*

- [Feature] Added the **Ajax Load Shopcart** feature to avoid cart-display issues with some third-party themes.
- [Feature] Added the **Separate View for Mobile Device** feature and option.
- [Bug fix] Corrected login-area caching and improved overall performance.

### Version 1.2.1[¶](#version-121 "Permanent link")

*Released: March 5, 2019*

- [Feature] Added the **Separate View for Mobile Device** feature and option.

### Version 1.2.0[¶](#version-120 "Permanent link")

*Released: February 22, 2019*

- [Feature] Added the Guest Mode feature to improve load speed for visitors without sessions.
- [Feature] Added cache warm-up options for `all currencies`, `all languages`, and `all language and currency combinations`.
- [Feature] Added cache warm-up CLI command support.
- [Feature] Added `purgeAll` CLI command support.
- [Improvement] Ensured that the LSCache plugin admin GUI is refreshed after installation or upgrade.

### Version 1.1.0[¶](#version-110 "Permanent link")

*Released: November 16, 2018*

- [Feature] Added the **Ajax Load Wishlist** option, enabled by default.
- [Feature] Added the **Ajax Load Compare** option, disabled by default.
- [Improvement] Added compatibility with more third-party themes, including the Journal theme.
- [Improvement] Increased the speed of changing languages and currencies.
- [Bug fix] Fixed an issue where the **Purge All LiteSpeed Cache** header button Do not work.

### Version 1.0.2[¶](#version-102 "Permanent link")

*Released: November 2, 2018*

- [Improvement] Stopped **Rebuild All LiteSpeed Cache** when the crawler feature was disabled at the server level.
- [Improvement] Added the **debug current session** mode to logging options in the **Admin Panel**.
- [Bug fix] Fixed an issue that could cause errors in PHP 5.5 or earlier.
- [Bug fix] Fixed an issue that could cause JavaScript warnings.

### Version 1.0.1[¶](#version-101 "Permanent link")

*Released: October 30, 2018*

- [Feature] Added the ability to enable logging only for the current user session for debugging purposes.
- [Improvement] Fixed an improper-display issue caused by the web server buffer when clicking the **Rebuild All LiteSpeed Cache** button.
- [Improvement] Updated the plugin to avoid cross-site scripting errors and warning messages.
- [Bug fix] Fixed **Admin Panel** webpages displaying the wrong title for some sites.
- [Bug fix] Fixed an ESI module-load exception with OpenCart v2.3.
- [Bug fix] Fixed a bug that caused display errors and continuous refreshes for the shopping cart in some themes.

### Version 1.0[¶](#version-10 "Permanent link")

*Released: October 1, 2018*

- [Feature] Added the **Purge All LiteSpeed Cache** button to the admin header.
- [Bug fix] Fixed an issue that prevented the information page from being cached.

### Version 1.0 Beta[¶](#version-10-beta "Permanent link")

*Released: September 21, 2018*

- [Feature] Automatically purged related pages after modifying OpenCart product, category, information, or manufacturer data.
- [Feature] Automatically purged the ESI cart module after adding a product to the cart or editing the cart.
- [Feature] Added the **Rebuild All LiteSpeed Cache** feature, which crawls all sitemap URLs to warm the page cache.
- [Feature] Added **ESI Modules Management**, which allows users to add, edit, and remove ESI modules.
- [Feature] Added **Page Management**, which allows users to change page-cache settings or add new pages to LiteSpeed Cache.
- [Feature] Automatically purged ESI modules after modifying related OpenCart data.
