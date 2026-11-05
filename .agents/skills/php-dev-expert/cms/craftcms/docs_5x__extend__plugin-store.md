# Publishing to the Plugin Store | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/plugin-store

---

# Publishing to the Plugin Store

- ### On this Page

  - [Choose a License](docs_5x__extend__plugin-store.md#choose-a-license)
  - [Registering your Plugin](docs_5x__extend__plugin-store.md#registering-your-plugin)
  - [Plugin Releases](docs_5x__extend__plugin-store.md#plugin-releases)
  - [Changing the GitHub Repository URL](docs_5x__extend__plugin-store.md#changing-the-github-repository-url)
  - [Changing the Package Name](docs_5x__extend__plugin-store.md#changing-the-package-name)
  - [Transferring Ownership](docs_5x__extend__plugin-store.md#transferring-ownership)

If you want to make your plugin available in the in-app Plugin Store (and on [plugins.craftcms.com  (opens new window)](https://plugins.craftcms.com/)) follow this guide.

## [#](#choose-a-license)Choose a License

All plugins in the Plugin Store must select a software license.

Commercial plugins are recommended to use the [Craft license  (opens new window)](https://raw.githubusercontent.com/craftcms/license/master/index.md).

To use the Craft license:

1. Copy the license text into a `LICENSE.md` file at the root of your repository, and replace `[YOUR_NAME_HERE]` with your personal/organization name.
2. Set the `license` value in `composer.json` to `"proprietary"`.

The following open source licenses are also allowed:

- [Apache-2.0  (opens new window)](https://raw.githubusercontent.com/licenses/license-templates/master/templates/apache.txt)
- [GPL-2.0  (opens new window)](https://raw.githubusercontent.com/licenses/license-templates/master/templates/gpl2.txt)
- [GPL-3.0  (opens new window)](https://raw.githubusercontent.com/licenses/license-templates/master/templates/gpl3.txt)
- [MIT  (opens new window)](https://raw.githubusercontent.com/licenses/license-templates/master/templates/mit.txt)

The MIT license is generally recommended, unless you have a good reason to use something else.

To use an open source license:

1. Copy the license text into a `LICENSE.txt` file at the root of your repository, prefixed with a copyright notice (e.g. `Copyright (c) Pixel & Tonic, Inc.`).
2. Set the `license` value in `composer.json` to the appropriate [license name  (opens new window)](https://getcomposer.org/doc/04-schema.md#license).

## [#](#registering-your-plugin)Registering your Plugin

To register a plugin, it must be pushed to a public GitHub repository. Create a Craft Console account at [console.craftcms.com  (opens new window)](https://console.craftcms.com) and connect it to your GitHub account. Then, [set up an organization  (opens new window)](https://craftcms.com/knowledge-base/craft-console-organizations) to represent you (or your business) in the Plugin Store; organizations also determine [how you get paid](#payouts).

In your Console organization, navigate to **Plugin Store** → **Plugins** → **Add a plugin**, then search for and select a repository. Some details will be pre-populated for you (based on information [provided in the root `composer.json` file](docs_5x__extend__plugin-guide.md#composerjson)), but you can make any desired changes to its description, screenshots, and other details, before submitting.

### [#](#choose-a-price)Choose a Price

If you wish to sell your plugin, choose a price point that makes sense. Here are some suggested price ranges to consider:

| Price Range | Example Use Cases |
| --- | --- |
| $10–$29 | Lightweight “plug and play” utilities and integrations |
| $49–$99 | Complex field types and integrations |
| $149–$249 | Plugins that add significant new system functionality |
| $499–$999 | Major or highly niche applications |

You will also be required to pick a **Renewal Price**, which is the annual fee the Plugin Store will charge customers who wish to continue installing new updates, after the first year. Pick a Renewal Price that is around 20–50% of the initial Price. For example, if you are charging $99 for your plugin, your Renewal Price should be between $19-$49.

Pixel & Tonic takes a 20% processing fee on all plugin sales; be sure and factor this into your plugin pricing.

If you initially submit your plugin as free, you will not be allowed to change it to commercial later. You can, however, give it a commercial [edition](docs_5x__extend__plugin-editions.md) that offers extended functionality, as long as you don’t remove crucial functionality from the free edition.

All plugins (and editions thereof) can be trialed in development and staging environments, prior to purchase.

### [#](#declare-craft-version-support)Declare Craft Version Support

Every plugin needs to explicitly require a minimum Craft CMS version in `composer.json`:

```
"require": {
  "craftcms/cms": "^5.0.0"
}
```

This version can change between releases. As long as you’ve tagged a release declaring major-version compatibility, we will display that on its individual listing, and include it in that version’s catalog for browsing and searching.

If your plugin is compatible with multiple major versions of Craft, we will honor version constraints that include the logical “or” operator (`||`), like `^4.8.1||^5.0.0`.

### [#](#submit-for-approval)Submit for Approval

When you’re ready to submit your plugin, click the “Submit for approval” button. Once your plugin is approved, it will become visible on [plugins.craftcms.com  (opens new window)](https://plugins.craftcms.com/).

You must [tag a release](#plugin-releases) before your plugin will appear in the Plugin Store within Craft’s [control panel](docs_5x__system__control-panel.md).

Consider registering your plugin on [Packagist  (opens new window)](https://packagist.org/) in addition to the Plugin Store, so that developers can install and update your plugin via Composer. Packagist is *not* a requirement for listing in the Plugin Store, but it makes discovery and automation easier for your customers!

### [#](#payouts)Payouts

Plugin authors in the United States, Europe, Australia, and New Zealand are eligible for automatic payouts via our payment processor, [Stripe  (opens new window)](https://stripe.com/). Vendors outside these markets are paid out via PayPal.

If neither option is viable for your business, please send us an email before publishing your plugin!

## [#](#plugin-releases)Plugin Releases

To release a new version of your plugin, first decide on the version number. The Plugin Store follows the same [Semantic Versioning  (opens new window)](https://semver.org/) conventions supported by Composer:

- Versions should have 3 or 4 segments (e.g. `1.2.3` or `1.2.3.4`).
- Prerelease versions should end with a release identifier (`-alpha.X`, `-beta.X`, or `-RCX`).

Once you’ve decided on a version, follow these steps:

1. If your plugin has a [changelog](docs_5x__extend__changelogs-and-updates.md), make sure the new version has a correctly-formatted heading, including the release date.

   ```
   ## 5.0.0 - 2018-03-31
   ```
2. If your plugin’s `composer.json` file includes a `version` property, make sure that it is set to the new version number.
3. Once everything is good to go and committed to Git, [create a tag  (opens new window)](https://git-scm.com/book/en/v2/Git-Basics-Tagging) named after the version number, optionally beginning with `v` (e.g. `v5.0.0` or `v5.0.0-beta.1`). Prefixing the tag name with `release-` is also allowed (e.g. `release-5.0.0` or `release-v5.0.0`).
4. Push your latest commits and your new version tag to GitHub. The Plugin Store will automatically be notified about the release, and will start recording it. Changes typically show up in the Plugin Store within a minute or two.

### [#](#automating-github-releases)Automating GitHub Releases

You can automate creating new [GitHub releases  (opens new window)](https://docs.github.com/en/repositories/releasing-projects-on-github/about-releases) for your plugin versions by giving your plugin a new GitHub action.

To do that, add a `.github/workflows/create-release.yml` file on the plugin repository’s **default branch**, with the following contents:

```
name: Create Release
run-name: Create release for ${{ github.event.client_payload.version }}

on:
  repository_dispatch:
    types:
      - craftcms/new-release

jobs:
  build:
    runs-on: ubuntu-latest
    permissions:
      contents: write
    steps:
      - uses: ncipollo/release-action@v1
        with:
          body: ${{ github.event.client_payload.notes }}
          makeLatest: ${{ github.event.client_payload.latest }}
          name: ${{ github.event.client_payload.version }}
          prerelease: ${{ github.event.client_payload.prerelease }}
          tag: ${{ github.event.client_payload.tag }}
```

That’s it! Going forward, whenever the Plugin Store is notified about new version tags, a new release will be created for the tag, with release notes extracted from `CHANGELOG.md`—provided it follows the [recommended format](docs_5x__extend__changelogs-and-updates.md).

## [#](#changing-the-github-repository-url)Changing the GitHub Repository URL

You can change your plugin’s GitHub repository URL at any time. After you’ve done so, you will need to contact [support@craftcms.com](mailto:support@craftcms.com) to notify Pixel & Tonic of the change, so we can update your plugin’s listing with the new URL. Until the listing has been updated, new release tags won’t be picked up automatically by the Plugin Store.

## [#](#changing-the-package-name)Changing the Package Name

If you need to change your plugin’s Composer package name (the `name` property in `composer.json`), follow these steps:

1. [Tag a new release](#plugin-releases) with the new package name, for *each* of the major Craft versions your plugin has ever been compatible with. For example, if your plugin is listed in the [Craft 4 Plugin Store  (opens new window)](https://plugins.craftcms.com/?craft4) and the [Craft 5 Plugin Store  (opens new window)](https://plugins.craftcms.com/?craft5), you will need to tag new Craft 4 and Craft 5 versions of your plugin with the updated package name.
2. [Submit  (opens new window)](https://packagist.org/packages/submit) your plugin as a **new** package on [Packagist  (opens new window)](https://packagist.org/).
3. If your plugin was already listed on Packagist with its old package name, mark the old package as abandoned, and list your new package name as the recommended replacement package.
4. Contact [support@craftcms.com](mailto:support@craftcms.com) to notify Pixel & Tonic of the change, so we can update your plugin’s listing with the new package name.

## [#](#transferring-ownership)Transferring Ownership

If you need to transfer ownership of your plugin to another developer, follow these steps:

1. Visit your plugin’s GitHub repository and click on its **Settings** tab.
2. Scroll down to the bottom and press the **Transfer** button within the **Danger Zone** section, and submit the transfer form.
3. The new developer will likely want to [change the package name](#changing-the-package-name) at this point. Once they’ve done so, remember to mark the old package name as abandoned.
4. Have the new developer contact [support@craftcms.com](mailto:support@craftcms.com) to notify Pixel & Tonic of the change, so we can transfer the plugin to their Craft Console account and update its repository URL and package name.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/plugin-store.md)
