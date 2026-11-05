# Module ngx_stream_proxy_module

> **Fonte / Source:** https://nginx.org/en/docs/stream/ngx_stream_proxy_module.html

---

## Module ngx\_stream\_proxy\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [proxy\_bind](#proxy_bind)      [proxy\_bind\_dynamic](#proxy_bind_dynamic)      [proxy\_buffer\_size](#proxy_buffer_size)      [proxy\_connect\_timeout](#proxy_connect_timeout)      [proxy\_download\_rate](#proxy_download_rate)      [proxy\_half\_close](#proxy_half_close)      [proxy\_next\_upstream](#proxy_next_upstream)      [proxy\_next\_upstream\_timeout](#proxy_next_upstream_timeout)      [proxy\_next\_upstream\_tries](#proxy_next_upstream_tries)      [proxy\_pass](#proxy_pass)      [proxy\_protocol](#proxy_protocol)      [proxy\_requests](#proxy_requests)      [proxy\_responses](#proxy_responses)      [proxy\_session\_drop](#proxy_session_drop)      [proxy\_socket\_keepalive](#proxy_socket_keepalive)      [proxy\_socket\_rcvbuf](#proxy_socket_rcvbuf)      [proxy\_socket\_sndbuf](#proxy_socket_sndbuf)      [proxy\_ssl](#proxy_ssl)      [proxy\_ssl\_alpn](#proxy_ssl_alpn)      [proxy\_ssl\_certificate](#proxy_ssl_certificate)      [proxy\_ssl\_certificate\_cache](#proxy_ssl_certificate_cache)      [proxy\_ssl\_certificate\_key](#proxy_ssl_certificate_key)      [proxy\_ssl\_ciphers](#proxy_ssl_ciphers)      [proxy\_ssl\_conf\_command](#proxy_ssl_conf_command)      [proxy\_ssl\_crl](#proxy_ssl_crl)      [proxy\_ssl\_key\_log](#proxy_ssl_key_log)      [proxy\_ssl\_name](#proxy_ssl_name)      [proxy\_ssl\_password\_file](#proxy_ssl_password_file)      [proxy\_ssl\_protocols](#proxy_ssl_protocols)      [proxy\_ssl\_server\_name](#proxy_ssl_server_name)      [proxy\_ssl\_session\_reuse](#proxy_ssl_session_reuse)      [proxy\_ssl\_trusted\_certificate](#proxy_ssl_trusted_certificate)      [proxy\_ssl\_verify](#proxy_ssl_verify)      [proxy\_ssl\_verify\_depth](#proxy_ssl_verify_depth)      [proxy\_timeout](#proxy_timeout)      [proxy\_upload\_rate](#proxy_upload_rate) |

The `ngx_stream_proxy_module` module (1.9.0) allows proxying
data streams over TCP, UDP (1.9.13), and UNIX-domain sockets.

#### Example Configuration

