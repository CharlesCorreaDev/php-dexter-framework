# Configuration | LiteSpeed Cache for Laravel | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lsclaravel/settings/

---

# Configuration[¶](#configuration "Permanent link")

The package comes with 3 functionalities:

- Setting the cache control headers for lscache
- Setting specific tags
- Purging

## Cache Control[¶](#cache-control "Permanent link")

You'll be able to configure defaults in the `config/lscache.php` file. Here you can set the max-age (`default_ttl`), the cacheability (`default_cacheability`) such as public, private or no-cache, or enable ESI (`esi`) in the `X-LiteSpeed-Cache-Control` response header.

If the `default_ttl` is set to `0`, then the `X-LiteSpeed-Cache-Control` response header won't be returned.

You can control the config settings in your `.env` file as such:

- `LSCACHE_ESI_ENABLED` - accepts `true` or `false` to whether you want ESI enabled or not globally; Default `false`
- `LSCACHE_DEFAULT_TTL` - accepts an integer, this value is in seconds; Default: `0`
- `LSCACHE_DEFAULT_CACHEABILITY` - accepts a string, you can use values such as `private`, `no-cache`, `public` or `no-vary`; Default: `no-cache`
- `LSCACHE_GUEST_ONLY` - accepts `true` or `false` to decide if the cache should be enabled for guests only; Defaults to `false`

You set the cache control header for LSCache using middleware, so we can do something like this inside `routes/web.php`:

Example 1

```
Route::get('/', function() {
    return view('frontpage');
});

Route::get('/about-us', function() {
    return view('about-us');
})->middleware('lscache:max-age=300;public');

Route::get('/contact', function() {
    return view('contact');
})->middleware('lscache:max-age=10;private;esi=on');

Route::get('/admin', function() {
    return view('admin');
})->middleware('lscache:no-cache');
```

- The `/` route will use the default `X-LiteSpeed-Cache-Control` header that you've configured in `config/lscache.php`.
- The `/about-us` route sets a max-age of 300 seconds as well as setting the cacheability to `public`. Keep in mind you'll use semi-colon (`;`) to separate these values.
- The `/contact` route uses a max-age of 10 seconds, has private cacheability, and turns ESI on. Turning ESI on allows you to use `<esi:include>` within your blade templates, to be parsed by the LiteSpeed Web Server ESI engine.
- The `/admin` route will never be cached by setting a `X-LiteSpeed-Cache-Control: no-cache` header.

Example 2

You'll also be able to apply the same middleware from Example 1 to route groups in Laravel, like so:

```
Route::group(['prefix' => 'admin', 'middleware' => ['lscache:private;esi=on;max-age=120']], function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    });

    Route::get('/stats', function() {
        return view('stats');
    })->middleware('lscache:no-cache');
});
```

In the above case, we've set the whole `admin` group to be private with esi enabled and a max-age of 120 seconds, however in the `/admin/stats` route, we override the `X-LiteSpeed-Cache-Control` header to `no-cache`.

## Tags[¶](#tags "Permanent link")

You're also able to set tags for LSCache using the `lstags` middleware.

Example 3

If we use the Example 2 case of our `admin` route group:

```
Route::group(['prefix' => 'admin', 'middleware' => ['lscache:private;esi=on;max-age=900', 'lstags:admin']], function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    });

    Route::get('/users', function() {
        return view('users');
    });
});
```

Here we've added the `lstags:admin` middleware, this means that the cache will get tagged with an `admin` tag, so when we later want to purge the cache, we can target all admin pages using the tag `admin`.

You can also do more complex tags, such as:

```
Route::get('/view', function() {
    return view('view');
})->middleware(['lscache:private', 'lstags:public:pubtag1;public:pubtag2;public:pubtag3;privtag1;privtag2']);
```

## Purge[¶](#purge "Permanent link")

If we have an admin interface that controls, for example, a blog, when you publish a new article, you might want to purge the frontpage of the blog so the article appears in the overview.

You'd do this in your controller with the following code:

```
<?php

namespace App\Http\Controllers;

use LSCache;

class BlogController extends BaseController
{
    // Your article logic here

    LSCache::purge('/');
}
```

Here we are simply telling it to add an additional header called `X-LiteSpeed-Purge` with the value `stale,/`. This will invalidate the frontpage of the site.

Purge Examples

You can purge everything, like so:

```
LSCache::purge('*');
// or
LSCache::purgeAll();
```

One or multiple URIs can be purged by using a comma-separated list:

```
LSCache::purge('/blog,/about-us,/');
// or
LSCache::purgeItems(['/blog', '/about-us', '/']);
```

You can purge individual or multiple tags:

```
LSCache::purge('tag=archive, tag=categories');
// or
LSCache::purgeTags(['archive', 'categories']);
```

Or if you want to purge private cache by tag:

```
LSCache::purge('private, tag=users');
```

You even have the possibility to purge a set of public tags and and purge all the private tags:

