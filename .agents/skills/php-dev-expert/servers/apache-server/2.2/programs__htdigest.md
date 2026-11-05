# htdigest - manage user files for digest authentication - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/programs/htdigest.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Programs](programs.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/programs/htdigest.html) to go to the current version of this document.

# htdigest - manage user files for digest authentication

`htdigest` is used to create and update the flat-files used
to store usernames, realm and password for digest authentication of HTTP
users. Resources available from the Apache HTTP server can be restricted
to just the users listed in the files created by `htdigest`.

This manual page only lists the command line arguments. For details of
the directives necessary to configure digest authentication in
`httpd` see the Apache manual, which is part
of the Apache distribution or can be found at
<http://httpd.apache.org/>.

- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)
- ![](../images/down.gif) [Security Considerations](#security)

### See also

- `httpd`
- `mod_auth_digest`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Synopsis

`htdigest [ -c ]
passwdfile realm username`

[![top](../images/up.gif)](#page-header)

## Options

`-c`
:   Create the passwdfile. If passwdfile already
    exists, it is deleted first.

`passwdfile`
:   Name of the file to contain the username, realm and password. If
    `-c` is given, this file is created if it does not already
    exist, or deleted and recreated if it does exist.

`realm`
:   The realm name to which the user name belongs. See
    <http://tools.ietf.org/html/rfc2617#section-3.2.1> for more details.

`username`
:   The user name to create or update in passwdfile. If
    username does not exist is this file, an entry is added. If it
    does exist, the password is changed.

[![top](../images/up.gif)](#page-header)

## Security Considerations

This program is not safe as a setuid executable. Do *not* make it
setuid.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/programs/htdigest.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/programs/htdigest.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/programs/htdigest.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
