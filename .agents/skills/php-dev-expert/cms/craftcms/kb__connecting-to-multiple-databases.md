# Connecting to Multiple Databases | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/connecting-to-multiple-databases

---

Search Knowledge Base

# Connecting to Multiple Databases

Craft typically reads and writes data to and from a single database. In some situations, though, it may be necessary to connect to one or more additional databases:

- Importing content from a legacy system without a public API;
- Cross-referencing or validating data in external systems;
- Storing data in proprietary or optimized formats, outside of Craft’s schema;
- Using features of other [PDO drivers](https://www.php.net/manual/en/pdo.drivers.php) that Craft doesn’t support as the primary connection;
- [Replication](#replication), read-write splitting, [caching](#cache-etc), and other performance reasons;

## Configuration [#](#configuration "Direct link to Configuration")

Craft’s [database configuration](https://craftcms.com/docs/5.x/reference/config/db.html) is a developer-friendly layer that translates a variety of configuration schemes into an instance of `craft\db\Connection`, which is mounted to the application as the `db` component. *You do not need to change how you establish Craft’s primary database connection.*

Additional database components, however, must be defined directly via `app.php`:

```
use craft\helpers\App;
use craft\db\Connection;

return [
    'components' => [
        'altDb' => [
            'class' => Connection::class,
            'dsn' => App::env('ALT_DB_DSN'),
            'username' => App::env('ALT_DB_USERNAME'),
            'password' => App::env('ALT_DB_PASSWORD'),
        ],
    ],
];
```

Your database’s `dsn` is typically in this format, but it may differ slightly based on the PDO adapter (designated by the leading `mysql:`):

```
mysql:host=localhost;port=3307;dbname=testdb
```

The `username` and `password` must be explicitly set in the config array. If your platform or provider uses database “URLs,” you can use `craft\helpers\Db::url2config($url)` helper to convert it to a compatible array:

```
use craft\helpers\App;
use craft\helpers\Db;
use craft\db\Connection;

return [
    'components' => [
        'altDb' => array_merge(
            Db::url2config(App::env('ALT_DB_URL')),
            [
                'class' => Connection::class,
            ]
        ),
    ],
];
```

![](https://craftcms.com/dist/images/icon-tip.svg)

See the [`craft\db\Connection`](https://docs.craftcms.com/api/v5/craft-db-connection.html) class reference for a complete list of properties you can set via the configuration array, including common ones like `driverName` and `tablePrefix`.

## Querying [#](#querying "Direct link to Querying")

You will continue to construct queries in a driver-agnostic way…

```
$licensesQuery = (new craft\db\Query())
    ->from(['{{%licenses}}'])
    ->select(['license_key', 'email', 'expires_at']);
```

…but build and execute them against a specific connection:

```
$altConnection = Craft::$app->get('altDb');

$licenses = $licensesQuery->all($altConnection);
```

If you don’t provide a specific connection when calling a query execution method, Craft uses the default `db` component.

## Replication [#](#replication "Direct link to Replication")

A single connection component can split reads and writes to different databases, distribute query load between many replicas, and fail-over to healthy ones in the event of issues.

Keep in mind that Craft itself does *not* attempt to keep replicas consistent! This is the responsibility of your infrastructure.

```
use craft\helpers\App;

return [
    'components' => [
        'db' => function() {
            // Get the default connection config (using values from `db.php`):
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

Like any other [additional connection](#configuration), each configuration array in `replicas` must be compatible with `craft\db\Connection`, not `craft\config\DbConfig`. Craft merges the `replicaConfig` with each item in `replicas` before attempting a connection, so common values can be held centrally.

The nature of each query determines whether Craft uses the primary server or a replica. *Read* queries use one of the replicas…

```
(new craft\db\Query)
    ->from(['{{%myplugin_views}}'])
    ->select(['views'])
    ->where(['uri' => $uri])
    ->scalar();
```

…and *write* queries are executed against the primary connection:

```
craft\helpers\Db::upsert(
    '{{%myplugin_views}}',
    [
        'uri' => 'some/page',
        'views' => 0,
    ], [
        'views' => new craft\db\Expression('views + 1'),
    ]
);
```

This example is modifying the primary database connection for redundancy—but you can take advantage of read-write splitting and replication from your additional databases, too!

![](https://craftcms.com/dist/images/icon-tip.svg)

You can force any query (or a series of queries) to use the primary database by executing them within a callback:

```
$views = Craft::$app->getDb()->usePrimary(function() use ($uri) {
    return (new craft\db\Query)
        ->from(['{{%myplugin_views}}'])
        ->select(['views'])
        ->where(['uri' => $uri])
        ->scalar();
});
```

## Cache, etc. [#](#cache-etc "Direct link to Cache, etc.")

Other system components use the primary database connection to store data, by default. In some cases, you can change which connection those components use:

```
use craft\cache\DbCache;
use craft\helpers\App;

return [
    'components' => [
        'altDb' => [
            // ...
        ],
        'cache' => function() {
            $config = App::cacheConfig();

            // Switch to the database cache driver:
            $config['class'] = DbCache::class;

            // Use the secondary database for caches:
            $config['db'] = 'altDb';

            return Craft::createObject($config);
        },
    ],
];
```

If this is the only place you’re using the additional database, `$config['db']` can be set to a complete connection configuration array instead of a component ID. Note that the default `cache` component config uses `craft\cache\FileCache`; switching to `craft\cache\DbCache` alone will use the primary connection’s `cache` table. Using a secondary connection for the cache will require that you create the `cache` table using the schema outlined in `craft\migrations\CreateDbCacheTable`.

## Limitations [#](#limitations "Direct link to Limitations")

Here are some things to be aware of when connecting to additional databases.

- You cannot use `JOIN`s, subqueries, or fully-isolated transactions across connections. You *can* write to multiple databases while a transaction is open in one of them, though.
- Features that require foreign keys to Craft records (like sessions) will not work in non-primary databases, or you may need to implement [garbage collection](https://craftcms.com/docs/5.x/system/gc.html) to clean up stray rows.
- Failures in multiple replicas can result in long waits for users—consider reducing the `PDO::ATTR_TIMEOUT` so that Craft can fail-over more quickly.
- Writes to the primary database may not be immediately or consistently available across read-only replicas. If you need to re-fetch a record (say, to retrieve an incremented column), consider [locking the query to the primary database](https://docs.craftcms.com/api/v5/craft-db-primaryreplicatrait.html#method-useprimary).
- A single replica is selected randomly. Beyond a crude health check, there is no way to customize this “balancing” logic.

Applies to
Craft CMS 5, Craft CMS 4, and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
