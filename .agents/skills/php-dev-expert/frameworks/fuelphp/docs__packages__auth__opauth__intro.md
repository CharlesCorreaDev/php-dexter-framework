# Introduction - Opauth - Auth Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/auth/opauth/intro.html

---

## Opauth - Introduction

Opauth is a multi-provider authentication framework that offers support for authentication against OAuth or OpenID providers.
By using Opauth in your application, you can allow your users to use their existing credentials from one of the major web
applications using OAuth, instead of having to create a new set of credentials, and a new password to remember. Web applications
that support OAuth include Facebook, Twitter, Google, Instagram, Paypal, LinkedIn, Vimeo, Foursquare and Flickr.

Besides using the OAuth service from one of these OAuth providers, Opauth also provides single-sign-on. When a user is already
logged-in on the website of one of these services (for example, Facebook), and they come to your website and indicate they want to
login using their Facebook account, Opauth will detect they are already logged in, and will not prompt the user for any
credentials. Instead, the user is logged into your application transparently.

### Integration

The Auth package provides a wrapper class for the Opauth library, which makes it easy to use in your application, and which provides
seamless integration with both the Simpleauth and Ormauth driver sets.

The complete integration means that when a user visits your application for the first time and chooses an OAuth provider as the means
to login, the Opauth integration class will transparently create a local user account, and logs the user in using that local account.
This means that all functionality of the Auth driver set you have selected (such as group assignments or ACL's) will also work for users
logging in through Opauth.

You can also enable multiple provider support. This allows a user to link additional OAuth providers to an existing account,
whether it is an account transparently created, or an account created manually. So whether they want to use their Facebook, Twitter
or Google credentials, your application sees the same user account, and ACL's can be applied without having to worry about a user
being in your system multiple times, which would be more difficult to manage.

### Installation and Configuration

If this is your first encounter with the Auth package, check the sections on [Simpleauth](docs__packages__auth__simpleauth__intro.md) and
[Ormauth](docs__packages__auth__ormauth__intro.md) first, make a decision on which one you are going to use, and install that according to
the instructions. Once you have done that, come back here and read on.

To be able to use Opauth, you need to install the Opauth library through composer first. Add it to your **composer.json**
file in the root of your FuelPHP installation:

```
"require": {
	"php": ">=5.3.3",
	"monolog/monolog": "1.5.*",
	"opauth/opauth": "0.4.*",
	"fuelphp/upload": "2.0"
},
```

Besides the Opauth library itself, you also need to install strategy packages for each of the OAuth providers you want to
support in your application. Check the [Packagist](https://packagist.org/packages/opauth/) website to see which
ones are readily available as a composer package. Let's say you want to use Facebook, Google and Github. Your **composer.json**
should then look like this:

```
"require": {
	"php": ">=5.3.3",
	"monolog/monolog": "1.5.*",
	"opauth/opauth": "0.4.*",
	"opauth/facebook": "dev-master",
	"opauth/google": "dev-master",
	"opauth/github": "dev-master",
	"fuelphp/upload": "2.0"
},
```

After this, run composer to get it all installed:

```
$ cd /data/www/myfuelwebsite
$ php composer.phar update
```

Opauth requires a database table in which the relation between the OAuth credentials and the local user account is stored.
This table is automatically created for you when you have installed either [Simpleauth](docs__packages__auth__simpleauth__intro.md#database) or
[Ormauth](docs__packages__auth__ormauth__intro.md#database).

### Configuration

The Opauth wrapper class is configured through a configuration file, not suprisingly called
**opauth.php**. A default file is provided in the Auth package. You should copy this file
to your app/config folder before making any changes.

The following configuration values can be defined:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| link\_multiple\_providers | boolean | ``` true ``` | Whether or not you want to support linking multiple OAuth providers to a single local account. If it is set to **false** and a provider is already linked, the user will get an error message when a second provider is used, and the login will be rejected. |
| auto\_registration | boolean | ``` false ``` | If **true**, a login via a provider will automatically create a dummy local user account with a random password, if a nickname and an email address is present. |
| default\_group | int | ``` 1 ``` | Group ID to assign to new local user accounts transparently created when a user uses an OAuth provider for the first time. By default this is the ID of the Simpleauth 'users' group. |
| debug | boolean | ``` false ``` | If **true** it enables the display of debugging messages within the Opauth library and Strategy classes. Do not enable this on production sites! |
| security\_salt | string | ``` null ``` | A random string of characters which is used to salt the signing key of the authentication response. You are required to define one, make sure it is sufficiently long and completely random! |
| security\_iteration | int | ``` 300 ``` | Number of iterations to use when generating the signing hash. The higher the number, the more secure your signing key is, but also the slower the login process is. This seems to be an acceptable default. |
| security\_timeout | string | ``` '2 minutes' ``` | Time limit allowed for an auth response to be considered valid. Starting from auth response generation (ie. the time when callback is first requested) to the time when auth response is received and attempts validation. Use any value compatible with **strtotime()**. |
| Strategy | array | ``` array() ``` | The list of strategies supported by your application, which will include per stategy at your application ID and application secret (as assigned to you by the OAuth provider), and any other optional configuration items. It is possible to define multiple strategies for the same provider. See [this page](https://github.com/opauth/opauth/wiki/Opauth-configuration#guide-to-multiple-configurations-for-a-single-strategy) for more information. |

Pay attention to the differences in OpAuth Auth drivers when it comes to callbacks. For example, Facebook doesn't require you
to define a callback (redirect) URL, Twitter requires one in the form **http://example.com/<controller>/callback/**,
and Google one like this: **http://example.com/<controller>/<method>/google/oauth2callback** (where "method"
is the name of the method in your controller that instantiates the Auth\_Opauth driver.

You should only use **auto\_registration = 'true'** if you don't care about local account, and you don't want to
link accounts. It's there for simple "login using " kind of scenario's.

Pay very close attention to the value of **default\_group**. For Ormauth, group id's are
not fixed as they are autoincrement in your database table. You don't want to define the wrong one, and ending up
giving every OAuth user administrator access!!!
