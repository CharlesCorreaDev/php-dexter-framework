# Documentation / Home / Control Panel / Filter System | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Control-Panel/Filter-System

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Filter System

## What are Filters?

Filters are present on any listings page throughout the administrative control panel and can be used to quickly "filter" results based on specific criteria. Filters work much like [criteria](docs__Control-Panel__Criteria-System.md), the main difference being that they provide less flexibility than criteria, and that they cannot be saved.

## Using Filters

To apply filters to any listings page:

- Click on "Filters" in the secondary navigation bar.
- A series a fields will appear. Input the value for each field that you want to filter by, or alternatively, filter alphabetically using the list of letters.
- Click on "Apply Filters" to reload the table with the new results.

### Date Ranges

Some fields allow you to specify a date range (see "Joined" field in the above screen shot). Date ranges work as follows:

- If you input only the first date field, the equator applies to the query.
- If you input the first and second date fields, it will always create an inclusive range.

Consider the following example for filtering a member by join date:

| Equator | 1st Date | 2nd Date | Result |
| --- | --- | --- | --- |
| = | 2013-07-11 |  | Only members who joined on 2013-07-11 |
| = | 2013-07-11 | 2013-07-18 | All members who joined on or after 2013-07-11 and on or before 2013-07-18. Notice how the "equals" equator no longer applies to the filters. |

## Scope

Filters are inclusive, meaning that an item will only be displayed if it matches every filter field that you input. So if you enter the following filters:

- **City:** Chicago
- **State:** IL
- **Zip:** 60605

Only members who live in Chicago, in the state of IL, and in ZIP code 60605 will be returned.

### Article Links

- [What are Filters?](#What_are_Filters)
- [Using Filters](#Using_Filters)
- [Date Ranges](#Date_Ranges)
- [Scope](#Scope)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2013/07/11.  
Last updated on 2013/07/11.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)
