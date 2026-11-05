# Project Config | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/system/project-config

---

# Project Config

- ### On this Page

  - [Scope](docs_5x__system__project-config.md#scope)
  - [Usage](docs_5x__system__project-config.md#usage)
  - [Propagating Changes](docs_5x__system__project-config.md#propagating-changes)
  - [Secrets and the Environment](docs_5x__system__project-config.md#secrets-and-the-environment)
  - [Working with Others](docs_5x__system__project-config.md#working-with-others)
  - [Adopting Project Config](docs_5x__system__project-config.md#adopting-project-config)
  - [Troubleshooting + Trivia](docs_5x__system__project-config.md#troubleshooting-trivia)
  - [Manual YAML File Generation](docs_5x__system__project-config.md#manual-yaml-file-generation)

Craft tracks system settings and content schema in a centralized store called *Project Config*. Changes are automatically written to YAML files in the `config/project/` folder, which can be version-controlled alongside your templates and other front-end resources.

This workflow provides two main benefits:

1. Your [project’s state](#scope) is tracked over time.
2. Settings are [automatically propagated](#propagating-changes) to other development/staging/production environments.

The overarching principle behind Project Config is to separate the management of content and settings. In doing so, it’s possible to establish a one-way flow for configuration, and to tie settings and schema to the rest of your project’s code.

Project Config is a discrete concept from [configuration](docs_5x__configure.md), but [often complements](#secrets-and-the-environment) it.

## [#](#scope)Scope

Broadly speaking, Project Config tracks things that are managed via the **Settings** section of the control panel.

- Asset volumes and named image transforms
- Category groups
- Craft and plugin schema versions
- Craft edition
- Email settings
- Fields and field layouts
- Global sets (settings only, not their content)
- GraphQL schemas, and the access settings for the public schema
- Plugin versions, editions, and settings
- Routes defined in **Settings** → **Routes**
- Sections and entry types
- Sites and site groups
- System name, time zone, and status (live/offline)
- Tag groups
- User settings and user groups

Plugins and Modules can store their own settings in Project Config, too. See [Supporting Project Config](docs_5x__extend__project-config.md) to learn how.

## [#](#usage)Usage

Project Config is always active, but you may need to adjust your workflow to get the most out of it.

Use of Project Config often involves disabling the [allowAdminChanges](docs_5x__reference__config__general.md#allowadminchanges) option in all but development environments, which puts the **Settings** section of the control panel in read-only mode—even for admin users. This guarantees settings are only changed under circumstances where their effects can be tested alongside any relevant templates or code.

Suppose you are asked to add a new entry type to an existing section. The process is probably pretty familiar: make some updates via the control panel, adjust templates and styles, then push your code. But how does the new entry type definition actually make it to the live site?

- **Without** Project Config, you would eventually need to squash a live database with a development one (risking content loss), or copy settings from one control panel to another (risking misconfiguration).
- **With** Project Config, Craft tracks the schema changes as YAML and can apply them automatically (as part of your deployment process) or at the click of a button.

Directly editing YAML files can cause inconsistencies and instability.
Craft should have exclusive control over the `config/project` directory.

This applies to LLMs and coding agents, as well: their training data will include configuration from many different (incompatible) versions of Craft.
Invalid configuration puts your data and access at risk.

## [#](#propagating-changes)Propagating Changes

As you make changes in your development environment, you will notice the contents of your `config/project/` folder are updated to reflect those changes. Commit those files to your Git repository as you would templates, front-end resources, and other project files—then push and [deploy  (opens new window)](https://craftcms.com/knowledge-base/deployment-best-practices) them together.

On the target machine or environment, *apply* the pending changes in one of two ways:

1. From the **Project Config** utility in the control panel.
2. By running the `php craft project-config/apply` terminal command.

Craft will compare the `config/project/` folder with its already-loaded Project Config, and apply whatever changes it finds.

When [installing Craft](docs_5x__install.md), any existing configuration in your `config/project/` directory will be applied automatically as long as its Craft and plugin versions match those being installed. This makes it possible to set up your own boilerplate projects!

## [#](#secrets-and-the-environment)Secrets and the Environment

Some settings may require you to input sensitive information:

- An SMTP password for your email transport/adapter
- An API key for a third-party service
- A secret access key in an AWS S3 filesystem

Providing a secret verbatim will cause the value to leak into Project Config YAML files. To avoid this, Craft supports using [environment variables](docs_5x__configure.md#env) and [aliases](docs_5x__configure.md#aliases) to stand in for a sensitive or dynamic value. For example, providing `$MYSERVICE_API_KEY` would read the corresponding value (minus the `$`) from your `.env` file, at runtime. Similarly, values that begin with an `@` are resolved as aliases.

![Craft’s autosuggest field, displaying a suitable match](/docs/assets/img/site-base-url-setting.7bfa41e0.png)

See [Environmental Configuration](docs_5x__configure.md#control-panel-settings) for more information.

## [#](#working-with-others)Working with Others

Project Config simplifies collaboration on big features by letting you share version-controlled settings and schema changes with others just as easily as [deploying](docs_5x__deploy.md) them. Multiple contributors’ changes can even be cleanly merged together.

Merge conflicts *can* still happen (when two contributors modify the same setting), but resolving them is rarely more difficult than a template or stylesheet—you’ll just have to run `php craft project-config/touch` and then `php craft project-config/apply` to ensure the final result is applied.

Any time you integrate new code into an environment (say, while developing locally, or deploying to a server), run `craft up` to apply pending migrations and Project Config changes.

## [#](#adopting-project-config)Adopting Project Config

If you had previously opted out or are upgrading from earlier than Craft 3.1, it’s still possible to get on board. Let’s look at how to get your environments in a consistent state:

1. Pick a primary environment that has the most up-to-date settings, and make sure it’s running the latest version of Craft. (If your project is already live, this should be your production environment!)
2. Go to **Utilities** → **Project Config** on that environment, and click the “Rebuild” button (or use the CLI: `php craft project-config/rebuild`) to ensure that its Project Config is up to date with settings stored throughout the database.
3. Back up the database on the primary environment.
4. In your secondary/development environment:
   - Import the database backup created in step #3;
   - Delete the contents of the `config/project/` folder;
   - Make a request to the control panel to trigger a regeneration of the YAML files in `config/project/`;
5. Disable the [allowAdminChanges](docs_5x__reference__config__general.md#allowadminchanges) config setting on the primary environment (and all non-development environments, for that matter) to avoid [losing changes](#production-changes-reverted), going forward.

It’s now safe to deploy changes in your `config/project/` folder to other environments!

## [#](#troubleshooting-trivia)Troubleshooting + Trivia

There are a few things you should keep in mind when working with Project Config:

### [#](#composer)Composer

When Craft tries to apply Project Config changes, it will first verify that the Craft and plugin schema versions declared in YAML are compatible with what’s actually installed. Inconsistencies can usually be resolved by running `composer install`.

`composer.lock` should be checked in to version control alongside Project Config files. To stay ahead of these errors, run `composer install` during every deploy and when integrating changes from collaborators!

### [#](#production-changes-reverted)Production Changes Reverted

Changes made to Project Config on production will likely be reverted the next time your site is deployed. Craft does not attempt to distinguish between explicit deletions and incidental removal of settings—if the incoming config has an “old” value (or omits the value entirely), Craft applies those changes.

To prevent this, set [allowAdminChanges](docs_5x__reference__config__general.md#allowadminchanges) to `false` in `config/general.php`, or via an [environment override](docs_5x__configure.md#environment-overrides):

```
CRAFT_ALLOW_ADMIN_CHANGES=false
```

This completely removes the UI for administrative settings, and places the entire Project Config service in a read-only state to prevent inadvertent modifications.

Craft *will* warn you in the control panel if the YAML files on disk appear to be “older” than the loaded config (based on the root `dateModified` property), but it is up to you to determine which version is correct.

### [#](#config-data-could-get-out-of-sync)Config Data Could Get Out of Sync

The recommended way to keep Project Config in sync is to version control `config/project/` and use the CLI to apply changes:

```
php craft project-config/apply
```

If any settings stored in Project Config are modified directly in the database (either manually or via a plugin/module that isn’t using the appropriate APIs), the state will be out of sync and likely result in errors. If that happens, Craft provides a console command that is effectively the reverse of `apply` (instead of taking YAML changes and applying them, it rebuilds YAML files from Craft’s internal state):

```
php craft project-config/rebuild
```

If changes are not being picked up during the apply process, you can use the `--force` option:

```
php craft project-config/apply --force
```

This will treat all Project Config values as added or updated, resulting in a longer sync process and potentially overriding any expected changes that might have been favored in the database.

### [#](#ids-uuids-and-handles)IDs, UUIDs, and Handles

Project Config uses UUIDs rather than IDs to track settings that are synchronized to the database. Unlike volatile IDs (or even `handle`s), UUIDs remain stable for the life of a section, entry type, category group, or other record—even when updating their handles.

You can (and should) still use handles in your templates, because there is no guarantee that referencing a resource by its ID will point to the same record in all environments! If you do find the need to use the ID of a system resource, you should use Craft’s APIs to look it up by its handle rather than hard-coding it:

```
{# Load the field definition via the fields API: #}
{% set matrixField = craft.app.fields.getFieldByHandle('myMatrixFieldHandle') %}

{# Use the loaded ID: #}
{% set myMatrixBlockQuery = craft.matrixBlocks()
  .owner(featuredPost)
  .fieldId(matrixField.id)
  .type('text')
  .all() %}
```

## [#](#manual-yaml-file-generation)Manual YAML File Generation

If you want control over *when* the Project Config YAML files are updated (or you want to opt out of saving them altogether) you can configure Craft to stop writing the YAML files automatically as changes are made. To do that, add the following to your `config/app.php` file:

```
return [
    // ...
    'components' => [
        // ...
        'projectConfig' => function() {
            $config = craft\helpers\App::projectConfigConfig();
            $config['writeYamlAutomatically'] = false;
            return Craft::createObject($config);
        },
    ]
];
```

You can manually trigger YAML file generation from the Project Config utility, or by running the following terminal command:

```
php craft project-config/write
```

If you already have YAML files generated, run the `project-config/write` command before updating Craft and/or plugins. Otherwise, the out-of-date YAML files could conflict with Project Config changes performed by the update migrations.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/system/project-config.md)
