# Troubleshooting · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Troubleshooting

---

This page outlines ways to troubleshoot OWA installations. Please try these steps *BEFORE* filing support issues.

## Installation Issues

The most common causes of problems/errors during installation relate to how your server environment is setup.

1. Read the [Technical Requirements](Technical-Requirements.md) and make sure that you are running supported version of PHP and MySql.
2. Prefer running OWA under a fully qualified domain such as `my.domain.com`. Tracking does work under `localhost` or a bare IP address on current browsers — the often-repeated claim that the tracker's cookies are rejected there is not true of a modern browser, which accepts them as host-scoped cookies. What a single-label host does cost you is data quality: the referrer check that decides whether a visit is first-party compares hosts including the port, so `localhost:8080` and `localhost` are treated as different sites, and a single-label host other than `localhost` itself records no host dimension. Both degrade reports rather than stopping tracking.
3. OWA needs to write out its config file snd certain cache files. Make sure the directory that you are installing OWA into is writable by whatever user your web server is running under.
4. OWA needs access to a MySql database. Double check that your MySql database is accessible and that the login that your configure OWA to use has the ability to create and alter tables.
5. Make sure that the public URL you specified in your `owa-config.php` file is correct and uses the correct protocol (http or https).
6. Make sure you followed all steps to checkout the project from Github if you don´t using an packaged release [https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Installing-from-Github](Installing-from-Github.md) (Check if there is an vendor directory)

## Tracking Issues (javascript tracker)

These steps are helpful for debugging situations where OWA was installed correctly but tracking data is not being recorded or showing up in reporting.

1. The Javascript tracker must be accessible to browsers. Try to load the URL to your tracker file (`public/base/dist/owa.tracker.js`) directly in your browser.
2. If the tracker file is reachable then ensure that you are [properly including the tracking tag](Javascript-Tracker.md) on each page of your web app that you want OWA to track. To tell if the tracking is being includes simply "view Source" of your website and search for "owa".
3. If the tag is being inserted properly then open your browser's "inspector" tool and look for any javascript errors that might be occurring.
4. If you don't see any JavaScript errors, switch to the inspector's "network" tab and then reload your webpage. If the tracker is working then you should see one or more requests to log.php in the network inspector. If you don't see a request to log.php that means the tracker is not sending data to OWA on the server and you should double check that the tag is inserted properly and that there are no javascript errors.
5. If you see the log.php request being made by the browser, note the HTTP response code.

   - `200` — the normal answer to a `GET` beacon, which is returned as a 1x1 GIF.
   - `302` — the normal answer to a `POST` beacon, which is redirected to `blank.php`. This is expected, not an error.
   - `500` — OWA is not installed correctly.
   - `404` — the public URL in your tracker tag is pointing to the wrong place.

   **A `200` or `302` does not by itself mean the event was recorded.** `log.php` sends its whole response before OWA is even started, so that the browser is never kept waiting on logging. Anything OWA later decides — an unregistered site id, a rejected value — happens after the response has gone and can only be seen in the error log. Use the log, not the status code, to confirm an event was stored.
6. If log.php is answering normally but you are still not seeing any data, try clearing OWA's cookies — the visitor cookie `owa_v`, and the session cookie, which carries the site id in its name and so is `owa_s_<site id>` rather than `owa_s`. These could be present from earlier debugging attempts and might be confusing OWA when it tries to process the tracking requests made by log.php.
7. If log.php requests result in a `200` HTTP response code but you are still not seeing any data, then ensure you are using the correct `site ID` in your tracking tag, and viewing that particular site ID in the reporting interface (the site control at the top of each report).
8. If there's still no requests in the network tab make sure your browser does not send doNotTrack properties.

## Nothing is being recorded

**The site id in your tracking code is not one this installation has.** OWA refuses tracking events naming a site it does not know about, and says so in the error log:

```
Not logging event: site id "your_site_id" is not registered on this installation.
```

The commonest cause is the documentation placeholder left in place. Your real site id is the **Tracking ID** on the Observation Profile's own screen — pick the Profile from the site control at the top of the admin interface — and is what `cmd=add-site` prints when it creates one.

It is also worth checking for a **truncated** id. Ids seen in real installations have been cut short at various lengths by a template or a CMS field with a length limit, which produces a value that looks plausible and matches nothing.

**Why refusing rather than recording it:** reporting is entered through a site, so data recorded under a site id that does not exist can never be displayed. It would accumulate silently, count against the database, and never appear anywhere.

## Scheduled Jobs

**"OWA's Job Scheduler is not running" appears at the top of every admin page.**
OWA has no record of the scheduler ever having run, which almost always means its cron entry is missing. Add it to the crontab of the user that owns your OWA files:

```
* * * * * cd /path/to/owa && php cli.php cmd=schedule-run
```

**A job is not running and you want to know why.** Run:

```
/path/to/php cli.php cmd=schedule-status
```

It works through the possible causes and names the first that applies, rather than reporting only that something is behind: schema updates pending, the scheduler disabled in config, the job disabled, a lock held by a run that died, a job failing with its reason, or the dispatcher not running at all.

**`rotate-partitions` refuses with "no fact table is partitioned".** Expected on an installation that has not been converted yet. Partitioning is not applied automatically to an existing database. See [Partitioning Fact Tables](Partitioning-Fact-Tables.md).

**Jobs refuse with a message about pending updates.** The dispatcher will not run anything while the schema is behind. Run `cli.php cmd=update`.

## General Debugging

OWA generated a lot of debugging information for ever request it receives. Here's how to access that info:

1. Turn on debugging mode by uncommenting `define('OWA_ERROR_HANDLER', 'development');` in your `owa-config.php` file. Debugging output will beginning on the next tracking or admin request.
2. View the debug output in OWA's error log file located at `/path/to/owa/owa-data/logs/errors\_xxxxxxx.txt
3. OWA's error log file will contain a step by step walk-through of exactly what steps OWA is performing for each request. Find the request you re looking for (usually the last one), and see if there are any errors present or exactly where OWA is getting stuck.
