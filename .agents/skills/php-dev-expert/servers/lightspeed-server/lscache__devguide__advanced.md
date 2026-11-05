# Advanced Concepts | LSCache Developers Guide | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/devguide/advanced/

---

# Advanced Concepts[¶](#advanced-concepts "Permanent link")

## Cache Varies[¶](#cache-varies "Permanent link")

Cache objects are stored and retrieved using a Cache Key. An optional [component of the cache key](lscache__devguide.md#cache-objects) is the "vary string." It's this vary string that allows you to save multiple cache objects from the same URL.

This is useful in a number of situations including those where the desktop and mobile views of a page are different, or where the currency displayed on a page varies by the visitor's geographical location.

### Vary Types[¶](#vary-types "Permanent link")

There are two types of cache varies, which may be used together to make up the vary string component of the cache key: vary cookies and a vary environment value.

#### Vary Cookies[¶](#vary-cookies "Permanent link")

When you instruct the the LiteSpeed Cache Engine to vary on a cookie, you are not actually *setting* the cookie. You are telling the Cache Engine to look for the cookie name, and then vary on the value of that cookie. Vary strings can contain multiple vary cookies.

Example

Suppose the server is instructed to vary on the cookie `my_cookie`, and the following four requests come in:

- Request A has NO cookies, so the vary string is blank.
- Request B has `my_cookie` with a value of `Alabama`, so the vary string is `my_cookie = Alabama`.
- Request C has `my_cookie` with a value of `California`, so the vary string is `my_cookie = California`.
- Request D has `my_cookie` with a value of `Alabama`, so the vary string is `my_cookie = Alabama`.

As a result of these four requests, three versions of the URL have been cached: one with a blank vary string (A), one with a `my_cookie = Alabama` vary string (B and D), and one with a `my_cookie = California` vary string (C).

Tip

By default, LiteSpeed servers will recognize any cookie that starts with `_lscache_vary` as a vary cookie. This cookie is always added as part of the cache key, unless the `no-vary` cache-control is set in the response header with `X-litespeed-cache-control: no-vary`.

#### Vary Environment Value[¶](#vary-environment-value "Permanent link")

Unlike vary cookies, a vary value is not made up of a key/value pair. It is simply an environment value, and it may only be used once. If multiple vary values are set, only the last one is used. A vary value is often used to indicate that the request is coming from a mobile device, or which country the request is coming from, among other things.

Example

- Request A has no vary value, so the vary string is blank.
- Request B sets a vary value of `ismobile`, so the vary string is `ismobile`.
- Request C sets vary value `US`, so the vary string is `US`.
- Request D sets vary value `US`, so the vary string is `US`.

As a result of these four requests, three versions of the URL have been cached: one with a blank vary string (A), one with a `ismobile` vary string (B), and one with a `US` vary string (C and D).

#### Mixed Varies[¶](#mixed-varies "Permanent link")

Multiple vary cookies and a vary value may all be set and used together to build the vary string.

Example

Suppose the server is instructed to vary on the cookies `my_cookie` and `my_cookie2`.

- Request A has no cookies and no vary value is set, so the vary string is blank.
- Request B has the cookie `my_cookie=Alabama` and no vary value is set, so the vary string is `my_cookie=Alabama`.
- Request C has the cookie `my_cookie=Alabama` and vary value `ismobile` is set, so the vary string is `my_cookie=Alabama + ismobile`.
- Request D has the cookies `my_cookie=Alabama` and `my_cookie2=Apple` and vary value `ismobile` is set, so the vary string is `my_cookie=Alabama&my_cookie2=Apple + ismobile`
- Request E has no cookies, but vary value `ismobile` is set, so the vary string is `ismobile`.

The five requests will all be served a different cache entry, because their final VARY results are different.

### Implementing Varies[¶](#implementing-varies "Permanent link")

In general, response headers are preferred for vary cookies, and rewrite rules are not required. Once a vary cookie is set by the browser, it will continue to be sent with each request for that URL until that cookie expires or is unset. Therefore, a rewrite rule is not required for retrieval of the cache object.

It's different with a vary value, as it is not passed along by the browser. You need to use both rewrite rules and response headers together to implement a cache vary based on a vary value. The response header instructs the cache engine to store the vary, and a companion rewrite rule uses the vary value for retrieval of the cache object.

Tip

There are more cache vary examples on [the **Usage Examples** page](lscache__devguide__usage.md).

#### Response Headers[¶](#response-headers "Permanent link")

Response headers are used to instruct the server to cache the page with the listed varies in mind.

Adding a vary header with `cookie=` instructs the server to check for the specified vary cookie(s) for the current URL only.

Adding a vary header with `value=` instructs the server to add the environment value to the cache entry. This is useful for situations where the environment value should be set, but the rewrite rule missed setting it. Just be aware that using a response header vary value in this way, to alleviate the shortcomings of a set of rewrite rules, is not always going to work. The proper fix for this situation would be to correct the rewrite rule to match the web application.

It is also possible to set both vary cookies and vary values using a single response header.

Examples

This response header will add two vary cookies, `my_cookie` and `my_cookie2`, to the list of varies to check for this URL. On the next request for this URL, the server will check for the these two cookies *in addition to* those set by the rewrite rules. The cache engine will act as if these two response header cookies were part of the rewrite rule.

```
X-LiteSpeed-Vary: cookie=my_cookie,cookie=my_cookie2
```

This response header will add the `ismobile` environment value to the cache key for the URL. This is useful if the web app knows is it building a mobile view, but the rewrite rule did not match a mobile user agent.

```
X-LiteSpeed-Vary: value=ismobile
```

This response header will vary the URL on the `my_cookie` cookie and add the `ismobile` environment value to the current response.

```
X-LiteSpeed-Vary: cookie=my_cookie,value=ismobile
```

#### Rewrite Rules[¶](#rewrite-rules "Permanent link")

Rewrite rules can be used to vary the request when it comes in, and serve the correct version of the cached URL in response.

If no matching cache object is found and the request is forwarded to the web app, the varies set by the rewrite rules can be accessed by the web app via environment variables. In PHP, these environment variables are `$_SERVER['LSCACHE_VARY_COOKIE']` (the list of cookie names that the server checked) and `$_SERVER['LSCACHE_VARY_VALUE']` (the vary value used). These values may be empty, if no varies of either kind are set.

Examples

This rule instructs the server to check for the `my_cookie` cookie, and if it exists, vary on the value of it:

```
RewriteRule .? - [E=Cache-Vary:my_cookie]
```

In this rule, the server must check for multiple cookies:

```
RewriteRule .* - [E="cache-vary:xf_style_id,xf_language_id"]
```

Here, the rewrite rule checks the user agent to see if it's in a list of mobile browsers. If it matches, it will add the vary value `ismobile` to the request.

```
RewriteCond %{HTTP_USER_AGENT} Mobile|Android|Silk/|Kindle|BlackBerry|Opera Mini|Opera Mobi [NC]
RewriteRule .* - [E=Cache-Control:vary=ismobile]
```

If [the GeoIP module is enabled on LiteSpeed Web Server](https://docs.litespeedtech.com/lsws/cp/cpanel/geoip/), you can use rewrite rules to create cache varies based on the visitor's geological location. This example will create varies based on the vary value found in `GEOIP_COUNTRY_CODE`:

```
RewriteRule .* - [E=Cache-Control:vary=%{ENV:GEOIP_COUNTRY_CODE}]
```

Tip

Examine the examples closely. Note that for vary cookies, you would use `E=Cache-Vary:`, and for the vary environment value, you must use `E=Cache-Control:vary=`.

## ESI[¶](#esi "Permanent link")

It is assumed that you have a general understanding of ESI use cases. Please visit [our blog post introducing ESI](https://blog.litespeedtech.com/2014/02/19/lsws-5-0-lscaches-esi-support-will-speed-up-web-applications/) to ensure a basic understanding of this topic before proceeding.

Video

See a video demonstration of **What is Edge Side Includes (ESI)?** [here](https://www.youtube.com/watch?v=uYpR6D8n3oE).

LiteSpeed can parse the standard ESI tags as well as some LiteSpeed-specific(LSS) tags. The LiteSpeed-specific tags may be used in cases where minifying applications or PageSpeed modules are not built to parse the standard ESI tags. In addition to HTML tags, LiteSpeed also has LSS attributes to assist cache lookup and storage.

### HTML Tags[¶](#html-tags "Permanent link")

#### Inline[¶](#inline "Permanent link")

The `esi:inline` block may be used to cache a section of code separately. It requires an opening and closing tag.

Tag Syntax: `<esi:inline>` or `<esi_inline>` (LSS)

Attributes:

- `src` - The resource url.
- `cache-tag` - Used to classify content for cache storage.
- `cache-control` - Used to determine whether content should be cached and how to store it, as with a traditional `cache-control` header.

Examples

Privately cacheable:

```
<esi:inline name="/litemage/esi/custom/end/point/" cache-control="private,max-age=1800,no-vary" cache-tag="E.welcome">Welcome, John</esi:inline>
```

Publicly cacheable:

```
<esi:inline name="/litemage/esi/custom/end/point/" cache-control="public,max-age=86400" cache-tag="E.footer"><div>Footer html content... </div></esi:inline>
```

#### Include[¶](#include "Permanent link")

This tag generates a second request that is loaded after the main page is loaded. The `esi:include` response headers should contain the various cache headers that are needed to determine how the content is to be cached. It does not require a closing tag. Multiple levels of ESI includes are permitted. The maximum number of levels is 10.

Tag Syntax: `<esi:include>` or `<esi_include>` (LSS)

Attributes:

- `src` - The resource url.
- `cache-tag` - Used for private shared cache lookups. Generally, it should be unique.
- `cache-control` - Used for cache lookups. May specify `no-vary` and either `public` or `private`.
- `as-var` - Used to save small amounts of private content to shared memory and reduce the number of files to be saved. This attribute, as used within `esi:include` is a LiteSpeed customization. Without it, the output of the ESI segment is saved into a file in the file system. May only be used with private content. Content must be smaller than 8K or the data will be discarded instead of cached.
- `test` - Test against a condition before doing the ESI include. If the condition is met, parse the ESI request. Else do not output.
- `combined` - Value is either `parent` or `sub`. A combined ESI include will parse the rest of the main request for any other ESI includes with the `combined=sub` attribute. After parsing, a POST request is sent to the backend. The post body will include the list of ESI includes to parse, so everything is returned in a single response. The post should have the cache control values `no-cache` and `esi=on`. Each individual ESI include block should be wrapped with an ESI inline.

Examples

```
<esi:include src='/litemage/esi/custom/end/point/'
  cache-tag='E.footer' cache-control='public'/>
```

```
<esi:include src='/litemage/esi/custom/end/point/'
  cache-tag='E.token' as-var='1' cache-control='no-vary,private'/>
```

#### Remove[¶](#remove "Permanent link")

This tag may not include nested ESI tags within it. It's used as a backup in case there is no ESI processor, and is placed after another ESI tag (e.g. `esi:include`). If there is an ESI processor, anything inside the `esi:remove` tag is ignored. Else, the ESI tags will be ignored, and anything inside this tag will be processed normally.

Tag Syntax: `<esi:remove>` or `<esi_remove>` (LSS)

#### Choose | When | Otherwise[¶](#choose-when-otherwise "Permanent link")

This tag is like an ESI version of an `if`/`else if`/`else` statement. It must have an opening and closing tag.

Tag Syntax: `<esi:choose> | <esi:when> | <esi:otherwise>` or `<esi_choose> | <esi_when> | <esi_otherwise>` (LSS)

A list of usable variables and expressions are listed [at w3.org](https://www.w3.org/TR/esi-lang).

#### Try | Attempt |Except[¶](#try-attempt-except "Permanent link")

These tags work like an ESI `try`/`catch`. Only `esi:attempt` and `esi:except` tags are allowed immediately inside `esi:try`.

Tag Syntax: `<esi:try> | <esi:attempt> | <esi:except>` or `<esi_try> | <esi_attempt> | <esi_except>` (LSS)

#### Comment[¶](#comment "Permanent link")

This tag may be used to comment ESI logic. It is useful if a developer wishes to leave a comment on an HTML page without it showing up in the processed HTML.

Tag Syntax: `<esi:comment>` or `<esi_comment>` (LSS)

#### Vars[¶](#vars "Permanent link")

Enables the usage of ESI variables (listed [at w3.org](https://www.w3.org/TR/esi-lang))

Tag Syntax: `<esi:vars>` or `<esi_vars>` (LSS)

### Enabling ESI Support[¶](#enabling-esi-support "Permanent link")

The server needs to know when to parse for ESI tags in the response body. There are two ways to enable ESI: rewrite rules and response headers.

Regardless of which method you use to enable ESI, the following Apache-style directive must exist in `.htaccess` in order to activate the cache engine.

```
<IfModule LiteSpeed>
RewriteEngine on
CacheLookup on
</IfModule>
```

#### Rewrite Rules[¶](#rewrite-rules_1 "Permanent link")

Rewrite rules should be used for broad requirements, if many pages need to check for ESI. This rewrite rule activates ESI support for all pages:

```
RewriteRule .? - [E=esi_on:1]
```

If you only want to use ESI on a specific page, you can only enable it only for that page:

```
RewriteRule /path/to/specific-page - [E=esi_on:1]
```

#### Response Headers[¶](#response-headers_1 "Permanent link")

Response Headers should be used if your scope is more narrow, as on a page by page basis. The `X-LiteSpeed-Cache-Control` response header needs to include `esi=on`.

This notifies the server to parse the response for ESI tags. Upon finding an ESI tag, the server will use the attributes to search for a cache entry and if not found, make the ESI request. If the `no-vary` cache control attribute is set, the varies will not be used to locate or store in the cache, and ESI's `$_SERVER['LSCACHE_VARY_COOKIE']` will not be set.

The ESI resource needs to set response headers in order to be cached correctly. `X-LiteSpeed-Cache-Control` needs to be set like a normal cache entry (i.e. `public`/`private`/`shared`/`no-cache, max-age`), like so:

```
<?php
header('X-LiteSpeed-Cache-Control: public, max-age=120, esi=on');
...
...
...
?>
```

### ESI Example[¶](#esi-example "Permanent link")

You have page with 3 lines of content. Line 1 and line 3 are cache friendly, but line 2 is not.

```
<?php
echo 'line 1 - cache friendly';
echo "line 2 - cache unfriendly, generate a random number: " . rand(1,999);
echo 'line 3 - cache friendly';
?>
```

With ESI we can cache this page while punching a hole for line 2 and leaving that content uncached.

Add the following code to `.htaccess` to enable ESI:

```
<IfModule LiteSpeed>
RewriteEngine on
CacheLookup on
RewriteRule PAGE_URI - [E=esi_on:1]
RewriteRule PAGE_URI - [E=cache-control:max-age=120]
</IfModule>
```

Notes

- `PAGE_URI` is a placeholder. Replace it with the actual URI of the page.
- `max-age=120` indicates that the content should be cached for 120 seconds.

Create the main PHP file:

```
<?php
echo 'line 1 - cache friendly';
echo '<esi:include src="/second.php" cache-control="no-cache"/>';
echo 'line 3 - cache friendly';
?>
```

Create a second PHP file which contains the code that is not cache-friendly:

```
<?php
echo "line 2 - cache unfriendly, generate a random number: " . rand(1,999);
?>
```

When you access this page, you will see the `X-Litespeed-Cache: hit` header, but with each refresh, you will see a *new* random number. This is proof that line 2 has not been cached.

You can also do this by using PHP to send the cache header.

Create `.htaccess` with the following code:

```
<IfModule LiteSpeed>
RewriteEngine on
CacheLookup on
</IfModule>
```

Create the main PHP file:

```
<?php
header('X-LiteSpeed-Cache-Control: public, max-age=120, esi=on');
echo 'line 1 - cache friendly';
echo '<esi:include src="/second.php" cache-control="no-cache"/>';
echo 'line 3 - cache friendly';
?>
```

## Crawling[¶](#crawling "Permanent link")

You might want to provide a crawler for your cache plugin. We have developed a pair of simple scripts that work with our PrestaShop and Magento plugins, which you can download [here](https://www.litespeedtech.com/packages/prestashop/cachecrawler.sh?_gl=1*1r351lm*_gcl_au*NTYzNTM2MTM0LjE3MzA5MjE5MDU.) and [here](https://www.litespeedtech.com/packages/litemage2.0/M2-crawler.sh?_gl=1*ur469k*_gcl_au*NTYzNTM2MTM0LjE3MzA5MjE5MDU.), respectively, if you want to see how they work.

The crawler user agents, `lscache_runner` and `lscache_walker`, both traverse a sitemap, but they work slightly differently from each other in how they process each URI:

- `lscache_runner` checks the cache. If the object is not found, it will retrieve the content from the backend, and cache it. If the object is found in cache, it is skipped, and the TTL is not changed.
- `lscache_walker` doesn't check the cache first. It *always* retrieves the content from the backend and caches it. This effectively refreshes any already-cached content and extends its TTL.

Both user agents cache content that would otherwise have been a `miss` for human visitors. `lscache_runner` is generally the preferred option. It is faster and uses fewer resources, since it doesn't have to access the backend for any content that is already cached. `lscache_walker` is a more thorough option, and a good choice if you want to extend your existing cache objects' TTLs. But it does use significantly more resources.

## Caching POST Responses[¶](#caching-post-responses "Permanent link")

Previously, only GET responses were cacheable, but LiteSpeed Web Server v6.0 and above supports caching of POST responses as well.

To take advantage of this feature, two things need to happen:

1. POST caching must be enabled at the server level: In the WebAdmin Console, navigate to **Cache Policy Configuration** and set **Enable POST Cache** to `Yes`.
2. In a control panel environment, the following must be added to the Apache configuration:

   ```
   <IfModule LiteSpeed>
   CachePost on
   </IfModule>
   ```

   Add it at the server level to enable POST caching for all virtual hosts. To apply to a single virtual host, add the directive at the vhost level.
3. The response header must include `X-LiteSpeed-Cache-Control`, which is used to indicate that the response is cacheable.

## Understanding Response Status Codes 200 and 304[¶](#understanding-response-status-codes-200-and-304 "Permanent link")

When content is requested, the response comes with a code of either `200` or `304`, if successful.

An HTTP response code of `200 OK` indicates that the request has succeeded, and the requested content is included in the response body.

`304 Not Modified` indicates that the document requested by the browser has not changed since the last request, and no content is being transmitted. This conditional fetching is a way of saving bandwidth by telling the browser "just use the copy you already have cached," whenever possible.

In fact, the LiteSpeed Cache engine uses a similar conditional fetch internally when retrieving the content (during the "LSWS checks the cache key for a cache object" step of the above scenarios).

The `cache-control` response header is applied to client-side browser cache, and is used to determine how often the browser should check for an updated copy of a document. The result that is returned can either be `304 Not Modified` (the content has not changed since the last time the browser requested it), or `200 OK` along with a copy of the requested document (the content has changed, and here is a new copy).

Here are a few examples to show how this works.

Public Cache Example

The page includes the following response header:

```
cache-control: max-age=300, public
```

This indicates that the browser will check with the server once every 300 seconds, to determine whether the document has changed. The server will respond with `304 Not Modified`, if it has not.

If the document *has* changed, the server will respond with `200 OK`, and will deliver the updated content.

No Cache Example

The page includes the following response header:

```
cache-control: no-cache
```

You might think this means the content is not cached locally, but that's not the case. All this means is that the browser will always check with the server to determine whether the document has changed. The server will respond with `304 Not Modified`, if it has not.

If the document *has* changed, the server will respond with `200 OK`, and will deliver the updated content.

No Store Example

The page includes the following response header:

```
cache-control: no-cache,no-store
```

This instructs the brower to never cache or store the HTML response. As such, there is nothing to check against and the server will *always* respond with `200 OK` and a copy of the document.

You can learn more about what the `cache-control` header does in [Mozilla's documentation](https://developer.mozilla.org/en-US/docs/Web/HTTP/Caching#Controlling_caching), and in [this document by Google's web.dev team](https://web.dev/http-cache/).
