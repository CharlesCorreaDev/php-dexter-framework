# Changelog | LiteSpeed Cache for PrestaShop | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscps/changelog/

---

# LSCache for PrestaShop Changelog[¶](#lscache-for-prestashop-changelog "Permanent link")

Note

We do our best to update this changelog in a timely manner. However, if a version is missing, you can always find the release announcement in [our LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users).

Info

This changelog covers the LSCPS module. For the crawler script, see the [Crawler Script changelog](lscache__lscps__changelog-crawler.md).

## Version 1.6.1[¶](#version-161 "Permanent link")

*Released: October 1, 2026*

- [Feature] Add purge support for PrestaBlog pages (all blog pages, by article, or by category).
- [Improvement] Allow an additional `<IfModule LiteSpeed>` section for customized directives.
- [Improvement] Restore the `vary` cookie based on country code to support the EU VAT rates of different countries.
- [Improvement] Add support for Amazzing Filter SEO Pages.
- [Improvement] Prevent a PrestaShop database connection error.
- [Bug fix] Fix a bug that causes the ESI block cURL request to replace the Smarty `current_url` value.
- [Bug fix] Prevent errors when product information is empty.
- [Bug fix] Prevent warnings caused by a missing `id_product` key in product properties.
- [Bug fix] Fix a warning.

Thanks to @bc-devle and Yevhenii Soboliev for code contributions.

## Version 1.6.0[¶](#version-160 "Permanent link")

*Released: March 12, 2026*

- [Improvement] Added management of the `hookDisplayProductAdditionalInfo` hook.
- [Improvement] Set the default **Separate Cache Copy per Customer Group** option to **Two View** to avoid problems.
- [Improvement] Changed the cache-log location shown on webpages to avoid problems.
- [Improvement] Added the `actionLiteSpeedCacheInitThirdParty` hook.
- [Improvement] Used JSON encoding for module parameters to avoid separator conflicts.
- [Improvement] Permitted caching of the PrestaBlog module page.
- [Bug fix] Prevented ESI block content from being affected by other modules through hooked functions.
- [Bug fix] Fixed the hook-override return type to preserve the original object.
- [Bug fix] Allowed numbers at the end of hook names.
- [Bug fix] Used the correct `SpecificPrice` hooks instead of non-existent core variants.
- [Bug fix] Fixed an issue where the `ps_facetedsearch` module Do not work.
- [Bug fix] Fixed an issue where the product page displayed an incorrect state after refresh.
- [Bug fix] Fixed the `Array to string conversion` warning.
- [Bug fix] Resolved the PHP deprecation warning for the `preg_split` function in PHP 8.1.

## Version 1.5.3[¶](#version-153 "Permanent link")

*Released: October 29, 2025*

- [Feature] Added the `litespeedcache:warmup` warm-up CLI command.
- [Improvement] Added PrestaShop 9 support.
- [Improvement] Avoided an issue where a third-party hook function returned an incorrect value because of an error in the next hooked function.
- [Improvement] Improved `.htaccess` mobile-detection and guest-mode rules to fix cache misses after crawling.
- [Improvement] Clicking **Clear Cache** from the PrestaShop **Admin Panel** now executes a **Purge All Cache** action.
- [Improvement] Added the **Flush All Pages When Cache Cleared** option.
- [Improvement] Added a User-Agent comment to cached pages.
- [Bug fix] Fixed a configuration-page permission issue.
- [Bug fix] Fixed an issue related to the Widget ESI Block parameters feature.
- [Bug fix] Fixed a bug where enabling debug mode could cause warnings.
- [Bug fix] Fixed a bug that could cause the cache to always miss.

## Version 1.5.2[¶](#version-152 "Permanent link")

*Released: April 10, 2025*

- [Improvement] Added parameter support for ESI block widgets.
- [Improvement] Do not purge all LiteSpeed Cache when PrestaShop cleared Smarty or Symfony cache to avoid persistent cache-miss issues.
- [Bug fix] Fixed JavaScript issues related to logged-in customers.

