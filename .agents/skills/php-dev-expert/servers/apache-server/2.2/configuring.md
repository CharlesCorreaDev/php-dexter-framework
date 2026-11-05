# Configuration Files - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/configuring.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/configuring.html) to go to the current version of this document.

# Configuration Files

This document describes the files used to configure the Apache
HTTP server.

- ![](./images/down.gif) [Main Configuration Files](#main)
- ![](./images/down.gif) [Syntax of the Configuration Files](#syntax)
- ![](./images/down.gif) [Modules](#modules)
- ![](./images/down.gif) [Scope of Directives](#scope)
- ![](./images/down.gif) [.htaccess Files](#htaccess)

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## Main Configuration Files

| Related Modules | Related Directives |
| --- | --- |
| - `mod_mime` | - `<IfDefine>` - `Include` - `TypesConfig` |

Apache is configured by placing [directives](mod__directives.md) in plain text
configuration files. The main configuration file is usually called
`httpd.conf`. The location of this file is set at
compile-time, but may be overridden with the `-f`
command line flag. In addition, other configuration files may be
added using the `Include`
directive, and wildcards can be used to include many configuration
files. Any directive may be placed in any of these configuration
files. Changes to the main configuration files are only
recognized by Apache when it is started or restarted.

The server also reads a file containing mime document types;
the filename is set by the `TypesConfig` directive,
and is `mime.types` by default.

[![top](./images/up.gif)](#page-header)

## Syntax of the Configuration Files

Apache configuration files contain one directive per line.
The backslash "\" may be used as the last character on a line
to indicate that the directive continues onto the next line.
There must be no other characters or white space between the
backslash and the end of the line.

Directives in the configuration files are case-insensitive,
but arguments to directives are often case sensitive. Lines
that begin with the hash character "#" are considered
comments, and are ignored. Comments may **not** be
included on the same line as a configuration directive.
White space occurring before a directive is ignored, so
you may indent directives for clarity. Blank lines are also ignored.

The values of shell environment variables can be used in
configuration file lines using the syntax `${ENVVAR}`.
If "ENVVAR" is the name of a valid environment variable, the value
of that variable is substituted into that spot in the
configuration file line, and processing continues as if that text
were found directly in the configuration file. (If the ENVVAR
variable is not found, the characters "${ENVVAR}" are left
unchanged for use by later stages in the config file
processing.)

The maximum length of a line in the configuration file, after
environment-variable substitution, joining any continued lines and
removing leading and trailing white space, is 8192 characters.

You can check your configuration files for syntax errors
without starting the server by using `apachectl
configtest` or the `-t` command line
option.

[![top](./images/up.gif)](#page-header)

## Modules

| Related Modules | Related Directives |
| --- | --- |
| - `mod_so` | - `<IfModule>` - `LoadModule` |

Apache is a modular server. This implies that only the most
basic functionality is included in the core server. Extended
features are available through [modules](mod.md) which can be loaded
into Apache. By default, a [base](mod__module-dict.md#Status) set of modules is
included in the server at compile-time. If the server is
compiled to use [dynamically loaded](dso.md)
modules, then modules can be compiled separately and added at
any time using the `LoadModule`
directive.
Otherwise, Apache must be recompiled to add or remove modules.
Configuration directives may be included conditional on a
presence of a particular module by enclosing them in an `<IfModule>` block.

To see which modules are currently compiled into the server,
you can use the `-l` command line option.

[![top](./images/up.gif)](#page-header)

## Scope of Directives

| Related Modules | Related Directives |
| --- | --- |
|  | - `<Directory>` - `<DirectoryMatch>` - `<Files>` - `<FilesMatch>` - `<Location>` - `<LocationMatch>` - `<VirtualHost>` |

Directives placed in the main configuration files apply to
the entire server. If you wish to change the configuration for
only a part of the server, you can scope your directives by
placing them in `<Directory>`, `<DirectoryMatch>`, `<Files>`, `<FilesMatch>`, `<Location>`, and `<LocationMatch>`
sections. These sections limit the application of the
directives which they enclose to particular filesystem
locations or URLs. They can also be nested, allowing for very
fine grained configuration.

Apache has the capability to serve many different websites
simultaneously. This is called [Virtual
Hosting](vhosts.md). Directives can also be scoped by placing them
inside `<VirtualHost>`
sections, so that they will only apply to requests for a
particular website.

Although most directives can be placed in any of these
sections, some directives do not make sense in some contexts.
For example, directives controlling process creation can only
be placed in the main server context. To find which directives
can be placed in which sections, check the [Context](mod__directive-dict.md#Context) of the
directive. For further information, we provide details on [How Directory, Location and Files sections
work](sections.md).

[![top](./images/up.gif)](#page-header)

## .htaccess Files

| Related Modules | Related Directives |
| --- | --- |
|  | - `AccessFileName` - `AllowOverride` |

Apache allows for decentralized management of configuration
via special files placed inside the web tree. The special files
are usually called `.htaccess`, but any name can be
specified in the `AccessFileName`
directive. Directives placed in `.htaccess` files
apply to the directory where you place the file, and all
sub-directories. The `.htaccess` files follow the
same syntax as the main configuration files. Since
`.htaccess` files are read on every request, changes
made in these files take immediate effect.

To find which directives can be placed in
`.htaccess` files, check the [Context](mod__directive-dict.md#Context) of the
directive. The server administrator further controls what
directives may be placed in `.htaccess` files by
configuring the `AllowOverride`
directive in the main configuration files.

For more information on `.htaccess` files, see
the [.htaccess tutorial](howto__htaccess.md).

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/configuring.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/configuring.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/configuring.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/configuring.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/configuring.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/configuring.html "Türkçe")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
