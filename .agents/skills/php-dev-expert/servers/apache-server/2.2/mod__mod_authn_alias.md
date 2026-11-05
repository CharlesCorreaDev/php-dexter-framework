# mod_authn_alias - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_authn_alias.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_authn_alias.html) to go to the current version of this document.

# Apache Module mod\_authn\_alias

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Provides the ability to create extended authentication providers based on actual providers |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authn\_alias\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authn\_alias.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module allows extended authentication providers to be created
within the configuration file and assigned an alias name. The alias
providers can then be referenced through the directives
`AuthBasicProvider` or
`AuthDigestProvider` in
the same way as a base authentication provider. Besides the ability
to create and alias an extended provider, it also allows the same
extended authentication provider to be reference by multiple
locations.

### Topics

- ![](../images/down.gif) [Examples](#example)

### Directives

- ![](../images/down.gif) [<AuthnProviderAlias>](#authnprovideralias)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Examples

This example checks for passwords in two different text
files.

### Checking multiple text password files

`# Check here first  
<AuthnProviderAlias file file1>  

AuthUserFile /www/conf/passwords1  
</AuthnProviderAlias>  
  
# Then check here  
<AuthnProviderAlias file file2>   

AuthUserFile /www/conf/passwords2  
</AuthnProviderAlias>  
  
<Directory /var/web/pages/secure>  

AuthBasicProvider file1 file2  
  
AuthType Basic  
AuthName "Protected Area"  
Require valid-user  
</Directory>`

The example below creates two different ldap authentication
provider aliases based on the ldap provider. This allows
a single authenticated location to be serviced by multiple ldap
hosts:

### Checking multiple LDAP servers

`LoadModule authn_alias_module modules/mod_authn_alias.so  
  
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
  
Alias /secure /webpages/secure  
<Directory /webpages/secure>  

Order deny,allow  
Allow from all  
  
AuthBasicProvider ldap-other-alias ldap-alias1  
  
AuthType Basic  
AuthName LDAP_Protected_Place  
AuthzLDAPAuthoritative off  
Require valid-user  
</Directory>`

[![top](../images/up.gif)](#page-header)

## <AuthnProviderAlias> Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enclose a group of directives that represent an extension of a base authentication provider and referenced by the specified alias |
| [Syntax:](mod__directive-dict.md#Syntax) | `<AuthnProviderAlias baseProvider Alias> ... </AuthnProviderAlias>` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_alias |

`<AuthnProviderAlias>` and
`</AuthnProviderAlias>` are used to enclose a group of
authentication directives that can be referenced by the alias name
using one of the directives `AuthBasicProvider` or `AuthDigestProvider`.

This directive has no affect on authorization, even for modules that
provide both authentication and authorization.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_authn_alias.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/mod/mod_authn_alias.html "Français")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
