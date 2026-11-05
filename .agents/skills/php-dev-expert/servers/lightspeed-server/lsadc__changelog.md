# Changelog | LiteSpeed Web ADC | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsadc/changelog/

---

# LiteSpeed Web ADC changelog[¶](#litespeed-web-adc-changelog "Permanent link")

Note

We do our best to update this changelog in a timely manner. However, if a version is missing, you can always find the release announcement in [our LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users).

Also on this page: - [ZeroConf changelog](#whm-webadc-zeroconf) - [LiteSpeed Ingress Controller changelog](#litespeed-ingress-controller)

## Version 3.4.0[¶](#version-340 "Permanent link")

*Released: August 3, 2026*

- [Feature] Added Anubis proof-of-work support.
- [Feature] Added ALTCHA CAPTCHA support.
- [Feature] Added Zstandard compression support.
- [Feature] Added background cache refresh support.
- [Feature] Added new UI for WebAdmin management console.
- [Feature] Strengthened HTTP/2 and HTTP/3 resource abuse protection.
- [Bug fix] Included all bug fixes applied to 3.3.x releases.

## Version 3.3.3[¶](#version-333 "Permanent link")

*Released: July 15, 2026*

- [Security] Extensive general code hardening.
- [Feature] Protected against HTTP/2 and HTTP/3 stream flood abuse.
- [Feature] Added Bun support for Node.js applications.
- [Feature] Removed HTTP/2 and HTTP/3 server push support.
- [Improvement] Strengthened HTTP/2 and HTTP/3 header validation.
- [Improvement] Hardened HTTP/2 and HTTP/3 protocol implementation.
- [Improvement] Disabled SHA-1 signing algorithm for TLSv1.2 handshake.
- [Tuning] Updated QUIC Alt-Svc to advertise `h3` and `h3-29` only by default.

## Version 3.3.2[¶](#version-332 "Permanent link")

*Released: April 9, 2026*

- [Security] Addressed remote exploit vulnerabilities in HTTP/3 engine.
- [Security] Addressed request smuggling issue for HTTP/2.
- [Security] Added `UnsafeAllow3F` rewrite rule flag to address unsafe `%3f` encoded URLs.
- [Tuning] Improved access logging.
- [Tuning] Improved Googlebot User-Agent detection for different services.
- [Bug fix] Addressed various corner cases in mod\_security, HTTP/2, and HTTP/3.

## Version 3.3.1[¶](#version-331 "Permanent link")

*Released: August 4, 2025*

- [Improvement] Improved HTTP/2 engine to efficiently block stream reset attacks and reduce memory usage.
- [Improvement] Reduced cache storage consumption by avoiding caching responses to crawlers.
- [Improvement] Added IPv6 support for internal HTTP fetch.
- [Improvement] Added ability to log RTT and bandwidth in access log.
- [Improvement] Tweak 4xx/5xx bot detection.
- [Improvement] Added ability to remap vhosts via rewrite rule.
- [Security] Fixed a memory leak in HTTP/3 protocol.
- [Bug fix] Addressed a few mod\_security engine issues related to `SecRemoteRule`, `inspectFile`, `SecDefActions`, and other items.
- [Bug fix] Various fixes and tuning changes in request handling, caching, and logging.

## Version 3.3.0[¶](#version-330 "Permanent link")

*Released: February 14, 2025*

- [Feature] Improved HTTP/2 with stronger anti-DDoS capabilities.
- [Feature] HTTP/2 and HTTP/3 stream priority adjustment.
- [Improvement] Fine-tuned HTTP/2 implementation with lower memory usage.
- [Improvement] Reduced cost of handling TCP slowloris attack.
- [Security] Improved HTTP/3 engine performance, security, and anti-DDoS capabilities.
- [Bug fix] Fixed various mod\_security engine issues.
- [Bug fix] Increased HTTP/1.1 protocol validation strictness.
- [Bug fix] Various fixes and tuning changes in request handling, caching, and logging.

## Version 3.2.2[¶](#version-322 "Permanent link")

*Released: April 3, 2024*

- [Feature] Added chunked encoding support for proxying request body to backend.
- [Feature] Added cache vary on request header value; automatically vary on header `X-Http-Method-Override`.
- [Improvement] Applied server-level log rotation setting to ModSec audit log.
- [Bug fix] Minor bug fixes in HTTP/3 implementation.

## Version 3.2.1[¶](#version-321 "Permanent link")

*Released: February 27, 2024*

- [Feature] Added hCaptcha support for reCAPTCHA validation.
- [Bug fix] Addressed a crash related to `SecRemoteRules` handling.
- [Bug fix] Addressed a rare corner case causing HTTP/3 responses to hang.

## Version 3.2[¶](#version-32 "Permanent link")

*Released: December 4, 2023*

- [Feature] Updated HTTP/3 implementation to support QUICv2 protocol.
- [Feature] mod\_security engine now has an option to use RE2 instead of the PCRE regex engine.
- [Feature] Added HEAD-request caching.
- [Improvement] Added missing access log format following Apache spec.
- [Improvement] Added virtual host level max connections limit per IP.
- [Security] Stricter request header validation.
- [Bug fix] Minor bug fixes to cache engine, mod\_security engine, and request handling.

## Version 3.1.7[¶](#version-317 "Permanent link")

*Released: December 9, 2022*

- [Feature] Added reCAPTCHA trigger from mod\_security via `verifycaptcha` environment variable.
- [Feature] Added reCAPTCHA verification timeout.
- [Misc] Isolate ZeroConf cache roots per domain even if sharing the same directory.
- [Improvement] Increased BF limit to 10 after a successful reCAPTCHA solve to avoid cases where a low BF limit could block access to the login page.
- [Misc] Added type-specific cache tags for static content.
- [Improvement] Improved mod\_security JSON audit log with more rule metadata.
- [Improvement] Reduced false positives for anti-DDoS detection based on status code.
- [Improvement] Added `x-frame-options` header for reCAPTCHA page.
- [Bug fix] Addressed HTTP/3 corner cases, memory leaks, and high CPU usage bugs.
- [Bug fix] Addressed a graceful restart bug in chroot environment.
- [Bug fix] Addressed broken bcrypt verification for HTTP authentication.
- [Bug fix] Addressed a corner case when handling chunk-encoded data.
- [Bug fix] Addressed a corner case in async mod\_security engine.
- [Bug fix] Addressed HTTP/2 HPACK decoder corner cases.
- [Bug fix] Addressed ZeroConf not properly waiting for the whole request body, which sometimes resulted in API failures.
- [Bug fix] Addressed a corner case where a request could be restarted while in the middle of processing.
- [Bug fix] Addressed a case where multiple ZeroConf load balancers with multiple backends could interfere with load balancer strategies.
- [Bug fix] Changed SSL handshake timeout from request timeout value to 10 seconds to avoid hanging request issues.
- [Bug fix] Other fixes to improve overall server performance and stability.

## Version 3.1.6[¶](#version-316 "Permanent link")

*Released: May 11, 2022*

- [Security] Addressed a crash and memory leak in HTTP/3 implementation.
- [Improvement] Better cache storage cleanup for purged pages.
- [Bug fix] Avoided sending multiple cookie headers in proxy requests to backend.
- [Bug fix] Block request header `transfer-encoding: chunked` for HTTP/2 and HTTP/3.
- [Bug fix] Better cache vary support for static content.
- [Bug fix] Addressed a few random crashes.

## Version 3.1.5[¶](#version-315 "Permanent link")

*Released: February 24, 2022*

- [Feature] Added "Failover" load balancing strategy.
- [Improvement] Added new configuration option to control cache vary for static content.
- [Improvement] Better stale cache purge handling.
- [Improvement] Auto whitelist QUIC.cloud and Jetpack IPs.
- [Improvement] Better backend ping control.
- [Improvement] Detected bot attacks by bad status code.

## Version 3.1.3[¶](#version-313 "Permanent link")

*Released: November 12, 2021*

- [Feature] WebSocket passthrough to backend cluster.
- [Feature] Added websocket proxy target support for rewrite rules.
- [Improvement] Improved HTTP/2 upload throughput.
- [Improvement] Improved HTTP/3 upload throughput.
- [Improvement] Improved HTTP/3 DPLPMTUD support.
- [Bug fix] Addressed HTTP/3 handshake failures.
- [Bug fix] Addressed an HTTP/1.1 request-body chunk-encoding corner case.
- [Bug fix] Throttle unnecessary LSCache purges generated by LSCWP.
- [Bug fix] Other minor bug fixes and improvements.

## Version 3.1.2[¶](#version-312 "Permanent link")

*Released: September 21, 2021*

- [Improvement] Made `max_conn` configurable at vhost level through ZeroConf API.
- [Bug fix] Addressed a few issues with asynchronous mod\_security engine.
- [Bug fix] Improved load balancing algorithm to distribute load evenly among backends.
- [Bug fix] Properly handle POST requests without `Content-Length` header in HTTP/2 and HTTP/3 streams.
- [Bug fix] Addressed a few issues with handling for HTTP/3 backends.
- [Bug fix] Cache engine should no longer purge again when serving a cached page with purge headers.
- [Bug fix] Other minor bug fixes and improvements.

## Version 3.1.1[¶](#version-311 "Permanent link")

*Released: July 8, 2021*

- [Bug fix] Addressed a Chrome HTTP/3 connection timeout issue for long running scripts.
- [Bug fix] Addressed a random crash with asynchronous mod\_security engine.
- [Bug fix] Resolve a problem with purging by URL.
- [Bug fix] Addressed a crash when handling decoded HTTP/2 headers.
- [Bug fix] Detected dead HTTP/2 connections during server cooldown.
- [Bug fix] Improved request/response header name validation to avoid HTTP/2 and HTTP/3 protocol violations.
- [Bug fix] Minor tweaks to HTTP/3 protocol.

## Version 3.1[¶](#version-31 "Permanent link")

*Released: June 7, 2021*

- [Feature] HTTP/3 v1 support with DPLPMTUD, adaptive congestion control, delayed ACK, and zero-copy packetization.
- [Feature] Asynchronous mod\_security engine.
- [Feature] Cache engine POST request caching capability.
- [Feature] Added support for for secure websocket backends (`wss://`).
- [Feature] ModSecurity JSON audit log.
- [Feature] ModSecurity scan response body support.
- [Feature] ModSecurity persistent collection SHM storage.
- [Feature] Server level header manipulation.

## Version 3.0.3[¶](#version-303 "Permanent link")

*Released: March 11, 2021*

- [Tuning] Added LB configurations and ping interval config for ZeroConf.
- [Tuning] Increased cache object size limit from 10MB to 100MB.
- [Tuning] Logged reason for reCAPTCHA trigger.
- [Bug fix] Updated lsquic to v2.29 with improved HTTP/3 performance and stability.
- [Bug fix] Purge by URL no longer interferes with purge by tag with a leading `/`.
- [Bug fix] Addressed random blank cached page caused by conditional fetching of stale cache from backend.
- [Bug fix] Addressed content corruption for ESI includes.
- [Bug fix] Used THROTTLE as the default mode for WordPress brute force protection.
- [Bug fix] Followed connection close response header for HTTP/1.1 proxy connections.

## Version 3.0.2[¶](#version-302 "Permanent link")

*Released: February 9, 2021*

- [Bug fix] Updated lsquic to v2.27 with improved HTTP/3 performance and stability.
- [Bug fix] Improved WordPress brute force protection with reCAPTCHA.
- [Bug fix] Addressed hanging caused by HTTP/1.1 chunk encoding.
- [Bug fix] Corrected truncated response body due to ESI + HTTP/2.
- [Bug fix] Improved ESI parser to handle improperly escaped ESI directives.
- [Bug fix] TLS session ticket timeout now defaults to 1 hour.
- [Bug fix] Access logging delay is avoided when AIO logging is enabled.
- [Bug fix] mod\_security `@rx` operator is able to scan multi-line input now.
- [Bug fix] `$VH_DOMAIN` in vhost template configuration is now supported.
- [Bug fix] Addressed a few minor memory leaks.

## Version 3.0.1[¶](#version-301 "Permanent link")

*Released: October 29, 2020*

- [Feature] Enabled ESI combine request for WordPress cache.
- [Feature] Added option to purge cache based on disk space.
- [Feature] Added support for using `X-Real-IP` header for client IP.
- [Improvement] Cache engine now forwards vary value to backend.
- [Bug fix] Addressed various slow memory leaks.
- [Bug fix] Addressed various issues in IETF QUIC (HTTP/3) implementation.
- [Bug fix] Addressed various issues in HTTP/2 implementation.
- [Bug fix] Addressed various issues in HTTP/2 and HTTP/3 client connections to backend.
- [Bug fix] Released unneeded resource for firewall controller process.

## Version 3.0[¶](#version-30 "Permanent link")

*Released: June 30, 2020*

- [Feature] Added support for for HTTP/3 drafts 27, 28, and 29.
- [Feature] Added POST-request caching support.
- [Feature] End-to-end HTTP/1, HTTP/2, and HTTP/3 load balancing.
- [Feature] New configuration options `bindIpv6Only`, `reverseDnsLookup`, `verifyGoogleBot`, `forceSecureCookie`, `purgeNoHitTimeout`, and `sslDefaultCiphers`.
- [Tuning] Complete rewrite of HTTP/2 engine with more efficient header handling when routing requests using HTTP/2 and HTTP/3.
- [Improvement] reCAPTCHA handling now avoids hijacking backend server initiated verification.
- [Bug fix] Addressed bugs in various modules (mod\_security, SHM, cache, ESI, and ZeroConf).

## Version 3.0 RC3[¶](#version-30-rc3 "Permanent link")

*Released: June 22, 2020*

- [Feature] HTTP/3 draft 29 support.
- [Feature] Added POST-request caching support.
- [Feature] "Use Client IP in Header" setting can now be configured to use the last IP listed in the `X-Forwarded-For` header (for servers behind AWS ELB).
- [Bug fix] Corrected a SHM memory allocation issue.
- [Bug fix] Invisible reCAPTCHA now works properly with IE 11 browser.

## Version 3.0 RC2[¶](#version-30-rc2 "Permanent link")

*Released: June 9, 2020*

- [Feature] Added support for HTTP/3 draft 28.
- [Improvement] Enhanced HTTP/2 performance.
- [Improvement] Enhanced cache engine purge by URL implementation.
- [Bug fix] Squashed some minor proxy header handling bugs.
- [Bug fix] Prevent output corruption by ESI engine.
- [Bug fix] No longer force cache revalidation when caching a static entry.

## Version 3.0 RC1[¶](#version-30-rc1 "Permanent link")

*Released: May 22, 2020*

- [Major Feature] Added support for HTTP/2 proxy backend.
- [Feature] Added new configuration options `bindIpv6Only`, `reverseDnsLookup`, `verifyGoogleBot`, `forceSecureCookie`, `purgeNoHitTimeout`, and `sslDefaultCiphers`.
- [Major Improvement] Refactored and optimized HTTP/2 and HTTP/3 engines.
- [Improvement] Improved automatic cache storage cleanup.
- [Bug fix] Fixed repeated refreshing in cache stale refresh logic.
- [Bug fix] Fixed a cache response by MIME type bug.
- [Bug fix] Fixed various minor bugs in mod\_security engine.
- [Bug fix] Fixed minor bugs in HTTP/3 engine.

## Version 2.7[¶](#version-27 "Permanent link")

*Released: March 30, 2020*

- [Feature] Made mod\_security engine fully asynchronous.
- [Feature] Added support for transparent proxies.
- [Improvement] Updated HTTP/3 support to h3-27.

## Version 2.6.1[¶](#version-261 "Permanent link")

*Released: March 25, 2020*

- [Feature] Added support for QUIC/HTTP/3 versions up to Q050, h3-25, h3-27.
- [Feature] Set `X_SPDY` environment for IETF QUIC connection.
- [Feature] Allowed using cluster name in PROXY target URL. It has a higher priority than proxy worker.
- [Feature] Allowed rewrite rule to update `Proxy-Host` without using PROXY action.
- [Security] Improved access security for Web Admin.
- [Security] Disabled TLS 1.1 for the default setting.
- [Tuning] Set RBL DNS cache to 60 seconds.
- [Bug fix] Fixed a bug where QUIC client connections Do not work with multiple backends.
- [Bug fix] Fixed bugs that could cause the mod\_security engine to hang.
- [Bug fix] Fixed bugs in the mod\_security configuration parser.
- [Bug fix] Tuned various mod\_security variables to be more accurate.
- [Bug fix] Fixed bugs in query string decoding.
- [Bug fix] Fixed memory leak in replication logic.
- [Bug fix] Fixed a bug that caused font files to not be cached.
- [Bug fix] Fixed a bug in the ESI handler that caused ESI requests to hang.

## Version 2.6[¶](#version-26 "Permanent link")

*Released: October 24, 2019*

- [Feature] Updated HTTP/3 with draft 23 support.
- [Feature] Added BBR congestion control for HTTP/3, QUIC.
- [Feature] Added HTTP/3 and QUIC proxy client for HTTPS proxy backends.
- [Improvement] HTTP/2 performance improvements.
- [Improvement] Asynchronous mod\_security offloading with multi-threading.

## Version 2.5.1[¶](#version-251 "Permanent link")

*Released: August 15, 2019*

- [Security] Addressed recent [HTTP/2 DoS advisories](https://github.com/Netflix/security-bulletins/blob/master/advisories/third-party/2019-002.md). Fixed CVE-2019-9516 "0-Length Headers Leak" vulnerability. Completely blocks unaffected attacks: CVE-2019-9511 "Data Dribble", CVE-2019-9512 "Ping Flood", CVE-2019-9513 "Resource Loop", CVE-2019-9514 "Reset Flood", CVE-2019-9515 "Settings Flood", CVE-2019-9517 "Internal Data Buffering", and CVE-2019-9518 "Empty Frames Flood".
- [Feature] Updated HTTP/3 support to Internet Draft 22.
- [Improvement] reCAPTCHA engine has been improved to reduce false positives.
- [Bug fix] Fixed a regression that affected the handling of HEAD requests.

## Version 2.5[¶](#version-25 "Permanent link")

*Released: July 30, 2019*

- [Major Feature] Added support for experimental HTTP/3 draft 20.
- [Feature] HTTPS handshake offloading improves HTTPS handshake speed and avoids clogging the server's main event loop.
- [Feature] `SO_REUSEPORT` support improves multi-worker scalability for high-traffic deployments.
- [Feature] HTTPS certificate compression reduces the size of HTTPS handshake exchange data.
- [Feature] Added support for Q046 in QUIC engine.
- [Feature] Added smart anti-DDoS protection for attacks targeting QUIC UDP port.
- [Improvement] More reliable HA replication.
- [Improvement] Bug fixes and enhancement to ZeroConf API.

## Version 2.4[¶](#version-24 "Permanent link")

*Released: January 3, 2019*

- [Feature] QUIC 044 support.
- [Feature] QUIC proxy backend support for backend communication through QUIC.
- [Feature] New load balancing strategy: `LB_ST_FASTER_RESP`.
- [Feature] reCAPTCHA verification for DDoS attack mitigation.
- [Feature] Intelligent botnet detection and blocking through firewall.
- [Major Improvement] HTTP/2 performance has been improved with a better header compression/decompression workflow.
- [Bug fix] All bug fixes from ADC v2.3 incremental builds included.

## Version 2.3[¶](#version-23 "Permanent link")

*Released: August 9, 2018*

- [Major Feature] Added dynamic Brotli compression.
- [Improvement] Improved QUIC engine with Google QUIC v43 support, improved performance.
- [Improvement] Improved HA/replication support.
- [Improvement] Improved ZeroConf support.
- [Improvement] Improved cache engine with automatic static asset caching and updating.
- [Improvement] Added MaxMind DB support.
- [Improvement] Improved HTTP/2 performance.
- [Improvement] Added TLSv1.3 draft 28 support.

## Version 2.2[¶](#version-22 "Permanent link")

*Released: May 9, 2018*

- [Feature] Easy cluster management with ZeroConf API and cPanel integration.
- [Improvement] QUIC engine has been improved with better performance and scalability.
- [Improvement] PageSpeed support has been improved.
- [Improvement] mod\_security engine has been improved with better performance and compatibility.
- [Bug fix] Fixed a bug that sometimes caused IPv6 listeners to be unable to restart.

## Version 2.1.3[¶](#version-213 "Permanent link")

*Released: March 2, 2018*

- [Improvement] Improved QUIC engine performance and download speeds.
- [Bug fix] Fixed a bug that caused a file descriptor leak in the cache engine.
- [Bug fix] Fixed an SHM corruption bug.
- [Bug fix] Fixed a bug that caused a file descriptor leak when `SecRemoteRule` was used.
- [Bug fix] Fixed a bug that sometimes caused IPv6 listeners to be unable to restart.

## Version 2.1.2[¶](#version-212 "Permanent link")

*Released: December 21, 2017*

- [Feature] Improved cache engine with capability to selectively drop certain query string value pairs.
- [Feature] Built-in WordPress brute force protection.
- [Feature] Added capability to modify response headers through context level configuration.
- [Improvement] Improved QUIC engine performance.

## Version 2.1[¶](#version-21 "Permanent link")

*Released: July 11, 2017*

- [Major Feature] Added QUIC support, compatible with Q035, Q037.
- [Feature] Switched from OpenSSL to BoringSSL with TLSv1.3 support.
- [Feature] Added `TCP_FASTOPEN` support.
- [Feature] The ZeroConf API supports direct, automated third-party management of Web ADC configuration.
- [Feature] Added support for IP2Location to convert IP to geographic location.
- [Feature] Added support for `SecRemoteRules` and improved performance of mod\_security engine.

## Version 2.1 RC1[¶](#version-21-rc1 "Permanent link")

*Released: June 13, 2017*

- [Major Feature] Added QUIC support, compatible with Q035, Q037.
- [Feature] Switched from OpenSSL to BoringSSL with TLSv1.3 support.
- [Feature] Added `TCP_FASTOPEN` support.

## Version 2.0.2[¶](#version-202 "Permanent link")

*Released: February 1, 2017*

- [Security] Removed DES-CBC3-SHA from default cipher suite to avoid failing current PCI scan.
- [Security] Upgraded bundled OpenSSL library to 1.0.2k.
- [Improvement] Improved mod\_security log messages to use variable values.
- [Bug fix] Fixed a bug in SHM hash table that caused data corruption and infinite looping.
- [Bug fix] Fixed a bug in cache object replication that caused long delays for graceful restart.
- [Bug fix] Minor bug fixes in HTTP/2, the ESI cache engine, and the mod\_security engine.

## Version 2.0.1[¶](#version-201 "Permanent link")

*Released: November 10, 2016*

- [Major Improvement] Improved LiteMage first page load speed for new visitors by avoiding going through the backend.
- [Improvement] Improved cache purging capability: private cache entries can now be purged with public tags and multiple cache purge response headers are accepted.
- [Bug fix] Improved server stability with minor bug fixes.

## Version 2.0[¶](#version-20 "Permanent link")

*Released: June 22, 2016*

- [Feature] Added PageSpeed support.
- [Feature] Added Magento LiteMage support.
- [Improvement] Improved cache engine.
- [Improvement] Improved server stability.
- [Misc] Upgraded bundled OpenSSL to 1.0.2h.

## Version 2.0 RC3[¶](#version-20-rc3 "Permanent link")

*Released: January 29, 2016*

- [Improvement] Improved WebAdmin real-time statistics.
- [Improvement] Improved HA replication.
- [Improvement] Improved stateful session tracking.
- [Improvement] Improved server stability.
- [Misc] Upgraded bundled OpenSSL to 1.0.2f.

## Version 2.0 RC2[¶](#version-20-rc2 "Permanent link")

*Released: November 19, 2015*

- [Improvement] Improvements to session data replication.
- [Improvement] Improvements to mod\_security engine.
- [Bug fix] Minor bug fixes.

## Version 2.0 RC1[¶](#version-20-rc1 "Permanent link")

*Released: October 14, 2015*

- [Feature] Added HTTP/2 support.
- [Feature] Added High Availability support through integration with Keepalived/CARP and session data replication.
- [Feature] Added page cache support.
- [Feature] Updated ModSecurity engine to support `@rbl` and `@inspectfile` operators.
- [Feature] Added multi-worker processes support with shared internal states to take advantage of multi-CPU and multi-core SMP servers.
- [Feature] Added shared SSL session cache and SSL ticket synchronization.
- [Feature] Added multi-certificate support to use RSA, DSA, and ECC certificates for the same domain.
- [Feature] Added SSL SNI mass hosting configuration.

## Version 1.8[¶](#version-18 "Permanent link")

*Released: October 16, 2014*

- [Security] Upgraded OpenSSL to 1.0.1j to address vulnerabilities in 1.0.1i.
- [Security] Disabled SSLv3 by default for HTTPS virtual hosts.
- [Feature] Added support for TLSv1.1 and TLSv1.2.
- [Misc] Ended Solaris, FreeBSD 4 and 5, and Mac OS X support.

## Version 1.7[¶](#version-17 "Permanent link")

*Released: January 8, 2010*

- [Bug fix] Fixed a bug in WebAdmin Console that could not save certain configuration.
- [Feature] Displayed blocked IP in WebAdmin Console.
- [Misc] Linked against OpenSSL 0.9.8l.
- [Improvement] Added `TCP_CORK` to minimize packet segmentation.

## Version 1.6[¶](#version-16 "Permanent link")

*Released: January 28, 2009*

- [Bug fix] Fixed a bug that caused HEAD requests to take a long time to finish.
- [Improvement] Passed through `deflate` response body.

## Version 1.5[¶](#version-15 "Permanent link")

*Released: December 10, 2008*

- [Bug fix] Fixed a bug that caused the server process to crash when one of the backend nodes failed to respond to a ping request.
- [Bug fix] Ignored blank response headers from the backend server.

## Version 1.4[¶](#version-14 "Permanent link")

*Released: October 1, 2008*

- [Improvement] IP to geolocation feature has been updated to match new changes in Apache `mod_geoip`.
- [Improvement] Added special handling to handle 1xx responses from proxied backend web servers.
- [Bug fix] Fixed a bug that caused Web ADC not to reload the license key after the key was updated.

## Version 1.3[¶](#version-13 "Permanent link")

*Released: June 30, 2008*

- [Bug fix] Fixed a bug that affected monthly lease-license updates.
- [Bug fix] Fixed a bug in request filter.

## Version 1.2[¶](#version-12 "Permanent link")

*Released: May 19, 2008*

- [Feature] Added automated license management.
- [Bug fix] Minor bug fixes in the HTTP engine core.

## Version 1.1[¶](#version-11 "Permanent link")

*Released: December 17, 2007*

- [Bug fix] Fixed various bugs in the core HTTP engine.
- [Improvement] Network throughput has been fine-tuned.
- [Feature] Many new features from the web server branch have been added.

## Version 1.0[¶](#version-10 "Permanent link")

*Released: June 4, 2007*

- Initial public release.

## LiteSpeed Ingress Controller[¶](#litespeed-ingress-controller "Permanent link")

### Version 0.2.6[¶](#version-026 "Permanent link")

*Released: May 21, 2024*

- [Feature] Added support for Gateway release 1.0.0.
- [Feature] Updated the HTTP/3 implementation has been updated to support the QUICv2 protocol.
- [Feature] mod\_security engine now has an option to use RE2 instead of the PCRE regex engine.
- [Feature] Added HEAD request caching.
- [Improvement] Added missing access log format following Apache spec.
- [Improvement] Added virtual host level max connections limit per IP.
- [Security] Stricter request header validation.
- [Bug fix] Fixed build error in 0.2.5 HTTP/3.
- [Bug fix] No longer reports a duplicate value when updating `HTTPRoute` status.
- [Bug fix] Minor bug fixes to cache engine, mod\_security engine, and request handling.

### Version 0.2.4[¶](#version-024 "Permanent link")

*Released: April 6, 2023*

- [Bug fix] Fixed a memory violation when data is taken from cache and the server is quite busy.
- [Bug fix] Fixed a memory leak processing SSL data.
- [Bug fix] Fixed a small bug in handling multiple headers with the same name.

### Version 0.2.3[¶](#version-023 "Permanent link")

*Released: January 17, 2023*

- [Feature] HTTP/3 support. To enable it you must specify in helm `--set options service.ports.http3=443,service.targetPorts.http3=443,containerPorts.http3=443`.
- [Feature] Gateway support extended feature in `HTTPRoute`, `spec.route.method`, which supports matching HTTP method (`GET`, `POST`, and other items.).
- [Improvement] Updated all code to operate correctly in the 0.6.0 beta environment.
- [Bug fix] Gateway `URLRewrite` is properly applied.
- [Bug fix] Detected when a small change between selections results in an incorrect worker being applied.

### Version 0.2.2[¶](#version-022 "Permanent link")

*Released: December 15, 2022*

- [Feature] Added support for a number of Gateway `HTTPRoute` extended features, including:
  - Matches: `Path`, `Type`: `RegularExpression`, where PCRE-compatible regular expressions are supported.
  - Filters:
    - `RequestRedirect`: New features include `Scheme`, `Hostname`, `Path`, `Port`, and `StatusCode`. `Path` can specify a `Type` of `ReplaceFullPath` (an absolute path) or `ReplacePrefixMatch` (a path which will add subdirectories), either of which can include PCRE regular expression replacement strings.
    - `URLRewrite`: `Hostname` and `Path`. `Hostname` can include a port, and `Path` can specify a `Type` of `ReplaceFullPath` (an absolute path) or `ReplacePrefixMatch` (a path which will add subdirectories).
- [Improvement] You can no longer use the released set of Gateway CRDs to run Gateway until the beta is released. The LiteSpeed Ingress Controller uses the latest beta definitions and should be installed using `./gateway-load.sh` in the samples package and unloaded with `./gateway-unload.sh`.

### Version 0.2.1[¶](#version-021 "Permanent link")

*Released: December 2, 2022*

- [Improvement] Added support for detecting the load of the Gateway CRDs after the controller is loaded. However, Gateway CRDs should not be unloaded without unloading the controller.
- [Improvement] Additional changes for Kubernetes Gateway v1beta1.
- [Bug fix] Fixed a memory leak in normal operations.

### Version 0.2.0[¶](#version-020 "Permanent link")

*Released: November 10, 2022*

- [Feature] Kubernetes Gateway API support. See the [Gateway API documentation](https://gateway-api.sigs.k8s.io/) for a full description of the feature.
- [Bug fix] Adjusted helm to allow proper deletion of configmaps.
- [Bug fix] Added support for either controller name or ingress class name as the ingress class name in annotations, which addresses a cert-manager issue.
- [Bug fix] Fixed a bug in priority management.

### Version 0.1.30[¶](#version-0130 "Permanent link")

*Released: September 30, 2022*

- [Bug fix] Merged in latest load balancer fixes to address licensing and a memory leak in HTTP/3.

### Version 0.1.29[¶](#version-0129 "Permanent link")

*Released: September 16, 2022*

- [Improvement] Helm install includes support for auto-scaling.
- [Improvement] Caching is enabled by default.

### Version 0.1.28[¶](#version-0128 "Permanent link")

*Released: August 26, 2022*

- [Bug fix] Fixed a deadlock bug which resulted in a delay in the implementation and activation of Ingress configuration updates.
- [Bug fix] No longer required an `IngressClass` specification for the default `IngressClass` to operate correctly.

### Version 0.1.27[¶](#version-0127 "Permanent link")

*Released: August 23, 2022*

- [Bug fix] Added proper support for multiple backends with different contexts for the same domain.
- [Bug fix] Added support for `PathType` `ImplementationSpecific` identically to `PathPrefix` to allow cert-manager to work correctly for automatic certificate verification.

### Version 0.1.26[¶](#version-0126 "Permanent link")

*Released: June 21, 2022*

- [Feature] New `prometheus-remote` Prometheus arguments which can be used to have Prometheus push stats to Grafana Cloud.
- [Feature] Removed all references to v1beta1 to support Kubernetes v1.22 and above.
- [Bug fix] Fixed helm deployment.

### Version 0.1.25[¶](#version-0125 "Permanent link")

*Released: June 17, 2022*

- [Feature] Added a built-in Prometheus metrics exporter. Must be enabled by the Ingress Controller argument `enable-metrics` to be activated. Prometheus can be installed on the service pod as well using the argument `install-prometheus`.
- [Feature] Ingress Controller argument `--run-before-lb='commands'` can specify any number of commands that will be run before the load balancer starts.
- [Feature] New Ingress Controller argument `config-service-port` can be used to expose the config port without the use of helm configuration.
- [Bug fix] Licensing documented and functions correctly.
- [Bug fix] Correctly apply secrets even for secrets missing a name.
- [Bug fix] Correctly apply command line `lslb-config-map-prefix`.

### Version 0.1.24[¶](#version-0124 "Permanent link")

*Released: May 24, 2022*

- [Feature] Added regular expressions to advanced deployments with the new annotation `litespeedtech.com/hostx.servicex.weight`.
- [Bug fix] For an advanced deployment, if you specify the same host twice, it will correctly use the first one rather than generate an incorrect ZeroConf definition.
- [Bug fix] If you change the definition, the replaced definition will not be cached for new session use, though existing ones will still finish correctly.

### Version 0.1.23[¶](#version-0123 "Permanent link")

*Released: May 19, 2022*

- [Feature] Red/Blue and Canary deployments using annotations.
- [Bug fix] `context_list` is properly passed in ZeroConf between the Go program and load balancer, resulting in contexts now working correctly.
- [Bug fix] A missing exact context entry is now correctly added into contexts.
- [Bug fix] Used and document `vhostPerDomain` correctly.

### Version 0.1.22[¶](#version-0122 "Permanent link")

*Released: May 6, 2022*

- [Feature] WebAdmin interface is now available, including real-time stats and template WebADC configuration. Template support provides access to the Web Application Firewall.
- [Feature] Optional support for configuration port in helm definition (`service.ports.config`).
- [Bug fix] Reduced restarts within health checks.

### Version 0.1.21[¶](#version-0121 "Permanent link")

*Released: April 15, 2022*

- [Feature] Added support for both nginx and generic rewrite annotations.
- [Bug fix] Correctly support multiple domains for an SSL certificate.

## WHM WebADC ZeroConf[¶](#whm-webadc-zeroconf "Permanent link")

### Version 0.7.8[¶](#version-078 "Permanent link")

*Released: July 12, 2023*

- [Bug fix] Tried to apply config changes to all ADCs even if one fails.

### Version 0.7.7[¶](#version-077 "Permanent link")

*Released: May 25, 2023*

- [Bug fix] Fixed PHP warnings.

### Version 0.7.6[¶](#version-076 "Permanent link")

*Released: April 24, 2023*

- [Bug fix] Fixed a few PHP errors.

### Version 0.7.5[¶](#version-075 "Permanent link")

*Released: March 14, 2023*

- [Bug fix] Do not properly handle multiple IPs in VHost config.

### Version 0.7.4[¶](#version-074 "Permanent link")

*Released: January 18, 2022*

- [Improvement] Removed dependency on `Scalar::Util::Numeric`.

### Version 0.7.3[¶](#version-073 "Permanent link")

*Released: November 15, 2021*

- [Bug fix] Used `Cpanel::Binaries::path` if available.

### Version 0.7.2[¶](#version-072 "Permanent link")

*Released: September 24, 2021*

- [Feature] Added ability to configure max conns for each backend.
- [Improvement] Added support for NAT mode.

### Version 0.7[¶](#version-07 "Permanent link")

*Released: May 20, 2020*

- [Feature] Added Cluster IPs for server-wide and per-domain cluster configurations.
- [Improvement] Added hooks for SSL installation and cPanel addon/sub/parked domains.

### Version 0.6[¶](#version-06 "Permanent link")

*Released: January 7, 2020*

- [Bug fix] Switch to use `Cpanel::Binaries::get_binary_location`.

### Version 0.5[¶](#version-05 "Permanent link")

*Released: August 21, 2019*

- [Feature] Added logic to check for VHost templates within configurations.
- [Bug fix] Early builds of cPanel 82 have the `URL::Encode` module missing. Change to use the `Encode` core module instead.

### Version 0.4[¶](#version-04 "Permanent link")

*Released: January 7, 2019*

- [Feature] Introduced Force Update SSL — forces Web ADC to update to new SSL certificates.
