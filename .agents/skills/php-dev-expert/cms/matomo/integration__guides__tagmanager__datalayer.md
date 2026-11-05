# Data Layer: Integrate - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/tagmanager/datalayer

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

#### Data Layer

- [Setting a variable](#setting-a-variable)
  - [Configuration in Matomo Tag Manager](#configuration-in-matomo-tag-manager "Configuration in Matomo Tag Manager")
- [Triggering an event](#triggering-an-event)
  - [Configuration in Matomo Tag Manager](#triggering-an-event-configuration-in-matomo-tag-manager "Configuration in Matomo Tag Manager")
- [Best practices](#best-practices)
- [Migration from Google Tag Manager](#migration-from-google-tag-manager)

# Data Layer

The Data Layer is a central piece within Matomo's Tag Manager as it ensures maximum flexibility.

For example, you may wish to push a value from an ecommerce order into the data layer, allowing someone who configures a container to access this value as part of a tag or trigger configuration. It also allows you to trigger an event which in turn can fire a certain tag.

This way you can integrate for example any ecommerce, CRM, marketing suite, and more into the tag manager.

## Setting a variable

You can push one or multiple values at once to the data layer by calling the `window._mtm.push` method:

```
window._mtm = window._mtm || [];
window._mtm.push({'orderTotal': 4545.45, 'orderCurrency': 'EUR'});
```

As the container will be loaded asynchronously and the variable `_mtm` may not be defined from the beginning, you may have to add a `window._mtm = window._mtm || [];`.

### Configuration in Matomo Tag Manager

To access this value as a variable in Matomo Tag Manager, create a new variable of type `Data Layer` and configure as `Data Layer Variable Name` for example `orderTotal`. You can now assign this variable to any trigger or tag.

## Triggering an event

Triggering an event within the container works similar as setting a variable. Simply specify a property named `event` as part of the parameters:

```
window._mtm = window._mtm || [];
window._mtm.push({'event': 'purchase', 'orderTotal': 4545.45});
```

Keep in mind that this does not send an event to Matomo, but allows you to create a tag in Matomo Tag Manager that reacts based on this event.

### Configuration in Matomo Tag Manager

To create a trigger that is listening to this event in Matomo Tag Manager, create a new trigger of type `Custom Event` and configure as `Event Name` the value `purchase`. You can now assign this trigger to a tag to ensure a tag will be fired or blocked whenever this event is being triggered from your website or app.

Assuming you created a variable "Order Total" for the `orderTotal` data layer variable, you could even configure a condition along the trigger to for example only trigger when `Order Total is greater than 100`.

## Best practices

- Prefix your variable names with your company or application name. For example `woocommerce.orderTotal` to avoid any potential collision with other systems. If you want to use the same container logic for example for different ecommerce systems, you may want to go for a more general prefix like `ecommerce.orderTotal`.
- Ensure the casing for the variable is correct as the data layer is case-sensitive.
- When you define a variable, you should always enclose it in quotes as otherwise JavaScript errors may occur. Instead of `window._mtm.push({order-total: 100});` use `window._mtm.push({'order-total': 100});`

## Migration from Google Tag Manager

If you have used Google's Tag Manager in the past and have specified a data layer on page load for example like this: `dataLayer = {'orderTotal': 100}` you will be happy to hear that we are supporting this as long as you have configured the data layer variable as early as possible within your website. The variable needs to be defined before the container is loaded. Please note we do not support any renamed data layer variable. The Matomo data layer will also not be updated when you push changes to the GTM data layer afterwards. It is only able to pick up the initial data layer content.
