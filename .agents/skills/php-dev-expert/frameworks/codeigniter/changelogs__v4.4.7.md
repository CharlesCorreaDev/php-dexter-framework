# Version 4.4.7 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.4.7.html

---

# Version 4.4.7[](#version-4-4-7 "Link to this heading")

Release Date: March 29, 2024

**4.4.7 release of CodeIgniter4**

## [SECURITY](#id1)[](#security "Link to this heading")

- **Language:** *Language class DoS Vulnerability* was fixed.
  See the [Security advisory GHSA-39fp-mqmm-gxj6](https://github.com/codeigniter4/CodeIgniter4/security/advisories/GHSA-39fp-mqmm-gxj6)
  for more information.
- **URI Security:** The feature to check if URIs do not contain not permitted
  strings has been added. This check is equivalent to the URI Security found in
  CodeIgniter 3. This is enabled by default, but upgraded users need to add
  a setting to enable it. See [URI Security](general__urls.md#urls-uri-security) for details.
- **Filters:** A bug where URI paths processed by Filters were not URL-decoded
  has been fixed. See [Paths in Controller Filters](installation__upgrade_447.md#upgrade-447-filter-paths) for details.

## [BREAKING](#id2)[](#breaking "Link to this heading")

- In previous versions, when comparing dates with `Time::difference()`,
  unexpected results were returned if the date included a day different from 24
  hours due to Daylight Saving Time (DST). This bug has been fixed. See
  [Note in Times and Dates](libraries__time.md#time-viewing-differences) for details.

## [Bugs Fixed](#id3)[](#bugs-fixed "Link to this heading")

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
