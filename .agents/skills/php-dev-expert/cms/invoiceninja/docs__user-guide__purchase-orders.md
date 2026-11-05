# Purchase Orders | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/user-guide/purchase-orders

---

On this page

A purchase order is the mirror image of an invoice — where an invoice is something you send *to* a client, a purchase order is something you send *to a vendor* to request goods or services at an agreed price. It's a clear, written record of what you're ordering, how much you expect to pay, and on what terms. Once your vendor accepts it, the PO becomes a binding agreement between the two of you, which saves a lot of back-and-forth later if an invoice arrives with surprises on it.

Freelancers, small businesses, and agencies typically reach for a PO when buying stock, commissioning a subcontractor, ordering equipment, or locking in a larger spend that needs sign-off before the money goes out. If you're new to the buy-side of the app, it's worth reading [Vendors](docs__user-guide__vendors.md) first — a vendor has to exist before you can raise a PO against them — and [Expenses](docs__user-guide__expenses.md), since an accepted PO usually ends its life as an expense on your books.

## Creating a Purchase Order[​](#creating-a-purchase-order "Direct link to Creating a Purchase Order")

[

](/assets/videos/purchase_orders/create_purchase_order.mp4)

Creating a purchase order follows much the same flow as creating an invoice. Before you start, you'll need a [vendor](docs__user-guide__vendors.md) to raise the PO against — you can either add one ahead of time from the Vendors tab, or create one on the fly from the purchase order screen.

### Details[​](#details "Direct link to Details")

The *Details* panel holds the basics of the order:

- **Vendor** — who you're buying from. Select one of your existing vendors.
- **Purchase Order Date** — defaults to today, and is the date the PO is issued.
- **Due Date** — an optional cut-off showing how long your offer stands.
- **Partial/Deposit** — an optional amount owed up front, with its own due date ahead of the PO's full due date. Handy for deposits on larger orders.
- **Discount** — a flat amount or percentage taken off the total.

### Items[​](#items "Direct link to Items")

The items list is where you spell out what you're actually ordering. Each line can pull from your [Products](docs__user-guide__products.md) catalogue or be typed in fresh:

- **Product** — the name of the product or service.
- **Description** — supporting detail for the line. HTML and Markdown are supported when formatting is enabled under *Settings > Account Management*.
- **Unit Cost** — the agreed price for a single unit.
- **Quantity** — how many you're ordering; multiplied by unit cost to give the line total.

### Bottom Tabs[​](#bottom-tabs "Direct link to Bottom Tabs")

The lower section of the PO is where you add the softer context — terms, notes, and settings that shape how the document looks and behaves.

![Bottom Tabs](data:image/png;base64,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 "Bottom Tabs")

#### Terms[​](#terms "Direct link to Terms")

Any conditions attached to the order — delivery windows, return policy, and so on. Tick *Save as default terms* if you want the same wording on every future PO.

#### Footer[​](#footer "Direct link to Footer")

A small block printed at the bottom of the PDF. Good for disclaimers or standing references. Also savable as a default.

#### Public Notes[​](#public-notes "Direct link to Public Notes")

Notes visible to the vendor, printed on the PDF. Use these for anything that adds helpful context to the order.

#### Private Notes[​](#private-notes "Direct link to Private Notes")

Internal notes, not printed and not visible in the Vendor Portal. Only admin portal users can see them.

#### Settings[​](#settings "Direct link to Settings")

- **User** — who's recorded as having created the PO.
- **Project** — optionally link the PO to a project so its spend rolls up there.
- **Client** — optionally tie the PO to a [client](docs__user-guide__clients.md), which is useful when the purchase is being made on a client's behalf and will eventually be billed back to them.
- **Exchange Rate** — if the vendor invoices in a currency other than your own, set the rate here so the conversion is captured on the PO.
- **Design** — pick any of the built-in templates, or a custom design from *Settings > Invoice Design*.

#### Documents[​](#documents "Direct link to Documents")

Attach pictures, quotes, specs, or contracts to the PO so everything related to the order lives in one place.

## Lifecycle of a Purchase Order[​](#lifecycle-of-a-purchase-order "Direct link to Lifecycle of a Purchase Order")

A PO moves through a handful of states from the moment you draft it to the moment it becomes an expense. Understanding the flow helps you see at a glance where each order sits.

### Draft[​](#draft "Direct link to Draft")

Every PO starts as a draft. At this stage it's yours alone — the vendor can't see it, and you can edit freely. Drafts stay inactive until you either email them or mark them as sent.

warning

Once a draft has been emailed or marked as sent, it can't be moved back to draft.

### Sent[​](#sent "Direct link to Sent")

The PO becomes *Sent* the moment it leaves your hands, whether that's by email from Invoice Ninja or by marking it sent manually (for example, if you handed over a PDF in person or forwarded it from another tool).

### Accepted[​](#accepted "Direct link to Accepted")

![alt text](/assets/images/purchase_order2-73b5723f137d2fef1a4486e4ef34ec23.png "Creating purchase order.")

When your vendor agrees to the order, the PO moves to *Accepted*. Vendors do this themselves through the Vendor Portal — the portal-facing side of Invoice Ninja where they can review the PO, optionally agree to extra terms, and leave a signature on file. At that point you have a binding record that both sides agreed to the same numbers.

### Received[​](#received "Direct link to Received")

Once the goods or services turn up, you can mark the PO as *Received*. If Inventory Tracking is enabled, stock levels for the matching products are incremented automatically, so the count on your shelves stays in step with the paperwork.

### Converting a Purchase Order to an Expense[​](#converting-a-purchase-order-to-an-expense "Direct link to Converting a Purchase Order to an Expense")

A received PO doesn't just sit there — you can convert it into an [expense](docs__user-guide__expenses.md) in one step, which is usually how the order ends its life in your books. The expense inherits the vendor, amount, and line detail from the PO, so you don't re-key anything, and if the PO was linked to a client or project the expense keeps that link too (handy for billing the cost back on). From there the expense behaves like any other — you can mark it paid, attach a receipt, or flag it as billable.

### Cancelled[​](#cancelled "Direct link to Cancelled")

If the order falls through before it's received, mark it *Cancelled* to preserve the record without treating it as live.

### Deleted[​](#deleted "Direct link to Deleted")

A PO can be deleted while it's still in *Sent* or *Draft* status. When you delete one:

- Its status is set to deleted.
- The PO number is suffixed with **\_deleted** so the original number can be reused.

### Archived[​](#archived "Direct link to Archived")

Archiving removes a PO from the default list view without changing any of its data. It's purely cosmetic housekeeping.

warning

An archived PO can't be modified until it's restored.

### Restored[​](#restored "Direct link to Restored")

Restoring a PO from archived or deleted puts it back into whichever state it was in beforehand, with all its data intact.
