# Configuration | LiteSpeed Cache | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/noplugin/settings/

---

# Configuration[¶](#configuration "Permanent link")

The preferred way for a site owner to control LiteSpeed's Cache Engine is through directives and rewrite rules in the `.htaccess` of the site's document root. First, we will go over the available directive and rewrite rule syntaxes, and then provide a series of examples. Taken together, these should give you the knowledge you will need to configure LScache for your site's unique needs.

## Directives[¶](#directives "Permanent link")

Directives must be placed between `<IfModule LiteSpeed>...</IfModule>` tags in the appropriate configuration files. The location of server-level and virtual-host-level configuration files vary by control panel. Site-level directives are placed in the `.htaccess` file of the site's document root.

Rewrite rules can disable or enable caching on their own without using directives, however you may find that using a combination of both rewrite rules and directives may better help you to meet complicated requirements.

`CacheEnable` and `CacheDisable` directives at the virtual host document root's `.htaccess` will override the server level cache policy.

Note

WHM/cPanel users, if you want to use `CacheEnable`, `CacheDisable`, etc, they must be added to Apache config files manually, since cPanel does not have an option to enable `mod_cache`.

Tip

Apache `mod_cache` directives `CacheIgnoreCacheControl` and `CacheMaxExpire` can also be used in Apache config files (`httpd.conf` or `.htaccess`) to fine-tune cache policy.

### CacheEngine[¶](#cacheengine "Permanent link")

The `CacheEngine` directive is used to turn the cache engine on or off on a global level. If you are on shared hosting, then this is something that your hosting provider has already set up at a server or virtual host level.

Unlike the others we will discuss, this directive is *not* used in `.htaccess`. Instead, it is placed in the server configuration or virtual host configuration files, and the locations of these vary by control panel.

`CacheEngine` can be set to `off` or `on` and can be used to also enable `esi` and cache `crawler` usage, like so:

```
<IfModule Litespeed>
CacheEngine on esi crawler
</IfModule>
```

The cache engine must be turned on at the server or virtual host level before a site can use any of the following directives or rewrite rules. For more details about the `CacheEngine` directive, please see [our Common Cache Setup directions](lscache__start.md#control-cache-functions-by-virtual-host).

### CacheEnable[¶](#cacheenable "Permanent link")

To enable public cache for your site, add the following lines to the `.htaccess` file under the document root of the website:

```
<IfModule LiteSpeed> 
CacheEnable public /
</IfModule>
```

The above code enables caching for all URLs of this virtual host. It is similar to setting **Enable Public Cache** to `Yes` in the WebAdmin configuration for the virtual host.

When using `/` in your directive, you are enabling public cache on everything located under the website root directory.

Example

If your site `https://www.example.com` was located in `/home/username/public_html`, everything found within that directory and any subdirectories within it would be cached. If you used `CacheEnable public /blog` instead, everything under `/home/username/public_html/blog`, accessed at `http://www.example.com/blog`, would be cached).

To enable private cache, add the following lines to `.htaccess`:

```
<IfModule LiteSpeed> 
CacheEnable private /
</IfModule>
```

The above code enables private caching for all URLs of this virtual host. It is similar to setting **Enable Private Cache** to `Yes` in the WebAdmin configuration for the virtual host.

### CacheDisable[¶](#cachedisable "Permanent link")

To disable public cache, add the following lines to the `.htaccess` file under the document root of the website:

```
<IfModule LiteSpeed> 
CacheDisable public /
</IfModule>
```

To disable private cache, add the following:

```
<IfModule LiteSpeed> 
CacheDisable private /
</IfModule>
```

Tip

Remember, using `/` disables caching for the whole site. To disable caching for a single URL, simply replace `/` with the desired path.

### CacheLookup[¶](#cachelookup "Permanent link")

`CacheLookup` instructs the application to look up the cache (or not). When `CacheEnable` or `CacheDisable` directives are used, `CacheLookup` is implied and does not need to be specified.

