# Filters - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/filter.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/filter.html) to go to the current version of this document.

# Filters

This document describes the use of filters in Apache.

- ![](./images/down.gif) [Filtering in Apache 2](#intro)
- ![](./images/down.gif) [Smart Filtering](#smart)
- ![](./images/down.gif) [Using Filters](#using)

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## Filtering in Apache 2

| Related Modules | Related Directives |
| --- | --- |
| - `mod_filter` - `mod_deflate` - `mod_ext_filter` - `mod_include` - `mod_charset_lite` | - `FilterChain` - `FilterDeclare` - `FilterProtocol` - `FilterProvider` - `AddInputFilter` - `AddOutputFilter` - `RemoveInputFilter` - `RemoveOutputFilter` - `ExtFilterDefine` - `ExtFilterOptions` - `SetInputFilter` - `SetOutputFilter` |

The Filter Chain is available in Apache 2.0 and higher,
and enables applications to process incoming and outgoing data
in a highly flexible and configurable manner, regardless of
where the data comes from. We can pre-process incoming data,
and post-process outgoing data, at will. This is basically
independent of the traditional request processing phases.

![Filters can be chained, in a Data Axis orthogonal to request processing](images/filter_arch.png)

Some examples of filtering in the standard Apache distribution are:

- `mod_include`, implements server-side includes.
- `mod_ssl`, implements SSL encryption (https).
- `mod_deflate`, implements compression/decompression on the fly.
- `mod_charset_lite`, transcodes between different character sets.
- `mod_ext_filter`, runs an external program as a filter.

Apache also uses a number of filters internally to perform
functions like chunking and byte-range handling.

A wider range of applications are implemented by third-party filter
modules available from [modules.apache.org](http://modules.apache.org/) and
elsewhere. A few of these are:

- HTML and XML processing and rewriting
- XSLT transforms and XIncludes
- XML Namespace support
- File Upload handling and decoding of HTML Forms
- Image processing
- Protection of vulnerable applications such as PHP scripts
- Text search-and-replace editing

[![top](./images/up.gif)](#page-header)

## Smart Filtering

![Smart filtering applies different filter providers according to the state of request processing](images/mod_filter_new.png)

`mod_filter`, included in Apache 2.1 and later,
enables the filter chain to be configured dynamically at run time.
So for example you can set up a proxy to rewrite
HTML with an HTML filter and JPEG images with a completely
separate filter, despite the proxy having no prior information
about what the origin server will send. This works by using a
filter harness, that dispatches to different providers according
to the actual contents at runtime. Any filter may be either
inserted directly in the chain and run unconditionally, or
used as a provider and inserted dynamically. For example,

- an HTML processing filter will only run if the content is
  text/html or application/xhtml+xml
- A compression filter will only run if the input is a
  compressible type and not already compressed
- A charset conversion filter will be inserted if a text
  document is not already in the desired charset

[![top](./images/up.gif)](#page-header)

## Using Filters

There are two ways to use filtering: Simple and Dynamic.
In general, you should use one or the other; mixing them can
have unexpected consequences (although simple Input filtering
can be mixed freely with either simple or dynamic Output filtering).

The Simple Way is the only way to configure input filters, and is
sufficient for output filters where you need a static filter chain.
Relevant directives are
`SetInputFilter`,
`SetOutputFilter`,
`AddInputFilter`,
`AddOutputFilter`,
`RemoveInputFilter`, and
`RemoveOutputFilter`.

The Dynamic Way enables both static and flexible, dynamic configuration
of output filters, as discussed in the `mod_filter` page.
Relevant directives are
`FilterChain`,
`FilterDeclare`, and
`FilterProvider`.

One further directive `AddOutputFilterByType` is still supported,
but may be problematic and is now deprecated. Use dynamic
configuration instead.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/filter.html "English") |
[es](https://httpd.apache.org/docs/2.2/pt-br/es/filter.html "Español") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/filter.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/filter.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/filter.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/filter.html "Türkçe")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
