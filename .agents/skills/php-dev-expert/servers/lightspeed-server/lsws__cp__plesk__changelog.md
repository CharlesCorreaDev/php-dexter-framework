# Changelog | Plesk | Control Panels | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/plesk/changelog/

---

# LiteSpeed Plesk Extension Changelog[¶](#litespeed-plesk-extension-changelog "Permanent link")

Note

We do our best to update this changelog in a timely manner. However, if a version is missing, you can always find the release announcement in [our LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users).

## Version 2.7.0[¶](#version-270 "Permanent link")

*Released: September 29, 2026*

- [Feature] With LiteSpeed Containers active, stop a subscription’s running PHP processes when the subscription is suspended, disabled, or expires, or when its customer or reseller is suspended. This change takes effect the next time an administrator opens the plugin.
- [Improvement] Harden **Restart Detached PHP**, **Switch to LiteSpeed**, and the LiteSpeed Containers PHP restart against local privilege escalation.
- [Bug fix] Fix **Switch to LiteSpeed** on systemd servers, where Apache’s `init.d` script was moved aside and the following message was logged: `cp: cannot stat '/etc/init.d/lsws'`.
- [Bug fix] Fix LiteSpeed Containers restarting PHP for every user whenever Plesk installs or updates a component, renews a certificate, or changes a subscription. Gracefully restart PHP only for affected users.

## Version 2.6.0[¶](#version-260 "Permanent link")

*Released: September 16, 2026*

- [Feature] Add an **Access Control** toggle to the main screen, allowing the built-in Plesk administrator to grant **Additional Administrator Accounts** access to the plugin.
- [Improvement] Remove the limit on Redis cache size.
- [Improvement] Require CSRF tokens for all remaining state-changing actions.
- [Improvement] Harden root-side file operations against local privilege escalation.
- [Improvement] Harden scripts and escalated commands against potential command injection and made input validation consistent across system locales.
- [Improvement] Harden plugin pages against potential XSS by escaping displayed messages, titles, and form errors by default.
- [Improvement] Harden the parsing of escalated command output.
- [Improvement] Correct which administrator accounts were subject to the access restriction introduced in version 2.5.0.
- [Improvement] Display a friendly message page instead of an `Exception Caught` error when an account that could not use the plugin opened it.
- [Improvement] Make the panel and Redis scripts read the server line from `redis_svc.sh` consistently.
- [Improvement] Sanitized values written to the plugin log file.
- [Improvement] Improve handling of the WebAdmin password during installation. Installation now stops with a clear message instead of leaving the WebAdmin console without a usable login.
- [Improvement] Improve compatibility with Shared Code Library updates during a WordPress cache scan.
- [Improvement] Reduced page-load size across the plugin interface.
- [Bug fix] Prevent Redis-validation slowdowns when Redis was unused.
- [Bug fix] Fix blank cells in LiteSpeed Containers statistics when a Prometheus time range was selected.
- [Bug fix] Fix failures when setting, changing, or clearing the Redis configuration file and added a clear reason when a path was rejected.
- [Bug fix] Fix the Redis service file being upgraded incorrectly in some cases.
- [Bug fix] Fix the Redis size list sometimes displaying no values after Redis was enabled for a user.
- [Bug fix] Fix the plugin version on the main screen incorrectly reporting 2.4.4 on a version 2.5.0 installation.
- [Bug fix] Fix browsers continuing to use cached plugin JavaScript and CSS after an upgrade.
- [Bug fix] Fix search-box and table styling not being applied to plugin data tables.
- [Bug fix] Fix the LiteSpeed Web Server installer’s PHP setup step not running and looking for a Plesk PHP version that Plesk no longer offered.

## Version 2.5.0[¶](#version-250 "Permanent link")

*Released: May 28, 2026*

