# Mapping URLs to Filesystem Locations - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/urlmapping.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/urlmapping.html) to go to the current version of this document.

# Mapping URLs to Filesystem Locations

This document explains how Apache uses the URL of a request
to determine the filesystem location from which to serve a
file.

- ![](./images/down.gif) [Related Modules and Directives](#related)
- ![](./images/down.gif) [DocumentRoot](#documentroot)
- ![](./images/down.gif) [Files Outside the DocumentRoot](#outside)
- ![](./images/down.gif) [User Directories](#user)
- ![](./images/down.gif) [URL Redirection](#redirect)
- ![](./images/down.gif) [Reverse Proxy](#proxy)
- ![](./images/down.gif) [Rewriting Engine](#rewrite)
- ![](./images/down.gif) [File Not Found](#notfound)

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## Related Modules and Directives

| Related Modules | Related Directives |
| --- | --- |
| - `mod_alias` - `mod_proxy` - `mod_rewrite` - `mod_userdir` - `mod_speling` - `mod_vhost_alias` | - `Alias` - `AliasMatch` - `CheckSpelling` - `DocumentRoot` - `ErrorDocument` - `Options` - `ProxyPass` - `ProxyPassReverse` - `ProxyPassReverseCookieDomain` - `ProxyPassReverseCookiePath` - `Redirect` - `RedirectMatch` - `RewriteCond` - `RewriteRule` - `ScriptAlias` - `ScriptAliasMatch` - `UserDir` |

[![top](./images/up.gif)](#page-header)

## DocumentRoot

In deciding what file to serve for a given request, Apache's
default behavior is to take the URL-Path for the request (the part
of the URL following the hostname and port) and add it to the end
of the `DocumentRoot` specified
in your configuration files. Therefore, the files and directories
underneath the `DocumentRoot`
make up the basic document tree which will be visible from the
web.

For example, if `DocumentRoot`
were set to `/var/www/html` then a request for
`http://www.example.com/fish/guppies.html` would result
in the file `/var/www/html/fish/guppies.html` being
served to the requesting client.

Apache is also capable of [Virtual
Hosting](vhosts.md), where the server receives requests for more than one
host. In this case, a different `DocumentRoot` can be specified for each
virtual host, or alternatively, the directives provided by the
module `mod_vhost_alias` can
be used to dynamically determine the appropriate place from which
to serve content based on the requested IP address or
hostname.

The `DocumentRoot` directive
is set in your main server configuration file
(`httpd.conf`) and, possibly, once per additional [Virtual Host](vhosts.md) you create.

[![top](./images/up.gif)](#page-header)

## Files Outside the DocumentRoot

There are frequently circumstances where it is necessary to
allow web access to parts of the filesystem that are not strictly
underneath the `DocumentRoot`. Apache offers several
different ways to accomplish this. On Unix systems, symbolic links
can bring other parts of the filesystem under the `DocumentRoot`. For security reasons,
Apache will follow symbolic links only if the `Options` setting for the relevant
directory includes `FollowSymLinks` or
`SymLinksIfOwnerMatch`.

Alternatively, the `Alias` directive will map any part
of the filesystem into the web space. For example, with

`Alias /docs /var/web`

the URL `http://www.example.com/docs/dir/file.html`
will be served from `/var/web/dir/file.html`. The
`ScriptAlias` directive
works the same way, with the additional effect that all content
located at the target path is treated as [CGI](glossary.md#cgi "see glossary") scripts.

For situations where you require additional flexibility, you
can use the `AliasMatch`
and `ScriptAliasMatch`
directives to do powerful [regular
expression](glossary.md#regex "see glossary") based matching and substitution. For
example,

`ScriptAliasMatch ^/~([a-zA-Z0-9]+)/cgi-bin/(.+)
/home/$1/cgi-bin/$2`

will map a request to
`http://example.com/~user/cgi-bin/script.cgi` to the
path `/home/user/cgi-bin/script.cgi` and will treat
the resulting file as a CGI script.

[![top](./images/up.gif)](#page-header)

## User Directories

Traditionally on Unix systems, the home directory of a
particular *user* can be referred to as
`~user/`. The module `mod_userdir`
extends this idea to the web by allowing files under each user's
home directory to be accessed using URLs such as the
following.

`http://www.example.com/~user/file.html`

For security reasons, it is inappropriate to give direct
access to a user's home directory from the web. Therefore, the
`UserDir` directive
specifies a directory underneath the user's home directory
where web files are located. Using the default setting of
`Userdir public_html`, the above URL maps to a file
at a directory like
`/home/user/public_html/file.html` where
`/home/user/` is the user's home directory as
specified in `/etc/passwd`.

There are also several other forms of the
`Userdir` directive which you can use on systems
where `/etc/passwd` does not contain the location of
the home directory.

Some people find the "~" symbol (which is often encoded on the
web as `%7e`) to be awkward and prefer to use an
alternate string to represent user directories. This functionality
is not supported by mod\_userdir. However, if users' home
directories are structured in a regular way, then it is possible
to use the `AliasMatch`
directive to achieve the desired effect. For example, to make
`http://www.example.com/upages/user/file.html` map to
`/home/user/public_html/file.html`, use the following
`AliasMatch` directive:

`AliasMatch ^/upages/([a-zA-Z0-9]+)/?(.*)
/home/$1/public_html/$2`

[![top](./images/up.gif)](#page-header)

## URL Redirection

The configuration directives discussed in the above sections
tell Apache to get content from a specific place in the filesystem
and return it to the client. Sometimes, it is desirable instead to
inform the client that the requested content is located at a
different URL, and instruct the client to make a new request with
the new URL. This is called *redirection* and is
implemented by the `Redirect` directive. For example, if
the contents of the directory `/foo/` under the
`DocumentRoot` are moved
to the new directory `/bar/`, you can instruct clients
to request the content at the new location as follows:

`Redirect permanent /foo/
http://www.example.com/bar/`

This will redirect any URL-Path starting in
`/foo/` to the same URL path on the
`www.example.com` server with `/bar/`
substituted for `/foo/`. You can redirect clients to
any server, not only the origin server.

Apache also provides a `RedirectMatch` directive for more
complicated rewriting problems. For example, to redirect requests
for the site home page to a different site, but leave all other
requests alone, use the following configuration:

`RedirectMatch permanent ^/$
http://www.example.com/startpage.html`

Alternatively, to temporarily redirect all pages on one site
to a particular page on another site, use the following:

`RedirectMatch temp .*
http://othersite.example.com/startpage.html`

[![top](./images/up.gif)](#page-header)

## Reverse Proxy

Apache also allows you to bring remote documents into the URL space
of the local server. This technique is called *reverse
proxying* because the web server acts like a proxy server by
fetching the documents from a remote server and returning them to the
client. It is different from normal proxying because, to the client,
it appears the documents originate at the reverse proxy server.

In the following example, when clients request documents under the
`/foo/` directory, the server fetches those documents from
the `/bar/` directory on `internal.example.com`
and returns them to the client as if they were from the local
server.

`ProxyPass /foo/ http://internal.example.com/bar/  
ProxyPassReverse /foo/ http://internal.example.com/bar/  
ProxyPassReverseCookieDomain internal.example.com public.example.com  
ProxyPassReverseCookiePath /foo/ /bar/`

The `ProxyPass` configures
the server to fetch the appropriate documents, while the
`ProxyPassReverse`
directive rewrites redirects originating at
`internal.example.com` so that they target the appropriate
directory on the local server. Similarly, the
`ProxyPassReverseCookieDomain`
and `ProxyPassReverseCookiePath`
rewrite cookies set by the backend server.

It is important to note, however, that
links inside the documents will not be rewritten. So any absolute
links on `internal.example.com` will result in the client
breaking out of the proxy server and requesting directly from
`internal.example.com`. A third-party module
[mod\_proxy\_html](http://apache.webthing.com/mod_proxy_html/)
is available to rewrite links in HTML and XHTML.

[![top](./images/up.gif)](#page-header)

## Rewriting Engine

When even more powerful substitution is required, the rewriting
engine provided by `mod_rewrite`
can be useful. The directives provided by this module use
characteristics of the request such as browser type or source IP
address in deciding from where to serve content. In addition,
mod\_rewrite can use external database files or programs to
determine how to handle a request. The rewriting engine is capable
of performing all three types of mappings discussed above:
internal redirects (aliases), external redirects, and proxying.
Many practical examples employing mod\_rewrite are discussed in the
[detailed mod\_rewrite documentation](rewrite.md).

[![top](./images/up.gif)](#page-header)

## File Not Found

Inevitably, URLs will be requested for which no matching
file can be found in the filesystem. This can happen for
several reasons. In some cases, it can be a result of moving
documents from one location to another. In this case, it is
best to use [URL redirection](#redirect) to inform
clients of the new location of the resource. In this way, you
can assure that old bookmarks and links will continue to work,
even though the resource is at a new location.

Another common cause of "File Not Found" errors is
accidental mistyping of URLs, either directly in the browser,
or in HTML links. Apache provides the module
`mod_speling` (sic) to help with
this problem. When this module is activated, it will intercept
"File Not Found" errors and look for a resource with a similar
filename. If one such file is found, mod\_speling will send an
HTTP redirect to the client informing it of the correct
location. If several "close" files are found, a list of
available alternatives will be presented to the client.

An especially useful feature of mod\_speling, is that it will
compare filenames without respect to case. This can help
systems where users are unaware of the case-sensitive nature of
URLs and the unix filesystem. But using mod\_speling for
anything more than the occasional URL correction can place
additional load on the server, since each "incorrect" request
is followed by a URL redirection and a new request from the
client.

If all attempts to locate the content fail, Apache returns
an error page with HTTP status code 404 (file not found). The
appearance of this page is controlled with the
`ErrorDocument` directive
and can be customized in a flexible manner as discussed in the
[Custom error responses](custom-error.md)
document.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/urlmapping.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/urlmapping.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/urlmapping.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/urlmapping.html "Türkçe")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
