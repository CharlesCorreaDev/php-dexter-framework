# Authentication and Authorization - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/howto/auth.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](howto.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [How-To / Tutorials](howto.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/howto/auth.html) to go to the current version of this document.

# Authentication and Authorization

Authentication is any process by which you verify that
someone is who they claim they are. Authorization is any
process by which someone is allowed to be where they want to
go, or to have information that they want to have.

For general access control, see the [Access
Control How-To](howto__access.md).

- ![](../images/down.gif) [Related Modules and Directives](#related)
- ![](../images/down.gif) [Introduction](#introduction)
- ![](../images/down.gif) [The Prerequisites](#theprerequisites)
- ![](../images/down.gif) [Getting it working](#gettingitworking)
- ![](../images/down.gif) [Satisfy](#satisfy)
- ![](../images/down.gif) [Letting more than one
  person in](#lettingmorethanonepersonin)
- ![](../images/down.gif) [Possible problems](#possibleproblems)
- ![](../images/down.gif) [Alternate password storage](#dbmdbd)
- ![](../images/down.gif) [More information](#moreinformation)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Related Modules and Directives

There are three types of modules involved in the authentication and
authorization process. You will usually need to choose at least one
module from each group.

- Authentication type (see the
  `AuthType` directive)
  - `mod_auth_basic`
  - `mod_auth_digest`
- Authentication provider (see the
  `AuthBasicProvider` and
  `AuthDigestProvider` directives)
  - `mod_authn_anon`
  - `mod_authn_dbd`
  - `mod_authn_dbm`
  - `mod_authn_file`
  - `mod_authnz_ldap`
- Authorization (see the
  `Require` directive)
  - `mod_authnz_ldap`
  - `mod_authz_dbm`
  - `mod_authz_groupfile`
  - `mod_authz_host`
  - `mod_authz_owner`
  - `mod_authz_user`

The module `mod_authnz_ldap` is both an
authentication and authorization provider. The module
`mod_authn_alias` is not an authentication provider
in itself, but allows other authentication providers to be
configured in a flexible manner.

The module `mod_authz_host` provides authorization
and access control based on hostname, IP address or characteristics
of the request, but is not part of the authentication provider
system.

You probably also want to take a look at the [Access Control](howto__access.md) howto, which discusses the
various ways to control access to your server.

[![top](../images/up.gif)](#page-header)

## Introduction

If you have information on your web site that is sensitive
or intended for only a small group of people, the techniques in
this article will help you make sure that the people that see
those pages are the people that you wanted to see them.

This article covers the "standard" way of protecting parts
of your web site that most of you are going to use.

### Note:

If your data really needs to be secure, consider using
`mod_ssl` in addition to any authentication.

[![top](../images/up.gif)](#page-header)

## The Prerequisites

The directives discussed in this article will need to go
either in your main server configuration file (typically in a
`<Directory>` section), or
in per-directory configuration files (`.htaccess` files).

If you plan to use `.htaccess` files, you will
need to have a server configuration that permits putting
authentication directives in these files. This is done with the
`AllowOverride` directive, which
specifies which directives, if any, may be put in per-directory
configuration files.

Since we're talking here about authentication, you will need
an `AllowOverride` directive like the
following:

`AllowOverride AuthConfig`

Or, if you are just going to put the directives directly in
your main server configuration file, you will of course need to
have write permission to that file.

And you'll need to know a little bit about the directory
structure of your server, in order to know where some files are
kept. This should not be terribly difficult, and I'll try to
make this clear when we come to that point.

[![top](../images/up.gif)](#page-header)

## Getting it working

Here's the basics of password protecting a directory on your
server.

First, you need to create a password file. Exactly how you do
this will vary depending on what authentication provider you have
chosen. More on that later. To start with, we'll use a text password
file.

This file should be
placed somewhere not accessible from the web. This is so that
folks cannot download the password file. For example, if your
documents are served out of `/usr/local/apache/htdocs` you
might want to put the password file(s) in
`/usr/local/apache/passwd`.

To create the file, use the `htpasswd` utility that
came with Apache. This will be located in the `bin` directory
of wherever you installed Apache. If you have installed Apache from
a third-party package, it may be in your execution path.

To create the file, type:

`htpasswd -c /usr/local/apache/passwd/passwords rbowen`

`htpasswd` will ask you for the password, and
then ask you to type it again to confirm it:

`# htpasswd -c /usr/local/apache/passwd/passwords rbowen  
New password: mypassword  
Re-type new password: mypassword  
Adding password for user rbowen`

If `htpasswd` is not in your path, of course
you'll have to type the full path to the file to get it to run.
With a default installation, it's located at
`/usr/local/apache2/bin/htpasswd`

Next, you'll need to configure the server to request a
password and tell the server which users are allowed access.
You can do this either by editing the `httpd.conf`
file or using an `.htaccess` file. For example, if
you wish to protect the directory
`/usr/local/apache/htdocs/secret`, you can use the
following directives, either placed in the file
`/usr/local/apache/htdocs/secret/.htaccess`, or
placed in `httpd.conf` inside a <Directory
/usr/local/apache/apache/htdocs/secret> section.

`AuthType Basic  
AuthName "Restricted Files"  
# (Following line optional)  
AuthBasicProvider file  
AuthUserFile /usr/local/apache/passwd/passwords  
Require user rbowen`

Let's examine each of those directives individually. The `AuthType` directive selects
that method that is used to authenticate the user. The most
common method is `Basic`, and this is the method
implemented by `mod_auth_basic`. It is important to be aware,
however, that Basic authentication sends the password from the client to
the server unencrypted. This method should therefore not be used for
highly sensitive data, unless accompanied by `mod_ssl`.
Apache supports one other authentication method:
`AuthType Digest`. This method is implemented by `mod_auth_digest` and was intended to be more secure. This is no
longer the case and the connection should be encrypted with `mod_ssl` instead.

The `AuthName` directive sets
the Realm to be used in the authentication. The realm serves
two major functions. First, the client often presents this information to
the user as part of the password dialog box. Second, it is used by the
client to determine what password to send for a given authenticated
area.

So, for example, once a client has authenticated in the
`"Restricted Files"` area, it will automatically
retry the same password for any area on the same server that is
marked with the `"Restricted Files"` Realm.
Therefore, you can prevent a user from being prompted more than
once for a password by letting multiple restricted areas share
the same realm. Of course, for security reasons, the client
will always need to ask again for the password whenever the
hostname of the server changes.

The `AuthBasicProvider` is,
in this case, optional, since `file` is the default value
for this directive. You'll need to use this directive if you are
choosing a different source for authentication, such as
`mod_authn_dbm` or `mod_authn_dbd`.

The `AuthUserFile`
directive sets the path to the password file that we just
created with `htpasswd`. If you have a large number
of users, it can be quite slow to search through a plain text
file to authenticate the user on each request. Apache also has
the ability to store user information in fast database files.
The `mod_authn_dbm` module provides the `AuthDBMUserFile` directive. These
files can be created and manipulated with the `dbmmanage` program. Many
other types of authentication options are available from third
party modules in the [Apache Modules
Database](http://modules.apache.org/).

Finally, the `Require`
directive provides the authorization part of the process by
setting the user that is allowed to access this region of the
server. In the next section, we discuss various ways to use the
`Require` directive.

[![top](../images/up.gif)](#page-header)

## Satisfy

The `Satisfy` directive can be used to specify
that several criteria may be considered when trying to decide if a particular user
will be granted admission. Satisfy can take as an argument one of two options - `all`
or `any`. By default, it is assumed that the value is `all`. This means that if several
criteria are specified, then all of them must be met in order for someone to get in.
However, if set to `any`, then several criteria may be specified, but if
the user satisfies any of these, then they will be granted entrance.

An example of this is using access control to assure that, although a resource
is password protected from outside your network, all hosts inside the network
will be given unauthenticated access to the resource. This would be accomplished
by using the Satisfy directive, as shown below.

`<Directory /usr/local/apache/htdocs/sekrit>  

AuthType Basic  
AuthName intranet  
AuthUserFile /www/passwd/users  
AuthGroupFile /www/passwd/groups  
Require group customers  
Order allow,deny  
Allow from internal.com  
Satisfy any  
</Directory>`

[![top](../images/up.gif)](#page-header)

## Letting more than one person in

The directives above only let one person (specifically
someone with a username of `rbowen`) into the
directory. In most cases, you'll want to let more than one
person in. This is where the `AuthGroupFile` comes in.

If you want to let more than one person in, you'll need to
create a group file that associates group names with a list of
users in that group. The format of this file is pretty simple,
and you can create it with your favorite editor. The contents
of the file will look like this:

`GroupName: rbowen dpitts sungo rshersey`

That's just a list of the members of the group in a long
line separated by spaces.

To add a user to your already existing password file,
type:

`htpasswd /usr/local/apache/passwd/passwords dpitts`

You'll get the same response as before, but it will be
appended to the existing file, rather than creating a new file.
(It's the `-c` that makes it create a new password
file).

Now, you need to modify your `.htaccess` file or
`<Directory>`
block to look like the following:

`AuthType Basic  
AuthName "By Invitation Only"  
# Optional line:  
AuthBasicProvider file  
AuthUserFile /usr/local/apache/passwd/passwords  
AuthGroupFile /usr/local/apache/passwd/groups  
Require group GroupName`

Now, anyone that is listed in the group `GroupName`,
and has an entry in the `password` file, will be let in, if
they type the correct password.

There's another way to let multiple users in that is less
specific. Rather than creating a group file, you can just use
the following directive:

`Require valid-user`

Using that rather than the `Require user rbowen`
line will allow anyone in that is listed in the password file,
and who correctly enters their password.

[![top](../images/up.gif)](#page-header)

## Possible problems

Because of the way that Basic authentication is specified,
your username and password must be verified every time you
request a document from the server. This is even if you're
reloading the same page, and for every image on the page (if
they come from a protected directory). As you can imagine, this
slows things down a little. The amount that it slows things
down is proportional to the size of the password file, because
it has to open up that file, and go down the list of users
until it gets to your name. And it has to do this every time a
page is loaded.

A consequence of this is that there's a practical limit to
how many users you can put in one password file. This limit
will vary depending on the performance of your particular
server machine, but you can expect to see slowdowns once you
get above a few hundred entries, and may wish to consider a
different authentication method at that time.

[![top](../images/up.gif)](#page-header)

## Alternate password storage

Because storing passwords in plain text files has the above
problems, you may wish to store your passwords somewhere else, such
as in a database.

`mod_authn_dbm` and `mod_authn_dbd` are two
modules which make this possible. Rather than selecting `AuthBasicProvider file`, instead
you can choose `dbm` or `dbd` as your storage
format.

To select a dbd file rather than a text file, for example:

`<Directory /www/docs/private>  

AuthName "Private"  
AuthType Basic  
AuthBasicProvider dbm  
AuthDBMUserFile /www/passwords/passwd.dbm  
Require valid-user  
</Directory>`

Other options are available. Consult the
`mod_authn_dbm` documentation for more details.

[![top](../images/up.gif)](#page-header)

## More information

You should also read the documentation for
`mod_auth_basic` and `mod_authz_host` which
contain some more information about how this all works.
`mod_authn_alias` can also help in simplifying certain
authentication configurations.

The various ciphers supported by Apache for authentication data are
explained in [Password
Encryptions](misc__password_encryptions.md).

And you may want to look at the [Access
Control](howto__access.md) howto, which discusses a number of related topics.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/howto/auth.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/howto/auth.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/howto/auth.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/howto/auth.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/howto/auth.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
