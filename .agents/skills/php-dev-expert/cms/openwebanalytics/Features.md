# Features · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Features

---

## Invocation

- **PHP SDK** — add OWA tracking to your PHP application via the [OWA PHP SDK](https://github.com/Open-Web-Analytics/owa-php-sdk). This allows for an easy way to build web analytics right into your application logic.
- **Javascript Tracker** — invoke OWA from Javascript. This allows for remote logging and integration with non-PHP based applications.
- **REST web service** — post tracking events directly over HTTP from any language. See [REST API](REST-API.md).

## Tracking/Reporting

- Track page views, visits, and unique visitors over time
- Track unique, new, and repeat visitors over time
- **Multiple Web Site Support** — track any number of web sites and view statistics in aggregate or by site
- **Click-streams** — view the actual click-stream of each visitor
- **Click Tracking** — track where exactly on a web page users are clicking and view clicks by browser type
- **Click Heat Maps** — view a heat map of where users are clicking on your web pages
- **RSS/ATOM subscription tracking** — track unique feed readers, reader types, and feed requests
- **Visitor Aging** — understand the age of your repeat visitors
- **Canned and Custom Time Periods** — generate reports using pre-defined reporting periods or custom date ranges
- **Referral Analysis** — view the sites, search engines and search terms that refer visitors
- View visits by user agent
- Track entry and exit pages
- Track pages by custom page types
- **Do Not Track support** — the Javascript tracker automatically honors the visitor's browser "Do Not Track" preference and records nothing for opted-out visitors

## Development

- Full MVC based framework
- Module framework allows developers to extend OWA's entities, events, reports, and graphs without modifying the base components
- Plugin framework for authentication, database access objects, data validation, and geo-location
- Object Relational Mapping layer
- Lite templating layer
- Event handlers

## Data Management

- **Date-partitioned fact tables** — fact tables are split into periods by date on MySQL, so removing old data is a metadata operation rather than a `DELETE` over millions of rows, and reports read only the periods they need. See [Partitioning Fact Tables](Partitioning-Fact-Tables.md).
- **Retention windows** — keep a fixed window of history, applied by dropping whole periods. Off by default: nothing is deleted unless you ask for it.
- **Scheduled maintenance** — periodic work runs from a job scheduler driven by a single cron entry. Jobs are registered in code and retuned per installation. See [Scheduled Jobs](Scheduled-Jobs.md).

## Deployment

- Events can be written to the database asynchronously
- OWA can run on multiple front-end web servers and write to a remote database
- Event logging and the admin/reporting user interface can run on the same or separate servers

## WordPress Specific Features

- Track visitors by WordPress user name or the e-mail address they use in comments
- Track all WordPress page types (posts, pages, authors, archives, categories, etc.)
- Track the number of comments made by visit
- Reporting accessible via the Admin Dashboard
- Track subscribers to RSS/Atom feeds

## MediaWiki

The bundled MediaWiki plugin was removed and the standalone extension is no longer
maintained. Track a MediaWiki site with the [Javascript Tracker](Javascript-Tracker.md) or the
[OWA PHP SDK](https://github.com/Open-Web-Analytics/owa-php-sdk). See
[Integration Plugins](Integration-Plugins.md).
