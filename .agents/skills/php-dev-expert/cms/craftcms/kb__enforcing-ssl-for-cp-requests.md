# Enforcing SSL for Control Panel Requests | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/enforcing-ssl-for-cp-requests

---

Search Knowledge Base

# Enforcing SSL for Control Panel Requests

Any time you’re managing a public website, it’s a good idea to force SSL in the areas that deal with user accounts and other sensitive information. If you’re running Craft, protecting the entire control panel with SSL is a good place to start.

To force SSL for the Craft control panel, open up the `.htaccess` file in your web root, and add this to it:

```
<IfModule mod_rewrite.c>
  RewriteEngine On
    
  # Force SSL for control panel requests
  RewriteCond %{HTTP_HOST} example\.com [NC]
  RewriteCond %{REQUEST_URI} ^/admin/ [NC]
  RewriteCond %{HTTPS} !=on
  RewriteRule .* https://%{HTTP_HOST}%{REQUEST_URI} [NC,R=301,L]
</IfModule>
```

If you have an `index.php` redirect in there already (for the ['omitScriptNameInUrls'](https://craftcms.com/docs/3.x/config/config-settings.html#omitscriptnameinurls) setting) this code should go *before* that.

Let’s take this line-by-line so it’s clear what’s going on.

```
RewriteCond %{HTTP_HOST} example\.com$ [NC]
```

This prevents the redirect from affecting your local site. Set `example\.com` to your actual public domain name.

```
RewriteCond %{REQUEST_URI} ^/admin/ [NC]
```

This limits the SSL enforcement to URLs that begin with “/admin/”. If you have a custom [cpTrigger](https://craftcms.com/docs/3.x/config/config-settings.html#cptrigger) config setting set, use that instead.

```
RewriteCond %{HTTPS} !=on
```

This prevents unnecessary redirects in the event that you’re already accessing the control panel over SSL. Leaving this out would actually create an infinite redirect loop.

Note that the `%{HTTPS}` variable might not be an accurate measure for whether the request is over SSL for some web hosts. [EngineHosting](http://www.enginehosting.com/), for example, requires that you set the following two lines instead:

```
RewriteCond %{ENV:SECURE_REDIRECT} !=on
RewriteCond %{SERVER_PORT} !^443$
```

If you’re having issues with this, ask your web host for more info.

```
RewriteRule .* https://%{HTTP_HOST}%{REQUEST_URI} [NC,R=301,L]
```

If the incoming request has passed all of our `RewriteCond` checks, this line will handle the actual redirect.

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
