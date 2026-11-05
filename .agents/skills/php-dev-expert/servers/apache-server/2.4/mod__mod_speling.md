# mod_speling - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_speling.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_speling

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Attempts to correct mistaken URLs by ignoring capitalization, or attempting to correct various minor misspellings. |
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
strategy. **Erroneous extension** can also be fixed
by this module.

If, after scanning the directory,

- no matching document was found, Apache will proceed as
  usual and return an error (`404 - document not found`).
- only one document is found that "almost" matches the
  request, then it is returned in the form of a redirection
  response (`301 - Moved Permanently`).
- more than one document with a close match was found, then
  the list of the matches is returned to the client, and the
  client can select the correct candidate (`300 - Multiple
  Choices`).

### Directives

- ![](../images/down.gif) [CheckBasenameMatch](#checkbasenamematch)
- ![](../images/down.gif) [CheckCaseOnly](#checkcaseonly)
- ![](../images/down.gif) [CheckSpelling](#checkspelling)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_speling)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_speling)

[![top](../images/up.gif)](#page-header)

## CheckBasenameMatch Directive [¶](#checkbasenamematch "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Also match files with differing file name extensions. |
| [Syntax:](mod__directive-dict.md#Syntax) | `CheckBasenameMatch on|off` |
| [Default:](mod__directive-dict.md#Default) | `CheckBasenameMatch On` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_speling |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in httpd 2.4.50 and later |

When set, this directive extends the action of the spelling correction
to the file name extension. For example a file `foo.gif` will
match a request for `foo` or `foo.jpg`. This can be
particularly useful in conjunction with
[MultiViews](content-negotiation.md).

[![top](../images/up.gif)](#page-header)

## CheckCaseOnly Directive [¶](#checkcaseonly "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Limits the action of the speling module to case corrections |
| [Syntax:](mod__directive-dict.md#Syntax) | `CheckCaseOnly on|off` |
| [Default:](mod__directive-dict.md#Default) | `CheckCaseOnly Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_speling |

When set, this directive limits the action of the spelling correction
to lower/upper case changes. Other potential corrections are not performed,
except when `CheckBasenameMatch` is also set.

[![top](../images/up.gif)](#page-header)

## CheckSpelling Directive [¶](#checkspelling "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables the spelling module |
| [Syntax:](mod__directive-dict.md#Syntax) | `CheckSpelling on|off` |
| [Default:](mod__directive-dict.md#Default) | `CheckSpelling Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_speling |

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

`mod_speling` should not be enabled in [DAV](mod__mod_dav.md)
enabled directories, because it will try to "spell fix" newly created
resource names against existing filenames, e.g., when trying to upload
a new document `doc43.html` it might redirect to an existing
document `doc34.html`, which is not what was intended.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_speling.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_speling.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_speling.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_speling.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