> ```
> server {
>     listen 127.0.0.1:12345;
>     proxy_pass 127.0.0.1:8080;
> }
>
> server {
>     listen 12345;
>     proxy_connect_timeout 1s;
>     proxy_timeout 1m;
>     proxy_pass example.com:12345;
> }
>
> server {
>     listen 53 udp reuseport;
>     proxy_timeout 20s;
>     proxy_pass dns.example.com:53;
> }
>
> server {
>     listen [::1]:12345;
>     proxy_pass unix:/tmp/stream.socket;
> }
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `proxy_bind address [transparent] | off;` |
| Default: | — |
| Context: | `stream`, `server` |

This directive appeared in version 1.9.2.

Makes outgoing connections to a proxied server originate
from the specified local IP `address`.
Parameter value can contain variables (1.11.2).
The special value `off` cancels the effect
of the `proxy_bind` directive
inherited from the previous configuration level, which allows the
system to auto-assign the local IP address.

The `transparent` parameter (1.11.0) allows
outgoing connections to a proxied server originate
from a non-local IP address,
for example, from a real IP address of a client:

> ```
> proxy_bind $remote_addr transparent;
> ```

In order for this parameter to work,
it is usually necessary to run nginx worker processes with the
[superuser](ngx_core_module.md#user) privileges.
On Linux it is not required (1.13.8) as if
the `transparent` parameter is specified, worker processes
inherit the `CAP_NET_RAW` capability from the master process.
It is also necessary to configure kernel routing table
to intercept network traffic from the proxied server.

|  |  |
| --- | --- |
| Syntax: | `proxy_bind_dynamic on | off;` |
| Default: | ``` proxy_bind_dynamic off; ``` |
| Context: | `stream`, `server` |

This directive appeared in version 1.29.3.

When enabled, makes the [bind](#proxy_bind) operation
at each connection attempt.

> This directive is available as part of our
> [commercial subscription](https://www.f5.com/products/nginx).

|  |  |
| --- | --- |
| Syntax: | `proxy_buffer_size size;` |
| Default: | ``` proxy_buffer_size 16k; ``` |
| Context: | `stream`, `server` |

This directive appeared in version 1.9.4.

Sets the `size` of the buffer used for reading data
from the proxied server.
Also sets the `size` of the buffer used for reading data
from the client.

|  |  |
| --- | --- |
| Syntax: | `proxy_connect_timeout time;` |
| Default: | ``` proxy_connect_timeout 60s; ``` |
| Context: | `stream`, `server` |

Defines a timeout for establishing a connection with a proxied server.

|  |  |
| --- | --- |
| Syntax: | `proxy_download_rate rate;` |
| Default: | ``` proxy_download_rate 0; ``` |
| Context: | `stream`, `server` |

This directive appeared in version 1.9.3.

Limits the speed of reading the data from the proxied server.
The `rate` is specified in bytes per second.
The zero value disables rate limiting.
The limit is set per a connection, so if nginx simultaneously opens
two connections to the proxied server,
the overall rate will be twice as much as the specified limit.

Parameter value can contain variables (1.17.0).
It may be useful in cases where rate should be limited
depending on a certain condition:

> ```
> map $slow $rate {
>     1     4k;
>     2     8k;
> }
>
> proxy_download_rate $rate;
> ```

|  |  |
| --- | --- |
| Syntax: | `proxy_half_close on | off;` |
| Default: | ``` proxy_half_close off; ``` |
| Context: | `stream`, `server` |

This directive appeared in version 1.21.4.

Enables or disables closing
each direction of a TCP connection independently (“TCP half-close”).
If enabled, proxying over TCP will be kept
until both sides close the connection.

|  |  |
| --- | --- |
| Syntax: | `proxy_next_upstream on | off;` |
| Default: | ``` proxy_next_upstream on; ``` |
| Context: | `stream`, `server` |

When a connection to the proxied server cannot be established, determines
whether a client connection will be passed to the next server.

Passing a connection to the next server can be limited by
[the number of tries](#proxy_next_upstream_tries)
and by [time](#proxy_next_upstream_timeout).

|  |  |
| --- | --- |
| Syntax: | `proxy_next_upstream_timeout time;` |
| Default: | ``` proxy_next_upstream_timeout 0; ``` |
| Context: | `stream`, `server` |

Limits the time allowed to pass a connection to the
[next server](#proxy_next_upstream).
The `0` value turns off this limitation.

|  |  |
| --- | --- |
| Syntax: | `proxy_next_upstream_tries number;` |
| Default: | ``` proxy_next_upstream_tries 0; ``` |
| Context: | `stream`, `server` |

Limits the number of possible tries for passing a connection to the
[next server](#proxy_next_upstream).
The `0` value turns off this limitation.

|  |  |
| --- | --- |
| Syntax: | `proxy_pass address;` |
| Default: | — |
| Context: | `server` |

Sets the address of a proxied server.
The address can be specified as a domain name or IP address,
and a port:

> ```
> proxy_pass localhost:12345;
> ```

or as a UNIX-domain socket path:

> ```
> proxy_pass unix:/tmp/stream.socket;
> ```

If a domain name resolves to several addresses, all of them will be
used in a round-robin fashion.
In addition, an address can be specified as a
[server group](stream__ngx_stream_upstream_module.md).

The address can also be specified using variables (1.11.3):

> ```
> proxy_pass $upstream;
> ```

In this case, the server name is searched among the described
[server groups](stream__ngx_stream_upstream_module.md),
and, if not found, is determined using a
[resolver](stream__ngx_stream_core_module.md#resolver).

|  |  |
| --- | --- |
| Syntax: | `proxy_protocol on | off | v2;` |
| Default: | ``` proxy_protocol off; ``` |
| Context: | `stream`, `server` |

This directive appeared in version 1.9.2.

Enables the
[PROXY
protocol](http://www.haproxy.org/download/1.8/doc/proxy-protocol.txt) for connections to a proxied server.
The `on` parameter enables
version 1 of the PROXY protocol (text format).
The `v2` parameter (1.31.4) enables
version 2 of the PROXY protocol (binary format).

|  |  |
| --- | --- |
| Syntax: | `proxy_requests number;` |
| Default: | ``` proxy_requests 0; ``` |
| Context: | `stream`, `server` |

This directive appeared in version 1.15.7.

Sets the number of client datagrams at which
binding between a client and existing UDP stream session is dropped.
After receiving the specified number of datagrams, next datagram
from the same client starts a new session.
The session terminates when all client datagrams are transmitted
to a proxied server and the expected number of
[responses](#proxy_responses) is received,
or when it reaches a [timeout](#proxy_timeout).

|  |  |
| --- | --- |
| Syntax: | `proxy_responses number;` |
| Default: | — |
| Context: | `stream`, `server` |

This directive appeared in version 1.9.13.

Sets the number of datagrams expected from the proxied server
in response to a client datagram
if the [UDP](stream__ngx_stream_core_module.md#udp)
protocol is used.
The number serves as a hint for session termination.
By default, the number of datagrams is not limited.

If zero value is specified, no response is expected.
However, if a response is received and the
session is still not finished, the response will be handled.

|  |  |
| --- | --- |
| Syntax: | `proxy_session_drop on | off;` |
| Default: | ``` proxy_session_drop off; ``` |
| Context: | `stream`, `server` |

This directive appeared in version 1.15.8.

Enables terminating all sessions to a proxied server
after it was removed from the group or marked as permanently unavailable.
This can occur because of
[re-resolve](stream__ngx_stream_core_module.md#resolver)
or with the API
[`DELETE`](http__ngx_http_api_module.md#deleteStreamUpstreamServer)
command.
A server can be marked as permanently unavailable if it is considered
[unhealthy](stream__ngx_stream_upstream_hc_module.md#health_check)
or with the API
[`PATCH`](http__ngx_http_api_module.md#patchStreamUpstreamServer)
command.
Each session is terminated when the next
read or write event is processed for the client or proxied server.

> This directive is available as part of our
> [commercial subscription](https://www.f5.com/products/nginx).

|  |  |
| --- | --- |
| Syntax: | `proxy_socket_keepalive on | off;` |
| Default: | ``` proxy_socket_keepalive off; ``` |
| Context: | `stream`, `server` |

This directive appeared in version 1.15.6.

Configures the “TCP keepalive” behavior
for outgoing connections to a proxied server.
By default, the operating system’s settings are in effect for the socket.
If the directive is set to the value “`on`”, the
`SO_KEEPALIVE` socket option is turned on for the socket.

|  |  |
| --- | --- |
| Syntax: | `proxy_socket_rcvbuf size;` |
| Default: | — |
| Context: | `stream`, `server` |

This directive appeared in version 1.31.3.

Sets the receive buffer size
(the `SO_RCVBUF` option)
for outgoing connections to a proxied server.
The special value `0` cancels the effect
of the `proxy_socket_rcvbuf` directive
inherited from the previous configuration level, which allows
keeping the operating system’s settings in effect for the socket.

|  |  |
| --- | --- |
| Syntax: | `proxy_socket_sndbuf size;` |
| Default: | — |
| Context: | `stream`, `server` |

This directive appeared in version 1.31.3.

Sets the send buffer size
(the `SO_SNDBUF` option)
for outgoing connections to a proxied server.
The special value `0` cancels the effect
of the `proxy_socket_sndbuf` directive
inherited from the previous configuration level, which allows
keeping the operating system’s settings in effect for the socket.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl on | off;` |
| Default: | ``` proxy_ssl off; ``` |
| Context: | `stream`, `server` |

