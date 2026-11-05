# Selfhost Guide: Run Event Schedule on Your Own Server

> **Fonte / Source:** https://eventschedule.com/docs/selfhost

---

Selfhost

# Selfhost Event Schedule

Run Event Schedule on your own server and your own database. A single-tenant install has no plan tiers, so every Pro and Enterprise feature is switched on.

Feature overview: [Selfhosted event calendar](https://eventschedule.com/selfhost)

Docs
/
Selfhost

## Selfhost guides

Start with [Installation](docs__selfhost__installation.md), then add only the integrations you need. Each guide lists the `.env` keys it requires. If you want to host schedules for other people, each on its own subdomain, follow the [SaaS documentation](docs__saas.md) after installing.

Selfhost
 - Selfhosted deployments only
No plan gates

Setting `IS_HOSTED=false` makes every schedule resolve to the top tier, so the Pro and Enterprise badges you see elsewhere in these docs do not apply to your install: unlimited paid ticket sales, the check-in dashboard, passes, gift cards, installment plans, promo codes, add-ons, the ticket waitlist, custom fields, webhooks, custom CSS, internal and unlisted events, team members, scheduled graphic emails and unlimited newsletters are all available, and the AI features come with them once you add an AI key. The differences run the other way instead, and they are listed below.

- [### Installation

  Step-by-step server setup: database, web server, and first run.

  Read guide](docs__selfhost__installation.md)
- [### Stripe Integration

  Stripe, PayPal, Payfast, Razorpay and Invoice Ninja on a selfhost or SaaS install, and how refunds work.

  Read guide](docs__selfhost__stripe.md)
- [### Google Calendar

  Bidirectional Google Calendar sync.

  Read guide](docs__selfhost__google-calendar.md)
- [### Google Wallet

  Let buyers save tickets to Google Wallet.

  Read guide](docs__selfhost__google-wallet.md)
- [### Outlook Calendar

  Bidirectional Outlook sync via Microsoft Graph.

  Read guide](docs__selfhost__microsoft-calendar.md)
- [### Email Setup

  Set up SMTP, Amazon SES or another mail driver, and see which emails go out automatically.

  Read guide](docs__selfhost__email.md)
- [### AI Setup

  Configure Google Gemini or OpenAI for import, scanning and translation.

  Read guide](docs__selfhost__ai.md)
- [### Boost Setup

  Configure the Meta ads integration behind the boost feature.

  Read guide](docs__selfhost__boost.md)
- [### Admin Panel

  Monitor users, revenue and analytics, and manage platform settings.

  Read guide](docs__selfhost__admin.md)
- [### Federation

  Share your public events with the eventschedule.com listings.

  Read guide](docs__selfhost__federation.md)
- [### Web accessibility

  Accessibility declarations, configuration and user-generated content.

  Read guide](docs__selfhost__accessibility.md)

### Where to start

1. #### Install the app

   It runs on ordinary PHP hosting: PHP 8.2 or newer, MySQL 5.7 or MariaDB 10.3, a web server whose document root is the `public` directory, and HTTPS. Create an empty database, upload the release files, set the file permissions, then open your domain: the sign-up page doubles as the first-run setup wizard, and it takes your database details, runs the migrations, writes `.env` and creates your account. Finish with the cron entry that runs the scheduler every minute. It is not optional: without it everything that happens on a timer quietly stops, from reminders and scheduled newsletters to calendar sync and the queue.

   [Installation](docs__selfhost__installation.md)
2. #### Set up email

   Nothing that emails a person works until a mail driver is configured, including password resets, ticket confirmations, booking requests and newsletters. One driver in `.env` serves the whole instance.

   [Email Setup](docs__selfhost__email.md)
3. #### Add a way to take payment

   Needed only if you sell tickets, passes, gift cards or paid appointments. Stripe covers all four and collects into the one account whose keys you put in `.env`; paying each event owner into their own Stripe account takes Stripe Connect, which only runs in SaaS mode. PayPal, Payfast (South African rand only) and Razorpay (Indian rupees only) take ticket orders and paid appointments, through one account for the whole install or through each user's own, and Invoice Ninja needs no `.env` configuration at all. No platform fee is ever added to a sale.

   [Stripe, PayPal, Payfast and Razorpay](docs__selfhost__stripe.md)
4. #### Add an AI key

   Google Gemini or OpenAI, if you want AI event import, agenda scanning, translation or auto import. Everything else works without one, feeds included.

   [AI Setup](docs__selfhost__ai.md)
5. #### Connect calendars

   Google and Outlook sync each need your own OAuth credentials in `.env`; CalDAV needs no server-side configuration, so a schedule can connect one straight away.

   [Google Calendar](docs__selfhost__google-calendar.md), [Outlook Calendar](docs__selfhost__microsoft-calendar.md)

Then the optional pieces, in any order:

- [Federation](docs__selfhost__federation.md) lists your public events on eventschedule.com and links each one back to your site. It stays off until you turn it on in the admin panel.
- [Boost](docs__selfhost__boost.md) runs Meta ads from inside the app, billed to the one Meta ad account you configure, so every campaign spends your money.
- [Google Wallet](docs__selfhost__google-wallet.md) puts an "Add to Google Wallet" button on every ticket, free registrations included, and needs a Google Wallet issuer account of your own.
- The [admin panel](docs__selfhost__admin.md) at `/admin` gives you instance-wide monitoring and settings, and lets you edit any schedule on the install down to its name, path and contact details. The account the setup wizard created is already an instance admin.
- The [accessibility](docs__selfhost__accessibility.md) guide covers the accessibility panel you can switch on for a schedule, and what to put in your own accessibility statement.
- [Google keys](docs__selfhost__installation.md#google-keys) add venue coordinates, Google maps on event pages and YouTube search, and the [venue map](docs__selfhost__admin.md#venue-map) shows a schedule's venues on its public page. Both are off until configured.
- [Push notifications](docs__selfhost__installation.md#push-notifications) through OneSignal, and a [Turnstile challenge](docs__selfhost__installation.md#spam-protection) on public forms.

### How a selfhosted install differs

Same codebase either way. `IS_HOSTED=false` is what selects the middle column.

| Area | Your own server | eventschedule.com |
| --- | --- | --- |
| Plans | No tiers. Every schedule has every feature. | Free, Pro and Enterprise |
| Schedule addresses | Paths under your domain, e.g. `yourdomain.com/my-schedule`, set in the **Path** field on the **Settings** tab of a schedule's edit page | A subdomain, e.g. `my-schedule.eventschedule.com`, and Enterprise can point its own domain at a schedule |
| Accounts | The setup wizard creates the first account, which becomes the instance admin, then sign-up closes. Set `ALLOW_REGISTRATION=true` to reopen it. | Anyone can sign up |
| Team members | Unlimited | The owner only, until Enterprise, which allows up to five people per schedule, the owner included |
| Email delivery | One mail driver in `.env` for the whole instance | Per-schedule SMTP in the **Email Settings** row of a schedule's **Integrations** tab. Hosted only, so that row is not shown on your install. |
| Newsletter allowance | Unlimited | 10 newsletter emails a month on Free, 100 on Pro, 1,000 on Enterprise, and unlimited for a schedule sending through its own SMTP. Each recipient counts as one. |
| Selling priced tickets | Included, unlimited | A Pro or Enterprise feature. Free registration and zero-price ticket types are unlimited on every plan, including Free. |
| Payments | Stripe collects into the one account whose keys are in `.env`. PayPal, Payfast and Razorpay can do the same for the whole install, or each user connects their own | Each owner connects their own Stripe (through Stripe Connect), PayPal, Payfast or Razorpay account and is paid into it directly |
| Auto Import | An [Auto import](docs__creating-schedules.md#auto-import) row in the Integrations tab of a schedule's edit page imports the events found at its **Import URLs** once a day, from the scheduler. **Import Cities** is optional and only filters: an event held in a city that is not on the list is skipped. Needs an AI key. | Not available |
| Updates | An instance admin's [Settings → App Update](docs__account-settings.md#app-update) compares your installed version against the latest release and applies it in one click, as does [Admin → System → App Update](docs__selfhost__admin.md#system-app-update). Or run `php artisan app:update` on the server. See [Updating](docs__selfhost__installation.md#updating) | Updated for you |
| Realtime | Off until an instance admin turns it on at [Admin → Settings](docs__selfhost__admin.md#settings-realtime). A second switch there gives schedule owners their own [Realtime tab](docs__analytics.md#realtime) | On, with the owners' Realtime tab |
| Maps | Google maps on event pages need your own [Google keys](docs__selfhost__installation.md#google-keys). The [venue map](docs__selfhost__admin.md#venue-map) on a schedule's page is off until you name an address search service | Configured by the service |
| Invitations to claim a page | Not sent. A venue or performer an organizer names gets a page, but is never emailed or texted an invitation to claim it | Sent when the organizer ticks it, by email, or by text message where only a phone number was given |
| Attribution | No "Powered by" footer, but every public schedule page keeps a small Event Schedule chip in the corner, which the license asks you to leave in place. Embedded views do not carry it. | Branding is removed on Pro and Enterprise |

## Beyond selfhosting

The rest of the documentation applies to every deployment: the user guide describes the same screens your install runs.

[Getting Started
Create your first schedule and add events.](docs__getting-started.md)
[All documentation
User guides, SaaS setup and the developer API.](docs__index.md)
[REST API and webhooks
Drive your instance from your own tools.](docs__developer__api.md)
[Run it as a SaaS
Multi-tenant routing, custom domains and plans.](docs__saas.md)

Event Schedule is released under the Attribution Assurance License, an OSI-approved licence adapted from the BSD licence, which is why the credit chip stays on a selfhosted install. The [open source page](https://eventschedule.com/open-source) links the repository, the releases and the license text.

[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/selfhost/index.blade.php)
