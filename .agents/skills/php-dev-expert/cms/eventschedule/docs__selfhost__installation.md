# Selfhost Installation: PHP, MySQL and Cron - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/selfhost/installation

---

Selfhost

# Installation

Set up Event Schedule on your own server with this step-by-step guide. For automated installation, consider using Softaculous or Docker.

Feature overview: [Open source event calendar](https://eventschedule.com/open-source)

Docs
/
Installation

On this page

## Overview

This guide walks you through manually installing Event Schedule on your own server. There are five steps: create an empty MySQL database, extract the release files, set file permissions, run the browser-based setup wizard, and add the cron job. The wizard writes your configuration to `.env` and creates the database tables for you, so there is nothing to import by hand.

These steps describe a plain selfhosted install, where you own every schedule on the server. If you want to run a multi-tenant service where other people sign up and get their own subdomain and plan, follow the [SaaS setup guide](docs__saas.md) instead.

A selfhosted install is not a reduced edition. It resolves to the Enterprise feature set, so everything the hosted service keeps for Pro and Enterprise comes with no plan to buy: unlimited paid ticket sales, the check-in dashboard, passes, gift cards, custom fields, webhooks, custom CSS, team members, unlimited newsletters, and the AI features once you add a key. A few controls only make sense on the hosted service (per-schedule email settings, subscription billing) and are hidden here. The [Selfhost overview](docs__selfhost.md#differences) lists every difference.

Automated Installation Options

For easier installation, you can use:

- [Softaculous](https://www.softaculous.com/apps/calendars/Event_Schedule) - One-click installation on cPanel hosts
- [Docker](https://github.com/eventschedule/dockerfiles) - Containerized deployment with Docker Compose

## Requirements

Before you begin, ensure your server meets the following requirements:

| Requirement | Minimum Version | Notes |
| --- | --- | --- |
| PHP | 8.2+ | With required extensions (see below), on a current patch release: 8.2.35, 8.3.36, 8.4.27, 8.5.12 or newer, which fix the PHP2Shell flaws (CVE-2026-109618 and CVE-2026-109619) |
| MySQL | 5.7+ or MariaDB 10.3+ | The only supported database; the setup wizard configures the MySQL connection |
| Web Server | Apache or Nginx | With mod\_rewrite or equivalent, and its document root on the `public` directory |
| SSL Certificate | Required | Links are generated as `https://` outside local environments, and session cookies are secure-only by default |
| Cron | Every minute | Runs scheduled tasks and the queue ([step 5](#cron)); reminders, scheduled newsletters and calendar sync stop without it |

### Required PHP Extensions

- BCMath
- Ctype
- Fileinfo
- Intl
- JSON
- Mbstring
- OpenSSL
- PDO (with MySQL driver)
- Tokenizer
- XML
- cURL
- GD
- MySQLi - used by the Test button in the setup wizard, which checks your credentials before migrations run
- Zip - used by backup export and import, and by `php artisan app:update`

GD, not Imagick

Image work (thumbnails, social images, event graphics) is done with GD, and generating an event graphic fails outright if GD is missing. Imagick is not used anywhere, so installing it is not a substitute.

### PHP settings that ship with the app

The release carries `public/.user.ini`, which PHP-FPM and other CGI setups read. It sets these limits:

- `upload_max_filesize=5M` and `post_max_size=20M`: the largest image a person can upload
- `max_execution_time=90`: how long one web request may run, which is what can cut short the [Update button](#updating)
- `session.upload_progress.enabled=0` and `fatal_error_backtraces=0`: stopgaps for the PHP2Shell flaws on an unpatched PHP

Apache with mod\_php does not read `.user.ini`. There, `public/.htaccess` sets the two PHP2Shell stopgaps, and the upload and time limits come from your `php.ini`, so set them there.

## 1. Set Up the Database

Create a MySQL database and user for Event Schedule. Run the following commands in your MySQL client:

SQL
Copy

```
CREATE DATABASE eventschedule;
CREATE USER 'eventschedule'@'localhost' IDENTIFIED BY 'change_me';
GRANT ALL PRIVILEGES ON eventschedule.* TO 'eventschedule'@'localhost';
```

Leave the database completely empty. There is no schema to import: the setup wizard in step 4 runs the migrations and creates every table. The user needs full privileges on that database, because migrations create, alter and index tables.

Security Note

Replace `change_me` with a strong, unique password. Never use default or weak passwords in production. The setup wizard also requires a password, so a user with a blank password will not be accepted.

## 2. Download the Application

Download the latest release and extract it into the directory that will hold the install.

1. Download [eventschedule.zip](https://github.com/eventschedule/eventschedule/releases/latest) from the latest GitHub release
2. Upload the zip file to your server
3. Extract the contents to your web root directory

bash
Copy

```
# Example: Extract to web root
cd /var/www
unzip eventschedule.zip
```

The archive has no wrapping folder inside it: `app`, `public`, `storage` and the rest land directly in whatever directory you unzip into. So `cd` into the directory you want the install to live in before extracting.

Point your web server's document root at the `public` directory inside the install directory, not at the install directory itself. Getting this wrong is the single most common cause of a broken install, and its symptoms are described under [troubleshooting](#troubleshooting).

No Composer or Node needed on the server

The release zip is built with dependencies already installed and the frontend assets already compiled, so you do not run `composer install` or `npm run build` after extracting. Those are only needed if you install from a `git clone` instead.

## 3. Set File Permissions

Ensure the web server has proper permissions to write to storage and cache directories.

bash
Copy

```
cd /path/to/eventschedule
chmod -R 755 storage
sudo chown -R www-data:www-data storage bootstrap public
```

All three directories are needed: `storage` holds logs, uploads and caches, `bootstrap` holds the compiled config and route caches, and `public` has to be writable because setup creates the `public/storage` symlink that serves uploaded images.

The web-server user must also be able to write to the `.env` file you create in the next step. Step 4 gives it the right owner as soon as it exists.

Which user?

The user `www-data` is typical for Apache on Debian/Ubuntu. Your web server may run under a different user (e.g., `nginx`, `apache`, or `http`). Check your server configuration. Docker images based on Alpine often have no `www-data` name at all, only the numeric UID `82`, so use `chown -R 82:82 ...` there instead.

## 4. Run the Setup Wizard

Copy the example environment file to create your configuration, and give it to the web-server user:

bash
Copy

```
cp .env.example .env
sudo chown www-data:www-data .env
```

Use the same user as in step 3. The app writes its `APP_KEY` to this file on the first request, and the wizard saves your database settings to it. If the web-server user cannot write to it, the wizard shows a warning at the top of the form and stops before touching the database, so you are never left half configured.

Leave APP\_URL blank

Do not set `APP_URL` in `.env` yourself. The setup wizard appears while it is blank (or if the database has no tables), and it writes the correct value for you once setup succeeds. You also do not need to fill in the database credentials by hand; just create the empty database from step 1 and enter its details in the wizard, which creates all the tables.

Now access your application at `https://your-domain.com` in your browser. Because `APP_URL` is still blank, every request is redirected to the setup wizard, which is the sign-up page. Work through it in order:

1. Enter the database connection: MySQL Host, Port, Database, Username and Password. The first four are pre-filled from the `DB_*` values in your `.env`. All five are required, so a MySQL user with a blank password is not accepted.
2. Press Test. The account fields below stay hidden until the connection succeeds, so this is not an optional check. If the database already contains an Event Schedule installation, Test says so and keeps the form disabled, which is what stops you overwriting an existing site.
3. Create the admin account: Email, Full Name and a password of at least 8 characters. This first account becomes the instance admin.
4. Accept the selfhosting terms, and optionally tick Report errors to the developers to help us improve the app (optional), which sets `REPORT_ERRORS=true` so crashes are sent to the developers.
5. Press Sign Up. The wizard runs the migrations first, and only writes to `.env` once they succeed, so a bad database never leaves you with a half-configured install. It then sets `APP_URL` to the address you loaded the wizard on, sets `APP_ENV=production`, saves the `DB_*` values, and creates the `public/storage` symlink.

The wizard does not configure email

Nothing on this screen sets up mail. `MAIL_MAILER` ships as `log`, which writes messages to `storage/logs/laravel.log` and delivers nothing, so ticket confirmations and verification emails will silently go nowhere until you edit the `MAIL_*` values yourself. See [Email Setup](docs__selfhost__email.md).

Everything else is configured by editing `.env` directly. If you ever run `php artisan config:cache`, re-run it (or `php artisan config:clear`) after each change, or the old values stay live.

### User Accounts and Registration

A selfhosted install is single user by default. The first account you create in the setup wizard becomes the instance admin, and after that the sign-up page is closed: visiting it sends you to the login page instead.

Most people never need to change this. Your audience does not need accounts to use the site: they can buy tickets, RSVP, leave post-event feedback, and submit fan photos, videos and comments as guests.

If you do want other people to be able to register on your server, enable it in `.env`:

.env
Copy

```
ALLOW_REGISTRATION=true
```

Anyone who registers can create schedules

There is no separate attendee-only role: a registered user can create their own schedules and events on your server. Only turn this on for a server you control access to, such as one on a private network or behind an authenticating proxy. If you want to host separate, independent tenants, run in SaaS mode with `IS_HOSTED=true` instead, which gives each schedule its own plan and settings.

### HTTPS and Session Cookies

Once `APP_ENV` is `production`, which is what the wizard writes, every generated link uses `https://`, and `SESSION_SECURE_COOKIE` ships as `true` so the session cookie is only sent over HTTPS. On a server reached over plain HTTP that combination looks like a broken login: the sign-in form accepts your password and returns you to the login page, because the browser never stored the session. Install a certificate, or for a local test install only, set `SESSION_SECURE_COOKIE=false`.

### Running Behind a Reverse Proxy

If Event Schedule sits behind a reverse proxy or CDN (Nginx, Apache, Cloudflare, or a control panel such as HestiaCP), tell it which proxies to trust so it reads the `X-Forwarded-Proto` and `X-Forwarded-For` headers those proxies set:

.env
Copy

```
TRUSTED_PROXIES=*
```

Use `*` to trust any proxy, or a comma-separated list of proxy IPs or CIDR ranges (for example `10.0.0.0/8,192.168.1.1`) when the origin server is reachable directly from the internet.

Symptoms of a missing value

Without this setting the application treats every request as plain HTTP even when the browser is on HTTPS, which can produce redirect loops, and it records the proxy's IP address as the visitor's IP in analytics and rate limiting.

## 5. Set Up the Cron Job

This step is not optional. One cron entry drives everything that happens on a timer rather than because somebody clicked: scheduled newsletters, reminder and feedback emails, calendar sync, and releasing unpaid ticket reservations back into stock. Email sent during a page request, such as a ticket confirmation, still goes out without it, so an install missing this line looks perfectly healthy while every timed job silently never runs.

Add the following line to your server's crontab:

crontab
Copy

```
* * * * * php /path/to/eventschedule/artisan schedule:run
```

### Adding the Cron Job

To edit your crontab, run:

bash
Copy

```
crontab -e
```

Add the cron line at the end of the file, making sure to replace `/path/to/eventschedule` with your actual installation path.

cPanel Users

If using cPanel, you can add cron jobs via the "Cron Jobs" section in your control panel without using the command line.

### No crontab? Request a URL instead

Shared hosting that cannot run a command every minute can drive the same schedule over HTTP. Set `APP_CRON_SECRET` in `.env` to a long random string, then have your control panel or any outside cron service request this address once a minute:

http
Copy

```
GET https://your-domain.com/translate_data?secret=YOUR_SECRET
```

Use one or the other, never both: each is a complete copy of the schedule, and two runners do some work twice. While `APP_CRON_SECRET` is empty, which is how it ships, the address refuses every request. An install driven this way reports a single heartbeat on the admin panel's [Queue](docs__selfhost__admin.md#system-queue) page rather than a result for each task.

### What the Scheduler Runs

A single minutely cron entry is enough because the scheduler decides internally what is due. The main jobs:

| Task | How often |
| --- | --- |
| Queue worker, which drains queued email, push and webhook jobs. It has nothing to do on the shipped `QUEUE_CONNECTION=sync` setting, where that work runs inside the web request instead | Every minute |
| Send scheduled newsletters, read the [feeds](docs__managing-schedules.md#feeds) that are due, and look up venue addresses for the [venue map](docs__selfhost__admin.md#venue-map) when it is set up | Every minute |
| Retry failed jobs, link the events a curator's source schedules publish onto that curator, and delete expired [Realtime](docs__selfhost__admin.md#realtime) records | Every 5 minutes |
| Google, Outlook and CalDAV calendar sync, AI translation, and the check for schedules that publish a private calendar | Every 15 minutes |
| Release unpaid ticket reservations, expire waitlist offers, charge installment payments, send feedback requests, appointment and carpool reminders, event graphic emails, the new-event digest to confirmed subscribers, interest-list emails (tickets on sale, and the reminder before the event), send your events to the Event Schedule network when [federation](docs__selfhost__federation.md) is on, and, with `CACHE_STORE=database`, delete expired cache entries | Hourly |
| Renew calendar webhooks, prune old logs and backups, delete personal data past its retention period, notify owners about new event requests, fan content and poll options, run auto imports, and check GitHub for a new release | Daily |
| Refresh the GeoIP database used for visitor-location analytics | Monthly |

Confirming it works

Run `php /path/to/eventschedule/artisan schedule:run` by hand first. It prints the tasks it ran, or "No scheduled commands are ready to run", and any error it prints is what cron would have hit silently. To then prove cron itself is firing, append your own redirect to the crontab line (`>> /path/to/cron.log 2>&1`) and check that file a couple of minutes later. If it stays empty, cron is not running the command: make sure the `php` in your crontab is the same binary the site uses, and that the path to `artisan` is absolute.

## Verification

After completing the installation, verify everything is working correctly:

1. Access the application: Visit `https://your-domain.com` and confirm the homepage loads
2. Sign in: Log in with the admin account you created in the wizard. There is no second registration step: sign-up is closed once that account exists, unless you set [`ALLOW_REGISTRATION=true`](#user-accounts)
3. Create a schedule: Create a test schedule and add an event, then open its public page to confirm images load
4. Check the cron job: Run `php artisan schedule:run` once by hand and confirm it completes without an error, then check the redirect file from [step 5](#cron) to confirm cron is calling it too
5. Check logs: Review `storage/logs/laravel.log` for any errors

Need Help?

If you encounter any issues during installation, check the [GitHub Issues](https://github.com/eventschedule/eventschedule/issues) or open a new one.

### Next Steps

Now that Event Schedule is installed, you may want to:

- Configure [email delivery](docs__selfhost__email.md), which nothing else works properly without
- Configure [Stripe, PayPal, Payfast or Razorpay](docs__selfhost__stripe.md) for ticket sales
- Add a [Gemini or OpenAI key](docs__selfhost__ai.md) to turn on AI event import, agenda scanning and translation
- Set up [Google Calendar integration](docs__selfhost__google-calendar.md)
- Set up [Outlook Calendar integration](docs__selfhost__microsoft-calendar.md)
- Let ticket buyers save their ticket to [Google Wallet](docs__selfhost__google-wallet.md) (optional)
- Set up [Twilio](docs__saas__twilio.md) to verify phone numbers by text message and to create events from WhatsApp messages (`TWILIO_SID`, `TWILIO_AUTH_TOKEN`, `TWILIO_FROM_NUMBER`). A selfhosted install never texts or emails an invitation to a venue or performer you added
- Add [Google keys](#google-keys) for venue coordinates, map images and YouTube search (optional)
- Switch on the [venue map](docs__selfhost__admin.md#venue-map), a map of a schedule's venues on its public page, by naming an address search service (optional, off by default)
- Enable [push notifications](#push-notifications) with OneSignal (optional)
- Add a [Turnstile challenge](#spam-protection) to your public forms (optional)
- Turn on [federation](docs__selfhost__federation.md) to share your public events with the eventschedule.com listings (optional, off by default)
- Tour the [admin panel](docs__selfhost__admin.md), where you can watch the queue, read logs, edit translations and change platform settings

## Keeping the Install Up to Date

An upgrade is one step, from the browser or from the server. Either way it downloads the new release, installs it, runs any new migrations and clears the cached config, routes and views.

1. Take a backup first: the database, the `storage` directory and the `.env` file. `.env` holds `APP_KEY`, and without that key the payment credentials users saved cannot be read.
2. In the browser: sign in as an instance admin and open Settings > App Update, which shows your installed version next to the latest release and offers an Update button when a newer one is out. The same is on [Admin > System > App Update](docs__selfhost__admin.md#system-app-update), where a badge on the System tab says a release is waiting. Other accounts do not see the tab. An old install that has no instance admin at all still shows it to every signed-in account.
3. Or on the server: run `php artisan app:update`.

bash
Copy

```
cd /path/to/eventschedule
php artisan app:update
```

The Update button runs as the web-server user and has to replace every file of the app, so on an install where that user can write only to `storage`, `bootstrap` and `public` (the [file permissions](#permissions) step), it stops and says so without changing any file of the app. On such an install only root can write every file, so run `sudo php artisan app:update` on the server instead, then run the ownership command from the file permissions step again, because anything the update creates under `storage` belongs to root until you do.

Your uploads, custom translations and anything else under `storage/app/` are excluded from the update by design, so they survive it. The `vendor` directory is not: it is replaced with the release's own copy, so a package you added with `composer require` is gone after the next update. The latest version is looked up once a day by the [scheduler](#cron); Check for Updates on the admin page asks GitHub straight away.

If the App Update screen is not there at all, or a large update outruns PHP's `max_execution_time`, use the command: it works on every install, has no time limit and does not depend on the screen. That is also the way back from an older release whose UI hid the update button.

A server whose PHP runs OPcache with `opcache.validate_timestamps=0` keeps serving the old code after the files change: reload PHP-FPM (or your web server) once the update has finished.

## Push Notifications (Optional)

Event Schedule can send browser and mobile web push notifications alongside the emails it already sends, using [OneSignal](https://onesignal.com). The same moments trigger both: a ticket sale, a booking request accepted or declined, new feedback, a waitlist opening, a finished backup export or import. Push is **off by default**: if you do not configure it, no push SDK is loaded and your installation makes no calls to OneSignal.

To enable it, create a free OneSignal app (Web platform), then set these values in your `.env`:

.env
Copy

```
ONESIGNAL_APP_ID=your-onesignal-app-id
ONESIGNAL_REST_API_KEY=your-onesignal-rest-api-key
```

Both values are needed; with only one set, push stays off. There is also an optional `ONESIGNAL_SAFARI_WEB_ID`, which you only need for legacy macOS Safari web push.

What turning this on shares

Enabling OneSignal loads its SDK from OneSignal's CDN and sends notification data to OneSignal's servers. Visitors choose to opt in per device; nothing is sent until they allow notifications.

Once configured, the **Notifications** row of the **Settings** tab on a schedule's edit page gains a **Push notifications** panel, with **Enable push on this device** and, after that, **Send test push**. Opting in is per device, so each browser you want alerts on has to be enabled separately. Apple iOS only supports web push for sites the visitor adds to their home screen (iOS 16.4+); Android and desktop browsers work without installation.

## Spam Protection (Optional)

Event Schedule can put a [Cloudflare Turnstile](https://www.cloudflare.com/products/turnstile/) challenge in front of the forms a stranger uses to sign in, pay, book or post. Turnstile is invisible to most visitors and needs no puzzle-solving.

Once configured, the challenge is added to:

- Sign in, sign up and password reset
- Ticket checkout and gift card purchases
- RSVPs and appointment bookings
- Events submitted by guests through a schedule's submission page, and booking requests
- Fan photo, video and comment submissions

The two forms that ask for an email address and nothing else never show the challenge: a schedule's sign-up panel and an event's **Notify me** list. Both are guarded by a hidden honeypot field and by rate limits on the visitor's IP address and on the email address instead.

Create a free Turnstile widget for your domain, then set both values in your `.env`:

.env
Copy

```
TURNSTILE_SITE_KEY=your-turnstile-site-key
TURNSTILE_SECRET_KEY=your-turnstile-secret-key
```

Both keys are required

If either one is missing the challenge is skipped entirely, so a half-filled configuration leaves those forms unprotected without any warning. Enabling Turnstile loads Cloudflare's widget script on the affected pages.

Turnstile is deliberately inactive on tenant custom domains, because a site key is registered against specific hostnames and would fail to validate on a domain you do not control. If you run a multi-tenant SaaS with [custom domains](docs__saas__custom-domains.md), expect those pages to fall back to no challenge.

## Google Maps and YouTube Keys (Optional)

Two Google API keys switch on the map and video features below. Both are off when unset, and nothing is sent to Google. Create them in the [Google Cloud Console](https://console.cloud.google.com/apis/credentials), enable the APIs named for each, and add them to `.env`:

.env
Copy

```
BACKEND_GOOGLE_KEY=your-server-key
MAPS_API_KEY=your-browser-key
```

| Variable | APIs to enable | What it turns on |
| --- | --- | --- |
| `BACKEND_GOOGLE_KEY` | Geocoding API, Maps Static API, YouTube Data API v3 | Your server uses it. It finds a venue's coordinates when the schedule is saved, adds the **Validate Address** button under an address, draws the map picture on an event page, and searches YouTube when someone adds a video. The coordinates also give a [Google Wallet](docs__selfhost__google-wallet.md) pass its arrival notification. |
| `MAPS_API_KEY` | Maps Embed API | A visitor's browser uses it. It puts an interactive Google Map of the venue on an event page. The map loads only after the visitor allows marketing cookies or asks to see it, and it is never shown on a schedule's own custom domain. |

Restrict the browser key to your own domain in the Cloud Console, because anyone can read it in the page. If you replaced the privacy policy at [Legal Pages](docs__selfhost__admin.md#system-legal-pages), name Google Maps in yours: the bundled policy lists it once either key is set.

The venue map is separate

The map of a schedule's venues on its public page never uses Google. It needs an OpenStreetMap-style address search of its own, set with `MAP_GEOCODER_URL` and `MAP_TILE_URL`. See [Venue map](docs__selfhost__admin.md#venue-map) in the admin panel guide.

## Troubleshooting

### "Permission denied" writing storage/logs/laravel.log

The web-server user cannot write to `storage` (and often `.env`). Re-run the ownership and permission commands from the [file permissions](#permissions) step, making sure to use the user your web server actually runs as. On Alpine-based Docker images that is the numeric UID `82`, not `www-data`.

### A 500 error, or you can't get back to the setup wizard

This usually means the database has no tables yet (migrations did not run). The setup wizard reappears automatically whenever the database is empty, so fix the underlying cause (database privileges or the file permissions above) and reload the page to run setup again.

Manual fallback

If the wizard still does not appear, open `.env`, clear the `APP_URL` value so it is blank, and reload. The wizard will run again and rewrite `APP_URL` once setup succeeds.

### Sign Up answers "Page Expired" (419)

The site is on plain HTTP. `.env.example` ships `SESSION_SECURE_COOKIE=true`, so the browser never stores the session cookie over HTTP and every form fails its security check. **Test** still works, which makes it look as if only Sign Up is broken. Browsers treat `http://localhost` as secure, so you see this on a LAN address or a hostname, not on localhost. Install a certificate, or for a test install only set `SESSION_SECURE_COOKIE=false` (see [HTTPS and Session Cookies](#environment)).

### No email is ever delivered

Start with `MAIL_MAILER`, which ships as `log`. That writes the whole message into `storage/logs/laravel.log` instead of sending it, so finding your "missing" emails in that file confirms the diagnosis. Set your real mail credentials as described in [Email Setup](docs__selfhost__email.md).

If only the timed messages are missing (reminders, feedback requests, scheduled newsletters) while ticket confirmations arrive normally, the mail configuration is fine and the [cron job](#cron) is not running. If you have switched `QUEUE_CONNECTION` away from the shipped `sync` value, a growing `jobs` table is the same symptom: nothing is draining the queue.

### Uploaded images do not load

Uploads are served through a `public/storage` symlink that setup creates for you. If `public` was not writable at the time, setup carries on without it and images 404 afterwards. Fix the ownership from the [file permissions](#permissions) step, then create the link yourself with `php artisan storage:link`.

### Ticket QR codes don't scan, or the site answers on `/public`

Your web server's document root must point at the `public` directory inside the project, not at the project folder itself. When the root is set one level too high, the app answers on both `https://your-domain.com/` and `https://your-domain.com/public/`, and links generated from a page you reached through `/public/` carry that segment too.

The give-away is that the same ticket shows one QR code when opened from a confirmation email and a different one when opened from the Sales page. Fix the document root, then confirm that `APP_URL` in `.env` exactly matches the address people use to reach the site. `APP_URL` is what the app trusts when it builds the URL inside a ticket's QR code, so it must include a sub-path if you genuinely serve the app from one.

Already-issued QR codes keep the old address

QR codes printed or emailed before you correct `APP_URL` keep pointing at the old address. Re-send the ticket email to reissue them.

## Custom translations

Rename built-in UI terms (for example "Talent" to "Artist", or "Curator" to "Event Planner") without your changes being wiped out by `php artisan app:update`.

Prefer the admin panel

The easiest way to customize translations is the [Translations page](docs__selfhost__admin.md#system-translations) in the admin panel (System > Translations): search every string, edit any language, and optionally share improvements with the community. Hand-made files described below keep working and are adopted into the editor automatically.

Drop a PHP file in:

path
Copy

```
storage/app/lang/{locale}/{file}.php
```

The admin editor manages three files: `messages.php` (UI strings), `accessibility.php`, and `marketing.php`. List the keys you want to change and nothing else; the bundled translations fill in the rest:

php
Copy

```
<?php
// storage/app/lang/en/messages.php
return [
'talent' => 'Artist',
'talents' => 'Artists',
'curator' => 'Event Planner',
'curators' => 'Event Planners',
];
```

Create one directory per locale you want to override (`en`, `es`, `fr`, …). The full list of supported locales lives in `config/app.php` under `supported_languages`.

Files for any other group, such as `validation.php` or `auth.php`, are honored the same way. They simply sit outside the admin editor, which never rewrites or prunes them.

Why this works

Changes apply on the next request, no cache clear is required (with OPcache set to `opcache.validate_timestamps=0`, reload PHP-FPM after editing a file by hand; the admin editor refreshes the files it writes itself). `storage/app/` is gitignored, so your overrides survive `php artisan app:update`, `git pull`, and fresh checkouts. New keys added in future releases continue to show their bundled English (or translated) value until you override them.

## Custom dashboard links

Add up to three custom links to the sidebar of the admin portal (for example a support site, community forum, or internal tool). They appear for everyone signed in, just below the Newsletters link, and open in a new tab. This works in both selfhosted and SaaS deployments.

Set the following variables in your `.env` file. A link only appears when both its title and URL are filled in, so you can configure one, two, or three links:

.env
Copy

```
CUSTOM_LINK_1_TITLE="Support"
CUSTOM_LINK_1_URL="https://support.example.com"
CUSTOM_LINK_2_TITLE="Community"
CUSTOM_LINK_2_URL="https://community.example.com"
CUSTOM_LINK_3_TITLE=
CUSTOM_LINK_3_URL=
```

Reload cached config

If you have run `php artisan config:cache`, re-run it (or `php artisan config:clear`) after editing `.env` so the new links take effect.

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/selfhost/installation.blade.php)
