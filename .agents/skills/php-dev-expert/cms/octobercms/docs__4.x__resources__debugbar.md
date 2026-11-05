# Debugbar - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/resources/debugbar.html

---

# Debugbar

Learn how to inspect queries, performance, and application state with the Debugbar.

- [Installation](docs__4.x__resources__debugbar.md#installation)
- [What You'll See](docs__4.x__resources__debugbar.md#what-you-ll-see)
- [October CMS Collectors](docs__4.x__resources__debugbar.md#october-cms-collectors)
- [Logging Messages](docs__4.x__resources__debugbar.md#logging-messages)
- [Configuration](docs__4.x__resources__debugbar.md#configuration)
- [AJAX Debugging](docs__4.x__resources__debugbar.md#ajax-debugging)
- [Disabling the Debugbar](docs__4.x__resources__debugbar.md#disabling-the-debugbar)

[More...](#)

The October CMS Debugbar integrates [Laravel Debugbar  (opens new window)](https://github.com/fruitcake/laravel-debugbar) with October CMS. It displays a toolbar at the bottom of every page showing database queries, memory usage, request data, and more. Custom data collectors are included for backend controllers, CMS pages, components, and models.

## [#](#installation) Installation

Install the package as a dev dependency using Composer.

```
composer require october/debugbar --dev
```

The debugbar is enabled automatically when `APP_DEBUG=true` in your `.env` file. You can override this with the `DEBUGBAR_ENABLED` environment variable.

```
DEBUGBAR_ENABLED=true
```

## [#](#what-you-ll-see) What You'll See

Once installed, a dark toolbar appears at the bottom of every page (both frontend and backend). It includes tabs for the following.

| Tab | Description |
| --- | --- |
| **Messages** | Messages logged with `debug()` or `debugbar()->info()` |
| **Timeline** | Request lifecycle with timing breakdown |
| **Exceptions** | Any exceptions thrown during the request |
| **Queries** | All database queries with bindings and execution time |
| **Route** | The matched route and middleware |
| **Session** | Current session data |
| **Request** | Request headers, cookies, and server variables |
| **Mail** | Emails sent during the request |

## [#](#october-cms-collectors) October CMS Collectors

In addition to the standard collectors, the following October-specific tabs are included.

| Collector | Description |
| --- | --- |
| **Backend** | Shows the backend controller, action, parameters, and AJAX handler with file location |
| **CMS** | Shows the CMS page, URL, AJAX handler, and page properties with file location |
| **Components** | Lists all components from the page and layout with their class and properties |

## [#](#logging-messages) Logging Messages

You can send messages to the debugbar using the `debug()` helper anywhere in your code.

```
debug('Hello from the debugbar');
debug($myVariable);
```

For more control, resolve the debugbar instance directly.

```
debugbar()->info('Informational message');
debugbar()->warning('Something looks off');
debugbar()->error('Something went wrong');
debugbar()->addMeasure('my-operation', $startTime, $endTime);
```

In Twig templates, you can use the `dump` function to inspect variables.

```
___TWIG0___
```

## [#](#configuration) Configuration

Publish the configuration file to customize collector settings.

```
php artisan vendor:publish --provider="October\Debugbar\ServiceProvider" --tag=config
```

Or create `config/debugbar.php` manually. Common options include enabling or disabling specific collectors.

```
return [
    'collectors' => [
        'db' => true,       // Database queries
        'views' => false,   // Views with their data
        'events' => false,  // All events fired
        'cache' => false,   // Cache events
    ],

    'options' => [
        'db' => [
            'with_params' => true,  // Show query parameters
            'backtrace' => true,    // Show query origin in code
        ],
    ],
];
```

## [#](#ajax-debugging) AJAX Debugging

AJAX requests are captured by the debugbar automatically and displayed in the toolbar dropdown. To disable this, set `capture_ajax` to `false` in `config/debugbar.php`.

## [#](#disabling-the-debugbar) Disabling the Debugbar

The debugbar is automatically disabled when `APP_DEBUG=false`. To explicitly disable it regardless of the debug setting, add the following to your `.env` file.

```
DEBUGBAR_ENABLED=false
```

The debugbar should never be enabled in production environments. It exposes sensitive information including database queries, session data, and application internals.

← [Migrating a Laravel Project](docs__4.x__resources__migrate-laravel-project.md)[AI Development with Boost](docs__4.x__resources__ai-boost.md) →
