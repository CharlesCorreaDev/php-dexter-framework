# mod_charset_lite - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_charset_lite.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_charset_lite.html) to go to the current version of this document.

# Apache Module mod\_charset\_lite

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Specify character set translation or recoding |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | charset\_lite\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_charset\_lite.c |

### Summary

`mod_charset_lite` allows the server to change
the character set of responses before sending them to the client.
In an EBCDIC environment, Apache always translates HTTP protocol
content (e.g. response headers) from the code page of the Apache
process locale to ISO-8859-1, but not the body of responses. In
any environment, `mod_charset_lite` can be used to
specify that response bodies should be translated. For example,
if files are stored in EBCDIC, then
`mod_charset_lite` can translate them to
ISO-8859-1 before sending them to the client.

This module provides a small subset of configuration
mechanisms implemented by Russian Apache and its associated
`mod_charset`.

### Topics

- ![](../images/down.gif) [Common Problems](#problems)

### Directives

- ![](../images/down.gif) [CharsetDefault](#charsetdefault)
- ![](../images/down.gif) [CharsetOptions](#charsetoptions)
- ![](../images/down.gif) [CharsetSourceEnc](#charsetsourceenc)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Common Problems

### Invalid character set names

The character set name parameters of `CharsetSourceEnc` and
`CharsetDefault`
must be acceptable to the translation mechanism used by
[APR](glossary.md#apr "see glossary") on the system where
`mod_charset_lite` is deployed. These character
set names are not standardized and are usually not the same as
the corresponding values used in http headers. Currently, APR
can only use iconv(3), so you can easily test your character set
names using the iconv(1) program, as follows:

`iconv -f charsetsourceenc-value -t charsetdefault-value`

### Mismatch between character set of content and translation rules

If the translation rules don't make sense for the content,
translation can fail in various ways, including:

- The translation mechanism may return a bad return code,
  and the connection will be aborted.
- The translation mechanism may silently place special
  characters (e.g., question marks) in the output buffer when
  it cannot translate the input buffer.

[![top](../images/up.gif)](#page-header)

## CharsetDefault Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Charset to translate into |
| [Syntax:](mod__directive-dict.md#Syntax) | `CharsetDefault charset` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_charset\_lite |

The `CharsetDefault` directive specifies the
charset that content in the associated container should be
translated to.

The value of the charset argument must be accepted
as a valid character set name by the character set support in
[APR](glossary.md#apr "see glossary"). Generally, this means that it must be
supported by iconv.

### Example

`<Directory /export/home/trawick/apacheinst/htdocs/convert>  

CharsetSourceEnc UTF-16BE  
CharsetDefault ISO-8859-1  
</Directory>`

[![top](../images/up.gif)](#page-header)

## CharsetOptions Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Configures charset translation behavior |
| [Syntax:](mod__directive-dict.md#Syntax) | `CharsetOptions option [option] ...` |
| [Default:](mod__directive-dict.md#Default) | `CharsetOptions DebugLevel=0 NoImplicitAdd` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_charset\_lite |

The `CharsetOptions` directive configures certain
behaviors of `mod_charset_lite`. Option can
be one of

`DebugLevel=n`
:   The `DebugLevel` keyword allows you to specify
    the level of debug messages generated by
    `mod_charset_lite`. By default, no messages are
    generated. This is equivalent to `DebugLevel=0`.
    With higher numbers, more debug messages are generated, and
    server performance will be degraded. The actual meanings of
    the numeric values are described with the definitions of the
    DBGLVL\_ constants near the beginning of
    `mod_charset_lite.c`.

`ImplicitAdd | NoImplicitAdd`
:   The `ImplicitAdd` keyword specifies that
    `mod_charset_lite` should implicitly insert its
    filter when the configuration specifies that the character
    set of content should be translated. If the filter chain is
    explicitly configured using the `AddOutputFilter` directive, `NoImplicitAdd`
    should be specified so that `mod_charset_lite`
    doesn't add its filter.

`TranslateAllMimeTypes | NoTranslateAllMimeTypes`
:   Normally, `mod_charset_lite` will only perform
    translation on a small subset of possible mimetypes. When the
    `TranslateAllMimeTypes` keyword is specified for a given
    configuration section, translation is performed without regard for
    mimetype.

[![top](../images/up.gif)](#page-header)

## CharsetSourceEnc Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Source charset of files |
| [Syntax:](mod__directive-dict.md#Syntax) | `CharsetSourceEnc charset` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_charset\_lite |

The `CharsetSourceEnc` directive specifies the
source charset of files in the associated container.

The value of the charset argument must be accepted
as a valid character set name by the character set support in
[APR](glossary.md#apr "see glossary"). Generally, this means that it must be
supported by iconv.

### Example

`<Directory /export/home/trawick/apacheinst/htdocs/convert>  

CharsetSourceEnc UTF-16BE  
CharsetDefault ISO-8859-1  
</Directory>`

The character set names in this example work with the iconv
translation support in Solaris 8.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_charset_lite.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_charset_lite.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
