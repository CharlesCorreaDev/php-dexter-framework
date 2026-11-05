# Crawler Issues | Troubleshooting | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/ts-crawler/

---

# Troubleshooting Crawler Issues[¶](#troubleshooting-crawler-issues "Permanent link")

## Crawler Can't Load Sitemap[¶](#crawler-cant-load-sitemap "Permanent link")

Does your sitemap require a login? If you are using a third party plugin to protect your site's pages behind a login screen, please make the sure there is an exception for the sitemap.

## All Pages Added to blocklist[¶](#all-pages-added-to-blocklist "Permanent link")

When you run the crawler, if all of your pages end up on the blocklist, this is usually an indication of a configuration problem. Is **LiteSpeed Cache > General > Server IP** set correctly? If the IP of your server is wrong, the crawler won't be able to find the pages properly, and will add them to the blocklist.

## Too Many Pages Added to Blocklist[¶](#too-many-pages-added-to-blocklist "Permanent link")

What if many (but not all) pages are being added to the blocklist after the first crawling? When you check manually (through the browser or through curl) you can see the `x-litespeed-cache` header and `200 OK` status code. So, why are the URIs ending up in the blocklist?

By default , LSCWP's built-in crawler will add a URI to the blocklist if the following conditions are met:

1. The page is not cacheable by design or by default. In other words, any pages that send the response header `x-litespeed-cache-control: no-cache`
2. The page doesn't respond with any of the following headers:
   - `HTTP/1.1 200 OK`
   - `HTTP/1.1 201 Created`
   - `HTTP/2 200`
   - `HTTP/2 201`

Let's look at the second case, in particular.

Tip

The steps below explain how to diagnose a timeout problem. If you wanted to, you could skip all of this and simply increase the timeout to see if that makes a difference. Navigate to **LiteSpeed Cache > Crawler > General Settings** and set **Timeout** to something higher than it is. The default is `30` seconds.

### Missing Response Header[¶](#missing-response-header "Permanent link")

You can confirm that you are dealing with a missing response header by checking the debug log. You should see that the response header was never logged.

To figure out why, open the following file: `litespeed-cache/lib/litespeed/litespeed-crawler.class.php`

Add this code at line 273, to allow LiteSpeed to log more information:

```
LiteSpeed_Cache_Log::debug( 'crawler logs headers', $headers) ;
```

Now, when the crawler processes a URI, the `$headers` will be written to the debug log.

Run the crawler manually, and run the following command:

```
grep headers /path/to/wordpress/wp-content/debug.log
```

You should see something like this:

```
07/10/19 21:53:28.446 [123.123.123.123:36233 1 nsy] crawler logs headers 'HTTP/1.1 200 OK
07/10/19 21:53:28.447 [123.123.123.123:36233 1 nsy) crawler logs headers ---
07/10/19 21:53:28.448 [123.123.123.123:36233 1 nsy] crawler logs headers 'HTTP/1.1 200 OK 
07/10/19 21:53:38.513 [123.123.123.123:36233 1 nsy] crawler logs headers 'HTTP/1.1 200 OK
```

In this example, you can see that most of the logs show the header is `HTTP/1.1 200 OK` but one of them is empty. It's the empty one that is being added to the blocklist.

To further complicate matters, the page looks fine when you curl it:

