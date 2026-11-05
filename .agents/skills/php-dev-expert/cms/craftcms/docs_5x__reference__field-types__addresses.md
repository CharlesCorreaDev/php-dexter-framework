# Addresses Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/addresses

---

# Addresses Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__addresses.md#settings)
  - [Development](docs_5x__reference__field-types__addresses.md#development)

The **Addresses** field is similar to a [Matrix](docs_5x__reference__field-types__matrix.md) field, but it manages nested [address elements](docs_5x__reference__element-types__addresses.md) instead of [entries](docs_5x__reference__element-types__entries.md). When you create an address it is “owned” by the element that field is attached to. Address fields are *not* [relational fields](docs_5x__system__relations.md#custom-fields).

Address fields are separate from users’ [address book](docs_5x__reference__element-types__users.md#addresses), and can be added to any element type!

my-project.ddev.site/admin/entries/vendors/123

![Screenshot of addresses field with two nested address elements](/docs/assets/img/fields-addresses.559be4a8.png)

Addresses can be [copied](docs_5x__system__elements.md#copying-elements) between fields, and to or from users’ address books.  [5.7.0+](https://github.com/craftcms/cms/blob/5.7.0/CHANGELOG.md "Copying-and-pasting address elements was first available in version 5.7.0 of Craft.")

## [#](#settings)Settings

Address fields can be displayed to editors as [cards](docs_5x__system__elements.md#chips-cards) or in a full [element index](docs_5x__system__elements.md#indexes).
Either way, individual addresses are always displayed as cards.

You can also use the **Min Addresses** and **Max Addresses** settings to control how many addresses must (or *can*) be added to the field for the owner to validate.

All addresses in the system use [a single field layout](docs_5x__reference__element-types__addresses.md#setup), managed via

1. Settings→
2. Addresses

.

## [#](#development)Development

Like Matrix and [relational fields](docs_5x__system__relations.md#fields), address field data is returned as an [element query](docs_5x__development__element-queries.md) (or an [element collection](docs_5x__development__collections.md#element-collections), when [eager-loaded](docs_5x__development__eager-loading.md)).

Typically, you will access addresses attached to an element via the field’s handle, followed by a query execution method like `.all()`:

```
{% set addresses = entry.contacts.all() %}

<h2>Contacts</h2>

<ul>
  {% for address in addresses %}
    <li>{{ address|address }}</li>
  {% endfor %}
</ul>
```

[Addresses
→

Learn more about managing and displaying address data.](docs_5x__reference__element-types__addresses.md)

### [#](#graphql)GraphQL

Nested address elements are available via [GraphQL](docs_5x__development__graphql.md) anywhere you have access to their owners. Address properties are retrieved piecemeal:

```
query StationsQuery {
  entries(section: "weatherBeacons") {
    title
    id
    ... on station_Entry {
      # Our addresses field:
      location {
        addressLine1
        addressLine2
        addressLine3
        administrativeArea
        dependentLocality
        countryCode
        locality
        postalCode
        sortingCode

        fullName
        firstName
        lastName
        organization
        organizationTaxId

        latitude
        longitude
      }
    }
  }
}
```

Not all properties will contain data, due to differences in international storage and formatting.
[Address formatters](docs_5x__reference__element-types__addresses.md#address-formatter) are not available via GraphQL, so you are responsible for handling variations in the returned data.

With the admin-only **Full Schema**, you may directly query for one or more addresses using the `address()` and `addresses()` queries:

```
query Headquarters {
  address(id: 123) {
    addressLine1
    # ...
  }
}
```

```
query MyAddresses {
  addresses(ownerId: 123) {
    addressLine1
    # ...
  }
}
```

In public and custom schemas, addresses are only accessible via their owners.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/addresses.md)
