# Saving Payment Sources | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/development/saving-payment-sources

---

# Saving Payment Sources

- ### On this Page

  - [Workflows](commerce_5x__development__saving-payment-sources.md#workflows)
  - [Listing Payment Sources](commerce_5x__development__saving-payment-sources.md#listing-payment-sources)

Payment sources can only be saved for [gateways](commerce_5x__system__gateways.md) that support them.

There are two ways for customers to create reusable payment sources:

1. Save the payment method used [while checking out](#pay-and-save);
2. [Explicitly create](#save-only) a saved payment source;

Only logged-in customers can use the second option.
Guests can save payment sources during checkout, but will only be able to reuse them once their account is activated.

## [#](#workflows)Workflows

### [#](#pay-and-save)Pay and Save

You can pay for an order and have the card stored for future payments by sending a *truthy* value under the `savePaymentSource` parameter to any `commerce/carts/update-cart` or `commerce/payments/pay` form:

```
{% if cart.gateway.supportsPaymentSources() %}
  <label>
    <input type="checkbox" name="savePaymentSource" value="Yes, please!" />
    {{ "Save card for future purchases"|t }}
  </label>
{% endif %}
```

This example assumes that the customer has selected a gateway in a previous step; if you know that all your available gateways support saved payment sources, you can offer the option unconditionally.

### [#](#save-only)Save Only

If you’d prefer to *only* save the payment information for future use, you can submit any regular gateway payment form to `commerce/payment-sources/add` instead of `commerce/payments/pay`:

```
{% set gateway = craft.commerce.gateways.getGatewayByHandle('myGateway') %}

<form method="post">
  {{ csrfInput() }}
  {{ actionInput('commerce/payment-sources/add') }}

  {# The gateway ID is required, so Craft knows how to handle the rest of the fields: #}
  {{ hiddenInput('gatewayId', gateway.id) }}

  {# As with other requests, you can send the customer somewhere after the payment method is created... #}
  {{ redirectInput('my-account/wallet') }}

  {# ...or when there is a problem: #}
  {{ hiddenInput('cancelUrl', 'my-account/wallet'|hash) }}

  {# Use a custom confirmation message: #}
  {{ hiddenInput('successMessage', 'Added payment source!'|hash) }}

  {# Output the gateway’s payment form: #}
  {{ gateway.getPaymentFormHtml({})|raw }}
</form>
```

Each gateway will have different requirements for saved payment methods, and some will use an offsite redirect to handle additional verification (i.e. 3D Secure).

## [#](#listing-payment-sources)Listing Payment Sources

You can display a customer’s saved payment sources after loading them via the Commerce API:

```
{% set myPaymentSources = craft.commerce.paymentSources.getAllPaymentSourcesByCustomerId(currentUser.id) %}

{% if myPaymentSources is empty %}
  <p>You don’t have any saved payment sources.</p>
  <a href="{{ url('my-account/wallet/add') }}">Add one</a>
{% else %}
  <ul>
    {% for paymentSource in myPaymentSources %}
      <li>
        {{ paymentSource.description }}

        {# ... #}
      </li>
    {% endfor %}
  </ul>
{% endif %}
```

For each payment source, the information and [actions](#actions) you provide will depend on the gateway.
You can access the gateway model via `paymentSource.gateway`.
Commerce memoizes the latest information about the payment source (from the gateway’s API) as `paymentSource.response`.

### [#](#actions)Actions

These actions can be included any time you’re working with a [craft\commerce\models\PaymentSource  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-paymentsource.html) object in your templates.
In the example above, they would use the `paymentSource` variable inside the loop.

Saved payment methods can be more than credit cards!
Make sure your messaging is appropriate based on the configured gateways and the types of payment methods it supports.

#### [#](#delete-a-payment-source)Delete a Payment Source

```
{{ paymentSource.description }}

<form method="post">
  {{ csrfInput() }}
  {{ redirectInput('my-account/wallet') }}

  {{ actionInput('commerce/payment-sources/delete') }}
  {{ hiddenInput('id', paymentSource.id) }}

  <button type="submit">Delete payment method</button>
</form>
```

#### [#](#select-or-switch-primary-payment-source)Select or Switch Primary Payment Source

Within the context of a single payment source, you can make it the customer’s primary using a form like this:

```
{{ paymentSource.description }}

<form method="post">
  {{ csrfInput() }}
  {{ redirectInput('my-account/wallet') }}

  {{ actionInput('commerce/payment-sources/set-primary-payment-source') }}
  {{ hiddenInput('id', paymentSource.id) }}

  <button type="submit">Use this as my default payment method</button>
</form>
```

You can also have the customer select from a list:

```
{% set myPaymentSources = craft.commerce.paymentSources.getAllPaymentSourcesByCustomerId(currentUser.id) %}

<form method="post">
  {{ csrfInput() }}
  {{ redirectInput('my-account/wallet') }}

  {{ actionInput('commerce/payment-sources/set-primary-payment-source') }}

  <select name="id">
    {% for paymentSource in myPaymentSources %}
      {% tag 'option' with {
        value: paymentSource.id,
        selected: paymentSource.id == currentUser.primaryPaymentSourceId,
      } %}
        {{ paymentSource.description }} ({{ paymentSource.gateway.name }})
      {% endtag %}
    {% endfor %}
  </select>

  <button type="submit">Set default payment method</button>
</form>
```

### [#](#selecting-at-checkout)Selecting at Checkout

Customers can select from their saved payment sources any time they update or pay for an order, or start a [subscription](commerce_5x__system__subscriptions.md).

Stripe currently does not honor saved payment sources, and will always use the customer’s default payment method. Commerce synchronizes this when [selecting a primary payment source](#select-or-switch-primary-payment-source).

```
{% set myPaymentSources = craft.commerce.paymentSources.getAllPaymentSourcesByCustomerId(currentUser.id) %}

<form method="post">
  {{ csrfInput() }}
  {{ actionInput('commerce/carts/update-cart') }}
  
  <select name="paymentSourceId">
    {% for paymentSource in myPaymentSources %}
      {% tag 'option' with {
        value: paymentSource.id,
        selected: paymentSource.id == cart.paymentSourceId,
      } %}
        {{ paymentSource.description }} ({{ paymentSource.gateway.name }})
      {% endtag %}
    {% endfor %}
  </select>
</form>
```

Note that we are using different logic to determine whether an option is `selected`: the cart’s `paymentSourceId` replaces the customer’s `primaryPaymentSourceId`.

Commerce automatically sets a customer’s primary payment source on new carts when the store’s **Auto Set Payment Source** [setting](commerce_5x__system__stores.md#settings) is enabled.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/development/saving-payment-sources.md)
