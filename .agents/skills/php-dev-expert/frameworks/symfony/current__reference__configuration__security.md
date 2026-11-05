# Security Configuration Reference (SecurityBundle) (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/reference/configuration/security.html

---

# Security Configuration Reference (SecurityBundle)

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/reference/configuration/security.rst)

The SecurityBundle integrates the [Security component](current__security.md)
in Symfony applications. All these options are configured under the `security`
key in your application configuration.

```
1
2
3
4
5
```

```
# displays the default config values defined by Symfony
$ php bin/console config:dump-reference security

# displays the actual config values used by your application
$ php bin/console debug:config security
```

## [access\_denied\_url](#access-denied-url "Permalink to this headline")

**type**: `string` **default**: `null`

Defines the URL where the user is redirected after a `403` HTTP error (unless
you define a custom access denial handler). Example: `/no-permission`

## [expose\_security\_errors](#expose-security-errors "Permalink to this headline")

**type**: `string` **default**: `'none'`

User enumeration is a common security issue where attackers infer valid usernames
based on error messages. For example, a message like "This user does not exist"
shown by your login form reveals whether a username exists.

This option lets you hide some or all errors related to user accounts
(e.g. blocked or expired accounts) to prevent this issue. Instead, these
errors will trigger a generic `BadCredentialsException`. The value of this
option can be one of the following:

- `'none'`: hides all user-related security exceptions;
- `'account_status'`: shows account-related exceptions (e.g. blocked or expired
  accounts) but only for users who provided the correct password;
- `'all'`: shows all security-related exceptions.

## [session\_fixation\_strategy](#session-fixation-strategy "Permalink to this headline")

**type**: `string` **default**: `SessionAuthenticationStrategy::MIGRATE`

