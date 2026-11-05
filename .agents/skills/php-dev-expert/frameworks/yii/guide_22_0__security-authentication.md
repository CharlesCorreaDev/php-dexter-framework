# Security: Authentication | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/security-authentication

---

0

# Authentication [¶](#authentication)

Authentication is the process of verifying the identity of a user. It usually uses an identifier
(e.g. a username or an email address) and a secret token (e.g. a password or an access token) to judge
if the user is the one whom he claims as. Authentication is the basis of the login feature.

Yii provides an authentication framework which wires up various components to support login. To use this framework,
you mainly need to do the following work:

- Configure the [user](https://www.yiiframework.com/doc/api/22.0/yii-web-user) application component;
- Create a class that implements the [yii\web\IdentityInterface](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface) interface.

## Configuring [yii\web\User](https://www.yiiframework.com/doc/api/22.0/yii-web-user) [¶](#configuring-user)

The [user](https://www.yiiframework.com/doc/api/22.0/yii-web-user) application component manages the user authentication status. It requires you to
specify an [identity class](https://www.yiiframework.com/doc/api/22.0/yii-web-user#$identityClass-detail) which contains the actual authentication logic.
In the following application configuration, the [identity class](https://www.yiiframework.com/doc/api/22.0/yii-web-user#$identityClass-detail) for
[user](https://www.yiiframework.com/doc/api/22.0/yii-web-user) is configured to be `app\models\User` whose implementation is explained in
the next subsection:

```
return [
    'components' => [
        'user' => [
            'identityClass' => 'app\models\User',
        ],
    ],
];
```

## Implementing [yii\web\IdentityInterface](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface) [¶](#implementing-identity)

The [identity class](https://www.yiiframework.com/doc/api/22.0/yii-web-user#$identityClass-detail) must implement the [yii\web\IdentityInterface](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface) which contains
the following methods:

- [findIdentity()](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface#findIdentity()-detail): it looks for an instance of the identity
  class using the specified user ID. This method is used when you need to maintain the login status via session.
- [findIdentityByAccessToken()](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface#findIdentityByAccessToken()-detail): it looks for
  an instance of the identity class using the specified access token. This method is used when you need
  to authenticate a user by a single secret token (e.g. in a stateless RESTful application).
- [getId()](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface#getId()-detail): it returns the ID of the user represented by this identity instance.
- [getAuthKey()](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface#getAuthKey()-detail): it returns a key used to validate session and auto-login in
  case it is enabled.
- [validateAuthKey()](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface#validateAuthKey()-detail): it implements the logic for verifying
  authentication key.

If a particular method is not needed, you may implement it with an empty body. For example, if your application
is a pure stateless RESTful application, you would only need to implement [findIdentityByAccessToken()](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface#findIdentityByAccessToken()-detail)
and [getId()](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface#getId()-detail) while leaving all other methods with an empty body. Or if your
application uses session only authentication, you would need to implement all the methods except
[findIdentityByAccessToken()](https://www.yiiframework.com/doc/api/22.0/yii-web-identityinterface#findIdentityByAccessToken()-detail).

In the following example, an [identity class](https://www.yiiframework.com/doc/api/22.0/yii-web-user#$identityClass-detail) is implemented as
an [Active Record](guide_22_0__db-active-record.md) class associated with the `user` database table.

```
<?php

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null current user auth key
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return bool|null if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
}
```

You may use the following code to generate an auth key for each
user and then store it in the `user` table:

```
class User extends ActiveRecord implements IdentityInterface
{
    ......

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->auth_key = \Yii::$app->security->generateRandomString();
            }
            return true;
        }
        return false;
    }
}
```

> **Note:** Do not confuse the `User` identity class with [yii\web\User](https://www.yiiframework.com/doc/api/22.0/yii-web-user). The former is the class implementing
> the authentication logic. It is often implemented as an [Active Record](guide_22_0__db-active-record.md) class associated
> with some persistent storage for storing the user credential information. The latter is an application component
> class responsible for managing the user authentication state.

## Using [yii\web\User](https://www.yiiframework.com/doc/api/22.0/yii-web-user) [¶](#using-user)

You mainly use [yii\web\User](https://www.yiiframework.com/doc/api/22.0/yii-web-user) in terms of the `user` application component.

You can detect the identity of the current user using the expression `Yii::$app->user->identity`. It returns
an instance of the [identity class](https://www.yiiframework.com/doc/api/22.0/yii-web-user#$identityClass-detail) representing the currently logged-in user,
or `null` if the current user is not authenticated (meaning a guest). The following code shows how to retrieve
other authentication-related information from [yii\web\User](https://www.yiiframework.com/doc/api/22.0/yii-web-user):

```
// the current user identity. `null` if the user is not authenticated.
$identity = Yii::$app->user->identity;

// the ID of the current user. `null` if the user not authenticated.
$id = Yii::$app->user->id;

// whether the current user is a guest (not authenticated)
$isGuest = Yii::$app->user->isGuest;
```

To login a user, you may use the following code:

```
// find a user identity with the specified username.
// note that you may want to check the password if needed
$identity = User::findOne(['username' => $username]);

// logs in the user
Yii::$app->user->login($identity);
```

The [yii\web\User::login()](https://www.yiiframework.com/doc/api/22.0/yii-web-user#login()-detail) method sets the identity of the current user to the [yii\web\User](https://www.yiiframework.com/doc/api/22.0/yii-web-user). If session is
[enabled](https://www.yiiframework.com/doc/api/22.0/yii-web-user#$enableSession-detail), it will keep the identity in the session so that the user
authentication status is maintained throughout the whole session. If cookie-based login (i.e. "remember me" login)
is [enabled](https://www.yiiframework.com/doc/api/22.0/yii-web-user#$enableAutoLogin-detail), it will also save the identity in a cookie so that
the user authentication status can be recovered from the cookie as long as the cookie remains valid.

In order to enable cookie-based login, you need to configure [yii\web\User::$enableAutoLogin](https://www.yiiframework.com/doc/api/22.0/yii-web-user#$enableAutoLogin-detail) to be
`true` in the application configuration. You also need to provide a duration time parameter when calling
the [yii\web\User::login()](https://www.yiiframework.com/doc/api/22.0/yii-web-user#login()-detail) method.

To logout a user, simply call

```
Yii::$app->user->logout();
```

Note that logging out a user is only meaningful when session is enabled. The method will clean up
the user authentication status from both memory and session. And by default, it will also destroy *all*
user session data. If you want to keep the session data, you should call `Yii::$app->user->logout(false)`, instead.

## Authentication Events [¶](#auth-events)

The [yii\web\User](https://www.yiiframework.com/doc/api/22.0/yii-web-user) class raises a few events during the login and logout processes.

- [EVENT\_BEFORE\_LOGIN](https://www.yiiframework.com/doc/api/22.0/yii-web-user#EVENT_BEFORE_LOGIN-detail): raised at the beginning of [yii\web\User::login()](https://www.yiiframework.com/doc/api/22.0/yii-web-user#login()-detail).
  If the event handler sets the [isValid](https://www.yiiframework.com/doc/api/22.0/yii-web-userevent#$isValid-detail) property of the event object to be `false`,
  the login process will be cancelled.
- [EVENT\_AFTER\_LOGIN](https://www.yiiframework.com/doc/api/22.0/yii-web-user#EVENT_AFTER_LOGIN-detail): raised after a successful login.
- [EVENT\_BEFORE\_LOGOUT](https://www.yiiframework.com/doc/api/22.0/yii-web-user#EVENT_BEFORE_LOGOUT-detail): raised at the beginning of [yii\web\User::logout()](https://www.yiiframework.com/doc/api/22.0/yii-web-user#logout()-detail).
  If the event handler sets the [isValid](https://www.yiiframework.com/doc/api/22.0/yii-web-userevent#$isValid-detail) property of the event object to be `false`,
  the logout process will be cancelled.
- [EVENT\_AFTER\_LOGOUT](https://www.yiiframework.com/doc/api/22.0/yii-web-user#EVENT_AFTER_LOGOUT-detail): raised after a successful logout.

You may respond to these events to implement features such as login audit, online user statistics. For example,
in the handler for [EVENT\_AFTER\_LOGIN](https://www.yiiframework.com/doc/api/22.0/yii-web-user#EVENT_AFTER_LOGIN-detail), you may record the login time and IP
address in the `user` table.

[Security Overview](guide_22_0__security-overview.md)

[Go to Top](#top)

[Authorization](guide_22_0__security-authorization.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/security-authentication.md) !
