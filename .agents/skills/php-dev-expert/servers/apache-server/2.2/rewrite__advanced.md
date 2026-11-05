# Advanced Techniques with mod_rewrite - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/rewrite/advanced.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](rewrite.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Rewrite](rewrite.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/rewrite/advanced.html) to go to the current version of this document.

# Advanced Techniques with mod\_rewrite

This document supplements the `mod_rewrite`
[reference documentation](mod__mod_rewrite.md). It provides
a few advanced techniques and tricks using mod\_rewrite.

Note that many of these examples won't work unchanged in your
particular server configuration, so it's important that you understand
them, rather than merely cutting and pasting the examples into your
configuration.

- ![](../images/down.gif) [URL-based sharding accross multiple backends](#sharding)
- ![](../images/down.gif) [On-the-fly Content-Regeneration](#on-the-fly-content)
- ![](../images/down.gif) [Load Balancing](#load-balancing)
- ![](../images/down.gif) [Document With Autorefresh](#autorefresh)
- ![](../images/down.gif) [Structured Userdirs](#structuredhomedirs)
- ![](../images/down.gif) [Redirecting Anchors](#redirectanchors)
- ![](../images/down.gif) [Time-Dependent Rewriting](#time-dependent)
- ![](../images/down.gif) [Set Environment Variables Based On URL Parts](#setenvvars)

### See also

- [Module documentation](mod__mod_rewrite.md)
- [mod\_rewrite introduction](rewrite__intro.md)
- [Redirection and remapping](rewrite__remapping.md)
- [Controlling access](rewrite__access.md)
- [Virtual hosts](rewrite__vhosts.md)
- [Proxying](rewrite__proxy.md)
- [Using RewriteMap](rewrite__rewritemap.md)
- [When not to use mod\_rewrite](rewrite__avoid.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## URL-based sharding accross multiple backends

Description:
:   A common technique for distributing the burden of
    server load or storage space is called "sharding".
    When using this method, a front-end server will use the
    url to consistently "shard" users or objects to separate
    backend servers.

Solution:
:   A mapping is maintained, from users to target servers, in
    external map files. They look like:

    `user1 physical_host_of_user1  
    user2 physical_host_of_user2  
    : :`

    We put this into a `map.users-to-hosts` file. The
    aim is to map;

    `/u/user1/anypath`

    to

    `http://physical_host_of_user1/u/user/anypath`

    thus every URL path need not be valid on every backend physical
    host. The following ruleset does this for us with the help of the map
    files assuming that server0 is a default server which will be used if
    a user has no entry in the map:

    `RewriteEngine on  
      
    RewriteMap users-to-hosts txt:/path/to/map.users-to-hosts  
      
    RewriteRule ^/u/([^/]+)/?(.*) http://${users-to-hosts:$1|server0}/u/$1/$2`

See the `RewriteMap`
documentation for more discussion of the syntax of this directive.

[![top](../images/up.gif)](#page-header)

## On-the-fly Content-Regeneration

Description:
:   We wish to dynamically generate content, but store it
    statically once it is generated. This rule will check for the
    existence of the static file, and if it's not there, generate
    it. The static files can be removed periodically, if desired (say,
    via cron) and will be regenerated on demand.

Solution:
:   This is done via the following ruleset:

    ```
    # This example is valid in per-directory context only
    RewriteCond %{REQUEST_URI}   !-U
    RewriteRule ^(.+)\.html$          /regenerate_page.cgi   [PT,L]
    ```

    The `-U` operator determines whether the test string
    (in this case, `REQUEST_URI`) is a valid URL. It does
    this via a subrequest. In the event that this subrequest fails -
    that is, the requested resource doesn't exist - this rule invokes
    the CGI program `/regenerate_page.cgi`, which generates
    the requested resource and saves it into the document directory, so
    that the next time it is requested, a static copy can be served.

    In this way, documents that are infrequently updated can be served in
    static form. if documents need to be refreshed, they can be deleted
    from the document directory, and they will then be regenerated the
    next time they are requested.

[![top](../images/up.gif)](#page-header)

## Load Balancing

Description:
:   We wish to randomly distribute load across several servers
    using mod\_rewrite.

Solution:
:   We'll use `RewriteMap` and a list of servers
    to accomplish this.

    `RewriteEngine on  
    RewriteMap lb rnd:/path/to/serverlist.txt  
      
    RewriteRule ^/(.*) http://${lb:servers}/$1 [P,L]`

    `serverlist.txt` will contain a list of the servers:

    `## serverlist.txt  
      
    servers one.example.com|two.example.com|three.example.com`

    If you want one particular server to get more of the load than the
    others, add it more times to the list.

Discussion
:   Apache comes with a load-balancing module -
    `mod_proxy_balancer` - which is far more flexible and
    featureful than anything you can cobble together using mod\_rewrite.

[![top](../images/up.gif)](#page-header)

## Document With Autorefresh

Description:
:   Wouldn't it be nice, while creating a complex web page, if
    the web browser would automatically refresh the page every
    time we save a new version from within our editor?
    Impossible?

Solution:
:   No! We just combine the MIME multipart feature, the
    web server NPH feature, and the URL manipulation power of
    `mod_rewrite`. First, we establish a new
    URL feature: Adding just `:refresh` to any
    URL causes the 'page' to be refreshed every time it is
    updated on the filesystem.

    `RewriteRule ^(/[uge]/[^/]+/?.*):refresh /internal/cgi/apache/nph-refresh?f=$1`

    Now when we reference the URL

    `/u/foo/bar/page.html:refresh`

    this leads to the internal invocation of the URL

    `/internal/cgi/apache/nph-refresh?f=/u/foo/bar/page.html`

    The only missing part is the NPH-CGI script. Although
    one would usually say "left as an exercise to the reader"
    ;-) I will provide this, too.

    ```
    #!/sw/bin/perl
    ##
    ##  nph-refresh -- NPH/CGI script for auto refreshing pages
    ##  Copyright (c) 1997 Ralf S. Engelschall, All Rights Reserved.
    ##
    $| = 1;

    #   split the QUERY_STRING variable
    @pairs = split( /&/, $ENV{'QUERY_STRING'} );
    foreach $pair (@pairs) {
        ( $name, $value ) = split( /=/, $pair );
        $name =~ tr/A-Z/a-z/;
        $name = 'QS_' . $name;
        $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
        eval "\$$name = \"$value\"";
    }
    $QS_s = 1    if ( $QS_s eq '' );
    $QS_n = 3600 if ( $QS_n eq '' );
    if ( $QS_f eq '' ) {
        print "HTTP/1.0 200 OK\n";
        print "Content-type: text/html\n\n";
    print "&lt;b&gt;ERROR&lt;/b&gt;: No file given\n";
        exit(0);
    }
    if ( !-f $QS_f ) {
        print "HTTP/1.0 200 OK\n";
        print "Content-type: text/html\n\n";
    print "&lt;b&gt;ERROR&lt;/b&gt;: File $QS_f not found\n";
        exit(0);
    }

    sub print_http_headers_multipart_begin {
        print "HTTP/1.0 200 OK\n";
        $bound = "ThisRandomString12345";
        print "Content-type: multipart/x-mixed-replace;boundary=$bound\n";
        &print_http_headers_multipart_next;
    }

    sub print_http_headers_multipart_next {
        print "\n--$bound\n";
    }

    sub print_http_headers_multipart_end {
        print "\n--$bound--\n";
    }

    sub displayhtml {
        local ($buffer) = @_;
        $len = length($buffer);
        print "Content-type: text/html\n";
        print "Content-length: $len\n\n";
        print $buffer;
    }

    sub readfile {
        local ($file) = @_;
        local ( *FP, $size, $buffer, $bytes );
        ( $x, $x, $x, $x, $x, $x, $x, $size ) = stat($file);
        $size = sprintf( "%d", $size );
    open(FP, "&lt;$file");
        $bytes = sysread( FP, $buffer, $size );
        close(FP);
        return $buffer;
    }

    $buffer = &readfile($QS_f);
    &print_http_headers_multipart_begin;
    &displayhtml($buffer);

    sub mystat {
        local ($file) = $_[0];
        local ($time);

        ( $x, $x, $x, $x, $x, $x, $x, $x, $x, $mtime ) = stat($file);
        return $mtime;
    }

    $mtimeL = &mystat($QS_f);
    $mtime  = $mtime;
    for ( $n = 0 ; $n & lt ; $QS_n ; $n++ ) {
        while (1) {
            $mtime = &mystat($QS_f);
            if ( $mtime ne $mtimeL ) {
                $mtimeL = $mtime;
                sleep(2);
                $buffer = &readfile($QS_f);
                &print_http_headers_multipart_next;
                &displayhtml($buffer);
                sleep(5);
                $mtimeL = &mystat($QS_f);
                last;
            }
            sleep($QS_s);
        }
    }

    &print_http_headers_multipart_end;

    exit(0);

    ##EOF##
    ```

[![top](../images/up.gif)](#page-header)

## Structured Userdirs

Description:
:   Some sites with thousands of users use a
    structured homedir layout, *i.e.* each homedir is in a
    subdirectory which begins (for instance) with the first
    character of the username. So, `/~larry/anypath`
    is `/home/l/larry/public_html/anypath`
    while `/~waldo/anypath` is
    `/home/w/waldo/public_html/anypath`.

Solution:
:   We use the following ruleset to expand the tilde URLs
    into the above layout.

    `RewriteEngine on  
    RewriteRule ^/~(([a-z])[a-z0-9]+)(.*) /home/$2/$1/public_html$3`

[![top](../images/up.gif)](#page-header)

## Redirecting Anchors

Description:
:   By default, redirecting to an HTML anchor doesn't work,
    because mod\_rewrite escapes the `#` character,
    turning it into `%23`. This, in turn, breaks the
    redirection.

Solution:
:   Use the `[NE]` flag on the
    `RewriteRule`. NE stands for No Escape.

Discussion:
:   This technique will of course also work with other
    special characters that mod\_rewrite, by default, URL-encodes.

[![top](../images/up.gif)](#page-header)

## Time-Dependent Rewriting

Description:
:   We wish to use mod\_rewrite to serve different content based on
    the time of day.

Solution:
:   There are a lot of variables named `TIME_xxx`
    for rewrite conditions. In conjunction with the special
    lexicographic comparison patterns `<STRING`,
    `>STRING` and `=STRING` we can
    do time-dependent redirects:

    `RewriteEngine on  
    RewriteCond %{TIME_HOUR}%{TIME_MIN} >0700  
    RewriteCond %{TIME_HOUR}%{TIME_MIN} <1900  
    RewriteRule ^foo\.html$ foo.day.html [L]  
    RewriteRule ^foo\.html$ foo.night.html`

    This provides the content of `foo.day.html`
    under the URL `foo.html` from
    `07:01-18:59` and at the remaining time the
    contents of `foo.night.html`.

    `mod_cache`, intermediate proxies
    and browsers may each cache responses and cause the either page to be
    shown outside of the time-window configured.
    `mod_expires` may be used to control this
    effect. You are, of course, much better off simply serving the
    content dynamically, and customizing it based on the time of day.

[![top](../images/up.gif)](#page-header)

## Set Environment Variables Based On URL Parts

Description:
:   At time, we want to maintain some kind of status when we
    perform a rewrite. For example, you want to make a note that
    you've done that rewrite, so that you can check later to see if a
    request can via that rewrite. One way to do this is by setting an
    environment variable.

Solution:
:   Use the [E] flag to set an environment variable.

    `RewriteEngine on  
    RewriteRule ^/horse/(.*) /pony/$1 [E=rewritten:1]`

    Later in your ruleset you might check for this environment
    variable using a RewriteCond:

    `RewriteCond %{ENV:rewritten} =1`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/rewrite/advanced.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
