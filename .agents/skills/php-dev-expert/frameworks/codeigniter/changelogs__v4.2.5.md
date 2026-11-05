# Version 4.2.5 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.2.5.html

---

# Version 4.2.5[](#version-4-2-5 "Link to this heading")

Release Date: August 28, 2022

**4.2.5 release of CodeIgniter4**

## [BREAKING](#id1)[](#breaking "Link to this heading")

- The method signature of `BaseConnection::tableExists()` has been changed. A second optional parameter `$cached` was added. This directs whether to use cache data or not. Default is `true`, use cache data.
- The abstract method signature of `BaseBuilder::_listTables()` has been changed. A second optional parameter `$tableName` was added. Providing a table name will generate SQL listing only that table.
- The method signature of `Validation::processRules()` and `Validation::getErrorMessage()` have been changed. Both of these methods add new `$originalField` parameter.

## [Enhancements](#id2)[](#enhancements "Link to this heading")

- Kint has been updated to 4.2.0.

## [Bugs Fixed](#id3)[](#bugs-fixed "Link to this heading")

- When using subqueries in the main query, prefixes are added to the table alias.

See the repo’s
[CHANGELOG\_4.2.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/changelogs/CHANGELOG_4.2.md)
for a complete list of bugs fixed.
