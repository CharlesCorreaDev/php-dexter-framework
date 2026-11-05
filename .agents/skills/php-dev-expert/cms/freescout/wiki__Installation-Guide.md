# Installation Guide · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Installation-Guide

---

1. [Prerequisites](#1-prerequisites)
2. [Installing Package Dependencies](#2-installing-package-dependencies)
3. [Configuring PHP](#3-configuring-php)
4. [Configuring MySQL](#4-configuring-mysql)
5. [Downloading the Application](#5-downloading-the-application)
6. [Configuring Web Server](#6-configuring-web-server)
   1. [Nginx](#61-nginx)
   2. [Apache](#62-apache)
   3. [IIS](#63-iis)
7. [Restarting Services](#7-restarting-services)
8. [Installing the Application](#8-installing-the-application)
   1. [Using web installer](#81-using-web-installer)
   2. [Manual installation](#82-manual-installation)
9. [Configuring Cron Jobs](#9-configuring-cron-jobs)
10. [Final Configuration](#10-final-configuration)
    1. [Alerts](#101-alerts)
    2. [Attachments](#102-attachments)
    3. [CloudFlare](#103-cloudflare)
11. [Troubleshooting](#11-troubleshooting)

## Introduction

#### Images & one-click installs:

- [Docker Image](http://freescout.net/docker/) ([video tutorial](https://youtu.be/vw9boxStxyc?t=191))
- [Softaculous](http://www.softaculous.com/apps/customersupport/FreeScout) (cPanel, Plesk, ISPmanager, H-Sphere, DirectAdmin, InterWorx)
- [Fantastico](http://ff3.netenberg.com/visitors/scripts/freescout/view) (cPanel, ISP Manager, DirectAdmin, ISP Config)
- [Cloudron](https://cloudron.io/store/net.freescout.cloudronapp.html)
- [Helm Chart](https://github.com/zzorica/helm-charts/tree/main/charts/freescout)
- [More One-Click Installs…](https://freescout.net/one-click-installs/)

#### Interactive installation bash-script (Ubuntu / Debian / etc):

```
sudo apt install wget
wget https://raw.githubusercontent.com/freescout-help-desk/freescout/dist/tools/install.sh
chmod u+x install.sh
sudo ./install.sh
```

#### Systems-specific tutorials:

- Windows (there is no any tutorial yet but some people [managed to install](https://github.com/freescout-help-desk/freescout/issues/709) FreeScout on Windows)
- [Centmin Mod on CentOS](https://community.centminmod.com/threads/how-to-install-freescout-on-centminmod.16466/)
- [CentOS / Rocky / RHEL](https://techviewleo.com/install-freescout-help-desk-on-centos-rocky-rhel/?expand_article=1)
- [Laragon](https://github.com/freescout-help-desk/freescout/issues/2760)
- SuSE - it does not support `php-imap` extension but there is a workaround [here](https://github.com/freescout-help-desk/freescout/issues/2604#issuecomment-1886662114).
- [Plesk](wiki__FreeScout-on-Plesk.md) - tips for installing FreeScout on Plesk.

#### Installation Services

If you want you can [let professionals](https://freescout.net/installation-services/) install FreeScout for you.

## 1. Prerequisites

Prerequisites required to run **FreeScout** are listed [here](https://github.com/freescout-help-desk/freescout#requirements). In this tutorial we are going to install FreeScout on Ubuntu LTS and use Nginx/Apache as a web server, but you can use any web server you like (Nginx, Apache, IIS, etc). Before you start installation please make sure to read about [choosing a server](wiki__Choosing-a-Server.md).

You will also need a **mailbox email address** which will be used to fetch incoming emails (and optionally to send outgoing emails). This email can be set up anywhere (Gmail, G Suite, Yahoo, Office365, Zoho Mail, etc). This email is supposed to be accessed via FreeScout only, as all incoming emails will be automatically marked as READ and FreeScout will not fetch emails which have been read by people accessing the mailbox. If in your company you already have a mail server allowing SMTP and IMAP connection, just create a new email address (for example, [support@company.com](mailto:support@company.com)) and use it as a support mailbox email.

Make sure to learn about [sending emails](wiki__Sending-Emails.md).

If you want to connect FreeScout to G Suite or Microsoft Office 365 via OAuth see [this instruction](wiki__OAuth-for-Google-and-Office-365.md).

Keep in mind that for the browser **push notifications** to work, **HTTPS** protocol is required.

![](https://camo.githubusercontent.com/4e4e4cf1829f5b7314c84741f8e991d71a67729b0b9095b7383c2a2022be981b/68747470733a2f2f6672656573636f75742d68656c706465736b2e6769746875622e696f2f696d672f73637265656e73686f74732f707573682e706e67)

## 2. Installing Package Dependencies

#### Nginx

```
sudo apt-get update
sudo apt remove apache2
sudo apt install nginx
sudo rm /var/www/html/*nginx*.html
```

#### PHP

Install PHP in FPM mode and all required extensions. Below are instructions for PHP 8.x or PHP 7.x.

> **DO NOT use PHP 8.1 as it contains critical bugs causing problems with parsing XML/HTML in some cases. PHP 8.2 and newer are OK.**

*PHP 8.x*

```
sudo apt install php8.5-fpm php8.5 php8.5-mysql php8.5-mbstring php8.5-xml php8.5-imap php8.5-zip php8.5-gd php8.5-curl php8.5-intl
```

*PHP 7.x*

```
sudo apt install php7.4 php7.4-mysqli php7.4-fpm php7.4-mbstring php7.4-xml php7.4-imap php7.4-json php7.4-zip php7.4-gd php7.4-curl php7.4-intl
```

Make sure that correct version of PHP is used in console by running: `php -v`

Make sure that extensions are also enabled in console version by running: `php -m`

#### MySQL

```
sudo apt install mysql-server libmysqlclient-dev
```

If you want to use MariaDB (it will automatically remove the mysql-server installation if any):

```
sudo apt install mariadb-server mariadb-client
```

#### Git

```
sudo apt install git
```

## 3. Configuring PHP

For FPM we need to fix\_pathinfo:

If you are working under the root user:

```
echo ‘cgi.fix_pathinfo=0’ >> /etc/php/8.0/fpm/php.ini
```

In other cases:

```
sudo -- "$SHELL" -c "echo 'cgi.fix_pathinfo=0' >> /etc/php/8.0/fpm/php.ini"
```

## 4. Configuring MySQL

Log into the MySQL root administrative account:

```
mysql -u root -p
```

Create FreeScout database and user (replace "XXX" with the real password):

```
CREATE DATABASE `freescout` CHARSET utf8mb4 COLLATE utf8mb4_unicode_ci;
GRANT ALL PRIVILEGES ON `freescout`.* TO `freescout`@`localhost` IDENTIFIED BY "XXX";
```

If above code does not work try:

```
CREATE USER 'freescout'@'localhost' IDENTIFIED BY 'XXX';
GRANT ALL PRIVILEGES ON `freescout`.* TO `freescout`@`localhost`;
```

## 5. Downloading the Application

Create the new directory, set permissions. Make sure to replace `/var/www/html` with the path on your server (this is just an example):

```
sudo mkdir -p /var/www/html
sudo chown www-data:www-data /var/www/html
cd /var/www/html
```

Now you need to download the app. There are two ways to do it:

1. Download the application build from <https://freescout.net/download/> and extract it into `/var/www/html`. This method can be used if installing via cPanel for example.
2. Download the app using Git into the current directory (it must be empty):

```
sudo git clone https://github.com/freescout-help-desk/freescout .
```

This will install the app from `dist` branch with all the composer dependencies included.

### If you are planning to contribute to the project

Run the following commands:

```
git pull origin master
git checkout master
```

When running composer commands always add --ignore-platform-reqs flag: `composer install --ignore-platform-reqs`

> **When making a pull request make sure to submit it to the `master` branch, NOT `dist`!!!**

## 6. Configuring Web Server

We are installing application in `/var/www/html/` (application directory), so server's web root directory must be `/var/www/html/public`.

Web server runs as **www-data** user. All application files must be owned by **www-data**, so that application can self-update itself.

Run the following command to make sure that **www-data** user is the owner of all the files in the application directory:

```
sudo chown -R www-data:www-data /var/www/html
```

Now if you have some SSH user (for example **freescout**) which you are going to use for development, add this user to `www-data` group to allow edit files and folders created by the web server. If you are not going to work with files via SSH/FTP just skip this step.

**`www-data` must be the primary group of the `freescout` user. Otherwise you will be getting a [Permissions issue](wiki__Installation-Guide.md#permissions-issue)**

```
sudo  usermod -g www-data freescout

find /var/www/html -type f -exec chmod 664 {} \;    
find /var/www/html -type d -exec chmod 775 {} \;
```

If you are installing FreeScout in a subdirectory, just make corresponding changes in the web server configuration files and specify proper App URL when installing the app.

### 6.1 Nginx

Create a new server config (make sure to replace "example.com" with your actual site name):

```
sudo cp /etc/nginx/sites-available/default /etc/nginx/sites-available/example.com
sudo rm /etc/nginx/sites-enabled/default
sudo ln -s /etc/nginx/sites-available/example.com /etc/nginx/sites-enabled/example.com
sudo nano /etc/nginx/sites-enabled/example.com
```

The modified Nginx configuration file will look like this:

```
server {
    listen 80;
    listen [::]:80;

    server_name example.com www.example.com;

    root /var/www/html/public;

    index index.php index.html index.htm;

    error_log /var/www/html/storage/logs/web-server.log;

    # Max. attachment size.
    # It must be also set in PHP.ini via "upload_max_filesize" and "post_max_size" directives.
    client_max_body_size 20M;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    location ~ \.php$ {
	fastcgi_split_path_info ^(.+\.php)(/.+)$;
	fastcgi_pass unix:/run/php/php8.0-fpm.sock;
	fastcgi_index index.php;
	fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
	include fastcgi_params;
    }
    # Uncomment this location if you want to improve attachments downloading speed.
    # Also make sure to set APP_DOWNLOAD_ATTACHMENTS_VIA=nginx in the .env file.
    #location ^~ /storage/app/attachment/ {
    #    internal;
    #    alias /var/www/html/storage/app/attachment/;
    #}
    location ~* ^/storage/attachment/ {
        expires 1M;
        access_log off;
        try_files $uri $uri/ /index.php?$query_string;
    }
    # Short expiration for .css and .js files
    location ~* ^/(?:css|js)/.*\.(?:css|js)$ {
        expires 2d;
        access_log off;
        add_header Cache-Control "public, must-revalidate";
        # For dynamic content application adds nosniff by itself
        add_header X-Content-Type-Options "nosniff";
    }
    # Force /storage/* files to be downloaded instead of showing them in the browser.
    # The list should be in sync with /storage/app/public/uploads/.htaccess and /config/app.php
    location ~* ^/storage/.*\.((?!(jpg|jpeg|jfif|pjpeg|pjp|apng|bmp|gif|ico|cur|png|tif|tiff|webp|pdf|txt|diff|patch|json|mp3|wav|ogg|wma)).)*$ {
        add_header Content-disposition "attachment; filename=$2";
        add_header X-Content-Type-Options "nosniff";
        default_type application/octet-stream;
    }
    # Long expiration for files in /storage or any files having dot in their names
    location ~* ^/(storage/|.*\.).*$ {
        expires 1M;
        access_log off;
        add_header Cache-Control "public";
        # For dynamic content application adds nosniff by itself
        add_header X-Content-Type-Options "nosniff";
    }
    location ~ /\. {
        deny  all;
    }
}
```

*If you want to run FreeScout in a subdirectory (for example `https://example.com/subdirectory`) see recommendations for Nginx config [here](https://github.com/freescout-help-desk/freescout/issues/2747).*

Apply Nginx config:

```
nginx -t
service nginx reload
```

Install Certbot:

```
sudo snap install --classic certbot
sudo ln -s /snap/bin/certbot /usr/bin/certbot
sudo certbot --nginx
```

*The specific commands to use for different distros can be obtained from <https://certbot.eff.org/>*

Enable HTTPS on Nginx and test automatic certificate renewal:

```
certbot --nginx --register-unsafely-without-email
certbot renew --dry-run
```

When asked choose option `2: Redirect - Make all requests redirect to secure HTTPS access`.

Add to root crontab:

```
0 12 * * * /usr/bin/certbot renew --quiet
```

If you want to set up the FreeScout behind **Nginx proxy** see [this instruction](https://github.com/freescout-help-desk/freescout/issues/887).

### 6.2 Apache

Apache virtual host configuration:

```
<VirtualHost *:80>
  ServerName example.com
  DocumentRoot "/var/www/html/public"
  Options Indexes FollowSymLinks
  ErrorLog /var/www/html/storage/logs/web-server.log
  <Directory "/var/www/html/public">
    AllowOverride All
    Require all granted
  </Directory>
</VirtualHost>
```

To install FreeScout into a subdirectory no need to create extra .htaccess files, just make sure to set proper path in `Directory` parameter. Also keep in mind that .htaccess files in upper-level directories may causeproblems for FreeScout.

Make sure that Apache **mod\_rewrite** is enabled, otherwise you will always receive `404 Not Found` error in browser. To enable **mod\_rewrite** do the following:

```
sudo a2enmod rewrite
sudo systemctl restart apache2
```

Also **mod\_headers** is needed to secure `uploads` folder:

```
sudo a2enmod headers
sudo systemctl restart apache2
```

If you receive error 500, try to add the following to the Apache virtual host configuration:

```
RewriteBase /
```

### 6.3 IIS

Import the .htaccess file using URL Rewrite.

Select URL Rewrite > Import Rules > ... > select .htaccess from the public directory > Delete the line highlighted in red.

Install cygwin.

## 7. Restarting Services

Nginx:

```
nginx -t
service nginx restart
service php8.0-fpm restart
```

Apache:

```
service apache2 restart
service php8.0-fpm restart
```

## 8. Installing the Application

There are two ways to install the app:

- Use web installer (recommended).
- Install manually.

### 8.1 Using web installer

> If you want to use web installer, **DO NOT** create `.env` file manually. If `.env` file exists in the root of your app, web installer won't run. To run web installer, remove `.env` file and `/storage/.installed` (if exists), then remove all files from /bootstrap/cache`.

Open web installer <https://your-domain.com/install> and follow instructions:

![](https://camo.githubusercontent.com/0ef99c98a39b044e86a16574a3eae378b5c2737fc5fb14a38fc59d5ad3f6a9da/68747470733a2f2f6672656573636f75742d68656c706465736b2e6769746875622e696f2f696d672f73637265656e73686f74732f696e7374616c6c65722e706e67)

Installation wizard will guide you through the steps of installation process:

1. Check PHP extensions
2. Check folders permissions
3. Choose database type: MySQL or PostrgeSQL
4. Enter database details
5. Choose application timezone
6. Create admin user

### 8.2 Manual installation

This method is for advanced users who can use SSH console.

1. Copy `.env.example` as `.env` and make appropriate changes in the file.
2. Generate APP\_KEY in the `.env` file:

```
php artisan key:generate
```

3. Clear application cache and apply `.env` file changes:

```
php artisan freescout:clear-cache
```

4. Create a symbolic link from "public/storage" to "storage/app/public"

```
php artisan storage:link
```

5. Create tables:

```
php artisan migrate
```

6. Create admin user:

```
php artisan freescout:create-user
```

7. Create an empty `/storage/.installed` file.

## 9. Configuring Cron Jobs

### 9.1. Main Cron Job – schedule:run

Set up a cron task for **www-data** SSH user (*if you don't know how to do it, contact your hosting provider*). Make sure to replace `/var/www/html/` with the path to your installation.

```
crontab -u www-data -e

* * * * * php /var/www/html/artisan schedule:run >> /dev/null 2>&1
```

On some shared hostings you may need to specify the full path to the PHP executable, for example, `/usr/local/bin/php-8.0`:

```
* * * * * export PHP_PATH=/usr/local/bin/php-8.0; $PHP_PATH /var/www/html/artisan schedule:run >> /dev/null 2>&1
```

This command runs every minute and also makes sure one instance of it runs as a daemon in the background. **DO NOT ADD `--no-interaction` flag to the command as in this it will not run the background `queue:work` daemon!**

In you are using **Plesk**, see [this instruction](https://github.com/freescout-help-desk/freescout/issues/942).

Run the following command to make sure that console version of PHP which you are using satisfies all the requirements (use the same `php` as in the cron job):

```
php /var/www/html/artisan freescout:check-requirements

(or)

/usr/local/bin/php-8.0 /var/www/html/artisan freescout:check-requirements
```

**Make sure that the cron job user is not messing up file ownership and permissions. Otherwise you will be getting a [Permissions issue](wiki__Installation-Guide.md#permissions-issue). If you execute cron job under the user different from `www-data` files and folders will be created under this user and `www-data` user may face permissions issue.**

If regular cron jobs are not functioning on your hosting cron job can be executed via the URL which can be found in "Manage » System » Cron Commands". But this method is not recommended as some features may not work as expected. Use it at your own risk.

### 9.2. Cron Job for Automatic Updates

*This step is performed to comply with modern cybersecurity standarts.*

In order to allow FreeScout to update itself and modules automatically in the background configure the following cron job:

```
0 1 * * * /var/www/html/tools/update.sh --yes >> /var/www/html/storage/logs/update.log
```

This command will check for updates and install them every day at 1am (use [this tool](https://crontab.guru) to generate desired cron schedule).

Before setting up this cron task make sure to update FreeScout via `tools/update.sh` script at least once to make sure it actually works.

## 10. Final Configuration

After finishing configuration steps below it's highly recommended to read the [FAQ](wiki__FAQ.md) - it contains a lot of useful information.

### 10.1. Alerts

Got to `Settings » Mail Settings` and configure `System Emails` (alerts to admin, password resets and invitation emails to users).

In `Settings » Alerts` you can configure receiving alerts by email when some errors occur in the app.

### 10.2. Attachments

Pay attention to the `memory_limit` parameter in the php.ini of your **console PHP**. This parameter determines maximum attachment size which FreeScout can retrieve when fetching incoming emails (read more [here](wiki__Installation-Guide.md#allowed-memory-size-of-nnn-bytes-exhausted-error-when-fetching-large-attachments)).

The following parameters determine maximum attachment size which support agents can upload:

- php.ini: `upload_max_filesize`
- php.ini: `post_max_size`
- nginx config: `client_max_body_size`

In "Manage » Settings" you can adjust "Max. Message Size" option (it takes into account messages text and attachments).

If you want to store attachments using something like S3 – see [this](https://github.com/freescout-help-desk/freescout/issues/674#issuecomment-661600148).

### 10.3. CloudFlare

If you are using [CloudFlare](https://www.cloudflare.com/) (otherwise skip this section):

1. DO NOT ENABLE *"Security » WAF » Managed Rules » Cloudflare OWASP Core Ruleset"* option as it will cause all kinds of unpredictable issues (see [this](https://github.com/freescout-help-desk/freescout/issues/2566#issuecomment-1396125232)).
2. If you are using **CloudFlare Rocket Loader** you'll need to disable it as it's not compatible with strict Content Security Policy used by FreeScout (see [this](https://github.com/freescout-help-desk/freescout/issues/3452)).
3. Add the following line to the /.env file and [clear cache](wiki__Clearing-the-Cache.md) in order to allow the application to properly detect visitor's IP address:

```
APP_CLOUDFLARE_IS_USED=true
```

In order to check CloudFlare logs select your website in CloudFlare and go to "Security » Events" and scroll down to "Activity log".

## 11. Troubleshooting

Make sure that your system configuration is fine in `Manage » System`

If you get any errors, check app logs in `Manage » Logs » App Logs`. If you have problems with loading JavaScript, menu will not work, so you need to check logs on the server in `storage/logs` folder.

You can also enable debugging (only if installed manually from `master`) to see error messages in your browser by uncommenting the following in `.env` file (*don't forget to remove it when you finish debugging*): `APP_DEBUG=true`

### — Permissions issue

This is the most common issue. Usually **`failed to open stream`** or **`File /modules/modulename/js/laroute.js does not exist`** errors mean that you have permissions issue.

Symptoms:

> ```
> file_put_contents(/var/www/html/storage/framework/cache/data/): failed to open stream: no such file or directory
> ```
>
> ```
> file_put_contents(/var/www/html/storage/framework/cache/data/5e/3c/5e3cbbed47195384f39edf30b47d8cd8245cdff8): failed to open stream: Permission denied
> ```
>
> ```
> Error: File '/www/html/public/storage/js/vars.js' does not exist
> ```
>
> ```
> File /modules/modulename/js/laroute.js does not exist
> ```
>
> ```
> File /modules/modulename/css/module.css does not exist
> ```
>
> ```
> Error occurred creating [...] symlink: symlink(): No such file or directory
> ```

Solution:

This issue means that the web server user does (www-data) not have permissions to write in some folder in `storage`. Make sure that web server user (www-data) [has write permissions](wiki__Installation-Guide.md#6-configuring-web-server) in `storage` folder and run again the following commands:

> ```
> sudo chown -R www-data:www-data /var/www/html
> ```

Also make sure that the [cron task user](wiki__Installation-Guide.md#9-configuring-cron-jobs) or some other user is not messing up file ownership and permissions. If you execute some FreeScout console command under the user different from `www-data` files and folders will be created under this user and `www-data` user may face permissions issue.

After that clear cache to generate missing files:

```
php artisan freescout:clear-cache
```

If the issue still persists try to manually type <https://your-freescout.org/system/tools> address and click "Clear Cache".

### — open\_basedir restriction in effect

Try [this](https://stackoverflow.com/questions/1846882/open-basedir-restriction-in-effect-file-is-not-within-the-allowed-paths/34980645#34980645).

### — If styles or JavaScripts are working incorrectly (top menu is not working)

Manually create a `/public/storage` symlink:

```
php artisan storage:link
```

or create symlink manually:

```
ln -s /var/www/html/storage/app/public public/storage
```

Make sure that PHP is able to write to `public/css/builds` and `public/js/builds` (see [Configuring permissions](wiki__Installation-Guide.md#6-configuring-web-server))

If using HTTPS make sure it's properly configured: [https://github.com/freescout-help-desk/freescout/wiki/Installation-Guide#-if-https-is-configured-but-the-app-is-loading-via-http-instead-of-https](wiki__Installation-Guide.md#-if-https-is-configured-but-the-app-is-loading-via-http-instead-of-https)

### — I'm receiving "cURL error 28: SSL connection timeout" or "cURL error 60: SSL certificate problem: unable to get local issuer certificate"

It means something is not OK with verifying peer during CURL connection on your server. Try to set `APP_CURL_SSL_VERIFYPEER=false` in the .env file and clear cache. Please note that this reduces security, so proceed at your own risk.

### — I'm using CloudFlare Rocket Loader and some buttons are not working

The only solution is to disable Rocket Loader in CloudFlare (see [this](https://github.com/freescout-help-desk/freescout/issues/3452)).

### — ERROR: Path cannot be empty at FilesystemAdapter.php

This means that PHP can not create a temporary file. On Windows for example you need to give PHP permission in IIS 10 to write to `C:\Windows\temp\`.

### — Sometimes authenticated user unexpectedly logs in under another user

If you are using NGINX Proxy Manager or any other proxy, disable all kinds of Assets Cache (like in [this issue](https://github.com/freescout-help-desk/freescout/issues/3837#issuecomment-1971856397)).

### — Base table or view not found

Something went wrong during DB migration. Try to execute the following console command:

```
php artisan migrate
```

### — FreeScout redirects into public/public ("Request exceeded the limit of 10 internal redirects")

This error is mostly related to the Apache web server. In this case check your Apache redirect rules, check or remove all higher-level .htaccess file. Try to add the following to the Apache virtual host configuration: `RewriteBase /`

### — I'm activating (deactivating) a module but it stays inactive (active)

It means that in `/storage/framework/cache/data/` there are files created by a user different from www-data, and www-data user can not completely clear cache. Run the following command to make www-data user an owner of all the FreeScout files:

```
sudo chown -R www-data:www-data /var/www/html
```

### — If you forgot your admin password

Just create a new admin user via console:

```
php artisan freescout:create-user
```

### — FreeScout is crashing as cache files are being created as root

Make sure you don't run any cron jobs under root user.

### — Inline images do not display and attachments lead to 404 errors

Check app logs in Manage » Logs and in Manage » System make sure that directories are writable (see [this issue](https://github.com/freescout-help-desk/freescout/issues/3649#issuecomment-1875491173)).

If you are using Nginx, make sure it has correct [config](#61-nginx).

### — Images are not visible in emails sent to customers

1. Make sure your FreeScout is not protected with Basic HTTP Authentication.
2. Open source code of such email (or download it as EML) and check what does the link to the image look like.

### — Error when uploading attachments: "client intended to send too large body"

See [this](https://github.com/freescout-help-desk/freescout/issues/2109#issuecomment-1420030559).

### — FreeScout displays incorrect time

- Keep in mind that each user has also Timezone settings in the profile.
- Make sure that server time is correct
- Check Timezone in "Manage » Settings"

### — If browser push notifications are not working

- Make sure that HTTPS is configured.
- Make sure user has properly configured Notification Settings.
- Check app logs in Manage » Logs.
- Make sure that "Mute Notifications" option is disabled for the user.

### — Undefined constant "FT\_UID"

Make sure you have `php-imap` extension enabled in web and console PHP: <https://github.com/Webklex/laravel-imap/issues/30#issuecomment-348748107>

If `php-imap` extension can't be enabled on your server by some reason, see [this workaround](https://github.com/freescout-help-desk/freescout/issues/2604#issuecomment-1886662114).

### — Outgoing emails are corrupt / garbled

If you are using PHP's mail() function to send outgoing emails keep in mind that there is a bug in some PHP versions causing outgoing emails to be broken (see [this issue](https://github.com/freescout-help-desk/freescout/issues/1670)). Just upgrade or downgrade your PHP version

### — Emails are not sent and there are many queued jobs in System Status

Make sure your [background jobs](wiki__Background-Jobs.md) are running properly.

### — Emails are not delivered

See [this](wiki__Sending-Issues.md).

### — Emails are not fetched

See [this](wiki__Fetching-Emails.md#troubleshooting-fetching-issues).

### — queue:work is not running

Check running processes using `htop` or `ps aux` console command and see what kind of FreeScout's `artisan` commands are running.

### — FreeScout sends multiple duplicate emails to customers

See [this](https://github.com/freescout-help-desk/freescout/issues/870#issuecomment-786477909).

### — Auto replies are not being sent

Make sure that it's not connected to the [Office Hours](https://freescout.net/module/office-hours/) module or [Noreply Emails](https://freescout.net/module/noreply/) module.

### — FreeScout sends multiple replies to customers

Make sure that in your mailbox Fetching Settings you have correct folder in "IMAP Folder To Save Outgoing Replies". See [this](https://github.com/freescout-help-desk/freescout/issues/2428) or [this](https://github.com/freescout-help-desk/freescout/issues/2422).

### — General error: 2006 MySQL server has gone away

If you are using Cloudflare DO NOT ENABLE *"Security » WAF » Managed Rules » Cloudflare OWASP Core Ruleset"* option as it will cause all kinds of unpredictable issues (see [this](https://github.com/freescout-help-desk/freescout/issues/2566#issuecomment-1396125232)).

### — Composer does not work

When running composer commands always add `--ignore-platform-reqs` flag: `composer install --ignore-platform-reqs`

### — schedule:run uses default path to PHP

Even if you execute `schedule:run` command with a custom path to PHP it will execute commands using the default path:

```
$ /usr/bin/php8.0 /path/to/freescout/installation/artisan schedule:run
Running scheduled command: '/usr/bin/php' 'artisan' freescout:fetch-monitor > '/dev/null' 2>&1
Running scheduled command: '/usr/bin/php' 'artisan' freescout:check-conv-viewers > '/dev/null' 2>&1
Running scheduled command: '/usr/bin/php' 'artisan' freescout:fetch-emails > '/path/to/freescout/installation/storage/logs/fetch-emails.log' 2>&1
Running scheduled command: '/usr/bin/php' 'artisan' queue:work --queue='emails,default,1e0dfc970c9f3c1aca93f5554779bc52' --sleep=5 --tries=1 > '/path/to/freescout/installation/storage/logs/queue-jobs.log' 2>&1
Content-type: text/html; charset=UTF-8
```

See the solution [here](https://github.com/freescout-help-desk/freescout/issues/2196#issuecomment-1243644580).

### — Error 500 when accessing files in /storage/uploads/

The following message will be present in the server log: `/public/storage/.htaccess: Invalid command '<FilesMatch', perhaps misspelled or defined by a module not included in the server configuration`.

It means you are using Apache and `mod_headers` is not enabled - enable it in your Apache.

### — "More than 'max\_user\_connections' active connections" error

See [this](https://github.com/freescout-help-desk/freescout/issues/2906#issuecomment-1506636726).

### — When I reply to a message via FreeScout it shows back up as an unread conversation

Make sure you don't have same folder specified in "IMAP Folders" and "IMAP Folder To Save Outgoing Replies" in your mailbox fetching settings.

### — Emails are send as a plain text instead of HTML

Try to use some other than `PHP's mail function` sending method (See [this issue](https://github.com/freescout-help-desk/freescout/issues/3024)).

### — 'Allowed memory size of NNN bytes exhausted' error when fetching emails

This may happen when among fetched emails there is or there are emails with large attachment(s). Increase `memory_limit` value in php.ini (keep in mind that the console PHP may have it's own php.ini file).

Also adjusting the `APP_FETCHING_BUNCH_SIZE` parameter in the .env file may help (like in [this case](https://github.com/freescout-help-desk/freescout/issues/4343)), the default value for this parameter is 100. Don't forget to [clear cache](wiki__Clearing-the-Cache.md) after changing it.

### — Some modal windows are not loading

Make sure that your server does not set `X-Frame-Options` header or sets `X-Frame-Options` to `SAMEORIGIN` (see [this](https://github.com/freescout-help-desk/freescout/issues/1596)).

### — Android app shows a http access Error: err\_cleartext\_not\_permitted

Configure HTTPS protocol in your FreeScout instance.

### — FreeScout shows "Lost internet connection" error and there is a CORS error in the browser console

![2024-11-10_09-20-41](https://private-user-images.githubusercontent.com/172874623/384665212-cea2b435-e7ae-46b0-a285-4ed291672a0f.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1NjksIm5iZiI6MTc5MzIxMzI2OSwicGF0aCI6Ii8xNzI4NzQ2MjMvMzg0NjY1MjEyLWNlYTJiNDM1LWU3YWUtNDZiMC1hMjg1LTRlZDI5MTY3MmEwZi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYxMDI4JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MTAyOFQxODQ3NDlaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0wYzExYzQ5NjNlNWNjNGU3NDM1NzI0MDRkNTE3ZjNlM2QwZjE5NGJmMzQ2YmJkNDliNDc0ZDE1ZDMwMjM0Nzk2JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZyZXNwb25zZS1jb250ZW50LXR5cGU9aW1hZ2UlMkZwbmcifQ.tos1x3QHTO76Ua7XVy5RmmoVkESdAQmBCNREkkWEPZQ)

It means one of two things: either you have incorrect "APP\_URL" in the .env file or you have not deleted `.js` files after [changing your FreeScout domain](wiki__FAQ.md#how-can-i-change-freescout-domain).

### — Sometimes customer replies are connected to the wrong conversation in FreeScout

Such issue existed in old versions of FreeScout when customer using FreeScout was replying to you (see [this issue](https://github.com/freescout-help-desk/freescout/issues/2375)). In order to avoid this issue you need to update your FreeScout to the latest version and ask your customer to do the same.

Also it may happen if you are using two FreeScout instances cloned from each other - see [this issue](https://github.com/freescout-help-desk/freescout/issues/5383#issuecomment-4353359192).

### — Attachments are showing "Access Denied" message

See [this](https://github.com/freescout-help-desk/freescout/issues/3431#issuecomment-1749636284).

### — FreeScout sends emails infinitely in a loop

Make sure that you don't have any forwardings, routings or autoresponders configured in the email account which you connect to FreeScout (same applies to support agent emails). As it may cause infinite email loops like in [this](https://github.com/freescout-help-desk/freescout/issues/1697#issuecomment-1031719221) or [this case](https://github.com/freescout-help-desk/freescout/issues/4143#issuecomment-2252093100).

The issue also may happen due to misspelled recipient's address - in [such cases](https://github.com/freescout-help-desk/freescout/issues/870#issuecomment-786477909) try to find the exact error message under "Outgoing Emails" (in the dropdown) or in "Manage » Logs » Send Errors".

*Also see [FreeScout FAQ](wiki__FAQ.md), [Sending Issues](wiki__Sending-Issues.md), [Fetching Issues](wiki__Fetching-Emails.md#troubleshooting-fetching-issues) and [Modules Troubleshooting](wiki__FreeScout-Modules.md#4-troubleshooting)*

### — Emails from some customers are not joined into conversations

FreeScout checks `References` header and special marker in the body of the email to join incoming emails into conversations (see [this issue](https://github.com/freescout-help-desk/freescout/issues/4277)).

### — Database size on the disk suddenly became too big

Run the following queries:

```
DELETE FROM activity_logs;
OPTIMIZE TABLE activity_logs;

OPTIMIZE TABLE polycast_events;
```

### — External script or widget does not work when embedded into some FreeScout page due to Content Security Policy (CSP) errors

Open browser console and check Content Security Policy errors. Add the following parameter to the .env file listing all the domains (separating them with the space) mentioned in those errors:

```
APP_CSP_SCRIPT_SRC="external-domain.org some-other-domain.org"
```

After that clear cache.

### — Receiving "The page has expired due to inactivity" upon login

Probably you are using HTTP protocol for your FreeScout instance and most likely you have `SESSION_SECURE_COOKIE=true` in your .env file. Just remove this parameter and clear cache.

### — Untrusted Host "xxx.xxx.xxx.xxx"

Add the following to your .env file and clear cache: `APP_TRUSTED_HOSTS='127.0.0.1,localhost,xxx.xxx.xxx.xxx'`

### — Domain or IP address is not allowed

Add `APP_REMOTE_HOST_WHITE_LIST` parameter to the .env file and crear cache. It's recommended to add both (domain and its IP):
Example:

```
APP_REMOTE_HOST_WHITE_LIST="example.org,12.34.56.78"
```

If you are using Docker you may need to add CIDR to the `APP_REMOTE_HOST_WHITE_LIST`. See [this issue](https://github.com/freescout-help-desk/freescout/issues/5363#issuecomment-4297322622).

### Why do some attachments get underscores added to file extensions?

Underscores are added for security reasons. For example if a PDF file contains JavaScript then its extension will be changed to `.pdf_`.

### "Call to undefined function App\Misc\idn\_to\_ascii()"

Make sure that `intl` extension is installed for both CGI and console PHP.
