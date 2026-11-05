# Metrics & Dimensions · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Metrics-%26-Dimensions

---

Below is the base list of Metrics and Dimensions supported by OWA. Not all metrics may be combined with all dimensions. See the Allowed Combinations for allowed combinations.

> The tables below are generated from OWA's registry when a release is published.
> To change one, change the metric or dimension registration in the module; editing
> this section by hand will be overwritten. The notes after them are written by hand.

## Metrics

| Name | Label | Description | Measured against |
| --- | --- | --- | --- |
| `actions` | Actions | The total number of action events, an action being an analyst-defined event performed by a user. | action\_fact |
| `actionsValue` | Action Value | Total value of all action events. | action\_fact |
| `bounceRate` | Bounce Rate | The percentage of visits that were bounces: single page view visits divided by entry pages. | — |
| `bounces` | Bounces | The total number of visits with a single page view | session |
| `domClicks` | Clicks | Total number of clicks on DOM elements. | click |
| `ecommerceConversionRate` | E-commerce Conversion Rate | The rate of visits that resulted in an e-commerce transaction. | — |
| `feedReaders` | Feed Readers | Total number of feed readers. | feed\_request |
| `feedRequests` | Feed Requests | Total number of feed requests. | feed\_request |
| `feedSubscriptions` | Feed Subscriptions | Total number of feed subscribers. | feed\_request |
| `goalAbandonRateAll` | Goal Abandon Rate | The rate of goal abandons in all visits. | — |
| `goalCompletionsAll` | Goal Completions | The total number of goal completions. | session |
| `goalConversionRateAll` | Goal Conversion Rate | The rate of goals achieved in all visits: goal completions divided by goal starts. | — |
| `goalStartsAll` | Goal Starts | The total number of goal starts. | session |
| `goalValueAll` | Goal Value | The total value of all goals achieved. | session |
| `lineItemQuantity` | Item Quantity | The total number of items purchased. | commerce\_line\_item\_fact, session |
| `lineItemRevenue` | Item Revenue | Total revenue from items purchased. | commerce\_line\_item\_fact, session |
| `newVisitors` | New Visitors | The total number of new visitors | session |
| `pageViews` | Page Views | The total number of pages viewed. | request, session |
| `pagesPerVisit` | Pages Per Visit | The average pages viewed per visit: page views divided by visits. | — |
| `repeatVisitors` | Repeat Visitors | The total number of repeat visitors: unique visitors with two or more visits. | — |
| `revenuePerTransaction` | Revenue Per Transaction | Average revenue per transaction. | — |
| `revenuePerVisit` | Revenue Per Visit | Average revenue generated per visit. | — |
| `shippingRevenue` | Shipping Revenue | Total revenue from shipping. | commerce\_transaction\_fact, session |
| `taxRevenue` | Tax Revenue | Total revenue from taxes. | commerce\_transaction\_fact, session |
| `transactionRevenue` | Revenue | Total revenue from all transactions. | commerce\_transaction\_fact, session |
| `transactions` | Transactions | Total number of transactions. | commerce\_transaction\_fact, session |
| `uniqueActions` | Unique Actions | Total number of unique action events. | action\_fact |
| `uniqueLineItems` | Unique Items | Total number of unique items purchased. | commerce\_transaction\_fact, session |
| `uniquePageViews` | Unique Page Views | The total number of unique pages viewed. | request |
| `uniqueVisitors` | Unique Visitors | The total number of unique visitors. | session, request, action\_fact, domstream, click, commerce\_transaction\_fact, commerce\_line\_item\_fact |
| `visitDuration` | Visit Duration | The average duration of visits, measured between the first and last page view of each visit. | session |
| `visitors` | Visitors | The total number of visitors. | session, request, action\_fact, domstream, click, commerce\_transaction\_fact, commerce\_line\_item\_fact |
| `visits` | Visits | The total number of visits, also called sessions. | session, request |

Goal metrics exist once per numbered goal slot — `goal1Completions`,
`goal1Starts`, `goal1Value` and so on, through goal 15. See
[Conversion Tracking](Conversion-Tracking.md).

## Dimensions

