# Version 4.4.4 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.4.4.html

---

# Version 4.4.4[](#version-4-4-4 "Link to this heading")

Release Date: December 28, 2023

**4.4.4 release of CodeIgniter4**

## [BREAKING](#id1)[](#breaking "Link to this heading")

### [Validation with Dot Array Syntax](#id2)[](#validation-with-dot-array-syntax "Link to this heading")

A validation rule with the wildcard `*` now validates only data in correct
dimensions as “dot array syntax”.
See [Upgrading](installation__upgrade_444.md#upgrade-444-validation-with-dot-array-syntax) for details.

### [Validation rules matches and differs](#id3)[](#validation-rules-matches-and-differs "Link to this heading")

Bugs have been fixed in the case where `matches` and `differs` in the Strict
and Traditional rules validate data of non-string types.

### [The use of the ssl\_key option in CURLRequest was removed](#id4)[](#the-use-of-the-ssl-key-option-in-curlrequest-was-removed "Link to this heading")

Due to a bug, we were using the undocumented ssl\_key config option to define the CA bundle in CURLRequest.
This was fixed and is now working according to documentation. You can define your CA bundle via the verify option.

### [Filesystem Helper](#id5)[](#filesystem-helper "Link to this heading")

[`get_filenames()`](helpers__filesystem_helper.md#get_filenames "get_filenames") now follows symlink folders, which it previously just returned
without following.

## [Enhancements](#id6)[](#enhancements "Link to this heading")

- Full support for PHP 8.3.

## [Message Changes](#id7)[](#message-changes "Link to this heading")

- Added `HTTP.invalidJSON` error message.
- Added `HTTP.unsupportedJSONFormat` error message.

## [Deprecations](#id8)[](#deprecations "Link to this heading")

- **Request:** The [`CodeIgniter\HTTP\Request::getEnv()`](incoming__request.md#CodeIgniter\HTTP\Request::getEnv "CodeIgniter\HTTP\Request::getEnv") method is
  deprecated. This method does not work from the beginning. Use [`env()`](general__common_functions.md#env "env")
  instead.

## [Bugs Fixed](#id9)[](#bugs-fixed "Link to this heading")

- **CURLRequest:** Fixed a bug where the hostname was checked even if options ‘verify’ was set to *false*.

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
