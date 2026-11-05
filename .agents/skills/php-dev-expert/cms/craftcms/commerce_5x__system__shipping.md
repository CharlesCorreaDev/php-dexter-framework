# Shipping | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/shipping

---

# Shipping

- ### On this Page

  - [Shipping Categories](commerce_5x__system__shipping.md#shipping-categories)
  - [Shipping Zones](commerce_5x__system__shipping.md#shipping-zones)
  - [Shipping Methods](commerce_5x__system__shipping.md#shipping-methods)
  - [Shipping Rules](commerce_5x__system__shipping.md#shipping-rules)
  - [Shipping Rule Costs](commerce_5x__system__shipping.md#shipping-rule-costs)
  - [Configuration Examples](commerce_5x__system__shipping.md#configuration-examples)
  - [Templating](commerce_5x__system__shipping.md#templating)

Craft Commerce includes a shipping system for adding shipping costs to a cart.

You can add any number of [shipping methods](#shipping-methods) to your store, where each one’s purpose is to supply relevant *shipping options* for an order at checkout.

The shipping method determines relevant options with its [shipping rules](#shipping-rules) and the store’s [shipping categories](#shipping-categories) and [shipping zones](#shipping-zones) configured in the control panel.

A store manager can see and manage these shipping details via **Commerce** → **Shipping** in the control panel.

Let’s look at each of these factors, starting with the broader shipping categories and zones.

## [#](#shipping-categories)Shipping Categories

Shipping categories are used to classify products according to how they’re shipped. At least one shipping category is required, but you can use any number of them.

In the control panel, you’ll see the relationship between products and shipping categories in several places:

1. When creating or editing a shipping category from **Commerce** → **Shipping** → **Shipping Categories**, an **Available to Product Types** field lets store managers select the product types the category should be available to.
2. When creating or editing a [product type](commerce_5x__system__products-variants.md#product-types), you’ll have a read-only view of the shipping categories available to it in the **Tax & Shipping** tab.
3. When editing an individual product, the default shipping category will be selected in a dropdown along with any other categories available for that product type.

While setting up [shipping rules](#shipping-rules), the available shipping categories can factor into the rule’s conditions and costs.

For example, you might set up a shipping rule that’s unavailable when the cart has a product in a specific shipping category. You might have another shipping rule that returns special shipping prices for different categories of products in the cart.

## [#](#shipping-zones)Shipping Zones

Shipping zones are geographical areas your store ships to, as defined by a flexible **Address Condition** setting. The setting can be composed of one or more rules based on countries, states (called administrative areas), postal code formula, and even custom fields:

![Screenshot of a new shipping zone screen with Name, Description, and Address Condition fields](/docs/assets/img/create-shipping-zone.2ecfde18.png)

For example, you might make one zone for the USA and Canada, and another zone for the international countries you ship to:

1. For **Address Condition**, click **+ Add a rule**.
2. Click the default “Administrative Area” rule and select “Country” instead.
3. Leave “is one of” selected, and type+select “United States” and “Canada” in the typeahead input field.
4. Press **Save**.

Like shipping categories, these tax zones can factor into [shipping rule](#shipping-rules) conditions and costs. Shipping zones can be used for conditions that apply to the customer’s shipping address.

### [#](#postal-code-formula)Postal Code Formula

In addition to country and state matching, an address can match a postal code condition formula.

The “Postal Code Formula” address condition is an expression written in [Twig’s expression syntax  (opens new window)](https://twig.symfony.com/doc/3.x/templates.html#expressions) that returns `true` or `false`.

This will match if the postal code’s first two characters are `60` or `70`:

```
postalCode[0:2] == '60' or postalCode[0:2] == '70'
```

The will match if the zip code is equal to `NG102`, `ZZ200`, or `CC101`:

```
postalCode in ['NG102', 'ZZ200', 'CC101']
```

## [#](#shipping-methods)Shipping Methods

Shipping methods are the choices available to the customer during checkout. You can name them in whatever way will make sense to your customers: *In-Store Pickup*, *FedEx*, *USPS*, *Freight*, and *Express* are all succinct ways to describe the general method by which the customer will get their order.

Shipping methods contain a collection of [shipping rules](#shipping-rules), which contribute eligibility conditions and determine the actual costs.

Additionally, **Match Order** and **Match Customer**  [5.4.0+](https://github.com/craftcms/commerce/blob/5.4.0/CHANGELOG.md "Customer conditions for shipping methods was first available in version 5.4.0 of Commerce.") conditions can be set on the method itself to consolidate some rules.

If a customer changes their shipping address during checkout, a previously selected shipping method may no longer match and will be immediately removed as the shipping method set on the cart.

## [#](#shipping-rules)Shipping Rules

Shipping rules belong to a shipping method and may be edited in that shipping method’s **Rules** tab after it’s first saved. Each rule is checked one by one, in order, against the cart (and the customer  [5.4.0+](https://github.com/craftcms/commerce/blob/5.4.0/CHANGELOG.md "Customer conditions for shipping methods was first available in version 5.4.0 of Commerce.")) to see if it’s a match. The first rule that matches the cart supplies the pricing to the shipping method. If no rules match the cart, that shipping method is not available for the customer to select.

### [#](#conditions)Conditions

Each rule uses **Match Order** and **Match Customer**  [5.4.0+](https://github.com/craftcms/commerce/blob/5.4.0/CHANGELOG.md "Customer conditions for shipping rules was first available in version 5.4.0 of Commerce.") conditions to determine when a shipping rule is used.

![A new shipping method rule, with no conditions defined.](/docs/assets/img/shipping-rule-conditions.8bdc746c.png)

If a [shipping method](#shipping-methods) doesn’t include any conditions, each of its rules will be checked.

### [#](#shipping-zone)Shipping Zone

In earlier version of Commerce, each rule could be connected to a single **Shipping Zone**. This setting was migrated during the upgrade to a **Shipping Address Zone** order condition; you may now select any number of zones that the shipping address must be part of (or not part of).

### [#](#order-condition-formula)Order Condition Formula

For advanced conditions, you may provide a Twig expression via the **Order Condition Formula** field. Whenever possible, we recommend using the dedicated condition builder UIs.

The condition formula has access to an `order` variable, which (for safety) is an array and not the order element—it’s the same representation of the order you’d see if you exported it from the order index page. This data-only format prevents a store manager from accidentally calling methods like `order.markAsComplete()`.

The condition formula’s `order` array is generated with:

```
$order->toArray(
    [], ['lineItems.snapshot', 'shippingAddress', 'billingAddress']
);
```

### [#](#shipping-categories-2)Shipping Categories

The shipping rule has matching logic for each shipping category in the system. Your selection describes whether the rule **Allow**s, **Disallow**s, or **Require**s products of the category to be in the cart:

1. **Allow** (Default): The rule *may* match carts with products in this category.
2. **Disallow**: The rule will *not* match carts that contain products in this category.
3. **Require**: The rule will *only* match if the cart contains products in this category.

Category policies ensure that the available methods and costs accurately reflect the combined needs of the ordered products. For example, if you sell products with lithium batteries, many carriers require disclosures, insurance, special packaging, or other documentation that often increases costs. By setting up a shipping category for potentially-hazardous materials, you can easily exclude other unsuitable methods.

## [#](#shipping-rule-costs)Shipping Rule Costs

![A new shipping method rule.](/docs/assets/img/shipping-rule-costs.40c607a0.png)

When a shipping rule matches an order, *all* of its costs are tabulated, then constrained by its [minimum](#minimum-total-shipping-cost) and [maximum](#maximum-total-shipping-cost) cost.

### [#](#base-rate)Base Rate

Set a base shipping rate for the order as a whole.

### [#](#minimum-total-shipping-cost)Minimum Total Shipping Cost

Enforce a minimum shipping cost that the rule can apply (after adding up the base rate plus all item-level rates).
When required, this is applied as a *positive* adjustment.

### [#](#maximum-total-shipping-cost)Maximum Total Shipping Cost

Limit the shipping cost the rule can apply (after adding up the base rate plus all item-level rates).
When required, this is applied as a *negative* adjustment.

### [#](#item-rates)Item Rates

#### [#](#per-item-rate)Per Item Rate

Set a base shipping cost per item.
This might also be called a *quantity* rate.

#### [#](#weight-rate)Weight Rate

Default cost per whole unit of the store’s dimension units. For example, if you set your dimension unit option to Kilograms, your product weight is 1.4Kg, and you enter `1` as the “Weight Rate”, then the price will be $1.40.

#### [#](#percentage-rate)Percentage Rate

The default amount based on a percentage of item’s price.

#### [#](#category-rate-overrides)Category Rate Overrides

You can further customize the **Per Item**, **Weight**, and **Percentage** rates for each [shipping category](#shipping-categories).

## [#](#configuration-examples)Configuration Examples

There are lots of ways you might combine the included shipping rules depending on what matters most for your store.

- **Regional Sales** — Some stores may sell relatively uniform items, but ship to many well-defined **areas** using local couriers’ flat-rate services. In this case, the shipping configuration will depend heavily on shipping zones to ensure customers see only methods that are actually available in their region.
- **Diverse Catalog** — Another store may have huge **variety in product types** that require radically different types of shipping and handling. This store’s shipping configuration will likely lean on shipping categories to narrow options, and use weight- or quantity-based rules to calculate costs.
- **Speed** — Customers often want options when it comes to shipping speed and cost. This store may wish to advertise services from many carriers, while ensuring the total order weight doesn’t exceed the carrier’s limits.

It’s best to identify aspects of the store’s shipping is most complex or specific, and plan around that concern with whatever features support it.

## [#](#templating)Templating

### [#](#displaying-the-available-shipping-methods)Displaying the Available Shipping Methods

You can offer customers a choice between shipping methods.
Only shipping methods whose rules (and store) match the current cart will be returned.

```
<h3>Select a shipping method</h3>

{% for handle, method in cart.availableShippingMethodOptions %}
  {% set formattedPrice = method.priceForOrder(cart)|currency(cart.currency) %}

  <label>
    {{ input('radio', 'shippingMethodHandle', handle, {
      checked: handle == cart.shippingMethodHandle,
    }) }}
    <strong>{{ method.name }}</strong> {{ formattedPrice }}
  </label>
{% endfor %}
```

Customers select an eligible shipping *method*, not a *rule*.

The shipping method’s handle is stored on the cart (or order) element, and is used to load and display information about the method:

```
{% set shippingMethod = craft.commerce.shippingMethods.getShippingMethodByHandle(cart.shippingMethodHandle) %}

Your order will be shipped via {{ shippingMethod.name }} to:
<address>
{{ cart.shippingAddress|address }}
</address>
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/system/shipping.md)
