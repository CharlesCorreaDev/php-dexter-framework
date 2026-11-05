# Installing Plugins & Themes - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/resources/installing-packages.html

---

# Installing Plugins & Themes

Learn how to install and manage plugins and themes.

- [Project Management](docs__4.x__resources__installing-packages.md#project-management)
- [Synchronize Project](#synchronize-project)
- [Set Project](#set-project)
- [Plugin Management](docs__4.x__resources__installing-packages.md#plugin-management)
- [Install Plugin](#install-plugin)
- [Check Dependencies](#check-dependencies)
- [Refresh Plugin](#refresh-plugin)
- [List Plugins](#list-plugins)
- [Disable Plugin](#disable-plugin)
- [Enable Plugin](#enable-plugin)
- [Remove Plugin](#remove-plugin)
- [Theme Management](docs__4.x__resources__installing-packages.md#theme-management)
- [Install Theme](#install-theme)
- [Check Protected](#check-protected)
- [List Themes](#list-themes)
- [Enable Theme](#enable-theme)
- [Remove Theme](#remove-theme)
- [Copy Theme](#copy-theme)

[More...](#)

## [#](#project-management) Project Management

October CMS includes these commands for managing your project.

### [#](#synchronize-project) Synchronize Project

`project:sync` installs all plugins and themes belonging to a project.

```
php artisan project:sync
```

### [#](#set-project) Set Project

`project:set` sets the license key for the current installation.

```
php artisan project:set <license key>
```

## [#](#plugin-management) Plugin Management

October CMS includes a number of commands for managing plugins.

### [#](#install-plugin) Install Plugin

`plugin:install` - downloads and installs the plugin by its name. The next example will install a plugin called **AuthorName.PluginName**.

```
php artisan plugin:install AuthorName.PluginName
```

Use the `--want` option to install a specific plugin version.

```
php artisan plugin:install AuthorName.PluginName --want=1.0
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

### [#](#check-dependencies) Check Dependencies

`plugin:check` - performs a system wide check of installed plugin dependencies. This command will spin over every theme and plugin that is currently installed and check to see if its dependencies are also installed. If it finds any missing requirements, it will attempt to install them.

```
php artisan plugin:check
```

### [#](#refresh-plugin) Refresh Plugin

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

### [#](#list-plugins) List Plugins

`plugin:list` - Displays a list of installed plugins and their version numbers.

```
php artisan plugin:list
```

### [#](#disable-plugin) Disable Plugin

`plugin:disable` - Disable an existing plugin.

```
php artisan plugin:disable AuthorName.PluginName
```

### [#](#enable-plugin) Enable Plugin

`plugin:enable` - Enable a disabled plugin.

```
php artisan plugin:enable AuthorName.PluginName
```

### [#](#remove-plugin) Remove Plugin

`plugin:remove` - destroys the plugin's database tables and deletes the plugin files from the filesystem.

```
php artisan plugin:remove AuthorName.PluginName
```

## [#](#theme-management) Theme Management

October includes a number of commands for managing themes.

### [#](#install-theme) Install Theme

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
php artisan theme:install AuthorName.ThemeName --from=git@github.com:authorname/themename-theme.git --want=dev-develop
```

Use the `--oc` option if your package name has the `oc` prefix.

```
php artisan theme:install AuthorName.ThemeName --from=git@github.com:authorname/oc-themename-theme.git --oc
```

### [#](#check-protected) Check Protected

`theme:check` - performs a system wide check of themes to see if they should be flagged read-only and protected from changes. This command will spin over every theme and check if it has been installed with composer, if so, a [theme lock file](docs__4.x__cms__themes__child-themes.md) is added and a child theme is created.

```
php artisan theme:check
```

### [#](#list-themes) List Themes

`theme:list` - list installed themes.

```
php artisan theme:list
```

### [#](#enable-theme) Enable Theme

`theme:use` - switch the active theme. The following example will switch to the theme in `/themes/rainlab-vanilla`

```
php artisan theme:use rainlab-vanilla
```

### [#](#remove-theme) Remove Theme

`theme:remove` - delete a theme. The following example will delete the directory `/themes/rainlab-vanilla`

```
php artisan theme:remove rainlab-vanilla
```

### [#](#copy-theme) Copy Theme

`theme:copy` - duplicates an existing theme to create a new one, including the creation of child themes.

```
php artisan theme:copy <source-theme> [destination-theme]
```

← [Updating October CMS](docs__4.x__resources__updating-october.md)[Development Workflow](docs__4.x__resources__development-workflow.md) →
