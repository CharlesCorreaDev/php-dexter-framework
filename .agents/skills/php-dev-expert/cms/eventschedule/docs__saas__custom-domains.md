# Custom Domains for Tenants: DNS and SSL - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/saas/custom-domains

---

SaaS Platform

# Custom Domains

Let the schedules on your deployment use their own domain names, with automatic SSL provisioning via DigitalOcean App Platform.

Feature overview: [White-label ticketing platform](https://eventschedule.com/saas)

[Enterprise
 - Requires the Enterprise plan](https://eventschedule.com/pricing "Requires the Enterprise plan")

Docs
/
Custom Domains

On this page

## Overview Enterprise - Requires the Enterprise plan

A custom domain lets a schedule be reached at its owner's own address (for example `events.example.com`) instead of the default `subdomain.yourdomain.com` URL.

The work is split in two. Each owner sets the domain on their own schedule's edit page. You configure DigitalOcean once, in `.env`, and afterwards follow every domain on your platform at **Manage → Domains** in the platform admin panel (`/admin/domains`).

Enterprise only

Custom domains are an Enterprise feature. On a schedule that is not on Enterprise, the Redirect and Direct options render disabled with an upgrade prompt, and the server re-applies the schedule's existing values on save, so a hand-crafted POST cannot set a domain either. A schedule that later drops off Enterprise keeps the domain it already has: only *changing* it is blocked. [Remove it from the platform admin panel](#admin-management) if you need it gone.

Owners choose the mode themselves. On the schedule's edit page (**Edit Schedule**), the **Settings** tab opens with the **Schedule URL**. Its **Edit** link reveals a **Mode** chooser with three options, and for the two custom modes a **Custom Domain** field, which takes the full address with `https://`, as its placeholder `https://events.example.com` shows. Nothing changes until the form is saved. The owner's side of this is in [Creating Schedules](docs__creating-schedules.md#custom-domain).

| Mode | What visitors get | Canonical URL | Requires |
| --- | --- | --- | --- |
| **Subdomain** | The default. The schedule is served at `subdomain.yourdomain.com` and no custom domain is stored. | The subdomain | Nothing |
| **Redirect** | The owner points their domain at Cloudflare, which 301 redirects every request to the schedule URL. | The subdomain | Enterprise |
| **Direct** | The schedule is served on the owner's domain itself, over HTTPS, with the domain kept in the address bar. | The custom domain once active, unless the owner keeps the subdomain as the [main address](#main-address) | Enterprise plus DigitalOcean App Platform |

### What changes on a direct custom domain

Direct mode is not only a different address. Once the domain is active, several parts of the product behave differently on that host:

| Part of the product | On an active direct domain |
| --- | --- |
| Canonical URL and sitemap | The custom domain becomes the SEO canonical for that schedule's guest portal, and the schedule serves its own `/sitemap.xml` on that host. Your platform's global sitemap never lists custom-domain URLs. An owner can instead keep the subdomain as the [main address](#main-address): the custom domain still serves every page, while the canonical, structured data, emails and shared links name the subdomain, and its pages are listed in the global sitemap. In Redirect mode the subdomain stays canonical, because the custom domain only 301s away from itself. |
| Ads | Never served. If you run AdSense on free schedules, ad slots are suppressed on any custom domain, whatever the schedule's plan. Serving ads on a domain you do not own would breach AdSense policy. |
| Accommodation map | Only runs on the owner's own affiliate ID. Your instance-wide Stay22 fallback ID is never used on a customer's custom domain, so the map does not render for a schedule that has not set its own ID. |
| Embedded Google map | Omitted on event pages served from a custom domain, so your Maps API key is never handed out on a host you do not control. The address and its link are still shown. |
| Emails | Send readers to the main address. Event links in newsletters, in the automatic new-event digest to confirmed subscribers, and in interest-list and waitlist emails land on the custom domain, or on the subdomain when the owner kept that as the main address. Ticket links in purchase confirmations stay on your app subdomain. |
| Calendar feed and short links | Answer on it. The live calendar feed at `/feed/ical` works on the custom domain and links its events there, and so does the short address each of the schedule's social and website links gets, such as `/instagram`. |
| Sign-in, admin and follow links | Stay on the app subdomain. Only the schedule's own URLs are rewritten to the custom domain, so the session cookie keeps working. |

## Prerequisites

### Both modes

- **Hosted mode** - your deployment must run with `IS_HOSTED=true`. The mode chooser is only rendered in hosted mode, and the request-time domain lookup is skipped entirely otherwise. A selfhosted install is path-routed on the one domain you point at it, so it has nothing to configure here.
- **An Enterprise schedule** - the plan gate applies per schedule, not per deployment.

### Direct mode only

- **DigitalOcean App Platform** - your app must be deployed on DigitalOcean App Platform, which is what provisions and renews the SSL certificate for each customer domain.
- **DO API token** - a DigitalOcean personal access token scoped to **read** and **update** on the **app** resource. Adding and removing a domain is a read of the current app spec followed by a write of the amended one.
- **App ID** - the ID of your DigitalOcean App Platform app.
- **App hostname** - the app's `.ondigitalocean.app` starter domain, which is the CNAME target customers point at.

Redirect mode needs no server-side configuration at all. Owners set up their own Cloudflare redirect, and nothing is registered with DigitalOcean. It is still Enterprise-gated, so it is not a way around the plan.

Direct mode is hidden until it is configured

The **Direct** option only appears in the mode chooser when `DO_APP_HOSTNAME` is set, because the CNAME instructions have nothing to show without it. Until you set it, Enterprise schedules see only Subdomain and Redirect.

## Environment Setup

Add the following variables to your `.env` file:

.env
Copy

```
DO_API_TOKEN=your_digitalocean_api_token
DO_APP_ID=your_app_id
DO_APP_HOSTNAME=your-app.ondigitalocean.app
```

The three values are read once into the `digitalocean` block of `config/services.php`, and they do different jobs:

| Variable | Where to find it | What it decides |
| --- | --- | --- |
| `DO_API_TOKEN` | Your DigitalOcean personal access token. Generate one at `cloud.digitalocean.com/account/api/tokens`. Select **Custom Scopes**, then expand the **app** resource and check **read** and **update**. | With `DO_APP_ID`, whether provisioning runs at all |
| `DO_APP_ID` | Your App Platform app ID. Find it in the DigitalOcean dashboard URL: `cloud.digitalocean.com/apps/YOUR_APP_ID`. | Which app the domains are added to |
| `DO_APP_HOSTNAME` | The starter domain of your DigitalOcean app. Find it under **Settings** > **Domains**, it ends in `.ondigitalocean.app`. | Whether Direct mode is offered to owners, and the CNAME target their instructions show |

If the token or the app ID is missing, nothing is registered with DigitalOcean: a Direct domain is saved with no status and never goes live, re-provisioning refuses to run, and the status sync skips itself. Once you add them, the next sync marks such a domain **Setup failed**, and **Re-provision** registers it.

If you have run `php artisan config:cache`, re-run it (or `php artisan config:clear`) after editing `.env` so the new values take effect.

## How It Works

### Redirect Mode

The owner stores their domain and sets up a Cloudflare page rule that 301 redirects it to their `subdomain.yourdomain.com` URL. Nothing is registered with DigitalOcean, no certificate is issued by you, and no status is tracked, so the Status column in the platform admin panel stays empty for these schedules. The subdomain remains the canonical URL, since the custom domain never renders a page itself.

### Direct Mode

When an owner saves their domain in Direct mode:

1. The domain is normalized to `https://host`, its hostname is stored separately for fast lookup, and it is rejected if another schedule already claims it, if the hostname contains `eventschedule.com`, or if it is your own base domain or one of its subdomains.
2. The hostname is added to your DigitalOcean App Platform app spec over the API, and the schedule's domain status is set to **pending** (or **failed** if the API call did not succeed). DigitalOcean has no call for a single domain, so the app reads the whole spec and writes it back, and every such write starts a new deployment of your app.
3. The owner adds a CNAME record pointing at your app's hostname.
4. DigitalOcean verifies the record and provisions an SSL certificate.
5. A scheduled sync notices the domain has gone live and flips the status to **active**.
6. From then on, requests arriving on the custom domain are matched to the schedule and served, and the schedule's own subdomain URLs in the response are rewritten to the custom domain.

Only the schedule's own URLs are rewritten

The rewrite deliberately leaves app URLs such as login, the admin portal and the follow flow pointing at `app.yourdomain.com`. Those pages need the session cookie that is scoped to your base domain, so moving them onto the customer's host would sign the visitor out. Redirects issued during the structured guest-submit flow opt out of the rewrite for the same reason.

### Main address

In Direct mode the domain editor shows a **Main address** choice under the DNS steps: the owner's domain (the default) or the schedule's subdomain. Both keep serving every page once the domain is active. The choice decides which address the app names:

- **Your domain** - the custom domain is the canonical URL, the schedule's events are left out of your platform's global sitemap, and the custom host serves its own `/sitemap.xml`.
- **Your subdomain** - the canonical, structured data, emails, shared links, the QR code and the address at the top of the schedule's settings name the subdomain, and the schedule's pages are listed in the global sitemap. On the custom host, `/sitemap.xml` answers page-not-found and `robots.txt` points at the global sitemap. The settings page names the custom domain on an **Also at** line under the address.

Until the domain is active the subdomain is the address whichever is chosen. The **Manage → Domains** list does not show the choice. The owner's side is in [Creating Schedules](docs__creating-schedules.md#custom-domain).

### Domain status lifecycle

Direct-mode domains carry a status. Owners and admins see a coloured badge; the underlying value is what filters and the middleware key off.

| Stored value | Badge label | Meaning |
| --- | --- | --- |
| `pending` | Setting up... | Registered with DigitalOcean, waiting on DNS and the certificate. The domain does not serve the schedule yet. |
| `active` | Active | Live. This is the only state in which the custom domain serves the schedule, and becomes its canonical URL unless the owner keeps the subdomain as the main address. |
| `failed` | Setup failed | The API call failed, or the domain is no longer present in the app spec. Re-provisioning from the platform admin panel puts it back to pending. |

The transition out of pending is done by a scheduled command that runs **every five minutes** on hosted deployments:

bash
Copy

```
php artisan app:sync-domain-statuses
```

It reads every domain on your app from the DigitalOcean API and, for each schedule still pending, marks it active once DigitalOcean reports the domain as live, or failed if the domain is no longer on the app at all. If the API returns nothing at all it stops rather than marking everything failed, so an API outage cannot take working domains offline. It needs the scheduler running, whichever way you drive it (see [Scheduler and queue](docs__saas.md#scheduler)).

How a request on a custom domain is matched

Incoming requests are handled by the `ResolveCustomDomain` middleware, which runs before everything else. It looks the host up against active direct-mode schedules, caches the result for 10 minutes, and rewrites the HTTP Host header to the schedule's subdomain so the existing subdomain routes match with no route changes. It also nulls the session cookie domain so the cookie is scoped to the customer's origin, then rewrites the schedule's subdomain URLs to the custom domain in HTML bodies, JSON bodies and redirect `Location` headers. An unknown host gets a 404.

## DNS Setup for Customers

When an owner selects Direct mode and types a domain, the schedule's edit page shows these steps and the exact hostname to copy. They need to create one CNAME record at their domain registrar:

| Record Type | Name | Value |
| --- | --- | --- |
| CNAME | `@` or subdomain (e.g., `events`) | Your `DO_APP_HOSTNAME` value |

1. Log in to the domain registrar (e.g. GoDaddy, Namecheap, Cloudflare).
2. Open the DNS settings for the domain.
3. Add the CNAME record above.
4. Save, and wait for DNS to propagate. SSL is provisioned automatically once DigitalOcean can resolve the record.

DNS propagation can take up to 48 hours, though it is usually much faster. Within five minutes of DigitalOcean reporting the domain live, the **Setting up...** badge beside the **Schedule URL** goes away, the domain editor under its **Edit** link shows **Active**, and the same change shows in the platform admin panel's domains list.

Apex domains need CNAME flattening

A plain CNAME is not valid at the apex of a zone. If the owner wants `example.com` rather than `events.example.com`, their DNS provider has to support CNAME flattening, ALIAS or ANAME records (Cloudflare and several registrars do). A subdomain such as `events` avoids the problem entirely and is the easier recommendation.

## Admin Management

Every schedule with a custom domain, in either mode, is listed at **Manage** → **Domains** in the platform admin panel (`/admin/domains`): the **Manage** tab, then **Domains** in the row of pages under it. The page is hosted-only and admin-only.

### Reading the page

- **Summary cards** - **Total** (every schedule with a custom domain), **Direct**, **Active** and **Setting up...** The last three count direct-mode schedules only.
- **Search and filters** - search by schedule name, subdomain or domain, and narrow the list with the **Mode** and **Status** selects.
- **Domain table** - **Schedule**, **Custom Domain**, **Mode** and **Status**, 20 rows to a page, with each row's actions at its end. Only a direct-mode domain has anything in the Status column: the status badge, DigitalOcean's own reason under it when the setup failed, and a **DO Status** line. That line is the live phase read straight from the DigitalOcean API as the page loads, so it is the one to trust when the stored status looks wrong. It is missing if the API is unreachable or unconfigured.

### Actions

- **Re-provision** - writes the domain into your DigitalOcean app spec if it is missing (one write, reported as already registered when there was nothing to add) and resets the status to pending. Use it when SSL provisioning gets stuck or after fixing a bad DNS record. Direct mode only. It asks first, because a write to the app spec briefly redeploys your app.
- **Remove** - removes the domain from DigitalOcean and clears the schedule's domain, mode, host and status, sending it back to its subdomain URL. This is also how you take a domain off a schedule that has dropped off Enterprise. If DigitalOcean refuses the removal, nothing is cleared: the domain is marked **Setup failed** and the error is shown.

Both actions are written to the audit log, and both clear the middleware's cached lookup, so the change takes effect on the next request rather than after 10 minutes.

A schedule's owner deleting it outright also removes its domain from DigitalOcean. Marking a schedule deleted from **Manage** → **Schedules** does not: the domain stops resolving but stays connected to that schedule until you remove it here.

You do not have to go looking

Domains sitting in **Setting up...** or **Setup failed** raise a badge on the **Manage** tab and on its **Domains** entry, and an entry under **Needs attention** on the admin dashboard, each linking straight to the filtered list.

## Troubleshooting

#### Domain stuck on "Setting up..."

Check the DO Status line under the status first. If there is none the domain was never registered on your app, and by far the most common reason is DNS: DigitalOcean will not accept a domain whose CNAME does not resolve to your app yet. Verify the record before anything else, remembering propagation can take up to 48 hours. A missing line can also mean the API credentials are missing or wrong. If it shows a phase but the stored status has not moved, confirm your scheduler is running, since only `app:sync-domain-statuses` promotes a domain to active.

#### SSL certificate not provisioning

DigitalOcean requires the CNAME to be resolvable before issuing an SSL certificate. Ensure there are no conflicting A or AAAA records for the domain. If using Cloudflare DNS, disable the proxy (orange cloud) for the CNAME record, otherwise DigitalOcean sees Cloudflare's addresses instead of your app.

#### Domain shows "Setup failed"

Either the API call failed at save time, or the sync no longer finds the domain on your app. DigitalOcean's own reason is shown directly under the Setup failed badge in the platform admin panel, so start there. Common causes: a CNAME that does not resolve yet, an invalid hostname, the domain already registered against another app, or an API token missing the **update** scope. Fix the cause, then re-provision. If re-provisioning reports the domain is already registered, the entry is present and correct on your app, so the remaining fix is the DNS record or removing the domain and adding it back.

#### 404 on the custom domain

An unknown host is a 404 by design. The middleware only serves a schedule whose mode is direct *and* whose status is active, so a pending or redirect-mode domain 404s here, and so does the domain of a schedule that has been deleted. Lookups are cached for 10 minutes, so a status that has only just changed can take that long to take effect unless it was changed from the platform admin panel, which clears the cache.

#### "This custom domain is already in use by another schedule"

A hostname can belong to one schedule only, and the comparison is on the hostname, so `http://` and `https://` forms of the same address collide. Find the other schedule in the admin domains list and remove the domain there first. Separately, any hostname containing `eventschedule.com`, and your own base domain or any subdomain of it, is refused with "*that hostname* is reserved and cannot be used as a custom domain". The message names the hostname that was refused, never eventschedule.com, so it reads correctly on your own platform.

#### Owner-only actions return 405

Owner and admin actions live on the app subdomain, not on the guest host. If you have customised a guest page, any owner-facing link or form there must be built with `app_url()` around a relative route. A bare `route()` posts to the guest host, gets 302 redirected to the app subdomain, and the redirect downgrades the POST to a GET, which the POST-only route answers with 405.

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/saas/custom-domains.blade.php)
