# SaaS Monetization: Ads, Promotions, Stay22 - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/saas/monetization

---

SaaS Platform

# Monetization

Cover your hosting costs by monetizing the free tier, and give your paying customers somewhere to advertise.

Feature overview: [White-label ticketing platform](https://eventschedule.com/saas)

Docs
/
Monetization

On this page

## Overview

Monetization lets you earn from the schedules on your instance that are not paying you.
It is off by default and is for multi-tenant hosted installs only: nothing exists until
you set `ADS_ENABLED=true`, and after that you
configure it in the **Monetization** card under
**System → Settings** in the platform admin panel
(`/admin/settings`). The card is shown only when that
variable is set *and* the install runs in hosted mode
(`IS_HOSTED=true`) and is not eventschedule.com
itself. A single-tenant selfhost resolves every schedule to Enterprise, so it has no
free tier and nothing could ever render.

It has two independent halves, and you can run either one on its own:

- **Google AdSense.** Ad units on free schedules' public pages, using your own AdSense account.
- **The promotions network.** Paid schedules buy placement for their events on free schedules' pages. You set the price, and only Stripe's fee comes off what they pay.

Paid schedules never carry either, so removing ads becomes a concrete reason for your
customers to upgrade, alongside removing the **Create your own** card that
promotes your own marketing site to their visitors.

A third earner, the [accommodation affiliate](#accommodation),
is documented on this page but is a separate feature with its own switch:

| Feature | Which schedules carry it | Who earns | Master switch |
| --- | --- | --- | --- |
| **Google AdSense** | Free only | You, through your AdSense account | `ADS_ENABLED` |
| **Promotions network** | Free only | You, in full, with no outside network | `ADS_ENABLED` |
| **Accommodation affiliate** | Any plan, opt-in per schedule | The schedule owner, or you when they have no affiliate ID | `STAY22_ENABLED` |

One credit is not an upsell

The small "Event Schedule" chip in the corner of public pages is the Attribution
Assurance License credit, and on any install other than eventschedule.com it stays on
every schedule, free and paid. Do not sell its removal as a paid feature: there is no
setting that takes it off, and upgrading a customer does not either. Say so on your own pricing page before a customer finds it.

## Consent and privacy

Read this before enabling AdSense

Visitors in the EEA, the UK and Switzerland must be asked for consent before they
are shown personalized ads, and Google requires that this is done through a certified
Consent Management Platform. **Event Schedule does not ship a CMP and does not
detect visitors' regions for consent purposes.**

Google provides a free CMP. Enable the GDPR message under **Privacy &
messaging** in your AdSense account; it needs no changes here. Once AdSense is
fully configured, this application's content security policy automatically allows
Google's ad and consent domains, so no header changes are needed either.

### AdSense

Event Schedule defaults to **non-personalized ads**, which is the safer
setting and the one that requires the least of you. The **Allow personalized
ads** toggle in the Monetization card is off until you turn it on, and doing so
is your decision and your legal responsibility. Even non-personalized ads use cookies, so the
AdSense script itself is not loaded until a visitor allows **Marketing and embedded
content** in the cookie banner, or presses **Allow all**; until then
the ad slot stays empty and collapses. A visitor whose browser
sends the `Sec-GPC` (Global Privacy Control) header is
treated as declining it, so no ad loads for them at all.

Two more things are yours to handle: enabling AdSense means your visitors' browsers
contact Google, so your privacy policy and cookie notice have to say so (you publish both
under [System → Legal Pages](docs__saas.md#legal-pages));
and your AdSense account standing is between you and Google. Do not click your own ads, and do
not ask anyone else to.

### The promotions network and the accommodation map

The promotions network has none of these obligations. It is served entirely by your own
install, sets no third-party cookies, and makes no external requests. When a promotion
fills the slot, the page contacts Google not at all, because the AdSense script is
loaded by the ad unit itself rather than from the page head.

The [accommodation affiliate](#accommodation) is a third case.
It does involve a third party that sets its own cookies, so the same disclosure obligation
applies, but it is never loaded on page load. A visitor who has not allowed marketing
cookies sees an explanation and a button, and nothing reaches Stay22 until they click it.

The consent banner that all of this hangs off appears as soon as any of these is on, so
turning on `ADS_ENABLED` brings it with you. Allowing
**Marketing and embedded content** also enables three first-party
attribution cookies,
`utm_params`,
`utm_referrer_url` and
`utm_landing_page`, which remember for 30 days which
campaign brought a visitor in so a later signup or sale can be credited to it. They are
never written before a visitor accepts, and are cleared if consent is withdrawn. If you
run no ads and no analytics but still want cross-visit attribution, set
`COOKIE_CONSENT_BANNER=true` to show the banner on its
own. List all of these in your cookie notice.

## Turning it on

1. Set `ADS_ENABLED=true` in your
   `.env` and deploy. This is a deliberate
   deploy-time gate: it cannot be switched on from the platform admin panel, so a misclick can
   never start serving ads across your whole instance.
2. Sign in as an administrator, open **Admin** in the sidebar, then
   **System → Settings**. A **Monetization** card appears
   there once the gate above is on.
3. Configure whichever half you want, and press the card's own **Save**.
   The card writes to the settings table, so these values take effect immediately with
   no redeploy.
4. Confirm the [scheduler](docs__saas.md#scheduler)
   is running, whichever way you drive it. Promotions are settled, reconciled and
   refunded by a scheduled command that runs every fifteen minutes, so without it
   campaigns never complete and unspent budget is never returned.

Selling promotions needs Stripe

On-network promotions are prepaid, so your instance needs
`STRIPE_PLATFORM_KEY` and
`STRIPE_PLATFORM_SECRET` set, the same
platform keys that handle subscriptions and boosts. Without them the purchase form
offers only promotion credit you have granted by hand, from the
**Grant Boost Credit** card under **Manage → Boost**,
and nobody can pay by card. Google AdSense has no such requirement.

### Turning it off

Either half can be switched off in the **Monetization** card at any time.
Switching the promotions network off there is safe with campaigns outstanding: they stop
being shown, and the scheduled command keeps settling and refunding what has already
been paid for.

Do not set ADS\_ENABLED back to false while campaigns are outstanding

The master switch stops that scheduled command as well, so a campaign that is still
running is never completed and its unspent budget is never refunded. Switch the
network off in the card first, and leave
`ADS_ENABLED=true` until every campaign has
completed and refunded.

## Google AdSense

1. Create an AdSense account and add your instance's domain as a site.
2. Create a **display** ad unit. Note its numeric slot ID.
3. In the **Monetization** card under **System → Settings**,
   switch on **Show Google AdSense on free schedules** and fill in
   **AdSense publisher ID** (`ca-pub-…`)
   and **AdSense ad slot ID**.

All three are required. The toggle on its own does nothing, and neither does a
publisher ID without a slot ID, so a half-finished setup is inert rather than broken:
no script is loaded, and the content security policy is not widened.

The label above the unit reads "Advertisement", which is one of the two wordings
AdSense policy permits next to a unit. When AdSense has nothing to serve it marks the
unit as unfilled and the whole block collapses, so an empty band is never left behind.

## The promotions network

In the same **Monetization** card, switch on
**Enable the promotions network** and set
**Price per 1,000 impressions** and **Price per click**.
Both rates are copied onto each campaign at the moment it is bought, so changing them
later never re-prices a campaign someone has already paid for.

### What an advertiser buys

A schedule on a paid plan promotes one of its public events from the
**Boost** page in its sidebar: **Boost Event**, pick the event,
then **On this site**. Their side of it is in
[Boost](docs__boost.md#on-network).
Four things have to be true before the form will open:

- the schedule is on **Pro or Enterprise**; free schedules host promotions but cannot buy them;
- the event is published and public, so neither a draft nor an unlisted event;
- the schedule has accepted its own place on the event, the same visibility rule the rest of the app uses;
- on a hosted install, the buyer has a verified phone number on their profile.

They then choose a headline and short description, a pricing model (per 1,000 views or
per click), and a budget. The budget runs from `PROMOTIONS_MIN_BUDGET`
to the lower of `PROMOTIONS_MAX_BUDGET` and the schedule's own
boost spending limit, which starts at `META_BOOST_DEFAULT_LIMIT`
(10 by default) and grows only as the schedule completes Facebook and Instagram boosts. So a
new advertiser's first promotion is capped at 10 unless you raise that schedule's limit in
the **Set Spending Limit** card under **Manage → Boost**
in the platform admin panel. Targeting is
optional: a campaign can be limited to particular kinds of schedule (talent, venue or
curator) and to visitors in particular countries. Leaving both untouched shows it
everywhere.

The advertiser pays up front. Their budget is drawn down as the promotion actually
delivers, and anything unspent is refunded a day after the campaign ends, once any late
delivery has been counted. Because there is no outside ad network involved, none of it
is shared: only Stripe's own fee comes off what the advertiser pays.

### How a promotion is chosen

**Prefer promotions over AdSense** is on by default, and it is what makes
a matching promotion win the slot with AdSense filling in only when nothing matches.
Switch it off and the order reverses: AdSense takes the slot whenever it is configured,
and promotions fill only when it is not.

Some placements are refused no matter what the budget says:

- a schedule is never shown its own promotion, and neither is any other schedule belonging to the same owner;
- a promotion is never shown on the page for the very event it advertises;
- one visitor sees the same promotion at most a few times a day, set by `PROMOTIONS_FREQUENCY_CAP`;
- one IP address is billed for at most 100 views of a campaign a day, set by `PROMOTIONS_IP_IMPRESSION_CAP`, because the per-visitor cap alone can be reset by switching browsers;
- a promotion stops within five minutes of its event being hidden, cancelled or over, even if budget remains, because the pool of live promotions is reused for `PROMOTIONS_CACHE_TTL` seconds;
- a per-click campaign whose click-through rate is still under 0.02% after 5,000 views is paused automatically, so weak creative cannot occupy your inventory for free.

### Any schedule can opt out

**Do not show other schedules' promotions** is a switch on the schedule's
edit page, in the **Advanced** row of the **Settings** tab. It
is free on every plan and appears as soon as either half of monetization is live.
Despite the label it removes **both** paid promotions and AdSense from that
schedule's public pages, so a schedule always has a way to decline. Opting out only
removes that schedule's own inventory, and has no other effect on its plan.

### What advertisers can see

Advertisers see views, clicks, click-through rate, spend and tickets sold on their
campaign page, along with which countries their viewers were in. They are told how many
schedules carried the promotion, but never which ones: the schedules hosting it did not
agree to have their traffic disclosed.

## Reviewing promotions

Every promotion is reviewed before it runs. A paid schedule putting its event in front of
every free schedule's audience is worth a look first, so new campaigns queue up in a card
near the top of **Manage → Boost** in the platform admin panel
(`/admin/boost`), titled with how many are awaiting
review, and appear under **Needs attention** on the admin dashboard.
The advertiser has already been charged and is waiting, so the queue is worth clearing
promptly.

Each campaign in the card shows its headline, description and image, the schedule and
account that bought it, its budget and pricing model, and where a click will lead.
**Approve** starts it immediately. **Reject** refunds the
advertiser in full, back to promotion credit if that is how they paid, and emails them
the reason you type in the box beside the button.

A schedule stops going through the queue once it has a track record: it needs
`PROMOTIONS_AUTO_APPROVE_AFTER` campaigns that were
approved, ran to completion and actually delivered impressions, and it must never have
had a campaign rejected. A single rejection, ever, puts that schedule back in the queue
permanently.

## Where ads appear

Ads and promotions appear in one place: a single slot at the bottom of a free schedule's
public schedule page and public event pages, above the footer. They never appear:

- on any paid schedule's pages;
- on an event page that is actively selling tickets, so an ad can never sit beside the organizer's own buy button;
- on checkout, ticket, appointment booking, gift card or event submission pages;
- inside embedded calendars, or in generated share images;
- on password-protected pages;
- on a schedule's own custom domain;
- on the demo schedule, or on a page the app created for an act or venue that has not [claimed it](docs__creating-events.md#claim);
- to the schedule's own members and administrators;
- to bots and scripted requests, which are filtered out before anything is billed.

The member exclusion means a schedule owner cannot see their page the way a visitor
does. Signed in as a member or an administrator, adding
`?preview_ads=1` to the URL shows the slot without
counting an impression or charging an advertiser. The parameter does nothing for anyone
else.

## Accommodation affiliate

A separate, independent way to earn from your instance: schedules can show a map of hotels
and rentals near an event's venue, powered by [Stay22](https://www.stay22.com),
and bookings made through it pay an affiliate commission.

This is not part of the monetization feature above

It has its own switch, it is unaffected by
`ADS_ENABLED`, it works on a single-tenant selfhost
and on eventschedule.com, and it applies to **paid schedules as well as free
ones**. Most importantly, each schedule owner can supply their own affiliate ID
and keep the commission themselves.

Set `STAY22_ENABLED=true` and an
**Accommodation** row appears in the **Page content** tab of every
schedule's edit page, holding a **Show nearby accommodation** toggle and a
**Stay22 affiliate ID** field. Nothing is shown to visitors until a schedule
owner turns it on there; it is off by default for every schedule, on every plan.

### Who gets the commission

A schedule that enters its own Stay22 affiliate ID keeps its own commission. A schedule that
leaves the field blank falls back to the **Fallback Stay22 affiliate ID** you
set in the **Accommodation affiliate** card under
**System → Settings** in the platform admin panel, so the commission comes to
you instead. The
settings page states this plainly to the schedule owner, both on the toggle itself and as a
warning once the map is live without their own ID.

The fallback is never used on a schedule's own custom domain. A customer paying for a
white-label domain should not have commission taken from it, so on those pages the map
appears only when the owner keeps the commission.

### Consent, and when the map loads

Stay22 sets its own third-party cookies to attribute bookings, so the map is never loaded
when the page opens. Visitors who have already allowed marketing cookies get it immediately.
Everyone else sees a short explanation and a button, and no request reaches Stay22 until
they click. Visitors sending a
[Global Privacy Control](https://globalprivacycontrol.org/)
signal are told why the map is not loading and are given no button at all, and
withdrawing consent removes it from the page. Consent given by clicking the button lasts
for that page view only and is never stored.

**You still have to disclose it.** Add Stay22 to the third-party processors
listed in your privacy policy, and describe the map in your cookie notice. Enabling this
makes your instance an affiliate publisher, which is a disclosure obligation of yours, not
Stay22's. An affiliate disclosure is shown to visitors in both states, whether or not
the map has loaded.

### Where it appears

The map is shown on a public event page only when all of the following hold. Otherwise it is
silently absent, which is the intended behaviour rather than an error:

- the operator set `STAY22_ENABLED=true`, and either the schedule's own affiliate ID or your fallback one resolves;
- the schedule owner enabled it, and the event has a venue whose address has been validated, so it has coordinates;
- the event still has a night left to book, so a past event drops out on its own;
- the page is not an embed, a generated share image, or password-protected;
- the schedule is not the demo schedule.

Check-in and check-out are derived from the occurrence the visitor is looking at, counting
the nights the event actually spans and never fewer than one, capped by
`STAY22_MAX_NIGHTS`. Prices are requested in the same
currency as the event's tickets, and a visitor arriving partway through a multi-day event
is offered the remaining nights rather than nothing.

## Environment variables

The two master switches, `ADS_ENABLED` and
`STAY22_ENABLED`, can only be set here. Some of the
rest are only starting values that the platform admin panel overrides; the others have no
control in the platform admin panel at all and need a redeploy to change.

| Setting | Where you change it |
| --- | --- |
| Master switches | `.env` only, by design |
| AdSense toggle, publisher ID, slot ID, personalized ads | The Monetization card under System → Settings, which wins over the variable |
| Promotions network toggle, priority, CPM and CPC rates | The Monetization card under System → Settings, which wins over the variable |
| Fallback Stay22 affiliate ID | The Accommodation affiliate card under System → Settings, which wins over the variable |
| One schedule's boost spending limit | The Set Spending Limit card under Manage → Boost, per schedule; `META_BOOST_DEFAULT_LIMIT` is where every schedule starts |
| Budgets, caps, currency, auto-approval threshold | `.env` only; there is no admin control |

.env
Copy

```
# Master switch. Cannot be overridden from the platform admin panel.
ADS_ENABLED=true

# Google AdSense
ADSENSE_ENABLED=true
ADSENSE_PUBLISHER_ID=ca-pub-XXXXXXXXXXXXXXXX
ADSENSE_EVENT_SLOT_ID=XXXXXXXXXX
ADSENSE_PERSONALIZED=false    # leave off unless you run a certified CMP

# On-network promotions
PROMOTIONS_ENGINE_ENABLED=true
NATIVE_PROMO_PRIORITY_OVER_PROGRAMMATIC=true
PROMOTIONS_NETWORK_CPM=2.00       # price per 1,000 views
PROMOTIONS_NETWORK_CPC=0.25       # price per click
PROMOTIONS_CURRENCY=USD  # what promotions are charged in; set here only
PROMOTIONS_MIN_BUDGET=5.00
PROMOTIONS_MAX_BUDGET=1000.00
PROMOTIONS_MAX_CONCURRENT=2         # live campaigns per schedule
PROMOTIONS_FREQUENCY_CAP=3          # views of one promotion per visitor per day
PROMOTIONS_AUTO_APPROVE_AFTER=3     # clean campaigns before a schedule skips review
PROMOTIONS_IP_IMPRESSION_CAP=100    # billed views of one campaign per IP per day
PROMOTIONS_MIN_CTR=0.0002          # pause a per-click campaign below this CTR...
PROMOTIONS_MIN_CTR_IMPRESSIONS=5000  # ...once it has had this many views
PROMOTIONS_CACHE_TTL=300            # seconds a snapshot of live promotions is reused
PROMOTIONS_STATS_RETENTION_DAYS=400
META_BOOST_DEFAULT_LIMIT=10          # starting per-schedule budget ceiling

# Accommodation affiliate. Independent of ADS_ENABLED; also a master switch that
# cannot be overridden from the platform admin panel, because the Content-Security-Policy
# is built from it on every request. Run config:cache after changing it.
STAY22_ENABLED=true
STAY22_AID=your-stay22-affiliate-id   # fallback only; editable in the platform admin panel
STAY22_MAX_NIGHTS=30                # upper bound on the derived stay length
```

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/saas/monetization.blade.php)
