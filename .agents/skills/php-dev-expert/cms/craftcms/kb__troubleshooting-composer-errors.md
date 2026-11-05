# Troubleshooting Composer Errors | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/troubleshooting-composer-errors

---

Search Knowledge Base

# Troubleshooting Composer Errors

![](https://craftcms.com/dist/images/icon-tip.svg)

With the deprecation of Composer 1.x and [Packagist’s support ending in August 2025](https://blog.packagist.com/shutting-down-packagist-org-support-for-composer-1-x/), Craft projects running versions earlier than 3.6 may encounter [errors while updating](#composer-1-x-and-packagist).

## Why Composer? [#](#why-composer "Direct link to Why Composer?")

Like any modern PHP application, Craft CMS manages dependencies with [Composer](https://getcomposer.org/). (If you’ve used [npm](https://www.npmjs.com/), it’s a similar idea for PHP.)

If you’re new to package managers in general, Composer may first seem like a cumbersome and frustrating tool because of its tendency to get stuck on incompatibilities and errors. This is actually Composer’s primary *benefit*; it exposes software conflicts *before* updates are applied, rescuing clients, customers, and visitors from errors that never had a chance to happen in production.

## What Composer Does [#](#what-composer-does "Direct link to What Composer Does")

Composer looks for a valid `composer.json` file that describes the PHP packages you intend to use in your project—that’s what the all-important `require` section is for, while `require-dev` describes a subset of items meant strictly for development and testing rather than production use.

These packages will be installed in your project’s `vendor/` directory, and you’ll see more items there than you specified in your `composer.json` file because each of your required packages may also require dependencies of its own. Managing all these packages and requirements safely is *exactly* the problem Composer is designed to solve.

When you run `composer update`, composer traverses the complex web of dependencies to update packages according to your constraints and those of every other dependency in the tree. If there are no conflicts, the relevant files in `vendor/` are updated and `composer.lock` is written to record precisely what was downloaded and at what version.

![](https://craftcms.com/dist/images/icon-tip.svg)

Run `composer show --tree` to inspect the entire dependency map.

You can commit `composer.lock` and run `composer install` in production to pull down those already-safe updated dependencies in far less time than `composer update` would require. (More on that in [Deployment Best Practices](kb__deployment-best-practices.md).)

While you don’t need to be a Composer expert to work with it, it’s important to understand how the subtle [differences in version constraints](https://getcomposer.org/doc/articles/versions.md#writing-version-constraints) can be important, as well as the implications for a project’s [`minimum-stability`](https://getcomposer.org/doc/04-schema.md#minimum-stability) designation.

## Update vs. Install [#](#update-vs-install "Direct link to Update vs. Install")

Generally speaking, it’s best to run `composer update` in development where you can test and confirm that your updated packages behave as expected, committing `composer.lock` once you’re confident that set of packages is ready for other environments.

Unless there were errors running `composer update`, it will then be safe to pull that new `composer.lock` file into another environment and run `composer install` to read it and bring that environment’s `vendor/` folder up to date.

![](https://craftcms.com/dist/images/icon-tip.svg)

Both `composer.json` and `composer.lock` should be committed and deployed across environments.

## Permissions Issues [#](#permissions-issues "Direct link to Permissions Issues")

Systems may use different permissions setups, but Composer should always be run by whatever user normally executes PHP. If you’re seeing permissions issues, that is most likely the problem to solve.

Running Composer as a super user (i.e. with `sudo`) may force a certain action to succeed where it had previously failed, but you’ll want to be sure the resulting `vendor/` directory has appropriate permissions so it doesn’t lead to further problems.

## `composer diagnose` [#](#composer-diagnose "Direct link to composer diagnose")

Running the `composer diagnose` terminal command gives you a quick sanity check. Consider using it to rule out more basic system-level problems:

```
$ composer diagnose
Checking platform settings: OK
Checking git settings: OK
Checking http connectivity to packagist: OK
Checking https connectivity to packagist: OK
Checking github.com oauth access: OK
Checking disk free space: OK
Checking pubkeys:
Tags Public Key Fingerprint: 57815BA2 7E54DC31 7ECC7CC5 573090D0  87719BA6 8F3BB723 4E5D42D0 84A14642
Dev Public Key Fingerprint: 4AC45767 E5EC2265 2F0C1167 CBBB8A2B  0C708369 153E328C AD90147D AFE50952
OK
Checking composer version: OK
Composer version: 2.0.6
PHP version: 7.4.12
PHP binary path: /usr/local/Cellar/php/7.4.12/bin/php
OpenSSL version: OpenSSL 1.1.1h  22 Sep 2020
cURL version: 7.73.0 libz 1.2.11 ssl OpenSSL/1.1.1h
zip extension: OK
```

## Common Composer Errors [#](#common-composer-errors "Direct link to Common Composer Errors")

### “Your requirements could not be resolved to an installable set of packages.” [#](#your-requirements-could-not-be-resolved-to-an-installable-set-of-packages "Direct link to “Your requirements could not be resolved to an installable set of packages.”")

This is the most common message you’ll see with an update failure, and it will always be preceded by details that describe one or more dependency conflicts. Craft versions prior to 3.6 may also encounter this error when updating from the control panel or command line due to the bundled Composer version being [end-of-life](#composer-1-x-and-packagist).

### “No such file or directory in /autoload.php” [#](#no-such-file-or-directory-in-autoload-php "Direct link to “No such file or directory in /autoload.php”")

Composer generates and updates a file named `autoload.php` an app like Craft can include once to load all its dependencies. Sometimes missing file errors mentioning `autoload.php` or `autoload_real.php` indicate an altered or corrupt vendor folder. In this case, it’s usually simplest to delete the vendor folder and reinstall all the dependencies:

```
rm -rf vendor/
composer install
```

### “yiisoft/yii2-composer contains a Composer plugin which is currently not in your allow-plugins config.” [#](#yiisoft-yii2-composer-contains-a-composer-plugin-which-is-currently-not-in-your-allow-plugins-config "Direct link to “yiisoft/yii2-composer contains a Composer plugin which is currently not in your allow-plugins config.”")

Composer 2.2+ will show this error unless you add the following to your `composer.json` file’s `config` section:

```
"allow-plugins": {
   "craftcms/plugin-installer": true,
   "yiisoft/yii2-composer": true
},
```

This is [included by default](https://github.com/craftcms/craft/blob/5.x/composer.json.default#L15-L18) in new Craft CMS projects.

## Composer 1.x and Packagist [#](#composer-1-x-and-packagist "Direct link to Composer 1.x and Packagist")

Craft 3.6 was the first release to include Composer 2.x. Earlier versions may have difficulty performing updates via the Craft control panel or CLI, after [February 2025](https://blog.packagist.com/shutting-down-packagist-org-support-for-composer-1-x/).

To move beyond this breakpoint, follow these steps using your system’s Composer binary:

1. Update your `craftcms/cms` requirement in `composer.json` to `^3.9.15` (or whatever the latest 3.x release is);
2. Run `composer update` (or `ddev composer update`) to resolve and install the new packages;
3. Run `php craft up` (or `ddev craft up`) to run migrations;

At this point, you may return to using the Craft control panel or CLI to perform updates. Note that the Craft updater uses exact version constraints (i.e. `3.9.15`) instead of the “caret” constraint; the next time you use the built-in updater, you may notice `composer.json` change again.

Unlike the built-in updater, this process *may* install a version of Craft that your license does not allow. You may need to adjust constraints or renew your CMS license to avoid warnings!

## Further Reading [#](#further-reading "Direct link to Further Reading")

- [Resolving PHP Requirement Conflicts](kb__resolving-php-requirement-conflicts.md)

Applies to
Craft CMS 5, Craft CMS 4, and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
