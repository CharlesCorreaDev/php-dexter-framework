# htdigest - manage user files for digest authentication - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/programs/htdigest.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Programs](programs.md)

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
- ![](../images/down.gif) [Files](#files)

### See also

- `httpd`
- `mod_auth_digest`

[![top](../images/up.gif)](#page-header)

## Synopsis [¶](#synopsis "Permanent link")

`htdigest [ -c ]
passwdfile realm username`

[![top](../images/up.gif)](#page-header)

## Options [¶](#options "Permanent link")

`-c`
:   Create the passwdfile. If passwdfile already
    exists, it is deleted first.

`passwdfile`
:   Name of the file to contain the username, realm and password. If
    `-c` is given, this file is created if it does not already
    exist, or deleted and recreated if it does exist.

`realm`
:   The realm name to which the user name belongs. See
    [RFC 2617](https://www.rfc-editor.org/rfc/rfc2617#section-3.2.1) for more details.

`username`
:   The user name to create or update in passwdfile. If
    username does not exist is this file, an entry is added. If it
    does exist, the password is changed.

[![top](../images/up.gif)](#page-header)

## Security Considerations [¶](#security "Permanent link")

This program is not safe as a setuid executable. Do *not* make it
setuid.

[![top](../images/up.gif)](#page-header)

## Files [¶](#files "Permanent link")

The digest authentication file path is specified as an argument on the
command line and may be located anywhere on the filesystem.

passwdfile
:   The flat-file containing usernames, realms, and password hashes.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/programs/htdigest.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/programs/htdigest.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/programs/htdigest.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/programs/htdigest.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
