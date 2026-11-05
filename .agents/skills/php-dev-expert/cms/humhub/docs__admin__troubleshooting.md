# Troubleshooting & Help | HumHub Documentation

> **Fonte / Source:** https://docs.humhub.org/docs/admin/troubleshooting

---

On this page

This guide provides some assistance for common administrative problems.

Docker

On the [Docker installation](docs__admin__installation-docker.md) most of the server-specific issues below (cron, php.ini, permissions) do not apply. To inspect what a container is doing, use `docker compose logs -f humhub`, and run console commands via `docker compose exec humhub /app/yii <command>` (see [Command Line Interface](docs__admin__console.md)).

## Cron Job Setup[â](#cron-job-setup "Direct link to Cron Job Setup")

The cron setup can be frustrating and it's hard to provide a guide for every possible server environment. There is a
[community driven wiki](https://community.humhub.com/s/installation-and-setup/wiki/page/view?title=Cron+Job+Setup) with
examples of cron settings for different environments. Furthermore refer to the [Cron Job Setup](docs__admin__cron-jobs.md) guide if not already done.

Please check the following known issues before opening an issue:

- Are you using the right executable for your cron command.

Make sure you are using **php-cli** instead of **php-cgi** and that your php is pointing to the same installation/configuration
as your apache server. You can check the installed php and installed packages by running the following commands:

```
> php -v

> php --ini
```

In case you still need help please add the following information to your issue description:

- Do you have access to setup Cron Jobs?
- Does your server use Cron or Crontab?
- Does your server use a third-party Cron Job provider?
- Are you using VPS or Dedicated/Shared/Other Hosting?
- Can you provide screenshots of your Cron Job settings? (With personal information blurred out!)
- What type of server are you using? (CloudLinux CentOS 6, Windows IIS, or etc)

## Clear cache[â](#clear-cache "Direct link to Clear cache")

Especially after manually updating HumHub or a module by git, you'll may have to clear the cache and update the asset files.

The cache can be cleared either in the admin section `Administration -> Settings -> Advanced -> Caching - > Save & Flush` (this will also reset the asset files), or
by console by [console](docs__admin__console.md#cache). When not using the administration backend, you'll have to manually clear the asset files by deleting the content of
`@humhub/assets/*` folder.

## Data Integrity[â](#data-integrity "Direct link to Data Integrity")

Some problems may be triggered by data integrity issues, especially if you use a `myisam` database.

The integrity check can be used to ensure the data integrity of your modules.
You can run the integrity check with the following command:

```
cd protected

php yii migrate/up --includeModuleMigrations=1

php yii integrity/run
```

## Search index[â](#search-index "Direct link to Search index")

Especially when using the default [search index](docs__admin__search.md) you may have to rebuild the search index from time to time.
You should consider switching to another search provider if your user base or amount of content grows.

Please refer to the [Search System](docs__admin__search.md) part for more information about the search in HumHub.

## Error after update[â](#error-after-update "Direct link to Error after update")

- Check the version and compatibility of installed modules
- Check the compatibility of your module
- Check the [Theming Migration](https://github.com/humhub/humhub/blob/develop/docs/develop/theme-overview.md) guide.
- Check `Administration -> Information -> Database` or run `php yii migrate/up --includeModuleMigrations=1` to check for faulty migrations

> Note: Please always backup your installation prior to an update

## Support Community[â](#support-community "Direct link to Support Community")

There is also an active support community at: <https://community.humhub.com>

## Debug Mode[â](#debug-mode "Direct link to Debug Mode")

Enabling Debug Mode:

1. Create a new file called `.env` in the project root.
2. Copy the contents of `.env.example` into the newly created `.env` file.
3. Ensure that the value of `HUMHUB_DEBUG` is set to `1`.

To see which mode HumHub is currently operating in, navigate to `Administration > Information`. To access log entries, go to `Administration > Information > Logging`

## Github - Bugtracker[â](#github---bugtracker "Direct link to Github - Bugtracker")

**How to file a bug**

- Go to our issue tracker on GitHub: <https://github.com/humhub/humhub/issues>
- Search for existing issues using the search field at the top of the page
- File a new issue including the info listed below

**When filing a new bug, please include:**

- Descriptive title - use keywords so others can find your bug (avoiding duplicates)
- Specific and repeatable steps that trigger the problem
- What happens when you follow the steps, and what you expected to happen instead.
- Include the exact text of any error messages if applicable (or upload screenshots).
- HumHub version (or if you're pulling directly from Git, your current commit SHA - use git rev-parse HEAD)
- Did this work in a previous version? If so, also provide the version that it worked in.
- OS/PHP/MySQL version
- Modules? Confirm that you've tested with Debug > Reload Without Extensions first (see below).
- Any errors logged in Browser: Debug > Show Developer Tools - Console view
- Try to reproduce the error on our HumHub Demo hosting
- If the error occurred during an update, describe the method of the update and specify the previous version number.

## Direct Support (Professional Edition only)[â](#direct-support-professional-edition-only "Direct link to Direct Support (Professional Edition only)")

As Enterprise Edition user you can create direct support inquiries at:
`Administration -> Enterprise Edition -> Support`.

If you have problems related to the installation, please contact us at: [info@humhub.com](mailto:info@humhub.com)

## Common issues and problems[â](#common-issues-and-problems "Direct link to Common issues and problems")

### Unable to write cache file '/var/www/humhub/protected/runtime/cache/hu/humhub119...f.bin':[â](#unable-to-write-cache-file-varwwwhumhubprotectedruntimecachehuhumhub119fbin "Direct link to Unable to write cache file '/var/www/humhub/protected/runtime/cache/hu/humhub119...f.bin':")

This problem is often caused when the HumHub application is used by different system users.  
The reason for this error could be, that the [cron jobs](docs__admin__installation.md#cronjobs) (or other [command line calls](docs__admin__console.md)) have been executed under a different user.

To resolve the problem, we recommend that you [reset the file/directory owner](docs__admin__installation.md#file-permissions) for the entire HumHub directory or delete the `/protected/runtime/cache` directory.

### ErrorException: Maximum execution time of 30 seconds exceeded in /var/www/humhub/...:[â](#errorexception-maximum-execution-time-of-30-seconds-exceeded-in-varwwwhumhub "Direct link to ErrorException: Maximum execution time of 30 seconds exceeded in /var/www/humhub/...:")

The problem occurs if the processing of a request takes longer than 30 seconds but a time limit is configured in the PHP configuration file.

To fix this, the following variable must be increased in the file 'php.ini':

```
; Maximum execution time of each script, in seconds

; https://php.net/max-execution-time

; Note: This directive is hardcoded to 0 for the CLI SAPI

max_execution_time = 300
```

The location of the php.ini depends on the used operating system/Linux distribution and configuration.

Common locations are: `/etc/php/php.ini`, `/etc/php/7.3/fpm/php.ini`, `/etc/php/7.3/apache2/php.ini`

note

Please note that after a change to the `php.ini` the PHP process e.g. Apache2 or PHP-FPM must be restarted!

### Curl error: #60 - SSL certificate problem: unable to get local issuer certificate[â](#curl-error-60---ssl-certificate-problem-unable-to-get-local-issuer-certificate "Direct link to Curl error: #60 - SSL certificate problem: unable to get local issuer certificate")

- Download the [certificate bundle](https://curl.haxx.se/docs/caextract.html).
- Place them in a path that is accessible for the PHP process.
- Adjust `php.ini` file(s):

```
curl.cainfo="C:/certs/certs.pem"
```

- Restart Webserver or PHP

See also:

- <https://web.archive.org/https://thisinterestsme.com/php-curl-ssl-certificate-error/>
- <https://webdev-training.de/tutorials/xampp/anleitung-fuer-das-ssl-zertifikatsproblem-unter-xampp-ssl-certificate-error-unable-to-get-local-issuer-certificate>

### E-Mail SMTP: Unable to connect with STARTTLS: stream\_socket\_enable\_crypto(): SSL operation failed...[â](#e-mail-smtp-unable-to-connect-with-starttls-stream_socket_enable_crypto-ssl-operation-failed "Direct link to E-Mail SMTP: Unable to connect with STARTTLS: stream_socket_enable_crypto(): SSL operation failed...")

The TLS connection to the specified e-mail server cannot be verified.

You can also reproduce this behavior also via the command line:

```
openssl s_client -starttls smtp -connect smtp.example.com:25
```

To disable the peer verification, in the E-Mail Settings (`Administration` -> `Settings` -> `Advanced` -> `E-Mail`) the transport type can be set to `DSN` with the following DSN syntax:

```
smtp://user:pass@smtp.example.com?verify_peer=0
```
