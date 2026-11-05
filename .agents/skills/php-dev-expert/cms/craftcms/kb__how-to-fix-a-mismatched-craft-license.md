# How to fix a “mismatched” Craft license | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/how-to-fix-a-mismatched-craft-license

---

Search Knowledge Base

# How to fix a ​“mismatched” Craft license

If Craft is giving you an error about your Craft license belonging to a different domain, that means that according to our records, your license is already in use somewhere else.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft License Mismatch]()

To change which domain your license can be used on, log into your Craft Console account at [console.craftcms.com](https://console.craftcms.com), and navigate to your Craft license (**Licenses** → **Craft CMS**). From there you can see the domain name it’s currently tied to, along with other info about your license:

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console Licese Info]()

Press **Change Domain** to edit the domain name.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console Change Domain]()

Once you’ve updated it, clear your Craft data caches on the site you wish to start using the license on. Craft should then start recognizing that the license is being used on the correct domain.

Clear Craft data caches from the **Settings** page (Craft 2) or **Utilities** → **Clear Caches** (Craft 3, Craft 4).

## How to detach a plugin license from a CMS license [#](#how-to-detach-a-plugin-license-from-a-cms-license "Direct link to How to detach a plugin license from a CMS license")

Similar to how a Craft CMS license is linked to a domain name, Craft *plugin* licenses are linked to a Craft CMS license.

If you’re running into a license purchasing issue, like upgrading the plugin edition and having the wrong price appear in the cart, you may need to detach the existing plugin license from its related CMS license and re-link it to the intended CMS license instead.

To detach the plugin license from its related CMS license, log into your Craft Console account at [console.craftcms.com](https://console.craftcms.com), and navigate to your plugin licenses (**Licenses** → **Plugins**).

Find the relevant plugin in the list and choose the abbreviated license key link in its first column.

From that plugin license detail page, choose **Detach from this Craft license**.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft Console Plugin License]()

Applies to
Craft CMS 4 and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
