# Changelog | cPanel | Control Panels | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/whm-litespeed-plugin/changelog/

---

# cPanel Plugin Changelog[¶](#cpanel-plugin-changelog "Permanent link")

Note

We do our best to update this changelog in a timely manner. However, if a version is missing, you can always find the release announcement in [our LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users).

## WHM Plugin v5.3.6.0[¶](#whm-plugin-v5360 "Permanent link")

*Released: September 21, 2026*

Bundled with [cPanel User-End Plugin v2.4.10.0](#cpanel-user-end-plugin-v24100).

- [Improvement] Add support for cPanel’s new Meridian theme, introduced in cPanel v138. The user-end plugin icon does not yet appear for Meridian accounts because of a cPanel limitation affecting all third-party plugins. The icon should appear if cPanel adds support.
- [Improvement] Report LiteSpeed installation warnings in separate messages so they are easier to notice.
- [Improvement] Significantly sped up Redis package processing.
- [Bug fix] Fix LiteSpeed installation setting an unusable WebAdmin password, which could lock the administrator out of the WebAdmin Console.
- [Bug fix] Fix EasyApache PHP `timezonedb` updates reporting verification failures for every PHP version on servers whose `php.ini` enabled output compression.
- [Bug fix] Fix Redis maintenance applying the wrong memory size or skipping an account for certain package and user names.
- [Bug fix] Fix Redis maintenance acting on an empty username on servers with no per-user Redis services.
- [Bug fix] Skipped Redis package synchronization when no package had Redis configured.
- [Bug fix] Fix Redis failing to enable through the cPanel user plugin on LiteSpeed Containers servers with a leftover `~/.cagefs` directory.
- [Bug fix] Prevent a hang or long delay in `validate_redis.sh` plugin processing when no JSON data was available.
- [Bug fix] Reject trailing newlines in custom cPanel plugin template names and WebAdmin login ID input checks.

## cPanel User-End Plugin v2.4.10.0[¶](#cpanel-user-end-plugin-v24100 "Permanent link")

*Released: September 21, 2026*

Bundled with [WHM Plugin v5.3.6.0](#whm-plugin-v5360).

- [Improvement] Add support for cPanel’s new Meridian theme, introduced in cPanel v138. The plugin icon does not yet appear for Meridian accounts because of a cPanel limitation affecting all third-party plugins. The icon should appear if cPanel adds support.
- [Bug fix] Fix a regression in cPanel LiteSpeed Namespaces detection.

## WHM Plugin v5.3.5.0[¶](#whm-plugin-v5350 "Permanent link")

*Released: August 4, 2026*

Bundled with [cPanel User-End Plugin v2.4.9.1](#cpanel-user-end-plugin-v2491).

- [Improvement] Report clearer EasyApache PHP `timezonedb` results, including a per-PHP-version outcome and an actionable error naming any missing build prerequisite.
- [Improvement] Validate the LiteSpeed home directory more strictly wherever it is used.
- [Bug fix] Fix several EasyApache PHP `timezonedb` update failures, including builds on servers using cPanel secure `tmp`, the CageFS update immediately following a successful build, and `lsphp` not being restarted on servers with a non-default LiteSpeed home directory.
- [Bug fix] Fix a custom LiteSpeed home directory being saved but then ignored, so the plugin, EasyApache hooks, and `timezonedb` updates could each use a different directory.
- [Bug fix] Fix the plugin deleting its saved LiteSpeed home directory setting when the file contained a comment or extra line, which made EasyApache hooks report LiteSpeed as not installed and stop running. The setting is now kept and the problem reported instead.
- [Bug fix] Fix web server status detection reporting Apache or LiteSpeed as running after it had stopped, or reporting both as running on a LiteSpeed-only server.
- [Bug fix] Fix switching web servers stopping unrelated processes, leaving part of the previous server running, holding ports needed by the server being started, and briefly interrupting PHP for sites.
- [Bug fix] Fix LiteSpeed installation failing partway through on servers whose `php.ini` omits "E" from `variables_order`.
- [Bug fix] Fix a LiteSpeed installation that fails to start being reported as a license error on the License Status and Transfer License screens.

## cPanel User-End Plugin v2.4.9.1[¶](#cpanel-user-end-plugin-v2491 "Permanent link")

*Released: August 4, 2026*

Bundled with [WHM Plugin v5.3.5.0](#whm-plugin-v5350).

- [Bug fix] Fix cache manager failing to load when the configured LiteSpeed home directory contained a semicolon, which is now rejected as invalid.

## WHM Plugin v5.3.4.3[¶](#whm-plugin-v5343 "Permanent link")

*Released: July 28, 2026*

Bundled with [cPanel User-End Plugin v2.4.9](#cpanel-user-end-plugin-v249).

- [Bug fix] Fix EasyApache PHP `timezonedb` updates failing to detect, build, and enable the extension in the correct `php.ini`.
- [Bug fix] Only enable and restart `lsphp` once a working `timezonedb.so` is verified, so a failed or stale update can no longer crash PHP workers (503s).

## WHM Plugin v5.3.4.2[¶](#whm-plugin-v5342 "Permanent link")

*Released: July 24, 2026*

Bundled with [cPanel User-End Plugin v2.4.9](#cpanel-user-end-plugin-v249).

- [Bug fix] Fix reversion of LiteSpeed Containers detection in Redis.
- [Bug fix] Reject hosts running both CloudLinux/CageFS and LiteSpeed Containers with an actionable message, instead of silently failing to enable Redis for users.
- [Bug fix] Warn when per-user Redis service and root writer resolve different cages instead of silently serving no cache.
- [Bug fix] Report `buildtimezone.sh` prerequisite and build failures in WHM, instead of silently returning false success.
- [Bug fix] Report details of Redis `FLUSHALL` failures.

## WHM Plugin v5.3.4.1[¶](#whm-plugin-v5341 "Permanent link")

*Released: June 29, 2026*

Bundled with [cPanel User-End Plugin v2.4.9](#cpanel-user-end-plugin-v249).

- [Bug fix] Fix a crash when toggling the Redis auto-enable suppression setting on the Redis Service Users screen.

## WHM Plugin v5.3.4.0[¶](#whm-plugin-v5340 "Permanent link")

*Released: June 25, 2026*

Bundled with [cPanel User-End Plugin v2.4.9](#cpanel-user-end-plugin-v249).

- [Security] Harden per-user `redis.size`/`redis.package` file handling against privilege-escalation vectors.
- [Security] Restrict the Redis Service Users screen and all Redis actions to servers with a supported and fully configured cage environment.
- [Improvement] Add per-user `redis.package` synchronization for package default sizes, including install-time backfill, automatic periodic reconciliation, and a new `syncpkgfiles` action.
- [Improvement] Add a toggle to suppress auto-enabling Redis for newly created users in a package.
- [Bug fix] Disabling Redis for a user no longer deletes that user's `redis.package` file, preserving package membership across Redis disablement and setup removal.
- [Bug fix] Fix a single failed account aborting an entire Redis package or default-size enable or disable batch; remaining accounts are now processed and the partial failure is reported.

## WHM Plugin v5.3.3.0[¶](#whm-plugin-v5330 "Permanent link")

*Released: June 18, 2026*

Bundled with [cPanel User-End Plugin v2.4.9](#cpanel-user-end-plugin-v249).

- [Security] Remove WHM per-session security token from all remaining GET query string render paths.
- [Security] Additional XSS hardening in LiteSpeed Containers Package Manager template, shared message template, and mass cache operation views.
- [Security] Add same-origin `Referer` policy to plugin page header.
- [Security] Harden suEXEC configuration save input validation.
- [Security] Harden LiteSpeed Containers statistics Prometheus URL handling.
- [Security] Harden server status file reading.
- [Security] Tighten permissions on per-user Redis runtime directories.
- [Security] Harden Redis transfer/restore account-data handling.
- [Security] Additional hardening of privileged command inputs, LiteSpeed home path validation, and recursive directory cleanup logic.
- [Security] Rework in-plugin CSRF guard to default-deny for all state-changing requests.
- [Security] Improve output encoding in Redis user/package management templates and JavaScript message rendering.
- [Security] Harden Redis helper script loading and execution.
- [Security] Additional integrity checks for privileged `lspkgctl` execution.
- [Improvement] Remove 1024 MB upper bound on Redis sizes.
- [Bug fix] Redis package setup no longer writes to the wrong cage directory on LiteSpeed Containers hosts.
- [Bug fix] Clarify Redis enable reporting to prevent successful service enable from reporting as an error when optional cache auto-configuration cannot complete.
- [Bug fix] Redis package action buttons no longer submit the form when cancelling the confirmation prompt.
- [Bug fix] LiteSpeed Containers Stats Manager cached Prometheus settings are now replayed only once and rejected cached values are cleared.
- [Bug fix] Tighten LiteSpeed Containers Stats Manager Prometheus host validation to reduce LiteSpeed Containers `curl` failures.
- [Bug fix] Correct LiteSpeed Containers Stats Manager refresh interval.
- [Bug fix] Correct navigation issues by migrating the main interface to AJAX navigation.
- [Bug fix] Address multiple causes of the WHM plugin spinner hanging indefinitely.
- [Bug fix] TimezoneDB extension build/update results page no longer fails to show its title and success status.

## cPanel User-End Plugin v2.4.9[¶](#cpanel-user-end-plugin-v249 "Permanent link")

*Released: June 18, 2026*

Bundled with [WHM Plugin v5.3.3.0](#whm-plugin-v5330).

- [Security] Further harden outbound HTTP request validation.
- [Security] Harden ACME challenge directory handling.
- [Security] Harden temporary directory handling in backup/restore operations.
- [Security] Improve cache-manager JavaScript message output encoding.
- [Bug fix] "Redis support is only available in caged environments" message no longer appears when inside a real cage with root-owned plugin files.
- [Bug fix] Enabling Redis no longer shows a benign service-manager message as errors.

## WHM Plugin v5.3.2.1[¶](#whm-plugin-v5321 "Permanent link")

*Released: June 1, 2026*

Bundled with [cPanel User-End Plugin v2.4.8](#cpanel-user-end-plugin-v248).

- [Bug fix] Fix CSRF issues on certain pages.

## WHM Plugin v5.3.2.0[¶](#whm-plugin-v5320 "Permanent link")

*Released: June 1, 2026*

Bundled with [cPanel User-End Plugin v2.4.8](#cpanel-user-end-plugin-v248).

- [Security] Additional symlink hardening.
- [Security] Add additional binary integrity checks.
- [Security] Convert state-changing plugin UI actions from GET to POST.
- [Security] Additional XSS hardening.
- [Security] Add in-plugin CSRF.
- [Security] Improve encoding on container manager and stats views.
- [Security] Improve WHM and LSWS installation logic.
- [Security] Improve `lsns_common.sh` validation.
- [Security] Reject leading-dash and empty identifiers in Redis user/package validation.
- [Security] Harden `lsns` script commands.
- [Security] Harden WHM entry logic.
- [Security] Harden WHM utility URL fetch logic.

## cPanel User-End Plugin v2.4.8[¶](#cpanel-user-end-plugin-v248 "Permanent link")

*Released: June 1, 2026*

Bundled with [WHM Plugin v5.3.2.0](#whm-plugin-v5320).

- [Security] Critical: Additional symlink hardening to address a reported exploit that allowed an authenticated cPanel user to escalate privileges to root.
- [Security] Harden user logger input handling.
- [Security] Harden SSRF guards.
- [Security] Encode WordPress install paths in LSCWP manage view.
- [Security] Improve shell argument escaping.

## WHM Plugin v5.3.1.0[¶](#whm-plugin-v5310 "Permanent link")

*Released: May 21, 2026*

Bundled with [cPanel User-End Plugin v2.4.7](#cpanel-user-end-plugin-v247).

- [Security] Validate QUIC.cloud IP feed integrity before writing `knownproxies` file.
- [Security] Fix reflected XSS in `input_text` and `input_password` form helpers.
- [Security] Harden adminbin caller-trust validation.
- [Security] Replace shell-string `EXEC_ISSUE_CMD` with structured argument passing.
- [Improvement] Default cPanel plugin auto-install to OFF on fresh installations.

## cPanel User-End Plugin v2.4.7[¶](#cpanel-user-end-plugin-v247 "Permanent link")

*Released: May 21, 2026*

Bundled with [WHM Plugin v5.3.1.0](#whm-plugin-v5310).

- [Security] Drop privileges before removing new-LSCWP flag file to eliminate symlink-race window.
- [Security] Use CSPRNG and constant-time comparison for ACME pre-validate token.
- [Security] Fix TOCTOU exposure of Let's Encrypt account key.
- [Security] Scope `fetch_vhost_ssl_components` API call to the authenticated user.
- [Security] Harden deserialization and EC cert key file permission checks.
- [Security] Pin translation-file `wget` to cPanel CA bundle for TLS verification.

## WHM Plugin v5.3.0.0[¶](#whm-plugin-v5300 "Permanent link")

*Released: May 20, 2026*

Bundled with [cPanel User-End Plugin v2.4.6](#cpanel-user-end-plugin-v246).

- [Security] Reintroduce Redis features disabled in cPanel plugin v2.4.5 with additional security-focused code hardening.
- [Bug fix] Fix `lsns`/Redis script issue when attempting to enable new LSCWP installations.

## cPanel User-End Plugin v2.4.6[¶](#cpanel-user-end-plugin-v246 "Permanent link")

*Released: May 20, 2026*

Bundled with [WHM Plugin v5.3.0.0](#whm-plugin-v5300).

- [Security] Reintroduce Redis enable or disable features with additional security hardening.
- [Misc] Code improvements.

## WHM Plugin v5.2.9[¶](#whm-plugin-v529 "Permanent link")

*Released: April 29, 2026*

Bundled with [cPanel User-End Plugin v2.4.4](#cpanel-user-end-plugin-v244).

- [Improvement] Do not display the **Cache Redis** option when `/usr/local/lsws/lsns/conf/disable_whm_redis` exists.
- [Improvement] Improve display of unhandled exceptions.
- [Misc] Improve plugin installation logic.
- [Misc] General code improvements.

## cPanel User-End Plugin v2.4.4[¶](#cpanel-user-end-plugin-v244 "Permanent link")

*Released: April 29, 2026*

Bundled with [WHM Plugin v5.2.9](#whm-plugin-v529).

- [Security] Improve overall shell command parameter escaping.
- [Improvement] Improve error/warning resiliency in older PHP versions.

## WHM Plugin v5.2.8.2[¶](#whm-plugin-v5282 "Permanent link")

*Released: March 25, 2026*

Bundled with [cPanel User-End Plugin v2.4.3.3](#cpanel-user-end-plugin-v2433).

- [Bug fix] Use `cagefs.mp` file when detecting CloudLinux in Redis (fixes detection added in v5.2.8.1).

## WHM Plugin v5.2.8.1[¶](#whm-plugin-v5281 "Permanent link")

*Released: March 12, 2026*

Bundled with [cPanel User-End Plugin v2.4.3.3](#cpanel-user-end-plugin-v2433).

- [Bug fix] Detect CloudLinux v10 in Redis handling.

## WHM Plugin v5.2.8[¶](#whm-plugin-v528 "Permanent link")

*Released: February 10, 2026*

Bundled with [cPanel User-End Plugin v2.4.3.3](#cpanel-user-end-plugin-v2433).

- [Improvement] Add Enable Cache to Redis.
- [Improvement] Misc code improvements and cleanup.
- [Bug fix] Install prerequisite for Redis for AlmaLinux 10.
- [Bug fix] Update screen when bulk Redis actions are complete with "Done".

## WHM Plugin v5.2.7[¶](#whm-plugin-v527 "Permanent link")

*Released: November 14, 2025*

Bundled with [cPanel User-End Plugin v2.4.3.3](#cpanel-user-end-plugin-v2433).

- [Misc] Code improvements.
- [Bug fix] Correct a cPanel plugin install/uninstall button swap bug introduced in v5.2.6.3.

## WHM Plugin v5.2.6.4[¶](#whm-plugin-v5264 "Permanent link")

*Released: November 10, 2025*

Bundled with [cPanel User-End Plugin v2.4.3.3](#cpanel-user-end-plugin-v2433).

- [Bug fix] Properly upgrade the `redis_svc.sh` file and fix it if broken in v5.2.6.3.

## WHM Plugin v5.2.6.3[¶](#whm-plugin-v5263 "Permanent link")

*Released: November 6, 2025*

Bundled with [cPanel User-End Plugin v2.4.3.3](#cpanel-user-end-plugin-v2433).

- [Improvement] Address 4xx responses caused by older or missing plugin template stylesheets.
- [Misc] Code improvements.
- [Bug fix] Properly install Redis if it's not already installed for a number of functions in `redis_user_action.sh`.
- [Bug fix] Handle a duplicate `/etc/passwd` UID entry in `redis_user_action.sh` when creating a user's Redis files.

## WHM Plugin v5.2.6.2[¶](#whm-plugin-v5262 "Permanent link")

*Released: August 21, 2025*

Bundled with [cPanel User-End Plugin v2.4.3.3](#cpanel-user-end-plugin-v2433).

- [Improvement] Create Redis services during a `restorepkg`.
- [Bug fix] Address hang during `restorepkg`.

## WHM Plugin v5.2.6.1[¶](#whm-plugin-v5261 "Permanent link")

*Released: August 15, 2025*

Bundled with [cPanel User-End Plugin v2.4.3.3](#cpanel-user-end-plugin-v2433).

- [Misc] Upgrade cPanel plugin to v2.4.3.3.

## cPanel User-End Plugin v2.4.3.3[¶](#cpanel-user-end-plugin-v2433 "Permanent link")

*Released: August 15, 2025*

Bundled with [WHM Plugin v5.2.6.1](#whm-plugin-v5261).

- [Bug fix] Handle Redis package users correctly in cPanel.

## WHM Plugin v5.2.6[¶](#whm-plugin-v526 "Permanent link")

*Released: August 14, 2025*

Bundled with [cPanel User-End Plugin v2.4.3.2](#cpanel-user-end-plugin-v2432).

- [Improvement] Add a daily cron job to update cPanel known proxies for QUIC.cloud IPs.

## WHM Plugin v5.2.5[¶](#whm-plugin-v525 "Permanent link")

*Released: August 12, 2025*

Bundled with [cPanel User-End Plugin v2.4.3.2](#cpanel-user-end-plugin-v2432).

- [Misc] Upgrade cPanel plugin to v2.4.3.2.
- [Bug fix] Not fully or properly handling enable or disable package commands.

## cPanel User-End Plugin v2.4.3.2[¶](#cpanel-user-end-plugin-v2432 "Permanent link")

*Released: August 12, 2025*

Bundled with [WHM Plugin v5.2.5](#whm-plugin-v525).

- [Bug fix] cPanel Redis single-user sizes now properly recognized.

## WHM Plugin v5.2.4[¶](#whm-plugin-v524 "Permanent link")

*Released: August 5, 2025*

Bundled with [cPanel User-End Plugin v2.4.3.1](#cpanel-user-end-plugin-v2431).

- [Improvement] Create a `/usr/local/lsws/debug` file to enable debugging to `/usr/local/lsws/logs/webcachemgr.log`.
- [Security] The `redis.size` file now has root-only permissions.
- [Bug fix] Fix a bug in enabling new users in a Redis package.
- [Bug fix] Display Redis package actions correctly.
- [Bug fix] Set immutable flag for `redis.package` in user's temp Redis directory.
- [Bug fix] Create Redis temp directory files and directories as the user.

## WHM Plugin v5.2.3.1[¶](#whm-plugin-v5231 "Permanent link")

*Released: August 5, 2025*

Bundled with [cPanel User-End Plugin v2.4.3.1](#cpanel-user-end-plugin-v2431).

- [Misc] Upgrade cPanel plugin to v2.4.3.1.

## cPanel User-End Plugin v2.4.3.1[¶](#cpanel-user-end-plugin-v2431 "Permanent link")

*Released: August 5, 2025*

Bundled with [WHM Plugin v5.2.3.1](#whm-plugin-v5231).

- [Bug fix] Fix Cache Manager scan operation failing in newer PHP versions.

## WHM Plugin v5.2.3[¶](#whm-plugin-v523 "Permanent link")

*Released: July 11, 2025*

Bundled with [cPanel User-End Plugin v2.4.3](#cpanel-user-end-plugin-v243).

- [Feature] For Redis, support minimum UID specified in `/usr/local/lsws/lsns/conf/lsns.conf` for getting a list of eligible users.
- [Feature] Add a **Flag All** button to the cache management page.
- [Security] Address a minor security vulnerability found by a security researcher.

## WHM Plugin v5.2.2.3[¶](#whm-plugin-v5223 "Permanent link")

*Released: June 24, 2025*

Bundled with [cPanel User-End Plugin v2.4.3](#cpanel-user-end-plugin-v243).

- [Misc] Upgrade cPanel plugin to v2.4.3.

## cPanel User-End Plugin v2.4.3[¶](#cpanel-user-end-plugin-v243 "Permanent link")

*Released: June 24, 2025*

Bundled with [WHM Plugin v5.2.2.3](#whm-plugin-v5223).

- [Security] Address a security vulnerability found by a security researcher.

## WHM Plugin v5.2.2.2[¶](#whm-plugin-v5222 "Permanent link")

*Released: June 17, 2025*

Bundled with [cPanel User-End Plugin v2.4.2.1](#cpanel-user-end-plugin-v2421).

- [Misc] Upgrade cPanel plugin to v2.4.2.1.
- [Improvement] Unconditionally install Redis cPanel support.

## cPanel User-End Plugin v2.4.2.1[¶](#cpanel-user-end-plugin-v2421 "Permanent link")

*Released: June 17, 2025*

Bundled with [WHM Plugin v5.2.2.2](#whm-plugin-v5222).

- [Improvement] Unconditionally install Redis cPanel support.

## WHM Plugin v5.2.2.1[¶](#whm-plugin-v5221 "Permanent link")

*Released: May 1, 2025*

Bundled with [cPanel User-End Plugin v2.4.2](#cpanel-user-end-plugin-v242).

- [Bug fix] If Redis needs to be installed on initial package activation, do it first.

## WHM Plugin v5.2.2[¶](#whm-plugin-v522 "Permanent link")

*Released: April 3, 2025*

Bundled with [cPanel User-End Plugin v2.4.2](#cpanel-user-end-plugin-v242).

- [Misc] Upgrade cPanel plugin to v2.4.2.
- [Improvement] Improve PHP 8.4 compatibility.
- [Bug fix] Support Redis packages correctly if there are no Redis users active.
- [Bug fix] Support Redis packages correctly if there is a space in the package name.

## cPanel User-End Plugin v2.4.2[¶](#cpanel-user-end-plugin-v242 "Permanent link")

*Released: April 3, 2025*

Bundled with [WHM Plugin v5.2.2](#whm-plugin-v522).

- [Bug fix] Install cPanel Redis support even if only packages are defined (no user sizes).

## WHM Plugin v5.2.1[¶](#whm-plugin-v521 "Permanent link")

*Released: January 29, 2025*

Bundled with [cPanel User-End Plugin v2.4.1.2](#cpanel-user-end-plugin-v2412).

- [Misc] Upgrade cPanel plugin to v2.4.1.2.
- [Misc] Prevent direct plugin access when disabled in user package feature list.

## cPanel User-End Plugin v2.4.1.2[¶](#cpanel-user-end-plugin-v2412 "Permanent link")

*Released: January 29, 2025*

Bundled with [WHM Plugin v5.2.1](#whm-plugin-v521).

- [Bug fix] `redis_svc.sh` correctly recognizes packages with duplicate prefixes.
- [Bug fix] Recognize packages correctly.

## WHM Plugin v5.2[¶](#whm-plugin-v52 "Permanent link")

*Released: January 22, 2025*

Bundled with [cPanel User-End Plugin v2.4.1.1](#cpanel-user-end-plugin-v2411).

- [Feature] Redis Package Manager for defaults by package.
- [Misc] Upgrade cPanel plugin to v2.4.1.1.
- [Bug fix] Fix display bugs in LiteSpeed Containers Namespace and Stats displays.
- [Bug fix] Fix sorting on Redis Users table columns "Redis Service" and "Service MB".
- [Bug fix] Fix misc Redis feature bugs.

## cPanel User-End Plugin v2.4.1.1[¶](#cpanel-user-end-plugin-v2411 "Permanent link")

*Released: January 22, 2025*

Bundled with [WHM Plugin v5.2](#whm-plugin-v52).

- [Misc] Debug message cleanup.

## WHM Plugin v5.1.2[¶](#whm-plugin-v512 "Permanent link")

*Released: January 7, 2025*

Bundled with [cPanel User-End Plugin v2.4.1](#cpanel-user-end-plugin-v241).

- [Misc] Upgrade cPanel plugin to v2.4.1.

## cPanel User-End Plugin v2.4.1[¶](#cpanel-user-end-plugin-v241 "Permanent link")

*Released: January 7, 2025*

Bundled with [WHM Plugin v5.1.2](#whm-plugin-v512).

- [Misc] Generate new `messages.pot` translation file.

## WHM Plugin v5.1.1[¶](#whm-plugin-v511 "Permanent link")

*Released: December 9, 2024*

Bundled with [cPanel User-End Plugin v2.4.0.2](#cpanel-user-end-plugin-v2402).

- [Misc] Upgrade cPanel plugin to v2.4.0.2.

## cPanel User-End Plugin v2.4.0.2[¶](#cpanel-user-end-plugin-v2402 "Permanent link")

*Released: December 9, 2024*

Bundled with [WHM Plugin v5.1.1](#whm-plugin-v511).

- [Bug fix] Fix bug in identifying the correct running service for Redis.
- [Bug fix] Display a rational message and disable input when Redis is not configured.

## cPanel User-End Plugin v2.4.0.1[¶](#cpanel-user-end-plugin-v2401 "Permanent link")

*Released: December 2, 2024*

Bundled with [WHM Plugin v5.1](#whm-plugin-v51).

- [Bug fix] Fix cPanel Redis Support page 404 error.

## WHM Plugin v5.1[¶](#whm-plugin-v51 "Permanent link")

*Released: November 25, 2024*

Bundled with [cPanel User-End Plugin v2.4](#cpanel-user-end-plugin-v24).

- [Feature] Add Redis flush cache.
- [Feature] Add support for WHM Transfer and user renames for Redis services.
- [Feature] Add optional Redis configuration file.
- [Improvement] Redis: support service setup without service startup, along with remove setup and disable service.
- [Improvement] Redis default setup.
- [Improvement] Open new external links in a new window/tab.
- [GUI] Minor visual improvements to some buttons.
- [GUI] Improve "title" hover text spacing.
- [Misc] Improve HTML structure for some pages.
- [Bug fix] Various Redis and LiteSpeed Containers bug fixes.

## cPanel User-End Plugin v2.4[¶](#cpanel-user-end-plugin-v24 "Permanent link")

*Released: November 25, 2024*

Bundled with [WHM Plugin v5.1](#whm-plugin-v51).

- [Feature] Add Redis flush cache.
- [Improvement] Redis: support service setup without service startup, along with remove setup and disable service.
- [Improvement] Redis default setup.
- [GUI] Improve "title" hover text spacing.

## WHM Plugin v5.0.0.3[¶](#whm-plugin-v5003 "Permanent link")

*Released: September 30, 2024*

Bundled with [cPanel User-End Plugin v2.3.0.1](#cpanel-user-end-plugin-v2301).

- [Bug fix] Support LiteSpeed Containers use with older kernels.

## WHM Plugin v5.0.0.2[¶](#whm-plugin-v5002 "Permanent link")

*Released: September 23, 2024*

Bundled with [cPanel User-End Plugin v2.3.0.1](#cpanel-user-end-plugin-v2301).

- [Bug fix] Fix a cPanel plugin install/uninstall script issue introduced in v5.0.
- [Bug fix] Cleanup sizes and services with hooks when a user is deleted, or just sizes when a service is deleted in WHM.
- [Bug fix] Set missing permissions for the `redis_svc.sh` program on installation.
- [Bug fix] Misc minor bug fixes.

## cPanel User-End Plugin v2.3.0.1[¶](#cpanel-user-end-plugin-v2301 "Permanent link")

*Released: September 23, 2024*

Bundled with [WHM Plugin v5.0.0.2](#whm-plugin-v5002).

- [Bug fix] Do not allow entrance to Redis Services when not configured in WHM.

## WHM Plugin v5.0.0.1[¶](#whm-plugin-v5001 "Permanent link")

*Released: September 18, 2024*

Bundled with [cPanel User-End Plugin v2.3](#cpanel-user-end-plugin-v23).

- [Bug fix] Fix issue loading **Cache Redis for Users** page.

## WHM Plugin v5.0[¶](#whm-plugin-v50 "Permanent link")

*Released: September 17, 2024*

Bundled with [cPanel User-End Plugin v2.3](#cpanel-user-end-plugin-v23).

- [Feature] Add new **LiteSpeed Containers** features.
- [Feature] Add new **Cache Redis for Users** feature.
- [Misc] Update some plugin links.

## cPanel User-End Plugin v2.3[¶](#cpanel-user-end-plugin-v23 "Permanent link")

*Released: September 17, 2024*

Bundled with [WHM Plugin v5.0](#whm-plugin-v50).

- [Feature] Add new **LiteSpeed Containers** related features.
- [Misc] Update some plugin links.

## WHM Plugin v4.1.14[¶](#whm-plugin-v4114 "Permanent link")

*Released: March 20, 2024*

Bundled with [cPanel User-End Plugin v2.2.2](#cpanel-user-end-plugin-v222).

- [Improvement] Re-check `timezonedb` extensions daily regardless of current `timezonedb` warning state.
- [Misc] Misc code improvements.

## cPanel User-End Plugin v2.2.2[¶](#cpanel-user-end-plugin-v222 "Permanent link")

*Released: March 20, 2024*

Bundled with [WHM Plugin v4.1.14](#whm-plugin-v4114).

- [Misc] Misc code improvements.

## WHM Plugin v4.1.13[¶](#whm-plugin-v4113 "Permanent link")

*Released: June 20, 2023*

Bundled with [cPanel User-End Plugin v2.2.1](#cpanel-user-end-plugin-v221).

- [Improvement] Add `aarch64` as a supported Linux architecture.
- [Improvement] Change plugin expected ACLs from `any` to `all`.
- [Improvement] Support custom Shared Code Library update failure messages.
- [Misc] Misc code improvements.

## cPanel User-End Plugin v2.2.1[¶](#cpanel-user-end-plugin-v221 "Permanent link")

*Released: June 20, 2023*

Bundled with [WHM Plugin v4.1.13](#whm-plugin-v4113).

- [Misc] Generate new `messages.pot` translation file.
- [Misc] Misc code improvements.

## WHM Plugin v4.1.12[¶](#whm-plugin-v4112 "Permanent link")

*Released: March 16, 2023*

Bundled with [cPanel User-End Plugin v2.2](#cpanel-user-end-plugin-v22).

- [Misc] Upgrade cPanel plugin to v2.2.
- [Misc] Update outdated license file.
- [Misc] Remove some unused plugin CSS.
- [Improvement] Version string comparison logic improvements.
- [Improvement] Adjust checkbox spacing on LSCWP Version Management page.
- [Improvement] Further improve PHP 8.x compatibility.
- [Misc] Misc code improvements.
- [Bug fix] Address misc bugs in `timezonedb` logic.

## cPanel User-End Plugin v2.2[¶](#cpanel-user-end-plugin-v22 "Permanent link")

*Released: March 16, 2023*

Bundled with [WHM Plugin v4.1.12](#whm-plugin-v4112).

- [Feature] "Flush LSCache" will now auto-purge QUIC.cloud cache files as well.
- [Misc] New Jupiter-themed plugin icon.
- [Improvement] Version string comparison logic improvements.
- [Improvement] Further improve PHP 8.x compatibility.
- [Bug fix] Misc bug fixes.

## WHM Plugin v4.1.11.1[¶](#whm-plugin-v41111 "Permanent link")

*Released: September 15, 2022*

Bundled with [cPanel User-End Plugin v2.1.4](#cpanel-user-end-plugin-v214).

- [Misc] Update `buildtimezone` script to v2.0.1.

## WHM Plugin v4.1.11[¶](#whm-plugin-v4111 "Permanent link")

*Released: September 7, 2022*

Bundled with [cPanel User-End Plugin v2.1.4](#cpanel-user-end-plugin-v214).

- [Improvement] Update `buildtimezone` script to v2.0.
- [Misc] Misc code improvements.

## cPanel User-End Plugin v2.1.4[¶](#cpanel-user-end-plugin-v214 "Permanent link")

*Released: September 7, 2022*

Bundled with [WHM Plugin v4.1.11](#whm-plugin-v4111).

- [Misc] Misc code improvements.

## WHM Plugin v4.1.10.1[¶](#whm-plugin-v41101 "Permanent link")

*Released: May 16, 2022*

Bundled with [cPanel User-End Plugin v2.1.3.5](#cpanel-user-end-plugin-v2135).

- [Improvement] Add PHP versions 7.3 to 8.0 to initial `timezonedb` module checks.
- [Bug fix] Address script issues when installing new `timezonedb` modules.

## WHM Plugin v4.1.10[¶](#whm-plugin-v4110 "Permanent link")

*Released: April 27, 2022*

- [Misc] Upgrade cPanel plugin to v2.1.3.5.

## cPanel User-End Plugin v2.1.3.5[¶](#cpanel-user-end-plugin-v2135 "Permanent link")

*Released: April 27, 2022*

- [Bug fix] Address a potential cache management success message parsing issue.
- [Bug fix] Correct cPanel interface links, search results, and cPanel menu items sometimes returning a 404 response when interacted with from within plugin interface pages.

## WHM Plugin v4.1.9[¶](#whm-plugin-v419 "Permanent link")

*Released: April 13, 2022*

- [Misc] Upgrade cPanel plugin to v2.1.3.4.

## cPanel User-End Plugin v2.1.3.4[¶](#cpanel-user-end-plugin-v2134 "Permanent link")

*Released: April 13, 2022*

- [Bug fix] Account for missing `idn` functions when the PHP `intl` module is not installed and enabled.

## WHM Plugin v4.1.8.1[¶](#whm-plugin-v4181 "Permanent link")

*Released: April 12, 2022*

- [Bug fix] Correct a `timezonedb` script issue when comparing version numbers.

## WHM Plugin v4.1.8[¶](#whm-plugin-v418 "Permanent link")

*Released: April 12, 2022*

Bundled with [cPanel User-End Plugin v2.1.3.3](#cpanel-user-end-plugin-v2133).

- [Misc] Upgrade cPanel plugin to v2.1.3.3.

## cPanel User-End Plugin v2.1.3.3[¶](#cpanel-user-end-plugin-v2133 "Permanent link")

*Released: April 12, 2022*

Bundled with [WHM Plugin v4.1.8](#whm-plugin-v418).

- [Improvement] Add support for the handling of international domain names.

## WHM Plugin v4.1.7[¶](#whm-plugin-v417 "Permanent link")

*Released: March 15, 2022*

Bundled with [cPanel User-End Plugin v2.1.3.2](#cpanel-user-end-plugin-v2132).

- [Improvement] Improve `timezonedb` extension detection logic.
- [Improvement] Add additional filtering and improvements to "latest WHM version" retrieval logic.
- [Improvement] Add additional filtering and improvements to "LSCWP version list" retrieval logic.

## WHM Plugin v4.1.6.3[¶](#whm-plugin-v4163 "Permanent link")

*Released: March 8, 2022*

Bundled with [cPanel User-End Plugin v2.1.3.2](#cpanel-user-end-plugin-v2132).

- [Bug fix] Address issues with `timezonedb` extension detection.

## WHM Plugin v4.1.6.1[¶](#whm-plugin-v4161 "Permanent link")

*Released: January 14, 2022*

- [Misc] Upgrade cPanel plugin to v2.1.3.2.
- [Improvement] Re-enforce user-end cPanel plugin conf file permissions more often.
- [Improvement] Plugin scripts run with a generic shell are now more POSIX-compliant.

## cPanel User-End Plugin v2.1.3.2[¶](#cpanel-user-end-plugin-v2132 "Permanent link")

*Released: January 14, 2022*

- [Improvement] Better conf file handling during installation.

## WHM Plugin v4.1.6[¶](#whm-plugin-v416 "Permanent link")

*Released: December 13, 2021*

Bundled with [cPanel User-End Plugin v2.1.3.1](#cpanel-user-end-plugin-v2131).

- [Misc] Upgrade cPanel plugin to v2.1.3.1.

## cPanel User-End Plugin v2.1.3.1[¶](#cpanel-user-end-plugin-v2131 "Permanent link")

*Released: December 13, 2021*

Bundled with [WHM Plugin v4.1.6](#whm-plugin-v416).

- [Bug fix] Address a custom Perl API script bug preventing the execution of escalated commands.

## WHM Plugin v4.1.5[¶](#whm-plugin-v415 "Permanent link")

*Released: December 10, 2021*

Bundled with [cPanel User-End Plugin v2.1.3](#cpanel-user-end-plugin-v213).

- [Misc] Upgrade cPanel plugin to v2.1.3.
- [Improvement] cPanel Jupiter theme support.

## cPanel User-End Plugin v2.1.3[¶](#cpanel-user-end-plugin-v213 "Permanent link")

*Released: December 10, 2021*

Bundled with [WHM Plugin v4.1.5](#whm-plugin-v415).

- [Improvement] cPanel Jupiter theme support.
- [Bug fix] Address cPanel `paper_lantern` theme compatibility issues introduced in cPanel/WHM v100.

## cPanel User-End Plugin v2.1.2.2[¶](#cpanel-user-end-plugin-v2122 "Permanent link")

*Released: October 27, 2021*

Bundled with [WHM Plugin v4.1.4.1](#whm-plugin-v4141).

- [Bug fix] Address some `timezonedb` script issues.

## cPanel User-End Plugin v2.1.2.1[¶](#cpanel-user-end-plugin-v2121 "Permanent link")

*Released: July 9, 2021*

Bundled with [WHM Plugin v4.1.3.1](#whm-plugin-v4131).

- [Improvement] General improvements.

## WHM Plugin v4.1.3.1[¶](#whm-plugin-v4131 "Permanent link")

*Released: February 18, 2021*

Bundled with [cPanel User-End Plugin v2.1.2](#cpanel-user-end-plugin-v212).

- [Bug fix] Saving cPanel plugin settings before installing the cPanel plugin itself should no longer fail.

## WHM Plugin v4.1.3[¶](#whm-plugin-v413 "Permanent link")

*Released: November 10, 2020*

Bundled with [cPanel User-End Plugin v2.1.2](#cpanel-user-end-plugin-v212).

- [Improvement] Display an update notice when a new plugin version is available.
- [Improvement] Improve some plugin/message text.

## cPanel User-End Plugin v2.1.2[¶](#cpanel-user-end-plugin-v212 "Permanent link")

*Released: November 10, 2020*

Bundled with [WHM Plugin v4.1.3](#whm-plugin-v413).

- [Improvement] General improvements.

## WHM Plugin v4.1.2[¶](#whm-plugin-v412 "Permanent link")

*Released: September 30, 2020*

Bundled with [cPanel User-End Plugin v2.1.1](#cpanel-user-end-plugin-v211).

- [Improvement] Improve the accuracy of the progress displayed when performing a scan or discover-new operation.
- [Bug fix] WordPress installations that no longer exist should now be removed from the cache manager list when a scan/re-scan operation is performed.

## WHM Plugin v4.1.1[¶](#whm-plugin-v411 "Permanent link")

*Released: September 11, 2020*

Bundled with [cPanel User-End Plugin v2.1.1](#cpanel-user-end-plugin-v211).

- [GUI] Minor GUI improvements.

## cPanel User-End Plugin v2.1.1[¶](#cpanel-user-end-plugin-v211 "Permanent link")

*Released: September 9, 2020*

Bundled with [WHM Plugin v4.1](#whm-plugin-v41).

- [Improvement] Restart `httpd` service after generating new ECC certificates to have them take effect.

## WHM Plugin v4.1[¶](#whm-plugin-v41 "Permanent link")

*Released: August 6, 2020*

Bundled with [cPanel User-End Plugin v2.1](#cpanel-user-end-plugin-v21).

- [Security] Add some further HTML escaping for values shown on the cPanel Plugin Settings page.
- [Feature] Add a "QUIC.cloud IPs" page.
- [Feature] Allow/disallow the "Generate EC Certificates" LiteSpeed cPanel user-end plugin feature through the cPanel Plugin Settings page.
- [Improvement] Allow cPanel plugin settings to be set prior to installing the cPanel user-end plugin.
- [Improvement] Improve detection of the cPanel user-end plugin.
- [GUI] Minor GUI improvements.

## cPanel User-End Plugin v2.1[¶](#cpanel-user-end-plugin-v21 "Permanent link")

*Released: August 6, 2020*

Bundled with [WHM Plugin v4.1](#whm-plugin-v41).

- [Security] Current user value is now retrieved from the executing process instead of the global `$_ENV[]` variable.
- [Major Feature] Add "Manage EC Certificates" page and related features. (Feature availability controlled through the WHM plugin.)
- [Feature] Add "Upload SSL Cert to QUIC.cloud" button to the LiteSpeed Web Cache Manager page.
- [Improvement] General improvements to existing code.
- [GUI] GUI improvements.
- [Misc] Move plugin configuration file location to the plugin's new `data/` dir.
- [Misc] Regenerate translation files.
- [Bug fix] Correct load path for FontAwesome `woff2` font file.
- [Bug fix] Site URL now displays as intended on the LiteSpeed Web Cache Manager page.
- [Bug fix] Correct "Refresh Status" button remaining clickable when no installations have been discovered on the LiteSpeed Web Cache Manager page.
- [Bug fix] `[LOG]` messages no longer trigger unexpected output error messages.

## WHM Plugin v4.0[¶](#whm-plugin-v40 "Permanent link")

*Released: June 29, 2020*

Bundled with [cPanel User-End Plugin v2.0](#cpanel-user-end-plugin-v20).

- [Misc] Drop EA3 support.
- [Tuning] Improve "switch to LiteSpeed Web Server/Apache" reliability.
- [Tuning] Improve Ubuntu 16 compatibility.
- [Bug fix] LSWS should now be stopped when switching servers in all cases.

## cPanel User-End Plugin v2.0[¶](#cpanel-user-end-plugin-v20 "Permanent link")

*Released: June 29, 2020*

Bundled with [WHM Plugin v4.0](#whm-plugin-v40).

- [Misc] Drop EA3 support.

## WHM Plugin v3.3.7[¶](#whm-plugin-v337 "Permanent link")

*Released: February 4, 2020*

Bundled with [cPanel User-End Plugin v1.2.5](#cpanel-user-end-plugin-v125).

- [Improvement] Improve LiteSpeed/Apache spool detection accuracy.
- [Improvement] Improve PHP binary detection when performing cache management actions.
- [Improvement] Improve accuracy of displayed critical alert message.
- [Improvement] Improve code reliability.

## cPanel User-End Plugin v1.2.5[¶](#cpanel-user-end-plugin-v125 "Permanent link")

*Released: February 4, 2020*

Bundled with [WHM Plugin v3.3.7](#whm-plugin-v337).

- [Improvement] Improve PHP binary detection when performing cache management actions.
- [Improvement] Improve code reliability.

## WHM Plugin v3.3.6[¶](#whm-plugin-v336 "Permanent link")

*Released: January 10, 2020*

Bundled with [cPanel User-End Plugin v1.2.4](#cpanel-user-end-plugin-v124).

- [Improvement] Minor improvements.

## cPanel User-End Plugin v1.2.4[¶](#cpanel-user-end-plugin-v124 "Permanent link")

*Released: January 10, 2020*

Bundled with [WHM Plugin v3.3.6](#whm-plugin-v336).

- [Improvement] `open_basedir` PHP ini option no longer breaks cache management actions.

## WHM Plugin v3.3.5[¶](#whm-plugin-v335 "Permanent link")

*Released: December 4, 2019*

Bundled with [cPanel User-End Plugin v1.2.3.3](#cpanel-user-end-plugin-v1233).

- [Feature] Add support for displaying LiteSpeed Web Server "critical alert" messages.

## WHM Plugin v3.3.4[¶](#whm-plugin-v334 "Permanent link")

*Released: November 25, 2019*

Bundled with [cPanel User-End Plugin v1.2.3.3](#cpanel-user-end-plugin-v1233).

- [Feature] Shared code library can now be updated from within the plugin when needed.
- [Improvement] Improve reliability of shared code library.
- [Improvement] Improve Cache Manager detection of existing cache plugins.
- [Improvement] Improve logging.
- [Improvement] Reduced dependencies on shared code library.
- [Improvement] Improve support for PHP versions under 5.5 when performing Cache Manager operations.
- [Bug fix] Fix WordPress warning when performing certain Cache Manager actions.

## WHM Plugin v3.3.3.6[¶](#whm-plugin-v3336 "Permanent link")

*Released: October 17, 2019*

Bundled with [cPanel User-End Plugin v1.2.3.3](#cpanel-user-end-plugin-v1233).

- [Feature] Add command `--update-lib` to the `lscmctl` script.
- [Improvement] Improve shared code library logging.
- [Improvement] Add logic to auto-correct CageFS problems when performing cache manager operations.
- [Improvement] Local copy of Dash Notifier plugin is now retrieved directly from WordPress and updated automatically.
- [Improvement] Improve compatibility with various OSs.
- [Improvement] Other minor improvements.
- [Bug fix] Fix possible failure to catch some exceptions.
- [Bug fix] Fix bad query string matching for request variables/lists.
- [Bug fix] Fix failure to delete local directory for Dash Notifier plugin files.
- [GUI] Fix incorrect icon used for Dash Notifier pages.

## WHM Plugin v3.3.3.5[¶](#whm-plugin-v3335 "Permanent link")

*Released: July 25, 2019*

Bundled with [cPanel User-End Plugin v1.2.3.3](#cpanel-user-end-plugin-v1233).

- [Improvement] Minor improvements.

## cPanel User-End Plugin v1.2.3.3[¶](#cpanel-user-end-plugin-v1233 "Permanent link")

*Released: July 25, 2019*

Bundled with [WHM Plugin v3.3.3.5](#whm-plugin-v3335).

- [Improvement] Minor improvements.

## WHM Plugin v3.3.3.4[¶](#whm-plugin-v3334 "Permanent link")

*Released: July 19, 2019*

Bundled with [cPanel User-End Plugin v1.2.3.2](#cpanel-user-end-plugin-v1232).

- [Improvement] Minor improvements.

## cPanel User-End Plugin v1.2.3.2[¶](#cpanel-user-end-plugin-v1232 "Permanent link")

*Released: July 19, 2019*

Bundled with [WHM Plugin v3.3.3.4](#whm-plugin-v3334).

- [Improvement] Minor improvements.

## WHM Plugin v3.3.3.3[¶](#whm-plugin-v3333 "Permanent link")

*Released: July 17, 2019*

Bundled with [cPanel User-End Plugin v1.2.3.1](#cpanel-user-end-plugin-v1231).

- [Bug fix] Fix failure to detect set Virtual Host cache root in some cases.

## WHM Plugin v3.3.3.2[¶](#whm-plugin-v3332 "Permanent link")

*Released: July 8, 2019*

Bundled with [cPanel User-End Plugin v1.2.3.1](#cpanel-user-end-plugin-v1231).

- [Security] Set stricter data file read permissions.
- [Improvement] Improve WordPress installation path handling to avoid symlink path duplicates.
- [Bug fix] Fix PHP fatal error issue introduced in v3.3.3.1 when attempting to add UI messages.

## cPanel User-End Plugin v1.2.3.1[¶](#cpanel-user-end-plugin-v1231 "Permanent link")

*Released: July 8, 2019*

Bundled with [WHM Plugin v3.3.3.2](#whm-plugin-v3332).

- [Security] Set stricter data file read permissions.

## WHM Plugin v3.3.3.1[¶](#whm-plugin-v3331 "Permanent link")

*Released: July 1, 2019*

Bundled with [cPanel User-End Plugin v1.2.3](#cpanel-user-end-plugin-v123).

- [Refactor] Minor refactoring.

## WHM Plugin v3.3.3[¶](#whm-plugin-v333 "Permanent link")

*Released: June 25, 2019*

Bundled with [cPanel User-End Plugin v1.2.3](#cpanel-user-end-plugin-v123).

- [Improvement] Add support for loading a custom data file containing WordPress installations added through the `lscmctl` `addinstalls` command.

## cPanel User-End Plugin v1.2.3[¶](#cpanel-user-end-plugin-v123 "Permanent link")

*Released: June 25, 2019*

Bundled with [WHM Plugin v3.3.3](#whm-plugin-v333).

- [Improvement] Automatically remove discovered WordPress installations not re-discovered when scanning.
- [Improvement] Remove WordPress installations are no longer displayed on initial page load.

## WHM Plugin v3.3.2.1[¶](#whm-plugin-v3321 "Permanent link")

*Released: June 12, 2019*

Bundled with [cPanel User-End Plugin v1.2.2](#cpanel-user-end-plugin-v122).

- [Improvement] Minor improvements.

## cPanel User-End Plugin v1.2.2[¶](#cpanel-user-end-plugin-v122 "Permanent link")

*Released: June 12, 2019*

Bundled with [WHM Plugin v3.3.2.1](#whm-plugin-v3321).

- [Feature] Add support for implementing plugin translations based on cPanel locale.

## WHM Plugin v3.3.2[¶](#whm-plugin-v332 "Permanent link")

*Released: June 5, 2019*

Bundled with [cPanel User-End Plugin v1.2.1](#cpanel-user-end-plugin-v121).

- [Improvement] Improve Scan to follow symbolic links.

## cPanel User-End Plugin v1.2.1[¶](#cpanel-user-end-plugin-v121 "Permanent link")

*Released: June 5, 2019*

Bundled with [WHM Plugin v3.3.2](#whm-plugin-v332).

- [Improvement] Improve Scan to follow symbolic links.

## WHM Plugin v3.3.1[¶](#whm-plugin-v331 "Permanent link")

*Released: May 17, 2019*

Bundled with [cPanel User-End Plugin v1.2.0.2](#cpanel-user-end-plugin-v1202).

- [Feature] Add an "Auto Install" option to the cPanel Plugin section's Settings page to toggle automatically installing the cPanel plugin on WHM plugin install/update.
- [Bug fix] Fix overly strict matching of `DOMAIN_CURRENT_SITE` when scanning for WordPress installations.

## cPanel User-End Plugin v1.2.0.2[¶](#cpanel-user-end-plugin-v1202 "Permanent link")

*Released: May 17, 2019*

Bundled with [WHM Plugin v3.3.1](#whm-plugin-v331).

- [Bug fix] Fix overly strict matching of `DOMAIN_CURRENT_SITE` when scanning for WordPress installations.

## WHM Plugin v3.3.0.1[¶](#whm-plugin-v3301 "Permanent link")

*Released: April 25, 2019*

Bundled with [cPanel User-End Plugin v1.2.0.1](#cpanel-user-end-plugin-v1201).

- [Improvement] Minor improvements.

## cPanel User-End Plugin v1.2.0.1[¶](#cpanel-user-end-plugin-v1201 "Permanent link")

*Released: April 25, 2019*

Bundled with [WHM Plugin v3.3.0.1](#whm-plugin-v3301).

- [Improvement] Minor improvements.

## WHM Plugin v3.3[¶](#whm-plugin-v33 "Permanent link")

*Released: April 18, 2019*

Bundled with [cPanel User-End Plugin v1.2](#cpanel-user-end-plugin-v12).

- [Misc] Add PHP 7.3 support to `timezonedb` check.
- [Misc] Add support for "stable tier" when alerting of new LSWS versions and builds.
- [Major Feature] Add WordPress Dash Notification feature for recommending a plugin or broadcasting a message to all discovered WordPress installations using the Dash Notifier plugin for WordPress.
- [Feature] Add support for using a custom LSCWP `const.default.ini` file when installing and enabling LSCWP if the file exists in the `/usr/src/litespeed-wp-plugin` directory.
- [Improvement] Improve reliability when downloading LSCWP files.
- [Improvement] Improve handling of LSCWP files when failing to enable.
- [Bug fix] Fix issues loading the WordPress environment for WordPress versions below 4.4.0.

## cPanel User-End Plugin v1.2[¶](#cpanel-user-end-plugin-v12 "Permanent link")

*Released: April 18, 2019*

Bundled with [WHM Plugin v3.3](#whm-plugin-v33).

- [Security] Improve plugin security.
- [Feature] Add support for using a custom LSCWP `const.default.ini` file when installing and enabling LSCWP if the file exists in the `/usr/src/litespeed-wp-plugin` directory.
- [Improvement] Improve handling of LSCWP files when failing to enable.
- [Improvement] LSCWP will now be installed in a WordPress installation's set language if translations for the language are available.
- [Improvement] Add `curl` fallback when installing LSCWP for users who may have `wget` disabled.
- [Bug fix] Fix unintentional display of `GET_TRANSLATION` messages.
- [Bug fix] Fix issues loading the WordPress environment for WordPress versions below 4.4.0.

## WHM Plugin v3.2.0.3[¶](#whm-plugin-v3203 "Permanent link")

*Released: February 26, 2019*

Bundled with [cPanel User-End Plugin v1.1.1.2](#cpanel-user-end-plugin-v1112).

- [Improvement] Improve pattern matching flexibility when parsing `wp-config.php`.

## cPanel User-End Plugin v1.1.1.2[¶](#cpanel-user-end-plugin-v1112 "Permanent link")

*Released: February 26, 2019*

Bundled with [WHM Plugin v3.2.0.3](#whm-plugin-v3203).

- [Improvement] Improve pattern matching flexibility when parsing `wp-config.php`.
- [Bug fix] Fix "missing UserContext" fatal error.

## WHM Plugin v3.2.0.2[¶](#whm-plugin-v3202 "Permanent link")

*Released: February 22, 2019*

Bundled with [cPanel User-End Plugin v1.1.1.1](#cpanel-user-end-plugin-v1111).

- [Bug fix] Fix "Switch To Apache" sometimes displaying an error message when the operation was successful.
- [Misc] Disable opcode cache for LSCWP action processes to avoid memory limit issues.
- [Bug fix] Fix issue enabling LSCWP for multisite WordPress installations.
- [Bug fix] Fix integration issue with LSCWP v2.9.3.

## cPanel User-End Plugin v1.1.1.1[¶](#cpanel-user-end-plugin-v1111 "Permanent link")

*Released: February 22, 2019*

Bundled with [WHM Plugin v3.2.0.2](#whm-plugin-v3202).

- [Misc] Disable opcode cache for LSCWP action processes to avoid memory limit issues.
- [Bug fix] Fix issue enabling LSCWP for multisite WordPress installations.
- [Bug fix] Fix integration issue with LSCWP v2.9.3.

## WHM Plugin v3.2.0.1[¶](#whm-plugin-v3201 "Permanent link")

*Released: January 29, 2019*

Bundled with [cPanel User-End Plugin v1.1.1](#cpanel-user-end-plugin-v111).

- [Improvement] Improve virtual host display accuracy regarding the `*` character.

## cPanel User-End Plugin v1.1.1[¶](#cpanel-user-end-plugin-v111 "Permanent link")

*Released: January 29, 2019*

Bundled with [WHM Plugin v3.2.0.1](#whm-plugin-v3201).

- [Improvement] Improve handling of possible virtual host cache root values.

## WHM Plugin v3.2[¶](#whm-plugin-v32 "Permanent link")

*Released: January 24, 2019*

Bundled with [cPanel User-End Plugin v1.1](#cpanel-user-end-plugin-v11).

- [Bug fix] Fix overly strict validation when more than one admin email is entered during web server installation.
- [Bug fix] Fix `nl_NL` locale always being used when retrieving LSCWP translations.

## cPanel User-End Plugin v1.1[¶](#cpanel-user-end-plugin-v11 "Permanent link")

*Released: January 24, 2019*

Bundled with [WHM Plugin v3.2](#whm-plugin-v32).

- [Bug fix] Fix `nl_NL` locale always being used when retrieving LSCWP translations.

## WHM Plugin v3.1.4[¶](#whm-plugin-v314 "Permanent link")

*Released: December 14, 2018*

Bundled with [cPanel User-End Plugin v1.0.3](#cpanel-user-end-plugin-v103).

- [Bug fix] Fix unexpected error message when transferring a license.
- [Bug fix] Fix new LSWS build alert disappearing after initial display.
- [Major Improvement] Greatly improved handling and overall speed of LSCWP translation updates.
- [Improvement] Change fatal error status icon hover text to be more descriptive.

## cPanel User-End Plugin v1.0.3[¶](#cpanel-user-end-plugin-v103 "Permanent link")

*Released: December 14, 2018*

Bundled with [WHM Plugin v3.1.4](#whm-plugin-v314).

- [Major Improvement] Greatly improved handling and overall speed of LSCWP translation updates.
- [Improvement] Change fatal error status icon hover text to be more descriptive.

## WHM Plugin v3.1.3.3[¶](#whm-plugin-v3133 "Permanent link")

*Released: November 20, 2018*

Bundled with [cPanel User-End Plugin v1.0.2.2](#cpanel-user-end-plugin-v1022).

- [Improvement] Improve compatibility with sites using WP Rocket.

## cPanel User-End Plugin v1.0.2.2[¶](#cpanel-user-end-plugin-v1022 "Permanent link")

*Released: November 20, 2018*

Bundled with [WHM Plugin v3.1.3.3](#whm-plugin-v3133).

- [Improvement] Improve compatibility with sites using WP Rocket.

## WHM Plugin v3.1.3.2[¶](#whm-plugin-v3132 "Permanent link")

*Released: November 19, 2018*

Bundled with [cPanel User-End Plugin v1.0.2.1](#cpanel-user-end-plugin-v1021).

- [Bug fix] Fix a compatibility issue with LSCWP v2.7.x.

## cPanel User-End Plugin v1.0.2.1[¶](#cpanel-user-end-plugin-v1021 "Permanent link")

*Released: November 19, 2018*

Bundled with [WHM Plugin v3.1.3.2](#whm-plugin-v3132).

- [Bug fix] Fix a compatibility issue with LSCWP v2.7.x.

## WHM Plugin v3.1.3.1[¶](#whm-plugin-v3131 "Permanent link")

*Released: November 13, 2018*

Bundled with [cPanel User-End Plugin v1.0.2](#cpanel-user-end-plugin-v102).

- [Bug fix] Fix a PHP 7 compatibility issue.

## cPanel User-End Plugin v1.0.2[¶](#cpanel-user-end-plugin-v102 "Permanent link")

*Released: November 13, 2018*

Bundled with [WHM Plugin v3.1.3.1](#whm-plugin-v3131).

- [GUI] Improve handling of various cPanel styles when displaying the plugin.

## WHM Plugin v3.1.3[¶](#whm-plugin-v313 "Permanent link")

*Released: November 6, 2018*

Bundled with [cPanel User-End Plugin v1.0.1.3](#cpanel-user-end-plugin-v1013).

- [Improvement] Improve LSCWP download speed and reliability.

## cPanel User-End Plugin v1.0.1.3[¶](#cpanel-user-end-plugin-v1013 "Permanent link")

*Released: November 6, 2018*

Bundled with [WHM Plugin v3.1.3](#whm-plugin-v313).

- [Bug fix] Remove unintentional `[Upgrade]` message output.

## WHM Plugin v3.1.2[¶](#whm-plugin-v312 "Permanent link")

*Released: October 30, 2018*

Bundled with [cPanel User-End Plugin v1.0.1.2](#cpanel-user-end-plugin-v1012).

- [Bug fix] Fix 1-CPU licenses without LSCache displaying as a different license type.
- [Bug fix] Fix an LSCWP version manager bug when scan data did not exist.
- [Bug fix] Fix LSCWP always installing in English language.

## cPanel User-End Plugin v1.0.1.2[¶](#cpanel-user-end-plugin-v1012 "Permanent link")

*Released: October 30, 2018*

Bundled with [WHM Plugin v3.1.2](#whm-plugin-v312).

- [Bug fix] Fix LSCWP always installing in English language.

## WHM Plugin v3.1.1.1[¶](#whm-plugin-v3111 "Permanent link")

*Released: October 8, 2018*

Bundled with [cPanel User-End Plugin v1.0.1.1](#cpanel-user-end-plugin-v1011).

- [Bug fix] Fix 1-CPU licenses without LSCache displaying as a different license type.

## cPanel User-End Plugin v1.0.1.1[¶](#cpanel-user-end-plugin-v1011 "Permanent link")

*Released: October 8, 2018*

Bundled with [WHM Plugin v3.1.1.1](#whm-plugin-v3111).

- [Bug fix] Fix plugin template file installing with incorrect permissions.
- [Bug fix] Fix template file not being removed when uninstalling the plugin.

## WHM Plugin v3.1.1[¶](#whm-plugin-v311 "Permanent link")

*Released: September 25, 2018*

Bundled with [cPanel User-End Plugin v1.0.1](#cpanel-user-end-plugin-v101).

- [Feature] Add "Restart Detached PHP Processes" button/page.
- [Improvement] Improve Apache PID detection.
- [Improvement] Improve CageFS-related logic.
- [Improvement] Improve LSWS build-related logic.
- [Improvement] "Latest Release" message will no longer display an LSWS version that is lower than the currently installed version.
- [Misc] Remove PHP suEXEC setting from the LSWS install screen to avoid incorrect initial setup.
- [Bug fix] Set cPanel plugin Custom Theme no longer continues to display after "Use Custom Theme" is unchecked.
- [Bug fix] "Build Available" message now includes build number and no longer disappears on page reload.
- [GUI] Update some button layouts.

## cPanel User-End Plugin v1.0.1[¶](#cpanel-user-end-plugin-v101 "Permanent link")

*Released: September 25, 2018*

Bundled with [WHM Plugin v3.1.1](#whm-plugin-v311).

- [Feature] Add "Restart Detached PHP Processes" button in the new "Advanced" page.
- [Improvement] Improve accuracy of the "Flush All" action.
- [Bug fix] Fix discovered installations sometimes not being immediately displayed after scanning.
- [Bug fix] Fix "missing docroot" error not being displayed properly.
- [Bug fix] Fix "Failed to setup COMPILE\_DIR" warning in logs.
- [GUI] Improve various page layouts and content.

## WHM Plugin v3.1.0.1[¶](#whm-plugin-v3101 "Permanent link")

*Released: July 24, 2018*

- [Bug fix] Fix `Unexpected result line [RESULT] SITEURL=...` error message displaying when site URL is successfully set.

## WHM Plugin v3.1.0[¶](#whm-plugin-v310 "Permanent link")

*Released: July 19, 2018*

Bundled with [cPanel User-End Plugin v1.0.0](#cpanel-user-end-plugin-v100).

- [Major Feature] Add a cPanel plugin section for installing/uninstalling and managing the new bundled end-user cPanel LiteSpeed Cache Manager plugin.
- [Improvement] Improve CageFS logic accuracy.
- [Bug fix] Fix a CageFS bug preventing new LiteSpeed Web Server installations from being properly added to the cage.

## cPanel User-End Plugin v1.0.0[¶](#cpanel-user-end-plugin-v100 "Permanent link")

*Released: July 19, 2018*

Bundled with [WHM Plugin v3.1.0](#whm-plugin-v310).

- [Feature] Initial release.

## WHM Plugin v3.0.2[¶](#whm-plugin-v302 "Permanent link")

*Released: July 6, 2018*

- [Improvement] Overly long unexpected output is now only shown in the log file.
- [Improvement] Improve compatibility with WordPress installations running on older PHP versions using "safe mode".
- [Bug fix] Fix a bug that occurred when uninstalling newer versions of the LSCWP plugin.
- [Bug fix] Fix a CageFS bug in the plugin install script that prevented the LSCWP plugin source directory from being added to the cage.
- [Bug fix] Fix a bug where scan operations were being treated as "discover new" operations.
- [Bug fix] WordPress installations with a known servername but no known document root are now handled properly.
- [Bug fix] Fix a bug where an unknown document root did not stop cache management operations from being performed.
- [Bug fix] Fix a refresh status bug preventing "missing document root" error status and message from being displayed.

## WHM Plugin v3.0.1.2[¶](#whm-plugin-v3012 "Permanent link")

*Released: June 27, 2018*

- [Improvement] To prevent the plugin from appearing unresponsive on initial visit, LSCWP is no longer automatically downloaded when an active version does not already exist.
- [Bug fix] Fix a CageFS bug during installation that prevented LSCWP from being enabled on a site using Cache Management actions.
- [Bug fix] Fix a CageFS bug that caused `cagefsctl --remount-all` to always be called when installing LiteSpeed Web Server or the LiteSpeed Web Server WHM plugin.
- [Bug fix] Fix a rare bug where an active LSCWP version could not be set if certain files had been modified or removed.

## WHM Plugin v3.0.1.1[¶](#whm-plugin-v3011 "Permanent link")

*Released: June 8, 2018*

- [Bug fix] Fix a WordPress fatal error encountered rarely when performing cache management operations.
- [Bug fix] Fix a bug introduced in v3.0.1 that caused installs affected by a Force Version Change operation to always be set to error status.

## WHM Plugin v3.0.1[¶](#whm-plugin-v301 "Permanent link")

*Released: June 6, 2018*

- [Improvement] Error status link should now open in a new tab.
- [Improvement] Improve Apache PID detection to work when spooling with LiteSpeed Web Server, and added a warning message when this case is detected.
- [Improvement] LiteSpeed Web Server is now automatically restarted after changing port offset.
- [Bug fix] Fix a bug preventing most Cache Management error status messages and links from displaying.
- [Bug fix] Fix a bug where PHP could hang past timeout time when performing actions in special cases.

## WHM Plugin v3.0.0[¶](#whm-plugin-v300 "Permanent link")

*Released: May 25, 2018*

- [Improvement] Add build info (current, new) when LSWS version is 5.2.2 or greater.
- [Bug fix] Fix a bug where force-reinstalling LSWS could cause the plugin to hang for more recent versions.
- [GUI] Update GUI and moved EasyApache 3-related options, Cache Root Setup, and Uninstall from the main page to the LiteSpeed Configuration page.
- [Refactor] Major refactoring.
- [Feature] Add an "unflag all" button to the Manage Cache Installations page.
- [Improvement] Improve detected LSCWP status accuracy.
- [Improvement] Improve cache management table to remember state when refreshing.
- [Improvement] Error flag is now a clickable error status linking to a page with more info on that error.

## WHM Plugin v2.2.4.3[¶](#whm-plugin-v2243 "Permanent link")

*Released: December 14, 2017*

- [Improvement] Better `timezonedb` detection of `php.ini` configurations that load multiple `timezonedb` modules.

## WHM Plugin v2.2.2.3[¶](#whm-plugin-v2223 "Permanent link")

*Released: October 17, 2017*

- [Improvement] LSCache cached files are now excluded from cPanel backups.
- [Improvement] Silenced some unneeded PHP warnings when running the `lscmctl` script.
- [Improvement] Installations are now flagged when detecting another cache plugin, even if LSCWP is not pre-installed.
- [Misc] Data file updated to v1.5; will require a re-scan.
- [Bug fix] Fix `scan -e` command not working.
- [Bug fix] Fix a bug where `zlib.output_compression` being turned on in a user's PHP ini file could cause issues.
- [Bug fix] Executing `lscmctl` should no longer move you to that script's directory.
- [GUI] Site URL is now displayed along with WP path in the "Cache Management" screen.
- [GUI] Add serial number to the "Check License Status" screen.

## WHM Plugin v2.2.2.2[¶](#whm-plugin-v2222 "Permanent link")

*Released: September 27, 2017*

- [Improvement] Improve enable logic to better handle cases where LSCWP is still "active" in the database after being manually removed without disabling/uninstalling first.
- [Improvement] Accounted for PHP binaries that may have turned off `register_argc_argv` in their PHP ini file.
- [Misc] Initial LSCWP version must now be selected, with a message being displayed on cache management pages when not set.
- [Bug fix] Fix a bug where 3rd-party cache detection was failing.
- [Bug fix] Fix a bug where in rare cases LSCWP-related files could be saved as the root user instead of the WP directory owner.
- [Bug fix] Fix a bug where in rare cases "Force Version Change" would never complete.
- [Bug fix] Fix a bug where trying to `wget` LSCWP files would hang if the connection was blocked.

## WHM Plugin v2.2.2.1[¶](#whm-plugin-v2221 "Permanent link")

*Released: September 11, 2017*

- [Misc] Suppressed PHP warnings when calling `file_get_contents()` without OpenSSL when using the `lscmctl` script to avoid confusion.
- [Bug fix] Fix a bug that prevented Scan from discovering installations that output PHP warnings when loading the WordPress environment.

## WHM Plugin v2.2.2[¶](#whm-plugin-v222 "Permanent link")

*Released: September 1, 2017*

- [Feature] A warning message will now be displayed if modules `ruid2` or `mpm_itk` are detected while LiteSpeed is active.
- [Improvement] File Protect will now be automatically disabled/enabled when switching between LiteSpeed and Apache to prevent permission issues.
- [Bug fix] Fix a bug where clicking on the WHM plugin from the side menu in cPanel v64 would open the plugin interface in the side menu.
- [Bug fix] Fix a bug that prevented "Version Management" features from working.
- [Major Improvement] Greatly improved the performance of various Cache Management actions.
- [Misc] Update data file to v1.4. (Requires a re-scan.)
- [Misc] WordPress installations that encounter errors during scan operations are now skipped.
- [Misc] Change default `lscmctl` PHP binary from system default to the pre-compiled LSWS admin PHP.
- [Bug fix] Fix a bug where the default error message was not being displayed.
- [Bug fix] Fix a bug where certain WordPress installations/information was not being removed when intended.
- [GUI] Improve formatting of `lscmctl` help output.

## WHM Plugin v2.2.1[¶](#whm-plugin-v221 "Permanent link")

*Released: August 2, 2017*

- [Improvement] Command execution information for the `lscmctl` script will now be logged to a new file under `lsws/logs/webcachemgr.log`.
- [Misc] Update data file to version 1.3.
- [Bug fix] Fix a bug in Force Version Change where installations with a 3rd-party cache plugin already installed were not being handled correctly.
- [Bug fix] Fix a bug in the `lscmctl` script where `exec()` being in PHP's `disable_functions` list would prevent command execution.
- [Bug fix] Fix a bug in the `lscmctl` script where paths containing symbolic links would be treated as different installations than their absolute path counterparts.
- [Bug fix] Fix a bug where `lscmctl` progress could display messily if the last installation encountered was invalid.
- [Bug fix] Fix a bug where Mass Disable might incorrectly timeout when called from the `lscmctl` script.
- [Bug fix] Fix a bug where an invalid version list would briefly continue to be used even after being regenerated.
- [Bug fix] Fix a bug where undiscovered WordPress installations could be passed into `lscmctl`, causing them to be added without necessary additional information.
- [Bug fix] Fix a required missing file bug that occurred with LSCWP versions 1.1.3 and 1.1.4.

## WHM Plugin v2.2.0[¶](#whm-plugin-v220 "Permanent link")

*Released: July 11, 2017*

- [Major Feature] Add Scan, Discover New, enable or disable, Mass enable or disable, Flag/Unflag, and Get Status commands to `lscmctl`.
- [Improvement] `lscmctl` will now check and set missing server and virtual host cache roots.
- [Improvement] Apache conf will now be created if it does not already exist when setting server cache root.
- [Improvement] Improve displayed error messages.
- [Improvement] Requesting a trial license is now more resistant to failure.
- [Improvement] Plugin interface is now loaded using AJAX.
- [Improvement] Improve plugin performance overall.
- [Misc] Update data file version to 1.2.
- [Bug fix] Fix a bug where CageFS would not be updated on server upgrade.
- [Bug fix] Fix a bug where CageFS was being updated more often than needed.
- [Bug fix] Fix a bug where a corrupt userdata file would sometimes be read and used.
- [Bug fix] Fix a bug where LSPHP would be built for unused `ea-php` versions. LSPHP is now installed as an `ea-php` dependency.
- [Bug fix] Fix a bug where an incorrect `.htaccess` path could be found for WordPress installations set up using symlinks.
- [Bug fix] Suppressed some unnecessary PHP warnings.
- [Bug fix] Fix a bug where a backup file would not always have the same permissions as the source file.
- [Bug fix] Fix a bug where in rare cases the assigned group of LSCWP files would be incorrect.
- [Bug fix] Fix a bug where a malformed header was sometimes used when loading the plugin, causing issues when using Cloudflare's HTTP/2 proxy.
- [GUI] Update icons.
- [GUI] Replace missing icons removed in recent WHM updates.
- [GUI] Improve the plugin display through WHM in all versions of WHM.
- [GUI] Add a new "error flag" to be displayed in place of the usual flag when a WordPress installation fails to enable LSCache with an "unknown error".

## WHM Plugin v2.1.16[¶](#whm-plugin-v2116 "Permanent link")

*Released: January 25, 2017*

- [GUI] Main page and icons have a new look.
- [Improvement] Improve accuracy of PHP binary selection when performing WordPress operations.
- [Improvement] Improve compatibility with some WordPress plugins.
- [Bug fix] Fix `timezonedb` detection issues.
- [Bug fix] Fix some small bugs that sometimes caused unnecessary PHP warnings.

## WHM Plugin v2.1.15[¶](#whm-plugin-v2115 "Permanent link")

*Released: December 15, 2016*

- [Improvement] Cache Management features are no longer usable before setting the cache root.
- [Improvement] Improve compatibility with WordPress installations containing security plugins and custom themes.
- [Improvement] Improve compatibility with older PHP versions when the system default PHP binary was used.
- [Improvement] Operations "stuck" due to connection errors should now time out sooner.
- [Bug fix] Fix a bug where LSPHP71 info was not properly removed when converting from EA4 to EA3.
- [Bug fix] Fix a bug where WordPress databases with non-UTF-8 encodings could cause theme issues when performing operations.
- [Bug fix] Fix a bug where the "Switch to LiteSpeed" page could sometimes hang.

## WHM Plugin v2.1.14.1[¶](#whm-plugin-v21141 "Permanent link")

*Released: November 10, 2016*

- [Bug fix] Fix a bug where changes to `timezonedb` would not be applied correctly in CageFS environments.

## WHM Plugin v2.1.14[¶](#whm-plugin-v2114 "Permanent link")

*Released: November 7, 2016*

- [Feature] Add new warning messages for missing or outdated EA4 PHP `timezonedb` extensions, as well as the ability to install/update them, significantly improving PHP performance.
- [Improvement] Add a timeout to all batch operations to prevent a bad batch from holding things up too long and causing a timeout.
- [Improvement] Change "Refresh Status (all)" to run in batches and added a progress screen.
- [Improvement] Improve compatibility with WordPress sites using security plugins.
- [Improvement] Improve accuracy of `.htaccess` detection.
- [Improvement] Improve "Warning" status detection.
- [Bug fix] Fix a bug where a scan batch not containing any WordPress installations would trigger "Refresh Status (all)" before continuing to the next batch.
- [Bug fix] Fix a bug where "Discover New" would not skip known document roots when searching for WordPress installs.
- [Bug fix] Fix a bug where older versions of our LiteSpeed Cache Plugin for WordPress would fail to disable properly and display an error.

## WHM Plugin v2.1.13[¶](#whm-plugin-v2113 "Permanent link")

*Released: September 28, 2016*

- [Security] Protected against the `target="_blank"` vulnerability.
- [Feature] Add a new possible "Warning" state for installs that have the LiteSpeed Cache plugin active but are not caching due to another cache plugin being detected as active.
- [Improvement] Improve error messages.
- [Improvement] Combined Mass Enable and Disable buttons.
- [Improvement] Output boxes are now smaller and scrollable when containing many messages.
- [Bug fix] Fix a bug that could cause `.htaccess` to not be updated correctly if WordPress site and home addresses did not match.
- [Bug fix] Fix a bug where refreshing status on a single installation or using checkbox selection would not save changes to the data file.

## WHM Plugin v2.1.12[¶](#whm-plugin-v2112 "Permanent link")

*Released: September 14, 2016*

- [Improvement] Add support for PHP 7.1.
- [Misc] Remove private cache Quick Configuration as it is no longer supported.
- [Feature] Add a Cache Root Setup feature.

## WHM Plugin v2.1.11[¶](#whm-plugin-v2111 "Permanent link")

*Released: August 19, 2016*

- [Improvement] Add support for detecting `wp-config.php` files located 1 directory above a WordPress installation's root directory.
- [Bug fix] Fix a bug that could cause duplicate entries in scan results.
- [Bug fix] Fix a bug where a corrupted manager data file would not be handled correctly.
- [Bug fix] Fix a bug where certain error messages were not being displayed after a forced version change.
- [Bug fix] Fix a bug where Version Manager was still clickable when a user did not have caching.
- [Bug fix] Fix a bug that could sometimes cause duplicate `<IfModule LiteSpeed>` tags in `.htaccess`.

## WHM Plugin v2.1.10[¶](#whm-plugin-v2110 "Permanent link")

*Released: August 4, 2016*

- [Feature] New Version Manager page added with the following features:
  - Change the current active LiteSpeed Cache for WordPress plugin version.
  - Force update all selected LiteSpeed Cache for WordPress plugin versions to a chosen version.
- [Improvement] LiteSpeed configuration will now be automatically converted to be EA4 compatible during installation if EA4 is detected.
- [Improvement] Add progress screens for Mass enable or disable operations.
- [Bug fix] Fix a bug that stopped scan from working properly when no scan data was present.
- [Bug fix] Fix a bug that would cause the flag file to not be set in some cases.
- [Bug fix] Fix a bug where in very rare cases the status of an installation would not be updated correctly after running Mass enable or disable.
- [Bug fix] Fix a bug that could cause a "Your LSPHP configuration may be incorrect for use with EasyApache 4" warning message to incorrectly appear after updating.

## WHM Plugin v2.1.9[¶](#whm-plugin-v219 "Permanent link")

*Released: July 5, 2016*

- [Feature] Add a "Scanning..." screen to show current scan progress.
- [Feature] Add support for handling WordPress multisite installations.
- [Improvement] Mass Enable now bypasses and flags installations that already have LiteSpeed Cache installed and disabled.
- [Improvement] Mass Disable now bypasses and flags WordPress multisite installations that have LiteSpeed Cache network-activated.

## WHM Plugin v2.1.8[¶](#whm-plugin-v218 "Permanent link")

*Released: June 17, 2016*

- [Feature] Add "Discover New" button.
- [Feature] Add LSPHP configuration verification and warning messages for EasyApache users.
- [Improvement] Auto-detect and repair configuration incompatibilities caused by migration between EA3 and EA4.
- [Improvement] enable or disable EasyApache Integration button no longer appears on EasyApache 4 installations as this is unnecessary.

## WHM Plugin v2.1.7[¶](#whm-plugin-v217 "Permanent link")

*Released: May 21, 2016*

- [Feature] Cache Management section for installing and enabling/disabling LiteSpeed Cache for WordPress on known WordPress installations.

## WHM Plugin v2.1.6[¶](#whm-plugin-v216 "Permanent link")

*Released: February 2, 2016*

- [Bug fix] Fix scripts when switching between Apache and LiteSpeed on CentOS 7 (where `systemd` is used).

## WHM Plugin v2.1.5[¶](#whm-plugin-v215 "Permanent link")

*Released: October 17, 2014*

- [Improvement] Auto-detect setuid settings and adjust to make them compatible with LSWS.

## WHM Plugin v2.1.4[¶](#whm-plugin-v214 "Permanent link")

*Released: August 6, 2014*

- [Improvement] Auto-detect EasyApache PHP source directory.
- [Improvement] Matching PHP is copied to `/usr/local/bin/lsphp` after successful builds. (Improves compatibility with CloudLinux PHP Selector.)

## WHM Plugin v2.1.3[¶](#whm-plugin-v213 "Permanent link")

*Released: April 23, 2014*

- [Bug fix] Updating PHP will now correctly update CageFS skeletons.
- [Bug fix] Create a workaround in response to PHP bug #66842 (latest version of PHP unable to `make install`).

## WHM Plugin v2.1.2[¶](#whm-plugin-v212 "Permanent link")

*Released: November 18, 2013*

Bundled with [LSWS 4.2.5](#lsws-425).

- [Bug fix] Fix bug causing terms of service to not appear correctly.

## WHM Plugin v2.1.1[¶](#whm-plugin-v211 "Permanent link")

*Released: November 12, 2013*

Bundled with [LSWS 4.2.5](#lsws-425).

- [Bug fix] Fix bug causing the WHM Plugin to appear unregistered.

## WHM Plugin v2.1[¶](#whm-plugin-v21 "Permanent link")

*Released: October 30, 2013*

Bundled with [LSWS 4.2.5](#lsws-425).

- [Major Feature] Add one-click trial key request from the plugin.
- [GUI] Change look and feel to match new WHM.
