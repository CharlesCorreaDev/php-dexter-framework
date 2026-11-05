# mod_deflate - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_deflate.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

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

- ![](../images/down.gif) [Supported Encodings](#supportedencodings)
- ![](../images/down.gif) [Sample Configurations](#recommended)
- ![](../images/down.gif) [Enabling Compression](#enable)
- ![](../images/down.gif) [Dealing with proxy servers](#proxies)
- ![](../images/down.gif) [Serving pre-compressed
  content](#precompressed)

### Directives

- ![](../images/down.gif) [DeflateAlterETag](#deflatealteretag)
- ![](../images/down.gif) [DeflateBufferSize](#deflatebuffersize)
- ![](../images/down.gif) [DeflateCompressionLevel](#deflatecompressionlevel)
- ![](../images/down.gif) [DeflateFilterNote](#deflatefilternote)
- ![](../images/down.gif) [DeflateInflateLimitRequestBody](#deflateinflatelimitrequestbody)
- ![](../images/down.gif) [DeflateInflateRatioBurst](#deflateinflateratioburst)
- ![](../images/down.gif) [DeflateInflateRatioLimit](#deflateinflateratiolimit)
- ![](../images/down.gif) [DeflateMemLevel](#deflatememlevel)
- ![](../images/down.gif) [DeflateWindowSize](#deflatewindowsize)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_deflate)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_deflate)

### See also

- [Filters](filter.md)

[![top](../images/up.gif)](#page-header)

## Supported Encodings [¶](#supportedencodings "Permanent link")

The `gzip` encoding is the only one supported to ensure complete compatibility
with old browser implementations. The `deflate` encoding is not supported,
please check the [zlib's documentation](https://zlib.net/zlib_faq.html#faq39)
for a complete explanation.

[![top](../images/up.gif)](#page-header)

## Sample Configurations [¶](#recommended "Permanent link")

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

## Enabling Compression [¶](#enable "Permanent link")

### Compression and TLS

Some web applications are vulnerable to an information disclosure
attack when a TLS connection carries deflate compressed data. For more
information, review the details of the "BREACH" family of attacks.

### Output Compression

Compression is implemented by the `DEFLATE`
[filter](filter.md). The following directive
will enable compression for documents in the container where it
is placed:

```
SetOutputFilter DEFLATE
SetEnvIfNoCase Request_URI "\.(?:gif|jpe?g|png)$" no-gzip
```

If you want to restrict the compression to particular MIME types
in general, you may use the `AddOutputFilterByType` directive. Here is an example of
enabling compression only for the html files of the Apache httpd
documentation:

```
<Directory "/your-server-root/manual">
    AddOutputFilterByType DEFLATE text/html
</Directory>
```

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

```
<Location "/dav-area">
    ProxyPass "http://example.com/"
    SetOutputFilter INFLATE
</Location>
```

This example will uncompress gzip-compressed output from example.com, so other
filters can do further processing with it.

### Input Decompression

The `mod_deflate` module also provides a filter for
decompressing a gzip compressed request body. In order to activate
this feature you have to insert the `DEFLATE` filter into
the input filter chain using `SetInputFilter` or `AddInputFilter`, for example:

```
<Location "/dav-area">
    SetInputFilter DEFLATE
</Location>
```

Now if a request contains a `Content-Encoding:
gzip` header, the body will be automatically decompressed.
Few browsers have the ability to gzip request bodies. However,
some special applications actually do support request
compression, for instance some [WebDAV](https://www.webdav.org) clients.

### Note on Content-Length

If you evaluate the request body yourself, *don't trust
the `Content-Length` header!*
The Content-Length header reflects the length of the
incoming data from the client and *not* the byte count of
the decompressed data stream.

[![top](../images/up.gif)](#page-header)

## Dealing with proxy servers [¶](#proxies "Permanent link")

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

```
Header append Vary User-Agent
```

If your decision about compression depends on other information
than request headers (*e.g.* HTTP version), you have to set the
`Vary` header to the value `*`. This prevents
compliant proxies from caching entirely.

### Example

```
Header set Vary *
```

[![top](../images/up.gif)](#page-header)

## Serving pre-compressed content [¶](#precompressed "Permanent link")

Since `mod_deflate` re-compresses content each
time a request is made, some performance benefit can be derived by
pre-compressing the content and telling `mod_deflate` to serve them
without re-compressing them. This may be accomplished using a
configuration like the following:

```
<IfModule mod_headers.c>
    # Serve gzip compressed CSS and JS files if they exist
    # and the client accepts gzip.
    RewriteCond "%{HTTP:Accept-encoding}" "gzip"
    RewriteCond "%{REQUEST_FILENAME}\.gz" -s
    RewriteRule "^(.*)\.(css|js)"         "$1\.$2\.gz" [QSA]

    # Serve correct content types, and prevent mod_deflate double gzip.
    RewriteRule "\.css\.gz$" "-" [T=text/css,E=no-gzip:1]
    RewriteRule "\.js\.gz$"  "-" [T=text/javascript,E=no-gzip:1]

    <FilesMatch "(\.js\.gz|\.css\.gz)$">
      # Serve correct encoding type.
      Header append Content-Encoding gzip

      # Force proxies to cache gzipped &
      # non-gzipped css/js files separately.
      Header append Vary Accept-Encoding
    </FilesMatch>
</IfModule>
```

[![top](../images/up.gif)](#page-header)

## DeflateAlterETag Directive [¶](#deflatealteretag "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | How the outgoing ETag header should be modified during compression |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateAlterETag AddSuffix|NoChange|Remove` |
| [Default:](mod__directive-dict.md#Default) | `DeflateAlterETag AddSuffix` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.4.58 and later |

The `DeflateAlterETag` directive specifies
how the ETag header should be altered when a response is compressed.

AddSuffix
:   Append the compression method onto the end of the ETag, causing
    compressed and uncompressed representations to have unique ETags.
    This has been the default since 2.4.0, but prevents serving
    "HTTP Not Modified" (304) responses to conditional requests for
    compressed content.

NoChange
:   Don't change the ETag on a compressed response. This was the default
    prior to 2.4.0, but does not satisfy the HTTP/1.1 property that all
    representations of the same resource have unique ETags.

Remove
:   Remove the ETag header from compressed responses. This prevents
    some conditional requests from being possible, but avoids the
    shortcomings of the preceding options.

[![top](../images/up.gif)](#page-header)

## DeflateBufferSize Directive [¶](#deflatebuffersize "Permanent link")

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
time. If the compressed response size is bigger than the one specified
by this directive then httpd will switch to chunked encoding
(HTTP header `Transfer-Encoding` set to `Chunked`), with the
side effect of not setting any `Content-Length` HTTP header. This is particularly
important when httpd works behind reverse caching proxies or when httpd is configured with
`mod_cache` and `mod_cache_disk` because
HTTP responses without any `Content-Length` header might not be cached.

[![top](../images/up.gif)](#page-header)

## DeflateCompressionLevel Directive [¶](#deflatecompressionlevel "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | How much compression do we apply to the output |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateCompressionLevel value` |
| [Default:](mod__directive-dict.md#Default) | `Zlib's default` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |

The `DeflateCompressionLevel` directive specifies
what level of compression should be used, the higher the value,
the better the compression, but the more CPU time is required to
achieve this.

The value must be between 1 (less compression) and 9 (more compression).

[![top](../images/up.gif)](#page-header)

## DeflateFilterNote Directive [¶](#deflatefilternote "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Places the compression ratio in a note for logging |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateFilterNote [type] notename` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |

The `DeflateFilterNote` directive
specifies that a note about compression ratios should be attached
to the request. The name of the note is the value specified for
the directive. You can use that note for statistical purposes by
adding the value to your [access log](logs.md#accesslog).

### Example

```
DeflateFilterNote ratio

LogFormat '"%r" %b (%{ratio}n) "%{User-agent}i"' deflate
CustomLog "logs/deflate_log" deflate
```

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

```
DeflateFilterNote Input instream
DeflateFilterNote Output outstream
DeflateFilterNote Ratio ratio

LogFormat '"%r" %{outstream}n/%{instream}n (%{ratio}n%%)' deflate
CustomLog "logs/deflate_log" deflate
```

### See also

- `mod_log_config`

[![top](../images/up.gif)](#page-header)

## DeflateInflateLimitRequestBody Directive [¶](#deflateinflatelimitrequestbody "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum size of inflated request bodies |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateInflateLimitRequestBody value` |
| [Default:](mod__directive-dict.md#Default) | `None, but LimitRequestBody applies after deflation` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | All |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |
| [Compatibility:](mod__directive-dict.md#Compatibility) | 2.4.10 and later |

The `DeflateInflateLimitRequestBody` directive
specifies the maximum size of an inflated request body. If it is unset,
`LimitRequestBody` is applied to the
inflated body. A value of `0` means no limit is applied
to the inflated body size (but other limits such as
`LimitRequestBody` may still apply).

[![top](../images/up.gif)](#page-header)

## DeflateInflateRatioBurst Directive [¶](#deflateinflateratioburst "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum number of times the inflation ratio for request bodies can be crossed |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateInflateRatioBurst value` |
| [Default:](mod__directive-dict.md#Default) | `DeflateInflateRatioBurst 3` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | All |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |
| [Compatibility:](mod__directive-dict.md#Compatibility) | 2.4.10 and later |

The `DeflateInflateRatioBurst` directive
specifies the maximum number of times the
`DeflateInflateRatioLimit` can
be crossed before terminating the request.

[![top](../images/up.gif)](#page-header)

## DeflateInflateRatioLimit Directive [¶](#deflateinflateratiolimit "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum inflation ratio for request bodies |
| [Syntax:](mod__directive-dict.md#Syntax) | `DeflateInflateRatioLimit value` |
| [Default:](mod__directive-dict.md#Default) | `DeflateInflateRatioLimit 200` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | All |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_deflate |
| [Compatibility:](mod__directive-dict.md#Compatibility) | 2.4.10 and later |

The `DeflateInflateRatioLimit` directive
specifies the maximum ratio of deflated to inflated size of an
inflated request body. This ratio is checked as the body is
streamed in, and if crossed more than
`DeflateInflateRatioBurst`
times, the request will be terminated.

[![top](../images/up.gif)](#page-header)

## DeflateMemLevel Directive [¶](#deflatememlevel "Permanent link")

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

## DeflateWindowSize Directive [¶](#deflatewindowsize "Permanent link")

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

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_deflate.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_deflate.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_deflate.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_deflate.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
