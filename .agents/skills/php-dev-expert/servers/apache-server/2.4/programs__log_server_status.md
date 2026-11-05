# log_server_status - Log periodic status summaries - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/programs/log_server_status.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Programs](programs.md)

# log\_server\_status - Log periodic status summaries

This perl script is designed to be run at a frequent interval by
something like cron. It connects to the server and downloads the status
information. It reformats the information to a single line and logs it to
a file. Adjust the variables at the top of the script to specify the
location of the resulting logfile. `mod_status` will
need to be loaded and configured in order for this script to do its
job.

[![top](../images/up.gif)](#page-header)

## Usage [¶](#configure "Permanent link")

The script contains the following section.

```
my $wherelog = "/usr/local/apache2/logs/";  # Logs will be like "/usr/local/apache2/logs/19960312"
my $server   = "localhost";        # Name of server, could be "www.foo.com"
my $port     = "80";               # Port on server
my $request = "/server-status/?auto";    # Request to send
```

You'll need to ensure that these variables have the correct values,
and you'll need to have the `/server-status` handler
configured at the location specified, and the specified log location
needs to be writable by the user which will run the script.

Run the script periodically via cron to produce a daily log file,
which can then be used for statistical analysis.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/programs/log_server_status.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/programs/log_server_status.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
