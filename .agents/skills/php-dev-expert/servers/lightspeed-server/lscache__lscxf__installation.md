# Installation and Configuration| LiteSpeed Cache for XenForo 2 | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscxf/installation/

---

# Installation and Configuration[¶](#installation-and-configuration "Permanent link")

Before installing and activating the LSCache plugin, deactivate all other full-page cache plugins.

Tip

You can still use other types of cache (like object cache, or browser cache), but only one full-page cache should be used at a time.

## Add-on Installation[¶](#add-on-installation "Permanent link")

Note

Please see the [Overview](lscache__lscxf.md#server-level-prerequisites) for the server-level requirements before attempting to install this add-on.

1. Log into [the XenForo community](https://xenforo.com/community/)
2. [Download the LiteSpeed Cache for XenForo plugin package](https://xenforo.com/community/resources/litespeed-cache-for-xf2-community.6248/) from the Resources area. Note that the **Download** button will not appear unless you are logged in.
3. Access the server hosting your XenForo installation, either directly or using SSH or SFTP.
4. From the unzipped LSCXF2 folder, copy all files under `upload` to the root directory of your XenForo 2 installation.
5. In the XenForo control panel, navigate to the Add-ons section to complete the installation.

## Configuration[¶](#configuration "Permanent link")

All configuration for this plugin is handled at the `.htaccess` level. There is no admin screen.

Once you have downloaded and installed the plugin package, edit the `.htaccess` file in the XenForo root directory and add the code shown below to the top of the file:

```
# LiteSpeed XenForo cache
<IfModule litespeed>
    CacheLookup public on
    RewriteEngine On
    # cache
    RewriteCond %{HTTP_COOKIE} !(xf_lscxf_logged_in|xf_user|xf_session_admin) [NC]
    RewriteCond %{REQUEST_URI} !/install/ [NC]
    RewriteRule .* - [E=Cache-Control:max-age=360,E="cache-vary:xf_style_id,xf_language_id"]
    # no cache
    RewriteCond %{HTTP_COOKIE} (xf_lscxf_logged_in|xf_user|xf_session_admin) [NC]
    RewriteRule .* - [E=Cache-Control:vary=loggedin,E=Cache-Control:no-cache]
</IfModule>
```

Make the following customizations where appropriate:

- If your XenForo site has a separate mobile view, include the following lines inside the `<IfModule litespeed>` tags:

  ```
      # mobile view
      RewriteCond %{HTTP_USER_AGENT} Mobile|Android|Silk/|Kindle|BlackBerry|Opera\ Mini|Opera\ Mobi [NC]
      RewriteRule .* - [E=Cache-Control:vary=ismobile]
  ```
- The default cookie prefix set for XenForo is `xf_`, so all cookies set by xenForo will begin with this prefix (`xf_user`, `xf_session_admin`, etc). If you have changed the cookie prefix in the XenForo configuration file, please make sure to update all `xf_COOKIE_NAME` cookies in the rewrite rules above to use the correct prefix. For example, if your set cookie prefix is `myXF_` you would update `xf_user` to `myXF_user` and so on.
- If you want to cache for more or less than 360 seconds, change `360` to the number of seconds you wish. (Recommended < 10 minutes).

Tip

The code provided must be added before any rewrite rules containing the `[L]` flag, otherwise `.htaccess` could stop processing and prevent the code from being executed.

## Verify Your Site is Being Cached[¶](#verify-your-site-is-being-cached "Permanent link")

Video

See a video demonstration of this topic [here](https://www.youtube.com/watch?v=M9YDUV-LqYQ).

### LSCache Check Tool[¶](#lscache-check-tool "Permanent link")

There's a simple way to see if a URL is cached by LiteSpeed: the [LSCache Check](https://check.lscache.io/) Tool.

Enter the URL you wish to check, and the tool will respond with an easy-to-read Yes or No result, and a display of the URL's response headers, in case you want to examine the results more closely.

[![!LSCache Check](/shared/lscache/images/installation-verify01.png)](https://docs.litespeedtech.com/shared/lscache/images/installation-verify01.png)

In addition to LSCache support, the tool can detect cache hits, and can detect when sites are using LiteSpeed Web ADC or QUIC.cloud CDN for caching.

Additionally, a Stale Cache Warning will alert you if browser cache is detected on dynamic pages. This is because browser cache may interfere with the delivery of fresh content.

### Manual Lookup[¶](#manual-lookup "Permanent link")

[![!Verify Cache Miss](/shared/lscache/images/installation-verify02.png)](https://docs.litespeedtech.com/shared/lscache/images/installation-verify02.png)

You can verify a page is being served from LSCache through the following steps:

1. From a non-logged-in browser, navigate to your site, and open the developer tools (usually, right-click > **Inspect**). Open the **Network** tab.
2. Refresh the page.
3. Click the first resource. This should be an HTML file. For example, if your page is `http://example.com/webapp/`, your first resource should either be something like `example.com/webapp/` or `webapp/`.
4. You should see headings similar to these:

   ```
   X-LiteSpeed-Cache: miss
   X-LiteSpeed-Cache-Control:public,max-age=1800
   X-LiteSpeed-Tag:B1_F,B1_
   ```

   These headings mean the page had not yet been cached, but that LiteSpeed has now stored it, and it will be served from cache with the next request.
5. Reload the page and you should see `X-LiteSpeed-Cache: hit` in the response header. This means the page is being served by LSCache and is configured correctly. [![!Verify Cache Hit](/shared/lscache/images/installation-verify03.png)](https://docs.litespeedtech.com/shared/lscache/images/installation-verify03.png)

Alternative Headers

The `X-LiteSpeed-Cache` header is most common, but you may see `X-LSADC-Cache` if your site is served by LiteSpeed Web ADC.

You may also see `X-QC-Cache` and `X-QC-Pop` if your site is served via QUIC.cloud CDN. The former indicates the cache status (`hit` or `miss`) and the latter indicates what PoP location (such as `NA-US-LGA-33`) served this response.

These alternative headers are also an indication that LSCache is working properly on your site.

Important

If you don't see `X-LiteSpeed-Cache: hit` or `X-LiteSpeed-Cache: miss` (or any of the alternative headers), then there is a problem with the LSCache configuration.

### Non-Cacheable Pages[¶](#non-cacheable-pages "Permanent link")

Sometimes there are pages which should not be cached. To verify that such pages have indeed been excluded from caching, check the developer tools as described [above](#verify-your-site-is-being-cached).

You should see headings similar to these:

```
X-LiteSpeed-Cache-Control:no-cache, esi=on
X-LiteSpeed-Tag:B1_F,B1_
```

`X-LiteSpeed-Cache-Control`, when set to `no-cache`, indicates that LiteSpeed Server has served your page dynamically, and that it was *intentionally* not served from cache.
