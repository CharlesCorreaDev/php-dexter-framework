# Upgrading to 2.2 from 2.0 - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/upgrading.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/upgrading.html) to go to the current version of this document.

# Upgrading to 2.2 from 2.0

In order to assist folks upgrading, we maintain a document
describing information critical to existing Apache users. These
are intended to be brief notes, and you should be able to find
more information in either the [New Features](new_features_2_2.md) document, or in
the `src/CHANGES` file.

This document describes only the changes from 2.0 to 2.2. If you
are upgrading from version 1.3, you should also consult the [1.3 to 2.0
upgrading document.](http://httpd.apache.org/docs/2.0/upgrading.html)

- ![](./images/down.gif) [Compile-Time Configuration Changes](#compile-time)
- ![](./images/down.gif) [Run-Time Configuration Changes](#run-time)
- ![](./images/down.gif) [Misc Changes](#misc)
- ![](./images/down.gif) [Third Party Modules](#third-party)

### See also

- [Overview of new features in
  Apache 2.2](new_features_2_2.md)

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## Compile-Time Configuration Changes

The compilation process is very similar to the one used in
version 2.0. Your old `configure` command line (as
found in `build/config.nice` in the installed server
directory) can be used in some cases. The most significant change
required will be to account for changes in module names, in
particular for the authentication and authorization modules.
Some details of changes:

- mod\_imap has been renamed to `mod_imagemap`
- mod\_auth has been split up into `mod_auth_basic`,
  `mod_authn_file`, `mod_authz_user`, and
  `mod_authz_groupfile`
- mod\_access has been renamed to `mod_authz_host`
- mod\_auth\_ldap has been renamed to `mod_authnz_ldap`
- Upgraded to require the APR 1.0 API.
- Updated bundled PCRE version to 5.0

[![top](./images/up.gif)](#page-header)

## Run-Time Configuration Changes

Your existing version 2.0 config files and startup scripts can
usually be used unchanged in version 2.2. Some small
adjustments may be necessary for particular configurations as
discussed below. In addition, if you dynamically load the
standard modules using the `LoadModule` directive, then you will
need to account for the module name changes mentioned above.

If you choose to use the new default
configuration file for version 2.2, you will find that it has
been greatly simplified by removing all but the most essential
configuration settings. A set of example configuration settings
for more advanced features is present in the
`conf/extra/` directory of the installed server. Default
configuration files are installed in the `conf/original`
directory.

Some runtime configuration changes that you may notice:

- The `apachectl` option
  `startssl` is no longer available. To enable SSL
  support, you should edit `httpd.conf` to include the
  relevant `mod_ssl` directives and then use
  `apachectl start` to start the server. An example
  configuration to activate `mod_ssl` has been
  included in `conf/extra/httpd-ssl.conf`.
- The default setting of `UseCanonicalName` is now
  `Off`. If you did not have this directive in your
  config file, you can add `UseCanonicalName On` to
  retain the old behavior.
- The module `mod_userdir` will no longer act
  on requests unless a `UserDir` directive specifying a
  directory name is present in the config file. To restore the
  old default behavior, place the directive `UserDir
  public_html` in your config file.
- The directive `AuthDigestFile`
  from `mod_auth_digest` has been merged with
  `AuthUserFile`
  and is now part of `mod_authn_file`.
- `RewriteRule` directives
  are evaluated before `ProxyPass` ones.

[![top](./images/up.gif)](#page-header)

## Misc Changes

- The module `mod_cache`, which was
  experimental in Apache 2.0, is now a standard module.
- The module `mod_disk_cache`, which was
  experimental in Apache 2.0, is now a standard module.
- The module `mod_mem_cache`, which was
  experimental in Apache 2.0, is now a standard module.
- The module `mod_charset_lite`, which was
  experimental in Apache 2.0, is now a standard module.
- The module `mod_dumpio`, which was
  experimental in Apache 2.0, is now a standard module.

[![top](./images/up.gif)](#page-header)

## Third Party Modules

Many third-party modules designed for version 2.0 will work
unchanged with the Apache HTTP Server version 2.2. But all
modules must be recompiled before being loaded.

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/upgrading.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/upgrading.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/upgrading.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/upgrading.html "Japanese")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
