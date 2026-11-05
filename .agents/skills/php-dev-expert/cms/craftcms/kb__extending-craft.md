# Guides: Extending Craft | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/extending-craft

---

Search Knowledge Base

# Extending Craft Articles

- [Plugin Store Approval Process

  Every plugin on the Craft Plugin Store must be submitted for review and approval by the Craft CMS team.
  We check that each plugin provides some common, tangible value to the community and...
  Has a matching Plugin Name, Package Name, and Plugin Handle that’s consistent in composer.json.
  Does not have a name beginning with “Craft”.
  Has its own unique Icon.
  Has appropriate Plugin Store Categories and Keywords.
  Has a working Documentation URL.
  Has a correct Changelog Path.
  Designates a license in composer.json expressed by LICENSE.md.
  Uses the Craft license if it’s a commercial plugin. (An MIT license is acceptable, but will probably require follow-up.)
  Has Short Description and Long Description text that describes the plugin’s purpose and value.
  We typically review and respond to submissions within one business day, and the developer can expect a notification of acceptance or rejection. If the submitted plugin is rejected, the notification will include recommendations for resubmission.](kb__plugin-store-approval-process.md "Plugin Store Approval Process")
- [Query Batching with Db::batch() + Db::each()

  When you need to work with a large data set, you run the risk of running into memory limit errors if you fetch all the data at once.
  To mitigate that risk, you can use query batching, which divides the data into batches, in theory limiting the amount of memory PHP is consuming.
  Yii provides two methods for executing a query in batches: yii\db\Query::batch() and yii\db\Query::each().
  However, MySQL connections are buffered by default, so they’ll still return all the data to PHP at once, mostly eliminating any benefit you’d expect from batching the query.](kb__query-batching-batch-each.md "Query Batching with Db::batch() + Db::each()")
- [Renaming a Field Type Class

  Renaming a field type’s class name (or its namespace) can be a little tricky when it comes to updating existing fields:
  Updating the type values in the fields table is insufficient, because those changes won’t automatically effect the project config. The project-config/rebuild command would need to be run afterward, which could be easily overlooked.
  Updating the fields’ config arrays within the project config isn’t very practical either, because field configs aren’t stored centrally. (Global fields are stored under fields, but Matrix sub-fields are stored within their block type configs, etc.)
  Therefore it’s recommended that field classes aren’t immediately renamed at all. Instead, the old class name should be registered as an alias of the new class name, using class\_alias().
  Register the legacy autoload root
  If the plugin’s root namespace has changed (e.g. acme\myplugin\ → bigco\myplugin\), the plugin will need to add the old root namespace to its autoload array within composer.json, pointed to a separate source folder such as src-legacy/:
  `json
  {
  "autoload": {
  "psr-4": {
  "bigco\\myplugin\\ "src/",
  "acme\\myplugin\\": "src-legacy/"
  }
  },
  "...": "..."
  }
  `
  Make the old class autoloadable
  For Composer’s autoloader to continue supporting the old class, it must be able to find it. So create a file with the same name as the old class name, in the appropriate directory based on the PSR-4 autoloading standard.
  For example, if the old class name was acme\myplugin\fields\MyField and there’s a registered namespace root for acme\myplugin\ pointed to src-legacy/, that file should be located at src-legacy/fields/MyField.php.
  The file should contain a class definition (wrapped within a false condition so it never actually gets executed), plus a class\_exists() call, which will cause the new class to get autoloaded:
  `php
  namespace acme\myplugin\fields;
  if (false) {
  class MyField {}
  }
  class\_exists(\bigco\myplugin\fields\MyField::class);
  `
  Register the class alias
  Finally, register the class alias at the end of the new field type’s PHP file:
  `php
  namespace bigco\myplugin\fields;
  class MyField {
  // ...
  }
  class\_alias(MyField::class, \acme\myplugin\fields\MyField::class);
  `
  With that in place, if any fields are still set to the old class name, the autoloader will initially load the old field class’ PHP file, which in turn will load the new class and the alias, and the new class will be used instead.](kb__renaming-a-field-type-class.md "Renaming a Field Type Class")
- [Using Events in a Custom Module

  One way to customize Craft’s behavior is by listening to events it emits, and reacting, altering, or suppressing them using your own logic.](kb__custom-module-events.md "Using Events in a Custom Module")
- [Handling Entry Saves

  In Craft, drafts and revisions are elements, just like their live versions. While this provides a clean, consistent way of working with versioned content in the control panel, templates, and API, it means that some events—particularly those emitted when saving entries—occur more frequently than you might expect.](kb__handling-entry-saves.md "Handling Entry Saves")
- [Updating Plugins for Craft 3.4

  Craft 3.4 introduced a few changes in behavior for plugins and modules.
  Control Panel Styles
  Craft’s control panel got a new look and feel in Craft 3.4. If your plugin is providing its own styling, or doing anything with JavaScript off the beaten path, make sure that it continues to function and look right.](kb__updating-plugins-for-craft-34.md "Updating Plugins for Craft 3.4")
