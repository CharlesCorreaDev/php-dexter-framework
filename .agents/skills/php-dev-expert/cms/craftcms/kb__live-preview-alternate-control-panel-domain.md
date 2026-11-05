# Using Live Preview with an Alternate Control Panel Domain | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/live-preview-alternate-control-panel-domain

---

Search Knowledge Base

# Using Live Preview with an Alternate Control Panel Domain

Craft automatically sets `Content-Security-Policy` and `X-Frame-Options` headers for *control panel* requests, but doesn’t for front-end requests—including live preview.

If you [access the Craft CMS control panel from its own separate domain or subdomain](kb__access-control-panel-from-alternate-domain.md), you may need to send special response headers from your front-end to avoid “Refused to display” errors in your browser.

## Recommended Headers [#](#recommended-headers "Direct link to Recommended Headers")

Our [Securing Craft](kb__securing-craft.md#set-security-headers-for-the-front-end-site) article includes some recommendations for headers that harden sites accessed and managed from a *single* domain. In these cases, live preview will work exactly as expected, but can benefit from restricting the `frame-ancestors` directive:

```
Content-Security-Policy: frame-ancestors 'self'
```

When your control panel is accessed from a *different* domain, it will need to be explicitly allowed, as `self` would be too restrictive:

```
Content-Security-Policy: frame-ancestors 'self' https://control-panel.domain
```

## Configuration Options [#](#configuration-options "Direct link to Configuration Options")

You can send these `Content-Security-Policy` headers directly from your HTTP server, or (as of Craft 5.3) via [application configuration](https://craftcms.com/docs/5.x/reference/config/app.html#requests-responses):

```
use craft\filters\Headers;
use craft\helpers\App;

return [
    // Attach the headers filter to the application:
    'as headersFilter' => [
        'class' => Headers::class,
        'headers' => [
            'Content-Security-Policy' => join(' ', [
              'frame-ancestors',
              "'self'",
              App::env('CRAFT_BASE_CP_URL'),
            ]),
        ],
    ],
];
```

![](https://craftcms.com/dist/images/icon-warning.svg)

Your control panel URL must come from an environment variable, as application configuration is evaluated prior to [general config](https://craftcms.com/docs/5.x/reference/config/general.html) being populated.

Presuming you have [configured a `baseCpUrl`](https://craftcms.com/docs/5.x/reference/config/general.html#basecpurl), the equivalent HTTP header can be sent from any Twig context with the `{% header %}` tag:

```
{# _layout.twig #}
{% header "Content-Security-Policy: frame-ancestors 'self' #{craft.app.config.general.baseCpUrl}" %}
```

Note that in both contexts, the single-quotes around `self` are required!

## Further Reading [#](#further-reading "Direct link to Further Reading")

- [How to Access the Control Panel from a Subdomain](kb__access-control-panel-from-alternate-domain.md)
- [Stack Exchange: Refused to display/connect when previewing entry on multi-site setup](https://craftcms.stackexchange.com/questions/31211/refused-to-display-connect-when-previewing-entry-on-multi-site-setup/31212#31212)
- [Using Live Preview Across Multiple Subdomains](kb__using-live-preview-across-multiple-subdomains.md) (Legacy information for prior versions of the live preview system)

Applies to
Craft CMS 5, Craft CMS 4, and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
