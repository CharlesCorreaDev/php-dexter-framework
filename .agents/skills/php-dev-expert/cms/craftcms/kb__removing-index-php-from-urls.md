# Removing “index.php” from URLs | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/removing-index-php-from-urls

---

Search Knowledge Base

# Removing ​“index.php” from URLs

![](https://craftcms.com/dist/images/icon-tip.svg)

This article assumes your site runs on Apache. If you’re using Ngnix, see Andrew Welch’s excellent [Craft/Ngnix configuration examples](https://github.com/nystudio107/nginx-craft).

To remove the “index.php” from your site’s URLs, you will first need to make sure your server is set up to pass would-be 404 requests off to Craft’s index.php file behind the scenes.

If you’re running Apache, you can do that by creating a redirect in your site’s .htaccess file. If you don’t already have one, create a new file called “.htaccess” in your site’s web root.

Save this inside your .htaccess file:

```
<IfModule mod_rewrite.c>
  RewriteEngine On

  # Send would-be 404 requests to Craft
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_URI} !^/(favicon\.ico|apple-touch-icon.*\.png)$ [NC]
  RewriteRule (.+) index.php?p=$1 [QSA,L]
</IfModule>
```

That rewrite rule basically says, “if a request is coming in that doesn’t map to an existing folder or file, pass it along to index.php instead.”

With that file in place, try accessing a page on your site (besides your homepage), without the “index.php”. If it works, great! If not, you should check with your host to see why the .htaccess file isn’t working.

### That’s great, but my URLs are still outputting with “index.php” [#](#thats-great-but-my-uRLs-are-still-outputting-with-index-php "Direct link to That’s great, but my URLs are still outputting with “index.php”")

The last step is to tell Craft that your site is set up to handle URLs without “index.php” in them. (Craft does its best to determine that for itself, but it only checks every 24 hours, and sometimes it gets it wrong.)

You can tell Craft not to include the “index.php” by opening up craft/config/general.php, and adding this to the array:

```
    'omitScriptNameInUrls' => true,
```

With that in place, Craft will take your word for it and stop performing its daily checks.

### But seriously, my URLs still have “index.php” in them [#](#but-seriously-my-uRLs-still-have-index-php-in-them "Direct link to But seriously, my URLs still have “index.php” in them")

If you’re on Apache, your `httpd.conf` file probably has [AllowOverride None](https://httpd.apache.org/docs/2.2/mod/core.html#allowoverride) set for your site, effectively disabling all `.htaccess` file changes. Change it to `AllowOverride All`, restart Apache and you should finally be set. Also make sure [mod\_rewrite](https://httpd.apache.org/docs/2.2/mod/mod_rewrite.html) is enabled.

Applies to
Craft CMS 3 and Craft CMS 2.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
