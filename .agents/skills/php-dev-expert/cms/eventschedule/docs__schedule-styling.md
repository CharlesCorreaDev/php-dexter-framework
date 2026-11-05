# Schedule Styling: Colors, Fonts and Headers - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/schedule-styling

---

User Guide

# Schedule Styling

Customize your schedule's visual appearance with colors, fonts, backgrounds, and more. Most changes show in a live preview before you save.

Feature overview: [Custom CSS](https://eventschedule.com/features/custom-css)

Docs
/
Schedule Styling

On this page

## Overview

How your public schedule and event pages look is decided in one place, the **Style** section of the [schedule form](docs__creating-schedules.md#schedule-form). Everything in it is free on every plan except two things: [Custom CSS](#custom-css), which needs Pro, and the [AI Style Generator](#ai-style-generator), which needs Enterprise.

1. Choose the schedule in the sidebar and click **Edit Schedule** at the top of its page.
2. Choose **Style** in the section list on the left (or from the accordion on mobile).
3. Set the branding at the top, then open the rows under it. The [preview](#live-preview) stays on screen while you do.
4. Click **Save**, in the bar at the bottom of the page. Nothing is applied to your public page until you do.

[![The Style section of the schedule form on an Aurora background: Square Profile Image, Accent Color and Font Family, with the Preview of the page beside them](https://eventschedule.com/images/docs/schedule-styling--section-style.png)
Open full size](https://eventschedule.com/images/docs/schedule-styling--section-style.png)

[![The Style section of the schedule form on an Aurora background: Square Profile Image, Accent Color and Font Family, with the Preview of the page beside them](https://eventschedule.com/images/docs/schedule-styling--section-style-dark.png)
Open full size](https://eventschedule.com/images/docs/schedule-styling--section-style-dark.png)

The Style section opens on its branding fields, with four rows under them that open in place. Each row says its current choice, so most never need opening. The rows follow your page from top to bottom, and this guide follows the rows:

| Where | What it holds |
| --- | --- |
| Always shown | [Square Profile Image](#profile-image), [Accent Color](#color-scheme), [Font Family](#typography) |
| Header | [Header Style](#header-style) and [Header Image](#header-images) |
| Background | [Background Type](#backgrounds) (Aurora, Gradient, Solid or Image) and the controls for whichever you pick: Aurora's palette and arrangement, gradient colors and rotation, a solid color, or a background image |
| Events | [Default Layout](#event-layout), [Hide Past Events](#hide-past-events), [how event cards arrive](#list-animation) as visitors scroll your schedule, and [how each event is worded](#list-wording) on your list |
| Custom CSS | [Your own CSS](#custom-css), on Pro |

New here?

If you have not created your account and first schedule yet, start with [Getting Started](docs__getting-started.md). To set the schedule's name, description, links and other non-visual details, see [Creating Schedules](docs__creating-schedules.md).

## Profile Image

Upload a logo, photo or avatar that represents your schedule under **Edit Schedule → Style → Square Profile Image**. It does three jobs:

### Your header

A large logo in the Banner header style, or a small square avatar beside your name in the Compact style.

#### Your social preview

It becomes the preview image when your schedule page is shared to a chat app or social network, unless your header image is one you uploaded, which is wider and so goes first. With neither, a background image you uploaded is used, and with none of them the page offers no preview image, so most apps show the link without a picture (Facebook may pick one from the page itself). It is never an Event Schedule image.

#### Talent and venue logo walls

It is the logo other schedules show for you in their [logo wall header](#header-images). A connected schedule with no profile image is skipped there.

Best practices

Use a **square image** (1:1 aspect ratio). Recommended minimum size is 400x400 pixels. PNG and JPG are accepted, and uploads must be under 2.5 MB. Click the tile, or **Change** beside it, to pick another image at any time. **Remove** takes away one you have just picked, or deletes a saved one at once after asking.

### It becomes your favicon too Pro - Requires the Pro plan

On Pro, your profile image also becomes the icon in the browser tab on your public pages, including ticket pages. On every plan it becomes the home-screen icon when a visitor saves your schedule to their phone, and a schedule that has uploaded no image gets a plain calendar glyph there rather than the Event Schedule logo. Nothing to configure: upload a profile image and it is used automatically. This is the same reason a square image matters, since a tab icon is cropped to a square either way.

## Accent Color

One **Accent Color** at the top of the Style section drives every highlighted element on your public pages. Click the square to open your system's color picker, type a hex code into the box beside it (three or six digits, with or without the #), or start from one of the ten colors under it. A new schedule starts on the accent of its [Aurora](#aurora) palette, which is picked at random, so it can be teal, blue, purple, pink, orange, red, yellow, green or near-black.

### Where it appears

Buttons and calls to action, the follow and submit controls, the calendar and list layout toggles, the filter button, and highlights on your event pages.

#### Text on top of it is calculated

Event Schedule measures the brightness of your accent color and puts black text on light accents and white text on dark ones, so a button label stays readable whatever you choose. Two kinds of accent are adjusted on a button, because as they are they would not read as one: a grey becomes near-black on the light page and near-white on the dark one, and a very dark color is lifted on the dark page. The preview shows the color your visitors get. There is nothing to set.

Accessibility

The automatic black-or-white text keeps buttons legible, but it cannot rescue an accent that disappears into your background. Check the preview with your chosen background, and pick a saturated color that clearly separates from it.

## Font Family

The **Font Family** field at the top of the Style section offers more than 230 Google Fonts. It sets the typeface your schedule's name is written in: in the header of your schedule page, and on the cards that name you on event pages. The rest of the page keeps the standard font.

### Finding a font

The field shows your schedule's name in the font you have chosen. Click it to open the list, where every row is your schedule's name in that font, so you compare the fonts themselves and not their names. Type in the search box to find one you already know, or press the Up and Down arrow keys to step from one font to the next with the preview following.

#### Live sample

It is your schedule's own name that is drawn, in the field, in the list and in the preview, so you can judge readability on your real text before saving. A schedule in Hebrew, Arabic or Russian is offered only the fonts that have its letters.

Event graphics use their own font

This setting styles web pages. [Event graphics](docs__event-graphics.md) are drawn as images on the server with a bundled Noto Sans family (including Hebrew and Arabic variants), so changing your font here will not change them.

## Header Style

Choose how the header appears at the top of your public schedule page under **Edit Schedule → Style → Header → Header Style**. Schedules use **Banner** unless you change it, and the live preview updates as you switch between the two.

[![The Header row of the Style section, open: Header Style with Banner chosen, and under it the Header Image choices and a wall of ready-made pictures](https://eventschedule.com/images/docs/schedule-styling--header-layout.png)
Open full size](https://eventschedule.com/images/docs/schedule-styling--header-layout.png)

[![The Header row of the Style section, open: Header Style with Banner chosen, and under it the Header Image choices and a wall of ready-made pictures](https://eventschedule.com/images/docs/schedule-styling--header-layout-dark.png)
Open full size](https://eventschedule.com/images/docs/schedule-styling--header-layout-dark.png)

### Banner

A large header carrying your header image, a prominent logo, the schedule name, description and social links. The most spacious option, and the only one that can show a header image or a logo wall.

#### Compact

A slim full-width bar at the top of the page with a small logo and the schedule name on one side, and the action cluster on the other: follow, submit and manage buttons, the filter button, and the calendar or list toggle. Your description and social or contact links move to a strip just beneath the bar.

Header image and Compact

The header image applies to the **Banner** style only. Compact draws no header image at all, but nothing is lost: the description and social links appear in the strip below the bar, and the picture you chose is kept for when you switch back. If a schedule was set to the old **Minimal** style, it now reads as Compact, which is the same slim row under a clearer name.

## Header Image

The **Header Image** field, under Header Style in the Header row, sets the picture at the top of your schedule page. Four choices come first, each on a tile of its own, and the ready-made pictures follow as a wall of thumbnails:

### None

The default. A cleaner look with no header image, so your profile image and name take centre stage.

#### Accent color gradient

No picture, but a soft wash of your [accent color](#color-scheme) across the top of the header, fading out behind your name.

#### Venue logo wall (or Talent logo wall)

A grid of logos instead of a picture. On a talent or curator schedule the option is called **Venue logo wall** and shows the venues hosting your approved events; on a venue schedule it is called **Talent logo wall** and shows the talent performing at them. Each logo links to that schedule's page, and you can drag the list under the pictures to set the order. Only connected schedules that have a profile image appear, so the wall stays empty until at least one does, and the edit page warns you when that is the case.

#### Upload Image

Your own header. Click the tile to choose a file. Once a picture is there the tile shows it and reads **Custom**, with **Change** and **Remove** under the tiles. Use a wide image, around 1200x400 pixels or a similar aspect ratio. PNG, JPG, WebP or GIF, under 2.5 MB. It is also the picture a shared link to your schedule shows, ahead of your profile image.

#### 31 preset headers

Ready-made headers shown as thumbnails, including 5am Club, Arena, Fitness Morning, Music Potential, Networking and Bagels, Ready to Dance, The Stage Awaits and Yoga and Wellness. Click one to choose it: its name appears under the wall and the preview shows it at once. The first two lines are on the page and **Show All** opens the rest, and the arrow keys step from one picture to the next.

Needs the Banner header style

Header images and the logo wall are drawn by the **Banner** [header style](#header-style) only, so the pictures are on the form only while Banner is chosen. Switch to Compact and they give way to a line that says so, with your choice kept for when you switch back.

## Background

The **Background** row starts with a **Background Type** choice of Aurora, Gradient, Solid or Image. Picking one shows its own controls and puts the others away. The row's line names your choice beside a small swatch of it, so you can see it with the row closed.

Whichever you pick, the background fills the visitor's window and stays in place while your events scroll over it, in the calendar as well as the list, so a picture is never stretched to the length of the page. One exception: with an Image background, a phone shows the picture behind your header only.

### Aurora

Soft lights in your schedule's colors that drift slowly behind your page, with a fine grain. Aurora is drawn by the visitor's browser rather than being a picture, so it is sharp on any screen, from a phone to a large monitor, and adds almost nothing to the page's weight. It follows each visitor's light or dark mode: pale lights on a bright page in light mode, glowing color on a deep one in dark mode. Schedules you create start on Aurora, with a palette picked at random and an accent color to match it.

#### Palette

Each palette is a swatch drawn as your page would look, in light or dark as the preview is. **From accent** builds the lights from your accent color and two colors beside it. **Match header** takes its colors from your header picture, and follows it when you change the picture; it is offered while the Banner header shows a picture. While a palette brought your accent color, picking another palette brings that palette's accent too; an accent you chose yourself is left alone. Ten ready-made palettes follow, from Lagoon to Graphite, and **Custom** takes three colors of your own.

#### Shuffle

Arranges the lights differently, and each press looks different from the last. **Back** returns to the last ten arrangements you tried, until you leave the page.

#### Slow drift

The lights drift slowly, each one taking about a minute to cross its path. Turn it off for a still background. Visitors who ask their device for less motion, or use the accessibility widget's reduce motion, always see it still, and so does a schedule embedded on another website or turned into a picture.

#### Light and dark

Use the sun and moon above the preview to see both. Text that sits straight on the page, such as the dates in your event list, stays easy to read on every palette.

### Gradient

Every gradient is a swatch under **Colors**: click one and the preview takes it. The first swatch, marked with a plus, is **Custom**, for two colors of your own.

#### Preset gradients

Over 380 gradients from uiGradients, laid out in the order of the rainbow with the greys last, so you look for a color and not for a name such as Omolon or Purple Dream. The dots above the swatches jump to a color, the name of the one under your pointer is shown under them, and the arrow keys step from one to the next so you can watch the preview change.

#### Custom two-color gradient

Choosing Custom shows two colors, each with a color picker and a hex box, so you can match your brand colors exactly. The Custom swatch itself shows the result.

#### Rotation

A slider from 0 to 360 degrees sets the gradient angle, so you can make it vertical, horizontal, diagonal or anything between. It applies to preset and custom gradients alike.

### Solid

A single **Background Color**. Click the square for your system's color picker, type a hex code such as `#1a1a2e` into the box beside it, or start from one of the ten quiet colors under it.

### Image

#### 37 preset backgrounds

Ready-made backgrounds shown as thumbnails, including Abstract Sunrise, Bookshelf, Desert Retreat, Flower Field, Greyscale, River of Dreams and Stormy Night. Click one to choose it. The first two lines are on the page and **Show All** opens the rest. They are sized for phones, so on a large screen they can look soft; [Aurora](#aurora) stays sharp at any size. While a ready-made picture is chosen, a note in the row says so, with a **Try Aurora** button that switches the background type.

#### Custom upload

Click **Upload Image**, above the thumbnails, to use your own. Once a picture is there the tile shows it, with **Change** and **Remove** under it. PNG, JPG, WebP or GIF, under 2.5 MB. For a sharp background on a large screen, use a picture at least 1920 pixels wide, and wider than it is tall; the form tells you when yours is smaller. Your page sends a phone a smaller copy, and a high-resolution screen a larger one when your picture is wider than 1920 pixels. Dark, low-contrast images work best, because your event cards and text sit on top of them.

## Default Layout

Choose how your events are displayed on your schedule page, under **Edit Schedule → Style → Events → Default Layout**. Two layouts exist:

### Calendar

Events laid out on a month grid, one cell per day, loaded one month at a time. Best when the shape of the month matters, such as a venue with something on most nights. A day shows its first three events, more where its week has room, and the rest behind **+N more**, which opens the whole day; a day with one event shows its picture. Pointing at an event, or a first tap on a touch screen, opens a card beside the day with its date, time, place and price, the way to its tickets or sign-up, and, on your own page, Add to Calendar and share. The arrow keys move between events and days, and Page Up and Page Down change the month.

#### List

Events in date order as full-width cards, loaded well beyond the current month. Best when each event deserves its own space, or when they are spread thinly across the year.

A new schedule starts on **List**. Either way this is only the default: visitors can switch between the two with the layout toggle in the header, and their choice is remembered in their own browser for that schedule. It never changes what anyone else sees, and it does not change your setting. On a phone, events are always shown as a list.

Per-embed override

Embeds ignore the visitor's saved preference, so the site doing the embedding stays in control. An embed can also override your default with `?layout=calendar` or `?layout=list`, so one page can carry the same schedule twice in both layouts. See [Embed URL Parameters](docs__sharing.md#embed-parameters).

## Hide Past Events

Under Default Layout in the same **Events** row, **Hide Past Events** keeps past events off your public schedule, so visitors only ever see what is still to come. It is off until you turn it on, it is free on every plan, and while it is on the closed row says so. Your own admin views are unaffected, so nothing is lost: the events are still there when you need them.

## Event Animation

The **Event animation** setting, under Hide Past Events in the **Events** row of the Style section, brings your events to life as visitors scroll your schedule: each event card animates into place as it comes into view, then its details follow one after another: the title, the date (which flips down like a tear-off calendar page), the venue, the price and the performers. The first screen plays as an entrance when someone opens your link. It is off (**None**) until you pick a style, and it is available on every plan.

| Style | Mood | What visitors see |
| --- | --- | --- |
| Rise | Clean | Events float gently into place, their details rising in a soft wave while the image settles. |
| Focus | Dreamy | The image sharpens first, then each line of text comes into focus in turn. |
| Slide | Energetic | Events glide in from the side, each detail following like a ticker, with the text and the image meeting in the middle. |
| Deal | Playful | Events land like playing cards being dealt, then the venue and ticket badges are dealt onto the card and the performers pop in. |
| Shine | Glowing | A sweep of your accent color lights up each event, and every badge glints as the light passes. |
| Curtain | Theatrical | Panels in your accent color pull back to reveal each event's image, and the text is unveiled line by line. |

### Preview before you save

The stage above the styles plays your choice on your own events, drawn as your page draws them, with the sweeps of Shine and Curtain in your accent color. Use **Replay** to watch it again, or **See it on your schedule** to open your real page with the style you picked, even before saving.

#### Phones and computers

A phone lists your events in both layouts (in the Calendar layout, under a small month that jumps to a day), so it always shows the animation. On a computer it plays in the list layout; if your [default layout](#event-layout) is Calendar, visitors see it after switching to the list. The setting offers a one-click switch to the list layout.

After you save a new style, the Schedule tab shows your link with a Copy button (and Share, where the device supports it), ready to send to your audience.

Always easy to read

Visitors who turn off animations on their device, or with the accessibility menu on your schedule, see every event right away with no motion. Events a visitor has already scrolled past, returns to with the back button, or prints are never hidden or replayed.

## Event List Wording

The last setting of the **Events** row, under **Edit Schedule → Style → Events → Event list wording**, decides how each event is worded on your schedule's list, from three choices. **Standard** is the list's own card, and what every schedule starts with. **Same as the Events graphic caption** words each card the way your [caption](docs__event-graphics.md#text-template) does, so the list says what you post to WhatsApp, and follows the caption when you change it. **My own wording** is a template for the list alone, written with the same [variables](docs__event-graphics.md#variables); it starts from your caption.

The line with `{event_name}` becomes the card's title and the next three lines go under it. The list keeps its day headings, each card's time, the price and Sold out labels and the picture, so the date, time, price and link variables are left out on the list, together with the words around them (`🕗 {time} | 📍 {venue}` reads *📍 Blue Room*), and so is any line above the title. A custom field shows only where it is set to show on the event page. `*bold*`, `_italic_` and `~strike~` work as they do in WhatsApp. A preview under the field shows your next three events before you save. Visitors who read your schedule in its other language see the standard cards, because your own words cannot be translated. Free on every plan.

## Custom CSS Pro - Requires the Pro plan

Pro feature

Pro
 - Requires the Pro plan
The Custom CSS box is editable on **Pro** and **Enterprise**, and on [selfhosted](docs__selfhost.md) installs, which count as Enterprise. Below Pro the row carries a Pro badge. With no CSS saved it shows an upgrade line instead of the box. If you saved CSS before, the box is shown read-only: that CSS is kept, not deleted, but it is not applied to your pages until the schedule is back on Pro, when it also becomes editable again.

When the built-in controls do not reach far enough, write your own CSS under **Edit Schedule → Style → Custom CSS**, the last row of the Style section. The row shows the first line of what you have written, so you can tell with it closed that some is set. It is added to every public page drawn in your schedule's own style: your schedule page, event pages, embeds, and the pages visitors reach from them such as booking, event requests and gift cards. Ticket, order and installment payment pages use the app's standard layout, so your CSS does not reach them.

- Override any of the built-in styles for complete control
- Fine-tune spacing, borders, radii and shadows
- Add your own animations and effects
- Up to 10,000 characters per schedule

To change the page's background with CSS, aim at `.gp-bg`, the layer the background is drawn on, and at `.gp-aurora` inside it for Aurora. For example, `.gp-bg { background-position: top; }` moves a picture up. If your CSS already styles the background on `body` or `html`, a gradient or picture background is still drawn on `body` for you, so those rules keep working; Aurora is drawn over them.

What the sanitizer strips

Saved CSS is cleaned before it is stored, so a few constructs are silently removed rather than rejected with an error. Do not rely on `@import`, `@font-face`, `@charset`, `expression()`, `javascript:` URLs, `behavior` or `binding`, or any `url()` pointing at an `http:`, `https:` or `data:` address. Everything else, including modern layout and animation properties, is kept as written. If a rule seems to vanish after saving, check it against that list first.

## Hiding Sections Pro - Requires the Pro plan

Every panel on your schedule page and on your event pages carries a stable `id` that starts with `gp-`. To remove one from the public page, add a `display: none` rule for that id in **Edit Schedule → Style → Custom CSS**. Nothing else has to change, and you can put back what you hid by deleting the line.

Hide one panel

```
#gp-talent-list { display: none; }
```

Two panels have their own switch

The **“Notify me when tickets go on sale”** card is off unless you turn it on, and the **Stay up to date** sign-up panel can be turned off. Both switches are in the [Mailing list](docs__creating-schedules.md#engagement-mailing-list) row of the schedule form's Engagement section and work on every plan, so neither needs CSS.

### A common example

The **performer list** is the compact list of names under the *Talent* heading, for acts that were typed in or picked up by AI import and have no page of their own. If the names on your events are often wrong or incomplete, hide the list and let the event description carry the lineup instead.

Hide the performer name list on event pages

```
#gp-talent-list { display: none; }
```

Rules can be combined, and one rule can hide several panels at once:

Hide several at once

```
#gp-upcoming-events,
#gp-talent-list,
#gp-reviews {
    display: none;
}
```

Hiding a panel is not the same as turning a feature off

A `display: none` rule removes a panel from the page. It does not disable what sits behind it. People who already signed up to be notified are still notified, a hidden subscribe panel still accepts a submission posted to its address, and a hidden reviews panel does not delete the reviews. Where a real on/off setting exists, use that instead: videos, fan photos, fan comments, feedback, carpooling, accommodation and the “Notify me” card each have their own switch on the schedule edit page, and so does the sponsor grid (**Show sponsors**), which hides it without deleting a sponsor. The **Show Sign-Up Panel** switch is the exception: like this rule, it only hides the panel, and sign-ups through your follow link, and on eventschedule.com the Follow button, still arrive.

### Schedule page sections

| ID | Section |
| --- | --- |
| `#gp-announcement` | Your announcement bar |
| `#gp-language-switcher` | The language switcher row |
| `#gp-header` | The whole header card or bar |
| `#gp-header-image` | The header image behind the name |
| `#gp-logo-wall` | The logo wall header |
| `#gp-profile-image` | The profile picture tile |
| `#gp-header-body-mobile`, `#gp-header-body-desktop` | Name, description, social links and buttons inside the header. Both ids name the same block at every screen width (the header used to be laid out twice), so a rule for either one applies. |
| `#gp-header-bar` | The slim bar that follows visitors down the page once the banner header has scrolled away |
| `#gp-below-bar` | The description and contact strip under the compact header |
| `#gp-video-carousel` | The strip of videos from upcoming events |
| `#gp-sponsors` | The sponsor logo grid (also on event pages) |
| `#gp-map` | The venue map: its band and the map it opens |
| `#gp-map-sheet` | The full-window venue map, on a phone and when a visitor enlarges it |
| `#gp-events` | Everything from the events heading down, including the calendar |
| `#gp-next-event` | The card above the month calendar that shows your next event |
| `#gp-calendar` | The calendar or event list panel on its own |
| `#gp-subscribe` | The follow and subscribe panel (also on event pages) |
| `#gp-gallery` | Your photo gallery (also on event pages, for an event's own gallery) |
| `#gp-videos` | Your own video grid |

### Event page sections

| ID | Section |
| --- | --- |
| `#gp-status-bar` | The bar that says an event is cancelled, draft, internal or awaiting review |
| `#gp-event-hero-image` | The large square picture that stands in for a flyer when an event has none |
| `#gp-talent` | All performer cards |
| `#gp-talent-list` | The compact list of performer names |
| `#gp-venue` | The venue card |
| `#gp-venue-socials` | The venue's social links |
| `#gp-venue-map` | The map at the foot of the venue card |
| `#gp-accommodation` | The places-to-stay map |
| `#gp-create-your-own` | The “create your own schedule” card |
| `#gp-upcoming-events` | The schedule's other upcoming events, down the left column |
| `#gp-event-details` | The main card: title, date, venue, price and buttons |
| `#gp-back-link` | The “back to schedule” link |
| `#gp-event-title` | The event title |
| `#gp-event-short-description` | The one-line summary under the title |
| `#gp-event-date` | The date and time row |
| `#gp-event-location` | The venue row |
| `#gp-event-fields` | The row of [custom fields](docs__creating-schedules.md#customize-custom-fields) you ticked **On event page** |
| `#gp-event-price` | The price or free-entry row |
| `#gp-event-cta` | The main buttons on wide screens. On a phone only its carpool button is drawn, and the rest are in `#gp-mobile-cta` |
| `#gp-mobile-cta` | The button bar pinned to the bottom on phones |
| `#gp-event-carpool` | The carpool button |
| `#gp-event-share` | The share button |
| `#gp-event-interest` | The “notify me when tickets go on sale” card |
| `#gp-event-form` | The ticket or RSVP form |
| `#gp-flyer` | The flyer image |
| `#gp-about` | The event description panel |
| `#gp-gallery` | The event's photo gallery. It takes the flyer's place at the top when there is no flyer |
| `#gp-agenda-image` | The agenda image |
| `#gp-agenda` | The agenda or setlist |
| `#gp-fan-content` | Polls, fan photos, videos and comments |
| `#gp-reviews` | Public reviews |

### Styling, not just hiding

The same ids work for any rule, not only `display: none`. `#gp-about { padding: 3rem; }` gives the description panel more room, and `#gp-venue { order: -1; }` moves the venue card to the top of the sidebar. See [Custom CSS](#custom-css) for what the sanitizer removes and where your rules land in the cascade.

A rule on the panel itself always wins, because an id outranks the styling the page already puts on that element. Text is the exception: headings and body copy carry their own size on an inner element, and a size inherited from the panel never beats one set directly. So `#gp-about { font-size: 1.125rem; }` changes nothing, while `#gp-about p { font-size: 1.125rem; }` does. If a rule seems to be ignored, check whether you are styling the panel when you meant to style what is inside it.

### Smaller hooks inside the calendar

A few elements inside the calendar carry older names that do not start with `gp-`: `#calendar-app`, `#month-year-title`, `#events-carousel` and `#event-popup`, which is the card that opens beside a day when an event in the month is pointed at. They are useful for small adjustments, but they are internals rather than sections, and unlike the `gp-` ids above they may change. Prefer a `gp-` id whenever one covers what you want.

## Live Preview

A **Preview** of your page stands beside the Style form and stays in place as you scroll, so it is still there with a row open. It draws your header, then your next events (or their month, in the Calendar layout) on your background, in your accent color and font, and redraws as you change any of them, so you can experiment freely without publishing anything half-finished.

### On a narrower screen

On a laptop with the sidebar open, a tablet or a phone, the preview is a strip pinned under the Style heading. It shows the part you are changing: your header, your background while the Background row is open, or your event cards while the Events row is open. The arrow beside it opens the whole preview.

#### Light and dark

Your visitors get the light or the dark version of your page according to their own device. The sun and moon buttons above the preview switch it between the two, and leave the theme of your own admin alone.

Save when you are happy

The preview is only a preview. Click **Save** in the bar at the bottom of the page to apply your changes, then use **View Schedule** under the preview to open the real page in a new tab, including any custom CSS, which the preview does not draw. While changes are waiting, **Not saved yet** stands beside that link, because the real page still shows what was last saved.

## AI Style Generator Enterprise - Requires the Enterprise plan

Enterprise feature

Enterprise
 - Requires the Enterprise plan
AI style generation needs the **Enterprise** plan. A [selfhosted](docs__selfhost.md) install counts as Enterprise, so nothing here is held back by plan there, but it does need its own AI keys (see below).

Let AI put together a coherent look for your schedule from its name, type and description, so the color, font and images belong to each other rather than being chosen one at a time.

1. Click **AI Generator**, at the end of the Style section's title row.
2. Tick which of the five elements to generate: profile image, header image, accent color, font, or background image. The dialog marks the ones you have already set with a dot, so you can leave them alone.
3. Optionally add **Style instructions**, for example "modern and minimal with blue tones", and tick **Save as default for this schedule** to keep them for next time. **View/edit AI prompt** shows the prompt that will be sent and lets you adjust it for this run.
4. Click **Generate**, then review the previews in the dialog. **Regenerate** redoes one item, **Accept** drops the results into the Style form, **Discard** throws them away, and nothing reaches your public page until you click Save on the form itself.

### Color and font come first

The accent color and font are generated in one step, then the images are generated with that color passed in, so they share a palette. If you leave the profile image out of the selection, the existing one is described to the model instead, so a new header still matches it.

#### Daily limits

On the hosted platform, AI text and AI image generation each have a daily allowance per schedule, shared with the other AI features. A selfhosted install has no such limit. AI generation is disabled in demo mode.

Selfhosted API keys

Selfhosted installs supply their own keys, and either a [Gemini API key](https://ai.google.dev/) or an [OpenAI API key](https://platform.openai.com/) is enough to use every part of the generator. The accent color and font use Gemini when its key is set and OpenAI when it is not, unless the operator chose OpenAI for AI text. Image generation uses OpenAI when its key is set, and Gemini otherwise. The button does not appear at all until at least one key is configured. On the hosted platform, a schedule below Enterprise sees the button greyed out.

## Remove Branding Pro - Requires the Pro plan

Free schedules on eventschedule.com carry a small "Event Schedule" credit chip in the corner of their public pages. There is no switch for it: it is removed automatically the moment the schedule is on **Pro** or **Enterprise**, and it returns if the plan lapses. The one exception is an Enterprise plan an admin granted by hand, which keeps it.

### What a paid plan removes

Five surfaces at once: the corner chip, the "create your own" card on your event pages, the credit line printed under your embed snippets, the same line inside a ticket or RSVP embed, and the footer of your newsletter emails. Ads, where a platform runs them on free schedules, follow the same tier. Embeds of your calendar never carry any of it, on any plan.

#### White-label your schedule

With those gone, a hosted schedule reads entirely as your own to visitors. Pair it with a [custom domain](docs__creating-schedules.md#custom-domain) on Enterprise and nothing on the page points back at Event Schedule. [Event graphics](docs__event-graphics.md) are the exception: an image generated on the hosted platform carries a small eventschedule.com credit in its bottom-right corner on every plan.

A single-tenant [selfhosted](docs__selfhost.md) install has no plan tiers at all, so the event-page card, the embed and newsletter lines and ads are all absent by default, with nothing to buy. If instead you run your own multi-tenant platform on Event Schedule, those surfaces follow each tenant's tier exactly as they do on eventschedule.com.

On every install that is not eventschedule.com itself, upgrading never removes that corner chip. It is the attribution the Attribution Assurance License asks for in return for the application, so there is no setting that removes it. On a single-tenant selfhost, and on a platform of your own, it is on every page, whatever the schedule's plan.

## See Also

- [Creating Schedules](docs__creating-schedules.md) - Configure details, settings, sub-schedules, and integrations
- [Managing Schedules](docs__managing-schedules.md) - Plans, team members, and booking requests
- [Event Graphics](docs__event-graphics.md) - Generate shareable images for social media
- [Sharing Your Schedule](docs__sharing.md) - Embed and share your schedule
- [Creating Events](docs__creating-events.md) - Add events to see your styling in action

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/schedule-styling.blade.php)
