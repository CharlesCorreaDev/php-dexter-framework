# mod_log_debug - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_log_debug.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_log\_debug

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Additional configurable debug logging |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | log\_debug\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_log\_debug.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3.14 and later |

### Topics

- ![](../images/down.gif) [Examples](#examples)

### Directives

- ![](../images/down.gif) [LogMessage](#logmessage)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_log_debug)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_log_debug)

[![top](../images/up.gif)](#page-header)

## Examples [¶](#examples "Permanent link")

1. Log message after request to /foo/\* is processed:

   ```
   <Location "/foo/">
     LogMessage "/foo/ has been requested"
   </Location>
   ```
2. Log message if request to /foo/\* is processed in a sub-request:

   ```
   <Location "/foo/">
     LogMessage "subrequest to /foo/" hook=type_checker "expr=-T %{IS_SUBREQ}"
   </Location>
   ```

   The default log\_transaction hook is not executed for sub-requests,
   therefore we have to use a different hook.
3. Log message if an IPv6 client causes a request timeout:

   ```
   LogMessage "IPv6 timeout from %{REMOTE_ADDR}" "expr=-T %{IPV6} && %{REQUEST_STATUS} = 408"
   ```

   Note the placing of the double quotes for the `expr=` argument.
4. Log the value of the "X-Foo" request environment variable in each
   stage of the request:

   ```
   <Location "/">
     LogMessage "%{reqenv:X-Foo}" hook=all
   </Location>
   ```

   Together with microsecond time stamps in the error log,
   `hook=all` also lets you determine the times spent
   in the different parts of the request processing.

[![top](../images/up.gif)](#page-header)

## LogMessage Directive [¶](#logmessage "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Log user-defined message to error log |
| [Syntax:](mod__directive-dict.md#Syntax) | `LogMessage message [hook=hook] [expr=expression]` |
| [Default:](mod__directive-dict.md#Default) | `Unset` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_log\_debug |

This directive causes a user defined message to be logged to the
error log. The message can use variables and functions from the
[ap\_expr syntax](expr.md). References to HTTP headers
will not cause header names to be added to the Vary header. The
messages are logged at loglevel info.

The hook specifies before which phase of request processing the message
will be logged. The following hooks are supported:

| Name |
| --- |
| `pre_translate_name` |
| `translate_name` |
| `type_checker` |
| `quick_handler` |
| `map_to_storage` |
| `check_access` |
| `check_access_ex` |
| `insert_filter` |
| `check_authn` |
| `check_authz` |
| `fixups` |
| `handler` |
| `log_transaction` |

The default is `log_transaction`. The special value
`all` is also supported, causing a message to be logged at each
phase. Not all hooks are executed for every request.

The optional expression allows to restrict the message if a
condition is met. The details of the expression syntax are described in
the [ap\_expr documentation](expr.md). References to HTTP
headers will not cause the header names to be added to the Vary header.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_log_debug.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_log_debug.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
