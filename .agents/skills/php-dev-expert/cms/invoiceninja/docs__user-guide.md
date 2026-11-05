# Get Started | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/user-guide

---

On this page

Invoice Ninja helps freelancers, small businesses, and agencies send invoices, quote work, track time and get paid. Once your account is set up, you can invoice a client in any currency, accept online payments, run reports, and give customers a branded portal to pay and manage their documents — all from the same place.

This guide walks through the parts of the app you'll actually use day-to-day. Each section explains what something is, when you'd reach for it, and how it connects to the rest of the system.

Invoice Ninja is available on the web and as a native app on iOS, Android, macOS, Windows, and Linux. Everything is synced to the same account, so you can start an invoice on your phone and finish it on your laptop.

## Key Concepts[​](#key-concepts "Direct link to Key Concepts")

A few terms appear throughout the guide. Understanding them up front makes everything else easier.

- **Client** — a person or company you invoice. See [Clients](docs__user-guide__clients.md).
- **Contact** — an individual email address attached to a client. A client can have multiple contacts (for example, Accounts Payable and Operations) and each contact gets their own [Client Portal](docs__user-guide__client-portal.md) login.
- **Invoice** — a bill sent to a client. See [Invoices](docs__user-guide__invoices.md).
- **Quote** — a priced proposal that can be converted into an invoice once the client accepts it. See [Quotes](docs__user-guide__quotes.md).
- **Recurring Invoice** — a template that automatically generates and sends invoices on a schedule (weekly, monthly, annually, and so on). See [Recurring Invoices](docs__user-guide__recurring-invoices.md).
- **Payment** — money received against one or more invoices. See [Payments](docs__user-guide__payments.md).
- **Credit** — a balance owed *to* the client, which can be applied to their future invoices. See [Credits](docs__user-guide__credits.md).
- **Expense** — a cost you've incurred, optionally billable back to a client. See [Expenses](docs__user-guide__expenses.md).
- **Product** — a reusable line-item template (description, price, tax) you can drop into invoices and quotes. See [Products](docs__user-guide__products.md).
- **Client Portal** — the customer-facing side of Invoice Ninja, where contacts view and pay their invoices. See [Client Portal](docs__user-guide__client-portal.md).

## Initial Setup[​](#initial-setup "Direct link to Initial Setup")

When you first sign in you'll land on an empty dashboard. Working through the steps below in order will get you from a blank account to sending your first paid invoice.

### 1. Set Up Your Company Details and Logo[​](#1-set-up-your-company-details-and-logo "Direct link to 1. Set Up Your Company Details and Logo")

Your company name, address, and contact information appear on every invoice, quote, and email you send. Your logo is displayed on PDFs, in emails to your clients, and across the client portal.

```
Settings > Company Details
```

For best results use a landscape-oriented logo — it displays most cleanly across emails, PDFs, and the client portal.

![Company Logo Upload](/assets/images/company_logo-18fedc0e893d1863840405fc9877a724.png "Company Logo Upload Location")

Loading video...

### 2. Configure Your Company Defaults[​](#2-configure-your-company-defaults "Direct link to 2. Configure Your Company Defaults")

Company defaults are the starting point for every new invoice, quote, and client — things like default payment terms, reminder behaviour, and invoice design. Setting them once up front saves you repeating yourself later, and individual clients can still override them when needed.

Loading video...

### 3. Set Up Taxes and Localization[​](#3-set-up-taxes-and-localization "Direct link to 3. Set Up Taxes and Localization")

If you charge tax, configure it before creating your first invoice so tax lines appear correctly from the start. You can set invoice-level taxes (one tax applied to the total), line-level taxes (a different tax per item), or both — and localize currency, date format, and terminology to your region.

```
Settings > Tax Settings
```

Loading video...

For detailed tax setup — including multiple jurisdictions, per-client tax rules, and compliance modes — see [Taxes](docs__user-guide__taxes.md).

### 4. Create Your First Invoice[​](#4-create-your-first-invoice "Direct link to 4. Create Your First Invoice")

Once your company details, defaults, and taxes are in place, you're ready to invoice. The video below walks through the full flow: adding a client, listing items, customising product columns, setting your invoice number pattern, and sending.

Loading video...

See [Invoices](docs__user-guide__invoices.md) for the full reference.

### 5. Connect a Payment Gateway and Get Paid[​](#5-connect-a-payment-gateway-and-get-paid "Direct link to 5. Connect a Payment Gateway and Get Paid")

Connect a payment gateway so clients can pay online directly from the invoice email or the client portal. Invoice Ninja integrates with all major gateways including Stripe, PayPal, Authorize.Net, Square, and many more.

