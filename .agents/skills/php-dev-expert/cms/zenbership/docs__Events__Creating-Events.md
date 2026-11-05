# Documentation / Home / Events / Creating Events | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Events/Creating-Events

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Creating Events

## Overview

An event is a gathering of people, either online or in person, to which can register to attend. Registration can be free or paid.

## Creating an Event

To create an event, begin by clicking on "Event" in the "Quick Add![Additional Information](/templates/html/blank_slate/imgs/icon-help.png)The quick add menu is located in the primary navigation bar. It is a green icon with a white plus sign." menu. The event creation popup will appear.

Overview Tab

| Field | Description |
| --- | --- |
| Status | Specify whether the event is live or hidden. Hidden events won't appear on the calendar. |
| Name | Provide the event with a name. |
| Tagline | Provide the event with a "tagline". This is a |
| Description | Long description of the event. |
| Confirmation Message | A message which only appears to the registrant after his/her registration has been confirmed. |
| Calendar | The [calendar](docs__Events__Creating-Calendars.md) on which this event will appear. |
| Template | The template that controls the layout for the event page. You can create custom HTML templates that can be used to render the event. |
| Tags | [Tags](docs__Events__Event-Types.md) or "labels" that are applied to the event and color-code it on the calendar. |

Dates Tab

Location Tab

Attendance Tab

## Dates Tab

| Field | Description |
| --- | --- |
| Starts | The date and time on which the event starts. |
| Ends | The date and time on which the event ends. |
| Start Registration | The date and time on which registration for the event starts. Leave blank to allow registrations right away. |
| Close Registration | The date and time on which registrations for the event end, meaning they are no longer being accepted online. |
| End Early Bird | Date and time on which the early bird pricing, if any, is no longer available. |

## Location Tab

| Field | Description |
| --- | --- |
| Online/Offline | An online event is an event being held over the world wide web, such as a screen sharing webinar. An offline event is an "in-person" event that is held at a physical location. |
| Name | Name of the location at which the event is being held. |
| Address | **Offline Event Only:** Allows you to input a full address for the event's location. Note that when you establish timeline entries, you can specify different addresses for each timeline entry if they are not being held at the primary location. |
| Website URL | **Online Event Only:** This would replace the "Location Details" if you select the "Online" event type. Allows you to input the URL on which the event will take place. |

## Attendance Tab

| Field | Description |
| --- | --- |
| Limit Attendees? |  |
| Attendance Limit |  |
| Only allow members to view event |  |
| Only allow members to register for event |  |
| Allow attendees to bring guests? |  |
| Max per attendee | Limits the maximum number of guests per attendee. |
| Ticket Options | This section allows you to create the pricing options for your event. See below for details. |

### Ticket Options

- **Standard Ticket:** A standard ticket for the event, no member or early bird discounts.
- **Guest Ticket:** A guest ticket for the event. Required if you want to charge attendees for their guests.
- **Early Bird Ticket:** An early bird ticket, generally lower price than a standard ticket. Will disappear as an option after the "Early Bird Period" ends.
- **Standard Ticket (Members Pricing):** A standard ticket available to members only. The member must be logged into his/her account to receive this pricing when registering for the event.
- **Early Bird Ticket (Member Pricing):** An early bird ticket available to members only. The member must be logged into his/her account to receive this pricing when registering for the event.
- **Add-on Product:** These are optional products that can be offered to attendees during the registration process. Unlike the other ticket types, the purchase of a add-on product is not required to complete registration process.

Timeline Tab

Forms Tab

Media Tab

## Timeline Tab

The timeline tab allows you to build a "schedule of events" for the event. Essentially, it allows you to give your attendees a schedule of what is happening at the event, the location that item is happening at, and the start/end date/time for each timeline entry.

## Forms Tab

This section allows you to build both a primary registrant's registration form and a guest registration form. Please [click here](docs__Integration__Form-Builder.md) for information on the form builder.

## Media Tab

This tab allows you to upload both cover photos and additional photos for the event. Cover photos appear at the top of the event's page (see below). If you upload multiple cover photos, the program will create an automatically rotating slide show of the images.

Additional photos appear on the events details page next to the event description.

You can crop and edit any image by clicking on the "Files" tab within the event management page. [Click here](docs__Tutorials__Cropping-and-Editing-Images.md) for information on cropping and manipulating images.

## The Public Event Page

Here is an example of how the above event would appear to a user once rendered online. The page itself is rendered through the template system using the following templates:

**Primary Template**

- "Viewing Event": Wrapper template into which all sub-templates are rendered. Sub-templates replace the %wrapper\_content% caller tag on this template.

**Sub-Templates**

- "Event Details": The "Overview" page for the event, as pictured below.
- "Event Timeline"
- "Event Register Pricing Options"

**Registration Process**

- "Event Registration Form"
- "Event Register Guests Number"
- "Event Register Guests Form"
- "Event Registration Confirmed"

Public Event Page

| # | Description |
| --- | --- |
| 1 | Event Name |
| 2 | Event Tagline |
| 3 | Event cover photos, as uploaded in the "Media Tab" under "Cover Photos". The program will automatically create a rotating "slideshow" with all cover event photos. |
| 4 | Timeline of events, as created above in the "Timeline Tab". |
| 5 | Registration options for the event, as established in the "Attendance Tab" |
| 6 | Additional photos, as uploaded in the "Media Tab" under "Additional Photos". |
| 7 | General details, including start and end date, the location's name, and the capacity. |
| 8 | Registration dates and current status, including pre-registration, early bird period, registration period, or registration closed. |
| 9 | Map of the event's location, automatically generated based on the event's location. |

Event Timeline Page

Event Registration Page

### Article Links

- [Overview](#Overview)
- [Creating an Event](#Creating_an_Event)
- [Dates Tab](#Dates_Tab)
- [Location Tab](#Location_Tab)
- [Attendance Tab](#Attendance_Tab)
- [Ticket Options](#Ticket_Options)
- [Timeline Tab](#Timeline_Tab)
- [Forms Tab](#Forms_Tab)
- [Media Tab](#Media_Tab)
- [The Public Event Page](#The_Public_Event_Page)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2013/07/16.  
Last updated on 2013/09/15.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)
