# Apache Tutorial: Dynamic Content with CGI - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/howto/cgi.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](howto.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [How-To / Tutorials](howto.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/howto/cgi.html) to go to the current version of this document.

# Apache Tutorial: Dynamic Content with CGI

- ![](../images/down.gif) [Introduction](#intro)
- ![](../images/down.gif) [Configuring Apache to permit CGI](#configuring)
- ![](../images/down.gif) [Writing a CGI program](#writing)
- ![](../images/down.gif) [But it's still not working!](#troubleshoot)
- ![](../images/down.gif) [What's going on behind the scenes?](#behindscenes)
- ![](../images/down.gif) [CGI modules/libraries](#libraries)
- ![](../images/down.gif) [For more information](#moreinfo)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Introduction

| Related Modules | Related Directives |
| --- | --- |
| - `mod_alias` - `mod_cgi` - `mod_cgid` | - `AddHandler` - `Options` - `ScriptAlias` |

The CGI (Common Gateway Interface) defines a way for a web
server to interact with external content-generating programs,
which are often referred to as CGI programs or CGI scripts. It
is the simplest, and most common, way to put dynamic content on
your web site. This document will be an introduction to setting
up CGI on your Apache web server, and getting started writing
CGI programs.

[![top](../images/up.gif)](#page-header)

## Configuring Apache to permit CGI

In order to get your CGI programs to work properly, you'll
need to have Apache configured to permit CGI execution. There
are several ways to do this.

Note: If Apache has been built with shared module
support you need to ensure that the module is loaded; in your
`httpd.conf` you need to make sure the
`LoadModule`
directive has not been commented out. A correctly configured directive
may look like this:

```
LoadModule cgid_module modules/mod_cgid.so
```

On Windows, or using a non-threaded MPM like prefork, A correctly
configured directive may look like this:

```
LoadModule cgi_module modules/mod_cgi.so
```

### ScriptAlias

The
`ScriptAlias`
directive tells Apache that a particular directory is set
aside for CGI programs. Apache will assume that every file in
this directory is a CGI program, and will attempt to execute
it, when that particular resource is requested by a
client.

The `ScriptAlias`
directive looks like:

`ScriptAlias /cgi-bin/ /usr/local/apache2/cgi-bin/`

The example shown is from your default `httpd.conf`
configuration file, if you installed Apache in the default
location. The `ScriptAlias`
directive is much like the `Alias` directive, which defines a URL prefix that
is to mapped to a particular directory. `Alias`
and `ScriptAlias` are usually used for
directories that are outside of the `DocumentRoot` directory. The difference between
`Alias` and `ScriptAlias`
is that `ScriptAlias` has the added meaning
that everything under that URL prefix will be considered a CGI
program. So, the example above tells Apache that any request for a
resource beginning with `/cgi-bin/` should be served from
the directory `/usr/local/apache2/cgi-bin/`, and should be
treated as a CGI program.

For example, if the URL
`http://www.example.com/cgi-bin/test.pl`
is requested, Apache will attempt to execute the file
`/usr/local/apache2/cgi-bin/test.pl`
and return the output. Of course, the file will have to
exist, and be executable, and return output in a particular
way, or Apache will return an error message.

### CGI outside of ScriptAlias directories

CGI programs are often restricted to `ScriptAlias`'ed directories for security reasons.
In this way, administrators can tightly control who is allowed to
use CGI programs. However, if the proper security precautions are
taken, there is no reason why CGI programs cannot be run from
arbitrary directories. For example, you may wish to let users
have web content in their home directories with the
`UserDir` directive.
If they want to have their own CGI programs, but don't have access to
the main `cgi-bin` directory, they will need to be able to
run CGI programs elsewhere.

There are two steps to allowing CGI execution in an arbitrary
directory. First, the `cgi-script` handler must be
activated using the `AddHandler` or `SetHandler` directive. Second,
`ExecCGI` must be specified in the `Options` directive.

### Explicitly using Options to permit CGI execution

You could explicitly use the `Options` directive, inside your main server configuration
file, to specify that CGI execution was permitted in a particular
directory:

`<Directory /usr/local/apache2/htdocs/somedir>  

Options +ExecCGI  
</Directory>`

The above directive tells Apache to permit the execution
of CGI files. You will also need to tell the server what
files are CGI files. The following `AddHandler` directive tells the server to treat all
files with the `cgi` or `pl` extension as CGI
programs:

`AddHandler cgi-script .cgi .pl`

### .htaccess files

The [`.htaccess` tutorial](howto__htaccess.md)
shows how to activate CGI programs if you do not have
access to `httpd.conf`.

### User Directories

To allow CGI program execution for any file ending in
`.cgi` in users' directories, you can use the
following configuration.

`<Directory /home/*/public_html>  

Options +ExecCGI  
AddHandler cgi-script .cgi  
</Directory>`

If you wish designate a `cgi-bin` subdirectory of
a user's directory where everything will be treated as a CGI
program, you can use the following.

`<Directory /home/*/public_html/cgi-bin>  

Options ExecCGI  
SetHandler cgi-script  
</Directory>`

[![top](../images/up.gif)](#page-header)

## Writing a CGI program

There are two main differences between ``regular''
programming, and CGI programming.

First, all output from your CGI program must be preceded by
a [MIME-type](glossary.md#mime-type "see glossary") header. This is HTTP header that tells the client
what sort of content it is receiving. Most of the time, this
will look like:

`Content-type: text/html`

Secondly, your output needs to be in HTML, or some other
format that a browser will be able to display. Most of the
time, this will be HTML, but occasionally you might write a CGI
program that outputs a gif image, or other non-HTML
content.

Apart from those two things, writing a CGI program will look
a lot like any other program that you might write.

### Your first CGI program

The following is an example CGI program that prints one
line to your browser. Type in the following, save it to a
file called `first.pl`, and put it in your
`cgi-bin` directory.

`#!/usr/bin/perl  
print "Content-type: text/html\n\n";  
print "Hello, World.";`

Even if you are not familiar with Perl, you should be able
to see what is happening here. The first line tells Apache
(or whatever shell you happen to be running under) that this
program can be executed by feeding the file to the
interpreter found at the location `/usr/bin/perl`.
The second line prints the content-type declaration we
talked about, followed by two carriage-return newline pairs.
This puts a blank line after the header, to indicate the end
of the HTTP headers, and the beginning of the body. The third
line prints the string "Hello, World.". And that's the end
of it.

If you open your favorite browser and tell it to get the
address

`http://www.example.com/cgi-bin/first.pl`

or wherever you put your file, you will see the one line
`Hello, World.` appear in your browser window.
It's not very exciting, but once you get that working, you'll
have a good chance of getting just about anything working.

[![top](../images/up.gif)](#page-header)

## But it's still not working!

There are four basic things that you may see in your browser
when you try to access your CGI program from the web:

The output of your CGI program
:   Great! That means everything worked fine. If the output is correct,
    but the browser is not processing it correctly, make sure you have the
    correct `Content-Type` set in your CGI program.

The source code of your CGI program or a "POST Method Not Allowed" message
:   That means that you have not properly configured Apache
    to process your CGI program. Reread the section on
    [configuring
    Apache](#configuring) and try to find what you missed.

A message starting with "Forbidden"
:   That means that there is a permissions problem. Check the
    [Apache error log](#errorlogs) and the section below on
    [file permissions](#permissions).

A message saying "Internal Server Error"
:   If you check the
    [Apache error log](#errorlogs), you will probably
    find that it says "Premature end of
    script headers", possibly along with an error message
    generated by your CGI program. In this case, you will want to
    check each of the below sections to see what might be
    preventing your CGI program from emitting the proper HTTP
    headers.

### File permissions

Remember that the server does not run as you. That is,
when the server starts up, it is running with the permissions
of an unprivileged user - usually `nobody`, or
`www` - and so it will need extra permissions to
execute files that are owned by you. Usually, the way to give
a file sufficient permissions to be executed by `nobody`
is to give everyone execute permission on the file:

`chmod a+x first.pl`

Also, if your program reads from, or writes to, any other
files, those files will need to have the correct permissions
to permit this.

### Path information and environment

When you run a program from your command line, you have
certain information that is passed to the shell without you
thinking about it. For example, you have a `PATH`,
which tells the shell where it can look for files that you
reference.

When a program runs through the web server as a CGI program,
it may not have the same `PATH`. Any programs that you
invoke in your CGI program (like `sendmail`, for
example) will need to be specified by a full path, so that the
shell can find them when it attempts to execute your CGI
program.

A common manifestation of this is the path to the script
interpreter (often `perl`) indicated in the first
line of your CGI program, which will look something like:

`#!/usr/bin/perl`

Make sure that this is in fact the path to the
interpreter.

When editing CGI scripts on Windows, end-of-line characters may be
appended to the interpreter path. Ensure that files are then
transferred to the server in ASCII mode. Failure to do so may
result in "Command not found" warnings from the OS, due to the
unrecognized end-of-line character being interpreted as a part of
the interpreter filename.

### Missing environment variables

If your CGI program depends on non-standard [environment variables](#env), you will need to
assure that those variables are passed by Apache.

When you miss HTTP headers from the environment, make
sure they are formatted according to
[RFC 2616](http://tools.ietf.org/html/rfc2616),
section 4.2: Header names must start with a letter,
followed only by letters, numbers or hyphen. Any header
violating this rule will be dropped silently.

### Program errors

Most of the time when a CGI program fails, it's because of
a problem with the program itself. This is particularly true
once you get the hang of this CGI stuff, and no longer make
the above two mistakes. The first thing to do is to make
sure that your program runs from the command line before
testing it via the web server. For example, try:

`cd /usr/local/apache2/cgi-bin  
./first.pl`

(Do not call the `perl` interpreter. The shell
and Apache should find the interpreter using the [path information](#pathinformation) on the first line of
the script.)

The first thing you see written by your program should be
a set of HTTP headers, including the `Content-Type`,
followed by a blank line. If you see anything else, Apache will
return the `Premature end of script headers` error if
you try to run it through the server. See [Writing a CGI program](#writing) above for more
details.

### Error logs

The error logs are your friend. Anything that goes wrong
generates message in the error log. You should always look
there first. If the place where you are hosting your web site
does not permit you access to the error log, you should
probably host your site somewhere else. Learn to read the
error logs, and you'll find that almost all of your problems
are quickly identified, and quickly solved.

### Suexec

The [suexec](suexec.md) support program
allows CGI programs to be run under different user permissions,
depending on which virtual host or user home directory they are
located in. Suexec has very strict permission checking, and any
failure in that checking will result in your CGI programs
failing with `Premature end of script headers`.

To check if you are using suexec, run `apachectl
-V` and check for the location of `SUEXEC_BIN`.
If Apache finds an `suexec` binary there on startup,
suexec will be activated.

Unless you fully understand suexec, you should not be using it.
To disable suexec, simply remove (or rename) the `suexec`
binary pointed to by `SUEXEC_BIN` and then restart the
server. If, after reading about [suexec](suexec.md),
you still wish to use it, then run `suexec -V` to find
the location of the suexec log file, and use that log file to
find what policy you are violating.

[![top](../images/up.gif)](#page-header)

## What's going on behind the scenes?

As you become more advanced in CGI programming, it will
become useful to understand more about what's happening behind
the scenes. Specifically, how the browser and server
communicate with one another. Because although it's all very
well to write a program that prints "Hello, World.", it's not
particularly useful.

### Environment variables

Environment variables are values that float around you as
you use your computer. They are useful things like your path
(where the computer searches for the actual file
implementing a command when you type it), your username, your
terminal type, and so on. For a full list of your normal,
every day environment variables, type
`env` at a command prompt.

During the CGI transaction, the server and the browser
also set environment variables, so that they can communicate
with one another. These are things like the browser type
(Netscape, IE, Lynx), the server type (Apache, IIS, WebSite),
the name of the CGI program that is being run, and so on.

These variables are available to the CGI programmer, and
are half of the story of the client-server communication. The
complete list of required variables is at
[Common Gateway
Interface RFC](http://www.ietf.org/rfc/rfc3875).

This simple Perl CGI program will display all of the
environment variables that are being passed around. Two
similar programs are included in the
`cgi-bin`
directory of the Apache distribution. Note that some
variables are required, while others are optional, so you may
see some variables listed that were not in the official list.
In addition, Apache provides many different ways for you to
[add your own environment variables](env.md)
to the basic ones provided by default.

`#!/usr/bin/perl  
print "Content-type: text/html\n\n";  
foreach $key (keys %ENV) {  

print "$key --> $ENV{$key}<br>";  
}`

### STDIN and STDOUT

Other communication between the server and the client
happens over standard input (`STDIN`) and standard
output (`STDOUT`). In normal everyday context,
`STDIN` means the keyboard, or a file that a
program is given to act on, and `STDOUT`
usually means the console or screen.

When you `POST` a web form to a CGI program,
the data in that form is bundled up into a special format
and gets delivered to your CGI program over `STDIN`.
The program then can process that data as though it was
coming in from the keyboard, or from a file

The "special format" is very simple. A field name and
its value are joined together with an equals (=) sign, and
pairs of values are joined together with an ampersand
(&). Inconvenient characters like spaces, ampersands, and
equals signs, are converted into their hex equivalent so that
they don't gum up the works. The whole data string might look
something like:

`name=Rich%20Bowen&city=Lexington&state=KY&sidekick=Squirrel%20Monkey`

You'll sometimes also see this type of string appended to
a URL. When that is done, the server puts that string
into the environment variable called
`QUERY_STRING`. That's called a `GET`
request. Your HTML form specifies whether a `GET`
or a `POST` is used to deliver the data, by setting the
`METHOD` attribute in the `FORM` tag.

Your program is then responsible for splitting that string
up into useful information. Fortunately, there are libraries
and modules available to help you process this data, as well
as handle other of the aspects of your CGI program.

[![top](../images/up.gif)](#page-header)

## CGI modules/libraries

When you write CGI programs, you should consider using a
code library, or module, to do most of the grunt work for you.
This leads to fewer errors, and faster development.

If you're writing CGI programs in Perl, modules are
available on [CPAN](http://www.cpan.org/). The most
popular module for this purpose is `CGI.pm`. You might
also consider `CGI::Lite`, which implements a minimal
set of functionality, which is all you need in most programs.

If you're writing CGI programs in C, there are a variety of
options. One of these is the `CGIC` library, from
<http://www.boutell.com/cgic/>.

[![top](../images/up.gif)](#page-header)

## For more information

There are a large number of CGI resources on the web.
The list from the HTML Writers Guild is a great source of answers
to your questions. You can find out more at
<http://www.hwg.org/lists/hwg-servers/>.

The current CGI specification is available in the
[Common Gateway
Interface RFC](http://www.ietf.org/rfc/rfc3875).

When you post a question about a CGI problem that you're
having, whether to a mailing list, or to a newsgroup, make sure
you provide enough information about what happened, what you
expected to happen, and how what actually happened was
different, what server you're running, what language your CGI
program was in, and, if possible, the offending code. This will
make finding your problem much simpler.

Note that questions about CGI problems should **never**
be posted to the Apache bug database unless you are sure you
have found a problem in the Apache source code.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/howto/cgi.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/howto/cgi.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/howto/cgi.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
