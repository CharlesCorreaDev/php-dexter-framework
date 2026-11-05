# mod_systemd - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_systemd.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_systemd

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Provides better support for systemd integration |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | systemd\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_systemd.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.4.42 and later |

### Summary

This module provides support for systemd integration. It allows
httpd to be used in a service with the systemd
`Type=notify` (see [systemd.service(5)](https://www.freedesktop.org/software/systemd/man/systemd.service.html)
for more information). The module is activated if loaded.

### Example of systemd service unit (more settings are probably needed for production systems)

```
[Unit]
Description=The Apache HTTP Server
After=network.target

[Service]
Type=notify
ExecStart=/usr/local/apache2/bin/httpd -D FOREGROUND -k start
ExecReload=/usr/local/apache2/bin/httpd -k graceful
KillMode=mixed

[Install]
WantedBy=multi-user.target
```

Special attention should be given to how `ExecStop`
and/or `KillMode` are configured for the service. If
configured, an `ExecStop` command should be a
*synchronous operation* which itself exits when the daemon
has terminated. Running `httpd -k stop`
*asynchronously* initiates daemon termination, so does not
satisfy this condition. The example above uses
`KillMode=mixed` so that systemd sends
`SIGTERM` to signal the parent process (and only the
parent) to shut down. The entire process group is then sent
`SIGKILL` after `TimeoutStopSec` elapses, if
any processes are still running. See [systemd.kill(5)](https://www.freedesktop.org/software/systemd/man/systemd.kill.html)
for more information.

This module does not provide support for Systemd socket activation.

`ExtendedStatus` is
enabled by default if the module is loaded. If `ExtendedStatus` is not disabled in
the configuration, run-time load and request statistics are made
available in the `systemctl status` output.

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_systemd)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_systemd)

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_systemd.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_systemd.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
