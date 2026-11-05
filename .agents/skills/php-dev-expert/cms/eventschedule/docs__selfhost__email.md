# Email Setup for a Selfhosted Install - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/selfhost/email

---

Selfhost

# Email Setup

Configure email delivery so your Event Schedule install can send ticket confirmations, newsletters, subscriber digests, on-sale alerts, account emails and owner notifications.

Docs
/
Email Setup

On this page

## Overview

Mail is configured once for the whole install, in your `.env` file. Every schedule on the instance sends through that one mail transport. Without a working mail configuration these features do nothing:

### Ticket and booking confirmations

The confirmation a buyer receives after checkout, with the ticket details and QR code, plus appointment confirmations, reminders and reschedule notices, and gift card deliveries.

#### Newsletters

Newsletters a schedule owner writes and sends, plus the automatic new-event digest that goes to confirmed email subscribers when a schedule publishes events. Both leave through this transport, so an install with no mail settings sends neither.

#### Guest notifications

Waitlist openings when a spot frees up, the emails to an event's interest list, change and cancellation notices to ticket buyers, the confirmation link a visitor gets after using a schedule's sign-up panel, post-event feedback requests, and carpool messages between attendees. See [What Is Sent Automatically](#what-is-sent).

#### Account and owner emails

Password resets, email verification for accounts and for a schedule's contact address, team member invitations, the email an owner gets when an event request arrives and the daily summary of those still waiting, opt-in alerts when a ticket sells, and the scheduled event graphic emails an owner sends to their own recipient list.

The default is not a real mail transport

Out of the box `MAIL_MAILER=log`, and Event Schedule treats `log` and `array` as "no mail transport": nothing is delivered. The sign-up panel and the **Tell me when tickets go on sale** form keep collecting addresses on an install left like this, and nobody who uses them hears back. Configure a real driver before you take a single booking.

### What happens with no mail transport

While `MAIL_MAILER` is `log` or `array`, an email goes one of two ways:

#### Skipped, with nothing logged

Ticket and pass confirmations, appointment emails, gift card emails, sale alerts, feedback requests, carpool messages, installment notices, poll suggestion notices, change and cancellation notices to ticket buyers, the new-event digest and the interest list's on-sale and reminder emails.

#### Written to the log instead of sent

Mail that is not gated this way ends up in `storage/logs/laravel.log`: password resets, verification emails, team invitations, waitlist openings, newsletters, sign-up confirmations, scheduled event graphic emails and the interest list's cancellation and change notices, among others.

### What differs from the hosted service

- **No plan gate.** A selfhosted install resolves to the Enterprise feature set, so no email feature here is held back by a plan.
- **No per-schedule sender.** The **Email Settings** row, on the **Integrations** tab of the schedule form, is drawn only in hosted mode. Every schedule on your install sends through the transport you configure below. See [Sender Configuration](#sender).
- **No newsletter allowance.** The monthly allowance of the hosted service, which counts individual recipients rather than newsletters, does not apply. Your schedules send unlimited newsletters to unlimited recipients.
- **No platform mail.** Onboarding and activation nudges, the weekly owner digest, plan renewal reminders and referral credit notices belong to the hosted service. Their scheduled tasks do nothing while `IS_HOSTED=false`.

## What Is Sent Automatically

Most mail answers something a person just did, such as a purchase, a booking or a password reset. The emails below go out on a timer or on someone else's action instead, so they are the ones an operator gets asked about. Every one of them needs a real mail transport; the table says what else each needs.

| Email | Who gets it | When it goes out, and what it needs |
| --- | --- | --- |
| New-event digest | A schedule's confirmed email subscribers | Checked every hour. While **Email subscribers about new events** is on (the default), the schedule sends one digest of the public events it has created since the last one, at most one every 72 hours. Events another schedule lists on it are not included. See [Email subscribers](docs__newsletters.md#email-subscribers). |
| Tickets on sale, and a reminder | People who used **Tell me when tickets go on sale** on an event page, the “Notify me” card a schedule can switch on | Checked every hour. One email when tickets for that date go on sale, and a reminder 48 hours before it starts. Each date of a recurring event is separate. See [Interest list](docs__tickets.md#interest-list). |
| Cancellation or change notice to the interest list | The same people | Sent when the organizer cancels the event. A new date or time (one-off events only), venue or online link reaches them only when the organizer chooses to notify in the prompt that appears on save. |
| Change or cancellation notice to ticket buyers | Buyers and registered attendees | Sent through your install's mailer, on the same terms as the interest list: when the organizer cancels the event, and for a new date or time (one-off events only), venue or online link only when they choose to notify in the prompt that appears on save. There is no per-schedule SMTP to set up first. |
| Sign-up confirmation | Anyone who gives their email address in a schedule's sign-up panel | Sent when they sign up. Clicking the link confirms the subscription. With `ALLOW_REGISTRATION=true` it also sets up a passwordless account that follows the schedule; with registration closed, the default on a selfhosted install, the address is confirmed and nothing more. |
| Waitlist opening | The person who has waited longest on a sold-out event's waitlist | Sent when a place comes back, for example when a sale is cancelled, refunded or expires. They have 24 hours to buy. An hourly task then closes the offer and makes it to the next person. See [Waitlist](docs__tickets.md#waitlist). |
| Appointment reminder | The guest of a confirmed appointment booking | Checked every hour. One reminder for each booking that starts within the next 24 hours. A booking still waiting for approval, or for an online payment, gets none. |
| Feedback request | Buyers and registered attendees | Checked every hour, while **Post-event feedback** is on for the schedule or the event. One request per order, sent once the delay the schedule chose has passed since the event ended (24 hours unless changed), and never more than 30 days after it. Pass purchases get none. See [Feedback](docs__tickets.md#feedback). |
| Carpool reminder | A rider with an approved seat, and the driver | Checked every hour. One reminder in the 24 hours before the event starts, or before it ends for a ride home. Anyone who has unsubscribed from email gets none. |
| Installment notices | A buyer paying for tickets in installments | Checked every hour. A heads-up two days before each charge, a notice when a charge fails, needs the buyer to authenticate or leaves the plan on hold, and a final notice a week before the event to anyone who still owes a balance. See [Installments](docs__tickets.md#installments). |
| Daily notice of what is waiting | Team members who switched the notification on, and the schedule's shared notification address | Once a day, at 12:00 in the app's timezone. A schedule that requires approval is told about each event request that no earlier email has named, with its details. The same run reports new poll suggestions, and tells an event's creator about audience comments, photos and videos waiting for review. |
| Feed emails | Owners and admins who have **Feeds** switched on, and the schedule's shared notification address | Checked every minute, as each [feed](docs__managing-schedules.md#feeds) is read. Three kinds: drafts waiting for review, an event that needs a decision, and a feed that has not been read for three days (and once more when it is paused after two weeks). At most one of each kind a day per schedule, except a decision about an event within three days, which is sent at once. An email that could not be sent is tried again at the feed's next read. |
| Scheduled event graphic | The addresses listed under **Send To** in the schedule's graphic email settings | Checked every hour. Sent daily, weekly or monthly, at the hour the owner chose in the schedule's timezone, at most once per period. See [Email scheduling](docs__event-graphics.md#email-scheduling). |
| Invitation to claim a page | A performer or venue an organizer named who is not on the install | Sent on the hosted service only. A selfhosted install creates the page but never emails an invitation to claim it. |

Every row that is checked on the hour or once a day is a scheduled task, so it needs the `schedule:run` cron entry from the [installation guide](docs__selfhost__installation.md#cron) even when `QUEUE_CONNECTION=sync`. Six optional variables change the timing and the size of the digest and the interest list's emails:

| Variable | Default | What it sets |
| --- | --- | --- |
| `AUDIENCE_ANNOUNCEMENT_MIN_HOURS` | `72` | The least time between two digests from one schedule. The sign-up confirmation promises "At most one email every few days", so keep it at a few days. |
| `AUDIENCE_ANNOUNCEMENT_BATCH` | `100` | The most schedules one hourly run handles. The rest wait for the next run. |
| `AUDIENCE_ANNOUNCEMENT_RECIPIENT_BATCH` | `2000` | The most digest emails one hourly run queues. Schedules past that point go out on the next run. |
| `EVENT_INTEREST_REMINDER_HOURS` | `48` | How many hours before a date the interest list's reminder goes out. |
| `EVENT_INTEREST_RECIPIENT_BATCH` | `2000` | The most interest-list emails one hourly run queues. The rest go out on the next run. |
| `EVENT_INTEREST_TICKETS_MAX_AGE_DAYS` | `180` | How many days a request to hear when tickets go on sale keeps waiting. After that the on-sale email is no longer sent for it. |

## SMTP Setup

SMTP is the recommended setup for a selfhosted install: it works with every provider and needs no extra packages. You can point it at your hosting provider's mail server, a mailbox at Gmail or Microsoft 365, or a transactional email service such as Amazon SES, Mailgun or Postmark.

### Configure it in four steps

1. **Get SMTP credentials from your provider.** A host name, a port, a username and a password. Transactional services issue SMTP credentials that are separate from their API keys.
2. **Add the variables to `.env`.** Use the block below as a starting point and replace every value.
3. **Clear the config cache.** Run `php artisan config:clear`, otherwise the old values keep being used.
4. **Send yourself a test message.** See [Testing](#testing) below.

### Environment Variables

Add these to your `.env` file:

.env
Copy

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=[email protected]
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=[email protected]
MAIL_FROM_NAME="${APP_NAME}"
```

### Variable Reference

| Variable | Description | Example |
| --- | --- | --- |
| `MAIL_MAILER` | Mail driver to use | `smtp` |
| `MAIL_HOST` | SMTP server hostname | `smtp.gmail.com` |
| `MAIL_PORT` | SMTP port number. It also decides the encryption: `465` connects over SSL from the start, and any other port, such as `587`, upgrades to TLS with STARTTLS whenever the server offers it | `587` (STARTTLS) or `465` (SSL) |
| `MAIL_USERNAME` | SMTP authentication username | Your email address or API username |
| `MAIL_PASSWORD` | SMTP authentication password | Your password or app-specific password |
| `MAIL_ENCRYPTION` | Not read by the install-wide mailer, whatever its value: the port chooses the encryption (see `MAIL_PORT`). Harmless to leave in place | `tls` |
| `MAIL_FROM_ADDRESS` | Default sender email address | `[email protected]` |
| `MAIL_FROM_NAME` | Default sender name | `${APP_NAME}` (uses your app name) |
| `MAIL_URL` | Optional. A full SMTP connection string that stands in for the host, port, username and password values above. Useful when a provider hands you a single DSN | `smtp://user:[email protected]:587` |
| `MAIL_EHLO_DOMAIN` | Optional. The domain announced in the SMTP handshake. Defaults to the host in your `APP_URL`, which is usually correct; set it only if your provider requires a specific EHLO name | `yourdomain.com` |

### Popular SMTP Providers

Here are the settings for commonly used SMTP services:

#### Gmail / Google Workspace

Host: `smtp.gmail.com` | Port: `587` (STARTTLS)

Requires an [App Password](https://myaccount.google.com/apppasswords) if 2FA is enabled. Personal mailboxes also apply a daily sending cap, so this suits a small instance rather than a busy one.

#### Outlook / Microsoft 365

Host: `smtp.office365.com` | Port: `587` (STARTTLS)

SMTP authentication has to be enabled for the mailbox in the Microsoft 365 admin center; many tenants have it off by default.

#### Amazon SES

Host: `email-smtp.us-east-1.amazonaws.com` (region-specific) | Port: `587` (STARTTLS)

Use your SES SMTP credentials (not your AWS access keys). SES also has a dedicated driver, see [Other Mail Drivers](#drivers).

#### Mailgun

Host: `smtp.mailgun.org` | Port: `587` (STARTTLS)

Username is usually `[email protected]`. Mailgun is supported through SMTP; there is no `mailgun` API driver in Event Schedule.

## Other Mail Drivers

Besides SMTP, Event Schedule ships with the mailers listed below. Set the one you want as `MAIL_MAILER`. Anything not in this table has to be added to `config/mail.php` yourself, and the app will fail with "Mailer is not defined" until it is.

| Driver | `MAIL_MAILER` Value | Notes |
| --- | --- | --- |
| SMTP | `smtp` | Works with any SMTP server. Recommended for most installs |
| Amazon SES | `ses` | Ready to use. Set `AWS_ACCESS_KEY_ID`, `AWS_SECRET_ACCESS_KEY` and `AWS_DEFAULT_REGION`; the AWS SDK is already bundled |
| Sendmail | `sendmail` | Uses the server's local sendmail binary. Override the path with `MAIL_SENDMAIL_PATH` |
| Failover | `failover` | Tries `smtp` first and falls back to `log`, so a delivery outage is recorded instead of throwing |
| Round robin | `roundrobin` | Alternates between `ses` and `postmark`. Only worth using once both of those are set up |
| Postmark | `postmark` | Set `POSTMARK_TOKEN`, and install the transport with `composer require symfony/postmark-mailer symfony/http-client`. See the warning below. Postmark's SMTP endpoint needs no extra package |
| Resend | `resend` | Set `RESEND_KEY`, and install the transport with `composer require resend/resend-php`. See the warning below. Resend also offers SMTP, which needs no extra package |
| Log | `log` | The default. Writes to `storage/logs/laravel.log` and suppresses transactional email. Development only |
| Array | `array` | Keeps messages in memory and sends nothing. Used by the test suite |

An update removes packages you added

The in-app update, and `php artisan app:update`, replace the `vendor` directory with the release's own copy. A package added with `composer require` is gone after the next update, and mail then fails with a "class not found" error. On an install from the release zip, send through Postmark's or Resend's SMTP endpoint with `MAIL_MAILER=smtp` instead, which needs no package. The `postmark` and `resend` drivers suit an install you build and update yourself with Composer, from a `git clone`.

Mailgun

There is no `mailgun` mailer in `config/mail.php`, so `MAIL_MAILER=mailgun` will not boot, and `MAILGUN_DOMAIN` and `MAILGUN_SECRET` are not read anywhere. Use Mailgun through [SMTP](#smtp) instead, which is the same infrastructure and needs no extra package.

For a production install we recommend SMTP pointed at a transactional email service such as Mailgun, Amazon SES or Postmark. These services are built for application-generated email, they let you authenticate your sending domain, and they deliver far better than a personal mailbox.

## Sender Configuration

The `MAIL_FROM_ADDRESS` and `MAIL_FROM_NAME` determine who emails appear to come from. A fresh install ships with `MAIL_FROM_ADDRESS="[email protected]"`, a reserved example domain that no receiving server will trust, so change it to an address on a domain you control before you send anything.

.env
Copy

```
MAIL_FROM_ADDRESS=[email protected]
MAIL_FROM_NAME="My Event Schedule"
```

### One sender for every schedule

On a selfhosted install this is the From address for all outgoing mail, whichever schedule triggered it. There is no per-schedule sender to configure: the **Email Settings** row of the schedule form's **Integrations** tab, where an owner supplies their own SMTP credentials, is part of the hosted service and is not rendered when the app runs selfhosted, so mail that a hosted schedule may only send from its own address, such as change and cancellation notices to ticket buyers, goes out from this one (see [What Is Sent Automatically](#what-is-sent)). Pick an address that reads sensibly for every schedule on the instance, and one you can actually receive replies at.

Three emails also name the schedule. The sign-up confirmation, the new-event digest and the interest list's emails keep your address but put the schedule in the sender name, for example "The Blue Note via My Event Schedule" with the settings above, and send replies to the schedule's own email address when it has one.

DNS Records

To improve email deliverability and avoid spam filters, set up these DNS records for your sending domain:

- **SPF** - Authorizes your mail server to send on behalf of your domain
- **DKIM** - Adds a digital signature to verify email authenticity
- **DMARC** - Tells receiving servers how to handle authentication failures

Your email provider will give you the specific DNS records to add. Check their documentation for setup instructions.

## Testing

After configuring your email settings, verify that mail is really being sent. The **Send Test Email** button for SMTP settings belongs to the hosted-only **Email Settings** row, so on a selfhosted install you test the transport from the command line.

1. #### Clear the config cache

   Laravel caches `.env` values, so do this first or you will be testing the old configuration:

   bash
   Copy

   ```
   php artisan config:clear
   ```
2. #### Send a test message

   Use Laravel's built-in Artisan command to send a test email:

   bash
   Copy

   ```
   php artisan tinker --execute="Mail::raw('Test email from Event Schedule', function(\$m) { \$m->to('[email protected]')->subject('Test'); });"
   ```

   Send it to a real mailbox you can open. Addresses on the reserved test domains (`example.com`, `example.org`, `example.net`, `test.com`, `test.org`, `test.net`) and anything at `@localhost` are deliberately never emailed by the app's own notifications.
3. #### Confirm queued mail is being processed

   Ticket confirmations, sale alerts and newsletter batches are dispatched as background jobs rather than sent inline. Which means:

   - With the default `QUEUE_CONNECTION=sync` they run immediately, in the same request. Nothing extra is needed.
   - With `database` or `redis` they wait for a worker. Event Schedule's scheduler runs `queue:work --stop-when-empty` every minute and retries failed jobs every five minutes, so the `schedule:run` cron job from the [installation guide](docs__selfhost__installation.md#cron) is what actually drains the mail queue. No cron, no email.
   - Scheduled newsletters are also released by that same cron, once a minute.
   - The hourly and daily emails listed under [What Is Sent Automatically](#what-is-sent) are sent by tasks on that same cron, whatever the queue connection.
4. #### Run one through the app

   A real end-to-end check is a free RSVP or a test ticket purchase on one of your own schedules: it exercises the queue, the mailable and the sender address together.

   Two buttons inside the app also send through your transport once their feature is set up: **Send test feedback email**, in the **Feedback** row of the schedule form's **Engagement** tab while **Post-event feedback** is on, and **Send Test Email** in a schedule's [graphic email settings](docs__event-graphics.md#email-scheduling). With `MAIL_MAILER` still on `log` or `array`, the feedback test answers "Email settings are not configured" instead of sending.

## Troubleshooting

### Emails not sending

- Verify `MAIL_MAILER` is not still `log` or `array` (`log` is the default)
- Run `php artisan config:clear` after changing `.env`
- Check `storage/logs/laravel.log` for error messages
- If `QUEUE_CONNECTION` is not `sync`, confirm the `schedule:run` cron job is installed. It is what runs the queue worker; check `storage/logs/scheduler.log` and the `failed_jobs` table
- The admin panel's [Queue](docs__selfhost__admin.md#system-queue) page, under **System**, shows the same from inside the app: when the scheduler last ran, the pending jobs and the failed ones with their errors

#### Nothing arrives and nothing is logged

- With `MAIL_MAILER=log` the app treats itself as having no mail transport and skips ticket, appointment, gift card, sale-alert and feedback emails, change and cancellation notices to ticket buyers, the new-event digest and the interest list's on-sale and reminder emails outright, so there is no error to find. Configure a real driver
- Confirmation emails are also skipped for addresses on the reserved test domains listed under [Testing](#testing). Buy a test ticket with a real address

#### Ticket buyers were not told about a change

- Buyers and registrants hear about a change only when you choose **Notify attendees** in the prompt on save, and only for a new date or time (one-off events only), venue or online link. Cancelling tells them as part of cancelling
- Those notices go through your mail transport, so with `MAIL_MAILER=log` or `array` they are skipped outright, with nothing logged. A buyer on one of the reserved test domains listed under [Testing](#testing) is never mailed either
- People on the event's interest list are told on the same terms, but their notices are not skipped: with `MAIL_MAILER=log` they end up in `storage/logs/laravel.log`

#### "Mailer [mailgun] is not defined"

- `MAIL_MAILER` names a mailer that does not exist in `config/mail.php`. `mailgun` is the usual culprit; use `smtp` instead
- A "class not found" error from a valid value such as `postmark` or `resend` means the transport package is missing, often because an update replaced `vendor`. See [An update removes packages you added](#composer-packages)

#### Connection refused or timeout

- Verify your server's firewall allows outbound connections on port `587` (or `465`)
- Some hosting providers block outbound SMTP. Check with your host.
- If port `587` is blocked, try `MAIL_PORT=465`, which connects over SSL. The port alone decides that: `MAIL_ENCRYPTION` is not read

#### Authentication errors

- Double-check your `MAIL_USERNAME` and `MAIL_PASSWORD`
- For Gmail, use an [App Password](https://myaccount.google.com/apppasswords) instead of your regular password
- Make sure special characters in your password are properly quoted in the `.env` file (wrap in double quotes)

#### Emails going to spam

- Set up SPF, DKIM, and DMARC DNS records for your domain
- Use a `MAIL_FROM_ADDRESS` on a domain you own, not a free email provider and not the shipped `[email protected]`
- Consider using a dedicated transactional email service (Mailgun, SES, Postmark)

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/selfhost/email.blade.php)
