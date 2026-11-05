# Show Visitor IP in Logs | LiteSpeed Documentation | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/visitorip/

---

# Show visitor IPs[¶](#show-visitor-ips "Permanent link")

When using a CDN or other reverse proxy in front of your LiteSpeed Web Server, you may see a proxy IP instead of the real IP addresses of visitors. With the changes described below, you can configure LSWS to show the real visitor IP in your access logs.

This is a two-step process. Be sure to complete both steps.

## Use trusted client IPs[¶](#use-trusted-client-ips "Permanent link")

In the WebAdmin Console, navigate to **Server Configuration > General Settings**. Set **Use Client IP in Header** to `Trusted IP Only`.

Warning

It is not recommended to set **Use Client IP in Header** to `Yes`, because it allows clients to spoof IPs with the `X-Forwarded-For` header.

## Add proxy IPs to trusted list[¶](#add-proxy-ips-to-trusted-list "Permanent link")

This step is not necessary for QUIC.cloud or Cloudflare IPs. LiteSpeed Web Server automatically allowlists these IP addresses and marks them as trusted.

You only need to continue with the following steps if you are using some CDN or reverse proxy other than QUIC.cloud or Cloudflare.

Add the list of proxy IP subnets to **Access Control > Allowed List** in a comma-separated list, appending a `T` (for "Trusted") to the end of each IP, like so:

```
ALL, 192.0.2.0/24T, 192.0.2.1/24T, 192.0.2.2/24T
```

Be sure to replace our example IP addresses with the correct IP subnets for your proxy.

Tip

If you have a layer of proxy set up in front of LiteSpeed Web Server on the same server box (e.g. Cloudflare Railgun, nginx, or Varnish), you will also need to add that server IP to the trusted list.

Once enabled, your access logs will show the correct IP addresses and even PHP's `$_SERVER['REMOTE_ADDR']` variable will contain your visitors' real IP addresses instead of a proxy IP address. This will resolve most problems that might occur when enabling reverse proxies on PHP-enabled websites (like WordPress or vBulletin installations).

Note

Only the access log shows real visitor IPs. The error log still shows the IPs of proxy nodes. This may change in a future release.

Perform a **Graceful Restart** to make your changes take effect.
