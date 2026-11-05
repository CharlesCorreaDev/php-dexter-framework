# Joomla! CMS 2.5 API » \JAccess

> **Fonte / Source:** https://api.joomla.org/cms-2.5/classes/JAccess.html

---

# JAccess

Class that handles all access authorisation routines.

|  |  |
| --- | --- |
| package | Joomla.Platform |
| subpackage | Access |
| since | 11.1 |

## Methods

### check

Method to check if a user is authorised to perform an action, optionally on an asset.

```
check(integer $userId, string $action, mixed $asset = null) : boolean
```

static

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$userId
:   `integer`Id of the user for which to check authorisation.

$action
:   `string`The name of the action to authorise.

$asset
:   `mixed`Integer asset id or the name of the asset as a string. Defaults to the global asset node.

#### Response

`boolean`True if authorised.

### checkGroup

Method to check if a group is authorised to perform an action, optionally on an asset.

```
checkGroup(integer $groupId, string $action, mixed $asset = null) : boolean
```

static

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$groupId
:   `integer`The path to the group for which to check authorisation.

$action
:   `string`The name of the action to authorise.

$asset
:   `mixed`Integer asset id or the name of the asset as a string. Defaults to the global asset node.

#### Response

`boolean`True if authorised.

### clearStatics

Method for clearing static caches.

```
clearStatics() : void
```

static

|  |  |
| --- | --- |
| since | 11.3 |

### getActions

Method to return a list of actions for which permissions can be set given a component and section.

```
getActions(string $component, string $section = 'component') : array
```

static deprecated

|  |  |
| --- | --- |
| since | 11.1 |
| deprecated | 12.3 Use JAccess::getActionsFromFile or JAccess::getActionsFromData instead. |

#### Arguments

$component
:   `string`The component from which to retrieve the actions.

$section
:   `string`The name of the section within the component from which to retrieve the actions.

#### Response

`array`List of actions available for the given component and section.

### getActionsFromData

Method to return a list of actions from a string or from an xml for which permissions can be set.

```
getActionsFromData(string|\SimpleXMLElement $data, string $xpath = "/access/section[@name='component']/") : boolean|array
```

static

|  |  |
| --- | --- |
| since | 12.1 |

#### Arguments

$data
:   `string|\SimpleXMLElement`The XML string or an XML element.

$xpath
:   `string`An optional xpath to search for the fields.

#### Response

`boolean|array`False if case of error or the list of actions available.

### getActionsFromFile

Method to return a list of actions from a file for which permissions can be set.

```
getActionsFromFile(string $file, string $xpath = "/access/section[@name='component']/") : boolean|array
```

static

|  |  |
| --- | --- |
| since | 12.1 |

#### Arguments

$file
:   `string`The path to the XML file.

$xpath
:   `string`An optional xpath to search for the fields.

#### Response

`boolean|array`False if case of error or the list of actions available.

### getAssetRules

Method to return the JAccessRules object for an asset. The returned object can optionally hold
only the rules explicitly set for the asset or the summation of all inherited rules from
parent assets and explicit rules.

```
getAssetRules(mixed $asset, boolean $recursive = false) : \JAccessRules
```

static

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$asset
:   `mixed`Integer asset id or the name of the asset as a string.

$recursive
:   `boolean`True to return the rules object with inherited rules.

#### Response

`\JAccessRules`JAccessRules object for the asset.

### getAuthorisedViewLevels

Method to return a list of view levels for which the user is authorised.

```
getAuthorisedViewLevels(integer $userId) : array
```

static

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$userId
:   `integer`Id of the user for which to get the list of authorised view levels.

#### Response

`array`List of view levels for which the user is authorised.

### getGroupPath

Gets the parent groups that a leaf group belongs to in its branch back to the root of the tree
(including the leaf group id).

```
getGroupPath(mixed $groupId) : mixed
```

static

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$groupId
:   `mixed`An integer or array of integers representing the identities to check.

#### Response

`mixed`True if allowed, false for an explicit deny, null for an implicit deny.

### getGroupsByUser

Method to return a list of user groups mapped to a user. The returned list can optionally hold
only the groups explicitly mapped to the user or all groups both explicitly mapped and inherited
by the user.

```
getGroupsByUser(integer $userId, boolean $recursive = true) : array
```

static

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$userId
:   `integer`Id of the user for which to get the list of groups.

$recursive
:   `boolean`True to include inherited user groups.

#### Response

`array`List of user group ids to which the user is mapped.

### getUsersByGroup

Method to return a list of user Ids contained in a Group

```
getUsersByGroup(integer $groupId, boolean $recursive = false) : array
```

static

|  |  |
| --- | --- |
| since | 11.1 |
| todo | This method should move somewhere else |

#### Arguments

$groupId
:   `integer`The group Id

$recursive
:   `boolean`Recursively include all child groups (optional)

#### Response

`array`

## Properties

### viewLevels

Array of view levels

static

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`array`

### assetRules

Array of rules for the asset

static

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`array`

### userGroups

Array of user groups.

static

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`array`

### userGroupPaths

Array of user group paths.

static

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`array`

### groupsByUser

Array of cached groups by user.

static

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`array`
