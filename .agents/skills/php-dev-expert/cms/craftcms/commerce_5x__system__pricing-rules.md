# Catalog Pricing Rules | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/pricing-rules

---

# Catalog Pricing Rules

- ### On this Page

  - [Conditions](commerce_5x__system__pricing-rules.md#conditions)
  - [Actions](commerce_5x__system__pricing-rules.md#actions)
  - [Conflicts](commerce_5x__system__pricing-rules.md#conflicts)
  - [Debugging](commerce_5x__system__pricing-rules.md#debugging)
  - [Dynamic Pricing](commerce_5x__system__pricing-rules.md#dynamic-pricing)
  - [Querying Prices](commerce_5x__system__pricing-rules.md#querying-prices)

Pricing rules are sets of [conditions](#conditions) and [actions](#actions) that determine prices of [purchasables](commerce_5x__system__purchasables.md).

The catalog pricing system replaces [sales](commerce_5x__system__sales.md) from earlier versions of Commerce. If you [upgraded](commerce_5x__upgrade.md) your store from 4.x to 5.x and had already configured one or more sales, they will continue to work as expected. However, the new and old systems are *not* interoperable, and Commerce will only expose one set of controls at a time—you will see *either* a **Sales** *or* **Pricing Rules** item within the **Store Management** navigation.

If you wish to take advantage of pricing rules after the upgrade, you must first remove all existing sales.

Catalog pricing is computed and stored in the database when the underlying data changes. Prices can also be manually refreshed at any time (or on a schedule) with the `commerce/pricing-catalog/generate` console command. The resulting pricing information is joined in with normal variant queries and available transparently on the returned elements—even when rules produce customer-specific pricing!

This also means that you can accurately [sort and filter](#pricing-queries) based on effective prices in variant queries.

To create a pricing rule, visit

1. Commerce→
2. Store Management→
3. Pricing Rules

, and click **New catalog pricing rule**.

## [#](#conditions)Conditions

A pricing rule applies to any purchasable that satisfies its **Conditions**, but may can be scoped to a specific set of **Customers** (Craft [users](https://craftcms.com/docs/5.x/reference/element-types/users)).

Despite the similar name, purchasables do not need to be *promotable* to be eligible for catalog pricing.

Start Date
:   Apply this rule *after* the chosen date.

End Date
:   Apply this rule *before* the chosen date.

Match Product [5.1.0+](https://github.com/craftcms/commerce/blob/5.1.0/CHANGELOG.md "Product matching was first available in version 5.1.0 of Commerce.")
:   Apply the rule only to purchasables belonging to products that match the provided conditions.

Match Variant [5.1.0+](https://github.com/craftcms/commerce/blob/5.1.0/CHANGELOG.md "Variant matching was first available in version 5.1.0 of Commerce.")
:   Apply the rule only to variants matching the provided condition.

Match Purchasable
:   Set conditions that apply to any type of purchasable, including those provided by plugins.

Match Customers
:   Make the rule available only to customers who match the provided conditions. Rules that include customer conditions are implicitly limited to registered users.

If no conditions are configured, the rule will match *all* purchasables, and *all* customers (whether or not they are logged in).

## [#](#actions)Actions

When a rule matches a purchasable, its **Action** is applied. An action takes the matched purchasable’s price or promotional price, performs the defined arithmetic, and places the result in the pricing catalog as the new price or promotional price.

You can think of a pricing rule as having an independent *input* and *output*. The input can come from the purchasable’s price or promotional price, and the output can be directed to the purchasable’s price or promotional price.

The possible actions are:

| Action | Effect | Source Price |
| --- | --- | --- |
| Reduce price… | …by a percentage of… | …the original price. |
|  |  | …the original *promotional* price. |
|  | …by a fixed amount from… | …the original price. |
|  |  | …the original *promotional* price. |
| Set price… | …to a percentage of… | …the original price. |
|  |  | …the original *promotional* price. |
|  | …to a flat amount. | — |

Use the **Is Promotional Price?** toggle to choose which price the rule will affect. When this is *off*, the computed value becomes the *price*; when it’s *on*, the computed value becomes the *promotional price*.

All pricing rules operate on the purchasable’s original price or original promotional price. Pricing rules *do not* stack.

## [#](#conflicts)Conflicts

More than one pricing rule can match a purchasable. In the event of such an overlap, Commerce selects the *lowest* calculated price that would apply. Prices and promotional prices are always kept separate, as are the prices for each store.

## [#](#debugging)Debugging

To visualize what pricing a customer will see, you can pass their user ID to the `.forCustomer()` variant query param:

```
{% set user = craft.users()
  .username('oli')
  .one() %}

{% set myVariant = craft.variants()
  .id(1234)
  .forCustomer(user.id)
  .one() %}

{{ user.fullName }} would pay <del>{{ myVariant.price|commerceCurrency }}</del> {{ myVariant.promotionalPrice|commerceCurrency }}
```

Similarly, to check the price for a *guest*, you can pass `false`, explicitly:

```
{% set myVariant = craft.variants()
  .forCustomer(false)
  .one() %}

A guest would pay <del>{{ myVariant.price|commerceCurrency }}</del> {{ myVariant.promotionalPrice|commerceCurrency }}
```

## [#](#dynamic-pricing)Dynamic Pricing

The pricing catalog and discounts both operate on preestablished criteria and actions. In situations where a price needs to be dynamically calculated (say, from customer input in the form of [custom fields](commerce_5x__system__orders-carts.md#field-layout) or [line item options](commerce_5x__development__cart.md#line-item-options-and-notes)), Commerce gives you complete control over pricing and cart contents via its [events system](commerce_5x__extend__events.md).

Read about [dynamically changing line item prices  (opens new window)](https://craftcms.com/knowledge-base/dynamically-customizing-line-item-prices) in the Knowledge Base.

## [#](#querying-prices)Querying Prices

Price data is always returned when executing [variant queries](commerce_5x__system__products-variants.md#querying-variants). You can order any query by price, like this:

```
{# Fetch variants featured in a given article: #}
{% set variants = craft.variants()
  .relatedTo({
    sourceElement: entry,
  })
  .orderBy('price DESC')
  .all() %}
```

Substitute `promotionalPrice` or `salePrice` to explicitly order by those resolved values.

In general, `salePrice` will produce the most reliable and useful sorting. When using `promotionalPrice`, variants with no base promotional price defined will sort based on your database’s handling of `null` values, and may require an additional criteria like `['promotionalPrice IS NOT NULL', 'promotionalPrice DESC']` or `promotionalPrice DESC NULLS LAST` to ensure they appear at the end (or beginning) of the results.

Variants can also be filtered by price, using values compatible with [craft\helpers\Db::parseNumericParam()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-db.html#method-parsenumericparam):

```
{% set dollarOrLess = craft.variants()
  .price('<= 1')
  .all() %}
```

To return variants with effective promotional pricing (a promotional price less than its base price), use the `.onPromotion()` query param:

```
{% set saleItems = craft.variants()
  .onPromotion(true)
  .all() %}
```

See our [Listing Products On Sale  (opens new window)](https://craftcms.com/knowledge-base/listing-products-on-sale) article for some examples of advanced price-based queries.

This behavior approximates variants’ `.getOnPromotion()` method, but performs the comparisons directly in the database (rather than loading every variant and comparing them in memory)!

It is currently only possible to directly sort and filter *products* by their default variant’s price—but you can always use the [`hasVariant` param](commerce_5x__system__products-variants.md#product-hasvariant) to build more sophisticated variant-based criteria.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/system/pricing-rules.md)
