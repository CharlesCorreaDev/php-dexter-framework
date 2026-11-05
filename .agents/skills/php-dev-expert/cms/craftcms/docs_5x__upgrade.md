# Upgrading from Craft 4 | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/upgrade

---

# Upgrading from Craft 4

- ### On this Page

  - [Preparing for the Upgrade](docs_5x__upgrade.md#preparing-for-the-upgrade)
  - [Performing the Upgrade](docs_5x__upgrade.md#performing-the-upgrade)
  - [Going Live](docs_5x__upgrade.md#going-live)
  - [Cleanup + Optional Steps](docs_5x__upgrade.md#cleanup-optional-steps)
  - [Breaking Changes and Deprecations](docs_5x__upgrade.md#breaking-changes-and-deprecations)
  - [Elements & Content](docs_5x__upgrade.md#elements-content)
  - [Assets](docs_5x__upgrade.md#assets)
  - [Plugins and Modules](docs_5x__upgrade.md#plugins-and-modules)

The smoothest way to upgrade to Craft 5 is to make sure your live site is already running the [latest version of Craft 4](https://craftcms.com/docs/4.x/updating). We recommend approaching the upgrade in three phases: [preparation](#preparing-for-the-upgrade), a [local upgrade](#performing-the-upgrade), and [rollout](#going-live) to live environments.

## [#](#preparing-for-the-upgrade)Preparing for the Upgrade

Let’s take a moment to audit and prepare your project.

- Your **live site** must be running the [latest version  (opens new window)](https://github.com/craftcms/cms/releases) of Craft 4 (you cannot upgrade directly from Craft 3 to Craft 5);
- The most recent Craft 4-compatible versions of all plugins are installed, and Craft 5-compatible versions are available;
- Your project is free of deprecation warnings after thorough testing on the latest version of Craft 4;
- All your environments meet Craft 5’s [minimum requirements](docs_5x__requirements.md) (the latest version of Craft 4 will run in any environment that meets Craft 5’s requirements, so it’s safe to update PHP and your database ahead of the 5.x upgrade):

  - PHP 8.2
  - MySQL 8.0.17+ using InnoDB, MariaDB 10.4.6+, or PostgreSQL 13+

    Due to its diverging parity with MySQL, we no longer recommend MariaDB for Craft 5. If you are not able to [migrate to MySQL  (opens new window)](https://blogs.oracle.com/mysql/post/how-to-migrate-from-mariadb-to-mysql-80), make sure your server is using the latest MariaDB version to avoid stability issues.
- You’ve reviewed the breaking changes in Craft 5 further down this page and understand that additional work and testing may lie ahead, post-upgrade;

Once you’ve completed everything above, you’re ready to start the upgrade process!

If your project uses custom plugins or modules, we have an additional [extension upgrade guide](docs_5x__extend__updating-plugins.md).

## [#](#performing-the-upgrade)Performing the Upgrade

Like [any other update](docs_5x__update.md), it’s essential that you have a safe place to test the upgrade prior to rolling it out to a live website.

These steps assume you have a local development environment that meets Craft 5’s [requirements](docs_5x__requirements.md), and that any changes made [in preparation for the upgrade](#preparing-for-the-upgrade) have been deployed to your live site.

Upgrading with DDEV

[DDEV  (opens new window)](https://ddev.com/) users should take this opportunity to [update  (opens new window)](https://ddev.readthedocs.io/en/stable/users/install/ddev-upgrade/) so that the `craftcms` project type reflects our latest recommendations.

In an existing DDEV project, you can change the PHP or database version with the `config` command…

```
ddev config --php-version=8.2
ddev config --database=mysql:8.0
ddev start
```

…or use `ddev config --update` to reapply project type defaults.

1. Capture a fresh database backup from your live environment and import it.
2. Make sure you don’t have any pending or active jobs in your queue.
3. Run `php craft project-config/rebuild` and allow any new background tasks to complete.
4. Run `php craft utils/fix-field-layout-uids`.
5. Deploy any project config changes to your live environment. (Be sure to run `php craft up` or `php craft pc/apply`.)
6. Note your current **Temp Uploads Location** setting in **Settings** → **Assets** → **Settings**.
7. MySQL users: Add your database’s *current* character set and collation to `.env`. If you have always used Craft’s defaults, this will be:

   ```
   CRAFT_DB_CHARSET="utf8mb3"
   CRAFT_DB_COLLATION="utf8mb3_general_ci"
   ```

   Read more about this process in the [Database Character Set and Collation](#database-character-set-and-collation) section, below.
8. Visit the **Craft 5 Upgrade** utility, and press **Prep `composer.json`** to generate an updated version of your `composer.json`.
   You may copy this output verbatim into your project, or transcribe individual version constraints.
   Craft also adjusts [your `platform` config  (opens new window)](https://getcomposer.org/doc/06-config.md#platform) to agree with Craft 5’s requirements.

   ![Screenshot of the Upgrade utility showing a button labeled “Prep composer.json”](/docs/assets/img/upgrade-prep-composer.54ebff91.png)

   Beta versions of plugins may be suggested!
   Adjust your [`minimum-stability`  (opens new window)](https://getcomposer.org/doc/04-schema.md#minimum-stability) and [`prefer-stable`  (opens new window)](https://getcomposer.org/doc/04-schema.md#prefer-stable) settings if those plugins depend on other packages that do not yet have stable releases.
   This tool does *not* adjust your project’s other dependencies; many projects require `craftcms/generator`, which has been updated to `^2.0.0` for Craft 5.

   To perform this step manually, change your `craftcms/cms` constraint to `^5.0.0`, and each plugin’s constraint to the Craft 5-compatible versions listed in the upgrade utility.
   You must make *all* of these edits before proceeding!
9. Run `composer update`.
10. Make any required changes to your [configuration](#configuration).
11. Run `php craft up`.
12. MySQL users: Remove your database character set and collation settings from `.env` (and `db.php`—even if you didn’t modify it during the upgrade), then run `php craft db/convert-charset`.

Your site is now running Craft 5! If you began this process with no deprecation warnings, you’re nearly done.

Thoroughly review the list of changes on this page, making note of any features you use in templates or modules. Only a fraction of your site’s code is actually evaluated during an upgrade, so it’s your responsibility to check templates and modules for consistency. You may also need to follow any plugin-specific upgrade guides.

## [#](#going-live)Going Live

The Craft 5 upgrade can be run largely unattended during a routine deployment. Once you’ve performed the upgrade in your local environment and everything is working as expected, commit your updated `composer.json`, `composer.lock`, and `config/project/` directory, as well as any template, configuration, or module files that required updates.

MySQL users must add the correct [character set and collation settings](#database-character-set-and-collation) to each remote environment for the duration of the upgrade.

Deploy your changes to each environment, then run `php craft up`.

If you added temporary character set or collation settings for the upgrade, remove them now, then run `php craft db/convert-charset` to apply Craft 5’s new defaults to all tables.

Read more about this part of the upgrade in the [Database Character Set and Collation](#database-character-set-and-collation) section, below.

## [#](#cleanup-optional-steps)Cleanup + Optional Steps

### [#](#field-and-entry-type-consolidation)Field and Entry Type Consolidation [5.3.0+](https://github.com/craftcms/cms/blob/5.3.0/CHANGELOG.md "Field type and entry type consolidation commands was first available in version 5.3.0 of Craft.")

Craft 5.3 introduced three new commands for consolidating fields and entry types, post-upgrade:

- `fields/auto-merge` — Automatically discovers functionally identical fields and merges their uses together.
- `fields/merge` — Manually merge one field into another of the same type and update uses of the merged field.
- `entry-types/merge` — Merge one entry type into another and update uses of the merged entry type.

These tools are particularly useful on projects with many Matrix fields containing similar block types, or multiple sections with similar entry types. While the upgrade doesn’t result in *more* fields or entry types and block types than existed previously, it can result in some ergonomic problems with the new content architecture!

We recommend you approach consolidation in the following order, *after* getting your project fully upgraded and deployed.

In addition to updating project config, this process generates content migrations. You must commit these files to version control and run `craft up` in all other environments to apply the changes!

#### [#](#auto-merging-fields)Auto-merging Fields

Your first step should be to try auto-merging field definitions:

```
ddev craft fields/auto-merge
```

Craft will audit your fields, and propose batches of merge candidates. To accept a merge, type `y` and press `Enter`, then choose the field you want to merge the duplicates into.

The usage of any merged fields in field layouts and templates will remain the same after merging global field definitions. Any overridden names, handles, instructions, and so on will remain. One exception here is if a name or handle override is present but the same as the merged global field’s name: Craft clears the override so that it can be better kept in sync, moving forward.

Don’t like how Craft grouped some of the fields? You can skip any proposed merge and come back to the command later—say, after [manually merging](#manually-merging-fields) a few of the fields.

Merged fields’ search keywords are also combined, which may affect the quality of results when [searching by field handles](docs_5x__system__searching.md#multi-instance-fields).

#### [#](#manually-merging-fields)Manually Merging Fields

For any additional fields you wish to merge (or merge candidates you skipped in the previous step), run the `fields/merge` command as many times as necessary to consolidate them:

```
ddev craft fields/merge myFirstDropdownField mySecondDropdownField
```

To merge multiple fields together, choose the field you want to persist, and run the command multiple times, passing each redundant field as the first argument, and the target field as the second, i.e:

```
ddev craft fields/merge ctaDonate ctaAbout
ddev craft fields/merge ctaStaff ctaAbout
ddev craft fields/merge ctaFoundation ctaAbout
```

#### [#](#merging-entry-types)Merging Entry Types

Once your field definitions have been consolidated, merging entry types is greatly simplified. Here’s how Craft handles fields during a merge:

- Any field instances that map to the same custom field (and have the same handle) will be left alone in the persistent entry type.
- Any single-instance fields that exist in both entry types (but with *different* handles) will be left alone in the persistent entry type, and the command will note the handle change for fields of the outgoing entry type.
- Any other fields in the outgoing entry type will be added to the persistent entry type under a “Merged Fields” tab. Any handle conflicts will be resolved by incrementing the handle of the merged field, and the handle change will be noted in the command’s output.

There is no “automatic” equivalent for merging entry types—each merge must be run manually:

```
ddev craft entry-types/merge quote pullQuote
```

To merge entry types, Craft takes the following actions:

1. The persistent entry type’s field layout is updated with any new fields from the outgoing entry type.
2. Sections and fields that use the outgoing entry type are updated to use the persistent entry type, instead (if it wasn’t already available in that context).
3. The outgoing entry type is removed.
4. A content migration is generated an run, remapping entries of the outgoing entry type to the persistent one, and entries’ JSON content is updated with the correct layout element UUIDs.

Merging is concerned only with custom fields. Other field layout elements (like tips, rules, breaks, or templates) are *not* merged into the persisted entry type.

### [#](#entry-scripts)Entry Scripts

Older projects may use versions of [`vlucas/phpdotenv`  (opens new window)](https://github.com/vlucas/phpdotenv) (the library that loads variables from your `.env` file) that depend on features deprecated in PHP 8.1. If you encounter errors during (or after) installation, change your `vlucas/phpdotenv` dependency in `composer.json` to `^5.6.0`, then run `composer update`.

Along with this update, you’ll need to integrate changes from our [starter project  (opens new window)](https://github.com/craftcms/craft)’s `web/index.php` script and `craft` executable. If you have done any low-level customization of Craft via [bootstrap constants](docs_5x__configure.md#bootstrap-config), make sure those values are preserved in the appropriate file(s)—constants shared between the two files can be moved to a common [`bootstrap.php` file  (opens new window)](https://github.com/craftcms/craft/blob/5.x/bootstrap.php).

## [#](#breaking-changes-and-deprecations)Breaking Changes and Deprecations

Features deprecated in Craft 4 may have been fully removed or replaced in Craft 5, and new deprecations have been flagged in Craft 5.

This list focuses on high-traffic, user-facing features. Review the [complete changelog  (opens new window)](https://github.com/craftcms/cms/blob/5.x/CHANGELOG.md) for information about changes to specific APIs, including class deprecations, method signatures, and so on.

### [#](#configuration)Configuration

The following settings have been changed.

#### [#](#database-character-set-and-collation)Database Character Set and Collation

MySQL 8.0 [deprecated the `utf8mb3` character set  (opens new window)](https://dev.mysql.com/doc/refman/8.0/en/charset-unicode-utf8mb3.html), as well as [the use of `utf8` as an alias for `utf8mb3`  (opens new window)](https://dev.mysql.com/doc/refman/8.0/en/charset-unicode-utf8.html). MySQL [recommends `utf8mb4`  (opens new window)](https://dev.mysql.com/doc/refman/8.0/en/charset-unicode-utf8mb4.html) instead, and it’s expected that `utf8` will become an alias for `utf8mb4` in MySQL 8.1.

To ease that transition, Craft 5 is proactively treating `utf8` as `utf8mb4` for MySQL and MariaDB installs.

During the Upgrade

Explicitly setting the character set and collation ensures compatibility of new tables *during* the upgrade—afterwards, those settings can be scrubbed and the tables can be converted via Craft’s CLI. Here’s how this will look, in practice.

If you have never customized character set or collation settings for your database connection, set these variables in your `.env` file during the upgrade:

```
CRAFT_DB_CHARSET="utf8mb3"
CRAFT_DB_COLLATION="utf8mb3_general_ci"
```

If you *are* using these settings (either from `.env` or `db.php`), they can be left as-is, for now.

Once the upgrade is complete in an environment, convert your tables to `utf8mb4` by *removing* the `CRAFT_DB_CHARSET` and `CRAFT_DB_COLLATION` environment variables (and clearing any `charset` and `collation` settings from `db.php`)…

```
# …or set them to Craft’s defaults…
CRAFT_DB_CHARSET="utf8mb4"
CRAFT_DB_COLLATION="utf8mb4_0900_ai_ci" # MySQL
CRAFT_DB_COLLATION="utf8mb4_unicode_ci" # MariaDB
```

…then running `php craft db/convert-charset`.

#### [#](#template-priority)Template Priority

The [defaultTemplateExtensions](docs_5x__reference__config__general.md#defaulttemplateextensions) config setting now lists `twig` before `html`, by default. This means that projects with templates that share a name (i.e. `widget.twig` and `widget.html`, *in the same directory*) may behave differently in Craft 5. Audit your `templates/` directory for any overlap to ensure consistent rendering. If all your templates use one extension or another, no action is required!

This setting only affects rendering of templates in the front-end; the control panel will *always* use `.twig` files before `.html`.

#### [#](#volumes-filesystems)Volumes & Filesystems

Multiple [asset volumes](docs_5x__reference__element-types__assets.md) can now share a filesystem! However, they must be carefully arranged such that each volume has a unique and non-overlapping base path.

When selecting a filesystem, options that would result in a collision between two volumes are not shown. This means that you may need to adjust multiple volumes’ configuration in order to consolidate them into a single filesystem.

### [#](#templates)Templates

#### [#](#variables)Variables

With the elimination of Matrix blocks as a discrete element type, we have removed the associated element query factory function from [craft\web\twig\variables\CraftVariable  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-craftvariable.html).

| Old | New |
| --- | --- |
| `craft.matrixBlocks()` | `craft.entries()` |

See the section on [Matrix fields](#matrix-fields) for more information about these changes.

### [#](#graphql)GraphQL

The reusability of entry types means that some GraphQL queries have changed.

- GraphQL types corresponding to entry types no longer include their section names. In Craft 4, entries a section named “Ingredients” with the entry type “Ingredient” might have been represented in GraphQL as a type named `ingredients_ingredient_Entry`. That type would now be named `ingredient_Entry`.

  Entries can still be queried by section using the corresponding query type (i.e. `ingredientsEntries`) or the `section` argument for the generic `entries` query:

  Section QueryGeneric Query

  ```
  query MyIngredients {
    ingredientsEntries {
      ... on ingredient_Entry {
        title
      }
    }
  }
  ```

  ```
  query MyIngredients {
    entries(section: "ingredients") {
      ... on ingredient_Entry {
        title
      }
    }
  }
  ```

  The corresponding queries for entries nested within a Matrix field would look like this:

  Field QueryGeneric Query

  ```
  query DifficultSteps {
    stepsFieldEntries(difficulty: "hard") {
      ... on step_Entry {
        title
        estimatedTime
      }
    }
  }
  ```

  ```
  query DifficultSteps {
    entries(field: "steps", difficulty: "hard") {
      ... on step_Entry {
        title
        estimatedTime
      }
    }
  }
  ```
- The names of mutations targeting entries in a particular section remain unchanged, and still include the section and entry type handles, i.e: `save_ingredients_ingredient_Entry` and `save_ingredients_ingredient_Draft`.
- Mutations directly targeting nested entries in Matrix fields will use a similar structure, but combining the field handle and entry type handle: `save_stepsField_step_Entry`.
- When mutating a Matrix field value via GraphQL, the nested entries must be passed under an `entries` key instead of a `blocks` key:

  ```
  mutation AddStep {
    save_recipes_recipe_Entry(
      title: "Yummy Bits and Bytes"
      summary: "Chocolate chip cookies that are out of this world!"
      steps: {
        entries: [
          {
            step: {
              difficulty: "hard",
              instructions: "Preheat oven to 20,000,000°F",
              estimatedTime: 120,
              id: "new:1"
            }
          }
          # ...
        ],
        sortOrder: [
          "new-first"
        ]
      }
    ) {
      title
      id
    }
  }
  ```

### [#](#field-types)Field Types

#### [#](#url-→-link)URL → Link [5.3.0+](https://github.com/craftcms/cms/blob/5.3.0/CHANGELOG.md "Link fields was first available in version 5.3.0 of Craft.")

URL fields will be converted to [Link](docs_5x__reference__field-types__link.md) fields during the upgrade. Your templates *do not* require any updates, but projects that use custom field values in PHP may need to update type hints or use a specific member of the new [craft\fields\data\LinkData  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-data-linkdata.html) object:

OldNew (Types)New (Member)

```
use craft\base\Element;

class MyHelper
{
    public static function getUrl(Element $element, string $fieldHandle): string
    {
        return $element->$fieldHandle;
    }
}
```

```
use craft\base\Element;
use craft\fields\data\LinkData;

class MyHelper
{
    public static function getUrl(Element $element, string $fieldHandle): LinkData
    {
        // The return type is now an object instead of a string!
        return $element->$fieldHandle;
    }
}
```

```
use craft\base\Element;
use craft\fields\data\LinkData;

class MyHelper
{
    public static function getUrl(Element $element, string $fieldHandle): string
    {
        // The signature can stay the same if you return a specific property:
        return $element->$fieldHandle->url;
    }
}
```

The new field type supports linking to elements, in addition to text-based URLs—[check out its options](docs_5x__reference__field-types__link.md#settings) to see if it can help simplify some of your authoring interfaces!

## [#](#elements-content)Elements & Content

Craft 5 has an entirely new content storage architecture that underpins many other features.

### [#](#content-table)Content Table

The content table has been eliminated! Elements now store their content in the `elements_sites` table, alongside other localized properties.

Content is stored as a JSON blob, and is dynamically indexed by the database in such a way that all your existing element queries will work without modification.

#### [#](#advanced-queries)Advanced Queries

When using custom fields in [advanced `where()` conditions](docs_5x__development__element-queries.md#advanced-element-queries), you no longer need to manually assemble a database column prefix/suffix. Instead, Craft can generate the appropriate expression to locate values in the JSON content column:

TwigPHP

```
{% set entriesFromPhysicalMedia = craft.entries()
  .section('news')
  .andWhere([
    'or like',
    fieldValueSql(entryType('post'), 'sourceMedia'),
    ['print', 'paper', 'press']
  ])
  .all() %}
```

```
use Craft;
use craft\elements\Entry;

$entryType = Craft::$app->getEntries()->getEntryTypeByHandle('post');
$fieldLayout = $entryType->getFieldLayout();
$sourceField = $fieldLayout->getFieldByHandle('sourceMedia');

$entriesFromPhysicalMedia = Entry::find()
  ->section('news')
  ->andWhere([
    'or like',
    $sourceField->getValueSql(),
    ['print', 'paper', 'press'],
  ])
  ->all();
```

This ensures that you are querying for the correct instance of a [multi-instance field](docs_5x__system__fields.md#multi-instance-fields), each of which will store their content under a different UUID in their respective field layouts.

Craft already knows how to query against the appropriate instance of a field when using its handle as a query method, so this is only necessary for complex or compound conditions that make use of low-level query builder features.

#### [#](#case-sensitivity)Case-Sensitivity

MySQL users should review queries against [textual custom field values](docs_5x__development__element-queries.md#case-sensitivity) for consistency. The following query using a lower-case name will no longer match a capitalized value:

```
{% set entries = craft.entries()
  .section('departments')
  .deptHeadNameFirst('oli')
  .all() %}
```

If you don’t have control over the query *value* (say, it comes from a third-party feed), consider updating the query to use the new `caseInsensitive` option:

```
{% set entries = craft.entries()
  .section('departments')
  .deptHeadNameFirst({
    value: 'oli',
    caseInsensitive: true,
  })
  .all() %}
```

Textual condition rules in [custom sources](docs_5x__system__elements.md#sources) and [field layouts](docs_5x__system__fields.md#conditions) are always handled case-insensitively.  [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Condition rules were made case-insensitive in Craft 5.9.0")

### [#](#matrix-fields)Matrix Fields

During the upgrade, Craft will automatically migrate all your Matrix field content to entries. In doing so, new globally-accessible fields will be created with a unique name:

```
{Matrix Field Name} - {Block Type Name} - {Field Name}
```

These fields are then assigned to new [entry types](docs_5x__reference__element-types__entries.md#entry-types) that replace your existing Matrix block types.

Field labels and handles are retained, within their field layouts—even if they collide with other fields in the [global space](docs_5x__system__fields.md#multi-instance-fields)!

Queries for nested entries will be largely the same—equivalent methods have been added to [craft\elements\db\EntryQuery  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-entryquery.html) to enable familiar usage. The `.owner()` method still accepts a list of elements that the results must be owned by, and the `field()` and `fieldId()` methods narrow the results by those belonging to specific fields.

Values passed to the `type()` method of [entry queries](docs_5x__reference__element-types__entries.md#querying-entries) may require updates, as migrated entry types *can* receive new handles. For example, a Matrix field that contained a block type with the handle `gallery` might conflict with a preexisting entry type belonging to a section; in that event, the new entry type for that block would get the handle `gallery1` (or potentially `gallery2`, `gallery3`, and so on, if multiple similar Matrix fields are being migrated).

Craft will set [local overrides for entry type names and handles](docs_5x__reference__element-types__entries.md#aliases) so that the control panel experience is as consistent as possible, post-upgrade—but this does *not* change the query behavior. It *does*, however, make most templates that tested Matrix block type handles (i.e. `myBlock.type.handle == 'carousel'`, or within a [`switch` tag](docs_5x__reference__twig__tags.md#switch)) compatible.  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Local overrides for entry type names and handles was first available in version 5.6.0 of Craft.")

Visit

1. Settings→
2. Entry Types

to check if any handles appear to have collided in this way, then review and update templates as necessary.

*Matrix block type IDs were not stable in Craft 4, and will change as they are converted to entry types. If you maintain code that loaded Matrix block definitions by hard-coded IDs, it will no longer work in Craft 5.*

### [#](#eager-loading)Eager-Loading

[Eager-loading](docs_5x__development__eager-loading.md) has been dramatically simplified for most sites. You no longer need to tell Craft which relational fields to load via the `.with()` query method—instead, call `.eagerly()` on any query that *may* result in an N+1 problem to automatically trigger eager-loading:

BeforeAfter

```
{% set articles = craft
    .entries()
    .section('blog')
    .with([
        ['featureImage'],
    ])
    .all() %}

{% for article in articles %}
  {% set image = article.featureImage|first %}
  {% if image %}
    {{ image.getImg() }}
  {% endif %}
{% endfor %}
```

```
{% set articles = craft
    .entries()
    .section('blog')
    .all() %}

{% for article in articles %}
  {% set image = article.featureImage.eagerly().one() %}

  {# Testing whether there was a result is still a good idea: #}
  {% if image %}
    {{ image.getImg() }}
  {% endif %}
{% endfor %}
```

This feature does have *some* limitations, though. While it will work for all elements connected via a [relational](docs_5x__system__relations.md) or Matrix field, you will still need to explicitly eager-load native attributes like entries’ `author` (and now `authors`, *plural*) or assets’ `uploader`. Craft can only detect eager-loading opportunities when the original attribute or value is an element query. The two strategies can be safely combined, though:

```
{% set articles = craft
    .entries()
    .section('blog')
    .with([
      ['author'],
    ])
    .all() %}

{% for article in articles %}
  {# Lazily-eager-loaded relation: #}
  {% set image = article.featureImage.eagerly().one() %}

  {% if image %}
    {{ image.getImg() }}
  {% endif %}

  {# Explicitly eager-loaded element: #}
  <span>{{ article.author.fullName }}</span>
{% endfor %}
```

[Eager-Loading Elements
→

Read more about opportunities to optimize your templates with automatic and manual eager-loading.](docs_5x__development__eager-loading.md)

## [#](#assets)Assets

### [#](#reusable-filesystems)Reusable Filesystems

Filesystems can now be shared by multiple asset volumes, so long as each volume has a unique and non-overlapping base path. The [assets](docs_5x__reference__element-types__assets.md) page has more information on this new behavior.

### [#](#temporary-filesystem)Temporary Filesystem

The new [tempAssetUploadFs](docs_5x__reference__config__general.md#tempassetuploadfs) general config setting has replaced the **Temp Uploads Location** setting in the **Settings** → **Assets** → **Settings** screen. If you noted a custom asset volume in the upgrade process, you will need to follow these steps to set up a distinct filesystem for temporary uploads. Otherwise, Craft will use the legacy behavior and fall back on an instance of [craft\fs\Temp  (opens new window)](https://docs.craftcms.com/api/v5/craft-fs-temp.html), which puts temporary uploads in a folder in your local [`storage/` directory](docs_5x__system__directory-structure.md).

Load-balanced or ephemeral environments that rely on a centralized storage solution should define a temporary upload filesystem using the steps below.

The location of temporary uploads is now defined by way of a *filesystem* instead of a *volume*:

1. Create a new filesystem by visiting **Settings** → **Filesystems**, giving it an appropriate **Name** and **Handle** (users will not see this, so something like “Temporary” or “Scratch” is fine).
2. Set the **Base Path** to agree with the old volume, keeping in mind that previously, its subpath and its filesystem’s base path were combined.
3. Add the handle you chose to your [general config](docs_5x__reference__config__general.md#tempassetuploadfs) file or define a `CRAFT_TEMP_ASSET_UPLOAD_FS` [environment override](docs_5x__configure.md#environment-overrides).

A filesystem designated by your `tempAssetUploadFs` setting cannot be reused for volumes or image transforms, so it will not appear in filesystem selection menus. If you elect to define the temporary uploads filesystem handle via an *environment variable*, be sure and add it to your other environments as well!

## [#](#plugins-and-modules)Plugins and Modules

Plugin authors (and module maintainers) should refer to our guide on [updating Plugins for Craft 5](docs_5x__extend__updating-plugins.md).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/upgrade.md)
