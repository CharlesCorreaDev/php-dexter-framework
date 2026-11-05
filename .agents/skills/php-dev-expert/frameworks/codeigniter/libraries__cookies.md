# Cookies — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/libraries/cookies.html

---

# Cookies[](#cookies "Link to this heading")

An **HTTP cookie** (web cookie, browser cookie) is a small piece of data that a server
sends to the user’s web browser. The browser may store it and send it back with later
requests to the same server. Typically, it’s used to tell if two requests came from
the same browser - keeping a user logged-in, for example.
It remembers stateful information for the stateless HTTP protocol.

Cookies are mainly used for three purposes:

- **Session management**: Logins, shopping carts, game scores, or anything else the server should remember
- **Personalization**: User preferences, themes, and other settings
- **Tracking**: Recording and analyzing user behavior

To help you efficiently send cookies to browsers,
CodeIgniter provides the `CodeIgniter\Cookie\Cookie` class to abstract the
cookie interaction.

## [Creating Cookies](#id8)[](#creating-cookies "Link to this heading")

There are currently four ways to create a new `Cookie` value object.

```
<?php

use CodeIgniter\Cookie\Cookie;
use DateTime;

// Using the constructor
$cookie = new Cookie(
    'remember_token',
    'f699c7fd18a8e082d0228932f3acd40e1ef5ef92efcedda32842a211d62f0aa6',
    [
        'expires'  => new DateTime('+2 hours'),
        'prefix'   => '__Secure-',
        'path'     => '/',
        'domain'   => '',
        'secure'   => true,
        'httponly' => true,
        'raw'      => false,
        'samesite' => Cookie::SAMESITE_LAX,
    ],
);

// Supplying a Set-Cookie header string
$cookie = Cookie::fromHeaderString(
    'remember_token=f699c7fd18a8e082d0228932f3acd40e1ef5ef92efcedda32842a211d62f0aa6; Path=/; Secure; HttpOnly; SameSite=Lax',
    false, // raw
);

// Using the fluent builder interface
$cookie = (new Cookie('remember_token'))
    ->withValue('f699c7fd18a8e082d0228932f3acd40e1ef5ef92efcedda32842a211d62f0aa6')
    ->withPrefix('__Secure-')
    ->withExpires(new DateTime('+2 hours'))
    ->withPath('/')
    ->withDomain('')
    ->withSecure(true)
    ->withHTTPOnly(true)
    ->withSameSite(Cookie::SAMESITE_LAX);

// Using the global function `cookie` which implicitly calls `new Cookie()`
$cookie = cookie('remember_token', 'f699c7fd18a8e082d0228932f3acd40e1ef5ef92efcedda32842a211d62f0aa6');
```

When constructing the `Cookie` object, only the `name` attribute is required. All other else are optional.
If the optional attributes are not modified, their values will be filled up by the default values saved in
the `Cookie` class.

### [Overriding Defaults](#id9)[](#overriding-defaults "Link to this heading")

To override the defaults currently stored in the class, you can pass a `Config\Cookie`
instance or an array of defaults to the static `Cookie::setDefaults()` method.

```
<?php

use CodeIgniter\Cookie\Cookie;
use Config\Cookie as CookieConfig;

// pass in a Config\Cookie instance before constructing a Cookie class
Cookie::setDefaults(config(CookieConfig::class));
$cookie = new Cookie('login_token');

// pass in an array of defaults
$myDefaults = [
    'expires'  => 0,
    'samesite' => Cookie::SAMESITE_STRICT,
];
Cookie::setDefaults($myDefaults);
$cookie = new Cookie('login_token');
```

Passing the `Config\Cookie` instance or an array to `Cookie::setDefaults()` will effectively
overwrite your defaults and will persist until new defaults are passed.

#### Changing Defaults for a Limited Time[](#changing-defaults-for-a-limited-time "Link to this heading")

If you do not want this
behavior but only want to change defaults for a limited time, you can take advantage of
`Cookie::setDefaults()` return which returns the old defaults array.

```
<?php

use CodeIgniter\Cookie\Cookie;
use Config\Cookie as CookieConfig;

$oldDefaults = Cookie::setDefaults(config(CookieConfig::class));
$cookie      = new Cookie('my_token', 'muffins');

// return the old defaults
Cookie::setDefaults($oldDefaults);
```

