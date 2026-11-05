# Developer Overview — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/intro/development.html

---

# Developer Overview[](#developer-overview "Permalink to this heading")

This is a quick developer introduction to Elgg. It covers the basic approach to working with
Elgg as a framework, and mentions some of the terms and technologies used.

See the [Developer Guides](guides__index.md) for tutorials or the [Design Docs](design__index.md) for in-depth discussion on design.

## Database and Persistence[](#database-and-persistence "Permalink to this heading")

Elgg uses a database for data persistence, and maps database values into Entities (a
representation of an atomic unit of information) and Extenders (additional information and
descriptions about Entities). Elgg supports additional information such as relationships between
Entities, activity streams, and various types of settings.

## Plugins[](#plugins "Permalink to this heading")

Plugins change the behavior or appearance of Elgg by overriding views, or by handling events.
All changes to an Elgg site should be implemented through plugins to ensure upgrading core is easy.

## Actions[](#actions "Permalink to this heading")

Actions are the primary way users interact with an Elgg site. Actions are registered by plugins.

## Events[](#events "Permalink to this heading")

Events are used in Elgg Plugins to interact with the Elgg engine under certain
circumstances. Events are triggered at strategic times throughout Elgg’s boot and execution
process, and allows plugins to modify or cancel the default behavior.

## Views[](#views "Permalink to this heading")

Views are the primary presentation layer for Elgg. Views can be overridden or extended by Plugins.
Views are categories into a Viewtype, which hints at what sort of output should be expected by the
view.

## JavaScript[](#javascript "Permalink to this heading")

Elgg uses native ES modules. Plugins can register their own modules or load their own JS libs.

## Internationalization[](#internationalization "Permalink to this heading")

Elgg’s interface supports multiple languages, and uses [Transifex](https://www.transifex.com/projects/p/elgg-core/) for translation.

## Caching[](#caching "Permalink to this heading")

Elgg uses two caches to improve performance: a system cache and SimpleCache.

## 3rd party libraries[](#rd-party-libraries "Permalink to this heading")

The use of 3rd party libraries in Elgg is managed by using [Composer](https://getcomposer.org/) dependencies. Examples of 3rd party libraries are
jQuery or Symfony mail.

To get a list of all the Elgg dependencies check out the [Packagist](https://packagist.org/packages/elgg/elgg) page for Elgg.

## Database Seeding[](#database-seeding "Permalink to this heading")

Elgg provides some base database seeds to populate the database with entities for testing purposes.

You can run the following commands to seed and unseed the database.

```
# seed the database
vendor/bin/elgg-cli database:seed

# unseed the database
vendor/bin/elgg-cli database:unseed
```

Plugins can register their own seeds via `'seeds', 'database'` event. The handler must return the class name of the seed,
which must extend `\Elgg\Database\Seeder\Seed` class.
