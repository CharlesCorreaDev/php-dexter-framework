# Installing & Setting up the Symfony Framework (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/setup.html

---

# Installing & Setting up the Symfony Framework

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/setup.rst)

Screencast

Do you prefer video tutorials? Check out the [Cosmic Coding with Symfony](https://symfonycasts.com/screencast/symfony)
screencast series.

## [Technical Requirements](#technical-requirements "Permalink to this headline")

Before creating your first Symfony application you must:

- Install PHP 8.4 or higher and these PHP extensions (which are installed and
  enabled by default in most PHP 8 installations): [Ctype](https://www.php.net/book.ctype), [iconv](https://www.php.net/book.iconv),
  [PCRE](https://www.php.net/book.pcre), [Session](https://www.php.net/book.session), [SimpleXML](https://www.php.net/book.simplexml), and [Tokenizer](https://www.php.net/book.tokenizer);
- [Install Composer](https://getcomposer.org/download/), which is used to install PHP packages.

Also, [install the Symfony CLI](https://symfony.com/download). This is optional, but it gives you a
helpful binary called `symfony` that provides all tools you need to
develop and run your Symfony application locally.

The `symfony` binary also provides a tool to check if your computer meets all
requirements. Open your console terminal and run this command:

```
1
```

```
$ symfony check:requirements
```

Note

The Symfony CLI is open source, and you can contribute to it in the
[symfony-cli/symfony-cli GitHub repository](https://github.com/symfony-cli/symfony-cli).

## [Creating Symfony Applications](#creating-symfony-applications "Permalink to this headline")

Open your console terminal and run any of these commands to create a new Symfony
application:

```
1
2
3
4
5
```

```
# run this if you are building a traditional web application
$ symfony new my_project_directory --version="8.1.*" --webapp

# run this if you are building a microservice, console application or API
$ symfony new my_project_directory --version="8.1.*"
```

The only difference between these two commands is the number of packages
installed by default. The `--webapp` option installs extra packages to give
you everything you need to build a web application.

If you're not using the Symfony binary, run these commands to create the new
Symfony application using Composer:

```
1
2
3
4
5
6
7
```

```
# run this if you are building a traditional web application
$ composer create-project symfony/skeleton:"8.1.*" my_project_directory
$ cd my_project_directory
$ composer require webapp

# run this if you are building a microservice, console application or API
$ composer create-project symfony/skeleton:"8.1.*" my_project_directory
```

No matter which command you run to create the Symfony application, all of them
will create a new `my_project_directory/` directory, download some dependencies
into it and even generate the basic directories and files you'll need to get
started. In other words, your new application is ready!

Note

The project's cache and logs directory (by default, `<project>/var/cache/`
and `<project>/var/log/`) must be writable by the web server. If you have
any issue, read how to [set up permissions for Symfony applications](current__setup__file_permissions.md).

## [Setting up an Existing Symfony Project](#setting-up-an-existing-symfony-project "Permalink to this headline")

In addition to creating new Symfony projects, you will also work on projects
already created by other developers. In that case, you only need to get the
project code and install the dependencies with Composer. Assuming your team uses
Git, set up your project with the following commands:

```
1
2
3
4
5
6
7
```

```
# clone the project to download its contents
$ cd projects/
$ git clone ...

# make Composer install the project's dependencies into vendor/
$ cd my-project/
$ composer install
```

You'll probably also need to customize your [.env file](current__configuration.md#config-dot-env)
and do a few other project-specific tasks (e.g. creating a database). When
working on an existing Symfony application for the first time, it may be useful
to run this command which displays information about the project:

```
1
```

```
$ php bin/console about
```

## [Running Symfony Applications](#running-symfony-applications "Permalink to this headline")

In production, you should install a web server like Nginx or Apache and
[configure it to run Symfony](current__setup__web_server_configuration.md). This
method can also be used if you're not using the Symfony local web server for
development.

However for local development, the most convenient way of running Symfony is by
using the [local web server](current__setup__symfony_cli.md#symfony-cli-server) provided by the
Symfony CLI tool. This local server provides support for HTTP/2, concurrent
requests, TLS/SSL and automatic generation of security certificates, among
other things.

Open your terminal, move into your new project directory and start the local web
server as follows:

```
1
2
3
4
5
6
7
```

```
$ cd my-project/

# this blocks your terminal with the server logs; press Ctrl+C to stop it
$ symfony server:start

# this starts the server in the background so you can keep using the terminal
$ symfony serve -d
```

Browse your application by visiting the URL displayed by Symfony Server
(for example, `http://localhost:8000/`). You can also open the application
automatically:

```
1
2
3
4
5
```

```
# opens the application URL in your default browser
$ symfony open:local

# starts the server and opens the application in a single command
$ symfony server:start --open
```

Tip

Learn more about all available commands in the
[Symfony CLI documentation](current__setup__symfony_cli.md#symfony-cli-server).

Tip

The web server works with any PHP application, not only Symfony projects,
so it's a very useful generic development tool.

### [Symfony Docker Integration](#symfony-docker-integration "Permalink to this headline")

If you'd like to use Docker with Symfony, see [Using Docker with Symfony](current__setup__docker.md).

## [Installing Packages](#installing-packages "Permalink to this headline")

A common practice when developing Symfony applications is to install packages
(Symfony calls them [bundles](current__bundles.md)) that provide ready-to-use
features. Packages usually require some setup before using them (editing some
file to enable the bundle, creating some file to add some initial config, etc.)

Most of the time this setup can be automated and that's why Symfony includes
[Symfony Flex](https://github.com/symfony/flex), a tool to simplify the installation/removal of packages in
Symfony applications. Technically speaking, Symfony Flex is a Composer plugin
that is installed by default when creating a new Symfony application and which
**automates the most common tasks of Symfony applications**.

Tip

You can also [add Symfony Flex to an existing project](current__setup__flex.md).

Symfony Flex modifies the behavior of the `require`, `update`, and
`remove` Composer commands to provide advanced features. Consider the
following example:

```
1
2
```

```
$ cd my-project/
$ composer require logger
```

If you run that command in a Symfony application which doesn't use Flex, you'll
see a Composer error explaining that `logger` is not a valid package name.
However, if the application has Symfony Flex installed, that command installs
and enables all the packages needed to use the official Symfony logger.

This is possible because lots of Symfony packages/bundles define **"recipes"**,
which are a set of automated instructions to install and enable packages into
Symfony applications. Flex keeps track of the recipes it installed in a
`symfony.lock` file, which must be committed to your code repository.

Symfony Flex recipes are contributed by the community and they are stored in
two public repositories:

- [Main recipe repository](https://github.com/symfony/recipes) is a curated list of recipes for high quality and
  maintained packages. Symfony Flex only looks in this repository by default.
- [Contrib recipe repository](https://github.com/symfony/recipes-contrib) contains all the recipes created by the
  community. All of them are guaranteed to work, but their associated packages
  could be unmaintained. Symfony Flex will ask your permission before installing
  any of these recipes.

Read the [Symfony Recipes documentation](https://github.com/symfony/recipes/blob/master/README.rst) to learn everything about how to
create recipes for your own packages.

### [Symfony Packs](#symfony-packs "Permalink to this headline")

Sometimes a single feature requires installing several packages and bundles.
Instead of installing them individually, Symfony provides **packs**, which are
Composer metapackages that include several dependencies.

For example, to add debugging features in your application, you can run the
`composer require --dev debug` command. This installs the `symfony/debug-pack`,
which in turn installs several packages like `symfony/debug-bundle`,
`symfony/monolog-bundle`, `symfony/var-dumper`, etc.

You won't see the `symfony/debug-pack` dependency in your `composer.json`,
as Flex automatically unpacks the pack. This means that it only adds the real
packages as dependencies (e.g. you will see a new `symfony/var-dumper` in
`require-dev`).

## [Checking Security Vulnerabilities](#checking-security-vulnerabilities "Permalink to this headline")

The `symfony` binary created when you installed the [Symfony CLI](current__setup.md#setup-symfony-cli)
provides a command to check whether your project's dependencies contain any known security
vulnerability:

```
1
```

```
$ symfony check:security
```

A good security practice is to execute this command regularly to be able to
update or replace compromised dependencies as soon as possible. The security
check is done locally by fetching the public [PHP security advisories database](https://github.com/FriendsOfPHP/security-advisories),
so your `composer.lock` file is not sent on the network.

The `check:security` command terminates with a non-zero exit code if any of
your dependencies is affected by a known security vulnerability. This way you
can add it to your project build process and your continuous integration
workflows to make them fail when there are vulnerabilities.

Tip

In continuous integration services, run the `composer audit` command
instead. It doesn't require installing the Symfony CLI and it reports more
vulnerabilities, because Packagist combines the [PHP security advisories database](https://github.com/FriendsOfPHP/security-advisories)
used by `check:security` with the [GitHub Advisory Database](https://github.com/advisories).

## [Symfony LTS Versions](#symfony-lts-versions "Permalink to this headline")

According to the [Symfony release process](current__contributing__code__releases.md),
"long-term support" (or LTS for short) versions are published every two years.
Check out the [Symfony releases](https://symfony.com/releases) to know which is the latest LTS version.

By default, the command that creates new Symfony applications uses the latest
stable version. If you want to use an LTS version, add the `--version` option:

```
1
2
3
4
5
6
7
8
```

```
# use the most recent LTS version
$ symfony new my_project_directory --version=lts

# use the 'next' Symfony version to be released (still in development)
$ symfony new my_project_directory --version=next

# you can also select an exact specific Symfony version
$ symfony new my_project_directory --version="7.4.*"
```

The `lts` and `next` shortcuts are only available when using Symfony to
create new projects. If you use Composer, you need to tell the exact version:

```
1
```

```
$ composer create-project symfony/skeleton:"7.4.*" my_project_directory
```

## [The Symfony Demo application](#the-symfony-demo-application "Permalink to this headline")

[The Symfony Demo Application](https://github.com/symfony/demo) is a fully-functional application that shows the
recommended way to develop Symfony applications. It's a great learning tool for
Symfony newcomers and its code contains tons of comments and helpful notes.

Run this command to create a new project based on the Symfony Demo application:

```
1
```

```
$ symfony new my_project_directory --demo
```

## [Start Coding!](#start-coding "Permalink to this headline")

With setup behind you, it's time to [Create your first page in Symfony](current__page_creation.md).

## [Learn More](#learn-more "Permalink to this headline")

- [Using Docker with Symfony](current__setup__docker.md)
- [Configuring a Web Server](current__setup__web_server_configuration.md)
- [Upgrading a Third-Party Bundle for a Major Symfony Version](current__setup__bundles.md)
- [Setting up or Fixing File Permissions](current__setup__file_permissions.md)
- [Upgrading Existing Applications to Symfony Flex](current__setup__flex.md)
- [How To Configure and Use Flex Private Recipe Repositories](current__setup__flex_private_recipes.md)
- [Using Symfony with Homestead/Vagrant](current__setup__homestead.md)
- [Symfony CLI](current__setup__symfony_cli.md)
- [How to Install or Upgrade to the Latest, Unreleased Symfony Version](current__setup__unstable_versions.md)
- [Upgrading a Major Version (e.g. 6.4.0 to 7.0.0)](current__setup__upgrade_major.md)
- [Upgrading a Minor Version (e.g. 6.3.0 to 6.4.0)](current__setup__upgrade_minor.md)
- [Upgrading a Patch Version (e.g. 6.0.0 to 6.0.1)](current__setup__upgrade_patch.md)

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
