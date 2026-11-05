# Migrating a Laravel Project - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/resources/migrate-laravel-project.html

---

# Migrating a Laravel Project

How to move an existing Laravel App or Project to October CMS

- [Install Laravel 12 and then October Rain](docs__4.x__resources__migrate-laravel-project.md#install-laravel-12-and-then-october-rain)
- [Authenticate and Install October CMS](docs__4.x__resources__migrate-laravel-project.md#authenticate-and-install-october-cms)
- [Replace Illuminate references with Rain Library](docs__4.x__resources__migrate-laravel-project.md#replace-illuminate-references-with-rain-library)
- [Update Application Class](#update-application-class)
- [Register the System Module](#register-the-system-module)
- [Publish October CMS Files](docs__4.x__resources__migrate-laravel-project.md#publish-october-cms-files)
- [Final Steps](docs__4.x__resources__migrate-laravel-project.md#final-steps)
- [Extra Steps](#extra-steps)

[More...](#)

The following guide can be used to install October CMS v4 atop an existing Laravel 12 application. This is useful if you want to keep the same database without losing data or just prefer to use Laravel as a starting point.

The significant steps involve replacing Laravel’s Illuminate package with October’s Rain package, which represents an extended technology version of Laravel and adds the necessary core features to run October CMS.

Be sure to follow this guide carefully, as slight differences exist in class names.

## [#](#install-laravel-12-and-then-october-rain) Install Laravel 12 and then October Rain

To get started, assume we have a brand new Laravel installation with the following command:

```
composer create-project laravel/laravel:^12.0 mylaravel
```

In the newly created directory, require the October CMS Rain library.

```
cd mylaravel
composer require october/rain
```

## [#](#authenticate-and-install-october-cms) Authenticate and Install October CMS

Authenticate with the October CMS gateway by setting your project key.

```
php artisan project:set <license key>
```

Require all the October CMS modules.

```
composer require october/all
```

When prompted to trust composer/installers enter `Y` for yes.

```
Do you trust "composer/installers" to execute code and wish to enable it now?
```

## [#](#replace-illuminate-references-with-rain-library) Replace Illuminate references with Rain Library

The following steps are used to replace Illuminate with Rain.

### [#](#update-application-class) Update Application Class

In the file **bootstrap/app.php** the `Illuminate\Foundation\Application` class should be replaced with `October\Rain\Foundation\Application`.

```
// File bootstrap/app.php

// Replace
use Illuminate\Foundation\Application;

// With
use October\Rain\Foundation\Application;
```

Laravel 12 no longer includes the HTTP kernel, console kernel and exception handler files. The October application class registers its own versions of these automatically, so the rest of the file can stay the same.

### [#](#register-the-system-module) Register the System Module

In the file **bootstrap/providers.php** the `System\ServiceProvider` class should be added to the list of providers.

```
// File bootstrap/providers.php

return [
    System\ServiceProvider::class,
    App\Providers\AppServiceProvider::class,
];
```

## [#](#publish-october-cms-files) Publish October CMS Files

The following steps will copy the vendor files from October CMS. To publish the files, follow these steps:

1. Open the [October CMS public repo  (opens new window)](https://github.com/octobercms/october)
2. Navigate to **Code → Download ZIP**
3. Save the zip and open it locally

Copy the following folders from the zip file.

- **config/**
- **plugins/**
- **themes/**

## [#](#final-steps) Final Steps

Assuming that your database is configured and running, run the October CMS migration.

```
php artisan october:migrate
```

Next, to make CMS pages available to the frontend, remove or comment out the default route in the file **routes/web.php**.

Now you can open the `/admin` route to set up the administrator account.

### [#](#extra-steps) Extra Steps

Some optional steps to configure your system:

- If you plan on using the default Laravel path for views, add `resource_path('views')` to the `paths` array in the **config/view.php** file.

#### [#](#see-also) See Also

- [Laravel 12 Installation  (opens new window)](https://laravel.com/docs/12.x/installation)

← [Development Workflow](docs__4.x__resources__development-workflow.md)[Debugbar](docs__4.x__resources__debugbar.md) →
