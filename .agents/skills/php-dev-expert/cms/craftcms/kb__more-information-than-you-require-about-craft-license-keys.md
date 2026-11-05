# More Information than You Require About Craft License Keys | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/more-information-than-you-require-about-craft-license-keys

---

Search Knowledge Base

# More Information than You Require About Craft License Keys

Craft’s entire licensing system hinges on one file: **config/license.key**. Here’s everything you’ll ever need to know about them.

### Origins [#](#origins "Direct link to Origins")

A Craft install begins life without a license key. It is assigned one during its first request to the web service. That usually happens immediately after installation, when Craft first checks to see if any updates are available.

License keys are 250 randomly-generated characters. Craft saves its license key in `config/license.key`, and refers to that file each time it makes a request to the web service.

With the license key in place, Craft is now considered *licensed*, even though it’s still running Solo Edition. This brings us to…

### Craft Editions [#](#craft-editions "Direct link to Craft Editions")

Your Craft license doesn’t change when you upgrade to the Pro Edition. It just becomes associated with the new edition.

Wherever your license.key file goes, [your Craft edition will follow](kb__transferring-a-craft-license-to-a-new-domain.md). If you upgrade a Craft install on a development environment and want your staging and production environments to be upgraded, make sure they use the same license key.

### Domains [#](#domains "Direct link to Domains")

One Craft install can handle requests on multiple domains, with one caveat: you can only access the control panel on a single public domain (`*.example.com`). That’s because license verification happens in the control panel, and [licenses can only be tied to a single public domain at a time](https://craftcms.com/guides/how-craft-license-enforcement-works).

### Transferring a License [#](#transferring-a-license "Direct link to Transferring a License")

If you ever need to transfer a license to a new domain, [we’ve made it easy](kb__transferring-a-craft-license-to-a-new-domain.md). Anyone who has access to a license.key file has the power to mess with it, delete it, transfer it, or copy it to a new website.

If there is a dispute over which Craft install a license key should be assigned to, we expect our customers to work it out like adults. If that doesn’t work, please email us at [support@craftcms.com](mailto:support@craftcms.com).

### Gotchas [#](#gotchas "Direct link to Gotchas")

Watch out for these common gotchas:

- If you clone an existing Craft site as a starting point for a new one, **don’t clone your license.key file**. Let a new one be generated for the new site.
- Deleting the *contents* of the license.key file will not cause a new one to be generated for you. You must **delete the actual file**.
- Don’t give anyone access to the license.key file that you don’t trust or owe money to! Remember that anyone with access to the license key can easily transfer it to a new domain.

### Recovery [#](#recovery "Direct link to Recovery")

If you accidentally lost or overwrote a license.key file that was tied to a Pro Edition purchase or need help with any other license-related questions, email [support@craftcms.com](mailto:support@craftcms.com), and we’ll get you sorted.

Applies to
Craft CMS 4 and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
