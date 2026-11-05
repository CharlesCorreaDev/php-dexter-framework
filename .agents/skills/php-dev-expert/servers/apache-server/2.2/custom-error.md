# Custom Error Responses - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/custom-error.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/custom-error.html) to go to the current version of this document.

# Custom Error Responses

Additional functionality allows webmasters to configure the response
of Apache to some error or problem.

Customizable responses can be defined to be activated in the event of
a server detected error or problem.

If a script crashes and produces a "500 Server Error" response,
then this response can be replaced with either some friendlier text or by
a redirection to another URL (local or external).

- ![](./images/down.gif) [Behavior](#behavior)
- ![](./images/down.gif) [Configuration](#configuration)
- ![](./images/down.gif) [Custom Error Responses and Redirects](#custom)

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## Behavior

### Old Behavior

NCSA httpd 1.3 would return some boring old error/problem message
which would often be meaningless to the user, and would provide no
means of logging the symptoms which caused it.

### New Behavior

The server can be asked to:

1. Display some other text, instead of the NCSA hard coded
   messages, or
2. redirect to a local URL, or
3. redirect to an external URL.

Redirecting to another URL can be useful, but only if some
information can be passed which can then be used to explain and/or log
the error/problem more clearly.

To achieve this, Apache will define new CGI-like environment
variables:

`REDIRECT_HTTP_ACCEPT=*/*, image/gif, image/x-xbitmap,
image/jpeg  
REDIRECT_HTTP_USER_AGENT=Mozilla/1.1b2 (X11; I; HP-UX A.09.05
9000/712)  
REDIRECT_PATH=.:/bin:/usr/local/bin:/etc  
REDIRECT_QUERY_STRING=  
REDIRECT_REMOTE_ADDR=121.345.78.123  
REDIRECT_REMOTE_HOST=ooh.ahhh.com  
REDIRECT_SERVER_NAME=crash.bang.edu  
REDIRECT_SERVER_PORT=80  
REDIRECT_SERVER_SOFTWARE=Apache/0.8.15  
REDIRECT_URL=/cgi-bin/buggy.pl`

Note the `REDIRECT_` prefix.

At least `REDIRECT_URL` and
`REDIRECT_QUERY_STRING` will be passed to the
new URL (assuming it's a cgi-script or a cgi-include). The
other variables will exist only if they existed prior to
the error/problem. **None** of these will be
set if your `ErrorDocument` is an
*external* redirect (anything starting with a
scheme name like `http:`, even if it refers to the same host
as the server).

[![top](./images/up.gif)](#page-header)

## Configuration

Use of `ErrorDocument` is enabled
for .htaccess files when the
`AllowOverride` is set accordingly.

Here are some examples...

`ErrorDocument 500 /cgi-bin/crash-recover   
ErrorDocument 500 "Sorry, our script crashed. Oh dear"   
ErrorDocument 500 http://xxx/   
ErrorDocument 404 /Lame_excuses/not_found.html   
ErrorDocument 401 /Subscription/how_to_subscribe.html`

The syntax is,

`ErrorDocument <3-digit-code> <action>`

where the action can be,

1. Text to be displayed. Wrap the text with quotes (").
2. An external URL to redirect to.
3. A local URL to redirect to.

[![top](./images/up.gif)](#page-header)

## Custom Error Responses and Redirects

Apache's behavior to redirected URLs has been modified so
that additional environment variables are available to a
script/server-include.

### Old behavior

Standard CGI vars were made available to a script which
has been redirected to. No indication of where the
redirection came from was provided.

### New behavior

A new batch of environment variables will be initialized
for use by a script which has been redirected to. Each new
variable will have the prefix `REDIRECT_`.
`REDIRECT_` environment variables are created from
the CGI environment variables which existed prior to the
redirect, they are renamed with a `REDIRECT_`
prefix, *i.e.*, `HTTP_USER_AGENT` becomes
`REDIRECT_HTTP_USER_AGENT`. In addition to these
new variables, Apache will define `REDIRECT_URL`
and `REDIRECT_STATUS` to help the script trace its
origin. Both the original URL and the URL being redirected to
can be logged in the access log.

If the ErrorDocument specifies a local redirect to a CGI
script, the script should include a "`Status:`"
header field in its output in order to ensure the propagation
all the way back to the client of the error condition that
caused it to be invoked. For instance, a Perl ErrorDocument
script might include the following:

`...   
print "Content-type: text/html\n";   
printf "Status: %s Condition Intercepted\n", $ENV{"REDIRECT_STATUS"};   
...`

If the script is dedicated to handling a particular error
condition, such as `404 Not Found`, it can
use the specific code and error text instead.

Note that the script *must* emit an appropriate
`Status:` header (such as `302 Found`), if the
response contains a `Location:` header (in order to issue a
client side redirect). Otherwise the `Location:` header may
have no effect.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/custom-error.html "English") |
[es](https://httpd.apache.org/docs/2.2/pt-br/es/custom-error.html "Español") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/custom-error.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/custom-error.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/custom-error.html "Türkçe")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