[Session Fixation](https://owasp.org/www-community/attacks/Session_fixation) is a security attack that permits an attacker to hijack a
valid user session. Applications that don't assign new session IDs when
authenticating users are vulnerable to this attack.

The possible values of this option are:

- `NONE` constant from [SessionAuthenticationStrategy](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Session/SessionAuthenticationStrategy.php "Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy")
  Don't change the session after authentication. This is **not recommended**.
- `MIGRATE` constant from [SessionAuthenticationStrategy](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Session/SessionAuthenticationStrategy.php "Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy")
  The session ID is updated, but the rest of the session attributes are kept.
- `INVALIDATE` constant from [SessionAuthenticationStrategy](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Session/SessionAuthenticationStrategy.php "Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy")
  The entire session is regenerated, so the session ID is updated but all the
  other session attributes are lost.

## [erase\_credentials](#erase-credentials "Permalink to this headline")

**type**: `boolean` **default**: `true`

8.1

The `erase_credentials` option is deprecated since Symfony 8.1 and will
be removed in 9.0, as the feature behind it was removed in Symfony 8.0.

If `true`, the `eraseCredentials()` method of the user object was called
after authentication. This was used to remove sensitive data (e.g. plain-text
passwords) from the user object stored in the session.

Since Symfony 8.0 removed the `eraseCredentials()` method from the user
interface, this option no longer has any effect. You should remove it from
your security configuration to avoid the deprecation warning.

## [access\_decision\_manager](#access-decision-manager "Permalink to this headline")

Configures the access decision manager used by the security system to make
authorization decisions (e.g. when `is_granted()` is called):

YAML

PHP

```
1
2
3
4
5
6
```

```
# config/packages/security.yaml
security:
    access_decision_manager:
        strategy: affirmative
        allow_if_all_abstain: false
        allow_if_equal_granted_denied: true
```

```
1
2
3
4
5
6
7
8
9
10
11
12
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        'access_decision_manager' => [
            'strategy' => 'affirmative',
            'allow_if_all_abstain' => false,
            'allow_if_equal_granted_denied' => true,
        ],
    ],
]);
```

See also

For a detailed explanation of access decision strategies and custom
voters, see [How to Use Voters to Check User Permissions](current__security__voters.md).

### [strategy](#strategy "Permalink to this headline")

**type**: `string` **default**: `affirmative`

Defines the strategy used by the access decision manager to decide whether
access should be granted. Read about [all the available strategies](current__security__voters.md#security-voters-change-strategy).

### [allow\_if\_all\_abstain](#allow-if-all-abstain "Permalink to this headline")

**type**: `boolean` **default**: `false`

If `true`, access is granted when all [voters](current__security__voters.md)
abstain (no voter explicitly grants or denies access). If `false`
(the default), access is denied when all voters abstain.

### [allow\_if\_equal\_granted\_denied](#allow-if-equal-granted-denied "Permalink to this headline")

**type**: `boolean` **default**: `true`

This option is only used by the `consensus` strategy. If the number of
[voters](current__security__voters.md) granting access is equal to the number of
voters denying access, this option determines the final decision. If `true`
(the default), access is granted in case of a tie.

### [service](#service "Permalink to this headline")

**type**: `string` **default**: `null`

Defines a [custom access decision manager](current__security__voters.md#security-custom-access-decision-manager)
service to replace the default one entirely. The service must implement the
[AccessDecisionManagerInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Core/Authorization/AccessDecisionManagerInterface.php "Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface").

When this option is set, the `strategy`, `allow_if_all_abstain` and
`allow_if_equal_granted_denied` options are ignored.

### [strategy\_service](#strategy-service "Permalink to this headline")

**type**: `string` **default**: `null`

Defines a [custom strategy service](current__security__voters.md#security-custom-access-decision-strategy)
to use instead of one of the built-in strategies. The service must implement the
[AccessDecisionStrategyInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Core/Authorization/Strategy/AccessDecisionStrategyInterface.php "Symfony\Component\Security\Core\Authorization\Strategy\AccessDecisionStrategyInterface").

## [access\_control](#access-control "Permalink to this headline")

Defines the security protection of the URLs of your application. It's used for
example to trigger the user authentication when trying to access the backend
and to allow unauthenticated users to reach the login form page.

This option is explained in detail in [How Does the Security access\_control Work?](current__security__access_control.md).

## [firewalls](#firewalls "Permalink to this headline")

This is arguably the most important option of the security config file. It
defines the authentication mechanism used for each URL (or URL pattern) of your
application:

YAML

PHP

```
1
2
3
4
5
6
7
8
9
10
11
```

```
# config/packages/security.yaml
security:
    # ...
    firewalls:
        # 'main' is the name of the firewall (can be chosen freely)
        main:
            # 'pattern' is a regular expression matched against the incoming
            # request URL. If there's a match, authentication is triggered
            pattern: ^/admin
            # the rest of options depend on the authentication mechanism
            # ...
```

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        // ...

        // 'main' is the name of the firewall (can be chosen freely)
        'firewalls' => [
            'main' => [
                // 'pattern' is a regular expression matched against the incoming
                // request URL. If there's a match, authentication is triggered
                'pattern' => '^/admin',
                // the rest of options depend on the authentication mechanism
                // ...
            ],
        ],
    ],
]);
```

See also

Read [this article](current__security__firewall_restriction.md) to learn about how
to restrict firewalls by host and HTTP methods.

In addition to some common config options, the most important firewall options
depend on the authentication mechanism, which can be any of these:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
```

```
# config/packages/security.yaml
security:
    # ...
    firewalls:
        main:
            # ...
                x509:
                    # ...
                remote_user:
                    # ...
                guard:
                    # ...
                form_login:
                    # ...
                form_login_ldap:
                    # ...
                json_login:
                    # ...
                http_basic:
                    # ...
                http_basic_ldap:
                    # ...
                http_digest:
                    # ...
                access_token:
                    # ...
                login_link:
                    # ...
                login_throttling:
                    # ...
                remember_me:
                    # ...
```

You can view actual information about the firewalls in your application with
the `debug:firewall` command:

```
1
2
3
4
5
6
7
8
9
```

```
# displays a list of firewalls currently configured for your application
$ php bin/console debug:firewall

# displays the details of a specific firewall
$ php bin/console debug:firewall main

# displays the details of a specific firewall, including detailed information
# about the event listeners for the firewall
$ php bin/console debug:firewall main --events
```

### [form\_login](#form-login "Permalink to this headline")

When using the `form_login` authentication listener beneath a firewall,
there are several common options for configuring the "form login" experience.
For even more details, see [Customizing the Form Login Authenticator Responses](current__security__form_login.md).

#### [login\_path](#login-path "Permalink to this headline")

**type**: `string` **default**: `/login`

This is the route or path that the user will be redirected to (unless `use_forward`
is set to `true`) when they try to access a protected resource but aren't
fully authenticated.

This path **must** be accessible by a normal, unauthenticated user, else
you might create a redirect loop.

#### [check\_path](#check-path "Permalink to this headline")

**type**: `string` **default**: `/login_check`

This is the route or path that your login form must submit to. The firewall
will intercept any requests (`POST` requests only, by default) to this
URL and process the submitted login credentials.

Be sure that this URL is covered by your main firewall (i.e. don't create
a separate firewall just for the `check_path` URL).

#### [failure\_path](#failure-path "Permalink to this headline")

**type**: `string` **default**: `/login`

This is the route or path that the user is redirected to after a failed login attempt.
It can be a relative/absolute URL or a Symfony route name.

#### [form\_only](#form-only "Permalink to this headline")

**type**: `boolean` **default**: `false`

Set this option to `true` to require that the login data is sent using a form
(it checks that the request content-type is `application/x-www-form-urlencoded`
or `multipart/form-data`). This is useful for example to prevent the
[form login authenticator](current__security.md#security-form-login) from responding to
requests that should be handled by the [JSON login authenticator](current__security.md#security-json-login).

#### [use\_forward](#use-forward "Permalink to this headline")

**type**: `boolean` **default**: `false`

If you'd like the user to be forwarded to the login form instead of being
redirected, set this option to `true`.

#### [username\_parameter](#username-parameter "Permalink to this headline")

**type**: `string` **default**: `_username`

This is the name of the username field of your
login form. When you submit the form to `check_path`, the security system
will look for a POST parameter with this name.

#### [password\_parameter](#password-parameter "Permalink to this headline")

**type**: `string` **default**: `_password`

This is the name of the password field of your
login form. When you submit the form to `check_path`, the security system
will look for a POST parameter with this name.

#### [post\_only](#post-only "Permalink to this headline")

**type**: `boolean` **default**: `true`

By default, you must submit your login form to the `check_path` URL as
a POST request. By setting this option to `false`, you can send a GET
request too.

**Options Related to Redirecting after Login**

#### [always\_use\_default\_target\_path](#always-use-default-target-path "Permalink to this headline")

**type**: `boolean` **default**: `false`

If `true`, users are always redirected to the default target path regardless
of the previous URL that was stored in the session.

#### [default\_target\_path](#default-target-path "Permalink to this headline")

**type**: `string` **default**: `/`

The page users are redirected to when there is no previous page stored in the
session (for example, when the users browse the login page directly).

#### [target\_path\_parameter](#target-path-parameter "Permalink to this headline")

**type**: `string` **default**: `_target_path`

When using a login form, if you include an HTML element to set the target path,
this option lets you change the name of the HTML element itself.

#### [failure\_path\_parameter](#failure-path-parameter "Permalink to this headline")

**type**: `string` **default**: `_failure_path`

When using a login form, if you include an HTML element to set the failure path,
this option lets you change the name of the HTML element itself.

#### [use\_referer](#use-referer "Permalink to this headline")

**type**: `boolean` **default**: `false`

If `true`, the user is redirected to the value stored in the `HTTP_REFERER`
header when no previous URL was stored in the session. If the referrer URL is
the same as the one generated with the `login_path` route, the user is
redirected to the `default_target_path` to avoid a redirection loop.

Note

For historical reasons, and to match the misspelling of the HTTP standard,
the option is called `use_referer` instead of `use_referrer`.

### [logout](#logout "Permalink to this headline")

You can configure logout options.

#### [delete\_cookies](#delete-cookies "Permalink to this headline")

**type**: `array` **default**: `[]`

Lists the names (and other optional features) of the cookies to delete when the
user logs out:

YAML

PHP

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
```

```
# config/packages/security.yaml
security:
    # ...

    firewalls:
        main:
            # ...
            logout:
                delete_cookies:
                    cookie1-name: null
                    cookie2-name:
                        path: '/'
                    cookie3-name:
                        path: null
                        domain: example.com
```

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        'firewalls' => [
            'main' => [
                'logout' => [
                    'delete_cookies' => [
                        'cookie1-name' => null,
                        'cookie2-name' => [
                            'path' => '/',
                        ],
                        'cookie3-name' => [
                            'path' => null,
                            'domain' => 'example.com',
                        ],
                    ],
                ],
            ],
        ],
    ],
]);
```

#### [clear\_site\_data](#clear-site-data "Permalink to this headline")

**type**: `array` **default**: `[]`

The `Clear-Site-Data` HTTP header clears browsing data (cookies, storage, cache)
associated with the requesting website. It allows web developers to have more
control over the data stored by a client browser for their origins.

Allowed values are `cache`, `cookies`, `storage`, `clientHints`, `executionContexts`,
`prefetchCache` and `prerenderCache`.
It's also possible to use `*` as a wildcard for all directives:

YAML

PHP

```
1
2
3
4
5
6
7
8
9
10
11
```

```
# config/packages/security.yaml
security:
    # ...

    firewalls:
        main:
            # ...
            logout:
                clear_site_data:
                    - cookies
                    - storage
```

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        'firewalls' => [
            'main' => [
                'logout' => [
                    'clear_site_data' => ['cookies', 'storage'],
                ],
            ],
        ],
    ],
]);
```

8.1

The `clientHints`, `prefetchCache` and `prerenderCache` options were
introduced in Symfony 8.1.

#### [invalidate\_session](#invalidate-session "Permalink to this headline")

**type**: `boolean` **default**: `true`

By default, when users log out from any firewall, their sessions are invalidated.
This means that logging out from one firewall automatically logs them out from
all the other firewalls.

The `invalidate_session` option allows you to redefine this behavior. Set this
option to `false` in every firewall and the user will only be logged out from
the current firewall and not the other ones.

#### [path](#path "Permalink to this headline")

**type**: `string` **default**: `/logout`

The path or route name that triggers the logout. If the value starts with a
`/` character, it's treated as a path; otherwise, it's treated as a route
name. If you use a path, make sure to also define a route that matches it.

#### [target](#target "Permalink to this headline")

**type**: `string` **default**: `/`

The relative path (if the value starts with `/`), or absolute URL (if it
starts with `http://` or `https://`) or the route name (otherwise) to
redirect after logout.

