# httpd - Apache Hypertext Transfer Protocol Server - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/programs/httpd.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Programs](programs.md)

# httpd - Apache Hypertext Transfer Protocol Server

`httpd` is the Apache HyperText Transfer Protocol
(HTTP) server program. It is designed to be run as a standalone
daemon process. When used like this it will create a pool of
child processes or threads to handle requests.

In general, `httpd` should not be invoked directly,
but rather should be invoked via `apachectl` on Unix-based systems or [as a service on Windows NT,
2000 and XP](platform__windows.md#winsvc) and [as
a console application on Windows 9x and ME](platform__windows.md#wincons).

- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)
- ![](../images/down.gif) [Files](#files)

### See also

- [Starting Apache httpd](invoking.md)
- [Stopping Apache httpd](stopping.md)
- [Configuration Files](configuring.md)
- [Platform-specific Documentation](platform.md)
- `apachectl`

[![top](../images/up.gif)](#page-header)

## Synopsis [¶](#synopsis "Permanent link")

`httpd [ -d
serverroot ] [ -f config ]
[ -C directive ] [ -c
directive ] [ -D parameter ]
[ -e level ] [ -E
file ]
[ -k start|restart|graceful|stop|graceful-stop ]
[ -h ]
[ -l ] [ -L ] [ -S ]
[ -t ] [ -v ] [ -V ]
[ -X ] [ -M ] [ -T ]`

On [Windows systems](platform__windows.md), the
following additional arguments are available:

`httpd [ -k
install|config|uninstall ] [ -n name ]
[ -w ]`

[![top](../images/up.gif)](#page-header)

## Options [¶](#options "Permanent link")

`-d serverroot`
:   Set the initial value for the `ServerRoot` directive to
    serverroot. This can be overridden by the ServerRoot
    directive in the configuration file. The default is
    `/usr/local/apache2`.

`-f config`
:   Uses the directives in the file config on startup. If
    config does not begin with a /, then it is taken to be a
    path relative to the `ServerRoot`. The default is
    `conf/httpd.conf`.

`-k start|restart|graceful|stop|graceful-stop`
:   Signals `httpd` to start, restart, or stop. See [Stopping Apache httpd](stopping.md) for more information.

`-C directive`
:   Process the configuration directive before reading
    config files.

`-c directive`
:   Process the configuration directive after reading config
    files.

`-D parameter`
:   Sets a configuration parameter which can be used with
    `<IfDefine>` sections
    in the configuration files to conditionally skip or process commands
    at server startup and restart. Also can be used to set certain
    less-common startup parameters including `-DNO_DETACH`
    (prevent the parent from forking) and `-DFOREGROUND`
    (prevent the parent from calling `setsid()` et al).

`-e level`
:   Sets the `LogLevel` to
    level during server startup. This is useful for
    temporarily increasing the verbosity of the error messages to find
    problems during startup.

`-E file`
:   Send error messages during server startup to file.

`-h`
:   Output a short summary of available command line options.

`-l`
:   Output a list of modules compiled into the server. This will
    **not** list dynamically loaded modules included using
    the `LoadModule` directive.

`-L`
:   Output a list of directives provided by static modules, together with expected arguments and
    places where the directive is valid. Directives provided by shared modules are not listed.

`-M`
:   Dump a list of loaded Static and Shared Modules.

`-S`
:   Show the settings as parsed from the config file (currently only
    shows the virtualhost settings).

`-T` (Available in 2.3.8 and later)
:   Skip document root check at startup/restart.

`-t`
:   Run syntax tests for configuration files only. The program
    immediately exits after these syntax parsing tests with either a return code
    of 0 (Syntax OK) or return code not equal to 0 (Syntax Error). If -D
    DUMP\_VHOSTS is also set, details of the virtual host
    configuration will be printed. If -D DUMP\_MODULES  is
    set, all loaded modules will be printed.

`-v`
:   Print the version of `httpd`, and then exit.

`-V`
:   Print the version and build parameters of `httpd`, and
    then exit.

`-X`
:   Run httpd in debug mode. Only one worker will be started and the
    server will not detach from the console.

[![top](../images/up.gif)](#page-header)

## Files [¶](#files "Permanent link")

The default paths listed below may be changed at compile time or with
various command-line and configuration directives. Consult your local
installation for the actual locations.

`/usr/local/apache2/conf/httpd.conf`
:   Main server configuration file.

`/usr/local/apache2/conf/mime.types`
:   Default MIME type mappings.

`/usr/local/apache2/logs/error_log`
:   Error log file.

`/usr/local/apache2/logs/access_log`
:   Access log file.

`/usr/local/apache2/logs/httpd.pid`
:   File containing the process ID of the running daemon.

The following arguments are available only on the [Windows platform](platform__windows.md):

`-k install|config|uninstall`
:   Install Apache httpd as a Windows NT service; change startup options for
    the Apache httpd service; and uninstall the Apache httpd service.

`-n name`
:   The name of the Apache httpd service to signal.

`-w`
:   Keep the console window open on error so that the error message can
    be read.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/programs/httpd.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/programs/httpd.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/programs/httpd.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/programs/httpd.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
