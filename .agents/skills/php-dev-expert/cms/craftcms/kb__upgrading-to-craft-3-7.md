# Upgrading to Craft 3.7 | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/upgrading-to-craft-3-7

---

Search Knowledge Base

# Upgrading to Craft 3.7

Craft 3.7 introduced a few changes to be aware of.

## Template Caches and CSS/JavaScript Snippets [#](#template-caches-and-css-javaScript-snippets "Direct link to Template Caches and CSS/JavaScript Snippets")

Previously, it wasn’t possible to place `{% css %}` and `{% js %}` tags within `{% cache %}` tags. The dynamic CSS or JavaScript snippet would only get registered the first time the template was loaded, when the cache was still cold. They’d be missing from subsequent page loads, though.

As of Craft 3.7, any CSS and JavaScript snippets will get [stored alongside the cached HTML](https://github.com/craftcms/cms/issues/7758), and re-registered on subsequent page loads, so there’s no need to work around that limitation any longer.

This example would have been problematic prior to Craft 3.7 and now gets cached as you might expect:

```
{% cache %}
  {% css %}
    #article {
      background-color: {{ entry.bgColor.hex }};
    }
  {% endcss %}
{% endcache %}
```

This only works for CSS and JavaScript snippets that render template output directly; not file includes.

## Randomized Database Column Names [#](#randomized-database-column-names "Direct link to Randomized Database Column Names")

Any new fields you create in Craft 3.7 will get a [random string appended to their database column name](https://github.com/craftcms/cms/issues/6922). For example, instead of `field_text`, you’d get something like `field_text_abcdefgh`. This helps avoid potential column name conflicts that arose from time to time. If you have any code that is making assumptions about a field’s column name, you will need to adjust it accordingly. (The random column suffix can be obtained from the field’s `columnSuffix` setting.)

## Revving Asset URLs [#](#revving-asset-uRLs "Direct link to Revving Asset URLs")

Previously any assets that belonged to a volume with an `expires` setting would automatically get revved URLs, to avoid browsers loading outdated asset files from cache when the asset (or a transform or focal point) changed.

As of Craft 3.7, asset URL revving is determined by the new [revAssetUrls](https://craftcms.com/docs/3.x/config/config-settings.html#revasseturls) config setting, meaning that it’s now available to **all** assets. If you were relying on the automatic revving behavior, make sure you set that config setting to `true` in `config/general.php`.

```
'revAssetUrls' => true,
```

## Element Editor Slideouts [#](#element-editor-slideouts "Direct link to Element Editor Slideouts")

Element editor HUDs have been replaced with [slideouts](https://github.com/craftcms/cms/pull/8017) in Craft 3.7, which can contain the element’s full field layout (including custom tabs), plus a sidebar that can show additional meta fields and metadata for the element.

Element types can register meta fields for the sidebar from their `metaFieldsHtml()` method. For example, the following code prepends a Slug field:

```
protected function metaFieldsHtml(bool $static): string
{
    return implode('', [
        $this->slugFieldHtml(),
        parent::metaFieldsHtml(),
    ]);
}
```

![](https://craftcms.com/dist/images/icon-tip.svg)

The base method will trigger an event that gives other plugins/modules an opportunity to inject additional fields, so it’s a good idea to end the method with `parent::metaFieldsHtml()`.

By default, elements’ metadata table will include “Status” (for element types that have statuses) and “Created at”/“Updated at” timestamps. Element types can add additional info from their `metadata()` method, which should return an array whose keys are the metadata labels, and whose values are either the raw metadata value, or a callback function that should return the value. Any metadata values that are set to `false` will be omitted.

```
protected function metadata(): array
{
    return [
        Craft::t('app', 'File size') => function() {
            $size = $this->getFormattedSize(0);
            if (!$size) {
                return false;
            }
            $inBytes = $this->getFormattedSizeInBytes(false);
            return Html::tag('div', $size, [
                'title' => $inBytes,
                'aria' => [
                    'label' => $inBytes,
                ],
            ]);
        },
    ];
}
```

![](https://craftcms.com/dist/images/icon-warning.svg)

If an element type is overriding its `getEditorHtml()` method, its editor slideouts will show whatever is returned by them, instead of the full field layout with tabs. The element type will need to be updated to take advantage of the new full field layout view, by removing the overridden `getEditorHtml()` method and implementing `metaFieldsHtml()` and/or `metadata()` instead.

## Query Batching [#](#query-batching "Direct link to Query Batching")

Craft 3.7 adds new `craft\helpers\Db::batch()` and `each()` methods, which work similarly to their Yii counterparts, but with the added benefit of [actually working for MySQL connections](https://github.com/craftcms/cms/issues/7338). If you have any batched queries in your plugin/module code, we recommend switching to the new methods.

```
use craft\helpers\Db;

foreach (Db::each($query) as $result) {
    // ...
}
```

## Detecting Newly-Saved Entries [#](#detecting-newly-saved-entries "Direct link to Detecting Newly-Saved Entries")

As of Craft 3.7, entries retain their original IDs when saved from an unpublished draft. Which means it’s [no longer reliable](https://github.com/craftcms/cms/discussions/9638) to check `$entry->isNew` from `save` event handlers to determine whether the entry is being saved for the first time.

Instead, as of Craft 3.7.5 entries have a `firstSave` property, which will be set to `true` when the entry is being saved for the first time in a normal state (as opposed to as a draft or revision).

```
use craft\elements\Entry;
use craft\events\ModelEvent;
use yii\base\Event;

Event::on(
    Entry::class,
    Entry::EVENT_AFTER_SAVE,
    function(ModelEvent $event) {
        /** @var Entry $entry */
        $entry = $event->sender;

        if ($entry->firstSave) {
            // This is the first time the entry has been saved
            // as a normal (non-draft, non-revision) element
        }
    }
);
```

## Preventing Field Handle Conflicts [#](#preventing-field-handle-conflicts "Direct link to Preventing Field Handle Conflicts")

There are cases where a custom field handle conflicts with a similar concept provided by the element type. For example, adding an `author` field to an entry type’s field layout would conflict with its entries’ `author` values.

Now it’s possible to avoid such conflicts, by validating field layouts with a list of reserved custom field handles.

To set that up, first add a new validation rule to the `defineRules()` method of the component which the field layout is defined by (e.g. the entry type):

```
protected function defineRules(): array
{
    return [
        // ...
        ['fieldLayout', 'validateFieldLayout'],
    ];
}
```

Then add a `validateFieldLayout()` method to the same class, which sets the list of reserved custom field handles on the field layout, validates it, and copies any validation errors back to the main component:

```
public function validateFieldLayout(): void
{
    $fieldLayout = $this->getFieldLayout();

    // Don’t allow author/section/type fields
    $fieldLayout->reservedFieldHandles = [
        'author',
        'section',
        'type',
    ];

    if (!$fieldLayout->validate()) {
        $this->addModelErrors($fieldLayout, 'fieldLayout');
    }
}
```

![](https://craftcms.com/dist/images/icon-tip.svg)

This change will only affect existing sites when they’re intentionally saved by an admin.

## Plugins Extending ElementMutationResolver [#](#plugins-extending-elementMutationResolver "Direct link to Plugins Extending ElementMutationResolver")

Any plugin supporting element mutation support by extending `craft\gql\base\ElementMutationResolver` and calling `$this->populateElementWithData($element, $arguments)` will need to provide an additional argument to the `populateElementWithData()` method.

```
// Old
$this->populateElementWithData($element, $arguments);

// New
$this->populateElementWithData($element, $arguments, $resolveInfo);
```

`$resolveInfo` should be the same variable that’s passed to the resolver method. This makes it possible for Craft to traverse mutation arguments and call every nested value normalizer when present.

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
