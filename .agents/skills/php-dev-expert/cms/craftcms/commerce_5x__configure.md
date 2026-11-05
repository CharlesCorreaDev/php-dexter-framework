# Configuring Commerce | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/configure

---

# Configuring Commerce

- ### On this Page

  - [Aliases](commerce_5x__configure.md#aliases)
  - [Environmental Configuration](commerce_5x__configure.md#environmental-configuration)
  - [Project Config](commerce_5x__configure.md#project-config)
  - [Config Settings](commerce_5x__configure.md#config-settings)
  - [System](commerce_5x__configure.md#system)
  - [Cart](commerce_5x__configure.md#cart)
  - [Orders](commerce_5x__configure.md#orders)
  - [Payments](commerce_5x__configure.md#payments)
  - [Units](commerce_5x__configure.md#units)
  - [Advanced Configuration](commerce_5x__configure.md#advanced-configuration)

Commerce supports a number of [settings](#config-settings). Like Craft’s config settings, you can override their default values in a `config/commerce.php` file.

```
return [
    'purgeInactiveCartsDuration' => 'P1D',
];
```

In Commerce 5, many global settings have become store-specific. See the [upgrade guide](commerce_5x__upgrade.md#multi-store) for more information.

## [#](#aliases)Aliases

Commerce adds these aliases on top of those [provided by Craft](https://craftcms.com/docs/5.x/configure#aliases).

| Alias | Description |
| --- | --- |
| `@commerceLib` | The path to `vendor/craftcms/commerce/lib/` |

## [#](#environmental-configuration)Environmental Configuration

Some Commerce settings can be defined on a [per-environment basis](https://craftcms.com/docs/5.x/configure#control-panel-settings) using environment variables or aliases:

- **System Settings** →
  - **General Settings** →
    - **Subscription Settings** →
      - **Billing detail update URL**
  - **Emails** →
    - **Status Email Address** (Environment variables only)
    - **From Name** (Environment variables only)

## [#](#project-config)Project Config

Craft Commerce stores the following items in the Craft [project config](https://craftcms.com/docs/5.x/system/project-config):

- Commerce general settings
- Stores
- Order, product, variant, and subscription field layouts
- Order statuses
- Product types
- Email settings
- PDF settings
- Gateways settings

Some items are considered “content” and can change in production, meaning they’re *not* stored in project config:

- Pricing rules
- Discounts and sales
- Shipping categories
- Shipping zones
- Shipping methods and rules
- Subscription plans
- Tax categories
- Tax zones
- Tax rates
- Order, product, variant, and subscription elements

## [#](#config-settings)Config Settings

## [#](#system)System

### [#](#defaultview)`defaultView`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'commerce/orders'`

Defined by
:   [Settings::$defaultView  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-defaultview)

Since
:   2.2

Commerce’s default control panel view. (Defaults to order index.)

## [#](#cart)Cart

### [#](#activecartduration)`activeCartDuration`

Allowed types
:   `mixed`

Default value
:   `3600` (1 hour)

Defined by
:   [Settings::$activeCartDuration  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-activecartduration)

Since
:   2.2

How long a cart should go without being updated before it’s considered inactive.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

### [#](#cartvariable)`cartVariable`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'cart'`

Defined by
:   [Settings::$cartVariable  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-cartvariable)

Key to be used when returning cart information in a response.

### [#](#loadcartredirecturl)`loadCartRedirectUrl`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [Settings::$loadCartRedirectUrl  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-loadcartredirecturl)

Since
:   3.1

Default URL to be loaded after using the [load cart controller action  (opens new window)](commerce_5x__system__orders-carts.md#loading-a-cart).

If `null` (default), Craft’s default [`siteUrl`](https://craftcms.com/docs/5.x/reference/config/general#siteurl) will be used.

### [#](#purgeinactivecarts)`purgeInactiveCarts`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [Settings::$purgeInactiveCarts  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-purgeinactivecarts)

Whether inactive carts should automatically be deleted from the database during garbage collection.

You can control how long a cart should go without being updated before it gets deleted [`purgeInactiveCartsDuration`](#purgeinactivecartsduration) setting.

### [#](#purgeinactivecartsduration)`purgeInactiveCartsDuration`

Allowed types
:   `mixed`

Default value
:   `7776000` (90 days)

Defined by
:   [Settings::$purgeInactiveCartsDuration  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-purgeinactivecartsduration)

Default length of time before inactive carts are purged. (Defaults to 90 days.)

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

### [#](#updatecartsearchindexes)`updateCartSearchIndexes`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [Settings::$updateCartSearchIndexes  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-updatecartsearchindexes)

Since
:   3.1.5

Whether the search index for a cart should be updated when saving the cart via `commerce/cart/*` controller actions.

May be set to `false` to reduce performance impact on high-traffic sites.

Setting this to `false` will result in fewer index update queue jobs, but you’ll need to manually re-index orders to ensure up-to-date cart search results in the control panel.

### [#](#validatecartcustomfieldsonsubmission)`validateCartCustomFieldsOnSubmission`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [Settings::$validateCartCustomFieldsOnSubmission  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-validatecartcustomfieldsonsubmission)

Since
:   3.0.12

Whether to validate custom fields when a cart is updated.

Set to `true` to allow custom content fields to return validation errors when a cart is updated.

## [#](#orders)Orders

### [#](#pdfallowremoteimages)`pdfAllowRemoteImages`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [Settings::$pdfAllowRemoteImages  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-pdfallowremoteimages)

Whether to allow non-local images in generated order PDFs.

### [#](#updatebillingdetailsurl)`updateBillingDetailsUrl`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `''`

Defined by
:   [Settings::$updateBillingDetailsUrl  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-updatebillingdetailsurl)

URL for a user to resolve billing issues with their subscription.

The example templates include [a template for this page  (opens new window)](https://github.com/craftcms/commerce/tree/5.x/example-templates/dist/shop/plans/update-billing-details.twig).

## [#](#payments)Payments

### [#](#gatewaypostredirecttemplate)`gatewayPostRedirectTemplate`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `''`

Defined by
:   [Settings::$gatewayPostRedirectTemplate  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-gatewaypostredirecttemplate)

The path to the template that should be used to perform POST requests to offsite payment gateways.

The template must contain a form that posts to the URL supplied by the `actionUrl` variable and outputs all hidden inputs with
the `inputs` variable.

```
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Redirecting...</title>
</head>
<body onload="document.forms[0].submit();">
<form action="{{ actionUrl }}" method="post">
  <p>Redirecting to payment page...</p>
  <p>
    {{ inputs|raw }}
    <button type="submit">Continue</button>
  </p>
</form>
</body>
</html>
```

Since this template is simply used for redirecting, it only appears for a few seconds, so we suggest making it load fast with minimal
images and inline styles to reduce HTTP requests.

If empty (default), each gateway will decide how to handle after-payment redirects.

### [#](#paymentcurrency)`paymentCurrency`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [Settings::$paymentCurrency  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-paymentcurrency)

ISO codes for supported payment currencies.

See [Payment Currencies  (opens new window)](commerce_5x__system__payment-currencies.md).

## [#](#units)Units

### [#](#dimensionunits)`dimensionUnits`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'mm'`

Defined by
:   [Settings::$dimensionUnits  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-dimensionunits)

Unit type for dimension measurements.

Options:

- `'mm'`
- `'cm'`
- `'m'`
- `'ft'`
- `'in'`

### [#](#weightunits)`weightUnits`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'g'`

Defined by
:   [Settings::$weightUnits  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-models-settings.html#property-weightunits)

Units to be used for weight measurements.

Options:

- `'g'`
- `'kg'`
- `'lb'`

## [#](#advanced-configuration)Advanced Configuration

Additional customization of Commerce components is possible via [application configuration](https://craftcms.com/docs/5.x/reference/config/app). These settings must be added to your project’s `config/app.php` file, within the `pluginConfigs` block.

### [#](#cart-cookie-configuration)Cart Cookie Configuration

Cart cookies expire after one year, by default. Change this with the [`carts.cartCookieDuration`  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-services-carts.html#constants) property:

```
return [
    'components' => [
        'plugins' => [
            'pluginConfigs' => [
                'commerce' => [
                    'components' => [
                        'carts' => [
                            'cartCookie' => [
                                // Add custom key-value cookie params
                            ],
                            // Set the cart expiry to one month
                            'cartCookieDuration' => 2629800,
                        ],
                    ],
                ],
            ],
        ],
    ],
];
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/configure.md)
