# Event Schedule Documentation: User Guide, Selfhost, API

> **Fonte / Source:** https://eventschedule.com/docs

---

Self-managed
12 pages

### Selfhost

Run Event Schedule on your own server. A selfhosted install resolves to Enterprise, so no plan gate applies.

crontabCopy

```
* * * * * php /path/to/eventschedule/artisan schedule:run
```

The cron entry behind reminder emails, calendar sync and released reservations.
[Installation, the cron job](docs__selfhost__installation.md#cron)

- [Overview](docs__selfhost.md)
- [Installation](docs__selfhost__installation.md)
- [Stripe](docs__selfhost__stripe.md)
- [Google Calendar](docs__selfhost__google-calendar.md)
- [Google Wallet](docs__selfhost__google-wallet.md)
- [Outlook Calendar](docs__selfhost__microsoft-calendar.md)
- [Email](docs__selfhost__email.md)
- [AI](docs__selfhost__ai.md)
- [Boost](docs__selfhost__boost.md)
- [Admin Panel](docs__selfhost__admin.md)
- [Federation](docs__selfhost__federation.md)
- [Accessibility](docs__selfhost__accessibility.md)
