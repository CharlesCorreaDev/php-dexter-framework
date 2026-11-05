# Version 4.1.3 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.1.3.html

---

# Version 4.1.3[](#version-4-1-3 "Link to this heading")

Release Date: June 6, 2021

**4.1.3 release of CodeIgniter4**

## [Enhancements](#id1)[](#enhancements "Link to this heading")

- New functions in the File Helper: `directory_mirror()` and `same_file()`
- Implemented NexusPHP’s `Tachycardia` for slow test identification
- Added a new `$ttl` option to `Cache` config for future use

## [Changes](#id2)[](#changes "Link to this heading")

- Added MySQL 8.0 to the test matrix
- Improved environment detection from `$_SERVER`
- Numerous sweeping code improvements via Rector and analysis

## [Bugs Fixed](#id3)[](#bugs-fixed "Link to this heading")

- Fixed a bug where `CURLRequest` would try to use a project URI instead of its base
- Fixed a bug where CLI mode was not detected under `cgi-fcgi`
- Fixed a logic bug in Cookie construction
- Fixed numerous issues in SQLite3’s `Forge` class related to an incorrect attribute name

See the repo’s
[CHANGELOG\_4.1.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/changelogs/CHANGELOG_4.1.md)
for a complete list of bugs fixed.