| Name | Label | Description | Family |
| --- | --- | --- | --- |
| `acquisitionAd` | Acquisition Ad | The ad that first brought this visitor to the site. | visitor |
| `acquisitionCampaign` | Acquisition Campaign | The campaign that first brought this visitor to the site. | visitor |
| `acquisitionMedium` | Acquisition Medium | The medium that first brought this visitor to the site. | visitor |
| `acquisitionSearchTerms` | Acquisition Search Terms | The search terms that first brought this visitor to the site. | visitor |
| `acquisitionSource` | Acquisition Source | The source that first brought this visitor to the site. | visitor |
| `actionGroup` | Action Group | The group that an action belongs to. | actions |
| `actionLabel` | Action Label | The label associated with an action. | actions |
| `actionName` | Action Name | The name of the action. | actions |
| `ad` | Ad | The name of the ad that originated the visit. | campaign |
| `adType` | Ad Type | The type of ad that originated the visit. | campaign |
| `browserType` | Browser Type | The browser type of the visitor. | system |
| `browserVersion` | Browser Version | The browser version of the visitor. | system |
| `campaign` | Campaign | The campaign that originated the visit. | campaign |
| `city` | City | The city of the visitor. | geo |
| `clickX` | Click X | The horizontal position of the click on the page. | dom |
| `clickY` | Click Y | The vertical position of the click on the page. | dom |
| `country` | Country | The country of the visitor. | geo |
| `countryCode` | Country Code | The country code for the inferred country location of visitors. | geo |
| `customVarName1` | Custom Var 1 Name | The name of custom variable 1. | custom variables |
| `customVarName2` | Custom Var 2 Name | The name of custom variable 2. | custom variables |
| `customVarName3` | Custom Var 3 Name | The name of custom variable 3. | custom variables |
| `customVarName4` | Custom Var 4 Name | The name of custom variable 4. | custom variables |
| `customVarName5` | Custom Var 5 Name | The name of custom variable 5. | custom variables |
| `customVarValue1` | Custom Var 1 Value | The value of custom variable 1. | custom variables |
| `customVarValue2` | Custom Var 2 Value | The value of custom variable 2. | custom variables |
| `customVarValue3` | Custom Var 3 Value | The value of custom variable 3. | custom variables |
| `customVarValue4` | Custom Var 4 Value | The value of custom variable 4. | custom variables |
| `customVarValue5` | Custom Var 5 Value | The value of custom variable 5. | custom variables |
| `date` | Date | A date string in YYYYMMDD format (e.g. 20200415). | time |
| `day` | Day | The day of the month (1-31). | time |
| `dayofweek` | Day of Week | The day of the week. | time |
| `dayofyear` | Day of Year | The day of the year. | time |
| `daysSinceFirstVisit` | Days Since First Visit | The number of days since the first visit of the user. | visit |
| `daysSinceLastVisit` | Days Since Last Visit | The number of days since the last visit. | visit |
| `daysToTransaction` | Days To Purchase | The number of days since the first visit and an e-commerce transaction. | ecommerce |
| `distinctItemsInVisit` | Distinct Items in Visit | Number of distinct items purchased in Visit. | visit |
| `domElementClass` | Dom Class | The class of the dom element. | dom |
| `domElementId` | Dom ID | The id of the dom element. | dom |
| `domElementName` | Dom Name | The name of the dom element. | dom |
| `domElementTag` | Dom Tag | The html tag of the dom element. | dom |
| `domElementText` | Dom Text | The text associated the dom element. | dom |
| `domElementValue` | Dom Value | The value of the dom element. | dom |
| `entryPagePath` | Entry Page Path | The path portion of the URL of the page first viewed during a visit. | visit |
| `entryPageTitle` | Entry Page Title | The title of the page first viewed during a visit. | visit |
| `entryPageType` | Entry Page Type | The page type of the page first viewed during a visit. | visit |
| `entryPageUrl` | Entry Page URL | The url of the page first viewed during a visit. | visit |
| `exitPagePath` | Exit Page Path | The path of the page last viewed during a visit. | visit |
| `exitPageTitle` | Exit Page Title | The title of the page last viewed during a visit. | visit |
| `exitPageType` | Exit Page Type | The page type of the page last viewed during a visit. | visit |
| `exitPageUrl` | Exit Page URL | The url of the page last viewed during a visit. | visit |
| `feedType` | Feed Type | The type or format of the feed. | feed |
| `goalStartsInVisit` | Goal Starts in Visit | Goals started in a visit. | visit |
| `goalValueInVisit` | Goal Value in Visit | Total value from all goals in a visit. | visit |
| `goalsInVisit` | Goals in Visit | Goals completed in a visit. | visit |
| `hostName` | Host Name | The host name of the network used by the visitor. | network |
| `ipAddress` | IP Address | The IP address of the visitor. | network |
| `isNewVisitor` | New Visitor | A boolean indicating whether the visitor has had only one visit. | visitor |
| `isRepeatVisitor` | Repeat Visitor | A boolean indicating whether the visitor has had two or more visits. | visitor |
| `isSearchEngine` | Search Engine | A boolean indicating if the referring url is a search engine. | campaign |
| `itemQuantityInVisit` | Item Quantity in Visit | Number of e-commerce items purchased completed in a visit. | visit |
| `itemRevenueInVisit` | Item Revenue in Visit | Revenue generate from e-commerce transaction items in a visit. | visit |
| `language` | Language | The language of the visit. | system |
| `latestAttributions` | Latest Attributions | The latest campaign attributions. | campaign-special |
| `latitude` | Latitude | The latitude of the visitor. | geo |
| `longitude` | Longitude | The longitude of the visitor. | geo |
| `medium` | Medium | A high-level classification of the traffic source through which a visitor arrives at a website. Possible values are: Direct, organic-search, etc. | campaign |
| `month` | Month | The month, as yyyymm. | time |
| `osType` | Operating System | The operating System of the visitor. | system |
| `pagePath` | Page Path | The path of the web page. | content |
| `pageTitle` | Page Title | The title of the web page. | content |
| `pageType` | Page Type | The page type of the web page. | content |
| `pageUrl` | Page URL | The URL of the web page. | content |
| `pagesViewsInVisit` | Pages Viewed In Visit | The number of pages viewed in a visit. | visit |
| `priorPagePath` | Prior Page Path | The URI of the prior page. | content |
| `priorPageTitle` | Prior Page Title | The title of the prior page. | content |
| `priorPageType` | Prior Page Type | The type of page viewed before the current page view. | content |
| `priorPageUrl` | Prior Page URL | The url of the page viewed before the current page view. | content |
| `priorVisitCount` | Prior Visits | The number of prior visits, excluding the current one. | visit |
| `productCategory` | Product Category | The category of product purchased. | ecommerce |
| `productName` | Product Name | The name of the product purchased. | ecommerce |
| `productSku` | Product SKU | The SKU code of the product purchased. | ecommerce |
| `referralLinkText` | Referral Link Text | The anchor text of the link that referred visitors to the tracked website. | campaign |
| `referralPageTitle` | Referral Page Title | The page title of the url that referred visitors to the tracked website. | campaign |
| `referralPageUrl` | Referral Page URL | The url of the referring web page. | campaign |
| `referralSearchTerms` | Search Terms | The search term that led visitors to the tracked website. | campaign |
| `referralWebSite` | Referral Web Site | The full domain of the referring web site. | campaign |
| `revenueInVisit` | Revenue in Visit | Revenue generate from e-commerce transactions in a visit. | visit |
| `sessionId` | Session ID | The ID of the session/visit. | visit-special |
| `shippingRevenueInVisit` | Shipping Revenue in Visit | Revenue generate from e-commerce shipping in a visit. | visit |
| `siteDomain` | Site Domain | The domain of the web site. | site |
| `siteId` | Site ID | The ID of the the web site. | site |
| `siteName` | Site Name | The name of the site. | site |
| `source` | Source | The origin of traffic. Possible values are the domain of referring websites (foo.com) or app search engines (Google), etc. | campaign |
| `stateRegion` | State/Region | The state or region of the visitor. | geo |
| `taxRevenueInVisit` | Tax Revenue in Visit | Revenue generate from e-commerce tax in a visit. | visit |
| `timestamp` | Time | The timestamp of the transaction. | ecommerce-special |
| `transactionGateway` | Payment Gateway | The payment gateway/provider used to clear the transaction. | ecommerce |
| `transactionId` | Transaction ID | The id of the e-commerce transaction. | ecommerce |
| `transactionOriginator` | Originator | The store or location that originated the transaction. | ecommerce |
| `transactionsInVisit` | Transactions in Visit | Number of e-commerce transactions completed in a visit. | visit |
| `userEmail` | Email Address | A generic string used to store the email address of the visitor. | visitor |
| `userName` | User Name | A generic string used to store the user name of the visitor. | visitor |
| `visitorId` | Visitor ID | The ID of the visitor. | visitor |
| `visitsToTransaction` | Visits To Purchase | The number of visits before the transaction occurred. | ecommerce |
| `weekofyear` | Week of Year | The week of the year. | date |
| `year` | Year | The four digit year. | time |

