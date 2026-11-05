# Stripe, PayPal, Payfast, Razorpay on Selfhost - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/selfhost/stripe

---

Selfhost

# Stripe, PayPal, Payfast and Razorpay

A selfhosted install takes card payments through Stripe with one set of platform keys, and can switch PayPal, Payfast or Razorpay on for everyone the same way. A SaaS operator needs two Stripe integrations: Connect for ticket sales and Cashier for plan subscriptions.

Feature overview: [Stripe payments for tickets](https://eventschedule.com/stripe)

Docs
/
Stripe Integration

On this page

## Overview

Ticket payments in Event Schedule run through **Stripe Checkout**: the buyer pays on Stripe's own hosted page, Stripe calls a webhook back, and the sale is marked paid. What you have to configure depends on who collects the money - one account for the whole install, or a separate account per event owner.

The same keys and the same webhook endpoint also cover [gift card](docs__gift-cards.md) purchases, paid [appointment bookings](docs__appointments.md) and [installment plans](docs__tickets.md#installments), so you only set this up once. [PayPal](#paypal), [Payfast](#payfast) and [Razorpay](#razorpay), further down, take ticket orders and paid appointments.

**There are no platform fees.** Event Schedule never takes a cut of a ticket sale. The Checkout Session is created without an application fee or a transfer, so the full amount lands in the account that took the payment: the one named in your `.env` on a selfhosted install, or the seller's own connected account under Connect. Stripe's own processing fee is the only deduction.

Recommended: Stripe behind Invoice Ninja

Stripe is not the only option. If you want proper invoices, payment reminders and financial reporting on top of card processing, connect [Invoice Ninja](https://invoiceninja.com) instead and add Stripe as a gateway inside it. Buyers still pay by card; the paperwork lives in Invoice Ninja. See [Invoice Ninja](#invoice-ninja) below.

### Where the payment method is chosen

Server configuration only makes Stripe *available*. Each event still picks one payment method on the event form, in the **Payment** row of its **Tickets** tab: Cash, Stripe, Invoice Ninja, Payment Link, Payfast, PayPal or Razorpay. Only the methods that are connected, and that can settle the event's currency, are listed. The seven options are described on the [Tickets](docs__tickets.md#payment) page.

Each person's own connections live in **Settings**, on the **Payment Methods** tab. It lists one row per method (Stripe, Invoice Ninja, Payment Link, Payfast, PayPal, Razorpay), each saying whether it is connected, and a row opens in place to show its details. Payment Link needs no server setup at all: each user enters the address of their own payment page in that row.

Plan requirement

On eventschedule.com, a ticket that carries a price needs **Pro** or **Enterprise**. Free registration and a ticket type at no charge are unlimited on the **Free** plan, and scanning any ticket at the door is free there too. The rest of the selling kit is Pro as well: the live check-in dashboard, promo codes, add-ons, the ticket waitlist, installment plans, passes, gift cards and the ticket widget embed.

A selfhosted install resolves to the Enterprise tier, so nothing on this page is plan-gated on your own server.

## Choose Your Setup

Find your setup type and follow the corresponding guide:

| You are... | Money flows to... | Follow this guide |
| --- | --- | --- |
| Running your **own Event Schedule instance** for your organization | The one Stripe account named in your `.env` | [Selfhosted Users](#selfhosted-users) |
| Running a **white-label SaaS** platform | Each customer's own connected Stripe account, plus your account for plan subscriptions | [SaaS Operators](#saas-operators) |
| Using **eventschedule.com** (nothing to install) | Your own connected Stripe account | No server setup. Connect Stripe in [Settings → Payment Methods](docs__account-settings.md#payments) |

### Which one am I?

- Will several people each need to be paid into **their own** Stripe account? You are a SaaS operator.
- Should every ticket sold anywhere on the install settle into **one** account you control? You are a selfhosted user.

On a selfhosted install you can skip [For SaaS Operators](#saas-operators): after Stripe, go on to [Invoice Ninja](#invoice-ninja), [PayPal](#paypal), [Payfast](#payfast) or [Razorpay](#razorpay) if you need them.

Stripe Connect needs hosted mode

Connect is only used when `IS_HOSTED=true`. On a plain selfhosted install every ticket charge is created with your platform keys, even if a user has linked a Stripe account of their own, so per-owner payouts are a SaaS-operator setup rather than a selfhost one.

## For Selfhosted Users

If you're running your own Event Schedule instance for your organization, venue, or community, all ticket revenue from all events on the instance goes to a single Stripe account that you control. Event creators don't need Stripe accounts of their own, and there is nothing for them to connect.

1. #### Get your Stripe API keys

   1. Go to the [Stripe Dashboard](https://dashboard.stripe.com/)
   2. Open **Developers** → **API keys**
   3. Note your **Publishable key** and **Secret key**
2. #### Configure environment variables

   Add these to your `.env` file:

   .env
   Copy

   ```
   # Stripe Direct Payments (selfhosted)
   STRIPE_PLATFORM_KEY=pk_live_your_publishable_key
   STRIPE_PLATFORM_SECRET=sk_live_your_secret_key
   STRIPE_PLATFORM_WEBHOOK_SECRET=whsec_your_webhook_secret
   ```

   - `STRIPE_PLATFORM_SECRET`: Your secret key (starts with `sk_live_` or `sk_test_`). This is the value that switches Stripe on: with it set, Stripe becomes an available payment method for every event owner on the install.
   - `STRIPE_PLATFORM_KEY`: Your publishable key (starts with `pk_live_` or `pk_test_`). Ticket checkout happens on Stripe's hosted page and does not need it. The in-app card forms that read it, for plan subscriptions, paid boosts and on-network promotions, all belong to a [SaaS setup](#saas-operators). Set it anyway: the Stripe row in Settings asks for both keys.
   - `STRIPE_PLATFORM_WEBHOOK_SECRET`: Webhook signing secret (next step)

   If you cache your configuration, run `php artisan config:clear` after editing `.env` so the new values are picked up.
3. #### Set up the webhook

   1. In Stripe Dashboard, go to **Developers** → **Webhooks**
   2. Click **Add endpoint**
   3. Set URL to: `https://yourdomain.com/stripe/webhook`
   4. Select event: `checkout.session.completed`
   5. Save and copy the **Signing secret** to `STRIPE_PLATFORM_WEBHOOK_SECRET`

   Important: webhook event and secret

   Select `checkout.session.completed`. That is different from a SaaS Connect setup, which uses `payment_intent.succeeded`.

   The signing secret is not optional. Until `STRIPE_PLATFORM_WEBHOOK_SECRET` is set, every call to `/stripe/webhook` is rejected with `400 Invalid signature` and no sale is ever marked paid.
4. #### Sell an event's tickets through Stripe

   1. Open **Settings** and its **Payment Methods** tab. The **Stripe** row should say **Connected**, and reads "Stripe is configured" when you open it. There is nothing to press: the row only reports what is in `.env`.
   2. Edit an event and open its **Tickets** tab, then press **Sell tickets** rather than Free registration or Tickets elsewhere.
   3. Open the **Payment** row, set **Payment Method** to **Stripe** and pick the **Currency** the tickets are priced in.
   4. Add your ticket types and save. Payments automatically use your platform Stripe account.

### How Checkout Works

1. The buyer selects tickets and fills out the checkout form
2. Event Schedule creates a Stripe Checkout Session on your platform account, tagged with the sale ID
3. The buyer completes payment on Stripe's hosted page
4. Stripe calls `/stripe/webhook`; Event Schedule verifies the signature, checks the amount charged against the amount owed, and marks the sale paid
5. The buyer is emailed their tickets, with a QR code for check-in

Amounts are verified, not trusted

If the amount Stripe reports differs from the order total by more than one cent, the sale is **not** marked paid. It is flagged `amount_mismatch` instead, and the mismatch is written to your application log for you to reconcile by hand.

Gift card purchases, paid appointment bookings and installment plans use exactly the same keys and the same endpoint, so none of them needs extra configuration. An installment plan takes its first payment at checkout and charges the rest to the saved card from an hourly scheduled job, so it depends on the [cron entry](docs__selfhost__installation.md#cron).

## For SaaS Operators

If you're running your own white-label SaaS platform (like eventschedule.com but with your own branding), you need two Stripe integrations, and both require `IS_HOSTED=true`. The rest of the SaaS setup, including domains and plan limits, is covered in the [SaaS setup guide](docs__saas.md#stripe).

### Stripe Connect

So your event creator customers can connect their Stripe accounts and receive ticket payments directly. You never hold their ticket money.

#### Laravel Cashier

To charge your customers for Pro and Enterprise plans (the money you make as the platform operator), billed to your own account.

### Part A: Stripe Connect (ticket sales)

Lets your event creators receive payments for their own ticket sales.

1. #### Enable Stripe Connect

   1. Go to the [Stripe Dashboard](https://dashboard.stripe.com/)
   2. Open **Settings** → **Connect**
   3. Enable Connect for your platform
   4. Configure your branding and platform profile. Event Schedule creates the connected account for the user and sends them through Stripe's own hosted onboarding, so your branding is what they see.
   5. Get your API keys from **Developers** → **API keys**
2. #### Set the environment variables

   .env
   Copy

   ```
   # Stripe Connect (for event creators to receive ticket payments)
   STRIPE_KEY=sk_live_your_stripe_secret_key
   STRIPE_WEBHOOK_SECRET=whsec_your_connect_webhook_secret
   ```

   - `STRIPE_KEY`: Your platform's Stripe **secret** key, despite the name. It is the key every Connect call is made with.
   - `STRIPE_WEBHOOK_SECRET`: Signing secret of the Connect webhook endpoint (next step)
3. #### Add the Connect webhook

   1. Go to **Developers** → **Webhooks**
   2. Click **Add endpoint** and choose to listen to events on **connected accounts**, since the charges are created on your customers' accounts rather than yours
   3. Set URL to: `https://yourdomain.com/stripe/webhook`
   4. Select event: `payment_intent.succeeded`
   5. Save and copy the signing secret to `STRIPE_WEBHOOK_SECRET`

   One endpoint, two secrets

   `/stripe/webhook` tries the Connect secret first and the platform secret second, so the same URL serves both. Event Schedule then checks that the secret matches the kind of sale: a Connect sale confirmed with the platform key, or a direct sale confirmed with the Connect key, is logged and ignored rather than marked paid.

### What your event creators do

1. Open **Settings**, go to the **Payment Methods** tab and open the **Stripe** row
2. Click **Connect Stripe**
3. Complete Stripe's onboarding
4. They return to your platform. The row shows their Stripe business name marked **Connected**, with a **Disconnect** link, and Stripe becomes selectable as an event payment method

Stripe only becomes selectable once Stripe reports that charges are enabled, and the app asks Stripe that question at one moment: when the user returns from onboarding. If Stripe is still verifying them then, the row shows the account ID marked **Setup not finished** with **Connect Stripe** still under it, and the **Payment** row of the event's Tickets tab shows a "Stripe is verifying your details" notice. Nothing checks again in the background, so once Stripe has finished they press **Connect Stripe** a second time to be sent through Stripe and back.

### Connect API Endpoints

| Endpoint | Description |
| --- | --- |
| `GET /stripe/link` | Start Stripe Connect onboarding (signed in) |
| `GET /stripe/complete` | Complete onboarding callback (signed in) |
| `POST /stripe/unlink` | Disconnect Stripe account (signed in) |
| `POST /stripe/webhook` | Handle `payment_intent.succeeded` and `checkout.session.completed` |

### Part B: Laravel Cashier (subscription billing)

Charges your customers for Pro and Enterprise plans on your own Stripe account. They subscribe from the **Plan** tab of a schedule, which exists only in hosted mode: **Upgrade to Pro** appears there once `STRIPE_PLATFORM_KEY` is set, and **Manage Subscription** opens Stripe's customer portal.

1. #### Create the subscription products

   1. In Stripe Dashboard, go to **Products** → **Add product**
   2. Create a **Pro** product with two recurring prices, one monthly and one yearly
   3. Optionally create an **Enterprise** product the same way. The Enterprise tier is hidden from the subscribe page unless both of its price IDs are configured.
   4. Note each **Price ID** (starts with `price_`)
2. #### Set the environment variables

   .env
   Copy

   ```
   # Laravel Cashier (for subscription billing)
   STRIPE_PLATFORM_KEY=pk_live_your_publishable_key
   STRIPE_PLATFORM_SECRET=sk_live_your_secret_key
   STRIPE_PLATFORM_WEBHOOK_SECRET=whsec_your_subscription_webhook_secret
   STRIPE_PRICE_MONTHLY=price_monthly_price_id
   STRIPE_PRICE_YEARLY=price_yearly_price_id
   ```

   - `STRIPE_PLATFORM_KEY`: Publishable key for your platform, used by the card form on the subscribe page
   - `STRIPE_PLATFORM_SECRET`: Secret key for your platform
   - `STRIPE_PLATFORM_WEBHOOK_SECRET`: Signing secret of the subscription webhook endpoint
   - `STRIPE_PRICE_MONTHLY` and `STRIPE_PRICE_YEARLY`: Pro price IDs
   - `STRIPE_ENTERPRISE_PRICE_MONTHLY` and `STRIPE_ENTERPRISE_PRICE_YEARLY`: Enterprise price IDs. Leave both unset to sell Pro only.
   - `STRIPE_PRICE_MONTHLY_AMOUNT`, `STRIPE_PRICE_YEARLY_AMOUNT`, `STRIPE_ENTERPRISE_PRICE_MONTHLY_AMOUNT` and `STRIPE_ENTERPRISE_PRICE_YEARLY_AMOUNT`: the amounts *displayed* in the app. They are labels only, so set them to match your Stripe prices or your pages will show the defaults of 5, 50, 15 and 150. A site admin can override all four in the **Plan pricing** card of the admin panel's [Settings](docs__selfhost__admin.md#system-settings) page (`/admin/settings`) without touching `.env`; keep these set anyway, because revenue reporting and renewal emails read the values here rather than the admin panel.
   - `PLATFORM_CURRENCY`: the currency the platform quotes its own price in. It is a label there, like the amounts, so set it to match the currency of your Stripe prices. It does one real job beyond that: it is the currency a new event starts in when its schedule has no country set, or a country outside the built-in currency map. Defaults to `USD`, and a site admin can change it in the **Platform currency** card of the same page without touching `.env`.
3. #### Add the subscription webhook

   1. Go to **Developers** → **Webhooks**
   2. Click **Add endpoint** (this is a second webhook, separate from Connect, listening on your own account)
   3. Set URL to: `https://yourdomain.com/stripe/subscription-webhook`
   4. Select events:
      - `customer.subscription.created`
      - `customer.subscription.updated`
      - `customer.subscription.deleted`
      - `customer.subscription.trial_will_end`
      - `customer.updated`
      - `customer.deleted`
      - `invoice.payment_succeeded`
      - `invoice.payment_failed`
      - `invoice.payment_action_required`
      - `payment_method.automatically_updated`
   5. Save and copy signing secret to `STRIPE_PLATFORM_WEBHOOK_SECRET`

   These events are what keep a schedule's plan in step with Stripe: a successful invoice sets the plan and term, a deleted subscription drops the schedule back to Free, and a failed payment emails the owner and sends them a push notification.

   A price ID you no longer list costs a customer their plan

   The plan tier is decided by matching the subscription's price ID against the four configured in your `.env`, and Stripe keeps billing an old price for as long as a subscription is on it. A price ID that matches none of the four is not guessed at: the webhook leaves the schedule's stored plan alone and logs "Unrecognized Stripe price". The schedule stops counting as Enterprise all the same, so an Enterprise customer left on a price you no longer list drops to Pro features while still paying the Enterprise rate, and counts as zero in your revenue figures.

   The admin dashboard flags it as "subscriptions on an unrecognized price", and the [Revenue](docs__selfhost__admin.md#insights-revenue) page lists them under **Subscriptions on an Unrecognized Price**. Whenever you change your Stripe products, point the four variables at the prices your subscribers are actually billed on, or move those subscriptions to a current price in Stripe.
4. #### Set up the customer portal

   1. Go to **Settings** → **Billing** → **Customer portal**
   2. Enable subscription management features:
      - Subscription cancellation
      - Plan switching
      - Payment method updates
   3. Customize branding to match your platform

### Subscription API Endpoints

| Endpoint | Description |
| --- | --- |
| `GET /{subdomain}/subscribe` | Show subscription page |
| `POST /{subdomain}/subscribe` | Create new subscription |
| `GET /{subdomain}/subscription/portal` | Redirect to Stripe Customer Portal |
| `POST /{subdomain}/subscription/cancel` | Cancel subscription |
| `POST /{subdomain}/subscription/resume` | Resume cancelled subscription |
| `POST /{subdomain}/subscription/swap` | Switch between monthly and yearly, or move from Pro to Enterprise |
| `POST /stripe/subscription-webhook` | Handle subscription events |

Architecture note

Cashier bills the **schedule**, not the user account. Each schedule carries its own Stripe customer and subscription, so one person can own several schedules on different plans, and cancelling one leaves the others alone.

## Invoice Ninja (Alternative Payment Method)

In addition to Stripe, Event Schedule supports [Invoice Ninja](https://invoiceninja.com) as an alternative payment method for ticket sales and gift cards. Invoice Ninja is an open-source invoicing and payments platform that supports many payment gateways, Stripe among them.

No server configuration required

Unlike Stripe, Invoice Ninja needs no `.env` configuration at all. Each user connects their own Invoice Ninja company from the **Invoice Ninja** row of the **Payment Methods** tab in **Settings**, so different event owners on the same install can use different Invoice Ninja accounts.

### Prerequisites

- An [Invoice Ninja](https://invoiceninja.com) company, either selfhosted or on invoicing.co
- An API token from that company
- At least one payment gateway configured in Invoice Ninja

### Setup Steps

1. In Invoice Ninja, go to **Settings → Account Management** and create an API token
2. In Event Schedule, open **Settings**, go to the **Payment Methods** tab and open the **Invoice Ninja** row
3. Paste the token into **API Token**
4. Fill in **API URL** with the base address of your instance, for example `https://invoicing.yourdomain.com`, without a trailing `/api/v1`. Leave it blank to use invoicing.co.
5. Press **Connect**. Event Schedule verifies the credentials and registers a webhook in your Invoice Ninja company, so the connection either works or fails outright rather than saving a broken one. A failed attempt comes back with the reason and Invoice Ninja's own error text.

Once connected, the row shows the company name marked **Connected**, with **Edit** and **Disconnect** links. Editing the credentials replaces the old webhook rather than adding a second one, and leaving the token blank there means "keep the current token", so you can correct just the URL.

### How It Works

1. Edit an event, open the **Payment** row of its **Tickets** tab and choose **Invoice Ninja** as the payment method
2. At checkout the buyer is sent to Invoice Ninja: to an invoice they can pay, or to an Invoice Ninja purchase page, depending on the mode below
3. Invoice Ninja processes the card through whichever gateway you configured there
4. Invoice Ninja calls the webhook back so Event Schedule can mark the sale paid and email the tickets

### Invoice Ninja Modes

Once the company is connected, a **Checkout mode** choice appears in the same Invoice Ninja row, with its own **Save** button. It applies to every event this user sells through Invoice Ninja. The full comparison lives on the [Tickets](docs__tickets.md#invoiceninja-modes) page.

#### Invoice

Ticket selection and promo codes are handled in Event Schedule, and an invoice is created in Invoice Ninja for each purchase. Supports several promo codes.

#### Payment link

Buyers select tickets and enter promo codes on the Invoice Ninja purchase page, and invoices are grouped there. Event Schedule creates one Invoice Ninja product per ticket type and add-on the first time an event is bought, and passes one active promo code.

Payment link mode falls back

If building the Invoice Ninja purchase page fails, that checkout quietly falls back to Invoice mode so the buyer can still pay. If your buyers keep landing on an invoice instead of the purchase page, check your application log for the Invoice Ninja warning.

## PayPal (Alternative Payment Method)

[PayPal](https://www.paypal.com) is useful where Stripe is not available, and where buyers would rather pay from a PayPal balance than enter a card. It takes ticket orders, including a checkout that spans several events, and paid appointments, but not gift cards or installment plans. Setup is documented in the [user guide](docs__tickets.md#paypal); the notes below are the parts specific to running your own install.

### Two ways to set it up

The same two as Payfast, and you can mix them on one install:

#### One account for the whole install

Put your app credentials in `.env`. Every schedule can then sell straight away with no setup of their own, and all the money reaches your account.

#### Each user brings their own

Leave `.env` alone and each user connects an account from the **PayPal** row of the **Payment Methods** tab in **Settings**, so different event owners on the same install are paid into different PayPal accounts.

### Install-wide configuration

.env
Copy

```
PAYPAL_CLIENT_ID=your-client-id
PAYPAL_CLIENT_SECRET=your-secret
PAYPAL_SANDBOX=false
PAYPAL_WEBHOOK_ID=
```

Both credentials come from an app at [developer.paypal.com](https://developer.paypal.com), under Apps & Credentials.

- `PAYPAL_CLIENT_ID` and `PAYPAL_CLIENT_SECRET` - required together. Set one without the other and PayPal is not offered.
- `PAYPAL_SANDBOX` - sends payments to PayPal's sandbox. The sandbox has its OWN client id and secret, so switching this on means swapping both values too. Sandbox tickets look completely normal, so leave it `false` unless you are testing.
- `PAYPAL_WEBHOOK_ID` - optional. See [A webhook for the install-wide account](#paypal-webhook) for when you want it.

Run `php artisan config:clear` after editing, and note that these are **a default rather than an override**, exactly as with Payfast: a user who connects their own PayPal account keeps being paid into it, so adding an install-wide account cannot quietly re-route anybody's money. Users who have connected nothing see **Provided by this installation** on their PayPal row. Ignored entirely in hosted mode, where every owner connects their own.

Unlike Payfast, this works on localhost

A PayPal payment is confirmed by a call *we* make to PayPal, not by a notification PayPal has to reach us with, so a purchase completes end to end on a laptop with no tunnel and no public hostname. That is why `PAYPAL_WEBHOOK_ID` is optional where Payfast's passphrase is mandatory, and why you can test the whole flow before your site is reachable.

You will see `PayPal webhook registration failed` in the log when a user connects an account on such an install. That is expected, since PayPal cannot register a listener it cannot reach, and it does not stop anyone selling.

### A webhook for the install-wide account

When a user connects their *own* PayPal account, a listener is registered for them automatically. That does not happen for the install-wide account in `.env`, so add one in PayPal yourself:

1. In your PayPal app under **Apps & Credentials**, add a webhook pointing at `https://your-site/payments/paypal/webhook`
2. Subscribe it to `PAYMENT.CAPTURE.COMPLETED` and `PAYMENT.CAPTURE.DENIED`
3. Copy the webhook id PayPal gives you into `PAYPAL_WEBHOOK_ID` and run `php artisan config:clear`

Without it, a payment that settles late is lost

Ordinary payments settle without the webhook: that is the return from PayPal, not a notification. What you lose are the two cases that finish later: a payment PayPal holds for review, and a payment PayPal took whose reply never reached the app. Without a listener those sales stay unpaid, and an unpaid sale is eventually expired and its seats resold, so set it up on a site taking real money.

### Three currencies are deliberately not offered

PayPal settles the Hungarian forint, the Japanese yen and the New Taiwan dollar, but will not accept an amount with decimals in any of them, and this app can produce one, because the discount arithmetic rounds to two decimals whatever the currency. Rather than take money and then withhold the ticket, PayPal is not offered on events priced in those three. The reasoning, and the underlying rounding bug it works around, are recorded in `config/payments.php`.

## Payfast (Alternative Payment Method)

[Payfast](https://payfast.io) is a South African gateway, useful where Stripe is not available. It settles in South African rand only, and like PayPal it takes ticket orders and paid appointments but not gift cards or installment plans. Setup is documented in the [user guide](docs__tickets.md#payfast); the notes below are the parts specific to running your own install.

### Two ways to set it up

Payfast works either way round, and you can mix the two on one install:

#### One account for the whole install

Put your merchant details in `.env`, exactly as you would `STRIPE_PLATFORM_SECRET`. Every schedule can then sell tickets straight away, with no setup of their own, and all the money reaches your account.

#### Each user brings their own

Leave `.env` alone and each user connects a merchant account from the **Payfast** row of the **Payment Methods** tab in **Settings**, so different event owners on the same install are paid into different Payfast accounts.

### Install-wide configuration

Take these from your Payfast dashboard, under **Settings**, and add them to your `.env` file:

.env
Copy

```
# Payfast for every schedule on this install
PAYFAST_MERCHANT_ID=your_merchant_id
PAYFAST_MERCHANT_KEY=your_merchant_key
PAYFAST_PASSPHRASE=your_passphrase
PAYFAST_SANDBOX=false
```

- `PAYFAST_PASSPHRASE` is optional at Payfast, but required here. Without one, the payment notification signature is a plain MD5 that anyone could reproduce, so Payfast is not offered until all three values are set.
- `PAYFAST_SANDBOX` sends payments to Payfast's sandbox instead of taking real money. Sandbox tickets look completely normal, so leave it `false` outside of testing. When it is on, "Test mode" is shown next to Payfast wherever an owner picks it.
- `PAYFAST_PAYMENT_TYPES` (optional) pins the checkout to a single instrument, for example `ef` for Instant EFT. Leave it empty to let Payfast offer everything your account supports.

If you cache your configuration, run `php artisan config:clear` after editing `.env` so the new values are picked up.

A user's own account always wins

The values above are a default, never an override. A user who has connected their own Payfast account in **Settings**, on the **Payment Methods** tab, keeps using it, and their sales keep reaching them, so adding these to an install that has been running for a while cannot quietly re-route anybody's money. Users who have connected nothing see **Provided by this installation** on their Payfast row instead, and can still enter their own account there to opt out. Ignored entirely in hosted mode, where every owner must connect their own.

### Rand only, with a R5.00 minimum

Payfast is offered only on events priced in ZAR. Separately, a single payment below R5.00 is refused at checkout rather than hidden from the list, because Payfast will not process it. If Payfast is missing from the **Payment Method** list in an event's **Payment** row, check the event's **Currency** first: a schedule whose country is blank, or not in the built-in currency map, starts its events in your installation currency, which defaults to USD. That is `PLATFORM_CURRENCY`, or whatever is chosen in the **Platform currency** card of the admin panel's [Settings](docs__selfhost__admin.md#system-settings) page.

New events start on **Cash**. On an install where Payfast is the only way to take money, set `DEFAULT_PAYMENT_METHOD=payfast` so nobody has to pick it by hand. See [Default payment method](#default-payment-method).

Your install must be publicly reachable

Payfast confirms a payment by POSTing a notification to your server. It cannot reach `localhost` or a private address, so on a laptop or an internal-only host a payment will be taken and the ticket will never be issued. Use a public hostname, or a tunnel, before taking any payment, including a sandbox one.

### A log warning you can safely ignore

You may see `Payfast ITN from an unrecognised source address - continuing, see confirmsPayment` in your logs on every successful payment. That is expected behind Cloudflare, a reverse proxy or Docker: the app sees your proxy's address rather than Payfast's, and the address check is advisory for exactly that reason. The notification is authenticated by its signature and by asking Payfast to confirm it, so no `TRUSTED_PROXIES` configuration is needed for payments to work.

## Razorpay (Alternative Payment Method)

[Razorpay](https://razorpay.com) is the gateway for events in India: buyers pay by UPI, card, netbanking or wallet on a Razorpay payment page. It settles in Indian rupees (INR) only, from ₹1.00, and takes ticket orders, including a checkout that spans several events, and paid appointments, but not gift cards or installment plans. Setup is documented in the [user guide](docs__tickets.md#razorpay); the notes below are the parts specific to running your own install.

### Two ways to set it up

The same two as PayPal and Payfast, and you can mix them on one install:

#### One account for the whole install

Put your API keys in `.env`. Every schedule can then sell in Indian rupees straight away with no setup of their own, and all the money reaches your account.

#### Each user brings their own

Leave `.env` alone and each user connects an account from the **Razorpay** row of the **Payment Methods** tab in **Settings**, so different event owners on the same install are paid into different Razorpay accounts.

### Install-wide configuration

.env
Copy

```
RAZORPAY_KEY_ID=rzp_live_your-key-id
RAZORPAY_KEY_SECRET=your-key-secret
RAZORPAY_WEBHOOK_SECRET=
```

Both keys come from the [Razorpay Dashboard](https://dashboard.razorpay.com), under Account & Settings > API Keys. Live keys exist only once Razorpay has activated the account.

- `RAZORPAY_KEY_ID` and `RAZORPAY_KEY_SECRET` - required together. Set one without the other and Razorpay is not offered. Razorpay has no separate sandbox switch: a Key ID starting `rzp_test_` is Test Mode, and the payment method is then labelled **Razorpay (Test mode)** wherever it is picked. Test tickets look completely normal, so use live keys on a site taking real money.
- `RAZORPAY_WEBHOOK_SECRET` - optional, but recommended. See [A webhook for the install-wide account](#razorpay-webhook).

Run `php artisan config:clear` after editing, and note that these are **a default rather than an override**, exactly as with PayPal and Payfast: a user who connects their own Razorpay account keeps being paid into it. Users who have connected nothing see **Provided by this installation** on their Razorpay row. Ignored entirely in hosted mode, where every owner connects their own.

Like PayPal, this works on localhost

When the buyer comes back from Razorpay, the app confirms the payment with a call *we* make to Razorpay, so a purchase completes end to end on a laptop with no tunnel and no public hostname. Only the webhook needs a reachable site.

### A webhook for the install-wide account

Razorpay has no API for registering a webhook, so add it yourself in the Razorpay Dashboard. Do it for the install-wide account; each user who connects their own account adds their own the same way:

1. In the Razorpay Dashboard under **Account & Settings > Webhooks**, add a webhook pointing at `https://your-site/payments/razorpay/webhook`
2. Tick `payment_link.paid`, `payment_link.expired` and `payment_link.cancelled`. The last gives the seats back at once when a link is cancelled in the Razorpay Dashboard
3. Choose a secret, put the same value in `RAZORPAY_WEBHOOK_SECRET` and run `php artisan config:clear`

Test Mode and Live Mode each have their own webhooks, so add it in the mode your keys are from.

Without it, two things are lost

A buyer who pays but never comes back from Razorpay (common when paying in a UPI app on a phone) is not issued a ticket, because the app never hears of the payment. And a checkout nobody finishes keeps its seats, since Razorpay's payment page has no cancel button to tell us; with the webhook, the seats go back when the page expires, about half an hour later. Without it, turn on **Expire unpaid tickets** on your events, and set the webhook up on a site taking real money.

## Default Payment Method for New Events

New events start on **Cash** unless you say otherwise. On an install that takes money through one gateway, name it once so owners are not choosing it by hand every time:

.env
Copy

```
DEFAULT_PAYMENT_METHOD=payfast
```

Accepts any gateway key - `cash`, `stripe`, `invoiceninja`, `payment_url`, `payfast`, `paypal` or `razorpay` - and applies to events created through the API as well as the form. It only takes effect where the gateway can actually be used: an owner who has not connected it, or an event in a currency it cannot settle, still starts on Cash. On the event form a schedule's default [ticket preset](docs__tickets.md#ticket-presets) takes priority over it when the preset names a payment method; through the API it applies whenever `payment_method` is omitted and no preset is used (one is always used for a team member the schedule's preset switch binds).

## Refunds

Refund a sale from the **Sales** page rather than from your provider's dashboard. Open the actions menu at the end of the sale's row (the three dots). On a Stripe, PayPal or Razorpay sale, **Refund Ticket** opens a dialog showing what is **Available to refund**. Lower the **Refund Amount** for a partial refund, then press **Refund**. The money goes back through the provider first, and only then does the sale change. The screen itself is covered in the [user guide](docs__tickets.md#refunds); these are the parts that depend on how you set up the install.

- **Stripe** refunds are issued with the keys in your `.env` at the moment you refund, not the keys the sale was taken with. Keep `STRIPE_PLATFORM_SECRET` on the account that took the money: after a move to a different Stripe account, older sales can no longer be refunded from the app.
- **PayPal** refunds try the schedule owner's own PayPal account first and then the install-wide one, so a sale taken on the install-wide account before the owner connected their own can still be refunded.
- **Razorpay** refunds work the same way: the owner's own keys first, then the install-wide ones.
- **A partial refund** leaves the sale paid and its tickets valid, and the Sales page shows **Refunded so far**. Once the whole charge is back, the sale is marked refunded, its tickets stop scanning, and its seats and stock are released.
- **An installment plan** is refunded one payment at a time, and only in full.
- **Every other method** (Payfast, Invoice Ninja, a payment link, cash, or a sale marked paid by hand) shows **Mark as Refunded** instead. That records the refund and moves no money, so return it through the provider yourself.

Refunds made in the Stripe, PayPal or Razorpay dashboard are not reported back

The app only listens for payments and for payment links that expire or are cancelled, never for refunds: `checkout.session.completed` and `payment_intent.succeeded` from Stripe, `PAYMENT.CAPTURE.COMPLETED` and `PAYMENT.CAPTURE.DENIED` from PayPal, `payment_link.paid`, `payment_link.expired` and `payment_link.cancelled` from Razorpay. A refund issued in any of those dashboards therefore leaves the sale paid and its tickets scanning at the door. Refund from the Sales page instead.

A refund needs no webhook of its own, because the app calls the provider directly. The app sends no refund email, so tell the buyer yourself. The one message a refund can set off is for a paid appointment booking: refunding it in full cancels the booking, and the guest gets the usual cancellation email.

## Testing

### Test Mode Setup

For development and testing:

1. Toggle to **Test mode** in the Stripe Dashboard
2. Use test API keys (starting with `pk_test_` and `sk_test_`)
3. Create test webhook endpoints pointing to your development environment
4. Keep keys, prices and webhooks in one mode. Test keys with live price IDs, or the reverse, fail with a "No such price" error.

### Test Card Numbers

| Card Number | Result |
| --- | --- |
| `4242 4242 4242 4242` | Successful payment |
| `4000 0000 0000 3220` | 3D Secure required |
| `4000 0000 0000 9995` | Declined (insufficient funds) |
| `4000 0000 0000 0002` | Declined (generic) |

Use any future expiration date and any 3-digit CVC.

### Testing Webhooks Locally

Use the [Stripe CLI](https://stripe.com/docs/stripe-cli) to forward webhooks:

bash
Copy

```
# Install Stripe CLI
brew install stripe/stripe-cli/stripe

# Login to your Stripe account
stripe login

# Forward webhooks (selfhosted or Connect)
stripe listen --forward-to localhost:8000/stripe/webhook

# For SaaS: Forward subscription webhooks (separate terminal)
stripe listen --forward-to localhost:8000/stripe/subscription-webhook
```

The CLI prints a webhook signing secret for each listener. Put it in the variable that endpoint reads:

- `/stripe/webhook` on a selfhosted install: `STRIPE_PLATFORM_WEBHOOK_SECRET`
- `/stripe/webhook` for Connect: `STRIPE_WEBHOOK_SECRET`
- `/stripe/subscription-webhook`: `STRIPE_PLATFORM_WEBHOOK_SECRET`

### Trigger Test Events

bash
Copy

```
# Test checkout completion (selfhosted)
stripe trigger checkout.session.completed

# Test payment success (Connect)
stripe trigger payment_intent.succeeded

# Test subscription creation
stripe trigger customer.subscription.created
```

A triggered event proves the endpoint is reachable and the signature verifies, but it carries no sale ID in its metadata, so no sale changes state. To test the full path, buy a ticket with a test card.

## Troubleshooting

### Common Issues

#### Stripe is missing from the payment method list

**Applies to:** All setups

- Selfhosted: `STRIPE_PLATFORM_SECRET` is not set, or the config cache is stale. The **Stripe** row on the **Payment Methods** tab of **Settings** tells you which: it says **Connected**, and "Stripe is configured" when opened, only while the secret is readable. Otherwise it says **Not set up** and "Stripe is not configured".
- SaaS: the user has not finished Connect onboarding, so Stripe is not offered yet.
- Either setup: the **Payment** row only appears once the event's **Tickets** tab is set to **Sell tickets**.

#### The Stripe row says "Setup not finished"

**Applies to:** SaaS operators (Connect)

- The user started Stripe Connect onboarding, and Stripe had not enabled charges when they came back. Until it has, Stripe is not offered on their events.
- The app does not check again by itself. Once Stripe has finished verifying them, they press **Connect Stripe** in that row again.
- In the database this is a user with `stripe_account_id` set and `stripe_completed_at` empty.

#### "Invalid signature" webhook error

**Applies to:** All setups

- Verify the webhook secret matches the one in Stripe Dashboard
- A missing secret produces the same error: with neither variable set, every webhook is rejected
- Make sure you're using the correct secret for each endpoint:
  - `STRIPE_WEBHOOK_SECRET` for Connect webhooks
  - `STRIPE_PLATFORM_WEBHOOK_SECRET` for selfhosted/subscription webhooks

#### Payments not being recorded

**Applies to:** Selfhosted users, SaaS operators

- Check webhook logs in Stripe Dashboard → Webhooks → View logs
- Verify the webhook endpoint is accessible (not blocked by firewall)
- Confirm the endpoint listens to the right event: `checkout.session.completed` for direct payments, `payment_intent.succeeded` for Connect
- For Connect, confirm the endpoint listens on connected accounts, not only on your own
- Check `storage/logs/laravel.log` for errors, including a "webhook key mismatch" warning, which means the sale and the secret belong to different payment contexts

#### A sale is stuck as "amount mismatch"

**Applies to:** Selfhosted users, SaaS operators

- Stripe reported a total more than a cent away from the order total, so the sale was deliberately not marked paid
- `storage/logs/laravel.log` records the expected and received amounts side by side
- Usual causes are a currency mismatch between the event and the Stripe account, or ticket prices edited after the buyer reached Stripe
- A site admin can send the whole charge back with **Refund** on the admin panel's [Revenue](docs__selfhost__admin.md#insights-revenue) page, which refunds through the provider exactly as the Sales page does

#### Subscription not updating after payment

**Applies to:** SaaS operators

- Verify webhook events are being received
- Check that all required subscription events are selected in Stripe
- Confirm the subscribed price ID is one of the four configured in your `.env`. For an unrecognized price ID the webhook leaves the schedule's plan as it was, and an Enterprise customer on one is given Pro features only. The admin panel's [Revenue](docs__selfhost__admin.md#insights-revenue) page lists these under **Subscriptions on an Unrecognized Price**
- Review `storage/logs/laravel.log` for errors

#### "No such price" error

**Applies to:** SaaS operators

- Verify `STRIPE_PRICE_MONTHLY` and `STRIPE_PRICE_YEARLY` contain valid Price IDs
- Ensure the prices exist in the same Stripe mode (test vs live)

#### Enterprise is missing from the subscribe page

**Applies to:** SaaS operators

- Both `STRIPE_ENTERPRISE_PRICE_MONTHLY` and `STRIPE_ENTERPRISE_PRICE_YEARLY` must be set. With one missing, the request is served as Pro.

### Debugging Logs

- **Application:** `storage/logs/laravel.log`
- **Stripe API:** Dashboard → Developers → Logs
- **Webhooks:** Dashboard → Developers → Webhooks → Select endpoint → View logs

## Security

1. API key security: Secret keys belong in `.env` only. Never put them in client-side code or commit them to version control.
2. Webhook verification: Both endpoints are public URLs, so both signing secrets matter. `/stripe/webhook` fails closed: a signature it cannot verify, and any request at all when no secret is configured, is rejected with a 400. `/stripe/subscription-webhook` fails open: the signature check is only installed once `STRIPE_PLATFORM_WEBHOOK_SECRET` is set, so leaving it blank leaves an unauthenticated endpoint that can move a schedule between plans.
3. Amount and account checks: A confirmed payment is also checked against the amount owed, and on Connect against the account that took the money, before anything is marked paid.
4. HTTPS required: Stripe requires HTTPS for webhook endpoints in production.
5. PCI compliance: Using Stripe Checkout and Elements keeps you out of PCI scope. Card data never touches your server.

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/selfhost/stripe.blade.php)
