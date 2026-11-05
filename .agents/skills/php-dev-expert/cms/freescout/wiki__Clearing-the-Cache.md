# Clearing the Cache · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Clearing-the-Cache

---

There are 4 ways to clear application cache:

1. Go to `Manage » System » Tools` and click **Clear Cache**.
2. Or run the following console command:

```
php artisan freescout:clear-cache
```

3. If you don't have an access to the console, go to <https://your-freescout.com/tools.php>, enter application key (you can find it in /.env file in the root folder of your FreeScout), leave "Path to PHP" empty and click **Clear Cache**.
4. Remove cache files manually or use the following commands:

```
rm -f /path/to/freescout/bootstrap/cache/config.php
rm -rf /path/to/freescout/storage/framework/cache/data/*
rm -f /path/to/freescout/storage/framework/views/*
rm -f /path/to/freescout/storage/framework/sessions/*
rm -f /path/to/freescout/public/js/builds/*
rm -f /path/to/freescout/public/css/builds/*
```
