# Twilio: SMS, WhatsApp, Phone Verification - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/saas/twilio

---

SaaS Platform

# Twilio Integration

Set up Twilio to enable SMS phone verification, SMS invitations and WhatsApp event creation across your Event Schedule deployment.

Feature overview: [White-label ticketing platform](https://eventschedule.com/saas)

Docs
/
Twilio Integration

On this page

## Overview

Twilio is an optional integration. One Twilio account serves the whole deployment: you configure it once in `.env`, and every schedule on the platform uses it. There is nothing for an individual schedule owner to connect, and no screen in the platform admin panel for it: the three variables are the whole setup. Twilio powers exactly three things:

| Feature | What it does | Requires |
| --- | --- | --- |
| **Phone verification** | Users verify their account phone number, and editors verify a schedule's public phone number, with a 6-digit code sent by SMS | Hosted deployments |
| **SMS invitations** | A team member you invite by phone number, with no verified email, gets a sign-up link by text instead of an email. When an organizer lists a venue or act that has no account and only a phone number, they can tick the SMS option to text it a link for claiming its page | Hosted deployments |
| **WhatsApp event creation** | An organizer sends a text message or a flyer photo to your Twilio number and AI turns it into an event on their default schedule | Enterprise plan, a verified phone number on the sender's account, plus an AI key. On a selfhosted install every schedule counts as Enterprise, and a saved profile phone number counts as verified straight away, with no SMS round trip |

If Twilio is not configured, the app skips SMS and WhatsApp without errors: the verification controls are hidden, team invitations go by email, texted claim invitations are not offered, and the WhatsApp webhook does nothing.

What Twilio is not used for

Event Schedule never sends SMS or WhatsApp messages to attendees, ticket buyers or followers. Ticket confirmations, event change notices and newsletters are all email. The only outbound WhatsApp messages the app sends are replies to a message that someone has just sent to your Twilio number, so there is no broadcast or reminder channel to plan for.

## Create a Twilio Account

1. Sign up for a Twilio account at `twilio.com`
2. From the Twilio Console dashboard, note your **Account SID** and **Auth Token**
3. Navigate to **Phone Numbers** → **Manage** → **Buy a number**
4. Purchase a phone number with **SMS** capability
5. If you want WhatsApp event creation, register that same number as a WhatsApp sender as well. Event Schedule sends WhatsApp from the number you put in `TWILIO_FROM_NUMBER`, so it does not need a second number.

Tip

Twilio provides trial credit for new accounts, which is sufficient for testing. Note that a trial account can only message numbers you have added as verified caller IDs, so a code that never arrives during testing is usually the trial restriction rather than a misconfiguration. You can upgrade to a paid account when you are ready to go live.

## Environment Setup

Add the following variables to your `.env` file:

.env
Copy

```
TWILIO_SID=your_account_sid
TWILIO_AUTH_TOKEN=your_auth_token
TWILIO_FROM_NUMBER=+1234567890
```

All three are required. If any one of them is empty, both SMS and WhatsApp stay switched off: the app writes a warning to the log and carries on rather than failing.

### Variable reference

#### TWILIO\_SID

Your Twilio Account SID. Find it on the **Twilio Console** dashboard, displayed prominently at the top of the page.

#### TWILIO\_AUTH\_TOKEN

Your Twilio Auth Token. Found on the same Console dashboard page. Click to reveal the token and copy it. The same token is used to authenticate outgoing requests and to validate the signature on incoming WhatsApp webhooks, so rotating it in Twilio means updating it here too.

#### TWILIO\_FROM\_NUMBER

The Twilio phone number to send from, in E.164 format (e.g., `+15551234567`). This must be a number you have purchased or verified in your Twilio account.

WhatsApp uses this same number, sent as `whatsapp:` plus the value above. There is no separate WhatsApp variable.

If you cache your configuration, run `php artisan config:clear` after editing `.env`, or the old values keep being used.

## Phone Number Verification

Once Twilio is configured, a verification control appears next to every saved but unverified phone number, in two places:

- **Account settings** - the **Phone Number** field on the **Profile Information** tab of **Settings**. While the number is unverified the page reads "Your phone number is unverified." with a **Click here to verify your phone** link underneath.
- **The schedule's edit page** - the **Phone Number** field in the **Contact info** row of the **Details** tab, with the same notice and a **Verify** button under it. Any editor of the schedule can run the verification, and the result belongs to the schedule rather than to the person who ran it.

Both controls are hosted-only. A single-tenant selfhosted install does not show them even with Twilio configured.

### How it works

1. Enter the number and save. The field has a country selector and stores the number in E.164 format (e.g., `+15551234567`); the verify link only appears once a number has been saved.
2. Click **Click here to verify your phone** (on a schedule, **Verify**). A 6-digit code is sent by SMS, reading "Your Event Schedule verification code is: ...".
3. Type the code into the box that appears and click **Verify**. The code is valid for 10 minutes.
4. On success the number is marked verified and the control disappears. Editing the number later clears the verification and the control comes back.

One case needs no code: a schedule whose number is the same as the verified account number of the member saving it is marked verified on save.

### What a verified number unlocks

- **A public phone number.** A schedule's phone is only shown to visitors when it has been verified *and* the **Show phone number** toggle is on. The same rule governs a venue's phone number on an event page.
- **Publishing and network listings.** A schedule's public pages are not published at all until its email address or its phone number is verified (visitors get a page-not-found, so search engines have nothing to index), and if you run [federation](docs__saas__federation.md) its events are only shared from then on.
- **WhatsApp.** Incoming WhatsApp messages are matched to an account by verified phone number, so nobody can create events by WhatsApp until their account phone is verified.
- **Claiming.** When a user verifies their account phone, any unclaimed schedule carrying the same number and created within the past year is attached to that account as owner, and becomes their default schedule if they do not already have one. A verified phone is also what lets someone press **Claim this page** on a [page the app created for them](docs__creating-events.md#claim) that carries only a phone number, so without Twilio such a page cannot be claimed.

Rate limiting

To prevent abuse, a phone number can be sent at most 5 codes per hour. After 5 wrong entries within 10 minutes the pending code is discarded and a fresh one has to be requested.

## SMS Invitations

On a hosted install with Twilio configured, two invitations can go by text message instead of email. Both carry a sign-up link that works for 30 days, and both are queued, so they leave when the [scheduler](docs__saas.md#scheduler) next drains the queue.

#### A team member added by phone

On a schedule's **Team** tab, **Add Member** takes a **Phone Number** as well as an email address. A person who has no account yet, or whose account has neither a verified email nor a verified phone, is texted "You've been added to the "*name*" schedule. Sign up here: ..." instead of being emailed. Until they sign up, their row on the Team tab offers **Resend by text message** beside **Resend Invite**.

#### A venue or performer named on an event

When an event names a venue or a performer that has no account and only a phone number, the event form shows **Send an SMS to notify them** under it. Ticked, the save texts that number the event's name and a link to sign up and [claim the page](docs__creating-events.md#claim) the app made for them. A page that has opted out of messages is not texted.

## WhatsApp Setup

WhatsApp on Event Schedule is inbound-first: an organizer messages your Twilio number, the app creates the event, and the confirmation goes back on the same thread. To accept those messages, your Twilio number has to be registered as a WhatsApp sender and pointed at the app's webhook.

### Register as a WhatsApp sender

1. In the Twilio Console, go to **Messaging** → **Senders** → **WhatsApp Senders**
2. Click **Add WhatsApp Sender** and follow the guided setup
3. Submit your business profile for Meta approval
4. Once approved, your number can send and receive WhatsApp messages

### Configure the webhook URL

Set the incoming message webhook so Event Schedule can receive WhatsApp messages:

1. In the Twilio Console, go to your WhatsApp Sender settings
2. Set the webhook URL to: `https://yourdomain.com/api/whatsapp/webhook`
3. Set the HTTP method to **POST**

The webhook lives on your main application domain rather than on a tenant subdomain, it needs no authentication, and it accepts at most 60 requests per minute.

Every request is signature checked

The app recomputes Twilio's `X-Twilio-Signature` from your auth token and the exact URL Twilio called. If they do not match, the request is dropped silently and an empty reply is returned, so the URL you register has to match the URL the app sees, scheme included. If a proxy or load balancer terminates TLS in front of the app, make sure it is trusted so the app still builds an `https://` URL.

No message templates to submit

WhatsApp only allows free-form messages within 24 hours of the recipient's last message. Every message Event Schedule sends is an immediate reply to a message that has just arrived, so it is always inside that window. There are no campaigns or reminders to schedule and no message templates to get approved.

### Creating events by WhatsApp Enterprise - Requires the Enterprise plan

Once the sender and the webhook are live, an organizer can send event details as text, or a photo of a flyer or poster, and AI parses the content into an event on their default schedule. Every message and reply goes through your Twilio account.

An incoming message has to satisfy all of the following, checked in this order, or the sender gets an explanatory reply instead of an event:

1. The sending number belongs to a user account whose phone number has been [verified](#phone-verification).
2. That user has a **Default schedule** chosen on the **Profile Information** tab of **Settings** (the field appears once they edit more than one schedule), or is an editor of exactly one schedule, and is still an editor of it.
3. That schedule is on the Enterprise plan.
4. The schedule still has AI requests left for the day. Every message counts against the same daily allowance as AI import, which is 100 on Enterprise unless you change `AI_PARSE_DAILY_LIMIT_ENTERPRISE`.
5. The message carries text, an image, or both. Only the first attachment is read, and only if it is an image.
6. Your deployment has an AI key configured (`GEMINI_API_KEY`, or `OPENAI_API_KEY`). It is the same parser used by AI import in the admin portal.

The reply carries the new event's name, link and date. If the parser recognises the event as one that already exists, it replies with a link to it rather than creating a duplicate.

For user-facing instructions on creating events via WhatsApp, see the [Creating Events guide](docs__creating-events.md#whatsapp).

## Testing

### Testing SMS

Requesting a phone verification code is the quickest end-to-end test, because the code is sent immediately rather than queued. Watch the Laravel log while you do it:

bash
Copy

```
tail -f storage/logs/laravel.log
```

If a variable is missing, the app logs `Twilio SMS not configured, skipping SMS send` (or `Twilio not configured, skipping WhatsApp send`) and carries on. If Twilio is configured but rejects the send, the failure is logged with the HTTP status and Twilio's response body, which usually names the problem outright.

Invitation messages are dispatched to the queue instead, and the queue is drained by the [scheduler](docs__saas.md#scheduler), so a stopped scheduler looks exactly like a broken Twilio account. Check **System** → **Queue** in the platform admin panel before you check the credentials.

### Testing WhatsApp

Twilio provides a WhatsApp sandbox for testing without requiring Meta approval:

1. In the Twilio Console, go to **Messaging** → **Try it out** → **Send a WhatsApp message**
2. Follow the instructions to join the sandbox by sending the join code from your phone to the Twilio sandbox number
3. Point the sandbox's incoming-message webhook at `https://yourdomain.com/api/whatsapp/webhook` using **POST**
4. Set `TWILIO_FROM_NUMBER` to the sandbox number while you are testing. Replies are always sent from whatever that variable holds, so a mismatch shows up as an event that gets created without any confirmation coming back.

### Troubleshooting

- **No reply at all.** The signature check almost certainly failed, and by design that produces an empty response rather than an error. Compare the URL in Twilio's Console debugger with the URL the app builds, and confirm the auth token matches.
- **"Your phone number is not linked to an account."** The sending number does not match a user with a verified phone number. Verify it in account settings first. An account blocked at **Manage** → **Blocked** in the platform admin panel gets the same reply.
- **"No default schedule set."** The user edits more than one schedule and has not chosen a **Default schedule** on the **Profile Information** tab of **Settings**.
- **"Creating events over WhatsApp is part of the Enterprise plan."** The schedule the message would go to is not on Enterprise.
- **"You have reached your daily limit of ... AI requests."** The schedule has used its AI allowance for the day, through WhatsApp, AI import or both. It resets the next day.
- **"Could not create event."** The AI parser returned nothing usable, no AI key is configured, or saving the event failed. The log entry for the request has the detail.

Note

The Twilio sandbox is for development only. For production use, you must complete the WhatsApp sender registration and Meta approval process.

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/saas/twilio.blade.php)
