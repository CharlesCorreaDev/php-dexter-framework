# httxt2dbm - Generate dbm files for use with RewriteMap - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/programs/httxt2dbm.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Programs](programs.md)

# httxt2dbm - Generate dbm files for use with RewriteMap

`httxt2dbm` is used to generate dbm files from text input, for
use in `RewriteMap` with the
`dbm` map type.

If the output file already exists, it will not be truncated. New keys will be
added and existing keys will be updated.

- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)
- ![](../images/down.gif) [Examples](#examples)

### See also

- `httpd`
- `mod_rewrite`

[![top](../images/up.gif)](#page-header)

## Synopsis [¶](#synopsis "Permanent link")

`httxt2dbm
[ -v ]
[ -f DBM_TYPE ]
-i SOURCE_TXT
-o OUTPUT_DBM`

[![top](../images/up.gif)](#page-header)

## Options [¶](#options "Permanent link")

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
:   Input file from which the dbm is to be created. The file should be formatted
    with one record per line, of the form: `key value`.
    See the documentation for `RewriteMap` for
    further details of this file's format and meaning.

`-o OUTPUT_DBM`
:   Name of the output dbm files.

[![top](../images/up.gif)](#page-header)

## Examples [¶](#examples "Permanent link")

```
httxt2dbm -i rewritemap.txt -o rewritemap.dbm
httxt2dbm -f SDBM -i rewritemap.txt -o rewritemap.dbm
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/programs/httxt2dbm.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/programs/httxt2dbm.html "Français") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/programs/httxt2dbm.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
