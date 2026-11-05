# User Providers (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/security/user_providers.html

---

# User Providers

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/security/user_providers.rst)

User providers (re)load users from a storage (e.g. a database) based on a
"user identifier" (e.g. the user's email address or username). See
[Security](current__security.md#security-user-providers) for more detailed information when a user
provider is used.

Symfony provides several user providers:

[Entity User Provider](current__security__user_providers.md#security-entity-user-provider)
:   Loads users from a database using [Doctrine](current__doctrine.md);

[LDAP User Provider](current__security__ldap.md#security-ldap-user-provider)
:   Loads users from an LDAP server;

[Memory User Provider](current__security__user_providers.md#security-memory-user-provider)
:   Loads users from a configuration file;

[Chain User Provider](current__security__user_providers.md#security-chain-user-provider)
:   Merges two or more user providers into a new user provider.
    Since each firewall has exactly *one* user provider, you can use this
    to chain multiple providers together.

## [Entity User Provider](#entity-user-provider "Permalink to this headline")

This is the most common user provider. Users are stored in a database and
the user provider uses [Doctrine](current__doctrine.md) to retrieve them.

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
    providers:
        users:
            entity:
                # the class of the entity that represents users
                class: 'App\Entity\User'
                # the property to query by - e.g. email, username, etc
                property: 'email'

                # optional: if you're using multiple Doctrine entity
                # managers, this option defines which one to use
                #manager_name: 'customer'

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
20
21
22
23
24
25
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Entity\User;

return App::config([
    'security' => [
        // ...

        'providers' => [
            'users' => [
                'entity' => [
                    // the class of the entity that represents users
                    'class' => User::class,
                    // the property to query by - e.g. email, username, etc
                    'property' => 'email',

                    // optional: if you're using multiple Doctrine entity
                    // managers, this option defines which one to use
                    // 'manager_name' => 'customer',
                ],
            ],
        ],
    ],
]);
```

### [Using a Custom Query to Load the User](#using-a-custom-query-to-load-the-user "Permalink to this headline")

The entity provider can only query from one *specific* field, specified by
the `property` config key. If you want a bit more control over this - e.g. you
want to find a user by `email` *or* `username`, you can do that by
implementing [UserLoaderInterface](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Bridge/Doctrine/Security/User/UserLoaderInterface.php "Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface")
in your [Doctrine repository](current__doctrine.md#doctrine-queries) (e.g. `UserRepository`):

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
// src/Repository/UserRepository.php
namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;

class UserRepository extends ServiceEntityRepository implements UserLoaderInterface
{
    // ...

    public function loadUserByIdentifier(string $usernameOrEmail): ?User
    {
        $entityManager = $this->getEntityManager();

        return $entityManager->createQuery(
                'SELECT u
                FROM App\Entity\User u
                WHERE u.username = :query
                OR u.email = :query'
            )
            ->setParameter('query', $usernameOrEmail)
            ->getOneOrNullResult();
    }
}
```

To finish this, remove the `property` key from the user provider in
`security.yaml`:

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
    providers:
        users:
            entity:
                class: App\Entity\User

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
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Entity\User;

return App::config([
    'security' => [
        // ...

        'providers' => [
            'users' => [
                'entity' => [
                    'class' => User::class,
                ],
            ],
        ],
    ],
]);
```

Now, whenever Symfony uses the user provider, the `loadUserByIdentifier()`
method on your `UserRepository` will be called.

## [Memory User Provider](#memory-user-provider "Permalink to this headline")

It's not recommended to use this provider in real applications because of its
limitations and how difficult it is to manage users. It may be useful in application
prototypes and for limited applications that don't store users in databases.

This user provider stores all user information in a configuration file,
including their passwords. Make sure the passwords are hashed properly. See
[Password Hashing and Verification](current__security__passwords.md) for more information.

After setting up hashing, you can configure all the user information in
`security.yaml`:

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
```

```
# config/packages/security.yaml
security:
    providers:
        backend_users:
            memory:
                users:
                    john_admin: { password: '$2y$13$jxGxc ... IuqDju', roles: ['ROLE_ADMIN'] }
                    jane_admin: { password: '$2y$13$PFi1I ... rGwXCZ', roles: ['ROLE_ADMIN', 'ROLE_SUPER_ADMIN'] }

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

use App\Entity\User;

return App::config([
    'security' => [
        'providers' => [
            'backend_users' => [
                'memory' => [
                    'users' => [
                        'john_admin' => ['password' => '$2y$13$jxGxc ... IuqDju', 'roles' => ['ROLE_ADMIN']],
                        'jane_admin' => ['password' => '$2y$13$PFi1I ... rGwXCZ', 'roles' => ['ROLE_ADMIN', 'ROLE_SUPER_ADMIN']],
                    ],
                ],
            ],
        ],
    ],
]);
```

Warning

When using a `memory` provider, and not the `auto` algorithm, you have
to choose an encoding without salt (i.e. `bcrypt`).

## [Chain User Provider](#chain-user-provider "Permalink to this headline")

This user provider combines two or more of the other providers
to create a new user provider. The order in which
providers are configured is important because Symfony will look for users
starting from the first provider and will keep searching the other
providers until the user is found:

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
16
17
18
19
```

```
# config/packages/security.yaml
security:
    # ...
    providers:
        backend_users:
            ldap:
                # ...

        legacy_users:
            entity:
                # ...

        users:
            entity:
                # ...

        all_users:
            chain:
                providers: ['legacy_users', 'users', 'backend_users']
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
25
26
27
28
29
30
```

```
// config/packages/security.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'security' => [
        // ...
        'providers' => [
            'backend_users' => [
                'ldap' => [
                    // ...
                ],
            ],
            'legacy_users' => [
                'entity' => [
                    // ...
                ],
            ],
            'users' => [
                'entity' => [
                    // ...
                ],
            ],
            'all_users' => [
                'chain' => [
                    'providers' => ['legacy_users', 'users', 'backend_users'],
                ],
            ],
        ],
    ],
]);
```

## [Creating a Custom User Provider](#creating-a-custom-user-provider "Permalink to this headline")

Most applications don't need to create a custom provider. If you store users in
a database, an LDAP server or a configuration file, Symfony supports that.
However, if you're loading users from a custom location (e.g. via an API or
legacy database connection), you'll need to create a custom user provider.

First, make sure you've followed the [Security Guide](current__security.md) to create
your `User` class.

If you used the `make:user` command to create your `User` class (and you
answered the questions indicating that you need a custom user provider), that
command will generate a nice skeleton to get you started:

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
63
64
65
66
67
```

```
// src/Security/UserProvider.php
namespace App\Security;

use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UserProvider implements UserProviderInterface, PasswordUpgraderInterface
{
    /**
     * Symfony calls this method if you use features like switch_user
     * or remember_me. If you're not using these features, you do not
     * need to implement this method.
     *
     * @throws UserNotFoundException if the user is not found
     */
    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        // Load a User object from your data source or throw UserNotFoundException.
        // The $identifier argument is whatever value is being returned by the
        // getUserIdentifier() method in your User class.
        throw new \Exception('TODO: fill in loadUserByIdentifier() inside '.__FILE__);
    }

    /**
     * Refreshes the user after being reloaded from the session.
     *
     * When a user is logged in, at the beginning of each request, the
     * User object is loaded from the session and then this method is
     * called. Your job is to make sure the user's data is still fresh by,
     * for example, re-querying for fresh User data.
     *
     * If your firewall is "stateless: true" (for a pure API), this
     * method is not called.
     */
    public function refreshUser(UserInterface $user): UserInterface
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Invalid user class "%s".', $user::class));
        }

        // Return a User object after making sure its data is "fresh".
        // Or throw a UserNotFoundException if the user no longer exists.
        throw new \Exception('TODO: fill in refreshUser() inside '.__FILE__);
    }

    /**
     * Tells Symfony to use this provider for this User class.
     */
    public function supportsClass(string $class): bool
    {
        return User::class === $class || is_subclass_of($class, User::class);
    }

    /**
     * Upgrades the hashed password of a user, typically for using a better hash algorithm.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        // TODO: when hashed passwords are in use, this method should:
        // 1. persist the new password in the user storage
        // 2. update the $user object with $user->setPassword($newHashedPassword);
    }
}
```

Most of the work is already done! Read the comments in the code and update the
TODO sections to finish the user provider. When you're done, tell Symfony about
the user provider by adding it in `security.yaml`:

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
    providers:
        # the name of your user provider can be anything
        your_custom_user_provider:
            id: App\Security\UserProvider
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

use App\Security\UserProvider;

return App::config([
    'security' => [
        // ...
        'providers' => [
            // the name of your user provider can be anything
            'your_custom_user_provider' => [
                'id' => UserProvider::class,
            ],
        ],
    ],
]);
```

Lastly, update the `config/packages/security.yaml` file to set the
`provider` key to `your_custom_user_provider` in all the firewalls which
will use this custom user provider.

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
