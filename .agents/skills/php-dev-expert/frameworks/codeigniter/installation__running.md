# Running Your App — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/running.html

---

# Running Your App[](#running-your-app "Link to this heading")

A CodeIgniter 4 app can be run in a number of different ways: hosted on a web server,
using virtualization, or using CodeIgniter’s command line tool for testing.
This section addresses how to use each technique, and explains some of the pros and cons of them.

Important

You should always be careful about the case of filenames. Many
developers develop on case-insensitive file systems on Windows or macOS.
However, most server environments use case-sensitive file systems. If the
file name case is incorrect, code that works locally will not work on the
server.

If you’re new to CodeIgniter, please read the [Getting Started](intro__index.md)
section of the User Guide to begin learning how to build dynamic PHP applications. Enjoy!

## [Initial Configuration](#id3)[](#initial-configuration "Link to this heading")

### [Configure for Your Site URIs](#id4)[](#configure-for-your-site-uris "Link to this heading")

Open the **app/Config/App.php** file with a text editor.

1. $baseURL
   :   Set your base URL to `$baseURL`. If you need more flexibility, the baseURL may
       be set within the [.env](general__configuration.md#dotenv-file) file as `app.baseURL = 'http://example.com/'`.
       **Always use a trailing slash on your base URL!**

       Note

       If you don’t set the `baseURL` correctly, in development mode,
       the debug toolbar may not load properly and web pages may take considerably
       longer to display.
2. $indexPage
   :   If you don’t want to include **index.php** in your site URIs, set `$indexPage` to `''`.
       The setting will be used when the framework generates your site URIs.

       Note

       You may need to configure your web server to access your site with a URL
       that does not contain **index.php**. See [CodeIgniter URLs](general__urls.md#urls-remove-index-php).

### [Configure Database Connection Settings](#id5)[](#configure-database-connection-settings "Link to this heading")

If you intend to use a database, open the **app/Config/Database.php** file with
a text editor and set your database settings. Alternately, these could be set in
your **.env** file. See [Database Configuration](database__configuration.md#database-config-explanation-of-values)
for details.

### [Set to Development Mode](#id6)[](#set-to-development-mode "Link to this heading")

If it is not on the production server, set `CI_ENVIRONMENT` to `development`
in **.env** file to take advantage of the debugging tools provided. See
[Setting Development Mode](guides__first-app__index.md#setting-development-mode) for the detail.

Important

In production environments, you should disable error display and
any other development-only functionality. In CodeIgniter, this can be done
by setting the environment to “production”. By default, the application will
run using the “production” environment. See also [The ENVIRONMENT Constant](general__environments.md#environment-constant).

### [Set Writable Folder Permission](#id7)[](#set-writable-folder-permission "Link to this heading")

If you will be running your site using a web server (e.g., Apache or nginx),
you will need to modify the permissions for the **writable** folder inside
your project, so that it is writable by the user or account used by your
web server.

### [Checking PHP ini Settings](#id8)[](#checking-php-ini-settings "Link to this heading")

Added in version 4.5.0.

[PHP ini settings](https://www.php.net/manual/en/ini.list.php) change the behaviors of PHP. CodeIgniter provides a command to
check important PHP settings.

```
php spark phpini:check
```

The *Recommended* column shows the recommended values for production environment.
They may differ in development environments.

Note

If you cannot use the spark command, you can use `CheckPhpIni::run(false)`
in your controller.

E.g.,

```
<?php

namespace App\Controllers;

use CodeIgniter\Security\CheckPhpIni;

class Home extends BaseController
{
    public function index(): string
    {
        return CheckPhpIni::run(false);
    }
}
```

## [Local Development Server](#id9)[](#local-development-server "Link to this heading")

CodeIgniter 4 comes with a local development server, leveraging PHP’s built-in web server
with CodeIgniter routing. You can launch it, with the following command line
in the main directory:

```
php spark serve
```

This will launch the server and you can now view your application in your browser at <http://localhost:8080>.

Note

The built-in development server should only be used on local development machines. It should NEVER
be used on a production server.

If you need to run the site on a host other than simply localhost, you’ll first need to add the host
to your **hosts** file. The exact location of the file varies in each of the main operating systems, though
all unix-type systems (including macOS) will typically keep the file at **/etc/hosts**.

The local development server can be customized with three command line options:

- You can use the `--host` CLI option to specify a different host to run the application at:

  > ```
  > php spark serve --host example.dev
  > ```
- By default, the server runs on port 8080 but you might have more than one site running, or already have
  another application using that port. You can use the `--port` CLI option to specify a different one:

  > ```
  > php spark serve --port 8081
  > ```
- You can also specify a specific version of PHP to use, with the `--php` CLI option, with its value
  set to the path of the PHP executable you want to use:

  > ```
  > php spark serve --php /usr/bin/php7.6.5.4
  > ```

## [Worker Mode with FrankenPHP](#id10)[](#worker-mode-with-frankenphp "Link to this heading")

Added in version 4.7.0.

Important

Worker Mode is currently **experimental**. The only officially supported
worker implementation is **FrankenPHP**, which is backed by the PHP Foundation.

FrankenPHP is a modern PHP application server that supports Worker Mode, allowing
your application to handle multiple requests within the same PHP process for
improved performance.

### [Quick Start](#id11)[](#quick-start "Link to this heading")

1. Install FrankenPHP using [static binaries](https://github.com/php/frankenphp/releases)
2. Generate worker mode files:

```
php spark worker:install
```

3. Start the server:

```
frankenphp run
```

For detailed configuration, performance tuning, and important considerations
about state management, see [Worker Mode](installation__worker_mode.md).

## [Hosting with Apache](#id12)[](#hosting-with-apache "Link to this heading")

A CodeIgniter4 webapp is normally hosted on a web server.
Apache HTTP Server is the “standard” platform, and assumed in much of our documentation.

Apache is bundled with many platforms, but can also be downloaded in a bundle
with a database engine and PHP from [Bitnami](https://bitnami.com/stack/lamp).

### [Configure Main Config File](#id13)[](#configure-main-config-file "Link to this heading")

#### [Enabling mod\_rewrite](#id14)[](#enabling-mod-rewrite "Link to this heading")

The “mod\_rewrite” module enables URLs without “index.php” in them, and is assumed
in our user guide.

Make sure that the rewrite module is enabled (uncommented) in the main
configuration file, e.g., **apache2/conf/httpd.conf**:

```
LoadModule rewrite_module modules/mod_rewrite.so
```

#### [Setting Document Root](#id15)[](#setting-document-root "Link to this heading")

Also make sure that the default document root’s `<Directory>` element enables this too,
in the `AllowOverride` setting:

```
<Directory "/opt/lamp/apache2/htdocs">
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```

### [Hosting with VirtualHost](#id16)[](#hosting-with-virtualhost "Link to this heading")

We recommend using “virtual hosting” to run your apps.
You can set up different aliases for each of the apps you work on,

#### [Enabling vhost\_alias\_module](#id17)[](#enabling-vhost-alias-module "Link to this heading")

Make sure that the virtual hosting module is enabled (uncommented) in the main
configuration file, e.g., **apache2/conf/httpd.conf**:

```
LoadModule vhost_alias_module modules/mod_vhost_alias.so
```

#### [Adding Host Alias](#id18)[](#adding-host-alias "Link to this heading")

Add a host alias in your “hosts” file, typically **/etc/hosts** on unix-type platforms,
or **c:\Windows\System32\drivers\etc\hosts** on Windows.

Add a line to the file.
This could be `myproject.local` or `myproject.test`, for instance:

```
127.0.0.1 myproject.local
```

#### [Setting VirtualHost](#id19)[](#setting-virtualhost "Link to this heading")

Add a `<VirtualHost>` element for your webapp inside the virtual hosting configuration,
e.g., **apache2/conf/extra/httpd-vhost.conf**:

```
<VirtualHost *:80>
    DocumentRoot "/opt/lamp/apache2/myproject/public"
    ServerName   myproject.local
    ErrorLog     "logs/myproject-error_log"
    CustomLog    "logs/myproject-access_log" common

    <Directory "/opt/lamp/apache2/myproject/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

The above configuration assumes the project folder is located as follows:

```
apache2/
   ├── myproject/      (Project Folder)
   │      └── public/  (DocumentRoot for myproject.local)
   └── htdocs/
```

Restart Apache.

#### [Testing](#id20)[](#testing "Link to this heading")

With the above configuration, your webapp would be accessed with the URL **http://myproject.local/** in your browser.

Apache needs to be restarted whenever you change its configuration.

### [Hosting with Subfolder](#id21)[](#hosting-with-subfolder "Link to this heading")

If you want a baseURL like **http://localhost/myproject/** with a subfolder,
there are three ways.

#### [Making Symlink](#id22)[](#making-symlink "Link to this heading")

Place your project folder as follows, where **htdocs** is the Apache document root:

```
├── myproject/ (project folder)
│      └── public/
└── htdocs/
```

Navigate to the **htdocs** folder and create a symbolic link as follows:

```
cd htdocs/
ln -s ../myproject/public/ myproject
```

#### [Using Alias](#id23)[](#using-alias "Link to this heading")

Place your project folder as follows, where **htdocs** is the Apache document root:

```
├── myproject/ (project folder)
│      └── public/
└── htdocs/
```

Add the following in the main configuration file, e.g., **apache2/conf/httpd.conf**:

```
Alias /myproject /opt/lamp/apache2/myproject/public
<Directory "/opt/lamp/apache2/myproject/public">
    AllowOverride All
    Require all granted
</Directory>
```

Restart Apache.

#### [Adding .htaccess](#id24)[](#adding-htaccess "Link to this heading")

The last resort is to add **.htaccess** to the project root.

It is not recommended that you place the project folder in the document root.
However, if you have no other choice, like on a shared server, you can use this.

Place your project folder as follows, where **htdocs** is the Apache document root,
and create the **.htaccess** file:

```
└── htdocs/
    └── myproject/ (project folder)
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

### [Hosting with mod\_userdir (Shared Hosts)](#id25)[](#hosting-with-mod-userdir-shared-hosts "Link to this heading")

A common practice in shared hosting environments is to use the Apache module “mod\_userdir” to enable per-user Virtual Hosts automatically. Additional configuration is required to allow CodeIgniter4 to be run from these per-user directories.

The following assumes that the server is already configured for mod\_userdir. A guide to enabling this module is available [in the Apache documentation](https://httpd.apache.org/docs/2.4/howto/public_html.html).

Because CodeIgniter4 expects the server to find the framework front controller at **public/index.php** by default, you must specify this location as an alternative to search for the request (even if CodeIgniter4 is installed within the per-user web directory).

The default user web directory **~/public\_html** is specified by the `UserDir` directive, typically in **apache2/mods-available/userdir.conf** or **apache2/conf/extra/httpd-userdir.conf**:

```
UserDir public_html
```

So you will need to configure Apache to look for CodeIgniter’s public directory first before trying to serve the default:

```
UserDir "public_html/public" "public_html"
```

Be sure to specify options and permissions for the CodeIgniter public directory as well. A **userdir.conf** might look like:

```
<IfModule mod_userdir.c>
    UserDir "public_html/public" "public_html"
    UserDir disabled root

    <Directory /home/*/public_html>
        AllowOverride All
        Options MultiViews Indexes FollowSymLinks
        <Limit GET POST OPTIONS>
            # Apache <= 2.2:
            # Order allow,deny
            # Allow from all

            # Apache >= 2.4:
            Require all granted
        </Limit>
        <LimitExcept GET POST OPTIONS>
            # Apache <= 2.2:
            # Order deny,allow
            # Deny from all

            # Apache >= 2.4:
            Require all denied
        </LimitExcept>
    </Directory>

    <Directory /home/*/public_html/public>
        AllowOverride All
        Options MultiViews Indexes FollowSymLinks
        <Limit GET POST OPTIONS>
            # Apache <= 2.2:
            # Order allow,deny
            # Allow from all

            # Apache >= 2.4:
            Require all granted
        </Limit>
        <LimitExcept GET POST OPTIONS>
            # Apache <= 2.2:
            # Order deny,allow
            # Deny from all

            # Apache >= 2.4:
            Require all denied
        </LimitExcept>
    </Directory>
</IfModule>
```

### [Removing the index.php](#id26)[](#removing-the-index-php "Link to this heading")

See [CodeIgniter URLs](general__urls.md#urls-remove-index-php-apache).

### [Setting Environment](#id27)[](#setting-environment "Link to this heading")

See [Handling Multiple Environments](general__environments.md#environment-apache).

## [Hosting with nginx](#id28)[](#hosting-with-nginx "Link to this heading")

nginx is the second most widely used HTTP server for web hosting.
Here you can find an example configuration using PHP 8.1 FPM (unix sockets) under Ubuntu Server.

### [default.conf](#id29)[](#default-conf "Link to this heading")

This configuration enables URLs without “index.php” in them and using CodeIgniter’s “404 - File Not Found” for URLs ending with “.php”.

```
server {
    listen 80;
    listen [::]:80;

    server_name example.com;

    root  /var/www/example.com/public;
    index index.php index.html index.htm;

    location / {
        try_files $uri $uri/ /index.php$is_args$args;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;

        # With php-fpm:
        fastcgi_pass unix:/run/php/php8.1-fpm.sock;
        # With php-cgi:
        # fastcgi_pass 127.0.0.1:9000;
    }

    error_page 404 /index.php;

    # deny access to hidden files such as .htaccess
    location ~ /\. {
        deny all;
    }
}
```

### [Setting Environment](#id30)[](#id2 "Link to this heading")

See [Handling Multiple Environments](general__environments.md#environment-nginx).

## [Deployment to Shared Hosting Services](#id31)[](#deployment-to-shared-hosting-services "Link to this heading")

See [Deployment](installation__deployment.md#deployment-to-shared-hosting-services).

## [Bootstrapping the App](#id32)[](#bootstrapping-the-app "Link to this heading")

In some scenarios, you will want to load the framework without actually running the whole
application. This is particularly useful for unit testing your project, but may also be
handy for using third-party tools to analyze and modify your code. The framework comes
with two separate bootstrap scripts specifically for these scenarios:

- **system/Test/bootstrap.php**: This script is used primarily for unit testing.
- **system/util\_bootstrap.php**: This script is used for other scripts that need access to the
  framework. It is recommended for use in scripts that are not part for testing as this will NOT
  fail gracefully if an exception is thrown.

Most of the paths to your project are defined during the bootstrap process. You may use
pre-defined constants to override these, but when using the defaults be sure that your
paths align with the expected directory structure for your installation method.
