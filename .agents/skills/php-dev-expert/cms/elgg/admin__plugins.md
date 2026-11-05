# Plugins — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/admin/plugins.html

---

# Plugins[](#plugins "Permalink to this heading")

Plugins can modify the behavior of and add new features to Elgg.

Contents

- [Where to get plugins](#where-to-get-plugins)
- [The Elgg Community](#id1)

  - [Finding Plugins](#finding-plugins)
  - [Evaluating Plugins](#evaluating-plugins)
- [Types of plugins](#types-of-plugins)

  - [Themes](#themes)
  - [Language Packs](#language-packs)
- [Installation](#installation)
- [Plugin order](#plugin-order)

## [Where to get plugins](#id2)[](#where-to-get-plugins "Permalink to this heading")

Plugins can be obtained from:

> - [The Elgg Community](http://community.elgg.org/plugins)
> - [Github](https://github.com/Elgg)
> - Third-party sites (typically for a price)

If no existing plugins meet your needs, you can [hire a developer](http://community.elgg.org/groups/profile/75603/professional-services) or [create your own](guides__index.md).

## [The Elgg Community](#id3)[](#id1 "Permalink to this heading")

### [Finding Plugins](#id4)[](#finding-plugins "Permalink to this heading")

#### Sort based on most popular[](#sort-based-on-most-popular "Permalink to this heading")

On the community plugin page, you can sort by date uploaded (Filter: Newest) or number of downloads (Filter: Most downloads). Sorting by the number of downloads is a good idea if you are new to Elgg and want to see which plugins are frequently used by other administrators. These will often (but not always) be higher quality plugins that provide significant capabilities.

#### Use the plugin tag search[](#use-the-plugin-tag-search "Permalink to this heading")

Next to the filtering control on the plugin page is a search box. It enables you to search by tags. Plugins authors choose the tags.

#### Look for particular plugin authors[](#look-for-particular-plugin-authors "Permalink to this heading")

The quality of plugins varies substantially. If you find a plugin that works well on your site, you can check what else that plugin author has developed by clicking on their name when viewing a plugin.

### [Evaluating Plugins](#id5)[](#evaluating-plugins "Permalink to this heading")

#### Look at the comments and ratings[](#look-at-the-comments-and-ratings "Permalink to this heading")

Before downloading and using a plugin, it is always a good idea to read through the comments that others have left. If you see people complaining that the plugin does not work or makes their site unstable, you probably want to stay away from that plugin. The caveat to that is that sometimes users ignore installation instructions or incorrectly install a plugin and then leave negative feedback. Further, some plugin authors have chosen to not allow comments.

#### Install on a test site[](#install-on-a-test-site "Permalink to this heading")

If you are trying out a plugin for the first time, it is a bad idea to install it on your production site. You should maintain a separate test site for evaluating plugins. It is a good idea to slowly roll out new plugins to your production site even after they pass your evaluation on your test site. This enables you to isolate problems introduced by a new plugin.

## [Types of plugins](#id6)[](#types-of-plugins "Permalink to this heading")

### [Themes](#id7)[](#themes "Permalink to this heading")

Themes are plugins that modify the look-and-feel of your site. They generally
include stylesheets, client-side scripts and views that alter the default
presentation and behavior of Elgg.

### [Language Packs](#id8)[](#language-packs "Permalink to this heading")

Language packs are plugins that provide support for other languages.

Language packs can extend and include translations for language strings
found in the core, core plugins and/or third-party plugins.

Some of the language packs are already included in the core, and can be found in
`languages` directory in Elgg’s root directory. Individual plugins tend to
include their translations under the `languages` directory within the plugin’s
root.

This structure makes it easy to create new language packs that supercede existing
language strings or add support for new languages.

## [Installation](#id9)[](#installation "Permalink to this heading")

All plugins reside in the `mod` directory of your Elgg installation.

To install a new plugin:
:   - extract (unzip) contents of the plugin distribution package
    - copy/FTP the extracted folder into the `mod` directory of your Elgg installation
    - activate the plugin from your admin panel

To activate a plugin:
:   - Log in to your Elgg site with your administrator account
    - Go to Administration -> Configure -> Plugins
    - Find your plugin in the list of installed plugins and click on the
      ‘enable’ button.

## [Plugin order](#id10)[](#plugin-order "Permalink to this heading")

Plugins are loaded according to the order they are listed on the Plugins page. The initial ordering after an install is more or less random. As more plugins are added by an administrator, they are placed at the bottom of the list.

Some general rules for ordering plugins:

- A theme plugin should be last or at least near the bottom
- A plugin that modifies the behavior of another plugin should be lower in the plugin list
