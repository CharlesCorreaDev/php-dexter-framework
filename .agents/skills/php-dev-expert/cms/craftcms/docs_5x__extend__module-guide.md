# How to Build a Module | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/module-guide

---

# How to Build a Module

- ### On this Page

  - [Preparation](docs_5x__extend__module-guide.md#preparation)
  - [Scaffolding](docs_5x__extend__module-guide.md#scaffolding)
  - [Set up class autoloading](docs_5x__extend__module-guide.md#set-up-class-autoloading)
  - [The Module class](docs_5x__extend__module-guide.md#the-module-class)
  - [Further Reading](docs_5x__extend__module-guide.md#further-reading)

Functionally, modules are every bit as capable as [plugins](docs_5x__extend__plugin-guide.md), but they are best suited for project-specific extensions or customizations as opposed to public, distributable packages.

At a technical level, modules (a [Yii concept  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-modules)) are registered with Craft and initialized alongside the application, giving them an opportunity to observe, supplement, and change what it does.

## [#](#preparation)Preparation

Two characteristics must be decided before you begin work on a module:

Namespace
:   The root namespace that your module’s classes will live in. Note that this should *not* begin with `craft\`; use something that identifies you (the developer), or the project.
:   See the [PSR-4  (opens new window)](https://www.php-fig.org/psr/psr-4/) autoloading specification for details.

Module ID
:   Something that uniquely identifies the module within your project. IDs must begin with a letter and contain only lowercase letters, numbers, and dashes, and should be `kebab-cased`.
:   The module ID will become the first segment in [controller action](docs_5x__extend__controllers.md) paths. Avoid names that will conflict with Craft’s core [controllers  (opens new window)](https://github.com/craftcms/cms/tree/develop/src/controllers) or the handles of any installed plugins (e.g. `app` would conflict with [craft\controllers\AppController  (opens new window)](https://docs.craftcms.com/api/v5/craft-controllers-appcontroller.html), and `commerce` would collide with [Commerce](https://craftcms.com/docs/commerce/5.x/)).

As an alternative to modules, private [plugins](docs_5x__extend__plugin-guide.md) provide all the functionality of a regular plugin, but are intended to be tracked as part of a project rather than distributed.

## [#](#scaffolding)Scaffolding

If this is your first time setting up a module, consider using the [Generator](docs_5x__extend__generator.md)—it will prompt you for all of the required information, and leave you with a nicely-organized workspace.

php craft make module

Copy

To create a module, create a new directory for it somewhere within your Craft project, such as `modules/<ModuleID>/`. For example, if your [module ID](#preparation) is `foo`, you might set it up like this:

```
my-project
├── modules
│   └── foo
│       └── Module.php
├── templates
└── ...
```

## [#](#set-up-class-autoloading)Set up class autoloading

Next up, you need to tell Composer how to find your module’s classes by setting the [`autoload`  (opens new window)](https://getcomposer.org/doc/04-schema.md#autoload) field in your project’s `composer.json` file. Unlike a plugin, modules don’t need their own `composer.json` file.

If your module’s namespace is `foo`, and it’s located at `modules/foo/`, this is what you should add:

```
{
  // ...
  "autoload": {
    "psr-4": {
      "foo\\": "modules/foo/"
    }
  }
}
```

With that in place, go to your project’s directory in your terminal, and run the following command:

```
composer dump-autoload -a
```

That will tell Composer to update its class autoloader script based on your new `autoload` mapping.

## [#](#the-module-class)The Module class

The `Module.php` file is your module’s entry point for the system. Its `init()` method is the best place to register event listeners, and any other steps it needs to take to initialize itself.

Use this template as a starting point for your `Module.php` file:

```
namespace foo;

use Craft;

class Module extends \yii\base\Module
{
    public function init()
    {
        // Define a custom alias named after the namespace
        Craft::setAlias('@foo', __DIR__);

        // Set the controllerNamespace based on whether this is a console or web request
        if (Craft::$app->getRequest()->getIsConsoleRequest()) {
            $this->controllerNamespace = 'foo\\console\\controllers';
        } else {
            $this->controllerNamespace = 'foo\\controllers';
        }

        parent::init();

        // Custom initialization code goes here...
    }
}
```

Replace `foo` with your module’s actual namespace, and `'@foo'` with an [alias  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-aliases) name based on your actual namespace (with any `\`s converted to `/`s).

### [#](#initialization)Initialization

Most initialization logic belongs in your module’s `init()` method.

However, there are some situations where this doesn’t guarantee a certain part of the application is ready (another plugin, for instance). Conversely, a module that isn’t [bootstrapped](#update-the-application-config) at the beginning of a request may have `init()` called too late to listen to [craft\web\Application::EVENT\_INIT  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-application.html#event-init), and would never be notified that the app is indeed ready.

In those cases, it’s best to register a callback via [craft\base\ApplicationTrait::onInit()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-applicationtrait.html#method-oninit):

```
namespace foo;

use Craft;

class Module extends \yii\base\Module
{
    public function init()
    {
        // ...

        // Defer some setup tasks until Craft is fully initialized:
        Craft::$app->onInit(function() {
            // ...
        });
    }
}
```

If Craft has already fully initialized, your callback will be invoked immediately.

In particular, avoid creating [element queries](docs_5x__development__element-queries.md) or causing the [Twig environment](docs_5x__development__twig.md) to be loaded from your `init()` method. Both can result in race conditions and incomplete initialization.

### [#](#update-the-application-config)Update the application config

You can add your module to your project’s [application configuration](docs_5x__configure.md#application-configuration) by listing it in the [modules  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-module#modules-detail) and [bootstrap  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-application#bootstrap-detail) arrays. For example, if your module ID is `foo` and its Module class name is `foo\Module`, this is what you should add to `config/app.php`:

```
return [
    // ...
    'modules' => [
        'foo' => foo\Module::class,
    ],
    'bootstrap' => [
        'foo',
    ],
];
```

If your module doesn’t need to get loaded on *every* request (say, because it only provides controllers), you can remove its ID from the `bootstrap` array, and lazily instantiate it via `foo\Module::getInstance()`. Keep in mind that event listeners in your module’s `init()` method are only attached once it is initialized, which can lead to “missed” events.

## [#](#further-reading)Further Reading

To learn more about modules, see the [Yii documentation  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-modules).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/module-guide.md)
