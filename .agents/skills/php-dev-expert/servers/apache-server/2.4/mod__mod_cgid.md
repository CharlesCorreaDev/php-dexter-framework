# mod_cgid - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_cgid.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

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

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_cgid)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_cgid)

### See also

- `mod_cgi`
- [Running CGI programs under different
  user IDs](suexec.md)

[![top](../images/up.gif)](#page-header)

## CGIDScriptTimeout Directive [¶](#cgidscripttimeout "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The length of time to wait for more output from the CGI program |
| [Syntax:](mod__directive-dict.md#Syntax) | `CGIDScriptTimeout time[s|ms]` |
| [Default:](mod__directive-dict.md#Default) | `value of Timeout directive when unset or set to 0` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_cgid |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in httpd 2.4.10 and later; in prior releases no timeout was applied |

This directive limits the length of time to wait for more output from
the CGI program. If the time is exceeded, the request and CGI are
terminated.

### Example

```
CGIDScriptTimeout 20
```

[![top](../images/up.gif)](#page-header)

## ScriptSock Directive [¶](#scriptsock "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The filename prefix of the socket to use for communication with the cgi daemon |
| [Syntax:](mod__directive-dict.md#Syntax) | `ScriptSock file-path` |
| [Default:](mod__directive-dict.md#Default) | `ScriptSock cgisock` |
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

If file-path is not an absolute path, the location specified
will be relative to the value of
`DefaultRuntimeDir`.

### Example

```
ScriptSock /var/run/cgid.sock
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_cgid.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_cgid.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_cgid.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_cgid.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
