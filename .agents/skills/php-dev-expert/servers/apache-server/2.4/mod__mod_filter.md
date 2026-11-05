# mod_filter - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_filter.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_filter

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Context-sensitive smart filter configuration module |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | filter\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_filter.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Version 2.1 and later |

### Summary

This module enables smart, context-sensitive configuration of
output content filters. For example, apache can be configured to
process different content-types through different filters, even
when the content-type is not known in advance (e.g. in a proxy).

`mod_filter` works by introducing indirection into
the filter chain. Instead of inserting filters in the chain, we insert
a filter harness which in turn dispatches conditionally
to a filter provider. Any content filter may be used as a provider
to `mod_filter`; no change to existing filter modules is
required (although it may be possible to simplify them).

### Topics

- ![](../images/down.gif) [Smart Filtering](#smart)
- ![](../images/down.gif) [Filter Declarations, Providers and Chains](#terms)
- ![](../images/down.gif) [Configuring the Chain](#config)
- ![](../images/down.gif) [Filtering and Response Status](#errordocs)
- ![](../images/down.gif) [Upgrading from Apache HTTP Server 2.2 Configuration](#upgrade)
- ![](../images/down.gif) [Examples](#examples)
- ![](../images/down.gif) [Protocol Handling](#protocol)

### Directives

- ![](../images/down.gif) [AddOutputFilterByType](#addoutputfilterbytype)
- ![](../images/down.gif) [FilterChain](#filterchain)
- ![](../images/down.gif) [FilterDeclare](#filterdeclare)
- ![](../images/down.gif) [FilterProtocol](#filterprotocol)
- ![](../images/down.gif) [FilterProvider](#filterprovider)
- ![](../images/down.gif) [FilterTrace](#filtertrace)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_filter)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_filter)

[![top](../images/up.gif)](#page-header)

## Smart Filtering [¶](#smart "Permanent link")

In the traditional filtering model, filters are inserted unconditionally
using `AddOutputFilter` and family.
Each filter then needs to determine whether to run, and there is little
flexibility available for server admins to allow the chain to be
configured dynamically.

`mod_filter` by contrast gives server administrators a
great deal of flexibility in configuring the filter chain. In fact,
filters can be inserted based on complex boolean
[expressions](expr.md) This generalises the limited
flexibility offered by `AddOutputFilterByType`.

[![top](../images/up.gif)](#page-header)

## Filter Declarations, Providers and Chains [¶](#terms "Permanent link")

![[This image displays the traditional filter model]](../images/mod_filter_old.gif)  
Figure 1: The traditional filter model

In the traditional model, output filters are a simple chain
from the content generator (handler) to the client. This works well
provided the filter chain can be correctly configured, but presents
problems when the filters need to be configured dynamically based on
the outcome of the handler.

![[This image shows the mod_filter model]](../images/mod_filter_new.gif)  
Figure 2: The `mod_filter` model

`mod_filter` works by introducing indirection into
the filter chain. Instead of inserting filters in the chain, we insert
a filter harness which in turn dispatches conditionally
to a filter provider. Any content filter may be used as a provider
to `mod_filter`; no change to existing filter modules
is required (although it may be possible to simplify them). There can be
multiple providers for one filter, but no more than one provider will
run for any single request.

A filter chain comprises any number of instances of the filter
harness, each of which may have any number of providers. A special
case is that of a single provider with unconditional dispatch: this
is equivalent to inserting the provider filter directly into the chain.

[![top](../images/up.gif)](#page-header)

## Configuring the Chain [¶](#config "Permanent link")

There are three stages to configuring a filter chain with
`mod_filter`. For details of the directives, see below.

Declare Filters
:   The `FilterDeclare` directive
    declares a filter, assigning it a name and filter type. Required
    only if the filter is not the default type AP\_FTYPE\_RESOURCE.

Register Providers
:   The `FilterProvider`
    directive registers a provider with a filter. The filter may have
    been declared with `FilterDeclare`; if not, FilterProvider will implicitly
    declare it with the default type AP\_FTYPE\_RESOURCE. The provider
    must have been
    registered with `ap_register_output_filter` by some module.
    The final argument to `FilterProvider` is an expression: the provider will be
    selected to run for a request if and only if the expression evaluates
    to true. The expression may evaluate HTTP request or response
    headers, environment variables, or the Handler used by this request.
    Unlike earlier versions, mod\_filter now supports complex expressions
    involving multiple criteria with AND / OR logic (&& / ||)
    and brackets. The details of the expression syntax are described in
    the [ap\_expr documentation](expr.md).

Configure the Chain
:   The above directives build components of a smart filter chain,
    but do not configure it to run. The `FilterChain` directive builds a filter chain from smart
    filters declared, offering the flexibility to insert filters at the
    beginning or end of the chain, remove a filter, or clear the chain.

[![top](../images/up.gif)](#page-header)

## Filtering and Response Status [¶](#errordocs "Permanent link")

mod\_filter normally only runs filters on responses with
HTTP status 200 (OK). If you want to filter documents with
other response statuses, you can set the filter-errordocs
environment variable, and it will work on all responses
regardless of status. To refine this further, you can use
expression conditions with `FilterProvider`.

[![top](../images/up.gif)](#page-header)

## Upgrading from Apache HTTP Server 2.2 Configuration [¶](#upgrade "Permanent link")

The `FilterProvider`
directive has changed from httpd 2.2: the match and
dispatch arguments are replaced with a single but
more versatile expression. In general, you can convert
a match/dispatch pair to the two sides of an expression, using
something like:

`"dispatch = 'match'"`

The Request headers, Response headers and Environment variables
are now interpreted from syntax %{req:foo},
%{resp:foo} and %{env:foo} respectively.
The variables %{HANDLER} and %{CONTENT\_TYPE}
are also supported.

Note that the match no longer support substring matches. They can be
replaced by regular expression matches.

[![top](../images/up.gif)](#page-header)

## Examples [¶](#examples "Permanent link")

Server side Includes (SSI)
:   A simple case of replacing `AddOutputFilterByType`

    ```
    FilterDeclare SSI
    FilterProvider SSI INCLUDES "%{CONTENT_TYPE} =~ m|^text/html|"
    FilterChain SSI
    ```

Server side Includes (SSI)
:   The same as the above but dispatching on handler (classic
    SSI behavior; .shtml files get processed).

    ```
    FilterProvider SSI INCLUDES "%{HANDLER} = 'server-parsed'"
    FilterChain SSI
    ```

Emulating mod\_gzip with mod\_deflate
:   Insert INFLATE filter only if "gzip" is NOT in the
    Accept-Encoding header. This filter runs with ftype CONTENT\_SET.

    ```
    FilterDeclare gzip CONTENT_SET
    FilterProvider gzip inflate "%{req:Accept-Encoding} !~ /gzip/"
    FilterChain gzip
    ```

Image Downsampling
:   Suppose we want to downsample all web images, and have filters
    for GIF, JPEG and PNG.

    ```
    FilterProvider unpack jpeg_unpack "%{CONTENT_TYPE} = 'image/jpeg'"
    FilterProvider unpack gif_unpack  "%{CONTENT_TYPE} = 'image/gif'"
    FilterProvider unpack png_unpack  "%{CONTENT_TYPE} = 'image/png'"

    FilterProvider downsample downsample_filter "%{CONTENT_TYPE} = m|^image/(jpeg|gif|png)|"
    FilterProtocol downsample "change=yes"

    FilterProvider repack jpeg_pack "%{CONTENT_TYPE} = 'image/jpeg'"
    FilterProvider repack gif_pack  "%{CONTENT_TYPE} = 'image/gif'"
    FilterProvider repack png_pack  "%{CONTENT_TYPE} = 'image/png'"
    <Location "/image-filter">
        FilterChain unpack downsample repack
    </Location>
    ```

[![top](../images/up.gif)](#page-header)

## Protocol Handling [¶](#protocol "Permanent link")

Historically, each filter is responsible for ensuring that whatever
changes it makes are correctly represented in the HTTP response headers,
and that it does not run when it would make an illegal change. This
imposes a burden on filter authors to re-implement some common
functionality in every filter:

- Many filters will change the content, invalidating existing content
  tags, checksums, hashes, and lengths.
- Filters that require an entire, unbroken response in input need to
  ensure they don't get byteranges from a backend.
- Filters that transform output in a filter need to ensure they don't
  violate a `Cache-Control: no-transform` header from the
  backend.
- Filters may make responses uncacheable.

`mod_filter` aims to offer generic handling of these
details of filter implementation, reducing the complexity required of
content filter modules. This is work-in-progress; the
`FilterProtocol` implements
some of this functionality for back-compatibility with Apache 2.0
modules. For httpd 2.1 and later, the
`ap_register_output_filter_protocol` and
`ap_filter_protocol` API enables filter modules to
declare their own behavior.

At the same time, `mod_filter` should not interfere
with a filter that wants to handle all aspects of the protocol. By
default (i.e. in the absence of any `FilterProtocol` directives), `mod_filter`
will leave the headers untouched.

At the time of writing, this feature is largely untested,
as modules in common use are designed to work with 2.0.
Modules using it should test it carefully.

[![top](../images/up.gif)](#page-header)

## AddOutputFilterByType Directive [¶](#addoutputfilterbytype "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | assigns an output filter to a particular media-type |
| [Syntax:](mod__directive-dict.md#Syntax) | `AddOutputFilterByType filter[;filter...] media-type [media-type] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_filter |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Had severe limitations before being moved to `mod_filter` in version 2.3.7 |

This directive activates a particular output [filter](filter.md) for a request depending on the
response [media-type](glossary.md#media-type "see glossary").

The following example uses the `DEFLATE` filter, which
is provided by `mod_deflate`. It will compress all
output (either static or dynamic) which is labeled as
`text/html` or `text/plain` before it is sent
to the client.

```
AddOutputFilterByType DEFLATE text/html text/plain
```

If you want the content to be processed by more than one filter, their
names have to be separated by semicolons. It's also possible to use one
`AddOutputFilterByType` directive for each of
these filters.

The configuration below causes all script output labeled as
`text/html` to be processed at first by the
`INCLUDES` filter and then by the `DEFLATE`
filter.

```
<Location "/cgi-bin/">
    Options Includes
    AddOutputFilterByType INCLUDES;DEFLATE text/html
</Location>
```

Note that `AddOutputFilterByType` directives
within the same context are additive, but a definition in a more
specific context (such as a
`<VirtualHost>`,
`<Directory>`, or
`<Location>` section)
will replace — not add to — any definitions inherited from a
broader context. This is the same behavior as
`AddOutputFilter`.

```
# Server context: compress text/html and text/plain
AddOutputFilterByType DEFLATE text/html text/plain
<VirtualHost *:80>
    # Replaces the server-level definition for this vhost;
    # only text/css will be compressed here:
    AddOutputFilterByType DEFLATE text/css
</VirtualHost>
```

### Limitation with user-defined filters

`AddOutputFilterByType` works with standard
compiled-in filters such as `DEFLATE` and
`INCLUDES`, but does not work with filters that look
up their configuration by filter name, such as those defined by
`mod_ext_filter` or `mod_lua`'s
`LuaOutputFilter`. This is because internally the
filter name is modified with a `BYTYPE:` prefix.
For user-defined filters, use
`FilterDeclare` and
`FilterProvider` with an expression
matching on `%{CONTENT_TYPE}` instead.

### See also

- `AddOutputFilter`
- `SetOutputFilter`
- [filters](filter.md)

[![top](../images/up.gif)](#page-header)

## FilterChain Directive [¶](#filterchain "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Configure the filter chain |
| [Syntax:](mod__directive-dict.md#Syntax) | `FilterChain [+=-@!]filter-name ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_filter |

This configures an actual filter chain, from declared filters.
`FilterChain` takes any number of arguments,
each optionally preceded with a single-character control that
determines what to do:

`+filter-name`
:   Add filter-name to the end of the filter chain

`@filter-name`
:   Insert filter-name at the start of the filter chain

`-filter-name`
:   Remove filter-name from the filter chain

`=filter-name`
:   Empty the filter chain and insert filter-name

`!`
:   Empty the filter chain

`filter-name`
:   Equivalent to `+filter-name`

[![top](../images/up.gif)](#page-header)

## FilterDeclare Directive [¶](#filterdeclare "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Declare a smart filter |
| [Syntax:](mod__directive-dict.md#Syntax) | `FilterDeclare filter-name [type]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_filter |

This directive declares an output filter together with a
header or environment variable that will determine runtime
configuration. The first argument is a filter-name
for use in `FilterProvider`,
`FilterChain` and
`FilterProtocol` directives.

The final (optional) argument
is the type of filter, and takes values of `ap_filter_type`
- namely `RESOURCE` (the default), `CONTENT_SET`,
`PROTOCOL`, `TRANSCODE`, `CONNECTION`
or `NETWORK`.

[![top](../images/up.gif)](#page-header)

## FilterProtocol Directive [¶](#filterprotocol "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Deal with correct HTTP protocol handling |
| [Syntax:](mod__directive-dict.md#Syntax) | `FilterProtocol filter-name [provider-name] proto-flags` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_filter |

This directs `mod_filter` to deal with ensuring the
filter doesn't run when it shouldn't, and that the HTTP response
headers are correctly set taking into account the effects of the
filter.

There are two forms of this directive. With three arguments, it
applies specifically to a filter-name and a
provider-name for that filter.
With two arguments it applies to a filter-name whenever the
filter runs *any* provider.

Flags specified with this directive are merged with the flags
that underlying providers may have registered with
`mod_filter`. For example, a filter may internally specify
the equivalent of `change=yes`, but a particular
configuration of the module can override with `change=no`.

proto-flags is one or more of

`change=yes|no`
:   Specifies whether the filter changes the content, including possibly
    the content length. The "no" argument is supported in 2.4.7 and later.

`change=1:1`
:   The filter changes the content, but will not change the content
    length

`byteranges=no`
:   The filter cannot work on byteranges and requires complete input

`proxy=no`
:   The filter should not run in a proxy context

`proxy=transform`
:   The filter transforms the response in a manner incompatible with
    the HTTP `Cache-Control: no-transform` header.

`cache=no`
:   The filter renders the output uncacheable (eg by introducing randomised
    content changes)

[![top](../images/up.gif)](#page-header)

## FilterProvider Directive [¶](#filterprovider "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Register a content filter |
| [Syntax:](mod__directive-dict.md#Syntax) | `FilterProvider filter-name provider-name expression` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_filter |

This directive registers a *provider* for the smart filter.
The provider will be called if and only if the expression
declared evaluates to true when the harness is first called.

provider-name must have been registered by loading
a module that registers the name with
`ap_register_output_filter`.

expression is an
[ap\_expr](expr.md).

### See also

- [Expressions in Apache HTTP Server](expr.md),
  for a complete reference and examples.
- `mod_include`

[![top](../images/up.gif)](#page-header)

## FilterTrace Directive [¶](#filtertrace "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Get debug/diagnostic information from `mod_filter` |
| [Syntax:](mod__directive-dict.md#Syntax) | `FilterTrace filter-name level` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_filter |

This directive generates debug information from
`mod_filter`.
It is designed to help test and debug providers (filter modules), although
it may also help with `mod_filter` itself.

The debug output depends on the level set:

`0` (default)
:   No debug information is generated.

`1`
:   `mod_filter` will record buckets and brigades
    passing through the filter to the error log, before the provider has
    processed them. This is similar to the information generated by
    [mod\_diagnostics](http://apache.webthing.com/mod_diagnostics/).

`2` (not yet implemented)
:   Will dump the full data passing through to a tempfile before the
    provider. **For single-user debug only**; this will not
    support concurrent hits.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_filter.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_filter.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
