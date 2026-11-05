# Docker Installation | HumHub Documentation

> **Fonte / Source:** https://docs.humhub.org/docs/admin/installation-docker

---

On this page

The official HumHub Docker image is the **recommended way to run HumHub**. It bundles the complete stack (web server with automatic HTTPS, cron scheduler, queue workers and real-time push via Mercure), so most of the configuration described in the web server guides is already done for you.

The image is published on **[Docker Hub](https://hub.docker.com/r/humhub/humhub)**, which lists all available tags and is what your Docker host pulls from. Its sources, the complete list of environment variables and further example setups are maintained in the **[HumHub Docker repository](https://github.com/humhub/docker)**.

## Requirements[â](#requirements "Direct link to Requirements")

### Docker[â](#docker "Direct link to Docker")

- **Docker >= 20.10.13** with **Compose v2** (use the `docker compose` command; older setups use `docker-compose`)
- A domain name pointing to the host if you want automatic HTTPS certificates

You do **not** need to install PHP, a web server or set up cron manually, all of this is part of the image.

### Memory[â](#memory "Direct link to Memory")

Since HumHub itself can be used for a variety of use-cases, the required memory highly depends on the amount and activity within the network as well as the specific actions of the users. The host has to provide these resources for the container:

**RAM**

- 64 MB of memory per PHP process as a minimum. The container runs the web server, the scheduler and by default two queue workers side by side, so plan for several processes at once. If the database runs on the same host, add its memory on top.

**Disk space**

- 2 GB for the space taken by the Docker image itself
- 100 MB for the database
- additional space for the data volume, which grows with uploaded files, and for your backups. A well used, mature installation can easily grow to 10 GB and more.

## Quick start[â](#quick-start "Direct link to Quick start")

Create a project directory and change into it:

```
mkdir -p /opt/humhub

cd /opt/humhub
```

Now create a `compose.yml` file in that directory. A minimal stack consists of the `humhub` service and a `db` (MariaDB) service:

```
services:

humhub:

image: humhub/humhub:stable

restart: unless-stopped

ports:

- "80:80"

- "443:443"

- "443:443/udp"  # HTTP/3 (optional)

depends_on:

db:

condition: service_healthy

volumes:

- ./humhub-data:/data

environment:

- SERVER_NAME=https://humhub.example.com

- HUMHUB_CONFIG__COMPONENTS__DB__DSN=mysql:host=db;dbname=humhub

- HUMHUB_CONFIG__COMPONENTS__DB__USERNAME=root

- HUMHUB_CONFIG__COMPONENTS__DB__PASSWORD=changeMe

db:

image: mariadb

restart: unless-stopped

command:

- --character-set-server=utf8mb4

- --collation-server=utf8mb4_unicode_ci

volumes:

- ./mysql-data:/var/lib/mysql

environment:

- MYSQL_ROOT_PASSWORD=changeMe

expose:

- "3306"

healthcheck:

test: ["CMD", "/usr/local/bin/healthcheck.sh", "--su-mysql", "--connect", "--innodb_initialized"]

interval: 10s

timeout: 5s

retries: 5
```

caution

Before starting, **change every example value**, at least `SERVER_NAME`, `HUMHUB_CONFIG__COMPONENTS__DB__PASSWORD` and `MYSQL_ROOT_PASSWORD`. Never use the example passwords in production.

note

The `stable` tag always points to the latest stable HumHub release, so a `docker compose pull` can move a live site to a new minor or major version. For production, pin the version line you run instead, written as `humhub/humhub:<MAJOR>.<MINOR>`. Such a tag only receives the maintenance releases of that line. All available tags are listed on [Docker Hub](https://hub.docker.com/r/humhub/humhub), the current version line in the [Release Notes](docs__about__releasenotes__release_notes.md).

Start the stack:

```
docker compose up -d
```

Open your `SERVER_NAME` URL in the browser. The HumHub installer guides you through the remaining setup, exactly as on a web server installation.

## What's already handled[â](#whats-already-handled "Direct link to What's already handled")

The image runs these for you, so the corresponding guides are only relevant for web server installations:

| Concern | In Docker |
| --- | --- |
| Web server & HTTPS | Built-in (FrankenPHP/Caddy, automatic certificates via `SERVER_NAME`) |
| [Cron jobs](docs__admin__cron-jobs.md) | Scheduler (`HUMHUB_DOCKER__AUTOSTART_SCHEDULER`, on by default) |
| [Queue / async tasks](docs__admin__asynchronous-tasks.md) | Worker (`HUMHUB_DOCKER__AUTOSTART_WORKER`, on by default) |
| Real-time push | Mercure (`HUMHUB_DOCKER__MERCURE_ENABLE`, on by default) |
| [Pretty URLs](docs__admin__installation.md#pretty-urls) | Enabled by default |

## Configuration[â](#configuration "Direct link to Configuration")

In Docker, configuration is primarily done through **environment variables**. Every HumHub config option maps to a `HUMHUB_CONFIG__...` variable. For example:

```
environment:

- HUMHUB_CONFIG__COMPONENTS__DB__DSN=mysql:host=db;dbname=humhub

- HUMHUB_CONFIG__NAME=My Network
```

This is the same mechanism described in [Environment / .env configuration](docs__admin__dot-env.md) and [Advanced Configuration](docs__admin__advanced-configuration.md). Docker only supplies the variables through Compose.

The PHP configuration files still work. The image points HumHub's config directory to the data volume, so `common.php`, `web.php` and `console.php` in `humhub-data/config` are read exactly as on a web server installation. Environment variables are applied after the configuration files, so a setting defined in both places is taken from the environment.

## Data & volumes[â](#data--volumes "Direct link to Data & volumes")

All persistent data lives in `/data` **inside the container**. On the host it is the directory you mount there, with the example above (`./humhub-data:/data` in `/opt/humhub`) that is `/opt/humhub/humhub-data`. The relevant sub-directories are:

| Sub-directory | Content |
| --- | --- |
| `config` | Instance configuration (equivalent to `protected/config`) |
| `uploads` | Uploaded files |
| `modules` | Marketplace modules (installed automatically) |
| `modules-custom` | Your own / custom modules |
| `themes` | Custom themes |
| `logs` | Log files |

Keep this directory on the host and your database in your backup, see [Backup](docs__admin__backup.md).

## Further reading[â](#further-reading "Direct link to Further reading")

- [Backup & Restore](docs__admin__backup.md): Docker backup service
- [Updating HumHub](docs__admin__updating.md): upgrading the image
- [Command Line Interface](docs__admin__console.md): running `yii` in the container
- [Modules & Marketplace](docs__admin__modules.md): custom modules in Docker
- [Migrate to Docker](docs__admin__migrate-to-docker.md): move an existing web server installation

For all Docker-specific details, environment variables and advanced compose setups, refer to the **[HumHub Docker repository](https://github.com/humhub/docker)**.
