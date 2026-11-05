# Configuration | Perl | External Applications | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/perl/configuration/

---

# Configuration[¶](#configuration "Permanent link")

LiteSpeed Web Server comes with a persistent Perl CGI daemon which can run Perl CGI scripts without modification, just like `mod_perl` in Apache.

## For a Control Panel Environment[¶](#for-a-control-panel-environment "Permanent link")

### Set up a Perl FastCGI External App and Script Handler[¶](#set-up-a-perl-fastcgi-external-app-and-script-handler "Permanent link")

If you configure LSWS to run Perl under a control panel environment, such as cPanel, you need to configure it as a Fast CGI application, and then add a script handler for the `pl` suffix. The Perl CGI daemon is located at `/usr/local/lsws/fcgi-bin/lsperld.fpl`

[![](../images/configuration01.png)](https://docs.litespeedtech.com/lsws/extapp/perl/images/configuration01.png)

[![](../images/configuration02.png)](https://docs.litespeedtech.com/lsws/extapp/perl/images/configuration02.png)

```
    <extProcessor>
      <type>fcgi</type>
      <name>PerlFastCGI</name>
      <address>uds://tmp/lshttpd/perl.sock</address>
      <maxConns>35</maxConns>
      <env>FCGI_PERL_MAX_REQ=1000</env>
      <env>LSAPI_CHILDREN=35</env>
      <initTimeout>60</initTimeout>
      <retryTimeout>0</retryTimeout>
      <persistConn>1</persistConn>
      <pcKeepAliveTimeout>30</pcKeepAliveTimeout>
      <respBuffer>0</respBuffer>
      <autoStart>1</autoStart>
      <path>/usr/local/lsws/fcgi-bin/lsperld.fpl</path>
      <backlog>100</backlog>
      <instances>1</instances>
      <memSoftLimit>2074M</memSoftLimit>
      <memHardLimit>2074M</memHardLimit>
      <procSoftLimit>400</procSoftLimit>
      <procHardLimit>500</procHardLimit>
    </extProcessor>
```

```
   <scriptHandler>
      <suffix>pl</suffix>
      <type>fcgi</type>
      <handler>PerlFastCGI</handler>
    </scriptHandler>
```

Restart LiteSpeed Web Server.

### Testing on cPanel[¶](#testing-on-cpanel "Permanent link")

For a Perl or CGI script to run in a control panel environment, normally you should place the script in a designated directory such as `/cgi-bin/`, otherwise it may not work.

You can create a simple test script `hello.pl` under `/cgi-bin/`

```
  #!/usr/bin/perl
  use strict;
  use warnings;
  print "Content-type: text/html\n\n";
  print("Hello World\n");
```

You can also run perl from the command line to verify the error:

```
  perl -w hello.pl
```

Visit `https://example.com/cgi-bin/hello.pl` from the browser to see if it works. Be sure to replace `example.com` with your own domain name.

If it works from the command line but doesn't work from the browser, most likely this is caused by an `x` permission issue. Perl or the CGI script will need to allow everyone `x` permission, like so:

```
  chmod 755 hello.pl
```

Perl script errors are beyond our support scope and you are encouraged to check [cPanel's documentation](https://docs.cpanel.net/knowledge-base/general-systems-administration/troubleshooting-guide-for-perl-and-cgi-scripts/) to troubleshoot similar CGI/Perl issues on cPanel.

## For LSWS Native Configuration[¶](#for-lsws-native-configuration "Permanent link")

### Perl FastCGI for LSWS Native Configuration[¶](#perl-fastcgi-for-lsws-native-configuration "Permanent link")

For LSWS native configuration, you also need to set up the Fast CGI application and add a script handler for the `pl` suffix.

As `lsperld.fpl` utilizes the Fast CGI interface, it is usually already configured for control panel environments. That may not be the case in a LSWS + bare OS situation. You may need to install the Perl Fast CGI module `FCGI.pm`.

The Perl Fast CGI module is available at CPAN(Comprehensive Perl Archive Network).

On CentOS7, add the `perl-CPAN` package first:

```
yum install epel-release
yum install gcc
yum install perl-CPAN
```

The following command can be used to install `FCGI.pm` through CPAN:

```
perl -MCPAN -e 'install FCGI'
```

On a CentOS box, you can install `perl-CGI` and `perl-FCGI` packages through:

```
yum install perl-CGI
```

Verify the installed location of `FCGI.pm`.

```
find / -name FCGI.pm
/usr/lib64/perl5/vendor_perl/FCGI.pm
```

In order to deal with the increasing memory usage of a persistent process, the number of requests that a Perl daemon can process is controlled by an environment variable `FCGI_PERL_MAX_REQ`. The default value is `500`.

For example: `FCGI_PERL_MAX_REQ=1000`.

Restart LSWS to make the changes effective.

### Testing[¶](#testing "Permanent link")

Place a test script called `test.pl` in the document root of one of your virtual hosts:

```
#!/usr/bin/perl
print "Content-type:text/html\n\n";
print <<EndOfHTML;
<html><head><title>Perl Environment Variables</title></head>
<body>
<h1>Perl Environment Variables</h1>
EndOfHTML
foreach $key (sort(keys %ENV)) {
  print "$key = $ENV{$key}<br>\n";
}
print "</body></html>";
```

You should see something similar to the following when visting `http://example.com/test.pl`:

```
Perl Environment Variables
DOCUMENT_ROOT = /usr/local/lsws/DEFAULT/html
FCGI_PERL_MAX_REQ = 1000
FCGI_ROLE = RESPONDER
GATEWAY_INTERFACE = CGI-PerlEx/1.1
HTTP_ACCEPT = text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8
HTTP_ACCEPT_ENCODING = gzip, deflate
HTTP_ACCEPT_LANGUAGE = en-US,en;q=0.9
HTTP_CONNECTION = keep-alive
HTTP_COOKIE = SESS3d805002e809eafb1aa4295801ff28d0=AXgcoPkfgngK9KYuHS4wIn9eVLHEndfHAy7Ys9Gnj4M; COMBIN=2e9910cb4771588a621ae6371c01550bdbe3e6d498788981dca50a1ab6bef6d3; COMINF=bypass_varnish
HTTP_HOST = 192.168.0.178:8088
HTTP_UPGRADE_INSECURE_REQUESTS = 1
HTTP_USER_AGENT = Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36
LSAPI_CHILDREN = 35
LSAPI_PADDING = leave_some_room_to_avoid_overwrite_important_env
PATH = /bin:/usr/bin:/usr/local/bin
QUERY_STRING = 
REMOTE_ADDR = 192.168.0.198
REMOTE_PORT = 4322
REQUEST_METHOD = GET
REQUEST_URI = /test.pl
SCRIPT_FILENAME = /usr/local/lsws/DEFAULT/html/test.pl
SCRIPT_NAME = /test.pl
SERVER_ADDR = 192.168.0.178
SERVER_ADMIN = 
SERVER_NAME = 192.168.0.178
SERVER_PORT = 8088
SERVER_PROTOCOL = HTTP/1.1
SERVER_SOFTWARE = LiteSpeed
```

## Troubleshooting[¶](#troubleshooting "Permanent link")

### Installation Error on LSWS Native[¶](#installation-error-on-lsws-native "Permanent link")

Without the `perl-CPAN` package installed, installation may run into the following error:

```
Can't locate CPAN.pm in @INC (@INC contains: /usr/local/lib64/perl5 /usr/local/share/perl5 /usr/lib64/perl5/vendor_perl /usr/share/perl5/vendor_perl /usr/lib64/perl5 /usr/share/perl5 .).
BEGIN failed--compilation aborted.
```

Without installing `FCGI.pm`, you may run into the following error in `stderr.log` and see a 503 error on screen.

```
[STDERR] Can't locate FCGI.pm in @INC (@INC contains: /usr/local/lib64/perl5 /usr/local/share/perl5 /usr/lib64/perl5/vendor_perl /usr/share/perl5/vendor_perl /usr/lib64/perl5 /usr/share/perl5 .) at /usr/local/lsws/fcgi-bin/lsperld.fpl line 3
```

### lscgid: execve() No such file error[¶](#lscgid-execve-no-such-file-error "Permanent link")

A simple test perl script on a cPanel server runs into the following error and generates a 500 error code:

```
lscgid: execve():/home/user1/public_html/test.pl: No such file or directory
```

[![](../images/configuration03.png)](https://docs.litespeedtech.com/lsws/extapp/perl/images/configuration03.png)

But `/home/user1/public_html/test.pl` *does* exist. So why the `No such file or directory` error?

Inspect the file in vi:

```
cd /home/user1/public_html/
vi test.pl
```

There is a `^M` at the end of each line, which means the file is in DOS/Windows format, not Unix format:

```
#!/usr/bin/perl^M
print "Content-type:text/html\n\n";^M
print <<EndOfHTML;^M
<html><head><title>Perl Environment Variables</title></head>^M
<body>^M
<h1>Perl Environment Variables</h1>^M
EndOfHTML^M
foreach $key (sort(keys %ENV)) {^M
  print "$key = $ENV{$key}<br>\n";^M
}^M
print "</body></html>";
```

To test further, try:

```
[[ $(file test.pl) =~ CRLF ]] && echo dos
```

It returns:

```
dos
```

Because of the difference in DOS vs Unix format, LiteSpeed lscgid can not recognize the `test.pl` file. Hence the `No such file or directory` error.

To fix the issue, you will need to convert from DOS format to Unix. There are many ways to do so, including the following `awk` command:

```
mv test.pl test.pl.dos
awk 'sub("$", "\r")' test.pl.dos > test.pl
```

You can inspect `test.pl` again in vi to verify the file format. You should no longer see the trailing `^M` in each line.

```
#!/usr/bin/perl
print "Content-type:text/html\n\n";
print <<EndOfHTML;
<html><head><title>Perl Environment Variables</title></head>
<body>
<h1>Perl Environment Variables</h1>
EndOfHTML
foreach $key (sort(keys %ENV)) {
print "$key = $ENV{$key}<br>\n";
}
```

After the conversion, you should find the perl script is working perfectly.
