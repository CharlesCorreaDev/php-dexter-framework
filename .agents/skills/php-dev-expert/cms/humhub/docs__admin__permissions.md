# Permissions | HumHub Documentation

> **Fonte / Source:** https://docs.humhub.org/docs/admin/permissions

---

On this page

## Default permissions[â](#default-permissions "Direct link to Default permissions")

Permission defaults can be overwritten within the file `protected/config/common.php` ([Advanced Configuration](docs__admin__advanced-configuration.md)) by means of the `defaultPermissions` params array.

The following example overwrites the default permission of `humhub\modules\mymodule\permissions\MyPermission` for the given groups.

```
return [

'params' => [

'defaultPermissions' => [

'humhub\modules\mymodule\permissions\MyPermission' => [

\humhub\modules\user\models\User::USERGROUP_SELF => \humhub\libs\BasePermission::STATE_ALLOW,

\humhub\modules\user\models\User::USERGROUP_USER => \humhub\libs\BasePermission::STATE_ALLOW,

\humhub\modules\user\models\User::USERGROUP_FRIEND => \humhub\libs\BasePermission::STATE_ALLOW,

\humhub\modules\user\models\User::USERGROUP_GUEST => \humhub\libs\BasePermission::STATE_ALLOW,

],

]

]

]
```

## User Groups[â](#user-groups "Direct link to User Groups")

Available user groups in profile context:

| Group | Description |
| --- | --- |
| \humhub\modules\user\models\User::USERGROUP\_SELF | The user himself |
| \humhub\modules\user\models\User::USERGROUP\_USER | Any registered user |
| \humhub\modules\user\models\User::USERGROUP\_FRIEND | A befriended user |
| \humhub\modules\user\models\User::USERGROUP\_GUEST | Any user, even unauthenticated if available |

Available user groups in space context:

| Group | Description |
| --- | --- |
| \humhub\modules\space\models\Space::USERGROUP\_OWNER | The owner of the space |
| \humhub\modules\space\models\Space::USERGROUP\_ADMIN | An administrator of the space |
| \humhub\modules\space\models\Space::USERGROUP\_MODERATOR | A moderator of the space |
| \humhub\modules\space\models\Space::USERGROUP\_MEMBER | A member of the space |
| \humhub\modules\space\models\Space::USERGROUP\_USER | Any registered user |
| \humhub\modules\space\models\Space::USERGROUP\_GUEST | Any user, even unauthenticated if available |

## Core Permissions[â](#core-permissions "Direct link to Core Permissions")

Global context

| Class | Description |
| --- | --- |
| \humhub\modules\admin\permissions\ManageGroups | Manage user groups |
| \humhub\modules\admin\permissions\ManageModules | Manage installed modules |
| \humhub\modules\admin\permissions\ManageSettings | Manage administrative settings |
| \humhub\modules\admin\permissions\ManageSpaces | Manage spaces |
| \humhub\modules\admin\permissions\ManageUsers | Manage users |
| \humhub\modules\admin\permissions\SeeAdminInformation | Access to administrative informations |
| \humhub\modules\space\permissions\CreatePrivateSpace | The user is allowed to create private spaces. |
| \humhub\modules\space\permissions\CreatePublicSpace | The user is allowed to create public spaces. |

Content Container (Space or Profile) context

| Class | Description |
| --- | --- |
| \humhub\modules\user\permissions\ViewAboutPage | Access to the profile about page. (User profile only!) |
| \humhub\modules\comment\permissions\CreateComment | Allowed to create new comments. |
| \humhub\modules\post\permissions\CreatePost | Allowed to create new posts. |
| \humhub\modules\topic\permissions\AddTopic | Allowed to create new topics. |
| \humhub\modules\topic\permissions\ManageTopics | Allowed to manage existing topics. |

## Examples[â](#examples "Direct link to Examples")

### Allow non friend users to access the "About" page.[â](#allow-non-friend-users-to-access-the-about-page "Direct link to Allow non friend users to access the \"About\" page.")

```
<?php

//...

return [

'params' => [

'defaultPermissions' => [

'humhub\modules\user\permissions\ViewAboutPage' => [

\humhub\modules\user\models\User::USERGROUP_USER => \humhub\libs\BasePermission::STATE_ALLOW,

],

]

]

];
```
