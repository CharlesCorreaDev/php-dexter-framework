# Version 4.2.8 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.2.8.html

---

# Version 4.2.8[](#version-4-2-8 "Link to this heading")

Release Date: October 30, 2022

**4.2.8 release of CodeIgniter4**

## [Deprecations](#id1)[](#deprecations "Link to this heading")

- The third parameter `$returnResponse` of `CodeIgniter::handleRequest()` is deprecated.

## [Bugs Fixed](#id2)[](#bugs-fixed "Link to this heading")

- Fixed a bug when the `CodeIgniter\HTTP\IncomingRequest::getPostGet()` and `CodeIgniter\HTTP\IncomingRequest::getGetPost()` methods didn’t return values from the other stream when `index` was set to `null`.
- Fixed a bug when `binds` weren’t cleaned properly when calling `CodeIgniter\Database\Postgre::replace()` multiple times in the context.
- Fixed a bug when the `CodeIgniter\Database\SQLSRV\PreparedQuery::_getResult()` was returning the bool value instead of the resource.
- Fixed a bug in the error handler where in cases the callback cannot process the error level it does not pass the error to PHP’s standard error handler.

See the repo’s
[CHANGELOG\_4.2.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/changelogs/CHANGELOG_4.2.md)
for a complete list of bugs fixed.
