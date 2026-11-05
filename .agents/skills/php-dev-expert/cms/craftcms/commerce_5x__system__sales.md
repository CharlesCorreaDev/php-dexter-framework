# Sales | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/sales

---

# Sales

- ### On this Page

  - [Matching Items](commerce_5x__system__sales.md#matching-items)
  - [Conditions](commerce_5x__system__sales.md#conditions)
  - [Actions](commerce_5x__system__sales.md#actions)
  - [Templating](commerce_5x__system__sales.md#templating)

New projects should use the more flexible [pricing rules engine](commerce_5x__system__pricing-rules.md). Sales are only available to stores upgraded from Commerce 4.

Use of sales also disables some [multi-store](commerce_5x__system__stores.md) functionality.

Sales allow a store manager with *Manage promotions* permission to set up conditions for dynamic, promotional product discounts.

A sale is different from a [discount](commerce_5x__system__discounts.md) because it’s applied *before* an item is added to the cart. A discount needs a cart—it’s applied when an item’s in the cart or to the cart as a whole (like a coupon code).

Items in your store are typically listed by their *sale price*. If no sales apply to a purchasable, its sale price would simply equal its regular price.

Sales are ordered in the control panel, and the system always runs through each sale in order when determining the `salePrice` of the purchasable.

## [#](#matching-items)Matching Items

Controls that determine what purchasables match a sale are identical to those for [discounts](commerce_5x__system__discounts.md).

[Discount Matching Rules
→

Learn about matching behaviors shared between sales and discounts.](commerce_5x__system__discounts.md#discount-matching-items)

## [#](#conditions)Conditions

When creating a sale, you can set a number of conditions to be evaluated when determining if the sale should be applied to the purchasable. All conditions must match to have the sale applied. Leaving a condition empty ignores that condition.

Only *promotable* purchasables will match discount and sale conditions. The **Promotable** setting on each variant must be *on* for it to be eligible.

### [#](#start-date)Start date

When the sale can start to be applied to matching products.

### [#](#end-date)End date

When the sale stops being applied to matching products.

### [#](#user-group)User Group

Whether the cart’s customer belongs to one of the matching user groups.

### [#](#other-purchasables)Other Purchasables

Any other custom purchasable a third party system adds to Commerce can show up here as a condition.

## [#](#actions)Actions

If the conditions match the current context (variant, user, cart date, etc.), then the actions are applied to the purchasable.

### [#](#price-effect)Price Effect

There are four ways to apply a price effect:

#### [#](#reduce-the-price-by-a-percentage-of-the-original-price)Reduce the price by a percentage of the original price

Enter a percentage amount to take off the price of the purchasable.

Example: for a $100 purchasable, setting this value to 80% would make the purchasable’s sale price $20.

#### [#](#set-the-price-to-a-percentage-of-the-original-price)Set the price to a percentage of the original price

Enter a percentage amount to become the price of the purchasable.

Example: for a $100 purchasable, setting this value to 20% would make the purchasable’s sale price $20.

#### [#](#reduce-the-price-by-a-flat-amount)Reduce the price by a flat amount

Enter an flat currency amount to take off the purchasable’s price.

Example: for a $100 purchasable, setting this value to $20 would make the purchasable’s sale price $80.

#### [#](#set-the-price-to-a-flat-amount)Set the price to a flat amount

Enter an flat currency amount to determine the sale price of the purchasable.

Example: for a $100 purchasable, setting this value to $20 would make the purchasable’s sale price $20.

### [#](#sale-application)Sale Application

There are additional options for how the sale is applied to the product:

#### [#](#ignore-previous-matching-sales-if-this-sale-matches-checkbox)Ignore previous matching sales if this sale matches. (Checkbox)

This setting will disregard any previous sale that affected the price of the item matched in this sale.

For example, `Sale 1` reduced the price by 10%. Checking this box within `Sale 2` will apply its effect on the original price of the purchasable, ignoring the 10% off.

This is automatically true if either of the following pricing effects are used:

- Set the price to a percentage of the original price
- Set the price to a flat amount

This setting is related to the purchasable being affected.

#### [#](#do-not-apply-subsequent-matching-sales-beyond-applying-this-sale-checkbox)Do not apply subsequent matching sales beyond applying this sale. (Checkbox)

After this sale matches the order, do not apply any other sales, based on the order of sales in the control panel.

This is a sale-level option, not a purchasable-level option like the above `Ignore previous matching sales if this sale matches.`

## [#](#templating)Templating

### [#](#craft-commerce-sales-allsales)craft.commerce.sales.allSales

Returns an array of all sales set up in the system, each represented as a [Sale  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-sale.html) model.

```
{% for sale in craft.commerce.sales.allSales %}
  {{ sale.name }} - {{ sale.description }}
{% endfor %}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/system/sales.md)
