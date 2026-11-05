# Capabilities — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/guides/capabilities.html

---

# Capabilities[](#capabilities "Permalink to this heading")

Contents

- [Entity Capabilities](#entity-capabilities)

## [Entity Capabilities](#id1)[](#entity-capabilities "Permalink to this heading")

### Defining capabilities[](#defining-capabilities "Permalink to this heading")

There is no need to explicitly define or register a new capability to the system. For example the search plugin uses the searchable capability.

### Registering for capabilities[](#registering-for-capabilities "Permalink to this heading")

If an entity supports a certain capability (or feature) this should be registered in the system. This can be done by registering the capability in the entities
section of the elgg-plugin.php of the plugin.

```
'entities' => [
        [
                'type' => 'object',
                'subtype' => 'blog',
                'capabilities' => [
                        'searchable' => true,
                ],
        ],
],
```

There is also the option to enable (or disable) a capability for a certain entity type/subtype using one of the following functions:

> - `elgg_entity_enable_capability($type, $subtype, $capability)` use this for enabling a certain capability
> - `elgg_entity_disable_capability($type, $subtype, $capability)` use this for disabling a certain capability

### Checking for capabilities[](#checking-for-capabilities "Permalink to this heading")

There are helper functions to check if a certain capability is supported in the system.
You can check if an entity supports a certain capability using the $entity->hasCapability($capability) function.
Alternatively if you do not have an entity at your disposal, you can use elgg\_entity\_has\_capability($type, $subtype, $capability).

There is also a function available to get an array of all type/subtypes in the system that support a certain capability.

```
$types_subtypes = elgg_entity_types_with_capability('searchable');

// output
[
        'object' => [
                'blog',
                'page',
        ],
        'group' => [
                'group',
        ],
]
```
