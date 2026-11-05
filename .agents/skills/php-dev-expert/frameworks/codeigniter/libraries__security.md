# Security — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/libraries/security.html

---

# Security[](#security "Link to this heading")

The Security Class contains methods that help protect your site against Cross-Site Request Forgery attacks.

## [Loading the Library](#id3)[](#loading-the-library "Link to this heading")

If your only interest in loading the library is to handle CSRF protection, then you will never need to load it,
as it runs as a filter and has no manual interaction.

If you find a case where you do need direct access though, you may load it through the Services file:

```
<?php

$security = service('security');
```

## [Cross-Site Request Forgery (CSRF)](#id4)[](#cross-site-request-forgery-csrf "Link to this heading")

Warning

The CSRF Protection is only available for **POST/PUT/PATCH/DELETE** requests.
Requests for other methods are not protected.

### [Prerequisite](#id5)[](#prerequisite "Link to this heading")

When you use the CodeIgniter’s CSRF protection, you still need to code as the following.
Otherwise, the CSRF protection may be bypassed.

#### [When Auto-Routing is Disabled](#id6)[](#when-auto-routing-is-disabled "Link to this heading")

Do one of the following:

1. Do not use `$routes->add()`, and use HTTP verbs in routes.
2. Check the request method in the controller method before processing.

E.g.:

```
if (! $this->request->is('post')) {
    return $this->response->setStatusCode(405)->setBody('Method Not Allowed');
}
```

Note

