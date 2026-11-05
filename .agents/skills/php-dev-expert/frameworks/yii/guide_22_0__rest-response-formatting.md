# RESTful Web Services: Response Formatting | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/rest-response-formatting

---

0

# Response Formatting [¶](#response-formatting)

When handling a RESTful API request, an application usually takes the following steps that are related
with response formatting:

1. Determine various factors that may affect the response format, such as media type, language, version, etc.
   This process is also known as [content negotiation](https://en.wikipedia.org/wiki/Content_negotiation).
2. Convert resource objects into arrays, as described in the [Resources](guide_22_0__rest-resources.md) section.
   This is done by [yii\rest\Serializer](https://www.yiiframework.com/doc/api/22.0/yii-rest-serializer).
3. Convert arrays into a string in the format as determined by the content negotiation step. This is
   done by [response formatters](https://www.yiiframework.com/doc/api/22.0/yii-web-responseformatterinterface) registered with
   the [formatters](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$formatters-detail) property of the
   `response` [application component](guide_22_0__structure-application-components.md).

## Content Negotiation [¶](#content-negotiation)

Yii supports content negotiation via the [yii\filters\ContentNegotiator](https://www.yiiframework.com/doc/api/22.0/yii-filters-contentnegotiator) filter. The RESTful API base
controller class [yii\rest\Controller](https://www.yiiframework.com/doc/api/22.0/yii-rest-controller) is equipped with this filter under the name of `contentNegotiator`.
The filter provides response format negotiation as well as language negotiation. For example, if a RESTful
API request contains the following header,

```
Accept: application/json; q=1.0, */*; q=0.1
```

it will get a response in JSON format, like the following:

```
$ curl -i -H "Accept: application/json; q=1.0, */*; q=0.1" "http://localhost/users"

HTTP/1.1 200 OK
Date: Sun, 02 Mar 2014 05:31:43 GMT
Server: Apache/2.2.26 (Unix) DAV/2 PHP/5.4.20 mod_ssl/2.2.26 OpenSSL/0.9.8y
X-Powered-By: PHP/5.4.20
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

Behind the scene, before a RESTful API controller action is executed, the [yii\filters\ContentNegotiator](https://www.yiiframework.com/doc/api/22.0/yii-filters-contentnegotiator)
filter will check the `Accept` HTTP header in the request and set the [response format](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$format-detail)
to be `'json'`. After the action is executed and returns the resulting resource object or collection,
[yii\rest\Serializer](https://www.yiiframework.com/doc/api/22.0/yii-rest-serializer) will convert the result into an array. And finally, [yii\web\JsonResponseFormatter](https://www.yiiframework.com/doc/api/22.0/yii-web-jsonresponseformatter)
will serialize the array into a JSON string and include it in the response body.

By default, RESTful APIs support both JSON and XML formats. To support a new format, you should configure
the [formats](https://www.yiiframework.com/doc/api/22.0/yii-filters-contentnegotiator#$formats-detail) property of the `contentNegotiator` filter like
the following in your API controller classes:

```
use yii\web\Response;

public function behaviors()
{
    $behaviors = parent::behaviors();
    $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_HTML;
    return $behaviors;
}
```

The keys of the `formats` property are the supported MIME types, while the values are the corresponding
response format names which must be supported in [yii\web\Response::$formatters](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$formatters-detail).

## Data Serializing [¶](#data-serializing)

As we have described above, [yii\rest\Serializer](https://www.yiiframework.com/doc/api/22.0/yii-rest-serializer) is the central piece responsible for converting resource
objects or collections into arrays. It recognizes objects implementing [yii\base\Arrayable](https://www.yiiframework.com/doc/api/22.0/yii-base-arrayable) as
well as [yii\data\DataProviderInterface](https://www.yiiframework.com/doc/api/22.0/yii-data-dataproviderinterface). The former is mainly implemented by resource objects, while
the latter resource collections.

You may configure the serializer by setting the [yii\rest\Controller::$serializer](https://www.yiiframework.com/doc/api/22.0/yii-rest-controller#$serializer-detail) property with a configuration array.
For example, sometimes you may want to help simplify the client development work by including pagination information
directly in the response body. To do so, configure the [yii\rest\Serializer::$collectionEnvelope](https://www.yiiframework.com/doc/api/22.0/yii-rest-serializer#$collectionEnvelope-detail) property
as follows:

```
use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}
```

You may then get the following response for request `http://localhost/users`:

```
HTTP/1.1 200 OK
Date: Sun, 02 Mar 2014 05:31:43 GMT
Server: Apache/2.2.26 (Unix) DAV/2 PHP/5.4.20 mod_ssl/2.2.26 OpenSSL/0.9.8y
X-Powered-By: PHP/5.4.20
X-Pagination-Total-Count: 1000
X-Pagination-Page-Count: 50
X-Pagination-Current-Page: 1
X-Pagination-Per-Page: 20
Link: <http://localhost/users?page=1>; rel=self,
      <http://localhost/users?page=2>; rel=next,
      <http://localhost/users?page=50>; rel=last
Transfer-Encoding: chunked
Content-Type: application/json; charset=UTF-8

{
    "items": [
        {
            "id": 1,
            ...
        },
        {
            "id": 2,
            ...
        },
        ...
    ],
    "_links": {
        "self": {
            "href": "http://localhost/users?page=1"
        },
        "next": {
            "href": "http://localhost/users?page=2"
        },
        "last": {
            "href": "http://localhost/users?page=50"
        }
    },
    "_meta": {
        "totalCount": 1000,
        "pageCount": 50,
        "currentPage": 1,
        "perPage": 20
    }
}
```

### Controlling JSON output [¶](#controlling-json-output)

The JSON response is generated by the [JsonResponseFormatter](https://www.yiiframework.com/doc/api/22.0/yii-web-jsonresponseformatter) class which will
use the [JSON helper](https://www.yiiframework.com/doc/api/22.0/yii-helpers-json) internally. This formatter can be configured with different options like
for example the [$prettyPrint](https://www.yiiframework.com/doc/api/22.0/yii-web-jsonresponseformatter#$prettyPrint-detail) option, which is useful on development for
better readable responses, or [$encodeOptions](https://www.yiiframework.com/doc/api/22.0/yii-web-jsonresponseformatter#$encodeOptions-detail) to control the output
of the JSON encoding.

The formatter can be configured in the [formatters](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$formatters-detail) property of the `response` application
component in the application [configuration](guide_22_0__concept-configurations.md) like the following:

```
'response' => [
    // ...
    'formatters' => [
        \yii\web\Response::FORMAT_JSON => [
            'class' => 'yii\web\JsonResponseFormatter',
            'prettyPrint' => YII_DEBUG, // use "pretty" output in debug mode
            'encodeOptions' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
            // ...
        ],
    ],
],
```

When returning data from a database using the [DAO](guide_22_0__db-dao.md) database layer all data will be represented
as strings, which is not always the expected result especially numeric values should be represented as
numbers in JSON. When using the ActiveRecord layer for retrieving data from the database, the values for numeric
columns will be converted to integers when data is fetched from the database in [yii\db\ActiveRecord::populateRecord()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#populateRecord()-detail).

[Routing](guide_22_0__rest-routing.md)

[Go to Top](#top)

[Authentication](guide_22_0__rest-authentication.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/rest-response-formatting.md) !
