# Password Hashing and Verification (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/security/passwords.html

---

# Password Hashing and Verification

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/security/passwords.rst)

Most applications use passwords to log in users. These passwords should be
hashed to securely store them. Symfony's PasswordHasher component provides
all utilities to safely hash and verify passwords.

Make sure it is installed by running:

```
1
```

```
$ composer require symfony/password-hasher
```

## [Configuring a Password Hasher](#configuring-a-password-hasher "Permalink to this headline")

Before hashing passwords, you must configure a hasher using the
`password_hashers` option. You must configure the *hashing algorithm* and
optionally some *algorithm options*:

YAML

PHP

Standalone Use

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

    password_hashers:
        # auto hasher with default options for the User class (and children)
        App\Entity\User: 'auto'

        # auto hasher with custom options for all PasswordAuthenticatedUserInterface instances
        Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface:
            algorithm: 'auto'
            cost:      15
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
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Entity\User;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

return App::config([
    'security' => [
        // ...

        'password_hashers' => [
            // auto hasher with default options for the User class (and children)
            User::class => 'auto',

            // auto hasher with custom options for all PasswordAuthenticatedUserInterface instances
            PasswordAuthenticatedUserInterface::class => [
                'algorithm' => 'auto',
                'cost' => 15,
            ],
        ],
    ],
]);
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
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

$passwordHasherFactory = new PasswordHasherFactory([
    // auto hasher with default options for the User class (and children)
    User::class => ['algorithm' => 'auto'],

    // auto hasher with custom options for all PasswordAuthenticatedUserInterface instances
    PasswordAuthenticatedUserInterface::class => [
        'algorithm' => 'auto',
        'cost' => 15,
    ],
]);
```

In this example, the "auto" algorithm is used. This hasher automatically
selects the most secure algorithm available on your system. Combined with
[password migration](current__security__passwords.md#security-password-migration), this allows you to
always secure passwords in the safest way possible (even when new
algorithms are introduced in future PHP releases).

Further in this article, you can find a
[full reference of all supported algorithms](current__security__passwords.md#passwordhasher-supported-algorithms).

Tip

Hashing passwords is resource intensive and takes time in order to
generate secure password hashes. In general, this makes your password
hashing more secure.

In tests however, secure hashes are not important, so you can change
the password hasher configuration in `test` environment to run tests
faster:

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
when@test:
    security:
        # ...

        password_hashers:
            # Use your user class name here
            App\Entity\User:
                algorithm: auto
                cost: 4 # Lowest possible value for bcrypt
                time_cost: 3 # Lowest possible value for argon
                memory_cost: 10 # Lowest possible value for argon
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
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Entity\User;

return App::config([
    'when@test' => [
        'security' => [
            'password_hashers' => [
                // Use your user class name here
                User::class => [
                    'algorithm' => 'auto',
                    'cost' => 4, // Lowest possible value for bcrypt
                    'time_cost' => 3, // Lowest possible value for argon
                    'memory_cost' => 10, // Lowest possible value for argon
                ],
            ],
        ],
    ],
]);
```

## [Hashing the Password](#hashing-the-password "Permalink to this headline")

After configuring the correct algorithm, you can use the
`UserPasswordHasherInterface` to hash and verify the passwords:

Framework Use

Standalone Use

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
```

```
// src/Controller/RegistrationController.php
namespace App\Controller;

// ...
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    public function registration(UserPasswordHasherInterface $passwordHasher): Response
    {
        // ... e.g. get the user data from a registration form
        $user = new User(...);
        $plaintextPassword = ...;

        // hash the password (based on the security.yaml config for the $user class)
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $plaintextPassword
        );
        $user->setPassword($hashedPassword);

        // ...
    }

    public function delete(UserPasswordHasherInterface $passwordHasher, UserInterface $user): void
    {
        // ... e.g. get the password from a "confirm deletion" dialog
        $plaintextPassword = ...;

        if (!$passwordHasher->isPasswordValid($user, $plaintextPassword)) {
            throw new AccessDeniedHttpException();
        }
    }
}
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
// ...
$passwordHasher = new UserPasswordHasher($passwordHasherFactory);

