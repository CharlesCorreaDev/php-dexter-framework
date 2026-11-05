# AI Setup with Gemini or OpenAI (Selfhost) - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/selfhost/ai

---

Selfhost

# AI Setup

Add one API key and every AI feature turns on: event importing, agenda scanning, translation, generated details, flyers and schedule styling.

Feature overview: [AI event import](https://eventschedule.com/features/ai)

Docs
/
AI Setup

On this page

## Overview

Event Schedule talks to two AI providers: [Google Gemini](https://ai.google.dev/) and [OpenAI](https://platform.openai.com/). Either key on its own turns on every AI feature, text and images alike, because each request falls back to whichever provider is configured. When both keys are present the defaults split the work: Gemini answers text requests and OpenAI draws images. Nothing else changes if you skip this page, so treat AI as an accelerator rather than a dependency.

### Every feature is unlocked

A selfhosted install resolves to the Enterprise tier, so the plan gates on agenda scanning, generated details, generated flyers, AI styling, graphic captions and WhatsApp event creation are all satisfied. The plan badges below are there so you can match this page against the hosted docs, not because anything is held back.

#### No daily AI caps

The per-schedule daily allowances that apply on eventschedule.com, on event parsing, agenda scans, generated details and style values, and generated images, are switched off when the app is not hosted, so no schedule is ever told it has reached a daily limit. Your only ceilings are the quota and billing on your own provider account.

#### Requests leave your server

Text and images are sent to Google or OpenAI for processing. If your deployment must not call third-party services, leave both keys unset and everything except the AI features keeps working. One caller is easy to miss: when an event or schedule name contains no Latin characters, the app asks the text provider for an English rendering so it can build a readable address for it, even with translation switched off.

### What an install with no key looks like

AI features are entirely optional. With neither key configured, the AI buttons are hidden and three screens change:

- The import screen still takes a link to a calendar, or to a page that publishes its events as data, since reading those involves no AI. Below it, the installation's admin sees a **Get API Key** panel marked *Optional*.
- The public import page reads only text and images, so it shows a **Setup Required: Gemini API Key** panel instead of the form. Visitors reach it on a schedule that accepts requests with **AI Import** as its **Event submission form** and **Require Account** off, so switch such a schedule to the **Booking Form**, which uses no AI, until a key is in place.
- The submission form used when **Require Account** is on keeps working. It only loses its **Auto-fill** box.

Both panels walk through **Get API Key**, **Add to Environment** and **Restart Application**. Despite the second panel's heading, an OpenAI key satisfies it just as well. Nothing else in the app is affected.

## AI Features

These are every place a configured key changes what the admin panel can do. The plan badge records the gate that applies on the hosted service; on a selfhosted install all of them pass.

### Text and parsing

#### Event import Free - Available on the Free plan

Choose **Import Events** from the schedule's **Actions** menu. Paste an email, a message or a block of flyer text, or drop in a picture of a poster, and the event name, date, time, duration, venue, performers, category and description come back filled in for review before anything is saved. The same parsing runs the public import page and the **Auto-fill** box on the public submission form, so guests get it too. See the [AI Import guide](docs__ai-import.md).

#### Agenda scanning Enterprise - Requires the Enterprise plan

An **Import** row sits at the foot of the event form's **Agenda** tab, under **Add Part**. Paste a set list, running order or conference agenda and press **Read This Text**, or press **Or Choose a Photo**, then accept the parts it previews. They are added to the parts of the one event you are editing: nothing is replaced, and no separate events are created. **Instructions for the AI** steers the parsing and can be kept for every event on the schedule, and **Keep the photo** shows the source picture with the agenda on the event's page. On narrow screens the same tool also gets its own **Scan Agenda** entry in the schedule's Actions menu, which pre-picks a recent event that has no agenda yet. See the [Scan Agenda guide](docs__scan-agenda.md).

#### Second-language translation Free - Available on the Free plan

On the schedule form's **Details** tab, open the **Language and time** row, turn on **Offer a second language to visitors** and pick a **Translate into** language. A scheduled task that runs every 15 minutes then fills the translated copy of the schedule name, short description, description, address, request terms, banner message and sponsor section title, and of every event and event part, so guests get a button to switch between the language you typed and the translation. Sub-schedule names and custom field names and options are translated as you save instead of waiting for the task. It is one target language per schedule, not a set of languages, and it needs the cron entry to be running.

#### AI Generator for details Enterprise - Requires the Enterprise plan

An **AI Generator** button appears beside the **Details** heading on the schedule form, and inside the **About** row of the event form's **Event** tab. On a schedule it offers Short Description and Description; on an event it offers Category, Flyer Image, Short Description and Description. You tick the fields to fill, can add extra instructions, save those instructions as the default for the schedule, and preview each result before applying it. Fields that already have a value are left unticked so nothing is overwritten by accident.

#### Text on event graphics Enterprise - Requires the Enterprise plan

Shareable [event graphics](docs__event-graphics.md) build their caption from a template. AI rewriting only happens when you have entered an AI prompt in the graphic settings; with the prompt left empty the caption is the plain template output, key or no key.

#### Event creation over WhatsApp Enterprise - Requires the Enterprise plan

Messages and images sent to your WhatsApp number are parsed into events by the same pipeline as the import screen, and land on the sender's default schedule, or on their only editable schedule if no default is set. This needs Twilio credentials as well as an AI key, and the sender's phone number has to be on their account profile. On a selfhosted install a saved profile phone number counts as verified straight away, with no SMS round trip. See [Twilio Integration](docs__saas__twilio.md).

### Image generation

#### Flyer image Enterprise - Requires the Enterprise plan

Tick **Flyer Image** in the event's AI Generator and a portrait flyer, 3:4, is drawn from the event details. Style instructions are optional, and the result is previewed before it replaces the current image.

#### AI Style Generator Enterprise - Requires the Enterprise plan

The **AI Generator** button beside the **Style** heading on the schedule form offers five fields: Profile image, Header Image, Accent Color, Font Family and Background Image. The three images come from the image provider; the accent color and font come from the text provider. See [Schedule Styling](docs__schedule-styling.md).

### Daily Auto Import from event URLs Selfhost - Selfhosted deployments only

An **Auto import** row appears in the **Integrations** tab of the schedule form on selfhosted installs only, and it is the one AI feature that runs unattended. It is offered on every schedule type, but every event it creates is attached to the schedule as that event's *curator*, so it is really a curator tool. A scheduled task visits your sources once a day, so the cron entry has to be running and an AI key has to be set, otherwise the task reports that no key was found and stops without importing anything.

#### Import URLs

Add the address of a page that lists events, such as a venue calendar or a tour page. Each run fetches the page, follows the event links it finds, and asks the AI to pull the details out of each one. The crawler identifies itself as `Event Schedule Bot`, honours the site's `robots.txt`, refuses addresses that fail the outbound URL safety check, remembers event pages it has already imported so nothing arrives twice, and skips events whose date has passed or whose name or start time it could not read.

#### Import Cities

Cities are a filter on the events found at those URLs, not a search of their own. Once one or more cities are listed, an event is only created when the city the AI read off the page matches one of them, and everything else is discarded. Leave the list empty to keep every event a URL yields. Adding a city without adding a URL imports nothing.

#### Test Import

Once the schedule has been saved, a **Test Import** button runs the importer against the values currently in the form and shows you its output, taking one event per URL. Use it to confirm a source is readable before you wait for the daily run.

#### Reviewing what arrives

Imported events arrive the same way a submitted event does. They only appear on the schedule straight away when it has **Accept requests** on and **Require Approval** off, both in the **Requests** row of the schedule form's **Engagement** tab; otherwise they wait on the schedule's **Requests** tab for you to approve. A venue or performer an imported event names that is not already on your install becomes a schedule of its own, with no owner. Its public page says it has not been claimed and stays out of search engines, it is listed under **Unclaimed** on the admin panel's [Schedules](docs__selfhost__admin.md#manage-plans) page, and a selfhosted install never emails anyone an invitation to claim it. See [Auto Import](docs__creating-schedules.md#auto-import) in the schedule guide.

### Which key handles which request

| Request type | Default provider | Override |
| --- | --- | --- |
| Event parsing, agenda scanning, translation, generated details, accent color and font, graphic captions | Gemini | `AI_TEXT_PROVIDER` |
| Flyer images, profile, header and background images | OpenAI | `AI_IMAGE_PROVIDER` |

Fallback beats preference

If the provider named for a request type has no key, the request goes to the other provider instead. Naming OpenAI as your text provider while only `GEMINI_API_KEY` is set is harmless: Gemini answers, and nothing errors.

## Get a Gemini API Key

Gemini is the default provider for every text request, and it can draw images too, so this is the one key to add if you only add one. Follow these steps to get a Gemini API key from Google:

1. Go to [Google AI Studio](https://aistudio.google.com/apikey)
2. Sign in with your Google account
3. Click **Create API Key**
4. Select or create a Google Cloud project
5. Copy the generated API key

Free Tier

Google Gemini offers a free tier whose rate limits are enough for most selfhosted instances. Check [Google's pricing page](https://ai.google.dev/pricing) for current limits and pricing.

## Get an OpenAI API Key

This key is optional. Add it if you want OpenAI to draw the flyers and style images, or to answer text requests instead of Gemini. Follow these steps:

1. Go to [OpenAI Platform](https://platform.openai.com/api-keys)
2. Sign in or create an OpenAI account
3. Click **Create new secret key**
4. Give it a name (for example "Event Schedule") and copy the key

Pricing

OpenAI image generation is a paid API with no free tier, and each image costs a small amount based on size and quality. Check [OpenAI's pricing page](https://openai.com/api/pricing/) for current rates. If you would rather not pay OpenAI per image, leave this key out: with only a Gemini key set, images are drawn by Gemini with no other setting. With both keys set, `AI_IMAGE_PROVIDER=gemini` does the same.

## Configuration

Add your API keys to the `.env` file. One key is enough: `GEMINI_API_KEY` on its own enables every AI feature, and so does `OPENAI_API_KEY` on its own. Everything after the first two lines is optional.

.env
Copy

```
GEMINI_API_KEY=your-gemini-api-key-here
OPENAI_API_KEY=your-openai-api-key-here

# Optional: choose which provider handles text and image requests
# Options: gemini, openai (defaults: text=gemini, image=openai)
AI_TEXT_PROVIDER=gemini
AI_IMAGE_PROVIDER=openai

# Optional: choose specific AI models (defaults shown)
# Translation models are used for batch translation tasks
# Content models are used for interactive features (event parsing, AI details, style generation, blog posts)
GEMINI_TRANSLATION_MODEL=gemini-2.5-flash
GEMINI_CONTENT_MODEL=gemini-2.5-flash
GEMINI_IMAGE_MODEL=imagen-4.0-ultra-generate-001
OPENAI_TRANSLATION_MODEL=gpt-4o
OPENAI_CONTENT_MODEL=o3
OPENAI_IMAGE_MODEL=gpt-image-1.5
```

### Variable Reference

| Variable | Description | Default |
| --- | --- | --- |
| `GEMINI_API_KEY` | Google Gemini key. On its own it enables every AI feature, images included. | Not set |
| `OPENAI_API_KEY` | OpenAI key. On its own it also enables every AI feature. | Not set |
| `AI_TEXT_PROVIDER` | Who answers text requests: `gemini` or `openai`. Falls back to the other provider if the chosen one has no key. Only `openai` switches the default, so a typo leaves Gemini in charge. | `gemini` |
| `AI_IMAGE_PROVIDER` | Who draws images: `gemini` or `openai`. Same fallback applies. Only `gemini` switches the default, so a typo leaves OpenAI in charge. | `openai` |
| `GEMINI_TRANSLATION_MODEL` | Gemini model used for the scheduled translation pass. | `gemini-2.5-flash` |
| `GEMINI_CONTENT_MODEL` | Gemini model used for every other text request: event parsing, agenda scanning, generated details and style values. Event-graphic caption rewriting is the exception: it picks from its own short model list defined in `config/services.php`, not from this variable. | `gemini-2.5-flash` |
| `GEMINI_IMAGE_MODEL` | Gemini model used when Gemini draws the images. | `imagen-4.0-ultra-generate-001` |
| `OPENAI_TRANSLATION_MODEL` | OpenAI model used for the scheduled translation pass. | `gpt-4o` |
| `OPENAI_CONTENT_MODEL` | OpenAI model used for every other text request. | `o3` |
| `OPENAI_IMAGE_MODEL` | OpenAI model used when OpenAI draws the images. | `gpt-image-1.5` |

After adding the keys, clear the config cache:

bash
Copy

```
php artisan config:clear
```

The AI buttons appear throughout the admin panel as soon as a key is readable. Three features still have to be set up on each schedule that wants them: second-language translation, Auto Import and the AI prompt for graphic captions. The model variables are split into translation and content on purpose, so you can point batch translation at a cheap fast model and keep a more capable one for parsing and writing. If your deployment runs `php artisan config:cache`, run it again after editing `.env` or the old cached values will keep being served.

## Troubleshooting

### "Setup Required: Gemini API Key" on the public import page, or "Get API Key" on the import screen

- Either panel shows when neither key is readable, so check that `GEMINI_API_KEY` or `OPENAI_API_KEY` is set in `.env`
- Run `php artisan config:clear`, and `php artisan config:cache` again if you cache your config
- Confirm the web server user can read the `.env` file

#### "Add GEMINI\_API\_KEY= or OPENAI\_API\_KEY= to the .env file to enable AI image generation"

- This is the reply from a flyer or style-image request when neither key is present
- Either key satisfies it. A Gemini-only install draws images with Gemini without `AI_IMAGE_PROVIDER` being set, because the request falls back to the provider that has a key
- Run `php artisan config:clear` after editing `.env`

#### AI buttons are missing entirely

- The **AI Generator** buttons and the agenda's **Import** row are rendered only when a key is configured, so an unreadable key hides them rather than showing an error
- Reload the schedule or event form after clearing the config cache
- The agenda importer is a row, not a button in the heading: look for **Import** at the foot of the event form's **Agenda** tab, under **Add Part**

#### AI text requests failing or timing out

- Check that your server can make outbound HTTPS connections to `generativelanguage.googleapis.com`, or to `api.openai.com` if OpenAI is answering text
- Verify your API key is valid and not expired at [Google AI Studio](https://aistudio.google.com/apikey)
- Check `storage/logs/laravel.log` for specific error messages
- Parsing a large image is the slowest request the app makes, so a low PHP `max_execution_time` or proxy read timeout can cut it off

#### AI image generation failing

- Check that your server can make outbound HTTPS connections to `api.openai.com`, or to `generativelanguage.googleapis.com` if Gemini is drawing the images
- Verify your OpenAI API key is valid at [OpenAI Platform](https://platform.openai.com/api-keys)
- Ensure your OpenAI account has available credits
- Some prompts may be rejected by OpenAI's content policy, so try adjusting your style instructions

#### Translations never appear

- Translation runs on the scheduler, not on save, so confirm the cron entry for `php artisan schedule:run` is installed. The task runs every 15 minutes, so allow that long, or longer for a large schedule
- Nothing is translated unless **Offer a second language to visitors** is on and **Translate into** differs from the schedule's own language
- Only empty translation fields are filled, so text you typed yourself is never overwritten

#### Auto Import brings in nothing

- Use **Test Import** first: it prints what the importer saw, which separates a source problem from a scheduling one. The button only appears once the schedule has been saved
- The task runs once a day off the scheduler, so confirm the cron entry for `php artisan schedule:run` is installed
- A source whose `robots.txt` disallows crawling is skipped, and so is any address that fails the outbound URL safety check
- Cities filter rather than search, so a city that does not match the page's own wording rejects every event
- Past-dated events, event pages already imported once, and pages with no readable name or start time are all skipped
- Imported events you cannot see on the schedule are usually on the **Requests** tab waiting for approval

#### Rate limit errors

- Both APIs have rate limits. If you are hitting them, wait a few minutes and try again.
- For Gemini, the free tier limits are published on [Google's pricing page](https://ai.google.dev/pricing).
- For OpenAI, rate limits depend on your account tier. Check [your account limits](https://platform.openai.com/account/limits) for details.
- These come from the provider, not from Event Schedule: a selfhosted install applies no daily AI allowance of its own.

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/selfhost/ai.blade.php)
