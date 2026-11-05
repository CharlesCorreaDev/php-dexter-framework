# Apache 1.3 API notes - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/developer/API.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](developer.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Developer Documentation](developer.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/developer/API.html) to go to the current version of this document.

# Apache 1.3 API notes

### Warning

This document has not been updated to take into account changes made
in the 2.0 version of the Apache HTTP Server. Some of the information may
still be relevant, but please use it with care.

These are some notes on the Apache API and the data structures you have
to deal with, *etc.* They are not yet nearly complete, but hopefully,
they will help you get your bearings. Keep in mind that the API is still
subject to change as we gain experience with it. (See the TODO file for
what *might* be coming). However, it will be easy to adapt modules
to any changes that are made. (We have more modules to adapt than you
do).

A few notes on general pedagogical style here. In the interest of
conciseness, all structure declarations here are incomplete -- the real
ones have more slots that I'm not telling you about. For the most part,
these are reserved to one component of the server core or another, and
should be altered by modules with caution. However, in some cases, they
really are things I just haven't gotten around to yet. Welcome to the
bleeding edge.

Finally, here's an outline, to give you some bare idea of what's coming
up, and in what order:

- [Basic concepts.](#basics)
  - [Handlers, Modules, and
    Requests](#HMR)
  - [A brief tour of a
    module](#moduletour)
- [How handlers work](#handlers)
  - [A brief tour of the
    `request_rec`](#req_tour)
  - [Where request\_rec structures come
    from](#req_orig)
  - [Handling requests, declining,
    and returning error codes](#req_return)
  - [Special considerations for
    response handlers](#resp_handlers)
  - [Special considerations for
    authentication handlers](#auth_handlers)
  - [Special considerations for
    logging handlers](#log_handlers)
- [Resource allocation and resource
  pools](#pools)
- [Configuration, commands and the like](#config)
  - [Per-directory configuration
    structures](#per-dir)
  - [Command handling](#commands)
  - [Side notes --- per-server
    configuration, virtual servers, *etc*.](#servconf)

- ![](../images/down.gif) [Basic concepts](#basics)
- ![](../images/down.gif) [How handlers work](#handlers)
- ![](../images/down.gif) [Resource allocation and resource pools](#pools)
- ![](../images/down.gif) [Configuration, commands and the like](#config)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Basic concepts

We begin with an overview of the basic concepts behind the API, and how
they are manifested in the code.

### Handlers, Modules, and Requests

Apache breaks down request handling into a series of steps, more or
less the same way the Netscape server API does (although this API has a
few more stages than NetSite does, as hooks for stuff I thought might be
useful in the future). These are:

- URI -> Filename translation
- Auth ID checking [is the user who they say they are?]
- Auth access checking [is the user authorized *here*?]
- Access checking other than auth
- Determining MIME type of the object requested
- `Fixups' -- there aren't any of these yet, but the phase is intended
  as a hook for possible extensions like `SetEnv`, which don't really fit well elsewhere.
- Actually sending a response back to the client.
- Logging the request

These phases are handled by looking at each of a succession of
*modules*, looking to see if each of them has a handler for the
phase, and attempting invoking it if so. The handler can typically do one
of three things:

- *Handle* the request, and indicate that it has done so by
  returning the magic constant `OK`.
- *Decline* to handle the request, by returning the magic integer
  constant `DECLINED`. In this case, the server behaves in all
  respects as if the handler simply hadn't been there.
- Signal an error, by returning one of the HTTP error codes. This
  terminates normal handling of the request, although an ErrorDocument may
  be invoked to try to mop up, and it will be logged in any case.

Most phases are terminated by the first module that handles them;
however, for logging, `fixups', and non-access authentication checking,
all handlers always run (barring an error). Also, the response phase is
unique in that modules may declare multiple handlers for it, via a
dispatch table keyed on the MIME type of the requested object. Modules may
declare a response-phase handler which can handle *any* request,
by giving it the key `*/*` (*i.e.*, a wildcard MIME type
specification). However, wildcard handlers are only invoked if the server
has already tried and failed to find a more specific response handler for
the MIME type of the requested object (either none existed, or they all
declined).

The handlers themselves are functions of one argument (a
`request_rec` structure. vide infra), which returns an integer,
as above.

### A brief tour of a module

At this point, we need to explain the structure of a module. Our
candidate will be one of the messier ones, the CGI module -- this handles
both CGI scripts and the `ScriptAlias` config file command. It's actually a great deal
more complicated than most modules, but if we're going to have only one
example, it might as well be the one with its fingers in every place.

Let's begin with handlers. In order to handle the CGI scripts, the
module declares a response handler for them. Because of `ScriptAlias`, it also has handlers for the
name translation phase (to recognize `ScriptAlias`ed URIs), the type-checking phase (any
`ScriptAlias`ed request is typed
as a CGI script).

The module needs to maintain some per (virtual) server information,
namely, the `ScriptAlias`es in
effect; the module structure therefore contains pointers to a functions
which builds these structures, and to another which combines two of them
(in case the main server and a virtual server both have `ScriptAlias`es declared).

Finally, this module contains code to handle the `ScriptAlias` command itself. This particular
module only declares one command, but there could be more, so modules have
*command tables* which declare their commands, and describe where
they are permitted, and how they are to be invoked.

A final note on the declared types of the arguments of some of these
commands: a `pool` is a pointer to a *resource pool*
structure; these are used by the server to keep track of the memory which
has been allocated, files opened, *etc.*, either to service a
particular request, or to handle the process of configuring itself. That
way, when the request is over (or, for the configuration pool, when the
server is restarting), the memory can be freed, and the files closed,
*en masse*, without anyone having to write explicit code to track
them all down and dispose of them. Also, a `cmd_parms`
structure contains various information about the config file being read,
and other status information, which is sometimes of use to the function
which processes a config-file command (such as `ScriptAlias`). With no further ado, the
module itself:

`/* Declarations of handlers. */  
  
int translate_scriptalias (request_rec *);  
int type_scriptalias (request_rec *);  
int cgi_handler (request_rec *);  
  
/* Subsidiary dispatch table for response-phase   
 * handlers, by MIME type */  
  
handler_rec cgi_handlers[] = {  

{ "application/x-httpd-cgi", cgi_handler },  
{ NULL }  
};  
  
/* Declarations of routines to manipulate the   
 * module's configuration info. Note that these are  
 * returned, and passed in, as void *'s; the server  
 * core keeps track of them, but it doesn't, and can't,  
 * know their internal structure.  
 */  
  
void *make_cgi_server_config (pool *);  
void *merge_cgi_server_config (pool *, void *, void *);  
  
/* Declarations of routines to handle config-file commands */  
  
extern char *script_alias(cmd_parms *, void *per_dir_config, char *fake,
char *real);  
  
command_rec cgi_cmds[] = {  

{ "ScriptAlias", script_alias, NULL, RSRC_CONF, TAKE2,  
"a fakename and a realname"},  
{ NULL }  
};  
  
module cgi_module = {`

```
  STANDARD_MODULE_STUFF,
  NULL,                     /* initializer */
  NULL,                     /* dir config creator */
  NULL,                     /* dir merger */
  make_cgi_server_config,   /* server config */
  merge_cgi_server_config,  /* merge server config */
  cgi_cmds,                 /* command table */
  cgi_handlers,             /* handlers */
  translate_scriptalias,    /* filename translation */
  NULL,                     /* check_user_id */
  NULL,                     /* check auth */
  NULL,                     /* check access */
  type_scriptalias,         /* type_checker */
  NULL,                     /* fixups */
  NULL,                     /* logger */
  NULL                      /* header parser */
};
```

[![top](../images/up.gif)](#page-header)

## How handlers work

The sole argument to handlers is a `request_rec` structure.
This structure describes a particular request which has been made to the
server, on behalf of a client. In most cases, each connection to the
client generates only one `request_rec` structure.

### A brief tour of the request\_rec

The `request_rec` contains pointers to a resource pool
which will be cleared when the server is finished handling the request;
to structures containing per-server and per-connection information, and
most importantly, information on the request itself.

The most important such information is a small set of character strings
describing attributes of the object being requested, including its URI,
filename, content-type and content-encoding (these being filled in by the
translation and type-check handlers which handle the request,
respectively).

Other commonly used data items are tables giving the MIME headers on
the client's original request, MIME headers to be sent back with the
response (which modules can add to at will), and environment variables for
any subprocesses which are spawned off in the course of servicing the
request. These tables are manipulated using the `ap_table_get`
and `ap_table_set` routines.

Note that the `Content-type` header value *cannot*
be set by module content-handlers using the `ap_table_*()`
routines. Rather, it is set by pointing the `content_type`
field in the `request_rec` structure to an appropriate
string. *e.g.*,

`r->content_type = "text/html";`

Finally, there are pointers to two data structures which, in turn,
point to per-module configuration structures. Specifically, these hold
pointers to the data structures which the module has built to describe
the way it has been configured to operate in a given directory (via
`.htaccess` files or `<Directory>` sections), for private data it has built in the
course of servicing the request (so modules' handlers for one phase can
pass `notes' to their handlers for other phases). There is another such
configuration vector in the `server_rec` data structure pointed
to by the `request_rec`, which contains per (virtual) server
configuration data.

Here is an abridged declaration, giving the fields most commonly
used:

`struct request_rec {  
  
pool *pool;  
conn_rec *connection;  
server_rec *server;  
  
/* What object is being requested */  
  
char *uri;  
char *filename;  
char *path_info;`

```
char *args;           /* QUERY_ARGS, if any */
struct stat finfo;    /* Set by server core;
                       * st_mode set to zero if no such file */
```

`char *content_type;  
char *content_encoding;  
  
/* MIME header environments, in and out. Also,   
 * an array containing environment variables to  
 * be passed to subprocesses, so people can write  
 * modules to add to that environment.  
 *  
 * The difference between headers_out and   
 * err_headers_out is that the latter are printed   
 * even on error, and persist across internal  
 * redirects (so the headers printed for   
 * ErrorDocument handlers will have
them).  
 */  
  
table *headers_in;  
table *headers_out;  
table *err_headers_out;  
table *subprocess_env;  
  
/* Info about the request itself... */`

```
int header_only;     /* HEAD request, as opposed to GET */
char *protocol;      /* Protocol, as given to us, or HTTP/0.9 */
char *method;        /* GET, HEAD, POST, etc. */
int method_number;   /* M_GET, M_POST, etc. */
```

`/* Info for logging */  
  
char *the_request;  
int bytes_sent;  
  
/* A flag which modules can set, to indicate that  
 * the data being returned is volatile, and clients  
 * should be told not to cache it.  
 */  
  
int no_cache;  
  
/* Various other config info which may change  
 * with .htaccess files  
 * These are config vectors, with one void*  
 * pointer for each module (the thing pointed  
 * to being the module's business).  
 */`

```
void *per_dir_config;   /* Options set in config files, etc. */
void *request_config;   /* Notes on *this* request */
```

`};`

### Where request\_rec structures come from

Most `request_rec` structures are built by reading an HTTP
request from a client, and filling in the fields. However, there are a
few exceptions:

- If the request is to an imagemap, a type map (*i.e.*, a
  `*.var` file), or a CGI script which returned a local
  `Location:', then the resource which the user requested is going to be
  ultimately located by some URI other than what the client originally
  supplied. In this case, the server does an *internal redirect*,
  constructing a new `request_rec` for the new URI, and
  processing it almost exactly as if the client had requested the new URI
  directly.
- If some handler signaled an error, and an `ErrorDocument`
  is in scope, the same internal redirect machinery comes into play.
- Finally, a handler occasionally needs to investigate `what would
  happen if' some other request were run. For instance, the directory
  indexing module needs to know what MIME type would be assigned to a
  request for each directory entry, in order to figure out what icon to
  use.

  Such handlers can construct a *sub-request*, using the
  functions `ap_sub_req_lookup_file`,
  `ap_sub_req_lookup_uri`, and `ap_sub_req_method_uri`;
  these construct a new `request_rec` structure and processes it
  as you would expect, up to but not including the point of actually sending
  a response. (These functions skip over the access checks if the
  sub-request is for a file in the same directory as the original
  request).

  (Server-side includes work by building sub-requests and then actually
  invoking the response handler for them, via the function
  `ap_run_sub_req`).

### Handling requests, declining, and returning error codes

As discussed above, each handler, when invoked to handle a particular
`request_rec`, has to return an `int` to indicate
what happened. That can either be

- `OK` -- the request was handled successfully. This may or
  may not terminate the phase.
- `DECLINED` -- no erroneous condition exists, but the module
  declines to handle the phase; the server tries to find another.
- an HTTP error code, which aborts handling of the request.

Note that if the error code returned is `REDIRECT`, then
the module should put a `Location` in the request's
`headers_out`, to indicate where the client should be
redirected *to*.

### Special considerations for response handlers

Handlers for most phases do their work by simply setting a few fields
in the `request_rec` structure (or, in the case of access
checkers, simply by returning the correct error code). However, response
handlers have to actually send a request back to the client.

They should begin by sending an HTTP response header, using the
function `ap_send_http_header`. (You don't have to do anything
special to skip sending the header for HTTP/0.9 requests; the function
figures out on its own that it shouldn't do anything). If the request is
marked `header_only`, that's all they should do; they should
return after that, without attempting any further output.

Otherwise, they should produce a request body which responds to the
client as appropriate. The primitives for this are `ap_rputc`
and `ap_rprintf`, for internally generated output, and
`ap_send_fd`, to copy the contents of some `FILE *`
straight to the client.

At this point, you should more or less understand the following piece
of code, which is the handler which handles `GET` requests
which have no more specific handler; it also shows how conditional
`GET`s can be handled, if it's desirable to do so in a
particular response handler -- `ap_set_last_modified` checks
against the `If-modified-since` value supplied by the client,
if any, and returns an appropriate code (which will, if nonzero, be
USE\_LOCAL\_COPY). No similar considerations apply for
`ap_set_content_length`, but it returns an error code for
symmetry.

`int default_handler (request_rec *r)  
{  

int errstatus;  
FILE *f;  
  
if (r->method_number != M_GET) return DECLINED;  
if (r->finfo.st_mode == 0) return NOT_FOUND;  
  
if ((errstatus = ap_set_content_length (r, r->finfo.st_size))  
    ||
(errstatus = ap_set_last_modified (r, r->finfo.st_mtime)))  
return errstatus;  
  
f = fopen (r->filename, "r");  
  
if (f == NULL) {  

log_reason("file permissions deny server access", r->filename, r);  
return FORBIDDEN;  
}  
  
register_timeout ("send", r);  
ap_send_http_header (r);  
  
if (!r->header_only) send_fd (f, r);  
ap_pfclose (r->pool, f);  
return OK;  
}`

Finally, if all of this is too much of a challenge, there are a few
ways out of it. First off, as shown above, a response handler which has
not yet produced any output can simply return an error code, in which
case the server will automatically produce an error response. Secondly,
it can punt to some other handler by invoking
`ap_internal_redirect`, which is how the internal redirection
machinery discussed above is invoked. A response handler which has
internally redirected should always return `OK`.

(Invoking `ap_internal_redirect` from handlers which are
*not* response handlers will lead to serious confusion).

### Special considerations for authentication handlers

Stuff that should be discussed here in detail:

- Authentication-phase handlers not invoked unless auth is
  configured for the directory.
- Common auth configuration stored in the core per-dir
  configuration; it has accessors `ap_auth_type`,
  `ap_auth_name`, and `ap_requires`.
- Common routines, to handle the protocol end of things, at
  least for HTTP basic authentication
  (`ap_get_basic_auth_pw`, which sets the
  `connection->user` structure field
  automatically, and `ap_note_basic_auth_failure`,
  which arranges for the proper `WWW-Authenticate:`
  header to be sent back).

### Special considerations for logging handlers

When a request has internally redirected, there is the question of
what to log. Apache handles this by bundling the entire chain of redirects
into a list of `request_rec` structures which are threaded
through the `r->prev` and `r->next` pointers.
The `request_rec` which is passed to the logging handlers in
such cases is the one which was originally built for the initial request
from the client; note that the `bytes_sent` field will only be
correct in the last request in the chain (the one for which a response was
actually sent).

[![top](../images/up.gif)](#page-header)

## Resource allocation and resource pools

One of the problems of writing and designing a server-pool server is
that of preventing leakage, that is, allocating resources (memory, open
files, *etc.*), without subsequently releasing them. The resource
pool machinery is designed to make it easy to prevent this from happening,
by allowing resource to be allocated in such a way that they are
*automatically* released when the server is done with them.

The way this works is as follows: the memory which is allocated, file
opened, *etc.*, to deal with a particular request are tied to a
*resource pool* which is allocated for the request. The pool is a
data structure which itself tracks the resources in question.

When the request has been processed, the pool is *cleared*. At
that point, all the memory associated with it is released for reuse, all
files associated with it are closed, and any other clean-up functions which
are associated with the pool are run. When this is over, we can be confident
that all the resource tied to the pool have been released, and that none of
them have leaked.

Server restarts, and allocation of memory and resources for per-server
configuration, are handled in a similar way. There is a *configuration
pool*, which keeps track of resources which were allocated while reading
the server configuration files, and handling the commands therein (for
instance, the memory that was allocated for per-server module configuration,
log files and other files that were opened, and so forth). When the server
restarts, and has to reread the configuration files, the configuration pool
is cleared, and so the memory and file descriptors which were taken up by
reading them the last time are made available for reuse.

It should be noted that use of the pool machinery isn't generally
obligatory, except for situations like logging handlers, where you really
need to register cleanups to make sure that the log file gets closed when
the server restarts (this is most easily done by using the function `ap_pfopen`, which also arranges for the
underlying file descriptor to be closed before any child processes, such as
for CGI scripts, are `exec`ed), or in case you are using the
timeout machinery (which isn't yet even documented here). However, there are
two benefits to using it: resources allocated to a pool never leak (even if
you allocate a scratch string, and just forget about it); also, for memory
allocation, `ap_palloc` is generally faster than
`malloc`.

We begin here by describing how memory is allocated to pools, and then
discuss how other resources are tracked by the resource pool machinery.

### Allocation of memory in pools

Memory is allocated to pools by calling the function
`ap_palloc`, which takes two arguments, one being a pointer to
a resource pool structure, and the other being the amount of memory to
allocate (in `char`s). Within handlers for handling requests,
the most common way of getting a resource pool structure is by looking at
the `pool` slot of the relevant `request_rec`; hence
the repeated appearance of the following idiom in module code:

`int my_handler(request_rec *r)  
{  

struct my_structure *foo;  
...  
  
foo = (foo *)ap_palloc (r->pool, sizeof(my_structure));  
}`

Note that *there is no `ap_pfree`* --
`ap_palloc`ed memory is freed only when the associated resource
pool is cleared. This means that `ap_palloc` does not have to
do as much accounting as `malloc()`; all it does in the typical
case is to round up the size, bump a pointer, and do a range check.

(It also raises the possibility that heavy use of
`ap_palloc` could cause a server process to grow excessively
large. There are two ways to deal with this, which are dealt with below;
briefly, you can use `malloc`, and try to be sure that all of
the memory gets explicitly `free`d, or you can allocate a
sub-pool of the main pool, allocate your memory in the sub-pool, and clear
it out periodically. The latter technique is discussed in the section
on sub-pools below, and is used in the directory-indexing code, in order
to avoid excessive storage allocation when listing directories with
thousands of files).

### Allocating initialized memory

There are functions which allocate initialized memory, and are
frequently useful. The function `ap_pcalloc` has the same
interface as `ap_palloc`, but clears out the memory it
allocates before it returns it. The function `ap_pstrdup`
takes a resource pool and a `char *` as arguments, and
allocates memory for a copy of the string the pointer points to, returning
a pointer to the copy. Finally `ap_pstrcat` is a varargs-style
function, which takes a pointer to a resource pool, and at least two
`char *` arguments, the last of which must be
`NULL`. It allocates enough memory to fit copies of each of
the strings, as a unit; for instance:

`ap_pstrcat (r->pool, "foo", "/", "bar", NULL);`

returns a pointer to 8 bytes worth of memory, initialized to
`"foo/bar"`.

### Commonly-used pools in the Apache Web server

A pool is really defined by its lifetime more than anything else.
There are some static pools in http\_main which are passed to various
non-http\_main functions as arguments at opportune times. Here they
are:

`permanent_pool`
:   never passed to anything else, this is the ancestor of all pools

`pconf`
:   - subpool of permanent\_pool
    - created at the beginning of a config "cycle"; exists
      until the server is terminated or restarts; passed to all
      config-time routines, either via cmd->pool, or as the
      "pool \*p" argument on those which don't take pools
    - passed to the module init() functions

`ptemp`
:   - sorry I lie, this pool isn't called this currently in
      1.3, I renamed it this in my pthreads development. I'm
      referring to the use of ptrans in the parent... contrast
      this with the later definition of ptrans in the
      child.
    - subpool of permanent\_pool
    - created at the beginning of a config "cycle"; exists
      until the end of config parsing; passed to config-time
      routines *via* cmd->temp\_pool. Somewhat of a
      "bastard child" because it isn't available everywhere.
      Used for temporary scratch space which may be needed by
      some config routines but which is deleted at the end of
      config.

`pchild`
:   - subpool of permanent\_pool
    - created when a child is spawned (or a thread is
      created); lives until that child (thread) is
      destroyed
    - passed to the module child\_init functions
    - destruction happens right after the child\_exit
      functions are called... (which may explain why I think
      child\_exit is redundant and unneeded)

`ptrans`
:   - should be a subpool of pchild, but currently is a
      subpool of permanent\_pool, see above
    - cleared by the child before going into the accept()
      loop to receive a connection
    - used as connection->pool

`r->pool`
:   - for the main request this is a subpool of
      connection->pool; for subrequests it is a subpool of
      the parent request's pool.
    - exists until the end of the request (*i.e.*,
      ap\_destroy\_sub\_req, or in child\_main after
      process\_request has finished)
    - note that r itself is allocated from r->pool;
      *i.e.*, r->pool is first created and then r is
      the first thing palloc()d from it

For almost everything folks do, `r->pool` is the pool to
use. But you can see how other lifetimes, such as pchild, are useful to
some modules... such as modules that need to open a database connection
once per child, and wish to clean it up when the child dies.

You can also see how some bugs have manifested themself, such as
setting `connection->user` to a value from
`r->pool` -- in this case connection exists for the
lifetime of `ptrans`, which is longer than
`r->pool` (especially if `r->pool` is a
subrequest!). So the correct thing to do is to allocate from
`connection->pool`.

And there was another interesting bug in `mod_include`
/ `mod_cgi`. You'll see in those that they do this test
to decide if they should use `r->pool` or
`r->main->pool`. In this case the resource that they are
registering for cleanup is a child process. If it were registered in
`r->pool`, then the code would `wait()` for the
child when the subrequest finishes. With `mod_include` this
could be any old `#include`, and the delay can be up to 3
seconds... and happened quite frequently. Instead the subprocess is
registered in `r->main->pool` which causes it to be
cleaned up when the entire request is done -- *i.e.*, after the
output has been sent to the client and logging has happened.

### Tracking open files, etc.

As indicated above, resource pools are also used to track other sorts
of resources besides memory. The most common are open files. The routine
which is typically used for this is `ap_pfopen`, which takes a
resource pool and two strings as arguments; the strings are the same as
the typical arguments to `fopen`, *e.g.*,

`...  
FILE *f = ap_pfopen (r->pool, r->filename, "r");  
  
if (f == NULL) { ... } else { ... }`

There is also a `ap_popenf` routine, which parallels the
lower-level `open` system call. Both of these routines arrange
for the file to be closed when the resource pool in question is
cleared.

Unlike the case for memory, there *are* functions to close files
allocated with `ap_pfopen`, and `ap_popenf`, namely
`ap_pfclose` and `ap_pclosef`. (This is because, on
many systems, the number of files which a single process can have open is
quite limited). It is important to use these functions to close files
allocated with `ap_pfopen` and `ap_popenf`, since to
do otherwise could cause fatal errors on systems such as Linux, which
react badly if the same `FILE*` is closed more than once.

(Using the `close` functions is not mandatory, since the
file will eventually be closed regardless, but you should consider it in
cases where your module is opening, or could open, a lot of files).

### Other sorts of resources -- cleanup functions

More text goes here. Describe the cleanup primitives in terms of
which the file stuff is implemented; also, `spawn_process`.

Pool cleanups live until `clear_pool()` is called:
`clear_pool(a)` recursively calls `destroy_pool()`
on all subpools of `a`; then calls all the cleanups for
`a`; then releases all the memory for `a`.
`destroy_pool(a)` calls `clear_pool(a)` and then
releases the pool structure itself. *i.e.*,
`clear_pool(a)` doesn't delete `a`, it just frees
up all the resources and you can start using it again immediately.

### Fine control -- creating and dealing with sub-pools, with a note on sub-requests

On rare occasions, too-free use of `ap_palloc()` and the
associated primitives may result in undesirably profligate resource
allocation. You can deal with such a case by creating a *sub-pool*,
allocating within the sub-pool rather than the main pool, and clearing or
destroying the sub-pool, which releases the resources which were
associated with it. (This really *is* a rare situation; the only
case in which it comes up in the standard module set is in case of listing
directories, and then only with *very* large directories.
Unnecessary use of the primitives discussed here can hair up your code
quite a bit, with very little gain).

The primitive for creating a sub-pool is `ap_make_sub_pool`,
which takes another pool (the parent pool) as an argument. When the main
pool is cleared, the sub-pool will be destroyed. The sub-pool may also be
cleared or destroyed at any time, by calling the functions
`ap_clear_pool` and `ap_destroy_pool`, respectively.
(The difference is that `ap_clear_pool` frees resources
associated with the pool, while `ap_destroy_pool` also
deallocates the pool itself. In the former case, you can allocate new
resources within the pool, and clear it again, and so forth; in the
latter case, it is simply gone).

One final note -- sub-requests have their own resource pools, which are
sub-pools of the resource pool for the main request. The polite way to
reclaim the resources associated with a sub request which you have
allocated (using the `ap_sub_req_...` functions) is
`ap_destroy_sub_req`, which frees the resource pool. Before
calling this function, be sure to copy anything that you care about which
might be allocated in the sub-request's resource pool into someplace a
little less volatile (for instance, the filename in its
`request_rec` structure).

(Again, under most circumstances, you shouldn't feel obliged to call
this function; only 2K of memory or so are allocated for a typical sub
request, and it will be freed anyway when the main request pool is
cleared. It is only when you are allocating many, many sub-requests for a
single main request that you should seriously consider the
`ap_destroy_...` functions).

[![top](../images/up.gif)](#page-header)

## Configuration, commands and the like

One of the design goals for this server was to maintain external
compatibility with the NCSA 1.3 server --- that is, to read the same
configuration files, to process all the directives therein correctly, and
in general to be a drop-in replacement for NCSA. On the other hand, another
design goal was to move as much of the server's functionality into modules
which have as little as possible to do with the monolithic server core. The
only way to reconcile these goals is to move the handling of most commands
from the central server into the modules.

However, just giving the modules command tables is not enough to divorce
them completely from the server core. The server has to remember the
commands in order to act on them later. That involves maintaining data which
is private to the modules, and which can be either per-server, or
per-directory. Most things are per-directory, including in particular access
control and authorization information, but also information on how to
determine file types from suffixes, which can be modified by
`AddType` and `DefaultType` directives, and so forth. In general,
the governing philosophy is that anything which *can* be made
configurable by directory should be; per-server information is generally
used in the standard set of modules for information like
`Alias`es and `Redirect`s which come into play before the
request is tied to a particular place in the underlying file system.

Another requirement for emulating the NCSA server is being able to handle
the per-directory configuration files, generally called
`.htaccess` files, though even in the NCSA server they can
contain directives which have nothing at all to do with access control.
Accordingly, after URI -> filename translation, but before performing any
other phase, the server walks down the directory hierarchy of the underlying
filesystem, following the translated pathname, to read any
`.htaccess` files which might be present. The information which
is read in then has to be *merged* with the applicable information
from the server's own config files (either from the `<Directory>` sections in
`access.conf`, or from defaults in `srm.conf`, which
actually behaves for most purposes almost exactly like `<Directory
/>`).

Finally, after having served a request which involved reading
`.htaccess` files, we need to discard the storage allocated for
handling them. That is solved the same way it is solved wherever else
similar problems come up, by tying those structures to the per-transaction
resource pool.

### Per-directory configuration structures

Let's look out how all of this plays out in `mod_mime.c`,
which defines the file typing handler which emulates the NCSA server's
behavior of determining file types from suffixes. What we'll be looking
at, here, is the code which implements the `AddType` and `AddEncoding` commands. These commands can appear in
`.htaccess` files, so they must be handled in the module's
private per-directory data, which in fact, consists of two separate
tables for MIME types and encoding information, and is declared as
follows:

```
typedef struct {
    table *forced_types;      /* Additional AddTyped stuff */
    table *encoding_types;    /* Added with AddEncoding... */
} mime_dir_config;
```

When the server is reading a configuration file, or `<Directory>` section, which includes
one of the MIME module's commands, it needs to create a
`mime_dir_config` structure, so those commands have something
to act on. It does this by invoking the function it finds in the module's
`create per-dir config slot', with two arguments: the name of the
directory to which this configuration information applies (or
`NULL` for `srm.conf`), and a pointer to a
resource pool in which the allocation should happen.

(If we are reading a `.htaccess` file, that resource pool
is the per-request resource pool for the request; otherwise it is a
resource pool which is used for configuration data, and cleared on
restarts. Either way, it is important for the structure being created to
vanish when the pool is cleared, by registering a cleanup on the pool if
necessary).

For the MIME module, the per-dir config creation function just
`ap_palloc`s the structure above, and a creates a couple of
tables to fill it. That looks like this:

`void *create_mime_dir_config (pool *p, char *dummy)  
{  

mime_dir_config *new =  

(mime_dir_config *) ap_palloc (p, sizeof(mime_dir_config));  
  
new->forced_types = ap_make_table (p, 4);  
new->encoding_types = ap_make_table (p, 4);  
  
return new;  
}`

Now, suppose we've just read in a `.htaccess` file. We
already have the per-directory configuration structure for the next
directory up in the hierarchy. If the `.htaccess` file we just
read in didn't have any `AddType`
or `AddEncoding` commands, its
per-directory config structure for the MIME module is still valid, and we
can just use it. Otherwise, we need to merge the two structures
somehow.

To do that, the server invokes the module's per-directory config merge
function, if one is present. That function takes three arguments: the two
structures being merged, and a resource pool in which to allocate the
result. For the MIME module, all that needs to be done is overlay the
tables from the new per-directory config structure with those from the
parent:

`void *merge_mime_dir_configs (pool *p, void *parent_dirv, void *subdirv)  
{  

mime_dir_config *parent_dir = (mime_dir_config *)parent_dirv;  
mime_dir_config *subdir = (mime_dir_config *)subdirv;  
mime_dir_config *new =  

(mime_dir_config *)ap_palloc (p, sizeof(mime_dir_config));  
  
new->forced_types = ap_overlay_tables (p, subdir->forced_types,  

parent_dir->forced_types);  
new->encoding_types = ap_overlay_tables (p, subdir->encoding_types,  

parent_dir->encoding_types);  
  
return new;  
}`

As a note -- if there is no per-directory merge function present, the
server will just use the subdirectory's configuration info, and ignore
the parent's. For some modules, that works just fine (*e.g.*, for
the includes module, whose per-directory configuration information
consists solely of the state of the `XBITHACK`), and for those
modules, you can just not declare one, and leave the corresponding
structure slot in the module itself `NULL`.

### Command handling

Now that we have these structures, we need to be able to figure out how
to fill them. That involves processing the actual `AddType` and `AddEncoding` commands. To find commands, the server looks in
the module's command table. That table contains information on how many
arguments the commands take, and in what formats, where it is permitted,
and so forth. That information is sufficient to allow the server to invoke
most command-handling functions with pre-parsed arguments. Without further
ado, let's look at the `AddType`
command handler, which looks like this (the `AddEncoding` command looks basically the same, and won't be
shown here):

`char *add_type(cmd_parms *cmd, mime_dir_config *m, char *ct, char *ext)  
{  

if (*ext == '.') ++ext;  
ap_table_set (m->forced_types, ext, ct);  
return NULL;  
}`

This command handler is unusually simple. As you can see, it takes
four arguments, two of which are pre-parsed arguments, the third being the
per-directory configuration structure for the module in question, and the
fourth being a pointer to a `cmd_parms` structure. That
structure contains a bunch of arguments which are frequently of use to
some, but not all, commands, including a resource pool (from which memory
can be allocated, and to which cleanups should be tied), and the (virtual)
server being configured, from which the module's per-server configuration
data can be obtained if required.

Another way in which this particular command handler is unusually
simple is that there are no error conditions which it can encounter. If
there were, it could return an error message instead of `NULL`;
this causes an error to be printed out on the server's
`stderr`, followed by a quick exit, if it is in the main config
files; for a `.htaccess` file, the syntax error is logged in
the server error log (along with an indication of where it came from), and
the request is bounced with a server error response (HTTP error status,
code 500).

The MIME module's command table has entries for these commands, which
look like this:

`command_rec mime_cmds[] = {  

{ "AddType", add_type, NULL, OR_FILEINFO, TAKE2,  
"a mime type followed by a file extension" },  
{ "AddEncoding", add_encoding, NULL, OR_FILEINFO, TAKE2,  

"an encoding (e.g., gzip), followed by a file extension" },  
{ NULL }  
};`

The entries in these tables are:

- The name of the command
- The function which handles it
- a `(void *)` pointer, which is passed in the
  `cmd_parms` structure to the command handler ---
  this is useful in case many similar commands are handled by
  the same function.
- A bit mask indicating where the command may appear. There
  are mask bits corresponding to each
  `AllowOverride` option, and an additional mask
  bit, `RSRC_CONF`, indicating that the command may
  appear in the server's own config files, but *not* in
  any `.htaccess` file.
- A flag indicating how many arguments the command handler
  wants pre-parsed, and how they should be passed in.
  `TAKE2` indicates two pre-parsed arguments. Other
  options are `TAKE1`, which indicates one
  pre-parsed argument, `FLAG`, which indicates that
  the argument should be `On` or `Off`,
  and is passed in as a boolean flag, `RAW_ARGS`,
  which causes the server to give the command the raw, unparsed
  arguments (everything but the command name itself). There is
  also `ITERATE`, which means that the handler looks
  the same as `TAKE1`, but that if multiple
  arguments are present, it should be called multiple times,
  and finally `ITERATE2`, which indicates that the
  command handler looks like a `TAKE2`, but if more
  arguments are present, then it should be called multiple
  times, holding the first argument constant.
- Finally, we have a string which describes the arguments
  that should be present. If the arguments in the actual config
  file are not as required, this string will be used to help
  give a more specific error message. (You can safely leave
  this `NULL`).

Finally, having set this all up, we have to use it. This is ultimately
done in the module's handlers, specifically for its file-typing handler,
which looks more or less like this; note that the per-directory
configuration structure is extracted from the `request_rec`'s
per-directory configuration vector by using the
`ap_get_module_config` function.

`int find_ct(request_rec *r)  
{  

int i;  
char *fn = ap_pstrdup (r->pool, r->filename);  
mime_dir_config *conf = (mime_dir_config *)  

ap_get_module_config(r->per_dir_config, &mime_module);  
char *type;  
  
if (S_ISDIR(r->finfo.st_mode)) {  

r->content_type = DIR_MAGIC_TYPE;  
return OK;  
}  
  
if((i=ap_rind(fn,'.')) < 0) return DECLINED;  
++i;  
  
if ((type = ap_table_get (conf->encoding_types, &fn[i])))  
{  

r->content_encoding = type;  
  
/* go back to previous extension to try to use it as a type */  
fn[i-1] = '\0';  
if((i=ap_rind(fn,'.')) < 0) return OK;  
++i;  
}  
  
if ((type = ap_table_get (conf->forced_types, &fn[i])))  
{  

r->content_type = type;  
}  
  
return OK;
}`

### Side notes -- per-server configuration, virtual servers, *etc*.

The basic ideas behind per-server module configuration are basically
the same as those for per-directory configuration; there is a creation
function and a merge function, the latter being invoked where a virtual
server has partially overridden the base server configuration, and a
combined structure must be computed. (As with per-directory configuration,
the default if no merge function is specified, and a module is configured
in some virtual server, is that the base configuration is simply
ignored).

The only substantial difference is that when a command needs to
configure the per-server private module data, it needs to go to the
`cmd_parms` data to get at it. Here's an example, from the
alias module, which also indicates how a syntax error can be returned
(note that the per-directory configuration argument to the command
handler is declared as a dummy, since the module doesn't actually have
per-directory config data):

`char *add_redirect(cmd_parms *cmd, void *dummy, char *f, char *url)  
{  

server_rec *s = cmd->server;  
alias_server_conf *conf = (alias_server_conf *)  

ap_get_module_config(s->module_config,&alias_module);  
alias_entry *new = ap_push_array (conf->redirects);  
  
if (!ap_is_url (url)) return "Redirect to non-URL";  
  
new->fake = f; new->real = url;  
return NULL;  
}`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/developer/API.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
