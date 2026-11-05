# Running Updates | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/update

---

# Running Updates

- ### On this Page

  - [Using the Control Panel](docs_5x__update.md#using-the-control-panel)
  - [Updating from the Terminal](docs_5x__update.md#updating-from-the-terminal)
  - [Workflow](docs_5x__update.md#workflow)
  - [Licensing](docs_5x__update.md#licensing)
  - [Upgrade Guides](docs_5x__update.md#upgrade-guides)

Craft has a smart system based on [Composer  (opens new window)](https://getcomposer.org) that helps you keep your site and plugins up-to-date. This page covers routine *updates* to dependencies, which we consider a distinct process from [major-version *upgrades*](#major-versions).

## [#](#using-the-control-panel)Using the Control Panel

When an update is available, users with the permission to update Craft will see a badge in the [control panel](docs_5x__system__control-panel.md) next to

1. Utilities

in the global navigation:

![Screenshot of control panel cropped to “Utilities” global navigation item, which contains a circular badge with the number “1” in it](/docs/assets/img/update-badge.7a26b3e3.png)

Click

1. Utilities→
2. Updates

. You can also get to this view directly from the **Updates** widget that’s installed by default in the control panel [dashboard](docs_5x__system__control-panel.md#dashboard).

This section displays updates for Craft CMS and installed plugins, where each version has its own collapsible panel detailing relevant changes.

![Stylized screenshot of “Updates” page, which displays two plugins with newer versions with collapsible panes detailing their changes](/docs/assets/img/updates.ce576d00.png)

You can update one dependency at a time using its **Update** button, or update everything with the **Update All** at the top of the screen. If you don’t see these options, ensure the [allowUpdates](docs_5x__reference__config__general.md#allowupdates) and [allowAdminChanges](docs_5x__reference__config__general.md#allowadminchanges) settings are enabled in your current environment. We generally *do not* recommend applying updates in a non-development environment—see our [workflow](docs_5x__deploy.md) page for details.

Craft’s [changelog  (opens new window)](https://github.com/craftcms/cms/blob/5.x/CHANGELOG.md) will warn you of any critical changes at the top of the release notes. While there aren’t *usually* any warnings, it’s always a good idea to check the changelog and [any upgrade guides](#upgrade-guides) before updating.

Urgent messages from changelogs (like security patches) are exposed as a banner in the control panel to all administrators.

After Craft successfully installs the updates, it will run any new migrations.

## [#](#updating-from-the-terminal)Updating from the Terminal

### [#](#craft-cli)Craft CLI

The [`update` console command](docs_5x__reference__cli.md#update) can be used to update Craft and plugins.

To see available updates, navigate to a Craft project directory in your terminal and run this command:

DDEVGeneric

```
ddev craft update
```

```
php craft update
```

You should see output like this:

```
Fetching available updates ... done
You’ve got two available updates:

    - craft 5.4.8 => 5.4.9
    - commerce 5.2.1 => 5.2.2

Run craft update all or craft update <handle> to perform an update.
```

To update everything all at once, run this command:

DDEVGeneric

```
ddev craft update all
```

```
php craft update all
```

To apply a specific update, replace `all` with `craft` (to update Craft itself) or a plugin’s handle:

DDEVGeneric

```
ddev craft update commerce
```

```
php craft update commerce
```

```
Fetching available updates ... done
Performing one update:

    - commerce 5.2.1 => 5.2.2

Create database backup? (yes|no) [yes]:
Backing up the database ... done
Performing update with Composer ... done
Applying new migrations ... done
Update complete!
```

You can pass multiple handles in at once:

DDEVGeneric

```
ddev craft update commerce element-api
```

```
php craft update commerce element-api
```

#### [#](#version-behavior)Version Behavior

The updater installs the latest available version of Craft or a plugin, unless you append `:<version>` to the handle, where `<version>` is a legal Composer constraint:

DDEVGeneric

```
ddev craft update element-api:4.1.0
```

```
php craft update element-api:4.1.0
```

After an update is performed from the CLI, Craft will apply any relevant migrations.

Use the `--minor` or `--patch` flag when running `craft update` to update in finer increments. Pass `--except craft,plugin-name` to update all but the provided package(s).

As of Craft [5.9.0  (opens new window)](https://github.com/craftcms/cms/releases/tags/5.9.0), constraints are set using the caret (`^`) operator for better interoperability with direct [Composer](#composer) usage.
The updater will *not* update expired packages.

If for any reason you end up with a set of installed packages outside what a license allows (say, by alternating between the built-in updater and Composer CLI), Craft will warn you when running `craft up`:

```
The following licensing issues were detected:
- Commerce isn’t licensed to run version 5.5.1.
- ...

Continue anyway? (yes|no) [no]:
```

### [#](#composer)Composer

`craft update` is mostly a wrapper around Composer—but you can use Composer directly for more control over the update process.
The main behavioral difference is that `craft update` will *never* update Craft or plugin versions beyond what is permitted by their respective licenses.

When using version constraints, `composer.lock` will still make sure you get a stable set of packages from `composer install`. To update all your packages to the most recent versions allowed by their constraints, run `composer update`. Update a *single* package by specifying it in the command: `composer update craftcms/cms`.

If you have used Craft’s [control panel](#using-the-control-panel) or [CLI](#craft-cli) updater in the past, `composer update` may do nothing!

Open `composer.json`, and look at the packages under the `require` key—if you see exact version numbers (i.e. `2.3.4`), Composer will never update those packages.

Keep in mind that manually altering constraints *can* lead to an irreconcilable set of packages—Composer will let you know about this before updating the lockfile.
Generally speaking, the “major-version” constraints set automatically when using `composer require ...` should continue to work, while protecting your project from breaking changes in dependencies.

## [#](#workflow)Workflow

Every time you [deploy](docs_5x__deploy.md) your project, you should run `composer install` and `craft up` to bring that environment’s dependencies and database into agreement with your packages and their expected schema version.

The same applies when working with teammates! Any time you pull new code into a project, running `composer install` will guarantee you are working with the same set of packages as your collaborators. If you’re one for automation, you can even have Craft apply migrations and [project config](docs_5x__system__project-config.md) at the same time by adding a special hook to the `scripts` key in `composer.json`:

```
{
    "require": {
        "craftcms/cms": "^5.0.0",
        "vlucas/phpdotenv": "^5.4.0"
        // ...
    },
    // ...
    "scripts": {
        "post-install-cmd": "@php craft install/check && php craft up --interactive=0 || exit 0"
    }
}
```

This tells Composer that *after* it has successfully installed packages from a lockfile (typically the result of running `composer install`), it should check if Craft is installed (`@php craft install/check`) and if so, run `craft up` non-interactively to apply migrations and project config. `|| exit 0` ensures that the command exits nominally, so as not to disrupt other processes that expect `composer install` to succeed.

Running `craft up` will warn you before running migrations if there are licensing issues with the installed packages—say, as the result of using [Composer](#composer) directly.  [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Warnings about licensing issues when running `craft up` was first available in version 5.9.0 of Craft.")

## [#](#licensing)Licensing

When you buy a Craft or plugin license, you are entitled to use that version (or any version that you update to, during the year of included updates) in perpetuity.
To get the most out of your licenses, run updates frequently!

## [#](#upgrade-guides)Upgrade Guides

Each version of the Craft documentation contains an equivalent of the [Upgrading from Craft 4](docs_5x__upgrade.md) page, which covers the process of upgrading from one [major version](#major-versions) to the next.

Sometimes, there are significant changes to be aware of—even in minor or “point” releases. The most common changes that fit this criteria are deprecations. Deprecation notices will be accompanied by instructions for updating your code to work with the new APIs. Any features that are subsequently removed in a major release will also be noted in the new version’s upgrade guide.

Deprecation warnings will affect plugin developers more frequently than regular users—but it’s still a good idea to keep your eye on the **Deprecation Warnings** utility.

### [#](#major-versions)Major Versions

For the smoothest upgrade experience, projects must be updated to the latest available *minor* version preceding a *major* version upgrade. We do not support “skipping” versions, so if your site is running Craft 3, you must first update to the latest 3.x version, then perform the 3.x → 4.x upgrade, then perform the 4.x → 5.x upgrade.

You should always upgrade to the latest release in a given major Craft version—for example, you can upgrade directly from 4.12.8 (or whatever the latest 4.x release is) to 5.4.9 (or whatever the latest 5.x release is).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/update.md)
