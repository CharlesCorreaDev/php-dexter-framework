# How Craft Licenses and Renewals Work | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/how-craft-licenses-and-renewals-work

---

Search Knowledge Base

# How Craft Licenses and Renewals Work

Paid Craft licenses are [perpetual](#perpetual-licenses) and include one year of [license updates](#license-updats) and *developer support*.
You can pay for an additional year of updates and support at any time.

![](https://craftcms.com/dist/images/icon-tip.svg)

All [Craft Cloud](https://craftcms.com/cloud) plans include a licese for the corresponding Craft version.
You are only responsible for licensing commercial plugins.

## The Craft License [#](#the-craft-license "Direct link to The Craft License")

Craft CMS 3.0+ and Craft Commerce 2.0+ use the [Craft License](https://craftcms.com/license).
It’s as close to free open source as we can make it without going out of business.

## Editions [#](#editions "Direct link to Editions")

Every new project is [automatically issued](kb__how-craft-license-enforcement-works.md) a Solo edition *license key*, even though we don’t expect payment.
This gives us a way to group plugin licenses and track changes, over time.

When you upgrade your free Craft CMS Solo edition license to a *Team* or *Pro* edition license, all we’re doing is recording the change on the existing license key.
In this model, you’re not buying a software key for a specific version, proactively—instead, you select the desired commercial edition, [trial it](kb__how-to-trial-craft-cms-and-plugin-editions.md), and pay when the terms require it (usually when it’s first used on a [public domain](kb__how-craft-license-enforcement-works.md#public-domains)).

When you pay for a commercial Craft or plugin edition, legally speaking, you own a perpetual license to use that edition at the installed version.

## Perpetual Licenses [#](#perpetual-licenses "Direct link to Perpetual Licenses")

Once you purchase the license, you are entitled to use the licensed version indefinitely, without paying any additional license fees.
If you purchase Craft CMS Pro 5.9.15, you can use Craft CMS Pro 5.9.15 and all its features forever at no additional cost.

## License Updates [#](#license-updates "Direct link to License Updates")

Within a license updates window (one year from the original purchase, or during any period you’ve [renewed](#renewal-fees)), updating Craft to a new version also amends your license so you can continue running that new version, perpetually.

![](https://craftcms.com/dist/images/icon-tip.svg)

You must actually perform and deploy updates on an installation within its license’s update eligibility window to license that new version.

We do not automatically amend your license based on release dates—for example, if you were eligible for license updates through March 2026, but didn’t update to Craft [5.9.0](https://github.com/craftcms/cms/releases/tag/5.9.0) (released 27 January, 2026) within that timeframe, your license will remain on whatever the last-installed version was.

### Renewal Fees [#](#renewal-fees "Direct link to Renewal Fees")

Renewal fees are typically 20% of the original license fee, but may vary between Craft CMS, first-party plugins, and third-party plugins.
For example, the base cost of a Craft Pro license is $399, and a one-year renewal is $99.

### No Penalties [#](#no-penalties "Direct link to No Penalties")

Don’t need the updates? Don’t need [Developer Support](https://craftcms.com/support)? No problem.

You are never charged for gaps in renewals.
Whenever you extend license updates and developer support (whether it’s exactly one year from the initial purchase, 18 months later, or three years down the line), you only pay for the *next* year of updates and support.

However, we (and plugin developers) reserve the right to update renewal fees.

![](https://craftcms.com/dist/images/icon-tip.svg)

Licenses with **automatic renewal** enabled trigger a reminder email 30 days ahead of the renewal date.
Our system records what the renewal price is at the time of a reminder and honors it when the renewal order is actually processed, so there are never surprise price-hikes; what you see in a reminder email is what you will pay.

![](https://craftcms.com/dist/images/icon-loading.png)

![Console — Plugin license auto renew]()

To enable auto-renew, visit the *Licenses* screen in [Craft Console](kb__what-is-craft-console.md#license-management) and find your CMS or Plugin license.

You may also pre-pay for up to five years of updates and support when you first buy a license, or during any manual renewal.

## Running Updates [#](#running-updates "Direct link to Running Updates")

The best way to take advantage of automatic license updates is via the built-in control panel or CLI [updater](https://craftcms.com/docs/5.x/update.html).

```
php craft update all
```

Craft will only update itself (or plugin packages) that are eligible for license updates; packages that are *not* eligible for updates will be listed as `EXPIRED` and remain at their current version.

You may instead update *everything* by directly using Composer:

```
php composer update
```

![](https://craftcms.com/dist/images/icon-warning.svg)

Keep in mind that Composer is not aware of your license statuses, and may update a package beyond what is allowed by an expired license.
This can result in [notices](kb__how-craft-license-enforcement-works.md#notices) after deploying!

## Legacy Licenses [#](#legacy-licenses "Direct link to Legacy Licenses")

The License Renewal Policy only applies to Craft CMS and Craft Commerce licenses purchased on or after **April 4th, 2018**.

All licenses purchased *prior* are not subject to the License Renewal Policy, and entitle the site/owner to upgrades, *forever*.
This is a distinct behavior from

Please note that this *does not* apply transitively to other plugin licenses attached to a Legacy CMS license after the cutoff date.
For example, if a project using a Legacy license is updated to Craft 5.x and the developer adds Commerce 5.x, the Commerce license *will not* be grandfathered in (nor will any other plugins installed in the same way).

*Legacy licenses do **not** include lifetime [Developer Support](kb__developer-support.md).*

Applies to
Craft CMS 5, Craft CMS 4, Craft CMS 3, Craft CMS 2, Craft Commerce 5, Craft Commerce 4, Craft Commerce 3, and Craft Commerce 2.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
