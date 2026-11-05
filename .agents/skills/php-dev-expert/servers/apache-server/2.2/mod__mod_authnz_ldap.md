# mod_authnz_ldap - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_authnz_ldap.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_authnz_ldap.html) to go to the current version of this document.

# Apache Module mod\_authnz\_ldap

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Allows an LDAP directory to be used to store the database for HTTP Basic authentication. |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authnz\_ldap\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authnz\_ldap.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.1 and later |

### Summary

This module provides authentication front-ends such as
`mod_auth_basic` to authenticate users through
an ldap directory.

`mod_authnz_ldap` supports the following features:

- Known to support the [OpenLDAP SDK](http://www.openldap.org/) (both 1.x
  and 2.x), [Novell LDAP SDK](http://developer.novell.com/ndk/cldap.htm) and the [iPlanet
  (Netscape)](http://www.iplanet.com/downloads/developer/) SDK.
- Complex authorization policies can be implemented by
  representing the policy with LDAP filters.
- Uses extensive caching of LDAP operations via [mod\_ldap](mod__mod_ldap.md).
- Support for LDAP over SSL (requires the Netscape SDK) or
  TLS (requires the OpenLDAP 2.x SDK or Novell LDAP SDK).

When using `mod_auth_basic`, this module is invoked
via the `AuthBasicProvider`
directive with the `ldap` value.

### Topics

- ![](../images/down.gif) [Contents](#contents)
- ![](../images/down.gif) [Operation](#operation)
- ![](../images/down.gif) [The Require Directives](#requiredirectives)
- ![](../images/down.gif) [Examples](#examples)
- ![](../images/down.gif) [Using TLS](#usingtls)
- ![](../images/down.gif) [Using SSL](#usingssl)
- ![](../images/down.gif) [Exposing Login Information](#exposed)
- ![](../images/down.gif) [Using Microsoft
  FrontPage with mod\_authnz\_ldap](#frontpage)

### Directives

- ![](../images/down.gif) [AuthLDAPBindAuthoritative](#authldapbindauthoritative)
- ![](../images/down.gif) [AuthLDAPBindDN](#authldapbinddn)
- ![](../images/down.gif) [AuthLDAPBindPassword](#authldapbindpassword)
- ![](../images/down.gif) [AuthLDAPCharsetConfig](#authldapcharsetconfig)
- ![](../images/down.gif) [AuthLDAPCompareDNOnServer](#authldapcomparednonserver)
- ![](../images/down.gif) [AuthLDAPDereferenceAliases](#authldapdereferencealiases)
- ![](../images/down.gif) [AuthLDAPGroupAttribute](#authldapgroupattribute)
- ![](../images/down.gif) [AuthLDAPGroupAttributeIsDN](#authldapgroupattributeisdn)
- ![](../images/down.gif) [AuthLDAPRemoteUserAttribute](#authldapremoteuserattribute)
- ![](../images/down.gif) [AuthLDAPRemoteUserIsDN](#authldapremoteuserisdn)
- ![](../images/down.gif) [AuthLDAPUrl](#authldapurl)
- ![](../images/down.gif) [AuthzLDAPAuthoritative](#authzldapauthoritative)

### See also

- `mod_ldap`
- `mod_auth_basic`
- `mod_authz_user`
- `mod_authz_groupfile`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Contents

- [Operation](#operation)
  - [The Authentication
    Phase](#authenphase)
  - [The Authorization
    Phase](#authorphase)
- [The Require Directives](#requiredirectives)
  - [Require ldap-user](#requser)
  - [Require ldap-group](#reqgroup)
  - [Require ldap-dn](#reqdn)
  - [Require ldap-attribute](#reqattribute)
  - [Require ldap-filter](#reqfilter)
- [Examples](#examples)
- [Using TLS](#usingtls)
- [Using SSL](#usingssl)
- [Exposing Login Information](#exposed)
- [Using Microsoft FrontPage with
  `mod_authnz_ldap`](#frontpage)
  - [How It Works](#howitworks)
  - [Caveats](#fpcaveats)

[![top](../images/up.gif)](#page-header)

## Operation

There are two phases in granting access to a user. The first
phase is authentication, in which the `mod_authnz_ldap`
authentication provider verifies that the user's credentials are valid.
This is also called the *search/bind* phase. The second phase is
authorization, in which `mod_authnz_ldap` determines
if the authenticated user is allowed access to the resource in
question. This is also known as the *compare*
phase.

`mod_authnz_ldap` registers both an authn\_ldap authentication
provider and an authz\_ldap authorization handler. The authn\_ldap
authentication provider can be enabled through the
`AuthBasicProvider` directive
using the `ldap` value. The authz\_ldap handler extends the
`Require` directive's authorization types
by adding `ldap-user`, `ldap-dn` and `ldap-group`
values.

### The Authentication Phase

During the authentication phase, `mod_authnz_ldap`
searches for an entry in the directory that matches the username
that the HTTP client passes. If a single unique match is found,
then `mod_authnz_ldap` attempts to bind to the
directory server using the DN of the entry plus the password
provided by the HTTP client. Because it does a search, then a
bind, it is often referred to as the search/bind phase. Here are
the steps taken during the search/bind phase.

1. Generate a search filter by combining the attribute and
   filter provided in the `AuthLDAPURL` directive with
   the username passed by the HTTP client.
2. Search the directory using the generated filter. If the
   search does not return exactly one entry, deny or decline
   access.
3. Fetch the distinguished name of the entry retrieved from
   the search and attempt to bind to the LDAP server using the
   DN and the password passed by the HTTP client. If the bind is
   unsuccessful, deny or decline access.

The following directives are used during the search/bind
phase

|  |  |
| --- | --- |
| `AuthLDAPURL` | Specifies the LDAP server, the base DN, the attribute to use in the search, as well as the extra search filter to use. |
| `AuthLDAPBindDN` | An optional DN to bind with during the search phase. |
| `AuthLDAPBindPassword` | An optional password to bind with during the search phase. |

### The Authorization Phase

During the authorization phase, `mod_authnz_ldap`
attempts to determine if the user is authorized to access the
resource. Many of these checks require
`mod_authnz_ldap` to do a compare operation on the
LDAP server. This is why this phase is often referred to as the
compare phase. `mod_authnz_ldap` accepts the
following `Require`
directives to determine if the credentials are acceptable:

- Grant access if there is a [`Require ldap-user`](#reqgroup) directive, and the
  username in the directive matches the username passed by the
  client.
- Grant access if there is a [`Require
  ldap-dn`](#reqdn) directive, and the DN in the directive matches
  the DN fetched from the LDAP directory.
- Grant access if there is a [`Require ldap-group`](#reqgroup) directive, and
  the DN fetched from the LDAP directory (or the username
  passed by the client) occurs in the LDAP group.
- Grant access if there is a [`Require ldap-attribute`](#reqattribute)
  directive, and the attribute fetched from the LDAP directory
  matches the given value.
- Grant access if there is a [`Require ldap-filter`](#reqfilter)
  directive, and the search filter successfully finds a single user
  object that matches the dn of the authenticated user.
- otherwise, deny or decline access

Other `Require` values may also
be used which may require loading additional authorization modules.
Note that if you use a `Require`
value from another authorization module, you will need to ensure that
`AuthzLDAPAuthoritative`
is set to `off` to allow the authorization phase to fall
back to the module providing the alternate
`Require` value. When no
LDAP-specific `Require` directives
are used, authorization is allowed to fall back to other modules
as if `AuthzLDAPAuthoritative`
was set to `off`.

- Grant access to all successfully authenticated users if
  there is a [`Require valid-user`](#requser)
  directive. (requires `mod_authz_user`)
- Grant access if there is a [`Require group`](#reqgroup) directive, and
  `mod_authz_groupfile` has been loaded with the
  `AuthGroupFile`
  directive set.
- others...

`mod_authnz_ldap` uses the following directives during the
compare phase:

|  |  |
| --- | --- |
| `AuthLDAPURL` | The attribute specified in the URL is used in compare operations for the `Require ldap-user` operation. |
| `AuthLDAPCompareDNOnServer` | Determines the behavior of the `Require ldap-dn` directive. |
| `AuthLDAPGroupAttribute` | Determines the attribute to use for comparisons in the `Require ldap-group` directive. |
| `AuthLDAPGroupAttributeIsDN` | Specifies whether to use the user DN or the username when doing comparisons for the `Require ldap-group` directive. |

[![top](../images/up.gif)](#page-header)

## The Require Directives

Apache's `Require`
directives are used during the authorization phase to ensure that
a user is allowed to access a resource. mod\_authnz\_ldap extends the
authorization types with `ldap-user`, `ldap-dn`,
`ldap-group`, `ldap-attribute` and
`ldap-filter`. Other authorization types may also be
used but may require that additional authorization modules be loaded.

### Require ldap-user

The `Require ldap-user` directive specifies what
usernames can access the resource. Once
`mod_authnz_ldap` has retrieved a unique DN from the
directory, it does an LDAP compare operation using the username
specified in the `Require ldap-user` to see if that username
is part of the just-fetched LDAP entry. Multiple users can be
granted access by putting multiple usernames on the line,
separated with spaces. If a username has a space in it, then it
must be surrounded with double quotes. Multiple users can also be
granted access by using multiple `Require ldap-user`
directives, with one user per line. For example, with a `AuthLDAPURL` of
`ldap://ldap/o=Airius?cn` (i.e., `cn` is
used for searches), the following Require directives could be used
to restrict access:

`Require ldap-user "Barbara Jenson"  
Require ldap-user "Fred User"  
Require ldap-user "Joe Manager"`

Because of the way that `mod_authnz_ldap` handles this
directive, Barbara Jenson could sign on as *Barbara
Jenson*, *Babs Jenson* or any other `cn` that
she has in her LDAP entry. Only the single `Require
ldap-user` line is needed to support all values of the attribute
in the user's entry.

If the `uid` attribute was used instead of the
`cn` attribute in the URL above, the above three lines
could be condensed to

`Require ldap-user bjenson fuser jmanager`

### Require ldap-group

This directive specifies an LDAP group whose members are
allowed access. It takes the distinguished name of the LDAP
group. Note: Do not surround the group name with quotes.
For example, assume that the following entry existed in
the LDAP directory:

`dn: cn=Administrators, o=Airius  
objectClass: groupOfUniqueNames  
uniqueMember: cn=Barbara Jenson, o=Airius  
uniqueMember: cn=Fred User, o=Airius`

The following directive would grant access to both Fred and
Barbara:

`Require ldap-group cn=Administrators, o=Airius`

Behavior of this directive is modified by the `AuthLDAPGroupAttribute` and
`AuthLDAPGroupAttributeIsDN`
directives.

### Require ldap-dn

The `Require ldap-dn` directive allows the administrator
to grant access based on distinguished names. It specifies a DN
that must match for access to be granted. If the distinguished
name that was retrieved from the directory server matches the
distinguished name in the `Require ldap-dn`, then
authorization is granted. Note: do not surround the distinguished
name with quotes.

The following directive would grant access to a specific
DN:

`Require ldap-dn cn=Barbara Jenson, o=Airius`

Behavior of this directive is modified by the `AuthLDAPCompareDNOnServer`
directive.

### Require ldap-attribute

The `Require ldap-attribute` directive allows the
administrator to grant access based on attributes of the authenticated
user in the LDAP directory. If the attribute in the directory
matches the value given in the configuration, access is granted.

The following directive would grant access to anyone with
the attribute employeeType = active

`Require ldap-attribute employeeType=active`

Multiple attribute/value pairs can be specified on the same line
separated by spaces or they can be specified in multiple
`Require ldap-attribute` directives. The effect of listing
multiple attribute/values pairs is an OR operation. Access will be
granted if any of the listed attribute values match the value of the
corresponding attribute in the user object. If the value of the
attribute contains a space, only the value must be within double quotes.

The following directive would grant access to anyone with
the city attribute equal to "San Jose" or status equal to "Active"

`Require ldap-attribute city="San Jose" status=active`

### Require ldap-filter

The `Require ldap-filter` directive allows the
administrator to grant access based on a complex LDAP search filter.
If the dn returned by the filter search matches the authenticated user
dn, access is granted.

The following directive would grant access to anyone having a cell phone
and is in the marketing department

`Require ldap-filter &(cell=*)(department=marketing)`

The difference between the `Require ldap-filter` directive and the
`Require ldap-attribute` directive is that `ldap-filter`
performs a search operation on the LDAP directory using the specified search
filter rather than a simple attribute comparison. If a simple attribute
comparison is all that is required, the comparison operation performed by
`ldap-attribute` will be faster than the search operation
used by `ldap-filter` especially within a large directory.

[![top](../images/up.gif)](#page-header)

## Examples

- Grant access to anyone who exists in the LDAP directory,
  using their UID for searches.

  `AuthLDAPURL "ldap://ldap1.airius.com:389/ou=People, o=Airius?uid?sub?(objectClass=*)"  
  Require valid-user`
- The next example is the same as above; but with the fields
  that have useful defaults omitted. Also, note the use of a
  redundant LDAP server.

  `AuthLDAPURL "ldap://ldap1.airius.com ldap2.airius.com/ou=People, o=Airius"  
  Require valid-user`
- The next example is similar to the previous one, but it
  uses the common name instead of the UID. Note that this
  could be problematical if multiple people in the directory
  share the same `cn`, because a search on `cn`
  **must** return exactly one entry. That's why
  this approach is not recommended: it's a better idea to
  choose an attribute that is guaranteed unique in your
  directory, such as `uid`.

  `AuthLDAPURL "ldap://ldap.airius.com/ou=People, o=Airius?cn"  
  Require valid-user`
- Grant access to anybody in the Administrators group. The
  users must authenticate using their UID.

  `AuthLDAPURL ldap://ldap.airius.com/o=Airius?uid  
  Require ldap-group cn=Administrators, o=Airius`
- The next example assumes that everyone at Airius who
  carries an alphanumeric pager will have an LDAP attribute
  of `qpagePagerID`. The example will grant access
  only to people (authenticated via their UID) who have
  alphanumeric pagers:

  `AuthLDAPURL ldap://ldap.airius.com/o=Airius?uid??(qpagePagerID=*)  
  Require valid-user`
- The next example demonstrates the power of using filters
  to accomplish complicated administrative requirements.
  Without filters, it would have been necessary to create a
  new LDAP group and ensure that the group's members remain
  synchronized with the pager users. This becomes trivial
  with filters. The goal is to grant access to anyone who has
  a pager, plus grant access to Joe Manager, who doesn't
  have a pager, but does need to access the same
  resource:

  `AuthLDAPURL ldap://ldap.airius.com/o=Airius?uid??(|(qpagePagerID=*)(uid=jmanager))  
  Require valid-user`

  This last may look confusing at first, so it helps to
  evaluate what the search filter will look like based on who
  connects, as shown below. If
  Fred User connects as `fuser`, the filter would look
  like

  `(&(|(qpagePagerID=*)(uid=jmanager))(uid=fuser))`

  The above search will only succeed if *fuser* has a
  pager. When Joe Manager connects as *jmanager*, the
  filter looks like

  `(&(|(qpagePagerID=*)(uid=jmanager))(uid=jmanager))`

  The above search will succeed whether *jmanager*
  has a pager or not.

[![top](../images/up.gif)](#page-header)

## Using TLS

To use TLS, see the `mod_ldap` directives `LDAPTrustedClientCert`, `LDAPTrustedGlobalCert` and `LDAPTrustedMode`.

An optional second parameter can be added to the
`AuthLDAPURL` to override
the default connection type set by `LDAPTrustedMode`.
This will allow the connection established by an *ldap://* Url
to be upgraded to a secure connection on the same port.

[![top](../images/up.gif)](#page-header)

## Using SSL

To use SSL, see the `mod_ldap` directives `LDAPTrustedClientCert`, `LDAPTrustedGlobalCert` and `LDAPTrustedMode`.

To specify a secure LDAP server, use *ldaps://* in the
`AuthLDAPURL`
directive, instead of *ldap://*.

[![top](../images/up.gif)](#page-header)

## Exposing Login Information

When this module performs authentication, LDAP attributes specified
in the `AuthLDAPUrl`
directive are placed in environment variables with the prefix "AUTHENTICATE\_".

If the attribute field contains the username, common name
and telephone number of a user, a CGI program will have access to
this information without the need to make a second independent LDAP
query to gather this additional information.

This has the potential to dramatically simplify the coding and
configuration required in some web applications.

[![top](../images/up.gif)](#page-header)

## Using Microsoft FrontPage with mod\_authnz\_ldap

Normally, FrontPage uses FrontPage-web-specific user/group
files (i.e., the `mod_authn_file` and
`mod_authz_groupfile` modules) to handle all
authentication. Unfortunately, it is not possible to just
change to LDAP authentication by adding the proper directives,
because it will break the *Permissions* forms in
the FrontPage client, which attempt to modify the standard
text-based authorization files.

Once a FrontPage web has been created, adding LDAP
authentication to it is a matter of adding the following
directives to *every* `.htaccess` file
that gets created in the web

```
AuthLDAPURL            "the url"
AuthGroupFile mygroupfile
Require group mygroupfile
```

### How It Works

FrontPage restricts access to a web by adding the `Require
valid-user` directive to the `.htaccess`
files. The `Require valid-user` directive will succeed for
any user who is valid *as far as LDAP is
concerned*. This means that anybody who has an entry in
the LDAP directory is considered a valid user, whereas FrontPage
considers only those people in the local user file to be
valid. By substituting the ldap-group with group file authorization,
Apache is allowed to consult the local user file (which is managed by
FrontPage) - instead of LDAP - when handling authorizing the user.

Once directives have been added as specified above,
FrontPage users will be able to perform all management
operations from the FrontPage client.

### Caveats

- When choosing the LDAP URL, the attribute to use for
  authentication should be something that will also be valid
  for putting into a `mod_authn_file` user file.
  The user ID is ideal for this.
- When adding users via FrontPage, FrontPage administrators
  should choose usernames that already exist in the LDAP
  directory (for obvious reasons). Also, the password that the
  administrator enters into the form is ignored, since Apache
  will actually be authenticating against the password in the
  LDAP database, and not against the password in the local user
  file. This could cause confusion for web administrators.
- Apache must be compiled with `mod_auth_basic`,
  `mod_authn_file` and
  `mod_authz_groupfile` in order to
  use FrontPage support. This is because Apache will still use
  the `mod_authz_groupfile` group file for determine
  the extent of a user's access to the FrontPage web.
- The directives must be put in the `.htaccess`
  files. Attempting to put them inside `<Location>` or `<Directory>` directives won't work. This
  is because `mod_authnz_ldap` has to be able to grab
  the `AuthGroupFile`
  directive that is found in FrontPage `.htaccess`
  files so that it knows where to look for the valid user list. If
  the `mod_authnz_ldap` directives aren't in the same
  `.htaccess` file as the FrontPage directives, then
  the hack won't work, because `mod_authnz_ldap` will
  never get a chance to process the `.htaccess` file,
  and won't be able to find the FrontPage-managed user file.

[![top](../images/up.gif)](#page-header)

## AuthLDAPBindAuthoritative Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines if other authentication providers are used when a user can be mapped to a DN but the server cannot successfully bind with the user's credentials. |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPBindAuthoritativeoff|on` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPBindAuthoritative on` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in versions later than 2.2.14 |

By default, subsequent authentication providers are only queried if a
user cannot be mapped to a DN, but not if the user can be mapped to a DN and their
password cannot be verified with an LDAP bind.
If `AuthLDAPBindAuthoritative`
is set to *off*, other configured authentication modules will have
a chance to validate the user if the LDAP bind (with the current user's credentials)
fails for any reason.

This allows users present in both LDAP and
`AuthUserFile` to authenticate
when the LDAP server is available but the user's account is locked or password
is otherwise unusable.

### See also

- `AuthUserFile`
- `AuthBasicProvider`

[![top](../images/up.gif)](#page-header)

## AuthLDAPBindDN Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Optional DN to use in binding to the LDAP server |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPBindDN distinguished-name` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

An optional DN used to bind to the server when searching for
entries. If not provided, `mod_authnz_ldap` will use
an anonymous bind.

[![top](../images/up.gif)](#page-header)

## AuthLDAPBindPassword Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Password used in conjuction with the bind DN |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPBindPassword password` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |
| [Compatibility:](mod__directive-dict.md#Compatibility) | *exec:* was added in 2.2.25. |

A bind password to use in conjunction with the bind DN. Note
that the bind password is probably sensitive data, and should be
properly protected. You should only use the `AuthLDAPBindDN` and `AuthLDAPBindPassword` if you
absolutely need them to search the directory.

If the value begins with exec: the resulting command will be
executed and the first line returned to standard output by the
program will be used as the password.

```
#Password used as-is
AuthLDAPBindPassword secret

#Run /path/to/program to get my password
AuthLDAPBindPassword exec:/path/to/program

#Run /path/to/otherProgram and provide arguments
AuthLDAPBindPassword "exec:/path/to/otherProgram argument1"
```

[![top](../images/up.gif)](#page-header)

## AuthLDAPCharsetConfig Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Language to charset conversion configuration file |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPCharsetConfig file-path` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

The `AuthLDAPCharsetConfig` directive sets the location
of the language to charset conversion configuration file. File-path is relative
to the `ServerRoot`. This file specifies
the list of language extensions to character sets.
Most administrators use the provided `charset.conv`
file, which associates common language extensions to character sets.

The file contains lines in the following format:

`Language-Extension charset [Language-String] ...`

The case of the extension does not matter. Blank lines, and lines
beginning with a hash character (`#`) are ignored.

[![top](../images/up.gif)](#page-header)

## AuthLDAPCompareDNOnServer Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Use the LDAP server to compare the DNs |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPCompareDNOnServer on|off` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPCompareDNOnServer on` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

When set, `mod_authnz_ldap` will use the LDAP
server to compare the DNs. This is the only foolproof way to
compare DNs. `mod_authnz_ldap` will search the
directory for the DN specified with the [`Require dn`](#reqdn) directive, then,
retrieve the DN and compare it with the DN retrieved from the user
entry. If this directive is not set,
`mod_authnz_ldap` simply does a string comparison. It
is possible to get false negatives with this approach, but it is
much faster. Note the `mod_ldap` cache can speed up
DN comparison in most situations.

[![top](../images/up.gif)](#page-header)

## AuthLDAPDereferenceAliases Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | When will the module de-reference aliases |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPDereferenceAliases never|searching|finding|always` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPDereferenceAliases Always` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

This directive specifies when `mod_authnz_ldap` will
de-reference aliases during LDAP operations. The default is
`always`.

[![top](../images/up.gif)](#page-header)

## AuthLDAPGroupAttribute Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | LDAP attributes used to check for group membership |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPGroupAttribute attribute` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPGroupAttribute member uniquemember` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

This directive specifies which LDAP attributes are used to
check for group membership. Multiple attributes can be used by
specifying this directive multiple times. If not specified,
then `mod_authnz_ldap` uses the `member` and
`uniquemember` attributes.

[![top](../images/up.gif)](#page-header)

## AuthLDAPGroupAttributeIsDN Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Use the DN of the client username when checking for group membership |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPGroupAttributeIsDN on|off` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPGroupAttributeIsDN on` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

When set `on`, this directive says to use the
distinguished name of the client username when checking for group
membership. Otherwise, the username will be used. For example,
assume that the client sent the username `bjenson`,
which corresponds to the LDAP DN `cn=Babs Jenson,
o=Airius`. If this directive is set,
`mod_authnz_ldap` will check if the group has
`cn=Babs Jenson, o=Airius` as a member. If this
directive is not set, then `mod_authnz_ldap` will
check if the group has `bjenson` as a member.

[![top](../images/up.gif)](#page-header)

## AuthLDAPRemoteUserAttribute Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Use the value of the attribute returned during the user query to set the REMOTE\_USER environment variable |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPRemoteUserAttribute uid` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

If this directive is set, the value of the
`REMOTE_USER` environment variable will be set to the
value of the attribute specified. Make sure that this attribute is
included in the list of attributes in the AuthLDAPUrl definition,
otherwise this directive will have no effect. This directive, if
present, takes precedence over AuthLDAPRemoteUserIsDN. This
directive is useful should you want people to log into a website
using an email address, but a backend application expects the
username as a userid.

[![top](../images/up.gif)](#page-header)

## AuthLDAPRemoteUserIsDN Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Use the DN of the client username to set the REMOTE\_USER environment variable |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPRemoteUserIsDN on|off` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPRemoteUserIsDN off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

If this directive is set to on, the value of the
`REMOTE_USER` environment variable will be set to the full
distinguished name of the authenticated user, rather than just
the username that was passed by the client. It is turned off by
default.

[![top](../images/up.gif)](#page-header)

## AuthLDAPUrl Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | URL specifying the LDAP search parameters |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPUrl url [NONE|SSL|TLS|STARTTLS]` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

An RFC 2255 URL which specifies the LDAP search parameters
to use. The syntax of the URL is

`ldap://host:port/basedn?attribute?scope?filter`

ldap
:   For regular ldap, use the
    string `ldap`. For secure LDAP, use `ldaps`
    instead. Secure LDAP is only available if Apache was linked
    to an LDAP library with SSL support.

host:port
:   The name/port of the ldap server (defaults to
    `localhost:389` for `ldap`, and
    `localhost:636` for `ldaps`). To
    specify multiple, redundant LDAP servers, just list all
    servers, separated by spaces. `mod_authnz_ldap`
    will try connecting to each server in turn, until it makes a
    successful connection.

    Once a connection has been made to a server, that
    connection remains active for the life of the
    `httpd` process, or until the LDAP server goes
    down.

    If the LDAP server goes down and breaks an existing
    connection, `mod_authnz_ldap` will attempt to
    re-connect, starting with the primary server, and trying
    each redundant server in turn. Note that this is different
    than a true round-robin search.

basedn
:   The DN of the branch of the
    directory where all searches should start from. At the very
    least, this must be the top of your directory tree, but
    could also specify a subtree in the directory.

attribute
:   The attribute to search for.
    Although RFC 2255 allows a comma-separated list of
    attributes, only the first attribute will be used, no
    matter how many are provided. If no attributes are
    provided, the default is to use `uid`. It's a good
    idea to choose an attribute that will be unique across all
    entries in the subtree you will be using.

scope
:   The scope of the search. Can be either `one` or
    `sub`. Note that a scope of `base` is
    also supported by RFC 2255, but is not supported by this
    module. If the scope is not provided, or if `base` scope
    is specified, the default is to use a scope of
    `sub`.

filter
:   A valid LDAP search filter. If
    not provided, defaults to `(objectClass=*)`, which
    will search for all objects in the tree. Filters are
    limited to approximately 8000 characters (the definition of
    `MAX_STRING_LEN` in the Apache source code). This
    should be more than sufficient for any application.

When doing searches, the attribute, filter and username passed
by the HTTP client are combined to create a search filter that
looks like
`(&(filter)(attribute=username))`.

For example, consider an URL of
`ldap://ldap.airius.com/o=Airius?cn?sub?(posixid=*)`. When
a client attempts to connect using a username of `Babs
Jenson`, the resulting search filter will be
`(&(posixid=*)(cn=Babs Jenson))`.

An optional parameter can be added to allow the LDAP Url to override
the connection type. This parameter can be one of the following:

NONE
:   Establish an unsecure connection on the default LDAP port. This
    is the same as `ldap://` on port 389.

SSL
:   Establish a secure connection on the default secure LDAP port.
    This is the same as `ldaps://`

TLS | STARTTLS
:   Establish an upgraded secure connection on the default LDAP port.
    This connection will be initiated on port 389 by default and then
    upgraded to a secure connection on the same port.

See above for examples of `AuthLDAPURL` URLs.

When `AuthLDAPURL`
is enabled in a particular context, but some other module has performed
authentication for the request, the server will try to map the username to a DN
during authorization regardless of whether or not LDAP-specific requirements
are present. To ignore the failures to map a username to a DN during
authorization, set `AuthzLDAPAuthoritative` to "off".

[![top](../images/up.gif)](#page-header)

## AuthzLDAPAuthoritative Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Prevent other authentication modules from authenticating the user if this one fails |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthzLDAPAuthoritative on|off` |
| [Default:](mod__directive-dict.md#Default) | `AuthzLDAPAuthoritative on` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

Set to `off` if this module should let other
authorization modules attempt to authorize the user, should
authorization with this module fail. Control is only passed on
to lower modules if there is no DN or rule that matches the
supplied user name (as passed by the client).

When no LDAP-specific `Require` directives
are used, authorization is allowed to fall back to other modules
as if `AuthzLDAPAuthoritative`
was set to `off`.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_authnz_ldap.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/mod/mod_authnz_ldap.html "Français")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
