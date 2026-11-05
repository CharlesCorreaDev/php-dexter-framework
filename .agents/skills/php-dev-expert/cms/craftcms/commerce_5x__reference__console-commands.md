# Console Commands | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/reference/console-commands

---

# Console Commands

- ### On this Page

  - [commerce/example-templates](commerce_5x__reference__console-commands.md#commerce-example-templates)
  - [commerce/gateways/list](commerce_5x__reference__console-commands.md#commerce-gateways-list)
  - [commerce/gateways/webhook-url](commerce_5x__reference__console-commands.md#commerce-gateways-webhook-url)
  - [commerce/pricing-catalog/generate](commerce_5x__reference__console-commands.md#commerce-pricing-catalog-generate)
  - [commerce/reset-data](commerce_5x__reference__console-commands.md#commerce-reset-data)
  - [commerce/transfer-customer-data](commerce_5x__reference__console-commands.md#commerce-transfer-customer-data)

Commerce supplements Craft’s own [console commands](https://craftcms.com/docs/5.x/reference/cli) with a few utilities that can help you manage your storefront’s data.

These commands must be prefixed with `php craft …`, `ddev craft …`, or some variation thereof, depending on your development or hosting environment.

[Console Commands
→

Learn more about Craft’s command-line interface.](https://craftcms.com/docs/5.x/system/cli)

## [#](#commerce-example-templates)`commerce/example-templates`

Copies the example templates that Commerce ships with into your project’s template folder.

```
$ php craft commerce/example-templates
A folder will be copied to your templates directory.
Choose folder name: [shop] myshop
Copying ...
Done!
```

Pass the `--overwrite` flag if you’d like to squash an existing folder of the same name.

## [#](#commerce-gateways-list)`commerce/gateways/list`

Show a table of the configured [gateways](commerce_5x__system__gateways.md).

```
$ php craft commerce/gateways/list
    ID  Name    Handle  Enabled  Type                                           UUID                                
    --  ------  ------  -------  ---------------------------------------------  ------------------------------------
    1   Dummy   dummy   No       craft\commerce\gateways\Dummy                  45462c5b-90e1-4563-9a80-dc4241ee0299
    2   Stripe  stripe  Yes      craft\commerce\stripe\gateways\PaymentIntents  55df7465-9e09-4765-a93b-143f1b4f1f5f
```

## [#](#commerce-gateways-webhook-url)`commerce/gateways/webhook-url`

Output an environment-specific webhook URL for the specified [gateway](commerce_5x__system__gateways.md). Not all gateways require webhooks to be configured—check the plugin’s documentation for more info.

This command expects a single gateway’s `handle` as input, which you can find using the [`gateways/list` command](#commercegatewayslist), above.

```
$ php craft commerce/gateways/webhook-url
Webhook URL for the Stripe gateway:
https://commerce.ddev.site/index.php?p=actions/commerce/webhooks/process-webhook&gateway=2
```

Keep in mind that while the *handle* is stable across environments, [the ID may not be](https://craftcms.com/docs/5.x/system/project-config#ids-uuids-and-handles)!

## [#](#commerce-pricing-catalog-generate)`commerce/pricing-catalog/generate`

Regenerates [catalog pricing](commerce_5x__system__pricing-rules.md) data for all purchasables. Commerce keeps track internally of which prices need to be regenerated due to changes in your products or rules—but some advanced conditions (i.e. user groups, account creation time, relations, etc.) can result in stagnant pricing.

Run this command at an interval (via CRON or another task scheduler) to ensure pricing is calculated at an interval that makes sense for your storefront.

```
0 0 * * * /usr/bin/env php /path/to/craft commerce/pricing-catalog/generate
```

If you have a large catalog, customer base, or many pricing rules, monitor the time it takes to generate pricing data and ensure each run leaves enough time for the previous job to complete. For example, if it took 30 minutes to regenerate the pricing catalog, running the command every 15 minutes would gradually degrade the system’s performance with concurrent jobs.

To prevent concurrent runs (including in load-balanced environments), add the [`--isolated` flag](https://craftcms.com/docs/5.x/reference/cli#global-options).

## [#](#commerce-reset-data)`commerce/reset-data`

Cleanses Commerce data without uninstalling the plugin or removing store configuration. This can be useful for removing test data after finishing initial project development.

Deletes all orders, subscriptions, payment sources, customers, addresses and resets discount usages.

```
$ php craft commerce/reset-data
```

## [#](#commerce-transfer-customer-data)`commerce/transfer-customer-data`

Transfers customer data from one user to another. You will be prompted for the username or email of the source and destination users.

```
$ php craft commerce/transfer-user-data
```

Updates are performed via low-level database queries, so element events are not emitted and plugins are not given an opportunity to alter this behavior. This also serves to speed up the process of saving large amounts of data.

See [craft\commerce\services\Customers\transferCustomerData()  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-services-customers-transfercustomerdata().html) for the implementation.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/reference/console-commands.md)
