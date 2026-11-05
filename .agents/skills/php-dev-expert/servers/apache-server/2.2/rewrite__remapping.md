# Redirecting and Remapping with mod_rewrite - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/rewrite/remapping.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](rewrite.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Rewrite](rewrite.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/rewrite/remapping.html) to go to the current version of this document.

# Redirecting and Remapping with mod\_rewrite

This document supplements the `mod_rewrite`
[reference documentation](mod__mod_rewrite.md). It describes
how you can use `mod_rewrite` to redirect and remap
request. This includes many examples of common uses of mod\_rewrite,
including detailed descriptions of how each works.

Note that many of these examples won't work unchanged in your
particular server configuration, so it's important that you understand
them, rather than merely cutting and pasting the examples into your
configuration.

- ![](../images/down.gif) [From Old to New (internal)](#old-to-new)
- ![](../images/down.gif) [Rewriting From Old to New (external)](#old-to-new-extern)
- ![](../images/down.gif) [Resource Moved to Another Server](#movehomedirs)
- ![](../images/down.gif) [From Static to Dynamic](#static-to-dynamic)
- ![](../images/down.gif) [Backward Compatibility for file extension change](#backward-compatibility)
- ![](../images/down.gif) [Canonical Hostnames](#canonicalhost)
- ![](../images/down.gif) [Search for pages in more than one directory](#multipledirs)
- ![](../images/down.gif) [Redirecting to Geographically Distributed Servers](#archive-access-multiplexer)
- ![](../images/down.gif) [Browser Dependent Content](#browser-dependent-content)
- ![](../images/down.gif) [Canonical URLs](#canonicalurl)
- ![](../images/down.gif) [Moved `DocumentRoot`](#moveddocroot)
- ![](../images/down.gif) [Fallback Resource](#fallback-resource)

### See also

- [Module documentation](mod__mod_rewrite.md)
- [mod\_rewrite introduction](rewrite__intro.md)
- [Controlling access](rewrite__access.md)
- [Virtual hosts](rewrite__vhosts.md)
- [Proxying](rewrite__proxy.md)
- [Using RewriteMap](rewrite__rewritemap.md)
- [Advanced techniques and tricks](rewrite__advanced.md)
- [When not to use mod\_rewrite](rewrite__avoid.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## From Old to New (internal)

Description:
:   Assume we have recently renamed the page
    `foo.html` to `bar.html` and now want
    to provide the old URL for backward compatibility. However,
    we want that users of the old URL even not recognize that
    the pages was renamed - that is, we don't want the address to
    change in their browser.

Solution:
:   We rewrite the old URL to the new one internally via the
    following rule:

    `RewriteEngine on  
    RewriteRule ^/foo\.html$ /bar.html [PT]`

[![top](../images/up.gif)](#page-header)

## Rewriting From Old to New (external)

Description:
:   Assume again that we have recently renamed the page
    `foo.html` to `bar.html` and now want
    to provide the old URL for backward compatibility. But this
    time we want that the users of the old URL get hinted to
    the new one, i.e. their browsers Location field should
    change, too.

Solution:
:   We force a HTTP redirect to the new URL which leads to a
    change of the browsers and thus the users view:

    `RewriteEngine on  
    RewriteRule ^/foo\.html$ bar.html [R]`

Discussion
:   In this example, as contrasted to the [internal](#old-to-new-intern) example above, we can simply
    use the Redirect directive. mod\_rewrite was used in that earlier
    example in order to hide the redirect from the client:

    `Redirect /foo.html /bar.html`

[![top](../images/up.gif)](#page-header)

## Resource Moved to Another Server

Description:
:   If a resource has moved to another server, you may wish to have
    URLs continue to work for a time on the old server while people
    update their bookmarks.

Solution:
:   You can use `mod_rewrite` to redirect these URLs
    to the new server, but you might also consider using the Redirect
    or RedirectMatch directive.

    ### With mod\_rewrite

    `RewriteEngine on  
    RewriteRule ^/docs/(.+) http://new.example.com/docs/$1 [R,L]`

    ### With RedirectMatch

    `RedirectMatch ^/docs/(.*) http://new.example.com/docs/$1`

    ### With Redirect

    `Redirect /docs/ http://new.example.com/docs/`

[![top](../images/up.gif)](#page-header)

## From Static to Dynamic

Description:
:   How can we transform a static page
    `foo.html` into a dynamic variant
    `foo.cgi` in a seamless way, i.e. without notice
    by the browser/user.

Solution:
:   We just rewrite the URL to the CGI-script and force the
    handler to be **cgi-script** so that it is
    executed as a CGI program.
    This way a request to `/~quux/foo.html`
    internally leads to the invocation of
    `/~quux/foo.cgi`.

    `RewriteEngine on  
    RewriteBase /~quux/  
    RewriteRule ^foo\.html$ foo.cgi [H=cgi-script]`

[![top](../images/up.gif)](#page-header)

## Backward Compatibility for file extension change

Description:
:   How can we make URLs backward compatible (still
    existing virtually) after migrating `document.YYYY`
    to `document.XXXX`, e.g. after translating a
    bunch of `.html` files to `.php`?

Solution:
:   We rewrite the name to its basename and test for
    existence of the new extension. If it exists, we take
    that name, else we rewrite the URL to its original state.

    `# backward compatibility ruleset for  
    # rewriting document.html to document.php  
    # when and only when document.php exists  
    <Directory /var/www/htdocs>  

    RewriteEngine on  
    RewriteBase /var/www/htdocs  
      
    RewriteCond $1.php -f  
    RewriteCond $1.html !-f  
    RewriteRule ^(.*).html$ $1.php  
    </Directory>`

Discussion
:   This example uses an often-overlooked feature of mod\_rewrite,
    by taking advantage of the order of execution of the ruleset. In
    particular, mod\_rewrite evaluates the left-hand-side of the
    RewriteRule before it evaluates the RewriteCond directives.
    Consequently, $1 is already defined by the time the RewriteCond
    directives are evaluated. This allows us to test for the existence
    of the original (`document.html`) and target
    (`document.php`) files using the same base filename.

    This ruleset is designed to use in a per-directory context (In a
    <Directory> block or in a .htaccess file), so that the
    `-f` checks are looking at the correct directory path.
    You may need to set a `RewriteBase` directive to specify the
    directory base that you're working in.

[![top](../images/up.gif)](#page-header)

## Canonical Hostnames

Description:
:   The goal of this rule is to force the use of a particular
    hostname, in preference to other hostnames which may be used to
    reach the same site. For example, if you wish to force the use
    of **www.example.com** instead of
    **example.com**, you might use a variant of the
    following recipe.

Solution:
:   The very best way to solve this doesn't involve mod\_rewrite at all,
    but rather uses the `Redirect`
    directive placed in a virtual host for the non-canonical
    hostname(s).

    `<VirtualHost *:80>  

    ServerName undesired.example.com  
    ServerAlias example.com notthis.example.com  
      
    Redirect / http://www.example.com/  
    </VirtualHost>  
      
    <VirtualHost *:80>  

    ServerName www.example.com  
    </VirtualHost>`

    If, for whatever reason, you still want to use `mod_rewrite`
    - if, for example, you need this to work with a larger set of RewriteRules -
    you might use one of the recipes below.

    For sites running on a port other than 80:

    `RewriteCond %{HTTP_HOST} !^www\.example\.com [NC]  
    RewriteCond %{HTTP_HOST} !^$  
    RewriteCond %{SERVER_PORT} !^80$  
    RewriteRule ^/?(.*) http://www.example.com:%{SERVER_PORT}/$1 [L,R,NE]`

    And for a site running on port 80

    `RewriteCond %{HTTP_HOST} !^www\.example\.com [NC]  
    RewriteCond %{HTTP_HOST} !^$  
    RewriteRule ^/?(.*) http://www.example.com/$1 [L,R,NE]`

    If you wanted to do this generically for all domain names - that
    is, if you want to redirect **example.com** to
    **www.example.com** for all possible values of
    **example.com**, you could use the following
    recipe:

    `RewriteCond %{HTTP_HOST} !^www\. [NC]  
    RewriteCond %{HTTP_HOST} !^$  
    RewriteRule ^/?(.*) http://www.%{HTTP_HOST}/$1 [L,R,NE]`

    These rulesets will work either in your main server configuration
    file, or in a `.htaccess` file placed in the `DocumentRoot` of the server.

[![top](../images/up.gif)](#page-header)

## Search for pages in more than one directory

Description:
:   A particular resource might exist in one of several places, and
    we want to look in those places for the resource when it is
    requested. Perhaps we've recently rearranged our directory
    structure, dividing content into several locations.

Solution:
:   The following ruleset searches in two directories to find the
    resource, and, if not finding it in either place, will attempt to
    just serve it out of the location requested.

    `RewriteEngine on  
      
    # first try to find it in dir1/...  
    # ...and if found stop and be happy:  
    RewriteCond %{DOCUMENT_ROOT}/dir1/%{REQUEST_URI} -f  
    RewriteRule ^(.+) %{DOCUMENT_ROOT}/dir1/$1 [L]  
      
    # second try to find it in dir2/...  
    # ...and if found stop and be happy:  
    RewriteCond %{DOCUMENT_ROOT}/dir2/%{REQUEST_URI} -f  
    RewriteRule ^(.+) %{DOCUMENT_ROOT}/dir2/$1 [L]  
      
    # else go on for other Alias or ScriptAlias directives,  
    # etc.  
    RewriteRule ^ - [PT]`

[![top](../images/up.gif)](#page-header)

## Redirecting to Geographically Distributed Servers

Description:
:   We have numerous mirrors of our website, and want to redirect
    people to the one that is located in the country where they are
    located.

Solution:
:   Looking at the hostname of the requesting client, we determine
    which country they are coming from. If we can't do a lookup on their
    IP address, we fall back to a default server.

    We'll use a `RewriteMap`
    directive to build a list of servers that we wish to use.

    `HostnameLookups on  
    RewriteEngine on  
    RewriteMap multiplex txt:/path/to/map.mirrors  
    RewriteCond %{REMOTE_HOST} ([a-z]+)$ [NC]  
    RewriteRule ^/(.*)$ ${multiplex:%1|http://www.example.com/}$1 [R,L]`

    `## map.mirrors -- Multiplexing Map  
      
    de http://www.example.de/  
    uk http://www.example.uk/  
    com http://www.example.com/  
    ##EOF##`

Discussion
:   This ruleset relies on
    `HostNameLookups`
    being set `on`, which can be
    a significant performance hit.

    The `RewriteCond`
    directive captures the last portion of the hostname of the
    requesting client - the country code - and the following RewriteRule
    uses that value to look up the appropriate mirror host in the map
    file.

[![top](../images/up.gif)](#page-header)

## Browser Dependent Content

Description:
:   We wish to provide different content based on the browser, or
    user-agent, which is requesting the content.

Solution:
:   We have to decide, based on the HTTP header "User-Agent",
    which content to serve. The following config
    does the following: If the HTTP header "User-Agent"
    contains "Mozilla/3", the page `foo.html`
    is rewritten to `foo.NS.html` and the
    rewriting stops. If the browser is "Lynx" or "Mozilla" of
    version 1 or 2, the URL becomes `foo.20.html`.
    All other browsers receive page `foo.32.html`.
    This is done with the following ruleset:

    `RewriteCond %{HTTP_USER_AGENT} ^Mozilla/3.*  
    RewriteRule ^foo\.html$ foo.NS.html [L]  
      
    RewriteCond %{HTTP_USER_AGENT} ^Lynx/ [OR]  
    RewriteCond %{HTTP_USER_AGENT} ^Mozilla/[12]  
    RewriteRule ^foo\.html$ foo.20.html [L]  
      
    RewriteRule ^foo\.html$ foo.32.html [L]`

[![top](../images/up.gif)](#page-header)

## Canonical URLs

Description:
:   On some webservers there is more than one URL for a
    resource. Usually there are canonical URLs (which are be
    actually used and distributed) and those which are just
    shortcuts, internal ones, and so on. Independent of which URL the
    user supplied with the request, they should finally see the
    canonical one in their browser address bar.

Solution:
:   We do an external HTTP redirect for all non-canonical
    URLs to fix them in the location view of the Browser and
    for all subsequent requests. In the example ruleset below
    we replace `/puppies` and `/canines`
    by the canonical `/dogs`.

    `RewriteRule ^/(puppies|canines)/(.*) /dogs/$2 [R]`

Discussion:
:   This should really be accomplished with Redirect or RedirectMatch
    directives:

    `RedirectMatch ^/(puppies|canines)/(.*) /dogs/$2`

[![top](../images/up.gif)](#page-header)

## Moved `DocumentRoot`

Description:
:   Usually the `DocumentRoot`
    of the webserver directly relates to the URL "`/`".
    But often this data is not really of top-level priority. For example,
    you may wish for visitors, on first entering a site, to go to a
    particular subdirectory `/about/`. This may be accomplished
    using the following ruleset:

Solution:
:   We redirect the URL `/` to
    `/about/`:

    `RewriteEngine on  
    RewriteRule ^/$ /about/ [R]`

    Note that this can also be handled using the `RedirectMatch` directive:

    `RedirectMatch ^/$ http://example.com/about/`

    Note also that the example rewrites only the root URL. That is, it
    rewrites a request for `http://example.com/`, but not a
    request for `http://example.com/page.html`. If you have in
    fact changed your document root - that is, if **all** of
    your content is in fact in that subdirectory, it is greatly preferable
    to simply change your `DocumentRoot`
    directive, or move all of the content up one directory,
    rather than rewriting URLs.

[![top](../images/up.gif)](#page-header)

## Fallback Resource

Description:
:   You want a single resource (say, a certain file, like index.php) to
    handle all requests that come to a particular directory, except those
    that should go to an existing resource such as an image, or a css file.

Solution:
:   As of version 2.2.16, you should use the `FallbackResource` directive for this:

    `<Directory /var/www/my_blog>  

    FallbackResource index.php  
    </Directory>`

    However, in earlier versions of Apache, or if your needs are more
    complicated than this, you can use a variation of the following rewrite
    set to accomplish the same thing:

    `<Directory /var/www/my_blog>  

    RewriteBase /my_blog  
      
    RewriteCond /var/www/my_blog/%{REQUEST_FILENAME} !-f  
    RewriteCond /var/www/my_blog/%{REQUEST_FILENAME} !-d  
    RewriteRule ^ index.php [PT]  
    </Directory>`

    If, on the other hand, you wish to pass the requested URI as a query
    string argument to index.php, you can replace that RewriteRule with:

    `RewriteRule (.*) index.php?$1 [PT,QSA]`

    Note that these rulesets can be uses in a `.htaccess`
    file, as well as in a <Directory> block.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/rewrite/remapping.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
