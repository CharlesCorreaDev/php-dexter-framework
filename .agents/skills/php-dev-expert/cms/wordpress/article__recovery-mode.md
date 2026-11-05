# Recovery Mode – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/recovery-mode/

---

# Recovery Mode

## In this article

Table of Contents

- [When does Recovery Mode activate?](#when-does-recovery-mode-activate)
- [How to enter Recovery Mode](#how-to-enter-recovery-mode)
- [What happens in Recovery Mode](#what-happens-in-recovery-mode)
- [What to do in Recovery Mode](#what-to-do-in-recovery-mode)
- [What to do if the recovery email notification doesn’t arrive](#what-to-do-if-the-recovery-email-notification-doesnt-arrive)

[Back to top](#wp--skip-link--target)

Recovery Mode is a built-in WordPress feature ([introduced in version 5.2)](https://make.wordpress.org/core/2019/04/16/fatal-error-recovery-mode-in-5-2/) that in some cases may help you regain access to your site when a fatal error occurs, without the need to use FTP and/or editing code directly. A fatal error is often caused by a plugin, theme, or custom code and it prevents normal login or site operation. Instead of showing a blank page or “White Screen of Death,” WordPress enters a safe mode that lets you log in to troubleshoot and fix the issue.

### [When does Recovery Mode activate?](#when-does-recovery-mode-activate)

WordPress automatically activates Recovery Mode when it detects a fatal PHP error during a regular page load (not via CRON or background tasks). These errors commonly stem from incompatible or faulty plugins or themes. When this mode is activated, a user facing error screen will display on the site to explain that the site is experiencing technical difficulties so site visitors are aware:

![An example of the error one would see on the frontend of a site when something has gone wrong, saying "There has been a critical error on this website. Learn more about troubleshooting WordPress."](https://wordpress.org/support/files/2025/08/image-1024x262.png)

At the same time, an email will be sent to the administrator’s email address informing them about the problems and with a link to login to the site with recovery mode activated:

![A text of an email one would receive when recovery mode starts, with various identifying information blocked out.](https://wordpress.org/support/files/2025/08/Email-for-recovery-mode-1024x459.png)

Keep in mind that WordPress loads active plugins in a set order. If your site uses a plugin to change how outgoing emails are sent, but a fatal error happens before that plugin loads, the email will be sent directly from your web server. If your server’s email settings aren’t fully trusted or its IP address is flagged for spam, the email might never reach the admin’s inbox—it could be filtered to spam or blocked entirely during delivery.

### [How to enter Recovery Mode](#how-to-enter-recovery-mode)

You’ll receive an email in your site administrator’s email account with a link to login and details about the error. Click the link to access your site in Recovery Mode and then proceed to login. You will see a notice about Recovery Mode upon logging in:

![Admin login for a WordPress site, showing a notice above that says "Recovery Mode Initialized. Please log in to continue."](https://wordpress.org/support/files/2025/08/image-2-926x1024.png)

### [What happens in Recovery Mode](#what-happens-in-recovery-mode)

- Faulty plugins or themes are paused just for your admin session so you can log in safely.
- Your dashboard loads with error notices pointing to the problematic component.
- You can deactivate or fix the issue without affecting your site’s frontend users or needing FTP.

### [What to do in Recovery Mode](#what-to-do-in-recovery-mode)

1. Log in via the special Recovery Mode link received via your administrator email.
2. Look for notices indicating which plugin or theme failed. Go to Plugins or Appearance > Themes to deactivate the problematic item. This is typically a temporary solution to the underlying problem, but provides an immediate resolution for the site to load.
3. If you edited code (e.g. functions.php), correct it before resuming.
4. Once fixed, click “Exit Recovery Mode” and verify your site works normally. Usually, you will see the ability to exit this mode in the admin toolbar.

### [What to do if the recovery email notification doesn’t arrive](#what-to-do-if-the-recovery-email-notification-doesnt-arrive)

You can still use the methods described in [Advanced Administration Handbook](https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/) for debugging WordPress.

If you’re using a professional web hosting provider, their customer support may be able to help you. Please contact them directly.

If you’re comfortable using FTP (or, if it’s available with your web host — an online file handler) you may temporarily deactivate one or several plugins by renaming their folder names. For instance, you may deactivate the Hello Dolly plugin using FTP by renaming the folder `/wp-content/plugins/hello-dolly` to `wp-content/plugins/hello-dolly-1/`. This method can be useful if your debug log indicates that the fatal error happens within a specific plugin or if you suspect any particular plugin of causing trouble.

## Was this article helpful? How could it be improved? [Cancel reply](article__recovery-mode.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Frecovery-mode%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

August 14, 2025

Last updated
