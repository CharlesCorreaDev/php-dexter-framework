# Guides: Commerce | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/commerce

---

Search Knowledge Base

# Commerce Articles

- [Custom Commerce Checkout Flow with Stripe

  Commerce’s checkout experience can be tailored to meet the specific needs of your storefront. In this article, we’ll cover a basic custom checkout implementation using our first-party Stripe gateway and Stripe’s Payment Elements product.](https://craftcms.com/knowledge-base/custom-stripe-commerce-checkout "Custom Commerce Checkout Flow with Stripe")
- [Removing Commerce Address Validation

  In Commerce 4, address storage and validation was moved into Craft itself. While this provides a globally-aware address solution that is consistent across the Craft ecosystem, it’s a behavioral departure that some Commerce projects may not want—the new address system may enforce additional validation, on top of whatever custom rules a developer may have configured.](https://craftcms.com/knowledge-base/removing-commerce-address-validation "Removing Commerce Address Validation")
- [Dynamically Customizing Line Item Prices

  Craft Commerce provides a number of ways to customize prices for your customers:
  Manage discrete base and promotional pricing for every variant;
  Generate catalog pricing from complex product and customer criteria;
  Promote products via sales (only available in projects upgraded from Commerce 4.x or earlier);
  Offer discounts via coupon codes or based on cart contents;
  In addition to built-in pricing features, you have complete programmatic control over the final price a customer sees (and pays), via Commerce’s events system.](https://craftcms.com/knowledge-base/dynamically-customizing-line-item-prices "Dynamically Customizing Line Item Prices")
- [Manually Sorting Commerce Products

  Craft Commerce adds the powerful product element type, bearing many similarities to the native entry. One way they differ, however, is that products cannot be managed in a manually-sorted, hierarchical structure.
  You can, however, create a custom field that allows store managers to hand-sort products.
  Add a Commerce Products field to a Global Set
  1. Create a Commerce Products field.
  Navigate to Settings → Fields and press New field to create a new field, selecting Commerce Products for its Field Type.
  The name, handle, and sources can be whatever you’d like, just remember the handle (orderedProducts, in the screenshot below) because we’ll need it again in a moment.
  When you’re finished, press Save.](https://craftcms.com/knowledge-base/manually-sorting-commerce-products "Manually Sorting Commerce Products")
- [Listing Products on Sale

  A common need for an online store is to list all products that are on sale.
  A Craft Commerce sale affects the pricing of a product’s variants. To list products on sale, we can use an element query to find all products with variants that are on sale:
  `twig
  {% set saleProducts = craft.products()
  .hasVariant({
  hasSales: true,
  })
  .all() %}
  `
  Sales only apply to purchasables (or variants in this case). Even if a sale is configured to match based on a product condition, it’s still the variants that it affects. As such, we have to use the hasVariant() method to discover those variants (with hasSales), then restrict the outer product query to only those that own a matching variant.
  The equivalent GraphQL query would look like this:
  `graphql
  {
  saleProducts: products(hasVariant: { hasSales: true }) {
  title
  url
  }
  }
  `
  We could then list those in one place by looping through them:
  `twig
  Products on Sale
  {% for product in saleProducts %}
  <h3>{{ product.title }}</h3>
  {% endfor %}
  `
  This is a simple example, but you could further tailor your query using product and/or variant query parameters to get a list of exactly the products you need.
  For example, to list products with on-sale variants that are also in stock, you would use the hasStock property in the variant query to achieve this:
  `twig
  {% set saleProducts = craft.products()
  .hasVariant({
  hasSales: true,
  hasStock: true,
  })
  .all() %}
  `
  `graphql
  {
  saleProducts: products(hasVariant: { hasSales: true, hasStock: true }) {
  title
  url
  }
  }
  `
  Similarly, the outer product query can be honed—say, to discover all products within a specific category that are on-sale and in-stock:
  `twig
  {% set saleProducts = craft.products()
  .relatedTo(category)
  .hasVariant({
  hasSales: true,
  hasStock: true,
  })
  .all() %}
  `
  Using Catalog Pricing
  The strategy differs in the new catalog pricing system, because there are multiple sources for pricing information, and multiple ways to compare them that might fit different definitions of being “on sale.” A similar conundrum exists with the legacy sales system: a variant would still be considered “on sale” even if a matching promotion didn’t actually discount the price!
  Commerce 5.2.0 introduced a method equivalent with the effective promotional pricing example, below. This will limit the results to variants with a promotional price less than their base price:
  `twig
  {% set hasPromotionalPrice = craft.variants()
  .onPromotion(true)
  .all() %}
  `
  The source of that promotional price is not taken into consideration—it could be present directly on the variant, or come from a pricing rule.](https://craftcms.com/knowledge-base/listing-products-on-sale "Listing Products on Sale")
- [Populating MySQL and MariaDB Timezone Tables

  Craft Commerce calculates some statistics that rely on the database engine’s native timezone conversion for optimal performance. While this should work by default with any PostgreSQL database, some MariaDB and MySQL users may need to populate the engine’s timezone tables.](https://craftcms.com/knowledge-base/populating-mysql-mariadb-timezone-tables "Populating MySQL and MariaDB Timezone Tables")
- [Running Multiple Craft Sites with Craft Commerce

  Craft Commerce 5.x comes with a brand new multi-store feature to complement Craft’s native multi-site architecture.
  Stores are configured independently—and then attached to—one or more sites (each site having one store). Your product content is still managed per-site (so it can be localized for each audience), but some core properties like prices, dimensions, and SKUs are defined for each store, or globally.
  In addition to connecting each site to a store, stores support multiple currencies. When you create a store, you select a primary currency; store managers can then enable additional currencies for customers to select while shopping (and to use at checkout).
  Limitations
  Commerce is currently limited to five distinct stores and five inventory locations, but has no restrictions on the number of sites those stores are connected to. There are no limits on the number of product types, SKUs, orders, stock, revenue, customers, and so on.
  Start building your storefront with Commerce by checking out the documentation, or read more about its key features!](https://craftcms.com/knowledge-base/commerce-multiple-sites "Running Multiple Craft Sites with Craft Commerce")
- [Downloading Previous Commerce Versions

  Commerce 3+
  Specific versions of Commerce can be installed by altering the version constraint for craftcms/commerce in your project’s composer.json. Run composer update to resolve, lock, and install the dependencies. Keep in mind that you may also need to change the root Craft version to maintain compatibility!
  Do not manually modify files in your project’s vendor/ directory. They will be wiped out the next time composer install is run.
  Commerce 1 and 2
  You can download previous Commerce versions directly from the Github repository’s tags page. Version numbers can be found in the sidebar on Packagist and used in this pseudo-template to download a ZIP archive:
  https://github.com/craftcms/commerce/archive/refs/tags/{version}.zip
  Note that downloading Commerce releases directly still binds you to its license agreement.](https://craftcms.com/knowledge-base/downloading-previous-commerce-versions "Downloading Previous Commerce Versions")

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
