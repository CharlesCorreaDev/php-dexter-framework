# Reports · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Reports

---

This page lists the reports OWA ships. You can also define your own — see
[Custom Reports](Custom-Reports.md).

## Opening a report

Reports are reached through a single action and a report id:

```
http://yourdomain/path/to/owa/index.php?do=base.report&reportId=pages&siteId=<site id>
```

`siteId` is the Tracking ID shown on the Observation Profile's screen. Add
`period=today`, `period=last_seven_days`, `period=last_thirty_days`, or
`startDate=` and `endDate=` to change the range.

Before 1.13.0 each report had its own action, such as `do=base.reportPages`.
Those URLs now return 404 — see [Updating](Updating.md).

## Reports

Titles ending in `…` are detail reports: they describe a single value of a
dimension and are normally reached by selecting a row in another report.

| Report id | Title | Grouped by | Widgets |
| --- | --- | --- | --- |
| `action-detail` | Action Detail | `date`, `actionLabel` | trend, grid |
| `action-group` | Action Group | `date`, `actionGroup`, `actionName` | trend, grid |
| `action-groups` | Action Groups | `date`, `actionGroup` | trend, grid |
| `action-tracking` | Actions | `date`, `actionName`, `actionGroup` | trend-card, grid-card |
| `ad-detail` | Ad | `date` | trend |
| `ad-type-detail` | Ad Type | `date` | trend |
| `ad-types` | Ad Types | `date`, `adType` | trend, grid |
| `ads` | Ad Performance | `date`, `ad` | trend, grid |
| `anchortext` | Referral Link Text | `date`, `referralLinkText` | trend, grid |
| `attribution-history` | Attribution History | `date`, `latestAttributions` | trend, grid |
| `avg-order-value` | Average Order Value | `date` | trend, grid |
| `browsers` | Browser Types | `date`, `browserType` | trend, grid |
| `campaign-detail` | Campaign | `date` | trend |
| `campaigns` | Campaigns | `date`, `campaign` | trend, grid |
| `clicks` | Clicks | `date`, `pagePath`, `domElementId` | trend, grid |
| `content` | Content Overview | `date`, `pageTitle`, `pageType`, `entryPagePath`, `exitPagePath`, `domElementId` | trend-card, grid-card, report-links |
| `creative-performance` | Creative Performance | `date`, `ad`, `entryPagePath` | trend, grid |
| `dashboard` | Dashboard | `date`, `pagePath`, `isRepeatVisitor`, `medium`, `actionGroup`, `actionName`, `referralWebSite`, `ipAddress`, `hostName`, `entryPagePath`, `source`, `city`, `country`, `priorVisitCount` | trend-card, grid-card, pie, grid |
| `days-to-purchase` | Days To Purchase | `date`, `daysToTransaction` | trend, grid |
| `document` | Page Detail | `date`, `priorPagePath`, `priorPageTitle`, `pagePath`, `pageTitle` | trend, grid, heatmap-link, report-links |
| `dom-clicks` | Dom Clicks | `date`, `domElementId`, `domElementName`, `domElementTag`, `domElementClass` | trend, grid |
| `ecommerce-conversion-rate` | Conversion Rate | `date` | trend, grid |
| `ecommerce` | Ecommerce | `date`, `productName`, `source` | trend, grid-card, grid |
| `entry-pages` | Entry Pages | `date`, `entryPagePath`, `entryPageTitle` | trend, grid |
| `exit-pages` | Exit Pages | `date`, `exitPagePath`, `exitPageTitle` | trend, grid |
| `feeds` | Feeds | `date`, `feedType` | trend, grid |
| `geolocation` | Visitor Geolocation | `date`, `country`, `countryCode` | trend, grid |
| `goals` | Goals | `date` | trend, metric-boxes |
| `hosts` | Host Names | `date`, `hostName` | trend, grid |
| `keywords` | Referring Search Terms | `date`, `referralSearchTerms` | trend, grid |
| `latest-visits` | Latest Visits | `ipAddress`, `entryPageUrl`, `medium`, `source`, `city`, `country`, `priorVisitCount` | grid |
| `os` | Operating Systems | `date`, `osType` | trend, grid |
| `page-types` | Page Types | `date`, `pageType` | trend, grid |
| `pages` | Pages | `date`, `pagePath`, `pageTitle`, `pageType` | trend, grid |
| `product-categories` | Product Categories | `date`, `productCategory` | trend, grid |
| `product-category-detail` | Product Category | `date` | trend |
| `product-detail` | Product Detail | `date` | trend |
| `product-sku-detail` | Product SKU | `date` | trend |
| `product-skus` | Product SKUs | `date`, `productSku` | trend, grid |
| `products` | Products | `date`, `productName` | trend, grid |
| `referring-sites` | Referring Web Sites | `date`, `referralWebSite` | trend, grid |
| `revenue` | Total Revenue | `date` | trend, grid |
| `search-engines` | Search Engines | `date`, `referralWebSite` | trend, grid |
| `source-detail` | Source Detail | `date` | trend |
| `sources` | Sources | `date`, `source`, `medium` | trend, grid |
| `traffic` | Traffic Sources | `date`, `entryPageTitle`, `medium`, `source`, `campaign`, `referralWebSite`, `country` | trend-card, grid-card, pie, grid |
| `transactions` | Transactions Overview | `date`, `timestamp`, `transactionId` | trend, grid |
| `visitors-age` | Visitor Age | `date`, `daysSinceFirstVisit` | trend, grid |
| `visitors-loyalty` | Visitor Loyalty | `date`, `priorVisitCount` | trend, grid |
| `visitors-recency` | Visitor Recency | `date`, `daysSinceLastVisit` | trend, grid |
| `visitors` | Visitors | `date`, `browserType`, `hostName`, `priorVisitCount`, `daysSinceLastVisit`, `daysSinceFirstVisit` | trend-card, grid-card |
| `visits-to-purchase` | Visits To Purchase | `date`, `visitsToTransaction` | trend, grid |

Each entry is a JSON file in `modules/Base/reports/`; modules may ship their own.
The format is documented in [Report Definitions](Report-Definitions.md).

## See also

[Custom Reports](Custom-Reports.md) · [Report Widgets](Report-Widgets.md) ·
[Report Definitions](Report-Definitions.md) · [Metrics & Dimensions](Metrics-_26-Dimensions.md) ·
[REST API](REST-API.md)
