# Security Response Headers | Configuration | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/security-headers/

---

# Security Response Headers[¶](#security-response-headers "Permanent link")

Security response headers are used on the client and server side. They are directives that instruct the browser on how to guard against threats, secure connections, control device feature access, and manage information flow between sites.

They can add elevated protection against clickjacking, cookie hijacking, MIME-type attacks, and many more scenarios.

Here is an overview of the most commonly used ones:

1. `Content-Security-Policy`: This security header protects against cross-site scripting (XSS) attacks, clickjacking, and other code injection attacks.
2. `Strict-Transport-Security`: The HTTP `Strict-Transport-Security` (HSTS) header protects websites against protocol downgrade attacks and cookie hijacking.
3. `X-Content-Type-Options`: This header protects against attacks based on MIME-type mismatch.
4. `X-Frame-Options`: This header provides clickjacking protection by controlling whether or not content can be rendered in a frame or iframe.
5. `X-XSS-Protection`: This header helps to protect websites from XSS attacks by allowing webmasters to enable certain features of the browser's built-in XSS protection.
6. `Referrer-Policy`: This security header helps protect the privacy of users by controlling how much referrer information is included with requests.
7. `Feature-Policy`: This header provides a mechanism to allow and deny the use of various browser features and APIs, protecting from insecure or intrusive web page features.
8. `Access-Control-Allow-Origin` (CORS): This header protects from cross-origin resource sharing (CORS) attacks by specifying which websites are allowed to access the resources of your page.
9. Cookie `Secure` flag and `HttpOnly` flag: These cookie attributes provide protection against cross-site scripting (XSS) and session hijacking.

## Add Security Headers[¶](#add-security-headers "Permanent link")

### Add via WebAdmin Console[¶](#add-via-webadmin-console "Permanent link")

