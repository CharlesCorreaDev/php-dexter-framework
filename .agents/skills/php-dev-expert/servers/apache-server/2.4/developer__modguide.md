# Developing modules for the Apache HTTP Server 2.4 - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/developer/modguide.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](developer.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Developer](developer.md)

# Developing modules for the Apache HTTP Server 2.4

This document explains how you can develop modules for the Apache HTTP
Server 2.4

- ![](../images/down.gif) [Introduction](#introduction)
- ![](../images/down.gif) [Defining a module](#basics)
- ![](../images/down.gif) [Getting started: Hooking into the server](#hooking)
- ![](../images/down.gif) [Building a handler](#handling)
- ![](../images/down.gif) [Adding configuration options](#configuration)
- ![](../images/down.gif) [Context aware configurations](#context)
- ![](../images/down.gif) [Summing up](#summary)
- ![](../images/down.gif) [Some useful snippets of code](#snippets)

### See also

- [Request Processing in Apache 2.4](developer__request.md)
- [Apache 2.x Hook Functions](developer__hooks.md)

[![top](../images/up.gif)](#page-header)

## Introduction [¶](#introduction "Permanent link")

### What we will be discussing in this document

This document will discuss how you can create modules for the Apache
HTTP Server 2.4, by exploring an example module called
`mod_example`. In the first part of this document, the purpose
of this module will be to calculate and print out various digest values for
existing files on your web server, whenever we access the URL `http://hostname/filename.sum`. For instance, if we want to know the
MD5 digest value of the file located at `http://www.example.com/index.html`, we would visit `http://www.example.com/index.html.sum`.

In the second part of this document, which deals with configuration
directive and context awareness, we will be looking at a module that simply
writes out its own configuration to the client.

### Prerequisites

First and foremost, you are expected to have a basic knowledge of how the C
programming language works. In most cases, we will try to be as pedagogical
as possible and link to documents describing the functions used in the
examples, but there are also many cases where it is necessary to either
just assume that "it works" or do some digging yourself into what the hows
and whys of various function calls.

Lastly, you will need to have a basic understanding of how modules are
loaded and configured in the Apache HTTP Server, as well as how to get the headers for
Apache if you do not have them already, as these are needed for compiling
new modules.

### Compiling your module

To compile the source code we are building in this document, we will be
using [APXS](programs__apxs.md). Assuming your source file
is called mod\_example.c, compiling, installing and activating the module is
as simple as:

```
apxs -i -a -c mod_example.c
```

[![top](../images/up.gif)](#page-header)

## Defining a module [¶](#basics "Permanent link")

![Module name tags](../images/build_a_mod_3.png)  
Every module starts with the same declaration, or name tag if you will,
that defines a module as *a separate entity within Apache*:

```
module AP_MODULE_DECLARE_DATA   example_module =
{ 
    STANDARD20_MODULE_STUFF,
    create_dir_conf, /* Per-directory configuration handler */
    merge_dir_conf,  /* Merge handler for per-directory configurations */
    create_svr_conf, /* Per-server configuration handler */
    merge_svr_conf,  /* Merge handler for per-server configurations */
    directives,      /* Any directives we may have for httpd */
    register_hooks,  /* Our hook registering function */
    AP_MODULE_FLAG_NONE /* Flags */
};
```

This bit of code lets the server know that we have now registered a new module
in the system, and that its name is `example_module`. The name
of the module is used primarily for two things:

- Letting the server know how to load the module using the LoadModule
- Setting up a namespace for the module to use in configurations

For now, we're only concerned with the first purpose of the module name,
which comes into play when we need to load the module:

```
LoadModule example_module modules/mod_example.so
```

In essence, this tells the server to open up `mod_example.so` and look for a module
called `example_module`.

Within this name tag of ours is also a bunch of references to how we would
like to handle things: Which directives do we respond to in a configuration
file or .htaccess, how do we operate within specific contexts, and what
handlers are we interested in registering with the Apache HTTP service. We'll
return to all these elements later in this document.

[![top](../images/up.gif)](#page-header)

## Getting started: Hooking into the server [¶](#hooking "Permanent link")

### An introduction to hooks

When handling requests in Apache HTTP Server 2.4, the first thing you will need to do is
create a hook into the request handling process. A hook is essentially a
message telling the server that you are willing to either serve or at least
take a glance at certain requests given by clients. All handlers, whether
it's mod\_rewrite, mod\_authn\_\*, mod\_proxy and so on, are hooked into
specific parts of the request process. As you are probably aware, modules
serve different purposes; Some are authentication/authorization handlers,
others are file or script handlers while some third modules rewrite URIs or
proxies content. Furthermore, in the end, it is up to the user of the server
how and when each module will come into place. Thus, the server itself does not
presume to know which module is responsible for handling a specific
request, and will ask each module whether they have an interest in a given
request or not. It is then up to each module to either gently decline
serving a request, accept serving it or flat out deny the request from
being served, as authentication/authorization modules do:   
![Hook handling in httpd](../images/build_a_mod_2.png)  
To make it a bit easier for handlers such as our mod\_example to know
whether the client is requesting content we should handle or not, the server
has directives for hinting to modules whether their assistance is needed or
not. Two of these are `AddHandler`
and `SetHandler`. Let's take a look at
an example using `AddHandler`. In
our example case, we want every request ending with .sum to be served by
`mod_example`, so we'll add a configuration directive that tells
the server to do just that:

```
AddHandler example-handler .sum
```

What this tells the server is the following: *Whenever we receive a request
for a URI ending in .sum, we are to let all modules know that we are
looking for whoever goes by the name of "example-handler"* .
Thus, when a request is being served that ends in .sum, the server will let all
modules know, that this request should be served by "example-handler
". As you will see later, when we start building mod\_example, we will
check for this handler tag relayed by `AddHandler` and reply to
the server based on the value of this tag.

### Hooking into httpd

To begin with, we only want to create a simple handler that replies to the
client browser when a specific URL is requested, so we won't bother setting
up configuration handlers and directives just yet. Our initial module
definition will look like this:

```
module AP_MODULE_DECLARE_DATA   example_module =
{
    STANDARD20_MODULE_STUFF,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    register_hooks,  /* Our hook registering function */
    AP_MODULE_FLAG_NONE /* Flags */
};
```

This lets the server know that we are not interested in anything fancy, we
just want to hook onto the requests and possibly handle some of them.

The reference in our example declaration, `register_hooks`
is the name of a function we will create to manage how we hook onto the
request process. In this example module, the function has just one purpose;
To create a simple hook that gets called after all the rewrites, access
control etc has been handled. Thus, we will let the server know that we want
to hook into its process as one of the last modules:

```
static void register_hooks(apr_pool_t *pool)
{
    /* Create a hook in the request handler, so we get called when a request arrives */
    ap_hook_handler(example_handler, NULL, NULL, APR_HOOK_LAST);
}
```

The `example_handler` reference is the function that will handle
the request. We will discuss how to create a handler in the next chapter.

### Other useful hooks

Hooking into the request handling phase is but one of many hooks that you
can create. Some other ways of hooking are:

- `ap_hook_child_init`: Place a hook that executes when a child process is spawned (commonly used for initializing modules after the server has forked)
- `ap_hook_pre_config`: Place a hook that executes before any configuration data has been read (very early hook)
- `ap_hook_post_config`: Place a hook that executes after configuration has been parsed, but before the server has forked
- `ap_hook_pre_translate_name`: Place a hook that executes when a URI needs to be translated into a filename on the server, before decoding
- `ap_hook_translate_name`: Place a hook that executes when a URI needs to be translated into a filename on the server (think `mod_rewrite`)
- `ap_hook_quick_handler`: Similar to `ap_hook_handler`, except it is run before any other request hooks (translation, auth, fixups etc)
- `ap_hook_log_transaction`: Place a hook that executes when the server is about to add a log entry of the current request

[![top](../images/up.gif)](#page-header)

## Building a handler [¶](#handling "Permanent link")

A handler is essentially a function that receives a callback when a request
to the server is made. It is passed a record of the current request (how it was
made, which headers and requests were passed along, who's giving the
request and so on), and is put in charge of either telling the server that it's
not interested in the request or handle the request with the tools provided.

### A simple "Hello, world!" handler

Let's start off by making a very simple request handler
that does the following:

1. Check that this is a request that should be served by "example-handler"
2. Set the content type of our output to `text/html`
3. Write "Hello, world!" back to the client browser
4. Let the server know that we took care of this request and everything went fine

In C code, our example handler will now look like this:

```
static int example_handler(request_rec *r)
{
    /* First off, we need to check if this is a call for the "example-handler" handler.
     * If it is, we accept it and do our things, if not, we simply return DECLINED,
     * and the server will try somewhere else.
     */
    if (!r->handler || strcmp(r->handler, "example-handler")) return (DECLINED);
    
    /* Now that we are handling this request, we'll write out "Hello, world!" to the client.
     * To do so, we must first set the appropriate content type, followed by our output.
     */
    ap_set_content_type(r, "text/html");
    ap_rprintf(r, "Hello, world!");
    
    /* Lastly, we must tell the server that we took care of this request and everything went fine.
     * We do so by simply returning the value OK to the server.
     */
    return OK;
}
```

Now, we put all we have learned together and end up with a program that
looks like
[mod\_example\_1.c](developer__mod_example_1.c.md)
. The functions used in this example will be explained later in the section
["Some useful functions you should know"](#functions).

### The request\_rec structure

The most essential part of any request is the *request record*. In a call to a handler function, this is represented by the `request_rec*`  structure passed along with every call that is made.
This struct, typically just referred to as `r` in modules,
contains all the information you need for your module to fully process any
HTTP request and respond accordingly.

Some key elements of the `request_rec`  structure are:

- `r->handler (char*):` Contains the name of the handler the server is currently asking to do the handling of this request
- `r->method (char*):` Contains the HTTP method being used, f.x. GET or POST
- `r->filename (char*):` Contains the translated filename the client is requesting
- `r->args (char*):` Contains the query string of the request, if any
- `r->headers_in (apr_table_t*):` Contains all the headers sent by the client
- `r->connection (conn_rec*):` A record containing information about the current connection
- `r->user (char*):` If the URI requires authentication, this is set to the username provided
- `r->useragent_ip (char*):` The IP address of the client connecting to us
- `r->pool (apr_pool_t*)`: The memory pool of this request. We'll discuss this in the
  "[Memory management](#memory)" chapter.

A complete list of all the values contained within the `request_rec` structure can be found in
the [`httpd.h`](http://svn.apache.org/repos/asf/httpd/httpd/trunk/include/httpd.h) header
file or at <http://ci.apache.org/projects/httpd/trunk/doxygen/structrequest__rec.html>.

Let's try out some of these variables in another example handler:

```
static int example_handler(request_rec *r)
{
    /* Set the appropriate content type */
    ap_set_content_type(r, "text/html");

    /* Print out the IP address of the client connecting to us: */
    ap_rprintf(r, "<h2>Hello, %s!</h2>", r->useragent_ip);
    
    /* If we were reached through a GET or a POST request, be happy, else sad. */
    if ( !strcmp(r->method, "POST") || !strcmp(r->method, "GET") ) {
        ap_rputs("You used a GET or a POST method, that makes us happy!<br/>", r);
    }
    else {
        ap_rputs("You did not use POST or GET, that makes us sad :(<br/>", r);
    }

    /* Lastly, if there was a query string, let's print that too! */
    if (r->args) {
        ap_rprintf(r, "Your query string was: %s", r->args);
    }
    return OK;
}
```

### Return values

Apache relies on return values from handlers to signify whether a request
was handled or not, and if so, whether the request went well or not. If a
module is not interested in handling a specific request, it should always
return the value `DECLINED`. If it is handling a request, it
should either return the generic value `OK`, or a specific HTTP
status code, for example:

```
static int example_handler(request_rec *r)
{
    /* Return 404: Not found */
    return HTTP_NOT_FOUND;
}
```

Returning `OK` or a HTTP status code does not necessarily mean
that the request will end. The server may still have other handlers that are
interested in this request, for instance the logging modules which, upon a
successful request, will write down a summary of what was requested and how
it went. To do a full stop and prevent any further processing after your
module is done, you can return the value `DONE` to let the server
know that it should cease all activity on this request and carry on with
the next, without informing other handlers.
  
**General response codes:**

- `DECLINED`: We are not handling this request
- `OK`: We handled this request and it went well
- `DONE`: We handled this request and the server should just close this thread without further processing

**HTTP specific return codes (excerpt):**

- `HTTP_OK (200)`: Request was okay
- `HTTP_MOVED_PERMANENTLY (301)`: The resource has moved to a new URL
- `HTTP_UNAUTHORIZED (401)`: Client is not authorized to visit this page
- `HTTP_FORBIDDEN (403)`: Permission denied
- `HTTP_NOT_FOUND (404)`: File not found
- `HTTP_INTERNAL_SERVER_ERROR (500)`: Internal server error (self explanatory)

### Some useful functions you should know

- `ap_rputs(const char *string, request_rec *r)`:   
  Sends a string of text to the client. This is a shorthand version of [ap\_rwrite](http://ci.apache.org/projects/httpd/trunk/doxygen/group__APACHE__CORE__PROTO.html#gac827cd0537d2b6213a7c06d7c26cc36e).

  ```
  ap_rputs("Hello, world!", r);
  ```
- `ap_rprintf`:   
  This function works just like `printf`, except it sends the result to the client.

  ```
  ap_rprintf(r, "Hello, %s!", r->useragent_ip);
  ```
- `ap_set_content_type(request_rec *r, const char *type)`:   
  Sets the content type of the output you are sending.

  ```
  ap_set_content_type(r, "text/plain"); /* force a raw text output */
  ```

### Memory management

Managing your resources in Apache HTTP Server 2.4 is quite easy, thanks to the memory pool
system. In essence, each server, connection and request have their own
memory pool that gets cleaned up when its scope ends, e.g. when a request
is done or when a server process shuts down. All your module needs to do is
latch onto this memory pool, and you won't have to worry about having to
clean up after yourself - pretty neat, huh?

In our module, we will primarily be allocating memory for each request, so
it's appropriate to use the `r->pool`
reference when creating new objects. A few of the functions for allocating
memory within a pool are:

- `void* apr_palloc(
  apr_pool_t *p, apr_size_t size)`: Allocates `size` number of bytes in the pool for you
- `void* apr_pcalloc(
  apr_pool_t *p, apr_size_t size)`: Allocates `size` number of bytes in the pool for you and sets all bytes to 0
- `char* apr_pstrdup(
  apr_pool_t *p, const char *s)`: Creates a duplicate of the string `s`. This is useful for copying constant values so you can edit them
- `char* apr_psprintf(
  apr_pool_t *p, const char *fmt, ...)`: Similar to `sprintf`, except the server supplies you with an appropriately allocated target variable

Let's put these functions into an example handler:

```
static int example_handler(request_rec *r)
{
    const char *original = "You can't edit this!";
    char *copy;
    int *integers;
    
    /* Allocate space for 10 integer values and set them all to zero. */
    integers = apr_pcalloc(r->pool, sizeof(int)*10); 
    
    /* Create a copy of the 'original' variable that we can edit. */
    copy = apr_pstrdup(r->pool, original);
    return OK;
}
```

This is all well and good for our module, which won't need any
pre-initialized variables or structures. However, if we wanted to
initialize something early on, before the requests come rolling in, we
could simply add a call to a function in our `register_hooks`
function to sort it out:

```
static void register_hooks(apr_pool_t *pool)
{
    /* Call a function that initializes some stuff */
    example_init_function(pool);
    /* Create a hook in the request handler, so we get called when a request arrives */
    ap_hook_handler(example_handler, NULL, NULL, APR_HOOK_LAST);
}
```

In this pre-request initialization function we would not be using the
same pool as we did when allocating resources for request-based functions.
Instead, we would use the pool given to us by the server for allocating memory
on a per-process based level.

### Parsing request data

In our example module, we would like to add a feature, that checks which
type of digest, MD5 or SHA1 the client would like to see. This could be
solved by adding a query string to the request. A query string is typically
comprised of several keys and values put together in a string, for instance
`valueA=yes&valueB=no&valueC=maybe`. It is up to the
module itself to parse these and get the data it requires. In our example,
we'll be looking for a key called `digest`, and if set to `md5`, we'll produce an MD5 digest, otherwise we'll produce a SHA1
digest.

Since the introduction of Apache HTTP Server 2.4, parsing request data from GET and
POST requests have never been easier. All we require to parse both GET and
POST data is four simple lines:

```
apr_table_t *GET; 
apr_array_header_t*POST; 

ap_args_to_table(r, &GET); 

ap_parse_form_data(r, NULL, &POST, -1, 8192);
```

In our specific example module, we're looking for the `digest`
value from the query string, which now resides inside a table called `GET`. To extract this value, we need only perform a simple operation:

```
/* Get the "digest" key from the query string, if any. */
const char *digestType = apr_table_get(GET, "digest");

/* If no key was returned, we will set a default value instead. */
if (!digestType) digestType = "sha1";
```

The structures used for the POST and GET data are not exactly the same, so
if we were to fetch a value from POST data instead of the query string, we
would have to resort to a few more lines, as outlined in [this example](#get_post) in the last chapter of this document.

### Making an advanced handler

Now that we have learned how to parse form data and manage our resources,
we can move on to creating an advanced version of our module, that spits
out the MD5 or SHA1 digest of files:

```
static int example_handler(request_rec *r)
{
    int rc, exists;
    apr_finfo_t finfo;
    apr_file_t *file;
    char *filename;
    char buffer[256];
    apr_size_t readBytes;
    int n;
    apr_table_t *GET;
    apr_array_header_t *POST;
    const char *digestType;
    
    
    /* Check that the "example-handler" handler is being called. */
    if (!r->handler || strcmp(r->handler, "example-handler")) return (DECLINED);
    
    /* Figure out which file is being requested by removing the .sum from it */
    filename = apr_pstrdup(r->pool, r->filename);
    filename[strlen(filename)-4] = 0; /* Cut off the last 4 characters. */
    
    /* Figure out if the file we request a sum on exists and isn't a directory */
    rc = apr_stat(&finfo, filename, APR_FINFO_MIN, r->pool);
    if (rc == APR_SUCCESS) {
        exists =
        (
            (finfo.filetype != APR_NOFILE)
        &&  !(finfo.filetype & APR_DIR)
        );
        if (!exists) return HTTP_NOT_FOUND; /* Return a 404 if not found. */
    }
    /* If apr_stat failed, we're probably not allowed to check this file. */
    else return HTTP_FORBIDDEN;
    
    /* Parse the GET and, optionally, the POST data sent to us */
    
    ap_args_to_table(r, &GET);
    ap_parse_form_data(r, NULL, &POST, -1, 8192);
    
    /* Set the appropriate content type */
    ap_set_content_type(r, "text/html");
    
    /* Print a title and some general information */
    ap_rprintf(r, "<h2>Information on %s:</h2>", filename);
    ap_rprintf(r, "<b>Size:</b> %u bytes<br/>", finfo.size);
    
    /* Get the digest type the client wants to see */
    digestType = apr_table_get(GET, "digest");
    if (!digestType) digestType = "MD5";
    
    
    rc = apr_file_open(&file, filename, APR_READ, APR_OS_DEFAULT, r->pool);
    if (rc == APR_SUCCESS) {
        
        /* Are we trying to calculate the MD5 or the SHA1 digest? */
        if (!strcasecmp(digestType, "md5")) {
            /* Calculate the MD5 sum of the file */
            union {
                char      chr[16];
                uint32_t  num[4];
            } digest;
            apr_md5_ctx_t md5;
            apr_md5_init(&md5);
            readBytes = 256;
            while ( apr_file_read(file, buffer, &readBytes) == APR_SUCCESS ) {
                apr_md5_update(&md5, buffer, readBytes);
            }
            apr_md5_final(digest.chr, &md5);
            
            /* Print out the MD5 digest */
            ap_rputs("<b>MD5: </b><code>", r);
            for (n = 0; n < APR_MD5_DIGESTSIZE/4; n++) {
                ap_rprintf(r, "%08x", digest.num[n]);
            }
            ap_rputs("</code>", r);
            /* Print a link to the SHA1 version */
            ap_rputs("<br/><a href='?digest=sha1'>View the SHA1 hash instead</a>", r);
        }
        else {
            /* Calculate the SHA1 sum of the file */
            union {
                char      chr[20];
                uint32_t  num[5];
            } digest;
            apr_sha1_ctx_t sha1;
            apr_sha1_init(&sha1);
            readBytes = 256;
            while ( apr_file_read(file, buffer, &readBytes) == APR_SUCCESS ) {
                apr_sha1_update(&sha1, buffer, readBytes);
            }
            apr_sha1_final(digest.chr, &sha1);
            
            /* Print out the SHA1 digest */
            ap_rputs("<b>SHA1: </b><code>", r);
            for (n = 0; n < APR_SHA1_DIGESTSIZE/4; n++) {
                ap_rprintf(r, "%08x", digest.num[n]);
            }
            ap_rputs("</code>", r);
            
            /* Print a link to the MD5 version */
            ap_rputs("<br/><a href='?digest=md5'>View the MD5 hash instead</a>", r);
        }
        apr_file_close(file);
        
    }    
    /* Let the server know that we responded to this request. */
    return OK;
}
```

This version in its entirety can be found here:
[mod\_example\_2.c](developer__mod_example_2.c.md).

[![top](../images/up.gif)](#page-header)

## Adding configuration options [¶](#configuration "Permanent link")

In this next segment of this document, we will turn our eyes away from the
digest module and create a new example module, whose only function is to
write out its own configuration. The purpose of this is to examine how
the server works with configuration, and what happens when you start writing
advanced configurations
for your modules.

### An introduction to configuration directives

If you are reading this, then you probably already know
what a configuration directive is. Simply put, a directive is a way of
telling an individual module (or a set of modules) how to behave, such as
these directives control how `mod_rewrite` works:

```
RewriteEngine On
RewriteCond "%{REQUEST_URI}" "^/foo/bar"
RewriteRule "^/foo/bar/(.*)$" "/foobar?page=$1"
```

Each of these configuration directives are handled by a separate function,
that parses the parameters given and sets up a configuration accordingly.

### Making an example configuration

To begin with, we'll create a basic configuration in C-space:

```
typedef struct {
    int         enabled;      /* Enable or disable our module */
    const char *path;         /* Some path to...something */
    int         typeOfAction; /* 1 means action A, 2 means action B and so on */
} example_config;
```

Now, let's put this into perspective by creating a very small module that
just prints out a hard-coded configuration. You'll notice that we use the
`register_hooks` function for initializing the configuration
values to their defaults:

```
typedef struct {
    int         enabled;      /* Enable or disable our module */
    const char *path;         /* Some path to...something */
    int         typeOfAction; /* 1 means action A, 2 means action B and so on */
} example_config;

static example_config config;

static int example_handler(request_rec *r)
{
    if (!r->handler || strcmp(r->handler, "example-handler")) return(DECLINED);
    ap_set_content_type(r, "text/plain");
    ap_rprintf(r, "Enabled: %u\n", config.enabled);
    ap_rprintf(r, "Path: %s\n", config.path);
    ap_rprintf(r, "TypeOfAction: %x\n", config.typeOfAction);
    return OK;
}

static void register_hooks(apr_pool_t *pool) 
{
    config.enabled = 1;
    config.path = "/foo/bar";
    config.typeOfAction = 0x00;
    ap_hook_handler(example_handler, NULL, NULL, APR_HOOK_LAST);
}

/* Define our module as an entity and assign a function for registering hooks  */

module AP_MODULE_DECLARE_DATA   example_module =
{
    STANDARD20_MODULE_STUFF,
    NULL,            /* Per-directory configuration handler */
    NULL,            /* Merge handler for per-directory configurations */
    NULL,            /* Per-server configuration handler */
    NULL,            /* Merge handler for per-server configurations */
    NULL,            /* Any directives we may have for httpd */
    register_hooks,  /* Our hook registering function */
    AP_MODULE_FLAG_NONE /* Flags */
};
```

So far so good. To access our new handler, we could add the following to
our configuration:

```
<Location "/example">
    SetHandler example-handler
</Location>
```

When we visit, we'll see our current configuration being spit out by our
module.

### Registering directives with the server

What if we want to change our configuration, not by hard-coding new values
into the module, but by using either the httpd.conf file or possibly a
.htaccess file? It's time to let the server know that we want this to be
possible. To do so, we must first change our *name tag* to include a
reference to the configuration directives we want to register with the server:

```
module AP_MODULE_DECLARE_DATA   example_module =
{
    STANDARD20_MODULE_STUFF,
    NULL,               /* Per-directory configuration handler */
    NULL,               /* Merge handler for per-directory configurations */
    NULL,               /* Per-server configuration handler */
    NULL,               /* Merge handler for per-server configurations */
    example_directives, /* Any directives we may have for httpd */
    register_hooks,     /* Our hook registering function */
    AP_MODULE_FLAG_NONE  /* Flags */
};
```

This will tell the server that we are now accepting directives from the
configuration files, and that the structure called `example_directives` holds information on what our directives are and how they work.
Since we have three different variables in our module configuration, we
will add a structure with three directives and a NULL at the end:

```
static const command_rec        example_directives[] =
{
    AP_INIT_TAKE1("exampleEnabled", example_set_enabled, NULL, RSRC_CONF, "Enable or disable mod_example"),
    AP_INIT_TAKE1("examplePath", example_set_path, NULL, RSRC_CONF, "The path to whatever"),
    AP_INIT_TAKE2("exampleAction", example_set_action, NULL, RSRC_CONF, "Special action value!"),
    { }
};
```

![Directives structure](../images/build_a_mod_4.png)  
As you can see, each directive needs at least 5 parameters set:

1. `AP_INIT_TAKE1`: This is a macro that tells the server that this directive takes one and only one argument.
   If we required two arguments, we could use the macro `AP_INIT_TAKE2` and so on (refer to httpd\_conf.h
   for more macros).
2. `exampleEnabled`: This is the name of our directive. More precisely, it is what the user must put in his/her
   configuration in order to invoke a configuration change in our module.
3. `example_set_enabled`: This is a reference to a C function that parses the directive and sets the configuration
   accordingly. We will discuss how to make this in the following paragraph.
4. `RSRC_CONF`: This tells the server where the directive is permitted. We'll go into details on this value in the
   later chapters, but for now, `RSRC_CONF` means that the server will only accept these directives in a server context.
5. `"Enable or disable...."`: This is simply a brief description of what the directive does.

(*The "missing" parameter in our definition, which is usually set to
`NULL`, is an optional function that can be run after the
initial function to parse the arguments have been run. This is usually
omitted, as the function for verifying arguments might as well be used to
set them.*)

### The directive handler function

Now that we have told the server to expect some directives for our module, it's
time to make a few functions for handling these. What the server reads in the
configuration file(s) is text, and so naturally, what it passes along to
our directive handler is one or more strings, that we ourselves need to
recognize and act upon. You'll notice, that since we set our `exampleAction` directive to accept two arguments, its C function also
has an additional parameter defined:

```
/* Handler for the "exampleEnabled" directive */
const char *example_set_enabled(cmd_parms *cmd, void *cfg, const char *arg)
{
    if(!strcasecmp(arg, "on")) config.enabled = 1;
    else config.enabled = 0;
    return NULL;
}

/* Handler for the "examplePath" directive */
const char *example_set_path(cmd_parms *cmd, void *cfg, const char *arg)
{
    config.path = arg;
    return NULL;
}

/* Handler for the "exampleAction" directive */
/* Let's pretend this one takes one argument (file or db), and a second (deny or allow), */
/* and we store it in a bit-wise manner. */
const char *example_set_action(cmd_parms *cmd, void *cfg, const char *arg1, const char *arg2)
{
    if(!strcasecmp(arg1, "file")) config.typeOfAction = 0x01;
    else config.typeOfAction = 0x02;
    
    if(!strcasecmp(arg2, "deny")) config.typeOfAction += 0x10;
    else config.typeOfAction += 0x20;
    return NULL;
}
```

### Putting it all together

Now that we have our directives set up, and handlers configured for them,
we can assemble our module into one big file:

```
/* mod_example_config_simple.c: */
#include <stdio.h>
#include "apr_hash.h"
#include "ap_config.h"
#include "ap_provider.h"
#include "httpd.h"
#include "http_core.h"
#include "http_config.h"
#include "http_log.h"
#include "http_protocol.h"
#include "http_request.h"

/*
 ==============================================================================
 Our configuration prototype and declaration:
 ==============================================================================
 */
typedef struct {
    int         enabled;      /* Enable or disable our module */
    const char *path;         /* Some path to...something */
    int         typeOfAction; /* 1 means action A, 2 means action B and so on */
} example_config;

static example_config config;

/*
 ==============================================================================
 Our directive handlers:
 ==============================================================================
 */
/* Handler for the "exampleEnabled" directive */
const char *example_set_enabled(cmd_parms *cmd, void *cfg, const char *arg)
{
    if(!strcasecmp(arg, "on")) config.enabled = 1;
    else config.enabled = 0;
    return NULL;
}

/* Handler for the "examplePath" directive */
const char *example_set_path(cmd_parms *cmd, void *cfg, const char *arg)
{
    config.path = arg;
    return NULL;
}

/* Handler for the "exampleAction" directive */
/* Let's pretend this one takes one argument (file or db), and a second (deny or allow), */
/* and we store it in a bit-wise manner. */
const char *example_set_action(cmd_parms *cmd, void *cfg, const char *arg1, const char *arg2)
{
    if(!strcasecmp(arg1, "file")) config.typeOfAction = 0x01;
    else config.typeOfAction = 0x02;
    
    if(!strcasecmp(arg2, "deny")) config.typeOfAction += 0x10;
    else config.typeOfAction += 0x20;
    return NULL;
}

/*
 ==============================================================================
 The directive structure for our name tag:
 ==============================================================================
 */
static const command_rec        example_directives[] =
{
    AP_INIT_TAKE1("exampleEnabled", example_set_enabled, NULL, RSRC_CONF, "Enable or disable mod_example"),
    AP_INIT_TAKE1("examplePath", example_set_path, NULL, RSRC_CONF, "The path to whatever"),
    AP_INIT_TAKE2("exampleAction", example_set_action, NULL, RSRC_CONF, "Special action value!"),
    { }
};
/*
 ==============================================================================
 Our module handler:
 ==============================================================================
 */
static int example_handler(request_rec *r)
{
    if(!r->handler || strcmp(r->handler, "example-handler")) return(DECLINED);
    ap_set_content_type(r, "text/plain");
    ap_rprintf(r, "Enabled: %u\n", config.enabled);
    ap_rprintf(r, "Path: %s\n", config.path);
    ap_rprintf(r, "TypeOfAction: %x\n", config.typeOfAction);
    return OK;
}

/*
 ==============================================================================
 The hook registration function (also initializes the default config values):
 ==============================================================================
 */
static void register_hooks(apr_pool_t *pool) 
{
    config.enabled = 1;
    config.path = "/foo/bar";
    config.typeOfAction = 3;
    ap_hook_handler(example_handler, NULL, NULL, APR_HOOK_LAST);
}
/*
 ==============================================================================
 Our module name tag:
 ==============================================================================
 */
module AP_MODULE_DECLARE_DATA   example_module =
{
    STANDARD20_MODULE_STUFF,
    NULL,               /* Per-directory configuration handler */
    NULL,               /* Merge handler for per-directory configurations */
    NULL,               /* Per-server configuration handler */
    NULL,               /* Merge handler for per-server configurations */
    example_directives, /* Any directives we may have for httpd */
    register_hooks,     /* Our hook registering function */
    AP_MODULE_FLAG_NONE  /* Flags */
};
```

In our httpd.conf file, we can now change the hard-coded configuration by
adding a few lines:

```
ExampleEnabled On
ExamplePath "/usr/bin/foo"
ExampleAction file allow
```

And thus we apply the configuration, visit `/example` on our
web site, and we see the configuration has adapted to what we wrote in our
configuration file.

[![top](../images/up.gif)](#page-header)

## Context aware configurations [¶](#context "Permanent link")

### Introduction to context aware configurations

In Apache HTTP Server 2.4, different URLs, virtual hosts, directories etc can have very
different meanings to the user of the server, and thus different contexts
within which modules must operate. For example, let's assume you have this
configuration set up for mod\_rewrite:

```
<Directory "/var/www">
    RewriteCond "%{HTTP_HOST}" "^example.com$"
    RewriteRule "(.*)" "http://www.example.com/$1"
</Directory>
<Directory "/var/www/sub">
    RewriteRule "^foobar$" "index.php?foobar=true"
</Directory>
```

In this example, you will have set up two different contexts for
mod\_rewrite:

1. Inside `/var/www`, all requests for `http://example.com` must go to `http://www.example.com`
2. Inside `/var/www/sub`, all requests for `foobar` must go to `index.php?foobar=true`

If mod\_rewrite (or the entire server for that matter) wasn't context aware, then
these rewrite rules would just apply to every and any request made,
regardless of where and how they were made, but since the module can pull
the context specific configuration straight from the server, it does not need
to know itself, which of the directives are valid in this context, since
the server takes care of this.

So how does a module get the specific configuration for the server,
directory or location in question? It does so by making one simple call:

```
example_config *config = (example_config*) ap_get_module_config(r->per_dir_config, &example_module);
```

That's it! Of course, a whole lot goes on behind the scenes, which we will
discuss in this chapter, starting with how the server came to know what our
configuration looks like, and how it came to be set up as it is in the
specific context.

### Our basic configuration setup

In this chapter, we will be working with a slightly modified version of
our previous context structure. We will set a `context`
variable that we can use to track which context configuration is being
used by the server in various places:

```
typedef struct {
    char        context[256];
    char        path[256];
    int         typeOfAction;
    int         enabled;
} example_config;
```

Our handler for requests will also be modified, yet still very simple:

```
static int example_handler(request_rec *r)
{
    if(!r->handler || strcmp(r->handler, "example-handler")) return(DECLINED);
    example_config *config = (example_config*) ap_get_module_config(r->per_dir_config, &example_module);
    ap_set_content_type(r, "text/plain");
    ap_rprintf("Enabled: %u\n", config->enabled);
    ap_rprintf("Path: %s\n", config->path);
    ap_rprintf("TypeOfAction: %x\n", config->typeOfAction);
    ap_rprintf("Context: %s\n", config->context);
    return OK;
}
```

### Choosing a context

Before we can start making our module context aware, we must first define,
which contexts we will accept. As we saw in the previous chapter, defining
a directive required five elements be set:

```
AP_INIT_TAKE1("exampleEnabled", example_set_enabled, NULL, RSRC_CONF, "Enable or disable mod_example"),
```

The `RSRC_CONF` definition told the server that we would only allow
this directive in a global server context, but since we are now trying out
a context aware version of our module, we should set this to something
more lenient, namely the value `ACCESS_CONF`, which lets us use
the directive inside <Directory> and <Location> blocks. For more
control over the placement of your directives, you can combine the following
restrictions together to form a specific rule:

- `RSRC_CONF`: Allow in .conf files (not .htaccess) outside <Directory> or <Location>
- `ACCESS_CONF`: Allow in .conf files (not .htaccess) inside <Directory> or <Location>
- `OR_OPTIONS`: Allow in .conf files and .htaccess when `AllowOverride Options` is set
- `OR_FILEINFO`: Allow in .conf files and .htaccess when `AllowOverride FileInfo` is set
- `OR_AUTHCFG`: Allow in .conf files and .htaccess when `AllowOverride AuthConfig` is set
- `OR_INDEXES`: Allow in .conf files and .htaccess when `AllowOverride Indexes` is set
- `OR_ALL`: Allow anywhere in .conf files and .htaccess

### Using the server to allocate configuration slots

A much smarter way to manage your configurations is by letting the server
help you create them. To do so, we must first start off by changing our
*name tag* to let the server know, that it should assist us in creating
and managing our configurations. Since we have chosen the per-directory
(or per-location) context for our module configurations, we'll add a
per-directory creator and merger function reference in our tag:

```
module AP_MODULE_DECLARE_DATA   example_module =
{
    STANDARD20_MODULE_STUFF,
    create_dir_conf, /* Per-directory configuration handler */
    merge_dir_conf,  /* Merge handler for per-directory configurations */
    NULL,            /* Per-server configuration handler */
    NULL,            /* Merge handler for per-server configurations */
    directives,      /* Any directives we may have for httpd */
    register_hooks,  /* Our hook registering function */
    AP_MODULE_FLAG_NONE /* Flags */
};
```

### Creating new context configurations

Now that we have told the server to help us create and manage configurations,
our first step is to make a function for creating new, blank
configurations. We do so by creating the function we just referenced in
our name tag as the Per-directory configuration handler:

```
void *create_dir_conf(apr_pool_t *pool, char *context) {
    context = context ? context : "(undefined context)";
    example_config *cfg = apr_pcalloc(pool, sizeof(example_config));
    if(cfg) {
        /* Set some default values */
        strcpy(cfg->context, context);
        cfg->enabled = 0;
        cfg->path = "/foo/bar";
        cfg->typeOfAction = 0x11;
    }
    return cfg;
}
```

### Merging configurations

Our next step in creating a context aware configuration is merging
configurations. This part of the process particularly applies to scenarios
where you have a parent configuration and a child, such as the following:

```
<Directory "/var/www">
    ExampleEnabled On
    ExamplePath "/foo/bar"
    ExampleAction file allow
</Directory>
<Directory "/var/www/subdir">
    ExampleAction file deny
</Directory>
```

In this example, it is natural to assume that the directory `/var/www/subdir` should inherit the values set for the `/var/www` directory, as we did not specify an `ExampleEnabled` nor
an `ExamplePath` for this directory. The server does not presume to
know if this is true, but cleverly does the following:

1. Creates a new configuration for `/var/www`
2. Sets the configuration values according to the directives given for `/var/www`
3. Creates a new configuration for `/var/www/subdir`
4. Sets the configuration values according to the directives given for `/var/www/subdir`
5. **Proposes a merge** of the two configurations into a new configuration for `/var/www/subdir`

This proposal is handled by the `merge_dir_conf` function we
referenced in our name tag. The purpose of this function is to assess the
two configurations and decide how they are to be merged:

```
void *merge_dir_conf(apr_pool_t *pool, void *BASE, void *ADD) {
    example_config *base = (example_config *) BASE ; /* This is what was set in the parent context */
    example_config *add = (example_config *) ADD ;   /* This is what is set in the new context */
    example_config *conf = (example_config *) create_dir_conf(pool, "Merged configuration"); /* This will be the merged configuration */
    
    /* Merge configurations */
    conf->enabled = ( add->enabled == 0 ) ? base->enabled : add->enabled ;
    conf->typeOfAction = add->typeOfAction ? add->typeOfAction : base->typeOfAction;
    strcpy(conf->path, strlen(add->path) ? add->path : base->path);
    
    return conf ;
}
```

### Trying out our new context aware configurations

Now, let's try putting it all together to create a new module that is
context aware. First off, we'll create a configuration that lets us test
how the module works:

```
<Location "/a">
    SetHandler example-handler
    ExampleEnabled on
    ExamplePath "/foo/bar"
    ExampleAction file allow
</Location>

<Location "/a/b">
    ExampleAction file deny
    ExampleEnabled off
</Location>

<Location "/a/b/c">
    ExampleAction db deny
    ExamplePath "/foo/bar/baz"
    ExampleEnabled on
</Location>
```

Then we'll assemble our module code. Note, that since we are now using our
name tag as reference when fetching configurations in our handler, I have
added some prototypes to keep the compiler happy:

```
/*$6
 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 * mod_example_config.c
 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 */

#include <stdio.h>
#include "apr_hash.h"
#include "ap_config.h"
#include "ap_provider.h"
#include "httpd.h"
#include "http_core.h"
#include "http_config.h"
#include "http_log.h"
#include "http_protocol.h"
#include "http_request.h"

/*$1
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Configuration structure
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 */

typedef struct
{
    char    context[256];
    char    path[256];
    int     typeOfAction;
    int     enabled;
} example_config;

/*$1
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Prototypes
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 */

static int    example_handler(request_rec *r);
const char    *example_set_enabled(cmd_parms *cmd, void *cfg, const char *arg);
const char    *example_set_path(cmd_parms *cmd, void *cfg, const char *arg);
const char    *example_set_action(cmd_parms *cmd, void *cfg, const char *arg1, const char *arg2);
void          *create_dir_conf(apr_pool_t *pool, char *context);
void          *merge_dir_conf(apr_pool_t *pool, void *BASE, void *ADD);
static void   register_hooks(apr_pool_t *pool);

/*$1
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Configuration directives
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 */

static const command_rec    directives[] =
{
    AP_INIT_TAKE1("exampleEnabled", example_set_enabled, NULL, ACCESS_CONF, "Enable or disable mod_example"),
    AP_INIT_TAKE1("examplePath", example_set_path, NULL, ACCESS_CONF, "The path to whatever"),
    AP_INIT_TAKE2("exampleAction", example_set_action, NULL, ACCESS_CONF, "Special action value!"),
    { }
};

/*$1
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Our name tag
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 */

module AP_MODULE_DECLARE_DATA    example_module =
{
    STANDARD20_MODULE_STUFF,
    create_dir_conf,    /* Per-directory configuration handler */
    merge_dir_conf,     /* Merge handler for per-directory configurations */
    NULL,               /* Per-server configuration handler */
    NULL,               /* Merge handler for per-server configurations */
    directives,         /* Any directives we may have for httpd */
    register_hooks,     /* Our hook registering function */
    AP_MODULE_FLAG_NONE  /* Flags */
};

/*
 =======================================================================================================================
    Hook registration function
 =======================================================================================================================
 */
static void register_hooks(apr_pool_t *pool)
{
    ap_hook_handler(example_handler, NULL, NULL, APR_HOOK_LAST);
}

/*
 =======================================================================================================================
    Our example web service handler
 =======================================================================================================================
 */
static int example_handler(request_rec *r)
{
    if(!r->handler || strcmp(r->handler, "example-handler")) return(DECLINED);

    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
    example_config    *config = (example_config *) ap_get_module_config(r->per_dir_config, &example_module);
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

    ap_set_content_type(r, "text/plain");
    ap_rprintf(r, "Enabled: %u\n", config->enabled);
    ap_rprintf(r, "Path: %s\n", config->path);
    ap_rprintf(r, "TypeOfAction: %x\n", config->typeOfAction);
    ap_rprintf(r, "Context: %s\n", config->context);
    return OK;
}

/*
 =======================================================================================================================
    Handler for the "exampleEnabled" directive
 =======================================================================================================================
 */
const char *example_set_enabled(cmd_parms *cmd, void *cfg, const char *arg)
{
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
    example_config    *conf = (example_config *) cfg;
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

    if(conf)
    {
        if(!strcasecmp(arg, "on"))
            conf->enabled = 1;
        else
            conf->enabled = 0;
    }

    return NULL;
}

/*
 =======================================================================================================================
    Handler for the "examplePath" directive
 =======================================================================================================================
 */
const char *example_set_path(cmd_parms *cmd, void *cfg, const char *arg)
{
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
    example_config    *conf = (example_config *) cfg;
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

    if(conf)
    {
        strcpy(conf->path, arg);
    }

    return NULL;
}

/*
 =======================================================================================================================
    Handler for the "exampleAction" directive ;
    Let's pretend this one takes one argument (file or db), and a second (deny or allow), ;
    and we store it in a bit-wise manner.
 =======================================================================================================================
 */
const char *example_set_action(cmd_parms *cmd, void *cfg, const char *arg1, const char *arg2)
{
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
    example_config    *conf = (example_config *) cfg;
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

    if(conf)
    {
        {
            if(!strcasecmp(arg1, "file"))
                conf->typeOfAction = 0x01;
            else
                conf->typeOfAction = 0x02;
            if(!strcasecmp(arg2, "deny"))
                conf->typeOfAction += 0x10;
            else
                conf->typeOfAction += 0x20;
        }
    }

    return NULL;
}

/*
 =======================================================================================================================
    Function for creating new configurations for per-directory contexts
 =======================================================================================================================
 */
void *create_dir_conf(apr_pool_t *pool, char *context)
{
    context = context ? context : "Newly created configuration";

    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
    example_config    *cfg = apr_pcalloc(pool, sizeof(example_config));
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

    if(cfg)
    {
        {
            /* Set some default values */
            strcpy(cfg->context, context);
            cfg->enabled = 0;
            memset(cfg->path, 0, 256);
            cfg->typeOfAction = 0x00;
        }
    }

    return cfg;
}

/*
 =======================================================================================================================
    Merging function for configurations
 =======================================================================================================================
 */
void *merge_dir_conf(apr_pool_t *pool, void *BASE, void *ADD)
{
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
    example_config    *base = (example_config *) BASE;
    example_config    *add = (example_config *) ADD;
    example_config    *conf = (example_config *) create_dir_conf(pool, "Merged configuration");
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

    conf->enabled = (add->enabled == 0) ? base->enabled : add->enabled;
    conf->typeOfAction = add->typeOfAction ? add->typeOfAction : base->typeOfAction;
    strcpy(conf->path, strlen(add->path) ? add->path : base->path);
    return conf;
}
```

[![top](../images/up.gif)](#page-header)

## Summing up [¶](#summary "Permanent link")

We have now looked at how to create simple modules for Apache HTTP Server 2.4 and
configuring them. What you do next is entirely up to you, but it is my
hope that something valuable has come out of reading this documentation.
If you have questions on how to further develop modules, you are welcome
to join our [mailing lists](http://httpd.apache.org/lists.html)
or check out the rest of our documentation for further tips.

[![top](../images/up.gif)](#page-header)

## Some useful snippets of code [¶](#snippets "Permanent link")

### Retrieve variables from POST form data

```
typedef struct {
    const char *key;
    const char *value;
} keyValuePair;

keyValuePair *readPost(request_rec *r) {
    apr_array_header_t *pairs = NULL;
    apr_off_t len;
    apr_size_t size;
    int res;
    int i = 0;
    char *buffer;
    keyValuePair *kvp;

    res = ap_parse_form_data(r, NULL, &pairs, -1, HUGE_STRING_LEN);
    if (res != OK || !pairs) return NULL; /* Return NULL if we failed or if there are is no POST data */
    kvp = apr_pcalloc(r->pool, sizeof(keyValuePair) * (pairs->nelts + 1));
    while (pairs && !apr_is_empty_array(pairs)) {
        ap_form_pair_t *pair = (ap_form_pair_t *) apr_array_pop(pairs);
        apr_brigade_length(pair->value, 1, &len);
        size = (apr_size_t) len;
        buffer = apr_palloc(r->pool, size + 1);
        apr_brigade_flatten(pair->value, buffer, &size);
        buffer[len] = 0;
        kvp[i].key = apr_pstrdup(r->pool, pair->name);
        kvp[i].value = buffer;
        i++;
    }
    return kvp;
}

static int example_handler(request_rec *r)
{
    /*~~~~~~~~~~~~~~~~~~~~~~*/
    keyValuePair *formData;
    /*~~~~~~~~~~~~~~~~~~~~~~*/

    formData = readPost(r);
    if (formData) {
        int i;
        for (i = 0; &formData[i]; i++) {
            if (formData[i].key && formData[i].value) {
                ap_rprintf(r, "%s = %s\n", formData[i].key, formData[i].value);
            } else if (formData[i].key) {
                ap_rprintf(r, "%s\n", formData[i].key);
            } else if (formData[i].value) {
                ap_rprintf(r, "= %s\n", formData[i].value);
            } else {
                break;
            }
        }
    }
    return OK;
}
```

### Printing out every HTTP header received

```
static int example_handler(request_rec *r)
{
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
    const apr_array_header_t    *fields;
    int                         i;
    apr_table_entry_t           *e = 0;
    /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

    fields = apr_table_elts(r->headers_in);
    e = (apr_table_entry_t *) fields->elts;
    for(i = 0; i < fields->nelts; i++) {
        ap_rprintf(r, "%s: %s\n", e[i].key, e[i].val);
    }
    return OK;
}
```

### Reading the request body into memory

```
static int util_read(request_rec *r, const char **rbuf, apr_off_t *size)
{
    /*~~~~~~~~*/
    int rc = OK;
    /*~~~~~~~~*/

    if((rc = ap_setup_client_block(r, REQUEST_CHUNKED_ERROR))) {
        return(rc);
    }

    if(ap_should_client_block(r)) {

        /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
        char         argsbuffer[HUGE_STRING_LEN];
        apr_off_t    rsize, len_read, rpos = 0;
        apr_off_t length = r->remaining;
        /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

        *rbuf = (const char *) apr_pcalloc(r->pool, (apr_size_t) (length + 1));
        *size = length;
        while((len_read = ap_get_client_block(r, argsbuffer, sizeof(argsbuffer))) > 0) {
            if((rpos + len_read) > length) {
                rsize = length - rpos;
            }
            else {
                rsize = len_read;
            }

            memcpy((char *) *rbuf + rpos, argsbuffer, (size_t) rsize);
            rpos += rsize;
        }
    }
    return(rc);
}

static int example_handler(request_rec *r) 
{
    /*~~~~~~~~~~~~~~~~*/
    apr_off_t   size;
    const char  *buffer;
    /*~~~~~~~~~~~~~~~~*/

    if(util_read(r, &buffer, &size) == OK) {
        ap_rprintf(r, "We read a request body that was %" APR_OFF_T_FMT " bytes long", size);
    }
    return OK;
}
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/developer/modguide.html "English")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
