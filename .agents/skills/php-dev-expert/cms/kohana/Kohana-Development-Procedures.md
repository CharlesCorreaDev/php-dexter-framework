# Kohana Development Procedures · kohana/kohana Wiki · GitHub

> **Fonte / Source:** https://github.com/kohana/kohana/wiki/Kohana-Development-Procedures

---

## All developers that work on kohana must follow the guidelines in this document

---

## Kohana Release Strategy

Starting with the Kohana 3.1 release, Kohana will follow a semi-rigid release strategy as outlined below:

A major (x) release is defined as a release that has API changing functionality, or added functionality (3.x). They **ARE NOT** backwards compatible with prior releases.

A minor (y) release is defined as a release that has bugfix or other non-api changing/adding functionality (3.x.y). They are backwards compatible with prior releases of the same major version.

A hotfix (z) release is defined as a release to a minor release with critical bug/security fixes (3.x.y.z). They are backwards compatible with prior releases of the same major version.

1. Major releases will be scheduled for release every 6 months (Winter and Summer releases).
2. Major releases will be supported by minor releases every month.
3. Major releases will be supported by minor releases for 1 year past its release date (the last two released major versions will be supported).

Non-critical issues that are not completed in time for a release will be pushed back to the next release.

A release can be delayed by a critical issue.

## Redmine issue tickets

Every change *must* be related to a redmine issue. Every commit *must* reference said ticket in it's commit message with `refs #1234` or `fixes #1234`. This gives us the ability to cross check commits with issues and keep track of changes.

If an issue applies to multiple versions of kohana, make a ticket for the lowest version, and duplicate the ticket for each higher version. Make sure you reference all the tickets to each other in redmine so they are related and can be closed together.

## Third party developers

Kohana welcomes changes by the community. If you'd like to help, simply fork the repository, make your change, and send us a pull request. In addition to the pull request, you must open an issue in our Redmine issue tracking system. Pull requests without issues will be ignored. Simply create an issue, describe it and link to the pull request. If you are fixing an existing issue, just make a comment on it with a link to the pull request.
