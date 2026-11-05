# Entities · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Entities

---

OWA utilizes an object relational mapping ayer (ORM) in order to provide an abstraction between data objects and how they are stored/persisted. Entities are specialized objects in the OWA framework that represent distinct rows of data stored in OWA's database tables.

Entity objects provide developers with a set of consistent methods that can be used to create, retrieve, update, and delete data from the database. Entity objects also are used to specify the data schema used by the underlying storage layer (i.e. MySql, etc.).

## Working with Entities

Entity classes live in the `Entity/` directory of the module they are part of, and
are named `OWA\Module\<Module>\Entity\<ClassName>`. They are loaded by Composer's
PSR-4 autoloader, so the directory name and casing are not optional — see
[Creating A New Module](Creating-A-New-Module.md).

To work with an entity, use the core API's `entityFactory` method to create a new entity object of the type you want, using `module.name` notation.

```
$entity = \OWA\Core\CoreAPI::entityFactory('module.name');
```

Once you have created the entity object you can call is various methods to manipulate it.

## Loading Data

One of the most frequent entity operations is to retrieve an entities data from the database.

Once you have created the type of entity you want to work with, simply call its load function to populate the entity with data from the database.

The `load` method assumes that you are passing it the id of the entity to load:

```
$entity->load(1234);
```

## Accessing Entity Properties

Once you have loaded an entiy you can access its properties by calling the
`get` method.

Entity properties correspond to the name of the columns in the database
table that the entity stores its data into. Simply pass the `get` method
the name of the property you want to retrieve:

```
$value = $entity->get('name');
```

Alternately you can change an entity's property by setting a new using the
`set` method:

```
$entity->set('name', 'value');
```

## Saving Entity to the Database

Once an entity's properties are set it can be persisted to the database using eitehr the `create` or `update` methods.

## Entities worth knowing about

Not an exhaustive list — these are the ones a module or an integration is most
likely to read.

| Entity | What it holds |
| --- | --- |
| `base.organization` | The Organization. Users belong to one. |
| `base.property` | A website being measured. |
| `base.site` | An **Observation Profile** — one way a Property is watched. Named `site` for compatibility; it is the thing that carries a tracking id. See [[Organizations, Properties and Profiles |
| `base.goal_event` | One goal event. Goals are rows now rather than numbered slots in a settings blob. |
| `base.goal_event_condition` | One condition on a goal event — a property, an operator and a value. A goal event has one or more. |
| `base.setting` | One scoped setting. See [[Settings API |

## Clearing a text value

`set()` ignores an empty string on a text column, deliberately: several handlers
rely on `set('medium', $maybeEmpty)` leaving the existing value alone, and
storing empties there would wipe data that is currently preserved.

That means `set( 'description', '' )` does **not** empty the column. To empty
one on purpose — an edit form whose field the user cleared — use `clear()`:

```
$entity->clear( 'description' );
```

Numeric columns are different: they accept `0` and `false` through `set()`,
because on a numeric column zero is a value like any other.
