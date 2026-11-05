# RESTful Web Services: Quick Start | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/rest-quick-start

---

0

# Quick Start [¶](#quick-start)

Yii provides a whole set of tools to simplify the task of implementing RESTful Web Service APIs.
In particular, Yii supports the following features about RESTful APIs:

- Quick prototyping with support for common APIs for [Active Record](guide_22_0__db-active-record.md);
- Response format negotiation (supporting JSON and XML by default);
- Customizable object serialization with support for selectable output fields;
- Proper formatting of collection data and validation errors;
- Collection pagination, filtering and sorting;
- Support for [HATEOAS](https://en.wikipedia.org/wiki/HATEOAS);
- Efficient routing with proper HTTP verb check;
- Built-in support for the `OPTIONS` and `HEAD` verbs;
- Authentication and authorization;
- Data caching and HTTP caching;
- Rate limiting;

In the following, we use an example to illustrate how you can build a set of RESTful APIs with some minimal coding effort.

Assume you want to expose the user data via RESTful APIs. The user data are stored in the `user` DB table,
and you have already created the [active record](guide_22_0__db-active-record.md) class `app\models\User` to access the user data.

## Creating a Controller [¶](#creating-controller)

First, create a [controller](guide_22_0__structure-controllers.md) class `app\controllers\UserController` as follows:

```
namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
}
```

The controller class extends from [yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller), which implements a common set of RESTful actions.
By specifying [modelClass](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller#$modelClass-detail)
as `app\models\User`, the controller knows which model can be used for fetching and manipulating data.

## Configuring URL Rules [¶](#configuring-url-rules)

Then, modify the configuration of the `urlManager` component in your application configuration:

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

The above configuration mainly adds a URL rule for the `user` controller so that the user data
can be accessed and manipulated with pretty URLs and meaningful HTTP verbs.

> **Note:** Yii will automatically pluralize controller names for use in endpoints (see [Trying it Out](#trying-it-out) section below).
> You can configure this using the [yii\rest\UrlRule::$pluralize](https://www.yiiframework.com/doc/api/22.0/yii-rest-urlrule#$pluralize-detail) property.

## Enabling JSON Input [¶](#enabling-json-input)

To let the API accept input data in JSON format, configure the [parsers](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$parsers-detail) property of
the `request` [application component](guide_22_0__structure-application-components.md) to use the [yii\web\JsonParser](https://www.yiiframework.com/doc/api/22.0/yii-web-jsonparser) for JSON input:

```
'request' => [
    'parsers' => [
        'application/json' => 'yii\web\JsonParser',
    ]
]
```

> **Info:** The above configuration is optional. Without the above configuration, the API would only recognize
> `application/x-www-form-urlencoded` and `multipart/form-data` input formats.

## Trying it Out [¶](#trying-it-out)

With the above minimal amount of effort, you have already finished your task of creating the RESTful APIs
for accessing the user data. The APIs you have created include:

- `GET /users`: list all users page by page;
- `HEAD /users`: show the overview information of user listing;
- `POST /users`: create a new user;
- `GET /users/123`: return the details of the user 123;
- `HEAD /users/123`: show the overview information of user 123;
- `PATCH /users/123` and `PUT /users/123`: update the user 123;
- `DELETE /users/123`: delete the user 123;
- `OPTIONS /users`: show the supported verbs regarding endpoint `/users`;
- `OPTIONS /users/123`: show the supported verbs regarding endpoint `/users/123`.

You may access your APIs with the `curl` command like the following,

```
$ curl -i -H "Accept:application/json" "http://localhost/users"

HTTP/1.1 200 OK
...
X-Pagination-Total-Count: 1000
X-Pagination-Page-Count: 50
X-Pagination-Current-Page: 1
X-Pagination-Per-Page: 20
Link: <http://localhost/users?page=1>; rel=self, 
      <http://localhost/users?page=2>; rel=next, 
      <http://localhost/users?page=50>; rel=last
Transfer-Encoding: chunked
Content-Type: application/json; charset=UTF-8

[
    {
        "id": 1,
        ...
    },
    {
        "id": 2,
        ...
    },
    ...
]
```

Try changing the acceptable content type to be `application/xml`, and you will see the result
is returned in XML format:

```
$ curl -i -H "Accept:application/xml" "http://localhost/users"

HTTP/1.1 200 OK
...
X-Pagination-Total-Count: 1000
X-Pagination-Page-Count: 50
X-Pagination-Current-Page: 1
X-Pagination-Per-Page: 20
Link: <http://localhost/users?page=1>; rel=self, 
      <http://localhost/users?page=2>; rel=next, 
      <http://localhost/users?page=50>; rel=last
Transfer-Encoding: chunked
Content-Type: application/xml

<?xml version="1.0" encoding="UTF-8"?>
<response>
    <item>
        <id>1</id>
        ...
    </item>
    <item>
        <id>2</id>
        ...
    </item>
    ...
</response>
```

The following command will create a new user by sending a POST request with the user data in JSON format:

```
$ curl -i -H "Accept:application/json" -H "Content-Type:application/json" \
    -XPOST "http://localhost/users" \
    -d '{"username": "example", "email": "user@example.com"}'

HTTP/1.1 201 Created
...
Location: http://localhost/users/1
Content-Length: 99
Content-Type: application/json; charset=UTF-8

{"id":1,"username":"example","email":"user@example.com","created_at":1414674789,"updated_at":1414674789}
```

> **Tip:** You may also access your APIs via Web browser by entering the URL `http://localhost/users`.
> However, you may need some browser plugins to send specific request headers.

As you can see, in the response headers, there is information about the total count, page count, etc.
There are also links that allow you to navigate to other pages of data. For example, `http://localhost/users?page=2`
would give you the next page of the user data.

Using the `fields` and `expand` parameters, you may also specify which fields should be included in the result.
For example, the URL `http://localhost/users?fields=id,email` will only return the `id` and `email` fields.

> **Info:** You may have noticed that the result of `http://localhost/users` includes some sensitive fields,
> such as `password_hash`, `auth_key`. You certainly do not want these to appear in your API result.
> You can and should remove these fields from result as described in the [Resources](guide_22_0__rest-resources.md) section.

Additionally, you can sort collections like `http://localhost/users?sort=email` or
`http://localhost/users?sort=-email`. Filtering collections like `http://localhost/users?filter[id]=10` or
`http://localhost/users?filter[email][like]=gmail.com` could be implemented using
data filters. See [Filtering Collections](guide_22_0__rest-filtering-collections.md) section for details.

## Customizing Pagination and Sorting in the list [¶](#customizing-pagination-and-sorting)

In order to change the default [pagination](guide_22_0__output-pagination.md) and [sorting](guide_22_0__output-sorting.md) of the model list
you can configure the [yii\rest\IndexAction](https://www.yiiframework.com/doc/api/22.0/yii-rest-indexaction) in your controller. For example:

```
<?php
namespace app\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
    
    public function actions()
    {
        return ArrayHelper::merge(parent::actions(), [
            'index' => [
                'pagination' => [
                    'pageSize' => 10,
                ],
                'sort' => [
                    'defaultOrder' => [
                        'created_at' => SORT_DESC,
                    ],
                ],
            ],
        ]);
    }
}
```

Please see [Extending ActiveController](guide_22_0__rest-controllers.md#extending-active-controller) for more information on how to
configure actions of the ActiveController.

## Summary [¶](#summary)

Using the Yii RESTful API framework, you implement an API endpoint in terms of a controller action, and you use
a controller to organize the actions that implement the endpoints for a single type of resource.

Resources are represented as data models which extend from the [yii\base\Model](https://www.yiiframework.com/doc/api/22.0/yii-base-model) class.
If you are working with databases (relational or NoSQL), it is recommended you use [ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord)
to represent resources.

You may use [yii\rest\UrlRule](https://www.yiiframework.com/doc/api/22.0/yii-rest-urlrule) to simplify the routing to your API endpoints.

While not required, it is recommended that you develop your RESTful APIs as a separate application, different from
your Web front end and back end for easier maintenance.

[Caching: HTTP Caching](guide_22_0__caching-http.md)

[Go to Top](#top)

[Resources](guide_22_0__rest-resources.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/rest-quick-start.md) !
