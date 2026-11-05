# Changelog | DirectAdmin | Control Panels | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/directadmin/da-litespeed-plugin/changelog/

---

# LiteSpeed DirectAdmin Plugin Changelog[¶](#litespeed-directadmin-plugin-changelog "Permanent link")

Note

We do our best to update this changelog in a timely manner. However, if a version is missing, you can always find the release announcement in [our LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users).

## Version 2.4[¶](#version-24 "Permanent link")

*Released: July 16, 2025*

- [Feature] Add a **Flag All** button to the **Cache Management** page.
- [Misc] Improve the script.

## Version 2.3.1.1[¶](#version-2311 "Permanent link")

*Released: November 29, 2023*

- [Bug fix] Address the `Invalid Input` error when attempting **Cache Management** operations.

## Version 2.3.1[¶](#version-231 "Permanent link")

*Released: September 27, 2023*

- [Improvement] Make miscellaneous code improvements.

## Version 2.3[¶](#version-23 "Permanent link")

*Released: June 20, 2023*

- [Improvement] Update the **Cache Manager** scan logic.
- [Improvement] Add non-clickable states to the **WebAdmin Console** and **Restart LiteSpeed** buttons.
- [Improvement] Add support for custom **Shared Code Library** update-failure messages.
- [Improvement] Make miscellaneous code improvements.
- [Improvement] Make miscellaneous visual improvements.
- [Improvement] Improve descriptions of some features.
- [Misc] Add the **Set your web server to LiteSpeed** landing page.
- [Bug fix] Address a rare `array keys not set` message.
- [Bug fix] Address encoded characters appearing in site URLs displayed in **Cache Manager**.

## Version 2.2.1[¶](#version-221 "Permanent link")

*Released: October 28, 2022*

- [Bug fix] Address issues with some escalated commands in newer DirectAdmin releases.

## Version 2.2[¶](#version-22 "Permanent link")

*Released: August 8, 2022*

- [Improvement] Improve exception handling.
- [Improvement] Make miscellaneous code improvements.
- [Bug fix] Address issues with newer PHP versions.
- [Bug fix] Fix the `lsws_home undefined` error that occurred before server installation.
- [Bug fix] Fix other minor miscellaneous bugs.

## Version 2.1[¶](#version-21 "Permanent link")

*Released: October 28, 2020*

- [Major Improvement] Make substantial changes to the plugin logger code.
- [Improvement] Improve Apache-PID detection.
- [Improvement] Make general improvements.
- [Misc] Enforced minimum remote **Shared Code Library** version requirements.
- [Misc] Allow all admin-privileged users to run the plugin.
- [Bug fix] Avoid a possible infinite loop in the plugin logger.
- [Bug fix] Attempting to switch to server licenses containing a `+` character no longer fails.

## Version 2.0.0.3[¶](#version-2003 "Permanent link")

*Released: September 10, 2020*

- [Misc] Correct the displayed recommended server-cache-root value.

## Version 2.0.0.2[¶](#version-2002 "Permanent link")

*Released: January 6, 2020*

- [Bug fix] Fix an undefined-constant fatal error introduced in v2.0.0.1.

## Version 2.0.0.1[¶](#version-2001 "Permanent link")

*Released: December 23, 2019*

- [Bug fix] Fix an occasional `Call to undefined method` fatal error.

## Version 2.0[¶](#version-20 "Permanent link")

*Released: October 30, 2019*

- [Feature] Add the following features and pages: **Cache Root Setup**, **LSCWP Version Manager**, **Manage Cache Installations**, **Mass Enable/Disable Cache**, and **WordPress Dash Notifier**.
- [Improvement] Add support for OpenLiteSpeed.
- [Misc] Remove the **Install LiteSpeed Web Server** and **Switch between Apache and LiteSpeed** sections.
- [GUI] Update the plugin CSS and icons.

## Version 1.0.6[¶](#version-106 "Permanent link")

*Released: May 8, 2014*

- [Improvement] Update the code for compatibility with CustomBuild 2.0.

## Version 1.0.5[¶](#version-105 "Permanent link")

*Released: April 23, 2014*

- [Feature] Update PHP in CageFS skeletons after LSWS installation.
- [Bug fix] Updating PHP now correctly updates CageFS skeletons.
- [Bug fix] Create a workaround for PHP bug #66842, which prevented the latest PHP version from running `make install`.
