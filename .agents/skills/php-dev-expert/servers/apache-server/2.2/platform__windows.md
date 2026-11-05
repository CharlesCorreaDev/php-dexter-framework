# Using Apache HTTP Server on Microsoft Windows - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/platform/windows.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](platform.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Platform Specific Notes](platform.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/platform/windows.html) to go to the current version of this document.

# Using Apache HTTP Server on Microsoft Windows

This document explains how to install, configure and run
Apache 2.2 under Microsoft Windows. If you have questions after
reviewing the documentation (and any event and error logs), you
should consult the peer-supported
[users' mailing
list](http://httpd.apache.org/userslist.html).

This document assumes that you are installing a binary
distribution of Apache. If you want to compile Apache yourself
(possibly to help with development or tracking down bugs),
see [Compiling Apache for Microsoft
Windows](platform__win_compiling.md).

- ![](../images/down.gif) [Operating System Requirements](#req)
- ![](../images/down.gif) [Downloading Apache for Windows](#down)
- ![](../images/down.gif) [Installing Apache for Windows](#inst)
- ![](../images/down.gif) [Advanced Installation Topics](#advinst)
- ![](../images/down.gif) [Customizing Apache for Windows](#cust)
- ![](../images/down.gif) [Running Apache as a Service](#winsvc)
- ![](../images/down.gif) [Running Apache as a Console Application](#wincons)
- ![](../images/down.gif) [Testing the Installation](#test)
- ![](../images/down.gif) [Configuring Access to Network Resources](#windrivemap)
- ![](../images/down.gif) [Windows Tuning](#tuning)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Operating System Requirements

The primary Windows platform for running Apache 2.2 is Windows
2000 or later. The binary installer only works with the x86 family
of processors, such as Intel and AMD processors. Always obtain and
install the current service pack to avoid operating system bugs.

Running Apache on Windows 9x is ignored by the developers, and
is strongly discouraged. On Windows NT 4.0, installing Service
Pack 6 is required. Apache HTTP Server versions later than 2.2 will
not run on any operating system earlier than Windows 2000.

[![top](../images/up.gif)](#page-header)

## Downloading Apache for Windows

The Apache HTTP Server Project itself does not provide binary releases of
software, only source code. Individual committers *may* provide
binary packages as a convenience, but it is not a release deliverable.

If you cannot compile the Apache HTTP Server
yourself, you can obtain a binary package from numerous binary distributions
available on the Internet.

Popular options for deploying Apache httpd, and, optionally, PHP
and MySQL, on Microsoft Windows, include:

- [ApacheHaus](http://www.apachehaus.com/cgi-bin/download.plx)
- [Apache Lounge](http://www.apachelounge.com/download/)
- [BitNami WAMP Stack](http://bitnami.com/stack/wamp)
- [WampServer](http://www.wampserver.com/)
- [XAMPP](http://www.apachefriends.org/en/xampp.html)

[![top](../images/up.gif)](#page-header)

## Installing Apache for Windows

You need Microsoft Installer 2.0 or above for the installation
to work. For Windows NT 4.0 and 2000 refer to Microsoft's article
[KB 292539](http://support.microsoft.com/kb/292539/).
Windows XP and later do not require this update. The Windows 98/ME
installer engine appears to no longer be available from Microsoft,
and these instructions no longer detail such prerequisites.

Note that you cannot install two versions of Apache 2.2 on the
same computer with the binary installer. You can, however, install
a version of the 1.3 series **and** a version of the
2.2 series on the same computer without problems. If you need to
have two different 2.2 versions on the same computer, you have to
[compile and install Apache from the
source](platform__win_compiling.md).

Run the Apache `.msi` file you downloaded above. The
installation will ask you for these things:

1. **Network Domain.** Enter the DNS domain in which
   your server is or will be registered in. For example, if your
   server's full DNS name is `server.mydomain.net`, you would
   type `mydomain.net` here.
2. **Server Name.** Your server's full DNS name.
   From the example above, you would type `server.mydomain.net`
   here.
3. **Administrator's Email Address.** Enter the
   server administrator's or webmaster's email address here. This
   address will be displayed along with error messages to the client
   by default.
4. **For whom to install Apache** Select `for
   All Users, on Port 80, as a Service - Recommended` if you'd
   like your new Apache to listen at port 80 for incoming traffic.
   It will run as a service (that is, Apache will run even if no one
   is logged in on the server at the moment) Select `only for
   the Current User, on Port 8080, when started Manually` if
   you'd like to install Apache for your personal experimenting or
   if you already have another WWW server running on port 80.
5. **The installation type.** Select `Typical`
   for everything except the source code and libraries for module
   development. With `Custom` you can specify what to
   install. A full install will require about 13 megabytes of free
   disk space. This does *not* include the size of your web
   site(s).
6. **Where to install.** The default path is
   `C:\Program Files\Apache Software Foundation`
   under which a directory called
   `Apache2.2` will be created by default.

During the installation, Apache will configure the files in the
`conf` subdirectory to reflect the chosen installation
directory. However, if any of the configuration files in this
directory already exist, they will not be overwritten. Instead, the
new copy of the corresponding file will be left with the extension
`.default`. So, for example, if `conf\httpd.conf`
already exists, it will be renamed as `conf\httpd.conf.default`.
After the installation you should manually check to see what new
settings are in the `.default` file, and if necessary,
update your existing configuration file.

Also, if you already have a file called `htdocs\index.html`,
it will not be overwritten (and no `index.html.default`
will be installed either). This means it should be safe to install
Apache over an existing installation, although you would have to
stop the existing running server before doing the installation, and
then start the new one after the installation is finished.

After installing Apache, you must edit the configuration files
in the `conf` subdirectory as required. These files
will be configured during the installation so that Apache is ready
to be run from the directory it was installed into, with the
documents server from the subdirectory `htdocs`. There
are lots of other options which you should set before you really
start using Apache. However, to get started quickly, the files
should work as installed.

[![top](../images/up.gif)](#page-header)

## Advanced Installation Topics

One feature of the installer, "Build Headers and Libraries", can be
ignored by most users, but should be installed if compiling third party
modules. The "APR Iconv Code Pages" can similarly be omitted by most
users, unless using `mod_charset_lite` or a third party
module which relies on APR internationalization features.

There are requests to ship a .zip file from time to time. There is
no point in the ASF consuming additional storage, mirroring and bandwidth
for this purpose, because the .msi installer allows the installation
artifacts to all be unpacked using the `msiexec /a` network
installation option. Using this command against any .msi will result
in an exploded tree of all of the individual files and components.

The installation options above can be customized by users familiar
with msiexec.exe options and silent installation. The actual installer
sources are available in the httpd/httpd/win32-msi/ tree of the httpd
project subversion respository. For reference, some of the more common
variables which may be modified are;

- `AgreeToLicense` (toggle to "Yes")
- `ALLUSERS` (choose between Null and "1")
- `ApplicationUsers` (toggle to "OnlyCurrentUser")
- `EXISTING_APACHE_SERVICE_PATH`
- `INSTALLDIR` (default "ProgramFilesFolder\Apache Software Foundation\Apache2.2\")
- `INSTALLLEVEL` (default "100", refer to list below)
- `RESOLVED_WINSOCK2` (toggle to "1")
- `SERVERADMIN`
- `SERVERDOMAIN`
- `SERVERNAME`
- `SERVERPORT` (default "80")
- `SERVERSSLPORT` (default "443")
- `SERVICEINTERNALNAME` (default "Apache2.2", no spaces!)
- `SERVICENAME` (default "Apache2.2", include spaces)
- `SetupType` (default "Typical")

The installation level of various features, which may be individually
toggled, include;

- Apache (1, base Apache HTTP Server 2.2 feature)
- ApacheDocs (11, Apache Documentation)
- ApacheMonitoring (41, Apache Service Taskbar Icon)
- ApacheRuntime (1, Apache Runtime)
- BuildFiles (101, Build Headers and Libraries)
- Iconv (21, APR Iconv Code Pages)
- OpensslBin (31, OpenSSL Runtime)
- SslBin (41, Ssl Binaries)

[![top](../images/up.gif)](#page-header)

## Customizing Apache for Windows

Apache is configured by the files in the `conf`
subdirectory. These are the same files used to configure the Unix
version, but there are a few different directives for Apache on
Windows. See the [directive index](mod__directives.md)
for all the available directives.

The main differences in Apache for Windows are:

- Because Apache for Windows is multithreaded, it does not
  use a separate process for each request, as Apache can on Unix.
  Instead there are usually only two Apache processes running: a
  parent process, and a child which handles the requests. Within
  the child process each request is handled by a separate thread.

  The process management directives are also different:

  `MaxRequestsPerChild`:
  Like the Unix directive, this controls how many requests (actually,
  connections) which a single child process will serve before exiting.
  However, unlike on Unix, a replacement process is not instantly
  available. Use the default `MaxRequestsPerChild 0`,
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
  Windows filenames instead of Unix ones. However, because Apache
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

  `RewriteEngine On  
  RewriteMap lowercase int:tolower  
  RewriteCond %{REQUEST_URI} [A-Z]  
  RewriteRule (.*) ${lowercase:$1} [R,L]`
- When running, Apache needs write access only to the logs
  directory and any configured cache directory tree. Due to the
  issue of case insensitive and short 8.3 format names, Apache must
  validate all path names given. This means that each directory
  which Apache evaluates, from the drive root up to the directory
  leaf, must have read, list and traverse directory permissions.
  If Apache2.2 is installed at C:\Program Files, then the root
  directory, Program Files and Apache2.2 must all be visible
  to Apache.
- Apache for Windows contains the ability to load modules at
  runtime, without recompiling the server. If Apache is compiled
  normally, it will install a number of optional modules in the
  `\Apache2.2\modules` directory. To activate these or
  other modules, the new `LoadModule`
  directive must be used. For example, to activate the status
  module, use the following (in addition to the status-activating
  directives in `access.conf`):

  `LoadModule status_module modules/mod_status.so`

  Information on [creating
  loadable modules](mod__mod_so.md#creating) is also available.
- Apache can also load ISAPI (Internet Server Application
  Programming Interface) extensions such as those used by Microsoft
  IIS and other Windows servers. [More
  information is available](mod__mod_isapi.md). Note that Apache **cannot**
  load ISAPI Filters, and ISAPI Handlers with some Microsoft feature
  extensions will not work.
- When running CGI scripts, the method Apache uses to find
  the interpreter for the script is configurable using the
  `ScriptInterpreterSource`
  directive.
- Since it is often difficult to manage files with names
  like `.htaccess` in Windows, you may find it useful to
  change the name of this per-directory configuration file using
  the `AccessFilename`
  directive.
- Any errors during Apache startup are logged into the
  Windows event log when running on Windows NT. This mechanism
  acts as a backup for those situations where Apache is not yet
  prepared to use the `error.log` file. You can
  review the Windows Application Event Log by using the Event Viewer,
  e.g. Start - Settings - Control Panel - Administrative Tools
  - Event Viewer.

[![top](../images/up.gif)](#page-header)

## Running Apache as a Service

You can install Apache as a service automatically during the
installation. If you chose to install for all users, the
installation will create an Apache service for you. If you specify
to install for yourself only, you can manually register Apache as a
service after the installation. You have to be a member of the
Administrators group for the service installation to succeed.

Apache comes with a utility called the Apache Service Monitor.
With it you can see and manage the state of all installed Apache
services on any machine on your network. To be able to manage an
Apache service with the monitor, you have to first install the
service (either automatically via the installation or manually).

You can install Apache as a Windows NT service as follows from
the command prompt at the Apache `bin` subdirectory:

`httpd.exe -k install`

If you need to specify the name of the service you want to
install, use the following command. You have to do this if you
have several different service installations of Apache on your
computer. If you specify a name during the install, you have to
also specify it during any other -k operation.

`httpd.exe -k install -n "MyServiceName"`

If you need to have specifically named configuration files for
different services, you must use this:

`httpd.exe -k install -n "MyServiceName" -f "c:\files\my.conf"`

If you use the first command without any special parameters except
`-k install`, the service will be called `Apache2.2`
and the configuration will be assumed to be `conf\httpd.conf`.

Removing an Apache service is easy. Just use:

`httpd.exe -k uninstall`

The specific Apache service to be uninstalled can be specified by using:

`httpd.exe -k uninstall -n "MyServiceName"`

Normal starting, restarting and shutting down of an Apache
service is usually done via the Apache Service Monitor, by using
commands like `NET START Apache2.2` and `NET STOP
Apache2.2` or via normal Windows service management. Before
starting Apache as a service by any means, you should test the
service's configuration file by using:

`httpd.exe -n "MyServiceName" -t`

You can control an Apache service by its command line switches,
too. To start an installed Apache service you'll use this:

`httpd.exe -k start -n "MyServiceName"`

To stop an Apache service via the command line switches, use
this:

`httpd.exe -k stop -n "MyServiceName"`

or

`httpd.exe -k shutdown -n "MyServiceName"`

You can also restart a running service and force it to reread
its configuration file by using:

`httpd.exe -k restart -n "MyServiceName"`

By default, all Apache services are registered to run as the
system user (the `LocalSystem` account). The
`LocalSystem` account has no privileges to your network
via any Windows-secured mechanism, including the file system, named
pipes, DCOM, or secure RPC. It has, however, wide privileges locally.

**Never grant any network privileges to
the `LocalSystem` account! If you need Apache to be able
to access network resources, create a separate account for Apache as
noted below.**

It is recommended that users create a separate account for running
Apache service(s). If you have to access network resources via Apache,
this is required.

1. Create a normal domain user account, and be sure to
   memorize its password.
2. Grant the newly-created user a privilege of `Log on
   as a service` and `Act as part of the operating
   system`. On Windows NT 4.0 these privileges are granted via
   User Manager for Domains, but on Windows 2000 and XP you probably
   want to use Group Policy for propagating these settings. You can
   also manually set these via the Local Security Policy MMC snap-in.
3. Confirm that the created account is a member of the Users
   group.
4. Grant the account read and execute (RX) rights to all document
   and script folders (`htdocs` and `cgi-bin`
   for example).
5. Grant the account change (RWXD) rights to the
   Apache `logs` directory.
6. Grant the account read and execute (RX) rights to the
   `httpd.exe` binary executable.

It is usually a good practice to grant the user the Apache
service runs as read and execute (RX) access to the whole Apache2.2
directory, except the `logs` subdirectory, where the
user has to have at least change (RWXD) rights.

If you allow the account to log in as a user and as a service,
then you can log on with that account and test that the account has
the privileges to execute the scripts, read the web pages, and that
you can start Apache in a console window. If this works, and you
have followed the steps above, Apache should execute as a service
with no problems.

**Error code 2186** is a good indication that
you need to review the "Log On As" configuration for the service,
since Apache cannot access a required network resource. Also, pay
close attention to the privileges of the user Apache is
configured to run as.

When starting Apache as a service you may encounter an error
message from the Windows Service Control Manager. For example,
if you try to start Apache by using the Services applet in the
Windows Control Panel, you may get the following message:

`Could not start the Apache2.2 service on \\COMPUTER   
Error 1067; The process terminated unexpectedly.`

You will get this generic error if there is any problem with
starting the Apache service. In order to see what is really causing
the problem you should follow the instructions for Running Apache
for Windows from the Command Prompt.

If you are having problems with the service, it is suggested
you follow the instructions below to try starting httpd.exe from
a console window, and work out the errors before struggling to
start it as a service again.

[![top](../images/up.gif)](#page-header)

## Running Apache as a Console Application

Running Apache as a service is usually the recommended way to
use it, but it is sometimes easier to work from the command line
(on Windows 9x running Apache from the command line is the
recommended way due to the lack of reliable service support.)

To run Apache from the command line as a console application,
use the following command:

`httpd.exe`

Apache will execute, and will remain running until it is stopped
by pressing Control-C.

You can also run Apache via the shortcut Start Apache in Console
placed to `Start Menu --> Programs --> Apache HTTP Server
2.2.xx --> Control Apache Server` during the installation.
This will open a console window and start Apache inside it. If you
don't have Apache installed as a service, the window will remain
visible until you stop Apache by pressing Control-C in the console
window where Apache is running in. The server will exit in a few
seconds. However, if you do have Apache installed as a service, the
shortcut starts the service. If the Apache service is running
already, the shortcut doesn't do anything.

If Apache is running as a service, you can tell it to stop by opening another console
window and entering:

`httpd.exe -k shutdown`

Running as a service should be preferred over running in a
console window because this lets Apache end any current operations
and clean up gracefully.

But if the server is running in a console window, you can
only stop it by pressing Control-C in the same window.

You can also tell Apache to restart. This forces it to reread
the configuration file. Any operations in progress are allowed to
complete without interruption. To restart Apache, either press
Control-Break in the console window you used for starting Apache,
or enter

`httpd.exe -k restart`

if the server is running as a service.

Note for people familiar with the Unix version of Apache:
these commands provide a Windows equivalent to `kill -TERM
pid` and `kill -USR1 pid`. The
command line option used, `-k`, was chosen as a reminder
of the `kill` command used on Unix.

If the Apache console window closes immediately or unexpectedly
after startup, open the Command Prompt from the Start Menu -->
Programs. Change to the folder to which you installed Apache, type
the command `httpd.exe`, and read the error message. Then
change to the logs folder, and review the `error.log`
file for configuration mistakes. If you accepted the defaults when
you installed Apache, the commands would be:

`c:   
cd "\Program Files\Apache Software Foundation\Apache2.2\bin"   
httpd.exe`

Then wait for Apache to stop, or press Control-C. Then enter the
following:

`cd ..\logs   
more < error.log`

When working with Apache it is important to know how it will
find the configuration file. You can specify a configuration file
on the command line in two ways:

- `-f` specifies an absolute or relative path to
  a particular configuration file:

  `httpd.exe -f "c:\my server files\anotherconfig.conf"`

  or

  `httpd.exe -f files\anotherconfig.conf`
- `-n` specifies the installed Apache service
  whose configuration file is to be used:

  `httpd.exe -n "MyServiceName"`

In both of these cases, the proper
`ServerRoot` should be set in
the configuration file.

If you don't specify a configuration file with `-f`
or `-n`, Apache will use the file name compiled into the
server, such as `conf\httpd.conf`. This built-in path
is relative to the installation directory. You can verify the compiled
file name from a value labelled as `SERVER_CONFIG_FILE` when
invoking Apache with the `-V` switch, like this:

`httpd.exe -V`

Apache will then try to determine its `ServerRoot` by trying the following, in this order:

1. A `ServerRoot` directive
   via the `-C` command line switch.
2. The `-d` switch on the command line.
3. Current working directory.
4. A registry entry which was created if you did a binary
   installation.
5. The server root compiled into the server. This is `/apache` by default, you can verify it by using `httpd.exe -V` and looking for a value labelled as
   `HTTPD_ROOT`.

During the installation, a version-specific registry key is
created in the Windows registry. The location of this key depends
on the type of the installation. If you chose to install Apache
for all users, the key is located under the
`HKEY_LOCAL_MACHINE` hive, like this (the version
numbers will of course vary between different versions of Apache:

`HKEY_LOCAL_MACHINE\SOFTWARE\Apache Software Foundation\Apache\2.2.2`

Correspondingly, if you chose to install Apache for the current
user only, the key is located under the `HKEY_CURRENT_USER`
hive, the contents of which are dependent of the user currently
logged on:

`HKEY_CURRENT_USER\SOFTWARE\Apache Software Foundation\Apache\2.2.2`

This key is compiled into the server and can enable you to test
new versions without affecting the current version. Of course, you
must take care not to install the new version in the same
directory as another version.

If you did not do a binary install, Apache will in some
scenarios complain about the missing registry key. This warning can
be ignored if the server was otherwise able to find its
configuration file.

The value of this key is the
`ServerRoot` directory which
contains the `conf` subdirectory. When Apache starts it
reads the `httpd.conf` file from that directory. If
this file contains a `ServerRoot`
directive which contains a different directory from the one
obtained from the registry key above, Apache will forget the
registry key and use the directory from the configuration file. If
you copy the Apache directory or configuration files to a new
location it is vital that you update the
`ServerRoot` directive in the
`httpd.conf` file to reflect the new location.

[![top](../images/up.gif)](#page-header)

## Testing the Installation

After starting Apache (either in a console window or as a
service) it will be listening on port 80 (unless you changed the
`Listen` directive in the
configuration files or installed Apache only for the current user).
To connect to the server and access the default page, launch a
browser and enter this URL:

`http://localhost/`

Apache should respond with a welcome page and you should see
"It Works!". If nothing happens or you get an error, look in the
`error.log` file in the `logs` subdirectory.
If your host is not connected to the net, or if you have serious
problems with your DNS (Domain Name Service) configuration, you
may have to use this URL:

`http://127.0.0.1/`

If you happen to be running Apache on an alternate port, you
need to explicitly put that in the URL:

`http://127.0.0.1:8080/`

Once your basic installation is working, you should configure it
properly by editing the files in the `conf` subdirectory.
Again, if you change the configuration of the Windows NT service
for Apache, first attempt to start it from the command line to
make sure that the service starts with no errors.

Because Apache **cannot** share the same port with
another TCP/IP application, you may need to stop, uninstall or reconfigure
certain other services before running Apache. These conflicting
services include other WWW servers, some firewall implementations,
and even some client applications (such as Skype) which will use port
80 to attempt to bypass firewall issues.

[![top](../images/up.gif)](#page-header)

## Configuring Access to Network Resources

Access to files over the network can be specified using two
mechanisms provided by Windows:

Mapped drive letters
:   e.g., `Alias /images/ Z:/`

UNC paths
:   e.g., `Alias /images/ //imagehost/www/images/`

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

`DocumentRoot //dochost/www/html/`

### Example DocumentRoot with IP address in UNC path

`DocumentRoot //192.168.1.50/docs/`

### Example Alias and corresponding Directory with UNC path

`Alias /images/ //imagehost/www/images/  
  
<Directory //imagehost/www/images/>  
...  
<Directory>`

When running Apache httpd as a service, you must create a
separate account in order to access network resources, as described
above.

[![top](../images/up.gif)](#page-header)

## Windows Tuning

- If more than a few dozen piped loggers are used on an operating system
  instance, scaling up the "desktop heap" is often necessary. For
  more detailed information, refer to the [piped logging](logs.md#piped) documentation.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/platform/windows.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/platform/windows.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
