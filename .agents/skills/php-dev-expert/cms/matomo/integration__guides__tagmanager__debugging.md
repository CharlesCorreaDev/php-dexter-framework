# Debugging: Integrate - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/tagmanager/debugging

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

#### Debugging

- [Activating the debug mode](#activating-the-debug-mode)
- [Sharing a preview / debug mode](#sharing-a-preview-debug-mode)
- [Ignoring a preview / debug mode](#ignoring-a-preview-debug-mode)
- [Developer console log messages](#developer-console-log-messages)
  - [Debugging multiple containers at once](#debugging-multiple-containers-at-once "Debugging multiple containers at once")

# Debugging

As part of configuring your container or writing a custom tag, trigger, or variable, you may want to preview or debug your container to see if everything is working as expected.

The debug mode lets you see for example which triggers and tags have been fired, the value of each variable when an event is triggered, the content of the data layer, and more.

## Activating the debug mode

To activate this mode, simply follow these steps:

- Open the container in Matomo's Tag Manager and click on "Preview / Debug" in the top toolbar.
- Enter the URL or domain you want to start debugging(Applicable only for Matomo version >= 4.6).
- The debug toolbar will appear at the bottom of the website.

If the toolbar does not appear, you might have to clear your browser cache either in the developer console, or by using one of these shortcuts (please check the shortcut for your operating system and browser combination):

- Mac: `⌘ + shift + r`
- Windows / Linux: `shift + f5` or `ctrl + shift + r`

## Sharing a preview / debug mode

The debug toolbar only appears by default for the person that enabled the debug / preview mode in the Tag Manager (a cookie is set when you enable the debug mode). If you want to share this mode with someone else, please ask that person to append the URL parameter `?mtmPreviewMode=$containerId` (or `&mtmPreviewMode=$containerId`) to activate the toolbar. You need to replace `$containerId` with the actual ID of the container, the correct value for the URL parameter will be shown to you within the Tag Manager UI. This URL parameter may also helpful you in case the toolbar doesn't appear.

## Ignoring a preview / debug mode

When you activate the preview mode, a cookie will be set in your browser that activates this mode for all environments. However, you may not want to preview or debug all environments, or you simply want to load the container without the preview mode for a quick test. Instead of having to deactivate and activate this mode through the Matomo UI you can simply append a URL parameter `?mtmPreviewMode=0` or `&mtmPreviewMode=0`;

## Developer console log messages

You may also enable debug messages without enabling the debug mode on the container by calling the following JavaScript code:

```
window._mtm = window._mtm || [];
window._mtm.push(['enableDebugMode']);
```

This will log various debug messages to the developer console and is targeted to developers only. It is recommended calling this code as early as possible.

### Debugging multiple containers at once

If you share a debug mode and want to debug multiple containers at once, make sure to enable the preview mode for all containers that you want to debug like this:

```
?mtmPreviewMode=6OMh6taM&mtmPreviewMode=lJZXWNmI
```
