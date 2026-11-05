# Report Widgets · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Report-Widgets

---

A report is made of widgets. Each widget draws one metric-and-dimension
combination, and its type determines how many of each it may use, whether a
reader can regroup it, and how wide it is.

Choose the type first — the builder asks for different things depending on it.

## Types

| Type | Description | Width |
| --- | --- | --- |
| Table (`grid`) | A table the reader can regroup and filter. | full row |
| Table card (`grid-card`) | One metric by one dimension, no controls. Rows can link to a detail report. | quarter row |
| Pie (`pie`) | Share of one metric across the values of one dimension. | quarter row |
| Trend (`trend`) | One or more metrics over time. | half row |
| Trend card (`trend-card`) | Totals above a chart, at half width. | half row |
| Metric boxes (`metric-boxes`) | Period totals, one box per metric. | — |

## Limits by type

|  | Metrics | Dimensions | Reader controls | Links to another report |
| --- | --- | --- | --- | --- |
| `grid` | up to 4 | up to 4 | yes | no |
| `grid-card` | 1 | 1 | no | yes |
| `pie` | 1 | 1 | no | no |
| `trend` | up to 4 | `date` + 1 other | no | no |
| `trend-card` | up to 4 | `date` only | no | no |
| `metric-boxes` | up to 4 | none | no | no |

A report may contain up to 10 widgets.

## Notes on specific types

**Table and table card.** A `grid` carries the control bar that lets a reader
regroup and filter, which needs the full row. A `grid-card` has no controls and
is the only type whose rows link to another report.

**Trend.** The first grouping is always a date; the reader chooses day or month
at the chart, and the definition holds the default. A `trend` may add one further
dimension, whose values become the separate lines.

That second dimension cannot be another time dimension — `date`, `day`, `month`,
`year`, `dayofweek`, `dayofyear`, `weekofyear` — since the x axis is already one
of them.

**Trend card.** Cannot be broken out by a dimension: at half width there is no
room for a legend and no grid beneath it to identify the lines. It names its own
metrics rather than inheriting the report's, so two cards can show different
things.

## Visualizations

A visualization is a report built from something other than metrics and
dimensions, so the builder asks different questions for it.

| Kind | Shows |
| --- | --- |
| Funnel | How many people reached each step of a path, and where they left. |

A funnel is defined as a path. See [Conversion Tracking](Conversion-Tracking.md).

## See also

[Custom Reports](Custom-Reports.md) · [Reports](Reports.md) ·
[Report Definitions](Report-Definitions.md) · [Metrics & Dimensions](Metrics-_26-Dimensions.md)
