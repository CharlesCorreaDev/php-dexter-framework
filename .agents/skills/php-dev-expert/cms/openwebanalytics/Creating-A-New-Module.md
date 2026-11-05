# Creating A New Module · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Creating-A-New-Module

---

OWA's functionality is modular. A module can add event handlers, entities,
metrics, reports, controllers and settings screens, and it lives entirely in its
own directory under `/path/to/owa/modules`.

Classes are loaded by **Composer's PSR-4 autoloader**, so the directory and class
names below are not a convention you may vary — a file in the wrong place, or a
class whose name does not match its file, simply will not load.

## Directory structure

A module's directory is **PascalCase**, and so are its class subdirectories. For a
module whose runtime name is `weather`, the directory is `Weather`:

```
/path/to/owa/modules/Weather/
    Module.php          the module class itself (required)
    Classes/            helper classes
    Entity/             entity classes, one per database table
    Handler/            event handler classes
    Metric/             metric classes (most metrics are declarations instead — see below)
    Update/             schema update classes, named UpdateNNN.php
    Controller/         controllers
    View/               views
    templates/          templates the views render
    reports/            report definitions (JSON)
    config/             configuration
```

Only `Module.php` is required. Create the subdirectories a module actually uses.

The namespace follows the directory: everything in `modules/Weather/Entity/` is
`OWA\Module\Weather\Entity\<ClassName>` in `<ClassName>.php`.

## Module.php

`Module.php` declares the module, and is where registrations go — event handlers,
entities, metrics, filters, CLI commands and reports.

```
<?php
namespace OWA\Module\Weather;

class Module extends \OWA\Core\Module {

    function __construct() {

        $this->name = 'weather';                // runtime name, no spaces, lowercase
        $this->display_name = 'Weather';
        $this->group = 'weather';
        $this->author = 'Joe Smith';
        $this->version = '1.0';
        $this->description = 'Weather data for reports.';
        $this->config_required = false;
        $this->required_schema_version = 1;     // bump when you add an Update class

        parent::__construct();
    }
}
```

The class is always named `Module`, in namespace `OWA\Module\<DirectoryName>`. The
`nameModule` convention described by older documentation no longer applies.

**Read a shipped module rather than starting from nothing.** `modules/Hello/` is
the reference example: a module class, a registered action, a controller, a view,
a template and a report definition, in the layout above and nothing more.
`modules/Domstream/` and `modules/MaxmindGeoip/` are working modules of
increasing size.

## Entities

Entities are the objects OWA persists. An entity that is stored in a database has
its own table, and the entity class describes its columns.

Entity classes live in `Entity/` and are registered in `Module.php` with
`registerEntity()`, which is what causes their tables to be created at install.
Reach one at runtime with `\OWA\Core\CoreAPI::entityFactory('weather.forecast')`.

See [Entities](Entities.md).

## Metrics

Most metrics are **declarations**, not classes — a module says what a metric
measures and against which entity, in `registerMetrics()`:

```
$this->registerMetricDefinition(array(
    'name'        => 'forecasts',
    'label'       => 'Forecasts',
    'entity'      => 'weather.forecast',
    'metric_type' => 'count',
    'data_type'   => 'integer',
    'column'      => 'id'
));
```

Only a metric that genuinely has to issue its own query needs a class in
`Metric/`. See [Metrics](Metrics.md).

## Reports

A report is a JSON definition in the module's `reports/` directory, registered by
id — not a controller. See [Report Definitions](Report-Definitions.md).

## Schema updates

When a module's tables change after release, add an `Update/UpdateNNN.php` class
and raise `required_schema_version` to `NNN`. `php cli.php cmd=update` applies
every update above an installation's recorded version, per module.

Updates must be idempotent and must implement a working `down()`. See
[Schema Updater](Schema-Updater.md).

## Installing your module

```
/path/to/php cli.php cmd=activate module=weather
```

This creates the module's tables, records its schema version and activates it.
It is safe to run again.

## See also

[Framework Overview](Framework-Overview.md) · [Event Handlers](Event-Handlers.md) ·
[Entities](Entities.md) · [Metrics](Metrics.md) · [Report Definitions](Report-Definitions.md) ·
[Settings API](Settings-API.md) · [Filters](Filters.md) · [Testing](Testing.md)
