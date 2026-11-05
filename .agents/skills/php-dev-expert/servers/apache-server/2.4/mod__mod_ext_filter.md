# mod_ext_filter - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_ext_filter.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_ext\_filter

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Pass the response body through an external program before delivery to the client |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | ext\_filter\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_ext\_filter.c |

### Summary

`mod_ext_filter` presents a simple and familiar
programming model for [filters](filter.md). With
this module, a program which reads from stdin and writes to stdout
(i.e., a Unix-style filter command) can be a filter for
Apache. This filtering mechanism is much slower than using a
filter which is specially written for the Apache API and runs
inside of the Apache server process, but it does have the
following benefits:

- the programming model is much simpler
- any programming/scripting language can be used, provided
  that it allows the program to read from standard input and
  write to standard output
- existing programs can be used unmodified as Apache
  filters

Even when the performance characteristics are not suitable
for production use, `mod_ext_filter` can be used as
a prototype environment for filters.

### Topics

- ![](../images/down.gif) [Examples](#examples)

### Directives

- ![](../images/down.gif) [ExtFilterDefine](#extfilterdefine)
- ![](../images/down.gif) [ExtFilterOptions](#extfilteroptions)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_ext_filter)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_ext_filter)

### See also

- [Filters](filter.md)

[![top](../images/up.gif)](#page-header)

## Examples [¶](#examples "Permanent link")

### Generating HTML from some other type of response

```
# mod_ext_filter directive to define a filter
# to HTML-ize text/c files using the external
# program /usr/bin/enscript, with the type of
# the result set to text/html
ExtFilterDefine c-to-html mode=output \
    intype=text/c outtype=text/html \
    cmd="/usr/bin/enscript --color -w html -Ec -o -"

<Directory "/export/home/trawick/apacheinst/htdocs/c">
    # core directive to cause the new filter to
    # be run on output
    SetOutputFilter c-to-html
    
    # mod_mime directive to set the type of .c
    # files to text/c
    AddType text/c .c
</Directory>
```

### Implementing a content encoding filter

Note: this gzip example is just for the purposes of illustration.
Please refer to `mod_deflate` for a practical
implementation.

```
# mod_ext_filter directive to define the external filter
ExtFilterDefine gzip mode=output cmd=/bin/gzip

<Location "/gzipped">
    
    # core directive to cause the gzip filter to be
    # run on output
    SetOutputFilter gzip
    
    # mod_headers directive to add
    # "Content-Encoding: gzip" header field
    Header set Content-Encoding gzip
</Location>
```

### Slowing down the server

```
# mod_ext_filter directive to define a filter
# which runs everything through cat; cat doesn't
# modify anything; it just introduces extra pathlength
# and consumes more resources
ExtFilterDefine slowdown mode=output cmd=/bin/cat \
    preservescontentlength

<Location "/">
    # core directive to cause the slowdown filter to
    # be run several times on output
    #
    SetOutputFilter slowdown;slowdown;slowdown
</Location>
```

### Using sed to replace text in the response

```
# mod_ext_filter directive to define a filter which
# replaces text in the response
#
ExtFilterDefine fixtext mode=output intype=text/html \
    cmd="/bin/sed s/verdana/arial/g"

<Location "/">
    # core directive to cause the fixtext filter to
    # be run on output
    SetOutputFilter fixtext
</Location>
```

You can do the same thing using `mod_substitute`
without invoking an external process.

### Tracing another filter

```
# Trace the data read and written by mod_deflate
# for a particular client (IP 192.168.1.31)
# experiencing compression problems.
# This filter will trace what goes into mod_deflate.
ExtFilterDefine tracebefore \
    cmd="/bin/tracefilter.pl /tmp/tracebefore" \
    EnableEnv=trace_this_client

# This filter will trace what goes after mod_deflate.
# Note that without the ftype parameter, the default
# filter type of AP_FTYPE_RESOURCE would cause the
# filter to be placed *before* mod_deflate in the filter
# chain.  Giving it a numeric value slightly higher than
# AP_FTYPE_CONTENT_SET will ensure that it is placed
# after mod_deflate.
ExtFilterDefine traceafter \
    cmd="/bin/tracefilter.pl /tmp/traceafter" \
    EnableEnv=trace_this_client ftype=21

<Directory "/usr/local/docs">
    SetEnvIf Remote_Addr 192.168.1.31 trace_this_client
    SetOutputFilter tracebefore;deflate;traceafter
</Directory>
```

### Here is the filter which traces the data:

```
#!/usr/local/bin/perl -w
use strict;

open(SAVE, ">$ARGV[0]")
    or die "can't open $ARGV[0]: $?";

while (<STDIN>) {
    print SAVE $_;
    print $_;
}

close(SAVE);
```

[![top](../images/up.gif)](#page-header)

## ExtFilterDefine Directive [¶](#extfilterdefine "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Define an external filter |
| [Syntax:](mod__directive-dict.md#Syntax) | `ExtFilterDefine filtername parameters` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ext\_filter |

The `ExtFilterDefine` directive defines the
characteristics of an external filter, including the program to
run and its arguments.

filtername specifies the name of the filter being
defined. This name can then be used in `SetOutputFilter`
directives. It must be unique among all registered filters.
*At the present time, no error is reported by the
register-filter API, so a problem with duplicate names isn't
reported to the user.*

Subsequent parameters can appear in any order and define the
external command to run and certain other characteristics. The
only required parameter is `cmd=`. These parameters
are:

`cmd=cmdline`
:   The `cmd=` keyword allows you to specify the
    external command to run. If there are arguments after the
    program name, the command line should be surrounded in
    quotation marks (*e.g.*, `cmd="/bin/mypgm
    arg1 arg2"`.) Normal shell quoting is
    not necessary since the program is run directly, bypassing the shell.
    Program arguments are blank-delimited. A backslash can be used to
    escape blanks which should be part of a program argument. Any
    backslashes which are part of the argument must be escaped with
    backslash themselves. In addition to the standard CGI environment
    variables, DOCUMENT\_URI, DOCUMENT\_PATH\_INFO, and
    QUERY\_STRING\_UNESCAPED will also be set for the program.

`mode=mode`
:   Use `mode=output` (the default) for filters which
    process the response. Use `mode=input` for filters
    which process the request. `mode=input` is available
    in Apache 2.1 and later.

`intype=imt`
:   This parameter specifies the internet media type (*i.e.*,
    MIME type) of documents which should be filtered. By default,
    all documents are filtered. If `intype=` is
    specified, the filter will be disabled for documents of other
    types.

`outtype=imt`
:   This parameter specifies the internet media type (*i.e.*,
    MIME type) of filtered documents. It is useful when the
    filter changes the internet media type as part of the
    filtering operation. By default, the internet media type is
    unchanged.

`PreservesContentLength`
:   The `PreservesContentLength` keyword specifies
    that the filter preserves the content length. This is not the
    default, as most filters change the content length. In the
    event that the filter doesn't modify the length, this keyword
    should be specified.

`ftype=filtertype`
:   This parameter specifies the numeric value for filter type
    that the filter should be registered as. The default value,
    AP\_FTYPE\_RESOURCE, is sufficient in most cases. If the filter
    needs to operate at a different point in the filter chain than
    resource filters, then this parameter will be necessary. See
    the AP\_FTYPE\_foo definitions in util\_filter.h for appropriate
    values.

`disableenv=env`
:   This parameter specifies the name of an environment variable
    which, if set, will disable the filter.

`enableenv=env`
:   This parameter specifies the name of an environment variable
    which must be set, or the filter will be disabled.

[![top](../images/up.gif)](#page-header)

## ExtFilterOptions Directive [¶](#extfilteroptions "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Configure `mod_ext_filter` options |
| [Syntax:](mod__directive-dict.md#Syntax) | `ExtFilterOptions option [option] ...` |
| [Default:](mod__directive-dict.md#Default) | `ExtFilterOptions NoLogStderr` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ext\_filter |

The `ExtFilterOptions` directive specifies
special processing options for `mod_ext_filter`.
Option can be one of

`LogStderr | NoLogStderr`
:   The `LogStderr` keyword specifies that
    messages written to standard error by the external filter
    program will be saved in the Apache error log.
    `NoLogStderr` disables this feature.

`Onfail=[abort|remove]`
:   Determines how to proceed if the external filter program
    cannot be started. With `abort` (the default value)
    the request will be aborted. With `remove`, the
    filter is removed and the request continues without it.

```
ExtFilterOptions LogStderr
```

Messages written to the filter's standard error will be stored
in the Apache error log.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_ext_filter.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_ext_filter.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_ext_filter.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_ext_filter.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
