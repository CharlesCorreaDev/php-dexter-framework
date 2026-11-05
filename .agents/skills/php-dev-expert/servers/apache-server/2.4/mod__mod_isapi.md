# mod_isapi - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_isapi.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_isapi

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | ISAPI Extensions within Apache for Windows |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | isapi\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_isapi.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Win32 only |

### Summary

This module implements the Internet Server extension API. It
allows Internet Server extensions (*e.g.* ISAPI .dll
modules) to be served by Apache for Windows, subject to the
noted restrictions.

ISAPI extension modules (.dll files) are written by third
parties. The Apache Group does not author these modules, so we
provide no support for them. Please contact the ISAPI's author
directly if you are experiencing problems running their ISAPI
extension. **Please *do not* post such problems to
Apache's lists or bug reporting pages.**

### Topics

- ![](../images/down.gif) [Usage](#usage)
- ![](../images/down.gif) [Additional Notes](#notes)
- ![](../images/down.gif) [Programmer's Journal](#journal)

### Directives

- ![](../images/down.gif) [ISAPIAppendLogToErrors](#isapiappendlogtoerrors)
- ![](../images/down.gif) [ISAPIAppendLogToQuery](#isapiappendlogtoquery)
- ![](../images/down.gif) [ISAPICacheFile](#isapicachefile)
- ![](../images/down.gif) [ISAPIFakeAsync](#isapifakeasync)
- ![](../images/down.gif) [ISAPILogNotSupported](#isapilognotsupported)
- ![](../images/down.gif) [ISAPIReadAheadBuffer](#isapireadaheadbuffer)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_isapi)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_isapi)

[![top](../images/up.gif)](#page-header)

## Usage [¶](#usage "Permanent link")

In the server configuration file, use
the `AddHandler` directive to
associate ISAPI files with the `isapi-handler` handler, and map
it to them with their file extensions. To enable any .dll file to be
processed as an ISAPI extension, edit the httpd.conf file and add the
following line:

```
AddHandler isapi-handler .dll
```

In older versions of the Apache server,
`isapi-isa` was the proper handler name, rather than
`isapi-handler`. As of 2.3 development versions of the Apache
server, `isapi-isa` is no longer valid. You will need to
change your configuration to use `isapi-handler`
instead.

There is no capability within the Apache server to leave a
requested module loaded. However, you may preload and keep a
specific module loaded by using the following syntax in your
httpd.conf:

```
ISAPICacheFile c:/WebWork/Scripts/ISAPI/mytest.dll
```

Whether or not you have preloaded an ISAPI extension, all
ISAPI extensions are governed by the same permissions and
restrictions as CGI scripts. That is, `Options` `ExecCGI` must be set for the
directory that contains the ISAPI .dll file.

Review the [Additional Notes](#notes) and the [Programmer's Journal](#journal) for additional details
and clarification of the specific ISAPI support offered by
`mod_isapi`.

[![top](../images/up.gif)](#page-header)

## Additional Notes [¶](#notes "Permanent link")

Apache's ISAPI implementation conforms to all of the ISAPI
2.0 specification, except for some "Microsoft-specific"
extensions dealing with asynchronous I/O. Apache's I/O model
does not allow asynchronous reading and writing in a manner
that the ISAPI could access. If an ISA tries to access
unsupported features, including async I/O, a message is placed
in the error log to help with debugging. Since these messages
can become a flood, the directive `ISAPILogNotSupported
Off` exists to quiet this noise.

Some servers, like Microsoft IIS, load the ISAPI extension
into the server and keep it loaded until memory usage is too
high, or unless configuration options are specified. Apache
currently loads and unloads the ISAPI extension each time it is
requested, unless the `ISAPICacheFile` directive is specified.
This is inefficient, but Apache's memory model makes this the
most effective method. Many ISAPI modules are subtly
incompatible with the Apache server, and unloading these
modules helps to ensure the stability of the server.

Also, remember that while Apache supports ISAPI Extensions,
it **does not support ISAPI Filters**. Support for
filters may be added at a later date, but no support is planned
at this time.

[![top](../images/up.gif)](#page-header)

## Programmer's Journal [¶](#journal "Permanent link")

If you are programming Apache 2.0 `mod_isapi`
modules, you must limit your calls to `ServerSupportFunction`
to the following directives:

`HSE_REQ_SEND_URL_REDIRECT_RESP`
:   Redirect the user to another location.  
    This must be a fully qualified URL (*e.g.*
    `http://server/location`).

`HSE_REQ_SEND_URL`
:   Redirect the user to another location.  
    This cannot be a fully qualified URL, you are not allowed to
    pass the protocol or a server name (*e.g.* simply
    `/location`).  
    This redirection is handled by the server, not the
    browser.  

    ### Warning

    In their recent documentation, Microsoft appears to have
    abandoned the distinction between the two
    `HSE_REQ_SEND_URL` functions. Apache continues to treat
    them as two distinct functions with different requirements
    and behaviors.

`HSE_REQ_SEND_RESPONSE_HEADER`
:   Apache accepts a response body following the header if it
    follows the blank line (two consecutive newlines) in the
    headers string argument. This body cannot contain NULLs,
    since the headers argument is NULL terminated.

`HSE_REQ_DONE_WITH_SESSION`
:   Apache considers this a no-op, since the session will be
    finished when the ISAPI returns from processing.

`HSE_REQ_MAP_URL_TO_PATH`
:   Apache will translate a virtual name to a physical
    name.

`HSE_APPEND_LOG_PARAMETER`
:   This logged message may be captured in any of the following
    logs:

    - in the `\"%{isapi-parameter}n\"` component in a
      `CustomLog`
      directive
    - in the `%q` log component with the
      `ISAPIAppendLogToQuery`
      `On` directive
    - in the error log with the `ISAPIAppendLogToErrors` `On` directive

    The first option, the `%{isapi-parameter}n` component,
    is always available and preferred.

`HSE_REQ_IS_KEEP_CONN`
:   Will return the negotiated Keep-Alive status.

`HSE_REQ_SEND_RESPONSE_HEADER_EX`
:   Will behave as documented, although the `fKeepConn`
    flag is ignored.

`HSE_REQ_IS_CONNECTED`
:   Will report false if the request has been aborted.

Apache returns `FALSE` to any unsupported call to
`ServerSupportFunction`, and sets the
`GetLastError` value to
`ERROR_INVALID_PARAMETER`.

`ReadClient` retrieves the request body exceeding the
initial buffer (defined by `ISAPIReadAheadBuffer`). Based on the
`ISAPIReadAheadBuffer` setting (number of bytes
to buffer prior to calling the ISAPI handler) shorter requests are sent
complete to the extension when it is invoked. If the request is
longer, the ISAPI extension must use `ReadClient` to
retrieve the remaining request body.

`WriteClient` is supported, but only with the
`HSE_IO_SYNC` flag or no option flag (value of
`0`). Any other `WriteClient` request
will be rejected with a return value of `FALSE`, and a
`GetLastError` value of
`ERROR_INVALID_PARAMETER`.

`GetServerVariable` is supported, although extended server
variables do not exist (as defined by other servers.) All the
usual Apache CGI environment variables are available from
`GetServerVariable`, as well as the `ALL_HTTP`
and `ALL_RAW` values.

Since httpd 2.0, `mod_isapi` supports additional
features introduced in later versions of the ISAPI specification,
as well as limited emulation of async I/O and the
`TransmitFile` semantics. Apache httpd also supports preloading
ISAPI .dlls for performance.

[![top](../images/up.gif)](#page-header)

## ISAPIAppendLogToErrors Directive [¶](#isapiappendlogtoerrors "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Record `HSE_APPEND_LOG_PARAMETER` requests from ISAPI extensions to the error log |
| [Syntax:](mod__directive-dict.md#Syntax) | `ISAPIAppendLogToErrors on|off` |
| [Default:](mod__directive-dict.md#Default) | `ISAPIAppendLogToErrors off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_isapi |

Record `HSE_APPEND_LOG_PARAMETER` requests from ISAPI
extensions to the server error log.

[![top](../images/up.gif)](#page-header)

## ISAPIAppendLogToQuery Directive [¶](#isapiappendlogtoquery "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Record `HSE_APPEND_LOG_PARAMETER` requests from ISAPI extensions to the query field |
| [Syntax:](mod__directive-dict.md#Syntax) | `ISAPIAppendLogToQuery on|off` |
| [Default:](mod__directive-dict.md#Default) | `ISAPIAppendLogToQuery on` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_isapi |

Record `HSE_APPEND_LOG_PARAMETER` requests from ISAPI
extensions to the query field (appended to the `CustomLog` `%q`
component).

[![top](../images/up.gif)](#page-header)

## ISAPICacheFile Directive [¶](#isapicachefile "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | ISAPI .dll files to be loaded at startup |
| [Syntax:](mod__directive-dict.md#Syntax) | `ISAPICacheFile file-path [file-path] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_isapi |

Specifies a space-separated list of file names to be loaded
when the Apache server is launched, and remain loaded until the
server is shut down. This directive may be repeated for every
ISAPI .dll file desired. The full path name of each file should
be specified. If the path name is not absolute, it will be treated
relative to `ServerRoot`.

[![top](../images/up.gif)](#page-header)

## ISAPIFakeAsync Directive [¶](#isapifakeasync "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Fake asynchronous support for ISAPI callbacks |
| [Syntax:](mod__directive-dict.md#Syntax) | `ISAPIFakeAsync on|off` |
| [Default:](mod__directive-dict.md#Default) | `ISAPIFakeAsync off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_isapi |

While set to on, asynchronous support for ISAPI callbacks is
simulated.

[![top](../images/up.gif)](#page-header)

## ISAPILogNotSupported Directive [¶](#isapilognotsupported "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Log unsupported feature requests from ISAPI extensions |
| [Syntax:](mod__directive-dict.md#Syntax) | `ISAPILogNotSupported on|off` |
| [Default:](mod__directive-dict.md#Default) | `ISAPILogNotSupported off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_isapi |

Logs all requests for unsupported features from ISAPI
extensions in the server error log. This may help administrators
to track down problems. Once set to on and all desired ISAPI modules
are functioning, it should be set back to off.

[![top](../images/up.gif)](#page-header)

## ISAPIReadAheadBuffer Directive [¶](#isapireadaheadbuffer "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Size of the Read Ahead Buffer sent to ISAPI extensions |
| [Syntax:](mod__directive-dict.md#Syntax) | `ISAPIReadAheadBuffer size` |
| [Default:](mod__directive-dict.md#Default) | `ISAPIReadAheadBuffer 49152` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_isapi |

Defines the maximum size of the Read Ahead Buffer sent to
ISAPI extensions when they are initially invoked. All remaining
data must be retrieved using the `ReadClient` callback; some
ISAPI extensions may not support the `ReadClient` function.
Refer questions to the ISAPI extension's author.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_isapi.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_isapi.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_isapi.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
