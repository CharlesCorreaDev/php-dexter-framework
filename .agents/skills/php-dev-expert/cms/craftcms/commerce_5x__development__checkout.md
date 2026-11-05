# Checkout | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/development/checkout

---

# Checkout

- ### On this Page

  - [Flow](commerce_5x__development__checkout.md#flow)
  - [Collecting Addresses](commerce_5x__development__checkout.md#collecting-addresses)
  - [Estimating Costs](commerce_5x__development__checkout.md#estimating-costs)
  - [Selecting a Shipping Method](commerce_5x__development__checkout.md#selecting-a-shipping-method)
  - [Registration](commerce_5x__development__checkout.md#registration)
  - [Making Payments](commerce_5x__development__checkout.md#making-payments)
  - [Confirmation](commerce_5x__development__checkout.md#confirmation)

Commerce is designed to support virtually any kind of checkout experience your storefront requires.

The next few pages assume you have already implemented basic product discovery and [cart management](commerce_5x__development__cart.md) features.

## [#](#flow)Flow

Checkout can be consolidated into as few steps (or split into as many) as you need.
The primary design constraint for multi-step checkout is dependent data:

- Choosing a shipping method usually requires a shipping address. If your store does not sell physical goods or has only a single shipping method with no address conditions, you can ignore this (or allow Commerce to auto-set that method on the cart).
- Choosing a payment gateway *often* requires a billing address. If your store only uses one front-end payment gateway, you can ignore this (and present that gateway’s form at checkout).
- Discounts that require a code to use must be applied before payment so that the final total is known.

A few [store settings](commerce_5x__system__stores.md#settings) can also impact what data you need to collect:

- **Require Shipping Address At Checkout** and **Require Billing Address At Checkout** ensure carts have each kind of address before payment or completion is allowed.
- **Require Shipping Method Selection At Checkout** guarantees that the customer has selected a valid shipping method (but may result in some customers being unable to check out at all, say, due to restrictions on shipping zones).
- **Allow Checkout Without Payment** and **Allow Partial Payment On Checkout** can be used to generate invoices and estimates, or other special handling. Administrators can later use the *Manual* gateway to record offline payments.
- **Allow Empty Cart On Checkout** is generally not advisable, except when customers need to open an order that will be modified by an administrator, later. You can still collect custom field data on an empty cart.
- Returning customers may appreciate the convenience of **Auto Set New Cart Addresses** and **Auto Set Payment Source**, especially for frequent, small orders. These settings have no impact for stores that do not use registration and accounts.
- Stores with a single shipping method should enable **Auto Set Cart Shipping Method Option** and present the shipping price as early as possible. [Discounts](commerce_5x__system__discounts.md) can still modify shipping costs, so you are still able to run shipping promotions.

To complete an order, you’ll have the customer submit a request to the [`payments/pay`](commerce_5x__reference__controller-actions.md#post-payments-pay) action.
Stores that allow zero-total orders or have **Allow Checkout Without Payment** enabled can use the [`cart/complete`](commerce_5x__reference__controller-actions.md#post-cart-complete) action to quickly submit an order.
Either way, “completing” a cart turns it into a [read-only order](commerce_5x__development__orders.md#post-checkout).

### [#](#one-page-checkout)One-Page Checkout

All of Commerce’s controllers support Ajax and return JSON [when requested](https://craftcms.com/docs/5.x/development/forms#ajax), which means everything we’ll discuss here is also applicable to headless and hybrid checkout flows.

Here are a few things to keep in mind as you build out a client-side checkout experience:

- The state of a customer’s cart can always be refreshed from the [`cart/get-cart`](commerce_5x__reference__controller-actions.md#get-cartget-cart) endpoint.
- A complete cart object is returned any time you submit data to [`cart/update-cart`](commerce_5x__reference__controller-actions.md#post-cartupdate-cart). You should always use this as a source of truth so that your front-end is aware of any incidental changes (like [order notices](commerce_5x__system__orders-carts.md#order-notices)).
- Some additional information (like shipping method names) are *not* available in those responses, so you may need to hard-code some strings or provide an initial payload in the template (or via a [custom controller](https://craftcms.com/docs/5.x/extend/controllers)) to build a list of options. When a shipping adjustment is added to the order, it is given a human-readable description, and metadata is set on its `sourceSnapshot`.
- Addresses may require different fields based on their local formatting. Expose *all* possible address fields to ensure you can capture and validate complete addresses.

Each [gateway](commerce_5x__system__gateways.md) you wish to support will require special handling, as well.
Our tutorial for [implementing Stripe payments from scratch  (opens new window)](https://craftcms.com/knowledge-base/custom-stripe-commerce-checkout) describes the process in detail, and applies to most other gateways that use client-side payment method tokenization.

Keep in mind that customers may leave and return to checkout while shopping, or during payment.
It’s important that your one-page application supports resuming at an appropriate step and backtracking for corrections.
Avoid accumulating unsaved data in the browser by submitting it in logical chunks.
This might manifest in a tabbed interface, accordion-style sections, or periodic auto-saves (like the element edit screen in the control panel).

### [#](#routing)Routing

Once you have a general idea of how it will be structured, set up routes for each step.
Here, we’re assuming that there will be separate screens for [customer info](#collecting-addresses), [shipping options](#selecting-a-shipping-method), and [payment](#making-payments):

```
return [
    // ...

    // Cart
    'cart' => ['template' => '_shop/cart'],

    // Checkout
    'checkout/customer' => ['template' => '_shop/checkout/customer'],
    'checkout/shipping' => ['template' => '_shop/checkout/shipping'],
    'checkout/payment' => ['template' => '_shop/checkout/payment'],

    // Confirmation
    'checkout/order-confirmation/<orderNumber:[a-f0-9]{32}>' => ['template' => '_shop/order/receipt'],
];
```

These routes forward to “hidden” templates, but you could use regular publicly-accessible templates for everything except the last parameterized route.
An identifier is required for the confirmation: after checkout, the cart is removed from the user’s session, so we need to be able to look up the completed order.

Learn more about what a [confirmation page](commerce_5x__development__orders.md) can (and should) do.

You can guard each step’s template to ensure customers are in the right place based on the cart’s state.
For example, the `checkout/shipping` page is of no value when the customer has not entered an address:

```
{% set cart = craft.commerce.carts.cart %}

{% if cart.shippingAddressId is empty %}
  {% redirect 'checkout/customer' 301 with notice 'Please enter a shipping address.' %}
{% endif %}

{# ... #}
```

Similarly, you could check that a shipping method is selected before presenting a payment screen:

```
{% set cart = craft.commerce.carts.cart %}

{% if cart.shippingMethodHandle is empty and cart.getAvailableShippingMethodOptions() is not empty %}
  {% redirect 'checkout/shipping' 301 with notice 'You must select a shipping method before paying.' %}
{% endif %}

{# ... #}
```

As noted in the *One-Page Checkout* aside, it’s important to keep customers informed about their progress, and to allow backtracking if they need to make corrections.
You can provide highlighted step links, in the same way you might build another navigation menu:

Nav PartialExample Step

```
{# Define the steps: #}
{% set steps = {
  customer: {
    label: 'Customer',
    path: 'checkout/customer',
  },
  shipping: {
    label: 'Shipping',
    path: 'checkout/shipping',
  },
  payment: {
    label: 'Payment',
    path: 'checkout/payment',
  },
} %}

<nav>
  <ol class="steps">
    {# Output links to each step, highlighting the `active` one: #}
    {% for handle, step in steps %}
      <li class="step {{ handle == active ? 'step--active' : 'step--inactive' }}">
        <a href="{{ siteUrl(step.path) }}">{{ step.label|t }}</a>
      </li>
    {% endfor %}
  </ol>
</nav>
```

```
{% include '_shop/checkout/nav' with { active: 'customer' } %}

{# ... #}
```

In combination with guards on each route, you don’t need to worry about customers jumping ahead—they’ll just get redirected to the correct step.
The `steps` map can be simplified to key-value pairs (paths and labels) and compared against the current request path, to automate the “active” tab selection.

As the customer submits information, use the [`redirectInput()` helper](https://craftcms.com/docs/5.x/reference/twig/functions#redirect) to send them to the next step.
If there is a problem with their submission, Craft sends them back to the path they came from.

Make sure your layout includes [flashes](https://craftcms.com/docs/5.x/development/forms#flashes), or customers will miss out on important error messages.

You can customize success and failure messages with the [`successMessageInput()`](https://craftcms.com/docs/5.x/reference/twig/functions#successmessageinput) and [`failMessageInput()`](https://craftcms.com/docs/5.x/reference/twig/functions#failmessageinput) functions, respectively.

## [#](#collecting-addresses)Collecting Addresses

Most stores will require customers to provide some kind of location information, either for shipping physical goods, compliance, or tax calculation.

The [addresses](commerce_5x__system__addresses.md) page covers how addresses are used throughout the system, and the accompanying [development guide](commerce_5x__development__address-management.md) has examples of all the ways you can submit address data.

## [#](#estimating-costs)Estimating Costs

You can display estimated tax and shipping costs as soon as you have a billing and/or shipping address.
Commerce will use [partial addresses](commerce_5x__development__address-management.md#adding-a-shipping-estimate-address) stored in `estimatedBillingAddress` and `estimatedShippingAddress` until the customer can provide their full address at checkout.
Estimated addresses are never validated (and aren’t used to determine whether an order is allowed in a store), so you can collect as little as a country code (or whatever your [tax zones](commerce_5x__system__tax.md#tax-zones) and [shipping zones](commerce_5x__system__shipping.md#shipping-zones) are differentiated by).

This process is identical to [submitting a normal `billingAddress` or `shippingAddress`](commerce_5x__development__address-management.md#cart-addresses); there’s even a `estimatedBillingAddressSameAsShipping` param to synchronize them.

The **Use Billing Address For Tax** store setting also applies to estimated tax!

## [#](#selecting-a-shipping-method)Selecting a Shipping Method

A customer must have a reasonably complete real (or estimated) shipping address to provide accurate shipping options.
This means that you will typically need to capture that information in a prior step (as implied by the [flow](#flow) example, above).

## [#](#registration)Registration

Every customer is backed by a Craft user, whether [public registration](https://craftcms.com/docs/5.x/system/user-management#public-registration) is enabled or not.
When it *is* enabled, guest customers (typically a pending or non-[credentialed](https://craftcms.com/docs/5.x/system/user-management#statuses) user) can elect to register after checkout.
Provide a checkbox that sends a `registerUserOnOrderComplete` param while updating the cart:

```
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('commerce/cart/update-cart') }}

  <label>
    {{ input('checkbox', 'registerUserOnOrderComplete', true, {
      checked: cart.registerUserOnOrderComplete,
    }) }}
    Create an account (an activation email will be sent to {{ cart.email|default('the address on your order') }})
  </label>
</form>
```

The customer can opt out at any time by un-checking the box; note that the input’s `checked` attribute is set to the current value.

## [#](#making-payments)Making Payments

This step is covered in greater detail on the [payments](commerce_5x__development__making-payments.md) and [gateways](commerce_5x__system__gateways.md) pages.

## [#](#confirmation)Confirmation

After completing an order, you may redirect the customer to a generic confirmation page, or display a read-only [summary of their order](commerce_5x__development__orders.md).
Depending on your [default order status](commerce_5x__system__orders-carts.md#statuses) and [email](commerce_5x__system__emails.md) configuration, the customer can receive a receipt (or any other kind of notification).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/development/checkout.md)
