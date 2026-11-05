# Version 4.3.6 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.3.6.html

---

# Version 4.3.6[](#version-4-3-6 "Link to this heading")

Release Date: June 18, 2023

**4.3.6 release of CodeIgniter4**

## [BREAKING](#id1)[](#breaking "Link to this heading")

### [Interface Changes](#id2)[](#interface-changes "Link to this heading")

Note

As long as you have not extended the relevant CodeIgniter core classes
or implemented these interfaces, all these changes are backward compatible
and require no intervention.

#### [AutoRouterInterface](#id3)[](#autorouterinterface "Link to this heading")

Now `AutoRouterInterface::getRoute()` has the new second parameter `string $httpVerb`.

#### [ValidationInterface::check()](#id4)[](#validationinterface-check "Link to this heading")

- The second parameter has changed from `string $rule` to `$rules`.
- The optional fourth parameter `$dbGroup = null` has been added.

### [Method Signature Changes](#id5)[](#method-signature-changes "Link to this heading")

#### [Validation::check()](#id6)[](#validation-check "Link to this heading")

- The second parameter has changed from `string $rule` to `$rules`.
- The optional fourth parameter `$dbGroup = null` has been added.

## [Deprecations](#id7)[](#deprecations "Link to this heading")

- **AutoRouterImproved:** The constructor parameter `$httpVerb` is deprecated.
  No longer used.

## [Bugs Fixed](#id8)[](#bugs-fixed "Link to this heading")

- **Validation:** Fixed a bug that `$DBGroup` is ignored when checking
  the value of a placeholder.
- **Validation:** Fixed a bug that `check()` cannot specify non-default
  database group.
- **Database:** Fixed a bug where semicolon character (`;`) in one of the Postgre connection parameters would break the DSN string.
- **AutoRouting Improved:** Fixed a bug that feature testing may not find
  controller/method.

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
