# mod_authn_core - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authn_core.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_authn\_core

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Core Authentication |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authn\_core\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authn\_core.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and later |

### Summary

This module provides core authentication capabilities to
allow or deny access to portions of the web site.
`mod_authn_core` provides directives that are
common to all authentication providers.

### Topics

- ![](../images/down.gif) [Creating Authentication Provider Aliases](#authnalias)

### Directives

- ![](../images/down.gif) [AuthName](#authname)
- ![](../images/down.gif) [<AuthnProviderAlias>](#authnprovideralias)
- ![](../images/down.gif) [AuthType](#authtype)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authn_core)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authn_core)

[![top](../images/up.gif)](#page-header)

## Creating Authentication Provider Aliases [¶](#authnalias "Permanent link")

Extended authentication providers can be created
within the configuration file and assigned an alias name. The alias
providers can then be referenced through the directives
`AuthBasicProvider` or
`AuthDigestProvider` in
the same way as a base authentication provider. Besides the ability
to create and alias an extended provider, it also allows the same
extended authentication provider to be reference by multiple
locations.

### Examples

This example checks for passwords in two different text
files.

### Checking multiple text password files

```
# Check here first
<AuthnProviderAlias file file1>
    AuthUserFile "/www/conf/passwords1"
</AuthnProviderAlias>

# Then check here
<AuthnProviderAlias file file2>   
    AuthUserFile "/www/conf/passwords2"
</AuthnProviderAlias>

<Directory "/var/web/pages/secure">
    AuthBasicProvider file1 file2
    
    AuthType Basic
    AuthName "Protected Area"
    Require valid-user
</Directory>
```

The example below creates two different ldap authentication
provider aliases based on the ldap provider. This allows
a single authenticated location to be serviced by multiple ldap
hosts:

### Checking multiple LDAP servers

```
<AuthnProviderAlias ldap ldap-alias1>
    AuthLDAPBindDN cn=youruser,o=ctx
    AuthLDAPBindPassword yourpassword
    AuthLDAPURL ldap://ldap.host/o=ctx
</AuthnProviderAlias>
<AuthnProviderAlias ldap ldap-other-alias>
    AuthLDAPBindDN cn=yourotheruser,o=dev
    AuthLDAPBindPassword yourotherpassword
    AuthLDAPURL ldap://other.ldap.host/o=dev?cn
</AuthnProviderAlias>

Alias "/secure" "/webpages/secure"
<Directory "/webpages/secure">
    AuthBasicProvider ldap-other-alias  ldap-alias1
    
    AuthType Basic
    AuthName "LDAP Protected Place"
    Require valid-user
    # Note that Require ldap-* would not work here, since the 
    # AuthnProviderAlias does not provide the config to authorization providers
    # that are implemented in the same module as the authentication provider.
</Directory>
```

[![top](../images/up.gif)](#page-header)

## AuthName Directive [¶](#authname "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Authorization realm for use in HTTP authentication |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthName auth-domain` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_core |

This directive sets the name of the authorization realm for a
directory. This realm is given to the client so that the user
knows which username and password to send.
`AuthName` takes a single argument; if the
realm name contains spaces, it must be enclosed in quotation
marks. It must be accompanied by `AuthType` and `Require` directives, and directives such
as `AuthUserFile` and
`AuthGroupFile` to
work.

For example:

```
AuthName "Top Secret"
```

The string provided for the `AuthName` was
historically displayed in the password dialog provided by
browsers. Most modern browsers no longer show the realm
string, as it could be abused for phishing. The directive
is still required for HTTP authentication to function, and
the realm value is still used to scope credentials.

From 2.4.55, [expression syntax](expr.md) can be
used inside the directive to produce the name dynamically.

For example:

```
AuthName "%{HTTP_HOST}"
```

### See also

- [Authentication, Authorization, and
  Access Control](howto__auth.md)
- `mod_authz_core`

[![top](../images/up.gif)](#page-header)

## <AuthnProviderAlias> Directive [¶](#authnprovideralias "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enclose a group of directives that represent an extension of a base authentication provider and referenced by the specified alias |
| [Syntax:](mod__directive-dict.md#Syntax) | `<AuthnProviderAlias baseProvider Alias> ... </AuthnProviderAlias>` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_core |

`<AuthnProviderAlias>` and
`</AuthnProviderAlias>` are used to enclose a group of
authentication directives that can be referenced by the alias name
using one of the directives `AuthBasicProvider` or `AuthDigestProvider`.

This directive has no affect on authorization, even for modules that
provide both authentication and authorization.

[![top](../images/up.gif)](#page-header)

## AuthType Directive [¶](#authtype "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Type of user authentication |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthType None|Basic|Digest|Form` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_core |

This directive selects the type of user authentication for a
directory. The authentication types available are `None`,
`Basic` (implemented by
`mod_auth_basic`), `Digest`
(implemented by `mod_auth_digest`), and
`Form` (implemented by `mod_auth_form`).

To implement authentication, you must also use the `AuthName` and `Require` directives. In addition, the
server must have an authentication-provider module such as
`mod_authn_file` and an authorization module such
as `mod_authz_user`.

The authentication type `None` disables authentication.
When authentication is enabled, it is normally inherited by each
subsequent [configuration section](sections.md#merging),
unless a different authentication type is specified. If no
authentication is desired for a subsection of an authenticated
section, the authentication type `None` may be used;
in the following example, clients may access the
`/www/docs/public` directory without authenticating:

```
<Directory "/www/docs">
    AuthType Basic
    AuthName Documents
    AuthBasicProvider file
    AuthUserFile "/usr/local/apache/passwd/passwords"
    Require valid-user
</Directory>

<Directory "/www/docs/public">
    AuthType None
    Require all granted
</Directory>
```

From 2.4.55, [expression syntax](expr.md) can be
used inside the directive to specify the type dynamically.

When disabling authentication, note that clients which have
already authenticated against another portion of the server's document
tree will typically continue to send authentication HTTP headers
or cookies with each request, regardless of whether the server
actually requires authentication for every resource.

### See also

- [Authentication, Authorization,
  and Access Control](howto__auth.md)

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authn_core.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authn_core.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
