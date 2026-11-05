# Users | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/element-types/users

---

# Users

- ### On this Page

  - [Querying Users](docs_5x__reference__element-types__users.md#querying-users)

A user is a special type of element that represents a person.

Each user has an email address and username by default, as well as optional fields for a name and photo. Like other [elements](docs_5x__system__elements.md), users support custom fields by way of a [field layout](#custom-fields).

my-project.ddev.site/admin/users/myaccount

![Screenshot of the user profile edit screen](/docs/assets/img/users-profile.046073ba.png)

Custom fields can be added to the “Profile” screen.

There are also **Preferences** for localization, accessibility, and debugging that may be relevant depending on how you build your site and whether you grant the user access to the control panel. Users’ capabilities are determined by which [groups](docs_5x__system__user-management.md#user-groups) they belong to, and what individual [permissions](docs_5x__system__user-management.md#permissions) they have been granted.

[User Management
→

Learn more about setting up secure multi-user experiences.](docs_5x__system__user-management.md)

### [#](#custom-fields)Custom Fields

All users share a [field layout](docs_5x__system__fields.md#field-layouts), which is managed via

1. Settings→
2. Users→
3. User Profile Fields

. Custom fields are added to the **Profile** tab of each user’s management screen, alongside native **Username**, **Email**, **Full Name**, and **Photo** fields.

Fields and tabs in the user field layout can be given [conditions](docs_5x__system__fields.md#conditions) to provide special functionality based on their user group or other criteria.

Relate users to other elements with the [users field](docs_5x__reference__field-types__users.md).

### [#](#photos)Photos

Once you’ve configured an [asset volume](docs_5x__reference__element-types__assets.md#volumes), you can designate it as your **User Photo Volume** by visiting

1. Settings→
2. Users→
3. Settings

. User photos are uploaded directly to their profiles, and cannot be picked from existing assets.

The [asset element](docs_5x__reference__element-types__assets.md) attached to a user is accessible via the `photo` property:

```
{% set photo = user.photo %}

<div class="profile">
  {% if photo %}
    <div class="photo">
      {{ photo.getImg('thumbnail') }}
    </div>
  {% endif %}

  <h3>{{ user.fullName }}</h3>

  <code>{{ user.email }}</code>
</div>
```

Here, `thumbnail` is a [predefined image transform](docs_5x__reference__element-types__assets.md#image-transforms).

### [#](#addresses)Addresses

Users each have an address book. [Addresses](docs_5x__reference__element-types__addresses.md) can be managed on behalf of a user via the control panel, or [by the user themselves](docs_5x__reference__element-types__addresses.md#managing-addresses).

![Screenshot of address management UI on an individual user’s edit screen](/docs/assets/img/users-addresses-tab.ad8832d4.png)

Access a user’s addresses via the `addresses` property:

```
<h2>Address Book</h2>

<ul>
  {% for address in user.addresses %}
    <li>{{ address|address }}</li>
  {% endfor %}
</ul>
```

### [#](#authors)Authors

[Entries](docs_5x__reference__element-types__entries.md) can be assigned one or more users as their **Authors**.

```
<h2>{{ entry.title }}</h2>

By {{ collect(entry.authors).pluck('fullName').join(', ', ', and ') }}

{# ... #}
```

### [#](#urls)URLs

Unlike most other element types, users do *not* have a “URI format” setting or support slugs, and are not factored into routing.

### [#](#affiliated-site)Affiliated Site [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Affiliated sites for user elements was first available in version 5.6.0 of Craft.")

[Multi-site](docs_5x__system__sites.md) projects capture the site a user [registers](docs_5x__system__user-management.md#affiliated-site) from (or is assigned to by an admin). Add the **Affiliated Site** [field layout element](#custom-fields) to manage this in the control panel.

A user’s affiliated site can be accessed in a template via `user.affiliatedSite`:

```
{% if currentUser.affiliatedSite %}
  You registered via {{ currentUser.affiliatedSite.name }}.
{% endif %}
```

## [#](#querying-users)Querying Users

You can fetch users in your templates or PHP code using **user queries**.

TwigPHP

```
{# Create a new user query #}
{% set myUserQuery = craft.users() %}
```

```
// Create a new user query
$myUserQuery = \craft\elements\User::find();
```

Once you’ve created a user query, you can set [parameters](#parameters) on it to narrow down the results, and then [execute it](docs_5x__development__element-queries.md#executing-element-queries) by calling `.all()`. An array of [User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html) objects will be returned.

See [Element Queries](docs_5x__development__element-queries.md) to learn about how element queries work.

### [#](#example)Example

We can display a list of the users in a “Members” [user group](docs_5x__system__user-management.md#user-groups) by doing the following:

1. Create a user query with `craft.users()`.
2. Set the [group](#group) parameter on it.
3. Fetch the users with `.all()`.
4. Loop through the users using a [for  (opens new window)](https://twig.symfony.com/doc/3.x/tags/for.html) tag to create the list HTML.

```
{# Create a user query with the 'group' parameter #}
{% set myUserQuery = craft.users()
  .group('members') %}

{# Fetch the users #}
{% set members = myUserQuery.all() %}

{# Display the list #}
<ul>
  {% for user in members %}
    <li>{{ user.fullName }} (Member since {{ user.dateCreated|date }})</li>
  {% endfor %}
</ul>
```

### [#](#parameters)Parameters

User queries support the following parameters:

| Param | Description |
| --- | --- |
| [admin](#admin) | Narrows the query results to only users that have admin accounts. |
| [affiliatedSite](#affiliatedsite) | Narrows the query results based on the users’ affiliated sites. |
| [affiliatedSiteId](#affiliatedsiteid) | Narrows the query results based on the users’ affiliated sites, per the site’s ID(s). |
| [andNotRelatedTo](#andnotrelatedto) | Narrows the query results to only users that are not related to certain other elements. |
| [andRelatedTo](#andrelatedto) | Narrows the query results to only users that are related to certain other elements. |
| [andWith](#andwith) | Causes the query to return matching users eager-loaded with related elements, in addition to the elements that were already specified by [with](#with). |
| [asArray](#asarray) | Causes the query to return matching users as arrays of data, rather than [User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html) objects. |
| [assetUploaders](#assetuploaders) | Narrows the query results to only users that have uploaded an asset. |
| [authorOf](#authorof) | Narrows the query results to users who are the author of the given entry. |
| [authors](#authors) | Narrows the query results to only users that are authors of an entry. |
| [cache](#cache) | Enables query cache for this Query. |
| [can](#can) | Narrows the query results to only users that have a certain user permission, either directly on the user account or through one of their user groups. |
| [canonicalsOnly](#canonicalsonly) | Narrows the query results to only canonical elements, including elements that reference another canonical element via `canonicalId` so long as they aren’t a draft. |
| [clearCachedResult](#clearcachedresult) | Clears the [cached result  (opens new window)](docs_5x__development__element-queries.md#cache). |
| [collectIds](#collectids) | Executes the query and returns the IDs of the resulting elements as a collection. |
| [dateCreated](#datecreated) | Narrows the query results based on the users’ creation dates. |
| [dateUpdated](#dateupdated) | Narrows the query results based on the users’ last-updated dates. |
| [eagerly](#eagerly) | Causes the query to be used to eager-load results for the query’s source element and any other elements in its collection. |
| [email](#email) | Narrows the query results based on the users’ email addresses. |
| [firstName](#firstname) | Narrows the query results based on the users’ first names. |
| [fixedOrder](#fixedorder) | Causes the query results to be returned in the order specified by [id](#id). |
| [fullName](#fullname) | Narrows the query results based on the users’ full names. |
| [getFieldLayouts](#getfieldlayouts) | Returns the field layouts that could be associated with the resulting elements. |
| [group](#group) | Narrows the query results based on the user group the users belong to. |
| [groupId](#groupid) | Narrows the query results based on the user group the users belong to, per the groups’ IDs. |
| [hasPhoto](#hasphoto) | Narrows the query results to only users that have (or don’t have) a user photo. |
| [id](#id) | Narrows the query results based on the users’ IDs. |
| [ignorePlaceholders](#ignoreplaceholders) | Causes the query to return matching users as they are stored in the database, ignoring matching placeholder elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement). |
| [inBulkOp](#inbulkop) | Narrows the query results to only users that were involved in a bulk element operation. |
| [inReverse](#inreverse) | Causes the query results to be returned in reverse order. |
| [language](#language) | Determines which site(s) the users should be queried in, based on their language. |
| [lastLoginDate](#lastlogindate) | Narrows the query results based on the users’ last login dates. |
| [lastName](#lastname) | Narrows the query results based on the users’ last names. |
| [limit](#limit) | Determines the number of users that should be returned. |
| [notRelatedTo](#notrelatedto) | Narrows the query results to only users that are not related to certain other elements. |
| [offset](#offset) | Determines how many users should be skipped in the results. |
| [orderBy](#orderby) | Determines the order that the users should be returned in. (If empty, defaults to .) |
| [preferSites](#prefersites) | If [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) is set, this determines which site should be selected when querying multi-site elements. |
| [prepForEagerLoading](#prepforeagerloading) | Prepares the query for lazy eager loading. |
| [prepareSubquery](#preparesubquery) | Prepares the element query and returns its subquery (which determines what elements will be returned). |
| [relatedTo](#relatedto) | Narrows the query results to only users that are related to certain other elements. |
| [render](#render) | Executes the query and renders the resulting elements using their partial templates. |
| [search](#search) | Narrows the query results to only users that match a search query. |
| [siteSettingsId](#sitesettingsid) | Narrows the query results based on the users’ IDs in the `elements_sites` table. |
| [status](#status) | Narrows the query results based on the users’ statuses. |
| [trashed](#trashed) | Narrows the query results to only users that have been soft-deleted. |
| [uid](#uid) | Narrows the query results based on the users’ UIDs. |
| [username](#username) | Narrows the query results based on the users’ usernames. |
| [wasCountEagerLoaded](#wascounteagerloaded) | Returns whether the query result count was already eager loaded by the query's source element. |
| [wasEagerLoaded](#waseagerloaded) | Returns whether the query results were already eager loaded by the query's source element. |
| [with](#with) | Causes the query to return matching users eager-loaded with related elements. |
| [withCustomFields](#withcustomfields) | Sets whether custom fields should be factored into the query. |
| [withGroups](#withgroups) | Causes the query to return matching users eager-loaded with their user groups. |
| [withProvisionalDrafts](#withprovisionaldrafts) | Causes the query to return provisional drafts for the matching elements, when they exist for the current user. |

#### [#](#admin)`admin`

Narrows the query results to only users that have admin accounts.

TwigPHP

```
{# Fetch admins #}
{% set users = craft.users()
  .admin()
  .all() %}
```

```
// Fetch admins
$users = \craft\elements\User::find()
    ->admin()
    ->all();
```

#### [#](#affiliatedsite)`affiliatedSite`

Narrows the query results based on the users’ affiliated sites.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'foo'` | affiliated with the site with a handle of `foo`. |
| `['foo', 'bar']` | affiliated with a site with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not affiliated with a site with a handle of `foo` or `bar`. |
| a [craft\models\Site  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-site.html) object | affiliated with the site represented by the object. |
| `'*'` | affiliated with any site. |

TwigPHP

```
{# Fetch users affiliated with the Foo site #}
{% set users = craft.users()
  .affiliatedSite('foo')
  .all() %}
```

```
// Fetch users affiliated with the Foo site
$users = \craft\elements\User::find()
    ->affiliatedSite('foo')
    ->all();
```

#### [#](#affiliatedsiteid)`affiliatedSiteId`

Narrows the query results based on the users’ affiliated sites, per the site’s ID(s).

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `1` | affiliated with the site with an ID of `1`. |
| `[1, 2]` | affiliated with a site with an ID of `1` or `2`. |
| `['not', 1, 2]` | not affiliated with a site with an ID of `1` or `2`. |
| `'*'` | affiliated with any site. |

TwigPHP

```
{# Fetch users affiliated with the site with an ID of 1 #}
{% set users = craft.users()
  .affiliatedSiteId(1)
  .all() %}
```

```
// Fetch users affiliated with the site with an ID of 1
$users = \craft\elements\User::find()
    ->affiliatedSiteId(1)
    ->all();
```

#### [#](#andnotrelatedto)`andNotRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andnotrelatedto)

Narrows the query results to only users that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all users that are related to myCategoryA and not myCategoryB #}
{% set users = craft.users()
  .relatedTo(myCategoryA)
  .andNotRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all users that are related to $myCategoryA and not $myCategoryB
$users = \craft\elements\User::find()
    ->relatedTo($myCategoryA)
    ->andNotRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andrelatedto)`andRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andrelatedto)

Narrows the query results to only users that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all users that are related to myCategoryA and myCategoryB #}
{% set users = craft.users()
  .relatedTo(myCategoryA)
  .andRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all users that are related to $myCategoryA and $myCategoryB
$users = \craft\elements\User::find()
    ->relatedTo($myCategoryA)
    ->andRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andwith)`andWith`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andwith)

Causes the query to return matching users eager-loaded with related elements, in addition to the elements that were already specified by [with](#with).

.

#### [#](#asarray)`asArray`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-asarray)

Causes the query to return matching users as arrays of data, rather than [User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html) objects.

TwigPHP

```
{# Fetch users as arrays #}
{% set users = craft.users()
  .asArray()
  .all() %}
```

```
// Fetch users as arrays
$users = \craft\elements\User::find()
    ->asArray()
    ->all();
```

#### [#](#assetuploaders)`assetUploaders`

Narrows the query results to only users that have uploaded an asset.

TwigPHP

```
{# Fetch all users who have uploaded an asset #}
{% set users = craft.users()
  .assetUploaders()
  .all() %}
```

```
// Fetch all users who have uploaded an asset
$users = \craft\elements\User::find()
    ->assetUploaders()
    ->all();
```

#### [#](#authorof)`authorOf`

Narrows the query results to users who are the author of the given entry.

#### [#](#authors-2)`authors`

Narrows the query results to only users that are authors of an entry.

TwigPHP

```
{# Fetch authors #}
{% set users = craft.users()
  .authors()
  .all() %}
```

```
// Fetch authors
$users = \craft\elements\User::find()
    ->authors()
    ->all();
```

#### [#](#cache)`cache`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-cache)

Enables query cache for this Query.

#### [#](#can)`can`

Narrows the query results to only users that have a certain user permission, either directly on the user account or through one of their user groups.

See [User Management  (opens new window)](docs_5x__system__user-management.md) for a full list of available user permissions defined by Craft.

TwigPHP

```
{# Fetch users who can access the front end when the system is offline #}
{% set users = craft.users()
  .can('accessSiteWhenSystemIsOff')
  .all() %}
```

```
// Fetch users who can access the front end when the system is offline
$users = \craft\elements\User::find()
    ->can('accessSiteWhenSystemIsOff')
    ->all();
```

#### [#](#canonicalsonly)`canonicalsOnly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-canonicalsonly)

Narrows the query results to only canonical elements, including elements
that reference another canonical element via `canonicalId` so long as they
aren’t a draft.

Unpublished drafts can be included as well if `drafts(null)` and
`draftOf(false)` are also passed.

#### [#](#clearcachedresult)`clearCachedResult`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-clearcachedresult)

Clears the [cached result  (opens new window)](docs_5x__development__element-queries.md#cache).

#### [#](#collectids)`collectIds`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-collectids)

Executes the query and returns the IDs of the resulting elements as a collection.

#### [#](#datecreated)`dateCreated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-datecreated)

Narrows the query results based on the users’ creation dates.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'>= 2018-04-01'` | that were created on or after 2018-04-01. |
| `'< 2018-05-01'` | that were created before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were created between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were created at midnight of the specified relative date. |

TwigPHP

```
{# Fetch users created last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set users = craft.users()
  .dateCreated(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch users created last month
$start = (new \DateTime('first day of last month'))->format(\DateTime::ATOM);
$end = (new \DateTime('first day of this month'))->format(\DateTime::ATOM);

$users = \craft\elements\User::find()
    ->dateCreated(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#dateupdated)`dateUpdated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-dateupdated)

Narrows the query results based on the users’ last-updated dates.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'>= 2018-04-01'` | that were updated on or after 2018-04-01. |
| `'< 2018-05-01'` | that were updated before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were updated between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were updated at midnight of the specified relative date. |

TwigPHP

```
{# Fetch users updated in the last week #}
{% set lastWeek = date('1 week ago')|atom %}

{% set users = craft.users()
  .dateUpdated(">= #{lastWeek}")
  .all() %}
```

```
// Fetch users updated in the last week
$lastWeek = (new \DateTime('1 week ago'))->format(\DateTime::ATOM);

$users = \craft\elements\User::find()
    ->dateUpdated(">= {$lastWeek}")
    ->all();
```

#### [#](#eagerly)`eagerly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-eagerly)

Causes the query to be used to eager-load results for the query’s source element
and any other elements in its collection.

#### [#](#email)`email`

Narrows the query results based on the users’ email addresses.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'me@domain.tld'` | with an email of `me@domain.tld`. |
| `'not me@domain.tld'` | not with an email of `me@domain.tld`. |
| `'*@domain.tld'` | with an email that ends with `@domain.tld`. |

TwigPHP

```
{# Fetch users with a .co.uk domain on their email address #}
{% set users = craft.users()
  .email('*.co.uk')
  .all() %}
```

```
// Fetch users with a .co.uk domain on their email address
$users = \craft\elements\User::find()
    ->email('*.co.uk')
    ->all();
```

#### [#](#firstname)`firstName`

Narrows the query results based on the users’ first names.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'Jane'` | with a first name of `Jane`. |
| `'not Jane'` | not with a first name of `Jane`. |

TwigPHP

```
{# Fetch all the Jane's #}
{% set users = craft.users()
  .firstName('Jane')
  .all() %}
```

```
// Fetch all the Jane's
$users = \craft\elements\User::find()
    ->firstName('Jane')
    ->one();
```

#### [#](#fixedorder)`fixedOrder`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-fixedorder)

Causes the query results to be returned in the order specified by [id](#id).

If no IDs were passed to [id](#id), setting this to `true` will result in an empty result set.

TwigPHP

```
{# Fetch users in a specific order #}
{% set users = craft.users()
  .id([1, 2, 3, 4, 5])
  .fixedOrder()
  .all() %}
```

```
// Fetch users in a specific order
$users = \craft\elements\User::find()
    ->id([1, 2, 3, 4, 5])
    ->fixedOrder()
    ->all();
```

#### [#](#fullname)`fullName`

Narrows the query results based on the users’ full names.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'Jane Doe'` | with a full name of `Jane Doe`. |
| `'not Jane Doe'` | not with a full name of `Jane Doe`. |

TwigPHP

```
{# Fetch all the Jane Doe's #}
{% set users = craft.users()
  .fullName('Jane Doe')
  .all() %}
```

```
// Fetch all the Jane Doe's
$users = \craft\elements\User::find()
    ->fullName('JaneDoe')
    ->one();
```

#### [#](#getfieldlayouts)`getFieldLayouts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-getfieldlayouts)

Returns the field layouts that could be associated with the resulting elements.

#### [#](#group)`group`

Narrows the query results based on the user group the users belong to.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'foo'` | in a group with a handle of `foo`. |
| `'not foo'` | not in a group with a handle of `foo`. |
| `['foo', 'bar']` | in a group with a handle of `foo` or `bar`. |
| `['and', 'foo', 'bar']` | in both groups with handles of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not in a group with a handle of `foo` or `bar`. |
| a [UserGroup  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-usergroup.html) object | in a group represented by the object. |

TwigPHP

```
{# Fetch users in the Foo user group #}
{% set users = craft.users()
  .group('foo')
  .all() %}
```

```
// Fetch users in the Foo user group
$users = \craft\elements\User::find()
    ->group('foo')
    ->all();
```

#### [#](#groupid)`groupId`

Narrows the query results based on the user group the users belong to, per the groups’ IDs.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `1` | in a group with an ID of 1. |
| `'not 1'` | not in a group with an ID of 1. |
| `[1, 2]` | in a group with an ID of 1 or 2. |
| `['and', 1, 2]` | in both groups with IDs of 1 or 2. |
| `['not', 1, 2]` | not in a group with an ID of 1 or 2. |

TwigPHP

```
{# Fetch users in a group with an ID of 1 #}
{% set users = craft.users()
  .groupId(1)
  .all() %}
```

```
// Fetch users in a group with an ID of 1
$users = \craft\elements\User::find()
    ->groupId(1)
    ->all();
```

#### [#](#hasphoto)`hasPhoto`

Narrows the query results to only users that have (or don’t have) a user photo.

TwigPHP

```
{# Fetch users with photos #}
{% set users = craft.users()
  .hasPhoto()
  .all() %}
```

```
// Fetch users without photos
$users = \craft\elements\User::find()
    ->hasPhoto()
    ->all();
```

#### [#](#id)`id`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-id)

Narrows the query results based on the users’ IDs.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `1` | with an ID of 1. |
| `'not 1'` | not with an ID of 1. |
| `[1, 2]` | with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an ID of 1 or 2. |

TwigPHP

```
{# Fetch the user by its ID #}
{% set user = craft.users()
  .id(1)
  .one() %}
```

```
// Fetch the user by its ID
$user = \craft\elements\User::find()
    ->id(1)
    ->one();
```

This can be combined with [fixedOrder](#fixedorder) if you want the results to be returned in a specific order.

#### [#](#ignoreplaceholders)`ignorePlaceholders`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-ignoreplaceholders)

Causes the query to return matching users as they are stored in the database, ignoring matching placeholder
elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement).

#### [#](#inbulkop)`inBulkOp`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inbulkop)

Narrows the query results to only users that were involved in a bulk element operation.

#### [#](#inreverse)`inReverse`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inreverse)

Causes the query results to be returned in reverse order.

TwigPHP

```
{# Fetch users in reverse #}
{% set users = craft.users()
  .inReverse()
  .all() %}
```

```
// Fetch users in reverse
$users = \craft\elements\User::find()
    ->inReverse()
    ->all();
```

#### [#](#language)`language`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-language)

Determines which site(s) the users should be queried in, based on their language.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'en'` | from sites with a language of `en`. |
| `['en-GB', 'en-US']` | from sites with a language of `en-GB` or `en-US`. |
| `['not', 'en-GB', 'en-US']` | not in sites with a language of `en-GB` or `en-US`. |

Elements that belong to multiple sites will be returned multiple times by default. If you
only want unique elements to be returned, use [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) in conjunction with this.

TwigPHP

```
{# Fetch users from English sites #}
{% set users = craft.users()
  .language('en')
  .all() %}
```

```
// Fetch users from English sites
$users = \craft\elements\User::find()
    ->language('en')
    ->all();
```

#### [#](#lastlogindate)`lastLoginDate`

Narrows the query results based on the users’ last login dates.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'>= 2018-04-01'` | that last logged in on or after 2018-04-01. |
| `'< 2018-05-01'` | that last logged in before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that last logged in between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that last logged in at midnight of the specified relative date. |

TwigPHP

```
{# Fetch users that logged in recently #}
{% set aWeekAgo = date('7 days ago')|atom %}

{% set users = craft.users()
  .lastLoginDate(">= #{aWeekAgo}")
  .all() %}
```

```
// Fetch users that logged in recently
$aWeekAgo = (new \DateTime('7 days ago'))->format(\DateTime::ATOM);

$users = \craft\elements\User::find()
    ->lastLoginDate(">= {$aWeekAgo}")
    ->all();
```

#### [#](#lastname)`lastName`

Narrows the query results based on the users’ last names.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'Doe'` | with a last name of `Doe`. |
| `'not Doe'` | not with a last name of `Doe`. |

TwigPHP

```
{# Fetch all the Doe's #}
{% set users = craft.users()
  .lastName('Doe')
  .all() %}
```

```
// Fetch all the Doe's
$users = \craft\elements\User::find()
    ->lastName('Doe')
    ->one();
```

#### [#](#limit)`limit`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#limit()-detail)

Determines the number of users that should be returned.

TwigPHP

```
{# Fetch up to 10 users  #}
{% set users = craft.users()
  .limit(10)
  .all() %}
```

```
// Fetch up to 10 users
$users = \craft\elements\User::find()
    ->limit(10)
    ->all();
```

#### [#](#notrelatedto)`notRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-notrelatedto)

Narrows the query results to only users that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all users that are related to myEntry #}
{% set users = craft.users()
  .notRelatedTo(myEntry)
  .all() %}
```

```
// Fetch all users that are related to $myEntry
$users = \craft\elements\User::find()
    ->notRelatedTo($myEntry)
    ->all();
```

#### [#](#offset)`offset`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#offset()-detail)

Determines how many users should be skipped in the results.

TwigPHP

```
{# Fetch all users except for the first 3 #}
{% set users = craft.users()
  .offset(3)
  .all() %}
```

```
// Fetch all users except for the first 3
$users = \craft\elements\User::find()
    ->offset(3)
    ->all();
```

#### [#](#orderby)`orderBy`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-orderby)

Determines the order that the users should be returned in. (If empty, defaults to .)

TwigPHP

```
{# Fetch all users in order of date created #}
{% set users = craft.users()
  .orderBy('dateCreated ASC')
  .all() %}
```

```
// Fetch all users in order of date created
$users = \craft\elements\User::find()
    ->orderBy('dateCreated ASC')
    ->all();
```

#### [#](#prefersites)`preferSites`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prefersites)

If [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) is set, this determines which site should be selected when querying multi-site elements.

For example, if element “Foo” exists in Site A and Site B, and element “Bar” exists in Site B and Site C,
and this is set to `['c', 'b', 'a']`, then Foo will be returned for Site B, and Bar will be returned
for Site C.

If this isn’t set, then preference goes to the current site.

TwigPHP

```
{# Fetch unique users from Site A, or Site B if they don’t exist in Site A #}
{% set users = craft.users()
  .site('*')
  .unique()
  .preferSites(['a', 'b'])
  .all() %}
```

```
// Fetch unique users from Site A, or Site B if they don’t exist in Site A
$users = \craft\elements\User::find()
    ->site('*')
    ->unique()
    ->preferSites(['a', 'b'])
    ->all();
```

#### [#](#prepforeagerloading)`prepForEagerLoading`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prepforeagerloading)

Prepares the query for lazy eager loading.

#### [#](#preparesubquery)`prepareSubquery`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-preparesubquery)

Prepares the element query and returns its subquery (which determines what elements will be returned).

#### [#](#relatedto)`relatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-relatedto)

Narrows the query results to only users that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all users that are related to myCategory #}
{% set users = craft.users()
  .relatedTo(myCategory)
  .all() %}
```

```
// Fetch all users that are related to $myCategory
$users = \craft\elements\User::find()
    ->relatedTo($myCategory)
    ->all();
```

#### [#](#render)`render`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-render)

Executes the query and renders the resulting elements using their partial templates.

If no partial template exists for an element, its string representation will be output instead.

#### [#](#search)`search`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-search)

Narrows the query results to only users that match a search query.

See [Searching  (opens new window)](docs_5x__system__searching.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Get the search query from the 'q' query string param #}
{% set searchQuery = craft.app.request.getQueryParam('q') %}

{# Fetch all users that match the search query #}
{% set users = craft.users()
  .search(searchQuery)
  .all() %}
```

```
// Get the search query from the 'q' query string param
$searchQuery = \Craft::$app->request->getQueryParam('q');

// Fetch all users that match the search query
$users = \craft\elements\User::find()
    ->search($searchQuery)
    ->all();
```

#### [#](#sitesettingsid)`siteSettingsId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-sitesettingsid)

Narrows the query results based on the users’ IDs in the `elements_sites` table.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `1` | with an `elements_sites` ID of 1. |
| `'not 1'` | not with an `elements_sites` ID of 1. |
| `[1, 2]` | with an `elements_sites` ID of 1 or 2. |
| `['not', 1, 2]` | not with an `elements_sites` ID of 1 or 2. |

TwigPHP

```
{# Fetch the user by its ID in the elements_sites table #}
{% set user = craft.users()
  .siteSettingsId(1)
  .one() %}
```

```
// Fetch the user by its ID in the elements_sites table
$user = \craft\elements\User::find()
    ->siteSettingsId(1)
    ->one();
```

#### [#](#status)`status`

Narrows the query results based on the users’ statuses.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'inactive'` | with inactive accounts. |
| `'active'` | with active accounts. |
| `'pending'` | with accounts that are still pending activation. |
| `'credentialed'` | with either active or pending accounts. |
| `'suspended'` | with suspended accounts. |
| `'locked'` | with locked accounts (regardless of whether they’re active or suspended). |
| `['active', 'suspended']` | with active or suspended accounts. |
| `['not', 'active', 'suspended']` | without active or suspended accounts. |

TwigPHP

```
{# Fetch active and locked users #}
{% set users = craft.users()
  .status(['active', 'locked'])
  .all() %}
```

```
// Fetch active and locked users
$users = \craft\elements\User::find()
    ->status(['active', 'locked'])
    ->all();
```

#### [#](#trashed)`trashed`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-trashed)

Narrows the query results to only users that have been soft-deleted.

TwigPHP

```
{# Fetch trashed users #}
{% set users = craft.users()
  .trashed()
  .all() %}
```

```
// Fetch trashed users
$users = \craft\elements\User::find()
    ->trashed()
    ->all();
```

#### [#](#uid)`uid`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-uid)

Narrows the query results based on the users’ UIDs.

TwigPHP

```
{# Fetch the user by its UID #}
{% set user = craft.users()
  .uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
  .one() %}
```

```
// Fetch the user by its UID
$user = \craft\elements\User::find()
    ->uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
    ->one();
```

#### [#](#username)`username`

Narrows the query results based on the users’ usernames.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'foo'` | with a username of `foo`. |
| `'not foo'` | not with a username of `foo`. |

TwigPHP

```
{# Get the requested username #}
{% set requestedUsername = craft.app.request.getSegment(2) %}

{# Fetch that user #}
{% set user = craft.users()
  .username(requestedUsername|literal)
  .one() %}
```

```
// Get the requested username
$requestedUsername = \Craft::$app->request->getSegment(2);

// Fetch that user
$user = \craft\elements\User::find()
    ->username(\craft\helpers\Db::escapeParam($requestedUsername))
    ->one();
```

#### [#](#wascounteagerloaded)`wasCountEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-wascounteagerloaded)

Returns whether the query result count was already eager loaded by the query's source element.

#### [#](#waseagerloaded)`wasEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-waseagerloaded)

Returns whether the query results were already eager loaded by the query's source element.

#### [#](#with)`with`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-with)

Causes the query to return matching users eager-loaded with related elements.

See [Eager-Loading Elements  (opens new window)](docs_5x__development__eager-loading.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch users eager-loaded with the "Related" field’s relations #}
{% set users = craft.users()
  .with(['related'])
  .all() %}
```

```
// Fetch users eager-loaded with the "Related" field’s relations
$users = \craft\elements\User::find()
    ->with(['related'])
    ->all();
```

#### [#](#withcustomfields)`withCustomFields`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-withcustomfields)

Sets whether custom fields should be factored into the query.

#### [#](#withgroups)`withGroups`

Causes the query to return matching users eager-loaded with their user groups.

Possible values include:

| Value | Fetches users… |
| --- | --- |
| `'>= 2018-04-01'` | that last logged-in on or after 2018-04-01. |
| `'< 2018-05-01'` | that last logged-in before 2018-05-01 |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that last logged-in between 2018-04-01 and 2018-05-01. |

TwigPHP

```
{# fetch users with their user groups #}
{% set users = craft.users()
  .withGroups()
  .all() %}
```

```
// fetch users with their user groups
$users = \craft\elements\User::find()
    ->withGroups()
    ->all();
```

#### [#](#withprovisionaldrafts)`withProvisionalDrafts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-withprovisionaldrafts)

Causes the query to return provisional drafts for the matching elements,
when they exist for the current user.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)

Parts of this page are generated or assembled by automations. While we greatly appreciate contributions to the documentation, [reporting automated content issues](https://github.com/craftcms/docs/issues/new/choose) will allow us to fix them at the source!
