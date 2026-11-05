# General Settings | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/config/general

---

# General Settings

- ### On this Page

  - [System](docs_5x__reference__config__general.md#system)
  - [Environment](docs_5x__reference__config__general.md#environment)
  - [Routing](docs_5x__reference__config__general.md#routing)
  - [Session](docs_5x__reference__config__general.md#session)
  - [Security](docs_5x__reference__config__general.md#security)
  - [Assets](docs_5x__reference__config__general.md#assets)
  - [Image Handling](docs_5x__reference__config__general.md#image-handling)
  - [GraphQL](docs_5x__reference__config__general.md#graphql)
  - [Garbage Collection](docs_5x__reference__config__general.md#garbage-collection)
  - [Users](docs_5x__reference__config__general.md#users)

This group of settings affects a wide variety of Craft’s features and behaviors. If you are uncertain about whether something is configurable or not, refer to the categories in the table of contents.

General settings go in `config/general.php`. The config file that ships with [new Craft projects  (opens new window)](https://github.com/craftcms/craft/blob/5.x/config/general.php) looks like this:

```
use craft\config\GeneralConfig;
use craft\helpers\App;

return GeneralConfig::create()
    ->defaultWeekStartDay(1)
    ->omitScriptNameInUrls()
    ->preloadSingles()
    ->preventUserEnumeration()
    ->aliases([
        '@webroot' => dirname(__DIR__) . '/web',
    ])
;
```

A `general.php` config file is not mandatory; omitting it from your project (or including one but not explicitly configuring a setting) will use Craft’s defaults. The list below describes the default values for each setting.

There are a number of [ways to provide configuration](docs_5x__configure.md). This file uses the new “[fluent](docs_5x__configure.md#style)” syntax, and contains references to [environment variables](docs_5x__configure.md#env) for settings that may change between environments.

## [#](#system)System

### [#](#accessibilitydefaults)`accessibilityDefaults`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array)

Default value
:   `[ 'useShapes' => false, 'underlineLinks' => false, 'disableAutofocus' => false, 'notificationDuration' => 5000, 'notificationPosition' => 'end-start', 'slideoutPosition' => 'end', ]`

Defined by
:   [GeneralConfig::$accessibilityDefaults  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-accessibilitydefaults)

Since
:   3.6.4

The default user accessibility preferences that should be applied to users that haven’t saved their preferences yet.

The array can contain the following keys:

- `useShapes` – Whether shapes should be used to represent statuses.
- `underlineLinks` – Whether links should be underlined.
- `disableAutofocus` – Whether inputs should make use of the `autofocus` attribute.
- `notificationDuration` – How long notifications should be shown before they disappear automatically (in
  milliseconds). Set to `0` to show them indefinitely.
- `notificationPosition` – Where notifications should be shown on the screen (`'start-start'` for top-left,
  `'start-end'` for top-right, `'end-start'` for bottom-left, or `'end-end'` for bottom-right, when using an
  LTR orientation).
- `slideoutPosition` – Where slideouts should be shown on the screen (`'start'` for left, or `'end'`
  for right, when using an LTR orientation).

```
->accessibilityDefaults([
    'useShapes' => true,
])
```

### [#](#allowadminchanges)`allowAdminChanges`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$allowAdminChanges  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-allowadminchanges)

Since
:   3.1.0

Whether admins should be allowed to make administrative changes to the system.

When this is disabled, the Settings section will be hidden, the Craft edition and Craft/plugin versions will be locked,
and the project config and Plugin Store will become read-only—though Craft and plugin licenses may still be purchased.

It’s best to disable this in production environments with a deployment workflow that runs `composer install` and
[propagates project config updates](docs_5x__reference__project-config.md#propagating-changes) on deploy.

Don’t disable this setting until **all** environments have been updated to Craft 3.1.0 or later.

Static ConfigEnvironment Override

```
->allowAdminChanges(false)
```

```
CRAFT_ALLOW_ADMIN_CHANGES=false
```

### [#](#allowsimilartags)`allowSimilarTags`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$allowSimilarTags  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-allowsimilartags)

Whether users should be allowed to create similarly-named tags.

Static ConfigEnvironment Override

```
->allowSimilarTags(true)
```

```
CRAFT_ALLOW_SIMILAR_TAGS=true
```

### [#](#allowupdates)`allowUpdates`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$allowUpdates  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-allowupdates)

Whether Craft should allow system and plugin updates in the control panel, and plugin installation from the Plugin Store.

This setting will automatically be disabled if [allowAdminChanges](docs_5x__reference__config__general.md#allowadminchanges) is disabled.

Static ConfigEnvironment Override

```
->allowUpdates(false)
```

```
CRAFT_ALLOW_UPDATES=false
```

### [#](#autologinafteraccountactivation)`autoLoginAfterAccountActivation`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$autoLoginAfterAccountActivation  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-autologinafteraccountactivation)

Whether users should automatically be logged in after activating their account.

Static ConfigEnvironment Override

```
->autoLoginAfterAccountActivation(true)
```

```
CRAFT_AUTO_LOGIN_AFTER_ACCOUNT_ACTIVATION=true
```

### [#](#autosavedrafts)`autosaveDrafts`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$autosaveDrafts  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-autosavedrafts)

Since
:   3.5.6

Deprecated
:   in 4.0.0

Whether drafts should be saved automatically as they are edited.

Note that drafts *will* be autosaved while Live Preview is open, regardless of this setting.

Static ConfigEnvironment Override

```
->autosaveDrafts(false)
```

```
CRAFT_AUTOSAVE_DRAFTS=false
```

### [#](#backuponupdate)`backupOnUpdate`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$backupOnUpdate  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-backuponupdate)

Whether Craft should create a database backup before applying a new system update.

Static ConfigEnvironment Override

```
->backupOnUpdate(false)
```

```
CRAFT_BACKUP_ON_UPDATE=false
```

### [#](#cacheduration)`cacheDuration`

Allowed types
:   `mixed`

Default value
:   `86400` (1 day)

Defined by
:   [GeneralConfig::$cacheDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-cacheduration)

The default length of time Craft will store data, RSS feed, and template caches.

If set to `0`, data and RSS feed caches will be stored indefinitely.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
->cacheDuration(0)
```

```
CRAFT_CACHE_DURATION=0
```

### [#](#cpheadtags)`cpHeadTags`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array)

Default value
:   `[]`

Defined by
:   [GeneralConfig::$cpHeadTags  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-cpheadtags)

Since
:   3.5.0

List of additional HTML tags that should be included in the `<head>` of control panel pages.

Each tag can be specified as an array of the tag name and its attributes.

For example, you can give the control panel a custom favicon (etc.) like this:

```
->cpHeadTags([
    // Traditional favicon
    ['link', ['rel' => 'icon', 'href' => '/icons/favicon.ico']],
    // Scalable favicon for browsers that support them
    ['link', ['rel' => 'icon', 'type' => 'image/svg+xml', 'sizes' => 'any', 'href' => '/icons/favicon.svg']],
    // Touch icon for mobile devices
    ['link', ['rel' => 'apple-touch-icon', 'sizes' => '180x180', 'href' => '/icons/touch-icon.svg']],
    // Pinned tab icon for Safari
    ['link', ['rel' => 'mask-icon', 'href' => '/icons/mask-icon.svg', 'color' => '#663399']],
])
```

### [#](#defaultcountrycode)`defaultCountryCode`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'US'`

Defined by
:   [GeneralConfig::$defaultCountryCode  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-defaultcountrycode)

Since
:   4.5.0

The two-letter country code that addresses will be set to by default.

See [https://en.wikipedia.org/wiki/ISO\_3166-1\_alpha-2  (opens new window)](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for a list of acceptable country codes.

Static ConfigEnvironment Override

```
->defaultCountryCode('GB')
```

```
CRAFT_DEFAULT_COUNTRY_CODE=GB
```

### [#](#defaultcplanguage)`defaultCpLanguage`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$defaultCpLanguage  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-defaultcplanguage)

The default language the control panel should use for users who haven’t set a preferred language yet.

Static ConfigEnvironment Override

```
->defaultCpLanguage('en-US')
```

```
CRAFT_DEFAULT_CP_LANGUAGE=en-US
```

### [#](#defaultcplocale)`defaultCpLocale`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$defaultCpLocale  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-defaultcplocale)

Since
:   3.5.0

The default locale the control panel should use for date/number formatting, for users who haven’t set
a preferred language or formatting locale.

If this is `null`, the [defaultCpLanguage](docs_5x__reference__config__general.md#defaultcplanguage) config setting will determine which locale is used for date/number formatting by default.

Static ConfigEnvironment Override

```
->defaultCpLocale('en-US')
```

```
CRAFT_DEFAULT_CP_LOCALE=en-US
```

### [#](#defaultdirmode)`defaultDirMode`

Allowed types
:   `mixed`

Default value
:   `0775`

Defined by
:   [GeneralConfig::$defaultDirMode  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-defaultdirmode)

The default permission to be set for newly-generated directories.

If set to `null`, the permission will be determined by the current environment.

Static ConfigEnvironment Override

```
->defaultDirMode(0744)
```

```
CRAFT_DEFAULT_DIR_MODE=0744
```

### [#](#defaultfilemode)`defaultFileMode`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$defaultFileMode  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-defaultfilemode)

The default permission to be set for newly-generated files.

If set to `null`, the permission will be determined by the current environment.

Static ConfigEnvironment Override

```
->defaultFileMode(0744)
```

```
CRAFT_DEFAULT_FILE_MODE=0744
```

### [#](#defaultsearchtermoptions)`defaultSearchTermOptions`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array)

Default value
:   `[]`

Defined by
:   [GeneralConfig::$defaultSearchTermOptions  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-defaultsearchtermoptions)

The default options that should be applied to each search term.

Options include:

- `subLeft` – Whether to include keywords that contain the term, with additional characters before it. (`false` by default)
- `subRight` – Whether to include keywords that contain the term, with additional characters after it. (`true` by default)
- `exclude` – Whether search results should *exclude* records with this term. (`false` by default)
- `exact` – Whether the term must be an exact match (only applies if the search term specifies an attribute). (`false` by default)

```
->defaultSearchTermOptions([
    'subLeft' => true,
    'exclude' => 'secret',
])
```

### [#](#defaulttemplateextensions)`defaultTemplateExtensions`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[]

Default value
:   `[ 'twig', 'html', ]`

Defined by
:   [GeneralConfig::$defaultTemplateExtensions  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-defaulttemplateextensions)

The template file extensions Craft will look for when matching a template path to a file on the front end.

Static ConfigEnvironment Override

```
->defaultTemplateExtensions(['twig', 'html', 'txt'])
```

```
CRAFT_DEFAULT_TEMPLATE_EXTENSIONS=twig,html,txt
```

### [#](#defaultweekstartday)`defaultWeekStartDay`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer)

Default value
:   `1` (Monday)

Defined by
:   [GeneralConfig::$defaultWeekStartDay  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-defaultweekstartday)

The default day new users should have set as their Week Start Day.

This should be set to one of the following integers:

- `0` – Sunday
- `1` – Monday
- `2` – Tuesday
- `3` – Wednesday
- `4` – Thursday
- `5` – Friday
- `6` – Saturday

Static ConfigEnvironment Override

```
->defaultWeekStartDay(0)
```

```
CRAFT_DEFAULT_WEEK_START_DAY=0
```

### [#](#devmode)`devMode`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$devMode  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-devmode)

Whether the system should run in [Dev Mode  (opens new window)](https://craftcms.com/support/dev-mode).

Static ConfigEnvironment Override

```
->devMode(true)
```

```
CRAFT_DEV_MODE=true
```

### [#](#disabledplugins)`disabledPlugins`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[], [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$disabledPlugins  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-disabledplugins)

Since
:   3.1.9

Array of plugin handles that should be disabled, regardless of what the project config says.

```
->disabledPlugins([
    'webhooks',
])
```

This can also be set to `'*'` to disable **all** plugins.

```
->disabledPlugins('*')
```

This should not be set on a per-environment basis, as it could result in plugin schema version mismatches
between environments, which will prevent project config changes from getting applied.

Static ConfigEnvironment Override

```
->disabledPlugins([
    'redactor',
    'webhooks',
])
```

```
CRAFT_DISABLED_PLUGINS=redactor,webhooks
```

### [#](#disabledutilities)`disabledUtilities`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[]

Default value
:   `[]`

Defined by
:   [GeneralConfig::$disabledUtilities  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-disabledutilities)

Since
:   4.6.0

Array of utility IDs that should be disabled.

Static ConfigEnvironment Override

```
 ->disabledUtilities([
     'updates',
     'find-replace',
 ])
```

```
CRAFT_DISABLED_UTILITIES=updates,find-replace
```

### [#](#disallowrobots)`disallowRobots`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$disallowRobots  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-disallowrobots)

Since
:   3.5.10

Whether front end requests should respond with `X-Robots-Tag: none` HTTP headers, indicating that pages should not be indexed,
and links on the page should not be followed, by web crawlers.

This should be set to `true` for development and staging environments.

Static ConfigEnvironment Override

```
->disallowRobots(true)
```

```
CRAFT_DISALLOW_ROBOTS=true
```

### [#](#enabletemplatecaching)`enableTemplateCaching`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$enableTemplateCaching  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-enabletemplatecaching)

Whether to enable Craft’s template `{% cache %}` tag on a global basis.

Static ConfigEnvironment Override

```
->enableTemplateCaching(false)
```

```
CRAFT_ENABLE_TEMPLATE_CACHING=false
```

### [#](#errortemplateprefix)`errorTemplatePrefix`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `''`

Defined by
:   [GeneralConfig::$errorTemplatePrefix  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-errortemplateprefix)

The prefix that should be prepended to HTTP error status codes when determining the path to look for an error’s template.

If set to `'_'` your site’s 404 template would live at `templates/_404.twig`, for example.

Static ConfigEnvironment Override

```
->errorTemplatePrefix('_')
```

```
CRAFT_ERROR_TEMPLATE_PREFIX=_
```

### [#](#extraallowedfileextensions)`extraAllowedFileExtensions`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[], [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$extraAllowedFileExtensions  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-extraallowedfileextensions)

List of file extensions that will be merged into the [allowedFileExtensions](docs_5x__reference__config__general.md#allowedfileextensions) config setting.

Static ConfigEnvironment Override

```
->extraAllowedFileExtensions(['mbox', 'xml'])
```

```
CRAFT_EXTRA_ALLOWED_FILE_EXTENSIONS=mbox,xml
```

### [#](#extraapplocales)`extraAppLocales`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[], [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$extraAppLocales  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-extraapplocales)

Since
:   3.0.24

List of extra locale IDs that the application should support, and users should be able to select as their Preferred Language.

Static ConfigEnvironment Override

```
->extraAppLocales(['uk'])
```

```
CRAFT_EXTRA_APP_LOCALES=uk
```

### [#](#handlecasing)`handleCasing`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `GeneralConfig::CAMEL_CASE`

Defined by
:   [GeneralConfig::$handleCasing  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-handlecasing)

Since
:   3.6.0

The casing to use for autogenerated component handles.

### [#](#headlessmode)`headlessMode`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$headlessMode  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-headlessmode)

Since
:   3.3.0

Whether the system should run in Headless Mode, which optimizes the system and control panel for headless CMS implementations.

When this is enabled, the following changes will take place:

- Template settings for sections and category groups will be hidden.
- Template route management will be hidden.
- Front-end routing will skip checks for element and template requests.
- Front-end responses will be JSON-formatted rather than HTML by default.
- Twig will be configured to escape unsafe strings for JavaScript/JSON rather than HTML by default for front-end requests.
- The [loginPath](docs_5x__reference__config__general.md#loginpath), [logoutPath](docs_5x__reference__config__general.md#logoutpath), [setPasswordPath](docs_5x__reference__config__general.md#setpasswordpath), and [verifyEmailPath](docs_5x__reference__config__general.md#verifyemailpath) settings will be ignored.

With Headless Mode enabled, users may only set passwords and verify email addresses via the control panel. Be sure to grant “Access the control
panel” permission to all content editors and administrators. You’ll also need to set the [baseCpUrl](docs_5x__reference__config__general.md#basecpurl) config setting if the control
panel is located on a different domain than your front end.

Static ConfigEnvironment Override

```
->headlessMode(true)
```

```
CRAFT_HEADLESS_MODE=true
```

### [#](#httpproxy)`httpProxy`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$httpProxy  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-httpproxy)

Since
:   3.7.0

The proxy server that should be used for outgoing HTTP requests.

This can be set to a URL (`http://localhost`) or a URL plus a port (`http://localhost:8125`).

Static ConfigEnvironment Override

```
->httpProxy('<http://localhost')>
```

```
CRAFT_HTTP_PROXY=http://localhost
```

### [#](#indextemplatefilenames)`indexTemplateFilenames`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[]

Default value
:   `[ 'index', ]`

Defined by
:   [GeneralConfig::$indexTemplateFilenames  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-indextemplatefilenames)

The template filenames Craft will look for within a directory to represent the directory’s “index” template when
matching a template path to a file on the front end.

Static ConfigEnvironment Override

```
->indexTemplateFilenames(['index', 'default'])
```

```
CRAFT_INDEX_TEMPLATE_FILENAMES=index,default
```

### [#](#ipheaders)`ipHeaders`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[], [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$ipHeaders  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-ipheaders)

List of headers where proxies store the real client IP.

See [yii\web\Request::$ipHeaders  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-request#$ipHeaders-detail) for more details.

If not set, the default [craft\web\Request::$ipHeaders  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-request.html#property-ipheaders) value will be used.

Static ConfigEnvironment Override

```
->ipHeaders(['X-Forwarded-For', 'CF-Connecting-IP'])
```

```
CRAFT_IP_HEADERS=X-Forwarded-For,CF-Connecting-IP
```

### [#](#issystemlive)`isSystemLive`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$isSystemLive  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-issystemlive)

Whether the site is currently live. If set to `true` or `false`, it will take precedence over the System Status setting
in Settings → General.

Static ConfigEnvironment Override

```
->isSystemLive(true)
```

```
CRAFT_IS_SYSTEM_LIVE=true
```

### [#](#limitautoslugstoascii)`limitAutoSlugsToAscii`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$limitAutoSlugsToAscii  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-limitautoslugstoascii)

Whether non-ASCII characters in auto-generated slugs should be converted to ASCII (i.e. ñ → n).

This only affects the JavaScript auto-generated slugs. Non-ASCII characters can still be used in slugs if entered manually.

Static ConfigEnvironment Override

```
->limitAutoSlugsToAscii(true)
```

```
CRAFT_LIMIT_AUTO_SLUGS_TO_ASCII=true
```

### [#](#localealiases)`localeAliases`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array)

Default value
:   `[]`

Defined by
:   [GeneralConfig::$localeAliases  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-localealiases)

Since
:   5.0.0

Custom locale aliases, which will be included when fetching all known locales.

Each locale alias should be defined as an array with the following keys:

- `id`: The alias locale ID
- `aliasOf`: The original locale ID
- `displayName`: The locale alias’s display name *(optional)*

Static Config

```
->localeAliases([
   'smj' => [
       'aliasOf' => 'sv',
       'displayName' => 'Lule Sámi',
   ],
])
```

### [#](#maxbackups)`maxBackups`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer), [false  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `20`

Defined by
:   [GeneralConfig::$maxBackups  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-maxbackups)

The number of backups Craft should make before it starts deleting the oldest backups. If set to `false`, Craft will
not delete any backups.

Static ConfigEnvironment Override

```
->maxBackups(5)
```

```
CRAFT_MAX_BACKUPS=5
```

### [#](#maxrevisions)`maxRevisions`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `50`

Defined by
:   [GeneralConfig::$maxRevisions  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-maxrevisions)

Since
:   3.2.0

The maximum number of revisions that should be stored for each element.

Set to `0` if you want to store an unlimited number of revisions.

Static ConfigEnvironment Override

```
->maxRevisions(25)
```

```
CRAFT_MAX_REVISIONS=25
```

### [#](#maxslugincrement)`maxSlugIncrement`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer)

Default value
:   `100`

Defined by
:   [GeneralConfig::$maxSlugIncrement  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-maxslugincrement)

The highest number Craft will tack onto a slug in order to make it unique before giving up and throwing an error.

Static ConfigEnvironment Override

```
->maxSlugIncrement(10)
```

```
CRAFT_MAX_SLUG_INCREMENT=10
```

### [#](#partialtemplatespath)`partialTemplatesPath`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'_partials'`

Defined by
:   [GeneralConfig::$partialTemplatesPath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-partialtemplatespath)

Since
:   5.0.0

The path within the `templates` folder where element partial templates will live.

Partial templates are used to render elements when calling [craft\elements\db\ElementQuery::render()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-render),
[craft\elements\ElementCollection::render()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-elementcollection.html#method-render), or [craft\base\Element::render()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-render).

For example, you could render all the entries within a Matrix field like so:

```
{{ entry.myMatrixField.render() }}
```

The full path to a partial template will also include the element type handle (e.g. `asset` or `entry`) and the
field layout provider’s handle (e.g. the volume handle or entry type handle). For an entry of type `article`,
that would be: `_partials/entry/article.twig`.

Static ConfigEnvironment Override

```
->partialTemplatesPath('_cp/partials')
```

```
CRAFT_PARTIAL_TEMPLATES_PATH=_cp/partials
```

### [#](#permissionspolicyheader)`permissionsPolicyHeader`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$permissionsPolicyHeader  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-permissionspolicyheader)

Since
:   3.6.14

Deprecated
:   in 4.11.0. [[\craft\filters\Headers]] should be used instead.

The `Permissions-Policy` header that should be sent for site responses.

Static ConfigEnvironment Override

```
->permissionsPolicyHeader('Permissions-Policy: geolocation=(self)')
```

```
CRAFT_PERMISSIONS_POLICY_HEADER=Permissions-Policy: geolocation=(self)
```

### [#](#phpmaxmemorylimit)`phpMaxMemoryLimit`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$phpMaxMemoryLimit  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-phpmaxmemorylimit)

The maximum amount of memory Craft will try to reserve during memory-intensive operations such as zipping,
unzipping and updating. Defaults to an empty string, which means it will use as much memory as it can.

See [https://php.net/manual/en/faq.using.php#faq.using.shorthandbytes  (opens new window)](https://php.net/manual/en/faq.using.php#faq.using.shorthandbytes) for a list of acceptable values.

Static ConfigEnvironment Override

```
->phpMaxMemoryLimit('512M')
```

```
CRAFT_PHP_MAX_MEMORY_LIMIT=512M
```

### [#](#preloadsingles)`preloadSingles`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$preloadSingles  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-preloadsingles)

Since
:   4.4.0

Whether Single section entries should be preloaded for Twig templates.

When enabled, Craft will make an educated guess on which Singles should be preloaded for each template based on
the variable names that are referenced.

You will need to clear your compiled templates from the Caches utility before this setting will take effect.

Static ConfigEnvironment Override

```
->preloadSingles()
```

```
CRAFT_PRELOAD_SINGLES=true
```

### [#](#previewiframeresizeroptions)`previewIframeResizerOptions`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array)

Default value
:   `[]`

Defined by
:   [GeneralConfig::$previewIframeResizerOptions  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-previewiframeresizeroptions)

Since
:   3.5.0

Custom [iFrame Resizer options  (opens new window)](http://davidjbradshaw.github.io/iframe-resizer/#options) that should be used for preview iframes.

```
->previewIframeResizerOptions([
    'autoResize' => false,
])
```

### [#](#privatetemplatetrigger)`privateTemplateTrigger`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'_'`

Defined by
:   [GeneralConfig::$privateTemplateTrigger  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-privatetemplatetrigger)

The template path segment prefix that should be used to identify “private” templates, which are templates that are not
directly accessible via a matching URL.

Set to an empty value to disable public template routing.

Static ConfigEnvironment Override

```
->privateTemplateTrigger('')
```

```
CRAFT_PRIVATE_TEMPLATE_TRIGGER=
```

### [#](#runqueueautomatically)`runQueueAutomatically`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$runQueueAutomatically  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-runqueueautomatically)

Whether Craft should run pending queue jobs automatically when someone visits the control panel.

If disabled, an alternate queue worker *must* be set up separately, either as an
[always-running daemon  (opens new window)](https://github.com/yiisoft/yii2-queue/blob/master/docs/guide/worker.md), or a cron job that runs the
`queue/run` command every minute:

```
** * * * * /path/to/project/craft queue/run
```

This setting should be disabled for servers running Win32, or with Apache’s mod\_deflate/mod\_gzip installed,
where PHP’s [flush()  (opens new window)](https://php.net/manual/en/function.flush.php) method won’t work.

Static ConfigEnvironment Override

```
->runQueueAutomatically(false)
```

```
CRAFT_RUN_QUEUE_AUTOMATICALLY=false
```

### [#](#safemode)`safeMode`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$safeMode  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-safemode)

Since
:   5.1.0

Whether the system should run in Safe Mode.

Safe Mode disables all plugins and application config that can alter Craft's expected default behavior.

Static ConfigEnvironment Override

```
->safeMode(true)
```

```
CRAFT_SAFE_MODE=true
```

### [#](#samesitecookievalue)`sameSiteCookieValue`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$sameSiteCookieValue  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-samesitecookievalue)

Since
:   3.1.33

The [SameSite  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie/SameSite) value that should be set on Craft cookies, if any.

### [#](#sendcontentlengthheader)`sendContentLengthHeader`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$sendContentLengthHeader  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-sendcontentlengthheader)

Since
:   3.7.3

Whether a `Content-Length` header should be sent with responses.

Static ConfigEnvironment Override

```
->sendContentLengthHeader(true)
```

```
CRAFT_SEND_CONTENT_LENGTH_HEADER=true
```

### [#](#sendpoweredbyheader)`sendPoweredByHeader`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$sendPoweredByHeader  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-sendpoweredbyheader)

Whether an `X-Powered-By: Craft CMS` header should be sent, helping services like [BuiltWith  (opens new window)](https://builtwith.com/) and
[Wappalyzer  (opens new window)](https://www.wappalyzer.com/) identify that the site is running on Craft.

Static ConfigEnvironment Override

```
->sendPoweredByHeader(false)
```

```
CRAFT_SEND_POWERED_BY_HEADER=false
```

### [#](#slugwordseparator)`slugWordSeparator`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'-'`

Defined by
:   [GeneralConfig::$slugWordSeparator  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-slugwordseparator)

The character(s) that should be used to separate words in slugs.

Static ConfigEnvironment Override

```
->slugWordSeparator('.')
```

```
CRAFT_SLUG_WORD_SEPARATOR=.
```

### [#](#staticstatuses)`staticStatuses`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$staticStatuses  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-staticstatuses)

Since
:   5.7.0

Whether entries’ statuses should be stored statically, and only get updated on entry save, or when the
`update-statuses` command is executed.

Static ConfigEnvironment Override

```
->staticStatuses()
```

```
CRAFT_STATIC_STATUSES=true
```

### [#](#systemtemplatecss)`systemTemplateCss`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$systemTemplateCss  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-systemtemplatecss)

Since
:   5.6.0

The URL to a CSS file that should be included when rendering system templates on the front end,
such as the Login and Set Password templates.

Static ConfigEnvironment Override

```
->systemTemplateCss('/css/cp-theme.css');
```

```
CRAFT_SYSTEM_TEMPLATE_CSS=/css/cp-theme.css
```

### [#](#testtoemailaddress)`testToEmailAddress`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [array  (opens new window)](https://php.net/language.types.array), [null  (opens new window)](https://php.net/language.types.null), [false  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `null`

Defined by
:   [GeneralConfig::$testToEmailAddress  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-testtoemailaddress)

Configures Craft to send all system emails to either a single email address or an array of email addresses
for testing purposes.

By default, the recipient name(s) will be “Test Recipient”, but you can customize that by setting the value with the format
`['me@domain.tld' => 'Name']`.

Static ConfigEnvironment Override

```
->testToEmailAddress('me@domain.tld')
```

```
CRAFT_TEST_TO_EMAIL_ADDRESS=me@domain.tld
```

### [#](#timezone)`timezone`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$timezone  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-timezone)

The timezone of the site. If set, it will take precedence over the Timezone setting in Settings → General.

This can be set to one of PHP’s [supported timezones  (opens new window)](https://php.net/manual/en/timezones.php).

Static ConfigEnvironment Override

```
->timezone('Europe/London')
```

```
CRAFT_TIMEZONE=Europe/London
```

### [#](#translationdebugoutput)`translationDebugOutput`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$translationDebugOutput  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-translationdebugoutput)

Whether translated messages should be wrapped in special characters to help find any strings that are not being run through
`Craft::t()` or the `|translate` filter.

Static ConfigEnvironment Override

```
->translationDebugOutput(true)
```

```
CRAFT_TRANSLATION_DEBUG_OUTPUT=true
```

The symbols are as follows:

| Symbol | Example | Category |
| --- | --- | --- |
| `$` | `$Date Field$` | Site (front-end, `site.php`) |
| `@` | `@Entry Type@` | Application (Craft, `app.php`) |
| `%` | `%Object Template% | Other (plugin or custom source) |

Translations *may* be nested or surrounded by multiple symbols.

### [#](#useemailasusername)`useEmailAsUsername`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$useEmailAsUsername  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-useemailasusername)

Whether Craft should set users’ usernames to their email addresses, rather than let them set their username separately.

If you enable this setting after user accounts already exist, run this terminal command to update existing usernames:

```
php craft utils/update-usernames
```

Static ConfigEnvironment Override

```
->useEmailAsUsername(true)
```

```
CRAFT_USE_EMAIL_AS_USERNAME=true
```

### [#](#usefilelocks)`useFileLocks`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$useFileLocks  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-usefilelocks)

Whether to grab an exclusive lock on a file when writing to it by using the `LOCK_EX` flag.

Some file systems, such as NFS, do not support exclusive file locking.

If `null`, Craft will try to detect if the underlying file system supports exclusive file locking and cache the results.

Static ConfigEnvironment Override

```
->useFileLocks(false)
```

```
CRAFT_USE_FILE_LOCKS=false
```

### [#](#useidnanontransitionaltounicode)`useIdnaNontransitionalToUnicode`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$useIdnaNontransitionalToUnicode  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-useidnanontransitionaltounicode)

Since
:   5.9.0

Whether the [`IDNA_NONTRANSITIONAL_TO_UNICODE`  (opens new window)](https://www.php.net/manual/en/intl.constants.php#constant.idna-nontransitional-to-unicode)
flag should be passed to [idn\_to\_utf8()  (opens new window)](https://www.php.net/manual/en/function.idn-to-utf8.php) when converting
email addresses from IDNA ASCII to Unicode.

`INTL_IDNA_VARIANT_UTS46` by default, which uses the UTS 46 algorithm, consistent with the requirements of the
IDNA2008 protocol and mostly compatible with IDNA2003 (deprecated in PHP 7.2).

There are a handful of characters which result in different resolution of IDNs between IDNA2008 and IDNA2003,
including ß, ς, and joiner characters (ZWJ and ZWNJ). ([More info  (opens new window)](https://unicode.org/reports/tr46/#Deviations))

For example, `ß` will be converted to `ss` by default. Enabling this setting will ensure it gets preserved as `ß`.

Static ConfigEnvironment Override

```
->useIdnaNontransitionalToUnicode(true)
```

```
CRAFT_USE_IDNA_NONTRANSITIONAL_TO_UNICODE=true
```

### [#](#useiframeresizer)`useIframeResizer`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$useIframeResizer  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-useiframeresizer)

Since
:   3.5.5

Whether [iFrame Resizer options  (opens new window)](http://davidjbradshaw.github.io/iframe-resizer/#options) should be used for Live Preview.

Using iFrame Resizer makes it possible for Craft to retain the preview’s scroll position between page loads, for cross-origin web pages.

It works by setting the height of the iframe to match the height of the inner web page, and the iframe’s container will be scrolled rather
than the iframe document itself. This can lead to some unexpected CSS issues, however, because the previewed viewport height will be taller
than the visible portion of the iframe.

If you have a [decoupled front end  (opens new window)](docs_5x__reference__element-types__entries.md#previewing-decoupled-front-ends), you will need to include
[iframeResizer.contentWindow.min.js  (opens new window)](https://raw.github.com/davidjbradshaw/iframe-resizer/master/js/iframeResizer.contentWindow.min.js) on your
page as well for this to work. You can conditionally include it for only Live Preview requests by checking if the requested URL contains a
`x-craft-live-preview` query string parameter.

You can customize the behavior of iFrame Resizer via the [previewIframeResizerOptions](docs_5x__reference__config__general.md#previewiframeresizeroptions) config setting.

Static ConfigEnvironment Override

```
->useIframeResizer(true)
```

```
CRAFT_USE_IFRAME_RESIZER=true
```

## [#](#environment)Environment

### [#](#aliases)`aliases`

Allowed types
:   `array<string,string|null>`

Default value
:   `[]`

Defined by
:   [GeneralConfig::$aliases  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-aliases)

Any custom Yii [aliases  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-aliases) that should be defined for every request.

```
->aliases([
    '@webroot' => '/var/www/',
])
```

### [#](#backupcommand)`backupCommand`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null), [false  (opens new window)](https://php.net/language.types.boolean), [Closure  (opens new window)](https://php.net/class.closure)

Default value
:   `null`

Defined by
:   [GeneralConfig::$backupCommand  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-backupcommand)

The shell command that Craft should execute to create a database backup.

When set to `null` (default), Craft will run `mysqldump` or `pg_dump`, provided that those libraries are in the `$PATH` variable
for the system user running the web server.

You may provide your own command, which can include several tokens Craft will substitute at runtime:

- `{file}` - the target backup file path
- `{port}` - the current database port
- `{server}` - the current database hostname
- `{user}` - user that was used to connect to the database
- `{password}` - password for the specified `{user}`
- `{database}` - the current database name
- `{schema}` - the current database schema (if any)

This can also be set to `false` to disable database backups completely.

Static ConfigEnvironment Override

```
->backupCommand(false)
```

```
CRAFT_BACKUP_COMMAND=false
```

### [#](#backupcommandformat)`backupCommandFormat`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$backupCommandFormat  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-backupcommandformat)

Since
:   5.1.0

The output format that database backups should use (PostgreSQL only).

This setting has no effect with MySQL databases.

Valid options are `custom`, `directory`, `tar`, or `plain`.
When set to `null` (default), `pg_restore` will default to `plain`

### [#](#buildid)`buildId`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$buildId  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-buildid)

Since
:   4.0.0

A unique ID representing the current build of the codebase.

This should be set to something unique to the deployment, e.g. a Git SHA or a deployment timestamp.

Static ConfigEnvironment Override

```
->buildId(\craft\helpers\App::env('GIT_SHA'))
```

```
CRAFT_BUILD_ID=$GIT_SHA
```

### [#](#defaultcookiedomain)`defaultCookieDomain`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `''`

Defined by
:   [GeneralConfig::$defaultCookieDomain  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-defaultcookiedomain)

The domain that cookies generated by Craft should be created for. If blank, it will be left up to the browser to determine
which domain to use (almost always the current). If you want the cookies to work for all subdomains, for example, you could
set this to `'.my-project.tld'`.

Static ConfigEnvironment Override

```
->defaultCookieDomain('.my-project.tld')
```

```
CRAFT_DEFAULT_COOKIE_DOMAIN=.my-project.tld
```

### [#](#resourcebasepath)`resourceBasePath`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'@webroot/cpresources'`

Defined by
:   [GeneralConfig::$resourceBasePath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-resourcebasepath)

The path to the root directory that should store published control panel resources.

Static ConfigEnvironment Override

```
->resourceBasePath('@webroot/craft-resources')
```

```
CRAFT_RESOURCE_BASE_PATH=@webroot/craft-resources
```

### [#](#resourcebaseurl)`resourceBaseUrl`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'@web/cpresources'`

Defined by
:   [GeneralConfig::$resourceBaseUrl  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-resourcebaseurl)

The URL to the root directory where control panel resources are published.

Static ConfigEnvironment Override

```
->resourceBaseUrl('@web/craft-resources')
```

```
CRAFT_RESOURCE_BASE_URL=@web/craft-resources
```

### [#](#restorecommand)`restoreCommand`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null), [false  (opens new window)](https://php.net/language.types.boolean), [Closure  (opens new window)](https://php.net/class.closure)

Default value
:   `null`

Defined by
:   [GeneralConfig::$restoreCommand  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-restorecommand)

The shell command Craft should execute to restore a database backup.

By default Craft will run `mysql` or `psql`, provided those libraries are in the `$PATH` variable for the user the web server is running as.

There are several tokens you can use that Craft will swap out at runtime:

- `{path}` - the backup file path
- `{port}` - the current database port
- `{server}` - the current database hostname
- `{user}` - the user to connect to the database
- `{database}` - the current database name
- `{schema}` - the current database schema (if any)

This can also be set to `false` to disable database restores completely.

Static ConfigEnvironment Override

```
->restoreCommand(false)
```

```
CRAFT_RESTORE_COMMAND=false
```

## [#](#routing)Routing

### [#](#actiontrigger)`actionTrigger`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'actions'`

Defined by
:   [GeneralConfig::$actionTrigger  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-actiontrigger)

The URI segment Craft should look for when determining if the current request should be routed to a controller action.

Static ConfigEnvironment Override

```
->actionTrigger('do-it')
```

```
CRAFT_ACTION_TRIGGER=do-it
```

### [#](#activateaccountsuccesspath)`activateAccountSuccessPath`

Allowed types
:   `mixed`

Default value
:   `''`

Defined by
:   [GeneralConfig::$activateAccountSuccessPath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-activateaccountsuccesspath)

The URI that users without access to the control panel should be redirected to after activating their account.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

Static ConfigEnvironment Override

```
->activateAccountSuccessPath('welcome')
```

```
CRAFT_ACTIVATE_ACCOUNT_SUCCESS_PATH=welcome
```

### [#](#addtrailingslashestourls)`addTrailingSlashesToUrls`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$addTrailingSlashesToUrls  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-addtrailingslashestourls)

Whether auto-generated URLs should have trailing slashes.

Static ConfigEnvironment Override

```
->addTrailingSlashesToUrls(true)
```

```
CRAFT_ADD_TRAILING_SLASHES_TO_URLS=true
```

### [#](#allowuppercaseinslug)`allowUppercaseInSlug`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$allowUppercaseInSlug  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-allowuppercaseinslug)

Whether uppercase letters should be allowed in slugs.

Static ConfigEnvironment Override

```
->allowUppercaseInSlug(true)
```

```
CRAFT_ALLOW_UPPERCASE_IN_SLUG=true
```

### [#](#basecpurl)`baseCpUrl`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$baseCpUrl  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-basecpurl)

The base URL Craft should use when generating control panel URLs.

It will be determined automatically if left blank.

The base control panel URL should **not** include the [control panel trigger word](docs_5x__reference__config__general.md#cptrigger) (e.g. `/admin`).

Static ConfigEnvironment Override

```
->baseCpUrl('<https://cms.my-project.tld/')>
```

```
CRAFT_BASE_CP_URL=https://cms.my-project.tld/
```

### [#](#cptrigger)`cpTrigger`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `'admin'`

Defined by
:   [GeneralConfig::$cpTrigger  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-cptrigger)

The URI segment Craft should look for when determining if the current request should route to the control panel rather than
the front-end website.

This can be set to `null` if you have a dedicated hostname for the control panel (e.g. `cms.my-project.tld`), or you are running Craft in
[Headless Mode](docs_5x__reference__config__general.md#headlessmode). If you do that, you will need to ensure that the control panel is being served from its own web root
directory on your server, with an `index.php` file that defines the `CRAFT_CP` PHP constant.

```
define('CRAFT_CP', true);
```

Alternatively, you can set the [baseCpUrl](docs_5x__reference__config__general.md#basecpurl) config setting, but then you will run the risk of losing access to portions of your
control panel due to URI conflicts with actual folders/files in your main web root.

(For example, if you have an `assets/` folder, that would conflict with the `/assets` page in the control panel.)

Static ConfigEnvironment Override

```
->cpTrigger(null)
```

```
CRAFT_CP_TRIGGER=
```

### [#](#invalidusertokenpath)`invalidUserTokenPath`

Allowed types
:   `mixed`

Default value
:   `null`

Defined by
:   [GeneralConfig::$invalidUserTokenPath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-invalidusertokenpath)

The URI Craft should redirect to when user token validation fails. User tokens are used for
email verification and password resets. If `null`, [loginPath](docs_5x__reference__config__general.md#loginpath) will be used by default.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

Note that this only affects front-end site requests.

Static ConfigEnvironment Override

```
// 1 day
->invalidUserTokenPath('nope')
```

```
# 1 day
CRAFT_INVALID_USER_TOKEN_PATH=nope
```

### [#](#loginpath)`loginPath`

Allowed types
:   `mixed`

Default value
:   `'login'`

Defined by
:   [GeneralConfig::$loginPath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-loginpath)

The URI Craft should use for user login on the front end.

This can be set to `false` to disable front-end login.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

Static ConfigEnvironment Override

```
->loginPath(false)
```

```
CRAFT_LOGIN_PATH=false
```

### [#](#logoutpath)`logoutPath`

Allowed types
:   `mixed`

Default value
:   `'logout'`

Defined by
:   [GeneralConfig::$logoutPath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-logoutpath)

The URI Craft should use for user logout on the front end.

This can be set to `false` to disable front-end logout.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

Static ConfigEnvironment Override

```
->logoutPath(false)
```

```
CRAFT_LOGOUT_PATH=false
```

### [#](#omitscriptnameinurls)`omitScriptNameInUrls`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$omitScriptNameInUrls  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-omitscriptnameinurls)

Whether generated URLs should omit `index.php` (e.g. `http://my-project.tld/path` instead of `http://my-project.tld/index.php/path`)

This can only be possible if your server is configured to redirect would-be 404s to `index.php`, for example, with the redirect found
in the `.htaccess` file that came with Craft:

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule (.+) /index.php?p= [QSA,L]
```

Static ConfigEnvironment Override

```
->omitScriptNameInUrls(true)
```

```
CRAFT_OMIT_SCRIPT_NAME_IN_URLS=true
```

Even when this is set to `true`, the script name could still be included in some action URLs.
If you want to ensure that `index.php` is fully omitted from **all** generated URLs, set the [pathParam](docs_5x__reference__config__general.md#pathparam)
config setting to `null`.

### [#](#pagetrigger)`pageTrigger`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'p'`

Defined by
:   [GeneralConfig::$pageTrigger  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-pagetrigger)

The string preceding a number which Craft will look for when determining if the current request is for a particular page in
a paginated list of pages.

| Example Value | Example URI |
| --- | --- |
| `p` | `/news/p5` |
| `page` | `/news/page5` |
| `page/` | `/news/page/5` |
| `?page` | `/news?page=5` |

Craft may override this setting if it conflicts with [pathParam](docs_5x__reference__config__general.md#pathparam). If you want to set this to `?p` (e.g. `/news?p=5`), you’ll also need to change your [pathParam](docs_5x__reference__config__general.md#pathparam) setting (which defaults to `p`).
Then, if your server is running Apache, you’ll need to update the redirect code in your `.htaccess` file to match your new `pathParam` value.

Static ConfigEnvironment Override

```
->pageTrigger('page')
```

```
CRAFT_PAGE_TRIGGER=page
```

### [#](#pathparam)`pathParam`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `'p'`

Defined by
:   [GeneralConfig::$pathParam  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-pathparam)

The query string param that Craft will check when determining the request’s path.

This can be set to `null` if your web server is capable of directing traffic to `index.php` without a query string param.
If you’re using Apache, that means you’ll need to change the `RewriteRule` line in your `.htaccess` file to:

```
RewriteRule (.+) index.php [QSA,L]
```

Static ConfigEnvironment Override

```
->pathParam(null)
```

```
CRAFT_PATH_PARAM=
```

### [#](#postcploginredirect)`postCpLoginRedirect`

Allowed types
:   `mixed`

Default value
:   `'dashboard'`

Defined by
:   [GeneralConfig::$postCpLoginRedirect  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-postcploginredirect)

The path users should be redirected to after logging into the control panel.

This setting will also come into effect if a user visits the control panel’s login page (`/admin/login`) or the control panel’s
root URL (`/admin`) when they are already logged in.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

Static ConfigEnvironment Override

```
->postCpLoginRedirect('entries')
```

```
CRAFT_POST_CP_LOGIN_REDIRECT=entries
```

### [#](#postloginredirect)`postLoginRedirect`

Allowed types
:   `mixed`

Default value
:   `''`

Defined by
:   [GeneralConfig::$postLoginRedirect  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-postloginredirect)

The path users should be redirected to after logging in from the front-end site.

This setting will also come into effect if the user visits the login page (as specified by the [loginPath](docs_5x__reference__config__general.md#loginpath) config setting) when
they are already logged in.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

Static ConfigEnvironment Override

```
->postLoginRedirect('welcome')
```

```
CRAFT_POST_LOGIN_REDIRECT=welcome
```

### [#](#postlogoutredirect)`postLogoutRedirect`

Allowed types
:   `mixed`

Default value
:   `''`

Defined by
:   [GeneralConfig::$postLogoutRedirect  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-postlogoutredirect)

The path that users should be redirected to after logging out from the front-end site.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

Static ConfigEnvironment Override

```
->postLogoutRedirect('goodbye')
```

```
CRAFT_POST_LOGOUT_REDIRECT=goodbye
```

### [#](#setpasswordpath)`setPasswordPath`

Allowed types
:   `mixed`

Default value
:   `'setpassword'`

Defined by
:   [GeneralConfig::$setPasswordPath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-setpasswordpath)

The URI or URL that Craft should use for Set Password forms on the front end.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

You might also want to set [invalidUserTokenPath](docs_5x__reference__config__general.md#invalidusertokenpath) in case a user clicks on an expired password reset link.

Static ConfigEnvironment Override

```
->setPasswordPath('set-password')
```

```
CRAFT_SET_PASSWORD_PATH=set-password
```

### [#](#setpasswordrequestpath)`setPasswordRequestPath`

Allowed types
:   `mixed`

Default value
:   `null`

Defined by
:   [GeneralConfig::$setPasswordRequestPath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-setpasswordrequestpath)

Since
:   3.5.14

The URI to the page where users can request to change their password.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

If this is set, Craft will redirect [.well-known/change-password requests  (opens new window)](https://w3c.github.io/webappsec-change-password-url/) to this URI.

You’ll also need to set [setPasswordPath](docs_5x__reference__config__general.md#setpasswordpath), which determines the URI and template path for the Set Password form
where the user resets their password after following the link in the Password Reset email.

Static ConfigEnvironment Override

```
->setPasswordRequestPath('request-password')
```

```
CRAFT_SET_PASSWORD_REQUEST_PATH=request-password
```

### [#](#setpasswordsuccesspath)`setPasswordSuccessPath`

Allowed types
:   `mixed`

Default value
:   `''`

Defined by
:   [GeneralConfig::$setPasswordSuccessPath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-setpasswordsuccesspath)

The URI Craft should redirect users to after setting their password from the front end.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

Static ConfigEnvironment Override

```
->setPasswordSuccessPath('password-set')
```

```
CRAFT_SET_PASSWORD_SUCCESS_PATH=password-set
```

### [#](#sitetoken)`siteToken`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'siteToken'`

Defined by
:   [GeneralConfig::$siteToken  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-sitetoken)

Since
:   3.5.0

The query string parameter name that site tokens should be set to.

Static ConfigEnvironment Override

```
->siteToken('t')
```

```
CRAFT_SITE_TOKEN=t
```

### [#](#tokenparam)`tokenParam`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'token'`

Defined by
:   [GeneralConfig::$tokenParam  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-tokenparam)

The query string parameter name that Craft tokens should be set to.

Static ConfigEnvironment Override

```
->tokenParam('t')
```

```
CRAFT_TOKEN_PARAM=t
```

### [#](#usepathinfo)`usePathInfo`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$usePathInfo  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-usepathinfo)

Whether Craft should specify the path using `PATH_INFO` or as a query string parameter when generating URLs.

This setting only takes effect if [omitScriptNameInUrls](docs_5x__reference__config__general.md#omitscriptnameinurls) is set to `false`.

Static ConfigEnvironment Override

```
->usePathInfo(true)
```

```
CRAFT_USE_PATH_INFO=true
```

### [#](#usesslontokenizedurls)`useSslOnTokenizedUrls`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean), [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'auto'`

Defined by
:   [GeneralConfig::$useSslOnTokenizedUrls  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-usesslontokenizedurls)

Determines what protocol/schema Craft will use when generating tokenized URLs. If set to `'auto'`, Craft will check the
current site’s base URL and the protocol of the current request and if either of them are HTTPS will use `https` in the tokenized URL. If not,
will use `http`.

If set to `false`, Craft will always use `http`. If set to `true`, then, Craft will always use `https`.

Static ConfigEnvironment Override

```
->useSslOnTokenizedUrls(true)
```

```
CRAFT_USE_SSL_ON_TOKENIZED_URLS=true
```

### [#](#verifyemailpath)`verifyEmailPath`

Allowed types
:   `mixed`

Default value
:   `'verifyemail'`

Defined by
:   [GeneralConfig::$verifyEmailPath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-verifyemailpath)

Since
:   3.4.0

The URI or URL that Craft should use for email verification links on the front end.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

Static ConfigEnvironment Override

```
->verifyEmailPath('verify-email')
```

```
CRAFT_VERIFY_EMAIL_PATH=verify-email
```

### [#](#verifyemailsuccesspath)`verifyEmailSuccessPath`

Allowed types
:   `mixed`

Default value
:   `''`

Defined by
:   [GeneralConfig::$verifyEmailSuccessPath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-verifyemailsuccesspath)

Since
:   3.1.20

The URI that users without access to the control panel should be redirected to after verifying a new email address.

See [craft\helpers\ConfigHelper::localizedValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-localizedvalue) for a list of supported value types.

Static ConfigEnvironment Override

```
->verifyEmailSuccessPath('verified-email')
```

```
CRAFT_VERIFY_EMAIL_SUCCESS_PATH=verified-email
```

## [#](#session)Session

### [#](#phpsessionname)`phpSessionName`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'CraftSessionId'`

Defined by
:   [GeneralConfig::$phpSessionName  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-phpsessionname)

The name of the PHP session cookie.

Static ConfigEnvironment Override

```
->phpSessionName(null)
```

```
CRAFT_PHP_SESSION_NAME=
```

### [#](#rememberusernameduration)`rememberUsernameDuration`

Allowed types
:   `mixed`

Default value
:   `31536000` (1 year)

Defined by
:   [GeneralConfig::$rememberUsernameDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-rememberusernameduration)

The amount of time Craft will remember a username and pre-populate it on the control panel’s Login page.

Set to `0` to disable this feature altogether.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
->rememberUsernameDuration(0)
```

```
CRAFT_REMEMBER_USERNAME_DURATION=0
```

### [#](#rememberedusersessionduration)`rememberedUserSessionDuration`

Allowed types
:   `mixed`

Default value
:   `1209600` (14 days)

Defined by
:   [GeneralConfig::$rememberedUserSessionDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-rememberedusersessionduration)

The amount of time a user stays logged if “Remember Me” is checked on the login page.

Set to `0` to disable the “Remember Me” feature altogether.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
->rememberedUserSessionDuration(0)
```

```
CRAFT_REMEMBERED_USER_SESSION_DURATION=0
```

### [#](#requirematchinguseragentforsession)`requireMatchingUserAgentForSession`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$requireMatchingUserAgentForSession  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-requirematchinguseragentforsession)

Whether Craft should require a matching user agent string when restoring a user session from a cookie.

Static ConfigEnvironment Override

```
->requireMatchingUserAgentForSession(false)
```

```
CRAFT_REQUIRE_MATCHING_USER_AGENT_FOR_SESSION=false
```

### [#](#requireuseragentandipforsession)`requireUserAgentAndIpForSession`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$requireUserAgentAndIpForSession  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-requireuseragentandipforsession)

Whether Craft should require the existence of a user agent string and IP address when creating a new user session.

Static ConfigEnvironment Override

```
->requireUserAgentAndIpForSession(false)
```

```
CRAFT_REQUIRE_USER_AGENT_AND_IP_FOR_SESSION=false
```

### [#](#usersessionduration)`userSessionDuration`

Allowed types
:   `mixed`

Default value
:   `3600` (1 hour)

Defined by
:   [GeneralConfig::$userSessionDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-usersessionduration)

The amount of time before a user will get logged out due to inactivity.

Set to `0` if you want users to stay logged in as long as their browser is open rather than a predetermined amount of time.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
// 3 hours
->userSessionDuration(10800)
```

```
# 3 hours
CRAFT_USER_SESSION_DURATION=10800
```

## [#](#security)Security

### [#](#asynccsrfinputs)`asyncCsrfInputs`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$asyncCsrfInputs  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-asynccsrfinputs)

Since
:   5.1.0

Whether CSRF values should be injected via JavaScript for greater cache-ability. This setting can be overridden by passing an `async` option into the `csrfInput()` function.

Static ConfigEnvironment Override

```
->asyncCsrfInputs(true)
```

```
CRAFT_ASYNC_CSRF_INPUTS=true
```

### [#](#blowfishhashcost)`blowfishHashCost`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer)

Default value
:   `13`

Defined by
:   [GeneralConfig::$blowfishHashCost  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-blowfishhashcost)

The higher the cost value, the longer it takes to generate a password hash and to verify against it.

Therefore, higher cost slows down a brute-force attack.

For best protection against brute force attacks, set it to the highest value that is tolerable on production servers.

The time taken to compute the hash doubles for every increment by one for this value.

For example, if the hash takes 1 second to compute when the value is 14 then the compute time varies as
2^(value - 14) seconds.

Static ConfigEnvironment Override

```
->blowfishHashCost(15)
```

```
CRAFT_BLOWFISH_HASH_COST=15
```

### [#](#cooldownduration)`cooldownDuration`

Allowed types
:   `mixed`

Default value
:   `300` (5 minutes)

Defined by
:   [GeneralConfig::$cooldownDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-cooldownduration)

The amount of time a user must wait before re-attempting to log in after their account is locked due to too many
failed login attempts.

Set to `0` to keep the account locked indefinitely, requiring an admin to manually unlock the account.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
->cooldownDuration(0)
```

```
CRAFT_COOLDOWN_DURATION=0
```

### [#](#csrftokenname)`csrfTokenName`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'CRAFT_CSRF_TOKEN'`

Defined by
:   [GeneralConfig::$csrfTokenName  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-csrftokenname)

The name of CSRF token used for CSRF validation if [enableCsrfProtection](docs_5x__reference__config__general.md#enablecsrfprotection) is set to `true`.

Static ConfigEnvironment Override

```
->csrfTokenName('MY_CSRF')
```

```
CRAFT_CSRF_TOKEN_NAME=MY_CSRF
```

### [#](#defaulttokenduration)`defaultTokenDuration`

Allowed types
:   `mixed`

Default value
:   `86400` (1 day)

Defined by
:   [GeneralConfig::$defaultTokenDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-defaulttokenduration)

The default amount of time tokens can be used before expiring.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
// One week
->defaultTokenDuration(604800)
```

```
# One week
CRAFT_DEFAULT_TOKEN_DURATION=604800
```

### [#](#deferpublicregistrationpassword)`deferPublicRegistrationPassword`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$deferPublicRegistrationPassword  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-deferpublicregistrationpassword)

By default, Craft requires a front-end “password” field for public user registrations. Setting this to
`true` removes that requirement for the initial registration form. Instead, new users will set their password
once they’ve followed the link in their activation email.

Static ConfigEnvironment Override

```
->deferPublicRegistrationPassword(true)
```

```
CRAFT_DEFER_PUBLIC_REGISTRATION_PASSWORD=true
```

### [#](#elevatedsessionduration)`elevatedSessionDuration`

Allowed types
:   `mixed`

Default value
:   `300` (5 minutes)

Defined by
:   [GeneralConfig::$elevatedSessionDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-elevatedsessionduration)

The amount of time a user’s elevated session will last, which is required for some sensitive actions (e.g. user group/permission assignment).

Set to `0` to disable elevated session support.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
->elevatedSessionDuration(0)
```

```
CRAFT_ELEVATED_SESSION_DURATION=0
```

### [#](#enablebasichttpauth)`enableBasicHttpAuth`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$enableBasicHttpAuth  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-enablebasichttpauth)

Since
:   3.5.0

Deprecated
:   in 4.13.0. [[\craft\filters\BasicHttpAuthLogin]] should be used instead.

Whether front-end web requests should support basic HTTP authentication.

Static ConfigEnvironment Override

```
->enableBasicHttpAuth(true)
```

```
CRAFT_ENABLE_BASIC_HTTP_AUTH=true
```

### [#](#enablecsrfcookie)`enableCsrfCookie`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$enableCsrfCookie  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-enablecsrfcookie)

Whether to use a cookie to persist the CSRF token if [enableCsrfProtection](docs_5x__reference__config__general.md#enablecsrfprotection) is enabled. If false, the CSRF token will be
stored in session under the `csrfTokenName` config setting name. Note that while storing CSRF tokens in session increases security,
it requires starting a session for every page that a CSRF token is needed, which may degrade site performance.

Static ConfigEnvironment Override

```
->enableCsrfCookie(false)
```

```
CRAFT_ENABLE_CSRF_COOKIE=false
```

### [#](#enablecsrfprotection)`enableCsrfProtection`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$enableCsrfProtection  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-enablecsrfprotection)

Whether to enable CSRF protection via hidden form inputs for all forms submitted via Craft.

Static ConfigEnvironment Override

```
->enableCsrfProtection(false)
```

```
CRAFT_ENABLE_CSRF_PROTECTION=false
```

### [#](#enabletwigsandbox)`enableTwigSandbox`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$enableTwigSandbox  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-enabletwigsandbox)

Since
:   5.9.0

Whether user-defined Twig templates should be sandboxed.

Static ConfigEnvironment Override

```
->enableTwigSandbox()
```

```
CRAFT_ENABLE_TWIG_SANDBOX=true
```

### [#](#invalidloginwindowduration)`invalidLoginWindowDuration`

Allowed types
:   `mixed`

Default value
:   `3600` (1 hour)

Defined by
:   [GeneralConfig::$invalidLoginWindowDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-invalidloginwindowduration)

The amount of time to track invalid login attempts for a user, for determining if Craft should lock an account.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
// 1 day
->invalidLoginWindowDuration(86400)
```

```
# 1 day
CRAFT_INVALID_LOGIN_WINDOW_DURATION=86400
```

### [#](#maxinvalidlogins)`maxInvalidLogins`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer), [false  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `5`

Defined by
:   [GeneralConfig::$maxInvalidLogins  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-maxinvalidlogins)

The number of invalid login attempts Craft will allow within the specified duration before the account gets locked.

Static ConfigEnvironment Override

```
->maxInvalidLogins(3)
```

```
CRAFT_MAX_INVALID_LOGINS=3
```

### [#](#preventuserenumeration)`preventUserEnumeration`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$preventUserEnumeration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-preventuserenumeration)

When `true`, Craft will always return a successful response in the “forgot password” flow, making it difficult to enumerate users.

When set to `false` and you go through the “forgot password” flow from the control panel login page, you’ll get distinct messages indicating
whether the username/email exists and whether an email was sent with further instructions. This can be helpful for the user attempting to
log in but allow for username/email enumeration based on the response.

Static ConfigEnvironment Override

```
->preventUserEnumeration(true)
```

```
CRAFT_PREVENT_USER_ENUMERATION=true
```

### [#](#previewtokenduration)`previewTokenDuration`

Allowed types
:   `mixed`

Default value
:   `null`

Defined by
:   [GeneralConfig::$previewTokenDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-previewtokenduration)

Since
:   3.7.0

The amount of time content preview tokens can be used before expiring.

Defaults to [defaultTokenDuration](docs_5x__reference__config__general.md#defaulttokenduration) value.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
// 1 hour
->previewTokenDuration(3600)
```

```
# 1 hour
CRAFT_PREVIEW_TOKEN_DURATION=3600
```

### [#](#sanitizecpimageuploads)`sanitizeCpImageUploads`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$sanitizeCpImageUploads  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-sanitizecpimageuploads)

Since
:   3.6.0

Whether images uploaded via the control panel should be sanitized.

Static ConfigEnvironment Override

```
->sanitizeCpImageUploads(false)
```

```
CRAFT_SANITIZE_CP_IMAGE_UPLOADS=false
```

### [#](#sanitizesvguploads)`sanitizeSvgUploads`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$sanitizeSvgUploads  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-sanitizesvguploads)

Whether Craft should sanitize uploaded SVG files and strip out potential malicious-looking content.

This should definitely be enabled if you are accepting SVG uploads from untrusted sources.

Static ConfigEnvironment Override

```
->sanitizeSvgUploads(false)
```

```
CRAFT_SANITIZE_SVG_UPLOADS=false
```

### [#](#secureheaders)`secureHeaders`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$secureHeaders  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-secureheaders)

Lists of headers that are, by default, subject to the trusted host configuration.

See [yii\web\Request::$secureHeaders  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-request#$secureHeaders-detail) for more details.

If not set, the default [yii\web\Request::$secureHeaders  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-request#$secureHeaders-detail) value will be used.

Static ConfigEnvironment Override

```
->secureHeaders([
    'X-Forwarded-For',
    'X-Forwarded-Host',
    'X-Forwarded-Proto',
    'X-Rewrite-Url',
    'X-Original-Host',
    'CF-Connecting-IP',
])
```

```
CRAFT_SECURE_HEADERS=X-Forwarded-For,X-Forwarded-Host,X-Forwarded-Proto,X-Rewrite-Url,X-Original-Host,CF-Connecting-IP
```

### [#](#secureprotocolheaders)`secureProtocolHeaders`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$secureProtocolHeaders  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-secureprotocolheaders)

List of headers to check for determining whether the connection is made via HTTPS.

See [yii\web\Request::$secureProtocolHeaders  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-request#$secureProtocolHeaders-detail) for more details.

If not set, the default [yii\web\Request::$secureProtocolHeaders  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-request#$secureProtocolHeaders-detail) value will be used.

```
->secureProtocolHeaders([
    'X-Forwarded-Proto' => [
        'https',
    ],
    'Front-End-Https' => [
        'on',
    ],
    'CF-Visitor' => [
        '{\"scheme\":\"https\"}',
    ],
])
```

### [#](#securitykey)`securityKey`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `''`

Defined by
:   [GeneralConfig::$securityKey  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-securitykey)

A private, random, cryptographically-secure key that is used for hashing and encrypting data in [craft\services\Security  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-security.html).

**Do not** share this key publicly. If exposed, it could lead to a compromised system.

In the event that the key is compromised, a new secure key can be generated with the command:

```
php craft setup/security-key
```

Note that if the key changes, any data that is encrypted with it (e.g. user session cookies) will be inaccessible.

```
->securityKey('2cf24dba5...')
```

### [#](#storeuserips)`storeUserIps`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$storeUserIps  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-storeuserips)

Since
:   3.1.0

Whether user IP addresses should be stored/logged by the system.

Static ConfigEnvironment Override

```
->storeUserIps(true)
```

```
CRAFT_STORE_USER_IPS=true
```

### [#](#trustedhosts)`trustedHosts`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array)

Default value
:   `[ 'any', ]`

Defined by
:   [GeneralConfig::$trustedHosts  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-trustedhosts)

The configuration for trusted security-related headers.

See [yii\web\Request::$trustedHosts  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-request#$trustedHosts-detail) for more details.

By default, all hosts are trusted.

Static ConfigEnvironment Override

```
->trustedHosts(['trusted-one.foo', 'trusted-two.foo'])
```

```
CRAFT_TRUSTED_HOSTS=trusted-one.foo,trusted-two.foo
```

### [#](#usesecurecookies)`useSecureCookies`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean), [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'auto'`

Defined by
:   [GeneralConfig::$useSecureCookies  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-usesecurecookies)

Whether Craft will set the “secure” flag when saving cookies when using `Craft::cookieConfig()` to create a cookie.

Valid values are `true`, `false`, and `'auto'`. Defaults to `'auto'`, which will set the secure flag if the page you’re currently accessing
is over `https://`. `true` will always set the flag, regardless of protocol and `false` will never automatically set the flag.

Static ConfigEnvironment Override

```
->useSecureCookies(true)
```

```
CRAFT_USE_SECURE_COOKIES=true
```

### [#](#verificationcodeduration)`verificationCodeDuration`

Allowed types
:   `mixed`

Default value
:   `86400` (1 day)

Defined by
:   [GeneralConfig::$verificationCodeDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-verificationcodeduration)

The amount of time a user verification code can be used before expiring.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
// 1 hour
->verificationCodeDuration(3600)
```

```
# 1 hour
CRAFT_VERIFICATION_CODE_DURATION=3600
```

## [#](#assets)Assets

### [#](#allowedfileextensions)`allowedFileExtensions`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[]

Default value
:   `[ '7z', 'aiff', 'asc', 'asf', 'avi', 'avif', 'bmp', 'cap', 'cin', 'csv', 'dfxp', 'doc', 'docx', 'dotm', 'dotx', 'fla', 'flv', 'gif', 'gz', 'gzip', 'heic', 'heif', 'hevc', 'itt', 'jp2', 'jpeg', 'jpg', 'jpx', 'js', 'json', 'lrc', 'm2t', 'm4a', 'm4v', 'mcc', 'mid', 'mov', 'mp3', 'mp4', 'mpc', 'mpeg', 'mpg', 'mpsub', 'ods', 'odt', 'ogg', 'ogv', 'pdf', 'png', 'potx', 'pps', 'ppsm', 'ppsx', 'ppt', 'pptm', 'pptx', 'ppz', 'pxd', 'qt', 'ram', 'rar', 'rm', 'rmi', 'rmvb', 'rt', 'rtf', 'sami', 'sbv', 'scc', 'sdc', 'sitd', 'smi', 'srt', 'stl', 'sub', 'svg', 'swf', 'sxc', 'sxw', 'tar', 'tds', 'tgz', 'tif', 'tiff', 'ttml', 'txt', 'vob', 'vsd', 'vtt', 'wav', 'webm', 'webp', 'wma', 'wmv', 'xls', 'xlsx', 'zip', ]`

Defined by
:   [GeneralConfig::$allowedFileExtensions  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-allowedfileextensions)

The file extensions Craft should allow when a user is uploading files.

```
// Nothing bug GIFs!
->allowedFileExtensions([
    'gif',
])
```

### [#](#convertfilenamestoascii)`convertFilenamesToAscii`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$convertFilenamesToAscii  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-convertfilenamestoascii)

Whether uploaded filenames with non-ASCII characters should be converted to ASCII (i.e. `ñ` → `n`).

You can run `php craft utils/ascii-filenames` in your terminal to apply ASCII filenames to all existing assets.

Static ConfigEnvironment Override

```
->convertFilenamesToAscii(false)
```

```
CRAFT_CONVERT_FILENAMES_TO_ASCII=false
```

### [#](#extrafilekinds)`extraFileKinds`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array)

Default value
:   `[]`

Defined by
:   [GeneralConfig::$extraFileKinds  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-extrafilekinds)

Since
:   3.0.37

List of additional file kinds Craft should support. This array will get merged with the one defined in
`\craft\helpers\Assets::_buildFileKinds()`.

```
->extraFileKinds([
    // merge .psb into list of Photoshop file kinds
    'photoshop' => [
        'extensions' => ['psb'],
    ],
    // register new "Stylesheet" file kind
    'stylesheet' => [
        'label' => 'Stylesheet',
        'extensions' => ['css', 'less', 'pcss', 'sass', 'scss', 'styl'],
    ],
])
```

File extensions listed here won’t immediately be allowed to be uploaded. You will also need to list them with
the [extraAllowedFileExtensions](docs_5x__reference__config__general.md#extraallowedfileextensions) config setting.

### [#](#filenamewordseparator)`filenameWordSeparator`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [false  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `'-'`

Defined by
:   [GeneralConfig::$filenameWordSeparator  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-filenamewordseparator)

The string to use to separate words when uploading assets. If set to `false`, spaces will be left alone.

Static ConfigEnvironment Override

```
->filenameWordSeparator(false)
```

```
CRAFT_FILENAME_WORD_SEPARATOR=false
```

### [#](#maxuploadfilesize)`maxUploadFileSize`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer), [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `16777216` (16MB)

Defined by
:   [GeneralConfig::$maxUploadFileSize  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-maxuploadfilesize)

The maximum upload file size allowed.

See [craft\helpers\ConfigHelper::sizeInBytes()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-sizeinbytes) for a list of supported value types.

Static ConfigEnvironment Override

```
// 25MB
->maxUploadFileSize(26214400)
```

```
# 25MB
CRAFT_MAX_UPLOAD_FILE_SIZE=26214400
```

### [#](#revasseturls)`revAssetUrls`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$revAssetUrls  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-revasseturls)

Since
:   3.7.0

Whether asset URLs should be revved so browsers don’t load cached versions when they’re modified.

Static ConfigEnvironment Override

```
->revAssetUrls(true)
```

```
CRAFT_REV_ASSET_URLS=true
```

### [#](#tempassetuploadfs)`tempAssetUploadFs`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$tempAssetUploadFs  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-tempassetuploadfs)

Since
:   5.0.0

The handle of the filesystem that should be used for storing temporary asset uploads. A local temp folder will
be used by default.

Static ConfigEnvironment Override

```
->tempAssetUploadFs('$TEMP_ASSET_UPLOADS_FS')
```

```
CRAFT_TEMP_ASSET_UPLOAD_FS=tempAssetUploads
```

## [#](#image-handling)Image Handling

### [#](#brokenimagepath)`brokenImagePath`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [GeneralConfig::$brokenImagePath  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-brokenimagepath)

Since
:   3.5.0

The server path to an image file that should be sent when responding to an image request with a
404 status code.

This can be set to an aliased path such as `@webroot/assets/404.svg`.

Static ConfigEnvironment Override

```
->brokenImagePath('@webroot/assets/404.svg')
```

```
CRAFT_BROKEN_IMAGE_PATH=@webroot/assets/404.svg
```

### [#](#defaultimagequality)`defaultImageQuality`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer)

Default value
:   `82`

Defined by
:   [GeneralConfig::$defaultImageQuality  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-defaultimagequality)

The quality level Craft will use when saving JPG and PNG files. Ranges from 1 (worst quality, smallest file) to
100 (best quality, biggest file).

Static ConfigEnvironment Override

```
->defaultImageQuality(90)
```

```
CRAFT_DEFAULT_IMAGE_QUALITY=90
```

### [#](#generatetransformsbeforepageload)`generateTransformsBeforePageLoad`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$generateTransformsBeforePageLoad  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-generatetransformsbeforepageload)

Whether image transforms should be generated before page load.

Static ConfigEnvironment Override

```
->generateTransformsBeforePageLoad(true)
```

```
CRAFT_GENERATE_TRANSFORMS_BEFORE_PAGE_LOAD=true
```

### [#](#imagedriver)`imageDriver`

Allowed types
:   `mixed`

Default value
:   `GeneralConfig::IMAGE_DRIVER_AUTO`

Defined by
:   [GeneralConfig::$imageDriver  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-imagedriver)

The image driver Craft should use to cleanse and transform images. By default Craft will use ImageMagick if it’s installed
and otherwise fall back to GD. You can explicitly set either `'imagick'` or `'gd'` here to override that behavior.

Static ConfigEnvironment Override

```
->imageDriver('imagick')
```

```
CRAFT_IMAGE_DRIVER=imagick
```

### [#](#imageeditorratios)`imageEditorRatios`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array)

Default value
:   `[ 'Unconstrained' => 'none', 'Original' => 'original', 'Square' => 1, '16:9' => 1.78, '10:8' => 1.25, '7:5' => 1.4, '4:3' => 1.33, '5:3' => 1.67, '3:2' => 1.5, ]`

Defined by
:   [GeneralConfig::$imageEditorRatios  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-imageeditorratios)

An array containing the selectable image aspect ratios for the image editor. The array must be in the format
of `label` => `ratio`, where ratio must be a float or a string. For string values, only values of “none” and “original” are allowed.

```
->imageEditorRatios([
    'Unconstrained' => 'none',
    'Original' => 'original',
    'Square' => 1,
    'IMAX' => 1.9,
    'Widescreen' => 1.78,
])
```

### [#](#maxcachedcloudimagesize)`maxCachedCloudImageSize`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer)

Default value
:   `0`

Defined by
:   [GeneralConfig::$maxCachedCloudImageSize  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-maxcachedcloudimagesize)

The maximum dimension size to use when caching images from external sources to use in transforms. Set to `0` to never cache them. Defaults to `0` as of 5.9.0. Earlier versions default to `2000`.

Static ConfigEnvironment Override

```
->maxCachedCloudImageSize(0)
```

```
CRAFT_MAX_CACHED_CLOUD_IMAGE_SIZE=0
```

### [#](#optimizeimagefilesize)`optimizeImageFilesize`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$optimizeImageFilesize  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-optimizeimagefilesize)

Whether Craft should optimize images for reduced file sizes without noticeably reducing image quality. (Only supported when
ImageMagick is used.)

Static ConfigEnvironment Override

```
->optimizeImageFilesize(false)
```

```
CRAFT_OPTIMIZE_IMAGE_FILESIZE=false
```

### [#](#preservecmykcolorspace)`preserveCmykColorspace`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$preserveCmykColorspace  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-preservecmykcolorspace)

Since
:   3.0.8

Whether CMYK should be preserved as the colorspace when manipulating images.

Setting this to `true` will prevent Craft from transforming CMYK images to sRGB, but on some ImageMagick versions it can cause
image color distortion. This will only have an effect if ImageMagick is in use.

Static ConfigEnvironment Override

```
->preserveCmykColorspace(true)
```

```
CRAFT_PRESERVE_CMYK_COLORSPACE=true
```

### [#](#preserveexifdata)`preserveExifData`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$preserveExifData  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-preserveexifdata)

Whether the EXIF data should be preserved when manipulating and uploading images.

Setting this to `true` will result in larger image file sizes.

This will only have effect if ImageMagick is in use.

Static ConfigEnvironment Override

```
->preserveExifData(true)
```

```
CRAFT_PRESERVE_EXIF_DATA=true
```

### [#](#preserveimagecolorprofiles)`preserveImageColorProfiles`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$preserveImageColorProfiles  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-preserveimagecolorprofiles)

Whether the embedded Image Color Profile (ICC) should be preserved when manipulating images.

Setting this to `false` will reduce the image size a little bit, but on some ImageMagick versions can cause images to be saved with
an incorrect gamma value, which causes the images to become very dark. This will only have effect if ImageMagick is in use.

Static ConfigEnvironment Override

```
->preserveImageColorProfiles(false)
```

```
CRAFT_PRESERVE_IMAGE_COLOR_PROFILES=false
```

### [#](#rasterizesvgthumbs)`rasterizeSvgThumbs`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$rasterizeSvgThumbs  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-rasterizesvgthumbs)

Since
:   3.6.0

Whether SVG thumbnails should be rasterized.

This will only work if ImageMagick is installed, and [imageDriver](docs_5x__reference__config__general.md#imagedriver) is set to either `auto` or `imagick`.

Static ConfigEnvironment Override

```
->rasterizeSvgThumbs(true)
```

```
CRAFT_RASTERIZE_SVG_THUMBS=true
```

### [#](#rotateimagesonuploadbyexifdata)`rotateImagesOnUploadByExifData`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$rotateImagesOnUploadByExifData  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-rotateimagesonuploadbyexifdata)

Whether Craft should rotate images according to their EXIF data on upload.

Static ConfigEnvironment Override

```
->rotateImagesOnUploadByExifData(false)
```

```
CRAFT_ROTATE_IMAGES_ON_UPLOAD_BY_EXIF_DATA=false
```

### [#](#transformgifs)`transformGifs`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$transformGifs  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-transformgifs)

Since
:   3.0.7

Whether GIF files should be cleansed/transformed.

Static ConfigEnvironment Override

```
->transformGifs(false)
```

```
CRAFT_TRANSFORM_GIFS=false
```

### [#](#transformsvgs)`transformSvgs`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$transformSvgs  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-transformsvgs)

Since
:   3.7.1

Whether SVG files should be transformed.

Static ConfigEnvironment Override

```
->transformSvgs(false)
```

```
CRAFT_TRANSFORM_SVGS=false
```

### [#](#upscaleimages)`upscaleImages`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$upscaleImages  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-upscaleimages)

Since
:   3.4.0

Whether image transforms should allow upscaling by default, for images that are smaller than the transform dimensions.

Static ConfigEnvironment Override

```
->upscaleImages(false)
```

```
CRAFT_UPSCALE_IMAGES=false
```

## [#](#graphql)GraphQL

### [#](#allowedgraphqlorigins)`allowedGraphqlOrigins`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[], [null  (opens new window)](https://php.net/language.types.null), [false  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `null`

Defined by
:   [GeneralConfig::$allowedGraphqlOrigins  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-allowedgraphqlorigins)

Since
:   3.5.0

Deprecated
:   in 4.11.0. [[\craft\filters\Cors]] should be used instead.

The Ajax origins that should be allowed to access the GraphQL API, if enabled.

If this is set to an array, then `graphql/api` requests will only include the current request’s [origin  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-request#getOrigin()-detail)
in the `Access-Control-Allow-Origin` response header if it’s listed here.

If this is set to `false`, then the `Access-Control-Allow-Origin` response header will never be sent.

Static ConfigEnvironment Override

```
->allowedGraphqlOrigins(false)
```

```
CRAFT_ALLOW_GRAPHQL_ORIGINS=false
```

### [#](#disablegraphqltransformdirective)`disableGraphqlTransformDirective`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$disableGraphqlTransformDirective  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-disablegraphqltransformdirective)

Since
:   3.6.0

Deprecated
:   in 5.9.0

Whether the `@transform` directive should be disabled for the GraphQL API.

Static ConfigEnvironment Override

```
->disableGraphqlTransformDirective(true)
```

```
CRAFT_DISABLE_GRAPHQL_TRANSFORM_DIRECTIVE=true
```

As of Craft 5.9.0, the `@transform` directive can be optionally included for each GraphQL schema,
unless this setting is set to `true`.

### [#](#enablegql)`enableGql`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$enableGql  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-enablegql)

Since
:   3.3.1

Whether the GraphQL API should be enabled.

The GraphQL API is only available for Craft Pro.

Static ConfigEnvironment Override

```
->enableGql(false)
```

```
CRAFT_ENABLE_GQL=false
```

### [#](#enablegraphqlcaching)`enableGraphqlCaching`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$enableGraphqlCaching  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-enablegraphqlcaching)

Since
:   3.3.12

Whether Craft should cache GraphQL queries.

If set to `true`, Craft will cache the results for unique GraphQL queries per access token. The cache is automatically invalidated any time
an element is saved, the site structure is updated, or a GraphQL schema is saved.

This setting will have no effect if a plugin is using the [craft\services\Gql::EVENT\_BEFORE\_EXECUTE\_GQL\_QUERY  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-gql.html#constant-event-before-execute-gql-query) event to provide its own
caching logic and setting the `result` property.

Static ConfigEnvironment Override

```
->enableGraphqlCaching(false)
```

```
CRAFT_ENABLE_GRAPHQL_CACHING=false
```

### [#](#enablegraphqlintrospection)`enableGraphqlIntrospection`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$enableGraphqlIntrospection  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-enablegraphqlintrospection)

Since
:   3.6.0

Whether GraphQL introspection queries are allowed. Defaults to `true` and is always allowed in the control panel.

Static ConfigEnvironment Override

```
->enableGraphqlIntrospection(false)
```

```
CRAFT_ENABLE_GRAPHQL_INTROSPECTION=false
```

### [#](#gqltypeprefix)`gqlTypePrefix`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `''`

Defined by
:   [GeneralConfig::$gqlTypePrefix  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-gqltypeprefix)

Prefix to use for all type names returned by GraphQL.

Static ConfigEnvironment Override

```
->gqlTypePrefix('craft_')
```

```
CRAFT_GQL_TYPE_PREFIX=craft_
```

### [#](#lazygqltypes)`lazyGqlTypes`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$lazyGqlTypes  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-lazygqltypes)

Since
:   5.3.0

Whether GraphQL types should be generated lazily.

Static ConfigEnvironment Override

```
->lazyGqlTypes(true)
```

```
CRAFT_LAZY_GQL_TYPES=true
```

### [#](#maxgraphqlbatchsize)`maxGraphqlBatchSize`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer)

Default value
:   `0`

Defined by
:   [GeneralConfig::$maxGraphqlBatchSize  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-maxgraphqlbatchsize)

Since
:   4.5.5

The maximum allowed GraphQL queries that can be executed in a single batched request. Set to `0` to allow any number of queries.

Static ConfigEnvironment Override

```
->maxGraphqlBatchSize(5)
```

```
CRAFT_MAX_GRAPHQL_BATCH_SIZE=5
```

### [#](#maxgraphqlcomplexity)`maxGraphqlComplexity`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer)

Default value
:   `0`

Defined by
:   [GeneralConfig::$maxGraphqlComplexity  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-maxgraphqlcomplexity)

Since
:   3.6.0

The maximum allowed complexity a GraphQL query is allowed to have. Set to `0` to allow any complexity.

Static ConfigEnvironment Override

```
->maxGraphqlComplexity(500)
```

```
CRAFT_MAX_GRAPHQL_COMPLEXITY=500
```

### [#](#maxgraphqldepth)`maxGraphqlDepth`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer)

Default value
:   `0`

Defined by
:   [GeneralConfig::$maxGraphqlDepth  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-maxgraphqldepth)

Since
:   3.6.0

The maximum allowed depth a GraphQL query is allowed to reach. Set to `0` to allow any depth.

Static ConfigEnvironment Override

```
->maxGraphqlDepth(5)
```

```
CRAFT_MAX_GRAPHQL_DEPTH=5
```

### [#](#maxgraphqlresults)`maxGraphqlResults`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer)

Default value
:   `0`

Defined by
:   [GeneralConfig::$maxGraphqlResults  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-maxgraphqlresults)

Since
:   3.6.0

The maximum allowed results for a single GraphQL query. Set to `0` to disable any limits.

Static ConfigEnvironment Override

```
->maxGraphqlResults(100)
```

```
CRAFT_MAX_GRAPHQL_RESULTS=100
```

### [#](#prefixgqlroottypes)`prefixGqlRootTypes`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `true`

Defined by
:   [GeneralConfig::$prefixGqlRootTypes  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-prefixgqlroottypes)

Since
:   3.6.6

Whether the [gqlTypePrefix](docs_5x__reference__config__general.md#gqltypeprefix) config setting should have an impact on `query`, `mutation`, and `subscription` types.

Static ConfigEnvironment Override

```
->prefixGqlRootTypes(false)
```

```
CRAFT_PREFIX_GQL_ROOT_TYPES=false
```

### [#](#setgraphqldatestosystemtimezone)`setGraphqlDatesToSystemTimeZone`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$setGraphqlDatesToSystemTimeZone  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-setgraphqldatestosystemtimezone)

Since
:   3.7.0

Whether dates returned by the GraphQL API should be set to the system time zone by default, rather than UTC.

Static ConfigEnvironment Override

```
->setGraphqlDatesToSystemTimeZone(true)
```

```
CRAFT_SET_GRAPHQL_DATES_TO_SYSTEM_TIMEZONE=true
```

## [#](#garbage-collection)Garbage Collection

### [#](#purgependingusersduration)`purgePendingUsersDuration`

Allowed types
:   `mixed`

Default value
:   `0`

Defined by
:   [GeneralConfig::$purgePendingUsersDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-purgependingusersduration)

The amount of time to wait before Craft purges pending users from the system that have not activated.

Any content assigned to a pending user will be deleted as well when the given time interval passes.

Set to `0` to disable this feature.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Users will only be purged when [garbage collection  (opens new window)](docs_5x__system__gc.md) is run.

Static ConfigEnvironment Override

```
// 2 weeks
->purgePendingUsersDuration(1209600)
```

```
# 2 weeks
CRAFT_PURGE_PENDING_USERS_DURATION=1209600
```

### [#](#purgestaleusersessionduration)`purgeStaleUserSessionDuration`

Allowed types
:   `mixed`

Default value
:   `7776000` (90 days)

Defined by
:   [GeneralConfig::$purgeStaleUserSessionDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-purgestaleusersessionduration)

Since
:   3.3.0

The amount of time to wait before Craft purges stale user sessions from the sessions table in the database.

Set to `0` to disable this feature.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
// 1 week
->purgeStaleUserSessionDuration(604800)
```

```
# 1 week
CRAFT_PURGE_STALE_USER_SESSION_DURATION=604800
```

### [#](#purgeunsaveddraftsduration)`purgeUnsavedDraftsDuration`

Allowed types
:   `mixed`

Default value
:   `2592000` (30 days)

Defined by
:   [GeneralConfig::$purgeUnsavedDraftsDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-purgeunsaveddraftsduration)

Since
:   3.2.0

The amount of time to wait before Craft purges unpublished drafts that were never updated with content.

Set to `0` to disable this feature.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
->purgeUnsavedDraftsDuration(0)
```

```
CRAFT_PURGE_UNSAVED_DRAFTS_DURATION=0
```

### [#](#softdeleteduration)`softDeleteDuration`

Allowed types
:   `mixed`

Default value
:   `2592000` (30 days)

Defined by
:   [GeneralConfig::$softDeleteDuration  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-softdeleteduration)

Since
:   3.1.0

The amount of time before a soft-deleted item will be up for hard-deletion by garbage collection.

Set to `0` if you don’t ever want to delete soft-deleted items.

See [craft\helpers\ConfigHelper::durationInSeconds()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-confighelper.html#method-durationinseconds) for a list of supported value types.

Static ConfigEnvironment Override

```
->softDeleteDuration(0)
```

```
CRAFT_SOFT_DELETE_DURATION=0
```

## [#](#users)Users

### [#](#disable2fa)`disable2fa`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$disable2fa  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-disable2fa)

Since
:   5.6.0

Whether two-step verification features should be disabled.

Static ConfigEnvironment Override

```
->disable2fa()
```

```
CRAFT_DISABLE_2FA=true
```

### [#](#extralastnameprefixes)`extraLastNamePrefixes`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[]

Default value
:   `[]`

Defined by
:   [GeneralConfig::$extraLastNamePrefixes  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-extralastnameprefixes)

Since
:   4.3.0

Any additional last name prefixes that should be supported by the name parser.

Static ConfigEnvironment Override

```
->extraLastNamePrefixes(['Dal', 'Van Der'])
```

```
CRAFT_EXTRA_LAST_NAME_PREFIXES="Dal,Van Der"
```

### [#](#extranamesalutations)`extraNameSalutations`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[]

Default value
:   `[]`

Defined by
:   [GeneralConfig::$extraNameSalutations  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-extranamesalutations)

Since
:   4.3.0

Any additional name salutations that should be supported by the name parser.

Static ConfigEnvironment Override

```
->extraNameSalutations(['Lady', 'Sire'])
```

```
CRAFT_EXTRA_NAME_SALUTATIONS=Lady,Sire
```

### [#](#extranamesuffixes)`extraNameSuffixes`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)[]

Default value
:   `[]`

Defined by
:   [GeneralConfig::$extraNameSuffixes  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-extranamesuffixes)

Since
:   4.3.0

Any additional name suffixes that should be supported by the name parser.

Static ConfigEnvironment Override

```
->extraNameSuffixes(['CCNA', 'OBE'])
```

```
CRAFT_EXTRA_NAME_SUFFIXES=CCNA,OBE
```

### [#](#showfirstandlastnamefields)`showFirstAndLastNameFields`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [GeneralConfig::$showFirstAndLastNameFields  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html#property-showfirstandlastnamefields)

Since
:   4.6.0

Whether “First Name” and “Last Name” fields should be shown in place of “Full Name” fields.

Static ConfigEnvironment Override

```
->showFirstAndLastNameFields()
```

```
CRAFT_SHOW_FIRST_AND_LAST_NAME_FIELDS=true
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)

Parts of this page are generated or assembled by automations. While we greatly appreciate contributions to the documentation, [reporting automated content issues](https://github.com/craftcms/docs/issues/new/choose) will allow us to fix them at the source!
