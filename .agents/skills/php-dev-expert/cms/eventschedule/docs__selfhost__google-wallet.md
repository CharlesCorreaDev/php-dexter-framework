# Google Wallet Ticket Passes for Selfhost - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/selfhost/google-wallet

---

Selfhost

# Google Wallet

Put an Add to Google Wallet button on every ticket, free registrations included. The pass carries the same QR code the ticket page shows, so it scans at your door unchanged. Off until you configure it.

Docs
/
Google Wallet

On this page

## Overview

This page is for whoever runs the install. Wallet passes are switched on for the whole install by three environment variables: there is no setting for them in the app, and nothing for a schedule owner to turn on. Once the variables are set, every eligible ticket carries an **Add to Google Wallet** badge, and tapping it saves a pass that holds the ticket's own QR code.

### Where the Badge Appears

| Place | What the buyer sees |
| --- | --- |
| The ticket page | The badge in its own row along the bottom of the ticket |
| The order page | For a purchase that spans several events, one badge for each event |
| The ticket confirmation email | The badge under the button that opens the ticket |

Which tickets are eligible is under [When no button appears](#verify).

Included on every plan

Wallet passes are free on every tier, and a selfhosted install resolves to Enterprise anyway, so nothing here is held back by a plan. It does need the environment variables below: without them no button renders anywhere and your install never contacts Google.

## Prerequisites

- A Google account to run the issuer under. Passes are issued in this account's name, so it belongs to whoever operates the installation, not to individual schedule owners
- A Google Cloud project
- A publicly reachable HTTPS `APP_URL`, if you want your schedule logos and event images on the pass. Google fetches those from your install; a LAN or plain-HTTP address gets a pass with no artwork rather than a broken one

## Setup Instructions

### 1. Create a Google Wallet issuer account

1. Go to the [Google Pay and Wallet Console](https://pay.google.com/business/console)
2. Sign up for the Google Wallet API and accept the terms
3. Copy your **Issuer ID**, a long number. This is `GOOGLE_WALLET_ISSUER_ID`

### 2. Enable the API and create a service account

1. In the [Google Cloud Console](https://console.cloud.google.com), select or create a project
2. Enable the **Google Wallet API** for it
3. Create a **service account** and generate a **JSON key** for it, then download the key file

### 3. Give the service account access to the issuer

1. Back in the Google Pay and Wallet Console, open **Users**
2. Invite the service account's email address, the one ending `@....iam.gserviceaccount.com`
3. Set the access level to **Developer**

There is no Google Cloud IAM role to grant

Authorization comes from the Users tab in the Wallet Console, not from Cloud IAM. If you go looking for a Wallet role under IAM you will not find one. Skipping this step is the usual cause of a button that appears but never produces a pass: the credentials are valid, they simply cannot write to your issuer.

### 4. Configure the app

Add these to your `.env`. `.env.example` carries the same three lines, commented out, in its "Google Wallet passes (optional)" block, with a note on what leaves the install.

.env
Copy

```
GOOGLE_WALLET_ISSUER_ID=3388000000012345678
GOOGLE_WALLET_SERVICE_ACCOUNT=/var/www/secrets/wallet-service-account.json
GOOGLE_WALLET_ID_PREFIX=es
```

### Variable Reference

| Variable | Description |
| --- | --- |
| `GOOGLE_WALLET_ISSUER_ID` | The Issuer ID from step 1. Both this and the service account must be set, or the feature stays off |
| `GOOGLE_WALLET_SERVICE_ACCOUNT` | Either an absolute path to the JSON key file, or the base64-encoded contents of that file. The second form is for hosts with no writable file mount, where config is an app spec rather than a `.env` |
| `GOOGLE_WALLET_ID_PREFIX` | Namespaces the passes this installation creates. Defaults to `es`. Only letters, digits, dots, underscores and hyphens are kept |

To use the base64 form:

Terminal
Copy

```
base64 -i wallet-service-account.json | tr -d '\n'
```

Give a staging install its own prefix

**Google cannot delete a pass class or object once it exists**, only expire it. Two installations that share one issuer account and one prefix will collide permanently, because the identifiers are derived from the event and sale IDs. If you run a staging copy against the same issuer, change `GOOGLE_WALLET_ID_PREFIX` there.

If your install caches its config, run `php artisan config:clear` (or re-run `php artisan config:cache`) after editing `.env`. On a cached-config install this is the difference between working and the button never appearing.

### 5. Request publishing access

A new issuer account starts in **demo mode**. Only Google accounts you have registered as test accounts in the Google Pay and Wallet Console can save a pass, and those passes carry a demo banner. Everyone else sees the button and gets nothing, which looks like a broken feature rather than a pending approval.

Request publishing access from the console when you are ready to go live.

## Verifying it works

There is no health check for this, so confirm it by hand:

1. Open the page of a ticket whose order is complete: a paid ticket, or a free registration. An **Add to Google Wallet** badge should appear in its own row along the bottom of the ticket
2. Tap it. You should be redirected to `pay.google.com` with a pass ready to save
3. Save it, then scan the pass's own QR from **Sales → Scan Ticket**. It should check the attendee in exactly as the on-page QR does

While the issuer is in demo mode, step 2 only works for a Google account you registered as a test account.

The same badge appears in the ticket confirmation email and, for a purchase that spans several events, on its order page, once for each event.

When no button appears

A badge is only offered for an order that is complete (paid, or a free registration), not deleted, not on an installment plan that has fallen behind, whose event is not cancelled, and which is not an appointment booking. Appointment bookings have their own manage page and never enter the QR ticket flow.

## What is sent to Google

Nothing is sent for a buyer who never taps the button. When one does, your install sends Google:

- The attendee name, the event name, the venue name and address, and the start time, with the end time when the event has a length
- The ticket type, any seat labels, and the number of guests when a ticket admits more than one
- **The event's ticket notes**, truncated to 200 characters. This is free text your organizers write, so it is worth knowing it leaves the install
- The schedule's name and accent colour, the event's public URL and, when `APP_URL` is publicly reachable over HTTPS, the URLs of the schedule's profile image (the Event Schedule logo when it has none) and the event's image
- The venue's coordinates, when it has them
- A ticket number and the pass's own identifiers, which are derived from the ids of the order and the event
- **The ticket URL, which contains that sale's secret**

The ticket URL has to be there: it is what the pass's QR code encodes, and your door scanner reads that exact URL.

Saved passes persist on Google's servers

When a buyer saves a pass, Google creates a pass object on its side holding the data above, and **it cannot be deleted afterwards**, only expired. Take that into account if your installation has a data-retention or deletion obligation.

## How it works

- **The class** describes one occurrence: branding, venue, date and time. It is created once over the Wallet API and then cached, because a token carrying both the class and the ticket exceeds the 1800 characters Google documents as the safe length
- **The ticket** rides inside the save link itself, so there is no extra API call per sale
- **Identifiers are derived** from the event and sale IDs, so a buyer who taps twice gets the same pass rather than a second one
- **One pass per event:** an order that spans several events gets a pass for each. A season pass is a single pass for its whole run rather than one per date, so its class carries no date

Passes are never updated after they are created

Neither half is patched once written. A saved pass keeps the details it was saved with, so cancelling or fully refunding an order does not remove it from anyone's phone, and re-tapping the button returns the original rather than a corrected one. The QR still stops working: your door scanner checks the order's live status and refuses a cancelled or fully refunded ticket exactly as the ticket page does. A partial refund leaves the order paid, so its pass keeps scanning.

The class is written once per occurrence too. If you rename an event, move it or change its time *after* the first buyer has tapped, passes saved from then on still carry the original details.

### When a pass stops showing

A normal ticket's pass expires three hours after the event ends (an event shorter than an hour, or with no length set, counts as an hour long), and Google moves it out of the main list. Two cases never expire and stay in the wallet indefinitely:

- A season pass whose ticket leaves **Valid for (days)** blank, because it has no expiry date to inherit
- An all-day event, or a recurring event with no start time, because there is no occurrence instant to measure from

### Very long passes drop optional details

Google caps the save link, so when a pass would not fit, the extra rows go first (the ticket notes and the guest count), then the seat list, then the ticket type. The QR code and the attendee name are always kept. The event name, venue and images never count against the cap, because they live on the class rather than in the link. Long ticket notes, a long seat list or a long ticket type are what trigger it, and text in Hebrew, Arabic, Cyrillic or Chinese takes two to three times the room of the same number of Latin letters.

## Troubleshooting

### The button never appears

Either the ticket is not eligible (see [When no button appears](#verify)), or your credentials did not load. A wrong path, a file the web user cannot read, a truncated or line-wrapped base64 paste, or JSON missing `client_email` or `private_key` all count as *unconfigured*: there is no error and nothing is logged, the button simply never renders. Check that the path resolves to a file and that the JSON decodes with both keys present. A stray space or newline in `GOOGLE_WALLET_ISSUER_ID` is ignored.

### The buyer lands back on their ticket with an error

The error reads "The wallet pass could not be created. Please try again." It means the pass could not be built or the call to Google failed. Check `storage/logs` for one of:

| Log message | Usual cause |
| --- | --- |
| `Google Wallet token exchange failed` | A revoked, corrupt or wrong-project service-account key |
| `Google Wallet class lookup failed` | Most often the missing **Developer** grant from [step 3](#setup-access). This check runs before the insert, so it is the line you will usually see |
| `Google Wallet class insert failed` | The issuer rejected the pass class, for example a malformed issuer ID |
| `Google Wallet JWT exceeds the safe length` | The pass is too long even with every optional detail dropped. All that is left by then is the ticket URL, the attendee name and the pass IDs, so look for an unusually long `APP_URL` or `GOOGLE_WALLET_ID_PREFIX` |

A failure is cached for five minutes, so fix the cause and wait a moment rather than retrying in a loop. The access token is cached for just under an hour.

### The pass saves for you but not for anyone else

The issuer is still in demo mode. See [step 5](#setup-publishing).

### No arrival notification

The pass carries the venue's **coordinates**, not its address, and coordinates are only filled in when the venue is geocoded. That needs `BACKEND_GOOGLE_KEY` to be set, with the Geocoding API enabled on it (see [Google keys](docs__selfhost__installation.md#google-keys)). `MAPS_API_KEY` does not do this. Without the server key a venue can have a complete address and still have no coordinates, and no notification will fire. Coordinates are looked up when a venue is saved, so after adding the key, save each venue once more. Like the rest of the class, they only reach occurrences whose first pass is saved after that.

### The pass has no logo or banner image

Google fetches those from your installation, so they are only sent when `APP_URL` is an HTTPS address Google could actually reach. A LAN or plain-HTTP install deliberately sends no image rather than shipping a broken one.

### The pass shows the Event Schedule logo, or old branding

The pass logo is the schedule's profile image, and the Event Schedule logo stands in when the schedule has none, so give the schedule a profile image. Branding is written into an occurrence's pass class once, when its first buyer taps the button, and the class is never rewritten after that. A new profile image, accent colour or schedule name therefore shows only on occurrences whose first pass is saved after the change.

Outbound access

Your install needs to reach `oauth2.googleapis.com` and `walletobjects.googleapis.com`. Relevant if outbound traffic is restricted.

## See Also

- [Wallet passes in the user guide](docs__tickets.md#wallet-passes) - what a schedule owner and their buyers see
- [Check-in at the door](docs__tickets.md#check-in) - the scanner a wallet pass is read by
- [Installation](docs__selfhost__installation.md) - the other optional integrations

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/selfhost/google-wallet.blade.php)
