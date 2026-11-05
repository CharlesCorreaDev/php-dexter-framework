# apachectl - Apache HTTP Server Control Interface - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/programs/apachectl.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Programs](programs.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/programs/apachectl.html) to go to the current version of this document.

# apachectl - Apache HTTP Server Control Interface

`apachectl` is a front end to the Apache HyperText
Transfer Protocol (HTTP) server. It is designed to help the
administrator control the functioning of the Apache
`httpd` daemon.

The `apachectl` script can operate in two modes.
First, it can act as a simple front-end to the `httpd`
command that simply sets any necessary environment variables and
then invokes `httpd`, passing through any command line
arguments. Second, `apachectl` can act as a SysV init
script, taking simple one-word arguments like `start`,
`restart`, and `stop`, and translating them
into appropriate signals to `httpd`.

If your Apache installation uses non-standard paths, you will
need to edit the `apachectl` script to set the
appropriate paths to the `httpd` binary. You can also
specify any necessary `httpd` command line arguments.
See the comments in the script for details.

The `apachectl` script returns a 0 exit value on
success, and >0 if an error occurs. For more details, view
the comments in the script.

- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)

### See also

- [Starting Apache](invoking.md)
- [Stopping Apache](stopping.md)
- [Configuration Files](configuring.md)
- [Platform Docs](platform.md)
- `httpd`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Synopsis

When acting in pass-through mode, `apachectl` can take
all the arguments available for the `httpd`
binary.

`apachectl [ httpd-argument ]`

When acting in SysV init mode, `apachectl` takes simple,
one-word commands, defined below.

`apachectl command`

[![top](../images/up.gif)](#page-header)

## Options

Only the SysV init-style options are defined here. Other arguments
are defined on the `httpd` manual page.

`start`
:   Start the Apache `httpd` daemon. Gives an error if it
    is already running. This is equivalent to `apachectl -k
    start`.

`stop`
:   Stops the Apache `httpd` daemon. This is equivalent to
    `apachectl -k stop`.

`restart`
:   Restarts the Apache `httpd` daemon. If the daemon is
    not running, it is started. This command automatically checks the
    configuration files as in `configtest` before initiating
    the restart to make sure the daemon doesn't die. This is equivalent
    to `apachectl -k restart`.

`fullstatus`
:   Displays a full status report from `mod_status`.
    For this to work, you need to have `mod_status` enabled
    on your server and a text-based browser such as `lynx`
    available on your system. The URL used to access the status report
    can be set by editing the `STATUSURL` variable in the
    script.

`status`
:   Displays a brief status report. Similar to the
    `fullstatus` option, except that the list of requests
    currently being served is omitted.

`graceful`
:   Gracefully restarts the Apache `httpd` daemon. If the
    daemon is not running, it is started. This differs from a normal
    restart in that currently open connections are not aborted. A side
    effect is that old log files will not be closed immediately. This
    means that if used in a log rotation script, a substantial delay may
    be necessary to ensure that the old log files are closed before
    processing them. This command automatically checks the configuration
    files as in `configtest` before initiating the
    restart to make sure Apache doesn't die. This is equivalent to
    `apachectl -k graceful`.

`graceful-stop`
:   Gracefully stops the Apache `httpd` daemon.
    This differs from a normal stop in that currently open connections are not
    aborted. A side effect is that old log files will not be closed immediately.
    This is equivalent to `apachectl -k graceful-stop`.

`configtest`
:   Run a configuration file syntax test. It parses the configuration
    files and either reports `Syntax Ok`
    or detailed information about the particular syntax error. This is
    equivalent to `apachectl -t`.

The following option was available in earlier versions but has been removed.

`startssl`
:   To start `httpd` with SSL support, you should edit
    your configuration file to include the relevant directives and then
    use the normal `apachectl start`.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/programs/apachectl.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/programs/apachectl.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/programs/apachectl.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
