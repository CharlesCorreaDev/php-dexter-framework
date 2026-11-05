# Conversion Tracking · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Conversion-Tracking

---

Conversions are the things you actually want people to do on your site. In OWA you
describe one as a **goal event**: a name, and a condition that says what counts.

Examples of a conversion might be:

- the "confirmation" or "receipt" page shown after a purchase
- the "thank you" page shown after a form is submitted
- the page shown after someone subscribes to a newsletter

Goal events are set up entirely through the OWA web interface. They need no extra
instrumentation or tagging on your pages — you are describing traffic you are
already collecting.

## Setting up a goal event

1. Choose the Profile you want the goal on, using the site control at the top of
   the reporting screens.
2. Open **Goal Events**.
3. Add a goal event, or pick an existing one to edit.

### What you fill in

| Field | What it does |
| --- | --- |
| **Name** | What the goal is called in reports. |
| **Group** | Optional. Groups related goals together for reporting. |
| **Conditions** | One or more rules that say what counts as this goal. See below. |
| **Match** | Whether **all** conditions must hold, or **any** one of them. |
| **Count** | Whether to count the goal once per session, or once per event. |
| **Value** | Optional. What one conversion is worth, used for goal value reporting. |
| **Active** | Turn the goal off without deleting it. |

### Conditions

A condition is a **property**, an **operator** and a **value**.

The property list is drawn from what your events actually carry, so it grows as
OWA collects more — **Page URL** is first and always available, which is what most
goals test. The operators are:

| Operator | Matches when the property... |
| --- | --- |
| `exact` | is exactly the value |
| `begins` | starts with the value |
| `contains` | contains the value |
| `regex` | matches the value as a regular expression |
| `not` | is anything other than the value |
| `gt` / `lt` | is greater / less than the value |

A `regex` value is a pattern without delimiters. It matches anywhere in the
property, so `/thanks` also matches `/shop/thanks/2`; anchor it with `^` and `$`
to match the whole value. It ignores case. An `@`, as in an email address, may be
written as is (earlier releases never matched such a pattern).

A goal event with **no** conditions matches nothing, deliberately — an empty rule
would otherwise count every event on the site.

Because conditions can name any tracked property, a goal is not limited to "someone
reached this page". You can just as well count events carrying a particular value,
and combine several conditions with **all** or **any**.

## Funnels

A funnel shows where people drop out of a path you expect them to take. For an
e-commerce site that might be:

1. adding an item to the cart
2. entering shipping details
3. selecting a payment method
4. reaching the confirmation page

In OWA a funnel is **its own thing**, built as a visualization, and it names the
goal event it ends at. That means a funnel is not a property of a goal: two funnels
can lead to the same goal event, and most goal events have no funnel at all and do
not need one.

Each funnel step is described the same way a goal condition is — a property, an
operator and a value — so a step is not restricted to being a page either.

## How many goals can I have?

**Fifteen per Property that actually record conversions.**

OWA reports goals through a family of numbered metrics — `goal1Completions`,
`goal2Completions` and so on — and there are fifteen of them. Each goal event you
create takes the next free number.

Once all fifteen are used the screen will still let you create another one, and it
will appear in the list — but **it will not record conversions**. Conversion
matching runs over the numbered goals only, so a goal event with no number is never
evaluated against your traffic. Nothing warns you about this at the moment, so if
you are near the limit, check the number of goal events on the Property before
adding another and expecting data from it.

If you need the sixteenth goal more than one of the first fifteen, delete or
deactivate one you no longer use and create the new one, which will take the freed
number.

The count comes from a `numGoals` setting, but **do not raise it on an existing
installation.** The session table's goal columns are generated from that number,
and no schema update adds the new ones, so raising it describes columns the table
does not have.

If you are upgrading, your existing goals kept their numbers, so any saved report
naming `goal3Completions` still means the goal it always did. Empty slots were
dropped rather than migrated as blank goals.

## Related

- [Organizations, Properties and Profiles](Organizations-Properties-and-Profiles.md) — goals belong to a Property
- [Ecommerce Tracking](Ecommerce-Tracking.md) — for transactions and revenue
- [Metrics & Dimensions](Metrics-_26-Dimensions.md) — the goal metrics available in reports
