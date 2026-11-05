# Custom Reports · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Custom-Reports

---

In addition to the reports OWA [ships](Reports.md), you can define your own. A
custom report behaves like any other: same URL form, same period and site
controls.

## Building one

1. Open **Custom Reports** in the reporting interface.
2. Create a report and give it a name. The name appears in the list and as the
   report heading.
3. Add a widget and choose its type. The type determines what you are asked for
   next — see [Report Widgets](Report-Widgets.md).
4. Choose the widget's metrics and dimensions. Not every combination is valid;
   see [Metrics & Dimensions](Metrics-_26-Dimensions.md).
5. Save.

A report cannot be saved until each widget names at least one metric.

Widget and report limits are listed in [Report Widgets](Report-Widgets.md).

## Permissions

| Action | Capability |
| --- | --- |
| Open a report by its URL | `view_reports` |
| See the custom report list | `view_site_list` |
| Create, edit or delete | `edit_reports` |

**Opening a report and finding it in the list are governed by different things,
and the list is the narrower of the two.**

A report reached by its URL renders for anyone with `view_reports`. That is what
makes the URL shareable, and it is safe because a custom report can show nothing
its reader could not already query for themselves.

**The list shows you the reports you created, plus any their author has shared.**
Holding `view_site_list` gets you the screen; it does not by itself get you other
people's reports on it. A user who may see everyone's — one holding `edit_users` —
sees them all regardless.

Editing is narrower still: a report may be edited by the user who created it, or
by a user who may see every report. Deleting a report removes the definition
only; the underlying event data is unaffected.

## Sharing

A report's builder has **Show this report in everyone's list**. It is off by
default.

**Sharing decides whether a report is found, not whether it may be opened.**
Anyone with `view_reports` can already open any custom report from its link —
that is what makes the link worth sending, and it is safe because a custom report
can show nothing its reader could not already query for themselves. What sharing
changes is whose *list* it appears on.

Two consequences worth knowing:

- Un-sharing does not revoke anything. A link somebody already has goes on
  working; the report simply stops appearing in their list.
- A shared report is still only editable by its author, or by someone who may see
  every report. Sharing changes listing and nothing else.

## Filtering the list

The list has **All** / **Just mine**. "Just mine" narrows to the reports you
created, and means the same thing for an administrator — their own, not their own
plus everyone's. It is a way of looking at the list rather than a permission, so
it can only ever narrow, and it survives sorting.

See [User Permissions](User-Permissions.md).

## Opening one

Custom reports use the same URL form as shipped reports — see [Reports](Reports.md). They
are also readable through the [REST API](REST-API.md).

## Relationship to report definitions

Custom reports and [report definitions](Report-Definitions.md) are the same model
with different sources. A custom report is a database row created through the
interface and specific to one installation; a report definition is a JSON file
shipped by a module and present in every installation that has it. Both are
validated against the same rules.

## See also

[Report Widgets](Report-Widgets.md) · [Reports](Reports.md) ·
[Report Definitions](Report-Definitions.md) · [User Permissions](User-Permissions.md)
