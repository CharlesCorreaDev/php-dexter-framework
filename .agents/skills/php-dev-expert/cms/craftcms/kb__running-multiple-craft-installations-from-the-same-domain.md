# Running Multiple Craft Installations from the Same Domain | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/running-multiple-craft-installations-from-the-same-domain

---

Search Knowledge Base

# Running Multiple Craft Installations from the Same Domain

If you need to run multiple Craft CMS installations from the same domain, there are a couple things you should do to ensure your Craft installs are able to run independently of each other.

![](https://craftcms.com/dist/images/icon-tip.svg)

If you are running Craft on multiple *subdomains*, such as `www.example.com` and `foo.example.com`, then by default you don’t need to do anything special, unless you’ve changed your [defaultCookieDomain](https://craftcms.com/docs/3.x/config/config-settings.html#defaultcookiedomain) config setting to `.example.com`.

### Check your license keys [#](#check-your-license-keys "Direct link to Check your license keys")

First, check your `config/license.key` files to make sure that each of your installations have their own unique license keys. If they are identical, purchase a new Craft Pro license from [plugins.craftcms.com](https://plugins.craftcms.com/) and save your new `license.key` file to one of your Craft installations.

### Use unique application IDs [#](#use-unique-application-iDs "Direct link to Use unique application IDs")

Each Craft install should have its own unique application ID, which is used to namespace your PHP session data, database-based mutex locks, Redis cache data, and other things.

You can give your installs unique application IDs from `config/app.php`:

```
return [
    'id' => 'your-unique-app-id',
    // ...
];
```

![](https://craftcms.com/dist/images/icon-tip.svg)

Craft 3.4.25 and later will set a unique application ID on itself automatically during installation.

### Use unique security keys [#](#use-unique-security-keys "Direct link to Use unique security keys")

To improve security, ensure that each of your Craft installs have their own security keys. Security keys are typically defined by a `SECURITY_KEY` environment variable, defined by your `.env` file or as part of your server configuration.

![](https://craftcms.com/dist/images/icon-tip.svg)

Use the `./craft setup/security-key` command to generate a new, cryptographically secure key.

### Use unique CSRF tokens [#](#use-unique-csrf-tokens "Direct link to Use unique CSRF tokens")

Give each of your installations their own unique [csrfTokenName](https://craftcms.com/docs/3.x/config/config-settings.html#csrftokenname) config setting values, to avoid invalid POST request errors when users are logged into both installs at the same time.

### Use unique PHP session names [#](#use-unique-php-session-names "Direct link to Use unique PHP session names")

As a security measure, Craft destroys all of users’ PHP session data upon logout, which could result in the user being logged out of other Craft installs as well. To avoid that, give each of your installs a unique [phpSessionName](https://craftcms.com/docs/3.x/config/config-settings.html#phpsessionname) config setting value, so users will get completely separate PHP sessions for each of your installs.

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
