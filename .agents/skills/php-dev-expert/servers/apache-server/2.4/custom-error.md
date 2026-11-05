# Custom Error Responses - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/custom-error.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

# Custom Error Responses

Although the Apache HTTP Server provides generic error responses
in the event of 4xx or 5xx HTTP status codes, these responses are
rather stark, uninformative, and can be intimidating to site users.
You may wish to provide custom error responses which are either
friendlier, or in some language other than English, or perhaps which
are styled more in line with your site layout.

Customized error responses can be defined for any HTTP status
code designated as an error condition - that is, any 4xx or 5xx
status.

Additionally, a set of values are provided, so
that the error document can be customized further based on the
values of these variables, using [Server
Side Includes](howto__ssi.md). Or, you can have error conditions handled by a
cgi program, or other dynamic handler (PHP, mod\_perl, etc) which
makes use of these variables.

- ![](./images/down.gif) [Configuration](#configuration)
- ![](./images/down.gif) [Available Variables](#variables)
- ![](./images/down.gif) [Customizing Error Responses](#custom)
- ![](./images/down.gif) [Multi Language Custom Error Documents](#multi-lang)

[![top](./images/up.gif)](#page-header)

## Configuration [¶](#configuration "Permanent link")

Custom error documents are configured using the `ErrorDocument` directive,
which may be used in global,
virtualhost, or directory context. It may be used in .htaccess files
if `AllowOverride` is set to
FileInfo.

```
ErrorDocument 500 "Sorry, our script crashed. Oh dear"
ErrorDocument 500 /cgi-bin/crash-recover
ErrorDocument 500 http://error.example.com/server_error.html
ErrorDocument 404 /errors/not_found.html
ErrorDocument 401 /subscription/how_to_subscribe.html
```

The syntax of the `ErrorDocument` directive is:

```
ErrorDocument <3-digit-code> <action>
```

where the action will be treated as:

1. A local URL to redirect to (if the action begins with a "/").
2. An external URL to redirect to (if the action is a valid URL).
3. Text to be displayed (if none of the above). The text must be
   wrapped in quotes (") if it consists of more than one word.

When redirecting to a local URL, additional environment variables
are set so that the response can be further customized. They are not sent to
external URLs.

[![top](./images/up.gif)](#page-header)

## Available Variables [¶](#variables "Permanent link")

Redirecting to another URL can be useful, but only if some
information can be passed which can then be used to explain or log
the error condition more clearly.

To achieve this, when the error redirect is sent, additional
environment variables will be set, which will be generated from
the headers provided to the original request by prepending
'REDIRECT\_' onto the original header name. This provides the error
document the context of the original request.

For example, you might receive, in addition to more usual
environment variables, the following.

```
REDIRECT_HTTP_ACCEPT=*/*, image/gif, image/jpeg, image/png
REDIRECT_HTTP_USER_AGENT=Mozilla/5.0 Fedora/3.5.8-1.fc12 Firefox/3.5.8
REDIRECT_PATH=.:/bin:/usr/local/bin:/sbin
REDIRECT_QUERY_STRING=
REDIRECT_REMOTE_ADDR=121.345.78.123
REDIRECT_REMOTE_HOST=client.example.com
REDIRECT_SERVER_NAME=www.example.edu
REDIRECT_SERVER_PORT=80
REDIRECT_SERVER_SOFTWARE=Apache/2.2.15
REDIRECT_URL=/cgi-bin/buggy.pl
```

`REDIRECT_` environment variables are created from
the environment variables which existed prior to the
redirect. They are renamed with a `REDIRECT_`
prefix, *i.e.*, `HTTP_USER_AGENT` becomes
`REDIRECT_HTTP_USER_AGENT`.

`REDIRECT_URL`, `REDIRECT_STATUS`, and
`REDIRECT_QUERY_STRING` are guaranteed to be set, and
the other headers will be set only if they existed prior to the
error condition.

**None** of these will be
set if the `ErrorDocument` target is an
*external* redirect (anything starting with a
scheme name like `http:`, even if it refers to the same host
as the server).

[![top](./images/up.gif)](#page-header)

## Customizing Error Responses [¶](#custom "Permanent link")

If you point your `ErrorDocument` to some variety of
dynamic handler such as a server-side include document, CGI
script, or some variety of other handler, you may wish to use the
available custom environment variables to customize this
response.

If the ErrorDocument specifies a local redirect to a CGI
script, the script should include a "`Status:`"
header field in its output in order to ensure the propagation
all the way back to the client of the error condition that
caused it to be invoked. For instance, a Perl ErrorDocument
script might include the following:

```
...
print  "Content-type: text/html\n";
printf "Status: %s Condition Intercepted\n", $ENV{"REDIRECT_STATUS"};
...
```

If the script is dedicated to handling a particular error
condition, such as `404 Not Found`, it can
use the specific code and error text instead.

Note that if the response contains `Location:`
header (in order to issue a client-side redirect), the script
*must* emit an appropriate `Status:` header
(such as `302 Found`). Otherwise the
`Location:` header may have no effect.

[![top](./images/up.gif)](#page-header)

## Multi Language Custom Error Documents [¶](#multi-lang "Permanent link")

Provided with your installation of the Apache HTTP Server is a
directory of custom error documents translated into 16 different
languages. There's also a configuration file in the
`conf/extra` configuration directory that can be included
to enable this feature.

In your server configuration file, you'll see a line such as:

```
# Multi-language error messages
#Include conf/extra/httpd-multilang-errordoc.conf
```

Uncommenting this `Include` line will enable this
feature, and provide language-negotiated error messages, based on
the language preference set in the client browser.

Additionally, these documents contain various of the
`REDIRECT_` variables, so that additional information can
be provided to the end-user about what happened, and what they can
do now.

These documents can be customized to whatever degree you wish to
provide more useful information to users about your site, and what
they can expect to find there.

`mod_include` and `mod_negotiation`
must be enabled to use this feature.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/custom-error.html "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/custom-error.html "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/custom-error.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/custom-error.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/custom-error.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/custom-error.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
