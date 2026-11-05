# Opauth Controller example - Auth Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/auth/examples/opauth.html

---

## Using Opauth in your application

On this page you will find an example of the methods needed to integrate OAuth authentication in your application. It extends
the functionality from the standard Auth controller, documented [here](docs__packages__auth__examples__auth.md).

### Login

This is the example code for the oauth method. It expects the name of the OAuth provider as a URI parameter,
so it should be called like "login/oath/facebook" if you want to use the Facebook Opauth Strategy. As an alternative
you could opt to integrate this functionality in the standard login method, which then could deal with manual login
through a form if no provider was given.

```
public function action_oauth($provider = null)
{
	// bail out if we don't have an OAuth provider to call
	if ($provider === null)
	{
		\Messages::error(__('login-no-provider-specified'));
		\Response::redirect_back();
	}

	// load Opauth, it will load the provider strategy and redirect to the provider
	\Auth_Opauth::forge();
}
```

You should check the [Opauth](docs__packages__auth__opauth__intro.md) class documentation to see how it works, and how it can
be configured. Here, we're using the default setup.

### The OAuth callback

Since we've used a default configuration when we called the OAuth provider in the previous method, the callback URL passed
to the provider was generated for us. By default, it will return to a method called 'callback' in the same controller (technically,
the same URI path, as you can use routes to have to point to a different controller) as which contains the login method.

This is the example code for the callback method. It uses the Opauth 'login\_or\_register' method to process the callback and
get the associated local user. The returned status will tell you want to do next.

```
public function action_callback()
	{
		// Opauth can throw all kinds of nasty bits, so be prepared
		try
		{
			// get the Opauth object
			$opauth = \Auth_Opauth::forge(false);

			// and process the callback
			$status = $opauth->login_or_register();

			// fetch the provider name from the opauth response so we can display a message
			$provider = $opauth->get('auth.provider', '?');

			// deal with the result of the callback process
			switch ($status)
			{
				// a local user was logged-in, the provider has been linked to this user
				case 'linked':
					// inform the user the link was succesfully made
					\Messages::success(sprintf(__('login.provider-linked'), ucfirst($provider)));
					// and set the redirect url for this status
					$url = 'dashboard';
				break;

				// the provider was known and linked, the linked account as logged-in
				case 'logged_in':
					// inform the user the login using the provider was succesful
					\Messages::success(sprintf(__('login.logged_in_using_provider'), ucfirst($provider)));
					// and set the redirect url for this status
					$url = 'dashboard';
				break;

				// we don't know this provider login, ask the user to create a local account first
				case 'register':
					// inform the user the login using the provider was succesful, but we need a local account to continue
					\Messages::info(sprintf(__('login.register-first'), ucfirst($provider)));
					// and set the redirect url for this status
					$url = 'users/register';
				break;

				// we didn't know this provider login, but enough info was returned to auto-register the user
				case 'registered':
					// inform the user the login using the provider was succesful, and we created a local account
					\Messages::success(__('login.auto-registered'));
					// and set the redirect url for this status
					$url = 'dashboard';
				break;

				default:
					throw new \FuelException('Auth_Opauth::login_or_register() has come up with a result that we dont know how to handle.');
			}

			// redirect to the url set
			\Response::redirect($url);
		}

		// deal with Opauth exceptions
		catch (\OpauthException $e)
		{
			\Messages::error($e->getMessage());
			\Response::redirect_back();
		}

		// catch a user cancelling the authentication attempt (some providers allow that)
		catch (\OpauthCancelException $e)
		{
			// you should probably do something a bit more clean here...
			exit('It looks like you canceled your authorisation.'.\Html::anchor('users/oath/'.$provider, 'Click here').' to try again.');
		}

}
```

### Registration

