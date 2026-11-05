# White-Label SaaS Setup: Your Own Platform - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/saas

---

SaaS Platform

# SaaS Setup

Configure Event Schedule for SaaS (Software as a Service) deployment, where you host the platform for multiple customers using subdomains.

Feature overview: [White-label ticketing platform](https://eventschedule.com/saas)

Docs
/
SaaS Setup

On this page

## Overview

This page turns a working selfhosted install into a platform other people sign up to. Each customer schedule gets a subdomain of your domain, your logo and domain are on the product, and paid plans are billed through your own Stripe account. The setup itself is done in `.env`, your DNS and your web server. Once it is running you operate the platform from the platform admin panel at `/admin`, the **Admin** entry in the sidebar of an administrator's account, which the [Admin Panel guide](docs__selfhost__admin.md) describes tab by tab.

Event Schedule supports two deployment modes:

| Mode | Routing | Use Case |
| --- | --- | --- |
| **Selfhosted** | Path-based `/schedule-name/...` | Single organization or personal use |
| **SaaS/Hosted** | Subdomain-based `schedule-name.yourdomain.com` | Multi-tenant platform for multiple customers |

In SaaS mode each customer schedule gets its own subdomain, and signing in, the admin portal and billing all live on one shared `app` subdomain. A schedule on an Enterprise plan can additionally be served from the customer's own domain; see [Custom Domains](docs__saas__custom-domains.md).

The `app` and `www` hosts never resolve to a schedule, and a list of names the app needs for itself (among them `admin`, `api`, `blog`, `docs`, `demo` and anything starting with `demo-`) cannot be taken as a subdomain. A customer who asks for a reserved name, when creating a schedule or renaming it on its edit page, is given a random eight-letter subdomain instead. A new name starting with `demo-` is refused there with "That subdomain is reserved", and so is renaming a schedule to any reserved name from the platform admin panel.

Your platform does not serve the Event Schedule marketing site

The marketing pages (home, features, pricing, this user guide) are registered only when
`IS_NEXUS=true`, which identifies the one upstream install that
receives federated events and shared translations. Leave it unset on your own platform. Your root
domain then redirects visitors to the sign-in page, and you point
`APP_MARKETING_URL` at whatever marketing site you run yourself.

### The minimum to go live

1. #### Turn on SaaS mode

   Set `IS_HOSTED`, `APP_URL` and `APP_MARKETING_URL`. See [Core SaaS Settings](#core-settings).
2. #### Point DNS and the certificate at every subdomain

   A wildcard record, a wildcard certificate and a web server that answers for both. See [DNS Configuration](#dns) and [Web Server Configuration](#webserver).
3. #### Make it yours

   Set `SUPPORT_EMAIL` and publish your own legal pages. See [Support Address](#support-email) and [Legal Pages](#legal-pages).
4. #### Connect Stripe, if you sell plans

   The keys, the Price IDs, and the subscription webhook with its signing secret. See [Stripe Subscription Setup](#stripe).
5. #### Keep the scheduler running

   Without it no reminder, queued email, calendar sync or demo reset happens. See [Scheduler and queue](#scheduler), then work through [Verification Steps](#verification).

## Prerequisites

1. A completed base installation of Event Schedule, including MySQL and the `schedule:run` cron entry (see [Installation](docs__selfhost__installation.md))
2. A domain name with DNS access
3. Ability to configure wildcard SSL certificates
4. Web server configured to handle wildcard subdomains (Apache or Nginx)
5. A working mail transport: tenant invitations, ticket confirmations, subscription receipts and support notifications all send from this install. In hosted mode, sale notifications, appointment and gift card emails and buyer change notices go only through a tenant schedule's own email settings, so a tenant without them gets none of those

## Environment Configuration

Add the following variables to your `.env` file to enable SaaS mode:

### Core SaaS Settings

.env
Copy

```
# Enable SaaS mode with subdomain routing
IS_HOSTED=true

# Sender name on outgoing email, via MAIL_FROM_NAME="${APP_NAME}"
APP_NAME=Your Platform Name

# Main application URL (use app subdomain)
APP_URL=https://app.yourdomain.com

# Your own marketing site: the base of every link to a page the app does not serve
APP_MARKETING_URL=https://yourdomain.com
```

| Variable | Default | Description |
| --- | --- | --- |
| `IS_HOSTED` | `false` | Enable subdomain-based routing for multi-tenant SaaS |
| `APP_NAME` | `Laravel` | Sets the sender name on outgoing email, through the `MAIL_FROM_NAME="${APP_NAME}"` reference in `.env.example`. It also names the session cookie (`laravel_session` for the shipped value) unless you set `SESSION_COOKIE`, so changing it on a live platform signs everyone out once. It does **not** rename the product: admin page titles are literal, and `config('app.name')` is a fixed `Event Schedule` string in `config/app.php`, which is also the wordmark on mail the platform sends about an account or to a schedule's owner. Public schedule pages are already unbranded, since their title carries the schedule's own name. Rename in-app wording with [custom translations](#translations) instead. |
| `APP_URL` | - | Application URL. Set to the `app` subdomain (e.g. `https://app.yourdomain.com`). The base domain is derived by stripping a leading `app.`, `www.`, `blog.` or `demo.`, and the `app` and `demo` hosts and every schedule's subdomain are then built back from it automatically. The `blog` host belongs to the Event Schedule marketing site and is not served on your platform. |
| `APP_MARKETING_URL` | `https://eventschedule.com` | Your own marketing site, and the base of every link the app builds to a page it does not serve itself: the **Create your own** card on your free tier's event pages, the logo in the admin portal's sidebar and on the sign-in pages, the **Help** button (`/docs/...`), the **Learn more** and **Compare plans** links on upgrade prompts (`/features/...`, `/pricing`), and the privacy policy and terms (`/privacy`, `/terms-of-service`) until you [publish your own](#legal-pages). Point it at your site rather than leaving the default, and have your site answer or redirect those paths. |
| `IS_NEXUS` | `false` | Leave this off. It marks the single upstream install that hosts the Event Schedule marketing site and receives federated events and shared translation suggestions. Turning it on also changes the default proxy trust and disables the in-app updater. |

### Branding Customization

.env
Copy

```
# Logo for light backgrounds (dark artwork)
APP_LOGO_DARK=/images/dark_logo.png

# Logo for dark backgrounds (light artwork)
APP_LOGO_LIGHT=/images/light_logo.png
```

| Variable | Default | Description |
| --- | --- | --- |
| `APP_LOGO_DARK` | `/images/dark_logo.png` | Logo displayed on light backgrounds: the sign-in and sign-up pages, the first-run page that asks for a schedule type, the **About** dialog and the legal pages you write in the app, all in the light theme |
| `APP_LOGO_LIGHT` | `/images/light_logo.png` | Logo displayed on dark backgrounds: the same places in the dark theme. It is also the icon in the platform's own web app manifest. |

For the logo files:

- Place logo files in `public/images/`
- Recommended dimensions: 200px width, transparent background
- Supported formats: PNG, SVG
- The dark logo should have dark/black text (for light backgrounds)
- The light logo should have light/white text (for dark backgrounds)

The logo at the top of the admin portal's sidebar does not read these variables. It always loads `public/images/light_logo.webp`, with `light_logo.png` for a browser without WebP, so replace those two files to change it.

One credit a page

Your sender name, logos and domain make the platform yours, and your free tier's
**Create your own** card points at your `APP_MARKETING_URL`
rather than ours. One thing is not yours to repoint: a small "Event Schedule" chip in the
corner of every customer's public pages, on every plan. It is the
attribution the [Attribution Assurance License](https://github.com/eventschedule/eventschedule/blob/main/LICENSE)
asks for in return for the software, so it links to eventschedule.com and
`APP_MARKETING_URL` does not change it, and neither does
overriding its wording at **Admin > Translations**.

### Legal Pages

The privacy policy, terms of service and cookie policy your customers and their visitors are linked to are yours to publish. Until you do, those links go to `/privacy` and `/terms-of-service` on your `APP_MARKETING_URL`, and with that variable left on its default they open eventschedule.com's documents, which name our company and not yours.

Open **System → Legal Pages** in the platform admin panel (`/admin/legal`). Each of the three documents takes either an **External URL**, for a policy hosted elsewhere, or a **Document** written there in Markdown, which the app then serves on your `app` subdomain. Saving one replaces the link everywhere it appears, including the sign-up page, the ticket checkout and the cookie banner. While the privacy policy is still the built-in one, the admin dashboard shows **Publish your own privacy policy** under **Needs attention**. The [Admin Panel guide](docs__selfhost__admin.md#system-legal-pages) covers the page.

### Support Configuration

.env
Copy

```
# The address your customers are told to write to
SUPPORT_EMAIL=[email protected]
```

| Variable | Default | Description |
| --- | --- | --- |
| `SUPPORT_EMAIL` | `[email protected]` | Shown at the foot of every admin portal page ("If you have any questions or suggestions email us at ...") and as **Contact Us** in the **About** dialog. It is also the Reply-To on the notices sent when an account, schedule or event is deleted, and on the email a customer gets when you answer them in the [support chat](#support-chat). Change it or your customers will write to us. |

### Pricing and Trial Configuration

.env
Copy

```
# Length in days of both free trials
TRIAL_DAYS=7
```

| Variable | Default | Description |
| --- | --- | --- |
| `TRIAL_DAYS` | `7` | Length, in days, of the two free trials below. The shipped `.env.example` sets `365`, so set it deliberately. |

A new schedule starts on the **Free** plan. Nothing grants it Pro automatically, so the free tier is what every customer sees first. `TRIAL_DAYS` sets the length of the one free trial, which starts when the owner subscribes, from **Upgrade to Pro** on the **Plan** tab, the event form's **Save and start free trial**, or any upgrade prompt. A card is entered, nothing is charged, and Stripe takes the first payment when the trial ends.

- **Once per account.** An owner who has had a trial, or paid for a plan, on any schedule is charged at checkout on the next one, and checkout says so before the card is entered. It is recorded on the account, so deleting the schedule that had it gives nothing back.
- **A schedule with a dated plan**, such as one you granted by hand, gets the days it has left as its trial instead.
- **The card-free selling trial** that opened priced tickets alone was retired on 2026-10-20. A schedule still on one when it subscribes keeps that trial's end date as the first charge, rather than a new trial on top.

The trial's notice (`free_trial_badge`) and the line beside the checkout button name the length and the date of the first charge from `TRIAL_DAYS` itself. What a subscriber is charged after a trial comes from the Price objects in your Stripe dashboard. The app only stores the Price IDs, plus separate display amounts (see [Stripe Subscription Setup](#stripe)). The customer's side is in [Selling Tickets](docs__tickets.md#selling-trial).

### Push Notifications (Optional)

Event Schedule can send web push notifications that mirror its email notifications using [OneSignal](https://onesignal.com). This is a Pro feature and is **off by default**: with no configuration, no push SDK loads and no calls are made to OneSignal. To enable it platform-wide, create a OneSignal app (Web platform) and set:

.env
Copy

```
ONESIGNAL_APP_ID=your-onesignal-app-id
ONESIGNAL_REST_API_KEY=your-onesignal-rest-api-key
```

Once both values are set, a **Push notifications** panel appears on each schedule's edit page, in the **Notifications** row of the **Settings** tab, where the owner presses **Enable push on this device** and can send a test. Sending is gated on the schedule being Pro or Enterprise, and the demo schedule never receives push. One OneSignal app serves the whole platform; tenants are segmented automatically. Add `ONESIGNAL_SAFARI_WEB_ID` only if you need legacy macOS Safari support.

Note that enabling push loads the OneSignal SDK from their CDN and sends notification data to OneSignal, and that Apple iOS only supports web push for sites added to the home screen (iOS 16.4+).

### Google Wallet Passes (Optional)

Ticket buyers can keep their ticket in Google Wallet: an **Add to Google Wallet** button appears on the ticket page, the multi-event order page and the confirmation email, and the pass carries the same QR code, so it scans at the door like any other ticket. One Google Wallet issuer account of yours switches it on for every tenant at once, on every plan, and tenants have nothing to connect. Set:

.env
Copy

```
GOOGLE_WALLET_ISSUER_ID=your-issuer-id
GOOGLE_WALLET_SERVICE_ACCOUNT=/absolute/path/to/service-account.json
```

The service account setting also takes the key file's contents, base64-encoded, for a host with no writable file mount. Leave either value empty and no button renders and nothing is sent to Google. A new issuer account starts in Google's demo mode, where only the Google accounts you register as testers can save a pass. Give a staging install its own `GOOGLE_WALLET_ID_PREFIX` (the default is `es`): Google never deletes a pass class, so two installs sharing an issuer account and a prefix collide for good. The [Google Wallet guide](docs__selfhost__google-wallet.md) covers creating the issuer account.

### Running Behind a Reverse Proxy

A multi-tenant install almost always sits behind a reverse proxy or CDN (Nginx, Apache, Cloudflare, or a control panel such as HestiaCP). Tell Event Schedule which proxies to trust so it reads the `X-Forwarded-Proto` and `X-Forwarded-For` headers those proxies set:

.env
Copy

```
TRUSTED_PROXIES=*
```

Use `*` to trust any proxy, or a comma-separated list of proxy IPs or CIDR ranges (for example `10.0.0.0/8,192.168.1.1`) when the origin server is reachable directly from the internet. Left unset, your platform trusts no proxies at all: the application then treats every request as plain HTTP even when the browser is on HTTPS, which can produce redirect loops on tenant subdomains, and it records the proxy's IP address as the visitor's IP in analytics and rate limiting.

The setting deliberately lives in `config/trustedproxy.php` rather than in application bootstrap, so it survives `php artisan config:cache`. Re-run that command after changing the value.

## DNS Configuration

For SaaS mode to work, you need to configure wildcard DNS records.

### DNS Records

Add the following DNS records to your domain:

DNS (A Records)
Copy

```
# A record for main domain
yourdomain.com.    A    YOUR_SERVER_IP

# Wildcard A record for subdomains
*.yourdomain.com.  A    YOUR_SERVER_IP
```

Or if using a CNAME:

DNS (CNAME Records)
Copy

```
# CNAME for main domain
yourdomain.com.    CNAME    your-server.hosting.com.

# Wildcard CNAME for subdomains
*.yourdomain.com.  CNAME    your-server.hosting.com.
```

### SSL Certificate

You'll need a wildcard SSL certificate that covers both the main domain and all subdomains:

- Certificate should cover: `yourdomain.com` and `*.yourdomain.com`
- Let's Encrypt supports wildcard certificates via DNS-01 challenge
- Many hosting providers offer wildcard certificates

## Web Server Configuration

### Nginx Example

nginx.conf
Copy

```
server {
listen 443 ssl http2;
server_name yourdomain.com *.yourdomain.com;

ssl_certificate /path/to/wildcard.crt;
ssl_certificate_key /path/to/wildcard.key;

root /var/www/eventschedule/public;
index index.php;

location / {
try_files $uri $uri/ /index.php?$query_string;
}

location ~ \.php$ {
fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
include fastcgi_params;
}
}
```

### Apache Example

apache.conf
Copy

```
<VirtualHost *:443>
ServerName yourdomain.com
ServerAlias *.yourdomain.com

DocumentRoot /var/www/eventschedule/public

SSLEngine on
SSLCertificateFile /path/to/wildcard.crt
SSLCertificateKeyFile /path/to/wildcard.key

<Directory /var/www/eventschedule/public>
AllowOverride All
Require all granted
</Directory>
</VirtualHost>
```

## Stripe Subscription Setup

To sell paid plans to your customers, configure Stripe subscription billing. The subscription charges are made on your own Stripe account. This is separate from ticket payments, which settle into each schedule owner's own account with no platform fee: cards through Stripe Connect, or the owner's own [PayPal](docs__tickets.md#paypal), Payfast, Razorpay or Invoice Ninja account, a payment link, or cash. In SaaS mode there is no install-wide PayPal, Payfast or Razorpay account for your platform to supply, so each tenant connects their own, and a refund from the Sales page goes back through the account that took the money.

See the [Stripe integration documentation](docs__selfhost__stripe.md) for step-by-step key, webhook and Connect instructions.

### Required Environment Variables

.env
Copy

```
# Stripe Platform (for subscription billing)
STRIPE_PLATFORM_KEY=pk_live_your_publishable_key
STRIPE_PLATFORM_SECRET=sk_live_your_secret_key
STRIPE_PLATFORM_WEBHOOK_SECRET=whsec_your_webhook_secret
STRIPE_PRICE_MONTHLY=price_monthly_price_id
STRIPE_PRICE_YEARLY=price_yearly_price_id
```

Those five cover the Pro tier. Selling Enterprise, and showing the right numbers in the interface, needs these as well:

| Variable | Default | Description |
| --- | --- | --- |
| `STRIPE_ENTERPRISE_PRICE_MONTHLY` | - | Stripe Price ID for monthly Enterprise. The **Upgrade to Enterprise** button is hidden until both Enterprise Price IDs are set. |
| `STRIPE_ENTERPRISE_PRICE_YEARLY` | - | Stripe Price ID for yearly Enterprise |
| `STRIPE_PRICE_MONTHLY_AMOUNT` `STRIPE_PRICE_YEARLY_AMOUNT` | `5` / `50` | Display-only Pro amounts shown on the subscribe page, the Plan tab and upgrade prompts. An administrator can change them in the **Plan pricing** card under **System → Settings** in the platform admin panel (`/admin/settings`), which overrides these for everything the site displays |
| `STRIPE_ENTERPRISE_PRICE_MONTHLY_AMOUNT` `STRIPE_ENTERPRISE_PRICE_YEARLY_AMOUNT` | `15` / `150` | Display-only Enterprise amounts, overridable in the same **Plan pricing** card |
| `PLATFORM_CURRENCY` | `USD` | The currency those amounts are shown in, everywhere the platform quotes its own price. Also the fallback currency for a new event whose schedule has no country. An administrator can change it in the **Platform currency** card on the same page, which overrides this value |

The `*_AMOUNT` variables and `PLATFORM_CURRENCY` are labels, not prices. What a customer is charged comes from the Stripe Price the matching Price ID points at, including its currency, and nothing reconciles the two. Set them all, and keep them in step, or your platform will advertise one figure and bill another.

Keep the `*_AMOUNT` variables set even once you are editing the numbers in the platform admin panel. Revenue reporting reads the variables, not the **Plan pricing** card, and renewal reminder emails quote the amount Stripe reports for the subscription's Price, falling back to the variables only when Stripe does not answer, so that an amount changed to run a promotion cannot restate revenue you have already booked or quote an existing subscriber a figure their card will never be charged. One thing does turn the advertised amount into money: a [referral](docs__referral-program.md) credit applied to a subscribed schedule is posted to its Stripe balance at the advertised monthly amount.

Do not repoint a Price ID that still has subscribers on it

A subscription is matched to its plan by comparing its Stripe Price ID with the four you have configured, and with nothing else. Stripe Prices cannot be edited, so changing what a plan costs means a new Price object. A subscriber left on a Price ID that is no longer in `.env` stops resolving: an Enterprise subscriber loses the Enterprise features while their card is still charged for them, and revenue reporting counts them at zero. The admin dashboard then shows **subscriptions on an unrecognized price** under **Needs attention**, linking to the list on **Insights → Revenue**. Move those subscriptions onto the new Price in Stripe, or keep the variable on the Price they are on.

### Webhook Endpoint

Subscriptions are kept in sync by a webhook that is separate from the ticket-payment one. In your Stripe dashboard add an endpoint pointing at `https://app.yourdomain.com/stripe/subscription-webhook` and copy its signing secret into `STRIPE_PLATFORM_WEBHOOK_SECRET`. It is this webhook that downgrades a schedule to Free when its subscription is deleted, and that raises the payment-failed notice, so without it a cancellation in Stripe never reaches your platform.

Do not leave the signing secret blank

Signature checking is only switched on when `STRIPE_PLATFORM_WEBHOOK_SECRET`
has a value. Leave it empty and the endpoint stays open, accepting unsigned requests that could downgrade or
upgrade any schedule on your platform. Set it as soon as you create the endpoint.

### How Subscriptions Work

1. A customer creates a schedule. It starts on the Free plan
2. They open the schedule and select its **Plan** tab, the last of the schedule's tabs, which shows the current plan, its status, and how much of the newsletter email and photo allowances is used
3. The schedule's owner clicks **Upgrade to Pro** and pays. The button only appears once `STRIPE_PLATFORM_KEY` is set, and only for the owner: an admin of the schedule sees the plan but none of its actions, and a viewer does not see the **Plan** tab at all
4. Pro features unlock for that schedule, and the free-tier **Create your own** card and ad slot come off its public pages
5. An active Pro subscriber can then use **Upgrade to Enterprise**, or **Switch to Yearly** and **Switch to Monthly**, from the same tab. **Manage Subscription** opens the Stripe billing portal, and **Cancel Subscription** asks for an optional reason and keeps the plan until the end of the paid period
6. Subscriptions are per schedule, not per user: a customer with three schedules pays for each one they upgrade

To put a schedule on a plan without a subscription, open **Manage → Schedules** in the platform admin panel, press **Edit** on its row, and under **Plan** set **Plan Type** and a **Plan Expires** date. The plan holds until that date, so a plan type saved with no date grants nothing. See [Schedules](docs__selfhost__admin.md#manage-plans) in the Admin Panel guide.

## Complete Example Configuration

Here's a complete `.env` configuration for a SaaS deployment:

.env
Copy

```
# Application
APP_NAME=My Events Platform
APP_ENV=production
APP_DEBUG=false
APP_URL=https://app.myevents.com
APP_MARKETING_URL=https://myevents.com

# SaaS Mode
IS_HOSTED=true

# Branding
APP_LOGO_DARK=/images/dark_logo.png
APP_LOGO_LIGHT=/images/light_logo.png
SUPPORT_EMAIL=[email protected]

# Trial Configuration
TRIAL_DAYS=7

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eventschedule
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

# Session (important for subdomains)
SESSION_DRIVER=database
SESSION_DOMAIN=.myevents.com

# Mail
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_USERNAME=your_mail_user
MAIL_PASSWORD=your_mail_password
MAIL_FROM_ADDRESS=[email protected]
MAIL_FROM_NAME="${APP_NAME}"

# Stripe Platform (optional, for Pro subscriptions)
STRIPE_PLATFORM_KEY=pk_live_...
STRIPE_PLATFORM_SECRET=sk_live_...
STRIPE_PLATFORM_WEBHOOK_SECRET=whsec_...
STRIPE_PRICE_MONTHLY=price_...
STRIPE_PRICE_YEARLY=price_...
```

The session cookie spans your subdomains

Set `SESSION_DOMAIN` to `.yourdomain.com` (with leading dot) to allow session sharing across subdomains. If left unset, hosted mode automatically defaults it to your `APP_URL` base domain; setting it explicitly takes precedence.

Requests arriving on a customer's own domain are the exception: the session domain is cleared for those requests only, so the cookie is scoped to that origin instead of one the browser would reject. That is also why signing in always happens on your `app` subdomain rather than on a custom domain.

## Verification Steps

After completing the configuration, verify your setup:

### 1. Test the App Subdomain

Visit `https://app.yourdomain.com`. You should reach the sign-in page, and be able to register an account.

The bare root domain redirects to that same sign-in page. That is the expected result: your platform does not serve the Event Schedule marketing pages, so put your own site on the root domain (or on a separate host) and point `APP_MARKETING_URL` at it.

### 2. Test Subdomain Routing

1. Create a new account and schedule
2. Note the schedule's subdomain (e.g. `my-schedule`)
3. Visit `https://my-schedule.yourdomain.com`
4. The schedule's public page should load, and stay signed in when you move back to `app.yourdomain.com`
5. Open the same address in a private window. Signed out, a schedule answers page-not-found until its email address or phone number has been verified, so verify the schedule's email first and then check that the page loads for a visitor

### 3. Test SSL Certificate

Verify SSL works for both:

- Main domain: `https://yourdomain.com`
- Any subdomain: `https://test.yourdomain.com`

### 4. Test Subscription Flow (if configured)

1. Signed in as the schedule's owner, open the schedule and select its **Plan** tab
2. Click **Upgrade to Pro**. If the button is missing, `STRIPE_PLATFORM_KEY` is not set
3. Complete checkout with the test card `4242 4242 4242 4242`, which only works while your keys are the `sk_test_` / `pk_test_` pair
4. Confirm the Plan tab now reports Pro, and that the free-tier **Create your own** card has gone from the schedule's event pages
5. Cancel from the Stripe dashboard and confirm the Plan tab picks it up, which proves the subscription webhook is wired correctly

## Demo Mode

Demo mode lets potential customers try your platform without signing up. Visitors to `demo.yourdomain.com` are automatically logged in to a shared demo account with sample data.

It is part of every hosted install and has no switch: with `IS_HOSTED=true` the [scheduler](#scheduler) creates the demo account and its schedules the first time it runs, and rebuilds them every hour after that. On a selfhosted install the command refuses to run and the auto-login stays inert, since demo mode relies on subdomain routing.

### How It Works

- A request to the `demo` subdomain signs the visitor in as the demo user, with no password prompt
- They land in the **admin portal** for the demo schedule, on its **Schedule** tab, so what they try is the real product rather than a public page
- The demo interface follows the visitor's browser language, chosen from your supported languages on first visit
- A visitor already signed in as a real user is bounced back to your app rather than switched into the demo
- The sample data is rebuilt every hour, so what one visitor changed is gone for the next

### What Is Created, and When

The scheduler runs the setup command once an hour, whichever way you drive it. The first run creates the demo, and every later run resets it. Run it by hand to have the demo at once, or to reset it between two scheduled runs:

bash
Copy

```
php artisan app:setup-demo
```

It creates the demo user and a curator schedule on the `simpsons` subdomain, then populates a small Springfield-themed network around it on `demo-` subdomains: talent and venue schedules, sub-schedules, events with ticket types, followed schedules, sample ticket purchases and analytics history. A reset deletes and recreates the `demo-` schedules and empties the curator. An event one of your customers created that reached a demo schedule is only detached from it, and keeps its tickets and sales.

Do not add a cron entry of your own for the command. The scheduler already runs it, and a second runner would rebuild the demo twice an hour.

Let the scheduler run once before you open sign-ups

The demo account always has the address `[email protected]`, and its curator schedule is always `simpsons`. If a real account already holds that address, or a real schedule that subdomain, the scheduler adopts it as the demo: every visitor to the demo host is signed in to that account, and each hourly reset deletes that schedule's events and sub-schedules. Once the demo exists both names are taken.

The demo schedule is created on the Free plan like any other, so Pro-only screens stay locked and its public pages carry your free-tier footer. To show off paid features, open **Manage → Schedules** in the platform admin panel, press **Edit** on the `simpsons` row, and under **Plan** set **Plan Type** and a **Plan Expires** date. Whatever its plan, it never shows ads or the accommodation map. Its description ends with a line that sends visitors to eventschedule.com.

## Scheduler and queue

Timed work (reminder emails, calendar sync, installment charges, ticket release, AI translation, the hourly demo reset) is driven by the Laravel scheduler, and the queue is drained from inside it. There are three ways to run it: a cron entry, a worker process, or an HTTP endpoint. Pick one.

### A cron entry, or a worker process

On a server with cron, add the single entry from the [installation guide](docs__selfhost__installation.md#cron):

crontab
Copy

```
* * * * * php /path/to/eventschedule/artisan schedule:run
```

On a platform with no cron but long-running processes, a container host for example, run the scheduler as the process instead. This is what eventschedule.com does, as a DigitalOcean App Platform worker:

bash
Copy

```
php artisan schedule:work
```

### Or an HTTP cron endpoint

Shared hosting that offers neither a crontab nor a long-running process can drive the same schedule over HTTP. Set `APP_CRON_SECRET` to a long random string and have any external cron service request this once a minute:

http
Copy

```
GET https://app.yourdomain.com/translate_data?secret=YOUR_SECRET
```

The same secret also gates `/release_tickets`. Leaving `APP_CRON_SECRET` empty disables both endpoints, which is the right setting on an install that uses cron or a worker.

Do not run two of these at once

Each of the three is a complete copy of the same schedule. An install running two of them, or the same one twice, will do some work twice. A handful of commands hold a shared lock and are safe either way, but most rely on there being a single runner.

### Queue

The scheduler runs `queue:work --stop-when-empty` every minute, so queued mail and background jobs go out within about a minute with no separate worker to manage. With the default `QUEUE_CONNECTION=sync` nothing is queued at all and jobs run inline in the request that created them; set it to `database` to get the queue.

If you need lower latency than a minute, run a resident `php artisan queue:work` as well.

### Knowing that it stopped

Every scheduler tick stamps a heartbeat. When it goes stale the platform admin panel shows **Scheduled tasks are not running** under **Needs attention** on the dashboard, puts a badge on the **System** tab, and says so at the top of **System → Queue**. Tune the threshold with `SCHEDULER_STALE_MINUTES` (default 20, and never less than 16). Take it seriously: while the scheduler is down nothing sends email, syncs a calendar or charges an installment.

The **Scheduler** card on **System → Queue** is where to look first. It shows when the last tick was, each rail that has ticked and how long ago, how many scheduled tasks are reporting, any task that failed, and which cache store holds the heartbeat and whether every server can read it. An install driven only by the HTTP endpoint reports the heartbeat alone, since that rail records no per-task results.

If the scheduler is a container of its own beside the web server, two more variables make a dead one visible:

| Variable | Default | Description |
| --- | --- | --- |
| `SCHEDULER_RAIL` | `cron` | The name this process ticks under on the Scheduler card. Set it to `worker` on the scheduler container, because `schedule:run` cannot tell a crontab from a worker. The HTTP endpoint always ticks as `http`. |
| `SCHEDULER_EXPECTED_RAIL` | - | The rail that must be alive for scheduled work to count as happening. Leave it unset with a single cron. Set it, on the web server as well, to the same name as the scheduler container's `SCHEDULER_RAIL`: without it another rail keeping the shared heartbeat fresh hides a dead worker, and with a name nothing ticks under the panel reports a stall that is not real. |

Running more than one app server

Set `CACHE_STORE` to `database` or `redis`. Every lock that stops two scheduled runs colliding is held in the cache, so on the `file` default each server serialises only against itself, and the heartbeat above will report a stall that is not real, because one server cannot see another's cache.

## Backup storage

Schedule exports are written to `storage/app` by default, which is correct for a single server. Point them at object storage if your app runs on more than one server or container, or on a host with an ephemeral filesystem: the process that builds an export is not the one that later serves the download, so a local file would be missing or already deleted by then.

.env
Copy

```
BACKUP_DISK_DRIVER=s3
BACKUP_SPACES_KEY=your-key
BACKUP_SPACES_SECRET=your-secret
BACKUP_SPACES_REGION=nyc3
BACKUP_SPACES_ENDPOINT=https://nyc3.digitaloceanspaces.com
BACKUP_SPACES_BUCKET=your-private-backups-bucket
```

The endpoint is your provider's **region** endpoint, not the per-bucket origin endpoint that storage consoles display beside the bucket itself. The bucket name is added to the hostname for you, so an endpoint that already carries it addresses `bucket.bucket.region...` and every upload fails its TLS handshake. Event Schedule strips a leading bucket name if it finds one, so either form works.

Use a separate private bucket, never your images bucket

An export archive contains every sale, attendee email address and phone number for the schedules inside it, and its path is a user id plus a timestamp. Image buckets are public and usually CDN-fronted, so anything landing in one is effectively published at a guessable URL, and a CDN keeps serving it after you make the object private again. Use a bucket with no public policy and no CDN in front of it. `BACKUP_SPACES_BUCKET` has no default for this reason: a missing value fails rather than quietly writing backups somewhere public.

Archive filenames also carry 32 random characters, so the bucket is not the only thing standing between an export and the public.

Imports are unaffected and always stay on the server that received the upload.

## Support Chat

Event Schedule includes a built-in chat system that lets your customers message you for support without leaving the admin portal. It needs no configuration and is present on every hosted install; on a selfhosted install neither the widget nor the admin screen exists. Each customer has one running conversation with you, which reopens if they write again after you have closed it.

### For Your Customers

#### Chat widget

A floating chat bubble in the bottom corner of the screen for signed-in users, with a green dot on it while you are marked available.

#### Sidebar button

A chat icon beside **Help** at the foot of the admin sidebar opens the same panel, with a red badge for unread replies.

#### Message limit

Up to 2,000 characters per message, in both directions. A message is stored as typed and escaped wherever it is shown, so HTML in one appears as text.

### For You, the Platform Admin

#### Inbox

Manage conversations from **System → Support** in the platform admin panel (`/admin/support`). Every conversation is listed with its unread count, and the **System** tab and its **Support** entry carry a matching badge.

#### Availability switch

Switch yourself online to show the green dot, either at the top of the Support page or from the chat icon at the foot of the sidebar, which for an admin opens an availability switch and an **Open inbox** link instead of a chat.

#### Hourly check

While you are online, every hour the admin portal asks whether you are still available. Confirm within 10 minutes or you are switched offline, so you never leave it on overnight by accident. Replying to a conversation counts as confirming.

#### Away when the admin portal is closed

If no admin portal tab of yours has checked in for 5 minutes (the laptop is closed or the browser quit), customers see you as away until you open it again. Only the admin who switched the chat on counts, so another admin's open tab does not keep you looking available.

#### New message alerts

While you are online, a new message shows a notice with a **Reply** link, plays a soft chime and flashes the tab title on whichever admin portal page you are on.

#### Replying

Open a conversation to read the history and reply. The customer sees a typing indicator while you write, and you see "Seen" once they have read your reply.

#### Closing conversations

Close resolved conversations to keep the list short.

### Who Gets Notified

#### When a customer writes: email

Every new message emails the first account flagged as a platform admin (the one with the lowest ID), whether you are online or not, so every conversation reaches one inbox. Give that account a monitored address. A burst of messages is one email: the next message is emailed once 10 minutes have passed, or once you have replied to or closed the conversation. While you are available the in-app alert tells you as well.

#### When a customer writes: push

New messages also send a push notification if OneSignal is configured (for a website visitor, at most one every two minutes). It goes to the admin who switched the chat on, or to the same first admin while nobody is online.

#### When you reply

Your replies email the customer only once they have left the chat without reading them. The email waits at least two minutes and carries every unread reply at once, so a quick back-and-forth does not fill their inbox. Its Reply-To is your `SUPPORT_EMAIL`.

### Website Visitors

On eventschedule.com, the marketing site also offers signed-out visitors a chat with a person, and only while you are available. Visitors can leave an email so a reply reaches them after they leave, and it is required once you are away. Their conversations appear in the same Support inbox, marked Visitor, with the page they are on and their country. This needs the marketing site, so it does not apply to your own SaaS install.

## Custom translations

Rename built-in UI terms to match your customers' vocabulary (for example "Talent" to "Artist", or "Curator" to "Event Planner") without your changes being wiped out by `php artisan app:update`. Overrides apply globally across every tenant on your platform.

### The Easy Way: The Translation Manager

Sign in as a platform admin and open **System → Translations** in the platform admin panel (`/admin/translations`). Search for a phrase, edit it for the locale you want, and save. The database is the source of truth: each save is stored as an override and republished to a file on disk, so nothing is lost on the next upgrade. Reverting an override restores the bundled string. The [Admin Panel guide](docs__selfhost__admin.md#system-translations) covers the page, including sharing your improvements with the community.

### The Manual Way: Override Files

You can also drop a PHP file in:

path
Copy

```
storage/app/lang/{locale}/{file}.php
```

The three files the Translation Manager works on are `messages.php` (UI strings), `accessibility.php`, and `marketing.php`. List the keys you want to change and nothing else; the bundled translations fill in the rest:

php
Copy

```
<?php
// storage/app/lang/en/messages.php
return [
'talent' => 'Artist',
'talents' => 'Artists',
'curator' => 'Event Planner',
'curators' => 'Event Planners',
];
```

Create one directory per locale you want to override (`en`, `es`, `fr`, …). The full list of supported locales lives in `config/app.php` under `supported_languages`.

A hand-written file for one of those three managed groups is adopted into the database the next time the overrides are republished, after which the file is regenerated from the database. Keep that in mind if you edit both by hand and through the platform admin panel, and keep nested array values in their own group file (`validation.php`, `auth.php` or a custom group), which the loader honours and never rewrites.

### Rebuilding and Moving Servers

The files are server-local derived state, so rebuild them from the database after restoring a backup or cloning the app to a new machine:

bash
Copy

```
php artisan translations:publish
```

Run it on each web server, and restart your queue workers afterwards so long-running processes pick up the new strings. If you run several servers behind a load balancer, set `LANG_OVERRIDES_PATH` to a shared volume instead and publish once. A relative value resolves from the application root; an absolute one is used as given.

Why this works

Changes apply on the next request, with no cache clear required. `storage/app/` is gitignored, so your overrides survive `php artisan app:update`, `git pull`, and fresh checkouts.

## Custom dashboard links

Add up to three custom links to the admin sidebar (for example a support site, community forum, or status page). On a SaaS deployment these links are **platform-wide**: everyone signed in to the admin portal, on every tenant, sees them just below the **Newsletters** link, and they open in a new tab.

Set the following variables in your `.env` file. A link only appears when **both** its title and URL are filled in, so you can configure one, two, or three links:

.env
Copy

```
CUSTOM_LINK_1_TITLE="Help Center"
CUSTOM_LINK_1_URL="https://help.example.com"
CUSTOM_LINK_2_TITLE="Status"
CUSTOM_LINK_2_URL="https://status.example.com"
CUSTOM_LINK_3_TITLE=
CUSTOM_LINK_3_URL=
```

Reload cached config

If you have run `php artisan config:cache`, re-run it (or `php artisan config:clear`) after editing `.env` so the new links take effect.

## Security Considerations

- **Environment File:** Never expose `.env` file publicly, and keep `APP_DEBUG=false` so stack traces never reach a customer
- **HTTPS Required:** Always use HTTPS in production, and keep `SESSION_SECURE_COOKIE=true` so the shared subdomain cookie is never sent in the clear
- **API Keys:** Keep all API keys and secrets secure
- **Database:** Use strong database passwords and restrict access
- **File Permissions:** Ensure proper file permissions on the server
- **Admin Accounts:** The platform admin panel at `/admin` reaches every tenant's data. Flag as few accounts as possible as platform admins, and protect them with two-factor authentication (**Settings → Security** in each account). The panel also asks for the password again before it opens, and again after a day without use: see [Accessing /admin](docs__selfhost__admin.md#accessing)
- **Proxy Trust:** Only widen `TRUSTED_PROXIES` to `*` when the origin server cannot be reached except through your proxy. Otherwise list the proxy IPs, so a visitor cannot spoof their own address

## Troubleshooting

### Common Issues

#### Subdomains show 404 or wrong page

- Check that `IS_HOSTED=true` is set
- Verify wildcard DNS is configured correctly
- Ensure web server is configured for wildcard subdomains

#### A schedule's page loads for its owner and is not found for everyone else

- Nobody has verified the schedule's email address or phone number yet. Until one is verified only its own team and administrators can open its public pages
- Have the owner verify the address, or open **Manage → Schedules** in the platform admin panel, press **Edit** on the schedule and use **Mark Email as Verified** (or **Mark Phone as Verified**, for a schedule with a phone number) under **Verification**

#### Signed in on the app subdomain, signed out on a schedule's subdomain

- Set `SESSION_DOMAIN=.yourdomain.com` (with leading dot). If unset, hosted mode defaults it to the `APP_URL` base domain
- Make sure `APP_URL` is set to your app subdomain (e.g. `https://app.yourdomain.com`)
- Clear browser cookies and try again

#### Redirect loop, or every visitor logged with the same IP address

- Set `TRUSTED_PROXIES`. Left unset, your platform trusts no proxies and reads HTTPS requests as HTTP (see [Running Behind a Reverse Proxy](#reverse-proxy))
- Re-run `php artisan config:cache` if you have cached your configuration

#### The root domain shows the sign-in page instead of a landing page

- This is expected. Marketing pages are only served when `IS_NEXUS=true`, which is not a setting for your platform
- Host your own marketing site and point `APP_MARKETING_URL` at it

#### SSL certificate errors on subdomains

- Verify wildcard certificate covers `*.yourdomain.com`
- Check certificate is properly installed in web server

#### Logo not displaying

- Verify logo files exist in `public/images/`
- Check file permissions are readable
- Ensure paths in `.env` match actual file locations
- The logo in the admin portal's sidebar is not one of the two variables: see [Branding Customization](#branding)

#### The Help button or a Learn more link opens a page that does not exist

- Those links are built on `APP_MARKETING_URL`, so your marketing site has to answer or redirect `/docs/...`, `/features/...` and `/pricing` (see [Core SaaS Settings](#core-settings))

### Logs

Check the application logs for errors:

bash
Copy

```
tail -f storage/logs/laravel.log
```

## Related Documentation

- [Custom Domains](docs__saas__custom-domains.md) - Allow your customers to use their own domain names with their schedules, including DigitalOcean App Platform setup
- [Twilio Integration](docs__saas__twilio.md) - Set up phone number verification and WhatsApp messaging
- [Facebook Login](docs__saas__facebook-login.md) - Let your customers sign up and log in with Facebook
- [Federation](docs__saas__federation.md) - Share your customers' public events with the eventschedule.com listings, with every listing linking back to your platform
- [Monetization](docs__saas__monetization.md) - Show ads on your free tier's public pages, sell promotional placement to your paid schedules, and earn an accommodation affiliate commission
- [Admin Panel](docs__selfhost__admin.md) - Grant plans, edit any tenant's schedule name, subdomain and contact details, and release or restore a squatted subdomain
- [Stripe Integration](docs__selfhost__stripe.md) - Keys, webhooks and Stripe Connect for both subscription billing and ticket payments

[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/saas/setup.blade.php)
