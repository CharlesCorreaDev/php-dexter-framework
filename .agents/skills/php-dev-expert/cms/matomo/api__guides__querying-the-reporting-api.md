# Querying the Reporting API: Integrate - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/querying-the-reporting-api

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

#### Querying the Reporting API

- [Call the Matomo API using the HTTP API](#call-the-matomo-api-using-the-http-api)
- [Learn more](#learn-more)

# Querying the Reporting API

This guide explains how to call the Matomo API to request your web analytics data.

## Call the Matomo API using the HTTP API

If you want to request data in any language (PHP, Python, Ruby, ASP, C++, Java, etc.) you can use the HTTP API. It is a simple way to request data via an HTTP GET.

**Security Notice**

If the API call requires the token\_auth and the HTTP request is sent over untrusted networks, we highly advise that you use an encrypted request. Otherwise, your token\_auth is exposed to eavesdroppers. This can be done by using https instead of http.

If the [OAuth 2.0](api__guides__oauth2.md) plugin is installed, external applications can also authenticate using OAuth 2.0 bearer tokens instead of sending a `token_auth`. The examples below continue to use `token_auth` because it is available in every Matomo installation.

You can, for example, get the list of countries where most of your visitors in the current month are from. Here is an example in PHP:

```
<?php

// this token is used to authenticate your API request.
// You can get the token on the API page inside your Matomo interface
$token_auth = 'anonymous';

// we call the REST API and request the 100 first keywords for the last month for the idsite=62
$url = "https://demo.matomo.org/";
$url .= "?module=API&method=UserCountry.getCountry";
$url .= "&idSite=62&period=month&date=today";
$url .= "&format=JSON&filter_limit=10";
$url .= "&token_auth=$token_auth";

$fetched = file_get_contents($url);
$content = json_decode($fetched,true);

// case error
if (!$content) {
    print("No data found");
}

print("<h1>Countries with most visits</h1>\n");
foreach ($content as $row) {

    $countryName = htmlspecialchars($row["label"], ENT_QUOTES, 'UTF-8');
    $hits = $row['nb_visits'];

    print("<b>$countryName</b> ($hits visits)<br>\n");
}
```

Here is the output of this code:

```
<h1>Countries with most visits</h1>
<b>United States</b> (50504 visits)<br>
<b>Australia</b> (23099 visits)<br>
<b>United Kingdom</b> (22298 visits)<br>
<b>Indonesia</b> (15631 visits)<br>
<b>Germany</b> (14497 visits)<br>
<b>Singapore</b> (10969 visits)<br>
<b>Philippines</b> (9974 visits)<br>
<b>Malaysia</b> (9419 visits)<br>
<b>India</b> (9195 visits)<br>
<b>Thailand</b> (8956 visits)<br>
```

## Learn more

To learn more about all the options available when calling the reporting API, read the [Reporting API reference](api__api-reference__reporting-api.md).

You can also have a look at the [list of client libraries](api__guides__reporting-api-clients.md) available to call the reporting API.

[Tutorial: Get your top 10 popular pages](api__guides__reporting-api-tutorial.md)
[Reporting API Clients](api__guides__reporting-api-clients.md)