- [Feature] As a security feature, allowed only the built-in Plesk administrator to use the plugin. Delegated administrators were denied access.
- [Feature] Make web-server switching between Apache and LiteSpeed asynchronous so the page no longer hangs while the web server restarts.
- [Feature] Make switching to Apache detect whether Apache was installed and display installation instructions instead of a misleading prompt.
- [Feature] Add additional Shared Code Library integrity checks.
- [Improvement] Require CSRF tokens for all state-changing actions and accepted them only from the POST body, keeping tokens out of URLs, browser history, and access logs.
- [Improvement] Harden the plugin against root-side privilege escalation.
- [Improvement] Relocate temporary log files to `/var/lib/litespeed-plesk` and improved read/write logic.
- [Improvement] Shift some URLs to HTTPS.
- [Improvement] Improve LSWS home-path validation.
- [Improvement] Change Prometheus statistics endpoint requests to use PHP cURL.
- [Improvement] Tighten input validation across LiteSpeed Containers.
- [Bug fix] Harden multiple pages against potential XSS vulnerabilities.
- [Bug fix] Harden scripts against potential command injection.
- [Bug fix] Properly detected non-CloudLinux systems in Redis.
- [Bug fix] Fix several issues in `validate_redis.sh`.
- [Bug fix] Fix active users being unintentionally disabled in Redis.
- [Bug fix] Fix Dash Notifier mass-action submissions and improved statistics messages in LiteSpeed Containers.
- [Bug fix] Fix a `500` error that sometimes occurred when clicking the Back button on the LSCWP cache-scan progress page.

## Version 2.4.2[¶](#version-242 "Permanent link")

*Released: March 25, 2026*

- [Bug fix] Use the `cagefs.mp` file to detect CloudLinux in Redis, fixing the detection added in v2.4.1.

## Version 2.4.1[¶](#version-241 "Permanent link")

*Released: March 12, 2026*

- [Bug fix] Correctly detected CloudLinux v10 in Redis.

## Version 2.4.0[¶](#version-240 "Permanent link")

*Released: February 10, 2026*

- [Feature] Add a third-party extension EULA-confirmation requirement and a **View EULA** page.
- [Improvement] Add `privacy_policy_url` to the plugin meta XML file.
- [Improvement] Make miscellaneous code improvements and cleanup.
- [Bug fix] Install a Redis prerequisite for AlmaLinux 10.

## Version 2.3.4[¶](#version-234 "Permanent link")

*Released: November 26, 2025*

- [Bug fix] Fix the incorrect Plesk LiteSpeed directory used for installation.

## Version 2.3.3[¶](#version-233 "Permanent link")

*Released: November 10, 2025*

- [Bug fix] Properly upgraded the `redis_svc.sh` file and repaired it if it was broken in a prior release.

## Version 2.3.2[¶](#version-232 "Permanent link")

*Released: October 23, 2025*

- [Bug fix] Properly installed Redis if it was not already installed for functions in `redis_user_action.sh`.
- [Bug fix] Handle duplicate `/etc/passwd` UID entries in `redis_user_action.sh` when creating a user’s Redis files.
- [Bug fix] Properly handled deleted or merged Redis users in the hook function.
- [Bug fix] Handle changes to `redis-svc.sh` when processing the Redis configuration file.

## Version 2.3.1[¶](#version-231 "Permanent link")

*Released: October 10, 2025*

- [Bug fix] Correct the Plesk directory path in `redis_user_action.sh`.

## Version 2.3[¶](#version-23 "Permanent link")

*Released: September 4, 2025*

- [Feature] Add package support to Redis.
- [Feature] Add support for enabling or disabling unsized users in Redis.
- [Feature] Add the ability to switch between Valkey and Redis.
- [Improvement] Set root-only permissions on the `redis.size` file.
- [Improvement] Create `/usr/local/lsws/debug` to enable debugging to `/usr/local/lsws/logs/webcachemgr.log`.
- [Bug fix] Create Redis temporary-directory files and directories as the user.
- [Bug fix] Prevent FTP-only users from appearing in **Redis Users**.
- [Bug fix] Correctly handled the renaming of a user account in a hook.
- [Bug fix] Properly uninstalled LiteSpeed hooks and LiteSpeed Redis services when the extension was removed.

## Version 2.2.0[¶](#version-220 "Permanent link")

*Released: July 17, 2025*

- [Feature] Add a **Flag All** button to the **Cache Management** page.
- [Bug fix] Reset all mounts after a Plesk component update.
- [Bug fix] Address a minor security vulnerability found by a security researcher.

## Version 2.1.5[¶](#version-215 "Permanent link")

*Released: June 20, 2025*

- [Bug fix] Fix a bug in package management where an exception occurred for new users.

## Version 2.1.4[¶](#version-214 "Permanent link")

*Released: April 15, 2025*

- [Improvement] Improve PHP 8.4 compatibility.

## Version 2.1.3[¶](#version-213 "Permanent link")

*Released: January 14, 2025*

- [Improvement] Add an extension shortcut to the admin navigation menu.
- [Improvement] Make miscellaneous code improvements.
- [Bug fix] Fix a minor bug in the Redis-hook set logic.

