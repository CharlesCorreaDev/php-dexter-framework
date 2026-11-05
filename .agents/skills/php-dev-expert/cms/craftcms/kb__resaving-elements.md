# Resaving Elements | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/resaving-elements

---

Search Knowledge Base

# Resaving Elements

On occasion, you may find it helpful to trigger a “save” on a group of [elements](https://craftcms.com/docs/5.x/system/elements.html), without visiting each one in the [control panel](https://craftcms.com/docs/5.x/system/control-panel.html). Craft will do this automatically under some circumstances (like changes to a section’s **Default Title Format**), but there are plenty of situations in which Craft *can’t* infer the correct course of action (like creating a new field and populating it with a value from an existing field).

Craft has a number of [console commands](https://craftcms.com/docs/5.x/reference/cli.html) to do just this, named after each built-in [element type](https://craftcms.com/docs/5.x/system/elements.html#element-types):

- `resave/addresses` — [Addresses](#addresses)
- `resave/assets` — [Assets](#assets)
- `resave/categories` [Categories](#categories)
- `resave/entries`— [Entries](#entries)
- `resave/tags` — [Tags](#tags)
- `resave/users` — [Users](#users)

In addition, the `resave/all` command can be used to run each other command in series, with options common to all element types. Global sets currently cannot be resaved from the command line.

### Commerce [#](#commerce "Direct link to Commerce")

[Craft Commerce](https://craftcms.com/commerce) supplements the built-in commands with a few of its own:

- `resave/carts` — Carts (incomplete orders)
- `resave/orders` — Orders (completed carts)
- `resave/products` — Products

![](https://craftcms.com/dist/images/icon-tip.svg)

Other plugins can extend [`ResaveController`](https://docs.craftcms.com/api/v5/craft-console-controllers-resavecontroller.html) with their own actions by listening to its [`EVENT_DEFINE_ACTIONS` event](https://docs.craftcms.com/api/v5/craft-console-controller.html#event-define-actions).

## Common Features [#](#common-features "Direct link to Common Features")

Every element type supports a number of *options* or CLI flags.

### Constraints [#](#constraints "Direct link to Constraints")

These options narrow the scope of elements to be resaved by applying the equivalent [element query](https://craftcms.com/docs/5.x/development/element-queries.html) params.

- `--element-id` and `--uid` — Resave one or more elements by their IDs or UUIDs.
- `--site` — Scope the query to elements in one or more sites.
- `--status` — Only include elements with the specified status. Statuses may be different across element types.
- `--offset` — Skip the specified number of elements before beginning.
- `--limit` — Set a maxmimum number of elements that will be resaved.
- `--drafts`, `--provisional-drafts`, and `--revisions` — Limit the query to drafts or revisions. By default, *all* drafts and revisions are included.

See below for additional element type-specific options! Many of these constraints support passing multiple, comma-separated values.

### Mutation [#](#mutation "Direct link to Mutation")

By using a combination of `--set` and `--to` options, you can perform a variety of updates to elements as they’re being saved. Only one pair of these options can be used per operation.

This process begins by choosing an attribute or field handle that you want to update, using `--set`:

- `--set title` — Targets the `title` attribute.
- `--set myDropdownField` — Targets a custom field instance with the handle `myDropdownField`.

The `--to` option has a few different flavors:

- `--to mySourceAttribute` — Copies the value from the given attribute or custom field name (`mySourceAttribute`).
- `--to "=A literal value"` — Use the provided literal value (enclosed in quotes, following an `=` sign.
- `--to "={mySourceAttribute|lower}"` — The value is determined by rendering the provided [object template](https://craftcms.com/docs/5.x/system/object-templates.html).
- `--to :empty:` — Clear the existing value.
- `--to "fn(\\$element) => \\$element->someMethod()"` — Use the return value of a closure to populate the field with complex values.

The final option here gives you access to Craft’s entire PHP API. Keep in mind that this code is evaluated in a privileged environment, and makes potentially destructive actions possible.

Two additional options provide a means to

- `--if-empty` — Only set the value of the attribute or field if it is currently empty;
- `--if-invalid` — Only set the value of the attribute or field if its current value does not validate;

### Utility [#](#utility "Direct link to Utility")

- `--queue` — Push a [`ResaveElements`](https://docs.craftcms.com/api/v5/craft-queue-jobs-resaveelements.html#resaveelements) job into the queue rather than processing immediately.
- `--update-search-index` — Whether Craft should spawn search indexing jobs after each save.
- `--touch` — Force the `dateUpdated` timestamp on each element to be updated. Ordinarily, Craft skips this in the interest of preserving a record of when the last human-initiated change was made.
- `--propagate-to` — Saves the elements into the specified sites.

As of Craft 5.5.0, most built-in commands also support the `--with-fields` option, allowing you to find and resave elements that use a particular field in their field layout, by its *global* handle. Combined with `resave/all`, you can quickly set default values for new fields across any element type that uses it.

## Element Types [#](#element-types "Direct link to Element Types")

### Addresses [#](#addresses "Direct link to Addresses")

- `--country-code` — Filter by addresses with the given two-letter country code.
- `--owner-id` — Resave addresses owned by elements with the provided ID(s).

### Assets [#](#assets "Direct link to Assets")

- `--volume` — Resave assets in the specified volume(s), using their handles.

### Categories [#](#categories "Direct link to Categories")

- `--group` — Resave categories from specific category group(s), using their handles.

### Entries [#](#entries "Direct link to Entries")

- `--type` — Resave entries based on one or more entry types.
- `--section` — Only resave entries belonging to one or more sections.
- `--all-sections` — Shortcut for `--section=*`.
- `--field` — Resave nested entries belonging to specific field(s).
- `--owner-id` — Resave entries owned by elements with the provided ID(s).

If you wish to exclude nested entries, use `--allSections`.

### Tags [#](#tags "Direct link to Tags")

- `--group` — Resave categories from specific tag group(s), using their handles.

### Users [#](#users "Direct link to Users")

- `--group` — Resave users from specific user group(s), using their handles.

## Examples [#](#examples "Direct link to Examples")

Putting together what we’ve seen so far, a resave command will often look something like this…

```
php craft resave/entries \
  --section blog \
  --set description \
  --to "={author.fullName} discusses {title} in the {category.one.title} section."
```

…but they can be as simple as refreshing the search index:

```
php craft resave/categories \
  --group species \
  --update-search-index
```

If you would prefer to get your prompt back and defer the work to the queue, just pass `--queue`:

```
php craft resave/entries \
  --section profiles \
  --update-search-index \
  --queue
```

## Further Reading [#](#further-reading "Direct link to Further Reading")

### Craft Shell [#](#craft-shell "Direct link to Craft Shell")

The [`yiisoft/yii2-shell` package](https://github.com/yiisoft/yii2-shell) that comes with [new projects](https://github.com/craftcms/craft) makes it convenient to experiment with queries (and the rest of the Craft API) as you get familiar with the `--set` and `--to` options—especially when using closures.

With a bit of practice, you may find that you can accomplish many of the same querying, modifying, and saving operations by skipping the `resave/*` commands and using the APIs directly!

Applies to
Craft CMS 5 and Craft CMS 4.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
