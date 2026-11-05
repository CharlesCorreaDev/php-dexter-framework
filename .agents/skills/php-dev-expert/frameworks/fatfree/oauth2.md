# OAuth2 | Fat-Free Framework for PHP

> **Fonte / Source:** https://fatfreeframework.com/3.9/oauth2

---

[edit](https://fatfreeframework.com/3.9/edit/oauth2/main)

# OAuth2

Lightweight OAuth2 client

Namespace: `Web`   
File location: `lib/web/oauth2.php`

---

## Methods

### uri

**Return OAuth2 authentication URI**

```
string uri ( string $endpoint = NULL, bool $query = TRUE )
```

Useful for generating an authentication uri to display to the end user. For instance:

```
$fw = Base::instance();
$Oauth = new \Web\OAuth2();
$Oauth->set('client_id', $fw->get('google.client_id'));
$Oauth->set('scope', 'profile email');
$Oauth->set('response_type', 'code');
$Oauth->set('access_type', 'online');
$Oauth->set('approval_prompt', 'auto');
$Oauth->set('redirect_uri', $fw->SCHEME.'://' . $_SERVER['HTTP_HOST'] . '/oauthRedirect');
echo $Oauth->uri('https://accounts.google.com/o/oauth2/auth', true);
```

### request

**Send request to API/token endpoint**

```
string uri ( string $uri, string $method, string $token = NULL )
```

This sends off the request to the endpoint specified. `$token` is the access token to be included in the `Authorization` header. Below is an example of a request.

```
$fw = Base::instance();
$Oauth = new \Web\OAuth2();
$Oauth->set('client_id', $fw->get('google.client_id'));
$Oauth->set('client_secret', $fw->get('google.client_secret'));
$Oauth->set('scope', 'profile email');
$Oauth->set('access_type', 'online');
$Oauth->set('grant_type', 'authorization_code');
$Oauth->set('code', $auth_code);
$Oauth->set('approval_prompt', 'auto');
$Oauth->set('redirect_uri', $fw->SCHEME.'://' . $_SERVER['HTTP_HOST'] . '/oauthRedirect');
$token = $Oauth->request('https://oauth2.googleapis.com/token', 'POST');

// now you can make requests with that token
$Oauth_User_Info = new \Web\OAuth2();
echo $Oauth_User_Info->request('https://www.googleapis.com/oauth2/v2/userinfo', 'GET', $token['access_token']);
```
