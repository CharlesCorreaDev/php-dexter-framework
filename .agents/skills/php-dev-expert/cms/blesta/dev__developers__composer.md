# Composer | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/developers/composer

---

Version: 6

On this page

Blesta and its bundled extensions use [Composer](https://getcomposer.org) to manage PHP dependencies. This page covers what extension authors need to know about Composer in Blesta 6.0+.

## Composer 2 is required[â](#composer-2-is-required "Direct link to Composer 2 is required")

Blesta 6.0 requires **Composer 2.x**. Composer 1.x is no longer supported.

If you are running Composer 1, upgrade before working against the 6.x source tree:

```
composer self-update --2
```

You can verify the installed version with `composer --version`.

## `composer.lock` is committed[â](#composerlock-is-committed "Direct link to composerlock-is-committed")

Starting with Blesta 6.0, `composer.lock` is **no longer gitignored** at the repository root and inside bundled extensions. The lock file pins the exact dependency versions used in a release and is part of the source of truth.

For your own extensions:

- Commit `composer.lock` alongside `composer.json` so a fresh `composer install` reproduces the exact dependency tree you tested against.
- Run `composer update` deliberately when you want to pick up new dependency versions; commit the updated lock file with the change.

## Updating extension `composer.json`[â](#updating-extension-composerjson "Direct link to updating-extension-composerjson")

Plugin, module, gateway, and messenger authors should review their `composer.json` against the Blesta 6.0 baseline:

- **`"require"`** â Set the minimum PHP constraint to match the Blesta version you target. For 6.0+, use `"php": ">=8.2"`.
- **Library versions** â Several bundled extensions bumped their upstream client libraries for 6.0 (for example, `ovh/ovh` to `~3.5`, `openprovider/rest-client-php` to `v2`, `gocardless/gocardless-pro` to `^7.2`). If you fork or extend one of these, rebase against the upstream extension to inherit the new constraints.
- **Composer plugins** â Most Blesta extensions depend on `blesta/composer-installer ~1.0` so that Composer installs them into the correct directory under the Blesta install. Keep this dependency.
- **`config.allow-plugins`** â Composer 2 requires opt-in for installer plugins. Add the plugins your extension uses, for example:

composer.json (excerpt)

```
"config": {  
    "allow-plugins": {  
        "composer/installers": true,  
        "blesta/composer-installer": true  
    }  
}
```

## Example extension `composer.json`[â](#example-extension-composerjson "Direct link to example-extension-composerjson")

/plugins/my\_plugin/composer.json

```
{  
    "name": "vendor/my_plugin",  
    "description": "My Plugin description",  
    "type": "blesta-plugin",  
    "license": "proprietary",  
    "require": {  
        "php": ">=8.2",  
        "blesta/composer-installer": "~1.0"  
    },  
    "config": {  
        "allow-plugins": {  
            "composer/installers": true,  
            "blesta/composer-installer": true  
        }  
    }  
}
```

The `type` value tells the Blesta installer where to drop the extension:

| Type | Installs to |
| --- | --- |
| `blesta-plugin` | `/plugins/{name}/` |
| `blesta-module` | `/components/modules/{name}/` |
| `blesta-gateway-merchant` | `/components/gateways/merchant/{name}/` |
| `blesta-gateway-nonmerchant` | `/components/gateways/nonmerchant/{name}/` |
| `blesta-messenger` | `/components/messengers/{name}/` |

## Installing dependencies during development[â](#installing-dependencies-during-development "Direct link to Installing dependencies during development")

From your extension directory:

```
composer install
```

This reads `composer.json`, resolves against `composer.lock` if present, and installs vendor packages under the extension's `vendor/` directory.

To bump dependencies and regenerate the lock file:

```
composer update
```

Commit both files together.

## See also[â](#see-also "Direct link to See also")

- [v6 Migration Guide](dev__guides__v6-migration-guide.md) â runtime changes that affect extensions, including Composer 2 and PHP 8.2+.
- [Plugin Configuration](dev__developers__plugins__plugin-configuration.md) â `config.json` reference.
