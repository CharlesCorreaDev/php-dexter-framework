# Configuration | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/configuration/

---

# Configure LiteSpeed Web Server[¶](#configure-litespeed-web-server "Permanent link")

## Apache-Style Directives[¶](#apache-style-directives "Permanent link")

These directives can be used within Apache configuration files, but they may be LiteSpeed-specific (i.e. not recognized by Apache), in which case they must be contained within `<IfModule litespeed>`/`</IfModule>` tags.

### AllowBlockedUrl[¶](#allowblockedurl "Permanent link")

By default, LiteSpeed prohibits access to some hidden files with extensions like `.hta`, `.git`, and `.svn`. This is a LiteSpeed security feature which does not exist in Apache. Apache may rely on an additional rewrite rule to block such files.

If you need to allow access to these file names for a single vhost (for example, you might want to proxy requests to OpenResty with a rewrite rule in the File Manager function), the `AllowBlockedUrl` directive can be placed into the Apache configuration for that vhost. `AllowBlockedUrl on` allows prohibited files to be accessed.

Example

Allow blocked URLs:

```
<IfModule litespeed>
AllowBlockedUrl on
</IfModule>
```

### CacheMaxStaleAge[¶](#cachemaxstaleage "Permanent link")

Added in LSWS v6.3.4, `CacheMaxStaleAge` allows you to specify the maximum stale cache age (in seconds) per virtual host. This directive may be used in the main Apache config, or in `.htaccess`.

Example

Set a stale cache age of 120 seconds

```
<IfModule LiteSpeed>
    CacheMaxStaleAge 120
</IfModule>
```

### DedicatePhpHandler[¶](#dedicatephphandler "Permanent link")

`DedicatePhpHandler` allows you to enable a dedicated PHP handler selectively for a specific virtual host. Add the following to the Apache virtual host configuration:

```
<IfModule LiteSpeed>
    DedicatePhpHandler on
</IfModule>
```

### DisableForwardedIpBan[¶](#disableforwardedipban "Permanent link")

If you use CDN services with real visitor IP enabled, the IP which is forwarded from the CDN may get blocked if the soft or hard limit is too low. One way to disable such blocking or per-client throttling is to use the `DisableForwardedIpBan` directive in the server-level Apache configuration, like so:

```
<IfModule LiteSpeed>
    DisableForwardedIpBan on
</IfModule>
```

### DisableHtaccessBlockbot[¶](#disablehtaccessblockbot "Permanent link")

You may wish to disable the use of `[E=blockbot:1]` at the `.htaccess` level for your shared hosting environments. This directive, added at the server level, will do that:

```
<IfModule Litespeed>
   DisableHtaccessBlockbot On
</IfModule>
```

With `DisableHtaccessBlockbot` enabled, any `blockbot` commands that appear in `.htaccess` will have the same effect as the `F` flag.

### DisablePhpOverride[¶](#disablephpoverride "Permanent link")

You may wish to disable `php_value` and `php_flag` overrides in .htaccess. This directive allows you to do so, like this:

```
<IfModule LiteSpeed>
    DisablePhpOverride htaccess
</IfModule>
```

