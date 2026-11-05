# Introduction - OrmAuth - Auth Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/auth/ormauth/intro.html

---

## OrmAuth - Introduction

Ormauth is a set of authentication and authorisation drivers that provide a similar functionality as Simpleauth,
but stores its data in the database instead of in a configuration file. The data is accessed through ORM models.

Besides this, it also comes with additional functionality. Unlike Simpleauth, Ormauth supports roles assigned directly
to users, and permissions assigned to both users and groups, allowing for a much more fine-grained permission system.
It stores the user's metadata not in a serialized array, but in a separate metadata table, using the ORM's EAV functionality,
allowing you to access metadata like any other property of the user. It also keeps track of the previous login time,
which can be displayed to the user at login time as an additional security measure.

### Auth setup

Configuration starts with telling the Auth package that you are going to use the Ormauth driver.
This is done through the auth.php configuration file. A default file is provided in the Auth package.
You should copy this file to your app/config folder before making any changes. The default file is configured
for the Simpleauth drivers, so you need to change that. You will find an explaination of this config file [here](docs__packages__auth__intro.md#/configuration).

After you have done this, you can choose to autoload the package through the **always\_load** section of the app/config/config.php.

As OrmAuth uses the ORM to access the database, make sure you have added the 'orm' package to the **always\_load** section too!

### ACL's

OrmAuth has a much more fine-grained ACL system then SimpleAuth. It uses standard ORM relations to construct the permission set
for any given user, and has the following features:

- Every user is a member of one, and exactly one, group
- Every user has zero or more roles assigned to it
- Every group has zero or more roles assigned to it
- Every user can have zero or more permissions assigned to it
- Every group can have zero or more permissions assigned to it
- Every role can have zero or more permissions assigned to it
- Every permission belongs to a permission area
- Every permission can have zero or more associated actions

All the permissions are aggregated per user. A role can have special permission filters, that may alter the
assigned aggregated permissions. These are:

- "All access", stored as "A". Users with this role have all access. This is typically used for a 'super-admin' role. It overrules all permissions set.
- "No access", stored as "D". Users with this role have no access. This is typically used for a 'banned' role. It overrules all permissions set.
- "Revoke permissions", stored as "R". Permissions set on this role will be removed from the aggregated permissions set.

Note that "revoked" permissions are checked before all others. This allows you to create permission constructs like "all access
for this super-admin, except to the top-secret area of the application"...

Assigning a permission is using standard ORM relations, and is very straitforward:

```
// get the Role identified by $role_id
$role = \Model\Auth_Role::find($role_id);

// get the Permission identified by $perm_id
$perm = \Model\Auth_Permission::find($perm_id);

// relate the two
$role->permissions = $perm;

// and save the relation
$role->save();
```

#### Actions

As mentioned above, you can add additional granularity by adding a list of actions to a permission (a combination of area and permission).

Actions are stored as an indexed array of strings in the permission record, serialized and unserialized automatically by the ORM.
You can define as many actions as you want, and chose any strings you like. If needed this allows you to set a permission on each
and every action on a form, more fine-grained then you would probably ever need!

The action list defined on a permission specify which possible actions can be assigned when assigning the permission to either a
user, a group, or a role. The assigned actions are stored as an array of keys, that defines which of the actions were assigned.

```
// if these are the possible actions:
array('add', 'view', 'edit', 'delete')

// then you should store this when assigning 'view' and 'edit':
array(1, 2)
```

To store this, ORM Models have been provided to directly access the relationship or though table that connects either the user, the
role or the group to the permission.

```
// get the Role identified by $role_id
$role = \Model\Auth_Role::find($role_id);

// get the Permission identified by $perm_id
$perm = \Model\Auth_Permission::find($perm_id);

// relate the two, adding a subselection of actions
$role->rolepermission[] = \Model\Auth_Rolepermission::forge(array(
	'role_id' => $role->id,
	'perms_id' => $perm->id,
	'actions' => array(1,2),
));

// and save the relation
$role->save();
```

When checking for access, you specify the required access as either `area.permission` (when you want to check for
a single right, `area.[permission,permission,...]` when you want to check for multiple permissions at once, or if you
want to check for associated actions, you can use `area.permission[action,action,...]`. This is an AND check,
so when you specify multiple rights, the user must have ALL of them assigned to be granted access.
This will allow you to construct checks like `blog.comments[read,create,write,write-own,delete,delete-own]`.

### Add Permissions to Users

To add Permissions to Users, you need to create a User and a Permission, then relate the two:

```
// create user
$id = Auth::create_user('name','pass','email@example.com',5); // 6 group has all access so we use 5 to demonstrate
$user = \Model\Auth_User::find($id); //get the user we created
// create permission
$perm = \Model\Auth_Permission::forge();
$perm->area = 'site';
$perm->permission = 'access';
$perm->description = 'example permission';
$perm->save(); // save the permission
// related the two
$user->permissions[] = $perm; (or an array of $perms)
$user->save();

// check that our user has the permission we assigned to:
Auth::force_login($id);
Auth::has_access('site.access'); // should return true
```

### Delete User Permissions

Deleting User permissions is as easy as unsetting the array User->permissions

```
$user = \Model\Auth_User::find($id); //get the user we created

// remove permissions
unset($user->permissions);
$user->save();

// check that our user has the permission we assigned to:
Auth::force_login($id);
Auth::has_access('site.access'); // should return false (permission from previous example)
```

### Caching

To reduce database I/O, the OrmAuth drivers make heavy use of caching, to avoid having to retrieve the entire permission set for the
logged-in user on every page request. Make sure your cache configuration is setup before you start using OrmAuth.

All cache entries are created with the prefix defined in the OrmAuth configuration file. They are created without expiration timestamp,
so when you design your admin backend, make sure do delete the required cache entries after an update, so the cache can be refreshed.

The following cache keys are used by OrmAuth:

- **<prefix>.groups** - complete list of all defined groups
- **<prefix>.roles** - complete list of all defined roles
- **<prefix>.permissions.user\_<id>** - effective permissions for user <id>

After an update to the permissions system, make sure to flush the cached permissions, and, if you have changed either role or group
definitions, flush them too.

```
// flush the permissions of a single user (with id 12211)
\Cache::delete(\Config::get('ormauth.cache_prefix', 'auth').'.permissions.user_12211');

// flush all the cached permissions
\Cache::delete_all(\Config::get('ormauth.cache_prefix', 'auth').'.permissions');

// flush all the cached groups
\Cache::delete(\Config::get('ormauth.cache_prefix', 'auth').'.groups');

// flush all the cached roles
\Cache::delete(\Config::get('ormauth.cache_prefix', 'auth').'.roles');
```

### Configuration

The Ormauth authentication system is configured through a configuration file, not suprisingly called
'ormauth.php'. A default file is provided in the Auth package. You should copy this file
to your app/config folder before making any changes.

The following configuration values can be defined:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| db\_connection | string | ``` null ``` | Name of the database connection to use. This should match the definition in your applications db.php configuration file. Set it to **null** to use the default DB instance. |
| table\_name | string | ``` 'users' ``` | Name of the users table to use. |
| table\_columns | array | ``` array('*') ``` | List of columns to select from the users table, or '\*' to select all columns. You have to at least include 'username', 'password', 'email', 'last\_login', 'login\_hash', 'group' and 'profile\_fields'. |
| cache\_prefix | string | ``` 'auth' ``` | Prefix used for cache keys when caching ORM data. |
| guest\_login | boolean | ``` true ``` | If true a dummy 'guest' user will be created if no one is logged in. This allows you to use the group and acl drivers even when no one is logged in. |
| remember\_me | array | ``` array( 	'enabled' => false, 	'cookie_name' => 'rmcookie', 	'expiration' => 86400*31 ) ``` | Configuration for the Ormauth 'remember\_me' functionality |
| multiple\_logins | boolean | ``` false ``` | If true multiple concurrent logins of the same user are allowed. If false, when a user logs in, any previous login will be cancelled. Note that enabling this will disable some login session hijacking measures! |
| login\_hash\_salt | string | ``` 'put_some_salt_in_here' ``` | To make the passwords used by the OrmAuth drivers extra secure, a salt value is used when hashing the passwords to store them into the database. Make sure you change this default to a very random string! To hash passwords, OrmAuth uses [PBKDF2](http://en.wikipedia.org/wiki/PBKDF2), a very secure hashing mechanism. |
| username\_post\_key | string | ``` 'username' ``` | Name of the input field on the login form that contains the username. |
| password\_post\_key | string | ``` 'password' ``` | Name of the input field on the login form that contains the password. |

If you want to use the 'remember-me' functionality, make sure you have a valid [Crypt](docs__classes__crypt.md) configuration, as it
uses an encrypted cookie to store the user information to be remembered.

### Database tables

OrmAuth relies on a quite a few tables to store all information. The Auth package contains the required migration files to create these tables.  
Just run `oil refine migrate --packages=auth` to have these tables created for you.

Simpleauth uses the following table:

| Name | Description |
| --- | --- |
| users | Main users table. This table also controls concurrent login protection through the stored login-hash. Besides the password, the group the user belongs to and the users email address, all other properties are serialized in the profile\_fields colunm. |

Ormauth uses the following tables:

| Name | Description |
| --- | --- |
| users | Main users table. This table also controls concurrent login protection through the stored login-hash. Besides the password, the group the user belongs to and the users email address, this table does not contain any user properties. |
| users\_metadata | Users metadata table. This table contains all user properties. It is accessed through the User model as an EAV container, so you are free to add any property you like to any user. Metadata is automatically loaded by the User model. |
| users\_groups | Groups table. The list of groups a user can belong to. It is pre-populated with default groups by the Auth migrations. |
| users\_roles | Roles table. The list of roles a user can belong to. It is pre-populated with default roles by the Auth migrations. |
| users\_permissions | Permissions table. The list of permissions used by your application. These permissions can be assigned to users, roles and groups. |
| user\_group\_roles | Junction (relationship) table in the many-many relation between groups and roles. |
| users\_group\_permissions | Junction (relationship) table in the many-many relation between groups and permissions. |
| users\_role\_permissions | Junction (relationship) table in the many-many relation between roles and permissions. |
| users\_user\_permissions | Junction (relationship) table in the many-many relation between users and permissions. |
| users\_user\_roles | Junction (relationship) table in the many-many relation between users and roles |

Note that this table shows the default table names. The name of the users table is configurable in the Ormauth config file.
The configured name is also used as prefix for the other table names. So if you name your users table `abc`, the
role-permission Junction (relationship) table will be called `abc_role_permissions`.

For the integration with OpAuth, the following tables are created. If you don't intend to use OpAuth, it is safe to delete them
using a migration in your application.

| Name | Description |
| --- | --- |
| users\_providers | Opauth provider table. It has a one-many relation with users, and for each Opauth strategy used, it records the providers name, the users UID and security tokens for re-authentication. |
| users\_clients | Reserved for Oauth2 server usage. |
| users\_scopes | Reserved for Oauth2 server usage. |
| users\_sessions | Reserved for Oauth2 server usage. |
| users\_sessionscopes | Reserved for Oauth2 server usage. |

Note that all tables that are not Junction (relationship) tables in a many-many relationship have a column `user_id`. This is
a field you can optionally use to record the id of the user who has changed the record, for audit purposes. `Auth` itself
does not use this record, you need to set it yourself in your user administration admin backend, through the models
provided for those tables.

### Example

This is a sample login action:

```
public function action_login()
{
	$data = array();

	// If so, you pressed the submit button. Let's go over the steps.
	if (Input::post())
	{
		// Check the credentials. This assumes that you have the previous table created and
		// you have used the table definition and configuration as mentioned above.
		if (Auth::login())
		{
			// Credentials ok, go right in.
			Response::redirect('success_page');
		}
		else
		{
			// Oops, no soup for you. Try to login again. Set some values to
			// repopulate the username field and give some error text back to the view.
			$data['username']    = Input::post('username');
			$data['login_error'] = 'Wrong username/password combo. Try again';
		}
	}

	// Show the login form.
	echo View::forge('auth/login',$data);
}
```
