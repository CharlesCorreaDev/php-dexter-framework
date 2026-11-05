# Changelog | LiteMage Cache for Magento 2 | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/litemage/changelog/

---

# LiteMage Changelog[¶](#litemage-changelog "Permanent link")

Note

We do our best to update this changelog in a timely manner. However, if a version is missing, you can always find the release announcement in [our LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users).

Info

This changelog covers LiteMage 2 for Magento 2.x. For the LiteMage 1 (Magento 1.x) changelog, see the [archive](lscache__litemage__changelog-archive.md). For the crawler script, see the [Crawler Script changelog](lscache__litemage__changelog-crawler.md).

## Version 2.2.7[¶](#version-227 "Permanent link")

*Released: July 10, 2026*

- [Improvement] Changed the default **Purge Products after a Sale** behavior to **Always purge the product** for safer cache invalidation on fresh installs.
- [Improvement] Removed the hard dependency on `magento/module-inventory-sales-api/Magento_InventorySalesApi`; Magento Inventory stock services are now resolved only when needed.
- [Bug fix] Fixed checkout/order-placement crashes when Magento Inventory (MSI) modules or stock services are disabled or unavailable.
- [Bug fix] Clarified the admin configuration error when **Only purge the product when out of stock** is selected without `magento/module-inventory-sales`.
- [Bug fix] Fall back to always purging sold product tags if stock resolution fails during order placement.

## Version 2.2.6[¶](#version-226 "Permanent link")

*Released: May 26, 2026*

- [Security] Hardened ESI block and shell purge entry points with signed request tokens; shell purge tokens expire.
- [Security] Added request validation for ESI block names, encoded layout handles, shell purge timestamps, and nonces.
- [Security] Stopped trusting client-forwarded LiteMage and debug headers for runtime module enablement and debug IP matching.
- [Feature] Added support for cacheable HTTP 201 responses, including Cloudflare-protected CLI purge responses. (Thanks @martinstoehr.)
- [Feature] Added an automatic purge-all hook when themes are assigned to stores.
- [Improvement] Modernized frontend and shell controllers for current Magento action interfaces and raw result responses.
- [Improvement] Switched CLI purge requests to Magento's framework Curl client with signed URLs, explicit batch flushing, host-header support, basic-auth handling, and improved response logging.
- [Improvement] Returned explicit success codes from LiteMage CLI commands for Magento 2.4.6+ console compatibility. (Thanks @martinstoehr.)
- [Improvement] Split LiteMage tag headers by value length so large identity-tag sets are emitted across multiple headers instead of being truncated.
- [Improvement] Switched custom vary refresh to a GET JSON endpoint with `no-store` response headers.
- [Improvement] Marked generated ESI includes as `no-vary` and skipped custom-vary refresh checks for ESI requests.
- [Improvement] Improved admin LiteMage statistics parsing and output escaping.
- [Improvement] Preserved required customer-login and customer-group vary context from bypass configuration.
- [Bug fix] Corrected after-order product purge selection for parent and child product cases.
- [Bug fix] Flushed final partial CLI purge batches immediately instead of relying on object destruction. (Thanks @martinstoehr.)

## Version 2.2.5[¶](#version-225 "Permanent link")

*Released: May 14, 2025*

- [Improvement] Removed dependency on the jQuery library for custom vary.
- [Bug fix] Fixed an error where LiteMage Logger was not properly initialized.

## Version 2.2.4[¶](#version-224 "Permanent link")

*Released: March 20, 2024*

- [Feature] Added LiteMage console flush commands:
  - `cache:litemage:flush:cats` — Flushes LiteMage cache by a list of category IDs.
  - `cache:litemage:flush:prods` — Flushes LiteMage cache by a list of product IDs.
  - `cache:litemage:flush:tags` — Flushes LiteMage cache by a list of tags.
- [Feature] Added the **Disable CLI Purge** setting to temporarily disable CLI flush and speed up the external sync process. (Also available through the CLI as `cache:litemage:cli-flush status|enable|disable`.)
- [Improvement] Improved the efficiency of CLI flush by batching requests and filtering ignored cache and purge tags early.
- [Bug fix] Fixed incorrect category tags introduced in 2.2.3 when using the `cache:litemage:flush:cats` command.

## Version 2.2.3[¶](#version-223 "Permanent link")

