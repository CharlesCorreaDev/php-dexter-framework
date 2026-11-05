# Handling Requests: Routing and URL Creation | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/runtime-routing

---

0

# Routing and URL Creation [¶](#routing-and-url-creation)

When a Yii application starts processing a requested URL, the first step it takes is to parse the URL
into a [route](guide_22_0__structure-controllers.md#routes). The route is then used to instantiate the corresponding
[controller action](guide_22_0__structure-controllers.md) to handle the request. This whole process is called *routing*.

The reverse process of routing is called *URL creation*, which creates a URL from a given route
and the associated query parameters. When the created URL is later requested, the routing process can resolve it
back into the original route and query parameters.

The central piece responsible for routing and URL creation is the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager),
which is registered as the `urlManager` [application component](guide_22_0__structure-application-components.md). The [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager)
provides the [parseRequest()](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#parseRequest()-detail) method to parse an incoming request into
a route and the associated query parameters and the [createUrl()](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#createUrl()-detail) method to
create a URL from a given route and its associated query parameters.

By configuring the `urlManager` component in the application configuration, you can let your application
recognize arbitrary URL formats without modifying your existing application code. For example, you can
use the following code to create a URL for the `post/view` action:

```
use yii\helpers\Url;

// Url::to() calls UrlManager::createUrl() to create a URL
$url = Url::to(['post/view', 'id' => 100]);
```

Depending on the `urlManager` configuration, the created URL may look like one of the following (or other format).
And if the created URL is requested later, it will still be parsed back into the original route and query parameter value.

```
/index.php?r=post%2Fview&id=100
/index.php/post/100
/posts/100
```

## URL Formats [¶](#url-formats)

The [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) supports two URL formats:

- the default URL format;
- the pretty URL format.

The default URL format uses a [query parameter](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$routeParam-detail) named `r` to represent the route and normal query parameters
to represent the query parameters associated with the route. For example, the URL `/index.php?r=post/view&id=100` represents
the route `post/view` and the `id` query parameter `100`. The default URL format does not require any configuration of
the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) and works in any Web server setup.

The pretty URL format uses the extra path following the entry script name to represent the route and the associated
query parameters. For example, the extra path in the URL `/index.php/post/100` is `/post/100` which may represent
the route `post/view` and the `id` query parameter `100` with a proper [URL rule](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$rules-detail). To use
the pretty URL format, you will need to design a set of [URL rules](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$rules-detail) according to the actual
requirement about how the URLs should look like.

You may switch between the two URL formats by toggling the [enablePrettyUrl](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$enablePrettyUrl-detail)
property of the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) without changing any other application code.

## Routing [¶](#routing)

Routing involves two steps:

- the incoming request is parsed into a route and the associated query parameters;
- a [controller action](guide_22_0__structure-controllers.md#actions) corresponding to the parsed route
  is created to handle the request.

When using the default URL format, parsing a request into a route is as simple as getting the value of a `GET`
query parameter named `r`.

When using the pretty URL format, the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) will examine the registered
[URL rules](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$rules-detail) to find matching one that can resolve the request into a route.
If such a rule cannot be found, a [yii\web\NotFoundHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-notfoundhttpexception) exception will be thrown.

Once the request is parsed into a route, it is time to create the controller action identified by the route.
The route is broken down into multiple parts by the slashes in it. For example, `site/index` will be
broken into `site` and `index`. Each part is an ID which may refer to a module, a controller or an action.
Starting from the first part in the route, the application takes the following steps to create modules (if any),
controller and action:

1. Set the application as the current module.
2. Check if the [controller map](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$controllerMap-detail) of the current module contains the current ID.
   If so, a controller object will be created according to the controller configuration found in the map,
   and Step 5 will be taken to handle the rest part of the route.
3. Check if the ID refers to a module listed in the [modules](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$modules-detail) property of
   the current module. If so, a module is created according to the configuration found in the module list,
   and Step 2 will be taken to handle the next part of the route under the context of the newly created module.
