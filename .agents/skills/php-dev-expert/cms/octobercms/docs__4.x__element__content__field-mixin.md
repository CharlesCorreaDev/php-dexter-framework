# Mixin Field - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/element/content/field-mixin.html

---

# Mixin Field

Content Field

`mixin` - includes another set of fields.

```
_include1:
    type: mixin
    source: <uuid|handle>
```

When using a mixin, consider prefixing the field name with an underscore (\_) to make them easy to spot.

To include a mixin, you may reference the `source` as the blueprint handle.

```
_location_fields:
    type: mixin
    source: Fields\Location
```

For a more robust reference, you may also specify the UUID.

```
_blog_fields:
    type: mixin
    source: 6d6a5efa-3ce7-4b9d-bddc-ac48867552cb
```

See the [Blueprints article](docs__4.x__cms__tailor__blueprints.md) for more information on defining mixins.

#### [#](#see-also) See Also

- [Tailor Blueprints](docs__4.x__cms__tailor__blueprints.md)

← [Available Commands](docs__4.x__element__available-commands.md)[Entries Field](docs__4.x__element__content__field-entries.md) →
