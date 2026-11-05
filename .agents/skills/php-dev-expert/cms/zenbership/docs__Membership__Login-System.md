# Documentation / Home / Membership / Login System | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Membership/Login-System

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Login System

## Overview

- **Location**: http://members.yoursite.com/![Additional Information](/templates/html/blank_slate/imgs/icon-help.png)Remember that you will need to change "http://members.yoursite.com/" to the actual URL at which Zenbership is installed.login.php

The login system allows members to log into their account and access any secure content they have access to, as well as the [self–service dashboard](docs__Membership__Member-Dashboard.md).

## Login Process

The login process works as follows:

- Member inputs their username and password
- If it is incorrect, they can try again. If they fail to input the correct credentials a certain number of times, their account with be locked out, and/or they will need to input a CAPTCHA to continue. These settings are controlled from "Members > Options", specifically the "Failed Logins Before CAPTCHA?" and "Max Failed Login Attempts" options.
- If it is correct, the process continues.
- The member is checked to ensure that they account is in good standing (see [member statuses](docs__Membership__Status-Codes.md)).
- A session is created for the member and he/she is logged into all secure content.
- The member is redirected to the location specified in the "Login Redirection" setting at "Members > Options".
- Note that several factors may override this default setting. See "Login Redirection Logic" below.

## Login Redirection Logic

Where a member is redirected after a successful login depends on several factors:

- Has the member not updated his/her information in longer than the time specified in the "Recommended Update Time" setting ("Members > Options")? If so, the program will redirect the member to the "Membership Update Form" page.
- Does the member have a custom "Start Page" established in their membership settings?
- Does the account to which the member belong have a custom "Start Page" established in its settings?
- Does the form from which the member logged in have a hidden "url" field?
- Is there are setting inputted for the "Login Redirection" option within "Members > Options"?
- If none of the above apply, the user is redirected to the [member management dashboard](docs__Membership__Member-Dashboard.md).

### Login Redirection Option

You can input any of the following into the "Login Redirection" option, found at "Members > Options".

- "manage": Redirects to the member management dashboard.
- "announcements": Redirects to the announcements page of the member dashboard.
- Any URL: Redirects to the URL you have specified. This must be a full URL in the correct format:
- Example: http://members.yoursite.com/![Additional Information](/templates/html/blank_slate/imgs/icon-help.png)Remember that you will need to change "http://members.yoursite.com/" to the actual URL at which Zenbership is installed.Start-Page-Name

## Preventing Concurrent Logins

- [Click here](docs__Membership__Preventing-Concurrent-Logins.md) for information on preventing concurrent logins.

## Trackstat

- [Click here](docs__Membership__Trackstat.md) for information on the Trackstat system.

## Login Activity

You can track login activity from "Members > Login Activity".

## Announcements

[Click here](docs__Membership__Login-Annoucements.md) for information on creating login announcements.

### Article Links

- [Overview](#Overview)
- [Login Process](#Login_Process)
- [Login Redirection Logic](#Login_Redirection_Logic)
- [Login Redirection Option](#Login_Redirection_Option)
- [Preventing Concurrent Logins](#Preventing_Concurrent_Logins)
- [Trackstat](#Trackstat)
- [Login Activity](#Login_Activity)
- [Announcements](#Announcements)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2013/07/13.  
Last updated on 2013/08/09.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)