#### [enable\_csrf](#enable-csrf "Permalink to this headline")

**type**: `boolean` **default**: `null`

Set this option to `true` to enable CSRF protection in the logout process
using Symfony's default CSRF token manager. Set also the `csrf_token_manager`
option if you need to use a custom CSRF token manager.

#### [csrf\_parameter](#csrf-parameter "Permalink to this headline")

**type**: `string` **default**: `_csrf_token`

The name of the parameter that stores the CSRF token value.

#### [csrf\_token\_manager](#csrf-token-manager "Permalink to this headline")

**type**: `string` **default**: `null`

The `id` of the service used to generate the CSRF tokens. Symfony provides a
default service whose ID is `security.csrf.token_manager`.

#### [csrf\_token\_id](#csrf-token-id "Permalink to this headline")

**type**: `string` **default**: `logout`

An arbitrary string used to identify the token (and check its validity afterwards).

### [json\_login](#json-login "Permalink to this headline")

Use it to create an endpoint in your application that provides tokens to access
APIs based on a username (or email) and password. Read more about
[JSON login authentication](current__security.md#security-json-login).

#### [check\_path](#check-path-1 "Permalink to this headline")

**type**: `string` **default**: `/login_check`

This is the URL or route name the system must post to authenticate using
the JSON authenticator. The path must be covered by the firewall to which
the user will authenticate.

#### [username\_path](#username-path "Permalink to this headline")

**type**: `string` **default**: `username`

Use this and `password_path` to modify the expected request body
structure of the JSON authenticator. For instance, if the JSON document has
the following structure:

```
1
2
3
4
5
6
7
8
```

```
{
    "security": {
        "credentials": {
            "login": "dunglas",
            "password": "MyPassword"
        }
    }
}
```

The security configuration should be:

YAML

PHP

```
1
2
3
4
5
6
7
8
9
10
11
```

```
# config/packages/security.yaml
security:
    # ...

    firewalls:
        main:
            lazy: true
            json_login:
                check_path:    login
                username_path: security.credentials.login
                password_path: security.credentials.password
```

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        'firewalls' => [
            'main' => [
                'lazy' => true,
                'json_login' => [
                    'check_path' => '/login',
                    'username_path' => 'security.credentials.login',
                    'password_path' => 'security.credentials.password',
                ],
            ],
        ],
    ],
]);
```

#### [password\_path](#password-path "Permalink to this headline")

**type**: `string` **default**: `password`

Use this option to modify the expected request body structure. See
[username\_path](current__reference__configuration__security.md#username-path) for more details.

### [form\_login\_ldap](#form-login-ldap "Permalink to this headline")

This section shows the LDAP authentication options when using a login form, but
the same options work when using HTTP basic (`http_basic_ldap`) or JSON login
(`json_login_ldap`) with LDAP.

For even more details, see the [LDAP documentation](current__security__ldap.md).

**Authentication**

You can authenticate to an LDAP server using the LDAP variants of the
`form_login`, `http_basic` and `json_login` authentication providers. Use
`form_login_ldap`, `http_basic_ldap` and `json_login_ldap`, which will
attempt to `bind` against an LDAP server instead of using password comparison.

Both authentication providers have the same arguments as their normal
counterparts, with the addition of two configuration keys:

#### [service](#service-1 "Permalink to this headline")

**type**: `string` **default**: `ldap`

This is the name of your configured LDAP client.

#### [dn\_string](#dn-string "Permalink to this headline")

**type**: `string` **default**: `{user_identifier}`

This is the string which will be used as the bind DN. The `{user_identifier}`
placeholder will be replaced with the user-provided value (their login).
Depending on your LDAP server's configuration, you may need to override
this value.

#### [query\_string](#query-string "Permalink to this headline")

**type**: `string` **default**: `null`

This is the string which will be used to query for the DN. The `{user_identifier}`
placeholder will be replaced with the user-provided value (their login).
Depending on your LDAP server's configuration, you will need to override
this value. This setting is only necessary if the user's DN cannot be derived
statically using the `dn_string` config option.

**User provider**

Users will still be fetched from the configured user provider. If you wish to
fetch your users from an LDAP server, you will need to use the
[LDAP user provider](current__security__ldap.md#security-ldap-user-provider) and any of these authentication
providers: `form_login_ldap` or `http_basic_ldap` or `json_login_ldap`.

### [x509](#x509 "Permalink to this headline")

The [X.509 authenticator](current__security.md#security-x509-client-certificates) provided by
Symfony lets your web server handle the entire authentication process. Symfony
then extracts the user's email address from the client certificate and uses it
as the user identifier.

YAML

PHP

```
1
2
3
4
5
6
7
8
9
10
11
12
```

```
# config/packages/security.yaml
security:
    # ...

    firewalls:
        main:
            # ...
            x509:
                provider:        your_user_provider
                user:            SSL_CLIENT_S_DN_Email
                credentials:     SSL_CLIENT_S_DN
                user_identifier: emailAddress
