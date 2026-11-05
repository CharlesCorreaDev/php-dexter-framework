# Sharing a craft/app Folder Across Multiple Sites | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/sharing-a-craft-app-folder-across-multiple-sites

---

Search Knowledge Base

# Sharing a craft/​app Folder Across Multiple Sites

![](https://craftcms.com/dist/images/icon-warning.svg)

This guide is for Craft 2 only. We don’t recommend this approach with Craft 3. Each Craft 3 installation should have its own set of application files.

If you’re running multiple Craft sites off of the same server, it’s possible for them to share the same Craft application files, while each having their own templates, plugins, configs, etc..

The easiest way to do it is by setting the [CRAFT\_BASE\_PATH](https://docs.craftcms.com/v2/php-constants.html#path-constants) in your index.php file:

```
// Path to your craft/ folder
$craftPath = '../craft';

// Override the path to all of the craft/* folders except craft/app/
define('CRAFT_BASE_PATH', __DIR__.'/craft/');
```

With that one extra line, your index.php file will continue to look for Craft’s app/ folder in `../craft/app/`, but all the other `craft/\*` folders will be expected to be in a separate `craft/` subfolder located relative to the `index.php` file.

**Note:** If you decide to put your secondary `craft/` folder below web root (as we’re doing in this example), it’s up to you to prevent direct HTTP traffic to the folder. You can do that by putting a `.htaccess` file in that folder with this:

```
deny from all
```

Applies to
Craft CMS 2.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
