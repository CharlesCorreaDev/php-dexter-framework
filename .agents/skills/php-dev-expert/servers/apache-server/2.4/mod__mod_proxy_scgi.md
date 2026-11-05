# mod_proxy_scgi - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_proxy_scgi.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_proxy\_scgi

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | SCGI gateway module for `mod_proxy` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_scgi\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_scgi.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.2.14 and later |

### Summary

This module *requires* the service of `mod_proxy`. It provides support for the
[SCGI protocol, version
1](http://python.ca/scgi/protocol.txt).

Thus, in order to get the ability of handling the SCGI protocol,
`mod_proxy` and `mod_proxy_scgi` have to
be present in the server.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Topics

- ![](../images/down.gif) [Examples](#examples)
- ![](../images/down.gif) [Environment Variables](#env)

### Directives

- ![](../images/down.gif) [ProxySCGIInternalRedirect](#proxyscgiinternalredirect)
- ![](../images/down.gif) [ProxySCGISendfile](#proxyscgisendfile)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_proxy_scgi)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_proxy_scgi)

### See also

- `mod_proxy`
- `mod_proxy_balancer`

[![top](../images/up.gif)](#page-header)

## Examples [¶](#examples "Permanent link")

Remember, in order to make the following examples work, you have to
enable `mod_proxy` and `mod_proxy_scgi`.

### Simple gateway

```
ProxyPass "/scgi-bin/" "scgi://localhost:4000/"
```

The balanced gateway needs `mod_proxy_balancer` and
at least one load balancer algorithm module, such as
`mod_lbmethod_byrequests`, in addition to the proxy
modules listed above. `mod_lbmethod_byrequests` is the
default, and will be used for this example configuration.

### Balanced gateway

```
ProxyPass "/scgi-bin/" "balancer://somecluster/"
<Proxy "balancer://somecluster">
    BalancerMember "scgi://localhost:4000"
    BalancerMember "scgi://localhost:4001"
</Proxy>
```

[![top](../images/up.gif)](#page-header)

## Environment Variables [¶](#env "Permanent link")

In addition to the configuration directives that control the
behavior of `mod_proxy`, an environment
variable may also control the SCGI protocol
provider:

proxy-scgi-pathinfo
:   By default `mod_proxy_scgi` will neither create
    nor export the PATH\_INFO environment variable. This allows
    the backend SCGI server to correctly determine SCRIPT\_NAME
    and Script-URI and be compliant with RFC 3875 section 3.3.
    If instead you need `mod_proxy_scgi` to generate
    a "best guess" for PATH\_INFO, set this env-var. The
    variable must be set before `SetEnv`
    is effective. `SetEnvIf` can be
    used instead: `SetEnvIf Request_URI . proxy-scgi-pathinfo`

[![top](../images/up.gif)](#page-header)

## ProxySCGIInternalRedirect Directive [¶](#proxyscgiinternalredirect "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable or disable internal redirect responses from the backend |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxySCGIInternalRedirect On|Off|Headername` |
| [Default:](mod__directive-dict.md#Default) | `ProxySCGIInternalRedirect On` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_scgi |
| [Compatibility:](mod__directive-dict.md#Compatibility) | The Headername feature is available in version 2.4.13 and later |

The `ProxySCGIInternalRedirect` enables the backend
to internally redirect the gateway to a different URL. This feature
originates in `mod_cgi`, which internally redirects the
response if the response status is `OK` (`200`) and
the response contains a `Location` (or configured alternate
header) and its value starts with a slash (`/`). This value is
interpreted as a new local URL that Apache httpd internally redirects to.

`mod_proxy_scgi` does the same as
`mod_cgi` in this regard, except that you can turn off the
feature or specify the use of a header other than `Location`.

### Example

```
    ProxySCGIInternalRedirect Off

# Django and some other frameworks will fully qualify "local URLs"
# set by the application, so an alternate header must be used.
<Location /django-app/>
    ProxySCGIInternalRedirect X-Location
</Location>
```

[![top](../images/up.gif)](#page-header)

## ProxySCGISendfile Directive [¶](#proxyscgisendfile "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable evaluation of X-Sendfile pseudo response header |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxySCGISendfile On|Off|Headername` |
| [Default:](mod__directive-dict.md#Default) | `ProxySCGISendfile Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_scgi |

The `ProxySCGISendfile` directive enables the
SCGI backend to let files be served directly by the gateway. This is useful
for performance purposes — httpd can use `sendfile` or other
optimizations, which are not possible if the file comes over the backend
socket. Additionally, the file contents are not transmitted twice.

The `ProxySCGISendfile` argument determines the
gateway behavior:

`Off`
:   No special handling takes place.

`On`
:   The gateway looks for a backend response header called
    `X-Sendfile` and interprets the value as the filename to serve.
    The header is removed from the final response headers. This is equivalent to
    `ProxySCGISendfile X-Sendfile`.

anything else
:   Similar to `On`, but instead of the hardcoded header name
    `X-Sendfile`, the argument is used as the header name.

### Example

```
# Use the default header (X-Sendfile)
ProxySCGISendfile On

# Use a different header
ProxySCGISendfile X-Send-Static
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_proxy_scgi.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_proxy_scgi.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
