# Products | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/user-guide/products

---

On this page

A product in Invoice Ninja is a reusable line-item template — a name, description, price, and optional tax that you can drop into any document instead of retyping the same details every time. If you bill for the same thing more than once (a service call, a consulting hour, a t-shirt, a software licence), it's worth turning it into a product.

## When to Use a Product vs. Free-Typing a Line[​](#when-to-use-a-product-vs-free-typing-a-line "Direct link to When to Use a Product vs. Free-Typing a Line")

You can always free-type a line item directly onto an [invoice](docs__user-guide__invoices.md) or [quote](docs__user-guide__quotes.md) — nothing forces you to save it first. Free-typing is fine for one-off work you'll never invoice again. Products earn their keep the second time around: consistent wording on every document, consistent pricing, consistent tax treatment, and a single place to update the price when it changes. Agencies with a standard service menu, freelancers with fixed hourly rates, and retailers with a fixed catalogue all benefit from building out their product list up front.

Products aren't limited to physical goods. A "Consulting — Senior" product with a price set to your hourly rate works perfectly well; the quantity field on the invoice then represents billable hours (to six decimal places, so 1.25 hours is no problem).

## Creating Products[​](#creating-products "Direct link to Creating Products")

There are a few ways to add products, and you can mix and match as suits you:

- From the admin portal, open the **Products** module and click **+ New Product**.
- Bulk-load an existing catalogue via **Settings > Import | Export** using a CSV.
- Type a new item directly onto an invoice or quote line. The first time you use it, Invoice Ninja saves it as a product for next time, and whatever quantity you entered becomes its default quantity.
- Create products programmatically through the [Invoice Ninja API](https://api-docs.invoicing.co/).

## Viewing and Editing Products[​](#viewing-and-editing-products "Direct link to Viewing and Editing Products")

The Products module in the left navigation lists everything you've saved. Click a product to open it, or use **More Actions > Edit** from the list.

![Product more actions](/assets/images/products_v5_hoverovermoreactions-6d7ad164319bd854f45a35390474b6b0.png "Product more actions")

From the **More Actions** dropdown on a product you can **Edit** it, jump straight to a **New Invoice** or **New Purchase Order** prefilled with the item at its default quantity, or **Clone** it — handy when you have several near-identical products (think small/medium/large variants of the same shirt).

![Editing product](/assets/images/edit_product_withdropdown-76959c57142a97fcb8099e31649d31ef.png "Editing product")

The product fields themselves are deliberately few. **Item** is the short name that appears on the invoice line. **Description** is the longer text beneath it; this field accepts HTML, and if you turn on **Enable Markdown** under **Settings > Account Management > Overview**, you can write Markdown here too and it will render on the PDF. **Price** is the standard unit price. **Default Quantity** is what gets filled in automatically when you add the product to a document, and **Max Quantity** caps how many can be sold in one go — useful for limited stock or tiered offers.

### Tax Per Product[​](#tax-per-product "Direct link to Tax Per Product")

Each product can carry up to three of its own tax rates, which are applied automatically whenever the product is added to a line. This is the right place to set tax when different items in your catalogue are taxed differently — for example, zero-rated groceries alongside standard-rated merchandise. Product taxes interact with whatever you've configured in [Taxes](docs__user-guide__taxes.md); a client marked tax-exempt, or one whose [location](docs__user-guide__clients.md) sits in a different tax jurisdiction, will still override the product-level rate as you'd expect.

### Documents[​](#documents "Direct link to Documents")

The Documents pane lets you attach files — product sheets, technical drawings, warranty terms — to a product. These are visible from the admin portal (and the client portal if client documents are enabled), which makes it a tidy place to keep supporting material for items you sell.

Self-hosted users should note that uploaded documents live in the `public/storage` directory under hashed folder names, so include that directory in your backups alongside the database.

### Custom Fields[​](#custom-fields "Direct link to Custom Fields")

If the four built-in fields don't cover what you need to track — SKU, supplier code, shelf location, whatever it is — you can add up to four [Custom Fields](docs__advanced-topics__custom-fields.md#custom-fields) to products.

## Inventory Tracking[​](#inventory-tracking "Direct link to Inventory Tracking")

If you stock physical goods, Invoice Ninja can keep count for you. Flip on **Track Inventory** in the Product Settings panel and the app will start decrementing stock as invoices go out and, optionally, email you when a product dips below a threshold you set. Thresholds can be set globally for all products or fine-tuned per product.

![Product settings](/assets/images/product_settings_v5-0419eeba3b8fd556e8236bf561d05224.png "Product settings")

![Inventory tracking on a product](/assets/images/edit_product_with_inventory_tracking_v5-1a2bcd0c6de3baee328f08d69cb1a5b6.png "Inventory tracking on a product")

Current stock level is shown whenever you view a product. For a snapshot of the whole catalogue, head to **Reports**, choose the **Product** report, and export a CSV of every product with its stock on hand.

Stock doesn't only go down. If you also use [Purchase Orders](docs__user-guide__purchase-orders.md), receiving a purchase order automatically tops up the inventory level for each product on it, so your counts stay accurate without manual bookkeeping.
