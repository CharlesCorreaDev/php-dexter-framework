# Console Commands | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/cli

---

# Console Commands

- ### On this Page

  - [cache](docs_5x__reference__cli.md#cache)
  - [clear-caches](docs_5x__reference__cli.md#clear-caches)
  - [clear-deprecations](docs_5x__reference__cli.md#clear-deprecations)
  - [db](docs_5x__reference__cli.md#db)
  - [elements](docs_5x__reference__cli.md#elements)
  - [entrify](docs_5x__reference__cli.md#entrify)
  - [entry-types](docs_5x__reference__cli.md#entry-types)
  - [env](docs_5x__reference__cli.md#env)
  - [exec](docs_5x__reference__cli.md#exec)
  - [fields](docs_5x__reference__cli.md#fields)
  - [fixture](docs_5x__reference__cli.md#fixture)
  - [gc](docs_5x__reference__cli.md#gc)
  - [graphql](docs_5x__reference__cli.md#graphql)
  - [help](docs_5x__reference__cli.md#help)
  - [index-assets](docs_5x__reference__cli.md#index-assets)
  - [install](docs_5x__reference__cli.md#install)
  - [invalidate-tags](docs_5x__reference__cli.md#invalidate-tags)
  - [mailer](docs_5x__reference__cli.md#mailer)
  - [migrate](docs_5x__reference__cli.md#migrate)
  - [off](docs_5x__reference__cli.md#off)
  - [on](docs_5x__reference__cli.md#on)
  - [pc](docs_5x__reference__cli.md#pc)
  - [plugin](docs_5x__reference__cli.md#plugin)
  - [project-config](docs_5x__reference__cli.md#project-config)
  - [queue](docs_5x__reference__cli.md#queue)
  - [resave](docs_5x__reference__cli.md#resave)
  - [sections](docs_5x__reference__cli.md#sections)
  - [serve](docs_5x__reference__cli.md#serve)
  - [setup](docs_5x__reference__cli.md#setup)
  - [shell](docs_5x__reference__cli.md#shell)
  - [tests](docs_5x__reference__cli.md#tests)
  - [up](docs_5x__reference__cli.md#up)
  - [update](docs_5x__reference__cli.md#update)
  - [update-statuses](docs_5x__reference__cli.md#update-statuses)
  - [users](docs_5x__reference__cli.md#users)
  - [utils/ascii-filenames](docs_5x__reference__cli.md#utils-ascii-filenames)
  - [utils/delete-empty-volume-folders](docs_5x__reference__cli.md#utils-delete-empty-volume-folders)
  - [utils/fix-element-uids](docs_5x__reference__cli.md#utils-fix-element-uids)
  - [utils/fix-field-layout-uids](docs_5x__reference__cli.md#utils-fix-field-layout-uids)
  - [utils/prune-orphaned-entries](docs_5x__reference__cli.md#utils-prune-orphaned-entries)
  - [utils/prune-provisional-drafts](docs_5x__reference__cli.md#utils-prune-provisional-drafts)
  - [utils/prune-revisions](docs_5x__reference__cli.md#utils-prune-revisions)
  - [utils/repair](docs_5x__reference__cli.md#utils-repair)
  - [utils/update-usernames](docs_5x__reference__cli.md#utils-update-usernames)

The complete list of available commands will include those from any plugins or custom modules you’ve added to your project. Only those that are present by default in all Craft installations are listed below.

Run `ddev craft help` to see a list of commands your project supports.

### [#](#global-options)Global Options

All commands support the following options:

`--color`
:   Explicitly enable or disable ANSI coloring in output. When omitted, color will only be used in environments that support it.

`--help`
:   Displays help about the command, rather than running it. Alternative to `php craft help controller/action`.

`--interactive`
:   Enable or disable interactive prompts for the command. When using the CLI in unattended or automated workflows (like CRON or deployments), consider setting `--interactive=0`.

`--isolated`
:   Acquire a [mutex lock  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-mutex-mutex) before running the command to prevent simultaneous execution. Some commands (like `migrate` and `project-config`) have their own internal locking mechanism.

`--silent-exit-on-exception`
:   Force a nominal exit code (`0`), even if an exception occurred. Useful when inconsequential failures would otherwise block chained commands in automated environments.

## [#](#cache)`cache`

Allows you to flush cache.

### [#](#cache-flush) `cache/flush`

Flushes given cache components.

For example,

```
# flushes caches specified by their id: "first", "second", "third"
yii cache/flush first second third
```

### [#](#cache-flush-all) `cache/flush-all`

Flushes all caches registered in the system.

### [#](#cache-flush-schema) `cache/flush-schema`

Clears DB schema cache for a given connection component.

```
# clears cache schema specified by component id: "db"
yii cache/flush-schema db
```

#### Parameters

db
:   id connection component

### [#](#cache-index) `cache`

Lists the caches that can be flushed.

## [#](#clear-caches)`clear-caches`

Allows you to clear various Craft caches.

### [#](#clear-caches-all) `clear-caches/all`

Clear all caches.

### [#](#clear-caches-asset) `clear-caches/asset`

Asset caches (Local copies of remote images, generated thumbnails)

### [#](#clear-caches-asset-indexing-data) `clear-caches/asset-indexing-data`

Asset indexing data

### [#](#clear-caches-compiled-classes) `clear-caches/compiled-classes`

Compiled classes (Contents of `storage/runtime/compiled_classes/`)

### [#](#clear-caches-compiled-templates) `clear-caches/compiled-templates`

Compiled templates (Contents of `storage/runtime/compiled_templates/`)

### [#](#clear-caches-cp-resources) `clear-caches/cp-resources`

Control panel resources (Contents of `@webroot/cpresources/`)

### [#](#clear-caches-data) `clear-caches/data`

Data caches (Anything cached with `Craft::$app->getCache()->set()`)

### [#](#clear-caches-index) `clear-caches`

Lists the caches that can be cleared.

#### Parameters

which
:   The cache(s) to clear

### [#](#clear-caches-temp-files) `clear-caches/temp-files`

Temp files (Contents of `storage/runtime/temp/`)

### [#](#clear-caches-transform-indexes) `clear-caches/transform-indexes`

Asset transform index (Record of generated image transforms)

## [#](#clear-deprecations)`clear-deprecations`

### [#](#clear-deprecations-index) `clear-deprecations`

Clears all deprecation warnings.

## [#](#db)`db`

Performs database operations.

### [#](#db-backup) `db/backup`

Creates a new database backup.

Example:

```
php craft db/backup ./my-backups/
```

#### Parameters

path
:   The path the database backup should be created at.
    Can be any of the following:

    - A full file path
    - A folder path (backup will be saved in there with a dynamically-generated name)
    - A filename (backup will be saved in the working directory with the given name)
    - Blank (backup will be saved to the `storage/backups/` folder with a dynamically-generated name)

#### Options

--zip
:   Whether the backup should be saved as a zip file.

--overwrite
:   Whether to overwrite an existing backup file, if a specific file path is given.

### [#](#db-convert-charset) `db/convert-charset`

Converts tables’ character sets and collations. (MySQL only)

Example:

```
php craft db/convert-charset utf8 utf8_unicode_ci
```

#### Parameters

charset
:   The target character set, which honors `DbConfig::$charset`
    or defaults to `utf8`.

collation
:   The target collation, which honors `DbConfig::$collation`
    or defaults to `utf8mb4_0900_ai_ci` for MySQL 8.0+,
    otherwise, `utf8mb4_unicode_ci` for MariaDB and earlier
    MySQL versions.

### [#](#db-drop-all-tables) `db/drop-all-tables`

Drops all tables in the database.

Example:

```
php craft db/drop-all-tables
```

### [#](#db-drop-table-prefix) `db/drop-table-prefix`

Drops the database table prefix from all tables.

#### Parameters

prefix
:   The current table prefix. If omitted, the prefix will be detected automatically.

### [#](#db-repair) `db/repair`

Repairs all tables in the database.

Note that this can cause table locking, which could interfere with SQL being executed.

### [#](#db-restore) `db/restore`

Restores a database backup.

Example:

```
php craft db/restore ./my-backup.sql
```

#### Parameters

path
:   The path to the database backup file.

#### Options

--drop-all-tables
:   Whether to drop all preexisting tables in the database prior to restoring the backup.

## [#](#elements)`elements`

Manages elements.

### [#](#elements-delete) `elements/delete`

Deletes an element by its ID.

#### Parameters

id
:   The element ID to delete.

#### Options

--hard
:   Whether the element should be hard-deleted.

### [#](#elements-delete-all-of-type) `elements/delete-all-of-type`

Deletes all elements of a given type.

#### Parameters

type
:   The element type to delete.

#### Options

--dry-run
:   Whether to only do a dry run of the prune elements of type process.

### [#](#elements-restore) `elements/restore`

Restores an element by its ID.

#### Parameters

id
:   The element ID to restore.

## [#](#entrify)`entrify`

Converts categories, tags, and global sets to entries.

### [#](#entrify-categories) `entrify/categories`

Converts categories to entries.

#### Parameters

categoryGroup
:   The category group handle

#### Options

--section
:   The section handle that entries should be saved in

--entry-type
:   The entry type handle that entries should have

--author
:   The author username or email that entries should have

### [#](#entrify-global-set) `entrify/global-set`

Converts a global set to a Single section.

#### Parameters

globalSet
:   The global set handle

#### Options

--section
:   The section handle that entries should be saved in

### [#](#entrify-tags) `entrify/tags`

Converts tags to entries.

#### Parameters

tagGroup
:   The tag group handle

#### Options

--section
:   The section handle that entries should be saved in

--entry-type
:   The entry type handle that entries should have

--author
:   The author username or email that entries should have

## [#](#entry-types)`entry-types`

### [#](#entry-types-merge) `entry-types/merge`

Merges two entry types.

#### Parameters

handleA
:

handleB
:

## [#](#env)`env`

Sets or removes environment variables in the `.env` file.

### [#](#env-remove) `env/remove`

Removes an environment variable from the `.env` file.

```
php craft env/remove CRAFT_DEV_MODE
```

#### Parameters

name
:

### [#](#env-set) `env/set`

Sets an environment variable in the `.env` file.

```
php craft env/set CRAFT_DEV_MODE true
```

#### Parameters

name
:

value
:

### [#](#env-show) `env/show`

Displays the value of an environment variable, or sets its value if $name contains `=`.

```
php craft env CRAFT_DEV_MODE
php craft env CRAFT_DEV_MODE=true
```

#### Parameters

name
:

## [#](#exec)`exec`

### [#](#exec-exec) `exec/exec`

Executes a PHP statement and outputs the result.

#### Parameters

command
:

## [#](#fields)`fields`

Manages custom fields.

### [#](#fields-auto-merge) `fields/auto-merge`

Finds fields with identical settings and merges them together.

### [#](#fields-delete) `fields/delete`

Deletes custom fields.

#### Parameters

handles
:   ...$handles

### [#](#fields-merge) `fields/merge`

Merges custom fields together.

#### Parameters

handles
:   ...$handles

## [#](#fixture)`fixture`

Allows you to manage test fixtures.

### [#](#fixture-load) `fixture/load`

Loads the specified fixture data.

For example,

```
# load the fixture data specified by User and UserProfile.
# any existing fixture data will be removed first
yii fixture/load "User, UserProfile"

# load all available fixtures found under 'tests\unit\fixtures'
yii fixture/load "*"

# load all fixtures except User and UserProfile
yii fixture/load "*, -User, -UserProfile"
```

#### Parameters

fixturesInput
:

#### Options

--namespace, -n
:   default namespace to search fixtures in

--global-fixtures, -g
:   global fixtures that should be applied when loading and unloading. By default it is set to `InitDbFixture`
    that disables and enables integrity check, so your data can be safely loaded.

### [#](#fixture-unload) `fixture/unload`

Unloads the specified fixtures.

For example,

```
# unload the fixture data specified by User and UserProfile.
yii fixture/unload "User, UserProfile"

# unload all fixtures found under 'tests\unit\fixtures'
yii fixture/unload "*"

# unload all fixtures except User and UserProfile
yii fixture/unload "*, -User, -UserProfile"
```

#### Parameters

fixturesInput
:

#### Options

--namespace, -n
:   default namespace to search fixtures in

--global-fixtures, -g
:   global fixtures that should be applied when loading and unloading. By default it is set to `InitDbFixture`
    that disables and enables integrity check, so your data can be safely loaded.

## [#](#gc)`gc`

### [#](#gc-run) `gc/run`

Runs garbage collection.

#### Options

--delete-all-trashed
:   Whether all soft-deleted items should be deleted, rather than just
    the ones that were deleted long enough ago to be ready for hard-deletion
    per the `softDeleteDuration` config setting.

## [#](#graphql)`graphql`

Allows you to manage GraphQL schemas.

### [#](#graphql-create-token) `graphql/create-token`

Creates a new authorization token for a schema.

#### Parameters

schemaUid
:   The schema UUID

#### Options

--name
:   The schema name

--expiry
:   Expiry date

### [#](#graphql-dump-schema) `graphql/dump-schema`

Dumps a given GraphQL schema to a file.

#### Options

--schema
:   The GraphQL schema UUID.

--token
:   The token to look up to determine the appropriate GraphQL schema.

--full-schema
:   Whether full schema should be printed or dumped.

### [#](#graphql-list-schemas) `graphql/list-schemas`

Lists all GraphQL schemas.

### [#](#graphql-print-schema) `graphql/print-schema`

Prints a given GraphQL schema.

#### Options

--schema
:   The GraphQL schema UUID.

--token
:   The token to look up to determine the appropriate GraphQL schema.

--full-schema
:   Whether full schema should be printed or dumped.

## [#](#help)`help`

Provides help information about console commands.

### [#](#help-index) `help`

Displays available commands or the detailed information
about a particular command.

#### Parameters

command
:   The name of the command to show help about.
    If not provided, all available commands will be displayed.

#### Options

--as-json, -j
:   Should the commands help be returned in JSON format?

### [#](#help-list) `help/list`

List all available controllers and actions in machine readable format.
This is used for shell completion.

### [#](#help-list-action-options) `help/list-action-options`

List all available options for the $action in machine readable format.
This is used for shell completion.

#### Parameters

action
:   route to action

### [#](#help-usage) `help/usage`

Displays usage information for $action.

#### Parameters

action
:   route to action

## [#](#index-assets)`index-assets`

Allows you to re-index assets in volumes.

### [#](#index-assets-all) `index-assets/all`

Re-indexes assets across all volumes.

#### Options

--cache-remote-images
:   Whether remote-stored images should be locally cached in the process.

--create-missing-assets
:   Whether to auto-create new asset records when missing.

--delete-missing-assets
:   Whether to delete all the asset records that have their files missing.

--delete-empty-folders
:   Whether empty folders should be deleted.

### [#](#index-assets-cleanup) `index-assets/cleanup`

Removes all CLI indexing sessions.

### [#](#index-assets-one) `index-assets/one`

Re-indexes assets from the given volume handle.

#### Parameters

handle
:   The handle of the volume to index.
    You can optionally provide a volume sub-path, e.g. `php craft index-assets/one volume-handle/path/to/folder`.

startAt
:   Index of the asset to start with, which defaults to `0`.

#### Options

--cache-remote-images
:   Whether remote-stored images should be locally cached in the process.

--create-missing-assets
:   Whether to auto-create new asset records when missing.

--delete-missing-assets
:   Whether to delete all the asset records that have their files missing.

--delete-empty-folders
:   Whether empty folders should be deleted.

## [#](#install)`install`

Craft CMS CLI installer.

### [#](#install-check) `install/check`

Checks whether Craft is already installed.

### [#](#install-craft) `install/craft`

Runs the install migration.

#### Options

--email
:   The default email address for the first user to create during install.

--username
:   The default username for the first user to create during install.

--password
:   The default password for the first user to create during install.

--site-name
:   The default site name for the first site to create during install.

--site-url
:   The default site URL for the first site to create during install.

--language
:   The default language for the first site to create during install.

## [#](#invalidate-tags)`invalidate-tags`

Allows you to invalidate cache tags.

### [#](#invalidate-tags-all) `invalidate-tags/all`

Clear all caches.

### [#](#invalidate-tags-graphql) `invalidate-tags/graphql`

Invalidates caches with the configured tag.

### [#](#invalidate-tags-index) `invalidate-tags`

Lists the caches that can be cleared.

### [#](#invalidate-tags-template) `invalidate-tags/template`

Invalidates caches with the configured tag.

## [#](#mailer)`mailer`

### [#](#mailer-test) `mailer/test`

Tests sending an email with the current mailer settings.

#### Options

--to
:   Email address that should receive the test message.

## [#](#migrate)`migrate`

Manages Craft and plugin migrations.

### [#](#migrate-all) `migrate/all`

Runs all pending Craft, plugin, and content migrations.

#### Options

--no-content
:   Exclude pending content migrations.

--no-backup
:   Skip backing up the database.

### [#](#migrate-create) `migrate/create`

Creates a new migration.

This command creates a new migration using the available migration template.
After using this command, developers should modify the created migration
skeleton by filling up the actual migration logic.

```
craft migrate/create create_news_section
```

By default, the migration is created in the project’s `migrations/`
folder (as a “content migration”).  
Use `--plugin=<plugin-handle>` to create a new plugin migration.  
Use `--type=app` to create a new Craft CMS app migration.

#### Parameters

name
:   the name of the new migration. This should only contain
    letters, digits, and underscores.

#### Options

--track
:   The migration track to work with (e.g. `craft`, `content`, `plugin:commerce`, etc.)

    Defaults to `content`, or automatically set to the plugin’s track when `--plugin` is passed.

--plugin, -p
:   The handle of the plugin to use during migration operations, or the plugin itself.

--template-file
:   the template file for generating new migrations.
    This can be either a [path alias  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-aliases) (e.g. "@app/migrations/template.php")
    or a file path.

### [#](#migrate-down) `migrate/down`

Downgrades the application by reverting old migrations.

For example,

```
yii migrate/down     # revert the last migration
yii migrate/down 3   # revert the last 3 migrations
yii migrate/down all # revert all migrations
```

#### Parameters

limit
:   the number of migrations to be reverted. Defaults to 1,
    meaning the last applied migration will be reverted. When value is "all", all migrations will be reverted.

#### Options

--track
:   The migration track to work with (e.g. `craft`, `content`, `plugin:commerce`, etc.)

    Defaults to `content`, or automatically set to the plugin’s track when `--plugin` is passed.

--plugin, -p
:   The handle of the plugin to use during migration operations, or the plugin itself.

### [#](#migrate-history) `migrate/history`

Displays the migration history.

This command will show the list of migrations that have been applied
so far. For example,

```
yii migrate/history     # showing the last 10 migrations
yii migrate/history 5   # showing the last 5 migrations
yii migrate/history all # showing the whole history
```

#### Parameters

limit
:   the maximum number of migrations to be displayed.
    If it is "all", the whole migration history will be displayed.

#### Options

--track
:   The migration track to work with (e.g. `craft`, `content`, `plugin:commerce`, etc.)

    Defaults to `content`, or automatically set to the plugin’s track when `--plugin` is passed.

--plugin, -p
:   The handle of the plugin to use during migration operations, or the plugin itself.

### [#](#migrate-mark) `migrate/mark`

Modifies the migration history to the specified version.

No actual migration will be performed.

```
yii migrate/mark 101129_185401                        # using timestamp
yii migrate/mark m101129_185401_create_user_table     # using full name
yii migrate/mark app\migrations\M101129185401CreateUser # using full namespace name
yii migrate/mark m000000_000000_base # reset the complete migration history
```

#### Parameters

version
:   the version at which the migration history should be marked.
    This can be either the timestamp or the full name of the migration.
    You may specify the name `m000000_000000_base` to set the migration history to a
    state where no migration has been applied.

#### Options

--track
:   The migration track to work with (e.g. `craft`, `content`, `plugin:commerce`, etc.)

    Defaults to `content`, or automatically set to the plugin’s track when `--plugin` is passed.

--plugin, -p
:   The handle of the plugin to use during migration operations, or the plugin itself.

### [#](#migrate-new) `migrate/new`

Displays the un-applied new migrations.

This command will show the new migrations that have not been applied.
For example,

```
yii migrate/new     # showing the first 10 new migrations
yii migrate/new 5   # showing the first 5 new migrations
yii migrate/new all # showing all new migrations
```

#### Parameters

limit
:   the maximum number of new migrations to be displayed.
    If it is `all`, all available new migrations will be displayed.

#### Options

--track
:   The migration track to work with (e.g. `craft`, `content`, `plugin:commerce`, etc.)

    Defaults to `content`, or automatically set to the plugin’s track when `--plugin` is passed.

--plugin, -p
:   The handle of the plugin to use during migration operations, or the plugin itself.

### [#](#migrate-redo) `migrate/redo`

Redoes the last few migrations.

This command will first revert the specified migrations, and then apply
them again. For example,

```
yii migrate/redo     # redo the last applied migration
yii migrate/redo 3   # redo the last 3 applied migrations
yii migrate/redo all # redo all migrations
```

#### Parameters

limit
:   the number of migrations to be redone. Defaults to 1,
    meaning the last applied migration will be redone. When equals "all", all migrations will be redone.

#### Options

--track
:   The migration track to work with (e.g. `craft`, `content`, `plugin:commerce`, etc.)

    Defaults to `content`, or automatically set to the plugin’s track when `--plugin` is passed.

--plugin, -p
:   The handle of the plugin to use during migration operations, or the plugin itself.

### [#](#migrate-to) `migrate/to`

Upgrades or downgrades till the specified version.

Can also downgrade versions to the certain apply time in the past by providing
a UNIX timestamp or a string parseable by the strtotime() function. This means
that all the versions applied after the specified certain time would be reverted.

This command will first revert the specified migrations, and then apply
them again. For example,

```
yii migrate/to 101129_185401                          # using timestamp
yii migrate/to m101129_185401_create_user_table       # using full name
yii migrate/to 1392853618                             # using UNIX timestamp
yii migrate/to "2014-02-15 13:00:50"                  # using strtotime() parseable string
yii migrate/to app\migrations\M101129185401CreateUser # using full namespace name
```

#### Parameters

version
:   either the version name or the certain time value in the past
    that the application should be migrated to. This can be either the timestamp,
    the full name of the migration, the UNIX timestamp, or the parseable datetime
    string.

#### Options

--track
:   The migration track to work with (e.g. `craft`, `content`, `plugin:commerce`, etc.)

    Defaults to `content`, or automatically set to the plugin’s track when `--plugin` is passed.

--plugin, -p
:   The handle of the plugin to use during migration operations, or the plugin itself.

### [#](#migrate-up) `migrate/up`

Upgrades Craft by applying new migrations.

Example:

```
php craft migrate     # apply all new migrations
php craft migrate 3   # apply the first 3 new migrations
```

#### Parameters

limit
:   The number of new migrations to be applied. If `0`, every new migration
    will be applied.

#### Options

--track
:   The migration track to work with (e.g. `craft`, `content`, `plugin:commerce`, etc.)

    Defaults to `content`, or automatically set to the plugin’s track when `--plugin` is passed.

--plugin, -p
:   The handle of the plugin to use during migration operations, or the plugin itself.

## [#](#off)`off`

### [#](#off-index) `off`

Disables `system.live` project config value—bypassing any `allowAdminChanges` config setting
restrictions—meant for temporary use during the deployment process.

#### Options

--retry
:   Number of seconds the `Retry-After` HTTP header should be set to for 503 responses.

    The “Retry Duration” general setting can be used to configure a *system-wide* `Retry-After` header.

    The `isSystemLive` config setting takes precedence over the `system.live` project config value,
    so if `config/general.php` sets `isSystemLive` to `true` or `false` these `on`/`off` commands error out.

    **Example**

    Running the following takes the system offline and returns 503 responses until it’s switched on again:

    ```
    $ php craft off --retry=60
    The system is now offline.
    The retry duration is now set to 60.
    ```

## [#](#on)`on`

### [#](#on-index) `on`

Turns the system on.

Example:

```
$ php craft on
The system is now online.
```

## [#](#pc)`pc`

Alias of project-config.

### [#](#pc-apply) `pc/apply`

Applies project config file changes.

#### Options

--force
:   Whether every entry change should be force-applied.

--quiet
:   Whether to reduce the command output.

### [#](#pc-diff) `pc/diff`

Outputs a diff of the pending project config YAML changes.

#### Options

--invert
:   Whether to treat the loaded project config as the source of truth, instead of the YAML files.

### [#](#pc-export) `pc/export`

Exports the entire project config to a single file.

#### Parameters

path
:   The path the project config should be exported to.
    Can be any of the following:

    - A full file path
    - A folder path (export will be saved in there with a dynamically-generated name)
    - A filename (export will be saved in the working directory with the given name)
    - Blank (export will be saved in the working directly with a dynamically-generated name)

#### Options

--external
:   Whether to pull values from the project config YAML files instead of the loaded config.

--overwrite
:   Whether to overwrite an existing export file, if a specific file path is given.

### [#](#pc-get) `pc/get`

Outputs a project config value.

Example:

```
php craft project-config/get system.edition
```

The “path” syntax used here may be composed of directory and filenames (within your `config/project` folder), YAML object keys (including UUIDs for many Craft resources), and integers (referencing numerically-indexed arrays), joined by a dot (`.`): `path.to.nested.array.0.property`.

#### Parameters

path
:   The config item path

#### Options

--external
:   Whether to pull values from the project config YAML files instead of the loaded config.

### [#](#pc-rebuild) `pc/rebuild`

Rebuilds the project config.

### [#](#pc-remove) `pc/remove`

Removes a project config value.

Example:

```
php craft project-config/remove some.nested.key
```

This should only be used when the equivalent change is not possible through the control panel or other Craft APIs. By directly modifying project config values, you are bypassing all validation and can easily destabilize configuration.

As with [set](#project-config-set), removing values only updates the root `dateModified` key when using the [`--update-timestamp` flag](#project-config-set-options). If you do not include this flag, you must run `project-config/touch` before changes will be detected or applied in other environments!

#### Parameters

path
:   The config item path

### [#](#pc-set) `pc/set`

Sets a project config value.

Example:

```
php craft project-config/set some.nested.key
```

See [get](#project-config-get) for the accepted key formats.

This should only be used when the equivalent change is not possible through the control panel or other Craft APIs. By directly modifying project config values, you are bypassing all validation and can easily destabilize configuration.

Values are updated in the database *and* in your local YAML files, but the root `dateModified` project config property is only touched when using the [`--update-timestamp` flag](#project-config-set-options). If you do not update the timestamp along with the value, the change may not be detected or applied in other environments!

#### Parameters

path
:   The config item path

value
:   The config item value as a valid YAML string

#### Options

--force
:   Whether every entry change should be force-applied.

--message
:   A message describing the changes.

--update-timestamp
:   Whether the `dateModified` value should be updated

### [#](#pc-touch) `pc/touch`

Updates the `dateModified` value in `config/project/project.yaml`, attempting to resolve a Git conflict for it.

### [#](#pc-write) `pc/write`

Writes out the currently-loaded project config as YAML files to the `config/project/` folder, discarding any pending YAML changes.

## [#](#plugin)`plugin`

Manages plugins.

### [#](#plugin-disable) `plugin/disable`

Disables a plugin.

#### Parameters

handle
:   The plugin handle (omitted if --all provided).

#### Options

--all
:   Whether the action should be run for all Composer-installed plugins.

### [#](#plugin-enable) `plugin/enable`

Enables a plugin.

#### Parameters

handle
:   The plugin handle (omitted if --all provided).

#### Options

--all
:   Whether the action should be run for all Composer-installed plugins.

### [#](#plugin-install) `plugin/install`

Installs a plugin.

#### Parameters

handle
:   The plugin handle (omitted if --all provided).

edition
:

#### Options

--all
:   Whether the action should be run for all Composer-installed plugins.

### [#](#plugin-list) `plugin/list`

Lists all plugins.

### [#](#plugin-uninstall) `plugin/uninstall`

Uninstalls a plugin.

#### Parameters

handle
:   The plugin handle (omitted if --all provided).

#### Options

--force
:   Whether the plugin uninstallation should be forced.

--all
:   Whether the action should be run for all Composer-installed plugins.

## [#](#project-config)`project-config`

Manages the Project Config.

### [#](#project-config-apply) `project-config/apply`

Applies project config file changes.

#### Options

--force
:   Whether every entry change should be force-applied.

--quiet
:   Whether to reduce the command output.

### [#](#project-config-diff) `project-config/diff`

Outputs a diff of the pending project config YAML changes.

#### Options

--invert
:   Whether to treat the loaded project config as the source of truth, instead of the YAML files.

### [#](#project-config-export) `project-config/export`

Exports the entire project config to a single file.

#### Parameters

path
:   The path the project config should be exported to.
    Can be any of the following:

    - A full file path
    - A folder path (export will be saved in there with a dynamically-generated name)
    - A filename (export will be saved in the working directory with the given name)
    - Blank (export will be saved in the working directly with a dynamically-generated name)

#### Options

--external
:   Whether to pull values from the project config YAML files instead of the loaded config.

--overwrite
:   Whether to overwrite an existing export file, if a specific file path is given.

### [#](#project-config-get) `project-config/get`

Outputs a project config value.

Example:

```
php craft project-config/get system.edition
```

The “path” syntax used here may be composed of directory and filenames (within your `config/project` folder), YAML object keys (including UUIDs for many Craft resources), and integers (referencing numerically-indexed arrays), joined by a dot (`.`): `path.to.nested.array.0.property`.

#### Parameters

path
:   The config item path

#### Options

--external
:   Whether to pull values from the project config YAML files instead of the loaded config.

### [#](#project-config-rebuild) `project-config/rebuild`

Rebuilds the project config.

### [#](#project-config-remove) `project-config/remove`

Removes a project config value.

Example:

```
php craft project-config/remove some.nested.key
```

This should only be used when the equivalent change is not possible through the control panel or other Craft APIs. By directly modifying project config values, you are bypassing all validation and can easily destabilize configuration.

As with [set](#project-config-set), removing values only updates the root `dateModified` key when using the [`--update-timestamp` flag](#project-config-set-options). If you do not include this flag, you must run `project-config/touch` before changes will be detected or applied in other environments!

#### Parameters

path
:   The config item path

### [#](#project-config-set) `project-config/set`

Sets a project config value.

Example:

```
php craft project-config/set some.nested.key
```

See [get](#project-config-get) for the accepted key formats.

This should only be used when the equivalent change is not possible through the control panel or other Craft APIs. By directly modifying project config values, you are bypassing all validation and can easily destabilize configuration.

Values are updated in the database *and* in your local YAML files, but the root `dateModified` project config property is only touched when using the [`--update-timestamp` flag](#project-config-set-options). If you do not update the timestamp along with the value, the change may not be detected or applied in other environments!

#### Parameters

path
:   The config item path

value
:   The config item value as a valid YAML string

#### Options

--force
:   Whether every entry change should be force-applied.

--message
:   A message describing the changes.

--update-timestamp
:   Whether the `dateModified` value should be updated

### [#](#project-config-touch) `project-config/touch`

Updates the `dateModified` value in `config/project/project.yaml`, attempting to resolve a Git conflict for it.

### [#](#project-config-write) `project-config/write`

Writes out the currently-loaded project config as YAML files to the `config/project/` folder, discarding any pending YAML changes.

## [#](#queue)`queue`

Manages the queue.

### [#](#queue-exec) `queue/exec`

Executes a job.
The command is internal, and used to isolate a job execution. Manual usage is not provided.

#### Parameters

id
:   of a message

ttr
:   time to reserve

attempt
:   number

pid
:   of a worker

#### Options

--verbose, -v
:   verbose mode of a job execute. If enabled, execute result of each job
    will be printed.

### [#](#queue-info) `queue/info`

Info about queue status.

### [#](#queue-listen) `queue/listen`

Listens for new jobs added to the queue and runs them.

#### Parameters

timeout
:   The number of seconds to wait between cycles.

#### Options

--verbose, -v
:   verbose mode of a job execute. If enabled, execute result of each job
    will be printed.

--isolate
:   isolate mode. It executes a job in a child process.

--php-binary
:   path to php interpreter that uses to run child processes.
    If it is undefined, PHP\_BINARY will be used.

### [#](#queue-release) `queue/release`

Releases job(s) from the queue.

Example:

```
php craft queue/release all
```

#### Parameters

job
:   The job ID to release. Pass `all` to release all jobs.

### [#](#queue-retry) `queue/retry`

Re-adds a failed job(s) to the queue.

#### Parameters

job
:   The job ID that should be retried, or `all` to retry all failed jobs.

### [#](#queue-run) `queue/run`

Runs all jobs in the queue.

#### Options

--job-id
:   The job ID to run

--verbose, -v
:   verbose mode of a job execute. If enabled, execute result of each job
    will be printed.

--isolate
:   isolate mode. It executes a job in a child process.

--php-binary
:   path to php interpreter that uses to run child processes.
    If it is undefined, PHP\_BINARY will be used.

## [#](#resave)`resave`

Allows you to bulk-save elements.

### [#](#resave-addresses) `resave/addresses`

Re-saves user addresses.

#### Options

--queue
:   Whether the elements should be resaved via a queue job.

--batch-size
:   The number of entries that should be resaved per queue job, if --queue is passed.

--element-id
:   The ID(s) of the elements to resave.

--uid
:   The UUID(s) of the elements to resave.

--site
:   The site handle to fetch elements from.

--status
:   The status(es) of elements to resave. Can be set to multiple comma-separated statuses.

--offset
:   The number of elements to skip.

--limit
:   The number of elements to resave.

--update-search-index
:   Whether to update the search indexes for the resaved elements.

--touch
:   Whether to update the `dateUpdated` timestamp for the elements.

--owner-id
:   Comma-separated list of owner element IDs.

--country-code
:   Comma-separated list of country codes.

--with-fields
:   Only resave elements that have custom fields with these global field handles.

--set
:   An attribute name that should be set for each of the elements. The value will be determined by --to.

--to
:   The value that should be set on the --set attribute.

    The following value types are supported:

    - An attribute name: `--to myCustomField`
    - An object template: `--to "={myCustomField|lower}"`
    - A raw value: `--to "=foo bar"`
    - A PHP arrow function: `--to "fn(\$element) => \$element->callSomething()"`
    - An empty value: `--to :empty:`

--to-default
:   Sets the specified fields to their default values.

--if-empty
:   Whether the `--set` attribute should only be set if it doesn’t have a value.

--if-invalid
:   Whether the `--set` attribute should only be set if the current value doesn’t validate.

### [#](#resave-all) `resave/all`

Runs all other `resave/*` commands.

#### Options

--queue
:   Whether the elements should be resaved via a queue job.

--batch-size
:   The number of entries that should be resaved per queue job, if --queue is passed.

--element-id
:   The ID(s) of the elements to resave.

--uid
:   The UUID(s) of the elements to resave.

--site
:   The site handle to fetch elements from.

--status
:   The status(es) of elements to resave. Can be set to multiple comma-separated statuses.

--offset
:   The number of elements to skip.

--limit
:   The number of elements to resave.

--update-search-index
:   Whether to update the search indexes for the resaved elements.

--touch
:   Whether to update the `dateUpdated` timestamp for the elements.

--with-fields
:   Only resave elements that have custom fields with these global field handles.

--set
:   An attribute name that should be set for each of the elements. The value will be determined by --to.

--to
:   The value that should be set on the --set attribute.

    The following value types are supported:

    - An attribute name: `--to myCustomField`
    - An object template: `--to "={myCustomField|lower}"`
    - A raw value: `--to "=foo bar"`
    - A PHP arrow function: `--to "fn(\$element) => \$element->callSomething()"`
    - An empty value: `--to :empty:`

--to-default
:   Sets the specified fields to their default values.

--if-empty
:   Whether the `--set` attribute should only be set if it doesn’t have a value.

--if-invalid
:   Whether the `--set` attribute should only be set if the current value doesn’t validate.

### [#](#resave-assets) `resave/assets`

Re-saves assets.

#### Options

--queue
:   Whether the elements should be resaved via a queue job.

--batch-size
:   The number of entries that should be resaved per queue job, if --queue is passed.

--element-id
:   The ID(s) of the elements to resave.

--uid
:   The UUID(s) of the elements to resave.

--site
:   The site handle to fetch elements from.

--status
:   The status(es) of elements to resave. Can be set to multiple comma-separated statuses.

--offset
:   The number of elements to skip.

--limit
:   The number of elements to resave.

--update-search-index
:   Whether to update the search indexes for the resaved elements.

--touch
:   Whether to update the `dateUpdated` timestamp for the elements.

--volume
:   The volume handle(s) to save assets from. Can be set to multiple comma-separated volumes.

--with-fields
:   Only resave elements that have custom fields with these global field handles.

--set
:   An attribute name that should be set for each of the elements. The value will be determined by --to.

--to
:   The value that should be set on the --set attribute.

    The following value types are supported:

    - An attribute name: `--to myCustomField`
    - An object template: `--to "={myCustomField|lower}"`
    - A raw value: `--to "=foo bar"`
    - A PHP arrow function: `--to "fn(\$element) => \$element->callSomething()"`
    - An empty value: `--to :empty:`

--to-default
:   Sets the specified fields to their default values.

--if-empty
:   Whether the `--set` attribute should only be set if it doesn’t have a value.

--if-invalid
:   Whether the `--set` attribute should only be set if the current value doesn’t validate.

### [#](#resave-categories) `resave/categories`

Re-saves categories.

#### Options

--queue
:   Whether the elements should be resaved via a queue job.

--batch-size
:   The number of entries that should be resaved per queue job, if --queue is passed.

--element-id
:   The ID(s) of the elements to resave.

--uid
:   The UUID(s) of the elements to resave.

--site
:   The site handle to fetch elements from.

--status
:   The status(es) of elements to resave. Can be set to multiple comma-separated statuses.

--offset
:   The number of elements to skip.

--limit
:   The number of elements to resave.

--update-search-index
:   Whether to update the search indexes for the resaved elements.

--touch
:   Whether to update the `dateUpdated` timestamp for the elements.

--group
:   The group handle(s) to save categories/tags/users from. Can be set to multiple comma-separated groups.

--with-fields
:   Only resave elements that have custom fields with these global field handles.

--set
:   An attribute name that should be set for each of the elements. The value will be determined by --to.

--to
:   The value that should be set on the --set attribute.

    The following value types are supported:

    - An attribute name: `--to myCustomField`
    - An object template: `--to "={myCustomField|lower}"`
    - A raw value: `--to "=foo bar"`
    - A PHP arrow function: `--to "fn(\$element) => \$element->callSomething()"`
    - An empty value: `--to :empty:`

--to-default
:   Sets the specified fields to their default values.

--if-empty
:   Whether the `--set` attribute should only be set if it doesn’t have a value.

--if-invalid
:   Whether the `--set` attribute should only be set if the current value doesn’t validate.

### [#](#resave-entries) `resave/entries`

Re-saves entries.

#### Options

--queue
:   Whether the elements should be resaved via a queue job.

--batch-size
:   The number of entries that should be resaved per queue job, if --queue is passed.

--drafts
:   Whether to resave element drafts.
    Set to `null` if all elements should be resaved regardless of whether they’re drafts.

--provisional-drafts
:   Whether to resave provisional element drafts.
    Set to `null` if all elements should be resaved regardless of whether they’re provisional drafts.

--revisions
:   Whether to resave element revisions.
    Set to `null` if all elements should be resaved regardless of whether they’re revisions.

--element-id
:   The ID(s) of the elements to resave.

--uid
:   The UUID(s) of the elements to resave.

--site
:   The site handle to fetch elements from.

--propagate-to
:   Comma-separated site handles to propagate entries to.

    When this is set, the entry will *only* be saved for this site.

--status
:   The status(es) of elements to resave. Can be set to multiple comma-separated statuses.

--offset
:   The number of elements to skip.

--limit
:   The number of elements to resave.

--update-search-index
:   Whether to update the search indexes for the resaved elements.

--touch
:   Whether to update the `dateUpdated` timestamp for the elements.

--section
:   The section handle(s) to save entries from. Can be set to multiple comma-separated sections.

--all-sections
:   Whether all sections’ entries should be saved.

--type
:   The type handle(s) of the elements to resave.

--field
:   The field handle to save nested entries for.

--owner-id
:   Comma-separated list of owner element IDs.

--with-fields
:   Only resave elements that have custom fields with these global field handles.

--set
:   An attribute name that should be set for each of the elements. The value will be determined by --to.

--set-enabled-for-site
:   The site-enabled status that should be set on the entry, for the site it’s initially being saved/propagated to.

--to
:   The value that should be set on the --set attribute.

    The following value types are supported:

    - An attribute name: `--to myCustomField`
    - An object template: `--to "={myCustomField|lower}"`
    - A raw value: `--to "=foo bar"`
    - A PHP arrow function: `--to "fn(\$element) => \$element->callSomething()"`
    - An empty value: `--to :empty:`

--to-default
:   Sets the specified fields to their default values.

--if-empty
:   Whether the `--set` attribute should only be set if it doesn’t have a value.

--if-invalid
:   Whether the `--set` attribute should only be set if the current value doesn’t validate.

### [#](#resave-tags) `resave/tags`

Re-saves tags.

#### Options

--queue
:   Whether the elements should be resaved via a queue job.

--batch-size
:   The number of entries that should be resaved per queue job, if --queue is passed.

--element-id
:   The ID(s) of the elements to resave.

--uid
:   The UUID(s) of the elements to resave.

--site
:   The site handle to fetch elements from.

--status
:   The status(es) of elements to resave. Can be set to multiple comma-separated statuses.

--offset
:   The number of elements to skip.

--limit
:   The number of elements to resave.

--update-search-index
:   Whether to update the search indexes for the resaved elements.

--touch
:   Whether to update the `dateUpdated` timestamp for the elements.

--group
:   The group handle(s) to save categories/tags/users from. Can be set to multiple comma-separated groups.

--with-fields
:   Only resave elements that have custom fields with these global field handles.

--set
:   An attribute name that should be set for each of the elements. The value will be determined by --to.

--to
:   The value that should be set on the --set attribute.

    The following value types are supported:

    - An attribute name: `--to myCustomField`
    - An object template: `--to "={myCustomField|lower}"`
    - A raw value: `--to "=foo bar"`
    - A PHP arrow function: `--to "fn(\$element) => \$element->callSomething()"`
    - An empty value: `--to :empty:`

--to-default
:   Sets the specified fields to their default values.

--if-empty
:   Whether the `--set` attribute should only be set if it doesn’t have a value.

--if-invalid
:   Whether the `--set` attribute should only be set if the current value doesn’t validate.

### [#](#resave-users) `resave/users`

Re-saves users.

#### Options

--queue
:   Whether the elements should be resaved via a queue job.

--batch-size
:   The number of entries that should be resaved per queue job, if --queue is passed.

--element-id
:   The ID(s) of the elements to resave.

--uid
:   The UUID(s) of the elements to resave.

--site
:   The site handle to fetch elements from.

--status
:   The status(es) of elements to resave. Can be set to multiple comma-separated statuses.

--offset
:   The number of elements to skip.

--limit
:   The number of elements to resave.

--update-search-index
:   Whether to update the search indexes for the resaved elements.

--touch
:   Whether to update the `dateUpdated` timestamp for the elements.

--group
:   The group handle(s) to save categories/tags/users from. Can be set to multiple comma-separated groups.

--with-fields
:   Only resave elements that have custom fields with these global field handles.

--set
:   An attribute name that should be set for each of the elements. The value will be determined by --to.

--to
:   The value that should be set on the --set attribute.

    The following value types are supported:

    - An attribute name: `--to myCustomField`
    - An object template: `--to "={myCustomField|lower}"`
    - A raw value: `--to "=foo bar"`
    - A PHP arrow function: `--to "fn(\$element) => \$element->callSomething()"`
    - An empty value: `--to :empty:`

--to-default
:   Sets the specified fields to their default values.

--if-empty
:   Whether the `--set` attribute should only be set if it doesn’t have a value.

--if-invalid
:   Whether the `--set` attribute should only be set if the current value doesn’t validate.

## [#](#sections)`sections`

Manages sections.

### [#](#sections-create) `sections/create`

Creates a section.

#### Options

--name
:   The section name.

--handle
:   The section handle.

--type
:   The section type (single, channel, or structure).

--no-versioning
:   Whether to disable versioning for the section.

--entry-types
:   Comma-separated list of entry type handles to assign to the section.

--uri-format
:   The entry URI format to set for each site.

--template
:   The template to load when an entry’s URL is requested.

--from-category-group
:   The category group handle to model the section from.

--from-tag-group
:   The tag group handle to model the section from.

--from-global-set
:   The global set handle to model the section from.

### [#](#sections-delete) `sections/delete`

Deletes a section.

#### Parameters

handle
:   The section handle

## [#](#serve)`serve`

### [#](#serve-index) `serve`

Runs PHP built-in web server.

#### Parameters

address
:   address to serve on. Either "host" or "host:port".

#### Options

--docroot, -t
:   path or [path alias  (opens new window)](docs_5x__configure.md#aliases) of the directory to serve.

--router, -r
:

--port, -p
:   port to serve on.

## [#](#setup)`setup`

Craft CMS setup installer.

### [#](#setup-app-id) `setup/app-id`

Generates a new application ID and saves it in the `.env` file.

### [#](#setup-cloud) `setup/cloud`

Prepares the Craft install to be deployed to Craft Cloud.

### [#](#setup-db) `setup/db`

Alias for [setup/db-creds](#setup-db-creds).

#### Options

--driver
:   The database driver to use. Either `'mysql'` for MySQL or `'pgsql'` for PostgreSQL.

--server
:   The database server name or IP address. Usually `'localhost'` or `'127.0.0.1'`.

--port
:   The database server port. Defaults to 3306 for MySQL and 5432 for PostgreSQL.

--user
:   The database username to connect with.

--password
:   The database password to connect with.

--database
:   The name of the database to select.

--schema
:   The schema that Postgres is configured to use by default (PostgreSQL only).

--table-prefix
:   The table prefix to add to all database tables. This can
    be no more than 5 characters, and must be all lowercase.

### [#](#setup-db-cache-table) `setup/db-cache-table`

Creates a database table for storing DB caches.

### [#](#setup-db-creds) `setup/db-creds`

Stores new DB connection settings to the `.env` file.

#### Options

--driver
:   The database driver to use. Either `'mysql'` for MySQL or `'pgsql'` for PostgreSQL.

--server
:   The database server name or IP address. Usually `'localhost'` or `'127.0.0.1'`.

--port
:   The database server port. Defaults to 3306 for MySQL and 5432 for PostgreSQL.

--user
:   The database username to connect with.

--password
:   The database password to connect with.

--database
:   The name of the database to select.

--schema
:   The schema that Postgres is configured to use by default (PostgreSQL only).

--table-prefix
:   The table prefix to add to all database tables. This can
    be no more than 5 characters, and must be all lowercase.

### [#](#setup-index) `setup`

Sets up all the things.

This is an interactive wrapper for the `setup/app-id`, `setup/security-key`, `setup/db-creds`,
and `install` commands, each of which support being run non-interactively.

### [#](#setup-keys) `setup/keys`

Generates an application ID and security key (if they don’t exist), and saves them in the `.env` file.

### [#](#setup-message-tables) `setup/message-tables`

Creates database tables for storing message translations. (EXPERIMENTAL!)

### [#](#setup-php-session-table) `setup/php-session-table`

Creates a database table for storing PHP session information.

### [#](#setup-security-key) `setup/security-key`

Generates a new security key and saves it in the `.env` file.

### [#](#setup-welcome) `setup/welcome`

Called from the `post-create-project-cmd` Composer hook.

## [#](#shell)`shell`

### [#](#shell-index) `shell`

Runs interactive shell

#### Options

--include
:   include file(s) before starting tinker shell

## [#](#tests)`tests`

### [#](#tests-setup) `tests/setup`

Sets up a test suite for the current project.

#### Parameters

dst
:   The folder that the test suite should be generated in.
    Defaults to the current working directory.

## [#](#up)`up`

### [#](#up-index) `up`

Runs pending migrations and applies pending project config changes.

#### Options

--no-backup
:   Skip backing up the database.

## [#](#update)`update`

Updates Craft and plugins.

### [#](#update-composer-install) `update/composer-install`

Installs dependencies based on the current `composer.json` & `composer.lock`.

### [#](#update-info) `update/info`

Displays info about available updates.

### [#](#update-update) `update/update`

Updates Craft and/or plugins.

#### Parameters

handle
:   The update handle (`all`, `craft`, or a plugin handle).
    You can pass multiple handles separated by spaces, and you can update to a specific
    version using the syntax `<handle>:<version>`.

#### Options

--with-expired
:   Whether to update expired licenses.

    NOTE: This will result in “License purchase required” messages in the control panel on public domains,
    until the licenses have been renewed.

--minor-only
:   Whether only minor updates should be applied.

--patch-only
:   Whether only patch updates should be applied.

--except
:   Plugin handles to exclude

--force, -f
:   Force the update if allowUpdates is disabled

--backup
:   Backup the database before updating

--migrate
:   Run new database migrations after completing the update

## [#](#update-statuses)`update-statuses`

### [#](#update-statuses-index) `update-statuses`

Updates statically-stored entry statuses.

## [#](#users)`users`

Manages user accounts.

### [#](#users-activation-url) `users/activation-url`

Generates an activation URL for a pending user.

#### Parameters

user
:   The ID, username, or email address of the user account.

### [#](#users-create) `users/create`

Creates a user.

#### Options

--email
:   The user’s email address.

--username
:   The user’s username.

--password
:   The user’s new password.

--admin
:   Whether the user should be an admin.

--send-activation-email
:   Whether to send the user an activation email.

--groups
:   The group handles to assign the created user to.

--group-ids
:   The group IDs to assign the user to the created user to.

### [#](#users-delete) `users/delete`

Deletes a user.

#### Parameters

user
:   The ID, username, or email address of the user account.

#### Options

--inheritor
:   The email or username of the user to inherit content when deleting a user.

--delete-content
:   Whether to delete the user’s content if no inheritor is specified.

--hard
:   Whether the user should be hard-deleted immediately, instead of soft-deleted.

### [#](#users-impersonate) `users/impersonate`

Generates a URL to impersonate a user.

#### Parameters

user
:   The ID, username, or email address of the user account.

### [#](#users-list-admins) `users/list-admins`

Lists admin users.

### [#](#users-logout-all) `users/logout-all`

Logs all users out of the system.

### [#](#users-password-reset-url) `users/password-reset-url`

Generates a password reset URL for a user.

#### Parameters

user
:   The ID, username, or email address of the user account.

### [#](#users-remove-2fa) `users/remove-2fa`

Removes user's two-step verification method(s)

#### Parameters

user
:   The ID, username, or email address of the user account.

#### Options

--method
:   The name of the two-step verification method you would like to remove for user, e.g. Authenticator App, Recovery Codes. Use "all" to remove all 2FA methods.

### [#](#users-set-password) `users/set-password`

Changes a user’s password.

#### Parameters

user
:   The ID, username, or email address of the user account.

#### Options

--password
:   The user’s new password.

### [#](#users-unlock) `users/unlock`

Unlocks a user's account.

#### Parameters

user
:   The ID, username, or email address of the user account.

## [#](#utils-ascii-filenames)`utils/ascii-filenames`

### [#](#utils-ascii-filenames-index) `utils/ascii-filenames`

Converts all non-ASCII asset filenames to ASCII.

## [#](#utils-delete-empty-volume-folders)`utils/delete-empty-volume-folders`

### [#](#utils-delete-empty-volume-folders-index) `utils/delete-empty-volume-folders`

Deletes empty volume folders.

#### Options

--volume
:   The volume handle(s) to delete folders from. Can be set to multiple comma-separated volumes.

## [#](#utils-fix-element-uids)`utils/fix-element-uids`

### [#](#utils-fix-element-uids-index) `utils/fix-element-uids`

Ensures all elements UIDs are unique.

## [#](#utils-fix-field-layout-uids)`utils/fix-field-layout-uids`

### [#](#utils-fix-field-layout-uids-index) `utils/fix-field-layout-uids`

Fixes any duplicate UUIDs found within field layout components in the project config.

## [#](#utils-prune-orphaned-entries)`utils/prune-orphaned-entries`

### [#](#utils-prune-orphaned-entries-index) `utils/prune-orphaned-entries`

Prunes orphaned entries for each site.

## [#](#utils-prune-provisional-drafts)`utils/prune-provisional-drafts`

### [#](#utils-prune-provisional-drafts-index) `utils/prune-provisional-drafts`

Prunes provisional drafts for elements that have more than one per user.

#### Options

--dry-run
:   Whether this is a dry run.

## [#](#utils-prune-revisions)`utils/prune-revisions`

### [#](#utils-prune-revisions-index) `utils/prune-revisions`

Prunes excess element revisions.

#### Options

--section
:   The section handle(s) to prune revisions from. Can be set to multiple comma-separated sections.

--max-revisions
:   The maximum number of revisions an element can have.

--dry-run
:   Whether this is a dry run.

## [#](#utils-repair)`utils/repair`

Repairs data.

### [#](#utils-repair-category-group-structure) `utils/repair/category-group-structure`

Repairs structure data for a category group.

#### Parameters

handle
:   The category group handle.

#### Options

--dry-run
:   Whether to only do a dry run of the repair process.

### [#](#utils-repair-project-config) `utils/repair/project-config`

Repairs double-packed associative arrays in the project config.

#### Options

--dry-run
:   Whether to only do a dry run of the repair process.

### [#](#utils-repair-section-structure) `utils/repair/section-structure`

Repairs structure data for a section.

#### Parameters

handle
:   The section handle.

#### Options

--dry-run
:   Whether to only do a dry run of the repair process.

## [#](#utils-update-usernames)`utils/update-usernames`

### [#](#utils-update-usernames-index) `utils/update-usernames`

Updates all users’ usernames to ensure they match their email address.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)

Parts of this page are generated or assembled by automations. While we greatly appreciate contributions to the documentation, [reporting automated content issues](https://github.com/craftcms/docs/issues/new/choose) will allow us to fix them at the source!
