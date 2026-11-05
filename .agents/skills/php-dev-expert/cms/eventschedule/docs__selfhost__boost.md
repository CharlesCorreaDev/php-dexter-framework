# Boost Setup with the Meta Marketing API - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/selfhost/boost

---

Selfhost

# Boost Setup

Configure Meta/Facebook ads integration to let users promote events through paid Facebook and Instagram campaigns.

Feature overview: [Facebook and Instagram ads](https://eventschedule.com/features/boost)

Docs
/
Boost Setup

On this page

## Overview

Boost lets the schedules on your instance promote events through paid Facebook and Instagram ads via the Meta Marketing API. Your instance acts as the intermediary: it creates the campaign, ad set and ad on behalf of the schedule owner using a single platform-owned Meta ad account, Facebook Page and system user token that you configure here. Nobody has to connect their own Facebook account: Boost never asks a schedule owner to sign in to Facebook, and it is unrelated to the optional Facebook login. For what the feature looks like from the schedule owner's side, see the [Boost user guide](docs__boost.md).

Before you start, make sure you have:

- A Meta Business account, with permission to create an ad account and manage a Facebook Page
- A payment method on that ad account. Meta bills it directly for all ad spend
- A publicly reachable install over HTTPS. Every ad's destination is the event's own public page, so that URL has to resolve from the public internet. It also has to be reachable in the other direction if you want webhooks (Step 6)

On a selfhosted install, the ad spend is yours

A selfhosted install charges nothing for a boost: the campaign is marked as paid with a total of 0, and the `META_MARKUP_RATE` service fee is forced to 0 whenever `IS_HOSTED=false`. No Stripe configuration is involved. Meta invoices the one ad account you configure below, so every campaign any schedule on your instance creates spends your money. Your two limits are `META_MAX_BUDGET` per campaign and `META_MAX_CONCURRENT_BOOSTS` campaigns in flight per schedule.

### What has to be true before a schedule can boost

| Requirement | Details |
| --- | --- |
| `META_ACCESS_TOKEN` is set | The switch that makes the Meta channel exist. It puts **Boost** in the sidebar, turns on the **Facebook & Instagram** button in the **Boost Event** dialog on that page, and is what the scheduler checks before running `boost:sync`. Nothing is ever sent to Meta without it. |
| `META_APP_ID` is set | Makes the **Boost Event** button at the top of a saved event's form open the boost form. Without it, pressing the button only shows "Boost requires Meta Ads to be configured." |
| The schedule is on a paid plan | Boost is a Pro feature. With `IS_HOSTED=false` every schedule resolves to Enterprise, so this is always satisfied and no upgrade prompt appears. If you run a multi-tenant SaaS with `IS_HOSTED=true`, the normal plan gate applies. |
| The event is published and upcoming | Draft events are refused outright, and the event picker only lists events that are upcoming or ongoing, not draft, and have a name. |
| The event has an image | Every ad creative needs one. The flyer image is used, falling back to the schedule's profile image and then the venue's. The purchase form warns when there is none, and with no image at all creating the ad on Meta fails. |
| A free concurrency slot | A schedule may have `META_MAX_CONCURRENT_BOOSTS` Meta campaigns in flight, counting those that are active or awaiting payment. On-network promotions are counted separately, so one channel cannot starve the other. |
| A verified phone number | Hosted only. A selfhosted install never asks for phone verification before a boost. |

**Set `META_APP_ID` and `META_ACCESS_TOKEN` together, or neither.** With the app ID set and the token blank, the **Boost Event** button on an event still opens the boost form, and a campaign created there is recorded as active under placeholder IDs. Nothing is sent to Meta, no ad runs, and nothing on screen says so.

### Boost has a second channel you configure elsewhere

The **Boost** page covers two channels. Everything in this guide is the **Meta** channel: paid ads bought from Facebook and Instagram. The other is **on-network promotions**, where a paid schedule buys placement on the public pages of free schedules on your own instance. It shares the same campaign records and the same page, but none of the variables in this guide apply to it.

That is why **Boost** can appear in the sidebar on an instance with no Meta configuration at all: the entry shows when `META_ACCESS_TOKEN` is set *or* the promotions network is enabled. Promotions need three separate things: `ADS_ENABLED=true` in `.env`, a multi-tenant hosted install, and **Enable the promotions network** switched on in the **Monetization** card of the admin panel's **Settings** page, under **System**. They are covered in the [Monetization guide](docs__saas__monetization.md#promotions). None of that is required for Meta boosts.

The rest of this guide walks through the Facebook and Meta configuration, in the order it is easiest to do it.

## Step 1: Create a Facebook App

1. Go to `developers.facebook.com`
2. Click **My Apps** then **Create App**
3. Select **Other** as the use case, then **Business** as the app type
4. Fill in the app name (e.g. "Event Schedule Boost") and contact email
5. Once created, note the **App ID** and **App Secret** from App Settings > Basic
6. Add the app to your Business Account under **Business Settings > Accounts > Apps**, so the system user in Step 4 can generate a token against it

.env
Copy

```
META_APP_ID=your_app_id
META_APP_SECRET=your_app_secret
```

The two values do different jobs. The **App ID** is what the event page checks before it enables the Boost button. The **App Secret** is used only to verify the signature on incoming Meta webhooks (Step 6); it is never sent to the Marketing API.

## Step 2: Meta Business & Ad Account

1. Go to `business.facebook.com`
2. Create a Business Account if you don't have one
3. In **Business Settings > Accounts > Ad Accounts**, click **Add > Create a new ad account**
4. Name it (e.g. "Event Schedule Boost Ads"), set the currency and timezone
5. Add a payment method to the ad account. Meta bills it directly for every campaign your instance creates
6. Note the **Ad Account ID** (numeric, without the `act_` prefix - the code adds that automatically)

.env
Copy

```
META_AD_ACCOUNT_ID=your_ad_account_id
```

Match the currency

Budgets are sent to Meta as minor units with no currency attached, so Meta always spends in the ad account's own currency. Set `META_DEFAULT_CURRENCY` to the currency you picked here, or the amounts shown in the app will be labelled in a currency Meta is not billing in. The app renders a symbol for the major currencies and falls back to the three-letter code, so an amount is never labelled in the wrong money.

## Step 3: Facebook Page

Ads require a Facebook Page as the ad's identity (the "posted by" entity). Every ad your instance creates is published under this one Page, whichever schedule bought the boost.

1. Create a Facebook Page for your platform (or use an existing one)
2. In **Business Settings > Accounts > Pages**, add this page to your Business Account
3. Select the page in that list to see its numeric **Page ID**

.env
Copy

```
META_PAGE_ID=your_page_id
```

The Page ID is written into every ad creative as its page identity, so leaving `META_PAGE_ID` unset does not disable boost gracefully: the campaign is created locally and then fails when the ad is pushed to Meta.

## Step 4: System User & Access Token

A System User provides a stable, long-lived token that doesn't expire when a personal account changes. This single token is what every campaign on your instance is created with, so treat it like a production secret.

1. In **Business Settings > Users > System Users**, click **Add**
2. Name it (e.g. "Event Schedule API") and set the role to **Admin**
3. Click **Add Assets** and assign:
   - The Ad Account from Step 2 (with full control)
   - The Facebook Page from Step 3 (with full control)
   - The Pixel from Step 5, if you set one up, so server-side conversions are authorized
4. Click **Generate New Token**, select the app from Step 1, choose the never-expiring option if you are offered one, and grant these permissions:
   - `ads_management` - create/update/delete campaigns, ad sets, ads, and creatives
   - `ads_read` - read campaign insights, ad status, and review feedback
   - `pages_read_engagement` - required for creating ads using the page's identity
   - `pages_manage_ads` - required for creating page post ads
5. Copy the generated token (you won't be able to see it again)

.env
Copy

```
META_ACCESS_TOKEN=your_system_user_token
```

This variable is the master switch for the feature. With it set, **Boost** appears in the sidebar and the `boost:sync` scheduled command starts running. With it blank, the sidebar entry is hidden (unless the promotions network is on) and nothing is ever sent to Meta.

## Step 5: Meta Pixel

The pixel is **optional**. Campaigns run without it; what you lose is conversion tracking, so ads can only be optimized and reported on by reach, impressions and clicks.

When `META_PIXEL_ID` is set, two things happen, both scoped to events with an *active* Meta campaign, and both only for a visitor who has allowed the **Marketing and embedded content** category in the cookie banner:

- **The browser pixel** loads on that event's public page and tracks a page view and a content view. Until the visitor allows the category nothing is requested from Facebook, and withdrawing it later stops the pixel sending. The pixel is never loaded inside an embedded page.
- **A server-side Purchase conversion** is sent to Meta's Conversions API, using the system user token, when a ticket sale for that event is paid online: through Stripe, PayPal, Payfast, Razorpay, Invoice Ninja or a payment link, including the first payment of an installment plan. The buyer's email address is SHA-256 hashed rather than sent in the clear. A free registration is reported the same way with a value of zero, and a sale you mark as paid by hand, such as cash at the door, sends nothing. Whether the buyer had allowed the category is recorded with the sale at checkout; without it, nothing about the sale is sent.

1. In **Events Manager** (`business.facebook.com/events_manager`), click **Connect Data Sources**
2. Select **Web**, name the pixel (e.g. "Event Schedule Pixel")
3. Note the **Pixel ID**
4. Assign the pixel to the system user from Step 4, so its token is allowed to send server-side events

.env
Copy

```
META_PIXEL_ID=your_pixel_id
```

This turns on the cookie banner and loads third-party code

Setting this variable switches the cookie banner on for every visitor of the install, because consent now has something to cover. For visitors who allow the marketing category, guest pages of boosted events then load Facebook's script from `connect.facebook.net`. Setting it also widens the Content Security Policy on every response, adding `connect.facebook.net` to `script-src` and `www.facebook.com` to `connect-src`. Guests of events that are not being boosted still load nothing from Facebook, and leaving the variable blank means no Facebook code is loaded and no external request is made. If you do enable it, say so in your privacy policy.

## Step 6: Webhooks

Webhooks are **optional but recommended**. They let your instance hear about a completed campaign or a rejected ad within seconds. Skip them and the same information still arrives, just up to 15 minutes later when [the scheduled command](#scheduled-command) polls Meta.

1. In the Facebook App Dashboard, go to **Add Product** and add **Webhooks**
2. Select the **Ad Account** object type
3. Click **Subscribe** and configure:
   - **Callback URL:** `https://yourdomain.com/webhooks/meta`
   - **Verify Token:** A random string you choose (e.g. generate with `openssl rand -hex 32`)
4. Subscribe to the two fields the app acts on:
   - `campaign` - a campaign reported as completed is closed out locally, and its final analytics are pulled
   - `ad` - an approval or a rejection is recorded against that ad

.env
Copy

```
META_WEBHOOK_VERIFY_TOKEN=your_random_verify_token
```

Important

Your server must be publicly accessible at the callback URL for webhook verification to succeed. The verify endpoint is `GET /webhooks/meta` and the handler is `POST /webhooks/meta`. Verification is refused unless `META_WEBHOOK_VERIFY_TOKEN` is set, and every delivery is rejected unless its signature matches one computed with `META_APP_SECRET`, so both variables must be present. Both endpoints are rate limited (10 requests a minute for the verify handshake, 60 for deliveries).

### How a rejection is recorded

Meta's verdict is stored per ad, as `DISAPPROVED` in the `meta_status` column of `boost_ads`, together with the reason text Meta returned in `meta_rejection_reason`. The ad's own `status` column is the app's local lifecycle and is *not* where a rejection lands, so a query filtering rejected ads on `status` silently returns nothing. This matters only if you inspect the tables directly; the campaign page reads both.

Once every ad on a campaign is disapproved, the campaign moves to **rejected** and the owner is emailed and sent a push notification. The refund on that path is hosted-only, because a selfhosted install never charged for the campaign in the first place. The two paths differ in one detail: when `boost:sync` finds the rejection it also pauses the campaign at Meta, whereas the webhook path relies on Meta having stopped delivery itself.

## Step 7: App Review

For production use, your app needs to hold access to the permissions it calls, which means going through Meta's App Review process. Note that you are not asking your users for anything: the integration only ever touches assets your own Business owns, and no schedule owner is ever sent to Facebook to grant a permission.

1. In the App Dashboard, go to **App Review > Permissions and Features**
2. Request approval for:
   - `ads_management` - required
   - `ads_read` - required
   - `pages_read_engagement` - required
   - `pages_manage_ads` - required
3. Provide a detailed description of how your app uses each permission, with screenshots
4. Submit for review

Development Mode

While in Development Mode, you can test with accounts that have a role on the app (admin/developer/tester). Switch to Live Mode once approved.

## Step 8: Environment Variables

Here is the full set of environment variables for the Meta boost channel on a selfhosted install (a multi-tenant hosted install has four more, for [boost partners](#boost-partners)). Every one of them is read from `config/services.php` under the `meta` key, and the on-network promotions channel uses a completely separate set:

.env
Copy

```
# Required - Facebook App credentials
META_APP_ID=your_app_id
META_APP_SECRET=your_app_secret

# Required - System User access token
META_ACCESS_TOKEN=your_system_user_access_token

# Required - Ad Account (numeric ID, without act_ prefix)
META_AD_ACCOUNT_ID=your_ad_account_id

# Required - Facebook Page for ad identity
META_PAGE_ID=your_page_id

# Optional - Pixel for conversion tracking
META_PIXEL_ID=your_pixel_id

# Optional - Webhook verification (only if you subscribe to webhooks)
META_WEBHOOK_VERIFY_TOKEN=your_random_verify_token

# Optional - API version (default: v21.0)
META_API_VERSION=v21.0

# Optional - Budget settings
META_MIN_BUDGET=10.00          # Minimum boost budget (default)
META_MAX_BUDGET=1000.00        # Maximum boost budget (default)
META_DEFAULT_CURRENCY=USD      # Match the ad account's currency
META_MAX_CONCURRENT_BOOSTS=3   # Live boosts per schedule (default)
```

| Variable | Required | Description |
| --- | --- | --- |
| `META_APP_ID` | Yes | Facebook App ID from Step 1. Enables the Boost button on the event page |
| `META_APP_SECRET` | Yes | Facebook App Secret from Step 1. Verifies incoming webhook signatures |
| `META_ACCESS_TOKEN` | Yes | System User access token from Step 4. Turns the whole feature on |
| `META_AD_ACCOUNT_ID` | Yes | Numeric Ad Account ID (without `act_` prefix) |
| `META_PAGE_ID` | Yes | Facebook Page ID used as the identity on every ad creative |
| `META_PIXEL_ID` | No | Meta Pixel ID. Enables the browser pixel on boosted events and server-side Purchase conversions, both only for visitors who allow marketing cookies. Also switches the cookie banner on |
| `META_WEBHOOK_VERIFY_TOKEN` | No | Random string for the webhook handshake. Needed only if you subscribe to webhooks |
| `META_API_VERSION` | No | Meta Graph API version (default: v21.0) |
| `META_MIN_BUDGET` | No | Minimum budget per campaign, in currency units (default: 10.00) |
| `META_MAX_BUDGET` | No | Maximum budget per campaign, in currency units (default: 1000.00). This is the cap that applies on a selfhosted install |
| `META_DEFAULT_CURRENCY` | No | Currency code campaigns are recorded in (default: USD). Set it to the ad account's currency |
| `META_MAX_CONCURRENT_BOOSTS` | No | Live campaigns allowed per schedule (default: 3). Applies on a selfhosted install; a hosted install earns its limit instead |
| `META_MARKUP_RATE` | No | Hosted only. Service fee added on top of the ad budget (default: 0.20). Forced to 0 when `IS_HOSTED=false` |
| `META_BOOST_DEFAULT_LIMIT` | No | Hosted only. Starting per-campaign spending limit for a new schedule (default: 10.00), before its limit grows with completed campaigns |

### What the admin panel shows

Every campaign on the install is listed on the admin panel's [Boost](docs__selfhost__admin.md#manage-boost) page, under **Manage**, which that guide describes card by card. On a selfhosted install the billing parts (markup, refunds, credit and the per-schedule limit) are left out: the per-campaign cap is always `META_MAX_BUDGET` and there is no credit to grant.

### Boost partners (hosted only)

On a multi-tenant hosted install, an account can be made a boost partner: its schedules then boost under its own Facebook Page and Meta ad account rather than yours. Meta bills the partner's ad account, and the platform charges the partner a monthly fee on what was actually spent (20 percent unless set otherwise per partner). A selfhosted install never offers it. It needs four more variables:

| Variable | Description |
| --- | --- |
| `BOOST_PARTNERS_ENABLED` | Set to `true` to show the **Enable** form on the admin panel's Boost page, where you make an account a partner by its email address |
| `META_BUSINESS_ID` | Your own Meta Business. A partner shares its ad account and Page with it |
| `META_SYSTEM_USER_ID` | The system user whose token is `META_ACCESS_TOKEN`. A shared ad account and Page are assigned to it, so that token can run the partner's ads. Without this and `META_BUSINESS_ID`, a partner's check of a shared account fails |
| `META_LOGIN_CONFIG_ID` | Optional. A Facebook Login for Business configuration, which lets a partner connect by signing in to Facebook instead of sharing. The option is hidden until it is set, and it needs App Review |

A partner connects in their own settings, under **Boosts**. A shared account then waits until an admin checks the Business that owns it and presses **Confirm** on the admin panel's [Boost partners](docs__selfhost__admin.md#boost-partners) card. The monthly fee is charged by `boost:charge-statements` (see [Step 9](#scheduled-command)).

### Applying the changes

No code changes are needed - every key above is already wired up in `config/services.php`. Clear the config cache after editing `.env`, or the app keeps reading the old values:

bash
Copy

```
php artisan config:clear
```

## Step 9: Scheduled Command

Two commands keep boost campaigns in step with Meta. Both are already registered in `routes/console.php` and run every 15 minutes, so all you have to do is make sure the Laravel scheduler is running:

crontab
Copy

```
* * * * * php artisan schedule:run
```

- `boost:sync` - pulls each active or paused campaign's status from Meta, refreshes its analytics, emails and pushes the owner once a campaign passes 75% of its budget, closes out campaigns that have reached their end date, and recovers campaigns left in a pending payment state. The scheduler only invokes it when `META_ACCESS_TOKEN` is set
- `boost:expire-pending` - expires any campaign stuck in a pending payment state for more than 30 minutes and cancels its payment intent. It runs whether or not Meta is configured, because the on-network channel leaves the same kind of stuck record behind

A third command, `promo:sync`, settles the on-network promotions channel on the same 15 minute schedule. It is gated on `ADS_ENABLED` rather than on any Meta variable, so it stays dormant on an instance that only uses Meta, and you do not need to configure anything here for it.

On a multi-tenant hosted install a fourth, `boost:charge-statements`, runs daily: it closes each [boost partner's](#boost-partners) month and charges its fee, and tries a declined card again. It does nothing on a selfhosted install.

Note

If you already have the scheduler running for other Event Schedule features (e.g. Google Calendar sync, ticket releases), no additional cron configuration is needed.

### Queue workers

Creating the campaign on Meta and fetching its analytics are queued jobs. With the default `QUEUE_CONNECTION=sync` they run immediately inside the web request or the scheduled command, so nothing extra is required. If you have switched to a real queue driver, the same cron entry is the worker: the scheduler runs `queue:work --stop-when-empty` every minute, so jobs wait up to about a minute and no separate worker process is needed. Without the cron entry, campaigns are created inside the app and never reach Meta.

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/selfhost/boost.blade.php)
