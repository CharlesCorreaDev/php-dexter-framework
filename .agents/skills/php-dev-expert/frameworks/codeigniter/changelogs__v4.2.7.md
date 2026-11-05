# Version 4.2.7 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.2.7.html

---

# Version 4.2.7[](#version-4-2-7 "Link to this heading")

Release Date: October 6, 2022

**4.2.7 release of CodeIgniter4**

## [SECURITY](#id1)[](#security "Link to this heading")

- *Secure or HttpOnly flag set in ConfigCookie is not reflected in Cookies issued* was fixed. See the [Security advisory GHSA-745p-r637-7vvp](https://github.com/codeigniter4/CodeIgniter4/security/advisories/GHSA-745p-r637-7vvp) for more information.
- Fixed a bug that prevents CSP headers from being sent when `Config\ContentSecurityPolicy::$autoNonce` is false.

## [BREAKING](#id2)[](#breaking "Link to this heading")

- The default values of the parameters in [`set_cookie()`](helpers__cookie_helper.md#set_cookie "set_cookie") and [`CodeIgniter\HTTP\Response::setCookie()`](outgoing__response.md#CodeIgniter\HTTP\Response::setCookie "CodeIgniter\HTTP\Response::setCookie") has been fixed. Now the default values of `$secure` and `$httponly` are `null`, and these values will be replaced with the `Config\Cookie` values.
- `Time::__toString()` is now locale-independent. It returns database-compatible strings like ‘2022-09-07 12:00:00’ in any locale.
- The Validation rule `Validation\Rule::required_without()` and `Validation\StrictRules\Rule::required_without()` parameters have been changed and the logic of these rule has also been fixed.

## [Message Changes](#id3)[](#message-changes "Link to this heading")

- Fixed typos in some items in `Language/en/Email.php`.
- Added missing item `valid_json` in `Language/en/Validation.php`.

## [Bugs Fixed](#id4)[](#bugs-fixed "Link to this heading")

See the repo’s
[CHANGELOG\_4.2.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/changelogs/CHANGELOG_4.2.md)
for a complete list of bugs fixed.
