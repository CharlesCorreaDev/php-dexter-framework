# Updating October CMS - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/resources/updating-october.html

---

# Updating October CMS

Instructions for keeping your October CMS website up to date.

- [Database Migration](docs__4.x__resources__updating-october.md#database-migration)
- [Bleeding Edge Updates](docs__4.x__resources__updating-october.md#bleeding-edge-updates)
- [Upgrade Guide from v1, v2 and v3](docs__4.x__resources__updating-october.md#upgrade-guide-from-v1-v2-and-v3)

The `october:update` command will request updates from the October gateway. It will update the core application and plugin files, then perform a database migration.

```
php artisan october:update
```

## [#](#database-migration) Database Migration

The `october:migrate` command will perform a database migration, creating database tables and executing seed scripts, provided by the system and [plugin version history](docs__4.x__plugin__updates.md). The migration command can be run multiple times, it will only execute a migration or seed script once, which means only new changes are applied.

```
php artisan october:migrate
```

The `--rollback` option will reverse all migrations, dropping database tables and deleting data. Care should be taken when using this command. The [plugin refresh command](docs__4.x__resources__installing-packages.md) is a useful alternative for debugging a single plugin.

```
php artisan october:migrate --rollback
```

The `--skip-errors` option will ignore any exceptions that occur during the migration process. This can be useful in cases where tables already exist, but version information should still be applied.

```
php artisan october:migrate --skip-errors
```

## [#](#bleeding-edge-updates) Bleeding Edge Updates

To receive bleeding edge updates of October CMS, change the minimum stability setting to `dev`.

```
composer config minimum-stability dev
```

Then target the `develop` branch in the composer.json file. For example:

```
"october/all": "dev-develop",
"october/rain": "dev-develop",
```

The `develop` branch includes updates that are not released in the stable channel yet. There can be the latest bug fixes and features, but at the same time, it can contain unfinished work. Enabling bleeding edge updates is not recommended for production environments.

The `dev-develop` notation may also apply to some plugins and themes.

## [#](#upgrade-guide-from-v1-v2-and-v3) Upgrade Guide from v1, v2 and v3

If your starting point is October CMS 3.0, please observe the following guides when performing the upgrade.

- [October CMS v4.0 Upgrade Guide  (opens new window)](https://octobercms.com/support/article/rn-39)

If your starting point is October CMS 2.0, please observe these guides before continuing with the above guides.

- [October CMS v3.0 Upgrade Guide  (opens new window)](https://octobercms.com/support/article/rn-30)
- [October CMS v3.1 Stable Release  (opens new window)](https://octobercms.com/support/article/rn-32)

If your starting point is October CMS 1.0, please observe these guides before continuing with the above guides.

- [October CMS v2.0 Upgrade Guide  (opens new window)](https://octobercms.com/support/article/rn-13)
- [October CMS v2.1 Stable Release  (opens new window)](https://octobercms.com/support/article/rn-27)

← [Errors & Logging](docs__4.x__setup__errors-logging.md)[Installing Plugins & Themes](docs__4.x__resources__installing-packages.md) →
