# mod_userdir - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_userdir.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_userdir.html) to go to the current version of this document.

# Apache Module mod\_userdir

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | User-specific directories |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | userdir\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_userdir.c |

### Summary

This module allows user-specific directories to be accessed using the
`http://example.com/~user/` syntax.

### Directives

- ![](../images/down.gif) [UserDir](#userdir)

### See also

- [Mapping URLs to the
  Filesystem](urlmapping.md)
- [public\_html
  tutorial](howto__public_html.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## UserDir Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Location of the user-specific directories |
| [Syntax:](mod__directive-dict.md#Syntax) | `UserDir directory-filename [directory-filename] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_userdir |

The `UserDir` directive sets the real
directory in a user's home directory to use when a request for a
document for a user is received. *Directory-filename* is
one of the following:

- The name of a directory or a pattern such as those shown
  below.
- The keyword `disabled`. This turns off
  *all* username-to-directory translations except those
  explicitly named with the `enabled` keyword (see
  below).
- The keyword `disabled` followed by a
  space-delimited list of usernames. Usernames that appear in
  such a list will *never* have directory translation
  performed, even if they appear in an `enabled`
  clause.
- The keyword `enabled` followed by a
  space-delimited list of usernames. These usernames will have
  directory translation performed even if a global disable is
  in effect, but not if they also appear in a
  `disabled` clause.

If neither the `enabled` nor the
`disabled` keywords appear in the
`Userdir` directive, the argument is treated as a
filename pattern, and is used to turn the name into a directory
specification. A request for
`http://www.example.com/~bob/one/two.html` will be
translated to:

| UserDir directive used | Translated path |
| --- | --- |
| UserDir public\_html | ~bob/public\_html/one/two.html |
| UserDir /usr/web | /usr/web/bob/one/two.html |
| UserDir /home/\*/www | /home/bob/www/one/two.html |

The following directives will send redirects to the client:

| UserDir directive used | Translated path |
| --- | --- |
| UserDir http://www.example.com/users | http://www.example.com/users/bob/one/two.html |
| UserDir http://www.example.com/\*/usr | http://www.example.com/bob/usr/one/two.html |
| UserDir http://www.example.com/~\*/ | http://www.example.com/~bob/one/two.html |

**Be careful when using this directive; for instance,
`"UserDir ./"` would map `"/~root"` to
`"/"` - which is probably undesirable. It is strongly
recommended that your configuration include a "`UserDir
disabled root`" declaration. See also the `Directory` directive and the [Security Tips](misc__security_tips.md) page for
more information.**

Additional examples:

To allow a few users to have `UserDir` directories, but
not anyone else, use the following:

`UserDir disabled  
UserDir enabled user1 user2 user3`

To allow most users to have `UserDir` directories, but
deny this to a few, use the following:

`UserDir disabled user4 user5 user6`

It is also possible to specify alternative user directories.
If you use a command like:

`Userdir public_html /usr/web http://www.example.com/`

With a request for
`http://www.example.com/~bob/one/two.html`, will try to
find the page at `~bob/public_html/one/two.html` first, then
`/usr/web/bob/one/two.html`, and finally it will send a
redirect to `http://www.example.com/bob/one/two.html`.

If you add a redirect, it must be the last alternative in the list.
Apache cannot determine if the redirect succeeded or not, so if you have
the redirect earlier in the list, that will always be the alternative
that is used.

User directory substitution is not active by default in versions
2.1.4 and later. In earlier versions, `UserDir public_html`
was assumed if no `UserDir`
directive was present.

### See also

- [public\_html tutorial](howto__public_html.md)

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_userdir.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_userdir.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_userdir.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/mod_userdir.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
