# Bootstrap Variables | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/config/bootstrap

---

# Bootstrap Variables

- ### On this Page

  - [CRAFT\_BASE\_PATH](docs_5x__reference__config__bootstrap.md#craft-base-path)
  - [CRAFT\_COMPOSER\_PATH](docs_5x__reference__config__bootstrap.md#craft-composer-path)
  - [CRAFT\_CONFIG\_PATH](docs_5x__reference__config__bootstrap.md#craft-config-path)
  - [CRAFT\_CONTENT\_MIGRATIONS\_PATH](docs_5x__reference__config__bootstrap.md#craft-content-migrations-path)
  - [CRAFT\_CP](docs_5x__reference__config__bootstrap.md#craft-cp)
  - [CRAFT\_DOTENV\_PATH](docs_5x__reference__config__bootstrap.md#craft-dotenv-path)
  - [CRAFT\_EDITION](docs_5x__reference__config__bootstrap.md#craft-edition)
  - [CRAFT\_ENVIRONMENT](docs_5x__reference__config__bootstrap.md#craft-environment)
  - [CRAFT\_EPHEMERAL](docs_5x__reference__config__bootstrap.md#craft-ephemeral)
  - [CRAFT\_LICENSE\_KEY](docs_5x__reference__config__bootstrap.md#craft-license-key)
  - [CRAFT\_LICENSE\_KEY\_PATH](docs_5x__reference__config__bootstrap.md#craft-license-key-path)
  - [CRAFT\_LOG\_ALLOW\_LINE\_BREAKS](docs_5x__reference__config__bootstrap.md#craft-log-allow-line-breaks)
  - [CRAFT\_LOG\_PHP\_ERRORS](docs_5x__reference__config__bootstrap.md#craft-log-php-errors)
  - [CRAFT\_REBRAND\_PATH](docs_5x__reference__config__bootstrap.md#craft-rebrand-path)
  - [CRAFT\_SECRETS\_PATH](docs_5x__reference__config__bootstrap.md#craft-secrets-path)
  - [CRAFT\_SITE](docs_5x__reference__config__bootstrap.md#craft-site)
  - [CRAFT\_STORAGE\_PATH](docs_5x__reference__config__bootstrap.md#craft-storage-path)
  - [CRAFT\_STREAM\_LOG](docs_5x__reference__config__bootstrap.md#craft-stream-log)
  - [CRAFT\_TEMPLATES\_PATH](docs_5x__reference__config__bootstrap.md#craft-templates-path)
  - [CRAFT\_TRANSLATIONS\_PATH](docs_5x__reference__config__bootstrap.md#craft-translations-path)
  - [CRAFT\_VENDOR\_PATH](docs_5x__reference__config__bootstrap.md#craft-vendor-path)
  - [CRAFT\_WEB\_URL](docs_5x__reference__config__bootstrap.md#craft-web-url)
  - [CRAFT\_WEB\_ROOT](docs_5x__reference__config__bootstrap.md#craft-web-root)

These variables can be set via your environment or as PHP constants in your [entry scripts](docs_5x__configure.md#entry-script). Read more about how to use bootstrap variables on the [configuration](docs_5x__configure.md#bootstrap-config) page.

[Configuring Craft
→

Learn about all the ways to customize Craft.](docs_5x__configure.md)

## [#](#craft-base-path)`CRAFT_BASE_PATH`

The path to the **base directory** that Craft will look for [config/](docs_5x__system__directory-structure.md#config), [templates/](docs_5x__system__directory-structure.md#templates), and other directories within by default. (It is assumed to be the parent of the `vendor/` folder by default.)

```
// Tell Craft to look for config/, templates/, etc., two levels up from here
define('CRAFT_BASE_PATH', dirname(__DIR__, 2));
```

## [#](#craft-composer-path)`CRAFT_COMPOSER_PATH`

The path to the [composer.json](docs_5x__system__directory-structure.md#composer-json) file. (It is assumed to live within the base directory by default.)

```
define('CRAFT_COMPOSER_PATH', 'path/to/composer.json');
```

## [#](#craft-config-path)`CRAFT_CONFIG_PATH`

The path to the [config/](docs_5x__system__directory-structure.md#config) folder. (It is assumed to live within the base directory by default.)

## [#](#craft-content-migrations-path)`CRAFT_CONTENT_MIGRATIONS_PATH`

The path to the [migrations/](docs_5x__system__directory-structure.md#migrations) folder used to store content migrations. (It is assumed to live within the base directory by default.)

## [#](#craft-cp)`CRAFT_CP`

Dictates whether the current request should be treated as a control panel request.

```
// Tell Craft that this is a control panel request
define('CRAFT_CP', true);
```

If this isn’t defined, Craft will treat the request as a control panel request if either of these are true:

- The [baseCpUrl](docs_5x__reference__config__general.md#basecpurl) setting **is** set, and the request URL begins with it (plus the [cpTrigger](docs_5x__reference__config__general.md#cptrigger) setting, if set).
- The [baseCpUrl](docs_5x__reference__config__general.md#basecpurl) setting **is not** set, and the request URI begins with the [cpTrigger](docs_5x__reference__config__general.md#cptrigger) setting.

## [#](#craft-dotenv-path)`CRAFT_DOTENV_PATH`

Path to your project’s [`.env` file](docs_5x__system__directory-structure.md#env), including the filename. Defaults to `.env`, within [CRAFT\_BASE\_PATH](#craft-base-path).

## [#](#craft-edition)`CRAFT_EDITION` [5.2.0+](https://github.com/craftcms/cms/blob/5.2.0/CHANGELOG.md "The CRAFT_EDITION bootstrap variable was first available in version 5.2.0 of Craft.")

Craft’s active edition is typically set via [project config](docs_5x__system__project-config.md), but you can override it for testing with a valid edition from [craft\enums\CmsEdition  (opens new window)](https://docs.craftcms.com/api/v5/craft-enums-cmsedition.html).

It is possible to enable Craft editions that are not allowed by your current license. This means that you may see warnings in the control panel on public domains.

## [#](#craft-environment)`CRAFT_ENVIRONMENT`

The environment name that [multi-environment configs](docs_5x__configure.md#multi-environment-configs) can reference when defining their environment-specific config arrays.

## [#](#craft-ephemeral)`CRAFT_EPHEMERAL`

When set to `true`, Craft will skip file system permission checks and operations that are not available in an environment with ephemeral or read-only storage.

## [#](#craft-license-key)`CRAFT_LICENSE_KEY`

Your Craft license key, if for some reason that must be defined by PHP rather than a license key file. (Don’t set this until you have a valid license key.)

```
// Tell Craft to get its license key from a `LICENSE_KEY` environment variable
define('CRAFT_LICENSE_KEY', craft\helpers\App::env('LICENSE_KEY'));
```

## [#](#craft-license-key-path)`CRAFT_LICENSE_KEY_PATH`

The path that Craft should store its license key file, including its filename. (It will be stored as `license.key` within your [config/](docs_5x__system__directory-structure.md#config) folder by default.)

## [#](#craft-log-allow-line-breaks)`CRAFT_LOG_ALLOW_LINE_BREAKS`

Adjusts the default [log target config](docs_5x__system__logging.md#monolog) to allow or disallow multi-line log statements.

## [#](#craft-log-php-errors)`CRAFT_LOG_PHP_ERRORS`

Can be set to `false` to prevent Craft from setting PHP’s [log\_errors  (opens new window)](https://php.net/manual/en/errorfunc.configuration.php#ini.log-errors) and [error\_log  (opens new window)](https://php.net/manual/en/errorfunc.configuration.php#ini.error-log) settings, leaving it up to whatever’s set in `php.ini`.

```
// Don’t send PHP error logs to storage/logs/phperrors.log
define('CRAFT_LOG_PHP_ERRORS', false);
```

## [#](#craft-rebrand-path)`CRAFT_REBRAND_PATH` [5.2.0+](https://github.com/craftcms/cms/blob/5.2.0/CHANGELOG.md "The CRAFT_REBRAND_PATH bootstrap variable was first available in version 5.2.0 of Craft.")

Override the path where the [control panel](docs_5x__system__control-panel.md)’s **Login Page Logo** and **Site Icon** are stored, when uploaded via

1. Settings→
2. General

. By default, they live in Craft’s `storage/` directory, which is typically excluded from version control.

```
// Use a top-level `rebrand/` directory for the site logo + icon:
define('CRAFT_REBRAND_PATH', '@root/rebrand');
```

Unlike other `*_PATH` settings, `CRAFT_REBRAND_PATH`’s value can include an [alias or other environment variable](docs_5x__configure.md#aliases-and-environment-variables) because it is only resolved after the application is fully initialized.

## [#](#craft-secrets-path)`CRAFT_SECRETS_PATH`

The path to a [secrets](docs_5x__configure.md#secrets) file, whose values are *not* loaded into the environment.

```
// Check the `secrets.php` file next to this script for sensitive values:
define('CRAFT_SECRETS_PATH', dirname(__DIR__) . 'secrets.php');
```

## [#](#craft-site)`CRAFT_SITE`

The Site handle or ID that Craft should be serving from this `index.php` file. (Only set this if you have a good reason to. Craft will automatically serve the correct site by inspecting the requested URL, unless this is set.)

```
// Show the German site
define('CRAFT_SITE', 'de');
```

## [#](#craft-storage-path)`CRAFT_STORAGE_PATH`

The path to the [storage/](docs_5x__system__directory-structure.md#storage) folder. (It is assumed to live within the base directory by default.)

Make sure you set this to a valid folder path, otherwise it will be ignored.

## [#](#craft-stream-log)`CRAFT_STREAM_LOG`

When set to `true`, Craft will send log output to `stderr` and `stdout`, instead of to log files. PHP fatal errors will be sent to `stderr`.

## [#](#craft-templates-path)`CRAFT_TEMPLATES_PATH`

The path to the [templates/](docs_5x__system__directory-structure.md#templates) folder. (It is assumed to live within the base directory by default.)

## [#](#craft-translations-path)`CRAFT_TRANSLATIONS_PATH`

The path to the `translations/` folder. (It is assumed to live within the base directory by default.)

## [#](#craft-vendor-path)`CRAFT_VENDOR_PATH`

The path to the [vendor/](docs_5x__system__directory-structure.md#vendor) folder. (It is assumed to live 4 directories up from the bootstrap script by default.)

## [#](#craft-web-url)`CRAFT_WEB_URL`

Used to set the `@web` [alias](docs_5x__configure.md#aliases).

This is not recommended unless Craft cannot automatically [determine the hostname  (opens new window)](https://craftcms.com/knowledge-base/how-craft-determines-the-site-url).

## [#](#craft-web-root)`CRAFT_WEB_ROOT`

Used to set the `@webroot` [alias](docs_5x__configure.md#aliases).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/config/bootstrap.md)