## Version 2.1.2[¶](#version-212 "Permanent link")

*Released: December 20, 2024*

- [Bug fix] Properly escalated the list of running Redis services so it displayed correctly for CloudLinux.
- [Bug fix] Saved table settings for Redis.

## Version 2.1.1[¶](#version-211 "Permanent link")

*Released: December 17, 2024*

- [Feature] Add **Unmount All** to the **LiteSpeed Containers User Manager**.
- [Bug fix] Fix a display bug in the **LiteSpeed Containers Stats Manager** and **User Manager** that caused columns to display incorrectly.
- [Bug fix] Correct hooks for LiteSpeed Containers.
- [Bug fix] Prevent messages indicating loss of access to LiteSpeed Containers.
- [Bug fix] Preserved table state between exiting and reentering a table.

## Version 2.1.0[¶](#version-210 "Permanent link")

*Released: November 14, 2024*

- [Feature] Add Redis cache flushing.
- [Feature] Add a Redis configuration file.
- [Improvement] Open new external links in a new window or tab.
- [Improvement] Improve **nginx Reverse Proxy** detection and disable logic.
- [GUI] Make minor visual improvements to some buttons.
- [GUI] Display **Apache Port Offset** information on more pages.
- [GUI] Improve spacing in title hover text.
- [Misc] Improve HTML structure for some pages.
- [Misc] Correct some external plugin links.
- [Bug fix] Clean up Redis sizes and services with hooks when a user was deleted, or sizes when a service was deleted.
- [Bug fix] Fix various Redis and LiteSpeed Containers bugs.

## Version 2.0.0[¶](#version-200 "Permanent link")

*Released: September 17, 2024*

- [Feature] Add new LiteSpeed Containers features.
- [Feature] Add the **Cache Redis for Users** feature.

## Version 1.4.19[¶](#version-1419 "Permanent link")

*Released: November 15, 2023*

- [Improvement] Improve nginx reverse-proxy detection logic.
- [Bug fix] Fix the **Latest Build** alert appearing for non-stable server builds when the `follow_stable` flag file was set.

## Version 1.4.18[¶](#version-1418 "Permanent link")

*Released: October 25, 2023*

- [Bug fix] Fix the `Invalid Entrance` bug introduced in v1.4.17.

## Version 1.4.17[¶](#version-1417 "Permanent link")

*Released: September 26, 2023*

- [Improvement] Make miscellaneous code improvements.

## Version 1.4.16[¶](#version-1416 "Permanent link")

*Released: July 18, 2023*

- [Improvement] Improve the reliability of virtual-host cache-root detection.
- [Improvement] Make miscellaneous code improvements.

## Version 1.4.15[¶](#version-1415 "Permanent link")

*Released: June 20, 2023*

- [Improvement] Update the **Cache Manager** scan logic.
- [Improvement] Add support for custom Shared Code Library update-failure messages.
- [Misc] Add `aarch64` as a supported Linux architecture.
- [Misc] Fix several minor typos.

## Version 1.4.14[¶](#version-1414 "Permanent link")

*Released: April 17, 2023*

- [Improvement] Improve WordPress-scan logic.

## Version 1.4.13[¶](#version-1413 "Permanent link")

*Released: March 14, 2023*

- [Bug fix] Address compatibility issues introduced in v1.4.12, release 3.

## Version 1.4.12[¶](#version-1412 "Permanent link")

*Released: February 17, 2023*

- [Bug fix] Address `Undefined array key 'stop_msg'` exceptions.

## Version 1.4.11[¶](#version-1411 "Permanent link")

*Released: January 25, 2023*

- [Improvement] Make miscellaneous improvements to the existing version-comparison logic.
- [Bug fix] Fix an issue where LiteSpeed Web Server installation sometimes failed with an `undefined key` exception.

## Version 1.4.10[¶](#version-1410 "Permanent link")

*Released: December 1, 2022*

- [Improvement] Make minor improvements to the LSCWP Version Manager page.
- [Bug fix] Address issues with sending LSWS AdminPanel emails.

## Version 1.4.9[¶](#version-149 "Permanent link")

*Released: October 31, 2022*

- [Improvement] Add Rocky Linux as a supported operating system.

## Version 1.4.8[¶](#version-148 "Permanent link")

*Released: August 30, 2022*

- [Improvement] Improve PHP 8.x compatibility.
- [Improvement] Make miscellaneous code improvements.
