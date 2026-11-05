# Relevant Standards - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/misc/relevant_standards.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](misc.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Miscellaneous Documentation](misc.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/misc/relevant_standards.html) to go to the current version of this document.

# Relevant Standards

This page documents all the relevant standards that the
Apache HTTP Server follows, along with brief descriptions.

In addition to the information listed below, the following resources
should be consulted:

- <http://purl.org/NET/http-errata> - HTTP/1.1 Specification Errata
- <http://www.rfc-editor.org/errata.php> - RFC Errata
- <http://ftp.ics.uci.edu/pub/ietf/http/#RFC> - A pre-compiled list
  of HTTP related RFCs

### Notice

This document is not yet complete.

- ![](../images/down.gif) [HTTP Recommendations](#http_recommendations)
- ![](../images/down.gif) [HTML Recommendations](#html_recommendations)
- ![](../images/down.gif) [Authentication](#authentication)
- ![](../images/down.gif) [Language/Country Codes](#language_country_codes)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## HTTP Recommendations

Regardless of what modules are compiled and used, Apache as a
basic web server complies with the following IETF recommendations:

[RFC 1945](http://www.rfc-editor.org/rfc/rfc1945.txt) (Informational)
:   The Hypertext Transfer Protocol (HTTP) is an application-level
    protocol with the lightness and speed necessary for distributed,
    collaborative, hypermedia information systems. This documents
    HTTP/1.0.

[RFC 2616](http://www.rfc-editor.org/rfc/rfc2616.txt) (Standards Track)
:   The Hypertext Transfer Protocol (HTTP) is an
    application-level protocol for distributed, collaborative,
    hypermedia information systems. This documents HTTP/1.1.

[RFC 2396](http://www.rfc-editor.org/rfc/rfc2396.txt) (Standards Track)
:   A Uniform Resource Identifier (URI) is a compact string of
    characters for identifying an abstract or physical resource.

[![top](../images/up.gif)](#page-header)

## HTML Recommendations

Regarding the Hypertext Markup Language, Apache complies with
the following IETF and W3C recommendations:

[RFC 2854](http://www.rfc-editor.org/rfc/rfc2854.txt) (Informational)
:   This document summarizes the history of HTML development,
    and defines the "text/html" MIME type by pointing to the relevant
    W3C recommendations.

[HTML 4.01 Specification](http://www.w3.org/TR/html401) ([Errata](http://www.w3.org/MarkUp/html4-updates/errata))
:   This specification defines the HyperText Markup Language (HTML),
    the publishing language of the World Wide Web. This specification
    defines HTML 4.01, which is a subversion of HTML 4.

[HTML 3.2 Reference Specification](http://www.w3.org/TR/REC-html32)
:   The HyperText Markup Language (HTML) is a simple markup language
    used to create hypertext documents that are portable from one
    platform to another. HTML documents are SGML documents.

[XHTML 1.1 - Module-based XHTML](http://www.w3.org/TR/xhtml11/) ([Errata](http://www.w3.org/2001/04/REC-xhtml-modularization-20010410-errata))
:   This Recommendation defines a new XHTML document type
    that is based upon the module framework and modules defined in
    Modularization of XHTML.

[XHTML 1.0 The Extensible HyperText Markup Language (Second Edition)](http://www.w3.org/TR/xhtml1) ([Errata](http://www.w3.org/2002/08/REC-xhtml1-20020801-errata))
:   This specification defines the Second Edition of XHTML 1.0,
    a reformulation of HTML 4 as an XML 1.0 application, and three
    DTDs corresponding to the ones defined by HTML 4.

[![top](../images/up.gif)](#page-header)

## Authentication

Concerning the different methods of authentication, Apache
follows the following IETF recommendations:

[RFC 2617](http://www.rfc-editor.org/rfc/rfc2617.txt) (Draft standard)
:   "HTTP/1.0", includes the specification for a Basic
    Access Authentication scheme.

[![top](../images/up.gif)](#page-header)

## Language/Country Codes

The following links document ISO and other language and country
code information:

[ISO 639-2](http://www.loc.gov/standards/iso639-2/)
:   ISO 639 provides two sets of language codes, one as a two-letter
    code set (639-1) and another as a three-letter code set (this part
    of ISO 639) for the representation of names of languages.

[ISO 3166-1](http://www.iso.ch/iso/en/prods-services/iso3166ma/02iso-3166-code-lists/index.html)
:   These pages document the country names (official short names
    in English) in alphabetical order as given in ISO 3166-1 and the
    corresponding ISO 3166-1-alpha-2 code elements.

[BCP 47](http://www.rfc-editor.org/rfc/bcp/bcp47.txt) (Best Current Practice), [RFC 3066](http://www.rfc-editor.org/rfc/rfc3066.txt)
:   This document describes a language tag for use in cases where
    it is desired to indicate the language used in an information
    object, how to register values for use in this language tag,
    and a construct for matching such language tags.

[RFC 3282](http://www.rfc-editor.org/rfc/rfc3282.txt) (Standards Track)
:   This document defines a "Content-language:" header, for use in
    cases where one desires to indicate the language of something that
    has RFC 822-like headers, like MIME body parts or Web documents,
    and an "Accept-Language:" header for use in cases where one wishes
    to indicate one's preferences with regard to language.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/misc/relevant_standards.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/misc/relevant_standards.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
