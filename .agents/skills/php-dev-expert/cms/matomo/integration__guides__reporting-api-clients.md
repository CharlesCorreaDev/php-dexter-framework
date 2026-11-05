# Reporting API Clients: Integrate - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/reporting-api-clients

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

#### Reporting API Clients

- [About this guide](#about-this-guide)
- [Client libraries for Reporting API](#client-libraries-for-reporting-api)
  - [PHP without library](#php-without-library "PHP without library")
  - [PHP clients (unofficial)](#php-clients-unofficial "PHP clients (unofficial)")
  - [Ruby client](#ruby-client "Ruby client")
  - [Python client](#python-client "Python client")
  - [C# client](#c-client "C# client")
  - [NodeJS client](#nodejs-client "NodeJS client")
  - [Laravel](#laravel "Laravel")
- [Client libraries for Tracking API](#client-libraries-for-tracking-api)
- [Learn more](#learn-more)

# Reporting API Clients

## About this guide

**Read this guide if**

- you'd like to know **which client libraries are available to use [Matomo's Reporting HTTP API](integration__guides__reporting-introduction.md) from your application**

## Client libraries for Reporting API

### PHP without library

You can use `file_get_contents()` to call the reporting API directly. Learn more in [Querying the reporting API](integration__guides__querying-the-reporting-api.md).

### PHP clients (unofficial)

- [Matomo-PHP-API](https://github.com/VisualAppeal/Matomo-PHP-API)
- [matomo-reporting-api](https://github.com/pfrenssen/matomo-reporting-api)

### Ruby client

A Ruby client for the reporting API is available on GitHub: [github.com/matomo-org/matomo-ruby-api](https://github.com/matomo-org/piwik-ruby-api).

### Python client

A complete Python client implementation of the reporting API is available on GitHub at [github.com/matomo-org/matomo-python-api](https://github.com/matomo-org/piwik-python-api).

### C# client

A C# client implementation of the reporting API is available on GitHub at [github.com/matomo-org/matomo-dotnet-api](https://github.com/matomo-org/piwik-dotnet-api).

### NodeJS client

A NodeJS client is available on GitHub at [github.com/sandfox/nodejs-piwik](https://github.com/sandfox/nodejs-piwik).

### Laravel

A client library for Laravel (a PHP framework) is available at [github.com/RobBrazier/Laravel\_Piwik](https://github.com/RobBrazier/Laravel_Piwik).

## Client libraries for Tracking API

If you're looking instead for client libraries to use Matomo Tracking HTTP API and track your application or API usage, please see our [Matomo Tracking API Clients guide.](integration__guides__tracking-api-clients.md)

## Learn more

You can view the complete list of clients and integrations of Matomo at [matomo.org/integrate/](https://matomo.org/integrate/).

[Querying the Reporting API](integration__guides__querying-the-reporting-api.md)
