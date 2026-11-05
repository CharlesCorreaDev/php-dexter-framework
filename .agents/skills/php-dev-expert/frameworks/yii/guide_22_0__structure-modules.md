# Application Structure: Modules | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/structure-modules

---

0

# Modules [¶](#modules)

Modules are self-contained software units that consist of [models](guide_22_0__structure-models.md), [views](guide_22_0__structure-views.md),
[controllers](guide_22_0__structure-controllers.md), and other supporting components. End users can access the controllers
of a module when it is installed in [application](guide_22_0__structure-applications.md). For these reasons, modules are
often viewed as mini-applications. Modules differ from [applications](guide_22_0__structure-applications.md) in that
modules cannot be deployed alone and must reside within applications.

## Creating Modules [¶](#creating-modules)

A module is organized as a directory which is called the [base path](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$basePath-detail) of the module.
Within the directory, there are sub-directories, such as `controllers`, `models`, `views`, which hold controllers,
models, views, and other code, just like in an application. The following example shows the content within a module:

```
forum/
    Module.php                   the module class file
    controllers/                 containing controller class files
        DefaultController.php    the default controller class file
    models/                      containing model class files
    views/                       containing controller view and layout files
        layouts/                 containing layout view files
        default/                 containing view files for DefaultController
            index.php            the index view file
```

### Module Classes [¶](#module-classes)

