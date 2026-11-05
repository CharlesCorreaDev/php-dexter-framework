# Using RewriteMap - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/rewrite/rewritemap.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](rewrite.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Rewrite](rewrite.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/rewrite/rewritemap.html) to go to the current version of this document.

# Using RewriteMap

This document supplements the `mod_rewrite`
[reference documentation](mod__mod_rewrite.md). It describes
the use of the `RewriteMap` directive,
and provides examples of each of the various `RewriteMap` types.

Note that many of these examples won't work unchanged in your
particular server configuration, so it's important that you understand
them, rather than merely cutting and pasting the examples into your
configuration.

- ![](../images/down.gif) [Introduction](#introduction)
- ![](../images/down.gif) [txt: Plain text maps](#txt)
- ![](../images/down.gif) [rnd: Randomized Plain Text](#rnd)
- ![](../images/down.gif) [dbm: DBM Hash File](#dbm)
- ![](../images/down.gif) [int: Internal Function](#int)
- ![](../images/down.gif) [prg: External Rewriting Program](#prg)
- ![](../images/down.gif) [Summary](#summary)

### See also

- [Module documentation](mod__mod_rewrite.md)
- [mod\_rewrite introduction](rewrite__intro.md)
- [Redirection and remapping](rewrite__remapping.md)
- [Controlling access](rewrite__access.md)
- [Virtual hosts](rewrite__vhosts.md)
- [Proxying](rewrite__proxy.md)
- [Advanced techniques and tricks](rewrite__advanced.md)
- [When not to use mod\_rewrite](rewrite__avoid.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Introduction

The `RewriteMap` directive
defines an external function which can be called in the context of
`RewriteRule` or
`RewriteCond` directives to
perform rewriting that is too complicated, or too specialized to be
performed just by regular expressions. The source of this lookup can
be any of the types listed in the sections below, and enumerated in
the `RewriteMap` reference
documentation.

The syntax of the `RewriteMap` directive is as
follows:

`RewriteMap MapName MapType:MapSource`

The *MapName* is an
arbitray name that you assign to the map, and which you will use in
directives later on. Arguments are passed to the map via the
following syntax:

**`${` *MapName* `:` *LookupKey*
`}`   
 `${` *MapName* `:`
*LookupKey* `|` *DefaultValue* `}`**

When such a construct occurs, the map *MapName* is
consulted and the key *LookupKey* is looked-up. If the
key is found, the map-function construct is substituted by
*SubstValue*. If the key is not found then it is
substituted by *DefaultValue* or by the empty string
if no *DefaultValue* was specified.

For example, you might define a
`RewriteMap` as:

`RewriteMap examplemap txt:/path/to/file/map.txt`

You would then be able to use this map in a
`RewriteRule` as follows:

`RewriteRule ^/ex/(.*) ${examplemap:$1}`

A default value can be specified in the event that nothing is found
in the map:

`RewriteRule ^/ex/(.*) ${examplemap:$1|/not_found.html}`

### Per-directory and .htaccess context

The `RewriteMap` directive may not be used in
<Directory> sections or `.htaccess` files. You must
declare the map in server or virtualhost context. You may use the map,
once created, in your `RewriteRule` and
`RewriteCond` directives in those scopes. You just can't
**declare** it in those scopes.

The sections that follow describe the various *MapType*s that
may be used, and give examples of each.

[![top](../images/up.gif)](#page-header)

## txt: Plain text maps

When a MapType of `txt` is used, the MapSource is a filesystem path to a
plain-text mapping file, containing space-separated key/value pair
per line. Optionally, a line may be contain a comment, starting with
a '#' character.

For example, the following might be valid entries in a map
file.

# Comment line  
***MatchingKey* *SubstValue***  
***MatchingKey* *SubstValue*** # comment

When the RewriteMap is invoked the argument is looked for in the
first argument of a line, and, if found, the substitution value is
returned.

For example, we might use a mapfile to translate product names to
product IDs for easier-to-remember URLs, using the following
recipe:

### Product to ID configuration

`RewriteMap product2id txt:/etc/apache2/productmap.txt  
RewriteRule ^/product/(.*) /prods.php?id=${product2id:$1|NOTFOUND} [PT]`

We assume here that the `prods.php` script knows what
to do when it received an argument of `id=NOTFOUND` when
a product is not found in the lookup map.

The file `/etc/apache2/productmap.txt` then contains
the following:

### Product to ID map

`##  
## productmap.txt - Product to ID map file  
##  
  
television 993  
stereo 198  
fishingrod 043  
basketball 418  
telephone 328`

Thus, when `http://example.com/product/television` is
requested, the `RewriteRule` is applied, and the request
is internally mapped to `/prods.php?id=993`.

### Note: .htaccess files

The example given is crafted to be used in server or virtualhost
scope. If you're planning to use this in a `.htaccess`
file, you'll need to remove the leading slash from the rewrite
pattern in order for it to match anything:

`RewriteRule ^product/(.*) /prods.php?id=${product2id:$1|NOTFOUND} [PT]`

### Cached lookups

The looked-up keys are cached by httpd until the `mtime`
(modified time) of the mapfile changes, or the httpd server is
restarted. This ensures better performance on maps that are called
by many requests.

[![top](../images/up.gif)](#page-header)

## rnd: Randomized Plain Text

When a MapType of `rnd` is used, the MapSource is a
filesystem path to a plain-text mapping file, each line of which
contains a key, and one or more values separated by `|`.
One of these values will be chosen at random if the key is
matched.

For example, you might use the following map
file and directives to provide a random load balancing between
several back-end server, via a reverse-proxy. Images are sent
to one of the servers in the 'static' pool, while everything
else is sent to one of the 'dynamic' pool.

### Rewrite map file

`##  
## map.txt -- rewriting map  
##  
  
static www1|www2|www3|www4  
dynamic www5|www6`

### Configuration directives

`RewriteMap servers rnd:/path/to/file/map.txt  
  
RewriteRule ^/(.*\.(png|gif|jpg)) http://${servers:static}/$1 [NC,P,L]  
RewriteRule ^/(.*) http://${servers:dynamic}/$1 [P,L]`

So, when an image is requested and the first of these rules is
matched, `RewriteMap` looks up the string
`static` in the map file, which returns one of the
specified hostnames at random, which is then used in the
`RewriteRule` target.

If you wanted to have one of the servers more likely to be chosen
(for example, if one of the server has more memory than the others,
and so can handle more requests) simply list it more times in the
map file.

`static www1|www1|www2|www3|www4`

[![top](../images/up.gif)](#page-header)

## dbm: DBM Hash File

When a MapType of `dbm` is used, the MapSource is a
filesystem path to a DBM database file containing key/value pairs to
be used in the mapping. This works exactly the same way as the
`txt` map, but is much faster, because a DBM is indexed,
whereas a text file is not. This allows more rapid access to the
desired key.

You may optionally specify a particular dbm type:

`RewriteMap examplemap dbm=sdbm:/etc/apache/mapfile.dbm`

The type can be sdbm, gdbm, ndbm or db.
However, it is recommended that you just use the [httxt2dbm](programs__httxt2dbm.md) utility that is
provided with Apache HTTP Server, as it will use the correct DBM library,
matching the one that was used when httpd itself was built.

To create a dbm file, first create a text map file as described
in the [txt](#txt) section. Then run
`httxt2dbm`:

`$ httxt2dbm -i mapfile.txt -o mapfile.map`

You can then reference the resulting file in your
`RewriteMap` directive:

`RewriteMap mapname dbm:/etc/apache/mapfile.map`

Note that with some dbm types, more than one file is generated, with
a common base name. For example, you may have two files named
`mapfile.map.dir` and `mapfiile.map.pag`. This is
normal, and you need only use the base name `mapfile.map` in
your `RewriteMap` directive.

### Cached lookups

The looked-up keys are cached by httpd until the `mtime`
(modified time) of the mapfile changes, or the httpd server is
restarted. This ensures better performance on maps that are called
by many requests.

[![top](../images/up.gif)](#page-header)

## int: Internal Function

When a MapType of `int` is used, the MapSource is one
of the available internal RewriteMap functions. Module authors can provide
additional internal functions by registering them with the
`ap_register_rewrite_mapfunc` API.
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

To use one of these functions, create a `RewriteMap` referencing
the int function, and then use that in your `RewriteRule`:

### Redirect a URI to an all-lowercase version of itself

`RewriteMap lc int:tolower  
RewriteRule (.*[A-Z]+.*) ${lc:$1} [R]`

Please note that the example offered here is for
illustration purposes only, and is not a recommendation. If you want
to make URLs case-insensitive, consider using
`mod_speling` instead.

[![top](../images/up.gif)](#page-header)

## prg: External Rewriting Program

When a MapType of `prg` is used, the MapSource is a
filesystem path to an executable program which will providing the
mapping behavior. This can be a compiled binary file, or a program
in an interpreted language such as Perl or Python.

This program is started once, when the Apache HTTP Server is
started, and then communicates with the rewriting engine via
`STDIN` and `STDOUT`. That is, for each map
function lookup, it expects one argument via `STDIN`, and
should return one new-line terminated response string on
`STDOUT`. If there is no corresponding lookup value, the
map program should return the four-character string
"`NULL`" to indicate this.

External rewriting programs are not started if they're defined in
a context that does not have `RewriteEngine` set to
`on`.

A simple example is shown here which will replace all dashes with
underscores in a request URI.

### Rewrite configuration

`RewriteMap d2u prg:/www/bin/dash2under.pl  
RewriteRule - ${d2u:%{REQUEST_URI}}`

### dash2under.pl

`#!/usr/bin/perl  
$| = 1; # Turn off I/O buffering  
while (<STDIN>) {  

s/-/_/g; # Replace dashes with underscores  
print $_;  
}`

### Use a RewriteLock!

When using a `prg:` RewriteMap, you should use a
`RewriteLock`. Failure to do so
will result in an error message in the log file, and may result in a
race condition on concurrent requests.

### Caution!

- Keep your rewrite map program as simple as possible. If the program
  hangs, it will cause httpd to wait indefinitely for a response from the
  map, which will, in turn, cause httpd to stop responding to
  requests.
- Be sure to turn off buffering in your program. In Perl this is done
  by the second line in the example script: `$| = 1;` This will
  of course vary in other languages. Buffered I/O will cause httpd to wait
  for the output, and so it will hang.
- Remember that there is only one copy of the program, started at
  server startup. All requests will need to go through this one bottleneck.
  This can cause significant slowdowns if many requests must go through
  this process, or if the script itself is very slow.

[![top](../images/up.gif)](#page-header)

## Summary

The `RewriteMap` directive can occur more than
once. For each mapping-function use one
`RewriteMap` directive to declare its rewriting
mapfile.

While you cannot **declare** a map in
per-directory context (`.htaccess` files or
<Directory> blocks) it is possible to
**use** this map in per-directory context.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/rewrite/rewritemap.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
