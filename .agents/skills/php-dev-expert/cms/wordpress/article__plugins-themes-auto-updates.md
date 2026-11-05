# Plugin and themes auto-updates – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/plugins-themes-auto-updates/

---

# Plugin and themes auto-updates

## In this article

Table of Contents

- [Enable auto-updates for themes](#enable-auto-updates-for-themes)
- [Enable auto-updates for plugins](#enable-auto-updates-for-plugins)
  - [Bulk enable/disable plugins auto-updates](#bulk-enable-disable-plugins-auto-updates)
- [When do Themes and Plugins auto-updates happen?](#when-do-themes-and-plugins-auto-updates-happen)
- [Email notifications after plugins and themes auto-update attempts](#email-notifications-after-plugins-and-themes-auto-update-attempts)
- [Advices & Troubleshooting](#advices-troubleshooting)
  - [Perform regular automatic backups of your website](#perform-regular-automatic-backups-of-your-website)
  - [Auto-updates are not available](#auto-updates-are-not-available)
  - [Auto-updates are not working](#auto-updates-are-not-working)
- [More resources](#more-resources)

[Back to top](#wp--skip-link--target)

To keep your WordPress site secure, you should always update your plugins and themes to the latest version.

When a new version of a plugin or theme is available, an alert bubble is displayed in your WordPress Admin Menu and the corresponding theme or plugin is highlighted on Themes and Plugins Screens.

There are several places where you can manage themes or plugins updates:

- WordPress, Plugins, Themes and Translations updates can be managed on the Updates Screen located in Dashboard > Updates sub menu.
- Themes updates can be managed on the Appearance Screen.
- Plugins updates can be managed on the Plugins Screen.

  
[![](https://wordpress.org/documentation/files/2020/07/helphub-updates-bubbles-1024x389.png)](https://wordpress.org/documentation/files/2020/07/helphub-updates-bubbles.png)

**Since [WordPress 5.5](wordpress-version__version-5-5.md), websites Administrators can manually opt-in for automatic updates theme by theme and plugin by plugin.**

## [Enable auto-updates for themes](#enable-auto-updates-for-themes)

On the Appearance Screen, click on a theme thumbnail. In the theme modal, right below the author of the theme, an “Enable auto-updates” action link is available. Click on this action link to enable auto-updates for this specific theme.

[![](https://wordpress.org/documentation/files/2020/07/helphub-update-theme-enable.png)](https://wordpress.org/documentation/files/2020/07/helphub-update-theme-enable.png)

Once enabled, auto-updates can be disabled at any time, using the same toggle link.

Themes auto-updates have to be enabled/disabled theme by theme.

## [Enable auto-updates for plugins](#enable-auto-updates-for-plugins)

Navigate to Plugins Screen. For each plugin, there is an “Automatic update” column with an action link used to enable/disable auto-updates plugin by plugin.

[![](https://wordpress.org/documentation/files/2020/07/helphub-update-plugins-enable-1-1024x368.png)](https://wordpress.org/documentation/files/2020/07/helphub-update-plugins-enable-1.png)

Click on this action link to enable auto-updates for each specific plugin.

Once enabled, auto-updates can be disabled at any time, using the same toggle link.

### [Bulk enable/disable plugins auto-updates](#bulk-enable-disable-plugins-auto-updates)

Plugins auto-updates can be bulk enabled or disabled for several plugin at one time by using the bulk action selector. Select plugins using the checkbox located in the first column of the plugins list table and use the bulk action selector located on the top of the table to enable or disable auto-updates. Then click on the “Apply” button to bulk enable/disable auto-updates for the selected items.

[](https://wordpress.org/documentation/files/2020/07/helphub-update-bulk-plugins.mp4)

## [When do Themes and Plugins auto-updates happen?](#when-do-themes-and-plugins-auto-updates-happen)

By default WordPress runs auto-updates twice per day. If updates are available for plugins or themes with auto-updates enabled, the time until the next scheduled update will be displayed below the enable/disable auto-updates action link.

[![](https://wordpress.org/documentation/files/2020/07/helphub-updates-plugins-time-1-1024x256.png)](https://wordpress.org/documentation/files/2020/07/helphub-updates-plugins-time-1.png)

The time until next auto-updates is also displayed in the Dashboard > Updates Screen for both Themes and Plugins:

[![](https://wordpress.org/documentation/files/2020/07/helphub-updates-both-time.png)](https://wordpress.org/documentation/files/2020/07/helphub-updates-both-time.png)

## [Email notifications after plugins and themes auto-update attempts](#email-notifications-after-plugins-and-themes-auto-update-attempts)

By default WordPress sends email notifications to website owners to inform them that plugins and themes were automatically updated. These email notifications are sent when:

- One or more plugins or themes successfully auto-updated
- One or more plugins or themes failed to auto-update
- Some plugins or themes were successfully auto-updated, and some of them failed

## [Advices & Troubleshooting](#advices-troubleshooting)

### [Perform regular automatic backups of your website](#perform-regular-automatic-backups-of-your-website)

Before enabling auto-updates on your plugins and themes, you may want to make sure you’re able to rollback to a previous version of your website in case things go wrong.

Various plugins exist to take automatic scheduled backups of your WordPress database and files. This helps to manage your backup collection easily. You can find automatic backup plugins in the **Plugin Browser** on the WordPress Administration Screens or through the [WordPress Plugin Directory](https://wordpress.org/plugins/).

- [List of Backup Plugins](https://wordpress.org/plugins/tags/backup)

### [Auto-updates are not available](#auto-updates-are-not-available)

If auto-updates controls are not available on your Plugins/Themes Admin Screens, please check you are running WordPress version 5.5 or more. Plugins and themes auto-updates were introduced in WP 5.5.

If you are running WordPress 5.5 or more and those controls are still unavailable, it probably means the feature was partially or completely deactivated by your hosting company or by a plugin.

### [Auto-updates are not working](#auto-updates-are-not-working)

Depending on your server, your installation or on the plugins your website is running, auto-updates scheduling may not work correctly. Indeed, they rely on WordPress Cron tasks to actually perform the update.

To check if WordPress Cron tasks are running correctly, go to Tools > Site Health and search for any error message.

![](https://wordpress.org/documentation/files/2020/07/helphub-updates-site-health-error.png)

## [More resources](#more-resources)

- Developer note: [Controlling plugin and theme auto-update interface in WordPress 5.5](https://make.wordpress.org/core/2020/07/15/controlling-plugin-and-theme-auto-updates-ui-in-wordpress-5-5/)
- Plugins and Themes auto-updates [core merge announcement](https://make.wordpress.org/core/2020/05/02/merge-announcement-plugins-themes-auto-updates/)

## Was this article helpful? How could it be improved? [Cancel reply](article__plugins-themes-auto-updates.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fplugins-themes-auto-updates%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

July 24, 2020

Last updated

January 13, 2023
