# 400 Error with LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/400-error/

---

# Understanding 400 error[¶](#understanding-400-error "Permanent link")

The HyperText Transfer Protocol (HTTP) `400 Bad Request` response status code indicates that the server cannot or will not process the request due to something that is perceived to be a client error. That can be malformed request syntax, invalid request message framing, or deceptive request routing, for example. The client should not repeat this request without modification.

Since the 400 Bad Request Error is a client error response code, it’s best to start by troubleshooting any potential client-side issues that could be causing this error.

For example,

```
2017-12-09 21:26:14.768 [INFO] [199.38.148.127:7822-6] Status 400: Unexpected request body 1306 bytes for request: /!
```

The request is a GET request but with request body, thus the web server returns a 400 status code. It is a protocol violation.

Another example:

```
2018-04-16 14:27:24.707114 NOTICE [162.158.255.25:20689] Status 400: Http request header is too big, abandon!
2018-04-16 14:27:30.324454 NOTICE [108.162.237.139:25277] Status 400: Http request header is too big, abandon!
```

As the error indicates, the http request header is too big. You can try to change **Max Request Header Size** to the maximum allowed size `16380`.
