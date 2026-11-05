# Redis | HumHub Documentation

> **Fonte / Source:** https://docs.humhub.org/docs/admin/redis

---

On this page

We recommend installing an additional Redis server which can act as a caching, push service and job queuing service for HumHub.

## Basic Configuration[â](#basic-configuration "Direct link to Basic Configuration")

To enable Redis, you have to add following block to your local configuration file (protected/config/common.php):

```
// ...

'components' => [

// ...

'redis' => [

'class' => 'yii\redis\Connection',

'hostname' => 'localhost',

'port' => 6379,

'database' => 0,

],

// ...

],

// ...
```

## Caching[â](#caching "Direct link to Caching")

To use Redis as cache, the following block must be added to the configuration file (protected/config/common.php).

```
// ...

'components' => [

// ...

'cache' => [

'class' => 'yii\redis\Cache',

],

// ...

],

// ...
```

## Background Job Queue[â](#background-job-queue "Direct link to Background Job Queue")

Besides acting as a cache, Redis can also be used to manage the queue of background tasks.

To enable this feature you need to add following block to your local configuration file (protected/config/common.php):

```
// ...

'components' => [

// ...

'queue' => [

'class' => 'humhub\modules\queue\driver\Redis',

],

// ...

],

// ...
```

## Push Updates[â](#push-updates "Direct link to Push Updates")

TBD
