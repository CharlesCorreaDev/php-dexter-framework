# Module ngx_http_db_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_db_module.html

---

## Module ngx\_http\_db\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [db\_auth](#db_auth)      [db\_bind](#db_bind)      [db\_buffer\_size](#db_buffer_size)      [db\_cache](#db_cache)      [db\_connect\_timeout](#db_connect_timeout)      [db\_get](#db_get)      [db\_name](#db_name)      [db\_next\_upstream](#db_next_upstream)      [db\_next\_upstream\_timeout](#db_next_upstream_timeout)      [db\_next\_upstream\_tries](#db_next_upstream_tries)      [db\_pass](#db_pass)      [db\_read\_timeout](#db_read_timeout)      [db\_send\_timeout](#db_send_timeout)      [db\_socket\_keepalive](#db_socket_keepalive)      [db\_ssl](#db_ssl)      [db\_ssl\_certificate](#db_ssl_certificate)      [db\_ssl\_certificate\_cache](#db_ssl_certificate_cache)      [db\_ssl\_certificate\_key](#db_ssl_certificate_key)      [db\_ssl\_ciphers](#db_ssl_ciphers)      [db\_ssl\_conf\_command](#db_ssl_conf_command)      [db\_ssl\_crl](#db_ssl_crl)      [db\_ssl\_key\_log](#db_ssl_key_log)      [db\_ssl\_name](#db_ssl_name)      [db\_ssl\_password\_file](#db_ssl_password_file)      [db\_ssl\_protocols](#db_ssl_protocols)      [db\_ssl\_server\_name](#db_ssl_server_name)      [db\_ssl\_session\_reuse](#db_ssl_session_reuse)      [db\_ssl\_trusted\_certificate](#db_ssl_trusted_certificate)      [db\_ssl\_verify](#db_ssl_verify)      [db\_ssl\_verify\_depth](#db_ssl_verify_depth)      [db\_type](#db_type)      [db\_var](#db_var) |

