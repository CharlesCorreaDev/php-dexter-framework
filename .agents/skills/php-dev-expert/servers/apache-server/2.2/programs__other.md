# Other Programs - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/programs/other.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Programs](programs.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/programs/other.html) to go to the current version of this document.

# Other Programs

The following programs are simple support programs included with the
Apache HTTP Server which do not have their own manual pages. They are not
installed automatically. You can find them after the configuration process
in the `support/` directory.

- ![](../images/down.gif) [log\_server\_status](#log_server_status)
- ![](../images/down.gif) [split-logfile](#split-logfile)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## log\_server\_status

This perl script is designed to be run at a frequent interval by
something like cron. It connects to the server and downloads the status
information. It reformats the information to a single line and logs it to
a file. Adjust the variables at the top of the script to specify the
location of the resulting logfile.

[![top](../images/up.gif)](#page-header)

## split-logfile

This perl script will take a combined Web server access log file and
break its contents into separate files. It assumes that the first field of
each line is the virtual host identity (put there by "`%v`"), and
that the logfiles should be named that + "`.log`" in the current
directory.

The combined log file is read from stdin. Records read will be appended
to any existing log files.

`split-logfile < access_log`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/programs/other.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/programs/other.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/programs/other.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
