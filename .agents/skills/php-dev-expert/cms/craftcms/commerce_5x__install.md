# Installation | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/install

---

# Installation

- ### On this Page

  - [Pre-Flight check](commerce_5x__install.md#pre-flight-check)
  - [Plugin Store](commerce_5x__install.md#plugin-store)
  - [Composer](commerce_5x__install.md#composer)

## [#](#pre-flight-check)Pre-Flight check

Before installing Craft Commerce, make sure your web server meets Commerce’s [minimum requirements](commerce_5x__requirements.md).

## [#](#plugin-store)Plugin Store

Log into the control panel, navigate to **Plugin Store** and search for “Commerce.” Choose **Craft Commerce**, then click **Try**, or copy the install command.

## [#](#composer)Composer

To install via the CLI, run the following commands in an existing Craft 4 project:

```
composer require -w craftcms/commerce
php craft plugin/install commerce
```

If you are using DDEV, these shortcuts ensure the commands are run inside the appropriate container:

```
ddev composer require -w craftcms/commerce
ddev craft plugin/install commerce
```

New to Commerce? Consider copying the included [example templates](commerce_5x__development__example-templates.md) into your project as a starting point!

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/install.md)
