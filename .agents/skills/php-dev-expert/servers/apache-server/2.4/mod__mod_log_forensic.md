# mod_log_forensic - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_log_forensic.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_log\_forensic

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Forensic Logging of the requests made to the server |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | log\_forensic\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_log\_forensic.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | `mod_unique_id` is no longer required since version 2.1 |

### Summary

This module provides for forensic logging of client
requests. Logging is done before and after processing a request, so the
forensic log contains two log lines for each request.
The forensic logger is very strict, which means:

- The format is fixed. You cannot modify the logging format at
  runtime.
- If it cannot write its data, the child process
  exits immediately and may dump core (depending on your
  `CoreDumpDirectory`
  configuration).

The `check_forensic` script, which can be found in the
distribution's support directory, may be helpful in evaluating the
forensic log output.

### Topics

- ![](../images/down.gif) [Forensic Log Format](#formats)
- ![](../images/down.gif) [Security Considerations](#security)

### Directives

- ![](../images/down.gif) [ForensicLog](#forensiclog)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_log_forensic)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_log_forensic)

### See also

- [Apache Log Files](logs.md)
- `mod_log_config`

[![top](../images/up.gif)](#page-header)

## Forensic Log Format [¶](#formats "Permanent link")

Each request is logged two times. The first time is *before* it's
processed further (that is, after receiving the headers). The second log
entry is written *after* the request processing at the same time
where normal logging occurs.

In order to identify each request, a unique request ID is assigned.
This forensic ID can be cross logged in the normal transfer log using the
`%{forensic-id}n` format string. If you're using
`mod_unique_id`, its generated ID will be used.

The first line logs the forensic ID, the request line and all received
headers, separated by pipe characters (`|`). A sample line
looks like the following (all on one line):

`+yQtJf8CoAB4AAFNXBIEAAAAA|GET /manual/de/images/down.gif
HTTP/1.1|Host:localhost%3a8080|User-Agent:Mozilla/5.0 (X11;
U; Linux i686; en-US; rv%3a1.6) Gecko/20040216
Firefox/0.8|Accept:image/png, etc...`

The plus character at the beginning indicates that this is the first log
line of this request. The second line just contains a minus character and
the ID again:

`-yQtJf8CoAB4AAFNXBIEAAAAA`

The `check_forensic` script takes as its argument the name
of the logfile. It looks for those `+`/`-` ID pairs
and complains if a request was not completed.

[![top](../images/up.gif)](#page-header)

## Security Considerations [¶](#security "Permanent link")

See the [security tips](misc__security_tips.md#serverroot)
document for details on why your security could be compromised
if the directory where logfiles are stored is writable by
anyone other than the user that starts the server.

The log files may contain sensitive data such as the contents of
`Authorization:` headers (which can contain passwords), so
they should not be readable by anyone except the user that starts the
server.

[![top](../images/up.gif)](#page-header)

## ForensicLog Directive [¶](#forensiclog "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets filename of the forensic log |
| [Syntax:](mod__directive-dict.md#Syntax) | `ForensicLog filename|pipe` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_log\_forensic |

The `ForensicLog` directive is used to
log requests to the server for forensic analysis. Each log entry
is assigned a unique ID which can be associated with the request
using the normal `CustomLog`
directive. `mod_log_forensic` creates a token called
`forensic-id`, which can be added to the transfer log
using the `%{forensic-id}n` format string.

The argument, which specifies the location to which
the logs will be written, can take one of the following two
types of values:

filename
:   A filename, relative to the `ServerRoot`.

pipe
:   The pipe character "`|`", followed by the path
    to a program to receive the log information on its standard
    input. The program name can be specified relative to the `ServerRoot` directive.

    ### Security:

    If a program is used, then it will be run as the user who
    started `httpd`. This will be root if the server was
    started by root; be sure that the program is secure or switches to a
    less privileged user.

    ### Note

    When entering a file path on non-Unix platforms, care should be taken
    to make sure that only forward slashes are used even though the platform
    may allow the use of back slashes. In general it is a good idea to always
    use forward slashes throughout the configuration files.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_log_forensic.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_log_forensic.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_log_forensic.html "Japanese") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/mod_log_forensic.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
