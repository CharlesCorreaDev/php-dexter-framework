# Configuration · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Configuration

---

# Roundcube configuration options

Roundcube webmail has over 200 configuration options that allow you to customize it according to your needs and taste and to perfectly interact with your email server infrastructure.
After [Installation](wiki__Installation.md) local configuration files have to be created and adjusted accordingly.

Starting with Roundcube version 1.0, there's one single config file (`config/config.inc.php`) which only contains the configuration settings that differ from the defaults.
Older version have their configuration split in two files (`config/main.inc.php` and `db.inc.php`) which together contain all configuration parameters.

Configuration files are pure PHP files and therefore strictly have to respect the PHP syntax. If you see a blank page you likely have a syntax error on your config file(s). Check the web server's error logs to find out why and where.

The following sections will explain the most common settings one need to make before starting to use Roundcube. If the local config file doesn't already contain one of the listed options simply copy it from the `config/defaults.inc.php` file. There, every configuration option is preceded with a comment block that explains the option and the possible values to use.

## Minimal setup

### Database connection

`'db_dsnw'`

Database connection string for read+write operations.

Format: `db_provider://user:password@host/database`

Currently supported connection providers:

- `mysql`
- `pgsql`
- `sqlite` (an absolute path definition is required: `sqlite:////full/path/to/sqlite.db?mode=0646`)
- `mssql`
- `sqlsrv`

You can save a lot of transmission overhead by using unix socket. This only applies to setups where the database is on the same host as roundcube (which is quite often the case). Here is a configuration example for PostgreSQL:

```
pgsql://username:password@unix(/run/postgresql)/my_database
```

Note that you have to omit the actual name of the socket file (`.s.PGSQL.5432`)!

