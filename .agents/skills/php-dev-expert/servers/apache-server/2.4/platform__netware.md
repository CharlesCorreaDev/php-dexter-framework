# Using Apache With Novell NetWare - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/platform/netware.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](platform.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Platform Specific Notes](platform.md)

# Using Apache With Novell NetWare

Novell NetWare is end-of-life and is no longer supported.
This document is retained for historical reference only.
Links to Novell resources formerly referenced in this document are
no longer functional.

This document explains how to install, configure and run
Apache 2.0 under Novell NetWare 6.0 and above. If you find any bugs,
or wish to contribute in other ways, please use our
[bug reporting
page.](http://httpd.apache.org/bug_report.html)

The bug reporting page and dev-httpd mailing list are
*not* provided to answer questions about configuration or
running Apache. Before you submit a bug report or request, first
consult this document, the [Frequently Asked
Questions](https://cwiki.apache.org/confluence/display/httpd/FAQ) page and the other relevant documentation topics. If
you still have a question or problem, post it to the novell.devsup.webserver (formerly at `news://developer-forums.novell.com/novell.devsup.webserver`) newsgroup, where many Apache users are
more than willing to answer new and obscure questions about using
Apache on NetWare.

Most of this document assumes that you are installing Apache
from a binary distribution. If you want to compile Apache
yourself (possibly to help with development, or to track down
bugs), see the section on [Compiling Apache for
NetWare](#comp) below.

- ![](../images/down.gif) [Requirements](#req)
- ![](../images/down.gif) [Downloading Apache for NetWare](#down)
- ![](../images/down.gif) [Installing Apache for NetWare](#inst)
- ![](../images/down.gif) [Running Apache for NetWare](#run)
- ![](../images/down.gif) [Configuring Apache for NetWare](#use)
- ![](../images/down.gif) [Compiling Apache for NetWare](#comp)

[![top](../images/up.gif)](#page-header)

## Requirements [¶](#req "Permanent link")

Apache 2.0 is designed to run on NetWare 6.0 service pack 3
and above. If you are running a service pack less
than SP3, you must install the latest
NetWare Libraries
for C (LibC) (formerly at `http://developer.novell.com/ndk/libc.htm`).

NetWare service packs are available here (formerly at `http://support.novell.com/misc/patlst.htm#nw`).

Apache 2.0 for NetWare can also be run in a NetWare 5.1 environment
as long as the latest service pack or the latest version
of the NetWare Libraries
for C (LibC) (formerly at `http://developer.novell.com/ndk/libc.htm`) has been installed . **WARNING:** Apache 2.0
for NetWare has not been targeted for or tested in this environment.

[![top](../images/up.gif)](#page-header)

## Downloading Apache for NetWare [¶](#down "Permanent link")

Information on the latest version of Apache can be found on
the Apache web server at <http://www.apache.org/>. This
will list the current release, any more recent alpha or
beta-test releases, together with details of mirror web and
anonymous ftp sites. Binary builds of the latest releases of
Apache 2.0 for NetWare can be downloaded from
[here](http://www.apache.org/dist/httpd/binaries/netware).

[![top](../images/up.gif)](#page-header)

## Installing Apache for NetWare [¶](#inst "Permanent link")

There is no Apache install program for NetWare currently. If you
are building Apache 2.0 for NetWare from source, you will need to
copy the files over to the server manually.

Follow these steps to install Apache on NetWare from the
binary download (assuming you will install to
`sys:/apache2`):

- Unzip the binary download file to the root of the `SYS:`
  volume (may be installed to any volume)
- Edit the `httpd.conf` file setting `ServerRoot` and `ServerName` along with any file path values
  to reflect your correct server settings
- Add `SYS:/APACHE2` to the search path, for example:

  `SEARCH ADD SYS:\APACHE2`

Follow these steps to install Apache on NetWare manually
from your own build source (assuming you will install to
`sys:/apache2`):

- Create a directory called `Apache2` on a
  NetWare volume
- Copy `APACHE2.NLM`, `APRLIB.NLM`
  to `SYS:/APACHE2`
- Create a directory under `SYS:/APACHE2`
  called `BIN`
- Copy `HTDIGEST.NLM`, `HTPASSWD.NLM`,
  `HTDBM.NLM`, `LOGRES.NLM`, `ROTLOGS.NLM`
  to `SYS:/APACHE2/BIN`
- Create a directory under `SYS:/APACHE2`
  called `CONF`
- Copy the `HTTPD-STD.CONF` file to the
  `SYS:/APACHE2/CONF` directory and rename to
  `HTTPD.CONF`
- Copy the `MIME.TYPES`, `CHARSET.CONV` and
  `MAGIC` files to `SYS:/APACHE2/CONF` directory
- Copy all files and subdirectories in `\HTTPD-2.0\DOCS\ICONS`
  to `SYS:/APACHE2/ICONS`
- Copy all files and subdirectories in `\HTTPD-2.0\DOCS\MANUAL`
  to `SYS:/APACHE2/MANUAL`
- Copy all files and subdirectories in `\HTTPD-2.0\DOCS\ERROR`
  to `SYS:/APACHE2/ERROR`
- Copy all files and subdirectories in `\HTTPD-2.0\DOCS\DOCROOT`
  to `SYS:/APACHE2/HTDOCS`
- Create the directory `SYS:/APACHE2/LOGS`
  on the server
- Create the directory `SYS:/APACHE2/CGI-BIN`
  on the server
- Create the directory `SYS:/APACHE2/MODULES`
  and copy all nlm modules into the `modules` directory
- Edit the `HTTPD.CONF` file searching for all
  `@@Value@@` markers and replacing them with the
  appropriate setting
- Add `SYS:/APACHE2` to the search path, for example:

  `SEARCH ADD SYS:\APACHE2`

Apache may be installed to other volumes besides the default `SYS` volume.

During the build process, adding the keyword "install" to the makefile command line
will automatically produce a complete distribution package under the subdirectory
`DIST`. Install Apache by simply copying the distribution that was produced
by the makefiles to the root of a NetWare volume (see: [Compiling Apache for
NetWare](#comp) below).

[![top](../images/up.gif)](#page-header)

## Running Apache for NetWare [¶](#run "Permanent link")

To start Apache just type `apache` at the
console. This will load apache in the OS address space. If you
prefer to load Apache in a protected address space you may
specify the address space with the load statement as follows:

`load address space = apache2 apache2`

This will load Apache into an address space called apache2.
Running multiple instances of Apache concurrently on NetWare is
possible by loading each instance into its own protected
address space.

After starting Apache, it will be listening to port 80
(unless you changed the `Listen`
directive in the configuration files).
To connect to the server and access the default page,
launch a browser and enter the server's name or address. This
should respond with a welcome page, and a link to the Apache
manual. If nothing happens or you get an error, look in the
`error_log` file in the `logs`
directory.

Once your basic installation is working, you should
configure it properly by editing the files in the
`conf` directory.

To unload Apache running in the OS address space just type
the following at the console:

`unload apache2`

or

`apache2 shutdown`

If apache is running in a protected address space specify the
address space in the unload statement:

`unload address space = apache2 apache2`

When working with Apache it is important to know how it will
find the configuration files. You can specify a configuration
file on the command line in two ways:

- `-f` specifies a path to a particular
  configuration file

`apache2 -f "vol:/my server/conf/my.conf"`

`apache -f test/test.conf`

In these cases, the proper `ServerRoot`
should be set in the configuration file.

If you don't specify a configuration file name with `-f`,
Apache will use the file name compiled into the server, usually
`conf/httpd.conf`. Invoking Apache with the `-V`
switch will display this value labeled as `SERVER_CONFIG_FILE`.
Apache will then determine its `ServerRoot`
by trying the following, in this order:

- A `ServerRoot` directive via a
  `-C` switch.
- The `-d` switch on the command line.
- Current working directory
- The server root compiled into the server.

The server root compiled into the server is usually `sys:/apache2`.
invoking apache with the `-V` switch will display this value labeled as
`HTTPD_ROOT`.

Apache 2.0 for NetWare includes a set of command line directives that can
be used to modify or display information about the running instance of the
web server. These directives are only available while Apache is running. Each
of these directives must be preceded by the keyword `APACHE2`.

RESTART
:   Instructs Apache to terminate all running worker
    threads as they become idle, reread the configuration file and restart each
    worker thread based on the new configuration.

VERSION
:   Displays version information about the currently
    running instance of Apache.

MODULES
:   Displays a list of loaded modules both built-in
    and external.

DIRECTIVES
:   Displays a list of all available directives.

SETTINGS
:   Enables or disables the thread status display
    on the console. When enabled, the state of each running threads is displayed
    on the Apache console screen.

SHUTDOWN
:   Terminates the running instance of the Apache
    web server.

HELP
:   Describes each of the runtime directives.

By default these directives are issued against the instance of Apache running
in the OS address space. To issue a directive against a specific instance running
in a protected address space, include the -p parameter along with the name of the
address space. For more information type "apache2 Help" on the command line.

[![top](../images/up.gif)](#page-header)

## Configuring Apache for NetWare [¶](#use "Permanent link")

Apache is configured by reading configuration files usually stored
in the `conf` directory. These are the same as files used
to configure the Unix version, but there are a few different directives for
Apache on NetWare. See the [Apache module
documentation](mod.md) for all the available directives.

The main differences in Apache for NetWare are:

- Because Apache for NetWare is multithreaded, it does not
  use a separate process for each request, as Apache does on some Unix
  implementations. Instead there are only threads running: a parent
  thread, and multiple child or worker threads which handle the requests.

  Therefore the "process"-management directives are different:

  `MaxConnectionsPerChild` -
  Like the Unix directive, this controls how many connections
  a worker thread will serve before exiting. The recommended default,
  `MaxConnectionsPerChild 0`, causes the thread to continue servicing
  request indefinitely. It is recommended on NetWare, unless there is some
  specific reason, that this directive always remain set to `0`.

  `StartThreads` -
  This directive tells the server how many threads it should start initially.
  The recommended default is `StartThreads 50`.

  `MinSpareThreads` -
  This directive instructs the server to spawn additional worker threads
  if the number of idle threads ever falls below this value. The recommended
  default is `MinSpareThreads 10`.

  `MaxSpareThreads` -
  This directive instructs the server to begin terminating worker threads
  if the number of idle threads ever exceeds this value. The recommended
  default is `MaxSpareThreads 100`.

  `MaxThreads` -
  This directive limits the total number of work threads to a maximum
  value. The recommended default is `ThreadsPerChild 250`.

  `ThreadStackSize` -
  This directive tells the server what size of stack to use
  for the individual worker thread. The recommended default
  is `ThreadStackSize 65536`.
- The directives that accept filenames as arguments must use
  NetWare filenames instead of Unix names. However, because Apache
  uses Unix-style names internally, forward slashes must be used
  rather than backslashes. It is recommended that all rooted file paths
  begin with a volume name. If omitted, Apache will assume the
  `SYS:` volume which may not be correct.
- Apache for NetWare has the ability to load modules at
  runtime, without recompiling the server. If Apache is
  compiled normally, it will install a number of optional
  modules in the `\Apache2\modules` directory.
  To activate these, or other modules, the `LoadModule` directive
  must be used. For example, to active the status module, use
  the following:

  `LoadModule status_module modules/status.nlm`

  Information on [creating loadable
  modules](mod__mod_so.md#creating) is also available.

### Additional NetWare specific directives:

- `CGIMapExtension` -
  This directive maps a CGI file extension to a script interpreter.

- `SecureListen` -
  Enables SSL encryption for a specified port.

- `NWSSLTrustedCerts` -
  Adds trusted certificates that are used to create secure connections to proxied servers.

- `NWSSLUpgradeable` -
  Allow a connection created on the specified address/port to be upgraded to an SSL connection.

[![top](../images/up.gif)](#page-header)

## Compiling Apache for NetWare [¶](#comp "Permanent link")

Compiling Apache requires MetroWerks CodeWarrior 6.x or higher. Once
Apache has been built, it can be installed to the root of any NetWare
volume. The default is the `sys:/Apache2` directory.

Before running the server you must fill out the `conf`
directory. Copy the file `HTTPD-STD.CONF` from the distribution
`conf` directory and rename it to `HTTPD.CONF`.
Edit the `HTTPD.CONF` file searching for all `@@Value@@`
markers and replacing them with the appropriate setting. Copy over
the `conf/magic` and `conf/mime.types` files as well.
Alternatively, a complete distribution can be built by including the keyword
`install` when invoking the makefiles.

### Requirements:

The following development tools are required to build
Apache 2.0 for NetWare:

- Metrowerks CodeWarrior 6.0 or higher with the
  NetWare PDK 3.0 (formerly at `http://developer.novell.com/ndk/cwpdk.htm`)
  or higher.
- NetWare Libraries
  for C (LibC) (formerly at `http://developer.novell.com/ndk/libc.htm`)
- LDAP Libraries
  for C (formerly at `http://developer.novell.com/ndk/cldap.htm`)
- [ZLIB Compression Library source code](http://www.gzip.org/zlib/)
- AWK utility (awk, gawk or similar). AWK can be downloaded from
  `http://developer.novell.com/ndk/apache.htm`.
  The utility must be found in your windows path and must be named `awk.exe`.
- To build using the makefiles, you will need GNU make version 3.78.1 (GMake) available at
  `http://developer.novell.com/ndk/apache.htm`.

### Building Apache using the NetWare makefiles:

- Set the environment variable `NOVELLLIBC` to the
  location of the NetWare Libraries for C SDK, for example:

  `Set NOVELLLIBC=c:\novell\ndk\libc`
- Set the environment variable `METROWERKS` to the
  location where you installed the Metrowerks CodeWarrior compiler,
  for example:

  `Set METROWERKS=C:\Program Files\Metrowerks\CodeWarrior`

  If you installed to the default location `C:\Program
  Files\Metrowerks\CodeWarrior`, you don't need to set this.
- Set the environment variable `LDAPSDK` to the
  location where you installed the LDAP Libraries for C, for example:

  `Set LDAPSDK=c:\Novell\NDK\cldapsdk\NetWare\libc`
- Set the environment variable `ZLIBSDK` to the
  location where you installed the source code for the ZLib Library,
  for example:

  `Set ZLIBSDK=D:\NOVELL\zlib`
- Set the environment variable `PCRESDK` to the location
  where you installed the source code for the PCRE Library, for example:

  `Set PCRESDK=D:\NOVELL\pcre`
- Set the environment variable `AP_WORK` to the full path of
  the `httpd` source code directory.

  `Set AP_WORK=D:\httpd-2.0.x`
- Set the environment variable `APR_WORK` to the full path of
  the `apr` source code directory. Typically `\httpd\srclib\apr`
  but the APR project can be outside of the httpd directory structure.

  `Set APR_WORK=D:\apr-1.x.x`
- Set the environment variable `APU_WORK` to the full path of
  the `apr-util` source code directory. Typically `\httpd\srclib\apr-util`
  but the APR-UTIL project can be outside of the httpd directory structure.

  `Set APU_WORK=D:\apr-util-1.x.x`
- Make sure that the path to the AWK utility and the GNU make utility
  (`gmake.exe`) have been included in the system's
  `PATH` environment variable.
- Download the source code and unzip to an appropriate directory on
  your workstation.
- Change directory to `\httpd-2.0` and build the prebuild utilities
  by running "`gmake -f nwgnumakefile prebuild`". This target will create
  the directory `\httpd-2.0\nwprebuild` and copy each of the utilities
  to this location that are necessary to complete the following build steps.
- Copy the files `\httpd-2.0\nwprebuild\GENCHARS.nlm` and
  `\httpd-2.0\nwprebuild\DFTABLES.nlm` to the `SYS:` volume of a
  NetWare server and run them using the following commands:

  `SYS:\genchars > sys:\test_char.h  
  SYS:\dftables sys:\chartables.c`
- Copy the files `test_char.h` and `chartables.c`
  to the directory `\httpd-2.0\os\netware` on the build machine.
- Change directory to `\httpd-2.0` and build Apache by running
  "`gmake -f nwgnumakefile`". You can create a distribution directory by
  adding an install parameter to the command, for example:

  `gmake -f nwgnumakefile install`

### Additional make options

- `gmake -f nwgnumakefile`

  Builds release versions of all of the
  binaries and copies them to a `\release` destination directory.
- `gmake -f nwgnumakefile DEBUG=1`

  Builds debug versions of all of the
  binaries and copies them to a `\debug` destination directory.
- `gmake -f nwgnumakefile install`

  Creates a complete Apache
  distribution with binaries, docs and additional support files in a
  `\dist\Apache2` directory.
- `gmake -f nwgnumakefile prebuild`

  Builds all of the prebuild utilities
  and copies them to the `\nwprebuild` directory.
- `gmake -f nwgnumakefile installdev`

  Same as install but also creates a
  `\lib` and `\include` directory in the destination directory
  and copies headers and import files.
- `gmake -f nwgnumakefile clean`

  Cleans all object files and binaries
  from the `\release.o` or `\debug.o` build areas depending on whether
  `DEBUG` has been defined.
- `gmake -f nwgnumakefile clobber_all`

  Same as clean and also deletes
  the distribution directory if it exists.

### Additional environment variable options

- To build all of the experimental modules, set the environment
  variable `EXPERIMENTAL`:

  `Set EXPERIMENTAL=1`
- To build Apache using standard BSD style sockets rather than
  Winsock, set the environment variable `USE_STDSOCKETS`:

  `Set USE_STDSOCKETS=1`

### Building mod\_ssl for the NetWare platform

By default Apache for NetWare uses the built-in module
`mod_nw_ssl` to provide SSL services. This module
simply enables the native SSL services implemented in NetWare OS
to handle all encryption for a given port. Alternatively, mod\_ssl
can also be used in the same manner as on other platforms.

Before mod\_ssl can be built for the NetWare platform, the OpenSSL
libraries must be provided. This can be done through the following
steps:

- Download the recent OpenSSL 0.9.8 release source code from the
  [OpenSSL Source](http://www.openssl.org/source/)
  page (older 0.9.7 versions need to be patched and are therefore not
  recommended).
- Edit the file `NetWare/set_env.bat` and modify any
  tools and utilities paths so that they correspond to your build
  environment.
- From the root of the OpenSSL source directory, run the following
  scripts:

  `Netware\set_env netware-libc  
  Netware\build netware-libc`

  For performance reasons you should enable to build with ASM code.
  Download NASM from the [SF site](http://nasm.sourceforge.net/).
  Then configure OpenSSL to use ASM code:

  `Netware\build netware-libc nw-nasm enable-mdc2 enable-md5`

  Warning: don't use the CodeWarrior Assembler - it produces broken code!
- Before building Apache, set the environment variable
  `OSSLSDK` to the full path to the root of the openssl
  source code directory, and set WITH\_MOD\_SSL to 1.

  `Set OSSLSDK=d:\openssl-0.9.8x  
  Set WITH_MOD_SSL=1`

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/platform/netware.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/platform/netware.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/platform/netware.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