```
LSCache::purge('pubtag1, pubtag2, pubtag3; private, *');
```

LiteSpeed Cache for Laravel 1.1.0 comes with a stale option turned on by default for the `LSCache::purge` function, this can be turned off by using `false` as the second parameter in the `purge` function:

```
LSCache::purge('*', false);
// or
LSCache::purge('*', $stale=false);
// or
LSCache::purgeAll(false);
```

### Why stale purge matters[¶](#why-stale-purge-matters "Permanent link")

By default the way Lscache works in LiteSpeed is by purging an element in the cache, and next request will generate the cached version.

This works great if you're running a fairly low traffic site, however if your application takes let's say 2 seconds to process a given request, all traffic received to this endpoint within those 2 seconds will end up hitting the backend, and all visitors will hit PHP.

By using the `stale,` keyword in front the "key" you're purging, you're telling Lscache to purge the item, but if multiple visitors hit the same endpoint right after each other, only the first visitor will be the one generating the cache item. All remaining vistors will get served the stale cached page until the new cached page is available.

Since a page generation should be rather fast, we're only serving this stale content for maybe a couple of seconds, thus also the reason it's being enabled by default.

If your application cannot work with stale content at all, then you can use `false` or `$stale=false` as the second parameter in the `LSCache::purge()` function to disable this functionality.

You can also purge specific public tags by adding `~s` after the tag, such as:

```
LSCache::purge('pubtag1, pubtag2~s, pubtag3; private, privtag1, privtag2', $stale=false);
```

Only `pubtag2` will be served stale.

## Using CSRF Tokens[¶](#using-csrf-tokens "Permanent link")

When you're building a web application that contains forms, it's quite common that you have CSRF tokens to prevent cross-site scripting (XSS). However, if you want to use LSCache within your application, this often breaks form submissions because everyone gets the same CSRF token, unless you've set private cache as the default when enabling LSCache.

However, we can use the public cache in LSCache together with ESI to make the ESI tokens private.

It does require a few changes in your Laravel application to make this work.

You need to add a new route inside `routes/web.php` called `/csrf` like this:

```
Route::get('/csrf', function() {
    $response = csrf_token();
    return response($response, 200);
})->middleware('lscache:private;max-age=900');
```

What we are doing here is solely generating a CSRF token. We make it private in such a way that the response becomes unique to the user, and we cache it for 900 seconds (15 minutes). Since the tokens do not constantly refresh, there is no need to do an ESI call for every pageview if we can avoid it.

The default session timeout in Laravel is 120 minutes (2 hours). By setting a lower max-age on the cache-control for CSRF, we make sure that the `/csrf` endpoint gets called every 15 minutes (if the visitor has activity), this will keep the session "alive" and continue to extend the lifetime of the session by 120 minutes after "last activity".

### CSRF Tokens in Forms[¶](#csrf-tokens-in-forms "Permanent link")

Next, we add an `ESI_ENABLED=true` to our .env file, since we'll use this in our views where we need the CSRF token.

In the pages where we have a form, you'd normally do something like:

```
<form method="POST" action="/profile">
    @csrf
    ...
</form>
```

We can simply replace this with:

```
<form method="POST" action="/profile">
    @if(env('ESI_ENABLED'))
        <input type="hidden" name="_token" value='<esi:include src="/csrf" cache-control="private" />'>
    @else
        @csrf
    @endif
    ...
</form>
```

What we do is to check whether `ESI_ENABLED` is `true`. If it is, we generate our token using the `esi:include` call. If `ESI_ENABLED` is set to `false`, we use the Laravel helper `@csrf` to generate the CSRF token.

### CSRF Meta Tag Token[¶](#csrf-meta-tag-token "Permanent link")

Laravel also stores your CSRF token in a meta tag. This is used for JavaScript-driven applications, so we want to make sure the token is available in a meta tag as well.

Change the following code:

```
<meta name="csrf-token" content="{{ csrf_token() }}">
```

To:

```
@if(env('ESI_ENABLED'))
    <meta name="csrf-token" content='<esi:include src="/csrf" cache-control="private" />'>
@else
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endif
```

We once again simply use our `ESI_ENABLED` environment variable to handle the decision whether to use ESI or not.

### CSRF in window.Laravel Implementation[¶](#csrf-in-windowlaravel-implementation "Permanent link")

Older Laravel applications can also have their CSRF token set in a `window.Laravel` variable in JavaScript. This method isn't used anymore, but in case you have an older Laravel application, you can also handle this by doing:

```
<script>
    @if(env('ESI_ENABLED'))
        window.Laravel = {"csrfToken":"<esi:include src='/csrf' cache-control='private,no-cache' />"}
    @else
        window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
    @endif
</script>
```

### Remember to Enable ESI[¶](#remember-to-enable-esi "Permanent link")

We have a small example here of how to enable the ESI engine:

Example