You see `CacheLookup` used often with LSCache plugins. The plugins take care of enabling or disabling the cache, and they do not use `CacheEnable`/`CacheDisable` directives. So, in those cases, `CacheLookup` is required to instruct the application to check the cache when filling a request.

```
<IfModule LiteSpeed> 
CacheLookup public on
</IfModule>
```

The above code instructs the application to check public cache for the requested URL.

## Rewrite Rules[¶](#rewrite-rules "Permanent link")

Instead of directives, you can use the `cache-control` environment variable within a set of rewrite rules that would look something like this:

```
<IfModule LiteSpeed> 
RewriteEngine On
RewriteCond  CONDITION
RewriteRule PATTERN - [E=cache-control:VALUE]
</IfModule>
```

You would, of course, replace `CONDITION` with some sort of filter (if desired), `PATTERN` with a regex expression that indicates the pages to which the rule will apply, and `VALUE` with the contents of the `cache-control` variable.

If there are multiple values, you can express them in two ways:

```
RewriteRule PATTERN - [E="cache-control:VALUE1,VALUE2"]
```

or

```
RewriteRule PATTERN - [E=cache-control:VALUE1,E=cache-control:VALUE2]
```

`cache-control` accepts the following values:

- `no-cache`
- `no-store`
- `max-age`
- `max-stale`
- `public`
- `private`
- `s-maxage`
- `no-vary`
- `esi`

Rewrite rules can be placed in `httpd.conf` or the in-directory `.htaccess` file.

The main difference between enabling cache through `E=cache-control` and doing so through the `CacheEnable` directive is that a rewrite rule can control the cache expired time (TTL) through the `max-age` value, while the `CacheEnable` directive cannot.

### Enabling Caching[¶](#enabling-caching "Permanent link")

To enable cache, you can use either rewrite rules alone, or you can combine rules with the `CacheEnable` directive to define more complicated requirements. The rules (whether used alone or in conjunction with directives) allow you to control what is to be cached and what is not.

Here is a simple example that uses rewrite rules alone to enable cache and specify that all URLs are to be cached for two minutes.

Example

```
<IfModule LiteSpeed>
RewriteEngine On
RewriteRule .* - [E=cache-control:max-age=120]
</IfModule>
```

Here is simple example that uses rewrite rules alone to enable cache and specify that all URLs are to be cached privately. There is no need to specify the max-age for private cache since it is for a specific browser and is controlled by session.

Example

```
<IfModule LiteSpeed>
RewriteEngine On
RewriteRule .* - [E=cache-control:private]
</IfModule>
```

Here is a more complicated example which also uses only rewrite rules to define cache behavior. In the first section of code, it first checks for `HEAD` or `GET` requests, checks that the value of a certain cookie is `yes`, checks for a particular query string, and verfies that the page name does not match a given set of strings. If the page meets all of those conditions, then, assuming it ends in `.php`, it will be cached for two minutes.

For pages that do not meet the above criteria, the second set of code is executed. The conditions are all the same *except* that the value of the cookie should not be `yes`. If the page meets all of these conditions, then, assuming it ends in `.php`, it will be cached in private cache for however long is specified in the virtual host caching policy.

Example

```
<IfModule LiteSpeed>
RewriteEngine On
RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
RewriteCond %{HTTP_COOKIE} page_contain_cachetoken=yes
RewriteCond %{QUERY_STRING} !s=[a-fA-F0-9]{32}
RewriteCond %{REQUEST_URI} !/(login|register|usercp|private|profile|cron|image)\.php$
RewriteRule (.*\.php)?$ - [E=Cache-Control:max-age=120]
</IfModule>

<IfModule LiteSpeed>
RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
RewriteCond %{HTTP_COOKIE} !page_contain_cachetoken=yes
RewriteCond %{QUERY_STRING} !s=[a-fA-F0-9]{32}
RewriteCond %{REQUEST_URI} !/(login|register|usercp|private|profile|cron|image)\.php$
RewriteRule (.*\.php)?$ - [L,E=Cache-Control:private]
</IfModule>
```