This is the example code for the new user registration method. It is based on the standard registration method that has been
documented in this [example](docs__packages__auth__examples__auth.md#registration), and is extended to support user registration after a valid
Opauth callback (the call to 'login\_or\_register' has returned the 'register' status).

```
public function action_register()
{
	// is registration enabled?
	if ( ! \Config::get('application.user.registration', false))
	{
		// inform the user registration is not possible
		\Messages::error(__('login.registation-not-enabled'));

		// and go back to the previous page (or the homepage)
		\Response::redirect_back();
	}

	// create the registration fieldset
	$form = \Fieldset::forge('registerform');

	// add a csrf token to prevent CSRF attacks
	$form->form()->add_csrf();

	// and populate the form with the model properties
	$form->add_model('Model\\Auth_User');

	// add the fullname field, it's a profile property, not a user property
	$form->add_after('fullname', __('login.form.fullname'), array(), array(), 'username')->add_rule('required');

	// add a password confirmation field
	$form->add_after('confirm', __('login.form.confirm'), array('type' => 'password'), array(), 'password')->add_rule('required');

	// make sure the password is required
	$form->field('password')->add_rule('required');

	// and new users are not allowed to select the group they're in (duh!)
	$form->disable('group_id');

	// since it's not on the form, make sure validation doesn't trip on its absence
	$form->field('group_id')->delete_rule('required')->delete_rule('is_numeric');

	// fetch the oauth provider from the session (if present)
	$provider = \Session::get('auth-strategy.authentication.provider', false);

	// if we have provider information, create the login fieldset too
	if ($provider)
	{
		// disable the username, it was passed to us by the Oauth strategy
		$form->field('username')->set_attribute('readonly', true);

		// create an additional login form so we can link providers to existing accounts
		$login = \Fieldset::forge('loginform');
		$login->form()->add_csrf();
		$login->add_model('Model\\Auth_User');

		// we only need username and password
		$login->disable('group_id')->disable('email');

		// since they're not on the form, make sure validation doesn't trip on their absence
		$login->field('group_id')->delete_rule('required')->delete_rule('is_numeric');
		$login->field('email')->delete_rule('required')->delete_rule('valid_email');
	}

	// was the registration form posted?
	if (\Input::method() == 'POST')
	{
		// was the login form posted?
		if ($provider and \Input::post('login'))
		{
			// check the credentials.
			if (\Auth::instance()->login(\Input::param('username'), \Input::param('password')))
			{
				// get the current logged-in user's id
				list(, $userid) = \Auth::instance()->get_user_id();

				// so we can link it to the provider manually
				$this->link_provider($userid);

				// inform the user we're linked
				\Messages::success(sprintf(__('login.provider-linked'), ucfirst($provider)));

				// logged in, go back where we came from,
				// or the the user dashboard if we don't know
				\Response::redirect_back('dashboard');
			}
			else
			{
				// login failed, show an error message
				\Messages::error(__('login.failure'));
			}
		}

		// was the registration form posted?
		elseif (\Input::post('register'))
		{
			// validate the input
			$form->validation()->run();

			// if validated, create the user
			if ( ! $form->validation()->error())
			{
				try
				{
					// call Auth to create this user
					$created = \Auth::create_user(
						$form->validated('username'),
						$form->validated('password'),
						$form->validated('email'),
						\Config::get('application.user.default_group', 1),
						array(
							'fullname' => $form->validated('fullname'),
						)
					);

					// if a user was created succesfully
					if ($created)
					{
						// inform the user
						\Messages::success(__('login.new-account-created'));

						// and go back to the previous page, or show the
						// application dashboard if we don't have any
						\Response::redirect_back('dashboard');
					}
					else
					{
						// oops, creating a new user failed?
						\Messages::error(__('login.account-creation-failed'));
					}
				}

				// catch exceptions from the create_user() call
				catch (\SimpleUserUpdateException $e)
				{
					// duplicate email address
					if ($e->getCode() == 2)
					{
						\Messages::error(__('login.email-already-exists'));
					}

					// duplicate username
					elseif ($e->getCode() == 3)
					{
						\Messages::error(__('login.username-already-exists'));
					}

					// this can't happen, but you'll never know...
					else
					{
						\Messages::error($e->getMessage());
					}
				}
			}
		}

		// validation failed, repopulate the form from the posted data
		$form->repopulate();
	}
	else
	{
		// get the auth-strategy data from the session (created by the callback)
		$user_hash = \Session::get('auth-strategy.user', array());

		// populate the registration form with the data from the provider callback
		$form->populate(array(
			'username' => \Arr::get($user_hash, 'nickname'),
			'fullname' => \Arr::get($user_hash, 'name'),
			'email' => \Arr::get($user_hash, 'email'),
		));
	}

	// pass the fieldset to the form, and display the new user registration view
	return \View::forge('login/registration')->set('form', $form, false)->set('login', isset($login) ? $login : null, false);
}
```

As we now have a registration page with two forms (a registration form and a login form), we have to distinguish which of the
forms was submitted. To do so, we have used the name of the submit button here, which is either 'login' or 'register'. You are
free to use any another method if you want.

Note that we use this registration method also for normal new user registrations. For those obviously you should not display
the second login form. This can be controlled by the form variable $login, which is null if there if it's a normal registration,
and contains a fieldset if it's a registration after a provider callback.

### Linking a provider to a local account

After new user registration is succesful, the new account needs to be linked to the provider the user used to login to your
application. The functionality for this is part of the Auth\_Opauth class, but we use a local method to aid in calling it.

```
protected function link_provider($userid)
{
	// do we have an auth strategy to match?
	if ($authentication = \Session::get('auth-strategy.authentication', array()))
	{
		// don't forget to pass false, we need an object instance, not a strategy call
		$opauth = \Auth_Opauth::forge(false);

		// call Opauth to link the provider login with the local user
		$insert_id = $opauth->link_provider(array(
			'parent_id' => $userid,
			'provider' => $authentication['provider'],
			'uid' => $authentication['uid'],
			'access_token' => $authentication['access_token'],
			'secret' => $authentication['secret'],
			'refresh_token' => $authentication['refresh_token'],
			'expires' => $authentication['expires'],
			'created_at' => time(),
		));
	}
}
```
