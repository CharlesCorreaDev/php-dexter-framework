# Orders & Carts | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/orders-carts

---

# Orders & Carts

- ### On this Page

  - [Configuration](commerce_5x__system__orders-carts.md#configuration)
  - [Carts](commerce_5x__system__orders-carts.md#carts)
  - [Orders](commerce_5x__system__orders-carts.md#orders)
  - [Querying Orders](commerce_5x__system__orders-carts.md#querying-orders)
  - [Order Query Parameters](commerce_5x__system__orders-carts.md#order-query-parameters)

Commerce uses a single [Order  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-order.html) element to represent both an in-progress [cart](#carts) and a completed [order](#orders). Whenever we use the terms “cart” and “order,” we’re talking about the same underlying object—but in two different states.

The lifecycle of an order element looks something like this:

1. A customer visits your site and is assigned an [order number](#order-number);
2. Items (purchasables) are added to the cart as *line items*;
3. Additional information is collected to satisfy your [checkout](commerce_5x__development__checkout.md) requirements;
4. Payment is submitted, completing the order;

However, not *all* carts will become orders in this way! Commerce also allows store managers to [create carts from the control panel](#creating-orders); checkout without payment (or with partial payment) is possible via configuration; carts can be [abandoned](#carts); or a cart can be manually completed via the control panel.

As a type of [element](https://craftcms.com/docs/5.x/system/elements), orders use a familiar management interface, including sophisticated [permissions](commerce_5x__reference__permissions.md), [statuses](commerce_5x__system__custom-order-statuses.md), and [custom fields](#field-layout).

## [#](#configuration)Configuration

The functionality of carts and orders is mostly consistent across Commerce projects, but there are a few ways you can customize them to suit your business needs.

### [#](#store-settings)Store Settings

Each store has the following settings (accessible via

1. Commerce→
2. System Settings→
3. Stores→
4. Choose a Store→
5. Settings tab

):

- **Auto Set New Cart Addresses**, **Auto Set Cart Shipping Method Option**, **Auto Set Payment Source** — Whether the respective information should be automatically attached to new carts, for logged-in customers.
- **Allow Empty Cart On Checkout**, **Allow Checkout Without Payment**, **Allow Partial Payment On Checkout**, **Require Shipping Address At Checkout**, **Require Billing Address At Checkout**, **Require Shipping Method Selection At Checkout** — Choose what requirements a cart must meet to be completed by a customer.
- **Free Order Payment Strategy** — Enable only when using a gateway that supports zero-total transactions.
- **Minimum Total Price Strategy** — How Commerce handles potentially-negative order totals.
- **Use Billing Address For Tax** — By default, Commerce uses the shipping address to calculate taxes. If your store sells only virtual/digital goods, enable this.
- **Validate Business Tax ID as Vat ID** — Whether addresses’ **Organization Tax ID** field must be validated as a [VAT ID  (opens new window)](https://taxation-customs.ec.europa.eu/vat-identification-numbers_en).

A store’s settings only govern carts and orders created and completed within them.

### [#](#global-configuration)Global Configuration

Additional settings are available via the [global config file](commerce_5x__configure.md#config-settings):

- `activeCartDuration` — How long carts are considered “active.”
- `purgeInactiveCarts` — Whether inactive cart elements should be deleted during routine [garbage collection](https://craftcms.com/docs/5.x/system/gc).
- `purgeInactiveCartsDuration` — How long before an inactive cart is eligible for purging. This is the *total* time since the last update to the cart, not in addition to the `activeCartDuration`.
- `loadCartRedirectUrl` — Where a customer will be redirected after [loading a previous cart](commerce_5x__development__cart.md#loading-and-forgetting-carts) into their session.
- `validateCartCustomFieldsOnSubmission` — Whether [custom fields](#field-layout) on a cart are validated whenever it is updated. *Enable with caution, as this can affect customers’ ability to add products to their cart without first submitting required field values.*

### [#](#field-layout)Field Layout

Orders have a dedicated field layout, which can be used to collect additional information from customers, or to hold information about fulfillment and other back-office processes.

Visit

1. Commerce→
2. System Settings→
3. Orders→
4. Field Layout

to customize the order field layout.

Add field and tab conditions to expose administrative tools to specific managers, or while an order is specific statuses!

## [#](#carts)Carts

As a customer or store manager is building a cart, the goal is to maintain an up-to-date list of items with their relevant costs, discounts, promotions, and metadata. For this reason, the cart will be recalculated each time a change is made.

Once a cart is completed, however, it becomes an [order](#orders) that represents choices explicitly finalized by whoever completed the cart. The order’s behavior changes slightly at this point: the customer will no longer be able to make edits, and changes made by a store manager will not automatically trigger [recalculation](#recalculating-orders).

Carts and orders are managed per-[store](commerce_5x__system__stores.md). A customer may have multiple active carts in different stores, each with discrete contents—the cart Commerce loads automatically for a customer depends on what site they’re viewing, in the front-end.

Customers can also [switch between active carts](commerce_5x__development__cart.md#restoring-previous-cart-contents) for a given site.

Carts and orders are both listed on the **Orders** index page in the control panel, where you can further limit your view to *active* carts (updated in the last hour), and *inactive* carts (older than an hour). You can customize this time limit using the [`activeCartDuration`](commerce_5x__configure.md#activecartduration) setting.

Craft automatically deletes inactive carts after 90 days. Disable purging with the [`purgeInactiveCarts`](commerce_5x__configure.md#purgeinactivecarts) setting, or fine-tune the delay with [`purgeInactiveCartsDuration`](commerce_5x__configure.md#purgeinactivecartsduration).

Your customers’ experience of the cart and [checkout](commerce_5x__development__checkout.md) can be tailored to your project.

[Using the cart in your templates
→

Dive into developing cart management experiences in Twig.](commerce_5x__development__cart.md)

Use of carts and orders is deeply connected to other Commerce features like [addresses](commerce_5x__system__addresses.md), [shipping](commerce_5x__system__shipping.md), [tax](commerce_5x__system__tax.md), and so on.

## [#](#orders)Orders

An order is a type of [element](https://craftcms.com/docs/5.x/extend/element-types) that underpins the shopping and checkout experience, in addition to supporting the wide array of content and query features. You can browse orders in the control panel by navigating to

1. Commerce→
2. Orders

.

When a cart becomes an order, the following things happen:

1. The `dateOrdered` order attribute is set to the current date.
2. The `isCompleted` order attribute is set to `true`.
3. The default [order status](commerce_5x__system__custom-order-statuses.md) is set on the order and any emails for this status are sent.
4. The order reference number is generated for the order, based on the [**Order Reference Number Format** setting](commerce_5x__system__stores.md#settings) for the store it was placed in.
5. The order element is saved for a final time.
6. [Order status emails](#status-emails) are queued (if configured).
7. Coupon usage is deducted.
8. If the customer opted in to registration, their user is sent an activation email.
9. Addresses are duplicated into the customer’s account (if requested).
10. Inventory is deducted.
11. Line items are assigned a default status.
12. Commerce invokes “order complete” [event handlers](commerce_5x__extend__events.md#aftercompleteorder).

Instead of being recalculated on each change like a cart, the order will only be recalculated if you [manually trigger recalculation](#recalculating-orders).

Adjustments for discounts, shipping, and tax may be applied when an order is recalculated. Each adjustment is related to its order, and can optionally relate to a specific line item.

If you’d like to jump straight to displaying order information in your templates, check out the [cart](commerce_5x__development__cart.md) and [orders](commerce_5x__development__orders.md) development sections, then review the [craft\commerce\elements\Order  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-order.html) class reference for a complete list of available methods and properties.

### [#](#order-numbers)Order Numbers

There are three ways to identify an order: by order number, short order number, and order reference number.

#### [#](#order-number)Order Number

The order number is a 32-character, alphanumeric hash generated when the cart cookie is first created. It exists even before the cart is saved in the database, and remains the same for the entire life of the order. Order numbers are *not* sequential!

```
{{ order.number }}
{# -> 706ffb9c4fa439977908f6a4ad0287af #}
```

This is different from the [order reference number](#order-reference-number), which is only generated after a cart has been completed and becomes an order.

Use the order number in situations where orders are displayed without authentication—like in a [route](https://craftcms.com/docs/5.x/system/routing#advanced-routing-with-url-rules) segment for a template that displays order details after checkout. See the development page for [an example of a route and template](commerce_5x__development__orders.md#guest-orders) used to display guest orders.

#### [#](#short-order-number)Short Order Number

The short order number is the first seven characters of the order number. This is short enough to still be (statistically) unique, but marginally easier for customers to process—although not as friendly as the [order reference number](#order-reference-number).

```
{{ order.shortNumber }}
{# -> 706ffb9 #}
```

#### [#](#order-reference)Order Reference

The *order reference* is generated upon completing a cart using the store’s **Order Reference Number Format** in

1. Commerce→
2. System Settings→
3. Stores

. It is intended to be a customer-facing alternative to the 32-digit alphanumeric [order number](#order-number).

```
{{ order.reference }}
```

The **Order Reference Number Format** is an [object template](https://craftcms.com/docs/5.x/system/object-templates) that’s rendered when the order is completed. It can use order attributes along with Twig filters and functions. For example:

```
{{ dateOrdered|date('Y') }}-{{ id }}
```

Output:

```
2024-43
```

In this example, `{{ id }}` refers to the order’s element ID, which is not necessarily sequential (nor predictable in length). If you would rather generate a unique sequential number, a simple way would be to use Craft’s [seq()](https://craftcms.com/docs/5.x/reference/twig/functions#seq) Twig function, which returns the next unique number based on the `name` parameter passed to it.

The `seq()` function takes the following parameters:

1. A key name. If this name is changed, a new sequence starting at one is started.
2. An optional padding character length. For example if the next sequence number is `14` and the padding length is `8`, the output will always be at least that many characters: `00000014`. You can change the padding value without disrupting the sequence.

For example:

```
{{ dateOrdered|date('Y') }}-{{ seq(dateOrdered|date('Y'), 8) }}
```

Output:

```
2024-00000023
```

In this example we’ve used the current year as the sequence name so we automatically get a new sequence, starting at `1`, when the next year arrives. You could use the `store`’s handle (like `seq("store-order-#{store.handle}")`) to keep sequences unique per-store, or a static key (like `seq('order-number')`) if you want *all* orders to occupy the same sequential space.

Sequences are global, so constructing keys that will not collide with others you may use in other fields or templates is essential to avoid gaps.

Order references cannot be relied upon for sorting. Use `.orderBy('dateOrdered DESC')` if you wish to display orders in reverse-chronological order.

### [#](#creating-orders)Creating Orders

An order is typically created when a customer [adds items](#adding-items-to-a-cart) to their [cart](#carts) and then [checks out](commerce_5x__development__checkout.md). Orders can also be created in the control panel by users with the “Manage Orders” [permission](commerce_5x__reference__permissions.md#manage-orders).

To create a new order, navigate to

1. Commerce→
2. Orders

, and choose **New Order**. This will create a new order that behaves like a cart—as line items are added to and removed from the order, it will automatically recalculate totals and apply matching discounts and other adjustments. Select a customer and populate the **Billing Address** and **Shipping Address** to ensure prices (including tax and shipping) can be calculated accurately.

To complete the order, press **Mark as completed**.

#### [#](#custom-line-items)Custom Line Items [5.1.0+](https://github.com/craftcms/commerce/blob/5.1.0/CHANGELOG.md "Custom, ad-hoc line items was first available in version 5.1.0 of Commerce.")

In addition to selecting from the store’s available [purchasables](commerce_5x__system__purchasables.md), store managers can create ad-hoc *custom line items* to represent one-off fees or other order contents.

Custom line items behave exactly the same as line items based on a purchasable, except that their `type` property is `custom`, and they do not track a `purchasableId`. Therefore, their other attributes are never be “refreshed” from a purchasable, they will never be “out of stock,” and they will not be part of the [pricing catalog](commerce_5x__system__pricing-rules.md).

Shipping, tax, and other adjustments *can* still affect custom line items! Any rules and conditions that specify product types, relationships, or other qualities that depend on a preexisting purchasable will never match a custom line item.

### [#](#editing-orders)Editing Orders

Completed orders can be edited in the control panel by visiting the order edit page and choosing **Edit**.

While editing the order, it will refresh subtotals and totals and display any errors. It will *not* automatically [recalculate](#recalculating-orders) the order based on system rules like shipping, taxes, or promotions. Choose **Recalculate order** to have it fully recalculate including those system rules.

Once you’re happy with your changes, choose **Update Order** to save it to the database. Updating an order after it is completed does not automatically charge or refund the customer! You must take these actions explicitly via the **Transactions** tab.

### [#](#order-totals)Order Totals

Every order includes a few important totals:

- **order.itemSubtotal** is the sum of the order’s line item `subtotal` amounts.
- **order.itemTotal** is the sum of the order’s line item `total` amounts.
- **order.adjustmentsTotal** is the sum of the order’s adjustments.
- **order.total** is the sum of the order’s `itemSubtotal` and `adjustmentsTotal`.
- **order.totalPrice** is the total order price with a minimum enforced by the **Minimum Total Price Strategy** [store setting](commerce_5x__system__stores.md#settings).
- **order.totalTax** is the sum of all [tax](commerce_5x__system__tax.md) adjustments.
- **order.totalTaxIncluded** is the sum of all tax adjustments marked as *included* in item prices.
- **order.totalShippingCost** is the sum of all [shipping](commerce_5x__system__shipping.md) adjustments.

Note that `total` *can* be negative!

### [#](#recalculating-orders)Recalculating Orders

Let’s take a closer look at how carts and orders are recalculated.

A cart or order is always in one of three calculation modes:

- **Recalculate All** — Active for incomplete carts and orders. This mode refreshes each line item’s details from the related purchasable and re-applies all adjustments to the cart. In other words, it rebuilds and recalculates cart details based on information from purchasables and how Commerce is configured. This mode merges duplicate line items and removes any that are out of stock or whose purchasables were deleted.
- **Adjustments Only** doesn’t touch line items, but re-applies adjustments on the cart or order. This can only be set programmatically and is not available from the control panel.
- **None** — Skips recalculation entirely; active only on completed orders. Only manual edits or admin-initiated recalculation can modify order details.

Cart/order subtotals and totals are computed values that always reflect the sum of line items. A few examples are `totalPrice`, `itemTotal`, and `itemSubtotal`.

You can manually recalculate a completed order by choosing “Recalculate order” at the bottom of the order edit screen:

![](/docs/assets/img/recalculate-order.c651f3b5.png)

This will set temporarily the order’s calculation mode to *Recalculate All* and trigger recalculation. You can then apply the resulting changes to the order by choosing “Update Order”, or discard them by choosing “Cancel”.

### [#](#order-notices)Order Notices

Notices are added to carts and orders in circumstances where it or the store’s state results in unexpected changes:

- A previously-valid coupon or shipping method was removed from the order;
- A line item’s purchasable was no longer available so that line item was removed from the cart;
- A line item’s sale price changed for some reason, like a sale ending;

Each notice is an [OrderNotice  (opens new window)](https://github.com/craftcms/commerce/blob/main/src/models/OrderNotice.php) model, containing a customer-facing description of what changed, and a corresponding [craft\commerce\elements\Order  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-order.html) attribute.

[Order Notices in Twig
→

Learn about how to display and dismiss notices in your storefront.](commerce_5x__development__cart.md#notices)

### [#](#statuses)Statuses

When a cart is completed, it is assigned the default *order status* for the [store](commerce_5x__system__stores.md) it was placed in, and any relevant emails are sent via the [queue](https://craftcms.com/docs/5.x/system/queue).

[Order Statuses
→

Design a custom order management workflow for your store.](commerce_5x__system__custom-order-statuses.md)

#### [#](#status-emails)Status Emails

If [status emails](commerce_5x__system__emails.md) are set up for a newly-updated order status, messages will be sent when the updated order is saved.

You can manually re-send an order status email at any time. Navigate to an order’s edit screen, then select the desired email from the **Send Email** menu in the toolbar.

## [#](#querying-orders)Querying Orders

You can fetch carts and orders in your templates or PHP code using **order queries**.

TwigPHP

```
{# Create a new order query #}
{% set myOrderQuery = craft.orders() %}
```

```
// Create a new order query
$myOrderQuery = \craft\commerce\elements\Order::find();
```

Once you’ve created the query, you can set [parameters](#parameters) on it to narrow down the results, and then [execute it](https://craftcms.com/docs/5.x/development/element-queries#executing-element-queries) by calling `.one()` or `.all()` to return one or more order elements.

See [Element Queries](https://craftcms.com/docs/5.x/development/element-queries) in the Craft docs to learn about how element queries work.

The customer’s current cart is accessible in most Twig contexts via `craft.commerce.carts.cart`. In some situations (like [order status emails](commerce_5x__system__emails.md)), an `order` variable will be automatically populated with the correct order. Ad-hoc queries are typically only necessary when displaying *inactive* carts, a customer’s order history, or for generating custom reports.

### [#](#example)Example

We can display an order with a given [order number](#order-number) by doing the following:

1. Create an order query with `craft.orders()`.
2. Set the [number](#number) parameter on it.
3. Fetch the order with `.one()`.
4. Output information about the order as HTML.

```
{# Get the requested order number from the query string #}
{% set orderNumber = craft.app.request.getQueryParam('number') %}

{# Create an order query with the 'number' parameter #}
{% set myOrderQuery = craft.orders()
  .number(orderNumber) %}

{# Fetch the order #}
{% set order = myOrderQuery.one() %}

{# Make sure it exists #}
{% if not order %}
  {% exit 404 %}
{% endif %}

{# Display the order #}
<h1>Order {{ order.getShortNumber() }}</h1>
<!-- ... -->
```

## [#](#order-query-parameters)Order Query Parameters

Order queries support the following parameters:

| Param | Description |
| --- | --- |
| [andNotRelatedTo](#andnotrelatedto) | Narrows the query results to only orders that are not related to certain other elements. |
| [andRelatedTo](#andrelatedto) | Narrows the query results to only orders that are related to certain other elements. |
| [andWith](#andwith) | Causes the query to return matching orders eager-loaded with related elements, in addition to the elements that were already specified by [with](#with). |
| [asArray](#asarray) | Causes the query to return matching orders as arrays of data, rather than [Order  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-order.html) objects. |
| [cache](#cache) | Enables query cache for this Query. |
| [canonicalsOnly](#canonicalsonly) | Narrows the query results to only canonical elements, including elements that reference another canonical element via `canonicalId` so long as they aren’t a draft. |
| [clearCachedResult](#clearcachedresult) | Clears the [cached result  (opens new window)](https://craftcms.com/docs/5.x/development/element-queries#cache). |
| [collectIds](#collectids) | Executes the query and returns the IDs of the resulting elements as a collection. |
| [couponCode](#couponcode) | Narrows the query results based on the order's coupon code. |
| [customer](#customer) | Narrows the query results based on the customer’s user account. |
| [customerId](#customerid) | Narrows the query results based on the customer, per their user ID. |
| [dateAuthorized](#dateauthorized) | Narrows the query results based on the orders’ authorized dates. |
| [dateCreated](#datecreated) | Narrows the query results based on the orders’ creation dates. |
| [dateFirstPaid](#datefirstpaid) | Narrows the query results based on the orders’ first paid dates. |
| [dateOrdered](#dateordered) | Narrows the query results based on the orders’ completion dates. |
| [datePaid](#datepaid) | Narrows the query results based on the orders’ paid dates. |
| [dateUpdated](#dateupdated) | Narrows the query results based on the orders’ last-updated dates. |
| [eagerly](#eagerly) | Causes the query to be used to eager-load results for the query’s source element and any other elements in its collection. |
| [email](#email) | Narrows the query results based on the customers’ email addresses. |
| [expiryDate](#expirydate) | Narrows the query results based on the orders’ expiry dates. |
| [fixedOrder](#fixedorder) | Causes the query results to be returned in the order specified by [id](#id). |
| [gateway](#gateway) | Narrows the query results based on the gateway. |
| [gatewayId](#gatewayid) | Narrows the query results based on the gateway, per its ID. |
| [getFieldLayouts](#getfieldlayouts) | Returns the field layouts that could be associated with the resulting elements. |
| [hasLineItems](#haslineitems) | Narrows the query results to only orders that have line items. |
| [hasPurchasables](#haspurchasables) | Narrows the query results to only orders that have certain purchasables. |
| [hasTransactions](#hastransactions) | Narrows the query results to only carts that have at least one transaction. |
| [id](#id) |  |
| [ignorePlaceholders](#ignoreplaceholders) | Causes the query to return matching orders as they are stored in the database, ignoring matching placeholder elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement). |
| [inBulkOp](#inbulkop) | Narrows the query results to only orders that were involved in a bulk element operation. |
| [inReverse](#inreverse) | Causes the query results to be returned in reverse order. |
| [isCompleted](#iscompleted) | Narrows the query results to only orders that are completed. |
| [isPaid](#ispaid) | Narrows the query results to only orders that are paid. |
| [isUnpaid](#isunpaid) | Narrows the query results to only orders that are not paid. |
| [itemSubtotal](#itemsubtotal) | Narrows the query results based on the order’s item subtotal. |
| [itemTotal](#itemtotal) | Narrows the query results based on the order’s item total. |
| [language](#language) | Determines which site(s) the orders should be queried in, based on their language. |
| [limit](#limit) | Determines the number of orders that should be returned. |
| [notRelatedTo](#notrelatedto) | Narrows the query results to only orders that are not related to certain other elements. |
| [number](#number) | Narrows the query results based on the order number. |
| [offset](#offset) | Determines how many orders should be skipped in the results. |
| [orderBy](#orderby) | Determines the order that the orders should be returned in. (If empty, defaults to `id ASC`.) |
| [orderLanguage](#orderlanguage) | Narrows the query results based on the order language, per the language string provided. |
| [orderSiteId](#ordersiteid) | Narrows the query results based on the order language, per the language string provided. |
| [orderStatus](#orderstatus) | Narrows the query results based on the order statuses. |
| [orderStatusId](#orderstatusid) | Narrows the query results based on the order statuses, per their IDs. |
| [origin](#origin) | Narrows the query results based on the origin. |
| [preferSites](#prefersites) | If [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) is set, this determines which site should be selected when querying multi-site elements. |
| [prepForEagerLoading](#prepforeagerloading) | Prepares the query for lazy eager loading. |
| [prepareSubquery](#preparesubquery) | Prepares the element query and returns its subquery (which determines what elements will be returned). |
| [reference](#reference) | Narrows the query results based on the order reference. |
| [relatedTo](#relatedto) | Narrows the query results to only orders that are related to certain other elements. |
| [render](#render) | Executes the query and renders the resulting elements using their partial templates. |
| [search](#search) | Narrows the query results to only orders that match a search query. |
| [shippingMethodHandle](#shippingmethodhandle) | Narrows the query results based on the shipping method handle. |
| [shortNumber](#shortnumber) | Narrows the query results based on the order short number. |
| [siteSettingsId](#sitesettingsid) | Narrows the query results based on the orders’ IDs in the `elements_sites` table. |
| [storeId](#storeid) | Narrows the query results to only orders that are related to the given store. |
| [total](#total) | Narrows the query results based on the total. |
| [totalDiscount](#totaldiscount) | Narrows the query results based on the total discount. |
| [totalPaid](#totalpaid) | Narrows the query results based on the total paid amount. |
| [totalPrice](#totalprice) | Narrows the query results based on the total price. |
| [totalQty](#totalqty) | Narrows the query results based on the total qty of items. |
| [totalTax](#totaltax) | Narrows the query results based on the total tax. |
| [totalWeight](#totalweight) | Narrows the query results based on the total weight of items. |
| [trashed](#trashed) | Narrows the query results to only orders that have been soft-deleted. |
| [uid](#uid) | Narrows the query results based on the orders’ UIDs. |
| [wasCountEagerLoaded](#wascounteagerloaded) | Returns whether the query result count was already eager loaded by the query's source element. |
| [wasEagerLoaded](#waseagerloaded) | Returns whether the query results were already eager loaded by the query's source element. |
| [with](#with) | Causes the query to return matching orders eager-loaded with related elements. |
| [withAddresses](#withaddresses) | Eager loads the shipping and billing addressees on the resulting orders. |
| [withAdjustments](#withadjustments) | Eager loads the order adjustments on the resulting orders. |
| [withAll](#withall) | Eager loads all relational data (addresses, adjustments, customers, line items, transactions) for the resulting orders. |
| [withCustomFields](#withcustomfields) | Sets whether custom fields should be factored into the query. |
| [withCustomer](#withcustomer) | Eager loads the user on the resulting orders. |
| [withLineItems](#withlineitems) | Eager loads the line items on the resulting orders. |
| [withProvisionalDrafts](#withprovisionaldrafts) | Causes the query to return provisional drafts for the matching elements, when they exist for the current user. |
| [withTransactions](#withtransactions) | Eager loads the transactions on the resulting orders. |

#### [#](#andnotrelatedto)`andNotRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andnotrelatedto)

Narrows the query results to only orders that are not related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/5.x/system/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all orders that are related to myCategoryA and not myCategoryB #}
{% set orders = craft.orders()
  .relatedTo(myCategoryA)
  .andNotRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all orders that are related to $myCategoryA and not $myCategoryB
$orders = \craft\commerce\elements\Order::find()
    ->relatedTo($myCategoryA)
    ->andNotRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andrelatedto)`andRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andrelatedto)

Narrows the query results to only orders that are related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/5.x/system/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all orders that are related to myCategoryA and myCategoryB #}
{% set orders = craft.orders()
  .relatedTo(myCategoryA)
  .andRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all orders that are related to $myCategoryA and $myCategoryB
$orders = \craft\commerce\elements\Order::find()
    ->relatedTo($myCategoryA)
    ->andRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andwith)`andWith`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andwith)

Causes the query to return matching orders eager-loaded with related elements, in addition to the elements that were already specified by [with](#with).

.

#### [#](#asarray)`asArray`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-asarray)

Causes the query to return matching orders as arrays of data, rather than [Order  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-order.html) objects.

TwigPHP

```
{# Fetch orders as arrays #}
{% set orders = craft.orders()
  .asArray()
  .all() %}
```

```
// Fetch orders as arrays
$orders = \craft\commerce\elements\Order::find()
    ->asArray()
    ->all();
```

#### [#](#cache)`cache`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-cache)

Enables query cache for this Query.

#### [#](#canonicalsonly)`canonicalsOnly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-canonicalsonly)

Narrows the query results to only canonical elements, including elements
that reference another canonical element via `canonicalId` so long as they
aren’t a draft.

Unpublished drafts can be included as well if `drafts(null)` and
`draftOf(false)` are also passed.

#### [#](#clearcachedresult)`clearCachedResult`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-clearcachedresult)

Clears the [cached result  (opens new window)](https://craftcms.com/docs/5.x/development/element-queries#cache).

#### [#](#collectids)`collectIds`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-collectids)

Executes the query and returns the IDs of the resulting elements as a collection.

#### [#](#couponcode)`couponCode`

Narrows the query results based on the order's coupon code.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `':empty:'` | that don’t have a coupon code. |
| `':notempty:'` | that have a coupon code. |
| `'Foo'` | with a coupon code of `Foo`. |
| `'Foo*'` | with a coupon code that begins with `Foo`. |
| `'*Foo'` | with a coupon code that ends with `Foo`. |
| `'*Foo*'` | with a coupon code that contains `Foo`. |
| `'not *Foo*'` | with a coupon code that doesn’t contain `Foo`. |
| `['*Foo*', '*Bar*']` | with a coupon code that contains `Foo` or `Bar`. |
| `['not', '*Foo*', '*Bar*']` | with a coupon code that doesn’t contain `Foo` or `Bar`. |

TwigPHP

```
{# Fetch the requested order #}
{% set order = craft.orders()
  .reference('foo')
  .one() %}
```

```
// Fetch the requested order
$order = \craft\commerce\elements\Order::find()
    ->reference('foo')
    ->one();
```

#### [#](#customer)`customer`

Narrows the query results based on the customer’s user account.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `1` | with a customer with a user account ID of 1. |
| a [User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html) object | with a customer with a user account represented by the object. |
| `'not 1'` | not the user account with an ID 1. |
| `[1, 2]` | with an user account ID of 1 or 2. |
| `['not', 1, 2]` | not with a user account ID of 1 or 2. |

TwigPHP

```
{# Fetch the current user's orders #}
{% set orders = craft.orders()
  .customer(currentUser)
  .all() %}
```

```
// Fetch the current user's orders
$user = Craft::$app->user->getIdentity();
$orders = \craft\commerce\elements\Order::find()
    ->customer($user)
    ->all();
```

#### [#](#customerid)`customerId`

Narrows the query results based on the customer, per their user ID.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `1` | with a user with an ID of 1. |
| `'not 1'` | not with a user with an ID of 1. |
| `[1, 2]` | with a user with an ID of 1 or 2. |
| `['not', 1, 2]` | not with a user with an ID of 1 or 2. |

TwigPHP

```
{# Fetch the current user's orders #}
{% set orders = craft.orders()
  .customerId(currentUser.id)
  .all() %}
```

```
// Fetch the current user's orders
$user = Craft::$app->user->getIdentity();
$orders = \craft\commerce\elements\Order::find()
    ->customerId($user->id)
    ->all();
```

#### [#](#dateauthorized)`dateAuthorized`

Narrows the query results based on the orders’ authorized dates.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'>= 2018-04-01'` | that were authorized on or after 2018-04-01. |
| `'< 2018-05-01'` | that were authorized before 2018-05-01 |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were completed between 2018-04-01 and 2018-05-01. |

TwigPHP

```
{# Fetch orders that were authorized recently #}
{% set aWeekAgo = date('7 days ago')|atom %}

{% set orders = craft.orders()
  .dateAuthorized(">= #{aWeekAgo}")
  .all() %}
```

```
// Fetch orders that were authorized recently
$aWeekAgo = new \DateTime('7 days ago')->format(\DateTime::ATOM);

$orders = \craft\commerce\elements\Order::find()
    ->dateAuthorized(">= {$aWeekAgo}")
    ->all();
```

#### [#](#datecreated)`dateCreated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-datecreated)

Narrows the query results based on the orders’ creation dates.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'>= 2018-04-01'` | that were created on or after 2018-04-01. |
| `'< 2018-05-01'` | that were created before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were created between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were created at midnight of the specified relative date. |

TwigPHP

```
{# Fetch orders created last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set orders = craft.orders()
  .dateCreated(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch orders created last month
$start = (new \DateTime('first day of last month'))->format(\DateTime::ATOM);
$end = (new \DateTime('first day of this month'))->format(\DateTime::ATOM);

$orders = \craft\commerce\elements\Order::find()
    ->dateCreated(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#datefirstpaid)`dateFirstPaid`

Narrows the query results based on the orders’ first paid dates.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'>= 2018-04-01'` | that were first paid on or after 2018-04-01. |
| `'< 2018-05-01'` | that were first paid before 2018-05-01 |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were first paid between 2018-04-01 and 2018-05-01. |

TwigPHP

```
{# Fetch orders that were first paid for recently #}
{% set aWeekAgo = date('7 days ago')|atom %}

{% set orders = craft.orders()
  .dateFirstPaid(">= #{aWeekAgo}")
  .all() %}
```

```
// Fetch orders that were first paid for recently
$aWeekAgo = new \DateTime('7 days ago')->format(\DateTime::ATOM);

$orders = \craft\commerce\elements\Order::find()
    ->dateFirstPaid(">= {$aWeekAgo}")
    ->all();
```

#### [#](#dateordered)`dateOrdered`

Narrows the query results based on the orders’ completion dates.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'>= 2018-04-01'` | that were completed on or after 2018-04-01. |
| `'< 2018-05-01'` | that were completed before 2018-05-01 |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were completed between 2018-04-01 and 2018-05-01. |

TwigPHP

```
{# Fetch orders that were completed recently #}
{% set aWeekAgo = date('7 days ago')|atom %}

{% set orders = craft.orders()
  .dateOrdered(">= #{aWeekAgo}")
  .all() %}
```

```
// Fetch orders that were completed recently
$aWeekAgo = new \DateTime('7 days ago')->format(\DateTime::ATOM);

$orders = \craft\commerce\elements\Order::find()
    ->dateOrdered(">= {$aWeekAgo}")
    ->all();
```

#### [#](#datepaid)`datePaid`

Narrows the query results based on the orders’ paid dates.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'>= 2018-04-01'` | that were paid on or after 2018-04-01. |
| `'< 2018-05-01'` | that were paid before 2018-05-01 |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were paid between 2018-04-01 and 2018-05-01. |

TwigPHP

```
{# Fetch orders that were paid for recently #}
{% set aWeekAgo = date('7 days ago')|atom %}

{% set orders = craft.orders()
  .datePaid(">= #{aWeekAgo}")
  .all() %}
```

```
// Fetch orders that were paid for recently
$aWeekAgo = new \DateTime('7 days ago')->format(\DateTime::ATOM);

$orders = \craft\commerce\elements\Order::find()
    ->datePaid(">= {$aWeekAgo}")
    ->all();
```

#### [#](#dateupdated)`dateUpdated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-dateupdated)

Narrows the query results based on the orders’ last-updated dates.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'>= 2018-04-01'` | that were updated on or after 2018-04-01. |
| `'< 2018-05-01'` | that were updated before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were updated between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were updated at midnight of the specified relative date. |

TwigPHP

```
{# Fetch orders updated in the last week #}
{% set lastWeek = date('1 week ago')|atom %}

{% set orders = craft.orders()
  .dateUpdated(">= #{lastWeek}")
  .all() %}
```

```
// Fetch orders updated in the last week
$lastWeek = (new \DateTime('1 week ago'))->format(\DateTime::ATOM);

$orders = \craft\commerce\elements\Order::find()
    ->dateUpdated(">= {$lastWeek}")
    ->all();
```

#### [#](#eagerly)`eagerly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-eagerly)

Causes the query to be used to eager-load results for the query’s source element
and any other elements in its collection.

#### [#](#email)`email`

Narrows the query results based on the customers’ email addresses.

Possible values include:

| Value | Fetches orders with customers… |
| --- | --- |
| `'foo@bar.baz'` | with an email of `foo@bar.baz`. |
| `'not foo@bar.baz'` | not with an email of `foo@bar.baz`. |
| `'*@bar.baz'` | with an email that ends with `@bar.baz`. |

TwigPHP

```
{# Fetch orders from customers with a .co.uk domain on their email address #}
{% set orders = craft.orders()
  .email('*.co.uk')
  .all() %}
```

```
// Fetch orders from customers with a .co.uk domain on their email address
$orders = \craft\commerce\elements\Order::find()
    ->email('*.co.uk')
    ->all();
```

#### [#](#expirydate)`expiryDate`

Narrows the query results based on the orders’ expiry dates.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'>= 2020-04-01'` | that will expire on or after 2020-04-01. |
| `'< 2020-05-01'` | that will expire before 2020-05-01 |
| `['and', '>= 2020-04-04', '< 2020-05-01']` | that will expire between 2020-04-01 and 2020-05-01. |

TwigPHP

```
{# Fetch orders expiring this month #}
{% set nextMonth = date('first day of next month')|atom %}

{% set orders = craft.orders()
  .expiryDate("< #{nextMonth}")
  .all() %}
```

```
// Fetch orders expiring this month
$nextMonth = new \DateTime('first day of next month')->format(\DateTime::ATOM);

$orders = \craft\commerce\elements\Order::find()
    ->expiryDate("< {$nextMonth}")
    ->all();
```

#### [#](#fixedorder)`fixedOrder`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-fixedorder)

Causes the query results to be returned in the order specified by [id](#id).

If no IDs were passed to [id](#id), setting this to `true` will result in an empty result set.

TwigPHP

```
{# Fetch orders in a specific order #}
{% set orders = craft.orders()
  .id([1, 2, 3, 4, 5])
  .fixedOrder()
  .all() %}
```

```
// Fetch orders in a specific order
$orders = \craft\commerce\elements\Order::find()
    ->id([1, 2, 3, 4, 5])
    ->fixedOrder()
    ->all();
```

#### [#](#gateway)`gateway`

Narrows the query results based on the gateway.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| a [Gateway  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-base-gateway.html) object | with a gateway represented by the object. |

#### [#](#gatewayid)`gatewayId`

Narrows the query results based on the gateway, per its ID.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `1` | with a gateway with an ID of 1. |
| `'not 1'` | not with a gateway with an ID of 1. |
| `[1, 2]` | with a gateway with an ID of 1 or 2. |
| `['not', 1, 2]` | not with a gateway with an ID of 1 or 2. |

#### [#](#getfieldlayouts)`getFieldLayouts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-getfieldlayouts)

Returns the field layouts that could be associated with the resulting elements.

#### [#](#haslineitems)`hasLineItems`

Narrows the query results to only orders that have line items.

TwigPHP

```
{# Fetch orders that do or do not have line items #}
{% set orders = craft.orders()
  .hasLineItems()
  .all() %}
```

```
// Fetch unpaid orders
$orders = \craft\commerce\elements\Order::find()
    ->hasLineItems()
    ->all();
```

#### [#](#haspurchasables)`hasPurchasables`

Narrows the query results to only orders that have certain purchasables.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| a [PurchasableInterface  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-base-purchasableinterface.html) object | with a purchasable represented by the object. |
| an array of [PurchasableInterface  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-base-purchasableinterface.html) objects | with all the purchasables represented by the objects. |

#### [#](#hastransactions)`hasTransactions`

Narrows the query results to only carts that have at least one transaction.

TwigPHP

```
{# Fetch carts that have attempted payments #}
{% set orders = craft.orders()
  .hasTransactions()
  .all() %}
```

```
// Fetch carts that have attempted payments
$orders = \craft\commerce\elements\Order::find()
    ->hasTransactions()
    ->all();
```

#### [#](#id)`id`

#### [#](#ignoreplaceholders)`ignorePlaceholders`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-ignoreplaceholders)

Causes the query to return matching orders as they are stored in the database, ignoring matching placeholder
elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement).

#### [#](#inbulkop)`inBulkOp`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inbulkop)

Narrows the query results to only orders that were involved in a bulk element operation.

#### [#](#inreverse)`inReverse`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inreverse)

Causes the query results to be returned in reverse order.

TwigPHP

```
{# Fetch orders in reverse #}
{% set orders = craft.orders()
  .inReverse()
  .all() %}
```

```
// Fetch orders in reverse
$orders = \craft\commerce\elements\Order::find()
    ->inReverse()
    ->all();
```

#### [#](#iscompleted)`isCompleted`

Narrows the query results to only orders that are completed.

TwigPHP

```
{# Fetch completed orders #}
{% set orders = craft.orders()
  .isCompleted()
  .all() %}
```

```
// Fetch completed orders
$orders = \craft\commerce\elements\Order::find()
    ->isCompleted()
    ->all();
```

#### [#](#ispaid)`isPaid`

Narrows the query results to only orders that are paid.

TwigPHP

```
{# Fetch paid orders #}
{% set orders = craft.orders()
  .isPaid()
  .all() %}
```

```
// Fetch paid orders
$orders = \craft\commerce\elements\Order::find()
    ->isPaid()
    ->all();
```

#### [#](#isunpaid)`isUnpaid`

Narrows the query results to only orders that are not paid.

TwigPHP

```
{# Fetch unpaid orders #}
{% set orders = craft.orders()
  .isUnpaid()
  .all() %}
```

```
// Fetch unpaid orders
$orders = \craft\commerce\elements\Order::find()
    ->isUnpaid()
    ->all();
```

#### [#](#itemsubtotal)`itemSubtotal`

Narrows the query results based on the order’s item subtotal.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `100` | with an item subtotal of 0. |
| `'< 1000000'` | with an item subtotal of less than ,000,000. |
| `['>= 10', '< 100']` | with an item subtotal of between and 0. |

#### [#](#itemtotal)`itemTotal`

Narrows the query results based on the order’s item total.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `100` | with an item total of 0. |
| `'< 1000000'` | with an item total of less than ,000,000. |
| `['>= 10', '< 100']` | with an item total of between and 0. |

#### [#](#language)`language`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-language)

Determines which site(s) the orders should be queried in, based on their language.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'en'` | from sites with a language of `en`. |
| `['en-GB', 'en-US']` | from sites with a language of `en-GB` or `en-US`. |
| `['not', 'en-GB', 'en-US']` | not in sites with a language of `en-GB` or `en-US`. |

Elements that belong to multiple sites will be returned multiple times by default. If you
only want unique elements to be returned, use [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) in conjunction with this.

TwigPHP

```
{# Fetch orders from English sites #}
{% set orders = craft.orders()
  .language('en')
  .all() %}
```

```
// Fetch orders from English sites
$orders = \craft\commerce\elements\Order::find()
    ->language('en')
    ->all();
```

#### [#](#limit)`limit`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#limit()-detail)

Determines the number of orders that should be returned.

TwigPHP

```
{# Fetch up to 10 orders  #}
{% set orders = craft.orders()
  .limit(10)
  .all() %}
```

```
// Fetch up to 10 orders
$orders = \craft\commerce\elements\Order::find()
    ->limit(10)
    ->all();
```

#### [#](#notrelatedto)`notRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-notrelatedto)

Narrows the query results to only orders that are not related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/5.x/system/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all orders that are related to myEntry #}
{% set orders = craft.orders()
  .notRelatedTo(myEntry)
  .all() %}
```

```
// Fetch all orders that are related to $myEntry
$orders = \craft\commerce\elements\Order::find()
    ->notRelatedTo($myEntry)
    ->all();
```

#### [#](#number)`number`

Narrows the query results based on the order number.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'` | with a matching order number |

TwigPHP

```
{# Fetch the requested order #}
{% set orderNumber = craft.app.request.getQueryParam('number') %}
{% set order = craft.orders()
  .number(orderNumber)
  .one() %}
```

```
// Fetch the requested order
$orderNumber = Craft::$app->request->getQueryParam('number');
$order = \craft\commerce\elements\Order::find()
    ->number($orderNumber)
    ->one();
```

#### [#](#offset)`offset`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#offset()-detail)

Determines how many orders should be skipped in the results.

TwigPHP

```
{# Fetch all orders except for the first 3 #}
{% set orders = craft.orders()
  .offset(3)
  .all() %}
```

```
// Fetch all orders except for the first 3
$orders = \craft\commerce\elements\Order::find()
    ->offset(3)
    ->all();
```

#### [#](#orderby)`orderBy`

Determines the order that the orders should be returned in. (If empty, defaults to `id ASC`.)

TwigPHP

```
{# Fetch all orders in order of date created #}
{% set orders = craft.orders()
  .orderBy('dateCreated ASC')
  .all() %}
```

```
// Fetch all orders in order of date created
$orders = \craft\commerce\elements\Order::find()
    ->orderBy('dateCreated ASC')
    ->all();
```

#### [#](#orderlanguage)`orderLanguage`

Narrows the query results based on the order language, per the language string provided.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'en'` | with an order language that is `'en'`. |
| `'not en'` | not with an order language that is not `'en'`. |
| `['en', 'en-us']` | with an order language that is `'en'` or `'en-us'`. |
| `['not', 'en']` | not with an order language that is not `'en'`. |

TwigPHP

```
{# Fetch orders with an order language that is `'en'` #}
{% set orders = craft.orders()
  .orderLanguage('en')
  .all() %}
```

```
// Fetch orders with an order language that is `'en'`
$orders = \craft\commerce\elements\Order::find()
    ->orderLanguage('en')
    ->all();
```

#### [#](#ordersiteid)`orderSiteId`

Narrows the query results based on the order language, per the language string provided.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `1` | with an order site ID of 1. |
| `'not 1'` | not with an order site ID that is no 1. |
| `[1, 2]` | with an order site ID of 1 or 2. |
| `['not', 1, 2]` | not with an order site ID of 1 or 2. |

TwigPHP

```
{# Fetch orders with an order site ID of 1 #}
{% set orders = craft.orders()
  .orderSiteId(1)
  .all() %}
```

```
// Fetch orders with an order site ID of 1
$orders = \craft\commerce\elements\Order::find()
    ->orderSiteId(1)
    ->all();
```

#### [#](#orderstatus)`orderStatus`

Narrows the query results based on the order statuses.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'foo'` | with an order status with a handle of `foo`. |
| `'not foo'` | not with an order status with a handle of `foo`. |
| `['foo', 'bar']` | with an order status with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not with an order status with a handle of `foo` or `bar`. |
| a [OrderStatus  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-orderstatus.html) object | with an order status represented by the object. |

TwigPHP

```
{# Fetch shipped orders #}
{% set orders = craft.orders()
  .orderStatus('shipped')
  .all() %}
```

```
// Fetch shipped orders
$orders = \craft\commerce\elements\Order::find()
    ->orderStatus('shipped')
    ->all();
```

#### [#](#orderstatusid)`orderStatusId`

Narrows the query results based on the order statuses, per their IDs.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `1` | with an order status with an ID of 1. |
| `'not 1'` | not with an order status with an ID of 1. |
| `[1, 2]` | with an order status with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an order status with an ID of 1 or 2. |

TwigPHP

```
{# Fetch orders with an order status with an ID of 1 #}
{% set orders = craft.orders()
  .orderStatusId(1)
  .all() %}
```

```
// Fetch orders with an order status with an ID of 1
$orders = \craft\commerce\elements\Order::find()
    ->orderStatusId(1)
    ->all();
```

#### [#](#origin)`origin`

Narrows the query results based on the origin.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'web'` | with an origin of `web`. |
| `'not remote'` | not with an origin of `remote`. |
| `['web', 'cp']` | with an order origin of `web` or `cp`. |
| `['not', 'remote', 'cp']` | not with an origin of `web` or `cp`. |

TwigPHP

```
{# Fetch shipped orders #}
{% set orders = craft.orders()
  .origin('web')
  .all() %}
```

```
// Fetch shipped orders
$orders = \craft\commerce\elements\Order::find()
    ->origin('web')
    ->all();
```

#### [#](#prefersites)`preferSites`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prefersites)

If [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) is set, this determines which site should be selected when querying multi-site elements.

For example, if element “Foo” exists in Site A and Site B, and element “Bar” exists in Site B and Site C,
and this is set to `['c', 'b', 'a']`, then Foo will be returned for Site B, and Bar will be returned
for Site C.

If this isn’t set, then preference goes to the current site.

TwigPHP

```
{# Fetch unique orders from Site A, or Site B if they don’t exist in Site A #}
{% set orders = craft.orders()
  .site('*')
  .unique()
  .preferSites(['a', 'b'])
  .all() %}
```

```
// Fetch unique orders from Site A, or Site B if they don’t exist in Site A
$orders = \craft\commerce\elements\Order::find()
    ->site('*')
    ->unique()
    ->preferSites(['a', 'b'])
    ->all();
```

#### [#](#prepforeagerloading)`prepForEagerLoading`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prepforeagerloading)

Prepares the query for lazy eager loading.

#### [#](#preparesubquery)`prepareSubquery`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-preparesubquery)

Prepares the element query and returns its subquery (which determines what elements will be returned).

#### [#](#reference)`reference`

Narrows the query results based on the order reference.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'Foo'` | with a reference of `Foo`. |
| `'Foo*'` | with a reference that begins with `Foo`. |
| `'*Foo'` | with a reference that ends with `Foo`. |
| `'*Foo*'` | with a reference that contains `Foo`. |
| `'not *Foo*'` | with a reference that doesn’t contain `Foo`. |
| `['*Foo*', '*Bar*']` | with a reference that contains `Foo` or `Bar`. |
| `['not', '*Foo*', '*Bar*']` | with a reference that doesn’t contain `Foo` or `Bar`. |

TwigPHP

```
{# Fetch the requested order #}
{% set orderReference = craft.app.request.getQueryParam('ref') %}
{% set order = craft.orders()
  .reference(orderReference)
  .one() %}
```

```
// Fetch the requested order
$orderReference = Craft::$app->request->getQueryParam('ref');
$order = \craft\commerce\elements\Order::find()
    ->reference($orderReference)
    ->one();
```

#### [#](#relatedto)`relatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-relatedto)

Narrows the query results to only orders that are related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/5.x/system/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all orders that are related to myCategory #}
{% set orders = craft.orders()
  .relatedTo(myCategory)
  .all() %}
```

```
// Fetch all orders that are related to $myCategory
$orders = \craft\commerce\elements\Order::find()
    ->relatedTo($myCategory)
    ->all();
```

#### [#](#render)`render`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-render)

Executes the query and renders the resulting elements using their partial templates.

If no partial template exists for an element, its string representation will be output instead.

#### [#](#search)`search`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-search)

Narrows the query results to only orders that match a search query.

See [Searching  (opens new window)](https://craftcms.com/docs/5.x/system/searching) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Get the search query from the 'q' query string param #}
{% set searchQuery = craft.app.request.getQueryParam('q') %}

{# Fetch all orders that match the search query #}
{% set orders = craft.orders()
  .search(searchQuery)
  .all() %}
```

```
// Get the search query from the 'q' query string param
$searchQuery = \Craft::$app->request->getQueryParam('q');

// Fetch all orders that match the search query
$orders = \craft\commerce\elements\Order::find()
    ->search($searchQuery)
    ->all();
```

#### [#](#shippingmethodhandle)`shippingMethodHandle`

Narrows the query results based on the shipping method handle.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'foo'` | with a shipping method with a handle of `foo`. |
| `'not foo'` | not with a shipping method with a handle of `foo`. |
| `['foo', 'bar']` | with a shipping method with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not with a shipping method with a handle of `foo` or `bar`. |
| a `\craft\commerce\elements\db\ShippingMethod` object | with a shipping method represented by the object. |

TwigPHP

```
{# Fetch collection shipping method orders #}
{% set orders = craft.orders()
  .shippingMethodHandle('collection')
  .all() %}
```

```
// Fetch collection shipping method orders
$orders = \craft\commerce\elements\Order::find()
    ->shippingMethodHandle('collection')
    ->all();
```

#### [#](#shortnumber)`shortNumber`

Narrows the query results based on the order short number.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `'xxxxxxx'` | with a matching order number |

TwigPHP

```
{# Fetch the requested order #}
{% set orderNumber = craft.app.request.getQueryParam('shortNumber') %}
{% set order = craft.orders()
  .shortNumber(orderNumber)
  .one() %}
```

```
// Fetch the requested order
$orderNumber = Craft::$app->request->getQueryParam('shortNumber');
$order = \craft\commerce\elements\Order::find()
    ->shortNumber($orderNumber)
    ->one();
```

#### [#](#sitesettingsid)`siteSettingsId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-sitesettingsid)

Narrows the query results based on the orders’ IDs in the `elements_sites` table.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `1` | with an `elements_sites` ID of 1. |
| `'not 1'` | not with an `elements_sites` ID of 1. |
| `[1, 2]` | with an `elements_sites` ID of 1 or 2. |
| `['not', 1, 2]` | not with an `elements_sites` ID of 1 or 2. |

TwigPHP

```
{# Fetch the order by its ID in the elements_sites table #}
{% set order = craft.orders()
  .siteSettingsId(1)
  .one() %}
```

```
// Fetch the order by its ID in the elements_sites table
$order = \craft\commerce\elements\Order::find()
    ->siteSettingsId(1)
    ->one();
```

#### [#](#storeid)`storeId`

Narrows the query results to only orders that are related to the given store.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `1` | with a `storeId` of `1`. |

#### [#](#total)`total`

Narrows the query results based on the total.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `10` | with a total price of . |
| `['and', 10, 20]` | an order with a total of or . |

#### [#](#totaldiscount)`totalDiscount`

Narrows the query results based on the total discount.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `10` | with a total discount of 10. |
| `[10, 20]` | an order with a total discount of 10 or 20. |

#### [#](#totalpaid)`totalPaid`

Narrows the query results based on the total paid amount.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `10` | with a total paid amount of . |
| `['and', 10, 20]` | an order with a total paid amount of or . |

#### [#](#totalprice)`totalPrice`

Narrows the query results based on the total price.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `10` | with a total price of . |
| `['and', 10, 20]` | an order with a total price of or . |

#### [#](#totalqty)`totalQty`

Narrows the query results based on the total qty of items.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `10` | with a total qty of 10. |
| `[10, 20]` | an order with a total qty of 10 or 20. |

#### [#](#totaltax)`totalTax`

Narrows the query results based on the total tax.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `10` | with a total tax of 10. |
| `[10, 20]` | an order with a total tax of 10 or 20. |

#### [#](#totalweight)`totalWeight`

Narrows the query results based on the total weight of items.

Possible values include:

| Value | Fetches orders… |
| --- | --- |
| `10` | with a total weight of 10. |
| `[10, 20]` | an order with a total weight of 10 or 20. |

#### [#](#trashed)`trashed`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-trashed)

Narrows the query results to only orders that have been soft-deleted.

TwigPHP

```
{# Fetch trashed orders #}
{% set orders = craft.orders()
  .trashed()
  .all() %}
```

```
// Fetch trashed orders
$orders = \craft\commerce\elements\Order::find()
    ->trashed()
    ->all();
```

#### [#](#uid)`uid`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-uid)

Narrows the query results based on the orders’ UIDs.

TwigPHP

```
{# Fetch the order by its UID #}
{% set order = craft.orders()
  .uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
  .one() %}
```

```
// Fetch the order by its UID
$order = \craft\commerce\elements\Order::find()
    ->uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
    ->one();
```

#### [#](#wascounteagerloaded)`wasCountEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-wascounteagerloaded)

Returns whether the query result count was already eager loaded by the query's source element.

#### [#](#waseagerloaded)`wasEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-waseagerloaded)

Returns whether the query results were already eager loaded by the query's source element.

#### [#](#with)`with`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-with)

Causes the query to return matching orders eager-loaded with related elements.

See [Eager-Loading Elements  (opens new window)](https://craftcms.com/docs/5.x/development/eager-loading) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch orders eager-loaded with the "Related" field’s relations #}
{% set orders = craft.orders()
  .with(['related'])
  .all() %}
```

```
// Fetch orders eager-loaded with the "Related" field’s relations
$orders = \craft\commerce\elements\Order::find()
    ->with(['related'])
    ->all();
```

#### [#](#withaddresses)`withAddresses`

Eager loads the shipping and billing addressees on the resulting orders.

Possible values include:

| Value | Fetches addresses |
| --- | --- |
| bool | `true` to eager-load, `false` to not eager load. |

#### [#](#withadjustments)`withAdjustments`

Eager loads the order adjustments on the resulting orders.

Possible values include:

| Value | Fetches adjustments |
| --- | --- |
| bool | `true` to eager-load, `false` to not eager load. |

#### [#](#withall)`withAll`

Eager loads all relational data (addresses, adjustments, customers, line items, transactions) for the resulting orders.

Possible values include:

| Value | Fetches addresses, adjustments, customers, line items, transactions |
| --- | --- |
| bool | `true` to eager-load, `false` to not eager load. |

#### [#](#withcustomfields)`withCustomFields`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-withcustomfields)

Sets whether custom fields should be factored into the query.

#### [#](#withcustomer)`withCustomer`

Eager loads the user on the resulting orders.

Possible values include:

| Value | Fetches adjustments |
| --- | --- |
| bool | `true` to eager-load, `false` to not eager load. |

#### [#](#withlineitems)`withLineItems`

Eager loads the line items on the resulting orders.

Possible values include:

| Value | Fetches line items |
| --- | --- |
| bool | `true` to eager-load, `false` to not eager load. |

#### [#](#withprovisionaldrafts)`withProvisionalDrafts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-withprovisionaldrafts)

Causes the query to return provisional drafts for the matching elements,
when they exist for the current user.

#### [#](#withtransactions)`withTransactions`

Eager loads the transactions on the resulting orders.

Possible values include:

| Value | Fetches transactions… |
| --- | --- |
| bool | `true` to eager-load, `false` to not eager load. |

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)

Parts of this page are generated or assembled by automations. While we greatly appreciate contributions to the documentation, [reporting automated content issues](https://github.com/craftcms/docs/issues/new/choose) will allow us to fix them at the source!
