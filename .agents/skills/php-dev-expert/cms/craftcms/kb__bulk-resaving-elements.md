# Bulk-Resaving Elements | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/bulk-resaving-elements

---

Search Knowledge Base

# Bulk-Resaving Elements

There may be times when you’ll need to make the same changes to multiple entries, like when you’re migrating content or establishing default values for newly-created fields.

Rather than applying these changes by hand, one at a time, you might be able to take advantage of Craft’s `resave` console commands or writing your own content migrations.

## Resave Commands [#](#resave-commands "Direct link to Resave Commands")

Craft ships with console commands you can run to do a variety of things, including a [series of commands](https://craftcms.com/docs/3.x/console-commands.html#resave) for resaving each major element type:

- [resave/assets](https://craftcms.com/docs/3.x/console-commands.html#resave-assets)
- [resave/categories](https://craftcms.com/docs/3.x/console-commands.html#resave-categories)
- [resave/entries](https://craftcms.com/docs/3.x/console-commands.html#resave-entries)
- [resave/matrix-blocks](https://craftcms.com/docs/3.x/console-commands.html#resave-matrix-blocks)
- [resave/tags](https://craftcms.com/docs/3.x/console-commands.html#resave-tags)
- [resave/users](https://craftcms.com/docs/3.x/console-commands.html#resave-users)

![](https://craftcms.com/dist/images/icon-tip.svg)

Use `php craft resave --help` to see all the resave commands available for your Craft project. The full set may include elements added by Commerce or other plugins.

### Triggering Resaves [#](#triggering-resaves "Direct link to Triggering Resaves")

There are cases where simply triggering resaves can be useful, like when you’ve established a new [Preparse](https://plugins.craftcms.com/preparse-field) field that determines its own value on save.

If we’ve added a Preparse field to an Assets field layout, for example, we could resave all assets by running this command from the terminal:

```
# save all assets
php craft resave/assets
```

This would load and resave *all* the assets across an install, but we could limit to those in a `myImages` volume:

```
# resave assets in `myImages` volume
php craft resave/assets --volume myImages
```

You might want to resave entries after changing a custom field’s search settings, specifically so that search indexes are updated. If we updated entries to make a field searchable, we would want to resave entries and pass the `--update-search-index` option:

```
# save entries and update the search index
php craft resave/entries --update-search-index
```

### Resaving with Specific Field Values [#](#resaving-with-specific-field-values "Direct link to Resaving with Specific Field Values")

![](https://craftcms.com/dist/images/icon-warning.svg)

If you’re about to experiment changing field values in bulk, now’s a fantastic time to make a database backup. Hopefully you don’t need it, but [it only takes a moment](https://craftcms.com/docs/3.x/console-commands.html#db-backup) and your future self might really appreciate it.

Craft 3.7.29 added powerful `--set`, `--to`, and `--if-empty` options that make it possible to specify content for individual fields and attributes.

Let’s pretend that we’ve added a new Plain Text field. Its field handle is `myPlainTextField`, and we’d like to set its value to whatever value is already stored in a separate `fooField`. We can do that like this:

```
# copy `fooField` value to `myPlainTextField`
php craft resave/entries --set myPlainTextField --to fooField
```

Using the `--if-empty` option, we can take care to save our new value only to fields that are already empty—leaving existing values untouched:

```
# copy `fooField` value to *empty* `myPlainTextField` fields
php craft resave/entries --set myPlainTextField --to fooField --if-empty
```

Then you might want to clear out the old `fooField` values:

```
# clear `fooField` value
php craft resave/entries --set fooField --to :empty:
```

The existing options for `resave/entries` still apply here. We won’t go through each one, but like the assets example above we could limit this resaving adventure only to entries in a `blog` section:

```
# copy `fooField` value to `myPlainTextField` in the `blog` section only
php craft resave/entries --set myPlainTextField --to fooField --section blog
```

### Resaving with Computed Field Values [#](#resaving-with-computed-field-values "Direct link to Resaving with Computed Field Values")

We’ve used fixed strings as values in the examples above, but you can also use Twig or PHP arrow functions to compute the value to be saved at runtime.

Let’s say we want to resave entries and set our `myPlainTextField` value to the entry author’s name. We could do that thusly:

```
# set `myPlainTextField` to entry author’s name
php craft resave/entries --set myPlainTextField --to "={author.name}"
```

That `"={author.name}"` part is a Twig object template like you’d use for entry URI formats, Asset field subfolder paths and redirect params. It must start with `=` and is parsed like a full-blown Twig template.

You can similarly use [PHP arrow functions](https://www.php.net/manual/en/functions.arrow.php):

```
# set `myPlainTextField` to entry author’s name
php craft resave/entries --set myPlainTextField --to "fn(\$entry) => \$entry->author->name"
```

You can use arrow functions to set values for relational fields. Here we can pass an array of IDs for an [Entries](https://craftcms.com/docs/3.x/entries.html) field:

```
# have `myEntriesField` reference element IDs 1, 2, and 3
php craft resave/entries --set myEntriesField --to "fn(\$entry) => [1, 2, 3]"
```

## Content Migrations [#](#content-migrations "Direct link to Content Migrations")

The Craft CLI’s resave commands are great for relatively straightforward tasks, but you may want to consider using content migrations for more nuanced or intense modification of existing field data.

You’ll need to set up and write a [content migration](https://craftcms.com/docs/3.x/extend/migrations.html), but it can be more complex, checked into your git repository, and easily-executed in other environments.

To do the equivalent of the last arrow function example in a content migration:

1. Run `php craft migrate/create my_resave_migration`. This will generate a .php file in your project’s `migrations/` directory.
2. Open that generated migration file and add the following to `safeUp()`:

   ```
    $elementsService = Craft::$app->getElements();
    $entryQuery = \craft\elements\Entry::find();

    $elementsService->on(
        \craft\services\Elements::EVENT_BEFORE_RESAVE_ELEMENT,
        static function(\craft\events\BatchElementActionEvent $e) use ($entryQuery) {
            if ($e->query === $entryQuery) {
                $element = $e->element;
                $element->myPlainTextField = $element->author->name ?? null;
            }
        }
    );

    $elementsService->resaveElements(
        $entryQuery,
        true,
        true
    );
   ```
3. Run `php craft migrate/up --content` or from the control panel navigate to **Utilities** → **Migrations** and run your migration there.

You could introduce whatever logic you might need in your content migration, or even save elements individually rather than rely on the `resaveElements()` method.

Before saving an element, however, be sure to set its [resaving](https://docs.craftcms.com/api/v3/craft-base-elementtrait.html#resaving) property to `true` in order to keep its [dateUpdated](https://docs.craftcms.com/api/v3/craft-base-elementtrait.html#dateupdated) from being changed:

```
$elementsService = Craft::$app->getElements();
$entryQuery = \craft\elements\Entry::find();

foreach ($entryQuery->all() as $element) {
    $element->resaving = true;
    $element->myPlainTextField = $element->author->name ?? null;
    $elementsService->saveElement($element);
}
```

Applies to
Craft CMS 4, Craft CMS 3, Craft Commerce 4, and Craft Commerce 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
