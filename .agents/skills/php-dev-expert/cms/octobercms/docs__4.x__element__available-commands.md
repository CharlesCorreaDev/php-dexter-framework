# Available Commands - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/element/available-commands.html

---

# Available Commands

- [Setup & Maintenance](docs__4.x__element__available-commands.md#setup-maintenance)
- [Command - october:update](#command-october-update)
- [Command - october:migrate](#command-october-migrate)
- [Command - october:passwd](#command-october-passwd)
- [Command - october:optimize](#command-october-optimize)
- [Project Management](docs__4.x__element__available-commands.md#project-management)
- [Command - project:sync](#command-project-sync)
- [Command - project:set](#command-project-set)
- [Plugin Management](docs__4.x__element__available-commands.md#plugin-management)
- [Command - plugin:install](#command-plugin-install)
- [Command - plugin:check](#command-plugin-check)
- [Command - plugin:refresh](#command-plugin-refresh)
- [Command - plugin:list](#command-plugin-list)
- [Command - plugin:disable](#command-plugin-disable)
- [Command - plugin:enable](#command-plugin-enable)
- [Command - plugin:remove](#command-plugin-remove)
- [Theme Management](docs__4.x__element__available-commands.md#theme-management)
- [Command - theme:install](#command-theme-install)
- [Command - theme:check](#command-theme-check)
- [Command - theme:list](#command-theme-list)
- [Command - theme:use](#command-theme-use)
- [Command - theme:remove](#command-theme-remove)
- [Command - theme:copy](#command-theme-copy)
- [Command - theme:scan](#command-theme-scan)
- [Scaffolding](docs__4.x__element__available-commands.md#scaffolding)
- [Command - create:plugin](#command-create-plugin)
- [Command - create:theme](#command-create-theme)
- [Command - create:model](#command-create-model)
- [Command - create:migration](#command-create-migration)
- [Command - create:controller](#command-create-controller)
- [Command - create:component](#command-create-component)
- [Command - create:formwidget](#command-create-formwidget)
- [Command - create:filterwidget](#command-create-filterwidget)
- [Command - create:reportwidget](#command-create-reportwidget)
- [Command - create:contentfield](#command-create-contentfield)
- [Command - create:command](#command-create-command)
- [Command - create:job](#command-create-job)
- [Command - create:factory](#command-create-factory)
- [Command - create:seeder](#command-create-seeder)
- [Command - create:test](#command-create-test)
- [Utilities](docs__4.x__element__available-commands.md#utilities)
- [Command - cache:clear](#command-cache-clear)
- [Command - october:fresh](#command-october-fresh)
- [Command - october:mirror](#command-october-mirror)
- [Command - october:util](#command-october-util)

[More...](#)

October CMS includes several command-line interface (CLI) commands and utilities that allow you to manage various aspects of the platform, as well as speed up the development process. The console commands are based on Laravel's [Artisan  (opens new window)](http://laravel.com/docs/artisan) tool. You may [develop your own console commands](docs__4.x__extend__console-commands.md) using plugins.

## [#](#setup-maintenance) Setup & Maintenance

### [#](#command-october-update) Command - `october:update`

The `october:update` command updates the platform. It will update the core application and plugin files, then perform a database migration.

```
php artisan october:update
```

This is the same as running the following commands.

```
composer update
php artisan october:migrate
```

### [#](#command-october-migrate) Command - `october:migrate`

The `october:migrate` command will perform a database migration, creating database tables and executing seed scripts, provided by the system and [plugin version history](docs__4.x__extend__system__plugins.md). The migration command can be run multiple times, it will only execute a migration or seed script once, which means only new changes are applied.

```
php artisan october:migrate
```

This command does not migrate Tailor blueprints. Use the `tailor:migrate` command to [migrate blueprint changes](docs__4.x__cms__tailor__introduction.md#oc-migrating-blueprints).

The `--rollback` option will reverse all migrations, dropping database tables and deleting data. Care should be taken when using this command. The `plugin:refresh` command is a useful alternative for debugging a single plugin.

```
php artisan october:migrate --rollback
```

The `--skip-errors` flag can be used to suppress any errors and force the migration path to complete. Care should be taken with this flag since some errors are necessary to ensure data integrity.

```
php artisan october:migrate --skip-errors
```

### [#](#command-october-passwd) Command - `october:passwd`

The `october:passwd` command allows the password of a backend administrator to be changed via the command line. This is useful if you are locked out of your October CMS install, or for changing the password for the default administrator account.

```
php artisan october:passwd username password
```

For the first argument you may pass either the login name or email address. For the second argument you may optionally pass the desired password, otherwise you will be prompted to enter one.

### [#](#command-october-optimize) Command - `october:optimize`

The `october:optimize` will cache the framework and platform files for performance. This caches the configuration, routes and, when the CMS module is installed, the theme files.

```
php artisan october:optimize
```

To remove these cached files, use the `--clear` option. This clears the configuration, routes and theme caches created by the command above.

```
php artisan october:optimize --clear
```

## [#](#project-management) Project Management

### [#](#command-project-sync) Command - `project:sync`

`project:sync` installs all plugins and themes belonging to a project.

```
php artisan project:sync
```

### [#](#command-project-set) Command - `project:set`

`project:set` sets the license key for the current installation.

```
php artisan project:set <license key>
```

## [#](#plugin-management) Plugin Management

### [#](#command-plugin-install) Command - `plugin:install`

`plugin:install` - downloads and installs the plugin by its name. The next example will install a plugin called **AuthorName.PluginName**.

```
php artisan plugin:install AuthorName.PluginName
```

You may install a plugin from a remote source using the `--from` option.

```
php artisan plugin:install AuthorName.PluginName --from=git@github.com:authorname/pluginname-plugin.git
```

Use the `--want` option to specify a target branch or version.

```
php artisan plugin:install AuthorName.PluginName --from=git@github.com:authorname/pluginname-plugin.git --want=dev-develop
```

Use the `--oc` option if your package name has the `oc` prefix.

```
php artisan plugin:install AuthorName.PluginName --from=git@github.com:authorname/pluginname-plugin.git --oc
```

### [#](#command-plugin-check) Command - `plugin:check`

`plugin:check` - performs a system wide check of installed plugin dependencies. This command will spin over every theme and plugin that is currently installed and check to see if its dependencies are also installed. If it finds any missing requirements, it will attempt to install them.

```
php artisan plugin:check
```

### [#](#command-plugin-refresh) Command - `plugin:refresh`

`plugin:refresh` - destroys the plugin's database tables and recreates them. This command is useful for development.

```
php artisan plugin:refresh AuthorName.PluginName
```

Use the `--rollback` option to only destroy the database tables without recreating them.

```
php artisan plugin:refresh AuthorName.PluginName --rollback
```

You may also specify a version number with the `--rollback` option to stop at a specified version.

```
php artisan plugin:refresh AuthorName.PluginName --rollback=1.0.3
```

### [#](#command-plugin-list) Command - `plugin:list`

`plugin:list` - Displays a list of installed plugins and their version numbers.

```
php artisan plugin:list
```

### [#](#command-plugin-disable) Command - `plugin:disable`

`plugin:disable` - Disable an existing plugin.

```
php artisan plugin:disable AuthorName.PluginName
```

### [#](#command-plugin-enable) Command - `plugin:enable`

`plugin:enable` - Enable a disabled plugin.

```
php artisan plugin:enable AuthorName.PluginName
```

### [#](#command-plugin-remove) Command - `plugin:remove`

`plugin:remove` - destroys the plugin's database tables and deletes the plugin files from the filesystem.

```
php artisan plugin:remove AuthorName.PluginName
```

## [#](#theme-management) Theme Management

### [#](#command-theme-install) Command - `theme:install`

`theme:install` - download and install a theme from the [Marketplace  (opens new window)](https://octobercms.com/themes/). The following example will install the theme in `/themes/authorname-themename`

```
php artisan theme:install AuthorName.ThemeName
```

You may install a theme from a remote source using the `--from` option.

```
php artisan theme:install AuthorName.ThemeName --from=git@github.com:authorname/themename-theme.git
```

Use the `--want` option to specify a target branch or version.

```
php artisan theme:install AuthorName.ThemeName --from=git@github.com:authorname/themename-theme.git
```--want=dev-develop

Use the `--oc` option if your package name has the `oc` prefix.

```bash
php artisan theme:install AuthorName.ThemeName --from=git@github.com:authorname/oc-themename-theme.git --oc
```

### [#](#command-theme-check) Command - `theme:check`

`theme:check` - performs a system wide check of themes to see if they should be flagged read-only and protected from changes. This command will spin over every theme and check if it has been installed with composer, if so, a [theme lock file](docs__4.x__cms__themes.md#oc-child-themes) is added and a child theme is created.

```
php artisan theme:check
```

### [#](#command-theme-list) Command - `theme:list`

`theme:list` - list installed themes.

```
php artisan theme:list
```

### [#](#command-theme-use) Command - `theme:use`

`theme:use` - switch the active theme. The following example will switch to the theme in `/themes/rainlab-vanilla`

```
php artisan theme:use rainlab-vanilla
```

### [#](#command-theme-remove) Command - `theme:remove`

`theme:remove` - delete a theme. The following example will delete the directory `/themes/rainlab-vanilla`

```
php artisan theme:remove rainlab-vanilla
```

### [#](#command-theme-copy) Command - `theme:copy`

`theme:copy` - duplicates an existing theme to create a new one, including the creation of child themes.

```
php artisan theme:copy <source-theme> [destination-theme]
```

The following command creates a new theme called `demo-copy` from the source theme `demo` by copying the directory and its contents. The `.themelock` file will be removed during this process.

```
php artisan theme:copy demo demo-copy
```

To create a child theme that inherits the parent theme, specify the `--child` option.

```
php artisan theme:copy demo demo-child --child
```

If using [database-driven themes](docs__4.x__cms__themes.md#oc-database-driven-themes), you may sync the database changes to the filesystem with the `--import-db` option.

```
php artisan theme:copy demo --import-db
```

To delete all the database templates at the same time, use the `--purge-db` option.

```
php artisan theme:copy demo --import-db --purge-db
```

### [#](#command-theme-scan) Command - `theme:scan`

`theme:scan` - scan the theme templates for translatable strings and add any missing keys to the [theme language file](docs__4.x__cms__multisite__localization.md). The following example will scan the theme in `/themes/demo` and write new keys to the language file of the primary site locale.

```
php artisan theme:scan demo
```

Use the `--locale` option to target a different language file.

```
php artisan theme:scan demo --locale=fr
```

Use the `--dry-run` option to list the found messages without writing the language file.

```
php artisan theme:scan demo --dry-run
```

## [#](#scaffolding) Scaffolding

The scaffolding commands generate the boilerplate files for common October CMS objects. Unless noted otherwise, the first argument is the plugin namespace (eg: `Acme.Blog`), and most commands accept the `--overwrite` (or `-o`) option to replace existing files.

### [#](#command-create-plugin) Command - `create:plugin`

The `create:plugin` command generates the files and directories for a new [plugin](docs__4.x__extend__system__plugins.md). The argument specifies the author and plugin name.

```
php artisan create:plugin Acme.Blog
```

### [#](#command-create-theme) Command - `create:theme`

The `create:theme` command generates a new [theme](docs__4.x__cms__themes__themes.md) directory with a starter layout, home page and configuration files. The argument specifies the theme name.

```
php artisan create:theme "My Theme"
```

### [#](#command-create-model) Command - `create:model`

The `create:model` command generates the files for a new [model](docs__4.x__extend__system__models.md). The second argument specifies the model name.

```
php artisan create:model Acme.Blog Post
```

Use the `--soft-deletes` option to implement soft deletion, and the `--no-timestamps` option to disable automatic timestamps.

### [#](#command-create-migration) Command - `create:migration`

The `create:migration` command generates a new [migration](docs__4.x__extend__database__structure.md) file. The second argument specifies the migration name.

```
php artisan create:migration Acme.Blog AddStatusColumn
```

Use the `--create` option to name a table to be created, or the `--table` option to name a table to be modified.

### [#](#command-create-controller) Command - `create:controller`

The `create:controller` command generates the files for a new backend [controller](docs__4.x__extend__system__controllers.md). The second argument specifies the controller name.

```
php artisan create:controller Acme.Blog Posts
```

Use the `--model` option to define which model name to use, and the `--design` option to specify a design (`basic`, `sidebar`, `survey`, `popup`, `custom`).

### [#](#command-create-component) Command - `create:component`

The `create:component` command generates a new plugin [component](docs__4.x__extend__cms-components.md). The second argument specifies the component class name.

```
php artisan create:component Acme.Blog BlogPosts
```

### [#](#command-create-formwidget) Command - `create:formwidget`

The `create:formwidget` command generates a new [form widget](docs__4.x__extend__forms__form-widgets.md). The second argument specifies the form widget name.

```
php artisan create:formwidget Acme.Blog PostList
```

### [#](#command-create-filterwidget) Command - `create:filterwidget`

The `create:filterwidget` command generates a new [filter widget](docs__4.x__extend__lists__filters.md). The second argument specifies the filter widget name.

```
php artisan create:filterwidget Acme.Blog HasDiscount
```

### [#](#command-create-reportwidget) Command - `create:reportwidget`

The `create:reportwidget` command generates a new [report widget](docs__4.x__extend__dashboards__report-widgets.md). The second argument specifies the report widget name.

```
php artisan create:reportwidget Acme.Blog TopPages
```

### [#](#command-create-contentfield) Command - `create:contentfield`

The `create:contentfield` command generates a new [Tailor content field](docs__4.x__extend__tailor-fields.md). The second argument specifies the content field name.

```
php artisan create:contentfield Acme.Blog IconPicker
```

### [#](#command-create-command) Command - `create:command`

The `create:command` command generates a new [console command](docs__4.x__extend__console-commands.md). The second argument specifies the command class name.

```
php artisan create:command Acme.Blog ProcessJobs
```

### [#](#command-create-job) Command - `create:job`

The `create:job` command generates a new [queue job](docs__4.x__extend__services__queue.md) class. The second argument specifies the job class name.

```
php artisan create:job Acme.Blog ImportPosts
```

Use the `--sync` option to indicate that the job should be synchronous.

### [#](#command-create-factory) Command - `create:factory`

The `create:factory` command generates a new model factory class. The second argument specifies the factory class name.

```
php artisan create:factory Acme.Blog PostFactory
```

### [#](#command-create-seeder) Command - `create:seeder`

The `create:seeder` command generates a new database seeder class. The second argument specifies the seeder class name.

```
php artisan create:seeder Acme.Blog PostSeeder
```

### [#](#command-create-test) Command - `create:test`

The `create:test` command generates a new [test](docs__4.x__extend__system__unit-testing.md) class. The second argument specifies the test class name, which must end in `Test`.

```
php artisan create:test Acme.Blog UserTest
```

## [#](#utilities) Utilities

### [#](#command-cache-clear) Command - `cache:clear`

`cache:clear` - clears the application, twig and combiner cache directories. Example:

```
php artisan cache:clear
```

### [#](#command-october-fresh) Command - `october:fresh`

`october:fresh` - removes the demo theme and plugin that ships with October CMS.

```
php artisan october:fresh
```

### [#](#command-october-mirror) Command - `october:mirror`

`october:mirror` - will mirror all asset and resource files to the [public folder](docs__4.x__setup__deployment.md#oc-public-folder) using symbolic linking.

```
php artisan october:mirror
```

### [#](#command-october-util) Command - `october:util`

`october:util` - a generic command to perform general utility tasks, such as cleaning up files or combining files. The arguments passed to this command will determine the task used.

#### [#](#compile-assets) Compile Assets

Outputs combined system files for JavaScript (js), StyleSheets (less), client side language (lang), or everything (assets).

```
php artisan october:util compile assets
php artisan october:util compile lang
php artisan october:util compile js
php artisan october:util compile less
```

To combine without minification, pass the `--debug` option.

```
php artisan october:util compile js --debug
```

#### [#](#pull-all-repos) Pull All Repos

This will execute the command `git pull` on all theme and plugin directories.

```
php artisan october:util git pull
```

#### [#](#purge-thumbnails) Purge Thumbnails

Deletes all generated thumbnails in the uploads directory.

```
php artisan october:util purge thumbs
```

#### [#](#purge-uploads) Purge Uploads

Deletes files in the uploads directory that do not exist in the `system_files` table.

```
php artisan october:util purge uploads
```

#### [#](#purge-orphans) Purge Orphans

Deletes records in `system_files` table that do not belong to any other model.

```
php artisan october:util purge orphans
```

#### [#](#see-also) See Also

- [Creating Console Commands](docs__4.x__extend__console-commands.md)

← [Available Icons](docs__4.x__element__available-icons.md)[Mixin Field](docs__4.x__element__content__field-mixin.md) →