Enables the SSL/TLS protocol for connections to a proxied server.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_alpn protocol ...;` |
| Default: | — |
| Context: | `stream`, `server` |

This directive appeared in version 1.31.0.

Specifies the list of protocols to advertise via the
[ALPN](https://datatracker.ietf.org/doc/html/rfc7301)
extension when establishing a connection with the proxied server.
For example:

> ```
> proxy_ssl_alpn h2 http/1.1;
> ```

Parameter value can contain variables:

> ```
> proxy_ssl_alpn $ssl_alpn_protocol;
> ```

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_certificate file;` |
| Default: | — |
| Context: | `stream`, `server` |

Specifies a `file` with the certificate in the PEM format
used for authentication to a proxied server.

Since version 1.21.0, variables can be used in the `file` name.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_certificate_cache off;` `proxy_ssl_certificate_cache max=N [inactive=time] [valid=time];` |
| Default: | ``` proxy_ssl_certificate_cache off; ``` |
| Context: | `stream`, `server` |

This directive appeared in version 1.27.4.

Defines a cache that stores
[SSL certificates](#proxy_ssl_certificate) and
[secret keys](#proxy_ssl_certificate_key)
specified with [variables](#proxy_ssl_certificate_key_variables).

The directive has the following parameters:

`max`
:   sets the maximum number of elements in the cache;
    on cache overflow the least recently used (LRU) elements are removed;

`inactive`
:   defines a time after which an element is removed from the cache
    if it has not been accessed during this time;
    by default, it is 10 seconds;

`valid`
:   defines a time during which
    an element in the cache is considered valid
    and can be reused;
    by default, it is 60 seconds.
    Certificates that exceed this time will be reloaded or revalidated;

`off`
:   disables the cache.

Example:

> ```
> proxy_ssl_certificate       $proxy_ssl_server_name.crt;
> proxy_ssl_certificate_key   $proxy_ssl_server_name.key;
> proxy_ssl_certificate_cache max=1000 inactive=20s valid=1m;
> ```

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_certificate_key file;` |
| Default: | — |
| Context: | `stream`, `server` |

