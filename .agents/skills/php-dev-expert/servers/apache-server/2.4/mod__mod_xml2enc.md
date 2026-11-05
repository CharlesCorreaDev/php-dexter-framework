# mod_xml2enc - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_xml2enc.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_xml2enc

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Enhanced charset/internationalisation support for libxml2-based filter modules |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | xml2enc\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_xml2enc.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Version 2.4 and later. Available as a third-party module for 2.2.x versions |

### Summary

This module provides enhanced internationalisation support for
markup-aware filter modules such as `mod_proxy_html`.
It can automatically detect the encoding of input data and ensure
they are correctly processed by the [libxml2](http://xmlsoft.org/) parser, including converting to Unicode (UTF-8) where
necessary. It can also convert data to an encoding of choice
after markup processing, and will ensure the correct charset
value is set in the HTTP Content-Type header.

### Topics

- ![](../images/down.gif) [Usage](#usage)
- ![](../images/down.gif) [Programming API](#api)
- ![](../images/down.gif) [Detecting an Encoding](#sniffing)
- ![](../images/down.gif) [Output Encoding](#output)
- ![](../images/down.gif) [Unsupported Encodings](#alias)

### Directives

- ![](../images/down.gif) [xml2EncAlias](#xml2encalias)
- ![](../images/down.gif) [xml2EncDefault](#xml2encdefault)
- ![](../images/down.gif) [xml2StartParse](#xml2startparse)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_xml2enc)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_xml2enc)

[![top](../images/up.gif)](#page-header)

## Usage [¶](#usage "Permanent link")

There are two usage scenarios: with modules programmed to work
with mod\_xml2enc, and with those that are not aware of it:

Filter modules enabled for mod\_xml2enc
:   Modules such as `mod_proxy_html` version 3.1
    and up use the `xml2enc_charset` optional function to retrieve
    the charset argument to pass to the libxml2 parser, and may use the
    `xml2enc_filter` optional function to postprocess to another
    encoding. Using mod\_xml2enc with an enabled module, no configuration
    is necessary: the other module will configure mod\_xml2enc for you
    (though you may still want to customize it using the configuration
    directives below).

Non-enabled modules
:   To use it with a libxml2-based module that isn't explicitly enabled for
    mod\_xml2enc, you will have to configure the filter chain yourself. So to
    use it with a filter **foo** provided by a module
    **mod\_foo** to improve the latter's i18n support with HTML and
    XML, you could use

    ```
        FilterProvider iconv    xml2enc Content-Type $text/html
        FilterProvider iconv    xml2enc Content-Type $xml
        FilterProvider markup   foo Content-Type $text/html
        FilterProvider markup   foo Content-Type $xml
        FilterChain     iconv markup
    ```

    **mod\_foo** will now support any character set supported by either
    (or both) of libxml2 or apr\_xlate/iconv.

[![top](../images/up.gif)](#page-header)

## Programming API [¶](#api "Permanent link")

Programmers writing libxml2-based filter modules are encouraged to
enable them for mod\_xml2enc, to provide strong i18n support for your
users without reinventing the wheel. The programming API is exposed in
mod\_xml2enc.h, and a usage example is
`mod_proxy_html`.

[![top](../images/up.gif)](#page-header)

## Detecting an Encoding [¶](#sniffing "Permanent link")

Unlike `mod_charset_lite`, mod\_xml2enc is designed
to work with data whose encoding cannot be known in advance and thus
configured. It therefore uses 'sniffing' techniques to detect the
encoding of HTTP data as follows:

1. If the HTTP Content-Type header includes a
   charset parameter, that is used.
2. If the data start with an XML Byte Order Mark (BOM) or an
   XML encoding declaration, that is used.
3. If an encoding is declared in an HTML `<META>`
   element, that is used.
4. If none of the above match, the default value set by
   `xml2EncDefault` is used.

The rules are applied in order. As soon as a match is found,
it is used and detection is stopped.

[![top](../images/up.gif)](#page-header)

## Output Encoding [¶](#output "Permanent link")

[libxml2](http://xmlsoft.org/) always uses UTF-8 (Unicode)
internally, and libxml2-based filter modules will output that by default.
mod\_xml2enc can change the output encoding through the API, but there
is currently no way to configure that directly.

Changing the output encoding should (in theory, at least) never be
necessary, and is not recommended due to the extra processing load on
the server of an unnecessary conversion.

[![top](../images/up.gif)](#page-header)

## Unsupported Encodings [¶](#alias "Permanent link")

If you are working with encodings that are not supported by any of
the conversion methods available on your platform, you can still alias
them to a supported encoding using `xml2EncAlias`.

[![top](../images/up.gif)](#page-header)

## xml2EncAlias Directive [¶](#xml2encalias "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Recognize Aliases for encoding values |
| [Syntax:](mod__directive-dict.md#Syntax) | `xml2EncAlias charset alias [alias ...]` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_xml2enc |

This server-wide directive aliases one or more encoding to another
encoding. This enables encodings not recognized by libxml2 to be handled
internally by libxml2's encoding support using the translation table for
a recognized encoding. This serves two purposes: to support character sets
(or names) not recognized either by libxml2 or iconv, and to skip
conversion for an encoding where it is known to be unnecessary.

[![top](../images/up.gif)](#page-header)

## xml2EncDefault Directive [¶](#xml2encdefault "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets a default encoding to assume when absolutely no information can be [automatically detected](#sniffing) |
| [Syntax:](mod__directive-dict.md#Syntax) | `xml2EncDefault name` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_xml2enc |

If you are processing data with known encoding but no encoding
information, you can set this default to help mod\_xml2enc process
the data correctly. For example, to work with the default value
of Latin1 (iso-8859-1) specified in HTTP/1.0, use:

```
xml2EncDefault iso-8859-1
```

[![top](../images/up.gif)](#page-header)

## xml2StartParse Directive [¶](#xml2startparse "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Advise the parser to skip leading junk. |
| [Syntax:](mod__directive-dict.md#Syntax) | `xml2StartParse element [element ...]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_xml2enc |

Specify that the markup parser should start at the first instance
of any of the elements specified. This can be used as a workaround
where a broken backend inserts leading junk that messes up the parser ([example here](http://bahumbug.wordpress.com/2006/10/12/mod_proxy_html-revisited/)).

It should never be used for XML, nor well-formed HTML.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_xml2enc.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_xml2enc.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
