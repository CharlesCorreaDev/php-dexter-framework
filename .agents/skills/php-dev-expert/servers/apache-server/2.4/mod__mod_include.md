# mod_include - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_include.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_include

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Server-parsed html documents (Server Side Includes) |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | include\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_include.c |

### Summary

This module provides a filter which will process files
before they are sent to the client. The processing is
controlled by specially formatted SGML comments, referred to as
elements. These elements allow conditional text, the
inclusion of other files or programs, as well as the setting and
printing of environment variables.

### Topics

- ![](../images/down.gif) [Enabling Server-Side Includes](#enabling)
- ![](../images/down.gif) [PATH\_INFO with Server Side Includes](#pathinfo)
- ![](../images/down.gif) [Available Elements](#elements)
- ![](../images/down.gif) [Include Variables](#includevars)
- ![](../images/down.gif) [Variable Substitution](#substitution)
- ![](../images/down.gif) [Flow Control Elements](#flowctrl)
- ![](../images/down.gif) [Legacy expression syntax](#legacyexpr)

### Directives

- ![](../images/down.gif) [SSIEndTag](#ssiendtag)
- ![](../images/down.gif) [SSIErrorMsg](#ssierrormsg)
- ![](../images/down.gif) [SSIETag](#ssietag)
- ![](../images/down.gif) [SSILastModified](#ssilastmodified)
- ![](../images/down.gif) [SSILegacyExprParser](#ssilegacyexprparser)
- ![](../images/down.gif) [SSIStartTag](#ssistarttag)
- ![](../images/down.gif) [SSITimeFormat](#ssitimeformat)
- ![](../images/down.gif) [SSIUndefinedEcho](#ssiundefinedecho)
- ![](../images/down.gif) [XBitHack](#xbithack)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_include)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_include)

### See also

- `Options`
- `AcceptPathInfo`
- [Filters](filter.md)
- [SSI Tutorial](howto__ssi.md)

[![top](../images/up.gif)](#page-header)

## Enabling Server-Side Includes [¶](#enabling "Permanent link")

Server Side Includes are implemented by the
`INCLUDES` [filter](filter.md). If
documents containing server-side include directives are given
the extension .shtml, the following directives will make Apache
parse them and assign the resulting document the mime type of
`text/html`:

```
AddType text/html .shtml
AddOutputFilter INCLUDES .shtml
```

The following directive must be given for the directories
containing the shtml files (typically in a
`<Directory>` section,
but this directive is also valid in `.htaccess` files if
`AllowOverride` `Options`
is set):

```
Options +Includes
```

For backwards compatibility, the `server-parsed`
[handler](handler.md) also activates the
INCLUDES filter. As well, Apache will activate the INCLUDES
filter for any document with mime type
`text/x-server-parsed-html` or
`text/x-server-parsed-html3` (and the resulting
output will have the mime type `text/html`).

For more information, see our [Tutorial on Server Side Includes](howto__ssi.md).

[![top](../images/up.gif)](#page-header)

## PATH\_INFO with Server Side Includes [¶](#pathinfo "Permanent link")

Files processed for server-side includes no longer accept
requests with `PATH_INFO` (trailing pathname information)
by default. You can use the `AcceptPathInfo` directive to
configure the server to accept requests with `PATH_INFO`.

[![top](../images/up.gif)](#page-header)

## Available Elements [¶](#elements "Permanent link")

The document is parsed as an HTML document, with special
commands embedded as SGML comments. A command has the syntax:

`<!--#element attribute=value
attribute=value ... -->`

The value will often be enclosed in double quotes, but single
quotes (`'`) and backticks (`` ` ``) are also
possible. Many commands only allow a single attribute-value pair.
Note that the comment terminator (`-->`) should be
preceded by whitespace to ensure that it isn't considered part of
an SSI token. Note that the leading `<!--#` is *one*
token and may not contain any whitespaces.

The allowed elements are listed in the following table:

| Element | Description |
| --- | --- |
| `comment` | SSI comment |
| `config` | configure output formats |
| `echo` | print variables |
| `exec` | execute external programs |
| `fsize` | print size of a file |
| `flastmod` | print last modification time of a file |
| `include` | include a file |
| `printenv` | print all available variables |
| `set` | set a value of a variable |

SSI elements may be defined by modules other than
`mod_include`. In fact, the `exec` element is provided by
`mod_cgi`, and will only be available if this
module is loaded.

### The comment Element

This command doesn't output anything. Its only use is to
add comments within a file. These comments are not printed.

This syntax is available in version 2.4.21 and later.

`<!--#comment Blah Blah Blah -->  
   or  
<!--#comment text="Blah Blah Blah" -->`

### The config Element

This command controls various aspects of the parsing. The
valid attributes are:

`echomsg` (*Apache 2.1 and later*)
:   The value is a message that is sent back to the
    client if the `echo` element
    attempts to echo an undefined variable. This overrides any `SSIUndefinedEcho` directives.

    `<!--#config echomsg="[Value Undefined]" -->`

`errmsg`
:   The value is a message that is sent back to the
    client if an error occurs while parsing the
    document. This overrides any `SSIErrorMsg` directives.

    `<!--#config errmsg="[Oops, something broke.]" -->`

`sizefmt`
:   The value sets the format to be used when displaying
    the size of a file. Valid values are `bytes`
    for a count in bytes, or `abbrev` for a count
    in Kb or Mb as appropriate, for example a size of 1024 bytes
    will be printed as "1K".

    `<!--#config sizefmt="abbrev" -->`

`timefmt`
:   The value is a string to be used by the
    `strftime(3)` library routine when printing
    dates.

    `<!--#config timefmt=""%R, %B %d, %Y"" -->`

### The echo Element

This command prints one of the [include
variables](#includevars) defined below. If the variable is unset, the result is
determined by the `SSIUndefinedEcho` directive. Any dates printed are
subject to the currently configured `timefmt`.

Attributes:

`var`
:   The value is the name of the variable to print.

`decoding`
:   Specifies whether Apache should strip an encoding from
    the variable before processing the variable further. The default
    is `none`, where no decoding will be done. If set to
    `url`, then URL decoding (also known as %-encoding;
    this is appropriate for use within URLs in links, etc.) will be
    performed. If set to `urlencoded`,
    application/x-www-form-urlencoded compatible encoding (found in
    query strings) will be stripped. If set to `base64`,
    base64 will be decoded, and if set to `entity`, HTML
    entity encoding will be stripped. Decoding is done prior to any
    further encoding on the variable. Multiple encodings can be
    stripped by specifying more than one comma separated encoding.
    The decoding setting will remain in effect until the next decoding
    attribute is encountered, or the element ends.

    The `decoding` attribute must *precede* the
    corresponding `var` attribute to be effective.

`encoding`
:   Specifies how Apache should encode special characters
    contained in the variable before outputting them. If set
    to `none`, no encoding will be done. If set to
    `url`, then URL encoding (also known as %-encoding;
    this is appropriate for use within URLs in links, etc.) will be
    performed. If set to `urlencoded`,
    application/x-www-form-urlencoded compatible encoding will be
    performed instead, and should be used with query strings. If set
    to `base64`, base64 encoding will be performed. At
    the start of an `echo` element, the default is set to
    `entity`, resulting in entity encoding (which is
    appropriate in the context of a block-level HTML element,
    *e.g.* a paragraph of text). This can be changed by adding
    an `encoding` attribute, which will remain in effect
    until the next `encoding` attribute is encountered or
    the element ends, whichever comes first.

    The `encoding` attribute must *precede* the
    corresponding `var` attribute to be effective.

    In order to avoid cross-site scripting issues, you should
    *always* encode user supplied data.

    ### Example

    `<!--#echo encoding="entity" var="QUERY_STRING" -->`

### The exec Element

The `exec` command executes a given shell command or
CGI script. It requires `mod_cgi` to be present
in the server. If `Options`
`IncludesNOEXEC` is set, this command is completely
disabled. The valid attributes are:

`cgi`
:   The value specifies a (%-encoded) URL-path to
    the CGI script. If the path does not begin with a slash (/),
    then it is taken to be relative to the current
    document. The document referenced by this path is
    invoked as a CGI script, even if the server would not
    normally recognize it as such. However, the directory
    containing the script must be enabled for CGI scripts
    (with `ScriptAlias`
    or `Options`
    `ExecCGI`).

    The CGI script is given the `PATH_INFO` and query
    string (`QUERY_STRING`) of the original request from the
    client; these *cannot* be specified in the URL path. The
    include variables will be available to the script in addition to
    the standard [CGI](mod__mod_cgi.md) environment.

    ### Example

    `<!--#exec cgi="/cgi-bin/example.cgi" -->`

    If the script returns a `Location:` header instead of
    output, then this will be translated into an HTML anchor.

    The `include virtual`
    element should be used in preference to `exec cgi`. In
    particular, if you need to pass additional arguments to a CGI program,
    using the query string, this cannot be done with `exec
    cgi`, but can be done with `include virtual`, as
    shown here:

    `<!--#include virtual="/cgi-bin/example.cgi?argument=value" -->`

`cmd`
:   The server will execute the given string using
    `/bin/sh`. The [include variables](#includevars) are available to the command, in addition
    to the usual set of CGI variables.

    The use of `#include virtual` is almost always preferred to using
    either `#exec cgi` or `#exec cmd`. The former
    (`#include virtual`) uses the standard Apache sub-request
    mechanism to include files or scripts. It is much better tested and
    maintained.

    In addition, on some platforms, like Win32, and on unix when
    using [suexec](suexec.md), you cannot pass arguments
    to a command in an `exec` directive, or otherwise include
    spaces in the command. Thus, while the following will work under a
    non-suexec configuration on unix, it will not produce the desired
    result under Win32, or when running suexec:

    `<!--#exec cmd="perl /path/to/perlscript arg1 arg2" -->`

### The fsize Element

This command prints the size of the specified file, subject
to the `sizefmt` format specification. Attributes:

`file`
:   The value is a path relative to the directory
    containing the current document being parsed.

    `This file is <!--#fsize file="mod_include.html" --> bytes.`

    The value of `file` cannot start with a slash
    (`/`), nor can it contain `../` so as to
    refer to a file above the current directory or outside of the
    document root. Attempting to so will result in the error message:
    `The given path was above the root path`.

`virtual`
:   The value is a (%-encoded) URL-path. If it does not begin with
    a slash (/) then it is taken to be relative to the current document.
    Note, that this does *not* print the size of any CGI output,
    but the size of the CGI script itself.

`This file is <!--#fsize virtual="/docs/mod/mod_include.html" --> bytes.`

Note that in many cases these two are exactly the same thing.
However, the `file` attribute doesn't respect URL-space
aliases.

### The flastmod Element

This command prints the last modification date of the
specified file, subject to the `timefmt` format
specification. The attributes are the same as for the
`fsize` command.

### The include Element

This command inserts the text of another document or file
into the parsed file. Any included file is subject to the usual
access control. If the directory containing the parsed file has
[Options](mod__core.md#options)
`IncludesNOEXEC` set, then only documents with a text
[MIME-type](glossary.md#mime-type "see glossary") (`text/plain`,
`text/html` etc.) will be included. Otherwise CGI
scripts are invoked as normal using the complete URL given in
the command, including any query string.

An attribute defines the location of the document, and may
appear more than once in an include element; an inclusion is
done for each attribute given to the include command in turn.
The valid attributes are:

`file`
:   The value is a path relative to the directory
    containing the current document being parsed. It cannot
    contain `../`, nor can it be an absolute path.
    Therefore, you cannot include files that are outside of the
    document root, or above the current document in the directory
    structure. The `virtual` attribute should always be
    used in preference to this one.

`virtual`
:   The value is a (%-encoded) URL-path. The URL cannot contain a
    scheme or hostname, only a path and an optional query string. If it
    does not begin with a slash (/) then it is taken to be relative to the
    current document.

    A URL is constructed from the attribute, and the output the
    server would return if the URL were accessed by the client is
    included in the parsed output. Thus included files can be nested.

    If the specified URL is a CGI program, the program will be
    executed and its output inserted in place of the directive in the
    parsed file. You may include a query string in a CGI url:

    `<!--#include virtual="/cgi-bin/example.cgi?argument=value" -->`

    `include virtual` should be used in preference
    to `exec cgi` to include the output of CGI programs
    into an HTML document.

    If the `KeptBodySize`
    directive is correctly configured and valid for this included
    file, attempts to POST requests to the enclosing HTML document
    will be passed through to subrequests as POST requests as well.
    Without the directive, all subrequests are processed as GET
    requests.

`onerror`
:   The value is a (%-encoded) URL-path which is shown should a
    previous attempt to include a file or virtual attribute failed.
    To be effective, this attribute must be specified after the
    file or virtual attributes being covered. If the attempt to
    include the onerror path fails, or if onerror is not specified, the
    default error message will be included.

    ```
    # Simple example
    <!--#include virtual="/not-exist.html" onerror="/error.html" -->
    ```

    ```
    # Dedicated onerror paths
    <!--#include virtual="/path-a.html" onerror="/error-a.html" virtual="/path-b.html" onerror="/error-b.html" -->
    ```

### The printenv Element

This prints out a plain text listing of all existing variables and
their values. Special characters are entity encoded (see the `echo` element for details)
before being output. There are no attributes.

### Example

`<pre>
<!--#printenv -->
</pre>`

### The set Element

This sets the value of a variable. Attributes:

`var`
:   The name of the variable to set.

`value`
:   The value to give a variable.

`decoding`
:   Specifies whether Apache should strip an encoding from
    the variable before processing the variable further. The default
    is `none`, where no decoding will be done. If set to
    `url`, `urlencoded`, `base64`
    or `entity`, URL decoding,
    application/x-www-form-urlencoded decoding, base64 decoding or HTML
    entity decoding will be performed respectively. More than one
    decoding can be specified by separating with commas. The decoding
    setting will remain in effect until the next decoding attribute
    is encountered, or the element ends. The `decoding`
    attribute must *precede* the corresponding
    `var` attribute to be effective.

`encoding`
:   Specifies how Apache should encode special characters
    contained in the variable before setting them. The default is
    `none`, where no encoding will be done. If set to
    `url`, `urlencoding`, `base64`
    or `entity`, URL encoding,
    application/x-www-form-urlencoded encoding, base64 encoding or
    HTML entity encoding will be performed respectively. More than
    one encoding can be specified by separating with commas. The
    encoding setting will remain in effect until the next encoding
    attribute is encountered, or the element ends. The
    `encoding` attribute must *precede* the
    corresponding `var` attribute to be effective.
    Encodings are applied after all decodings have been
    stripped.

### Example

`<!--#set var="category" value="help" -->`

[![top](../images/up.gif)](#page-header)

## Include Variables [¶](#includevars "Permanent link")

In addition to the variables in the standard CGI environment,
these are available for the `echo` command, for
`if` and `elif`, and to any program
invoked by the document.

`DATE_GMT`
:   The current date in Greenwich Mean Time.

`DATE_LOCAL`
:   The current date in the local time zone.

`DOCUMENT_ARGS`
:   This variable contains the query string of the active SSI
    document, or the empty string if a query string is not
    included. For subrequests invoked through the
    `include` SSI directive, `QUERY_STRING`
    will represent the query string of the subrequest and
    `DOCUMENT_ARGS` will represent the query string of
    the SSI document. (Available in Apache HTTP Server 2.4.19 and
    later.)

`DOCUMENT_NAME`
:   The filename (excluding directories) of the document
    requested by the user.

`DOCUMENT_PATH_INFO`
:   The trailing pathname information. See directive `AcceptPathInfo` for more information
    about `PATH_INFO`.

`DOCUMENT_URI`
:   The (%-decoded) URL path of the document requested by the
    user. Note that in the case of nested include files, this is
    *not* the URL for the current document. Note also that
    if the URL is modified internally (e.g. by an `alias` or `directoryindex`), the modified
    URL is shown.

`LAST_MODIFIED`
:   The last modification date of the document requested by
    the user.

`QUERY_STRING_UNESCAPED`
:   If a query string is present in the request for the active
    SSI document, this variable contains the (%-decoded) query
    string, which is *escaped* for shell usage (special
    characters like `&` etc. are preceded by
    backslashes). It is not set if a query string is not
    present. Use `DOCUMENT_ARGS` if shell escaping
    is not desired.

`USER_NAME`
:   The user name of the owner of the file.

[![top](../images/up.gif)](#page-header)

## Variable Substitution [¶](#substitution "Permanent link")

Variable substitution is done within quoted strings in most
cases where they may reasonably occur as an argument to an SSI
directive. This includes the `config`,
`exec`, `flastmod`, `fsize`,
`include`, `echo`, and `set`
directives. If `SSILegacyExprParser` is set to `on`,
substitution also occurs in the arguments to conditional operators.
You can insert a literal dollar sign into the string using backslash
quoting:

`<!--#set var="cur" value="\$test" -->`

If a variable reference needs to be substituted in the
middle of a character sequence that might otherwise be
considered a valid identifier in its own right, it can be
disambiguated by enclosing the reference in braces,
*a la* shell substitution:

`<!--#set var="Zed" value="${REMOTE_HOST}_${REQUEST_METHOD}" -->`

This will result in the `Zed` variable being set
to "`X_Y`" if `REMOTE_HOST` is
"`X`" and `REQUEST_METHOD` is
"`Y`".

[![top](../images/up.gif)](#page-header)

## Flow Control Elements [¶](#flowctrl "Permanent link")

The basic flow control elements are:

```
<!--#if expr="test_condition" -->
<!--#elif expr="test_condition" -->
<!--#else -->
<!--#endif -->
```

The `if` element works like an if statement in a
programming language. The test condition is evaluated and if
the result is true, then the text until the next `elif`,
`else` or `endif` element is included in the
output stream.

The `elif` or `else` statements are used
to put text into the output stream if the original
test\_condition was false. These elements are optional.

The `endif` element ends the `if` element
and is required.

test\_condition is a boolean expression which follows the
[ap\_expr](expr.md) syntax. The syntax can be changed
to be compatible with Apache HTTPD 2.2.x using `SSILegacyExprParser`.

The SSI variables set with the `var` element are exported
into the request environment and can be accessed with the
`reqenv` function. As a short-cut, the function name
`v` is also available inside `mod_include`.

The below example will print "from local net" if client IP address
belongs to the 10.0.0.0/8 subnet.

```
<!--#if expr='-R "10.0.0.0/8"' -->
  from local net
<!--#else -->
  from somewhere else
<!--#endif -->
```

The below example will print "foo is bar" if the variable
`foo` is set to the value "bar".

```
<!--#if expr='v("foo") = "bar"' -->
  foo is bar
<!--#endif -->
```

### Reference Documentation

See also: [Expressions in Apache HTTP Server](expr.md),
for a complete reference and examples. The *restricted* functions
are not available inside `mod_include`

[![top](../images/up.gif)](#page-header)

## Legacy expression syntax [¶](#legacyexpr "Permanent link")

This section describes the syntax of the `#if expr`
element if `SSILegacyExprParser`
is set to `on`.

`string`
:   true if string is not empty

`-A string`
:   true if the URL represented by the string is accessible by
    configuration, false otherwise. This is useful where content on a
    page is to be hidden from users who are not authorized to view the
    URL, such as a link to that URL. Note that the URL is only tested
    for whether access would be granted, not whether the URL exists.

    ### Example

    ```
    <!--#if expr="-A /private" -->
      Click <a href="/private">here</a> to access private
      information.
    <!--#endif -->
    ```

`string1 = string2 string1 == string2 string1 != string2`
:   Compare string1 with string2. If
    string2 has the form `/string2/`
    then it is treated as a regular expression. Regular expressions are
    implemented by the [PCRE](http://www.pcre.org) engine and
    have the same syntax as those in [perl
    5](http://www.perl.com). Note that `==` is just an alias for `=`
    and behaves exactly the same way.

    If you are matching positive (`=` or `==`), you
    can capture grouped parts of the regular expression. The captured parts
    are stored in the special variables `$1` ..
    `$9`. The whole string matched by the regular expression is
    stored in the special variable `$0`

    ### Example

    ```
    <!--#if expr="$QUERY_STRING = /^sid=([a-zA-Z0-9]+)/" -->
      <!--#set var="session" value="$1" -->
    <!--#endif -->
    ```

`string1 < string2 string1 <= string2 string1 > string2 string1 >= string2`
:   Compare string1 with string2. Note, that
    strings are compared *literally* (using
    `strcmp(3)`). Therefore the string "100" is less than
    "20".

`( test_condition )`
:   true if test\_condition is true

`! test_condition`
:   true if test\_condition is false

`test_condition1 && test_condition2`
:   true if both test\_condition1 and
    test\_condition2 are true

`test_condition1 || test_condition2`
:   true if either test\_condition1 or
    test\_condition2 is true

"`=`" and "`!=`" bind more tightly than
"`&&`" and "`||`". "`!`" binds
most tightly. Thus, the following are equivalent:

```
<!--#if expr="$a = test1 && $b = test2" -->
<!--#if expr="($a = test1) && ($b = test2)" -->
```

The boolean operators `&&` and `||`
share the same priority. So if you want to bind such an operator more
tightly, you should use parentheses.

Anything that's not recognized as a variable or an operator
is treated as a string. Strings can also be quoted:
`'string'`. Unquoted strings can't contain whitespace
(blanks and tabs) because it is used to separate tokens such as
variables. If multiple strings are found in a row, they are
concatenated using blanks. So,

`string1    string2` results in `string1 string2`  
  
and  
  
`'string1    string2'` results in `string1    string2`.

### Optimization of Boolean Expressions

If the expressions become more complex and slow down processing
significantly, you can try to optimize them according to the
evaluation rules:

- Expressions are evaluated from left to right
- Binary boolean operators (`&&` and `||`)
  are short circuited wherever possible. In conclusion with the rule
  above that means, `mod_include` evaluates at first
  the left expression. If the left result is sufficient to determine
  the end result, processing stops here. Otherwise it evaluates the
  right side and computes the end result from both left and right
  results.
- Short circuit evaluation is turned off as long as there are regular
  expressions to deal with. These must be evaluated to fill in the
  backreference variables (`$1` .. `$9`).

If you want to look how a particular expression is handled, you can
recompile `mod_include` using the
`-DDEBUG_INCLUDE` compiler option. This inserts for every
parsed expression tokenizer information, the parse tree and how it is
evaluated into the output sent to the client.

### Escaping slashes in regex strings

All slashes which are not intended to act as delimiters in your regex must
be escaped. This is regardless of their meaning to the regex engine.

[![top](../images/up.gif)](#page-header)

## SSIEndTag Directive [¶](#ssiendtag "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | String that ends an include element |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSIEndTag tag` |
| [Default:](mod__directive-dict.md#Default) | `SSIEndTag "-->"` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_include |

This directive changes the string that `mod_include`
looks for to mark the end of an include element.

```
SSIEndTag "%>"
```

Value may not include any whitespace.

### See also

- `SSIStartTag`

[![top](../images/up.gif)](#page-header)

## SSIErrorMsg Directive [¶](#ssierrormsg "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Error message displayed when there is an SSI error |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSIErrorMsg message` |
| [Default:](mod__directive-dict.md#Default) | `SSIErrorMsg "[an error occurred while processing this directive]"` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | All |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_include |

The `SSIErrorMsg` directive changes the error
message displayed when `mod_include` encounters an
error. For production servers you may consider changing the default
error message to `"<!-- Error -->"` so that
the message is not presented to the user.

This directive has the same effect as the `<!--#config
errmsg=message -->` element.

```
SSIErrorMsg "<!-- Error -->"
```

[![top](../images/up.gif)](#page-header)

## SSIETag Directive [¶](#ssietag "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Controls whether ETags are generated by the server. |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSIETag on|off` |
| [Default:](mod__directive-dict.md#Default) | `SSIETag off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_include |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.2.15 and later. |

Under normal circumstances, a file filtered by `mod_include`
may contain elements that are either dynamically generated, or that may
have changed independently of the original file. As a result, by default
the server is asked not to generate an `ETag` header for the
response by adding `no-etag` to the request notes.

The `SSIETag` directive suppresses this
behavior, and allows the server to generate an `ETag` header.
This can be used to enable caching of the output. Note that a backend server
or dynamic content generator may generate an ETag of its own, ignoring
`no-etag`, and this ETag will be passed by
`mod_include` regardless of the value of this setting.
`SSIETag` can take on the following values:

`off`
:   `no-etag` will be added to the request notes, and the server
    is asked not to generate an ETag. Where a server ignores the value of
    `no-etag` and generates an ETag anyway, the ETag will be
    respected.

`on`
:   Existing ETags will be respected, and ETags generated by the server will
    be passed on in the response.

[![top](../images/up.gif)](#page-header)

## SSILastModified Directive [¶](#ssilastmodified "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Controls whether `Last-Modified` headers are generated by the server. |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSILastModified on|off` |
| [Default:](mod__directive-dict.md#Default) | `SSILastModified off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_include |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.2.15 and later. |

Under normal circumstances, a file filtered by `mod_include`
may contain elements that are either dynamically generated, or that may
have changed independently of the original file. As a result, by default
the `Last-Modified` header is stripped from the response.

The `SSILastModified` directive overrides this
behavior, and allows the `Last-Modified` header to be respected
if already present, or set if the header is not already present. This can
be used to enable caching of the output. `SSILastModified`
can take on the following values:

`off`
:   The `Last-Modified` header will be stripped from responses,
    unless the `XBitHack` directive
    is set to `full` as described below.

`on`
:   The `Last-Modified` header will be respected if already
    present in a response, and added to the response if the response is a
    file and the header is missing. The
    `SSILastModified` directive
    takes precedence over `XBitHack`.

[![top](../images/up.gif)](#page-header)

## SSILegacyExprParser Directive [¶](#ssilegacyexprparser "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable compatibility mode for conditional expressions. |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSILegacyExprParser on|off` |
| [Default:](mod__directive-dict.md#Default) | `SSILegacyExprParser off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_include |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.3.13 and later. |

As of version 2.3.13, `mod_include` has switched to the
new [ap\_expr](expr.md) syntax for conditional expressions
in `#if` flow control elements. This directive allows to
switch to the [old syntax](#legacyexpr) which is compatible
with Apache HTTPD version 2.2.x and earlier.

[![top](../images/up.gif)](#page-header)

## SSIStartTag Directive [¶](#ssistarttag "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | String that starts an include element |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSIStartTag tag` |
| [Default:](mod__directive-dict.md#Default) | `SSIStartTag "<!--#"` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_include |

This directive changes the string that `mod_include`
looks for to mark an include element to process.

You may want to use this option if you have 2 servers parsing the
output of a file each processing different commands (possibly at
different times).

```
SSIStartTag "<%"
SSIEndTag   "%>"
```

Value may not include any whitespace.

The example given above, which also specifies a matching
`SSIEndTag`, will
allow you to use SSI directives as shown in the example
below:

### SSI directives with alternate start and end tags

`<%printenv %>`

### See also

- `SSIEndTag`

[![top](../images/up.gif)](#page-header)

## SSITimeFormat Directive [¶](#ssitimeformat "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Configures the format in which date strings are displayed |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSITimeFormat formatstring` |
| [Default:](mod__directive-dict.md#Default) | `SSITimeFormat "%A, %d-%b-%Y %H:%M:%S %Z"` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | All |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_include |

This directive changes the format in which date strings are displayed
when echoing `DATE` environment variables. The
formatstring is as in `strftime(3)` from the
C standard library.

This directive has the same effect as the `<!--#config
timefmt=formatstring -->` element.

```
SSITimeFormat "%R, %B %d, %Y"
```

The above directive would cause times to be displayed in the
format "22:26, June 14, 2002".

[![top](../images/up.gif)](#page-header)

## SSIUndefinedEcho Directive [¶](#ssiundefinedecho "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | String displayed when an unset variable is echoed |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSIUndefinedEcho string` |
| [Default:](mod__directive-dict.md#Default) | `SSIUndefinedEcho "(none)"` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | All |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_include |

This directive changes the string that `mod_include`
displays when a variable is not set and "echoed".

```
SSIUndefinedEcho "<!-- undef -->"
```

[![top](../images/up.gif)](#page-header)

## XBitHack Directive [¶](#xbithack "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Parse SSI directives in files with the execute bit set |
| [Syntax:](mod__directive-dict.md#Syntax) | `XBitHack on|off|full` |
| [Default:](mod__directive-dict.md#Default) | `XBitHack off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_include |

The `XBitHack` directive controls the parsing
of ordinary html documents. This directive only affects files associated
with the [MIME-type](glossary.md#mime-type "see glossary") `text/html`. `XBitHack` can take on the following values:

`off`
:   No special treatment of executable files.

`on`
:   Any `text/html` file that has the user-execute bit
    set will be treated as a server-parsed html document.

`full`
:   As for `on` but also test the group-execute bit.
    If it is set, then set the `Last-modified` date of the
    returned file to be the last modified time of the file. If
    it is not set, then no last-modified date is sent. Setting
    this bit allows clients and proxies to cache the result of
    the request.

    ### Note

    You would not want to use the full option, unless you assure the
    group-execute bit is unset for every SSI script which might `#include` a CGI or otherwise produces different output on
    each hit (or could potentially change on subsequent requests).

    The `SSILastModified`
    directive takes precedence over the
    `XBitHack` directive when
    `SSILastModified` is set to
    `on`.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_include.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_include.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_include.html "Japanese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
