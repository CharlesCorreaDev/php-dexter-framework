# Version 4.2.1 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.2.1.html

---

# Version 4.2.1[](#version-4-2-1 "Link to this heading")

Release Date: June 16, 2022

**4.2.1 release of CodeIgniter4**

## [BREAKING](#id1)[](#breaking "Link to this heading")

### [Behavior Changes](#id2)[](#behavior-changes "Link to this heading")

- Guessing the file extension from the MIME type has been changed if the proposed extension is not valid. Previously, the guessing will early terminate and return `null`. Now, if a proposed extension is given and is invalid, the MIME guessing will continue checking using the mapping of extension to MIME types.
- If there is a cookie with a prefixed name and a cookie with the same name without a prefix, the previous `get_cookie()` had the tricky behavior of returning the cookie without the prefix. Now the behavior has been fixed as a bug, and has been changed. See [Upgrading](installation__upgrade_421.md#upgrade-421-get-cookie) for details.

## [Bugs Fixed](#id3)[](#bugs-fixed "Link to this heading")

See the repo’s
[CHANGELOG\_4.2.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/changelogs/CHANGELOG_4.2.md)
for a complete list of bugs fixed.
