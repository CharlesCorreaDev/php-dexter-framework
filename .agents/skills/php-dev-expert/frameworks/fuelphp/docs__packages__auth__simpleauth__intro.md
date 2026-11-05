# Introduction - SimpleAuth - Auth Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/auth/simpleauth/intro.html

---

## SimpleAuth - Introduction

Simpleauth is, as its name implies, a simple authentication system which is included in the Auth package.
Besides being a working Auth implementation, it is also an example for other Auth drivers.
You can use this as a reference when building your own driver.

### Auth setup

Configuration starts with telling the Auth package that you are going to use the Simpleauth driver.
This is done through the auth.php configuration file. A default file is provided in the Auth package.
You should copy this file to your app/config folder before making any changes. The default file is already
configured for the Simpleauth package. You will find an explaination of this config file [here](docs__packages__auth__intro.md#/configuration).

After you have done this, you can choose to autoload the package through the **always\_load** section of the app/config/config.php.

### ACL's

SimpleAuth comes with an ACL driver that supports the following ACL structure:

- Every user is a member of one, and exactly one, group
- Every group has zero or more roles assigned to it
- Every role can have zero or more rights assigned to it

When checking for access, you specify the required access as either `role.right` when you want to check for
a single right, or `role.[right,right]` when you want to check for multiple rights at once. This is an AND check,
so when you specify multiple rights, the user must have ALL of them assigned to be granted access.

### Configuration

The Simpleauth authentication system is configured through a configuration file, not suprisingly called
'simpleauth.php'. A default file is provided in the Auth package. You should copy this file
to your app/config folder before making any changes.

The following configuration values can be defined:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| db\_connection | string | ``` null ``` | Name of the database connection to use. This should match the definition in your applications db.php configuration file. Set it to **null** to use the default DB instance. |
| table\_name | string | ``` 'users' ``` | Name of the users table to use. |
| table\_columns | array | ``` array('*') ``` | List of columns to select from the users table, or '\*' to select all columns. You have to at least include 'username', 'password', 'email', 'last\_login', 'login\_hash', 'group' and 'profile\_fields'. |
| guest\_login | boolean | ``` true ``` | If true a dummy 'guest' user will be created if no one is logged in. This allows you to use the group and acl drivers even when no one is logged in. |
| remember\_me | array | ``` array( 	'enabled' => false, 	'cookie_name' => 'rmcookie', 	'expiration' => 86400*31 ) ``` | Configuration for the Simpleauth 'remember\_me' functionality |
| multiple\_logins | boolean | ``` false ``` | If true multiple concurrent logins of the same user are allowed. If false, when a user logs in, any previous login will be cancelled. Note that enabling this will disable some login session hijacking measures! |
| groups | array | ``` array() ``` | Defined groups, to be used by the SimpleAuth groups driver. See the default configuration file for an description of the groups array structure. |
| roles | array | ``` array() ``` | Defined roles, to be used by the SimpleAuth acl driver. See the default configuration file for an description of the roles array structure. |
| login\_hash\_salt | string | ``` 'put_some_salt_in_here' ``` | To make the passwords used by the SimpleAuth drivers extra secure, a salt value is used when hashing the passwords to store them into the database. Make sure you change this default to a very random string! To hash passwords, SimpleAuth uses [PBKDF2](http://en.wikipedia.org/wiki/PBKDF2), a very secure hashing mechanism. |
| username\_post\_key | string | ``` 'username' ``` | Name of the input field on the login form that contains the username. |
| password\_post\_key | string | ``` 'password' ``` | Name of the input field on the login form that contains the password. |

If you want to use the 'remember-me' functionality, make sure you have a valid [Crypt](docs__classes__crypt.md) configuration, as it
uses an encrypted cookie to store the user information to be remembered.

### Database table

SimpleAuth relies on a single table. The Auth package contains the required migration files to create this table.  
Just run `oil refine migrate --packages=auth` to have the table created for you.

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
