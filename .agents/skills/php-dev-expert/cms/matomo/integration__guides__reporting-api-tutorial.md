# Tutorial: Get your top 10 popular pages: Integrate - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/reporting-api-tutorial

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

#### Tutorial: Get your top 10 popular pages

- [Build the URL](#build-the-url)
- [XML Output](#xml-output)
- [Other examples](#other-examples)

# Tutorial: Get your top 10 popular pages

This tutorial will show you how easy it is to request the **yesterday's top 10 popular pages** in XML format.

## Build the URL

To build the URL of the API call, you need:

- your Matomo base URL (replace demo.matomo.cloud with the URL and path of your Matomo server

  **https://demo.matomo.cloud/?module=API**
- the name of the method you want to call. It has the format *moduleName.methodToCall* (see the list on [API Methods](integration__api-reference__reporting-api.md#api-method-list)). In this example, let's request the most viewed Pages' titles with `Actions.getPageTitles`:

  **method=Actions.getPageTitles**
- the website id

  **idSite=1**
- the date parameter. This can be *today*, *yesterday*, or any date with the format *YYYY-MM-DD*

  **date=yesterday**
- the period parameter. This can be *day*, *week*, *month* or *year*

  **period=day**

  Alternatively, if you wanted to request all pages from a given date, you could use a date range parameter. For example, to request all pages since January 1st 2021:`period=range&date=2021-01-01,yesterday`
- the format parameter. Defines the output format of the data: XML, JSON, CSV, PHP (serialized PHP), HTML (simple html)

  **format=xml**
- (optional) to keep the example simple, we ask only for the Visits & Unique visitors metrics to be returned:

  **showColumns=nb\_visits,nb\_uniq\_visitors**
- (optional) the filter\_limit parameter that defines the number of rows returned

  **filter\_limit=10**

The final url is **[demo.matomo.cloud/?module=API&method=Actions.getPageTitles&idSite=1&date=yesterday&period=day&format=xml&filter\_limit=10&showColumns=nb\_visits,nb\_uniq\_visitors](https://demo.matomo.cloud/?module=API&method=Actions.getPageTitles&idSite=1&date=yesterday&period=day&format=xml&filter_limit=10&showColumns=nb_visits,nb_uniq_visitors)**

## XML Output

Here is the output of this request:

```
<?xml version="1.0" encoding="utf-8" ?>
<result>
	<row>
		<label> Cart - Divezone Store</label>
		<nb_visits>1174</nb_visits>
		<nb_uniq_visitors>933</nb_uniq_visitors>
		<segment>pageTitle==Cart%2B-%2BDivezone%2BStore</segment>
	</row>
	<row>
		<label> Diving Jobs, latest Divemaster and Scuba Dive Instructor Job offers!</label>
		<nb_visits>1084</nb_visits>
		<nb_uniq_visitors>892</nb_uniq_visitors>
		<segment>pageTitle==Diving%2BJobs%252C%2Blatest%2BDivemaster%2Band%2BScuba%2BDive%2BInstructor%2BJob%2Boffers%2521</segment>
	</row>
	<row>
		<label> Checkout - Divezone Store</label>
		<nb_visits>947</nb_visits>
		<nb_uniq_visitors>788</nb_uniq_visitors>
		<segment>pageTitle==Checkout%2B-%2BDivezone%2BStore</segment>
	</row>
	<row>
		<label> My Account - Divezone Store</label>
		<nb_visits>727</nb_visits>
		<nb_uniq_visitors>527</nb_uniq_visitors>
		<segment>pageTitle==My%2BAccount%2B-%2BDivezone%2BStore</segment>
	</row>
	<row>
		<label> Best Diving sites in Bali &ndash; Indonesia Scuba dive reviews by Divezone</label>
		<nb_visits>643</nb_visits>
		<nb_uniq_visitors>588</nb_uniq_visitors>
		<segment>pageTitle==Best%2BDiving%2Bsites%2Bin%2BBali%2B%25E2%2580%2593%2BIndonesia%2BScuba%2Bdive%2Breviews%2Bby%2BDivezone</segment>
	</row>
	<row>
		<label> Divezone Brand Diving Tank - Divezone Store</label>
		<nb_visits>533</nb_visits>
		<nb_uniq_visitors>435</nb_uniq_visitors>
		<segment>pageTitle==Divezone%2BBrand%2BDiving%2BTank%2B-%2BDivezone%2BStore</segment>
	</row>
	<row>
		<label> Divezone Brand Basic Wetsuit - Divezone Store</label>
		<nb_visits>475</nb_visits>
		<nb_uniq_visitors>371</nb_uniq_visitors>
		<segment>pageTitle==Divezone%2BBrand%2BBasic%2BWetsuit%2B-%2BDivezone%2BStore</segment>
	</row>
	<row>
		<label> Divezone Store</label>
		<nb_visits>447</nb_visits>
		<nb_uniq_visitors>353</nb_uniq_visitors>
		<segment>pageTitle==Divezone%2BStore</segment>
	</row>
	<row>
		<label> Divezone Free Guides: Running Your Own Dive Center - Divezone Store</label>
		<nb_visits>383</nb_visits>
		<nb_uniq_visitors>286</nb_uniq_visitors>
		<segment>pageTitle==Divezone%2BFree%2BGuides%253A%2BRunning%2BYour%2BOwn%2BDive%2BCenter%2B-%2BDivezone%2BStore</segment>
	</row>
	<row>
		<label> Best Diving sites in Indonesia &ndash; Scuba dive reviews by Divezone</label>
		<nb_visits>348</nb_visits>
		<nb_uniq_visitors>318</nb_uniq_visitors>
		<segment>pageTitle==Best%2BDiving%2Bsites%2Bin%2BIndonesia%2B%25E2%2580%2593%2BScuba%2Bdive%2Breviews%2Bby%2BDivezone</segment>
	</row>
</result>
```

## Other examples

- XML of the visits of the last 10 days, one entry per day
  <https://demo.matomo.cloud/?module=API&method=VisitsSummary.getVisits&idSite=1&period=day&date=last10&format=xml>
- XML of the visits by Acquisition Channel
  <https://demo.matomo.cloud/?module=API&method=Referrers.getReferrerType&idSite=1&period=day&date=last10&format=xml>
- RSS feed containing the top 30 search engine keywords for the last 3 weeks
  <https://demo.matomo.cloud/?module=API&method=Referrers.getKeywords&idSite=1&period=week&date=last3&format=rss&filter_limit=30>
- XML containing the page titles from the last 3 days which match the pattern "store"
  <https://demo.matomo.cloud/?module=API&method=Actions.getPageTitles&idSite=1&period=day&date=last3&format=xml&filter_column=label&filter_pattern=store>
- XML containing search engine keywords from the last 3 weeks, one entry per week
  <https://demo.matomo.cloud/?module=API&method=Referrers.getKeywords&idSite=1&period=week&date=last3&translateColumnNames=1&format=xml>

You can get the data in one of these formats: XML, JSON, HTML, CSV, TSV, etc. See the [API Reference](integration__api-reference__reporting-api.md) for the documentation.

There are also functions for Websites, Users, Goals, PDF Reports (create, update, delete operations) and a lot more, such as: adding Annotations, creating custom Segments,

[Accessing Matomo data](integration__guides__reporting-introduction.md)
[Querying the Reporting API](integration__guides__querying-the-reporting-api.md)
