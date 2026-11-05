# Dynamic mass virtual hosts with mod_rewrite - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/rewrite/vhosts.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](rewrite.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Rewrite](rewrite.md)

# Dynamic mass virtual hosts with mod\_rewrite

This document supplements the `mod_rewrite`
[reference documentation](mod__mod_rewrite.md). It describes
how you can use `mod_rewrite` to create dynamically
configured virtual hosts.

`mod_rewrite` is usually not the best way to configure
virtual hosts. You should first consider the [alternatives](vhosts__mass.md) before resorting to
mod\_rewrite. See also the "[how to avoid
mod\_rewrite](rewrite__avoid.md#vhosts) document.

- ![](../images/down.gif) [Virtual Hosts For Arbitrary Hostnames](#per-hostname)
- ![](../images/down.gif) [Dynamic
  Virtual Hosts Using `mod_rewrite`](#simple.rewrite)
- ![](../images/down.gif) [Using a Separate Virtual Host Configuration File](#xtra-conf)

### See also

- [Module documentation](mod__mod_rewrite.md)
- [mod\_rewrite introduction](rewrite__intro.md)
- [Redirection and remapping](rewrite__remapping.md)
- [Per-directory Rewrites](rewrite__htaccess.md)
- [RewriteRule Flags](rewrite__flags.md)
- [RewriteMap](rewrite__rewritemap.md)
- [When not to use mod\_rewrite](rewrite__avoid.md)
- [Technical details](rewrite__tech.md)

[![top](../images/up.gif)](#page-header)

## Virtual Hosts For Arbitrary Hostnames [¶](#per-hostname "Permanent link")

Description:
:   We want to automatically create a virtual host for every hostname
    which resolves in our domain, without having to create
    new VirtualHost sections.

    In this recipe, we assume that we'll be using the hostname
    `SITE.example.com` for each
    user, and serve their content out of
    `/home/SITE/www`. However, we want
    `www.example.com` to be omitted from this mapping.

Solution:
:   ```
    RewriteEngine on

    RewriteMap    lowercase int:tolower

    RewriteCond   %{HTTP_HOST} !^www\.
    RewriteCond   ${lowercase:%{HTTP_HOST}}   ^([^.]+)\.example\.com$
    RewriteRule   ^(.*)    /home/%1/www$1
    ```

Discussion
:   You will need to take care of the DNS
    resolution - Apache does
    not handle name resolution. You'll need either to create CNAME
    records for each hostname, or a DNS wildcard record. Creating DNS
    records is beyond the scope of this document.

    The internal `tolower` RewriteMap directive is used to
    ensure that the hostnames being used are all lowercase, so that there is
    no ambiguity in the directory structure which must be created.

    Parentheses used in a `RewriteCond` are captured into the
    backreferences `%1`, `%2`, etc, while parentheses
    used in `RewriteRule` are
    captured into the backreferences `$1`, `$2`,
    etc.

    The first `RewriteCond` checks to see if the hostname
    starts with `www.`, and if it does, the rewriting is
    skipped.

    As with many techniques discussed in this document, `mod_rewrite` really
    isn't the best way to accomplish this task. You should, instead,
    consider using `mod_vhost_alias` instead, as it will much
    more gracefully handle anything beyond serving static files, such as any
    dynamic content, and Alias resolution.

[![top](../images/up.gif)](#page-header)

## Dynamic Virtual Hosts Using `mod_rewrite` [¶](#simple.rewrite "Permanent link")

This extract from `httpd.conf` does the same
thing as [the first example](#per-hostname). The first
half is very similar to the corresponding part above, except for
some changes, required for backward compatibility and to make the
`mod_rewrite` part work properly; the second half
configures `mod_rewrite` to do the actual work.

Because `mod_rewrite` runs before other URI translation
modules (e.g., `mod_alias`), `mod_rewrite` must
be told to explicitly ignore any URLs that would have been handled
by those modules. And, because these rules would otherwise bypass
any `ScriptAlias` directives, we must have
`mod_rewrite` explicitly enact those mappings.

```
# get the server name from the Host: header
UseCanonicalName Off

# splittable logs
LogFormat "%{Host}i %h %l %u %t \"%r\" %s %b" vcommon
CustomLog "logs/access_log" vcommon

<Directory "/www/hosts">
    # ExecCGI is needed here because we can't force
    # CGI execution in the way that ScriptAlias does
    Options FollowSymLinks ExecCGI
</Directory>

RewriteEngine On

# a ServerName derived from a Host: header may be any case at all
RewriteMap  lowercase  "int:tolower"

## deal with normal documents first:
# allow Alias /icons/ to work - repeat for other aliases
RewriteCond  "%{REQUEST_URI}"  "!^/icons/"
# allow CGIs to work
RewriteCond  "%{REQUEST_URI}"  "!^/cgi-bin/"
# do the magic
RewriteRule  "^/(.*)$"         "/www/hosts/${lowercase:%{SERVER_NAME}}/docs/$1"

## and now deal with CGIs - we have to force a handler
RewriteCond  "%{REQUEST_URI}"  "^/cgi-bin/"
RewriteRule  "^/(.*)$"         "/www/hosts/${lowercase:%{SERVER_NAME}}/cgi-bin/$1"  [H=cgi-script]
```

[![top](../images/up.gif)](#page-header)

## Using a Separate Virtual Host Configuration File [¶](#xtra-conf "Permanent link")

This arrangement uses more advanced `mod_rewrite`
features to work out the translation from virtual host to document
root, from a separate configuration file. This provides more
flexibility, but requires more complicated configuration.

The `vhost.map` file should look something like
this:

`customer-1.example.com /www/customers/1  
customer-2.example.com /www/customers/2  
# ...  
customer-N.example.com /www/customers/N`

The `httpd.conf` should contain the following:

```
RewriteEngine on

RewriteMap   lowercase  "int:tolower"

# define the map file
RewriteMap   vhost      "txt:/www/conf/vhost.map"

# deal with aliases as above
RewriteCond  "%{REQUEST_URI}"               "!^/icons/"
RewriteCond  "%{REQUEST_URI}"               "!^/cgi-bin/"
RewriteCond  "${lowercase:%{SERVER_NAME}}"  "^(.+)$"
# this does the file-based remap
RewriteCond  "${vhost:%1}"                  "^(/.*)$"
RewriteRule  "^/(.*)$"                      "%1/docs/$1"

RewriteCond  "%{REQUEST_URI}"               "^/cgi-bin/"
RewriteCond  "${lowercase:%{SERVER_NAME}}"  "^(.+)$"
RewriteCond  "${vhost:%1}"                  "^(/.*)$"
RewriteRule  "^/cgi-bin/(.*)$"                      "%1/cgi-bin/$1" [H=cgi-script]
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/rewrite/vhosts.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/rewrite/vhosts.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
