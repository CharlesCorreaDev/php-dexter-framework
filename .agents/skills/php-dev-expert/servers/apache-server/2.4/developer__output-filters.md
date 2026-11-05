# Guide to writing output filters - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/developer/output-filters.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](developer.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Developer Documentation](developer.md)

# Guide to writing output filters

There are a number of common pitfalls encountered when writing
output filters; this page aims to document best practice for
authors of new or existing filters.

This document is applicable to both version 2.0 and version 2.2
of the Apache HTTP Server; it specifically targets
`RESOURCE`-level or `CONTENT_SET`-level
filters though some advice is generic to all types of filter.

- ![](../images/down.gif) [Filters and bucket brigades](#basics)
- ![](../images/down.gif) [Filter invocation](#invocation)
- ![](../images/down.gif) [Brigade structure](#brigade)
- ![](../images/down.gif) [Processing buckets](#buckets)
- ![](../images/down.gif) [Filtering brigades](#filtering)
- ![](../images/down.gif) [Maintaining state](#state)
- ![](../images/down.gif) [Buffering buckets](#buffer)
- ![](../images/down.gif) [Non-blocking bucket reads](#nonblock)
- ![](../images/down.gif) [Ten rules for output filters](#rules)
- ![](../images/down.gif) [Use case: buffering in mod\_ratelimit](#usecase1)

[![top](../images/up.gif)](#page-header)

## Filters and bucket brigades [¶](#basics "Permanent link")

Each time a filter is invoked, it is passed a *bucket
brigade*, containing a sequence of *buckets* which
represent both data content and metadata. Every bucket has a
*bucket type*; a number of bucket types are defined and
used by the `httpd` core modules (and the
`apr-util` library which provides the bucket brigade
interface), but modules are free to define their own types.

Output filters must be prepared to process
buckets of non-standard types; with a few exceptions, a filter
need not care about the types of buckets being filtered.

A filter can tell whether a bucket represents either data or
metadata using the `APR_BUCKET_IS_METADATA` macro.
Generally, all metadata buckets should be passed down the filter
chain by an output filter. Filters may transform, delete, and
insert data buckets as appropriate.

There are two metadata bucket types which all filters must pay
attention to: the `EOS` bucket type, and the
`FLUSH` bucket type. An `EOS` bucket
indicates that the end of the response has been reached and no
further buckets need be processed. A `FLUSH` bucket
indicates that the filter should flush any buffered buckets (if
applicable) down the filter chain immediately.

`FLUSH` buckets are sent when the
content generator (or an upstream filter) knows that there may be
a delay before more content can be sent. By passing
`FLUSH` buckets down the filter chain immediately,
filters ensure that the client is not kept waiting for pending
data longer than necessary.

Filters can create `FLUSH` buckets and pass these
down the filter chain if desired. Generating `FLUSH`
buckets unnecessarily, or too frequently, can harm network
utilisation since it may force large numbers of small packets to
be sent, rather than a small number of larger packets. The
section on [Non-blocking bucket reads](#nonblock)
covers a case where filters are encouraged to generate
`FLUSH` buckets.

### Example bucket brigade

`HEAP FLUSH FILE EOS`

This shows a bucket brigade which may be passed to a filter; it
contains two metadata buckets (`FLUSH` and
`EOS`), and two data buckets (`HEAP` and
`FILE`).

[![top](../images/up.gif)](#page-header)

## Filter invocation [¶](#invocation "Permanent link")

For any given request, an output filter might be invoked only
once and be given a single brigade representing the entire response.
It is also possible that the number of times a filter is invoked
for a single response is proportional to the size of the content
being filtered, with the filter being passed a brigade containing
a single bucket each time. Filters must operate correctly in
either case.

An output filter which allocates long-lived
memory every time it is invoked may consume memory proportional to
response size. Output filters which need to allocate memory
should do so once per response; see [Maintaining
state](#state) below.

An output filter can distinguish the final invocation for a
given response by the presence of an `EOS` bucket in
the brigade. Any buckets in the brigade after an EOS should be
ignored.

An output filter should never pass an empty brigade down the
filter chain. To be defensive, filters should be prepared to
accept an empty brigade, and should return success without passing
this brigade on down the filter chain. The handling of an empty
brigade should have no side effects (such as changing any state
private to the filter).

### How to handle an empty brigade

```
apr_status_t dummy_filter(ap_filter_t *f, apr_bucket_brigade *bb)
{
    if (APR_BRIGADE_EMPTY(bb)) {
        return APR_SUCCESS;
    }
    ...
```

[![top](../images/up.gif)](#page-header)

## Brigade structure [¶](#brigade "Permanent link")

A bucket brigade is a doubly-linked list of buckets. The list
is terminated (at both ends) by a *sentinel* which can be
distinguished from a normal bucket by comparing it with the
pointer returned by `APR_BRIGADE_SENTINEL`. The list
sentinel is in fact not a valid bucket structure; any attempt to
call normal bucket functions (such as
`apr_bucket_read`) on the sentinel will have undefined
behavior (i.e. will crash the process).

There are a variety of functions and macros for traversing and
manipulating bucket brigades; see the [apr\_buckets.h](http://apr.apache.org/docs/apr-util/trunk/group___a_p_r___util___bucket___brigades.html)
header for complete coverage. Commonly used macros include:

`APR_BRIGADE_FIRST(bb)`
:   returns the first bucket in brigade bb

`APR_BRIGADE_LAST(bb)`
:   returns the last bucket in brigade bb

`APR_BUCKET_NEXT(e)`
:   gives the next bucket after bucket e

`APR_BUCKET_PREV(e)`
:   gives the bucket before bucket e

The `apr_bucket_brigade` structure itself is
allocated out of a pool, so if a filter creates a new brigade, it
must ensure that memory use is correctly bounded. A filter which
allocates a new brigade out of the request pool
(`r->pool`) on every invocation, for example, will fall
foul of the [warning above](#invocation) concerning
memory use. Such a filter should instead create a brigade on the
first invocation per request, and store that brigade in its [state structure](#state).

It is generally never advisable to use
`apr_brigade_destroy` to "destroy" a brigade unless
you know for certain that the brigade will never be used
again, even then, it should be used rarely. The
memory used by the brigade structure will not be released by
calling this function (since it comes from a pool), but the
associated pool cleanup is unregistered. Using
`apr_brigade_destroy` can in fact cause memory leaks;
if a "destroyed" brigade contains buckets when its
containing pool is destroyed, those buckets will *not* be
immediately destroyed.

In general, filters should use `apr_brigade_cleanup`
in preference to `apr_brigade_destroy`.

[![top](../images/up.gif)](#page-header)

## Processing buckets [¶](#buckets "Permanent link")

When dealing with non-metadata buckets, it is important to
understand that the "`apr_bucket *`" object is an
abstract *representation* of data:

1. The amount of data represented by the bucket may or may not
   have a determinate length; for a bucket which represents data of
   indeterminate length, the `->length` field is set to
   the value `(apr_size_t)-1`. For example, buckets of
   the `PIPE` bucket type have an indeterminate length;
   they represent the output from a pipe.
2. The data represented by a bucket may or may not be mapped
   into memory. The `FILE` bucket type, for example,
   represents data stored in a file on disk.

Filters read the data from a bucket using the
`apr_bucket_read` function. When this function is
invoked, the bucket may *morph* into a different bucket
type, and may also insert a new bucket into the bucket brigade.
This must happen for buckets which represent data not mapped into
memory.

To give an example; consider a bucket brigade containing a
single `FILE` bucket representing an entire file, 24
kilobytes in size:

`FILE(0K-24K)`

When this bucket is read, it will read a block of data from the
file, morph into a `HEAP` bucket to represent that
data, and return the data to the caller. It also inserts a new
`FILE` bucket representing the remainder of the file;
after the `apr_bucket_read` call, the brigade looks
like:

`HEAP(8K) FILE(8K-24K)`

[![top](../images/up.gif)](#page-header)

## Filtering brigades [¶](#filtering "Permanent link")

The basic function of any output filter will be to iterate
through the passed-in brigade and transform (or simply examine)
the content in some manner. The implementation of the iteration
loop is critical to producing a well-behaved output filter.

Taking an example which loops through the entire brigade as
follows:

### Bad output filter -- do not imitate!

```
apr_bucket *e = APR_BRIGADE_FIRST(bb);
const char *data;
apr_size_t length;

while (e != APR_BRIGADE_SENTINEL(bb)) {
    apr_bucket_read(e, &data, &length, APR_BLOCK_READ);
    e = APR_BUCKET_NEXT(e);
}

return ap_pass_brigade(bb);
```

The above implementation would consume memory proportional to
content size. If passed a `FILE` bucket, for example,
the entire file contents would be read into memory as each
`apr_bucket_read` call morphed a `FILE`
bucket into a `HEAP` bucket.

In contrast, the implementation below will consume a fixed
amount of memory to filter any brigade; a temporary brigade is
needed and must be allocated only once per response, see the [Maintaining state](#state) section.

### Better output filter

```
apr_bucket *e;
const char *data;
apr_size_t length;

while ((e = APR_BRIGADE_FIRST(bb)) != APR_BRIGADE_SENTINEL(bb)) {
    rv = apr_bucket_read(e, &data, &length, APR_BLOCK_READ);
    if (rv) ...;
    /* Remove bucket e from bb. */
    APR_BUCKET_REMOVE(e);
    /* Insert it into  temporary brigade. */
    APR_BRIGADE_INSERT_HEAD(tmpbb, e);
    /* Pass brigade downstream. */
    rv = ap_pass_brigade(f->next, tmpbb);
    if (rv) ...;
    apr_brigade_cleanup(tmpbb);
}
```

[![top](../images/up.gif)](#page-header)

## Maintaining state [¶](#state "Permanent link")

A filter which needs to maintain state over multiple
invocations per response can use the `->ctx` field of
its `ap_filter_t` structure. It is typical to store a
temporary brigade in such a structure, to avoid having to allocate
a new brigade per invocation as described in the [Brigade structure](#brigade) section.

### Example code to maintain filter state

```
struct dummy_state {
    apr_bucket_brigade *tmpbb;
    int filter_state;
    ...
};

apr_status_t dummy_filter(ap_filter_t *f, apr_bucket_brigade *bb)
{
    struct dummy_state *state;

    state = f->ctx;
    if (state == NULL) {

        /* First invocation for this response: initialize state structure.
         */
        f->ctx = state = apr_palloc(f->r->pool, sizeof *state);

        state->tmpbb = apr_brigade_create(f->r->pool, f->c->bucket_alloc);
        state->filter_state = ...;
    }
    ...
```

[![top](../images/up.gif)](#page-header)

## Buffering buckets [¶](#buffer "Permanent link")

If a filter decides to store buckets beyond the duration of a
single filter function invocation (for example storing them in its
`->ctx` state structure), those buckets must be *set
aside*. This is necessary because some bucket types provide
buckets which represent temporary resources (such as stack memory)
which will fall out of scope as soon as the filter chain completes
processing the brigade.

To setaside a bucket, the `apr_bucket_setaside`
function can be called. Not all bucket types can be setaside, but
if successful, the bucket will have morphed to ensure it has a
lifetime at least as long as the pool given as an argument to the
`apr_bucket_setaside` function.

Alternatively, the `ap_save_brigade` function can be
used, which will move all the buckets into a separate brigade
containing buckets with a lifetime as long as the given pool
argument. This function must be used with care, taking into
account the following points:

1. On return, `ap_save_brigade` guarantees that all
   the buckets in the returned brigade will represent data mapped
   into memory. If given an input brigade containing, for example,
   a `PIPE` bucket, `ap_save_brigade` will
   consume an arbitrary amount of memory to store the entire output
   of the pipe.
2. When `ap_save_brigade` reads from buckets which
   cannot be setaside, it will always perform blocking reads,
   removing the opportunity to use [Non-blocking
   bucket reads](#nonblock).
3. If `ap_save_brigade` is used without passing a
   non-NULL "`saveto`" (destination) brigade parameter,
   the function will create a new brigade, which may cause memory
   use to be proportional to content size as described in the [Brigade structure](#brigade) section.

Filters must ensure that any buffered data is
processed and passed down the filter chain during the last
invocation for a given response (a brigade containing an EOS
bucket). Otherwise such data will be lost.

[![top](../images/up.gif)](#page-header)

## Non-blocking bucket reads [¶](#nonblock "Permanent link")

The `apr_bucket_read` function takes an
`apr_read_type_e` argument which determines whether a
*blocking* or *non-blocking* read will be performed
from the data source. A good filter will first attempt to read
from every data bucket using a non-blocking read; if that fails
with `APR_EAGAIN`, then send a `FLUSH`
bucket down the filter chain, and retry using a blocking read.

This mode of operation ensures that any filters further down the
filter chain will flush any buffered buckets if a slow content
source is being used.

A CGI script is an example of a slow content source which is
implemented as a bucket type. `mod_cgi` will send
`PIPE` buckets which represent the output from a CGI
script; reading from such a bucket will block when waiting for the
CGI script to produce more output.

### Example code using non-blocking bucket reads

```
apr_bucket *e;
apr_read_type_e mode = APR_NONBLOCK_READ;

while ((e = APR_BRIGADE_FIRST(bb)) != APR_BRIGADE_SENTINEL(bb)) {
    apr_status_t rv;

    rv = apr_bucket_read(e, &data, &length, mode);
    if (rv == APR_EAGAIN && mode == APR_NONBLOCK_READ) {

        /* Pass down a brigade containing a flush bucket: */
        APR_BRIGADE_INSERT_TAIL(tmpbb, apr_bucket_flush_create(...));
        rv = ap_pass_brigade(f->next, tmpbb);
        apr_brigade_cleanup(tmpbb);
        if (rv != APR_SUCCESS) return rv;

        /* Retry, using a blocking read. */
        mode = APR_BLOCK_READ;
        continue;
    }
    else if (rv != APR_SUCCESS) {
        /* handle errors */
    }

    /* Next time, try a non-blocking read first. */
    mode = APR_NONBLOCK_READ;
    ...
}
```

[![top](../images/up.gif)](#page-header)

## Ten rules for output filters [¶](#rules "Permanent link")

In summary, here is a set of rules for all output filters to
follow:

1. Output filters should not pass empty brigades down the filter
   chain, but should be tolerant of being passed empty
   brigades.
2. Output filters must pass all metadata buckets down the filter
   chain; `FLUSH` buckets should be respected by passing
   any pending or buffered buckets down the filter chain.
3. Output filters should ignore any buckets following an
   `EOS` bucket.
4. Output filters must process a fixed amount of data at a
   time, to ensure that memory consumption is not proportional to
   the size of the content being filtered.
5. Output filters should be agnostic with respect to bucket
   types, and must be able to process buckets of unfamiliar
   type.
6. After calling `ap_pass_brigade` to pass a brigade
   down the filter chain, output filters should call
   `apr_brigade_cleanup` to ensure the brigade is empty
   before reusing that brigade structure; output filters should
   never use `apr_brigade_destroy` to "destroy"
   brigades.
7. Output filters must *setaside* any buckets which are
   preserved beyond the duration of the filter function.
8. Output filters must not ignore the return value of
   `ap_pass_brigade`, and must return appropriate errors
   back up the filter chain.
9. Output filters must only create a fixed number of bucket
   brigades for each response, rather than one per invocation.
10. Output filters should first attempt non-blocking reads from
    each data bucket, and send a `FLUSH` bucket down the
    filter chain if the read blocks, before retrying with a blocking
    read.

[![top](../images/up.gif)](#page-header)

## Use case: buffering in mod\_ratelimit [¶](#usecase1 "Permanent link")

The [r1833875](http://svn.apache.org/r1833875) change is a good
example to show what buffering and keeping state means in the context of an
output filter. In this use case, a user asked on the users' mailing list a
interesting question about why `mod_ratelimit` seemed not to
honor its setting with proxied content (either rate limiting at a different
speed or simply not doing it at all). Before diving deep into the solution,
it is better to explain on a high level how `mod_ratelimit` works.
The trick is really simple: take the rate limit settings and calculate a
chunk size of data to flush every 200ms to the client. For example, let's imagine
that to set `rate-limit 60` in our config, these are the high level
steps to find the chunk size:

```
/* milliseconds to wait between each flush of data */
RATE_INTERVAL_MS = 200;
/* rate limit speed in b/s */
speed = 60 * 1024;
/* final chunk size is 12228 bytes */
chunk_size = (speed / (1000 / RATE_INTERVAL_MS));
```

If we apply this calculation to a bucket brigade carrying 38400 bytes, it means
that the filter will try to do the following:

1. Split the 38400 bytes in chunks of maximum 12228 bytes each.
2. Flush the first 12228 chunk of bytes and sleep 200ms.
3. Flush the second 12228 chunk of bytes and sleep 200ms.
4. Flush the third 12228 chunk of bytes and sleep 200ms.
5. Flush the remaining 1716 bytes.

The above pseudo code works fine if the output filter handles only one brigade
for each response, but it might happen that it needs to be called multiple times
with different brigade sizes as well. The former use case is for example when
httpd directly serves some content, like a static file: the bucket brigade
abstraction takes care of handling the whole content, and rate limiting
works nicely. But if the same static content is served via mod\_proxy\_http (for
example a backend is serving it rather than httpd) then the content generator
(in this case mod\_proxy\_http) may use a maximum buffer size and then send data
as bucket brigades to the output filters chain regularly, triggering of course
multiple calls to `mod_ratelimit`. If the reader tries to execute the pseudo code
assuming multiple calls to the output filter, each one requiring to process
a bucket brigade of 38400 bytes, then it is easy to spot some
anomalies:

1. Between the last flush of a brigade and the first one of the next,
   there is no sleep.
2. Even if the sleep was forced after the last flush, then that chunk size
   would not be the ideal size (1716 bytes instead of 12228) and the final client's speed
   would quickly become different than what set in the httpd's config.

In this case, two things might help:

1. Use the ctx internal data structure, initialized by `mod_ratelimit`
   for each response handling cycle, to "remember" when the last sleep was
   performed across multiple invocations, and act accordingly.
2. If a bucket brigade is not splittable into a finite number of chunk\_size
   blocks, store the remaining bytes (located in the tail of the bucket brigade)
   in a temporary holding area (namely another bucket brigade) and then use
   `ap_save_brigade` to set them aside.
   These bytes will be prepended to the next bucket brigade that will be handled
   in the subsequent invocation.
3. Avoid the previous logic if the bucket brigade that is currently being
   processed contains the end of stream bucket (EOS). There is no need to sleep
   or buffering data if the end of stream is reached.

The commit linked in the beginning of the section contains also a bit of code
refactoring so it is not trivial to read during the first pass, but the overall
idea is basically what written up to now. The goal of this section is not to
cause a headache to the reader trying to read C code, but to put him/her into
the right mindset needed to use efficiently the tools offered by the httpd's
filter chain toolset.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/developer/output-filters.html "English")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
