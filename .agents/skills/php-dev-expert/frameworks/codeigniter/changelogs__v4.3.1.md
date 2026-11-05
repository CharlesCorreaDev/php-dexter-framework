# Version 4.3.1 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.3.1.html

---

# Version 4.3.1[](#version-4-3-1 "Link to this heading")

Release Date: January 14, 2023

**4.3.1 release of CodeIgniter4**

## [Bugs Fixed](#id1)[](#bugs-fixed "Link to this heading")

- Fixed: some environment variable (**.env**) values were not reflected in Email Config
- Fixed: TypeError in Validation `is_unique` and `is_not_unique`
- Fixed: revert method name `BaseBuilder::resetQuery()` changed accidentally
- Fixed: handling float in Validation Strcit Rules (`greater_than`, `greater_than_equal_to`, `less_than`, `less_than_equal_to`)
- Fixed: missing instruction for `Config\Exceptions` in PHP 8.2 in the user guide

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
