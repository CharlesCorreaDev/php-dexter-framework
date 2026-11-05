# Version 4.1.0 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.1.0.html

---

# Version 4.1.0[](#version-4-1-0 "Link to this heading")

Release Date: January 31, 2021

**4.1.0 release of CodeIgniter4**

## [BREAKING](#id1)[](#breaking "Link to this heading")

- `Autoloader::loadLegacy()` method was previously used for migration of non-namespaced classes in transition to CodeIgniter v4. Since v4.1.0, this support was removed.

## [Changes](#id2)[](#changes "Link to this heading")

- Dropped support for PHP 7.2

## [Deprecations](#id3)[](#deprecations "Link to this heading")

- Deprecated `Model::fillPlaceholders()` method, use `Validation::fillPlaceholders()` instead.

## [Bugs Fixed](#id4)[](#bugs-fixed "Link to this heading")

See the repo’s
[CHANGELOG\_4.1.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/changelogs/CHANGELOG_4.1.md)
for a complete list of bugs fixed.
