# Changelog | LiteSpeed Cache for Joomla | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscjoomla/changelog/

---

# LSCache for Joomla Changelog[¶](#lscache-for-joomla-changelog "Permanent link")

Note

We do our best to update this changelog in a timely manner. However, if a version is missing, you can always find the release announcement in [our LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users).

## Version 1.5.2[¶](#version-152 "Permanent link")

*Released: November 17, 2025*

- [Feature] Added Joomla v6 support.
- [Feature] Added native Joomla v5 support.
- [Feature] Added the **Serve Stale** option and feature.
- [Improvement] Fixed a VirtueMart event-argument mismatch for the latest VirtueMart release.
- [Improvement] Retrieved `statusCode` from the app response to avoid an empty value.
- [Bug fix] Fixed a typo. (Thanks @M-Falken.)
- [Bug fix] Fixed a problem that could prevent an article from being automatically purged after editing.
- [Bug fix] Fixed a bug that prevented LiteSpeed Cache from being purged after clearing **Joomla System Cache**.
- [Bug fix] Fixed a bug that prevented the home page from being purged after updating featured articles.
- [Bug fix] Fixed a cache-tag issue in shared-hosting environments.

## Version 1.5.1[¶](#version-151 "Permanent link")

*Released: July 30, 2021*

- [Feature] Added Joomla v4 RC4 support.
- [Feature] Added the **Purge after Post Back** feature and option.
- [Improvement] Added the **Separate View for Different Languages** option to ESI modules.
- [Improvement] Added the **Generate LSCache Header before Render** option to avoid conflicts with some third-party plugins.
- [Improvement] Notified users to check and uncomment `.htaccess` directives after changing the **Separate View for Mobile Device** option value.
- [Bug fix] Addressed a VirtueMart SQL error.
- [Bug fix] Addressed an Advanced ESI Module bug.

## Version 1.5[¶](#version-15 "Permanent link")

*Released: April 30, 2021*

- [Feature] Automatically disabled Gzip Page Compression in **Server Settings** after installing the LSCache plugin to avoid ESI module issues.
- [Feature] Added the **Purge Category Cache on Article Save** option.
- [Improvement] Added the `onLSCacheExpired` event trigger to allow third-party plugins, such as JCH Optimize, to purge LiteSpeed Cache.
- [Improvement] Purged LiteSpeed Cache only for selected component entries when clearing selected component system cache.
- [Improvement] Purged only the current menu item, rather than related menu items, when saving a menu.
- [Bug fix] Addressed the `warning: call to a member function purgeprivate() on null` error.

## Version 1.4[¶](#version-14 "Permanent link")

*Released: March 3, 2021*

- [Feature] Used AJAX calls to render ESI modules on OpenLiteSpeed Web Server.
- [Feature] Added the **Purge LiteSpeed Cache** button to the admin status bar.
- [Improvement] Added French-language support. (Thanks to GEORGES Gerald for the contribution.)
- [Improvement] Loaded the ESI module language file before rendering module content when the language file had not yet been loaded.
- [Improvement] Added reverse-proxy support for purge URLs, including Cloudflare and nginx.
- [Improvement] Added purge-URL domain checks, line breaks between messages, and improved language strings. (Thanks to @AndySDH for the contribution.)
- [Bug fix] Prevented `sh404sef` component 404 pages from being cached.

## Version 1.3.2[¶](#version-132 "Permanent link")

*Released: October 9, 2020*

- [Feature] Added the Advanced ESI Module feature and option. Advanced ESI module output is processed by Joomla plugins in the same way as normal Joomla modules.
- [Feature] Added the **ESI Always Enabled** option for customized ESI blocks and the **Logged-in User Override ESI** option.
- [Feature] Added optional `.htaccess` directives to support Joomla's **Remember Me** login option.
- [Improvement] Used a private ESI block to render the Joomla hidden-token form, supporting more third-party plugins and components.
- [Improvement] Disabled the 1.3.1 feature that automatically purged a cached page after a POST response. In some cases, a purge was not required and caused unnecessary slowdown.
- [Bug fix] Prevented purge URLs from failing on HTTPS URLs when a website has an invalid SSL certificate.

## Version 1.3.1[¶](#version-131 "Permanent link")

*Released: May 15, 2020*

- [Feature] Added compatibility for most frontend page, article, and comment edit forms.
- [Feature] Added an option to separate cache copies by user group.
- [Feature] Added automatic purging for user profiles. Editing user information now purges related user-profile pages.
- [Improvement] Prevented expired login sessions from being cached.
- [Improvement] Automatically disabled VirtueMart cache when it could cause incorrect page content to be cached.
- [Bug fix] Fixed an article-edit purge event that caused all category article pages to be purged.
- [Bug fix] Prevented frontend article edit forms from being cached.
- [Bug fix] Fixed an `Undefined offset` warning.
- [Bug fix] Fixed an issue where ESI modules Do not render for some sites.

## Version 1.3.0[¶](#version-130 "Permanent link")

*Released: November 8, 2018*

