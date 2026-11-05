# Application Structure: Filters | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/structure-filters

---

0

# Filters [¶](#filters)

Filters are objects that run before and/or after [controller actions](guide_22_0__structure-controllers.md#actions). For example,
an access control filter may run before actions to ensure that they are allowed to be accessed by particular end users;
a content compression filter may run after actions to compress the response content before sending them out to end users.

A filter may consist of a pre-filter (filtering logic applied *before* actions) and/or a post-filter (logic applied
*after* actions).

## Using Filters [¶](#using-filters)

Filters are essentially a special kind of [behaviors](guide_22_0__concept-behaviors.md). Therefore, using filters is the same
as [using behaviors](guide_22_0__concept-behaviors.md#attaching-behaviors). You can declare filters in a controller class
by overriding its [behaviors()](https://www.yiiframework.com/doc/api/22.0/yii-base-component#behaviors()-detail) method like the following:

```
public function behaviors()
{
    return [
        [
            'class' => 'yii\filters\HttpCache',
            'only' => ['index', 'view'],
            'lastModified' => function ($action, $params) {
                $q = new \yii\db\Query();
                return $q->from('user')->max('updated_at');
            },
        ],
    ];
}
```

By default, filters declared in a controller class will be applied to *all* actions in that controller. You can,
however, explicitly specify which actions the filter should be applied to by configuring the
[only](https://www.yiiframework.com/doc/api/22.0/yii-base-actionfilter#$only-detail) property. In the above example, the `HttpCache` filter only applies to the
`index` and `view` actions. You can also configure the [except](https://www.yiiframework.com/doc/api/22.0/yii-base-actionfilter#$except-detail) property to prevent
some actions from being filtered.

Besides controllers, you can also declare filters in a [module](guide_22_0__structure-modules.md) or [application](guide_22_0__structure-applications.md).
When you do so, the filters will be applied to *all* controller actions belonging to that module or application,
unless you configure the filters' [only](https://www.yiiframework.com/doc/api/22.0/yii-base-actionfilter#$only-detail) and [except](https://www.yiiframework.com/doc/api/22.0/yii-base-actionfilter#$except-detail)
properties like described above.

> **Note:** When declaring filters in modules or applications, you should use [routes](guide_22_0__structure-controllers.md#routes)
> instead of action IDs in the [only](https://www.yiiframework.com/doc/api/22.0/yii-base-actionfilter#$only-detail) and [except](https://www.yiiframework.com/doc/api/22.0/yii-base-actionfilter#$except-detail) properties.
> This is because action IDs alone cannot fully specify actions within the scope of a module or application.

When multiple filters are configured for a single action, they are applied according to the rules described below:

- Pre-filtering
  - Apply filters declared in the application in the order they are listed in `behaviors()`.
  - Apply filters declared in the module in the order they are listed in `behaviors()`.
  - Apply filters declared in the controller in the order they are listed in `behaviors()`.
  - If any of the filters cancel the action execution, the filters (both pre-filters and post-filters) after it will
    not be applied.
- Running the action if it passes the pre-filtering.
- Post-filtering
  - Apply filters declared in the controller in the reverse order they are listed in `behaviors()`.
  - Apply filters declared in the module in the reverse order they are listed in `behaviors()`.
  - Apply filters declared in the application in the reverse order they are listed in `behaviors()`.

## Creating Filters [¶](#creating-filters)

To create a new action filter, extend from [yii\base\ActionFilter](https://www.yiiframework.com/doc/api/22.0/yii-base-actionfilter) and override the
[beforeAction()](https://www.yiiframework.com/doc/api/22.0/yii-base-actionfilter#beforeAction()-detail) and/or [afterAction()](https://www.yiiframework.com/doc/api/22.0/yii-base-actionfilter#afterAction()-detail)
methods. The former will be executed before an action runs while the latter after an action runs.
The return value of [beforeAction()](https://www.yiiframework.com/doc/api/22.0/yii-base-actionfilter#beforeAction()-detail) determines whether an action should
be executed or not. If it is `false`, the filters after this one will be skipped and the action will not be executed.

The following example shows a filter that logs the action execution time:

```
namespace app\components;

use Yii;
use yii\base\ActionFilter;

class ActionTimeFilter extends ActionFilter
{
    private $_startTime;

    public function beforeAction($action)
    {
        $this->_startTime = microtime(true);
        return parent::beforeAction($action);
    }

    public function afterAction($action, $result)
    {
        $time = microtime(true) - $this->_startTime;
        Yii::debug("Action '{$action->uniqueId}' spent $time second.");
        return parent::afterAction($action, $result);
    }
}
```

## Core Filters [¶](#core-filters)

Yii provides a set of commonly used filters, found primarily under the `yii\filters` namespace. In the following,
we will briefly introduce these filters.

### [AccessControl](https://www.yiiframework.com/doc/api/22.0/yii-filters-accesscontrol) [¶](#access-control)

AccessControl provides simple access control based on a set of [rules](https://www.yiiframework.com/doc/api/22.0/yii-filters-accesscontrol#$rules-detail).
In particular, before an action is executed, AccessControl will examine the listed rules and find the first one
that matches the current context variables (such as user IP address, user login status, etc.) The matching
rule will dictate whether to allow or deny the execution of the requested action. If no rule matches, the access
will be denied.

The following example shows how to allow authenticated users to access the `create` and `update` actions
while denying all other users from accessing these two actions.

```
use yii\filters\AccessControl;

public function behaviors()
{
    return [
        'access' => [
            'class' => AccessControl::class,
            'only' => ['create', 'update'],
            'rules' => [
                // allow authenticated users
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
                // everything else is denied by default
            ],
        ],
    ];
}
```

For more details about access control in general, please refer to the [Authorization](guide_22_0__security-authorization.md) section.

### Authentication Method Filters [¶](#auth-method-filters)

Authentication method filters are used to authenticate a user using various methods, such as
[HTTP Basic Auth](https://en.wikipedia.org/wiki/Basic_access_authentication), [OAuth 2](https://oauth.net/2/).
These filter classes are all under the `yii\filters\auth` namespace.

The following example shows how you can use [yii\filters\auth\HttpBasicAuth](https://www.yiiframework.com/doc/api/22.0/yii-filters-auth-httpbasicauth) to authenticate a user using
an access token based on HTTP Basic Auth method. Note that in order for this to work, your
[user identity class](https://www.yiiframework.com/doc/api/22.0/yii-web-user#$identityClass-detail) must implement the [findIdentityByAccessToken()](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface#findIdentityByAccessToken()-detail)
method.

```
use yii\filters\auth\HttpBasicAuth;

public function behaviors()
{
    return [
        'basicAuth' => [
            'class' => HttpBasicAuth::class,
        ],
    ];
}
```

Authentication method filters are commonly used in implementing RESTful APIs. For more details, please refer to the
RESTful [Authentication](guide_22_0__rest-authentication.md) section.

### [ContentNegotiator](https://www.yiiframework.com/doc/api/22.0/yii-filters-contentnegotiator) [¶](#content-negotiator)

ContentNegotiator supports response format negotiation and application language negotiation. It will try to
determine the response format and/or language by examining `GET` parameters and `Accept` HTTP header.

In the following example, ContentNegotiator is configured to support JSON and XML response formats, and
English (United States) and German languages.

```
use yii\filters\ContentNegotiator;
use yii\web\Response;

public function behaviors()
{
    return [
        [
            'class' => ContentNegotiator::class,
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
                'application/xml' => Response::FORMAT_XML,
            ],
            'languages' => [
                'en-US',
                'de',
            ],
        ],
    ];
}
```

Response formats and languages often need to be determined much earlier during
the [application lifecycle](guide_22_0__structure-applications.md#application-lifecycle). For this reason, ContentNegotiator
is designed in a way such that it can also be used as a [bootstrapping component](guide_22_0__structure-applications.md#bootstrap)
besides being used as a filter. For example, you may configure it in the [application configuration](guide_22_0__structure-applications.md#application-configurations)
like the following:

```
use yii\filters\ContentNegotiator;
use yii\web\Response;

[
    'bootstrap' => [
        [
            'class' => ContentNegotiator::class,
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
                'application/xml' => Response::FORMAT_XML,
            ],
            'languages' => [
                'en-US',
                'de',
            ],
        ],
    ],
];
```

> **Info:** In case the preferred content type and language cannot be determined from a request, the first format and
> language listed in formats and languages will be used.

### [HttpCache](https://www.yiiframework.com/doc/api/22.0/yii-filters-httpcache) [¶](#http-cache)

HttpCache implements client-side caching by utilizing the `Last-Modified` and `Etag` HTTP headers.
For example,

```
use yii\filters\HttpCache;

public function behaviors()
{
    return [
        [
            'class' => HttpCache::class,
            'only' => ['index'],
            'lastModified' => function ($action, $params) {
                $q = new \yii\db\Query();
                return $q->from('user')->max('updated_at');
            },
        ],
    ];
}
```

Please refer to the [HTTP Caching](guide_22_0__caching-http.md) section for more details about using HttpCache.

### [PageCache](https://www.yiiframework.com/doc/api/22.0/yii-filters-pagecache) [¶](#page-cache)

PageCache implements server-side caching of whole pages. In the following example, PageCache is applied
to the `index` action to cache the whole page for maximum 60 seconds or until the count of entries in the `post`
table changes. It also stores different versions of the page depending on the chosen application language.

```
use yii\filters\PageCache;
use yii\caching\DbDependency;

public function behaviors()
{
    return [
        'pageCache' => [
            'class' => PageCache::class,
            'only' => ['index'],
            'duration' => 60,
            'dependency' => [
                'class' => DbDependency::class,
                'sql' => 'SELECT COUNT(*) FROM post',
            ],
            'variations' => [
                \Yii::$app->language,
            ]
        ],
    ];
}
```

Please refer to the [Page Caching](guide_22_0__caching-page.md) section for more details about using PageCache.

### [RateLimiter](https://www.yiiframework.com/doc/api/22.0/yii-filters-ratelimiter) [¶](#rate-limiter)

RateLimiter implements a rate limiting algorithm based on the [leaky bucket algorithm](https://en.wikipedia.org/wiki/Leaky_bucket).
It is primarily used in implementing RESTful APIs. Please refer to the [Rate Limiting](guide_22_0__rest-rate-limiting.md) section
for details about using this filter.

### [VerbFilter](https://www.yiiframework.com/doc/api/22.0/yii-filters-verbfilter) [¶](#verb-filter)

VerbFilter checks if the HTTP request methods are allowed by the requested actions. If not allowed, it will
throw an HTTP 405 exception. In the following example, VerbFilter is declared to specify a typical set of allowed
request methods for CRUD actions.

```
use yii\filters\VerbFilter;

public function behaviors()
{
    return [
        'verbs' => [
            'class' => VerbFilter::class,
            'actions' => [
                'index'  => ['get'],
                'view'   => ['get'],
                'create' => ['get', 'post'],
                'update' => ['get', 'put', 'post'],
                'delete' => ['post', 'delete'],
            ],
        ],
    ];
}
```

### [Cors](https://www.yiiframework.com/doc/api/22.0/yii-filters-cors) [¶](#cors)

Cross-origin resource sharing [CORS](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS) is a mechanism that allows many resources (e.g. fonts, JavaScript, etc.)
on a Web page to be requested from another domain outside the domain the resource originated from.
In particular, JavaScript's AJAX calls can use the XMLHttpRequest mechanism. Such "cross-domain" requests would
otherwise be forbidden by Web browsers, per the same origin security policy.
CORS defines a way in which the browser and the server can interact to determine whether or not to allow the cross-origin request.

The [Cors filter](https://www.yiiframework.com/doc/api/22.0/yii-filters-cors) should be defined before Authentication / Authorization filters to make sure the CORS headers
will always be sent.

```
use yii\filters\Cors;
use yii\helpers\ArrayHelper;

public function behaviors()
{
    return ArrayHelper::merge([
        [
            'class' => Cors::class,
        ],
    ], parent::behaviors());
}
```

Also check the section on [REST Controllers](guide_22_0__rest-controllers.md#cors) if you want to add the CORS filter to an
[yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller) class in your API.

The Cors filtering could be tuned using the [$cors](https://www.yiiframework.com/doc/api/22.0/yii-filters-cors#$cors-detail) property.

- `cors['Origin']`: array used to define allowed origins. Can be `['*']` (everyone) or `['https://www.myserver.net', 'https://www.myotherserver.com']`. Default to `['*']`.
- `cors['Access-Control-Request-Method']`: array of allowed verbs like `['GET', 'OPTIONS', 'HEAD']`. Default to `['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS']`.
- `cors['Access-Control-Request-Headers']`: array of allowed headers. Can be `['*']` all headers or specific ones `['X-Request-With']`. Default to `['*']`.
- `cors['Access-Control-Allow-Credentials']`: define if current request can be made using credentials. Can be `true`, `false` or `null` (not set). Default to `null`.
- `cors['Access-Control-Max-Age']`: define lifetime of pre-flight request. Default to `86400`.

For example, allowing CORS for origin : `https://www.myserver.net` with method `GET`, `HEAD` and `OPTIONS` :

```
use yii\filters\Cors;
use yii\helpers\ArrayHelper;

public function behaviors()
{
    return ArrayHelper::merge([
        [
            'class' => Cors::class,
            'cors' => [
                'Origin' => ['https://www.myserver.net'],
                'Access-Control-Request-Method' => ['GET', 'HEAD', 'OPTIONS'],
            ],
        ],
    ], parent::behaviors());
}
```

You may tune the CORS headers by overriding default parameters on a per action basis.
For example adding the `Access-Control-Allow-Credentials` for the `login` action could be done like this :

```
use yii\filters\Cors;
use yii\helpers\ArrayHelper;

public function behaviors()
{
    return ArrayHelper::merge([
        [
            'class' => Cors::class,
            'cors' => [
                'Origin' => ['https://www.myserver.net'],
                'Access-Control-Request-Method' => ['GET', 'HEAD', 'OPTIONS'],
            ],
            'actions' => [
                'login' => [
                    'Access-Control-Allow-Credentials' => true,
                ]
            ]
        ],
    ], parent::behaviors());
}
```

[Modules](guide_22_0__structure-modules.md)

[Go to Top](#top)

[Widgets](guide_22_0__structure-widgets.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/structure-filters.md) !
