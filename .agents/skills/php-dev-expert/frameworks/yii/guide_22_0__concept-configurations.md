# Key Concepts: Configurations | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/concept-configurations

---

0

# Configurations [¶](#configurations)

Configurations are widely used in Yii when creating new objects or initializing existing objects.
Configurations usually include the class name of the object being created, and a list of initial values
that should be assigned to the object's [properties](guide_22_0__concept-properties.md). Configurations may also include a list of
handlers that should be attached to the object's [events](guide_22_0__concept-events.md) and/or a list of
[behaviors](guide_22_0__concept-behaviors.md) that should also be attached to the object.

In the following, a configuration is used to create and initialize a database connection:

```
$config = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;dbname=demo',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];

$db = Yii::createObject($config);
```

The [Yii::createObject()](https://www.yiiframework.com/doc/api/22.0/yii-baseyii#createObject()-detail) method takes a configuration array as its argument, and creates an object by instantiating
the class named in the configuration. When the object is instantiated, the rest of the configuration
will be used to initialize the object's properties, event handlers, and behaviors.

If you already have an object, you may use [Yii::configure()](https://www.yiiframework.com/doc/api/22.0/yii-baseyii#configure()-detail) to initialize the object's properties with
a configuration array:

```
Yii::configure($object, $config);
```

Note that, in this case, the configuration array should not contain a `class` element.

## Configuration Format [¶](#configuration-format)

The format of a configuration can be formally described as:

```
[
    'class' => 'ClassName',
    'propertyName' => 'propertyValue',
    'on eventName' => $eventHandler,
    'as behaviorName' => $behaviorConfig,
]
```

where

- The `class` element specifies a fully qualified class name for the object being created.
- The `propertyName` elements specify the initial values for the named property. The keys are the property names, and the
  values are the corresponding initial values. Only public member variables and [properties](guide_22_0__concept-properties.md)
  defined by getters/setters can be configured.
- The `on eventName` elements specify what handlers should be attached to the object's [events](guide_22_0__concept-events.md).
  Notice that the array keys are formed by prefixing event names with `on` . Please refer to
  the [Events](guide_22_0__concept-events.md) section for supported event handler formats.
- The `as behaviorName` elements specify what [behaviors](guide_22_0__concept-behaviors.md) should be attached to the object.
  Notice that the array keys are formed by prefixing behavior names with `as` ; the value, `$behaviorConfig`, represents
  the configuration for creating a behavior, like a normal configuration described here.

Below is an example showing a configuration with initial property values, event handlers, and behaviors:

```
[
    'class' => 'app\components\SearchEngine',
    'apiKey' => 'xxxxxxxx',
    'on search' => function ($event) {
        Yii::info("Keyword searched: " . $event->keyword);
    },
    'as indexer' => [
        'class' => 'app\components\IndexerBehavior',
        // ... property init values ...
    ],
]
```

## Using Configurations [¶](#using-configurations)

Configurations are used in many places in Yii. At the beginning of this section, we have shown how to
create an object according to a configuration by using [Yii::createObject()](https://www.yiiframework.com/doc/api/22.0/yii-baseyii#createObject()-detail). In this subsection, we will
describe application configurations and widget configurations - two major usages of configurations.

### Application Configurations [¶](#application-configurations)

The configuration for an [application](guide_22_0__structure-applications.md) is probably one of the most complex arrays in Yii.
This is because the [application](https://www.yiiframework.com/doc/api/22.0/yii-web-application) class has a lot of configurable properties and events.
More importantly, its [components](https://www.yiiframework.com/doc/api/22.0/yii-di-servicelocator#$components-detail) property can receive an array of configurations
for creating components that are registered through the application. The following is an abstract from the application
configuration file for the [Basic Project Template](guide_22_0__start-installation.md).

```
$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'extensions' => require __DIR__ . '/../vendor/yiisoft/extensions.php',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer' => [
            'class' => 'yii\symfonymailer\Mailer',
        ],
        'log' => [
            'class' => 'yii\log\Dispatcher',
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                ],
            ],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=stay2',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
```

The configuration does not have a `class` key. This is because it is used as follows in
an [entry script](guide_22_0__structure-entry-scripts.md), where the class name is already given,

```
(new yii\web\Application($config))->run();
```

More details about configuring the `components` property of an application can be found
in the [Applications](guide_22_0__structure-applications.md) section and the [Service Locator](guide_22_0__concept-service-locator.md) section.

Since version 2.0.11, the application configuration supports [Dependency Injection Container](guide_22_0__concept-di-container.md)
configuration using `container` property. For example:

```
$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'extensions' => require __DIR__ . '/../vendor/yiisoft/extensions.php',
    'container' => [
        'definitions' => [
            'yii\widgets\LinkPager' => ['maxButtonCount' => 5]
        ],
        'singletons' => [
            // Dependency Injection Container singletons configuration
        ]
    ]
];
```

To know more about the possible values of `definitions` and `singletons` configuration arrays and real-life examples,
please read [Advanced Practical Usage](guide_22_0__concept-di-container.md#advanced-practical-usage) subsection of the
[Dependency Injection Container](guide_22_0__concept-di-container.md) article.

### Widget Configurations [¶](#widget-configurations)

When using [widgets](guide_22_0__structure-widgets.md), you often need to use configurations to customize the widget properties.
Both of the [yii\base\Widget::widget()](https://www.yiiframework.com/doc/api/22.0/yii-base-widget#widget()-detail) and [yii\base\Widget::begin()](https://www.yiiframework.com/doc/api/22.0/yii-base-widget#begin()-detail) methods can be used to create
a widget. They take a configuration array, like the following,

```
use yii\widgets\Menu;

echo Menu::widget([
    'activateItems' => false,
    'items' => [
        ['label' => 'Home', 'url' => ['site/index']],
        ['label' => 'Products', 'url' => ['product/index']],
        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
    ],
]);
```

The above code creates a `Menu` widget and initializes its `activateItems` property to be `false`.
The `items` property is also configured with menu items to be displayed.

Note that because the class name is already given, the configuration array should NOT have the `class` key.

## Configuration Files [¶](#configuration-files)

When a configuration is very complex, a common practice is to store it in one or multiple PHP files, known as
*configuration files*. A configuration file returns a PHP array representing the configuration.
For example, you may keep an application configuration in a file named `web.php`, like the following,

```
return [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'extensions' => require __DIR__ . '/../vendor/yiisoft/extensions.php',
    'components' => require __DIR__ . '/components.php',
];
```

Because the `components` configuration is complex too, you store it in a separate file called `components.php`
and "require" this file in `web.php` as shown above. The content of `components.php` is as follows,

```
return [
    'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
    'mailer' => [
        'class' => 'yii\symfonymailer\Mailer',
    ],
    'log' => [
        'class' => 'yii\log\Dispatcher',
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
            ],
        ],
    ],
    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=stay2',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ],
];
```

To get a configuration stored in a configuration file, simply "require" it, like the following:

```
$config = require 'path/to/web.php';
(new yii\web\Application($config))->run();
```

## Default Configurations [¶](#default-configurations)

The [Yii::createObject()](https://www.yiiframework.com/doc/api/22.0/yii-baseyii#createObject()-detail) method is implemented based on a [dependency injection container](guide_22_0__concept-di-container.md).
It allows you to specify a set of the so-called *default configurations* which will be applied to ALL instances of
the specified classes when they are being created using [Yii::createObject()](https://www.yiiframework.com/doc/api/22.0/yii-baseyii#createObject()-detail). The default configurations
can be specified by calling `Yii::$container->set()` in the [bootstrapping](guide_22_0__runtime-bootstrapping.md) code.

For example, if you want to customize [yii\widgets\LinkPager](https://www.yiiframework.com/doc/api/22.0/yii-widgets-linkpager) so that ALL link pagers will show at most 5 page buttons
(the default value is 10), you may use the following code to achieve this goal:

```
\Yii::$container->set('yii\widgets\LinkPager', [
    'maxButtonCount' => 5,
]);
```

Without using default configurations, you would have to configure `maxButtonCount` in every place where you use
link pagers.

## Environment Constants [¶](#environment-constants)

Configurations often vary according to the environment in which an application runs. For example,
in development environment, you may want to use a database named `mydb_dev`, while on production server
you may want to use the `mydb_prod` database. To facilitate switching environments, Yii provides a constant
named `YII_ENV` that you may define in the [entry script](guide_22_0__structure-entry-scripts.md) of your application.
For example,

```
defined('YII_ENV') or define('YII_ENV', 'dev');
```

You may define `YII_ENV` as one of the following values:

- `prod`: production environment. The constant `YII_ENV_PROD` will evaluate as `true`.
  This is the default value of `YII_ENV` if you do not define it.
- `dev`: development environment. The constant `YII_ENV_DEV` will evaluate as `true`.
- `test`: testing environment. The constant `YII_ENV_TEST` will evaluate as `true`.

With these environment constants, you may specify your configurations conditionally based on
the current environment. For example, your application configuration may contain the following
code to enable the [debug toolbar and debugger](guide_22_0__tool-debugger.md) in development environment.

```
$config = [...];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';
}

return $config;
```

[Behaviors](guide_22_0__concept-behaviors.md)

[Go to Top](#top)

[Aliases](guide_22_0__concept-aliases.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/concept-configurations.md) !
