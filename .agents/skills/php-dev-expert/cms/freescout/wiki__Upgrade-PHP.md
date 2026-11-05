# Upgrade PHP · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Upgrade-PHP

---

If you need to upgrade PHP version, do the following:

1. Update FreeScout to the latest version.
2. Upgrade PHP to the new version.
3. Try to clear the cache using `php artisan freescout:clear-cache` console command or via `https://your-freescout.com/tools.php` script ([read more](wiki__Clearing-the-Cache.md)).
4. Now if FreeScout does no open showing an error, manually delete all the files from `bootstrap/cache`, `/storage/framework/cache/data` and `/storage/framework/views` and repeat step 3)
