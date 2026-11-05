# Web accessibility (selfhost) - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/selfhost/accessibility

---

Selfhost

# Web accessibility

Event Schedule ships a skip link on every page and an opt-in accessibility panel for public schedules. When you selfhost on your own domain, the declaration that covers those pages is yours to write and yours to publish.

Docs
/
Web accessibility

On this page

## Overview

Two accessibility features ship in every install: a skip link on every page, and an accessibility panel you can switch on per schedule. Everything else - the legal declaration for your hostname, the audit behind it, and the remediation work - belongs to you as the operator, in the same way the privacy policy on your domain does.

### The skip link

Every page starts with a **Skip to main content** link that stays visually hidden until it takes keyboard focus, then jumps to the `#main-content` landmark. The admin portal, the sign-in and registration screens and the public schedule pages all render it, and it is translated with the rest of the interface. Nothing to configure.

### The accessibility panel Free - Available on the Free plan

A floating **Accessibility options** button in the bottom corner of a public schedule page opens a small panel of display adjustments. It is **off by default on every schedule** and carries no plan gate, so it is available on Free schedules and on every selfhosted install.

| Control | Choices | What it changes |
| --- | --- | --- |
| Text size | Default, Larger, Largest | Sets the root text size to 100%, 106.25% or 112.5%, so the whole page scales instead of one block of copy reflowing on its own. |
| High contrast | On or off | Lays a fixed, full-viewport `backdrop-filter: contrast(1.08)` over the page. It is an overlay rather than a filter on the page itself, because a filtered ancestor becomes the containing block for its `position: fixed` descendants and would drop them to the bottom of the document. |
| Underline links | On or off | Underlines links so they are never signalled by colour alone. Pill-shaped controls are left as they are, because an underline reads as a mistake there. |
| Reduce motion | On or off | Clamps every animation and transition to 0.01ms and turns smooth scrolling off. |
| Reset all | Action | Returns all four controls to their defaults. |
| Hide widget | Action, signed-in visitors only | Hides the launcher on that browser after a confirmation. It comes back from the **Accessibility** row on the **Profile Information** tab of the visitor's own [Settings](docs__account-settings.md#accessibility), a row that is only there once the widget has been hidden. Its one button is **Show accessibility widget**. |

Where the choices are stored

The panel writes to the visitor's browser storage, never to your database, so a preference follows one browser on one device and does not travel with an account. Nothing here needs a cookie banner entry beyond what your own policy already says about local storage.

### Turn the panel on for a schedule

1. Open the schedule and go to its edit page
2. Choose the **Settings** tab, then open its **Advanced** row
3. Turn on **Show Accessibility Widget**
4. Save. The launcher appears in the bottom corner of that schedule's public pages