## Combinations

A metric can only be broken down by a dimension that its fact table is related
to. The families available against each fact table:

| Fact table | Dimension families |
| --- | --- |
| `action_fact` | `actions`, `campaign`, `content`, `custom variables`, `date`, `geo`, `network`, `site`, `system`, `time`, `visit`, `visit-special`, `visitor` |
| `click` | `campaign`, `content`, `custom variables`, `date`, `dom`, `geo`, `network`, `site`, `system`, `time`, `visit`, `visit-special`, `visitor` |
| `commerce_line_item_fact` | `campaign`, `content`, `custom variables`, `date`, `ecommerce`, `geo`, `network`, `site`, `system`, `time`, `visit`, `visit-special`, `visitor` |
| `commerce_transaction_fact` | `campaign`, `content`, `custom variables`, `date`, `ecommerce`, `ecommerce-special`, `geo`, `network`, `site`, `system`, `time`, `visit`, `visit-special`, `visitor` |
| `domstream` | `campaign`, `content`, `custom variables`, `date`, `geo`, `network`, `site`, `system`, `time`, `visit`, `visit-special`, `visitor` |
| `feed_request` | `campaign`, `content`, `date`, `feed`, `geo`, `network`, `site`, `system`, `time`, `visit-special`, `visitor` |
| `request` | `campaign`, `content`, `custom variables`, `date`, `geo`, `network`, `site`, `system`, `time`, `visit`, `visit-special`, `visitor` |
| `session` | `campaign`, `campaign-special`, `custom variables`, `date`, `geo`, `network`, `site`, `system`, `time`, `visit`, `visitor` |

