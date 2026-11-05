# Configuration · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Configuration

---

OWA can be configured in a variety of ways to meet the needs of your application(s).

## Configuration File

`owa-config.php` is OWA's main configuration file. This file can be created manually prior to an installation by simply copying `owa-config-dist.php` to `owa-config.php` in the same directory.

This configuration file is where OWA gets information about the database that it should connect to as well as a few other global configuration settings.

### Global Configuration Constants

The following convenience constants are included in your config file and should be used to setup certain aspects of your OWA instance.

> **A constant defined here gets the last word.** Most of these settings can also be changed from the admin UI, and that value is stored in the database — but if the corresponding constant is defined in `owa-config.php`, the constant wins on every request and the stored value is ignored. The settings page shows such a field greyed out, tells you which constant is governing it, and refuses to change it. Remove or comment out the constant and the page becomes editable again, using whatever was last saved there.
>
> This is what makes `owa-config.php` authoritative for scripted deployments: what the file says is what the installation does, regardless of what anyone clicked. Define only what you actually want to pin — anything you leave undefined stays editable from the admin UI as normal.

| Constant | Description |
| --- | --- |
| OWA\_DB\_HOST | This is the hostname where your database can be accessed. This could be a remote host such as `db.yourdomain.com` or, if OWA is running on the same host as your database instance you can use `localhost`. |
| OWA\_DB\_NAME | This is the name of the database that OWA should read and write to. This database needs to be created if it does not exist prior to starting the install. |
| OWA\_DB\_USER | This is the user name that OWA will use to connect to your database server. This database user name must have permission to read and write to the database that you want OWA to use. |
| OWA\_DB\_PASSWORD | This is the password of the database user. |
| OWA\_DB\_PORT | This is the port of the database server. |
| OWA\_PUBLIC\_URL | This is the web URL of OWA's base directory. This value must always end with a "/" (e.g. <http://yourdomain/path/to/owa/>). |
| OWA\_ERROR\_HANDLER | This setting controls which of OWA's error handlers should be used. This value defaults to "production". Set this to "development" if you are trying to [[debug |
| OWA\_LOG\_PHP\_ERRORS | This will log all of PHP's errors/notices to OWA's debug log file. This is handy for [[debugging OWA |
| OWA\_CACHE\_OBJECTS | This settings turns on and off OWA's object caching system. |
| OWA\_USE\_STATIC\_CONFIG\_ONLY | When `true`, OWA runs on its built-in defaults plus this config file only, and does **not** read your saved settings from the `owa_configuration` database table at boot. This removes the DB connection OWA otherwise opens on every request. Intended only for a dedicated event-queue logging node — see [[Event Queueing |
| OWA\_SCHEDULED\_JOBS | An array that retunes the jobs OWA registers, adds jobs of your own, or turns one off. Keyed by **job name**; `command` is the CLI command that actually runs, and the two are separate so one command can be scheduled more than once. Overrides are per key, so supplying only `params` keeps the registered schedule. See [[Scheduled Jobs |
| OWA\_SCHEDULER\_ENABLED | Set to `false` to stop every scheduled job without touching crontab, for a migration or an incident. `cli.php cmd=schedule-status` reports that it is off. |
| OWA\_DB\_SQL\_MODE | The session `sql_mode` OWA applies on connect, so the server's own configured mode does not matter. Defaults to `STRICT_ALL_TABLES`, under which the database refuses a value that does not fit rather than silently trimming it. Set it to `''` to restore the permissive behaviour of older versions. |
| OWA\_DB\_TYPE | Which database driver to use. Defaults to `mysql`. `mysqli` is also supported and stays supported until v2.0. |
| OWA\_TIMEZONE | The timezone statistics are bucketed into calendar days with — defaults to `America/Los_Angeles`, which is unlikely to be what you want. **Set this before you collect data.** The choice is not retroactive: each request is filed under a calendar day at the moment it is recorded, and that day is written into the row. Changing it later applies only to new traffic, so reports spanning the change mix the two, and a day boundary can move by up to 21 hours. Any identifier from [the PHP timezone list](https://www.php.net/manual/en/timezones.php); an unrecognised value is ignored rather than applied. |
| OWA\_DATA\_DIR | Where OWA writes its own files — logs, caches, queue spools. Defaults to `owa-data/` inside the OWA directory. Move it outside the web root if your deployment keeps writable state elsewhere. |
| OWA\_CACHE\_DIR | Where the File Cache module writes its cache files. Defaults to `caches/` inside `OWA_DATA_DIR`. Only the File Cache module reads this. |
| OWA\_CONFIGURATION\_ID | Which row of the `owa_configuration` table this instance reads its stored settings from. Defaults to `1`. Only relevant when several OWA instances share one database. |

#### Event queue constants

Relevant if you are running a [dedicated logging node](Event-Queueing.md) — a server that accepts tracking beacons and writes them to a queue, leaving another instance to process them.

| Constant | Description |
| --- | --- |
| OWA\_QUEUE\_EVENTS | When `true`, a tracking event is written to a queue instead of being processed inline. This is what makes `log.php` cheap on a busy site. |

| OWA\_REMOTE\_EVENT\_QUEUE\_ENDPOINT | The URL events are sent to when using the HTTP event queue. |

Which queue implementation is used is not set by a constant — queues are registered by modules and selected from that registry. See [Event Queueing](Event-Queueing.md).

### Authentication Keys & Salt

The configuration file also contains a several secret keys used for authenticating API and web requests. These keys are generated by the install wizard. These keys should remain secret at all times! However, if you ever feel need to change them, use the [reset-secrets](Command-Line-Interface-_28CLI_29.md#reset-secrets) CLI command.

| Key/Salt | Description |
| --- | --- |
| OWA\_NONCE\_KEY | Secret key used to authenticate "nonce" values passed along with POST requests |
| OWA\_NONCE\_SALT | Salt used to generate the nonce |
| OWA\_AUTH\_KEY | Secret key used to authenticate signed API requests. |
| OWA\_AUTH\_SALT | Salt used to generate API keys |

### Module Configuration Settings

You can alter the configuration settings of any module from within the `owa-config.php` file using the `$this->set()` method. This method takes the *name* of the module that houses the setting your wish to change, the *key* (or name) of the setting, and the *value* you wish to change it to.

For example:

```
$this->set('base', 'mailer-from', 'owa@myinstance.com');
```

#### Enabling an Alternative SMTP Gateway

OWA makes use of the popular [PHPMailer](https://github.com/PHPMailer/PHPMailer) library to send mail. PHPmailer will use the default Mail transfer Agent (MTA) defined in your php.ini file unless you specify an alternate. You can tell phphmailer to use a different MTA by adding the following config values to `owa-config.php` file.

```
$this->set( 'base', 'mailer-host', 'your host');   
$this->set( 'base', 'mailer-port', 'your port');   
$this->set( 'base', 'mailer-use-smtp', true);   
$this->set( 'base', 'mailer-smtpAuth', true);   
$this->set( 'base', 'mailer-username', 'your user name');   
$this->set( 'base', 'mailer-password', 'your password');
```

**Note:** see the [PHPMailer](https://github.com/PHPMailer/PHPMailer) documentation for what these config values mean.

## Base Module Configuration Settings

The default values for the base module's configuration settings are located in the following file: `modules/Base/Classes/Settings.php`

## Settings Management Admin Pages

Alternatively, modules may implement their own settings admin interface pages. These admin pages can be accessed from within the OWA admin interface and configuration values set using them take precedence over any similar values defined in your config file.

## Programatic Access to Configuration Settings

All of OWA's settings can be accessed and changed using the API methods `\OWA\Core\CoreAPI::getSetting()` and `\OWA\Core\CoreAPI::setSetting()` methods.

```
\OWA\Core\CoreAPI::setSetting('modulename', 'somesetting', 'somevalue');
```

If you need to persist a setting to the database use the `\OWA\Core\CoreAPI::persistSetting()` method like so:

```
\OWA\Core\CoreAPI::persistSetting('modulename', 'somesetting', 'somevaluetobestored');
```

In addition to the these convenience methods, you can also access settings via OWA's global configuration object like so:

```
// fetch the global config object
$config = \OWA\Core\CoreAPI::configSingleton();
// get a setting
$setting = $config->get('somemodule', 'somesetting');
// change a setting (just for the current PHP process)
$config->set('somemodule', 'somesetting', 'newvalue');
// change a setting and store it to the database
$config->persistSetting('somemodule', 'somesetting', 'newvalue');
$config->save();
```
