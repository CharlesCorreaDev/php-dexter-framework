# Example Data Library | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/developers/example-data

---

Version: 6

On this page

Blesta 6.0 ships an **Example Data Library** â a schema-driven set of JSON fixtures and a loader class that returns realistic example objects for Blesta models. It's used internally by the AI features to give the model context about Blesta's data shape, and it's available to plugin and module authors who need realistic sample data for tests, screenshot fixtures, or in-app previews.

## What it provides[â](#what-it-provides "Direct link to What it provides")

- 39 JSON fixture files under `core/Util/ExampleData/examples/` â one per model (`Clients.json`, `Invoices.json`, `Services.json`, `PackageOptions.json`, â¦).
- A loader class (`Blesta\Core\Util\ExampleData\ExampleDataLoader`) with helpers for loading single objects, traversing relationships to a configurable depth, listing what's available, and merging plugin-supplied fixtures into core ones.
- A discovery hook so plugins and modules can register their own examples directory and have the loader find their fixtures alongside core ones.

The loader is read-only: nothing is written to the database. Examples are static objects suitable for displaying in mockups or feeding to a downstream consumer (template renderer, AI prompt, etc.).

## Loading a single example[â](#loading-a-single-example "Direct link to Loading a single example")

```
use Blesta\Core\Util\ExampleData\ExampleDataLoader;  
  
$loader = new ExampleDataLoader();  
  
$client = $loader->loadExample('Clients');  
// stdClass: id, id_format, id_value, user_id, client_group_id, status, â¦
```

`loadExample($modelName, $useCache = true)` returns the parsed JSON as a `stdClass`, or `null` if no fixture exists for the requested model. Results are cached in-memory per loader instance; pass `false` for `$useCache` to force re-read from disk.

## Loading an object graph[â](#loading-an-object-graph "Direct link to Loading an object graph")

`getContext($modelName, array $options = [])` returns a single example with related objects loaded according to the model's schema definitions. Useful when you need a Client *with* its Contacts, Invoices, Services, etc. all attached.

```
$clientWithRelations = $loader->getContext('Clients', [  
    'depth' => 2,  
    'load_collections' => true  
]);
```

Recognized options:

| Option | Type | Default | Description |
| --- | --- | --- | --- |
| `preset` | string | â | Use a method preset from the schema (e.g. `'get'`, `'getAll'`). |
| `relationships` | array | all from schema/preset | Specific relationships to load. |
| `collections` | array | none | Specific has-many collections to load. |
| `virtual` | array | all from preset, or none | Virtual fields to generate (computed on the fly). |
| `depth` | int | `1` | How many relationship levels deep to traverse. |
| `load_collections` | bool | `false` | Load has-many collections. |
| `schema_mode` | bool | `false` | Return the schema definition instead of data. |
| `exclude_embedded` | bool | `false` | Skip embedded fields. |

## Listing what's available[â](#listing-whats-available "Direct link to Listing what's available")

```
$models = $loader->getAvailableModels();  
// ['ApiKeys', 'CalendarEvents', 'ClientGroupSettings', 'Clients', â¦]
```

Returns the union of core examples and any plugin/module paths registered via `addPluginPath()`.

## Adding examples from a plugin or module[â](#adding-examples-from-a-plugin-or-module "Direct link to Adding examples from a plugin or module")

Plugins and modules can ship their own JSON fixtures and register the directory with the loader:

```
$loader = new ExampleDataLoader();  
$loader->addPluginPath(__DIR__ . '/examples');  
  
$ticket = $loader->loadExample('SupportTickets');
```

Place one JSON file per model in your `examples/` directory. The filename (sans `.json`) is the model name passed to `loadExample()`. If a plugin file has the same name as a core file, the loader prefers the **core** file (plugin files only fill in models the core doesn't already have).

To **extend** rather than replace a core example with extra fields from your plugin (for example, adding a custom field your plugin attaches to Client records), use `mergeExample()`:

```
$pluginData = (object)[  
    'my_plugin_loyalty_tier' => 'gold',  
    'my_plugin_signup_source' => 'referral'  
];  
  
$client = $loader->mergeExample('Clients', $pluginData);
```

The merge is shallow: top-level keys on `$pluginData` are copied onto a clone of the core example.

## Cache control[â](#cache-control "Direct link to Cache control")

```
$loader->clearCache();           // Clear all cached examples  
$loader->clearCache('Clients');  // Clear just the Clients cache entry
```

## When to use it[â](#when-to-use-it "Direct link to When to use it")

- **Mocking the data layer in unit tests** â load a `Clients` fixture, push it into your assertion, no DB round-trip.
- **Screenshot fixtures** â use `getContext()` with `depth=2` to seed a realistic preview without inserting test data.
- **Feeding AI features** â the example library is what the Blesta AI features use to give the model concrete shape examples in addition to schemas. If you build an AI-powered plugin (see [AI for developers](dev__developers__ai.md)), reuse the same pattern.

## See also[â](#see-also "Direct link to See also")

- The [Schema Loader](https://source-docs.blesta.com/) (linked from source docs once published) â `Blesta\Core\Util\Schemas\SchemaLoader` is what `ExampleDataLoader` uses to traverse relationships.
- [AI for developers](dev__developers__ai.md) â the example data library complements the AI client wrapper for prompt-context building.