Loading video...

For the full list of supported gateways and setup instructions, see [Payment Gateways](docs__user-guide__gateways.md).

## Important Functionality[​](#important-functionality "Direct link to Important Functionality")

### 1. Enter A Payment[​](#1-enter-a-payment "Direct link to 1. Enter A Payment")

Enter a payment received and record it against an invoice.

Loading video...

### 2. Reverse A Payment[​](#2-reverse-a-payment "Direct link to 2. Reverse A Payment")

Reverse a payment entered incorrectly and restore invoice balance.

Loading video...

### 3. Refund A Payment[​](#3-refund-a-payment "Direct link to 3. Refund A Payment")

Refund a payment made with options to refund via the payment gateways.

Loading video...

## Good To Know[​](#good-to-know "Direct link to Good To Know")

These details won't change how you use the app day-to-day, but are worth knowing if a figure on an invoice ever looks slightly different from what you expected.

### Currency Precision[​](#currency-precision "Direct link to Currency Precision")

Invoice Ninja stores and calculates values in the client's currency, using the currency's standard precision (typically two decimal places — for example, $41.64). For unit prices *below* 1 — common for per-unit components, fractions of an hour, or low-value parts — precision is supported up to six decimal places (for example, $0.123456). Values with more than six decimals are rounded.

- $0.123456 — supported
- $0.1234567 — rounded to $0.123457

### Quantity Precision[​](#quantity-precision "Direct link to Quantity Precision")

Quantity fields support up to six decimal places regardless of currency, which is useful for time entries (for example, 1.25 hours), weights, or measurements.

### Line-Level vs Invoice-Level Tax[​](#line-level-vs-invoice-level-tax "Direct link to Line-Level vs Invoice-Level Tax")

You may see a small, expected difference in totals depending on whether tax is applied per line or to the whole invoice. This is caused by rounding on each line versus rounding once at the end:

| Description | Line Level Tax Calculation | Invoice Level Tax Calculation |
| --- | --- | --- |
| Item 1: $10.33 | $10.33 × 10% = $1.033 → $1.03 | - |
| Item 2: $10.33 | $10.33 × 10% = $1.033 → $1.03 | - |
| Item 3: $10.34 | $10.34 × 10% = $1.034 → $1.03 | - |
| Subtotal | $31.00 | $31.00 |
| Tax Calculation | Sum of rounded individual taxes: $1.03 + $1.03 + $1.03 = $3.09 | Total × Tax Rate: $31.00 × 10% = $3.10 |
| Total | $34.09 | $34.10 |

Both approaches are valid — choose whichever your accountant or local tax authority prefers.

## Where to Go Next[​](#where-to-go-next "Direct link to Where to Go Next")

Once you're up and running, these pages cover the rest of the app in detail.

**Working with customers**

- [Clients](docs__user-guide__clients.md) — add clients, manage contacts and locations
- [Client Portal](docs__user-guide__client-portal.md) — what your customers see
- [Vendors](docs__user-guide__vendors.md) — the businesses you buy from

**Billing and revenue**

- [Invoices](docs__user-guide__invoices.md) · [Quotes](docs__user-guide__quotes.md) · [Credits](docs__user-guide__credits.md)
- [Recurring Invoices](docs__user-guide__recurring-invoices.md) — automated subscriptions and retainers
- [Payment Links](docs__user-guide__subscriptions.md) — share a hosted checkout URL
- [Purchase Orders](docs__user-guide__purchase-orders.md)

**Payments and banking**

- [Payments](docs__user-guide__payments.md) · [Payment Gateways](docs__user-guide__gateways.md)
- [Banking](docs__user-guide__banking.md) · [Transactions](docs__user-guide__transactions.md)

**Operations**

- [Products](docs__user-guide__products.md) · [Tasks](docs__user-guide__tasks.md) · [Projects](docs__user-guide__projects.md)
- [Expenses](docs__user-guide__expenses.md) · [Recurring Expenses](docs__user-guide__recurring-expenses.md)

**Compliance and reporting**

- [Taxes](docs__user-guide__taxes.md) · [E-Invoicing](docs__user-guide__einvoicing.md) · [E-Signatures](docs__user-guide__esignatures.md)
- [Reports](docs__user-guide__reports.md) · [QuickBooks](docs__user-guide__quickbooks.md)

**Configuration**

- [Basic Settings](docs__user-guide__basic-settings.md) · [Advanced Settings](docs__user-guide__advanced-settings.md)

## Frequently Asked Questions[​](#frequently-asked-questions "Direct link to Frequently Asked Questions")

See the [FAQ](docs__user-guide__faq.md).
