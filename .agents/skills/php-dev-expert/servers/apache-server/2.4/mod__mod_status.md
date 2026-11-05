# mod_status - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_status.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_status

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Provides information on server activity and performance |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | status\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_status.c |

### Summary

The Status module allows a server administrator to find out
how well their server is performing. A HTML page is presented
that gives the current server statistics in an easily readable
form. If required this page can be made to automatically
refresh (given a compatible browser). Another page gives a
simple machine-readable list of the current server state.

The details given are:

- The number of workers serving requests
- The number of idle workers
- The status of each worker, the number of requests that
  worker has performed and the total number of bytes served by
  the worker (\*)
- A total number of accesses and byte count served (\*)
- The time the server was started/restarted and the time it
  has been running for
- Averages giving the number of requests per second, the
  number of bytes served per second and the average number of
  bytes per request (\*)
- The current percentage CPU used by each worker and in
  total by all workers combined (\*)
- The current hosts and requests being processed (\*)

The lines marked "(\*)" are only available if
`ExtendedStatus`
is `On`. In version 2.3.6, loading mod\_status will
toggle `ExtendedStatus` On
by default.

### Topics

- ![](../images/down.gif) [Enabling Status Support](#enable)
- ![](../images/down.gif) [Automatic Updates](#autoupdate)
- ![](../images/down.gif) [Machine Readable Status File](#machinereadable)
- ![](../images/down.gif) [Using server-status to troubleshoot](#troubleshoot)

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_status)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_status)

[![top](../images/up.gif)](#page-header)

## Enabling Status Support [¶](#enable "Permanent link")

To enable status reports only for browsers from the example.com
domain add this code to your `httpd.conf`
configuration file

```
<Location "/server-status">
    SetHandler server-status
    Require host example.com
</Location>
```

You can now access server statistics by using a Web browser
to access the page
`http://your.server.name/server-status`

[![top](../images/up.gif)](#page-header)

## Automatic Updates [¶](#autoupdate "Permanent link")

You can get the status page to update itself automatically if
you have a browser that supports "refresh". Access the page
`http://your.server.name/server-status?refresh=N` to
refresh the page every N seconds.

[![top](../images/up.gif)](#page-header)

## Machine Readable Status File [¶](#machinereadable "Permanent link")

A machine-readable version of the status file is available by
accessing the page
`http://your.server.name/server-status?auto`. This
is useful when automatically run, see the Perl program
`log_server_status`, which you will find in the
`/support` directory of your Apache HTTP Server installation.

**It should be noted that if `mod_status` is
loaded into the server, its handler capability is available
in *all* configuration files, including
*per*-directory files (*e.g.*,
`.htaccess`). This may have security-related
ramifications for your site.**

[![top](../images/up.gif)](#page-header)

## Using server-status to troubleshoot [¶](#troubleshoot "Permanent link")

The `server-status` page may be used as a starting
place for troubleshooting a situation where your server is consuming
all available resources (CPU or memory), and you wish to identify
which requests or clients are causing the problem.

First, ensure that you have `ExtendedStatus` set on, so that you can see
the full request and client information for each child or
thread.

Now look in your process list (using `top`, or similar
process viewing utility) to identify the specific processes that are
the main culprits. Order the output of `top` by CPU
usage, or memory usage, depending on what problem you're trying to
address.

Reload the `server-status` page, and look for those process
ids, and you'll be able to see what request is being served by that
process, for what client. Requests are transient, so you may need to
try several times before you catch it in the act, so to speak.

This process *should* give you some idea what client, or
what type of requests, are primarily responsible for your load
problems. Often you will identify a particular web application that
is misbehaving, or a particular client that is attacking your
site.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_status.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_status.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_status.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_status.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/mod_status.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
