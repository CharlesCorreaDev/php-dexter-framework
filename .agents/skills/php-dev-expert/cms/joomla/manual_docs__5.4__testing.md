# Testing | Joomla! Programmers Documentation

> **Fonte / Source:** https://manual.joomla.org/docs/5.4/testing/

---

Version: 5.4 (Legacy)

On this page

## Overview[​](#overview "Direct link to Overview")

Testing is an important part of software development, whether for a bugfix or new functionality. For Joomla! there are two approaches to testing: *Automated Testing* and *Manual Testing*.

### Automated Testing[​](#automated-testing "Direct link to Automated Testing")

For automated testing a continuous integration (CI) server drone is used. Any proposed change to the code is checked with a series of CI system tests that include:

- Code style validation for PHP, CSS and javascript.
- Unit tests for supported PHP versions.
- End to end tests on different PHP versions and different database versions.

At the end of the test run an installable package is created with the changes included. This can be used to support manual testing. Any test failure is reported for the code author to take corrective action.

### Manual Testing[​](#manual-testing "Direct link to Manual Testing")

While automated testing is more focused on making sure that a change does not break existing functionality, manual testing is focused on the change itself. Two testers are required to confirm that a change does what it is supposed to do. The code author may not be one of the testers!
