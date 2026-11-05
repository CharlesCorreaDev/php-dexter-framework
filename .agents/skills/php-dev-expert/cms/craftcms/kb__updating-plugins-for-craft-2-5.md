# Updating Plugins for Craft 2.5 | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/updating-plugins-for-craft-2-5

---

Search Knowledge Base

# Updating Plugins for Craft 2.5

![](https://craftcms.com/dist/images/icon-tip.svg)

This article pertains only to Craft 2.

Craft 2.5 introduced several new features for plugins. This guide will walk you through how to implement the changes necessary to take advantage of them.

## Plugin Icons [#](#plugin-icons "Direct link to Plugin Icons")

Plugins can now have icons in the Control Panel. Two icons, even.

Your plugin’s main icon file should be called “icon.svg” and placed in its `resources/` folder (`craft/plugins/myplugin/resources/icon.svg`). This icon will show up in the main Settings page if your plugin has its own settings, as well as the Plugins page. This can be full-color, with whatever crazy SVG features you want.

If your plugin has its own Control Panel section, you can give its CP nav item an icon as well, by saving an “icon-mask.svg” file in your plugin’s resources/ folder. This one should be limited to just shapes – any strokes in the SVG will be hidden – and each of the shapes will be styled with white fills, regardless of their actual color in the SVG file.

## Widget Icons [#](#widget-icons "Direct link to Widget Icons")

Dashboard widgets can have icons, too. These also must be SVGs, but since a single plugin can have multiple widgets, the specific name/location of widget icons isn’t mandated. Place the icons wherever you like, and add `getIconPath()` methods to your widget classes, which returns the full server path to the icons:

```
public function getIconPath()
{
    return craft()->path->getPluginsPath().'myplugin/resources/mywidget.svg';
}
```

Like CP nav icons, widget icons should not contain any strokes, and their shapes will be styled with a single fill color.

## Plugin Descriptions [#](#plugin-descriptions "Direct link to Plugin Descriptions")

Plugins can have descriptions of themselves displayed on the Plugins page by adding a `getDescription()` method on the primary plugin class:

```
public function getDescription()
{
    return 'An amazingly powerful and flexible ecommerce platform for Craft CMS.';
}
```

## Plugin Documentation Links [#](#plugin-documentation-links "Direct link to Plugin Documentation Links")

Plugins can have links to their documentation on the Plugins page by adding a `getDocumentationUrl()` method on the primary plugin class:

```
public function getDocumentationUrl()
{
    return 'https://craftcommerce.com/docs';
}
```

## Plugin Schema Versions [#](#plugin-schema-versions "Direct link to Plugin Schema Versions")

As of Craft 2.5, Craft no longer takes the whole site down every time a plugin’s version number changes, in case there are any new migrations that need to be run. Instead plugins must explicitly tell Craft that they have new migrations by returning a new (higher) *schema version number* with a `getSchemaVersion()` method on their primary plugin class:

```
public function getSchemaVersion()
{
    return '1.1.0';
}
```

You can use any versioning scheme you want, so long as increments will be detectable by [`version_compare()`](http://php.net/manual/en/function.version-compare.php), and the total length is no greater than 15 characters.

![](https://craftcms.com/dist/images/icon-tip.svg)

Craft will check for new plugin schema versions independently of plugin version changes, so you don’t need to increment the main plugin version each time you increment its schema version.

## Plugin Update Notifications [#](#plugin-update-notifications "Direct link to Plugin Update Notifications")

Plugins can now take part in Craft’s update notifications, and display release notes on the Updates page, by providing a JSON feed that describes new releases, and adding a `getReleaseFeedUrl()` method on the primary plugin class.

Here’s what a release feed might look like:

```
[
    {
        "version": "0.9.0",
        "downloadUrl": "https://download.craftcommerce.com/0.9/Commerce0.9.0.zip",
        "date": "2015-12-01T10:00:00-08:00",
        "notes": [
            "# Big Stuff",
            "[Added] It’s now possible to create new products right from Product Selector Modals (like the ones used by Products fields).",
            "[Improved] Variants are now defined in a new Variant Matrix field, right on the main Edit Product pages.",
            "# Bug Fixes",
            "[Fixed] Fixed a Twig error that occurred if you manually went to /commerce/orders/new. You now receive a 404 error instead."
        ]
    },
    {
        "version": "0.9.1",
        "downloadUrl": "https://download.craftcommerce.com/0.9/Commerce0.9.1.zip",
        "date": "2015-12-01T11:00:00-08:00",
        "notes": [
            "[Fixed] Fixed a PHP error that occurred when creating a new produt when the current user’s username was ‘null’."
        ]
    }
]
```

Notes:

- The feed must be valid JSON.
- The feed’s URL must begin with `https://` (so it is fetched over SSL).
- Each release must contain `version`, `downloadUrl`, `date`, and `notes` attributes.
- Each release’s `downloadUrl` must begin with `https://` (so it is downloaded over SSL).
- Each release’s `date` must be an ISO-8601-formatted date, as defined by either
  [DateTime::ATOM](http://php.net/manual/en/class.datetime.php#datetime.constants.atom) or
  [DateTime::ISO8601](http://php.net/manual/en/class.datetime.php#datetime.constants.iso8601) (with or without
  the colon between the hours and minutes of the timezone offset).
- `notes` can either be a string (with each release note separated by a newline character), or an array.
- Release note lines that begin with `#` will be treated as headings.
- Release note lines that begin with `[Added]`, `[Improved]`, or `[Fixed]` will be given `added`, `improved`,
  and `fixed` classes within the Updates page.
- Release note lines can contain Markdown code, but not HTML.
- Releases can contain a `critical` attribute which can be set to `true` if the release is critical.

Once the feed is set up, just add a `getReleaseFeedUrl()` method to your primary plugin class that returns the URL (with https) to it:

```
public function getReleaseFeedUrl()
{
    return 'https://raw.githubusercontent.com/me/myrepo/master/releases.json';
}
```

## Control Panel Subnavs [#](#control-panel-subnavs "Direct link to Control Panel Subnavs")

Plugins can now have sub-navigations in the global Control Panel nav. To do that, two new variables must be defined by its templates: `subnav` and `selectedSubnavItem`. `subnav` should be an array that defines the available subnav items, and `selectedSubnavItem` should define the index of the `subnav` array that is currently selected:

```
{% set subnav = {
    orders: { label: "Orders"|t, url: 'commerce/orders' },
    products: { label: "Products"|t, url: 'commerce/products' },
    promotions: { label: "Promotions"|t, url: 'commerce/promotions' }
} %}

{% set selectedSubnavItem = 'orders' %}
```

![](https://craftcms.com/dist/images/icon-tip.svg)

You can save yourself the trouble of defining the same `subnav` variable in each of your Control Panel templates by giving your plugin its own layout template that each of its other templates extend, and define the `subnav` variable once from that layout template.

## Element Index Table Attributes [#](#element-index-table-attributes "Direct link to Element Index Table Attributes")

As of Craft 2.5, Admins are now in control over which columns should be visible for each of their element sources on element index tables, whereas previously the element types got to decide that.

This change has been implemented in a way that won’t break existing element types that extend [BaseElementType](http://buildwithcraft.com/classreference/elementtypes/BaseElementType), however the actual [IElementType interface](http://buildwithcraft.com/classreference/elementtypes/IElementType) has changed:

- Element types now define the *available* table columns with a `defineAvailableTableAttributes()` method. This happens at a global level, so that method does *not* accept a `$source` argument or anything. This method should return an array where the keys map to element attribute names, and values are the column headings. The first value returned is a special case here (as it was in the old `defineTableAttributes()` method): it returns the attribute name/label that should be used for the first column shown in the table, which is not editable by Admins.
- Element types now define the *default* table columns that should be shown for each source with a `getDefaultTableAttributes()` method. This method accepts a `$source` argument that is set to the currently-selected source key. But keep in mind this method will only be called until the Admin has customized it (hence “Default”).

### Element Index Table Attribute Hooks [#](#element-index-table-attribute-hooks "Direct link to Element Index Table Attribute Hooks")

Due to the fact that element types are no longer in control over which table columns should be visible for each of its sources, the old `modify[Type]TableAttributes` element index hooks have been replaced by new `defineAdditional[Type]TableAttributes` hooks, are called from Craft’s built-in element types’ `defineAvailableTableAttributes()` methods.

Plugins can use these hooks to add additional *options* to the list of available table columns for the element type, but an Admin must still go in and customize the element source settings in order to actually have the custom columns be shown.

Applies to
Craft CMS 2.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
