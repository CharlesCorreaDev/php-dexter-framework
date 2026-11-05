# Errors & Logging - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/setup/errors-logging.html

---

# Errors & Logging

Find errors and other log messages about your website.

- [Configuration](docs__4.x__setup__errors-logging.md#configuration)

When you first start using October CMS, error and exception handling is already configured for you. There are two ways the event log can be accessed:

1. The event log can be viewed in the file system by opening the file `storage/logs/system.log`.
2. Alternatively it can be viewed via the backend panel by navigating to **Settings → Event Log**.

Log entries are always created when an error page is shown and for certain [exception types](docs__4.x__extend__system__exceptions.md).

## [#](#configuration) Configuration

#### [#](#error-detail) Error Detail

The amount of error detail your application displays through the browser is controlled by the `debug` configuration option in your `config/app.php` configuration file. By default detailed error reporting is turned *on* so it is helpful to see detailed error information which can be useful for debugging and troubleshooting issues. When this feature is turned off, when there is a problem in a page, a generic error message will be displayed.

For local development, you should set the `debug` value to `true`. In your production environment, this value should always be `false`.

```
/*
|--------------------------------------------------------------------------
| Application Debug Mode
|--------------------------------------------------------------------------
|
| When your application is in debug mode, detailed error messages with
| stack traces will be shown on every error that occurs within your
| application. If disabled, a simple generic error page is shown.
|
*/

'debug' => false,
```

#### [#](#log-file-modes) Log File Modes

October CMS supports various drivers, including `single`, `daily`, `syslog` and `errorlog` logging modes. For example, if you wish to use daily log files instead of a single file, you should simply set the `default` value in your `config/logging.php` configuration file:

```
'default' => env('LOG_CHANNEL', 'daily'),
```

#### [#](#see-also) See Also

- [Laravel Logging Documentation  (opens new window)](https://laravel.com/docs/12.x/logging)

← [Mail Configuration](docs__4.x__setup__mail-config.md)[Updating October CMS](docs__4.x__resources__updating-october.md) →