## [Accessing Cookie’s Attributes](#id10)[](#accessing-cookie-s-attributes "Link to this heading")

Once instantiated, you can easily access a `Cookie`’s attribute by using one of its getter methods.

```
<?php

use CodeIgniter\Cookie\Cookie;
use DateTime;
use DateTimeZone;

$cookie = new Cookie(
    'remember_token',
    'f699c7fd18a8e082d0228932f3acd40e1ef5ef92efcedda32842a211d62f0aa6',
    [
        'expires'  => new DateTime('2025-02-14 00:00:00', new DateTimeZone('UTC')),
        'prefix'   => '__Secure-',
        'path'     => '/',
        'domain'   => '',
        'secure'   => true,
        'httponly' => true,
        'raw'      => false,
        'samesite' => Cookie::SAMESITE_LAX,
    ],
);

$cookie->getName();             // 'remember_token'
$cookie->getPrefix();           // '__Secure-'
$cookie->getPrefixedName();     // '__Secure-remember_token'
$cookie->getExpiresTimestamp(); // UNIX timestamp
$cookie->getExpiresString();    // 'Fri, 14 Feb 2025 00:00:00 GMT'
$cookie->isExpired();           // false
$cookie->getMaxAge();           // the difference from time() to expires
$cookie->isRaw();               // false
$cookie->isSecure();            // true
$cookie->getPath();             // '/'
$cookie->getDomain();           // ''
$cookie->isHTTPOnly();          // true
$cookie->getSameSite();         // 'Lax'

// additional getter
$cookie->getId(); // '__Secure-remember_token;;/'

// when using `setcookie()`'s alternative signature on PHP 7.3+
// you can easily use the `getOptions()` method to supply the
// $options parameter
$cookie->getOptions();
```

## [Immutable Cookies](#id11)[](#immutable-cookies "Link to this heading")

A new `Cookie` instance is an immutable value object representation of an HTTP cookie. Being immutable,
modifying any of the instance’s attributes will not affect the original instance. The modification **always**
returns a new instance. You need to retain this new instance in order to use it.

```
<?php

use CodeIgniter\Cookie\Cookie;

$cookie = new Cookie('login_token', 'admin');
$cookie->getName(); // 'login_token'

$cookie->withName('remember_token');
$cookie->getName(); // 'login_token'

$new = $cookie->withName('remember_token');
$new->getName(); // 'remember_token'
```

## [Validating a Cookie’s Attributes](#id12)[](#validating-a-cookie-s-attributes "Link to this heading")

An HTTP cookie is regulated by several specifications that need to be followed in order to be
accepted by browsers. Thus, when creating or modifying certain attributes of the `Cookie`,
these are validated in order to check if these follow the specifications.

A `CookieException` is thrown if violations were reported.

### [Validating the Name Attribute](#id13)[](#validating-the-name-attribute "Link to this heading")

A cookie name can be any US-ASCII character, except for the following:

- control characters;
- spaces or tabs;
- separator characters, such as `( ) < > @ , ; : \ " / [ ] ? = { }`

