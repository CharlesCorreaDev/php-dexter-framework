# Hashing | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/hashing

---

[Skip to content](#main-content)

# Hashing

- [Introduction](#introduction)
- [Configuration](#configuration)
- [Basic Usage](#basic-usage)
  - [Hashing Passwords](#hashing-passwords)
  - [Verifying That a Password Matches a Hash](#verifying-that-a-password-matches-a-hash)
  - [Determining if a Password Needs to be Rehashed](#determining-if-a-password-needs-to-be-rehashed)
- [Hash Algorithm Verification](#hash-algorithm-verification)

## [Introduction](#introduction)

The Laravel `Hash` [facade](facades.md) provides secure Bcrypt and Argon2 hashing for storing user passwords. If you are using one of the [Laravel application starter kits](starter-kits.md), Bcrypt will be used for registration and authentication by default.

Bcrypt is a great choice for hashing passwords because its "work factor" is adjustable, which means that the time it takes to generate a hash can be increased as hardware power increases. When hashing passwords, slow is good. The longer an algorithm takes to hash a password, the longer it takes malicious users to generate "rainbow tables" of all possible string hash values that may be used in brute force attacks against applications.

## [Configuration](#configuration)

By default, Laravel uses the `bcrypt` hashing driver when hashing data. However, several other hashing drivers are supported, including [argon](https://en.wikipedia.org/wiki/Argon2) and [argon2id](https://en.wikipedia.org/wiki/Argon2).

You may specify your application's hashing driver using the `HASH_DRIVER` environment variable. But, if you want to customize all of Laravel's hashing driver options, you should publish the complete `hashing` configuration file using the `config:publish` Artisan command:

```
1php artisan config:publish hashing

php artisan config:publish hashing
```

## [Basic Usage](#basic-usage)

### [Hashing Passwords](#hashing-passwords)

You may hash a password by calling the `make` method on the `Hash` facade:

```
1<?php

2

3namespace App\Http\Controllers;

4

5use Illuminate\Http\RedirectResponse;

6use Illuminate\Http\Request;

7use Illuminate\Support\Facades\Hash;

8

9class PasswordController extends Controller

10{

11    /**

12     * Update the password for the user.

13     */

14    public function update(Request $request): RedirectResponse

15    {

16        // Validate the new password length...

17

18        $request->user()->fill([

19            'password' => Hash::make($request->newPassword)

20        ])->save();

21

22        return redirect('/profile');

23    }

24}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    /**
     * Update the password for the user.
     */
    public function update(Request $request): RedirectResponse
    {
        // Validate the new password length...

        $request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save();

        return redirect('/profile');
    }
}
```

#### [Adjusting The Bcrypt Work Factor](#adjusting-the-bcrypt-work-factor)

If you are using the Bcrypt algorithm, the `make` method allows you to manage the work factor of the algorithm using the `rounds` option; however, the default work factor managed by Laravel is acceptable for most applications:

```
1$hashed = Hash::make('password', [

2    'rounds' => 12,

3]);

$hashed = Hash::make('password', [
    'rounds' => 12,
]);
```

#### [Adjusting The Argon2 Work Factor](#adjusting-the-argon2-work-factor)

If you are using the Argon2 algorithm, the `make` method allows you to manage the work factor of the algorithm using the `memory`, `time`, and `threads` options; however, the default values managed by Laravel are acceptable for most applications:

```
1$hashed = Hash::make('password', [

2    'memory' => 1024,

3    'time' => 2,

4    'threads' => 2,

5]);

$hashed = Hash::make('password', [
    'memory' => 1024,
    'time' => 2,
    'threads' => 2,
]);
```

For more information on these options, please refer to the [official PHP documentation regarding Argon hashing](https://secure.php.net/manual/en/function.password-hash.php).

### [Verifying That a Password Matches a Hash](#verifying-that-a-password-matches-a-hash)

The `check` method provided by the `Hash` facade allows you to verify that a given plain-text string corresponds to a given hash:

```
1if (Hash::check('plain-text', $hashedPassword)) {

2    // The passwords match...

3}

if (Hash::check('plain-text', $hashedPassword)) {
    // The passwords match...
}
```

### [Determining if a Password Needs to be Rehashed](#determining-if-a-password-needs-to-be-rehashed)

The `needsRehash` method provided by the `Hash` facade allows you to determine if the work factor used by the hasher has changed since the password was hashed. Some applications choose to perform this check during the application's authentication process:

```
1if (Hash::needsRehash($hashed)) {

2    $hashed = Hash::make('plain-text');

3}

if (Hash::needsRehash($hashed)) {
    $hashed = Hash::make('plain-text');
}
```

## [Hash Algorithm Verification](#hash-algorithm-verification)

To prevent hash algorithm manipulation, Laravel's `Hash::check` method will first verify the given hash was generated using the application's selected hashing algorithm. If the algorithms are different, a `RuntimeException` exception will be thrown.

This is the expected behavior for most applications, where the hashing algorithm is not expected to change and different algorithms can be an indication of a malicious attack. However, if you need to support multiple hashing algorithms within your application, such as when migrating from one algorithm to another, you can disable hash algorithm verification by setting the `HASH_VERIFY` environment variable to `false`:

```
1HASH_VERIFY=false

HASH_VERIFY=false
```

Copy as markdown

### On this page

- [Introduction](#introduction)
- [Configuration](#configuration)
- [Basic Usage](#basic-usage)
  - [Hashing Passwords](#hashing-passwords)
  - [Verifying That a Password Matches a Hash](#verifying-that-a-password-matches-a-hash)
  - [Determining if a Password Needs to be Rehashed](#determining-if-a-password-needs-to-be-rehashed)
- [Hash Algorithm Verification](#hash-algorithm-verification)

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
