# Directive Quick Reference - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/quickreference.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/quickreference.html) to go to the current version of this document.

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

|  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| [A](#A) | [B](#B) | [C](#C) | [D](#D) | [E](#E) | [F](#F) | [G](#G) | [H](#H) | [I](#I) | [K](#K) | [L](#L) | [M](#M) | [N](#N) | [O](#O) | [P](#P) | [R](#R) | [S](#S) | [T](#T) | [U](#U) | [V](#V) | [W](#W) | [X](#X) | |  |  | | --- | --- | | s | server config | | v | virtual host | | d | directory | | h | .htaccess | | |  |  | | --- | --- | | C | Core | | M | MPM | | B | Base | | E | Extension | | X | Experimental | |

|  |  |  |  |
| --- | --- | --- | --- |
| [AcceptFilter protocol accept\_filter](mod__core.md#acceptfilter) |  | s | C |
| Configures optimizations for a Protocol's Listener Sockets | | | |
| [AcceptMutex Default|method](mod__mpm_common.md#acceptmutex) | Default | s | M |
| Method that Apache uses to serialize multiple children accepting requests on network sockets | | | |
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
| [AddEncoding MIME-enc extension [extension] ...](mod__mod_mime.md#addencoding) |  | svdh | B |
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
| [AddLanguage MIME-lang extension [extension] ...](mod__mod_mime.md#addlanguage) |  | svdh | B |
| Maps the given filename extension to the specified content language | | | |
| [AddModuleInfo module-name string](mod__mod_info.md#addmoduleinfo) |  | sv | E |
| Adds additional information to the module information displayed by the server-info handler | | | |
| [AddOutputFilter filter[;filter...] extension [extension] ...](mod__mod_mime.md#addoutputfilter) |  | svdh | B |
| Maps filename extensions to the filters that will process responses from the server | | | |
| [AddOutputFilterByType filter[;filter...] MIME-type [MIME-type] ...](mod__core.md#addoutputfilterbytype) |  | svdh | C |
| assigns an output filter to a particular MIME-type | | | |
| [AddType MIME-type extension [extension] ...](mod__mod_mime.md#addtype) |  | svdh | B |
| Maps the given filename extensions onto the specified content type | | | |
| [Alias URL-path file-path|directory-path](mod__mod_alias.md#alias) |  | sv | B |
| Maps URLs to filesystem locations | | | |
| [AliasMatch regex file-path|directory-path](mod__mod_alias.md#aliasmatch) |  | sv | B |
| Maps URLs to filesystem locations using regular expressions | | | |
| [Allow from all|host|env=[!]env-variable [host|env=[!]env-variable] ...](mod__mod_authz_host.md#allow) |  | dh | B |
| Controls which hosts can access an area of the server | | | |
| [AllowCONNECT port [port] ...](mod__mod_proxy.md#allowconnect) | 443 563 | sv | E |
| Ports that are allowed to `CONNECT` through the proxy | | | |
| [AllowEncodedSlashes On|Off|NoDecode](mod__core.md#allowencodedslashes) | Off | sv | C |
| Determines whether encoded path separators in URLs are allowed to be passed through | | | |
| [AllowOverride All|None|directive-type [directive-type] ...](mod__core.md#allowoverride) | All | d | C |
| Types of directives that are allowed in `.htaccess` files | | | |
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
| [AuthBasicAuthoritative On|Off](mod__mod_auth_basic.md#authbasicauthoritative) | On | dh | B |
| Sets whether authorization and authentication are passed to lower level modules | | | |
| [AuthBasicProvider provider-name [provider-name] ...](mod__mod_auth_basic.md#authbasicprovider) | file | dh | B |
| Sets the authentication provider(s) for this location | | | |
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
| [AuthDefaultAuthoritative On|Off](mod__mod_authn_default.md#authdefaultauthoritative) | On | dh | B |
| Sets whether authentication is passed to lower level modules | | | |
| [AuthDigestAlgorithm MD5|MD5-sess](mod__mod_auth_digest.md#authdigestalgorithm) | MD5 | dh | E |
| Selects the algorithm used to calculate the challenge and response hashes in digest authentication | | | |
| [AuthDigestDomain URI [URI] ...](mod__mod_auth_digest.md#authdigestdomain) |  | dh | E |
| URIs that are in the same protection space for digest authentication | | | |
| [AuthDigestNcCheck On|Off](mod__mod_auth_digest.md#authdigestnccheck) | Off | s | E |
| Enables or disables checking of the nonce-count sent by the server | | | |
| [AuthDigestNonceFormat format](mod__mod_auth_digest.md#authdigestnonceformat) |  | dh | E |
| Determines how the nonce is generated | | | |
| [AuthDigestNonceLifetime seconds](mod__mod_auth_digest.md#authdigestnoncelifetime) | 300 | dh | E |
| How long the server nonce is valid | | | |
| [AuthDigestProvider provider-name [provider-name] ...](mod__mod_auth_digest.md#authdigestprovider) | file | dh | E |
| Sets the authentication provider(s) for this location | | | |
| [AuthDigestQop none|auth|auth-int [auth|auth-int]](mod__mod_auth_digest.md#authdigestqop) | auth | dh | E |
| Determines the quality-of-protection to use in digest authentication | | | |
| [AuthDigestShmemSize size](mod__mod_auth_digest.md#authdigestshmemsize) | 1000 | s | E |
| The amount of shared memory to allocate for keeping track of clients | | | |
| [AuthGroupFile file-path](mod__mod_authz_groupfile.md#authgroupfile) |  | dh | B |
| Sets the name of a text file containing the list of user groups for authorization | | | |
| [AuthLDAPBindAuthoritative*off|on*](mod__mod_authnz_ldap.md#authldapbindauthoritative) | on | dh | E |
| Determines if other authentication providers are used when a user can be mapped to a DN but the server cannot successfully bind with the user's credentials. | | | |
| [AuthLDAPBindDN *distinguished-name*](mod__mod_authnz_ldap.md#authldapbinddn) |  | dh | E |
| Optional DN to use in binding to the LDAP server | | | |
| [AuthLDAPBindPassword *password*](mod__mod_authnz_ldap.md#authldapbindpassword) |  | dh | E |
| Password used in conjuction with the bind DN | | | |
| [AuthLDAPCharsetConfig *file-path*](mod__mod_authnz_ldap.md#authldapcharsetconfig) |  | s | E |
| Language to charset conversion configuration file | | | |
| [AuthLDAPCompareDNOnServer on|off](mod__mod_authnz_ldap.md#authldapcomparednonserver) | on | dh | E |
| Use the LDAP server to compare the DNs | | | |
| [AuthLDAPDereferenceAliases never|searching|finding|always](mod__mod_authnz_ldap.md#authldapdereferencealiases) | Always | dh | E |
| When will the module de-reference aliases | | | |
| [AuthLDAPGroupAttribute *attribute*](mod__mod_authnz_ldap.md#authldapgroupattribute) | member uniquemember + | dh | E |
| LDAP attributes used to check for group membership | | | |
| [AuthLDAPGroupAttributeIsDN on|off](mod__mod_authnz_ldap.md#authldapgroupattributeisdn) | on | dh | E |
| Use the DN of the client username when checking for group membership | | | |
| [AuthLDAPRemoteUserAttribute uid](mod__mod_authnz_ldap.md#authldapremoteuserattribute) |  | dh | E |
| Use the value of the attribute returned during the user query to set the REMOTE\_USER environment variable | | | |
| [AuthLDAPRemoteUserIsDN on|off](mod__mod_authnz_ldap.md#authldapremoteuserisdn) | off | dh | E |
| Use the DN of the client username to set the REMOTE\_USER environment variable | | | |
| [AuthLDAPUrl *url [NONE|SSL|TLS|STARTTLS]*](mod__mod_authnz_ldap.md#authldapurl) |  | dh | E |
| URL specifying the LDAP search parameters | | | |
| [AuthName auth-domain](mod__core.md#authname) |  | dh | C |
| Authorization realm for use in HTTP authentication | | | |
| [<AuthnProviderAlias baseProvider Alias> ... </AuthnProviderAlias>](mod__mod_authn_alias.md#authnprovideralias) |  | s | E |
| Enclose a group of directives that represent an extension of a base authentication provider and referenced by the specified alias | | | |
| [AuthType Basic|Digest](mod__core.md#authtype) |  | dh | C |
| Type of user authentication | | | |
| [AuthUserFile file-path](mod__mod_authn_file.md#authuserfile) |  | dh | B |
| Sets the name of a text file containing the list of users and passwords for authentication | | | |
| [AuthzDBMAuthoritative On|Off](mod__mod_authz_dbm.md#authzdbmauthoritative) | On | dh | E |
| Sets whether authorization will be passed on to lower level modules | | | |
| [AuthzDBMType default|SDBM|GDBM|NDBM|DB](mod__mod_authz_dbm.md#authzdbmtype) | default | dh | E |
| Sets the type of database file that is used to store list of user groups | | | |
| [AuthzDefaultAuthoritative On|Off](mod__mod_authz_default.md#authzdefaultauthoritative) | On | dh | B |
| Sets whether authorization is passed to lower level modules | | | |
| [AuthzGroupFileAuthoritative On|Off](mod__mod_authz_groupfile.md#authzgroupfileauthoritative) | On | dh | B |
| Sets whether authorization will be passed on to lower level modules | | | |
| [AuthzLDAPAuthoritative on|off](mod__mod_authnz_ldap.md#authzldapauthoritative) | on | dh | E |
| Prevent other authentication modules from authenticating the user if this one fails | | | |
| [AuthzOwnerAuthoritative On|Off](mod__mod_authz_owner.md#authzownerauthoritative) | On | dh | E |
| Sets whether authorization will be passed on to lower level modules | | | |
| [AuthzUserAuthoritative On|Off](mod__mod_authz_user.md#authzuserauthoritative) | On | dh | B |
| Sets whether authorization will be passed on to lower level modules | | | |
| [BalancerMember [balancerurl] url [key=value [key=value ...]]](mod__mod_proxy.md#balancermember) |  | d | E |
| Add a member to a load balancing group | | | |
| [BrowserMatch *regex [!]env-variable*[=*value*] [[!]*env-variable*[=*value*]] ...](mod__mod_setenvif.md#browsermatch) |  | svdh | B |
| Sets environment variables conditional on HTTP User-Agent | | | |
| [BrowserMatchNoCase *regex [!]env-variable*[=*value*] [[!]*env-variable*[=*value*]] ...](mod__mod_setenvif.md#browsermatchnocase) |  | svdh | B |
| Sets environment variables conditional on User-Agent without respect to case | | | |
| [BufferedLogs On|Off](mod__mod_log_config.md#bufferedlogs) | Off | s | B |
| Buffer log entries in memory before writing to disk | | | |
| [CacheDefaultExpire seconds](mod__mod_cache.md#cachedefaultexpire) | 3600 (one hour) | sv | E |
| The default duration to cache a document when no expiry date is specified. | | | |
| [CacheDirLength length](mod__mod_disk_cache.md#cachedirlength) | 2 | sv | E |
| The number of characters in subdirectory names | | | |
| [CacheDirLevels levels](mod__mod_disk_cache.md#cachedirlevels) | 3 | sv | E |
| The number of levels of subdirectories in the cache. | | | |
| [CacheDisable  url-string](mod__mod_cache.md#cachedisable) |  | sv | E |
| Disable caching of specified URLs | | | |
| [CacheEnable cache\_type url-string](mod__mod_cache.md#cacheenable) |  | sv | E |
| Enable caching of specified URLs using a specified storage manager | | | |
| [CacheFile file-path [file-path] ...](mod__mod_file_cache.md#cachefile) |  | s | X |
| Cache a list of file handles at startup time | | | |
| [CacheIgnoreCacheControl On|Off](mod__mod_cache.md#cacheignorecachecontrol) | Off | sv | E |
| Ignore request to not serve cached content to client | | | |
| [CacheIgnoreHeaders header-string [header-string] ...](mod__mod_cache.md#cacheignoreheaders) | None | sv | E |
| Do not store the given HTTP header(s) in the cache. | | | |
| [CacheIgnoreNoLastMod On|Off](mod__mod_cache.md#cacheignorenolastmod) | Off | sv | E |
| Ignore the fact that a response has no Last Modified header. | | | |
| [CacheIgnoreQueryString On|Off](mod__mod_cache.md#cacheignorequerystring) | Off | sv | E |
| Ignore query string when caching | | | |
| [CacheIgnoreURLSessionIdentifiers identifier [identifier] ...](mod__mod_cache.md#cacheignoreurlsessionidentifiers) | None | sv | E |
| Ignore defined session identifiers encoded in the URL when caching | | | |
| [CacheLastModifiedFactor float](mod__mod_cache.md#cachelastmodifiedfactor) | 0.1 | sv | E |
| The factor used to compute an expiry date based on the LastModified date. | | | |
| [CacheLock on|off](mod__mod_cache.md#cachelock) | off | sv | E |
| Enable the thundering herd lock. | | | |
| [CacheLockMaxAge integer](mod__mod_cache.md#cachelockmaxage) | 5 | sv | E |
| Set the maximum possible age of a cache lock. | | | |
| [CacheLockPath directory](mod__mod_cache.md#cachelockpath) | /tmp/mod\_cache-lock + | sv | E |
| Set the lock path directory. | | | |
| [CacheMaxExpire seconds](mod__mod_cache.md#cachemaxexpire) | 86400 (one day) | sv | E |
| The maximum time in seconds to cache a document | | | |
| [CacheMaxFileSize bytes](mod__mod_disk_cache.md#cachemaxfilesize) | 1000000 | sv | E |
| The maximum size (in bytes) of a document to be placed in the cache | | | |
| [CacheMinFileSize bytes](mod__mod_disk_cache.md#cacheminfilesize) | 1 | sv | E |
| The minimum size (in bytes) of a document to be placed in the cache | | | |
| [CacheNegotiatedDocs On|Off](mod__mod_negotiation.md#cachenegotiateddocs) | Off | sv | B |
| Allows content-negotiated documents to be cached by proxy servers | | | |
| [CacheRoot directory](mod__mod_disk_cache.md#cacheroot) |  | sv | E |
| The directory root under which cache files are stored | | | |
| [CacheStoreNoStore On|Off](mod__mod_cache.md#cachestorenostore) | Off | sv | E |
| Attempt to cache requests or responses that have been marked as no-store. | | | |
| [CacheStorePrivate On|Off](mod__mod_cache.md#cachestoreprivate) | Off | sv | E |
| Attempt to cache responses that the server has marked as private | | | |
| [CGIDScriptTimeout time[s|ms]](mod__mod_cgid.md#cgidscripttimeout) |  | svdh | B |
| The length of time to wait for more output from the CGI program | | | |
| [CGIMapExtension cgi-path .extension](mod__core.md#cgimapextension) |  | dh | C |
| Technique for locating the interpreter for CGI scripts | | | |
| [CharsetDefault charset](mod__mod_charset_lite.md#charsetdefault) |  | svdh | E |
| Charset to translate into | | | |
| [CharsetOptions option [option] ...](mod__mod_charset_lite.md#charsetoptions) | DebugLevel=0 NoImpl + | svdh | E |
| Configures charset translation behavior | | | |
| [CharsetSourceEnc charset](mod__mod_charset_lite.md#charsetsourceenc) |  | svdh | E |
| Source charset of files | | | |
| [CheckCaseOnly on|off](mod__mod_speling.md#checkcaseonly) | Off | svdh | E |
| Limits the action of the speling module to case corrections | | | |
| [CheckSpelling on|off](mod__mod_speling.md#checkspelling) | Off | svdh | E |
| Enables the spelling module | | | |
| [ChrootDir /path/to/directory](mod__mpm_common.md#chrootdir) |  | s | M |
| Directory for apache to run chroot(8) after startup. | | | |
| [ContentDigest On|Off](mod__core.md#contentdigest) | Off | svdh | C |
| Enables the generation of `Content-MD5` HTTP Response headers | | | |
| [CookieDomain *domain*](mod__mod_usertrack.md#cookiedomain) |  | svdh | E |
| The domain to which the tracking cookie applies | | | |
| [CookieExpires *expiry-period*](mod__mod_usertrack.md#cookieexpires) |  | svdh | E |
| Expiry time for the tracking cookie | | | |
| [CookieLog filename](mod__mod_log_config.md#cookielog) |  | sv | B |
| Sets filename for the logging of cookies | | | |
| [CookieName *token*](mod__mod_usertrack.md#cookiename) | Apache | svdh | E |
| Name of the tracking cookie | | | |
| [CookieStyle *Netscape|Cookie|Cookie2|RFC2109|RFC2965*](mod__mod_usertrack.md#cookiestyle) | Netscape | svdh | E |
| Format of the cookie header field | | | |
| [CookieTracking on|off](mod__mod_usertrack.md#cookietracking) | off | svdh | E |
| Enables tracking cookie | | | |
| [CoreDumpDirectory directory](mod__mpm_common.md#coredumpdirectory) |  | s | M |
| Directory where Apache attempts to switch before dumping core | | | |
| [CustomLog file|pipe format|nickname [env=[!]environment-variable]](mod__mod_log_config.md#customlog) |  | sv | B |
| Sets filename and format of log file | | | |
| [Dav On|Off|provider-name](mod__mod_dav.md#dav) | Off | d | E |
| Enable WebDAV HTTP methods | | | |
| [DavDepthInfinity on|off](mod__mod_dav.md#davdepthinfinity) | off | svd | E |
| Allow PROPFIND, Depth: Infinity requests | | | |
| [DavGenericLockDB file-path](mod__mod_dav_lock.md#davgenericlockdb) |  | svd | E |
| Location of the DAV lock database | | | |
| [DavLockDB file-path](mod__mod_dav_fs.md#davlockdb) |  | sv | E |
| Location of the DAV lock database | | | |
| [DavMinTimeout seconds](mod__mod_dav.md#davmintimeout) | 0 | svd | E |
| Minimum amount of time the server holds a lock on a DAV resource | | | |
| [DBDExptime time-in-seconds](mod__mod_dbd.md#dbdexptime) | 300 | sv | E |
| Keepalive time for idle connections | | | |
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
| [DefaultLanguage MIME-lang](mod__mod_mime.md#defaultlanguage) |  | svdh | B |
| Sets all files in the given scope to the specified language | | | |
| [DefaultType MIME-type|none](mod__core.md#defaulttype) | text/plain | svdh | C |
| MIME content-type that will be sent if the server cannot determine a type in any other way | | | |
| [DeflateBufferSize value](mod__mod_deflate.md#deflatebuffersize) | 8096 | sv | E |
| Fragment size to be compressed at one time by zlib | | | |
| [DeflateCompressionLevel value](mod__mod_deflate.md#deflatecompressionlevel) |  | sv | E |
| How much compression do we apply to the output | | | |
| [DeflateFilterNote [type] notename](mod__mod_deflate.md#deflatefilternote) |  | sv | E |
| Places the compression ratio in a note for logging | | | |
| [DeflateInflateLimitRequestBodyvalue](mod__mod_deflate.md#deflateinflatelimitrequestbody) |  | svdh | E |
| Maximum size of inflated request bodies | | | |
| [DeflateInflateRatioBurst value](mod__mod_deflate.md#deflateinflateratioburst) |  | svdh | E |
| Maximum number of times the inflation ratio for request bodies can be crossed | | | |
| [DeflateInflateRatioLimit value](mod__mod_deflate.md#deflateinflateratiolimit) |  | svdh | E |
| Maximum inflation ratio for request bodies | | | |
| [DeflateMemLevel value](mod__mod_deflate.md#deflatememlevel) | 9 | sv | E |
| How much memory should be used by zlib for compression | | | |
| [DeflateWindowSize value](mod__mod_deflate.md#deflatewindowsize) | 15 | sv | E |
| Zlib compression window size | | | |
| [Deny from all|host|env=[!]env-variable [host|env=[!]env-variable] ...](mod__mod_authz_host.md#deny) |  | dh | B |
| Controls which hosts are denied access to the server | | | |
| [<Directory directory-path> ... </Directory>](mod__core.md#directory) |  | sv | C |
| Enclose a group of directives that apply only to the named file-system directory, sub-directories, and their contents | | | |
| [DirectoryIndex local-url [local-url] ...](mod__mod_dir.md#directoryindex) | index.html | svdh | B |
| List of resources to look for when the client requests a directory | | | |
| [<DirectoryMatch regex> ... </DirectoryMatch>](mod__core.md#directorymatch) |  | sv | C |
| Enclose directives that apply to file-system directories matching a regular expression and their subdirectories | | | |
| [DirectorySlash On|Off](mod__mod_dir.md#directoryslash) | On | svdh | B |
| Toggle trailing slash redirects on or off | | | |
| [DocumentRoot directory-path](mod__core.md#documentroot) | /usr/local/apache/h + | sv | C |
| Directory that forms the main document tree visible from the web | | | |
| [DumpIOInput On|Off](mod__mod_dumpio.md#dumpioinput) | Off | s | E |
| Dump all input data to the error log | | | |
| [DumpIOLogLevel level](mod__mod_dumpio.md#dumpiologlevel) | debug | s | E |
| Controls the logging level of the DumpIO output | | | |
| [DumpIOOutput On|Off](mod__mod_dumpio.md#dumpiooutput) | Off | s | E |
| Dump all output data to the error log | | | |
| [EnableExceptionHook On|Off](mod__mpm_common.md#enableexceptionhook) | Off | s | M |
| Enables a hook that runs exception handlers after a crash | | | |
| [EnableMMAP On|Off](mod__core.md#enablemmap) | On | svdh | C |
| Use memory-mapping to read files during delivery | | | |
| [EnableSendfile On|Off](mod__core.md#enablesendfile) | On | svdh | C |
| Use the kernel sendfile support to deliver files to the client | | | |
| [ErrorDocument error-code document](mod__core.md#errordocument) |  | svdh | C |
| What the server will return to the client in case of an error | | | |
| [ErrorLog file-path|syslog[:facility]](mod__core.md#errorlog) | logs/error\_log (Uni + | sv | C |
| Location where the server will log errors | | | |
| [Example](mod__mod_example.md#example) |  | svdh | X |
| Demonstration directive to illustrate the Apache module API | | | |
| [ExpiresActive On|Off](mod__mod_expires.md#expiresactive) |  | svdh | E |
| Enables generation of `Expires` headers | | | |
| [ExpiresByType MIME-type <code>seconds](mod__mod_expires.md#expiresbytype) |  | svdh | E |
| Value of the `Expires` header configured by MIME type | | | |
| [ExpiresDefault <code>seconds](mod__mod_expires.md#expiresdefault) |  | svdh | E |
| Default algorithm for calculating expiration time | | | |
| [ExtendedStatus On|Off](mod__mod_status.md#extendedstatus) | Off | s | B |
| Keep track of extended status information for each request | | | |
| [ExtFilterDefine filtername parameters](mod__mod_ext_filter.md#extfilterdefine) |  | s | E |
| Define an external filter | | | |
| [ExtFilterOptions option [option] ...](mod__mod_ext_filter.md#extfilteroptions) | DebugLevel=0 NoLogS + | d | E |
| Configure `mod_ext_filter` options | | | |
| [FallbackResource disabled | local-url](mod__mod_dir.md#fallbackresource) |  | svdh | B |
| Define a default URL for requests that don't map to a file | | | |
| [FileETag component ...](mod__core.md#fileetag) | INode MTime Size | svdh | C |
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
| [FilterProvider filter-name provider-name [req|resp|env]=dispatch match](mod__mod_filter.md#filterprovider) |  | svdh | B |
| Register a content filter | | | |
| [FilterTrace filter-name level](mod__mod_filter.md#filtertrace) |  | svd | B |
| Get debug/diagnostic information from `mod_filter` | | | |
| [ForceLanguagePriority None|Prefer|Fallback [Prefer|Fallback]](mod__mod_negotiation.md#forcelanguagepriority) | Prefer | svdh | B |
| Action to take if a single acceptable document is not found | | | |
| [ForceType MIME-type|None](mod__core.md#forcetype) |  | dh | C |
| Forces all matching files to be served with the specified MIME content-type | | | |
| [ForensicLog filename|pipe](mod__mod_log_forensic.md#forensiclog) |  | sv | E |
| Sets filename of the forensic log | | | |
| [GprofDir /tmp/gprof/|/tmp/gprof/%](mod__core.md#gprofdir) |  | sv | C |
| Directory to write gmon.out profiling data to. | | | |
| [GracefulShutDownTimeout seconds](mod__mpm_common.md#gracefulshutdowntimeout) |  | s | M |
| Specify a timeout after which a gracefully shutdown server will exit. | | | |
| [Group unix-group](mod__mpm_common.md#group) | #-1 | s | M |
| Group under which the server will answer requests | | | |
| [Header [condition] set|append|merge|add|unset|echo|edit header [value] [replacement] [early|env=[!]variable]](mod__mod_headers.md#header) |  | svdh | E |
| Configure HTTP response headers | | | |
| [HeaderName filename](mod__mod_autoindex.md#headername) |  | svdh | B |
| Name of the file that will be inserted at the top of the index listing | | | |
| [HostnameLookups On|Off|Double](mod__core.md#hostnamelookups) | Off | svd | C |
| Enables DNS lookups on client IP addresses | | | |
| [HttpProtocolOptions [Strict|Unsafe] [RegisteredMethods|LenientMethods] [Allow0.9|Require1.0]](mod__core.md#httpprotocoloptions) | Strict LenientMetho + | sv | C |
| Modify restrictions on HTTP Request Messages | | | |
| [IdentityCheck On|Off](mod__mod_ident.md#identitycheck) | Off | svd | E |
| Enables logging of the RFC 1413 identity of the remote user | | | |
| [IdentityCheckTimeout seconds](mod__mod_ident.md#identitychecktimeout) | 30 | svd | E |
| Determines the timeout duration for ident requests | | | |
| [<IfDefine [!]parameter-name> ... </IfDefine>](mod__core.md#ifdefine) |  | svdh | C |
| Encloses directives that will be processed only if a test is true at startup | | | |
| [<IfModule [!]module-file|module-identifier> ... </IfModule>](mod__core.md#ifmodule) |  | svdh | C |
| Encloses directives that are processed conditional on the presence or absence of a specific module | | | |
| [<IfVersion [[!]operator] version> ... </IfVersion>](mod__mod_version.md#ifversion) |  | svdh | E |
| contains version dependent configuration | | | |
| [ImapBase map|referer|URL](mod__mod_imagemap.md#imapbase) | http://servername/ | svdh | B |
| Default `base` for imagemap files | | | |
| [ImapDefault error|nocontent|map|referer|URL](mod__mod_imagemap.md#imapdefault) | nocontent | svdh | B |
| Default action when an imagemap is called with coordinates that are not explicitly mapped | | | |
| [ImapMenu none|formatted|semiformatted|unformatted](mod__mod_imagemap.md#imapmenu) |  | svdh | B |
| Action if no coordinates are given when calling an imagemap | | | |
| [Include file-path|directory-path](mod__core.md#include) |  | svd | C |
| Includes other configuration files from within the server configuration files | | | |
| [IndexHeadInsert "markup ..."](mod__mod_autoindex.md#indexheadinsert) |  | svdh | B |
| Inserts text in the HEAD section of an index page. | | | |
| [IndexIgnore file [file] ...](mod__mod_autoindex.md#indexignore) | "." | svdh | B |
| Adds to the list of files to hide when listing a directory | | | |
| [IndexOptions [+|-]option [[+|-]option] ...](mod__mod_autoindex.md#indexoptions) |  | svdh | B |
| Various configuration settings for directory indexing | | | |
| [IndexOrderDefault Ascending|Descending Name|Date|Size|Description](mod__mod_autoindex.md#indexorderdefault) | Ascending Name | svdh | B |
| Sets the default ordering of the directory index | | | |
| [IndexStyleSheet url-path](mod__mod_autoindex.md#indexstylesheet) |  | svdh | B |
| Adds a CSS stylesheet to the directory index | | | |
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
| [KeepAliveTimeout seconds](mod__core.md#keepalivetimeout) | 5 | sv | C |
| Amount of time the server will wait for subsequent requests on a persistent connection | | | |
| [LanguagePriority MIME-lang [MIME-lang] ...](mod__mod_negotiation.md#languagepriority) |  | svdh | B |
| The precendence of language variants for cases where the client does not express a preference | | | |
| [LDAPCacheEntries number](mod__mod_ldap.md#ldapcacheentries) | 1024 | s | E |
| Maximum number of entries in the primary LDAP cache | | | |
| [LDAPCacheTTL seconds](mod__mod_ldap.md#ldapcachettl) | 600 | s | E |
| Time that cached items remain valid | | | |
| [LDAPConnectionTimeout seconds](mod__mod_ldap.md#ldapconnectiontimeout) |  | s | E |
| Specifies the socket connection timeout in seconds | | | |
| [LDAPOpCacheEntries number](mod__mod_ldap.md#ldapopcacheentries) | 1024 | s | E |
| Number of entries used to cache LDAP compare operations | | | |
| [LDAPOpCacheTTL seconds](mod__mod_ldap.md#ldapopcachettl) | 600 | s | E |
| Time that entries in the operation cache remain valid | | | |
| [LDAPSharedCacheFile directory-path/filename](mod__mod_ldap.md#ldapsharedcachefile) |  | s | E |
| Sets the shared memory cache file | | | |
| [LDAPSharedCacheSize bytes](mod__mod_ldap.md#ldapsharedcachesize) | 500000 | s | E |
| Size in bytes of the shared-memory cache | | | |
| [LDAPTrustedClientCert type directory-path/filename/nickname [password]](mod__mod_ldap.md#ldaptrustedclientcert) |  | svdh | E |
| Sets the file containing or nickname referring to a per connection client certificate. Not all LDAP toolkits support per connection client certificates. | | | |
| [LDAPTrustedGlobalCert type directory-path/filename [password]](mod__mod_ldap.md#ldaptrustedglobalcert) |  | s | E |
| Sets the file or database containing global trusted Certificate Authority or global client certificates | | | |
| [LDAPTrustedMode type](mod__mod_ldap.md#ldaptrustedmode) |  | sv | E |
| Specifies the SSL/TLS mode to be used when connecting to an LDAP server. | | | |
| [LDAPVerifyServerCert On|Off](mod__mod_ldap.md#ldapverifyservercert) | On | s | E |
| Force server certificate verification | | | |
| [<Limit method [method] ... > ... </Limit>](mod__core.md#limit) |  | svdh | C |
| Restrict enclosed access controls to only certain HTTP methods | | | |
| [<LimitExcept method [method] ... > ... </LimitExcept>](mod__core.md#limitexcept) |  | svdh | C |
| Restrict access controls to all HTTP methods except the named ones | | | |
| [LimitInternalRecursion number [number]](mod__core.md#limitinternalrecursion) | 10 | sv | C |
| Determine maximum number of internal redirects and nested subrequests | | | |
| [LimitRequestBody bytes](mod__core.md#limitrequestbody) | 0 | svdh | C |
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
| [ListenBacklog backlog](mod__mpm_common.md#listenbacklog) |  | s | M |
| Maximum length of the queue of pending connections | | | |
| [LoadFile *filename* [*filename*] ...](mod__mod_so.md#loadfile) |  | s | E |
| Link in the named object file or library | | | |
| [LoadModule *module filename*](mod__mod_so.md#loadmodule) |  | s | E |
| Links in the object file or library, and adds to the list of active modules | | | |
| [<Location URL-path|URL> ... </Location>](mod__core.md#location) |  | sv | C |
| Applies the enclosed directives only to matching URLs | | | |
| [<LocationMatch regex> ... </LocationMatch>](mod__core.md#locationmatch) |  | sv | C |
| Applies the enclosed directives only to regular-expression matching URLs | | | |
| [LockFile filename](mod__mpm_common.md#lockfile) | logs/accept.lock | s | M |
| Location of the accept serialization lock file | | | |
| [LogFormat format|nickname [nickname]](mod__mod_log_config.md#logformat) | "%h %l %u %t \"%r\" + | sv | B |
| Describes a format for use in a log file | | | |
| [LogLevel level](mod__core.md#loglevel) | warn | sv | C |
| Controls the verbosity of the ErrorLog | | | |
| [MaxClients number](mod__mpm_common.md#maxclients) |  | s | M |
| Maximum number of connections that will be processed simultaneously | | | |
| [MaxKeepAliveRequests number](mod__core.md#maxkeepaliverequests) | 100 | sv | C |
| Number of requests allowed on a persistent connection | | | |
| [MaxMemFree KBytes](mod__mpm_common.md#maxmemfree) | 0 | s | M |
| Maximum amount of memory that the main allocator is allowed to hold without calling `free()` | | | |
| [MaxRanges default | unlimited | none | number-of-ranges](mod__core.md#maxranges) | 200 | svd | C |
| Number of ranges allowed before returning the complete resource | | | |
| [MaxRequestsPerChild number](mod__mpm_common.md#maxrequestsperchild) | 10000 | s | M |
| Limit on the number of requests that an individual child server will handle during its life | | | |
| [MaxRequestsPerThread number](mod__beos.md#maxrequestsperthread) | 0 | s | M |
| Limit on the number of requests that an individual thread will handle during its life | | | |
| [MaxSpareServers number](mod__prefork.md#maxspareservers) | 10 | s | M |
| Maximum number of idle child server processes | | | |
| [MaxSpareThreads number](mod__mpm_common.md#maxsparethreads) |  | s | M |
| Maximum number of idle threads | | | |
| [MaxThreads number](mod__mpm_netware.md#maxthreads) | 2048 | s | M |
| Set the maximum number of worker threads | | | |
| [MCacheMaxObjectCount value](mod__mod_mem_cache.md#mcachemaxobjectcount) | 1009 | s | E |
| The maximum number of objects allowed to be placed in the cache | | | |
| [MCacheMaxObjectSize bytes](mod__mod_mem_cache.md#mcachemaxobjectsize) | 10000 | s | E |
| The maximum size (in bytes) of a document allowed in the cache | | | |
| [MCacheMaxStreamingBuffer size\_in\_bytes](mod__mod_mem_cache.md#mcachemaxstreamingbuffer) | the smaller of 1000 + | s | E |
| Maximum amount of a streamed response to buffer in memory before declaring the response uncacheable | | | |
| [MCacheMinObjectSize bytes](mod__mod_mem_cache.md#mcacheminobjectsize) | 1 | s | E |
| The minimum size (in bytes) of a document to be allowed in the cache | | | |
| [MCacheRemovalAlgorithm LRU|GDSF](mod__mod_mem_cache.md#mcacheremovalalgorithm) | GDSF | s | E |
| The algorithm used to select documents for removal from the cache | | | |
| [MCacheSize KBytes](mod__mod_mem_cache.md#mcachesize) | 100 | s | E |
| The maximum amount of memory used by the cache in KBytes | | | |
| [MergeTrailers [on|off]](mod__core.md#mergetrailers) | off | sv | C |
| Determines whether trailers are merged into headers | | | |
| [MetaDir directory](mod__mod_cern_meta.md#metadir) | .web | svdh | E |
| Name of the directory to find CERN-style meta information files | | | |
| [MetaFiles on|off](mod__mod_cern_meta.md#metafiles) | off | svdh | E |
| Activates CERN meta-file processing | | | |
| [MetaSuffix suffix](mod__mod_cern_meta.md#metasuffix) | .meta | svdh | E |
| File name suffix for the file containg CERN-style meta information | | | |
| [MimeMagicFile file-path](mod__mod_mime_magic.md#mimemagicfile) |  | sv | E |
| Enable MIME-type determination based on file contents using the specified magic file | | | |
| [MinSpareServers number](mod__prefork.md#minspareservers) | 5 | s | M |
| Minimum number of idle child server processes | | | |
| [MinSpareThreads number](mod__mpm_common.md#minsparethreads) |  | s | M |
| Minimum number of idle threads available to handle request spikes | | | |
| [MMapFile file-path [file-path] ...](mod__mod_file_cache.md#mmapfile) |  | s | X |
| Map a list of files into memory at startup time | | | |
| [ModMimeUsePathInfo On|Off](mod__mod_mime.md#modmimeusepathinfo) | Off | d | B |
| Tells `mod_mime` to treat `path_info` components as part of the filename | | | |
| [MultiviewsMatch Any|NegotiatedOnly|Filters|Handlers [Handlers|Filters]](mod__mod_mime.md#multiviewsmatch) | NegotiatedOnly | svdh | B |
| The types of files that will be included when searching for a matching file with MultiViews | | | |
| [NameVirtualHost addr[:port]](mod__core.md#namevirtualhost) |  | s | C |
| Designates an IP address for name-virtual hosting | | | |
| [NoProxy host [host] ...](mod__mod_proxy.md#noproxy) |  | sv | E |
| Hosts, domains, or networks that will be connected to directly | | | |
| [NWSSLTrustedCerts filename [filename] ...](mod__mod_nw_ssl.md#nwssltrustedcerts) |  | s | B |
| List of additional client certificates | | | |
| [NWSSLUpgradeable [IP-address:]portnumber](mod__mod_nw_ssl.md#nwsslupgradeable) |  | s | B |
| Allows a connection to be upgraded to an SSL connection upon request | | | |
| [Options [+|-]option [[+|-]option] ...](mod__core.md#options) | All | svdh | C |
| Configures what features are available in a particular directory | | | |
| [Order ordering](mod__mod_authz_host.md#order) | Deny,Allow | dh | B |
| Controls the default access state and the order in which `Allow` and `Deny` are evaluated. | | | |
| [PassEnv env-variable [env-variable] ...](mod__mod_env.md#passenv) |  | svdh | B |
| Passes environment variables from the shell | | | |
| [PidFile filename](mod__mpm_common.md#pidfile) | logs/httpd.pid | s | M |
| File where the server records the process ID of the daemon | | | |
| [Protocol protocol](mod__core.md#protocol) |  | sv | C |
| Protocol for a listening socket | | | |
| [ProtocolEcho On|Off](mod__mod_echo.md#protocolecho) | Off | sv | X |
| Turn the echo server on or off | | | |
| [<Proxy wildcard-url> ...</Proxy>](mod__mod_proxy.md#proxy) |  | sv | E |
| Container for directives applied to proxied resources | | | |
| [ProxyBadHeader IsError|Ignore|StartBody](mod__mod_proxy.md#proxybadheader) | IsError | sv | E |
| Determines how to handle bad header lines in a response | | | |
| [ProxyBlock \*|word|host|domain [word|host|domain] ...](mod__mod_proxy.md#proxyblock) |  | sv | E |
| Words, hosts, or domains that are banned from being proxied | | | |
| [ProxyDomain Domain](mod__mod_proxy.md#proxydomain) |  | sv | E |
| Default domain name for proxied requests | | | |
| [ProxyErrorOverride On|Off](mod__mod_proxy.md#proxyerroroverride) | Off | sv | E |
| Override error pages for proxied content | | | |
| [ProxyFtpDirCharset character set](mod__mod_proxy.md#proxyftpdircharset) | ISO-8859-1 | svd | E |
| Define the character set for proxied FTP listings | | | |
| [ProxyIOBufferSize bytes](mod__mod_proxy.md#proxyiobuffersize) | 8192 | sv | E |
| Determine size of internal data throughput buffer | | | |
| [<ProxyMatch regex> ...</ProxyMatch>](mod__mod_proxy.md#proxymatch) |  | sv | E |
| Container for directives applied to regular-expression-matched proxied resources | | | |
| [ProxyMaxForwards number](mod__mod_proxy.md#proxymaxforwards) | -1 | sv | E |
| Maximium number of proxies that a request can be forwarded through | | | |
| [ProxyPass [path] !|url [key=value [key=value ...]] [nocanon] [interpolate]](mod__mod_proxy.md#proxypass) |  | svd | E |
| Maps remote servers into the local server URL-space | | | |
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
| [ProxyPreserveHost On|Off](mod__mod_proxy.md#proxypreservehost) | Off | sv | E |
| Use incoming Host HTTP request header for proxy request | | | |
| [ProxyReceiveBufferSize bytes](mod__mod_proxy.md#proxyreceivebuffersize) | 0 | sv | E |
| Network buffer size for proxied HTTP and FTP connections | | | |
| [ProxyRemote match remote-server](mod__mod_proxy.md#proxyremote) |  | sv | E |
| Remote proxy used to handle certain requests | | | |
| [ProxyRemoteMatch regex remote-server](mod__mod_proxy.md#proxyremotematch) |  | sv | E |
| Remote proxy used to handle requests matched by regular expressions | | | |
| [ProxyRequests On|Off](mod__mod_proxy.md#proxyrequests) | Off | sv | E |
| Enables forward (standard) proxy requests | | | |
| [ProxySCGIInternalRedirect On|Off](mod__mod_proxy_scgi.md#proxyscgiinternalredirect) | On | svd | E |
| Enable or disable internal redirect responses from the backend | | | |
| [ProxySCGISendfile On|Off|Headername](mod__mod_proxy_scgi.md#proxyscgisendfile) | Off | svd | E |
| Enable evaluation of X-Sendfile pseudo response header | | | |
| [ProxySet url key=value [key=value ...]](mod__mod_proxy.md#proxyset) |  | d | E |
| Set various Proxy balancer or member parameters | | | |
| [ProxyStatus Off|On|Full](mod__mod_proxy.md#proxystatus) | Off | sv | E |
| Show Proxy LoadBalancer status in mod\_status | | | |
| [ProxyTimeout seconds](mod__mod_proxy.md#proxytimeout) |  | sv | E |
| Network timeout for proxied requests | | | |
| [ProxyVia On|Off|Full|Block](mod__mod_proxy.md#proxyvia) | Off | sv | E |
| Information provided in the `Via` HTTP response header for proxied requests | | | |
| [ReadmeName filename](mod__mod_autoindex.md#readmename) |  | svdh | B |
| Name of the file that will be inserted at the end of the index listing | | | |
| [ReceiveBufferSize bytes](mod__mpm_common.md#receivebuffersize) | 0 | s | M |
| TCP receive buffer size | | | |
| [Redirect [status] URL-path URL](mod__mod_alias.md#redirect) |  | svdh | B |
| Sends an external redirect asking the client to fetch a different URL | | | |
| [RedirectMatch [status] regex URL](mod__mod_alias.md#redirectmatch) |  | svdh | B |
| Sends an external redirect based on a regular expression match of the current URL | | | |
| [RedirectPermanent URL-path URL](mod__mod_alias.md#redirectpermanent) |  | svdh | B |
| Sends an external permanent redirect asking the client to fetch a different URL | | | |
| [RedirectTemp URL-path URL](mod__mod_alias.md#redirecttemp) |  | svdh | B |
| Sends an external temporary redirect asking the client to fetch a different URL | | | |
| [RegisterHttpMethod method [method [...]]](mod__core.md#registerhttpmethod) |  | s | C |
| Register non-standard HTTP methods | | | |
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
| [RequestHeader set|append|merge|add|unset|edit header [value] [replacement] [early|env=[!]variable]](mod__mod_headers.md#requestheader) |  | svdh | E |
| Configure HTTP request headers | | | |
| [RequestReadTimeout [header=timeout[[-maxtimeout],MinRate=rate] [body=timeout[[-maxtimeout],MinRate=rate]](mod__mod_reqtimeout.md#requestreadtimeout) |  | sv | E |
| Set timeout values for receiving request headers and body from client. | | | |
| [Require entity-name [entity-name] ...](mod__core.md#require) |  | dh | C |
| Selects which authenticated users can access a resource | | | |
| [RewriteBase *URL-path*](mod__mod_rewrite.md#rewritebase) |  | dh | E |
| Sets the base URL for per-directory rewrites | | | |
| [RewriteCond *TestString* *CondPattern*](mod__mod_rewrite.md#rewritecond) |  | svdh | E |
| Defines a condition under which rewriting will take place | | | |
| [RewriteEngine on|off](mod__mod_rewrite.md#rewriteengine) | off | svdh | E |
| Enables or disables runtime rewriting engine | | | |
| [RewriteLock *file-path*](mod__mod_rewrite.md#rewritelock) |  | s | E |
| Sets the name of the lock file used for `RewriteMap` synchronization | | | |
| [RewriteLog *file-path|pipe*](mod__mod_rewrite.md#rewritelog) |  | sv | E |
| Sets the name of the file used for logging rewrite engine processing | | | |
| [RewriteLogLevel *Level*](mod__mod_rewrite.md#rewriteloglevel) | 0 | sv | E |
| Sets the verbosity of the log file used by the rewrite engine | | | |
| [RewriteMap *MapName* *MapType*:*MapSource*](mod__mod_rewrite.md#rewritemap) |  | sv | E |
| Defines a mapping function for key-lookup | | | |
| [RewriteOptions Options](mod__mod_rewrite.md#rewriteoptions) |  | svdh | E |
| Sets some special options for the rewrite engine | | | |
| [RewriteRule *Pattern* *Substitution* [*flags*]](mod__mod_rewrite.md#rewriterule) |  | svdh | E |
| Defines rules for the rewriting engine | | | |
| [RLimitCPU seconds|max [seconds|max]](mod__core.md#rlimitcpu) |  | svdh | C |
| Limits the CPU consumption of processes launched by Apache children | | | |
| [RLimitMEM bytes|max [bytes|max]](mod__core.md#rlimitmem) |  | svdh | C |
| Limits the memory consumption of processes launched by Apache children | | | |
| [RLimitNPROC number|max [number|max]](mod__core.md#rlimitnproc) |  | svdh | C |
| Limits the number of processes that can be launched by processes launched by Apache children | | | |
| [Satisfy Any|All](mod__core.md#satisfy) | All | dh | C |
| Interaction between host-level access control and user authentication | | | |
| [ScoreBoardFile file-path](mod__mpm_common.md#scoreboardfile) | logs/apache\_runtime + | s | M |
| Location of the file used to store coordination data for the child processes | | | |
| [Script method cgi-script](mod__mod_actions.md#script) |  | svd | B |
| Activates a CGI script for a particular request method. | | | |
| [ScriptAlias URL-path file-path|directory-path](mod__mod_alias.md#scriptalias) |  | sv | B |
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
| [ScriptSock file-path](mod__mod_cgid.md#scriptsock) | logs/cgisock | s | B |
| The filename prefix of the socket to use for communication with the cgi daemon | | | |
| [SecureListen [IP-address:]portnumber Certificate-Name [MUTUAL]](mod__mod_nw_ssl.md#securelisten) |  | s | B |
| Enables SSL encryption for the specified port | | | |
| [SeeRequestTail On|Off](mod__mod_status.md#seerequesttail) | Off | s | B |
| Determine if mod\_status displays the first 63 characters of a request or the last 63, assuming the request itself is greater than 63 chars. | | | |
| [SendBufferSize bytes](mod__mpm_common.md#sendbuffersize) | 0 | s | M |
| TCP buffer size | | | |
| [ServerAdmin email-address|URL](mod__core.md#serveradmin) |  | sv | C |
| Email address that the server includes in error messages sent to the client | | | |
| [ServerAlias hostname [hostname] ...](mod__core.md#serveralias) |  | v | C |
| Alternate names for a host used when matching requests to name-virtual hosts | | | |
| [ServerLimit number](mod__mpm_common.md#serverlimit) |  | s | M |
| Upper limit on configurable number of processes | | | |
| [ServerName [scheme://]fully-qualified-domain-name[:port]](mod__core.md#servername) |  | sv | C |
| Hostname and port that the server uses to identify itself | | | |
| [ServerPath URL-path](mod__core.md#serverpath) |  | v | C |
| Legacy URL pathname for a name-based virtual host that is accessed by an incompatible browser | | | |
| [ServerRoot directory-path](mod__core.md#serverroot) | /usr/local/apache | s | C |
| Base directory for the server installation | | | |
| [ServerSignature On|Off|EMail](mod__core.md#serversignature) | Off | svdh | C |
| Configures the footer on server-generated documents | | | |
| [ServerTokens Major|Minor|Min[imal]|Prod[uctOnly]|OS|Full](mod__core.md#servertokens) | Full | s | C |
| Configures the `Server` HTTP response header | | | |
| [SetEnv env-variable [value]](mod__mod_env.md#setenv) |  | svdh | B |
| Sets environment variables | | | |
| [SetEnvIf *attribute regex [!]env-variable*[=*value*] [[!]*env-variable*[=*value*]] ...](mod__mod_setenvif.md#setenvif) |  | svdh | B |
| Sets environment variables based on attributes of the request | | | |
| [SetEnvIfNoCase *attribute regex [!]env-variable*[=*value*] [[!]*env-variable*[=*value*]] ...](mod__mod_setenvif.md#setenvifnocase) |  | svdh | B |
| Sets environment variables based on attributes of the request without respect to case | | | |
| [SetHandler handler-name|None](mod__core.md#sethandler) |  | svdh | C |
| Forces all matching files to be processed by a handler | | | |
| [SetInputFilter filter[;filter...]](mod__core.md#setinputfilter) |  | svdh | C |
| Sets the filters that will process client requests and POST input | | | |
| [SetOutputFilter filter[;filter...]](mod__core.md#setoutputfilter) |  | svdh | C |
| Sets the filters that will process responses from the server | | | |
| [SSIEnableAccess on|off](mod__mod_include.md#ssienableaccess) | off | dh | B |
| Enable the -A flag during conditional flow control processing. | | | |
| [SSIEndTag tag](mod__mod_include.md#ssiendtag) | "-->" | sv | B |
| String that ends an include element | | | |
| [SSIErrorMsg message](mod__mod_include.md#ssierrormsg) | "[an error occurred + | svdh | B |
| Error message displayed when there is an SSI error | | | |
| [SSIETag on|off](mod__mod_include.md#ssietag) | off | dh | B |
| Controls whether ETags are generated by the server. | | | |
| [SSILastModified on|off](mod__mod_include.md#ssilastmodified) | off | dh | B |
| Controls whether `Last-Modified` headers are generated by the server. | | | |
| [SSIStartTag tag](mod__mod_include.md#ssistarttag) | "<!--#" | sv | B |
| String that starts an include element | | | |
| [SSITimeFormat formatstring](mod__mod_include.md#ssitimeformat) | "%A, %d-%b-%Y %H:%M + | svdh | B |
| Configures the format in which date strings are displayed | | | |
| [SSIUndefinedEcho string](mod__mod_include.md#ssiundefinedecho) | "(none)" | svdh | B |
| String displayed when an unset variable is echoed | | | |
| [SSLCACertificateFile *file-path*](mod__mod_ssl.md#sslcacertificatefile) |  | sv | E |
| File of concatenated PEM-encoded CA Certificates for Client Auth | | | |
| [SSLCACertificatePath *directory-path*](mod__mod_ssl.md#sslcacertificatepath) |  | sv | E |
| Directory of PEM-encoded CA Certificates for Client Auth | | | |
| [SSLCADNRequestFile *file-path*](mod__mod_ssl.md#sslcadnrequestfile) |  | sv | E |
| File of concatenated PEM-encoded CA Certificates for defining acceptable CA names | | | |
| [SSLCADNRequestPath *directory-path*](mod__mod_ssl.md#sslcadnrequestpath) |  | sv | E |
| Directory of PEM-encoded CA Certificates for defining acceptable CA names | | | |
| [SSLCARevocationFile *file-path*](mod__mod_ssl.md#sslcarevocationfile) |  | sv | E |
| File of concatenated PEM-encoded CA CRLs for Client Auth | | | |
| [SSLCARevocationPath *directory-path*](mod__mod_ssl.md#sslcarevocationpath) |  | sv | E |
| Directory of PEM-encoded CA CRLs for Client Auth | | | |
| [SSLCertificateChainFile *file-path*](mod__mod_ssl.md#sslcertificatechainfile) |  | sv | E |
| File of PEM-encoded Server CA Certificates | | | |
| [SSLCertificateFile *file-path*](mod__mod_ssl.md#sslcertificatefile) |  | sv | E |
| Server PEM-encoded X.509 Certificate file | | | |
| [SSLCertificateKeyFile *file-path*](mod__mod_ssl.md#sslcertificatekeyfile) |  | sv | E |
| Server PEM-encoded Private Key file | | | |
| [SSLCipherSuite *cipher-spec*](mod__mod_ssl.md#sslciphersuite) | ALL:!ADH:RC4+RSA:+H + | svdh | E |
| Cipher Suite available for negotiation in SSL handshake | | | |
| [SSLCompression on|off](mod__mod_ssl.md#sslcompression) | off | sv | E |
| Enable compression on the SSL level | | | |
| [SSLCryptoDevice *engine*](mod__mod_ssl.md#sslcryptodevice) | builtin | s | E |
| Enable use of a cryptographic hardware accelerator | | | |
| [SSLEngine on|off|optional](mod__mod_ssl.md#sslengine) | off | sv | E |
| SSL Engine Operation Switch | | | |
| [SSLFIPS on|off](mod__mod_ssl.md#sslfips) | off | s | E |
| SSL FIPS mode Switch | | | |
| [SSLHonorCipherOrder *flag*](mod__mod_ssl.md#sslhonorcipherorder) |  | sv | E |
| Option to prefer the server's cipher preference order | | | |
| [SSLInsecureRenegotiation *flag*](mod__mod_ssl.md#sslinsecurerenegotiation) | off | sv | E |
| Option to enable support for insecure renegotiation | | | |
| [SSLMutex *type*](mod__mod_ssl.md#sslmutex) | none | s | E |
| Semaphore for internal mutual exclusion of operations | | | |
| [SSLOptions [+|-]*option* ...](mod__mod_ssl.md#ssloptions) |  | svdh | E |
| Configure various SSL engine run-time options | | | |
| [SSLPassPhraseDialog *type*](mod__mod_ssl.md#sslpassphrasedialog) | builtin | s | E |
| Type of pass phrase dialog for encrypted private keys | | | |
| [SSLProtocol [+|-]*protocol* ...](mod__mod_ssl.md#sslprotocol) | all | sv | E |
| Configure usable SSL protocol flavors | | | |
| [SSLProxyCACertificateFile *file-path*](mod__mod_ssl.md#sslproxycacertificatefile) |  | sv | E |
| File of concatenated PEM-encoded CA Certificates for Remote Server Auth | | | |
| [SSLProxyCACertificatePath *directory-path*](mod__mod_ssl.md#sslproxycacertificatepath) |  | sv | E |
| Directory of PEM-encoded CA Certificates for Remote Server Auth | | | |
| [SSLProxyCARevocationFile *file-path*](mod__mod_ssl.md#sslproxycarevocationfile) |  | sv | E |
| File of concatenated PEM-encoded CA CRLs for Remote Server Auth | | | |
| [SSLProxyCARevocationPath *directory-path*](mod__mod_ssl.md#sslproxycarevocationpath) |  | sv | E |
| Directory of PEM-encoded CA CRLs for Remote Server Auth | | | |
| [SSLProxyCheckPeerCN on|off](mod__mod_ssl.md#sslproxycheckpeercn) | off | sv | E |
| Whether to check the remote server certificates CN field | | | |
| [SSLProxyCheckPeerExpire on|off](mod__mod_ssl.md#sslproxycheckpeerexpire) | off | sv | E |
| Whether to check if remote server certificate is expired | | | |
| [SSLProxyCipherSuite *cipher-spec*](mod__mod_ssl.md#sslproxyciphersuite) | ALL:!ADH:RC4+RSA:+H + | svdh | E |
| Cipher Suite available for negotiation in SSL proxy handshake | | | |
| [SSLProxyEngine on|off](mod__mod_ssl.md#sslproxyengine) | off | sv | E |
| SSL Proxy Engine Operation Switch | | | |
| [SSLProxyMachineCertificateChainFile *filename*](mod__mod_ssl.md#sslproxymachinecertificatechainfile) |  | s | E |
| File of concatenated PEM-encoded CA certificates to be used by the proxy for choosing a certificate | | | |
| [SSLProxyMachineCertificateFile *filename*](mod__mod_ssl.md#sslproxymachinecertificatefile) |  | s | E |
| File of concatenated PEM-encoded client certificates and keys to be used by the proxy | | | |
| [SSLProxyMachineCertificatePath *directory*](mod__mod_ssl.md#sslproxymachinecertificatepath) |  | s | E |
| Directory of PEM-encoded client certificates and keys to be used by the proxy | | | |
| [SSLProxyProtocol [+|-]*protocol* ...](mod__mod_ssl.md#sslproxyprotocol) | all | sv | E |
| Configure usable SSL protocol flavors for proxy usage | | | |
| [SSLProxyVerify *level*](mod__mod_ssl.md#sslproxyverify) | none | sv | E |
| Type of remote server Certificate verification | | | |
| [SSLProxyVerifyDepth *number*](mod__mod_ssl.md#sslproxyverifydepth) | 1 | sv | E |
| Maximum depth of CA Certificates in Remote Server Certificate verification | | | |
| [SSLRandomSeed *context* *source* [*bytes*]](mod__mod_ssl.md#sslrandomseed) |  | s | E |
| Pseudo Random Number Generator (PRNG) seeding source | | | |
| [SSLRenegBufferSize bytes](mod__mod_ssl.md#sslrenegbuffersize) | 131072 | dh | E |
| Set the size for the SSL renegotiation buffer | | | |
| [SSLRequire *expression*](mod__mod_ssl.md#sslrequire) |  | dh | E |
| Allow access only when an arbitrarily complex boolean expression is true | | | |
| [SSLRequireSSL](mod__mod_ssl.md#sslrequiressl) |  | dh | E |
| Deny access when SSL is not used for the HTTP request | | | |
| [SSLSessionCache *type*](mod__mod_ssl.md#sslsessioncache) | none | s | E |
| Type of the global/inter-process SSL Session Cache | | | |
| [SSLSessionCacheTimeout *seconds*](mod__mod_ssl.md#sslsessioncachetimeout) | 300 | sv | E |
| Number of seconds before an SSL session expires in the Session Cache | | | |
| [SSLSessionTicketKeyFile *file-path*](mod__mod_ssl.md#sslsessionticketkeyfile) |  | sv | E |
| Persistent encryption/decryption key for TLS session tickets | | | |
| [SSLSessionTickets on|off](mod__mod_ssl.md#sslsessiontickets) | on | sv | E |
| Enable or disable use of TLS session tickets | | | |
| [SSLStrictSNIVHostCheck on|off](mod__mod_ssl.md#sslstrictsnivhostcheck) | off | sv | E |
| Whether to allow non SNI clients to access a name based virtual host. | | | |
| [SSLUserName *varname*](mod__mod_ssl.md#sslusername) |  | sdh | E |
| Variable name to determine user name | | | |
| [SSLVerifyClient *level*](mod__mod_ssl.md#sslverifyclient) | none | svdh | E |
| Type of Client Certificate verification | | | |
| [SSLVerifyDepth *number*](mod__mod_ssl.md#sslverifydepth) | 1 | svdh | E |
| Maximum depth of CA Certificates in Client Certificate verification | | | |
| [StartServers number](mod__mpm_common.md#startservers) |  | s | M |
| Number of child server processes created at startup | | | |
| [StartThreads number](mod__mpm_common.md#startthreads) |  | s | M |
| Number of threads created on startup | | | |
| [Substitute s/pattern/substitution/[infq]](mod__mod_substitute.md#substitute) |  | dh | E |
| Pattern to filter the response content | | | |
| [SubstituteInheritBefore on|off](mod__mod_substitute.md#substituteinheritbefore) | off | dh | E |
| Change the merge order of inherited patterns | | | |
| [Suexec On|Off](mod__core.md#suexec) |  | s | C |
| Enable or disable the suEXEC feature | | | |
| [SuexecUserGroup *User Group*](mod__mod_suexec.md#suexecusergroup) |  | sv | E |
| User and group for CGI programs to run as | | | |
| [ThreadLimit number](mod__mpm_common.md#threadlimit) |  | s | M |
| Sets the upper limit on the configurable number of threads per child process | | | |
| [ThreadsPerChild number](mod__mpm_common.md#threadsperchild) |  | s | M |
| Number of threads created by each child process | | | |
| [ThreadStackSize size](mod__mpm_common.md#threadstacksize) |  | s | M |
| The size in bytes of the stack used by threads handling client connections | | | |
| [TimeOut seconds](mod__core.md#timeout) | 300 | sv | C |
| Amount of time the server will wait for certain events before failing a request | | | |
| [TraceEnable [on|off|extended]](mod__core.md#traceenable) | on | sv | C |
| Determines the behaviour on `TRACE` requests | | | |
| [TransferLog file|pipe](mod__mod_log_config.md#transferlog) |  | sv | B |
| Specify location of a log file | | | |
| [TypesConfig file-path](mod__mod_mime.md#typesconfig) | conf/mime.types | s | B |
| The location of the `mime.types` file | | | |
| [UnsetEnv env-variable [env-variable] ...](mod__mod_env.md#unsetenv) |  | svdh | B |
| Removes variables from the environment | | | |
| [UseCanonicalName On|Off|DNS](mod__core.md#usecanonicalname) | Off | svd | C |
| Configures how the server determines its own name and port | | | |
| [UseCanonicalPhysicalPort On|Off](mod__core.md#usecanonicalphysicalport) | Off | svd | C |
| Configures how the server determines its own name and port | | | |
| [User unix-userid](mod__mpm_common.md#user) | #-1 | s | M |
| The userid under which the server will answer requests | | | |
| [UserDir *directory-filename* [*directory-filename*] ...](mod__mod_userdir.md#userdir) |  | sv | B |
| Location of the user-specific directories | | | |
| [VirtualDocumentRoot *interpolated-directory*|none](mod__mod_vhost_alias.md#virtualdocumentroot) | none | sv | E |
| Dynamically configure the location of the document root for a given virtual host | | | |
| [VirtualDocumentRootIP *interpolated-directory*|none](mod__mod_vhost_alias.md#virtualdocumentrootip) | none | sv | E |
| Dynamically configure the location of the document root for a given virtual host | | | |
| [<VirtualHost addr[:port] [addr[:port]] ...> ... </VirtualHost>](mod__core.md#virtualhost) |  | s | C |
| Contains directives that apply only to a specific hostname or IP address | | | |
| [VirtualScriptAlias *interpolated-directory*|none](mod__mod_vhost_alias.md#virtualscriptalias) | none | sv | E |
| Dynamically configure the location of the CGI directory for a given virtual host | | | |
| [VirtualScriptAliasIP *interpolated-directory*|none](mod__mod_vhost_alias.md#virtualscriptaliasip) | none | sv | E |
| Dynamically configure the location of the cgi directory for a given virtual host | | | |
| [Win32DisableAcceptEx](mod__mpm_winnt.md#win32disableacceptex) |  | s | M |
| Use accept() rather than AcceptEx() to accept network connections | | | |
| [XBitHack on|off|full](mod__mod_include.md#xbithack) | off | svdh | B |
| Parse SSI directives in files with the execute bit set | | | |

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/mod/quickreference.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/quickreference.html "English") |
[es](https://httpd.apache.org/docs/2.2/pt-br/es/mod/quickreference.html "Español") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/quickreference.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/quickreference.html "Korean") |
[ru](https://httpd.apache.org/docs/2.2/pt-br/ru/mod/quickreference.html "Russian") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/quickreference.html "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.2/pt-br/zh-cn/mod/quickreference.html "Simplified Chinese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
