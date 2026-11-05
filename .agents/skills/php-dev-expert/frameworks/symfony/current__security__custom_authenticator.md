# How to Write a Custom Authenticator (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/security/custom_authenticator.html

---

# How to Write a Custom Authenticator

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/security/custom_authenticator.rst)

Symfony comes with [many authenticators](current__security.md#security-authenticators), and
third-party bundles also implement more complex cases like JWT and OAuth 2.0.
However, sometimes you need to implement a custom authentication mechanism
that doesn't exist yet, or you need to customize an existing one.

To save time, you can install [Symfony Maker](current__bundles__SymfonyMakerBundle__index.md) and let Symfony generate a new
authenticator by running the following command:

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
$ php bin/console make:security:custom

  What is the class name of the authenticator (e.g. CustomAuthenticator):
  > ApiKeyAuthenticator

  updated: config/packages/security.yaml
  created: src/Security/ApiKeyAuthenticator.php

  Success!
```

Open the `src/Security/ApiKeyAuthenticator.php` file created by this command,
and you'll find something like the following:

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
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
```

```
// src/Security/ApiKeyAuthenticator.php
namespace App\Security;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;

class ApiKeyAuthenticator extends AbstractAuthenticator
{
    /**
     * Called on every request to decide if this authenticator should be
     * used for the request. Returning `false` will cause this authenticator
     * to be skipped.
     */
    public function supports(Request $request): ?bool
    {
        // "auth-token" is an example of a custom, non-standard HTTP header used in this application
        return $request->headers->has('auth-token');
    }

    public function authenticate(Request $request): Passport
    {
        $apiToken = $request->headers->get('auth-token');
        if (null === $apiToken) {
            // The token header was empty, authentication fails with HTTP Status
            // Code 401 "Unauthorized"
            throw new CustomUserMessageAuthenticationException('No API token provided');
        }

        // implement your own logic to get the user identifier from `$apiToken`
        // e.g. by looking up a user in the database using its API key
        $userIdentifier = /** ... */;

        return new SelfValidatingPassport(new UserBadge($userIdentifier));
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // on success, let the request continue
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $data = [
            // you may want to customize or obfuscate the message first
            'message' => strtr($exception->getMessageKey(), $exception->getMessageData())

            // or to translate this message
            // $this->translator->trans($exception->getMessageKey(), $exception->getMessageData())
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }
}
```

Authenticators must implement the
[AuthenticatorInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/AuthenticatorInterface.php "Symfony\Component\Security\Http\Authenticator\AuthenticatorInterface").
You can also extend
[AbstractAuthenticator](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/AbstractAuthenticator.php "Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator"),
which provides a default implementation of the `createToken()` method suitable
for most use cases.

Tip

If your custom authenticator is a login form, consider extending
[AbstractLoginFormAuthenticator](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/AbstractLoginFormAuthenticator.php "Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator")
to simplify your implementation.

When extending this class and relying on its default `supports()` method,
your `getLoginUrl()` method must return the login path (e.g. `/login`),
not an absolute URL. If your authenticator needs to return an absolute URL,
override `supports()` to match the request yourself.

Custom authenticators must be explicitly enabled in the security configuration
using the `custom_authenticators` setting of your firewall(s). If you used the
`make:security:custom` command, this configuration is already updated, but you
should review it:

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
            custom_authenticators:
                - App\Security\ApiKeyAuthenticator
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
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Security\ApiKeyAuthenticator;

return App::config([
    'security' => [
        'firewalls' => [
            'main' => [
                'custom_authenticators' => [
                    ApiKeyAuthenticator::class,
                ],
            ],
        ],
    ],
]);
```

Tip

You may want your authenticator to implement
`AuthenticationEntryPointInterface`. This defines the response sent
to users to start authentication (e.g. when they visit a protected
page). Read more about it in [The Entry Point: Helping Users Start Authentication](current__security__entry_point.md).

The `authenticate()` method is the most important method of the
authenticator. Its job is to extract credentials (e.g. username &
password, or API tokens) from the `Request` object and transform these
into a security
[Passport](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/Passport/Passport.php "Symfony\Component\Security\Http\Authenticator\Passport\Passport")
(security passports are explained later in this article).

After the authentication process has finished, the user is either authenticated
or there was something wrong (e.g. incorrect password). The authenticator
can define what happens in these cases:

`onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response`
:   If authentication is successful, this method is called with the
    authenticated `$token`.

    This method can return a response (e.g. redirect the user to some page).

    If `null` is returned, the current request will continue (and the
    user will be authenticated). This is useful for API routes where each
    route is protected by an API key header.

`onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response`
:   If authentication failed (e. g. wrong username or password), this method
    is called with the `AuthenticationException` thrown.

    This method can return a response (e.g. send a 401 Unauthorized in API
    routes).

    If `null` is returned, the request continues (but the user will **not**
    be authenticated). This is useful for login forms, where the login
    controller is run again with the login errors.

    If you're using [login throttling](current__security.md#security-login-throttling),
    you can check if `$exception` is an instance of
    [TooManyLoginAttemptsAuthenticationException](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Core/Exception/TooManyLoginAttemptsAuthenticationException.php "Symfony\Component\Security\Core\Exception\TooManyLoginAttemptsAuthenticationException")
    (e.g. to display an appropriate message).

    **Caution**: Never use `$exception->getMessage()` for `AuthenticationException`
    instances. This message might contain sensitive information that you
    don't want to be publicly exposed. Instead, use `$exception->getMessageKey()`
    and `$exception->getMessageData()` like shown in the full example
    above. Use [CustomUserMessageAuthenticationException](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Core/Exception/CustomUserMessageAuthenticationException.php "Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException")
    if you want to set custom error messages.

Tip

If your login method is interactive, which means that the user actively
logged into your application, you may want your authenticator to implement the
[InteractiveAuthenticatorInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/InteractiveAuthenticatorInterface.php "Symfony\Component\Security\Http\Authenticator\InteractiveAuthenticatorInterface")
so that it dispatches an
[InteractiveLoginEvent](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Event/InteractiveLoginEvent.php "Symfony\Component\Security\Http\Event\InteractiveLoginEvent")

## [Security Passports](#security-passports "Permalink to this headline")

A passport is an object that contains the user that will be authenticated as
well as other pieces of information, like whether a password should be checked
or if "remember me" functionality should be enabled.

The default
[Passport](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/Passport/Passport.php "Symfony\Component\Security\Http\Authenticator\Passport\Passport")
requires a user and some sort of "credentials" (e.g. a password).

Use the
[UserBadge](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/Passport/Badge/UserBadge.php "Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge")
to attach the user to the passport. The `UserBadge` requires a user
identifier (e.g. the username or email):

```
1
2
3
4
```

```
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;

// ...
$passport = new Passport(new UserBadge($userIdentifier), $credentials);
```

### [User Identifier](#user-identifier "Permalink to this headline")

The user identifier is a unique string that identifies the user. It is often
something like their email address or username, but it can be any unique value
associated with the user. It allows loading the user through the configured
[user provider](current__security.md#security-user-providers).

Note

The maximum length allowed for the user identifier is 4096 characters to
prevent [session storage flooding](https://symfony.com/blog/cve-2016-4423-large-username-storage-in-session) attacks.

Note

You can optionally pass a user loader as second argument to the
`UserBadge`. This callable receives the `$userIdentifier`
and must return a `UserInterface` object (otherwise a
`UserNotFoundException` is thrown):

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
```

```
// src/Security/CustomAuthenticator.php
namespace App\Security;

use App\Repository\UserRepository;
// ...

class CustomAuthenticator extends AbstractAuthenticator
{
    public function __construct(
        private UserRepository $userRepository,
    ) {
    }

    public function authenticate(Request $request): Passport
    {
        // ...

        return new Passport(
            new UserBadge($email, function (string $userIdentifier): ?UserInterface {
                return $this->userRepository->findOneBy(['email' => $userIdentifier]);
            }),
            $credentials
        );
    }
}
```

Some applications normalize user identifiers before processing them. For example,
lowercasing identifiers helps treat values like "john.doe", "John.Doe", or
"JOHN.DOE" as equivalent in systems where identifiers are case-insensitive.

If needed, you can pass a normalizer as the third argument to `UserBadge`.
This callable receives the `$userIdentifier` and must return a string.

The example below uses a normalizer that converts usernames to a normalized,
ASCII-only, lowercase format:

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
// src/Security/NormalizedUserBadge.php
namespace App\Security;

use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use function Symfony\Component\String\u;

final class NormalizedUserBadge extends UserBadge
{
    public function __construct(string $identifier)
    {
        $callback = static fn (string $identifier): string => u($identifier)->normalize(UnicodeString::NFKC)->ascii()->lower()->toString();

        parent::__construct($identifier, null, $callback);
    }
}
```

Then, use this badge in your authenticator:

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
// src/Security/PasswordAuthenticator.php
namespace App\Security;

final class PasswordAuthenticator extends AbstractLoginFormAuthenticator
{
    // simplified for brevity
    public function authenticate(Request $request): Passport
    {
        $username = (string) $request->request->get('username', '');
        $password = (string) $request->request->get('password', '');

        $request->getSession()
            ->set(SecurityRequestAttributes::LAST_USERNAME, $username);

        return new Passport(
            new NormalizedUserBadge($username),
            new PasswordCredentials($password),
            [
                // all other useful badges
            ]
        );
    }
}
```

### [User Credential](#user-credential "Permalink to this headline")

The user credential is used to authenticate the user; that is, to verify
the validity of the provided information (such as a password, an API token,
or custom credentials).

The following credential classes are supported by default:

[PasswordCredentials](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/Passport/Credentials/PasswordCredentials.php "Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials")
:   This requires a plaintext `$password`, which is validated using the
    [password encoder configured for the user](current__security.md#security-encoding-user-password):

    ```
    1
    2
    3
    4
    ```

    ```
    use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;

    // ...
    return new Passport(new UserBadge($email), new PasswordCredentials($plaintextPassword));
    ```

[CustomCredentials](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/Passport/Credentials/CustomCredentials.php "Symfony\Component\Security\Http\Authenticator\Passport\Credentials\CustomCredentials")
:   Allows a custom closure to check credentials:

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
    use Symfony\Component\Security\Core\User\UserInterface;
    use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\CustomCredentials;

    // ...
    return new Passport(new UserBadge($email), new CustomCredentials(
        // If this function returns anything else than `true`, the credentials
        // are marked as invalid.
        // The $credentials parameter is equal to the next argument of this class
        function (string $credentials, UserInterface $user): bool {
            return $user->getApiToken() === $credentials;
        },

        // The custom credentials
        $apiToken
    ));
    ```

### [Self Validating Passport](#self-validating-passport "Permalink to this headline")

If you don't need any credentials to be checked (e.g. when using API
tokens), you can use the
[SelfValidatingPassport](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/Passport/SelfValidatingPassport.php "Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport").
This class only requires a `UserBadge` object and optionally [Passport Badges](current__security__custom_authenticator.md#passport-badges).

## [Passport Badges](#passport-badges "Permalink to this headline")

The `Passport` also optionally allows you to add *security badges*.
Badges attach more data to the passport (to extend security). By default,
the following badges are supported:

[RememberMeBadge](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/Passport/Badge/RememberMeBadge.php "Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge")
:   When this badge is added to the passport, the authenticator indicates
    remember me is supported. Whether remember me is actually used depends
    on special `remember_me` configuration. Read
    [How to Add "Remember Me" Login Functionality](current__security__remember_me.md) for more information.

[PasswordUpgradeBadge](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/Passport/Badge/PasswordUpgradeBadge.php "Symfony\Component\Security\Http\Authenticator\Passport\Badge\PasswordUpgradeBadge")
:   This is used to automatically upgrade the password to a new hash upon
    successful login (if needed). This badge requires the plaintext password and a
    password upgrader (e.g. the user repository). See [Password Hashing and Verification](current__security__passwords.md#security-password-migration).

[CsrfTokenBadge](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/Passport/Badge/CsrfTokenBadge.php "Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge")
:   Automatically validates CSRF tokens for this authenticator during
    authentication. The constructor requires a token ID (unique per form)
    and CSRF token (unique per request). See [How to Implement CSRF Protection](current__security__csrf.md).

[PreAuthenticatedUserBadge](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Http/Authenticator/Passport/Badge/PreAuthenticatedUserBadge.php "Symfony\Component\Security\Http\Authenticator\Passport\Badge\PreAuthenticatedUserBadge")
:   Indicates that this user was pre-authenticated (i.e. before Symfony was
    initiated). This skips the
    [pre-authentication user checker](current__security__user_checkers.md).

Note

The `PasswordUpgradeBadge` is automatically added to the passport if the
passport has `PasswordCredentials`.

For instance, if you want to add CSRF to your custom authenticator, you
would initialize the passport like this:

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
```

```
// src/Service/LoginAuthenticator.php
namespace App\Service;

// ...
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;

class LoginAuthenticator extends AbstractAuthenticator
{
    public function authenticate(Request $request): Passport
    {
        $password = $request->getPayload()->get('password');
        $username = $request->getPayload()->get('username');
        $csrfToken = $request->getPayload()->get('csrf_token');

        // ...

        return new Passport(
            new UserBadge($username),
            new PasswordCredentials($password),
            [new CsrfTokenBadge('login', $csrfToken)]
        );
    }
}
```

## [Passport Attributes](#passport-attributes "Permalink to this headline")

Besides badges, passports can define attributes, which allows the `authenticate()`
method to store arbitrary information in the passport to access it from other
authenticator methods (e.g. `createToken()`):

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
```

```
// ...
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;

class LoginAuthenticator extends AbstractAuthenticator
{
    // ...

    public function authenticate(Request $request): Passport
    {
        // ... process the request

        $passport = new SelfValidatingPassport(new UserBadge($username), []);

        // set a custom attribute (e.g. scope)
        $passport->setAttribute('scope', $oauthScope);

        return $passport;
    }

    public function createToken(Passport $passport, string $firewallName): TokenInterface
    {
        // read the attribute value
        return new CustomOauthToken($passport->getUser(), $passport->getAttribute('scope'));
    }
}
```

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
