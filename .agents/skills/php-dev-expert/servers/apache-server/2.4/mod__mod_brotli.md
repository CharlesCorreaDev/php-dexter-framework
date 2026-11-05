# mod_brotli - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_brotli.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_brotli

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Compress content via Brotli before it is delivered to the client |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | brotli\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_brotli.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.4.26 and later. |

### Summary

The `mod_brotli` module provides
the `BROTLI_COMPRESS` output filter that allows output from
your server to be compressed using the brotli compression format before being sent to the client over
the network. This module uses the Brotli library found at
<https://github.com/google/brotli>.

### Topics

- ![](../images/down.gif) [Sample Configurations](#recommended)
- ![](../images/down.gif) [Enabling Compression](#enable)
- ![](../images/down.gif) [Dealing with proxy servers](#proxies)
- ![](../images/down.gif) [Serving pre-compressed
  content](#precompressed)

### Directives

- ![](../images/down.gif) [BrotliAlterETag](#brotlialteretag)
- ![](../images/down.gif) [BrotliCompressionMaxInputBlock](#brotlicompressionmaxinputblock)
- ![](../images/down.gif) [BrotliCompressionQuality](#brotlicompressionquality)
- ![](../images/down.gif) [BrotliCompressionWindow](#brotlicompressionwindow)
- ![](../images/down.gif) [BrotliFilterNote](#brotlifilternote)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_brotli)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_brotli)

### See also

- [Filters](filter.md)

[![top](../images/up.gif)](#page-header)

## Sample Configurations [¶](#recommended "Permanent link")

### Compression and TLS

Some web applications are vulnerable to an information disclosure
attack when a TLS connection carries compressed data. For more
information, review the details of the "BREACH" family of attacks.

This is a simple configuration that compresses common text-based content types.

### Compress only a few types

```
AddOutputFilterByType BROTLI_COMPRESS text/html text/plain text/xml text/css text/javascript application/javascript
```

[![top](../images/up.gif)](#page-header)

## Enabling Compression [¶](#enable "Permanent link")

### Compression and TLS

Some web applications are vulnerable to an information disclosure
attack when a TLS connection carries compressed data. For more
information, review the details of the "BREACH" family of attacks.

### Output Compression

Compression is implemented by the `BROTLI_COMPRESS`
[filter](filter.md). The following directive
will enable compression for documents in the container where it
is placed:

```
SetOutputFilter BROTLI_COMPRESS
SetEnvIfNoCase Request_URI \.(?:gif|jpe?g|png)$ no-brotli
```

If you want to restrict the compression to particular MIME types
in general, you may use the `AddOutputFilterByType` directive. Here is an example of
enabling compression only for the html files of the httpd
documentation:

```
<Directory "/your-server-root/manual">
    AddOutputFilterByType BROTLI_COMPRESS text/html
</Directory>
```

### Note

The `BROTLI_COMPRESS` filter is always inserted after RESOURCE
filters like PHP or SSI. It never touches internal subrequests.

### Note

There is an environment variable `no-brotli`,
set via `SetEnv`, which
will disable brotli compression for a particular request, even if
it is supported by the client.

[![top](../images/up.gif)](#page-header)

## Dealing with proxy servers [¶](#proxies "Permanent link")

The `mod_brotli` module sends a `Vary:
Accept-Encoding` HTTP response header to alert proxies that
a cached response should be sent only to clients that send the
appropriate `Accept-Encoding` request header. This
prevents compressed content from being sent to a client that will
not understand it.

If you use some special exclusions dependent
on, for example, the `User-Agent` header, you must
manually configure an addition to the `Vary` header
to alert proxies of the additional restrictions. For example,
in a typical configuration where the addition of the `BROTLI_COMPRESS`
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

Since `mod_brotli` re-compresses content each
time a request is made, some performance benefit can be derived by
pre-compressing the content and telling mod\_brotli to serve them
without re-compressing them. This may be accomplished using a
configuration like the following:

```
<IfModule mod_headers.c>
    # Serve brotli compressed CSS files if they exist
    # and the client accepts brotli.
    RewriteEngine On
    RewriteCond "%{HTTP:Accept-encoding}" "br"
    RewriteCond "%{LA-U:REQUEST_FILENAME}.br" "-s"
    RewriteRule "^(.*)\.css"              "$1.css.br" [QSA]

    # Serve brotli compressed JS files if they exist
    # and the client accepts brotli.
    RewriteCond "%{HTTP:Accept-encoding}" "br"
    RewriteCond "%{LA-U:REQUEST_FILENAME}.br" "-s"
    RewriteRule "^(.*)\.js"               "$1.js.br" [QSA]

    # Serve correct content types, and prevent double compression.
    RewriteRule "\.css\.br$" "-" [T=text/css,E=no-brotli:1,E=no-gzip:1]
    RewriteRule "\.js\.br$"  "-" [T=text/javascript,E=no-brotli:1,E=no-gzip:1]

    <FilesMatch "(\.js\.br|\.css\.br)$">
      # Serve correct encoding type.
      Header append Content-Encoding br

      # Force proxies to cache brotli &
      # non-brotli css/js files separately.
      Header append Vary Accept-Encoding
    </FilesMatch>
</IfModule>
```

[![top](../images/up.gif)](#page-header)

## BrotliAlterETag Directive [¶](#brotlialteretag "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | How the outgoing ETag header should be modified during compression |
| [Syntax:](mod__directive-dict.md#Syntax) | `BrotliAlterETag AddSuffix|NoChange|Remove` |
| [Default:](mod__directive-dict.md#Default) | `BrotliAlterETag AddSuffix` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_brotli |

The `BrotliAlterETag` directive specifies
how the ETag header should be altered when a response is compressed.

AddSuffix
:   Append the compression method onto the end of the ETag, causing
    compressed and uncompressed representations to have unique ETags.
    In another dynamic compression module, mod\_deflate, this has been
    the default since 2.4.0. This setting prevents serving "HTTP Not
    Modified" (304) responses to conditional requests for compressed
    content.

NoChange
:   Don't change the ETag on a compressed response. In another dynamic
    compression module, mod\_deflate, this has been the default prior to
    2.4.0. This setting does not satisfy the HTTP/1.1 property that all
    representations of the same resource have unique ETags.

Remove
:   Remove the ETag header from compressed responses. This prevents
    some conditional requests from being possible, but avoids the
    shortcomings of the preceding options.

[![top](../images/up.gif)](#page-header)

## BrotliCompressionMaxInputBlock Directive [¶](#brotlicompressionmaxinputblock "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum input block size |
| [Syntax:](mod__directive-dict.md#Syntax) | `BrotliCompressionMaxInputBlock value` |
| [Default:](mod__directive-dict.md#Default) | `(automatic)` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_brotli |

The `BrotliCompressionMaxInputBlock` directive specifies
the maximum input block size as a power of two, between 16 and 24
(representing blocks of 2^value bytes, i.e.,
64 KB to 16 MB). Larger block sizes can improve compression but
require more memory. When not set, the block size is automatically
selected based on the quality setting.

### Explicit 1 MB input blocks

```
# 2^20 = 1 MB blocks
BrotliCompressionMaxInputBlock 20
```

[![top](../images/up.gif)](#page-header)

## BrotliCompressionQuality Directive [¶](#brotlicompressionquality "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Compression quality |
| [Syntax:](mod__directive-dict.md#Syntax) | `BrotliCompressionQuality value` |
| [Default:](mod__directive-dict.md#Default) | `BrotliCompressionQuality 5` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_brotli |

The `BrotliCompressionQuality` directive specifies
the compression quality (a value between 0 and 11). Higher values
result in better but slower compression. The default of 5 is a
reasonable balance for dynamic content.

### Fast compression for dynamic content

```
# Quality 4 is roughly equivalent to gzip level 6
BrotliCompressionQuality 4
```

### Maximum compression for static assets

```
# Best ratio but very slow — only suitable with caching
BrotliCompressionQuality 11
```

[![top](../images/up.gif)](#page-header)

## BrotliCompressionWindow Directive [¶](#brotlicompressionwindow "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Brotli sliding compression window size |
| [Syntax:](mod__directive-dict.md#Syntax) | `BrotliCompressionWindow value` |
| [Default:](mod__directive-dict.md#Default) | `BrotliCompressionWindow 18` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_brotli |

The `BrotliCompressionWindow` directive specifies the
brotli sliding compression window size (a value between 10 and 24,
representing a window of 2^value bytes). For
example, 18 (the default) gives a 256 KB window, while 24 gives
16 MB. Larger window sizes can improve compression quality, but
require more memory per connection.

### Moderate window for balanced memory use

```
# 1 MB window (2^20 bytes)
BrotliCompressionWindow 20
```

### Maximum window for best compression

```
# 16 MB window (2^24 bytes) — requires significant memory per connection
BrotliCompressionWindow 24
```

[![top](../images/up.gif)](#page-header)

## BrotliFilterNote Directive [¶](#brotlifilternote "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Places the compression ratio in a note for logging |
| [Syntax:](mod__directive-dict.md#Syntax) | `BrotliFilterNote [type] notename` |
| [Default:](mod__directive-dict.md#Default) | `None` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_brotli |

The `BrotliFilterNote` directive
specifies that a note about compression ratios should be attached
to the request. The name of the note is the value specified for
the directive. You can use that note for statistical purposes by
adding the value to your [access log](logs.md#accesslog).

### Example

```
BrotliFilterNote ratio

LogFormat '"%r" %b (%{ratio}n) "%{User-agent}i"' brotli
CustomLog "logs/brotli_log" brotli
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
BrotliFilterNote Input instream
BrotliFilterNote Output outstream
BrotliFilterNote Ratio ratio

LogFormat '"%r" %{outstream}n/%{instream}n (%{ratio}n%%)' brotli
CustomLog "logs/brotli_log" brotli
```

### See also

- `mod_log_config`

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_brotli.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_brotli.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
