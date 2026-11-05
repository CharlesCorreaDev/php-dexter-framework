# Deployment — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/deployment.html

---

# Deployment[](#deployment "Link to this heading")

## [Optimization](#id3)[](#optimization "Link to this heading")

Before deploying your CodeIgniter application to production, there are several
things you can do to make your application run more efficiently.

This section describes the optimization features that CodeIgniter provides.

### [spark optimize](#id4)[](#spark-optimize "Link to this heading")

Added in version 4.5.0.

The `spark optimize` command performs the following optimizations:

- [Removing Dev Packages](#removing-dev-packages)
- Enabling [Config Caching](#config-caching)
- Enabling [FileLocator Caching](#filelocator-caching)

Warning

Do not use `spark optimize` when running the app in the [Worker Mode](installation__worker_mode.md).

### [Composer Optimization](#id5)[](#composer-optimization "Link to this heading")

#### [Removing Dev Packages](#id6)[](#removing-dev-packages "Link to this heading")

When you deploy, don’t forget to run the following command:

```
composer install --no-dev
```

The above command will remove the Composer packages only for development
that are not needed in the production environment. This will greatly reduce
the vendor folder size.

#### [Specifying Packages to Discover](#id7)[](#specifying-packages-to-discover "Link to this heading")

If Composer Package Auto-Discovery is enabled, all Composer packages are scanned
when needed. But there is no need to scan packages that are not CodeIgniter packages,
so specifying the packages to be scanned prevents unnecessary scanning.

See [Specify Composer Packages](general__modules.md#modules-specify-composer-packages).

### [Config Caching](#id8)[](#config-caching "Link to this heading")

Important

Once cached, configuration values are never changed until the cache
is deleted, even if the configuration file or **.env** is changed.

Caching the Config objects can improve performance. However, the cache must be
manually deleted when changing Config values.

See [Config Caching](concepts__factories.md#factories-config-caching).

### [FileLocator Caching](#id9)[](#filelocator-caching "Link to this heading")

Caching the file paths that FileLocator found can improve performance. However,
the cache must be manually deleted when adding/deleting/changing file paths.

See [FileLocator Caching](concepts__autoloader.md#file-locator-caching).

### [PHP Preloading](#id10)[](#php-preloading "Link to this heading")

With PHP preloading, you can instruct the server to load essential files like functions and classes into memory during startup.
This means these elements are readily available for all requests, skipping the usual loading process and boosting your
application’s performance. However, this comes at the cost of increased memory usage and requires restarting the
PHP engine for changes to take effect.

Note

If you want to use [Preloading](https://www.php.net/manual/en/opcache.preloading.php),
we provide a [preload script](https://github.com/codeigniter4/CodeIgniter4/blob/develop/preload.php).

#### [Requirement](#id11)[](#requirement "Link to this heading")

Using preloading requires one dedicated PHP handler. Normally, web servers are configured to use one PHP handler, so one app requires a dedicated web server.
If you want to use preloading for multiple apps on one web server, configure your server to use virtual hosts with multiple PHP handlers like multiple PHP-FPMs, with each virtual host using one PHP handler.
Preloading keeps the relevant definitions in memory by reading the files specified in `opcache.preload`.

Note

See [Running Multiple Applications with one CodeIgniter Installation](general__managing_apps.md#running-multiple-app) to make one core CodeIgniter4 to handle your multiple apps.

#### [Configuration](#id12)[](#configuration "Link to this heading")

Open `php.ini` or `xx-opcache.ini` if you have split INI configuration in PHP, and recommend to set `opcache.preload=/path/to/preload.php` and `opcache.preload_user=myuser`.

Note

`myuser` is user running in your web server. If you want to find the location of the split INI configuration, just run `php --ini` or open file `phpinfo()` and search *Additional .ini files parsed*.

Make sure you use the appstarter installation. If using manual installation, you must change the directory in `include` path.

```
<?php

// ...

class preload
{
    /**
     * @var array Paths to preload.
     */
    private array $paths = [
        [
            'include' => __DIR__ . '/system', // <== change this line to where CI is installed
            // ...
        ],
    ];

    // ...
}

// ...
```

## [Deployment to Shared Hosting Services](#id13)[](#deployment-to-shared-hosting-services "Link to this heading")

Important

**index.php** is no longer in the root of the project! It has been moved inside
the **public** folder, for better security and separation of components.

This means that you should configure your web server to “point” to your project’s
**public** folder, and not to the project root.

### [Specifying the Document Root](#id14)[](#specifying-the-document-root "Link to this heading")

The best way is to set the document root to the **public** folder in the server
configuration:

```
└── example.com/ (project folder)
    └── public/  (document root)
```

Check with your hosting service provider to see if you can change the document root.
Unfortunately, if you cannot change the document root, go to the next way.

### [Using Two Directories](#id15)[](#using-two-directories "Link to this heading")

The second way is to use two directories, and adjust the path.
One is for the application and the other is the default document root.

Upload the contents of the **public** folder to **public\_html** (the default
document root) and the other files to the directory for the application:

```
├── example.com/ (for the application)
│       ├── app/
│       ├── vendor/ (or system/)
│       └── writable/
└── public_html/ (the default document root)
        ├── .htaccess
        ├── favicon.ico
        ├── index.php
        └── robots.txt
```

See
[Install CodeIgniter 4 on Shared Hosting (cPanel)](https://forum.codeigniter.com/showthread.php?tid=76779)
for details.

### [Adding .htaccess](#id16)[](#adding-htaccess "Link to this heading")

The last resort is to add **.htaccess** to the project root.

It is not recommended that you place the project folder in the document root.
However, if you have no other choice, you can use this.

Place your project folder as follows, where **public\_html** is the document root,
and create the **.htaccess** file:

```
└── public_html/     (the default document root)
    └── example.com/ (project folder)
        ├── .htaccess
        └── public/
```

And edit **.htaccess** as follows:

```
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>

<FilesMatch "^\.">
    Require all denied
    Satisfy All
</FilesMatch>
```

And remove the redirect settings in **public/.htaccess**:

```
--- a/public/.htaccess
+++ b/public/.htaccess
@@ -16,16 +16,6 @@ Options -Indexes
    # http://httpd.apache.org/docs/current/mod/mod_rewrite.html#rewritebase
    # RewriteBase /

-   # Redirect Trailing Slashes...
-   RewriteCond %{REQUEST_FILENAME} !-d
-   RewriteCond %{REQUEST_URI} (.+)/$
-   RewriteRule ^ %1 [L,R=301]
-
-   # Rewrite "www.example.com -> example.com"
-   RewriteCond %{HTTPS} !=on
-   RewriteCond %{HTTP_HOST} ^www\.(.+)$ [NC]
-   RewriteRule ^ http://%1%{REQUEST_URI} [R=301,L]
-
    # Checks to see if the user is attempting to access a valid file,
    # such as an image or css document, if this isn't true it sends the
    # request to the front controller, index.php
```