## Version 1.5.1[¶](#version-151 "Permanent link")

*Released: December 6, 2024*

- [Feature] Added the **Hooked Method Parameters** ESI block option and feature.
- [Feature] Added the **Disable this ESI block** ESI block option.
- [Feature] Added the **Only cache logged-out view** feature.
- [Feature] Added regular-expression support for the URL exclusion list.
- [Improvement] Added the **Enable LiteSpeed ESI** option and skipped ESI blocks if ESI was not enabled to avoid problems.
- [Improvement] Allowed an ESI block TTL of `0` to be treated as a no-cache ESI block.
- [Bug fix] Fixed an issue where the Ajax login module continued loading.
- [Bug fix] Fixed bugs that prevented customized ESI blocks from being saved.
- [Bug fix] Fixed errors when creating a product through the PrestaShop webservice.
- [Bug fix] Fixed a bug that could cause a `500` error.
- [Bug fix] Fixed a Panda theme error that prevented the shopping cart from updating.
- [Bug fix] Fixed deprecation warnings.

## Version 1.4.1[¶](#version-141 "Permanent link")

*Released: September 5, 2023*

- [Improvement] Removed customer and cart data from the JavaScript `prestashop` variable for cached pages.
- [Improvement] Added the **Do not flush** option to product-flush settings.
- [Improvement] Automatically purged the product page when a specific price was deleted or updated, or a product attribute was deleted from the admin backend.
- [Bug fix] Updated the `AdminModule` link in the redirect URL.
- [Bug fix] Added missing input IDs to form input fields for PrestaShop v8 compatibility.

## Version 1.4.0[¶](#version-140 "Permanent link")

*Released: October 29, 2020*

- [Major Improvement] Allowed a page to be cacheable when there was a context-vary change.
- [Improvement] Refactored third-party integration to allow better control and more flexibility.
- [Improvement] Fine-tuned page-purge behavior and reduced unnecessary **Purge All** actions.
- [Feature] Added a new configuration for **Vary Bypass** variables.
- [Feature] Added a new configuration for **Enable Debug Headers** for easier troubleshooting.
- [Feature] Added integration support for Panda and Transform themes from sunnytoo.com.
- [Feature] Added integration support for the Cart dropdown module (`pscartdropdown`).
- [Feature] Added a new configuration for **Flush Home Page**.
- [Bug fix] Added return parameters in filter hooks to allow other modules to continue the filter process.

## Version 1.3.0[¶](#version-130 "Permanent link")

*Released: July 28, 2020*

- [Feature] Added built-in support for caching the product-comments block.
  - Allow a different TTL to be set for product comments because comments are not automatically purged when updated.
  - Allow purging of all comments blocks or comments for a particular product ID from the **LSCache management** page.
- [Feature] Added a dedicated LSCache Vary cookie for AMP.
- [Feature] Added built-in support for the `promokit`, `pspagebuilder`, and `pk_amp` modules.
  - Update `pspagebuilder` to handle headers containing sign-in and cart blocks.
  - Add AMP-view support to `pk_amp` by using the new built-in AMP vary cookie.
- [Improvement] Improved third-party module integration:
  - Add a predispatch hook point.
  - Allow extra public cacheable controllers to be added.
  - Add a hook point for adding cache tags.
  - Based module integration on `Module::isEnabled` instead of `Module::isInstalled`.
- [Improvement] Automatically purged LSCache when Smarty Cache was purged from the **Performance** page in the **Admin backend** for PS 1.6 and PS 1.7.
- [Improvement] Improved compatibility with PS 1.6 for the hook-registration method.
- [Improvement] Displayed the current module version on the **LSCache configuration** screen in the **Admin dashboard**.
- [Improvement] Allowed purging by shop ID from the **LSCache management** screen in the **Admin dashboard**.

