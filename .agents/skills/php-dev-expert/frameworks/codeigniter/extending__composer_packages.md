# Creating Composer Packages — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/extending/composer_packages.html

---

# Creating Composer Packages[](#creating-composer-packages "Link to this heading")

You can make the [Code Modules](general__modules.md) you create into Composer packages,
or can create a Composer package for CodeIgniter 4.

## [Folder Structure](#id1)[](#folder-structure "Link to this heading")

Here’s a typical directory structure for a Composer package:

```
your-package-name/
├── .gitattributes
├── .gitignore
├── LICENSE
├── README.md
├── composer.json
├── src/
│   └── YourClass.php
└── tests/
    └── YourClassTest.php
```

## [Creating composer.json](#id2)[](#creating-composer-json "Link to this heading")

In the root of your package directory, create a **composer.json** file. This file
defines metadata about your package and its dependencies.

The `composer init` command helps you create it.

For example, **composer.json** might look like this:

```
{
    "name": "your-vendor/your-package",
    "description": "Your package description",
    "type": "library",
    "license": "MIT",
    "autoload": {
        "psr-4": {
            "YourVendor\\YourPackage\\": "src/"
        }
    },
    "authors": [
        {
            "name": "Your Name",
            "email": "[email protected]"
        }
    ],
    "require": {
        // Any dependencies required by your package go here
    },
    "require-dev": {
        // Any development dependencies (e.g., PHPUnit) go here
    }
}
```

### [Package Name](#id3)[](#package-name "Link to this heading")

The `name` field is important here. Package names are generally written in the
format “vendor-name/package-name” with all lowercase. Here is a common example:

- `your-vendor-name`: The name that identifies the vendor (creator of the package),
  such as your name or your organization.
- `your-package-name`: The name of the package you are creating.

Thus, it is important to make the name unique to distinguish it from other packages.
Uniqueness is especially important when publishing.

### [Namespace](#id4)[](#namespace "Link to this heading")

The package name then determines the vendor namespace in `autoload.psr4`.

If your package name is `your-vendor/your-package`, the vendor namespace must
be `YourVendor`. So you would write like the following:

```
"autoload": {
    "psr-4": {
        "YourVendor\\YourPackage\\": "src/"
    }
},
```

This setting instructs Composer to autoload the source code for your package.

### [Choosing License](#id5)[](#choosing-license "Link to this heading")

If you are not familiar with open source licenses, see <https://choosealicense.com/>.
Many PHP packages, including CodeIgniter, use the MIT license.

## [Preparing Development Tools](#id6)[](#preparing-development-tools "Link to this heading")

There are many tools that help ensure quality code. So you should use them.
You can easily install and configure such tools with
[CodeIgniter DevKit](https://github.com/codeigniter4/devkit).

### [Installing DevKit](#id7)[](#installing-devkit "Link to this heading")

In the root of your package directory, run the following commands:

```
composer config minimum-stability dev
composer config prefer-stable true
composer require --dev codeigniter4/devkit
```

The DevKit installs various Composer packages that helps your development, and
installs templates for them in **vendor/codeigniter4/devkit/src/Template**.
Copy the files in it to your project root folder, and edit them for your needs.

### [Configuring Coding Standards Fixer](#id8)[](#configuring-coding-standards-fixer "Link to this heading")

DevKit provides Coding Standards Fixer with
[CodeIgniter Coding Standard](https://github.com/CodeIgniter/coding-standard)
based on [PHP-CS-Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer).

Copy **vendor/codeigniter4/devkit/src/Template/.php-cs-fixer.dist.php** to your
project root folder.

Create the **build** folder for the cache file:

```
your-package-name/
├── .php-cs-fixer.dist.php
├── build/
```

Open **.php-cs-fixer.dist.php** in your editor, and fix the folder path:

```
--- a/.php-cs-fixer.dist.php
+++ b/.php-cs-fixer.dist.php
@@ -7,7 +7,7 @@ use PhpCsFixer\Finder;
 $finder = Finder::create()
     ->files()
     ->in([
-        __DIR__ . '/app/',
+        __DIR__ . '/src/',
         __DIR__ . '/tests/',
     ])
     ->exclude([
```

That’t it. Now you can run Coding Standards Fixer:

```
vendor/bin/php-cs-fixer fix --ansi --verbose --diff
```

If you add `scripts.cs-fix` in your **composer.json**, you can run it with
`composer cs-fix` command:

```
{
    // ...
    },
    "scripts": {
        "cs-fix": "php-cs-fixer fix --ansi --verbose --diff"
    }
}
```

## [Config Files](#id9)[](#config-files "Link to this heading")

### [Allowing Users to Override Settings](#id10)[](#allowing-users-to-override-settings "Link to this heading")

If your package has a configuration file and you want users to be able to override
the settings, use [`config()`](general__common_functions.md#config "config") with the short classname like `config('YourConfig')`
to call the configuration file.

Users can then override the package configuration by placing a configuration class
with the same short classname in **app/Config** that extends the package Config
class like `YourVendor\YourPackage\Config\YourConfig`.

### [Overriding Settings in app/Config](#id11)[](#overriding-settings-in-app-config "Link to this heading")

If you need to override or add to known configurations in the **app/Config** folder,
you can use [Implicit Registrars](general__configuration.md#registrars).

## [References](#id12)[](#references "Link to this heading")

We have published some official packages. You can use these packages as references
when creating your own packages:

- <https://github.com/codeigniter4/shield>
- <https://github.com/codeigniter4/settings>
- <https://github.com/codeigniter4/tasks>
- <https://github.com/codeigniter4/cache>
