# mod_info - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_info.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_info

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Provides a comprehensive overview of the server configuration |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | info\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_info.c |

### Summary

To configure `mod_info`, add the following to your
`httpd.conf` file.

```
<Location "/server-info">
    SetHandler server-info
</Location>
```

You may wish to use `mod_authz_host` inside the
`<Location>`
directive to limit access to your server configuration
information:

```
<Location "/server-info">
    SetHandler server-info
    Require host example.com
</Location>
```

Once configured, the server information is obtained by
accessing `http://your.host.example.com/server-info`

### Topics

- ![](../images/down.gif) [Security Issues](#security)
- ![](../images/down.gif) [Selecting the information shown](#queries)
- ![](../images/down.gif) [Dumping the configuration on startup](#startup)
- ![](../images/down.gif) [Known Limitations](#limitations)

### Directives

- ![](../images/down.gif) [AddModuleInfo](#addmoduleinfo)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_info)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_info)

[![top](../images/up.gif)](#page-header)

## Security Issues [¶](#security "Permanent link")

Once `mod_info` is loaded into the server, its
handler capability is available in *all* configuration
files, including per-directory files (*e.g.*,
`.htaccess`). This may have security-related
ramifications for your site.

In particular, this module can leak sensitive information
from the configuration directives of other Apache modules such as
system paths, usernames/passwords, database names, etc. Therefore,
this module should **only** be
used in a controlled environment and always with caution.

You will probably want to use `mod_authz_host`
to limit access to your server configuration information.

### Access control

```
<Location "/server-info">
    SetHandler server-info
    # Allow access from server itself
    Require ip 127.0.0.1

    # Additionally, allow access from local workstation
    Require ip 192.168.1.17
</Location>
```

[![top](../images/up.gif)](#page-header)

## Selecting the information shown [¶](#queries "Permanent link")

By default, the server information includes a list of
all enabled modules, and for each module, a description of
the directives understood by that module, the hooks implemented
by that module, and the relevant directives from the current
configuration.

Other views of the configuration information are available by
appending a query to the `server-info` request. For
example, `http://your.host.example.com/server-info?config`
will show all configuration directives.

`?<module-name>`
:   Only information relevant to the named module

`?config`
:   Just the configuration directives, not sorted by module

`?hooks`
:   Only the list of Hooks each module is attached to

`?list`
:   Only a simple list of enabled modules

`?server`
:   Only the basic server information

`?providers`
:   List the providers that are available on your server

[![top](../images/up.gif)](#page-header)

## Dumping the configuration on startup [¶](#startup "Permanent link")

If the config define `-DDUMP_CONFIG` is set,
`mod_info` will dump the pre-parsed configuration to
`stdout` during server startup.

```
httpd -DDUMP_CONFIG -k start
```

Pre-parsed means that directives like
`<IfDefine>` and
`<IfModule>` are
evaluated and environment variables are replaced. However it does
not represent the final state of the configuration. In particular,
it does not represent the merging or overriding that may happen
for repeated directives.

This is roughly equivalent to the `?config` query.

[![top](../images/up.gif)](#page-header)

## Known Limitations [¶](#limitations "Permanent link")

`mod_info` provides its information by reading the
parsed configuration, rather than reading the original configuration
file. There are a few limitations as a result of the way the parsed
configuration tree is created:

- Directives which are executed immediately rather than being
  stored in the parsed configuration are not listed. These include
  `ServerRoot`,
  `LoadModule`, and
  `LoadFile`.
- Directives which control the configuration file itself, such as
  `Include`,
  `<IfModule>` and
  `<IfDefine>` are not
  listed, but the included configuration directives are.
- Comments are not listed. (This may be considered a feature.)
- Configuration directives from `.htaccess` files are
  not listed (since they do not form part of the permanent server
  configuration).
- Container directives such as
  `<Directory>`
  are listed normally, but `mod_info` cannot figure
  out the line number for the closing
  `</Directory>`.
- Directives generated by third party modules such as [mod\_perl](http://perl.apache.org)
  might not be listed.

[![top](../images/up.gif)](#page-header)

## AddModuleInfo Directive [¶](#addmoduleinfo "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Adds additional information to the module information displayed by the server-info handler |
| [Syntax:](mod__directive-dict.md#Syntax) | `AddModuleInfo module-name string` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_info |

This allows the content of string to be shown as
HTML interpreted, **Additional Information** for
the module module-name. Example:

```
AddModuleInfo mod_deflate.c 'See <a \
    href="http://httpd.apache.org/docs/2.4/mod/mod_deflate.html">\
    http://httpd.apache.org/docs/2.4/mod/mod_deflate.html</a>'
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_info.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_info.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_info.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_info.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
