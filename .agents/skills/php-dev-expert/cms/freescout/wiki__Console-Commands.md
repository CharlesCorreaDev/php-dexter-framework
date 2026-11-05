# Console Commands · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Console-Commands

---

### Create user

```
php artisan freescout:create-user
```

This will guide you through setting up a new user for your FreeScout installation. You'll be prompted for a role (make sure to choose “admin”), first and last name, e-mail address and password. You can then use these when you first login.

### Clear cache

```
php artisan freescout:clear-cache
```

Clear application cache and cache the config.

### Fetch emails

Fetch all emails for the last 3 days:

```
php artisan freescout:fetch-emails --days=3 --unseen=0
```

Fetch emails from mailboxes.

### Build application

```
php artisan freescout:build
```

Build application assets.

### Build modules

```
php artisan freescout:module-build --module_alias=test
```

Build module or all modules (if module\_alias is empty).
