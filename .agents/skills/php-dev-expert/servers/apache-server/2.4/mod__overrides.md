# Override Class Index for .htaccess - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/overrides.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

# Override Class Index for .htaccess

This is an index of the directives that are allowed in .htaccess files for
various `AllowOverride` settings,
organized by class. Its intended purpose is to help server administrators
verify the privileges they're granting to .htaccess users. For an overview
of how .htaccess works, see the
[.htaccess tutorial](howto__htaccess.md).

To determine the set of directives that your server configuration allows
.htaccess users to use:

1. Start with the set of directives in the `AllowOverrideList`
   for the directory in question. (By default, this is set to
   `None`.)
2. Find the `AllowOverride` setting for the directory in
   question. (By default, it is set to `None`.) There are two
   special cases:
   1. If your `AllowOverride` setting is `All`,
      add every directive listed on this page to the list.
   2. If your `AllowOverride` setting is `None`,
      you're done. Only the directives in the `AllowOverrideList`
      (if any) will be allowed.
3. For each override class listed in `AllowOverride`, look up
   the corresponding set of directives below and add them to the list.
4. Finally, add the set of directives that is always allowed in
   .htaccess (these are listed in the
   [All section](#override-all), below).

Several of the override classes are quite powerful and give .htaccess
users a large amount of control over the server. For a stricter approach,
set `AllowOverride None` and use
`AllowOverrideList` to specify the
exact list of directives that .htaccess users are allowed to use.

### Topics

- ![](../images/down.gif) [All](#override-all)
- ![](../images/down.gif) [AuthConfig](#override-authconfig)
- ![](../images/down.gif) [FileInfo](#override-fileinfo)
- ![](../images/down.gif) [Indexes](#override-indexes)
- ![](../images/down.gif) [Limit](#override-limit)
- ![](../images/down.gif) [Options](#override-options)

### See also

[![top](../images/up.gif)](#page-header)

## All

The following directives are allowed in any .htaccess file, as long as
overrides are enabled in the server configuration.

|  |  |
| --- | --- |
| [DeflateInflateLimitRequestBody](mod__mod_deflate.md#deflateinflatelimitrequestbody) | [mod\_deflate](mod__mod_deflate.md) |
| Maximum size of inflated request bodies | |
| [DeflateInflateRatioBurst](mod__mod_deflate.md#deflateinflateratioburst) | [mod\_deflate](mod__mod_deflate.md) |
| Maximum number of times the inflation ratio for request bodies can be crossed | |
| [DeflateInflateRatioLimit](mod__mod_deflate.md#deflateinflateratiolimit) | [mod\_deflate](mod__mod_deflate.md) |
| Maximum inflation ratio for request bodies | |
| [<Else>](mod__core.md#else) | [core](mod__core.md) |
| Contains directives that apply only if the condition of a previous `<If>` or `<ElseIf>` section is not satisfied by a request at runtime | |
| [<ElseIf>](mod__core.md#elseif) | [core](mod__core.md) |
| Contains directives that apply only if a condition is satisfied by a request at runtime while the condition of a previous `<If>` or `<ElseIf>` section is not satisfied | |
| [<Files>](mod__core.md#files) | [core](mod__core.md) |
| Contains directives that apply to matched filenames | |
| [<FilesMatch>](mod__core.md#filesmatch) | [core](mod__core.md) |
| Contains directives that apply to regular-expression matched filenames | |
| [<If>](mod__core.md#if) | [core](mod__core.md) |
| Contains directives that apply only if a condition is satisfied by a request at runtime | |
| [<IfDefine>](mod__core.md#ifdefine) | [core](mod__core.md) |
| Encloses directives that will be processed only if a test is true at startup | |
| [<IfDirective>](mod__core.md#ifdirective) | [core](mod__core.md) |
| Encloses directives that are processed conditional on the presence or absence of a specific directive | |
| [<IfFile>](mod__core.md#iffile) | [core](mod__core.md) |
| Encloses directives that will be processed only if file exists at startup | |
| [<IfModule>](mod__core.md#ifmodule) | [core](mod__core.md) |
| Encloses directives that are processed conditional on the presence or absence of a specific module | |
| [<IfSection>](mod__core.md#ifsection) | [core](mod__core.md) |
| Encloses directives that are processed conditional on the presence or absence of a specific section directive | |
| [<IfVersion>](mod__mod_version.md#ifversion) | [mod\_version](mod__mod_version.md) |
| contains version dependent configuration | |
| [LimitRequestBody](mod__core.md#limitrequestbody) | [core](mod__core.md) |
| Restricts the total size of the HTTP request body sent from the client | |
| [LimitXMLRequestBody](mod__core.md#limitxmlrequestbody) | [core](mod__core.md) |
| Limits the size of an XML-based request body | |
| [LogIOTrackTTFB](mod__mod_logio.md#logiotrackttfb) | [mod\_logio](mod__mod_logio.md) |
| Enable tracking of time to first byte (TTFB) | |
| [LuaCodeCache](mod__mod_lua.md#luacodecache) | [mod\_lua](mod__mod_lua.md) |
| Configure the compiled code cache. | |
| [LuaHookAccessChecker](mod__mod_lua.md#luahookaccesschecker) | [mod\_lua](mod__mod_lua.md) |
| Provide a hook for the access\_checker phase of request processing | |
| [LuaHookAuthChecker](mod__mod_lua.md#luahookauthchecker) | [mod\_lua](mod__mod_lua.md) |
| Provide a hook for the auth\_checker phase of request processing | |
| [LuaHookCheckUserID](mod__mod_lua.md#luahookcheckuserid) | [mod\_lua](mod__mod_lua.md) |
| Provide a hook for the check\_user\_id phase of request processing | |
| [LuaHookFixups](mod__mod_lua.md#luahookfixups) | [mod\_lua](mod__mod_lua.md) |
| Provide a hook for the fixups phase of a request processing | |
| [LuaHookInsertFilter](mod__mod_lua.md#luahookinsertfilter) | [mod\_lua](mod__mod_lua.md) |
| Provide a hook for the insert\_filter phase of request processing | |
| [LuaHookLog](mod__mod_lua.md#luahooklog) | [mod\_lua](mod__mod_lua.md) |
| Provide a hook for the access log phase of a request processing | |
| [LuaHookMapToStorage](mod__mod_lua.md#luahookmaptostorage) | [mod\_lua](mod__mod_lua.md) |
| Provide a hook for the map\_to\_storage phase of request processing | |
| [LuaHookPreTranslate](mod__mod_lua.md#luahookpretranslate) | [mod\_lua](mod__mod_lua.md) |
| Provide a hook for the pre\_translate phase of a request processing | |
| [LuaHookTranslateName](mod__mod_lua.md#luahooktranslatename) | [mod\_lua](mod__mod_lua.md) |
| Provide a hook for the translate name phase of request processing | |
| [LuaHookTypeChecker](mod__mod_lua.md#luahooktypechecker) | [mod\_lua](mod__mod_lua.md) |
| Provide a hook for the type\_checker phase of request processing | |
| [LuaInherit](mod__mod_lua.md#luainherit) | [mod\_lua](mod__mod_lua.md) |
| Controls how parent configuration sections are merged into children | |
| [LuaMapHandler](mod__mod_lua.md#luamaphandler) | [mod\_lua](mod__mod_lua.md) |
| Map a path to a lua handler | |
| [LuaPackageCPath](mod__mod_lua.md#luapackagecpath) | [mod\_lua](mod__mod_lua.md) |
| Add a directory to lua's package.cpath | |
| [LuaPackagePath](mod__mod_lua.md#luapackagepath) | [mod\_lua](mod__mod_lua.md) |
| Add a directory to lua's package.path | |
| [LuaQuickHandler](mod__mod_lua.md#luaquickhandler) | [mod\_lua](mod__mod_lua.md) |
| Provide a hook for the quick handler of request processing | |
| [LuaRoot](mod__mod_lua.md#luaroot) | [mod\_lua](mod__mod_lua.md) |
| Specify the base path for resolving relative paths for `mod_lua` directives | |
| [LuaScope](mod__mod_lua.md#luascope) | [mod\_lua](mod__mod_lua.md) |
| One of once, request, conn, thread -- default is once | |
| [RLimitCPU](mod__core.md#rlimitcpu) | [core](mod__core.md) |
| Limits the CPU consumption of processes launched by Apache httpd children | |
| [RLimitMEM](mod__core.md#rlimitmem) | [core](mod__core.md) |
| Limits the memory consumption of processes launched by Apache httpd children | |
| [RLimitNPROC](mod__core.md#rlimitnproc) | [core](mod__core.md) |
| Limits the number of processes that can be launched by processes launched by Apache httpd children | |
| [ServerSignature](mod__core.md#serversignature) | [core](mod__core.md) |
| Configures the footer on server-generated documents | |
| [SSIErrorMsg](mod__mod_include.md#ssierrormsg) | [mod\_include](mod__mod_include.md) |
| Error message displayed when there is an SSI error | |
| [SSITimeFormat](mod__mod_include.md#ssitimeformat) | [mod\_include](mod__mod_include.md) |
| Configures the format in which date strings are displayed | |
| [SSIUndefinedEcho](mod__mod_include.md#ssiundefinedecho) | [mod\_include](mod__mod_include.md) |
| String displayed when an unset variable is echoed | |

[![top](../images/up.gif)](#page-header)

## AuthConfig

The following directives are allowed in .htaccess files when
`AllowOverride AuthConfig` is in effect. They give .htaccess
users control over the authentication and authorization methods that are
applied to their directory subtrees, including several related utility
directives for session handling and TLS settings.

|  |  |
| --- | --- |
| [Anonymous](mod__mod_authn_anon.md#anonymous) | [mod\_authn\_anon](mod__mod_authn_anon.md) |
| Specifies userIDs that are allowed access without password verification | |
| [Anonymous\_LogEmail](mod__mod_authn_anon.md#anonymous_logemail) | [mod\_authn\_anon](mod__mod_authn_anon.md) |
| Sets whether the password entered will be logged in the error log | |
| [Anonymous\_MustGiveEmail](mod__mod_authn_anon.md#anonymous_mustgiveemail) | [mod\_authn\_anon](mod__mod_authn_anon.md) |
| Specifies whether blank passwords are allowed | |
| [Anonymous\_NoUserID](mod__mod_authn_anon.md#anonymous_nouserid) | [mod\_authn\_anon](mod__mod_authn_anon.md) |
| Sets whether the userID field may be empty | |
| [Anonymous\_VerifyEmail](mod__mod_authn_anon.md#anonymous_verifyemail) | [mod\_authn\_anon](mod__mod_authn_anon.md) |
| Sets whether to check the password field for a correctly formatted email address | |
| [AuthBasicAuthoritative](mod__mod_auth_basic.md#authbasicauthoritative) | [mod\_auth\_basic](mod__mod_auth_basic.md) |
| Sets whether authorization and authentication are passed to lower level modules | |
| [AuthBasicFake](mod__mod_auth_basic.md#authbasicfake) | [mod\_auth\_basic](mod__mod_auth_basic.md) |
| Fake basic authentication using the given expressions for username and password | |
| [AuthBasicProvider](mod__mod_auth_basic.md#authbasicprovider) | [mod\_auth\_basic](mod__mod_auth_basic.md) |
| Sets the authentication provider(s) for this location | |
| [AuthBasicUseDigestAlgorithm](mod__mod_auth_basic.md#authbasicusedigestalgorithm) | [mod\_auth\_basic](mod__mod_auth_basic.md) |
| Check passwords against the authentication providers as if Digest Authentication was in force instead of Basic Authentication. | |
| [AuthDBMGroupFile](mod__mod_authz_dbm.md#authdbmgroupfile) | [mod\_authz\_dbm](mod__mod_authz_dbm.md) |
| Sets the name of the database file containing the list of user groups for authorization | |
| [AuthDBMType](mod__mod_authn_dbm.md#authdbmtype) | [mod\_authn\_dbm](mod__mod_authn_dbm.md) |
| Sets the type of database file that is used to store passwords | |
| [AuthDBMUserFile](mod__mod_authn_dbm.md#authdbmuserfile) | [mod\_authn\_dbm](mod__mod_authn_dbm.md) |
| Sets the name of a database file containing the list of users and passwords for authentication | |
| [AuthDigestAlgorithm](mod__mod_auth_digest.md#authdigestalgorithm) | [mod\_auth\_digest](mod__mod_auth_digest.md) |
| Selects the algorithm used to calculate the challenge and response hashes in digest authentication | |
| [AuthDigestDomain](mod__mod_auth_digest.md#authdigestdomain) | [mod\_auth\_digest](mod__mod_auth_digest.md) |
| URIs that are in the same protection space for digest authentication | |
| [AuthDigestNonceLifetime](mod__mod_auth_digest.md#authdigestnoncelifetime) | [mod\_auth\_digest](mod__mod_auth_digest.md) |
| How long the server nonce is valid | |
| [AuthDigestProvider](mod__mod_auth_digest.md#authdigestprovider) | [mod\_auth\_digest](mod__mod_auth_digest.md) |
| Sets the authentication provider(s) for this location | |
| [AuthDigestQop](mod__mod_auth_digest.md#authdigestqop) | [mod\_auth\_digest](mod__mod_auth_digest.md) |
| Determines the quality-of-protection to use in digest authentication | |
| [AuthFormAuthoritative](mod__mod_auth_form.md#authformauthoritative) | [mod\_auth\_form](mod__mod_auth_form.md) |
| Sets whether authorization and authentication are passed to lower level modules | |
| [AuthFormProvider](mod__mod_auth_form.md#authformprovider) | [mod\_auth\_form](mod__mod_auth_form.md) |
| Sets the authentication provider(s) for this location | |
| [AuthGroupFile](mod__mod_authz_groupfile.md#authgroupfile) | [mod\_authz\_groupfile](mod__mod_authz_groupfile.md) |
| Sets the name of a text file containing the list of user groups for authorization | |
| [AuthLDAPAuthorizePrefix](mod__mod_authnz_ldap.md#authldapauthorizeprefix) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Specifies the prefix for environment variables set during authorization | |
| [AuthLDAPBindAuthoritative](mod__mod_authnz_ldap.md#authldapbindauthoritative) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Determines if other authentication providers are used when a user can be mapped to a DN but the server cannot successfully bind with the user's credentials. | |
| [AuthLDAPBindDN](mod__mod_authnz_ldap.md#authldapbinddn) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Optional DN to use in binding to the LDAP server | |
| [AuthLDAPBindPassword](mod__mod_authnz_ldap.md#authldapbindpassword) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Password used in conjunction with the bind DN | |
| [AuthLDAPCompareAsUser](mod__mod_authnz_ldap.md#authldapcompareasuser) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Use the authenticated user's credentials to perform authorization comparisons | |
| [AuthLDAPCompareDNOnServer](mod__mod_authnz_ldap.md#authldapcomparednonserver) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Use the LDAP server to compare the DNs | |
| [AuthLDAPDereferenceAliases](mod__mod_authnz_ldap.md#authldapdereferencealiases) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| When will the module de-reference aliases | |
| [AuthLDAPGroupAttribute](mod__mod_authnz_ldap.md#authldapgroupattribute) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| LDAP attributes used to identify the user members of groups. | |
| [AuthLDAPGroupAttributeIsDN](mod__mod_authnz_ldap.md#authldapgroupattributeisdn) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Use the DN of the client username when checking for group membership | |
| [AuthLDAPInitialBindAsUser](mod__mod_authnz_ldap.md#authldapinitialbindasuser) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Determines if the server does the initial DN lookup using the basic authentication users' own username, instead of anonymously or with hard-coded credentials for the server | |
| [AuthLDAPInitialBindPattern](mod__mod_authnz_ldap.md#authldapinitialbindpattern) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Specifies the transformation of the basic authentication username to be used when binding to the LDAP server to perform a DN lookup | |
| [AuthLDAPMaxSubGroupDepth](mod__mod_authnz_ldap.md#authldapmaxsubgroupdepth) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Specifies the maximum sub-group nesting depth that will be evaluated before the user search is discontinued. | |
| [AuthLDAPRemoteUserAttribute](mod__mod_authnz_ldap.md#authldapremoteuserattribute) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Use the value of the attribute returned during the user query to set the REMOTE\_USER environment variable | |
| [AuthLDAPRemoteUserIsDN](mod__mod_authnz_ldap.md#authldapremoteuserisdn) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Use the DN of the client username to set the REMOTE\_USER environment variable | |
| [AuthLDAPSearchAsUser](mod__mod_authnz_ldap.md#authldapsearchasuser) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Use the authenticated user's credentials to perform authorization searches | |
| [AuthLDAPSubGroupAttribute](mod__mod_authnz_ldap.md#authldapsubgroupattribute) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Specifies the attribute labels, one value per directive line, used to distinguish the members of the current group that are groups. | |
| [AuthLDAPSubGroupClass](mod__mod_authnz_ldap.md#authldapsubgroupclass) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| Specifies which LDAP objectClass values identify directory objects that are groups during sub-group processing. | |
| [AuthLDAPURL](mod__mod_authnz_ldap.md#authldapurl) | [mod\_authnz\_ldap](mod__mod_authnz_ldap.md) |
| URL specifying the LDAP search parameters | |
| [AuthMerging](mod__mod_authz_core.md#authmerging) | [mod\_authz\_core](mod__mod_authz_core.md) |
| Controls the manner in which each configuration section's authorization logic is combined with that of preceding configuration sections. | |
| [AuthName](mod__mod_authn_core.md#authname) | [mod\_authn\_core](mod__mod_authn_core.md) |
| Authorization realm for use in HTTP authentication | |
| [AuthnCacheProvideFor](mod__mod_authn_socache.md#authncacheprovidefor) | [mod\_authn\_socache](mod__mod_authn_socache.md) |
| Specify which authn provider(s) to cache for | |
| [AuthnCacheTimeout](mod__mod_authn_socache.md#authncachetimeout) | [mod\_authn\_socache](mod__mod_authn_socache.md) |
| Set a timeout for cache entries | |
| [AuthType](mod__mod_authn_core.md#authtype) | [mod\_authn\_core](mod__mod_authn_core.md) |
| Type of user authentication | |
| [AuthUserFile](mod__mod_authn_file.md#authuserfile) | [mod\_authn\_file](mod__mod_authn_file.md) |
| Sets the name of a text file containing the list of users and passwords for authentication | |
| [AuthzDBMType](mod__mod_authz_dbm.md#authzdbmtype) | [mod\_authz\_dbm](mod__mod_authz_dbm.md) |
| Sets the type of database file that is used to store list of user groups | |
| [CGIPassAuth](mod__core.md#cgipassauth) | [core](mod__core.md) |
| Enables passing HTTP authorization headers to scripts as CGI variables | |
| [LDAPReferralHopLimit](mod__mod_ldap.md#ldapreferralhoplimit) | [mod\_ldap](mod__mod_ldap.md) |
| The maximum number of referral hops to chase before terminating an LDAP query. | |
| [LDAPReferrals](mod__mod_ldap.md#ldapreferrals) | [mod\_ldap](mod__mod_ldap.md) |
| Enable referral chasing during queries to the LDAP server. | |
| [<Limit>](mod__core.md#limit) | [core](mod__core.md) |
| Restrict enclosed access controls to only certain HTTP methods | |
| [<LimitExcept>](mod__core.md#limitexcept) | [core](mod__core.md) |
| Restrict access controls to all HTTP methods except the named ones | |
| [Require](mod__mod_authz_core.md#require) | [mod\_authz\_core](mod__mod_authz_core.md) |
| Tests whether an authenticated user is authorized by an authorization provider. | |
| [<RequireAll>](mod__mod_authz_core.md#requireall) | [mod\_authz\_core](mod__mod_authz_core.md) |
| Enclose a group of authorization directives of which none must fail and at least one must succeed for the enclosing directive to succeed. | |
| [<RequireAny>](mod__mod_authz_core.md#requireany) | [mod\_authz\_core](mod__mod_authz_core.md) |
| Enclose a group of authorization directives of which one must succeed for the enclosing directive to succeed. | |
| [<RequireNone>](mod__mod_authz_core.md#requirenone) | [mod\_authz\_core](mod__mod_authz_core.md) |
| Enclose a group of authorization directives of which none must succeed for the enclosing directive to not fail. | |
| [Satisfy](mod__mod_access_compat.md#satisfy) | [mod\_access\_compat](mod__mod_access_compat.md) |
| Interaction between host-level access control and user authentication | |
| [Session](mod__mod_session.md#session) | [mod\_session](mod__mod_session.md) |
| Enables a session for the current directory or location | |
| [SessionEnv](mod__mod_session.md#sessionenv) | [mod\_session](mod__mod_session.md) |
| Control whether the contents of the session are written to the HTTP\_SESSION environment variable | |
| [SessionHeader](mod__mod_session.md#sessionheader) | [mod\_session](mod__mod_session.md) |
| Import session updates from a given HTTP response header | |
| [SessionInclude](mod__mod_session.md#sessioninclude) | [mod\_session](mod__mod_session.md) |
| Define URL prefixes for which a session is valid | |
| [SessionMaxAge](mod__mod_session.md#sessionmaxage) | [mod\_session](mod__mod_session.md) |
| Define a maximum age in seconds for a session | |
| [SSLCipherSuite](mod__mod_ssl.md#sslciphersuite) | [mod\_ssl](mod__mod_ssl.md) |
| Cipher Suite available for negotiation in SSL handshake | |
| [SSLRenegBufferSize](mod__mod_ssl.md#sslrenegbuffersize) | [mod\_ssl](mod__mod_ssl.md) |
| Set the size for the SSL renegotiation buffer | |
| [SSLRequire](mod__mod_ssl.md#sslrequire) | [mod\_ssl](mod__mod_ssl.md) |
| Allow access only when an arbitrarily complex boolean expression is true | |
| [SSLRequireSSL](mod__mod_ssl.md#sslrequiressl) | [mod\_ssl](mod__mod_ssl.md) |
| Deny access when SSL is not used for the HTTP request | |
| [SSLUserName](mod__mod_ssl.md#sslusername) | [mod\_ssl](mod__mod_ssl.md) |
| Variable name to determine user name | |
| [SSLVerifyClient](mod__mod_ssl.md#sslverifyclient) | [mod\_ssl](mod__mod_ssl.md) |
| Type of Client Certificate verification | |
| [SSLVerifyDepth](mod__mod_ssl.md#sslverifydepth) | [mod\_ssl](mod__mod_ssl.md) |
| Maximum depth of CA Certificates in Client Certificate verification | |

[![top](../images/up.gif)](#page-header)

## FileInfo

The following directives are allowed in .htaccess files when
`AllowOverride FileInfo` is in effect. They give .htaccess
users a wide range of control over the responses and metadata given by the
server.

|  |  |
| --- | --- |
| [AcceptPathInfo](mod__core.md#acceptpathinfo) | [core](mod__core.md) |
| Resources accept trailing pathname information | |
| [Action](mod__mod_actions.md#action) | [mod\_actions](mod__mod_actions.md) |
| Activates a CGI script for a particular handler or content-type | |
| [AddCharset](mod__mod_mime.md#addcharset) | [mod\_mime](mod__mod_mime.md) |
| Maps the given filename extensions to the specified content charset | |
| [AddDefaultCharset](mod__core.md#adddefaultcharset) | [core](mod__core.md) |
| Default charset parameter to be added when a response content-type is `text/plain` or `text/html` | |
| [AddEncoding](mod__mod_mime.md#addencoding) | [mod\_mime](mod__mod_mime.md) |
| Maps the given filename extensions to the specified encoding type | |
| [AddHandler](mod__mod_mime.md#addhandler) | [mod\_mime](mod__mod_mime.md) |
| Maps the filename extensions to the specified handler | |
| [AddInputFilter](mod__mod_mime.md#addinputfilter) | [mod\_mime](mod__mod_mime.md) |
| Maps filename extensions to the filters that will process client requests | |
| [AddLanguage](mod__mod_mime.md#addlanguage) | [mod\_mime](mod__mod_mime.md) |
| Maps the given filename extension to the specified content language | |
| [AddOutputFilter](mod__mod_mime.md#addoutputfilter) | [mod\_mime](mod__mod_mime.md) |
| Maps filename extensions to the filters that will process responses from the server | |
| [AddOutputFilterByType](mod__mod_filter.md#addoutputfilterbytype) | [mod\_filter](mod__mod_filter.md) |
| assigns an output filter to a particular media-type | |
| [AddType](mod__mod_mime.md#addtype) | [mod\_mime](mod__mod_mime.md) |
| Maps the given filename extensions onto the specified content type | |
| [BrowserMatch](mod__mod_setenvif.md#browsermatch) | [mod\_setenvif](mod__mod_setenvif.md) |
| Sets environment variables conditional on HTTP User-Agent | |
| [BrowserMatchNoCase](mod__mod_setenvif.md#browsermatchnocase) | [mod\_setenvif](mod__mod_setenvif.md) |
| Sets environment variables conditional on User-Agent without respect to case | |
| [CGIMapExtension](mod__core.md#cgimapextension) | [core](mod__core.md) |
| Technique for locating the interpreter for CGI scripts | |
| [CGIVar](mod__core.md#cgivar) | [core](mod__core.md) |
| Controls how some CGI variables are set | |
| [CharsetDefault](mod__mod_charset_lite.md#charsetdefault) | [mod\_charset\_lite](mod__mod_charset_lite.md) |
| Charset to translate into | |
| [CharsetOptions](mod__mod_charset_lite.md#charsetoptions) | [mod\_charset\_lite](mod__mod_charset_lite.md) |
| Configures charset translation behavior | |
| [CharsetSourceEnc](mod__mod_charset_lite.md#charsetsourceenc) | [mod\_charset\_lite](mod__mod_charset_lite.md) |
| Source charset of files | |
| [CookieDomain](mod__mod_usertrack.md#cookiedomain) | [mod\_usertrack](mod__mod_usertrack.md) |
| The domain to which the tracking cookie applies | |
| [CookieExpires](mod__mod_usertrack.md#cookieexpires) | [mod\_usertrack](mod__mod_usertrack.md) |
| Expiry time for the tracking cookie | |
| [CookieHTTPOnly](mod__mod_usertrack.md#cookiehttponly) | [mod\_usertrack](mod__mod_usertrack.md) |
| Adds the 'HTTPOnly' attribute to the cookie | |
| [CookieName](mod__mod_usertrack.md#cookiename) | [mod\_usertrack](mod__mod_usertrack.md) |
| Name of the tracking cookie | |
| [CookieSameSite](mod__mod_usertrack.md#cookiesamesite) | [mod\_usertrack](mod__mod_usertrack.md) |
| Adds the 'SameSite' attribute to the cookie | |
| [CookieSecure](mod__mod_usertrack.md#cookiesecure) | [mod\_usertrack](mod__mod_usertrack.md) |
| Adds the 'Secure' attribute to the cookie | |
| [CookieStyle](mod__mod_usertrack.md#cookiestyle) | [mod\_usertrack](mod__mod_usertrack.md) |
| Format of the cookie header field | |
| [CookieTracking](mod__mod_usertrack.md#cookietracking) | [mod\_usertrack](mod__mod_usertrack.md) |
| Enables tracking cookie | |
| [DefaultLanguage](mod__mod_mime.md#defaultlanguage) | [mod\_mime](mod__mod_mime.md) |
| Defines a default language-tag to be sent in the Content-Language header field for all resources in the current context that have not been assigned a language-tag by some other means. | |
| [DefaultType](mod__core.md#defaulttype) | [core](mod__core.md) |
| This directive has no effect other than to emit warnings if the value is not `none`. In prior versions, DefaultType would specify a default media type to assign to response content for which no other media type configuration could be found. | |
| [EnableMMAP](mod__core.md#enablemmap) | [core](mod__core.md) |
| Use memory-mapping to read files during delivery | |
| [EnableSendfile](mod__core.md#enablesendfile) | [core](mod__core.md) |
| Use the kernel sendfile support to deliver files to the client | |
| [ErrorDocument](mod__core.md#errordocument) | [core](mod__core.md) |
| What the server will return to the client in case of an error | |
| [FileETag](mod__core.md#fileetag) | [core](mod__core.md) |
| File attributes used to create the ETag HTTP response header for static files | |
| [ForceLanguagePriority](mod__mod_negotiation.md#forcelanguagepriority) | [mod\_negotiation](mod__mod_negotiation.md) |
| Action to take if a single acceptable document is not found | |
| [ForceType](mod__core.md#forcetype) | [core](mod__core.md) |
| Forces all matching files to be served with the specified media type in the HTTP Content-Type header field | |
| [Header](mod__mod_headers.md#header) | [mod\_headers](mod__mod_headers.md) |
| Configure HTTP response headers | |
| [ISAPIAppendLogToErrors](mod__mod_isapi.md#isapiappendlogtoerrors) | [mod\_isapi](mod__mod_isapi.md) |
| Record `HSE_APPEND_LOG_PARAMETER` requests from ISAPI extensions to the error log | |
| [ISAPIAppendLogToQuery](mod__mod_isapi.md#isapiappendlogtoquery) | [mod\_isapi](mod__mod_isapi.md) |
| Record `HSE_APPEND_LOG_PARAMETER` requests from ISAPI extensions to the query field | |
| [ISAPIFakeAsync](mod__mod_isapi.md#isapifakeasync) | [mod\_isapi](mod__mod_isapi.md) |
| Fake asynchronous support for ISAPI callbacks | |
| [ISAPILogNotSupported](mod__mod_isapi.md#isapilognotsupported) | [mod\_isapi](mod__mod_isapi.md) |
| Log unsupported feature requests from ISAPI extensions | |
| [ISAPIReadAheadBuffer](mod__mod_isapi.md#isapireadaheadbuffer) | [mod\_isapi](mod__mod_isapi.md) |
| Size of the Read Ahead Buffer sent to ISAPI extensions | |
| [LanguagePriority](mod__mod_negotiation.md#languagepriority) | [mod\_negotiation](mod__mod_negotiation.md) |
| The precedence of language variants for cases where the client does not express a preference | |
| [MultiviewsMatch](mod__mod_mime.md#multiviewsmatch) | [mod\_mime](mod__mod_mime.md) |
| The types of files that will be included when searching for a matching file with MultiViews | |
| [PassEnv](mod__mod_env.md#passenv) | [mod\_env](mod__mod_env.md) |
| Passes environment variables from the shell | |
| [QualifyRedirectURL](mod__core.md#qualifyredirecturl) | [core](mod__core.md) |
| Controls whether the REDIRECT\_URL environment variable is fully qualified | |
| [Redirect](mod__mod_alias.md#redirect) | [mod\_alias](mod__mod_alias.md) |
| Sends an external redirect asking the client to fetch a different URL | |
| [RedirectMatch](mod__mod_alias.md#redirectmatch) | [mod\_alias](mod__mod_alias.md) |
| Sends an external redirect based on a regular expression match of the current URL | |
| [RedirectPermanent](mod__mod_alias.md#redirectpermanent) | [mod\_alias](mod__mod_alias.md) |
| Sends an external permanent redirect asking the client to fetch a different URL | |
| [RedirectTemp](mod__mod_alias.md#redirecttemp) | [mod\_alias](mod__mod_alias.md) |
| Sends an external temporary redirect asking the client to fetch a different URL | |
| [RemoveCharset](mod__mod_mime.md#removecharset) | [mod\_mime](mod__mod_mime.md) |
| Removes any character set associations for a set of file extensions | |
| [RemoveEncoding](mod__mod_mime.md#removeencoding) | [mod\_mime](mod__mod_mime.md) |
| Removes any content encoding associations for a set of file extensions | |
| [RemoveHandler](mod__mod_mime.md#removehandler) | [mod\_mime](mod__mod_mime.md) |
| Removes any handler associations for a set of file extensions | |
| [RemoveInputFilter](mod__mod_mime.md#removeinputfilter) | [mod\_mime](mod__mod_mime.md) |
| Removes any input filter associations for a set of file extensions | |
| [RemoveLanguage](mod__mod_mime.md#removelanguage) | [mod\_mime](mod__mod_mime.md) |
| Removes any language associations for a set of file extensions | |
| [RemoveOutputFilter](mod__mod_mime.md#removeoutputfilter) | [mod\_mime](mod__mod_mime.md) |
| Removes any output filter associations for a set of file extensions | |
| [RemoveType](mod__mod_mime.md#removetype) | [mod\_mime](mod__mod_mime.md) |
| Removes any content type associations for a set of file extensions | |
| [RequestHeader](mod__mod_headers.md#requestheader) | [mod\_headers](mod__mod_headers.md) |
| Configure HTTP request headers | |
| [RewriteBase](mod__mod_rewrite.md#rewritebase) | [mod\_rewrite](mod__mod_rewrite.md) |
| Sets the base URL for per-directory rewrites | |
| [RewriteCond](mod__mod_rewrite.md#rewritecond) | [mod\_rewrite](mod__mod_rewrite.md) |
| Defines a condition under which rewriting will take place | |
| [RewriteEngine](mod__mod_rewrite.md#rewriteengine) | [mod\_rewrite](mod__mod_rewrite.md) |
| Enables or disables runtime rewriting engine | |
| [RewriteOptions](mod__mod_rewrite.md#rewriteoptions) | [mod\_rewrite](mod__mod_rewrite.md) |
| Sets some special options for the rewrite engine | |
| [RewriteRule](mod__mod_rewrite.md#rewriterule) | [mod\_rewrite](mod__mod_rewrite.md) |
| Defines rules for the rewriting engine | |
| [ScriptInterpreterSource](mod__core.md#scriptinterpretersource) | [core](mod__core.md) |
| Technique for locating the interpreter for CGI scripts | |
| [SetEnv](mod__mod_env.md#setenv) | [mod\_env](mod__mod_env.md) |
| Sets environment variables | |
| [SetEnvIf](mod__mod_setenvif.md#setenvif) | [mod\_setenvif](mod__mod_setenvif.md) |
| Sets environment variables based on attributes of the request | |
| [SetEnvIfExpr](mod__mod_setenvif.md#setenvifexpr) | [mod\_setenvif](mod__mod_setenvif.md) |
| Sets environment variables based on an ap\_expr expression | |
| [SetEnvIfNoCase](mod__mod_setenvif.md#setenvifnocase) | [mod\_setenvif](mod__mod_setenvif.md) |
| Sets environment variables based on attributes of the request without respect to case | |
| [SetHandler](mod__core.md#sethandler) | [core](mod__core.md) |
| Forces all matching files to be processed by a handler | |
| [SetInputFilter](mod__core.md#setinputfilter) | [core](mod__core.md) |
| Sets the filters that will process client requests and POST input | |
| [SetOutputFilter](mod__core.md#setoutputfilter) | [core](mod__core.md) |
| Sets the filters that will process responses from the server | |
| [Substitute](mod__mod_substitute.md#substitute) | [mod\_substitute](mod__mod_substitute.md) |
| Pattern to filter the response content | |
| [SubstituteInheritBefore](mod__mod_substitute.md#substituteinheritbefore) | [mod\_substitute](mod__mod_substitute.md) |
| Change the merge order of inherited patterns | |
| [SubstituteMaxLineLength](mod__mod_substitute.md#substitutemaxlinelength) | [mod\_substitute](mod__mod_substitute.md) |
| Set the maximum line size | |
| [UnsetEnv](mod__mod_env.md#unsetenv) | [mod\_env](mod__mod_env.md) |
| Removes variables from the environment | |

[![top](../images/up.gif)](#page-header)

## Indexes

The following directives are allowed in .htaccess files when
`AllowOverride Indexes` is in effect. They allow .htaccess
users to control aspects of the directory index pages provided by the
server, including autoindex generation.

|  |  |
| --- | --- |
| [AddAlt](mod__mod_autoindex.md#addalt) | [mod\_autoindex](mod__mod_autoindex.md) |
| Alternate text to display for a file, instead of an icon selected by filename | |
| [AddAltByEncoding](mod__mod_autoindex.md#addaltbyencoding) | [mod\_autoindex](mod__mod_autoindex.md) |
| Alternate text to display for a file instead of an icon selected by MIME-encoding | |
| [AddAltByType](mod__mod_autoindex.md#addaltbytype) | [mod\_autoindex](mod__mod_autoindex.md) |
| Alternate text to display for a file, instead of an icon selected by MIME content-type | |
| [AddDescription](mod__mod_autoindex.md#adddescription) | [mod\_autoindex](mod__mod_autoindex.md) |
| Description to display for a file | |
| [AddIcon](mod__mod_autoindex.md#addicon) | [mod\_autoindex](mod__mod_autoindex.md) |
| Icon to display for a file selected by name | |
| [AddIconByEncoding](mod__mod_autoindex.md#addiconbyencoding) | [mod\_autoindex](mod__mod_autoindex.md) |
| Icon to display next to files selected by MIME content-encoding | |
| [AddIconByType](mod__mod_autoindex.md#addiconbytype) | [mod\_autoindex](mod__mod_autoindex.md) |
| Icon to display next to files selected by MIME content-type | |
| [DefaultIcon](mod__mod_autoindex.md#defaulticon) | [mod\_autoindex](mod__mod_autoindex.md) |
| Icon to display for files when no specific icon is configured | |
| [DirectoryCheckHandler](mod__mod_dir.md#directorycheckhandler) | [mod\_dir](mod__mod_dir.md) |
| Toggle how this module responds when another handler is configured | |
| [DirectoryIndex](mod__mod_dir.md#directoryindex) | [mod\_dir](mod__mod_dir.md) |
| List of resources to look for when the client requests a directory | |
| [DirectoryIndexRedirect](mod__mod_dir.md#directoryindexredirect) | [mod\_dir](mod__mod_dir.md) |
| Configures an external redirect for directory indexes. | |
| [DirectorySlash](mod__mod_dir.md#directoryslash) | [mod\_dir](mod__mod_dir.md) |
| Toggle trailing slash redirects on or off | |
| [ExpiresActive](mod__mod_expires.md#expiresactive) | [mod\_expires](mod__mod_expires.md) |
| Enables generation of `Expires` headers | |
| [ExpiresByType](mod__mod_expires.md#expiresbytype) | [mod\_expires](mod__mod_expires.md) |
| Value of the `Expires` header configured by MIME type | |
| [ExpiresDefault](mod__mod_expires.md#expiresdefault) | [mod\_expires](mod__mod_expires.md) |
| Default algorithm for calculating expiration time | |
| [FallbackResource](mod__mod_dir.md#fallbackresource) | [mod\_dir](mod__mod_dir.md) |
| Define a default URL for requests that don't map to a file or handler | |
| [HeaderName](mod__mod_autoindex.md#headername) | [mod\_autoindex](mod__mod_autoindex.md) |
| Name of the file that will be inserted at the top of the index listing | |
| [ImapBase](mod__mod_imagemap.md#imapbase) | [mod\_imagemap](mod__mod_imagemap.md) |
| Default `base` for imagemap files | |
| [ImapDefault](mod__mod_imagemap.md#imapdefault) | [mod\_imagemap](mod__mod_imagemap.md) |
| Default action when an imagemap is called with coordinates that are not explicitly mapped | |
| [ImapMenu](mod__mod_imagemap.md#imapmenu) | [mod\_imagemap](mod__mod_imagemap.md) |
| Action if no coordinates are given when calling an imagemap | |
| [IndexHeadInsert](mod__mod_autoindex.md#indexheadinsert) | [mod\_autoindex](mod__mod_autoindex.md) |
| Inserts text in the HEAD section of an index page. | |
| [IndexIgnore](mod__mod_autoindex.md#indexignore) | [mod\_autoindex](mod__mod_autoindex.md) |
| Adds to the list of files to hide when listing a directory | |
| [IndexIgnoreReset](mod__mod_autoindex.md#indexignorereset) | [mod\_autoindex](mod__mod_autoindex.md) |
| Empties the list of files to hide when listing a directory | |
| [IndexOptions](mod__mod_autoindex.md#indexoptions) | [mod\_autoindex](mod__mod_autoindex.md) |
| Various configuration settings for directory indexing | |
| [IndexOrderDefault](mod__mod_autoindex.md#indexorderdefault) | [mod\_autoindex](mod__mod_autoindex.md) |
| Sets the default ordering of the directory index | |
| [IndexStyleSheet](mod__mod_autoindex.md#indexstylesheet) | [mod\_autoindex](mod__mod_autoindex.md) |
| Adds a CSS stylesheet to the directory index | |
| [MetaDir](mod__mod_cern_meta.md#metadir) | [mod\_cern\_meta](mod__mod_cern_meta.md) |
| Name of the directory to find CERN-style meta information files | |
| [MetaFiles](mod__mod_cern_meta.md#metafiles) | [mod\_cern\_meta](mod__mod_cern_meta.md) |
| Activates CERN meta-file processing | |
| [MetaSuffix](mod__mod_cern_meta.md#metasuffix) | [mod\_cern\_meta](mod__mod_cern_meta.md) |
| File name suffix for the file containing CERN-style meta information | |
| [ReadmeName](mod__mod_autoindex.md#readmename) | [mod\_autoindex](mod__mod_autoindex.md) |
| Name of the file that will be inserted at the end of the index listing | |

[![top](../images/up.gif)](#page-header)

## Limit

The following directives are allowed in .htaccess files when
`AllowOverride Limit` is in effect. This extremely narrow
override type mostly allows the use of the legacy authorization directives
provided by `mod_access_compat`.

|  |  |
| --- | --- |
| [Allow](mod__mod_access_compat.md#allow) | [mod\_access\_compat](mod__mod_access_compat.md) |
| Controls which hosts can access an area of the server | |
| [Deny](mod__mod_access_compat.md#deny) | [mod\_access\_compat](mod__mod_access_compat.md) |
| Controls which hosts are denied access to the server | |
| [<Limit>](mod__core.md#limit) | [core](mod__core.md) |
| Restrict enclosed access controls to only certain HTTP methods | |
| [<LimitExcept>](mod__core.md#limitexcept) | [core](mod__core.md) |
| Restrict access controls to all HTTP methods except the named ones | |
| [Order](mod__mod_access_compat.md#order) | [mod\_access\_compat](mod__mod_access_compat.md) |
| Controls the default access state and the order in which `Allow` and `Deny` are evaluated. | |

[![top](../images/up.gif)](#page-header)

## Options

The following directives are allowed in .htaccess files when
`AllowOverride Options` is in effect. They give .htaccess
users access to `Options` and similar directives, as well as
directives that control the filter chain.

|  |  |
| --- | --- |
| [CheckBasenameMatch](mod__mod_speling.md#checkbasenamematch) | [mod\_speling](mod__mod_speling.md) |
| Also match files with differing file name extensions. | |
| [CheckCaseOnly](mod__mod_speling.md#checkcaseonly) | [mod\_speling](mod__mod_speling.md) |
| Limits the action of the speling module to case corrections | |
| [CheckSpelling](mod__mod_speling.md#checkspelling) | [mod\_speling](mod__mod_speling.md) |
| Enables the spelling module | |
| [ContentDigest](mod__core.md#contentdigest) | [core](mod__core.md) |
| Enables the generation of `Content-MD5` HTTP Response headers | |
| [FilterChain](mod__mod_filter.md#filterchain) | [mod\_filter](mod__mod_filter.md) |
| Configure the filter chain | |
| [FilterDeclare](mod__mod_filter.md#filterdeclare) | [mod\_filter](mod__mod_filter.md) |
| Declare a smart filter | |
| [FilterProtocol](mod__mod_filter.md#filterprotocol) | [mod\_filter](mod__mod_filter.md) |
| Deal with correct HTTP protocol handling | |
| [FilterProvider](mod__mod_filter.md#filterprovider) | [mod\_filter](mod__mod_filter.md) |
| Register a content filter | |
| [Options](mod__core.md#options) | [core](mod__core.md) |
| Configures what features are available in a particular directory | |
| [ReflectorHeader](mod__mod_reflector.md#reflectorheader) | [mod\_reflector](mod__mod_reflector.md) |
| Reflect an input header to the output headers | |
| [SSLOptions](mod__mod_ssl.md#ssloptions) | [mod\_ssl](mod__mod_ssl.md) |
| Configure various SSL engine run-time options | |
| [XBitHack](mod__mod_include.md#xbithack) | [mod\_include](mod__mod_include.md) |
| Parse SSI directives in files with the execute bit set | |

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/overrides.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/overrides.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
