# mod_unixd - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_unixd.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_unixd

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Basic (required) security for Unix-family platforms. |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | unixd\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_unixd.c |

### Directives

- ![](../images/down.gif) [ChrootDir](#chrootdir)
- ![](../images/down.gif) [Group](#group)
- ![](../images/down.gif) [Suexec](#suexec)
- ![](../images/down.gif) [User](#user)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_unixd)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_unixd)

### See also

- [suEXEC support](suexec.md)

[![top](../images/up.gif)](#page-header)

## ChrootDir Directive [¶](#chrootdir "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Directory for apache to run chroot(8) after startup. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ChrootDir /path/to/directory` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | `mod_unixd` |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.2.10 and later |

This directive tells the server to chroot(8) to the
specified directory after startup, but before accepting requests
over the 'net.

Note that running the server under chroot is not simple,
and requires additional setup, particularly if you are running
scripts such as CGI or PHP. Please make sure you are properly
familiar with the operation of chroot before attempting to use
this feature.

[![top](../images/up.gif)](#page-header)

## Group Directive [¶](#group "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Group under which the server will answer requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `Group unix-group` |
| [Default:](mod__directive-dict.md#Default) | `Group #-1` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_unixd |

The `Group` directive sets the group under
which the server will answer requests. In order to use this
directive, the server must be run initially as `root`. If
you start the server as a non-root user, it will fail to change to the
specified group, and will instead continue to run as the group of the
original user. Unix-group is one of:

A group name
:   Refers to the given group by name.

`#` followed by a group number.
:   Refers to a group by its number.

### Example

```
Group www-group
```

It is recommended that you set up a new group specifically for
running the server. Some admins use user `nobody`,
but this is not always possible or desirable.

### Security

Don't set `Group` (or `User`) to `root` unless
you know exactly what you are doing, and what the dangers are.

### See also

- `VHostGroup`
- `SuexecUserGroup`

[![top](../images/up.gif)](#page-header)

## Suexec Directive [¶](#suexec "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable or disable the suEXEC feature |
| [Syntax:](mod__directive-dict.md#Syntax) | `Suexec On|Off` |
| [Default:](mod__directive-dict.md#Default) | `On if suexec binary exists with proper owner and mode, Off otherwise` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_unixd |

When On, startup will fail if the suexec binary doesn't exist
or has an invalid owner or file mode.

When Off, suEXEC will be disabled even if the suexec binary exists
and has a valid owner and file mode.

[![top](../images/up.gif)](#page-header)

## User Directive [¶](#user "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The userid under which the server will answer requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `User unix-userid` |
| [Default:](mod__directive-dict.md#Default) | `User #-1` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_unixd |

The `User` directive sets the user ID as
which the server will answer requests. In order to use this
directive, the server must be run initially as `root`.
If you start the server as a non-root user, it will fail to change
to the lesser privileged user, and will instead continue to run as
that original user. If you do start the server as `root`,
then it is normal for the parent process to remain running as root.
Unix-userid is one of:

A username
:   Refers to the given user by name.

# followed by a user number.
:   Refers to a user by its number.

The user should have no privileges that result in it being
able to access files that are not intended to be visible to the
outside world, and similarly, the user should not be able to
execute code that is not meant for HTTP requests. It is
recommended that you set up a new user and group specifically for
running the server. Some admins use user `nobody`, but
this is not always desirable, since the `nobody` user
can have other uses on the system.

### Security

Don't set `User` (or `Group`) to `root` unless
you know exactly what you are doing, and what the dangers are.

### See also

- `VHostUser`
- `SuexecUserGroup`

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_unixd.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_unixd.html "Français") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/mod_unixd.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
