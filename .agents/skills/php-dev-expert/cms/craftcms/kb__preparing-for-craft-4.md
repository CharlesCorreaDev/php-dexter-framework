# Preparing for Craft 4 | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/preparing-for-craft-4

---

Search Knowledge Base

# Preparing for Craft 4

Craft 4 is coming in 2022, and you can take steps right now that’ll make your sites easier to upgrade on launch day.

![](https://craftcms.com/dist/images/icon-tip.svg)

Craft 4 has been released! See [Upgrading from Craft 3](https://craftcms.com/docs/4.x/upgrade.html) in the documentation.

## Update to the latest version of Craft 3. [#](#update-to-the-latest-version-of-craft-3 "Direct link to Update to the latest version of Craft 3.")

Craft 4 will require that you’re starting from 3.7.11+, so [updating to the latest version](https://craftcms.com/docs/3.x/updating.html) will be important. This is especially true if you’ve got projects you need to [upgrade from Craft 2](https://craftcms.com/docs/3.x/upgrade.html).

## Upgrade your environment. [#](#upgrade-your-environment "Direct link to Upgrade your environment.")

Craft 4 is going to require **PHP 8.0.2+** and **MySQL 5.7.8+** (or MariaDB 10.2.7+) or **PostgreSQL 10+**.

You can check if all your plugins are PHP 8-compatible by updating your [`platform`](https://getcomposer.org/doc/06-config.md#platform) config in `composer.json`:

```
{
  "config": {
    "platform": {
      "php": "8.0.2"
    }
  }
}
```

Then dry-run a `composer update` command:

```
composer update --dry-run
```

If the command is successful, you know you’re ready to upgrade your local and production servers to PHP 8.

![](https://craftcms.com/dist/images/icon-tip.svg)

The [Intl](https://php.net/manual/en/book.intl.php) and [BCMath](https://www.php.net/manual/en/book.bc.php) PHP extensions will also be required, so be sure those are installed.

Once everything’s upgraded, run `composer update` (without `--dry-run` this time) to pull in all the PHP 8-compatible dependencies.

## Fix deprecation warnings. [#](#fix-deprecation-warnings "Direct link to Fix deprecation warnings.")

Thoroughly browse your site with the Debug Toolbar enabled (**My Account** → **Preferences** → **Show the debug toolbar on the front end**), and fix any deprecation warnings that are reported. You can also check **Utilities** → **Deprecation Warnings** for a full list of recently-logged warnings.

What to look for:

- Deprecated Twig [tags](https://craftcms.com/docs/3.x/upgrade.html#template-tags), [functions](https://craftcms.com/docs/3.x/upgrade.html#template-functions), and [date methods](https://craftcms.com/docs/3.x/upgrade.html#date-formatting).
- Deprecated [element query params](https://craftcms.com/docs/3.x/upgrade.html#element-queries) in Twig templates, GraphQL, and any custom PHP modules or plugins.

You can make deprecation warnings especially hard to miss on your local environment by configuring Craft to throw exceptions rather than logging them. To do that, add this to `config/app.php`:

```
use craft\helpers\App;

return [
  'components' => [
    'deprecator' => [
      // Throw exceptions on deprecation warnings
      'throwExceptions' => App::parseBooleanEnv('$HARD_MODE') ?? false,
    ],
  ],
];
```

Then open up your local `.env` file and add a `HARD_MODE` environment variable:

```
HARD_MODE=true
```

## Replace `siteName` and `siteUrl` config settings. [#](#replace-siteName-and-siteUrl-config-settings "Direct link to Replace siteName and siteUrl config settings.")

The `siteName` and `siteUrl` config settings are [being removed](https://github.com/craftcms/cms/issues/3205) in Craft 4. To give your sites unique names/URLs for each environment, use [environment variables](https://craftcms.com/docs/3.x/config/#environmental-configuration) instead.

Taking `siteUrl`, for example:

1. Remove `siteUrl` from `config/general.php`.
2. In the control panel, navigate to **Settings** → **Sites** and add that previous value to **Base URL**.
3. If you set the **Base URL** depending on the environment, create an environment variable in your site’s `.env` like `$DEFAULT_SITE_URL=https://mysite.foo`, adding `$DEFAULT_SITE_URL` as the **Base URL** field value.

![](https://craftcms.com/dist/images/icon-tip.svg)

Don’t forget to set any new environment variables in other environments, and your project’s `.env.example` if you use one!

No need to change the `{{ siteUrl }}` tag in your templates; it’s just the config setting that’s deprecated.

## Prepare your templates for Twig 3. [#](#prepare-your-templates-for-twig-3 "Direct link to Prepare your templates for Twig 3.")

Craft 4 will update Twig from v2 to v3, which could require a few changes to your templates. Two things you can update right now:

1. The `{% spaceless %}` tag is removed and now a filter instead. You can still use it as a tag pair via the `apply` tag:

   ```
    {% apply spaceless %}
      {# ... #}
    {% endapply %}
   ```
2. The `{% filter %}` tag is removed. Use the `{% apply %}` tag instead.
3. The `{% for %}` tag’s support for the `if` param is removed. Use `|filter` instead:

   ```
    {% for item in items|filter(item => item is not null) %}
      {# ... #}
    {% endfor %}
   ```

## Replace GraphQL `enabledForSite` with `status`. [#](#replace-graphQL-enabledForSite-with-status "Direct link to Replace GraphQL enabledForSite with status.")

The GraphQL API’s `enabledForSite` argument has been deprecated, which you can replace with `status` instead. `enabledForSite` accepted a boolean value and `status` accepts an array of the status strings you’ve seen throughout the Craft CMS control panel and PHP APIs—so it may not be as quick as a simple find and replace.

If you had been using `enabledForSite` as a query argument...

```
{
  entries(enabledForSite: true) {
    title
  }
}
```

...you can replace that like this:

```
{
  entries(status: ["enabled"]) {
    title
  }
}
```

That’s already the default behavior, so it’s more likely you were fetching *disabled* entries:

```
{
  entries(enabledForSite: false) {
    title
  }
}
```

Doing the equivalent thing with `status` looks like this:

```
{
  entries(status: ["disabled"]) {
    title
  }
}
```

Applies to
Craft CMS 4, Craft CMS 3, and Craft CMS 2.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
