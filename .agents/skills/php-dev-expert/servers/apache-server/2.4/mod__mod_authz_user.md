# mod_authz_user - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authz_user.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_authz\_user

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | User Authorization |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authz\_user\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authz\_user.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module provides authorization capabilities so that
authenticated users can be allowed or denied access to portions
of the web site. `mod_authz_user` grants
access if the authenticated user is listed in a `Require user`
directive. Alternatively `Require valid-user` can be used to
grant access to all successfully authenticated users.

### Topics

- ![](../images/down.gif) [The Require Directives](#requiredirectives)

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authz_user)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authz_user)

### See also

- `Require`
- [Authorization Result States](mod__mod_authz_core.md#authzresults)

[![top](../images/up.gif)](#page-header)

## The Require Directives [¶](#requiredirectives "Permanent link")

Apache's `Require`
directives are used during the authorization phase to ensure that
a user is allowed to access a resource. mod\_authz\_user extends the
authorization types with `user` and `valid-user`.

Since v2.4.8, [expressions](expr.md) are supported
within the user require directives.

### Require user

This directive specifies a list of users that are allowed to gain
access.

```
Require user john paul george ringo
```

### Require valid-user

When this directive is specified, any successfully authenticated
user will be allowed to gain access.

```
Require valid-user
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authz_user.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authz_user.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_authz_user.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_authz_user.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
