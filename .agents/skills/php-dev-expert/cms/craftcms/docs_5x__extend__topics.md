# Topics | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/topics

---

# Topics

- ### On this Page

  - [Monitoring and Changing Behavior](docs_5x__extend__topics.md#monitoring-and-changing-behavior)
  - [Adding Features](docs_5x__extend__topics.md#adding-features)
  - [Working with Data](docs_5x__extend__topics.md#working-with-data)
  - [Using External Services](docs_5x__extend__topics.md#using-external-services)
  - [The Control Panel](docs_5x__extend__topics.md#the-control-panel)

Craft is both a fully-featured content management system *and* a powerful web application framework. Extensions allow you to build on top of its smart abstractions, or create completely new features that live alongside the main application.

This page collects some common extension vectors along that continuum.

Pardon the mess! We just launched this page, and plan to collect more resources here as they are updated with the [generator](docs_5x__extend__generator.md) in mind.

Questions? Feedback? Use the links at the bottom of any page to let us know what’s on your mind.

## [#](#monitoring-and-changing-behavior)Monitoring and Changing Behavior

You can be notified when certain things happen within a Craft application by listening for **events** or registering **hooks**.

### [#](#events)Events

Events are emitted throughout Craft’s request-response and model life cycles, giving developers a chance to react to (or alter) system behavior. This is far and away the most common point of entry for extensions—if you’re looking for a way to familiarize yourself with Craft’s internals, this is it!

[Events
→

Explore the myriad events Craft emits for customizing the behavior of built-in features.](docs_5x__extend__events.md)

### [#](#hooks)Hooks

Hooks are similar to [events](#events), but designed specifically for manipulating the context or output of templates. In addition to hooks provided by Craft’s own [control panel templates](docs_5x__extend__template-hooks.md#control-panel-template-hooks), plugins can fire their own hooks using the [`{% hook %}` tag](docs_5x__reference__twig__tags.md#hook).

[Template Hooks
→

Inspect template data and modify output with hooks.](docs_5x__extend__template-hooks.md)

## [#](#adding-features)Adding Features

While events enable a wide variety of customizations, some extensions will need to provide entirely new features.

### [#](#system-component-types)System Component Types

Craft’s most powerful features like elements and custom fields are built on interfaces and base classes that are also available to developers.

[Element Types
→

Add native-feeling content types to empower content authors and administrators.](docs_5x__extend__element-types.md) [Field Types
→

Custom field types are an essential piece of Craft’s powerful content modeling toolkit.](docs_5x__extend__field-types.md) [Filesystem Types
→

Filesystems are the foundation of Craft’s flexible asset management tools.](docs_5x__extend__filesystem-types.md) [Widget Types
→

Create customizable, heads-up resources for control panel users.](docs_5x__extend__widget-types.md) [Queue Jobs
→

Offloading work to a background process can improve the experience and reliability of your plugin’s functionality.](docs_5x__extend__queue-jobs.md)

### [#](#miscellany)Miscellany

Other high-impact places to dive in.

[Utilities
→

Utilities are special, non-content pages in the control panel, that provide access to back-office features or debugging data.](docs_5x__extend__utilities.md)

## [#](#working-with-data)Working with Data

Getting data from users and processing it safely.

### [#](#controllers-routing)Controllers + Routing

Learn about requests, routing, URL rules, responses, and Craft’s robust authorization and permissions systems.

[Controllers
→

Respond to HTTP requests by connecting them with back-end services.](docs_5x__extend__controllers.md) [User Permissions
→

Register a customizable permissions scheme for your plugin’s features.](docs_5x__extend__user-permissions.md)

### [#](#models-records)Models + Records

Extend built-in data types, define new ones, and consolidate logic.

[Behaviors
→

Behaviors enable plugins to decorate built-in classes with native-feeling attributes and methods.](docs_5x__extend__behaviors.md) [Services
→

Services are the clearinghouse for your plugin’s critical operations.](docs_5x__extend__services.md) [Soft Deletes
→

Make destructive actions reversible with soft-deletion.](docs_5x__extend__soft-deletes.md)

### [#](#caching)Caching

Sometimes, it can be expensive to repeatedly generate a dataset, or to block requests while waiting for a [third-party API](#using-external-services). Craft exposes a configurable [cache component  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/caching-data) that can store temporary data in a consistent way:

```
use Craft;

$params = [
    'productId' => 1234,
];

$key = 'my-plugin:' . md5(json_encode($params));

$value = Craft::$app->getCache()->getOrSet($key, function() {
    // Fetch remote data...

    return $data;
}, $duration);
```

Data returned from this method will be cached with `$key` for `$duration`—or, if `$key` was set within that duration, the data will be returned immediately.

All database queries have a [cache()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#cache()-detail) method, as well.

## [#](#using-external-services)Using External Services

Many plugins act as a bridge between Craft features and third-party services.

### [#](#making-http-requests)Making HTTP Requests

Whenever you need to call a remote web service, use the built-in [Guzzle  (opens new window)](http://docs.guzzlephp.org/en/latest/) factory:

```
use Craft;

$client = Craft::createGuzzleClient([
    'base_uri' => 'https://api.acme.com/v1',
]);

$response = $client->post('/widgets', [
    'json' => [
        'style' => 'fancy',
    ],
]);
```

Creating HTTP clients this way ensures that all outgoing requests are configured the same way—Craft will apply project-specific settings from the [Guzzle config file](docs_5x__configure.md#guzzle), as well as a [global `httpProxy`](docs_5x__reference__config__general.md#httpproxy).

Some third-party packages will use their own HTTP client. Whenever possible, provide the equivalent configuration to those adapters. Guzzle configuration (if any was provided) is available through the config service:

```
// Guzzle config object:
$guzzleConfig = Craft::$app->getConfig()->getConfigFromFile('guzzle');

// HTTP proxy:
$proxyConfig = Craft::$app->getConfig()->getGeneral()->httpProxy;
```

### [#](#writing-files)Writing Files

Any time your application needs to generate a temporary artifact, you can write it to a file with [craft\helpers\FileHelper  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-filehelper.html):

```
use Craft;
use craft\helpers\FileHelper;

$content = '# Todo List';

$filename = 'todos.md';
$tempDir = Craft::$app->getPath()->getTempPath();

$path = $tempDir . DIRECTORY_SEPARATOR . uniqid() . $filename;

FileHelper::writeToFile($path, $content);

// Pass $path back to another part of the application...
```

Notice that we’ve used [craft\services\Path::getTempPath()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-path.html#method-gettemppath) to keep our files alongside other runtime data. This helps Craft clean up temporary data via the [Caches utility](docs_5x__system__control-panel.md#utilities), or the [`clear-caches/temp-files` console command](docs_5x__reference__cli.md#clear-caches-temp-files).

[Logging](docs_5x__system__logging.md) should always be done via Craft’s convenience methods, not written directly to disk.

## [#](#the-control-panel)The Control Panel

Start learning about how to create new views in the [control panel](docs_5x__system__control-panel.md).

[Control Panel Sections
→](docs_5x__extend__cp-section.md)

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/topics.md)
