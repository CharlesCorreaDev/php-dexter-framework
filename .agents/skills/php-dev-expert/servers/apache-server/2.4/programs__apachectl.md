# apachectl - Apache HTTP Server Control Interface - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/programs/apachectl.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Programs](programs.md)

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
- ![](../images/down.gif) [Files](#files)

### See also

- [Starting Apache](invoking.md)
- [Stopping Apache](stopping.md)
- [Configuration Files](configuring.md)
- [Platform Docs](platform.md)
- `httpd`

[![top](../images/up.gif)](#page-header)

## Synopsis [¶](#synopsis "Permanent link")

When acting in pass-through mode, `apachectl` can take
all the arguments available for the `httpd`
binary.

`apachectl [ httpd-argument ]`

When acting in SysV init mode, `apachectl` takes simple,
one-word commands, defined below.

`apachectl command`

[![top](../images/up.gif)](#page-header)

## Options [¶](#options "Permanent link")

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

[![top](../images/up.gif)](#page-header)

## Files [¶](#files "Permanent link")

The default paths listed below may be changed at compile time.
Consult your local installation for the actual locations.

`/usr/local/apache2/bin/envvars`
:   Environment variable settings sourced at startup.

`/usr/local/apache2/bin/httpd`
:   The httpd binary invoked by apachectl.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/programs/apachectl.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/programs/apachectl.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/programs/apachectl.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/programs/apachectl.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
