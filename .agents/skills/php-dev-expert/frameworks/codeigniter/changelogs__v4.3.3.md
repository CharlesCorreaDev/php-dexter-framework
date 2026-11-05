# Version 4.3.3 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.3.3.html

---

# Version 4.3.3[](#version-4-3-3 "Link to this heading")

Release Date: March 26, 2023

**4.3.3 release of CodeIgniter4**

## [SECURITY](#id1)[](#security "Link to this heading")

- **Email:** Added missing TLS 1.3 support.
- **Text Helper:** The [`random_string()`](helpers__text_helper.md#random_string "random_string") type **alpha**, **alnum**,
  **numeric** and **nozero** are now cryptographically secure.

## [Bugs Fixed](#id2)[](#bugs-fixed "Link to this heading")

- **Config:** Added missing `Config\Encryption::$cipher`.
- **UserGuide:** Fixed the sample code for [Configuration to Maintain Compatibility with CI3](libraries__encryption.md#encryption-compatible-with-ci3).
- **UserGuide:** Added a missing breaking change in `uri_string()` in
  [ChangeLog](changelogs__v4.3.2.md#v432-uri-string) and
  [Upgrading Guide](installation__upgrade_432.md#upgrade-432-uri-string) v4.3.2.

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
