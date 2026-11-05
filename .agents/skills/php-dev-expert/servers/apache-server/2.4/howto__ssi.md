# Apache httpd Tutorial: Introduction to Server Side Includes - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/howto/ssi.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](howto.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [How-To / Tutorials](howto.md)

# Apache httpd Tutorial: Introduction to Server Side Includes

Server Side Includes (SSI) provide a way to add dynamic content to
existing HTML documents without requiring a full application framework.
They are particularly useful for inserting common elements — headers,
footers, navigation, timestamps — into otherwise static pages.

- ![](../images/down.gif) [Introduction](#related)
- ![](../images/down.gif) [What are SSI?](#what)
- ![](../images/down.gif) [Configuring your server to permit SSI](#configuring)
- ![](../images/down.gif) [Basic SSI directives](#basic)
- ![](../images/down.gif) [Additional examples](#additionalexamples)
- ![](../images/down.gif) [Other config options](#config)
- ![](../images/down.gif) [Executing commands](#exec)
- ![](../images/down.gif) [Advanced SSI techniques](#advanced)
- ![](../images/down.gif) [Conclusion](#conclusion)

[![top](../images/up.gif)](#page-header)

## Introduction [¶](#related "Permanent link")

| Related Modules | Related Directives |
| --- | --- |
| - `mod_include` - `mod_cgi` - `mod_expires` | - `Options` - `XBitHack` - `AddType` - `SetOutputFilter` - `BrowserMatchNoCase` |

SSI lets you drop simple directives into your HTML files that
the server evaluates before sending the page to the client. This
is a lightweight way to keep shared content (like a site-wide
footer or a "last modified" timestamp) in one place, without
needing a template engine or application server.

This document covers configuring httpd to permit SSI, basic
SSI directives for common tasks, and some more advanced
techniques including variables and conditional expressions.

[![top](../images/up.gif)](#page-header)

## What are SSI? [¶](#what "Permanent link")

SSI directives are HTML comments with a specific syntax that
`mod_include` recognizes and evaluates before the
page is sent to the client. They look like this:

```
<!--#echo var="DATE_LOCAL" -->
```

When the page is served, this fragment is replaced with its
value:

`Thursday, 18-Jun-2026 14:22:07 EDT`

Because the directives are embedded in HTML comments, if SSI
is not enabled, browsers ignore them (though they remain
visible in the page source).

[![top](../images/up.gif)](#page-header)

## Configuring your server to permit SSI [¶](#configuring "Permanent link")

To enable SSI processing, add the following directive to your
`httpd.conf` file or to a `.htaccess`
file:

```
Options +Includes
```

This tells httpd to parse files for SSI directives. Since most
configurations contain multiple `Options` directives that can override each other, apply
this to the specific directory where you want SSI enabled.

You also need to tell httpd which files to parse. There are
two common approaches.

The first is to designate a file extension (typically
`.shtml`) for SSI-enabled pages:

```
AddType text/html .shtml
AddOutputFilter INCLUDES .shtml
```

The disadvantage here is that adding SSI to an existing page
requires renaming the file (and updating all links to it) to use
the `.shtml` extension.

The second approach uses the `XBitHack` directive:

```
XBitHack on
```

`XBitHack` tells
httpd to parse any file that has its execute bit set. To enable
SSI on an existing page, make the file executable:

```
chmod +x pagename.html
```

Avoid configuring httpd to parse *all* `.html`
files for SSI directives. This forces the server to read through
every HTML file it serves, even those without any SSI content,
which adds unnecessary overhead.

On Windows, there is no execute bit, so the
`XBitHack` approach is
not available. Use the file-extension method instead.

By default, httpd does not send the last-modified date or
content-length headers on SSI pages, since these values are
difficult to calculate for dynamic content. This can prevent
caching and result in slower perceived performance. Two
approaches can help:

1. Use `XBitHack Full`, which tells httpd to
   determine the last-modified date from the originally requested
   file, ignoring the modification dates of included files.
2. Use `mod_expires` to set an explicit
   expiration time, letting browsers and proxies know the content
   is safe to cache.

[![top](../images/up.gif)](#page-header)

## Basic SSI directives [¶](#basic "Permanent link")

SSI directives use the following syntax:

```
<!--#function attribute=value attribute=value ... -->
```

If SSI is correctly configured, the directive is replaced with
its output. If not, it remains as an HTML comment — invisible to
the end user but present in the source.

### Today's date

```
<!--#echo var="DATE_LOCAL" -->
```

The `echo` function outputs the value of a variable.
Standard variables include the full set of environment variables
available to CGI programs, plus variables you define with
`set`.

To customize the date format, use the `config`
function with the `timefmt` attribute:

```
<!--#config timefmt="%A %B %d, %Y" -->  

Today is <!--#echo var="DATE_LOCAL" -->
```

### Modification date of the file

```
This document last modified <!--#flastmod file="index.html" -->
```

This function is also subject to `timefmt`
configuration.

### Including the results of a CGI program

SSI can include the output of a CGI program directly in the
page:

```
<!--#include virtual="/cgi-bin/counter.pl" -->
```

[![top](../images/up.gif)](#page-header)

## Additional examples [¶](#additionalexamples "Permanent link")

The following are practical examples of common SSI use
cases.

### When was this document modified?

A common use of SSI is to display a "last modified" timestamp
on each page. The following code uses the
`LAST_MODIFIED` variable so you can paste the same
snippet into any file without changing the filename:

```
<!--#config timefmt="%D" -->  

This file last modified <!--#echo var="LAST_MODIFIED" -->
```

For details on `timefmt` format strings, see the
documentation for `strftime` in your system's C
library reference.

### Including a standard footer

On a site with more than a few pages, maintaining a
consistent header or footer across all pages can be tedious.
SSI solves this by letting you keep shared content in a single
file and include it everywhere:

```
<!--#include virtual="/footer.html" -->
```

The `include` function accepts two attributes:
`file` specifies a path relative to the current
directory (it cannot be an absolute path or contain
`../`), while `virtual` specifies a URL
relative to the document being served (it can start with
`/` but must be on the same server).

SSI directives inside included files are evaluated normally,
and includes can be nested. This means you can put a
`LAST_MODIFIED` timestamp in your footer file, and
it will be evaluated in the context of each page that includes
it.

[![top](../images/up.gif)](#page-header)

## Other config options [¶](#config "Permanent link")

In addition to `timefmt`, the `config`
function supports two other attributes.

The `errmsg` attribute changes the error message
displayed when an SSI directive fails. The default is:

`[an error occurred while processing this directive]`

You can replace it with something more appropriate for your
site:

```
<!--#config errmsg="[Content unavailable]" -->
```

The `sizefmt` attribute controls how file sizes
are formatted: `bytes` for a full byte count, or
`abbrev` for an abbreviated form in KB or MB.

[![top](../images/up.gif)](#page-header)

## Executing commands [¶](#exec "Permanent link")

The `exec` function can run a shell command and
include its output in the page. On Unix-like systems, the
command is executed via `/bin/sh`; on Windows, via
the command shell.

```
<pre>
<!--#exec cmd="ls" -->
</pre>
```

The `exec` feature is a significant security risk. It
executes arbitrary commands with the permissions of the web
server process. If users can edit content on your site, ensure
this feature is disabled by using `IncludesNOEXEC`
instead of `Includes` in the `Options` directive.

[![top](../images/up.gif)](#page-header)

## Advanced SSI techniques [¶](#advanced "Permanent link")

Beyond simple content inclusion, SSI supports variables and
conditional expressions, making it possible to generate
different content based on the request context.

### Setting variables

The `set` directive defines variables for use later
in the page:

```
<!--#set var="name" value="Rich" -->
```

Variables can reference other variables (including
[environment variables](env.md)) using the dollar
sign (`$`) prefix:

```
<!--#set var="modified" value="$LAST_MODIFIED" -->
```

To include a literal dollar sign, escape it with a
backslash:

```
<!--#set var="cost" value="\$100" -->
```

When a variable name might be ambiguous within a longer
string, use braces to delimit it:

```
<!--#set var="date" value="${DATE_LOCAL}_${DATE_GMT}" -->
```

### Conditional expressions

`mod_include` provides `if`,
`elif`, `else`, and `endif`
constructs for building conditional logic. This lets you
generate different output from a single physical page.

The structure is:

```
<!--#if expr="test_condition" -->  

<!--#elif expr="test_condition" -->  

<!--#else -->  

<!--#endif -->
```

A *test\_condition* can compare values or test whether a
variable is non-empty. See the `mod_include`
documentation for the full list of comparison operators.

For example, to display different greetings based on the time
of day:

```
Good
<!--#if expr="%{TIME_HOUR} <12" -->  

morning!  

<!--#else -->  

afternoon!  

<!--#endif -->
```

Any variable — user-defined or from the environment — can be
used in conditional expressions. See
[Expressions in Apache HTTP Server](expr.md) for
full details on the expression evaluation engine.

Combined with httpd's ability to set environment variables
using `SetEnvIf` and
related directives, conditional SSI can handle a wide variety of
dynamic content scenarios without a full application
framework.

[![top](../images/up.gif)](#page-header)

## Conclusion [¶](#conclusion "Permanent link")

For sites that are mostly static but need a few dynamic
touches, SSI avoids the overhead of setting up a full
application stack. It requires only `mod_include`
and a few lines of configuration to get started.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/howto/ssi.html "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/howto/ssi.html "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/howto/ssi.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/howto/ssi.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/howto/ssi.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
