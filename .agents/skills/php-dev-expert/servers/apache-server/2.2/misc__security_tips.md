# Security Tips - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/misc/security_tips.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](misc.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Miscellaneous Documentation](misc.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/misc/security_tips.html) to go to the current version of this document.

# Security Tips

Some hints and tips on security issues in setting up a web server.
Some of the suggestions will be general, others specific to Apache.

- ![](../images/down.gif) [Keep up to Date](#uptodate)
- ![](../images/down.gif) [Permissions on ServerRoot Directories](#serverroot)
- ![](../images/down.gif) [Server Side Includes](#ssi)
- ![](../images/down.gif) [CGI in General](#cgi)
- ![](../images/down.gif) [Non Script Aliased CGI](#nsaliasedcgi)
- ![](../images/down.gif) [Script Aliased CGI](#saliasedcgi)
- ![](../images/down.gif) [Other sources of dynamic content](#dynamic)
- ![](../images/down.gif) [Protecting System Settings](#systemsettings)
- ![](../images/down.gif) [Protect Server Files by Default](#protectserverfiles)
- ![](../images/down.gif) [Watching Your Logs](#watchyourlogs)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Keep up to Date

The Apache HTTP Server has a good record for security and a
developer community highly concerned about security issues. But
it is inevitable that some problems -- small or large -- will be
discovered in software after it is released. For this reason, it
is crucial to keep aware of updates to the software. If you have
obtained your version of the HTTP Server directly from Apache, we
highly recommend you subscribe to the [Apache
HTTP Server Announcements List](http://httpd.apache.org/lists.html#http-announce) where you can keep informed of
new releases and security updates. Similar services are available
from most third-party distributors of Apache software.

Of course, most times that a web server is compromised, it is
not because of problems in the HTTP Server code. Rather, it comes
from problems in add-on code, CGI scripts, or the underlying
Operating System. You must therefore stay aware of problems and
updates with all the software on your system.

[![top](../images/up.gif)](#page-header)

## Permissions on ServerRoot Directories

In typical operation, Apache is started by the root user, and it
switches to the user defined by the `User` directive to serve hits. As is the
case with any command that root executes, you must take care that it is
protected from modification by non-root users. Not only must the files
themselves be writeable only by root, but so must the directories, and
parents of all directories. For example, if you choose to place
ServerRoot in `/usr/local/apache` then it is suggested that
you create that directory as root, with commands like these:

`mkdir /usr/local/apache   
cd /usr/local/apache   
mkdir bin conf logs   
chown 0 . bin conf logs   
chgrp 0 . bin conf logs   
chmod 755 . bin conf logs`

It is assumed that `/`, `/usr`, and
`/usr/local` are only modifiable by root. When you install the
`httpd` executable, you should ensure that it is
similarly protected:

`cp httpd /usr/local/apache/bin   
chown 0 /usr/local/apache/bin/httpd   
chgrp 0 /usr/local/apache/bin/httpd   
chmod 511 /usr/local/apache/bin/httpd`

You can create an htdocs subdirectory which is modifiable by other
users -- since root never executes any files out of there, and shouldn't
be creating files in there.

If you allow non-root users to modify any files that root either
executes or writes on then you open your system to root compromises.
For example, someone could replace the `httpd` binary so
that the next time you start it, it will execute some arbitrary code. If
the logs directory is writeable (by a non-root user), someone could replace
a log file with a symlink to some other system file, and then root
might overwrite that file with arbitrary data. If the log files
themselves are writeable (by a non-root user), then someone may be
able to overwrite the log itself with bogus data.

[![top](../images/up.gif)](#page-header)

## Server Side Includes

Server Side Includes (SSI) present a server administrator with
several potential security risks.

The first risk is the increased load on the server. All
SSI-enabled files have to be parsed by Apache, whether or not
there are any SSI directives included within the files. While this
load increase is minor, in a shared server environment it can become
significant.

SSI files also pose the same risks that are associated with CGI
scripts in general. Using the `exec cmd` element, SSI-enabled
files can execute any CGI script or program under the permissions of the
user and group Apache runs as, as configured in `httpd.conf`.

There are ways to enhance the security of SSI files while still
taking advantage of the benefits they provide.

To isolate the damage a wayward SSI file can cause, a server
administrator can enable [suexec](suexec.md) as
described in the [CGI in General](#cgi) section.

Enabling SSI for files with `.html` or `.htm`
extensions can be dangerous. This is especially true in a shared, or high
traffic, server environment. SSI-enabled files should have a separate
extension, such as the conventional `.shtml.` This helps keep
server load at a minimum and allows for easier management of risk.

Another solution is to disable the ability to run scripts and
programs from SSI pages. To do this replace `Includes`
with `IncludesNOEXEC` in the `Options` directive. Note that users may
still use `<--#include virtual="..." -->` to execute CGI
scripts if these scripts are in directories designated by a `ScriptAlias` directive.

[![top](../images/up.gif)](#page-header)

## CGI in General

First of all, you always have to remember that you must trust the
writers of the CGI scripts/programs or your ability to spot potential
security holes in CGI, whether they were deliberate or accidental. CGI
scripts can run essentially arbitrary commands on your system with the
permissions of the web server user and can therefore be extremely
dangerous if they are not carefully checked.

All the CGI scripts will run as the same user, so they have potential
to conflict (accidentally or deliberately) with other scripts e.g. User
A hates User B, so he writes a script to trash User B's CGI database. One
program which can be used to allow scripts to run as different users is
[suEXEC](suexec.md) which is included with Apache as of
1.2 and is called from special hooks in the Apache server code. Another
popular way of doing this is with
[CGIWrap](http://cgiwrap.sourceforge.net/).

[![top](../images/up.gif)](#page-header)

## Non Script Aliased CGI

Allowing users to execute CGI scripts in any directory should only be
considered if:

- You trust your users not to write scripts which will deliberately
  or accidentally expose your system to an attack.
- You consider security at your site to be so feeble in other areas,
  as to make one more potential hole irrelevant.
- You have no users, and nobody ever visits your server.

[![top](../images/up.gif)](#page-header)

## Script Aliased CGI

Limiting CGI to special directories gives the admin control over what
goes into those directories. This is inevitably more secure than non
script aliased CGI, but only if users with write access to the
directories are trusted or the admin is willing to test each
new CGI script/program for potential security holes.

Most sites choose this option over the non script aliased CGI
approach.

[![top](../images/up.gif)](#page-header)

## Other sources of dynamic content

Embedded scripting options which run as part of the server itself,
such as `mod_php`, `mod_perl`, `mod_tcl`,
and `mod_python`, run under the identity of the server itself
(see the `User` directive), and
therefore scripts executed by these engines potentially can access anything
the server user can. Some scripting engines may provide restrictions, but
it is better to be safe and assume not.

[![top](../images/up.gif)](#page-header)

## Protecting System Settings

To run a really tight ship, you'll want to stop users from setting
up `.htaccess` files which can override security features
you've configured. Here's one way to do it.

In the server configuration file, put

`<Directory />   
AllowOverride None   
</Directory>`

This prevents the use of `.htaccess` files in all
directories apart from those specifically enabled.

[![top](../images/up.gif)](#page-header)

## Protect Server Files by Default

One aspect of Apache which is occasionally misunderstood is the
feature of default access. That is, unless you take steps to change it,
if the server can find its way to a file through normal URL mapping
rules, it can serve it to clients.

For instance, consider the following example:

`# cd /; ln -s / public_html   
Accessing http://localhost/~root/`

This would allow clients to walk through the entire filesystem. To
work around this, add the following block to your server's
configuration:

`<Directory />   
Order Deny,Allow   
Deny from all   
</Directory>`

This will forbid default access to filesystem locations. Add
appropriate `Directory` blocks to
allow access only in those areas you wish. For example,

`<Directory /usr/users/*/public_html>   
Order Deny,Allow   
Allow from all   
</Directory>   
<Directory /usr/local/httpd>   
Order Deny,Allow   
Allow from all   
</Directory>`

Pay particular attention to the interactions of `Location` and `Directory` directives; for instance, even
if `<Directory />` denies access, a `<Location />` directive might overturn it.

Also be wary of playing games with the `UserDir` directive; setting it to
something like `./` would have the same effect, for root, as
the first example above. If you are using Apache 1.3 or above, we strongly
recommend that you include the following line in your server
configuration files:

`UserDir disabled root`

[![top](../images/up.gif)](#page-header)

## Watching Your Logs

To keep up-to-date with what is actually going on against your server
you have to check the [Log Files](logs.md). Even though
the log files only reports what has already happened, they will give you
some understanding of what attacks is thrown against the server and
allow you to check if the necessary level of security is present.

A couple of examples:

`grep -c "/jsp/source.jsp?/jsp/ /jsp/source.jsp??" access_log   
grep "client denied" error_log | tail -n 10`

The first example will list the number of attacks trying to exploit the
[Apache Tomcat
Source.JSP Malformed Request Information Disclosure Vulnerability](http://online.securityfocus.com/bid/4876/info/),
the second example will list the ten last denied clients, for example:

`[Thu Jul 11 17:18:39 2002] [error] [client foo.example.com] client denied
by server configuration: /usr/local/apache/htdocs/.htpasswd`

As you can see, the log files only report what already has happened, so
if the client had been able to access the `.htpasswd` file you
would have seen something similar to:

`foo.example.com - - [12/Jul/2002:01:59:13 +0200] "GET /.htpasswd HTTP/1.1"`

in your [Access Log](logs.md#accesslog). This means
you probably commented out the following in your server configuration
file:

`<Files ~ "^\.ht">   
Order allow,deny   
Deny from all   
</Files>`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/misc/security_tips.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/misc/security_tips.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/misc/security_tips.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
