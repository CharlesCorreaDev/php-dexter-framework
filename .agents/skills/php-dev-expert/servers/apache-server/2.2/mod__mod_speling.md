# mod_speling - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_speling.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_speling.html) to go to the current version of this document.

# Apache Module mod\_speling

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Attempts to correct mistaken URLs that users might have entered by ignoring capitalization and by allowing up to one misspelling |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | speling\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_speling.c |

### Summary

Requests to documents sometimes cannot be served by the core
apache server because the request was misspelled or
miscapitalized. This module addresses this problem by trying to
find a matching document, even after all other modules gave up.
It does its work by comparing each document name in the
requested directory against the requested document name
**without regard to case**, and allowing
**up to one misspelling** (character insertion /
omission / transposition or wrong character). A list is built
with all document names which were matched using this
strategy.

If, after scanning the directory,

- no matching document was found, Apache will proceed as
  usual and return a "document not found" error.
- only one document is found that "almost" matches the
  request, then it is returned in the form of a redirection
  response.
- more than one document with a close match was found, then
  the list of the matches is returned to the client, and the
  client can select the correct candidate.

### Directives

- ![](../images/down.gif) [CheckCaseOnly](#checkcaseonly)
- ![](../images/down.gif) [CheckSpelling](#checkspelling)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## CheckCaseOnly Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Limits the action of the speling module to case corrections |
| [Syntax:](mod__directive-dict.md#Syntax) | `CheckCaseOnly on|off` |
| [Default:](mod__directive-dict.md#Default) | `CheckCaseOnly Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_speling |

When set, this directive limits the action of the spelling correction to lower/upper case changes.
Other potential corrections are not performed.

[![top](../images/up.gif)](#page-header)

## CheckSpelling Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables the spelling module |
| [Syntax:](mod__directive-dict.md#Syntax) | `CheckSpelling on|off` |
| [Default:](mod__directive-dict.md#Default) | `CheckSpelling Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_speling |
| [Compatibility:](mod__directive-dict.md#Compatibility) | CheckSpelling was available as a separately available module for Apache 1.1, but was limited to miscapitalizations. As of Apache 1.3, it is part of the Apache distribution. Prior to Apache 1.3.2, the `CheckSpelling` directive was only available in the "server" and "virtual host" contexts. |

This directive enables or disables the spelling module. When
enabled, keep in mind that

- the directory scan which is necessary for the spelling
  correction will have an impact on the server's performance
  when many spelling corrections have to be performed at the
  same time.
- the document trees should not contain sensitive files
  which could be matched inadvertently by a spelling
  "correction".
- the module is unable to correct misspelled user names (as
  in `http://my.host/~apahce/`), just file names or
  directory names.
- spelling corrections apply strictly to existing files, so
  a request for the `<Location /status>` may
  get incorrectly treated as the negotiated file
  "`/stats.html`".

mod\_speling should not be enabled in [DAV](mod__mod_dav.md)
enabled directories, because it will try to "spell fix" newly created
resource names against existing filenames, e.g., when trying to upload
a new document `doc43.html` it might redirect to an existing
document `doc34.html`, which is not what was intended.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_speling.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_speling.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_speling.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
