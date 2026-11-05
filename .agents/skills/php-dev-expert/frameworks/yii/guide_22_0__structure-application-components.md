# Application Structure: Application Components | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/structure-application-components

---

0

# Application Components [¶](#application-components)

Applications are [service locators](guide_22_0__concept-service-locator.md). They host a set of the so-called
*application components* that provide different services for processing requests. For example,
the `urlManager` component is responsible for routing Web requests to appropriate controllers;
the `db` component provides DB-related services; and so on.

Each application component has an ID that uniquely identifies itself among other application components
in the same application. You can access an application component through the expression:

```
\Yii::$app->componentID
```

For example, you can use `\Yii::$app->db` to get the [DB connection](https://www.yiiframework.com/doc/api/22.0/yii-db-connection),
and `\Yii::$app->cache` to get the [primary cache](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache) registered with the application.

An application component is created the first time it is accessed through the above expression. Any
further accesses will return the same component instance.

Application components can be any objects. You can register them by configuring
the [yii\base\Application::$components](https://www.yiiframework.com/doc/api/22.0/yii-di-servicelocator#$components-detail) property in [application configurations](guide_22_0__structure-applications.md#application-configurations).
For example,

```
[
    'components' => [
        // register "cache" component using a class name
        'cache' => 'yii\caching\ApcCache',

        // register "db" component using a configuration array
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=demo',
            'username' => 'root',
            'password' => '',
        ],

        // register "search" component using an anonymous function
        'search' => function () {
            return new app\components\SolrService;
        },
    ],
]
```

> **Info:** While you can register as many application components as you want, you should do this judiciously.
> Application components are like global variables. Using too many application components can potentially
> make your code harder to test and maintain. In many cases, you can simply create a local component
> and use it when needed.

## Bootstrapping Components [¶](#bootstrapping-components)

As mentioned above, an application component will only be instantiated when it is being accessed the first time.
If it is not accessed at all during a request, it will not be instantiated. Sometimes, however, you may want
to instantiate an application component for every request, even if it is not explicitly accessed.
To do so, you may list its ID in the [bootstrap](https://www.yiiframework.com/doc/api/22.0/yii-base-application#bootstrap()-detail) property of the application.

You can also use Closures to bootstrap customized components. Returning an instantiated component is not
required. A Closure can also be used simply for running code after [yii\base\Application](https://www.yiiframework.com/doc/api/22.0/yii-base-application) instantiation.

For example, the following application configuration makes sure the `log` component is always loaded:

```
[
    'bootstrap' => [
        'log',
        function($app){
            return new ComponentX();
        },
        function($app){
            // some code
           return;
        }
    ],
    'components' => [
        'log' => [
            // configuration for "log" component
        ],
    ],
]
```

## Core Application Components [¶](#core-application-components)

Yii defines a set of *core* application components with fixed IDs and default configurations. For example,
the [request](https://www.yiiframework.com/doc/api/22.0/yii-web-application#$request-detail) component is used to collect information about
a user request and resolve it into a [route](guide_22_0__runtime-routing.md); the [db](https://www.yiiframework.com/doc/api/22.0/yii-base-application#$db-detail)
component represents a database connection through which you can perform database queries.
It is with help of these core application components that Yii applications are able to handle user requests.

Below is the list of the predefined core application components. You may configure and customize them
like you do with normal application components. When you are configuring a core application component,
if you do not specify its class, the default one will be used.

- [assetManager](https://www.yiiframework.com/doc/api/22.0/yii-web-assetmanager): manages asset bundles and asset publishing.
  Please refer to the [Assets](guide_22_0__structure-assets.md) section for more details.
- [db](https://www.yiiframework.com/doc/api/22.0/yii-db-connection): represents a database connection through which you can perform DB queries.
  Note that when you configure this component, you must specify the component class as well as other required
  component properties, such as [yii\db\Connection::$dsn](https://www.yiiframework.com/doc/api/22.0/yii-db-connection#$dsn-detail).
  Please refer to the [Database Access Objects](guide_22_0__db-dao.md) section for more details.
- [errorHandler](https://www.yiiframework.com/doc/api/22.0/yii-base-application#$errorHandler-detail): handles PHP errors and exceptions.
  Please refer to the [Handling Errors](guide_22_0__runtime-handling-errors.md) section for more details.
- [formatter](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter): formats data when they are displayed to end users. For example, a number
  may be displayed with thousand separator, a date may be formatted in long format.
  Please refer to the [Data Formatting](guide_22_0__output-formatting.md) section for more details.
- [i18n](https://www.yiiframework.com/doc/api/22.0/yii-i18n-i18n): supports message translation and formatting.
  Please refer to the [Internationalization](guide_22_0__tutorial-i18n.md) section for more details.
- [log](https://www.yiiframework.com/doc/api/22.0/yii-log-dispatcher): manages log targets.
  Please refer to the [Logging](guide_22_0__runtime-logging.md) section for more details.
- yii\swiftmailer\Mailer: supports mail composing and sending.
  Please refer to the [Mailing](guide_22_0__tutorial-mailing.md) section for more details.
- [response](https://www.yiiframework.com/doc/api/22.0/yii-base-application#$response-detail): represents the response being sent to end users.
  Please refer to the [Responses](guide_22_0__runtime-responses.md) section for more details.
- [request](https://www.yiiframework.com/doc/api/22.0/yii-base-application#$request-detail): represents the request received from end users.
  Please refer to the [Requests](guide_22_0__runtime-requests.md) section for more details.
- [session](https://www.yiiframework.com/doc/api/22.0/yii-web-session): represents the session information. This component is only available
  in [Web applications](https://www.yiiframework.com/doc/api/22.0/yii-web-application).
  Please refer to the [Sessions and Cookies](guide_22_0__runtime-sessions-cookies.md) section for more details.
- [urlManager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager): supports URL parsing and creation.
  Please refer to the [Routing and URL Creation](guide_22_0__runtime-routing.md) section for more details.
- [user](https://www.yiiframework.com/doc/api/22.0/yii-web-user): represents the user authentication information. This component is only available
  in [Web applications](https://www.yiiframework.com/doc/api/22.0/yii-web-application).
  Please refer to the [Authentication](guide_22_0__security-authentication.md) section for more details.
- [view](https://www.yiiframework.com/doc/api/22.0/yii-web-view): supports view rendering.
  Please refer to the [Views](guide_22_0__structure-views.md) section for more details.

[Applications](guide_22_0__structure-applications.md)

[Go to Top](#top)

[Controllers](guide_22_0__structure-controllers.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/structure-application-components.md) !