The [$this->request->is()](incoming__incomingrequest.md#incomingrequest-is) method can be used since v4.3.0.
In previous versions, you need to use
`if (strtolower($this->request->getMethod()) !== 'post')`.

#### [When Auto-Routing is Enabled](#id7)[](#when-auto-routing-is-enabled "Link to this heading")

1. Check the request method in the controller method before processing.

E.g.:

```
if (! $this->request->is('post')) {
    return $this->response->setStatusCode(405)->setBody('Method Not Allowed');
}
```

### [Config for CSRF](#id8)[](#config-for-csrf "Link to this heading")

#### [CSRF Protection Methods](#id9)[](#csrf-protection-methods "Link to this heading")

Warning

If you use [Session](libraries__sessions.md), be sure to use Session based
CSRF protection. Cookie based CSRF protection will not prevent Same-site attacks.
See
[GHSA-5hm8-vh6r-2cjq](https://github.com/codeigniter4/shield/security/advisories/GHSA-5hm8-vh6r-2cjq)
for details.

By default, the Cookie based CSRF Protection is used. It is
[Double Submit Cookie](https://cheatsheetseries.owasp.org/cheatsheets/Cross-Site_Request_Forgery_Prevention_Cheat_Sheet.html#double-submit-cookie)
on OWASP Cross-Site Request Forgery Prevention Cheat Sheet.

You can also use Session based CSRF Protection. It is
[Synchronizer Token Pattern](https://cheatsheetseries.owasp.org/cheatsheets/Cross-Site_Request_Forgery_Prevention_Cheat_Sheet.html#synchronizer-token-pattern).

You can set to use the Session based CSRF protection by editing the following config parameter value in
**app/Config/Security.php**:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Security extends BaseConfig
{
    public $csrfProtection = 'session';

    // ...
}
```

#### [Token Randomization](#id10)[](#token-randomization "Link to this heading")

To mitigate compression side-channel attacks like [BREACH](https://en.wikipedia.org/wiki/BREACH), and prevent an attacker from guessing the CSRF tokens, you can configure token randomization (off by default).

If you enable it, a random mask is added to the token and used to scramble it.

You can enable it by editing the following config parameter value in
**app/Config/Security.php**:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Security extends BaseConfig
{
    public $tokenRandomize = true;

    // ...
}
```

#### [Token Regeneration](#id11)[](#token-regeneration "Link to this heading")

Tokens may be either regenerated on every submission (default) or
kept the same throughout the life of the Session or CSRF cookie.

The default
regeneration of tokens provides stricter security, but may result
in usability concerns as other tokens become invalid (back/forward
navigation, multiple tabs/windows, asynchronous actions, etc). You
may alter this behavior by editing the following config parameter value in
**app/Config/Security.php**:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Security extends BaseConfig
{
    public $regenerate = true;

    // ...
}
```

Warning

If you use Cookie based CSRF protection, and [`redirect()`](general__common_functions.md#redirect "redirect")
after the submission, you must call `withCookie()` to send the regenerated
CSRF cookie. See [Redirect](outgoing__response.md#response-redirect) for details.

Note

Since v4.2.3, you can regenerate CSRF token manually with the
`Security::generateHash()` method.

#### [Redirection on Failure](#id12)[](#redirection-on-failure "Link to this heading")

Starting with v4.5.0, when a request fails the CSRF validation check, by default,
the user is redirected to the previous page in production environment, or a
SecurityException is thrown in other environments.

Note

In production environment, when you use HTML forms, it is recommended
to enable this redirection for a better user experience.

Upgrade users should check their configuration files.

If you want to make it redirect to the previous page, set the following config
parameter value to `true` in **app/Config/Security.php**:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Security extends BaseConfig
{
    // ...

    public bool $redirect = true;

    // ...
}
```

When redirected, an `error` flash message is set and can be displayed to the end user with the following code in your view:

```
<?= session()->getFlashdata('error') ?>
```

This provides a nicer experience than simply crashing.

Even when the redirect value is `true`, AJAX calls will not redirect, but will throw a SecurityException.

### [Enable CSRF Protection](#id13)[](#enable-csrf-protection "Link to this heading")

You can enable CSRF protection by altering your **app/Config/Filters.php**
and enabling the csrf filter globally:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $globals = [
        'before' => [
            // 'honeypot',
            'csrf',
        ],
    ];

    // ...
}
```

Select URIs can be whitelisted from CSRF protection (for example API
endpoints expecting externally POSTed content). You can add these URIs
by adding them as exceptions in the filter:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $globals = [
        'before' => [
            'csrf' => ['except' => ['api/record/save']],
        ],
    ];

    // ...
}
```

Regular expressions are also supported (case-insensitive):

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $globals = [
        'before' => [
            'csrf' => ['except' => ['api/record/[0-9]+']],
        ],
    ];

    // ...
}
```

It is also possible to enable the CSRF filter only for specific methods:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $methods = [
        'GET'  => ['csrf'],
        'POST' => ['csrf'],
    ];

    // ...
}
```

Warning

If you use `$methods` filters, you should [disable Auto Routing (Legacy)](incoming__routing.md#use-defined-routes-only)
because [Auto Routing (Legacy)](incoming__routing.md#auto-routing-legacy) permits any HTTP method to access a controller.
Accessing the controller with a method you don’t expect could bypass the filter.

### [HTML Forms](#id14)[](#html-forms "Link to this heading")

If you use the [form helper](helpers__form_helper.md), then
`form_open()` will automatically insert a hidden csrf field in
your forms.

Note

To use auto-generation of CSRF field, you need to turn CSRF filter on to the form page.
In most cases it is requested using the `GET` method.

If not, then you can use the always available `csrf_token()`
and `csrf_hash()` functions

```
<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
```

Additionally, you can use the `csrf_field()` method to generate this
hidden input field for you:

```
// Generates: <input type="hidden" name="{csrf_token}" value="{csrf_hash}" />
<?= csrf_field() ?>
```

When sending a JSON request the CSRF token can also be passed as one of the parameters.
The next way to pass the CSRF token is a special Http header that’s name is available by
`csrf_header()` function.

Additionally, you can use the `csrf_meta()` method to generate this handy
meta tag for you:

```
// Generates: <meta name="{csrf_header}" content="{csrf_hash}" />
<?= csrf_meta() ?>
```

### [The Order of Token Sent by Users](#id15)[](#the-order-of-token-sent-by-users "Link to this heading")

The order of checking the availability of the CSRF token is as follows:

1. `$_POST` array
2. HTTP header
3. `php://input` (JSON request) - bear in mind that this approach is the slowest one since we have to decode JSON and then re-encode it
4. `php://input` (raw body) - for PUT, PATCH, and DELETE type of requests

Note

`php://input` (raw body) is checked since v4.4.2.

## [Other Helpful Methods](#id16)[](#other-helpful-methods "Link to this heading")

You will never need to use most of the methods in the Security class directly. The following are methods that
you might find helpful that are not related to the CSRF protection.

### [sanitizeFilename()](#id17)[](#sanitizefilename "Link to this heading")

Tries to sanitize filenames in order to prevent directory traversal attempts and other security threats, which is
particularly useful for files that were supplied via user input. The first parameter is the path to sanitize.

If it is acceptable for the user input to include relative paths, e.g., **file/in/some/approved/folder.txt**, you can set
the second optional parameter, `$relativePath` to `true`.

```
<?php

$path = $security->sanitizeFilename($request->getVar('filepath'));
```

This method is an alias for the `sanitize_filename()` function from the Security helper.
