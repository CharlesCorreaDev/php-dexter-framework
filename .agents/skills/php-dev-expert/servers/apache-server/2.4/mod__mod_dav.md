# mod_dav - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_dav.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_dav

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Distributed Authoring and Versioning ([WebDAV](http://www.webdav.org/)) functionality |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | dav\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_dav.c |

### Summary

This module provides class 1 and class 2 [WebDAV](http://www.webdav.org) ('Web-based Distributed
Authoring and Versioning') functionality for Apache. This
extension to the HTTP protocol allows creating, moving,
copying, and deleting resources and collections on a remote web
server.

### Topics

- ![](../images/down.gif) [Enabling WebDAV](#example)
- ![](../images/down.gif) [Security Issues](#security)
- ![](../images/down.gif) [Complex Configurations](#complex)

### Directives

- ![](../images/down.gif) [Dav](#dav)
- ![](../images/down.gif) [DavBasePath](#davbasepath)
- ![](../images/down.gif) [DavDepthInfinity](#davdepthinfinity)
- ![](../images/down.gif) [DavMinTimeout](#davmintimeout)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_dav)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_dav)

### See also

- `DavLockDB`
- `LimitXMLRequestBody`
- [WebDAV Resources](http://www.webdav.org)

[![top](../images/up.gif)](#page-header)

## Enabling WebDAV [¶](#example "Permanent link")

To enable `mod_dav`, add the following to a
container in your `httpd.conf` file:

```
Dav On
```

This enables the DAV file system provider, which is implemented
by the `mod_dav_fs` module. Therefore, that module
must be compiled into the server or loaded at runtime using the
`LoadModule` directive.

In addition, a location for the DAV lock database must be
specified in the global section of your `httpd.conf`
file using the `DavLockDB`
directive:

```
DavLockDB /usr/local/apache2/var/DavLock
```

The directory containing the lock database file must be
writable by the `User`
and `Group` under which
Apache is running.

In the example below, `<RequireAny>` is used to ensure that
DAV-specific methods (i.e., methods other than `GET`,
`POST` and `OPTIONS`) are limited to the
authenticated user.

If you want to set the maximum amount of
bytes that a DAV client can send at one request, you have to use
the `LimitXMLRequestBody`
directive. The "normal" `LimitRequestBody` directive has no effect on DAV
requests.

### Full Example

```
DavLockDB "/usr/local/apache2/var/DavLock"

<Directory "/usr/local/apache2/htdocs/foo">
    Dav On

    AuthType Basic
    AuthName DAV
    AuthUserFile "user.passwd"

    <RequireAny>
        Require method GET POST OPTIONS
        Require user admin
    </RequireAny>
</Directory>
```

[![top](../images/up.gif)](#page-header)

## Security Issues [¶](#security "Permanent link")

Since DAV access methods allow remote clients to manipulate
files on the server, you must take particular care to assure that
your server is secure before enabling `mod_dav`.

Any location on the server where DAV is enabled should be
protected by authentication. The use of HTTP Basic Authentication
is not recommended. You should use at least HTTP Digest
Authentication, which is provided by the
`mod_auth_digest` module. Nearly all WebDAV clients
support this authentication method. An alternative is Basic
Authentication over an [SSL](ssl.md) enabled
connection.

In order for `mod_dav` to manage files, it must
be able to write to the directories and files under its control
using the `User` and
`Group` under which
Apache is running. New files created will also be owned by this
`User` and `Group`. For this reason, it is
important to control access to this account. The DAV repository
is considered private to Apache; modifying files outside of Apache
(for example using FTP or filesystem-level tools) should not be
allowed.

`mod_dav` may be subject to various kinds of
denial-of-service attacks. The `LimitXMLRequestBody` directive can be
used to limit the amount of memory consumed in parsing large DAV
requests. The `DavDepthInfinity` directive can be
used to prevent `PROPFIND` requests on a very large
repository from consuming large amounts of memory. Another
possible denial-of-service attack involves a client simply filling
up all available disk space with many large files. There is no
direct way to prevent this in Apache, so you should avoid giving
DAV access to untrusted users.

[![top](../images/up.gif)](#page-header)

## Complex Configurations [¶](#complex "Permanent link")

One common request is to use `mod_dav` to
manipulate dynamic files (PHP scripts, CGI scripts, etc). This is
difficult because a `GET` request will always run the
script, rather than downloading its contents. One way to avoid
this is to map two different URLs to the content, one of which
will run the script, and one of which will allow it to be
downloaded and manipulated with DAV.

```
Alias "/phparea" "/home/gstein/php_files"
Alias "/php-source" "/home/gstein/php_files"
<Location "/php-source">
    Dav On
    ForceType text/plain
</Location>
```

With this setup, `http://example.com/phparea` can be
used to access the output of the PHP scripts, and
`http://example.com/php-source` can be used with a DAV
client to manipulate them.

[![top](../images/up.gif)](#page-header)

## Dav Directive [¶](#dav "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable WebDAV HTTP methods |
| [Syntax:](mod__directive-dict.md#Syntax) | `Dav On|Off|provider-name` |
| [Default:](mod__directive-dict.md#Default) | `Dav Off` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dav |

Use the `Dav` directive to enable the
WebDAV HTTP methods for the given container:

```
<Location "/foo">
    Dav On
</Location>
```

The value `On` is actually an alias for the default
provider `filesystem` which is served by the `mod_dav_fs` module. Note, that once you have DAV enabled
for some location, it *cannot* be disabled for sublocations.
For a complete configuration example have a look at the [section above](#example).

Do not enable WebDAV until you have secured your server. Otherwise
everyone will be able to distribute files on your system.

[![top](../images/up.gif)](#page-header)

## DavBasePath Directive [¶](#davbasepath "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Configure repository root path |
| [Syntax:](mod__directive-dict.md#Syntax) | `DavBasePath root-path` |
| [Default:](mod__directive-dict.md#Default) | `None` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dav |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.58 and later |

If a DAV repository is configured using a regular expression
match (such as `LocationMatch`)
then `mod_dav` will not be able to find the root of
the repository from the pathname alone. Third-party providers (for
example, Subversion's [mod\_dav\_svn](https://svnbook.red-bean.com/en/1.7/svn.ref.mod_dav_svn.conf.html))
may fail to handle requests without the correct repository root.

To allow providers to work correctly in such a configuration,
`DavBasePath` must be used.

```
<LocationMatch "^/repos/">
    Dav svn
    DavBasePath /repos
    SVNParentPath /var/svn
</LocationMatch>
```

[![top](../images/up.gif)](#page-header)

## DavDepthInfinity Directive [¶](#davdepthinfinity "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Allow PROPFIND, Depth: Infinity requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `DavDepthInfinity on|off` |
| [Default:](mod__directive-dict.md#Default) | `DavDepthInfinity off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dav |

Use the `DavDepthInfinity` directive to
allow the processing of `PROPFIND` requests containing the
header 'Depth: Infinity'. Because this type of request could constitute
a denial-of-service attack, by default it is not allowed.

[![top](../images/up.gif)](#page-header)

## DavMinTimeout Directive [¶](#davmintimeout "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Minimum amount of time the server holds a lock on a DAV resource |
| [Syntax:](mod__directive-dict.md#Syntax) | `DavMinTimeout seconds` |
| [Default:](mod__directive-dict.md#Default) | `DavMinTimeout 0` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dav |

When a client requests a DAV resource lock, it can also
specify a time when the lock will be automatically removed by
the server. This value is only a request, and the server can
ignore it or inform the client of an arbitrary value.

Use the `DavMinTimeout` directive to specify, in
seconds, the minimum lock timeout to return to a client.
Microsoft Web Folders defaults to a timeout of 120 seconds; the
`DavMinTimeout` can override this to a higher value
(like 600 seconds) to reduce the chance of the client losing
the lock due to network latency.

### Example

```
<Location "/MSWord">
    DavMinTimeout 600
</Location>
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_dav.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_dav.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_dav.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_dav.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