// Get the user password (e.g. from a registration form)
$user = new User(...);
$plaintextPassword = ...;

// hash the password (based on the password hasher factory config for the $user class)
$hashedPassword = $passwordHasher->hashPassword(
    $user,
    $plaintextPassword
);
$user->setPassword($hashedPassword);

// In another action (e.g. to confirm deletion), you can verify the password
$plaintextPassword = ...;
if (!$passwordHasher->isPasswordValid($user, $plaintextPassword)) {
    throw new \Exception('Bad credentials, cannot delete this user.');
}
```

## [Reset Password](#reset-password "Permalink to this headline")

Using [MakerBundle](current__bundles__SymfonyMakerBundle__index.md) and [SymfonyCastsResetPasswordBundle](https://github.com/symfonycasts/reset-password-bundle), you can create
a secure solution to handle forgotten passwords. First,
install the SymfonyCastsResetPasswordBundle:

```
1
```

```
$ composer require symfonycasts/reset-password-bundle
```

Then, use the `make:reset-password` command. This asks you a few
questions about your app and generates all the files you need! After,
you'll see a success message and a list of any other steps you need to do.

```
1
```

```
$ php bin/console make:reset-password
```

Tip

You can pass either `--with-uuid` or `--with-ulid` to `make:reset-password`.
Using Symfony's [Uid Component](current__components__uid.md), the entities
will be generated with the `id` type as [Uuid](current__components__uid.md#uuid) or
[Ulid](current__components__uid.md#ulid) instead of `int`.

You can customize the reset password bundle's behavior by updating the
`reset_password.yaml` file. For more information on the configuration,
check out the [SymfonyCastsResetPasswordBundle](https://github.com/symfonycasts/reset-password-bundle) guide.

### [Injecting a Specific Password Hasher](#injecting-a-specific-password-hasher "Permalink to this headline")

In some cases, you may define a password hasher in your configuration that is
not tied to a user class. For example, you might use a separate hasher for
password recovery codes or API tokens.

With the following configuration:

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
    password_hashers:
        recovery_code: 'auto'

    firewalls:
        main:
            # ...
```

You can inject the `recovery_code` password hasher into any service. However,
you can't rely on standard autowiring, as Symfony doesn't know which specific
hasher to provide.

Instead, use the `#[Target]` attribute to explicitly request the hasher by
its configuration key:

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
// src/Controller/HomepageController.php
namespace App\Controller;

use Symfony\Component\DependencyInjection\Attribute\Target;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;

class HomepageController extends AbstractController
{
    public function __construct(
        #[Target('recovery_code')]
        private readonly PasswordHasherInterface $passwordHasher,
    ) {
    }

