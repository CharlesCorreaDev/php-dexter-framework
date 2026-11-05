# Updating Plugins for Craft 3.1 | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/updating-plugins-for-craft-3-1

---

Search Knowledge Base

# Updating Plugins for Craft 3.1

Here’s what you should consider testing your plugins for Craft 3.1 compatibility.

## Don’t Change Database Data Directly [#](#dont-change-database-data-directly "Direct link to Don’t Change Database Data Directly")

Review the list of things Craft is now storing in the [project config](https://craftcms.com/docs/3.x/project-config.html), and make sure you’re not manipulating that data directly in the database anywhere, such as from your plugin migrations. (The list includes plugins’ global settings.)

You can either use service APIs (e.g. [craft\services\Fields::saveField()](https://docs.craftcms.com/api/v3/craft-services-fields.html#method-savefield)), or manipulate the project config data directly using [craft\services\ProjectConfig::set()](https://docs.craftcms.com/api/v3/craft-services-projectconfig.html#method-set), which will trigger event listeners to update database data when necessary.

Either way, be especially careful about doing this from migrations, where changes to the project config (directly or indirectly) could result in a sync conflict. Take a minute to read the [Project Config Migrations](https://craftcms.com/docs/3.x/extend/project-config.html#project-config-migrations) documentation, which explains how to avoid that.

## Store UIDs Instead of IDs [#](#store-uIDs-instead-of-iDs "Direct link to Store UIDs Instead of IDs")

Plugin settings are now stored in the [project config](https://craftcms.com/docs/3.x/project-config.html). If your plugin is storing references to sections, category groups, or anything else that’s now stored in the project config, you should update those references to use UIDs instead of IDs. That’s because their IDs will potentially be different on each environment, but their UIDs will always stay the same across all environments.

## Update Element Source Key References [#](#update-element-source-key-references "Direct link to Update Element Source Key References")

The source keys used for assets, entries, categories, tags, and users have changed in Craft 3.1:

| Element Type | Old Source Format | New Source Format |
| --- | --- | --- |
| Assets | `folder:<ID>` | `folder:<UID>` |
| Entries | `section:<ID>` | `section:<UID>` |
| Categories | `group:<ID>` | `group:<UID>` |
| Tags | `taggroup:<ID>` | `taggroup:<UID>` |
| Users | `group:<ID>` | `group:<UID>` |

## Update Live Preview Initialization Settings [#](#update-live-preview-initialization-settings "Direct link to Update Live Preview Initialization Settings")

If your plugin implements Live Preview support, you’ll need to start hashing the `previewAction` key you pass to `Craft.LivePreview.init()`.

```
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
```

![](https://craftcms.com/dist/images/icon-tip.svg)

This will break your Live Preview support for older versions of Craft, so you should update your Craft requirement in your plugin’s `composer.json` while you’re at it.

```
"require": {
  "craftcms/cms": "^3.1.0"
}
```

## Consider Adding Project Config and Soft-Delete Support [#](#consider-adding-project-config-and-soft-delete-support "Direct link to Consider Adding Project Config and Soft-Delete Support")

If your plugin defines its own configurable component types, you may want to consider adding [project config](https://craftcms.com/docs/3.x/extend/project-config.html#is-project-config-support-right-for-you) and/or [soft-delete](https://craftcms.com/docs/3.x/extend/soft-deletes.html) support to it.

If you have any questions or comments, please [let us know](https://craftcms.com/contact)!

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