- [How to Temporarily Disable a Plugin

  If you suspect a plugin is causing issues for your Craft project, you can temporarily disable it from the control panel, or via configuration.
  Control Panel
  Log in to the control panel with an Admin account, and navigate to Settings → Plugins.](kb__disable-a-plugin.md "How to Temporarily Disable a Plugin")
- [Updating Plugins for Craft 3.1

  Here’s what you should consider testing your plugins for Craft 3.1 compatibility.
  Don’t Change Database Data Directly
  Review the list of things Craft is now storing in the project config, and make sure you’re not manipulating that data directly in the database anywhere, such as from your plugin migrations. (The list includes plugins’ global settings.)
  You can either use service APIs (e.g. craft\services\Fields::saveField()), or manipulate the project config data directly using craft\services\ProjectConfig::set(), which will trigger event listeners to update database data when necessary.
  Either way, be especially careful about doing this from migrations, where changes to the project config (directly or indirectly) could result in a sync conflict. Take a minute to read the Project Config Migrations documentation, which explains how to avoid that.
  Store UIDs Instead of IDs
  Plugin settings are now stored in the project config. If your plugin is storing references to sections, category groups, or anything else that’s now stored in the project config, you should update those references to use UIDs instead of IDs. That’s because their IDs will potentially be different on each environment, but their UIDs will always stay the same across all environments.
  Update Element Source Key References
  The source keys used for assets, entries, categories, tags, and users have changed in Craft 3.1:
  Element Type | Old Source Format | New Source Format
  ------------ | ----------------- | -----------------
  Assets | folder:<ID> | folder:<UID>
  Entries | section:<ID> | section:<UID>
  Categories | group:<ID> | group:<UID>
  Tags | taggroup:<ID> | taggroup:<UID>
  Users | group:<ID> | group:<UID>
  Update Live Preview Initialization Settings
  If your plugin implements Live Preview support, you’ll need to start hashing the previewAction key you pass to Craft.LivePreview.init().
  `php
  // Old
  $jsSettings = Json::encode([
  'previewAction' => 'entries/preview-entry',
  // ...
  ]);
  $this->view->registerJs("Craft.LivePreview.init($jsSettings);");
  // New
  $jsSettings = Json::encode([
  'previewAction' => Craft::$app->security->hashData('entries/preview-entry'),
  // ...
  ]);
  $this->view->registerJs("Craft.LivePreview.init($jsSettings);");
  `](kb__updating-plugins-for-craft-3-1.md "Updating Plugins for Craft 3.1")
- [Updating Plugins for Craft 2.5

  Craft 2.5 introduced several new features for plugins. This guide will walk you through how to implement the changes necessary to take advantage of them.
  Plugin Icons
  Plugins can now have icons in the Control Panel. Two icons, even.
  Your plugin’s main icon file should be called “icon.svg” and placed in its resources/ folder (craft/plugins/myplugin/resources/icon.svg). This icon will show up in the main Settings page if your plugin has its own settings, as well as the Plugins page. This can be full-color, with whatever crazy SVG features you want.
  If your plugin has its own Control Panel section, you can give its CP nav item an icon as well, by saving an “icon-mask.svg” file in your plugin’s resources/ folder. This one should be limited to just shapes – any strokes in the SVG will be hidden – and each of the shapes will be styled with white fills, regardless of their actual color in the SVG file.
  Widget Icons
  Dashboard widgets can have icons, too. These also must be SVGs, but since a single plugin can have multiple widgets, the specific name/location of widget icons isn’t mandated. Place the icons wherever you like, and add getIconPath() methods to your widget classes, which returns the full server path to the icons:
  `php
  public function getIconPath()
  {
  return craft()->path->getPluginsPath().'myplugin/resources/mywidget.svg';
  }
  `
  Like CP nav icons, widget icons should not contain any strokes, and their shapes will be styled with a single fill color.
  Plugin Descriptions
  Plugins can have descriptions of themselves displayed on the Plugins page by adding a getDescription() method on the primary plugin class:
  `php
  public function getDescription()
  {
  return 'An amazingly powerful and flexible ecommerce platform for Craft CMS.';
  }
  `
  Plugin Documentation Links
  Plugins can have links to their documentation on the Plugins page by adding a getDocumentationUrl() method on the primary plugin class:
  `php
  public function getDocumentationUrl()
  {
  return 'https://craftcommerce.com/docs';
  }
  `
  Plugin Schema Versions
  As of Craft 2.5, Craft no longer takes the whole site down every time a plugin’s version number changes, in case there are any new migrations that need to be run. Instead plugins must explicitly tell Craft that they have new migrations by returning a new (higher) schema version number with a getSchemaVersion() method on their primary plugin class:
  `php
  public function getSchemaVersion()
  {
  return '1.1.0';
  }
  `
  You can use any versioning scheme you want, so long as increments will be detectable by version\_compare(), and the total length is no greater than 15 characters.](kb__updating-plugins-for-craft-2-5.md "Updating Plugins for Craft 2.5")

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
