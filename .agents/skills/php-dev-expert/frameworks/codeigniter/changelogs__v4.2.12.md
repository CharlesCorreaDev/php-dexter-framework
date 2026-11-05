# Version 4.2.12 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.2.12.html

---

# Version 4.2.12[](#version-4-2-12 "Link to this heading")

Release Date: January 9, 2023

**4.2.12 release of CodeIgniter4**

## [Bugs Fixed](#id1)[](#bugs-fixed "Link to this heading")

- Fixed `Request::getIPaddress()` causes an error on CLI.
- Fixed `link_tag()` missing `type="application/rss+xml"`.
- Fixed `spark migrate:status` shows incorrect filenames when format is `Y_m_d_His_`.
- Fixed an error when `Model::save()` saves an object if `$useAutoIncrement` is false.

See the repo’s
[CHANGELOG\_4.2.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/changelogs/CHANGELOG_4.2.md)
for a complete list of bugs fixed.
