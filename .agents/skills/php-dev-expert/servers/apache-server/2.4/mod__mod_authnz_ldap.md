# mod_authnz_ldap - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authnz_ldap.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_authnz\_ldap

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Allows an LDAP directory to be used to store the database for HTTP Basic authentication. |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authnz\_ldap\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authnz\_ldap.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.1 and later |

### Summary

This module allows authentication front-ends such as
`mod_auth_basic` to authenticate users through
an ldap directory.

`mod_authnz_ldap` supports the following features:

- Known to support the [OpenLDAP SDK](http://www.openldap.org/) (both 1.x
  and 2.x).
- Complex authorization policies can be implemented by
  representing the policy with LDAP filters.
- Uses extensive caching of LDAP operations via [mod\_ldap](mod__mod_ldap.md).
- Support for LDAP over SSL/TLS (requires the OpenLDAP 2.x SDK).

When using `mod_auth_basic`, this module is invoked
via the `AuthBasicProvider`
directive with the `ldap` value.

### Topics

- ![](../images/down.gif) [Contents](#contents)
- ![](../images/down.gif) [General caveats](#gcaveats)
- ![](../images/down.gif) [Operation](#operation)
- ![](../images/down.gif) [The Require Directives](#requiredirectives)
- ![](../images/down.gif) [Examples](#examples)
- ![](../images/down.gif) [Using TLS](#usingtls)
- ![](../images/down.gif) [Using SSL](#usingssl)
- ![](../images/down.gif) [Exposing Login Information](#exposed)
- ![](../images/down.gif) [Using Active Directory](#activedirectory)
- ![](../images/down.gif) [Using Microsoft
  FrontPage with mod\_authnz\_ldap](#frontpage)

### Directives

- ![](../images/down.gif) [AuthLDAPAuthorizePrefix](#authldapauthorizeprefix)
- ![](../images/down.gif) [AuthLDAPBindAuthoritative](#authldapbindauthoritative)
- ![](../images/down.gif) [AuthLDAPBindDN](#authldapbinddn)
- ![](../images/down.gif) [AuthLDAPBindPassword](#authldapbindpassword)
- ![](../images/down.gif) [AuthLDAPCharsetConfig](#authldapcharsetconfig)
- ![](../images/down.gif) [AuthLDAPCompareAsUser](#authldapcompareasuser)
- ![](../images/down.gif) [AuthLDAPCompareDNOnServer](#authldapcomparednonserver)
- ![](../images/down.gif) [AuthLDAPDereferenceAliases](#authldapdereferencealiases)
- ![](../images/down.gif) [AuthLDAPGroupAttribute](#authldapgroupattribute)
- ![](../images/down.gif) [AuthLDAPGroupAttributeIsDN](#authldapgroupattributeisdn)
- ![](../images/down.gif) [AuthLDAPInitialBindAsUser](#authldapinitialbindasuser)
- ![](../images/down.gif) [AuthLDAPInitialBindPattern](#authldapinitialbindpattern)
- ![](../images/down.gif) [AuthLDAPMaxSubGroupDepth](#authldapmaxsubgroupdepth)
- ![](../images/down.gif) [AuthLDAPRemoteUserAttribute](#authldapremoteuserattribute)
- ![](../images/down.gif) [AuthLDAPRemoteUserIsDN](#authldapremoteuserisdn)
- ![](../images/down.gif) [AuthLDAPSearchAsUser](#authldapsearchasuser)
- ![](../images/down.gif) [AuthLDAPSubGroupAttribute](#authldapsubgroupattribute)
- ![](../images/down.gif) [AuthLDAPSubGroupClass](#authldapsubgroupclass)
- ![](../images/down.gif) [AuthLDAPURL](#authldapurl)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authnz_ldap)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authnz_ldap)

### See also

- `mod_ldap`
- `mod_auth_basic`
- `mod_authz_user`
- `mod_authz_groupfile`

[![top](../images/up.gif)](#page-header)

## Contents [¶](#contents "Permanent link")

- [General caveats](#gcaveats)
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
  - [Require ldap-search](#reqsearch)
- [Examples](#examples)
- [Using TLS](#usingtls)
- [Using SSL](#usingssl)
- [Exposing Login Information](#exposed)
- [Using Active Directory](#activedirectory)
- [Using Microsoft FrontPage with
  `mod_authnz_ldap`](#frontpage)
  - [How It Works](#howitworks)
  - [Caveats](#fpcaveats)

[![top](../images/up.gif)](#page-header)

## General caveats [¶](#gcaveats "Permanent link")

This module caches authentication and authorization results based
on the configuration of `mod_ldap`. Changes
made to the backing LDAP server will not be immediately reflected on the
HTTP Server, including but not limited to user lockouts/revocations,
password changes, or changes to group memberships. Consult the directives
in `mod_ldap` for details of the cache tunables.

[![top](../images/up.gif)](#page-header)

## Operation [¶](#operation "Permanent link")

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
   the search and attempt to bind to the LDAP server using that
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
  passed by the client) occurs in the LDAP group or, potentially, in
  one of its sub-groups.
- Grant access if there is a [`Require ldap-attribute`](#reqattribute)
  directive, and the attribute fetched from the LDAP directory
  matches the given value.
- Grant access if there is a [`Require ldap-filter`](#reqfilter)
  directive, and the search filter successfully finds a single user
  object that matches the dn of the authenticated user.
- Grant access if there is a [`Require ldap-search`](#reqsearch)
  directive, and the search filter successfully returns a single
  matching object with any distinguished name.
- otherwise, deny or decline access

Other `Require` values may also
be used which may require loading additional authorization modules.

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
| `AuthLDAPMaxSubGroupDepth` | Determines the maximum depth of sub-groups that will be evaluated during comparisons in the `Require ldap-group` directive. |
| `AuthLDAPSubGroupAttribute` | Determines the attribute to use when obtaining sub-group members of the current group during comparisons in the `Require ldap-group` directive. |
| `AuthLDAPSubGroupClass` | Specifies the LDAP objectClass values used to identify if queried directory objects really are group objects (as opposed to user objects) during the `Require ldap-group` directive's sub-group processing. |

[![top](../images/up.gif)](#page-header)

## The Require Directives [¶](#requiredirectives "Permanent link")

Apache's `Require`
directives are used during the authorization phase to ensure that
a user is allowed to access a resource. mod\_authnz\_ldap extends the
authorization types with `ldap-user`, `ldap-dn`,
`ldap-group`, `ldap-attribute` and
`ldap-filter`. Other authorization types may also be
used but may require that additional authorization modules be loaded.

Since v2.4.8, [expressions](expr.md) are supported
within the LDAP require directives.

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
`ldap://ldap/o=Example?cn` (i.e., `cn` is
used for searches), the following Require directives could be used
to restrict access:

```
Require ldap-user "Barbara Jenson"
Require ldap-user "Fred User"
Require ldap-user "Joe Manager"
```

Because of the way that `mod_authnz_ldap` handles this
directive, Barbara Jenson could sign on as `Barbara
Jenson`, `Babs Jenson` or any other `cn` that
she has in her LDAP entry. Only the single `Require
ldap-user` line is needed to support all values of the attribute
in the user's entry.

If the `uid` attribute was used instead of the
`cn` attribute in the URL above, the above three lines
could be condensed to

```
Require ldap-user bjenson fuser jmanager
```

### Require ldap-group

This directive specifies an LDAP group whose members are
allowed access. It takes the distinguished name of the LDAP
group.

Do not surround the group name with quotes.
Unlike `Require ldap-user`, the `ldap-group`
provider does not support quoted values.

For example, assume that the following entry existed in
the LDAP directory:

```
dn: cn=Administrators, o=Example
objectClass: groupOfUniqueNames
uniqueMember: cn=Barbara Jenson, o=Example
uniqueMember: cn=Fred User, o=Example
```

The following directive would grant access to both Fred and
Barbara:

```
Require ldap-group cn=Administrators, o=Example
```

Members can also be found within sub-groups of a specified LDAP group
if `AuthLDAPMaxSubGroupDepth`
is set to a value greater than 0. For example, assume the following entries
exist in the LDAP directory:

```
dn: cn=Employees, o=Example
objectClass: groupOfUniqueNames
uniqueMember: cn=Managers, o=Example
uniqueMember: cn=Administrators, o=Example
uniqueMember: cn=Users, o=Example

dn: cn=Managers, o=Example
objectClass: groupOfUniqueNames
uniqueMember: cn=Bob Ellis, o=Example
uniqueMember: cn=Tom Jackson, o=Example

dn: cn=Administrators, o=Example
objectClass: groupOfUniqueNames
uniqueMember: cn=Barbara Jenson, o=Example
uniqueMember: cn=Fred User, o=Example

dn: cn=Users, o=Example
objectClass: groupOfUniqueNames
uniqueMember: cn=Allan Jefferson, o=Example
uniqueMember: cn=Paul Tilley, o=Example
uniqueMember: cn=Temporary Employees, o=Example

dn: cn=Temporary Employees, o=Example
objectClass: groupOfUniqueNames
uniqueMember: cn=Jim Swenson, o=Example
uniqueMember: cn=Elliot Rhodes, o=Example
```

The following directives would allow access for Bob Ellis, Tom Jackson,
Barbara Jenson, Fred User, Allan Jefferson, and Paul Tilley but would not
allow access for Jim Swenson, or Elliot Rhodes (since they are at a
sub-group depth of 2):

```
Require ldap-group cn=Employees, o=Example
AuthLDAPMaxSubGroupDepth 1
```

Behavior of this directive is modified by the `AuthLDAPGroupAttribute`, `AuthLDAPGroupAttributeIsDN`, `AuthLDAPMaxSubGroupDepth`, `AuthLDAPSubGroupAttribute`, and `AuthLDAPSubGroupClass`
directives.

### Require ldap-dn

The `Require ldap-dn` directive allows the administrator
to grant access based on distinguished names. It specifies a DN
that must match for access to be granted. If the distinguished
name that was retrieved from the directory server matches the
distinguished name in the `Require ldap-dn`, then
authorization is granted.

Do not surround the distinguished name with
quotes. Unlike `Require ldap-user`, the
`ldap-dn` provider does not support quoted values.

The following directive would grant access to a specific
DN:

```
Require ldap-dn cn=Barbara Jenson, o=Example
```

Behavior of this directive is modified by the `AuthLDAPCompareDNOnServer`
directive.

### Require ldap-attribute

The `Require ldap-attribute` directive allows the
administrator to grant access based on attributes of the authenticated
user in the LDAP directory. If the attribute in the directory
matches the value given in the configuration, access is granted.

The following directive would grant access to anyone with
the attribute employeeType = active

```
Require ldap-attribute employeeType="active"
```

Multiple attribute/value pairs can be specified on the same line
separated by spaces or they can be specified in multiple
`Require ldap-attribute` directives. The effect of listing
multiple attribute/values pairs is an OR operation. Access will be
granted if any of the listed attribute values match the value of the
corresponding attribute in the user object. If the value of the
attribute contains a space, only the value must be within double quotes.

The following directive would grant access to anyone with
the city attribute equal to "San Jose" or status equal to "Active"

```
Require ldap-attribute city="San Jose" status="active"
```

### Require ldap-filter

The `Require ldap-filter` directive allows the
administrator to grant access based on a complex LDAP search filter.
If the dn returned by the filter search matches the authenticated user
dn, access is granted.

The following directive would grant access to anyone having a cell phone
and is in the marketing department

```
Require ldap-filter "&(cell=*)(department=marketing)"
```

The difference between the `Require ldap-filter` directive and the
`Require ldap-attribute` directive is that `ldap-filter`
performs a search operation on the LDAP directory using the specified search
filter rather than a simple attribute comparison. If a simple attribute
comparison is all that is required, the comparison operation performed by
`ldap-attribute` will be faster than the search operation
used by `ldap-filter` especially within a large directory.

When using an [expression](expr.md) within the filter, care
must be taken to ensure that LDAP filters are escaped correctly to guard against
LDAP injection. The ldap function can be used for this purpose.

```
<LocationMatch ^/dav/(?<SITENAME>[^/]+)/>
  Require ldap-filter (memberOf=cn=%{ldap:%{unescape:%{env:MATCH_SITENAME}},ou=Websites,o=Example)
</LocationMatch>
```

### Require ldap-search

The `Require ldap-search` directive allows the
administrator to grant access based on a generic LDAP search filter using an
[expression](expr.md). If there is exactly one match to the search filter,
regardless of the distinguished name, access is granted.

The following directive would grant access to URLs that match the given objects in the
LDAP server:

```
<LocationMatch ^/dav/(?<SITENAME>[^/]+)/>
Require ldap-search (cn=%{ldap:%{unescape:%{env:MATCH_SITENAME}} Website)
</LocationMatch>
```

Note: care must be taken to ensure that any expressions are properly escaped to guard
against LDAP injection. The **ldap** function can be used as per the example
above.

[![top](../images/up.gif)](#page-header)

## Examples [¶](#examples "Permanent link")

- Grant access to anyone who exists in the LDAP directory,
  using their UID for searches.

  ```
  AuthLDAPURL "ldap://ldap1.example.com:389/ou=People, o=Example?uid?sub?(objectClass=*)"
  Require valid-user
  ```
- The next example is the same as above; but with the fields
  that have useful defaults omitted. Also, note the use of a
  redundant LDAP server.

  ```
  AuthLDAPURL "ldap://ldap1.example.com ldap2.example.com/ou=People, o=Example"
  Require valid-user
  ```
- The next example is similar to the previous one, but it
  uses the common name instead of the UID. Note that this
  could be problematical if multiple people in the directory
  share the same `cn`, because a search on `cn`
  **must** return exactly one entry. That's why
  this approach is not recommended: it's a better idea to
  choose an attribute that is guaranteed unique in your
  directory, such as `uid`.

  ```
  AuthLDAPURL "ldap://ldap.example.com/ou=People, o=Example?cn"
  Require valid-user
  ```
- Grant access to anybody in the Administrators group. The
  users must authenticate using their UID.

  ```
  AuthLDAPURL ldap://ldap.example.com/o=Example?uid
  Require ldap-group cn=Administrators, o=Example
  ```
- Grant access to anybody in the group whose name matches the
  hostname of the virtual host. In this example an
  [expression](expr.md) is used to build the filter.

  ```
  AuthLDAPURL ldap://ldap.example.com/o=Example?uid
  Require ldap-group cn=%{SERVER_NAME}, o=Example
  ```
- The next example assumes that everyone at Example who
  carries an alphanumeric pager will have an LDAP attribute
  of `qpagePagerID`. The example will grant access
  only to people (authenticated via their UID) who have
  alphanumeric pagers:

  ```
  AuthLDAPURL ldap://ldap.example.com/o=Example?uid??(qpagePagerID=*)
  Require valid-user
  ```
- The next example demonstrates the power of using filters
  to accomplish complicated administrative requirements.
  Without filters, it would have been necessary to create a
  new LDAP group and ensure that the group's members remain
  synchronized with the pager users. This becomes trivial
  with filters. The goal is to grant access to anyone who has
  a pager, plus grant access to Joe Manager, who doesn't
  have a pager, but does need to access the same
  resource:

  ```
  AuthLDAPURL ldap://ldap.example.com/o=Example?uid??(|(qpagePagerID=*)(uid=jmanager))
  Require valid-user
  ```

  This last may look confusing at first, so it helps to
  evaluate what the search filter will look like based on who
  connects, as shown below. If
  Fred User connects as `fuser`, the filter would look
  like

  `(&(|(qpagePagerID=*)(uid=jmanager))(uid=fuser))`

  The above search will only succeed if `fuser` has a
  pager. When Joe Manager connects as `jmanager`, the
  filter looks like

  `(&(|(qpagePagerID=*)(uid=jmanager))(uid=jmanager))`

  The above search will succeed whether `jmanager`
  has a pager or not.

[![top](../images/up.gif)](#page-header)

## Using TLS [¶](#usingtls "Permanent link")

To use TLS, see the `mod_ldap` directives `LDAPTrustedClientCert`, `LDAPTrustedGlobalCert` and `LDAPTrustedMode`.

An optional second parameter can be added to the
`AuthLDAPURL` to override
the default connection type set by `LDAPTrustedMode`.
This will allow the connection established by an `ldap://` Url
to be upgraded to a secure connection on the same port.

[![top](../images/up.gif)](#page-header)

## Using SSL [¶](#usingssl "Permanent link")

To use SSL, see the `mod_ldap` directives `LDAPTrustedClientCert`, `LDAPTrustedGlobalCert` and `LDAPTrustedMode`.

To specify a secure LDAP server, use `ldaps://` in the
`AuthLDAPURL`
directive, instead of `ldap://`.

[![top](../images/up.gif)](#page-header)

## Exposing Login Information [¶](#exposed "Permanent link")

when this module performs *authentication*, ldap attributes specified
in the `AuthLDAPURL`
directive are placed in environment variables with the prefix "AUTHENTICATE\_".

when this module performs *authorization*, ldap attributes specified
in the `AuthLDAPURL`
directive are placed in environment variables with the prefix "AUTHORIZE\_".

If the attribute field contains the username, common name
and telephone number of a user, a CGI program will have access to
this information without the need to make a second independent LDAP
query to gather this additional information.

This has the potential to dramatically simplify the coding and
configuration required in some web applications.

[![top](../images/up.gif)](#page-header)

## Using Active Directory [¶](#activedirectory "Permanent link")

An Active Directory installation may support multiple domains at the
same time. To distinguish users between domains, an identifier called
a User Principle Name (UPN) can be added to a user's entry in the
directory. This UPN usually takes the form of the user's account
name, followed by the domain components of the particular domain,
for example `somebody@nz.example.com`.

You may wish to configure the `mod_authnz_ldap`
module to authenticate users present in any of the domains making up
the Active Directory forest. In this way both
`somebody@nz.example.com` and `someone@au.example.com`
can be authenticated using the same query at the same time.

To make this practical, Active Directory supports the concept of
a Global Catalog. This Global Catalog is a read only copy of selected
attributes of all the Active Directory servers within the Active
Directory forest. Querying the Global Catalog allows all the domains
to be queried in a single query, without the query spanning servers
over potentially slow links.

If enabled, the Global Catalog is an independent directory server
that runs on port 3268 (3269 for SSL). To search for a user, do a
subtree search for the attribute `userPrincipalName`, with
an empty search root, like so:

```
AuthLDAPBindDN apache@example.com
AuthLDAPBindPassword password
AuthLDAPURL ldap://10.0.0.1:3268/?userPrincipalName?sub
```

Users will need to enter their User Principal Name as a login, in
the form `somebody@nz.example.com`.

[![top](../images/up.gif)](#page-header)

## Using Microsoft FrontPage with mod\_authnz\_ldap [¶](#frontpage "Permanent link")

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
AuthLDAPURL       "the url"
AuthGroupFile     "mygroupfile"
Require group     "mygroupfile"
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

## AuthLDAPAuthorizePrefix Directive [¶](#authldapauthorizeprefix "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specifies the prefix for environment variables set during authorization |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPAuthorizePrefix prefix` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPAuthorizePrefix AUTHORIZE_` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.3.6 and later |

This directive allows you to override the prefix used for environment
variables set during LDAP authorization. If `AUTHENTICATE_` is
specified, consumers of these environment variables see the same information
whether LDAP has performed authentication, authorization, or both.

### Note

No authorization variables are set when a user is authorized on the basis of
`Require valid-user`.

[![top](../images/up.gif)](#page-header)

## AuthLDAPBindAuthoritative Directive [¶](#authldapbindauthoritative "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines if other authentication providers are used when a user can be mapped to a DN but the server cannot successfully bind with the user's credentials. |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPBindAuthoritative off|on` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPBindAuthoritative on` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

By default, subsequent authentication providers are only queried if a
user cannot be mapped to a DN, but not if the user can be mapped to a DN and their
password cannot be verified with an LDAP bind.
If `AuthLDAPBindAuthoritative`
is set to `off`, other configured authentication modules will have
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

## AuthLDAPBindDN Directive [¶](#authldapbinddn "Permanent link")

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

## AuthLDAPBindPassword Directive [¶](#authldapbindpassword "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Password used in conjunction with the bind DN |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPBindPassword password` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |
| [Compatibility:](mod__directive-dict.md#Compatibility) | `exec:` was added in 2.4.5. |

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

## AuthLDAPCharsetConfig Directive [¶](#authldapcharsetconfig "Permanent link")

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

## AuthLDAPCompareAsUser Directive [¶](#authldapcompareasuser "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Use the authenticated user's credentials to perform authorization comparisons |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPCompareAsUser on|off` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPCompareAsUser off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.3.6 and later |

When set, and `mod_authnz_ldap` has authenticated the
user, LDAP comparisons for authorization use the queried distinguished name (DN)
and HTTP basic authentication password of the authenticated user instead of
the servers configured credentials.

The `ldap-attribute`, `ldap-user`, and `ldap-group` (single-level only)
authorization checks use comparisons.

This directive only has effect on the comparisons performed during
nested group processing when `AuthLDAPSearchAsUser` is also enabled.

This directive should only be used when your LDAP server doesn't
accept anonymous comparisons and you cannot use a dedicated
`AuthLDAPBindDN`.

### See also

- `AuthLDAPInitialBindAsUser`
- `AuthLDAPSearchAsUser`

[![top](../images/up.gif)](#page-header)

## AuthLDAPCompareDNOnServer Directive [¶](#authldapcomparednonserver "Permanent link")

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

## AuthLDAPDereferenceAliases Directive [¶](#authldapdereferencealiases "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | When will the module de-reference aliases |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPDereferenceAliases never|searching|finding|always` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPDereferenceAliases always` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

This directive specifies when `mod_authnz_ldap` will
de-reference aliases during LDAP operations. The default is
`always`.

[![top](../images/up.gif)](#page-header)

## AuthLDAPGroupAttribute Directive [¶](#authldapgroupattribute "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | LDAP attributes used to identify the user members of groups. |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPGroupAttribute attribute` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPGroupAttribute member uniqueMember` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

This directive specifies which LDAP attributes are used to
check for user members within groups. Multiple attributes can be used
by specifying this directive multiple times. If not specified,
then `mod_authnz_ldap` uses the `member` and
`uniqueMember` attributes.

[![top](../images/up.gif)](#page-header)

## AuthLDAPGroupAttributeIsDN Directive [¶](#authldapgroupattributeisdn "Permanent link")

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
o=Example`. If this directive is set,
`mod_authnz_ldap` will check if the group has
`cn=Babs Jenson, o=Example` as a member. If this
directive is not set, then `mod_authnz_ldap` will
check if the group has `bjenson` as a member.

[![top](../images/up.gif)](#page-header)

## AuthLDAPInitialBindAsUser Directive [¶](#authldapinitialbindasuser "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines if the server does the initial DN lookup using the basic authentication users' own username, instead of anonymously or with hard-coded credentials for the server |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPInitialBindAsUser off|on` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPInitialBindAsUser off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.3.6 and later |

By default, the server either anonymously, or with a dedicated user and
password, converts the basic authentication username into an LDAP
distinguished name (DN). This directive forces the server to use the verbatim username
and password provided by the incoming user to perform the initial DN
search.

If the verbatim username can't directly bind, but needs some
cosmetic transformation, see `AuthLDAPInitialBindPattern`.

This directive should only be used when your LDAP server doesn't
accept anonymous searches and you cannot use a dedicated
`AuthLDAPBindDN`.

### Not available with authorization-only

This directive can only be used if this module authenticates the user, and
has no effect when this module is used exclusively for authorization.

### See also

- `AuthLDAPInitialBindPattern`
- `AuthLDAPBindDN`
- `AuthLDAPCompareAsUser`
- `AuthLDAPSearchAsUser`

[![top](../images/up.gif)](#page-header)

## AuthLDAPInitialBindPattern Directive [¶](#authldapinitialbindpattern "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specifies the transformation of the basic authentication username to be used when binding to the LDAP server to perform a DN lookup |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPInitialBindPattern regex substitution` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPInitialBindPattern (.*) $1 (remote username used verbatim)` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.3.6 and later |

If `AuthLDAPInitialBindAsUser` is set to
`ON`, the basic authentication username will be transformed according to the
regular expression and substitution arguments.

The regular expression argument is compared against the current basic authentication username.
The substitution argument may contain backreferences, but has no other variable interpolation.

This directive should only be used when your LDAP server doesn't
accept anonymous searches and you cannot use a dedicated
`AuthLDAPBindDN`.

```
AuthLDAPInitialBindPattern (.+) $1@example.com
```

```
AuthLDAPInitialBindPattern (.+) cn=$1,dc=example,dc=com
```

### Not available with authorization-only

This directive can only be used if this module authenticates the user, and
has no effect when this module is used exclusively for authorization.

### debugging

The substituted DN is recorded in the environment variable
`LDAP_BINDASUSER`. If the regular expression does not match the input,
the verbatim username is used.

### See also

- `AuthLDAPInitialBindAsUser`
- `AuthLDAPBindDN`

[![top](../images/up.gif)](#page-header)

## AuthLDAPMaxSubGroupDepth Directive [¶](#authldapmaxsubgroupdepth "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specifies the maximum sub-group nesting depth that will be evaluated before the user search is discontinued. |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPMaxSubGroupDepth Number` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPMaxSubGroupDepth 10` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.3.0 and later |

When this directive is set to a non-zero value `X`
combined with use of the `Require ldap-group someGroupDN`
directive, the provided user credentials will be searched for
as a member of the `someGroupDN` directory object or of
any group member of the current group up to the maximum nesting
level `X` specified by this directive.

See the [`Require ldap-group`](#reqgroup)
section for a more detailed example.

### Nested groups performance

When `AuthLDAPSubGroupAttribute` overlaps with
`AuthLDAPGroupAttribute` (as it does by default and
as required by common LDAP schemas), uncached searching for subgroups in
large groups can be very slow. If you use large, non-nested groups, set
`AuthLDAPMaxSubGroupDepth` to zero.

[![top](../images/up.gif)](#page-header)

## AuthLDAPRemoteUserAttribute Directive [¶](#authldapremoteuserattribute "Permanent link")

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
included in the list of attributes in the `AuthLDAPURL` definition,
otherwise this directive will have no effect. This directive, if
present, takes precedence over `AuthLDAPRemoteUserIsDN`. This
directive is useful should you want people to log into a website
using an email address, but a backend application expects the
username as a userid.

[![top](../images/up.gif)](#page-header)

## AuthLDAPRemoteUserIsDN Directive [¶](#authldapremoteuserisdn "Permanent link")

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

## AuthLDAPSearchAsUser Directive [¶](#authldapsearchasuser "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Use the authenticated user's credentials to perform authorization searches |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPSearchAsUser on|off` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPSearchAsUser off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.3.6 and later |

When set, and `mod_authnz_ldap` has authenticated the
user, LDAP searches for authorization use the queried distinguished name (DN)
and HTTP basic authentication password of the authenticated user instead of
the servers configured credentials.

The `ldap-filter` and `ldap-dn` authorization
checks use searches.

This directive only has effect on the comparisons performed during
nested group processing when `AuthLDAPCompareAsUser` is also enabled.

This directive should only be used when your LDAP server doesn't
accept anonymous searches and you cannot use a dedicated
`AuthLDAPBindDN`.

### See also

- `AuthLDAPInitialBindAsUser`
- `AuthLDAPCompareAsUser`

[![top](../images/up.gif)](#page-header)

## AuthLDAPSubGroupAttribute Directive [¶](#authldapsubgroupattribute "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specifies the attribute labels, one value per directive line, used to distinguish the members of the current group that are groups. |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPSubGroupAttribute attribute` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPSubGroupAttribute member uniqueMember` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.3.0 and later |

An LDAP group object may contain members that are users and
members that are groups (called nested or sub groups). The
`AuthLDAPSubGroupAttribute` directive identifies the
labels of group members and the `AuthLDAPGroupAttribute`
directive identifies the labels of the user members. Multiple
attributes can be used by specifying this directive multiple times.
If not specified, then `mod_authnz_ldap` uses the
`member` and `uniqueMember` attributes.

[![top](../images/up.gif)](#page-header)

## AuthLDAPSubGroupClass Directive [¶](#authldapsubgroupclass "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specifies which LDAP objectClass values identify directory objects that are groups during sub-group processing. |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPSubGroupClass LdapObjectClass` |
| [Default:](mod__directive-dict.md#Default) | `AuthLDAPSubGroupClass groupOfNames groupOfUniqueNames` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.3.0 and later |

An LDAP group object may contain members that are users and
members that are groups (called nested or sub groups). The
`AuthLDAPSubGroupAttribute`
directive identifies the
labels of members that may be sub-groups of the current group
(as opposed to user members). The `AuthLDAPSubGroupClass`
directive specifies the LDAP objectClass values used in verifying that
these potential sub-groups are in fact group objects. Verified sub-groups
can then be searched for more user or sub-group members. Multiple
attributes can be used by specifying this directive multiple times.
If not specified, then `mod_authnz_ldap` uses the
`groupOfNames` and `groupOfUniqueNames` values.

[![top](../images/up.gif)](#page-header)

## AuthLDAPURL Directive [¶](#authldapurl "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | URL specifying the LDAP search parameters |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthLDAPURL url [NONE|SSL|TLS|STARTTLS]` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authnz\_ldap |

An RFC 2255 URL which specifies the LDAP search parameters
to use. The syntax of the URL is

`ldap://host:port/basedn?attribute?scope?filter`

If you want to specify more than one LDAP URL that Apache should try in turn, the syntax is:

```
AuthLDAPURL "ldap://ldap1.example.com ldap2.example.com/dc=..."
```

### Caveat

If you specify multiple servers, you need to enclose the entire URL string in quotes;
otherwise you will get an error: "AuthLDAPURL takes one argument, URL to define LDAP connection.."
You can of course use search parameters on each of these.

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
    successful connection. If multiple ldap servers are specified,
    then entire LDAP URL must be encapsulated in double quotes.

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
    entries in the subtree you will be using. All attributes
    listed will be put into the environment with an AUTHENTICATE\_ prefix
    for use by other modules.

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
    should be more than sufficient for any application. In 2.4.10 and later,
    the keyword `none` disables the use of a filter; this is
    required by some primitive LDAP servers.

When doing searches, the attribute, filter and username passed
by the HTTP client are combined to create a search filter that
looks like
`(&(filter)(attribute=username))`.

For example, consider an URL of
`ldap://ldap.example.com/o=Example?cn?sub?(posixid=*)`. When
a client attempts to connect using a username of `Babs
Jenson`, the resulting search filter will be
`(&(posixid=*)(cn=Babs Jenson))`.

An optional parameter can be added to allow the LDAP Url to override
the connection type. This parameter can be one of the following:

NONE
:   Establish an insecure connection on the default LDAP port. This
    is the same as `ldap://` on port 389.

SSL
:   Establish a secure connection on the default secure LDAP port.
    This is the same as `ldaps://`

TLS | STARTTLS
:   Establish an upgraded secure connection on the default LDAP port.
    This connection will be initiated on port 389 by default and then
    upgraded to a secure connection on the same port.

See above for examples of `AuthLDAPURL` URLs.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authnz_ldap.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authnz_ldap.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