These rules can be placed in one of three locations:

- The `.htaccess` of the site's document root
- The virtual host section of the Apache config file
- **Configurations > Virtual Hosts > Rewrite** section of the LiteSpeed Web Admin Console for native configurations

Note

If you make changes to the Apache config file, you will need to restart LiteSpeed Web Server. Do this via the WebAdmin Console (**Actions > Graceful Restart**) or run `/path/to/lsws/bin/lswsctrl restart` or `service lsws restart` from the command line.

If your changes are made in `.htaccess`, there is no need to restart LSWS.

### Disabling Caching[¶](#disabling-caching "Permanent link")

Here is a simple example that uses rewrite rules alone to disable cache.

Example

```
<IfModule LiteSpeed>
RewriteEngine On
RewriteRule .* - [E=Cache-Control:no-cache]
</IfModule>
```

## Combining Directives and Rewrite Rules[¶](#combining-directives-and-rewrite-rules "Permanent link")

You can handle more complicated caching scenarios by combining directives and rewrite rules.

In this simple example, the `CacheDisable` directive turns off all caching for the site, but the rewrite rules, specify that everything should be cached for two minutes. In this particular case, the directive has no effect.

Example

```
<IfModule LiteSpeed>
CacheDisable public /
RewriteEngine On
RewriteRule .* - [L,E=cache-control:max-age=120]
</IfModule>
```

## Usage Examples[¶](#usage-examples "Permanent link")

Let's get into some examples that you can adapt for use in your own applications.

### Cache Everything for Two Minutes[¶](#cache-everything-for-two-minutes "Permanent link")

In this example, we are caching PHP files in the `cacheablefolder` directory. It's a good practice to only cache files that need to be cached, which is why we didn't just go with `.*`.

Example

```
<IfModule LiteSpeed>
  RewriteEngine On
  RewriteRule cacheablefolder/(.*\.php)?$ - [E=cache-control:max-age=120]
</IfModule>
```

### Cache Pages That Have a Certain Signature[¶](#cache-pages-that-have-a-certain-signature "Permanent link")

This example demonstrates how LSCache rewrite rules fit alongside an application's rewrite rules. The second part is from the application (in this example, Joomla!), where essentially everything goes through index.php (the Joomla! framework) to process.

Public cache example

```
# LiteSpeed rules for public cache
<IfModule LiteSpeed>
RewriteEngine On
RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
RewriteCond %{HTTP_COOKIE} !cookiename 
RewriteCond %{ORG_REQ_URI} !^/administrator
RewriteRule .* - [E=Cache-Control:max-age=300]
</IfModule>

# application's orgiginal rewite rules
RewriteEngine On
RewriteCond %{REQUEST_URI} !^/index\.php
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule (.*) index.php [L]
```

`%{ORG_REQ_URI}` is a LiteSpeed specific variable. In this case, it keeps the value of `%{REQUEST_URI}` prior to the application's rewrite to `index.php` in the second part.

The LiteSpeed part of the ruleset indicates that LSWS only caches requests if they meet all of the following criteria:

- They are `HEAD` or `GET` type requests
- They don't contain `cookiename` in the `HTTP_COOKIE`
- `%{ORG_REQ_URI}` does not start with `/administrator/`

If all conditions are met, the page is cached for 300 seconds (5 minutes).

Now let's add a set of rules for private cache.

Private cache example

```
# LiteSpeed rules for private cache
<IfModule LiteSpeed>
RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
RewriteCond %{HTTP_COOKIE} loginuser
RewriteCond %{ORG_REQ_URI} !^/index\.php$
RewriteRule .* - [E=Cache-Control:private]
</IfModule>

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_URI} !^/index.php
RewriteCond %{REQUEST_URI} (/|\.php|\.html|\.htm|\.feed|\.pdf|\.raw|/[^.]*)$  [NC]
RewriteRule (.*) index.php [L]
```