```

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        'firewalls' => [
            'main' => [
                'x509' => [
                    'provider' => 'your_user_provider',
                    'user' => 'SSL_CLIENT_S_DN_Email',
                    'credentials' => 'SSL_CLIENT_S_DN',
                    'user_identifier' => 'emailAddress',
                ],
            ],
        ],
    ],
]);
```

#### [user](#user "Permalink to this headline")

**type**: `string` **default**: `SSL_CLIENT_S_DN_Email`

The name of the `$_SERVER` parameter containing the user identifier used
to load the user in Symfony. The default value is exposed by Apache.

#### [credentials](#credentials "Permalink to this headline")

**type**: `string` **default**: `SSL_CLIENT_S_DN`

If the `user` parameter is not available, the name of the `$_SERVER`
parameter containing the full "distinguished name" of the certificate
(exposed by e.g. Nginx).

By default, Symfony identifies the value following `emailAddress=` in this
parameter. This can be changed using the `user_identifier` option.

#### [user\_identifier](#user-identifier "Permalink to this headline")

**type**: `string` **default**: `emailAddress`

The value of this option tells Symfony which parameter to use to find the user
identifier in the "distinguished name".

For example, if the "distinguished name" is
`Subject: C=FR, O=My Organization, CN=user1, emailAddress=user1@myorg.fr`,
and the value of this option is `'CN'`, the user identifier will be `'user1'`.

