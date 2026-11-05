# mod_env - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_env.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_env.html) to go to the current version of this document.

# Apache Module mod\_env

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Modifies the environment which is passed to CGI scripts and SSI pages |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | env\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_env.c |

### Summary

This module allows for control of internal environment variables that
are used by various Apache HTTP Server modules. These variables are also
provided to CGI scripts as native system environment variables, and available
for use in SSI pages. Environment variables may be passed from the shell
which invoked the `httpd` process. Alternatively,
environment variables may be set or unset within the configuration process.

### Directives

- ![](../images/down.gif) [PassEnv](#passenv)
- ![](../images/down.gif) [SetEnv](#setenv)
- ![](../images/down.gif) [UnsetEnv](#unsetenv)

### See also

- [Environment Variables](env.md)
- `SetEnvIf`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## PassEnv Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Passes environment variables from the shell |
| [Syntax:](mod__directive-dict.md#Syntax) | `PassEnv env-variable [env-variable] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_env |

Specifies one or more native system environment variables to make available
as internal environment variables, which are available to Apache HTTP Server modules
as well as propagated to CGI scripts and SSI pages. Values come from the
native OS environment of the shell which invoked the
`httpd` process.

### Example

`PassEnv LD_LIBRARY_PATH`

[![top](../images/up.gif)](#page-header)

## SetEnv Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets environment variables |
| [Syntax:](mod__directive-dict.md#Syntax) | `SetEnv env-variable [value]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_env |

Sets an internal environment variable, which is then available to Apache
HTTP Server modules, and passed on to CGI scripts and SSI pages.

### Example

`SetEnv SPECIAL_PATH /foo/bin`

If you omit the value argument, the variable is set to
an empty string.

The internal environment variables set by this directive are set
*after* most early request processing directives are run, such as access
control and URI-to-filename mapping. If the environment variable you're
setting is meant as input into this early phase of processing such as the
`RewriteRule` directive, you should
instead set the environment variable with
`SetEnvIf`.

On 2.2, the PATH environment variable cannot be set using Setenv.

### See also

- [Environment Variables](env.md)

[![top](../images/up.gif)](#page-header)

## UnsetEnv Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Removes variables from the environment |
| [Syntax:](mod__directive-dict.md#Syntax) | `UnsetEnv env-variable [env-variable] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_env |

Removes one or more internal environment variables from those passed
on to CGI scripts and SSI pages.

### Example

`UnsetEnv LD_LIBRARY_PATH`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_env.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_env.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_env.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/mod_env.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
