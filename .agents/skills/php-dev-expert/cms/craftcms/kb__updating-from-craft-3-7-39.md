# Updating Craft 3.7.39 to a Newer Version | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/updating-from-craft-3-7-39

---

Search Knowledge Base

# Updating Craft 3.7.39 to a Newer Version

Normally there are several ways you can [update Craft CMS](https://craftcms.com/docs/3.x/updating.html), but version 3.7.39 must be updated from your terminal using `composer update`.

## 1. Make sure Composer is installed wherever you’ll be running the update. [#](#1-make-sure-composer-is-installed-wherever-youll-be-running-the-update "Direct link to 1. Make sure Composer is installed wherever you’ll be running the update.")

Run the `which composer` command, and if you don’t have it follow the instructions [here](https://getcomposer.org/download/) to download and install it.

## 2. Open your Craft project’s `composer.json` and check your `craftcms/cms` requirement. [#](#2-open-your-craft-projects-composer-json-and-check-your-craftcms-cms-requirement "Direct link to 2. Open your Craft project’s composer.json and check your craftcms/cms requirement.")

It should be set to one of these:

- Something that begins with `^` (e.g. `^3.7.0`, meaning “any version equal to or after 3.7.0, and less than 4.0.0”)
- Something that begins with `~` (e.g. `~3.7.0`, meaning “any version equal to or after 3.7.0, and less than 3.8.0”)
- A specific version number (e.g. `3.7.39`).

If it’s a specific version number, update it to `3.7.40.1`.

## 3. Run `composer update`. [#](#3-run-composer-update "Direct link to 3. Run composer update.")

Once the `composer update` command finishes, you can commit your `composer.json` and `composer.lock` files like you normally would, running future updates using whatever method you prefer.

![](https://craftcms.com/dist/images/icon-tip.svg)

If Craft is installed within a VM or Docker container, you may need to add  
`--ignore-platform-reqs` so Composer doesn’t error out over an environmental conflict, like a required PHP version mismatch.

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