*Released: February 13, 2024*

- [Feature] Added LiteMage console flush commands:
  - `cache:litemage:flush:cats` — Flushes LiteMage cache by a list of category IDs.
  - `cache:litemage:flush:prods` — Flushes LiteMage cache by a list of product IDs.
  - `cache:litemage:flush:tags` — Flushes LiteMage cache by a list of tags.
- [Feature] Added **Basic Authentication** configuration to allow CLI flush to work properly when the site is protected by BasicAuth.
- [Improvement] If CLI flush fails, hides HTML error content and lists only the error code and a simple error message with tips.

## Version 2.2.2[¶](#version-222 "Permanent link")

*Released: September 28, 2023*

- [Bug fix] Fixed an issue where LiteMage could not retrieve the salable quantity of out-of-stock simple products with customizable options after an order was placed. LiteMage now ignores this case.
- [Bug fix] Fixed missing tags for cacheable AJAX and GraphQL requests.
- [Bug fix] Fixed the missing LiteMage cached-object count.

## Version 2.2.1[¶](#version-221 "Permanent link")

*Released: July 27, 2023*

- [Bug fix] Fixed two undefined-variable warnings introduced in v2.2.
- [Bug fix] Fixed a problem where the newly added **Purge Products after a Sale** option in v2.2 broke Magento when the `Magento_Inventory` module was replaced by third-party inventory management. This option is now effective only when used with the built-in `Magento_Inventory` module.

## Version 2.2[¶](#version-22 "Permanent link")

*Released: July 19, 2023*

- [Feature] Added support for private ESI blocks.
- [Feature] Added a new **Purge Tuning** section in LiteMage configuration.
  - Allow fine-tuning to reduce purge tags when reindexing.
  - Add an option to purge products after a sale.
  - Add the **Ignored Purge Tags** setting.
- [Feature] Added the `litemage_add_cache_tags` event to allow a third-party API to add cache tags in addition to those from the identity blocks.
- [Improvement] When a page is not cacheable, explicitly sets the `X-LiteSpeed-Cache-Control: no-cache` header.
- [Improvement] When static assets such as CSS files are not found, the page is processed dynamically. LiteMage Cache ESI injection is bypassed in this case.
- [Improvement] Improved efficiency by reducing hook points.
- [Improvement] Improved debug logging messages.
- [Bug fix] Fixed a typo that caused a failure when sending a large purge header.
- [Bug fix] When purging from the CLI, splits the request into multiple segments if the URL contains more than 50 tags to keep URLs a reasonable length.

## Version 2.1.9[¶](#version-219 "Permanent link")

*Released: May 17, 2022*

- [Bug fix] Fixed the CLI purge error when the admin backend and frontend are on different domains in a multi-site setup.
- [Bug fix] Fixed some PHP 8 compatibility issues.

## Version 2.1.7[¶](#version-217 "Permanent link")

*Released: August 7, 2020*

- [Bug fix] Fixed an issue with a deprecated PHP 7.4 function that could cause a Magento 2.4 upgrade to fail.

## Version 2.1.6[¶](#version-216 "Permanent link")

*Released: June 18, 2020*

- [Feature] Added validation for ESI requests.
- [Feature] Added purge-tag filters and additional shortened translations for default tags.
- [Improvement] Improved load time for non-cacheable pages by reducing unnecessary log generation when debug is off.
- [Improvement] Improved third-party module compatibility by not caching private data from `Magento_Customer` or when `force_new_section_timestamp` is true.

## Version 2.1.5[¶](#version-215 "Permanent link")

*Released: November 5, 2019*

- [Improvement] Filtered and reduced cache tags for the footer section.
- [Bug fix] Fixed an issue where the store switcher would not switch the current page when multiple stores existed under one website.
- [Bug fix] Eliminated an error that occurred when the debug log was enabled and the current response was not an HTTP response.

## Version 2.1.4[¶](#version-214 "Permanent link")

*Released: October 28, 2019*

- [Bug fix] Fixed an issue in the **Admin** panel where enabling LiteMage when static assets required regeneration under the `pub/` directory caused automatic logout.
- [Bug fix] Fixed the issue caused by Magento 2's CSRF form-key validation, where the CLI command to flush cache Do not work.

## Version 2.1.3[¶](#version-213 "Permanent link")

