# Users Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/users

---

# Users Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__users.md#settings)
  - [The Field](docs_5x__reference__field-types__users.md#the-field)
  - [Development](docs_5x__reference__field-types__users.md#development)
  - [See Also](docs_5x__reference__field-types__users.md#see-also)

Users fields allow you relate [users](docs_5x__reference__element-types__users.md) to other elements. It is one of Craft’s [relational](docs_5x__system__relations.md) custom fields.

## [#](#settings)Settings

Users fields have the following settings:

- **Sources** – Which user groups (or other user index [source](docs_5x__system__elements.md#sources)) the field should be able to relate users from.
- **Selectable Users Condition** – Rules that determine which users should be available for selection.
- **Min Relations** – The *minimum* number of users that must be selected. (Default is no limit.)
- **Max Relations** – The *maximum* number of users that can be selected. (Default is no limit.)
- **Default User Placement** — Whether new selections are prepended or appended to the existing relations.
- **View Mode** — How the related users are displayed to authors (*List* or *Cards*).
- **“Add” Button Label** – The label that should be used on the field’s selection button.
- **Validate related users** — Whether or not validation errors on the related users will be bubbled up.

### [#](#advanced-settings)Advanced Settings

Additional settings are available under the **Advanced** toggle:

- **Allow self-relations** — If this field is added to the user element field layout, should the author be allowed to select the user they are editing as a relationship to itself?

### [#](#multi-site-settings)Multi-Site Settings

On multi-site installs, the following setting will also be available:

- **Translation Method** — How relationships are handled when [propagating changes to other sites](docs_5x__system__fields.md#translation-methods).

While user elements do have an [affiliated site](docs_5x__system__user-management.md#affiliated-site)  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Affiliated sites for users was first available in version 5.6.0 of Craft."), their content is not localized (and therefore, you cannot establish relationships to a specific site, as you can with other relational fields). You may still use the **Translation Method** setting to determine whether authors can select different users for each site, site group, or language.

## [#](#the-field)The Field

Users fields list all of the currently-related users, with a button to select new ones.

Clicking the “Add a user” button will bring up a modal window where you can find and select additional users.

### [#](#inline-user-editing)Inline User Editing

When you double-click on a related user, a [slideout](docs_5x__system__control-panel.md#slideouts) will appear where you can edit the user’s custom fields.

## [#](#development)Development

### [#](#querying-elements-with-users-fields)Querying Elements with Users Fields

When [querying for elements](docs_5x__development__element-queries.md) that have a Users field, you can filter the results based on the Users field data using a query param named after your field’s handle.

Possible values include:

| Value | Fetches elements… |
| --- | --- |
| `':empty:'` | that don’t have any related users. |
| `':notempty:'` | that have at least one related user. |
| `100` | that are related to the user with an ID of 100. |
| `[100, 200]` | that are related to a user with an ID of 100 or 200. |
| `[':empty:', 100, 200]` | without related users, or related to a user with an ID of 100 or 200. |
| `['and', 100, 200]` | that are related to the users with IDs of 100 and 200. |
| an [User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html) object | that are related to the user. |
| an [UserQuery  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-userquery.html) object | that are related to any of the resulting users. |

TwigPHP

```
{# Fetch entries with a related user #}
{% set entries = craft.entries()
  .myFieldHandle(':notempty:')
  .all() %}
```

```
// Fetch entries with a related user
$entries = \craft\elements\Entry::find()
    ->myFieldHandle(':notempty:')
    ->all();
```

### [#](#working-with-users-field-data)Working with Users Field Data

If you have an element with a Users field in your template, you can access its related users using your Users field’s handle:

TwigPHP

```
{% set query = entry.myFieldHandle %}
```

```
$query = $entry->myFieldHandle;
```

That will give you a [user query](docs_5x__reference__element-types__users.md#querying-users), prepped to output all the related users for the given field.

To loop through all the related users, call [all()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-all) and then loop over the results:

TwigPHP

```
{% set relatedUsers = entry.myFieldHandle.all() %}
{% if relatedUsers|length %}
  <ul>
    {% for rel in relatedUsers %}
      <li><a href="{{ url('profiles/'~rel.username) }}">{{ rel.name }}</a></li>
    {% endfor %}
  </ul>
{% endif %}
```

```
$relatedUsers = $entry->myFieldHandle->all();
if (count($relatedUsers)) {
    foreach ($relatedUsers as $rel) {
        // \craft\helpers\UrlHelper::url('profiles/' . $rel->username)
        // $rel->name
    }
}
```

If you only want the first related user, call [one()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-one) and make sure it returned something:

TwigPHP

```
{% set rel = entry.myFieldHandle.one() %}
{% if rel %}
  <p><a href="{{ url('profiles/'~rel.username) }}">{{ rel.name }}</a></p>
{% endif %}
```

```
$rel = $entry->myFieldHandle->one();
if ($rel) {
    // \craft\helpers\UrlHelper::url('profiles/' . $rel->username)
    // $rel->name
}
```

If you need to check for related users without fetching them you can call [exists()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-exists):

TwigPHP

```
{% if entry.myFieldHandle.exists() %}
  <p>There are related users!</p>
{% endif %}
```

```
if ($entry->myFieldHandle->exists()) {
    // There are related users!
}
```

You can set [parameters](docs_5x__reference__element-types__users.md#parameters) on the user query as well. For example, to only fetch users in the `authors` group, set the [groupId](docs_5x__reference__element-types__users.md#groupid) param:

TwigPHP

```
{% set relatedUsers = entry.myFieldHandle
    .group('authors')
    .all() %}
```

```
$relatedUsers = $entry->myFieldHandle
    ->group('authors')
    ->all();
```

In Craft 3, we recommended cloning these query objects using the [`clone` keyword  (opens new window)](https://www.php.net/manual/en/language.oop5.cloning.php) or [`clone()`](docs_5x__reference__twig__functions.md#clone) Twig function before applying params. **This is no longer required in Craft 4**, because a new copy of the query is returned each time you access the field property.

### [#](#saving-users-fields)Saving Users Fields

If you have an element form, such as an [entry form  (opens new window)](https://craftcms.com/knowledge-base/entry-form), that needs to contain a Users field, you will need to submit your field value as a list of user IDs, in the order you want them to be related.

For example, you could create a list of checkboxes for each of the possible relations:

```
{# Include a hidden input first so Craft knows to update the existing value
   if no checkboxes are checked. #}
{{ hiddenInput('fields[myFieldHandle]', '') }}

{# Get all of the possible user options #}
{% set possibleUsers = craft.users()
  .group('authors')
  .orderBy('username ASC')
  .all() %}

{# Get the currently related user IDs #}
{% set relatedUserIds = entry is defined
  ? entry.myFieldHandle.ids()
  : [] %}

<ul>
  {% for possibleUser in possibleUsers %}
    <li>
      <label>
        {{ input(
          'checkbox',
          'fields[myFieldHandle][]',
          possibleUser.id,
          { checked: possibleUser.id in relatedUserIds }
        ) }}
        {{ possibleUser.friendlyName }}
      </label>
    </li>
  {% endfor %}
</ul>
```

You could then make the checkbox list sortable, so users have control over the order of related entries.

## [#](#see-also)See Also

- [User Queries](docs_5x__reference__element-types__users.md#querying-users)
- [Addresses](docs_5x__reference__element-types__addresses.md)
- [craft\elements\User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html)
- [Relations](docs_5x__system__relations.md)

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/users.md)
