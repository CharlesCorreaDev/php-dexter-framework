# AJAX Requests — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/general/ajax.html

---

# AJAX Requests[](#ajax-requests "Link to this heading")

The `IncomingRequest::isAJAX()` method uses the `X-Requested-With` header to define whether the request is XHR or normal. However, modern JavaScript APIs such as `fetch` no longer send this header by default, so `IncomingRequest::isAJAX()` becomes less reliable without additional configuration.

To work around this problem, manually define the request header so the server can identify the request as XHR.

Here are common ways to send the `X-Requested-With` header in the Fetch API and other JavaScript libraries.

## [Fetch API](#id1)[](#fetch-api "Link to this heading")

```
fetch(url, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "X-Requested-With": "XMLHttpRequest"
    }
});
```

## [Axios](#id2)[](#axios "Link to this heading")

Axios does not include the `X-Requested-With` header by default.
You can add it globally as follows:

```
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
```

If you prefer to avoid global defaults, create an Axios instance instead:

```
const api = axios.create({
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    }
});
```

### [Vue.js](#id3)[](#vue-js "Link to this heading")

Vue does not require a specific HTTP client. If your Vue app uses Axios, configure Axios once during application bootstrap or in a shared API module, and reuse that configuration throughout the app.

### [React](#id4)[](#react "Link to this heading")

React also does not provide a built-in HTTP client. If your React app uses Axios, reuse the shared Axios configuration above, or set the header for an individual request when needed:

```
axios.get('your url', {
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    }
})
```

## [jQuery](#id5)[](#jquery "Link to this heading")

For libraries like jQuery for example, it is not necessary to make explicit the sending of this header, because according to the [official documentation](https://api.jquery.com/jquery.ajax/) it is a standard header for all requests `$.ajax()`. But if you still want to force the shipment to not take risks, just do it as follows:

```
$.ajax({
    url: "your url",
    headers: {'X-Requested-With': 'XMLHttpRequest'}
});
```

## [htmx](#id6)[](#htmx "Link to this heading")

You can use [ajax-header](https://github.com/bigskysoftware/htmx-extensions/blob/main/src/ajax-header/README.md) extension.

```
<body hx-ext="ajax-header">
...
</body>
```

Or you can set the header manually with `hx-headers`:

```
<button
    hx-post="/your-url"
    hx-headers='{"X-Requested-With": "XMLHttpRequest"}'>
    Send Request
</button>
```
