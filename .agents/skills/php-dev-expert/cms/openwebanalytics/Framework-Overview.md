# Framework Overview · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Framework-Overview

---

The OWA framework is comprised of several specialized objects/classes that can be used to accomplish various tasks.

## OWA Caller

`\OWA\Core\Caller` is the object that is used to [invoke](Invocation.md) and initialize the OWA framework. This object is typically what is embedded in your PHP script or application if you are not using the Javascript method of invoking OWA. The `\OWA\Core\Caller` object can be extended to add integration specific logic.

## Service Layer

The highest level the OWA framework is the Service layer. OWA's Service layer is a global singleton and in turn houses a number of other global objects that are outlined below.

### Request Container

The `requestContainer` object houses all the data that was was submitted with the web request. This includes GET, POST, COOKIE, and OWA specific request params. You can retrieve the Service layer using `\OWA\Core\CoreAPI::serviceSingleton()`.

### Current User

This is a `\OWA\Module\Base\Classes\ServiceUser` object for the user that has initiated the request. The current user is used by authentication modules as well as whenever you need to get data about the current user.

### Modules

Modules are discreet collections of features or functionality that can be developed separately from the OWA core. The service layer houses an array of all active modules. See [Modules](Creating-A-New-Module.md) for more detail on how to build your own module.

## CoreAPI

`\OWA\Core\CoreAPI` is a collection of methods that can be statically called from within any OWA class or object. The coreAPI is there to simplify access to the methods and properties contained in OWA's global objects.

## Global Objects

OWA has a number of other global objects or singletons all of which can be accessed via the coreAPI.

### Settings

`\OWA\Module\Base\Classes\Settings` is the global configuration object that houses all settings for all modules. This object can be accessed via `\OWA\Core\CoreAPI::configSingleton()`. See [Settings](Configuration.md) for more information about how to access individual settings values from within your classes.

### Configuration File

The OWA framework looks for certain global configuration settings it's configuration file - `owa-config.php`. This file is created during install and is not part of the OWA distribution so it can be maintained without fear of it ever being overwritten as you upgrade. See [Configuration File](Configuration.md) for more info on the settings you can control in `owa-config.php`.

### Database Access Object

OWA accesses its database via a global access object. This object can be retrieved by caling `\OWA\Core\CoreAPI::dbSingleton()`.

### Error

`\OWA\Module\Base\Classes\Error` is the global error handling and logging object. It can be retrieved by calling `\OWA\Core\CoreAPI::errorSingleton()`. See [Debugging OWA](Troubleshooting.md) for more information on how to log errors and debug information.

## Plugins

Plugins are special objects that extend the core functionality of the OWA
framework. Developers can write plugins to extend certain portions of OWA
including:

- Authentication
- Database Access
- Form Field Validation
- Geo-location Services

## A note on class names

The names above are the current, namespaced ones. OWA also still answers to the
old global names — `owa_coreAPI`, `owa_lib`, `owa_module` and the rest — through
a compatibility bridge, so third-party modules written against them keep working.
That bridge is removed at **2.0**. New code should use the namespaced names.