If setting the `$raw` parameter to `true` this validation will be strictly made. This is because
PHP’s [setcookie()](https://www.php.net/manual/en/function.setcookie.php)
and [setrawcookie()](https://www.php.net/manual/en/function.setrawcookie.php)
will reject cookies with invalid names. Additionally, cookie
names cannot be an empty string.

### [Validating the Value Attribute](#id14)[](#validating-the-value-attribute "Link to this heading")

If setting the `$raw` parameter to `true`, the cookie value will also be validated.
It must not contain control characters, spaces, tabs, or separator characters
(`, ;`) as [setrawcookie()](https://www.php.net/manual/en/function.setrawcookie.php) will reject them.

### [Validating the Path Attribute](#id15)[](#validating-the-path-attribute "Link to this heading")

The cookie path must not contain control characters, spaces, tabs, or separator characters
(`, ;`) as [setcookie()](https://www.php.net/manual/en/function.setcookie.php) and
[setrawcookie()](https://www.php.net/manual/en/function.setrawcookie.php) will reject them.

### [Validating the Domain Attribute](#id16)[](#validating-the-domain-attribute "Link to this heading")

The cookie domain must not contain control characters, spaces, tabs, or separator characters
(`, ;`) as [setcookie()](https://www.php.net/manual/en/function.setcookie.php) and
[setrawcookie()](https://www.php.net/manual/en/function.setrawcookie.php) will reject them.

### [Validating the Prefix Attribute](#id17)[](#validating-the-prefix-attribute "Link to this heading")

The cookie prefix must not contain control characters, spaces, tabs, or separator characters
(`= , ; \t \r \n \v \f \0`) as [setcookie()](https://www.php.net/manual/en/function.setcookie.php) and
[setrawcookie()](https://www.php.net/manual/en/function.setrawcookie.php) will reject them.

When using the `__Secure-` prefix, cookies must be set with the `$secure` flag set to `true`. If
using the `__Host-` prefix, cookies must exhibit the following:

- `$secure` flag set to `true`
- `$domain` is empty
- `$path` must be `/`

### [Validating the SameSite Attribute](#id18)[](#validating-the-samesite-attribute "Link to this heading")

The SameSite attribute accepts three values:

- **Lax**: Cookies are not sent on normal cross-site subrequests (for example to load images or frames into a third party site), but are sent when a user is navigating to the origin site (*i.e.* when following a link).
- **Strict**: Cookies will only be sent in a first-party context and not be sent along with requests initiated by third party websites.
- **None**: Cookies will be sent in all contexts, *i.e.* in responses to both first-party and cross-origin requests.

CodeIgniter, however, allows you to set the SameSite attribute to an empty string. When an empty string is
provided, the default SameSite setting saved in the `Cookie` class is used. You can change the default SameSite
by using the `Cookie::setDefaults()` as discussed above.

Recent cookie specifications have changed such that modern browsers are being required to give a default SameSite
if nothing was provided. This default is `Lax`. If you have set the SameSite to be an empty string and your
default SameSite is also an empty string, your cookie will be given the `Lax` value.

If the SameSite is set to `None` you need to make sure that `Secure` is also set to `true`.

When writing the SameSite attribute, the `Cookie` class accepts any of the values case-insensitively. You can
also take advantage of the class’s constants to make it not a hassle.

```
<?php

use CodeIgniter\Cookie\Cookie;

Cookie::SAMESITE_LAX;    // 'Lax'
Cookie::SAMESITE_STRICT; // 'Strict'
Cookie::SAMESITE_NONE;   // 'None'
```

## [Sending Cookies](#id19)[](#sending-cookies "Link to this heading")

Set the `Cookie` objects in the `CookieStore` of the Response object, and
the framework will automatically send the cookies.

Use [`CodeIgniter\HTTP\Response::setCookie()`](outgoing__response.md#CodeIgniter\HTTP\Response::setCookie "CodeIgniter\HTTP\Response::setCookie") to set:

```
<?php

use CodeIgniter\Cookie\Cookie;

$response = service('response');

$cookie = new Cookie(
    'remember_token',
    'f699c7fd18a8e082d0228932f3acd40e1ef5ef92efcedda32842a211d62f0aa6',
    [
        'max-age' => 3600 * 2, // Expires in 2 hours
    ],
);

$response->setCookie($cookie);
```

You can also use the [`set_cookie()`](helpers__cookie_helper.md#set_cookie "set_cookie") helper function:

```
<?php

use CodeIgniter\Cookie\Cookie;

helper('cookie');

$cookie = new Cookie(
    'remember_token',
    'f699c7fd18a8e082d0228932f3acd40e1ef5ef92efcedda32842a211d62f0aa6',
    [
        'max-age' => 3600 * 2, // Expires in 2 hours
    ],
);

set_cookie($cookie);
```

## [Using the Cookie Store](#id20)[](#using-the-cookie-store "Link to this heading")

Note

Normally, there is no need to use CookieStore directly.

The `CookieStore` class represents an immutable collection of `Cookie` objects.

### [Getting the Store from Response](#id21)[](#getting-the-store-from-response "Link to this heading")

The `CookieStore`
instance can be accessed from the current `Response` object.

```
<?php

$cookieStore = service('response')->getCookieStore();
```

### [Creating CookieStore](#id22)[](#creating-cookiestore "Link to this heading")

CodeIgniter provides three other ways to create a new instance of the `CookieStore`.

```
<?php

use CodeIgniter\Cookie\Cookie;
use CodeIgniter\Cookie\CookieStore;

// Passing an array of `Cookie` objects in the constructor
$store = new CookieStore([
    new Cookie('login_token'),
    new Cookie('remember_token'),
]);

// Passing an array of `Set-Cookie` header strings
$store = CookieStore::fromCookieHeaders([
    'remember_token=me; Path=/; SameSite=Lax',
    'login_token=admin; Path=/; SameSite=Lax',
]);

// using the global `cookies` function
$store = cookies([new Cookie('login_token')], false);

// retrieving the `CookieStore` instance saved in our current `Response` object
$store = cookies();
```

Note

When using the global [`cookies()`](general__common_functions.md#cookies "cookies") function, the passed `Cookie` array will only be considered
if the second argument, `$getGlobal`, is set to `false`.

### [Checking Cookies in Store](#id23)[](#checking-cookies-in-store "Link to this heading")

To check whether a `Cookie` object exists in the `CookieStore` instance, you can use several ways:

```
<?php

use CodeIgniter\Cookie\Cookie;
use CodeIgniter\Cookie\CookieStore;

// check if cookie is in the current cookie collection
$store = new CookieStore([
    new Cookie('login_token'),
    new Cookie('remember_token'),
]);
$store->has('login_token');

// check if cookie is in the current Response's cookie collection
cookies()->has('login_token');
service('response')->hasCookie('remember_token');

// using the cookie helper to check the current Response
// not available to v4.1.1 and lower
helper('cookie');
has_cookie('login_token');
```

### [Getting Cookies in Store](#id24)[](#getting-cookies-in-store "Link to this heading")

Retrieving a `Cookie` instance in a cookie collection is very easy:

```
<?php

use CodeIgniter\Cookie\Cookie;
use CodeIgniter\Cookie\CookieStore;
use Config\Services;

// getting cookie in the current cookie collection
$store = new CookieStore([
    new Cookie('login_token'),
    new Cookie('remember_token'),
]);
$store->get('login_token');

// getting cookie in the current Response's cookie collection
cookies()->get('login_token');
service('response')->getCookie('remember_token');

// using the cookie helper to get cookie from the Response's cookie collection
helper('cookie');
get_cookie('remember_token');
```

When getting a `Cookie` instance directly from a `CookieStore`, an invalid name
will throw a `CookieException`.

```
<?php

// throws CookieException
$store->get('unknown_cookie');
```

When getting a `Cookie` instance from the current `Response`’s cookie collection,
an invalid name will just return `null`.

```
<?php

cookies()->get('unknown_cookie'); // null
```

If no arguments are supplied in when getting cookies from the `Response`, all `Cookie` objects
in store will be displayed.

```
<?php

cookies()->display(); // array of Cookie objects

// or even from the Response
service('response')->getCookies();
```

Note

The helper function [`get_cookie()`](helpers__cookie_helper.md#get_cookie "get_cookie") gets the cookie from the current `Request` object, not
from `Response`. This function checks the `$_COOKIE` array if that cookie is set and fetches it
right away.

### [Adding/Removing Cookies in Store](#id25)[](#adding-removing-cookies-in-store "Link to this heading")

As previously mentioned, `CookieStore` objects are immutable. You need to save the modified instance
in order to work on it. The original instance is left unchanged.

```
<?php

use CodeIgniter\Cookie\Cookie;
use CodeIgniter\Cookie\CookieStore;

$store = new CookieStore([
    new Cookie('login_token'),
    new Cookie('remember_token'),
]);

// adding a new Cookie instance
$new = $store->put(new Cookie('admin_token', 'yes'));

// removing a Cookie instance
$new = $store->remove('login_token');
```

Note

Removing a cookie from the store **DOES NOT** delete it from the browser.
If you intend to delete a cookie *from the browser*, you must put an empty value
cookie with the same name to the store.

When interacting with the cookies in store in the current `Response` object, you can safely add or delete
cookies without worrying the immutable nature of the cookie collection. The `Response` object will replace
the instance with the modified instance.

```
<?php

service('response')->setCookie('admin_token', 'yes');
service('response')->deleteCookie('login_token');

// using the cookie helper
helper('cookie');
set_cookie('admin_token', 'yes');
delete_cookie('login_token');
```

### [Dispatching Cookies in Store](#id26)[](#dispatching-cookies-in-store "Link to this heading")

Important

This method was deprecated as of version 4.1.6 and was removed in 4.6.0.

More often than not, you do not need to concern yourself in manually sending cookies. CodeIgniter will do this
for you. However, if you really need to manually send cookies, you can use the `dispatch` method. Just like
in sending other headers, you need to make sure the headers are not yet sent by checking the value
of `headers_sent()`.

```
<?php

use CodeIgniter\Cookie\Cookie;
use CodeIgniter\Cookie\CookieStore;

$store = new CookieStore([
    new Cookie('login_token'),
    new Cookie('remember_token'),
]);

$store->dispatch(); // After dispatch, the collection is now empty.
```

## [Cookie Personalization](#id27)[](#cookie-personalization "Link to this heading")

Sane defaults are already in place inside the `Cookie` class to ensure the smooth creation of cookie
objects. However, you may wish to define your own settings by changing the following settings in the
`Config\Cookie` class in **app/Config/Cookie.php** file.

| Setting | Options/Types | Default | Description |
| --- | --- | --- | --- |
| **$prefix** | `string` | `''` | Prefix to prepend to the cookie name. |
| **$expires** | `DateTimeInterface|string|int` | `0` | The expires timestamp. |
| **$path** | `string` | `/` | The path property of the cookie. |
| **$domain** | `string` | `''` | The domain property of the cookie.with trailing slash. |
| **$secure** | `true`/`false` | `false` | If to be sent over secure HTTPS. |
| **$httponly** | `true`/`false` | `true` | If not accessible to JavaScript. |
| **$samesite** | `Lax`/`None`/`Strict` | `Lax` | The SameSite attribute. |
| **$raw** | `true`/`false` | `false` | If to be dispatched using `setrawcookie()`. |

In runtime, you can manually supply a new default using the `Cookie::setDefaults()` method.

## [Class Reference](#id28)[](#class-reference "Link to this heading")

*class* CodeIgniter\Cookie\Cookie[](#CodeIgniter\Cookie\Cookie "Link to this definition")
:   *static* setDefaults([*$config = []*])[](#CodeIgniter\Cookie\Cookie::setDefaults "Link to this definition")
    :   Parameters:
        :   - **$config** (`\Config\Cookie|array`) – The configuration array or instance

        Return type:
        :   `array`

        Returns:
        :   The old defaults

        Set the default attributes to a Cookie instance by injecting the values from the `Config\Cookie` config or an array.

    *static* fromHeaderString(*string $header*[, *bool $raw = false*])[](#CodeIgniter\Cookie\Cookie::fromHeaderString "Link to this definition")
    :   Parameters:
        :   - **$header** (`string`) – The `Set-Cookie` header string
            - **$raw** (`bool`) – Whether this cookie is not to be URL encoded and sent via `setrawcookie()`

        Return type:
        :   `Cookie`

        Returns:
        :   `Cookie` instance

        Throws:
        :   `CookieException`

        Create a new Cookie instance from a `Set-Cookie` header.

    \_\_construct(*string $name*[, *string $value = ''*[, *array $options = []*]])[](#CodeIgniter\Cookie\Cookie::__construct "Link to this definition")
    :   Parameters:
        :   - **$name** (`string`) – The cookie name
            - **$value** (`string`) – The cookie value
            - **$options** (`array`) – The cookie options

        Return type:
        :   `Cookie`

        Returns:
        :   `Cookie` instance

        Throws:
        :   `CookieException`

        Construct a new Cookie instance.

    getId()[](#CodeIgniter\Cookie\Cookie::getId "Link to this definition")
    :   Return type:
        :   `string`

        Returns:
        :   The ID used in indexing in the cookie collection.

    getPrefix() → string[](#CodeIgniter\Cookie\Cookie::getPrefix "Link to this definition")

    getName() → string[](#CodeIgniter\Cookie\Cookie::getName "Link to this definition")

    getPrefixedName() → string[](#CodeIgniter\Cookie\Cookie::getPrefixedName "Link to this definition")

    getValue() → string[](#CodeIgniter\Cookie\Cookie::getValue "Link to this definition")

    getExpiresTimestamp() → int[](#CodeIgniter\Cookie\Cookie::getExpiresTimestamp "Link to this definition")

    getExpiresString() → string[](#CodeIgniter\Cookie\Cookie::getExpiresString "Link to this definition")

    isExpired() → bool[](#CodeIgniter\Cookie\Cookie::isExpired "Link to this definition")

    getMaxAge() → int[](#CodeIgniter\Cookie\Cookie::getMaxAge "Link to this definition")

    getDomain() → string[](#CodeIgniter\Cookie\Cookie::getDomain "Link to this definition")

    getPath() → string[](#CodeIgniter\Cookie\Cookie::getPath "Link to this definition")

    isSecure() → bool[](#CodeIgniter\Cookie\Cookie::isSecure "Link to this definition")

    isHTTPOnly() → bool[](#CodeIgniter\Cookie\Cookie::isHTTPOnly "Link to this definition")

    getSameSite() → string[](#CodeIgniter\Cookie\Cookie::getSameSite "Link to this definition")

    isRaw() → bool[](#CodeIgniter\Cookie\Cookie::isRaw "Link to this definition")

    getOptions() → array[](#CodeIgniter\Cookie\Cookie::getOptions "Link to this definition")

    withRaw([*bool $raw = true*])[](#CodeIgniter\Cookie\Cookie::withRaw "Link to this definition")
    :   Parameters:
        :   - **$raw** (`bool`)

        Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie with URL encoding option updated.

    withPrefix([*string $prefix = ''*])[](#CodeIgniter\Cookie\Cookie::withPrefix "Link to this definition")
    :   Parameters:
        :   - **$prefix** (`string`)

        Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie with new prefix.

    withName(*string $name*)[](#CodeIgniter\Cookie\Cookie::withName "Link to this definition")
    :   Parameters:
        :   - **$name** (`string`)

        Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie with new name.

    withValue(*string $value*)[](#CodeIgniter\Cookie\Cookie::withValue "Link to this definition")
    :   Parameters:
        :   - **$value** (`string`)

        Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie with new value.

    withExpires(*$expires*)[](#CodeIgniter\Cookie\Cookie::withExpires "Link to this definition")
    :   Parameters:
        :   - **$expires** (`DateTimeInterface|string|int`)

        Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie with new cookie expires time.

    withExpired()[](#CodeIgniter\Cookie\Cookie::withExpired "Link to this definition")
    :   Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie that will expire from the browser.

    withNeverExpiring()[](#CodeIgniter\Cookie\Cookie::withNeverExpiring "Link to this definition")
    :   Important

        This method was deprecated as of version 4.2.6 and was removed in 4.6.0.

        Parameters:
        :   - **$name** (`string`)

        Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie that will virtually never expire.

    withDomain(*?string $domain*)[](#CodeIgniter\Cookie\Cookie::withDomain "Link to this definition")
    :   Parameters:
        :   - **$domain** (`string|null`)

        Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie with new domain.

    withPath(*?string $path*)[](#CodeIgniter\Cookie\Cookie::withPath "Link to this definition")
    :   Parameters:
        :   - **$path** (`string|null`)

        Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie with new path.

    withSecure([*bool $secure = true*])[](#CodeIgniter\Cookie\Cookie::withSecure "Link to this definition")
    :   Parameters:
        :   - **$secure** (`bool`)

        Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie with new “Secure” attribute.

    withHTTPOnly([*bool $httponly = true*])[](#CodeIgniter\Cookie\Cookie::withHTTPOnly "Link to this definition")
    :   Parameters:
        :   - **$httponly** (`bool`)

        Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie with new “HttpOnly” attribute.

    withSameSite(*string $samesite*)[](#CodeIgniter\Cookie\Cookie::withSameSite "Link to this definition")
    :   Parameters:
        :   - **$samesite** (`string`)

        Return type:
        :   `Cookie`

        Returns:
        :   new `Cookie` instance

        Creates a new Cookie with new “SameSite” attribute.

    toHeaderString()[](#CodeIgniter\Cookie\Cookie::toHeaderString "Link to this definition")
    :   Return type:
        :   `string`

        Returns:
        :   Returns the string representation that can be passed as a header string.

    toArray()[](#CodeIgniter\Cookie\Cookie::toArray "Link to this definition")
    :   Return type:
        :   `array`

        Returns:
        :   Returns the array representation of the Cookie instance.

*class* CodeIgniter\Cookie\CookieStore[](#CodeIgniter\Cookie\CookieStore "Link to this definition")
:   *static* fromCookieHeaders(*array $headers*[, *bool $raw = false*])[](#CodeIgniter\Cookie\CookieStore::fromCookieHeaders "Link to this definition")
    :   Parameters:
        :   - **$header** (`array`) – Array of `Set-Cookie` headers
            - **$raw** (`bool`) – Whether not to use URL encoding

        Return type:
        :   `CookieStore`

        Returns:
        :   `CookieStore` instance

        Throws:
        :   `CookieException`

        Creates a CookieStore from an array of `Set-Cookie` headers.

    \_\_construct(*array $cookies*)[](#CodeIgniter\Cookie\CookieStore::__construct "Link to this definition")
    :   Parameters:
        :   - **$cookies** (`array`) – Array of `Cookie` objects

        Return type:
        :   `CookieStore`

        Returns:
        :   `CookieStore` instance

        Throws:
        :   `CookieException`

    has(*string $name*[, *string $prefix = ''*[, *?string $value = null*]]) → bool[](#CodeIgniter\Cookie\CookieStore::has "Link to this definition")
    :   Parameters:
        :   - **$name** (`string`) – Cookie name
            - **$prefix** (`string`) – Cookie prefix
            - **$value** (`string|null`) – Cookie value

        Return type:
        :   `bool`

        Returns:
        :   Checks if a `Cookie` object identified by name and prefix is present in the collection.

    get(*string $name*[, *string $prefix = ''*]) → Cookie[](#CodeIgniter\Cookie\CookieStore::get "Link to this definition")
    :   Parameters:
        :   - **$name** (`string`) – Cookie name
            - **$prefix** (`string`) – Cookie prefix

        Return type:
        :   `Cookie`

        Returns:
        :   Retrieves an instance of Cookie identified by a name and prefix.

        Throws:
        :   `CookieException`

    put(*Cookie $cookie*) → CookieStore[](#CodeIgniter\Cookie\CookieStore::put "Link to this definition")
    :   Parameters:
        :   - **$cookie** ([`Cookie`](#CodeIgniter\Cookie\Cookie "CodeIgniter\Cookie\Cookie")) – A Cookie object

        Return type:
        :   `CookieStore`

        Returns:
        :   new `CookieStore` instance

        Store a new cookie and return a new collection. The original collection is left unchanged.

    remove(*string $name*[, *string $prefix = ''*]) → CookieStore[](#CodeIgniter\Cookie\CookieStore::remove "Link to this definition")
    :   Parameters:
        :   - **$name** (`string`) – Cookie name
            - **$prefix** (`string`) – Cookie prefix

        Return type:
        :   `CookieStore`

        Returns:
        :   new `CookieStore` instance

        Removes a cookie from a collection and returns an updated collection.
        The original collection is left unchanged.

    dispatch() → void[](#CodeIgniter\Cookie\CookieStore::dispatch "Link to this definition")
    :   Important

        This method was deprecated as of version 4.1.6 and was removed in 4.6.0.

        Return type:
        :   `void`

        Dispatches all cookies in store.

    display() → array[](#CodeIgniter\Cookie\CookieStore::display "Link to this definition")
    :   Return type:
        :   `array`

        Returns:
        :   Returns all cookie instances in store.

    clear() → void[](#CodeIgniter\Cookie\CookieStore::clear "Link to this definition")
    :   Return type:
        :   `void`

        Clears the cookie collection.
