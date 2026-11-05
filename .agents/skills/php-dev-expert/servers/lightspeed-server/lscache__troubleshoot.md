# LSCache Troubleshooting | LiteSpeed Cache | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/troubleshoot/

---

# Troubleshooting[¶](#troubleshooting "Permanent link")

Issues listed here apply to LSCache in general, or to usage of multiple plugins. For issues with [a specific plugin](lscache__index.md#available-plugins), please see the Troubleshooting section of that plugin.

We do our best to document and provide solutions for any situation you may encounter with LiteSpeed Cache. If you don't see your issue listed here, there are [additional support options](lscache__index.md#additional-support) available.

## Logged-In Cookie Conflicts[¶](#logged-in-cookie-conflicts "Permanent link")

Login Vary Cookie conflicts can pop up when you have multiple web applications with LSCache plugins enabled on the same document root, with one app being served from a subdirectory of another (as in `www.example.com/` and `www.example.com/app2/`). This can happen with distinct web applications, or multiple installations of the same app (e.g. two copies of WordPress).

[To learn more about this, see our blog post.](https://blog.litespeedtech.com/2017/06/07/wpw-conflict-free-cookies-and-tags-on-multi-app-sites/)

Of particular concern is the `_lscache_vary` cookie, which is the default in every LSCache plugin, and indicates the logged-in status of a user. As such, it is in control of what version of a page (logged in or not logged in) is served.

Example

Let's look at a situation where a WordPress blog lives at `www.example.com/` and a XenForo forum can be found at `www.example.com/forum/`. As far as the browser is concerned, both the blog and the forum are *the same website* because the forum is actually a subdirectory of the blog. When the browser visits either one of those addresses, it will use the cookies for `www.example.com/`.

Even though the forum is an entirely separate application, to the browser it looks simply like a part of the blog.

Here's how this situation presents itself:

- A user logs into WordPress, and the `_lscache_vary` cookie is set to indicate that they are logged in.
- This same user then visits XenForo as a *non-logged-in user* and is served the correct non-logged-in page from the XenForo backend.
- LSCache caches this page, but because the logged-in `_lscache_vary` cookie is still set from the WordPress visit, LSCache erroneously believes the page is meant for *logged-in users*.
- This causes future users logged-in to XenForo to get a "cache hit" on this page and be served the incorrect (non-logged-in) version of the page.

In the previous example, in order to differentiate users logged into WordPress from users logged into XenForo, you need to change the names of the login vary cookies. Each application under the same root needs a uniquely-named cookie. You can manually modify `.htaccess` to address this issue, or for some of our plugins, you can go through the plugin interfaces.

### Modifying .htaccess Manually[¶](#modifying-htaccess-manually "Permanent link")

For each application, add the following rewrite rule to the `.htaccess` file under the application’s root directory, after `RewriteBase` and before all rules using the `[L]` flag:

```
RewriteRule .? - [E=Cache-Vary:_my_custom_vary]
```

`_my_custom_vary` is the cookie name that will now be used by that application.

Example

In the previous scenario, you may put something like this in the WordPress `.htaccess` file:

```
RewriteRule .? - [E=Cache-Vary:_my_vary_EXAMPLE_wordpress]
```

And something like this in the XenForo .htaccess file:

```
RewriteRule .? - [E=Cache-Vary:_my_vary_EXAMPLE_xenforo]
```

### Modifying within a plugin[¶](#modifying-within-a-plugin "Permanent link")

The WordPress plugin has a setting for **Login Cookie**, so you can modify the cookie from within the plugin interface and avoid messing with `.htaccess`. Navigate to **WordPress Dashboard > LiteSpeed Cache > Cache > Advanced** to update it.
