# Local Development with Docker | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/docker-for-local-development

---

Search Knowledge Base

# Local Development with Docker

![](https://craftcms.com/dist/images/icon-warning.svg)

We recommend [DDEV](https://ddev.com/) for the vast majority of projects’ local development needs, but understand that some developers and teams want more control over their environment, or greater parity with their production infrastructure.

If you are just looking to [get familiar with Craft](https://craftcms.com/docs/getting-started), this is probably *not* the place to start!

## Requirements [#](#requirements "Direct link to Requirements")

Craft will run in any environment that meets its [base requirements](https://craftcms.com/docs/5.x/requirements.html)—and with a bit of configuration, it can take advantage of all kinds of modern development tools and infrastructure technology.

This article covers a minimal [Docker Compose](https://docs.docker.com/compose/) configuration that meets Craft’s requirements, and explores a couple of opportunities for more [advanced tooling](https://craftcms.com/docs/5.x/reference/config/app.html).
We’ll show you how to combine [`serversideup/php`](https://serversideup.net/open-source/docker-php/) base images into a fully-functional application—but you are free to use some, all, or none of the services in your own containerized environment.

To run Craft, we need at least three pieces:

- **An HTTP server:** A process that serves files and marshals data between an HTTP client (like a web browser) and the PHP interpreter. Oftentimes, this is [Apache](https://httpd.apache.org/) or [nginx](https://nginx.org).
- **A PHP interpreter:** The program that loads, compiles, and executes PHP scripts required by the application to generate a response;
- **A database:** The storage medium for the content and relationships that comprise your site (well, everything except the files you might upload);

Later, we'll cover adding a centralized session and cache storage service (Redis) and a tool for auditing outbound email (Mailpit).

![](https://craftcms.com/dist/images/icon-tip.svg)

The rest of this guide assumes you have a Docker runtime and client installed. The official Docker Desktop client is a great way to start—but we recommend following the same platform-specific steps as you would to [install Docker](https://ddev.readthedocs.io/en/stable/users/install/docker-installation/) with the goal of using DDEV. All instructions are provided for UNIX-based systems—Windows users may need to adapt some concepts based on WSL2 features!

Beyond Docker, though, you don't need *any* additional software installed on your host machine. Everything will run inside of isolated, disposable containers.

## Existing Installations [#](#existing-installations "Direct link to Existing Installations")

If you have an existing Craft project that you would like to “Dockerize,” you can skip directly to [Assembling the Compose File](#assembling-the-compose-file).

## New Projects [#](#new-projects "Direct link to New Projects")

Starting a project from scratch requires one additional step.

### Gathering Project Files [#](#gathering-project-files "Direct link to Gathering Project Files")

Let’s treat this like any other new project, and get the core Craft files scaffolded.
Given our environment will eventually be Docker-driven, we might as well use the platform to our advantage and run the default [starter project command](kb__using-the-starter-project.md) in a one-off container:

```
# Create and move into a new directory:
mkdir craft-docker
cd craft-docker

# Bootstrap a new Craft installation with Composer:
docker run \
  --rm \
  --volume $PWD:/app \
  composer \
  composer create-project craftcms/craft . --ignore-platform-reqs
```

You will see some output from Docker, if this is your first time using the `composer` image. (The Docker runtime takes care of figuring out which container image(s) and “layers” are required, and downloads them in parallel.)

After that, Composer takes over and unpacks the [starter project](https://github.com/craftcms/craft) into the current working directory (`$PWD`, mounted into the container as `/app`), and installs all its dependencies. This one-off container doesn't meet *all* of Craft’s requirements, so we’ve temporarily set the `--ignore-platform-reqs` Composer flag. Future commands won’t need this!

At the end of the `create-project` process, you will have the [standard folder structure](https://craftcms.com/docs/5.x/system/directory-structure.html) for a Craft project.

For the curious among you, here’s a breakdown of the entire `docker run` command:

- The `--rm` flag cleans up the container after the Composer process ends (we won't be using it again, so that's perfect).
- `--volume $PWD:/app` mounts the current folder to the `/app` directory inside the container and allows the files Composer downloads or creates to be copied to your host machine.
- A backslash (`\`) at the end of each line allows the bash script to span multiple lines.
- `composer` is intentionally duplicated on the last two lines—the first use is the name of the container in the Docker registry, and the second is the command we're running inside the container.

## Assembling the Compose File [#](#assembling-the-compose-file "Direct link to Assembling the Compose File")

Whether you've started with a [fresh project](#new-projects), or are adding Docker to an [existing project](#existing-installations), the process of building the Compose file is the same.

Open your project directory in the text editor or IDE of your choice, and create a new file at the root, named `docker-compose.yaml`. At minimum, a Compose file must contain a `services` key:

```
services:
```

Recall the essential components of a Craft environment: an HTTP server, a PHP interpreter, and a database. The first two are combined in most ServerSideUp images, but the last one we’ll have to reach for the community-maintained (but “Docker Official”) `postgres` image.

### Web Server [#](#web-server "Direct link to Web Server")

The first service we need will be named `web`.
We are going to use a lightly customized image, based on `serversideup/php:8.5-fpm-nginx-alpine`; for now, add this to your configuration:

```
services:
  # PHP Interpreter and HTTP Server
  web:
    build:
      context: .
      dockerfile: Dockerfile
    ports:
      - 8080:8080
    volumes:
      - ./:/var/www/html
    environment:
      - NGINX_WEBROOT=/var/www/html/web
```

Rather than using an off-the-shelf `image`, this service instructs Docker Compose to build the image from a Dockerfile named `Dockerfile`, at the root of your project.
We’ve proactively added some additional configuration, like customizing the port we’ll access the app on, and a mount point so our project’s code is synchronized into the running container.
At a minimum, this service’s `Dockerfile` should have these instructions:

```
# Base image:
FROM serversideup/php:8.5-fpm-nginx-alpine

# These changes must be made by the root user:
USER root

# Install additional extensions required by Craft:
RUN install-php-extensions bcmath gd imagick intl soap
RUN docker-php-serversideup-dep-install-alpine "postgresql-client"

# Apply additional configuration to the base image:
ENV PHP_OPCACHE_ENABLE=true

# Bake in Craft configuration (optional):
# ENV CRAFT_STREAM_LOG=true

# Switch back to non-privileged user:
USER www-data
```

![](https://craftcms.com/dist/images/icon-tip.svg)

So far, this image is basically equivalent to the ones described in our [production-oriented Docker](kb__craft-cms-in-docker.md) article!

### Database [#](#database "Direct link to Database")

The database service requires a bit of additional configuration:

```
services:
  # ...

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

volumes:
  db_data:
```

Note the new top-level `volumes` key: this tells Docker that we want a persistent, named storage volume for our database content that will survive any restarts of the project—including through major configuration changes like Postgres version updates. We use this volume in the `db` service, binding Postgres’s data directory to it.

We’ve also defined a few `environment` variables specific to the database container. Let’s copy those into our `.env` file, so Craft knows how to connect:

```
# ...

CRAFT_DB_DRIVER=pgsql
CRAFT_DB_SERVER=db
CRAFT_DB_PORT=5432
CRAFT_DB_DATABASE=db
CRAFT_DB_USER=db
CRAFT_DB_PASSWORD=db
CRAFT_DB_SCHEMA=public
CRAFT_DB_TABLE_PREFIX=
```

For projects that require MySQL, replace the `db` service’s image with `mysql`…

```
services:
  # ...
  db:
    image: mysql
    environment:
      MYSQL_DATABASE: db
      MYSQL_USER: db
      MYSQL_PASSWORD: db
      # We aren’t going to use this,
      # but it's required by the image:
      MYSQL_ROOT_PASSWORD: root
```

…and update the corresponding values in your `.env` file:

```
CRAFT_DB_DRIVER=mysql
CRAFT_DB_SERVER=db
CRAFT_DB_PORT=3306
CRAFT_DB_DATABASE=db
CRAFT_DB_USER=db
CRAFT_DB_PASSWORD=db
CRAFT_DB_SCHEMA=public
CRAFT_DB_TABLE_PREFIX=
```

All together, your `docker-compose.yaml` file should look like this:

```
services:
  web:
    build:
      context: .
      dockerfile: Dockerfile
    ports:
      - 8888:8080
    volumes:
      - ./:/var/www/html
    environment:
      - NGINX_WEBROOT=/var/www/html/web

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

volumes:
  db_data:
```

## Running your Application [#](#running-your-application "Direct link to Running your Application")

To start your services, run this command from your project directory:

```
docker compose up
```

Docker will pull the images, then boot your containers. You should see some log messages for both containers we defined, prefixed with `web-1` or `db-1`.

![](https://craftcms.com/dist/images/icon-tip.svg)

[Port conflicts](#multiple-projects-port-conflicts-and-hostnames) can be fixed by shutting down other containers or programs that might use them. This is a common problem when switching from another HTTP server like MAMP or Valet, or when using Node tools that run their own dev servers. If you are unable to determine the cause of a conflict, you may update the `ports` value in the `web` component to `9876:8080` or another available port. The “right” side of this mapping represents the container’s internal port, and must remain `8080`.

### Executing a Command [#](#executing-a-command "Direct link to Executing a Command")

In addition to running the process(es) the container images were designed for, containers can execute arbitrary commands. For now, let’s run the setup wizard on the `web` service:

```
docker compose exec web php craft setup
```

See the [first-time setup guide](kb__first-time-setup.md) for more info about what to expect—these are the only things you will need to pay special attention to:

- Database connection details can be left to their defaults—Craft will automatically discover the variables you added to `.env`;
- Your Site URL should be `http://localhost:8080`—or whatever port you ended up with for the `web` component;

![](https://craftcms.com/dist/images/icon-tip.svg)

For existing projects, you can instead connect to the `db` container with a database administration tool and import a backup.
You can also restore a database backup with Craft by placing the file in `storage/backups/` and running `docker compose exec web php craft db/restore backup-name.sql`.

With Craft installed, head to `http://localhost:8080` in your browser!

## Bonus Features [#](#bonus-features "Direct link to Bonus Features")

Let’s take a look at some additional Docker Compose features and images that can augment your workflow or better reflect your production infrastructure.

After each change to `docker-compose.yaml`, be sure and restart your application. If you started it with `docker compose up`, you can press `Control + C` to exit the process.

### Multiple Projects, Port Conflicts, and Hostnames [#](#multiple-projects-port-conflicts-and-hostnames "Direct link to Multiple Projects, Port Conflicts, and Hostnames")

One of the things that DDEV simplifies is port collisions when multiple sites are running. On start, it will assign each compose project a pair of ports for HTTP and HTTPs traffic, as well as a variety of other services (like each of your databases). In the normal course of using DDEV, you won't see or care what those ports are, because it handles routing via custom hostnames like `my-project.ddev.site`.

When using Docker without a routing layer, your services are only accessible via `localhost` and a port number defined by its configuration. (Services within a compose project can always talk to one another by their service names!)

You may assign ports in `docker-compose.yaml`, or parameterize them via your `.env` file:

```
services:
  web:
    build:
      # ...
    # Load additional environment variables from our .env file:
    env_file: .env
    ports:
      # Use host port 8080 unless one is defined in the .env file:
      - "${DOCKER_COMPOSE_PORT_WEB:-8080}:8080"

    # ...
```

```
DOCKER_COMPOSE_PORT_WEB="8090"
```

This way, each member of your team (or an outside collaborator) can resolve port conflicts without changing hard-coded values in a tracked configuration file. The same strategy can be used for the database `ports`:

```
# ...
ports:
  - "${DOCKER_COMPOSE_PORT_DB:-5432}:5432"
```

```
DOCKER_COMPOSE_PORT_DB="6543"
```

Your `CRAFT_DB_PORT` variable should stay the same: *within* the Docker network, services talk to one another on their “internal” port rather than the “host” port.

### HTTPs [#](#hTTPs "Direct link to HTTPs")

HTTPs for `localhost` requires platform-specific configuration that is outside the purview of this guide.

If this is something your application demands (or you are simply curious about), both [Traefik Router](https://traefik.io/traefik/) and [Caddy](https://caddyserver.com/) are open-source projects that simplify the process of issuing certificates for private use.

It is worth noting that DDEV provides both SSL and custom domains, without any configuration—and itself [uses Traefik](https://docs.ddev.com/en/stable/users/extend/traefik-router/)!

### Redis [#](#redis "Direct link to Redis")

Production applications that make use of load balancing or other PaaS products often use [Redis](https://redis.io/) to share cache and session data between multiple web nodes, web and worker nodes, or—in cases where the filesystem is ephemeral—provide a persistent storage mechanism between restarts or deployments.

We can add Redis to our Compose project as another service:

```
services:
  # ...
redis:
    image: redis
```

Then, follow the [installation and configuration instructions](https://craftcms.com/docs/5.x/reference/config/app.html#redis-example) in the documentation to point your cache and/or session components to the Redis server. Here’s an example of that configuration applied to the `cache` component:

```
use Craft;
use craft\helpers\App;
use yii\redis\Cache;

return [
    # ...
    'components' => [
        # ...
        'cache' => function() {
            $config = [
                'class' => Cache::class,
                'keyPrefix' => Craft::$app->id,
                'defaultDuration' => Craft::$app->getConfig()->getGeneral()->cacheDuration,

                // Full Redis connection details:
                'redis' => [
                    'class' => yii\redis\Connection::class,
                    'hostname' => App::env('REDIS_HOSTNAME'),
                    'port' => App::env('REDIS_PORT'),
                ],
            ];

            return Craft::createObject($config);
        },
    ],
];
```

Your `.env` file will need two new values, as well:

```
REDIS_HOSTNAME="redis"
REDIS_PORT="6379"
```

The Redis port is set by the container image, and cannot be changed, but you may expose it to your host machine under any other port (say, to connect to it with a GUI) using the same strategy described above.

![](https://craftcms.com/dist/images/icon-tip.svg)

When installing the `yii2-redis` package, run Composer on the `web` container with the same `exec` command we used for the setup process: `docker compose exec web composer require yiisoft/yii2-redis`.
Composer is included in the base ServerSideUp image.

### Health Checks [#](#health-checks "Direct link to Health Checks")

Running multiple interdependent services can make it difficult to determine the application’s “readiness” state.

Docker Compose has built-in `depends_on` and `healthcheck` features that help us to just this. Update the `web` service to wait for the database (and Redis, if you’ve configured it):

```
services:
  web:
    # ...

    depends_on:
      db:
        condition: service_healthy
      redis:
        condition: service_healthy
```

Then, each service with dependencies declared in this way needs a `healthcheck` key:

```
services:
  # ...

  db:
    # ...

    healthcheck:
      test: ["CMD", "pg_isready", "-U", "db", "-d", "db"]
      interval: 5s
      retries: 3

  redis:
    # ...

    healthcheck:
      test: ["CMD", "redis-cli", "ping"]
```

You may notice a change to the order in which services boot up (or an additional delay before the `web` service is available and your app responds to HTTP requests).

![](https://craftcms.com/dist/images/icon-tip.svg)

The `interval` and `retries` settings are up to you—depending on the speed of your host machine, you may need more lenient policies.

### Mailpit [#](#mailpit "Direct link to Mailpit")

The last service we’ll look at is [Mailpit](https://mailpit.axllent.org), a mock SMTP email server.

Add this service definition to your `docker-compose.yaml` file:

```
services:
  # ...

  mailpit:
    image: axllent/mailpit
    ports:
      - 8025:8025
```

Restart the application, then head to your Craft installation’s **Settings** → **Email** screen:

![](https://craftcms.com/dist/images/icon-loading.png)

![Docker/Craft: Mailpit Configuration]()

Email settings in Craft, showing the connection details for our new Mailpit server.

Perform a test with these settings; if it’s successful, open up `http://localhost:8025` (the Mailpit UI), and you should see your message. If you get an error, double-check the Docker logs to make sure the container is running, or check out our guide on [troubleshooting issues with email deliverability](kb__troubleshooting-email-errors.md).

Keep in mind that any time you open ports (as we did for the Mailpit UI), you may need to [negotiate conflicts](#multiple-projects-port-conflicts-hostnames) between running projects.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft/Docker: Mailpit UI]()

The Mailhog UI, accessible at http://localhost:8025

Applies to
Craft CMS 4 and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