### [remote\_user](#remote-user "Permalink to this headline")

In addition to [X.509 authentication](current__reference__configuration__security.md#reference-security-firewall-x509)
based on client certificates, Symfony also supports [pre-authentication](current__security.md#security-remote-users)
performed by web servers (e.g. Kerberos) that store the authenticated user
identifier in the `REMOTE_USER` environment variable.

YAML

PHP

```
1
2
3
4
5
6
7
8
```

```
# config/packages/security.yaml
security:
    firewalls:
        main:
            # ...
            remote_user:
                provider: your_user_provider
                user:     REMOTE_USER
```

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        'firewalls' => [
            'main' => [
                'remote_user' => [
                    'provider' => 'your_user_provider',
                    'user' => 'REMOTE_USER',
                ],
            ],
        ],
    ],
]);
```

#### [provider](#provider "Permalink to this headline")

**type**: `string`

The service ID of the user provider that should be used by this
authenticator.

#### [user](#user-1 "Permalink to this headline")

**type**: `string` **default**: `REMOTE_USER`

The name of the `$_SERVER` parameter holding the user identifier.

### [access\_token](#access-token "Permalink to this headline")

When using the `access_token` authentication mechanism beneath a firewall,
the application authenticates users based on an API token sent with the request.
For even more details, see [How to use Access Token Authentication](current__security__access_token.md).

#### [token\_handler](#token-handler "Permalink to this headline")

**type**: `string` | `array`

The service id of the token handler or an array of options for a built-in
handler (e.g. `oidc`, `oidc_user_info`). This option is required.

#### [token\_extractors](#token-extractors "Permalink to this headline")

**type**: `array` **default**: `['security.access_token_extractor.header']`

The list of service ids used to extract the token from the request. By default,
the token is extracted from the `Authorization` request header.

#### [realm](#realm "Permalink to this headline")

**type**: `string` **default**: `null`

The "realm" for the `WWW-Authenticate` response header returned when
authentication fails.

#### [provider](#provider-1 "Permalink to this headline")

**type**: `string`

The service id of the user provider that should be used by this authenticator.

#### [success\_handler](#success-handler "Permalink to this headline")

**type**: `string`

The service id of a service that implements
[AuthenticationSuccessHandlerInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authentication/AuthenticationSuccessHandlerInterface.php "Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface").

#### [failure\_handler](#failure-handler "Permalink to this headline")

**type**: `string`

The service id of a service that implements
[AuthenticationFailureHandlerInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authentication/AuthenticationFailureHandlerInterface.php "Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface").

### [login\_link](#login-link "Permalink to this headline")

When using the `login_link` authentication mechanism beneath a firewall,
users are authenticated via a unique, signed URL sent to them (e.g. by email).
For even more details, see [How to Use Passwordless Login Link Authentication](current__security__login_link.md).

#### [check\_route](#check-route "Permalink to this headline")

**type**: `string`

The route name that the login link URL will point to. This option is required.

#### [check\_post\_only](#check-post-only "Permalink to this headline")

**type**: `boolean` **default**: `false`

If `true`, the login link is only accepted via `POST` requests.

#### [signature\_properties](#signature-properties "Permalink to this headline")

**type**: `array`

An array of user properties used to create the login link signature. This option
is required and must contain at least one property (e.g. `['email']`).

#### [lifetime](#lifetime "Permalink to this headline")

**type**: `integer` **default**: `600`

The lifetime of the login link in seconds.

#### [max\_uses](#max-uses "Permalink to this headline")

**type**: `integer` **default**: `null`

The maximum number of times a login link can be used. `null` means unlimited.

#### [used\_link\_cache](#used-link-cache "Permalink to this headline")

**type**: `string`

The service id of the cache pool used to track used login links. This is required
when `max_uses` is set.

#### [secret](#secret "Permalink to this headline")

**type**: `string` **default**: `%kernel.secret%`

The secret used to sign the login link URL.

#### [provider](#provider-2 "Permalink to this headline")

**type**: `string`

The service id of the user provider that should be used by this authenticator.

#### [success\_handler](#success-handler-1 "Permalink to this headline")

**type**: `string`

The service id of a service that implements
[AuthenticationSuccessHandlerInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authentication/AuthenticationSuccessHandlerInterface.php "Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface").

#### [failure\_handler](#failure-handler-1 "Permalink to this headline")

**type**: `string`

The service id of a service that implements
[AuthenticationFailureHandlerInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authentication/AuthenticationFailureHandlerInterface.php "Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface").

### [login\_throttling](#login-throttling "Permalink to this headline")

Login throttling limits the number of failed login attempts over a given period of
time. This helps protect against brute-force attacks. For even more details, see
[Security](current__security.md) and [Rate Limiter](current__rate_limiter.md).

#### [limiter](#limiter "Permalink to this headline")

**type**: `string`

The service id of a custom rate limiter implementing
[RequestRateLimiterInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/HttpFoundation/RateLimiter/RequestRateLimiterInterface.php "Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface").
When set, all other options below are ignored because the provided limiter is used
directly.

#### [max\_attempts](#max-attempts "Permalink to this headline")

**type**: `integer` **default**: `5`

The maximum number of failed login attempts before the login is throttled.

#### [interval](#interval "Permalink to this headline")

**type**: `string` **default**: `'1 minute'`

The period of time in which the `max_attempts` are counted (e.g. `'1 minute'`,
`'30 seconds'`).

#### [lock\_factory](#lock-factory "Permalink to this headline")

**type**: `string` **default**: `null`

The service id of the lock factory used by the rate limiter. Set to `null` to
disable locking.

#### [cache\_pool](#cache-pool "Permalink to this headline")

**type**: `string` **default**: `'cache.rate_limiter'`

The cache pool service id used to store the rate limiter state.

#### [storage\_service](#storage-service "Permalink to this headline")

**type**: `string` **default**: `null`

The service id of a custom storage service for the rate limiter. When set, this
takes precedence over `cache_pool`.

### [remember\_me](#remember-me "Permalink to this headline")

The "remember me" authentication mechanism allows users to stay authenticated
across browser sessions by storing a special cookie. For even more details, see
[How to Add "Remember Me" Login Functionality](current__security__remember_me.md).

#### [secret](#secret-1 "Permalink to this headline")

**type**: `string` **default**: `%kernel.secret%`

The secret used to encode the cookie content. It's common to use the
`kernel.secret` parameter.

#### [service](#service-2 "Permalink to this headline")

**type**: `string`

The service id of a custom remember-me handler implementing
[RememberMeHandlerInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/RememberMe/RememberMeHandlerInterface.php "Symfony\Component\Security\Http\RememberMe\RememberMeHandlerInterface").

#### [token\_provider](#token-provider "Permalink to this headline")

**type**: `string` | `array`

A service id (as a string) or an array with the following sub-options:

- `service` (**type**: `string`): the service id of a custom token provider.
- `doctrine` (**type**: `array`): enables the Doctrine token provider with an
  optional `connection` sub-option (**type**: `string`, **default**: `null`)
  to define the Doctrine connection to use.

#### [token\_verifier](#token-verifier "Permalink to this headline")

**type**: `string`

The service id of a custom token verifier service.

#### [signature\_properties](#signature-properties-1 "Permalink to this headline")

**type**: `array` **default**: `['password']`

An array of user properties used to verify the remember-me cookie. At least one
property is required. When any of these properties change, existing remember-me
cookies are invalidated automatically.

#### [catch\_exceptions](#catch-exceptions "Permalink to this headline")

**type**: `boolean` **default**: `true`

If `true`, exceptions thrown during the remember-me authentication are caught
and the user is not authenticated (instead of returning a server error).

**Cookie Options**

#### [name](#name "Permalink to this headline")

**type**: `string` **default**: `'REMEMBERME'`

The name of the cookie used for the remember-me feature.

#### [lifetime](#lifetime-1 "Permalink to this headline")

**type**: `integer` **default**: `31536000`

The lifetime of the cookie in seconds (`31536000` is one year).

#### [path](#path-1 "Permalink to this headline")

**type**: `string` **default**: `'/'`

The path of the cookie.

#### [domain](#domain "Permalink to this headline")

**type**: `string` **default**: `null`

The domain of the cookie. If `null`, the current domain from the request
is used.

#### [secure](#secure "Permalink to this headline")

**type**: `boolean` | `string` **default**: `false`

If `true`, the cookie is only sent over HTTPS. Set to `'auto'` to use the
same value as the session cookie.

#### [httponly](#httponly "Permalink to this headline")

**type**: `boolean` **default**: `true`

If `true`, the cookie is accessible only through the HTTP protocol (it can't
be accessed by scripting languages like JavaScript).

#### [samesite](#samesite "Permalink to this headline")

**type**: `string` **default**: `null`

If set, the `SameSite` attribute of the cookie is set with this value. Valid
values are `'lax'`, `'strict'` and `'none'`.

#### [always\_remember\_me](#always-remember-me "Permalink to this headline")

**type**: `boolean` **default**: `false`

If `true`, the remember-me feature is always active, regardless of whether
the user checks a "remember me" checkbox in the login form.

#### [remember\_me\_parameter](#remember-me-parameter "Permalink to this headline")

**type**: `string` **default**: `'_remember_me'`

The name of the form field or request parameter checked to determine whether
the "remember me" feature should be activated.

### [context](#context "Permalink to this headline")

If your application uses multiple [firewalls](current__security.md#firewalls-authentication), you'll notice that
if you're authenticated in one firewall, you're not automatically authenticated
in another. In other words, the systems don't share a common "context":
each firewall acts like a separate security system.

However, each firewall has an optional `context` key (which defaults to
the name of the firewall), which is used when storing and retrieving security
data to and from the session. If this key were set to the same value across
multiple firewalls, the "context" could actually be shared:

YAML

PHP

```
1
2
3
4
5
6
7
8
9
10
11
```

```
# config/packages/security.yaml
security:
    # ...

    firewalls:
        somename:
            # ...
            context: my_context
        othername:
            # ...
            context: my_context
