# Apache 2.0 Thread Safety Issues - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/developer/thread_safety.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](developer.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Developer Documentation](developer.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/developer/thread_safety.html) to go to the current version of this document.

# Apache 2.0 Thread Safety Issues

When using any of the threaded mpms in Apache 2.0 it is important
that every function called from Apache be thread safe. When linking in 3rd
party extensions it can be difficult to determine whether the resulting
server will be thread safe. Casual testing generally won't tell you this
either as thread safety problems can lead to subtle race conditons that
may only show up in certain conditions under heavy load.

- ![](../images/down.gif) [Global and static variables](#variables)
- ![](../images/down.gif) [errno](#errno)
- ![](../images/down.gif) [Common standard troublesome functions](#functions)
- ![](../images/down.gif) [Common 3rd Party Libraries](#commonlibs)
- ![](../images/down.gif) [Library List](#liblist)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Global and static variables

When writing your module or when trying to determine if a module or
3rd party library is thread safe there are some common things to keep in
mind.

First, you need to recognize that in a threaded model each individual
thread has its own program counter, stack and registers. Local variables
live on the stack, so those are fine. You need to watch out for any
static or global variables. This doesn't mean that you are absolutely not
allowed to use static or global variables. There are times when you
actually want something to affect all threads, but generally you need to
avoid using them if you want your code to be thread safe.

In the case where you have a global variable that needs to be global and
accessed by all threads, be very careful when you update it. If, for
example, it is an incrementing counter, you need to atomically increment
it to avoid race conditions with other threads. You do this using a mutex
(mutual exclusion). Lock the mutex, read the current value, increment it
and write it back and then unlock the mutex. Any other thread that wants
to modify the value has to first check the mutex and block until it is
cleared.

If you are using [APR](http://apr.apache.org/), have a look
at the `apr_atomic_*` functions and the
`apr_thread_mutex_*` functions.

[![top](../images/up.gif)](#page-header)

## errno

This is a common global variable that holds the error number of the
last error that occurred. If one thread calls a low-level function that
sets errno and then another thread checks it, we are bleeding error
numbers from one thread into another. To solve this, make sure your
module or library defines `_REENTRANT` or is compiled with
`-D_REENTRANT`. This will make errno a per-thread variable
and should hopefully be transparent to the code. It does this by doing
something like this:

`#define errno (*(__errno_location()))`

which means that accessing errno will call
`__errno_location()` which is provided by the libc. Setting
`_REENTRANT` also forces redefinition of some other functions
to their `*_r` equivalents and sometimes changes
the common `getc`/`putc` macros into safer function
calls. Check your libc documentation for specifics. Instead of, or in
addition to `_REENTRANT` the symbols that may affect this are
`_POSIX_C_SOURCE`, `_THREAD_SAFE`,
`_SVID_SOURCE`, and `_BSD_SOURCE`.

[![top](../images/up.gif)](#page-header)

## Common standard troublesome functions

Not only do things have to be thread safe, but they also have to be
reentrant. `strtok()` is an obvious one. You call it the first
time with your delimiter which it then remembers and on each subsequent
call it returns the next token. Obviously if multiple threads are
calling it you will have a problem. Most systems have a reentrant version
of of the function called `strtok_r()` where you pass in an
extra argument which contains an allocated `char *` which the
function will use instead of its own static storage for maintaining
the tokenizing state. If you are using [APR](http://apr.apache.org/) you can use `apr_strtok()`.

`crypt()` is another function that tends to not be reentrant,
so if you run across calls to that function in a library, watch out. On
some systems it is reentrant though, so it is not always a problem. If
your system has `crypt_r()` chances are you should be using
that, or if possible simply avoid the whole mess by using md5 instead.

[![top](../images/up.gif)](#page-header)

## Common 3rd Party Libraries

The following is a list of common libraries that are used by 3rd party
Apache modules. You can check to see if your module is using a potentially
unsafe library by using tools such as `ldd(1)` and
`nm(1)`. For [PHP](http://www.php.net/), for example,
try this:

`% ldd libphp4.so  
libsablot.so.0 => /usr/local/lib/libsablot.so.0 (0x401f6000)  
libexpat.so.0 => /usr/lib/libexpat.so.0 (0x402da000)  
libsnmp.so.0 => /usr/lib/libsnmp.so.0 (0x402f9000)  
libpdf.so.1 => /usr/local/lib/libpdf.so.1 (0x40353000)  
libz.so.1 => /usr/lib/libz.so.1 (0x403e2000)  
libpng.so.2 => /usr/lib/libpng.so.2 (0x403f0000)  
libmysqlclient.so.11 => /usr/lib/libmysqlclient.so.11 (0x40411000)  
libming.so => /usr/lib/libming.so (0x40449000)  
libm.so.6 => /lib/libm.so.6 (0x40487000)  
libfreetype.so.6 => /usr/lib/libfreetype.so.6 (0x404a8000)  
libjpeg.so.62 => /usr/lib/libjpeg.so.62 (0x404e7000)  
libcrypt.so.1 => /lib/libcrypt.so.1 (0x40505000)  
libssl.so.2 => /lib/libssl.so.2 (0x40532000)  
libcrypto.so.2 => /lib/libcrypto.so.2 (0x40560000)  
libresolv.so.2 => /lib/libresolv.so.2 (0x40624000)  
libdl.so.2 => /lib/libdl.so.2 (0x40634000)  
libnsl.so.1 => /lib/libnsl.so.1 (0x40637000)  
libc.so.6 => /lib/libc.so.6 (0x4064b000)  
/lib/ld-linux.so.2 => /lib/ld-linux.so.2 (0x80000000)`

In addition to these libraries you will need to have a look at any
libraries linked statically into the module. You can use `nm(1)`
to look for individual symbols in the module.

[![top](../images/up.gif)](#page-header)

## Library List

Please drop a note to [dev@httpd.apache.org](http://httpd.apache.org/lists.html#http-dev)
if you have additions or corrections to this list.

| Library | Version | Thread Safe? | Notes |
| --- | --- | --- | --- |
| [ASpell/PSpell](http://aspell.sourceforge.net/) |  | ? |  |
| [Berkeley DB](http://www.sleepycat.com/) | 3.x, 4.x | Yes | Be careful about sharing a connection across threads. |
| [bzip2](http://sources.redhat.com/bzip2/index.html) |  | Yes | Both low-level and high-level APIs are thread-safe. However, high-level API requires thread-safe access to errno. |
| [cdb](http://cr.yp.to/cdb.html) |  | ? |  |
| [C-Client](http://www.washington.edu/imap/) |  | Perhaps | c-client uses `strtok()` and `gethostbyname()` which are not thread-safe on most C library implementations. c-client's static data is meant to be shared across threads. If `strtok()` and `gethostbyname()` are thread-safe on your OS, c-client *may* be thread-safe. |
| [libcrypt](http://www.ijg.org/files/) |  | ? |  |
| [Expat](http://expat.sourceforge.net/) |  | Yes | Need a separate parser instance per thread |
| [FreeTDS](http://www.freetds.org/) |  | ? |  |
| [FreeType](http://www.freetype.org/) |  | ? |  |
| [GD 1.8.x](http://www.boutell.com/gd/) |  | ? |  |
| [GD 2.0.x](http://www.boutell.com/gd/) |  | ? |  |
| [gdbm](http://www.gnu.org/software/gdbm/gdbm.html) |  | No | Errors returned via a static `gdbm_error` variable |
| [ImageMagick](http://www.imagemagick.org/) | 5.2.2 | Yes | ImageMagick docs claim it is thread safe since version 5.2.2 (see [Change log](http://www.imagemagick.com/www/changelog.html)). |
| [Imlib2](http://www.enlightenment.org/p.php?p=about/efl&l=en) |  | ? |  |
| [libjpeg](http://www.ijg.org/files/) | v6b | ? |  |
| [libmysqlclient](http://mysql.com) |  | Yes | Use mysqlclient\_r library variant to ensure thread-safety. For more information, please read <http://dev.mysql.com/doc/mysql/en/Threaded_clients.html>. |
| [Ming](http://www.opaque.net/ming/) | 0.2a | ? |  |
| [Net-SNMP](http://net-snmp.sourceforge.net/) | 5.0.x | ? |  |
| [OpenLDAP](http://www.openldap.org/) | 2.1.x | Yes | Use `ldap_r` library variant to ensure thread-safety. |
| [OpenSSL](http://www.openssl.org/) | 0.9.6g | Yes | Requires proper usage of `CRYPTO_num_locks`, `CRYPTO_set_locking_callback`, `CRYPTO_set_id_callback` |
| [liboci8 (Oracle 8+)](http://www.oracle.com/) | 8.x,9.x | ? |  |
| [pdflib](http://pdflib.com/) | 5.0.x | Yes | PDFLib docs claim it is thread safe; changes.txt indicates it has been partially thread-safe since V1.91: <http://www.pdflib.com/products/pdflib-family/pdflib/>. |
| [libpng](http://www.libpng.org/pub/png/libpng.html) | 1.0.x | ? |  |
| [libpng](http://www.libpng.org/pub/png/libpng.html) | 1.2.x | ? |  |
| [libpq (PostgreSQL)](http://www.postgresql.org/docs/8.4/static/libpq-threading.html) | 8.x | Yes | Don't share connections across threads and watch out for `crypt()` calls |
| [Sablotron](http://www.gingerall.com/charlie/ga/xml/p_sab.xml) | 0.95 | ? |  |
| [zlib](http://www.gzip.org/zlib/) | 1.1.4 | Yes | Relies upon thread-safe zalloc and zfree functions Default is to use libc's calloc/free which are thread-safe. |

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/developer/thread_safety.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
