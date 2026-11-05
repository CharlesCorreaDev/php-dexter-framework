# Development Guide · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Development-Guide

---

*This guide is for developers only. If you just want to install FreeScout, please follow [Installation Guide](wiki__Installation-Guide.md).*

- [Architecture & Philosophy](#architecture--philosophy)
- [Contributing](#contributing)
- [GitHub Workflow](#github-workflow)
- [Step-by-Step Instruction](#step-by-step-instruction)
- [Development Guidelines](#development-guidelines)
- [Additional Information](#additional-information)

## Architecture & Philosophy

The main idea is to keep FreeScout core **neat and clean** and not to turn application into a monster by stuffing with all kinds of functionality, which some users may never need. Before adding features to the core we are making sure that they are really needed by analysing [GitHub Forum](https://github.com/freescout-help-desk/freescout/issues), [feature requests](https://freescout.net/request-feature/) and emails to the support. We don't include in the core features required for example by 1% of users, such functionality can be implemented as custom modules.

FreeScout has modular architecture (same idea as WordPress, Redmine, etc), which allows to keep the dist as small as possible and install & update the app on shared hostings. FreeScout core is always **lightweight, free and open source**. Modules can be free or paid.

#### Maintaining Security and Laravel No-Upgrade Policy

To think that updating Laravel to the latest version makes your application much better and secure is a BIG illusion - every framework update brings new bugs, new security issues, tons of useless never-ending work and extra megabytes of code making dist of the app bigger and heavier. Laravel version of the FreeScout always stays the same. In order to fix bugs or make FreeScout compatible with newer PHP version we are patching and overriding `vendor` files. This way FreeScout always stays secure, stable and lightweight.

We've already tried switching to the latest Laravel version, and the number of files grows by 2–3x. As a result, on some shared hosting providers, it was simply impossible to run Composer due to memory and timeout limits. There were also issues with the app's self-updating via the web interface for similar reasons. And one of FreeScout's biggest strengths is its ability to run smoothly even on shared hosting.

Audit tools may show some vulnerabilities in dependencies, but it does not mean they exist in the app and can be exploited. If some issues are discovered - we are fixing them right away [by overriding](wiki__FreeScout-Dependencies-Security.md) individual package files (see `/overrides` folder).

#### New Features

New features are not added to the core just in case or when just someone just wants to have them. There is a [system](https://freescout.net/request-feature/) for tracking and analyzing feature requests.

Keep in mind, that not all your feature requests, ideas and pull requests will be accepted. Stay humble and remember that any aspect of the application can be adjusted using [custom modules](wiki__Modules-Development.md) and [filters & actions](wiki__Development-Guide.md#actions-and-filters). See [an example](https://github.com/freescout-help-desk/freescout/pull/960) of how contribution should not be done.

#### Behavior

Don't forget that you are not a project manager. Try to be polite, friendly and positive. Otherwise your account may be banned.

`"I've bought a lot of modules (or I've spent $$$ on modules), now all my needs have to be fulfilled"` - this kind of attitude is a mistake which may lead to being banned.

Here is the [FreeScout Development Process](wiki__FreeScout-Development-Process.md) described in details.

## GitHub Workflow

If you don't want to deal with GitHub pull requests you can simply share your update as a **[patch](https://stackoverflow.com/questions/5159185/how-to-create-a-git-patch-from-the-uncommitted-changes-in-the-current-working-di)**.

1. **dist** branch is set as a default branch that people see when they visit project's Github page and download a ready to go build (`/vendor` directory is committed in this branch).
2. Contributors are using **master** branch, where `/vendor` directory is added to .gitignore
3. Composer lock file is committed, so dependencies can be quickly installed with `composer install --ignore-platform-reqs`.

When running composer commands always add `--ignore-platform-reqs` flag.

> **When creating a pull request to master, double check the branch name, as GitHub may automatically pre-select a default branch (dist).**

## Step-by-Step Instruction

1. **Create an issue to get an approval on implementing this or that feature or comment on the existing issue to let others know that you are working on it.**
2. [Install](wiki__Installation-Guide.md) the application and switch into **master** branch.
3. Run `composer install --ignore-platform-reqs`
4. Run the following command to populate test data into your database: `php artisan db:seed`
5. Enable debugging via `.env` file:

```
APP_ENV=local
APP_DEBUG=true
```

6. [Fork](https://help.github.com/articles/fork-a-repo/) **master** branch of the project.
7. Implement/fix your feature (comment your code, follow the code style of the project, make sure that design is mobile-friendly).
8. Write or adapt tests as needed.
9. Perform a [pull request](https://help.github.com/articles/creating-a-pull-request/) into **master** branch.

After pulling updates from `master` branch always run the following commands afterwards:

```
composer install --ignore-platform-reqs
php artisan freescout:after-app-update
```

## Development Guidelines

- Node.js, VueJS are not used at all.
- See tasks in [Todo List](https://github.com/freescout-help-desk/freescout/labels/help%20wanted).
- **Before** implementing some functionality please create an [issue](https://github.com/freescout-help-desk/freescout/issues) to discuss it.
- Do not use any HelpScout's files (images, icons, fonts, etc) or code (HTML, CSS, JS, etc) or texts from the help pages. Write and create everything by yourself or use free libraries, etc.
- All strings must be translatable (except system emails/alerts and `Manage » Translate` page). Do not edit manually files in `/resources/lang/`, use [Translate](wiki__Translate.md) tool.
- Design must be mobile friendly.
- Always use `User::dateFormat($date, $format)` function to display dates to take user's timezone and time format into account.
- Use only [Bootstrap Icons](https://glyphicons.bootstrapcheatsheets.com/).
- Always specify length for strings in migrations.
- After changing routes, make sure to run `php artisan freescout:build` to make new routes available in JS via `laroute.url()` function.
- Scripts and styles must be included using `Minify::stylesheet` or `Minify::javascript`, as in .htaccess browser caching is enabled in `css` and `js` folders.
- Class for miscellaneous functions - `App\Misc\Helper`, available via `\Helper` alias.
- In `composer.json` make sure to specify only exact versions of packages (example: 1.0.2)
- DB query caching is implemented using Watson\Rememberable trait. It uses `array` as a cache driver, i.e. queries are cached in memory for each request.
- Custom settings are stored using `\Option::get()` and `\Option::set()`, default values can be set in `config/app.php` in `options` parameter (don't forget to clear cache after editing `app.php`)
- Polycast JS script regularly sends ajax requests, which you can see in Laravel debugbar. To stop these requests you can type `poly.disconnect();` in the browser console.
- In forms make sure to have same size units for label and input container (for example, `col-sm-2` and `col-sm-6`), if they are different (for example, `col-sm-2` and `col-md-6`), the form will be broken when resized.
- Do not use `env()` function to get config parameters, use `config('app.url')` instead, as [config is cached](https://laravel.com/docs/5.5/configuration#configuration-caching).
- After changing config files in `/config` don't forget to run `php artisan config:clear`.
- If using `select('field')` and `orderBy()` in query make sure that all fields from order clause are present in `select()`.
- Every time you create some route, make sure to add it to the \Helper::$menu to properly highlight menu item.
- Keep in mind that user can be deleted. Deleted user still visible in the past threads, notifications, etc, but does not receive notifications, etc.
- To perform ajax request create an `ajax` method in controller (see other controllers) and use `fsAjax` function in JavaScript. Each controller has one `ajax()` method.
- To log exceptions use `\Helper::logException($e);`
- You can write messages to the App Log using standard `\Log::error()` function or you can write to activity log visible in `Manage » Logs` using `\Helper::log()` function.
- By default Storage::put() saves files in *app/storage/public*, to save in *app/storage* use `Storage::disk('private')->put()`.
- Application must be able to work in a subdirectory.
- In templates and PHP all assets must be included using `asset('favicon.ico')` function application to be able to work in subdirectory.
- Do not use `enum` fields in DB, instead use `unsignedTinyInteger` type and constants.
- Instead of `json_encode()` use `\Helper::jsonEncodeUtf8()` to avoid converting symbols into `\u0411`.
- Instead of `json_decode()` use `\Helper::jsonDecode()`.
- DB tables should always have `id` field to avoid [this](https://github.com/laravel/framework/issues/33238).
- Custom data for Mailboxes, Customers and Threads can be stored in meta fields: `$mailbox->setMetaParam('eup', $meta_settings )` and `$meta_settings = $mailbox->meta['eup'] ?? []`
- When running `\Artisan::call()` not in the console make sure to pass `'--force' => true` to avoid [this](https://divinglaravel.com/the-problem-behind-undefined-constant-stdin-when-running-laravel-artisan-command-programmatically) issue.
- When using `curl` or `GuzzleHttp` ALWAYS use `\Helper::setCurlDefaultOptions()` or `\Helper::setGuzzleDefaultOptions()` functions.
- Always add "id" to DB tables as some DBs require a primary key.
- When using `sync()` function for models make sure you are passing an array to it: `$mailbox->users()->sync($request->users) ?: []);`. Otherwise PostgreSQL will through [an error](https://github.com/freescout-help-desk/freescout/issues/3315).
- Datepicker with `enableTime` option enabled may return non-standard value (`2023-12-14T11:25`), standard is `2023-12-14 11:25`. To avoid Carbon "unexpected data found" error `\Helper::sanitizeDatepickerDatetime()` function should be used.
- `shell_exect()` should be executed via `\Helper::shellExec()`.
- In commands executed by cron better to avoid `$this->confirm()` as in some cases it may get stuck if vendor/symfony/console/Application.php does not determine that the command is executed by cton.
- When printing raw text in templates via `{!! $text !!}` use `safe_raw_html()` and `__safe_raw_html()` to strip unsafe tags: `{!! safe_raw_html($text) !!}`.
- Do not pass variables by reference (`&`).
- Use `\Helper::hashEquals()` instead of hash\_equals() as it converts both arguments to `string` before comparing them.
- When orking with Conversation statuses:
  - Check conversation status: `$conversation->isActive()`, `$conversation->isPending()`, `$conversation->isClosed()`, `$conversation->isSpam()`
  - Check if conversation has one of the listed statuses: `$conversation->hasStatus()` and `Conversation::compareStatus()`
  - Checking "status" field in a query: `Conversation::addStatusCondition()`

#### DB

- Instead of simply 'like' use `\Helper::sqlLikeOperator()`.

#### PostgreSQL

- To avoid "*column "..." must appear in the GROUP BY clause*" error use aggregate function: `Customer::select(['customers.*', \DB::raw('MAX(emails.email)')])`
- `where('field', '<>', '')` does not work in PostgreSQL (<https://github.com/freescout-help-desk/freescout/commit/ed15907e69ff9e285d5903617674ab8f6b13a3a1>). For `timestamp` field the following works: `where('field', '!=', null);
- `where()` conditions are always case-sensitive in PostgreSQL and case-insensitive in MySQL;
- When a string containing `\u0000` symbol is saved to DB, PostgreSQL truncates the string starting from this symbol ([#3485](https://github.com/freescout-help-desk/freescout/issues/3485#issuecomment-1790377596)). To avoid this the string need to be sanitized before saving to DB: `\Helper::sqlSatinizeString($string)`;
- All fields should have a name: `\DB::raw("GROUP_CONCAT(emails.email SEPARATOR ', ') as emails")`

## Additional Information

#### Naming conventions

Conventions: <https://github.com/alexeymezenin/laravel-best-practices#follow-laravel-naming-conventions>

Regular variables: snake\_case.

#### JavaScript and Content Security Policy (CSP)

FreeScout sets Content Security Policy (CSP) via meta tag to `script-src 'self'` mode in order to strengthen security.

With this CSP configuration events can't be attached to DOM elements directly via HTML (for example `<button onclick="someFunction" />` or `<a href="javascript:..."></a>`). All events should be attached via jQuery.

If you need to insert JavaScript tag `<script>` directly into the HTML, do it like this (this way your script will not be blocked by CSP):

```
<script type="text/javascript" {!! \Helper::cspNonceAttr() !!}>
// Some JS code
</script>
```

If you need to add some external JavaScript files to the page you need to list them in .env file:

```
APP_CSP_SCRIPT_SRC="example.org/js/script.js example.org/js/another-script.js"
```

Or you can list your scripts via the hook:

```
\Eventy::addFilter('csp.script_src', function ($value) {
	return $value.' example.org/js/script.js example.org/js/another-script.js';
});
```

> Hint: It's very convenient to use Firefox browser console to debug CSP errors on the page.

#### JavaScript localization and PHP variables

1. Add strings or variables to `/resources/views/js/vars.blade.php`
2. Run `php artisan freescout:build`

Retrieving localized strings in JS:

```
Lang.get('messages.ajax_error');
Lang.get('messages.ajax_error', { name: 'Joe' });
```

Retrieving variables in JS:

```
alert(Vars.sample);
```

#### Routes in JavaScript

In order to have access to the route in JS, add `laroute => true` to the route:

`Route::get('/conversation/{id}', ['uses' => 'ConversationsController@view', 'laroute' => true])->name('conversations.view');`

Using in JS:

```
laroute.route('conversations.view', { id: 7' });
```

#### Ajax requests

Project JSON specifiction:

```
{
    "status":"success",
    "msg": "Error occured",
    "msg_success": "Done"
     ...
}
```

- status - Status code: "success" or "error".
- msg - Error message.
- msg\_success - Success message.

#### Background jobs

Queues:

- email (sending outgoing emails)
- default (queue for general tasks)

FreeScout uses `schedule:run` to process queued jobs. `queue:work` command uses cache mutex which uses cache to prevent process overlapping. If you run `schedule:run` in console and terminate it, the cache mutex will not be removed, so you need to clear cache to remove mutex: `cache:clear`

For testing to process queued jobs in foreground you may change queue driver to `sync` in `.env` file:

```
QUEUE_DRIVER=sync
```

After making changes to the code in order changes to take effect for background jobs you need to clear cache:

```
php artisan cache:clear
```

Failed background jobs are cleaned once a week in scheduler.

#### Real-time notifications

Modified version of <https://github.com/leemason/polycast> is used to pass notifications to JavaScript in real time:

1. `App\Subscription` creates BroadcastNotification notifications using `notify()` and sets a delay to allow undoing.
2. BroadcastNotification via custom channel RealtimeBroadcastChannel fires RealtimeBroadcastNotificationCreated broadcastable event.
3. RealtimeBroadcastNotificationCreated event is being processed immediately and `PolycastBroadcaster->broadcast()` method is executed.
4. `PolycastBroadcaster->broadcast()` saves notification data to `polycast_events` table.
5. Polycast JS script via ajax request receives new notification and displays in the menu and if needed as browser push notification.

#### Actions and Filters

Actions and filters are hooks which allow to extend application functionality. Actions and filters system is implemented via Eventy (documentation is available [here](https://github.com/tormjens/eventy)). See how to use actions & filters in the [Modules Development Guide](wiki__Modules-Development.md).

**Actions** are pieces of code you want to execute at certain points in your code. Actions never return anything but merely serve as the option to hook in to your existing code without having to mess things up. ([Examples](https://github.com/freescout-help-desk/freescout/search?q=%22Eventy%3A%3Aaction%22))

**Filters** are made to modify entities. They always return some kind of value. By default they return their first parameter and you should too. ([Examples](https://github.com/freescout-help-desk/freescout/search?q=%22Eventy%3A%3Afilter%22))

#### Folders

There are two types of folders:

- Common folders (Unassigned, Drafts, Assigned, Closed, Spam, Deleted).
- Personal folders (Mine, Starred), they are counting conversations on per user basis.

#### Useful links

- [Laravel 5.5 Docs](https://laravel.com/docs/5.5/)
- [Bootstrap 3.3.7](https://getbootstrap.com/docs/3.3/)
- [Bootstrap Icons](https://glyphicons.bootstrapcheatsheets.com/)
