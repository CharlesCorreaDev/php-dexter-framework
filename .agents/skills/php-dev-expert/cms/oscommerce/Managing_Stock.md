# Managing Stock - osCommerce Wiki

> **Fonte / Source:** https://www.oscommerce.com/wiki/Managing_Stock

---

# Managing Stock

From osCommerce Wiki

[Jump to navigation](#mw-head)
[Jump to search](#searchInput)

**Note: This manual is for osCommerce v4.**

This manual explains how to manage product stock levels in your store.

For a quick overview of this functionality, watch the video first.

**For detailed instructions, please refer to the manual below.**

#### **1) Access the Product Stock Settings**

1. Log in to the **admin area** of your website.
2. Go to **Products/Catalogue → Products (Brands/Categories)**.
3. Open an existing product or create a new one.
4. Click on the **Main Details** tab.
5. Go to the **Stock** section to view real-time stock values.

**2) Understand Stock Status Fields**

| Field | Meaning |
| --- | --- |
| **Warehouse** | Total physical stock currently stored. Updated after shipment. |
| **Available stock** | Stock available for buyers right now. Adjusts in real time. |
| **In cart** | Items currently placed in customers’ carts. |
| **Not paid order** | Items reserved in orders that are created but not yet paid. |
| **Allocated** | Items in paid orders waiting for shipment. |
| **Deficit** | Quantity ordered above available stock (allowed only if permitted). |

#### **3) How Stock Levels Change During the Order Process**

1. Customer adds products to cart → **In cart** increases, **Available stock** decreases.
2. Order is placed → quantities move from **In cart → Not paid order**.
3. Order is paid → quantities move from **Not paid order → Allocated**.
4. Order is shipped → quantities move from **Allocated → Warehouse** (physical stock decreases).

**Important:** The **Available stock** value reflects real-time availability and does not change when orders are paid or shipped.

[![](/wiki/images/thumb/5/50/Image_859.png/800px-Image_859.png)](https://www.oscommerce.com/wiki/File:Image_859.png)

All the fields mentioned above are **clickable**. Click on them to get more information about the actions connected to these fields. For example, if you click on the **Allocated** link, you can find the following information in the columns.

[![](/wiki/images/thumb/9/91/Image_858.png/800px-Image_858.png)](https://www.oscommerce.com/wiki/File:Image_858.png)

#### **4) View Stock and History Records**

- Click on any stock status value (e.g., **Allocated**) to see related order details.
- Click **Stock History** to review stock changes and shipment records.

[![](/wiki/images/thumb/7/70/Image_857.png/800px-Image_857.png)](https://www.oscommerce.com/wiki/File:Image_857.png)

#### **5) Update Stock Manually**

1. Click the **Update stock** button.
2. Select one of the two options:
   - **+ Inbound** → to add stock.
   - **– Outbound** → to remove stock.

**When adding stock (+ Inbound):**

- Enter quantity, expiry date (optional), batch (optional), and comments.
- To automatically fulfill previously deficit orders, check **Allocate automatically**.

[![](/wiki/images/thumb/9/98/Image_856.png/800px-Image_856.png)](https://www.oscommerce.com/wiki/File:Image_856.png)

**When removing stock (– Outbound):**

- Enter the quantity to deduct and optional comments.
- To update deficit orders automatically, check **Allocate automatically**.

If a product was **out of stock** at some point when an order was placed, the product in this order is in the **deficit** status. By checking **allocate automatically** option, you can make the system automatically update such orders, so the product status will be changed from the **deficit** to **received**.

[![Image 862.png](/wiki/images/thumb/4/4e/Image_862.png/800px-Image_862.png)](https://www.oscommerce.com/wiki/File:Image_862.png)

#### **6) Configure Stock Availability and Automation**

Using the controls in the **Stock** section, you can:

- Set stock availability status (e.g., in stock, out of stock, pre-order).
- Set delivery terms.
- Choose what happens when the product is out of stock (e.g., Notify back in stock, Contact form).
- Define **out of stock level limit.**
- Select **Overall stock**, **Split stock between platforms**, or **Assign platform to warehouse**.

[![](/wiki/images/thumb/1/14/Stock_settings.jpg/801px-Stock_settings.jpg)](https://www.oscommerce.com/wiki/File:Stock_settings.jpg)

Retrieved from "<https://www.oscommerce.com/wiki/index.php?title=Managing_Stock&oldid=169241>"
