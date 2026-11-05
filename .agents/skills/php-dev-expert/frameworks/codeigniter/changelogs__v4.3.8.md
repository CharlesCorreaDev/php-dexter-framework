# Version 4.3.8 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.3.8.html

---

# Version 4.3.8[](#version-4-3-8 "Link to this heading")

Release Date: August 25, 2023

**4.3.8 release of CodeIgniter4**

## [Bugs Fixed](#id1)[](#bugs-fixed "Link to this heading")

- **Controller Filters:** In previous versions, `['except' => []]` or `['except' => '']`
  meant “except all”. The bug has been fixed, and now

  > - `['except' => []]` means to exclude nothing.
  > - `['except' => '']` means to exclude the baseURL only.

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
