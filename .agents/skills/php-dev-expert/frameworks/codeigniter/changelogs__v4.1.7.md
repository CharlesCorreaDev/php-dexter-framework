# Version 4.1.7 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.1.7.html

---

# Version 4.1.7[](#version-4-1-7 "Link to this heading")

Release Date: January 9, 2022

**4.1.7 release of CodeIgniter4**

## [BREAKING](#id1)[](#breaking "Link to this heading")

- Because `FILTER_SANITIZE_STRING` is deprecated since PHP 8.1, `get_cookie()` that uses it when `$xssClean` is true changed the output. Now it uses `FILTER_SANITIZE_FULL_SPECIAL_CHARS`. Note that using XSS filtering is a bad practice. It does not prevent XSS attacks perfectly. Using `esc()` with the correct `$context` in the views is recommended.

## [Enhancements](#id2)[](#enhancements "Link to this heading")

none.

## [Changes](#id3)[](#changes "Link to this heading")

none.

## [Deprecations](#id4)[](#deprecations "Link to this heading")

none.

## [Bugs Fixed](#id5)[](#bugs-fixed "Link to this heading")

See the repo’s
[CHANGELOG\_4.1.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/changelogs/CHANGELOG_4.1.md)
for a complete list of bugs fixed.
