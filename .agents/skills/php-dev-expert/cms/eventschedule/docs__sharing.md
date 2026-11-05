# Sharing Your Schedule: Links, Embeds, Feeds - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/sharing

---

User Guide

# Sharing Your Schedule

Reach your audience wherever they are. Embed your schedule on your website, share it on social media, and let people follow you, sign up by email, or subscribe to your calendar.

Feature overview: [Embed event calendar on website](https://eventschedule.com/features/embed-calendar)

Docs
/
Sharing Your Schedule

On this page

## Your Schedule URL

Every schedule has a public page with its own address. It is how people find and view your events, and everything else on this page (embeds, followers, feeds, the QR code) starts from it.

[![A public schedule page, as a visitor sees it](https://eventschedule.com/images/docs/sharing--guest-portal.png)
Open full size](https://eventschedule.com/images/docs/sharing--guest-portal.png)

[![A public schedule page, as a visitor sees it](https://eventschedule.com/images/docs/sharing--guest-portal-dark.png)
Open full size](https://eventschedule.com/images/docs/sharing--guest-portal-dark.png)

The address has the form `https://your-schedule-name.eventschedule.com`. On eventschedule.com the schedule's name comes in front of the site's address; on a selfhosted install it follows it.

You do not have to work it out. In the admin panel the address is shown under the schedule's name, at the top of every tab of that schedule, with two links beside it: **Copy** puts the full address on your clipboard, and **View** opens the page in a new tab once the schedule's email address has been confirmed. Paste it into your website or bio, your social profiles, an email signature, or printed material.

Every event also has its own permanent URL underneath the schedule URL, and every sub-schedule has one too, so you can point people at one strand of your programme instead of the whole calendar.

Your own domain 

Enterprise
 - Requires the Enterprise plan

With an Enterprise plan the schedule can live on your own domain, such as `events.yourdomain.com`. Set it up under [Edit Schedule → Settings](docs__creating-schedules.md#custom-domain). Once the domain is live it is the address shown under the schedule's name, and the one your [QR code](#qr-code), follow link, emails and shared links use, unless you chose to keep your subdomain as the **Main address**. Then the subdomain is the address you hand out, and the domain keeps working beside it.

## Embedding on Your Website

Add your schedule directly to your website with an iframe. It loads live from Event Schedule, so your events update on your site without any extra work. Embedding the calendar is available on every plan, including Free.

See our [embed calendar feature page](https://eventschedule.com/features/embed-calendar) for a full overview and demo.

### Getting the Embed Code

1. Open your schedule in the admin portal. Any of its tabs will do
2. Open the **Actions** menu beside the schedule's name and choose **Embed Schedule**. A dialog opens over the page
3. Leave **Widget** on **Calendar**. The other option, **Signup form**, is covered in [Embedding a Signup Form](#embed-subscribe-form) below
4. Pick a **Theme**. **Match the visitor's device** follows each visitor's light or dark setting; choose Light or Dark to match your website instead
5. Pick a **Layout**. Leave it on **Schedule default** to follow your schedule's own Default Layout, or choose Calendar or List to pin this one frame
6. Check the **Preview**, which reloads each time you change the widget, theme or layout
7. Copy the **Iframe Code** with the button beside the field, or copy the **Embed URL** if you would rather write the tag yourself
8. Paste it into your website where you want the schedule to appear

[![The Embed Schedule dialog: the Widget, Theme and Layout pickers, the Embed URL, the Iframe Code and a preview](https://eventschedule.com/images/docs/sharing--embed-dialog.png)
Open full size](https://eventschedule.com/images/docs/sharing--embed-dialog.png)

[![The Embed Schedule dialog: the Widget, Theme and Layout pickers, the Embed URL, the Iframe Code and a preview](https://eventschedule.com/images/docs/sharing--embed-dialog-dark.png)
Open full size](https://eventschedule.com/images/docs/sharing--embed-dialog-dark.png)

The theme and layout pickers only rewrite the code you copy. They never change your schedule's own Default Layout setting.

A single event can be embedded too, as a purchase or RSVP form. The RSVP form embed is free on every plan; the ticket purchase widget is a Pro feature. See the [Embed Widget](docs__tickets.md#embed-widget) section in the Selling Tickets guide.

Free plans get a credit line 

Free
 - Available on the Free plan

On a Free hosted plan the copied snippet includes a small "Powered by Event Schedule" line underneath the iframe. It sits outside the frame, so you can see exactly what you are pasting. [Removing branding](docs__schedule-styling.md#remove-branding) is a Pro feature. Selfhosted installs never add the line.

### URL Parameters

Add these to the embed URL to change how the frame renders. They go after `?embed=true`, separated by `&`.

| Parameter | Description |
| --- | --- |
| `embed=true` | Required. Renders the schedule on its own, with no header, footer or banner, and is the only URL another site is allowed to frame. `embed=1` works too |
| `layout=calendar` `layout=list` | Force the month calendar or the list, whatever your schedule's Default Layout is set to. Leave it off and the embed follows that setting |
| `schedule=slug` | Show a single sub-schedule instead of everything. The sub-schedule's own page URL (your schedule URL followed by the slug) does the same thing and can be embedded directly |
| `category=id` | Show a single event category. The value is the category's numeric id: filter your schedule page by the category and it appears in the address bar, ready to copy |
| `custom_N=value` | Show only the events with one value in a [custom field](docs__creating-schedules.md#customize-custom-fields) set to Show as Filter, for example `custom_1=room+a`. N is the number shown next to the field in your settings, and matching ignores capital letters and extra spaces. Custom fields are a Pro feature |
| `form=subscribe` | Show the email signup form instead of the calendar. See [Embedding a Signup Form](#embed-subscribe-form) |
| `dark=true` `dark=false` | Force dark or light mode. Left off, the frame uses the theme the visitor last chose on Event Schedule, and their system setting if they have never chosen one |
| `lang=xx` | Switch the frame to your schedule's second language, the one set by **Offer a second language to visitors** under [Details → Language and time](docs__creating-schedules.md#details-localization). Any other language code is dropped and the frame falls back to your schedule's own language |
| `month=3` & `year=2027` | Open the frame on a specific month instead of the current one. This moves the month calendar; the list always starts from today |

The frame's width and height are plain iframe attributes, not parameters: `width="100%"` lets it fill whatever column you drop it into, and you choose the height. Nothing measures the calendar and resizes the frame for you. The signup form is the exception, below.

Link to One Room

A filtered schedule page is a link you can share. Filter your schedule by a custom field value, such as a room, and the address bar holds the whole view, for example `https://your-schedule-name.eventschedule.com?custom_1=room+a`. The **Copy link** button in the filters panel copies it for you. Turn it into a QR code for the door of the room and anyone passing can see what is on there next. Add `&embed=true` to show the same view in a frame.

### Two Layouts on One Page

Because the layout is set per URL, you can embed the same schedule twice on the same page and give each frame its own layout:

One calendar, one list
Copy

```
<iframe src="https://your-schedule-name.eventschedule.com?embed=true&layout=calendar"
        width="100%" height="800" frameborder="0" style="border: none;"></iframe>

<iframe src="https://your-schedule-name.eventschedule.com?embed=true&layout=list"
        width="100%" height="800" frameborder="0" style="border: none;"></iframe>
```

Give the calendar room. The month calendar needs about 768px of frame width to render as a grid. Below that it falls back to a day-by-day agenda, which looks much like the list. If you are putting two frames side by side in narrow columns, expect both to show the agenda.

Which Layout Wins

`?layout=` always wins. Without it, an embed uses your schedule's [Default Layout](docs__schedule-styling.md#event-layout). A visitor who switches between calendar and list on your own schedule page only changes it for themselves there, and never affects your embeds.

### What Travels Into the Frame

- **Your events, live.** The frame loads from your schedule on every page view, so a date you move this afternoon is already right on your site. You never re-paste the tag.
- **Your look.** Background, colour scheme and font come from your [Style](docs__schedule-styling.md) settings. Custom CSS, on Pro, applies inside the frame too.
- **Nothing else.** No header, no footer, no banner, no language switcher, which is why the language is set in the URL instead.
- **No ads, ever.** A Free schedule's own public pages can carry ads. An embed never does.
- **No search-engine competition.** The embed URL is served `noindex, nofollow`, so the page that ranks is yours, not the frame inside it.

### Embedding a Signup Form

You can also put your [email sign-up](#followers) form on your own website, so visitors can ask to hear about your new events without leaving it. People who sign up there join the same list as those who sign up on your schedule page. Like the calendar embed, it is free on every plan.

1. Open the **Followers** tab and click **Embed Signup Form**, beside the QR Code button at the top, or open **Actions → Embed Schedule** from any tab and set **Widget** to **Signup form**. Both open the same dialog. The second way is the one to use on a selfhosted install that has no subscribers yet, where the Followers tab is not shown
2. Pick a **Theme** that suits your website, and check the preview
3. Copy the code and paste it into your website where you want the form to appear

- **It sizes itself.** The code is an iframe plus one short script that lets the frame fit the form, the error message and the "check your email" note. If your website builder removes scripts, the frame keeps a fixed height of 520 pixels, which fits the form even on a phone
- **It sits on your page.** The form is a card on a clear background, in your schedule's accent colour, rather than on your schedule's background image
- **It asks for confirmation.** Everyone who signs up gets an email with a confirmation link, exactly as on your schedule page, and is emailed nothing else until they open it
- **You can see it working.** People who signed up through the embedded form carry a **Website** chip beside their name on the Followers tab
- **It shows even with the panel off.** Turning off **Show Sign-Up Panel** hides the panel on your schedule page, not the form you embedded
- `lang=` and `dark=` work here too, as in the [table above](#embed-parameters)

Keep New-Event Emails On

What subscribers get automatically is the digest of your new public events, sent at most once every few days. It is controlled by **Email subscribers about new events** under [Edit Schedule → Settings → Notifications](docs__creating-schedules.md#settings-notifications). With it off, people can still sign up but will only hear from you when you send a [newsletter](docs__newsletters.md), so the embed dialog says so in an amber notice with a link to the setting. On eventschedule.com, digests to more than 50 subscribers also need a verified phone number or your own SMTP settings, and the dialog warns about that too.

## Social Media Sharing

Share your schedule and individual events on social media to reach more people.

### Sharing Your Schedule

Share your schedule URL on any platform. Event Schedule builds the preview card for you from what is already on the schedule:

- **Title** is your schedule name
- **Description** is your short description, joined to your full description when the short one is under 50 characters, and shortened at a sentence or a word to about 155 characters. A venue adds its street and town when the text does not already give them, and while there is room it names your next three events. A schedule with nothing written starts with "View the event schedule for" and its name, followed by the street, town and upcoming events where it has them
- **Image** is the header image you uploaded while your schedule uses the banner header, or else your profile image, or else the background image you uploaded. The built-in headers and backgrounds are never used. With none of these the page offers no image, so most apps show the link without a picture (Facebook may pick one from the page itself); it is never an Event Schedule image

In search results and browser tabs, the page title also says "Upcoming Events" while you have some, and a venue's adds its town, as long as they fit.

### Sharing Individual Events

Each event has its own URL. Its preview card uses the event name as the title. The image is the event flyer. Without one it is a profile image the event page itself shows: the first performer's that has one, else the venue's, else that of the schedule whose page it is, whichever schedule created the event. A deleted schedule, or one that declined the event, is passed over, and if that leaves none of those photos the card has no image. The description is the event's short description, joined to its full description when the short one is under 50 characters, or else the event name, followed by the date and the venue while there is room. A recurring event's own link stands for every date, so it leaves the date out. In search results and browser tabs, the page title adds the venue or town to the event name while they fit, and the date too on a one-off event.

Cards Are Cached by the Platform

Social networks cache preview cards the first time a link is posted. If you change a flyer or a description after sharing, use that platform's own debugging or card-refresh tool to make it re-read the page.

### Event Graphics

Use the [Event Graphics](docs__event-graphics.md) feature to generate shareable images showing multiple upcoming events, ready for a weekly social media post. Open it from **Actions → Events graphic** in the admin portal. Generating graphics is free on every plan; having AI write the text that goes with them, and emailing graphics on a schedule, are Enterprise features.

## Building Followers

Your audience is everyone who asked to hear from you: people who follow your schedule with an account, and people who signed up with their name and email address. Together they are who your newsletters go to, and the list builds up over time.

### Subscribers and Followers Are Different Lists

| Who | How they join | What reaches them |
| --- | --- | --- |
| Email subscriber | Leaves a name and email address on your page, or in your embedded form, and opens the confirmation link | A digest sent automatically when you publish new public events, batched and no more often than once every few days, plus any newsletter you send |
| Account follower | Presses Follow while signed in | Only a [newsletter](docs__newsletters.md) you write and send. Pressing Follow on its own starts nothing automatic |

Confirming a sign-up does both: it starts the digest and sets up an account that follows your schedule, so that person is listed once, under Email subscribers, with an Account chip. If someone wants your events on their own calendar with no email at all, point them at the [calendar feed](#calendar-feeds) instead.

### How Following Works

The **Follow** button on your schedule page, and beside each act on an event page that runs its own schedule, does one of two things:

- **Signed in:** a short dialog tells them the schedule will be able to see their name and email, and they can tick **Don't ask me again when I follow other schedules**. Your schedule then appears on their **Following** page, in the sidebar of their own account, where the **Actions** menu on your row lets them copy your iCal or RSS feed, sync the schedule into their own Google Calendar once they have connected one, or unfollow at any time
- **Signed out:** the same dialog asks for their email and name instead, and works exactly like the sign-up panel below. Nobody is sent away to create an account first

The Follow button is part of the hosted version at eventschedule.com. On a selfhosted install, the sign-up panel is how people join.

### Email Sign-Ups

Signed-out visitors see a **Stay up to date** panel on your schedule page and near the foot of each event page, though never inside the calendar embed. To put it on your own website, [embed the signup form](#embed-subscribe-form). It asks for their email and name, and its button reads **Keep me posted** unless you have [relabelled it](docs__creating-schedules.md#customize-custom-labels). The panel is on unless you turn off **Show Sign-Up Panel** under [Engagement → Mailing list](docs__creating-schedules.md#engagement-mailing-list). With it off, a link made to open the form, like the [QR code](#qr-code), still shows it.

- They are emailed a confirmation link, and join your list only once they open it. Until then the Followers tab shows them as **Awaiting confirmation**
- Confirming also sets up an account for them that follows your schedule. The page they land on offers **Set password and sign in**, and they are on the list whether or not they finish it
- The panel tells them to expect at most one email every few days, only when there is something new. That is the automatic digest of the new public events you publish
- A tick box on the ticket and RSVP forms adds a buyer to your subscribers without a confirmation email, and does not set up an account for them by itself
- Under the form, **Subscribe to all events from** your schedule offers the [calendar feed](#calendar-feeds) to anyone who would rather not give an address

For the details of the checkout opt-in and the digest, see [Email Subscribers](docs__newsletters.md#email-subscribers).

### Managing Followers

Open the **Followers** tab of your schedule in the admin portal. It is there for the schedule's owner and admins, not for a viewer. The tab label carries the running total, so you can see how big your audience is without opening it. On a selfhosted install the tab appears once you have your first email subscriber. From top to bottom it holds:

#### Three figures and two buttons

**Can be emailed**, **Get new-event emails** and **Newsletter only** count your audience in one strip. Beside it are **Embed Signup Form**, covered in [Embedding a Signup Form](#embed-subscribe-form), and **QR Code**, covered in [QR Codes](#qr-code) below.

#### Email subscribers

One row per address, with the total and a line breaking it down into confirmed, awaiting confirmation and unsubscribed. Each row gives the name and email, a status (**Confirmed**, **Awaiting confirmation** or **Unsubscribed**), the date, and **Delete** for the owner and admins. An **Account** chip marks those who have an account, and a **Website** chip those who signed up through your [embedded signup form](#embed-subscribe-form).

#### Followers

The account followers: name and email, their own schedule if they run one, and the date they followed you. Click **Name** or **Date** to sort; the list starts newest first.

A list that is empty is left out, and each one pages once it grows. Before anyone has joined, the tab shows the two buttons and **Your follow link** instead. Everything on the tab is covered in [Managing Schedules: Followers](docs__managing-schedules.md#followers).

Send [newsletters](docs__newsletters.md) to your followers to keep them engaged and promote upcoming events. Newsletters are available on every plan, and the monthly allowance counts recipients rather than sends: a newsletter to 100 followers uses 100 of the allowance.

Privacy

Followers and subscribers are both told, before they join, that the schedule will see the name and email they give, and whether they open its newsletters and click the links in them. You and your team see them on the Followers tab, on the newsletter pages and in the recent activity on your dashboard; they never appear on your public pages, your embeds or your public stats. Their details are shared with your schedule only, and Event Schedule never sells them.

## Calendar Subscriptions

Let your audience subscribe to your events in their calendar app or feed reader. A subscribed calendar re-reads the feed on its own, so a date you move reaches it with nobody doing anything, unlike the one-off file Add to Calendar hands over. Both feeds are public, need no account or email address, and are available on every plan.

### Finding Your Feed URLs

Your guests are offered the iCal feed on your own pages, with nothing for you to set up:

- On an event page, the **Add to Calendar** menu ends with **Subscribe to all events from** your schedule. The menu is there, on a phone as well as a computer, whenever the event is not selling tickets, taking registrations or sending buyers to an outside ticket link
- The **Stay up to date** sign-up panel, shown to signed-out visitors on your schedule page and your event pages, ends with the same link and the line "Adds a live calendar that updates itself when dates change."
- Your followers can use **Copy iCal Feed** and **Copy RSS Feed** in the Actions menu of your row on their own **Following** page

To copy the addresses yourself, choose **Edit Schedule**, open the **Integrations** tab and then its last row, [Calendar text and feeds](docs__creating-schedules.md#integrations-advanced). The **iCal Feed** and **RSS Feed** fields each have a copy button.

#### iCal Feed

Works with Google Calendar, Apple Calendar, Outlook, and any calendar app that supports subscribing to a URL.

`https://your-schedule-name.eventschedule.com/feed/ical`

#### RSS Feed

For readers and aggregators that support RSS. Capped at 50 items, and a repeating event contributes only its next occurrence.

`https://your-schedule-name.eventschedule.com/feed/rss`

#### Add to Calendar Buttons

Each event page has an **Add to Calendar** button offering Google Calendar, Apple Calendar (which downloads an .ics file) and Microsoft Outlook. Each of those copies one event across once and never updates. The rows below them are the ones that keep someone up to date: **Subscribe to all events from** your schedule is the iCal feed above, and once you switch on the [“Notify me” card](docs__creating-schedules.md#engagement-mailing-list), **Tell me when tickets go on sale** puts an email address on the [interest list](docs__tickets.md#interest-list) of a public event that has not happened yet.

### What the Feeds Contain

- Upcoming events only. An event that runs 24 hours or longer stays in the feed until it has actually ended
- Repeating events are expanded into individual dated entries for the next 90 days, so a weekly night shows up as a run of entries rather than one
- Only events accepted onto your schedule appear. Drafts, internal and unlisted events, cancelled events and password-protected events are all left out, so an event you cancel drops out of the feed
- Each entry carries the event title, description, venue address and a link back to the event page
- Start and end times are exported as absolute instants, so every subscriber's calendar app shows them in that subscriber's own local time

Refresh Timing

Subscribed calendars pick up your changes on their own, with no action from your subscribers. The feed itself is cached for an hour, and calendar apps then refresh on their own schedule, which for Google Calendar can be several hours. Do not expect an edit to reach a subscriber's calendar within a minute or two.

## QR Codes

Generate a QR code for your schedule to use in printed materials, posters, or at your venue. It is available on every plan, including Free.

1. Open the **Followers** tab of your schedule in the admin portal
2. Click **QR Code**, at the top of the tab beside Embed Signup Form. The image downloads straight away as `qr-code.png`, a PNG about 300 pixels square with a quiet margin already around it
3. Use it on flyers, posters, table tents, or anywhere else

When scanned, the QR code opens your schedule with the sign-up form ready: for anyone not signed in, the page scrolls straight to the **Stay up to date** panel, so they can sign up on the spot. That works even if you have turned the panel off for everyone else. Until your first follower or subscriber arrives, the Followers tab also shows **Your follow link** with a copy button, which opens the same place. If you have an Enterprise custom domain set up, both point at that domain rather than the eventschedule.com address, unless you kept the subdomain as the [main address](docs__creating-schedules.md#custom-domain).

On a selfhosted install the Followers tab is shown once the schedule has its first email subscriber, so the button is not there before that. What the QR code holds is the schedule's address with `?subscribe=1` on the end, so until the tab appears you can share that link, or make a code from it with any QR generator.

A Different QR Code from Ticket Check-In

This code points at your schedule and is for the public. Tickets carry their own QR codes on every plan, free registrations included, and the door scanner that admits people is free too. Selling a ticket that carries a price is a Pro feature, and so is the live check-in dashboard with its running count and per-ticket-type breakdown. See [Check-In](docs__tickets.md#check-in) in the Selling Tickets guide.

## Embed Troubleshooting

Common issues when embedding your schedule and how to fix them.

#### The frame is empty or the browser refuses to load it

Almost always a missing `?embed=true`. Every other Event Schedule URL is served with framing switched off, so a plain schedule link inside an iframe is refused by the browser. Copy the Embed URL out of the Embed Schedule dialog rather than out of your address bar. Privacy extensions that block third-party frames are the other, rarer cause; test in a private window.

#### The embed is cut off, scrolls, or does not fit a phone

The frame does not size itself, so give it the room. Set a height of at least 600 pixels, for example `height="800"`, and raise it (`height="1000"` or more) when a long list scrolls inside the frame. Set `width="100%"` so it fits whatever column it is in, phones included, or use the [responsive code](#responsive-embed) below to keep its shape.

#### Embed shows the wrong layout

Add `&layout=calendar` or `&layout=list` to the embed URL to pin it, instead of relying on your schedule's Default Layout. Remember that a frame narrower than about 768px shows the agenda even when the calendar is pinned.

#### Embed shows the wrong theme

Pick **Light** or **Dark** under Theme in the Embed Schedule dialog and copy the code again, or add `&dark=true` or `&dark=false` to the embed URL yourself. See [URL Parameters](#embed-parameters).

#### Embed shows the wrong language

`&lang=` only accepts your schedule's second language. Any other code is dropped and the frame falls back to your schedule's own language. Turn on **Offer a second language to visitors** under Edit Schedule → Details → Language and time first.

#### An event is missing from the embed

The frame shows the same events as your public schedule page, so a draft, an unlisted event, or one still awaiting your acceptance will not appear. Check the event on your schedule page first; if it is missing there too, the problem is the event, not the embed.

### Responsive Embed Code

To keep the frame in proportion to the column it sits in, wrap it in a container that sets the height from the width:

A frame that keeps a 4:3 shape
Copy

```
<div style="position: relative; padding-bottom: 75%; height: 0; overflow: hidden;">
<iframe src="https://your-schedule-name.eventschedule.com?embed=true"
style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
frameborder="0"></iframe>
</div>
```

## See Also

- [Event Graphics](docs__event-graphics.md) - Generate shareable images for social media
- [Creating Events](docs__creating-events.md) - Add events to your schedule
- [Schedule Styling](docs__schedule-styling.md) - Customize your schedule's look before sharing
- [Analytics](docs__analytics.md) - Track how sharing drives views and engagement
- [Newsletters](docs__newsletters.md) - Send newsletters to engage your followers
- [Selling Tickets](docs__tickets.md) - Sell tickets for your events
- [Embed Widget](docs__tickets.md#embed-widget) - Embed a ticket form on your website

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/sharing.blade.php)
