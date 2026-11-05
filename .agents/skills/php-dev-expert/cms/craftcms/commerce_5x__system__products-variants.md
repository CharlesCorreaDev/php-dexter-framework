# Products & Variants | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/products-variants

---

# Products & Variants

- ### On this Page

  - [Products](commerce_5x__system__products-variants.md#products)
  - [Variants](commerce_5x__system__products-variants.md#variants)
  - [Querying Variants](commerce_5x__system__products-variants.md#querying-variants)

Your product catalog in Commerce is represented by a pair of [element types](https://craftcms.com/docs/5.x/system/elements).

- [**Products**](#products) are the top-level container for goods and content.
- [**Variants**](#variants) represent individual [purchasables](commerce_5x__system__purchasables.md) that are ultimately added to carts.

Every *product* must have one or more *variants*, and every *variant* belongs to a single *product*.

Product & Variant Architecture

To illustrate the relationship between products and variants, consider the needs of a store that sells apparel.

A particular pair of tennis shoes is available in two colors, and in U.S. half-size increments from 6 to 12. The **product** we’re describing might have a name like “Court Balance DX,” while the **variants** represent each intersection of a color and size. This is both a key discovery tool (customers need to find shoes that fit their feet and style), *and* a necessary business tool for the store owner (tracking inventory, accounting for shipping weight, visualizing sales).

In this example, the product would hold all the marketing information like text, photos, and graphics, while the variants represent unique, saleable *variations*. Customers shop for a shoe that is aligned with their needs and tastes, but *buy* a specific size and color.

## [#](#products)Products

Products organize your goods into logical bundles of [variants](#variants). A product itself is never actually purchased—what goes into a cart for purchase is one of the product’s [variants](#variants). In this way, the product is free to house some globally-relevant attributes or content, while the variants describe specific physical or digital items.

In the same way that Craft’s native element types each share a set of common attributes, every Commerce product has a **Title**, **Slug**, **Post Date**, **Expiry Date**, and per-site status options.

### [#](#product-types)Product Types

**Product Types** provide a way to distinguish classes of goods in your stores. Manage product types in the control panel from

1. Commerce→
2. System Settings→
3. Product Types

.

Despite their similarities to [entries](https://craftcms.com/docs/5.x/reference/element-types/entries#entry-types), a product’s type cannot be changed after it is created.

#### [#](#product-type-options)Product Type Options

Each product type has the following settings. Some product type settings govern the behavior of the variants nested within it!

Name
:   The name of the product type as displayed in the control panel. Customers only see this if you explicitly output it in the front-end (or in an email or PDF).

Handle
:   The handle is what you’ll use to reference the product type in code. In Twig, you would [query for products](#querying-products) with the `clothes` type like this:

    ```
    {% set clothes = craft.products()
      .type('clothes')
      .all() %}
    ```

Enable structure for products of this type [5.4.0+](https://github.com/craftcms/commerce/blob/5.4.0/CHANGELOG.md "Structure mode for product types was first available in version 5.4.0 of Commerce.")
:   Products can be organized hierarchically, like [structure sections](https://craftcms.com/docs/5.x/reference/element-types/entries#structures).

    Default Product Placement
    :   Where new products should be placed by default in the structure. Defaults to *After other products*, but can be changed to *Before other products*.

    Max Levels
    :   Limit the depth that products can be nested by providing a non-zero integer.

Enable versioning for products of this type
:   Enable versioning to stage and revert product content changes with Craft’s drafts and revisions system. Provisional drafts (“autosaving,” colloquially) is always enabled.

Show the Title field for products
:   When enabled, each product will require a **Title**. Disable this if you’d like to generate titles with an [object template](https://craftcms.com/docs/5.x/system/object-templates), using values of other attributes or fields.

    Title translation method [5.1.0+](https://github.com/craftcms/commerce/blob/5.1.0/CHANGELOG.md "Product title translation method settings was first available in version 5.1.0 of Commerce.")
    :   When using custom titles, you can choose how titles are synchronized across sites that the product exists in. The options are identical to those available in [custom fields](https://craftcms.com/docs/5.x/system/fields#translation-methods).

        For [multi-store](commerce_5x__system__stores.md) projects, you can use the **Custom…** option with a key format like this to synchronize titles across sites that use the same store:

        ```
        {site.store.handle}
        ```

    Product Title Format
    :   If you are not using custom product titles, you must provide an [object template](https://craftcms.com/docs/5.x/system/object-templates) so Commerce can generate one. Make sure your underlying data is distinct enough for customers and store managers to differentiate them!

Automatic SKU Format
:   Defines what variants’ auto-generated SKUs should look like when left empty. This setting is defined as an [object template](https://craftcms.com/docs/5.x/system/object-templates), meaning it can include dynamic values such as `{product.slug}` or `{myCustomField}`.

    The SKU format is always evaluated in the context of a *variant*, so product attributes must be prefixed with `product`, like `{product.myCustomField}`.

    Commerce requires that SKUs are unique across all variants in the system—including anything in the trash—so avoid using static or ambiguous values (like `PLACEHOLDER`) that are apt to collide when first saving a variant.

Order Description Format
:   Like the **Automatic SKU Format**, this is also an [object template](https://craftcms.com/docs/5.x/system/object-templates) that is rendered in the context of a variant. It can include tags that output properties of the variant or its product, like `{myVariantCustomField}` or `{product.title}`.

    The rendered string is ultimately stored in line items’ `description` attribute, and used to identify the purchasable in a customer’s cart (and the control panel). Changing a description format does *not* apply to completed orders, retroactively.

Max Variants
:   Limit the number of variants allowed by products of this type. Use `1` to enforce single-variant products, or leave blank to impose no limits.

Show the Dimensions and Weight fields
:   Allows you to hide the weight and dimensions fields if they are not necessary for variants belonging to products of this type.

Show the Title field for variants
:   Equivalent to **Show the Title field for products**, but for variants.

    When *enabled*, you will select a **Title Translation Method**. To avoid confusion, this should generally match the product’s setting.  [5.1.0+](https://github.com/craftcms/commerce/blob/5.1.0/CHANGELOG.md "Variant title translation method settings was first available in version 5.1.0 of Commerce.")

    When *disabled*, you must define a **Variant Title Format** using an [object template](https://craftcms.com/docs/5.x/system/object-templates). Note that this template is evaluated in the context of the variant, so product attributes and custom fields must be accessed as `{product.slug}` (not `{slug}` alone). The **Title** field layout element will always appear in the [variant field layout designer](#variant-fields), but it will be hidden when editing a variant.

Site Settings
:   Like [entries](https://craftcms.com/docs/5.x/reference/element-types/entries) and other built-in [element types](https://craftcms.com/docs/5.x/system/elements), products provide site-specific routing settings. When a customer visits a product’s URL in a given site, Commerce renders the specified template with a special `product` variable.

    Variants do not have their own routing mechanism; calling `variant.url` will return the product’s URL (for the site it was loaded in) with a `variant={id}` query string appended.

Propagation Method [5.1.0+](https://github.com/craftcms/commerce/blob/5.1.0/CHANGELOG.md "Product element propagation was first available in version 5.1.0 of Commerce.")
:   Choose how new product and variant elements are propagated across its supported sites.

When you create a new product type, don’t forget to give your store managers the appropriate [permissions](commerce_5x__reference__permissions.md)!

Within the [**Product Fields**](#product-fields) and [**Variants Fields**](#variant-fields) tabs, you can also configure some default behaviors.
Use the action menu on any of these field layout elements and select **Settings** to configure them:

- **Allow out of stock purchases** (Variants) — Enable overselling of variants.
- **Available for purchase** (Variants) — An additional safeguard against immediately releasing products for sale.
- **Promotable** (Variants) — Opt in/out of promotions.
- **Track Inventory** (Variants) — Useful when selling primarily digital or physical goods.

These settings only control the *initial* value for the corresponding fields, and serve to optimize entry of products and variants; your administrators can always modify them to suit each product and variant.

#### [#](#tax-shipping)Tax & Shipping

The second tab in a product type’s settings screen is strictly informational—it displays a list of **Shipping Categories** and **Tax Categories** (from the **Store Management** area) that can be selected from *variants* of current product type.

Product types are defined globally, but shipping and tax categories are defined per-store. If you have similarly-named categories in multiple stores, you may see them listed twice.

#### [#](#product-fields)Product Fields

Every product type’s authoring experience can be tailored to its needs through a [field layout](https://craftcms.com/docs/5.x/system/fields). Consider what content belongs on a product and what belongs on a [variant](#variant-fields).

A product’s field layout *must* include the special **Variants** field layout element, which controls where the nested element management interface lives.

#### [#](#variant-fields)Variant Fields

In addition to fields associated directly with products, the product type defines what fields and options are available to their nested variants.

The fields below are described from the editor’s perspective, but may include configuration details to consider when assembling the field layout (like the default state for some fields).

Title
:   Hidden on the edit screen if the **Variant Title Format** setting is enabled on the product type.

[SKU](#skus)
:   Hidden on the edit screen if the **Automatic SKU Format** setting is enabled on the product type.

Price
:   The variant’s [base price](#prices) and [promotional price](#promotional-price), as well as a table showing any matching [catalog pricing rules](commerce_5x__system__pricing-rules.md).

[Stock](#stock)
:   Enable [inventory management](commerce_5x__system__inventory.md) for the variant, and quickly modify available stock or jump to a detail view for each inventory location. Open the field layout element’s **Settings** slideout to choose the default state for **Track Inventory** and **Allow out of stock purchases** settings for new variants.  [5.4.0+](https://github.com/craftcms/commerce/blob/5.4.0/CHANGELOG.md "Control over default state of the “Track Inventory” and “Allow out of stock purchases” settings on variants was first available in version 5.4.0 of Commerce.")

Available for Purchase
:   Prevent a variant from being added to carts. This setting is independent from the global and site-specific **Status**, and allows administrators to make variants discoverable prior to actually selling them. Open the field layout element’s **Settings** slideout to choose its default state for new variants.  [5.4.0+](https://github.com/craftcms/commerce/blob/5.4.0/CHANGELOG.md "Control over default state of the  “Available for Purchase” setting on variants was first available in version 5.4.0 of Commerce.")

Allowed Qty
:   Set minimum and maximum quantities that customers can purchase.

    A variant is considered “in stock” until its inventory is exhausted, without consideration of the minimum allowed quantity. If your store uses this feature, you may need to include checks in the template to prevent customer confusion:

    ```
    {% if not variant.hasStock or variant.stock < variant.minQty %}
      There is not enough inventory to satisfy the minimum order quantity.
    {% endif %}
    ```

Free Shipping
:   Controls whether [shipping](commerce_5x__system__shipping.md) calculations are performed for the variant.

Promotable
:   Controls whether the variant is eligible to match [discounts](commerce_5x__system__discounts.md) and [sales](commerce_5x__system__sales.md). Open the field layout element’s **Settings** slideout to choose its default state for new variants.

[Dimensions](#physical-properties)
:   Displays inputs for the variant’s **Length**, **Width**, and **Height** in the system’s **Dimensions Unit**.

[Weight](#physical-properties)
:   Displays an input for the variant’s **Weight** in the system’s **Weight Unit**.

### [#](#templating)Templating

There are a ton of ways to leverage your product types and product data in templates. Keep in mind that the custom fields available to each product type may differ—but they’re accessed exactly the same way as you would with any other element type!

#### [#](#displaying-a-product-type)Displaying a Product Type

Every product has access to its product type definition via a `type` attribute:

```
<ul class="breadcrumbs">
  <li><a href="{{ siteUrl }}">Home</a></li>
  <li><a href="{{ siteUrl('shop') }}">Shop</a></li>
  <li><a href="{{ siteUrl("shop/#{product.type.handle}") }}">{{ product.type.name }}</a></li>
</ul>

<h2>{{ product.title }}</h2>
```

This example generates a URL to an “index” for a product type—but requires that we set up a corresponding [route](https://craftcms.com/docs/5.x/system/routing#advanced-routing-with-url-rules) that maps it to a template:

```
return [
    // ...
    'shop/<productType:{slug}>' => ['template' => '_shop/product-type'],
];
```

An equivalent route can by configured in the control panel, via

1. Settings→
2. Routes

:

![Configuring a route to a product type index in the Craft control panel](/docs/assets/img/product-type-example-route.7d856d00.png)

#### [#](#listing-product-types)Listing Product Types

You can access a list of all configured product types via Commerce’s `productTypes` service:

```
{% for type in craft.commerce.productTypes.allProductTypes %}
  {{ type.handle }} - {{ type.name }}
{% endfor %}
```

### [#](#querying-products)Querying Products

Products are automatically loaded and exposed under a `product` variable when their URL is requested. In situations where you need to fetch one or more products based on some fixed or dynamic criteria, you will use a *product query*.

Product queries are a kind of element query, meaning they have a similar API to Craft’s built-in [element types](https://craftcms.com/docs/5.x/system/elements):

TwigPHPGraphQL

```
{# Create a new product query #}
{% set myProductQuery = craft.products() %}
```

```
// Create a new product query
$myProductQuery = \craft\commerce\elements\Product::find();
```

```
# Create a new product query
{
  products {
    # ...
  }
}
```

Once you’ve created a product query, you can set [parameters](#product-query-parameters) on it to narrow down the results, and then [execute it](https://craftcms.com/docs/5.x/development/element-queries#executing-element-queries) to return one or more [Product  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-product.html) elements.

See [Element Queries](https://craftcms.com/docs/5.x/development/element-queries) in the Craft docs to learn about how element queries work.

#### [#](#example)Example

We can use Twig to display the ten most recently-added *Clothing* products:

1. Create a product query with `craft.products()`.
2. Set the [`type`](#type) and [`limit`](#limit) parameters on it.
3. Fetch the products with `.all()`.
4. Loop through the products using a [`for`  (opens new window)](https://twig.symfony.com/doc/3.x/tags/for.html) tag to output their HTML.

```
{# Create a product query with the 'type' and 'limit' parameters #}
{% set newProducts = craft.products()
  .type('clothing')
  .limit(10)
  .all() %}

{# Display the products #}
{% for product in newProducts %}
  <h2>{{ product.title }}</h2>
  {{ product.summary|md }}
  <a href="{{ product.url }}">Learn more</a>
{% endfor %}
```

To fetch the same information with Craft’s [GraphQL API](https://craftcms.com/docs/5.x/development/graphql), we could write a query like this:

```
{
  products(limit: 10, type: "clothing") {
    title
    uri
    ... on clothing_Product {
      summary
    }
  }
}
```

#### [#](#eager-loading)Eager-loading

Products can be [eager-loaded](https://craftcms.com/docs/5.x/development/eager-loading) using the handle of a [relational field](commerce_5x__reference__fields.md#products-field) attached to other elements, and you can eager-load other related elements just as you would with any other element query.

You can also eager-load variants (and any elements related to or nested within them) via their products using the special `variants` handle:

```
{% set products = craft.products()
  .type('widgets')
  .with([
    ['variants.complianceStandards'],
  ])
  .all() %}

<ul>
  {% for product in products %}
    <li>
      <strong>{{ product.title }}</strong>
      <span class="separator">—</span>
      Options meeting:
      {{ product.variants|map(v => v.complianceStandards)|flatten|join(', ') }}
    </li>
  {% endfor %}
</ul>
```

### [#](#product-query-parameters)Product Query Parameters

Product queries support the following parameters:

| Param | Description |
| --- | --- |
| [after](#product-after) | Narrows the query results to only products that were posted on or after a certain date. |
| [afterPopulate](#product-afterpopulate) | Performs any post-population processing on elements. |
| [andRelatedTo](#product-andrelatedto) | Narrows the query results to only products that are related to certain other elements. |
| [asArray](#product-asarray) | Causes the query to return matching products as arrays of data, rather than [Product  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-product.html) objects. |
| [before](#product-before) | Narrows the query results to only products that were posted before a certain date. |
| [cache](#product-cache) | Enables query cache for this Query. |
| [clearCachedResult](#product-clearcachedresult) | Clears the [cached result  (opens new window)](https://craftcms.com/docs/4.x/element-queries#cache). |
| [dateCreated](#product-datecreated) | Narrows the query results based on the products’ creation dates. |
| [dateUpdated](#product-dateupdated) | Narrows the query results based on the products’ last-updated dates. |
| [defaultHeight](#product-defaultheight) | Narrows the query results based on the products’ default variant height dimension IDs. |
| [defaultLength](#product-defaultlength) | Narrows the query results based on the products’ default variant length dimension IDs. |
| [defaultPrice](#product-defaultprice) | Narrows the query results based on the products’ default variant price. |
| [defaultSku](#product-defaultsku) | Narrows the query results based on the default productvariants defaultSku |
| [defaultWeight](#product-defaultweight) | Narrows the query results based on the products’ default variant weight dimension IDs. |
| [defaultWidth](#product-defaultwidth) | Narrows the query results based on the products’ default variant width dimension IDs. |
| [eagerly](#product-eagerly) | Causes the query to be used to eager-load results for the query’s source element and any other elements in its collection. |
| [expiryDate](#product-expirydate) | Narrows the query results based on the products’ expiry dates. |
| [fixedOrder](#product-fixedorder) | Causes the query results to be returned in the order specified by [id](#product-id). |
| [hasVariant](#product-hasvariant) | Narrows the query results to only products that have certain variants. |
| [id](#product-id) | Narrows the query results based on the products’ IDs. |
| [ignorePlaceholders](#product-ignoreplaceholders) | Causes the query to return matching products as they are stored in the database, ignoring matching placeholder elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement). |
| [inBulkOp](#product-inbulkop) | Narrows the query results to only products that were involved in a bulk element operation. |
| [inReverse](#product-inreverse) | Causes the query results to be returned in reverse order. |
| [language](#product-language) | Determines which site(s) the products should be queried in, based on their language. |
| [limit](#product-limit) | Determines the number of products that should be returned. |
| [offset](#product-offset) | Determines how many products should be skipped in the results. |
| [orderBy](#product-orderby) | Determines the order that the products should be returned in. (If empty, defaults to `postDate DESC`.) |
| [postDate](#product-postdate) | Narrows the query results based on the products’ post dates. |
| [preferSites](#product-prefersites) | If [unique](#product-unique) is set, this determines which site should be selected when querying multi-site elements. |
| [prepForEagerLoading](#product-prepforeagerloading) | Prepares the query for lazy eager loading. |
| [prepareSubquery](#product-preparesubquery) | Prepares the element query and returns its subquery (which determines what elements will be returned). |
| [relatedTo](#product-relatedto) | Narrows the query results to only products that are related to certain other elements. |
| [render](#product-render) | Executes the query and renders the resulting elements using their partial templates. |
| [search](#product-search) | Narrows the query results to only products that match a search query. |
| [site](#product-site) | Determines which site(s) the products should be queried in. |
| [siteId](#product-siteid) | Determines which site(s) the products should be queried in, per the site’s ID. |
| [siteSettingsId](#product-sitesettingsid) | Narrows the query results based on the products’ IDs in the `elements_sites` table. |
| [slug](#product-slug) | Narrows the query results based on the products’ slugs. |
| [status](#product-status) | Narrows the query results based on the products’ statuses. |
| [title](#product-title) | Narrows the query results based on the products’ titles. |
| [trashed](#product-trashed) | Narrows the query results to only products that have been soft-deleted. |
| [type](#product-type) | Narrows the query results based on the products’ types. |
| [typeId](#product-typeid) | Narrows the query results based on the products’ types, per the types’ IDs. |
| [uid](#product-uid) | Narrows the query results based on the products’ UIDs. |
| [unique](#product-unique) | Determines whether only elements with unique IDs should be returned by the query. |
| [uri](#product-uri) | Narrows the query results based on the products’ URIs. |
| [wasCountEagerLoaded](#product-wascounteagerloaded) | Returns whether the query result count was already eager loaded by the query's source element. |
| [wasEagerLoaded](#product-waseagerloaded) | Returns whether the query results were already eager loaded by the query's source element. |
| [with](#product-with) | Causes the query to return matching products eager-loaded with related elements. |
| [withCustomFields](#product-withcustomfields) | Sets whether custom fields should be factored into the query. |

#### [#](#product-after) `after`

Narrows the query results to only products that were posted on or after a certain date.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'2018-04-01'` | that were posted after 2018-04-01. |
| a [DateTime  (opens new window)](https://php.net/class.datetime) object | that were posted after the date represented by the object. |

TwigPHP

```
{# Fetch products posted this month #}
{% set firstDayOfMonth = date('first day of this month') %}

{% set products = craft.products()
  .after(firstDayOfMonth)
  .all() %}
```

```
// Fetch products posted this month
$firstDayOfMonth = new \DateTime('first day of this month');

$products = \craft\commerce\elements\Product::find()
    ->after($firstDayOfMonth)
    ->all();
```

#### [#](#product-afterpopulate) `afterPopulate`

Performs any post-population processing on elements.

#### [#](#product-andrelatedto) `andRelatedTo`

Narrows the query results to only products that are related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/4.x/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all products that are related to myCategoryA and myCategoryB #}
{% set products = craft.products()
  .relatedTo(myCategoryA)
  .andRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all products that are related to $myCategoryA and $myCategoryB
$products = \craft\commerce\elements\Product::find()
    ->relatedTo($myCategoryA)
    ->andRelatedTo($myCategoryB)
    ->all();
```

#### [#](#product-asarray) `asArray`

Causes the query to return matching products as arrays of data, rather than [Product  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-product.html) objects.

TwigPHP

```
{# Fetch products as arrays #}
{% set products = craft.products()
  .asArray()
  .all() %}
```

```
// Fetch products as arrays
$products = \craft\commerce\elements\Product::find()
    ->asArray()
    ->all();
```

#### [#](#product-before) `before`

Narrows the query results to only products that were posted before a certain date.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'2018-04-01'` | that were posted before 2018-04-01. |
| a [DateTime  (opens new window)](https://php.net/class.datetime) object | that were posted before the date represented by the object. |

TwigPHP

```
{# Fetch products posted before this month #}
{% set firstDayOfMonth = date('first day of this month') %}

{% set products = craft.products()
  .before(firstDayOfMonth)
  .all() %}
```

```
// Fetch products posted before this month
$firstDayOfMonth = new \DateTime('first day of this month');

$products = \craft\commerce\elements\Product::find()
    ->before($firstDayOfMonth)
    ->all();
```

#### [#](#product-cache) `cache`

Enables query cache for this Query.

#### [#](#product-clearcachedresult) `clearCachedResult`

Clears the [cached result  (opens new window)](https://craftcms.com/docs/4.x/element-queries#cache).

#### [#](#product-datecreated) `dateCreated`

Narrows the query results based on the products’ creation dates.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'>= 2018-04-01'` | that were created on or after 2018-04-01. |
| `'< 2018-05-01'` | that were created before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were created between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were created at midnight of the specified relative date. |

TwigPHP

```
{# Fetch products created last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set products = craft.products()
  .dateCreated(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch products created last month
$start = (new \DateTime('first day of last month'))->format(\DateTime::ATOM);
$end = (new \DateTime('first day of this month'))->format(\DateTime::ATOM);

$products = \craft\commerce\elements\Product::find()
    ->dateCreated(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#product-dateupdated) `dateUpdated`

Narrows the query results based on the products’ last-updated dates.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'>= 2018-04-01'` | that were updated on or after 2018-04-01. |
| `'< 2018-05-01'` | that were updated before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were updated between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were updated at midnight of the specified relative date. |

TwigPHP

```
{# Fetch products updated in the last week #}
{% set lastWeek = date('1 week ago')|atom %}

{% set products = craft.products()
  .dateUpdated(">= #{lastWeek}")
  .all() %}
```

```
// Fetch products updated in the last week
$lastWeek = (new \DateTime('1 week ago'))->format(\DateTime::ATOM);

$products = \craft\commerce\elements\Product::find()
    ->dateUpdated(">= {$lastWeek}")
    ->all();
```

#### [#](#product-defaultheight) `defaultHeight`

Narrows the query results based on the products’ default variant height dimension IDs.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `1` | of a type with a dimension of 1. |
| `'not 1'` | not a dimension of 1. |
| `[1, 2]` | of a a dimension 1 or 2. |
| `['and', '>= ' ~ 100, '<= ' ~ 2000]` | of a dimension between 100 and 2000 |

TwigPHP

```
{# Fetch products of the product default dimension of 1 #}
{% set products = craft.products()
  .defaultHeight(1)
  .all() %}
```

```
// Fetch products of the product default dimension of 1
$products = \craft\commerce\elements\Product::find()
    ->defaultHeight(1)
    ->all();
```

#### [#](#product-defaultlength) `defaultLength`

Narrows the query results based on the products’ default variant length dimension IDs.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `1` | of a type with a dimension of 1. |
| `'not 1'` | not a dimension of 1. |
| `[1, 2]` | of a a dimension 1 or 2. |
| `['and', '>= ' ~ 100, '<= ' ~ 2000]` | of a dimension between 100 and 2000 |

TwigPHP

```
{# Fetch products of the product default dimension of 1 #}
{% set products = craft.products()
  .defaultLength(1)
  .all() %}
```

```
// Fetch products of the  product default dimension of 1
$products = \craft\commerce\elements\Product::find()
    ->defaultLength(1)
    ->all();
```

#### [#](#product-defaultprice) `defaultPrice`

Narrows the query results based on the products’ default variant price.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `10` | of a price of 10. |
| `['and', '>= ' ~ 100, '<= ' ~ 2000]` | of a default variant price between 100 and 2000 |

TwigPHP

```
{# Fetch products of the product type with an ID of 1 #}
{% set products = craft.products()
  .defaultPrice(1)
  .all() %}
```

```
// Fetch products of the product type with an ID of 1
$products = \craft\commerce\elements\Product::find()
    ->defaultPrice(1)
    ->all();
```

#### [#](#product-defaultsku) `defaultSku`

Narrows the query results based on the default productvariants defaultSku

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `xxx-001` | of products default SKU of `xxx-001`. |
| `'not xxx-001'` | not a default SKU of `xxx-001`. |
| `['not xxx-001', 'not xxx-002']` | of a default SKU of xxx-001 or xxx-002. |
| `['not',`xxx-001`,`xxx-002`]` | not a product default SKU of `xxx-001` or `xxx-001`. |

TwigPHP

```
{# Fetch products of the product default SKU of `xxx-001` #}
{% set products = craft.products()
  .defaultSku('xxx-001')
  .all() %}
```

```
// Fetch products  of the product default SKU of `xxx-001`
$products = \craft\commerce\elements\Product::find()
    ->defaultSku('xxx-001')
    ->all();
```

#### [#](#product-defaultweight) `defaultWeight`

Narrows the query results based on the products’ default variant weight dimension IDs.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `1` | of a type with a dimension of 1. |
| `'not 1'` | not a dimension of 1. |
| `[1, 2]` | of a a dimension 1 or 2. |
| `['and', '>= ' ~ 100, '<= ' ~ 2000]` | of a dimension between 100 and 2000 |

TwigPHP

```
{# Fetch products of the product default dimension of 1 #}
{% set products = craft.products()
  .defaultWeight(1)
  .all() %}
```

```
// Fetch products of the  product default dimension of 1
$products = \craft\commerce\elements\Product::find()
    ->defaultWeight(1)
    ->all();
```

#### [#](#product-defaultwidth) `defaultWidth`

Narrows the query results based on the products’ default variant width dimension IDs.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `1` | of a type with a dimension of 1. |
| `'not 1'` | not a dimension of 1. |
| `[1, 2]` | of a a dimension 1 or 2. |
| `['and', '>= ' ~ 100, '<= ' ~ 2000]` | of a dimension between 100 and 2000 |

TwigPHP

```
{# Fetch products of the product default dimension of 1 #}
{% set products = craft.products()
  .defaultWidth(1)
  .all() %}
```

```
// Fetch products of the  product default dimension of 1
$products = \craft\commerce\elements\Product::find()
    ->defaultWidth(1)
    ->all();
```

#### [#](#product-eagerly) `eagerly`

Causes the query to be used to eager-load results for the query’s source element
and any other elements in its collection.

#### [#](#product-expirydate) `expiryDate`

Narrows the query results based on the products’ expiry dates.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'>= 2020-04-01'` | that will expire on or after 2020-04-01. |
| `'< 2020-05-01'` | that will expire before 2020-05-01 |
| `['and', '>= 2020-04-04', '< 2020-05-01']` | that will expire between 2020-04-01 and 2020-05-01. |

TwigPHP

```
{# Fetch products expiring this month #}
{% set nextMonth = date('first day of next month')|atom %}

{% set products = craft.products()
  .expiryDate("< #{nextMonth}")
  .all() %}
```

```
// Fetch products expiring this month
$nextMonth = new \DateTime('first day of next month')->format(\DateTime::ATOM);

$products = \craft\commerce\elements\Product::find()
    ->expiryDate("< {$nextMonth}")
    ->all();
```

#### [#](#product-fixedorder) `fixedOrder`

Causes the query results to be returned in the order specified by [id](#product-id).

If no IDs were passed to [id](#product-id), setting this to `true` will result in an empty result set.

TwigPHP

```
{# Fetch products in a specific order #}
{% set products = craft.products()
  .id([1, 2, 3, 4, 5])
  .fixedOrder()
  .all() %}
```

```
// Fetch products in a specific order
$products = \craft\commerce\elements\Product::find()
    ->id([1, 2, 3, 4, 5])
    ->fixedOrder()
    ->all();
```

#### [#](#product-hasvariant) `hasVariant`

Narrows the query results to only products that have certain variants.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| a [VariantQuery  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-db-variantquery.html) object | with variants that match the query. |

#### [#](#product-id) `id`

Narrows the query results based on the products’ IDs.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `1` | with an ID of 1. |
| `'not 1'` | not with an ID of 1. |
| `[1, 2]` | with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an ID of 1 or 2. |

TwigPHP

```
{# Fetch the product by its ID #}
{% set product = craft.products()
  .id(1)
  .one() %}
```

```
// Fetch the product by its ID
$product = \craft\commerce\elements\Product::find()
    ->id(1)
    ->one();
```

This can be combined with [fixedOrder](#product-fixedorder) if you want the results to be returned in a specific order.

#### [#](#product-ignoreplaceholders) `ignorePlaceholders`

Causes the query to return matching products as they are stored in the database, ignoring matching placeholder
elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement).

#### [#](#product-inbulkop) `inBulkOp`

Narrows the query results to only products that were involved in a bulk element operation.

#### [#](#product-inreverse) `inReverse`

Causes the query results to be returned in reverse order.

TwigPHP

```
{# Fetch products in reverse #}
{% set products = craft.products()
  .inReverse()
  .all() %}
```

```
// Fetch products in reverse
$products = \craft\commerce\elements\Product::find()
    ->inReverse()
    ->all();
```

#### [#](#product-language) `language`

Determines which site(s) the products should be queried in, based on their language.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'en'` | from sites with a language of `en`. |
| `['en-GB', 'en-US']` | from sites with a language of `en-GB` or `en-US`. |
| `['not', 'en-GB', 'en-US']` | not in sites with a language of `en-GB` or `en-US`. |

Elements that belong to multiple sites will be returned multiple times by default. If you
only want unique elements to be returned, use [unique](#product-unique) in conjunction with this.

TwigPHP

```
{# Fetch products from English sites #}
{% set products = craft.products()
  .language('en')
  .all() %}
```

```
// Fetch products from English sites
$products = \craft\commerce\elements\Product::find()
    ->language('en')
    ->all();
```

#### [#](#product-limit) `limit`

Determines the number of products that should be returned.

TwigPHP

```
{# Fetch up to 10 products  #}
{% set products = craft.products()
  .limit(10)
  .all() %}
```

```
// Fetch up to 10 products
$products = \craft\commerce\elements\Product::find()
    ->limit(10)
    ->all();
```

#### [#](#product-offset) `offset`

Determines how many products should be skipped in the results.

TwigPHP

```
{# Fetch all products except for the first 3 #}
{% set products = craft.products()
  .offset(3)
  .all() %}
```

```
// Fetch all products except for the first 3
$products = \craft\commerce\elements\Product::find()
    ->offset(3)
    ->all();
```

#### [#](#product-orderby) `orderBy`

Determines the order that the products should be returned in. (If empty, defaults to `postDate DESC`.)

TwigPHP

```
{# Fetch all products in order of date created #}
{% set products = craft.products()
  .orderBy('dateCreated ASC')
  .all() %}
```

```
// Fetch all products in order of date created
$products = \craft\commerce\elements\Product::find()
    ->orderBy('dateCreated ASC')
    ->all();
```

#### [#](#product-postdate) `postDate`

Narrows the query results based on the products’ post dates.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'>= 2018-04-01'` | that were posted on or after 2018-04-01. |
| `'< 2018-05-01'` | that were posted before 2018-05-01 |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were posted between 2018-04-01 and 2018-05-01. |

TwigPHP

```
{# Fetch products posted last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set products = craft.products()
  .postDate(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch products posted last month
$start = new \DateTime('first day of next month')->format(\DateTime::ATOM);
$end = new \DateTime('first day of this month')->format(\DateTime::ATOM);

$products = \craft\commerce\elements\Product::find()
    ->postDate(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#product-prefersites) `preferSites`

If [unique](#product-unique) is set, this determines which site should be selected when querying multi-site elements.

For example, if element “Foo” exists in Site A and Site B, and element “Bar” exists in Site B and Site C,
and this is set to `['c', 'b', 'a']`, then Foo will be returned for Site B, and Bar will be returned
for Site C.

If this isn’t set, then preference goes to the current site.

TwigPHP

```
{# Fetch unique products from Site A, or Site B if they don’t exist in Site A #}
{% set products = craft.products()
  .site('*')
  .unique()
  .preferSites(['a', 'b'])
  .all() %}
```

```
// Fetch unique products from Site A, or Site B if they don’t exist in Site A
$products = \craft\commerce\elements\Product::find()
    ->site('*')
    ->unique()
    ->preferSites(['a', 'b'])
    ->all();
```

#### [#](#product-prepforeagerloading) `prepForEagerLoading`

Prepares the query for lazy eager loading.

#### [#](#product-preparesubquery) `prepareSubquery`

Prepares the element query and returns its subquery (which determines what elements will be returned).

#### [#](#product-relatedto) `relatedTo`

Narrows the query results to only products that are related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/4.x/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all products that are related to myCategory #}
{% set products = craft.products()
  .relatedTo(myCategory)
  .all() %}
```

```
// Fetch all products that are related to $myCategory
$products = \craft\commerce\elements\Product::find()
    ->relatedTo($myCategory)
    ->all();
```

#### [#](#product-render) `render`

Executes the query and renders the resulting elements using their partial templates.

If no partial template exists for an element, its string representation will be output instead.

#### [#](#product-search) `search`

Narrows the query results to only products that match a search query.

See [Searching  (opens new window)](https://craftcms.com/docs/4.x/searching) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Get the search query from the 'q' query string param #}
{% set searchQuery = craft.app.request.getQueryParam('q') %}

{# Fetch all products that match the search query #}
{% set products = craft.products()
  .search(searchQuery)
  .all() %}
```

```
// Get the search query from the 'q' query string param
$searchQuery = \Craft::$app->request->getQueryParam('q');

// Fetch all products that match the search query
$products = \craft\commerce\elements\Product::find()
    ->search($searchQuery)
    ->all();
```

#### [#](#product-site) `site`

Determines which site(s) the products should be queried in.

The current site will be used by default.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'foo'` | from the site with a handle of `foo`. |
| `['foo', 'bar']` | from a site with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not in a site with a handle of `foo` or `bar`. |
| a [craft\models\Site  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-site.html) object | from the site represented by the object. |
| `'*'` | from any site. |

If multiple sites are specified, elements that belong to multiple sites will be returned multiple times. If you
only want unique elements to be returned, use [unique](#product-unique) in conjunction with this.

TwigPHP

```
{# Fetch products from the Foo site #}
{% set products = craft.products()
  .site('foo')
  .all() %}
```

```
// Fetch products from the Foo site
$products = \craft\commerce\elements\Product::find()
    ->site('foo')
    ->all();
```

#### [#](#product-siteid) `siteId`

Determines which site(s) the products should be queried in, per the site’s ID.

The current site will be used by default.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `1` | from the site with an ID of `1`. |
| `[1, 2]` | from a site with an ID of `1` or `2`. |
| `['not', 1, 2]` | not in a site with an ID of `1` or `2`. |
| `'*'` | from any site. |

TwigPHP

```
{# Fetch products from the site with an ID of 1 #}
{% set products = craft.products()
  .siteId(1)
  .all() %}
```

```
// Fetch products from the site with an ID of 1
$products = \craft\commerce\elements\Product::find()
    ->siteId(1)
    ->all();
```

#### [#](#product-sitesettingsid) `siteSettingsId`

Narrows the query results based on the products’ IDs in the `elements_sites` table.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `1` | with an `elements_sites` ID of 1. |
| `'not 1'` | not with an `elements_sites` ID of 1. |
| `[1, 2]` | with an `elements_sites` ID of 1 or 2. |
| `['not', 1, 2]` | not with an `elements_sites` ID of 1 or 2. |

TwigPHP

```
{# Fetch the product by its ID in the elements_sites table #}
{% set product = craft.products()
  .siteSettingsId(1)
  .one() %}
```

```
// Fetch the product by its ID in the elements_sites table
$product = \craft\commerce\elements\Product::find()
    ->siteSettingsId(1)
    ->one();
```

#### [#](#product-slug) `slug`

Narrows the query results based on the products’ slugs.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'foo'` | with a slug of `foo`. |
| `'foo*'` | with a slug that begins with `foo`. |
| `'*foo'` | with a slug that ends with `foo`. |
| `'*foo*'` | with a slug that contains `foo`. |
| `'not *foo*'` | with a slug that doesn’t contain `foo`. |
| `['*foo*', '*bar*']` | with a slug that contains `foo` or `bar`. |
| `['not', '*foo*', '*bar*']` | with a slug that doesn’t contain `foo` or `bar`. |

TwigPHP

```
{# Get the requested product slug from the URL #}
{% set requestedSlug = craft.app.request.getSegment(3) %}

{# Fetch the product with that slug #}
{% set product = craft.products()
  .slug(requestedSlug|literal)
  .one() %}
```

```
// Get the requested product slug from the URL
$requestedSlug = \Craft::$app->request->getSegment(3);

// Fetch the product with that slug
$product = \craft\commerce\elements\Product::find()
    ->slug(\craft\helpers\Db::escapeParam($requestedSlug))
    ->one();
```

#### [#](#product-status) `status`

Narrows the query results based on the products’ statuses.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'live'` *(default)* | that are live. |
| `'pending'` | that are pending (enabled with a Post Date in the future). |
| `'expired'` | that are expired (enabled with an Expiry Date in the past). |
| `'disabled'` | that are disabled. |
| `['live', 'pending']` | that are live or pending. |

TwigPHP

```
{# Fetch disabled products #}
{% set products = craft.products()
  .status('disabled')
  .all() %}
```

```
// Fetch disabled products
$products = \craft\commerce\elements\Product::find()
    ->status('disabled')
    ->all();
```

#### [#](#product-title) `title`

Narrows the query results based on the products’ titles.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'Foo'` | with a title of `Foo`. |
| `'Foo*'` | with a title that begins with `Foo`. |
| `'*Foo'` | with a title that ends with `Foo`. |
| `'*Foo*'` | with a title that contains `Foo`. |
| `'not *Foo*'` | with a title that doesn’t contain `Foo`. |
| `['*Foo*', '*Bar*']` | with a title that contains `Foo` or `Bar`. |
| `['not', '*Foo*', '*Bar*']` | with a title that doesn’t contain `Foo` or `Bar`. |

TwigPHP

```
{# Fetch products with a title that contains "Foo" #}
{% set products = craft.products()
  .title('*Foo*')
  .all() %}
```

```
// Fetch products with a title that contains "Foo"
$products = \craft\commerce\elements\Product::find()
    ->title('*Foo*')
    ->all();
```

#### [#](#product-trashed) `trashed`

Narrows the query results to only products that have been soft-deleted.

TwigPHP

```
{# Fetch trashed products #}
{% set products = craft.products()
  .trashed()
  .all() %}
```

```
// Fetch trashed products
$products = \craft\commerce\elements\Product::find()
    ->trashed()
    ->all();
```

#### [#](#product-type) `type`

Narrows the query results based on the products’ types.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'foo'` | of a type with a handle of `foo`. |
| `'not foo'` | not of a type with a handle of `foo`. |
| `['foo', 'bar']` | of a type with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not of a type with a handle of `foo` or `bar`. |
| an [ProductType  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-producttype.html) object | of a type represented by the object. |

TwigPHP

```
{# Fetch products with a Foo product type #}
{% set products = craft.products()
  .type('foo')
  .all() %}
```

```
// Fetch products with a Foo product type
$products = \craft\commerce\elements\Product::find()
    ->type('foo')
    ->all();
```

#### [#](#product-typeid) `typeId`

Narrows the query results based on the products’ types, per the types’ IDs.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `1` | of a type with an ID of 1. |
| `'not 1'` | not of a type with an ID of 1. |
| `[1, 2]` | of a type with an ID of 1 or 2. |
| `['not', 1, 2]` | not of a type with an ID of 1 or 2. |

TwigPHP

```
{# Fetch products of the product type with an ID of 1 #}
{% set products = craft.products()
  .typeId(1)
  .all() %}
```

```
// Fetch products of the product type with an ID of 1
$products = \craft\commerce\elements\Product::find()
    ->typeId(1)
    ->all();
```

#### [#](#product-uid) `uid`

Narrows the query results based on the products’ UIDs.

TwigPHP

```
{# Fetch the product by its UID #}
{% set product = craft.products()
  .uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
  .one() %}
```

```
// Fetch the product by its UID
$product = \craft\commerce\elements\Product::find()
    ->uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
    ->one();
```

#### [#](#product-unique) `unique`

Determines whether only elements with unique IDs should be returned by the query.

This should be used when querying elements from multiple sites at the same time, if “duplicate” results is not
desired.

TwigPHP

```
{# Fetch unique products across all sites #}
{% set products = craft.products()
  .site('*')
  .unique()
  .all() %}
```

```
// Fetch unique products across all sites
$products = \craft\commerce\elements\Product::find()
    ->site('*')
    ->unique()
    ->all();
```

#### [#](#product-uri) `uri`

Narrows the query results based on the products’ URIs.

Possible values include:

| Value | Fetches products… |
| --- | --- |
| `'foo'` | with a URI of `foo`. |
| `'foo*'` | with a URI that begins with `foo`. |
| `'*foo'` | with a URI that ends with `foo`. |
| `'*foo*'` | with a URI that contains `foo`. |
| `'not *foo*'` | with a URI that doesn’t contain `foo`. |
| `['*foo*', '*bar*']` | with a URI that contains `foo` or `bar`. |
| `['not', '*foo*', '*bar*']` | with a URI that doesn’t contain `foo` or `bar`. |

TwigPHP

```
{# Get the requested URI #}
{% set requestedUri = craft.app.request.getPathInfo() %}

{# Fetch the product with that URI #}
{% set product = craft.products()
  .uri(requestedUri|literal)
  .one() %}
```

```
// Get the requested URI
$requestedUri = \Craft::$app->request->getPathInfo();

// Fetch the product with that URI
$product = \craft\commerce\elements\Product::find()
    ->uri(\craft\helpers\Db::escapeParam($requestedUri))
    ->one();
```

#### [#](#product-wascounteagerloaded) `wasCountEagerLoaded`

Returns whether the query result count was already eager loaded by the query's source element.

#### [#](#product-waseagerloaded) `wasEagerLoaded`

Returns whether the query results were already eager loaded by the query's source element.

#### [#](#product-with) `with`

Causes the query to return matching products eager-loaded with related elements.

See [Eager-Loading Elements  (opens new window)](https://craftcms.com/docs/4.x/dev/eager-loading-elements) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch products eager-loaded with the "Related" field’s relations #}
{% set products = craft.products()
  .with(['related'])
  .all() %}
```

```
// Fetch products eager-loaded with the "Related" field’s relations
$products = \craft\commerce\elements\Product::find()
    ->with(['related'])
    ->all();
```

#### [#](#product-withcustomfields) `withCustomFields`

Sets whether custom fields should be factored into the query.

## [#](#variants)Variants

Variants are [purchasables](commerce_5x__system__purchasables.md), and they represent the individual items that customers will add to their carts as *line items*—even when a product only has a single variant. The variant is where you’ll control [pricing](#prices) information, [tax and shipping](#tax-shipping-categories) settings, inventory, dimensions, and so on.

Commerce gives you a great deal of flexibility in designing your product catalog—but an important consideration early-on is how you want customers to discover goods in your store. Setting aside for a moment single-variant products, variants don’t get their own URLs, and are queried separately from products. Prematurely grouping items into products can make selection difficult for customers, while aggressively *separating* variations of a single item into products can make differentiating products more difficult for customers.

Consider these tradeoffs when building your catalog—and don’t forget that all of Craft’s content and relational tools are at your disposal, on both products *and* variants!

### [#](#prices)Prices

Every variant has a *price* and a *promotional price*. Both base prices are defined directly on the variant, in a store’s default currency—but the final price shown to a customer may be determined by [pricing rules](commerce_5x__system__pricing-rules.md) and [currency conversion](commerce_5x__system__currencies.md#conversion-and-formatting).

Prices are defined for each [store](commerce_5x__system__stores.md) a variant is available in; in the control panel, however, you will manage those differences on a per-*site* basis. If two sites point to the same store, you will see the same price and input currency when editing the variant in either.

#### [#](#promotional-price)Promotional Price

When provided, a promotional price takes precedence over the base price in all calculations. This is also the case after Commerce evaluates pricing rules, but only when the promotional price ends up *less* than the base price.

In a template, you can test whether a product has a promotional price (and it is less than its base price):

```
{% for variant in product.variants %}
  <label class="option">
    <input name="purchasableId" value="{{ variant.id }}" type="radio">
    <span class="label">{{ purchasable.title }}</label>
    <span class="price {{ variant.onPromotion ? 'price--has-promo' : null }}">
      <span class="price__base">{{ variant.price|commerceCurrency }}</span>

      {% if variant.onPromotion %}
        <span class="price__promotional">{{ variant.promotionalPrice|commerceCurrency }}</span>
      {% endif %}
    </span>
  </label>
{% endfor %}
```

#### [#](#sale-price)Sale Price

If you only want to advertise a single price, let Commerce reconcile the base and promotional price by using `variant.salePrice`.

### [#](#stock)Stock

Commerce tracks inventory at the variant level, using **Inventory Items** that correspond to each unique SKU in the system.

[Inventory
→

Manage stock and fulfill orders with sophisticated inventory tools.](commerce_5x__system__inventory.md)

Variants may define a minimum and maximum quantity that customers are allowed to add to their cart.

Minimum and maximum quantities are static. If you need to enforce dynamic quantity limits, advanced validation rules can be added to line items via a [plugin or module](commerce_5x__extend.md).

### [#](#physical-properties)Physical Properties

If the [product type](#product-type-options) is configured to display dimension fields, variants can hold values for **Length**, **Width**, and **Height**, as well as a **Weight**.

Dimensions and weight are set in the system’s **Dimensions Unit** and **Weight Unit**, respectively.

Changing the dimension or weight unit after products have been created will *not* convert existing values!

### [#](#skus)SKUs

Each variant has a globally-unique SKU. SKUs can be defined manually, or through a dynamically-evaluated SKU format (defined by its product’s [type](#product-types)).

Commerce tracks a single [inventory item](commerce_5x__system__inventory.md) per SKU, but that SKU may have inventory at multiple [locations](commerce_5x__system__inventory.md#locations).

### [#](#tax-shipping-categories)Tax & Shipping Categories

When creating a variant, you will select its **Tax** and **Shipping Category**.

For a **Tax Category** to be selectable, it must be allowed for the product type that the variant belongs to. This is a setting on the tax category itself; tax categories are shared across stores, but the effective zones and rates are defined per-store. Variants use the same tax category in all stores.

The **Shipping Category** follows similar rules, but the options are defined per-store.

Each variant may also have any number of custom fields to allow other distinguishing traits.

Commerce does not automatically create every possible unique variant for you—that’s up to the store manager.

### [#](#default-variant)Default Variant

Every product has a default variant. The default variant is indicated by a green check-mark in the nested element index.

To change the default variant, select its row in the element index and use the **Set default variant** [element action](https://craftcms.com/docs/5.x/system/elements#actions).

## [#](#querying-variants)Querying Variants

The most common ways to access variants will be via their [product](#products) or from a line item in a customer’s cart or order. In cases where you need to directly load one or more variants, you will use a *variant query*.

Variant queries are a special type of [element query](https://craftcms.com/docs/5.x/development/element-queries), and are created and executed using the same fluent API:

TwigPHPGraphQL

```
{# Create a new variant query #}
{% set myVariantQuery = craft.variants() %}
```

```
// Create a new variant query
$myVariantQuery = \craft\commerce\elements\Variant::find();
```

```
# Create a new variant query
{
  variants {
    # ...
  }
}
```

Once you’ve created a variant query, you can set [parameters](#variant-query-parameters) on it to narrow down the results, and then [execute it](https://craftcms.com/docs/5.x/element-queries.html#executing-element-queries) by calling `.all()`. An array of [Variant  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-variant.html) objects will be returned.

You can also fetch only the number of items a query might return, which is better for performance when you don’t need the variant data.

TwigPHPGraphQL

```
{# Count all enabled variants #}
{% set myVariantCount = craft.variants()
    .status('enabled')
    .count() %}
```

```
use craft\commerce\elements\Variant;

// Count all enabled variants
$myVariantCount = Variant::find()
    ->status(Variant::STATUS_ENABLED)
    ->count();
```

```
# Count all enabled variants
{
  variantCount(status: "enabled")
}
```

See [Element Queries](https://craftcms.com/docs/5.x/development/element-queries) in the Craft docs to learn about how element queries work.

### [#](#example-2)Example

We can display a specific variant by its SKU in Twig by doing the following:

1. Create a variant query with `craft.variants()`.
2. Set the [`sku`](#variant-sku) parameter on it.
3. Fetch the variant with `.one()`.
4. Output information about the variant as HTML.

```
{# Get the requested variant SKU from the query string #}
{% set variantSku = craft.app.request.getQueryParam('sku') %}

{# Create a variant query with the 'SKU' parameter #}
{% set myVariantQuery = craft.variants()
    .sku(variantSku) %}

{# Fetch the variant #}
{% set variant = myVariantQuery.one() %}

{# Make sure it exists #}
{% if not variant %}
    {% exit 404 %}
{% endif %}

{# Display information about the variant #}
<h1>{{ variant.title }}</h1>
<!-- ... -->
```

Fetching the equivalent with GraphQL could look like this:

```
# Fetch variant with a SKU of `WIDGET-BASIC`
{
  variants(sku: 'WIDGET-BASIC') {
    title
  }
}
```

### [#](#variant-query-parameters)Variant Query Parameters

Variant queries support the following parameters:

| Param | Description |
| --- | --- |
| [afterPopulate](#variant-afterpopulate) | Performs any post-population processing on elements. |
| [andRelatedTo](#variant-andrelatedto) | Narrows the query results to only variants that are related to certain other elements. |
| [asArray](#variant-asarray) | Causes the query to return matching variants as arrays of data, rather than [Variant  (opens new window)](https://docs.craftcms.com/commerce/api/v4/craft-commerce-elements-variant.html) objects. |
| [cache](#variant-cache) | Enables query cache for this Query. |
| [clearCachedResult](#variant-clearcachedresult) | Clears the [cached result  (opens new window)](https://craftcms.com/docs/4.x/element-queries#cache). |
| [dateCreated](#variant-datecreated) | Narrows the query results based on the variants’ creation dates. |
| [dateUpdated](#variant-dateupdated) | Narrows the query results based on the variants’ last-updated dates. |
| [fixedOrder](#variant-fixedorder) | Causes the query results to be returned in the order specified by [id](#variant-id). |
| [hasProduct](#variant-hasproduct) | Narrows the query results to only variants for certain products. |
| [hasSales](#variant-hassales) | Narrows the query results to only variants that are on sale. |
| [hasStock](#variant-hasstock) | Narrows the query results to only variants that have stock. |
| [hasUnlimitedStock](#variant-hasunlimitedstock) | Narrows the query results to only variants that have been set to unlimited stock. |
| [height](#variant-height) | Narrows the query results based on the variants’ height dimension. |
| [id](#variant-id) | Narrows the query results based on the variants’ IDs. |
| [ignorePlaceholders](#variant-ignoreplaceholders) | Causes the query to return matching variants as they are stored in the database, ignoring matching placeholder elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v4/craft-services-elements.html#method-setplaceholderelement). |
| [inReverse](#variant-inreverse) | Causes the query results to be returned in reverse order. |
| [isDefault](#variant-isdefault) | Narrows the query results to only default variants. |
| [length](#variant-length) | Narrows the query results based on the variants’ length dimension. |
| [limit](#variant-limit) | Determines the number of variants that should be returned. |
| [maxQty](#variant-maxqty) | Narrows the query results based on the variants’ max quantity. |
| [minQty](#variant-minqty) | Narrows the query results based on the variants’ min quantity. |
| [offset](#variant-offset) | Determines how many variants should be skipped in the results. |
| [orderBy](#variant-orderby) | Determines the order that the variants should be returned in. (If empty, defaults to `sortOrder ASC`.) |
| [preferSites](#variant-prefersites) | If [unique](#variant-unique) is set, this determines which site should be selected when querying multi-site elements. |
| [prepareSubquery](#variant-preparesubquery) | Prepares the element query and returns its subquery (which determines what elements will be returned). |
| [price](#variant-price) | Narrows the query results based on the variants’ price. |
| [product](#variant-product) | Narrows the query results based on the variants’ product. |
| [productId](#variant-productid) | Narrows the query results based on the variants’ products’ IDs. |
| [relatedTo](#variant-relatedto) | Narrows the query results to only variants that are related to certain other elements. |
| [search](#variant-search) | Narrows the query results to only variants that match a search query. |
| [site](#variant-site) | Determines which site(s) the variants should be queried in. |
| [siteId](#variant-siteid) |  |
| [siteSettingsId](#variant-sitesettingsid) | Narrows the query results based on the variants’ IDs in the `elements_sites` table. |
| [sku](#variant-sku) | Narrows the query results based on the variants’ SKUs. |
| [status](#variant-status) |  |
| [stock](#variant-stock) | Narrows the query results based on the variants’ stock. |
| [title](#variant-title) | Narrows the query results based on the variants’ titles. |
| [trashed](#variant-trashed) | Narrows the query results to only variants that have been soft-deleted. |
| [typeId](#variant-typeid) | Narrows the query results based on the variants’ product types, per their IDs. |
| [uid](#variant-uid) | Narrows the query results based on the variants’ UIDs. |
| [unique](#variant-unique) | Determines whether only elements with unique IDs should be returned by the query. |
| [weight](#variant-weight) | Narrows the query results based on the variants’ weight dimension. |
| [width](#variant-width) | Narrows the query results based on the variants’ width dimension. |
| [with](#variant-with) | Causes the query to return matching variants eager-loaded with related elements. |

#### [#](#variant-afterpopulate) `afterPopulate`

Performs any post-population processing on elements.

#### [#](#variant-andrelatedto) `andRelatedTo`

Narrows the query results to only variants that are related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/4.x/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all variants that are related to myCategoryA and myCategoryB #}
{% set variants = craft.variants()
  .relatedTo(myCategoryA)
  .andRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all variants that are related to $myCategoryA and $myCategoryB
$variants = \craft\commerce\elements\Variant::find()
    ->relatedTo($myCategoryA)
    ->andRelatedTo($myCategoryB)
    ->all();
```

#### [#](#variant-asarray) `asArray`

Causes the query to return matching variants as arrays of data, rather than [Variant  (opens new window)](https://docs.craftcms.com/commerce/api/v4/craft-commerce-elements-variant.html) objects.

TwigPHP

```
{# Fetch variants as arrays #}
{% set variants = craft.variants()
  .asArray()
  .all() %}
```

```
// Fetch variants as arrays
$variants = \craft\commerce\elements\Variant::find()
    ->asArray()
    ->all();
```

#### [#](#variant-cache) `cache`

Enables query cache for this Query.

#### [#](#variant-clearcachedresult) `clearCachedResult`

Clears the [cached result  (opens new window)](https://craftcms.com/docs/4.x/element-queries#cache).

#### [#](#variant-datecreated) `dateCreated`

Narrows the query results based on the variants’ creation dates.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `'>= 2018-04-01'` | that were created on or after 2018-04-01. |
| `'< 2018-05-01'` | that were created before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were created between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were created at midnight of the specified relative date. |

TwigPHP

```
{# Fetch variants created last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set variants = craft.variants()
  .dateCreated(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch variants created last month
$start = (new \DateTime('first day of last month'))->format(\DateTime::ATOM);
$end = (new \DateTime('first day of this month'))->format(\DateTime::ATOM);

$variants = \craft\commerce\elements\Variant::find()
    ->dateCreated(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#variant-dateupdated) `dateUpdated`

Narrows the query results based on the variants’ last-updated dates.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `'>= 2018-04-01'` | that were updated on or after 2018-04-01. |
| `'< 2018-05-01'` | that were updated before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were updated between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were updated at midnight of the specified relative date. |

TwigPHP

```
{# Fetch variants updated in the last week #}
{% set lastWeek = date('1 week ago')|atom %}

{% set variants = craft.variants()
  .dateUpdated(">= #{lastWeek}")
  .all() %}
```

```
// Fetch variants updated in the last week
$lastWeek = (new \DateTime('1 week ago'))->format(\DateTime::ATOM);

$variants = \craft\commerce\elements\Variant::find()
    ->dateUpdated(">= {$lastWeek}")
    ->all();
```

#### [#](#variant-fixedorder) `fixedOrder`

Causes the query results to be returned in the order specified by [id](#variant-id).

If no IDs were passed to [id](#variant-id), setting this to `true` will result in an empty result set.

TwigPHP

```
{# Fetch variants in a specific order #}
{% set variants = craft.variants()
  .id([1, 2, 3, 4, 5])
  .fixedOrder()
  .all() %}
```

```
// Fetch variants in a specific order
$variants = \craft\commerce\elements\Variant::find()
    ->id([1, 2, 3, 4, 5])
    ->fixedOrder()
    ->all();
```

#### [#](#variant-hasproduct) `hasProduct`

Narrows the query results to only variants for certain products.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| a [ProductQuery  (opens new window)](https://docs.craftcms.com/commerce/api/v4/craft-commerce-elements-db-productquery.html) object | for products that match the query. |

#### [#](#variant-hassales) `hasSales`

Narrows the query results to only variants that are on sale.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `true` | on sale |
| `false` | not on sale |

#### [#](#variant-hasstock) `hasStock`

Narrows the query results to only variants that have stock.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `true` | with stock. |
| `false` | with no stock. |

#### [#](#variant-hasunlimitedstock) `hasUnlimitedStock`

Narrows the query results to only variants that have been set to unlimited stock.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `true` | with unlimited stock checked. |
| `false` | with unlimited stock not checked. |

#### [#](#variant-height) `height`

Narrows the query results based on the variants’ height dimension.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `100` | with a height of 100. |
| `'>= 100'` | with a height of at least 100. |
| `'< 100'` | with a height of less than 100. |

#### [#](#variant-id) `id`

Narrows the query results based on the variants’ IDs.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `1` | with an ID of 1. |
| `'not 1'` | not with an ID of 1. |
| `[1, 2]` | with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an ID of 1 or 2. |

TwigPHP

```
{# Fetch the variant by its ID #}
{% set variant = craft.variants()
  .id(1)
  .one() %}
```

```
// Fetch the variant by its ID
$variant = \craft\commerce\elements\Variant::find()
    ->id(1)
    ->one();
```

This can be combined with [fixedOrder](#variant-fixedorder) if you want the results to be returned in a specific order.

#### [#](#variant-ignoreplaceholders) `ignorePlaceholders`

Causes the query to return matching variants as they are stored in the database, ignoring matching placeholder
elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v4/craft-services-elements.html#method-setplaceholderelement).

#### [#](#variant-inreverse) `inReverse`

Causes the query results to be returned in reverse order.

TwigPHP

```
{# Fetch variants in reverse #}
{% set variants = craft.variants()
  .inReverse()
  .all() %}
```

```
// Fetch variants in reverse
$variants = \craft\commerce\elements\Variant::find()
    ->inReverse()
    ->all();
```

#### [#](#variant-isdefault) `isDefault`

Narrows the query results to only default variants.

TwigPHP

```
{# Fetch default variants #}
{% set variants = craft.variants()
  .isDefault()
  .all() %}
```

```
// Fetch default variants
$variants = \craft\commerce\elements\Variant::find()
    ->isDefault()
    ->all();
```

#### [#](#variant-length) `length`

Narrows the query results based on the variants’ length dimension.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `100` | with a length of 100. |
| `'>= 100'` | with a length of at least 100. |
| `'< 100'` | with a length of less than 100. |

#### [#](#variant-limit) `limit`

Determines the number of variants that should be returned.

TwigPHP

```
{# Fetch up to 10 variants  #}
{% set variants = craft.variants()
  .limit(10)
  .all() %}
```

```
// Fetch up to 10 variants
$variants = \craft\commerce\elements\Variant::find()
    ->limit(10)
    ->all();
```

#### [#](#variant-maxqty) `maxQty`

Narrows the query results based on the variants’ max quantity.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `100` | with a maxQty of 100. |
| `'>= 100'` | with a maxQty of at least 100. |
| `'< 100'` | with a maxQty of less than 100. |

#### [#](#variant-minqty) `minQty`

Narrows the query results based on the variants’ min quantity.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `100` | with a minQty of 100. |
| `'>= 100'` | with a minQty of at least 100. |
| `'< 100'` | with a minQty of less than 100. |

#### [#](#variant-offset) `offset`

Determines how many variants should be skipped in the results.

TwigPHP

```
{# Fetch all variants except for the first 3 #}
{% set variants = craft.variants()
  .offset(3)
  .all() %}
```

```
// Fetch all variants except for the first 3
$variants = \craft\commerce\elements\Variant::find()
    ->offset(3)
    ->all();
```

#### [#](#variant-orderby) `orderBy`

Determines the order that the variants should be returned in. (If empty, defaults to `sortOrder ASC`.)

TwigPHP

```
{# Fetch all variants in order of date created #}
{% set variants = craft.variants()
  .orderBy('dateCreated ASC')
  .all() %}
```

```
// Fetch all variants in order of date created
$variants = \craft\commerce\elements\Variant::find()
    ->orderBy('dateCreated ASC')
    ->all();
```

#### [#](#variant-prefersites) `preferSites`

If [unique](#variant-unique) is set, this determines which site should be selected when querying multi-site elements.

For example, if element “Foo” exists in Site A and Site B, and element “Bar” exists in Site B and Site C,
and this is set to `['c', 'b', 'a']`, then Foo will be returned for Site B, and Bar will be returned
for Site C.

If this isn’t set, then preference goes to the current site.

TwigPHP

```
{# Fetch unique variants from Site A, or Site B if they don’t exist in Site A #}
{% set variants = craft.variants()
  .site('*')
  .unique()
  .preferSites(['a', 'b'])
  .all() %}
```

```
// Fetch unique variants from Site A, or Site B if they don’t exist in Site A
$variants = \craft\commerce\elements\Variant::find()
    ->site('*')
    ->unique()
    ->preferSites(['a', 'b'])
    ->all();
```

#### [#](#variant-preparesubquery) `prepareSubquery`

Prepares the element query and returns its subquery (which determines what elements will be returned).

#### [#](#variant-price) `price`

Narrows the query results based on the variants’ price.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `100` | with a price of 100. |
| `'>= 100'` | with a price of at least 100. |
| `'< 100'` | with a price of less than 100. |

#### [#](#variant-product) `product`

Narrows the query results based on the variants’ product.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| a [Product  (opens new window)](https://docs.craftcms.com/commerce/api/v4/craft-commerce-elements-product.html) object | for a product represented by the object. |

#### [#](#variant-productid) `productId`

Narrows the query results based on the variants’ products’ IDs.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `1` | for a product with an ID of 1. |
| `[1, 2]` | for product with an ID of 1 or 2. |
| `['not', 1, 2]` | for product not with an ID of 1 or 2. |

#### [#](#variant-relatedto) `relatedTo`

Narrows the query results to only variants that are related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/4.x/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all variants that are related to myCategory #}
{% set variants = craft.variants()
  .relatedTo(myCategory)
  .all() %}
```

```
// Fetch all variants that are related to $myCategory
$variants = \craft\commerce\elements\Variant::find()
    ->relatedTo($myCategory)
    ->all();
```

#### [#](#variant-search) `search`

Narrows the query results to only variants that match a search query.

See [Searching  (opens new window)](https://craftcms.com/docs/4.x/searching) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Get the search query from the 'q' query string param #}
{% set searchQuery = craft.app.request.getQueryParam('q') %}

{# Fetch all variants that match the search query #}
{% set variants = craft.variants()
  .search(searchQuery)
  .all() %}
```

```
// Get the search query from the 'q' query string param
$searchQuery = \Craft::$app->request->getQueryParam('q');

// Fetch all variants that match the search query
$variants = \craft\commerce\elements\Variant::find()
    ->search($searchQuery)
    ->all();
```

#### [#](#variant-site) `site`

Determines which site(s) the variants should be queried in.

The current site will be used by default.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `'foo'` | from the site with a handle of `foo`. |
| `['foo', 'bar']` | from a site with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not in a site with a handle of `foo` or `bar`. |
| a [craft\models\Site  (opens new window)](https://docs.craftcms.com/api/v4/craft-models-site.html) object | from the site represented by the object. |
| `'*'` | from any site. |

If multiple sites are specified, elements that belong to multiple sites will be returned multiple times. If you
only want unique elements to be returned, use [unique](#variant-unique) in conjunction with this.

TwigPHP

```
{# Fetch variants from the Foo site #}
{% set variants = craft.variants()
  .site('foo')
  .all() %}
```

```
// Fetch variants from the Foo site
$variants = \craft\commerce\elements\Variant::find()
    ->site('foo')
    ->all();
```

#### [#](#variant-siteid) `siteId`

#### [#](#variant-sitesettingsid) `siteSettingsId`

Narrows the query results based on the variants’ IDs in the `elements_sites` table.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `1` | with an `elements_sites` ID of 1. |
| `'not 1'` | not with an `elements_sites` ID of 1. |
| `[1, 2]` | with an `elements_sites` ID of 1 or 2. |
| `['not', 1, 2]` | not with an `elements_sites` ID of 1 or 2. |

TwigPHP

```
{# Fetch the variant by its ID in the elements_sites table #}
{% set variant = craft.variants()
  .siteSettingsId(1)
  .one() %}
```

```
// Fetch the variant by its ID in the elements_sites table
$variant = \craft\commerce\elements\Variant::find()
    ->siteSettingsId(1)
    ->one();
```

#### [#](#variant-sku) `sku`

Narrows the query results based on the variants’ SKUs.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `'foo'` | with a SKU of `foo`. |
| `'foo*'` | with a SKU that begins with `foo`. |
| `'*foo'` | with a SKU that ends with `foo`. |
| `'*foo*'` | with a SKU that contains `foo`. |
| `'not *foo*'` | with a SKU that doesn’t contain `foo`. |
| `['*foo*', '*bar*'` | with a SKU that contains `foo` or `bar`. |
| `['not', '*foo*', '*bar*']` | with a SKU that doesn’t contain `foo` or `bar`. |

TwigPHP

```
{# Get the requested variant SKU from the URL #}
{% set requestedSlug = craft.app.request.getSegment(3) %}

{# Fetch the variant with that slug #}
{% set variant = craft.variants()
  .sku(requestedSlug|literal)
  .one() %}
```

```
// Get the requested variant SKU from the URL
$requestedSlug = \Craft::$app->request->getSegment(3);

// Fetch the variant with that slug
$variant = \craft\commerce\elements\Variant::find()
    ->sku(\craft\helpers\Db::escapeParam($requestedSlug))
    ->one();
```

#### [#](#variant-status) `status`

#### [#](#variant-stock) `stock`

Narrows the query results based on the variants’ stock.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `0` | with no stock. |
| `'>= 5'` | with a stock of at least 5. |
| `'< 10'` | with a stock of less than 10. |

#### [#](#variant-title) `title`

Narrows the query results based on the variants’ titles.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `'Foo'` | with a title of `Foo`. |
| `'Foo*'` | with a title that begins with `Foo`. |
| `'*Foo'` | with a title that ends with `Foo`. |
| `'*Foo*'` | with a title that contains `Foo`. |
| `'not *Foo*'` | with a title that doesn’t contain `Foo`. |
| `['*Foo*', '*Bar*']` | with a title that contains `Foo` or `Bar`. |
| `['not', '*Foo*', '*Bar*']` | with a title that doesn’t contain `Foo` or `Bar`. |

TwigPHP

```
{# Fetch variants with a title that contains "Foo" #}
{% set variants = craft.variants()
  .title('*Foo*')
  .all() %}
```

```
// Fetch variants with a title that contains "Foo"
$variants = \craft\commerce\elements\Variant::find()
    ->title('*Foo*')
    ->all();
```

#### [#](#variant-trashed) `trashed`

Narrows the query results to only variants that have been soft-deleted.

TwigPHP

```
{# Fetch trashed variants #}
{% set variants = craft.variants()
  .trashed()
  .all() %}
```

```
// Fetch trashed variants
$variants = \craft\commerce\elements\Variant::find()
    ->trashed()
    ->all();
```

#### [#](#variant-typeid) `typeId`

Narrows the query results based on the variants’ product types, per their IDs.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `1` | for a product of a type with an ID of 1. |
| `[1, 2]` | for product of a type with an ID of 1 or 2. |
| `['not', 1, 2]` | for product of a type not with an ID of 1 or 2. |

#### [#](#variant-uid) `uid`

Narrows the query results based on the variants’ UIDs.

TwigPHP

```
{# Fetch the variant by its UID #}
{% set variant = craft.variants()
  .uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
  .one() %}
```

```
// Fetch the variant by its UID
$variant = \craft\commerce\elements\Variant::find()
    ->uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
    ->one();
```

#### [#](#variant-unique) `unique`

Determines whether only elements with unique IDs should be returned by the query.

This should be used when querying elements from multiple sites at the same time, if “duplicate” results is not
desired.

TwigPHP

```
{# Fetch unique variants across all sites #}
{% set variants = craft.variants()
  .site('*')
  .unique()
  .all() %}
```

```
// Fetch unique variants across all sites
$variants = \craft\commerce\elements\Variant::find()
    ->site('*')
    ->unique()
    ->all();
```

#### [#](#variant-weight) `weight`

Narrows the query results based on the variants’ weight dimension.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `100` | with a weight of 100. |
| `'>= 100'` | with a weight of at least 100. |
| `'< 100'` | with a weight of less than 100. |

#### [#](#variant-width) `width`

Narrows the query results based on the variants’ width dimension.

Possible values include:

| Value | Fetches variants… |
| --- | --- |
| `100` | with a width of 100. |
| `'>= 100'` | with a width of at least 100. |
| `'< 100'` | with a width of less than 100. |

#### [#](#variant-with) `with`

Causes the query to return matching variants eager-loaded with related elements.

See [Eager-Loading Elements  (opens new window)](https://craftcms.com/docs/4.x/dev/eager-loading-elements) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch variants eager-loaded with the "Related" field’s relations #}
{% set variants = craft.variants()
  .with(['related'])
  .all() %}
```

```
// Fetch variants eager-loaded with the "Related" field’s relations
$variants = \craft\commerce\elements\Variant::find()
    ->with(['related'])
    ->all();
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)

Parts of this page are generated or assembled by automations. While we greatly appreciate contributions to the documentation, [reporting automated content issues](https://github.com/craftcms/docs/issues/new/choose) will allow us to fix them at the source!