[![Choose Static Type Context](../images/security-headers01.png)](https://docs.litespeedtech.com/lsws/images/security-headers01.png) [![Context Settings](../images/security-headers02.png)](https://docs.litespeedtech.com/lsws/images/security-headers02.png)

Navigate to **Web Admin > Configurations > Your Virtual Hosts > Context**:

1. Click the **Add** button
2. Choose **Static** type
3. **URI** = `/` (You can change this if you want to)
4. **Location** = `$DOC_ROOT/` (You can change this if you want to)
5. **Accessible** = `Yes`
6. **Extra Headers** =

   ```
   Strict-Transport-Security: max-age=31536000; includeSubDomains
   Content-Security-Policy "upgrade-insecure-requests;connect-src *"
   Referrer-Policy strict-origin-when-cross-origin
   X-Frame-Options: SAMEORIGIN
   X-Content-Type-Options: nosniff
   X-XSS-Protection 1;mode=block
   Permissions-Policy: geolocation=(self "")
   ```
7. Click the **Save** button
8. Do a graceful restart

### Add to .htaccess[¶](#add-to-htaccess "Permanent link")

You can add security response headers to the `.htaccess` file in your web application's root directory, like so:

```
# Security Headers
<IfModule mod_headers.c>
Header set Content-Security-Policy "upgrade-insecure-requests"
Header set Strict-Transport-Security "max-age=31536000; includeSubDomains"
Header set X-Xss-Protection "1; mode=block"
Header set X-Frame-Options "SAMEORIGIN"
Header set X-Content-Type-Options "nosniff"
Header set Referrer-Policy "strict-origin-when-cross-origin"
Header set Permissions-Policy "geolocation=self"
</IfModule>
```

## Verify the Headers[¶](#verify-the-headers "Permanent link")

[![Verify Headers](../images/security-headers03.jpg)](https://docs.litespeedtech.com/lsws/images/security-headers03.jpg)

Check the headers for a page on your site, and verify that you see all of the headers you expect.

[![Probely](../images/security-headers04.png)](https://docs.litespeedtech.com/lsws/images/security-headers04.png)

You can also use any security header tool, such as [Probely’s Security Headers tool](https://securityheaders.com/) to see which headers are detected on your site.

## About CORS Headers[¶](#about-cors-headers "Permanent link")

The `Access-Control-Allow-Origin` header protects from cross-origin resource sharing (CORS) attacks by specifying which websites are allowed to access the resources of your page.

### Enable CORS[¶](#enable-cors "Permanent link")

#### From .htaccess[¶](#from-htaccess "Permanent link")

To enable CORS from `.htaccess` in your `Example` virtual host, navigate to **Web Admin > Configuration > Virtual Hosts > Example > General > HT Access**, and click **Edit**.

In **Allow Override**, enable `Limit`, `Auth`, `FileInfo`, `Indexes`, `Options`, and click the **Save** button. Perform a Graceful Restart.

Create `.htaccess` if it doesn't exist, and make it writable. Add this line to `.htaccess`, and save the file:

```
Header Set Access-Control-Allow-Origin "*"
```

The easiest (and most permissive) value to assign the CORS header is `*`, which indicates that any site may access your page’s resources. For a more conservative and more secure approach, you would allow access only through a particular trusted site.

Examples

Allow access to any site:

```
Access-Control-Allow-Origin: *
```

Only allow access to `trusted-example.com`:

```
Access-Control-Allow-Origin: https://trusted-example.com
```

#### From WebAdmin[¶](#from-webadmin "Permanent link")

[![](images/cors02.png)](https://docs.litespeedtech.com/lsws/security-headers/images/cors02.png) To enable CORS from the WebAdmin Console in your `Example` virtual host, navigate to **Web Admin > Configuration > Virtual Hosts > Example > Context**, and click **Add**.

Choose **Type** `Static`.

[![](images/cors03.png)](https://docs.litespeedtech.com/lsws/security-headers/images/cors03.png)

Set the following:

- **URI**: `/` (You can change this if you want to)
- **Location**: `$SERVER_ROOT/Example/html/` (You can change this if you want to)
- **Accessible**: `Yes`
- **Extra Headers**: `Access-Control-Allow-Origin *`

Click the **Save** button, and perform a Graceful Restart.

### Support More CORS Methods[¶](#support-more-cors-methods "Permanent link")

By default, CORS supports the following methods: `PUSH`, `GET` and `HEAD`. What if you want to support `OPTIONS` and `DELETE`, as well?

You can simply append to **Extra Headers**: `Access-Control-Allow-Methods GET, POST, OPTIONS, DELETE`.

Try verification again, and this time send the `DELETE HTTP` method. You should see a `200` response.

### Learn more about CORS[¶](#learn-more-about-cors "Permanent link")

For a more in-depth look at CORS headers and methods, please see [this Mozilla documentation](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS?ref=scotthelme.co.uk).

See also:

- [Access-Control-Allow-Origin (CORS)](https://scotthelme.co.uk/coop-and-coep/)
- [CORS-supporting APIs](https://enable-cors.org/resources.html)
- [CORS headers in htaccess](https://www.ipragmatech.com/enable-cors-using-htaccess/)

## Learn More About Security Headers[¶](#learn-more-about-security-headers "Permanent link")

See [this Mozilla documentation](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers) for more about HTTP Headers in general.

These articles from Scott Helme provide detailed information about all of the security headers we’ve mentioned here:

- [Content-Security-Policy](https://scotthelme.co.uk/content-security-policy-an-introduction/)
- [Strict-Transport-Security](https://scotthelme.co.uk/hsts-the-missing-link-in-tls/)
- [X-Content-Type-Options](https://scotthelme.co.uk/hardening-your-http-response-headers/#x-content-type-options)
- [X-Frame-Options](https://scotthelme.co.uk/hardening-your-http-response-headers/#x-frame-options)
- [X-XSS-Protection](https://scotthelme.co.uk/hardening-your-http-response-headers/#x-xss-protection)
- [Referrer-Policy](https://scotthelme.co.uk/a-new-security-header-referrer-policy/)
- [Feature-Policy](https://scotthelme.co.uk/a-new-security-header-feature-policy/)
- [Cookie Secure flag and HttpOnly flag](https://scotthelme.co.uk/tough-cookies/)