The `ngx_http_db_module` module (1.31.6) retrieves values
for the specified [key](#db_get)
from a [database](#db_pass)
and returns them as HTTP response bodies.
The key can contain variables.
[Authentication](#db_auth) and
[database selection](#db_name) are also supported.

Currently, the module supports single-key lookups using the
`GET` command of Redis database over TCP or TLS.

Lookup results can be [cached](#db_cache) in a
[shared memory zone](http__ngx_http_keyval_module.md#keyval_zone).
Retrieved values can be used in [variables](#db_var).

> This module is available as part of our
> [commercial subscription](https://www.f5.com/products/nginx).

#### Example Configuration

Redis authentication and database selection:

> ```
> upstream redis_backend {
>     server    127.0.0.1:6379;
>     keepalive 4;
>
>     db_type redis;
> }
>
> server {
>     ...
>     location = /lookup {
>             db_pass redis_backend;
>             db_name 3;
>             db_auth "secret";
>             db_get  $arg_key;
>     }
> }
> ```

Per-database lookup caching:

> ```
> keyval_zone zone=dbcache_db0:1m timeout=60s;
> keyval_zone zone=dbcache_db1:1m timeout=60s;
>
> upstream redis_backend {
>     server    127.0.0.1:6379;
>     keepalive 4;
>
>     db_type redis;
> }
>
> server {
>     ...
>     location /db0 {
>         db_pass  redis_backend;
>         db_name  0;
>         db_get   $arg_key;
>         db_cache dbcache_db0;
>     }
>
>     location /db1 {
>         db_pass  redis_backend;
>         db_name  1;
>         db_get   $arg_key;
>         db_cache dbcache_db1;
>     }
> }
> ```

Verified TLS and mutual TLS connection:

> ```
> location /db {
>     db_pass redis_backend;
>     db_get  $arg_key;
>
>     db_ssl                     on;
>     db_ssl_verify              on;
>     db_ssl_trusted_certificate ca.crt;
>     db_ssl_name                localhost;
>
>     db_ssl_certificate         client.crt;
>     db_ssl_certificate_key     client.key;
> }
> ```

Using database-backed variables, for example,
retrieving a resource owner from Redis and adding it to a response header.

> ```
> location = /internal/db-get {
>     internal;
>     db_pass redis_backend;
>     db_get  $arg_key;
> }
>
> location /resource {
>     db_var     $owner /internal/db-get "key=$arg_id" default=unknown;
>     add_header X-Owner $owner;
>     proxy_pass http://application;
> }
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `db_auth string;` |
| Default: | — |
| Context: | `location`, `if in location` |

Specifies the password string
used to authenticate connections to a database server.
An empty value disables authentication.
Authentication with a separate username and password arguments
is not supported.

> ```
> location /db/ {
>     db_pass redis_backend;
>     db_auth secret;
>     db_get  $arg_key;
> }
> ```

For the Redis backend, the password is passed as a single argument
to the `AUTH` command.

The directive is inherited from the previous configuration level
if and only if there are no `db_auth` directives
defined on the current level.

To protect the password, enable SSL/TLS connections to the database server
using the [db\_ssl](#db_ssl) directive.

|  |  |
| --- | --- |
| Syntax: | `db_bind address [transparent] | off;` |
| Default: | — |
| Context: | `http`, `server`, `location` |

Makes outgoing connections to a database server originate
from the specified local IP address with an optional port.
Parameter value can contain variables.
The special value `off` cancels the effect
of the `db_bind` directive
inherited from the previous configuration level, which allows the
system to auto-assign the local IP address and port.
Example:

> ```
> db_bind $server_addr;
> ```

The `transparent` parameter allows
outgoing connections to a database server originate
from a non-local IP address,
for example, from a real IP address of a client:

> ```
> db_bind $remote_addr transparent;
> ```

In order for this parameter to work,
it is usually necessary to run nginx worker processes with the
[superuser](ngx_core_module.md#user) privileges.
On Linux it is not required as if
the `transparent` parameter is specified, worker processes
inherit the `CAP_NET_RAW` capability from the master process.
It is also necessary to configure kernel routing table
to intercept network traffic from the database server.

|  |  |
| --- | --- |
| Syntax: | `db_buffer_size size;` |
| Default: | ``` db_buffer_size 4k|8k; ``` |
| Context: | `http`, `server`, `location` |

Sets the size of the buffer used for reading the database response.
By default, the buffer size is equal to one memory page.
This is either 4K or 8K, depending on a platform.
It can be made smaller, however.

The buffer is also used when parsing database protocol replies.
A protocol reply header that does not fit in the buffer
cannot be processed successfully.

Database response bodies are processed without upstream response buffering.

|  |  |
| --- | --- |
| Syntax: | `db_cache zone [timeout=time] [max_size=size] [not_found=on|off|time] ;` |
| Default: | — |
| Context: | `location`, `if in location` |

Enables caching of database lookup results in a shared memory zone
defined by the
[keyval\_zone](http__ngx_http_keyval_module.md#keyval_zone) directive.
The cache key is the value of the [db\_get](#db_get) directive,
evaluated for the current request.
If a cached result is found,
it is returned without connecting to the database server.

The [db\_pass](#db_pass) directive must be specified
in the same configuration context.

The following parameters are supported:

`timeout`=`time`
:   sets the lifetime of cached values.
    The parameter defaults to `0`.
    A nonzero effective timeout should be configured using this parameter
    or the zone's `timeout` parameter.
    With an effective timeout of zero, entries may be removed
    by unrelated writes to the zone.

`max_size`=`size`
:   sets the maximum value size eligible for caching.
    By default, the size is `64k`.
    Values exceeding this limit are returned to the client but are not cached.

`not_found`=`off` | `on` | `time`
:   Enables or disables caching of `not found` results.
    By default, such results are not cached.
    The value `on` uses the same timeout as for database values.
    A time value specifies a separate lifetime
    for `not found` results.

For example:

> ```
> http {
>     keyval_zone zone=db_cache:10m timeout=1m;
>
>     upstream redis_backend {
>         db_type redis;
>         server  127.0.0.1:6379;
>     }
>
>     server {
>         location /db/ {
>             db_pass redis_backend;
>             db_get  $arg_key;
>
>             db_cache db_cache timeout=30s max_size=128k not_found=5s;
>         }
>     }
> }
> ```

The evaluated [db\_get](#db_get) value is used as the cache key.
A cached value is returned without contacting the database.
A cached missing-key result returns
404 (Not Found)
if missing-key caching is enabled in the current location.
Otherwise, the database is queried.

A zero-length value is a successful result and is distinct
from a missing key.
Only complete, valid successful responses are cached,
together with missing-key results when enabled.
Failed, malformed, or incomplete responses are not cached.

Locations sharing a zone must have identical
[db\_pass](#db_pass), [db\_name](#db_name),
and [db\_auth](#db_auth) settings.
A cache zone must not also be used for ordinary keyval data.
Missing-key caching cannot be combined with the
`not_found` parameter of
[db\_next\_upstream](#db_next_upstream).

A cache lookup error returns
500 (Internal Server Error).
Failure to insert a result into the cache does not affect the response.

The directive is inherited from the previous configuration level
unless overridden.

> The module does not provide cache invalidation or purge.
> Database changes may remain invisible until cached entries expire
> or are evicted.
> Concurrent cache misses are not combined into a single database request.

|  |  |
| --- | --- |
| Syntax: | `db_connect_timeout time;` |
| Default: | ``` db_connect_timeout 60s; ``` |
| Context: | `http`, `server`, `location` |

Defines a timeout for establishing a connection with a database server.
It should be noted that this timeout cannot usually exceed 75 seconds.

|  |  |
| --- | --- |
| Syntax: | `db_get key;` |
| Default: | — |
| Context: | `location`, `if in location` |

Specifies the key to retrieve from the database.
The key can contain text, variables, and their combination.
An empty key is not allowed.

For the Redis backend, the key is passed to the `GET` command.
A successful lookup returns the value as the response body.

> ```
> upstream redis_backend {
>     db_type redis;
>     server  127.0.0.1:6379;
> }
>
> server {
>     location /db/ {
>         db_pass redis_backend;
>         db_get  "user:$arg_id";
>     }
> }
> ```

If caching is [enabled](#db_cache),
the evaluated key is also used as the cache key.

|  |  |
| --- | --- |
| Syntax: | `db_name string;` |
| Default: | — |
| Context: | `location`, `if in location` |

Sets the database to use for lookup requests.

For the Redis backend, the parameter specifies the database index
passed to the `SELECT` command.
If the directive is not specified or its value is empty,
database `0` is used:

> ```
> location /db/ {
>     db_pass redis_backend;
>     db_name 3;
>     db_get  $arg_key;
> }
> ```

|  |  |
| --- | --- |
| Syntax: | `db_next_upstream error | timeout | invalid_response | not_found off ...;` `db_next_upstream off;` |
| Default: | ``` db_next_upstream error timeout; ``` |
| Context: | `http`, `server`, `location` |

Specifies the conditions under which a request can be passed
to the next database server:

`error`
:   an error occurred while establishing a connection with the
    server, passing a request to it, or reading the response header;

`timeout`
:   a timeout has occurred while establishing a connection with the
    server, passing a request to it, or reading the response header;

`invalid_response`
:   server returned an invalid response.
    For the Redis backend, this also includes Redis error replies, such as
    authentication failures or key-value mismatch errors;

`not_found`
:   the requested key was not found.
    For the Redis backend, this corresponds to a nil reply
    to the `GET` command;
    > The parameter cannot be used when caching of
    > `not_found` results is enabled with the
    > [db\_cache](#db_cache) directive.

`off`
:   disables passing a request to the next server.

One should bear in mind that passing a request to the next server is
only possible if nothing has been sent to a client yet.
That is, if an error or timeout occurs in the middle of the
transferring of a response, fixing this is impossible.

The directive also defines what is considered an
[unsuccessful
attempt](http__ngx_http_upstream_module.md#max_fails) of communication with a server.
The cases of `error` and `timeout`,
are always considered unsuccessful attempts,
even if they are not specified in the directive.
The case of `invalid_response` is
considered an unsuccessful attempt only if it is specified in the directive.
The case of `not_found`
is never considered an unsuccessful attempt.

Passing a request to the next server can be limited by
[the number of tries](#db_next_upstream_tries)
and by [time](#db_next_upstream_timeout).

The `not_found` parameter cannot be combined
with enabled missing-key caching in [db\_cache](#db_cache).

|  |  |
| --- | --- |
| Syntax: | `db_next_upstream_timeout time;` |
| Default: | ``` db_next_upstream_timeout 0; ``` |
| Context: | `http`, `server`, `location` |

Limits the time during which a request can be passed to the
[next server](#db_next_upstream).
The `0` value turns off this limitation.

|  |  |
| --- | --- |
| Syntax: | `db_next_upstream_tries number;` |
| Default: | ``` db_next_upstream_tries 0; ``` |
| Context: | `http`, `server`, `location` |

Limits the number of possible tries for passing a request to the
[next server](#db_next_upstream).
The limit includes the initial attempt.
The `0` value turns off this limitation.

|  |  |
| --- | --- |
| Syntax: | `db_pass name;` |
| Default: | — |
| Context: | `location`, `if in location` |

Specifies the upstream group used for database lookups:

> ```
> db_pass redis_backend;
> ```

The group must be configured with [db\_type](#db_type).
A server address cannot be specified directly.

The [db\_get](#db_get) directive must also be configured,
either in the current configuration or inherited from a parent location.

Only `GET` and `HEAD` requests
are accepted.
Other methods return
405 (Method Not Allowed).
The client request body is discarded.
Client headers and the request body are not forwarded to the database.

The response content type is determined by the
[types](http__ngx_http_core_module.md#types) and
[default\_type](http__ngx_http_core_module.md#default_type)
directives.

|  |  |
| --- | --- |
| Syntax: | `db_read_timeout time;` |
| Default: | ``` db_read_timeout 60s; ``` |
| Context: | `http`, `server`, `location` |

Defines a timeout for reading data from a database server.
The timeout is set only between two successive read operations,
not for the transmission of the whole response.
If the database server does not transmit anything within this time,
the connection is closed.

|  |  |
| --- | --- |
| Syntax: | `db_send_timeout time;` |
| Default: | ``` db_send_timeout 60s; ``` |
| Context: | `http`, `server`, `location` |

Defines a timeout for sending data to a database server.

|  |  |
| --- | --- |
| Syntax: | `db_socket_keepalive on | off;` |
| Default: | ``` db_socket_keepalive off; ``` |
| Context: | `http`, `server`, `location` |

Configures the “TCP keepalive” behavior
for outgoing connections to a database server.
If enabled, the `SO_KEEPALIVE` socket option is turned on.

This is distinct from caching idle upstream connections,
which is configured using the
[keepalive](http__ngx_http_upstream_module.md#keepalive) directive.

|  |  |
| --- | --- |
| Syntax: | `db_ssl on | off;` |
| Default: | ``` db_ssl off; ``` |
| Context: | `http`, `server`, `location` |

Enables TLS for connections to database servers.

> Server certificate verification is disabled by default.
> Verification is configured separately by
> [db\_ssl\_verify](#db_ssl_verify).

|  |  |
| --- | --- |
| Syntax: | `db_ssl_certificate file;` |
| Default: | — |
| Context: | `http`, `server`, `location` |

Specifies a `file` with the certificate in the PEM format
used for authentication to a database server.
The corresponding [db\_ssl\_certificate\_key](#db_ssl_certificate_key)
must also be configured.

The parameter value can contain variables:

> ```
> db_ssl_certificate /etc/nginx/client-certs/$host.crt;
> ```

|  |  |
| --- | --- |
| Syntax: | `db_ssl_certificate_cache off;` `db_ssl_certificate_cache max=number [inactive=time] [valid=time] ;` |
| Default: | ``` db_ssl_certificate_cache off; ``` |
| Context: | `http`, `server`, `location` |

Defines a cache that stores
[SSL certificates](#db_ssl_certificate) and
[secret keys](#db_ssl_certificate_key)
specified with [variables](#db_ssl_certificate_key_variables).

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
> db_ssl_certificate_cache max=1000 inactive=20s valid=1m;
> ```

|  |  |
| --- | --- |
| Syntax: | `db_ssl_certificate_key file;` |
| Default: | — |
| Context: | `http`, `server`, `location` |

Specifies a `file` with the secret key in the PEM format
for the certificate configured by the
[db\_ssl\_certificate](#db_ssl_certificate) directive.

The parameter value can contain variables:

> ```
> db_ssl_certificate_key /etc/nginx/client-certs/$host.key;
> ```

|  |  |
| --- | --- |
| Syntax: | `db_ssl_ciphers ciphers;` |
| Default: | ``` db_ssl_ciphers DEFAULT; ``` |
| Context: | `http`, `server`, `location` |

Specifies the enabled ciphers for connections to database servers.
The ciphers are specified in the format understood by the OpenSSL library.

|  |  |
| --- | --- |
| Syntax: | `db_ssl_conf_command name value;` |
| Default: | — |
| Context: | `http`, `server`, `location` |

Sets arbitrary OpenSSL configuration
[commands](https://www.openssl.org/docs/man1.1.1/man3/SSL_CONF_cmd.html)
when establishing a connection with the database server.

Several `db_ssl_conf_command` directives
can be specified on the same level.
These directives are inherited from the previous configuration level
if and only if there are
no `db_ssl_conf_command` directives
defined on the current level.

> Note that configuring OpenSSL directly
> might result in unexpected behavior.

|  |  |
| --- | --- |
| Syntax: | `db_ssl_crl file;` |
| Default: | — |
| Context: | `http`, `server`, `location` |

Specifies a `file` with revoked certificates (CRL)
in the PEM format used to [verify](#db_ssl_verify)
the certificate of the database server.
When using intermediate certificates, their CRLs should be
specified in the same file.

|  |  |
| --- | --- |
| Syntax: | `db_ssl_key_log file;` |
| Default: | — |
| Context: | `http`, `server`, `location` |

Enables logging of database server connection SSL keys
and specifies the path to the key log file.
Keys are logged in the
[SSLKEYLOGFILE](https://datatracker.ietf.org/doc/html/rfc9850)
format compatible with Wireshark.

> TLS key logs contain sensitive material that can enable decryption
> of captured traffic.
> Protect these files and enable logging only when needed.

|  |  |
| --- | --- |
| Syntax: | `db_ssl_name name;` |
| Default: | — |
| Context: | `http`, `server`, `location` |

Allows overriding the server name used to
[verify](#db_ssl_verify)
the database server certificate and to be
[passed through SNI](#db_ssl_server_name)
when establishing a connection with the database server.

|  |  |
| --- | --- |
| Syntax: | `db_ssl_password_file file;` |
| Default: | — |
| Context: | `http`, `server`, `location` |

Specifies a `file` with passphrases for
[secret keys](#db_ssl_certificate_key)
where each passphrase is specified on a separate line.
Passphrases are tried in turn when loading the key.

|  |  |
| --- | --- |
| Syntax: | `db_ssl_protocols [SSLv2] [SSLv3] [TLSv1] [TLSv1.1] [TLSv1.2] [TLSv1.3];` |
| Default: | ``` db_ssl_protocols TLSv1.2 TLSv1.3; ``` |
| Context: | `http`, `server`, `location` |

Enables the specified protocols for connections to database servers.

|  |  |
| --- | --- |
| Syntax: | `db_ssl_server_name on | off;` |
| Default: | ``` db_ssl_server_name off; ``` |
| Context: | `http`, `server`, `location` |

Enables or disables passing of the
[server name](#db_ssl_name) through
[TLS
Server Name Indication extension](http://en.wikipedia.org/wiki/Server_Name_Indication) (SNI, RFC 6066)
when establishing a connection with the database server.

|  |  |
| --- | --- |
| Syntax: | `db_ssl_session_reuse on | off;` |
| Default: | ``` db_ssl_session_reuse on; ``` |
| Context: | `http`, `server`, `location` |

Determines whether SSL sessions can be reused when working with
the database server.
If the errors
“`digest check failed`”
appear in the logs, try disabling session reuse.

|  |  |
| --- | --- |
| Syntax: | `db_ssl_trusted_certificate file;` |
| Default: | — |
| Context: | `http`, `server`, `location` |

Specifies a `file` with trusted CA certificates in the PEM format
used to [verify](#db_ssl_verify)
the certificate of the database server.

|  |  |
| --- | --- |
| Syntax: | `db_ssl_verify on | off;` |
| Default: | ``` db_ssl_verify off; ``` |
| Context: | `http`, `server`, `location` |

Enables or disables verification of the database server certificate.
The [db\_ssl\_trusted\_certificate](#db_ssl_trusted_certificate) directive
must also be configured.
The directive is required when [db\_ssl\_verify](#db_ssl_verify) is enabled.

|  |  |
| --- | --- |
| Syntax: | `db_ssl_verify_depth number;` |
| Default: | ``` db_ssl_verify_depth 1; ``` |
| Context: | `http`, `server`, `location` |

Sets the verification depth in the database server certificate chain.
The directive is required when [db\_ssl\_verify](#db_ssl_verify) is enabled.

|  |  |
| --- | --- |
| Syntax: | `db_type type;` |
| Default: | — |
| Context: | `upstream` |

Sets the database protocol used by the upstream group.
Currently, only `redis` is supported:

> ```
> upstream redis_backend {
>     server  127.0.0.1:6379;
>     db_type redis;
> }
> ```

The protocol name is case-insensitive.

|  |  |
| --- | --- |
| Syntax: | `db_var $variable location=URI query=string [default=string];` |
| Default: | — |
| Context: | `server`, `location`, `if in location` |

Creates a variable whose value is obtained
from the response body of a subrequest.
The `location` parameter sets the subrequest URI.
The `query` parameter sets its query string.
An empty query string can be specified explicitly:

> ```
> db_var $configuration /_configuration "";
> ```

The parameter values can contain text, variables, and their combination.

If the subrequest returns the 200 (OK),
its response body is assigned to the variable.
An empty response body is a valid value.

If the subrequest returns the 404 (Not Found),
the value specified by the `default` parameter
is assigned to the variable.
The parameter value can contain variables.
If no `default` parameter is specified,
the variable is marked as not found.

Variables are populated during the pre-access phase, not when first evaluated.
They should be consumed in subsequent processing phases,
such as access or content processing.
Reading them earlier, for example in rewrite-phase
[if](http__ngx_http_rewrite_module.md#if),
[set](http__ngx_http_rewrite_module.md#set), or
[return](http__ngx_http_rewrite_module.md#return) processing,
does not initiate a lookup.
