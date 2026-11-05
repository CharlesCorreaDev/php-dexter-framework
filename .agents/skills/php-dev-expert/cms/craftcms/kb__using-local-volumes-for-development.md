# Using Local Volumes for Development | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/using-local-volumes-for-development

---

Search Knowledge Base

# Using Local Volumes for Development

If your project’s assets are stored in remote volumes, such as [Amazon S3](https://plugins.craftcms.com/aws-s3), [Google Cloud Storage](https://plugins.craftcms.com/google-cloud), or [DigitalOcean Spaces](https://plugins.craftcms.com/dospaces), then you may wish to use a local volume for your development environment—especially if you are working with an intermittent or metered internet connection.

## No-Code Option [#](#no-code-option "Direct link to No-Code Option")

Asset volumes in Craft support dynamically-defined filesystems. In addition to selecting a filesystem from a volume’s **Asset Filesystem** dropdown, you may use an environment variable that contains a valid filesystem handle. Either way, Craft will be able to locate a named filesystem for use with the volume at runtime!

To adopt this pattern, add a second “Local” filesystem. Supposing its name is “Hard Disk” and its handle is set to `hdd`, you can add this to your `.env` file:

```
DYNAMIC_FS="hdd"
```

Then, in your volume’s configuration screen, select `$DYNAMIC_FS` from the **Asset Filesystem** field:

![](https://craftcms.com/dist/images/icon-loading.png)

![Using Environment Variable in Asset Volume Settings]()

Only variables that contain valid filesystem handles will be shown as options or auto-completed.

Your production environment must now define the same `DYNAMIC_FS` variable, or Craft won’t know which filesystem to use—but the value should match the handle of your *remote* filesystem!

If you have multiple asset volumes and filesystems, you will need to define development filesystems and environment variables for each one to prevent overlap between their folder structures.

![](https://craftcms.com/dist/images/icon-tip.svg)

It’s important to note that additional filesystem configurations *will* end up in Project Config, so be sure and communicate with your team about the intended use for each filesystem.

## Using Dependency Injection [#](#using-dependency-injection "Direct link to Using Dependency Injection")

Yii’s [dependency injection container](https://www.yiiframework.com/doc/guide/2.0/en/concept-di-container) is a powerful tool that gives you fine-grained control over how each system component is initialized. We’ll use it to quietly swap out one filesystem class for another, at runtime.

![](https://craftcms.com/dist/images/icon-warning.svg)

These instructions apply broadly to Craft 3.5 and later, but code samples target Craft 4.x. See the [Craft 3](#craft-3) section for specific differences!

### Add the dependency injection code [#](#add-the-dependency-injection-code "Direct link to Add the dependency injection code")

First you will need to [create a module](https://craftcms.com/docs/4.x/extend/module-guide.html). You can use the one that came with your Craft installation by default if you used the [craftcms/craft](https://github.com/craftcms/craft) starter project, or you use the [generator](https://github.com/craftcms/generator) to scaffold a new one.

Add this code to the end of your module’s `init()` method:

```
use Craft;
use craft\fs\Local;
use craft\awss3\Fs as AwsFs;

// ...

if (Craft::$app->getConfig()->getGeneral()->devMode) {
    Craft::$container->set(AwsFs::class, function($container, $params, $config) {
        // Is this an empty model definition?
        // It’s probably just being created (not populated from config), so let’s leave it alone:
        if (empty($config['handle'])) {
            return new AwsFs($config);
        }

        $handle = $config['handle'] ?? null;

        // Build up a safe config object for the Local filesystem class:
        $localConfig = [
            'name' => $config['name'] ?? null,
            'handle' => $handle,
            'hasUrls' => $config['hasUrls'] ?? null,
            // Override disk path and URLs:
            'url' => "@web/local-volumes/{$handle}",
            'path' => "@webroot/local-volumes/{$handle}",
        ];

        // Avoid `array_merge()`, as it may introduce unsupported properties!

        // Return the replacement object:
        return new Local($localConfig);
    });
}
```

Then open `config/app.php` and make sure your module’s ID is listed in the `bootstrap` array (and that the line isn’t commented out). Bootstrapping your module ensures that it will get loaded at the beginning of every request.

With that code in place, all of your S3 volumes will suddenly become Local volumes, and their Base URL and File System Path settings will point to a `local-volumes/<handle>/` folder within your site’s webroot.

### Other Storage Drivers [#](#other-storage-drivers "Direct link to Other Storage Drivers")

If your base configuration uses something other than our Amazon S3 plugin, replace `craft\awss3\Fs` with the actual filesystem type you want to be converted.

Installations that use multiple remote filesystem types may require additional configuration blocks to fully convert them to a local-only

### Craft 3 [#](#craft-3 "Direct link to Craft 3")

Filesystems are a Craft 4 concept. For Craft 3, you will need to use the “Volume” type by replacing instance of these classes:

- `craft\fs\Local` → `craft\volumes\Local`
- `craft\awss3\Fs` → `craft\awss3\Volume`

Additional properties are required in your configuration object, as well:

```
return new Local([
    // ...

    'fieldLayoutId' => $config['fieldLayoutId'],
]);
```

Otherwise, the principles remain the same—we are telling Yii that instances of a particular class should be replaced with another class, then translating the relevant configuration options.

![](https://craftcms.com/dist/images/icon-warning.svg)

Keep in mind that your dependency injection code will be in effect at all times for your dev environment, so you will need to comment it out when editing an existing volume’s settings or rebuilding [project config](https://craftcms.com/docs/4.x/project-config.html).

### Gitignore the `local-volumes/` folder [#](#gitignore-the-local-volumes-folder "Direct link to Gitignore the local-volumes/ folder")

We don’t want that `local-volumes/` folder to be tracked by Git, so make sure its path (or a parent path) is present in your `.gitignore` file at the root of your project:

```
web/local-volumes/
```

If your site’s webroot is located somewhere besides `web/`, replace that with the actual webroot path.

### Swap Criteria [#](#swap-criteria "Direct link to Swap Criteria")

Adjust the `if` statement that surrounds the configuration code above to reflect the scenario(s) in which the remote volume should be replaced. For example, to have independent control of [`devMode`](https://craftcms.com/docs/4.x/config/general.html#devmode) and the filesystem type, you might compare against a dedicated environment variable:

```
if (\craft\helpers\App::env('USE_LOCAL_VOLUMES')) {
    // ...
}
```

## Pull Assets [#](#pull-assets "Direct link to Pull Assets")

You will immediately be able to upload new assets to your local volume, but your control over previously-uploaded assets (specifically, the underlying files) may be limited. Craft tracks the expected location of each asset in the database, and will be unable to perform any kind of operation on images it thinks are missing—including relocating, renaming, or generating transforms.

Capture a database backup on the environment that has the most authoritative record of what assets exist in the remote volume, then copy some or all of the assets down to your development machine. This process will look different depending on the provider—it may involve a proprietary CLI, or an app like [Transmit](https://panic.com/transmit/) that supports a variety of access schemes.

![](https://craftcms.com/dist/images/icon-warning.svg)

Breaking the relationship between a volume and the “real” storage medium means that Craft can quickly lose track of files at the source.

This is intended **exclusively** as a development tool, and should not be used as a means of permanently altering your storage configuration.

Applies to
Craft CMS 4 and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
