# Plugins · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Plugins

---

Roundcube Mail comes with many useful plugins, which extend its functionality. There are also many third-party plugins, which can be found at [Roundcube Plugins](https://plugins.roundcube.net/).

## Default Plugins

Below is a table of the names and descriptions of the default plugins, which can be found [here](https://github.com/roundcube/roundcubemail/tree/master/plugins).

| Name | Description |
| --- | --- |
| acl | Allows mailbox access control lists to be managed |
| additional\_message\_headers | Adds additional or removes headers from outgoing mail |
| archive | Adds a button that lets a user move mail to a specified archive folder |
| attachment\_reminder | Reminds a user to attach files to their email |
| autologon | Performs an automatic login if accessed from `localhost` |
| database\_attachments | Provides database-backed storage for temporary attachment handling |
| debug\_logger | Enhances logging for debugging purposes |
| emoticons | Replaces emoticons in plain-text messages with real icons |
| enigma | Adds support for viewing and sending PGP signed/encrypted mail |
| example\_addressbook | Sample plugin that implements a hard-coded list of contacts |
| filesystem\_attachments | Adds basic, filesystem-based temporary attachment handling |
| help | Add help taskbar button / link to docs |
| hide\_blockquote | Add possibility to hide long blocks of cited text in messages |
| http\_authentication | Make use of an existing HTTP authentication and perform login with the existing user credentials |
| identicon | Display unique github-like identification icons for contacts/addresses that do not have a photo image |
| identity\_select | Identity selection based on additional message headers |
| jqueryui | Provide the jQuery UI library with according themes |
| krb\_authentication | Kerberos authentication. Login with existing user credentials |
| [managesieve](wiki__Plugin-managesieve.md) | Allows to manage Sieve filters in a visual UI using the managesieve protocol |
| [markasjunk](https://github.com/roundcube/roundcubemail/tree/master/plugins/markasjunk) | Adds "mark as (not) spam" buttons to the message menu |
| new\_user\_dialog | Present identities settings dialog to new users |
| new\_user\_identity | Populates a new user's default identity from LDAP on their first visit |
| newmail\_notifier | Plays a sound or shows desktop notifications when new messages arrive |
| [password](https://github.com/roundcube/roundcubemail/tree/master/plugins/password) | Change user password using many via Settings using many methods (drivers) |
| redundant\_attachments | Provides a redundant storage (database/memcache/redis) for temporary uploaded attachment files |
| show\_additional\_headers | Fetch additional headers and display them in the message view |
| squirrelmail\_usercopy | Copy a new users identities and contacts from a nearby Squirrelmail installation |
| subscriptions\_option | Enable or disable the use of imap subscriptions per-user or globally |
| userinfo | Adds a tab to settings to display information about the current user |
| vcard\_attachments | Detects VCard attachments and show a button to add them to address book |
| virtuser\_file | File based User-to-Email and Email-to-User lookup |
| virtuser\_query | DB based User-to-Email and Email-to-User lookup |
| [zipdownload](https://github.com/roundcube/roundcubemail/tree/master/plugins/zipdownload) | Download all attachments of a message or a selection of messages as Zip archive |

## Activating Plugins

A plugin is not loaded until you enable it by adding its directory name to the config option `plugins`, as an array element. This is done by editing your local `config/config.inc.php` file.

For example, to enable plugins named `additional_message_headers` and `archive`, `config/config.inc.php` should contain this line:

```
    $config['plugins'] = array('additional_message_headers', 'archive');
```

To disable a plugin, just remove it from the list.

# Plugin Development

To learn more about developing plugins for Roundcube, see [Plugin API](wiki__Plugin-API.md).
