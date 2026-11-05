# Recurring Invoices | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/user-guide/recurring-invoices

---

On this page

A recurring invoice is the template you set up once so Invoice Ninja can bill a [client](docs__user-guide__clients.md) on a schedule — monthly retainers, quarterly memberships, annual renewals, weekly service fees. You build it like any other invoice, tell the app how often to run it, and from then on a fresh [invoice](docs__user-guide__invoices.md) is generated on each cycle, emailed to the contacts you've chosen, and (if you'd like) charged automatically against the card or bank account on file.

It helps to keep one distinction in mind from the start: the recurring invoice itself is never sent to your client. It's the blueprint. What your client actually receives is a regular invoice that the blueprint produced on its due day — with its own number, PDF, payment link, and balance. The recurring record stays behind the scenes, tracking what's been generated and what's still to come.

[](/assets/videos/recurring_invoices/create_recurring_invoice_v5.mp4)

## Creating a Recurring Invoice[​](#creating-a-recurring-invoice "Direct link to Creating a Recurring Invoice")

Choose *New Recurring Invoice* and fill it in the way you would any normal invoice: client, line items, taxes, notes, terms, footer — the items area behaves identically to [invoice items](docs__user-guide__invoices.md#items), and you can attach a project, set an exchange rate, or apply a discount in the usual way. The two things that make this form different are the **Frequency** and **Remaining Cycles** fields, which control the schedule, and the support for reserved keywords in line descriptions (covered further down) so dates like "March 2026" update themselves each cycle.

When you're happy with the template, press *Save*, then *Start*. Saving on its own only stores the draft; starting is what puts it on the billing calendar.

![Recurring invoice start dropdown](data:image/png;base64,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)

## The Schedule: Frequency, Start Date, and Cycles[​](#the-schedule-frequency-start-date-and-cycles "Direct link to The Schedule: Frequency, Start Date, and Cycles")

The **Frequency** is how often a new invoice is produced — weekly, monthly, every three months, annually, and so on. The **Start Date** (defaulting to today) is when the first invoice goes out; set it in the future if you need the first bill to land on a particular day. **Remaining Cycles** tells Invoice Ninja how many invoices to generate before considering the job done — pick a specific number for a fixed-term engagement, or *Endless* for open-ended retainers and subscriptions that run until you stop them.

The **Due Date** setting controls how the due date on each generated invoice is calculated from the day it's issued (for example, fourteen days after issue). This is separate from the schedule — it only affects when payment is expected on each individual invoice.

## Statuses: What Each One Means[​](#statuses-what-each-one-means "Direct link to Statuses: What Each One Means")

A recurring invoice moves through a handful of states as it lives out its life. A **Draft** is a saved template that hasn't been started yet — nothing goes out until you press Start. Once you do, it becomes **Pending**: committed to the schedule but still waiting for its first run. After the first invoice is generated it flips to **Active** and stays there while cycles remain. If you **Stop** it, the status changes to **Paused** and no further invoices will be created until you start it again. When the last cycle has been billed the record is marked **Completed**. **Archived** and **Deleted** are housekeeping states for tidying up finished or unwanted records, and never affect the invoices that have already been generated.

## Auto Bill: Charging the Card on File[​](#auto-bill-charging-the-card-on-file "Direct link to Auto Bill: Charging the Card on File")

Auto Bill decides whether generated invoices are charged automatically against the client's saved payment method (set up through one of your [payment gateways](docs__user-guide__gateways.md)) or simply emailed for manual payment. You've got four ways to configure it.

**Enabled** means the client is always auto-billed whenever a valid payment method is on file — the most common choice for subscriptions and ongoing retainers. **Disabled** means the invoice is never auto-billed; the client receives it and pays whenever they like. The two middle options put the choice in your client's hands during checkout: **Opt-Out** shows them a checkbox that's pre-ticked to enable auto-billing (so most will stay on it unless they actively untick), while **Opt-In** shows the same checkbox pre-unticked (so they only get auto-billed if they explicitly agree). Opt-in and opt-out are useful where consent matters for regulatory or trust reasons. If you're offering a hosted checkout experience rather than billing an existing client directly, have a look at [Payment Links](docs__user-guide__subscriptions.md).

## More Actions[​](#more-actions "Direct link to More Actions")

![More Actions](/assets/images/recurring_invoices_homescreen_more_actions-3ddfe8f65a0616c217f4f0a01a8dc8fc.png)

Selecting one or more recurring invoices from the list, or opening *More Actions* inside an edit screen, exposes the controls you need to manage an active template. **Start** only appears on Drafts and puts them on the schedule. **Stop** only appears on Active records and pauses them — the status becomes Paused and no further invoices are generated until you start it again, which is ideal for a client on holiday, a temporarily suspended service, or a contract under review. **Archive** and **Delete** tidy the template away without touching any of the invoices it has already produced; **Restore** brings an archived or deleted record back, and when it restarts it will catch up by sending any missed cycles at roughly one per hour until it's back in sync.

### Update Prices[​](#update-prices "Direct link to Update Prices")

Update Prices walks every line on the template and refreshes it against the current price in your [Products](docs__user-guide__products.md) list. If you've raised the price of an item you sell, this is how you carry that change into existing recurring invoices going forward — already-generated invoices are untouched, but future cycles will use the new price.

### Increase Prices[​](#increase-prices "Direct link to Increase Prices")

Increase Prices does what it sounds like: bumps every line on the template by a percentage you choose. Handy for an annual cost-of-living adjustment across your customer base.

![Increase recurring invoice prices](/assets/images/increase_recurring_invoice_prices-9a19dee1e6766e9e8b460d5495756c74.png)

## Overview, History, Schedule, and Activity[​](#overview-history-schedule-and-activity "Direct link to Overview, History, Schedule, and Activity")

On desktop, clicking a recurring invoice row (anywhere except the invoice number) opens a side panel with four tabs.

![Recurring invoice overview pane](/assets/images/click_recurring_invoice_overview_pane-c4e9fee558c316cca17912df2933893e.png)

The **Overview** tab summarises the essentials at a glance — amount, balance, next send date, frequency, remaining cycles, auto-bill state, and status.

![History](/assets/images/history_panel_recurring_invoice-39330e9f9969ef5aae1b4297cd73b5f0.png)

**History** is a chronological list of every invoice this template has already produced, with the total of each one — the running record of what's actually been billed.

![Schedule](/assets/images/schedule_panel_recurring_invoice-47ba4b3a86dbf2430b618b6b815a5187.png)

**Schedule** flips the view forward and shows when the upcoming invoices will go out, along with the due date each one will carry, based on your Frequency, Start Date, Remaining Cycles, and Due Date settings.

![Activity](/assets/images/activity_panel_recurring_invoice-426c645e4e6e981327fd60360c7f0430.png)

**Activity** is the audit trail — who created, edited, stopped, or otherwise touched the template, and when.

## Reserved Keywords in Line Descriptions[​](#reserved-keywords-in-line-descriptions "Direct link to Reserved Keywords in Line Descriptions")

Because a recurring invoice is generated over and over, hardcoding "February 2026" into a description isn't much use — by the next cycle it's wrong. Invoice Ninja gives you a set of reserved keywords that are replaced with the correct date values each time the PDF is generated:

- :MONTH
- :YEAR
- :QUARTER
- :WEEK
- :WEEK\_BEFORE
- :WEEK\_AHEAD
- :MONTHYEAR

:MONTH becomes the current month name (January), :YEAR becomes the numeric year (2024), :QUARTER becomes something like Q2, and :MONTHYEAR combines them. :MONTH, :YEAR, :QUARTER, and :MONTHYEAR also support basic arithmetic — addition, subtraction, multiplication, and division — so you can shift the resolved date forward or back.

The pattern is:

> %KEYWORD% %OPERATION% %VALUE%

Imagine you bill gym membership every three months. Put this in the line description:

> Gym membership: :MONTH to :MONTH+3

![alt text](/assets/images/reserved-keywords-step-one-b57944b01b9931ff4246e7175bd660be.png "Typing reserved keys in description")

Save and preview:

![alt text](/assets/images/reserved-keywords-pdf-4a1d8070b70c797f2649d9e407da1cc4.png "Screenshot of PDF")

Each cycle the line now names the correct three-month window without you touching it.

### Supported combinations[​](#supported-combinations "Direct link to Supported combinations")

```
Month: :MONTH

Year: :YEAR

Quarter: :QUARTER

:MONTH (+, -, *, /) e.g. :MONTH+1 :MONTH-1 :MONTH*2 :MONTH/2

:YEAR (+, -) :YEAR+1 :YEAR-1

:QUARTER (+, -) :QUARTER+1 :QUARTER-1

:MONTHYEAR (+, -) :MONTHYEAR :MONTHYEAR+1
```

## Date Ranges[​](#date-ranges "Direct link to Date Ranges")

Simple keywords are handy, but sometimes you need a full range — for example:

> Gym membership: February 2021 to February 2023

Type it like this:

> Gym membership: [MONTHYEAR|MONTHYEAR+24]

Gym membership: February 2021 to February 2023.

![alt text](/assets/images/reserved-keywords-monthyear-preview-dba3874fb63b2aaf420b68454622cd84.png "Screenshot of PDF")

You can also spell it out the long way:

> Gym membership: :MONTH :YEAR to :MONTH :YEAR+2

The **[MONTHYEAR|MONTHYEAR]** syntax handles overlapping dates cleanly, so ranges that cross a year boundary stay tidy.

### Supported combinations[​](#supported-combinations-1 "Direct link to Supported combinations")

```
[MONTHYEAR|MONTHYEAR +, -], [MONTHYEAR|MONTHYEAR+16], [MONTHYEAR|MONTHYEAR-2]
```

### Translations[​](#translations "Direct link to Translations")

The word "to" between the two ends of a range isn't hardcoded — it's pulled from [your localization settings](docs__user-guide__basic-settings.md#localization), so ranges render in your clients' language.

## E-Invoicing and Invoice Period Definition[​](#e-invoicing-and-invoice-period-definition "Direct link to E-Invoicing and Invoice Period Definition")

Some billing relationships — particularly those requiring compliant e-invoices — need you to explicitly state the service period the invoice covers (for example, February 2026 through April 2026). The **E-Invoice** tab on a recurring invoice gives you a **Start Date** and **End Date** field for exactly this.

![alt text](/assets/images/recurring_invoice_period-5eaafaabb22221d08b7cb245aa49e5c7.png "Invoice Period")

Both fields accept natural-language expressions and are evaluated with PHP's [date\_create()](https://www.php.net/manual/en/function.date-create.php) function, so you can describe the period the way you'd say it out loud.

Say your invoices generate on the 1st of October 2025 and you set:

Start Date: first day of last month
End Date: last date of last month.

The invoice will carry a period of 1st September 2025 through 30th September 2025.

You can chain phrases together for finer control:

Start Date: first day of month
End Date: first day of month, +1 month

That produces 1st September 2025 through 1st October 2025.

## Common Workflow Video Guides[​](#common-workflow-video-guides "Direct link to Common Workflow Video Guides")

### Generate But Hold For Review[​](#generate-but-hold-for-review "Direct link to Generate But Hold For Review")

This guide shows how you can generate recurring invoices on a schedule, but hold them for review prior to sending.

Loading video...
