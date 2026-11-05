# Application Configuration | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/config/app

---

# Application Configuration

- ### On this Page

  - [Approach](docs_5x__reference__config__app.md#approach)
  - [Common Components](docs_5x__reference__config__app.md#common-components)
  - [Modules](docs_5x__reference__config__app.md#modules)
  - [Requests + Responses](docs_5x__reference__config__app.md#requests-responses)

Craft’s entire [application configuration  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-applications#application-configurations) can be customized via `config/app.php`. Any items returned by an `app.php` config file will get merged into the main application configuration array.

You can further customize the application configuration for only web requests or console requests from `config/app.web.php` and `config/app.console.php`, respectively.

New [Craft projects  (opens new window)](https://github.com/craftcms/craft) include a stub of `app.php` that exists solely to set an app ID, which affects how caches and sessions are stored. Most applications will *not* require additional application config.

## [#](#approach)Approach

What follows differs in nature from other configuration you’ve likely encountered, so far: [general](docs_5x__reference__config__general.md) and [database](docs_5x__reference__config__db.md) config is handled via curated, publicly-documented settings that Craft pulls from to adjust its bootstrapping or runtime behavior. Application config, on the other hand, directly modifies [components  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-application-components) of the Craft application—either by customizing them in-place, or swapping them out with new ones.

Of course, this power comes with a greater risk of misconfiguration. Some components may also require a bit of independent research to discover available options; [configuring a component  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-configurations) is in most cases simply defining properties the class initializes with, so some degree of comfort with source-diving and class reference will go a long way.

Keep in mind that even when Craft doesn’t provide “defaults” explicitly in its own `app.php` config files (or config helper methods), the underlying component classes may have default property values—or even compute defaults based on other values.

You may place configuration directly in `config/app.php`, or use `config/app.web.php` or `config/app.console.php` to apply it specifically to one app context. Defining options in the global space may cause errors for components that Craft itself only uses in one context or the other!

### [#](#static)Static

Most components’ config can be provided as a plain array, which gets merged with the default config map prior to initialization. This style is mostly used for customizing individual properties on a component:

```
<?php
return [
    // ...
    'components' => [
        // Customize one property on an existing component:
        'deprecator' => [
            'throwExceptions' => App::env('HARD_MODE') ?: false,
        ],
    ],
];
```

### [#](#closures)Closures

Craft uses functions to dynamically define some components—see [`app.php`  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/config/app.php) and its `app.web.php` and `app.console.php` counterparts for a complete list in each context.

Components defined in this way should only be overridden with another function. The process will almost always look something like this:

1. Call the same helper method that Craft uses internally to build the base config object
2. Assign or reassign properties on it
3. Pass it to `Craft::createObject()` to initialize the component

If your intent is to completely replace a component, you can opt out of this pattern and define a config map from scratch. This may be necessary when properties coming from the helper method are incompatible with the new component—such is the case with alternate [cache drivers](#cache):

```
<?php
return [
    // ...
    'components' => [
        // Adjust parts of a component based on the environment:
        'db' => function() {
            $config = craft\helpers\App::dbConfig();

            if (App::env('HIGH_AVAILABILITY')) {
                $config['replicaConfig'] = [
                    // ... Base replica DB configuration
                ];

                $config['replicas'] = [
                    // ... unique config for each replica, like hosts or DSNs.
                ];
            }

            return Craft::createObject($config);
        },

        // Completely re-define a component without letting defaults leak in:
        'cache' => function() {
            $config = [
                'class' => yii\redis\Cache::class,
                'redis' => [
                    'class' => yii\redis\Connection::class,
                    // ... Redis connection configuration
                ],
            ];

            return Craft::createObject($config);
        },
    ],
];
```

## [#](#common-components)Common Components

We’ll only cover a few commonly-customized components here. Refer to Craft’s own [src/config/app.php  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/config/app.php), [app.web.php  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/config/app.web.php) and [app.console.php  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/config/app.console.php) when determining what components are initialized for each type of request—for example, Craft uses two different `request` component classes ([craft\web\Request  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-request.html) and [craft\console\Request  (opens new window)](https://docs.craftcms.com/api/v5/craft-console-request.html)) to help smooth over some differences in Yii’s HTTP and CLI APIs.

### [#](#cache)Cache

By default, Craft will store data caches on disk in the `storage/runtime/cache/` folder. You can configure Craft to use alternative [cache storage  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/caching-data#supported-cache-storage) layer by overriding the `cache` application component from `config/app.php`.

To help avoid key collisions when sharing non-standard cache drivers between multiple applications, set a unique application `id`. See the [Craft starter project  (opens new window)](https://github.com/craftcms/craft/blob/5.x/config/app.php#L26) for an example of how this is configured, then run the following command to generate and append a `CRAFT_APP_ID` value to your `.env` file:

```
php craft setup/app-id
```

#### [#](#database-example)Database Example

To store data caches in the database, create a `cache` table as specified by [yii\caching\DbCache::$cacheTable  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-caching-dbcache#$cacheTable-detail). Craft provides a console command for convenience, which will honor your [`tablePrefix`](docs_5x__reference__config__db.md#tableprefix) setting:

```
php craft setup/db-cache-table
```

Once that’s done, you can set your `cache` application component to use [craft\cache\DbCache  (opens new window)](https://docs.craftcms.com/api/v5/craft-cache-dbcache.html).

```
<?php
return [
    'components' => [
        'cache' => function() {
            $config = [
                'class' => craft\cache\DbCache::class,
                'defaultDuration' => Craft::$app->config->general->cacheDuration,
            ];

            return Craft::createObject($config);
        },
    ],
];
```

If you’ve already configured Craft to use [yii\caching\DbCache  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-caching-dbcache) rather than [craft\cache\DbCache  (opens new window)](https://docs.craftcms.com/api/v5/craft-cache-dbcache.html), you can safely switch to the latter if you remove your `cache` table’s `dateCreated`, `dateUpdated`, and `uid` columns.

#### [#](#apc-example)APC Example

```
<?php

use craft\helpers\App;

return [
    'components' => [
        'cache' => function() {
            $config = [
                'class' => yii\caching\ApcCache::class,
                'useApcu' => true,
                'keyPrefix' => Craft::$app->id,
                'defaultDuration' => Craft::$app->config->general->cacheDuration,
            ];

            return Craft::createObject($config);
        }
    ],
];
```

#### [#](#memcached-example)Memcached Example

```
<?php

use craft\helpers\App;

return [
    'components' => [
        'cache' => function() {
            $config = [
                'class' => yii\caching\MemCache::class,
                'useMemcached' => true,
                'username' => App::env('MEMCACHED_USERNAME'),
                'password' => App::env('MEMCACHED_PASSWORD'),
                'defaultDuration' => 86400,
                'servers' => [
                    [
                        'host' => App::env('MEMCACHED_HOST') ?: 'localhost',
                        'persistent' => true,
                        'port' => 11211,
                        'retryInterval' => 15,
                        'status' => true,
                        'timeout' => 15,
                        'weight' => 1,
                    ],
                ],
                'keyPrefix' => Craft::$app->id,
                'defaultDuration' => Craft::$app->config->general->cacheDuration,
            ];

            return Craft::createObject($config);
        },
    ],
];
```

#### [#](#redis-example)Redis Example

To use Redis cache storage, install [yii2-redis  (opens new window)](https://www.yiiframework.com/extension/yiisoft/yii2-redis) and replace your `cache` component with `yii\redis\Cache::class`, providing connection details to its `redis` property:

```
<?php

use craft\helpers\App;

return [
    'components' => [
        'cache' => function() {
            $config = [
                'class' => yii\redis\Cache::class,
                'keyPrefix' => Craft::$app->id,
                'defaultDuration' => Craft::$app->config->general->cacheDuration,

                // Full Redis connection details:
                'redis' => [
                    'class' => yii\redis\Connection::class,
                    'hostname' => App::env('REDIS_HOSTNAME') ?: 'localhost',
                    'port' => 6379,
                    'password' => App::env('REDIS_PASSWORD') ?: null,
                ],
            ];

            return Craft::createObject($config);
        },
    ],
];
```

If you are also using Redis for [session](#session-redis) storage, [mutex](#mutex-redis), or the [queue](#queue), you should [set a unique `database`  (opens new window)](https://www.yiiframework.com/extension/yiisoft/yii2-redis/doc/api/2.0/yii-redis-connection#$database-detail) for each component’s connection to prevent inadvertently flushing important data!

### [#](#database)Database

If you need to configure the database connection beyond what’s possible with Craft’s [database config settings](docs_5x__reference__config__db.md), you can do that by overriding the `db` component.

This example sets up read/write splitting by defining read replicas. The writer will be whatever is configured in `config/db.php`.

```
<?php

use craft\helpers\App;

return [
    'components' => [
        'db' => function() {
            // Get the default component config (using values in `db.php`):
            $config = App::dbConfig();

            // Define the default config for replica connections:
            $config['replicaConfig'] = [
                'username' => App::env('DB_REPLICA_USER'),
                'password' => App::env('DB_REPLICA_PASSWORD'),
                'tablePrefix' => App::env('CRAFT_DB_TABLE_PREFIX'),
                'attributes' => [
                    // Use a smaller connection timeout
                    PDO::ATTR_TIMEOUT => 10,
                ],
                'charset' => 'utf8',
            ];

            // Define the replica connections, with unique DSNs:
            $config['replicas'] = [
                ['dsn' => App::env('DB_REPLICA_DSN_1')],
                ['dsn' => App::env('DB_REPLICA_DSN_2')],
                ['dsn' => App::env('DB_REPLICA_DSN_3')],
                ['dsn' => App::env('DB_REPLICA_DSN_4')],
            ];

            // Instantiate and return the configuration object:
            return Craft::createObject($config);
        },
    ],
];
```

The `db` component is just Craft’s *default* database connection—but your application can connect to *multiple* databases by creating additional components.

For example, if you need to read some data from a legacy database as part of a migration, you could define a `legacydb` component with its own connection settings. Then, any [craft\db\Query  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html) execution methods can be called using the alternate component:

app.phpExample Query

```
use craft\helpers\App;

return [
    'components' => [
        'legacydb' => [
            'server' => App::env('LEGACY_DB_SERVER'),
            // ...
        ],
    ],
];
```

```
use Craft;
use craft\db\Query;

$connection = Craft::$app->get('legacydb');

$legacyPosts = (new Query)
    ->select(['title', 'body', 'post_date'])
    ->from(['posts'])
    ->all($connection);
```

Note that if you need to supply custom PDO attributes to your primary database connection (for example, setting up an SSL connection to your database), you should do so via the `attributes` key in your `config/db.php` file, not from `config/app.php` while overriding the `db` component.

### [#](#log)Log

Check out the [guide on Logging](docs_5x__system__logging.md#customizing-logs) for some detailed examples.

### [#](#session)Session

In a load-balanced environment, you may want to override the default `session` component to store PHP session data in a centralized location.

The `session` component **must** have the [craft\behaviors\SessionBehavior  (opens new window)](https://docs.craftcms.com/api/v5/craft-behaviors-sessionbehavior.html) behavior attached to provide methods that the system relies on. When configuring the component from scratch, you must explicitly include it by setting an `as session` key to `craft\behaviors\SessionBehavior::class`, where `as session` is a [Yii shorthand  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-configurations#configuration-format) for attaching behaviors via a configuration object.

The `session` component should only be overridden from `app.web.php` so it gets defined for web requests, but not console requests.

#### [#](#redis-example-2)Redis Example

To use Redis for session storage, install [yii2-redis  (opens new window)](https://www.yiiframework.com/extension/yiisoft/yii2-redis) and replace your `session` component with `yii\redis\Session::class`, providing connection details to its nested `redis` property:

```
// config/app.web.php
<?php

use craft\helpers\App;

return [
    'components' => [
        'session' => function() {
            // Get the default component config:
            $config = craft\helpers\App::sessionConfig();

            // Replace component class:
            $config['class'] = yii\redis\Session::class;

            // Define additional properties:
            $config['redis'] = [
                'class' => yii\redis\Connection::class,
                'hostname' => App::env('REDIS_HOSTNAME') ?: 'localhost',
                'port' => 6379,
                'password' => App::env('REDIS_PASSWORD') ?: null,
            ];

            // Return the initialized component:
            return Craft::createObject($config);
        }
    ],
];
```

If you are also using Redis for the [cache](#cache-redis), [mutex](#mutex-redis), or the [queue](#queue), you should [set a unique `database`  (opens new window)](https://www.yiiframework.com/extension/yiisoft/yii2-redis/doc/api/2.0/yii-redis-connection#$database-detail) for each component’s connection to prevent inadvertently flushing important data!

#### [#](#database-example-2)Database Example

First, you must create the database table that will store PHP’s sessions. You can do that by running the `craft setup/php-session-table` console command from your project’s root folder.

```
<?php
return [
    'components' => [
        'session' => function() {
            // Get the default component config:
            $config = craft\helpers\App::sessionConfig();

            // Override the class to use DB session class:
            $config['class'] = yii\web\DbSession::class;

            // Set the session table name:
            $config['sessionTable'] = craft\db\Table::PHPSESSIONS;

            // Return the initialized component:
            return Craft::createObject($config);
        },
    ],
];
```

### [#](#mailer)Mailer

To override the `mailer` component config (which is responsible for sending emails), do this in `config/app.php`:

```
<?php

use craft\helpers\App;

return [
    'components' => [
        'mailer' => function() {
            // Get the default component config:
            $config = App::mailerConfig();

            // Use Mailpit in dev mode:
            if (Craft::$app->getConfig()->getGeneral()->devMode) {
                $adapter = craft\helpers\MailerHelper::createTransportAdapter(
                    craft\mail\transportadapters\Smtp::class,
                    [
                        'host' => App::env('MAIL_HOST'),
                        'port' => App::env('MAIL_PORT'),
                    ]
                );

                // Override the transport:
                $config['transport'] = $adapter->defineTransport();
            }

            // Return the initialized component:
            return Craft::createObject($config);
        },
    ],
];
```

Any changes you make to the Mailer component from `config/app.php` will not be reflected when testing [email settings](docs_5x__system__mail.md) from **Settings** → **Email**.

### [#](#queue)Queue

Craft’s [queue](docs_5x__system__queue.md) is powered by the [Yii2 Queue Extension  (opens new window)](https://github.com/yiisoft/yii2-queue). By default, Craft will use a [custom queue driver  (opens new window)](https://docs.craftcms.com/api/v5/craft-queue-queue.html) based on the extension’s [DB driver  (opens new window)](https://github.com/yiisoft/yii2-queue/blob/master/docs/guide/driver-db.md).

Switching to a different driver by overriding Craft’s `queue` component from `config/app.php` will result in a loss of visibility into the queue’s state from the control panel. Instead of replacing the entire component, set your custom queue driver config on [craft\queue\Queue::$proxyQueue  (opens new window)](https://docs.craftcms.com/api/v5/craft-queue-queue.html#property-proxyqueue):

```
<?php
return [
    'components' => [
        'queue' => [
            'proxyQueue' => [
                'class' => yii\queue\redis\Queue::class,
                'redis' => [
                    'class' => yii\redis\Connection::class,
                    'hostname' => App::env('REDIS_HOSTNAME') ?: 'localhost',
                    'port' => 6379,
                    'password' => App::env('REDIS_PASSWORD') ?: null,
                ],
            ],
            'channel' => 'queue', // Queue channel key
        ],
    ],
];
```

Available drivers are listed in the [Yii2 Queue Extension documentation  (opens new window)](https://github.com/yiisoft/yii2-queue/tree/master/docs/guide).

Only drivers that implement [craft\queue\QueueInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-queue-queueinterface.html) will be visible within the control panel.

If your queue driver supplies its own [worker](docs_5x__system__queue.md#workers), set the [runQueueAutomatically](docs_5x__reference__config__general.md#runqueueautomatically) config setting to `false` in `config/general.php`.

For projects that spawn many long-running jobs (as is often the case when synchronizing content from other sources), you may wish to extend the default job `ttr` or *time to reserve*:

```
return [
    'components' => [
        'queue' => [
            // Allow individual jobs to run for 15 minutes:
            'ttr' => 900,
        ],
    ],
];
```

This does not prevent plugins or modules from pushing jobs with a shorter `ttr`, but Craft will respect it for all built-in queue usage.

[Daemonized queue runners](docs_5x__system__queue.md#daemon) should be configured to allow the full `ttr` duration before issuing a `KILL` signal.

### [#](#mutex)Mutex

Craft uses the database for mutex (or “mutually exclusive”) locks, which means it will work natively in [load-balanced environments  (opens new window)](https://craftcms.com/knowledge-base/configuring-load-balanced-environments#mutex-locks).

You can configure a custom mutex driver by overriding the `mutex` component’s nested `$mutex` property:

```
return [
    'components' => [
        'mutex' => function() {
            $generalConfig = Craft::$app->getConfig()->getGeneral();

            $config = [
                'class' => craft\mutex\Mutex::class,
                // Swap out the default database driver:
                'mutex' => [
                    'class' => yii\mutex\FileMutex::class,
                    'fileMode' => $generalConfig->defaultFileMode,
                    'dirMode' => $generalConfig->defaultDirMode,
                ],
            ];

            // Return the initialized component:
            return Craft::createObject($config);
        },
    ],
    // ...
];
```

The specific properties that you can (or must) use in the configuration object will differ based on the specified mutex class—check the driver’s documentation for instructions.

The primary mutex *component* should always be an instance of [craft\mutex\Mutex  (opens new window)](https://docs.craftcms.com/api/v5/craft-mutex-mutex.html).
We only need to replace the driver, using the component’s nested `mutex` property.

#### [#](#redis-example-3)Redis Example

Like the [session](#session), [cache](#cache), and [queue](#queue), the mutex component can take advantage of a Redis connection.

Install the [yii2-redis  (opens new window)](https://www.yiiframework.com/extension/yiisoft/yii2-redis) package and replace your `mutex` component’s nested `mutex` property with `yii\redis\Mutex::class`, along with a complete connection object:

```
<?php

use craft\helpers\App;

return [
    'components' => [
        'mutex' => function() {
            // Build a new configuration object:
            $config = [
                'class' => craft\mutex\Mutex::class,
                'mutex' => [
                    'class' => yii\redis\Mutex::class,
                    'redis' => [
                        'class' => yii\redis\Connection::class,
                        'hostname' => App::env('REDIS_HOSTNAME') ?: 'localhost',
                        'port' => 6379,
                        'password' => App::env('REDIS_PASSWORD') ?: null,
                    ],
                ],
            ];

            // Return the initialized component:
            return Craft::createObject($config);
        }
    ],
];
```

If you are also using Redis for the [cache](#cache-redis), [session](#session-redis) storage, or the [queue](#queue), you should [set a unique `database`  (opens new window)](https://www.yiiframework.com/extension/yiisoft/yii2-redis/doc/api/2.0/yii-redis-connection#$database-detail) for each component’s connection to prevent inadvertently flushing important data!

## [#](#modules)Modules

You can register and bootstrap custom Yii modules into the application from `config/app.php` as well. See [How to Build a Module](docs_5x__extend__module-guide.md) for more info.

An empty Module is included in every starter project, and can be activated by adding its ID to the `bootstrap` key of `app.php`:

```
return [
    // ...
    'modules' => [
        'my-module' => \modules\Module::class,
    ],
    'bootstrap' => ['my-module'],
];
```

Using the generator to scaffold a module will attempt to insert this configuration into `app.php` for you.
If it can’t, instructions for modifying it manually are output to the console.

## [#](#requests-responses)Requests + Responses [5.3.0+](https://github.com/craftcms/cms/blob/5.3.0/CHANGELOG.md "CORS and headers filters was first available in version 5.3.0 of Craft.")

To set arbitrary headers on every site response, attach [craft\filters\Headers  (opens new window)](https://docs.craftcms.com/api/v5/craft-filters-headers.html) to the root *web* application, in `config/app.web.php`:

```
return [
    // Attach the headers filter to the application:
    'as headersFilter' => [
        'class' => \craft\filters\Headers::class,
        'site' => ['siteA', 'siteB'],
        'headers' => [
            // Define pairs of headers:
            'Permissions-Policy' => 'interest-cohort=()',
            'X-Foo' => 'Bar',
        ],
    ],
];
```

### [#](#cors)CORS

We also provide a [CORS  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS)-specific filter ([craft\filters\Cors  (opens new window)](https://docs.craftcms.com/api/v5/craft-filters-cors.html)) to manage server-side policies on a per-action basis:

```
return [
    // Attach the CORS filter to the application:
    'as corsFilter' => [
        'class' => \craft\filters\Cors::class,

        // Scope to specific sites (optional):
        'site' => ['siteA', 'siteB'],

        // CORS defaults for all non-CP requests:
        'cors' => [
            'Origin' => [
                'https://my-project.ddev.site',
                'https://es.my-project.ddev.site',
            ],
            'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
            'Access-Control-Request-Headers' => ['*'],
            'Access-Control-Allow-Credentials' => true,
            'Access-Control-Max-Age' => 86400,
            'Access-Control-Expose-Headers' => [],
        ],

        // Controller/action-specific overrides (optional):
        'actions' => [
            'graphql/api' => [
                'Origin' => ['*'],
                'Access-Control-Allow-Credentials' => false,
            ],
        ],
    ],
];
```

With [Dev Mode  (opens new window)](https://craftcms.com/knowledge-base/what-dev-mode-does) on, some potentially dangerous CORS misconfigurations will trigger exceptions.

Headers in action-specific overrides are *not* merged with global headers—they are only applied if the header was already set, globally!

### [#](#basic-authentication)Basic Authentication [5.5.0+](https://github.com/craftcms/cms/blob/5.5.0/CHANGELOG.md "Basic HTTP authentication was first available in version 5.5.0 of Craft.")

While typically handled at the server level, Craft provides a couple of enhancements to basic [HTTP authentication  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/HTTP/Authentication) that give you greater flexibility and control over who can see your site. This functionality is intended to replace the deprecated [enableBasicHttpAuth](docs_5x__reference__config__general.md#enablebasichttpauth) setting, and only affects *site* requests—not control panel requests.

Two [filters  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-filters) provide a neat management layer for HTTP authorization challenges:

- **[craft\filters\BasicHttpAuthLogin  (opens new window)](https://docs.craftcms.com/api/v5/craft-filters-basichttpauthlogin.html)** — Use existing Craft user accounts to authorize access to one or more sites. Upon authorization, the client is automatically logged in to Craft, as well.
- **[craft\filters\BasicHttpAuthStatic  (opens new window)](https://docs.craftcms.com/api/v5/craft-filters-basichttpauthstatic.html)** — Authorize with a single username and password, determined by the filter’s configuration. The client is not implicitly connected to a Craft user.

Only one filter should be configured at a time, and it must be in the web-specific application config file, `config/app.web.php` (not `config/app.php`).

If you are looking to protect some content behind front-end login, consider using the [`{% requireLogin %}`](docs_5x__reference__twig__tags.md#requirelogin) or [`{% requirePermission %}`](docs_5x__reference__twig__tags.md#requirepermission) tags in your templates.

#### [#](#common-features)Common Features

Like the specialized [header filters](#requests-responses) above, both authentication methods have a number of ways to target specific circumstances:

```
use Craft;
use craft\filters\BasicHttpAuthLogin;

return [
    'as requireBasicLogin' => [
        'class' => BasicHttpAuthLogin::class,

        // Test against arbitrary criteria (akin to validators):
        'when' => fn() => Craft::$app->env !== 'production',

        // Only apply to specific sites:
        'site' => ['secretSite'],

        // Make optional for some actions:
        'optional' => ['queue/run'],
    ],
];
```

When the filter determines that a request requires authorization and credentials weren’t already supplied, it will issue a challenge “response.” This means that (in most clients) you can construct a URL like `https://username:password@my-project.ddev.site`, or send the `Authorization` header in the initial request to immediately begin an authenticated session.

You may need to close or quit your browser to force it to “forget” valid or invalid credentials.

#### [#](#authorizing-with-user-accounts)Authorizing with User Accounts

Authorizing against Craft user accounts gives you a way to simultaneously protect your front-end from prying eyes, and automatically log in users in a standards-compliant way.

```
use craft\filters\BasicHttpAuthLogin;

return [
    'as requireBasicLogin' => BasicHttpAuthLogin::class,
];
```

This is an inherently less secure means of logging in:

- Two-step verification is skipped, for control panel users;
- Credentials *may* be sent in clear text, if the client does not explicitly use HTTPs, or the server is not configured to automatically redirect to a secure protocol;
- A user may be logged in without CSRF validation;
- Failed login attempts are not counted toward [maxInvalidLogins](docs_5x__reference__config__general.md#maxinvalidlogins) or [cooldownDuration](docs_5x__reference__config__general.md#cooldownduration);

Only enable it in situations you are able to accept these risks—ideally, scoped to specific noncritical actions or environments.

POST requests will typically still use CSRF protection.

#### [#](#authorizing-with-static-credentials)Authorizing with Static Credentials

Static authentication requires a `username` and `password` be set in the filter’s configuration, as it is not implicitly connected to Craft users. Unlike [Apache  (opens new window)](https://httpd.apache.org/docs/2.4/howto/auth.html) and [nginx  (opens new window)](https://docs.nginx.com/nginx/admin-guide/security-controls/configuring-http-basic-authentication/) (or `BasicHttpAuthLogin`, above), this authorization method does *not* permit multiple sets of credentials.

```
use craft\filters\BasicHttpAuthStatic;

return [
    'as basicStaticWithConfig' => [
        'class' => BasicHttpAuthStatic::class,
        'username' => 'foo',
        'password' => 'secret',
    ],
];
```

All clients use the same username and password—any relationship between these values and “real” users should be considered coincidental.

If a credentials are not provided explicitly, Craft will use values from the `CRAFT_HTTP_BASIC_AUTH_USERNAME` and `CRAFT_HTTP_BASIC_AUTH_PASSWORD` environment variables. You can also retrieve them from another variable using [craft\helpers\App::env()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-app.html#method-env). If one or the other is absent after looking for fallbacks, Craft throws an [yii\base\InvalidConfigException  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-invalidconfigexception).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/config/app.md)
