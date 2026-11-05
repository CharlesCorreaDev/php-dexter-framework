# Usage Examples | LSCache Developers Guide | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/devguide/usage/

---

# Usage Examples[¶](#usage-examples "Permanent link")

Here are some examples for how to set rewrite rules and response headers for particular situations.

## Cache Everything for 2 Minutes[¶](#cache-everything-for-2-minutes "Permanent link")

Use something like the following to cache the output of all PHP-based pages in a particular URL path for two minutes (120 seconds):

```
<IfModule LiteSpeed>
  RewriteEngine On
  RewriteRule path/(.*\.php)?$ - [E=cache-control:max-age=120]
</IfModule>
```

Note

It is good practice to be specific, and cache only the pages that are supposed to be cached. This example would cache the content generated from `https://example.com/path/script.php` but not the content found at `https://example.com/path/page.html` (not PHP) or `https://example.com/script.php` (wrong URL path)

## Cache Pages With a Certain Signature[¶](#cache-pages-with-a-certain-signature "Permanent link")

These two examples demonstrate how LSCache rewrite rules fit into an application's existing rewrite rules.

### Public Cache Example[¶](#public-cache-example "Permanent link")

The second part of the ruleset is from the web application. Essentially everything goes through index.php (the web app framework) to process.

Note

`%{ORG_REQ_URI}` is a LiteSpeed-specific variable. In this example, it keeps the value of `%{REQUEST_URI}` prior to the rewrite to `index.php`.

```
# this part is for public cache.
<IfModule LiteSpeed>
RewriteEngine On
RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
RewriteCond %{HTTP_COOKIE} !cookiename   ## cookiename needs to be replaced by real cookie name  
RewriteCond %{ORG_REQ_URI} !^/administrator
RewriteRule .* - [E=Cache-Control:max-age=300]
</IfModule>

#application orgiginal rewite rules
RewriteEngine On
RewriteCond %{REQUEST_URI} !^/index\.php
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule (.*) index.php [L]
```

The first part of the ruleset indicates that LSWS only caches requests if:

- They are HEAD or GET type requests AND
- They don't contain `cookiename` in the `HTTP_COOKIE` AND
- `%{ORG_REQ_URI}` does not start with `/administrator/`

Also:

- The TTL of the cache is set to 300 seconds (5 minutes).

### Private Cache Example[¶](#private-cache-example "Permanent link")

```
# this part is for private cache, note that HTTP_COOKIE is for loginuser
<IfModule LiteSpeed>
RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
RewriteCond %{HTTP_COOKIE} loginuser
RewriteCond %{ORG_REQ_URI} !^/index\.php$
# there is no need to exclude admin area. it can be privately cached.
# RewriteCond %{ORG_REQ_URI} !^/administrator/
RewriteRule .* - [E=Cache-Control:private]
</IfModule>

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_URI} !^/index.php
RewriteCond %{REQUEST_URI} (/|\.php|\.html|\.htm|\.feed|\.pdf|\.raw|/[^.]*)$  [NC]
RewriteRule (.*) index.php [L]
```

This ruleset indicates that LSWS only privately caches requests if:

- They are HEAD or GET type requests AND
- They *do* contain `loginuser` in the HTTP\_COOKIE AND
- `%{ORG_REQ_URI}` is not `/index.php` AND
- `%{ORG_REQ_URI`} ends with `.php` or `.html` or `.htm` , etc.

Also:

- The TTL is set to whatever is the default in the private cache policy

## Cache Mobile View Separately[¶](#cache-mobile-view-separately "Permanent link")

