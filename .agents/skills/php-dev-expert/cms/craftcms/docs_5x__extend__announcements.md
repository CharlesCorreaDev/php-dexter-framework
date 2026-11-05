# Announcements | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/announcements

---

# Announcements

Plugins can notify control panel users about new features and changes by pushing an *announcement*.

When you push an announcement, Craft takes care of creating the announcement for each relevant user.

```
use craft\i18n\Translation;

Craft::$app->getAnnouncements()->push(
    heading: Translation::prep('my-category', 'New Email Controls'),
    body: Translation::prep('my-category', 'Send to slices of your lists by setting up conditions...'),
    pluginHandle: 'my-plugin-handle',
    adminsOnly: false
);
```

Note that we’re using [craft\i18n\Translation::prep()  (opens new window)](https://docs.craftcms.com/api/v5/craft-i18n-translation.html#method-prep) instead of [Craft::t()  (opens new window)](https://docs.craftcms.com/api/v5/craft.html#method-t).
This [defers the translation](docs_5x__extend__translation-categories.md#lazy-translation) until an announcement is shown to the user; then, Craft translates it using their selected language, not the language the app was in when the announcement was pushed.

You can push announcements from a [migration](docs_5x__extend__migrations.md) or in response to changes in configuration.
Be selective about your use of announcements—they should be informative and actionable for as many users as will see them.
Consider using the `adminsOnly` flag for developer-centric changes.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/announcements.md)
