# mod_cgi - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_cgi.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_cgi.html) to go to the current version of this document.

# Apache Module mod\_cgi

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Execution of CGI scripts |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | cgi\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_cgi.c |

### Summary

Any file that has the handler
`cgi-script` will be treated
as a CGI script, and run by the server, with its output being
returned to the client. Files acquire this handler either by
having a name containing an extension defined by the
`AddHandler` directive, or by being
in a `ScriptAlias`
directory.

For an introduction to using CGI scripts with Apache, see
our tutorial on [Dynamic Content
With CGI](howto__cgi.md).

When using a multi-threaded MPM under unix, the module
`mod_cgid` should be used in place of
this module. At the user level, the two modules are essentially
identical.

For backward-compatibility, the cgi-script handler will also be activated
for any file with the mime-type `application/x-httpd-cgi`. The
use of the magic mime-type is deprecated.

### Topics

- ![](../images/down.gif) [CGI Environment variables](#env)
- ![](../images/down.gif) [CGI Debugging](#cgi-debug)

### Directives

- ![](../images/down.gif) [ScriptLog](#scriptlog)
- ![](../images/down.gif) [ScriptLogBuffer](#scriptlogbuffer)
- ![](../images/down.gif) [ScriptLogLength](#scriptloglength)

### See also

- `AcceptPathInfo`
- `Options`
- `ScriptAlias`
- `AddHandler`
- [Running CGI programs under different
  user IDs](suexec.md)
- [CGI Specification](http://www.ietf.org/rfc/rfc3875)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## CGI Environment variables

The server will set the CGI environment variables as described
in the [CGI
specification](http://www.ietf.org/rfc/rfc3875), with the following provisions:

PATH\_INFO
:   This will not be available if the `AcceptPathInfo` directive is explicitly set to
    `off`. The default behavior, if `AcceptPathInfo` is not given, is that `mod_cgi` will accept path info (trailing `/more/path/info` following the script filename in the URI),
    while the core server will return a 404 NOT FOUND error for requests
    with additional path info. Omitting the `AcceptPathInfo` directive has the same effect as setting
    it `On` for `mod_cgi` requests.

REMOTE\_HOST
:   This will only be set if `HostnameLookups` is set to `on` (it
    is off by default), and if a reverse DNS lookup of the accessing
    host's address indeed finds a host name.

REMOTE\_IDENT
:   This will only be set if `IdentityCheck` is set to
    `on` and the accessing host supports the ident
    protocol. Note that the contents of this variable cannot be
    relied upon because it can easily be faked, and if there is a
    proxy between the client and the server, it is usually
    totally useless.

REMOTE\_USER
:   This will only be set if the CGI script is subject to
    authentication.

This module also leverages the core functions
[ap\_add\_common\_vars](https://ci.apache.org/projects/httpd/trunk/doxygen/group__APACHE__CORE__SCRIPT.html#ga0e81f9571a8a73f5da0e89e1f46d34b1) and
[ap\_add\_cgi\_vars](https://ci.apache.org/projects/httpd/trunk/doxygen/group__APACHE__CORE__SCRIPT.html#ga6b975cd7ff27a338cb8752381a4cc14f)
to add environment variables like:

DOCUMENT\_ROOT
:   Set with the content of the related `DocumentRoot` directive.

SERVER\_NAME
:   The fully qualified domain name related to the request.

SERVER\_ADDR
:   The IP address of the Virtual Host serving the request.

SERVER\_ADMIN
:   Set with the content of the related `ServerAdmin` directive.

For an exhaustive list it is suggested to write a basic CGI script
that dumps all the environment variables passed by Apache in a convenient format.

[![top](../images/up.gif)](#page-header)

## CGI Debugging

Debugging CGI scripts has traditionally been difficult, mainly
because it has not been possible to study the output (standard
output and error) for scripts which are failing to run
properly. These directives, included in Apache 1.2 and later,
provide more detailed logging of errors when they occur.

### CGI Logfile Format

When configured, the CGI error log logs any CGI which does not
execute properly. Each CGI script which fails to operate causes
several lines of information to be logged. The first two lines
are always of the format:

`%% [time] request-line  
%% HTTP-status CGI-script-filename`

If the error is that CGI script cannot be run, the log file
will contain an extra two lines:

`%%error  
error-message`

Alternatively, if the error is the result of the script
returning incorrect header information (often due to a bug in
the script), the following information is logged:

`%request  
All HTTP request headers received  
POST or PUT entity (if any)  
%response  
All headers output by the CGI script  
%stdout  
CGI standard output  
%stderr  
CGI standard error`

(The %stdout and %stderr parts may be missing if the script did
not output anything on standard output or standard error).

[![top](../images/up.gif)](#page-header)

## ScriptLog Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Location of the CGI script error logfile |
| [Syntax:](mod__directive-dict.md#Syntax) | `ScriptLog file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | `mod_cgi`, `mod_cgid` |

The `ScriptLog` directive sets the CGI
script error logfile. If no `ScriptLog` is given,
no error log is created. If given, any CGI errors are logged into the
filename given as argument. If this is a relative file or path it is
taken relative to the `ServerRoot`.

### Example

`ScriptLog logs/cgi_log`

This log will be opened as the user the child processes run
as, *i.e.* the user specified in the main `User` directive. This means that
either the directory the script log is in needs to be writable
by that user or the file needs to be manually created and set
to be writable by that user. If you place the script log in
your main logs directory, do **NOT** change the
directory permissions to make it writable by the user the child
processes run as.

Note that script logging is meant to be a debugging feature
when writing CGI scripts, and is not meant to be activated
continuously on running servers. It is not optimized for speed
or efficiency, and may have security problems if used in a
manner other than that for which it was designed.

[![top](../images/up.gif)](#page-header)

## ScriptLogBuffer Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum amount of PUT or POST requests that will be recorded in the scriptlog |
| [Syntax:](mod__directive-dict.md#Syntax) | `ScriptLogBuffer bytes` |
| [Default:](mod__directive-dict.md#Default) | `ScriptLogBuffer 1024` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | `mod_cgi`, `mod_cgid` |

The size of any PUT or POST entity body that is logged to
the file is limited, to prevent the log file growing too big
too quickly if large bodies are being received. By default, up
to 1024 bytes are logged, but this can be changed with this
directive.

[![top](../images/up.gif)](#page-header)

## ScriptLogLength Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Size limit of the CGI script logfile |
| [Syntax:](mod__directive-dict.md#Syntax) | `ScriptLogLength bytes` |
| [Default:](mod__directive-dict.md#Default) | `ScriptLogLength 10385760` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | `mod_cgi`, `mod_cgid` |

`ScriptLogLength` can be used to limit the
size of the CGI script logfile. Since the logfile logs a lot of
information per CGI error (all request headers, all script output)
it can grow to be a big file. To prevent problems due to unbounded
growth, this directive can be used to set an maximum file-size for
the CGI logfile. If the file exceeds this size, no more
information will be written to it.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_cgi.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_cgi.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_cgi.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
