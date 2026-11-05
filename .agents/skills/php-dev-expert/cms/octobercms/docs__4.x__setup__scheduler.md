# Setting Up the Scheduler - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/setup/scheduler.html

---

# Setting Up the Scheduler

Learn how to run scheduled tasks and queues.

- [Setting Up Queue Workers](docs__4.x__setup__scheduler.md#setting-up-queue-workers)
- [Cron Without Command Line](docs__4.x__setup__scheduler.md#cron-without-command-line)

For scheduled tasks to operate correctly, add the following [Cron job  (opens new window)](https://www.cyberciti.biz/faq/how-do-i-add-jobs-to-cron-under-linux-or-unix-oses/) to the server:

```
* * * * * php /october/artisan schedule:run >> /dev/null 2>&1
```

Be sure to replace `/october/artisan` with the absolute path to the artisan file in the October CMS installation directory. This cron job will call the command scheduler every minute. Then October CMS evaluates any scheduled tasks and runs the due tasks.

When adding a crontab file to /etc/cron.d, specify a user name after `* * * * *`:

```
* * * * * alice php /october/artisan schedule:run >> /dev/null 2>&1
```

## [#](#setting-up-queue-workers) Setting Up Queue Workers

You may optionally set up a queue driver for processing [queued jobs](docs__4.x__extend__services__queue.md). The queue driver can be configured in the `config/queue.php` file.

For the database queue driver, you can set up a cron job running the command that invokes the first job available in the queue: `php artisan queue:work --once`.

```
* * * * * php /october/artisan queue:work --once >> /dev/null 2>&1
```

Alternatively, it is possible to run the queue as a daemon process with

```
php artisan queue:work
```

## [#](#cron-without-command-line) Cron Without Command Line

If the cron table is not made available by your web host, you can instead call a public URL every X number of minutes. For example, if a plugin requires that you run the following command every 15 minutes.

```
php artisan campaign:run
```

This requires some PHP coding as a solution, using the `Artisan` facade along with a [routes file](docs__4.x__extend__system__routing.md) to build an endpoint that calls this command. For example, a **routes.php** file may contain the following.

```
Route::get('/campaign-run', function () {
    return Artisan::call('campaign:run');
});
```

When opening the URL `/campaign-run` the artisan command will be called.

#### [#](#see-also) See Also

- [Task Scheduling](docs__4.x__extend__system__scheduling.md)
- [Queues](docs__4.x__extend__services__queue.md)

← [Directory Structure](docs__4.x__setup__directory-structure.md)[Deployment](docs__4.x__setup__deployment.md) →
