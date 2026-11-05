# File Descriptor Limits - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/vhosts/fd-limits.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](vhosts.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Virtual Hosts](vhosts.md)

# File Descriptor Limits

When using a large number of Virtual Hosts, Apache may run
out of available file descriptors (sometimes called file
handles) if each Virtual Host specifies different log
files. The total number of file descriptors used by Apache is
one for each distinct error log file, one for every other log
file directive, plus 10-20 for internal use. Unix operating
systems limit the number of file descriptors that may be used
by a process; the limit is typically 64, and may usually be
increased up to a large hard-limit.

Although Apache attempts to increase the limit as required,
this may not work if:

1. Your system does not provide the `setrlimit()`
   system call.
2. The `setrlimit(RLIMIT_NOFILE)` call does not
   function on your system (such as Solaris 2.3)
3. The number of file descriptors required exceeds the hard
   limit.
4. Your system imposes other limits on file descriptors,
   such as a limit on stdio streams only using file descriptors
   below 256. (Solaris 2)

In the event of problems you can:

- Reduce the number of log files; don't specify log files
  in the `<VirtualHost>`
  sections, but only log to the main log files. (See [Splitting up your log files](#splitlogs), below, for more
  information on doing this.)
- If your system falls into 1 or 2 (above), then increase the
  file descriptor limit before starting Apache, using a
  script like:

  `#!/bin/sh  
  ulimit -S -n 100  
  exec httpd`

[![top](../images/up.gif)](#page-header)

## Splitting up your log files [¶](#splitlogs "Permanent link")

If you want to log multiple virtual hosts to the same log file, you
may want to split up the log files afterwards in order to run
statistical analysis of the various virtual hosts. This can be
accomplished in the following manner.

First, you will need to add the virtual host information to the log
entries. This can be done using the `LogFormat`
directive, and the `%v` variable. Add this to the beginning
of your log format string:

```
LogFormat "%v %h %l %u %t \"%r\" %>s %b" vhost
CustomLog logs/multiple_vhost_log vhost
```

This will create a log file in the common log format, but with the
canonical virtual host (whatever appears in the
`ServerName` directive) prepended to
each line. (See `mod_log_config` for
more about customizing your log files.)

When you wish to split your log file into its component parts (one
file per virtual host), you can use the program `split-logfile` to accomplish
this. You'll find this program in the `support` directory
of the Apache distribution.

Run this program with the command:

`split-logfile < /logs/multiple_vhost_log`

This program, when run with the name of your vhost log file, will
generate one file for each virtual host that appears in your log file.
Each file will be called `hostname.log`.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/vhosts/fd-limits.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/vhosts/fd-limits.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/vhosts/fd-limits.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/vhosts/fd-limits.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/vhosts/fd-limits.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
