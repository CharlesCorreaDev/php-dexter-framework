# Version 4.1.6 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.1.6.html

---

# Version 4.1.6[](#version-4-1-6 "Link to this heading")

Release Date: January 3, 2022

**4.1.6 release of CodeIgniter4**

## [SECURITY](#id1)[](#security "Link to this heading")

- *Deserialization of Untrusted Data* found in the `old()` function was fixed. See the [Security advisory](https://github.com/codeigniter4/CodeIgniter4/security/advisories/GHSA-w6jr-wj64-mc9x) for more information.

## [BREAKING](#id2)[](#breaking "Link to this heading")

- Multiple table names will no longer be stored in `BaseBuilder::$tableName` - an empty string will be used instead.

### [Validation changes](#id3)[](#validation-changes "Link to this heading")

- The previous version of the Validation can’t handle an array item.
  Because of the bug fix, the validation results may be different,
  or raise a `TypeError`.
  But the previous version’s results are probably incorrect.
- The Validation separated the validation process of multiple field
  like `contacts.*.name` and single field.
  When a single field has an array data, the previous version validates each element of the array.
  The validation rule gets an element of the array as the parameter.
  On the other hand, the current version passes the array to the validation rule as a whole.

## [Enhancements](#id4)[](#enhancements "Link to this heading")

- Full support for PHP 8.1.
- Database pane on debug toolbar now displays location where Query was called from. Also displays full backtrace.
- [Subqueries](database__query_builder.md#query-builder-where-subquery) in QueryBuilder can now be an instance of the BaseBuilder class.
- Kint was updated from ^3.3 to ^4.0.

## [Changes](#id5)[](#changes "Link to this heading")

- The process of sending cookies has been moved to the `Response` class. Now the `Security` and `CookieStore` class don’t send cookies, set them to the Response.

## [Deprecations](#id6)[](#deprecations "Link to this heading")

- `Seeder::faker()` and `Seeder::$faker` are deprecated.
- `BaseBuilder::cleanClone()` is deprecated.

### [Sending Cookies](#id7)[](#sending-cookies "Link to this heading")

The process of sending cookies has been moved to the `Response` class.
And the following methods are deprecated:

- `CookieStore::dispatch()`
- `CookieStore::setRawCookie()`
- `CookieStore::setCookie()`
- `Security::sendCookie()`
- `Security::doSendCookie()`

## [Bugs Fixed](#id8)[](#bugs-fixed "Link to this heading")

See the repo’s
[CHANGELOG\_4.1.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/changelogs/CHANGELOG_4.1.md)
for a complete list of bugs fixed.
