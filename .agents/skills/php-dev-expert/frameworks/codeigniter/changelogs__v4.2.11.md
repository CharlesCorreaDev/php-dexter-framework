# Version 4.2.11 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.2.11.html

---

# Version 4.2.11[](#version-4-2-11 "Link to this heading")

Release Date: December 21, 2022

**4.2.11 release of CodeIgniter4**

## [SECURITY](#id1)[](#security "Link to this heading")

- *Attackers may spoof IP address when using proxy* was fixed. See the [Security advisory GHSA-ghw3-5qvm-3mqc](https://github.com/codeigniter4/CodeIgniter4/security/advisories/GHSA-ghw3-5qvm-3mqc) for more information.
- *Potential Session Handlers Vulnerability* was fixed. See the [Security advisory GHSA-6cq5-8cj7-g558](https://github.com/codeigniter4/CodeIgniter4/security/advisories/GHSA-6cq5-8cj7-g558) for more information.

## [BREAKING](#id2)[](#breaking "Link to this heading")

- The `Config\App::$proxyIPs` value format has been changed. See [Upgrading Guide](installation__upgrade_4211.md#upgrade-4211-proxyips).
- The key of the session data record for [DatabaseHandler Driver](libraries__sessions.md#sessions-databasehandler-driver),
  [MemcachedHandler Driver](libraries__sessions.md#sessions-memcachedhandler-driver) and [RedisHandler Driver](libraries__sessions.md#sessions-redishandler-driver)
  has changed. See [Upgrading Guide](installation__upgrade_4211.md#upgrade-4211-session-key).

## [Enhancements](#id3)[](#enhancements "Link to this heading")

- Full support for PHP 8.2.

## [Bugs Fixed](#id4)[](#bugs-fixed "Link to this heading")

- Fixed a `FileLocator::locateFile()` bug where a similar namespace name could be replaced by another, causing a failure to find a file that exists.
- Fixed a `RedisHandler` session class to use the correct config when used with a socket connection.

See the repo’s
[CHANGELOG\_4.2.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/changelogs/CHANGELOG_4.2.md)
for a complete list of bugs fixed.
