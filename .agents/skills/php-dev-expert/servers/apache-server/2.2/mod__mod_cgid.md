# mod_cgid - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_cgid.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_cgid.html) to go to the current version of this document.

# Apache Module mod\_cgid

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Execution of CGI scripts using an external CGI daemon |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | cgid\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_cgid.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Unix threaded MPMs only |

### Summary

Except for the optimizations and the additional `ScriptSock` directive noted below,
`mod_cgid` behaves similarly to `mod_cgi`.
**See the `mod_cgi` summary for additional details
about Apache and CGI.**

On certain unix operating systems, forking a process from a
multi-threaded server is a very expensive operation because the
new process will replicate all the threads of the parent
process. In order to avoid incurring this expense on each CGI
invocation, `mod_cgid` creates an external daemon that is
responsible for forking child processes to run CGI scripts. The
main server communicates with this daemon using a unix domain
socket.

This module is used by default instead of
`mod_cgi` whenever a multi-threaded MPM
is selected during the compilation process. At the user level,
this module is identical in configuration and operation to
`mod_cgi`. The only exception is the
additional directive `ScriptSock` which gives the
name of the socket to use for communication with the cgi
daemon.

### Directives

- ![](../images/down.gif) [CGIDScriptTimeout](#cgidscripttimeout)
- ![](../images/right.gif) [ScriptLog](mod__mod_cgi.md#scriptlog)
- ![](../images/right.gif) [ScriptLogBuffer](mod__mod_cgi.md#scriptlogbuffer)
- ![](../images/right.gif) [ScriptLogLength](mod__mod_cgi.md#scriptloglength)
- ![](../images/down.gif) [ScriptSock](#scriptsock)

### See also

- `mod_cgi`
- [Running CGI programs under different
  user IDs](suexec.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## CGIDScriptTimeout Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The length of time to wait for more output from the CGI program |
| [Syntax:](mod__directive-dict.md#Syntax) | `CGIDScriptTimeout time[s|ms]` |
| [Default:](mod__directive-dict.md#Default) | `value of Timeout directive when unset` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_cgid |
| [Compatibility:](mod__directive-dict.md#Compatibility) | CGIDScriptTimeout defaults to zero in releases 2.4 and earlier |

This directive limits the length of time to wait for more output from
the CGI program. If the time is exceeded, the request and CGI are
terminated.

### Example

```
CGIDScriptTimeout 20
```

[![top](../images/up.gif)](#page-header)

## ScriptSock Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The filename prefix of the socket to use for communication with the cgi daemon |
| [Syntax:](mod__directive-dict.md#Syntax) | `ScriptSock file-path` |
| [Default:](mod__directive-dict.md#Default) | `ScriptSock logs/cgisock` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_cgid |

This directive sets the filename prefix of the socket to use for
communication with the CGI daemon, an extension corresponding to
the process ID of the server will be appended. The socket will be opened
using the permissions of the user who starts Apache (usually
root). To maintain the security of communications with CGI
scripts, it is important that no other user has permission to
write in the directory where the socket is located.

### Example

`ScriptSock /var/run/cgid.sock`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_cgid.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_cgid.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_cgid.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
