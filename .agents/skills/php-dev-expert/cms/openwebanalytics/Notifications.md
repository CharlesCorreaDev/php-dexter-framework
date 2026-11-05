# Notifications · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Notifications

---

# Notifications

Notifications are the messages shown in OWA's admin interface — currently
release announcements, so you find out an upgrade exists without going looking.

Every signed-in user sees them, whatever their role. They are per-user: marking
one read or dismissing it affects only your own account.

## Where they come from

A scheduled job fetches release announcements and stores them. It runs on OWA's
scheduler, so it needs [the cron entry](Scheduled-Jobs.md) to be in place — the
same single line everything else periodic runs from.

It ships registered, on a daily schedule derived per installation rather than a
fixed hour, so that every OWA install does not call the same endpoint at
midnight.

You can also run it by hand:

```
php cli.php cmd=fetch-notifications
```

The job is idempotent. It sees the same releases every run and stores only the
ones it does not already have, so running it twice does not produce duplicates.

## Why it is a job rather than a page load

This replaced a design that called an external API **during every dashboard
render** — uncached, never stored, and in the critical path. A slow network made
the dashboard slow, and an unreachable endpoint made it slower.

Fetching on a schedule and storing the result means the dashboard reads its own
database, and a network problem delays the news rather than the page.

## Turning it off

It is an ordinary scheduled job, so it is turned off the way any job is, in
`owa-config.php`:

```
define('OWA_SCHEDULED_JOBS', array(
    'fetch-notifications' => array( 'schedule' => 'off' ),
));
```

Nothing else changes; you simply stop receiving new announcements.

## For developers

Three REST endpoints back the UI — list, mark read, and dismiss. All require the
`view_site_list` capability, which is what every signed-in role carries. See
[REST API](REST-API.md).

One thing to know if you consume the list: it is **not paged**, deliberately.
The unread badge is the length of the list, so a paged response would show a
count of one page rather than a count of notifications.

## Related

- [Scheduled Jobs](Scheduled-Jobs.md) — the scheduler this runs on
- [Keeping an Install Healthy](Keeping-An-Install-Healthy.md) — everything periodic, in one place
- [REST API](REST-API.md) — the endpoints
