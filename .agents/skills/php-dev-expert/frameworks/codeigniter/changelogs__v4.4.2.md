# Version 4.4.2 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.4.2.html

---

# Version 4.4.2[](#version-4-4-2 "Link to this heading")

Release Date: October 19, 2023

**4.4.2 release of CodeIgniter4**

## [Message Changes](#id1)[](#message-changes "Link to this heading")

- Added `Language.invalidMessageFormat` error message.

## [Changes](#id2)[](#changes "Link to this heading")

- **Database Migrations:** The `-g` option for the `spark migrate:rollback`
  command was removed. It did not work from the beginning. Also, the rollback
  command returns the database(s) state to a specified batch number and cannot
  specify only a specific database group.
- **Security:** The presence of the CSRF token is now also checked in the raw body (not JSON format) for PUT, PATCH, and DELETE type of requests.

## [Deprecations](#id3)[](#deprecations "Link to this heading")

- **Filters:** The Auto-Discovery for Filters and `Filters::discoverFilters()`
  is deprecated. Use [Registrars](general__configuration.md#registrars) instead. See [Filters](general__modules.md#modules-filters) for
  details.
- **CLI:** The public property `CLI::$readline_support` and `CLI::$wait_msg`
  are deprecated. These methods will be protected.
- **CodeIgniter:** The parameter `$config` for the `displayCache()` method is
  deprecated. It was not used.

## [Bugs Fixed](#id4)[](#bugs-fixed "Link to this heading")

- **CodeIgniter:** Fixed a bug that returned “200 OK” response status code when
  Page Not Found.
- **Spark:** Fixed a bug that caused spark to not display exceptions in the
  production mode or to display backtrace in json when an exception occurred.
- **Forge:** Fixed a bug where adding a Primary Key to an existing table was
  ignored if there were no other Keys added too.
- **Routing:** Fixed a bug that `spark routes` may show incorrect route names.

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
