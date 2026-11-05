# Composer Installation — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/installing_composer.html

---

# Composer Installation[](#composer-installation "Link to this heading")

Composer can be used in two ways to install CodeIgniter4 on your system.

Important

CodeIgniter4 requires Composer 2.0.14 or later.

Note

If you are not familiar with Composer, we recommend you read
[Basic usage](https://getcomposer.org/doc/01-basic-usage.md) first.

The first technique describes creating a skeleton project (app starter)
using CodeIgniter4, that you would then use as the base for a new webapp.
The second technique described below lets you add CodeIgniter4 to an existing
webapp,

Note

If you are using a Git repository to store your code, or for
collaboration with others, then the **vendor** folder would normally
be “git ignored”. In such a case, you will need to do a `composer install`
(or `composer update` if you want to update all Composer dependencies) when
you clone the repository to a new system.

## [App Starter](#id9)[](#app-starter "Link to this heading")

The [CodeIgniter 4 app starter](https://github.com/codeigniter4/appstarter)
repository holds a skeleton application, with a composer dependency on
the latest released version of the framework.

This installation technique would suit a developer who wishes to start
a new CodeIgniter4 based project.

### [Installation](#id10)[](#installation "Link to this heading")

In the folder above your project root:

```
composer create-project codeigniter4/appstarter project-root
```

The command above will create a **project-root** folder.

If you omit the “project-root” argument, the command will create an
“appstarter” folder, which can be renamed as appropriate.

Note

Before v4.4.0, CodeIgniter autoloader did not allow special
characters that are illegal in filenames on certain operating systems.
The symbols that can be used are `/`, `_`, `.`, `:`, `\` and space.
So if you installed CodeIgniter under the folder that contains the special
characters like `(`, `)`, etc., CodeIgniter didn’t work. Since v4.4.0,
this restriction has been removed.

Important

When you deploy to your production server, don’t forget to run the
following command:

```
composer install --no-dev
```

The above command will remove the Composer packages only for development
that are not needed in the production environment. This will greatly reduce
the vendor folder size.

#### Installing Previous Versions[](#installing-previous-versions "Link to this heading")

For example, you may want to install v4.4.8 after v4.5.0 has been released.

In that case, specify the version in the command:

```
composer create-project codeigniter4/appstarter:4.4.8 project-root
```

Then, open **composer.json** in your project root folder, and specify
the framework version:

```
"require": {
    ...
    "codeigniter4/framework": "4.4.8"
},
```

Then, run the `composer update` command.

Note

When you use a fixed version number like `"codeigniter4/framework": "4.4.8"`
in your **composer.json**, `composer update` command will not update the
framework to the latest version. See [Writing Version Constraints](https://getcomposer.org/doc/articles/versions.md#writing-version-constraints) for how to specify the version.

### [Initial Configuration](#id11)[](#initial-configuration "Link to this heading")

After installation, a few initial configurations are required.
See [Initial Configuration](installation__running.md#initial-configuration) for the details.

### [Upgrading](#id12)[](#upgrading "Link to this heading")

Whenever there is a new release, then from the command line in your project root:

```
composer update
```

Read the [upgrade instructions](installation__upgrading.md) and [change log](changelogs__index.md),
and check Breaking Changes and Enhancements.

#### Upgrading to a Specified Version[](#upgrading-to-a-specified-version "Link to this heading")

For example, you may want to upgrade from v4.4.7 to v4.4.8 after v4.5.0 has been released.

In that case, open **composer.json** in your project root folder, and specify
the framework version:

```
"require": {
    ...
    "codeigniter4/framework": "4.4.8"
},
```

Then, run the `composer update` command.

Note

When you use a fixed version number like `"codeigniter4/framework": "4.4.8"`
in your **composer.json**, `composer update` command will not update the
framework to the latest version. See [Writing Version Constraints](https://getcomposer.org/doc/articles/versions.md#writing-version-constraints) for how to specify the version.

### [Pros](#id13)[](#pros "Link to this heading")

Simple installation; easy to update.

### [Cons](#id14)[](#cons "Link to this heading")

You still need to check for file changes in the **project space**
(root, app, public, writable) and merge them after updating.

Note

There are some third-party CodeIgniter modules available to assist
with merging changes to the project space:
[Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [Structure](#id15)[](#structure "Link to this heading")

Folders in your project after set up:

- app, public, tests, writable
- vendor/codeigniter4/framework/system

### [Latest Dev](#id16)[](#latest-dev "Link to this heading")

The App Starter repo comes with a `builds` scripts to switch Composer sources between the
current stable release and the latest development branch of the framework. Use this script
for a developer who is willing to live with the latest unreleased changes, which may be unstable.
This way you can help find bugs and improve new features.

The [development user guide](https://codeigniter4.github.io/CodeIgniter4/) is accessible online.
Note that this differs from the released user guide, and will pertain to the
develop branch explicitly.

Before running the script, check `$files`, which is the list of files to be changed.
This is useful if you have additional places in the code that mention the directory with the framework.

Note

You should not rely on the version of the framework in your project
- the development code may contain an incorrect number.

#### Update for Latest Dev[](#update-for-latest-dev "Link to this heading")

In your project root:

```
php builds development
```

The command above will update **composer.json** to point to the `develop` branch of the
working repository, and update the corresponding paths in config and XML files.

After using the `builds` command be sure to run `composer update` to sync your vendor
folder with the latest target build. Then, check the [Upgrading From a Previous Version](installation__upgrading.md) and update project
files if necessary.

#### Next Minor Version[](#next-minor-version "Link to this heading")

If you want to use the next minor version branch:

```
php builds next
```

And run `composer update` to sync your vendor
folder with the latest target build. Then, check the Upgrading Guide
(**user\_guide\_src/source/installation/upgrade\_{version}.rst**) and
update project files if necessary.

#### Revert to Stable Release[](#revert-to-stable-release "Link to this heading")

To revert the changes run:

```
php builds release
```

## [Adding CodeIgniter4 to an Existing Project](#id17)[](#adding-codeigniter4-to-an-existing-project "Link to this heading")

The same [CodeIgniter 4 framework](https://github.com/codeigniter4/framework)
repository described in “Manual Installation” can also be added to an
existing project using Composer.

### [Installation](#id18)[](#id1 "Link to this heading")

Develop your app inside the `app` folder, and the `public` folder
will be your document root.

In your project root:

```
composer require codeigniter4/framework
```

Important

When you deploy to your production server, don’t forget to run the
following command:

```
composer install --no-dev
```

The above command will remove the Composer packages only for development
that are not needed in the production environment. This will greatly reduce
the vendor folder size.

### [Setting Up](#id19)[](#setting-up "Link to this heading")

> 1. Copy the **app**, **public**, **tests** and **writable** folders from **vendor/codeigniter4/framework** to your project root
> 2. Copy the **env**, **phpunit.dist.xml** and **spark** files, from **vendor/codeigniter4/framework** to your project root
> 3. You will have to adjust the `$systemDirectory` property in **app/Config/Paths.php** to refer to the vendor one, e.g., `__DIR__ . '/../../vendor/codeigniter4/framework/system'`.

### [Initial Configuration](#id20)[](#id2 "Link to this heading")

A few initial configurations are required.
See [Initial Configuration](installation__running.md#initial-configuration) for the details.

### [Upgrading](#id21)[](#adding-codeigniter4-upgrading "Link to this heading")

Whenever there is a new release, then from the command line in your project root:

```
composer update
```

Read the [upgrade instructions](installation__upgrading.md) and [change log](changelogs__index.md),
and check Breaking Changes and Enhancements.

#### Upgrading to a Specified Version[](#id4 "Link to this heading")

For example, you may want to upgrade from v4.4.7 to v4.4.8 after v4.5.0 has been released.

In that case, open **composer.json** in your project root folder, and specify
the framework version:

```
"require": {
    ...
    "codeigniter4/framework": "4.4.8"
},
```

Then, run the `composer update` command.

### [Pros](#id22)[](#id5 "Link to this heading")

Relatively simple installation; easy to update.

### [Cons](#id23)[](#id6 "Link to this heading")

You still need to check for file changes in the **project space**
(root, app, public, writable) after updating.

Note

There are some third-party CodeIgniter modules available to assist
with merging changes to the project space:
[Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [Structure](#id24)[](#id8 "Link to this heading")

Folders in your project after set up:

- app, public, tests, writable
- vendor/codeigniter4/framework/system

## [Translations Installation](#id25)[](#translations-installation "Link to this heading")

If you want to take advantage of the system message translations,
they can be added to your project in a similar fashion.

From the command line inside your project root:

```
composer require codeigniter4/translations
```

Copy the **vendor/codeigniter4/translations/Language** folder contents in it to your **app/Language** folder.
These will be updated along with the framework whenever you do a `composer update`.
