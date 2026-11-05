# Version 4.3.5 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.3.5.html

---

# Version 4.3.5[](#version-4-3-5 "Link to this heading")

Release Date: May 21, 2023

**4.3.5 release of CodeIgniter4**

## [SECURITY](#id1)[](#security "Link to this heading")

- *Remote Code Execution Vulnerability in Validation Placeholders* was fixed.
  See the [Security advisory GHSA-m6m8-6gq8-c9fj](https://github.com/codeigniter4/CodeIgniter4/security/advisories/GHSA-m6m8-6gq8-c9fj)
  for more information.
- Fixed that `Session::stop()` did not destroy the session.

## [Changes](#id2)[](#changes "Link to this heading")

- **make:cell command:** When creating a new cell, the controller would always have the `Cell` suffixed to the class name.
  For the view file, the final `_cell` is always removed.
- **View Cells:** For compatibility with previous versions, view filenames ending with `_cell` can still be
  located by the `Cell` as long as auto-detection of view file is enabled (via setting the `$view` property
  to an empty string).

## [Deprecations](#id3)[](#deprecations "Link to this heading")

- **Session:** The `Session::stop()` method is deprecated.
  Use the [Session::destroy()](libraries__sessions.md#session-destroy) instead.

## [Bugs Fixed](#id4)[](#bugs-fixed "Link to this heading")

- **Validation:** Fixed a bug where a closure used in combination with `permit_empty` or `if_exist` rules was causing an error.
- **make:cell command:** Fixed generating view files as classes.
- **make:cell command:** Fixed treatment of single word class input for case-insensitive OS.

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
