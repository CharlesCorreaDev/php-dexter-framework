# Security — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/admin/security.html

---

# Security[](#security "Permalink to this heading")

As of Elgg 3.0 several hardening settings have been added to Elgg. You can enable/disable these settings as you like.

Contents

- [Upgrade protection](#upgrade-protection)
- [Cron protection](#cron-protection)
- [Disable password autocomplete](#disable-password-autocomplete)
- [Email address change requires password](#email-address-change-requires-password)
- [Email address change requires confirmation](#email-address-change-requires-confirmation)
- [Session bound icons](#session-bound-icons)
- [Notification to site administrators](#notification-to-site-administrators)
- [Notifications to user](#notifications-to-user)

  - [Site administrator](#site-administrator)
  - [(Un)ban](#un-ban)
- [Minimal username length](#minimal-username-length)
- [Minimal password requirements](#minimal-password-requirements)
- [.htaccess file access hardening](#htaccess-file-access-hardening)

## [Upgrade protection](#id1)[](#upgrade-protection "Permalink to this heading")

The URL of <http://your-elgg-site.com/upgrade.php> can be protected by a unique token. This will prevent random users from being able to run this file.
The token is not needed for logged in site administrators.

## [Cron protection](#id2)[](#cron-protection "Permalink to this heading")

The URLs of the [cron](admin__cron.md) can be protected by a unique token. This will prevent random users from being able to run the cron.
The token is not needed when running the cron from the commandline of the server.

## [Disable password autocomplete](#id3)[](#disable-password-autocomplete "Permalink to this heading")

Data entered in these fields will be cached by the browser. An attacker who can access the victim’s browser could steal this information.
This is especially important if the application is commonly used in shared computers such as cyber cafes or airport terminals.
If you disable this, password management tools can no longer autofill these fields. The support for the autocomplete attribute can be browser specific.

## [Email address change requires password](#id4)[](#email-address-change-requires-password "Permalink to this heading")

When a user wishes to change their email address associated with their account, they need to also supply their current password.

## [Email address change requires confirmation](#id5)[](#email-address-change-requires-confirmation "Permalink to this heading")

When a user wishes to change their email address associated with their account, they need to confirm the new email address. This is
done by sending an email to the new address with a validation link. After clicking this link the new email address will be used.

## [Session bound icons](#id6)[](#session-bound-icons "Permalink to this heading")

Entity icons can be session bound by default. This means the URLs generated also contain information about the current session.
Having icons session bound makes icon urls not shareable between sessions. The side effect is that caching of these urls will only help the active session.

## [Notification to site administrators](#id7)[](#notification-to-site-administrators "Permalink to this heading")

When a new site administrator is added or when a site administrator is removed all the site administrators get a notification about this action.

## [Notifications to user](#id8)[](#notifications-to-user "Permalink to this heading")

### [Site administrator](#id9)[](#site-administrator "Permalink to this heading")

When the site administrator role is added to or removed from the account, send a notification to the user whos account this is affecting.

### [(Un)ban](#id10)[](#un-ban "Permalink to this heading")

When the account of a user gets banned or unbanned, let the affected user know about this action.

## [Minimal username length](#id11)[](#minimal-username-length "Permalink to this heading")

You can configure the minimal length the username should have upon registration of a user.

## [Minimal password requirements](#id12)[](#minimal-password-requirements "Permalink to this heading")

You can configure several requirements for new passwords of the users

- **length**: the password should be at least x characters long
- **lower case**: minimal number of lower case (a-z) characters in the password
- **upper case**: minimal number of upper case (A-Z) characters in the password
- **numbers**: minimal number of numbers (0-9) characters in the password
- **specials**: minimal number of special (like !@#$%^&\*(), etc.) characters in the password

## [.htaccess file access hardening](#id13)[](#htaccess-file-access-hardening "Permalink to this heading")

In the .htaccess file a set of file access hardening rules have been added to prevent direct access to files in certain folders.
Enabling these rules shouldn’t cause any issues when all the plugins you use follow the Elgg coding guidelines.

Examples of the rules are:

- the `vendor` folder. This folder only contains helper libraries that Elgg uses and there is no need for direct access to this folder. All required dependecies are loaded from within Elgg
- the `languages` folder. This folder contains the main Elgg language files. These files are loaded from within Elgg
