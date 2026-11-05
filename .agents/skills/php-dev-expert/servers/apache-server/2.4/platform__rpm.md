# Using Apache With RPM Based Systems (Redhat / CentOS / Fedora) - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/platform/rpm.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](platform.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Platform Specific Notes](platform.md)

# Using Apache With RPM Based Systems (Redhat / CentOS / Fedora)

While many distributions make Apache httpd available as operating system
supported packages, it can sometimes be desirable to install and use the
canonical version of Apache httpd on these systems, replacing the natively
provided versions of the packages.

While the Apache httpd project does not currently create binary RPMs
for the various distributions out there, it is easy to build your own
binary RPMs from the canonical Apache httpd tarball.

This document explains how to build, install, configure and run
Apache httpd 2.4 under Unix systems supporting the RPM packaging format.

- ![](../images/down.gif) [Creating a Source RPM](#creating)
- ![](../images/down.gif) [Building RPMs](#building)
- ![](../images/down.gif) [Installing the Server](#installing)
- ![](../images/down.gif) [Configuring the Default Instance of Apache httpd](#default)
- ![](../images/down.gif) [Configuring Additional Instances of Apache httpd on the Same Machine](#additional)

[![top](../images/up.gif)](#page-header)

## Creating a Source RPM [¶](#creating "Permanent link")

The Apache httpd source tarball can be converted into an SRPM as
follows:

`rpmbuild -ts httpd-2.4.x.tar.bz2`

[![top](../images/up.gif)](#page-header)

## Building RPMs [¶](#building "Permanent link")

RPMs can be built directly from the Apache httpd source tarballs using
the following command:

`rpmbuild -tb httpd-2.4.x.tar.bz2`

Corresponding "-devel" packages will be required to be installed on your
build system prior to building the RPMs, the `rpmbuild` command
will automatically calculate what RPMs are required and will list any
dependencies that are missing on your system. These "-devel" packages will
not be required after the build is completed, and can be safely removed.

If successful, the following RPMs will be created:

httpd-2.4.x-1.i686.rpm
:   The core server and basic module set.

httpd-debuginfo-2.4.x-1.i686.rpm
:   Debugging symbols for the server and all modules.

httpd-devel-2.4.x-1.i686.rpm
:   Headers and development files for the server.

httpd-manual-2.4.x-1.i686.rpm
:   The webserver manual.

httpd-tools-2.4.x-1.i686.rpm
:   Supporting tools for the webserver.

mod\_authnz\_ldap-2.4.x-1.i686.rpm
:   `mod_ldap` and `mod_authnz_ldap`, with
    corresponding dependency on openldap.

mod\_lua-2.4.x-1.i686.rpm
:   `mod_lua` module, with
    corresponding dependency on lua.

mod\_proxy\_html-2.4.x-1.i686.rpm
:   `mod_proxy_html` module, with
    corresponding dependency on libxml2.

mod\_socache\_dc-2.4.x-1.i686.rpm
:   `mod_socache_dc` module, with
    corresponding dependency on distcache.

mod\_ssl-2.4.x-1.i686.rpm
:   `mod_ssl` module, with
    corresponding dependency on openssl.

[![top](../images/up.gif)](#page-header)

## Installing the Server [¶](#installing "Permanent link")

The `httpd` RPM is the only RPM necessary to get a basic
server to run. Install it as follows:

`rpm -U httpd-2.4.x-1.i686.rpm`

Self contained modules are included with the server. Modules that
depend on external libraries are provided as separate RPMs to install
if needed.

[![top](../images/up.gif)](#page-header)

## Configuring the Default Instance of Apache httpd [¶](#default "Permanent link")

The default configuration for the server is installed by default
beneath the `/etc/httpd` directory, with logs written by
default to `/var/log/httpd`. The environment for the
webserver is set by default within the optional
`/etc/sysconfig/httpd` file.

Start the server as follows:

`service httpd restart`

[![top](../images/up.gif)](#page-header)

## Configuring Additional Instances of Apache httpd on the Same Machine [¶](#additional "Permanent link")

It is possible to configure additional instances of the Apache
httpd server running independently alongside each other on the same
machine. These instances can have independent configurations, and
can potentially run as separate users if so configured.

This was done by making the httpd startup script aware of its own
name. This name is then used to find the environment file for the
server, and in turn, the server root of the server instance.

To create an additional instance called
`httpd-additional`, follow these steps:

- Create a symbolic link to the startup script for the additional
  server:

  `ln -s /etc/rc.d/init.d/httpd /etc/rc.d/init.d/httpd-additional  
  chkconfig --add httpd-additional`
- Create an environment file for the server, using the
  `/etc/sysconfig/httpd` file as a template:

  `# template from httpd  
  cp /etc/sysconfig/httpd /etc/sysconfig/httpd-additional`

  `# blank template  
  touch /etc/sysconfig/httpd-additional`

  Edit `/etc/sysconfig/httpd-additional` and pass the
  server root of the new server instance within the
  `OPTIONS` environment variable.

  `OPTIONS="-d /etc/httpd-additional -f conf/httpd-additional.conf"`
- Edit the server configuration file
  `/etc/httpd-additional/conf/httpd-additional.conf` to
  ensure the correct ports and paths are configured.
- Start the server as follows:

  `service httpd-additional restart`
- Repeat this process as required for each server instance.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/platform/rpm.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/platform/rpm.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
