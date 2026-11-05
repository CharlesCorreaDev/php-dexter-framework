# Example Templates | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/development/example-templates

---

# Example Templates

- ### On this Page

  - [Plugin Development and Reference](commerce_5x__development__example-templates.md#plugin-development-and-reference)

Commerce includes example templates you can use for a reference, or as a starting point when building your store. They are continually updated to support the full range of Commerce features, out-of-the-box, including:

- [Cart](commerce_5x__development__cart.md) management;
- Complete [checkout](commerce_5x__development__checkout.md) flow, including [payments](commerce_5x__development__making-payments.md);
- [Address](commerce_5x__development__address-management.md) management;
- [Order](commerce_5x__development__orders.md) confirmation and history;
- [Subscription](commerce_5x__development__subscription-templates.md) management;

…and more!

Use the [`commerce/example-templates` console command](commerce_5x__reference__console-commands.md#example-templates) to install the example templates into your project. Those templates are always available for reference, in `vendor/craftcms/commerce/example-templates/dist/`.

You can manually copy some or all of the templates into your project’s top level `templates/` folder:

```
cp -r vendor/craftcms/commerce/example-templates/dist/* ./templates
```

The rest of this section covers the implementation of common storefront features, from scratch.

## [#](#plugin-development-and-reference)Plugin Development and Reference

If your system supports it, you can symlink these folders into your project’s `templates/` folder so you always have up-to-date examples:

```
ln -s vendor/craftcms/commerce/example-templates/dist/shop ./templates/shop
```

This is only recommended for active development—say, when frequently pulling in unreleased versions of Commerce to test a [gateway plugin](commerce_5x__extend__payment-gateway-types.md).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/development/example-templates.md)
