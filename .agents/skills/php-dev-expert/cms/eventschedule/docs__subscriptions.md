# Subscriptions & Passes: Multi-Visit Tickets - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/subscriptions

---

User Guide

# Subscriptions & Passes

Sell one pass that a guest pays for once and reuses across many of your events - like a class pack, a membership, or a festival wristband.

Feature overview: [Class packs and memberships](https://eventschedule.com/features/passes)

Docs
/
Subscriptions & Passes

On this page

## What is a subscription?

A **subscription** (also called a **pass**) is a special ticket your guest pays for **once** and then reuses to get into **several of your events** with a single QR code. Think of it like a gym membership, a 10-class punch card, or a festival wristband.

It helps to compare it to the two things you may already know:

- **A normal ticket** gets one person into *one* event.
- **A subscription** gets one person into *many* events - you decide how many visits it's worth and which events it covers.

A pass is made on the **Tickets** tab of an event, as a ticket type with one switch turned on. It is scanned with **Scan Ticket** on the Sales page like any ticket, and its use is tracked on the Sales page's **Subscriptions** tab.

Two different things are called a subscription:

- **The pass you sell to guests**, which this page is about. The buyer pays once and Event Schedule never bills them again: a pass is a multi-use ticket, not an auto-renewing card on file. When it runs out of visits or expires, they buy another.
- **Your own plan**, which is what you pay Event Schedule for Pro or Enterprise. It is managed on the [Plan tab](docs__managing-schedules.md#plan) of your schedule, not here. Nothing on this page changes your billing.

Passes need a Pro plan

Pro
 - Requires the Pro plan
The pass switch is a **Pro** feature, and a priced pass needs Pro to sell as well, since [selling a ticket that costs money](docs__tickets.md#plan-table) is Pro in its own right. Free registration and scanning a QR code at the door are on every plan.

The plan is checked when the pass is used, not only when it is sold. If a schedule drops back to the free plan its pass tickets keep every setting and the scanner still checks holders in, but they can no longer book dates in advance. A selfhosted install counts as Enterprise, so nothing on this page is held back there.

## How it works

There are four stages, and the rest of this page walks through each one:

1. **You create the pass** - add a ticket type, turn on the pass switch, then choose how many visits it's worth and which events it covers.
2. **A guest buys it once** and receives a single QR code.
3. **Your staff scan the QR** at each event - the first scan of the day at an event records one visit.
4. **You watch the usage** on the **Subscriptions** tab of the Sales page.

In short: buy once, scan at Event A (visit 1), scan at Event B (visit 2), and so on until the visit limit or the expiry date is reached.

## A worked example

Meet **Maria**, who runs a yoga studio with classes most days. She wants to sell a **10-Class Pass** for $120 instead of charging per class. Here's how she uses subscriptions:

1. Maria creates an event called **"Class Passes"** just to sell the pass on.
2. On that event's **Tickets** tab she presses **Sell tickets**, sets the ticket type's **Type** to "10-Class Pass" and its **Price** to $120, then turns on **"This is a pass or subscription (multi-use)"**.
3. She picks the type **Visit pass (fixed number of visits)**, sets **Number of visits** to 10, sets **Valid for (days)** to 90, leaves **Admissions per event** at 1, and sets **Covered events** to **All events in this schedule**.
4. A student buys the pass once and gets a QR code by email.
5. At each class the front desk opens **Scan Ticket** on the Sales page, sets **Scanning at event** to that class, and scans the student's QR. The screen reads **"Welcome - checked in"** with **"1 of 10 visits used"**, then "2 of 10 visits used", and so on. After ten classes it reads **"All visits used"**.
6. Maria opens **Sales → Subscriptions** any time to see who bought a pass and how many classes they've attended.

That's the whole feature in one story. The sections below explain each choice.

## Step 1 - Create the pass

A subscription is a normal ticket type with one switch turned on. To create one:

1. Edit the event you want to sell the pass on and open the **Tickets** tab.
2. Press **Sell tickets** (the middle choice, between Free registration and Tickets elsewhere). The ticket types are right under it.
3. Fill in a ticket type: its **Price**, and its name in the **Type** field (required once the event carries more than one ticket type). Leave **Quantity** blank to sell an unlimited number of passes, or enter a number to cap the run.
4. Turn on **"This is a pass or subscription (multi-use)"**, under the ticket type. It opens on **Season pass** if the event repeats and **Visit pass** if it does not. Below Pro the switch is locked, with a **See what Pro adds** link under it.
5. Pick the **Subscription type** you want, then fill in the fields below it: **Admissions per event**, **Number of visits**, **Valid for (days)** and **Covered events**.
6. Optionally turn on **"Let holders book seats in advance"** and set its cancellation rules.
7. Save the event.

**A pass has one stock pool, not one per date.** On a normal ticket, **Quantity** is the number available *on each date*. A pass is not tied to a date, so its quantity is a single pool across the whole run: set it to 50 and you sell 50 passes in total, however many events they cover.

**One pass per order.** A pass is a single redeemable unit: one QR code with one visit counter. Event Schedule fixes **Max Per Order** at 1 on any pass ticket, so the buyer cannot select more than one, and the form does not offer **+ Add Limit** on a pass. To buy passes as gifts, place a separate order for each.

A pass also cannot share an order with normal single-date tickets. Trying it shows "A season pass cannot be purchased together with single-date tickets", so buy them in separate orders.

**No Individual tickets.** A pass is one QR code for its holder, so an event with a pass type cannot use [Individual tickets](docs__tickets.md#checkout). While any ticket type is a pass, that switch in the Checkout row is off and disabled, with a line saying why. To let a holder bring guests, use [Admissions per event](#admissions-per-event).

### Subscription types

The type decides how many times the pass can be used:

| Type | What it does | Use it for |
| --- | --- | --- |
| Visit pass (fixed number of visits) | A set number of visits, which you enter in **Number of visits**. Each visit is one event-day. | Class packs, punch cards, "10 entries" bundles |
| Membership (unlimited until expiry) | Unlimited visits to the covered events until the pass expires. Set the window in **Valid for (days)**; leave it blank and the membership never expires. | Monthly or annual memberships |
| Festival pass (each event once) | One visit to each covered event. Once a covered event has been used, that event is spent even if other events remain. | Multi-day festivals, a conference series |
| Season pass (recurring event) | Every occurrence of the recurring event it is sold on, once per date. Only offered when the event repeats. | A weekly class or a recurring show |

Which fields you see depends on the type:

- **Number of visits** appears for a Visit pass only, and is required.
- **Valid for (days)** counts from the moment of purchase, not from a fixed calendar date. Leave it blank for no expiry. Every type except a Season pass offers it.
- **Covered events** appears for every type except a Season pass, which always covers the dates of the recurring event it is sold on.
- **Admissions per event** and **Let holders book seats in advance** are available on every type.

### Covered events

Coverage decides *which* events the pass works at. It always resolves inside the schedule the selling event belongs to, so a pass can never be redeemed at another schedule's events.

| Coverage | What it means | Good to know |
| --- | --- | --- |
| All events in this schedule | The pass works at every event on the schedule. | Events you create later are covered automatically. |
| All events in a sub-schedule | The pass works at every event in the sub-schedule you choose. | Future events in that sub-schedule are covered automatically. You need at least one sub-schedule to pick from. |
| Specific events | The pass works only at the events you hand-pick from the searchable list. | A fixed list - new events are not added automatically. At least one event is required. |

The "pass shop" pattern

The tidiest way to sell a pass is to create one event just for it - for example "Memberships" or "Class Passes" - put the pass ticket there, and set its coverage to your real events. On a one-off event, a pass type is not taken off sale when the event's start time passes, so the shop event's own date does not end pass sales. Use the ticket type's **+ Add Sales Dates** to close them on a date of your choosing.

To keep that selling event off your public calendar, set **Visibility** to **Unlisted** on the event's **Listing** tab: unlisted events are not listed on your schedule, but anyone with the link can still open the page and buy (you can add an optional password). 

Enterprise
 - Requires the Enterprise plan
Unlisted needs an Enterprise plan. Do not use **Draft** or **Internal** here: both are members-only, so guests could not reach the page to buy the pass at all.

## Step 2 - Buyers purchase

For the guest, buying a pass is exactly like buying a normal ticket - they pick it, pay, and get a confirmation email.

Before they buy, the ticket carries a badge that says what it is:

- **Subscription · 10 visits** for a visit pass, **Subscription · Unlimited visits** for a membership, a plain **Subscription** for a festival pass, or **Season Pass · Valid for all dates** for a season pass.
- **"Book your dates after purchase"** when advance booking is switched on, followed by the cancellation rule once you have set a deadline.

Their confirmation email carries the pass button ("Manage my season pass" - it opens every kind of pass). That private page shows:

- **Visits used** - "2 / 10" on a visit pass, a running count on a festival pass, or "Unlimited visits" on a membership or season pass.
- **Admissions per event** - only when the pass admits more than one person.
- **Valid until** - the expiry date, if you set one.
- **Covered events** - the events the pass works at, so they know where to use it. Sub-schedule and specific-event passes list the events by name and date (up to 50); a pass covering the whole schedule shows "All events in this schedule" instead of a list, and a season pass lists nothing because it is simply every date of its own event.
- The QR code to show at the door, and the booking panel if advance booking is on.
- An [Add to Google Wallet](docs__tickets.md#wallet-passes) button, where the operator has enabled wallet passes. The pass saves as one undated wallet pass rather than one per date, and shows how many people it admits at each event when that is more than one. If you set **Valid for (days)**, Google Wallet archives the pass once it expires.

## Advance booking

By default a pass is scan-at-the-door: the holder just turns up and scans in. If you want holders to reserve a seat for specific dates ahead of time, turn on **"Let holders book seats in advance"** on the pass.

- **One shared pool of seats** - advance bookings and regular ticket sales draw from the same capacity, so you can never oversell. If the room seats 50 and 30 holders book ahead, 20 seats remain for regular buyers.
- **Max advance seats per date (optional)** - caps how many seats holders may reserve on any one date, keeping some walk-up inventory aside. Leave it blank for no pass-specific limit.
- **Holders book from their pass page** - the private link in their confirmation email lists upcoming dates with the seats left on each; they book or cancel a date themselves, and each booking spends one visit up front, until they hit their limit.
- **Booked or attended** - the Subscriptions tab shows which dates a holder has reserved versus actually attended, and the check-in dashboard shows how many seats are reserved for the date.

On an event with [allocated seating](docs__allocated-seating.md)

Booking ahead gives the holder an actual seat, chosen for them as the best available - they get no seat picker, and the seat is shown beside the date on their pass page. Cancelling gives that exact seat back.

The pool is per **price band** rather than one room-wide number, and a pass may take a seat in any band: there is no way to restrict a pass to one part of the house.

The list of bookable dates covers up to a year ahead (at most 60 dates per covered event) and stops at the pass's expiry, so every date offered is a date the pass can still be redeemed on. On a festival pass, booking a date spends that event's single visit, so its other dates drop off the list.

### Cancellation policy

Out of the box, holders can cancel a booked date at any time and the visit is credited back to their pass. With limited seats that invites no-shows: a late cancellation means the seat can't be resold and the waiting list never gets its chance. Two settings on the pass, both shown once advance booking is on, let you tighten this:

- **Cancellation deadline** - how long before the event starts a booking can still be cancelled with the visit credited back. The choices are "Any time - visit always credited" (the default), "Until the event starts", or 12, 24, 48, 72 or 168 hours before the start.
- **After the deadline** - what a late cancellation does. This second setting only appears once you pick a deadline. **"Allow cancelling, but do not credit the visit back"** (the default, also called forfeit) still releases the seat to other guests and the waiting list, but the visit stays spent, so a no-show doesn't get a free credit. **"Do not allow cancelling"** closes cancellation entirely and the booking stands.

Holders always see the rules up front: the deadline appears on the ticket page before purchase, on their pass page next to each booked date, and in the booking confirmation email. A late "Cancel (no credit)" click asks for explicit confirmation before forfeiting the visit, and a mis-click is never fatal: any booking can be undone with full credit within 15 minutes of being made, even past the deadline. When a seat is freed before the event starts - credited or forfeited - anyone on the [waiting list](docs__tickets.md#waitlist) is notified automatically.

Forfeited but they turn up anyway?

A forfeited booking never revives. If the holder shows up and scans in after forfeiting, that's a brand-new visit, subject to the pass's visit limits (on a festival pass, the one visit for that event is already spent). Changing the policy on the pass applies to existing bookings too.

## Admissions per event

By default a pass admits one person - the holder. To let the holder bring a guest (or a few), set **Admissions per event** when you create the pass. It's the total number of people who can enter at each event, **including the holder**: leave it at **1** for holder-only, or set **2** so they can bring one guest. When it's above 1, the holder's pass page shows the number too.

A guest doesn't use up a visit

Party size is separate from the visit count. A Visit pass good for 10 visits with 2 admissions per event still counts each event as a **single** visit - so the holder can bring a guest to all 10 events.

At the door it's one scan per person:

- Scan the QR once for each person, up to the limit. The scanner shows **"Admitted 1 of 2"** with **"Scan again to admit the guest."**, then **"Admitted 2 of 2"** and **"All guests admitted."**
- If the group arrives together, tap the **"Admit guest"** button (it shows how many admissions are left) instead of pointing the camera at the same QR again.
- Once every admission is used, a further scan reads **"All 2 admissions already used today"** - and, as always, no extra visit is spent.
- Extra people count against the event's capacity, so an extra admission is only granted while the date still has a free seat.
- The [check-in dashboard](docs__tickets.md#checkin-dashboard) shows a second headcount, "admitted (incl. guests)", next to the number of passes checked in.

Example: two membership tiers

Sell an **"Apprentice"** pass with Admissions per event set to **1** - the holder comes alone - and an **"Explorer"** pass set to **2** that lets them bring a friend to every event, all without using extra visits.

## Step 3 - Scan at the door

Because a pass can be valid across many events, the scanner needs to know *which* event you're checking people into right now.

1. Open **Admin Panel → Sales** on your phone and tap **Scan Ticket**, at the end of the page's title row.
2. At the top, check **Scanning at event** and set it to the event happening now. It arrives pre-selected (an event with sales today, otherwise one running today, otherwise the next one coming up). Today's events are listed first, then the ones coming up, then past ones, up to 100 in all, whether or not they sell tickets of their own, and a recurring event shows the date the door is on rather than its first date. Your choice is remembered on that device for as long as that event is on today.
3. Point the camera at the guest's QR code. A visit is recorded and the result appears. A clean check-in carries on to the next guest by itself after three seconds, except while **Admit guest** is offered; anything else waits for **Scan next**.

One visit per event, per day

Scanning the same person at the same event again on the same day shows "Already checked in today" and does **not** use another visit - so there's no harm in double-scanning. (On a pass that admits more than one person, the repeat scan admits the next person on that same visit instead.)

Check-in for a date opens **24 hours before** the event starts and closes when it ends (its start plus its duration, or two hours if no duration is set). Outside that window the pass still reads as valid, and the scanner tells you when the doors open or that the event is over.

### What the scanner shows

| Result | What it means | What to do |
| --- | --- | --- |
| Welcome - checked in | A visit was recorded, with the running count below it: "3 of 10 visits used" on a visit pass, "Unlimited visits" on a membership or season pass, "One visit per event" on a festival pass. | Let them in. |
| Admitted 1 of 2 | A pass that admits more than one person let someone in and still has an admission left for this event. | Tap **Admit guest**, or tap **Scan next** and scan the same code again. No extra visit is used. |
| Already checked in today | They already entered this event today. The time of that entry is shown. | Let them in - no extra visit is used. |
| All 2 admissions already used today | Every admission on a multi-person pass has been used at this event today. | Sell a ticket for anyone else in the group. |
| Already checked in today, with No seats left for another guest | A multi-person pass still has an admission left, but the event is full. | Nobody else comes in on this pass unless a seat frees up. |
| Valid pass | The pass is fine but it's too early: check-in for this date hasn't opened yet. The line below gives the opening time. | Ask them to come back, then scan again. |
| Valid pass - today's event has ended | The occurrence you're scanning at has finished. | Nothing to do - no visit is used. |
| Valid pass - no event scheduled today | The selected event doesn't run today. The next date is shown. | Check the **Scanning at event** selector is set to the event in front of you. |
| All visits used | The pass has reached its visit limit, or a festival pass has already been used at this event. | Sell a new pass or a single ticket. |
| This pass has expired | The pass is past its valid-until date. | Sell a new pass. |
| Not valid for this event | This pass doesn't cover the event you're scanning at. | Check the **Scanning at event** selector; otherwise sell a ticket. |
| This ticket is not paid This ticket is cancelled This ticket is refunded This ticket has expired This ticket is awaiting payment review | The order behind the pass is unpaid, cancelled or fully refunded, or it expired before it was paid. That is a checkout that ran out of time, not the pass passing its valid-until date. Awaiting payment review means the payment came in for a different amount than the order, so it is held until a site admin approves it. A partial refund leaves the order paid, so the pass keeps scanning. | Settle the payment or sell a ticket. A payment problem is the only thing the scanner treats as a hard error - every other outcome above is a neutral status, so a good pass never reads as fraud. |

## Step 4 - Track usage

Open **Admin Panel → Sales** and choose the **Subscriptions** tab, which carries the number of passes sold. The tab is there on Pro, and on any account once a pass has been sold. It covers the events of every schedule you manage, and two figures at the top count the passes and the visits redeemed across them.

Each paid pass is one row, sorted by holder name:

- Their name with their email under it, the ticket type, the visits used, and the expiry date.
- The visit count reads **2 / 10** on a visit pass, which has a limit to count against, and as a plain total ("3 visits") on every other type.
- A status of **Active**, **Used up** (a visit pass at its limit) or **Expired**.
- Press the arrow before the name to open the visit log: which event, the date and time, and whether the visit is **Attended**, **Booked** (reserved in advance, not yet scanned) or **Forfeited** (a late cancellation that kept the visit spent).
- **View Ticket**, at the end of the row, opens the holder's own pass page, which is handy for support questions.

Paid passes only

The tab lists passes whose order is a completed sale. An unpaid, cancelled or fully refunded order is not shown, so a pass you refund in full disappears from the list along with its visit log. If you need that history, export or note it before issuing the refund. A partial refund keeps the order paid, so the pass stays on the list and keeps working.

The real-time [check-in dashboard](docs__tickets.md#checkin-dashboard) also counts pass scans alongside regular tickets, and shows how many seats holders have reserved in advance.

## Good to know

- **One visit per event, per day.** Re-scanning the same person at the same event the same day never uses a second visit.
- **Bring a guest.** A pass can admit more than one person per event (set **Admissions per event**) without using extra visits.
- **Sold on its own.** One order buys one pass, and a pass can't share an order with normal single-date tickets.
- **Not auto-renewing.** It's a one-time purchase; there's no recurring billing, and no card is kept on file for the holder.
- **Refunds.** Refund a pass from the Sales page like any other sale: [Refund Ticket](docs__tickets.md#refunds) sends the money back on a Stripe, PayPal or Razorpay sale, and **Mark as Refunded** records it on any other method. A full refund, or cancelling the order, stops the pass from being scanned (the scanner reports it as refunded or cancelled), releases every date it had booked, and removes it from the Subscriptions tab together with its visit log. A partial refund does none of that: the pass keeps working.
- **Future events.** "All events" and "sub-schedule" coverage automatically include events you create later; "Specific events" does not.
- **Advance booking is checked when it is used, not at the till.** Booking dates ahead needs the schedule to be on a paid plan at that moment, so a pass sold while you were on Pro stops taking bookings if the schedule has since lapsed to free. Scanning it in at the door carries on working.
- **Webhooks.** 

  Pro
   - Requires the Pro plan
  Pass scans and advance bookings fire [webhooks](docs__developer__webhooks.md) (**ticket.scanned**, **ticket.booked** and **ticket.booking\_cancelled**) if you want to feed another system.

## See Also

- [Selling Tickets](docs__tickets.md) - set up ticketing, payment, and ticket types
- [Check-in at the Door](docs__tickets.md#check-in) - scanning QR codes and the check-in dashboard
- [Creating Events](docs__creating-events.md) - add the events your pass covers
- [Gift Cards](docs__gift-cards.md) - sell a prepaid balance spendable on any event
- [Appointments](docs__appointments.md) - sell bookable time slots instead of event admission
- [Plan](docs__managing-schedules.md#plan) - your own Pro or Enterprise subscription and billing

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/subscriptions.blade.php)
