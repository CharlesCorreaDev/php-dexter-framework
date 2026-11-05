# Documenting Apache 2.0 - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/developer/documenting.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](developer.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Developer Documentation](developer.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/developer/documenting.html) to go to the current version of this document.

# Documenting Apache 2.0

Apache 2.0 uses [Doxygen](http://www.doxygen.org/) to
document the APIs and global variables in the code. This will explain
the basics of how to document using Doxygen.

[![top](../images/up.gif)](#page-header)

## Brief Description

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
[the Doxygen site](http://www.doxygen.org/).

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/developer/documenting.html "English") |
[zh-cn](https://httpd.apache.org/docs/2.2/pt-br/zh-cn/developer/documenting.html "Simplified Chinese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
