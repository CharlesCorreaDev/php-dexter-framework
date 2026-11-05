# Using mod_rewrite to control access - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/rewrite/access.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](rewrite.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Rewrite](rewrite.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/rewrite/access.html) to go to the current version of this document.

# Using mod\_rewrite to control access

This document supplements the `mod_rewrite`
[reference documentation](mod__mod_rewrite.md). It describes
how you can use `mod_rewrite` to control access to
various resources, and other related techniques.
This includes many examples of common uses of mod\_rewrite,
including detailed descriptions of how each works.

Note that many of these examples won't work unchanged in your
particular server configuration, so it's important that you understand
them, rather than merely cutting and pasting the examples into your
configuration.

- ![](../images/down.gif) [Forbidding Image "Hotlinking"](#blocked-inline-images)
- ![](../images/down.gif) [Blocking of Robots](#blocking-of-robots)
- ![](../images/down.gif) [Denying Hosts in a Blacklist](#host-deny)
- ![](../images/down.gif) [Referer-based Deflector](#referer-deflector)

### See also

- [Module documentation](mod__mod_rewrite.md)
- [mod\_rewrite introduction](rewrite__intro.md)
- [Redirection and remapping](rewrite__remapping.md)
- [Virtual hosts](rewrite__vhosts.md)
- [Proxying](rewrite__proxy.md)
- [Using RewriteMap](rewrite__rewritemap.md)
- [Advanced techniques and tricks](rewrite__advanced.md)
- [When not to use mod\_rewrite](rewrite__avoid.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Forbidding Image "Hotlinking"

Description:
:   The following technique forbids the practice of other sites
    including your images inline in their pages. This practice is
    often referred to as "hotlinking", and results in
    your bandwidth being used to serve content for someone else's
    site.

Solution:
:   This technique relies on the value of the
    `HTTP_REFERER` variable, which is optional. As
    such, it's possible for some people to circumvent this
    limitation. However, most users will experience the failed
    request, which should, over time, result in the image being
    removed from that other site.

    There are several ways that you can handle this
    situation.

    In this first example, we simply deny the request, if it didn't
    initiate from a page on our site. For the purpose of this example,
    we assume that our site is `www.example.com`.

    `RewriteCond %{HTTP_REFERER} !^$  
    RewriteCond %{HTTP_REFERER} !www.example.com [NC]  
    RewriteRule \.(gif|jpg|png)$ - [F,NC]`

    In this second example, instead of failing the request, we display
    an alternate image instead.

    `RewriteCond %{HTTP_REFERER} !^$  
    RewriteCond %{HTTP_REFERER} !www.example.com [NC]  
    RewriteRule \.(gif|jpg|png)$ /images/go-away.png [R,NC]`

    In the third example, we redirect the request to an image on some
    other site.

    `RewriteCond %{HTTP_REFERER} !^$  
    RewriteCond %{HTTP_REFERER} !www.example.com [NC]  
    RewriteRule \.(gif|jpg|png)$ http://other.example.com/image.gif [R,NC]`

    Of these techniques, the last two tend to be the most effective
    in getting people to stop hotlinking your images, because they will
    simply not see the image that they expected to see.

Discussion:
:   If all you wish to do is deny access to the resource, rather
    than redirecting that request elsewhere, this can be
    accomplished without the use of mod\_rewrite:

    `SetEnvIf Referer example\.com localreferer  
    <FilesMatch \.(jpg|png|gif)$>  
    Order deny,allow  
    Deny from all  
    Allow from env=localreferer  
    </FilesMatch>`

[![top](../images/up.gif)](#page-header)

## Blocking of Robots

Description:
:   In this recipe, we discuss how to block persistent requests from
    a particular robot, or user agent.

    The standard for robot exclusion defines a file,
    `/robots.txt` that specifies those portions of your
    website where you which to exclude robots. However, some robots
    do not honor these files.

    Note that there are methods of accomplishing this which do
    not use mod\_rewrite. Note also that any technique that relies on
    the clients `USER_AGENT` string can be circumvented
    very easily, since that string can be changed.

Solution:
:   We use a ruleset that specifies the directory to be
    protected, and the client `USER_AGENT` that
    identifies the malicious or persistent robot.

    In this example, we are blocking a robot called
    `NameOfBadRobot` from a location
    `/secret/files`. You may also specify an IP address
    range, if you are trying to block that user agent only from the
    particular source.

    `RewriteCond %{HTTP_USER_AGENT} ^NameOfBadRobot  
    RewriteCond %{REMOTE_ADDR} =123\.45\.67\.[8-9]  
    RewriteRule ^/secret/files/ - [F]`

Discussion:
:   Rather than using mod\_rewrite for this, you can accomplish the
    same end using alternate means, as illustrated here:

    `SetEnvIfNoCase User-Agent ^NameOfBadRobot goaway  
    <Location /secret/files>  
    Order allow,deny  
    Allow from all  
    Deny from env=goaway  
    </Location>`

    As noted above, this technique is trivial to circumvent, by simply
    modifying the `USER_AGENT` request header. If you
    are experiencing a sustained attack, you should consider blocking
    it at a higher level, such as at your firewall.

[![top](../images/up.gif)](#page-header)

## Denying Hosts in a Blacklist

Description:
:   We wish to maintain a blacklist of hosts, rather like
    `hosts.deny`, and have those hosts blocked from
    accessing our server.

Solution:
:   `RewriteEngine on  
    RewriteMap hosts-deny txt:/path/to/hosts.deny  
    RewriteCond ${hosts-deny:%{REMOTE_ADDR}|NOT-FOUND} !=NOT-FOUND [OR]  
    RewriteCond ${hosts-deny:%{REMOTE_HOST}|NOT-FOUND} !=NOT-FOUND  
    RewriteRule ^ - [F]`

    `##  
    ## hosts.deny  
    ##  
    ## ATTENTION! This is a map, not a list, even when we treat it as such.  
    ## mod_rewrite parses it for key/value pairs, so at least a  
    ## dummy value "-" must be present for each entry.  
    ##  
      
    193.102.180.41 -  
    bsdti1.sdm.de -  
    192.76.162.40 -`

Discussion:
:   The second RewriteCond assumes that you have HostNameLookups turned
    on, so that client IP addresses will be resolved. If that's not the
    case, you should drop the second RewriteCond, and drop the
    `[OR]` flag from the first RewriteCond.

[![top](../images/up.gif)](#page-header)

## Referer-based Deflector

Description:
:   Redirect requests based on the Referer from which the request
    came, with different targets per Referer.

Solution:
:   The following ruleset uses a map file to associate each Referer
    with a redirection target.

    `RewriteMap deflector txt:/path/to/deflector.map  
      
    RewriteCond %{HTTP_REFERER} !=""  
    RewriteCond ${deflector:%{HTTP_REFERER}} =-  
    RewriteRule ^ %{HTTP_REFERER} [R,L]  
      
    RewriteCond %{HTTP_REFERER} !=""  
    RewriteCond ${deflector:%{HTTP_REFERER}|NOT-FOUND} !=NOT-FOUND  
    RewriteRule ^.* ${deflector:%{HTTP_REFERER}} [R,L]`

    The map file lists redirection targets for each referer, or, if
    we just wish to redirect back to where they came from, a "-" is
    placed in the map:

    `##  
    ## deflector.map  
    ##  
      
    http://badguys.example.com/bad/index.html -  
    http://badguys.example.com/bad/index2.html -  
    http://badguys.example.com/bad/index3.html http://somewhere.example.com/`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/rewrite/access.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
