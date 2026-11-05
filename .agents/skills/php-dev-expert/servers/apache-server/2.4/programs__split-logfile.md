# split-logfile - Split up multi-vhost logfiles - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/programs/split-logfile.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Programs](programs.md)

# split-logfile - Split up multi-vhost logfiles

This perl script will take a combined Web server access log file and
break its contents into separate files. It assumes that the first field of
each line is the virtual host identity, put there using the "`%v`"
variable in `LogFormat`.

[![top](../images/up.gif)](#page-header)

## Usage [¶](#split-logfile "Permanent link")

Create a log file with virtual host information in it:

```
LogFormat "%v %h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-agent}i\"" combined_plus_vhost
CustomLog logs/access_log combined_plus_vhost
```

Log files will be created, in the directory where you run the
script, for each virtual host name that appears in the combined log file.
These logfiles will named after the hostname, with a
`.log` file extension.

The combined log file is read from stdin. Records read will be appended
to any existing log files.

`split-logfile < access_log`

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/programs/split-logfile.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/programs/split-logfile.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
