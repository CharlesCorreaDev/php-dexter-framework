# Documentation / Home / Control Panel / Criteria System | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Control-Panel/Criteria-System

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Criteria System

## What is it?

The criteria system is a method by which you can email, SMS, or list members or contacts by specific criteria only. It allows you to build complex sets of criteria that a user must match to receive the message or be displayed in results. In this sense it is similar to the [filter system](docs__Control-Panel__Filter-System.md), although it is more complex and allows for more intricate criteria settings.

## Building Criteria

In this example, we will use a targeted search as the basis for the criteria.

Begin by clicking the criteria search icon in the primary navigation bar.

A popup will appear allowing you to select what to search: either members of contacts. Select which set of users to search. In this case we will search for members.

The next screen allows you to establish the basic options for this criteria, as well as load previously saved criteria.

| Parameter | Description |
| --- | --- |
| Name | Reference name for this criteria. Useful if you save it for later use. |
| Save | If you select "Yes", the criteria will be saved for later reuse. It will appear in the "Load Saved Criteria" drop down menu. |
| Privacy | Public allows all employees to use this criteria. Private means only you can use it. |
| Criteria | Whether you want to search all members or just specific members matching criteria (set up in the "Criteria" tab). |
| Type | "All" means that members appearing in the results must match all of the criteria fields that you establish. "Any" means that members appearing in the results must only match one of the criteria fields you establish. |

Clicking on the "Criteria" tab on the popup reveals the criteria builder. This is where you establish the exact criteria that members appearing in the search results must match.

- To add a new field to the criteria list, select it from the "Add a Field" dropdown.
- It will now appear within the "Criteria Fields" section of the popup.
- Select the equator for this criteria and the exact text that must be a match. For example, selecting "=" for state and "IL" for the value would mean that you want to find members who have their state field set to "IL". Please see the examples below for more information.

In the above example (screen shot), we are looking for members who have their city field set to "Chicago", their state field set to "IL", their country set to "US", and who have a "Standard Members" membership type.

## Previewing and Saving

Preview the criteria at any time by clicking on "Preview".

When you are ready to display the full result list, click on "Save".

## Equators

| Equator | Name | Description |
| --- | --- | --- |
| ~ | Similar To | This looks for anything similar to the value of the criteria. So if you enter "City" ~ "Los", it would return any member with a city that has the word "Los" in it. Examples: **Los** Angeles, **Los**tant, Co**los**do, etc. |
| = | Equals | Returns only values matching the exact value inputted. |
| ≠ | Not Equal To | Returns values not matching the exact value inputted. |
| > | Greater Than | Numeric only. Returns items greater than the inputted number. |
| < | Less Than | Numeric only. Returns items less than the inputted number. |
| >= | Greater Than or Equal To | Numeric only. Returns items greater than or equal to the inputted number. |
| <= | Less Than or Equal To | Numeric only. Returns items less than or equal to the inputted number. |

## Example Criteria

| Field | Equator | Value |
| --- | --- | --- |
| State | = | IL |
| City | ≠ | Chicago |
| Zip/Postal | >= | 60500 |
| Zip/Postal | <= | 60700 |

This criteria will return a list of members who are located in Chicago, IL, and live within the zip code range between 60500 and 60700.

| Field | Equator | Value |
| --- | --- | --- |
| City | ~ | Los |
| Member Type | = | Standard Member |

This criteria will return a list of members whose "Member Type" is "Standard Member" and who live in a city with "Los" in the name. Example: johndoe is a member "Standard Member" who lives in "**Los** Angeles".

### Article Links

- [What is it?](#What_is_it)
- [Building Criteria](#Building_Criteria)
- [Previewing and Saving](#Previewing_and_Saving)
- [Equators](#Equators)
- [Example Criteria](#Example_Criteria)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2013/07/11.  
Last updated on 2013/07/11.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)
