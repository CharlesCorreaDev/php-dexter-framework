# Order History | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/development/orders

---

# Order History

- ### On this Page

  - [Post-Checkout](commerce_5x__development__orders.md#post-checkout)
  - [Routing](commerce_5x__development__orders.md#routing)
  - [Order Data](commerce_5x__development__orders.md#order-data)

Customers with (and without!) accounts often want to see evidence of their purchases, on-site.

## [#](#post-checkout)Post-Checkout

After a customer has paid for or otherwise completed an order, Commerce redirects them to the `returnUrl` memoized on the order. This is often set with the standard [`redirectInput()` function](https://craftcms.com/docs/5.x/reference/twig/functions#redirectinput) when [making a payment](commerce_5x__development__making-payments.md), but may not take effect until the customer returns from completing off-site authorization.

To send them to a dedicated order summary page, you can send a `redirect` param like this:

```
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('commerce/payments/pay') }}
  {{ redirectInput('orders/{number}') }}

  {# ... #}

  <button>Pay</button>
</form>
```

This [object template](https://craftcms.com/docs/5.x/system/object-templates) is evaluated using the completed order object itself—in this example, we’re using the `number` attribute, which is guaranteed to be unique. Commerce (nor Craft) doesn’t know how to handle a request to that URL, though, so it’s up to us to define a [route](#routing).

## [#](#routing)Routing

Routes are a native Craft feature, and can be configured in the control panel via

1. Settings→
2. Routes

, or a [`config/routes.php` file](https://craftcms.com/docs/5.x/system.routing.html#advanced-routing-with-url-rules).

Commerce doesn’t automatically give orders front-end URLs (like entries or categories support), so it’s up to each project to define an access pattern that makes sense.

### [#](#guest-orders)Guest Orders

To support the [post-checkout redirect](#post-checkout) we set up, let’s add a URL rule that points to a template. Open up (or create) `config/routes.php` and add a new key to the array:

```
return [
    // ...
    'orders/<orderNumber:[a-f0-9]{32}>' => ['template' => '_orders/receipt'],
];
```

Our object template included the [order `number`](commerce_5x__system__orders-carts.md#order-number), which is always 32 “hexadecimal” characters long (letters `a` through `f` and numbers `0` through `9`). This route matches that pattern, and passes the captured value to our template under a variable named `orderNumber`.

Keep in mind that your order *number* is different than its *reference*. Commerce does not allow customization of the `number`, as it must be random and globally unique. However, stores *can* incorporate the order number (or part of it) in their reference format.

Create the `_orders/receipt` template in your [templates directory](https://craftcms.com/docs/5.x/system/directory-structure#templates), and add a simple output statement to prove that things are connected:

```
{{ orderNumber }}
```

Find a valid order number in the control panel by visiting

1. Commerce→
2. Orders

, and try accessing the URL:

```
https://my-shop.ddev.site/orders/a3e2335afe45e00ecc933648a6511afa
```

You should see just the alphanumeric order number echoed back. If you change the last `a` to a `b`, Craft would still consider it a valid route—even though there (probably) isn’t an order with that number!

To load an order with that number, we’ll use an [order query](commerce_5x__system__orders-carts.md#querying-orders). We only want to show *completed* orders, so we’ll set an additional parameters on the query:

```
{% set order = craft.orders()
  .number(orderNumber)
  .isCompleted(true)
  .one() %}

{% if not order %}
  {% exit 404 %}
{% endif %}

{{ order.dateOrdered|date }}
```

If the query does not return an order, we immediately call `{% exit 404 %}` to halt the request and render your project’s [error page](https://craftcms.com/docs/5.x/system/routing#error-templates).

The substance of this “receipt” view is entirely up to you—orders contain [a huge amount of data](#order-data), including line items, adjustments, transactions, status history, notes, custom fields, and more.

If you elect to use a more relaxed pattern for your routes, take care to not inadvertently disclose personal information. Using predictable identifiers like sequential IDs (`order.id`) or reference numbers (`order.reference`) leaves your store open to enumeration attacks.

#### [#](#obfuscation)Obfuscation

Customers will want to confirm some amount of information about their orders immediately after placing them—but it can be unsafe to leave personal information like emails, addresses, or even order contents out on the semi-public web, indefinitely.

Consider setting up a policy with your team about how long order data is accessible, and redact sensitive information after a period of time:

```
{% set elapsed = order.dateOrdered.diff(now) %}

{% if elapsed.days < 60 %}
  {# Fresh orders can display everything! #}
{% else %}
  {# Output anonymous or redacted info... #}
{% endif %}
```

### [#](#credentialed-customers)Credentialed Customers

If your store supports registration, routing and order lookup might look a bit different. It also means that we can display an index of past orders so the customer doesn’t have to look up individual receipt URLs.

Here’s an example of some routes that comprise a lightweight “account” area:

```
return [
    'account' => ['template' => '_account/dashboard'],
    'account/orders' => ['template' => '_account/order-history'],
    'account/orders/<orderNumber:[a-f0-9]{32}>' => ['template' => '_account/order'],
];
```

We won’t implement the root `/account` route, but let’s assume it contains some links to other functions like [updating addresses](commerce_5x__development__address-management.md) and security settings.

The last route should look familiar—it’s essentially the same as the guest customer’s version, but nested within the `/account` path. The location here doesn’t make much of a difference, but its template will contain a couple more access checks.

#### [#](#protecting-access)Protecting Access

All the templates in this account area should contain the [`{% requireLogin %}` tag](https://craftcms.com/docs/5.x/reference/twig/tags#requirelogin), and narrow the scope of any order queries using the [`currentUser` global variable](https://craftcms.com/docs/5.x/reference/twig/global-variables#currentuser).

#### [#](#listing-orders)Listing Orders

Create a new folder in your `templates/` directory named `_account`, and a file within it named `order-history.twig`.

Orders are always connected to a Craft user. To fetch the current user’s orders, we’ll use the `.customer()` query param:

```
{% requireLogin %}

{% set orders = craft.orders()
  .customer(currentUser)
  .isCompleted(true)
  .orderBy('dateOrdered DESC')
  .all() %}

<ul>
  {% for order in orders %}
    <li><a href="{{ siteUrl("account/orders/#{order.number}") }}">Order {{ order.reference }}</a> ({{ order.total|commerceCurrency }})</li>
  {% endfor %}
</ul>
```

For multi-store installations, you can display orders for a single store at a time with the `.storeId()` query param. If a customer’s orders are apt to contain multiple currencies, pass the appropriate currency to the [`commerceCurrency` filter](commerce_5x__reference__twig.md#commercecurrency).

#### [#](#single-orders)Single Orders

The links in our order list point to single orders, with a parameterized path like `/account/orders/cc93d4b51f20299672d936cbafce9f4d`. Let’s mock out this template—it will look a lot like the guest template, but with a couple of additional constraints:

```
{% requireLogin %}

{% set order = craft.orders()
  .customer(currentUser)
  .number(orderNumber)
  .isCompleted(true)
  .one() %}

  <h2>Order {{ order.reference }}</h2>

  {# ... #}
```

## [#](#order-data)Order Data

### [#](#line-items)Line Items

Line items can be handled exactly the same way as they are in a cart—minus the editing components!

```
<table>
  <thead>
    <tr>
      <th>Quantity</th>
      <th>Item</th>
      <th>Unit Price</th>
      <th>Subtotal</th>
  </thead>
  <tbody>
    {% for item in order.lineItems %}
      <tr>
        <td>{{ item.qty }}</td>
        <td>{{ item.description }}</td>
        <td>{{ item.price }}</td>
        <td>{{ item.subtotal }}</td>
      </tr>
    {% endfor %}
  </tbody>
</table>
```

### [#](#adjustments)Adjustments

Adjustments like tax and shipping (and others, provided by plugins) can apply to line items, or directly to the order. Commerce makes these available as an array under the `adjustments` attribute of line items and orders. For more information about how these affect totals and subtotals, see the orders [documentation](commerce_5x__system__orders-carts.md#order-totals).

> 👷 Stay tuned! We’re consolidating examples from around the Commerce docs here, for easier reference.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/development/orders.md)
