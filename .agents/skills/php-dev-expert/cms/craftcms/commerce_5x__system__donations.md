# Donations | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/donations

---

# Donations

- ### On this Page

  - [Adding the Donation to the Cart](commerce_5x__system__donations.md#adding-the-donation-to-the-cart)
  - [Promotions, Shipping, and Tax](commerce_5x__system__donations.md#promotions-shipping-and-tax)

Donations can be added to the cart using the [donation purchasable  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-donation.html). This is a separate element type from products and variants, and unlike a product the donation element does not belong to a “product type”.

There is a single donation element installed when you install Craft Commerce. The donation element settings are found in the control panel under **Commerce** → **Store Settings** → **Donations**.

In those settings, the donation purchasable’s SKU can be changed and donations can be turned off entirely.

You can get the donation purchasable in a template using `craft.commerce.donation`.

## [#](#adding-the-donation-to-the-cart)Adding the Donation to the Cart

Since the donation purchasable has no default price, a price must be supplied with the donation when adding to the cart.

This is done through [line item options](commerce_5x__system__orders-carts.md#line-item-options-and-notes) by submitting a `donationAmount` option parameter.

The form to add the donation to the cart would look like this:

```
{% set donation = craft.commerce.donation %}
{% if donation and donation.isAvailable %}
  <form method="post">
    {{ csrfInput() }}
    {{ actionInput('commerce/cart/update-cart') }}
    {{ redirectInput('shop/cart') }}
    {{ hiddenInput('purchasableId', donation.id) }}
    <input type="text"
      name="options[donationAmount]"
      value=""
      placeholder="Donation"
    >
    <button>Donate Now</button>
  </form>
{% endif %}
```

The `donationAmount` option parameter is required when adding the donation purchasable to the cart. The value submitted must also be numeric.

Customers can add more than one donation to the cart, but the line item will be replaced if the
[`optionSignature`](commerce_5x__system__orders-carts.md#options-uniqueness) remains the same, just like it does for any purchasables added to the cart. (For example, two donations added for the same amount will be consolidated into one line item with a quantity of `2`.)

Once the donation is in the cart, the donation amount can also be updated using the standard line item option update form. You would normally hide the `qty` field, because while it continues to work it’s most common for customers to donate a single amount.

## [#](#promotions-shipping-and-tax)Promotions, Shipping, and Tax

Donations cannot be promoted with a sale or discount. Donations use the default shipping and tax categories, but the donation is marked as `taxFree` and not `shippable`. Under normal usage of the tax and shipping system, they will not have associated shipping or tax costs.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/system/donations.md)
