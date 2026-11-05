# Relevant Standards - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/misc/relevant_standards.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](misc.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Miscellaneous Documentation](misc.md)

# Relevant Standards

This page documents the relevant standards that the
Apache HTTP Server implements or follows, along with brief
descriptions.

In addition to the information listed below, the following resources
should be consulted:

- [RFC Errata](https://www.rfc-editor.org/errata.php) - Errata for published RFCs
- [HTTP Working Group Specifications](https://httpwg.org/specs/) - A pre-compiled list
  of HTTP related RFCs and drafts

- ![](../images/down.gif) [HTTP](#http_recommendations)
- ![](../images/down.gif) [URIs](#uri)
- ![](../images/down.gif) [TLS/SSL](#tls)
- ![](../images/down.gif) [Authentication](#authentication)
- ![](../images/down.gif) [Content Negotiation and Compression](#content_negotiation)
- ![](../images/down.gif) [Proxying and Forwarding](#proxy)
- ![](../images/down.gif) [WebSocket](#websocket)
- ![](../images/down.gif) [CGI](#cgi)
- ![](../images/down.gif) [WebDAV](#webdav)
- ![](../images/down.gif) [Language/Country Codes](#language_country_codes)

[![top](../images/up.gif)](#page-header)

## HTTP [¶](#http_recommendations "Permanent link")

Regardless of what modules are compiled and used, Apache as a
basic web server complies with the following IETF standards:

[RFC 9110](https://www.rfc-editor.org/rfc/rfc9110) (Standards Track) - HTTP Semantics
:   Defines the semantics shared by all versions of HTTP:
    methods, status codes, header and trailer fields, content
    negotiation, and message metadata. Obsoletes RFC 7231, 7232,
    7233, 7235, and 7694.

[RFC 9111](https://www.rfc-editor.org/rfc/rfc9111) (Standards Track) - HTTP Caching
:   Defines HTTP caches and the associated header fields that
    control cache behavior or indicate cacheable response messages.
    Obsoletes RFC 7234.

[RFC 9112](https://www.rfc-editor.org/rfc/rfc9112) (Standards Track) - HTTP/1.1
:   Defines the HTTP/1.1 message syntax and connection management.
    Obsoletes RFC 7230.

[RFC 9113](https://www.rfc-editor.org/rfc/rfc9113) (Standards Track) - HTTP/2
:   Defines an optimized expression of HTTP semantics using
    binary framing and multiplexed streams over a single TCP
    connection. Obsoletes RFC 7540 and 8740.

[RFC 9114](https://www.rfc-editor.org/rfc/rfc9114) (Standards Track) - HTTP/3
:   Defines the mapping of HTTP semantics over QUIC, providing
    similar features to HTTP/2 with reduced latency.

[RFC 1945](https://www.rfc-editor.org/rfc/rfc1945) (Informational) - HTTP/1.0
:   The original HTTP/1.0 specification. Retained for historical
    reference; httpd still accepts HTTP/1.0 requests.

[![top](../images/up.gif)](#page-header)

## URIs [¶](#uri "Permanent link")

[RFC 3986](https://www.rfc-editor.org/rfc/rfc3986) (Standards Track) - Uniform Resource Identifier (URI): Generic Syntax
:   The generic syntax and resolution rules for Uniform Resource
    Identifiers. Obsoletes RFC 2396.

[RFC 6570](https://www.rfc-editor.org/rfc/rfc6570) (Standards Track) - URI Template
:   Defines a compact sequence of characters for describing a
    range of URIs through variable expansion.

[![top](../images/up.gif)](#page-header)

## TLS/SSL [¶](#tls "Permanent link")

The following standards apply when `mod_ssl` is
enabled:

[RFC 8446](https://www.rfc-editor.org/rfc/rfc8446) (Standards Track) - TLS 1.3
:   The current version of the Transport Layer Security protocol,
    providing communications privacy over the Internet. Obsoletes
    RFC 5246 (TLS 1.2 specification text).

[RFC 5246](https://www.rfc-editor.org/rfc/rfc5246) (Standards Track) - TLS 1.2
:   The previous widely-deployed version of TLS. Still supported
    by httpd for compatibility with older clients.

[RFC 6960](https://www.rfc-editor.org/rfc/rfc6960) (Standards Track) - OCSP
:   The Online Certificate Status Protocol, used for checking
    certificate revocation status in real time (OCSP stapling via
    `SSLStaplingCache`).

[RFC 6066](https://www.rfc-editor.org/rfc/rfc6066) (Standards Track) - TLS Extensions
:   Defines TLS extensions including Server Name Indication (SNI),
    which httpd uses for name-based virtual hosting over TLS.

[![top](../images/up.gif)](#page-header)

## Authentication [¶](#authentication "Permanent link")

Concerning the different methods of authentication:

[RFC 7617](https://www.rfc-editor.org/rfc/rfc7617) (Standards Track) - The 'Basic' HTTP Authentication Scheme
:   HTTP Basic authentication, transmitting credentials as
    user-id/password pairs encoded in Base64. Obsoletes RFC 2617
    (Basic auth portion).

[RFC 7616](https://www.rfc-editor.org/rfc/rfc7616) (Standards Track) - HTTP Digest Access Authentication
:   HTTP Digest authentication, providing a challenge-response
    mechanism that avoids sending the password in cleartext.
    Obsoletes RFC 2617 (Digest auth portion).

[![top](../images/up.gif)](#page-header)

## Content Negotiation and Compression [¶](#content_negotiation "Permanent link")

[RFC 9110](https://www.rfc-editor.org/rfc/rfc9110#section-12) - Content Negotiation
:   Proactive and reactive content negotiation, including the
    Accept, Accept-Language, Accept-Encoding, and Accept-Charset
    header fields.

[RFC 7932](https://www.rfc-editor.org/rfc/rfc7932) (Informational) - Brotli Compressed Data Format
:   Defines the Brotli compression algorithm, supported via
    `mod_brotli`.

[![top](../images/up.gif)](#page-header)

## Proxying and Forwarding [¶](#proxy "Permanent link")

When `mod_proxy` is enabled:

[RFC 7239](https://www.rfc-editor.org/rfc/rfc7239) (Standards Track) - Forwarded HTTP Extension
:   Defines the Forwarded header field for conveying information
    about the client-facing side of proxy servers.

[RFC 9209](https://www.rfc-editor.org/rfc/rfc9209) (Standards Track) - The Proxy-Status HTTP Response Header Field
:   Defines a mechanism for proxies to communicate the details
    of intermediary handling to the client.

[RFC 9220](https://www.rfc-editor.org/rfc/rfc9220) (Standards Track) - Bootstrapping WebSockets with HTTP/2
:   Defines a mechanism for running the WebSocket protocol over
    a single HTTP/2 stream.

[![top](../images/up.gif)](#page-header)

## WebSocket [¶](#websocket "Permanent link")

[RFC 6455](https://www.rfc-editor.org/rfc/rfc6455) (Standards Track) - The WebSocket Protocol
:   Defines the WebSocket protocol, enabling two-way
    communication between a client and server over a single TCP
    connection. Supported via `mod_proxy_wstunnel`.

[![top](../images/up.gif)](#page-header)

## CGI [¶](#cgi "Permanent link")

[RFC 3875](https://www.rfc-editor.org/rfc/rfc3875) (Informational) - The Common Gateway Interface (CGI) Version 1.1
:   Defines the Common Gateway Interface for running external
    programs on a web server. Implemented by
    `mod_cgi` and `mod_cgid`.

[![top](../images/up.gif)](#page-header)

## WebDAV [¶](#webdav "Permanent link")

When `mod_dav` is enabled:

[RFC 4918](https://www.rfc-editor.org/rfc/rfc4918) (Standards Track) - HTTP Extensions for Web Distributed Authoring and Versioning (WebDAV)
:   Defines extensions to HTTP for distributed authoring
    operations. Obsoletes RFC 2518.

[RFC 3744](https://www.rfc-editor.org/rfc/rfc3744) (Standards Track) - Web Distributed Authoring and Versioning (WebDAV) Access Control Protocol
:   Defines access control extensions to WebDAV.

[![top](../images/up.gif)](#page-header)

## Language/Country Codes [¶](#language_country_codes "Permanent link")

Language and country codes used in content negotiation:

[ISO 639-2](https://www.loc.gov/standards/iso639-2/)
:   ISO 639 provides two sets of language codes, one as a two-letter
    code set (639-1) and another as a three-letter code set (this part
    of ISO 639) for the representation of names of languages.

[ISO 3166-1](https://www.iso.org/iso-3166-country-codes.html)
:   Country names and corresponding alpha-2 and alpha-3 code
    elements.

[RFC 5646](https://www.rfc-editor.org/rfc/rfc5646) (Best Current Practice) - Tags for Identifying Languages
:   Describes the structure and registry of language tags used in
    HTTP content negotiation (Accept-Language, Content-Language).
    Obsoletes RFC 3066.

[RFC 3282](https://www.rfc-editor.org/rfc/rfc3282) (Standards Track)
:   Defines the Content-Language and Accept-Language header fields
    for indicating language preferences in HTTP messages.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/misc/relevant_standards.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/misc/relevant_standards.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/misc/relevant_standards.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
