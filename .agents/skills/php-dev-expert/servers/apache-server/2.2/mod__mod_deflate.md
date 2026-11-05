# mod_deflate - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_deflate.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_deflate.html) to go to the current version of this document.

# Apache Module mod\_deflate

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Compress content before it is delivered to the client |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | deflate\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_deflate.c |

### Summary

The `mod_deflate` module provides
the `DEFLATE` output filter that allows output from
your server to be compressed before being sent to the client over
the network.

### Topics

- ![](../images/down.gif) [Sample Configurations](#recommended)
- ![](../images/down.gif) [Enabling Compression](#enable)
- ![](../images/down.gif) [Dealing with proxy servers](#proxies)

### Directives

- ![](../images/down.gif) [DeflateBufferSize](#deflatebuffersize)
- ![](../images/down.gif) [DeflateCompressionLevel](#deflatecompressionlevel)
- ![](../images/down.gif) [DeflateFilterNote](#deflatefilternote)
- ![](../images/down.gif) [DeflateInflateLimitRequestBody](#deflateinflatelimitrequestbody)
- ![](../images/down.gif) [DeflateInflateRatioBurst](#deflateinflateratioburst)
- ![](../images/down.gif) [DeflateInflateRatioLimit](#deflateinflateratiolimit)
- ![](../images/down.gif) [DeflateMemLevel](#deflatememlevel)
- ![](../images/down.gif) [DeflateWindowSize](#deflatewindowsize)

### See also

- [Filters](filter.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Sample Configurations

### Compression and TLS

Some web applications are vulnerable to an information disclosure
attack when a TLS connection carries deflate compressed data. For more
information, review the details of the "BREACH" family of attacks.

This is a simple configuration that compresses common text-based content types.

### Compress only a few types

```
AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript
```

[![top](../images/up.gif)](#page-header)

## Enabling Compression

### Output Compression

Compression is implemented by the `DEFLATE`
[filter](filter.md). The following directive
will enable compression for documents in the container where it
is placed:

`SetOutputFilter DEFLATE`

Some popular browsers cannot handle compression of all content
so you may want to set the `gzip-only-text/html` note to
`1` to only allow html files to be compressed (see
below). If you set this to *anything but `1`* it
will be ignored.

If you want to restrict the compression to particular MIME types
in general, you may use the `AddOutputFilterByType` directive. Here is an example of
enabling compression only for the html files of the Apache
documentation:

`<Directory "/your-server-root/manual">  

AddOutputFilterByType DEFLATE text/html  
</Directory>`

For browsers that have problems even with compression of all file
types, use the `BrowserMatch` directive to set the `no-gzip`
note for that particular browser so that no compression will be
performed. You may combine `no-gzip` with `gzip-only-text/html` to get the best results. In that case
the former overrides the latter. Take a look at the following
excerpt from the [configuration example](#recommended)
defined in the section above:

`BrowserMatch ^Mozilla/4 gzip-only-text/html  
BrowserMatch ^Mozilla/4\.0[678] no-gzip  
BrowserMatch \bMSIE !no-gzip !gzip-only-text/html`

At first we probe for a `User-Agent` string that
indicates a Netscape Navigator version of 4.x. These versions
cannot handle compression of types other than
`text/html`. The versions 4.06, 4.07 and 4.08 also
have problems with decompressing html files. Thus, we completely
turn off the deflate filter for them.

The third `BrowserMatch`
directive fixes the guessed identity of the user agent, because
the Microsoft Internet Explorer identifies itself also as "Mozilla/4"
but is actually able to handle requested compression. Therefore we
match against the additional string "MSIE" (`\b` means
"word boundary") in the `User-Agent` Header and turn off
the restrictions defined before.

### Note

The `DEFLATE` filter is always inserted after RESOURCE
filters like PHP or SSI. It never touches internal subrequests.

### Note

There is an environment variable `force-gzip`,
set via `SetEnv`, which
will ignore the accept-encoding setting of your browser and will
send compressed output.

### Output Decompression

The `mod_deflate` module also provides a filter for
inflating/uncompressing a gzip compressed response body. In order to activate
this feature you have to insert the `INFLATE` filter into
the output filter chain using `SetOutputFilter` or `AddOutputFilter`, for example:

`<Location /dav-area>  

ProxyPass http://example.com/  
SetOutputFilter INFLATE  
</Location>`

This Example will uncompress gzip'ed output from example.com, so other
filters can do further processing with it.

### Input Decompression

The `mod_deflate` module also provides a filter for
decompressing a gzip compressed request body . In order to activate
this feature you have to insert the `DEFLATE` filter into
the input filter chain using `SetInputFilter` or `AddInputFilter`, for example:

`<Location /dav-area>  

SetInputFilter DEFLATE  
</Location>`

Now if a request contains a `Content-Encoding:
gzip` header, the body will be automatically decompressed.
Few browsers have the ability to gzip request bodies. However,
some special applications actually do support request
compression, for instance some [WebDAV](http://www.webdav.org) clients.

### Note on Content-Length

If you evaluate the request body yourself, *don't trust
the `Content-Length` header!*
The Content-Length header reflects the length of the
incoming data from the client and *not* the byte count of
the decompressed data stream.

[![top](../images/up.gif)](#page-header)

## Dealing with proxy servers

The `mod_deflate` module sends a `Vary:
Accept-Encoding` HTTP response header to alert proxies that
a cached response should be sent only to clients that send the
appropriate `Accept-Encoding` request header. This
prevents compressed content from being sent to a client that will
not understand it.

If you use some special exclusions dependent
on, for example, the `User-Agent` header, you must
manually configure an addition to the `Vary` header
to alert proxies of the additional restrictions. For example,
in a typical configuration where the addition of the `DEFLATE`
filter depends on the `User-Agent`, you should add:

`Header append Vary User-Agent`

If your decision about compression depends on other information
than request headers (*e.g.* HTTP version), you have to set the
`Vary` header to the value `*`. This prevents
compliant proxies from caching entirely.

### Example

`Header set Vary *`

[![top](../images/up.gif)](#page-header)

## DeflateBufferSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Fragment size to be compressed at one time by zlib |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateBufferSize value` |
| [Default:](mod__directive-dict.md#Default) | `DeflateBufferSize 8096` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |

The `DeflateBufferSize` directive specifies
the size in bytes of the fragments that zlib should compress at one
time.

[![top](../images/up.gif)](#page-header)

## DeflateCompressionLevel Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | How much compression do we apply to the output |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateCompressionLevel value` |
| [Default:](mod__directive-dict.md#Default) | `Zlib's default` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |
| [Compatibility:](mod__directive-dict.md#Compatibility) | This directive is available since Apache 2.0.45 |

The `DeflateCompressionLevel` directive specifies
what level of compression should be used, the higher the value,
the better the compression, but the more CPU time is required to
achieve this.

The value must between 1 (less compression) and 9 (more compression).

[![top](../images/up.gif)](#page-header)

## DeflateFilterNote Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Places the compression ratio in a note for logging |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateFilterNote [type] notename` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |
| [Compatibility:](mod__directive-dict.md#Compatibility) | type is available since Apache 2.0.45 |

The `DeflateFilterNote` directive
specifies that a note about compression ratios should be attached
to the request. The name of the note is the value specified for
the directive. You can use that note for statistical purposes by
adding the value to your [access log](logs.md#accesslog).

### Example

`DeflateFilterNote ratio  
  
LogFormat '"%r" %b (%{ratio}n) "%{User-agent}i"' deflate  
CustomLog logs/deflate_log deflate`

If you want to extract more accurate values from your logs, you
can use the type argument to specify the type of data
left as a note for logging. type can be one of:

`Input`
:   Store the byte count of the filter's input stream in the note.

`Output`
:   Store the byte count of the filter's output stream in the note.

`Ratio`
:   Store the compression ratio (`output/input * 100`)
    in the note. This is the default, if the type argument
    is omitted.

Thus you may log it this way:

### Accurate Logging

`DeflateFilterNote Input instream  
DeflateFilterNote Output outstream  
DeflateFilterNote Ratio ratio  
  
LogFormat '"%r" %{outstream}n/%{instream}n (%{ratio}n%%)' deflate  
CustomLog logs/deflate_log deflate`

### See also

- `mod_log_config`

[![top](../images/up.gif)](#page-header)

## DeflateInflateLimitRequestBody Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum size of inflated request bodies |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateInflateLimitRequestBodyvalue` |
| [Default:](mod__directive-dict.md#Default) | `None, but LimitRequestBody applies after deflation` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |
| [Compatibility:](mod__directive-dict.md#Compatibility) | 2.2.28 and later |

The `DeflateInflateLimitRequestBody` directive
specifies the maximum size of an inflated request body. If it is unset,
`LimitRequestBody` is applied to the
inflated body.

[![top](../images/up.gif)](#page-header)

## DeflateInflateRatioBurst Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum number of times the inflation ratio for request bodies can be crossed |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateInflateRatioBurst value` |
| [Default:](mod__directive-dict.md#Default) | `3` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |
| [Compatibility:](mod__directive-dict.md#Compatibility) | 2.2.28 and later |

The `DeflateInflateRatioBurst` directive
specifies the maximum number of times the
`DeflateInflateRatioLimit` can be crossed before
terminating the request.

[![top](../images/up.gif)](#page-header)

## DeflateInflateRatioLimit Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum inflation ratio for request bodies |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateInflateRatioLimit value` |
| [Default:](mod__directive-dict.md#Default) | `200` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |
| [Compatibility:](mod__directive-dict.md#Compatibility) | 2.2.28 and later |

The `DeflateInflateRatioLimit` directive
specifies the maximum ratio of deflated to inflated size of an
inflated request body. This ratio is checked as the body is
streamed in, and if crossed more than
`DeflateInflateRatioBurst` times, the request
will be terminated.

[![top](../images/up.gif)](#page-header)

## DeflateMemLevel Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | How much memory should be used by zlib for compression |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateMemLevel value` |
| [Default:](mod__directive-dict.md#Default) | `DeflateMemLevel 9` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |

The `DeflateMemLevel` directive specifies
how much memory should be used by zlib for compression
(a value between 1 and 9).

[![top](../images/up.gif)](#page-header)

## DeflateWindowSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Zlib compression window size |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateWindowSize value` |
| [Default:](mod__directive-dict.md#Default) | `DeflateWindowSize 15` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |

The `DeflateWindowSize` directive specifies the
zlib compression window size (a value between 1 and 15). Generally, the
higher the window size, the higher can the compression ratio be expected.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_deflate.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_deflate.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_deflate.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
