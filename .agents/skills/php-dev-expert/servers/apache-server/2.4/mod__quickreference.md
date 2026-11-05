# Directive Quick Reference - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/quickreference.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Directive Quick Reference

The directive quick reference shows the usage, default, status,
and context of each Apache configuration directive. For more
information about each of these, see the [Directive Dictionary](mod__directive-dict.md).

The first column gives the directive name and usage. The second
column shows the default value of the directive, if a default exists.
If the default is too large to display, it will be truncated
and followed by "+".

The third and fourth columns list the contexts where the directive
is allowed and the status of the directive according to the legend
tables below.

|  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| [A](#A) | [B](#B) | [C](#C) | [D](#D) | [E](#E) | [F](#F) | [G](#G) | [H](#H) | [I](#I) | [K](#K) | [L](#L) | [M](#M) | [N](#N) | [O](#O) | [P](#P) | [Q](#Q) | [R](#R) | [S](#S) | [T](#T) | [U](#U) | [V](#V) | [W](#W) | [X](#X) | |  |  | | --- | --- | | s | server config | | v | virtual host | | d | directory | | h | .htaccess | | p | proxy section | | |  |  | | --- | --- | | C | Core | | M | MPM | | B | Base | | E | Extension | | X | Experimental | | T | External | |

|  |  |  |  |
| --- | --- | --- | --- |
| [AcceptFilter protocol accept\_filter](mod__core.md#acceptfilter) |  | s | C |
| Configures optimizations for a Protocol's Listener Sockets | | | |
| [AcceptPathInfo On|Off|Default](mod__core.md#acceptpathinfo) | Default | svdh | C |
| Resources accept trailing pathname information | | | |
| [AccessFileName filename [filename] ...](mod__core.md#accessfilename) | .htaccess | sv | C |
| Name of the distributed configuration file | | | |
| [Action action-type cgi-script [virtual]](mod__mod_actions.md#action) |  | svdh | B |
| Activates a CGI script for a particular handler or content-type | | | |
| [AddAlt string file [file] ...](mod__mod_autoindex.md#addalt) |  | svdh | B |
| Alternate text to display for a file, instead of an icon selected by filename | | | |
| [AddAltByEncoding string MIME-encoding [MIME-encoding] ...](mod__mod_autoindex.md#addaltbyencoding) |  | svdh | B |
| Alternate text to display for a file instead of an icon selected by MIME-encoding | | | |
| [AddAltByType string MIME-type [MIME-type] ...](mod__mod_autoindex.md#addaltbytype) |  | svdh | B |
| Alternate text to display for a file, instead of an icon selected by MIME content-type | | | |
| [AddCharset charset extension [extension] ...](mod__mod_mime.md#addcharset) |  | svdh | B |
| Maps the given filename extensions to the specified content charset | | | |
| [AddDefaultCharset On|Off|charset](mod__core.md#adddefaultcharset) | Off | svdh | C |
| Default charset parameter to be added when a response content-type is `text/plain` or `text/html` | | | |
| [AddDescription string file [file] ...](mod__mod_autoindex.md#adddescription) |  | svdh | B |
| Description to display for a file | | | |
| [AddEncoding encoding extension [extension] ...](mod__mod_mime.md#addencoding) |  | svdh | B |
| Maps the given filename extensions to the specified encoding type | | | |
| [AddHandler handler-name extension [extension] ...](mod__mod_mime.md#addhandler) |  | svdh | B |
| Maps the filename extensions to the specified handler | | | |
| [AddIcon icon name [name] ...](mod__mod_autoindex.md#addicon) |  | svdh | B |
| Icon to display for a file selected by name | | | |
| [AddIconByEncoding icon MIME-encoding [MIME-encoding] ...](mod__mod_autoindex.md#addiconbyencoding) |  | svdh | B |
| Icon to display next to files selected by MIME content-encoding | | | |
| [AddIconByType icon MIME-type [MIME-type] ...](mod__mod_autoindex.md#addiconbytype) |  | svdh | B |
| Icon to display next to files selected by MIME content-type | | | |
| [AddInputFilter filter[;filter...] extension [extension] ...](mod__mod_mime.md#addinputfilter) |  | svdh | B |
| Maps filename extensions to the filters that will process client requests | | | |
| [AddLanguage language-tag extension [extension] ...](mod__mod_mime.md#addlanguage) |  | svdh | B |
| Maps the given filename extension to the specified content language | | | |
| [AddModuleInfo module-name string](mod__mod_info.md#addmoduleinfo) |  | sv | E |
| Adds additional information to the module information displayed by the server-info handler | | | |
| [AddOutputFilter filter[;filter...] extension [extension] ...](mod__mod_mime.md#addoutputfilter) |  | svdh | B |
| Maps filename extensions to the filters that will process responses from the server | | | |
| [AddOutputFilterByType filter[;filter...] media-type [media-type] ...](mod__mod_filter.md#addoutputfilterbytype) |  | svdh | B |
| assigns an output filter to a particular media-type | | | |
| [AddType media-type extension [extension] ...](mod__mod_mime.md#addtype) |  | svdh | B |
| Maps the given filename extensions onto the specified content type | | | |
| [Alias [URL-path] file-path|directory-path](mod__mod_alias.md#alias) |  | sv | B |
| Maps URLs to filesystem locations | | | |
| [AliasMatch regex file-path|directory-path](mod__mod_alias.md#aliasmatch) |  | sv | B |
| Maps URLs to filesystem locations using regular expressions | | | |
| [AliasPreservePath OFF|ON](mod__mod_alias.md#aliaspreservepath) | OFF | svd | B |
| Map the full path after the alias in a location. | | | |
| [Allow from all|host|env=[!]env-variable [host|env=[!]env-variable] ...](mod__mod_access_compat.md#allow) |  | dh | D |
| Controls which hosts can access an area of the server | | | |
| [AllowCONNECT port[-port] [port[-port]] ...](mod__mod_proxy_connect.md#allowconnect) | 443 563 | sv | E |
| Ports that are allowed to `CONNECT` through the proxy | | | |
| [AllowEncodedSlashes On|Off|NoDecode](mod__core.md#allowencodedslashes) | Off | sv | C |
| Determines whether encoded path separators in URLs are allowed to be passed through | | | |
| [AllowMethods reset|*HTTP-method* [*HTTP-method*]...](mod__mod_allowmethods.md#allowmethods) | reset | d | X |
| Restrict access to the listed HTTP methods | | | |
| [AllowOverride All|None|directive-type [directive-type] ...](mod__core.md#allowoverride) | None | d | C |
| Types of directives that are allowed in `.htaccess` files | | | |
| [AllowOverrideList None|directive [directive] ...](mod__core.md#allowoverridelist) | None | d | C |
| Individual directives that are allowed in `.htaccess` files | | | |
| [Anonymous user [user] ...](mod__mod_authn_anon.md#anonymous) |  | dh | E |
| Specifies userIDs that are allowed access without password verification | | | |
| [Anonymous\_LogEmail On|Off](mod__mod_authn_anon.md#anonymous_logemail) | On | dh | E |
| Sets whether the password entered will be logged in the error log | | | |
| [Anonymous\_MustGiveEmail On|Off](mod__mod_authn_anon.md#anonymous_mustgiveemail) | On | dh | E |
| Specifies whether blank passwords are allowed | | | |
| [Anonymous\_NoUserID On|Off](mod__mod_authn_anon.md#anonymous_nouserid) | Off | dh | E |
| Sets whether the userID field may be empty | | | |
| [Anonymous\_VerifyEmail On|Off](mod__mod_authn_anon.md#anonymous_verifyemail) | Off | dh | E |
| Sets whether to check the password field for a correctly formatted email address | | | |
| [AsyncRequestWorkerFactor factor](mod__event.md#asyncrequestworkerfactor) |  | s | M |
| Limit concurrent connections per process | | | |
| [AuthBasicAuthoritative On|Off](mod__mod_auth_basic.md#authbasicauthoritative) | On | dh | B |
| Sets whether authorization and authentication are passed to lower level modules | | | |
| [AuthBasicFake off|username [password]](mod__mod_auth_basic.md#authbasicfake) |  | dh | B |
| Fake basic authentication using the given expressions for username and password | | | |
| [AuthBasicProvider provider-name [provider-name] ...](mod__mod_auth_basic.md#authbasicprovider) | file | dh | B |
| Sets the authentication provider(s) for this location | | | |
| [AuthBasicUseDigestAlgorithm MD5|Off](mod__mod_auth_basic.md#authbasicusedigestalgorithm) | Off | dh | B |
| Check passwords against the authentication providers as if Digest Authentication was in force instead of Basic Authentication. | | | |
| [AuthDBDUserPWQuery query](mod__mod_authn_dbd.md#authdbduserpwquery) |  | d | E |
| SQL query to look up a password for a user | | | |
| [AuthDBDUserRealmQuery query](mod__mod_authn_dbd.md#authdbduserrealmquery) |  | d | E |
| SQL query to look up a password hash for a user and realm. | | | |
| [AuthDBMGroupFile file-path](mod__mod_authz_dbm.md#authdbmgroupfile) |  | dh | E |
| Sets the name of the database file containing the list of user groups for authorization | | | |
| [AuthDBMType default|SDBM|GDBM|NDBM|DB](mod__mod_authn_dbm.md#authdbmtype) | default | dh | E |
| Sets the type of database file that is used to store passwords | | | |
| [AuthDBMUserFile file-path](mod__mod_authn_dbm.md#authdbmuserfile) |  | dh | E |
| Sets the name of a database file containing the list of users and passwords for authentication | | | |
| [AuthDigestAlgorithm MD5|MD5-sess](mod__mod_auth_digest.md#authdigestalgorithm) | MD5 | dh | E |
| Selects the algorithm used to calculate the challenge and response hashes in digest authentication | | | |
| [AuthDigestDomain URI [URI] ...](mod__mod_auth_digest.md#authdigestdomain) |  | dh | E |
| URIs that are in the same protection space for digest authentication | | | |
| [AuthDigestNonceLifetime seconds](mod__mod_auth_digest.md#authdigestnoncelifetime) | 300 | dh | E |
| How long the server nonce is valid | | | |
| [AuthDigestProvider provider-name [provider-name] ...](mod__mod_auth_digest.md#authdigestprovider) | file | dh | E |
| Sets the authentication provider(s) for this location | | | |
| [AuthDigestQop none|auth|auth-int [auth|auth-int]](mod__mod_auth_digest.md#authdigestqop) | auth | dh | E |
| Determines the quality-of-protection to use in digest authentication | | | |
| [AuthDigestShmemSize size](mod__mod_auth_digest.md#authdigestshmemsize) | 1000 | s | E |
| The amount of shared memory to allocate for keeping track of clients | | | |
| [AuthFormAuthoritative On|Off](mod__mod_auth_form.md#authformauthoritative) | On | dh | B |
| Sets whether authorization and authentication are passed to lower level modules | | | |
| [AuthFormBody fieldname](mod__mod_auth_form.md#authformbody) | httpd\_body | d | B |
| The name of a form field carrying the body of the request to attempt on successful login | | | |
| [AuthFormDisableNoStore On|Off](mod__mod_auth_form.md#authformdisablenostore) | Off | d | B |
| Disable the CacheControl no-store header on the login page | | | |
| [AuthFormFakeBasicAuth On|Off](mod__mod_auth_form.md#authformfakebasicauth) | Off | d | B |
| Fake a Basic Authentication header | | | |
| [AuthFormLocation fieldname](mod__mod_auth_form.md#authformlocation) | httpd\_location | d | B |
| The name of a form field carrying a URL to redirect to on successful login | | | |
| [AuthFormLoginRequiredLocation url](mod__mod_auth_form.md#authformloginrequiredlocation) |  | d | B |
| The URL of the page to be redirected to should login be required | | | |
| [AuthFormLoginSuccessLocation url](mod__mod_auth_form.md#authformloginsuccesslocation) |  | d | B |
| The URL of the page to be redirected to should login be successful | | | |
| [AuthFormLogoutLocation uri](mod__mod_auth_form.md#authformlogoutlocation) |  | d | B |
| The URL to redirect to after a user has logged out | | | |
| [AuthFormMethod fieldname](mod__mod_auth_form.md#authformmethod) | httpd\_method | d | B |
| The name of a form field carrying the method of the request to attempt on successful login | | | |
| [AuthFormMimetype fieldname](mod__mod_auth_form.md#authformmimetype) | httpd\_mimetype | d | B |
| The name of a form field carrying the mimetype of the body of the request to attempt on successful login | | | |
| [AuthFormPassword fieldname](mod__mod_auth_form.md#authformpassword) | httpd\_password | d | B |
| The name of a form field carrying the login password | | | |
| [AuthFormProvider provider-name [provider-name] ...](mod__mod_auth_form.md#authformprovider) | file | dh | B |
| Sets the authentication provider(s) for this location | | | |
| [AuthFormSitePassphrase secret](mod__mod_auth_form.md#authformsitepassphrase) |  | d | B |
| Bypass authentication checks for high traffic sites | | | |
| [AuthFormSize size](mod__mod_auth_form.md#authformsize) | 8192 | d | B |
| The largest size of the form in bytes that will be parsed for the login details | | | |
| [AuthFormUsername fieldname](mod__mod_auth_form.md#authformusername) | httpd\_username | d | B |
| The name of a form field carrying the login username | | | |
| [AuthGroupFile file-path](mod__mod_authz_groupfile.md#authgroupfile) |  | dh | B |
| Sets the name of a text file containing the list of user groups for authorization | | | |
| [AuthLDAPAuthorizePrefix prefix](mod__mod_authnz_ldap.md#authldapauthorizeprefix) | AUTHORIZE\_ | dh | E |
| Specifies the prefix for environment variables set during authorization | | | |
| [AuthLDAPBindAuthoritative off|on](mod__mod_authnz_ldap.md#authldapbindauthoritative) | on | dh | E |
| Determines if other authentication providers are used when a user can be mapped to a DN but the server cannot successfully bind with the user's credentials. | | | |
| [AuthLDAPBindDN distinguished-name](mod__mod_authnz_ldap.md#authldapbinddn) |  | dh | E |
| Optional DN to use in binding to the LDAP server | | | |
| [AuthLDAPBindPassword password](mod__mod_authnz_ldap.md#authldapbindpassword) |  | dh | E |
| Password used in conjunction with the bind DN | | | |
| [AuthLDAPCharsetConfig file-path](mod__mod_authnz_ldap.md#authldapcharsetconfig) |  | s | E |
| Language to charset conversion configuration file | | | |
| [AuthLDAPCompareAsUser on|off](mod__mod_authnz_ldap.md#authldapcompareasuser) | off | dh | E |
| Use the authenticated user's credentials to perform authorization comparisons | | | |
| [AuthLDAPCompareDNOnServer on|off](mod__mod_authnz_ldap.md#authldapcomparednonserver) | on | dh | E |
| Use the LDAP server to compare the DNs | | | |
| [AuthLDAPDereferenceAliases never|searching|finding|always](mod__mod_authnz_ldap.md#authldapdereferencealiases) | always | dh | E |
| When will the module de-reference aliases | | | |
| [AuthLDAPGroupAttribute attribute](mod__mod_authnz_ldap.md#authldapgroupattribute) | member uniqueMember + | dh | E |
| LDAP attributes used to identify the user members of groups. | | | |
| [AuthLDAPGroupAttributeIsDN on|off](mod__mod_authnz_ldap.md#authldapgroupattributeisdn) | on | dh | E |
| Use the DN of the client username when checking for group membership | | | |
| [AuthLDAPInitialBindAsUser off|on](mod__mod_authnz_ldap.md#authldapinitialbindasuser) | off | dh | E |
| Determines if the server does the initial DN lookup using the basic authentication users' own username, instead of anonymously or with hard-coded credentials for the server | | | |
| [AuthLDAPInitialBindPattern regex substitution](mod__mod_authnz_ldap.md#authldapinitialbindpattern) | (.\*) $1 (remote use + | dh | E |
| Specifies the transformation of the basic authentication username to be used when binding to the LDAP server to perform a DN lookup | | | |
| [AuthLDAPMaxSubGroupDepth Number](mod__mod_authnz_ldap.md#authldapmaxsubgroupdepth) | 10 | dh | E |
| Specifies the maximum sub-group nesting depth that will be evaluated before the user search is discontinued. | | | |
| [AuthLDAPRemoteUserAttribute uid](mod__mod_authnz_ldap.md#authldapremoteuserattribute) |  | dh | E |
| Use the value of the attribute returned during the user query to set the REMOTE\_USER environment variable | | | |
| [AuthLDAPRemoteUserIsDN on|off](mod__mod_authnz_ldap.md#authldapremoteuserisdn) | off | dh | E |
| Use the DN of the client username to set the REMOTE\_USER environment variable | | | |
| [AuthLDAPSearchAsUser on|off](mod__mod_authnz_ldap.md#authldapsearchasuser) | off | dh | E |
| Use the authenticated user's credentials to perform authorization searches | | | |
| [AuthLDAPSubGroupAttribute attribute](mod__mod_authnz_ldap.md#authldapsubgroupattribute) | member uniqueMember + | dh | E |
| Specifies the attribute labels, one value per directive line, used to distinguish the members of the current group that are groups. | | | |
| [AuthLDAPSubGroupClass LdapObjectClass](mod__mod_authnz_ldap.md#authldapsubgroupclass) | groupOfNames groupO + | dh | E |
| Specifies which LDAP objectClass values identify directory objects that are groups during sub-group processing. | | | |
| [AuthLDAPURL url [NONE|SSL|TLS|STARTTLS]](mod__mod_authnz_ldap.md#authldapurl) |  | dh | E |
| URL specifying the LDAP search parameters | | | |
| [AuthMerging Off | And | Or](mod__mod_authz_core.md#authmerging) | Off | dh | B |
| Controls the manner in which each configuration section's authorization logic is combined with that of preceding configuration sections. | | | |
| [AuthName auth-domain](mod__mod_authn_core.md#authname) |  | dh | B |
| Authorization realm for use in HTTP authentication | | | |
| [AuthnCacheContext directory|server|custom-string](mod__mod_authn_socache.md#authncachecontext) | directory | d | B |
| Specify a context string for use in the cache key | | | |
| [AuthnCacheEnable](mod__mod_authn_socache.md#authncacheenable) |  | s | B |
| Enable Authn caching configured anywhere | | | |
| [AuthnCacheProvideFor authn-provider [...]](mod__mod_authn_socache.md#authncacheprovidefor) |  | dh | B |
| Specify which authn provider(s) to cache for | | | |
| [AuthnCacheSOCache provider-name[:provider-args]](mod__mod_authn_socache.md#authncachesocache) |  | s | B |
| Select socache backend provider to use | | | |
| [AuthnCacheTimeout timeout (seconds)](mod__mod_authn_socache.md#authncachetimeout) | 300 (5 minutes) | dh | B |
| Set a timeout for cache entries | | | |
| [<AuthnProviderAlias baseProvider Alias> ... </AuthnProviderAlias>](mod__mod_authn_core.md#authnprovideralias) |  | s | B |
| Enclose a group of directives that represent an extension of a base authentication provider and referenced by the specified alias | | | |
| [AuthnzFcgiCheckAuthnProvider *provider-name*|`None` *option* ...](mod__mod_authnz_fcgi.md#authnzfcgicheckauthnprovider) |  | d | E |
| Enables a FastCGI application to handle the check\_authn authentication hook. | | | |
| [AuthnzFcgiDefineProvider *type* *provider-name* *backend-address*](mod__mod_authnz_fcgi.md#authnzfcgidefineprovider) |  | s | E |
| Defines a FastCGI application as a provider for authentication and/or authorization | | | |
| [AuthType None|Basic|Digest|Form](mod__mod_authn_core.md#authtype) |  | dh | B |
| Type of user authentication | | | |
| [AuthUserFile file-path](mod__mod_authn_file.md#authuserfile) |  | dh | B |
| Sets the name of a text file containing the list of users and passwords for authentication | | | |
| [AuthzDBDLoginToReferer On|Off](mod__mod_authz_dbd.md#authzdbdlogintoreferer) | Off | d | E |
| Determines whether to redirect the Client to the Referring page on successful login or logout if a `Referer` request header is present | | | |
| [AuthzDBDQuery query](mod__mod_authz_dbd.md#authzdbdquery) |  | d | E |
| Specify the SQL Query for the required operation | | | |
| [AuthzDBDRedirectQuery query](mod__mod_authz_dbd.md#authzdbdredirectquery) |  | d | E |
| Specify a query to look up a login page for the user | | | |
| [AuthzDBMType default|SDBM|GDBM|NDBM|DB](mod__mod_authz_dbm.md#authzdbmtype) | default | dh | E |
| Sets the type of database file that is used to store list of user groups | | | |
| [<AuthzProviderAlias baseProvider Alias Require-Parameters> ... </AuthzProviderAlias>](mod__mod_authz_core.md#authzprovideralias) |  | s | B |
| Enclose a group of directives that represent an extension of a base authorization provider and referenced by the specified alias | | | |
| [AuthzSendForbiddenOnFailure On|Off](mod__mod_authz_core.md#authzsendforbiddenonfailure) | Off | dh | B |
| Send '403 FORBIDDEN' instead of '401 UNAUTHORIZED' if authentication succeeds but authorization fails | | | |
| [BalancerGrowth #](mod__mod_proxy.md#balancergrowth) | 5 | sv | E |
| Number of additional Balancers that can be added Post-configuration | | | |
| [BalancerInherit On|Off](mod__mod_proxy.md#balancerinherit) | On | sv | E |
| Inherit ProxyPassed Balancers/Workers from the main server | | | |
| [BalancerMember [balancerurl] url [key=value [key=value ...]]](mod__mod_proxy.md#balancermember) |  | d | E |
| Add a member to a load balancing group | | | |
| [BalancerPersist On|Off](mod__mod_proxy.md#balancerpersist) | Off | sv | E |
| Attempt to persist changes made by the Balancer Manager across restarts. | | | |
| [BrotliAlterETag AddSuffix|NoChange|Remove](mod__mod_brotli.md#brotlialteretag) | AddSuffix | sv | E |
| How the outgoing ETag header should be modified during compression | | | |
| [BrotliCompressionMaxInputBlock value](mod__mod_brotli.md#brotlicompressionmaxinputblock) |  | sv | E |
| Maximum input block size | | | |
| [BrotliCompressionQuality value](mod__mod_brotli.md#brotlicompressionquality) | 5 | sv | E |
| Compression quality | | | |
| [BrotliCompressionWindow value](mod__mod_brotli.md#brotlicompressionwindow) | 18 | sv | E |
| Brotli sliding compression window size | | | |
| [BrotliFilterNote [type] notename](mod__mod_brotli.md#brotlifilternote) |  | sv | E |
| Places the compression ratio in a note for logging | | | |
| [BrowserMatch *regex [!]env-variable*[=*value*] [[!]*env-variable*[=*value*]] ...](mod__mod_setenvif.md#browsermatch) |  | svdh | B |
| Sets environment variables conditional on HTTP User-Agent | | | |
| [BrowserMatchNoCase *regex [!]env-variable*[=*value*] [[!]*env-variable*[=*value*]] ...](mod__mod_setenvif.md#browsermatchnocase) |  | svdh | B |
| Sets environment variables conditional on User-Agent without respect to case | | | |
| [BufferedLogs On|Off](mod__mod_log_config.md#bufferedlogs) | Off | s | B |
| Buffer log entries in memory before writing to disk | | | |
| [BufferSize integer](mod__mod_buffer.md#buffersize) | 131072 | dh | E |
| Maximum size in bytes to buffer by the buffer filter | | | |
| [CacheDefaultExpire seconds](mod__mod_cache.md#cachedefaultexpire) | 3600 (one hour) | svdh | E |
| The default duration to cache a document when no expiry date is specified. | | | |
| [CacheDetailHeader on|off](mod__mod_cache.md#cachedetailheader) | off | svdh | E |
| Add an X-Cache-Detail header to the response. | | | |
| [CacheDirLength length](mod__mod_cache_disk.md#cachedirlength) | 2 | sv | E |
| The number of characters in subdirectory names | | | |
| [CacheDirLevels levels](mod__mod_cache_disk.md#cachedirlevels) | 2 | sv | E |
| The number of levels of subdirectories in the cache. | | | |
| [CacheDisable url-string | on](mod__mod_cache.md#cachedisable) |  | svdh | E |
| Disable caching of specified URLs | | | |
| [CacheEnable cache\_type [url-string]](mod__mod_cache.md#cacheenable) |  | svd | E |
| Enable caching of specified URLs using a specified storage manager | | | |
| [CacheFile file-path [file-path] ...](mod__mod_file_cache.md#cachefile) |  | s | X |
| Cache a list of file handles at startup time | | | |
| [CacheHeader on|off](mod__mod_cache.md#cacheheader) | off | svdh | E |
| Add an X-Cache header to the response. | | | |
| [CacheIgnoreCacheControl On|Off](mod__mod_cache.md#cacheignorecachecontrol) | Off | sv | E |
| Ignore request to not serve cached content to client | | | |
| [CacheIgnoreHeaders header-string [header-string] ...](mod__mod_cache.md#cacheignoreheaders) | None | sv | E |
| Do not store the given HTTP header(s) in the cache. | | | |
| [CacheIgnoreNoLastMod On|Off](mod__mod_cache.md#cacheignorenolastmod) | Off | svdh | E |
| Ignore the fact that a response has no Last Modified header. | | | |
| [CacheIgnoreQueryString On|Off](mod__mod_cache.md#cacheignorequerystring) | Off | sv | E |
| Ignore query string when caching | | | |
| [CacheIgnoreURLSessionIdentifiers identifier [identifier] ...](mod__mod_cache.md#cacheignoreurlsessionidentifiers) | None | sv | E |
| Ignore defined session identifiers encoded in the URL when caching | | | |
| [CacheKeyBaseURL URL](mod__mod_cache.md#cachekeybaseurl) |  | sv | E |
| Override the base URL of reverse proxied cache keys. | | | |
| [CacheLastModifiedFactor float](mod__mod_cache.md#cachelastmodifiedfactor) | 0.1 | svdh | E |
| The factor used to compute an expiry date based on the LastModified date. | | | |
| [CacheLock on|off](mod__mod_cache.md#cachelock) | off | sv | E |
| Enable the thundering herd lock. | | | |
| [CacheLockMaxAge integer](mod__mod_cache.md#cachelockmaxage) | 5 | sv | E |
| Set the maximum possible age of a cache lock. | | | |
| [CacheLockPath directory](mod__mod_cache.md#cachelockpath) | /tmp/mod\_cache-lock + | sv | E |
| Set the lock path directory. | | | |
| [CacheMaxExpire seconds](mod__mod_cache.md#cachemaxexpire) | 86400 (one day) | svdh | E |
| The maximum time in seconds to cache a document | | | |
| [CacheMaxFileSize bytes](mod__mod_cache_disk.md#cachemaxfilesize) | 1000000 | svdh | E |
| The maximum size (in bytes) of a document to be placed in the cache | | | |
| [CacheMinExpire seconds](mod__mod_cache.md#cacheminexpire) | 0 | svdh | E |
| The minimum time in seconds to cache a document | | | |
| [CacheMinFileSize bytes](mod__mod_cache_disk.md#cacheminfilesize) | 1 | svdh | E |
| The minimum size (in bytes) of a document to be placed in the cache | | | |
| [CacheNegotiatedDocs On|Off](mod__mod_negotiation.md#cachenegotiateddocs) | Off | sv | B |
| Allows content-negotiated documents to be cached by proxy servers | | | |
| [CacheQuickHandler on|off](mod__mod_cache.md#cachequickhandler) | on | sv | E |
| Run the cache from the quick handler. | | | |
| [CacheReadSize bytes](mod__mod_cache_disk.md#cachereadsize) | 0 | svdh | E |
| The minimum size (in bytes) of the document to read and be cached before sending the data downstream | | | |
| [CacheReadTime milliseconds](mod__mod_cache_disk.md#cachereadtime) | 0 | svdh | E |
| The minimum time (in milliseconds) that should elapse while reading before data is sent downstream | | | |
| [CacheRoot directory](mod__mod_cache_disk.md#cacheroot) |  | sv | E |
| The directory root under which cache files are stored | | | |
| [CacheSocache type[:args]](mod__mod_cache_socache.md#cachesocache) |  | sv | E |
| The shared object cache implementation to use | | | |
| [CacheSocacheMaxSize bytes](mod__mod_cache_socache.md#cachesocachemaxsize) | 102400 | svdh | E |
| The maximum size (in bytes) of an entry to be placed in the cache | | | |
| [CacheSocacheMaxTime seconds](mod__mod_cache_socache.md#cachesocachemaxtime) | 86400 | svdh | E |
| The maximum time (in seconds) for a document to be placed in the cache | | | |
| [CacheSocacheMinTime seconds](mod__mod_cache_socache.md#cachesocachemintime) | 600 | svdh | E |
| The minimum time (in seconds) for a document to be placed in the cache | | | |
| [CacheSocacheReadSize bytes](mod__mod_cache_socache.md#cachesocachereadsize) | 0 | svdh | E |
| The minimum size (in bytes) of the document to read and be cached before sending the data downstream | | | |
| [CacheSocacheReadTime milliseconds](mod__mod_cache_socache.md#cachesocachereadtime) | 0 | svdh | E |
| The minimum time (in milliseconds) that should elapse while reading before data is sent downstream | | | |
| [CacheStaleOnError on|off](mod__mod_cache.md#cachestaleonerror) | on | svdh | E |
| Serve stale content in place of 5xx responses. | | | |
| [CacheStoreExpired On|Off](mod__mod_cache.md#cachestoreexpired) | Off | svdh | E |
| Attempt to cache responses that the server reports as expired | | | |
| [CacheStoreNoStore On|Off](mod__mod_cache.md#cachestorenostore) | Off | svdh | E |
| Attempt to cache requests or responses that have been marked as no-store. | | | |
| [CacheStorePrivate On|Off](mod__mod_cache.md#cachestoreprivate) | Off | svdh | E |
| Attempt to cache responses that the server has marked as private | | | |
| [CGIDScriptTimeout time[s|ms]](mod__mod_cgid.md#cgidscripttimeout) |  | svdh | B |
| The length of time to wait for more output from the CGI program | | | |
| [CGIMapExtension cgi-path .extension](mod__core.md#cgimapextension) |  | dh | C |
| Technique for locating the interpreter for CGI scripts | | | |
| [CGIPassAuth On|Off](mod__core.md#cgipassauth) | Off | dh | C |
| Enables passing HTTP authorization headers to scripts as CGI variables | | | |
| [CGIScriptTimeout time[s|ms]](mod__mod_cgi.md#cgiscripttimeout) |  | svdh | B |
| The length of time to wait for more output from the CGI program | | | |
| [CGIVar variable rule](mod__core.md#cgivar) |  | dh | C |
| Controls how some CGI variables are set | | | |
| [CharsetDefault charset](mod__mod_charset_lite.md#charsetdefault) |  | svdh | E |
| Charset to translate into | | | |
| [CharsetOptions option [option] ...](mod__mod_charset_lite.md#charsetoptions) | ImplicitAdd | svdh | E |
| Configures charset translation behavior | | | |
| [CharsetSourceEnc charset](mod__mod_charset_lite.md#charsetsourceenc) |  | svdh | E |
| Source charset of files | | | |
| [CheckBasenameMatch on|off](mod__mod_speling.md#checkbasenamematch) | On | svdh | E |
| Also match files with differing file name extensions. | | | |
| [CheckCaseOnly on|off](mod__mod_speling.md#checkcaseonly) | Off | svdh | E |
| Limits the action of the speling module to case corrections | | | |
| [CheckSpelling on|off](mod__mod_speling.md#checkspelling) | Off | svdh | E |
| Enables the spelling module | | | |
| [ChrootDir /path/to/directory](mod__mod_unixd.md#chrootdir) |  | s | B |
| Directory for apache to run chroot(8) after startup. | | | |
| [ContentDigest On|Off](mod__core.md#contentdigest) | Off | svdh | C |
| Enables the generation of `Content-MD5` HTTP Response headers | | | |
| [CookieDomain *domain*](mod__mod_usertrack.md#cookiedomain) |  | svdh | E |
| The domain to which the tracking cookie applies | | | |
| [CookieExpires *expiry-period*](mod__mod_usertrack.md#cookieexpires) |  | svdh | E |
| Expiry time for the tracking cookie | | | |
| [CookieHTTPOnly on|off](mod__mod_usertrack.md#cookiehttponly) | off | svdh | E |
| Adds the 'HTTPOnly' attribute to the cookie | | | |
| [CookieName *token*](mod__mod_usertrack.md#cookiename) | Apache | svdh | E |
| Name of the tracking cookie | | | |
| [CookieSameSite None|Lax|Strict](mod__mod_usertrack.md#cookiesamesite) |  | svdh | E |
| Adds the 'SameSite' attribute to the cookie | | | |
| [CookieSecure on|off](mod__mod_usertrack.md#cookiesecure) | off | svdh | E |
| Adds the 'Secure' attribute to the cookie | | | |
| [CookieStyle Netscape|Cookie|Cookie2|RFC2109|RFC2965](mod__mod_usertrack.md#cookiestyle) | Netscape | svdh | E |
| Format of the cookie header field | | | |
| [CookieTracking on|off](mod__mod_usertrack.md#cookietracking) | off | svdh | E |
| Enables tracking cookie | | | |
| [CoreDumpDirectory directory](mod__mpm_common.md#coredumpdirectory) |  | s | M |
| Directory where Apache HTTP Server attempts to switch before dumping core | | | |
| [CustomLog file|pipe format|nickname [env=[!]environment-variable| expr=expression]](mod__mod_log_config.md#customlog) |  | sv | B |
| Sets filename and format of log file | | | |
| [Dav On|Off|provider-name](mod__mod_dav.md#dav) | Off | d | E |
| Enable WebDAV HTTP methods | | | |
| [DavBasePath root-path](mod__mod_dav.md#davbasepath) |  | d | E |
| Configure repository root path | | | |
| [DavDepthInfinity on|off](mod__mod_dav.md#davdepthinfinity) | off | svd | E |
| Allow PROPFIND, Depth: Infinity requests | | | |
| [DavGenericLockDB file-path](mod__mod_dav_lock.md#davgenericlockdb) |  | svd | E |
| Location of the DAV lock database | | | |
| [DavLockDB file-path](mod__mod_dav_fs.md#davlockdb) |  | sv | E |
| Location of the DAV lock database | | | |
| [DavLockDiscovery on|off](mod__mod_dav_fs.md#davlockdiscovery) | on | svdh | E |
| Enable lock discovery | | | |
| [DavMinTimeout seconds](mod__mod_dav.md#davmintimeout) | 0 | svd | E |
| Minimum amount of time the server holds a lock on a DAV resource | | | |
| [DBDExptime time-in-seconds](mod__mod_dbd.md#dbdexptime) | 300 | sv | E |
| Keepalive time for idle connections | | | |
| [DBDInitSQL "SQL statement"](mod__mod_dbd.md#dbdinitsql) |  | sv | E |
| Execute an SQL statement after connecting to a database | | | |
| [DBDKeep number](mod__mod_dbd.md#dbdkeep) | 2 | sv | E |
| Maximum sustained number of connections | | | |
| [DBDMax number](mod__mod_dbd.md#dbdmax) | 10 | sv | E |
| Maximum number of connections | | | |
| [DBDMin number](mod__mod_dbd.md#dbdmin) | 1 | sv | E |
| Minimum number of connections | | | |
| [DBDParams param1=value1[,param2=value2]](mod__mod_dbd.md#dbdparams) |  | sv | E |
| Parameters for database connection | | | |
| [DBDPersist On|Off](mod__mod_dbd.md#dbdpersist) |  | sv | E |
| Whether to use persistent connections | | | |
| [DBDPrepareSQL "SQL statement" label](mod__mod_dbd.md#dbdpreparesql) |  | sv | E |
| Define an SQL prepared statement | | | |
| [DBDriver name](mod__mod_dbd.md#dbdriver) |  | sv | E |
| Specify an SQL driver | | | |
| [DefaultIcon url-path](mod__mod_autoindex.md#defaulticon) |  | svdh | B |
| Icon to display for files when no specific icon is configured | | | |
| [DefaultLanguage language-tag](mod__mod_mime.md#defaultlanguage) |  | svdh | B |
| Defines a default language-tag to be sent in the Content-Language header field for all resources in the current context that have not been assigned a language-tag by some other means. | | | |
| [DefaultRuntimeDir directory-path](mod__core.md#defaultruntimedir) | DEFAULT\_REL\_RUNTIME + | s | C |
| Base directory for the server run-time files | | | |
| [DefaultType media-type|none](mod__core.md#defaulttype) | none | svdh | C |
| This directive has no effect other than to emit warnings if the value is not `none`. In prior versions, DefaultType would specify a default media type to assign to response content for which no other media type configuration could be found. | | | |
| [Define parameter-name [parameter-value]](mod__core.md#define) |  | svd | C |
| Define a variable | | | |
| [DeflateAlterETag AddSuffix|NoChange|Remove](mod__mod_deflate.md#deflatealteretag) | AddSuffix | sv | E |
| How the outgoing ETag header should be modified during compression | | | |
| [DeflateBufferSize value](mod__mod_deflate.md#deflatebuffersize) | 8096 | sv | E |
| Fragment size to be compressed at one time by zlib | | | |
| [DeflateCompressionLevel value](mod__mod_deflate.md#deflatecompressionlevel) |  | sv | E |
| How much compression do we apply to the output | | | |
| [DeflateFilterNote [type] notename](mod__mod_deflate.md#deflatefilternote) |  | sv | E |
| Places the compression ratio in a note for logging | | | |
| [DeflateInflateLimitRequestBody value](mod__mod_deflate.md#deflateinflatelimitrequestbody) |  | svdh | E |
| Maximum size of inflated request bodies | | | |
| [DeflateInflateRatioBurst value](mod__mod_deflate.md#deflateinflateratioburst) | 3 | svdh | E |
| Maximum number of times the inflation ratio for request bodies can be crossed | | | |
| [DeflateInflateRatioLimit value](mod__mod_deflate.md#deflateinflateratiolimit) | 200 | svdh | E |
| Maximum inflation ratio for request bodies | | | |
| [DeflateMemLevel value](mod__mod_deflate.md#deflatememlevel) | 9 | sv | E |
| How much memory should be used by zlib for compression | | | |
| [DeflateWindowSize value](mod__mod_deflate.md#deflatewindowsize) | 15 | sv | E |
| Zlib compression window size | | | |
| [Deny from all|host|env=[!]env-variable [host|env=[!]env-variable] ...](mod__mod_access_compat.md#deny) |  | dh | D |
| Controls which hosts are denied access to the server | | | |
| [<Directory directory-path> ... </Directory>](mod__core.md#directory) |  | sv | C |
| Enclose a group of directives that apply only to the named file-system directory, sub-directories, and their contents. | | | |
| [DirectoryCheckHandler On|Off](mod__mod_dir.md#directorycheckhandler) | Off | svdh | B |
| Toggle how this module responds when another handler is configured | | | |
| [DirectoryIndex disabled | local-url [local-url] ...](mod__mod_dir.md#directoryindex) | index.html | svdh | B |
| List of resources to look for when the client requests a directory | | | |
| [DirectoryIndexRedirect on | off | permanent | temp | seeother | 3xx-code](mod__mod_dir.md#directoryindexredirect) | off | svdh | B |
| Configures an external redirect for directory indexes. | | | |
| [<DirectoryMatch regex> ... </DirectoryMatch>](mod__core.md#directorymatch) |  | sv | C |
| Enclose directives that apply to the contents of file-system directories matching a regular expression. | | | |
| [DirectorySlash On|Off](mod__mod_dir.md#directoryslash) | On | svdh | B |
| Toggle trailing slash redirects on or off | | | |
| [DocumentRoot directory-path](mod__core.md#documentroot) | "/usr/local/apache/ + | sv | C |
| Directory that forms the main document tree visible from the web | | | |
| [DTracePrivileges On|Off](mod__mod_privileges.md#dtraceprivileges) | Off | s | D |
| Determines whether the privileges required by dtrace are enabled. | | | |
| [DumpIOInput On|Off](mod__mod_dumpio.md#dumpioinput) | Off | s | E |
| Dump all input data to the error log | | | |
| [DumpIOOutput On|Off](mod__mod_dumpio.md#dumpiooutput) | Off | s | E |
| Dump all output data to the error log | | | |
| [<Else> ... </Else>](mod__core.md#else) |  | svdh | C |
| Contains directives that apply only if the condition of a previous `<If>` or `<ElseIf>` section is not satisfied by a request at runtime | | | |
| [<ElseIf expression> ... </ElseIf>](mod__core.md#elseif) |  | svdh | C |
| Contains directives that apply only if a condition is satisfied by a request at runtime while the condition of a previous `<If>` or `<ElseIf>` section is not satisfied | | | |
| [EnableExceptionHook On|Off](mod__mpm_common.md#enableexceptionhook) | Off | s | M |
| Enables a hook that runs exception handlers after a crash | | | |
| [EnableMMAP On|Off](mod__core.md#enablemmap) | On | svdh | C |
| Use memory-mapping to read files during delivery | | | |
| [EnableSendfile On|Off](mod__core.md#enablesendfile) | Off | svdh | C |
| Use the kernel sendfile support to deliver files to the client | | | |
| [Error message](mod__core.md#error) |  | svdh | C |
| Abort configuration parsing with a custom error message | | | |
| [ErrorDocument error-code document](mod__core.md#errordocument) |  | svdh | C |
| What the server will return to the client in case of an error | | | |
| [ErrorLog file-path|syslog[:[facility][:tag]]](mod__core.md#errorlog) | logs/error\_log (Uni + | sv | C |
| Location where the server will log errors | | | |
| [ErrorLogFormat [connection|request] format](mod__core.md#errorlogformat) |  | sv | C |
| Format specification for error log entries | | | |
| [Example](mod__mod_example_hooks.md#example) |  | svdh | X |
| Demonstration directive to illustrate the Apache module API | | | |
| [ExpiresActive On|Off](mod__mod_expires.md#expiresactive) | Off | svdh | E |
| Enables generation of `Expires` headers | | | |
| [ExpiresByType MIME-type <code>seconds](mod__mod_expires.md#expiresbytype) |  | svdh | E |
| Value of the `Expires` header configured by MIME type | | | |
| [ExpiresDefault <code>seconds](mod__mod_expires.md#expiresdefault) |  | svdh | E |
| Default algorithm for calculating expiration time | | | |
| [ExtendedStatus On|Off](mod__core.md#extendedstatus) | Off[\*] | s | C |
| Keep track of extended status information for each request | | | |
| [ExtFilterDefine filtername parameters](mod__mod_ext_filter.md#extfilterdefine) |  | s | E |
| Define an external filter | | | |
| [ExtFilterOptions option [option] ...](mod__mod_ext_filter.md#extfilteroptions) | NoLogStderr | d | E |
| Configure `mod_ext_filter` options | | | |
| [FallbackResource disabled | local-url](mod__mod_dir.md#fallbackresource) |  | svdh | B |
| Define a default URL for requests that don't map to a file or handler | | | |
| [FileETag component ...](mod__core.md#fileetag) | MTime Size | svdh | C |
| File attributes used to create the ETag HTTP response header for static files | | | |
| [<Files filename> ... </Files>](mod__core.md#files) |  | svdh | C |
| Contains directives that apply to matched filenames | | | |
| [<FilesMatch regex> ... </FilesMatch>](mod__core.md#filesmatch) |  | svdh | C |
| Contains directives that apply to regular-expression matched filenames | | | |
| [FilterChain [+=-@!]filter-name ...](mod__mod_filter.md#filterchain) |  | svdh | B |
| Configure the filter chain | | | |
| [FilterDeclare filter-name [type]](mod__mod_filter.md#filterdeclare) |  | svdh | B |
| Declare a smart filter | | | |
| [FilterProtocol filter-name [provider-name] proto-flags](mod__mod_filter.md#filterprotocol) |  | svdh | B |
| Deal with correct HTTP protocol handling | | | |
| [FilterProvider filter-name provider-name expression](mod__mod_filter.md#filterprovider) |  | svdh | B |
| Register a content filter | | | |
| [FilterTrace filter-name level](mod__mod_filter.md#filtertrace) |  | svd | B |
| Get debug/diagnostic information from `mod_filter` | | | |
| [FlushMaxPipelined number](mod__core.md#flushmaxpipelined) | 5 | sv | C |
| Maximum number of pipelined responses above which they are flushed to the network | | | |
| [FlushMaxThreshold number-of-bytes](mod__core.md#flushmaxthreshold) | 65535 | sv | C |
| Threshold above which pending data are flushed to the network | | | |
| [ForceLanguagePriority None|Prefer|Fallback [Prefer|Fallback]](mod__mod_negotiation.md#forcelanguagepriority) | Prefer | svdh | B |
| Action to take if a single acceptable document is not found | | | |
| [ForceType media-type|None](mod__core.md#forcetype) |  | dh | C |
| Forces all matching files to be served with the specified media type in the HTTP Content-Type header field | | | |
| [ForensicLog filename|pipe](mod__mod_log_forensic.md#forensiclog) |  | sv | E |
| Sets filename of the forensic log | | | |
| [GlobalLog file|pipe format|nickname [env=[!]environment-variable| expr=expression]](mod__mod_log_config.md#globallog) |  | s | B |
| Sets filename and format of log file | | | |
| [GprofDir /tmp/gprof/|/tmp/gprof/%](mod__core.md#gprofdir) |  | sv | C |
| Directory to write gmon.out profiling data to. | | | |
| [GracefulShutdownTimeout seconds](mod__mpm_common.md#gracefulshutdowntimeout) | 0 | s | M |
| Specify a timeout after which a gracefully shutdown server will exit. | | | |
| [Group unix-group](mod__mod_unixd.md#group) | #-1 | s | B |
| Group under which the server will answer requests | | | |
| [H2CopyFiles on|off](mod__mod_http2.md#h2copyfiles) | off | svdh | E |
| Determine file handling in responses | | | |
| [H2Direct on|off](mod__mod_http2.md#h2direct) | on for h2c, off for + | sv | E |
| H2 Direct Protocol Switch | | | |
| [H2EarlyHint name value](mod__mod_http2.md#h2earlyhint) |  | svdh | E |
| Add a response header to be picked up in 103 Early Hints | | | |
| [H2EarlyHints on|off](mod__mod_http2.md#h2earlyhints) | off | sv | E |
| Determine sending of 103 status codes | | | |
| [H2MaxDataFrameLen n](mod__mod_http2.md#h2maxdataframelen) | 0 | sv | E |
| Maximum bytes inside a single HTTP/2 DATA frame | | | |
| [H2MaxHeaderBlockLen n](mod__mod_http2.md#h2maxheaderblocklen) | 0 | sv | E |
| Maximum size of response headers | | | |
| [H2MaxSessionStreams n](mod__mod_http2.md#h2maxsessionstreams) | 100 | sv | E |
| Maximum number of active streams per HTTP/2 session. | | | |
| [H2MaxStreamErrors n](mod__mod_http2.md#h2maxstreamerrors) | 8 | sv | E |
| Maximum amount of client caused errors to tolerate | | | |
| [H2MaxWorkerIdleSeconds n](mod__mod_http2.md#h2maxworkeridleseconds) | 600 | s | E |
| Maximum number of seconds h2 workers remain idle until shut down. | | | |
| [H2MaxWorkers n](mod__mod_http2.md#h2maxworkers) |  | s | E |
| Maximum number of worker threads to use per child process. | | | |
| [H2MinWorkers n](mod__mod_http2.md#h2minworkers) |  | s | E |
| Minimal number of worker threads to use per child process. | | | |
| [H2ModernTLSOnly on|off](mod__mod_http2.md#h2moderntlsonly) | on | sv | E |
| Require HTTP/2 connections to be "modern TLS" only | | | |
| [H2OutputBuffering on|off](mod__mod_http2.md#h2outputbuffering) | on | sv | E |
| Determine buffering behavior of output | | | |
| [H2Padding numbits](mod__mod_http2.md#h2padding) | 0 | sv | E |
| Determine the range of padding bytes added to payload frames | | | |
| [H2ProxyRequests on|off](mod__mod_http2.md#h2proxyrequests) | off | sv | E |
| En-/Disable forward proxy requests via HTTP/2 | | | |
| [H2Push on|off](mod__mod_http2.md#h2push) | on | svdh | E |
| H2 Server Push Switch | | | |
| [H2PushDiarySize n](mod__mod_http2.md#h2pushdiarysize) | 256 | sv | E |
| H2 Server Push Diary Size | | | |
| [H2PushPriority mime-type [after|before|interleaved] [weight]](mod__mod_http2.md#h2pushpriority) | \* After 16 | sv | E |
| H2 Server Push Priority | | | |
| [H2PushResource [add] path [critical]](mod__mod_http2.md#h2pushresource) |  | svdh | E |
| Declares resources for early pushing to the client | | | |
| [H2SerializeHeaders on|off](mod__mod_http2.md#h2serializeheaders) | off | sv | E |
| Serialize Request/Response Processing Switch | | | |
| [H2StreamMaxMemSize bytes](mod__mod_http2.md#h2streammaxmemsize) | 65536 | sv | E |
| Maximum amount of output data buffered per stream. | | | |
| [H2StreamTimeout time-interval[s]](mod__mod_http2.md#h2streamtimeout) |  | svd | E |
| Maximum time waiting when sending/receiving data to stream processing | | | |
| [H2TLSCoolDownSecs seconds](mod__mod_http2.md#h2tlscooldownsecs) | 1 | sv | E |
| Configure the number of seconds of idle time on TLS before shrinking writes | | | |
| [H2TLSWarmUpSize amount](mod__mod_http2.md#h2tlswarmupsize) | 1048576 | sv | E |
| Configure the number of bytes on TLS connection before doing max writes | | | |
| [H2Upgrade on|off](mod__mod_http2.md#h2upgrade) | on for h2c, off for + | svdh | E |
| H2 Upgrade Protocol Switch | | | |
| [H2WebSockets on|off](mod__mod_http2.md#h2websockets) | off | sv | E |
| En-/Disable WebSockets via HTTP/2 | | | |
| [H2WindowSize bytes](mod__mod_http2.md#h2windowsize) | 65535 | sv | E |
| Size of Stream Window for upstream data. | | | |
| [Header [condition] add|append|echo|edit|edit\*|merge|set|setifempty|unset|note header [[expr=]value [replacement] [early|env=[!]varname|expr=expression]]](mod__mod_headers.md#header) |  | svdh | E |
| Configure HTTP response headers | | | |
| [HeaderName filename](mod__mod_autoindex.md#headername) |  | svdh | B |
| Name of the file that will be inserted at the top of the index listing | | | |
| [HeartbeatAddress addr:port](mod__mod_heartbeat.md#heartbeataddress) |  | s | X |
| Multicast address for heartbeat packets | | | |
| [HeartbeatListen addr:port](mod__mod_heartmonitor.md#heartbeatlisten) |  | s | X |
| multicast address to listen for incoming heartbeat requests | | | |
| [HeartbeatMaxServers number-of-servers](mod__mod_heartmonitor.md#heartbeatmaxservers) | 10 | s | X |
| Specifies the maximum number of servers that will be sending heartbeat requests to this server | | | |
| [HeartbeatStorage file-path](mod__mod_heartmonitor.md#heartbeatstorage) | logs/hb.dat | s | X |
| Path to store heartbeat data when using flat-file storage | | | |
| [HeartbeatStorage file-path](mod__mod_lbmethod_heartbeat.md#heartbeatstorage) | logs/hb.dat | s | X |
| Path to read heartbeat data | | | |
| [HostnameLookups On|Off|Double](mod__core.md#hostnamelookups) | Off | svd | C |
| Enables DNS lookups on client IP addresses | | | |
| [HttpProtocolOptions [Strict|Unsafe] [RegisteredMethods|LenientMethods] [Allow0.9|Require1.0]](mod__core.md#httpprotocoloptions) | Strict LenientMetho + | sv | C |
| Modify restrictions on HTTP Request Messages | | | |
| [IdentityCheck On|Off](mod__mod_ident.md#identitycheck) | Off | svd | E |
| Enables logging of the RFC 1413 identity of the remote user | | | |
| [IdentityCheckTimeout seconds](mod__mod_ident.md#identitychecktimeout) | 30 | svd | E |
| Determines the timeout duration for ident requests | | | |
| [<If expression> ... </If>](mod__core.md#if) |  | svdh | C |
| Contains directives that apply only if a condition is satisfied by a request at runtime | | | |
| [<IfDefine [!]parameter-name> ... </IfDefine>](mod__core.md#ifdefine) |  | svdh | C |
| Encloses directives that will be processed only if a test is true at startup | | | |
| [<IfDirective [!]directive-name> ... </IfDirective>](mod__core.md#ifdirective) |  | svdh | C |
| Encloses directives that are processed conditional on the presence or absence of a specific directive | | | |
| [<IfFile [!]filename> ... </IfFile>](mod__core.md#iffile) |  | svdh | C |
| Encloses directives that will be processed only if file exists at startup | | | |
| [<IfModule [!]module-file|module-identifier> ... </IfModule>](mod__core.md#ifmodule) |  | svdh | C |
| Encloses directives that are processed conditional on the presence or absence of a specific module | | | |
| [<IfSection [!]section-name> ... </IfSection>](mod__core.md#ifsection) |  | svdh | C |
| Encloses directives that are processed conditional on the presence or absence of a specific section directive | | | |
| [<IfVersion [[!]operator] version> ... </IfVersion>](mod__mod_version.md#ifversion) |  | svdh | E |
| contains version dependent configuration | | | |
| [ImapBase map|referer|URL](mod__mod_imagemap.md#imapbase) | http://servername/ | svdh | D |
| Default `base` for imagemap files | | | |
| [ImapDefault error|nocontent|map|referer|URL](mod__mod_imagemap.md#imapdefault) | nocontent | svdh | D |
| Default action when an imagemap is called with coordinates that are not explicitly mapped | | | |
| [ImapMenu none|formatted|semiformatted|unformatted](mod__mod_imagemap.md#imapmenu) | formatted | svdh | D |
| Action if no coordinates are given when calling an imagemap | | | |
| [Include file-path|directory-path|wildcard](mod__core.md#include) |  | svd | C |
| Includes other configuration files from within the server configuration files | | | |
| [IncludeOptional file-path|directory-path|wildcard](mod__core.md#includeoptional) |  | svd | C |
| Includes other configuration files from within the server configuration files | | | |
| [IndexHeadInsert "markup ..."](mod__mod_autoindex.md#indexheadinsert) |  | svdh | B |
| Inserts text in the HEAD section of an index page. | | | |
| [IndexIgnore file [file] ...](mod__mod_autoindex.md#indexignore) | "." | svdh | B |
| Adds to the list of files to hide when listing a directory | | | |
| [IndexIgnoreReset ON|OFF](mod__mod_autoindex.md#indexignorereset) |  | svdh | B |
| Empties the list of files to hide when listing a directory | | | |
| [IndexOptions [+|-]option [[+|-]option] ...](mod__mod_autoindex.md#indexoptions) |  | svdh | B |
| Various configuration settings for directory indexing | | | |
| [IndexOrderDefault Ascending|Descending Name|Date|Size|Description](mod__mod_autoindex.md#indexorderdefault) | Ascending Name | svdh | B |
| Sets the default ordering of the directory index | | | |
| [IndexStyleSheet url-path](mod__mod_autoindex.md#indexstylesheet) |  | svdh | B |
| Adds a CSS stylesheet to the directory index | | | |
| [InputSed sed-command](mod__mod_sed.md#inputsed) |  | dh | X |
| Sed command to filter request data (typically `POST` data) | | | |
| [ISAPIAppendLogToErrors on|off](mod__mod_isapi.md#isapiappendlogtoerrors) | off | svdh | B |
| Record `HSE_APPEND_LOG_PARAMETER` requests from ISAPI extensions to the error log | | | |
| [ISAPIAppendLogToQuery on|off](mod__mod_isapi.md#isapiappendlogtoquery) | on | svdh | B |
| Record `HSE_APPEND_LOG_PARAMETER` requests from ISAPI extensions to the query field | | | |
| [ISAPICacheFile file-path [file-path] ...](mod__mod_isapi.md#isapicachefile) |  | sv | B |
| ISAPI .dll files to be loaded at startup | | | |
| [ISAPIFakeAsync on|off](mod__mod_isapi.md#isapifakeasync) | off | svdh | B |
| Fake asynchronous support for ISAPI callbacks | | | |
| [ISAPILogNotSupported on|off](mod__mod_isapi.md#isapilognotsupported) | off | svdh | B |
| Log unsupported feature requests from ISAPI extensions | | | |
| [ISAPIReadAheadBuffer size](mod__mod_isapi.md#isapireadaheadbuffer) | 49152 | svdh | B |
| Size of the Read Ahead Buffer sent to ISAPI extensions | | | |
| [KeepAlive On|Off](mod__core.md#keepalive) | On | sv | C |
| Enables HTTP persistent connections | | | |
| [KeepAliveTimeout num[ms]](mod__core.md#keepalivetimeout) | 5 | sv | C |
| Amount of time the server will wait for subsequent requests on a persistent connection | | | |
| [KeptBodySize maximum size in bytes](mod__mod_request.md#keptbodysize) | 0 | d | B |
| Keep the request body instead of discarding it up to the specified maximum size, for potential use by filters such as mod\_include. | | | |
| [LanguagePriority MIME-lang [MIME-lang] ...](mod__mod_negotiation.md#languagepriority) |  | svdh | B |
| The precedence of language variants for cases where the client does not express a preference | | | |
| [LDAPCacheEntries number](mod__mod_ldap.md#ldapcacheentries) | 1024 | s | E |
| Maximum number of entries in the primary LDAP cache | | | |
| [LDAPCacheTTL seconds](mod__mod_ldap.md#ldapcachettl) | 600 | s | E |
| Time that cached items remain valid | | | |
| [LDAPConnectionPoolTTL n](mod__mod_ldap.md#ldapconnectionpoolttl) | -1 | sv | E |
| Discard backend connections that have been sitting in the connection pool too long | | | |
| [LDAPConnectionTimeout seconds](mod__mod_ldap.md#ldapconnectiontimeout) |  | s | E |
| Specifies the socket connection timeout in seconds | | | |
| [LDAPLibraryDebug 7](mod__mod_ldap.md#ldaplibrarydebug) |  | s | E |
| Enable debugging in the LDAP SDK | | | |
| [LDAPOpCacheEntries number](mod__mod_ldap.md#ldapopcacheentries) | 1024 | s | E |
| Number of entries used to cache LDAP compare operations | | | |
| [LDAPOpCacheTTL seconds](mod__mod_ldap.md#ldapopcachettl) | 600 | s | E |
| Time that entries in the operation cache remain valid | | | |
| [LDAPReferralHopLimit number](mod__mod_ldap.md#ldapreferralhoplimit) |  | dh | E |
| The maximum number of referral hops to chase before terminating an LDAP query. | | | |
| [LDAPReferrals On|Off|default](mod__mod_ldap.md#ldapreferrals) | On | dh | E |
| Enable referral chasing during queries to the LDAP server. | | | |
| [LDAPRetries number-of-retries](mod__mod_ldap.md#ldapretries) | 3 | s | E |
| Configures the number of LDAP server retries. | | | |
| [LDAPRetryDelay seconds](mod__mod_ldap.md#ldapretrydelay) | 0 | s | E |
| Configures the delay between LDAP server retries. | | | |
| [LDAPSharedCacheFile directory-path/filename](mod__mod_ldap.md#ldapsharedcachefile) |  | s | E |
| Sets the shared memory cache file | | | |
| [LDAPSharedCacheSize bytes](mod__mod_ldap.md#ldapsharedcachesize) | 500000 | s | E |
| Size in bytes of the shared-memory cache | | | |
| [LDAPTimeout seconds](mod__mod_ldap.md#ldaptimeout) | 60 | s | E |
| Specifies the timeout for LDAP search and bind operations, in seconds | | | |
| [LDAPTrustedClientCert type directory-path/filename/nickname [password]](mod__mod_ldap.md#ldaptrustedclientcert) |  | dh | E |
| Sets the file containing or nickname referring to a per connection client certificate. Not all LDAP toolkits support per connection client certificates. | | | |
| [LDAPTrustedGlobalCert type directory-path/filename [password]](mod__mod_ldap.md#ldaptrustedglobalcert) |  | s | E |
| Sets the file or database containing global trusted Certificate Authority or global client certificates | | | |
| [LDAPTrustedMode type](mod__mod_ldap.md#ldaptrustedmode) |  | sv | E |
| Specifies the SSL/TLS mode to be used when connecting to an LDAP server. | | | |
| [LDAPVerifyServerCert On|Off](mod__mod_ldap.md#ldapverifyservercert) | On | s | E |
| Force server certificate verification | | | |
| [<Limit method [method] ... > ... </Limit>](mod__core.md#limit) |  | dh | C |
| Restrict enclosed access controls to only certain HTTP methods | | | |
| [<LimitExcept method [method] ... > ... </LimitExcept>](mod__core.md#limitexcept) |  | dh | C |
| Restrict access controls to all HTTP methods except the named ones | | | |
| [LimitInternalRecursion number [number]](mod__core.md#limitinternalrecursion) | 10 | sv | C |
| Determine maximum number of internal redirects and nested subrequests | | | |
| [LimitRequestBody bytes](mod__core.md#limitrequestbody) | 1073741824 | svdh | C |
| Restricts the total size of the HTTP request body sent from the client | | | |
| [LimitRequestFields number](mod__core.md#limitrequestfields) | 100 | sv | C |
| Limits the number of HTTP request header fields that will be accepted from the client | | | |
| [LimitRequestFieldSize bytes](mod__core.md#limitrequestfieldsize) | 8190 | sv | C |
| Limits the size of the HTTP request header allowed from the client | | | |
| [LimitRequestLine bytes](mod__core.md#limitrequestline) | 8190 | sv | C |
| Limit the size of the HTTP request line that will be accepted from the client | | | |
| [LimitXMLRequestBody bytes](mod__core.md#limitxmlrequestbody) | 1000000 | svdh | C |
| Limits the size of an XML-based request body | | | |
| [Listen [IP-address:]portnumber [protocol]](mod__mpm_common.md#listen) |  | s | M |
| IP addresses and ports that the server listens to | | | |
| [ListenBackLog backlog](mod__mpm_common.md#listenbacklog) | 511 | s | M |
| Maximum length of the queue of pending connections | | | |
| [ListenCoresBucketsRatio ratio](mod__mpm_common.md#listencoresbucketsratio) | 0 (disabled) | s | M |
| Ratio between the number of CPU cores (online) and the number of listeners' buckets | | | |
| [ListenTCPDeferAccept integer](mod__mpm_common.md#listentcpdeferaccept) | 30 | s | M |
| Value set for the socket option TCP\_DEFER\_ACCEPT if it is set | | | |
| [LoadFile *filename* [*filename*] ...](mod__mod_so.md#loadfile) |  | sv | E |
| Link in the named object file or library | | | |
| [LoadModule *module filename*](mod__mod_so.md#loadmodule) |  | sv | E |
| Links in the object file or library, and adds to the list of active modules | | | |
| [<Location URL-path|URL> ... </Location>](mod__core.md#location) |  | sv | C |
| Applies the enclosed directives only to matching URLs | | | |
| [<LocationMatch regex> ... </LocationMatch>](mod__core.md#locationmatch) |  | sv | C |
| Applies the enclosed directives only to regular-expression matching URLs | | | |
| [LogFormat format|nickname [nickname]](mod__mod_log_config.md#logformat) | "%h %l %u %t \"%r\" + | sv | B |
| Describes a format for use in a log file | | | |
| [LogIOTrackTTFB ON|OFF](mod__mod_logio.md#logiotrackttfb) | OFF | svdh | E |
| Enable tracking of time to first byte (TTFB) | | | |
| [LogLevel [module:]level [module:level] ...](mod__core.md#loglevel) | warn | svd | C |
| Controls the verbosity of the ErrorLog | | | |
| [LogMessage message [hook=hook] [expr=expression]](mod__mod_log_debug.md#logmessage) |  | d | X |
| Log user-defined message to error log | | | |
| [LuaAuthzProvider provider\_name /path/to/lua/script.lua function\_name](mod__mod_lua.md#luaauthzprovider) |  | s | E |
| Plug an authorization provider function into `mod_authz_core` | | | |
| [LuaCodeCache stat|forever|never](mod__mod_lua.md#luacodecache) | stat | svdh | E |
| Configure the compiled code cache. | | | |
| [LuaHookAccessChecker /path/to/lua/script.lua hook\_function\_name [early|late]](mod__mod_lua.md#luahookaccesschecker) |  | svdh | E |
| Provide a hook for the access\_checker phase of request processing | | | |
| [LuaHookAuthChecker /path/to/lua/script.lua hook\_function\_name [early|late]](mod__mod_lua.md#luahookauthchecker) |  | svdh | E |
| Provide a hook for the auth\_checker phase of request processing | | | |
| [LuaHookCheckUserID /path/to/lua/script.lua hook\_function\_name [early|late]](mod__mod_lua.md#luahookcheckuserid) |  | svdh | E |
| Provide a hook for the check\_user\_id phase of request processing | | | |
| [LuaHookFixups /path/to/lua/script.lua hook\_function\_name](mod__mod_lua.md#luahookfixups) |  | svdh | E |
| Provide a hook for the fixups phase of a request processing | | | |
| [LuaHookInsertFilter /path/to/lua/script.lua hook\_function\_name](mod__mod_lua.md#luahookinsertfilter) |  | svdh | E |
| Provide a hook for the insert\_filter phase of request processing | | | |
| [LuaHookLog /path/to/lua/script.lua log\_function\_name](mod__mod_lua.md#luahooklog) |  | svdh | E |
| Provide a hook for the access log phase of a request processing | | | |
| [LuaHookMapToStorage /path/to/lua/script.lua hook\_function\_name](mod__mod_lua.md#luahookmaptostorage) |  | svdh | E |
| Provide a hook for the map\_to\_storage phase of request processing | | | |
| [LuaHookPreTranslate /path/to/lua/script.lua hook\_function\_name](mod__mod_lua.md#luahookpretranslate) |  | svdh | E |
| Provide a hook for the pre\_translate phase of a request processing | | | |
| [LuaHookTranslateName /path/to/lua/script.lua hook\_function\_name [early|late]](mod__mod_lua.md#luahooktranslatename) |  | sv | E |
| Provide a hook for the translate name phase of request processing | | | |
| [LuaHookTypeChecker /path/to/lua/script.lua hook\_function\_name](mod__mod_lua.md#luahooktypechecker) |  | svdh | E |
| Provide a hook for the type\_checker phase of request processing | | | |
| [LuaInherit none|parent-first|parent-last](mod__mod_lua.md#luainherit) | parent-first | svdh | E |
| Controls how parent configuration sections are merged into children | | | |
| [LuaInputFilter filter\_name /path/to/lua/script.lua function\_name](mod__mod_lua.md#luainputfilter) |  | s | E |
| Provide a Lua function for content input filtering | | | |
| [LuaMapHandler uri-pattern /path/to/lua/script.lua [function-name]](mod__mod_lua.md#luamaphandler) |  | svdh | E |
| Map a path to a lua handler | | | |
| [LuaOutputFilter filter\_name /path/to/lua/script.lua function\_name](mod__mod_lua.md#luaoutputfilter) |  | s | E |
| Provide a Lua function for content output filtering | | | |
| [LuaPackageCPath /path/to/include/?.soa](mod__mod_lua.md#luapackagecpath) |  | svdh | E |
| Add a directory to lua's package.cpath | | | |
| [LuaPackagePath /path/to/include/?.lua](mod__mod_lua.md#luapackagepath) |  | svdh | E |
| Add a directory to lua's package.path | | | |
| [LuaQuickHandler /path/to/script.lua hook\_function\_name](mod__mod_lua.md#luaquickhandler) |  | sv | E |
| Provide a hook for the quick handler of request processing | | | |
| [LuaRoot /path/to/a/directory](mod__mod_lua.md#luaroot) |  | svdh | E |
| Specify the base path for resolving relative paths for `mod_lua` directives | | | |
| [LuaScope once|request|conn|thread|server [min] [max]](mod__mod_lua.md#luascope) | once | svdh | E |
| One of once, request, conn, thread -- default is once | | | |
| [<Macro name [par1 .. parN]> ... </Macro>](mod__mod_macro.md#macro) |  | svd | B |
| Define a configuration file macro | | | |
| [MaxConnectionsPerChild number](mod__mpm_common.md#maxconnectionsperchild) | 0 | s | M |
| Limit on the number of connections that an individual child server will handle during its life | | | |
| [MaxKeepAliveRequests number](mod__core.md#maxkeepaliverequests) | 100 | sv | C |
| Number of requests allowed on a persistent connection | | | |
| [MaxMemFree KBytes](mod__mpm_common.md#maxmemfree) | 2048 | s | M |
| Maximum amount of memory that the main allocator is allowed to hold without calling `free()` | | | |
| [MaxRangeOverlaps default | unlimited | none | number-of-ranges](mod__core.md#maxrangeoverlaps) | 20 | svd | C |
| Number of overlapping ranges (eg: `100-200,150-300`) allowed before returning the complete resource | | | |
| [MaxRangeReversals default | unlimited | none | number-of-ranges](mod__core.md#maxrangereversals) | 20 | svd | C |
| Number of range reversals (eg: `100-200,50-70`) allowed before returning the complete resource | | | |
| [MaxRanges default | unlimited | none | number-of-ranges](mod__core.md#maxranges) | 200 | svd | C |
| Number of ranges allowed before returning the complete resource | | | |
| [MaxRequestWorkers number](mod__mpm_common.md#maxrequestworkers) |  | s | M |
| Maximum number of connections that will be processed simultaneously | | | |
| [MaxSpareServers number](mod__prefork.md#maxspareservers) | 10 | s | M |
| Maximum number of idle child server processes | | | |
| [MaxSpareThreads number](mod__mpm_common.md#maxsparethreads) |  | s | M |
| Maximum number of idle threads | | | |
| [MaxThreads number](mod__mpm_netware.md#maxthreads) | 2048 | s | M |
| Set the maximum number of worker threads | | | |
| [MDActivationDelay duration](mod__mod_md.md#mdactivationdelay) |  | s | X |
| How long to delay activation of new certificates | | | |
| [MDBaseServer on|off](mod__mod_md.md#mdbaseserver) | off | s | X |
| Control if base server may be managed or only virtual hosts. | | | |
| [MDCACertificateFile file](mod__mod_md.md#mdcacertificatefile) | none | s | X |
| File containing x509 trust anchors to verify ACME servers. | | | |
| [MDCAChallenges name [ name ... ]](mod__mod_md.md#mdcachallenges) | tls-alpn-01 http-01 + | s | X |
| Type of ACME challenge used to prove domain ownership. | | | |
| [MDCertificateAgreement accepted](mod__mod_md.md#mdcertificateagreement) |  | s | X |
| You confirm that you accepted the Terms of Service of the Certificate Authority. | | | |
| [MDCertificateAuthority url](mod__mod_md.md#mdcertificateauthority) | letsencrypt | s | X |
| The URL(s) of the ACME Certificate Authority to use. | | | |
| [MDCertificateCheck name url](mod__mod_md.md#mdcertificatecheck) |  | s | X |
| Set name and URL pattern for a certificate monitoring site. | | | |
| [MDCertificateFile path-to-pem-file](mod__mod_md.md#mdcertificatefile) |  | s | X |
| Specify a static certificate file for the MD. | | | |
| [MDCertificateKeyFile path-to-file](mod__mod_md.md#mdcertificatekeyfile) |  | s | X |
| Specify a static private key for for the static cerrtificate. | | | |
| [MDCertificateMonitor name url](mod__mod_md.md#mdcertificatemonitor) | crt.sh https://crt. + | s | X |
| The URL of a certificate log monitor. | | | |
| [MDCertificateProtocol protocol](mod__mod_md.md#mdcertificateprotocol) | ACME | s | X |
| The protocol to use with the Certificate Authority. | | | |
| [MDCertificateStatus on|off](mod__mod_md.md#mdcertificatestatus) | on | s | X |
| Exposes public certificate information in JSON. | | | |
| [MDChallengeDns01 path-to-command](mod__mod_md.md#mdchallengedns01) |  | s | X |
| Set the command for setup/teardown of dns-01 challenges | | | |
| [MDChallengeDns01Version 1|2](mod__mod_md.md#mdchallengedns01version) | 1 | s | X |
| Set the type of arguments to call MDChallengeDns01 with | | | |
| [MDCheckInterval duration](mod__mod_md.md#mdcheckinterval) | 12h | s | X |
| Determines how often certificates are checked | | | |
| [MDContactEmail address](mod__mod_md.md#mdcontactemail) |  | s | X |
| Email address used for account registration | | | |
| [MDDriveMode always|auto|manual](mod__mod_md.md#mddrivemode) | auto | s | X |
| former name of MDRenewMode. | | | |
| [MDExternalAccountBinding key-id hmac-64 | none | file](mod__mod_md.md#mdexternalaccountbinding) | none | s | X |
| Set the external account binding keyid and hmac values to use at CA | | | |
| [MDHttpProxy url](mod__mod_md.md#mdhttpproxy) |  | s | X |
| Define a proxy for outgoing connections. | | | |
| [MDInitialDelay duration](mod__mod_md.md#mdinitialdelay) | 0s | s | X |
| How long to delay the first certificate check. | | | |
| [MDMatchNames all|servernames](mod__mod_md.md#mdmatchnames) | all | s | X |
| Determines how DNS names are matched to vhosts | | | |
| [MDMember hostname](mod__mod_md.md#mdmember) |  | s | X |
| Additional hostname for the managed domain. | | | |
| [MDMembers auto|manual](mod__mod_md.md#mdmembers) | auto | s | X |
| Control if the alias domain names are automatically added. | | | |
| [MDMessageCmd path-to-cmd optional-args](mod__mod_md.md#mdmessagecmd) |  | s | X |
| Handle events for Manage Domains | | | |
| [MDMustStaple on|off](mod__mod_md.md#mdmuststaple) | off | s | X |
| Control if new certificates carry the OCSP Must Staple flag. | | | |
| [MDNotifyCmd path [ args ]](mod__mod_md.md#mdnotifycmd) |  | s | X |
| Run a program when a Managed Domain is ready. | | | |
| [MDomain dns-name [ other-dns-name... ] [auto|manual]](mod__mod_md.md#mdomain) |  | s | X |
| Define list of domain names that belong to one group. | | | |
| [<MDomainSet dns-name [ other-dns-name... ]>...</MDomainSet>](mod__mod_md.md#mdomainset) |  | s | X |
| Container for directives applied to the same managed domains. | | | |
| [MDPortMap map1 [ map2 ]](mod__mod_md.md#mdportmap) | http:80 https:443 | s | X |
| Map external to internal ports for domain ownership verification. | | | |
| [MDPrivateKeys type [ params... ]](mod__mod_md.md#mdprivatekeys) | RSA 2048 | s | X |
| Set type and size of the private keys generated. | | | |
| [MDProfile name](mod__mod_md.md#mdprofile) |  | s | X |
| Use a specific ACME profile from the CA | | | |
| [MDProfileMandatory on|off](mod__mod_md.md#mdprofilemandatory) | off | s | X |
| Control if an MDProfile is mandatory. | | | |
| [MDRenewMode always|auto|manual](mod__mod_md.md#mdrenewmode) | auto | s | X |
| Controls if certificates shall be renewed. | | | |
| [MDRenewViaARI on|off](mod__mod_md.md#mdrenewviaari) | on | s | X |
| usage of the ACME ARI extension (rfc9773). | | | |
| [MDRenewWindow duration](mod__mod_md.md#mdrenewwindow) | 33% | s | X |
| Control when a certificate will be renewed. | | | |
| [MDRequireHttps off|temporary|permanent](mod__mod_md.md#mdrequirehttps) | off | s | X |
| Redirects http: traffic to https: for Managed Domains. | | | |
| [MDRetryDelay duration](mod__mod_md.md#mdretrydelay) | 30s | s | X |
| Time length for first retry, doubled on every consecutive error. | | | |
| [MDRetryFailover number](mod__mod_md.md#mdretryfailover) | 13 | s | X |
| The number of errors before a failover to another CA is triggered | | | |
| [MDServerStatus on|off](mod__mod_md.md#mdserverstatus) | off | s | X |
| Control if Managed Domain information is added to `server-status`. | | | |
| [MDStapleOthers on|off](mod__mod_md.md#mdstapleothers) | on | s | X |
| Enable stapling for certificates not managed by mod\_md. | | | |
| [MDStapling on|off](mod__mod_md.md#mdstapling) | off | s | X |
| Enable stapling for all or a particular MDomain. | | | |
| [MDStaplingKeepResponse duration](mod__mod_md.md#mdstaplingkeepresponse) | 7d | s | X |
| Controls when old responses should be removed. | | | |
| [MDStaplingRenewWindow duration](mod__mod_md.md#mdstaplingrenewwindow) | 33% | s | X |
| Control when the stapling responses will be renewed. | | | |
| [MDStoreDir path](mod__mod_md.md#mdstoredir) | md | s | X |
| Path on the local file system to store the Managed Domains data. | | | |
| [MDStoreLocks on|off|duration](mod__mod_md.md#mdstorelocks) | off | s | X |
| Configure locking of store for updates | | | |
| [MDWarnWindow duration](mod__mod_md.md#mdwarnwindow) | 10% | s | X |
| Define the time window when you want to be warned about an expiring certificate. | | | |
| [MemcacheConnTTL *num[units]*](mod__mod_socache_memcache.md#memcacheconnttl) | 15s | sv | E |
| Keepalive time for idle connections | | | |
| [MergeSlashes ON|OFF](mod__core.md#mergeslashes) | ON | sv | C |
| Controls whether the server merges consecutive slashes in URLs. | | | |
| [MergeTrailers [on|off]](mod__core.md#mergetrailers) | off | sv | C |
| Determines whether trailers are merged into headers | | | |
| [MetaDir directory](mod__mod_cern_meta.md#metadir) | .web | svdh | D |
| Name of the directory to find CERN-style meta information files | | | |
| [MetaFiles on|off](mod__mod_cern_meta.md#metafiles) | off | svdh | D |
| Activates CERN meta-file processing | | | |
| [MetaSuffix suffix](mod__mod_cern_meta.md#metasuffix) | .meta | svdh | D |
| File name suffix for the file containing CERN-style meta information | | | |
| [MimeMagicFile file-path](mod__mod_mime_magic.md#mimemagicfile) |  | sv | E |
| Enable MIME-type determination based on file contents using the specified magic file | | | |
| [MinSpareServers number](mod__prefork.md#minspareservers) | 5 | s | M |
| Minimum number of idle child server processes | | | |
| [MinSpareThreads number](mod__mpm_common.md#minsparethreads) |  | s | M |
| Minimum number of idle threads available to handle request spikes | | | |
| [MMapFile file-path [file-path] ...](mod__mod_file_cache.md#mmapfile) |  | s | X |
| Map a list of files into memory at startup time | | | |
| [ModemStandard V.21|V.26bis|V.32|V.34|V.92](mod__mod_dialup.md#modemstandard) |  | d | X |
| Modem standard to simulate | | | |
| [ModMimeUsePathInfo On|Off](mod__mod_mime.md#modmimeusepathinfo) | Off | d | B |
| Tells `mod_mime` to treat `path_info` components as part of the filename | | | |
| [MultiviewsMatch Any|NegotiatedOnly|Filters|Handlers [Handlers|Filters]](mod__mod_mime.md#multiviewsmatch) | NegotiatedOnly | svdh | B |
| The types of files that will be included when searching for a matching file with MultiViews | | | |
| [Mutex mechanism [default|mutex-name] ... [OmitPID]](mod__core.md#mutex) | default | s | C |
| Configures mutex mechanism and lock file directory for all or specified mutexes | | | |
| [NameVirtualHost addr[:port]](mod__core.md#namevirtualhost) |  | s | C |
| DEPRECATED: Designates an IP address for name-virtual hosting | | | |
| [NoProxy host [host] ...](mod__mod_proxy.md#noproxy) |  | sv | E |
| Hosts, domains, or networks that will be connected to directly | | | |
| [NWSSLTrustedCerts filename [filename] ...](mod__mod_nw_ssl.md#nwssltrustedcerts) |  | s | B |
| List of additional client certificates | | | |
| [NWSSLUpgradeable [IP-address:]portnumber](mod__mod_nw_ssl.md#nwsslupgradeable) |  | s | B |
| Allows a connection to be upgraded to an SSL connection upon request | | | |
| [Options [+|-]option [[+|-]option] ...](mod__core.md#options) | FollowSymlinks | svdh | C |
| Configures what features are available in a particular directory | | | |
| [Order ordering](mod__mod_access_compat.md#order) | Deny,Allow | dh | D |
| Controls the default access state and the order in which `Allow` and `Deny` are evaluated. | | | |
| [OutputSed sed-command](mod__mod_sed.md#outputsed) |  | dh | X |
| Sed command for filtering response content | | | |
| [PassEnv env-variable [env-variable] ...](mod__mod_env.md#passenv) |  | svdh | B |
| Passes environment variables from the shell | | | |
| [PidFile filename](mod__mpm_common.md#pidfile) | logs/httpd.pid | s | M |
| File where the server records the process ID of the daemon | | | |
| [PrivilegesMode FAST|SECURE|SELECTIVE](mod__mod_privileges.md#privilegesmode) | FAST | svd | D |
| Trade off processing speed and efficiency vs security against malicious privileges-aware code. | | | |
| [Protocol protocol](mod__core.md#protocol) |  | sv | C |
| Protocol for a listening socket | | | |
| [ProtocolEcho On|Off](mod__mod_echo.md#protocolecho) | Off | sv | X |
| Turn the echo server on or off | | | |
| [Protocols protocol ...](mod__core.md#protocols) | http/1.1 | sv | C |
| Protocols available for a server/virtual host | | | |
| [ProtocolsHonorOrder On|Off](mod__core.md#protocolshonororder) | On | sv | C |
| Determines if order of Protocols determines precedence during negotiation | | | |
| [<Proxy wildcard-url> ...</Proxy>](mod__mod_proxy.md#proxy) |  | sv | E |
| Container for directives applied to proxied resources | | | |
| [Proxy100Continue Off|On](mod__mod_proxy.md#proxy100continue) | On | svd | E |
| Forward 100-continue expectation to the origin server | | | |
| [ProxyAddHeaders Off|On](mod__mod_proxy.md#proxyaddheaders) | On | svd | E |
| Add proxy information in X-Forwarded-\* headers | | | |
| [ProxyBadHeader IsError|Ignore|StartBody](mod__mod_proxy.md#proxybadheader) | IsError | sv | E |
| Determines how to handle bad header lines in a response | | | |
| [ProxyBlock \*|word|host|domain [word|host|domain] ...](mod__mod_proxy.md#proxyblock) |  | sv | E |
| Words, hosts, or domains that are banned from being proxied | | | |
| [ProxyDomain Domain](mod__mod_proxy.md#proxydomain) |  | sv | E |
| Default domain name for proxied requests | | | |
| [ProxyErrorOverride Off|On [code ...]](mod__mod_proxy.md#proxyerroroverride) | Off | svd | E |
| Override error pages for proxied content | | | |
| [ProxyExpressDBMFile pathname](mod__mod_proxy_express.md#proxyexpressdbmfile) |  | sv | E |
| Pathname to DBM file. | | | |
| [ProxyExpressDBMType type](mod__mod_proxy_express.md#proxyexpressdbmtype) | default | sv | E |
| DBM type of file. | | | |
| [ProxyExpressEnable on|off](mod__mod_proxy_express.md#proxyexpressenable) | off | sv | E |
| Enable the module functionality. | | | |
| [ProxyFCGIBackendType FPM|GENERIC](mod__mod_proxy_fcgi.md#proxyfcgibackendtype) | FPM | svdh | E |
| Specify the type of backend FastCGI application | | | |
| [ProxyFCGISetEnvIf conditional-expression [!]environment-variable-name [value-expression]](mod__mod_proxy_fcgi.md#proxyfcgisetenvif) |  | svdh | E |
| Allow variables sent to FastCGI servers to be fixed up | | | |
| [ProxyFtpDirCharset character\_set](mod__mod_proxy_ftp.md#proxyftpdircharset) | ISO-8859-1 | svd | E |
| Define the character set for proxied FTP listings | | | |
| [ProxyFtpEscapeWildcards on|off](mod__mod_proxy_ftp.md#proxyftpescapewildcards) | on | svd | E |
| Whether wildcards in requested filenames are escaped when sent to the FTP server | | | |
| [ProxyFtpListOnWildcard on|off](mod__mod_proxy_ftp.md#proxyftplistonwildcard) | on | svd | E |
| Whether wildcards in requested filenames trigger a file listing | | | |
| [ProxyHCExpr *name* {*ap\_expr expression*}](mod__mod_proxy_hcheck.md#proxyhcexpr) |  | sv | E |
| Creates a named condition expression to use to determine health of the backend based on its response | | | |
| [ProxyHCTemplate *name* *parameter*=*setting* [...]](mod__mod_proxy_hcheck.md#proxyhctemplate) |  | sv | E |
| Creates a named template for setting various health check parameters | | | |
| [ProxyHCTPsize *size*](mod__mod_proxy_hcheck.md#proxyhctpsize) | 16 | s | E |
| Sets the total server-wide size of the threadpool used for the health check workers | | | |
| [ProxyHTMLBufSize bytes](mod__mod_proxy_html.md#proxyhtmlbufsize) | 8192 | svd | B |
| Sets the buffer size increment for buffering inline scripts and stylesheets. | | | |
| [ProxyHTMLCharsetOut Charset | \*](mod__mod_proxy_html.md#proxyhtmlcharsetout) | UTF-8 | svd | B |
| Specify a charset for mod\_proxy\_html output. | | | |
| [ProxyHTMLDocType HTML|XHTML [Legacy] **OR**  ProxyHTMLDocType fpi [SGML|XML]](mod__mod_proxy_html.md#proxyhtmldoctype) |  | svd | B |
| Sets an HTML or XHTML document type declaration. | | | |
| [ProxyHTMLEnable On|Off](mod__mod_proxy_html.md#proxyhtmlenable) | Off | svd | B |
| Turns the proxy\_html filter on or off. | | | |
| [ProxyHTMLEvents attribute [attribute ...]](mod__mod_proxy_html.md#proxyhtmlevents) |  | svd | B |
| Specify attributes to treat as scripting events. | | | |
| [ProxyHTMLExtended On|Off](mod__mod_proxy_html.md#proxyhtmlextended) | Off | svd | B |
| Determines whether to fix links in inline scripts, stylesheets, and scripting events. | | | |
| [ProxyHTMLFixups [lowercase] [dospath] [reset]](mod__mod_proxy_html.md#proxyhtmlfixups) | none | svd | B |
| Fixes for simple HTML errors. | | | |
| [ProxyHTMLInterp On|Off](mod__mod_proxy_html.md#proxyhtmlinterp) | Off | svd | B |
| Enables per-request interpolation of `ProxyHTMLURLMap` rules. | | | |
| [ProxyHTMLLinks element attribute [attribute2 ...]](mod__mod_proxy_html.md#proxyhtmllinks) |  | svd | B |
| Specify HTML elements that have URL attributes to be rewritten. | | | |
| [ProxyHTMLMeta On|Off](mod__mod_proxy_html.md#proxyhtmlmeta) | Off | svd | B |
| Turns on or off extra pre-parsing of metadata in HTML `<head>` sections. | | | |
| [ProxyHTMLStripComments On|Off](mod__mod_proxy_html.md#proxyhtmlstripcomments) | Off | svd | B |
| Determines whether to strip HTML comments. | | | |
| [ProxyHTMLURLMap from-pattern to-pattern [flags] [cond]](mod__mod_proxy_html.md#proxyhtmlurlmap) |  | svd | B |
| Defines a rule to rewrite HTML links | | | |
| [ProxyIOBufferSize bytes](mod__mod_proxy.md#proxyiobuffersize) | 8192 | sv | E |
| Determine size of internal data throughput buffer | | | |
| [<ProxyMatch regex> ...</ProxyMatch>](mod__mod_proxy.md#proxymatch) |  | sv | E |
| Container for directives applied to regular-expression-matched proxied resources | | | |
| [ProxyMaxForwards number](mod__mod_proxy.md#proxymaxforwards) | -1 | sv | E |
| Maximum number of proxies that a request can be forwarded through | | | |
| [ProxyPass [path] !|url [key=value [key=value ...]] [nocanon] [interpolate] [noquery]](mod__mod_proxy.md#proxypass) |  | svd | E |
| Maps remote servers into the local server URL-space | | | |
| [ProxyPassInherit On|Off](mod__mod_proxy.md#proxypassinherit) | On | sv | E |
| Inherit ProxyPass directives defined from the main server | | | |
| [ProxyPassInterpolateEnv On|Off](mod__mod_proxy.md#proxypassinterpolateenv) | Off | svd | E |
| Enable Environment Variable interpolation in Reverse Proxy configurations | | | |
| [ProxyPassMatch [regex] !|url [key=value [key=value ...]]](mod__mod_proxy.md#proxypassmatch) |  | svd | E |
| Maps remote servers into the local server URL-space using regular expressions | | | |
| [ProxyPassReverse [path] url [interpolate]](mod__mod_proxy.md#proxypassreverse) |  | svd | E |
| Adjusts the URL in HTTP response headers sent from a reverse proxied server | | | |
| [ProxyPassReverseCookieDomain internal-domain public-domain [interpolate]](mod__mod_proxy.md#proxypassreversecookiedomain) |  | svd | E |
| Adjusts the Domain string in Set-Cookie headers from a reverse- proxied server | | | |
| [ProxyPassReverseCookiePath internal-path public-path [interpolate]](mod__mod_proxy.md#proxypassreversecookiepath) |  | svd | E |
| Adjusts the Path string in Set-Cookie headers from a reverse- proxied server | | | |
| [ProxyPreserveHost On|Off](mod__mod_proxy.md#proxypreservehost) | Off | svd | E |
| Use incoming Host HTTP request header for proxy request | | | |
| [ProxyReceiveBufferSize bytes](mod__mod_proxy.md#proxyreceivebuffersize) | 0 | sv | E |
| Network buffer size for proxied HTTP and FTP connections | | | |
| [ProxyRemote match remote-server [username:password]](mod__mod_proxy.md#proxyremote) |  | sv | E |
| Remote proxy used to handle certain requests | | | |
| [ProxyRemoteMatch regex remote-server [username:password]](mod__mod_proxy.md#proxyremotematch) |  | sv | E |
| Remote proxy used to handle requests matched by regular expressions | | | |
| [ProxyRequests On|Off](mod__mod_proxy.md#proxyrequests) | Off | sv | E |
| Enables forward (standard) proxy requests | | | |
| [ProxySCGIInternalRedirect On|Off|Headername](mod__mod_proxy_scgi.md#proxyscgiinternalredirect) | On | svd | E |
| Enable or disable internal redirect responses from the backend | | | |
| [ProxySCGISendfile On|Off|Headername](mod__mod_proxy_scgi.md#proxyscgisendfile) | Off | svd | E |
| Enable evaluation of X-Sendfile pseudo response header | | | |
| [ProxySet url key=value [key=value ...]](mod__mod_proxy.md#proxyset) |  | svd | E |
| Set various Proxy balancer or member parameters | | | |
| [ProxySourceAddress address](mod__mod_proxy.md#proxysourceaddress) |  | sv | E |
| Set local IP address for outgoing proxy connections | | | |
| [ProxyStatus Off|On|Full](mod__mod_proxy.md#proxystatus) | Off | sv | E |
| Show Proxy LoadBalancer status in mod\_status | | | |
| [ProxyTimeout seconds](mod__mod_proxy.md#proxytimeout) |  | sv | E |
| Network timeout for proxied requests | | | |
| [ProxyVia On|Off|Full|Block](mod__mod_proxy.md#proxyvia) | Off | sv | E |
| Information provided in the `Via` HTTP response header for proxied requests | | | |
| [ProxyWebsocketFallbackToProxyHttp On|Off](mod__mod_proxy_wstunnel.md#proxywebsocketfallbacktoproxyhttp) | On | sv | D |
| Instructs this module to let `mod_proxy_http` handle the request | | | |
| [QualifyRedirectURL On|Off](mod__core.md#qualifyredirecturl) | Off | svd | C |
| Controls whether the REDIRECT\_URL environment variable is fully qualified | | | |
| [ReadBufferSize bytes](mod__core.md#readbuffersize) | 8192 | svd | C |
| Size of the buffers used to read data | | | |
| [ReadmeName filename](mod__mod_autoindex.md#readmename) |  | svdh | B |
| Name of the file that will be inserted at the end of the index listing | | | |
| [ReceiveBufferSize bytes](mod__mpm_common.md#receivebuffersize) | 0 | s | M |
| TCP receive buffer size | | | |
| [Redirect [status] [URL-path] URL](mod__mod_alias.md#redirect) |  | svdh | B |
| Sends an external redirect asking the client to fetch a different URL | | | |
| [RedirectMatch [status] regex URL](mod__mod_alias.md#redirectmatch) |  | svdh | B |
| Sends an external redirect based on a regular expression match of the current URL | | | |
| [RedirectPermanent URL-path URL](mod__mod_alias.md#redirectpermanent) |  | svdh | B |
| Sends an external permanent redirect asking the client to fetch a different URL | | | |
| [RedirectRelative On|Off](mod__mod_alias.md#redirectrelative) | Off | svd | B |
| Allows relative redirect targets. | | | |
| [RedirectTemp URL-path URL](mod__mod_alias.md#redirecttemp) |  | svdh | B |
| Sends an external temporary redirect asking the client to fetch a different URL | | | |
| [RedisConnPoolTTL *num*[*units*]](mod__mod_socache_redis.md#redisconnpoolttl) | 15s | sv | E |
| TTL used for the connection pool with the Redis server(s) | | | |
| [RedisTimeout *num*[*units*]](mod__mod_socache_redis.md#redistimeout) | 5s | sv | E |
| R/W timeout used for the connection with the Redis server(s) | | | |
| [ReflectorHeader inputheader [outputheader]](mod__mod_reflector.md#reflectorheader) |  | svdh | B |
| Reflect an input header to the output headers | | | |
| [RegexDefaultOptions [none] [+|-]option [[+|-]option] ...](mod__core.md#regexdefaultoptions) | DOTALL DOLLAR\_ENDON + | s | C |
| Allow to configure global/default options for regexes | | | |
| [RegisterHttpMethod method [method [...]]](mod__core.md#registerhttpmethod) |  | s | C |
| Register non-standard HTTP methods | | | |
| [RemoteIPHeader header-field](mod__mod_remoteip.md#remoteipheader) |  | sv | B |
| Declare the header field which should be parsed for useragent IP addresses | | | |
| [RemoteIPInternalProxy proxy-ip|proxy-ip/subnet|hostname ...](mod__mod_remoteip.md#remoteipinternalproxy) |  | sv | B |
| Declare client intranet IP addresses trusted to present the RemoteIPHeader value | | | |
| [RemoteIPInternalProxyList filename](mod__mod_remoteip.md#remoteipinternalproxylist) |  | sv | B |
| Declare client intranet IP addresses trusted to present the RemoteIPHeader value | | | |
| [RemoteIPProxiesHeader HeaderFieldName](mod__mod_remoteip.md#remoteipproxiesheader) |  | sv | B |
| Declare the header field which will record all intermediate IP addresses | | | |
| [RemoteIPProxyProtocol On|Off](mod__mod_remoteip.md#remoteipproxyprotocol) |  | sv | B |
| Enable or disable PROXY protocol handling | | | |
| [RemoteIPProxyProtocolExceptions host|range [host|range] [host|range]](mod__mod_remoteip.md#remoteipproxyprotocolexceptions) |  | sv | B |
| Disable processing of PROXY header for certain hosts or networks | | | |
| [RemoteIPTrustedProxy proxy-ip|proxy-ip/subnet|hostname ...](mod__mod_remoteip.md#remoteiptrustedproxy) |  | sv | B |
| Declare client intranet IP addresses trusted to present the RemoteIPHeader value | | | |
| [RemoteIPTrustedProxyList filename](mod__mod_remoteip.md#remoteiptrustedproxylist) |  | sv | B |
| Declare client intranet IP addresses trusted to present the RemoteIPHeader value | | | |
| [RemoveCharset extension [extension] ...](mod__mod_mime.md#removecharset) |  | vdh | B |
| Removes any character set associations for a set of file extensions | | | |
| [RemoveEncoding extension [extension] ...](mod__mod_mime.md#removeencoding) |  | vdh | B |
| Removes any content encoding associations for a set of file extensions | | | |
| [RemoveHandler extension [extension] ...](mod__mod_mime.md#removehandler) |  | vdh | B |
| Removes any handler associations for a set of file extensions | | | |
| [RemoveInputFilter extension [extension] ...](mod__mod_mime.md#removeinputfilter) |  | vdh | B |
| Removes any input filter associations for a set of file extensions | | | |
| [RemoveLanguage extension [extension] ...](mod__mod_mime.md#removelanguage) |  | vdh | B |
| Removes any language associations for a set of file extensions | | | |
| [RemoveOutputFilter extension [extension] ...](mod__mod_mime.md#removeoutputfilter) |  | vdh | B |
| Removes any output filter associations for a set of file extensions | | | |
| [RemoveType extension [extension] ...](mod__mod_mime.md#removetype) |  | vdh | B |
| Removes any content type associations for a set of file extensions | | | |
| [RequestHeader add|append|edit|edit\*|merge|set|setifempty|unset header [[expr=]value [replacement] [early|env=[!]varname|expr=expression]]](mod__mod_headers.md#requestheader) |  | svdh | E |
| Configure HTTP request headers | | | |
| [RequestReadTimeout [handshake=timeout[-maxtimeout][,MinRate=rate] [header=timeout[-maxtimeout][,MinRate=rate] [body=timeout[-maxtimeout][,MinRate=rate]](mod__mod_reqtimeout.md#requestreadtimeout) | handshake=0 header= + | sv | E |
| Set timeout values for completing the TLS handshake, receiving the request headers and/or body from client. | | | |
| [Require [not] entity-name [entity-name] ...](mod__mod_authz_core.md#require) |  | dh | B |
| Tests whether an authenticated user is authorized by an authorization provider. | | | |
| [<RequireAll> ... </RequireAll>](mod__mod_authz_core.md#requireall) |  | dh | B |
| Enclose a group of authorization directives of which none must fail and at least one must succeed for the enclosing directive to succeed. | | | |
| [<RequireAny> ... </RequireAny>](mod__mod_authz_core.md#requireany) |  | dh | B |
| Enclose a group of authorization directives of which one must succeed for the enclosing directive to succeed. | | | |
| [<RequireNone> ... </RequireNone>](mod__mod_authz_core.md#requirenone) |  | dh | B |
| Enclose a group of authorization directives of which none must succeed for the enclosing directive to not fail. | | | |
| [RewriteBase *URL-path*](mod__mod_rewrite.md#rewritebase) |  | dh | E |
| Sets the base URL for per-directory rewrites | | | |
| [RewriteCond *TestString* [!]*CondPattern* [*flags*]](mod__mod_rewrite.md#rewritecond) |  | svdh | E |
| Defines a condition under which rewriting will take place | | | |
| [RewriteEngine on|off](mod__mod_rewrite.md#rewriteengine) | off | svdh | E |
| Enables or disables runtime rewriting engine | | | |
| [RewriteMap *MapName* *MapType*:*MapSource* [*MapTypeOptions*]](mod__mod_rewrite.md#rewritemap) |  | sv | E |
| Defines a mapping function for key-lookup | | | |
| [RewriteOptions Options](mod__mod_rewrite.md#rewriteoptions) |  | svdh | E |
| Sets some special options for the rewrite engine | | | |
| [RewriteRule [!]*Pattern* *Substitution* [*flags*]](mod__mod_rewrite.md#rewriterule) |  | svdh | E |
| Defines rules for the rewriting engine | | | |
| [RLimitCPU seconds|max [seconds|max]](mod__core.md#rlimitcpu) |  | svdh | C |
| Limits the CPU consumption of processes launched by Apache httpd children | | | |
| [RLimitMEM bytes|max [bytes|max]](mod__core.md#rlimitmem) |  | svdh | C |
| Limits the memory consumption of processes launched by Apache httpd children | | | |
| [RLimitNPROC number|max [number|max]](mod__core.md#rlimitnproc) |  | svdh | C |
| Limits the number of processes that can be launched by processes launched by Apache httpd children | | | |
| [Satisfy Any|All](mod__mod_access_compat.md#satisfy) | All | dh | D |
| Interaction between host-level access control and user authentication | | | |
| [ScoreBoardFile file-path](mod__mpm_common.md#scoreboardfile) | logs/apache\_runtime + | s | M |
| Location of the file used to store coordination data for the child processes | | | |
| [Script method cgi-script](mod__mod_actions.md#script) |  | svd | B |
| Activates a CGI script for a particular request method. | | | |
| [ScriptAlias [URL-path] file-path|directory-path](mod__mod_alias.md#scriptalias) |  | svd | B |
| Maps a URL to a filesystem location and designates the target as a CGI script | | | |
| [ScriptAliasMatch regex file-path|directory-path](mod__mod_alias.md#scriptaliasmatch) |  | sv | B |
| Maps a URL to a filesystem location using a regular expression and designates the target as a CGI script | | | |
| [ScriptInterpreterSource Registry|Registry-Strict|Script](mod__core.md#scriptinterpretersource) | Script | svdh | C |
| Technique for locating the interpreter for CGI scripts | | | |
| [ScriptLog file-path](mod__mod_cgi.md#scriptlog) |  | sv | B |
| Location of the CGI script error logfile | | | |
| [ScriptLogBuffer bytes](mod__mod_cgi.md#scriptlogbuffer) | 1024 | sv | B |
| Maximum amount of PUT or POST requests that will be recorded in the scriptlog | | | |
| [ScriptLogLength bytes](mod__mod_cgi.md#scriptloglength) | 10385760 | sv | B |
| Size limit of the CGI script logfile | | | |
| [ScriptSock file-path](mod__mod_cgid.md#scriptsock) | cgisock | s | B |
| The filename prefix of the socket to use for communication with the cgi daemon | | | |
| [SecureListen [IP-address:]portnumber Certificate-Name [MUTUAL]](mod__mod_nw_ssl.md#securelisten) |  | s | B |
| Enables SSL encryption for the specified port | | | |
| [SeeRequestTail On|Off](mod__core.md#seerequesttail) | Off | s | C |
| Determine if mod\_status displays the first 63 characters of a request or the last 63, assuming the request itself is greater than 63 chars. | | | |
| [SendBufferSize bytes](mod__mpm_common.md#sendbuffersize) | 0 | s | M |
| TCP buffer size | | | |
| [ServerAdmin email-address|URL](mod__core.md#serveradmin) |  | sv | C |
| Email address that the server includes in error messages sent to the client | | | |
| [ServerAlias hostname [hostname] ...](mod__core.md#serveralias) |  | v | C |
| Alternate names for a host used when matching requests to name-virtual hosts | | | |
| [ServerLimit number](mod__mpm_common.md#serverlimit) |  | s | M |
| Upper limit on configurable number of processes | | | |
| [ServerName [scheme://]domain-name|ip-address[:port]](mod__core.md#servername) |  | sv | C |
| Hostname and port that the server uses to identify itself | | | |
| [ServerPath URL-path](mod__core.md#serverpath) |  | v | C |
| Legacy URL pathname for a name-based virtual host that is accessed by an incompatible browser | | | |
| [ServerRoot directory-path](mod__core.md#serverroot) | /usr/local/apache | s | C |
| Base directory for the server installation | | | |
| [ServerSignature On|Off|EMail](mod__core.md#serversignature) | Off | svdh | C |
| Configures the footer on server-generated documents | | | |
| [ServerTokens Major|Minor|Min[imal]|Prod[uctOnly]|OS|Full](mod__core.md#servertokens) | Full | s | C |
| Configures the `Server` HTTP response header | | | |
| [Session On|Off](mod__mod_session.md#session) | Off | svdh | E |
| Enables a session for the current directory or location | | | |
| [SessionCookieName name attributes](mod__mod_session_cookie.md#sessioncookiename) |  | svdh | E |
| Name and attributes for the RFC2109 cookie storing the session | | | |
| [SessionCookieName2 name attributes](mod__mod_session_cookie.md#sessioncookiename2) |  | svdh | E |
| Name and attributes for the RFC2965 cookie storing the session | | | |
| [SessionCookieRemove On|Off](mod__mod_session_cookie.md#sessioncookieremove) | Off | svdh | E |
| Control for whether session cookies should be removed from incoming HTTP headers | | | |
| [SessionCryptoCipher name](mod__mod_session_crypto.md#sessioncryptocipher) | aes256 | svdh | X |
| The crypto cipher to be used to encrypt the session | | | |
| [SessionCryptoDriver name [param[=value]]](mod__mod_session_crypto.md#sessioncryptodriver) |  | s | X |
| The crypto driver to be used to encrypt the session | | | |
| [SessionCryptoPassphrase secret [ secret ... ]](mod__mod_session_crypto.md#sessioncryptopassphrase) |  | svdh | X |
| The key used to encrypt the session | | | |
| [SessionCryptoPassphraseFile filename](mod__mod_session_crypto.md#sessioncryptopassphrasefile) |  | svd | X |
| File containing keys used to encrypt the session | | | |
| [SessionDBDCookieName name attributes](mod__mod_session_dbd.md#sessiondbdcookiename) |  | svdh | E |
| Name and attributes for the RFC2109 cookie storing the session ID | | | |
| [SessionDBDCookieName2 name attributes](mod__mod_session_dbd.md#sessiondbdcookiename2) |  | svdh | E |
| Name and attributes for the RFC2965 cookie storing the session ID | | | |
| [SessionDBDCookieRemove On|Off](mod__mod_session_dbd.md#sessiondbdcookieremove) | On | svdh | E |
| Control for whether session ID cookies should be removed from incoming HTTP headers | | | |
| [SessionDBDDeleteLabel label](mod__mod_session_dbd.md#sessiondbddeletelabel) | deletesession | svdh | E |
| The SQL query to use to remove sessions from the database | | | |
| [SessionDBDInsertLabel label](mod__mod_session_dbd.md#sessiondbdinsertlabel) | insertsession | svdh | E |
| The SQL query to use to insert sessions into the database | | | |
| [SessionDBDPerUser On|Off](mod__mod_session_dbd.md#sessiondbdperuser) | Off | svdh | E |
| Enable a per user session | | | |
| [SessionDBDSelectLabel label](mod__mod_session_dbd.md#sessiondbdselectlabel) | selectsession | svdh | E |
| The SQL query to use to select sessions from the database | | | |
| [SessionDBDUpdateLabel label](mod__mod_session_dbd.md#sessiondbdupdatelabel) | updatesession | svdh | E |
| The SQL query to use to update existing sessions in the database | | | |
| [SessionEnv On|Off](mod__mod_session.md#sessionenv) | Off | svdh | E |
| Control whether the contents of the session are written to the HTTP\_SESSION environment variable | | | |
| [SessionExclude path](mod__mod_session.md#sessionexclude) |  | svdh | E |
| Define URL prefixes for which a session is ignored | | | |
| [SessionExpiryUpdateInterval interval](mod__mod_session.md#sessionexpiryupdateinterval) | 0 (always update) | svdh | E |
| Define the number of seconds a session's expiry may change without the session being updated | | | |
| [SessionHeader header](mod__mod_session.md#sessionheader) |  | svdh | E |
| Import session updates from a given HTTP response header | | | |
| [SessionInclude path](mod__mod_session.md#sessioninclude) |  | svdh | E |
| Define URL prefixes for which a session is valid | | | |
| [SessionMaxAge maxage](mod__mod_session.md#sessionmaxage) | 0 | svdh | E |
| Define a maximum age in seconds for a session | | | |
| [SetEnv env-variable [value]](mod__mod_env.md#setenv) |  | svdh | B |
| Sets environment variables | | | |
| [SetEnvIf *attribute regex [!]env-variable*[=*value*] [[!]*env-variable*[=*value*]] ...](mod__mod_setenvif.md#setenvif) |  | svdh | B |
| Sets environment variables based on attributes of the request | | | |
| [SetEnvIfExpr *expr [!]env-variable*[=*value*] [[!]*env-variable*[=*value*]] ...](mod__mod_setenvif.md#setenvifexpr) |  | svdh | B |
| Sets environment variables based on an ap\_expr expression | | | |
| [SetEnvIfNoCase *attribute regex [!]env-variable*[=*value*] [[!]*env-variable*[=*value*]] ...](mod__mod_setenvif.md#setenvifnocase) |  | svdh | B |
| Sets environment variables based on attributes of the request without respect to case | | | |
| [SetHandler handler-name|none|expression](mod__core.md#sethandler) |  | svdh | C |
| Forces all matching files to be processed by a handler | | | |
| [SetInputFilter filter[;filter...]](mod__core.md#setinputfilter) |  | svdh | C |
| Sets the filters that will process client requests and POST input | | | |
| [SetOutputFilter filter[;filter...]](mod__core.md#setoutputfilter) |  | svdh | C |
| Sets the filters that will process responses from the server | | | |
| [SSIEndTag tag](mod__mod_include.md#ssiendtag) | "-->" | sv | B |
| String that ends an include element | | | |
| [SSIErrorMsg message](mod__mod_include.md#ssierrormsg) | "[an error occurred + | svdh | B |
| Error message displayed when there is an SSI error | | | |
| [SSIETag on|off](mod__mod_include.md#ssietag) | off | dh | B |
| Controls whether ETags are generated by the server. | | | |
| [SSILastModified on|off](mod__mod_include.md#ssilastmodified) | off | dh | B |
| Controls whether `Last-Modified` headers are generated by the server. | | | |
| [SSILegacyExprParser on|off](mod__mod_include.md#ssilegacyexprparser) | off | dh | B |
| Enable compatibility mode for conditional expressions. | | | |
| [SSIStartTag tag](mod__mod_include.md#ssistarttag) | "<!--#" | sv | B |
| String that starts an include element | | | |
| [SSITimeFormat formatstring](mod__mod_include.md#ssitimeformat) | "%A, %d-%b-%Y %H:%M + | svdh | B |
| Configures the format in which date strings are displayed | | | |
| [SSIUndefinedEcho string](mod__mod_include.md#ssiundefinedecho) | "(none)" | svdh | B |
| String displayed when an unset variable is echoed | | | |
| [SSLCACertificateFile file-path](mod__mod_ssl.md#sslcacertificatefile) |  | sv | E |
| File of concatenated PEM-encoded CA Certificates for Client Auth | | | |
| [SSLCACertificatePath directory-path](mod__mod_ssl.md#sslcacertificatepath) |  | sv | E |
| Directory of PEM-encoded CA Certificates for Client Auth | | | |
| [SSLCADNRequestFile file-path](mod__mod_ssl.md#sslcadnrequestfile) |  | sv | E |
| File of concatenated PEM-encoded CA Certificates for defining acceptable CA names | | | |
| [SSLCADNRequestPath directory-path](mod__mod_ssl.md#sslcadnrequestpath) |  | sv | E |
| Directory of PEM-encoded CA Certificates for defining acceptable CA names | | | |
| [SSLCARevocationCheck chain|leaf|none [flags ...]](mod__mod_ssl.md#sslcarevocationcheck) | none | sv | E |
| Enable CRL-based revocation checking | | | |
| [SSLCARevocationFile file-path](mod__mod_ssl.md#sslcarevocationfile) |  | sv | E |
| File of concatenated PEM-encoded CA CRLs for Client Auth | | | |
| [SSLCARevocationPath directory-path](mod__mod_ssl.md#sslcarevocationpath) |  | sv | E |
| Directory of PEM-encoded CA CRLs for Client Auth | | | |
| [SSLCertificateChainFile file-path](mod__mod_ssl.md#sslcertificatechainfile) |  | sv | E |
| File of PEM-encoded Server CA Certificates | | | |
| [SSLCertificateFile file-path|certid](mod__mod_ssl.md#sslcertificatefile) |  | sv | E |
| Server PEM-encoded X.509 certificate data file or token identifier | | | |
| [SSLCertificateKeyFile file-path|keyid](mod__mod_ssl.md#sslcertificatekeyfile) |  | sv | E |
| Server PEM-encoded private key file | | | |
| [SSLCipherSuite [protocol] cipher-spec](mod__mod_ssl.md#sslciphersuite) | DEFAULT (depends on + | svdh | E |
| Cipher Suite available for negotiation in SSL handshake | | | |
| [SSLCompression on|off](mod__mod_ssl.md#sslcompression) | off | sv | E |
| Enable compression on the SSL level | | | |
| [SSLCryptoDevice engine](mod__mod_ssl.md#sslcryptodevice) | builtin | s | E |
| Enable use of a cryptographic hardware accelerator | | | |
| [SSLEngine on|off](mod__mod_ssl.md#sslengine) | off | sv | E |
| SSL Engine Operation Switch | | | |
| [SSLFIPS on|off](mod__mod_ssl.md#sslfips) | off | s | E |
| SSL FIPS mode Switch | | | |
| [SSLHonorCipherOrder on|off](mod__mod_ssl.md#sslhonorcipherorder) | off | sv | E |
| Option to prefer the server's cipher preference order | | | |
| [SSLInsecureRenegotiation on|off](mod__mod_ssl.md#sslinsecurerenegotiation) | off | sv | E |
| Option to enable support for insecure renegotiation | | | |
| [SSLOCSPDefaultResponder uri](mod__mod_ssl.md#sslocspdefaultresponder) |  | sv | E |
| Set the default responder URI for OCSP validation | | | |
| [SSLOCSPEnable on|leaf|off [flags]](mod__mod_ssl.md#sslocspenable) | off | sv | E |
| Enable OCSP validation of the client certificate chain | | | |
| [SSLOCSPNoverify on|off](mod__mod_ssl.md#sslocspnoverify) | off | sv | E |
| skip the OCSP responder certificates verification | | | |
| [SSLOCSPOverrideResponder on|off](mod__mod_ssl.md#sslocspoverrideresponder) | off | sv | E |
| Force use of the default responder URI for OCSP validation | | | |
| [SSLOCSPProxyURL url](mod__mod_ssl.md#sslocspproxyurl) |  | sv | E |
| Proxy URL to use for OCSP requests | | | |
| [SSLOCSPResponderCertificateFile file](mod__mod_ssl.md#sslocsprespondercertificatefile) |  | sv | E |
| Set of trusted PEM encoded OCSP responder certificates | | | |
| [SSLOCSPResponderTimeout seconds](mod__mod_ssl.md#sslocsprespondertimeout) | 10 | sv | E |
| Timeout for OCSP queries | | | |
| [SSLOCSPResponseMaxAge seconds](mod__mod_ssl.md#sslocspresponsemaxage) | -1 | sv | E |
| Maximum allowable age for OCSP responses | | | |
| [SSLOCSPResponseTimeSkew seconds](mod__mod_ssl.md#sslocspresponsetimeskew) | 300 | sv | E |
| Maximum allowable time skew for OCSP response validation | | | |
| [SSLOCSPUseRequestNonce on|off](mod__mod_ssl.md#sslocspuserequestnonce) | on | sv | E |
| Use a nonce within OCSP queries | | | |
| [SSLOpenSSLConfCmd command-name command-value](mod__mod_ssl.md#sslopensslconfcmd) |  | sv | E |
| Configure OpenSSL parameters through its *SSL\_CONF* API | | | |
| [SSLOptions [+|-]option ...](mod__mod_ssl.md#ssloptions) |  | svdh | E |
| Configure various SSL engine run-time options | | | |
| [SSLPassPhraseDialog type](mod__mod_ssl.md#sslpassphrasedialog) | builtin | s | E |
| Type of pass phrase dialog for encrypted private keys | | | |
| [SSLProtocol [+|-]protocol ...](mod__mod_ssl.md#sslprotocol) | all -SSLv3 (up to 2 + | sv | E |
| Configure usable SSL/TLS protocol versions | | | |
| [SSLProxyCACertificateFile file-path](mod__mod_ssl.md#sslproxycacertificatefile) |  | svp | E |
| File of concatenated PEM-encoded CA Certificates for Remote Server Auth | | | |
| [SSLProxyCACertificatePath directory-path](mod__mod_ssl.md#sslproxycacertificatepath) |  | svp | E |
| Directory of PEM-encoded CA Certificates for Remote Server Auth | | | |
| [SSLProxyCARevocationCheck chain|leaf|none](mod__mod_ssl.md#sslproxycarevocationcheck) | none | svp | E |
| Enable CRL-based revocation checking for Remote Server Auth | | | |
| [SSLProxyCARevocationFile file-path](mod__mod_ssl.md#sslproxycarevocationfile) |  | svp | E |
| File of concatenated PEM-encoded CA CRLs for Remote Server Auth | | | |
| [SSLProxyCARevocationPath directory-path](mod__mod_ssl.md#sslproxycarevocationpath) |  | svp | E |
| Directory of PEM-encoded CA CRLs for Remote Server Auth | | | |
| [SSLProxyCheckPeerCN on|off](mod__mod_ssl.md#sslproxycheckpeercn) | on | svp | E |
| Whether to check the remote server certificate's CN field | | | |
| [SSLProxyCheckPeerExpire on|off](mod__mod_ssl.md#sslproxycheckpeerexpire) | on | svp | E |
| Whether to check if remote server certificate is expired | | | |
| [SSLProxyCheckPeerName on|off](mod__mod_ssl.md#sslproxycheckpeername) | on | svp | E |
| Configure host name checking for remote server certificates | | | |
| [SSLProxyCipherSuite [protocol] cipher-spec](mod__mod_ssl.md#sslproxyciphersuite) | ALL:!ADH:RC4+RSA:+H + | svp | E |
| Cipher Suite available for negotiation in SSL proxy handshake | | | |
| [SSLProxyEngine on|off](mod__mod_ssl.md#sslproxyengine) | off | svp | E |
| SSL Proxy Engine Operation Switch | | | |
| [SSLProxyMachineCertificateChainFile filename](mod__mod_ssl.md#sslproxymachinecertificatechainfile) |  | svp | E |
| File of concatenated PEM-encoded CA certificates to be used by the proxy for choosing a certificate | | | |
| [SSLProxyMachineCertificateFile filename](mod__mod_ssl.md#sslproxymachinecertificatefile) |  | svp | E |
| File of concatenated PEM-encoded client certificates and keys to be used by the proxy | | | |
| [SSLProxyMachineCertificatePath directory](mod__mod_ssl.md#sslproxymachinecertificatepath) |  | svp | E |
| Directory of PEM-encoded client certificates and keys to be used by the proxy | | | |
| [SSLProxyProtocol [+|-]protocol ...](mod__mod_ssl.md#sslproxyprotocol) | all -SSLv3 (up to 2 + | svp | E |
| Configure usable SSL protocol flavors for proxy usage | | | |
| [SSLProxyVerify level](mod__mod_ssl.md#sslproxyverify) | none | svp | E |
| Type of remote server Certificate verification | | | |
| [SSLProxyVerifyDepth number](mod__mod_ssl.md#sslproxyverifydepth) | 1 | svp | E |
| Maximum depth of CA Certificates in Remote Server Certificate verification | | | |
| [SSLRandomSeed context source [bytes]](mod__mod_ssl.md#sslrandomseed) |  | s | E |
| Pseudo Random Number Generator (PRNG) seeding source | | | |
| [SSLRenegBufferSize bytes](mod__mod_ssl.md#sslrenegbuffersize) | 131072 | dh | E |
| Set the size for the SSL renegotiation buffer | | | |
| [SSLRequire expression](mod__mod_ssl.md#sslrequire) |  | dh | E |
| Allow access only when an arbitrarily complex boolean expression is true | | | |
| [SSLRequireSSL](mod__mod_ssl.md#sslrequiressl) |  | dh | E |
| Deny access when SSL is not used for the HTTP request | | | |
| [SSLSessionCache type](mod__mod_ssl.md#sslsessioncache) | none | s | E |
| Type of the global/inter-process SSL Session Cache | | | |
| [SSLSessionCacheTimeout seconds](mod__mod_ssl.md#sslsessioncachetimeout) | 300 | sv | E |
| Number of seconds before an SSL session expires in the Session Cache | | | |
| [SSLSessionTicketKeyFile file-path](mod__mod_ssl.md#sslsessionticketkeyfile) |  | sv | E |
| Persistent encryption/decryption key for TLS session tickets | | | |
| [SSLSessionTickets on|off](mod__mod_ssl.md#sslsessiontickets) | on | sv | E |
| Enable or disable use of TLS session tickets | | | |
| [SSLSRPUnknownUserSeed secret-string](mod__mod_ssl.md#sslsrpunknownuserseed) |  | sv | E |
| SRP unknown user seed | | | |
| [SSLSRPVerifierFile file-path](mod__mod_ssl.md#sslsrpverifierfile) |  | sv | E |
| Path to SRP verifier file | | | |
| [SSLStaplingCache type](mod__mod_ssl.md#sslstaplingcache) |  | s | E |
| Configures the OCSP stapling cache | | | |
| [SSLStaplingErrorCacheTimeout seconds](mod__mod_ssl.md#sslstaplingerrorcachetimeout) | 600 | sv | E |
| Number of seconds before expiring invalid responses in the OCSP stapling cache | | | |
| [SSLStaplingFakeTryLater on|off](mod__mod_ssl.md#sslstaplingfaketrylater) | on | sv | E |
| Synthesize "tryLater" responses for failed OCSP stapling queries | | | |
| [SSLStaplingForceURL uri](mod__mod_ssl.md#sslstaplingforceurl) |  | sv | E |
| Override the OCSP responder URI specified in the certificate's AIA extension | | | |
| [SSLStaplingResponderTimeout seconds](mod__mod_ssl.md#sslstaplingrespondertimeout) | 10 | sv | E |
| Timeout for OCSP stapling queries | | | |
| [SSLStaplingResponseMaxAge seconds](mod__mod_ssl.md#sslstaplingresponsemaxage) | -1 | sv | E |
| Maximum allowable age for OCSP stapling responses | | | |
| [SSLStaplingResponseTimeSkew seconds](mod__mod_ssl.md#sslstaplingresponsetimeskew) | 300 | sv | E |
| Maximum allowable time skew for OCSP stapling response validation | | | |
| [SSLStaplingReturnResponderErrors on|off](mod__mod_ssl.md#sslstaplingreturnrespondererrors) | on | sv | E |
| Pass stapling related OCSP errors on to client | | | |
| [SSLStaplingStandardCacheTimeout seconds](mod__mod_ssl.md#sslstaplingstandardcachetimeout) | 3600 | sv | E |
| Number of seconds before expiring responses in the OCSP stapling cache | | | |
| [SSLStrictSNIVHostCheck on|off](mod__mod_ssl.md#sslstrictsnivhostcheck) | off | sv | E |
| Whether to allow non-SNI clients to access a name-based virtual host. | | | |
| [SSLUserName varname](mod__mod_ssl.md#sslusername) |  | sdh | E |
| Variable name to determine user name | | | |
| [SSLUseStapling on|off](mod__mod_ssl.md#sslusestapling) | off | sv | E |
| Enable stapling of OCSP responses in the TLS handshake | | | |
| [SSLVerifyClient level](mod__mod_ssl.md#sslverifyclient) | none | svdh | E |
| Type of Client Certificate verification | | | |
| [SSLVerifyDepth number](mod__mod_ssl.md#sslverifydepth) | 1 | svdh | E |
| Maximum depth of CA Certificates in Client Certificate verification | | | |
| [SSLVHostSNIPolicy strict|secure|authonly|insecure](mod__mod_ssl.md#sslvhostsnipolicy) | secure | s | E |
| Set compatibility policy for SNI client access to virtual hosts. | | | |
| [StartServers number](mod__mpm_common.md#startservers) |  | s | M |
| Number of child server processes created at startup | | | |
| [StartThreads number](mod__mpm_common.md#startthreads) |  | s | M |
| Number of threads created on startup | | | |
| [StrictHostCheck ON|OFF](mod__core.md#stricthostcheck) | OFF | sv | C |
| Controls whether the server requires the requested hostname be listed enumerated in the virtual host handling the request | | | |
| [Substitute s/pattern/substitution/[infq]](mod__mod_substitute.md#substitute) |  | dh | E |
| Pattern to filter the response content | | | |
| [SubstituteInheritBefore on|off](mod__mod_substitute.md#substituteinheritbefore) | off | dh | E |
| Change the merge order of inherited patterns | | | |
| [SubstituteMaxLineLength bytes(b|B|k|K|m|M|g|G)](mod__mod_substitute.md#substitutemaxlinelength) | 1m | dh | E |
| Set the maximum line size | | | |
| [Suexec On|Off](mod__mod_unixd.md#suexec) |  | s | B |
| Enable or disable the suEXEC feature | | | |
| [SuexecUserGroup *User Group*](mod__mod_suexec.md#suexecusergroup) |  | sv | E |
| User and group for CGI programs to run as | | | |
| [ThreadLimit number](mod__mpm_common.md#threadlimit) |  | s | M |
| Sets the upper limit on the configurable number of threads per child process | | | |
| [ThreadsPerChild number](mod__mpm_common.md#threadsperchild) |  | s | M |
| Number of threads created by each child process | | | |
| [ThreadStackSize size](mod__mpm_common.md#threadstacksize) |  | s | M |
| The size in bytes of the stack used by threads handling client connections | | | |
| [TimeOut seconds](mod__core.md#timeout) | 60 | sv | C |
| Amount of time the server will wait for certain events before failing a request | | | |
| [TraceEnable [on|off|extended]](mod__core.md#traceenable) | on | sv | C |
| Determines the behavior on `TRACE` requests | | | |
| [TransferLog file|pipe](mod__mod_log_config.md#transferlog) |  | sv | B |
| Specify location of a log file | | | |
| [TypesConfig file-path](mod__mod_mime.md#typesconfig) | conf/mime.types | s | B |
| The location of the `mime.types` file | | | |
| [UNCList hostname [hostname...]](mod__core.md#unclist) |  | s | C |
| Controls what UNC host names can be accessed by the server | | | |
| [UnDefine parameter-name](mod__core.md#undefine) |  | s | C |
| Undefine the existence of a variable | | | |
| [UndefMacro name](mod__mod_macro.md#undefmacro) |  | svd | B |
| Undefine a macro | | | |
| [UnsetEnv env-variable [env-variable] ...](mod__mod_env.md#unsetenv) |  | svdh | B |
| Removes variables from the environment | | | |
| [Use name [value1 ... valueN]](mod__mod_macro.md#use) |  | svd | B |
| Use a macro | | | |
| [UseCanonicalName On|Off|DNS](mod__core.md#usecanonicalname) | Off | svd | C |
| Configures how the server determines its own name and port | | | |
| [UseCanonicalPhysicalPort On|Off](mod__core.md#usecanonicalphysicalport) | Off | svd | C |
| Configures how the server determines its own port | | | |
| [User unix-userid](mod__mod_unixd.md#user) | #-1 | s | B |
| The userid under which the server will answer requests | | | |
| [UserDir *directory-filename* [*directory-filename*] ...](mod__mod_userdir.md#userdir) |  | sv | B |
| Location of the user-specific directories | | | |
| [VHostCGIMode On|Off|Secure](mod__mod_privileges.md#vhostcgimode) | On | v | D |
| Determines whether the virtualhost can run subprocesses, and the privileges available to subprocesses. | | | |
| [VHostCGIPrivs [+-]?privilege-name [[+-]?privilege-name] ...](mod__mod_privileges.md#vhostcgiprivs) |  | v | D |
| Assign arbitrary privileges to subprocesses created by a virtual host. | | | |
| [VHostGroup unix-groupid](mod__mod_privileges.md#vhostgroup) |  | v | D |
| Sets the Group ID under which a virtual host runs. | | | |
| [VHostPrivs [+-]?privilege-name [[+-]?privilege-name] ...](mod__mod_privileges.md#vhostprivs) |  | v | D |
| Assign arbitrary privileges to a virtual host. | | | |
| [VHostSecure On|Off](mod__mod_privileges.md#vhostsecure) | On | v | D |
| Determines whether the server runs with enhanced security for the virtualhost. | | | |
| [VHostUser unix-userid](mod__mod_privileges.md#vhostuser) |  | v | D |
| Sets the User ID under which a virtual host runs. | | | |
| [VirtualDocumentRoot *interpolated-directory*|none](mod__mod_vhost_alias.md#virtualdocumentroot) | none | sv | E |
| Dynamically configure the location of the document root for a given virtual host | | | |
| [VirtualDocumentRootIP *interpolated-directory*|none](mod__mod_vhost_alias.md#virtualdocumentrootip) | none | sv | E |
| Dynamically configure the location of the document root for a given virtual host | | | |
| [<VirtualHost addr[:port] [addr[:port]] ...> ... </VirtualHost>](mod__core.md#virtualhost) |  | s | C |
| Contains directives that apply only to a specific hostname or IP address | | | |
| [VirtualScriptAlias *interpolated-directory*|none](mod__mod_vhost_alias.md#virtualscriptalias) | none | sv | E |
| Dynamically configure the location of the CGI directory for a given virtual host | | | |
| [VirtualScriptAliasIP *interpolated-directory*|none](mod__mod_vhost_alias.md#virtualscriptaliasip) | none | sv | E |
| Dynamically configure the location of the CGI directory for a given virtual host | | | |
| [WatchdogInterval time-interval[s]](mod__mod_watchdog.md#watchdoginterval) | 1 | s | B |
| Watchdog interval in seconds | | | |
| [XBitHack on|off|full](mod__mod_include.md#xbithack) | off | svdh | B |
| Parse SSI directives in files with the execute bit set | | | |
| [xml2EncAlias charset alias [alias ...]](mod__mod_xml2enc.md#xml2encalias) |  | s | B |
| Recognize Aliases for encoding values | | | |
| [xml2EncDefault name](mod__mod_xml2enc.md#xml2encdefault) |  | svdh | B |
| Sets a default encoding to assume when absolutely no information can be [automatically detected](#sniffing) | | | |
| [xml2StartParse element [element ...]](mod__mod_xml2enc.md#xml2startparse) |  | svdh | B |
| Advise the parser to skip leading junk. | | | |

Available Languages: [de](https://httpd.apache.org/docs/2.4/pt-br/de/mod/quickreference.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/quickreference.html "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/mod/quickreference.html "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/quickreference.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/quickreference.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/quickreference.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/quickreference.html "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.4/pt-br/zh-cn/mod/quickreference.html "Simplified Chinese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
