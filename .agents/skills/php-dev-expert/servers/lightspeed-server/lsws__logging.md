# Logging | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/logging/

---

# Logging Tools[¶](#logging-tools "Permanent link")

## Splunk[¶](#splunk "Permanent link")

You can send LiteSpeed logs to a Syslog or Splunk logging server.

The following script is helpful and can be easily customized to fit your environment. Use it to send error and/or server logs from any LiteSpeed server product to a centralized location. This can be a central syslog server, or a splunk data gather.

For this example, the logs are syslogged to a remote server without any alteration.

We'll demonstrate the following: - Install Perl modules - Copy the script to the server - Test the script - Run as daemon in the background

### Install Perl Modules[¶](#install-perl-modules "Permanent link")

Install the necessary Perl modules from CPAN:

```
perl -MCPAN -e "install File::Tail::Multi"
prel -MCPAN -e "install Sys::Syslog"
```

### Copy Script to Server[¶](#copy-script-to-server "Permanent link")

Here is the Perl script. If you have the Perl binary in a location other than `/usr/bin/perl`, you'll need to modify the script's first line.

```
#!/usr/bin/perl

use strict;
use File::Tail::Multi;
use Sys::Syslog;

#Put all the litespeed error/stderr/php error log files here
my @log_files = ["/opt/lsws/logs/error.log","/opt/lsws/logs/stderr.log","/opt/lsws/logs/php.err"];

#Create this file if it does not exist. Script will use this file to keep
#a record of where it left off for each tailing file so it will never re-read old data.
my $tail_checkpoint_file = "/tmp/perl_tail.lastrun";

#Your syslog udp server. Make sure udp port 514 is open
my $syslog_server = "127.0.0.1";

#Let syslog use remote udp protocol
Sys::Syslog::setlogsock("udp", $syslog_server);

#Setting syslog message options. The firt param will prepend litespeed to all outgoing messages
openlog("litespeed", 'nowait', 'local0');

#Create the tail/watch instance.
my $myTail = File::Tail::Multi->new( 
    Function => \&fn_read_lines,
    LastRun_File => $tail_checkpoint_file,
    Files => @log_files,
    RemoveDuplicate => 1,
);

print("Log watcher running...\n");

while(1) {
    #Read lines from watched files if there are new lines to read
    $myTail->read;

    #for debug purpose
    #$myTail->print;

    #1 second is good for almost real-time without chewing up cpu
    sleep 1;
}

#This function is called when there are new lines read
sub fn_read_lines {
    my $lines_ref = shift;   
    foreach ( @{$lines_ref} ) {
        chomp; #removes new line 
        syslog("info",$_);
    }
}
```

### Test Script[¶](#test-script "Permanent link")

To verify that the code is working. Run the script via command line:

```
perl watch.pl
```

Or, if you have the executable bit set on the script, you can use:

```
./watch.pl
```

### Run in background[¶](#run-in-background "Permanent link")

To run the script as a daemon/background process, use `nohup`:

```
nohup perl watch.pl &
```

## Piped Loggers[¶](#piped-loggers "Permanent link")

A piped logger is a standalone application that receives access log data sent by the web server through a pipe on its STDIN stream. This makes flexible logging possible, like logging to a database or logging to a remote server.

### A piped logger example[¶](#a-piped-logger-example "Permanent link")

Here is a simple piped logger written in Perl, which receives logging data from STDIN and append data received to a file on local hard disk:

```
#!/usr/bin/perl
open LOG, '>> ../logs/pipedaccess.log';
select LOG;
$| = 1;
while (<>)
{
   print LOG $_;
}
```

To use a piped logger, first, you need to define an external application with type `Piped Logger`, then go to **Access Log** configuration and select the `Piped logger` from the drop down list. Once a piped logger is set, access log data will be sending to the logger application instead of the access log file.

### Logging through syslog[¶](#logging-through-syslog "Permanent link")

You can configure LSWS to use syslog, logging access to syslog.

First, add the following line to your `/etc/syslog.conf` file:

```
local0.info /var/log/lsws_access_log
```

Then create a logger application with path like this:

```
/usr/bin/logger -p local0.info
```

### Logging to remote server through syslog[¶](#logging-to-remote-server-through-syslog "Permanent link")

To log to a remote server via syslog, you only need to change the syslog configuration in the above example to:

```
local0.info  @ip_or_hostname_of_remote_server
```

### Using syslog-ng[¶](#using-syslog-ng "Permanent link")

`syslogd` is pretty slow. It may not be the best solution for a busy server. [`syslog_ng`](https://www.syslog-ng.com/) is a good replacement for `syslogd`.
