# LSCache Tips | LiteSpeed Cache | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/tips/

---

# LSCache Tips[¶](#lscache-tips "Permanent link")

## Checking Page Load Speed[¶](#checking-page-load-speed "Permanent link")

There are many ways to run a website speed test and to do a full page performance check, including some online tools, but the easiest way is to use the Chrome or Firefox developer tools right there on your desktop.

### Enable Cache First[¶](#enable-cache-first "Permanent link")

Before any page load testing, be sure that you have [enabled caching at the server level](lscache__start.md#server-level-prerequisites), have enabled caching in [your plugin](lscache__index.md#available-plugins) or [rewrite rule solution](lscache__noplugin__installation.md#basic-rewrite-rules), and can [verify that caching is working](lscache__noplugin__installation.md#verify-your-site-is-being-cached).

### Check Page Load Time[¶](#check-page-load-time "Permanent link")

You can check your page load time through your browser's developer tools.

Visit your website using Chrome. Navigate to **Chrome menu > More tools > Developer tools > Network**, or simply use the shortcut **Ctrl+Shift+I** to bring it up. The test page may contain many requests, but usually the first entry is for the page itself, while the rest of the entries are CSS, JavaScript, images, and other requests made as part of the process of loading the page.

The initial page load time refers to the loading of the document itself, and doesn't include static files or remote requests. This is the place where LScache can make significant improvements.

The `DOMContentLoaded` event is fired when the document has been completely loaded and parsed, without waiting for stylesheets, images, or subframes to finish loading. Meanwhile, the `Load` event can be used to detect a fully-loaded page.

The test in the following example was run without LSCache. The domain's initial page loaded very slowly as 29.28s, and was fully loaded in 41.21s.

[![!](../images/tips01.png)](https://docs.litespeedtech.com/lscache/images/tips01.png)

After LSCache was enabled, the domain's initial page loaded very quickly: only 669ms! Full page load was 7.72s.

[![!](../images/tips02.png)](https://docs.litespeedtech.com/lscache/images/tips02.png)

### Can it Load Even Faster?[¶](#can-it-load-even-faster "Permanent link")

As shown in the above example, although the initial page load is only 669ms, the total `Load` is still 7.72s. Can LiteSpeed cache nudge it a little faster?

When you look at the page, you can see it contains 207 requests. Many of them are static files or remote site requests. With numbers like these, you may be using a very heavy theme on your CMS. LiteSpeed Cache can help you to reduce the load time of *dynamic* content, but it cannot reduce the number of requests. You may need to consider switching to a lightweight theme or reducing some of the unnecessary requests from your page design. These are out of the scope of LiteSpeed Cache.

Additionally, by design, LiteSpeed cache doesn't cache static files. You may want to consider a browser cache setup for static files. If you use a CDN, you can also enable a static file cache on the CDN.

If you are running a WordPress site, LiteSpeed Cache has some additional optimization features that can help to speed up your site further. [Learn more.](lscache__lscwp__pageopt.md)

## Checking for a Network Bottleneck[¶](#checking-for-a-network-bottleneck "Permanent link")

If you know that [LiteSpeed Cache is working](lscache__noplugin__installation.md#verify-your-site-is-being-cached), but it still seems that the server has not reached its maximum capacity, a network bottleneck might be to blame.

To understand how a network bottleneck may cause inferior performance, you can run an `ab` benchmark test inside of your server, and again outside of your server to compare the difference. When a CDN server is used, such as CloudFlare, you may also disable that for a test to see how LiteSpeed Cache can maximize your site's performance.

The following example comes from a real customer who is running a high traffic WordPress media website. LiteSpeed Cache has been enabled properly and verified to be working. The server load is very low, and the response time is faster than it would be without cache, but it's still relatively slow. Why is the server not as fast as expected?

The website is running through CloudFlare, so we will run three separate AB tests to identify the page load problem.

### 1. Disable CloudFlare and Run AB Inside Server[¶](#1-disable-cloudflare-and-run-ab-inside-server "Permanent link")

First, disable CloufFlare by overriding it in `/etc/hosts`.

```
192.0.2.0 testdomain.com
```

(Replace `192.0.2.0` with the actual IP address of your server.)

Use Curl to verify the header before testing. You can see `Server: LiteSpeed` and `X-LiteSpeed-Cache: hit`

```
[root@server home]$ curl -I https://testdomain.com/
```

```
HTTP/1.1 200 OK
Content-Type: text/html; charset=UTF-8
Link: <https://testdomain.com/wp-json/>; rel="https://api.w.org/"
Link: <https://wp.me/7AAok>; rel=shortlink
Etag: "783430-1545084789;;;"
X-LiteSpeed-Cache: hit
Date: Mon, 17 Dec 2018 22:21:38 GMT
Server: LiteSpeed
Vary: User-Agent
X-XSS-Protection: 1; mode=block
X-Content-Type-Options: nosniff
Alt-Svc: quic=":443"; ma=2592000; v="35,39,43,44"
Connection: Keep-Alive
```

Run an `ab` test with the following command inside the server:

```
[root@server home]$ ab -n 10000 -k -H "Accept-Encoding: gzip,deflate" -c 100 https://testdomain.com/
```

It returns:

```
Requests per second:    2883.60 [#/sec] (mean)
```

The 2883.6 requests per second number, reflects the actual performance the website gets with LiteSpeed Cache.

### 2. Enable CloudFlare and Run AB Inside Server[¶](#2-enable-cloudflare-and-run-ab-inside-server "Permanent link")

Remove the `/etc/hosts` override by commenting it out. This will allow CloudFlare to be used once again.

```
#192.0.2.0 testdomain.com
```

Use Curl to verify the header before testing. You can see `X-LiteSpeed-Cache: hit` and `Server: cloudflare`.

```
[root@server home]$ curl -I https://testdomain.com/
```

```
HTTP/1.1 200 OK
Date: Mon, 17 Dec 2018 22:24:06 GMT
Content-Type: text/html; charset=UTF-8
Connection: keep-alive
Set-Cookie: __cfduid=d8aaaf9ae0b813d1d386e38a872fae1651545085446; expires=Tue, 17-Dec-19 22:24:06 GMT; path=/; domain=.actu17.fr; HttpOnly
Link: <https://testdomain.com/wp-json/>; rel="https://api.w.org/"
Link: <https://wp.me/7AAok>; rel=shortlink
X-LiteSpeed-Cache: hit
Vary: User-Agent
X-XSS-Protection: 1; mode=block
X-Content-Type-Options: nosniff
Alt-Svc: quic=":443"; ma=2592000; v="35,39,43,44"
X-Turbo-Charged-By: LiteSpeed
Expect-CT: max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"
Server: cloudflare
CF-RAY: 48accc48e8d0a8a5-CDG
```

Run an `ab` test with the following command inside the server:

```
[root@server home]$ ab -n 10000 -k -H "Accept-Encoding: gzip,deflate" -c 100 https://testdomain.com/
```

It returns:

```
Requests per second:    756.89 [#/sec] (mean)
```

Only 756.89 requests per second. This means the network between CloudFare and the backend server has slowed down the page load speed already.

### 3. Enable CloudFlare and Run AB Outside Server[¶](#3-enable-cloudflare-and-run-ab-outside-server "Permanent link")

Keep CloudFlare enabled and run an `ab` test from a box outside of your server.

Use Curl to verify the header before testing. You can see `X-LiteSpeed-Cache: hit` and `Server: cloudflare`

```
[root@test10g ~]# curl -I https://testdomain.com/
```

```
HTTP/1.1 200 OK
Date: Mon, 17 Dec 2018 22:26:50 GMT
Content-Type: text/html; charset=UTF-8
Connection: keep-alive
Set-Cookie: __cfduid=df35561c1ee3b2e4b3d8f09d959ed782d1545085610; expires=Tue, 17-Dec-19 22:26:50 GMT; path=/; domain=.actu17.fr; HttpOnly
Link: <https://testdomain.com/wp-json/>; rel="https://api.w.org/"
Link: <https://wp.me/7AAok>; rel=shortlink
X-LiteSpeed-Cache: hit
Vary: User-Agent
X-XSS-Protection: 1; mode=block
X-Content-Type-Options: nosniff
Alt-Svc: quic=":443"; ma=2592000; v="35,39,43,44"
X-Turbo-Charged-By: LiteSpeed
Expect-CT: max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"
Server: cloudflare
CF-RAY: 48acd048aa8bc5de-EWR
```

Run an `ab` test with the following command outside the remote server, such as your local box:

```
[root@localtest ~]# ab -n 10000 -k -H "Accept-Encoding: gzip,deflate" -c 100 https://testdomain.com/
```

It returns:

```
Requests per second:    265.26 [#/sec] (mean)
```

### Conclusion[¶](#conclusion "Permanent link")

By comparing the above tests, you can see the speed (2883.60 requests/second) LiteSpeed Cache can bring to your server, but in the end the site is slow (265.26 requests/second). It looks like there are some significant delays over the network where your server is located. Troubleshooting network issues is out of LiteSpeed's support scope, but you will ultimately need to address it before you can utilize the max performance LiteSpeed and LiteSpeed Cache can bring to you.
