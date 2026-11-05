# Single-Page Application/Progressive Web App Tracking: Integrate - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/spa-tracking

---

#### [Integrate](api__integration.md)

- [Introduction](api__guides__integrate-introduction.md)
- [Tracking your application](api__guides__tracking-introduction.md)
  - [Tracking API Clients](api__guides__tracking-api-clients.md)
  - [JavaScript Tracking Client](api__guides__tracking-javascript-guide.md)
  - [Single-Page Application/Progressive Web App Tracking](api__guides__spa-tracking.md)
  - [Tracking & Cookie Consent](api__guides__tracking-consent.md)
  - [Tracking Opt-out](api__guides__tracking-optout.md)
  - [Content Tracking](api__guides__content-tracking.md)
- [Accessing Matomo data](api__guides__reporting-introduction.md)
  - [Tutorial: Get your top 10 popular pages](api__guides__reporting-api-tutorial.md)
  - [Querying the Reporting API](api__guides__querying-the-reporting-api.md)
  - [Reporting API Clients](api__guides__reporting-api-clients.md)
- [Integrations](https://matomo.org/integrate/)
- [Tag Manager](api__guides__tagmanager__introduction.md)
  - [Embedding](api__guides__tagmanager__embedding.md)
  - [Data Layer](api__guides__tagmanager__datalayer.md)
  - [Debugging](api__guides__tagmanager__debugging.md)
  - [Integration Plugin](api__guides__tagmanager__integration-plugin.md)
- [OAuth 2.0](api__guides__oauth2.md)
  - [OAuth 2.0 Setup](api__guides__oauth2__setup.md)
  - [OAuth 2.0 Authorization Code Flow](api__guides__oauth2__authorization-code.md)
  - [OAuth 2.0 Client Credentials Flow](api__guides__oauth2__client-credentials.md)
  - [OAuth 2.0 API Usage](api__guides__oauth2__api-usage.md)
  - [OAuth 2.0 Developer FAQ](api__guides__oauth2__faq.md)
- [A/B Testing - Experiments](api__guides__ab-tests.md)
  - [Websites (JavaScript)](api__guides__ab-tests__browser.md)
  - [Websites (Server-side)](api__guides__ab-tests__server.md)
  - [Mobile & Desktop Apps](api__guides__ab-tests__apps.md)
  - [Campaigns & Email Marketing](api__guides__ab-tests__campaign.md)
- [Heatmap & Session Recording](api__guides__heatmap-session-recording.md)
  - [Setting up](api__guides__heatmap-session-recording__setup.md)
  - [Developer FAQ](api__guides__heatmap-session-recording__faq.md)
  - [JavaScript Tracker API Reference](api__guides__heatmap-session-recording__reference.md)
- [Crash Analytics](api__guides__crash-analytics.md)
  - [Setting up](api__guides__crash-analytics__setup.md)
  - [Enriching and Restricting](api__guides__crash-analytics__options.md)
  - [Developer FAQ](api__guides__crash-analytics__faq.md)
  - [JavaScript Tracker API Reference](api__guides__crash-analytics__reference.md)
  - [Application tracking](api__guides__crash-analytics__server.md)
- [Media Analytics](api__guides__media-analytics.md)
  - [Setting up](api__guides__media-analytics__setup.md)
  - [Enriching and Restricting](api__guides__media-analytics__options.md)
  - [Custom media player](api__guides__media-analytics__custom-player.md)
  - [Developer FAQ](api__guides__media-analytics__faq.md)
  - [JavaScript Tracker API Reference](api__guides__media-analytics__reference.md)
- [Form Analytics](api__guides__form-analytics.md)
  - [Setting up](api__guides__form-analytics__setup.md)
  - [Developer FAQ](api__guides__form-analytics__faq.md)
  - [JavaScript Tracker API Reference](api__guides__form-analytics__reference.md)

#### Single-Page Application/Progressive Web App Tracking

- [Solution 1: Embed Matomo Tag Manager Container Code](#solution-1-embed-matomo-tag-manager-container-code)
  - [How to Trigger Matomo Tag Manager PageView, DOMReady and WindowLoad event using javascript.](#how-to-trigger-matomo-tag-manager-pageview-domready-and-windowload-event-using-javascript "How to Trigger Matomo Tag Manager PageView, DOMReady and WindowLoad event using javascript.")
- [Solution 2: Embedding the Tracking Code manually](#solution-2-embedding-the-tracking-code-manually)
  - [Tracking a New Page View](#tracking-a-new-page-view "Tracking a New Page View")
  - [Making Matomo Aware of New Content](#making-matomo-aware-of-new-content "Making Matomo Aware of New Content")
  - [Measuring Single-Page Apps: Complete Example](#measuring-single-page-apps-complete-example "Measuring Single-Page Apps: Complete Example")
  - [Tracking file:// downloads in mobile apps](#tracking-file-downloads-in-mobile-apps "Tracking file:// downloads in mobile apps")
  - [Offline Tracking](#offline-tracking "Offline Tracking")
  - [Questions?](#questions "Questions?")

# Single-Page Application/Progressive Web App Tracking

It is easy to start tracking your Single Page Application (SPA) or Progressive Web App (PWA) using Matomo Analytics. The easiest way to do this is using the Matomo Tag Manager ([learn more](https://matomo.org/faq/how-to/faq_23636/) using the steps below, alternatively you can use the JavaScript Tracking code ([following this guide](api__guides__spa-tracking.md)).

## Solution 1: Embed Matomo Tag Manager Container Code

If you're using [Tag Manager](https://matomo.org/tag-manager/) to implement your Matomo Analytics Tracking, then in your Single Page Application, whenever there is a new page loaded in your app you will need your [Matomo Tag](https://matomo.org/docs/tag-manager/#configuring-a-tag) to be triggered for the Page view to be tracked.

To trigger your Matomo tag (which calls `trackPageView`), you can either:

1. In your [Matomo Tag Manager container](https://matomo.org/faq/tag-manager/create-a-container-in-matomo-tag-manager/), navigate to [Triggers](https://matomo.org/guide/tag-manager/triggers/) and click “Create new Trigger”.
2. Select the “History Change” trigger under the “User Engagement” section.
3. Give your trigger a name, for example "History Change".
4. Click "Create New Trigger".
5. Create another trigger, this time selecting "Pageview" for the trigger type.
6. Select the "Pageview" trigger under the "Pageview" section.
7. Give your trigger a name, for example "Pageview".
8. Click "Create New Trigger".
9. Next, navigate to [Tags](https://matomo.org/guide/tag-manager/tags/) and click "Create New Tag” and select “Matomo Analytics" as the Tag type.
10. Select your Matomo Configuration Variable and set the Tracking type to "Pageview".
11. Set the Custom Title to `{{PageTitle}}`.
12. Set the Custom URL to `{{PageOrigin}}/{{PageHash}}` if your SPA or PWA has a `#` in the URL to navigate to different pages. Otherwise, set it as `{{PageUrl}}`
13. Under the option "Execute this tag when any of these triggers are triggered", select the "History Change" and "Pageview" triggers that we created.
14. Use the [Preview/Debug](https://matomo.org/faq/tag-manager/preview-debug-a-tag-manager-container/) mode to test and ensure that your Triggers & Tag are working as expected.
15. Once you’ve confirmed that the Trigger and Tag are working as expected, publish the changes so that they’re deployed to your website.

### How to Trigger Matomo Tag Manager PageView, DOMReady and WindowLoad event using javascript.

- In your Single Page App, if you are using the 'Pageview Trigger' to trigger a Pageview, you can trigger a Tag Manager Event `{event: 'mtm.PageView'}` by calling the following line in JavaScript: `window._mtm.push({'event': 'mtm.PageView'});`. This would also work similarly when you use the 'DOM Ready Trigger' (call `window._mtm.push({'event': 'DOMReady'});`) or when you use the 'Window Loaded Trigger' (call `_mtm.push({'event': 'WindowLoad'});`.

## Solution 2: Embedding the Tracking Code manually

If you're not using the Tag Manager, then you need to embed your Matomo JavaScript tracking code into your single-page website or web application as you would for a classic website.

To embed the tracking code manually, you have two options:

1. either you can consider using an existing SDK that may be available for your framework: [see all available integrations for Matomo](https://matomo.org/integrate/#programming-language-platforms-and-frameworks).
2. or you can simply embed the tracking code manually in your app. To find your tracking code, go to “Administration” in the top right in your Matomo instance, click on “Tracking Code” and adjust the tracking code to your needs. You can find more information in our [JavaScript Tracking Client documentation](api__guides__tracking-javascript-guide.md)

In the sections below you will learn how to setup Matomo tracking with single-page applications (SPAs). It addresses how to track page views, reset custom variables and dimensions, update referrer URLs, scan for new content, and implement Heatmap & Session Recording. A comprehensive example illustrates how these elements integrate within an SPA environment. Information on offline tracking and support resources are also provided.

### Tracking a New Page View

The challenge begins when you need to track a new page view. A single-page application is different from a usual website as there is no regular new page load and Matomo cannot detect automatically when a new page is viewed. This means you need to let Matomo know whenever the URL and the page title changes. You can do
this using the methods `setCustomUrl` and `setDocumentTitle` like this:

```
window.addEventListener('hashchange', function() {
        _paq.push(['setCustomUrl', '/' + window.location.hash.substr(1)]);
        _paq.push(['setDocumentTitle', 'My New Title']);
        _paq.push(['trackPageView']);
});
```

#### Resetting previously set custom variables

If you have set any [Custom Variables](https://matomo.org/docs/custom-variables/) in scope “page”, you need to make sure to delete these custom variables again as they would be attributed to the new page view as well otherwise:

```
_paq.push(['deleteCustomVariables', 'page']);
_paq.push(['trackPageView']);
```

Note: we recommend you use [Custom Dimensions](https://matomo.org/docs/custom-dimensions/) instead of Custom Variables as they will be deprecated in the future.

#### Resetting previously set custom dimensions

Similar to Custom Variables, you also need to unset [Custom Dimensions](https://matomo.org/docs/custom-dimensions/) when changing the page as they would otherwise be tracked again.

```
_paq.push(['deleteCustomDimension', 1]);
_paq.push(['trackPageView']);
```

#### Updating the referrer

Depending on whether you want to track the previous page as a referrer for the new page view, you should update the referrer URL by setting it to the previous page URL:

```
_paq.push(['setReferrerUrl', previousPageUrl]);
_paq.push(['trackPageView']);
```

### Making Matomo Aware of New Content

When you show a new page, your single-page DOM might change as well. For example, you might replace parts of your page with new content that you loaded from your server via Ajax. This means you need to instruct Matomo to scan the DOM for new content. We'll now go over various content types (Videos & Audio, Forms, Links and Downloads, Content tracking).

#### Video and Audio tracking

If you use the [Media Analytics](https://matomo.org/docs/media-analytics/) feature to track your videos and audios, whenever a new page is displayed you need to call the following method:

```
_paq.push(['MediaAnalytics::scanForMedia', documentOrElement]);
```

When you don’t pass any parameter, it will scan the entire DOM for new media. Alternatively, you can pass an element to scan only a certain area of your website or app for new media.

#### Form tracking

If you use the [Form Analytics](https://matomo.org/docs/form-analytics/) feature to measure the performance of your online forms, whenever a new page is displayed you need to call the following method:

```
_paq.push(['FormAnalytics::scanForForms', documentOrElement]);
```

Where `documentOrElement` points either to `document` to re-scan the entire
DOM (the default when no parameter is set) or you can pass an element to
restrict the re-scan to a specific area.

#### A/B testing

If you use the [A/B Testing](https://matomo.org/docs/ab-testing/) feature to test your experiments, whenever a new page is displayed you need to embed the js code again before tracking a new pageview as explained below:

```
// Use the appropriate event for your SPA routing strategy:
// - 'hashchange' for hash-based routing
// - 'popstate' for History API-based routing
// - or your framework's router hooks
window.addEventListener('hashchange', function() {
   var _paq = window._paq = window._paq || [];
   _paq.push(['setCustomUrl', window.location.pathname]);
   _paq.push(['setDocumentTitle', document.title]);
   _paq.push(['AbTesting::create', {
      name: 'theExperimentName',
      includedTargets: [{"attribute":"url","type":"starts_with","value":"http:\/\/www.example.org","inverted":"0"}],
      excludedTargets: [],
      variations: [
         {
            name: 'original',
            activate: function (event) {
               // usually nothing needs to be done here
            }
         },
         {
            name: 'blue',
            activate: function(event) {
               // eg $('#btn').attr('style', 'color: ' + this.name + ';');
            }
         }
      ]
   }]);
   _paq.push(['trackPageView']);
});
```

#### Link tracking

Supposing that you use the link tracking feature to measure [outlinks](https://matomo.org/faq/new-to-piwik/faq_71/) and [downloads](https://matomo.org/faq/new-to-piwik/faq_47/), make sure to call `enableLinkTracking` once during initial setup. It installs a delegated click listener on `document.body`, so newly added links are tracked automatically without any additional calls:

```
// Call once during initial setup — subsequent calls are no-ops
_paq.push(['enableLinkTracking']);
```

#### Content tracking

If you use the [Content Tracking](https://matomo.org/docs/content-tracking/) feature, whenever a new page is displayed and some parts of your DOM changes, you need to call this method :

```
_paq.push(['trackContentImpressionsWithinNode', documentOrElement]);
```

Where `documentOrElement` points either to `document` or an element similar to the other methods. Matomo will then scan the page for newly added content blocks.

#### Heatmap & Session Recording

To support single-page websites and web applications out of the box, [Heatmap](https://matomo.org/docs/heatmaps/) & [Session Recording](https://matomo.org/docs/session-recording/) will automatically detect a new page view when you call the `trackPageView` method. This applies if you call `trackPageView` several times without an actual page reload. Matomo will stop the recording of any activities after each call of `trackPageView` and re-evaluate whether it should record activities for the new page based on the new URL.

If you have a single-page website and you use `trackPageView` for any other purposes than an actual page view, it is recommended to disable the default behaviour using this method and let Heatmap & Session Recording explicitly know when there is a new page view by calling the two methods `disableAutoDetectNewPageView` and `setNewPageView`.

If you're setting a Custom URL in the single-page website, you may need to use the [`matchTrackerUrl()`](api__guides__heatmap-session-recording__reference.md#matchtrackerurl) in order to allow the Matomo tracker to correctly trigger Heatmaps and Session Recordings.

Learn more in the [JS Tracker API reference for Heatmaps & Session Recording](api__guides__heatmap-session-recording__reference.md#disableautodetectnewpageview).

### Measuring Single-Page Apps: Complete Example

In this example we show how everything works together assuming you want to track a new page whenever a hash changes:

```
var currentUrl = location.href;
window.addEventListener('hashchange', function() {
    _paq.push(['setReferrerUrl', currentUrl]);
     currentUrl = '/' + window.location.hash.substr(1);
    _paq.push(['setCustomUrl', currentUrl]);
    _paq.push(['setDocumentTitle', 'My New Title']);

    // remove all previously assigned custom variables
    _paq.push(['deleteCustomVariables', 'page']);
    _paq.push(['AbTesting::create', {
       name: 'theExperimentName',
       includedTargets: [{"attribute":"url","type":"starts_with","value":"http:\/\/www.example.org","inverted":"0"}],
       excludedTargets: [],
       variations: [
          {
             name: 'original',
             activate: function (event) {
                // usually nothing needs to be done here
             }
          },
          {
             name: 'blue',
             activate: function(event) {
                // eg $('#btn').attr('style', 'color: ' + this.name + ';');
             }
          }
       ]
    }]);
    _paq.push(['trackPageView']);

    // make Matomo aware of newly added content
    var content = document.getElementById('content');
    _paq.push(['MediaAnalytics::scanForMedia', content]);
    _paq.push(['FormAnalytics::scanForForms', content]);
    _paq.push(['trackContentImpressionsWithinNode', content]);
    _paq.push(['enableLinkTracking']);
});
```

### Tracking file:// downloads in mobile apps

If you're tracking a Single Page Application within a mobile app framework such as Cordova, you can optionally track downloads using the `file://` protocol. This is a common use case in mobile app environments where content is loaded locally. See [how to enable file protocol tracking](https://matomo.org/faq/how-to/enable-file-protocol-tracking/) for setup instructions.

### Offline Tracking

If your web application requires offline tracking, please refer to the [Matomo offline tracking](https://matomo.org/faq/how-to/how-do-i-set-up-matomo-offline-tracking/) guide.

### Questions?

If you have any questions or need help, please [get in touch with our support team](https://matomo.org/support/) or for free support: [ask on the forum](https://forum.matomo.org).
