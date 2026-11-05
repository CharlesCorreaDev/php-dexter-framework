# Finding your Craft License Keys | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/finding-your-craft-license-keys

---

Search Knowledge Base

# Finding your Craft License Keys

This article covers ways of locating a license key in your project, and how to ensure a key is attached to the right Craft Console account, for future reference.

## Key Lifecycle [#](#key-lifecycle "Direct link to Key Lifecycle")

Craft generates a license key for every installation. During a project, you may end up with unique keys on each developer’s machine, or in each environment. This isn’t a problem from a *technical* perspective, but can result in some confusion when it comes time to launch!

We recommend purchasing licenses from the control panel of your site, as soon as it goes live. Whatever key is present in that environment will be bound to the live domain and associated with the [Craft Console account or organization](kb__craft-console-organizations.md) used at checkout.

At that point, you may distribute the authoritative license key to your other machines and environments—but this is not required for Craft to function.

## Project Directory [#](#project-directory "Direct link to Project Directory")

Most projects’ keys live in `config/license.key`. If you *don’t* find a key there, or if the one that *is* there appears to be causing [mismatch issues](kb__how-to-fix-a-mismatched-craft-license.md), you may need to do some more searching:

- The location Craft looks for a key file may be customized with the `CRAFT_LICENSE_KEY_PATH` constant or environment variable;
- The key can be set directly, via a `CRAFT_LICENSE_KEY` constant or environment variable;

Both of these values can be defined in your “bootstrap” script(s), a `.env` file, or with tools provided by the hosting platform.

`license.key` can be committed to version control, but should be [claimed](kb__releasing-and-claiming-licenses.md) before pushing it to a public repository!

![](https://craftcms.com/dist/images/icon-warning.svg)

Don’t use the same `license.key` file in multiple projects. This against our terms, and often results in confusing messages for control panel users.

## Craft Console [#](#craft-console "Direct link to Craft Console")

[Organizations](kb__craft-console-organizations.md) have greatly improved the process of managing license keys. Whenever possible, we recommend keeping licenses in an organization so that they can be shared with other members of your team, and with outside collaborators.

Licenses are found in personal accounts and organizations under the **Licenses** heading in the sidebar:

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console License List]()

Craft licenses and Plugin licenses are managed in separate screens.

Console identifies license keys by their first 10 characters. You can copy or download the complete key from its individual management screen.

Don’t see your license? It may belong to another organization or personal account. Check your records for other Craft Console accounts, and reach out to team members and service providers who had a hand in your site’s build.

If you need to transfer the license to a new account, see our article on [Claiming and Releasing Licenses](kb__releasing-and-claiming-licenses.md).

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
