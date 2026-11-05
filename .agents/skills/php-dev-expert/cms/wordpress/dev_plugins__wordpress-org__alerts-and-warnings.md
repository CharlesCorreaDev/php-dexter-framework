# Alerts and Warnings – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/wordpress-org/alerts-and-warnings/

---

# Alerts and Warnings

## In this article

Table of Contents

- [Approved and Pending Data](#approved-and-pending-data)
- [Closed](#closed)
  - [Reasons why plugins are closed](#reasons-why-plugins-are-closed)
- [Out of Date](#out-of-date)

Copy page
[View as Markdown](dev_plugins__wordpress-org__alerts-and-warnings.md)

[Back to top](#wp--skip-link--target)

When you visit plugin pages on WordPress.org, you may notice special alerts or warnings. These exist to help visitors understand the status of various plugins.

## [Approved and Pending Data](#approved-and-pending-data)

[![Blue background - This plugin is approved and awaiting data upload but not visible to the public yet. Once you make your first commit, the plugin will become public.](https://i0.wp.com/developer.wordpress.org/files/2018/02/approved.jpg?resize=954%2C76&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2018/02/approved.jpg?ssl=1)

Plugins that have been approved but no code has yet been uploaded will see this message:This *only* displays to the plugin owner and will go away once code has been pushed via SVN.

## [Closed](#closed)

As of November 2017, plugins that are closed display a notice:

![Red background: This plugin has been closed and is no longer available for download.](https://i0.wp.com/developer.wordpress.org/files/2018/02/closed.png?resize=629%2C52&ssl=1)

This is viewable by all visitors and indicates a plugin was closed. Plugins closed after January 2018 will include a date:

![Red background: This plugin was closed on February 7, 2018 and is no longer available for download.](https://i0.wp.com/developer.wordpress.org/files/2018/02/closed-alt.jpg?resize=624%2C56&ssl=1)

After 60 days, the alert will be updated to explain *why* the plugin was closed:

![Alert detailing why a plugin was closed](https://i0.wp.com/developer.wordpress.org/files/2018/02/why-closed.png?resize=626%2C81&ssl=1)

Plugin committers will see the following additional note:

![Blue background: If you did not request this change, please contact plugins@wordpress.org for a status. All developers with commit access are contacted when a plugin is closed, with the reasons why, so check your spam email too.](https://i0.wp.com/developer.wordpress.org/files/2018/02/closed-owner.png?resize=629%2C101&ssl=1)

### [Reasons why plugins are closed](#reasons-why-plugins-are-closed)

- Author Request – the author has asked the plugin to be closed
- Guideline Violation – a violation of any of the guideline
- Licensing/Trademark Violation – non-GPL code in use, or trademarks are being misused
- Merged Into Core – the plugin is now a part of core (reserved for feature projects)
- Security Issue – a security concern has been found in this plugin

Additional details on why a plugin is closed are not provided to anyone outside the WordPress.org security team or the plugin authors, unless there is an extreme circumstance.

## [Out of Date](#out-of-date)

Plugins that do not support the last 3 major releases of WordPress have the following notice:

![Yellow background: This plugin hasn’t been tested with the latest 3 major releases of WordPress. It may no longer be maintained or supported and may have compatibility issues when used with more recent versions of WordPress.](https://i0.wp.com/developer.wordpress.org/files/2018/02/old.jpg?resize=965%2C83&ssl=1)

Previously this message alerted users to plugins not updated within the last 2 years. In 2018 it was modified to rely on more pertinent data. Since WordPress updates major releases 2 to 3 times per year, and a maintained a plugin should be testing with the recent versions, this alert can be avoided by updating a plugin readme when new versions of WordPress is released.

Developers are emailed before every major release of WordPress and asked to update this value. They *do not* need to push a new version, just [update the readme](dev_plugins__wordpress-org__how-your-readme-txt-works.md) and edit the value of `Tested up to:` to the latest version of WordPress.

First published

February 12, 2018

Last updated

August 19, 2019

[Previous
Add Your Plugin to the Block Directory
Previous: Add Your Plugin to the Block Directory](dev_plugins__wordpress-org__add-your-plugin-to-the-block-directory.md)

[Next
Automated Security Review
Next: Automated Security Review](dev_plugins__wordpress-org__automated-security-review.md)
