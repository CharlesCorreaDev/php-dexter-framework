# Production-Ready Docker Images for Craft | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/docker-in-production

---

Search Knowledge Base

# Production-Ready Docker Images for Craft

[Docker](https://www.docker.com) is a powerful and widely-used containerization engine.

Craft’s architecture is well-suited for deployment on container orchestration platforms like [AWS ECS](https://aws.amazon.com/ecs/), [Google Cloud Run](https://cloud.google.com/run/), a [Kubernetes](https://kubernetes.io) provider, or even a virtual private server running as a Docker host.

This guide covers the adoption of source-controlled, production-ready infrastructure for Craft, using `Dockerfile`s.
It's intended primarily for experienced Docker users who want to understand Craft’s needs and explore some complementary ops patterns. A companion article covers [a similar setup for local development](kb__docker-for-local-development.md).

![](https://craftcms.com/dist/images/icon-tip.svg)

Our focus will be the core “compute” unit or *image* that provides a PHP runtime, configured to meet Craft’s [requirements](https://craftcms.com/docs/5.x/requirements.html).
You will be responsible for sourcing appropriate solutions for your [database](#databases-and-other-services), storage, cache, and (in some cases) an [HTTP server](#http-server).

## Base image [#](#base-image "Direct link to Base image")

We recommend starting with an image from the [`serversideup/php`](https://serversideup.net/open-source/docker-php/) family.
It satisfies *most* of Craft’s [requirements](https://craftcms.com/docs/5.x/requirements.html), but needs a few small adjustments to be fully compatible:

```
# Base image:
FROM serversideup/php:8.5-fpm-alpine

# Most changes must be made by the root user:
USER root

# Install additional PHP extensions required by Craft:
RUN install-php-extensions bcmath gd imagick intl soap

# Install system packages:
# RUN docker-php-serversideup-dep-install-alpine "postgresql-client"
# RUN docker-php-serversideup-dep-install-alpine "mysql-client"
# (These are only required if you want to initiate database backups from the control panel or CLI; use your database’s corresponding client.)

# Set image-specific flags (explained in the following sections):
ENV PHP_OPCACHE_ENABLE=true

# Switch back to non-privileged user:
USER www-data
```

With no further adjustments, you can build the image, mount your Craft project to `/var/www/html`, and [send FastCGI requests to it](https://serversideup.net/open-source/docker-php/docs/image-variations/fpm#quick-start) from an HTTP server or reverse-proxy like [Apache](https://httpd.apache.org), [nginx](https://nginx.org), or [Caddy](https://caddyserver.com).

In the next sections, we’ll extend this example with additional configuration options, staged builds, image variations, and portability.

## PHP configuration [#](#php-configuration "Direct link to PHP configuration")

```
ENV PHP_MAX_INPUT_VARS=5000
```

Many common PHP `ini` directives can be [customized using environment variables](https://serversideup.net/open-source/docker-php/docs/customizing-the-image/changing-common-php-settings) in your `Dockerfile`.
For any setting *not* covered by an environment variable, you can [copy an `ini` file into the image](https://serversideup.net/open-source/docker-php/docs/customizing-the-image/changing-common-php-settings#setting-your-own-phpini), ensuring it is alphabetically last in the loading order:

```
# Dockerfile
COPY ./etc/php/craft.ini /usr/local/etc/php/conf.d/zzz-craft.ini
```

```
# craft.ini
max_input_vars=5000
```

## HTTP Server [#](#http-server "Direct link to HTTP Server")

![](https://craftcms.com/dist/images/icon-tip.svg)

In development, you can simulate this separation of responsibility using Docker Compose, or an HTTP server on your host machine.

For convenience, ServerSideUP publishes alternate images with built-in HTTP servers:

```
# Base image:
- FROM serversideup/php:8.5-fpm-alpine
+ FROM serversideup/php:8.5-fpm-nginx-alpine
```

Instead of directly exposing PHP-FPM on port `9000`, the container listens for HTTP traffic on ports `8080` and/or `8443`.
These images are configured using a handful of [environment variables](https://serversideup.net/open-source/docker-php/docs/image-variations/fpm-nginx#environment-variables), but can be further customized by [injecting a config file](https://serversideup.net/open-source/docker-php/docs/image-variations/fpm-nginx#custom-nginx-configuration).

The best base image will likely depend on how your infrastructure handles ingress, SSL termination, load balancing, and scaling.

## Environment variables and secrets [#](#environment-variables-and-secrets "Direct link to Environment variables and secrets")

Your container orchestration tool should have a means of managing secrets.

Like the ServerSideUP images, Craft can be configured using [environment overrides](https://craftcms.com/docs/5.x/configure.html#environment-overrides).
There are also a handful of [bootstrap variables](https://craftcms.com/docs/5.x/reference/config/bootstrap.html) that control low-level behavior, like the layout of your project directory, or whether the filesystem should be treated as [ephemeral](https://craftcms.com/docs/5.x/reference/config/bootstrap.html#craft-ephemeral).

Configuration that applies to all environments can be captured as part of your image, using the [`ENV` command](https://docs.docker.com/reference/dockerfile/#env):

```
ENV CRAFT_BACKUP_ON_UPDATE=false
```

To prevent environment variables from being overridden via a stray `.env` file, you may wish to switch the [default loading behavior in `bootstrap.php`](https://github.com/craftcms/craft/blob/5.x/bootstrap.php) from *mutable* to *immutable*:

```
Dotenv\Dotenv::createUnsafeImmutable(CRAFT_BASE_PATH)->safeLoad();
```

### Databases and other services [#](#databases-and-other-services "Direct link to Databases and other services")

Each instance of your image (whether serving HTTP requests or acting as a worker) needs to connect to a central database.
Unless your entire application lives inside a private network (inaccessible from the public internet) and can use weak authentication, you will probably need to inject some secrets at runtime, like a MySQL or Postgres connection string, hostname, or password.

Those credentials might be managed through your host’s dashboard and injected at runtime, or baked into the image as it is built.

At scale, your application may benefit from [read/write splitting and replication](https://craftcms.com/docs/5.x/reference/config/app.html#database).

## Logs [#](#logs "Direct link to Logs")

Craft’s default [logger](https://craftcms.com/docs/5.x/system/logging.html) appends to on-disk text files in the `storage/` directory.
In a container, these logs are effectively inaccessible, and will not be persisted between deployments or restarts.

The best way to collect logs from containers is to redirect them to the `stdout` and `stderr` streams, and let the host or platform aggregate them across all services and instances.
Enable log streaming with the [`CRAFT_STREAM_LOG` bootstrap variable](https://craftcms.com/docs/5.x/reference/config/bootstrap.html#craft-stream-log):

```
ENV CRAFT_STREAM_LOG=true
```

## CLI and workers [#](#cli-and-workers "Direct link to CLI and workers")

Craft’s queue and CLI commands can (and should!) run independently from the containers serving web requests.

ServerSideUP provides special images for one-off (or long-running) workloads.
The `Dockerfile` for a “worker” container would look something like this—basically the same as the web container, but with a different base image (`8.5-cli-alpine`), and a customized entry-point:

```
# Base image:
FROM serversideup/php:8.5-cli-alpine

# Most changes must be made by the root user:
USER root

# ...

# Switch back to non-privileged user:
USER www-data

# Run the queue with verbose output:
ENTRYPOINT ["php", "/var/www/html/craft", "queue/listen", "--verbose"]
```

With separate `Dockerfile`s for your web and worker images, you can skip unnecessary steps, like [compilation of front-end assets](#front-end-builds).

![](https://craftcms.com/dist/images/icon-tip.svg)

A worker running on a host that shares resources between all your services, you may need to [manually throttle or schedule CPU time](https://docs.docker.com/engine/containers/resource_constraints/#cpu), or wrap the `ENTRYPOINT` command with [`nice`](https://craftcms.com/docs/5.x/system/queue.html#performance-considerations).

While running, you can execute other console commands inside a “worker” container:

```
docker exec docker-example-worker-1 /var/www/html/craft db/backup
```

## Built vs. mounted source [#](#built-vs-mounted-source "Direct link to Built vs. mounted source")

Your source code, Composer dependencies, and front-end artifacts can either be [mounted into a container](https://docs.docker.com/engine/storage/bind-mounts/) at runtime or [copied into the image itself](https://docs.docker.com/reference/dockerfile/#copy).
The best strategy is often informed by your team’s needs and your host’s capabilities.

- By **mounting** code into a container instance as it starts, changes can be reflected almost immediately in a live environment; files are typically synchronized from the host into the container (and vice-versa) as soon as they are updated. This is popular in local development, when the source changes frequently and restarts are disruptive.
- By **building** code into an image, every instance of your application is a perfect, hermetic replica. You don’t need to install, clone, or build anything on a “host” machine (if the host is accessible at all). This is best suited for production deployment in scalable or distributed systems.

![](https://craftcms.com/dist/images/icon-tip.svg)

Read more about this difference in the [official ServerSideUP documentation](https://serversideup.net/open-source/docker-php/docs/deployment-and-production/packaging-your-app-for-deployment).

To bake your application code into the image, `COPY` each essential folder during the build:

```
# ...

COPY --chown=www-data:www-data \
  ./bootstrap.php \
  ./config \
  ./craft \
  ./migrations \
  ./templates \
  ./web \
  ./

# ...
```

The last argument to `COPY` is the destination; everything up to that is a source.
This instruction may look completely different if your project uses a novel [folder structure](https://craftcms.com/docs/5.x/system/directory-structure.html), if you have custom modules and plugins, etc.

Craft also requires `storage/` and `web/cpresources/` directories, for runtime files.
You can either copy these into the image as well, or

### Composer dependencies [#](#composer-dependencies "Direct link to Composer dependencies")

PHP packages should be installed in a hermetic, reproducible environment, not copied from your development machine.
Ideally, this is handled in a continuous integration pipeline, with a fresh clone of your repository.
You can approach this in basically the same way as you would the [front-end assets](#front-end-builds) (in a separate build stage), or directly in the base image:

```
# ...

# Copy Composer manifests (if you didn't in a previous step):
COPY composer.json composer.lock ./
RUN composer install \
  --no-interaction \
  --prefer-dist \
  --no-ansi \
  --no-scripts \
  --no-progress \
  --no-dev \
  --optimize-autoloader \
  -d /var/www/html/
```

With your application code and packages in the image, it can be run anywhere

## Front-end builds [#](#front-end-builds "Direct link to Front-end builds")

A `Dockerfile` may contain multiple `FROM` instructions to perform intermediate work while your container builds.

One example of this would be compliation of front-end assets, with Node.js.
You don’t typically need the entire V8 runtime in your final image, so it can be temporarily used in a separate stage with only the artifacts being copied:

```
FROM serversideup/php:8.5-fpm-alpine as base

# ...

FROM node:24 AS artifacts
WORKDIR /app
COPY package.json package-lock.json
RUN npm run build

# Copy files back into the final image, named `web`:
FROM base as web
COPY --from=artifacts --chown=www-data:www-data /app/output/ ./web/assets/

# ...

USER www-data
```

In this example, we’ve given each stage a `name`, which you can “target” in a build:

```
docker build -t web
```

## Putting it all together [#](#putting-it-all-together "Direct link to Putting it all together")

The best way to test your images is by running them locally.
[Docker Compose](https://docs.docker.com/compose/) provides a succinct configuration format for multi-service applications, and can pull in your [custom images](https://docs.docker.com/reference/compose-file/build/) defined by the `Dockerfile` examples, above.

This configuration file (as well as your final web and “worker” `Dockerfile`s) belongs at the root of your Craft project, and should be named `docker-compose.yaml`:

```
services:
  # HTTP/Web
  web:
    build:
      context: .
      dockerfile: docker.web.Dockerfile
    // Expose the web server via a different port:
    ports:
      - 8888:8080
    // Mount your source code on top of the copied files, for development:
    volumes:
      - ./:/var/www/html
    networks:
      - craft
    # Pass options to the underlying `serversideup/php` image:
    environment:
      - NGINX_WEBROOT=/var/www/html/web

  # Worker
  worker:
    build:
      context: .
      dockerfile: docker.cli.Dockerfile
    volumes:
      - ./:/var/www/html
    networks:
      - craft

  # Database (optional when using a remote/managed solution in production)
  db:
    image: postgres
    ports:
      - 5432:5432
    environment:
      POSTGRES_DB: db
      POSTGRES_USER: db
      POSTGRES_PASSWORD: db
    volumes:
      - db_data:/var/lib/postgresql
    networks:
      - craft

# Persistent storage for the database service:
volumes:
  db_data:

# All services should join this network so they can communicate:
networks:
  craft:
```

Run your complete app from the project directory:

```
docker compose up
```

If this is your first time building the images (or you’ve made changes since the last build), you’ll see a bunch of low-level logs before the app boots.
Once you see the [ServerSideUp ASCII banner](https://github.com/serversideup/docker-php/blob/main/src/common/etc/entrypoint.d/0-container-info.sh) (among other messages, prepended by `web-1`, `db-1`, or `worker-1`), you should be able to navigate to `http://localhost:8080` in a browser!

Compose also simplifies running one-off commands against a service (there’s no need to name the container or find it’s ID):

```
docker compose exec worker php /var/www/html/craft db/backup
```

![](https://craftcms.com/dist/images/icon-warning.svg)

As your images are built, your source code is [baked in](#built-vs-mounted-source) using the `COPY` instruction.
In the Compose file, however, the project directory is mounted *on top of* those source files, so that they can be synchronized from your host machine.
This doesn’t alter the image; it’s just a convenience feature for development, when rebuilding the image for each source change would be impractical.
If you want to test the image *exactly as it would run in production*, you can remove the `volumes:` hash from the `web` and `worker` services.

## Further Reading [#](#further-reading "Direct link to Further Reading")

- [**Local Development with Docker**](kb__docker-for-local-development.md) — Our own guide, for developers just getting started with Docker Compose.
- [**Deploying Docker images to Digital Ocean’s App Platform**](https://docs.digitalocean.com/products/app-platform/reference/dockerfile/) or [**Heroku**](https://devcenter.heroku.com/articles/build-docker-images-heroku-yml) — Learn how to build and run custom images on managed infrastructure.
- [**Hosting and deployment**](https://craftcms.com/docs/5.x/deployment.html) — General information about the ways you can run and deploy a Craft application.
- [**Requirements**](https://craftcms.com/docs/5.x/requirements.html) — Craft’s technical requirements, which you should be familiar with as you design your images.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
