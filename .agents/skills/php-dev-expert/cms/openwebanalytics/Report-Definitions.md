# Report Definitions · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Report-Definitions

---

Most of OWA's reports are not code. A report is a JSON file that says what it measures, what it breaks that down by, and which widgets draw it. The reports directory holds one file per report, and `OWA\Core\ConfiguredReport` renders all of them.

This page is the format reference. It describes what a definition may say, and — just as important — what it may not, because a definition is meant to be something a person can write without being able to reach into the application.

## Where a definition lives

A definition is a JSON file under a module's `reports` directory:

**`/path/to/owa/modules/Base/reports/pages.json`**

and is registered by the module, by id:

```
$this->registerReport( 'pages', 'reports/pages.json' );
```

The id is what appears in a URL as `reportId=pages`, and what other reports use to link to it.

## A whole definition

```
{
    "title": "Web Pages",
    "metrics": "pageViews,visits,uniquePageViews",
    "widgets": [
        {
            "type": "trend",
            "id": "trend",
            "container": "trend-chart",
            "query": { "dimensions": "date", "sort": "date" },
            "chartMetric": "pageViews",
            "headline": "There were {pageViews.formatted} page views for {uniquePageViews.raw} unique pages."
        },
        {
            "type": "grid",
            "id": "dim",
            "container": "dimension-grid",
            "query": {
                "dimensions": "pagePath,pageTitle,pageType,pageUrl",
                "sort": "pageViews-",
                "resultsPerPage": 30
            },
            "link": {
                "linkColumn": "pagePath",
                "template": { "do": "base.report", "reportId": "document", "pageUrl": "%s" },
                "valueColumns": [ "pageUrl" ]
            },
            "excludeColumns": [ "pageUrl" ]
        }
    ]
}
```

## Top-level keys

**`title`** — required. The report's heading. May contain `{placeholders}`; see [Parameters](#parameters).

**`titleSuffix`** — appended to the title. Detail reports use it to name the thing being detailed.