The ruleset indicates that LSWS only privately caches requests if they meet all of the following criteria:

- They are `HEAD` or `GET` type requests
- They contain `loginuser` in the `HTTP_COOKIE`
- `%{ORG_REQ_URI}` is not `/index.php`
- `%{ORG_REQ_URI}` ends with `.php` or `.html` or `.htm`, etc.

If all conditions are met, the page is stored in private cache.

### Enable Cache for Mobile View[¶](#enable-cache-for-mobile-view "Permanent link")

In this example, we use rewrite rules to set up a cache vary based on the `%{HTTP_USER_AGENT}` variable.

Example

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

We start by disabling public cache by default through the `CacheDisable public /` directive. Then we selectively re-enable it for requests that meet all of the criteria:

- They are `HEAD` or `GET` type requests
- `%{ORG_REQ_URI}` is not `/news` or `/admincp`

Additionally, if a mobile user agent is detected, then the `ismobile` vary value is set. The vary value is the key to storing and retrieving multiple cache copies of a single URL. In this example, we will have one public cache copy of the page for anyone who is on a mobile device, and another public cache copy for everyone else.

Important

Your rewrite rules must exactly match your application backend's mobile detection. If these do not match, your rewrite rules may think that a device is mobile while the backend does not and visa-versa. This can cause the desktop version of a page to be cached and flagged as the mobile version (or the other way around) which will then be wrongly served to all mobile viewers.

## Instructions for Specific Apps[¶](#instructions-for-specific-apps "Permanent link")

In addition to the general instructions above, we have suggested configurations for some popular web apps.

Tip

Remember the most accurate caching can be achieved through plugins. If [an LSCache plugin exists](lscache__index.md) for your web app, we strongly suggest that you use it!

### Joomla![¶](#joomla "Permanent link")

Note

There is a [Joomla! plugin](lscache__lscjoomla.md) for versions 3.0 and above. The instructions below apply only to earlier Joomla! versions.

Rewrite rules should be added to your `.htaccess` file, located in the document root of your website. Add the LiteSpeed rules right before the following line:

```
## Begin - Joomla! core SEF Section.
```

Example 1

```
<IfModule LiteSpeed>
  RewriteEngine On
  CacheDisable public /
  RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
  RewriteCond %{ORG_REQ_URI} !/administrator
  RewriteRule .* - [E=Cache-Control:max-age=120]
</IfModule>
```

In **Example 1**, we cache all non-admin URLs for two minutes.

Note that the `CacheDisable public /` directive is used to help protect against globally enabled caching, and is optional. Ideally, you should check the server's global cache settings to ensure that cache is not enabled globally. Do not use `CacheEnable public /` here as it will enable caching for all URLs belonging to this virtual host, including admin pages. It is better to disable all caching by default, and then selectively enable it for the relevant URLs.

Example 2

```
<IfModule LiteSpeed>
  RewriteEngine On
  CacheEnable public /
  RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
  RewriteCond %{ORG_REQ_URI} /administrator/
  RewriteRule .* - [E=Cache-Control:no-cache]
</IfModule>
```

**Example 2** takes the opposite approach of **Example 1** and enables caching across the board, leaving it to the rules to explicitly disable caching for the `/administrator` pages.

Note that no `max-age` can be specified with this method, and so the pages will be cached for the duration specified in the server or virtual host cache policy.

Example 3

```
<IfModule LiteSpeed>
 RewriteEngine On
 RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
 RewriteCond %{HTTP_HOST} ^domain.com [NC] [OR]
 RewriteCond %{HTTP_HOST} ^www.domain.com [NC]
 RewriteCond %{ORG_REQ_URI} !/administrator
 RewriteRule .* - [E=Cache-Control:max-age=120]
</IfModule>
```

