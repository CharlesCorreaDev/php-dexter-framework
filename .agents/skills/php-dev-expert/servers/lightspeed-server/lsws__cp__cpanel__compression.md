# Compression in LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/compression/

---

# Compression[¶](#compression "Permanent link")

LiteSpeed Web Server can save network bandwidth by sending gzip-or-brotli-compressed responses for both static and dynamically generated content. The level of compression and situations under which compression occurs can be configured in the gzip compression section of the WebAdmin console (**Configuration > Server > Tuning**). You first must make sure **Enable Compression** is set to `Yes`, then set compression rules for static and dynamic content separately.

Note: **Enable Compression** and **Enable GZIP Dynamic Compression** are enabled by default at installation.

## Compression Rules[¶](#compression-rules "Permanent link")

### Static Content[¶](#static-content "Permanent link")

When a request for a static file comes in (and compression is enabled), the web server first looks for a corresponding gzip-compressed version in the static gzip cache directory. The compressed file found in this directory will be used if it is newer and smaller than the original one. If the compressed file does not exist or is out of date, the web server can create/update the gzip-compressed file automatically if **Auto Update Static** is set to `Yes`.

Because compression is a server-intensive process, the web server will only compress files with a potentially high compression rate based on the following rules:

- The MIME type is set in Compressible Types (for example: `text*`,`application/x-javascript`,`application/javascript`,`application/xml`, `image/svg+xml`).
- The file size is between the **Min Static File Size** and the **Max Static File Size**.

Be careful not to set the **Max Static File Size** too large. The server cannot process other requests while it is compressing a static file. Compressing very large files will thus result in delayed service.

### Dynamic Content[¶](#dynamic-content "Permanent link")

The web server can perform run-time compression for dynamically generated content as well. To turn on compression for dynamic content, both **Enable Compression** and **Enable Dynamic Compression** must be set to `Yes`.

### Compression Levels[¶](#compression-levels "Permanent link")

Both static and dynamic file compression can be tuned to your server and network capabilities using **Compression Level (Static File)** and **Compression Level (Dynamic Content)**. Better compression (a higher number) will save bandwidth, but will use more memory and CPU cycles. Your specific CPU and bandwidth saving needs determine the ideal configuration for your system.

## Verification[¶](#verification "Permanent link")

After setting up compression rules as shown above, you can verify that it is working by opening the file URL in your browser in the format: `Server_IP:Port_num/path_to_file`. Enter your browser's Development/Inspector Tool and navigate to **Network > Headers**. You should see `Content-Encoding: gzip` as shown below:

[![!gzip/br compression](../images/sharedcompression01.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/sharedcompression01.jpg)

If the page is returned with no compression, (i.e. no `Content-Encoding` header), verify that you are using a pre-defined MIME type. Note that `text/xml` is *not* a pre-defined MIME type, so `text/*` won't match it.

### Adding a New Pre-defined MIME Type[¶](#adding-a-new-pre-defined-mime-type "Permanent link")

Navigate to **Web Admin Console > Server > General > General Settings > MIME Settings** and open `$SERVER_ROOT/conf/mime.properties`. Scan the file for your desired MIME type.

If your MIME type is not there, you can add it in one of two ways:

1. Navigate to **Web Admin Console > Server > Tuning > GZIP Compression > Edit > Append Compressible Types** and append the MIME type (e.g. `text/xml`) to the list manually. Save and then Graceful Restart. [![!gzip/br compression](../images/sharedcompression02.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/sharedcompression02.jpg)
2. Navigate to **Web Admin Console > Server > General > General Settings > MIME Settings**, click on `$SERVER_ROOT/conf/mime.properties` and add the MIME type entry under **Suffixes** and **MIME type** (e.g.`xml` and`text/xml`). Save and then Graceful restart.

[![!gzip/br compression mimetype](../images/sharedcompression03.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/sharedcompression03.png) [![!gzip/br compression mimetype](../images/sharedcompression04.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/sharedcompression04.png)

Note

`text/xml` is just an example. You can add any MIME type you wish: `text/css`, `text/js`, `text/x-js`, etc.

## Disabling at the Virtual Host Level[¶](#disabling-at-the-virtual-host-level "Permanent link")

Gzip compression can normally be enabled/disabled from the server level. However, sometimes you may have to control the gzip compression for a particular virtual host through `.htaccess` without affecting the global settings. There are two ways to turn off gzip dynamically:

1. a rewrite rule
2. `SetEnv`/`SetEnvIf`

The latter is a better choice, as it won't be affected by other rewrite rules.

### Rewrite Rule[¶](#rewrite-rule "Permanent link")

Place the following in `.htaccess`:

```
RewriteRule . - [E=no-gzip:1]
```

Be aware that other rewrite rules may affect it.

### SetEnv/SetEnvIf[¶](#setenvsetenvif "Permanent link")

Place the following in `.htaccess`:

```
SetEnv no-gzip 1
```
