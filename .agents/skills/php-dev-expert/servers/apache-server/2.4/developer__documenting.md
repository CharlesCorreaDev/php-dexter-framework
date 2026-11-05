# Documenting code in Apache 2.4 - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/developer/documenting.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](developer.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Developer Documentation](developer.md)

# Documenting code in Apache 2.4

Apache 2.4 uses [Doxygen](https://www.doxygen.nl/) to
document the APIs and global variables in the code. This will explain
the basics of how to document using Doxygen.

[![top](../images/up.gif)](#page-header)

## Brief Description [¶](#brief "Permanent link")

To start a documentation block, use `/**`  
To end a documentation block, use `*/`

In the middle of the block, there are multiple tags we can
use:

`Description of this functions purpose  
@param parameter_name description  
@return description  
@deffunc signature of the function`

The `deffunc` is not always necessary. DoxyGen does not
have a full parser in it, so any prototype that use a macro in the
return type declaration is too complex for scandoc. Those functions
require a `deffunc`. An example (using &gt; rather
than >):

`/**  
 * return the final element of the pathname  
 * @param pathname The path to get the final element of  
 * @return the final element of the path  
 * @tip Examples:  
 * <pre>  
 * "/foo/bar/gum" -&gt; "gum"  
 * "/foo/bar/gum/" -&gt; ""  
 * "gum" -&gt; "gum"  
 * "wi\\n32\\stuff" -&gt; "stuff"  
 * </pre>  
 * @deffunc const char * ap_filename_of_pathname(const char *pathname)  
 */`

At the top of the header file, always include:

`/**  
 * @package Name of library header  
 */`

Doxygen uses a new HTML file for each package. The HTML files are named
{Name\_of\_library\_header}.html, so try to be concise with your names.

For a further discussion of the possibilities please refer to
[the Doxygen site](https://www.doxygen.nl/).

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/developer/documenting.html "English") |
[zh-cn](https://httpd.apache.org/docs/2.4/pt-br/zh-cn/developer/documenting.html "Simplified Chinese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