```

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        'firewalls' => [
            'somename' => [
                'context' => 'my_context',
            ],
            'othername' => [
                'context' => 'my_context',
            ],
        ],
    ],
]);
```

Note

The firewall context key is stored in session, so every firewall using it
must set its `stateless` option to `false`. Otherwise, the context is
ignored and you won't be able to authenticate on multiple firewalls at the
same time.

### [stateless](#stateless "Permalink to this headline")

Firewalls can configure a `stateless` boolean option in order to declare that
the session must not be used when authenticating users:

YAML

PHP

```
1
2
3
4
5
6
7
8
```

```
# config/packages/security.yaml
security:
    # ...

    firewalls:
        main:
            # ...
            stateless: true
```

```
1
2
3
4
5
6
7
8
9
10
11
12
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        'firewalls' => [
            'main' => [
                'stateless' => true,
            ],
        ],
    ],
]);
```

### [lazy](#lazy "Permalink to this headline")

Firewalls can configure a `lazy` boolean option to load the user and start the
session only if the application actually accesses the User object (e.g. calling
`is_granted()` in a template or `isGranted()` in a controller or service):

YAML

PHP

```
1
2
3
4
5
6
7
8
```

```
# config/packages/security.yaml
security:
    # ...

    firewalls:
        main:
            # ...
            lazy: true
```

