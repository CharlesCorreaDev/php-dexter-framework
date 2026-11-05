# Version 4.2.2 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.2.2.html

---

# Version 4.2.2[](#version-4-2-2 "Link to this heading")

Release Date: August 6, 2022

**4.2.2 release of CodeIgniter4**

## [BREAKING](#id1)[](#breaking "Link to this heading")

- Now `Services::request()` returns `IncomingRequest` or `CLIRequest`.
- The method signature of `CodeIgniter\Debug\Exceptions::__construct()` has been changed. The `IncomingRequest` typehint on the `$request` parameter was removed. Extending classes should likewise remove the parameter so as not to break LSP.
- The method signature of `BaseBuilder.php::insert()` and `BaseBuilder.php::update()` have been changed. The `?array` typehint on the `$set` parameter was removed.
- A bug that caused pages to be cached before after filters were executed when using page caching has been fixed. Adding response headers or changing the response body in after filters now caches them correctly.
- Due to a bug fix, now [`random_string()`](helpers__text_helper.md#random_string "random_string") with the first parameter `'crypto'` throws `InvalidArgumentException` if the second parameter `$len` is an odd number.

## [Message Changes](#id2)[](#message-changes "Link to this heading")

- Fixed `invalidRoute` message in `Language/en/HTTP.php`.

## [Changes](#id3)[](#changes "Link to this heading")

- Fixed: `BaseBuilder::increment()` and `BaseBuilder::decrement()` do not reset the `BaseBuilder` state after a query.
- Fixed: Validation of fields with a leading asterisk (wildcard).
- Now `CLIRequest::isCLI()` always returns true.
- Now `IncommingRequest::isCLI()` always returns false.
- **Vagrantfile.dist** has been moved to [CodeIgniter DevKit](https://github.com/codeigniter4/devkit).

## [Deprecations](#id4)[](#deprecations "Link to this heading")

- The parameters of `Services::request()` are deprecated.
- The first parameter `$cacheConfig` of `CodeIgniter::gatherOutput()` is deprecated.
- The second parameter `$ifNotExists` of `Forge::_createTable()` is deprecated.

## [Bugs Fixed](#id5)[](#bugs-fixed "Link to this heading")

See the repo’s
[CHANGELOG\_4.2.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/changelogs/CHANGELOG_4.2.md)
for a complete list of bugs fixed.