If your web app produces a mobile view that has different HTML than the desktop view, you will want to set up a cache vary based on user agent. In this example, we set the [vary value](lscache__devguide__advanced.md#vary-environment-value) to cache the mobile view separately. We also exclude some folders from cache, and cache everything else for two minutes (120 seconds).

```
<IfModule LiteSpeed>
RewriteEngine On
CacheDisable public /
RewriteCond %{HTTP_USER_AGENT} "iPhone|iPod|BlackBerry|Palm|Mobile|Opera Mini|Fennec|Windows Phone"
RewriteRule .* - [E=Cache-Control:vary=ismobile]
RewriteCond %{REQUEST_METHOD} ^HEAD|PURGE|GET$
RewriteCond %{ORG_REQ_URI} !/news
RewriteCond %{ORG_REQ_URI} !/admincp
RewriteRule .* - [E=Cache-Control:max-age=120]
</IfModule>
```

## Set up Cache Varies for Desktop, Mobile, and Tablet[¶](#set-up-cache-varies-for-desktop-mobile-and-tablet "Permanent link")

You can use the user agent to create three cache varies. We'll call them Phone, Tablet, and Desktop

For these purposes, we'll assume user agents that include `Android` or `iPad` are tablets , `iPhone` or `Mobile` are phones, and everything else is a desktop. This is a simple solution but it should cover most cases. The rules can be further extended to match more specific cases, if you need them.

### PHP Code[¶](#php-code "Permanent link")

Save the following as `test.php` on your server:

```
if (stripos($_SERVER['HTTP_USER_AGENT'],"iPhone")!==false || stripos($_SERVER['HTTP_USER_AGENT'],"Mobile")!==false ) 
{
    echo 'This is Phone view'; 
}
elseif (stripos($_SERVER['HTTP_USER_AGENT'],"iPad")!==false or stripos($_SERVER['HTTP_USER_AGENT'],"Android") !==false) 
{
    echo 'This is Tablet view'; 
}
else 
{
    echo 'this is Desktop view'; 
}
```

### `.htaccess` code[¶](#htaccess-code "Permanent link")

Add these rules to `.htaccess`:

```
CacheLookup public on
RewriteRule .* - [E=cache-control:max-age=120]

RewriteCond %{HTTP_USER_AGENT} iPad|Android [NC]
RewriteRule .* - [E=Cache-Control:vary=istablet]

RewriteCond %{HTTP_USER_AGENT} iPhone|Mobile [NC]
RewriteRule .* - [E=Cache-Control:vary=isphone]
```

The first rule will cache every page for 120 seconds.

The second rule will check the user agent. If it contains the keyword `iPad` or `Android` it will set vary to `istablet`. If the user agent ALSO contains the keyword `Mobile` though, such as from an Android Mobile device, it will set vary to `isphone` instead of `istablet`. All other user agents are treated as desktop.

### Testing[¶](#testing "Permanent link")

Use curl to visit the `test.php` and simulate different user agents for testing. From the output, you will see that the correct versions of the page for each user agent are retrieved from cache.

Testing Tablet view with "Android":

```
curl https://example.com/test.php -i -H "User-Agent: Android"
```

```
HTTP/1.1 200 OK
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
Etag: "62-1566258748;;;"
X-Litespeed-Cache: hit
Content-Length: 19
Date: Mon, 19 Aug 2019 23:52:28 GMT
Server: LiteSpeed
Alt-Svc: quic=":443"; ma=2592000; v="39,43,46", h3-22=":443"; ma=2592000

This is Tablet view
```

Testing Phone view with "Android Mobile":

```
curl https://example.com/test.php -i -H "User-Agent: Android Mobile"
```

```
HTTP/1.1 200 OK
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
Etag: "63-1566258751;;;"
X-Litespeed-Cache: hit
Content-Length: 19
Date: Mon, 19 Aug 2019 23:52:31 GMT
Server: LiteSpeed
Alt-Svc: quic=":443"; ma=2592000; v="39,43,46", h3-22=":443"; ma=2592000

This is Phone view
```

Testing Desktop view with "Windows":

```
curl https://example.com/test.php -i -H "User-Agent: Windows"
```

```
HTTP/1.1 200 OK
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
Etag: "64-1566258765;;;"
X-Litespeed-Cache: hit
Content-Length: 20
Date: Mon, 19 Aug 2019 23:52:45 GMT
Server: LiteSpeed
Alt-Svc: quic=":443"; ma=2592000; v="39,43,46", h3-22=":443"; ma=2592000

This is Desktop view
```

## Avoid Logged-In Cookie Conflicts[¶](#avoid-logged-in-cookie-conflicts "Permanent link")

Login Vary Cookie conflicts can pop up when you have multiple web applications with [LSCache plugins](https://docs.litespeedtech.com/litespeed_wiki/cache#litespeed_cache_plugins_by_application) enabled on the same document root, with one app being served from a subdirectory of another (as in `www.example.com/` and `www.example.com/app2/`). This can happen with distinct web applications, or multiple installations of the same app (e.g. two copies of WordPress).

Of particular concern is the `_lscache_vary` cookie, which is the default used by every LSCache plugin, and indicates the logged-in status of a user. As such, it is in control of what version of a page (logged in or not logged in) is served.

As far as the browser is concerned, both apps are *the same website* because one app is actually a subdirectory of the other. When the browser visits app2, it will use the cookies for `www.example.com/`. Even though app2 is an entirely separate application, to the browser it looks simply like a part of app1 because it lives at `www.example.com/app2/`.

Here's how this situation presents itself: A user logs into app1, and the `_lscache_vary` cookie is set to indicate that they are logged in. This same user then visits app2 as a non-logged-in user and hits the backend. LSCache caches the non-logged-in request, but the logged-in `_lscache_vary` cookie is still set. This causes future users logged-in to app2 to get a "cache hit" on this page and be served the non-logged-in version of the page.

To avoid this situation, each application under the same root needs a uniquely-named cookie. Add the following to `.htaccess` after `RewriteBase` and before all rules using the `[L]`:

```
RewriteRule .? - [E=Cache-Vary:_my_custom_vary]
```

`_my_custom_vary` is the new login cookie name that should be used by your plugin.
