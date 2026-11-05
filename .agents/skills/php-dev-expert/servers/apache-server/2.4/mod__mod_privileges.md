# mod_privileges - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_privileges.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_privileges

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Support for Solaris privileges and for running virtual hosts under different user IDs. |
| [Status:](mod__module-dict.md#Status) | Deprecated |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | privileges\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_privileges.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and up, on Solaris 10 and OpenSolaris platforms |

### Summary

This module enables different Virtual Hosts to run with different
Unix User and Group IDs, and with different
[Solaris Privileges](https://docs.oracle.com/cd/E19253-01/816-4863/6mb20lvfd/index.html). In particular, it offers a solution to the
problem of privilege separation between different Virtual Hosts, first
promised by the abandoned perchild MPM. It also offers other security
enhancements.

Unlike perchild, `mod_privileges`
is not itself an MPM. It works *within* a processing model to
set privileges and User/Group *per request* in a running process.
It is therefore not compatible with a threaded MPM, and will refuse
to run under one.

`mod_privileges` raises security issues similar to
those of [suexec](suexec.md). But unlike suexec,
it applies not only to CGI programs but to the entire request processing
cycle, including in-process applications and subprocesses.
It is ideally suited to running PHP applications under **mod\_php**,
which is also incompatible with threaded MPMs. It is also well-suited
to other in-process scripting applications such as **mod\_perl**,
**mod\_python**, and **mod\_ruby**, and to
applications implemented in C as apache modules where privilege
separation is an issue.

### Topics

- ![](../images/down.gif) [Security Considerations](#security)

### Directives

- ![](../images/down.gif) [DTracePrivileges](#dtraceprivileges)
- ![](../images/down.gif) [PrivilegesMode](#privilegesmode)
- ![](../images/down.gif) [VHostCGIMode](#vhostcgimode)
- ![](../images/down.gif) [VHostCGIPrivs](#vhostcgiprivs)
- ![](../images/down.gif) [VHostGroup](#vhostgroup)
- ![](../images/down.gif) [VHostPrivs](#vhostprivs)
- ![](../images/down.gif) [VHostSecure](#vhostsecure)
- ![](../images/down.gif) [VHostUser](#vhostuser)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_privileges)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_privileges)

[![top](../images/up.gif)](#page-header)

## Security Considerations [¶](#security "Permanent link")

`mod_privileges` introduces new security concerns
in situations where **untrusted code** may be run
**within the webserver process**. This applies to
untrusted modules, and scripts running under modules such as
mod\_php or mod\_perl. Scripts running externally (e.g. as CGI
or in an appserver behind mod\_proxy or mod\_jk) are NOT affected.

The basic security concerns with mod\_privileges are:

- Running as a system user introduces the same security issues
  as mod\_suexec, and near-equivalents such as cgiwrap and suphp.
- A privileges-aware malicious user extension (module or script)
  could escalate its privileges to anything available to the
  httpd process in any virtual host. This introduces new risks
  if (and only if) mod\_privileges is compiled with the
  BIG\_SECURITY\_HOLE option.
- A privileges-aware malicious user extension (module or script)
  could escalate privileges to set its user ID to another system
  user (and/or group).

The `PrivilegesMode` directive allows you to
select either FAST or SECURE mode. You can
mix modes, using FAST mode for trusted users and
fully-audited code paths, while imposing SECURE mode where an
untrusted user has scope to introduce code.

Before describing the modes, we should also introduce the target
use cases: Benign vs Hostile. In a benign situation, you want to
separate users for their convenience, and protect them and the server
against the risks posed by honest mistakes, but you trust your users
are not deliberately subverting system security. In a hostile
situation - e.g. commercial hosting - you may have users deliberately
attacking the system or each other.

FAST mode
:   In FAST mode, requests are run in-process with the
    selected uid/gid and privileges, so the overhead is negligible.
    This is suitable for benign situations, but is not secure against an
    attacker escalating privileges with an in-process module or script.

SECURE mode
:   A request in SECURE mode forks a subprocess, which
    then drops privileges. This is a very similar case to running CGI
    with suexec, but for the entire request cycle, and with the benefit
    of fine-grained control of privileges.

You can select different `PrivilegesMode`s for
each virtual host, and even in a directory context within a virtual
host. FAST mode is appropriate where the user(s) are
trusted and/or have no privilege to load in-process code.
SECURE mode is appropriate to cases where untrusted code
might be run in-process. However, even in SECURE mode,
there is no protection against a malicious user who is able to
introduce privileges-aware code running *before the start of the
request-processing cycle.*

[![top](../images/up.gif)](#page-header)

## DTracePrivileges Directive [¶](#dtraceprivileges "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines whether the privileges required by dtrace are enabled. |
| [Syntax:](mod__directive-dict.md#Syntax) | `DTracePrivileges On|Off` |
| [Default:](mod__directive-dict.md#Default) | `DTracePrivileges Off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_privileges |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available on Solaris 10 and OpenSolaris with non-threaded MPMs (`prefork` or custom MPM). |

This server-wide directive determines whether Apache will run with
the [privileges](https://docs.oracle.com/cd/E19253-01/816-4863/6mb20lvfd/index.html) required to run
[dtrace](https://docs.oracle.com/cd/E19253-01/819-5488/gbwaz/index.html).
Note that DTracePrivileges On will not in itself
activate DTrace, but DTracePrivileges Off will prevent
it working.

[![top](../images/up.gif)](#page-header)

## PrivilegesMode Directive [¶](#privilegesmode "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Trade off processing speed and efficiency vs security against malicious privileges-aware code. |
| [Syntax:](mod__directive-dict.md#Syntax) | `PrivilegesMode FAST|SECURE|SELECTIVE` |
| [Default:](mod__directive-dict.md#Default) | `PrivilegesMode FAST` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_privileges |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available on Solaris 10 and OpenSolaris with non-threaded MPMs (`prefork` or custom MPM). |

This directive trades off performance vs security against
malicious, privileges-aware code. In SECURE mode, each request
runs in a secure subprocess, incurring a substantial performance penalty.
In FAST mode, the server is not protected against escalation
of privileges as discussed above.

This directive differs slightly between a `<Directory>`
context (including equivalents such as Location/Files/If) and a
top-level or `<VirtualHost>`.

At top-level, it sets a default that will be inherited by virtualhosts.
In a virtual host, FAST or SECURE mode acts on the entire
HTTP request, and any settings in a `<Directory>`
context will be **ignored**. A third pseudo-mode
SELECTIVE defers the choice of FAST vs SECURE to directives in a
`<Directory>` context.

In a `<Directory>` context, it is applicable only
where SELECTIVE mode was set for the VirtualHost. Only
FAST or SECURE can be set in this context (SELECTIVE would be
meaningless).

### Warning

Where SELECTIVE mode is selected for a virtual host, the activation
of privileges must be deferred until *after* the mapping
phase of request processing has determined what
`<Directory>` context applies to the request.
This might give an attacker opportunities to introduce
code through a `RewriteMap`
running at top-level or `<VirtualHost>` context
*before* privileges have been dropped and userid/gid set.

[![top](../images/up.gif)](#page-header)

## VHostCGIMode Directive [¶](#vhostcgimode "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines whether the virtualhost can run subprocesses, and the privileges available to subprocesses. |
| [Syntax:](mod__directive-dict.md#Syntax) | `VHostCGIMode On|Off|Secure` |
| [Default:](mod__directive-dict.md#Default) | `VHostCGIMode On` |
| [Context:](mod__directive-dict.md#Context) | virtual host |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_privileges |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available on Solaris 10 and OpenSolaris with non-threaded MPMs (`prefork` or custom MPM). |

Determines whether the virtual host is allowed to run fork and exec,
the [privileges](https://docs.oracle.com/cd/E19253-01/816-4863/6mb20lvfd/index.html) required to run subprocesses. If this is set to
Off the virtualhost is denied the privileges and will not
be able to run traditional CGI programs or scripts under the traditional
`mod_cgi`, nor similar external programs such as those
created by `mod_ext_filter` or
`RewriteMap` prog.
Note that it does not prevent CGI programs running under alternative
process and security models such as [mod\_fcgid](https://httpd.apache.org/mod_fcgid/), which is a recommended solution in Solaris.

If set to On or Secure, the virtual host
is permitted to run external programs and scripts as above.
Setting `VHostCGIMode` Secure has
the effect of denying privileges to the subprocesses, as described
for `VHostSecure`.

[![top](../images/up.gif)](#page-header)

## VHostCGIPrivs Directive [¶](#vhostcgiprivs "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Assign arbitrary privileges to subprocesses created by a virtual host. |
| [Syntax:](mod__directive-dict.md#Syntax) | `VHostCGIPrivs [+-]?privilege-name [[+-]?privilege-name] ...` |
| [Default:](mod__directive-dict.md#Default) | `None` |
| [Context:](mod__directive-dict.md#Context) | virtual host |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_privileges |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available on Solaris 10 and OpenSolaris with non-threaded MPMs (`prefork` or custom MPM) and when `mod_privileges` is compiled with the BIG\_SECURITY\_HOLE compile-time option. |

`VHostCGIPrivs` can be used to assign arbitrary [privileges](https://docs.oracle.com/cd/E19253-01/816-4863/6mb20lvfd/index.html) to subprocesses created by a virtual host, as discussed
under `VHostCGIMode`. Each privilege-name
is the name of a Solaris privilege, such as file\_setid
or sys\_nfs.

A privilege-name may optionally be prefixed by
+ or -, which will respectively allow or deny a privilege.
If used with neither + nor -, all privileges otherwise assigned
to the virtualhost will be denied. You can use this to override
any of the default sets and construct your own privilege set.

### Security

This directive can open huge security holes in apache subprocesses,
up to and including running them with root-level powers. Do not
use it unless you fully understand what you are doing!

[![top](../images/up.gif)](#page-header)

## VHostGroup Directive [¶](#vhostgroup "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the Group ID under which a virtual host runs. |
| [Syntax:](mod__directive-dict.md#Syntax) | `VHostGroup unix-groupid` |
| [Default:](mod__directive-dict.md#Default) | `Inherits the group id specified in Group` |
| [Context:](mod__directive-dict.md#Context) | virtual host |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_privileges |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available on Solaris 10 and OpenSolaris with non-threaded MPMs (`prefork` or custom MPM). |

The `VHostGroup` directive sets the Unix group
under which the server will process requests to a virtualhost.
The group is set before the request is processed and reset afterwards
using [Solaris Privileges](https://docs.oracle.com/cd/E19253-01/816-4863/6mb20lvfd/index.html). Since the setting applies to the
*process*, this is not compatible with threaded MPMs.

Unix-group is one of:

A group name
:   Refers to the given group by name.

`#` followed by a group number.
:   Refers to a group by its number.

### Security

This directive cannot be used to run apache as root!
Nevertheless, it opens potential security issues similar to
those discussed in the [suexec](suexec.md)
documentation.

### See also

- `Group`
- `SuexecUserGroup`

[![top](../images/up.gif)](#page-header)

## VHostPrivs Directive [¶](#vhostprivs "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Assign arbitrary privileges to a virtual host. |
| [Syntax:](mod__directive-dict.md#Syntax) | `VHostPrivs [+-]?privilege-name [[+-]?privilege-name] ...` |
| [Default:](mod__directive-dict.md#Default) | `None` |
| [Context:](mod__directive-dict.md#Context) | virtual host |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_privileges |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available on Solaris 10 and OpenSolaris with non-threaded MPMs (`prefork` or custom MPM) and when `mod_privileges` is compiled with the BIG\_SECURITY\_HOLE compile-time option. |

`VHostPrivs` can be used to assign arbitrary [privileges](https://docs.oracle.com/cd/E19253-01/816-4863/6mb20lvfd/index.html) to a virtual host. Each privilege-name
is the name of a Solaris privilege, such as file\_setid
or sys\_nfs.

A privilege-name may optionally be prefixed by
+ or -, which will respectively allow or deny a privilege.
If used with neither + nor -, all privileges otherwise assigned
to the virtualhost will be denied. You can use this to override
any of the default sets and construct your own privilege set.

### Security

This directive can open huge security holes in apache, up to
and including running requests with root-level powers. Do not
use it unless you fully understand what you are doing!

[![top](../images/up.gif)](#page-header)

## VHostSecure Directive [¶](#vhostsecure "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines whether the server runs with enhanced security for the virtualhost. |
| [Syntax:](mod__directive-dict.md#Syntax) | `VHostSecure On|Off` |
| [Default:](mod__directive-dict.md#Default) | `VHostSecure On` |
| [Context:](mod__directive-dict.md#Context) | virtual host |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_privileges |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available on Solaris 10 and OpenSolaris with non-threaded MPMs (`prefork` or custom MPM). |

Determines whether the virtual host processes requests with
security enhanced by removal of [Privileges](https://docs.oracle.com/cd/E19253-01/816-4863/6mb20lvfd/index.html) that are rarely needed in a webserver, but which are
available by default to a normal Unix user and may therefore
be required by modules and applications. It is recommended that
you retain the default (On) unless it prevents an application running.
Since the setting applies to the *process*, this is not
compatible with threaded MPMs.

### Note

If `VHostSecure` prevents an application
running, this may be a warning sign that the application should be
reviewed for security.

[![top](../images/up.gif)](#page-header)

## VHostUser Directive [¶](#vhostuser "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the User ID under which a virtual host runs. |
| [Syntax:](mod__directive-dict.md#Syntax) | `VHostUser unix-userid` |
| [Default:](mod__directive-dict.md#Default) | `Inherits the userid specified in User` |
| [Context:](mod__directive-dict.md#Context) | virtual host |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_privileges |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available on Solaris 10 and OpenSolaris with non-threaded MPMs (`prefork` or custom MPM). |

The `VHostUser` directive sets the Unix userid
under which the server will process requests to a virtualhost.
The userid is set before the request is processed and reset afterwards
using [Solaris Privileges](https://docs.oracle.com/cd/E19253-01/816-4863/6mb20lvfd/index.html). Since the setting applies to the
*process*, this is not compatible with threaded MPMs.

Unix-userid is one of:

A username
:   Refers to the given user by name.

`#` followed by a user number.
:   Refers to a user by its number.

### Security

This directive cannot be used to run apache as root!
Nevertheless, it opens potential security issues similar to
those discussed in the [suexec](suexec.md)
documentation.

### See also

- `User`
- `SuexecUserGroup`

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_privileges.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_privileges.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
