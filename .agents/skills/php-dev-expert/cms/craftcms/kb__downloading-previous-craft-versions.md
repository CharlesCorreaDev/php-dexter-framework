# Downloading Previous Craft Versions | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/downloading-previous-craft-versions

---

Search Knowledge Base

# Downloading Previous Craft Versions

![](https://craftcms.com/dist/images/icon-tip.svg)

Support for direct CDN downloads will end in 2023. Previous versions of Craft (and [Commerce](kb__downloading-previous-commerce-versions.md)) will remain available via Composer and Github.

## Craft 3 and 4 [#](#craft-3-and-4 "Direct link to Craft 3 and 4")

Specific versions of Craft can be installed by altering the version constraint for `craftcms/cms` in your project’s `composer.json`. Run `composer update` to resolve, lock, and install the dependencies. Keep in mind that you may also need to change plugin versions to maintain compatibility!

*Do not manually modify files in your project’s `vendor/` directory. They will be wiped out the next time `composer install` or the Craft updaters is run.*

## Craft 2 [#](#craft-2 "Direct link to Craft 2")

Specific versions of Craft 2 are available directly from our CDN. Version numbers can be found in the sidebar on [Packagist](https://packagist.org/packages/craftcms/cms) and used in this pseudo-template to download a ZIP archive:

```
https://download.craftcms.com/craft/{major}.{minor}/{major}.{minor}.{build}/Craft-{major}.{minor}.{build}.zip
```

For example, the URL for version 2.6.3018, would look like this:

```
https://download.craftcms.com/craft/2.6/2.6.3018/Craft-2.6.3018.zip
```

Note that downloading Craft releases directly still binds you to Craft’s [license agreement](https://craftcms.com/license).

![](https://craftcms.com/dist/images/icon-warning.svg)

Craft does not have an automated “roll back” feature. The database is usually modified or “migrated” during an update, making makes updates a one-way trip. If you install an older version of Craft in an existing project, you’ll also need to manually restore a database backup that was made with that version, or an earlier one.

Applies to
Craft CMS 4, Craft CMS 3, and Craft CMS 2.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