## Notes

### Visit (a.k.a Session)

Different web analytics tools use different methodologies to track sessions. As a result it is important to understand how this metric is computed. For example, the OWA time-out period for a visit is 30 minutes, but this may not be the case with all web analytics tools. Many web analytics tools make the visit time-out period configurable.

A visit typically consists of one or more page views. However, in the case of sites where interaction consists solely of file downloads, streaming media, Flash, or other non-HTML content, a request for this content may or may not be defined as a “page” in a specific web analytics tool but could still be viewed as a valid request as part of a visit. The key is that interaction with the site is represented.

When performing analysis using this metric, be mindful of the dimensions that are being added across or else a summation could result in an inflated total. For example, visits can be summed across a dimension such as Entry Page because a visit only has one Entry Page. However, visits are not additive over other dimensions such as Page, because visits can be associated with views of multiple pages.

### Visit Duration

Most web analytics tools use the timestamp associated with the Page View or Event that starts and ends a Visit to calculate this metric.

The timestamp used to determine the end of a Visit may differ by tool. Some tools use the timestamp of the last Page View, while others use the timestamp of other Events such as clicks, video start, etc. OWA uses the timestamp of the last event (page view, action, etc.).

Also, because this metric is calculated using the timestamps of Events, actual time spent on the website after the last Event is usually not included in the total.

Consider this example: (time is in the HH:MM:SS format)

- Timestamp of first Event in Visit – Jan 19, 2014 15:05:21
- Timestamp of last Event in Visit – Jan 19, 2014 15:17:35
- Visit Duration = 12m 14s

### Unique Visitors

This metric relies on the assignment of a unique ID to visitors of your website or application. The most predominant method for storing this unique ID is via a persistent browser cookie, although implementations vary tracking client/sdk.

Authentication, either active or passive, is the most accurate way to track unique visitors. However, because most websites do not require a user login, the cookie-based "unique visitor" is often used as a proxy for a unique individual. The cookie-based measurement method can lead to inaccuracies due to cookie deletion, shared computers, and browsing from multiple browsers or devices.

When performing analysis using this metric, be mindful that a summation using this metrics across multiple dimensions will result in an inflated total. For more information please reference the “hotel problem” as described on Wikipedia.

To reduce confusion when web analytics and audience measurement tools are used together, some web analytics providers have renamed the Unique Visitors metric to “Unique Browsers.”

### Search Term

This dimension is often used in two contexts: “Traffic Sources” and “Site Searches” (internal searches that happen mid-session on the website).

In the context of traffic sources, this dimension is used to determine which search terms are driving browsers to visit the website from organic or paid search sources. When two or more searches drive the user back to the same website within the same visit/session, the last search term is typically attributed to the session. However, this varies by the traffic attribution model configured for use by the tracker code.

Analysts also use this dimension to identify high performing search terms that might be candidates to purchase as part of paid search programs.

Site Search terms are terms within the particular domain. For instance, a visitor on amazon.com performs a site search when they enter a term like “electric blankets” in the search box.

When analyzing Site Searches, this dimension is used to analyze what people are searching for within a website.
 
Google and other search engines have stopped including the search term in their referring URLs when the search takes place under https protocol. In this case OWA will display the `(not provided)` label for the search term value.
