# mpm_winnt - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mpm_winnt.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mpm_winnt.html) to go to the current version of this document.

# Apache MPM winnt

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | This Multi-Processing Module is optimized for Windows NT. |
| [Status:](mod__module-dict.md#Status) | MPM |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | mpm\_winnt\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mpm\_winnt.c |

### Summary

This Multi-Processing Module (MPM) is the default for the
Windows NT operating systems. It uses a single control process
which launches a single child process which in turn creates
threads to handle requests

### Directives

- ![](../images/right.gif) [CoreDumpDirectory](mod__mpm_common.md#coredumpdirectory)
- ![](../images/right.gif) [Listen](mod__mpm_common.md#listen)
- ![](../images/right.gif) [ListenBacklog](mod__mpm_common.md#listenbacklog)
- ![](../images/right.gif) [MaxMemFree](mod__mpm_common.md#maxmemfree)
- ![](../images/right.gif) [MaxRequestsPerChild](mod__mpm_common.md#maxrequestsperchild)
- ![](../images/right.gif) [PidFile](mod__mpm_common.md#pidfile)
- ![](../images/right.gif) [ReceiveBufferSize](mod__mpm_common.md#receivebuffersize)
- ![](../images/right.gif) [ScoreBoardFile](mod__mpm_common.md#scoreboardfile)
- ![](../images/right.gif) [SendBufferSize](mod__mpm_common.md#sendbuffersize)
- ![](../images/right.gif) [ThreadLimit](mod__mpm_common.md#threadlimit)
- ![](../images/right.gif) [ThreadsPerChild](mod__mpm_common.md#threadsperchild)
- ![](../images/right.gif) [ThreadStackSize](mod__mpm_common.md#threadstacksize)
- ![](../images/down.gif) [Win32DisableAcceptEx](#win32disableacceptex)

### See also

- [Using Apache HTTP Server on Microsoft Windows](platform__windows.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Win32DisableAcceptEx Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Use accept() rather than AcceptEx() to accept network connections |
| [Syntax:](mod__directive-dict.md#Syntax) | `Win32DisableAcceptEx` |
| [Default:](mod__directive-dict.md#Default) | `AcceptEx() is enabled by default. Use this directive to disable use of AcceptEx()` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | mpm\_winnt |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Version 2.0.49 and later |

`AcceptEx()` is a Microsoft WinSock v2 API that provides
some performance improvements over the use of the BSD style
`accept()` API in certain circumstances. Some popular Windows
products, typically virus scanning or virtual private network
packages, have bugs that interfere with the proper operation of
`AcceptEx()`. If you encounter an error condition like:

`[error] (730038)An operation was attempted on something that is
not a socket.: winnt_accept: AcceptEx failed. Attempting to recover.`

you should use this directive to disable the use of
`AcceptEx()`.

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/mod/mpm_winnt.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mpm_winnt.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mpm_winnt.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
