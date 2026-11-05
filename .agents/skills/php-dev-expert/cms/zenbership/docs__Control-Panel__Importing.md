# Documentation / Home / Control Panel / Importing | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Control-Panel/Importing

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Importing

## Overview

Importing allows you to create, edit, or delete contacts and members using a properly formatted CSV (comma separated values) file.

## CSV File

Every import is built around a properly formatted CSV file. When creating a CSV file, you will need to follow these conventions:

- Each field that you are importing needs to be "delimited" (separated) by either a comma or a tab character.
- Data should not take up more than a single line. That means that each line after the first line represents one contact or one member.
- The first line should contain the proper "Display Name" or "Caller Tag" of the field you are importing. You can find this information from the "Integration > Fields" page of the administrative dashboard:

You must use the exact display name or caller tag when creating the first line of your CSV file.

- If a "value" for a field contains a comma, you need to enclose the value in quotes.
- The number of values in each line must match the number of fields on the first line of the CSV file.

### Example CSV File

```
username,first_name,last_name,email,company_name,occupation,address_line_1,twitter,city
johndoe,John,Doe,john@doe.com,"Acme, Inc",Lead Developer,100 S State St,http://twitter.com/ascadnetworks,Chicago
janedoe,Jane,Doe,jane@doe.com,Ascad Networks,VP of Sales,272 Broadway St,,New York
```

The above CSV file, when imported, would create two new members, one with username "johndoe", another with username "janedoe".

- Notice how the company name for user "johndoe" contains a comma. Because of this, to not confuse the program, you must enclosed it quotes: "Acme, Inc".
- You can leave a value blank, but you still need to include in on the file. Notice how for "janedoe", the Twitter URL is not available, therefore a empty space is found between the address and city.

### Using Spreadsheet Software

The easiest way to create a properly formatted CSV file is to use spreadsheet software such as [OpenOffice Calc](http://www.openoffice.org/product/calc.html), [Microsoft Excel](http://office.microsoft.com/en–us/excel/), or [Google Docs Spreadsheet](https://docs.google.com/spreadsheet/).

- [Click here](docs__Tutorials__Google-Docs-Spreadsheet-to-CSV.md) for a walkthrough explaining how to create a spreadsheet in Google Docs.

## Available Fields

On top of the standard fields listed at "Integration > Fields", the following fields are available for members and contacts.

### Members

| Field | Type | Description | Default | Required? |
| --- | --- | --- | --- | --- |
| id | Text | Member number (ID). | Random ID according to the "Member ID Format" setting. | Optional |
| username | Text | Username. | Random username in the "u123456789" format. | Optional, but recommended |
| password | Text | Password for the member. | Random password. | Optional |
| email | E-Mail | Member's email. | - | Optional, but recommended |
| status | Status Code | The member's status. This must match a [status code](docs__Membership__Status-Codes.md). | A | Required |
| member\_type | Member Type | Must match a member type from "Members > Membership Types". | - | Optional |
| start\_page | URL | [Login redirection](docs__Membership__Login-System.md) URL for this member. | - | Optional |
| account | Account ID | Must match the ID or name of an existing account. | - | Optional |
| source | Source Name | Must match an existing source from "Contacts > Sources". | - | Optional |
| owner | Employee | Username of the employee who will own this member. | system | Optional |
| joined | Date | Date on which the member joined. | Today | Optional |
| last\_updated | Date | Date on which the member last joined. | - | Optional |

### Contacts

| Field | Type | Description | Default | Required? |
| --- | --- | --- | --- | --- |
| email | E-Mail | E-mail for this contact. | - | Required |
| type | Contact Type | Contact, Lead, Oppotunity, or Customer | Contact | Optional |
| status | Status Code | 1 = Action, 3 = Dead | 1 | Optional |
| public | Boolean | 1 = Public, 0 = Private | 1 | Optional |
| account | Account ID | Must match the ID or name of an existing account. | - | Optional |
| source | Source Name | Must match an existing source from "Contacts > Sources". | - | Optional |
| owner | Employee | Username of the employee who will own this contact. | - | Optional |
| expected\_value | Monetary | Expected value for this contact. | 0.00 | Optional |
| next\_action | Date | Date on which next action is required for this contact. | - | Optional |
| created | Date | Date on which this contact was generated. | Today | Optional |

## Step-by-Step Example

[Click here](docs__Tutorials__Google-Docs-Spreadsheet-to-CSV.md) for a step-by-step example which works through the creation of the spreadsheet and the subsequent importing of the CSV file.

### Article Links

- [Overview](#Overview)
- [CSV File](#CSV_File)
- [Example CSV File](#Example_CSV_File)
- [Using Spreadsheet Software](#Using_Spreadsheet_Software)
- [Available Fields](#Available_Fields)
- [Members](#Members)
- [Contacts](#Contacts)
- [Step-by-Step Example](#Step-by-Step_Example)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2013/07/16.  
Last updated on 2013/08/27.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)
