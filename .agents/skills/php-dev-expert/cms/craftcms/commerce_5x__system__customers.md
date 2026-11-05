# Customers | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/customers

---

# Customers

- ### On this Page

  - [Customer Info Tab](commerce_5x__system__customers.md#customer-info-tab)
  - [Customers and Users](commerce_5x__system__customers.md#customers-and-users)

Commerce leverages Craft’s native [User](https://craftcms.com/docs/5.x/reference/element-types/users) element to represent and track customers.

As soon as an email address is added to an [Order](commerce_5x__system__orders-carts.md), a customer is created or attached—but because some customers remain guests through checkout, the underlying user may never become [credentialed](#customers-and-users).

## [#](#customer-info-tab)Customer Info Tab

Go to **Users** in Craft’s global navigation to see a complete list of the site’s users. Clicking any user’s name will take you to their edit screen, where you’ll find a **Commerce** tab:

![Screenshot of user edit screen with four tabs: Account, Content, Permissions, and Commerce](/docs/assets/img/users-commerce-tab.11001cea.png)

This tab includes the following:

- **Orders** – a searchable list of the customer’s orders.
- **Active Carts** – a list of the customer’s *active* carts, based on the [activeCartDuration](commerce_5x__configure.md#activecartduration) setting.
- **Inactive Carts** – a list of the customer’s *inactive* carts, based on the [activeCartDuration](commerce_5x__configure.md#activecartduration) setting.
- **Subscriptions** – a list of the customer’s [subscriptions](commerce_5x__system__subscriptions.md).

## [#](#customers-and-users)Customers and Users

A customer with saved login information is considered a [credentialed](https://craftcms.com/docs/5.x/reference/element-types/users#active-and-inactive-users) user. Conversely, customers who check out as guests are set up as *inactive* users.

### [#](#user-checkout)User Checkout

Prior to version 4.5, some customer registration features were only only available in Commerce Pro.

Logged-in customers are bound to their cart the moment it is created.

A guest can register for an account before or after checkout using a standard [Craft user registration form  (opens new window)](https://craftcms.com/knowledge-base/front-end-user-accounts#registration-form). This workflow may look a bit different depending on your configuration:

| Setting | Result |
| --- | --- |
| [useEmailAsUsername](https://craftcms.com/docs/5.x/reference/config/general#useemailasusername) | Only requires an email address to register; can be pre-filled if the customer already set an email on their cart (as this creates an inactive user, behind the scenes). |
| [deferPublicRegistrationPassword](https://craftcms.com/docs/5.x/reference/config/general#deferpublicregistrationpassword) | A password is set only after activating their account (typically only used in combination with [email verification](https://craftcms.com/docs/5.x/system/user-management#public-registration)). |

[Checkout
→

Design a custom checkout experience for your customers.](commerce_5x__development__checkout.md)

### [#](#guest-checkout)Guest Checkout

If someone visits the store and checks out as a guest, a new inactive user is created and related to the order—and any future orders using the same email address will be consolidated under that user.

#### [#](#registration-at-checkout)Registration at Checkout

You can also offer the option to initiate registration *at* checkout by sending the `registerUserOnOrderComplete` param when [updating a cart](commerce_5x__reference__controller-actions.md#post-cart-update-cart) or [submitting payment](commerce_5x__reference__controller-actions.md#post-payments-pay).

If a customer chooses to register an account upon order completion, an activation link is sent to the email on file.

```
{% set cart = craft.commerce.carts.cart %}

<form method="post">
  {{ csrfInput() }}
  {{ actionInput('commerce/cart/update-cart') }}

  {{ input('checkbox', 'registerUserOnOrderComplete', 1, {
    checked: cart.registerUserOnOrderComplete,
  }) }}

  {# ... #}

  <button>Save cart</button>
</form>
```

When registering at checkout, their order’s billing and shipping addresses are automatically saved to their new accounts.
Commerce attempts to set the user’s name based on the order’s billing address, falling back to the name on the shipping address.
If neither address contained a name, it will be blank.

New users will not have a username, so they must use their email address to [log in](https://craftcms.com/docs/5.x/system/user-management#logging-in).
Consider enabling [useEmailAsUsername](https://craftcms.com/docs/5.x/reference/config/general#useemailasusername) and labeling your `loginName` fields appropriately.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/system/customers.md)
