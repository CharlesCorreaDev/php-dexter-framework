# How Craft License Enforcement Works | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/how-craft-license-enforcement-works

---

Search Knowledge Base

# How Craft License Enforcement Works

![](https://craftcms.com/dist/images/icon-tip.svg)

This article does not cover the legal substance of Craft’s [license](https://craftcms.com/license); only the technical features we’ve put in place to go along with it.

## License Key Creation [#](#license-key-creation "Direct link to License Key Creation")

The act of downloading Craft binds you to Craft’s License Agreement, but a license *key* is not assigned to your installation until Craft and it has made its first call to our web services to check for updates. When we see a request without a license key, one is created and sent with the response. Craft saves this new key to `config/license.key`.

## Single Website Enforcement [#](#single-website-enforcement "Direct link to Single Website Enforcement")

You’re allowed to run a single Craft license on multiple domains (e.g., example.com and example.fr), so long as they’re all a part of the same installation. To enforce this, Craft does have one technical limitation: you may only access Craft’s control panel from a single [public domain](#public-domains) per Craft license.

Each time Craft’s control panel sends a request to our web services, it reports the domain it is being accessed from. The first time a key is used on a [public domain](#public-domains), we tie it to that domain. This can happen as early as the same request where the license key gets created, if you’re installing Craft on a public server with the [web GUI](kb__first-time-setup.md#gui). On subsequent requests, we compare the reported domain with the domain on record.

If a Craft license is used on a public domain *other than it was last associated with*, our web service reports that there is a mismatch in its response, which Craft surfaces in the control panel.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft license mismatch]()

Licenses can be [associated with a new domain](kb__transferring-a-craft-license-to-a-new-domain.md) via [Craft Console](https://console.craftcms.com/).

## Edition Enforcement [#](#edition-enforcement "Direct link to Edition Enforcement")

Each time Craft [phones home](#phoning-home), we reconcile the [information it sends](#information-sent-to-us) with our records. The response includes:

- Licensed Craft and plugin editions;
- Whether [trials](kb__how-to-trial-craft-cms-and-plugin-editions.md) are allowed;
- The domain currently attached to the license;

Craft caches this info, and—if it detects a discrepancy—[displays a modal window](#notices) to administrators with options for correcting the situation. In broad terms, a “discrepancy” is reported when we determine that trials are *not* allowed in a given environment *and* there is a mismatch between the licensed and installed editions of Craft or plugins, or when those liceses are already tied to a different domain. Common examples of underlying licensing issues are:

- Not having purchased one or more licenses for a project that just went live;
- An invalid license key (either malformed, or not known to our services) being deployed with a project;
- A site being [moved to a new domain](kb__transferring-a-craft-license-to-a-new-domain.md);
- Accessing the control panel from multiple domains;
- Upgrading Craft or a plugin to a new (unlicensed) edition in a development environment, then deploying;
- Updating Craft or a plugin to [a later version than is allowed](kb__how-craft-licenses-and-renewals-work.md#one-year-of-license-updates-are-included-with-purchase) by its license;

## Notices [#](#notices "Direct link to Notices")

Craft handles licensing issues in a few different ways, depending on the environment.

![](https://craftcms.com/dist/images/icon-tip.svg)

License issues will only be displayed in the control panel. Craft will *never* automatically adjust its edition in the event of a discrepancy, and the front-end of your website will *never* be affected. Depending on the features you use, manually changing the installed edition of Craft (or a plugin) to align with a license *may* require updates to your site’s code.

Any time there is a discrepancy between installed and licensed editions of Craft or a plugin, the control panel will display a summary at the bottom of every screen, and provide a link that populates a cart on [Craft Console](kb__what-is-craft-console.md) with the relevant licenses.

This is the only way license issues are communicated in environments that allow [trials](kb__how-to-trial-craft-cms-and-plugin-editions.md).

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft licensing nudge]()

A project that displays this notice in a development environment is likely to trigger more conspicuous notices when deployed to a public domain.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft license required]()

When an admin logs in to the control panel, they will see an interstitial screen explaining any outstanding license issues. The **Resolve Now** link behaves identically to the **Buy now** link available in the footer.

The reminder can be dismissed for 24 hours, but the wait time will increase gradually as it is shunned. When dismissed, Craft continues to display an alert at the top of all control panel screens:

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft license reminder]()

After purchasing the required licenses, return to the control panel and click **Refresh** on this banner (or the modal).

## FAQ [#](#faq "Direct link to FAQ")

### When does Craft phone home? [#](#when-does-craft-phone-home "Direct link to When does Craft phone home?")

Craft communicates with our web services under a well-defined set of circumstances:

- Whenever it checks for updates (via the CP or CLI, using `php craft update`);
- Whenever someone visits the **Settings** → **Plugins** screen [with `devMode` on](kb__what-dev-mode-does.md);
- Whenever someone visits the in-app **Plugin Store**;
- Whenever someone explicitly presses the **Refresh** button on a *Licensing Issues* screen;

Users accessing your site’s front-end will never result in communication with our web services.

### What information does Craft send to our web services? [#](#what-information-does-craft-send-to-our-web-services "Direct link to What information does Craft send to our web services?")

Under the above circumstances, Craft will send these pieces of information:

- The current environment (determined by `Craft::$app->env`, which typically comes from a [`CRAFT_ENVIRONMENT` variable](https://craftcms.com/docs/5.x/reference/config/bootstrap.php#craft-environment));
- Craft’s installed version and edition;
- PHP’s version, as well as the installed extensions;
- Database driver and version;
- Hostname the site was accessed from, and the requester’s IP (omitted when using the CLI, or if the IP appears to be [private](https://en.wikipedia.org/wiki/Private_network) or [reserved](https://en.wikipedia.org/wiki/Reserved_IP_addresses));
- The current user’s email address (except for console requests);
- Craft’s license key (either the contents of `config/license.key`, or the `CRAFT_LICENSE_KEY` constant);
- Plugin license keys;
- The [Craft Cloud](https://craftcms.com/cloud) project ID (if running on our infrastructure);

### How do we determine Craft is running on a “public domain?” [#](#how-do-we-determine-craft-is-running-on-a-public-domain "Direct link to How do we determine Craft is running on a “public domain?”")

Craft includes the hostname the control panel is being accessed from, when querying our web services. If *none* of the following criteria are met, we consider the domain to be *public*:

1. Does it consist of a single segment (i.e: `localhost`)?
2. Is it an IP address?
3. Does it include a port number, and is it something other than the normal HTTP ports (`80` or `443`)?
4. Does it have a dev-sounding subdomain?  
   Exhaustively: `acc`, `acceptance`, `ci`, `craftdemo`, `dev`, `integration`, `loc`, `local`, `preprod`, `preview`, `qa`, `sandbox`, `sit`, `stag`, `stage`, `staging`, `stg`, `systest`, `test`, `testing`, and `uat`.
5. Does it have a [non-standard TLD](https://en.wikipedia.org/wiki/List_of_Internet_top-level_domains)?
6. Is it on our list of known development domains? (i.e: `ddev.site`, `gitpod.io`, `herokuapp.com`, `ngrok.io`, etc.)

The distinction between public and private domains primarily determines which environments [trials](kb__how-to-trial-craft-cms-and-plugin-editions.md) are allowed in—or more concretely, which environments are not impacted by mismatches in installed and licensed versions.

![](https://craftcms.com/dist/images/icon-tip.svg)

Do you operate a platform or agency that provides private preview domains? [Let us know](https://craftcms.com/contact)—we add exemptions on a case-by-case basis.

Applies to
Craft CMS 5, Craft CMS 4, Craft CMS 3, Craft Commerce 4, and Craft Commerce 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
