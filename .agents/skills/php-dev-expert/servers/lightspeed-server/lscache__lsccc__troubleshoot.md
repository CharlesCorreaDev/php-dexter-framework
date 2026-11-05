# Troubleshooting | LiteSpeed Cache for Craft CMS | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lsccc/troubleshoot/

---

# Troubleshooting Guide[¶](#troubleshooting-guide "Permanent link")

PLEASE READ

Development on the [3rd party LSCache Purge plugin for Craft CMS](https://github.com/scaramangagency/craft-litespeedcache) has been discontinued:

> Per-URL cache busting is now broken in Craft 3.5 because of changes to how template caching works. You will need to nuke the whole cache on save if you are running 3.5+
>
> This plugin is EOL. Minor patches will be issued, but not major functionality overhauls. PR's gratefully received.

We recommend using LSCache with rewrite rules [via these instructions](lscache__noplugin.md) if you are using Craft CMS v3.5 or later.

We do our best to document and provide solutions for any situation you may encounter with LiteSpeed Cache plugins. If you don't see your issue listed here, there are [additional support options](lscache__lsccc.md#additional-support) available.

See Also: [General LSCache Troubleshooting](lscache__troubleshoot.md)

Tip

Before contacting the support team, please verify that you have upgraded to the most recent version of the plugin.

## Admin Cached Despite Rewrite Rules[¶](#admin-cached-despite-rewrite-rules "Permanent link")

The rewrite rules specified in the [installation instructions](lscache__lsccc__installation.md#rewrite-rules) should prevent your admin pages from being cached.

If you find that these pages *are* being cached, it's likely that LSCache has been incorrectly enabled at a global level. You can either correct this by setting **Enable Public Cache** to `not set` or `no` in LiteSpeed Web Server WebAdmin Console, as [recommended](lscache__lsccc__start.md#enable-caching), or you can disable the global setting for a particular virtual host in `.htaccess`.

To disable virtual host cache, add the `CacheDisable public /` line before the rewrite rules, like so:

```
########## Begin - Litespeed cache
<IfModule LiteSpeed>
 RewriteEngine On
 CacheDisable public /
 RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
 RewriteCond %{ORG_REQ_URI} !/admin
 RewriteCond %{ORG_REQ_URI} !/index.php/admin    
 RewriteRule .* - [E=Cache-Control:max-age=28800]
</IfModule>
########## End - Litespeed cache
```

The `CacheDisable public /` directive will disable caching sitewide, while`[E=Cache-Control:max-age=28800]` will selectively enable it for the URLs that match the given conditions, and set their TTL to `28800` seconds (8 hours).
