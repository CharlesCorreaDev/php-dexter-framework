# Organizations Properties and Profiles · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Organizations-Properties-and-Profiles

---

# Organizations, Properties and Profiles

OWA describes what it watches in three tiers. You will see all three named in the
reporting and settings screens, so it is worth knowing which is which.

| Tier | What it is |
| --- | --- |
| **Organization** | You, or your company. Everything else belongs to it, and users belong to it. Most installations have exactly one and never think about it again. |
| **Property** | A website. `example.com` is a Property. |
| **Observation Profile** | A way that website is watched. Reports are scoped to a Profile, and so is the tracking tag. |

A Property can have more than one Profile — for example a live Profile and one
you use for testing — and they collect separately. Most installations have one
Profile per Property, which is the shape a fresh install starts in.

If you are upgrading, every site you already tracked became a Profile, with a
Property created for it. Nothing you collected moved.

## Settings follow the hierarchy

Some settings are set per Profile rather than once for the whole installation:

- excluded IP addresses
- IP anonymisation
- host name resolution
- logging named users
- new visitor announcements, and the address they go to

A Profile that sets nothing of its own inherits from its Property, and a Property
from the Organization. So you can set an exclusion once at the Property and have
every Profile under it honour that, or override it on a single Profile.

This means a setting you changed before upgrading now applies to the Profile it
came from, not to everything. If you rely on an IP exclusion, check it is set at
the tier you expect.

## Removing a Profile or a Property

**Nothing is destroyed.** Removing either one archives it. Access grants, settings
and every row of collected data stay exactly where they are, and clearing the
archived date brings it all back.

That matters most for the thing an archive has to get right: **an archived Profile
stops collecting.** The tracking tag is still on your pages and still firing — it
does not know anything happened — so anything less than a full stop would leave a
site you believe you deleted quietly recording. An archived Profile also disappears
from the site lists and cannot be reported on, even by pasting in a URL.

**Removal cascades downward only.**

- Deleting a **Property** archives its Profiles with it.
- Deleting a **Profile** never touches its Property.

An empty Property is a perfectly good state to be in — it is what lets you start a
website's Profiles over without losing the Property itself.

## Related

- [Installation](Installation.md) — a fresh install creates one of each
- [User Permissions](User-Permissions.md) — who can see which Profiles
- [Configuration](Configuration.md) — settings that are set once for the whole installation
