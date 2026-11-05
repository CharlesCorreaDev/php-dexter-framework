# mod_sed - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_sed.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_sed

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Filter Input (request) and Output (response) content using `sed` syntax |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | sed\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_sed.c sed0.c sed1.c regexp.c regexp.h sed.h |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and later |

### Summary

`mod_sed` is an in-process content filter. The `mod_sed` filter implements the `sed` editing
commands implemented by the Solaris 10 `sed`
program as described in the [manual
page](http://www.gnu.org/software/sed/manual/sed.txt). However, unlike `sed`, `mod_sed` doesn't take data from
standard
input. Instead, the filter acts on the entity data sent between client and
server. `mod_sed` can be used as an input or output filter. `mod_sed` is a
content filter, which means that it cannot be used to modify client or
server http headers.

The `mod_sed` output filter accepts a chunk of data, executes the `sed` scripts on the data, and generates the output which is passed to the next filter in the chain.

The `mod_sed` input filter reads the data from the next filter in the chain, executes the `sed` scripts, and returns the generated data to the caller filter in the filter chain.

Both the input and output filters only process the data if newline characters are seen in the content. At the end of the data, the rest of the data is treated as the last line. Lines greater than 8MB in length result in an error, in 2.4.54 and later.

### Topics

- ![](../images/down.gif) [Sample Configuration](#sampleconf)
- ![](../images/down.gif) [Sed Commands](#sed_commands)

### Directives

- ![](../images/down.gif) [InputSed](#inputsed)
- ![](../images/down.gif) [OutputSed](#outputsed)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_sed)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_sed)

[![top](../images/up.gif)](#page-header)

## Sample Configuration [¶](#sampleconf "Permanent link")

### Adding an output filter

```
# In the following example, the sed filter will change the string
# "monday" to "MON" and the string "sunday" to SUN in html documents
# before sending to the client.
<Directory "/var/www/docs/sed"> 
    AddOutputFilter Sed html 
    OutputSed "s/monday/MON/g" 
    OutputSed "s/sunday/SUN/g" 
</Directory>
```

### Adding an input filter

```
# In the following example, the sed filter will change the string
# "monday" to "MON" and the string "sunday" to SUN in the POST data
# sent to PHP.
<Directory "/var/www/docs/sed"> 
    AddInputFilter Sed php 
    InputSed "s/monday/MON/g" 
    InputSed "s/sunday/SUN/g" 
</Directory>
```

[![top](../images/up.gif)](#page-header)

## Sed Commands [¶](#sed_commands "Permanent link")

Complete details of the `sed` command can be found from the
[sed manual
page](http://www.gnu.org/software/sed/manual/sed.txt).

`b`
:   Branch to the label specified (similar to goto).

`h`
:   Copy the current line to the hold buffer.

`H`
:   Append the current line to the hold buffer.

`g`
:   Copy the hold buffer to the current line.

`G`
:   Append the hold buffer to the current line.

`x`
:   Swap the contents of the hold buffer and the current line.

[![top](../images/up.gif)](#page-header)

## InputSed Directive [¶](#inputsed "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sed command to filter request data (typically `POST` data) |
| [Syntax:](mod__directive-dict.md#Syntax) | `InputSed sed-command` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_sed |

The `InputSed` directive specifies the `sed` command
to execute on the request data e.g., `POST` data.

[![top](../images/up.gif)](#page-header)

## OutputSed Directive [¶](#outputsed "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sed command for filtering response content |
| [Syntax:](mod__directive-dict.md#Syntax) | `OutputSed sed-command` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_sed |

The `OutputSed` directive specifies the `sed`
command to execute on the response.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_sed.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_sed.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
