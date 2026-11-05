# mod_proxy_wstunnel - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_proxy_wstunnel.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_proxy\_wstunnel

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Websockets support module for `mod_proxy` |
| [Status:](mod__module-dict.md#Status) | Deprecated |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_wstunnel\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_wstunnel.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in httpd 2.4.5 and later |

### Summary

### Deprecation

Since Apache HTTP Server 2.4.47, protocol Upgrade (tunneling) can be better handled by
`mod_proxy_http`.

See [Protocol Upgrade](mod__mod_proxy.md#protoupgrade).

This module *requires* the service of `mod_proxy`.
It provides support for the tunnelling of web
socket connections to a backend websockets server. The connection
is automatically upgraded to a websocket connection:

### HTTP Response

```
Upgrade: WebSocket
Connection: Upgrade
```

Proxying requests to a websockets server like `echo.websocket.org` can be done using the
`ProxyPass` directive:

```
ProxyPass "/ws2/"  "ws://echo.websocket.org/"
ProxyPass "/wss2/" "wss://echo.websocket.org/"
```

Proxying both HTTP and websockets at the same time, with a specific set of URL's being
websocket-only, can be done by specifying the websockets
`ProxyPass` directive before the
HTTP directive:

```
ProxyPassMatch ^/(myApp/ws)$  ws://backend.example.com:9080/$1
ProxyPass / http://backend.example.com:9080/
```

Proxying both HTTP and websockets at the same time, where the websockets URL's are not
websocket-only or not known in advance can be done by using the
`RewriteRule` directive to
configure the websockets proxying:

```
ProxyPass / http://example.com:9080/
RewriteEngine on
RewriteCond %{HTTP:Upgrade} websocket [NC]
RewriteCond %{HTTP:Connection} upgrade [NC]
RewriteRule ^/?(.*) "ws://example.com:9080/$1" [P,L]
```

Load balancing for multiple backends can be achieved using `mod_proxy_balancer`.

The module can also be used to upgrade to other protocols than WebSocket, by setting
the [upgrade](mod__mod_proxy.md#upgrade) parameter in the
`ProxyPass`
directive to some custom protocol name.
Special `upgrade=NONE` and `upgrade=ANY` values may be used for
testing/forcing the upgrade but they are **not recommended** in production for
security reasons.
`NONE` means that the check for the header is omitted but still the upgrade/tunneling to
WebSocket always happens.
`ANY` means that the upgrade/tunneling will happen using any protocol asked by the client.

### Directives

- ![](../images/down.gif) [ProxyWebsocketFallbackToProxyHttp](#proxywebsocketfallbacktoproxyhttp)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_proxy_wstunnel)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_proxy_wstunnel)

### See also

- `mod_proxy`

[![top](../images/up.gif)](#page-header)

## ProxyWebsocketFallbackToProxyHttp Directive [¶](#proxywebsocketfallbacktoproxyhttp "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Instructs this module to let `mod_proxy_http` handle the request |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyWebsocketFallbackToProxyHttp On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyWebsocketFallbackToProxyHttp On` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_wstunnel |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in httpd 2.4.48 and later |

Since httpd 2.4.47, `mod_proxy_http` can handle WebSocket
upgrading and tunneling in accordance to RFC 7230, this directive controls
whether `mod_proxy_wstunnel` should hand over to
`mod_proxy_http` to this, which is the case by default.

Setting to *Off* lets `mod_proxy_wstunnel` handle
WebSocket requests as in httpd 2.4.46 and earlier.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_proxy_wstunnel.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_proxy_wstunnel.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
