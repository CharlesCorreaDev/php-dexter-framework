# Version 4.7.2 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.7.2.html

---

# Version 4.7.2[](#version-4-7-2 "Link to this heading")

Release Date: March 24, 2026

**4.7.2 release of CodeIgniter4**

## [Bugs Fixed](#id1)[](#bugs-fixed "Link to this heading")

- **Security:** Fixed a bug where the CSRF filter could corrupt JSON request bodies after successful
  verification when the CSRF token was provided via the `X-CSRF-TOKEN` header.
  This caused `IncomingRequest::getJSON()` to fail on valid `application/json` requests.

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
