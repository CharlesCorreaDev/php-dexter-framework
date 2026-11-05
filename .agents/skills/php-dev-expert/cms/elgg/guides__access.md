# Access Control Lists — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/guides/access.html

---

# Access Control Lists[](#access-control-lists "Permalink to this heading")

An Access Control List (or ACL) can grant one or more users access to an entity or annotation in the database.

Contents

- [Creating an ACL](#creating-an-acl)
- [ACL subtypes](#acl-subtypes)
- [Adding users to an ACL](#adding-users-to-an-acl)
- [Removing users from an ACL](#removing-users-from-an-acl)
- [Retrieving an ACL](#retrieving-an-acl)
- [Read access](#read-access)
- [Ignoring access](#ignoring-access)

See also

[Database Access Control](design__database.md#database-access-control)

## [Creating an ACL](#id1)[](#creating-an-acl "Permalink to this heading")

An access collection can be create by using the function `elgg_create_access_collection()`.

```
$owner_guid = elgg_get_logged_in_user_guid();

$acl = elgg_create_access_collection("Sample name", $owner_guid, 'collection_subtype');
```

## [ACL subtypes](#id2)[](#acl-subtypes "Permalink to this heading")

ACLs can have a subtype, this is to help differentiate between the usage of the ACL. It’s higly recommended to set a subtype
for an ACL.

Elgg core has three examples of subtype usage

- `group_acl` an ACL owned by an `ElggGroup` which grants group members access to content shared with the group
- `friends` an ACL owned by an `ElggUser` which grant friends of a user access to content shared with friends
- `friends_collection` an ACL owned by an `ElggUser` which grant specific friends access to content shared with the ACL

## [Adding users to an ACL](#id3)[](#adding-users-to-an-acl "Permalink to this heading")

If you have an ACL you still need to add users to it in order to grant those users access to content with
the access\_id of the ACLs id.

```
// creating an ACL
$owner_guid = elgg_get_logged_in_user_guid();

/* @var $acl ElggAccessCollection */
$acl = elgg_create_access_collection("Sample name", $owner_guid, 'collection_subtype');

// add user
$acl->addMember($some_other_user_guid);
```

## [Removing users from an ACL](#id4)[](#removing-users-from-an-acl "Permalink to this heading")

If you no longer wish to allow access for a given user in an ACL you can easily remove that user from the list.

```
// remove a user from an ACL
/* @var $acl ElggAccessCollection */
$acl = elgg_get_access_collection($acl_id);

$acl->removeMember(user_guid_to_be_removed);
```

## [Retrieving an ACL](#id5)[](#retrieving-an-acl "Permalink to this heading")

In order to manage an ACL, or add the ID of an ACL to an access list there are several functions available to
retrieve an ACL from the database.

```
// get ACL based on known id
$acl = elgg_get_access_collection($acl_id);

// get all ACLs of an owner (procedural style)
$acls = elgg_get_access_collections([
        'owner_guid' => $some_owner_guid,
]);

// get all ACLs of an owner (object oriented style)
$acls = $some_owner_entity->getOwnedAccessCollections();

// add a filter for ACL subtype
// get all ACLs of an owner (procedural style)
$acls = elgg_get_access_collections([
        'owner_guid' => $some_owner_guid,
        'subtype' => 'some_subtype',
]);

// get all ACLs of an owner (object oriented style)
$acls = $some_owner_entity->getOwnedAccessCollections([
        'subtype' => 'some_subtype',
]);

// get one ACL of an owner (object oriented style)
// for example the group_acl of an ElggGroup
// Returns the first ACL owned by the entity with a given subtype
$acl = $group_entity->getOwnedAccessCollection('group_acl');
```

## [Read access](#id6)[](#read-access "Permalink to this heading")

The access system of Elgg automaticly adds all the ACLs a user is a member of to the access checks. For example a
user is a member of a group and is friends with 3 other users, all the corresponding ACLs are added in order to check
access to entities when retrieving them (eg. listing all blogs).

## [Ignoring access](#id7)[](#ignoring-access "Permalink to this heading")

If for some case you need entities retrieved ignoring the access rules you can wrap your code in `elgg_call`.
There are different flags you can use.

> - ELGG\_IGNORE\_ACCESS: no access rules are applied
> - ELGG\_ENFORCE\_ACCESS: access rules are forced to be applied
> - ELGG\_SHOW\_DISABLED\_ENTITIES: will retrieve entities that are disabled
> - ELGG\_HIDE\_DISABLED\_ENTITIES: will never retrieve entities that are disabled

```
$options = [
        'type' => 'user'
];

$entities = elgg_call(ELGG_IGNORE_ACCESS, function() use ($options) {
        return elgg_get_entities($options);
});
```

You can also combine flags.

```
$entities = elgg_call(ELGG_IGNORE_ACCESS | ELGG_SHOW_DISABLED_ENTITIES, function() {
        return elgg_get_entities([
                'type' => 'user'
        ]);
});
```
