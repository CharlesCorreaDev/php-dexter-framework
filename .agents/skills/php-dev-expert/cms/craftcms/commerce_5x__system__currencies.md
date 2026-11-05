# Payment Currencies | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/currencies

---

# Payment Currencies

- ### On this Page

  - [Stores and Currencies](commerce_5x__system__currencies.md#stores-and-currencies)
  - [Order Currency Fields](commerce_5x__system__currencies.md#order-currency-fields)
  - [Transaction Currency Fields](commerce_5x__system__currencies.md#transaction-currency-fields)
  - [Switching currencies](commerce_5x__system__currencies.md#switching-currencies)
  - [Conversion and Formatting](commerce_5x__system__currencies.md#conversion-and-formatting)

Customers feel more confident buying from a store when they can pay in the same currency their credit card or bank uses.

Variant prices are always set in their [store](commerce_5x__system__stores.md)’s *primary currency*; prices for that store’s other configured currencies are then calculated based on established *conversion rates*. This makes it possible to display the final payment amount in the [customer’s desired currency](#switching-currencies) at checkout, rather than waiting for it to settle and appear on their statement.

To set up payment currencies for a store, navigate to

1. Commerce→
2. Store Management→
3. Payment Currencies

in the control panel.

Once an order has been placed in a store, that store’s primary currency cannot be changed. You can always add secondary currencies to an existing store.

## [#](#stores-and-currencies)Stores and Currencies

Each [store](commerce_5x__system__stores.md) has a single **Primary Currency** and any number of additional currencies. Currencies can overlap between stores, but they must be configured individually.

### [#](#sites)Sites

Every site points to a single store, but that relationship is not necessarily exclusive: one store may serve multiple sites. This means that multiple sites may share a primary currency.

Multi-Currency Examples

If you selected US Dollars (USD) as a store’s primary currency, you would enter all products, sales, discounts and orders in that currency.

Then you could add Australian Dollars (AUD) as an additional accepted payment currency, with a conversion rate of `1.3`. When a customer chooses to pay in AUD, Commerce will display the converted prices and totals, and communicate with payment gateways so that there are no surprises. An item costing $10 USD would be converted to $13 AUD, and any totals downstream of that would reflect the same conversion.

Craft Commerce does *not* keep currencies’ exchange rates updated automatically. If your stores are vulnerable to frequent shifts in exchange rates, consider writing a [custom module or plugin](https://craftcms.com/docs/5.x/extend/) to keep them updated from an external source.

Adding a second store to the mix (with, say, EUR for its primary currency) allows you to redefine all variant prices in that currency. The same $10 USD item could be adjusted to €9 for the European market, providing a new basis for secondary currencies’ conversion rates in that store. Suppose you allowed payment in GBP, with a conversion rate of `0.85`: Commerce would know to convert the store’s base €9 price to £7.56 (and display it in the appropriate format).

## [#](#order-currency-fields)Order Currency Fields

Carts and orders have the following currency-related fields:

### [#](#order-currency)`order.currency`

This is the primary store currency that all line item prices, adjustments, discounts, and so on are stored and returned in.

### [#](#order-paymentcurrency)`order.paymentCurrency`

If your store has only one currency, this will always be set to the primary store currency. If your store supports multiple payment currencies, this [can be changed by the user](#switching-currencies).

Use this value to [convert and format](#conversion-and-formatting) prices for your customers.

## [#](#transaction-currency-fields)Transaction Currency Fields

When a customer makes a [payment](commerce_5x__development__making-payments.md) on an order (or an admin issues a refund), Commerce captures both the raw and normalized amounts in a *transaction*.

The following fields are available for communicating payment information to customers:

### [#](#transaction-amount)`transaction.amount`

The normalized amount in the store’s currency.

### [#](#transaction-currency)`transaction.currency`

The currency that the transaction’s `amount` is stored in. This is usually the store’s default currency.

### [#](#transaction-paymentamount)`transaction.paymentAmount`

The raw amount in the chosen `paymentCurrency`. This will be different from the `amount` if a customer paid in a non-default currency.

### [#](#transaction-paymentcurrency)`transaction.paymentCurrency`

The currency that was used when communicating with the payment gateway. This is copied from the order’s payment currency, or the parent transaction (for refunds).

### [#](#transaction-paymentrate)`transaction.paymentRate`

A snapshot of the payment currency’s conversion rate at the time of payment, stored in case it changes *after* the payment is made.

## [#](#switching-currencies)Switching currencies

A customer can switch their cart’s payment currency at any time. The new payment currency must be supplied as a 3-digit ISO code corresponding to another of that store’s configured currencies. The most common way to do this is by sending a `paymentCurrency` parameter to the [`commerce/cart/update-cart`](commerce_5x__reference__controller-actions.md#post-cartupdate-cart) or [`commerce/payments/pay`](commerce_5x__reference__controller-actions.md#post-paymentspay) form actions.

You might provide currency options like this:

```
{% set cart =  craft.commerce.carts.cart %}
{% set currencies = craft.commerce.paymentCurrencies.getAllPaymentCurrencies(currentStore.id) %}

<form method="post">
  {{ csrfInput() }}
  {{ actionInput('commerce/cart/update-cart') }}

  <select name="paymentCurrency">
    {% for currency in currencies %}
      {{ tag('option', {
        text: "Pay in #{currency.iso}",
        value: currency.iso,
        selected: cart.paymentCurrency == currency.iso,
      })}}
    {% endfor %}
  </select>
  <button>Update Payment Currency</button>
</form>
```

Note that we are only displaying currencies configured for the current store! Sending an ISO code that is *not* available for a store will result in an error.

## [#](#conversion-and-formatting)Conversion and Formatting

While you can use the `|commerceCurrency` filter as a drop-in replacement for [Craft’s `|currency` filter](https://craftcms.com/docs/5.x/reference/twig/filters#currency), it offers additional control over formatting and conversion:

- A `convert` parameter used to convert the base price into the supplied (and *valid*) payment currency.
- A `format` parameter that can disable formatting and return the raw currency value as a floating-point number.
- A `stripZeros` parameter which can be used to return a formatted value without trailing zeros (`.00`).

Using the `convert` flag properly is vital to display correct prices to your customers. Commerce doesn’t track where a price comes from, though, so it’s possible to double-

```
{{ variant.salePrice|commerceCurrency(
  cart.paymentCurrency,
  convert = true
) }}
```

The first `currency` argument *must* be a valid ISO for the current store. In general, this currency should only be passed from Commerce objects like the cart, and not hard-coded—for example, specifying `USD` in a template means that it will be incompatible with any stores that don’t have that currency configured *and* that all the user’s preferences are ignored.

For more details about the filter and its parameters, see the [Twig filter documentation](commerce_5x__reference__twig.md#commercecurrency).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/system/currencies.md)
