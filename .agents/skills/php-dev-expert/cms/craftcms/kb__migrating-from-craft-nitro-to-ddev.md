# Migrating from Craft Nitro to DDEV | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/migrating-from-craft-nitro-to-ddev

---

Search Knowledge Base

# Migrating from Craft Nitro to DDEV

With [Nitro being discontinued](https://craftcms.com/blog/retiring-craft-nitro), we recommend [DDEV](https://ddev.com) as a great local development environment:

- It’s Docker-based, freely available, and it works on macOS, Windows, and Linux.
- It’s well documented and has an active community.
- It’s perfect for PHP-based projects like Craft.
- It’s a convenient layer on top of Docker, and you can bring as little or as much Docker as you want.

For each site you migrate, you’ll need to grab a database export (from Nitro or your production environment), create and configure a new DDEV site, and import the database.

Most sites should only take a few minutes to migrate.

## 1. Export existing databases [#](#1-export-existing-databases "Direct link to 1. Export existing databases")

Pick either method for exporting each site’s database:

- **From your production environment**, you can visit the Craft control panel (with sufficient permissions) and navigate to **Utilities** → **Database Backup**, make sure **Download backup** is checked, and press **Backup**. This will create and download a compressed database dump.
- **From your local machine with Nitro installed**, you can run `nitro db backup` and choose each engine and database. (Take note of the directories these are saved to, or collect the backups someplace more convenient for step 5.)

![](https://craftcms.com/dist/images/icon-tip.svg)

While you can use tools like `pg_dump` and `mysqldump`, we recommend using Craft or Nitro’s export options because they’re configured to [keep things consistent](kb__craft-database-options-and-best-practices.md#keep-it-consistent) and encourage a smooth experience.

## 2. Stop Nitro [#](#2-stop-nitro "Direct link to 2. Stop Nitro")

Running Nitro and DDEV simultaneously may invite port conflicts, so we’ll stop Nitro to ensure that DDEV will be the only local environment running.

You can stop all Nitro’s containers using the [stop](https://craftcms.com/docs/nitro/2.x/commands.html#stop) command:

```
nitro stop
```

## 3. Install DDEV [#](#3-install-ddev "Direct link to 3. Install DDEV")

Follow [DDEV’s documentation](https://ddev.com/get-started/) get it installed and running on your OS.

## 4. Create DDEV sites [#](#4-create-ddev-sites "Direct link to 4. Create DDEV sites")

In the same way you’ve used `nitro add` to create a site with Nitro, you’ll use `ddev config` to create a site with DDEV.

1. Navigate to your project directory, run `ddev config`, and follow the prompts. The auto-detected docroot (`web`) and project type (`craftcms`) should work for *most* projects, but you can pass them explicitly if you're using a non-standard setup: `ddev config --project-type=craftcms --webroot=app/public`.
2. Open the newly-created `.ddev/config.yaml` to [adjust settings](https://ddev.readthedocs.io/en/latest/users/configuration/config_yaml/).
   - Set `php_version` to whichever you need. (More in `config.yaml`’s comments.)
   - The database type can be `mariadb`, `mysql`, or `postgres` with a corresponding version.
   - Use `additional_hostnames` for other `*.ddev.site` domain names you’d like to use, or `additional_fqdns` for other custom domain names.
3. Run `ddev start` to prepare and run the containers needed for the site.
4. Run `ddev describe` to get details about the site, and update Craft’s settings with new path and database connection details:
   - `CRAFT_DB_SERVER=my-site-db` (DDEV `InDocker` hostname)
   - `CRAFT_DB_DATABASE=db`
   - `CRAFT_DB_USER=db`
   - `CRAFT_DB_PASSWORD=db`
   - `DEFAULT_SITE_URL=my-site.ddev.site` (DDEV `web` URL)

This will write a `.ddev/` directory at the root of the project. You can either add that directory to your `.gitignore` file or check it into your project to share with other developers and/or machines.

DDEV’s default *container* path is `/var/www/html`, so you may need to update any references to Nitro’s `/app` directory. If your web root is `/app/web`, for example, it will become `/var/www/html/web`.

![](https://craftcms.com/dist/images/icon-tip.svg)

Any time you’ve saved edits to `.ddev/config.yaml`, you can use `ddev start` to apply them and restart the container(s).

## 5. Import databases [#](#5-import-databases "Direct link to 5. Import databases")

From each project directory, import the database export you prepared in step 1:

```
ddev import-db --src=dump.sql
```

That’s it! You should be able to run `ddev launch` to open your freshly-migrated site in a browser.

## 6. Uninstall Nitro [#](#6-uninstall-nitro "Direct link to 6. Uninstall Nitro")

To remove Nitro from your system, run `nitro destroy` and follow the [OS-specific instructions](https://craftcms.com/docs/nitro/2.x/installation.html#uninstalling-nitro) for removing the system components that are left.

## Getting Oriented [#](#getting-oriented "Direct link to Getting Oriented")

At a high level, Nitro and DDEV are not wildly different. DDEV offers a lot of additional functionality and some key architectural differences:

- Each project has its own YAML and supporting configuration files, and generates intermediate Docker Compose YAML you can customize (or never look at!) depending on your needs.
- Each project is more tightly coupled to its database, which runs in its own separate database container.
- Projects can be independently started and stopped.
- You can add first- and third-party services like you could with Nitro, but you can customize further with config file conventions, [hooks](https://ddev.readthedocs.io/en/latest/users/configuration/hooks/), [Docker Compose](https://ddev.readthedocs.io/en/latest/users/extend/custom-compose-files/), and whatever [custom images](https://ddev.readthedocs.io/en/latest/users/extend/customizing-images/) you’d like to introduce.

### Connecting to the Database [#](#connecting-to-the-database "Direct link to Connecting to the Database")

DDEV is similar to Nitro in that you’ll need to be mindful about connecting to the database container externally or within another Docker container.

Use `ddev describe` to see project details that include a `db` section. The `InDocker` details are what you’d provide Craft, while the `Host` details are what you’d use externally for something like a GUI client. (Notice the Host port, which will change with each project.)

Credentials will always be `db` for the username, password, and database.

![](https://craftcms.com/dist/images/icon-tip.svg)

macOS users with [TablePlus](https://tableplus.com) installed can use `ddev tableplus` to open the current project’s database without entering any connection details. DDEV has [commands for other database GUIs](https://ddev.readthedocs.io/en/stable/users/usage/database-management/#database-guis), as well!

### Starting and Stopping Projects [#](#starting-and-stopping-projects "Direct link to Starting and Stopping Projects")

Each project can be started with `ddev start`, which will apply any configuration changes. `ddev pause` will pause a project’s containers, and `ddev stop` will remove the containers while preserving data. (You can use `ddev stop --remove-data` to remove all project data.)

To have DDEV remove and forget everything about a project including its configuration, use `ddev delete --omit-snapshot --yes`.

### Xdebug [#](#xdebug "Direct link to Xdebug")

Nitro’s `xon` and `xoff` commands become `ddev xdebug on` and `ddev xdebug off`, and you’ll need to remap PhpStorm and VS Code to the container’s new folder structure. (`/app` → `/var/www/html`.)

Learn more [in the DDEV docs](https://ddev.readthedocs.io/en/latest/users/debugging-profiling/step-debugging/). There’s also a [video tutorial on configuring PhpStorm and DDEV](https://ddev.com/ddev-local/ddev-local-phpstorm-and-xdebug-debugging/).

### Redis [#](#redis "Direct link to Redis")

Redis isn’t included with a new site, but the [first-party service](https://ddev.readthedocs.io/en/latest/users/extend/additional-services//) is quick to add:

```
ddev get drud/ddev-redis
ddev restart
```

You’ll need to provide Craft with your the new Redis container’s hostname, which you can find running `ddev describe`.

If you’ve configured your Craft site like the [examples in the documentation](https://craftcms.com/docs/4.x/config/#redis-example), you can specify the hostname in your `.env` file:

```
REDIS_HOSTNAME=ddev-my-project-redis
```

### Custom Ports [#](#custom-ports "Direct link to Custom Ports")

DDEV automatically notifies you about any port conflicts so that you can stop conflicting services. You can also configure DDEV to use non-conflicting ports from `.ddev/config.yaml`.

Learn more [in the DDEV docs](https://ddev.readthedocs.io/en/latest/users/basics/troubleshooting/#method-2-fix-port-conflicts-by-configuring-your-project-to-use-different-ports).

### MailHog [#](#mailHog "Direct link to MailHog")

MailHog is included by default with each new DDEV site.

Run `ddev describe` to get that project’s MailHog URL, or run `ddev launch -m`.

### Node.js & npm [#](#node-js-npm "Direct link to Node.js &amp; npm")

Each web container comes preinstalled with `node`, `npm`, `nvm`, and `yarn`. You can [configure the default versions](https://ddev.readthedocs.io/en/latest/users/basics/cli-usage/#nodejs-npm-nvm-and-yarn) and override that with the `ddev nvm` command.

If you run any additional web servers inside the web container—Vite or webpack, for example—you’ll need to [use a custom Docker Compose file](https://ddev.readthedocs.io/en/latest/users/extend/custom-compose-files/#docker-composeyaml-examples) to open the ports you’d like to use. One Darnley Road’s starter project has a [great example for using Vite with port 3000](https://github.com/onedarnleyroad/craftcms/blob/master/.ddev/docker-compose.vite.yaml).

## Cheat Sheet [#](#cheat-sheet "Direct link to Cheat Sheet")

Most Nitro commands have a DDEV equivalent.

| Nitro Command | DDEV Command |
| --- | --- |
| `nitro add` | `ddev config` |
| `nitro apply` | `ddev start` |
| `nitro bridge` | No DDEV equivalent. |
| `nitro clean` | `ddev clean` |
| `nitro completion` | See [Adding Shell Completion (bash, zsh, etc.)](https://ddev.readthedocs.io/en/latest/users/install/shell-completion/). |
| `nitro composer` | `ddev composer` |
| `nitro context` | `ddev describe` |
| `nitro craft` | `ddev php craft` |
| `nitro db add` | `ddev import-db --target --src` ([see docs](https://ddev.readthedocs.io/en/latest/users/basics/database_management/)) |
| `nitro db backup` | `ddev export-db` |
| `nitro db destroy` | No 1:1, but `ddev delete` removes project information including the database. |
| `nitro db import` | `ddev import-db` |
| `nitro db new` | Each engine is created when adding a database. |
| `nitro destroy` | See [Uninstalling DDEV](https://ddev.readthedocs.io/en/latest/users/basics/uninstall/). |
| `nitro disable` | `ddev service disable` |
| `nitro edit` | No DDEV equivalent. |
| `nitro enable` | `ddev service enable` |
| `nitro extensions` | No 1:1. See [Providing custom PHP configuration (php.ini)](https://ddev.readthedocs.io/en/latest/users/extend/customization-extendibility/#providing-custom-php-configuration-phpini). |
| `nitro help` | `ddev help` |
| `nitro hosts` | `ddev hostname` |
| `nitro iniset` | Static files. See [Extending and Customizing Environments](https://ddev.readthedocs.io/en/latest/users/extend/customization-extendibility/). |
| `nitro init` | Resources initialized on demand. |
| `nitro logs` | `ddev logs -f` |
| `nitro ls` | `ddev list` |
| `nitro npm` | `ddev exec npm` |
| `nitro php` | `ddev php` |
| `nitro portcheck` | Port conflicts are automatically called out. |
| `nitro queue` | `ddev php craft queue/listen --verbose` |
| `nitro remove` | `ddev delete` |
| `nitro restart` | `ddev restart` |
| `nitro self-update` | Depends on install method. See [Installation](https://ddev.readthedocs.io/en/latest/users/install/ddev-installation/). |
| `nitro share` | `ddev share` |
| `nitro ssh` | `ddev ssh` |
| `nitro start` | `ddev start` |
| `nitro stop` | `ddev poweroff` |
| `nitro trust` | n/a |
| `nitro update` | `ddev config` + `ddev start` for each project. |
| `nitro validate` | Project YAML validated on the fly. (i.e. for `ddev start`) |
| `nitro version` | `ddev version` |
| `nitro xoff` | `ddev xdebug off` |
| `nitro xon` | `ddev xdebug` / `ddev xdebug on` |

### Shell Aliases [#](#shell-aliases "Direct link to Shell Aliases")

If a common command like `ddev php craft` or `ddev xdebug on` is a bit too much keyboarding, you can create your own shell aliases:

```
alias ddev-craft="ddev exec php craft"
alias ddev-xon="ddev xdebug on"
alias ddev-xon="ddev xdebug off"
```

## Troubleshooting [#](#troubleshooting "Direct link to Troubleshooting")

If you run into issues with your migrated sites, check out [Troubleshooting a Failed Craft Installation](kb__troubleshooting-failed-installation.md) and [Troubleshooting Database Connection Issues](kb__troubleshooting-database-connection-issues.md).

If you’ve got an internal server error that’s not generating application-level logs, you may be able to use `ddev logs -f` to take a look at relevant container logs as they’re written.

If all else fails, consider troubleshooting in the #devops channel in the [Craft CMS Discord server](https://craftcms.com/discord) or popping by [DDEV’s own Discord server](https://discord.com/invite/hCZFfAMc5k).

## Further Reading [#](#further-reading "Direct link to Further Reading")

- [CraftQuest DDEV and Craft CMS Quick Start Guide](https://craftquest.io/courses/ddev-and-craft-cms-quick-start-guide)
- CraftQuest’s [Starter Code for Craft CMS](https://craftquest.io/articles/starter-code-for-craft-cms) article includes some opinionated Craft CMS scaffold projects, DDEV and beyond.

## Community Starter Projects [#](#community-starter-projects "Direct link to Community Starter Projects")

- [onedarnleyroad/craftcms](https://github.com/onedarnleyroad/craftcms)
- [CreateSean/craft-starter](https://github.com/CreateSean/craft-starter)
- [mikesnoeren/craft](https://github.com/mikesnoeren/craft)
- [jan-dh/modern-setup](https://github.com/jan-dh/modern-setup)

Applies to
Craft CMS 4.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
