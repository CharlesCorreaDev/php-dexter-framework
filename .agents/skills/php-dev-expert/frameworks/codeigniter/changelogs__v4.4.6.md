# Version 4.4.6 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.4.6.html

---

# Version 4.4.6[](#version-4-4-6 "Link to this heading")

Release Date: February 24, 2024

**4.4.6 release of CodeIgniter4**

## [BREAKING](#id1)[](#breaking "Link to this heading")

### [Time::createFromTimestamp()](#id2)[](#time-createfromtimestamp "Link to this heading")

A bug that caused [Time::createFromTimestamp()](libraries__time.md#time-createfromtimestamp)
to return a Time instance with a timezone of UTC has been fixed.

Starting with this version, when you do not specify a timezone, a Time instance
with the app’s timezone is returned by default.

## [Bugs Fixed](#id3)[](#bugs-fixed "Link to this heading")

- **Session:** Fixed a bug in Redis session handler that caused locking to fail
  and the session data to be cleared.
- **DB Forge:** Fixed a bug in SQLite3 Forge that caused `Forge::modifyColumn()`
  to incorrectly modify table definitions.
- **CSP:** Fixed a bug that CSP blocked some elements in the Debug Toolbar.

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
