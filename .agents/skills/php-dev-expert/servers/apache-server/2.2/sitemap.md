# Sitemap - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/sitemap.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/sitemap.html) to go to the current version of this document.

# Sitemap

This page lists the currently available documents of the
[Apache HTTP Server Version 2.2
Documentation](index.md).

- ![](./images/down.gif) [Release Notes](#release)
- ![](./images/down.gif) [Using the Apache HTTP Server](#using)
- ![](./images/down.gif) [Apache Virtual Host documentation](#vhosts)
- ![](./images/down.gif) [URL Rewriting Guide](#rewrite)
- ![](./images/down.gif) [Apache SSL/TLS Encryption](#ssl)
- ![](./images/down.gif) [Guides, Tutorials, and HowTos](#howto)
- ![](./images/down.gif) [Platform-specific Notes](#platform)
- ![](./images/down.gif) [Apache HTTP Server and Supporting Programs](#programs)
- ![](./images/down.gif) [Apache Miscellaneous Documentation](#misc)
- ![](./images/down.gif) [Apache modules](#modules)
- ![](./images/down.gif) [Developer Documentation](#developer)
- ![](./images/down.gif) [Glossary and Index](#index)

[![top](./images/up.gif)](#page-header)

## Release Notes

- [Upgrading to 2.2 from 2.0](upgrading.md)
- [New features with Apache 2.1/2.2](new_features_2_2.md)
- [New features with Apache 2.0](new_features_2_0.md)
- [Apache License](license.md)

[![top](./images/up.gif)](#page-header)

## Using the Apache HTTP Server

- [Compiling and Installing Apache](install.md)
- [Starting Apache](invoking.md)
- [Stopping and Restarting the Server](stopping.md)
- [Configuration Files](configuring.md)
- [How Directory, Location and Files sections work](sections.md)
- [Content Caching](caching.md)
- [Server-Wide Configuration](server-wide.md)
- [Log Files](logs.md)
- [Mapping URLs to Filesystem Locations](urlmapping.md)
- [Dynamic Shared Object (DSO) support](dso.md)
- [Content Negotiation](content-negotiation.md)
- [Custom error responses](custom-error.md)
- [Setting which addresses and ports Apache uses](bind.md)
- [Multi-Processing Modules (MPMs)](mpm.md)
- [Environment Variables in Apache](env.md)
- [Apache's Handler Use](handler.md)
- [Filters](filter.md)
- [suEXEC Support](suexec.md)
- [Issues Regarding DNS and Apache](dns-caveats.md)
- [Frequently Asked Questions](http://wiki.apache.org/httpd/FAQ)

[![top](./images/up.gif)](#page-header)

## Apache Virtual Host documentation

- [Overview](vhosts.md)
- [Name-based Virtual Hosts](vhosts__name-based.md)
- [IP-based Virtual Host Support](vhosts__ip-based.md)
- [Dynamically configured mass virtual hosting](vhosts__mass.md)
- [VirtualHost Examples](vhosts__examples.md)
- [An In-Depth Discussion of Virtual Host Matching](vhosts__details.md)
- [File descriptor limitations](vhosts__fd-limits.md)

[![top](./images/up.gif)](#page-header)

## URL Rewriting Guide

- [Overview](rewrite.md)
- [mod\_rewrite reference
  documentation](mod__mod_rewrite.md)
- [Introduction to regular expressions and
  mod\_rewrite](rewrite__intro.md)
- [Using mod\_rewrite for redirection and
  remapping of URLs](rewrite__remapping.md)
- [Using mod\_rewrite to control access](rewrite__access.md)
- [Dynamic virtual hosts with mod\_rewrite](rewrite__vhosts.md)
- [Dynamic proxying with mod\_rewrite](rewrite__proxy.md)
- [Using RewriteMap](rewrite__rewritemap.md)
- [Advanced techniques](rewrite__advanced.md)
- [When NOT to use mod\_rewrite](rewrite__avoid.md)
- [RewriteRule Flags](rewrite__flags.md)
- [Technical details](rewrite__tech.md)

[![top](./images/up.gif)](#page-header)

## Apache SSL/TLS Encryption

- [Overview](ssl.md)
- [SSL/TLS Encryption: An Introduction](ssl__ssl_intro.md)
- [SSL/TLS Encryption: Compatibility](ssl__ssl_compat.md)
- [SSL/TLS Encryption: How-To](ssl__ssl_howto.md)
- [SSL/TLS Encryption: FAQ](ssl__ssl_faq.md)

[![top](./images/up.gif)](#page-header)

## Guides, Tutorials, and HowTos

- [Overview](howto.md)
- [Authentication and Authorization](howto__auth.md)
- [Access Control](howto__access.md)
- [Dynamic Content with CGI](howto__cgi.md)
- [Introduction to Server Side Includes](howto__ssi.md)
- [.htaccess files](howto__htaccess.md)
- [Per-user web directories](howto__public_html.md)

[![top](./images/up.gif)](#page-header)

## Platform-specific Notes

- [Overview](platform.md)
- [Using Apache with Microsoft
  Windows](platform__windows.md)
- [Compiling Apache for
  Microsoft Windows](platform__win_compiling.md)
- [Using Apache with Novell NetWare](platform__netware.md)
- [Running a High-Performance Web
  Server on HPUX](platform__perf-hp.md)
- [The Apache EBCDIC Port](platform__ebcdic.md)

[![top](./images/up.gif)](#page-header)

## Apache HTTP Server and Supporting Programs

- [Overview](programs.md)
- [Manual Page: httpd](programs__httpd.md)
- [Manual Page: ab](programs__ab.md)
- [Manual Page: apachectl](programs__apachectl.md)
- [Manual Page: apxs](programs__apxs.md)
- [Manual Page: configure](programs__configure.md)
- [Manual Page: dbmmanage](programs__dbmmanage.md)
- [Manual Page: htcacheclean](programs__htcacheclean.md)
- [Manual Page: htdbm](programs__htdbm.md)
- [Manual Page: htdigest](programs__htdigest.md)
- [Manual Page: htpasswd](programs__htpasswd.md)
- [Manual Page: httxt2dbm](programs__httxt2dbm.md)
- [Manual Page: logresolve](programs__logresolve.md)
- [Manual Page: rotatelogs](programs__rotatelogs.md)
- [Manual Page: suexec](programs__suexec.md)
- [Other Programs](programs__other.md)

[![top](./images/up.gif)](#page-header)

## Apache Miscellaneous Documentation

- [Overview](misc.md)
- [Performance Notes - Apache Tuning](misc__perf-tuning.md)
- [Security Tips](misc__security_tips.md)
- [Relevant Standards](misc__relevant_standards.md)
- [Password Encryption Formats](misc__password_encryptions.md)

[![top](./images/up.gif)](#page-header)

## Apache modules

- [Definitions of terms used to describe Apache modules](mod__module-dict.md)
- [Definitions of terms used to describe Apache directives](mod__directive-dict.md)

- [Apache Core Features](mod__core.md)
- [Apache MPM Common Directives](mod__mpm_common.md)
- [Apache MPM beos](mod__beos.md)
- [Apache MPM event](mod__event.md)
- [Apache MPM netware](mod__mpm_netware.md)
- [Apache MPM os2](mod__mpmt_os2.md)
- [Apache MPM prefork](mod__prefork.md)
- [Apache MPM winnt](mod__mpm_winnt.md)
- [Apache MPM worker](mod__worker.md)

- [Apache Module mod\_actions](mod__mod_actions.md)
- [Apache Module mod\_alias](mod__mod_alias.md)
- [Apache Module mod\_asis](mod__mod_asis.md)
- [Apache Module mod\_auth\_basic](mod__mod_auth_basic.md)
- [Apache Module mod\_auth\_digest](mod__mod_auth_digest.md)
- [Apache Module mod\_authn\_alias](mod__mod_authn_alias.md)
- [Apache Module mod\_authn\_anon](mod__mod_authn_anon.md)
- [Apache Module mod\_authn\_dbd](mod__mod_authn_dbd.md)
- [Apache Module mod\_authn\_dbm](mod__mod_authn_dbm.md)
- [Apache Module mod\_authn\_default](mod__mod_authn_default.md)
- [Apache Module mod\_authn\_file](mod__mod_authn_file.md)
- [Apache Module mod\_authnz\_ldap](mod__mod_authnz_ldap.md)
- [Apache Module mod\_authz\_dbm](mod__mod_authz_dbm.md)
- [Apache Module mod\_authz\_default](mod__mod_authz_default.md)
- [Apache Module mod\_authz\_groupfile](mod__mod_authz_groupfile.md)
- [Apache Module mod\_authz\_host](mod__mod_authz_host.md)
- [Apache Module mod\_authz\_owner](mod__mod_authz_owner.md)
- [Apache Module mod\_authz\_user](mod__mod_authz_user.md)
- [Apache Module mod\_autoindex](mod__mod_autoindex.md)
- [Apache Module mod\_cache](mod__mod_cache.md)
- [Apache Module mod\_cern\_meta](mod__mod_cern_meta.md)
- [Apache Module mod\_cgi](mod__mod_cgi.md)
- [Apache Module mod\_cgid](mod__mod_cgid.md)
- [Apache Module mod\_charset\_lite](mod__mod_charset_lite.md)
- [Apache Module mod\_dav](mod__mod_dav.md)
- [Apache Module mod\_dav\_fs](mod__mod_dav_fs.md)
- [Apache Module mod\_dav\_lock](mod__mod_dav_lock.md)
- [Apache Module mod\_dbd](mod__mod_dbd.md)
- [Apache Module mod\_deflate](mod__mod_deflate.md)
- [Apache Module mod\_dir](mod__mod_dir.md)
- [Apache Module mod\_disk\_cache](mod__mod_disk_cache.md)
- [Apache Module mod\_dumpio](mod__mod_dumpio.md)
- [Apache Module mod\_echo](mod__mod_echo.md)
- [Apache Module mod\_env](mod__mod_env.md)
- [Apache Module mod\_example](mod__mod_example.md)
- [Apache Module mod\_expires](mod__mod_expires.md)
- [Apache Module mod\_ext\_filter](mod__mod_ext_filter.md)
- [Apache Module mod\_file\_cache](mod__mod_file_cache.md)
- [Apache Module mod\_filter](mod__mod_filter.md)
- [Apache Module mod\_headers](mod__mod_headers.md)
- [Apache Module mod\_ident](mod__mod_ident.md)
- [Apache Module mod\_imagemap](mod__mod_imagemap.md)
- [Apache Module mod\_include](mod__mod_include.md)
- [Apache Module mod\_info](mod__mod_info.md)
- [Apache Module mod\_isapi](mod__mod_isapi.md)
- [Apache Module mod\_ldap](mod__mod_ldap.md)
- [Apache Module mod\_log\_config](mod__mod_log_config.md)
- [Apache Module mod\_log\_forensic](mod__mod_log_forensic.md)
- [Apache Module mod\_logio](mod__mod_logio.md)
- [Apache Module mod\_mem\_cache](mod__mod_mem_cache.md)
- [Apache Module mod\_mime](mod__mod_mime.md)
- [Apache Module mod\_mime\_magic](mod__mod_mime_magic.md)
- [Apache Module mod\_negotiation](mod__mod_negotiation.md)
- [Apache Module mod\_nw\_ssl](mod__mod_nw_ssl.md)
- [Apache Module mod\_proxy](mod__mod_proxy.md)
- [Apache Module mod\_proxy\_ajp](mod__mod_proxy_ajp.md)
- [Apache Module mod\_proxy\_balancer](mod__mod_proxy_balancer.md)
- [Apache Module mod\_proxy\_connect](mod__mod_proxy_connect.md)
- [Apache Module mod\_proxy\_ftp](mod__mod_proxy_ftp.md)
- [Apache Module mod\_proxy\_http](mod__mod_proxy_http.md)
- [Apache Module mod\_proxy\_scgi](mod__mod_proxy_scgi.md)
- [Apache Module mod\_reqtimeout](mod__mod_reqtimeout.md)
- [Apache Module mod\_rewrite](mod__mod_rewrite.md)
- [Apache Module mod\_setenvif](mod__mod_setenvif.md)
- [Apache Module mod\_so](mod__mod_so.md)
- [Apache Module mod\_speling](mod__mod_speling.md)
- [Apache Module mod\_ssl](mod__mod_ssl.md)
- [Apache Module mod\_status](mod__mod_status.md)
- [Apache Module mod\_substitute](mod__mod_substitute.md)
- [Apache Module mod\_suexec](mod__mod_suexec.md)
- [Apache Module mod\_unique\_id](mod__mod_unique_id.md)
- [Apache Module mod\_userdir](mod__mod_userdir.md)
- [Apache Module mod\_usertrack](mod__mod_usertrack.md)
- [Apache Module mod\_version](mod__mod_version.md)
- [Apache Module mod\_vhost\_alias](mod__mod_vhost_alias.md)

[![top](./images/up.gif)](#page-header)

## Developer Documentation

- [Overview](developer.md)
- [Apache API notes](developer__API.md)
- [Debugging Memory Allocation in APR](developer__debugging.md)
- [Documenting Apache 2.0](developer__documenting.md)
- [Apache 2.0 Hook Functions](developer__hooks.md)
- [Converting Modules from Apache 1.3 to Apache 2.0](developer__modules.md)
- [Request Processing in Apache 2.0](developer__request.md)
- [How Filters Work in Apache 2.0](developer__filters.md)
- [Thread Safety Issues in 2.0](developer__thread_safety.md)

[![top](./images/up.gif)](#page-header)

## Glossary and Index

- [Glossary](glossary.md)
- [Module index](mod.md)
- [Directive index](mod__directives.md)
- [Directive Quick-Reference](mod__quickreference.md)

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/sitemap.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/sitemap.html "English") |
[es](https://httpd.apache.org/docs/2.2/pt-br/es/sitemap.html "Español") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/sitemap.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/sitemap.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/sitemap.html "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.2/pt-br/zh-cn/sitemap.html "Simplified Chinese")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