**`metrics`** — a comma-separated list, measured by every widget that does not override it. Held once at the report level rather than repeated per widget, which is also what lets a [metric set](#metric-sets) replace it in one place.

**`params`** — the request parameters this report reads. See [Parameters](#parameters).

**`widgets`** — the list of things drawn, in order. See [Widgets](#widgets).

**`settings`** — report-wide values, principally `constraints`. See [Constraints](#constraints).

Anything else is refused, by name, when the definition loads. That is deliberate: a misspelled key is otherwise a setting that silently does nothing.

### Keys a definition may not use

A definition cannot name the view or subview that renders it. Every configured report renders through the widget renderer, which is fixed in `ConfiguredReport::SUBVIEW`, and the outer view is set by `ReportController`. Both were definition keys while reports were being converted and every definition ended up naming the same value, so they were required fields with one legal answer.

They are removed rather than defaulted. A key naming a view can name *any* view in the tree, and a report definition is meant to become something a user can author. Widgets own their own rendering, which is what makes fixing this safe.

## Widgets

Each entry in `widgets` draws one thing. The common keys:

| key | meaning |
| --- | --- |
| `type` | required — which widget, see below |
| `id` | the JavaScript variable and element id prefix |
| `container` | the element the widget renders into |
| `query` | this widget's query, merged over the report's |
| `title` | the widget's name |
| `showTitle` | draw the name or not; defaults to drawing it when there is one |
| `colspan` | width in grid columns, out of 12 |
| `rowspan` | height in grid rows, up to 6 |
| `constraints` | narrows this widget's rows further, see [Constraints](#constraints) |
| `metricSets` | limit the widget to named metric sets; defaults to all |
| `more` | a "view full report" link below the widget: `{ "reportId": ..., "label": ... }` |

`more` is the "View Full Report »" link that sits under a summary widget and
points at the report showing the whole thing. It is a property of the widget
rather than a sibling `report-links` widget because it describes *that* widget —
as a sibling it could be reordered away from the thing it refers to and mean
nothing.

It works on any widget type. Every one that declares it today happens to be a
grid, but a trend or a pie may carry one too.

`title` is the widget's *name*, not a layout instruction. Whether it is drawn is a separate choice, which is why `showTitle` exists: a widget can be named without the name appearing, which is what a report builder listing widgets needs, and what a report wants when the surrounding layout already says what the thing is.

### Layout

Widgets are placed on a twelve-column grid. `colspan` is a width out of twelve, `rowspan` a height in rows. A widget with no `colspan` fills the row.

A span wider than the grid is clamped, because CSS grid would otherwise silently add implicit columns and the whole report would narrow.

### `trend`

A chart over time, optionally with a headline and metric boxes beneath it.

| key | meaning |
| --- | --- |
| `chartMetric` | which metric the chart plots; defaults to the metric set's |
| `headline` | a sentence with slots, see [Headlines](#headlines) |
| `showMetricBoxes` | draw the boxes under the chart; on by default |

### `grid`

A table of rows.

| key | meaning |
| --- | --- |
| `link` | make a column's values into links, see below |
| `excludeColumns` | a **list** of column names to fetch but not display |

`link` turns a column into links to another report:

```
"link": {
    "linkColumn": "actionName",
    "template": { "do": "base.report", "reportId": "action-detail",
                  "actionName": "%s", "actionGroup": "%s" },
    "valueColumns": [ "actionName", "actionGroup" ]
}
```

Each `%s` in `template` is filled from the corresponding entry in `valueColumns`, in order, taking the value from the row being drawn. A single column may be written as a plain string rather than a one-item list; most of the shipped definitions do.

`excludeColumns` is a list of names. It used to be a string interpolated straight into the page, so definitions carried their own JavaScript quoting; a list says the same thing and cannot say anything else.

### `pie`

A share-of-total chart, one slice per value of the dimension the widget already queries. The dimension is **not** named separately — naming it twice is only a way for the chart and the query it charts to disagree. `chartMetric` chooses the measure; `chartWidth` sizes it.

### `metric-boxes`

A standalone set of labelled boxes, one per metric in the query, each with a sparkline. Distinct from `trend`, which also draws boxes but as part of a chart: these stand alone and each widget measures its own rows, which is why a widget can carry its own constraint.

The widget's `title` is drawn as the label *inside* the box, so it is not also given a section header.

### `report-links`

A list of links to other reports, with descriptions. No query and no data.

```
{
    "type": "report-links",
    "title": "Related Reports",
    "links": [
        { "reportId": "keywords", "label": "Keywords",
          "description": "See what keywords your visitors are using to find your web site." }
    ]
}
```

Every link needs a `reportId` and a `label`. Written as markup these could not be checked, and two on the Content report pointed at the wrong report for years. As data, a test resolves every target — and not only these: the `more` link and a grid's per-column link name reports too, and all three kinds are checked against the registry.

### `browser-badge`

The browser's icon and family name, used above a browser detail report. Takes `properties`.

## Parameters

A report declares the request parameters it reads:

```
"params": { "ad": { "lowercase": true }, "actionGroup": {} }
```

Declared rather than inferred from where they are used, so a definition says what it reads — and so a test can supply every parameter a report takes without parsing it.

The only option is `lowercase`, which normalises the incoming value.

A declared parameter can then be used as `{name}` anywhere a value is authored — in `title`, in `titleSuffix`, in a constraint, or nested inside a widget:

```
"title": "Traffic from {referralWebSite}"
```

## Constraints

A constraint narrows which rows a report or a widget sees. They are written as parts, not as a string:

```
"settings": {
    "constraints": [
        { "dimension": "medium", "value": "organic-search" },
        { "dimension": "referralWebSite", "fromParam": "referralWebSite" }
    ]
}
```

Each part needs a `dimension`, and either a literal `value` or a `fromParam` naming a declared parameter. `operator` defaults to `==`.

Structured rather than a template string because the two kinds of value are encoded differently — a value from the request is URL-encoded, a literal is not. As one string, that difference would have to be spelled with a filter, and every author would have to remember which side of the `==` they were on.

A `fromParam` that names an undeclared parameter is refused. Otherwise the constraint quietly becomes `dimension==`, which matches nothing and reads as a report with no data rather than as a broken definition.

### Widget constraints add; they never replace

A widget may carry its own `constraints`, in the same form. They are **added** to the report's:

| declared | resulting constraint |
| --- | --- |
| report only | `host==example.com` |
| widget only | `medium==organic-search` |
| both | `host==example.com,medium==organic-search` |

So a widget can only narrow, never widen. This matters beyond the definition: a grid's filter control seeds itself from the widget's own query URL and replaces the whole constraint string when the reader edits it. A widget that replaced the report's constraint would open a detail report's filter showing only its own — and the reader's first edit would silently widen from one host to every host.

Writing `constraints` *inside* a widget's `query` is refused, because `query` is merged over the report-wide defaults and a `constraints` key there would win outright and drop the report's. The same word, in almost the same place, meaning the opposite, with no error between them, is worse than either.

If a widget ever genuinely needs to escape the report's constraint, that wants to be a key that says so.

## Metrics: widgets replace

Metrics work the other way round. A widget's `query.metrics` **replaces** the report's, or the active metric set's:

```
{ "type": "grid", "query": { "metrics": "transactionRevenue", "dimensions": "source" } }
```

The asymmetry is deliberate, because the two things differ in kind. Metrics are a *selection* — which columns this widget measures. Appending them to the set's would make a widget's columns change depending on which metric set was active, which defeats the point of pinning them. Constraints are a *conjunction*; adding one is what filtering means.

The rule, stated once: **a key inside `query` replaces that query parameter; a key on the widget composes with the report's.**

## Metric sets

A metric set is one way of measuring a report's dimension — site usage, e-commerce, a goal group. The reader switches between them, drawn as tabs today.

Sets are **not** configuration and a definition cannot enumerate them. Which sets exist depends on the site: every site has site usage, a site with e-commerce reporting enabled has that, and a new set appears the moment somebody adds a goal. They are derived per site and merged with whatever the report declares.

A report that declares no `metrics` is rendered once per set. A report that declares `metrics` is rendered once, with those.

A widget may name which sets it appears for:

```
"metricSets": [ "ecommerce" ]
```

Omit it and the widget renders for all of them.

## Headlines

A headline is a sentence with named slots. The widget does the substituting; a definition carries no template.

```
"headline": "There were {visits.formatted} {visits|visit|visits} from all mediums."
```

| slot | meaning |
| --- | --- |
| `{metric.formatted}` | the formatted value, keeping its thousands separators |
| `{metric.raw}` | the underlying value |
| `{metric|singular|plural}` | picks by count; `1` is singular, `0` is plural |

Both forms of value exist because the shipped sentences reach for both, sometimes on different metrics in one sentence.

An unknown metric renders as nothing rather than leaking the slot text into the sentence.

These used to be [jqote](https://github.com/aefxx/jQote2) templates carried in the report's configuration. A definition that can hand a template engine arbitrary source cannot safely be authored by a user, which is what report configuration is meant to become — so the message stays data and the widget does the work.

## What the format refuses

A definition is validated when it loads, and refused with a message naming the problem. Refusals worth knowing:

- an unknown top-level key, by name
- no `title`
- naming a `view` or `subview`
- a widget with no `type`
- a constraint with no `dimension`, or with neither `value` nor `fromParam`
- a constraint reading an undeclared parameter
- `constraints` inside a widget's `query`
- `excludeColumns` given as a string rather than a list
- a `report-links` widget with no links, or a link missing `reportId` or `label`
- a `more` link with no `reportId`

The pattern behind most of these: a report definition should not be able to carry executable code, name a file on disk, or name a class. Where a definition once did any of those, it now names data and the widget does the rest.

## See also

[Reports](Reports.md) · [Custom Reports](Custom-Reports.md) · [Report Widgets](Report-Widgets.md) · [Metrics-&-Dimensions](Metrics-_26-Dimensions.md) · [REST-API](REST-API.md) · [Data-Access-API](Data-Access-API.md) · [Creating-A-New-Module](Creating-A-New-Module.md)

## What a definition must satisfy

A report is refused rather than saved if it does not hold together. These are
the rules a custom report is checked against, and shipped definitions are
checked against the same ones.

- **Every widget must name what it measures.** A widget with no `metrics` key,
  or with an empty one, is refused — it would render an empty frame with no way
  to tell that from a query returning nothing. A widget may inherit the report's
  metric set instead of naming its own, provided that set exists.
- **A card shows one metric against one dimension.** `grid-card` draws no
  explorer controls and is a quarter of a row wide, so a second column has
  nowhere to go.
- **A pie must name its own metric.** It draws one series and cannot pick.
- **At most four metrics and four dimensions** per widget.
- **Metrics in one widget must share a fact table.** Metrics from different fact
  tables cannot be resolved in a single query, so the combination is refused at
  save time rather than producing an error at render time.
- **Every metric and dimension must resolve** through the registry by name. An
  unknown name is refused, including in a report-level metric set.