Each module should have a unique module class which extends from [yii\base\Module](https://www.yiiframework.com/doc/api/22.0/yii-base-module). The class should be located
directly under the module's [base path](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$basePath-detail) and should be [autoloadable](guide_22_0__concept-autoloading.md).
When a module is being accessed, a single instance of the corresponding module class will be created.
Like [application instances](guide_22_0__structure-applications.md), module instances are used to share data and components
for code within modules.

The following is an example how a module class may look like:

```
namespace app\modules\forum;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        $this->params['foo'] = 'bar';
        // ...  other initialization code ...
    }
}
```

If the `init()` method contains a lot of code initializing the module's properties, you may also save them in terms
of a [configuration](guide_22_0__concept-configurations.md) and load it with the following code in `init()`:

```
public function init()
{
    parent::init();
    // initialize the module with the configuration loaded from config.php
    \Yii::configure($this, require __DIR__ . '/config.php');
}
```

where the configuration file `config.php` may contain the following content, similar to that in an
[application configuration](guide_22_0__structure-applications.md#application-configurations).

```
<?php
return [
    'components' => [
        // list of component configurations
    ],
    'params' => [
        // list of parameters
    ],
];
```

### Controllers in Modules [¶](#controllers-in-modules)

When creating controllers in a module, a convention is to put the controller classes under the `controllers`
sub-namespace of the namespace of the module class. This also means the controller class files should be
put in the `controllers` directory within the module's [base path](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$basePath-detail).
For example, to create a `post` controller in the `forum` module shown in the last subsection, you should
declare the controller class like the following:

```
namespace app\modules\forum\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    // ...
}
```

You may customize the namespace of controller classes by configuring the [yii\base\Module::$controllerNamespace](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$controllerNamespace-detail)
property. In case some of the controllers are outside of this namespace, you may make them accessible
by configuring the [yii\base\Module::$controllerMap](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$controllerMap-detail) property, similar to [what you do in an application](guide_22_0__structure-applications.md#controller-map).

### Views in Modules [¶](#views-in-modules)

Views in a module should be put in the `views` directory within the module's [base path](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$basePath-detail).
For views rendered by a controller in the module, they should be put under the directory `views/ControllerID`,
where `ControllerID` refers to the [controller ID](guide_22_0__structure-controllers.md#routes). For example, if
the controller class is `PostController`, the directory would be `views/post` within the module's
[base path](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$basePath-detail).

A module can specify a [layout](guide_22_0__structure-views.md#layouts) that is applied to the views rendered by the module's
controllers. The layout should be put in the `views/layouts` directory by default, and you should configure
the [yii\base\Module::$layout](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$layout-detail) property to point to the layout name. If you do not configure the `layout` property,
the application's layout will be used instead.

### Console commands in Modules [¶](#console-commands-in-modules)

Your module may also declare commands, that will be available through the [Console](guide_22_0__tutorial-console.md) mode.

In order for the command line utility to see your commands, you will need to change the [yii\base\Module::$controllerNamespace](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$controllerNamespace-detail)
property, when Yii is executed in the console mode, and point it to your commands namespace.

One way to achieve that is to test the instance type of the Yii application in the module's `init()` method:

```
public function init()
{
    parent::init();
    if (Yii::$app instanceof \yii\console\Application) {
        $this->controllerNamespace = 'app\modules\forum\commands';
    }
}
```

Your commands will then be available from the command line using the following route:

```
yii <module_id>/<command>/<sub_command>
```

## Using Modules [¶](#using-modules)

To use a module in an application, simply configure the application by listing the module in
the [modules](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$modules-detail) property of the application. The following code in the
[application configuration](guide_22_0__structure-applications.md#application-configurations) uses the `forum` module:

```
[
    'modules' => [
        'forum' => [
            'class' => 'app\modules\forum\Module',
            // ... other configurations for the module ...
        ],
    ],
]
```

> **Info:** To connect console commands of your module,
> you also need to include it in the [console application configuration](guide_22_0__tutorial-console.md#configuration)

The [modules](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$modules-detail) property takes an array of module configurations. Each array key
represents a *module ID* which uniquely identifies the module among all modules in the application, and the corresponding
array value is a [configuration](guide_22_0__concept-configurations.md) for creating the module.

### Routes [¶](#routes)

Like accessing controllers in an application, [routes](guide_22_0__structure-controllers.md#routes) are used to address
controllers in a module. A route for a controller within a module must begin with the module ID followed by
the [controller ID](guide_22_0__structure-controllers.md#controller-ids) and [action ID](guide_22_0__structure-controllers.md#action-ids).
For example, if an application uses a module named `forum`, then the route
`forum/post/index` would represent the `index` action of the `post` controller in the module. If the route
only contains the module ID, then the [yii\base\Module::$defaultRoute](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$defaultRoute-detail) property, which defaults to `default`,
will determine which controller/action should be used. This means a route `forum` would represent the `default`
controller in the `forum` module.

The URL manager rules for the modules should be added before [yii\web\UrlManager::parseRequest()](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#parseRequest()-detail) is fired. That means doing it
in module's `init()` won't work because module will be initialized when routes were already processed. Thus, the rules
should be added at [bootstrap stage](guide_22_0__structure-extensions.md#bootstrapping-classes). It is a also a good practice
to wrap module's URL rules with [yii\web\GroupUrlRule](https://www.yiiframework.com/doc/api/22.0/yii-web-groupurlrule).

In case a module is used to [version API](guide_22_0__rest-versioning.md), its URL rules should be added directly in `urlManager`
section of the application config.

### Accessing Modules [¶](#accessing-modules)

Within a module, you may often need to get the instance of the [module class](#module-classes) so that you can
access the module ID, module parameters, module components, etc. You can do so by using the following statement:

```
$module = MyModuleClass::getInstance();
```

where `MyModuleClass` refers to the name of the module class that you are interested in. The `getInstance()` method
will return the currently requested instance of the module class. If the module is not requested, the method will
return `null`. Note that you do not want to manually create a new instance of the module class because it will be
different from the one created by Yii in response to a request.

> **Info:** When developing a module, you should not assume the module will use a fixed ID. This is because a module
> can be associated with an arbitrary ID when used in an application or within another module. In order to get
> the module ID, you should use the above approach to get the module instance first, and then get the ID via
> `$module->id`.

You may also access the instance of a module using the following approaches:

```
// get the child module whose ID is "forum"
$module = \Yii::$app->getModule('forum');

// get the module to which the currently requested controller belongs
$module = \Yii::$app->controller->module;
```

The first approach is only useful when you know the module ID, while the second approach is best used when you
know about the controllers being requested.

Once you have the module instance, you can access parameters and components registered with the module. For example,

```
$maxPostCount = $module->params['maxPostCount'];
```

### Bootstrapping Modules [¶](#bootstrapping-modules)

Some modules may need to be run for every request. The yii\debug\Module module is such an example.
To do so, list the IDs of such modules in the [bootstrap](https://www.yiiframework.com/doc/api/22.0/yii-base-application#bootstrap()-detail) property of the application.

For example, the following application configuration makes sure the `debug` module is always loaded:

```
[
    'bootstrap' => [
        'debug',
    ],

    'modules' => [
        'debug' => 'yii\debug\Module',
    ],
]
```

## Nested Modules [¶](#nested-modules)

Modules can be nested in unlimited levels. That is, a module can contain another module which can contain yet
another module. We call the former *parent module* while the latter *child module*. Child modules must be declared
in the [modules](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$modules-detail) property of their parent modules. For example,

```
namespace app\modules\forum;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        $this->modules = [
            'admin' => [
                // you should consider using a shorter namespace here!
                'class' => 'app\modules\forum\modules\admin\Module',
            ],
        ];
    }
}
```

For a controller within a nested module, its route should include the IDs of all its ancestor modules.
For example, the route `forum/admin/dashboard/index` represents the `index` action of the `dashboard` controller
in the `admin` module which is a child module of the `forum` module.

> **Info:** The [getModule()](https://www.yiiframework.com/doc/api/22.0/yii-base-module#getModule()-detail) method only returns the child module directly belonging
> to its parent. The [yii\base\Application::$loadedModules](https://www.yiiframework.com/doc/api/22.0/yii-base-application#$loadedModules-detail) property keeps a list of loaded modules, including both
> direct children and nested ones, indexed by their class names.

## Accessing components from within modules [¶](#accessing-components-from-within-modules)

Since version 2.0.13 modules support [tree traversal](guide_22_0__concept-service-locator.md#tree-traversal). This allows module
developers to reference (application) components via the service locator that is their module.
This means that it is preferable to use `$module->get('db')` over `Yii::$app->get('db')`.
The user of a module is able to specify a specific component to be used for the module in case a different component
(configuration) is required.

For example consider partial this application configuration:

```
'components' => [
    'db' => [
        'tablePrefix' => 'main_',
        'class' => Connection::class,
        'enableQueryCache' => false
    ],
],
'modules' => [
    'mymodule' => [
        'components' => [
            'db' => [
                'tablePrefix' => 'module_',
                'class' => Connection::class
            ],
        ],
    ],
],
```

The application database tables will be prefixed with `main_`, while all module tables will be prefixed with `module_`.
Note that configuration above is not merged; the modules' component for example will have the query cache enabled since that is the default value.

## Best Practices [¶](#best-practices)

Modules are best used in large applications whose features can be divided into several groups, each consisting of
a set of closely related features. Each such feature group can be developed as a module which is developed and
maintained by a specific developer or team.

Modules are also a good way of reusing code at the feature group level. Some commonly used features, such as
user management, comment management, can all be developed in terms of modules so that they can be reused easily
in future projects.

[Views](guide_22_0__structure-views.md)

[Go to Top](#top)

[Filters](guide_22_0__structure-filters.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/structure-modules.md) !
