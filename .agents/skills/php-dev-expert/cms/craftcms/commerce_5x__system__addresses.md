# Addresses | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/addresses

---

# Addresses

- ### On this Page

  - [How Addresses are Used](commerce_5x__system__addresses.md#how-addresses-are-used)
  - [Cart Addresses](commerce_5x__system__addresses.md#cart-addresses)
  - [Address Book](commerce_5x__system__addresses.md#address-book)

Addresses are now a native part of Craft! We recommend reviewing the [main documentation on addresses](https://craftcms.com/docs/5.x/reference/element-types/addresses) before digging in on Commerce-specifics.

Commerce manages shipping and billing information using Craft’s [craft\elements\Address  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-address.html) element type.

In the control panel, you’ll encounter addresses within the context of [orders](commerce_5x__system__orders-carts.md) and [users](https://craftcms.com/docs/5.x/system/users.html). [Store locations](#store-addresses) may also be entered at

1. Commerce→
2. Store Management→
3. General→
4. Store Location

.

Administrators can manage customer’s addresses from their user account. Commerce also inserts a **Commerce Settings** field into the [field layout](https://craftcms.com/docs/5.x/reference/element-types/addresses#native-and-custom-fields) of addresses owned by a user, with primary shipping and billing controls.

When you’re ready to start using addresses in your storefront templates, review the [address management](commerce_5x__development__address-management.md) page in the development section.

## [#](#how-addresses-are-used)How Addresses are Used

Based on how your storefront is set up, customers may provide addresses [directly](#address-book), or [via their cart](#cart-addresses).

Your primary source for information about [working with addresses](https://craftcms.com/docs/5.x/reference/element-types/addresses) is the main Craft documentation; Commerce-specific examples are found in the [development guide](commerce_5x__development__address-management.md).

Every cart can have a shipping and billing address, and customers with accounts can save and re-use addresses at [checkout](commerce_5x__development__checkout.md). How you collect and validate addresses on the front end is up to you—but Craft and Commerce provide tools that help streamline address management:

- The ability to use [estimated addresses](#estimate-addresses) to calculate shipping and tax costs with minimal data entry before checkout.
- Multiple ways of [updating cart addresses](#updating-cart-addresses) to avoid data re-entry.
- Methods for working with geographic regions provided by Craft’s supporting [address repository](https://craftcms.com/docs/5.x/reference/element-types/addresses#address-repository).
- A separate endpoint that customers can use to [manage their saved addresses](#address-book).

### [#](#store-addresses)Store Addresses

Each [store](commerce_5x__system__stores.md) has an address, which is set in

1. Commerce→
2. System Settings→
3. Stores

).
You’ll access this via the global `currentStore` variable or the [`Stores` service  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-services-stores.html):

TwigPHP

```
{% set storeAddress = currentStore
  .getSettings()
  .getLocationAddress() %}

{# ...or... #}

{% set storeAddress = craft.commerce
  .getStores()
  .getStoreByHandle('eu')
  .getSettings()
  .getLocationAddress() %}
```

```
$storeAddress = \craft\commerce\Plugin::getInstance()
    ->getStores()
    ->getCurrentStore()
    ->getSettings()
    ->getLocationAddress();

// ...or...

$storeAddress = \craft\commerce\Plugin::getInstance()
    ->getStores()
    ->getStoreByHandle('eu')
    ->getSettings()
    ->getLocationAddress();
```

Commerce does not use the store address, internally—it’s provided as a convenience for developers as they build out their storefronts, and for plugins to have a source of truth about the vendor’s location (say, when looking up shipping rates or taxes).

### [#](#ownership)Ownership

Logged-in users can directly [manage their addresses](commerce_5x__development__address-management.md) via the front-end, and [pick from them during checkout](commerce_5x__development__address-management.md#auto-fill-from-address-book).
However, addresses are only ever “owned” by one element—let’s look at some examples of how Commerce handles this:

- When an address is selected by updating a cart with a `shippingAddressId` or `billingAddressId`, the order keeps track of where the address came from via `sourceShippingAddressId` and `sourceBillingAddressId` properties, but *duplicates* the actual address element. This means that `shippingAddressId` and `sourceShippingAddressId` (and the `billing`) will *never* be the same!
- Addresses provided by sending individual fields under the `shippingAddress[...]` and `billingAddress[...]` keys are created and owned by the order.
- Similarly, sending individual field values for an order’s shipping or billing address (regardless of how it was originally populated) will only update the order address, and breaks any association to the user’s address book via `sourceShippingAddressId` or `sourceBillingAddressId`.

If you want to make it clear that your customer has selected a preexisting address, compare `order.sourceShippingAddressId` or `order.sourceBillingAddressId` with the IDs of the addresses in their address book.
See [this example](commerce_5x__development__address-management.md#auto-fill-from-address-book) for the complete Twig logic.

## [#](#cart-addresses)Cart Addresses

Customers provide billing and shipping information while shopping, or during [checkout](commerce_5x__development__checkout.md).
Every cart technically holds up to four addresses: billing, shipping, estimated billing, and estimated shipping.
You are not obligated to use all four, and some stores may only use a billing or shipping address for compliance.

The requirements for checkout are controlled directly by the **Require Shipping Address At Checkout** and **Require Billing Address At Checkout** [store settings](commerce_5x__system__stores.md#settings), and indirectly by **Require Shipping Method Selection At Checkout** and conditions on your shipping methods.

### [#](#updating-cart-addresses)Updating Cart Addresses

Any time you have a customer update their cart, the request can include parameters for modifying addresses:

1. [Create](commerce_5x__development__address-management.md#submit-new-addresses) or [update](commerce_5x__development__address-management.md#update-an-existing-address) an address by sending billing and shipping address fields as arrays (guests and logged-in users);
2. [Fill from an existing address](commerce_5x__development__address-management.md#auto-fill-from-address-book) (logged-in users only) by sending its ID;
3. [Synchronize billing and shipping addresses](commerce_5x__development__address-management.md#synchronizing-addresses) in one direction or the other;
4. Opt in to [saving cart addresses to your account](commerce_5x__development__address-management.md#save-addresses-when-completing-an-order), after checkout;

The full list of supported parameters can be found in the [controller actions](commerce_5x__reference__controller-actions.md#post-cart-update-cart) documentation.

### [#](#estimate-cart-addresses)Estimate Cart Addresses

It’s common to provide a shipping or tax cost estimate before a customer has entered full address details.
To help with this, the cart can use [estimated shipping and billing addresses](commerce_5x__development__address-management.md#adding-a-shipping-estimate-address) for calculations, before complete addresses are available.

Estimated addresses are [craft\elements\Address  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-address.html) elements, just like shipping and billing addresses.

## [#](#address-book)Address Book

Registered customers can [save addresses directly on their user](commerce_5x__development__address-management.md#address-book), for future use.
At checkout, they can [select from existing addresses](commerce_5x__development__address-management.md#auto-fill-from-address-book), or provide a new one.

New addresses can also be saved to the customer’s address book [when completing an order](commerce_5x__development__address-management.md#save-addresses-when-completing-an-order).
This is enabled by default for customers who register at checkout.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/system/addresses.md)
