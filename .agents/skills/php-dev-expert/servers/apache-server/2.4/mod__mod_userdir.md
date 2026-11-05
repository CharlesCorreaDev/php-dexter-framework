# mod_userdir - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_userdir.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_userdir

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | User-specific directories |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | userdir\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_userdir.c |

### Summary

By using this module you are allowing multiple users
to host content within the same origin. The same origin policy is a key
principle of Javascript and web security. By hosting web pages in the same
origin these pages can read and control each other and security issues in
one page may affect another. This is particularly dangerous in combination
with web pages involving dynamic content and authentication and when
your users don't necessarily trust each other.

This module allows user-specific directories to be accessed using the
`http://example.com/~user/` syntax.

### Directives

- ![](../images/down.gif) [UserDir](#userdir)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_userdir)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_userdir)

### See also

- [Mapping URLs to the
  Filesystem](urlmapping.md)
- [public\_html
  tutorial](howto__public_html.md)

[![top](../images/up.gif)](#page-header)

## UserDir Directive [¶](#userdir "Permanent link")

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

```
UserDir disabled
UserDir enabled user1 user2 user3
```

To allow most users to have `UserDir` directories, but
deny this to a few, use the following:

```
UserDir disabled user4 user5 user6
```

It is also possible to specify alternative user directories.
If you use a command like:

```
UserDir "public_html" "/usr/web" "http://www.example.com/"
```

With a request for
`http://www.example.com/~bob/one/two.html`, will try to
find the page at `~bob/public_html/one/two.html` first, then
`/usr/web/bob/one/two.html`, and finally it will send a
redirect to `http://www.example.com/bob/one/two.html`.

If you add a redirect, it must be the last alternative in the list.
Apache httpd cannot determine if the redirect succeeded or not, so if you have
the redirect earlier in the list, that will always be the alternative
that is used.

User directory substitution is not active by default in versions
2.1.4 and later. In earlier versions, `UserDir public_html`
was assumed if no `UserDir`
directive was present.

### Merging details

Lists of specific enabled and disabled users are replaced, not merged,
from global to virtual host scope

### See also

- [Per-user web directories tutorial](howto__public_html.md)

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_userdir.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_userdir.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_userdir.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_userdir.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/mod_userdir.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
