# Tracking API Clients: Integrate - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/tracking-api-clients

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

#### Tracking API Clients

- [About this guide](#about-this-guide)
- [JavaScript SDK](#javascript-sdk)
- [Mobile SDKs](#mobile-sdks)
  - [iOS SDK](#ios-sdk "iOS SDK")
  - [Android SDK](#android-sdk "Android SDK")
  - [Appcelerator Titanium Module](#appcelerator-titanium-module "Appcelerator Titanium Module")
- [Client libraries for Apps or Server-Side tracking](#client-libraries-for-apps-or-server-side-tracking)
  - [PHP client](#php-client "PHP client")
  - [Java client](#java-client "Java client")
  - [C# client](#c-client "C# client")
  - [Other clients](#other-clients "Other clients")

# Tracking API Clients

## About this guide

**Read this guide if**

- you'd like to know **which client libraries are available to use Matomo (formerly Piwik)'s Tracking HTTP API from your application**

## JavaScript SDK

If you are building websites, you can use our powerful JavaScript SDK to measure all aspects of your website experience. Learn more: [JavaScript tracking client.](api__guides__tracking-javascript-guide.md)

## Mobile SDKs

Use the SDKs below for mobile app and product analytics with Matomo.

### iOS SDK

If you are building iOS apps, Apple tvOs or macOS apps, you can use the Swift PiwikTracker client (or the older Objective-C PiwikTracker) to send tracking data to your Matomo server.

Learn more and download Matomo iOS SDK on GitHub at [github.com/matomo-org/matomo-sdk-ios](https://github.com/matomo-org/matomo-sdk-ios).

### Android SDK

If you are building Android apps (for Android smartphones, tablets, Fire TVs, etc.), you can use the Android Java client to send tracking data to your Matomo server.

Learn more and download Matomo Android SDK on GitHub at [github.com/matomo-org/matomo-sdk-android](https://github.com/matomo-org/matomo-sdk-android).

### Appcelerator Titanium Module

If you are building Mobile apps using Appcelerator Titanium, use the Matomo Analytics Module for Titanium to measure how users are navigating and consuming your apps.

Learn more and download the Matomo Module for Titanium at [github.com/manumaticx/ti.piwik](https://github.com/manumaticx/ti.piwik).

## Client libraries for Apps or Server-Side tracking

Use the clients below for server-side analytics and app tracking with Matomo.

### PHP client

Learn more about our Matomo Tracking API PHP client on GitHub: [github.com/matomo-org/matomo-php-tracker](https://github.com/matomo-org/matomo-php-tracker).

### Java client

A Java client for the Matomo Tracking API is available on GitHub: [github.com/matomo-org/matomo-java-tracker](https://github.com/matomo-org/matomo-java-tracker#readme).

### C# client

A C# client implementation of the Tracking API is available on GitHub at [github.com/matomo-org/matomo-dotnet-tracker](https://github.com/matomo-org/matomo-dotnet-tracker).

### Other clients

Other community contributed clients are also available in C++, Python, Node.js, JavaScript Frameworks (AngularJS, Vue.js, React, React native...). [See all integrations with Matomo](https://matomo.org/integrate/#programming-language-platforms-and-frameworks). Please let us know if you hear about (or create!) a new SDK in your favorite technology!