For more information, please see [the **Disable PHP Override** section in our **cPanel Tuning** doc](lsws__cp__cpanel__tunings.md#disable-php-override).

### DynReqPerSec[¶](#dynreqpersec "Permanent link")

This directive allows you to set a request-per-second limit for dynamic requests. It may be used in Apache virtual host configuration.

Example

Set a limit of 40 dynamic requests per second

```
<IfModule LiteSpeed>
    DynReqPerSec 40
</IfModule>
```

### ExtAppUdsHash[¶](#extappudshash "Permanent link")

The `ExtAppUdsHash` directive lets you choose whether to use a hash or the domain name in an external application's domain socket address.

The following values are accepted: - `on`: use a hash - `off`: use the domain name

Example

Use the domain name in the address:

```
<IfModule LiteSpeed>
    ExtAppUdsHash off
</IfModule>
```

### ForceSecureCookie[¶](#forcesecurecookie "Permanent link")

LiteSpeed doesn't support Apache's header `edit` directive, and so the following Apache directive won't work on LiteSpeed:

```
Header always edit Set-Cookie (.*) "$1;HTTPOnly;Secure;SameSite=none"
```

The `ForceSecureCookie` directive may be used to enforce `secure`, `SameSite`, and `httponly` cookie attributes. It can be set in the Apache config file at the server or virtual-host level, or in the `.htaccess` of the document root directory.

`ForceSecureCookie` accepts the following values in any order:

- `off`
- `on` or `secure`
- `httponly`
- `same_site_lax` or `lax`
- `same_site_strict` or `strict`
- `same_site_none`

Tips

- You can combine `same_site_xxxx` values with `secure` and `httponly`.
- LiteSpeed Web Server automatically adds a `secure` flag when serving traffic over HTTPS, so it is not necessary to add it with a directive.

Examples

To enforce the `secure` attribute only:

```
<IfModule LiteSpeed>
ForceSecureCookie secure
</IfModule>
```

To enforce `secure; SameSite=none`:

```
<IfModule LiteSpeed>
ForceSecureCookie secure same_site_none
</IfModule>
```

To enforce `SameSite=strict` only:

```
<IfModule LiteSpeed>
ForceSecureCookie strict
</IfModule>
```

or

```
<IfModule LiteSpeed>
ForceSecureCookie same_site_strict
</IfModule>
```

### LogCompressArchive[¶](#logcompressarchive "Permanent link")

The `LogCompressArchive on|off` directive is to turn on or off the access log compression archive. This directive may only be set at the server level, and it cannot be used in Apache virtual host configurations.

### LogKeepDays[¶](#logkeepdays "Permanent link")

The `LogKeepDays <N>` directive controls how many days to keep the access log. This directive may only be set at the server level, and it cannot be used in Apache virtual host configurations.

### LogRotationSize[¶](#logrotationsize "Permanent link")

The `LogRotationSize <size>` directive controls how frequently the access log should be rotated. In other words, once the log reaches the specified size in bytes, the contents will be copied to a backup file and a new log will be started.

This directive may only be set at the server level, and it cannot be used in Apache virtual host configuration.

Tips

- `LogRotationSize` needs to be set prior to defining `CustomLog`. Once `LogRotationSize` is set, all subsequent `CustomLog` configurations will follow the specified size limit.
- You can add `K`, `M`, or `G` to the size, to signify kilo-, mega-, and gigabytes respectively. Use a value of `0` to disable the log rotation.

Examples

Disable log rotation:

```
<IfModule litespeed>
LogRotationSize 0
</IfModule>
```

Rotate logs after they reach 10MB:

```
<IfModule litespeed>
LogRotationSize 10M
</IfModule>
```

### MaxReqBodySize[¶](#maxreqbodysize "Permanent link")

Use `MaxReqBodySize` at the virtual-host level to specify the maximum size of an HTTP request body.

Example

```
<IfModule LiteSpeed>
MaxReqBodySize 1024M
</IfModule>
```

### MaxDynRespSize[¶](#maxdynrespsize "Permanent link")

Use `MaxDynRespSize` at the virtual-host level to specify the maximum body size of a dynamically generated response.

Example

```
<IfModule LiteSpeed>
MaxDynRespSize 1024M
</IfModule>
```

### Per-Client Bandwidth Throttling[¶](#per-client-bandwidth-throttling "Permanent link")

Note

Bandwidth throttling directives can only be placed in a virtual-host configuration file, not an `.htaccess` file.

#### BandWidth[¶](#bandwidth "Permanent link")

The `BandWidth` directive controls the amount of bandwidth allotted to specific users.

Syntax: `BandWidth [Origin] [Speed in bytes/s]`

It takes 2 parameters:

- `Origin` is the origin of the connections. It can be a single IP address, a set of IP addresses, a network mask, or `all`.
- `Speed` indicates the total speed available to the `Origin`. If `Speed` is `0`, there is no limit.

#### MinBandWidth[¶](#minbandwidth "Permanent link")

LSWS only supports one use of `MinBandWidth`: `MinBandWidth all -1`. When used in conjunction with the `BandWidth` directive (as above), this specifies the top speed for all clients.

Usage:

```
<IfModule LiteSpeed>
  BandWidth all [Speed in bytes/s]
  MinBandWidth all -1
</IfModule>
```

#### LargeFileLimit[¶](#largefilelimit "Permanent link")

The `LargeFileLimit` directive allows you to throttle the bandwidth that certain large files use.

Syntax: `LargeFileLimit [Type] [Minimum Size in kilobytes] [Speed in bytes/s]`

It takes three parameters:

- `Type` is the suffix of files to be throttled. `*` can be used to designate all files.
- `Minimum Size` tells the server the size of files to be throttled.
- `Speed` indicates the maximum speed at which these files can be served.

Example

Limit `.avi` files of 500KB or greater to 10KB/s:

```
<IfModule LiteSpeed>
  LargeFileLimit .avi 500 10240
</IfModule>
```

#### MaxConnPerClient[¶](#maxconnperclient "Permanent link")

The `MaxConnPerClient` directive allows you to configure the maximum concurrent connections from one IP.

Syntax: `MaxConnPerClient [limit_for_connections]`

It takes one parameter:

- `limit_for_connections` is the number of connections permitted per client

### SmartPush[¶](#smartpush "Permanent link")

You can disable the cookies used by HTTP/2 and QUIC for the SmartPush feature with this directive. Use the `no-cookie` parameter, like so:

Example

```
<IfModule LiteSpeed>
    SmartPush no-cookie
</IfModule>
```

As of LSWS v6.3.5, SmartPush cookies are disabled by default, so this directive should not be necessary. You may use `SmartPush cookie` to to turn the feature back on, but it's not recommended. Server Push support has been removed from most modern browsers since 2022.

### StaticReqPerSec[¶](#staticreqpersec "Permanent link")

This directive allows you to set a request-per-second limit for static requests. It may be used in Apache virtual host configuration.

Example

Set a limit of 50 static requests per second

```
<IfModule LiteSpeed>
    StaticReqPerSec 50
</IfModule>
```

### Trusted[¶](#trusted "Permanent link")

You can use `Trusted` to bypass a block or a reCAPTCHA check.

Examples

Bypass reCAPTCHA for IPv4 192.0.2.0 and 192.0.2.1

```
<IfModule LiteSpeed>
    Trusted 192.0.2.0, 192.0.2.1
</IfModule>
```

Bypass reCAPTCHA for IPv6 2001:0db8:85a3:0000:0000:8a2e:0370:7334

```
<IfModule LiteSpeed>
    Trusted [2001:0db8:85a3:0000:0000:8a2e:0370:7334]
</IfModule>
```

### UniqueId[¶](#uniqueid "Permanent link")

The `UniqueId on|off` directive is used to create a unique identifier for requests, similar to the Apache [mod\_unique\_id](https://httpd.apache.org/docs/2.4/mod/mod_unique_id.html) directive. `UniqueID` is disabled by default.

This directive may be set at the server level, the virtual-host level or in the document root's `.htaccess` file.

Example

Enable UniqueID:

```
<IfModule litespeed>
UniqueId on
</IfModule>
```

### VhostBandwidthLimit[¶](#vhostbandwidthlimit "Permanent link")

The `VhostBandwidthLimit` directive controls the amount of bandwidth allotted to a virtual host regardless of the number of concurrent visitors. It can only be set at the virtual-host level in the Apache configuration file or through Apache-style config in native LSWS configuration.

Syntax: `VhostBandwidthLimit [Speed in bytes/s]`

The parameter indicates the total speed available to the virtual host. If it is set less than `4097`, there is no limit.

Example

To limit a virtual host to use 1000KB bandwidth maximum. Add the following configuration through a virtual-host-level include file:

```
<IfModule LiteSpeed>
   VhostBandwidthLimit 1024000 
</IfModule>
```

## Environment Variables[¶](#environment-variables "Permanent link")

The following special environment variables may be used in rewrite rules to control LiteSpeed Web Server features:

### blockbot[¶](#blockbot "Permanent link")

Set the `blockbot` environment variable to `1` when you are under attack. This will drop the connection.

Examples

Drop the connection for any request from user-agent `BUbiNG`:

```
RewriteEngine On
RewriteCond %{HTTP_USER_AGENT} "BUbiNG"
RewriteRule .* - [E=blockbot:1]
```

Drop the connection for any request for `xmlrpc.php`:

```
RewriteRule ^/xmlrpc.php - [E=blockbot:1]
```

(Don't use this rule at the server level, or it will impact requests globally. Only use a rule like this for the specific virtual host that is under attack.)

### cache-ctrl/cache-control[¶](#cache-ctrlcache-control "Permanent link")

The `cache-control` or `cache-ctrl` environment variable allows you to modify the server's page cache policy, enable, or disable cache.

Examples

```
Rewriterule ^/special_cachable_url$ - [E=Cache-ctrl:max-ages=30]
```

```
Rewriterule ^/non-cacheable-url$ - [E=Cache-control:no-cache]
```

For more details on how to use `cache-control`, please see the [LSCache Without a Plugin documentation](https://docs.litespeedtech.com/lscache/noplugin/settings/#rewrite-rules).

### dontlog[¶](#dontlog "Permanent link")

When set to any value, `dontlog` prevents access logging.

Example

```
RewriteRule \.gif - [E=dontlog:1]
```

### FRONTEND\_CDN[¶](#frontend_cdn "Permanent link")

Use the `FRONTEND_CDN` environment variable to block direct access from all IP addresses, while allowing exceptions for traffic that is passed through one or more specified CDNs.

Traffic attempting to connect from an origin server IP address will be rejected with a 403 error.

Possible CDN values are QUIC.cloud (`QC`) and Cloudflare (`CF`).

Example

```
RewriteCond %{ENV:FRONTEND_CDN} !"QC|CF" [NC]
RewriteRule .* - [F,L]
```

If `FRONTEND_CDN` does not match `QC` or `CF` then forbid this request.

This method is useful for servers where only a small number of its virtual hosts need to be restricted to CDN access only.

Tip

For servers where you want to restrict *all* of the virtual hosts to CDN access, it's better to just use your server firewall to restrict access to ports 80 and 443.

### HTTP-Prio[¶](#http-prio "Permanent link")

Sets the HTTP priority ([RFC 9218](https://www.rfc-editor.org/rfc/rfc9218.html)) for HTTP2 and HTTP3 streams.

Value range:  `0` (highest) - `7` (lowest). An optional `i` suffix can be added to indicate `incremental` (meaning the HTTP response can be processed incrementally).

Examples

```
E=http-prio:1
```

```
E=HTTP-Prio:3i
```

### noabort[¶](#noabort "Permanent link")

This flag prevents the server from killing external application processes while they are still running.

Example

```
RewriteRule ^script_url$ - [E=noabort:1]
```

### noantiddos[¶](#noantiddos "Permanent link")

The `noantiddos` environment variable lets you disable anti-ddos for the current request. It can be used in `SetEnv` / `SetEnvIf` statements or rewrite rules. Introduced in LSWS v6.3.1 build 3.

Example

```
<IfModule LiteSpeed>
    SetEnv noantiddos
</IfModule>
```

### no-brotli[¶](#no-brotli "Permanent link")

Brotli is a compression algorithm which, much like gzip/deflate, reduces both file size and page load time. Brotli compression is enabled by default for secure static pages and [non-ESI dynamic pages](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:cache:common:gzip-brotli-automatic-conversion).

Brotli cannot be disabled server-wide, but it may be disabled on a per account or per domain basis through Apache configuration and `.htaccess` files.

Add the following snippet:

```
<IfModule LiteSpeed>
    SetEnv no-brotli
</IfModule>
```

A Graceful Restart is required if this snippet is added to an Apache configuration file, but it is not necessary when adding to `.htaccess`.

### noconntimeout[¶](#noconntimeout "Permanent link")

Use the `noconntimeout` variable to keep particular URLs from being killed by LiteSpeed Web Server when they've gone on for longer than the limit set in **WebAdmin Console > Tuning > Connection > Connection Timeout (secs)**.

Example

Exclude WP-Cron from the connection timeout limit:

```
<IfModule Litespeed>
    RewriteEngine On
    RewriteRule (wp-cron).php - [E=noconntimeout:1]
</IfModule>`
```

### no-gzip[¶](#no-gzip "Permanent link")

When set to any non-zero value, `no-gzip` instructs the server not to use GZIP compression for this request.

Example

```
RewriteRule \.css - [E=no-gzip:1]
```

`no-gzip:0` has no effect.

### nokeepalive[¶](#nokeepalive "Permanent link")

When set to any value, `nokeepalive` closes the client's connection after finishing this request.

Example

```
RewriteRule .* - [E=nokeepalive:1]
```

### no-lscache[¶](#no-lscache "Permanent link")

As of LSWS v6.3, the `no-lscache` environment variable lets you disable LSCache for the current request. It can be used in `SetEnv` / `SetEnvIf` statements or rewrite rules.

Basic Examples

With rewrite rules:

```
RewriteRule .* - [E=no-lscache:1]
```

In a config file:

```
<IfModule LiteSpeed>
    SetEnv no-lscache
</IfModule>
```

This can be useful if you want to disable cache for a particular set of requests, for example, all requests coming from a particular user-agent:

Example

For servers in Native mode, add the following in **WebAdmin Console > Server Conf > General > Apache Style Configurations** to disable caching for the `abc`, `123`, and `xyz` user-agents:

```
SetEnvIf User-Agent "abc|123|xyz" no-lscache
SetEnvIf User-Agent "abc|123|xyz" change_header
Header set Cache-Control "no-cache, no-store, must-revalidate, max-age=0" env=change_header
```

cPanel users would add the same snippet to `/etc/apache2/conf.d/includes/pre_main_global.conf`, making sure to surround the whole thing with `<IfModule LiteSpeed>...</IfModule>` tags.

### Proxy-Host[¶](#proxy-host "Permanent link")

`Proxy-Host` modifies the proxy request `Host` header value.

Example

A web site whose domain name is `www.example.com` sends a proxy request to the backend, which is a web server with the name `node1`. The backend web server requires the domain name to be `www.example.com`. This is the rewrite rule which enforces that:

```
RewriteRule ^(.*)$ http://node1/$1 [P,E=Proxy-Host:www.example.com]
```

### wait-req-full-body[¶](#wait-req-full-body "Permanent link")

When LiteSpeed Web Server processes a request, it usually passes the request to the backend (PHP) without waiting for the full request body to complete. Usually, this is not a problem, but it can be an issue if the script needs the whole request body to work properly.

The `wait-req-full-body` environment variable instructs the server to wait until the full request body completes before passing the request to the backend.

Example

```
RewriteRule ^(.*)$ - [E=wait-req-full-body:1]
```

## Flags[¶](#flags "Permanent link")

### UnsafeAllow3F[¶](#unsafeallow3f "Permanent link")

If a request path contains `%3F` (URL-encoded `?`) and a rewrite rule appends a literal `?` to build a query string, the `%3F` in the path could be decoded and interpreted as an additional query string delimiter, potentially allowing attackers to inject unintended query parameters.

As of LSWS v6.3.5, `%3F` requests are blocked by default.

If you have reason to allow such a request, use the `UnsafeAllow3F` flag to override the server's default behavior.

Example

```
RewriteRule ^example/(.+)$ /example/page.php?query=$1 [UnsafeAllow3F]
```

## Unsupported Apache Items[¶](#unsupported-apache-items "Permanent link")

There are some Apache modules and directives that are currently not supported by LiteSpeed. These items *may or may not* be supported in a future version of LSWS.

### Modules[¶](#modules "Permanent link")

- `mod_speling`
- Content negotiation via `mod_negotiation`. For simple setup, you can use a rewrite-based solution.
- `mpm_winnt`
- `mod_cloudflare`

### Directives[¶](#directives "Permanent link")

- `<Directory>...</Directory>` with regular expression.
- `SecAuditLogType` in `ModSecurity` specifies the type of audit log to use. LSWS does not support the `Concurrent` type. Only `Serial` is supported.
- Variables can be used in Apache functions, as shown in Apache's [official documentation](https://httpd.apache.org/docs/2.4/expr.html#vars), but LiteSpeed does not support functions such as `md5` or `base64`. For example, `%{md5:foo}` is not supported.
- `FallbackResource` is not supported by LSWS. Instead, you can use rewrite rules.
- `RewriteMap` is supported but `prg: External Rewriting Program` is not supported
- In `Header always edit Set-Cookie ^(.*)$ $1;HttpOnly;Secure`, `edit` is not supported. [Learn more](lsws__configuration.md#forcesecurecookie)
- `AllowOverride` is supported but `AllowOverrideList` is not.
- `DirectorySlash Off`
- `LogLevel`, as in `LogLevel alert rewrite:trace3` is not supported. Use `RewriteLogLevel` instead. [Learn more](lsws__cp__cpanel__rewrite-logs.md#using-apache-configuration)
- `TraceEnable` is not supported. Trace is enabled by default. To turn it off, use a rewrite rule in the domain's `.htaccess`. [Learn more](lsws__security.md#disable-http-methods)

### Other Unsupported Features[¶](#other-unsupported-features "Permanent link")

- RTMP proxy
