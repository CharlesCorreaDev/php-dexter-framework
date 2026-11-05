# Duplicating a Craft Site | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/duplicating-a-craft-site

---

Search Knowledge Base

# Duplicating a Craft Site

If you’ve got a Craft site you’d like to use as a starting point for a new Craft project, you can either clone the entire install including its content, or re-use the original site’s structure and configuration leaving it ready for fresh users and content.

## Complete Clone [#](#complete-clone "Direct link to Complete Clone")

To clone an entire site, you’ll need to copy its files and database and give it a new URL.

1. Create a database backup of the original site.
2. Create a new database for the cloned site, and import the backup you created in the previous step.
3. Copy the original project directory to a new one you’ll use for the cloned site.
4. Edit the cloned `.env` and `config/general.php` files to point to the new database and use the cloned project’s desired URL(s).
5. Configure your web server for the new site.

That’s it! You should have a fully-cloned project, content and all, ready at the new URL you set up.

## Structure Only [#](#structure-only "Direct link to Structure Only")

Craft 3.1.0 and higher use [project config](https://craftcms.com/docs/3.x/project-config.html) to store configuration in YAML files. Craft can sync this YAML to replicate the entire project configuration in a new environment—including a fresh Craft install using the same version—without any need for a database dump.

1. Make sure Craft and your plugins are all up to date for the original project.
2. In the original site’s control panel, go to **Utilities** → **Project Config** and press **Rebuild**. (You can alternatively use `php craft project-config/rebuild` from your terminal.)
3. Create a new database for the cloned site.
4. Copy the original project directory to a new one you’ll use for the cloned site. If you’d rather be more selective, at minimum copy `composer.json`, `composer.lock`, `config/project/*`, `craft`, `web/index.php`, `.env`, and `.env.example`.
5. Edit the cloned .env and config/general.php files to point to the new database and use the cloned project’s desired URL(s).
6. Run `composer install` (**not** `composer update`!) for the new site.
7. Configure your web server for the new site.
8. In your terminal, run `php craft setup` and follow the prompts to create an admin account and configure basic site settings. Your project config YAML will automatically be applied toward the end of the install process:

   ```
    (...)
        > applying existing project config ... done
        > saving the first user ... done
     *** installed Craft successfully (time: 8s)
   ```

Your cloned site should be all ready for new content.

![](https://craftcms.com/dist/images/icon-tip.svg)

If the original site relied on external services for asset storage, email delivery, etc., don’t forget to recreate those as well!

Applies to
Craft CMS 3 and Craft CMS 2.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
