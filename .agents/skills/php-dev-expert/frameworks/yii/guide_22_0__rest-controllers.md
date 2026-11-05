# RESTful Web Services: Controllers | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/rest-controllers

---

0

# Controllers [¶](#controllers)

After creating the resource classes and specifying how resource data should be formatted, the next thing
to do is to create controller actions to expose the resources to end users through RESTful APIs.

Yii provides two base controller classes to simplify your work of creating RESTful actions:
[yii\rest\Controller](https://www.yiiframework.com/doc/api/22.0/yii-rest-controller) and [yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller). The difference between these two controllers
is that the latter provides a default set of actions that are specifically designed to deal with
resources represented as [Active Record](guide_22_0__db-active-record.md). So if you are using [Active Record](guide_22_0__db-active-record.md)
and are comfortable with the provided built-in actions, you may consider extending your controller classes
from [yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller), which will allow you to create powerful RESTful APIs with minimal code.

Both [yii\rest\Controller](https://www.yiiframework.com/doc/api/22.0/yii-rest-controller) and [yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller) provide the following features, some of which
will be described in detail in the next few sections:

- HTTP method validation;
- [Content negotiation and Data formatting](guide_22_0__rest-response-formatting.md);
- [Authentication](guide_22_0__rest-authentication.md);
- [Rate limiting](guide_22_0__rest-rate-limiting.md).

[yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller) in addition provides the following features:

- A set of commonly needed actions: `index`, `view`, `create`, `update`, `delete`, `options`;
- User authorization in regard to the requested action and resource.

## Creating Controller Classes [¶](#creating-controller)

When creating a new controller class, a convention in naming the controller class is to use
the type name of the resource and use singular form. For example, to serve user information,
the controller may be named as `UserController`.

Creating a new action is similar to creating an action for a Web application. The only difference
is that instead of rendering the result using a view by calling the `render()` method, for RESTful actions
you directly return the data. The [serializer](https://www.yiiframework.com/doc/api/22.0/yii-rest-controller#$serializer-detail) and the
[response object](https://www.yiiframework.com/doc/api/22.0/yii-web-response) will handle the conversion from the original data to the requested
format. For example,

```
public function actionView($id)
{
    return User::findOne($id);
}
```

## Filters [¶](#filters)

Most RESTful API features provided by [yii\rest\Controller](https://www.yiiframework.com/doc/api/22.0/yii-rest-controller) are implemented in terms of [filters](guide_22_0__structure-filters.md).
In particular, the following filters will be executed in the order they are listed:

- [contentNegotiator](https://www.yiiframework.com/doc/api/22.0/yii-filters-contentnegotiator): supports content negotiation, to be explained in
  the [Response Formatting](guide_22_0__rest-response-formatting.md) section;
- [verbFilter](https://www.yiiframework.com/doc/api/22.0/yii-filters-verbfilter): supports HTTP method validation;
- [authenticator](https://www.yiiframework.com/doc/api/22.0/yii-filters-auth-authmethod): supports user authentication, to be explained in
  the [Authentication](guide_22_0__rest-authentication.md) section;
- [rateLimiter](https://www.yiiframework.com/doc/api/22.0/yii-filters-ratelimiter): supports rate limiting, to be explained in
  the [Rate Limiting](guide_22_0__rest-rate-limiting.md) section.

These named filters are declared in the [behaviors()](https://www.yiiframework.com/doc/api/22.0/yii-rest-controller#behaviors()-detail) method.
You may override this method to configure individual filters, disable some of them, or add your own filters.
For example, if you only want to use HTTP basic authentication, you may write the following code:

```
use yii\filters\auth\HttpBasicAuth;

public function behaviors()
{
    $behaviors = parent::behaviors();
    $behaviors['authenticator'] = [
        'class' => HttpBasicAuth::class,
    ];
    return $behaviors;
}
```

### CORS [¶](#cors)

Adding the [Cross-Origin Resource Sharing](guide_22_0__structure-filters.md#cors) filter to a controller is a bit more complicated
than adding other filters described above, because the CORS filter has to be applied before authentication methods
and thus needs a slightly different approach compared to other filters. Also authentication has to be disabled for the
[CORS Preflight requests](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS#preflighted_requests)
so that a browser can safely determine whether a request can be made beforehand without the need for sending
authentication credentials. The following shows the code that is needed to add the [yii\filters\Cors](https://www.yiiframework.com/doc/api/22.0/yii-filters-cors) filter
to an existing controller that extends from [yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller):

```
use yii\filters\auth\HttpBasicAuth;

public function behaviors()
{
    $behaviors = parent::behaviors();

    // remove authentication filter
    $auth = $behaviors['authenticator'];
    unset($behaviors['authenticator']);
    
    // add CORS filter
    $behaviors['corsFilter'] = [
        'class' => \yii\filters\Cors::class,
    ];
    
    // re-add authentication filter
    $behaviors['authenticator'] = $auth;
    // avoid authentication on CORS-pre-flight requests (HTTP OPTIONS method)
    $behaviors['authenticator']['except'] = ['options'];

    return $behaviors;
}
```

## Extending `ActiveController` [¶](#extending-active-controller)

If your controller class extends from [yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller), you should set
its [modelClass](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller#$modelClass-detail) property to be the name of the resource class
that you plan to serve through this controller. The class must extend from [yii\db\ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord).

### Customizing Actions [¶](#customizing-actions)

By default, [yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller) provides the following actions:

- [index](https://www.yiiframework.com/doc/api/22.0/yii-rest-indexaction): list resources page by page;
- [view](https://www.yiiframework.com/doc/api/22.0/yii-rest-viewaction): return the details of a specified resource;
- [create](https://www.yiiframework.com/doc/api/22.0/yii-rest-createaction): create a new resource;
- [update](https://www.yiiframework.com/doc/api/22.0/yii-rest-updateaction): update an existing resource;
- [delete](https://www.yiiframework.com/doc/api/22.0/yii-rest-deleteaction): delete the specified resource;
- [options](https://www.yiiframework.com/doc/api/22.0/yii-rest-optionsaction): return the supported HTTP methods.

All these actions are declared through the [actions()](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller#actions()-detail) method.
You may configure these actions or disable some of them by overriding the `actions()` method, like shown the following,

```
public function actions()
{
    $actions = parent::actions();

    // disable the "delete" and "create" actions
    unset($actions['delete'], $actions['create']);

    // customize the data provider preparation with the "prepareDataProvider()" method
    $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

    return $actions;
}

public function prepareDataProvider()
{
    // prepare and return a data provider for the "index" action
}
```

Please refer to the class references for individual action classes to learn what configuration options are available.

### Performing Access Check [¶](#performing-access-check)

When exposing resources through RESTful APIs, you often need to check if the current user has the permission
to access and manipulate the requested resource(s). With [yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller), this can be done
by overriding the [checkAccess()](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller#checkAccess()-detail) method like the following,

```
/**
 * Checks the privilege of the current user.
 *
 * This method should be overridden to check whether the current user has the privilege
 * to run the specified action against the specified data model.
 * If the user does not have access, a [[ForbiddenHttpException]] should be thrown.
 *
 * @param string $action the ID of the action to be executed
 * @param \yii\base\Model $model the model to be accessed. If `null`, it means no specific model is being accessed.
 * @param array $params additional parameters
 * @throws ForbiddenHttpException if the user does not have access
 */
public function checkAccess($action, $model = null, $params = [])
{
    // check if the user can access $action and $model
    // throw ForbiddenHttpException if access should be denied
    if ($action === 'update' || $action === 'delete') {
        if ($model->author_id !== \Yii::$app->user->id)
            throw new \yii\web\ForbiddenHttpException(sprintf('You can only %s articles that you\'ve created.', $action));
    }
}
```

The `checkAccess()` method will be called by the default actions of [yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller). If you create
new actions and also want to perform access check, you should call this method explicitly in the new actions.

> **Tip:** You may implement `checkAccess()` by using the [Role-Based Access Control (RBAC) component](guide_22_0__security-authorization.md).

[Resources](guide_22_0__rest-resources.md)

[Go to Top](#top)

[Filtering Collections](guide_22_0__rest-filtering-collections.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/rest-controllers.md) !
