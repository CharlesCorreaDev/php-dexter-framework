# Laravel Socialite | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/socialite

---

[Skip to content](#main-content)

# Laravel Socialite

- [Introduction](#introduction)
- [Installation](#installation)
- [Upgrading Socialite](#upgrading-socialite)
- [Configuration](#configuration)
- [Authentication](#authentication)
  - [Routing](#routing)
  - [Authentication and Storage](#authentication-and-storage)
  - [Access Scopes](#access-scopes)
  - [Slack Bot Scopes](#slack-bot-scopes)
  - [Optional Parameters](#optional-parameters)
- [Retrieving User Details](#retrieving-user-details)
- [Testing](#testing)

## [Introduction](#introduction)

In addition to typical, form based authentication, Laravel also provides a simple, convenient way to authenticate with OAuth providers using [Laravel Socialite](https://github.com/laravel/socialite). Socialite currently supports authentication via Facebook, X, LinkedIn, Google, GitHub, GitLab, Bitbucket, and Slack.

Adapters for other platforms are available via the community driven [Socialite Providers](https://socialiteproviders.com/) website.

## [Installation](#installation)

To get started with Socialite, use the Composer package manager to add the package to your project's dependencies:

```
1composer require laravel/socialite

composer require laravel/socialite
```

## [Upgrading Socialite](#upgrading-socialite)

When upgrading to a new major version of Socialite, it's important that you carefully review [the upgrade guide](https://github.com/laravel/socialite/blob/master/UPGRADE.md).

## [Configuration](#configuration)

Before using Socialite, you will need to add credentials for the OAuth providers your application utilizes. Typically, these credentials may be retrieved by creating a "developer application" within the dashboard of the service you will be authenticating with.

These credentials should be placed in your application's `config/services.php` configuration file, and should use the key `facebook`, `x`, `linkedin-openid`, `google`, `github`, `gitlab`, `bitbucket`, `slack`, or `slack-openid`, depending on the providers your application requires:

```
1'github' => [

2    'client_id' => env('GITHUB_CLIENT_ID'),

3    'client_secret' => env('GITHUB_CLIENT_SECRET'),

4    'redirect' => 'http://example.com/callback-url',

5],

'github' => [
    'client_id' => env('GITHUB_CLIENT_ID'),
    'client_secret' => env('GITHUB_CLIENT_SECRET'),
    'redirect' => 'http://example.com/callback-url',
],
```

If the `redirect` option contains a relative path, it will automatically be resolved to a fully qualified URL.

## [Authentication](#authentication)

### [Routing](#routing)

To authenticate users using an OAuth provider, you will need two routes: one for redirecting the user to the OAuth provider, and another for receiving the callback from the provider after authentication. The example routes below demonstrate the implementation of both routes:

```
1use Laravel\Socialite\Socialite;

2

3Route::get('/auth/redirect', function () {

4    return Socialite::driver('github')->redirect();

5});

6

7Route::get('/auth/callback', function () {

8    $user = Socialite::driver('github')->user();

9

10    // $user->token

11});

use Laravel\Socialite\Socialite;

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();

    // $user->token
});
```

The `redirect` method provided by the `Socialite` facade takes care of redirecting the user to the OAuth provider, while the `user` method will examine the incoming request and retrieve the user's information from the provider after they have approved the authentication request.

### [Authentication and Storage](#authentication-and-storage)

Once the user has been retrieved from the OAuth provider, you may determine if the user exists in your application's database and [authenticate the user](authentication.md#authenticate-a-user-instance). If the user does not exist in your application's database, you will typically create a new record in your database to represent the user:

```
1use App\Models\User;

2use Illuminate\Support\Facades\Auth;

3use Laravel\Socialite\Socialite;

4

5Route::get('/auth/callback', function () {

6    $githubUser = Socialite::driver('github')->user();

7

8    $user = User::updateOrCreate([

9        'github_id' => $githubUser->id,

10    ], [

11        'name' => $githubUser->name,

12        'email' => $githubUser->email,

13        'github_token' => $githubUser->token,

14        'github_refresh_token' => $githubUser->refreshToken,

15    ]);

16

17    Auth::login($user);

18

19    return redirect('/dashboard');

20});

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Socialite;

Route::get('/auth/callback', function () {
    $githubUser = Socialite::driver('github')->user();

    $user = User::updateOrCreate([
        'github_id' => $githubUser->id,
    ], [
        'name' => $githubUser->name,
        'email' => $githubUser->email,
        'github_token' => $githubUser->token,
        'github_refresh_token' => $githubUser->refreshToken,
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});
```

For more information regarding what user information is available from specific OAuth providers, please consult the documentation on [retrieving user details](#retrieving-user-details).

### [Access Scopes](#access-scopes)

Before redirecting the user, you may use the `scopes` method to specify the "scopes" that should be included in the authentication request. This method will merge all previously specified scopes with the scopes that you specify:

```
1use Laravel\Socialite\Socialite;

2

3return Socialite::driver('github')

4    ->scopes(['read:user', 'public_repo'])

5    ->redirect();

use Laravel\Socialite\Socialite;

return Socialite::driver('github')
    ->scopes(['read:user', 'public_repo'])
    ->redirect();
```

You can overwrite all existing scopes on the authentication request using the `setScopes` method:

```
1return Socialite::driver('github')

2    ->setScopes(['read:user', 'public_repo'])

3    ->redirect();

return Socialite::driver('github')
    ->setScopes(['read:user', 'public_repo'])
    ->redirect();
```

### [Slack Bot Scopes](#slack-bot-scopes)

Slack's API provides [different types of access tokens](https://api.slack.com/authentication/token-types), each with their own set of [permission scopes](https://api.slack.com/scopes). Socialite is compatible with both of the following Slack access tokens types:

- Bot (prefixed with `xoxb-`)
- User (prefixed with `xoxp-`)

By default, the `slack` driver will generate a `user` token and invoking the driver's `user` method will return the user's details.

Bot tokens are primarily useful if your application will be sending notifications to external Slack workspaces that are owned by your application's users. To generate a bot token, invoke the `asBotUser` method before redirecting the user to Slack for authentication:

```
1return Socialite::driver('slack')

2    ->asBotUser()

3    ->setScopes(['chat:write', 'chat:write.public', 'chat:write.customize'])

4    ->redirect();

return Socialite::driver('slack')
    ->asBotUser()
    ->setScopes(['chat:write', 'chat:write.public', 'chat:write.customize'])
    ->redirect();
```

In addition, you must invoke the `asBotUser` method before invoking the `user` method after Slack redirects the user back to your application after authentication:

```
1$user = Socialite::driver('slack')->asBotUser()->user();

$user = Socialite::driver('slack')->asBotUser()->user();
```

When generating a bot token, the `user` method will still return a `Laravel\Socialite\Two\User` instance; however, only the `token` property will be hydrated. This token may be stored in order to [send notifications to the authenticated user's Slack workspaces](notifications.md#notifying-external-slack-workspaces).

### [Optional Parameters](#optional-parameters)

A number of OAuth providers support other optional parameters on the redirect request. To include any optional parameters in the request, call the `with` method with an associative array:

```
1use Laravel\Socialite\Socialite;

2

3return Socialite::driver('google')

4    ->with(['hd' => 'example.com'])

5    ->redirect();

use Laravel\Socialite\Socialite;

return Socialite::driver('google')
    ->with(['hd' => 'example.com'])
    ->redirect();
```

When using the `with` method, be careful not to pass any reserved keywords such as `state` or `response_type`.

## [Retrieving User Details](#retrieving-user-details)

After the user is redirected back to your application's authentication callback route, you may retrieve the user's details using Socialite's `user` method. The user object returned by the `user` method provides a variety of properties and methods you may use to store information about the user in your own database.

Differing properties and methods may be available on this object depending on whether the OAuth provider you are authenticating with supports OAuth 1.0 or OAuth 2.0:

```
1use Laravel\Socialite\Socialite;

2

3Route::get('/auth/callback', function () {

4    $user = Socialite::driver('github')->user();

5

6    // OAuth 2.0 providers...

7    $token = $user->token;

8    $refreshToken = $user->refreshToken;

9    $expiresIn = $user->expiresIn;

10

11    // OAuth 1.0 providers...

12    $token = $user->token;

13    $tokenSecret = $user->tokenSecret;

14

15    // All providers...

16    $user->getId();

17    $user->getNickname();

18    $user->getName();

19    $user->getEmail();

20    $user->getAvatar();

21});

use Laravel\Socialite\Socialite;

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();

    // OAuth 2.0 providers...
    $token = $user->token;
    $refreshToken = $user->refreshToken;
    $expiresIn = $user->expiresIn;

    // OAuth 1.0 providers...
    $token = $user->token;
    $tokenSecret = $user->tokenSecret;

    // All providers...
    $user->getId();
    $user->getNickname();
    $user->getName();
    $user->getEmail();
    $user->getAvatar();
});
```

#### [Retrieving User Details From a Token](#retrieving-user-details-from-a-token-oauth2)

If you already have a valid access token for a user, you can retrieve their user details using Socialite's `userFromToken` method:

```
1use Laravel\Socialite\Socialite;

2

3$user = Socialite::driver('github')->userFromToken($token);

use Laravel\Socialite\Socialite;

$user = Socialite::driver('github')->userFromToken($token);
```

If you are using Facebook Limited Login via an iOS application, Facebook will return an OIDC token instead of an access token. To retrieve user details from the OIDC token, provide the nonce used to initiate the login to the `userFromToken` method:

```
1$user = Socialite::driver('facebook')->userFromToken($token, $nonce);

$user = Socialite::driver('facebook')->userFromToken($token, $nonce);
```

#### [Stateless Authentication](#stateless-authentication)

The `stateless` method may be used to disable session state verification. This is useful when adding social authentication to a stateless API that does not utilize cookie based sessions:

```
1use Laravel\Socialite\Socialite;

2

3return Socialite::driver('google')->stateless()->user();

use Laravel\Socialite\Socialite;

return Socialite::driver('google')->stateless()->user();
```

## [Testing](#testing)

Laravel Socialite provides a convenient way to test OAuth authentication flows without making actual requests to OAuth providers. The `fake` method allows you to mock the OAuth provider's behavior and define the user data that should be returned.

#### [Faking the Redirect](#faking-the-redirect)

To test that your application correctly redirects users to an OAuth provider, you may invoke the `fake` method before making a request to your redirect route. This will cause Socialite to return a redirect to a fake authorization URL instead of redirecting to the actual OAuth provider:

```
1use Laravel\Socialite\Socialite;

2

3test('user is redirected to github', function () {

4    Socialite::fake('github');

5

6    $response = $this->get('/auth/github/redirect');

7

8    $response->assertRedirect();

9});

use Laravel\Socialite\Socialite;

test('user is redirected to github', function () {
    Socialite::fake('github');

    $response = $this->get('/auth/github/redirect');

    $response->assertRedirect();
});
```

#### [Faking the Callback](#faking-the-callback)

To test your application's callback route, you may invoke the `fake` method and provide a `User` instance that should be returned when your application requests the user's details from the provider. The `User` instance may be created using the `fake` method:

```
1use Laravel\Socialite\Socialite;

2use Laravel\Socialite\Two\User;

3

4test('user can login with github', function () {

5    Socialite::fake('github', User::fake([

6        'id' => 'github-123',

7        'name' => 'Jason Beggs',

8        'email' => '[email protected]',

9    ]));

10

11    $response = $this->get('/auth/github/callback');

12

13    $response->assertRedirect('/dashboard');

14

15    $this->assertDatabaseHas('users', [

16        'name' => 'Jason Beggs',

17        'email' => '[email protected]',

18        'github_id' => 'github-123',

19    ]);

20});

use Laravel\Socialite\Socialite;
use Laravel\Socialite\Two\User;

test('user can login with github', function () {
    Socialite::fake('github', User::fake([
        'id' => 'github-123',
        'name' => 'Jason Beggs',
        'email' => '[email protected]',
    ]));

    $response = $this->get('/auth/github/callback');

    $response->assertRedirect('/dashboard');

    $this->assertDatabaseHas('users', [
        'name' => 'Jason Beggs',
        'email' => '[email protected]',
        'github_id' => 'github-123',
    ]);
});
```

By default, the `User` instance will include fake OAuth token values. If needed, you may override these values by passing additional attributes to the `fake` method:

```
1$fakeUser = User::fake([

2    'id' => 'github-123',

3    'name' => 'Jason Beggs',

4    'email' => '[email protected]',

5    'token' => 'fake-token',

6    'refreshToken' => 'fake-refresh-token',

7    'expiresIn' => 3600,

8    'approvedScopes' => ['read', 'write'],

9]);

$fakeUser = User::fake([
    'id' => 'github-123',
    'name' => 'Jason Beggs',
    'email' => '[email protected]',
    'token' => 'fake-token',
    'refreshToken' => 'fake-refresh-token',
    'expiresIn' => 3600,
    'approvedScopes' => ['read', 'write'],
]);
```

OAuth 1 users may be faked using the `Laravel\Socialite\One\User` class.

Copy as markdown

### On this page

- [Introduction](#introduction)
- [Installation](#installation)
- [Upgrading Socialite](#upgrading-socialite)
- [Configuration](#configuration)
- [Authentication](#authentication)
  - [Routing](#routing)
  - [Authentication and Storage](#authentication-and-storage)
  - [Access Scopes](#access-scopes)
  - [Slack Bot Scopes](#slack-bot-scopes)
  - [Optional Parameters](#optional-parameters)
- [Retrieving User Details](#retrieving-user-details)
- [Testing](#testing)

Laravel is the most productive way to  
 build, deploy, and monitor software.

First name

Last name

Email address

Stay updated

By submitting this form, you agree to our [terms](https://laravel.com/legal). You can opt-out anytime.

- © 2026 Laravel
- [Legal](https://laravel.com/legal)
- [Status](https://status.laravel.com/)

Products

- [Cloud](https://laravel.com/cloud)
- [Forge](https://forge.laravel.com)
- [Nightwatch](https://nightwatch.laravel.com)
- [Vapor](https://vapor.laravel.com)
- [Nova](https://nova.laravel.com)

Packages

- [Cashier](billing.md)
- [Dusk](dusk.md)
- [Horizon](horizon.md)
- [Octane](octane.md)
- [Scout](scout.md)
- [Pennant](pennant.md)
- [Pint](pint.md)
- [Sail](sail.md)
- [Sanctum](sanctum.md)
- [Socialite](socialite.md)
- [Telescope](telescope.md)
- [Pulse](pulse.md)
- [Reverb](reverb.md)
- [Echo](broadcasting.md)

Resources

- [Documentation](index.md)
- [Starter Kits](https://laravel.com/starter-kits)
- [Release Notes](releases.md)
- [Blog](https://laravel.com/blog)
- [News](https://laravel-news.com)
- [Community](https://laravel.com/community)
- [Larabelles](https://larabelles.com/)
- [Learn](https://laravel.com/learn)
- [Jobs](https://larajobs.com/?partner=5)
- [Careers](https://laravel.com/careers)
- [Trust](https://trust.laravel.com)

Partners

- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Jump24](https://laravel.com/partners/jump24)
- [Vehikl](https://laravel.com/partners/vehikl)
- [CACI Limited](https://laravel.com/partners/caci-limited)
- [Redberry](https://laravel.com/partners/redberry)
- [64 Robots](https://laravel.com/partners/64-robots)
- [Tighten](https://laravel.com/partners/tighten)
- [byte5](https://laravel.com/partners/byte5)
- [Pixel](https://laravel.com/partners/pixel)
- [Threadable](https://laravel.com/partners/threadable)
- [See All](https://laravel.com/partners)
