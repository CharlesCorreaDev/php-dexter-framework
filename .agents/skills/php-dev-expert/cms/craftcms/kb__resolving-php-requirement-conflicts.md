# Resolving PHP Requirement Conflicts | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/resolving-php-requirement-conflicts

---

Search Knowledge Base

# Resolving PHP Requirement Conflicts

If a Craft CMS update can’t be installed because of an error like this:

> This update requires PHP 7.2.5, but your composer.json file is currently set to PHP 7.0.

The error is saying that the update requires a higher PHP version than the version your `composer.json` file is set to. To resolve, you will need to edit the [`config.platform.php`](https://getcomposer.org/doc/06-config.md#platform) setting in your `composer.json` file.

The purpose of this setting is to ensure that Composer only installs dependencies that are compatible with each of your environments. For example, if your development environment is running PHP 7.4.11, but production is running PHP 7.2.24, you would want to set the setting to `7.2.24` so that Composer doesn’t install any dependencies that require PHP 7.3 or 7.4, as they would end up causing PHP syntax errors on production.

Before changing the setting, first determine which PHP versions are running on each of your environments, and go with the smallest one.

Then open your `composer.json` file in a text editor, and find your `config.platform.php` setting:

```
{
  "...": "...",
  "config": {
    "platform": {
      "php": "7.0"
    }
  }
}
```

Change the value to the lowest PHP version in use. Then try checking for updates or running `composer update` again.

If the lowest PHP version in use is lower than the version required by the update, you will need to update your environment(s) to meet the new requirement.

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
