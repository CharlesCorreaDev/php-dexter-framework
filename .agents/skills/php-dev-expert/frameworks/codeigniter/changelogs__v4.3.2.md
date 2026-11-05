# Version 4.3.2 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.3.2.html

---

# Version 4.3.2[](#version-4-3-2 "Link to this heading")

Release Date: February 18, 2023

**4.3.2 release of CodeIgniter4**

## [BREAKING](#id1)[](#breaking "Link to this heading")

### [Behavior Changes](#id2)[](#behavior-changes "Link to this heading")

#### [base\_url()](#id3)[](#base-url "Link to this heading")

- Due to a bug, in previous versions [`base_url()`](helpers__url_helper.md#base_url "base_url") without argument
  returned baseURL without a trailing slash (`/`) like `http://localhost:8080`.
- Now it returns baseURL with a trailing slash. This is the same behavior as
  `base_url()` in CodeIgniter 3.

#### [uri\_string()](#id4)[](#uri-string "Link to this heading")

- The parameter `$relative` in [`uri_string()`](helpers__url_helper.md#uri_string "uri_string") was removed. Due to a bug,
  the function always returned a path relative to baseURL.
- When baseURL is accessed, it will now return an empty string (`''`). This is
  the same behavior as `uri_string()` in CodeIgniter 3. In previous versions
  it returned `/`.

## [Bugs Fixed](#id5)[](#bugs-fixed "Link to this heading")

- **QueryBuilder:** `where()` generates incorrect SQL when using `RawSql`
- **QueryBuilder:** `RawSql` passed to `set()` disappears without error
- **Session:** Can’t connect to Redis with `RedisHandler` over TLS
- **Autoloader:** May not add Composer package’s namespaces
- **Parser:** `!` does not work if delimiters are changed
- **UserGuide:** Added missing items in ChangeLog and Upgrading Guide v4.3.0

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
