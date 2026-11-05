# Rewrite Rule Proxy with LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/rewrite-proxy/

---

# LiteSpeed Web Server as Proxy[¶](#litespeed-web-server-as-proxy "Permanent link")

The purpose of a Proxy is to expand on functionality and add an extra layer of security.

You can create a web server proxy with LSWS in two steps:

1. Create an external app, unless the proxy is on the same server. If the proxy is on the same server, you can skip this step.
2. Use a context, or use either the `ProxyPass` directive or rewrite rules with the `[P]` proxy flag in `.htaccess`

When configured correctly, LiteSpeed Web Server will act as a proxy and handle client requests meant for a backend server, like so:

1. The client sends a request to LiteSpeed Web Server.
2. LSWS forwards that request to the backend server.
3. The backend server sends a response back to LSWS.
4. LSWS responds back to the client, as if there was no backend server involved.

## Create an External App[¶](#create-an-external-app "Permanent link")

If the proxy is on a different server, you need an external app.

Log in to the LSWS WebAdmin Console and navigate to **Configuration > Server > External App** tab and click **Add**. The external app can also be added at the virtual host level, but adding at server level is recommended.

[![!External App Add](../images/rewrite-proxy01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/rewrite-proxy01.png) Set **Type** to `Web Server` and click **Next**.

[![!External App Settings](../images/rewrite-proxy02.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/rewrite-proxy02.png)

Set the following, and click **Save**:

- **Name** - Any unique external app name. It should not start with "http://". For example, `Local_proxy`.
- **Address** - The IP:PORT or UDS socket of the backend server. It cannot be a domain name. For example, the frontend is on port `443`, and the backend is on `192.0.2.0:80`, so you would enter the backend `192.0.2.0:80` here, replacing `192.0.2.0` with the actual IP address. Please remember do not add "http://" or "https://" here.
- **Max Connections** - The maximum number of concurrent connections to this Web Server at any time.
- **Initial Request Timeout (secs)** - The maximum time in seconds the server will wait for a response.
- **Retry Timeout (secs)** - The period of time that the server waits before retrying a request.

Perform a **Graceful Restart** to have the changes take effect.

## Use a Context or Rewrite Rules[¶](#use-a-context-or-rewrite-rules "Permanent link")

### Use a Context[¶](#use-a-context "Permanent link")

You can use this method if you've set up your external app at the virtual-host level. After you have done so, navigate to the **Context** tab and click **Add**.

Set **Type** to `Proxy` and click **Next**.

Set the following, and click **Save**:

- **URI**: How users will access the web server. For example, `/br/`. If a value other than `/` is used, be sure that the directory exists and is accessible on the backend web server.
- **Web Server**: Select the server that was created in the previous step.

Perform a **Graceful Restart** to have the changes take effect.

The URL for vhost/context (for example, `example.com/br/`) should now act as a proxy from the external app web server.

### Use Rewrite Rules[¶](#use-rewrite-rules "Permanent link")

You can either use the `ProxyPass` directive, or the `[P]` flag in your `.htaccess` rewrite rules. Here are some examples using the `Local_proxy` external app created earlier, and the `www.example.com` virtual host:

Example

Proxy to a site on the backend with the same domain name using the `[P]` flag:

```
RewriteRule (.*) http://Local_proxy/$1 [P]
```

Example

Proxy to a site on the backend with a different domain name using the `[P]` flag:

```
RewriteRule ^(.*)$ http://Local_proxy/$1 [P,E=Proxy-Host:www.example.com]
```

The URL for the vhost should now act as a proxy for the external app web server.

Example

Proxy to a site on the same server, no external app required:

```
RewriteRule ^(.*)$ https://127.0.0.1:5000/$1 [P,L]
```

Use `127.0.0.1:<port>` if you don't want to create an external app. The rewrite rule proxy target will be created automatically. If you use a domain name without creating an external app–even if the domain is hosted on the same server–it will result in a `500` status code.

Example

Create a cPanel webmail-like proxy. In this example, cPanel's `www.example.com/webmail` proxy loads one installation at `http://127.0.0.1/rainloop/`:

```
ProxyPass "/webmail/" "http://127.0.0.1/rainloop/"
```

or

```
RewriteRule /webmail/(.*) http://127.0.0.1/rainloop/$1 [P]
```

## Testing[¶](#testing "Permanent link")

1. Check the backend: Visit `http://www.example.com` via the `curl` command to make sure the backend is running ok.
2. Check the frontend: The example front end is on port 443. Visit `https://www.example.com` and it should proxy/return the backend correctly.

## Custom Request Headers[¶](#custom-request-headers "Permanent link")

If you've come from the nginx world, you may be used to using `proxy_set_header`. With LiteSpeed, if you need to specify custom request headers to be added to the forwarded request, you can use the `RequestHeader` directive. Refer to [Apache's RequestHeader documentation](https://httpd.apache.org/docs/current/mod/mod_headers.html#requestheader) for details.

## Troubleshooting[¶](#troubleshooting "Permanent link")

If you see an error like this:

```
[REWRITE] Proxy target is not defined on external application list, please add a 'web server' with name 'https://Local_proxy'
```

It means the proxy `Local_proxy` was not defined in an external application. You need to create a web server proxy on the external application named `Local_proxy` (without `http://` or `https://`).
