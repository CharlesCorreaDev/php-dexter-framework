# Changelog | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/changelog/

---

# LiteSpeed Web Server Changelog[¶](#litespeed-web-server-changelog "Permanent link")

Note

We do our best to update this changelog in a timely manner. However, if a build is missing, you can always find the release announcement in [our LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users).

Check the currently installed build number:

```
cat lsws/BUILD
```

Update to the latest build:

```
/usr/local/lsws/admin/misc/lsup.sh -f -v 6.3.7
```

## Version 6.4 Release Candidates[¶](#version-64-release-candidates "Permanent link")

### RC2[¶](#rc2 "Permanent link")

#### Build 4[¶](#v6-4-0-rc2-build-4 "Permanent link")

*Released: October 23, 2026*

- [Bug fix] Fix an IPv6 regression caused by a disabled WebAdmin Console.

#### Build 3[¶](#v6-4-0-rc2-build-3 "Permanent link")

*Released: October 22, 2026*

- [Security] Update the `admin_php` binary for CVE-2026-109618 and CVE-2026-109619.
- [Security] Update the brotli library to v1.2.1 for CVE-2026-111497.
- [Security] Disable WebAdmin by default. Manual activation is required.
- [Bug fix] Fix an issue where Anubis and CAPTCHA configurations were mixed up.
- [Bug fix] Fix an SSI engine file size output format issue.
- [Bug fix] Fix a request parser `NUL` byte handling issue.
- [Bug fix] Update lsquic to v4.10.2.
- [Bug fix] Harden HTTP/2 protocol and header handling.

#### Build 2[¶](#v6-4-0-rc2-build-2 "Permanent link")

*Released: September 23, 2026*

- [Bug fix] Fix corner cases in `lsnode.js`.
- [Bug fix] Fix the regression affecting relative SSI includes.
- [Bug fix] Fix the long startup delay for detached external applications.
- [Bug fix] Fix the external application STDERR logging regression.
- [Bug fix] Fix intermittent 404/403 errors.
- [Bug fix] Fix intermittent PHP suEXEC failures.

#### Build 1[¶](#v6-4-0-rc2-build-1 "Permanent link")

*Released: September 16, 2026*

- [Security] Further harden `lscgid`.

#### Build 0[¶](#v6-4-0-rc2-build-0 "Permanent link")

*Released: September 14, 2026*

- [Security] Enhance `lscgid` request authentication and validation.
- [Security] Apply stronger validation of internal redirect URLs.
- [Security] Block setting of important internal-use environment variables from `.htaccess`.
- [Feature] Add JSON request body processing for ModSecurity engine.
- [Feature] Add `ctl:ruleRemoveTargetById` and `ctl:ruleRemoveTargetByTag` support for ModSecurity engine.
- [Feature] Enable post-quantum cryptography key exchange.
- [Bug fix] Address Anubis handling corner cases.
- [Bug fix] Include all bug fixes applied to 6.3.x releases.

### RC1[¶](#rc1 "Permanent link")

#### Build 2[¶](#v6-4-0-rc1-build-2 "Permanent link")

*Released: August 13, 2026*

- [Bug fix] Address an issue in Anubis sub-request handling.
- [Bug fix] Address an Anubis configuration issue.
- [Bug fix] Address Node.js application process management issue that leaves multiple worker processes running.
- [Bug fix] Address an ESI/SSI sub-request cancellation corner case.

#### Build 1[¶](#v6-4-0-rc1-build-1 "Permanent link")

*Released: August 3, 2026*

- [Bug fix] Allow `\` in query string for HTTP/2 and HTTP/3 request headers.
- [Bug fix] Address another HTTP/2 request body length corner case that caused `400` status codes from proxy backends.
- [Improvement] Support for multiple remote ACL URLs.

#### Build 0[¶](#v6-4-0-rc1-build-0 "Permanent link")

*Released: July 28, 2026*

- [Feature] Add Anubis proof-of-work support.
- [Feature] Add ALTCHA CAPTCHA support.
- [Feature] Add Zstandard compression support.
- [Feature] Add background cache refresh support.
- [Feature] Add new UI for WebAdmin management console.
- [Feature] Strengthen HTTP/2 and HTTP/3 resource abuse protection.
- [Bug fix] Include all bug fixes applied to 6.3.x releases.

## Version 6.3.7[¶](#version-637 "Permanent link")

### Build 6[¶](#v6-3-7-build-6 "Permanent link")

*Released: October 22, 2026*

- [Bug fix] Fix an IPv6 regression caused by a disabled WebAdmin Console.

### Build 5[¶](#v6-3-7-build-5 "Permanent link")

*Released: October 22, 2026*

- [Security] Update the `admin_php` binary for CVE-2026-109618 and CVE-2026-109619.
- [Security] Update the brotli library to v1.2.1 for CVE-2026-111497.
- [Security] Disable WebAdmin by default. Manual activation is required.
- [Bug fix] Fix an SSI engine file size output format issue.
- [Bug fix] Fix a request parser `NUL` byte handling issue.
- [Bug fix] Update lsquic to v4.10.2.
- [Bug fix] Harden HTTP/2 protocol and header handling.

### Build 4[¶](#v6-3-7-build-4 "Permanent link")

*Released: October 5, 2026*

- [Bug fix] Address `lsphp` process management issue under CageFS.
- [Bug fix] Address a corner case in handling the rewrite rule for EWWW Image Optimizer.
- [Bug fix] Fix minor bugs in `lsns` management scripts.

### Build 3[¶](#v6-3-7-build-3 "Permanent link")

*Released: September 23, 2026*

- [Bug fix] Fix corner cases in `lsnode.js`.
- [Bug fix] Fix the regression affecting relative SSI includes.
- [Bug fix] Fix the long startup delay for detached external applications.
- [Bug fix] Fix the external application STDERR logging regression.
- [Bug fix] Fix intermittent 404/403 errors.
- [Bug fix] Fix intermittent PHP suEXEC failures.

### Build 2[¶](#v6-3-7-build-2 "Permanent link")

*Released: September 16, 2026*

- [Security] Further harden `lscgid`.

### Build 1[¶](#v6-3-7-build-1 "Permanent link")

*Released: September 15, 2026*

- [Security] Address another corner case in internal redirect URL validation.

### Build 0[¶](#v6-3-7-build-0 "Permanent link")

*Released: September 11, 2026*

- [Security] Enhance `lscgid` request authentication and validation.
- [Security] Apply stronger validation of internal redirect URL.
- [Security] Block setting of important internal-use environment variables from `.htaccess`.
- [Feature] Enable post-quantum cryptography key exchange.
- [Improvement] Add support for the `MKCALENDAR` request method.
- [Bug fix] Address a race condition corner case for ModSecurity engine.
- [Bug fix] Address an internal URL cache corner case.
- [Bug fix] Improve Node.js process management to avoid lingering idle workers.
- [Bug fix] Address HTTP/3 idle connection timeout issue.
- [Bug fix] Address a namespace issue for natively configured vhost.
- [Bug fix] Address a corner case in SHM locking.

## Older versions[¶](#older-versions "Permanent link")

- [Version 6.3](lsws__changelog63.md)
- [Older release logs back to v5.3.3](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:changelog#version_622).
- [Older release logs back to v1.0](lsws__changelog__lsws__changelog-archive.md)
