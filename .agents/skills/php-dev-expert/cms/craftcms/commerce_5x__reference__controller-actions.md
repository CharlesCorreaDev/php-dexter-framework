# Controller Actions | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/reference/controller-actions

---

# Controller Actions

- ### On this Page

  - [Available Actions](commerce_5x__reference__controller-actions.md#available-actions)

Commerce exposes a number of common resources to your storefront via an HTTP API.

We recommend reviewing the main Craft documentation on [forms and controller actions](https://craftcms.com/docs/5.x/development/forms) before you dig in, here!

## [#](#available-actions)Available Actions

| Methods | Action | Description |
| --- | --- | --- |
| POST | [cart/complete](#post-cart-complete) | Completes an order without payment. |
| GET | [cart/get-cart](#get-cart-get-cart) | Returns the current cart as JSON. |
| GET/POST | [cart/load-cart](#get-post-cart-load-cart) | Loads a cookie for the given cart. |
| POST | [cart/forget-cart](#get-post-cart-forget-cart) | Removes a cookie for the current cart. |
| POST | [cart/update-cart](#post-cart-update-cart) | Manage a customer’s current [cart](commerce_5x__system__orders-carts.md). |
| POST | [payment-sources/add](#post-payment-sources-add) | Creates a new payment source. |
| POST | [payment-sources/delete](#post-payment-sources-delete) | Deletes a payment source. |
| GET | [payments/complete-payment](#get-payments-complete-payment) | Processes customer’s return from an off-site payment. |
| POST | [payments/pay](#post-payments-pay) | Makes a payment on an order. |
| GET | [downloads/pdf](#get-downloads-pdf) | Returns an order PDF as a file. |
| POST | [subscriptions/subscribe](#post-subscriptions-subscribe) | Starts a new subscription. |
| POST | [subscriptions/cancel](#post-subscriptions-cancel) | Cancels an active subscription. |
| POST | [subscriptions/switch](#post-subscriptions-switch) | Switch an active subscription’s plan. |
| POST | [subscriptions/reactivate](#post-subscriptions-reactivate) | Reactivates a canceled subscription. |

[Address management](https://craftcms.com/docs/5.x/reference/element-types/addresses.md/#managing-addresses) actions are part of the main Craft documentation. Commerce also allows address information to be set directly on a cart via POST [cart/update-cart](#post-cart-update-cart).

### [#](#post-cart-complete)POST `cart/complete`

You can let your customers complete an order without a payment transaction. At a minimum, the **Allow Checkout Without Payment** [setting](commerce_5x__system__stores.md#settings) setting must be enabled for the cart’s store, or an HTTP exception will be thrown.

See the [Making Payments](commerce_5x__development__making-payments.md#checkout-without-payment) page for more information about this action’s requirements.

#### [#](#supported-params)Supported Params

| Param | Description |
| --- | --- |
| `forceSave` | Optionally set to `true` to force saving the cart. |
| `number` | Optional order number for a specific, existing cart. |
| `registerUserOnOrderComplete` | Whether to create a user account for the customer when the cart is completed and turned into an order. |

#### [#](#response)Response

The output of the action depends on whether the cart was completed successfully and the `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); cart data is available under a key determined by the [cartVariable](commerce_5x__configure.md#cartvariable) config setting. |
|  | [Standard behavior][after-fauilure]; cart is available in the template under a variable determined by the [cartVariable](commerce_5x__configure.md#cartvariable). | [Standard behavior][after-fauilure]; cart data is available under a key determined by the [cartVariable](commerce_5x__configure.md#cartvariable) config setting. |

### [#](#get-cart-get-cart)GET `cart/get-cart`

Returns the [current cart](commerce_5x__development__cart.md) as JSON. A new cart cookie will be generated if one doesn’t already exist.

The request must include `Accept: application/json` in its headers.

#### [#](#supported-params-2)Supported Params

| Param | Description |
| --- | --- |
| `number` | Optional order number for a specific, existing cart. |
| `forceSave` | Optionally set to `true` to force saving the cart. |

#### [#](#response-2)Response

| State | `application/json` |
| --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); cart data is available under a key determined by the [cartVariable](commerce_5x__configure.md#cartvariable) config setting. |

### [#](#post-cart-update-cart)POST `cart/update-cart`

Updates the cart by [adding](commerce_5x__development__cart.md#adding-items) or [updating](commerce_5x__development__cart.md#updating-line-items) line items, and [setting addresses](commerce_5x__development__address-management.md) and other cart attributes.

#### [#](#supported-params-3)Supported Params

| Param | Description |
| --- | --- |
| `billingAddress[]` | Billing address attributes. |
| `billingAddressId` | ID of an existing address owned by the customer to copy into the cart’s billing address. |
| `billingAddressSameAsShipping` | Set to `true` to use shipping address for billing address. (Ignores billing address ID and fields; complement of `shippingAddressSameAsBilling`) |
| `clearNotices` | When passed, clears all cart notices. |
| `clearLineItems` | When passed, empties all line items from cart. |
| `couponCode` | Coupon code for a [discount](commerce_5x__system__discounts.md) that should be applied to the cart. |
| `email` | Email address to be associated with the cart. |
| `estimatedBillingAddress[]` | Estimated billing address attributes. |
| `estimatedShippingAddress[]` | Estimated shipping address attributes. |
| `estimatedBillingAddressSameAsShipping` | Set to `true` to use shipping address for estimated billing address. |
| `fields[]` | Optional array of [custom fields](https://craftcms.com/docs/5.x/development/forms#custom-fields) to be submitted to the cart. |
| `forceSave` | Optionally set to `true` to force saving the cart, even if no attributes changed. |
| `gatewayId` | The [payment gateway](commerce_5x__development__making-payments.md) ID to be used when the cart is completed. |
| `lineItems[]` | Array of one or more of the cart’s line items to update. Each must have an `id` key-value pair, and may include `options`, `note`, and `qty` key-value pairs. An item may include a `remove` key with a value of `1` or a `qty` of `0` to be removed from the cart. |
| `makePrimaryBillingAddress` | Set a source address (supplied via `billingAddressId`, or memoized via `sourceBillingAddressId`) as the customer’s primary/default *billing* address. |
| `makePrimaryShippingAddress` | Set a source address (supplied via `shippingAddressId`, or memoized via `sourceShippingAddressId`) as the customer’s primary/default *shipping* address. |
| `number` | Optional order number for specific, existing cart. The order must be owned by the current customer, or the request must be from a registered Craft user with the appropriate permission. |
| `paymentCurrency` | ISO code of a configured [payment currency](commerce_5x__system__currencies.md) to be used for the cart. |
| `paymentSourceId` | The ID for a [payment source](commerce_5x__development__saving-payment-sources.md) that should be used when the cart is completed. |
| `purchasableId` | Single purchasable ID to be added to the cart. If provided, will also use optional `note`, `options[]`, and `qty` parameters. |
| `purchasables[]` | Array of one or more purchasables to be [added to the cart](commerce_5x__development__cart.md#adding-items). Each requires an `id` field, and may include `options` (array), `note` (string), and `qty` (integer) fields. To update an existing line item, use the `lineItems[]` parameter. |
| `registerUserOnOrderComplete` | Whether to create a user account at [checkout](commerce_5x__development__checkout.md#registration). |
| `saveBillingAddressOnOrderComplete` | Whether to save the billing address to the customer’s address book at checkout. |
| `saveShippingAddressOnOrderComplete` | Whether to save the shipping address to the customer’s address book at checkout. |
| `saveAddressesOnOrderComplete` | Whether to save both the shipping *and* billing address to the customer’s address book at checkout. Unlike `saveBillingAddressOnOrderComplete` and `saveShippingAddressOnOrderComplete`, this is *not* stored on the order itself—it just allows customers to set both at the same time. |
| `shippingAddress[]` | Shipping address attributes. |
| `shippingAddressId` | ID of an existing address to use as the shipping address. |
| `shippingAddressSameAsBilling` | Set to `true` to use billing address for shipping address (and ignore `shippingAddress` and `shippingAddressId`). |
| `shippingMethodHandle` | The handle of a [shipping method](commerce_5x__system__shipping.md) to be set for the cart. |

#### [#](#response-3)Response

The output of the action depends on whether the cart was updated successfully and the `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); cart data is available under a key determined by the [cartVariable](commerce_5x__configure.md#cartvariable) config setting. |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure); cart data is available under a key determined by the [cartVariable](commerce_5x__configure.md#cartvariable) config setting. |

### [#](#get-post-cart-load-cart)GET/POST `cart/load-cart`

Loads a cookie for the specified cart.

#### [#](#supported-params-4)Supported Params

| Param | Description |
| --- | --- |
| `number` | Required cart number to be loaded. |

#### [#](#response-4)Response

The action’s output depends on whether the cart was loaded successfully and the `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); GET requests are redirected to the [loadCartRedirectUrl](commerce_5x__configure.md#loadcartredirecturl). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure); GET requests are redirected per the [loadCartRedirectUrl](commerce_5x__configure.md#loadcartredirecturl). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure). |

### [#](#post-cart-forget-cart)POST `cart/forget-cart`

Detaches a cart from the current customer’s session. Read more about [managing carts](commerce_5x__system__orders-carts.md#loading-and-forgetting-carts).

This action has no arguments and responses are only sent as `text/html`.

#### [#](#response-5)Response

| State | `text/html` |
| --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). |

### [#](#get-cart-get-cart-2)GET `cart/get-cart`

Returns the [current cart](commerce_5x__development__cart.md) as JSON. A new cart cookie will be generated if one doesn’t already exist.

The request must include `Accept: application/json` in its headers.

#### [#](#supported-params-5)Supported Params

| Param | Description |
| --- | --- |
| `number` | Optional order number for a specific, existing cart. |
| `forceSave` | Optionally set to `true` to force saving the cart. |

#### [#](#response-6)Response

| State | `application/json` |
| --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); cart data is available under a key determined by the [cartVariable](commerce_5x__configure.md#cartvariable) config setting. |

### [#](#post-payment-sources-add)POST `payment-sources/add`

Creates a new payment source for the current customer.

#### [#](#supported-params-6)Supported Params

| Param | Description |
| --- | --- |
| `*` | All body parameters will be provided directly to the gateway’s payment form model. |
| `description` | Description for the payment source. |
| `gatewayId` | ID of the new payment source’s gateway, which must support payment sources. |
| `isPrimaryPaymentSource` | Send a non-empty value to make this the customer’s primary payment source. |

#### [#](#response-7)Response

The action’s output depends on whether the payment source was saved and the `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); [PaymentSource  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-paymentsource.html) data available under the `paymentSource` key. |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure); [BasePaymentForm  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-payments-basepaymentform.html) subclass available in the template as `paymentForm`, | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure); payment form data available under the `paymentForm` key. |

Note that the models available in success and failure states are different!

### [#](#post-payment-sources-delete)POST `payment-sources/delete`

Deletes a payment source.

#### [#](#supported-params-7)Supported Params

| Param | Description |
| --- | --- |
| `id` | ID of the saved payment source to delete. (Must belong to the customer, otherwise the user deleting must have `commerce-manageOrders` permission.) |

#### [#](#response-8)Response

The action’s output depends on whether the payment source was removed successfully and the `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure). |

### [#](#post-payments-pay)POST `payments/pay`

Makes a payment on an order. Read more about [making payments](commerce_5x__development__making-payments.md).

#### [#](#supported-params-8)Supported Params

All body parameters will be provided directly to the gateway’s [payment form model](commerce_5x__development__making-payments.md#payment-form-models).

| Param | Description |
| --- | --- |
| `cancelUrl` | A [hashed](https://craftcms.com/docs/5.x/reference/twig/filters#hash) URL the customer is sent to if they cancel the payment, off-site. |
| `number` | The order number payment should be applied to. When omitted, payment is applied to the current cart. |
| `email` | Email address of the person responsible for payment, which must match the email address on the order. Required if the order being paid is not the active cart. |
| `gatewayId` | The payment gateway ID to be used for payment. |
| `paymentAmount` | Hashed payment amount, expressed in the cart’s `paymentCurrency`. Available only if [partial payments](commerce_5x__development__making-payments.md#checkout-with-partial-payment) are allowed. |
| `paymentCurrency` | ISO code of a configured [payment currency](commerce_5x__system__currencies.md) to be used for the payment. |
| `paymentSourceId` | The ID for a payment source that should be used for payment. |
| `registerUserOnOrderComplete` | Whether the customer should have an account created on order completion. |
| `savePaymentSource` | Whether to save card information as a payment source. (Gateway must support payment sources.) |
| `saveBillingAddressOnOrderComplete` | Whether to save the billing address to the customer’s address book when the cart is completed and turned into an order. |
| `saveShippingAddressOnOrderComplete` | Whether to save the shipping address to the customer’s address book when the cart is completed and turned into an order. |
| `saveAddressesOnOrderComplete` | Whether to save both the shipping *and* billing address to the customer’s address book when the cart is completed and turned into an order. |

#### [#](#response-9)Response

The action’s output depends on whether payment was applied successfully and `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); redirection defaults to the order’s `returnUrl`. | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); cart data is available under a key determined by the [cartVariable](commerce_5x__configure.md#cartvariable), as well as special `paymentForm`, `transactionId`, and `transactionHash` properties. |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure); cart is available in the template under a variable determined by the [cartVariable](commerce_5x__configure.md#cartvariable), as well as special `paymentForm` and `paymentFormErrors` variables. | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure); cart data is available under a key determined by the [cartVariable](commerce_5x__configure.md#cartvariable), as well as special `paymentForm` and `paymentFormErrors` properties. |

Both the cart *and* payment form models may have errors. Be sure and check all returned variables when a payment fails—the top-level `errors` key in JSON responses will only include errors from the payment form.

### [#](#get-payments-complete-payment)GET `payments/complete-payment`

Processes customer’s return from an off-site payment.

#### [#](#supported-params-9)Supported Params

| Param | Description |
| --- | --- |
| `commerceTransactionHash` | Required transaction hash used to verify the [off-site payment](commerce_5x__extend__payment-gateway-types.md#off-site-payment) being completed. |

#### [#](#response-10)Response

The action’s output depends on whether the payment completed successfully and the `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); redirection defaults to the order’s `returnUrl`. | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); special `url` property set to the order’s `returnUrl`. |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure); redirection defaults to the order’s `cancelUrl`. | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure); special `url` property set to the order’s `cancelUrl`. |

### [#](#get-downloads-pdf)GET `downloads/pdf`

Generates and sends an order [PDF](commerce_5x__system__pdfs.md) as a file.

#### [#](#supported-params-10)Supported Params

| Param | Description |
| --- | --- |
| `number` | Required order number. |
| `option` | Optional string value that’s passed to the PDF template. |
| `pdfHandle` | Handle of a configured PDF to be rendered. |

#### [#](#response-11)Response

| State | Output |
| --- | --- |
|  | File response with the rendered PDF and an `application/pdf` MIME type. |
|  | Exceptions will be rendered with the normal [error template](https://craftcms.com/docs/5.x/system/routing#error-templates). |

### [#](#post-subscriptions-subscribe)POST `subscriptions/subscribe`

Starts a new subscription with the current customer’s default payment source. Learn more about supporting [Subscriptions](commerce_5x__system__subscriptions.md).

We recommend using normal HTML forms and a `text/html` content type for this action, as the gateway *may* require redirection to resolve billing issues when a subscription cannot be started. This workflow can be problematic when using `application/json` over Ajax.

#### [#](#supported-params-11)Supported Params

| Param | Description |
| --- | --- |
| `planUid` | **Required.** UID of the Commerce plan the customer wants to subscribe to. |
| `fields[...]` | Subscription custom field values, indexed by their handles. |
| `fieldsLocation` | Allows relocation of the default `fields` key for custom field data (see above). |
| `*` | **Conditionally required.** Each [gateway](commerce_5x__system__gateways.md) that supports subscriptions may require additional properties on its [craft\commerce\models\subscriptions\SubscriptionForm  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-subscriptions-subscriptionform.html) subclass. |

`planUid` and all gateway-specific properties must be [hashed](https://craftcms.com/docs/5.x/reference/twig/filters#hash) to prevent tampering.

#### [#](#response-12)Response

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); the Subscription model is available under the `subscription` key. |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure). Most subscription failures will be presented as a succinct error message. Specific issues are logged, but may not be disclosed to the customer. The user may be redirected to the [`updateBillingDetailsUrl` setting](commerce_5x__configure.md#updatebillingdetailsurl) to resolve billing issues. | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure). |

### [#](#post-subscriptions-cancel)POST `subscriptions/cancel`

Cancels an active subscription.

#### [#](#supported-params-12)Supported Params

| Param | Description |
| --- | --- |
| `subscriptionUid` | **Required.** UID of the subscription to cancel. Must be [hashed](https://craftcms.com/docs/5.x/reference/twig/filters#hash). |
| `*` | **Conditionally required.** Each [gateway](commerce_5x__system__gateways.md) that supports subscriptions may require additional properties on its [craft\commerce\models\subscriptions\CancelSubscriptionForm  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-subscriptions-cancelsubscriptionform.html) subclass. |

#### [#](#response-13)Response

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); the Subscription model is available under the `subscription` key. |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure). |

### [#](#post-subscriptions-switch)POST `subscriptions/switch`

Switch the plan on an active subscription.

#### [#](#supported-params-13)Supported Params

| Param | Description |
| --- | --- |
| `subscriptionUid` | **Required.** UID of the subscription getting updated. Must be [hashed](https://craftcms.com/docs/5.x/reference/twig/filters#hash). |
| `planUid` | **Required.** UID of the plan to switch to. Must be [hashed](https://craftcms.com/docs/5.x/reference/twig/filters#hash). |
| `*` | **Conditionally required.** Each [gateway](commerce_5x__system__gateways.md) that supports subscriptions may require additional properties on its [craft\commerce\models\subscriptions\SwitchPlansForm  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-subscriptions-switchplansform.html) subclass. |

#### [#](#response-14)Response

The request may fail if the new and old plans are not compatible. This is determined by the gateway, so be sure and consult its documentation and platform limitations.

You can check whether two plans are compatible in Twig, to narrow the options displayed to your customers:

```
{% set currentPlan = subscription.getPlan() %}
{% set gateway = currentPlan.getGateway() %}
{% set allPlans = craft.commerce.plans.getPlansByGatewayId(gateway.id) %}
{% set switchablePlans = allPlans|filter((p) => p.canSwitchFrom(currentPlan)) %}

<select name="planUid">
  {% for plan in switchablePlans %}
    <option value="{{ plan.uid|hash }}">{{ plan.name }}</option>
  {% endfor %}
</select>
```

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); the Subscription model is available under the `subscription` key. |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#failure). |

### [#](#post-subscriptions-reactivate)POST `subscriptions/reactivate`

Reactivates a canceled subscription. Only subscriptions that haven’t expired yet can be reactivated—a subscription may be canceled

#### [#](#supported-params-14)Supported Params

| Param | Description |
| --- | --- |
| `subscriptionUid` | **Required.** UID of the subscription to reactivate. Must be [hashed](https://craftcms.com/docs/5.x/reference/twig/filters#hash). |

#### [#](#response-15)Response

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request); the Subscription model is available under the `subscription` key. |
|  | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). | [Standard behavior](https://craftcms.com/docs/5.x/development/forms#after-a-get-request). |

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/reference/controller-actions.md)
