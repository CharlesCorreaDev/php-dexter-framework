# mod_proxy_ajp - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_proxy_ajp.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_proxy_ajp.html) to go to the current version of this document.

# Apache Module mod\_proxy\_ajp

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | AJP support module for `mod_proxy` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_ajp\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_ajp.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.1 and later |

### Summary

This module *requires* the service of `mod_proxy`. It provides support for the
`Apache JServ Protocol version 1.3` (hereafter
*AJP13*).

Thus, in order to get the ability of handling `AJP13`
protocol, `mod_proxy` and
`mod_proxy_ajp` have to be present in the server.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Topics

- ![](../images/down.gif) [Usage](#usage)
- ![](../images/down.gif) [Environment Variables](#env)
- ![](../images/down.gif) [Overview of the protocol](#overviewprotocol)
- ![](../images/down.gif) [Basic Packet Structure](#basppacketstruct)
- ![](../images/down.gif) [Request Packet Structure](#rpacetstruct)
- ![](../images/down.gif) [Response Packet Structure](#resppacketstruct)

### Directives

This module provides no
directives.

### See also

- `mod_proxy`
- [Environment Variable documentation](env.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Usage

This module is used to reverse proxy to a backend application server
(e.g. Apache Tomcat) using the AJP13 protocol. The usage is similar to
an HTTP reverse proxy, but uses the `ajp://` prefix:

### Simple Reverse Proxy

`ProxyPass /app ajp://backend.example.com:8009/app`

Balancers may also be used:

### Balancer Reverse Proxy

`<Proxy balancer://cluster>  

BalancerMember ajp://app1.example.com:8009 loadfactor=1  
BalancerMember ajp://app2.example.com:8009 loadfactor=2  
ProxySet lbmethod=bytraffic  
</Proxy>  
ProxyPass /app balancer://cluster/app`

Note that usually no
`ProxyPassReverse`
directive is necessary. The AJP request includes the original host
header given to the proxy, and the application server can be expected
to generate self-referential headers relative to this host, so no
rewriting is necessary.

The main exception is when the URL path on the proxy differs from that
on the
backend. In this case, a redirect header can be rewritten relative to the
original host URL (not the backend `ajp://` URL), for
example:

### Rewriting Proxied Path

`ProxyPass /apps/foo ajp://backend.example.com:8009/foo  
ProxyPassReverse /apps/foo http://www.example.com/foo`

However, it is usually better to deploy the application on the backend
server at the same path as the proxy rather than to take this approach.

[![top](../images/up.gif)](#page-header)

## Environment Variables

Environment variables whose names have the prefix `AJP_`
are forwarded to the origin server as AJP request attributes
(with the AJP\_ prefix removed from the name of the key).

[![top](../images/up.gif)](#page-header)

## Overview of the protocol

The `AJP13` protocol is packet-oriented. A binary format
was presumably chosen over the more readable plain text for reasons of
performance. The web server communicates with the servlet container over
TCP connections. To cut down on the expensive process of socket creation,
the web server will attempt to maintain persistent TCP connections to the
servlet container, and to reuse a connection for multiple request/response
cycles.

Once a connection is assigned to a particular request, it will not be
used for any others until the request-handling cycle has terminated. In
other words, requests are not multiplexed over connections. This makes
for much simpler code at either end of the connection, although it does
cause more connections to be open at once.

Once the web server has opened a connection to the servlet container,
the connection can be in one of the following states:

- Idle   
   No request is being handled over this connection.
- Assigned   
   The connection is handling a specific request.

Once a connection is assigned to handle a particular request, the basic
request information (e.g. HTTP headers, etc) is sent over the connection in
a highly condensed form (e.g. common strings are encoded as integers).
Details of that format are below in Request Packet Structure. If there is a
body to the request `(content-length > 0)`, that is sent in a
separate packet immediately after.

At this point, the servlet container is presumably ready to start
processing the request. As it does so, it can send the
following messages back to the web server:

- SEND\_HEADERS   
  Send a set of headers back to the browser.
- SEND\_BODY\_CHUNK   
  Send a chunk of body data back to the browser.
- GET\_BODY\_CHUNK   
  Get further data from the request if it hasn't all
  been transferred yet. This is necessary because the packets have a fixed
  maximum size and arbitrary amounts of data can be included the body of a
  request (for uploaded files, for example). (Note: this is unrelated to
  HTTP chunked transfer).
- END\_RESPONSE   
   Finish the request-handling cycle.

Each message is accompanied by a differently formatted packet of data.
See Response Packet Structures below for details.

[![top](../images/up.gif)](#page-header)

## Basic Packet Structure

There is a bit of an XDR heritage to this protocol, but it differs
in lots of ways (no 4 byte alignment, for example).

AJP13 uses network byte order for all data types.

There are four data types in the protocol: bytes, booleans,
integers and strings.

**Byte**
:   A single byte.

**Boolean**
:   A single byte, `1 = true`, `0 = false`.
    Using other non-zero values as true (i.e. C-style) may work in some places,
    but it won't in others.

**Integer**
:   A number in the range of `0 to 2^16 (32768)`. Stored in
    2 bytes with the high-order byte first.

**String**
:   A variable-sized string (length bounded by 2^16). Encoded with
    the length packed into two bytes first, followed by the string
    (including the terminating '\0'). Note that the encoded length does
    **not** include the trailing '\0' -- it is like
    `strlen`. This is a touch confusing on the Java side, which
    is littered with odd autoincrement statements to skip over these
    terminators. I believe the reason this was done was to allow the C
    code to be extra efficient when reading strings which the servlet
    container is sending back -- with the terminating \0 character, the
    C code can pass around references into a single buffer, without copying.
    if the \0 was missing, the C code would have to copy things out in order
    to get its notion of a string.

### Packet Size

According to much of the code, the max packet size is `8 * 1024 bytes (8K)`. The actual length of the packet is encoded in
the header.

### Packet Headers

Packets sent from the server to the container begin with
`0x1234`. Packets sent from the container to the server
begin with `AB` (that's the ASCII code for A followed by the
ASCII code for B). After those first two bytes, there is an integer
(encoded as above) with the length of the payload. Although this might
suggest that the maximum payload could be as large as 2^16, in fact, the
code sets the maximum to be 8K.

| *Packet Format (Server->Container)* | | | | | |
| --- | --- | --- | --- | --- | --- |
| Byte | 0 | 1 | 2 | 3 | 4...(n+3) |
| Contents | 0x12 | 0x34 | Data Length (n) | | Data |

| *Packet Format (Container->Server)* | | | | | |
| --- | --- | --- | --- | --- | --- |
| Byte | 0 | 1 | 2 | 3 | 4...(n+3) |
| Contents | A | B | Data Length (n) | | Data |

For most packets, the first byte of the payload encodes the type of
message. The exception is for request body packets sent from the server to
the container -- they are sent with a standard packet header (`0x1234` and then length of the packet), but without any prefix code
after that.

The web server can send the following messages to the servlet
container:

|  |  |  |
| --- | --- | --- |
| Code | Type of Packet | Meaning |
| 2 | Forward Request | Begin the request-processing cycle with the following data |
| 7 | Shutdown | The web server asks the container to shut itself down. |
| 8 | Ping | The web server asks the container to take control (secure login phase). |
| 10 | CPing | The web server asks the container to respond quickly with a CPong. |
| none | Data | Size (2 bytes) and corresponding body data. |

To ensure some basic security, the container will only actually do the
`Shutdown` if the request comes from the same machine on which
it's hosted.

The first `Data` packet is send immediately after the
`Forward Request` by the web server.

The servlet container can send the following types of messages to the
webserver:

|  |  |  |
| --- | --- | --- |
| Code | Type of Packet | Meaning |
| 3 | Send Body Chunk | Send a chunk of the body from the servlet container to the web server (and presumably, onto the browser). |
| 4 | Send Headers | Send the response headers from the servlet container to the web server (and presumably, onto the browser). |
| 5 | End Response | Marks the end of the response (and thus the request-handling cycle). |
| 6 | Get Body Chunk | Get further data from the request if it hasn't all been transferred yet. |
| 9 | CPong Reply | The reply to a CPing request |

Each of the above messages has a different internal structure, detailed
below.

[![top](../images/up.gif)](#page-header)

## Request Packet Structure

For messages from the server to the container of type
*Forward Request*:

```
AJP13_FORWARD_REQUEST :=
    prefix_code      (byte) 0x02 = JK_AJP13_FORWARD_REQUEST
    method           (byte)
    protocol         (string)
    req_uri          (string)
    remote_addr      (string)
    remote_host      (string)
    server_name      (string)
    server_port      (integer)
    is_ssl           (boolean)
    num_headers      (integer)
    request_headers *(req_header_name req_header_value)
    attributes      *(attribut_name attribute_value)
    request_terminator (byte) OxFF
```

The `request_headers` have the following structure:

```
req_header_name := 
    sc_req_header_name | (string)  [see below for how this is parsed]

sc_req_header_name := 0xA0xx (integer)

req_header_value := (string)
```

The `attributes` are optional and have the following
structure:

```
attribute_name := sc_a_name | (sc_a_req_attribute string)

attribute_value := (string)
```

Not that the all-important header is `content-length`,
because it determines whether or not the container looks for another
packet immediately.

### Detailed description of the elements of Forward Request

### Request prefix

For all requests, this will be 2. See above for details on other Prefix
codes.

### Method

The HTTP method, encoded as a single byte:

|  |  |
| --- | --- |
| Command Name | Code |
| OPTIONS | 1 |
| GET | 2 |
| HEAD | 3 |
| POST | 4 |
| PUT | 5 |
| DELETE | 6 |
| TRACE | 7 |
| PROPFIND | 8 |
| PROPPATCH | 9 |
| MKCOL | 10 |
| COPY | 11 |
| MOVE | 12 |
| LOCK | 13 |
| UNLOCK | 14 |
| ACL | 15 |
| REPORT | 16 |
| VERSION-CONTROL | 17 |
| CHECKIN | 18 |
| CHECKOUT | 19 |
| UNCHECKOUT | 20 |
| SEARCH | 21 |
| MKWORKSPACE | 22 |
| UPDATE | 23 |
| LABEL | 24 |
| MERGE | 25 |
| BASELINE\_CONTROL | 26 |
| MKACTIVITY | 27 |

Later version of ajp13, will transport
additional methods, even if they are not in this list.

### protocol, req\_uri, remote\_addr, remote\_host, server\_name, server\_port, is\_ssl

These are all fairly self-explanatory. Each of these is required, and
will be sent for every request.

### Headers

The structure of `request_headers` is the following:
First, the number of headers `num_headers` is encoded.
Then, a series of header name `req_header_name` / value
`req_header_value` pairs follows.
Common header names are encoded as integers,
to save space. If the header name is not in the list of basic headers,
it is encoded normally (as a string, with prefixed length). The list of
common headers `sc_req_header_name`and their codes
is as follows (all are case-sensitive):

|  |  |  |
| --- | --- | --- |
| Name | Code value | Code name |
| accept | 0xA001 | SC\_REQ\_ACCEPT |
| accept-charset | 0xA002 | SC\_REQ\_ACCEPT\_CHARSET |
| accept-encoding | 0xA003 | SC\_REQ\_ACCEPT\_ENCODING |
| accept-language | 0xA004 | SC\_REQ\_ACCEPT\_LANGUAGE |
| authorization | 0xA005 | SC\_REQ\_AUTHORIZATION |
| connection | 0xA006 | SC\_REQ\_CONNECTION |
| content-type | 0xA007 | SC\_REQ\_CONTENT\_TYPE |
| content-length | 0xA008 | SC\_REQ\_CONTENT\_LENGTH |
| cookie | 0xA009 | SC\_REQ\_COOKIE |
| cookie2 | 0xA00A | SC\_REQ\_COOKIE2 |
| host | 0xA00B | SC\_REQ\_HOST |
| pragma | 0xA00C | SC\_REQ\_PRAGMA |
| referer | 0xA00D | SC\_REQ\_REFERER |
| user-agent | 0xA00E | SC\_REQ\_USER\_AGENT |

The Java code that reads this grabs the first two-byte integer and if
it sees an `'0xA0'` in the most significant
byte, it uses the integer in the second byte as an index into an array of
header names. If the first byte is not `0xA0`, it assumes that
the two-byte integer is the length of a string, which is then read in.

This works on the assumption that no header names will have length
greater than `0x9FFF (==0xA000 - 1)`, which is perfectly
reasonable, though somewhat arbitrary.

### Note:

The `content-length` header is extremely
important. If it is present and non-zero, the container assumes that
the request has a body (a POST request, for example), and immediately
reads a separate packet off the input stream to get that body.

### Attributes

The attributes prefixed with a `?`
(e.g. `?context`) are all optional. For each, there is a
single byte code to indicate the type of attribute, and then its value
(string or integer). They can be sent in any order (though the C code
always sends them in the order listed below). A special terminating code
is sent to signal the end of the list of optional attributes. The list of
byte codes is:

|  |  |  |  |
| --- | --- | --- | --- |
| Information | Code Value | Type Of Value | Note |
| ?context | 0x01 | - | Not currently implemented |
| ?servlet\_path | 0x02 | - | Not currently implemented |
| ?remote\_user | 0x03 | String |  |
| ?auth\_type | 0x04 | String |  |
| ?query\_string | 0x05 | String |  |
| ?jvm\_route | 0x06 | String |  |
| ?ssl\_cert | 0x07 | String |  |
| ?ssl\_cipher | 0x08 | String |  |
| ?ssl\_session | 0x09 | String |  |
| ?req\_attribute | 0x0A | String | Name (the name of the attribute follows) |
| ?ssl\_key\_size | 0x0B | Integer |  |
| are\_done | 0xFF | - | request\_terminator |

The `context` and `servlet_path` are not
currently set by the C code, and most of the Java code completely ignores
whatever is sent over for those fields (and some of it will actually break
if a string is sent along after one of those codes). I don't know if this
is a bug or an unimplemented feature or just vestigial code, but it's
missing from both sides of the connection.

The `remote_user` and `auth_type` presumably
refer to HTTP-level authentication, and communicate the remote user's
username and the type of authentication used to establish their identity
(e.g. Basic, Digest).

The `query_string`, `ssl_cert`,
`ssl_cipher`, and `ssl_session` refer to the
corresponding pieces of HTTP and HTTPS.

The `jvm_route`, is used to support sticky
sessions -- associating a user's sesson with a particular Tomcat instance
in the presence of multiple, load-balancing servers.

Beyond this list of basic attributes, any number of other attributes
can be sent via the `req_attribute` code `0x0A`.
A pair of strings to represent the attribute name and value are sent
immediately after each instance of that code. Environment values are passed
in via this method.

Finally, after all the attributes have been sent, the attribute
terminator, `0xFF`, is sent. This signals both the end of the
list of attributes and also then end of the Request Packet.

[![top](../images/up.gif)](#page-header)

## Response Packet Structure

for messages which the container can send back to the server.

```
AJP13_SEND_BODY_CHUNK :=
  prefix_code   3
  chunk_length  (integer)
  chunk        *(byte)
  chunk_terminator (byte) Ox00

AJP13_SEND_HEADERS :=
  prefix_code       4
  http_status_code  (integer)
  http_status_msg   (string)
  num_headers       (integer)
  response_headers *(res_header_name header_value)

res_header_name :=
    sc_res_header_name | (string)   [see below for how this is parsed]

sc_res_header_name := 0xA0 (byte)

header_value := (string)

AJP13_END_RESPONSE :=
  prefix_code       5
  reuse             (boolean)

AJP13_GET_BODY_CHUNK :=
  prefix_code       6
  requested_length  (integer)
```

### Details:

### Send Body Chunk

The chunk is basically binary data, and is sent directly back to the
browser.

### Send Headers

The status code and message are the usual HTTP things
(e.g. `200` and `OK`). The response header names are
encoded the same way the request header names are. See header\_encoding above
for details about how the codes are distinguished from the strings.  
The codes for common headers are:

|  |  |
| --- | --- |
| Name | Code value |
| Content-Type | 0xA001 |
| Content-Language | 0xA002 |
| Content-Length | 0xA003 |
| Date | 0xA004 |
| Last-Modified | 0xA005 |
| Location | 0xA006 |
| Set-Cookie | 0xA007 |
| Set-Cookie2 | 0xA008 |
| Servlet-Engine | 0xA009 |
| Status | 0xA00A |
| WWW-Authenticate | 0xA00B |

After the code or the string header name, the header value is
immediately encoded.

### End Response

Signals the end of this request-handling cycle. If the
`reuse` flag is true `(anything other than 0 in the actual
C code)`, this TCP connection can now be used to handle new incoming
requests. If `reuse` is false (==0), the connection should
be closed.

### Get Body Chunk

The container asks for more data from the request (If the body was
too large to fit in the first packet sent over or when the request is
chunked). The server will send a body packet back with an amount of data
which is the minimum of the `request_length`, the maximum send
body size `(8186 (8 Kbytes - 6))`, and the number of bytes
actually left to send from the request body.  
If there is no more data in the body (i.e. the servlet container is
trying to read past the end of the body), the server will send back an
*empty* packet, which is a body packet with a payload length of 0.
`(0x12,0x34,0x00,0x00)`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_proxy_ajp.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_proxy_ajp.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