## Version 1.2.7[¶](#version-127 "Permanent link")

*Released: October 2, 2019*

- [Feature] Added a hook to clear page cache when Smarty Cache is cleared.
- [Improvement] Improved compatibility with PS 1.7.6.
- [Improvement] For the Warehouse theme, removed the ESI wrapper around `widget` from template files because the widget automatically triggers the event. For more information, see [our wiki](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:cache:lscps:customization_1_7).
- [Improvement] Cleaned up code according to the updated coding standard. (Thanks to @MathiasReker.)

## Version 1.2.6[¶](#version-126 "Permanent link")

*Released: March 18, 2019*

- [Feature] Added webservice hooks to automatically purge related products when updates or stock-status changes occur.
- [Feature] Added support for `blockwishlist` in PS 1.6.
- [Bug fix] Fixed an issue where uploading a new product image from the back office could cause an exception.
- [Bug fix] Fixed the debug-log file directory for PS 1.7.4 and PS 1.7.5.

## Version 1.2.5[¶](#version-125 "Permanent link")

*Released: October 8, 2018*

- [Improvement] Allowed PS 1.6-style non-widget modules for ESI customization. Users can now add customizations for `uecookie`.
- [Bug fix] Fixed compatibility with third-party modules for checkout-triggered purge actions.

## Version 1.2.4[¶](#version-124 "Permanent link")

*Released: July 31, 2018*

- [Major Feature] Added the LSCPS crawler, which requires setup through a separate cron job.
- [Improvement] Improved mobile browsing under guest mode.
- [Improvement] Automatically adjusted the TTL for pages containing products with specific prices based on special-price effective dates.

## Version 1.2.3[¶](#version-123 "Permanent link")

*Released: June 29, 2018*

- [Major Feature] Added the ability to automatically flush products and related categories after a new order is placed.
- [Improvement] Improved automatic flushing and added more built-in integrations.
- [Improvement] Improved ESI-injection implementation for JavaScript variables.
- [Improvement] Added default support for third-party modules: `iqitcookielaw` and `iqitpopup` for the Warehouse theme, and `gdprpro` from PrestaChamps.
- [Improvement] Added Dutch and German language packs.

## Version 1.2.2[¶](#version-122 "Permanent link")

*Released: February 11, 2018*

- [Improvement] Improved compatibility with PS 1.7.2.
- [Bug fix] Fixed a missing purge header when saving a product in PS 1.7.
- [Bug fix] Fixed an ESI-injection bug introduced in v1.2.1.

## Version 1.2.1[¶](#version-121 "Permanent link")

*Released: February 3, 2018*

- [Bug fix] Fixed ESI injection in JavaScript.
- [Bug fix] Fixed compatibility with Iqit Warehouse theme v4.1.5 through an ESI-injection fix.

## Version 1.2.0[¶](#version-120 "Permanent link")

*Released: October 31, 2017*

- [Feature] Improved first-page load time for new visitors. Requires LiteSpeed Web Server Enterprise 5.2.2 BUILD1 or later.
- [Improvement] Improved compatibility with PS 1.6.
- [Improvement] Automatically updated `.htaccess` when settings changed. Manual updates are no longer required.

## Version 1.1.1[¶](#version-111 "Permanent link")

*Released: October 6, 2017*

- [Major Improvement] Added compatibility with the PS 1.6.0 branch.
- [Bug fix] Fixed a compatibility issue with the PS 1.6.0 branch.

## Version 1.1.0[¶](#version-110 "Permanent link")

*Released: October 4, 2017*

- [Major Improvement] Added support for PS 1.6 and PS 1.7.
- [Improvement] Added an integration framework for PS 1.6 and PS 1.7. More third-party integrations can be easily added by following this structure.

## Version 1.0.0[¶](#version-100 "Permanent link")

*Released: August 14, 2017*

- Initial release.
