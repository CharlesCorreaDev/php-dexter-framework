# Managing Order and Product Statuses - osCommerce Wiki

> **Fonte / Source:** https://www.oscommerce.com/wiki/Managing_Order_and_Product_Statuses

---

# Managing Order and Product Statuses

From osCommerce Wiki

[Jump to navigation](#mw-head)
[Jump to search](#searchInput)

**Note: This manual is for osCommerce v4.**

Each product in an order may have its own status.

It shows up for each **product item**. That is in the order there is 1 product item and there are 10 products (quantity) in it. The **required quantity (RQ)** is the quantity per the product item minus the cancelled products. For example, there is 1 product item in the order, there are 10 products in it, 2 products are cancelled. Then RQ is 8.

A product has statuses:

**QUOTED**

This status is used when adding a product to an order and for cancelling the reservation.

**DEFICIT**

This status is used if the available stock of a product is fewer than RQ.

It is necessary to differentiate between **warehouse stock** and **available stock**. The warehouse stock is the number of boxes and the available stock is how many of these boxes you can sell.

**RECEIVED**

This status is used when reserving the product RQ at the warehouse.

**DISPATCHED**

This status is used if the product was completely written off from the warehouse.

**DELIVERED**

This status is used if the product was completely delivered to the customer.

**CANCELLED**

This status is used if the product was completely cancelled.

[![](/wiki/images/d/de/Image_462.png)](https://www.oscommerce.com/wiki/File:Image_462.png)

Each product has the number value as to what product quantity and at what processing stage is.

This is the natural and hereditary way of the product status evaluation.

**QUOTED -> (?)DEFICIT -> RECEIVED -> DISPATCHED -> DELIVERED**

So in order for a product to become DELIVERED it should be earlier DISPATCHED.

The status DEFICIT implies that in the status RECIEVED the quantity is from 0 to (EQ – 1) of the product. Thus it is not fully reserved.

So we have the following:

If we have the product item quantity as 20 at warehouse stock, 5 is available stock, 10 products are purchased, 2 products are canceled ==> **DEFICIT**, 20 are at warehouse stock and 0 is available stock.

If we have the product item quantity as 20 at warehouse stock, 10 is available stock, 10 products are purchased, 2 products are canceled ==> **RECEIVED**, 20 are at warehouse stock and 2 is available stock.

If we have the product item quantity as 20 at warehouse stock, 1 is available stock, 10 products are purchased, 10 products are canceled ==> **CANCELLED**, 20 are at warehouse stock and 1 is available stock.

If we have the product item quantity as 20 at warehouse stock, 10 is available stock, 10 products are purchased, 2 products are canceled, 8 products are reserved, 2 products are written off ==> **RECEIVED**, 18 are at warehouse stock and 2 is available stock.

If we have the product item quantity as 20 at warehouse stock, 10 is available stock, 10 products are purchased, 2 products are canceled, 8 products are reserved, 8 products are written off ==> **DISPATCHED**, 12 are at warehouse stock and 2 is available stock.

If we have the product item quantity as 20 at warehouse stock, 10 is available stock, 10 products are purchased, 2 products are canceled, 8 products are reserved, 8 products are written off, 2 products are delivered ==> **DISPATCHED**, 12 are at warehouse stock and 2 is available stock.

If we have the product item quantity as 20 at warehouse stock, 10 is available stock, 10 products are purchased, 2 products are canceled, 8 products are reserved, 8 products are written off, 8 products are delivered ==> **DELIVERED**, 12 are at warehouse stock and 2 is available stock.

If we have the product item quantity as 20 at warehouse stock, 10 is available stock, 10 products are purchased, 2 products are canceled, 8 products are reserved, 2 products are written off, 2 products are delivered ==> **RECEIVED**, 18 are at warehouse stock and 2 is available stock.

The product statuses are set up according to the descending principle: all **RQ DELIVERED?** yes – **DELIVERED,** no - **all RQ DISPATCHED?** yes – **DISPATCHED,** no - **all RQ RECEIVED?** and so on.

Further the order gathers all the product statuses and according to the same principle the order tries to find its own internal status. The internal statuses in the system are represented as the notion **evaluation state**.

The user statuses are the statuses that are manually added to the orders by the system user himself by means of the interface. The internal statuses cannot be edited or added. After finding the internal status starts executing the event connected with this internal status, so-called the natural order evaluation event.

Now more information about the **order settings, groups and statuses.**

There is the switch on the order status **Allow Order Product Allocation**.

Its task is to inform the system that for the order in this status it is allowed to **reserve** the product items from the warehouse automatically. The reservation automatically decreases the number of products available for reserving, that is available stock.

**Bind status to order evaluation state**

This configuration fulfills the double-sided connection between the internal and the user order statuses. By means of this setting the event query of the compulsory order evaluation and its products while changing the user status manually is made and the search of the suitable user status during the natural order evaluation is made as well.

**Is default status for order evaluation state**

Since an internal status can be assigned to a few user statuses this configuration allows the system to select the most priority user status during the natural or compulsory order evaluation provided that the user status is not obviously transferred.

[![](/wiki/images/0/09/Image_463.png)](https://www.oscommerce.com/wiki/File:Image_463.png)

On the order status group there is the switch **Temporary allocate order products.**

When this switch is switched on all the statuses in this group are considered by the system to be the statuses with the switch **Allow Order Product Allocation** switched on.

However, any reservation for these statuses is automatically considered to be the temporary one. For such reservation the icon **blue triangle with the exclamation sign** shows up. If this icon is clicked the remaining reservation time shows up.

[![](/wiki/images/a/a5/Image_464.png)](https://www.oscommerce.com/wiki/File:Image_464.png)

In the system the following internal statuses are represented.

**PENDING**

The order evaluates to this status only if all the products are in the QUOTED status.

**PROCESSING**

The order evaluates to this status if all the product statuses are mixed up.

**RECEIVED**

The order evaluates to this status if all the products are in the RECEIVED status.

**DISPATCHED**

The order evaluates to this status if all the products are in the DISPATCHED status.

**DELIVERED**

The order evaluates to this status if all the products are in the DELIVERED status.

**CANCELLED**

The order evaluates to this status if all the products are in the DELIVERED status.

When setting the statuses **Bind status to order evaluation state** statuses should not be assigned to the events PENDING and PROCESSING. Taking into account the peculiarities of the system work in most cases it is not recommended to assign **Bind status to order evaluation state** statuses even to the event RECEIVED.

**NOTE:**

Supposedly the natural order evaluation is in the internal status **PROCESSING** but the system user compulsory tries to set the user status which is assigned to the internal status **DELIVERED**. As a result all the products in this order will **not** become DELIVERED, the whole order will **not** become DELIVERED either and the whole quantity will **not** be written off frim the warehouse since such a condition **cannot** be applied to **all** the products! In order for a product to become **DELIVERED** it should be **DISPATCHED**, in order for a product to become **DISPATCHED** it should be **RECEIVED** and so on.

It is possible to set the status compulsory. It is available in **More options** while processing an order.

[![Image 337.png](/wiki/images/8/8d/Image_337.png)](https://www.oscommerce.com/wiki/File:Image_337.png)

Retrieved from "<https://www.oscommerce.com/wiki/index.php?title=Managing_Order_and_Product_Statuses&oldid=135499>"
