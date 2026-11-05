# Configuration

> **Fonte / Source:** https://guide.joomla.org/user-guide/configuration

---

# Configuration

The Configuration section explains how to adjust Joomla’s core settings to control site behavior, security, performance, and accessibility. From global options that affect the entire site to server-level directives for enhanced security, these topics help you fine-tune how Joomla operates and responds to different situations.

This section covers the following key areas:

## Global Site Settings

Manage overall site behavior and define default options.

These settings influence how your Joomla site runs on a day-to-day basis. You can configure site details, enable caching for performance, manage session handling, and set mail delivery options. Joomla also allows you to take the site offline when maintenance is required, while still giving administrators access to continue working in the backend.

- [Global Configuration](guide__user-guide__configuration__configuration-global-configuration.md) – Adjust essential site-wide settings, including metadata, SEO, caching, and mail.
- [Site Offline](guide__user-guide__configuration__configuration-site-offline.md) – Put your site into offline mode with a custom message while you perform updates or maintenance.

## Email & Notifications

Control how Joomla sends emails and system notifications.

Correct email configuration ensures smooth communication for user registrations, password resets, and notifications. By using SMTP, you can ensure reliable mail delivery and prevent issues with default PHP mail functions.

- [SMTP Mail with Gmail](guide__user-guide__configuration__configuration-smtp-mail-gmail.md) – Set up Joomla to send mail securely using SMTP, including detailed configuration for Gmail.

## Server Directives & Security Files

Strengthen security and improve site performance using configuration files and server rules.

Joomla includes several tools for controlling how your site interacts with the server and external visitors. By editing files such as .htaccess and robots.txt, or applying specific rules, you can protect sensitive content, maintain URL consistency, and optimize how search engines interact with your site.

- [The .htaccess File](guide__user-guide__configuration__configuration-the-htaccess-file.md) – Apply rules for redirects, URL rewriting, caching, and access control.
- [robots.txt File](guide__user-guide__configuration__configuration-robots-txt-file.md) – Manage how search engines crawl and index your site.
- [Adding “www” to a URL](guide__user-guide__configuration__configuration-adding-www-to-a-url.md) – Force consistent use of the “www” (or non-www) version of your domain.
- [Disallow Image Hotlinking](guide__user-guide__configuration__configuration-disallow-image-hotlinking.md) – Block other sites from embedding your images directly.
- [Disallow Directory Listing](guide__user-guide__configuration__configuration-disallow-directory-listing.md) – Hide directory contents to prevent exposure of files.
- [Password-Protect Directories](guide__user-guide__configuration__configuration-password-protect-directories.md) – Secure directories by requiring a username and password for access.
