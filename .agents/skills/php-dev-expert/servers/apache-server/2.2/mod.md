# Module Index - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/) to go to the current version of this document.

# Module Index

Below is a list of all of the modules that come as part of
the Apache distribution. See also the complete
alphabetical list of [all Apache
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

[beos](mod__beos.md)
:   This Multi-Processing Module is optimized for BeOS.

[event](mod__event.md)
:   An experimental variant of the standard `worker`
    MPM

[mpm\_netware](mod__mpm_netware.md)
:   Multi-Processing Module implementing an exclusively threaded web
    server optimized for Novell NetWare

[mpmt\_os2](mod__mpmt_os2.md)
:   Hybrid multi-process, multi-threaded MPM for OS/2

[prefork](mod__prefork.md)
:   Implements a non-threaded, pre-forking web server

[mpm\_winnt](mod__mpm_winnt.md)
:   This Multi-Processing Module is optimized for Windows
    NT.

[worker](mod__worker.md)
:   Multi-Processing Module implementing a hybrid
    multi-threaded multi-process web server

[![top](../images/up.gif)](#page-header)

## Other Modules

[A](#A) | [C](#C) | [D](#D) | [E](#E) | [F](#F) | [H](#H) | [I](#I) | [L](#L) | [M](#M) | [N](#N) | [P](#P) | [R](#R) | [S](#S) | [U](#U) | [V](#V)

[mod\_actions](mod__mod_actions.md)
:   This module provides for executing CGI scripts based on
    media type or request method.

[mod\_alias](mod__mod_alias.md)
:   Provides for mapping different parts of the host
    filesystem in the document tree and for URL redirection

[mod\_asis](mod__mod_asis.md)
:   Sends files that contain their own
    HTTP headers

[mod\_auth\_basic](mod__mod_auth_basic.md)
:   Basic authentication

[mod\_auth\_digest](mod__mod_auth_digest.md)
:   User authentication using MD5
    Digest Authentication.

[mod\_authn\_alias](mod__mod_authn_alias.md)
:   Provides the ability to create extended authentication
    providers based on actual providers

[mod\_authn\_anon](mod__mod_authn_anon.md)
:   Allows "anonymous" user access to authenticated
    areas

[mod\_authn\_dbd](mod__mod_authn_dbd.md)
:   User authentication using an SQL database

[mod\_authn\_dbm](mod__mod_authn_dbm.md)
:   User authentication using DBM files

[mod\_authn\_default](mod__mod_authn_default.md)
:   Authentication fallback module

[mod\_authn\_file](mod__mod_authn_file.md)
:   User authentication using text files

[mod\_authnz\_ldap](mod__mod_authnz_ldap.md)
:   Allows an LDAP directory to be used to store the database
    for HTTP Basic authentication.

[mod\_authz\_dbm](mod__mod_authz_dbm.md)
:   Group authorization using DBM files

[mod\_authz\_default](mod__mod_authz_default.md)
:   Authorization fallback module

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

[mod\_cache](mod__mod_cache.md)
:   Content cache keyed to URIs.

[mod\_cern\_meta](mod__mod_cern_meta.md)
:   CERN httpd metafile semantics

[mod\_cgi](mod__mod_cgi.md)
:   Execution of CGI scripts

[mod\_cgid](mod__mod_cgid.md)
:   Execution of CGI scripts using an
    external CGI daemon

[mod\_charset\_lite](mod__mod_charset_lite.md)
:   Specify character set translation or recoding

[mod\_dav](mod__mod_dav.md)
:   Distributed Authoring and Versioning
    ([WebDAV](http://www.webdav.org/)) functionality

[mod\_dav\_fs](mod__mod_dav_fs.md)
:   filesystem provider for `mod_dav`

[mod\_dav\_lock](mod__mod_dav_lock.md)
:   generic locking module for `mod_dav`

[mod\_dbd](mod__mod_dbd.md)
:   Manages SQL database connections

[mod\_deflate](mod__mod_deflate.md)
:   Compress content before it is delivered to the
    client

[mod\_dir](mod__mod_dir.md)
:   Provides for "trailing slash" redirects and
    serving directory index files

[mod\_disk\_cache](mod__mod_disk_cache.md)
:   Content cache storage manager keyed to URIs

[mod\_dumpio](mod__mod_dumpio.md)
:   Dumps all I/O to error log as desired.

[mod\_echo](mod__mod_echo.md)
:   A simple echo server to illustrate protocol
    modules

[mod\_env](mod__mod_env.md)
:   Modifies the environment which is passed to CGI scripts and
    SSI pages

[mod\_example](mod__mod_example.md)
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

[mod\_ldap](mod__mod_ldap.md)
:   LDAP connection pooling and result caching services for use
    by other LDAP modules

[mod\_log\_config](mod__mod_log_config.md)
:   Logging of the requests made to the server

[mod\_log\_forensic](mod__mod_log_forensic.md)
:   Forensic Logging of the requests made to the server

[mod\_logio](mod__mod_logio.md)
:   Logging of input and output bytes per request

[mod\_mem\_cache](mod__mod_mem_cache.md)
:   Content cache keyed to URIs

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

[mod\_proxy](mod__mod_proxy.md)
:   HTTP/1.1 proxy/gateway server

[mod\_proxy\_ajp](mod__mod_proxy_ajp.md)
:   AJP support module for
    `mod_proxy`

[mod\_proxy\_balancer](mod__mod_proxy_balancer.md)
:   `mod_proxy` extension for load balancing

[mod\_proxy\_connect](mod__mod_proxy_connect.md)
:   `mod_proxy` extension for
    `CONNECT` request handling

[mod\_proxy\_ftp](mod__mod_proxy_ftp.md)
:   FTP support module for
    `mod_proxy`

[mod\_proxy\_http](mod__mod_proxy_http.md)
:   HTTP support module for
    `mod_proxy`

[mod\_proxy\_scgi](mod__mod_proxy_scgi.md)
:   SCGI gateway module for `mod_proxy`

[mod\_reqtimeout](mod__mod_reqtimeout.md)
:   Set timeout and minimum data rate for receiving requests

[mod\_rewrite](mod__mod_rewrite.md)
:   Provides a rule-based rewriting engine to rewrite requested
    URLs on the fly

[mod\_setenvif](mod__mod_setenvif.md)
:   Allows the setting of environment variables based
    on characteristics of the request

[mod\_so](mod__mod_so.md)
:   Loading of executable code and
    modules into the server at start-up or restart time

[mod\_speling](mod__mod_speling.md)
:   Attempts to correct mistaken URLs that
    users might have entered by ignoring capitalization and by
    allowing up to one misspelling

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

[mod\_unique\_id](mod__mod_unique_id.md)
:   Provides an environment variable with a unique
    identifier for each request

[mod\_userdir](mod__mod_userdir.md)
:   User-specific directories

[mod\_usertrack](mod__mod_usertrack.md)
:   *Clickstream* logging of user activity on a site

[mod\_version](mod__mod_version.md)
:   Version dependent configuration

[mod\_vhost\_alias](mod__mod_vhost_alias.md)
:   Provides for dynamically configured mass virtual
    hosting

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/mod/ "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/ "English") |
[es](https://httpd.apache.org/docs/2.2/pt-br/es/mod/ "Español") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/ "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/ "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/ "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.2/pt-br/zh-cn/mod/ "Simplified Chinese")

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
