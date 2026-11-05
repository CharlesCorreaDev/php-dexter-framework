# mpm_common - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mpm_common.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mpm_common.html) to go to the current version of this document.

# Apache MPM Common Directives

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | A collection of directives that are implemented by more than one multi-processing module (MPM) |
| [Status:](mod__module-dict.md#Status) | MPM |

### Directives

- ![](../images/down.gif) [AcceptMutex](#acceptmutex)
- ![](../images/down.gif) [ChrootDir](#chrootdir)
- ![](../images/down.gif) [CoreDumpDirectory](#coredumpdirectory)
- ![](../images/down.gif) [EnableExceptionHook](#enableexceptionhook)
- ![](../images/down.gif) [GracefulShutdownTimeout](#gracefulshutdowntimeout)
- ![](../images/down.gif) [Group](#group)
- ![](../images/down.gif) [Listen](#listen)
- ![](../images/down.gif) [ListenBackLog](#listenbacklog)
- ![](../images/down.gif) [LockFile](#lockfile)
- ![](../images/down.gif) [MaxClients](#maxclients)
- ![](../images/down.gif) [MaxMemFree](#maxmemfree)
- ![](../images/down.gif) [MaxRequestsPerChild](#maxrequestsperchild)
- ![](../images/down.gif) [MaxSpareThreads](#maxsparethreads)
- ![](../images/down.gif) [MinSpareThreads](#minsparethreads)
- ![](../images/down.gif) [PidFile](#pidfile)
- ![](../images/down.gif) [ReceiveBufferSize](#receivebuffersize)
- ![](../images/down.gif) [ScoreBoardFile](#scoreboardfile)
- ![](../images/down.gif) [SendBufferSize](#sendbuffersize)
- ![](../images/down.gif) [ServerLimit](#serverlimit)
- ![](../images/down.gif) [StartServers](#startservers)
- ![](../images/down.gif) [StartThreads](#startthreads)
- ![](../images/down.gif) [ThreadLimit](#threadlimit)
- ![](../images/down.gif) [ThreadsPerChild](#threadsperchild)
- ![](../images/down.gif) [ThreadStackSize](#threadstacksize)
- ![](../images/down.gif) [User](#user)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## AcceptMutex Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Method that Apache uses to serialize multiple children accepting requests on network sockets |
| [Syntax:](mod__directive-dict.md#Syntax) | `AcceptMutex Default|method` |
| [Default:](mod__directive-dict.md#Default) | `AcceptMutex Default` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `prefork`, `worker` |

The `AcceptMutex` directives sets the
method that Apache uses to serialize multiple children accepting
requests on network sockets. Prior to Apache 2.0, the method was
selectable only at compile time. The optimal method to use is
highly architecture and platform dependent. For further details,
see the [performance tuning](misc__perf-tuning.md)
documentation.

If this directive is set to `Default`, then the
compile-time selected default will be used. Other possible
methods are listed below. Note that not all methods are
available on all platforms. If a method is specified which is
not available, a message will be written to the error log
listing the available methods.

`flock`
:   uses the `flock(2)` system call to lock the
    file defined by the `LockFile` directive.

`fcntl`
:   uses the `fcntl(2)` system call to lock the
    file defined by the `LockFile` directive.

`posixsem`
:   uses POSIX compatible semaphores to implement the mutex.

`pthread`
:   uses POSIX mutexes as implemented by the POSIX Threads
    (PThreads) specification.

`sysvsem`
:   uses SySV-style semaphores to implement the mutex.

If you want to find out the compile time chosen default
for your system, you may set your `LogLevel` to `debug`. Then the default `AcceptMutex` will be written into the `ErrorLog`.

### Warning

On most systems, when the `pthread` option
is selected, if a child process terminates abnormally
while holding the `AcceptCntl` mutex the
server will stop responding to requests. When this
occurs, the server will require a manual restart to
recover.

Solaris is a notable exception as it provides a
mechanism, used by Apache, which usually allows the
mutex to be recovered after a child process terminates
abnormally while holding a mutex.

If your system implements the
`pthread_mutexattr_setrobust_np()` function,
you may be able to use the `pthread` option safely.

[![top](../images/up.gif)](#page-header)

## ChrootDir Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Directory for apache to run chroot(8) after startup. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ChrootDir /path/to/directory` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `event`, `prefork`, `worker` |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.2.10 and later |

This directive tells the server to chroot(8) to the
specified directory after startup, but before accepting requests.

Note that running the server under chroot is not
simple, and requires additional setup, particularly if you are running
scripts such as CGI or PHP. Please make sure you are properly familiar
with the operation of chroot before attempting to use this feature.

[![top](../images/up.gif)](#page-header)

## CoreDumpDirectory Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Directory where Apache attempts to switch before dumping core |
| [Syntax:](mod__directive-dict.md#Syntax) | `CoreDumpDirectory directory` |
| [Default:](mod__directive-dict.md#Default) | `See usage for the default setting` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpm_winnt`, `prefork`, `worker` |

This controls the directory to which Apache attempts to
switch before dumping core. The default is in the
`ServerRoot` directory, however
since this should not be writable by the user the server runs
as, core dumps won't normally get written. If you want a core
dump for debugging, you can use this directive to place it in a
different location.

### Core Dumps on Linux

If Apache starts as root and switches to another user, the
Linux kernel *disables* core dumps even if the directory is
writable for the process. Apache (2.0.46 and later) reenables core dumps
on Linux 2.4 and beyond, but only if you explicitly configure a `CoreDumpDirectory`.

### Core Dumps on BSD

To enable core-dumping of suid-executables on BSD-systems (such
as FreeBSD), set `kern.sugid_coredump` to 1.

[![top](../images/up.gif)](#page-header)

## EnableExceptionHook Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables a hook that runs exception handlers after a crash |
| [Syntax:](mod__directive-dict.md#Syntax) | `EnableExceptionHook On|Off` |
| [Default:](mod__directive-dict.md#Default) | `EnableExceptionHook Off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `prefork`, `worker` |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.0.49 and later |

For safety reasons this directive is only available if the server was
configured with the `--enable-exception-hook` option. It
enables a hook that allows external modules to plug in and do something
after a child crashed.

There are already two modules, `mod_whatkilledus` and
`mod_backtrace` that make use of this hook. Please have a
look at Jeff Trawick's [EnableExceptionHook site](http://www.apache.org/~trawick/exception_hook.html) for more information about these.

[![top](../images/up.gif)](#page-header)

## GracefulShutdownTimeout Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specify a timeout after which a gracefully shutdown server will exit. |
| [Syntax:](mod__directive-dict.md#Syntax) | `GracefulShutDownTimeout seconds` |
| [Default:](mod__directive-dict.md#Default) | `GracefulShutDownTimeout 0` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `prefork`, `worker`, `event` |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.2 and later |

The `GracefulShutdownTimeout` specifies
how many seconds after receiving a "graceful-stop" signal, a
server should continue to run, handling the existing connections.

Setting this value to zero means that the server will wait
indefinitely until all remaining requests have been fully served.

[![top](../images/up.gif)](#page-header)

## Group Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Group under which the server will answer requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `Group unix-group` |
| [Default:](mod__directive-dict.md#Default) | `Group #-1` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpmt_os2`, `prefork`, `worker` |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Only valid in global server config since Apache 2.0 |

The `Group` directive sets the group under
which the server will answer requests. In order to use this
directive, the server must be run initially as `root`. If
you start the server as a non-root user, it will fail to change to the
specified group, and will instead continue to run as the group of the
original user. Unix-group is one of:

A group name
:   Refers to the given group by name.

`#` followed by a group number.
:   Refers to a group by its number.

### Example

`Group www-group`

It is recommended that you set up a new group specifically for
running the server. Some admins use user `nobody`,
but this is not always possible or desirable.

### Security

Don't set `Group` (or `User`) to `root` unless
you know exactly what you are doing, and what the dangers are.

Special note: Use of this directive in `<VirtualHost>` is no longer supported. To
configure your server for `suexec` use
`SuexecUserGroup`.

### Note

Although the `Group` directive is present
in the `beos` and `mpmt_os2` MPMs,
it is actually a no-op there and only exists for compatibility
reasons.

[![top](../images/up.gif)](#page-header)

## Listen Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | IP addresses and ports that the server listens to |
| [Syntax:](mod__directive-dict.md#Syntax) | `Listen [IP-address:]portnumber [protocol]` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpm_netware`, `mpm_winnt`, `mpmt_os2`, `prefork`, `worker`, `event` |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Required directive since Apache 2.0  The protocol argument was added in 2.1.5 |

The `Listen` directive instructs Apache to
listen to only specific IP addresses or ports; by default it
responds to requests on all IP interfaces. `Listen`
is now a required directive. If it is not in the config file, the
server will fail to start. This is a change from previous versions
of Apache.

The `Listen` directive tells the server to
accept incoming requests on the specified port or address-and-port
combination. If only a port number is specified, the server listens to
the given port on all interfaces. If an IP address is given as well
as a port, the server will listen on the given port and
interface.

Multiple `Listen` directives may be used to
specify a number of addresses and ports to listen to. The server will
respond to requests from any of the listed addresses and ports.

For example, to make the server accept connections on both
port 80 and port 8000, use:

`Listen 80  
Listen 8000`

To make the server accept connections on two specified
interfaces and port numbers, use

`Listen 192.170.2.1:80  
Listen 192.170.2.5:8000`

IPv6 addresses must be surrounded in square brackets, as in the
following example:

`Listen [2001:db8::a00:20ff:fea7:ccea]:80`

The optional protocol argument is not required for most
configurations. If not specified, `https` is the default for
port 443 and `http` the default for all other ports. The
protocol is used to determine which module should handle a request, and
to apply protocol specific optimizations with the
`AcceptFilter` directive.

You only need to set the protocol if you are running on non-standard
ports. For example, running an `https` site on port 8443:

`Listen 192.170.2.1:8443 https`

### Error condition

Multiple `Listen` directives for the same ip
address and port will result in an `Address already in use`
error message.

### See also

- [DNS Issues](dns-caveats.md)
- [Setting which addresses and ports Apache
  uses](bind.md)

[![top](../images/up.gif)](#page-header)

## ListenBackLog Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum length of the queue of pending connections |
| [Syntax:](mod__directive-dict.md#Syntax) | `ListenBacklog backlog` |
| [Default:](mod__directive-dict.md#Default) | `ListenBacklog 511` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpm_netware`, `mpm_winnt`, `mpmt_os2`, `prefork`, `worker` |

The maximum length of the queue of pending connections.
Generally no tuning is needed or desired, however on some
systems it is desirable to increase this when under a TCP SYN
flood attack. See the backlog parameter to the
`listen(2)` system call.

This will often be limited to a smaller number by the
operating system. This varies from OS to OS. Also note that
many OSes do not use exactly what is specified as the backlog,
but use a number based on (but normally larger than) what is
set.

[![top](../images/up.gif)](#page-header)

## LockFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Location of the accept serialization lock file |
| [Syntax:](mod__directive-dict.md#Syntax) | `LockFile filename` |
| [Default:](mod__directive-dict.md#Default) | `LockFile logs/accept.lock` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `prefork`, `worker` |

The `LockFile` directive sets the path to
the lockfile used when Apache is used with an `AcceptMutex` value of either
`fcntl` or `flock`. This directive should
normally be left at its default value. The main reason for changing
it is if the `logs` directory is NFS mounted, since
**the lockfile must be stored on a local disk**. The PID
of the main server process is automatically appended to the
filename.

### Security

It is best to *avoid* putting this file in a world writable
directory such as `/var/tmp` because someone could create
a denial of service attack and prevent the server from starting by
creating a lockfile with the same name as the one the server will try
to create.

### See also

- `AcceptMutex`

[![top](../images/up.gif)](#page-header)

## MaxClients Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum number of connections that will be processed simultaneously |
| [Syntax:](mod__directive-dict.md#Syntax) | `MaxClients number` |
| [Default:](mod__directive-dict.md#Default) | `See usage for details` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `prefork`, `worker` |

The `MaxClients` directive sets the limit
on the number of simultaneous requests that will be served. Any
connection attempts over the `MaxClients`
limit will normally be queued, up to a number based on the
`ListenBacklog`
directive. Once a child process is freed at the end of a different
request, the connection will then be serviced.

For non-threaded servers (*i.e.*, `prefork`),
`MaxClients` translates into the maximum
number of child processes that will be launched to serve requests.
The default value is `256`; to increase it, you must also raise
`ServerLimit`.

For threaded and hybrid servers (*e.g.* `beos`
or `worker`) `MaxClients` restricts
the total number of threads that will be available to serve clients.
The default value for `beos` is `50`. For
hybrid MPMs the default value is `16` (`ServerLimit`) multiplied by the value of
`25` (`ThreadsPerChild`). Therefore, to increase `MaxClients` to a value that requires more than 16 processes,
you must also raise `ServerLimit`.

[![top](../images/up.gif)](#page-header)

## MaxMemFree Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum amount of memory that the main allocator is allowed to hold without calling `free()` |
| [Syntax:](mod__directive-dict.md#Syntax) | `MaxMemFree KBytes` |
| [Default:](mod__directive-dict.md#Default) | `MaxMemFree 0` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpm_netware`, `prefork`, `worker`, `mpm_winnt` |

The `MaxMemFree` directive sets the
maximum number of free Kbytes that the main allocator is allowed
to hold without calling `free()`. When not set, or when set
to zero, the threshold will be set to unlimited.

[![top](../images/up.gif)](#page-header)

## MaxRequestsPerChild Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Limit on the number of requests that an individual child server will handle during its life |
| [Syntax:](mod__directive-dict.md#Syntax) | `MaxRequestsPerChild number` |
| [Default:](mod__directive-dict.md#Default) | `MaxRequestsPerChild 10000` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `mpm_netware`, `mpm_winnt`, `mpmt_os2`, `prefork`, `worker` |

The `MaxRequestsPerChild` directive sets
the limit on the number of requests that an individual child
server process will handle. After
`MaxRequestsPerChild` requests, the child
process will die. If `MaxRequestsPerChild` is
`0`, then the process will never expire.

### Different default values

The default value for `mpm_netware` and
`mpm_winnt` is `0`.

Setting `MaxRequestsPerChild` to a
non-zero value limits the amount of memory that process can consume
by (accidental) memory leakage.

### Note

For `KeepAlive` requests, only
the first request is counted towards this limit. In effect, it
changes the behavior to limit the number of *connections* per
child.

### Default Configuration

The default (compiled-in) value of this setting (10000) is used when
no `MaxRequestsPerChild` directive is present in the
configuration. Many default configurations provided with the server include
"MaxRequestsPerChild 0" as part of the *default configuration*.

[![top](../images/up.gif)](#page-header)

## MaxSpareThreads Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum number of idle threads |
| [Syntax:](mod__directive-dict.md#Syntax) | `MaxSpareThreads number` |
| [Default:](mod__directive-dict.md#Default) | `See usage for details` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpm_netware`, `mpmt_os2`, `worker` |

Maximum number of idle threads. Different MPMs deal with this
directive differently.

For `worker`,
the default is `MaxSpareThreads 250`.
These MPMs deal with idle threads on a server-wide basis. If there
are too many idle threads in the server then child processes are
killed until the number of idle threads is less than this number.

For `mpm_netware` the default is
`MaxSpareThreads 100`. Since this MPM runs a
single-process, the spare thread count is also server-wide.

`beos` and `mpmt_os2` work
similar to `mpm_netware`. The default for
`beos` is `MaxSpareThreads 50`. For
`mpmt_os2` the default value is `10`.

### Restrictions

The range of the `MaxSpareThreads` value
is restricted. Apache will correct the given value automatically
according to the following rules:

- `mpm_netware` wants the value to be greater than
  `MinSpareThreads`.
- For
  `worker` the value must be greater or equal than
  the sum of `MinSpareThreads`
  and `ThreadsPerChild`.

### See also

- `MinSpareThreads`
- `StartServers`

[![top](../images/up.gif)](#page-header)

## MinSpareThreads Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Minimum number of idle threads available to handle request spikes |
| [Syntax:](mod__directive-dict.md#Syntax) | `MinSpareThreads number` |
| [Default:](mod__directive-dict.md#Default) | `See usage for details` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpm_netware`, `mpmt_os2`, `worker` |

Minimum number of idle threads to handle request spikes.
Different MPMs deal with this directive
differently.

`worker`
uses a default of `MinSpareThreads
75` and deal with idle threads on a server-wide basis. If
there aren't enough idle threads in the server then child
processes are created until the number of idle threads is greater
than number.

`mpm_netware` uses a default of
`MinSpareThreads 10` and, since it is a single-process
MPM, tracks this on a server-wide bases.

`beos` and `mpmt_os2` work
similar to `mpm_netware`. The default for
`beos` is `MinSpareThreads 1`. For
`mpmt_os2` the default value is `5`.

### See also

- `MaxSpareThreads`
- `StartServers`

[![top](../images/up.gif)](#page-header)

## PidFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File where the server records the process ID of the daemon |
| [Syntax:](mod__directive-dict.md#Syntax) | `PidFile filename` |
| [Default:](mod__directive-dict.md#Default) | `PidFile logs/httpd.pid` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpm_winnt`, `mpmt_os2`, `prefork`, `worker` |

The `PidFile` directive sets the file to
which the server records the process id of the daemon. If the
filename is not absolute then it is assumed to be relative to the
`ServerRoot`.

### Example

`PidFile /var/run/apache.pid`

It is often useful to be able to send the server a signal,
so that it closes and then re-opens its `ErrorLog` and `TransferLog`, and
re-reads its configuration files. This is done by sending a
SIGHUP (kill -1) signal to the process id listed in the
`PidFile`.

The `PidFile` is subject to the same
warnings about log file placement and [security](misc__security_tips.md#serverroot).

### Note

As of Apache 2 it is recommended to use only the `apachectl` script for (re-)starting or stopping the server.

[![top](../images/up.gif)](#page-header)

## ReceiveBufferSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | TCP receive buffer size |
| [Syntax:](mod__directive-dict.md#Syntax) | `ReceiveBufferSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `ReceiveBufferSize 0` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpm_netware`, `mpm_winnt`, `mpmt_os2`, `prefork`, `worker` |

The server will set the TCP receive buffer size to the number of
bytes specified.

If set to the value of `0`, the server will use the
OS default.

[![top](../images/up.gif)](#page-header)

## ScoreBoardFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Location of the file used to store coordination data for the child processes |
| [Syntax:](mod__directive-dict.md#Syntax) | `ScoreBoardFile file-path` |
| [Default:](mod__directive-dict.md#Default) | `ScoreBoardFile logs/apache_runtime_status` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpm_winnt`, `prefork`, `worker` |

Apache uses a scoreboard to communicate between its parent
and child processes. Some architectures require a file to facilitate
this communication. If the file is left unspecified, Apache first
attempts to create the scoreboard entirely in memory (using anonymous
shared memory) and, failing that, will attempt to create the file on
disk (using file-based shared memory). Specifying this directive causes
Apache to always create the file on the disk.

### Example

`ScoreBoardFile /var/run/apache_runtime_status`

File-based shared memory is useful for third-party applications
that require direct access to the scoreboard.

If you use a `ScoreBoardFile` then
you may see improved speed by placing it on a RAM disk. But be
careful that you heed the same warnings about log file placement
and [security](misc__security_tips.md).

### See also

- [Stopping and Restarting
  Apache](stopping.md)

[![top](../images/up.gif)](#page-header)

## SendBufferSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | TCP buffer size |
| [Syntax:](mod__directive-dict.md#Syntax) | `SendBufferSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `SendBufferSize 0` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpm_netware`, `mpm_winnt`, `mpmt_os2`, `prefork`, `worker` |

The server will set the TCP send buffer size to the number of bytes
specified. Very useful to increase past standard OS defaults on
high speed high latency (*i.e.*, 100ms or so, such as
transcontinental fast pipes).

If set to the value of `0`, the server will use the
OS default.

Further configuration of your operating system may be required to elicit
better performance on high speed, high latency connections.

On some operating systems, changes in TCP behavior resulting
from a larger `SendBufferSize` may not be seen unless
`EnableSendfile` is set to OFF. This
interaction applies only to static files.

[![top](../images/up.gif)](#page-header)

## ServerLimit Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Upper limit on configurable number of processes |
| [Syntax:](mod__directive-dict.md#Syntax) | `ServerLimit number` |
| [Default:](mod__directive-dict.md#Default) | `See usage for details` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `prefork`, `worker` |

For the `prefork` MPM, this directive sets the
maximum configured value for `MaxClients` for the lifetime of the
Apache process. For the `worker` MPM, this directive
in combination with `ThreadLimit` sets
the maximum configured value for `MaxClients` for the lifetime of the
Apache process. Any attempts to change this directive during a
restart will be ignored, but `MaxClients` can be modified during
a restart.

Special care must be taken when using this directive. If
`ServerLimit` is set to a value much higher
than necessary, extra, unused shared memory will be allocated. If
both `ServerLimit` and `MaxClients` are set to values
higher than the system can handle, Apache may not start or the
system may become unstable.

With the `prefork` MPM, use this directive only
if you need to set `MaxClients` higher than 256 (default).
Do not set the value of this directive any higher than what you
might want to set `MaxClients` to.

With `worker`
use this directive only
if your `MaxClients` and
`ThreadsPerChild`
settings require more than 16 server processes (default). Do not set
the value of this directive any higher than the number of server
processes required by what you may want for `MaxClients`  and `ThreadsPerChild`.

### Note

There is a hard limit of `ServerLimit 20000` compiled
into the server (for the `prefork` MPM 200000). This is
intended to avoid nasty effects caused by typos.

### See also

- [Stopping and Restarting Apache](stopping.md)

[![top](../images/up.gif)](#page-header)

## StartServers Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Number of child server processes created at startup |
| [Syntax:](mod__directive-dict.md#Syntax) | `StartServers number` |
| [Default:](mod__directive-dict.md#Default) | `See usage for details` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `mpmt_os2`, `prefork`, `worker` |

The `StartServers` directive sets the
number of child server processes created on startup. As the number
of processes is dynamically controlled depending on the load,
there is usually little reason to adjust this parameter.

The default value differs from MPM to MPM. For
`worker` the default is `StartServers 3`.
For `prefork` defaults to `5` and for
`mpmt_os2` to `2`.

[![top](../images/up.gif)](#page-header)

## StartThreads Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Number of threads created on startup |
| [Syntax:](mod__directive-dict.md#Syntax) | `StartThreads number` |
| [Default:](mod__directive-dict.md#Default) | `See usage for details` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `beos`, `mpm_netware` |

Number of threads created on startup. As the
number of threads is dynamically controlled depending on the
load, there is usually little reason to adjust this
parameter.

For `mpm_netware` the default is
`StartThreads 50` and, since there is only a single
process, this is the total number of threads created at startup to
serve requests.

For `beos` the default is `StartThreads
10`. It also reflects the total number of threads created
at startup to serve requests.

[![top](../images/up.gif)](#page-header)

## ThreadLimit Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the upper limit on the configurable number of threads per child process |
| [Syntax:](mod__directive-dict.md#Syntax) | `ThreadLimit number` |
| [Default:](mod__directive-dict.md#Default) | `See usage for details` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `mpm_winnt`, `worker` |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available for `mpm_winnt` in Apache 2.0.41 and later |

This directive sets the maximum configured value for `ThreadsPerChild` for the lifetime
of the Apache process. Any attempts to change this directive
during a restart will be ignored, but `ThreadsPerChild` can be modified
during a restart up to the value of this directive.

Special care must be taken when using this directive. If
`ThreadLimit` is set to a value much higher
than `ThreadsPerChild`,
extra unused shared memory will be allocated. If both
`ThreadLimit` and `ThreadsPerChild` are set to values
higher than the system can handle, Apache may not start or the
system may become unstable. Do not set the value of this directive
any higher than your greatest predicted setting of `ThreadsPerChild` for the
current run of Apache.

The default value for `ThreadLimit` is
`1920` when used with `mpm_winnt` and
`64` when used with the others.

### Note

There is a hard limit of `ThreadLimit 20000` (or
`ThreadLimit 15000` with `mpm_winnt`)
compiled into the server. This is intended to avoid nasty effects
caused by typos.

[![top](../images/up.gif)](#page-header)

## ThreadsPerChild Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Number of threads created by each child process |
| [Syntax:](mod__directive-dict.md#Syntax) | `ThreadsPerChild number` |
| [Default:](mod__directive-dict.md#Default) | `See usage for details` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `mpm_winnt`, `worker` |

This directive sets the number of threads created by each
child process. The child creates these threads at startup and
never creates more. If using an MPM like `mpm_winnt`,
where there is only one child process, this number should be high
enough to handle the entire load of the server. If using an MPM
like `worker`, where there are multiple child processes,
the *total* number of threads should be high enough to handle
the common load on the server.

The default value for `ThreadsPerChild` is
`64` when used with `mpm_winnt` and
`25` when used with the others.

[![top](../images/up.gif)](#page-header)

## ThreadStackSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The size in bytes of the stack used by threads handling client connections |
| [Syntax:](mod__directive-dict.md#Syntax) | `ThreadStackSize size` |
| [Default:](mod__directive-dict.md#Default) | `65536 on NetWare; varies on other operating systems` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `mpm_netware`, `mpm_winnt`, `worker`, `event` |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.1 and later |

The `ThreadStackSize` directive sets the
size of the stack (for autodata) of threads which handle client
connections and call modules to help process those connections.
In most cases the operating system default for stack size is
reasonable, but there are some conditions where it may need to be
adjusted:

- On platforms with a relatively small default thread stack size
  (e.g., HP-UX), Apache may crash when using some third-party modules
  which use a relatively large amount of autodata storage. Those
  same modules may have worked fine on other platforms where the
  default thread stack size is larger. This type of crash is
  resolved by setting `ThreadStackSize` to a
  value higher than the operating system default. This type of
  adjustment is necessary only if the provider of the third-party
  module specifies that it is required, or if diagnosis of an Apache
  crash indicates that the thread stack size was too small.
- On platforms where the default thread stack size is
  significantly larger than necessary for the web server
  configuration, a higher number of threads per child process
  will be achievable if `ThreadStackSize` is
  set to a value lower than the operating system default. This type
  of adjustment should only be made in a test environment which allows
  the full set of web server processing can be exercised, as there
  may be infrequent requests which require more stack to process.
  The minimum required stack size strongly depends on the modules
  used, but any change in the web server configuration can invalidate
  the current `ThreadStackSize` setting.

It is recommended to not reduce `ThreadStackSize`
unless a high number of threads per child process is needed. On some
platforms (including Linux), a setting of 128000 is already too low and
causes crashes with some common modules.

[![top](../images/up.gif)](#page-header)

## User Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The userid under which the server will answer requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `User unix-userid` |
| [Default:](mod__directive-dict.md#Default) | `User #-1` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | `prefork`, `worker` |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Only valid in global server config since Apache 2.0 |

The `User` directive sets the user ID as
which the server will answer requests. In order to use this
directive, the server must be run initially as `root`.
If you start the server as a non-root user, it will fail to change
to the lesser privileged user, and will instead continue to run as
that original user. If you do start the server as `root`,
then it is normal for the parent process to remain running as root.
Unix-userid is one of:

A username
:   Refers to the given user by name.

# followed by a user number.
:   Refers to a user by its number.

The user should have no privileges that result in it being
able to access files that are not intended to be visible to the
outside world, and similarly, the user should not be able to
execute code that is not meant for HTTP requests. It is
recommended that you set up a new user and group specifically for
running the server. Some admins use user `nobody`, but
this is not always desirable, since the `nobody` user
can have other uses on the system.

### Security

Don't set `User` (or `Group`) to `root` unless
you know exactly what you are doing, and what the dangers are.

Special note: Use of this directive in `<VirtualHost>` is no longer supported. To
configure your server for `suexec` use
`SuexecUserGroup`.

### Note

Although the `User` directive is present
in the `beos` and `mpmt_os2` MPMs,
it is actually a no-op there and only exists for compatibility
reasons.

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/mod/mpm_common.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mpm_common.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mpm_common.html "Japanese") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/mpm_common.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
