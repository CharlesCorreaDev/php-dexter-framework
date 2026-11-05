# httxt2dbm - Generate dbm files for use with RewriteMap - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/programs/httxt2dbm.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Programs](programs.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/programs/httxt2dbm.html) to go to the current version of this document.

# httxt2dbm - Generate dbm files for use with RewriteMap

`httxt2dbm` is used to generate dbm files from text input, for
use in `RewriteMap` with
the `dbm` map type.

- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)
- ![](../images/down.gif) [Examples](#examples)

### See also

- `httpd`
- `mod_rewrite`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Synopsis

`httxt2dbm
[ -v ]
[ -f DBM_TYPE ]
-i SOURCE_TXT
-o OUTPUT_DBM`

[![top](../images/up.gif)](#page-header)

## Options

`-v`
:   More verbose output

`-f DBM_TYPE`
:   Specify the DBM type to be used for the output. If not specified, will
    use the [APR](glossary.md#apr "see glossary") Default. Available types are:
    `GDBM` for GDBM files,
    `SDBM` for SDBM files,
    `DB` for berkeley DB files,
    `NDBM` for NDBM files,
    `default` for the default DBM type.

`-i SOURCE_TXT`
:   Input file from which the dbm is to be created. The file should be formated
    with one record per line, of the form: `key value`.
    See the documentation for `RewriteMap` for
    further details of this file's format and meaning.

`-o OUTPUT_DBM`
:   Name of the output dbm files.

[![top](../images/up.gif)](#page-header)

## Examples

`httxt2dbm -i rewritemap.txt -o rewritemap.dbm  
httxt2dbm -f SDBM -i rewritemap.txt -o rewritemap.dbm`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/programs/httxt2dbm.html "English") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/programs/httxt2dbm.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
