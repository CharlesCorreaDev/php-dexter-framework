# Stores | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/stores

---

# Stores

- ### On this Page

  - [Mapping Sites to Stores](commerce_5x__system__stores.md#mapping-sites-to-stores)
  - [Settings](commerce_5x__system__stores.md#settings)
  - [Location](commerce_5x__system__stores.md#location)
  - [Markets](commerce_5x__system__stores.md#markets)

Commerce supports multiple stores, each of which is connected to one or more [sites](https://craftcms.com/docs/5.x/system/sites) in Craft. A site can only have one store, but a single store can serve multiple sites.

Projects upgraded from earlier versions of Commerce will have a single store set up, during the migration.

Stores’ base [configuration](#settings) lives in [project config](https://craftcms.com/docs/5.x/system/project-config), but many of the day-to-day managerial functions are available to any control panel user with the appropriate [permissions](commerce_5x__reference__permissions.md).

## [#](#mapping-sites-to-stores)Mapping Sites to Stores

Commerce assumes you have already configured [sites and site groups](https://craftcms.com/docs/5.x/system/sites) so that routing and locales make sense for site visitors.

[Products and variants](commerce_5x__system__products-variants.md) are still edited in the context of a *site*, so translation and propagation settings on [custom fields](https://craftcms.com/docs/5.x/system/fields) work the same as any other multi-site element.

The availability of some options (like tax and shipping categories) depend on which site you are editing a product or variant in, and selections will be consistent across any other sites that use that store. A variant’s pricing is also determined per-store—but its inventory is tracked per [location](commerce_5x__system__inventory.md).

### [#](#creating-a-store)Creating a Store

Your first store will be created automatically when you install Commerce. To create another store, visit

1. Commerce→
2. System Settings→
3. Stores

and select **+ New store**.

If you don’t see a **+New Store** button, your project may not satisfy one of the requirements:

- You can only configure as many *stores* as you have *sites*. Commerce does not support “detached” stores.
- Upgraded projects that still use the [sales](commerce_5x__system__sales.md) system are not eligible for multi-store functionality. Convert your sales into [pricing rules](commerce_5x__system__pricing-rules.md) to create additional stores.
- Commerce Pro supports a maximum of *five* stores, but those stores can be associated with any number of sites.

### [#](#primary-store)Primary Store

One store can be designated the *primary* store. Creating a new site adds it to the primary store, by default.

To change the primary store, visit a non-primary store’s edit screen in

1. Commerce→
2. System Settings→
3. Stores

, then tick **Make this the primary store**. Changing the primary store does *not* reassign sites to it that used the previous primary store.

### [#](#templates)Templates

In Twig, you can access stores in a few different ways:

1. Use the [global `currentStore` variable](commerce_5x__reference__twig.md#currentstore) to get a reference to the store configured for the current site:

   ```
   {{ currentStore.name }}
   ```
2. Use the current site’s `store` attribute (Commerce makes this available via a [behavior](https://craftcms.com/docs/5.x/extend/behaviors)):

   ```
   {{ currentSite.name }} — {{ currentSite.store.name }}
   ```
3. Use the `stores` service to get a specific store by handle:

   ```
   {# Get the current store: #}
   {{ craft.commerce.stores.currentStore }}

   {# Get a specific store: #}
   {{ craft.commerce.stores.getStoreByHandle('na') }}
   ```

## [#](#settings)Settings

Stores maintain their own settings, but those settings can be kept in sync via [environment variables](https://craftcms.com/docs/5.x/configure#env).

The configured stores also impact how you manage many other aspects of your ecommerce platform, including [locations](commerce_5x__system__inventory.md), [markets](#markets), [currencies](commerce_5x__system__currencies.md), [pricing rules](commerce_5x__system__pricing-rules.md), [shipping](commerce_5x__system__shipping.md), and [tax](commerce_5x__system__tax.md). Most features in the

1. Commerce→
2. Store Management

section are handled on a per-store basis—look for the store switcher menu at the top of each screen!

Auto Set New Cart Addresses
:   Set logged-in customers’ primary billing and shipping addresses on new carts.

Auto Set Cart Shipping Method Option
:   Set the first-available shipping method on carts.

Auto Set Payment Source
:   Set the user’s primary [payment source](commerce_5x__development__saving-payment-sources.md) on new carts.

Allow Empty Cart On Checkout
:   Allow customers to check out with no items in their cart.

Allow Checkout Without Payment
:   Allow customers to submit orders without payment.

Allow Partial Payment On Checkout
:   Allow customers to submit partially-paid orders.

Free Order Payment Strategy
:   Force orders with a zero (or negative) total to use a gateway, or bypass payment and complete the order, directly.

Minimum Total Price Strategy
:   Allow negative-total orders, or lock the minimum total to zero or the cost of [shipping](commerce_5x__system__shipping.md).

Require Shipping Address At Checkout
:   Allow customers to check out without a shipping address.

Require Billing Address At Checkout
:   Allow customers to check out without a billing address.

Require Shipping Method Selection At Checkout
:   Make a shipping method mandatory, even if items in the order don’t require shipping (or the shipping total would be zero). *If your shipping methods and rules are not configured carefully, this can result in customers getting stuck at checkout.*

Use Billing Address For Tax
:   By default, Commerce uses the *shipping* address for calculating tax (via the built-in tax engine, or a plugin). Enable this to use the *billing* address, instead.

Order Reference Number Format
:   Each store can have its own reference format. If you use the same template between stores (or the template comes from an environment variable), make sure it contains at least one value that guarantees uniqueness across all stores. For example, `ACME-{{ seq("order-counter-#{order.storeId}", 8) }}-{{ now|date('Y') }}` *looks* like it would be unique, but the first order in each store would result in the same reference: `ACME-00000001-2024`. Moving the `{storeId}` into the actual template (rather than the sequence key) can help avoid this.

## [#](#location)Location

Each store has an [address](commerce_5x__system__addresses.md) that represents its physical location. Commerce doesn’t use this, internally, but it can be accessed via Twig in your templates, [emails](commerce_5x__system__emails.md), and [PDFs](commerce_5x__system__pdfs.md):

```
{% set store = order.store %}
{{ store.settings.locationAddress|address }}
```

This address may also be used by plugins to calculate shipping or provide tax estimates.

A store’s location is strictly informational—the [inventory](commerce_5x__system__inventory.md) system tracks each location’s address, independently!

## [#](#markets)Markets

Markets define which countries a store accepts orders from.
You can whitelist countries here, or use the **Order Address Condition** section to configure advanced rules.

Orders can only be placed when both the billing *and* shipping addresses are within the selected markets (when provided).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/system/stores.md)
