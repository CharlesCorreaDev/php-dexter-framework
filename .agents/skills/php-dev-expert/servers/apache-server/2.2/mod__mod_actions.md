# mod_actions - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_actions.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_actions.html) to go to the current version of this document.

# Apache Module mod\_actions

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | This module provides for executing CGI scripts based on media type or request method. |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | actions\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_actions.c |

### Summary

This module has two directives. The `Action` directive lets you run CGI
scripts whenever a file of a certain [MIME content type](glossary.md#mime-type "see glossary") is requested. The
`Script` directive lets
you run CGI scripts whenever a particular method is used in a
request. This makes it much easier to execute scripts that process
files.

### Directives

- ![](../images/down.gif) [Action](#action)
- ![](../images/down.gif) [Script](#script)

### See also

- `mod_cgi`
- [Dynamic Content with CGI](howto__cgi.md)
- [Apache's Handler Use](handler.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Action Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Activates a CGI script for a particular handler or content-type |
| [Syntax:](mod__directive-dict.md#Syntax) | `Action action-type cgi-script [virtual]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_actions |
| [Compatibility:](mod__directive-dict.md#Compatibility) | The `virtual` modifier and handler passing were introduced in Apache 2.1 |

This directive adds an action, which will activate
cgi-script when action-type is triggered by
the request. The cgi-script is the URL-path to a
resource that has been designated as a CGI script using `ScriptAlias` or `AddHandler`. The
action-type can be either a [handler](handler.md) or a [MIME content type](glossary.md#mime-type "see glossary"). It sends the URL and
file path of the requested document using the standard CGI
`PATH_INFO` and `PATH_TRANSLATED`
environment variables. The handler used for the particular request
is passed using the `REDIRECT_HANDLER` variable.

### Examples

`# Requests for files of a particular MIME content type:  
Action image/gif /cgi-bin/images.cgi  
  
# Files of a particular file extension  
AddHandler my-file-type .xyz  
Action my-file-type /cgi-bin/program.cgi`

In the first example, requests for files with a MIME content
type of `image/gif` will be handled by the
specified cgi script `/cgi-bin/images.cgi`.

In the second example, requests for files with a file extension of
`.xyz` are handled by the specified cgi script
`/cgi-bin/program.cgi`.

The optional `virtual` modifier turns off the check
whether the requested file really exists. This is useful, for example,
if you want to use the `Action` directive in
virtual locations.

### Example

`<Location /news>  

SetHandler news-handler  
Action news-handler /cgi-bin/news.cgi virtual  
</Location>`

### See also

- `AddHandler`

[![top](../images/up.gif)](#page-header)

## Script Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Activates a CGI script for a particular request method. |
| [Syntax:](mod__directive-dict.md#Syntax) | `Script method cgi-script` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_actions |

This directive adds an action, which will activate
cgi-script when a file is requested using the method of
method. The cgi-script is the URL-path to a
resource that has been designated as a CGI script using `ScriptAlias` or `AddHandler`. The URL and
file path of the requested document is sent using the standard CGI
`PATH_INFO` and `PATH_TRANSLATED` environment
variables.

Any arbitrary method name may be used. **Method names are
case-sensitive**, so `Script PUT` and
`Script put` have two entirely different
effects.

Note that the `Script` command defines default
actions only. If a CGI script is called, or some other resource that is
capable of handling the requested method internally, it will do
so. Also note that `Script` with a method of
`GET` will only be called if there are query arguments present
(*e.g.*, foo.html?hi). Otherwise, the request will
proceed normally.

### Examples

`# For <ISINDEX>-style searching  
Script GET /cgi-bin/search  
  
# A CGI PUT handler  
Script PUT /~bob/put.cgi`

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/mod/mod_actions.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_actions.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_actions.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_actions.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
