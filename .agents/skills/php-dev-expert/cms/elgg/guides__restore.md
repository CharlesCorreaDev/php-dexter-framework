# Restore capability — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/guides/restore.html

---

# Restore capability[](#restore-capability "Permalink to this heading")

Contents

- [Site setting](#site-setting)
- [Registration](#registration)
- [Entity menu](#entity-menu)
- [View deleted items](#view-deleted-items)

  - [Custom views](#custom-views)
- [Restore a deleted item](#restore-a-deleted-item)
- [Events](#events)
- [ElggEntity functions](#elggentity-functions)

  - [Function: delete](#function-delete)
  - [Function: persistentDelete](#function-persistentdelete)
  - [Function: trash](#function-trash)
  - [Function: isDeleted](#function-isdeleted)
- [Show deleted items](#show-deleted-items)
- [Cleanup of deleted entities](#cleanup-of-deleted-entities)
- [More information](#more-information)

As of Elgg 6.0 it’s possible to set the `restorable` [capability](guides__capabilities.md) on an `ElggEntity`.
Enabling this capability will mark an entity as deleted in the database when the `ElggEntity::delete()` function is called.
The entity will then no longer show up in listings or work when viewing it directly.

## [Site setting](#id1)[](#site-setting "Permalink to this heading")

A site administrator has the option to enable/disable all restore features. By default this feature is disabled. This
means that even if an entity has the capability `restorable` it will always be permanently removed from the database.

## [Registration](#id2)[](#registration "Permalink to this heading")

Just like any other entity capability you can enable the `restorable` capability in the `elgg-plugin.php`

```
'entities' => [
        [
                'type' => 'object',
                'subtype' => 'my_custom_subtype',
                'capabilities' => [
                        'restorable' => true,
                ],
        ],
]
```

## [Entity menu](#id3)[](#entity-menu "Permalink to this heading")

By default a menu item is added to the entity menu which allows a user to delete the entity when the user has the rights
to do so.

If an entity has the `restorable` capability this menu item will be replaced with a menu item which will mark the entity
as deleted.

Note

When the site administrator hasn’t enabled the feature no menu items will be replaced.

Note

There are 2 generic actions to help developers in case they need to add a delete link somewhere.

- `entity/delete`: this will permanently delete the entity from the database, requires a `guid` to be submitted to the action
- `entity/trash`: this will mark the entity as deleted in the database, requires a `guid` to be submitted to the action

## [View deleted items](#id4)[](#view-deleted-items "Permalink to this heading")

Once an entity has been marked as deleted it’ll no longer show up in the normal functionality of your Elgg website.

In order for a user to see the entities that have been deleted there is a link in the user settings to a list of all
deleted items that are owned by the given user.

Group owners also have the ability to see the deleted content from their group. This is accessible from the group profile
page. The list will show all deleted content contained by their group.

Note

The list will only show the deleted entities with the `restorable` capability. For example when a blog has been
deleted which also has comments only the blog will show up in the deleted list of the owner (and in the deleted
list of the group if the blog was posted in a group).

The comments will not show up in any list of deleted items.

### [Custom views](#id5)[](#custom-views "Permalink to this heading")

When a developer needs to have a custom view of a deleted item a view `trash/<entity_type>/<entity_subtype>` can be made
which will get provided the deleted entity in `$vars['entity']`. As a fallback `trash/<entity_type>/default` will be
tried and ultimately `trash/entity/default` which is provided by Elgg core.

Different sub-elements can be found in the views `trash/elements/*`.

Note

When making a custom view for an entity make sure it doesn’t include links to the deleted entity as that link will
not work. Also keep in mind other links to entities that could have been deleted.

## [Restore a deleted item](#id6)[](#restore-a-deleted-item "Permalink to this heading")

From the deleted list the user (or group owner) has the ability to restore the deleted item to it’s original state. If
the entity was contained in a group which was removed, the user has the option to restore the entity to a different container.

## [Events](#id7)[](#events "Permalink to this heading")

When an entity is being marked as deleted there is an [event sequence](design__events.md#event-sequence) `'trash', '<entity_type>'`
with which a developer can program additional action or logic.

## [ElggEntity functions](#id8)[](#elggentity-functions "Permalink to this heading")

There are 3 functions in an `ElggEntity` related to the deletion of that entity:

- `public function delete(bool $recursive = true, ?bool $persistent = null): bool`
- `protected function persistentDelete(bool $recursive = true): bool`
- `protected function trash(bool $recursive = true): bool`
- `public function isDeleted(): bool`

### [Function: delete](#id9)[](#function-delete "Permalink to this heading")

This is the only public function to delete an entity. The `$recursive` parameter will determine whether or not other entities
which have this entity as it’s owner or container will also be deleted (default `true`).

The `$persistent` parameter can force a persistent removal from the database or it being marked as deleted. The default
value is `null` which means the `restorable` capability will be checked.

Warning

It’s not recommended that a developer overrules this function as the developer will have to handle part of the logic
of determining the correct value of the `$persistent` parameter.

### [Function: persistentDelete](#id10)[](#function-persistentdelete "Permalink to this heading")

This function is called when the `$persistent` parameter is `true` in the `delete()` function. This function must
handle cases where the entity is permanently removed from the database. An example of when a developer would overrule this
function is an `ElggFile` where the physical file on disk needs to be removed when the entity is removed from the database,
but the physical file shouldn’t be removed from the disk when the entity is only marked as deleted in the database.

This will trigger the `'delete', '<entity_type>'` event sequence.

### [Function: trash](#id11)[](#function-trash "Permalink to this heading")

This function is called when the `$persistent` parameter is `false` in the `delete()` function. This function must
handle cases where the entity is marked as deleted in the database.

This will trigger the `'trash', '<entity_type>'` event sequence.

### [Function: isDeleted](#id12)[](#function-isdeleted "Permalink to this heading")

To check if an entity is marked as deleted.

## [Show deleted items](#id13)[](#show-deleted-items "Permalink to this heading")

When a developer needs to be sure to include deleted entities when fetching/listing entities the code needs to be wrapped
in an `elgg_call()` with the flag `ELGG_SHOW_DELETED_ENTITIES`.

The same applies when the developer needs to be sure to exclude all deleted items set the flag `ELGG_HIDE_DELETED_ENTITIES`.

## [Cleanup of deleted entities](#id14)[](#cleanup-of-deleted-entities "Permalink to this heading")

In order to cleanup the database of the deleted entities a [cron job](guides__cron.md) runs every hour. It’ll cleanup
all the deleted entities that have been removed when a retention period has passed. A site administrator can set this
retention period (default: 30 days).

In order to not put too much stress on the system the cron job will only run for a maximum of 5 minutes per hour. Entities
that couldn’t be removed in that period will be removed in the next period. The oldest deleted entity (by when the entity
was deleted) will be removed first.

## [More information](#id15)[](#more-information "Permalink to this heading")

See also

Check out the [Capabilities](guides__capabilities.md) documentation