    #[Route('/')]
    public function index(): Response
    {
        $plaintextToken = 'some-secret-token';

        // Note: use hash(), not hashPassword(), as we are not using a UserInterface object
        $hashedToken = $this->passwordHasher->hash($plaintextToken);
    }
}
```

When injecting a specific hasher by its name, you should type-hint the generic
[PasswordHasherInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/PasswordHasher/PasswordHasherInterface.php "Symfony\Component\PasswordHasher\PasswordHasherInterface").

## [Password Migration](#password-migration "Permalink to this headline")

In order to protect passwords, it is recommended to store them using the latest
hash algorithms. This means that if a better hash algorithm is supported on your
system, the user's password should be *rehashed* using the newer algorithm and
stored. That's possible with the `migrate_from` option:

1. [Configure a new Hasher Using "migrate\_from"](current__security__passwords.md#configure-a-new-hasher-using-migrate-from)
2. [Upgrade the Password](current__security__passwords.md#upgrade-the-password)
3. Optionally, [Trigger Password Migration From a Custom Hasher](current__security__passwords.md#trigger-password-migration-from-a-custom-hasher)

### [Configure a new Hasher Using "migrate\_from"](#configure-a-new-hasher-using-migrate-from "Permalink to this headline")

When a better hashing algorithm becomes available, you should keep the existing
hasher(s), rename it, and then define the new one. Set the `migrate_from` option
on the new hasher to point to the old, legacy hasher(s):

YAML

PHP

Standalone Use

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
# config/packages/security.yaml
security:
    # ...

    password_hashers:
        # a hasher used in the past for some users
        legacy:
            algorithm: sha256
            encode_as_base64: false
            iterations: 1

        App\Entity\User:
            # the new hasher, along with its options
            algorithm: sodium
            migrate_from:
                - bcrypt # uses the "bcrypt" hasher with the default options
                - legacy # uses the "legacy" hasher configured above
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
24
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        // ...
        'password_hashers' => [
            // a hasher used in the past for some users
            'legacy' => [
                'algorithm' => 'sha256',
                'encode_as_base64' => false,
                'iterations' => 1,
            ],
            User::class => [
                // the new hasher, along with its options
                'algorithm' => 'sodium',
                'migrate_from' => [
                    'bcrypt', // uses the "bcrypt" hasher with the default options
                    'legacy', // uses the "legacy" hasher configured above
                ],
            ],
        ],
    ],
]);
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
// ...
$passwordHasherFactory = new PasswordHasherFactory([
    'legacy' => [
        'algorithm' => 'sha256',
        'encode_as_base64' => true,
        'iterations' => 1,
    ],

    User::class => [
        // the new hasher, along with its options
        'algorithm' => 'sodium',
        'migrate_from' => [
            'bcrypt', // uses the "bcrypt" hasher with the default options
            'legacy', // uses the "legacy" hasher configured above
        ],
    ],
]);
```

With this setup:

- New users will be hashed with the new algorithm;
- Whenever a user logs in whose password is still stored using the old algorithm,
  Symfony will verify the password with the old algorithm and then rehash
  and update the password using the new algorithm.

Tip

The *auto*, *native*, *bcrypt* and *argon* hashers automatically enable
password migration using the following list of `migrate_from` algorithms:

