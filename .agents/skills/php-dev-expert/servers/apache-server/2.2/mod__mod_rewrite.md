# mod_rewrite - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_rewrite.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_rewrite.html) to go to the current version of this document.

# Apache Module mod\_rewrite

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Provides a rule-based rewriting engine to rewrite requested URLs on the fly |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | rewrite\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_rewrite.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 1.3 and later |

### Summary

This module uses a rule-based rewriting engine (based on a
regular-expression parser) to rewrite requested URLs on the
fly. It supports an unlimited number of rules and an
unlimited number of attached rule conditions for each rule, to
provide a really flexible and powerful URL manipulation
mechanism. The URL manipulations can depend on various tests,
of server variables, environment variables, HTTP
headers, or time stamps. Even external database lookups in
various formats can be used to achieve highly granular URL
matching.

This module operates on the full URLs (including the
path-info part) both in per-server context
(`httpd.conf`) and per-directory context
(`.htaccess`) and can generate query-string
parts on result. The rewritten result can lead to internal
sub-processing, external request redirection or even to an
internal proxy throughput.

Further details, discussion, and examples, are provided in the
[detailed mod\_rewrite documentation](rewrite.md).

### Topics

- ![](../images/down.gif) [Quoting Special Characters](#quoting)
- ![](../images/down.gif) [Environment Variables](#EnvVar)
- ![](../images/down.gif) [Rewriting in Virtual Hosts](#vhosts)
- ![](../images/down.gif) [Practical Solutions](#Solutions)

### Directives

- ![](../images/down.gif) [RewriteBase](#rewritebase)
- ![](../images/down.gif) [RewriteCond](#rewritecond)
- ![](../images/down.gif) [RewriteEngine](#rewriteengine)
- ![](../images/down.gif) [RewriteLock](#rewritelock)
- ![](../images/down.gif) [RewriteLog](#rewritelog)
- ![](../images/down.gif) [RewriteLogLevel](#rewriteloglevel)
- ![](../images/down.gif) [RewriteMap](#rewritemap)
- ![](../images/down.gif) [RewriteOptions](#rewriteoptions)
- ![](../images/down.gif) [RewriteRule](#rewriterule)

### See also

- [Rewrite Flags](#rewriteflags)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Quoting Special Characters

As of Apache 1.3.20, special characters in
*TestString* and *Substitution* strings can be
escaped (that is, treated as normal characters without their
usual special meaning) by prefixing them with a backslash ('\')
character. In other words, you can include an actual
dollar-sign character in a *Substitution* string by
using '`\$`'; this keeps mod\_rewrite from trying
to treat it as a backreference.

[![top](../images/up.gif)](#page-header)

## Environment Variables

This module keeps track of two additional (non-standard)
CGI/SSI environment variables named `SCRIPT_URL`
and `SCRIPT_URI`. These contain the
*logical* Web-view to the current resource, while the
standard CGI/SSI variables `SCRIPT_NAME` and
`SCRIPT_FILENAME` contain the *physical*
System-view.

Notice: These variables hold the URI/URL *as they were
initially requested*, that is, *before* any
rewriting. This is important to note because the rewriting process is
primarily used to rewrite logical URLs to physical
pathnames.

### Example

```
SCRIPT_NAME=/sw/lib/w3s/tree/global/u/rse/.www/index.html
SCRIPT_FILENAME=/u/rse/.www/index.html
SCRIPT_URL=/u/rse/
SCRIPT_URI=http://en1.engelschall.com/u/rse/
```

[![top](../images/up.gif)](#page-header)

## Rewriting in Virtual Hosts

By default, `mod_rewrite` configuration
settings from the main server context are not inherited by
virtual hosts. To make the main server settings apply to virtual
hosts, you must place the following directives in each `<VirtualHost>` section:

`RewriteEngine On  
RewriteOptions Inherit`

[![top](../images/up.gif)](#page-header)

## Practical Solutions

For numerous examples of common, and not-so-common, uses for
mod\_rewrite, see the [extended rewrite
documentation.](rewrite.md)

[![top](../images/up.gif)](#page-header)

## RewriteBase Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the base URL for per-directory rewrites |
| [Syntax:](mod__directive-dict.md#Syntax) | `RewriteBase URL-path` |
| [Default:](mod__directive-dict.md#Default) | `None` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_rewrite |

The `RewriteBase` directive specifies the
URL prefix to be used for per-directory (htaccess)
`RewriteRule` directives that substitute a relative
path.

This directive is *required* when you use a relative path
in a substitution in per-directory (htaccess) context unless either
of the following conditions are true:

- The original request, and the substitution, are underneath the
  `DocumentRoot`
  (as opposed to reachable by other means, such as
  `Alias`).
- The *filesystem* path to the directory containing the
  `RewriteRule`, suffixed by the relative
  substitution is also valid as a URL path on the server
  (this is rare).

In the example below, `RewriteBase` is necessary
to avoid rewriting to http://example.com/opt/myapp-1.2.3/welcome.html
since the resource was not relative to the document root. This
misconfiguration would normally cause the server to look for an "opt"
directory under the document root.

```
DocumentRoot /var/www/example.com
Alias /myapp /opt/myapp-1.2.3
<Directory /opt/myapp-1.2.3>
RewriteEngine On
RewriteBase /myapp/
RewriteRule ^index\.html$  welcome.html 
</Directory>
```

[![top](../images/up.gif)](#page-header)

## RewriteCond Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Defines a condition under which rewriting will take place |
| [Syntax:](mod__directive-dict.md#Syntax) | `RewriteCond TestString CondPattern` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_rewrite |

The `RewriteCond` directive defines a
rule condition. One or more `RewriteCond`
can precede a `RewriteRule`
directive. The following rule is then only used if both
the current state of the URI matches its pattern, **and** if these conditions are met.

*TestString* is a string which can contain the
following expanded constructs in addition to plain text:

- **RewriteRule backreferences**: These are
  backreferences of the form **`$N`**
  (0 <= N <= 9), which provide access to the grouped
  parts (in parentheses) of the pattern, from the
  `RewriteRule` which is subject to the current
  set of `RewriteCond` conditions..
- **RewriteCond backreferences**: These are
  backreferences of the form **`%N`**
  (1 <= N <= 9), which provide access to the grouped
  parts (again, in parentheses) of the pattern, from the last matched
  `RewriteCond` in the current set
  of conditions.
- **RewriteMap expansions**: These are
  expansions of the form **`${mapname:key|default}`**.
  See [the documentation for
  RewriteMap](#mapfunc) for more details.
- **Server-Variables**: These are variables of
  the form
  **`%{` *NAME\_OF\_VARIABLE*
  `}`**
  where *NAME\_OF\_VARIABLE* can be a string taken
  from the following list:

  | HTTP headers: | connection & request: |  |
  | --- | --- | --- |
  | HTTP\_USER\_AGENT  HTTP\_REFERER  HTTP\_COOKIE  HTTP\_FORWARDED  HTTP\_HOST  HTTP\_PROXY\_CONNECTION  HTTP\_ACCEPT | REMOTE\_ADDR  REMOTE\_HOST  REMOTE\_PORT  REMOTE\_USER  REMOTE\_IDENT  REQUEST\_METHOD  SCRIPT\_FILENAME  PATH\_INFO  QUERY\_STRING  AUTH\_TYPE |  |
  | server internals: | date and time: | specials: |
  | DOCUMENT\_ROOT  SERVER\_ADMIN  SERVER\_NAME  SERVER\_ADDR  SERVER\_PORT  SERVER\_PROTOCOL  SERVER\_SOFTWARE | TIME\_YEAR  TIME\_MON  TIME\_DAY  TIME\_HOUR  TIME\_MIN  TIME\_SEC  TIME\_WDAY  TIME | API\_VERSION  THE\_REQUEST  REQUEST\_URI  REQUEST\_FILENAME  IS\_SUBREQ  HTTPS |

  These variables all
  correspond to the similarly named HTTP
  MIME-headers, C variables of the Apache server or
  `struct tm` fields of the Unix system.
  Most are documented elsewhere in the Manual or in
  the CGI specification.

  SERVER\_NAME and SERVER\_PORT depend on the values of
  `UseCanonicalName` and
  `UseCanonicalPhysicalPort`
  respectively.

  Those that are special to mod\_rewrite include those below.

  `IS_SUBREQ`
  :   Will contain the text "true" if the request
      currently being processed is a sub-request,
      "false" otherwise. Sub-requests may be generated
      by modules that need to resolve additional files
      or URIs in order to complete their tasks.

  `API_VERSION`
  :   This is the version of the Apache module API
      (the internal interface between server and
      module) in the current httpd build, as defined in
      include/ap\_mmn.h. The module API version
      corresponds to the version of Apache in use (in
      the release version of Apache 1.3.14, for
      instance, it is 19990320:10), but is mainly of
      interest to module authors.

  `THE_REQUEST`
  :   The full HTTP request line sent by the
      browser to the server (e.g., "`GET
      /index.html HTTP/1.1`"). This does not
      include any additional headers sent by the
      browser. This value has not been unescaped
      (decoded), unlike most other variables below.

  `REQUEST_URI`
  :   The path component of the requested URI,
      such as "/index.html". This notably excludes the
      query string which is available as as its own variable
      named `QUERY_STRING`.

  `REQUEST_FILENAME`
  :   The full local filesystem path to the file or
      script matching the request, if this has already
      been determined by the server at the time
      `REQUEST_FILENAME` is referenced. Otherwise,
      such as when used in virtual host context, the same
      value as `REQUEST_URI`.

  `HTTPS`
  :   Will contain the text "on" if the connection is
      using SSL/TLS, or "off" otherwise. (This variable
      can be safely used regardless of whether or not
      `mod_ssl` is loaded).

Other things you should be aware of:

1. The variables SCRIPT\_FILENAME and REQUEST\_FILENAME
   contain the same value - the value of the
   `filename` field of the internal
   `request_rec` structure of the Apache server.
   The first name is the commonly known CGI variable name
   while the second is the appropriate counterpart of
   REQUEST\_URI (which contains the value of the
   `uri` field of `request_rec`).

   If a substitution occurred and the rewriting continues,
   the value of both variables will be updated accordingly.

   If used in per-server context (*i.e.*, before the
   request is mapped to the filesystem) SCRIPT\_FILENAME and
   REQUEST\_FILENAME cannot contain the full local filesystem
   path since the path is unknown at this stage of processing.
   Both variables will initially contain the value of REQUEST\_URI
   in that case. In order to obtain the full local filesystem
   path of the request in per-server context, use an URL-based
   look-ahead `%{LA-U:REQUEST_FILENAME}` to determine
   the final value of REQUEST\_FILENAME.
2. `%{ENV:variable}`, where *variable* can be
   any environment variable, is also available.
   This is looked-up via internal
   Apache structures and (if not found there) via
   `getenv()` from the Apache server process.
3. `%{SSL:variable}`, where *variable* is the
   name of an [SSL environment
   variable](mod__mod_ssl.md#envvars), can be used whether or not
   `mod_ssl` is loaded, but will always expand to
   the empty string if it is not. Example:
   `%{SSL:SSL_CIPHER_USEKEYSIZE}` may expand to
   `128`. These variables are available even without
   setting the `StdEnvVars` option of the
   `SSLOptions` directive.
4. `%{HTTP:header}`, where *header* can be
   any HTTP MIME-header name, can always be used to obtain the
   value of a header sent in the HTTP request.
   Example: `%{HTTP:Proxy-Connection}` is
   the value of the HTTP header
   ```Proxy-Connection:`''.

   If a HTTP header is used in a condition this header is added to
   the Vary header of the response in case the condition evaluates
   to true for the request. It is **not** added if the
   condition evaluates to false for the request. Adding the HTTP header
   to the Vary header of the response is needed for proper caching.

   It has to be kept in mind that conditions follow a short circuit
   logic in the case of the '**`ornext|OR`**' flag
   so that certain conditions might not be evaluated at all.
5. `%{LA-U:variable}` can be used for look-aheads which perform
   an internal (URL-based) sub-request to determine the final
   value of *variable*. This can be used to access
   variable for rewriting which is not available at the current
   stage, but will be set in a later phase.

   For instance, to rewrite according to the
   `REMOTE_USER` variable from within the
   per-server context (`httpd.conf` file) you must
   use `%{LA-U:REMOTE_USER}` - this
   variable is set by the authorization phases, which come
   *after* the URL translation phase (during which mod\_rewrite
   operates).

   On the other hand, because mod\_rewrite implements
   its per-directory context (`.htaccess` file) via
   the Fixup phase of the API and because the authorization
   phases come *before* this phase, you just can use
   `%{REMOTE_USER}` in that context.
6. `%{LA-F:variable}` can be used to perform an internal
   (filename-based) sub-request, to determine the final value
   of *variable*. Most of the time, this is the same as
   LA-U above.

*CondPattern* is the condition pattern,
a regular expression which is applied to the
current instance of the *TestString*.
*TestString* is first evaluated, before being matched against
*CondPattern*.

**Remember:** *CondPattern* is a
*perl compatible regular expression* with some
additions:

1. You can prefix the pattern string with a
   '`!`' character (exclamation mark) to specify a
   **non**-matching pattern.
2. There are some special variants of *CondPatterns*.
   Instead of real regular expression strings you can also
   use one of the following:
   - '**<CondPattern**' (lexicographically
     precedes)  
     Treats the *CondPattern* as a plain string and
     compares it lexicographically to *TestString*. True if
     *TestString* lexicographically precedes
     *CondPattern*.
   - '**>CondPattern**' (lexicographically
     follows)  
     Treats the *CondPattern* as a plain string and
     compares it lexicographically to *TestString*. True if
     *TestString* lexicographically follows
     *CondPattern*.
   - '**=CondPattern**' (lexicographically
     equal)  
     Treats the *CondPattern* as a plain string and
     compares it lexicographically to *TestString*. True if
     *TestString* is lexicographically equal to
     *CondPattern* (the two strings are exactly
     equal, character for character). If *CondPattern*
     is `""` (two quotation marks) this
     compares *TestString* to the empty string.
   - '**-d**' (is
     **d**irectory)  
     Treats the *TestString* as a pathname and tests
     whether or not it exists, and is a directory.
   - '**-f**' (is regular
     **f**ile)  
     Treats the *TestString* as a pathname and tests
     whether or not it exists, and is a regular file.
   - '**-s**' (is regular file, with
     **s**ize)  
     Treats the *TestString* as a pathname and tests
     whether or not it exists, and is a regular file with size greater
     than zero.
   - '**-l**' (is symbolic
     **l**ink)  
     Treats the *TestString* as a pathname and tests
     whether or not it exists, and is a symbolic link.
   - '**-x**' (has e**x**ecutable
     permissions)  
     Treats the *TestString* as a pathname and tests
     whether or not it exists, and has executable permissions.
     These permissions are determined according to
     the underlying OS.
   - '**-F**' (is existing file, via
     subrequest)  
     Checks whether or not *TestString* is a valid file,
     accessible via all the server's currently-configured
     access controls for that path. This uses an internal
     subrequest to do the check, so use it with care -
     it can impact your server's performance!
   - '**-U**' (is existing URL, via
     subrequest)  
     Checks whether or not *TestString* is a valid URL,
     accessible via all the server's currently-configured
     access controls for that path. This uses an internal
     subrequest to do the check, so use it with care -
     it can impact your server's performance!

     This flag *only* returns information about things
     like access control, authentication, and authorization. This flag
     *does not* return information about the status code the
     configured handler (static file, CGI, proxy, etc.) would have
     returned.

   ### Note:

   All of these tests can
   also be prefixed by an exclamation mark ('!') to
   negate their meaning.
3. You can also set special flags for
   *CondPattern* by appending
   **`[`*flags*`]`**
   as the third argument to the `RewriteCond`
   directive, where *flags* is a comma-separated list of any of the
   following flags:
   - '**`nocase|NC`**'
     (**n**o **c**ase)  
     This makes the test case-insensitive - differences
     between 'A-Z' and 'a-z' are ignored, both in the
     expanded *TestString* and the *CondPattern*.
     This flag is effective only for comparisons between
     *TestString* and *CondPattern*. It has no
     effect on filesystem and subrequest checks.
   - '**`ornext|OR`**'
     (**or** next condition)  
     Use this to combine rule conditions with a local OR
     instead of the implicit AND. Typical example:

     ```
     RewriteCond %{REMOTE_HOST}  =host1  [OR]
     RewriteCond %{REMOTE_HOST}  =host2  [OR]
     RewriteCond %{REMOTE_HOST}  =host3
     RewriteRule ...some special stuff for any of these hosts...
     ```

     Without this flag you would have to write the condition/rule
     pair three times.
   - '**`novary|NV`**'
     (**n**o **v**ary)  
     If a HTTP header is used in the condition, this flag prevents
     this header from being added to the Vary header of the response.   
     Using this flag might break proper caching of the response if
     the representation of this response varies on the value of this header.
     So this flag should be only used if the meaning of the Vary header
     is well understood.

**Example:**

To rewrite the Homepage of a site according to the
```User-Agent:`'' header of the request, you can
use the following:

```
RewriteCond  %{HTTP_USER_AGENT}  ^Mozilla
RewriteRule  ^/$                 /homepage.max.html  [L]

RewriteCond  %{HTTP_USER_AGENT}  ^Lynx
RewriteRule  ^/$                 /homepage.min.html  [L]

RewriteRule  ^/$                 /homepage.std.html  [L]
```

Explanation: If you use a browser which identifies itself
as 'Mozilla' (including Netscape Navigator, Mozilla etc), then you
get the max homepage (which could include frames, or other special
features).
If you use the Lynx browser (which is terminal-based), then
you get the min homepage (which could be a version designed for
easy, text-only browsing).
If neither of these conditions apply (you use any other browser,
or your browser identifies itself as something non-standard), you get
the std (standard) homepage.

[![top](../images/up.gif)](#page-header)

## RewriteEngine Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables or disables runtime rewriting engine |
| [Syntax:](mod__directive-dict.md#Syntax) | `RewriteEngine on|off` |
| [Default:](mod__directive-dict.md#Default) | `RewriteEngine off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_rewrite |

The `RewriteEngine` directive enables or
disables the runtime rewriting engine. If it is set to
`off` this module does no runtime processing at
all. It does not even update the `SCRIPT_URx`
environment variables.

Use this directive to disable the module instead of
commenting out all the `RewriteRule` directives!

Note that rewrite configurations are not
inherited by virtual hosts. This means that you need to have a
`RewriteEngine on` directive for each virtual host
in which you wish to use rewrite rules.

`RewriteMap` directives of the type `prg`
are not started during server initialization if they're defined in a
context that does not have `RewriteEngine` set to
`on`

[![top](../images/up.gif)](#page-header)

## RewriteLock Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the name of the lock file used for `RewriteMap` synchronization |
| [Syntax:](mod__directive-dict.md#Syntax) | `RewriteLock file-path` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_rewrite |

This directive sets the filename for a synchronization
lockfile which mod\_rewrite needs to communicate with `RewriteMap`
*programs*. Set this lockfile to a local path (not on a
NFS-mounted device) when you want to use a rewriting
map-program. It is not required for other types of rewriting
maps.

[![top](../images/up.gif)](#page-header)

## RewriteLog Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the name of the file used for logging rewrite engine processing |
| [Syntax:](mod__directive-dict.md#Syntax) | `RewriteLog file-path|pipe` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_rewrite |

The `RewriteLog` directive sets the name
of the file to which the server logs any rewriting actions it
performs. If the name does not begin with a slash
('`/`') then it is assumed to be relative to the
*Server Root*. The directive should occur only once per
server config.

To disable the logging of
rewriting actions it is not recommended to set
*Filename* to `/dev/null`, because
although the rewriting engine does not then output to a
logfile it still creates the logfile output internally.
**This will slow down the server with no advantage
to the administrator!** To disable logging either
remove or comment out the `RewriteLog`
directive or use `RewriteLogLevel 0`!

The `RewriteLog` log file format is as
follows:

| Description | Example |
| --- | --- |
| Remote host IP address | 192.168.200.166 |
| Remote login name | Will usually be "-" |
| HTTP user auth name | Username, or "-" if no auth |
| Date and time of request | [28/Aug/2009:13:09:09 --0400] |
| Virtualhost and virtualhost ID | [www.example.com/sid#84a650] |
| Request ID, and whether it's a subrequest | [rid#9f0e58/subreq] |
| Log entry severity level | (2) |
| Text error message | forcing proxy-throughput with http://127.0.0.1:8080/index.html |

### Security

See the [Apache Security Tips](misc__security_tips.md)
document for details on how your security could be compromised if the
directory where logfiles are stored is writable by anyone other than
the user that starts the server.

### Example

`# Log to a file:  
RewriteLog "/usr/local/var/apache/logs/rewrite.log"  
  
# Log to a pipe:  
RewriteLog "|/path/to/parser.pl"`

[![top](../images/up.gif)](#page-header)

## RewriteLogLevel Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the verbosity of the log file used by the rewrite engine |
| [Syntax:](mod__directive-dict.md#Syntax) | `RewriteLogLevel Level` |
| [Default:](mod__directive-dict.md#Default) | `RewriteLogLevel 0` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_rewrite |

The `RewriteLogLevel` directive sets the
verbosity level of the rewriting logfile. The default level 0
means no logging, while 9 or more means that practically all
actions are logged.

To disable the logging of rewriting actions simply set
*Level* to 0. This disables all rewrite action
logs.

Using a high value for
*Level* will slow down your Apache server
dramatically! Use the rewriting logfile at a
*Level* greater than 2 only for debugging!

### Example

`RewriteLogLevel 3`

[![top](../images/up.gif)](#page-header)

## RewriteMap Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Defines a mapping function for key-lookup |
| [Syntax:](mod__directive-dict.md#Syntax) | `RewriteMap MapName MapType:MapSource` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_rewrite |
| [Compatibility:](mod__directive-dict.md#Compatibility) | The choice of different dbm types is available in Apache 2.0.41 and later |

The `RewriteMap` directive defines a
*Rewriting Map* which can be used inside rule
substitution strings by the mapping-functions to
insert/substitute fields through a key lookup. The source of
this lookup can be of various types.

The *MapName* is
the name of the map and will be used to specify a
mapping-function for the substitution strings of a rewriting
rule via one of the following constructs:

**`${` *MapName* `:`
*LookupKey* `}`  
`${` *MapName* `:`
*LookupKey* `|` *DefaultValue*
`}`**

When such a construct occurs, the map *MapName* is
consulted and the key *LookupKey* is looked-up. If the
key is found, the map-function construct is substituted by
*SubstValue*. If the key is not found then it is
substituted by *DefaultValue* or by the empty string
if no *DefaultValue* was specified. Empty values
behave as if the key was absent, therefore it is not possible
to distinguish between empty-valued keys and absent keys.

For example, you might define a
`RewriteMap` as:

`RewriteMap examplemap txt:/path/to/file/map.txt`

You would then be able to use this map in a
`RewriteRule` as follows:

`RewriteRule ^/ex/(.*) ${examplemap:$1}`

The following combinations for *MapType* and
*MapSource* can be used:

- **Standard Plain Text**  
  MapType: `txt`, MapSource: Unix filesystem
  path to valid regular file

  This is the standard rewriting map feature where the
  *MapSource* is a plain ASCII file containing
  either blank lines, comment lines (starting with a '#'
  character) or pairs like the following - one per
  line.

  ***MatchingKey*
  *SubstValue***

  ### Example

  ```
  ##
  ##  map.txt -- rewriting map
  ##

  Ralf.S.Engelschall    rse   # Bastard Operator From Hell
  Mr.Joe.Average        joe   # Mr. Average
  ```

  `RewriteMap real-to-user txt:/path/to/file/map.txt`
- **Randomized Plain Text**  
  MapType: `rnd`, MapSource: Unix filesystem
  path to valid regular file

  This is identical to the Standard Plain Text variant
  above but with a special post-processing feature: After
  looking up a value it is parsed according to contained
  ```|`'' characters which have the meaning of
  ``or''. In other words they indicate a set of
  alternatives from which the actual returned value is
  chosen randomly. For example, you might use the following map
  file and directives to provide a random load balancing between
  several back-end servers, via a reverse-proxy. Images are sent
  to one of the servers in the 'static' pool, while everything
  else is sent to one of the 'dynamic' pool.

  Example:

  ### Rewrite map file

  ```
  ##
  ##  map.txt -- rewriting map
  ##

  static   www1|www2|www3|www4
  dynamic  www5|www6
  ```

  ### Configuration directives

  `RewriteMap servers rnd:/path/to/file/map.txt  
    
  RewriteRule ^/(.*\.(png|gif|jpg)) http://${servers:static}/$1
  [NC,P,L]  
  RewriteRule ^/(.*) http://${servers:dynamic}/$1 [P,L]`
- **Hash File**  
   MapType:
  `dbm[=type]`, MapSource: Unix filesystem
  path to valid regular file

  Here the source is a binary format DBM file containing
  the same contents as a *Plain Text* format file, but
  in a special representation which is optimized for really
  fast lookups. The *type* can be sdbm, gdbm, ndbm, or
  db depending on [compile-time
  settings](install.md#dbm). If the *type* is omitted, the
  compile-time default will be chosen.

  To create a dbm file from a source text file, use the [httxt2dbm](programs__httxt2dbm.md) utility.

  `$ httxt2dbm -i mapfile.txt -o mapfile.map`
- **Internal Function**  
  MapType: `int`, MapSource: Internal Apache
  function

  Here, the source is an internal Apache function.
  Module authors can provide additional internal functions by registering
  them with the `ap_register_rewrite_mapfunc` API.
  The functions that are provided by default are:

  - **toupper**:  
    Converts the key to all upper case.
  - **tolower**:  
    Converts the key to all lower case.
  - **escape**:  
    Translates special characters in the key to
    hex-encodings.
  - **unescape**:  
    Translates hex-encodings in the key back to
    special characters.
- **External Rewriting Program**  
  MapType: `prg`, MapSource: Unix filesystem
  path to valid regular file

  Here the source is a program, not a map file. To
  create it you can use a language of your choice, but
  the result has to be an executable program (either
  object-code or a script with the magic cookie trick
  '`#!/path/to/interpreter`' as the first
  line).

  This program is started once, when the Apache server
  is started, and then communicates with the rewriting engine
  via its `stdin` and `stdout`
  file-handles. For each map-function lookup it will
  receive the key to lookup as a newline-terminated string
  on `stdin`. It then has to give back the
  looked-up value as a newline-terminated string on
  `stdout` or the four-character string
  ```NULL`'' if it fails (*i.e.*, there
  is no corresponding value for the given key). A trivial
  program which will implement a 1:1 map (*i.e.*,
  key == value) could be:

  External rewriting programs are not started if they're defined in a
  context that does not have `RewriteEngine` set to
  `on`.

  ```
  #!/usr/bin/perl
  $| = 1;
  while (<STDIN>) {
      # ...put here any transformations or lookups...
      print $_;
  }
  ```

  But be very careful:

  1. ``*Keep it simple, stupid*'' (KISS).
     If this program hangs, it will cause Apache to hang
     when trying to use the relevant rewrite rule.
  2. A common mistake is to use buffered I/O on
     `stdout`. Avoid this, as it will cause a deadloop!
     ```$|=1`'' is used above, to prevent this.
  3. The `RewriteLock` directive can
     be used to define a lockfile which mod\_rewrite can use to synchronize
     communication with the mapping program. By default no such
     synchronization takes place.

The `RewriteMap` directive can occur more than
once. For each mapping-function use one
`RewriteMap` directive to declare its rewriting
mapfile. While you cannot **declare** a map in
per-directory context it is of course possible to
**use** this map in per-directory context.

### Note

For plain text and DBM format files the
looked-up keys are cached in-core until the `mtime` of the
mapfile changes or the server does a restart. This way you can have
map-functions in rules which are used for **every**
request. This is no problem, because the external lookup only happens
once!

[![top](../images/up.gif)](#page-header)

## RewriteOptions Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets some special options for the rewrite engine |
| [Syntax:](mod__directive-dict.md#Syntax) | `RewriteOptions Options` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_rewrite |
| [Compatibility:](mod__directive-dict.md#Compatibility) | `MaxRedirects` is no longer available in version 2.1 and later |

The `RewriteOptions` directive sets some
special options for the current per-server or per-directory
configuration. The *Option* string can currently
only be one of the following:

`inherit`
:   This forces the current configuration to inherit the
    configuration of the parent. In per-virtual-server context,
    this means that the maps, conditions and rules of the main
    server are inherited. In per-directory context this means
    that conditions and rules of the parent directory's
    `.htaccess` configuration are inherited.

    Rules inherited from the parent scope are applied
    **after** rules specified in the child scope.

`AllowAnyURI`
:   When `RewriteRule`
    is used in `VirtualHost` or server context with
    version 2.2.23 or later of httpd, `mod_rewrite`
    will only process the rewrite rules if the request URI is a [URL-path](mod__directive-dict.md#Syntax). This avoids
    some security issues where particular rules could allow
    "surprising" pattern expansions (see [CVE-2011-3368](http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2011-3368)
    and [CVE-2011-4317](http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2011-4317)).
    To lift the restriction on matching a URL-path, the
    `AllowAnyURI` option can be enabled, and
    `mod_rewrite` will apply the rule set to any
    request URI string, regardless of whether that string matches
    the URL-path grammar required by the HTTP specification.

    ### Security Warning

    Enabling this option will make the server vulnerable to
    security issues if used with rewrite rules which are not
    carefully authored. It is **strongly recommended**
    that this option is not used. In particular, beware of input
    strings containing the '`@`' character which could
    change the interpretation of the transformed URI, as per the
    above CVE names.

`MergeBase`
:   With this option, the value of `RewriteBase` is copied from where it's explicitly defined
    into any sub-directory or sub-location that doesn't define its own
    `RewriteBase`. Not copying
    was the default until 2.2.22. In version 2.2.23 copying was the default.
    The flag to explicitly control it is available for Apache HTTP
    Server 2.2.24 and later.

[![top](../images/up.gif)](#page-header)

## RewriteRule Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Defines rules for the rewriting engine |
| [Syntax:](mod__directive-dict.md#Syntax) | `RewriteRule Pattern Substitution [flags]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_rewrite |

The `RewriteRule` directive is the real
rewriting workhorse. The directive can occur more than once,
with each instance defining a single rewrite rule. The
order in which these rules are defined is important - this is the order
in which they will be applied at run-time.

*Pattern* is
a perl compatible regular
expression. On the first RewriteRule it is applied to the (%-decoded)
[URL-path](mod__directive-dict.md#Syntax) of the request;
subsequent patterns are applied to the output of the last matched
RewriteRule.

### What is matched?

In `VirtualHost` context,
The *Pattern* will initially be matched against the part of the
URL after the hostname and port, and before the query string (e.g. "/app1/index.html").

In `Directory` and htaccess context,
the *Pattern* will initially be matched against the
*filesystem* path, after removing the prefix that led the server
to the current `RewriteRule` (e.g. "app1/index.html"
or "index.html" depending on where the directives are defined).

If you wish to match against the hostname, port, or query string, use a
`RewriteCond` with the
`%{HTTP_HOST}`, `%{SERVER_PORT}`, or
`%{QUERY_STRING}` variables respectively.

### Per-directory Rewrites

- The rewrite engine may be used in [.htaccess](howto__htaccess.md) files and in `<Directory>` sections, with some additional
  complexity.
- To enable the rewrite engine in this context, you need to set
  "`RewriteEngine On`" **and**
  "`Options FollowSymLinks`" must be enabled. If your
  administrator has disabled override of `FollowSymLinks` for
  a user's directory, then you cannot use the rewrite engine. This
  restriction is required for security reasons.
- When using the rewrite engine in `.htaccess` files the
  per-directory prefix (which always is the same for a specific
  directory) is automatically *removed* for the RewriteRule pattern matching
  and automatically *added* after any relative (not starting with a
  slash or protocol name) substitution encounters the end of a rule set.
  See the `RewriteBase`
  directive for more information regarding what prefix will be added back to
  relative substitutions.
- If you wish to match against the full URL-path in a per-directory
  (htaccess) RewriteRule, use the `%{REQUEST_URI}` variable in
  a `RewriteCond`.
- The removed prefix always ends with a slash, meaning the matching occurs against a string which
  *never* has a leading slash. Therefore, a *Pattern* with `^/` never
  matches in per-directory context.
- Although rewrite rules are syntactically permitted in `<Location>` and `<Files>` sections, this
  should never be necessary and is unsupported.

For some hints on [regular
expressions](glossary.md#regex "see glossary"), see
the [mod\_rewrite
Introduction](rewrite__intro.md#regex).

In mod\_rewrite, the NOT character
('`!`') is also available as a possible pattern
prefix. This enables you to negate a pattern; to say, for instance:
``*if the current URL does **NOT** match this
pattern*''. This can be used for exceptional cases, where
it is easier to match the negative pattern, or as a last
default rule.

### Note

When using the NOT character to negate a pattern, you cannot include
grouped wildcard parts in that pattern. This is because, when the
pattern does NOT match (ie, the negation matches), there are no
contents for the groups. Thus, if negated patterns are used, you
cannot use `$N` in the substitution string!

The *Substitution* of a
rewrite rule is the string that replaces the original URL-path that
was matched by *Pattern*. The *Substitution* may
be a:

file-system path
:   Designates the location on the file-system of the resource
    to be delivered to the client. Substitutions are only
    treated as a file-system path when the rule is configured in
    server (virtualhost) context and the first component of the
    path in the substitution is exists in the file-system

URL-path
:   A `DocumentRoot`-relative path to the
    resource to be served. Note that `mod_rewrite`
    tries to guess whether you have specified a file-system path
    or a URL-path by checking to see if the first segment of the
    path exists at the root of the file-system. For example, if
    you specify a *Substitution* string of
    `/www/file.html`, then this will be treated as a
    URL-path *unless* a directory named `www`
    exists at the root or your file-system (or, in the case of
    using rewrites in a `.htaccess` file, relative to
    your document root), in which case it will
    be treated as a file-system path. If you wish other
    URL-mapping directives (such as `Alias`) to be applied to the
    resulting URL-path, use the `[PT]` flag as
    described below.

Absolute URL
:   If an absolute URL is specified,
    `mod_rewrite` checks to see whether the
    hostname matches the current host. If it does, the scheme and
    hostname are stripped out and the resulting path is treated as
    a URL-path. Otherwise, an external redirect is performed for
    the given URL. To force an external redirect back to the
    current host, see the `[R]` flag below.

`-` (dash)
:   A dash indicates that no substitution should be performed
    (the existing path is passed through untouched). This is used
    when a flag (see below) needs to be applied without changing
    the path.

In addition to plain text, the *Substition* string can include

1. back-references (`$N`) to the RewriteRule
   pattern
2. back-references (`%N`) to the last matched
   RewriteCond pattern
3. server-variables as in rule condition test-strings
   (`%{VARNAME}`)
4. [mapping-function](#mapfunc) calls
   (`${mapname:key|default}`)

Back-references are identifiers of the form
`$`**N**
(**N**=0..9), which will be replaced
by the contents of the **N**th group of the
matched *Pattern*. The server-variables are the same
as for the *TestString* of a `RewriteCond`
directive. The mapping-functions come from the
`RewriteMap` directive and are explained there.
These three types of variables are expanded in the order above.

Rewrite rules are applied to the results of previous rewrite
rules, in the order in which they are defined in the config file.
The URL is **completely
replaced** by the *Substitution* and the
rewriting process continues until all rules have been applied,
or it is explicitly terminated by a
[`L` flag](rewrite__flags.md#flag_l),
or other flag which implies immediate termination, such as
`F`.

### Modifying the Query String

By default, the query string is passed through unchanged. You
can, however, create URLs in the substitution string containing
a query string part. Simply use a question mark inside the
substitution string to indicate that the following text should
be re-injected into the query string. When you want to erase an
existing query string, end the substitution string with just a
question mark. To combine new and old query strings, use the
`[QSA]` flag.

Additionally you can set special actions to be performed by
appending **`[`*flags*`]`**
as the third argument to the `RewriteRule`
directive. *Flags* is a comma-separated list, surround by square
brackets, of any of the flags in the following table. More
details, and examples, for each flag, are available in the [Rewrite Flags document](rewrite__flags.md).

| Flag and syntax | Function |
| --- | --- |
| B | Escape non-alphanumeric characters *before* applying the transformation. *[details ...](rewrite__flags.md#flag_b)* |
| chain|C | Rule is chained to the following rule. If the rule fails, the rule(s) chained to it will be skipped. *[details ...](rewrite__flags.md#flag_c)* |
| cookie|CO=*NAME*:*VAL* | Sets a cookie in the client browser. Full syntax is: CO=*NAME*:*VAL*:*domain*[:*lifetime*[:*path*[:*secure*[:*httponly*]]]] *[details ...](rewrite__flags.md#flag_co)* |
| discardpath|DPI | Causes the PATH\_INFO portion of the rewritten URI to be discarded. *[details ...](rewrite__flags.md#flag_dpi)* |
| env|E=[!]*VAR*[:*VAL*] | Causes an environment variable *VAR* to be set (to the value *VAL* if provided). The form !*VAR* causes the environment variable *VAR* to be unset.*[details ...](rewrite__flags.md#flag_e)* |
| forbidden|F | Returns a 403 FORBIDDEN response to the client browser. *[details ...](rewrite__flags.md#flag_f)* |
| gone|G | Returns a 410 GONE response to the client browser. *[details ...](rewrite__flags.md#flag_g)* |
| Handler|H=*Content-handler* | Causes the resulting URI to be sent to the specified *Content-handler* for processing. *[details ...](rewrite__flags.md#flag_h)* |
| last|L | Stop the rewriting process immediately and don't apply any more rules. Especially note caveats for per-directory and .htaccess context. *[details ...](rewrite__flags.md#flag_l)* |
| next|N | Re-run the rewriting process, starting again with the first rule, using the result of the ruleset so far as a starting point. *[details ...](rewrite__flags.md#flag_n)* |
| nocase|NC | Makes the pattern comparison case-insensitive. *[details ...](rewrite__flags.md#flag_nc)* |
| noescape|NE | Prevent mod\_rewrite from applying hexcode escaping of special characters in the result of the rewrite. *[details ...](rewrite__flags.md#flag_ne)* |
| nosubreq|NS | Causes a rule to be skipped if the current request is an internal sub-request. *[details ...](rewrite__flags.md#flag_ns)* |
| proxy|P | Force the substitution URL to be internally sent as a proxy request. *[details ...](rewrite__flags.md#flag_p)* |
| passthrough|PT | Forces the resulting URI to be passed back to the URL mapping engine for processing of other URI-to-filename translators, such as `Alias` or `Redirect`. *[details ...](rewrite__flags.md#flag_pt)* |
| qsappend|QSA | Appends any query string from the original request URL to any query string created in the rewrite target.*[details ...](rewrite__flags.md#flag_qsa)* |
| redirect|R[=*code*] | Forces an external redirect, optionally with the specified HTTP status code. *[details ...](rewrite__flags.md#flag_r)* |
| skip|S=*num* | Tells the rewriting engine to skip the next *num* rules if the current rule matches. *[details ...](rewrite__flags.md#flag_s)* |
| type|T=*MIME-type* | Force the [MIME-type](glossary.md#mime-type "see glossary") of the target file to be the specified type. *[details ...](rewrite__flags.md#flag_t)* |

### Home directory expansion

When the substitution string begins with a string
resembling "/~user" (via explicit text or backreferences), mod\_rewrite performs
home directory expansion independent of the presence or configuration
of `mod_userdir`.

This expansion does not occur when the *PT*
flag is used on the `RewriteRule`
directive.

Here are all possible substitution combinations and their
meanings:

**Inside per-server configuration
(`httpd.conf`)  
for request ```GET
/somepath/pathinfo`'':**

```
Given Rule                                      Resulting Substitution
----------------------------------------------  ----------------------------------
^/somepath(.*) otherpath$1                      invalid, not supported

^/somepath(.*) otherpath$1  [R]                 invalid, not supported

^/somepath(.*) otherpath$1  [P]                 invalid, not supported
----------------------------------------------  ----------------------------------
^/somepath(.*) /otherpath$1                     /otherpath/pathinfo

^/somepath(.*) /otherpath$1 [R]                 http://thishost/otherpath/pathinfo
                                                via external redirection

^/somepath(.*) /otherpath$1 [P]                 doesn't make sense, not supported
----------------------------------------------  ----------------------------------
^/somepath(.*) http://thishost/otherpath$1      /otherpath/pathinfo

^/somepath(.*) http://thishost/otherpath$1 [R]  http://thishost/otherpath/pathinfo
                                                via external redirection

^/somepath(.*) http://thishost/otherpath$1 [P]  doesn't make sense, not supported
----------------------------------------------  ----------------------------------
^/somepath(.*) http://otherhost/otherpath$1     http://otherhost/otherpath/pathinfo
                                                via external redirection

^/somepath(.*) http://otherhost/otherpath$1 [R] http://otherhost/otherpath/pathinfo
                                                via external redirection
                                                (the [R] flag is redundant)

^/somepath(.*) http://otherhost/otherpath$1 [P] http://otherhost/otherpath/pathinfo
                                                via internal proxy
```

**Inside per-directory configuration for
`/somepath`  
(`/physical/path/to/somepath/.htaccess`, with
`RewriteBase /somepath`)  
for request ```GET
/somepath/localpath/pathinfo`'':**

```
Given Rule                                      Resulting Substitution
----------------------------------------------  ----------------------------------
^localpath(.*) otherpath$1                      /somepath/otherpath/pathinfo

^localpath(.*) otherpath$1  [R]                 http://thishost/somepath/otherpath/pathinfo
                                                via external redirection

^localpath(.*) otherpath$1  [P]                 doesn't make sense, not supported
----------------------------------------------  ----------------------------------
^localpath(.*) /otherpath$1                     /otherpath/pathinfo

^localpath(.*) /otherpath$1 [R]                 http://thishost/otherpath/pathinfo
                                                via external redirection

^localpath(.*) /otherpath$1 [P]                 doesn't make sense, not supported
----------------------------------------------  ----------------------------------
^localpath(.*) http://thishost/otherpath$1      /otherpath/pathinfo

^localpath(.*) http://thishost/otherpath$1 [R]  http://thishost/otherpath/pathinfo
                                                via external redirection

^localpath(.*) http://thishost/otherpath$1 [P]  doesn't make sense, not supported
----------------------------------------------  ----------------------------------
^localpath(.*) http://otherhost/otherpath$1     http://otherhost/otherpath/pathinfo
                                                via external redirection

^localpath(.*) http://otherhost/otherpath$1 [R] http://otherhost/otherpath/pathinfo
                                                via external redirection
                                                (the [R] flag is redundant)

^localpath(.*) http://otherhost/otherpath$1 [P] http://otherhost/otherpath/pathinfo
                                                via internal proxy
```

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_rewrite.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/mod/mod_rewrite.html "Français")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
