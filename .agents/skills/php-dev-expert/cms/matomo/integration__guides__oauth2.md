# OAuth 2.0: Integrate - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/oauth2

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

# OAuth 2.0

This section contains guides that will help you authenticate external applications against Matomo using OAuth 2.0.

The **OAuth 2.0** plugin adds a first-party OAuth 2.0 Authorization Server to Matomo. It allows external applications to access Matomo APIs using OAuth 2.0 access tokens instead of sending a `token_auth`.

The plugin supports the **Authorization Code** flow with **PKCE**, **Client Credentials**, and **Refresh Token** support. Applications authenticate with bearer tokens and can be limited to the scopes granted to each OAuth client.

OAuth 2.0 clients can be managed in Matomo under **Administration => Platform => OAuth 2.0**. In Matomo Cloud, this screen is available under **Administration => Export => OAuth 2.0**. From there you can create, edit, pause, resume, or delete clients, and rotate secrets for confidential clients.

If you are looking for general API authentication details, also see [Authentication In Depth](integration__guides__authentication-in-depth.md) and [Querying the Reporting API](integration__guides__querying-the-reporting-api.md).

## What's next?

- [OAuth 2.0 Setup](integration__guides__oauth2__setup.md)
- [OAuth 2.0 Authorization Code Flow](integration__guides__oauth2__authorization-code.md)
- [OAuth 2.0 Client Credentials Flow](integration__guides__oauth2__client-credentials.md)
- [OAuth 2.0 API Usage](integration__guides__oauth2__api-usage.md)
- [OAuth 2.0 Developer FAQ](integration__guides__oauth2__faq.md)

[OAuth 2.0 Setup](integration__guides__oauth2__setup.md)