- [Feature] Added the **Purge Input URLs** feature.
- [Feature] Added the **Purge Select Modules** feature.
- [Feature] Added the **Rebuild All Cache** web interface in **Advanced Options**.
- [Improvement] Added compatibility with Joomla v3.9.
- [Improvement] Stopped **Rebuild All Cache** when the crawler was disabled at the server level.

## Version 1.2.1[¶](#version-121 "Permanent link")

*Released: October 18, 2018*

- [Feature] Added the **Admin IP** option, allowing an IP list to be set for accessing the LSCache web interface.
- [Feature] Added the `OnLSCacheExpired` event. Triggering this event purges all LiteSpeed Cache.
- [Feature] Added support for the **Komento Comments** component, including automatic purging.
- [Improvement] Improved **Recache All Cache** compatibility by accounting for exceptions and version differences.
- [Improvement] Reset opcache after the LiteSpeed Cache plugin was installed or updated.
- [Improvement] Improved the admin control panel appearance for earlier Joomla versions.
- [Improvement] Improved ESI module multilingual support.
- [Improvement] Resolved invalid-token issues caused by third-party components and modules.
- [Improvement] Automatically purged related article pages when clicking the featured or unfeatured button in the **Joomla Article** panel.
- [Improvement] Automatically purged all LiteSpeed Cache after clearing all Joomla object cache in the admin panel.
- [Improvement] Automatically purged all LiteSpeed Cache after clicking the JCH Optimize **clean cache** button.
- [Improvement] Added a package-build script to generate the current installation package from source code in GitHub.
- [Bug fix] Fixed a bug that could prevent LiteSpeed Cache from being turned off in the admin panel.
- [Bug fix] Fixed a bug that could cause an error when deleting a user or opening user email.
- [Bug fix] Fixed a bug that could prevent a blog page from being automatically purged.

## Version 1.2.0[¶](#version-120 "Permanent link")

*Released: May 31, 2018*

- [Major Feature] Added the **Auto Recache** feature, which automatically recaches related webpages after their cache is purged.
- [Major Feature] Automatically purged related webpages after modifying Joomla templates.
- [Feature] Automatically distinguished login modules and rendered them as private ESI modules to avoid token-validation issues.
- [Improvement] Automatically added initial directives to the `.htaccess` file after first-time installation.
- [Improvement] Rendered ESI-cached modules from the home page instead of the current page when the modules were displayed on the home page to avoid potential problems.
- [Improvement] Improved the recache function to support SEF (search engine friendly) URLs.
- [Bug fix] Fixed a bug related to **Purge All LiteSpeed Cache** when the plugin was disabled.

## Version 1.1.1[¶](#version-111 "Permanent link")

*Released: March 30, 2018*

- [Major Feature] Added the **Rebuild All LiteSpeed Cache** button, which crawls all webpages to generate LiteSpeed Cache.
- [Major Feature] Added support for the VirtueMart component. Frontend and backend modifications automatically purge related cache, such as shopping-cart cache.
- [Feature] Added support for the SP Builder component. Frontend and backend modifications automatically purge related cache.
- [Bug fix] Fixed a bug related to Jabuilder component support.

## Version 1.1.0[¶](#version-110 "Permanent link")

*Released: March 23, 2018*

- [Feature] Added support for the JA\_BUILDER component. Frontend and backend modifications automatically purge related cache.
- [Feature] Added support for the K2 component. Backend modifications automatically purge related cache.
- [Improvement] Added a framework that allows third-party component and module compatibility code to be wrapped in individual PHP files and loaded dynamically.

## Version 1.0.1[¶](#version-101 "Permanent link")

*Released: March 16, 2018*

- [Feature] Added upgrade SQL, allowing the plugin to be upgraded without uninstalling the earlier version.
- [Feature] Added support for article-embedded modules. A module change automatically purges the embedded article page cache.
- [Improvement] Improved compatibility with OpenLiteSpeed Web Server.
- [Improvement] Improved compatibility with Joomla versions earlier than 3.x.

## Version 1.0[¶](#version-10 "Permanent link")

*Released: March 8, 2018*

- [Major Feature] Allowed ESI modules to be cached publicly or privately. The ESI feature no longer relies on `.htaccess` settings.
- [Major Feature] Added logged-in user cache options.
- [Feature] Added the **Exclude Component** option to **Exclude Rule**.
- [Feature] Added a web interface that allows third-party plugins to use **Purge All LiteSpeed Cache**.
- [Improvement] Excluded webpages with incorrect HTTP status codes, such as `404` and `500`, from cache.
- [Improvement] Added regular-expression support for URL Exclude rules.
- [Bug fix] Fixed a bug related to frontend login.
- [Bug fix] Fixed a bug related to automatically purging all LiteSpeed Cache after upgrading the cache plugin.

## Version 1.0 Beta[¶](#version-10-beta "Permanent link")

*Released: February 8, 2018*

- [Feature] Automatically purged related webpages after modifying a Joomla menu item.
- [Feature] Automatically purged related webpages after modifying Joomla modules.
- [Feature] Automatically purged related webpages after modifying Joomla articles.
- [Feature] Added **ESI Modules Management**.
- [Feature] Added **Exclude Rule** settings, including **Exclude Menuitems** and **Exclude URLs**.
