# Purchasable Types | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/extend/purchasable-types

---

# Purchasable Types

- ### On this Page

  - [Custom Purchasables](commerce_5x__extend__purchasable-types.md#custom-purchasables)
  - [Implementation](commerce_5x__extend__purchasable-types.md#implementation)
  - [Purchasable deletion](commerce_5x__extend__purchasable-types.md#purchasable-deletion)
  - [Restoring soft-deleted purchasables](commerce_5x__extend__purchasable-types.md#restoring-soft-deleted-purchasables)

Purchasables should be extended to add useful attributes like Commerce’s included [product variant](commerce_5x__products-variants.md#variants) and [donation](commerce_5x__system__donations.md) purchasables. [Plugins and modules](https://craftcms.com/docs/5.x/extend/) can provide their own purchasables.

## [#](#custom-purchasables)Custom Purchasables

If you’d like to introduce your own purchasable in a custom module or plugin, you can either implement [`craft\commerce\base\PurchasableInterface`  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-base-purchasableinterface.html) or extend [`craft\commerce\base\Purchasable`  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-base-purchasable.html).

We recommend extending [the base Purchasable  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-base-purchasable.html) because you’ll automatically get...

- `getSalePrice()` calculation
- `getSales()` to see the details of each sale applied in that calculation
- a standard Yii model that includes everything in `attributes()` and `extraFields()`
- automatic `sku` validation

You may alternatively choose to implement [PurchasableInterface  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-base-purchasableinterface.html), but you’ll need to handle these and any additional features yourself.

## [#](#implementation)Implementation

To implement the Purchasable Interface, inherit from the base Purchasable and implement these methods:

### [#](#getid)`getId()`

The ID of the element.

### [#](#getdescription)`getDescription()`

This is the description of the purchasable. It would often be the title or name of the product. This is used for display in the order even if the purchasable is deleted later.

### [#](#getprice)`getPrice()`

The default price of the item.

### [#](#getsaleprice)`getSalePrice()`

The base price of the item, adjusted by any applicable sales.

### [#](#getsku)`getSku()`

The stock keeping unit number of the purchasable. Must be unique based on the `commerce_purchasables` table.

When you inherit from `craft\commerce\base\Purchasable`, a unique validation rule for the `sku` attribute is added to the `rules()` method. This ignores soft-deleted purchasables; uniqueness if only checked for non-trashed purchasables.

### [#](#getsnapshot)`getSnapshot()`

An array of data that is serialized as JSON on the line item when the purchasable is added to the cart. This is useful when the purchasable is later deleted, but the cart can still have all relevant data about the purchasable stored within it.

### [#](#gettaxcategoryid)`getTaxCategoryId()`

The tax category ID of the purchasable.

Defaults to the default tax category ID.

### [#](#getshippingcategoryid)`getShippingCategoryId()`

The shipping category ID of the purchasable.

Defaults to the default shipping category ID.

### [#](#hasfreeshipping)`hasFreeShipping()`

Stops the shipping engine from adding shipping cost adjustment to a line item containing this purchasable.

### [#](#getispromotable)`getIsPromotable()`

Whether the purchasable can be subject to discounts or sales.

### [#](#getisavailable)`getIsAvailable()`

Whether the purchasable can be added to a cart.

Should return `true` or `false` if the purchasable can be added to, or exist on, the cart.

Base Purchasable defaults to `true` always.

### [#](#populatelineitem-lineitem-lineitem)`populateLineItem(LineItem $lineItem)`

Gives the purchasable the chance to change the `saleAmount` and `price` of the line item when it’s added to the cart or when the cart recalculates.

### [#](#afterordercomplete-order-order-lineitem-lineitem)`afterOrderComplete(Order $order, LineItem $lineItem)`

Runs any logic needed for this purchasable after it was on an order that was just completed—not necessarily when an order was paid, although paying an order will complete it.

This is called for each line item that contains the purchasable.

For example, variants use this method to deduct stock.

### [#](#getpromotionrelationsource)`getPromotionRelationSource()`

Returns the source param value for an element relation query, for use with promotions. For example, a sale promotion on a category needs to know if the purchasable is related.

Defaults to the ID of the purchasable element, which would be sufficient for most purchasables.

## [#](#purchasable-deletion)Purchasable deletion

Craft CMS includes [soft delete support](https://craftcms.com/docs/5.x/extend/soft-deletes) for all element types, including purchasables. You might want to familiarize yourself with soft deletion before adding delete and restore capabilities for your purchasable element.

When you inherit from `craft\commerce\base\Purchasable` and your element is saved, Commerce automatically updates the `commerce_purchasables` table with the purchasable’s `sku` so that all purchasables have a central location to check their `sku` uniqueness.

The uniqueness of your `sku` is automatically validated for you when extending `craft\commerce\base\Purchasable`.

Commerce only validates non-trashed purchasables. Trashed purchasables will still be in the `commerce_purchasables` table until garbage collection is run.

## [#](#restoring-soft-deleted-purchasables)Restoring soft-deleted purchasables

If you decide to support restoration of your purchasable element, you need to make sure your its restored `sku` is unique.

You would do this by overriding the `beforeRestore()` method in your purchasable element.

Within that method, you would first see if any non-trashed purchasables have the same `sku` as the purchasable to be restored:

```
if (!parent::beforeDelete()) {
    return false;
}

$found = (new Query())->select(['[[p.sku]]', '[[e.id]]'])
    ->from('{{%commerce_purchasables}} p')
    ->leftJoin(Table::ELEMENTS . ' e', '[[p.id]]=[[e.id]]')
    ->where(['[[e.dateDeleted]]' => null, '[[p.sku]]' => $this->getSku()])
    ->andWhere(['not', ['[[e.id]]' => $this->getId()]])
    ->count();
```

If `$found` is greater than zero, meaning there’s another live (non-trashed) purchasable with the same `sku`, make your purchasable’s `sku` unique and update the relevant tables:

```
if ($found) {

    $this->sku = $this->getSku() . '-1'; // make unique

    // Update variant table with new SKU
    Craft::$app->getDb()->createCommand()->update('{{%commerce_variants}}',
        ['sku' => $this->sku],
        ['id' => $this->getId()]
    )->execute();

    if ($this->isDefault) {
        Craft::$app->getDb()->createCommand()->update('{{%commerce_products}}',
            ['defaultSku' => $this->sku],
            ['id' => $this->productId]
        )->execute();
    }

    // Update purchasable table with new SKU
    Craft::$app->getDb()->createCommand()->update('{{%commerce_purchasables}}',
        ['sku' => $this->sku],
        ['id' => $this->getId()]
    )->execute();
}
```

It’s important to update your own tables in addition to the `commerce_purchasables` table.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/extend/purchasable-types.md)
