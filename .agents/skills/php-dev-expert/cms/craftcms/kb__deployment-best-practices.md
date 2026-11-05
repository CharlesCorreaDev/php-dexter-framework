# Deployment Best Practices | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/deployment-best-practices

---

Search Knowledge Base

# Deployment Best Practices

The specific steps required to deploy Craft CMS depend on your hosting setup, but there are a few things *everyone* can do to make the process smoother and safer.

![](https://craftcms.com/dist/images/icon-tip.svg)

Review the [Hosting & Deployment](https://craftcms.com/docs/5.x/deploy.html) documentation for additional workflow tips and deployment recipes.

## Use Version Control [#](#use-version-control "Direct link to Use Version Control")

To avoid surprises, limit changes to configuration, templates, and dependencies to local environments, where you can thoroughly test them before deploying. Commit those changes so they can be deployed as a group.

- Add [project config](https://craftcms.com/docs/5.x/system/project-config.html) files to your version-controlled files.
- Perform [Craft updates](https://craftcms.com/docs/5.x/update.html) locally and commit changes to `composer.lock` after running migrations and testing.
- Disable [admin changes](https://craftcms.com/docs/5.x/reference/config/general.html#allowadminchanges) in all non-development environments to ensure your content schema and settings are only introduced via deployments.

With these files in version control, you can always revert to a specific, known-good commit if anything breaks during a deployment.

## Prepare for the Worst [#](#prepare-for-the-worst "Direct link to Prepare for the Worst")

A few precautionary steps can drastically reduce the impact of most human and technical errors:

- **Back up your database** at sensible intervals, whether that be on a schedule, or as part of the deployment process. *Test the backups* periodically to be sure they’re reliable and easy to restore.
- **Back up asset volumes** in case a content editor accidentally hard-deletes any files. (Most cloud storage providers can be configured to enable versioning, and local assets can be included in snapshot backups.)
- Ensure every deployment target passes Craft’s [server check](https://github.com/craftcms/server-check).
- If applicable for your hosting platform, ensure a developer with Composer knowledge has **SSH access** to the deployment machine for troubleshooting when something goes wrong.

## Codify Deployment Steps [#](#codify-deployment-steps "Direct link to Codify Deployment Steps")

Always have a documented plan for deployments, and automate as many of those steps as possible. Tools like [Buddy](https://buddy.works), [GitHub Actions](https://github.com/features/actions), [Travis CI](https://travis-ci.org), can help avoid human (and machine) error, and immediately alert you to any issues.

Regardless of how you’re managing deployments, it’s important that they include these steps, *in order*:

1. Download new source code (typically with `git pull`);
2. Update PHP dependencies by running `composer install --no-interaction`;
3. Clear caches (this may include PHP’s opcache, static caches in a CDN, and/or Craft’s [data](https://craftcms.com/docs/5.x/reference/cli.html#clear-caches-data), [schema](https://craftcms.com/docs/5.x/reference/cli.html#cache/flush-schema), and [template](https://craftcms.com/docs/5.x/reference/cli.html#clear-caches-compiled-templates) caches);
4. Run [`php craft up`](https://craftcms.com/docs/5.x/reference/cli.html#up) to apply pending Craft, plugin, and content migrations, as well as [project config](https://craftcms.com/docs/5.x/system/project-config.html) changes;
5. Restart any [daemonized queue workers](https://craftcms.com/docs/5.x/system/queue.html#daemon);

Craft needs to be able to connect to your database to run migrations (and to clear some caches), but cloning code and installing packages *do not*. This means that you can perform many build tasks *prior* to synchronizing code to your server—we discuss these steps in greater detail in the [Hosting & Deployment](https://craftcms.com/docs/5.x/deploy.html) documentation, and touch on [atomic deployments](#atomic-deployments), below.

## Sequencing Migrations [#](#sequencing-migrations "Direct link to Sequencing Migrations")

Craft’s [`up` command](https://craftcms.com/docs/5.x/reference/cli.html#up) takes care of applying migrations and project config changes in an order suitable for most projects. Add the `--interactive=0` flag if you are running migrations unattended (i.e. GitHub Actions):

```
php craft up --interactive=0
```

![](https://craftcms.com/dist/images/icon-warning.svg)

Never pass Composer’s [`--no-plugins` option](https://getcomposer.org/doc/03-cli.md#global-options) updating Craft. This prevents Craft from being able to identify its own plugins and populate `vendor/craftcms/plugins.php`.

## Atomic Deployments [#](#atomic-deployments "Direct link to Atomic Deployments")

The steps above *can* put your project in a precarious state, should you encounter trouble. When you integrate new code into a running application (via `git pull`), it may be incompatible with the currently-installed packages (until `composer install` finishes). Performing this preparatory work outside the live application directory, then replacing it in a single, reversible action can greatly reduce the chances that users are exposed to a partially-deployed project.

[This example](https://craftcms.com/docs/5.x/deploy.html#atomic-deployment) provides a framework for “atomic” deployments on a typical UNIX system.

## Mind PHP Versions Across Environments [#](#mind-php-versions-across-environments "Direct link to Mind PHP Versions Across Environments")

When you run `composer update`, dependencies are updated for *that* environment’s PHP version and the result is written to `composer.lock`. Running `composer install` downloads whatever’s specified in `composer.lock` *without concern for the current environment’s PHP version*, which can lead to runtime issues.

You can force Composer to use a specific PHP version when resolving packages with [the `config.platform.php` property](https://getcomposer.org/doc/06-config.md#platform) in your project’s `composer.json`. While this can make the experience more consistent across environments, it doesn’t guarantee the installed packages will actually work—unless you know those environments also run that PHP version.

Our recommended local development platform [DDEV](https://ddev.com) also allows you to [select a specific PHP version](https://ddev.readthedocs.io/en/stable/users/configuration/config/#php_version) for each project.

If you’ve followed the steps above and are still encountering compatibility issues, see [Troubleshooting Failed Updates](kb__failed-updates.md).

## Things to Avoid [#](#things-to-avoid "Direct link to Things to Avoid")

We maintain a list of [common pitfalls](https://craftcms.com/docs/5.x/deploy.html#common-pitfalls) in the documentation. Many of those recommendations boil down to what we’ve discussed here—[plan ahead](#prepare-for-the-worst), have a [process](#codify-deployment-steps), and stick to it!

If you work with a team, be sure and review the broader [workflow recommendations](https://craftcms.com/docs/5.x/deploy.html#workflow), as well—if you practice integrating others’ work into your local environment every day, you will be much better prepared to share code with a server!

Applies to
Craft CMS 5, Craft CMS 4, and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
