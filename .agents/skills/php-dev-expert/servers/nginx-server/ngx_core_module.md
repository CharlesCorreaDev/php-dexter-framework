# Core functionality

> **Fonte / Source:** https://nginx.org/en/docs/ngx_core_module.html

---

## Core functionality

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [accept\_mutex](#accept_mutex)      [accept\_mutex\_delay](#accept_mutex_delay)      [daemon](#daemon)      [debug\_connection](#debug_connection)      [debug\_points](#debug_points)      [env](#env)      [error\_log](#error_log)      [events](#events)      [include](#include)      [load\_module](#load_module)      [lock\_file](#lock_file)      [master\_process](#master_process)      [multi\_accept](#multi_accept)      [pcre\_jit](#pcre_jit)      [pid](#pid)      [ssl\_engine](#ssl_engine)      [ssl\_object\_cache\_inheritable](#ssl_object_cache_inheritable)      [stall\_threshold](#stall_threshold)      [thread\_pool](#thread_pool)      [timer\_resolution](#timer_resolution)      [use](#use)      [user](#user)      [worker\_aio\_requests](#worker_aio_requests)      [worker\_connections](#worker_connections)      [worker\_cpu\_affinity](#worker_cpu_affinity)      [worker\_priority](#worker_priority)      [worker\_processes](#worker_processes)      [worker\_rlimit\_core](#worker_rlimit_core)      [worker\_rlimit\_nofile](#worker_rlimit_nofile)      [worker\_shutdown\_timeout](#worker_shutdown_timeout)      [working\_directory](#working_directory) |

#### Example Configuration

> ```
> user www www;
> worker_processes 2;
>
> error_log /var/log/nginx-error.log info;
>
> events {
>     use kqueue;
>     worker_connections 2048;
> }
>
> ...
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `accept_mutex on | off;` |
| Default: | ``` accept_mutex off; ``` |
| Context: | `events` |

If `accept_mutex` is enabled,
worker processes will accept new connections by turn.
Otherwise, all worker processes will be notified about new connections,
and if volume of new connections is low, some of the worker processes
may just waste system resources.

> There is no need to enable `accept_mutex`
> on systems that support the
> [EPOLLEXCLUSIVE](events.md#epoll) flag (1.11.3) or
> when using [reuseport](http__ngx_http_core_module.md#reuseport).

> Prior to version 1.11.3, the default value was `on`.

|  |  |
| --- | --- |
| Syntax: | `accept_mutex_delay time;` |
| Default: | ``` accept_mutex_delay 500ms; ``` |
| Context: | `events` |

If [accept\_mutex](#accept_mutex) is enabled, specifies the maximum time
during which a worker process will try to restart accepting new
connections if another worker process is currently accepting
new connections.

|  |  |
| --- | --- |
| Syntax: | `daemon on | off;` |
| Default: | ``` daemon on; ``` |
| Context: | `main` |

Determines whether nginx should become a daemon.
Mainly used during development.

|  |  |
| --- | --- |
| Syntax: | `debug_connection address | CIDR | unix:;` |
| Default: | — |
| Context: | `events` |

Enables debugging log for selected client connections.
Other connections will use logging level set by the
[error\_log](#error_log) directive.
Debugged connections are specified by IPv4 or IPv6 (1.3.0, 1.2.1)
address or network.
A connection may also be specified using a hostname.
For connections using UNIX-domain sockets (1.3.0, 1.2.1),
debugging log is enabled by the “`unix:`” parameter.

> ```
> events {
>     debug_connection 127.0.0.1;
>     debug_connection localhost;
>     debug_connection 192.0.2.0/24;
>     debug_connection ::1;
>     debug_connection 2001:0db8::/32;
>     debug_connection unix:;
>     ...
> }
> ```

> For this directive to work, nginx needs to
> be built with `--with-debug`,
> see “[A debugging log](debugging_log.md)”.

|  |  |
| --- | --- |
| Syntax: | `debug_points abort | stop;` |
| Default: | — |
| Context: | `main` |

This directive is used for debugging.

When internal error is detected, e.g. the leak of sockets on
restart of working processes, enabling `debug_points`
leads to a core file creation (`abort`)
or to stopping of a process (`stop`) for further
analysis using a system debugger.

|  |  |
| --- | --- |
| Syntax: | `env variable[=value];` |
| Default: | ``` env TZ; ``` |
| Context: | `main` |

By default, nginx removes all environment variables inherited
from its parent process except the TZ variable.
This directive allows preserving some of the inherited variables,
changing their values, or creating new environment variables.
These variables are then:

- inherited during a [live upgrade](control.md#upgrade)
  of an executable file;
- used by the
  [ngx\_http\_perl\_module](http__ngx_http_perl_module.md) module;
- used by worker processes.
  One should bear in mind that controlling system libraries in this way
  is not always possible as it is common for libraries to check
  variables only during initialization, well before they can be set
  using this directive.
  An exception from this is an above mentioned
  [live upgrade](control.md#upgrade)
  of an executable file.

The TZ variable is always inherited and available to the
[ngx\_http\_perl\_module](http__ngx_http_perl_module.md)
module, unless it is configured explicitly.

Usage example:

> ```
> env MALLOC_OPTIONS;
> env PERL5LIB=/data/site/modules;
> env OPENSSL_ALLOW_PROXY_CERTS=1;
> ```

> The NGINX environment variable is used internally by nginx
> and should not be set directly by the user.

|  |  |
| --- | --- |
| Syntax: | `error_log file [level] [json];` |
| Default: | ``` error_log logs/error.log error; ``` |
| Context: | `main`, `http`, `mail`, `stream`, `server`, `location` |

Configures logging.
Several logs can be specified on the same configuration level (1.5.2).
If on the `main` configuration level writing a log to a file
is not explicitly defined, the default file will be used.

The first parameter defines a `file` that will store the log.
The special value `stderr` selects the standard error file.
Logging to [syslog](syslog.md) can be configured by specifying
the “`syslog:`” prefix.
Logging to a
[cyclic memory buffer](debugging_log.md#memory)
can be configured by specifying the “`memory:`” prefix and
buffer `size`, and is generally used for debugging (1.7.11).

The second parameter determines the `level` of logging,
and can be one of the following:
`debug`, `info`, `notice`,
`warn`, `error`, `crit`,
`alert`, or `emerg`.
Log levels above are listed in the order of increasing severity.
Setting a certain log level will cause all messages of
the specified and more severe log levels to be logged.
For example, the default level `error` will
cause `error`, `crit`,
`alert`, and `emerg` messages
to be logged.
If this parameter is omitted then `error` is used.

> For `debug` logging to work, nginx needs to
> be built with `--with-debug`,
> see “[A debugging log](debugging_log.md)”.

The `json` parameter (1.29.8)
enables writing a log in the JSON format,
with support for
[context tags](http__ngx_http_core_module.md#error_log_tag):

> ```
> {
>   "level": "error",
>   "timestamp": "2026-05-13T10:30:15.042+00:00",
>   "pid": 12345,  "tid": 12345,  "cnum": 3,
>   "msg": "connect() failed",
>   "client": "192.168.1.10",  "server": "example.com",
>   "request": "GET /api HTTP/1.1",
>   "upstream": "http://127.0.0.1:8080/api",
>   "errno": 111,
>   "errtext": "Connection refused"
> }
> ```

A log entry cannot exceed 2 KB,
data beyond this limit is truncated to `“truncated”:1`.
Debug logging is not supported for JSON.

> This parameter is available as part of our
> [commercial subscription](https://www.f5.com/products/nginx).

> The directive can be specified on the
> `stream` level
> starting from version 1.7.11,
> and on the `mail` level
> starting from version 1.9.0.

|  |  |
| --- | --- |
| Syntax: | `events { ... }` |
| Default: | — |
| Context: | `main` |

Provides the configuration file context in which the directives that
affect connection processing are specified.

|  |  |
| --- | --- |
| Syntax: | `include file | mask;` |
| Default: | — |
| Context: | `any` |

Includes another `file`, or files matching the
specified `mask`, into configuration.
Included files should consist of
syntactically correct directives and blocks.

Usage example:

> ```
> include mime.types;
> include vhosts/*.conf;
> ```

|  |  |
| --- | --- |
| Syntax: | `load_module file;` |
| Default: | — |
| Context: | `main` |

This directive appeared in version 1.9.11.

Loads a dynamic module.

Example:

> ```
> load_module modules/ngx_mail_module.so;
> ```

|  |  |
| --- | --- |
| Syntax: | `lock_file file;` |
| Default: | ``` lock_file logs/nginx.lock; ``` |
| Context: | `main` |

nginx uses the locking mechanism to implement [accept\_mutex](#accept_mutex)
and serialize access to shared memory.
On most systems the locks are implemented using atomic operations,
and this directive is ignored.
On other systems the “lock file” mechanism is used.
This directive specifies a prefix for the names of lock files.

|  |  |
| --- | --- |
| Syntax: | `master_process on | off;` |
| Default: | ``` master_process on; ``` |
| Context: | `main` |

Determines whether worker processes are started.
This directive is intended for nginx developers.

|  |  |
| --- | --- |
| Syntax: | `multi_accept on | off;` |
| Default: | ``` multi_accept off; ``` |
| Context: | `events` |

If `multi_accept` is disabled, a worker process
will accept one new connection at a time.
Otherwise, a worker process
will accept all new connections at a time.

> The directive is ignored if [kqueue](events.md#kqueue)
> connection processing method is used, because it reports
> the number of new connections waiting to be accepted.

|  |  |
| --- | --- |
| Syntax: | `pcre_jit on | off;` |
| Default: | ``` pcre_jit off; ``` |
| Context: | `main` |

This directive appeared in version 1.1.12.

Enables or disables the use of “just-in-time compilation” (PCRE JIT)
for the regular expressions known by the time of configuration parsing.

PCRE JIT can speed up processing of regular expressions significantly.

> The JIT is available in PCRE libraries starting from version 8.20
> built with the `--enable-jit` configuration parameter.
> When the PCRE library is built with nginx (`--with-pcre=`),
> the JIT support is enabled via the
> `--with-pcre-jit` configuration parameter.

|  |  |
| --- | --- |
| Syntax: | `pid file;` |
| Default: | ``` pid logs/nginx.pid; ``` |
| Context: | `main` |

Defines a `file` that will store the process ID of the main process.

|  |  |
| --- | --- |
| Syntax: | `ssl_engine device;` |
| Default: | — |
| Context: | `main` |

Defines the name of the hardware SSL accelerator.

> The module may be dynamically loaded by OpenSSL during configuration testing.

|  |  |
| --- | --- |
| Syntax: | `ssl_object_cache_inheritable on | off;` |
| Default: | ``` ssl_object_cache_inheritable on; ``` |
| Context: | `main` |

This directive appeared in version 1.27.4.

If enabled, SSL objects
(SSL certificates, secret keys, trusted CA certificates, CRL lists)
will be inherited across configuration reloads.

SSL objects loaded from a file are inherited
if the modification time and file index has not been changed
since the previous configuration load.
Secret keys specified as
`engine:name:id` are never inherited.
Secret keys specified as
`data:value` are always inherited.

> SSL objects loaded from variables cannot be inherited.

Example:

> ```
> ssl_object_cache_inheritable on;
>
> http {
>     ...
>     server {
>         ...
>         ssl_certificate     example.com.crt;
>         ssl_certificate_key example.com.key;
>     }
> }
> ```

|  |  |
| --- | --- |
| Syntax: | `stall_threshold time;` |
| Default: | ``` stall_threshold 1000ms; ``` |
| Context: | `events` |

This directive appeared in version 1.29.0.

Allows overriding the default time threshold for the event loop iteration
before a stall is reported.
By default, a stall is reported
when an event loop iteration exceeds `1000ms`.
If the [timer\_resolution](#timer_resolution) directive is enabled,
the time threshold will be ignored.

> This directive is available as part of our
> [commercial subscription](https://www.f5.com/products/nginx).

|  |  |
| --- | --- |
| Syntax: | `thread_pool name threads=number [max_queue=number];` |
| Default: | ``` thread_pool default threads=32 max_queue=65536; ``` |
| Context: | `main` |

This directive appeared in version 1.7.11.

Defines the `name` and parameters of a thread pool
used for multi-threaded reading and sending of files
[without blocking](http__ngx_http_core_module.md#aio)
worker processes.

The `threads` parameter
defines the number of threads in the pool.

In the event that all threads in the pool are busy,
a new task will wait in the queue.
The `max_queue` parameter limits the number
of tasks allowed to be waiting in the queue.
By default, up to 65536 tasks can wait in the queue.
When the queue overflows, the task is completed with an error.

|  |  |
| --- | --- |
| Syntax: | `timer_resolution interval;` |
| Default: | — |
| Context: | `main` |

Reduces timer resolution in worker processes, thus reducing the
number of `gettimeofday()` system calls made.
By default, `gettimeofday()` is called each time
a kernel event is received.
With reduced resolution, `gettimeofday()` is only
called once per specified `interval`.

Example:

> ```
> timer_resolution 100ms;
> ```

Internal implementation of the interval depends on the method used:

- the `EVFILT_TIMER` filter if `kqueue` is used;
- `timer_create()` if `eventport` is used;
- `setitimer()` otherwise.

|  |  |
| --- | --- |
| Syntax: | `use method;` |
| Default: | — |
| Context: | `events` |

Specifies the [connection processing](events.md)
`method` to use.
There is normally no need to specify it explicitly, because nginx will
by default use the most efficient method.

|  |  |
| --- | --- |
| Syntax: | `user user [group];` |
| Default: | ``` user nobody nobody; ``` |
| Context: | `main` |

Defines `user` and `group`
credentials used by worker processes.
If `group` is omitted, a group whose name equals
that of `user` is used.

|  |  |
| --- | --- |
| Syntax: | `worker_aio_requests number;` |
| Default: | ``` worker_aio_requests 32; ``` |
| Context: | `events` |

This directive appeared in versions 1.1.4 and 1.0.7.

When using [aio](http__ngx_http_core_module.md#aio)
with the [epoll](events.md#epoll)
connection processing method, sets the maximum `number` of
outstanding asynchronous I/O operations
for a single worker process.

|  |  |
| --- | --- |
| Syntax: | `worker_connections number;` |
| Default: | ``` worker_connections 512; ``` |
| Context: | `events` |

Sets the maximum number of simultaneous connections that
can be opened by a worker process.

It should be kept in mind that this number includes all connections
(e.g. connections with proxied servers, among others),
not only connections with clients.
Another consideration is that the actual number of simultaneous
connections cannot exceed the current limit on
the maximum number of open files, which can be changed by
[worker\_rlimit\_nofile](#worker_rlimit_nofile).

|  |  |
| --- | --- |
| Syntax: | `worker_cpu_affinity cpumask ...;` `worker_cpu_affinity auto [cpumask];` |
| Default: | — |
| Context: | `main` |

Binds worker processes to the sets of CPUs.
Each CPU set is represented by a bitmask of allowed CPUs.
There should be a separate set defined for each of the worker processes.
By default, worker processes are not bound to any specific CPUs.

For example,

> ```
> worker_processes    4;
> worker_cpu_affinity 0001 0010 0100 1000;
> ```

binds each worker process to a separate CPU, while

> ```
> worker_processes    2;
> worker_cpu_affinity 0101 1010;
> ```

binds the first worker process to CPU0/CPU2,
and the second worker process to CPU1/CPU3.
The second example is suitable for hyper-threading.

The special value `auto` (1.9.10) allows
binding worker processes automatically to available CPUs:

> ```
> worker_processes auto;
> worker_cpu_affinity auto;
> ```

The optional mask parameter can be used to limit the CPUs
available for automatic binding:

> ```
> worker_cpu_affinity auto 01010101;
> ```

> The directive is only available on FreeBSD and Linux.

|  |  |
| --- | --- |
| Syntax: | `worker_priority number;` |
| Default: | ``` worker_priority 0; ``` |
| Context: | `main` |

Defines the scheduling priority for worker processes like it is
done by the `nice` command: a negative
`number`
means higher priority.
Allowed range normally varies from -20 to 20.

Example:

> ```
> worker_priority -10;
> ```

|  |  |
| --- | --- |
| Syntax: | `worker_processes number | auto;` |
| Default: | ``` worker_processes 1; ``` |
| Context: | `main` |

Defines the number of worker processes.

The optimal value depends on many factors including (but not
limited to) the number of CPU cores, the number of hard disk
drives that store data, and load pattern.
When one is in doubt, setting it to the number of available CPU cores
would be a good start (the value “`auto`”
will try to autodetect it).

> The `auto` parameter is supported starting from
> versions 1.3.8 and 1.2.5.

|  |  |
| --- | --- |
| Syntax: | `worker_rlimit_core size;` |
| Default: | — |
| Context: | `main` |

Changes the limit on the largest size of a core file
(`RLIMIT_CORE`) for worker processes.
Used to increase the limit without restarting the main process.

|  |  |
| --- | --- |
| Syntax: | `worker_rlimit_nofile number;` |
| Default: | — |
| Context: | `main` |

Changes the limit on the maximum number of open files
(`RLIMIT_NOFILE`) for worker processes.
Used to increase the limit without restarting the main process.

|  |  |
| --- | --- |
| Syntax: | `worker_shutdown_timeout time;` |
| Default: | — |
| Context: | `main` |

This directive appeared in version 1.11.11.

Configures a timeout for a graceful shutdown of worker processes.
When the `time` expires,
nginx will try to close all the connections currently open
to facilitate shutdown.

|  |  |
| --- | --- |
| Syntax: | `working_directory directory;` |
| Default: | — |
| Context: | `main` |

Defines the current working directory for a worker process.
It is primarily used when writing a core-file, in which case
a worker process should have write permission for the
specified directory.
