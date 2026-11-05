# What Dev Mode Does | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/what-dev-mode-does

---

Search Knowledge Base

# What Dev Mode Does

![](https://craftcms.com/dist/images/icon-warning.svg)

`devMode` is intended only for local development. It should never be enabled on a public server, as it can expose parts of your system (and its users) that can otherwise be considered private.

## Enabling `devMode` [#](#enabling-devMode "Direct link to Enabling devMode")

`devMode` is enabled with the [general config setting](https://craftcms.com/docs/5.x/reference/config/general.html#devmode) of the same name…

```
use craft\config\GeneralConfig;

return GeneralConfig::create()
    // ... other settings
    ->devMode(true);
```

…or by setting the `CRAFT_DEV_MODE` environment variable:

```
# ... other environment variables
CRAFT_DEV_MODE=true
```

It is also *on* by default for [new projects](https://github.com/craftcms/craft), so that you can use the [web-based installer](kb__first-time-setup.md#gui).

## `devMode` Features [#](#devMode-features "Direct link to devMode Features")

With `devMode` enabled, you have access to extra information and tools that make working on your project (or a plugin) easier:

- PHP errors and exceptions will be reported in the browser window, with a complete stack trace and code previews;
- Template syntax errors will be reported in the browser with a preview of the offending template;
- Craft will [log](https://craftcms.com/docs/5.x/system/logging.html) the following items for each request (some support in Craft 3, expanded Craft 4):

  - Query string variables
  - GET query params or POST body data
  - Active cookies
  - Active session variables
- [Multi-line](https://craftcms.com/docs/5.x/system/logging.html#logs-in-different-environments) log messages are permitted (Craft 4 and later);
- [Info-level messages](https://craftcms.com/docs/5.x/system/logging.html#levels) are written to logs, in addition to those of greater severity;
- PHP warnings and notices are logged (as opposed to just PHP errors and exceptions);
- PHP errors that happen during a request that includes an `Accept: application/json` header are returned (along with a stack trace) as JSON (Craft 4 and later);
- The [Yii debug toolbar](https://www.yiiframework.com/extension/yii-debug-toolbar) can be forced on for the request by sending the `X-Debug: enable` header;
- Verbose errors are sent when using GraphQL;
- Queue errors are reported more verbosely in the control panel;
- The control panel’s front-end resource files won’t get cached;
- Twig’s [dump()](https://twig.symfony.com/doc/functions/dump.html) function will be enabled;
- Twig’s `debug` and `strict_variables` options will be set to `true` (see Twig’s [Environment Options](https://twig.symfony.com/doc/api.html#environment-options) for more info);
- The global `devMode` variable in Twig templates is set to `true`;
- Craft’s [graphical setup wizard](kb__first-time-setup.md#gui) is enabled;

To reduce the chance of accidentally leaving `devMode` enabled, each page of the control panel gets a “caution tape” indicator at the bottom of the left sidebar:

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Control Panel, devMode enabled]()

Craft control panel with devMode enabled, indicated by the “caution tape” in the lower-left corner.

Applies to
Craft CMS 4 and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
