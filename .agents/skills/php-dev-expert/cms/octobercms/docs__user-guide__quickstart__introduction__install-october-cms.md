# Install October CMS - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/introduction/install-october-cms.html

---

# Install October CMS

Install October CMS and log in for the first time

- [Wizard Installer](docs__user-guide__quickstart__introduction__install-october-cms.md#wizard-installer)
- [DDEV](docs__user-guide__quickstart__introduction__install-october-cms.md#ddev)
- [Using Composer Directly?](docs__user-guide__quickstart__introduction__install-october-cms.md#using-composer-directly)
- [Log Into the Backend](docs__user-guide__quickstart__introduction__install-october-cms.md#log-into-the-backend)
- [Next Steps](docs__user-guide__quickstart__introduction__install-october-cms.md#next-steps)

October CMS can be installed in just a few minutes. Choose the method that suits your setup.

## [#](#wizard-installer) Wizard Installer

The wizard installer is the simplest way to get started, no command line needed.

1. [Download the installer archive  (opens new window)](https://octobercms.com/download) from the October CMS website.
2. Extract the archive to a directory on your web server.
3. Open the directory in your browser (e.g. `http://localhost/mysite`). The setup wizard will launch automatically.
4. Follow the on-screen steps to configure your database and create an administrator account.

When the wizard finishes, your site is ready. Visit the URL to see the frontend, or add `/admin` to log into the admin panel.

You can proceed without a license key to explore October CMS locally. To unlock updates and marketplace access, create an account at [octobercms.com  (opens new window)](https://octobercms.com) and add a license key later.

## [#](#ddev) DDEV

[DDEV  (opens new window)](https://ddev.com/) is a Docker-based local development tool that handles PHP, the database, and the web server in an isolated container. Install [Docker  (opens new window)](https://www.docker.com/get-started/) and [DDEV  (opens new window)](https://ddev.readthedocs.io/en/stable/) first, then run:

```
mkdir my-october-site && cd my-october-site
```

Configure DDEV for a Laravel project:

```
ddev config --project-type=laravel --webserver-type=apache-fpm
```

Start the environment:

```
ddev start
```

Install October CMS:

```
ddev composer create-project october/october
```

Run the installer:

```
ddev artisan october:install --no-interaction
```

Open your site in the browser:

```
ddev launch
```

Your site is now running. Add `/admin` to the URL to access the admin panel and create your first administrator account.

## [#](#using-composer-directly) Using Composer Directly?

If you already have PHP and Composer set up on your machine, you can install October CMS from the command line without DDEV. See the [Installation guide](docs__4.x__setup__installation.md) in the developer documentation.

## [#](#log-into-the-backend) Log Into the Backend

Regardless of which method you used, the backend is where you manage your website. Visit your site's URL followed by `/admin`:

```
http://your-site-url/admin
```

Enter your administrator credentials to access the dashboard, your site's control center.

## [#](#next-steps) Next Steps

Your site is installed and running. Continue to [Exploring the Backend](docs__user-guide__quickstart__backend__backend-tour.md) to start building.

← [Choosing a Text Editor](docs__user-guide__quickstart__introduction__text-editor.md)[Exploring the Backend](docs__user-guide__quickstart__backend__backend-tour.md) →
