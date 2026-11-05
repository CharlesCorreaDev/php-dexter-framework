# Using Apache HTTP Server on Microsoft Windows - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/platform/windows.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](platform.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Platform Specific Notes](platform.md)

# Using Apache HTTP Server on Microsoft Windows

This document explains how to install, configure and run
Apache HTTP Server 2.4 under Microsoft Windows. If you have questions after
reviewing the documentation (and any event and error logs), you
should consult the peer-supported
[users' mailing
list](http://httpd.apache.org/userslist.html).

This document assumes that you are installing a binary
distribution of httpd. If you want to compile Apache httpd yourself
(possibly to help with development or tracking down bugs),
see [Compiling httpd for Microsoft
Windows](platform__win_compiling.md).

- ![](../images/down.gif) [Operating System Requirements](#req)
- ![](../images/down.gif) [Downloading httpd for Windows](#down)
- ![](../images/down.gif) [Customizing httpd for Windows](#cust)
- ![](../images/down.gif) [Running httpd as a Service](#winsvc)
- ![](../images/down.gif) [Running httpd as a Console Application](#wincons)
- ![](../images/down.gif) [Testing the Installation](#test)
- ![](../images/down.gif) [Configuring Access to Network Resources](#windrivemap)
- ![](../images/down.gif) [Windows Tuning](#tuning)

[![top](../images/up.gif)](#page-header)

## Operating System Requirements [¶](#req "Permanent link")

The primary Windows platform for running Apache httpd 2.4 is Windows
2000 or later. Always obtain and
install the current service pack to avoid operating system bugs.

Apache HTTP Server versions later than 2.2 will not run on any
operating system earlier than Windows 2000.

[![top](../images/up.gif)](#page-header)

## Downloading httpd for Windows [¶](#down "Permanent link")

The Apache HTTP Server Project itself does not provide binary releases of
software, only source code. Individual committers *may* provide
binary packages as a convenience, but it is not a release deliverable.

If you cannot compile the Apache HTTP Server
yourself, you can obtain a binary package from numerous binary distributions
available on the Internet.

Popular options for deploying Apache httpd, and, optionally, PHP
and MySQL, on Microsoft Windows, include:

- [Apache Lounge](http://www.apachelounge.com/download/)
- [WampServer](http://www.wampserver.com/)

[![top](../images/up.gif)](#page-header)

## Customizing httpd for Windows [¶](#cust "Permanent link")

Apache httpd is configured by the files in the `conf`
subdirectory. These are the same files used to configure the Unix
version, but there are a few different directives for httpd on
Windows. See the [directive index](mod__directives.md)
for all the available directives.

The default configuration of the source distribution expects the server
to be installed into \Apache24. This can be customized at compilation time,
but it's important that ultimately the `ServerRoot` in
httpd.conf match the actual installation root. Binary distributions may
customize either the default installation root or the overall layout of
the initial configuration.

The main differences in httpd for Windows are:

- Because httpd for Windows is multithreaded, it does not
  use a separate process for each request, as httpd can on Unix.
  Instead there are usually only two httpd processes running: a
  parent process, and a child which handles the requests. Within
  the child process each request is handled by a separate thread.

  The process management directives are also different:

  `MaxConnectionsPerChild`:
  Like the Unix directive, this controls how many connections a single
  child process will serve before exiting.
  However, unlike on Unix, a replacement process is not instantly
  available. Use the default `MaxConnectionsPerChild 0`,
  unless instructed to change the behavior to overcome a memory leak
  in third party modules or in-process applications.

  **Warning: The server configuration
  file is reread when a new child process is started. If you have
  modified `httpd.conf`, the new child may not start or
  you may receive unexpected results.**

  `ThreadsPerChild`:
  This directive is new. It tells the server how many threads it
  should use. This is the maximum number of connections the server
  can handle at once, so be sure to set this number high enough for
  your site if you get a lot of hits. The recommended default is
  `ThreadsPerChild 150`, but this must be adjusted to
  reflect the greatest anticipated number of simultaneous
  connections to accept.
- The directives that accept filenames as arguments must use
  Windows filenames instead of Unix ones. However, because httpd
  may interpret backslashes as an "escape character" sequence, you
  should consistently use forward slashes in path names, not
  backslashes.
- While filenames are generally case-insensitive on
  Windows, URLs are still treated internally as case-sensitive
  before they are mapped to the filesystem. For example, the
  `<Location>`,
  `Alias`, and `ProxyPass` directives all use
  case-sensitive arguments. For this reason, it is particularly
  important to use the `<Directory>` directive when attempting
  to limit access to content in the filesystem, since this
  directive applies to any content in a directory, regardless of
  how it is accessed. If you wish to assure that only lowercase
  is used in URLs, you can use something like:

  ```
  RewriteEngine On
  RewriteMap lowercase int:tolower
  RewriteCond "%{REQUEST_URI}" "[A-Z]"
  RewriteRule "(.*)" "${lowercase:$1}" [R,L]
  ```
- When running, httpd needs write access only to the logs
  directory and any configured cache directory tree. Due to the
  issue of case insensitive and short 8.3 format names, httpd must
  validate all path names given. This means that each directory
  which httpd evaluates, from the drive root up to the directory
  leaf, must have read, list and traverse directory permissions.
  If Apache2.4 is installed at C:\Program Files, then the root
  directory, Program Files and Apache2.4 must all be visible
  to httpd.
- httpd for Windows contains the ability to load modules at
  runtime, without recompiling the server. If httpd is compiled
  normally, it will install a number of optional modules in the
  `\Apache2.4\modules` directory. To activate these or
  other modules, the `LoadModule`
  directive must be used. For example, to activate the status
  module, use the following (in addition to the status-activating
  directives in `access.conf`):

  ```
  LoadModule status_module "modules/mod_status.so"
  ```

  Information on [creating
  loadable modules](mod__mod_so.md#creating) is also available.
- httpd can also load ISAPI (Internet Server Application
  Programming Interface) extensions such as those used by Microsoft
  IIS and other Windows servers. [More
  information is available](mod__mod_isapi.md). Note that httpd **cannot**
  load ISAPI Filters, and ISAPI Handlers with some Microsoft feature
  extensions will not work.
- When running CGI scripts, the method httpd uses to find
  the interpreter for the script is configurable using the
  `ScriptInterpreterSource`
  directive.
- Since it is often difficult to manage files with names
  like `.htaccess` in Windows, you may find it useful to
  change the name of this per-directory configuration file using
  the `AccessFilename`
  directive.
- Any errors during httpd startup are logged into the
  Windows event log when running on Windows NT. This mechanism
  acts as a backup for those situations where httpd is not yet
  prepared to use the `error.log` file. You can
  review the Windows Application Event Log by using the Event Viewer,
  e.g. Start - Settings - Control Panel - Administrative Tools
  - Event Viewer.

[![top](../images/up.gif)](#page-header)

## Running httpd as a Service [¶](#winsvc "Permanent link")

Apache httpd comes with a utility called the Apache Service Monitor.
With it you can see and manage the state of all installed httpd
services on any machine on your network. To be able to manage an
httpd service with the monitor, you have to first install the
service (either automatically via the installation or manually).

You can install httpd as a Windows NT service as follows from
the command prompt at the httpd `bin` subdirectory:

`httpd.exe -k install`

If you need to specify the name of the service you want to
install, use the following command. You have to do this if you
have several different service installations of httpd on your
computer. If you specify a name during the install, you have to
also specify it during any other -k operation.

`httpd.exe -k install -n "MyServiceName"`

If you need to have specifically named configuration files for
different services, you must use this:

`httpd.exe -k install -n "MyServiceName" -f "c:\files\my.conf"`

If you use the first command without any special parameters except
`-k install`, the service will be called `Apache2.4`
and the configuration will be assumed to be `conf\httpd.conf`.

Removing an httpd service is easy. Just use:

`httpd.exe -k uninstall`

The specific httpd service to be uninstalled can be specified by using:

`httpd.exe -k uninstall -n "MyServiceName"`

Normal starting, restarting and shutting down of an httpd
service is usually done via the Apache Service Monitor, by using
commands like `NET START Apache2.4` and `NET STOP
Apache2.4` or via normal Windows service management. Before
starting httpd as a service by any means, you should test the
service's configuration file by using:

`httpd.exe -n "MyServiceName" -t`

You can control an httpd service by its command line switches,
too. To start an installed httpd service you'll use this:

`httpd.exe -k start -n "MyServiceName"`

To stop an httpd service via the command line switches, use
this:

`httpd.exe -k stop -n "MyServiceName"`

or

`httpd.exe -k shutdown -n "MyServiceName"`

You can also restart a running service and force it to reread
its configuration file by using:

`httpd.exe -k restart -n "MyServiceName"`

By default, all httpd services are registered to run as the
system user (the `LocalSystem` account). The
`LocalSystem` account has no privileges to your network
via any Windows-secured mechanism, including the file system, named
pipes, DCOM, or secure RPC. It has, however, wide privileges locally.

**Never grant any network privileges to
the `LocalSystem` account! If you need httpd to be able
to access network resources, create a separate account for httpd as
noted below.**

It is recommended that users create a separate account for running
httpd service(s). If you have to access network resources via httpd,
this is required.

1. Create a normal domain user account, and be sure to
   memorize its password.
2. Grant the newly-created user a privilege of `Log on
   as a service`.
3. Confirm that the created account is a member of the Users
   group.
4. Grant the account read and execute (RX) rights to all document
   and script folders (`htdocs` and `cgi-bin`
   for example).
5. Grant the account change (RWXD) rights to the
   httpd `logs` directory.
6. Grant the account read and execute (RX) rights to the
   `httpd.exe` binary executable.

It is usually a good practice to grant the user the httpd
service runs as read and execute (RX) access to the whole Apache2.4
directory, except the `logs` subdirectory, where the
user has to have at least change (RWXD) rights.

If you allow the account to log in as a user and as a service,
then you can log on with that account and test that the account has
the privileges to execute the scripts, read the web pages, and that
you can start httpd in a console window. If this works, and you
have followed the steps above, httpd should execute as a service
with no problems.

**Error code 2186** is a good indication that
you need to review the "Log On As" configuration for the service,
since httpd cannot access a required network resource. Also, pay
close attention to the privileges of the user httpd is
configured to run as.

When starting httpd as a service you may encounter an error
message from the Windows Service Control Manager. For example,
if you try to start httpd by using the Services applet in the
Windows Control Panel, you may get the following message:

`Could not start the Apache2.4 service on \\COMPUTER   
Error 1067; The process terminated unexpectedly.`

You will get this generic error if there is any problem with
starting the httpd service. In order to see what is really causing
the problem you should follow the instructions for Running httpd
for Windows from the Command Prompt.

If you are having problems with the service, it is suggested
you follow the instructions below to try starting httpd.exe from
a console window, and work out the errors before struggling to
start it as a service again.

[![top](../images/up.gif)](#page-header)

## Running httpd as a Console Application [¶](#wincons "Permanent link")

Running Apache httpd as a service is usually the recommended way to
use it, but it is sometimes easier to work from the command line,
especially during initial configuration and testing.

To run httpd from the command line as a console application,
use the following command:

`httpd.exe`

httpd will execute, and will remain running until it is stopped
by pressing Control-C.

You can also run httpd via the shortcut Start Apache in Console
placed to `Start Menu --> Programs --> Apache HTTP Server
2.4.xx --> Control Apache Server` during the installation.
This will open a console window and start httpd inside it. If you
don't have httpd installed as a service, the window will remain
visible until you stop httpd by pressing Control-C in the console
window where httpd is running in. The server will exit in a few
seconds. However, if you do have httpd installed as a service, the
shortcut starts the service. If the httpd service is running
already, the shortcut doesn't do anything.

If httpd is running as a service, you can tell it to stop by opening another console
window and entering:

`httpd.exe -k shutdown`

Running as a service should be preferred over running in a
console window because this lets httpd end any current operations
and clean up gracefully.

But if the server is running in a console window, you can
only stop it by pressing Control-C in the same window.

You can also tell httpd to restart. This forces it to reread
the configuration file. Any operations in progress are allowed to
complete without interruption. To restart httpd, either press
Control-Break in the console window you used for starting httpd,
or enter

`httpd.exe -k restart`

if the server is running as a service.

Note for people familiar with the Unix version of httpd:
these commands provide a Windows equivalent to `kill -TERM
pid` and `kill -USR1 pid`. The
command line option used, `-k`, was chosen as a reminder
of the `kill` command used on Unix.

If the httpd console window closes immediately or unexpectedly
after startup, open the Command Prompt from the Start Menu -->
Programs. Change to the folder to which you installed httpd, type
the command `httpd.exe`, and read the error message. Then
change to the logs folder, and review the `error.log`
file for configuration mistakes. Assuming httpd was installed into
`C:\Program Files\Apache Software Foundation\Apache2.4\`,
you can do the following:

`c:   
cd "\Program Files\Apache Software Foundation\Apache2.4\bin"   
httpd.exe`

Then wait for httpd to stop, or press Control-C. Then enter the
following:

`cd ..\logs   
more < error.log`

When working with httpd it is important to know how it will
find the configuration file. You can specify a configuration file
on the command line in two ways:

- `-f` specifies an absolute or relative path to
  a particular configuration file:

  `httpd.exe -f "c:\my server files\anotherconfig.conf"`

  or

  `httpd.exe -f files\anotherconfig.conf`
- `-n` specifies the installed httpd service
  whose configuration file is to be used:

  `httpd.exe -n "MyServiceName"`

In both of these cases, the proper
`ServerRoot` should be set in
the configuration file.

If you don't specify a configuration file with `-f`
or `-n`, httpd will use the file name compiled into the
server, such as `conf\httpd.conf`. This built-in path
is relative to the installation directory. You can verify the compiled
file name from a value labeled as `SERVER_CONFIG_FILE` when
invoking httpd with the `-V` switch, like this:

`httpd.exe -V`

httpd will then try to determine its `ServerRoot` by trying the following, in this order:

1. A `ServerRoot` directive
   via the `-C` command line switch.
2. The `-d` switch on the command line.
3. Current working directory.
4. A registry entry which was created if you did a binary
   installation.
5. The server root compiled into the server. This is `/apache` by default, you can verify it by using `httpd.exe -V` and looking for a value labeled as
   `HTTPD_ROOT`.

If you did not do a binary install, httpd will in some
scenarios complain about the missing registry key. This warning can
be ignored if the server was otherwise able to find its
configuration file.

The value of this key is the
`ServerRoot` directory which
contains the `conf` subdirectory. When httpd starts it
reads the `httpd.conf` file from that directory. If
this file contains a `ServerRoot`
directive which contains a different directory from the one
obtained from the registry key above, httpd will forget the
registry key and use the directory from the configuration file. If
you copy the httpd directory or configuration files to a new
location it is vital that you update the
`ServerRoot` directive in the
`httpd.conf` file to reflect the new location.

[![top](../images/up.gif)](#page-header)

## Testing the Installation [¶](#test "Permanent link")

After starting Apache httpd (either in a console window or as a
service) it will be listening on port 80 (unless you changed the
`Listen` directive in the
configuration files or installed httpd only for the current user).
To connect to the server and access the default page, launch a
browser and enter this URL:

`http://localhost/`

httpd should respond with a welcome page and you should see
"It Works!". If nothing happens or you get an error, look in the
`error.log` file in the `logs` subdirectory.
If your host is not connected to the net, or if you have serious
problems with your DNS (Domain Name Service) configuration, you
may have to use this URL:

`http://127.0.0.1/`

If you happen to be running httpd on an alternate port, you
need to explicitly put that in the URL:

`http://127.0.0.1:8080/`

Once your basic installation is working, you should configure it
properly by editing the files in the `conf` subdirectory.
Again, if you change the configuration of the Windows NT service
for httpd, first attempt to start it from the command line to
make sure that the service starts with no errors.

Because httpd **cannot** share the same port with
another TCP/IP application, you may need to stop, uninstall or reconfigure
certain other services before running httpd. These conflicting
services include other WWW servers, some firewall implementations,
and even some client applications (such as Skype) which will use port
80 to attempt to bypass firewall issues.

[![top](../images/up.gif)](#page-header)

## Configuring Access to Network Resources [¶](#windrivemap "Permanent link")

Access to files over the network can be specified using two
mechanisms provided by Windows:

Mapped drive letters
:   e.g., `Alias "/images/" "Z:/"`

UNC paths
:   e.g., `Alias "/images/" "//imagehost/www/images/"`

Mapped drive letters allow the administrator to maintain the
mapping to a specific machine and path outside of the Apache httpd
configuration. However, these mappings are associated only with
interactive sessions and are not directly available to Apache httpd
when it is started as a service. **Use only UNC paths for
network resources in httpd.conf** so that the resources can
be accessed consistently regardless of how Apache httpd is started.
(Arcane and error prone procedures may work around the restriction
on mapped drive letters, but this is not recommended.)

### Example DocumentRoot with UNC path

```
  UNCList dochost
  DocumentRoot "//dochost/www/html/"
```

### Example DocumentRoot with IP address in UNC path

```
  UNCList 192.168.1.50
  DocumentRoot "//192.168.1.50/docs/"
```

### Example Alias and corresponding Directory with UNC path

```
UNCList imagehost1 imagehost2
Alias "/images/" "//imagehost/www/images/"
Alias "/images2/" "//imagehost2/www/images/"

<Directory "//imagehost/www/images/">
#...
</Directory>
<Directory "//imagehost2/www/images/">
#...
</Directory>
```

When running Apache httpd as a service, you must create a
separate account in order to access network resources, as described
above.

[![top](../images/up.gif)](#page-header)

## Windows Tuning [¶](#tuning "Permanent link")

- If more than a few dozen piped loggers are used on an operating system
  instance, scaling up the "desktop heap" is often necessary. For
  more detailed information, refer to the [piped logging](logs.md#piped) documentation.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/platform/windows.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/platform/windows.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/platform/windows.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
