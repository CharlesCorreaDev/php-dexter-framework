# Filesystem Types | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/filesystem-types

---

# Filesystem Types

- ### On this Page

  - [Filesystem Class](docs_5x__extend__filesystem-types.md#filesystem-class)
  - [Registering your Filesystem Type](docs_5x__extend__filesystem-types.md#registering-your-filesystem-type)
  - [Implementation](docs_5x__extend__filesystem-types.md#implementation)
  - [Settings](docs_5x__extend__filesystem-types.md#settings)

Asset storage is split into two concepts:

- **Filesystems** establish relationships between Craft and a storage medium, like the local disk or an object storage API. A plugin can provide one or more [filesystem types](#filesystem-class).
- **Volumes** organize assets into sources that make sense for a site’s content model, define fields available to assets, and bind those sources to filesystems. All volumes are represented by the same class, and are not extensible.

## [#](#filesystem-class)Filesystem Class

Use the [generator](docs_5x__extend__generator.md) to create a filesystem class and register it with Craft:

php craft make filesystem-type  --plugin=my-plugin

Copy

If you are inclined to implement the filesystem type from scratch, extend [craft\base\Fs  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-fs.html). There are a number of first-party examples to look at, as well:

- [Amazon AWS S3  (opens new window)](https://github.com/craftcms/aws-s3)
- [Google Cloud Storage  (opens new window)](https://github.com/craftcms/google-cloud)
- [Azure Blob Storage  (opens new window)](https://github.com/craftcms/azure-blob)

Many more filesystem types are available in the [Plugin Store  (opens new window)](https://plugins.craftcms.com/categories/assets?craft4).

## [#](#registering-your-filesystem-type)Registering your Filesystem Type

Once you have created your filesystem class, you must register it with the `Fs` service so Craft will know about it when populating the list of available filesystem types:

```
<?php
namespace mynamespace;

use craft\events\RegisterComponentTypesEvent;
use craft\services\Fs;
use mynamespace\fs\MyFs;
use yii\base\Event;

class Plugin extends \craft\base\Plugin
{
    public function init()
    {
        Event::on(
            Fs::class,
            Fs::EVENT_REGISTER_FILESYSTEM_TYPES,
            function(RegisterComponentTypesEvent $event) {
                $event->types[] = MyFs::class;
            }
        );

        // ...
    }

    // ...
}
```

The generator takes care of this for you!

## [#](#implementation)Implementation

Filesystems are complex components, and their implementation is almost entirely dependent on the storage medium they target. Consider reviewing [craft\base\FsInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-fsinterface.html), as well as the built-in [Local  (opens new window)](https://docs.craftcms.com/api/v5/craft-fs-local.html) filesystem for some ideas about their responsibilities.

### [#](#flysystem)Flysystem

If you are targeting a popular storage service, you may be able to extend [`craft\flysystem\base\FlysystemFs`  (opens new window)](https://github.com/craftcms/flysystem), and connect an existing [Flysystem  (opens new window)](https://github.com/thephpleague/flysystem) adapter.

Should that support exist, you can focus on exposing the adapter’s parameters as [settings](#settings) in a Craft-native way.

## [#](#settings)Settings

A filesystem class is responsible for declaring configurable attributes, validating and normalizing input, and mapping those settings to its underlying adapter (when using [Flysystem](#flysystem)), or using them in the class itself as part of authorizing or managing file operations.

Users will be presented with the output of your class’s `getSettingsHtml()` method when configuring a new or existing filesystem.

Use [auto-suggest inputs](docs_5x__extend__environmental-settings.md#autosuggest-inputs) to make entry of environment variables and aliases easier on your users.

Craft will take care of assigning settings fields into your filesystem class prior to validating or saving it, as long as your inputs’ `name`s match up with filesystem class properties. The entire return value from `getSettingsHtml()` is namespaced to avoid collisions with other filesystem type properties, and settings common to all filesystems (like their name and handle) are merged automatically.

Filesystems are stored in [project config](docs_5x__extend__project-config.md). Craft takes care of packing your class’s public properties into a serializable configuration object by virtue of extending from [craft\base\SavableComponent  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-savablecomponent.html) and [craft\base\ConfigurableComponent  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-configurablecomponent.html).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/filesystem-types.md)
