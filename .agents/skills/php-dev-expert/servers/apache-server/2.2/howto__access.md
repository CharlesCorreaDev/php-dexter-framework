# Access Control - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/howto/access.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](howto.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [How-To / Tutorials](howto.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/howto/access.html) to go to the current version of this document.

# Access Control

Access control refers to any means of controlling access to any
resource. This is separate from [authentication and authorization](howto__auth.md).

- ![](../images/down.gif) [Related Modules and Directives](#related)
- ![](../images/down.gif) [Access control by host](#host)
- ![](../images/down.gif) [Access control by environment variable](#env)
- ![](../images/down.gif) [Access control with mod\_rewrite](#rewrite)
- ![](../images/down.gif) [More information](#moreinformation)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Related Modules and Directives

Access control can be done by several different modules. The most
important of these is `mod_authz_host`. Other modules
discussed in this document include `mod_setenvif` and
`mod_rewrite`.

[![top](../images/up.gif)](#page-header)

## Access control by host

If you wish to restrict access to portions of your site based on the
host address of your visitors, this is most easily done using
`mod_authz_host`.

The `Allow` and
`Deny` directives let
you allow and deny access based on the host name, or host
address, of the machine requesting a document. The
`Order` directive goes
hand-in-hand with these two, and tells Apache in which order to
apply the filters.

The usage of these directives is:

`Allow from address`

where address is an IP address (or a partial IP
address) or a fully qualified domain name (or a partial domain
name); you may provide multiple addresses or domain names, if
desired.

For example, if you have someone spamming your message
board, and you want to keep them out, you could do the
following:

`Deny from 10.252.46.165`

Visitors coming from that address will not be able to see
the content covered by this directive. If, instead, you have a
machine name, rather than an IP address, you can use that.

`Deny from host.example.com`

And, if you'd like to block access from an entire domain,
you can specify just part of an address or domain name:

`Deny from 192.168.205  
Deny from phishers.example.com moreidiots.example  
Deny from ke`

Using `Order` will let you
be sure that you are actually restricting things to the group that you want
to let in, by combining a `Deny` and an `Allow` directive:

`Order deny,allow  
Deny from all  
Allow from dev.example.com`

Listing just the `Allow`
directive would not do what you want, because it will let folks from that
host in, in addition to letting everyone in. What you want is to let
*only* those folks in.

[![top](../images/up.gif)](#page-header)

## Access control by environment variable

`mod_authz_host`, in conjunction with
`mod_setenvif`, can be used to restrict access to
your website based on the value of arbitrary environment variables.
This is done with the `Allow from env=` and `Deny
from env=` syntax.

`SetEnvIf User-Agent BadBot GoAway=1  
Order allow,deny  
Allow from all  
Deny from env=GoAway`

### Warning:

Access control by `User-Agent` is an unreliable technique,
since the `User-Agent` header can be set to anything at all,
at the whim of the end user.

In the above example, the environment variable `GoAway`
is set to `1` if the `User-Agent` matches the
string `BadBot`. Then we deny access for any request when
this variable is set. This blocks that particular user agent from
the site.

An environment variable test can be negated using the `=!`
syntax:

Allow from env=!GoAway

[![top](../images/up.gif)](#page-header)

## Access control with mod\_rewrite

The `[F]` `RewriteRule` flag causes a 403 Forbidden
response to be sent. Using this, you can deny access to a resource based
on arbitrary criteria.

For example, if you wish to block access to a resource between 8pm
and 6am, you can do this using `mod_rewrite`.

`RewriteEngine On  
RewriteCond %{TIME_HOUR} >20 [OR]  
RewriteCond %{TIME_HOUR} <07  
RewriteRule ^/fridge - [F]`

This will return a 403 Forbidden response for any request after 8pm
or before 7am. This technique can be used for any criteria that you wish
to check. You can also redirect, or otherwise rewrite these requests, if
that approach is preferred.

[![top](../images/up.gif)](#page-header)

## More information

You should also read the documentation for
`mod_auth_basic` and `mod_authz_host` which
contain some more information about how this all works.
`mod_authn_alias` can also help in simplifying certain
authentication configurations.

See the [Authentication and Authorization](howto__auth.md)
howto.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/howto/access.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
