# Preparing for Production - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/deployment/preparing-for-production.html

---

# Preparing for Production

Understand your project structure and configure your site for a live environment

- [Know Your Project](docs__user-guide__quickstart__deployment__preparing-for-production.md#know-your-project)
- [Configure the Environment](docs__user-guide__quickstart__deployment__preparing-for-production.md#configure-the-environment)
- [Disable Debug Mode](#disable-debug-mode)
- [Set Your Application URL](#set-your-application-url)
- [Verify Your Application Key](#verify-your-application-key)
- [Configure Your Database](#configure-your-database)
- [Configure Nginx](docs__user-guide__quickstart__deployment__preparing-for-production.md#configure-nginx)
- [File Permissions](docs__user-guide__quickstart__deployment__preparing-for-production.md#file-permissions)
- [Optimize for Performance](docs__user-guide__quickstart__deployment__preparing-for-production.md#optimize-for-performance)
- [Pre-Deployment Checklist](docs__user-guide__quickstart__deployment__preparing-for-production.md#pre-deployment-checklist)
- [Next Steps](docs__user-guide__quickstart__deployment__preparing-for-production.md#next-steps)

[More...](#)

Your site works locally. Now let's get it ready for the real world. Before deploying, it helps to understand which parts of your project actually matter and what settings to change for production.

## [#](#know-your-project) Know Your Project

An October CMS project contains many directories, but your site really lives in just three:

- **`app/`**: your application code, custom classes, and app-level blueprints
- **`plugins/`**: installed plugins and any custom plugins you build
- **`themes/`**: your theme files (layouts, pages, partials, blueprints, assets)

Everything you have built in this tutorial (the theme, the blueprints, the pages) lives in `themes/`. If you installed any plugins, they are in `plugins/`. These three directories are what make your site yours.

The other directories (`modules/`, `vendor/`) are framework code provided by Composer. They are excluded from version control by default because they can be rebuilt with `composer install` at any time.

## [#](#configure-the-environment) Configure the Environment

Most production settings live in your `.env` file in the project root. Here are the important ones to change:

### [#](#disable-debug-mode) Disable Debug Mode

Debug mode shows detailed error messages during development. In production, those messages expose sensitive information.

```
APP_DEBUG=false
```

With debug mode off, visitors see a clean error page while detailed errors go to your log files.

### [#](#set-your-application-url) Set Your Application URL

```
APP_URL=https://www.yoursite.com
```

Make sure this matches your actual domain with `https://`.

### [#](#verify-your-application-key) Verify Your Application Key

The `APP_KEY` is used for encryption. It is generated during installation, but confirm it exists:

```
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

If it is missing, generate one:

```
php artisan key:generate
```

### [#](#configure-your-database) Configure Your Database

Update with your production database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_production_database
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

## [#](#configure-nginx) Configure Nginx

If your server uses Nginx, October CMS includes a ready-made configuration file at `nginx.conf` in the project root. Copy or reference this file in your Nginx server block to ensure URL rewriting and other settings work correctly.

Apache users do not need to worry about this. October CMS includes an `.htaccess` file that handles URL rewriting automatically.

## [#](#file-permissions) File Permissions

Your web server needs write access to these directories:

- `storage/` (and all subdirectories)
- `bootstrap/cache/`

On most Linux servers:

```
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

The exact user (`www-data`) depends on your server setup.

## [#](#optimize-for-performance) Optimize for Performance

Once your settings are configured, cache them for faster performance:

```
php artisan october:optimize
```

## [#](#pre-deployment-checklist) Pre-Deployment Checklist

Quick summary of everything on this page:

- [ ] `APP_DEBUG` set to `false`
- [ ] `APP_URL` set to your live domain
- [ ] `APP_KEY` is present
- [ ] Database credentials set for production
- [ ] Nginx configured (if applicable)
- [ ] `storage/` and `bootstrap/cache/` are writable
- [ ] `php artisan october:optimize` has been run

## [#](#next-steps) Next Steps

With your configuration in place, head to [Deploying Your Site](docs__user-guide__quickstart__deployment__deploying-your-site.md) for instructions on getting your project onto a live server.

For the full reference on configuration options, see [Configuration](docs__4.x__setup__configuration.md) and [Deployment](docs__4.x__setup__deployment.md) in the developer documentation.

← [Updating the Page](docs__user-guide__quickstart__interactive-features__flash-messages-and-loaders.md)[Deploying Your Site](docs__user-guide__quickstart__deployment__deploying-your-site.md) →
