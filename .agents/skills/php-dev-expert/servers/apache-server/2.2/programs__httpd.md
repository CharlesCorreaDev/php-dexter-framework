# httpd - Apache Hypertext Transfer Protocol Server - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/programs/httpd.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Programs](programs.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/programs/httpd.html) to go to the current version of this document.

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

### See also

- [Starting Apache httpd](invoking.md)
- [Stopping Apache httpd](stopping.md)
- [Configuration Files](configuring.md)
- [Platform-specific Documentation](platform.md)
- `apachectl`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Synopsis

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

## Options

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

`-R directory`
:   When the server is compiled using the `SHARED_CORE`
    rule, this specifies the directory for the shared
    object files.

`-h`
:   Output a short summary of available command line options.

`-l`
:   Output a list of modules compiled into the server. This will
    **not** list dynamically loaded modules included using
    the `LoadModule` directive.

`-L`
:   Output a list of directives together with expected arguments and
    places where the directive is valid.

`-M`
:   Dump a list of loaded Static and Shared Modules.

`-S`
:   Show the settings as parsed from the config file (currently only
    shows the virtualhost settings).

`-T` (Available in 2.2.17 and later)
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

The following arguments are available only on the [Windows platform](platform__windows.md):

`-k install|config|uninstall`
:   Install Apache httpd as a Windows NT service; change startup options for
    the Apache httpd service; and uninstall the Apache httpd service.

`-n name`
:   The name of the Apache httpd service to signal.

`-w`
:   Keep the console window open on error so that the error message can
    be read.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/programs/httpd.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/programs/httpd.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/programs/httpd.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
