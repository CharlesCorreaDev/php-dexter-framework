# Installation - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/setup/installation.html

---

# Installation

Learn how to install October CMS on a server.

- [Minimum System Requirements](docs__4.x__setup__installation.md#minimum-system-requirements)
- [Installing October CMS](docs__4.x__setup__installation.md#installing-october-cms)
- [Installing with DDEV](docs__4.x__setup__installation.md#installing-with-ddev)
- [Wizard Installation](docs__4.x__setup__installation.md#wizard-installation)
- [Troubleshooting Installation](docs__4.x__setup__installation.md#troubleshooting-installation)

[#### Installation Tutorial

This video describes how to create a project, purchase a license and install October CMS for the first time.

Watch the tutorial](https://www.youtube.com/watch?v=RHUwCvo7xng)

## [#](#minimum-system-requirements) Minimum System Requirements

Before installing October CMS, ensure the target system meets the minimum requirements:

- PHP version 8.2.0 or higher
- Composer 2.0 or higher
- PDO PHP Extension
- cURL PHP Extension
- OpenSSL PHP Extension
- Mbstring PHP Extension
- ZipArchive PHP Extension
- GD PHP Extension
- SimpleXML PHP Extension.

Supported database servers:

- MySQL 5.7 or MariaDB 10.2. For older versions of MySQL or MariaDB, you may need to [configure the index lengths](docs__4.x__setup__database-config.md#oc-index-lengths-using-mysql-mariadb) to support the utf8mb4 character set.
- PostgreSQL 9.6
- SQLite 3.8.8.

Supported web servers:

- Apache
- Nginx
- Lighttpd
- Microsoft IIS

## [#](#installing-october-cms) Installing October CMS

You should configure a virtual host on the web server to access the installation directory. For local development you can use [DDEV](#installing-with-ddev), [Valet  (opens new window)](https://laravel.com/docs/valet), [Laragon  (opens new window)](https://laragon.org/) or the built-in Laravel development server.

October CMS is a PHP web application that uses [Composer  (opens new window)](http://getcomposer.org/) to manage its dependencies. Ensure that Composer is installed before you begin. The [License Key  (opens new window)](https://octobercms.com/help/site/projects#project-id) will be required to complete the installation.

To install the platform, initialize a project using the `create-project` command in the terminal. The following command creates a new project in a directory called *myoctober*:

```
composer create-project october/october myoctober
```

When the command finishes, enter the project directory:

```
cd myoctober
```

Run the installation command:

```
php artisan october:install
```

The last step is the migration command that will initialize the database. Alternatively, October CMS can initialize the database when you first access the backend panel.

```
php artisan october:migrate
```

When the process finishes, you can access the backend panel in a browser and create the administrator user profile. If you are using the built-in web server, you can launch it with the following command:

```
php artisan serve
```

If you are installing the platform on a production web server, review the recommendations listed in the [Production Configuration](docs__4.x__setup__configuration.md#production-configuration) article.

## [#](#installing-with-ddev) Installing with DDEV

Since the web server runs inside a container, commands are called using `ddev artisan` and `ddev composer` instead of `php artisan` and `composer`.

[DDEV  (opens new window)](https://ddev.com/) is a Docker-based tool that provisions the web server, PHP and database for a local development environment. It is a good choice when you don't want to install PHP and Composer on your operating system. Install [Docker  (opens new window)](https://www.docker.com/get-started/) and [DDEV  (opens new window)](https://ddev.readthedocs.io/en/stable/users/install/) before you begin.

Create a directory for the project and enter it. The directory name becomes the project name and local site address.

```
mkdir myoctober && cd myoctober
```

Configure the environment using the Laravel project type, which October CMS is compatible with.

```
ddev config --project-type=laravel --webserver-type=apache-fpm
```

Start the containers. The first run may take a few minutes while the images are downloaded.

```
ddev start
```

Install October CMS in the project directory.

```
ddev composer create-project october/october ./
```

Run the installation command.

```
ddev artisan october:install --no-interaction
```

Finally, open the website in a browser.

```
ddev launch
```

## [#](#wizard-installation) Wizard Installation

[#### Wizard Tutorial

This video guides you through the process of installing October CMS using the easy-to-use Wizard installer.

Watch the tutorial](https://www.youtube.com/watch?v=ypyOiVCxaQg)

The wizard installation is an alternative way to install October CMS without using Composer. It is simpler than the command-line installation and doesn't require any special skills.

1. Prepare a directory on your server that is empty. It can be a sub-directory, domain root or a sub-domain.
2. [Download the installer archive file  (opens new window)](https://octobercms.com/download).
3. Unpack the installer archive to the prepared directory.
4. Grant writing permissions on the installation directory and all its subdirectories and files.
5. Navigate to the `install.php` script in your web browser.
6. Follow the installation instructions.

![image](https://github.com/octobercms/docs/blob/develop/images/wizard-installer.png?raw=true)

## [#](#troubleshooting-installation) Troubleshooting Installation

Several typical issues can occur during or after installation.

The installation freezes after entering the license key

It can happen in some environments when pasting the license key contents. Press the ENTER key several times to allow the installation process to continue.

An error "Unable to get local issuer certificate" is displayed during installation

The complete error may read `cURL error 60: SSL certificate problem: unable to get local issuer certificate`.

Download [this certificate file  (opens new window)](https://curl.se/ca/cacert.pem) and save it as `cacert.pem`. Open your **php.ini** file and insert or edit the following line. You may need to restart Apache for the changes to take effect.

```
curl.cainfo = "/path/to/cacert.pem"
```

An error "Specified key was too long" is displayed during migration

The complete error may read `SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes`

This can happen with older versions of MySQL or MariaDB. [Configuring the index lengths](docs__4.x__setup__database-config.md#index-lengths-using-mysql-mariadb) to support the utf8mb4 character set can help to resolve this issue.

A blank screen is displayed when opening the application

Check the permissions are set correctly on the /storage files and subdirectories. They must be writable for the web server.

Invalid security token error when logging in

Check to ensure no missing subdirectories in the storage/framework path. You may need to add the [sessions, cache and views directories  (opens new window)](https://github.com/octobercms/october-private/tree/develop/storage/framework).

The backend panel displays "Page not found" (404)

If the application cannot find the database then a 404 page will be shown for the back-end. Try enabling [debug mode](docs__4.x__setup__configuration.md#debug-mode) to see the underlying error message.

An error 500 is displayed when updating the application

The request timeout on the web server should be increased or disabled. For example, Apache's FastCGI sometimes has the -idle-timeout option set to 30 seconds.

Zend OPcache API is restricted by "restrict\_api" configuration directive

This issue can appear when internals try to use the OPcache internals. This can be disabled by setting the **force\_bytecode\_invalidation** configuration to `false` inside the **config/cms.php** file.

Invalid credentials (HTTP 403) for '...", aborting.

This error can appear in Composer when the **auth.json** file is missing on your server or your project license has expired, try logging in to your account and check that the project has an active license. If the license is active, you can reset it with the `project:set` artisan command.

#### [#](#see-also) See Also

- [Production Configuration](docs__4.x__setup__configuration.md#production-configuration)
- [DDEV Documentation  (opens new window)](https://ddev.readthedocs.io/en/stable/)

[Directory Structure](docs__4.x__setup__directory-structure.md) →
