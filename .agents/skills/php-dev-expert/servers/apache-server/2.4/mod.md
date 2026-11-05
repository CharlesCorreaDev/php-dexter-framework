# Module Index - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

# Module Index

Below is a list of all of the modules that come as part of
the Apache HTTP Server distribution. See also the complete
alphabetical list of [all Apache HTTP Server
directives](mod__directives.md).

- ![](../images/down.gif) [Core Features and Multi-Processing
  Modules](#core)
- ![](../images/down.gif) [Other Modules](#other)

### See also

- [Multi-Processing Modules (MPMs)](mpm.md)
- [Directive Quick Reference](mod__quickreference.md)

[![top](../images/up.gif)](#page-header)

## Core Features and Multi-Processing Modules

[core](mod__core.md)
:   Core Apache HTTP Server features that are always
    available

[mpm\_common](mod__mpm_common.md)
:   A collection of directives that are implemented by
    more than one multi-processing module (MPM)

[event](mod__event.md)
:   A variant of the `worker` MPM with the goal
    of consuming threads only for connections with active processing

[mpm\_netware](mod__mpm_netware.md)
:   Multi-Processing Module implementing an exclusively threaded web
    server optimized for Novell NetWare

[mpmt\_os2](mod__mpmt_os2.md)
:   Hybrid multi-process, multi-threaded MPM for OS/2

[prefork](mod__prefork.md)
:   Implements a non-threaded, pre-forking web server

[mpm\_winnt](mod__mpm_winnt.md)
:   Multi-Processing Module optimized for Windows NT.

[worker](mod__worker.md)
:   Multi-Processing Module implementing a hybrid
    multi-threaded multi-process web server

[![top](../images/up.gif)](#page-header)

## Other Modules

[A](#A) | [B](#B) | [C](#C) | [D](#D) | [E](#E) | [F](#F) | [H](#H) | [I](#I) | [L](#L) | [M](#M) | [N](#N) | [P](#P) | [R](#R) | [S](#S) | [U](#U) | [V](#V) | [W](#W) | [X](#X)

[mod\_access\_compat](mod__mod_access_compat.md)
:   Group authorizations based on host (name or IP
    address)

[mod\_actions](mod__mod_actions.md)
:   Execute CGI scripts based on media type or request method.

[mod\_alias](mod__mod_alias.md)
:   Provides for mapping different parts of the host
    filesystem in the document tree and for URL redirection

[mod\_allowmethods](mod__mod_allowmethods.md)
:   Easily restrict what HTTP methods can be used on the server

[mod\_asis](mod__mod_asis.md)
:   Sends files that contain their own
    HTTP headers

[mod\_auth\_basic](mod__mod_auth_basic.md)
:   Basic HTTP authentication

[mod\_auth\_digest](mod__mod_auth_digest.md)
:   User authentication using MD5
    Digest Authentication

[mod\_auth\_form](mod__mod_auth_form.md)
:   Form authentication

[mod\_authn\_anon](mod__mod_authn_anon.md)
:   Allows "anonymous" user access to authenticated
    areas

[mod\_authn\_core](mod__mod_authn_core.md)
:   Core Authentication

[mod\_authn\_dbd](mod__mod_authn_dbd.md)
:   User authentication using an SQL database

[mod\_authn\_dbm](mod__mod_authn_dbm.md)
:   User authentication using DBM files

[mod\_authn\_file](mod__mod_authn_file.md)
:   User authentication using text files

[mod\_authn\_socache](mod__mod_authn_socache.md)
:   Manages a cache of authentication credentials to relieve
    the load on backends

[mod\_authnz\_fcgi](mod__mod_authnz_fcgi.md)
:   Allows a FastCGI authorizer application to handle Apache
    httpd authentication and authorization

[mod\_authnz\_ldap](mod__mod_authnz_ldap.md)
:   Allows an LDAP directory to be used to store the database
    for HTTP Basic authentication.

[mod\_authz\_core](mod__mod_authz_core.md)
:   Core Authorization

[mod\_authz\_dbd](mod__mod_authz_dbd.md)
:   Group Authorization and Login using SQL

[mod\_authz\_dbm](mod__mod_authz_dbm.md)
:   Group authorization using DBM files

[mod\_authz\_groupfile](mod__mod_authz_groupfile.md)
:   Group authorization using plaintext files

[mod\_authz\_host](mod__mod_authz_host.md)
:   Group authorizations based on host (name or IP
    address)

[mod\_authz\_owner](mod__mod_authz_owner.md)
:   Authorization based on file ownership

[mod\_authz\_user](mod__mod_authz_user.md)
:   User Authorization

[mod\_autoindex](mod__mod_autoindex.md)
:   Generates directory indexes,
    automatically, similar to the Unix `ls` command or the
    Win32 `dir` shell command

[mod\_brotli](mod__mod_brotli.md)
:   Compress content via Brotli before it is delivered to the
    client

[mod\_buffer](mod__mod_buffer.md)
:   Support for request buffering

[mod\_cache](mod__mod_cache.md)
:   RFC 2616 compliant HTTP caching filter.

[mod\_cache\_disk](mod__mod_cache_disk.md)
:   Disk based storage module for the HTTP caching filter.

[mod\_cache\_socache](mod__mod_cache_socache.md)
:   Shared object cache (socache) based storage module for the
    HTTP caching filter.

[mod\_cern\_meta](mod__mod_cern_meta.md)
:   CERN httpd metafile semantics

[mod\_cgi](mod__mod_cgi.md)
:   Execution of CGI scripts

[mod\_cgid](mod__mod_cgid.md)
:   Execution of CGI scripts using an
    external CGI daemon

[mod\_charset\_lite](mod__mod_charset_lite.md)
:   Specify character set translation or recoding

[mod\_data](mod__mod_data.md)
:   Convert response body into an RFC2397 data URL

[mod\_dav](mod__mod_dav.md)
:   Distributed Authoring and Versioning
    ([WebDAV](http://www.webdav.org/)) functionality

[mod\_dav\_fs](mod__mod_dav_fs.md)
:   Filesystem provider for `mod_dav`

[mod\_dav\_lock](mod__mod_dav_lock.md)
:   Generic locking module for `mod_dav`

[mod\_dbd](mod__mod_dbd.md)
:   Manages SQL database connections

[mod\_deflate](mod__mod_deflate.md)
:   Compress content before it is delivered to the
    client

[mod\_dialup](mod__mod_dialup.md)
:   Send static content at a bandwidth rate limit, defined by the various old modem standards

[mod\_dir](mod__mod_dir.md)
:   Provides for "trailing slash" redirects and
    serving directory index files

[mod\_dumpio](mod__mod_dumpio.md)
:   Dumps all I/O to error log as desired.

[mod\_echo](mod__mod_echo.md)
:   A simple echo server to illustrate protocol
    modules

[mod\_env](mod__mod_env.md)
:   Modifies the environment which is passed to CGI scripts and
    SSI pages

[mod\_example\_hooks](mod__mod_example_hooks.md)
:   Illustrates the Apache module API

[mod\_expires](mod__mod_expires.md)
:   Generation of `Expires` and
    `Cache-Control` HTTP headers according to user-specified
    criteria

[mod\_ext\_filter](mod__mod_ext_filter.md)
:   Pass the response body through an external program before
    delivery to the client

[mod\_file\_cache](mod__mod_file_cache.md)
:   Caches a static list of files in memory

[mod\_filter](mod__mod_filter.md)
:   Context-sensitive smart filter configuration module

[mod\_headers](mod__mod_headers.md)
:   Customization of HTTP request and response
    headers

[mod\_heartbeat](mod__mod_heartbeat.md)
:   Sends messages with server status to frontend proxy

[mod\_heartmonitor](mod__mod_heartmonitor.md)
:   Centralized monitor for mod\_heartbeat origin servers

[mod\_http2](mod__mod_http2.md)
:   Support for the HTTP/2 transport layer

[mod\_ident](mod__mod_ident.md)
:   RFC 1413 ident lookups

[mod\_imagemap](mod__mod_imagemap.md)
:   Server-side imagemap processing

[mod\_include](mod__mod_include.md)
:   Server-parsed html documents (Server Side Includes)

[mod\_info](mod__mod_info.md)
:   Provides a comprehensive overview of the server
    configuration

[mod\_isapi](mod__mod_isapi.md)
:   ISAPI Extensions within Apache for Windows

[mod\_lbmethod\_bybusyness](mod__mod_lbmethod_bybusyness.md)
:   Pending Request Counting load balancer scheduler algorithm for `mod_proxy_balancer`

[mod\_lbmethod\_byrequests](mod__mod_lbmethod_byrequests.md)
:   Request Counting load balancer scheduler algorithm for `mod_proxy_balancer`

[mod\_lbmethod\_bytraffic](mod__mod_lbmethod_bytraffic.md)
:   Weighted Traffic Counting load balancer scheduler algorithm for `mod_proxy_balancer`

[mod\_lbmethod\_heartbeat](mod__mod_lbmethod_heartbeat.md)
:   Heartbeat Traffic Counting load balancer scheduler algorithm for `mod_proxy_balancer`

[mod\_ldap](mod__mod_ldap.md)
:   LDAP connection pooling and result caching services for use
    by other LDAP modules

[mod\_log\_config](mod__mod_log_config.md)
:   Logging of the requests made to the server

[mod\_log\_debug](mod__mod_log_debug.md)
:   Additional configurable debug logging

[mod\_log\_forensic](mod__mod_log_forensic.md)
:   Forensic Logging of the requests made to the server

[mod\_logio](mod__mod_logio.md)
:   Logging of input and output bytes per request

[mod\_lua](mod__mod_lua.md)
:   Provides Lua hooks into various portions of the httpd
    request processing

[mod\_macro](mod__mod_macro.md)
:   Provides macros within apache httpd runtime configuration files

[mod\_md](mod__mod_md.md)
:   Managing domains across virtual hosts, certificate provisioning
    via the ACME protocol

[mod\_mime](mod__mod_mime.md)
:   Associates the requested filename's extensions
    with the file's behavior (handlers and filters)
    and content (mime-type, language, character set and
    encoding)

[mod\_mime\_magic](mod__mod_mime_magic.md)
:   Determines the MIME type of a file
    by looking at a few bytes of its contents

[mod\_negotiation](mod__mod_negotiation.md)
:   Provides for [content negotiation](content-negotiation.md)

[mod\_nw\_ssl](mod__mod_nw_ssl.md)
:   Enable SSL encryption for NetWare

[mod\_privileges](mod__mod_privileges.md)
:   Support for Solaris privileges and for running virtual hosts
    under different user IDs.

[mod\_proxy](mod__mod_proxy.md)
:   Multi-protocol proxy/gateway server

[mod\_proxy\_ajp](mod__mod_proxy_ajp.md)
:   AJP support module for
    `mod_proxy`

[mod\_proxy\_balancer](mod__mod_proxy_balancer.md)
:   `mod_proxy` extension for load balancing

[mod\_proxy\_connect](mod__mod_proxy_connect.md)
:   `mod_proxy` extension for
    `CONNECT` request handling

[mod\_proxy\_express](mod__mod_proxy_express.md)
:   Dynamic mass reverse proxy extension for
    `mod_proxy`

[mod\_proxy\_fcgi](mod__mod_proxy_fcgi.md)
:   FastCGI support module for
    `mod_proxy`

[mod\_proxy\_fdpass](mod__mod_proxy_fdpass.md)
:   fdpass external process support module for
    `mod_proxy`

[mod\_proxy\_ftp](mod__mod_proxy_ftp.md)
:   FTP support module for
    `mod_proxy`

[mod\_proxy\_hcheck](mod__mod_proxy_hcheck.md)
:   Dynamic health check of Balancer members (workers) for
    `mod_proxy`

[mod\_proxy\_html](mod__mod_proxy_html.md)
:   Rewrite HTML links in to ensure they are addressable
    from Clients' networks in a proxy context.

[mod\_proxy\_http](mod__mod_proxy_http.md)
:   HTTP support module for
    `mod_proxy`

[mod\_proxy\_http2](mod__mod_proxy_http2.md)
:   HTTP/2 support module for
    `mod_proxy`

[mod\_proxy\_scgi](mod__mod_proxy_scgi.md)
:   SCGI gateway module for `mod_proxy`

[mod\_proxy\_uwsgi](mod__mod_proxy_uwsgi.md)
:   UWSGI gateway module for `mod_proxy`

[mod\_proxy\_wstunnel](mod__mod_proxy_wstunnel.md)
:   Websockets support module for
    `mod_proxy`

[mod\_ratelimit](mod__mod_ratelimit.md)
:   Bandwidth Rate Limiting for Clients

[mod\_reflector](mod__mod_reflector.md)
:   Reflect a request body as a response via the output filter stack.

[mod\_remoteip](mod__mod_remoteip.md)
:   Replaces the original client IP address for the connection
    with the useragent IP address list presented by a proxies or a load balancer
    via the request headers.

[mod\_reqtimeout](mod__mod_reqtimeout.md)
:   Set timeout and minimum data rate for receiving requests

[mod\_request](mod__mod_request.md)
:   Filters to handle and make available HTTP request bodies

[mod\_rewrite](mod__mod_rewrite.md)
:   Provides a rule-based rewriting engine to rewrite requested
    URLs on the fly

[mod\_sed](mod__mod_sed.md)
:   Filter Input (request) and Output (response) content using `sed` syntax

[mod\_session](mod__mod_session.md)
:   Session support

[mod\_session\_cookie](mod__mod_session_cookie.md)
:   Cookie based session support

[mod\_session\_crypto](mod__mod_session_crypto.md)
:   Session encryption support

[mod\_session\_dbd](mod__mod_session_dbd.md)
:   DBD/SQL based session support

[mod\_setenvif](mod__mod_setenvif.md)
:   Allows the setting of environment variables based
    on characteristics of the request

[mod\_slotmem\_plain](mod__mod_slotmem_plain.md)
:   Slot-based shared memory provider.

[mod\_slotmem\_shm](mod__mod_slotmem_shm.md)
:   Slot-based shared memory provider.

[mod\_so](mod__mod_so.md)
:   Loading of executable code and
    modules into the server at start-up or restart time

[mod\_socache\_dbm](mod__mod_socache_dbm.md)
:   DBM based shared object cache provider.

[mod\_socache\_dc](mod__mod_socache_dc.md)
:   Distcache based shared object cache provider.

[mod\_socache\_memcache](mod__mod_socache_memcache.md)
:   Memcache based shared object cache provider.

[mod\_socache\_redis](mod__mod_socache_redis.md)
:   Redis based shared object cache provider.

[mod\_socache\_shmcb](mod__mod_socache_shmcb.md)
:   shmcb based shared object cache provider.

[mod\_speling](mod__mod_speling.md)
:   Attempts to correct mistaken URLs by ignoring
    capitalization, or attempting to correct various minor
    misspellings.

[mod\_ssl](mod__mod_ssl.md)
:   Strong cryptography using the Secure Sockets
    Layer (SSL) and Transport Layer Security (TLS) protocols

[mod\_status](mod__mod_status.md)
:   Provides information on server activity and
    performance

[mod\_substitute](mod__mod_substitute.md)
:   Perform search and replace operations on response bodies

[mod\_suexec](mod__mod_suexec.md)
:   Allows CGI scripts to run as a specified user
    and Group

[mod\_systemd](mod__mod_systemd.md)
:   Provides better support for systemd integration

[mod\_unique\_id](mod__mod_unique_id.md)
:   Provides an environment variable with a unique
    identifier for each request

[mod\_unixd](mod__mod_unixd.md)
:   Basic (required) security for Unix-family platforms.

[mod\_userdir](mod__mod_userdir.md)
:   User-specific directories

[mod\_usertrack](mod__mod_usertrack.md)
:   *Clickstream* logging of user activity on a site

[mod\_version](mod__mod_version.md)
:   Version dependent configuration

[mod\_vhost\_alias](mod__mod_vhost_alias.md)
:   Provides for dynamically configured mass virtual
    hosting

[mod\_watchdog](mod__mod_watchdog.md)
:   provides infrastructure for other modules to periodically run
    tasks

[mod\_xml2enc](mod__mod_xml2enc.md)
:   Enhanced charset/internationalisation support for libxml2-based
    filter modules

Available Languages: [de](https://httpd.apache.org/docs/2.4/pt-br/de/mod/ "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/ "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/mod/ "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/ "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/ "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/ "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/ "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.4/pt-br/zh-cn/mod/ "Simplified Chinese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