For more examples see [PEAR MDB2 Docs](http://pear.php.net/manual/en/package.database.mdb2.intro-dsn.php)

`'des_key'`

This key is used to encrypt the user's IMAP password which is temporarily stored in the session database.
For security reasons it's important that your Roundcube installation has its very own encryption key and that you \*don't use the default value! \*

### IMAP server connection

`'imap_host'`

Since version 1.8 `imap_host` is a required config parameter. IMAP host input on the login screen is no longer supported.

Prior to version 1.8 the login screen provides a text box where you need to enter the IMAP host which you want to connect to.
This box can be hidden by setting one fixed IMAP host address:

```
$config['imap_host'] = 'localhost';
```

To use SSL/TLS connection, enter the hostname with prefix "ssl://" or "tls://"

And if you want a drop-down list like it's explained in the comments you need something like this:

```
$config['imap_host'] = ['mail.example.com', 'webmail.example.com', 'ssl://mail.example.com:993'];
```

In order to show nice labels instead of the host names in the drop-down box write it this way:

```
$config['imap_host'] = [
  'mail.example.com' => 'Default Server',
  'webmail.example.com' => 'Webmail Server',
  'ssl://mail.example.com:993' => 'Secure Webmail Server'
];
```

`'login_lc'`

Usually email addresses are not case-sensitive and Roundcube by default converts the user name entered in the login form to lower case characters.
But your IMAP server may treat user names for login case-sensitive and this option will let you control if and how Roundcube converts the entered username at login:

0: disabled, don't convert the user name  
1: domain part only  
2: lower-case the entire user name (default)

`'password_charset'`

Use this option if your IMAP server doesn't support UTF-8 for passwords.
It's set to "ISO-8859-1" for backward compatibility of Roundcube.

`'username_domain'`

Automatically add this domain to user names for login. Only needed for IMAP servers that require full email addresses for login.
Specify an array with `'host' => 'domain'` values to support multiple hosts (from `imap_host`):

```
$config['username_domain'] = [
  'mail.example.com' => 'example.com',
  'othermail.example.com' => 'otherdomain.com',
];
```

`'auto_create_user'`

Sometimes hard to understand is the `'auto_create_user'` property. So here's a little background: Roundcube doesn't actually manage users, that's all the IMAP server's job. But Roundcube keeps a reference to IMAP users in its local database in order to store settings, address books, spell check dictionaries and cached messages for a particular user. With this option enabled (that's the default), a new Roundcube user reference is created once the IMAP login succeeds. If `auto_create_user` is set to False, the login only succeeds if there's a matching user-record in the local Roundcube database. Even if a user enters the correct password and the IMAP login succeeds, the login will fail with the message "Login failed" until you manually create such a record in Roundcube's database.

### Sending messages via SMTP

For sending emails, Roundcube uses the SMTP protocol to submit a composed message via the "outgoing mail server". Similar to the IMAP connection, configuring the SMTP server is part of a minimal Roundcube setup.

`'smtp_host'`

The SMTP server for outgoing messages. To use Implicit TLS, enter the hostname with prefix `ssl://`. To use STARTTLS, use prefix `tls://`.  
The host name can contain placeholders which will be replaced as follows:

%h - user's IMAP hostname  
%n - hostname (`$_SERVER['SERVER_NAME']`)  
%t - hostname without the first part  
%d - domain (http hostname `$_SERVER['HTTP_HOST']` without the first part)  
%z - IMAP domain (IMAP hostname without the first part)

For example %n = mail.domain.tld, %t = domain.tld

```
$config['smtp_host'] = 'tls://%h';
```

`'smtp_user'`

SMTP username (if the outgoing email server requires authentication). \
Use "%u" to let Roundcube use the IMAP login user name.

`'smtp_pass'`

SMTP password (if required)  
Use "%p" for the current IMAP login password.

### Restricting Sender Identities

As with almost any other email client, Roundcube users are free to set any number of sender identities for outgoing mail. This also includes to set an arbitrary email as sender address. A proper SMTP sending policy should prevent people from sending emails with other From: addresses than the one assigned with their account. In order to restrict the sender identity configuration and to avoid WTF when sending is rejected by the SMTP server, the Roundcube config offers the *`'identities_level'`* option which can be set to one of the following values:

0 - multiple identities with possibility to edit all parameters  
1 - multiple identities with possibility to edit all parameters except email address  
2 - one identity with possibility to edit all parameters  
3 - one identity with possibility to edit all parameters except email address  
4 - one identity with possibility to edit only signature

### Customize the look

`'skin_logo'`

This option replaces the Roundcube logo with a custom image.  
Specify an URL relative to the document root of your Roundcube installation.

`'support_url'`

This adds a link to every page to guide your users if they have questions or problems with your Roundcube installation.

You should provide an absolute URL to a support page with a form to submit questions to your support team.

**PLEASE DO NOT LINK TO THE ROUNDCUBE.NET WEBSITE HERE!**

### Defaults for user preferences

The default values for user preferences are defined in the [config/defaults.inc.php](https://github.com/roundcube/roundcubemail/blob/master/config/defaults.inc.php) file. Each option is described with comments right in that file.

### Spell checking

Roundcube has a spell checking feature built into the message composer. Since version 1.5.0 it needs to be enabled explicitly with

`'enable_spellcheck'`

In previous versions it was enabled by default using the remote spell checking API at <http://spell.roundcube.net> which is a hosted service provided by Roundcube.

Other spell checking backends can be configured. We recommend to use [pspell](https://www.php.net/manual/en/book.pspell.php) which operates on the local host using the aspell library.

`'spellcheck_engine'`

Set the spell checking engine. Possible values are:

- 'googie': the default (also used for connecting to Nox Spell Server, see 'spellcheck\_uri' setting)
- 'pspell': requires the PHP pspell module and aspell installed
- 'enchant': requires the PHP Enchant module
- 'atd': install your own [After the Deadline](http://www.afterthedeadline.com) server

`'spellcheck_uri'`

For locally installed [Googie Spell Check XML Service](https://github.com/roundcube/google-spell-pspell), Nox Spell Server or After the Deadline services specify the URI to call it.

`'spellcheck_languages'`

These languages can be selected for spell checking.  
Configure as a PHP style hash array: `['en' => 'English', 'de' => 'Deutsch']`  
Leave empty for default set of available language.

`'spellcheck_dictionary'`

Enables spellchecker exceptions dictionary.  
Setting it to 'shared' will make the dictionary shared by all users.
