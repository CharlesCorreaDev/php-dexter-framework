# Running a High-Performance Web Server on HPUX - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/platform/perf-hp.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](platform.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Platform Specific Notes](platform.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/platform/perf-hp.html) to go to the current version of this document.

# Running a High-Performance Web Server on HPUX

```
Date: Wed, 05 Nov 1997 16:59:34 -0800
From: Rick Jones <raj@cup.hp.com>
Reply-To: raj@cup.hp.com
Organization: Network Performance
Subject: HP-UX tuning tips
```

Here are some tuning tips for HP-UX to add to the tuning page.

For HP-UX 9.X: Upgrade to 10.20  
For HP-UX 10.[00|01|10]: Upgrade to 10.20

For HP-UX 10.20:

Install the latest cumulative ARPA Transport Patch. This
will allow you to configure the size of the TCP connection
lookup hash table. The default is 256 buckets and must be set
to a power of two. This is accomplished with adb against the
\*disc\* image of the kernel. The variable name is `tcp_hash_size`.
Notice that it's critically important that you use "`W`"
to write a 32 bit quantity, not "`w`" to write a 16 bit
value when patching the disc image because the `tcp_hash_size`
variable is a 32 bit quantity.

How to pick the value? Examine the output of <ftp://ftp.cup.hp.com/dist/networking/tools/connhist>
and see how many total TCP connections exist on the system. You
probably want that number divided by the hash table size to be
reasonably small, say less than 10. Folks can look at HP's
SPECweb96 disclosures for some common settings. These can be
found at <http://www.specbench.org/>.
If an HP-UX system was performing at 1000 SPECweb96 connections
per second, the `TIME_WAIT` time of 60 seconds would mean
60,000 TCP "connections" being tracked.

Folks can check their listen queue depths with <ftp://ftp.cup.hp.com/dist/networking/misc/listenq>.

If folks are running Apache on a PA-8000 based system, they
should consider "chatr'ing" the Apache executable to have a
large page size. This would be "`chatr +pi L <BINARY>`".
The GID of the running executable must have `MLOCK` privileges.
`Setprivgrp(1m)` should be consulted for assigning
`MLOCK`. The change can be validated by running Glance
and examining the memory regions of the server(s) to make sure that
they show a non-trivial fraction of the text segment being locked.

If folks are running Apache on MP systems, they might
consider writing a small program that uses `mpctl()`
to bind processes to processors. A simple `pid % numcpu`
algorithm is probably sufficient. This might even go into the
source code.

If folks are concerned about the number of `FIN_WAIT_2`
connections, they can use nettune to shrink the value of
`tcp_keepstart`. However, they should be careful there -
certainly do not make it less than oh two to four minutes. If
`tcp_hash_size` has been set well, it is probably OK to
let the `FIN_WAIT_2`'s take longer to timeout (perhaps
even the default two hours) - they will not on average have a big
impact on performance.

There are other things that could go into the code base, but
that might be left for another email. Feel free to drop me a
message if you or others are interested.

sincerely,

rick jones

<http://www.netperf.org/netperf/>

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/platform/perf-hp.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/platform/perf-hp.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