The value
`store`:`scheme`:`id`
can be specified instead of the `file` (1.29.0),
which is used to load a secret key with a specified `id`
and OpenSSL provider registered URI `scheme`, such as
[`pkcs11`](https://datatracker.ietf.org/doc/html/rfc7512).

Specifies a `file` with the secret key in the PEM format
used for authentication to a proxied server.

Since version 1.21.0, variables can be used in the `file` name.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_ciphers ciphers;` |
| Default: | ``` proxy_ssl_ciphers DEFAULT; ``` |
| Context: | `stream`, `server` |

Specifies the enabled ciphers for connections to a proxied server.
The ciphers are specified in the format understood by the OpenSSL library.

The full list can be viewed using the
“`openssl ciphers`” command.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_conf_command name value;` |
| Default: | — |
| Context: | `stream`, `server` |

This directive appeared in version 1.19.4.

Sets arbitrary OpenSSL configuration
[commands](https://www.openssl.org/docs/man1.1.1/man3/SSL_CONF_cmd.html)
when establishing a connection with the proxied server.

> The directive is supported when using OpenSSL 1.0.2 or higher.

Several `proxy_ssl_conf_command` directives
can be specified on the same level.
These directives are inherited from the previous configuration level
if and only if there are
no `proxy_ssl_conf_command` directives
defined on the current level.

> Note that configuring OpenSSL directly
> might result in unexpected behavior.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_crl file;` |
| Default: | — |
| Context: | `stream`, `server` |

Specifies a `file` with revoked certificates (CRL)
in the PEM format used to [verify](#proxy_ssl_verify)
the certificate of the proxied server.
When using intermediate certificates, their CRLs should be
specified in the same file.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_key_log path;` |
| Default: | — |
| Context: | `stream`, `server` |

This directive appeared in version 1.27.2.

Enables logging of proxied server connection SSL keys
and specifies the path to the key log file.
Keys are logged in the
[SSLKEYLOGFILE](https://datatracker.ietf.org/doc/html/rfc9850)
format compatible with Wireshark.

> This directive is available as part of our
> [commercial subscription](https://www.f5.com/products/nginx).

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_name name;` |
| Default: | ``` proxy_ssl_name host from proxy_pass; ``` |
| Context: | `stream`, `server` |

Allows overriding the server name used to
[verify](#proxy_ssl_verify)
the certificate of the proxied server and to be
[passed through SNI](#proxy_ssl_server_name)
when establishing a connection with the proxied server.
The server name can also be specified using variables (1.11.3).

By default, the host part of the [proxy\_pass](#proxy_pass) address is used.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_password_file file;` |
| Default: | — |
| Context: | `stream`, `server` |

Specifies a `file` with passphrases for
[secret keys](#proxy_ssl_certificate_key)
where each passphrase is specified on a separate line.
Passphrases are tried in turn when loading the key.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_protocols [SSLv2] [SSLv3] [TLSv1] [TLSv1.1] [TLSv1.2] [TLSv1.3];` |
| Default: | ``` proxy_ssl_protocols TLSv1.2 TLSv1.3; ``` |
| Context: | `stream`, `server` |

Enables the specified protocols for connections to a proxied server.

> The `TLSv1.3` parameter is used by default
> since 1.23.4.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_server_name on | off;` |
| Default: | ``` proxy_ssl_server_name off; ``` |
| Context: | `stream`, `server` |

Enables or disables passing of the server name through
[TLS
Server Name Indication extension](http://en.wikipedia.org/wiki/Server_Name_Indication) (SNI, RFC 6066)
when establishing a connection with the proxied server.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_session_reuse on | off;` |
| Default: | ``` proxy_ssl_session_reuse on; ``` |
| Context: | `stream`, `server` |

Determines whether SSL sessions can be reused when working with
the proxied server.
If the errors
“`digest check failed`”
appear in the logs, try disabling session reuse.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_trusted_certificate file;` |
| Default: | — |
| Context: | `stream`, `server` |

Specifies a `file` with trusted CA certificates in the PEM format
used to [verify](#proxy_ssl_verify)
the certificate of the proxied server.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_verify on | off;` |
| Default: | ``` proxy_ssl_verify off; ``` |
| Context: | `stream`, `server` |

Enables or disables verification of the proxied server certificate.

|  |  |
| --- | --- |
| Syntax: | `proxy_ssl_verify_depth number;` |
| Default: | ``` proxy_ssl_verify_depth 1; ``` |
| Context: | `stream`, `server` |

Sets the verification depth in the proxied server certificates chain.

|  |  |
| --- | --- |
| Syntax: | `proxy_timeout timeout;` |
| Default: | ``` proxy_timeout 10m; ``` |
| Context: | `stream`, `server` |

Sets the `timeout` between two successive
read or write operations on client or proxied server connections.
If no data is transmitted within this time, the connection is closed.

|  |  |
| --- | --- |
| Syntax: | `proxy_upload_rate rate;` |
| Default: | ``` proxy_upload_rate 0; ``` |
| Context: | `stream`, `server` |

This directive appeared in version 1.9.3.

Limits the speed of reading the data from the client.
The `rate` is specified in bytes per second.
The zero value disables rate limiting.
The limit is set per a connection, so if the client simultaneously opens
two connections,
the overall rate will be twice as much as the specified limit.

Parameter value can contain variables (1.17.0).
It may be useful in cases where rate should be limited
depending on a certain condition:

> ```
> map $slow $rate {
>     1     4k;
>     2     8k;
> }
>
> proxy_upload_rate $rate;
> ```
