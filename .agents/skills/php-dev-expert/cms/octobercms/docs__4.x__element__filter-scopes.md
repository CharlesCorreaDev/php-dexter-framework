# Filter Scopes - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/element/filter-scopes.html

---

# Filter Scopes

Learn how to filter lists using scopes.

- [Available Scopes](docs__4.x__element__filter-scopes.md#available-scopes)
- [Scope Properties](docs__4.x__element__filter-scopes.md#scope-properties)
- [Applying Model Scopes](#applying-model-scopes)
- [Scope Dependencies](#scope-dependencies)

Filter Scopes are scope definitions used by filters, often in conjunction with a list. Similar to list columns these are referenced by the following areas:

- [Backend List Controller](docs__4.x__extend__lists__list-controller.md)
- [Backend Relation Controller](docs__4.x__extend__forms__relation-controller.md)

All filter scopes are identified as their individual **type** property.

```
scopes:
    myscope:
        type: date
        # ...
```

## [#](#available-scopes) Available Scopes

The following filter scopes are available:

[Checkbox](docs__4.x__element__filter__scope-checkbox.md)[Switch](docs__4.x__element__filter__scope-switch.md)[Text](docs__4.x__element__filter__scope-text.md)[Number](docs__4.x__element__filter__scope-number.md)[Dropdown](docs__4.x__element__filter__scope-dropdown.md)[Group](docs__4.x__element__filter__scope-group.md)[Date](docs__4.x__element__filter__scope-date.md)

## [#](#scope-properties) Scope Properties

For each scope you can specify these properties (where applicable).

| Property | Description |
| --- | --- |
| **label** | a name when displaying the filter scope to the user. |
| **type** | defines how this scope should be displayed. Default: `group`. |
| **conditions** | enables or disables condition functions or specifies a raw where query statement to apply to each condition, see the scope type definition for details. |
| **modelClass** | class of the model to use as a data source and reference for local method calls. |
| **modelScope** | specifies a [model query scope](docs__4.x__extend__database__model.md) method defined in the **list model** to apply to the list query. The first argument will contain the query object (as per a regular scope method) and the second argument will contain the scope definition, including its populated value(s). |
| **options** | options to use if filtering by multiple items, supplied as an array. |
| **optionsMethod** | request options from a method name defined on the model or as a static method call, eg `Class::method`. |
| **emptyOption** | an optional label for an intentional empty selection. |
| **default** | supply a default value for the filter, as either array, string or integer depending on the filter value. |
| **permissions** | the [permissions](docs__4.x__extend__backend__permissions.md) that the current backend user must have in order for the filter scope to be used. Supports either a string for a single permission or an array of permissions of which only one is needed to grant access. |
| **dependsOn** | a string or an array of other scope names that this scope depends on. When the other scopes are modified, this scope will reset. |
| **nameFrom** | a model attribute name used for displaying the filter label. Default: `name`. |
| **valueFrom** | defines a model attribute to use for the source value. Default comes from the scope name. |
| **order** | a numerical weight when determining the display order, default value increments at 100 points per scope. |
| **after** | place this scope after another existing scope name using the display order (+1). |
| **before** | place this scope before another existing scope name using the display order (-1). |

### [#](#applying-model-scopes) Applying Model Scopes

Most filters will apply their scoped constraints using sensible defaults. The `modelScope` property can be used to apply custom constraints to the filter query using a [model scope method definition](docs__4.x__extend__database__model.md).

```
myfilter:
    label: My Filter
    type: group
    modelScope: applyMyFilter
```

In the above example, we expect a relation on the primary model called **myfilter** and a method defined named **scopeApplyMyFilter** on the related model. The second argument contains the second argument will contain the scope definition, including its populated value(s).

```
public function scopeApplyMyFilter($query, $scope)
{
    return $query->whereIn('my_filter_attribute', (array) $scope->value);
}
```

The `modelScope` property can also be defined as a static PHP class method (`Class::method`).

```
myfilter:
    label: My Filter
    type: group
    modelScope: "App\MyCustomClass::applyMyFilter"
```

In this example, the method should be declared statically on the specified class name.

```
namespace App;

class MyCustomClass
{
    public static function applyMyFilter($query, $scope)
    {
        return $query->whereIn('my_filter_attribute', (array) $scope->value);
    }
}
```

### [#](#scope-dependencies) Scope Dependencies

The `dependsOn` property allows you to link multiple filters together. When a dependency is modified, the filter scope will reset to allow for new conditions. Take the following example of two scope definitions.

```
country:
    label: Country
    type: group

state:
    label: State
    type: group
    dependsOn: country
    optionsMethod: getCityOptionsForFilter
```

The state scope depends on the value of the country scope, and the options are filtered in PHP using the **getCityOptionsForFilter** method. The first argument of this method will contain the entire set of scope definitions, including their current values.

```
public function getCityOptionsForFilter($scopes = null)
{
    if ($scopes->country && ($countryIds = $scopes->country->value)) {
        return self::whereIn('country_id', $countryIds)->lists('name', 'id');
    }

    return self::lists('name', 'id');
}
```

← [List Columns](docs__4.x__element__list-columns.md)[Inspector Types](docs__4.x__element__inspector-types.md) →
