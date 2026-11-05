# ACL and RBAC | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/346/acl-and-rbac

---

## [ACL and RBAC](wiki__346__acl-and-rbac.md)

0    0

3

Viewed: 37 493 times

Version: 1.1

Category: [How-tos](wiki__index.md)

- [ACL](wiki__index.md)
- [authorization](wiki__index.md)
- [rbac](wiki__index.md)
- [scalability](wiki__index.md)
- [security](wiki__index.md)
- [Tree structure](wiki__index.md)

Written by: [![zeroByte](/image/user/default_user.svg) zeroByte](https://www.yiiframework.com/user/64760)

Updated by: [![kevinkorb](/user/avatar/1125?v=1) kevinkorb](https://www.yiiframework.com/user/1125)

Created: Jun 29, 2012

Updated: 14 years ago

1. [Preliminaries](#preliminaries)
2. [Object Representation in a Nutshell](#object-representation-in-a-nutshell)
3. [One object per purpose](#one-object-per-purpose)
4. [How the objects fit together](#how-the-objects-fit-together)
5. [Permission Lookup Layers](#permission-lookup-layers)

#### Preliminaries [¶](#preliminaries)

This HowTo assumes that you have a smattering of ACL in general and of how [the acl-extension](http://www.yiiframework.com/extension/acl/ "the ACL-Extension") works basically. It will introduce you into the abstract and give you a hint on how to use Business-Rules. If you have in-depth questions, please refer to the extension documentation.
Using ACL in an RBAC-manner cannot and should never obscure the fact that the underlying system is still ACL-based. In fact, the Business-Rules are just another layer in the permission-check plan.

Layers in ACL (at full extend):

1. General Permission Lookup
2. Regular ACL-Permission lookup
3. Business-Rules lookup

Please note that Business-rules are indeed independent of the first layer, although it may be more convenient to combine them.

#### Object Representation in a Nutshell [¶](#object-representation-in-a-nutshell)

Each object of the reality has its own representation in ACL. The corresponding ACL-object is automagically bound to your object and behaves correctly without requiring any further attention.
However, you need to interact with those objects in order to configure the system. As the objects are mapped to ACL-objects and vice versa, you can easily retrieve and/or identify corresponding objects. There are three ways to achieve this:

1. **Direct Object Usage**
   As ACL-Objects are still objects (to be more specific: models) to Yii, you can handle them just like all the others: you can retrieve them using their unique ID.
2. **Aliasing**
   ACL-Objects can have aliases to simplify their identification (and to use Business-Rules - more on this later on). Aliases can be random strings, however they must be unique for one type (see Types later on). As it's a regular property, you can change them and search them just like you'd do on a normal model.
   The representation can be either as an array or simply a string

```
"IAmAnAlias"
//equals
array('alias' => "IAmAnalias")
```

As aforementioned it is possible to use random strings as aliases. However, this is not endorsed as it imposes pointless complexity (see Business-Rules).

1. **Object-Mapping**
   This is the way the ACL-Extension maps the objects internally, if you don't hint at another strategy. Models are usually unique in their unique ID in conjunction with their Model-ClassName. So, to identify objects uniquely, you could use something like:

```
array('model' => 'Post', 'foreign_key' => $myID)
```

It's not that convenient and you won't use it that often.

#### One object per purpose [¶](#one-object-per-purpose)

ACL-Objects can be either AccessControlObjects or AccessRequestObjects.
*AccessControlObjects* (short:Acos) are all objects which you can access somehow. This can be Images, Posts and so on, everything you can perform actions with.

*AccessRequestObjects* (short: Aros) are all objects which want to access Acos, which want to perform an action on an Aco.

*Action* is an action to be performed by an Aro on an Aco. Actions have a name by which they are identified. Shipped actions (which should not be deleted) are create, read, update, delete and grant (in full extent). However you can add your own, arbitrary actions (for exceptions see the Business-Rules section). Actually you don't need to use the Action-model but you can simply add a row to your actions-table.
Note that Actions are always performed on objects (Acos) and never stay alone.

*Permission* is a link between an Action, and Aro and an Aco. Permissions work only positively, i.e. you can only explicitely grant permissions and not exlicitely deny them.

#### How the objects fit together [¶](#how-the-objects-fit-together)

What the ACL-Extension does is basically to put the ACL-Objects (Aros, Aco) in two tree-hierarchies (in each tree are only objects of one type).
This implies that ACL-Objects can have parents and children, while children inherit the permissions of their parents.
Note that hierarchies are *explicitly* supported for both Aros *and* Acos. Also, each Aro and Aco can have *multiple* parents. The depth of the hierarchy is unlimited, the lookup is non-recursive.

#### Permission Lookup Layers [¶](#permission-lookup-layers)

##### The standard way to do it [¶](#the-standard-way-to-do-it)

If an Aro attempts to perform a given Action (or a set of Actions) on a given Aco, the systems checks if the Aro or one of its parents has the right to perform the given Action on the Aco or one of its parents.

##### How general rules facilitate life [¶](#how-general-rules-facilitate-life)

Sometimes, it can be quite cumbersome to assign permissions for all of the nodes.
Just in case you're weary with that, you can assign permissions on a general basis: You can grant a specific action for all Aros to all Acos of type X, for example "Post".
Example:

```
$aro->grant('Post', '* - delete');
```

Astute readers will have noticed that 'Post' is a simply an alias. Thus, the object itself is a regular Aco-Object and can be used like any other - also in a tree structure.

##### Lazy, more lazy, Business-Rules [¶](#lazy-more-lazy-business-rules)

If you're not only weary with assigning Permissions to specific objects or objects to groups (one of which you must do if you want to grant rights other than autoPermissions) but you want to skip the assignment of an object to its group, Business-Rules are with you.
Business-rules are simple static functions of the Class "Rules" in the components-foldre of the ACL-Extension. They get the Aro-Object, the Aco-Object and the Permission to be performed and return true if the the Action should be granted.
Each Group you want assign Business-Rules to must have an alias. This alias preceded with "is" will be the name of the Business-Rule: "Visitor" => "isVisitor". The static functon always bears the name of the rule.
Now, you can easily perform something like this:

```
public static function isAuthor($aro, $aco, $action){
        return $aro->id == $aco->author_id;
    }
```

Note that Business-Rules can be applied to both Aros and Acos. Also note that Business-rules are **not being considered in find-Queries** (but *all* others are). You'll have to check for yourself using a foreach-loop and the may-method just as you have to using regular RBAC.

Please keep in mind that Business-rules might decrease the overall performance of your application. You might want to change the "enableBusinessRules" to a more specific value (see the docs) if you don't need the power in its fullest extent.
