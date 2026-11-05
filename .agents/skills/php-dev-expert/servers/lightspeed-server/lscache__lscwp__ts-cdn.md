# CDN Support Issues | Troubleshooting | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/ts-cdn/

---

# Troubleshooting CDN Issues[¶](#troubleshooting-cdn-issues "Permanent link")

You can narrow down CDN issues through the following steps:

- Visit the CDN URL and verify that it is accessible
- Check your [CDN settings](lscache__lscwp__cdn.md)
- Did you enable the CDN?
- Did you remember to start the CDN URL with `https://` and end it with `/`?
- Does the Origin URL start with `//` and end with `/`?
- View Page Source, and verify that links are indeed pointing to the CDN URL.

You can verify that the CDN itself works by manually replacing the domain in the original URL with the CDN domain for any static file. If it loads correctly, then the CDN works. If it does not load, you may have a problem on the CDN side.

Example

If the original URL of an image is `https://www.domain.com/wp-content/uploads/2020/12/12/test.jpg` and the CDN URL is `https://cdn.domain.com`, then try visiting `https://cdn.domain.com/wp-content/uploads/2020/12/12/test.jpg`.

## Missing CORS Header[¶](#missing-cors-header "Permanent link")

It's possible that after you enable the **CDN > CDN Settings > Use CDN Mapping** setting, you may see a `Missing CORS header` error message in the browser's developer tools console. Here's why:

When you enable the **Use CDN Mapping** setting, LSCWP replaces the URLs for static content (images, CSS files, and JavaScript files) on your website with the specified CDN URL. If the required CORS headers are not set for these files, the browser will block the loading of the CDN URLs and a `Missing CORS header` error will be logged in the browser developer tools console.

This error typically occurs when a website tries to access resources from a different domain than the one it is served from. This is known as a Cross-Origin Resource Sharing (CORS) request. Browsers use headers like these to enforce CORS policies to prevent security vulnerabilities:

```
Access-Control-Allow-Origin
Access-Control-Allow-Methods
```

If you are seeing the error after enabling CDN mapping, then the CDN server responding to the request either does not send the necessary CORS headers, or sends them incorrectly. Furthermore, the server's CORS configuration might not allow the request method (e.g., `GET`, `PUT`, `POST`, `DELETE`) or the headers used.

To resolve this issue, you need to configure the correct CORS settings at your CDN provider, or disable the **Use CDN Mapping** setting in LSCWP.

## Bypass CDN in AJAX[¶](#bypass-cdn-in-ajax "Permanent link")

If you have a conflict, and you need to bypass CDN functions in AJAX, you can either add some code to your theme's `functions.php`, or you can call the appropriate filter when using AJAX.

### In the Theme's Functions[¶](#in-the-themes-functions "Permanent link")

Add the following to your theme's `functions.php` file:

`defined( 'DOING_AJAX' ) && add_filter( 'litespeed_can_cdn', '__return_false' );`

### Call the Filter[¶](#call-the-filter "Permanent link")

When using AJAX, you can call the above filter, and return false.
