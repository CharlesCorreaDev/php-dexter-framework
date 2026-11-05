# Embedding: Integrate - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/tagmanager/embedding

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

#### Embedding

- [Finding the embed code](#finding-the-embed-code)
- [Multiple containers](#multiple-containers)
- [Using the same container on multiple websites](#using-the-same-container-on-multiple-websites)
- [Loading a container from your website](#loading-a-container-from-your-website)
- [Accessing the Matomo Tag Manager directly](#accessing-the-matomo-tag-manager-directly)
- [Fix \_mtm.push causing browser to freeze in some cases for AngularJS](#fix-_mtmpush-causing-browser-to-freeze-in-some-cases-for-angularjs)

# Embedding

This guide will explain how you can embed the JavaScript Tag Manager into your website.

## Finding the embed code

To find the code to embed your container into your website, please log in to your Matomo and click on "Tag Manager".
Now you will see a list of containers for the current selected site. Now you have two options:

- Select "Manage Containers" and click on the "Install Code" icon on the very right next to a container.
- Select a container and click on "Install code".

Further options are:

- You can find the code by going to "Administration => Tracking Code". However, you will only see the JavaScript code for environments that have currently a published version. If you just created a container, and have not published (deployed) any version to an environment, you won't find the install code there.
- You can retrieve this code snippet via the [Matomo HTTP API](integration__api-reference__reporting-api.md#TagManager) by calling the method `TagManager.getContainerEmbedCode($idSite, $idContainer, $environment)`.

The code looks as follows:

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

In your code, `{$MATOMO_URL}` will be replaced by your Matomo URL, and `{$CONTAINER_ID}` by a combination of containerId and possibly other factors.

We recommend embedding this HTML block as early as possible within the `<head>` element of your website.

## Multiple containers

Matomo Tag Manager lets you embed multiple containers at once. This may be useful when for example different people manage different containers and you need to embed all of them. For example, one team manages all ad related containers, and another team manages all other tags.

To use both tags, simply copy both embed codes inside your website, ideally one directly followed by the other.

## Using the same container on multiple websites

Matomo Tag Managers supports using the same container in multiple websites. The container will still be stored under one website in the Tag Manager interface. To use the same container on multiple websites, simply embed the code inside your websites.

## Loading a container from your website

When a user is visiting your website, the container will be loaded through your Matomo URL. Sometimes, a Matomo URL may be blocked for example by privacy or ad blockers causing the container to not load. If you want to reduce the likelihood of this, you may want to download the JavaScript file and upload it onto the server of your website. The disadvantage is, that the debug/preview feature won't work out of the box and you always need to update the JavaScript file whenever you publish a new version to an environment.

To download the JavaScript of a container, simply open the URL in `g.src='https://{$MATOMO_URL}/js/{$CONTAINER_ID}.js'` and save the file by clicking on "File => Save As" in your browser.

## Accessing the Matomo Tag Manager directly

A container is usually loaded asynchronously. This means you won't know at which point the tag manager has been initialized. If you want to perform a certain action, as soon as the tag manager JavaScript file has been initialized, simply define the global function `window.matomoTagManagerAsyncInit`. This method will be executed as soon as the global [window.MatomoTagManager](integration__api-reference__tagmanager__javascript-api-reference.md) object is available but before any container has been set up.

```
window.matomoTagManagerAsyncInit = function (MatomoTagManager) {
    MatomoTagManager.THROW_ERRORS = false;

}
```

## Fix `_mtm.push` causing browser to freeze in some cases for AngularJS

It has been observed that using \_mtm.push with AngularJS can cause the browser to freeze in some cases. To address this issue, the code snippet below can be used:

```
this.zone.runOutsideAngular(e => _mtm.push(t))
```