```
1
2
3
4
5
6
7
8
9
10
11
12
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        'firewalls' => [
            'main' => [
                'lazy' => true,
            ],
        ],
    ],
]);
```

### [user\_checker](#user-checker "Permalink to this headline")

During the authentication of a user, additional checks might be required to
verify if the identified user is allowed to log in. Each firewall can include
a `user_checker` option to define the service used to perform those checks.

Learn more about user checkers in [How to Create and Enable Custom User Checkers](current__security__user_checkers.md).

### [required\_badges](#required-badges "Permalink to this headline")

Firewalls can configure a list of required badges that must be present on the authenticated passport:

YAML

PHP

```
1
2
3
4
5
6
7
8
```

```
# config/packages/security.yaml
security:
    # ...

    firewalls:
        main:
            # ...
            required_badges: ['CsrfTokenBadge', 'My\Badge']
```

```
1
2
3
4
5
6
7
8
9
10
11
12
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        'firewalls' => [
            'main' => [
                'required_badges' => ['CsrfTokenBadge', 'My\Badge'],
            ],
        ],
    ],
]);
```

## [password\_hashers](#password-hashers "Permalink to this headline")

**type**: `array`

Defines the [password hasher](current__security__passwords.md) for each user class.
The key of each item is the fully qualified class name of the user class, and
the value defines the hasher configuration. Use `auto` as the algorithm to let
Symfony choose the best available algorithm:

