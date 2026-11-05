# configure - Configure the source tree - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/programs/configure.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Programs](programs.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/programs/configure.html) to go to the current version of this document.

# configure - Configure the source tree

The `configure` script configures the source tree
for compiling and installing the Apache HTTP Server on your
particular platform. Various options allow the compilation of a
server corresponding to your personal requirements.

This script, included in the root directory of the source
distribution, is for compilation on Unix and Unix-like systems
only. For other platforms, see the [platform](platform.md) documentation.

- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)
- ![](../images/down.gif) [Environment variables](#env)

### See also

- [Compiling and Installing](install.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Synopsis

You should call the `configure` script from within the
root directory of the distribution.

`./configure [OPTION]...
[VAR=VALUE]...`

To assign environment variables (e.g. `CC`,
`CFLAGS` ...), specify them as
`VAR=VALUE`. See [below](#env)
for descriptions of some of the useful variables.

[![top](../images/up.gif)](#page-header)

## Options

- [Configuration options](#configurationoptions)
- [Installation directories](#installationdirectories)
- [System types](#systemtypes)
- [Optional features](#optionalfeatures)
- [Options for support programs](#supportopt)

### Configuration options

The following options influence the behavior of
`configure` itself.

`-C`

`--config-cache`
:   This is an alias for `--cache-file=config.cache`

`--cache-file=FILE`
:   The test results will be cached in file FILE.
    This option is disabled by default.

`-h`

`--help [short|recursive]`
:   Output the help and exit. With the argument `short` only
    options specific to this package will displayed. The argument
    `recursive` displays the short help of all the included
    packages.

`-n`

`--no-create`
:   The `configure` script is run normally but does
    not create output files. This is useful to check the test results
    before generating makefiles for compilation.

`-q`

`--quiet`
:   Do not print `checking ...` messages during the
    configure process.

`--srcdir=DIR`
:   Defines directory DIR to be the source file directory.
    Default is the directory where `configure` is located, or
    the parent directory.

`--silent`
:   Same as `--quiet`

-V

--version
:   Display copyright information and exit.

### Installation directories

These options define the installation directory. The installation
tree depends on the selected layout.

`--prefix=PREFIX`
:   Install architecture-independent files in PREFIX.
    By default the installation directory is set to
    `/usr/local/apache2`.

`--exec-prefix=EPREFIX`
:   Install architecture-dependent files in EPREFIX.
    By default the installation directory is set to the
    PREFIX directory.

By default, `make install` will install all the files in
`/usr/local/apache2/bin`, `/usr/local/apache2/lib`
etc. You can specify an installation prefix other than
`/usr/local/apache2` using `--prefix`,
for instance `--prefix=$HOME`.

#### Define a directory layout

`--enable-layout=LAYOUT`
:   Configure the source code and build scripts to assume an
    installation tree based on the layout LAYOUT. This allows
    you to separately specify the locations for each type of file within
    the Apache HTTP Server installation. The `config.layout`
    file contains several example configurations, and you can also create
    your own custom configuration following the examples. The different
    layouts in this file are grouped into `<Layout
    FOO>...</Layout>` sections and referred to by name as
    in `FOO`. The default layout is `Apache`.

#### Fine tuning of the installation directories

For better control of the installation directories, use the options
below. Please note that the directory defaults are set by
`autoconf` and are overwritten by the corresponding layout
setting.

`--bindir=DIR`
:   Install user executables in DIR. The user executables
    are supporting programs like `htpasswd`,
    `dbmmanage`, etc. which are useful for site
    administrators. By default DIR is set to
    `EPREFIX/bin`.

`--datadir=DIR`
:   Install read-only architecture-independent data in DIR.
    By default `datadir` is set to
    `PREFIX/share`. This option is offered by
    `autoconf` and currently unused.

`--includedir=DIR`
:   Install C header files in DIR. By default
    `includedir` is set to
    `EPREFIX/include`.

`--infodir=DIR`
:   Install info documentation in DIR.
    By default `infodir` is set to
    `PREFIX/info`. This option is currently
    unused.

`--libdir=DIR`
:   Install object code libraries in DIR. By default
    `libdir` is set to
    `EPREFIX/lib`.

`--libexecdir=DIR`
:   Install the program executables (i.e., shared modules) in
    DIR. By default `libexecdir` is set to
    `EPREFIX/modules`.

`--localstatedir=DIR`
:   Install modifiable single-machine data in DIR.
    By default `localstatedir` is set to
    `PREFIX/var`. This option is offered by
    `autoconf` and currently unused.

`--mandir=DIR`
:   Install the man documentation in DIR. By default
    `mandir` is set to
    `EPREFIX/man`.

`--oldincludedir=DIR`
:   Install C header files for non-gcc in DIR.
    By default `oldincludedir` is set to
    `/usr/include`. This option is offered by
    `autoconf` and currently unused.

`--sbindir=DIR`
:   Install the system administrator executables in DIR.
    Those are server programs like `httpd`,
    `apachectl`, `suexec`, etc. which
    are neccessary to run the Apache HTTP Server. By default
    `sbindir` is set to
    `EPREFIX/sbin`.

`--sharedstatedir=DIR`
:   Install modifiable architecture-independent data in DIR.
    By default `sharedstatedir` is set to
    `PREFIX/com`. This option is offered by
    `autoconf` and currently unused.

`--sysconfdir=DIR`
:   Install read-only single-machine data like the server configuration
    files `httpd.conf`, `mime.types`, etc. in
    DIR. By default `sysconfdir` is set to
    `PREFIX/conf`.

### System types

These options are used to cross-compile the Apache HTTP Server to run on
another system. In normal cases, when building and running the server on
the same system, these options are not used.

`--build=BUILD`
:   Defines the system type of the system on which the tools are being
    built. It defaults to the result of the script
    `config.guess`.

`--host=HOST`
:   Defines the system type of the system on which the server will run.
    HOST defaults to BUILD.

`--target=TARGET`
:   Configure for building compilers for the system type
    TARGET. It defaults to HOST. This option is
    offered by `autoconf` and not necessary for the Apache HTTP
    Server.

### Optional Features

These options are used to fine tune the features your HTTP server will
have.

#### General syntax

Generally you can use the following syntax to enable or disable a
feature:

`--disable-FEATURE`
:   Do not include FEATURE. This is the same as
    `--enable-FEATURE=no`.

`--enable-FEATURE[=ARG]`
:   Include FEATURE. The default value for ARG
    is `yes`.

`--enable-MODULE=shared`
:   The corresponding module will be build as DSO module.

`--enable-MODULE=static`
:   By default enabled modules are linked statically. You can force
    this explicitly.

### Note

`configure` will not complain about
`--enable-foo` even if foo doesn't
exist, so you need to type carefully.

#### Modules enabled by default

Some modules are compiled by default and have to be disabled
explicitly. Use the following options to remove discrete modules from
the compilation process.

`--disable-actions`
:   Disable action triggering on requests, which is provided by
    `mod_actions`.

`--disable-alias`
:   Disable the mapping of requests to different parts of the
    filesystem, which is provided by `mod_alias`.

`--disable-asis`
:   Disable support for as-is filetypes, which is provided by
    `mod_asis`.

`--disable-auth-basic`
:   Disable user-based access control provided by
    `mod_auth_basic`. This module provides for HTTP Basic
    Authentication, where the usernames and passwords are stored in
    plain text files.

`--disable-autoindex`
:   Disable the directory listing functionality provided by
    `mod_autoindex`.

`--disable-cgi`
:   `mod_cgi`, which provides support for CGI scripts,
    is enabled by default when using a non-threaded MPM. Use this
    option to disable CGI support.

`--disable-cgid`
:   When using the threaded MPMs `worker`
    support for CGI scripts is provided by
    `mod_cgid` by default. To disable CGI support use
    this option.

`--disable-charset-lite`
:   Disable character set translation provided by
    `mod_charset_lite`. This module will be installed by
    default only on EBCDIC systems.

`--disable-dir`
:   Disable directory request handling provided by
    `mod_dir`.

`--disable-env`
:   Enable setting and clearing of environment variables, which is
    provided by `mod_env`.

`--disable-http`
:   Disable the HTTP protocol handling. The `http`
    module is a basic one, enabling the server to function as an
    HTTP server. It is only useful to disable it if you want to use
    another protocol module instead. **Don't disable this
    module unless you are really sure what you are doing.**
      
    Note: This module will always be linked statically.

`--disable-imagemap`
:   Disable support for server based imagemaps, which provided by
    `mod_imagemap`.

`--disable-include`
:   Disable Server Side Includes provided by
    `mod_include`.

`--disable-log-config`
:   Disable the logging configuration provided by
    `mod_log_config`. You won't be able to log requests
    to the server without this module.

`--disable-mime`
:   `mod_mime` associates the requested
    filename's extensions with the file's behavior and content
    ([mime-type](glossary.md#mime-type "see glossary"), language, character set and
    encoding). Disabling this module is normally not recommended.

`--disable-negotiation`
:   Disable content negotiation provided by
    `mod_negotiation`.

`--disable-setenvif`
:   Disable support for basing environment variables on headers,
    which is provided by `mod_setenvif`.

`--disable-status`
:   Enable the process/thread monitoring, which is provided by
    `mod_status`.

`--disable-userdir`
:   Disable the mapping of requests to user-specific directories,
    which is provided by `mod_userdir`.

#### Modules, disabled by default

Some modules are compiled by default and have to be enabled
explicitly or by using the keywords `most` or
`all` (see `--enable-mods-shared` below for
further explanation) to be available. Therefore use the options
below.

`--enable-authn-anon`
:   Enable anonymous user access provided by
    `mod_authn_anon`.

`--enable-authn-dbm`
:   `mod_authn_dbm` provides for HTTP Basic
    Authentication, where the usernames and passwords are stored in DBM
    type database files. Use this option to enable the module.

`--enable-authz-dbm`
:   `mod_authz_dbm` provides for HTTP Basic
    Authorization, where the usernames and groups are stored in DBM
    type database files. Use this option to enable the module.

`--enable-auth-digest`
:   Enable RFC2617 Digest authentication provided by
    `mod_auth_digest`. This module uses plain text files
    to store the credentials.

`--enable-authnz-ldap`
:   Enable LDAP based authentication provided by
    `mod_authnz_ldap`.

`--enable-cache`
:   Enable dynamic file caching provided by
    `mod_cache`. This experimental module may be
    interesting for servers with high load or caching proxy servers. At
    least one storage management module (e.g.
    `mod_disk_cache` or `mod_mem_cache`)
    is also necessary.

`--enable-cern-meta`
:   Enable the CERN-type meta files support provided by
    `mod_cern_meta`.

`--enable-charset-lite`
:   Enable character set translation provided by
    `mod_charset_lite`. This module will be installed by
    default only on EBCDIC systems. On other systems, you have to enable
    it.

`--enable-dav`
:   Enable the WebDAV protocol handling provided by
    `mod_dav`. Support for filesystem resources is
    provided by the separate module `mod_dav_fs`. This
    module is also automatically enabled with
    `--enable-dav`.  
    Note: `mod_dav` can only be used together with the
    `http` protocol module.

`--enable-dav-fs`
:   Enable DAV support for filesystem resources, which is provided by
    `mod_dav_fs`. This module is a provider for the
    `mod_dav` module, so you should also use
    `--enable-dav`.

`--enable-dav-lock`
:   Enable `mod_dav_lock` which provides generic DAV
    locking support for backend modules. This module needs at least
    `mod_dav` to function, so you should also use
    `--enable-dav`.

`--enable-deflate`
:   Enable deflate transfer encoding provided by
    `mod_deflate`.

`--enable-disk-cache`
:   Enable disk caching provided by
    `mod_disk_cache`.

`--enable-expires`
:   Enable `Expires` header control provided by
    `mod_expires`.

`--enable-ext-filter`
:   Enable the external filter support provided by
    `mod_ext_filter`.

`--enable-file-cache`
:   Enable the file cache provided by
    `mod_file_cache`.

`--enable-headers`
:   Enable control of HTTP headers provided by
    `mod_headers`.

`--enable-info`
:   Enable the server information provided by
    `mod_info`.

`--enable-ldap`
:   Enable LDAP caching and connection pooling services provided by
    `mod_ldap`.

`--enable-logio`
:   Enable logging of input and output bytes including headers provided
    by `mod_logio`.

`--enable-mem-cache`
:   Enable memory caching provided by
    `mod_mem_cache`.

`--enable-mime-magic`
:   Enable
    automatical determining of [MIME
    types](glossary.md#mime-type "see glossary"), which is provided by
    `mod_mime_magic`.

`--enable-isapi`
:   Enable the isapi extension support provided by
    `mod_isapi`.

`--enable-proxy`
:   Enable the proxy/gateway functionality provided by
    `mod_proxy`. The proxying capabilities for
    `AJP13`, `CONNECT`, `FTP`,
    `HTTP` and the balancer are provided by the separate
    modules `mod_proxy_ajp`,
    `mod_proxy_connect`, `mod_proxy_ftp`,
    `mod_proxy_http` and
    `mod_proxy_balancer`.
    These five modules are also automatically enabled with
    `--enable-proxy`.

`--enable-proxy-ajp`
:   Enable proxy support for `AJP13 (Apache JServ Protocol 1.3)`
    request handling, which is provided by `mod_proxy_ajp`.
    This module is an extension for the `mod_proxy` module,
    so you should also use `--enable-proxy`.

`--enable-proxy-balancer`
:   Enable load balancing support for the `AJP13`,
    `FTP` and `HTTP` protocols, which is provided by
    `mod_proxy_balancer`. This module is an extension for the
    `mod_proxy` module, so you should also use
    `--enable-proxy`.

`--enable-proxy-connect`
:   Enable proxy support for `CONNECT` request handling,
    which is provided by `mod_proxy_connect`. This module
    is an extension for the `mod_proxy` module, so you
    should also use `--enable-proxy`.

`--enable-proxy-ftp`
:   Enable proxy support for `FTP` requests, which is
    provided by `mod_proxy_ftp`. This module
    is an extension for the `mod_proxy` module, so you
    should also use `--enable-proxy`.

`--enable-proxy-http`
:   Enable proxy support for `HTTP` requests, which is
    provided by `mod_proxy_http`. This module
    is an extension for the `mod_proxy` module, so you
    should also use `--enable-proxy`.

`--enable-rewrite`
:   Enable rule based URL manipulation provided by
    `mod_rewrite`.

`--enable-so`
:   Enable DSO capability provided by `mod_so`. This
    module will be automatically enabled if you use the
    `--enable-mods-shared` option.

`--enable-speling`
:   Enable the functionality to correct common URL misspellings, which
    is provided by `mod_speling`.

`--enable-ssl`
:   Enable support for SSL/TLS provided by
    `mod_ssl`.

`--enable-unique-id`
:   Enable the generation of per-request unique ids, which is provided
    by `mod_unique_id`.

`--enable-usertrack`
:   Enable user-session tracking provided by
    `mod_usertrack`.

`--enable-vhost-alias`
:   Enable mass virtual hosting provided by
    `mod_vhost_alias`.

#### Modules for developers

The following modules are useful only for developers and testing
purposes and are disabled by default. Use the following options to
enable them. If you are not sure whether you need one of these
modules, omit them.

`--enable-bucketeer`
:   Enable the manipulation filter for buckets, which is provided by
    `mod_bucketeer`.

`--enable-case-filter`
:   Enable the example uppercase conversion output filter support of
    `mod_case_filter`.

`--enable-case-filter-in`
:   Enable the example uppercase conversion input filter support of
    `mod_case_filter_in`.

`--enable-echo`
:   Enable the ECHO server provided by
    `mod_echo`.

`--enable-example`
:   Enable the example and demo module
    `mod_example`.

`--enable-optional-fn-export`
:   Enable the example for an optional function exporter, which is
    provided by `mod_optional_fn_export`.

`--enable-optional-fn-import`
:   Enable the example for an optional function importer, which is
    provided by `mod_optional_fn_import`.

`--enable-optional-hook-export`
:   Enable the example for an optional hook exporter, which is provided
    by `mod_optional_hook_export`.

`--enable-optional-hook-import`
:   Enable the example optional hook importer, which is provided by
    `mod_optional_hook_import`.

#### MPMs and third-party modules

To add the necessary Multi Processing Module and additional third-party
modules use the following options:

`--with-module=module-type:module-file[, module-type:module-file]`
:   Add one or more third-party modules to the list of statically linked
    modules. The module source file `module-file`
    will be searched in the `modules/module-type`
    subdirectory of your Apache HTTP server source tree. If it is not found
    there `configure` is considering module-file to be
    an absolute file path and tries to copy the source file into the
    module-type subdirectory. If the subdirectory doesn't
    exist it will be created and populated with a standard
    `Makefile.in`.

    This option is useful to add small external modules consisting of
    one source file. For more complex modules you should read the
    vendor's documentation.

    ### Note

    If you want to build a DSO module instead of a statically linked
    use `apxs`.

`--with-mpm=MPM`
:   Choose the process model for your server. You have to select
    exactly one [Multi-Processing Module](mpm.md).
    Otherwise the [default MPM](mpm.md#defaults) for
    your operating system will be taken. Possible MPMs are
    `beos`,
    `mpmt_os2`,
    `prefork`, and
    `worker`.

#### Cumulative and other options

`--enable-maintainer-mode`
:   Turn on debugging and compile time warnings.

`--enable-mods-shared=MODULE-LIST`
:   Defines a list of modules to be enabled and build as dynamic
    shared modules. This mean, these module have to be loaded
    dynamically by using the `LoadModule` directive.

    MODULE-LIST is a space separated list of modulenames
    enclosed by quotation marks. The module names are given without the
    preceding `mod_`. For example:

    `--enable-mods-shared='headers rewrite dav'`

    Additionally you can use the special keywords `all` and
    `most`. For example,

    `--enable-mods-shared=most`

    will compile most modules and build them as DSO modules.

    **Caveat:**
    `--enable-mods-shared=all` does not actually build all
    modules. To build all modules then, one might use:

    `./configure \  

    --with-ldap \  
    --enable-mods-shared="all ssl ldap cache proxy authn_alias mem_cache file_cache authnz_ldap charset_lite dav_lock disk_cache"`

`--enable-modules=MODULE-LIST`
:   This option behaves similar to `--enable-mods-shared`,
    but will link the given modules statically. This mean, these modules
    will always be present while running `httpd`. They need
    not be loaded with `LoadModule`.

`--enable-v4-mapped`
:   Allow IPv6 sockets to handle IPv4 connections.

`--with-port=PORT`
:   This defines the port on which `httpd` will listen.
    This port number is used when generating the configuration file
    `httpd.conf`. The default is 80.

`--with-program-name`
:   Define an alternative executable name. The default is
    `httpd`.

### Optional packages

These options are used to define optional packages.

#### General syntax

Generally you can use the following syntax to define an optional
package:

`--with-PACKAGE[=ARG]`
:   Use the package PACKAGE. The default value for
    ARG is `yes`.

`--without-PACKAGE`
:   Do not use the package PACKAGE. This is the same as
    `--with-PACKAGE=no`. This option is provided by
    `autoconf` but not very useful for the Apache HTTP
    Server.

#### Specific packages

`--with-apr=DIR|FILE`
:   The [Apache Portable Runtime](glossary.md#apr "see glossary") (APR)
    is part of the httpd
    source distribution and will automatically be build together with the
    HTTP server. If you want to use an already installed APR instead you
    have to tell `configure` the path to the
    `apr-config` script. You may set the absolute path and name
    or the directory to the installed APR. `apr-config` must
    exist within this directory or the subdirectory
    `bin`.

`--with-apr-util=DIR|FILE`
:   The Apache Portable Runtime Utilities (APU) are part of the
    httpd source distribution and will automatically be build
    together with the HTTP server. If you want to use an already installed
    APU instead you have to tell `configure` the path to the
    `apu-config` script. You may set the absolute path and name
    or the directory to the installed APU. `apu-config` must
    exist within this directory or the subdirectory
    `bin`.

`--with-ssl=DIR`
:   If `mod_ssl` has been enabled `configure`
    searches for an installed OpenSSL. You can set the directory path
    to the SSL/TLS toolkit instead.

`--with-z=DIR`
:   `configure` searches automatically for an installed
    `zlib` library if your source configuration requires one
    (e.g., when `mod_deflate` is enabled). You can set the
    directory path to the compression library instead.

Several features of the Apache HTTP Server, including
`mod_authn_dbm`, `mod_authz_dbm`, and
`mod_rewrite`'s DBM
`RewriteMap` use simple
key/value databases for quick lookups of information. SDBM is included
in the APU, so this database is always available. If you would like to
use other database types, use the following options to enable
them:

`--with-gdbm[=path]`
:   If no path is specified, `configure` will
    search for the include files and libraries of a GNU DBM
    installation in the usual search paths. An explicit
    path will cause `configure` to look in
    `path/lib` and
    `path/include` for the relevant files.
    Finally, the path may specify specific include and
    library paths separated by a colon.

`--with-ndbm[=path]`
:   Like `--with-gdbm`, but searches for a New DBM
    installation.

`--with-berkeley-db[=path]`
:   Like `--with-gdbm`, but searches for a Berkeley DB
    installation.

### Note

The DBM options are provided by the APU and passed through to its
configuration script. They are useless when using an already
installed APU defined by `--with-apr-util`.

You may use more then one DBM implementation together with your
HTTP server. The appropriated DBM type will be configured within
the runtime configuration at each time.

### Options for support programs

`--enable-static-support`
:   Build a statically linked version of the support binaries. This
    means, a stand-alone executable will be built with all the necessary
    libraries integrated. Otherwise the support binaries are linked
    dynamically by default.

`--enable-suexec`
:   Use this option to enable `suexec`, which allows you to set
    uid and gid for spawned processes. **Do not use this
    option unless you understand all the security implications of
    running a suid binary on your server.** Further options
    to configure `suexec` are described [below](#suexec).

It is possible to create a statically linked binary of a single
support program by using the following options:

`--enable-static-ab`
:   Build a statically linked version of `ab`.

`--enable-static-checkgid`
:   Build a statically linked version of `checkgid`.

`--enable-static-htdbm`
:   Build a statically linked version of `htdbm`.

`--enable-static-htdigest`
:   Build a statically linked version of `htdigest`.

`--enable-static-htpasswd`
:   Build a statically linked version of `htpasswd`.

`--enable-static-logresolve`
:   Build a statically linked version of `logresolve`.

`--enable-static-rotatelogs`
:   Build a statically linked version of `rotatelogs`.

#### `suexec` configuration options

The following options are used to fine tune the behavior of `suexec`. See [Configuring and installing suEXEC](programs__suexec.md#install)
for further information.

`--with-suexec-bin`
:   This defines the path to `suexec` binary.
    Default is `--sbindir` (see [Fine tuning of installation
    directories](#directoryfinetuning)).

`--with-suexec-caller`
:   This defines the user allowed to call `suexec`.
    It should be the same as the user under which
    `httpd` normally runs.

`--with-suexec-docroot`
:   This defines the directory tree under which `suexec` access is allowed for executables. Default value is
    `--datadir/htdocs`.

`--with-suexec-gidmin`
:   Define this as the lowest GID allowed to be a target user for
    `suexec`. The default value is 100.

`--with-suexec-logfile`
:   This defines the filename of the `suexec` logfile.
    By default the logfile is named `suexec_log` and located in
    `--logfiledir`.

`--with-suexec-safepath`
:   Define the value of the environment variable `PATH` to
    be set for processes started by `suexec`. Default
    value is `/usr/local/bin:/usr/bin:/bin`.

`--with-suexec-userdir`
:   This defines the subdirectory under the user's directory that
    contains all executables for which `suexec` access
    is allowed. This setting is necessary when you want to use
    `suexec` together with user-specific directories (as
    provided by `mod_userdir`). The default is
    `public_html`.

`--with-suexec-uidmin`
:   Define this as the lowest UID allowed to be a target user for
    `suexec`. The default value is 100.

`--with-suexec-umask`
:   Set `umask` for processes started by
    `suexec`. It defaults to your system settings.

[![top](../images/up.gif)](#page-header)

## Environment variables

There are some useful environment variables to override the choices made by
`configure` or to help it to find libraries and programs with
nonstandard names or locations.

`CC`
:   Define the C compiler command to be used for compilation.

`CFLAGS`
:   Set C compiler flags you want to use for compilation.

`CPP`
:   Define the C preprocessor command to be used.

`CPPFLAGS`
:   Set C/C++ preprocessor flags, e.g. `-Iincludedir`
    if you have headers in a nonstandard directory includedir.

`LDFLAGS`
:   Set linker flags, e.g. `-Llibdir` if you have
    libraries in a nonstandard directory libdir.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/programs/configure.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/programs/configure.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/programs/configure.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
