# mod_authz_owner - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authz_owner.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_authz\_owner

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Authorization based on file ownership |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authz\_owner\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authz\_owner.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module authorizes access to files by comparing the userid used
for HTTP authentication (the web userid) with the file-system owner or
group of the requested file. The supplied username and password
must be already properly verified by an authentication module,
such as `mod_auth_basic` or
`mod_auth_digest`. `mod_authz_owner`
recognizes two arguments for the `Require` directive, `file-owner` and
`file-group`, as follows:

`file-owner`
:   The supplied web-username must match the system's name for the
    owner of the file being requested. That is, if the operating system
    says the requested file is owned by `jones`, then the
    username used to access it through the web must be `jones`
    as well.

`file-group`
:   The name of the system group that owns the file must be present
    in a group database, which is provided, for example, by `mod_authz_groupfile` or `mod_authz_dbm`,
    and the web-username must be a member of that group. For example, if
    the operating system says the requested file is owned by (system)
    group `accounts`, the group `accounts` must
    appear in the group database and the web-username used in the request
    must be a member of that group.

### Note

If `mod_authz_owner` is used in order to authorize
a resource that is not actually present in the filesystem
(*i.e.* a virtual resource), it will deny the access.

Particularly it will never authorize [content negotiated
"MultiViews"](content-negotiation.md#multiviews) resources.

### Topics

- ![](../images/down.gif) [Configuration Examples](#examples)

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authz_owner)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authz_owner)

### See also

- `Require`

[![top](../images/up.gif)](#page-header)

## Configuration Examples [¶](#examples "Permanent link")

### Require file-owner

Consider a multi-user system running the Apache Web server, with
each user having his or her own files in `~/public_html/private`. Assuming that there is a single
`AuthDBMUserFile` database
that lists all of their web-usernames, and that these usernames match
the system's usernames that actually own the files on the server, then
the following stanza would allow only the user himself access to his
own files. User `jones` would not be allowed to access
files in `/home/smith/public_html/private` unless they
were owned by `jones` instead of `smith`.

```
<Directory "/home/*/public_html/private">
    AuthType Basic
    AuthName MyPrivateFiles
    AuthBasicProvider dbm
    AuthDBMUserFile "/usr/local/apache2/etc/.htdbm-all"
    Require file-owner
</Directory>
```

### Require file-group

Consider a system similar to the one described above, but with
some users that share their project files in
`~/public_html/project-foo`. The files are owned by the
system group `foo` and there is a single `AuthDBMGroupFile` database that
contains all of the web-usernames and their group membership,
*i.e.* they must be at least member of a group named
`foo`. So if `jones` and `smith`
are both member of the group `foo`, then both will be
authorized to access the `project-foo` directories of
each other.

```
<Directory "/home/*/public_html/project-foo">
    AuthType Basic
    AuthName "Project Foo Files"
    AuthBasicProvider dbm
    
    # combined user/group database
    AuthDBMUserFile  "/usr/local/apache2/etc/.htdbm-all"
    AuthDBMGroupFile "/usr/local/apache2/etc/.htdbm-all"
    
    Satisfy All
    Require file-group
</Directory>
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authz_owner.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authz_owner.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_authz_owner.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_authz_owner.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