YAML

PHP

```
1
2
3
4
5
```

```
# config/packages/security.yaml
security:
    # ...
    password_hashers:
        App\Entity\User: 'auto'
```

```
1
2
3
4
5
6
7
8
9
10
```

```
// config/packages/security.php
use Symfony\Config\SecurityConfig;

return static function (SecurityConfig $security): void {
    $security->firewall('main');
    // ...

    $security->passwordHasher('App\Entity\User')
        ->algorithm('auto');
};
```

Or use the expanded syntax to configure additional options:

YAML

PHP

```
1
2
3
4
5
6
7
```

```
# config/packages/security.yaml
security:
    # ...
    password_hashers:
        App\Entity\User:
            algorithm: 'auto'
            cost: 15
```

```
1
2
3
4
5
6
7
8
9
10
11
```

```
// config/packages/security.php
use Symfony\Config\SecurityConfig;

return static function (SecurityConfig $security): void {
    $security->firewall('main');
    // ...

    $security->passwordHasher('App\Entity\User')
        ->algorithm('auto')
        ->cost(15);
};
```

### [algorithm](#algorithm "Permalink to this headline")

**type**: `string`

The hashing algorithm to use. The available algorithms depend on your PHP
installation. The most common values are:

- `auto`: automatically selects the best available hasher (currently Bcrypt);
- `bcrypt`: uses the [bcrypt](https://en.wikipedia.org/wiki/Bcrypt) algorithm;
- `sodium`: uses the Argon2 algorithm via the [libsodium](https://pecl.php.net/package/libsodium) extension;
- `pbkdf2`: uses the [PBKDF2](https://en.wikipedia.org/wiki/PBKDF2) algorithm (no longer recommended).

You can also set this to the `id` of a service to use a custom password hasher
(see the `id` option below).

See also

Read more about the [supported hashing algorithms](current__security__passwords.md#passwordhasher-supported-algorithms).

### [cost](#cost "Permalink to this headline")

**type**: `integer` **default**: `null`

This option is only available for the `bcrypt` algorithm. It defines the
value of the `cost` used to hash the password. The allowed range is `4`
to `31`. Each single increment of the cost **doubles** the time it takes
to hash a password.

### [memory\_cost](#memory-cost "Permalink to this headline")

**type**: `integer` **default**: `null`

This option is only available for the `sodium` (Argon2) algorithm. It defines
the amount of memory (in KiB) the algorithm may consume.

### [time\_cost](#time-cost "Permalink to this headline")

**type**: `integer` **default**: `null`

This option is only available for the `sodium` (Argon2) algorithm. It defines
the number of iterations used to hash the password.

### [hash\_algorithm](#hash-algorithm "Permalink to this headline")

**type**: `string` **default**: `sha512`

The hash algorithm used by the `pbkdf2` hasher. You can use any algorithm
returned by the `hash_algos()` PHP function (e.g. `sha256`, `sha512`, etc.).

### [key\_length](#key-length "Permalink to this headline")

**type**: `integer` **default**: `40`

The length of the generated hash for the `pbkdf2` hasher.

### [iterations](#iterations "Permalink to this headline")

**type**: `integer` **default**: `5000`

The number of iterations used by the `pbkdf2` hasher to generate the hash.

### [encode\_as\_base64](#encode-as-base64 "Permalink to this headline")

**type**: `boolean` **default**: `true`

Whether to encode the generated hash in base64 for the `pbkdf2` hasher.

### [ignore\_case](#ignore-case "Permalink to this headline")

**type**: `boolean` **default**: `false`

Whether to ignore case when comparing the password for the `pbkdf2` hasher.

### [id](#id "Permalink to this headline")

**type**: `string`

The service id of a custom password hasher. This option can be used to
configure a custom hasher service instead of using a built-in algorithm.

See also

Read more about [creating a custom password hasher](current__security__passwords.md#custom-password-hasher).

### [migrate\_from](#migrate-from "Permalink to this headline")

**type**: `array`

A list of previous hasher configurations to migrate from. When a password
is verified, Symfony checks if it was hashed with one of these previous
algorithms. If so, the password is automatically rehashed using the
current algorithm the next time the user logs in.

See also

Read more about [password migration](current__security__passwords.md#security-password-migration).

## [providers](#providers "Permalink to this headline")

This option defines how the application users are loaded (from a database,
an LDAP server, a configuration file, etc.) Read
[User Providers](current__security__user_providers.md) to learn more about each of those
providers.

## [role\_hierarchy](#role-hierarchy "Permalink to this headline")

Instead of associating many roles to users, this option allows you to define
role inheritance rules by creating a role hierarchy, as explained in
[Security](current__security.md#security-role-hierarchy).

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
