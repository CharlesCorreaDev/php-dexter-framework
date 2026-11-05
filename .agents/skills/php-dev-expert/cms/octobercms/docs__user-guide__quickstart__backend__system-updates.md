# System Updates - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/backend/system-updates.html

---

# System Updates

Manage plugins, check for updates, and register your site

- [View the Changelog](docs__user-guide__quickstart__backend__system-updates.md#view-the-changelog)
- [Manage Plugins](docs__user-guide__quickstart__backend__system-updates.md#manage-plugins)
- [Disable the Demo Plugin](#disable-the-demo-plugin)
- [Install a New Plugin](#install-a-new-plugin)
- [Clear the Application Cache](docs__user-guide__quickstart__backend__system-updates.md#clear-the-application-cache)
- [Register Your Software](docs__user-guide__quickstart__backend__system-updates.md#register-your-software)
- [Next Steps](docs__user-guide__quickstart__backend__system-updates.md#next-steps)

[More...](#)

October CMS has a built-in update system that handles the core, plugins, and themes. Let's explore it by checking the changelog, managing some plugins, and optionally registering your installation.

## [#](#view-the-changelog) View the Changelog

1. Navigate to **Settings → Software Updates**.
2. You will see the current version of October CMS and a list of recent changes. Browse through the changelog entries to see what has been updated.
3. Click the **Check For Updates** button to see if anything new is available.

This is the page you will visit whenever you want to keep your site up to date.

On a fresh installation the **Check For Updates** button is replaced by a **Register Software** button until the site is registered. Registration is covered at the end of this page.

## [#](#manage-plugins) Manage Plugins

Your installation comes with a few plugins already active. Let's get familiar with plugin management.

### [#](#disable-the-demo-plugin) Disable the Demo Plugin

October CMS ships with a demo plugin that provides some example pages. You don't need it anymore, so let's disable it.

1. On the **Settings → Software Updates** page, click **Manage Plugins**.
2. Find **October.Demo** in the list.
3. Click the toggle or disable button to turn it off.

The demo plugin is now disabled. Its routes and components are no longer active, but its files are still on disk in case you want to re-enable it later.

### [#](#install-a-new-plugin) Install a New Plugin

Let's install a plugin from the marketplace. We will use **RainLab.GoogleAnalytics** as an example.

1. On the **Settings → Software Updates** page, click **Install Packages**.
2. Search for **Google Analytics** in the marketplace search.
3. Click on **RainLab.GoogleAnalytics** in the results.
4. Click **Install** to add it to your site.
5. Wait for the download and installation to complete.

After installation, the plugin may add new settings pages or dashboard widgets. Check **Settings** for a new Google Analytics entry.

You can browse the full plugin marketplace at [octobercms.com/plugins  (opens new window)](https://octobercms.com/plugins) to discover what is available. Plugins can add anything from contact forms and SEO tools to full e-commerce systems.

## [#](#clear-the-application-cache) Clear the Application Cache

If things ever look stale or out of date after making changes, clearing the cache can help.

1. On the **Settings → Software Updates** page, click **Manage Plugins** and look for the **Clear Cache** button on the toolbar.
2. Click it to flush all cached data.

This forces October CMS to rebuild its internal caches on the next page load.

## [#](#register-your-software) Register Your Software

Registering your installation connects it to the October CMS marketplace, which unlocks automatic updates and access to premium plugins.

1. On the **Settings → Software Updates** page, look for the registration or license key section.
2. If you have an account at [octobercms.com  (opens new window)](https://octobercms.com), enter your license key.
3. If you don't have an account yet, you can [sign up  (opens new window)](https://octobercms.com/account/register), or skip this step and come back to it later.

Registration is optional for local development. You can explore everything in this tutorial without a license key.

## [#](#next-steps) Next Steps

You now know how to manage plugins, check for updates, and keep your site in good shape. The Backend Panel section is complete. Next, let's start building pages. Continue to [Understanding Themes](docs__user-guide__quickstart__editor__understanding-themes.md) to create a theme and start working with the editor.

← [Managing Administrators](docs__user-guide__quickstart__backend__managing-admins.md)[Understanding Themes](docs__user-guide__quickstart__editor__understanding-themes.md) →
