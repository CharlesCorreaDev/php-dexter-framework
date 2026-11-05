# Changelog | Python | External Apps | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/python/changelog/

---

# Python LSAPI Changelog[¶](#python-lsapi-changelog "Permanent link")

## Version 2.2[¶](#version-22 "Permanent link")

*Released: October 27, 2026*

- [Bug fix] Apply general protocol hardening.
- [Bug fix] Harden the WSGI LSAPI runtime.

## Version 2.1[¶](#version-21 "Permanent link")

*Released: August 31, 2022*

- [Bug fix] Address compatibility issues with Python 3.10.

## Version 2.0[¶](#version-20 "Permanent link")

*Released: December 6, 2021*

- [Feature] Add Python 3.9 support.
- [Misc] Clean up compiler warnings.

## Version 1.9[¶](#version-19 "Permanent link")

*Released: February 23, 2021*

- [Bug fix] Properly decoded UTF-8-encoded characters in request headers.

## Version 1.8[¶](#version-18 "Permanent link")

*Released: February 3, 2021*

- [Improvement] Avoid being detected as interactive mode, which caused environments set in `.env` to not be applied for Python applications.

## Version 1.7[¶](#version-17 "Permanent link")

*Released: September 1, 2020*

- [Tuning] Update the log message with more information when possible, including the timestamp, UID, and PID.
- [Bug fix] Correct inaccurate child-process tracking.

## Version 1.6[¶](#version-16 "Permanent link")

*Released: May 11, 2020*

- [Improvement] Add support for Python 3.8 in Ubuntu 20.04.

## Version 1.5[¶](#version-15 "Permanent link")

*Released: August 12, 2019*

- [Bug fix] Improve `wsgi-lsapi` performance by recycling child worker processes less aggressively.

## Version 1.4[¶](#version-14 "Permanent link")

*Released: February 27, 2018*

- [Improvement] Improve standard-error logging with a timestamp.
- [Improvement] Disable unnecessary debug logging.

## Version 1.3[¶](#version-13 "Permanent link")

*Released: January 19, 2018*

- [Feature] Standard-error log output is now redirected to the application log directory for easier troubleshooting.
- [Bug fix] Fix a compatibility issue with the Django framework.

## Version 1.2[¶](#version-12 "Permanent link")

*Released: March 10, 2017*

- [Improvement] Improve compatibility with Python 3.

## Version 1.1[¶](#version-11 "Permanent link")

*Released: January 9, 2017*

- [Major Improvement] Add support for Python 3.x versions.

## Version 1.0[¶](#version-10 "Permanent link")

*Released: August 6, 2013*

- Initial release of Python LSAPI.
