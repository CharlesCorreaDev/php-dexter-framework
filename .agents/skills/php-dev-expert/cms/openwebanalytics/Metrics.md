# Metrics · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Metrics

---

Metrics are what OWA counts — page views, visits, unique visitors. Most of them
are **declarations**, not classes: a module says what a metric measures and
against which entity, and the reporting engine builds the query.

## Declaring a metric

A module declares its metrics in `registerMetrics()`:

```
function registerMetrics() {

    $this->registerMetricDefinition(array(
        'name'        => 'pageViews',
        'label'       => 'Page Views',
        'description' => 'The total number of pages viewed.',
        'group'       => 'Site Usage',
        'entity'      => 'base.request',
        'metric_type' => 'count',
        'data_type'   => 'integer',
        'column'      => 'id'
    ));
}
```

| Key | Meaning |
| --- | --- |
| `name` | The name used in reports, the REST API and report definitions. |
| `label` / `description` | What a person reading a report sees. |
| `group` | The heading it appears under when metrics are listed. |
| `entity` | Which table it is measured against. |
| `metric_type` | How it is aggregated — `count`, `sum`, and so on. |
| `data_type` | `integer`, `currency`, `percentage`. |
| `column` | The column the aggregate is applied to. |

**The same name may be declared against more than one entity.** `pageViews` is a
`count` of `id` on `base.request` and a `sum` of `num_pageviews` on
`base.session`. Which one runs depends on what the report groups by, so a metric
does not have to know which table a given report will reach for.

## Metrics that are not declarations

A handful cannot be expressed as an aggregate over one column and are still
classes, in a module's `Metric` directory — the goal-completion metrics, and
`ActionsPerVisit` and `RepeatVisitors`. These are the exception. Write a
declaration unless the metric genuinely has to issue its own query.

## See also

- [Metrics & Dimensions](Metrics-_26-Dimensions.md) — every metric and dimension OWA ships
- [Report Definitions](Report-Definitions.md) — how a report says which metrics it wants
- [Creating A New Module](Creating-A-New-Module.md) — where `registerMetrics()` lives
- [Data Access API](Data-Access-API.md) and [REST API](REST-API.md) — reading metrics out
