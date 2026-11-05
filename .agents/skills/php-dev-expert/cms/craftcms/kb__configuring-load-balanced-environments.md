# Configuring Craft for Load-Balanced Environments | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/configuring-load-balanced-environments

---

Search Knowledge Base

# Configuring Craft for Load-Balanced Environments

Web servers with finite resources can become overwhelmed by bursts of unexpected traffic—or simply by steady growth of an audience! One way to mitigate the risk of downtime is by scaling the server’s resources *vertically* by provisioning it with more CPU cores, RAM, and disk space; alternatively, you can scale your infrastructure *horizontally* by distributing the traffic across multiple servers.

This strategy is often called *load balancing*. Craft can be configured to take advantage of a variety of distributed “topologies” to meet the needs of your users.

![](https://craftcms.com/dist/images/icon-loading.png)

![Load Balanced Diagram]()

## Approach [#](#approach "Direct link to Approach")

The rest of this article will discuss centralizing resources for a few essential system components, including [sessions](#php-sessions), [mutex](#mutex), [caches](#caching), the [database](#database), and [logs](#logging). This differs from a traditional single-tenant VPS or shared hosting environment, wherein all your services, files, and processing happens on the same physical (or virtual) machine.

Platforms like [Heroku](https://heroku.com) and the [App Platform](https://digitalocean.com) from Digital Ocean separate these responsibilities, and make them individually scalable. In doing so, some long-standing assumptions about how they work together are upended.

![](https://craftcms.com/dist/images/icon-tip.svg)

Curious about distributed computing? Check out [Craft Cloud](https://craftcms.com/cloud)!

## PHP Sessions [#](#php-sessions "Direct link to PHP Sessions")

PHP sessions are [file-based](https://www.php.net/manual/en/session.examples.basic.php) by default. Using a load balancer means one visitor may communicate with multiple servers and have a unique session for each one, leading to an unstable experience.

One symptom of PHP sessions not being [configured correctly](https://craftcms.stackexchange.com/questions/952/craft-constantly-logging-out-from-admin-area) is experiencing constant, unexpected logouts from the Craft control panel.

There are several ways of handling this.

### 1. Save Sessions to a Memory Key-Value Store [#](#1-save-sessions-to-a-memory-key-value-store "Direct link to 1. Save Sessions to a Memory Key-Value Store")

We recommend configuring PHP and Craft to store PHP sessions in an in-memory key-value store, [like Redis](https://craftcms.com/docs/5.x/reference/config/app.html#redis-example-2). This option is the most performant and scalable of the solutions.

### 2. Save Sessions to the Database [#](#2-save-sessions-to-the-database "Direct link to 2. Save Sessions to the Database")

PHP and Craft can also be configured to store session information in the [database](https://craftcms.com/docs/5.x/reference/config/app.html#database-example-2).

### 3. Configure Session Affinity on the Load Balancer [#](#3-configure-session-affinity-on-the-load-balancer "Direct link to 3. Configure Session Affinity on the Load Balancer")

If you have control over your load balancer, one solution is to configure the load balancer’s session affinity, sometimes called “sticky sessions.” Doing this will ensure a user is always sent back to the same server their PHP session started on.

### 4. Save Sessions to Shared Storage [#](#4-save-sessions-to-shared-storage "Direct link to 4. Save Sessions to Shared Storage")

Another solution is to save your sessions to shared, persistent storage. Point `php.ini`’s [`session.save_path`](https://www.php.net/manual/en/session.configuration.php#ini.session.save-path) to a shared folder all the web servers can access, such as an NFS mount.

![](https://craftcms.com/dist/images/icon-warning.svg)

Modifying `sessions.save_path` will stop PHP’s garbage collection from running automatically. It’s up to you to clean up session files via some other mechanism like a cron job.

## Mutex Locks [#](#mutex-locks "Direct link to Mutex Locks")

Mutex or *mutually exclusive* locks are essential to maintain the integrity of your content—especially when you have multiple control panel users working simultaneously, or need to guarantee that certain actions are performed only once (like applying migrations and project config changes).

![](https://craftcms.com/dist/images/icon-tip.svg)

As of [Craft 4.6.0](https://github.com/craftcms/cms/releases/tag/4.6.0), the mutex component uses the database to acquire locks, so there is no additional configuration required for load-balanced environments.

Yii includes mutex drivers for MySQL and PostgreSQL databases (which Craft uses by default), but `FileMutex` and `NullMutex` drivers are not suitable for use in load-balanced environments!

## Assets [#](#assets "Direct link to Assets")

Like PHP sessions, you’ll want uploaded files like images and PDFs to be available to all your web servers.

You can handle this with a shared filesystem like an NFS mount, or with a Craft-native (and platform-independent) solution! Asset volumes (or rather, [filesystems](https://craftcms.com/docs/5.x/reference/element-types/assets.html#filesystems)) can be set up to use a cloud-based storage service, with plugins for:

- [Amazon S3](https://plugins.craftcms.com/aws-s3)
- [Google Cloud Storage](https://plugins.craftcms.com/google-cloud)
- [DigitalOcean Spaces](https://plugins.craftcms.com/dospaces)
- [Azure Blob Storage](https://plugins.craftcms.com/azure-blob-remote-volume)
- [Linode Object Storage](https://plugins.craftcms.com/linode-s3)

![](https://craftcms.com/dist/images/icon-tip.svg)

You can put a third-party CDN like [Fastly](https://www.fastly.com/) or [Cloudflare](https://cloudflare.com) in front of any remote asset filesystem, but some plugins provide their own built-in integrations. For example, our [Amazon S3](https://plugins.craftcms.com/aws-s3) plugin includes an option to rewrite URLs via [Cloudfront](https://aws.amazon.com/cloudfront/).

## Caching [#](#caching "Direct link to Caching")

Craft’s general-purpose data caches are stored in the file system by default, so you will encounter a similar problem issues as PHP’s file-based sessions and assets. Fortunately, the fix is also similar: you can configure Craft to store its caches in the [database](https://craftcms.com/docs/5.x/reference/config/app.html#database-example), [Redis](https://craftcms.com/docs/5.x/reference/config/app.html#redis-example) or a central [Memcached](https://craftcms.com/docs/5.x/reference/config/app.html#memcached-example) instance.

Keep in mind that the purpose of a cache is to memoize frequently-used or computationally-expensive data! Always profile your application with the **Debug Toolbar** (enabled in your user’s **Preferences** screen) when using a cache driver that involves a network request: the baseline “cost” of accessing the cache *can* be greater than simply computing the value.

## `securityKey` Config Setting [#](#securityKey-config-setting "Direct link to securityKey Config Setting")

Every web server should have the same Craft [`securityKey`](https://craftcms.com/docs/5.x/reference/config/general.html#securitykey) setting to ensure encryption and decryption work consistently. This can be done with the special `CRAFT_SECURITY_KEY` [environment variable](#environment-variables).

## `storage` Folder [#](#storage-folder "Direct link to storage Folder")

Craft’s [storage](https://craftcms.com/docs/5.x/system/directory-structure.html) folder is used for files like database backups, logs, and custom site logos. You should point that folder to a shared storage location (like an NFS mount) using the [`CRAFT_STORAGE_PATH`](https://craftcms.com/docs/5.x/reference/config/bootstrap.html#craft-storage-path) PHP constant so all web servers can access it.

The contents of `storage/` is considered disposable, so this is not mandatory. Some redundant work will be done by each server (like compiling Twig templates) any time the caches are cleared.

![](https://craftcms.com/dist/images/icon-warning.svg)

If the `storage/` directory is *not* centralized, clearing some caches (like compiled templates or compiled classes) via the [control panel](https://craftcms.com/docs/5.x/system/control-panel.html) or [CLI](https://craftcms.com/docs/5.x/reference/cli.html#clear-caches) will only affect files on the server that processed the request or received the command!

## `cpresources` Folder [#](#cpresources-folder "Direct link to cpresources Folder")

Craft will generate the [control panel resources](https://craftcms.com/docs/5.x/reference/config/general.html#resourcebasepath) it needs on demand, so using common storage for this folder is not required. Be sure that all missing file requests are routed to `index.php`, however—otherwise, some of these may 404.

![](https://craftcms.com/dist/images/icon-tip.svg)

You can set the [buildId](https://craftcms.com/docs/5.x/reference/config/general.html#buildid) config setting (or the `CRAFT_BUILD_ID` variable) to a git SHA or deployment timestamp to ensure cache headers are set properly even as a rolling deployment is in progress.

## Database [#](#database "Direct link to Database")

Each of your web servers should have access to a single, central, high-performance database server. You will likely connect to it with a non-local IP address or hostname, and it should be protected with a secure username and password and strict access limitations (i.e. a whitelist of client IPs)—or only be available to other parts of your application via a private network. Many providers include managed, scalable database servers that simplify this connection process.

### Multiple Databases [#](#multiple-databases "Direct link to Multiple Databases")

Database traffic can also be load-balanced, with read/write splitting. This involves having multiple database instances and [configuring Craft](https://craftcms.com/docs/4.x/config/app.html#database) to send all *write* queries to a single, authoritative database, and all *read* queries to one (or more) “replicas.”

Your databases will need to be set up to propagate any changes to all of the read instances, behind the scenes—Craft itself does not attempt to maintain consistency across replicas when configured this way!

## Environment Variables [#](#environment-variables "Direct link to Environment Variables")

Some platforms provide a central management interface for environment variables. Whenever possible, use that in lieu of maintaining `.env` files on each server, as manually propagating changes can be slow and error prone.

## Project Config [#](#project-config "Direct link to Project Config")

Craft’s [Project Config](https://craftcms.com/docs/5.x/system/project-config.html) writes YAML files that are important for managing its configuration. We [recommend](kb__deployment-best-practices.md) disabling admin changes outside local development environments and certainly in multi-server production environments. You should strictly disable [`allowAdminChanges`](https://craftcms.com/docs/5.x/reference/config/general.html#allowadminchanges) or [disable writing YAML files altogether](https://craftcms.com/docs/5.x/system/project-config.html#manual-yaml-file-generation) so web servers can’t write independent changes that lead to conflicts.

## Logging [#](#logging "Direct link to Logging")

By default, Craft writes logs to a file in the [storage path](https://craftcms.com/docs/5.x/system/directory-structure.html). Since many servers in a load-balanced environment potentially mean lots of logging, we recommend collecting these logs in one place. If you’re using a container-based system such as AWS ECS or Kubernetes, it’s best to configure Craft to set the [`CRAFT_STREAM_LOG`](https://craftcms.com/docs/5.x/reference/config/bootstrap.html#craft-stream-log) constant to `true` in order to send log output to STDOUT and STDERR.

Read more about [configuring log targets](https://craftcms.com/docs/5.x/system/logging.html) in the documentation.

## Health Checks [#](#health-checks "Direct link to Health Checks")

Health checks are a key part of load-balanced applications. A health check is designed to ensure all your app’s necessary services are available before the load balancer sends traffic to the server. Depending on your setup, these services may include a database or required environment variables, for example.

Because load-balanced web servers are typically managed automatically, it’s essential that a health check verifies the minimum requirements for each to operate with Craft before handling traffic. Every Craft site will require its database at minimum.

Since Craft’s plugin architecture depends on Craft, it’s best to perform the health check *outside* of Craft, but using the same environment variables/database configuration that Craft is using.

Load balancers run health checks frequently, so it’s important to keep checks simple. For example, this sample script ensures a database connection exists and outputs `success` or `error`:

```
<?php

try {
    (new PDO(
        'mysql:host=' . getenv('CRAFT_DB_SERVER'),
        getenv('CRAFT_DB_USER'),
        getenv('CRAFT_DB_PASSWORD')
    ))->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'success';
} catch (PDOException $e) {
    error_log($e->getMessage());

    echo 'error';
}
```

### Health Check Endpoint [#](#health-check-endpoint "Direct link to Health Check Endpoint")

A health check action is available at `/actions/app/health-check`, or `index.php?action=app/health-check`. This returns a `200` HTTP response with an empty body as long as Craft is running normally—even if an update is pending.

The health check was added with load-balanced production infrastructure in mind, so its focus is on application readiness and not application *state*.

The health check will fail if one or more of the following is true…

- Craft’s **System Status** is set to “Offline”
- Craft can’t connect to the database
- Craft is not installed
- Craft’s system requirements are not met
- …an application error or exception is thrown before Craft can return its `200` response

Applies to
Craft CMS 5, Craft CMS 4, and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
