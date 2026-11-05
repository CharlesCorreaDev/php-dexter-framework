# Listing Products on Sale | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/listing-products-on-sale

---

Search Knowledge Base

# Listing Products on Sale

![](https://craftcms.com/dist/images/icon-tip.svg)

[Sales](https://craftcms.com/docs/commerce/5.x/system/sales.html) have been deprecated in Commerce 5, and are only available to upgraded projects. New projects will configure pricing via [catalog pricing rules](https://craftcms.com/docs/commerce/5.x/system/pricing-rules.html). An [updated example](#using-catalog-pricing) appears at the end of the article!

A common need for an online store is to list all products that are on sale.

A Craft Commerce [sale](https://craftcms.com/docs/commerce/5.x/system/sales.html#conditions) affects the pricing of a [product’s variants](https://craftcms.com/docs/commerce/5.x/system/products-variants.html). To list products on sale, we can use an [element query](https://craftcms.com/docs/5.x/development/element-queries.html) to find all products with variants that are on sale:

```
{% set saleProducts = craft.products()
  .hasVariant({
    hasSales: true,
  })
  .all() %}
```

Sales only apply to purchasables (or *variants* in this case). Even if a sale is configured to match based on a product condition, it’s still the variants that it affects. As such, we have to use the [hasVariant()](https://craftcms.com/docs/commerce/5.x/system/products-variants.html#product-hasvariant) method to discover those variants (with `hasSales`), then restrict the outer product query to only those that own a matching variant.

The equivalent GraphQL query would look like this:

```
{
  saleProducts: products(hasVariant: { hasSales: true }) {
    title
    url
  }
}
```

We could then list those in one place by looping through them:

```
<h2>Products on Sale</h2>

{% for product in saleProducts %}
  <a href="{{ product.url }}">
    <h3>{{ product.title }}</h3>
  </a>
{% endfor %}
```

This is a simple example, but you could further tailor your query using product and/or variant query parameters to get a list of exactly the products you need.

For example, to list products with on-sale variants that are also in stock, you would use the [hasStock](https://craftcms.com/docs/commerce/5.x/system/products-variants.html#variant-hasstock) property in the variant query to achieve this:

```
{% set saleProducts = craft.products()
  .hasVariant({
    hasSales: true,
    hasStock: true,
  })
  .all() %}
```

```
{
  saleProducts: products(hasVariant: { hasSales: true, hasStock: true }) {
    title
    url
  }
}
```

Similarly, the outer product query can be honed—say, to discover all products *within a specific category* that are on-sale and in-stock:

```
{% set saleProducts = craft.products()
  .relatedTo(category)
  .hasVariant({
    hasSales: true,
    hasStock: true,
  })
  .all() %}
```

## Using Catalog Pricing [#](#using-catalog-pricing "Direct link to Using Catalog Pricing")

The strategy differs in the new [catalog pricing](https://craftcms.com/docs/commerce/5.x/system/pricing-rules.html) system, because there are multiple sources for [pricing information](https://craftcms.com/docs/commerce/5.x/system/products-variants.html#prices), and multiple ways to compare them that might fit different definitions of being “on sale.” A similar conundrum exists with the legacy sales system: a variant would still be considered “on sale” even if a matching promotion didn’t *actually* discount the price!

[Commerce 5.2.0](https://github.com/craftcms/commerce/releases/tag/5.2.0) introduced a method equivalent with the [effective promotional pricing](#effective-promotional-pricing) example, below. This will limit the results to variants with a promotional price less than their base price:

```
{% set hasPromotionalPrice = craft.variants()
  .onPromotion(true)
  .all() %}
```

The source of that promotional price is not taken into consideration—it could be present directly on the variant, or come from a pricing rule.

![](https://craftcms.com/dist/images/icon-tip.svg)

The rest of this section makes use of an advanced query feature called *expressions* that allows you to do custom comparisons and arithmetic within each row of the database (and perhaps more importantly, across tables), rather than against fixed values.

### Effective Promotional Pricing [#](#effective-promotional-pricing "Direct link to Effective Promotional Pricing")

The most common conceptualization of a “sale” is a relationship between the *effective price* and *effective promotional price*, after all catalog pricing rules have been considered:

```
{% set variantQuery = craft.variants()
  .andWhere(expression('promotionalPrice < price')) %}

{% set productsOnPromotion = craft.products()
  .hasVariant(variantQuery)
  .all() %}
```

Internally, variant queries flattens (or “aggregates”) all the catalog prices into a single price and promotional price. We're asking the database to then compare those to one another, and return the variant only when the promotional price is less than the price.

### Base Prices [#](#base-prices "Direct link to Base Prices")

To find variants with a *base promotional price* less than their *base price* (a kind of perennial “sale” wherein an MSRP is displayed but the customer’s price is always less), you would use an expression like this:

```
{% set variantQuery = craft.variants()
  .andWhere(expression('basePromotionalPrice < basePrice')) %}

{% set productsOnPromotion = craft.products()
  .hasVariant(variantQuery)
  .all() %}
```

This query **does not** respect any catalog pricing rules! It only looks at the variant’s *base* prices, which are set explicitly in the control panel.

### By Percentage Off [#](#by-percentage-off "Direct link to By Percentage Off")

In addition to using expressions for comparisons, we can perform arithmetic on prices to get even more fine-grained information about pricing. This example calculates the “percentage off” for each variant and returns only those with a promotional price half or less than their regular price.

```
{% set reallyGoodDeals = craft.variants()
  .andWhere(expression('(1 - (promotionalPrice / price)) > :off', { off: 0.5 }))
  .all() %}
```

You can adjust this to use the *base* price by replacing only `price`:

```
{% set reallyGoodDeals = craft.variants()
  .andWhere(expression('(1 - (promotionalPrice / basePrice)) > :off', { off: 0.5 }))
  .all() %}
```

## Further Reading [#](#further-reading "Direct link to Further Reading")

- [Querying Products](https://craftcms.com/docs/commerce/5.x/system/products-variants.html#querying-products)
- [Querying Variants](https://craftcms.com/docs/commerce/5.x/system/products-variants.html#querying-variants)

Applies to
Craft CMS 5, Craft CMS 4, Craft CMS 3, Craft Commerce 5, Craft Commerce 4, and Craft Commerce 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
