# Version 4.4.8 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.4.8.html

---

# Version 4.4.8[](#version-4-4-8 "Link to this heading")

Release Date: April 7, 2024

**4.4.8 release of CodeIgniter4**

## [BREAKING](#id1)[](#breaking "Link to this heading")

- A bug that caused the [Exception handler](general__errors.md) to display
  incorrect error view file corresponding to the exception code has been fixed.
  The third parameter `int $statusCode = 500` has been added to
  `CodeIgniter\Debug\ExceptionHandler::determineView()` for this purpose.

## [Bugs Fixed](#id2)[](#bugs-fixed "Link to this heading")

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
