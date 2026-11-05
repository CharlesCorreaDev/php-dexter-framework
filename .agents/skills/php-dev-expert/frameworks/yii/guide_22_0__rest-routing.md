# RESTful Web Services: Routing | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/rest-routing

---

0

# Routing [¶](#routing)

With resource and controller classes ready, you can access the resources using the URL like
`http://localhost/index.php?r=user/create`, similar to what you can do with normal Web applications.

In practice, you usually want to enable pretty URLs and take advantage of HTTP verbs.
For example, a request `POST /users` would mean accessing the `user/create` action.
This can be done easily by configuring the `urlManager` [application component](guide_22_0__structure-application-components.md)
in the application configuration like the following:

```
'urlManager' => [
    'enablePrettyUrl' => true,
    'enableStrictParsing' => true,
    'showScriptName' => false,
    'rules' => [
        ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
    ],
]
```

Compared to the URL management for Web applications, the main new thing above is the use of
[yii\rest\UrlRule](https://www.yiiframework.com/doc/api/22.0/yii-rest-urlrule) for routing RESTful API requests. This special URL rule class will
create a whole set of child URL rules to support routing and URL creation for the specified controller(s).
For example, the above code is roughly equivalent to the following rules:

```
[
    'PUT,PATCH users/<id>' => 'user/update',
    'DELETE users/<id>' => 'user/delete',
    'GET,HEAD users/<id>' => 'user/view',
    'POST users' => 'user/create',
    'GET,HEAD users' => 'user/index',
    'users/<id>' => 'user/options',
    'users' => 'user/options',
]
```

And the following API endpoints are supported by this rule:

- `GET /users`: list all users page by page;
- `HEAD /users`: show the overview information of user listing;
- `POST /users`: create a new user;
- `GET /users/123`: return the details of the user 123;
- `HEAD /users/123`: show the overview information of user 123;
- `PATCH /users/123` and `PUT /users/123`: update the user 123;
- `DELETE /users/123`: delete the user 123;
- `OPTIONS /users`: show the supported verbs regarding endpoint `/users`;
- `OPTIONS /users/123`: show the supported verbs regarding endpoint `/users/123`.

You may configure the `only` and `except` options to explicitly list which actions to support or which
actions should be disabled, respectively. For example,

```
[
    'class' => 'yii\rest\UrlRule',
    'controller' => 'user',
    'except' => ['delete', 'create', 'update'],
],
```

You may also configure `patterns` or `extraPatterns` to redefine existing patterns or add new patterns supported by this rule.
For example, to support a new action `search` by the endpoint `GET /users/search`, configure the `extraPatterns` option as follows,

```
[
    'class' => 'yii\rest\UrlRule',
    'controller' => 'user',
    'extraPatterns' => [
        'GET search' => 'search',
    ],
]
```

You may have noticed that the controller ID `user` appears in plural form as `users` in the endpoint URLs.
This is because [yii\rest\UrlRule](https://www.yiiframework.com/doc/api/22.0/yii-rest-urlrule) automatically pluralizes controller IDs when creating child URL rules.
You may disable this behavior by setting [yii\rest\UrlRule::$pluralize](https://www.yiiframework.com/doc/api/22.0/yii-rest-urlrule#$pluralize-detail) to be `false`.

> **Info:** The pluralization of controller IDs is done by [yii\helpers\Inflector::pluralize()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-baseinflector#pluralize()-detail). The method respects
> special pluralization rules. For example, the word `box` will be pluralized as `boxes` instead of `boxs`.

In case when the automatic pluralization does not meet your requirement, you may also configure the
[yii\rest\UrlRule::$controller](https://www.yiiframework.com/doc/api/22.0/yii-rest-urlrule#$controller-detail) property to explicitly specify how to map a name used in endpoint URLs to
a controller ID. For example, the following code maps the name `u` to the controller ID `user`.

```
[
    'class' => 'yii\rest\UrlRule',
    'controller' => ['u' => 'user'],
]
```

## Extra configuration for contained rules [¶](#extra-configuration-for-contained-rules)

It could be useful to specify extra configuration that is applied to each rule contained within [yii\rest\UrlRule](https://www.yiiframework.com/doc/api/22.0/yii-rest-urlrule).
A good example would be specifying defaults for `expand` parameter:

```
[
    'class' => 'yii\rest\UrlRule',
    'controller' => ['user'],
    'ruleConfig' => [
        'class' => 'yii\web\UrlRule',
        'defaults' => [
            'expand' => 'profile',
        ]
    ],
],
```

[Filtering Collections](guide_22_0__rest-filtering-collections.md)

[Go to Top](#top)

[Response Formatting](guide_22_0__rest-response-formatting.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/rest-routing.md) !
