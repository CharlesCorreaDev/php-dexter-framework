# mod_authz_core - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authz_core.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_authz\_core

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Core Authorization |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authz\_core\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authz\_core.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache HTTPD 2.3 and later |

### Summary

This module provides core authorization capabilities so that
authenticated users can be allowed or denied access to portions
of the web site. `mod_authz_core` provides the
functionality to register various authorization providers. It is
usually used in conjunction with an authentication
provider module such as `mod_authn_file` and an
authorization module such as `mod_authz_user`. It
also allows for advanced logic to be applied to the
authorization processing.

### Topics

- ![](../images/down.gif) [Authorization Containers](#logic)
- ![](../images/down.gif) [Authorization Result States](#authzresults)
- ![](../images/down.gif) [The Require Directives](#requiredirectives)
- ![](../images/down.gif) [Creating Authorization Provider Aliases](#authzalias)

### Directives

- ![](../images/down.gif) [AuthMerging](#authmerging)
- ![](../images/down.gif) [<AuthzProviderAlias>](#authzprovideralias)
- ![](../images/down.gif) [AuthzSendForbiddenOnFailure](#authzsendforbiddenonfailure)
- ![](../images/down.gif) [Require](#require)
- ![](../images/down.gif) [<RequireAll>](#requireall)
- ![](../images/down.gif) [<RequireAny>](#requireany)
- ![](../images/down.gif) [<RequireNone>](#requirenone)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authz_core)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authz_core)

[![top](../images/up.gif)](#page-header)

## Authorization Containers [¶](#logic "Permanent link")

The authorization container directives
`<RequireAll>`,
`<RequireAny>`
and
`<RequireNone>`
may be combined with each other and with the
`Require`
directive to express complex authorization logic.

The example below expresses the following authorization logic.
In order to access the resource, the user must either be the
`superadmin` user, or belong to both the
`admins` group and the `Administrators` LDAP
group and either belong to the `sales` group or
have the LDAP `dept` attribute `sales`.
Furthermore, in order to access the resource, the user must
not belong to either the `temps` group or the
LDAP group `Temporary Employees`.

```
<Directory "/www/mydocs">
    <RequireAll>
        <RequireAny>
            Require user superadmin
            <RequireAll>
                Require group admins
                Require ldap-group "cn=Administrators,o=Airius"
                <RequireAny>
                    Require group sales
                    Require ldap-attribute dept="sales"
                </RequireAny>
            </RequireAll>
        </RequireAny>
        <RequireNone>
            Require group temps
            Require ldap-group "cn=Temporary Employees,o=Airius"
        </RequireNone>
    </RequireAll>
</Directory>
```

[![top](../images/up.gif)](#page-header)

## Authorization Result States [¶](#authzresults "Permanent link")

Each authorization provider returns one of three possible results
when evaluating a `Require`
directive:

**Granted**
:   The provider has verified that the request meets
    its requirements.

**Denied**
:   The provider has determined that the request does not
    meet its requirements.

**Neutral**
:   The provider has no opinion about the request. This
    can occur when a provider is not relevant to the request
    (e.g., a group-membership check when the request does not
    involve group-based authorization).

The authorization container directives interpret these three
results as follows:

| Container | Granted if... | Denied if... | Neutral treated as... |
| --- | --- | --- | --- |
| `<RequireAny>` | at least one provider grants | all providers deny | deny (does not satisfy the requirement) |
| `<RequireAll>` | no provider denies (and at least one grants) | any provider denies | grant (does not block the requirement) |
| `<RequireNone>` | no provider grants | any provider grants | grant (does not block) |

When a `Require` directive is negated with
`not` (e.g., `Require not group temps`), a
granted result is inverted to denied and vice versa, but a neutral
result remains neutral. A negated directive can therefore never
independently authorize a request.

[![top](../images/up.gif)](#page-header)

## The Require Directives [¶](#requiredirectives "Permanent link")

`mod_authz_core` provides some generic authorization
providers which can be used with the
`Require` directive.

### Require env

The `env` provider allows access to the server
to be controlled based on the existence of an [environment variable](env.md). When `Require
env env-variable` is specified, then the request is
allowed access if the environment variable env-variable
exists. The server provides the ability to set environment
variables in a flexible way based on characteristics of the client
request using the directives provided by
`mod_setenvif`. Therefore, this directive can be
used to allow access based on such factors as the clients
`User-Agent` (browser type), `Referer`, or
other HTTP request header fields.

```
SetEnvIf User-Agent "^KnockKnock/2\.0" let_me_in
<Directory "/docroot">
    Require env let_me_in
</Directory>
```

In this case, browsers with a user-agent string beginning
with `KnockKnock/2.0` will be allowed access, and all
others will be denied.

When the server looks up a path via an internal
[subrequest](glossary.md#subrequest "see glossary") such as looking
for a `DirectoryIndex`
or generating a directory listing with `mod_autoindex`,
per-request environment variables are *not* inherited in the
subrequest. Additionally,
`SetEnvIf` directives
are not separately evaluated in the subrequest due to the API phases
`mod_setenvif` takes action in.

### Require all

The `all` provider mimics the functionality that
was previously provided by the 'Allow from all' and 'Deny from all'
directives. This provider can take one of two arguments which are
'granted' or 'denied'. The following examples will grant or deny
access to all requests.

```
Require all granted
```

```
Require all denied
```

### Require method

The `method` provider allows using the HTTP method in
authorization decisions. The GET and HEAD methods are treated as
equivalent. The TRACE method is not available to this provider,
use `TraceEnable` instead.

The following example will only allow GET, HEAD, POST, and OPTIONS
requests:

```
Require method GET POST OPTIONS
```

The following example will allow GET, HEAD, POST, and OPTIONS
requests without authentication, and require a valid user for all other
methods:

```
<RequireAny>
     Require method GET POST OPTIONS
     Require valid-user
</RequireAny>
```

### Require expr

The `expr` provider allows basing authorization
decisions on arbitrary expressions.

```
Require expr "%{TIME_HOUR} -ge 9 && %{TIME_HOUR} -le 17"
```

```
<RequireAll>
    Require expr "!(%{QUERY_STRING} =~ /secret/)"
    Require expr "%{REQUEST_URI} in { '/example.cgi', '/other.cgi' }"
</RequireAll>
```

```
Require expr "!(%{QUERY_STRING} =~ /secret/) && %{REQUEST_URI} in { '/example.cgi', '/other.cgi' }"
```

The syntax is described in the [ap\_expr](expr.md)
documentation. Before httpd 2.4.16, the surrounding double-quotes MUST be
omitted.

Normally, the expression is evaluated before authentication. However, if
the expression returns false and references the variable
`%{REMOTE_USER}`, authentication will be performed and
the expression will be re-evaluated.

[![top](../images/up.gif)](#page-header)

## Creating Authorization Provider Aliases [¶](#authzalias "Permanent link")

Extended authorization providers can be created within the configuration
file and assigned an alias name. The alias providers can then be referenced
through the `Require` directive
in the same way as a base authorization provider. Besides the ability to
create and alias an extended provider, it also allows the same extended
authorization provider to be referenced by multiple locations.

### Example

The example below creates two different ldap authorization provider
aliases based on the ldap-group authorization provider. This example
allows a single authorization location to check group membership within
multiple ldap hosts:

```
<AuthzProviderAlias ldap-group ldap-group-alias1 "cn=my-group,o=ctx">
    AuthLDAPBindDN "cn=youruser,o=ctx"
    AuthLDAPBindPassword yourpassword
    AuthLDAPUrl "ldap://ldap.host/o=ctx"
</AuthzProviderAlias>

<AuthzProviderAlias ldap-group ldap-group-alias2 "cn=my-other-group,o=dev">
    AuthLDAPBindDN "cn=yourotheruser,o=dev"
    AuthLDAPBindPassword yourotherpassword
    AuthLDAPUrl "ldap://other.ldap.host/o=dev?cn"
</AuthzProviderAlias>

Alias "/secure" "/webpages/secure"
<Directory "/webpages/secure">
    AuthType Basic
    AuthName "LDAP Protected"
    AuthBasicProvider ldap
    AuthLDAPUrl "ldap://ldap.host/o=ctx"

    #implied OR operation
    Require ldap-group-alias1
    Require ldap-group-alias2
</Directory>
```

[![top](../images/up.gif)](#page-header)

## AuthMerging Directive [¶](#authmerging "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Controls the manner in which each configuration section's authorization logic is combined with that of preceding configuration sections. |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthMerging Off | And | Or` |
| [Default:](mod__directive-dict.md#Default) | `AuthMerging Off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_core |

When authorization is enabled, it is normally inherited by each
subsequent [configuration section](sections.md#merging),
unless a different set of authorization directives is specified.
This is the default action, which corresponds to an explicit setting
of `AuthMerging Off`.

However, there may be circumstances in which it is desirable
for a configuration section's authorization to be combined with
that of its predecessor while configuration sections are being
merged. Two options are available for this case, `And`
and `Or`.

When a configuration section contains `AuthMerging And`
or `AuthMerging Or`,
its authorization logic is combined with that of the nearest
predecessor (according to the overall order of configuration sections)
which also contains authorization logic as if the two sections
were jointly contained within a
`<RequireAll>` or
`<RequireAny>`
directive, respectively.

The setting of `AuthMerging` is not
inherited outside of the configuration section in which it appears.
In the following example, only users belonging to group `alpha`
may access `/www/docs`. Users belonging to either
groups `alpha` or `beta` may access
`/www/docs/ab`. However, the default `Off`
setting of `AuthMerging` applies to the
`<Directory>`
configuration section for `/www/docs/ab/gamma`, so
that section's authorization directives override those of the
preceding sections. Thus only users belong to the group
`gamma` may access `/www/docs/ab/gamma`.

```
<Directory "/www/docs">
    AuthType Basic
    AuthName Documents
    AuthBasicProvider file
    AuthUserFile "/usr/local/apache/passwd/passwords"
    Require group alpha
</Directory>

<Directory "/www/docs/ab">
    AuthMerging Or
    Require group beta
</Directory>

<Directory "/www/docs/ab/gamma">
    Require group gamma
</Directory>
```

[![top](../images/up.gif)](#page-header)

## <AuthzProviderAlias> Directive [¶](#authzprovideralias "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enclose a group of directives that represent an extension of a base authorization provider and referenced by the specified alias |
| [Syntax:](mod__directive-dict.md#Syntax) | `<AuthzProviderAlias baseProvider Alias Require-Parameters> ... </AuthzProviderAlias>` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_core |

`<AuthzProviderAlias>` and
`</AuthzProviderAlias>` are used to enclose a group of
authorization directives that can be referenced by the alias name using the
directive `Require`.

If several parameters are needed in Require-Parameters,
they must be enclosed in quotation marks. Otherwise, only the first one
is taken into account.

```
# In this example, for both addresses to be taken into account, they MUST be enclosed
# between quotation marks
<AuthzProviderAlias ip reject-ips "XXX.XXX.XXX.XXX YYY.YYY.YYY.YYY">
</AuthzProviderAlias>

<Directory "/path/to/dir">
    <RequireAll>
        Require not reject-ips
        Require all granted
    </RequireAll>
</Directory>
```

[![top](../images/up.gif)](#page-header)

## AuthzSendForbiddenOnFailure Directive [¶](#authzsendforbiddenonfailure "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Send '403 FORBIDDEN' instead of '401 UNAUTHORIZED' if authentication succeeds but authorization fails |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthzSendForbiddenOnFailure On|Off` |
| [Default:](mod__directive-dict.md#Default) | `AuthzSendForbiddenOnFailure Off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_core |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache HTTPD 2.3.11 and later |

If authentication succeeds but authorization fails, Apache HTTPD will
respond with an HTTP response code of '401 UNAUTHORIZED' by default. This
usually causes browsers to display the password dialog to the user
again, which is not wanted in all situations.
`AuthzSendForbiddenOnFailure` allows to change the
response code to '403 FORBIDDEN'.

### Security Warning

Modifying the response in case of missing authorization weakens the
security of the password, because it reveals to a possible attacker, that
his guessed password was right.

[![top](../images/up.gif)](#page-header)

## Require Directive [¶](#require "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Tests whether an authenticated user is authorized by an authorization provider. |
| [Syntax:](mod__directive-dict.md#Syntax) | `Require [not] entity-name [entity-name] ...` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_core |

This directive tests whether an authenticated user is authorized
according to a particular authorization provider and the specified
restrictions. `mod_authz_core` provides the following
generic authorization providers:

`Require all granted`
:   Access is allowed unconditionally.

`Require all denied`
:   Access is denied unconditionally.

`Require env env-var [env-var] ...`
:   Access is allowed only if one of the given environment variables is
    set.

`Require method http-method [http-method] ...`
:   Access is allowed only for the given HTTP methods.

`Require expr expression`
:   Access is allowed if expression evaluates to true.

Some of the allowed syntaxes provided by `mod_authz_user`,
`mod_authz_host`,
and `mod_authz_groupfile` are:

`Require user userid [userid] ...`
:   Only the named users can access the resource.

`Require group group-name [group-name] ...`
:   Only users in the named groups can access the resource.

`Require valid-user`
:   All valid users can access the resource.

`Require ip 10 172.20 192.168.2`
:   Clients in the specified IP address ranges can access the
    resource.

`Require forward-dns dynamic.example.org`
:   A client the IP of which is resolved from the name dynamic.example.org will be granted access.

Other authorization modules that implement require options
include `mod_authnz_ldap`,
`mod_authz_dbm`, `mod_authz_dbd`,
`mod_authz_owner` and `mod_ssl`.

In most cases, for a complete authentication and authorization
configuration, `Require` must be accompanied by
`AuthName`, `AuthType` and
`AuthBasicProvider` or
`AuthDigestProvider`
directives, and directives such as
`AuthUserFile`
and `AuthGroupFile` (to
define users and groups) in order to work correctly. Example:

```
AuthType Basic
AuthName "Restricted Resource"
AuthBasicProvider file
AuthUserFile "/web/users"
AuthGroupFile "/web/groups"
Require group admin
```

Access controls which are applied in this way are effective for
**all** methods. **This is what is normally
desired.** If you wish to apply access controls only to
specific methods, while leaving other methods unprotected, then
place the `Require` statement into a
`<Limit>`
section.

The result of the `Require` directive
may be negated through the use of the
`not` option. As with the other negated authorization
directive `<RequireNone>`,
when the `Require` directive is negated it can
only fail or return a neutral result, and therefore may never
independently authorize a request.

In the following example, all users in the `alpha`
and `beta` groups are authorized, except for those who
are also in the `reject` group.

```
<Directory "/www/docs">
    <RequireAll>
        Require group alpha beta
        Require not group reject
    </RequireAll>
</Directory>
```

When multiple `Require` directives are
used in a single
[configuration section](sections.md#merging)
and are not contained in another authorization directive like
`<RequireAll>`,
they are implicitly contained within a
`<RequireAny>`
directive. Thus the first one to authorize a user authorizes the
entire request, and subsequent `Require` directives
are ignored.

### Security Warning

Exercise caution when setting authorization directives in
`Location` sections
that overlap with content served out of the filesystem.
By default, these [configuration sections](sections.md#merging) overwrite authorization configuration
in `Directory`,
and `Files` sections.

The `AuthMerging` directive
can be used to control how authorization configuration sections are
merged.

### See also

- [Access Control howto](howto__access.md)
- [Authorization Containers](#logic)
- [Authorization Result States](#authzresults)
- `mod_authn_core`
- `mod_authz_host`

[![top](../images/up.gif)](#page-header)

## <RequireAll> Directive [¶](#requireall "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enclose a group of authorization directives of which none must fail and at least one must succeed for the enclosing directive to succeed. |
| [Syntax:](mod__directive-dict.md#Syntax) | `<RequireAll> ... </RequireAll>` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_core |

`<RequireAll>` and
`</RequireAll>` are used to enclose a group of
authorization directives of which none must fail and at least one
must succeed in order for
the `<RequireAll>` directive to
succeed.

If none of the directives contained within the
`<RequireAll>` directive fails,
and at least one succeeds, then the
`<RequireAll>` directive
succeeds. If none succeed and none fail, then it returns a
neutral result. In all other cases, it fails.

### See also

- [Authorization Containers](#logic)
- [Authorization Result States](#authzresults)
- [Authentication, Authorization,
  and Access Control](howto__auth.md)

[![top](../images/up.gif)](#page-header)

## <RequireAny> Directive [¶](#requireany "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enclose a group of authorization directives of which one must succeed for the enclosing directive to succeed. |
| [Syntax:](mod__directive-dict.md#Syntax) | `<RequireAny> ... </RequireAny>` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_core |

`<RequireAny>` and
`</RequireAny>` are used to enclose a group of
authorization directives of which one must succeed in order for
the `<RequireAny>` directive to
succeed.

If one or more of the directives contained within the
`<RequireAny>` directive succeed,
then the `<RequireAny>` directive
succeeds. If none succeed and none fail, then it returns a
neutral result. In all other cases, it fails.

Because negated authorization directives are unable to
return a successful result, they can not significantly influence
the result of a `<RequireAny>`
directive. (At most they could cause the directive to fail in
the case where they failed and all other directives returned a
neutral value.) Therefore negated authorization directives
are not permitted within a `<RequireAny>`
directive.

### See also

- [Authorization Containers](#logic)
- [Authorization Result States](#authzresults)
- [Authentication, Authorization,
  and Access Control](howto__auth.md)

[![top](../images/up.gif)](#page-header)

## <RequireNone> Directive [¶](#requirenone "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enclose a group of authorization directives of which none must succeed for the enclosing directive to not fail. |
| [Syntax:](mod__directive-dict.md#Syntax) | `<RequireNone> ... </RequireNone>` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_core |

`<RequireNone>` and
`</RequireNone>` are used to enclose a group of
authorization directives of which none must succeed
in order for the
`<RequireNone>` directive to
not fail.

If one or more of the directives contained within the
`<RequireNone>` directive succeed,
then the `<RequireNone>` directive
fails. In all other cases, it returns a neutral result. Thus as with
the other negated authorization directive `Require not`,
it can never independently
authorize a request because it can never return a successful result.
It can be used, however, to restrict the set of users who are
authorized to access a resource.

Because negated authorization directives are unable to
return a successful result, they can not significantly influence
the result of a `<RequireNone>`
directive. Therefore negated authorization directives
are not permitted within a
`<RequireNone>` directive.

### See also

- [Authorization Containers](#logic)
- [Authorization Result States](#authzresults)
- [Authentication, Authorization,
  and Access Control](howto__auth.md)

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authz_core.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authz_core.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
