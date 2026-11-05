# Per-user web directories - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/howto/public_html.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](howto.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [How-To / Tutorials](howto.md)

# Per-user web directories

On systems with multiple users, each user can be permitted to have a
web site in their home directory using the `UserDir` directive. Visitors
to a URL `http://example.com/~username/` will get content
out of the home directory of the user "`username`", out of
the subdirectory specified by the `UserDir` directive.

By default, access to these directories is **not**
enabled. You can enable access when using `UserDir` by uncommenting the line:

```
#Include conf/extra/httpd-userdir.conf
```

in the default config file `conf/httpd.conf`, and adapting the `httpd-userdir.conf`
file as necessary, or by including the appropriate directives in a
`<Directory>` block
within the main config file.

Third-party distributions of httpd (from your OS vendor or
package manager) often place the `mod_userdir`
configuration in a separate file, and may enable it by default.
Check your distribution's documentation for specifics. The examples
in this document assume a default source build of httpd.

- ![](../images/down.gif) [Per-user web directories](#related)
- ![](../images/down.gif) [Setting the file path with UserDir](#userdir)
- ![](../images/down.gif) [Redirecting to external URLs](#redirect)
- ![](../images/down.gif) [Restricting what users are permitted to use this
  feature](#enable)
- ![](../images/down.gif) [Enabling a cgi directory for each user](#cgi)
- ![](../images/down.gif) [Allowing users to alter configuration](#htaccess)

### See also

- [Mapping URLs to the Filesystem](urlmapping.md)

[![top](../images/up.gif)](#page-header)

## Per-user web directories [¶](#related "Permanent link")

| Related Modules | Related Directives |
| --- | --- |
| - `mod_userdir` | - `UserDir` - `DirectoryMatch` - `AllowOverride` |

[![top](../images/up.gif)](#page-header)

## Setting the file path with UserDir [¶](#userdir "Permanent link")

The `UserDir`
directive specifies a directory out of which per-user
content is loaded. This directive may take several different forms.

If a path is given which does not start with a leading slash, it is
assumed to be a directory path relative to the home directory of the
specified user. Given this configuration:

```
UserDir public_html
```

the URL `http://example.com/~rbowen/file.html` will be
translated to the file path
`/home/rbowen/public_html/file.html`

If a path is given starting with a slash, a directory path will be
constructed using that path, plus the username specified. Given this
configuration:

```
UserDir /var/html
```

the URL `http://example.com/~rbowen/file.html` will be
translated to the file path `/var/html/rbowen/file.html`

If a path is provided which contains an asterisk (\*), a path is used
in which the asterisk is replaced with the username. Given this
configuration:

```
UserDir /var/www/*/docs
```

the URL `http://example.com/~rbowen/file.html` will be
translated to the file path
`/var/www/rbowen/docs/file.html`

Multiple directories or directory paths can also be set.

```
UserDir public_html /var/html
```

The arguments are considered in the order they appear.
For the URL `http://example.com/~rbowen/file.html`,
httpd will search for `~rbowen`. If it isn't found,
httpd will then search for `rbowen` in `/var/html`.
The file will be served from whichever location is found first.

[![top](../images/up.gif)](#page-header)

## Redirecting to external URLs [¶](#redirect "Permanent link")

The `UserDir` directive can be
used to redirect user directory requests to external URLs.

```
UserDir http://example.org/users/*/
```

The above example will redirect a request for
`http://example.com/~bob/abc.html` to
`http://example.org/users/bob/abc.html`.

[![top](../images/up.gif)](#page-header)

## Restricting what users are permitted to use this feature [¶](#enable "Permanent link")

Using the syntax shown in the UserDir documentation, you can restrict
what users are permitted to use this functionality:

```
UserDir disabled root jro fish
```

The configuration above will enable the feature for all users
except for those listed in the `disabled` statement.
You can, likewise, disable the feature for all but a few users by
using a configuration like the following:

```
UserDir disabled
UserDir enabled rbowen krietz
```

See `UserDir`
documentation for additional examples.

[![top](../images/up.gif)](#page-header)

## Enabling a cgi directory for each user [¶](#cgi "Permanent link")

To give each user their own cgi-bin directory, you can use
a `<Directory>`
directive to make a particular subdirectory of a user's home directory
cgi-enabled.

```
<Directory "/home/*/public_html/cgi-bin/">
Options ExecCGI
SetHandler cgi-script
</Directory>
```

Then, presuming that `UserDir` is set to
`public_html`, a cgi program `example.cgi`
could be loaded from that directory as:

`http://example.com/~rbowen/cgi-bin/example.cgi`

[![top](../images/up.gif)](#page-header)

## Allowing users to alter configuration [¶](#htaccess "Permanent link")

If you want to allow users to modify the server configuration in
their web space, they will need to use `.htaccess` files to
make these changes. Ensure that you have set `AllowOverride` to a
value sufficient for the directives that you want to permit the users
to modify. See the [.htaccess tutorial](howto__htaccess.md) for
additional details on how this works.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/howto/public_html.html "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/howto/public_html.html "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/howto/public_html.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/howto/public_html.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/howto/public_html.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/howto/public_html.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
