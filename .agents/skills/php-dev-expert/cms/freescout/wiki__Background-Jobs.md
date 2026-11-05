# Background Jobs · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Background-Jobs

---

Queued jobs are processed by `schedule:run` cron task. This task runs `queue:work` daemon which processed queued jobs. You can view jobs status under `Manage » System » Jobs` (normally there should be zero jobs in the queue).

### If jobs are not being processed

**1)** Run `php artisan freescout:check-requirements` command and make sure that `pctl` extension is installed in your console PHP (without this extension FreeScout can't kill processes that get stuck).

*When running the command make sure to use the same PHP as in your [cron jobs](wiki__Installation-Guide.md#9-configuring-cron-jobs). For example if in your cron you are using `/usr/local/bin/php-8.0` run the command as: `/usr/local/bin/php-8.0 artisan freescout:check-requirements`*

**2)** Run `ps aux | grep queue` command to check if `queue:work` daemon is running:

```
ps aux | grep queue
freescout  5534  0.0  0.0   9540  2292 ?        S    02:01   0:00 sh -c php 'artisan' queue:work --queue='emails' --tries=7 --sleep=3
freescout  5535  0.0  0.1 284580 34116 ?        S    02:01   0:00 php artisan queue:work --queue=emails --tries=7 --sleep=3
```

If there are more than 2 processes running, clear application cache (see #3) or kill them manually:

```
kill -KILL 5534 5535
```

**3)** If `queue:work` daemon is not running , make sure that you have `schedule:run` cron task [configured](wiki__Installation-Guide.md#10-configuring-cron-jobs).

**4)** Clear application cache to restart all `queue:work` daemons:

```
php artisan freescout clear-cache
```

**5)** Check daemon log: `/storage/logs/queue-jobs.log`
