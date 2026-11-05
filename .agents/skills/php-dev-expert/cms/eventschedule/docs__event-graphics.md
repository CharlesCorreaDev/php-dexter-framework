# How to Make Event Graphics and Text Posts - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/event-graphics

---

User Guide

# Event Graphics

Compose your upcoming events into one image and one block of text you can paste anywhere: a social post, a WhatsApp group, or an email.

Feature overview: [Event graphics](https://eventschedule.com/features/event-graphics)

Free
 - Available on the Free plan

Docs
/
Event Graphics

On this page

## Overview

Event Graphics builds two things from your upcoming events at once: a single PNG image made from their flyers, and a block of formatted text listing the same events. Nothing is posted for you, so the result works anywhere:

- Social media posts (Instagram, Facebook, Twitter/X)
- WhatsApp and Telegram messages
- Email [newsletters](docs__newsletters.md)
- Anywhere else you can paste an image or some text

Free on every plan

Free
 - Available on the Free plan
Generating, downloading and copying event graphics is free on every plan, and so is uploading a flyer to an event. Two parts are **Enterprise**: the [AI text prompt](#ai-prompt) and [scheduled graphic emails](#email-scheduling). A [selfhosted](docs__selfhost.md) install counts as Enterprise, so nothing on this page is held back by plan there.

On eventschedule.com every graphic carries a small eventschedule.com credit in its bottom-right corner, whatever your plan, and upgrading does not remove it. A selfhosted install adds no credit.

To open it, go to your schedule in the admin panel and choose **Events graphic** from the **Actions** menu at the end of the schedule's title row. Anyone on the schedule's team can open the page and generate; saving the settings, uploading a header image and sending the scheduled email are for the owner and admins. The link above the page's title, named after your schedule, goes back to it.

[![The Events graphic page: the settings in a column on one side, the image and its caption on the other](https://eventschedule.com/images/docs/event-graphics--graphic-page.png)
Open full size](https://eventschedule.com/images/docs/event-graphics--graphic-page.png)

[![The Events graphic page: the settings in a column on one side, the image and its caption on the other](https://eventschedule.com/images/docs/event-graphics--graphic-page-dark.png)
Open full size](https://eventschedule.com/images/docs/event-graphics--graphic-page-dark.png)

### The page

- **Settings** are a column beside the result. **Layout**, **Flyers per row** and **Shape** are always open, and five rows open in place under them: **Events**, **Dates and numbers**, **Header and footer**, **Caption** and **Scheduled email**. Each row has a line under its name saying what it holds, so a setting can be read without opening it.
- **The image** redraws by itself about half a second after you change something. While a new one is on its way the old one is dimmed and marked Updating, and its buttons are off. Under it are **Copy image**, **Download**, and **Share** on devices whose browser can share a file, where it hands the image and the caption to another app together. **Refresh** above it asks for a fresh one, for example after adding an event in another tab, and pressing the image enlarges it.
- **The caption** stands beside the image on a wide window, with **Copy caption**. On a smaller laptop one of the two is shown in full and the other as a single line with its button: opening the Caption row, or pressing the arrow beside the caption, swaps them.
- **Saving** is not needed for a download: what you download is what is on screen. While something is unsaved a bar along the foot of the page names what changed, with **Discard changes** and **Save**. Save keeps your settings for next time, and the scheduled email uses the saved ones.
- **On a phone** the image and the caption come first and the settings follow. A small copy of the image stays in the corner while you change a setting further down, and leads back up.

If some upcoming events use a different timezone than the schedule, and so may show the wrong time on the graphic, a notice at the top of the page says how many, with **Review** leading to the schedule so you can correct them before sharing.

### Which events

The page reads your schedule's upcoming events, earliest first:

- **Upcoming or ongoing only.** An event that has started but not finished still counts.
- **Flyer required for the image.** Only events that have their own flyer image are drawn. Events without one still appear in the text, which needs no artwork.
- **Hidden events stay hidden.** Draft and internal events, unlisted events, password-protected events and cancelled events are never included.
- **Up to 20 events.** That is the ceiling; **Number of events** can lower it.
- **A recurring event appears once, under its next date.** It is placed by that date among your other events, and the image and the caption both show that date, even when the series began weeks ago. Today's date counts until it starts. A series with no date in the coming year is left out.
- **Recurring events can be left out** with **Exclude recurring events**, which affects both the image and the caption. The switch is offered once the schedule has a recurring event.

The **Events** row holds the three settings that decide which events are used:

| Setting | What it does |
| --- | --- |
| **Number of events** | How many upcoming events to include, from 1 to 20. "All, up to 20" uses the maximum. |
| **Limit per talent or venue** | Caps how many events any one talent or venue can contribute, from 1 to 10, so a single act or room cannot fill the graphic. It counts the talent and venue schedules attached to each event, not the schedule the graphic is for, and it fills the freed slots from further down the calendar. Because it counts venues too, the graphic can still come out shorter than Number of events when your events do not spread across enough different talents and venues: a residency at one room with a cap of 2 gives you 2 events, however many are coming up. Applies to the image and the caption alike. "No limit" is the default and changes nothing. |
| **Exclude recurring events** | Leaves recurring events out of both the image and the caption. |

Every flyer also carries a QR code in its lower corner pointing at that event's page, so a printed or projected graphic still leads people to the listing.

### Layout

Layout is the first choice on the page: three tiles, each with a sketch of what it draws, and a line under them describing the chosen one. A layout says how the flyers are arranged; where the result is posted is a matter of [Shape](#shape).

| Layout | What it draws |
| --- | --- |
| **Grid** | Flyers side by side in a block, all drawn at one size |
| **Rows** | Rows of equal height, where each flyer keeps its own width. On Auto it is one long row |
| **List** | One event on each line: a small flyer, then the event name, its short description, the venue and the date and time |

**Flyers per row**, under the layout, is how many flyers are drawn before wrapping to the next row, from 1 to 10, or Auto. On Auto, Rows puts every flyer on one long line, so pick a number to wrap it; the page shows such a line at a readable height and lets you scroll along it. Flyers per row is switched off for List, which puts one event on each line.

### Shape

**Shape** fits the finished graphic to a fixed social-media shape. The graphic is scaled to fit inside the shape and centered, and the padding around it is filled with your schedule's own background, so nothing is ever cropped or stretched. Under the five shapes the page gives the chosen one's size in pixels and where it is used.

| Option | Pixels | Where it is used |
| --- | --- | --- |
| Natural | No fixed shape: the size the flyers need, which grows with the number of events | Anywhere a fixed shape is not needed |
| Square | 1080 × 1080 | Instagram and Facebook posts |
| Portrait | 1080 × 1350 | The tallest post an Instagram feed shows |
| Story | 1080 × 1920 | Stories and WhatsApp status |
| Wide | 1200 × 630 | Link previews, X and banners |

A fixed shape is a fixed number of pixels, so the more events you include the smaller each flyer is drawn inside it. Twenty events fill a grid roughly twice the width of a Square post, which halves every flyer and its text. If the artwork is coming out too small to read, lower **Number of events** or switch back to Natural, which lets the graphic grow instead.

### Dates and numbers

The **Dates and numbers** row holds what is drawn on each flyer. The date strip applies to Grid and Rows; the List layout writes each name and date itself.

| Setting | What it does |
| --- | --- |
| **Date on each flyer** | Draws a date strip across the top of each flyer. **None** (the default) draws nothing, **On the flyer** puts a translucent dark band over the artwork, and **Above the flyer** puts a solid dark bar just above it. Grid and Rows only. |
| **Text instead of the date** | Appears once a date strip is chosen. Replaces the date in that strip with your own short wording, for example `{date_dmy} | {time}`. The variables under the field can be pressed in. Leave it empty for the date on its own. |
| **Number each flyer** | Puts a numbered badge on each flyer. Use `{number}` in the caption's wording so the list matches the badges. It also limits the caption to the events that have a flyer, so the numbering cannot drift. List draws no badge, but the caption is limited in the same way and `{number}` still works. |

Nothing to draw

If no upcoming event has a flyer image, the image's place says so, with a link back to your schedule. Add a flyer to at least one upcoming event, or use the caption on its own: it is still there to copy.

## Header & Footer Text

The **Header and footer** row brands the image itself. Its settings are all optional, and the text is drawn in your schedule's own colors and reading direction.

### Header Image

Upload a JPG, PNG, GIF or WebP to run across the top of the graphic, edge to edge with no border around it. It is scaled to the full width of the image and capped at 200 pixels tall; a taller picture is cropped around its middle, so a wide, short band works better than a tall one. Upload a new file to replace it, or remove it to go back to no header. Unlike the other settings it is saved the moment you choose it, without pressing Save, and the scheduled email uses it from the next send.

#### Profile Image

Turn on **Show the profile image** to put your schedule's profile image at the top, centered below the header image and above the events, with space above and below it. It keeps its own shape, up to 120 pixels tall and 360 wide; without a header image it sits at the very top. The switch is offered once the schedule has a profile image, which is set in the schedule's settings.

#### Header Text

A bold headline on one line, centered above the events. It shrinks automatically to fit the width and is truncated with an ellipsis if it still does not. Up to 200 characters.

#### Footer Text

A sign-off below the events, in a slightly softer tone than the events themselves. Up to two lines and 300 characters; extra lines are dropped.

The pieces stack in order: the header image at the very top, then the profile image, then the header text, then the events. A banner with your logo under it and a tagline below that takes all three.

### Schedule Variables

Header and footer text support a small set of schedule-wide variables. The most used ones are buttons under each field: press one to put it in. Unlike the per-event variables used in the [caption's wording](#text-template) or on the date strip, these describe the schedule or the batch as a whole, not any single event.

| Variable | Description |
| --- | --- |
| `{schedule_name}` | The schedule's display name |
| `{month_name}` | Current month (e.g. "May"), translated |
| `{month_short}` | Current month abbreviation (e.g. "May"), translated |
| `{month}` | Current month number (e.g. "5") |
| `{month_pad}` | Current month number, zero-padded (e.g. "05") |
| `{year}` | Current year (e.g. "2026") |
| `{day_name}` | Current weekday (e.g. "Wednesday"), translated |
| `{day_short}` | Current weekday abbreviation (e.g. "Wed"), translated |
| `{first_event_date}` | Date of the earliest event in the graphic (e.g. "May 3") |
| `{last_event_date}` | Date of the latest event in the graphic (e.g. "May 28") |

The date variables read "now" in your schedule's timezone. Per-event variables such as `{event_name}` are not available here, because a header covers the whole batch.

### Examples

- `Spring Lineup {month_name} {year}`
- `{schedule_name} - Upcoming Events`
- `{first_event_date} to {last_event_date}`

Fonts on the image

The graphic is drawn with built-in Noto fonts, picked automatically from the characters in your text so Hebrew and Arabic render correctly. The font you choose in [schedule styling](docs__schedule-styling.md) applies to your web pages, not to this image; the background and text colors do come from your schedule.

## Text Template

The **Caption** row controls the caption that goes with the image. The template defines how one event is written, and it is repeated once per event, with a blank line between entries.

[![The caption settings: the wording of each event, filled with the default template, and the AI instruction under it](https://eventschedule.com/images/docs/event-graphics--settings.png)
Open full size](https://eventschedule.com/images/docs/event-graphics--settings.png)

[![The caption settings: the wording of each event, filled with the default template, and the AI instruction under it](https://eventschedule.com/images/docs/event-graphics--settings-dark.png)
Open full size](https://eventschedule.com/images/docs/event-graphics--settings-dark.png)

### Default Template

Until you save a template of your own, the **How each event is written** box opens filled in with this one:

Default Template
Copy

```
*{day_name}* {date_dmy} | {time}
*{event_name}*:
{short_description}
{venue} | {city}
{url}
```

The same default is used if the box is empty, and by a scheduled email sent before any template was saved. **Use the default wording**, under the box, puts it back. The variables you are most likely to want are buttons under the box. A template can be up to 2,000 characters.

### Example Output

Generated Text

```
*Wednesday* 15/3 | 20:00
*Summer Concert*:
Live jazz with local artists
Central Park | New York
example.com/summer-concert
```

The link has no `https://` and no event id unless you turn on **Start with https://** or **End with the event's ID**, described [below](#text-options). An event with no short description has no third line.

Tip

Stars around a word, `*text*`, make it bold in WhatsApp, and underscores, `_text_`, make it italic. Other apps show the stars and underscores as they are, so leave them out of a caption meant for somewhere else.

### Showing a price before and after a coupon

When an event carries a coupon, `{discounted_price}` is the price with the discount already taken off and `{original_price}` is what it was before. Both are bare figures with no currency symbol, so you write the currency and the wording yourself. They are written the way prices are, with the currency's decimal places and a thousands separator (`1,224.50`), which is a little different from plain `{price}` (`1234.5`) - worth knowing if you put the two on one line.

Template
Copy

```
*{event_name}*
{discounted_price} ₪ ({original_price} ₪) with {coupon_code}
```

Generated Text

```
*Summer Concert*
119 ₪ (149 ₪) with SAVE30
```

The pair is blank together, so an event with no coupon prints neither figure. The wording and symbols you typed around them still print, though, so on such an event that line comes out as `₪ (₪) with` and nothing else. Use this shape on a schedule where every event carries a coupon.

Both figures are also blank on any event that sells tickets or takes RSVPs through the platform. The coupon is a pointer at an outside ticket link, and nothing here redeems it, so quoting a discounted price on an event we take the money for would advertise a total the checkout will not charge.

If only some of your events run coupons, give the price and the coupon their own lines. A line is dropped only once nothing but spaces and punctuation is left on it, which is exactly what happens to the coupon line when both of its variables come back empty:

Template
Copy

```
{price} ₪
{coupon_code} {coupon_discount}
```

One catch: a currency symbol, or any word you type yourself, is not punctuation, so it survives on its own. On a free event, where `{price}` is blank, that first line still prints a lone `₪`. If your schedule mixes free and paid events, put the symbol on a line that always has something else on it. The text on the date strip is stricter still: it never drops a line, so anything you type there prints even when every variable on it came back empty.

### Blank values clean themselves up

You do not need a separate template for events that have no venue or no price. If a variable comes back empty, a stranded `|` separator around it is removed, and a line left with nothing but punctuation is dropped from that event's entry.

### The rest of the Caption row

| Setting | What it does |
| --- | --- |
| **Include every upcoming event** | Lists every upcoming event in the caption, not only the ones shown on the image. Switched off while Number each flyer is on, so the numbering keeps matching the badges. |
| **In English** | Produces the caption, and the dates and details on the image, in English instead of the schedule language. Shown only for a non-English schedule whose translation target is English. |
| **Start with https://** | Keeps the `https://` prefix on `{url}`. Off by default, which is shorter and still auto-links in most apps. |
| **End with the event's ID** | Keeps the event id in `{url}` and, for a recurring event, its date, so the link opens that exact one. Off by default, which produces the clean slug-only link. |

The same words on your schedule's list

Your schedule's list can word each event the way this caption does, so the website says what you post. Choose **Same as the Events graphic caption** under [Event list wording](docs__schedule-styling.md#list-wording) in the Events row of the schedule's Style section, or write a wording for the list alone there. While the list follows the caption, the Caption row says so and a save here changes the list too.

An invitation at the end

If your schedule accepts [event requests](docs__managing-schedules.md#requests), a short "want to see your event here?" line and a link to your request page are appended after the last event. Turn off event requests on the schedule to remove it.

## Quick Reference

Most templates only need these essential variables. Copy the ones you need:

### Event Basics

`{event_name}` Event name

`{short_description}` Short description

`{url}` Event link

`{description}` Full description

#### Date & Time

`{day_name}` Wednesday

`{date_dmy}` 15/3

`{time}` 20:00

#### Location

`{venue}` Venue name

`{city}` City

`{address}` Street

#### Tickets

`{price}` 10, or blank if free

`{currency}` USD

`{coupon_code}` SAVE20

`{coupon_discount}` 15%

`{discounted_price}` 119

`{original_price}` 149

See [All Variables](#variables) below for the complete list including date formats, end times, and more.

## All Template Variables

Use these variables in your template. They are replaced with the actual event data when the text is generated. An unknown variable is left in place, so a typo shows up as itself rather than disappearing.

### Date & Time

| Variable | Description | Example |
| --- | --- | --- |
| `{day_name}` | Full day name (translated) | Wednesday |
| `{day_short}` | Short day name (translated) | Wed |
| `{date_dmy}` | Day/month format (a two-digit year is added when the event is not in the current year) | 15/3 |
| `{date_mdy}` | Month/day format (a two-digit year is added when the event is not in the current year) | 3/15 |
| `{date_full_dmy}` | Full date (day/month/year) | 15/03/2025 |
| `{date_full_mdy}` | Full date (month/day/year) | 03/15/2025 |
| `{month}` | Month number | 3 |
| `{month_pad}` | Month number (zero-padded) | 03 |
| `{month_name}` | Full month name (translated) | March |
| `{month_short}` | Short month name (translated) | Mar |
| `{day}` | Day of month | 15 |
| `{day_pad}` | Day of month (zero-padded) | 05 |
| `{year}` | Year | 2025 |
| `{time}` | Start time (uses schedule's 24h setting) | 20:00 or 8:00 PM |
| `{end_time}` | End time (uses schedule's 24h setting). An event with no duration set is treated as two hours long. | 22:00 or 10:00 PM |
| `{duration}` | Duration in hours | 2 |

Dates and times are rendered in the schedule's timezone, so the image and the text always agree.

### Event Information

| Variable | Description | Example |
| --- | --- | --- |
| `{number}` | 1-based position in the list, matching the badge on the flyer when **Number each flyer** is on. Specific to the Events graphic caption; it has no value in calendar description templates. | 1 |
| `{event_name}` | Event name | Summer Concert |
| `{short_description}` | Short description | Live jazz with local artists |
| `{description}` | Full description, converted to plain text (no markdown or HTML markup) | Join us for a night of music... |
| `{url}` | Event URL, formatted by the [Start with https:// and End with the event's ID](#text-options) switches | example.com/summer-concert |

### Venue Information

All five are blank when the event has no venue.

| Variable | Description | Example |
| --- | --- | --- |
| `{venue}` | Venue name (in English when **In English** is on) | Central Park |
| `{city}` | City | New York |
| `{address}` | Street address | 123 Main St |
| `{state}` | State/Province | NY |
| `{country}` | The venue's two-letter country code, in capitals | US |

### [Ticket](docs__tickets.md) Information

| Variable | Description | Example |
| --- | --- | --- |
| `{currency}` | Currency code | USD |
| `{price}` | Lowest ticket price. Blank when every ticket is free, when the event has no price, and when the event has no tickets at all, so a free event drops the line rather than printing a zero. | 10 |
| `{coupon_code}` | Event coupon code | SAVE20 |
| `{coupon_discount}` | What the coupon is worth. A percentage renders as `15%`; a fixed discount renders as an amount in the event's currency. Blank when no discount is set, so the line drops rather than printing a zero. | 15% |
| `{discounted_price}` | The price with the coupon already taken off, as a bare figure with no currency symbol so you can word the line yourself. Blank when the event has no discount or no price, and on any event that sells tickets or takes RSVPs through the platform. | 119 |
| `{original_price}` | The price before the discount, for showing what the coupon saves. The same price as `{price}`, written to the currency's own decimal places and with a thousands separator, but blank unless a discount actually applies, so a before-and-after pair appears together or not at all. | 149 |

### Custom Fields Pro - Requires the Pro plan

If you have defined [Event Custom Fields](docs__creating-schedules.md#customize-custom-fields) in your schedule settings, you can include their values in graphics using numbered variables.

| Variable | Description | Example |
| --- | --- | --- |
| `{custom_1}` | Value of the 1st custom field | John Smith |
| `{custom_2}` | Value of the 2nd custom field | Room 101 |
| `{custom_3}` | Value of the 3rd custom field | Workshop |
| ...up to {custom\_10} | | |

Custom field variables follow the number shown beside each field in your schedule's settings. For example, if your first custom field is "Speaker Name", then `{custom_1}` shows the speaker's name. A yes/no field prints as Yes or No. A field marked private always prints nothing, here and on the date strip, because its answers are for the schedule's team only.

### On the date strip

The same variables work in **Text instead of the date** on the flyer strip, with four exceptions: `{url}`, `{number}`, `{month_pad}` and `{day_pad}` are caption-only and are left as they are there. Keep it short: it is drawn on one line across the width of a flyer.

### Language and Direction

Date and time variables like `{day_name}`, `{month_name}`, and `{time}` are written in your schedule's language and respect its 24-hour time setting. Text for a Hebrew or Arabic schedule is also marked so it pastes right-to-left into apps like WhatsApp, while the event links stay intact.

If your schedule uses a non-English language and translates into English, you can turn on **In English** in the Caption row to produce the caption, and the dates and event details on the graphic itself, in English instead. English translations of event and venue names are used when available, falling back to the original values.

One flyer at a time 

Enterprise
 - Requires the Enterprise plan

Event Graphics composes flyers you already have. To create a flyer for a single event, Enterprise schedules can generate one with AI from the [event edit page](docs__creating-events.md#ai-flyer).

## AI Text Prompt

Enterprise feature

Enterprise
 - Requires the Enterprise plan
The **Tell AI how to rewrite the caption** field, at the foot of the Caption row, needs the **Enterprise** plan. Below Enterprise it carries a lock badge and an upgrade note in place of the field. On a [selfhosted](docs__selfhost.md) install the plan is not the obstacle, but the instance needs its own AI key configured, and the field says so when there is none.

### How It Works

The prompt runs after your template, on the finished text. It rewrites the text output only: the image is never changed, and the original events are passed along as reference data so the model does not have to invent names, venues or prices. Typical uses:

- Add emojis to make posts more engaging
- Translate the listing to another language
- Adjust formatting for a specific platform
- Add hashtags or mentions

AI rewrites the caption once when the page opens: the plain caption appears first and is replaced when the rewrite finishes, with a line above it saying it was rewritten. After you change a setting or the instruction the page does not rewrite again by itself. The line says which caption you are looking at, the plain one or one made with the earlier instruction, and offers **Rewrite**. Your instruction is treated strictly as formatting instructions, and if it cannot be applied the plain caption is kept and the page says so. The same instruction is applied to every scheduled email described below. An instruction can be up to 2,000 characters. On eventschedule.com each schedule gets 50 AI content requests a day, an allowance this field shares with the AI details generators of the event and schedule forms; past it the page says the limit was reached and keeps the plain caption.

### Example Prompts

`Add a calendar emoji before each date and a pin emoji before each venue`

`Translate to Spanish`

`Add relevant hashtags for Instagram`

## Email Scheduling

Enterprise feature

Enterprise
 - Requires the Enterprise plan
Scheduled graphic emails need the **Enterprise** plan. The controls are in the **Scheduled email** row.

Have the current graphic and its text emailed on a cadence, using the settings you last saved. This is an internal reminder rather than a campaign: it goes only to the addresses you type into **To**, never to the people following your schedule. One email goes to all of them, so each sees the others' addresses. To email your followers a designed campaign, use [newsletters](docs__newsletters.md) instead.

### Configuration Options

| Option | Description |
| --- | --- |
| **Email the image and caption on a schedule** | Turns the schedule on. Saving with it on and no valid address is refused, and the page marks the field. Under the switch the page says when the email last went. |
| **How often** | Daily, Weekly, or Monthly |
| **Days** | For Weekly: press one or more days of the week. At least one is required. |
| **Day of the month** | For Monthly: the day to send on, from 1 to 28, so every month has it. |
| **Time** | The hour to send, in your schedule's timezone and written the way your schedule writes its own times. Delivery is at or shortly after that hour, and each day or month gets at most one send. |
| **To** | A comma-separated list of email addresses. Everyone on the list receives the same email, addressed to all of them. |

### Send it now

**Send it now** sends the real thing immediately, to everyone in **To**. The email is built from the saved settings, so while something is unsaved the button reads **Save and send it now** and does both. Use it to check the result before you leave the schedule running.

Nothing to send

If no upcoming event has a flyer image when the send is due, no email goes out, and the schedule tries again at the next cadence. Send it now reports the same thing instead of sending an empty graphic, and the line under the switch in the Scheduled email row says a send is skipped in that case.

## See Also

- [Sharing Your Schedule](docs__sharing.md) - More ways to share your events
- [Creating Events](docs__creating-events.md) - Add events and upload the flyers this page composes
- [Schedule Styling](docs__schedule-styling.md) - The colors the graphic inherits
- [Analytics](docs__analytics.md) - Track views and engagement from shared graphics
- [Newsletters](docs__newsletters.md) - Send designed email campaigns to your audience

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/event-graphics.blade.php)