We recommend using a different domain for your admin backend so that you can add, edit, or preview a website's content through the admin domain without worrying about these changes being cached and seen by visitors. For example, you could have `admin.domain.com` for admin users, and `domain.com` and `www.domain.com` for the general public.

**Example 3** shows you how to specify which domains should be cached. In this case, `domain.com` and `www.domain.com` are singled out for caching, while `admin.domain.com` is not. Note that there is no `CacheDisable` directive here. We have assumed that caching is already disabled at the server and virtual host levels as suggested.

### Drupal[¶](#drupal "Permanent link")

Note

There is a [Drupal plugin](lscache__lscdrupal.md) for version 8.x. The instructions below apply only to other Drupal versions.

Rewrite rules should be added to your `.htaccess` file, located in the document root of your website. Add the LiteSpeed rules right after the following line:

```
<IfModule mod_rewrite.c>
```

Example

```
<IfModule LiteSpeed>
  CacheDisable public /
  RewriteEngine On  
  RewriteCond %{REQUEST_METHOD} ^GET|HEAD|PURGE$
  RewriteCond %{HTTP_HOST} ^(www.)?domain.com [NC]
  RewriteCond %{REQUEST_URI} !admin|register|login [NC]
  RewriteCond %{HTTP_COOKIE} !SESS [NC]
  RewriteCond %{QUERY_STRING} !nocache
  RewriteRule .* - [E=Cache-Control:max-age=120]
</IfModule>
```

Note that the `CacheDisable public /` directive is used to help protect against globally enabled caching, and is optional. Ideally, you should check the server's global cache settings to ensure that cache is not enabled globally. Do not use `CacheEnable public /` here as it will enable caching for all URLs belonging to this virtual host, including admin pages. It is better to disable all caching by default, and then selectively enable it for the relevant URLs.

We recommend using a different domain for your admin backend so that you can add, edit, or preview a website's content through the admin domain without worrying about these changes being cached and seen by visitors. For example, you could have `admin.domain.com` for admin users, and `domain.com` and `www.domain.com` for the general public.

Tip

To get the non-cached version of a page, add the `?nocache` query string to a URL. For example, `https://www.domain.com/about?nocache` and `https://www.domain.com/about?some_other_query_string&nocache`

### Concrete5[¶](#concrete5 "Permanent link")

Caching a Concrete5 site can be tricky, because there is no admin directory. As such, when you cache the site for visitors, *you are also caching it for admin functions and development*. This is not ideal.

One solution is to define a subdomain that you can use when you want to do administrative tasks. Configure the subdomain to use the same document root as the main site's domain (i.e. `public_html`), and then exclude it from caching in `.htaccess`. This essentially gives you two different ways of accessing the exact same site. To view the cached content, you would access the site at `www.domain.com`, and to do admin work, you would access the uncached content at `admin.domain.com`. They point to the same location, except one is cached and one is not.

For more about this concept, please see [this blog post by Made Simple Media](https://www.madesimplemedia.co.uk/blog/run-litespeed-cache-with-concrete5).

Rewrite rules should be added to your `.htaccess` file, located in the document root of your website. You will need a set of rules to activate the cache for the main domain, followed by a set of rules that will exclude the admin subdomain.

Example

```
<IfModule LiteSpeed>
RewriteEngine On
RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
RewriteCond %{HTTP_HOST} ^domain.com [NC] [OR]
RewriteCond %{HTTP_HOST} ^www.domain.com [NC]
RewriteRule .* - [E=Cache-Control:max-age=120]

RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
RewriteCond %{HTTP_HOST} ^admin.domain.com$ [NC]
RewriteRule .* - [E=Cache-Control:no-cache]
</IfModule>
```

Tip

Because of the way you set up the main domain and admin domain, it is better for SEO if you disable Google and other robots from indexing the admin domain. Otherwise, your SEO will be penalized because of duplicate content.
