# How to Access the Control Panel from an Alternate Domain | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/access-control-panel-from-alternate-domain

---

Search Knowledge Base

# How to Access the Control Panel from an Alternate Domain

If you’d like to access Craft’s control panel from an alternate domain or subdomain—meaning one that differs from the public site—you’ll need to configure your web server and tell Craft how to handle URLs.

In the example below, we’re pretending your-domain.com is the public-facing site, and cp-domain.com is used for accessing the control panel. (The configuration would be the same if you were using a *subdomain* as your alternate, like cp.your-domain.com.)

## 1. Configure the alternate domain on your server. [#](#1-configure-the-alternate-domain-on-your-server "Direct link to 1. Configure the alternate domain on your server.")

Have your server route requests for `cp-domain.com` to the same web root (e.g. your `web/` folder) as your main site.

Once that’s configured correctly, you should be able to access your control panel from `https://cp-domain.com/admin`. (If you’ve given your site a custom [CP trigger word](https://craftcms.com/docs/5.x/reference/config/general.html#cptrigger), replace `admin` with that.)

You may notice at this stage that your site’s front-end is *also* accessible at the control panel domain—we’ll fix that in [step 3](#step-3).

## 2. Tell Craft to use your alternate domain for control panel URLs. [#](#2-tell-craft-to-use-your-alternate-domain-for-control-panel-uRLs "Direct link to 2. Tell Craft to use your alternate domain for control panel URLs.")

Craft needs to know what control panel URLs should look like, so it can generate them accurately across control panel, site, and CLI contexts.

This is controlled by the [baseCpUrl](https://craftcms.com/docs/5.x/reference/config/general.html#basecpurl) config setting, which can be added to `config/general.php`…

```
return [
    'baseCpUrl' => 'https://cp-domain.com',
    // ...
];
```

…or as an [environment override](https://craftcms.com/docs/5.x/configure.html#environment-overrides):

```
CRAFT_BASE_CP_URL="https://cp-domain.com"
```

The base CP URL should **not** include the [CP trigger word](https://craftcms.com/docs/5.x/reference/config/general.html#cptrigger) (e.g. `/admin`).

## 3. Set or remove the `cpTrigger` [#](#3-set-or-remove-the-cpTrigger "Direct link to 3. Set or remove the cpTrigger")

If the alternate domain is used *exclusively* for the Craft control panel (and not a secondary site, as well), set `cpTrigger` to `null` to avoid displaying the site’s front end at your control panel domain:

```
return [
    'baseCpUrl' => 'https://cp-domain.com',
    'cpTrigger' => null,
    // ...
];
```

This can also be accomplished by setting the `CRAFT_CP_TRIGGER` environment override to an empty string.

![](https://craftcms.com/dist/images/icon-tip.svg)

You may also want to [customize response headers for live preview](kb__live-preview-alternate-control-panel-domain.md).

Applies to
Craft CMS 5, Craft CMS 4, and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