4. Treat the ID as a [controller ID](guide_22_0__structure-controllers.md#controller-ids) and create a controller object. Do the next step with the rest part of
   the route.
5. The controller looks for the current ID in its [action map](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#actions()-detail). If found,
   it creates an action according to the configuration found in the map. Otherwise, the controller will
   attempt to create an inline action which is defined by an action method corresponding to the current [action ID](guide_22_0__structure-controllers.md#action-ids).

Among the above steps, if any error occurs, a [yii\web\NotFoundHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-notfoundhttpexception) will be thrown, indicating
the failure of the routing process.

### Default Route [¶](#default-route)

When a request is parsed into an empty route, the so-called *default route* will be used, instead. By default,
the default route is `site/index`, which refers to the `index` action of the `site` controller. You may
customize it by configuring the [defaultRoute](https://www.yiiframework.com/doc/api/22.0/yii-web-application#$defaultRoute-detail) property of the application
in the application configuration like the following:

```
[
    // ...
    'defaultRoute' => 'main/index',
];
```

Similar to the default route of the application, there is also a default route for modules, so for example if there
is a `user` module and the request is parsed into the route `user` the module's [defaultRoute](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$defaultRoute-detail)
is used to determine the controller. By default the controller name is `default`. If no action is specified in [defaultRoute](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$defaultRoute-detail),
the [defaultAction](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#$defaultAction-detail) property of the controller is used to determine the action.
In this example, the full route would be `user/default/index`.

### `catchAll` Route [¶](#catchall-route)

Sometimes, you may want to put your Web application in maintenance mode temporarily and display the same
informational page for all requests. There are many ways to accomplish this goal. But one of the simplest
ways is to configure the [yii\web\Application::$catchAll](https://www.yiiframework.com/doc/api/22.0/yii-web-application#$catchAll-detail) property like the following in the application configuration:

```
[
    // ...
    'catchAll' => ['site/offline'],
];
```

With the above configuration, the `site/offline` action will be used to handle all incoming requests.

The `catchAll` property should take an array whose first element specifies a route, and
the rest of the elements (name-value pairs) specify the parameters to be [bound to the action](guide_22_0__structure-controllers.md#action-parameters).

> **Info:** The [debug toolbar](https://github.com/yiisoft/yii2-debug/blob/master/docs/guide/README.md) in development environment
> will not work when this property is enabled.

## Creating URLs [¶](#creating-urls)

Yii provides a helper method [yii\helpers\Url::to()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-baseurl#to()-detail) to create various kinds of URLs from given routes and
their associated query parameters. For example,

```
use yii\helpers\Url;

// creates a URL to a route: /index.php?r=post%2Findex
echo Url::to(['post/index']);

// creates a URL to a route with parameters: /index.php?r=post%2Fview&id=100
echo Url::to(['post/view', 'id' => 100]);

// creates an anchored URL: /index.php?r=post%2Fview&id=100#content
echo Url::to(['post/view', 'id' => 100, '#' => 'content']);

// creates an absolute URL: https://www.example.com/index.php?r=post%2Findex
echo Url::to(['post/index'], true);

// creates an absolute URL using the https scheme: https://www.example.com/index.php?r=post%2Findex
echo Url::to(['post/index'], 'https');
```

Note that in the above example, we assume the default URL format is being used. If the pretty URL format is enabled,
the created URLs will be different, according to the [URL rules](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$rules-detail) in use.

The route passed to the [yii\helpers\Url::to()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-baseurl#to()-detail) method is context sensitive. It can be either a *relative* route
or an *absolute* route which will be normalized according to the following rules:

- If the route is an empty string, the currently requested [route](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#$route-detail) will be used;
- If the route contains no slashes at all, it is considered to be an action ID of the current controller
  and will be prepended with the [uniqueId](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#$uniqueId-detail) value of the current controller;
- If the route has no leading slash, it is considered to be a route relative to the current module and
  will be prepended with the [uniqueId](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$uniqueId-detail) value of the current module.

Starting from version 2.0.2, you may specify a route in terms of an [alias](guide_22_0__concept-aliases.md). If this is the case,
the alias will first be converted into the actual route which will then be turned into an absolute route according
to the above rules.

For example, assume the current module is `admin` and the current controller is `post`,

```
use yii\helpers\Url;

// currently requested route: /index.php?r=admin%2Fpost%2Findex
echo Url::to(['']);

// a relative route with action ID only: /index.php?r=admin%2Fpost%2Findex
echo Url::to(['index']);

// a relative route: /index.php?r=admin%2Fpost%2Findex
echo Url::to(['post/index']);

// an absolute route: /index.php?r=post%2Findex
echo Url::to(['/post/index']);

// using an alias "@posts", which is defined as "/post/index": /index.php?r=post%2Findex
echo Url::to(['@posts']);
```

The [yii\helpers\Url::to()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-baseurl#to()-detail) method is implemented by calling the [createUrl()](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#createUrl()-detail)
and [createAbsoluteUrl()](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#createAbsoluteUrl()-detail) methods of the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager).
In the next few subsections, we will explain how to configure the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) to customize
the format of the created URLs.

The [yii\helpers\Url::to()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-baseurl#to()-detail) method also supports creating URLs that are **not** related with particular routes.
Instead of passing an array as its first parameter, you should pass a string in this case. For example,

```
use yii\helpers\Url;

// currently requested URL: /index.php?r=admin%2Fpost%2Findex
echo Url::to();

// an aliased URL: https://example.com
Yii::setAlias('@example', 'https://example.com/');
echo Url::to('@example');

// an absolute URL: https://example.com/images/logo.gif
echo Url::to('/images/logo.gif', true);
```

Besides the `to()` method, the [yii\helpers\Url](https://www.yiiframework.com/doc/api/22.0/yii-helpers-url) helper class also provides several other convenient URL creation
methods. For example,

```
use yii\helpers\Url;

// home page URL: /index.php?r=site%2Findex
echo Url::home();

// the base URL, useful if the application is deployed in a sub-folder of the Web root
echo Url::base();

// the canonical URL of the currently requested URL
// see https://en.wikipedia.org/wiki/Canonical_link_element
echo Url::canonical();

// remember the currently requested URL and retrieve it back in later requests
Url::remember();
echo Url::previous();
```

## Using Pretty URLs [¶](#using-pretty-urls)

To use pretty URLs, configure the `urlManager` component in the application configuration like the following:

```
[
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                // ...
            ],
        ],
    ],
]
```

The [enablePrettyUrl](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$enablePrettyUrl-detail) property is mandatory as it toggles the pretty URL format.
The rest of the properties are optional. However, their configuration shown above is most commonly used.

- [showScriptName](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$showScriptName-detail): this property determines whether the entry script
  should be included in the created URLs. For example, instead of creating a URL `/index.php/post/100`,
  by setting this property to be `false`, a URL `/post/100` will be generated.
- [enableStrictParsing](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$enableStrictParsing-detail): this property determines whether to enable
  strict request parsing. If strict parsing is enabled, the incoming requested URL must match at least one of
  the [rules](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$rules-detail) in order to be treated as a valid request, otherwise a [yii\web\NotFoundHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-notfoundhttpexception)
  will be thrown. If strict parsing is disabled, when none of the [rules](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$rules-detail) matches
  the requested URL, the path info part of the URL will be treated as the requested route.
- [rules](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$rules-detail): this property contains a list of rules specifying how to parse and create
  URLs. It is the main property that you should work with in order to create URLs whose format satisfies your
  particular application requirement.

> **Note:** In order to hide the entry script name in the created URLs, besides setting
> [showScriptName](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$showScriptName-detail) to be `false`, you may also need to configure your Web server
> so that it can correctly identify which PHP script should be executed when a requested URL does not explicitly
> specify one. If you are using Apache or nginx Web server, you may refer to the recommended configuration as described in the
> [Installation](guide_22_0__start-installation.md#recommended-apache-configuration) section.

### URL Rules [¶](#url-rules)

A URL rule is a class implementing the [yii\web\UrlRuleInterface](https://www.yiiframework.com/doc/api/22.0/yii-web-urlruleinterface), usually [yii\web\UrlRule](https://www.yiiframework.com/doc/api/22.0/yii-web-urlrule). Each URL rule consists of a pattern used
for matching the path info part of URLs, a route, and a few query parameters. A URL rule can be used to parse a request
if its pattern matches the requested URL. A URL rule can be used to create a URL if its route and query parameter
names match those that are given.

When the pretty URL format is enabled, the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) uses the URL rules declared in its
[rules](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$rules-detail) property to parse incoming requests and create URLs. In particular,
to parse an incoming request, the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) examines the rules in the order they are
declared and looks for the *first* rule that matches the requested URL. The matching rule is then used to
parse the URL into a route and its associated parameters. Similarly, to create a URL, the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager)
looks for the first rule that matches the given route and parameters and uses that to create a URL.

You can configure [yii\web\UrlManager::$rules](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$rules-detail) as an array with keys being the [patterns](https://www.yiiframework.com/doc/api/22.0/yii-web-urlrule#$pattern-detail) and values the corresponding
[routes](https://www.yiiframework.com/doc/api/22.0/yii-web-urlrule#$route-detail). Each pattern-route pair constructs a URL rule. For example, the following [rules](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$rules-detail)
configuration declares two URL rules. The first rule matches a URL `posts` and maps it into the route `post/index`.
The second rule matches a URL matching the regular expression `post/(\d+)` and maps it into the route `post/view` and
defines a query parameter named `id`.

```
'rules' => [
    'posts' => 'post/index',
    'post/<id:\d+>' => 'post/view',
]
```

> **Info:** The pattern in a rule is used to match the path info part of a URL. For example, the path info of
> `/index.php/post/100?source=ad` is `post/100` (the leading and ending slashes are ignored) which matches
> the pattern `post/(\d+)`.

Besides declaring URL rules as pattern-route pairs, you may also declare them as configuration arrays. Each configuration
array is used to configure a single URL rule object. This is often needed when you want to configure other
properties of a URL rule. For example,

```
'rules' => [
    // ...other url rules...
    [
        'pattern' => 'posts',
        'route' => 'post/index',
        'suffix' => '.json',
    ],
]
```

By default if you do not specify the `class` option for a rule configuration, it will take the default
class [yii\web\UrlRule](https://www.yiiframework.com/doc/api/22.0/yii-web-urlrule), which is the default value defined in
[yii\web\UrlManager::$ruleConfig](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$ruleConfig-detail).

### Named Parameters [¶](#named-parameters)

A URL rule can be associated with named query parameters which are specified in the pattern in the format
of `<ParamName:RegExp>`, where `ParamName` specifies the parameter name and `RegExp` is an optional regular
expression used to match parameter values. If `RegExp` is not specified, it means the parameter value should be
a string without any slash.

> **Note:** You can only use regular expressions inside of parameters. The rest of a pattern is considered plain text.

When a rule is used to parse a URL, it will fill the associated parameters with values matching the corresponding
parts of the URL, and these parameters will be made available in `$_GET` later by the `request` application component.
When the rule is used to create a URL, it will take the values of the provided parameters and insert them at the
places where the parameters are declared.

Let's use some examples to illustrate how named parameters work. Assume we have declared the following three URL rules:

```
'rules' => [
    'posts/<year:\d{4}>/<category>' => 'post/index',
    'posts' => 'post/index',
    'post/<id:\d+>' => 'post/view',
]
```

When the rules are used to parse URLs:

- `/index.php/posts` is parsed into the route `post/index` using the second rule;
- `/index.php/posts/2014/php` is parsed into the route `post/index`, the `year` parameter whose value is 2014
  and the `category` parameter whose value is `php` using the first rule;
- `/index.php/post/100` is parsed into the route `post/view` and the `id` parameter whose value is 100 using
  the third rule;
- `/index.php/posts/php` will cause a [yii\web\NotFoundHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-notfoundhttpexception) when [yii\web\UrlManager::$enableStrictParsing](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$enableStrictParsing-detail)
  is `true`, because it matches none of the patterns. If [yii\web\UrlManager::$enableStrictParsing](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$enableStrictParsing-detail) is `false` (the
  default value), the path info part `posts/php` will be returned as the route. This will either execute the corresponding action if it exists or throw a [yii\web\NotFoundHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-notfoundhttpexception) otherwise.

And when the rules are used to create URLs:

- `Url::to(['post/index'])` creates `/index.php/posts` using the second rule;
- `Url::to(['post/index', 'year' => 2014, 'category' => 'php'])` creates `/index.php/posts/2014/php` using the first rule;
- `Url::to(['post/view', 'id' => 100])` creates `/index.php/post/100` using the third rule;
- `Url::to(['post/view', 'id' => 100, 'source' => 'ad'])` creates `/index.php/post/100?source=ad` using the third rule.
  Because the `source` parameter is not specified in the rule, it is appended as a query parameter in the created URL.
- `Url::to(['post/index', 'category' => 'php'])` creates `/index.php/post/index?category=php` using none of the rules.
  Note that since none of the rules applies, the URL is created by simply appending the route as the path info
  and all parameters as the query string part.

### Parameterizing Routes [¶](#parameterizing-routes)

You can embed parameter names in the route of a URL rule. This allows a URL rule to be used for matching multiple
routes. For example, the following rules embed `controller` and `action` parameters in the routes.

```
'rules' => [
    '<controller:(post|comment)>/create' => '<controller>/create',
    '<controller:(post|comment)>/<id:\d+>/<action:(update|delete)>' => '<controller>/<action>',
    '<controller:(post|comment)>/<id:\d+>' => '<controller>/view',
    '<controller:(post|comment)>s' => '<controller>/index',
]
```

To parse a URL `/index.php/comment/100/update`, the second rule will apply, which sets the `controller` parameter to
be `comment` and `action` parameter to be `update`. The route `<controller>/<action>` is thus resolved as `comment/update`.

Similarly, to create a URL for the route `comment/index`, the last rule will apply, which creates a URL `/index.php/comments`.

> **Info:** By parameterizing routes, it is possible to greatly reduce the number of URL rules, which can significantly
> improve the performance of [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager).

### Default Parameter Values [¶](#default-parameter-values)

By default, all parameters declared in a rule are required. If a requested URL does not contain a particular parameter,
or if a URL is being created without a particular parameter, the rule will not apply. To make some of the parameters
optional, you can configure the [defaults](https://www.yiiframework.com/doc/api/22.0/yii-web-urlrule#$defaults-detail) property of a rule. Parameters listed in this
property are optional and will take the specified values when they are not provided.

In the following rule declaration, the `page` and `tag` parameters are both optional and will take the value of 1 and
empty string, respectively, when they are not provided.

```
'rules' => [
    // ...other rules...
    [
        'pattern' => 'posts/<page:\d+>/<tag>',
        'route' => 'post/index',
        'defaults' => ['page' => 1, 'tag' => ''],
    ],
]
```

The above rule can be used to parse or create any of the following URLs:

- `/index.php/posts`: `page` is 1, `tag` is ''.
- `/index.php/posts/2`: `page` is 2, `tag` is ''.
- `/index.php/posts/2/news`: `page` is 2, `tag` is `'news'`.
- `/index.php/posts/news`: `page` is 1, `tag` is `'news'`.

Without using optional parameters, you would have to create 4 rules to achieve the same result.

> **Note:** If [pattern](https://www.yiiframework.com/doc/api/22.0/yii-web-urlrule#$pattern-detail) contains only optional parameters and slashes, first parameter could be omitted
> only if all other parameters are omitted.

### Rules with Server Names [¶](#rules-with-server-names)

It is possible to include Web server names in the patterns of URL rules. This is mainly useful when your application
should behave differently for different Web server names. For example, the following rules will parse the URL
`https://admin.example.com/login` into the route `admin/user/login` and `https://www.example.com/login` into `site/login`.

```
'rules' => [
    'https://admin.example.com/login' => 'admin/user/login',
    'https://www.example.com/login' => 'site/login',
]
```

You can also embed parameters in the server names to extract dynamic information from them. For example, the following rule
will parse the URL `https://en.example.com/posts` into the route `post/index` and the parameter `language=en`.

```
'rules' => [
    'https://<language:\w+>.example.com/posts' => 'post/index',
]
```

Since version 2.0.11, you may also use protocol relative patterns that work for both, `http` and `https`.
The syntax is the same as above but skipping the `http:` part, e.g.: `'//www.example.com/login' => 'site/login'`.

> **Note:** Rules with server names should **not** include the subfolder of the entry script in their patterns. For example, if the applications entry script is at `https://www.example.com/sandbox/blog/index.php`, then you should use the pattern
> `https://www.example.com/posts` instead of `https://www.example.com/sandbox/blog/posts`. This will allow your application
> to be deployed under any directory without the need to change your url rules. Yii will automatically detect the base url of the application.

### URL Suffixes [¶](#url-suffixes)

You may want to add suffixes to the URLs for various purposes. For example, you may add `.html` to the URLs so that they
look like URLs for static HTML pages; you may also add `.json` to the URLs to indicate the expected content type
of the response. You can achieve this goal by configuring the [yii\web\UrlManager::$suffix](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$suffix-detail) property like
the following in the application configuration:

```
[
    // ...
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            // ...
            'suffix' => '.html',
            'rules' => [
                // ...
            ],
        ],
    ],
]
```

The above configuration will allow the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) to recognize requested URLs and also create
URLs with `.html` as their suffix.

> **Tip:** You may set `/` as the URL suffix so that the URLs all end with a slash.

> **Note:** When you configure a URL suffix, if a requested URL does not have the suffix, it will be considered as
> an unrecognized URL. This is a recommended practice for SEO (search engine optimization) to avoid duplicate content on different URLs.

Sometimes you may want to use different suffixes for different URLs. This can be achieved by configuring the
[suffix](https://www.yiiframework.com/doc/api/22.0/yii-web-urlrule#$suffix-detail) property of individual URL rules. When a URL rule has this property set, it will
override the suffix setting at the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) level. For example, the following configuration
contains a customized URL rule which uses `.json` as its suffix instead of the global `.html` suffix.

```
[
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            // ...
            'suffix' => '.html',
            'rules' => [
                // ...
                [
                    'pattern' => 'posts',
                    'route' => 'post/index',
                    'suffix' => '.json',
                ],
            ],
        ],
    ],
]
```

### HTTP Methods [¶](#http-methods)

When implementing RESTful APIs, it is commonly needed that the same URL be parsed into different routes according to
the HTTP methods being used. This can be easily achieved by prefixing the supported HTTP methods to the patterns of
the rules. If a rule supports multiple HTTP methods, separate the method names with commas. For example, the following
rules have the same pattern `post/<id:\d+>` with different HTTP method support. A request for `PUT post/100` will
be parsed into `post/update`, while a request for `GET post/100` will be parsed into `post/view`.

```
'rules' => [
    'PUT,POST post/<id:\d+>' => 'post/update',
    'DELETE post/<id:\d+>' => 'post/delete',
    'post/<id:\d+>' => 'post/view',
]
```

> **Note:** If a URL rule contains HTTP method(s) in its pattern, the rule will only be used for parsing purpose unless `GET` is among the specified verbs.
> It will be skipped when the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) is called to create URLs.

> **Tip:** To simplify the routing of RESTful APIs, Yii provides a special URL rule class [yii\rest\UrlRule](https://www.yiiframework.com/doc/api/22.0/yii-rest-urlrule)
> which is very efficient and supports some fancy features such as automatic pluralization of controller IDs.
> For more details, please refer to the [Routing](guide_22_0__rest-routing.md) section in the RESTful APIs chapter.

### Adding Rules Dynamically [¶](#adding-rules)

URL rules can be dynamically added to the [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager). This is often needed by redistributable
[modules](guide_22_0__structure-modules.md) which want to manage their own URL rules. In order for the dynamically added rules
to take effect during the routing process, you should add them during the [bootstrapping](guide_22_0__runtime-bootstrapping.md)
stage of the application. For modules, this means they should implement [yii\base\BootstrapInterface](https://www.yiiframework.com/doc/api/22.0/yii-base-bootstrapinterface) and add the rules in the
[bootstrap()](https://www.yiiframework.com/doc/api/22.0/yii-base-bootstrapinterface#bootstrap()-detail) method like the following:

```
public function bootstrap($app)
{
    $app->getUrlManager()->addRules([
        // rule declarations here
    ], false);
}
```

Note that you should also list these modules in [yii\web\Application::bootstrap()](https://www.yiiframework.com/doc/api/22.0/yii-web-application#bootstrap()-detail) so that they can participate the
[bootstrapping](guide_22_0__runtime-bootstrapping.md) process.

### Creating Rule Classes [¶](#creating-rules)

Despite the fact that the default [yii\web\UrlRule](https://www.yiiframework.com/doc/api/22.0/yii-web-urlrule) class is flexible enough for the majority of projects, there
are situations when you have to create your own rule classes. For example, in a car dealer Web site, you may want
to support the URL format like `/Manufacturer/Model`, where both `Manufacturer` and `Model` must match some data
stored in a database table. The default rule class will not work here because it relies on statically declared patterns.

We can create the following URL rule class to solve this problem.

```
<?php

namespace app\components;

use yii\web\UrlRuleInterface;
use yii\base\BaseObject;

class CarUrlRule extends BaseObject implements UrlRuleInterface
{
    public function createUrl($manager, $route, $params)
    {
        if ($route === 'car/index') {
            if (isset($params['manufacturer'], $params['model'])) {
                return $params['manufacturer'] . '/' . $params['model'];
            } elseif (isset($params['manufacturer'])) {
                return $params['manufacturer'];
            }
        }
        return false; // this rule does not apply
    }

    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
        if (preg_match('%^(\w+)(/(\w+))?$%', $pathInfo, $matches)) {
            // check $matches[1] and $matches[3] to see
            // if they match a manufacturer and a model in the database.
            // If so, set $params['manufacturer'] and/or $params['model']
            // and return ['car/index', $params]
        }
        return false; // this rule does not apply
    }
}
```

And use the new rule class in the [yii\web\UrlManager::$rules](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$rules-detail) configuration:

```
'rules' => [
    // ...other rules...
    [
        'class' => 'app\components\CarUrlRule',
        // ...configure other properties...
    ],
]
```

## URL normalization [¶](#url-normalization)

Since version 2.0.10 [UrlManager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) can be configured to use [UrlNormalizer](https://www.yiiframework.com/doc/api/22.0/yii-web-urlnormalizer) for dealing
with variations of the same URL, for example with and without a trailing slash. Because technically `https://example.com/path`
and `https://example.com/path/` are different URLs, serving the same content for both of them can degrade SEO ranking.
By default normalizer collapses consecutive slashes, adds or removes trailing slashes depending on whether the
suffix has a trailing slash or not, and redirects to the normalized version of the URL using [permanent redirection](https://en.wikipedia.org/wiki/HTTP_301).
The normalizer can be configured globally for the URL manager or individually for each rule - by default each rule will use the normalizer
from URL manager. You can set [UrlRule::$normalizer](https://www.yiiframework.com/doc/api/22.0/yii-web-urlrule#$normalizer-detail) to `false` to disable normalization
for particular URL rule.

The following shows an example configuration for the [UrlNormalizer](https://www.yiiframework.com/doc/api/22.0/yii-web-urlnormalizer):

```
'urlManager' => [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => true,
    'suffix' => '.html',
    'normalizer' => [
        'class' => 'yii\web\UrlNormalizer',
        // use temporary redirection instead of permanent for debugging
        'action' => UrlNormalizer::ACTION_REDIRECT_TEMPORARY,
    ],
    'rules' => [
        // ...other rules...
        [
            'pattern' => 'posts',
            'route' => 'post/index',
            'suffix' => '/',
            'normalizer' => false, // disable normalizer for this rule
        ],
        [
            'pattern' => 'tags',
            'route' => 'tag/index',
            'normalizer' => [
                // do not collapse consecutive slashes for this rule
                'collapseSlashes' => false,
            ],
        ],
    ],
]
```

> **Note:** by default [UrlManager::$normalizer](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager#$normalizer-detail) is disabled. You need to explicitly
> configure it in order to enable URL normalization.

## Performance Considerations [¶](#performance-consideration)

When developing a complex Web application, it is important to optimize URL rules so that it takes less time to parse
requests and create URLs.

By using parameterized routes, you may reduce the number of URL rules, which can significantly improve performance.

When parsing or creating URLs, [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) examines URL rules in the order they are declared.
Therefore, you may consider adjusting the order of the URL rules so that more specific and/or more commonly used rules are placed before less used ones.

If some URL rules share the same prefix in their patterns or routes, you may consider using [yii\web\GroupUrlRule](https://www.yiiframework.com/doc/api/22.0/yii-web-groupurlrule)
so that they can be more efficiently examined by [URL manager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) as a group. This is often the case
when your application is composed by modules, each having its own set of URL rules with module ID as their common prefixes.

[Bootstrapping](guide_22_0__runtime-bootstrapping.md)

[Go to Top](#top)

[Requests](guide_22_0__runtime-requests.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/runtime-routing.md) !
