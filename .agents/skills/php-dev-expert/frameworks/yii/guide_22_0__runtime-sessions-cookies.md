# Handling Requests: Sessions and Cookies | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/runtime-sessions-cookies

---

0

# Sessions and Cookies [¶](#sessions-and-cookies)

Sessions and cookies allow data to be persisted across multiple user requests. In plain PHP you may access them
through the global variables `$_SESSION` and `$_COOKIE`, respectively. Yii encapsulates sessions and cookies as objects
and thus allows you to access them in an object-oriented fashion with additional useful enhancements.

## Sessions [¶](#sessions)

Like [requests](guide_22_0__runtime-requests.md) and [responses](guide_22_0__runtime-responses.md), you can get access to sessions via
the `session` [application component](guide_22_0__structure-application-components.md) which is an instance of [yii\web\Session](https://www.yiiframework.com/doc/api/22.0/yii-web-session),
by default.

### Opening and Closing Sessions [¶](#opening-closing-sessions)

To open and close a session, you can do the following:

```
$session = Yii::$app->session;

// check if a session is already open
if ($session->isActive) ...

// open a session
$session->open();

// close a session
$session->close();

// destroys all data registered to a session.
$session->destroy();
```

You can call [open()](https://www.yiiframework.com/doc/api/22.0/yii-web-session#open()-detail) and [close()](https://www.yiiframework.com/doc/api/22.0/yii-web-session#close()-detail) multiple times
without causing errors; internally the methods will first check if the session is already open.

### Accessing Session Data [¶](#access-session-data)

To access the data stored in session, you can do the following:

```
$session = Yii::$app->session;

// get a session variable. The following usages are equivalent:
$language = $session->get('language');
$language = $session['language'];
$language = isset($_SESSION['language']) ? $_SESSION['language'] : null;

// set a session variable. The following usages are equivalent:
$session->set('language', 'en-US');
$session['language'] = 'en-US';
$_SESSION['language'] = 'en-US';

// remove a session variable. The following usages are equivalent:
$session->remove('language');
unset($session['language']);
unset($_SESSION['language']);

// check if a session variable exists. The following usages are equivalent:
if ($session->has('language')) ...
if (isset($session['language'])) ...
if (isset($_SESSION['language'])) ...

// traverse all session variables. The following usages are equivalent:
foreach ($session as $name => $value) ...
foreach ($_SESSION as $name => $value) ...
```

> **Info:** When you access session data through the `session` component, a session will be automatically opened
> if it has not been done so before. This is different from accessing session data through `$_SESSION`, which requires
> an explicit call of `session_start()`.

When working with session data that are arrays, the `session` component has a limitation which prevents you from
directly modifying an array element. For example,

```
$session = Yii::$app->session;

// the following code will NOT work
$session['captcha']['number'] = 5;
$session['captcha']['lifetime'] = 3600;

// the following code works:
$session['captcha'] = [
    'number' => 5,
    'lifetime' => 3600,
];

// the following code also works:
echo $session['captcha']['lifetime'];
```

You can use one of the following workarounds to solve this problem:

```
$session = Yii::$app->session;

// directly use $_SESSION (make sure Yii::$app->session->open() has been called)
$_SESSION['captcha']['number'] = 5;
$_SESSION['captcha']['lifetime'] = 3600;

// get the whole array first, modify it and then save it back
$captcha = $session['captcha'];
$captcha['number'] = 5;
$captcha['lifetime'] = 3600;
$session['captcha'] = $captcha;

// use ArrayObject instead of array
$session['captcha'] = new \ArrayObject;
...
$session['captcha']['number'] = 5;
$session['captcha']['lifetime'] = 3600;

// store array data by keys with a common prefix
$session['captcha.number'] = 5;
$session['captcha.lifetime'] = 3600;
```

For better performance and code readability, we recommend the last workaround. That is, instead of storing
an array as a single session variable, you store each array element as a session variable which shares the same
key prefix with other array elements.

### Custom Session Storage [¶](#custom-session-storage)

The default [yii\web\Session](https://www.yiiframework.com/doc/api/22.0/yii-web-session) class stores session data as files on the server. Yii also provides the following
session classes implementing different session storage:

- [yii\web\DbSession](https://www.yiiframework.com/doc/api/22.0/yii-web-dbsession): stores session data in a database table.
- [yii\web\CacheSession](https://www.yiiframework.com/doc/api/22.0/yii-web-cachesession): stores session data in a cache with the help of a configured [cache component](guide_22_0__caching-data.md#cache-components).
- yii\redis\Session: stores session data using [redis](https://redis.io/) as the storage medium.
- yii\mongodb\Session: stores session data in a [MongoDB](https://www.mongodb.com/).

All these session classes support the same set of API methods. As a result, you can switch to a different
session storage class without the need to modify your application code that uses sessions.

> **Note:** If you want to access session data via `$_SESSION` while using custom session storage, you must make
> sure that the session has already been started by [yii\web\Session::open()](https://www.yiiframework.com/doc/api/22.0/yii-web-session#open()-detail). This is because custom session storage
> handlers are registered within this method.

> **Note:** If you use a custom session storage you may need to configure the session garbage collector explicitly.
> Some installations of PHP (e.g. Debian) use a garbage collector probability of 0 and clean session files
> offline in a cronjob. This process does not apply to your custom storage so you need to configure
> yii\web\Session::$GCProbability to use a non-zero value.

To learn how to configure and use these component classes, please refer to their API documentation. Below is
an example showing how to configure [yii\web\DbSession](https://www.yiiframework.com/doc/api/22.0/yii-web-dbsession) in the application configuration to use a database table
for session storage:

```
return [
    'components' => [
        'session' => [
            'class' => 'yii\web\DbSession',
            // 'db' => 'mydb',  // the application component ID of the DB connection. Defaults to 'db'.
            // 'sessionTable' => 'my_session', // session table name. Defaults to 'session'.
        ],
    ],
];
```

You also need to create the following database table to store session data:

```
CREATE TABLE session
(
    id CHAR(40) NOT NULL PRIMARY KEY,
    expire INTEGER,
    data BLOB
)
```

where 'BLOB' refers to the BLOB-type of your preferred DBMS. Below are the BLOB types that can be used for some popular DBMS:

- MySQL: LONGBLOB
- PostgreSQL: BYTEA
- MSSQL: BLOB

> **Note:** According to the php.ini setting of `session.hash_function`, you may need to adjust
> the length of the `id` column. For example, if `session.hash_function=sha256`, you should use a
> length 64 instead of 40.

Alternatively, this can be accomplished with the following migration:

```
<?php

use yii\db\Migration;

class m170529_050554_create_table_session extends Migration
{
    public function up()
    {
        $this->createTable('{{%session}}', [
            'id' => $this->char(64)->notNull(),
            'expire' => $this->integer(),
            'data' => $this->binary()
        ]);
        $this->addPrimaryKey('pk-id', '{{%session}}', 'id');
    }

    public function down()
    {
        $this->dropTable('{{%session}}');
    }
}
```

### Flash Data [¶](#flash-data)

Flash data is a special kind of session data which, once set in one request, will only be available during
the next request and will be automatically deleted afterwards. Flash data is most commonly used to implement
messages that should only be displayed to end users once, such as a confirmation message displayed after
a user successfully submits a form.

You can set and access flash data through the `session` application component. For example,

```
$session = Yii::$app->session;

// Request #1
// set a flash message named as "postDeleted"
$session->setFlash('postDeleted', 'You have successfully deleted your post.');

// Request #2
// display the flash message named "postDeleted"
echo $session->getFlash('postDeleted');

// Request #3
// $result will be false since the flash message was automatically deleted
$result = $session->hasFlash('postDeleted');
```

Like regular session data, you can store arbitrary data as flash data.

When you call [yii\web\Session::setFlash()](https://www.yiiframework.com/doc/api/22.0/yii-web-session#setFlash()-detail), it will overwrite any existing flash data that has the same name.
To append new flash data to an existing message of the same name, you may call [yii\web\Session::addFlash()](https://www.yiiframework.com/doc/api/22.0/yii-web-session#addFlash()-detail) instead.
For example:

```
$session = Yii::$app->session;

// Request #1
// add a few flash messages under the name of "alerts"
$session->addFlash('alerts', 'You have successfully deleted your post.');
$session->addFlash('alerts', 'You have successfully added a new friend.');
$session->addFlash('alerts', 'You are promoted.');

// Request #2
// $alerts is an array of the flash messages under the name of "alerts"
$alerts = $session->getFlash('alerts');
```

> **Note:** Try not to use [yii\web\Session::setFlash()](https://www.yiiframework.com/doc/api/22.0/yii-web-session#setFlash()-detail) together with [yii\web\Session::addFlash()](https://www.yiiframework.com/doc/api/22.0/yii-web-session#addFlash()-detail) for flash data
> of the same name. This is because the latter method will automatically turn the flash data into an array so that it
> can append new flash data of the same name. As a result, when you call [yii\web\Session::getFlash()](https://www.yiiframework.com/doc/api/22.0/yii-web-session#getFlash()-detail), you may
> find sometimes you are getting an array while sometimes you are getting a string, depending on the order of
> the invocation of these two methods.

> **Tip:** For displaying Flash messages you can use yii\bootstrap\Alert widget in the following way:
>
> ```
> echo Alert::widget([
>    'options' => ['class' => 'alert-info'],
>    'body' => Yii::$app->session->getFlash('postDeleted'),
> ]);
> ```

## Cookies [¶](#cookies)

Yii represents each cookie as an object of [yii\web\Cookie](https://www.yiiframework.com/doc/api/22.0/yii-web-cookie). Both [yii\web\Request](https://www.yiiframework.com/doc/api/22.0/yii-web-request) and [yii\web\Response](https://www.yiiframework.com/doc/api/22.0/yii-web-response)
maintain a collection of cookies via the property named `cookies`. The cookie collection in the former represents
the cookies submitted in a request, while the cookie collection in the latter represents the cookies that are to
be sent to the user.

The part of the application dealing with request and response directly is controller. Therefore, cookies should be
read and sent in controller.

### Reading Cookies [¶](#reading-cookies)

You can get the cookies in the current request using the following code:

```
// get the cookie collection (yii\web\CookieCollection) from the "request" component
$cookies = Yii::$app->request->cookies;

// get the "language" cookie value. If the cookie does not exist, return "en" as the default value.
$language = $cookies->getValue('language', 'en');

// an alternative way of getting the "language" cookie value
if (($cookie = $cookies->get('language')) !== null) {
    $language = $cookie->value;
}

// you may also use $cookies like an array
if (isset($cookies['language'])) {
    $language = $cookies['language']->value;
}

// check if there is a "language" cookie
if ($cookies->has('language')) ...
if (isset($cookies['language'])) ...
```

### Sending Cookies [¶](#sending-cookies)

You can send cookies to end users using the following code:

```
// get the cookie collection (yii\web\CookieCollection) from the "response" component
$cookies = Yii::$app->response->cookies;

// add a new cookie to the response to be sent
$cookies->add(new \yii\web\Cookie([
    'name' => 'language',
    'value' => 'zh-CN',
]));

// remove a cookie
$cookies->remove('language');
// equivalent to the following
unset($cookies['language']);
```

Besides the [name](https://www.yiiframework.com/doc/api/22.0/yii-web-cookie#$name-detail), [value](https://www.yiiframework.com/doc/api/22.0/yii-web-cookie#$value-detail) properties shown in the above
examples, the [yii\web\Cookie](https://www.yiiframework.com/doc/api/22.0/yii-web-cookie) class also defines other properties to fully represent all available cookie
information, such as [domain](https://www.yiiframework.com/doc/api/22.0/yii-web-cookie#$domain-detail), [expire](https://www.yiiframework.com/doc/api/22.0/yii-web-cookie#$expire-detail). You may configure these
properties as needed to prepare a cookie and then add it to the response's cookie collection.

### Cookie Validation [¶](#cookie-validation)

When you are reading and sending cookies through the `request` and `response` components as shown in the last
two subsections, you enjoy the added security of cookie validation which protects cookies from being modified
on the client-side. This is achieved by signing each cookie with a hash string, which allows the application to
tell if a cookie has been modified on the client-side. If so, the cookie will NOT be accessible through the
[cookie collection](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$cookies-detail) of the `request` component.

> **Note:** Cookie validation only protects cookie values from being modified. If a cookie fails the validation,
> you may still access it through `$_COOKIE`. This is because third-party libraries may manipulate cookies
> in their own way, which does not involve cookie validation.

Cookie validation is enabled by default. You can disable it by setting the [yii\web\Request::$enableCookieValidation](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$enableCookieValidation-detail)
property to be `false`, although we strongly recommend you do not do so.

> **Note:** Cookies that are directly read/sent via `$_COOKIE` and `setcookie()` will NOT be validated.

When using cookie validation, you must specify a [yii\web\Request::$cookieValidationKey](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$cookieValidationKey-detail) that will be used to generate
the aforementioned hash strings. You can do so by configuring the `request` component in the application configuration:

```
return [
    'components' => [
        'request' => [
            'cookieValidationKey' => 'fill in a secret key here',
        ],
    ],
];
```

> **Info:** [cookieValidationKey](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$cookieValidationKey-detail) is critical to your application's security.
> It should only be known to people you trust. Do not store it in the version control system.

## Security settings [¶](#security-settings)

Both [yii\web\Cookie](https://www.yiiframework.com/doc/api/22.0/yii-web-cookie) and [yii\web\Session](https://www.yiiframework.com/doc/api/22.0/yii-web-session) support the following security flags:

### httpOnly [¶](#httponly)

For better security, the default value of [yii\web\Cookie::$httpOnly](https://www.yiiframework.com/doc/api/22.0/yii-web-cookie#$httpOnly-detail) and the 'httponly' parameter of
[yii\web\Session::$cookieParams](https://www.yiiframework.com/doc/api/22.0/yii-web-session#$cookieParams-detail) is set to `true`. This helps mitigate the risk of a client-side script accessing
the protected cookie (if the browser supports it).
You may read the [HttpOnly wiki article](https://owasp.org/www-community/HttpOnly) for more details.

### secure [¶](#secure)

The purpose of the secure flag is to prevent cookies from being sent in clear text. If the browser supports the
secure flag it will only include the cookie when the request is sent over a secure (TLS) connection.
You may read the [SecureFlag wiki article](https://owasp.org/www-community/controls/SecureCookieAttribute) for more details.

### sameSite [¶](#samesite)

Starting with Yii 2.0.21 the [yii\web\Cookie::$sameSite](https://www.yiiframework.com/doc/api/22.0/yii-web-cookie#$sameSite-detail) setting is supported. It requires PHP version 7.4.0 or higher.
The purpose of the `sameSite` setting is to prevent CSRF (Cross-Site Request Forgery) attacks.
If the browser supports the `sameSite` setting it will only include the cookie according to the specified policy ('Lax' or 'Strict').
You may read the [SameSite wiki article](https://owasp.org/www-community/SameSite) for more details.
For better security, an exception will be thrown if `sameSite` is used with an unsupported version of PHP.
To use this feature across different PHP versions check the version first. E.g.

```
[
    'sameSite' => PHP_VERSION_ID >= 70300 ? yii\web\Cookie::SAME_SITE_LAX : null,
]
```

> **Note:** Since not all browsers support the `sameSite` setting yet, it is still strongly recommended to also include
> [additional CSRF protection](guide_22_0__security-best-practices.md#avoiding-csrf).

## Session php.ini settings [¶](#session-phpini-settings)

As [noted in PHP manual](https://www.php.net/manual/en/session.security.ini.php), `php.ini` has important
session security settings. Please ensure recommended settings are applied. Especially `session.use_strict_mode`
that is not enabled by default in PHP installations.
This setting can also be set with [yii\web\Session::$useStrictMode](https://www.yiiframework.com/doc/api/22.0/yii-web-session#$useStrictMode-detail).

[Responses](guide_22_0__runtime-responses.md)

[Go to Top](#top)

[Handling Errors](guide_22_0__runtime-handling-errors.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/runtime-sessions-cookies.md) !
