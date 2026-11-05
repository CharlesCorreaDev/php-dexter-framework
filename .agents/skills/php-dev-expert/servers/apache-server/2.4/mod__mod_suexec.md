# mod_suexec - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_suexec.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_suexec

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Allows CGI scripts to run as a specified user and Group |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | suexec\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_suexec.c |

### Summary

This module, in combination with the `suexec` support program allows
CGI scripts to run as a specified user and Group.

### Directives

- ![](../images/down.gif) [SuexecUserGroup](#suexecusergroup)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_suexec)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_suexec)

### See also

- [SuEXEC support](suexec.md)

[![top](../images/up.gif)](#page-header)

## SuexecUserGroup Directive [¶](#suexecusergroup "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | User and group for CGI programs to run as |
| [Syntax:](mod__directive-dict.md#Syntax) | `SuexecUserGroup User Group` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_suexec |

The `SuexecUserGroup` directive allows you
to specify a user and group for CGI programs to run as. Non-CGI
requests are still processed with the user specified in the `User` directive.

### Example

```
SuexecUserGroup nobody nogroup
```

Startup will fail if this directive is specified but the suEXEC
feature is disabled.

### See also

- `Suexec`

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_suexec.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_suexec.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_suexec.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_suexec.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/mod_suexec.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
