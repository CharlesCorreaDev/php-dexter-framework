# Reference Tags | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/system/reference-tags

---

# Reference Tags

- ### On this Page

  - [Examples](docs_5x__system__reference-tags.md#examples)
  - [Generating Tags](docs_5x__system__reference-tags.md#generating-tags)
  - [Parsing Reference Tags](docs_5x__system__reference-tags.md#parsing-reference-tags)
  - [Safety](docs_5x__system__reference-tags.md#safety)

Reference tags can be used to create references to specific [elements](docs_5x__system__elements.md) in your site from any textual fields, including text cells within a [Table](docs_5x__reference__field-types__table.md) field.
Some field types automatically parse reference tags, and others may need to be [explicitly parsed](#parsing-reference-tags).

A reference tag usually takes this form:

```
{<Type>:<Identifier>@<Site>:<Property>||<Fallback>}
```

Curly braces (`{}`) surround the entire tag, with segments separated by colons (`:`):

1. `<Type>` – The type of element you’re creating a reference to. This can be a fully-qualified element class name (e.g. `craft\elements\Entry`) or the element type’s “reference handle.”

   Core element types have the following reference handles:

   - Addresses: `address`
   - Assets: `asset`
   - Categories: `category`
   - Entries: `entry`
   - Global Sets: `globalset`
   - Tags: `tag`
   - Users: `user`
2. `<Identifier>` – Either the element’s ID or a custom identifier supported by the element type:

   - Entries: `my-entry-slug`, or `mySection/my-entry-slug`
   - Categories: `my-category-slug` or `myGroup/my-category-slug`
   - Global sets: `setHandle`

   Identifiers can also include a site’s ID, UUID, or handle, after an `@` symbol. If the element does not exist in the specified site, the **Fallback** is returned.
3. `<Property>` *(optional)* – The element property or custom field handle that the reference tag should return.
   If omitted, the element’s URL will be returned.

   You can refer to the element types’ class references for a list of available properties:

   - [craft\elements\Address  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry#public-properties.html)
   - [craft\elements\Asset  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-asset#public-properties.html)
   - [craft\elements\Category  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-category#public-properties.html)
   - [craft\elements\Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry#public-properties.html)
   - [craft\elements\GlobalSet  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-globalset#public-properties.html)
   - [craft\elements\Tag  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-tag#public-properties.html)
   - [craft\elements\User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user#public-properties.html)

   Custom fields and properties accessed this way must be castable to strings.
4. `<Fallback>` *(optional)* — A default value, if the element could not be found or an error occurred when resolving the property to a string. If a fallback is not provided, Craft leaves the reference tag in place. Fallbacks are *not* used when the resolved value is empty.

Element types provided by plugins may offer their own reference handles. Check the element type’s static `refHandle()` method, or [generate an example tag](#generating-tags) from an element index.

## [#](#examples)Examples

The following are all valid reference tag formats:

- `{asset:123:filename}` — returns the filename of an asset with the ID of `123` (via [craft\elements\Asset::getFilename()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-asset.html#method-getfilename)).
- `{entry:blog/whats-on-tap}` — returns the URL of an entry in a `blog` section with the slug `whats-on-tap`.
- `{entry:blog/whats-on-tap@en:intro}` — returns the value of an `intro` custom field on a `blog` section entry with the slug `whats-on-tap`, loaded from the site with the handle `en`.
- `{craft\commerce\Variant:123:price}` — returns the price of a Commerce Variant object with the ID of `123`. Note that no formatting will be applied to the price! You may also use the `variant` type reference instead of the full class name.
- `{globalset:siteInfo:description}` — returns the value of a `description` field on a global set with the handle `siteInfo`.
- `{entry:departments/support:hours||9:30–16:30}` — returns the `hours` field value for an entry in the `departments` section with slug `support`, or the text `9:30–16:30` if it the entry can’t be found. Fallbacks cannot include other reference tags or closing curly braces (`}`).

A field can have as many reference tags as you wish.
Craft attempts to optimize how referenced elements are loaded, but will execute at least one query per element type.

Reference tags are not [eager-loadable](docs_5x__development__eager-loading.md).

## [#](#generating-tags)Generating Tags

Some element types ([assets](docs_5x__reference__element-types__assets.md), for instance) allow you to copy a basic reference tag from element indexes. Select a single row, then use the actions menu

Gear icon

to **Copy reference tag**. You can edit the copied tag to output a specific property—or let Craft decide the best representation (typically its URL).

## [#](#parsing-reference-tags)Parsing Reference Tags

You can parse any string for reference tags in your templates using the [parseRefs](docs_5x__system__reference__twig__filters.md#parserefs) filter:

```
{{ entry.body|parseRefs|raw }}
```

The equivalent function is available via [craft\services\Elements  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html):

```
$parsed = Craft::$app->getElements()->parseRefs($text);
```

Both functions take an optional `$siteId` param, which will determine what site the references are assumed to be in, if a tag doesn’t explicitly declare one.

## [#](#safety)Safety

Any time you allow dynamic references to other resources, it’s important to acknowledge some risks.

### [#](#recursion)Recursion

Reference tags are parsed recursively—so supposing you had a field with a reference to itself (or any other multi-element cyclical reference), Craft would go back and forth, parsing them until it ran out of memory!

### [#](#untrusted-input)Untrusted Input

**Do not** pass untrusted user input through `parseRefs`! Reference tags allow access to arbitrary properties and can lead to [exfiltration  (opens new window)](https://csrc.nist.gov/glossary/term/exfiltration) of private data—as an example, an anonymous user could submit `{user:1:email}` to try and get admin user’s email address.

This also applies to the [GraphQL directive](docs_5x__development__graphql.md#the-parserefs-directive) of the same name.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/system/reference-tags.md)
