# Upgrading from Commerce 4 | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/upgrade

---

# Upgrading from Commerce 4

- ### On this Page

  - [Preparing for the Upgrade](commerce_5x__upgrade.md#preparing-for-the-upgrade)
  - [Performing the Upgrade](commerce_5x__upgrade.md#performing-the-upgrade)
  - [Products + Variants](commerce_5x__upgrade.md#products-variants)
  - [Multi-Store](commerce_5x__upgrade.md#multi-store)
  - [Prices](commerce_5x__upgrade.md#prices)
  - [Templates](commerce_5x__upgrade.md#templates)
  - [Queries](commerce_5x__upgrade.md#queries)
  - [Console Commands](commerce_5x__upgrade.md#console-commands)
  - [API Changes](commerce_5x__upgrade.md#api-changes)

Commerce 5 introduces powerful multi-store functionality and transforms the product management experience.

If you’re currently running Commerce 3, you’ll need to follow the [Commerce 4 upgrade guide](https://craftcms.com/docs/commerce/4.x/upgrading), first.

## [#](#preparing-for-the-upgrade)Preparing for the Upgrade

Before you begin, make sure that you have…

- …updated to the latest version of Craft 4 and Commerce 4;
- …familiarized yourself with the [Craft 5 upgrade process](https://craftcms.com/docs/5.x/upgrade);
- …reviewed [the changelog  (opens new window)](https://github.com/craftcms/commerce/blob/5.0/CHANGELOG.md) and changes further down this page;
- …resolved all deprecation warnings from Commerce 4 that need fixing;
- …backed up your database and files, in case anything goes awry;

Once you’ve completed these steps, you’re ready to begin the upgrade process.

If you are coming from Commerce 3 in two stages, run the [Commerce 4 upgrade command](https://craftcms.com/docs/commerce/4.x/upgrading#performing-the-upgrade) to migrate customer data *before* continuing to Commerce 5!

## [#](#performing-the-upgrade)Performing the Upgrade

The Commerce 5 happens at the same time you [upgrade to Craft 5](https://craftcms.com/docs/5.x/upgrade). As you alter version constraints in `composer.json`, set `craftcms/commerce` to `^5.0.0-beta.1`.

[Upgrading from Craft 4
→

Take a peek at what’s new in Craft 5.](https://craftcms.com/docs/5.x/upgrade)

Commerce migrations will run just after Craft’s, and content for your products and variants will be moved into the new storage architecture. Once you’re running the latest version of Craft Commerce, you’ll need to update your templates and any custom code relevant to the topics detailed below.

## [#](#products-variants)Products + Variants

The way you interact with products and variants has changed in some subtle, non-breaking ways.

### [#](#nested-elements)Nested Elements

Variants take advantage of Craft 5’s new *nested elements* system, meaning they are managed via an embedded element index as a table or cards. Products with many variants benefit from search, filtering, pagination, sorting, and customizable previews.

During the upgrade, variants will be automatically migrated to this new structure. To clarify this relationship, we are deprecating [craft\commerce\elements\Variant::getProduct()  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-variant.html#method-getproduct) in favor of the underlying element class’s [getOwner()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-getowner) method:

```
{% set smallThings = craft.variants()
  .weight('< 1')
  .with(['owner'])
  .all() %}

<ul>
  {% for smallThing in smallThings %}
    <li>{{ smallThing.getOwner().title }}: {{ smallThing.title }}</li>
  {% endfor %}
</ul>
```

### [#](#product-types)Product Types

Product types now have a **Maximum Variants** setting that replaces the `hasVariants` setting. During the upgrade, product types that had `hasVariants` *off* were given a `maxVariants` of `1`. Logic based on a product type’s configuration may need to be updated:

OldNew

```
{% if product.type.hasVariants %}
  <select name="purchasableId">
    {% for variant in product.variants %}
      <option value="{{ variant.id }}">{{ variant.title }}</option>
    {% endfor %}
  </select>
  {# ... #}
{% else %}
  <button name="purchasableId" value="{{ product.defaultVariantId }}">Add to Cart</button>
{% endif %}
```

```
{% if product.type.maxVariants > 1 %}
  <select name="purchasableId">
    {% for variant in product.variants %}
      <option value="{{ variant.id }}">{{ variant.title }}</option>
    {% endfor %}
  </select>
  {# ... #}
{% else %}
  <button name="purchasableId" value="{{ product.defaultVariantId }}">Add to Cart</button>
{% endif %}
```

### [#](#field-layouts)Field Layouts

The interface for single-variant products is the same as multi-variant products, so you may now use product *and* variant field layouts at the same time. This also means that *all* purchasable information is transparently edited via a variant (rather than it appearing within the sidebar of the product edit screen).

To give you more flexibility over how built-in variant attributes are managed, fields that were previously in the product’s sidebar (or a split view of the inline variant editor) are now discrete field layout elements. Use the **Variant Fields** tab in any product type edit screen to arrange these in a way that makes sense for your store.

## [#](#multi-store)Multi-Store

Commerce now supports multiple storefronts, each with unique configuration.

[Stores
→

Set up your sales channels to match your customers’ needs and locations.](commerce_5x__system__stores.md)

A number of settings have moved from the “global” space into the context of individual stores:

- `autoSetNewCartAddresses`
- `autoSetCartShippingMethodOption`
- `autoSetPaymentSource`
- `allowEmptyCartOnCheckout`
- `allowCheckoutWithoutPayment`
- `allowPartialPaymentOnCheckout`
- `requireShippingAddressAtCheckout`
- `requireBillingAddressAtCheckout`
- `requireShippingMethodSelectionAtCheckout`
- `useBillingAddressForTax`
- `validateOrganizationTaxIdAsVatId`
- `orderReferenceFormat`
- `freeOrderPaymentStrategy`
- `minimumTotalPriceStrategy`

If you had previously used these in your `config/commerce.php` file, they will be ignored. During the upgrade, Commerce copies each setting onto the new default/primary store, and saves them in [project config](https://craftcms.com/docs/5.x/system/project-config). To review or update these settings, visit

1. Commerce→
2. System Settings→
3. Stores→
4. Primary

.

The singular `store` service has been deprecated. In its place, the `stores` service provides access to information about all the configured stores. Calls to `craft.commerce.store.store` should be replaced with the new global `currentStore` variable, or an explicit call via the new service:

OldNew

```
{# Get the store’s address: #}
{% set address = craft.commerce.store.store.getLocationAddress() %}
```

```
{# Get the current store’s address: #}
{% set address = currentStore.settings.locationAddress %}

{# ...or... #}
{% set store = craft.commerce.stores.getStoreByHandle('store-eu') %}
{% set address = store.settings.locationAddress %}
```

Non-project config settings (like the order condition formula and [markets](commerce_5x__system__stores.md#markets)) are now accessible via a dedicated [StoreSettings  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-storesettings.html) model:

```
{% set allowedCountries = currentStore.settings.countriesList %}

{% if cart.shippingAddress.countryCode not in countries|keys %}
  <p>Sorry, we don’t fulfill orders to or from {{ countries[cart.shippingAddress.countryCode].name }}!</p>
{% endif %}
```

## [#](#prices)Prices

Commerce 5 changes how pricing, sales, and discounts work. [Variants](commerce_5x__system__products-variants.md) now define a **Price** and a **Promotional Price**, with variations handled via [catalog pricing rules](commerce_5x__system__pricing-rules.md).

This differs from the previous sales engine in a couple of fundamental ways:

- Prices are pre-computed for each possible combination of purchasable (and customer, if applicable);
- The final price and promotional price (previously the “sale price”) can be used for filtering and sorting element queries;

A pricing rule either *sets* or *reduces* the price (or promotional price) of a purchasable based on its original price (or promotional price). You can even configure rules that cross-populate prices and promotional prices—like setting the normal price to the promotional price for customers in certain user group, then taking an additional percentage off the original promotional price.

Commerce will try and keep your pricing up-to-date, but some events (like a user being removed from a group) can cause brief inconsistencies. To ensure the pricing catalog remains accurate, add a daily CRON task:

```
0 0 * * * /usr/bin/env php /path/to/craft commerce/catalog-pricing/generate
```

[Catalog Pricing
→

Read more about the new pricing engine.](commerce_5x__system__pricing-rules.md)

### [#](#sales)Sales

Upgraded projects that had at least one [sale](commerce_5x__system__sales.md) configured will retain access to the sales feature. New projects, however, only have access to the new [catalog pricing](commerce_5x__system__pricing-rules.md) engine.

Until you’ve cleared out *all* existing sales, the **Pricing Rules** tab will be hidden from the **Store Management** navigation. Inversely, if a store has *no* sales (as is the case with fresh installs), the **Sales** tab will be hidden.

## [#](#templates)Templates

We expect minimal impact to front-end templates, for most projects. Single-store installations will function almost identically, before and after the upgrade.

### [#](#global-variables)Global Variables

A new `currentStore` variable is available in all templates, containing a reference to the [craft\commerce\models\Store  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-store.html) for the current *site*.

### [#](#properties-methods)Properties & Methods

Some properties and methods have been moved from products to variants (along with their corresponding [query](#queries) methods):

- `craft\commerce\elements\Product::hasUnlimitedStock()` is deprecated. Check each variant’s `inventoryTracked` property, instead:

  ```
  {% set hasVariantWithUntrackedStock = product.variants.contains('inventoryTracked', true) %}
  ```
- `craft\commerce\elements\Variant::getProduct()` has been deprecated in favor of the nested element interface’s `getOwner()` method. `getProduct()` will continue to work throughout the 5.x lifecycle.
- `craft\commerce\elements\Product::getVariants()` now returns a special type of [collection](https://craftcms.com/docs/5.x/development/collections). See the `hasUnlimitedStock` replacement, above, for an example of how this can be used.

## [#](#queries)Queries

Some [product query](commerce_5x__system__products-variants.md#querying-products) params have been moved to *variant* queries to agree with their shift to the base [craft\commerce\base\Purchasable  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-base-purchasable.html) class, but their accepted arguments remain the same:

- `shippingCategory()`
- `shippingCategoryId()`
- `taxCategory()`
- `taxCategoryId()`
- `availableForPurchase()`

If you are using any of these parameters in product queries, you may need to replace them with `hasVariant()`, and pass a variant query with those params:

OldNew

```
{% set perishableShippingCategory = craft.commerce.shippingCategories.getShippingCategoryByHandle('perishable') %}

{% set perishableGoods = craft.products()
  .shippingCategory(perishableShippingCategory)
  .all() %}
```

```
{% set perishableShippingCategory = craft.commerce.shippingCategories.getShippingCategoryByHandle('perishable') %}

{% set perishableGoods = craft.products()
  .hasVariant({
    shippingCategory: perishableShippingCategory,
  })
  .all() %}
```

Variant queries’ `hasUnlimitedStock()` param (inherited from [PurchasableQuery  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-purchasable.html)) has also been deprecated—use the new `inventoryTracked()` param, instead. Note that the meaning of the boolean param has inverted, as well: when querying for variants with “unlimited” or *untracked* inventory, `hasUnlimitedStock(true)` translates to `inventoryTracked(false)`.

## [#](#console-commands)Console Commands

Commerce 5 adds one new [console command](commerce_5x__reference__console-commands.md), to help keep catalog pricing up-to-date:

`commerce/pricing-catalog/generate`
:   Fully regenerates pricing data for all purchasables.

## [#](#api-changes)API Changes

To support multi-store functionality and the new pricing catalog, there are a number of breaking API changes. Review these and other deprecations in the [changelog  (opens new window)](https://github.com/craftcms/commerce/blob/5.0/CHANGELOG.md).

### [#](#hooks)Hooks

With the adoption of the universal element editor, some template hooks have been removed:

- `cp.commerce.product.edit.content` — Create a custom [field layout element](https://craftcms.com/docs/5.x/extend/field-layout-element-types) to allow developers to customize where and when additional form components are displayed.
- `cp.commerce.product.edit.details` — Use the [craft\commerce\elements\Product::EVENT\_DEFINE\_SIDEBAR\_HTML  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-product.html#event-define-sidebar_html) to inject markup into the editor sidebar, or [craft\commerce\elements\Product::EVENT\_DEFINE\_META\_FIELDS\_HTML  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-product.html#event-define-meta_fields_html) to specifically target the “meta” region.

These new customization methods event is emitted by *all* elements, so you can use it to customize variant edit screens, as well.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/upgrade.md)
