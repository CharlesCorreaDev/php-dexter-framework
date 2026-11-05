# Federation on a White-Label SaaS - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/saas/federation

---

SaaS Platform

# Federation

Share your customers' public events with the eventschedule.com listings and send the discovery traffic back to your platform. You turn the network on for the whole install, eventschedule.com approves it once, and each customer's schedule then chooses whether to be listed.

Feature overview: [White-label ticketing platform](https://eventschedule.com/saas)

Docs
/
Federation

On this page

## Overview

Federation is an optional network that shares your public events with the listings on
[eventschedule.com](https://eventschedule.com/browse).
Every listing links straight back to the event on your own site, so the discovery traffic
comes to you rather than staying somewhere else.

It is available on any Event Schedule install other than eventschedule.com itself, whether
you run a single schedule for yourself or a multi-tenant SaaS for customers. It is free,
off by default, and can be switched off again at any time.

Two switches decide what is shared, and both have to say yes:

| Switch | Where it is, and who sets it |
| --- | --- |
| The install | **Admin** → **System** → **Settings**, in the **Event Schedule network** card. An administrator sets it once, and eventschedule.com then reviews the install, also once |
| Each schedule | **Edit Schedule** → **Settings** → **Advanced**, under **List this schedule on the network**, or the one-click prompt on the dashboard. The schedule's owner sets it, or anyone who can edit the schedule |

What is shared is public, upcoming events, online and in person. Events set to Draft,
Internal or Unlisted are never sent, and neither are cancelled or password-protected ones,
or events from schedules that have opted out or have not opted in. The full list of
conditions is under [Which events are listed](#what-qualifies).

## Turning it on

1. Sign in as an administrator and open **Admin → System → Settings**. The switch is in the **Event Schedule network** card.
2. Switch on **Share events with the network**.
3. Add a **Contact email**. It is shown to the team at eventschedule.com who review your
   install, and used to email you their decision and the steps to get listed. It is never
   published. It starts filled in with your own address.
4. Under **Also list these schedules**, untick any of your own schedules that
   should stay off the network. It lists the schedules you own that are still *Not decided
   yet*, already ticked, each with the number of its upcoming public events that would be
   shared. Once sharing is on, the boxes start unticked, so a later save lists only what you
   tick.
5. Click **Save**.

An administrator who has not switched it on is also offered it: once the install has a
public upcoming event that would be shared, a suggestion appears on the dashboard and on a
schedule's page, and its **Open settings** button goes straight to the card.
**Dismiss** hides the suggestion for that administrator for good.

### What saving does

Saving registers your install with the network and puts it in a review queue. Nothing is
published until the team at eventschedule.com approves it, which is a one-time step for the
whole install. Events from the schedules you listed are sent ahead of that, so the reviewer
can see them, and go live as soon as you are approved. The **Connection** line
at the top of the card shows where you stand, beside the time of the last sync:

| Status | What it means |
| --- | --- |
| Pending | Waiting for review at eventschedule.com. Events from listed schedules are already being sent, and go live once you are approved |
| Approved | Your events are being listed. The card says how many have been sent, with a link to **See your listings on eventschedule.com** |
| Suspended | Your events are hidden from the network, and nobody on the install is asked to list a schedule |
| Not connected | The network has not answered yet. A retry is due on the next hourly sync |

The same status, the last sync, the number of events shared and the number of schedules
still not decided are on the **Federation** card of
**Admin → Dashboard**.

### The preview on the card

Under the switch the card lists exactly what would go out, so you can see what leaves your
install rather than having to trust a description of it: first
**Schedules that will be listed**, then the events under
**What will be shared**. Once sharing is on, each event carries a mark, so an
event that is not on the network yet says why:

| Mark | What it means |
| --- | --- |
| Sent | Delivered to the network |
| Next sync | Goes out on the next hourly run |
| Needs an image | The event has no picture, so it cannot be listed. It goes out on the next run once it has one |
| Not accepted | The network refused it, and it has not changed since. Editing the event sends it again |

Two lines under the list explain a preview that is shorter than you expected: how many
schedules are held back until their email or phone is verified, and how many schedules
owned by other people are not listed yet.

### What the network emails you

Once your install is approved you get a welcome email with the steps to get your events
listed. A suspension, or approval again after one, gets a short email instead. If you add or
change the contact email later, saving the card sends the new address to the network, so it
can still reach you; if the network cannot be reached at that moment, the next hourly sync
sends it.

## Per-schedule control

Once the network is on for the install, each schedule gets its own setting,
**List this schedule on the network**, under
**Edit Schedule → Settings → Advanced**. It has three choices:

| Choice | What it does |
| --- | --- |
| Not decided yet | Where every schedule starts. Its events stay off the network, but it does not hold back an event it shares with a listed schedule |
| Listed on the network | The schedule's public events are shared, together with its name and the address of its public page |
| Not listed | Nothing from this schedule is shared, and every event it is attached to stays off the network, whoever else is on it |

The setting only appears after you have enabled the network for the whole install, so on a
multi-tenant deployment your customers never see an option you have not opted into.

### Who decides

A schedule is opted in when its owner, or anyone who can edit it, chooses *Listed on the
network*, so a customer is never carried onto the network by your decision alone. That
includes schedules that existed before the feature: an update reset them all to *Not
decided yet* rather than enrolling them silently.

The checklist on the settings page and the dashboard prompt only ever offer schedules you
own. The settings page lists your own schedules still waiting on that decision, with a
checkbox each, and counts everyone else's, which is the usual reason the preview is shorter
than you expected.

### The prompt on the dashboard

Nobody has to go looking for the setting. Once the network is on, a schedule owner is asked
on their dashboard, as soon as one of their schedules has an upcoming public event with an
image:

- **List on the network** lists the schedules they tick. Every schedule it would list is named first, up to 20 at a time.
- The same prompt appears on a schedule's own page, for that one schedule and for anyone who can edit it.
- **Dismiss** leaves the schedules at *Not decided yet* and is remembered per schedule, so a schedule created later is still asked.
- The prompt is not shown to someone who has chosen **Turn off suggestions**, or while the network has the install suspended.
- A schedule that is listed shows **Listed on the network** on its page, which links straight to the setting.

Listing says what happens next: on an approved install the events appear on eventschedule.com
within a couple of hours, on a pending one once the install is approved, and a schedule
with no verified email or phone stays off the network until it has one.

### Events with more than one schedule

On an event with more than one schedule attached, a talent and a venue for instance, any one
of them choosing *Not listed* is enough to keep the event off the network: a listing names the venue,
carries its address and links to an event page that names everyone on the bill, so nobody
is published on someone else's say-so.

The pages the app creates for performers and venues that are not on your install take no
part in that decision. With no owner to opt in, they never list an event themselves, and
they do not count as opting out either, so naming an act that has not signed up does not
keep an event off the network.

## What a listing looks like

### Which events are listed

An event is shared when all of these hold:

- It is public and upcoming. A recurring event counts, and so does an event of a day or more that has not ended yet.
- It is not a Draft, Internal or Unlisted event, not cancelled, and has no password. An event a calendar sync brought in as a draft is shared once it is published.
- It is accepted on at least one schedule that is *Listed on the network* and has a verified email address or phone number.
- No schedule attached to it has chosen *Not listed*.
- It has a picture: the event flyer, or failing that the profile image of its talent or its venue. An event without one is marked *Needs an image* in the settings preview, and goes out on the next run once it has one. This matches the bar applied to eventschedule.com's own events.
- Its name is not a placeholder such as "Test event".

### On the browse page

Listings appear in their own section on the eventschedule.com browse page, badged with your
site's address and filterable by country and language. Clicking one goes straight to the
event on your site: there is no copy of the event page on eventschedule.com, and the link is
a normal followable link rather than a tracking redirect. It points at the event's address on
your install itself, never at a custom domain a schedule may have. eventschedule.com counts
how often a listing is clicked, without changing the link.

Recurring events are listed with their next three dates within 120 days, and times are shown in the event's own
timezone rather than the visitor's.

## Keeping it in sync

Sharing runs hourly on your existing scheduler, so it needs no extra setup beyond the cron
entry Event Schedule already requires. New events and edits are sent within the hour, and a
new listing shows once the network has copied its picture, so allow a couple of hours. An
event that stops qualifying, because it went back to Draft, was made Internal or Unlisted,
was cancelled, or the schedule listing it opted out or was deleted, is removed from the
listings on the next run.

You can also run it by hand:

Terminal
Copy

```
php artisan federation:push
```

The network keeps up to 5,000 listings for one install, and a first sync on an install with
many events sends them 500 an hour until it has caught up.

Schedules must be verified

Only schedules with a verified email address
or phone number are shared, matching the rule eventschedule.com applies to its own listings.
On a multi-tenant install this is the usual reason a particular customer's events do not
appear. The settings page shows how many schedules are being held back for this reason.

### When a sync does not complete

The settings page records the last successful sync, and shows a notice in the card if the
most recent attempt did not complete:

| Notice | What to do |
| --- | --- |
| The network could not be reached | Nothing. It retries on the next hourly run. If it stays, check that your server can make outbound HTTPS requests to eventschedule.com |
| The network did not recognise this install | Nothing at first: the next run registers the install again, and it goes back into review before its events are listed. This happens, for example, when an install was removed while it was waiting for review. If the notice stays, contact the eventschedule.com team |
| This install has reached the network listing limit | The network already holds 5,000 listings from you. New events are listed as older ones pass |
| The network is not accepting listings right now | Nothing. It retries on the next hourly run |
| The network could not read the last batch | Check for an app update: the install is likely sending a format the network no longer reads |
| The last sync did not complete | Nothing. It retries on the next hourly run |

If your install's address (`APP_URL`) changes, the network
does not take the new address on trust. A listing's link has to be on the address the
install registered with, so events sent from the new one are refused, and show as
*Not accepted*, until the team at eventschedule.com has confirmed the change.
Registering again from the new address, with
`php artisan federation:push --register`, puts an
approved install back into review first.

## What is shared, and what is not

Only information that is already public on your event pages is sent. Rather than describe it,
here is the complete list, field by field, and where each one ends up.

| What is sent | When | Where it is visible |
| --- | --- | --- |
| Event name | Every listing | On the listing card |
| Next date, time and timezone | Every listing | On the listing card, in the event's own timezone |
| Link back to the event on your site | Every listing | The card's link. This is the whole point of federation |
| Picture | Every listing (an event without one is not listed) | Copied and stored by eventschedule.com, shown on the card |
| Venue name and city | When the event has a venue | The card's location line |
| Short description, end time, further dates | Every listing | Sent, but not currently shown anywhere |
| Street address, state, postal code, coordinates, country | When the event has a venue | Not shown. The country drives the country filter |
| Language | Every listing | Not shown. Drives the language filter |
| Whether the event is online | Every listing | Decides the online label. The joining link itself is never sent |
| Schedule name, and the address of its public page | Every listing | Shown to the administrator who reviews your install, so they can see what they are approving |
| Your site address | Every request | The source badge on every card |
| Install name and contact email | When you join, when you change the contact email, and when the install reconnects | Shown to the reviewing administrator only. Never published |
| Version number | Every request | Shown to the reviewing administrator only, and used to pick the setup steps the network emails you. Never published |
| Your admin language | When you join, and when you change the contact email | Not shown. Decides the language of the emails the network sends you |
| Identifiers: a random id for your install, and an id for each event | Every request | Not shown. They tell installs apart and match an update or a removal to its listing |
| A signing key your install generates | When you join, and when the install reconnects | Not shown. Every later request is signed with it, so nobody else can send listings in your name |

No attendee data, ticket data, sales, contact details or private fields ever leave your
install. Neither does the joining link for an online event: the network is told only that
there is one, because a label is all it has ever done with it.

Pictures are copied and stored by eventschedule.com rather than loaded from your server, so
visitors browsing the listings never make requests to your site until they click through.

### Turning it off

Turning the setting off stops sharing immediately and takes your existing listings down with
it: switching off tells the network to drop everything it holds from your install, there and
then. If it cannot be reached at that moment, the request is retried on the next hourly run
until it lands, unless you switch sharing back on first. Switching it back on later does not
start a new review: an install that was approved stays approved, and events from listed
schedules return within a couple of hours.

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/saas/federation.blade.php)
