# mod_alias - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_alias.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_alias.html) to go to the current version of this document.

# Apache Module mod\_alias

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Provides for mapping different parts of the host filesystem in the document tree and for URL redirection |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | alias\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_alias.c |

### Summary

The directives contained in this module allow for manipulation
and control of URLs as requests arrive at the server. The
`Alias` and `ScriptAlias` directives are used to
map between URLs and filesystem paths. This allows for content
which is not directly under the `DocumentRoot` served as part of the web
document tree. The `ScriptAlias` directive has the
additional effect of marking the target directory as containing
only CGI scripts.

The `Redirect`
directives are used to instruct clients to make a new request with
a different URL. They are often used when a resource has moved to
a new location.

`mod_alias` is designed to handle simple URL
manipulation tasks. For more complicated tasks such as
manipulating the query string, use the tools provided by
`mod_rewrite`.

### Topics

- ![](../images/down.gif) [Order of Processing](#order)

### Directives

- ![](../images/down.gif) [Alias](#alias)
- ![](../images/down.gif) [AliasMatch](#aliasmatch)
- ![](../images/down.gif) [Redirect](#redirect)
- ![](../images/down.gif) [RedirectMatch](#redirectmatch)
- ![](../images/down.gif) [RedirectPermanent](#redirectpermanent)
- ![](../images/down.gif) [RedirectTemp](#redirecttemp)
- ![](../images/down.gif) [ScriptAlias](#scriptalias)
- ![](../images/down.gif) [ScriptAliasMatch](#scriptaliasmatch)

### See also

- `mod_rewrite`
- [Mapping URLs to the filesystem](urlmapping.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Order of Processing

Aliases and Redirects occurring in different contexts are processed
like other directives according to standard [merging rules](sections.md#mergin). But when multiple
Aliases or Redirects occur in the same context (for example, in the
same `<VirtualHost>`
section) they are processed in a particular order.

First, all Redirects are processed before Aliases are processed,
and therefore a request that matches a `Redirect` or `RedirectMatch` will never have Aliases
applied. Second, the Aliases and Redirects are processed in the order
they appear in the configuration files, with the first match taking
precedence.

For this reason, when two or more of these directives apply to the
same sub-path, you must list the most specific path first in order for
all the directives to have an effect. For example, the following
configuration will work as expected:

`Alias /foo/bar /baz  
Alias /foo /gaq`

But if the above two directives were reversed in order, the
`/foo` `Alias`
would always match before the `/foo/bar` `Alias`, so the latter directive would be
ignored.

[![top](../images/up.gif)](#page-header)

## Alias Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maps URLs to filesystem locations |
| [Syntax:](mod__directive-dict.md#Syntax) | `Alias URL-path file-path|directory-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_alias |

The `Alias` directive allows documents to
be stored in the local filesystem other than under the
`DocumentRoot`. URLs with a
(%-decoded) path beginning with URL-path will be mapped
to local files beginning with directory-path. The
URL-path is case-sensitive, even on case-insensitive
file systems.

### Example:

`Alias /image /ftp/pub/image`

A request for `http://example.com/image/foo.gif` would cause
the server to return the file `/ftp/pub/image/foo.gif`. Only
complete path segments are matched, so the above alias would not match a
request for `http://example.com/imagefoo.gif`. For more complex
matching using regular expressions, see the `AliasMatch` directive.

Note that if you include a trailing / on the
URL-path then the server will require a trailing / in
order to expand the alias. That is, if you use

`Alias /icons/ /usr/local/apache/icons/`

then the URL `/icons` will not be aliased, as it lacks
that trailing /. Likewise, if you omit the slash on the
URL-path then you must also omit it from the
file-path.

Note that you may need to specify additional `<Directory>` sections which
cover the *destination* of aliases. Aliasing occurs before
`<Directory>` sections
are checked, so only the destination of aliases are affected.
(Note however `<Location>`
sections are run through once before aliases are performed, so
they will apply.)

In particular, if you are creating an `Alias` to a
directory outside of your `DocumentRoot`, you may need to explicitly
permit access to the target directory.

### Example:

`Alias /image /ftp/pub/image  
<Directory /ftp/pub/image>  

Order allow,deny  
Allow from all  
</Directory>`

Any number of slashes in the URL-path parameter
matches any number of slashes in the requested URL-path.

[![top](../images/up.gif)](#page-header)

## AliasMatch Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maps URLs to filesystem locations using regular expressions |
| [Syntax:](mod__directive-dict.md#Syntax) | `AliasMatch regex file-path|directory-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_alias |

This directive is equivalent to `Alias`, but makes use of
[regular expressions](glossary.md#regex "see glossary"),
instead of simple prefix matching. The
supplied regular expression is matched against the URL-path, and
if it matches, the server will substitute any parenthesized
matches into the given string and use it as a filename. For
example, to activate the `/icons` directory, one might
use:

`AliasMatch ^/icons(.*) /usr/local/apache/icons$1`

The full range of [regular expression](glossary.md#regex "see glossary")
power is available. For example,
it is possible to construct an alias with case-insensitive
matching of the URL-path:

`AliasMatch (?i)^/image(.*) /ftp/pub/image$1`

One subtle difference
between `Alias`
and `AliasMatch` is
that `Alias` will
automatically copy any additional part of the URI, past the part
that matched, onto the end of the file path on the right side,
while `AliasMatch` will
not. This means that in almost all cases, you will want the
regular expression to match the entire request URI from beginning
to end, and to use substitution on the right side.

In other words, just changing
`Alias` to
`AliasMatch` will not
have the same effect. At a minimum, you need to
add `^` to the beginning of the regular expression
and add `(.*)$` to the end, and add `$1` to
the end of the replacement.

For example, suppose you want to replace this with AliasMatch:

`Alias /image/ /ftp/pub/image/`

This is NOT equivalent - don't do this! This will send all
requests that have /image/ anywhere in them to /ftp/pub/image/:

`AliasMatch /image/ /ftp/pub/image/`

This is what you need to get the same effect:

`AliasMatch ^/image/(.*)$ /ftp/pub/image/$1`

Of course, there's no point in
using `AliasMatch`
where `Alias` would
work. `AliasMatch` lets
you do more complicated things. For example, you could
serve different kinds of files from different directories:

`AliasMatch ^/image/(.*)\.jpg$ /files/jpg.images/$1.jpg  
AliasMatch ^/image/(.*)\.gif$ /files/gif.images/$1.gif`

Multiple leading slashes in the requested URL are discarded
by the server before directives from this module compares
against the requested URL-path.

[![top](../images/up.gif)](#page-header)

## Redirect Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sends an external redirect asking the client to fetch a different URL |
| [Syntax:](mod__directive-dict.md#Syntax) | `Redirect [status] URL-path URL` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_alias |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Support for specifying a URL-path as the final argument was added in Apache HTTP Server 2.2.6 |

The Redirect directive maps an old URL into a new one by asking
the client to refetch the resource at the new location.

The old *URL-path* is a case-sensitive (%-decoded) path
beginning with a slash. A relative path is not allowed. The new
*URL* should be an absolute URL beginning with a scheme and
hostname. In Apache HTTP Server 2.2.6 and later, a URL-path beginning
with a slash may also be used, in which case the scheme and hostname
of the current server will be added.

Then any request beginning with *URL-path* will return a
redirect request to the client at the location of the target
*URL*. Additional path information beyond the matched
*URL-path* will be appended to the target URL.

### Example:

`Redirect /service http://foo2.example.com/service`

If the client requests `http://example.com/service/foo.txt`,
it will be told to access
`http://foo2.example.com/service/foo.txt`
instead. Only complete path segments are matched, so the above
example would not match a request for
`http://example.com/servicefoo.txt`. For more complex matching
using regular expressions, see the `RedirectMatch` directive.

### Note

Redirect directives take precedence over
Alias and ScriptAlias directives, irrespective of their ordering in
the configuration file.

If no status argument is given, the redirect will
be "temporary" (HTTP status 302). This indicates to the client
that the resource has moved temporarily. The status
argument can be used to return other HTTP status codes:

permanent
:   Returns a permanent redirect status (301) indicating that
    the resource has moved permanently.

temp
:   Returns a temporary redirect status (302). This is the
    default.

seeother
:   Returns a "See Other" status (303) indicating that the
    resource has been replaced.

gone
:   Returns a "Gone" status (410) indicating that the
    resource has been permanently removed. When this status is
    used the URL argument should be omitted.

Other status codes can be returned by giving the numeric
status code as the value of status. If the status is
between 300 and 399, the URL argument must be present,
otherwise it must be omitted. Note that the status must be
known to the Apache code (see the function
`send_error_response` in http\_protocol.c).

### Example:

`Redirect permanent /one http://example.com/two  
Redirect 303 /three http://example.com/other`

[![top](../images/up.gif)](#page-header)

## RedirectMatch Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sends an external redirect based on a regular expression match of the current URL |
| [Syntax:](mod__directive-dict.md#Syntax) | `RedirectMatch [status] regex URL` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_alias |

This directive is equivalent to `Redirect`, but makes use of
[regular expressions](glossary.md#regex "see glossary"),
instead of simple prefix matching. The
supplied regular expression is matched against the URL-path, and
if it matches, the server will substitute any parenthesized
matches into the given string and use it as a filename. For
example, to redirect all GIF files to like-named JPEG files on
another server, one might use:

`RedirectMatch (.*)\.gif$ http://www.anotherserver.com$1.jpg`

[![top](../images/up.gif)](#page-header)

## RedirectPermanent Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sends an external permanent redirect asking the client to fetch a different URL |
| [Syntax:](mod__directive-dict.md#Syntax) | `RedirectPermanent URL-path URL` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_alias |

This directive makes the client know that the Redirect is
permanent (status 301). Exactly equivalent to `Redirect
permanent`.

[![top](../images/up.gif)](#page-header)

## RedirectTemp Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sends an external temporary redirect asking the client to fetch a different URL |
| [Syntax:](mod__directive-dict.md#Syntax) | `RedirectTemp URL-path URL` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_alias |

This directive makes the client know that the Redirect is
only temporary (status 302). Exactly equivalent to
`Redirect temp`.

[![top](../images/up.gif)](#page-header)

## ScriptAlias Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maps a URL to a filesystem location and designates the target as a CGI script |
| [Syntax:](mod__directive-dict.md#Syntax) | `ScriptAlias URL-path file-path|directory-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_alias |

The `ScriptAlias` directive has the same
behavior as the `Alias`
directive, except that in addition it marks the target directory
as containing CGI scripts that will be processed by `mod_cgi`'s cgi-script handler. URLs with a case-sensitive
(%-decoded) path beginning with URL-path will be mapped
to scripts beginning with the second argument, which is a full
pathname in the local filesystem.

### Example:

`ScriptAlias /cgi-bin/ /web/cgi-bin/`

A request for `http://example.com/cgi-bin/foo` would cause the
server to run the script `/web/cgi-bin/foo`. This configuration
is essentially equivalent to:

`Alias /cgi-bin/ /web/cgi-bin/  
<Location /cgi-bin >  

SetHandler cgi-script  
Options +ExecCGI  
</Location>`

It is safer to avoid placing CGI scripts under the
`DocumentRoot` in order to
avoid accidentally revealing their source code if the
configuration is ever changed. The
`ScriptAlias` makes this easy by mapping a
URL and designating CGI scripts at the same time. If you do
choose to place your CGI scripts in a directory already
accessible from the web, do not use
`ScriptAlias`. Instead, use `<Directory>`, `SetHandler`, and `Options` as in:

`<Directory /usr/local/apache2/htdocs/cgi-bin >  

SetHandler cgi-script  
Options ExecCGI  
</Directory>`

This is necessary since multiple URL-paths can map
to the same filesystem location, potentially bypassing the
`ScriptAlias` and revealing the source code
of the CGI scripts if they are not restricted by a
`Directory` section.

### See also

- [CGI Tutorial](howto__cgi.md)

[![top](../images/up.gif)](#page-header)

## ScriptAliasMatch Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maps a URL to a filesystem location using a regular expression and designates the target as a CGI script |
| [Syntax:](mod__directive-dict.md#Syntax) | `ScriptAliasMatch regex file-path|directory-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_alias |

This directive is equivalent to `ScriptAlias`, but makes use of
[regular expressions](glossary.md#regex "see glossary"),
instead of simple prefix matching. The
supplied regular expression is matched against the URL-path,
and if it matches, the server will substitute any parenthesized
matches into the given string and use it as a filename. For
example, to activate the standard `/cgi-bin`, one
might use:

`ScriptAliasMatch ^/cgi-bin(.*) /usr/local/apache/cgi-bin$1`

As for AliasMatch, the full range of [regular
expression](glossary.md#rexex "see glossary") power is available.
For example, it is possible to construct an alias with case-insensitive
matching of the URL-path:

`ScriptAliasMatch (?i)^/cgi-bin(.*) /usr/local/apache/cgi-bin$1`

The considerations related to the difference between
`Alias` and
`AliasMatch`
also apply to the difference between
`ScriptAlias` and
`ScriptAliasMatch`.
See `AliasMatch` for
details.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_alias.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_alias.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_alias.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/mod_alias.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