The setting is per schedule, so repeat it for each one you publish. See [Advanced settings](docs__creating-schedules.md#settings-advanced) in the schedule guide. The panel is a guest-portal feature: the admin portal gets the skip link but not the panel, so an operator auditing their own back office should test it with the keyboard rather than with these controls.

## Your declaration on your domain

The [accessibility statement on eventschedule.com](https://eventschedule.com/accessibility) applies to Event Schedule's own marketing and product URLs. It does not cover **your** hostname, your configuration, or the events your users publish. If you offer services to the public in a jurisdiction with web accessibility rules (for example Israel, the EU, or the UK), work with qualified counsel and publish a declaration that matches your deployment, your languages, and your contact channels.

### Your install does not serve /accessibility

That declaration page is registered only on eventschedule.com. On a selfhosted install the path is not a marketing page at all, so you cannot point people at `/accessibility` on your own domain and expect the shipped text to appear. The [Legal Pages](docs__selfhost__admin.md#system-legal-pages) screen of the admin panel does not fill the gap either: it replaces the privacy policy, the terms of service and the cookie policy, and has no card for an accessibility statement. Publish your statement wherever suits you, on your main website for example, and link to it from a schedule's page, or from the footer code you add to every public page at [Settings](docs__selfhost__admin.md#settings-header-footer).

### Where the app links to a statement

Two places link to an accessibility statement, and both build the address from your marketing URL setting: the **Accessibility statement** link at the bottom of the accessibility panel, and the **Accessibility** link under the app's plain error pages (403, 419, 429, 500, 503 and the like). Until you change that setting, both send your visitors to Event Schedule's statement rather than yours. See [Environment variables](#configuration) below.

## Environment variables

Seven optional settings live in `config/accessibility.php`. Each one reads an environment variable, so you can override it in `.env` without editing the file.

| Variable | Default | What it sets |
| --- | --- | --- |
| `ACCESSIBILITY_CONTACT_EMAIL` | `[email protected]` | The inbox the declaration tells people to write to. Set it to an address you actually watch. |
| `ACCESSIBILITY_WCAG_TARGET_LABEL` | `WCAG 2.1 Level AA` | The standard named in the declaration. It is a label only: changing it does not change the product, so it should match what your review actually concluded. |
| `ACCESSIBILITY_REFERENCE_IS_5568` | `true` | Adds a short note about Israeli Standard 5568 to the commitment clause. Setting it to `false` drops that note only: the main commitment sentence names the standard either way, so edit the translation string if you need it gone entirely. |
| `ACCESSIBILITY_RESPONSE_SLA_BUSINESS_DAYS` | `10` | The first-response target, in business days, printed in the feedback clause. |
| `ACCESSIBILITY_LAST_REVIEWED` | `2026-09-04` | The "last reviewed" date, as `YYYY-MM-DD`. Bump it whenever you re-check the deployment. |
| `ACCESSIBILITY_PUBLIC_PAGES_MEASURED` | `153` | How many public pages the conformance status says were measured. The shipped figure describes Event Schedule's own sweep of eventschedule.com, so change it only when you have measured your own pages and reuse that clause. |
| `ACCESSIBILITY_PUBLIC_MEASUREMENT_DATE` | `2026-09-04` | When that measurement was taken, as `YYYY-MM-DD`. |

These seven keys feed one view

They are read by the shipped declaration page, which your install does not route. Keeping your values here is still worth doing, because the translated clauses take `:email`, `:sla`, `:wcag_target` and `:date` placeholders, and the measured-coverage clause takes `:pages` and `:total` as well, so a statement page of your own can reuse both the strings and the settings instead of hard-coding them. `:total` is not a setting: the declaration counts it from the list of dated public pages.

### Point the panel's statement link at your site

The **Accessibility statement** link inside the panel, and the one under the error pages, are built from `APP_MARKETING_URL`, which defaults to `https://eventschedule.com`. Set it to your own site and both resolve against your domain instead:

.env
Copy

```
APP_MARKETING_URL=https://example.com
```

That variable is shared with the rest of the product's outbound marketing links, so change it only if you are ready for all of them to point at your site, and make sure the resulting `/accessibility` path there actually serves your statement. The links into this guide move with it: the **Learn more** links in the app (under Settings > Payment Methods, for example) would open `/docs/...` on your site, which has no such pages.

## Audit backlog (internal)

A declaration is only honest if something behind it is being checked. Keep a short internal list of the journeys that matter on your install and re-walk them on a schedule you can keep:

1. Sign in and registration
2. The dashboard and the schedule editor
3. A public schedule page in each layout you publish
4. An event page, including the follow and request flows
5. Ticket checkout, if you sell tickets
6. The admin panel, if your operators use it

On each one, check keyboard-only navigation, focus order and visible focus, form error messages, and text contrast in both light and dark mode. When you close a gap, update your published declaration and bump `ACCESSIBILITY_LAST_REVIEWED`.

### Limitations worth naming

The hosted declaration names its known gaps rather than claiming full conformance, and the same code runs on your install, so these are a reasonable starting point for your own list:

- Public and admin calendar views may not yet expose ideal keyboard semantics for every view mode.
- Some legacy menus and dialogs may need improved focus management until migrated to newer patterns.
- Organizer-provided embeds, images without alternative text, and linked third-party sites may not be accessible.

The third one is the one selfhost operators tend to underestimate. Descriptions, images, embeds and outbound links on your site are written by your users, not by you, and no setting makes them accessible. If that matters for your obligations, the lever is editorial: tell schedule owners what you expect, and use the request approval flow to check submissions before they go live.

## Starter template (adapt with counsel)

Not legal advice

Replace every bracketed field, and have the result reviewed by qualified counsel before you publish it.

text
Copy

```
[Organization name] accessibility statement

Scope: [your domain and services]

We are committed to improving access for people with disabilities. We aim to align with [WCAG 2.1 AA / other target after legal review].

Conformance: [partial / full] as of [date]. Known limitations: [list].

Third parties: [payment provider, analytics, maps, user content].

Feedback: contact [role] at [email]. We aim to respond within [N] business days.

Last updated: [date]
```

Operators who serve users in regulated markets may need their own accessibility declaration on their own domain.

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/selfhost/accessibility.blade.php)
