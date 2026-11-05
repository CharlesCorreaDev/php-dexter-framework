# The Apache EBCDIC Port - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/platform/ebcdic.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](platform.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Platform Specific Notes](platform.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/platform/ebcdic.html) to go to the current version of this document.

# The Apache EBCDIC Port

**Warning:** This document
has not been updated to take into account changes made in
the 2.0 version of the Apache HTTP Server. Some of the
information may still be relevant, but please use it with care.

- ![](../images/down.gif) [Overview of the Apache EBCDIC Port](#overview)
- ![](../images/down.gif) [Design Goals](#design)
- ![](../images/down.gif) [Technical Solution](#technical)
- ![](../images/down.gif) [Porting Notes](#porting)
- ![](../images/down.gif) [Document Storage Notes](#document)
- ![](../images/down.gif) [Apache Modules' Status](#modules)
- ![](../images/down.gif) [Third Party Modules' Status](#third-party)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Overview of the Apache EBCDIC Port

Version 1.3 of the Apache HTTP Server is the first version
which includes a port to a (non-ASCII) mainframe machine which
uses the EBCDIC character set as its native codeset.

(It is the SIEMENS family of mainframes running the [BS2000/OSD
operating system](http://www.siemens.de/servers/bs2osd/osdbc_us.htm). This mainframe OS nowadays features a
SVR4-derived POSIX subsystem).

The port was started initially to

- prove the feasibility of porting [the Apache HTTP server](http://httpd.apache.org/) to
  this platform
- find a "worthy and capable" successor for the venerable
  [CERN-3.0](http://www.w3.org/Daemon/) daemon
  (which was ported a couple of years ago), and to
- prove that Apache's preforking process model can on this
  platform easily outperform the accept-fork-serve model used
  by CERN by a factor of 5 or more.

This document serves as a rationale to describe some of the
design decisions of the port to this machine.

[![top](../images/up.gif)](#page-header)

## Design Goals

One objective of the EBCDIC port was to maintain enough
backwards compatibility with the (EBCDIC) CERN server to make
the transition to the new server attractive and easy. This
required the addition of a configurable method to define
whether a HTML document was stored in ASCII (the only format
accepted by the old server) or in EBCDIC (the native document
format in the POSIX subsystem, and therefore the only realistic
format in which the other POSIX tools like `grep` or
`sed` could operate on the documents). The current
solution to this is a "pseudo-MIME-format" which is intercepted
and interpreted by the Apache server (see below). Future versions
might solve the problem by defining an "ebcdic-handler" for all
documents which must be converted.

[![top](../images/up.gif)](#page-header)

## Technical Solution

Since all Apache input and output is based upon the BUFF
data type and its methods, the easiest solution was to add the
conversion to the BUFF handling routines. The conversion must
be settable at any time, so a BUFF flag was added which defines
whether a BUFF object has currently enabled conversion or not.
This flag is modified at several points in the HTTP
protocol:

- **set** before a request is received
  (because the request and the request header lines are always
  in ASCII format)
- **set/unset** when the request body is
  received - depending on the content type of the request body
  (because the request body may contain ASCII text or a binary
  file)
- **set** before a reply header is sent
  (because the response header lines are always in ASCII
  format)
- **set/unset** when the response body is sent
  - depending on the content type of the response body (because
  the response body may contain text or a binary file)

[![top](../images/up.gif)](#page-header)

## Porting Notes

1. The relevant changes in the source are `#ifdef`'ed
   into two categories:

   `#ifdef CHARSET_EBCDIC`
   :   Code which is needed for any EBCDIC based machine.
       This includes character translations, differences in
       contiguity of the two character sets, flags which
       indicate which part of the HTTP protocol has to be
       converted and which part doesn't *etc.*

   `#ifdef _OSD_POSIX`
   :   Code which is needed for the SIEMENS BS2000/OSD
       mainframe platform only. This deals with include file
       differences and socket implementation topics which are
       only required on the BS2000/OSD platform.
2. The possibility to translate between ASCII and EBCDIC at
   the socket level (on BS2000 POSIX, there is a socket option
   which supports this) was intentionally *not* chosen,
   because the byte stream at the HTTP protocol level consists
   of a mixture of protocol related strings and non-protocol
   related raw file data. HTTP protocol strings are always
   encoded in ASCII (the `GET` request, any Header: lines,
   the chunking information *etc.*) whereas the file transfer
   parts (*i.e.*, GIF images, CGI output *etc.*)
   should usually be just "passed through" by the server. This
   separation between "protocol string" and "raw data" is
   reflected in the server code by functions like `bgets()`
   or `rvputs()` for strings, and functions like
   `bwrite()` for binary data. A global translation
   of everything would therefore be inadequate.

   (In the case of text files of course, provisions must be
   made so that EBCDIC documents are always served in
   ASCII)
3. This port therefore features a built-in protocol level
   conversion for the server-internal strings (which the
   compiler translated to EBCDIC strings) and thus for all
   server-generated documents. The hard coded ASCII escapes
   `\012` and `\015` which are ubiquitous
   in the server code are an exception: they are already the binary
   encoding of the ASCII `\n` and `\r` and
   must not be converted to ASCII a second time.
   This exception is only relevant for server-generated strings;
   and *external* EBCDIC documents are not expected to
   contain ASCII newline characters.
4. By examining the call hierarchy for the BUFF management
   routines, I added an "ebcdic/ascii conversion layer" which
   would be crossed on every puts/write/get/gets, and a
   conversion flag which allowed enabling/disabling the
   conversions on-the-fly. Usually, a document crosses this
   layer twice from its origin source (a file or CGI output) to
   its destination (the requesting client): `file ->
   Apache`, and `Apache -> client`.

   The server can now read the header lines of a CGI-script
   output in EBCDIC format, and then find out that the remainder
   of the script's output is in ASCII (like in the case of the
   output of a WWW Counter program: the document body contains a
   GIF image). All header processing is done in the native
   EBCDIC format; the server then determines, based on the type
   of document being served, whether the document body (except
   for the chunking information, of course) is in ASCII already
   or must be converted from EBCDIC.
5. For Text documents (MIME types text/plain, text/html
   *etc.*), an implicit translation to ASCII can be
   used, or (if the users prefer to store some documents in
   raw ASCII form for faster serving, or because the files
   reside on a NFS-mounted directory tree) can be served
   without conversion.

   **Example:**

   to serve files with the suffix `.ahtml` as a
   raw ASCII `text/html` document without implicit
   conversion (and suffix `.ascii` as ASCII
   `text/plain`), use the directives:

   `AddType text/x-ascii-html .ahtml   
   AddType text/x-ascii-plain .ascii`

   Similarly, any `text/foo` MIME type can be
   served as "raw ASCII" by configuring a MIME type
   "`text/x-ascii-foo`" for it using
   `AddType`.
6. Non-text documents are always served "binary" without
   conversion. This seems to be the most sensible choice for,
   .*e.g.*, GIF/ZIP/AU file types. This of course
   requires the user to copy them to the mainframe host using
   the "`rcp -b`" binary switch.
7. Server parsed files are always assumed to be in native
   (*i.e.*, EBCDIC) format as used on the machine, and
   are converted after processing.
8. For CGI output, the CGI script determines whether a
   conversion is needed or not: by setting the appropriate
   Content-Type, text files can be converted, or GIF output can
   be passed through unmodified. An example for the latter case
   is the wwwcount program which we ported as well.

[![top](../images/up.gif)](#page-header)

## Document Storage Notes

### Binary Files

All files with a `Content-Type:` which does not
start with `text/` are regarded as *binary
files* by the server and are not subject to any conversion.
Examples for binary files are GIF images, gzip-compressed files
and the like.

When exchanging binary files between the mainframe host and
a Unix machine or Windows PC, be sure to use the ftp "binary"
(`TYPE I`) command, or use the
`rcp -b` command from the mainframe host (the
`-b` switch is not supported in unix
`rcp`'s).

### Text Documents

The default assumption of the server is that Text Files
(*i.e.*, all files whose `Content-Type:`
starts with `text/`) are stored in the native
character set of the host, EBCDIC.

### Server Side Included Documents

SSI documents must currently be stored in EBCDIC only.
No provision is made to convert it from ASCII before
processing.

[![top](../images/up.gif)](#page-header)

## Apache Modules' Status

| Module | Status | Notes |
| --- | --- | --- |
| `core` | + |  |
| `mod_access` | + |  |
| `mod_actions` | + |  |
| `mod_alias` | + |  |
| `mod_asis` | + |  |
| `mod_auth` | + |  |
| `mod_auth_anon` | + |  |
| `mod_auth_dbm` | ? | with own `libdb.a` |
| `mod_autoindex` | + |  |
| `mod_cern_meta` | ? |  |
| `mod_cgi` | + |  |
| `mod_digest` | + |  |
| `mod_dir` | + |  |
| `mod_so` | - | no shared libs |
| `mod_env` | + |  |
| `mod_example` | - | (test bed only) |
| `mod_expires` | + |  |
| `mod_headers` | + |  |
| `mod_imagemap` | + |  |
| `mod_include` | + |  |
| `mod_info` | + |  |
| `mod_log_agent` | + |  |
| `mod_log_config` | + |  |
| `mod_log_referer` | + |  |
| `mod_mime` | + |  |
| `mod_mime_magic` | ? | not ported yet |
| `mod_negotiation` | + |  |
| `mod_proxy` | + |  |
| `mod_rewrite` | + | untested |
| `mod_setenvif` | + |  |
| `mod_speling` | + |  |
| `mod_status` | + |  |
| `mod_unique_id` | + |  |
| `mod_userdir` | + |  |
| `mod_usertrack` | ? | untested |

[![top](../images/up.gif)](#page-header)

## Third Party Modules' Status

| Module | Status | Notes |
| --- | --- | --- |
| `JK (Formerly mod_jserv)` | - | JAVA still being ported. |
| `mod_php3` | + | `mod_php3` runs fine, with LDAP and GD and FreeType libraries. |
| `mod_put` | ? | untested |
| `mod_session` | - | untested |

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/platform/ebcdic.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/platform/ebcdic.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