1. [PBKDF2](current__security__passwords.md#reference-security-pbkdf2) (which uses [hash\_pbkdf2](https://secure.php.net/manual/en/function.hash-pbkdf2.php "hash_pbkdf2"));
2. Message digest (which uses [hash](https://secure.php.net/manual/en/function.hash.php "hash"))

Both use the `hash_algorithm` setting as the algorithm. It is recommended to
use `migrate_from` instead of `hash_algorithm`, unless the *auto*
hasher is used.

### [Upgrade the Password](#upgrade-the-password "Permalink to this headline")

Upon successful login, the Security system checks whether a better algorithm
is available to hash the user's password. If it is, it'll hash the correct
password using the new hash. When using a custom authenticator, you must
use the `PasswordCredentials` in the [security passport](current__security__custom_authenticator.md#security-passport).

You can enable the upgrade behavior by implementing how this newly hashed
password should be stored:

- [When using Doctrine's entity user provider](current__security__passwords.md#upgrade-the-password-doctrine)
- [When using a custom user provider](current__security__passwords.md#upgrade-the-password-custom-provider)

After this, you're done and passwords are always hashed as securely as possible!

Note

When using the PasswordHasher component outside a Symfony application,
you must manually use the `PasswordHasherInterface::needsRehash()`
method to check if a rehash is needed and `PasswordHasherInterface::hash()`
method to rehash the plaintext password using the new algorithm.

#### [Upgrade the Password when using Doctrine](#upgrade-the-password-when-using-doctrine "Permalink to this headline")

When using the [entity user provider](current__security__user_providers.md#security-entity-user-provider), implement
[PasswordUpgraderInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Core/User/PasswordUpgraderInterface.php "Symfony\Component\Security\Core\User\PasswordUpgraderInterface") in
the `UserRepository` (see [the Doctrine docs for information](https://www.doctrine-project.org/projects/doctrine-orm/en/current/reference/working-with-objects.html#custom-repositories) on how to
create this class if it's not already created). This interface implements
storing the newly created password hash:

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
```

```
// src/Repository/UserRepository.php
namespace App\Repository;

// ...
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

class UserRepository extends EntityRepository implements PasswordUpgraderInterface
{
    // ...

    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        // set the new hashed password on the User object
        $user->setPassword($newHashedPassword);

        // execute the queries on the database
        $this->getEntityManager()->flush();
    }
}
```

#### [Upgrade the Password when using a Custom User Provider](#upgrade-the-password-when-using-a-custom-user-provider "Permalink to this headline")

If you're using a [custom user provider](current__security__user_providers.md#security-custom-user-provider), implement the
[PasswordUpgraderInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Core/User/PasswordUpgraderInterface.php "Symfony\Component\Security\Core\User\PasswordUpgraderInterface") in
the user provider:

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
// src/Security/UserProvider.php
namespace App\Security;

// ...
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

class UserProvider implements UserProviderInterface, PasswordUpgraderInterface
{
    // ...

    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        // set the new hashed password on the User object
        $user->setPassword($newHashedPassword);

        // ... store the new password
    }
}
```

### [Trigger Password Migration From a Custom Hasher](#trigger-password-migration-from-a-custom-hasher "Permalink to this headline")

If you're using a custom password hasher, you can trigger the password
migration by returning `true` in the `needsRehash()` method:

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
```

```
// src/Security/CustomPasswordHasher.php
namespace App\Security;

// ...
use Symfony\Component\PasswordHasher\PasswordHasherInterface;

class CustomPasswordHasher implements PasswordHasherInterface
{
    // ...

    public function needsRehash(string $hashedPassword): bool
    {
        // check whether the current password is hashed using an outdated hasher
        $hashIsOutdated = ...;

        return $hashIsOutdated;
    }
}
```

## [Dynamic Password Hashers](#dynamic-password-hashers "Permalink to this headline")

Usually, the same password hasher is used for all users by configuring it
to apply to all instances of a specific class. Another option is to use a
"named" hasher and then select which hasher you want to use dynamically.

By default (as shown at the start of the article), the `auto` algorithm
is used for `App\Entity\User`.

This may be secure enough for a regular user, but what if you want your
admins to have a stronger algorithm, for example `auto` with a higher
cost. This can be done with named hashers:

YAML

PHP

Standalone Use

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
        harsh:
            algorithm: auto
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
12
13
14
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
    // ...
        'password_hashers' => [
            'harsh' => [
                'algorithm' => 'auto',
                'cost' => 15,
            ],
        ],
    ],
]);
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
```

```
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;

$passwordHasherFactory = new PasswordHasherFactory([
    // ...
    'harsh' => [
        'algorithm' => 'auto',
        'cost' => 15
    ],
]);
```

This creates a hasher named `harsh`. In order for a `User` instance
to use it, the class must implement
[PasswordHasherAwareInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/PasswordHasher/Hasher/PasswordHasherAwareInterface.php "Symfony\Component\PasswordHasher\Hasher\PasswordHasherAwareInterface").
The interface requires one method - `getPasswordHasherName()` - which should return
the name of the hasher to use:

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
// src/Entity/User.php
namespace App\Entity;

use Symfony\Component\PasswordHasher\Hasher\PasswordHasherAwareInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class User implements
    UserInterface,
    PasswordAuthenticatedUserInterface,
    PasswordHasherAwareInterface
{
    // ...

    public function getPasswordHasherName(): ?string
    {
        if ($this->isAdmin()) {
            return 'harsh';
        }

        return null; // use the default hasher
    }
}
```

Warning

When [migrating passwords](current__security__passwords.md#security-password-migration), you don't
need to implement `PasswordHasherAwareInterface` to return the legacy
hasher name: Symfony will detect it from your `migrate_from` configuration.

If you created your own password hasher implementing the
[PasswordHasherInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/PasswordHasher/PasswordHasherInterface.php "Symfony\Component\PasswordHasher\PasswordHasherInterface"),
you must register a service for it in order to use it as a named hasher:

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
    # ...
    password_hashers:
        App\Entity\User:
            id: 'App\Security\Hasher\MyCustomPasswordHasher'
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

use App\Security\Hasher\MyCustomPasswordHasher;

return App::config([
    'security' => [
        // ...
        'password_hashers' => [
            'App\Entity\User' => [
                'id' => MyCustomPasswordHasher::class,
            ],
        ],
    ],
]);
```

This creates a hasher named `App\Entity\User` from a service with the ID
`App\Security\Hasher\MyCustomPasswordHasher`.

## [Hashing a Stand-Alone String](#hashing-a-stand-alone-string "Permalink to this headline")

The password hasher can be used to hash strings independently
of users. By using the
[PasswordHasherFactory](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/PasswordHasher/Hasher/PasswordHasherFactory.php "Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory"),
you can declare multiple hashers, retrieve any of them with
its name and create hashes. You can then verify that a string matches the given
hash:

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
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;

// configure different hashers via the factory
$factory = new PasswordHasherFactory([
    'common' => ['algorithm' => 'bcrypt'],
    'sodium' => ['algorithm' => 'sodium'],
]);

// retrieve the hasher using bcrypt
$hasher = $factory->getPasswordHasher('common');
$hash = $hasher->hash('plain');

// verify that a given string matches the hash calculated above
$hasher->verify($hash, 'invalid'); // false
$hasher->verify($hash, 'plain'); // true
```

## [Supported Algorithms](#supported-algorithms "Permalink to this headline")

- [auto](current__security__passwords.md#reference-security-encoder-auto)
- [bcrypt](current__security__passwords.md#reference-security-encoder-bcrypt)
- [sodium](current__security__passwords.md#reference-security-sodium)
- [PBKDF2](current__security__passwords.md#reference-security-pbkdf2)
- [Or create a custom password hasher](current__security__passwords.md#custom-password-hasher)

### [The "auto" Hasher](#the-auto-hasher "Permalink to this headline")

It automatically selects the best available hasher (currently Bcrypt). If
PHP or Symfony adds new password hashers in the future, it might select a
different hasher.

Because of this, the length of the hashed passwords may change in the future, so
make sure to allocate enough space for them to be persisted (`varchar(255)`
should be a good setting).

### [The Bcrypt Password Hasher](#the-bcrypt-password-hasher "Permalink to this headline")

It produces hashed passwords with the [bcrypt password hashing function](https://en.wikipedia.org/wiki/Bcrypt).
Hashed passwords are `60` characters long, so make sure to
allocate enough space for them to be persisted. Also, passwords include the
[cryptographic salt](https://en.wikipedia.org/wiki/Salt_(cryptography)) inside them (it's generated automatically for each new
password) so you don't have to deal with it.

Its only configuration option is `cost`, which is an integer in the range of
`4-31` (by default, `13`). Each single increment of the cost **doubles the
time** it takes to hash a password. It's designed this way so the password
strength can be adapted to the future improvements in computation power.

You can change the cost at any time — even if you already have some passwords
hashed using a different cost. New passwords will be hashed using the new
cost, while the already hashed ones will be validated using a cost that was
used back when they were hashed.

Tip

A simple technique to make tests much faster when using BCrypt is to set
the cost to `4`, which is the minimum value allowed, in the `test`
environment configuration.

### [The Sodium Password Hasher](#the-sodium-password-hasher "Permalink to this headline")

It uses the [Argon2 key derivation function](https://en.wikipedia.org/wiki/Argon2). Argon2 support is available in
PHP via the bundled [libsodium](https://pecl.php.net/package/libsodium) extension.

The hashed passwords are `96` characters long, but due to the hashing
requirements saved in the resulting hash this may change in the future, so make
sure to allocate enough space for them to be persisted. Also, passwords include
the [cryptographic salt](https://en.wikipedia.org/wiki/Salt_(cryptography)) inside them (it's generated automatically for each new
password) so you don't have to deal with it.

### [The PBKDF2 Hasher](#the-pbkdf2-hasher "Permalink to this headline")

Using the [PBKDF2](https://en.wikipedia.org/wiki/PBKDF2) hasher is no longer recommended since PHP added support for
Sodium and BCrypt. Legacy applications still using it are encouraged to upgrade
to those newer hashing algorithms.

### [Creating a custom Password Hasher](#creating-a-custom-password-hasher "Permalink to this headline")

If you need to create your own, it needs to follow these rules:

1. The class must implement [PasswordHasherInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/PasswordHasher/PasswordHasherInterface.php "Symfony\Component\PasswordHasher\PasswordHasherInterface")
   (you can also implement [LegacyPasswordHasherInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/PasswordHasher/LegacyPasswordHasherInterface.php "Symfony\Component\PasswordHasher\LegacyPasswordHasherInterface") if your hash algorithm uses a separate salt);
2. The implementations of
   [hash()](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/PasswordHasher/PasswordHasherInterface.php#:~:text=function%20hash "Symfony\Component\PasswordHasher\PasswordHasherInterface::hash()")
   and [verify()](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/PasswordHasher/PasswordHasherInterface.php#:~:text=function%20verify "Symfony\Component\PasswordHasher\PasswordHasherInterface::verify()")
   **must validate that the password length is no longer than 4096
   characters.** This is for security reasons (see [CVE-2013-5750](https://symfony.com/blog/cve-2013-5750-security-issue-in-fosuserbundle-login-form)).

   You can use the [isPasswordTooLong()](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/PasswordHasher/Hasher/CheckPasswordLengthTrait.php#:~:text=function%20isPasswordTooLong "Symfony\Component\PasswordHasher\Hasher\CheckPasswordLengthTrait::isPasswordTooLong()")
   method for this check.

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
```

```
// src/Security/Hasher/CustomVerySecureHasher.php
namespace App\Security\Hasher;

use Symfony\Component\PasswordHasher\Exception\InvalidPasswordException;
use Symfony\Component\PasswordHasher\Hasher\CheckPasswordLengthTrait;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;

class CustomVerySecureHasher implements PasswordHasherInterface
{
    use CheckPasswordLengthTrait;

    public function hash(string $plainPassword): string
    {
        if ($this->isPasswordTooLong($plainPassword)) {
            throw new InvalidPasswordException();
        }

        // ... hash the plain password in a secure way

        return $hashedPassword;
    }

    public function verify(string $hashedPassword, string $plainPassword): bool
    {
        if ('' === $plainPassword || $this->isPasswordTooLong($plainPassword)) {
            return false;
        }

        // ... validate if the password equals the user's password in a secure way

        return $passwordIsValid;
    }

    public function needsRehash(string $hashedPassword): bool
    {
        // Check if a password hash would benefit from rehashing
        return $needsRehash;
    }
}
```

Now, define a password hasher using the `id` setting:

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
            # the service ID of your custom hasher (the FQCN using the default services.yaml)
            id: 'App\Security\Hasher\MyCustomPasswordHasher'
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

use App\Security\Hasher\MyCustomPasswordHasher;

return App::config([
    'security' => [
        // ...
        'password_hashers' => [
            'App\Entity\User' => [
                // the service ID of your custom hasher (the FQCN using the default services.yaml)
                'id' => MyCustomPasswordHasher::class,
            ],
        ],
    ],
]);
```

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
