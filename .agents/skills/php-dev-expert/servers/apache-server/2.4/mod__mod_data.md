# mod_data - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_data.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_data

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Convert response body into an RFC2397 data URL |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | data\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_data.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and later |

### Summary

This module provides the ability to convert a response into
an [RFC 2397](https://www.rfc-editor.org/rfc/rfc2397) (data URL).

Data URLs can be embedded inline within web pages using something
like the `mod_include` module, to remove the need for
clients to make separate connections to fetch what may potentially be
many small images. Data URLs may also be included into pages generated
by scripting languages such as PHP.

### An example of a data URL

`data:image/gif;base64,R0lGODdhMAAwAPAAAAAAAP///ywAAAAAMAAw  
AAAC8IyPqcvt3wCcDkiLc7C0qwyGHhSWpjQu5yqmCYsapyuvUUlvONmOZtfzgFz  
ByTB10QgxOR0TqBQejhRNzOfkVJ+5YiUqrXF5Y5lKh/DeuNcP5yLWGsEbtLiOSp  
a/TPg7JpJHxyendzWTBfX0cxOnKPjgBzi4diinWGdkF8kjdfnycQZXZeYGejmJl  
ZeGl9i2icVqaNVailT6F5iJ90m6mvuTS4OK05M0vDk0Q4XUtwvKOzrcd3iq9uis  
F81M1OIcR7lEewwcLp7tuNNkM3uNna3F2JQFo97Vriy/Xl4/f1cf5VWzXyym7PH  
hhx4dbgYKAAA7`

The filter takes no parameters, and can be added to the filter stack
using the `SetOutputFilter` directive,
or any of the directives supported by the `mod_filter`
module.

### Configuring the filter

```
<Location "/data/images">
    SetOutputFilter DATA
</Location>
```

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_data)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_data)

### See also

- [Filters](filter.md)

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_data.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_data.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