```
[root@test ~]# curl -I -XGET https://example.com/product-name-1
HTTP/1.1 200 OK
Date: Thu, 11 Jul 2019 20:57:54 GMT
Content-Type: text/html; charset=UTF-8
Transfer-Encoding: chunked
Connection: keep-alive
Set-Cookie: __cfduid=some-string-here; expires=Fri, 10-Jul-20 20:57:43 GMT; path=/; domain=.example.com; HttpOnly
Cf-Railgun: direct (starting new WAN connection)
Link: <https://example.com/wp-json/>; rel="https://api.w.org/"
Link: </min/186a9.css>; rel=preload; as=style,</min/f7e97.css>; rel=preload; as=style,</wp-content/plugins/plugin/jquery.min.js>; rel=preload; as=script,</min/7f44e.js>; rel=preload; as=script,</min/a8512.js>; rel=preload; as=script,</wp-content/plugins/litespeed-cache/js/webfontloader.min.js>; rel=preload; as=script
Set-Cookie: wp_woocommerce_session_string=value; expires=Sat, 13-Jul-2019 20:57:43 GMT; Max-Age=172799; path=/; secure; HttpOnly
Set-Cookie: wp_woocommerce_session_string=value; expires=Sat, 13-Jul-2019 20:57:43 GMT; Max-Age=172799; path=/; secure; HttpOnly
Vary: Accept-Encoding
X-Litespeed-Cache: miss
X-Litespeed-Cache-Control: public,max-age=604800
X-Litespeed-Tag: 98f_WC_T.156,98f_WC_T.494,98f_WC_T.48,98f_product_cat,98f_URL.e3a528ab8c54fd1cf6bf060091288580,98f_T.156,98f_
X-Powered-By: PHP/7.3.6
Expect-CT: max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"
Server: cloudflare
CF-RAY: 5f5db4fd1c234c56-AMS
```

This URI returns `200`, and `x-litespeed-cache-control: public`, so it is unclear why the header is empty when crawling.

To figure it out, first you need to find the exact options the PHP curl used, and then apply those options to your own curl command. Add more code to the debug log, instructing it to grab the curl options the crawler used.

Edit `litespeed-cache/lib/litespeed/litespeed-crawler.class.php`, and add the following at line 627, directly before `return $options ;`, like so:

```
$options[ CURLOPT_COOKIE ] = implode( '; ', $cookies ) ;

LiteSpeed_Cache_Log::debug( 'crawler logs headers2', json_encode( $options ) ) ;
return $options ;
```

Now, manually crawl it again, and you will see something like the following:

```
07/11/19 14:20:15.374 [123.123.123.123:37386 1 ZWh] crawler logs headers2 --- '{
"19913":true,
"42":true,
"10036":"GET",
"52":false,
"10102":"gzip",
"78":10,
"13":10,
"81":0,
"64":false,
"44":false,
"10023":["Cache-Control: max-age=0","Host: example.com"],
"84":2,
"10018":"lscache_runner",
"10016":"http://example.com/wp-cron.php?doing_wp_cron=1234567890.12345678910111213141516","10022":"litespeed_hash=qwert"
}'
```

The numbers you see are PHP curlset reference code. An internet search reveals that the `78` and `13` are particularly interesting. They represent `curl connection timeout` and `curl timeout`.

Apply these options to your curl command, like so:

```
curl -I -XGET --max-time 10 https://example.com/product-name-1
```

The output looks like this:

```
curl: (28) Operation timed out after 10001 milliseconds with 0 out of -1 bytes received
```

This confirms that a timeout is the root cause of the problem. Without cache, the page takes more than ten seconds to load.

Try one more test to confirm it, and format the output in a more readable way:

```
curl -w 'Establish Connection: %{time_connect}snTTFB: %{time_starttransfer}snTotal: %{time_total}sn' -XGET -A "lscache_runner" https://example.com/product-name-1/
```

```
Establish Connection: 0.006s
TTFB: 16.455s
Total: 16.462s
```

This confirms it. The page without cache takes more than 16 seconds to load, which results in a curl timeout. That is the reason why the debug log shows an empty header, the `200` status is never received by the crawler, and the URL is blocklisted.

### Solution[¶](#solution "Permanent link")

Increase the timeout.

Navigate to **LiteSpeed Cache > Crawler > General Settings** and set the timeout to something greater than `10` seconds (the LSCWP v3.0 default is `30`).

Tip

It's possible that a timeout is *not* the reason why the crawler is failing to get a successful response header. The answer can still probably be found in the detailed curl options output. A little bit of research may be required.

## Disable the Blocklist[¶](#disable-the-blocklist "Permanent link")

If you're having an issue with your blocklist, and you don't think you need a blocklist anyway, you can disable it.

Add the following line to your `wp-config.php` file, on the first line following the one with the opening PHP tag, `<?php` :

```
define('LITESPEED_CRAWLER_DISABLE_BLOCKLIST', true);
```

If you have anything currently in your blocklist, empty it.

Once these two steps are complete, blocklist functionality will be disabled.
