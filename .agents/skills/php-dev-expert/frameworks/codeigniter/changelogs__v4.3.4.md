# Version 4.3.4 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.3.4.html

---

# Version 4.3.4[](#version-4-3-4 "Link to this heading")

Release Date: April 27, 2023

**4.3.4 release of CodeIgniter4**

## [BREAKING](#id1)[](#breaking "Link to this heading")

### [Behavior Changes](#id2)[](#behavior-changes "Link to this heading")

#### [Redirect Status Code](#id3)[](#redirect-status-code "Link to this heading")

- Due to a bug, in previous versions, when using HTTP/1.1 or later the status
  code of the actual redirect response might be changed even if a status code was
  specified. For example, for a GET request, 302 would change to 307; for a POST
  request, 307 and 302 would change to 303.
- Starting with this version, if you specify a status code in
  [redirect](outgoing__response.md#response-redirect-status-code), that code will always be used
  in the response.
- The default code for GET requests has been corrected from 307 to 302 when using
  HTTP/1.1 or later.
- The default code for HEAD and OPTIONS requests has been corrected from 303 to
  307 when using HTTP/1.1 or later.
- In `$routes->addRedirect()`, 302 is specified by default. Therefor 302 will
  always be used when you don’t specify a status code. In previous versions,
  302 might be changed.

#### [Forge::modifyColumn()](#id4)[](#forge-modifycolumn "Link to this heading")

- The [$forge->modifyColumn()](dbmgmt__forge.md#db-forge-modifycolumn) has been fixed. Due
  to a bug, in previous versions, SQLite3/Postgres/SQLSRV might change
  `NULL`/`NOT NULL` unpredictably.
- In previous versions, the OCI8 driver did not change `NULL`/`NOT NULL`
  when you don’t specify the `null` key.
- Now in all database drivers `$forge->modifyColumn()` always sets `NULL`
  when you don’t specify the `null` key.
- The `NULL`/`NOT NULL` change may still be unexpectedly, it is recommended
  to always specify the `null` key.

## [Deprecations](#id5)[](#deprecations "Link to this heading")

- **Text Helper:** [`random_string()`](helpers__text_helper.md#random_string "random_string")’s type `basic`, `md5`, and
  `sha1` are deprecated. They are not cryptographically secure.

## [Bugs Fixed](#id6)[](#bugs-fixed "Link to this heading")

- **CURLRequest:** Fixed a bug where the response class was shared between requests.

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
