# User Permissions | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/user-permissions

---

# User Permissions

- ### On this Page

  - [Requiring Permissions](docs_5x__extend__user-permissions.md#requiring-permissions)
  - [Checking Permissions](docs_5x__extend__user-permissions.md#checking-permissions)

Modules and plugins can register new [user permissions](docs_5x__system__user-management.md#permissions) to the system using the [EVENT\_REGISTER\_PERMISSIONS  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-userpermissions.html#event-register-permissions) event:

```
use craft\events\RegisterUserPermissionsEvent;
use craft\services\UserPermissions;
use yii\base\Event;

public function init()
{
    parent::init();

    Event::on(
        UserPermissions::class,
        UserPermissions::EVENT_REGISTER_PERMISSIONS,
        function(RegisterUserPermissionsEvent $event) {
            $event->permissions[] = [
                'heading' => 'Permission Group Name',
                'permissions' => [
                    'permissionName' => [
                        'label' => 'Permission Label',
                    ],
                ],
            ];
        }
    );
}
```

Permissions can also have nested permissions by adding a `nested` key to the permission array.

```
'permissionName' => [
    'label' => 'Permission Label',
    'nested' => [
        'nestedPermissionName' => [
            'label' => 'Nested Permission Label',
        ],
    ],
];
```

Nesting is meant for UI only; if you wanted to reference `nestedPermissionName` in the example above you would use exactly that key.

## [#](#requiring-permissions)Requiring Permissions

Controllers can require that the logged-in user has a permission by calling [requirePermission()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requirepermission).

```
public function actionStayUpLate()
{
    // Require the `stayUpLate` permission
    $this->requirePermission('stayUpLate');
}
```

If the user doesn’t have that permission, then a 403 error will be returned.

Templates can also ensure that the user has a permission with the [requirePermission](docs_5x__reference__twig__tags.md#requirepermission) tag:

```
{% requirePermission 'stayUpLate' %}
```

## [#](#checking-permissions)Checking Permissions

You can check if the logged-in user has a permission by calling [craft\web\User::checkPermission()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-user.html#method-checkpermission):

```
// See if they have the `stayUpLate` permission
if (Craft::$app->user->checkPermission('stayUpLate')) {
    // ...
}
```

You can also see if any given user has a permission by calling [craft\elements\User::can()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html#method-can):

```
/** @var \craft\elements\User $user */
if ($user->can('stayUpLate')) {
    // ...
}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/user-permissions.md)