*Released: July 26, 2019*

- [Improvement] Avoids a warning if the `CURLOPT_SSL_VERIFYSTATUS` option is not available in an older library during CLI purge.
- [Bug fix] Fixed a bug related to view-vary detection that caused the first visit to be non-cacheable.

## Version 2.1.2[¶](#version-212 "Permanent link")

*Released: July 7, 2019*

- [Bug fix] Fixed a PHP 7.3 compatibility issue where the `Serialization of Closure is not allowed` error occurred.

## Version 2.1.1[¶](#version-211 "Permanent link")

*Released: June 24, 2019*

- [Feature] Added support for CustomVary.
- [Feature] Added Guest Mode to allow the first visit to be served from cache, then refreshed to display the appropriate varied copy from cache.
- [Feature] Added logging for the backtrace of purge events to help debug unknown causes of purges.

## Version 2.1.0[¶](#version-210 "Permanent link")

*Released: February 11, 2019*

- [Feature] Added the ability to enable debug headers for easy troubleshooting from the browser.
- [Feature] Added a setting to bypass context-vary changes and avoid unnecessarily marking a page as non-cacheable.
- [Feature] Added an event observer for `controller_action_postdispatch_catalog_product_save` so stock updates are reflected.
- [Improvement] Moved the debug log to `var/log/litemage.log`. The log now prints useful information when a page is not cacheable.

## Version 2.0.10[¶](#version-2010 "Permanent link")

*Released: November 15, 2018*

- [Improvement] **Cache Management**: Removed unused columns in **LiteMage Cache Statistics** to avoid confusion.
- [Bug fix] CLI purge now uses `curl` directly to avoid the `[Zend_Http_Exception] Invalid header line detected` error from `ZendHttpClient` when parsing HTTP/2 headers.

## Version 2.0.9[¶](#version-209 "Permanent link")

*Released: November 2, 2018*

- [Improvement] Removed versions from the module dependency in `composer.json` for compatibility with the latest framework version.

## Version 2.0.8[¶](#version-208 "Permanent link")

*Released: December 15, 2017*

- [Bug fix] Added the `clean_cache_after_reindex` purge event for scheduled reindexing. Reindexing now properly triggers tag purges.

## Version 2.0.7[¶](#version-207 "Permanent link")

*Released: November 9, 2017*

- [Improvement] Shell purge handling now uses `\Magento\Framework\HTTP\ZendClient` directly instead of `ZendClientFactory`.
- [Bug fix] Fixed an exception displayed on the cache management screen by replacing `\Magento\Framework\HTTP\ZendClientFactory` with `\Magento\Framework\HTTP\ClientFactory`.
- [Bug fix] Fixed an exception logged on cache backend selection.

## Version 2.0.6[¶](#version-206 "Permanent link")

*Released: July 26, 2017*

- [Bug fix] Fixed an admin-session timeout issue that occurred while the LiteMage module was installed.
- [Bug fix] Fixed a bug where the wrong copy of a page could be cached when there was a change in cache vary, such as a currency change.

## Version 2.0.5[¶](#version-205 "Permanent link")

*Released: February 11, 2017*

- [Bug fix] Fixed an exception encountered when the `FlushCacheByTags` event was triggered from the command line. This event can now be handled in CLI mode.

## Version 2.0.4[¶](#version-204 "Permanent link")

*Released: January 22, 2017*

- [Bug fix] Fixed an exception caused by the `static.php` 404 process being intercepted in the global scope by moving `HTTPPurgePlugin` from the global scope to the `adminhtml` frontend.
- [Bug fix] Removed `server_ip` for `127.0.0.1` because this configuration breaks in shared-hosting setups. (This should be configurable in the future.)

## Version 2.0.3[¶](#version-203 "Permanent link")

*Released: January 9, 2017*

- [Improvement] Added **LiteMage Cache Statistics** and plan information to the Magento **Cache Management** screen.

## Version 2.0.2[¶](#version-202 "Permanent link")

*Released: January 3, 2017*

- [Improvement] Added support for the Magento command-line utility.

## Version 2.0.1[¶](#version-201 "Permanent link")

*Released: November 14, 2016*

- Initial release.

## Older versions[¶](#older-versions "Permanent link")

- [LiteMage 1 (Magento 1.x) archive](lscache__litemage__changelog-archive.md)