```
Route::get('/csrf', function() {
    $response = csrf_token();
    return response($response, 200);
})->middleware('lscache:private;max-age=900');

Route::get('/contact', function() {
    return view('contact');
})->middleware('lscache:max-age=3600;public;esi=on');
```

We use our `lscache` middleware to set a max age of 1 hour, set the cacheability to public and enable the ESI engine with `esi=on`. It's important that you use `esi=on` within the lscache-middleware for all the pages where you use your ESI blocks - if you do not add this, the ESI engine won't get enabled and ESI won't be used.

For performance reasons, please do not enable ESI globally.

### How to handle CSRF if you're using OpenLiteSpeed[¶](#how-to-handle-csrf-if-youre-using-openlitespeed "Permanent link")

OpenLiteSpeed doesn't have ESI available, so you can't use the above ESI implementation with OpenLiteSpeed, however, we can still do something similar using javascript:

```
<script type="text/javascript">
  $(document).ready(function () {
    $.ajax({
      url: '/csrf',
      success: function(csrf_token) {
        $('meta[name=csrf-token]').attr('content', csrf_token);
        $('input[name=_token]').attr('value', csrf_token);
      }
    });
  });
</script>
```

You'll still use the `/csrf` endpoint mentioned earlier:

```
Route::get('/csrf', function() {
    $response = csrf_token();
    return response($response, 200);
})->middleware('lscache:private;max-age=900');
```

## Verify Your Site is Being Cached[¶](#verify-your-site-is-being-cached "Permanent link")

Video

See a video demonstration of this topic [here](https://www.youtube.com/watch?v=M9YDUV-LqYQ).

### LSCache Check Tool[¶](#lscache-check-tool "Permanent link")

There's a simple way to see if a URL is cached by LiteSpeed: the [LSCache Check](https://check.lscache.io/) Tool.

Enter the URL you wish to check, and the tool will respond with an easy-to-read Yes or No result, and a display of the URL's response headers, in case you want to examine the results more closely.

[![!LSCache Check](/shared/lscache/images/installation-verify01.png)](https://docs.litespeedtech.com/shared/lscache/images/installation-verify01.png)

In addition to LSCache support, the tool can detect cache hits, and can detect when sites are using LiteSpeed Web ADC or QUIC.cloud CDN for caching.

Additionally, a Stale Cache Warning will alert you if browser cache is detected on dynamic pages. This is because browser cache may interfere with the delivery of fresh content.

### Manual Lookup[¶](#manual-lookup "Permanent link")

[![!Verify Cache Miss](/shared/lscache/images/installation-verify02.png)](https://docs.litespeedtech.com/shared/lscache/images/installation-verify02.png)

You can verify a page is being served from LSCache through the following steps:

1. From a non-logged-in browser, navigate to your site, and open the developer tools (usually, right-click > **Inspect**). Open the **Network** tab.
2. Refresh the page.
3. Click the first resource. This should be an HTML file. For example, if your page is `http://example.com/webapp/`, your first resource should either be something like `example.com/webapp/` or `webapp/`.
4. You should see headings similar to these:

   ```
   X-LiteSpeed-Cache: miss
   X-LiteSpeed-Cache-Control:public,max-age=1800
   X-LiteSpeed-Tag:B1_F,B1_
   ```

   These headings mean the page had not yet been cached, but that LiteSpeed has now stored it, and it will be served from cache with the next request.
5. Reload the page and you should see `X-LiteSpeed-Cache: hit` in the response header. This means the page is being served by LSCache and is configured correctly. [![!Verify Cache Hit](/shared/lscache/images/installation-verify03.png)](https://docs.litespeedtech.com/shared/lscache/images/installation-verify03.png)

Alternative Headers

The `X-LiteSpeed-Cache` header is most common, but you may see `X-LSADC-Cache` if your site is served by LiteSpeed Web ADC.

You may also see `X-QC-Cache` and `X-QC-Pop` if your site is served via QUIC.cloud CDN. The former indicates the cache status (`hit` or `miss`) and the latter indicates what PoP location (such as `NA-US-LGA-33`) served this response.

These alternative headers are also an indication that LSCache is working properly on your site.

Important

If you don't see `X-LiteSpeed-Cache: hit` or `X-LiteSpeed-Cache: miss` (or any of the alternative headers), then there is a problem with the LSCache configuration.

### Non-Cacheable Pages[¶](#non-cacheable-pages "Permanent link")

Sometimes there are pages which should not be cached. To verify that such pages have indeed been excluded from caching, check the developer tools as described [above](#verify-your-site-is-being-cached).

You should see headings similar to these:

```
X-LiteSpeed-Cache-Control:no-cache, esi=on
X-LiteSpeed-Tag:B1_F,B1_
```

`X-LiteSpeed-Cache-Control`, when set to `no-cache`, indicates that LiteSpeed Server has served your page dynamically, and that it was *intentionally* not served from cache.
