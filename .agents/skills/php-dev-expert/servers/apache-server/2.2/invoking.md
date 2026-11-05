# Starting Apache - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/invoking.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/invoking.html) to go to the current version of this document.

# Starting Apache

On Windows, Apache is normally run as a service on Windows
NT, 2000 and XP, or as a console application on Windows 9x and
ME. For details, see [Running Apache as a Service](platform__windows.md#winsvc)
and [Running Apache as a
Console Application](platform__windows.md#wincons).

On Unix, the `httpd` program
is run as a daemon that executes continuously in the
background to handle requests. This document describes how
to invoke `httpd`.

- ![](./images/down.gif) [How Apache Starts](#startup)
- ![](./images/down.gif) [Errors During Start-up](#errors)
- ![](./images/down.gif) [Starting at Boot-Time](#boot)
- ![](./images/down.gif) [Additional Information](#info)

### See also

- [Stopping and Restarting](stopping.md)
- `httpd`
- `apachectl`

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## How Apache Starts

If the `Listen`
specified in the configuration file is default of 80 (or any other
port below 1024), then it is necessary to have root privileges in
order to start apache, so that it can bind to this privileged
port. Once the server has started and performed a few preliminary
activities such as opening its log files, it will launch several
*child* processes which do the work of listening for and
answering requests from clients. The main `httpd`
process continues to run as the root user, but the child processes
run as a less privileged user. This is controlled by the selected
[Multi-Processing Module](mpm.md).

The recommended method of invoking the `httpd`
executable is to use the `apachectl` control script. This
script sets certain environment variables that are necessary for
`httpd` to function correctly under some operating
systems, and then invokes the `httpd` binary.
`apachectl` will pass through any command line
arguments, so any `httpd` options may also be used with
`apachectl`. You may also directly edit the
`apachectl` script by changing the `HTTPD`
variable near the top to specify the correct location of the
`httpd` binary and any command-line arguments that you
wish to be *always* present.

The first thing that `httpd` does when it is
invoked is to locate and read the [configuration file](configuring.md)
`httpd.conf`. The location of this file is set at
compile-time, but it is possible to specify its location at run
time using the `-f` command-line option as in

`/usr/local/apache2/bin/apachectl -f
/usr/local/apache2/conf/httpd.conf`

If all goes well during startup, the server will detach from
the terminal and the command prompt will return almost
immediately. This indicates that the server is up and running.
You can then use your browser to connect to the server and view
the test page in the `DocumentRoot` directory.

[![top](./images/up.gif)](#page-header)

## Errors During Start-up

If Apache suffers a fatal problem during startup, it will
write a message describing the problem either to the console or
to the `ErrorLog` before
exiting. One of the most common error messages is "`Unable
to bind to Port ...`". This message is usually caused by
either:

- Trying to start the server on a privileged port when not
  logged in as the root user; or
- Trying to start the server when there is another instance
  of Apache or some other web server already bound to the same
  Port.

For further trouble-shooting instructions, consult the
Apache [FAQ](http://wiki.apache.org/httpd/FAQ).

[![top](./images/up.gif)](#page-header)

## Starting at Boot-Time

If you want your server to continue running after a system
reboot, you should add a call to `apachectl` to your
system startup files (typically `rc.local` or a file in
an `rc.N` directory). This will start Apache as
root. Before doing this ensure that your server is properly
configured for security and access restrictions.

The `apachectl` script is designed to act like a
standard SysV init script; it can take the arguments
`start`, `restart`, and `stop`
and translate them into the appropriate signals to
`httpd`. So you can often simply link
`apachectl` into the appropriate init directory. But be
sure to check the exact requirements of your system.

[![top](./images/up.gif)](#page-header)

## Additional Information

Additional information about the command-line options of `httpd` and `apachectl` as well as other support
programs included with the server is available on the
[Server and Supporting Programs](programs.md) page.
There is also documentation on all the [modules](mod.md) included with the Apache distribution
and the [directives](mod__directives.md) that they
provide.

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/invoking.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/invoking.html "English") |
[es](https://httpd.apache.org/docs/2.2/pt-br/es/invoking.html "Español") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/invoking.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/invoking.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/invoking.html "Korean") |
[ru](https://httpd.apache.org/docs/2.2/pt-br/ru/invoking.html "Russian") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/invoking.html "Türkçe")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
