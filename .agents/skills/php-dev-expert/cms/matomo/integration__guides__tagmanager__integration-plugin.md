# Integration Plugin: Integrate - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/tagmanager/integration-plugin

---

#### [Integrate](integration__integration.md)

- [Introduction](integration__guides__integrate-introduction.md)
- [Tracking your application](integration__guides__tracking-introduction.md)
  - [Tracking API Clients](integration__guides__tracking-api-clients.md)
  - [JavaScript Tracking Client](integration__guides__tracking-javascript-guide.md)
  - [Single-Page Application/Progressive Web App Tracking](integration__guides__spa-tracking.md)
  - [Tracking & Cookie Consent](integration__guides__tracking-consent.md)
  - [Tracking Opt-out](integration__guides__tracking-optout.md)
  - [Content Tracking](integration__guides__content-tracking.md)
- [Accessing Matomo data](integration__guides__reporting-introduction.md)
  - [Tutorial: Get your top 10 popular pages](integration__guides__reporting-api-tutorial.md)
  - [Querying the Reporting API](integration__guides__querying-the-reporting-api.md)
  - [Reporting API Clients](integration__guides__reporting-api-clients.md)
- [Integrations](https://matomo.org/integrate/)
- [Tag Manager](integration__guides__tagmanager__introduction.md)
  - [Embedding](integration__guides__tagmanager__embedding.md)
  - [Data Layer](integration__guides__tagmanager__datalayer.md)
  - [Debugging](integration__guides__tagmanager__debugging.md)
  - [Integration Plugin](integration__guides__tagmanager__integration-plugin.md)
- [OAuth 2.0](integration__guides__oauth2.md)
  - [OAuth 2.0 Setup](integration__guides__oauth2__setup.md)
  - [OAuth 2.0 Authorization Code Flow](integration__guides__oauth2__authorization-code.md)
  - [OAuth 2.0 Client Credentials Flow](integration__guides__oauth2__client-credentials.md)
  - [OAuth 2.0 API Usage](integration__guides__oauth2__api-usage.md)
  - [OAuth 2.0 Developer FAQ](integration__guides__oauth2__faq.md)
- [A/B Testing - Experiments](integration__guides__ab-tests.md)
  - [Websites (JavaScript)](integration__guides__ab-tests__browser.md)
  - [Websites (Server-side)](integration__guides__ab-tests__server.md)
  - [Mobile & Desktop Apps](integration__guides__ab-tests__apps.md)
  - [Campaigns & Email Marketing](integration__guides__ab-tests__campaign.md)
- [Heatmap & Session Recording](integration__guides__heatmap-session-recording.md)
  - [Setting up](integration__guides__heatmap-session-recording__setup.md)
  - [Developer FAQ](integration__guides__heatmap-session-recording__faq.md)
  - [JavaScript Tracker API Reference](integration__guides__heatmap-session-recording__reference.md)
- [Crash Analytics](integration__guides__crash-analytics.md)
  - [Setting up](integration__guides__crash-analytics__setup.md)
  - [Enriching and Restricting](integration__guides__crash-analytics__options.md)
  - [Developer FAQ](integration__guides__crash-analytics__faq.md)
  - [JavaScript Tracker API Reference](integration__guides__crash-analytics__reference.md)
  - [Application tracking](integration__guides__crash-analytics__server.md)
- [Media Analytics](integration__guides__media-analytics.md)
  - [Setting up](integration__guides__media-analytics__setup.md)
  - [Enriching and Restricting](integration__guides__media-analytics__options.md)
  - [Custom media player](integration__guides__media-analytics__custom-player.md)
  - [Developer FAQ](integration__guides__media-analytics__faq.md)
  - [JavaScript Tracker API Reference](integration__guides__media-analytics__reference.md)
- [Form Analytics](integration__guides__form-analytics.md)
  - [Setting up](integration__guides__form-analytics__setup.md)
  - [Developer FAQ](integration__guides__form-analytics__faq.md)
  - [JavaScript Tracker API Reference](integration__guides__form-analytics__reference.md)

#### Integration Plugin

- [A simple way](#a-simple-way)
  - [Supporting environments](#supporting-environments "Supporting environments")
- [A more advanced way through the API](#a-more-advanced-way-through-the-api)
- [Supporting the Data Layer](#supporting-the-data-layer)
  - [Prefixing data layer variables](#prefixing-data-layer-variables "Prefixing data layer variables")
  - [Why supporting the data layer?](#why-supporting-the-data-layer "Why supporting the data layer?")
- [Embedding multiple containers](#embedding-multiple-containers)
- [Validating and completing inputs](#validating-and-completing-inputs)
- [Have you developed an integration?](#have-you-developed-an-integration)
- [Any questions?](#any-questions)

# How to develop a Matomo Tag Manager integration plugin for a CMS, ecommerce shop, forum, ...

This guide explains two ways to develop an integration for platforms and frameworks to embed Matomo Tag Manager containers easily into a website, or shop. The goal of such an integration is that users don't need coding skills to embed a container into their website but instead have an easy to use UI.

Ideally, an integration plugin offers both ways to give users choice on how to embed a container, but this is entirely optional.

## A simple way

The easiest way to embed a container without needing any authentication is to ask a user of the integration for their Matomo URL and a Container ID. Based on those two inputs you can generate the embed code which should look like this:

```
<!-- Matomo Tag Manager -->
<script>
  var _mtm = window._mtm = window._mtm || [];
  _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
  (function() {
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src='https://{$MATOMO_URL}/js/container_{$CONTAINER_ID}.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Tag Manager -->
```

Where you replace the `{$MATOMO_URL}` with the configured URL and `{$CONTAINER_ID}` with the configured Container ID.

Alternatively, you could also simply add this to the `<head>` (preferred) or `<body>` directly:

```
<script>
var _mtm = window._mtm = window._mtm || [];
_mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
</script>
<script src="{$MATOMO_URL}/js/container_{$CONTAINER_ID}.js" async="true" defer="true"></script>
```

If possible, we recommend offering this simple way as users won't need to configure an API token which increases the security. Also, it is an easy way for an integration developer to implement it.

### Supporting environments

However, this method will only work for the "live" environment since all other environments have a secret "token" included in the JavaScript file like this:

`/js/container_aaacont1_dev_898b2d94bd74e27ee3d2f672.js`

Where `dev` is the environment and the part next to it is a random generated key so it cannot be guessed by anyone. The random key is different for each container and for each environment. This key prevents for example leaking upcoming changes and announcements on a website. If needed, you could ask a user to instead enter the full path to the container file.

## A more advanced way through the API

Instead of a user having to configure the Container ID, you may want to instead ask for a Matomo API `token_auth`. Through the [HTTP API](integration__api-reference__reporting-api.md) you can then find out which Matomo sites the user has access to, which containers are configured within a site, and fetch the embed code for this container automatically.

The advantage is that if the embed code ever changes, you won't need to update the integration and you can offer the possibility to select an environment. The downside is, that a Matomo user needs to find and configure the `token_auth` in a third-party system which always poses some kind of risk (this token also gives access to all reports etc).

To fetch all available containers, follow this pseudo code. You can learn more about the [Matomo HTTP API here](integration__api-reference__reporting-api.md).

```
$matomoUrl = 'https://localhost/matomo'; // user entered this URL
$tokenAuth = '123456789012345678901234'; // user entered this token

$api = new MatomoApiClient($matomoUrl, $tokenAuth);

$environments = $api->fetch('TagManager.getAvailableEnvironments');
$sites = $api->fetch($apiMethod = 'SitesManager.getSitesWithAtLeastViewAccess');
$containersForSite = array();

foreach ($sites as $site) {
   $idSite = $site['idsite'];
   // each site may have multiple containers
   $containersForSite[$idSite] = $api->fetch('TagManager.getContainers', array('idSite' => $idSite));
}
```

Now you have a list of all Matomo sites the user has access to, and the containers within that site. You can now offer the possibility to select an environment, a site, and a container within that site.

Instead of directly fetching all containers for all sites, you could alternatively first ask the user to select a site, and once the user has selected a site, fetch all containers for that site.

When the user has select these three fields, you can now fetch the embed code for this combination like this:

```
$scriptEmbedTag = $api->fetch('TagManager.getContainerEmbedCode', array(
   'idSite' => $idSite,
   'idContainer' => $idContainer,
   'environment' => $environment
));
print $scriptEmbedTag; // be eg <script type="">...</script>
```

It is highly recommended to cache the response of the embed code for a couple of hours or a day for improved page load performance.

## Supporting the Data Layer

The [data layer](integration__guides__tagmanager__datalayer.md) part is optional. If you don't know what the data-layer is, [check out this guide](integration__guides__tagmanager__datalayer.md).

Simply said, the data layer feeds additional values into the container letting users reference these values in tags, triggers or variables.

For example if you are developing an integration for an ecommerce shop, you may want to push values like these to the data layer: username, items in the cart, number of items in the cart, currently viewed product name, currently viewed product price, etc:

```
// for example when viewing a product
window._mtm.push({'woocommerce.productName': 'My Product', 'woocommerce.productPrice': '55.45', 'woocommerce.productCurrency': 'EUR'});
```

You may also trigger events through the `event` attribute on certain actions such as when a user is ordering something, when a user adds to the cart, or when a user is viewing a product.

```
// for example when viewing a product as event
window._mtm.push({'event': 'myshop.productView', 'myshop.productName': 'My Product', 'myshop.productPrice': '55.45', 'myshop.productCurrency': 'EUR'});

// for example when user adds a product to the cart
window._mtm.push({'event': 'myshop.addToCart', 'myshop.productName': 'My Product', 'myshop.productPrice': '55.45', 'myshop.productCurrency': 'EUR'});

// for example when user purchased a product
window._mtm.push({'event': 'myshop.purchase', 'myshop.cartTotal': '55.45', 'myshop.cartCurrency': 'EUR'});
```

A forum may add values like the currently viewed forum category, the username, etc.

```
// for example when viewing a product
window._mtm.push({'myforum.username': 'Myusername', 'myforum.forumCategory': 'Developers'});
```

### Prefixing data layer variables

We recommend prefixing data layer variable names with the name of your integration so it does not cause any trouble with any other integrations.

### Why supporting the data layer?

The data layer allows users to access these values in an easy way within the Tag Manager and react to events that you trigger. The possibilities are endless!

For example, if you push a `myintegration.username:"username"`, users could read this value as part of the container and track the username as a [custom dimension](https://matomo.org/docs/custom-dimensions/) or [`userId`](https://matomo.org/docs/user-id/). The events you push allow users to react to it through a trigger. For example, users may want to track an event whenever a product is being viewed (the event containing the product name, price and the currency). Or they could show a popover offering a discount whenever a certain product is being added to the cart.

If you support the data layer, we highly recommend that you document all available events and variables so users can access these values and listen to these events.

## Embedding multiple containers

It is possible for a user to embed multiple containers into one page. However, this is rather advanced and not as common. You may or may not offer the possibility to configure multiple containers.

When embedding multiple containers into one website, you simply print the embed code for a container one after another.

## Validating and completing inputs

In case you want to validate, filter, or complete any user input, here are a few tips:

- **Container ID**: Such an ID is currently 8 characters long consisting of alpha numerical characters (`[a-zA-Z0-9]{8}`). The length is not expected to change but it may happen. So you may want to allow 8 to 10 characters.
- **Token Auth**: The token is currently a MD5 hash consisting of 32 characters `[a-f0-9]{32}`. This will not change as part of Matomo 3 but may change in the future.
- **Matomo URL**: The Matomo URL is a regular HTTP or HTTPS URL.

## Have you developed an integration?

Please [let us know](https://matomo.org/contact) and we list your integration on our [Matomo integration page](https://matomo.org/integrate/).

## Any questions?

Please [get in touch with us](https://matomo.org/contact) if you have any questions. We are happy to help you develop an integration for Matomo Tag Manager.
