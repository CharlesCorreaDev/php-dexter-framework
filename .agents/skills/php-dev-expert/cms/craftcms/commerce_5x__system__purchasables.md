# Purchasables | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/purchasables

---

# Purchasables

- ### On this Page

  - [Line Items](commerce_5x__system__purchasables.md#line-items)

The core of anything sold with Commerce is a *purchasable*, a special type of [element](https://craftcms.com/docs/5.x/system/elements) that conforms to an interface that guarantees it can be added to a cart.

Commerce ships with two types of purchasables: [variants](commerce_5x__system__products-variants.md#variants) and [donations](commerce_5x__system__donations.md). Somewhat counterintuitively, [products](commerce_5x__system__products-variants.md) are *not* purchasables!

## [#](#line-items)Line Items

When a customer adds a purchasable to their [cart](commerce_5x__system__orders-carts.md), Commerce represents it as a *line item*.

Line items capture a reference to the purchasable and some vital properties like the price, dimensions, weight. They can also hold customer notes, private notes, and arbitrary *options* data.

[Line Items
→

Learn more about the features and capabilities of line items.](commerce_5x__system__orders-carts.md)

### [#](#snapshots)Snapshots

When a line item is populated from a purchasable, a JSON snapshot is saved on that line item. The snapshot provides a permanent record of whatever the purchasable looked like in that moment, regardless of how products or variations change over time. The snapshot will persist, regardless of any store changes after checkout.

Example Snapshot

```
{
  "isDefault": false,
  "sortOrder": 1,
  "deletedWithProduct": false,
  "width": null,
  "height": null,
  "length": null,
  "weight": null,
  "freeShipping": false,
  "promotable": false,
  "availableForPurchase": true,
  "minQty": null,
  "maxQty": null,
  "inventoryItemId": 1,
  "inventoryTracked": false,
  "eagerLoadInfo": null,
  "id": 114,
  "tempId": null,
  "draftId": null,
  "revisionId": null,
  "isProvisionalDraft": false,
  "uid": "639a0373-cd9a-4d5b-9a48-860e4ebf355d",
  "siteSettingsId": 119,
  "fieldLayoutId": 12,
  "enabled": true,
  "archived": false,
  "siteId": 2,
  "title": "Advanced Unit",
  "slug": "__temp_gpyrlszcdnezpempgaxfzzryspgsylgjnojs",
  "uri": null,
  "dateCreated": "2024-07-01T16:02:32-07:00",
  "dateUpdated": "2024-07-10T09:23:04-07:00",
  "dateLastMerged": null,
  "dateDeleted": null,
  "deletedWithOwner": null,
  "trashed": false,
  "isNewForSite": false,
  "forceSave": false,
  "fieldId": null,
  "canonicalId": 114,
  "cpEditUrl": "#",
  "isDraft": false,
  "isRevision": false,
  "isUnpublishedDraft": false,
  "ref": null,
  "status": "enabled",
  "structureId": null,
  "url": "https://my-project.ddev.site/widgets/thingamabob?variant=114",
  "isAvailable": true,
  "isPromotable": false,
  "price": 8.99,
  "promotionalPrice": null,
  "basePrice": 8.99,
  "basePromotionalPrice": null,
  "onPromotion": false,
  "salePrice": 8.99,
  "sku": "WIDGET-THINGY-ADVANCED",
  "stock": 0,
  "product": {
    "postDate": "2024-07-01T16:02:03-07:00",
    "expiryDate": null,
    "typeId": 1,
    "defaultVariantId": 142,
    "defaultSku": "WIDGET-THINGY-BASIC",
    "defaultHeight": null,
    "defaultLength": null,
    "defaultWidth": null,
    "defaultWeight": null,
    "taxCategory": null,
    "name": null,
    "eagerLoadInfo": null,
    "id": 113,
    "tempId": null,
    "draftId": null,
    "revisionId": null,
    "isProvisionalDraft": false,
    "uid": "40cdabfe-c7ca-4a49-be20-f55be18531cd",
    "siteSettingsId": 117,
    "fieldLayoutId": 11,
    "enabled": true,
    "archived": false,
    "siteId": 2,
    "title": "Thingamabob",
    "slug": "thingamabob",
    "uri": "widgets/thingamabob",
    "dateCreated": "2024-07-01T16:02:03-07:00",
    "dateUpdated": "2024-07-10T09:23:28-07:00",
    "dateLastMerged": null,
    "dateDeleted": null,
    "deletedWithOwner": null,
    "trashed": false,
    "isNewForSite": false,
    "forceSave": false,
    "canonicalId": 113,
    "cpEditUrl": "https://my-project.ddev.site/admin/commerce/products/widgets/113-thingamabob",
    "isDraft": false,
    "isRevision": false,
    "isUnpublishedDraft": false,
    "ref": null,
    "status": "live",
    "structureId": null,
    "url": "https://my-project.ddev.site/widgets/thingamabob"
  },
  "description": "Thingamabob - Advanced Unit",
  "purchasableId": 114,
  "options": [],
  "sales": []
}
```

expand

Snapshot data can be essential in cases where you need to [display a completed order](commerce_5x__development__orders.md)’s line items in a template but the product and variant have since been deleted. This only applies to completed orders, though—if a purchasable is deleted prior to checkout, any line items that refer to it are automatically removed from customers’ carts and [notices](commerce_5x__system__orders-carts.md#order-notices) are attached with a description of what happened.

When building your front end and displaying line items, it’s best to reference purchasable information retrieved via `lineItem.getPurchasable()`. The `snapshot` property is a plain array, and will not have many of the [variant  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-variant.html) and [product  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-product.html) methods you would expect, having dealt with them elsewhere in your templates:

```
{# Set a fallback for the purchasable info: #}
{% set purchasable = lineItem.getPurchasable() ?? lineItem.snapshot %}
```

To avoid recursive references and other serialization issues, snapshots do *not* automatically include custom field data for variants or products. You can customize what additional fields are stored in a snapshot via the [Variant::EVENT\_BEFORE\_CAPTURE\_VARIANT\_SNAPSHOT  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-variant.html#event-before-capture_variant_snapshot) event, or add arbitrary data in reponse to [Variant::EVENT\_AFTER\_CAPTURE\_VARIANT\_SNAPSHOT  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-variant.html#event-after-capture_variant_snapshot). Similar events exist for product elements, as well.

Snapshots are *not* an authoritative source for pricing, stock, availability, or other values that can change—they are only intended to serve as way of identifying a purchasable to the customer (and administrators) after an order is completed.

To learn more about adding your own custom purchasables, see the [Purchasable Types](commerce_5x__extend__purchasable-types.md) page.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/system/purchasables.md)
