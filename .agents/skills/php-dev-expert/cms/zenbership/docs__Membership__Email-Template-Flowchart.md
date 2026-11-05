# Email Template Flowchart | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Membership/Email-Template-Flowchart

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Email Template Flowchart

This article outlines which email template is sent when a specific task occurs. It references emails listed within the "Integration > E-mail Templates" section of the administrative dashboard.

- When a member is created from the admin dashboard, "Membership Created (From Admin)" is sent.
- When a member registers from a registration form
- If the default status is set to "Active", "Registration Complete" is sent.
- If you set up your registration form to require email confirmation, "E-Mail Confirmation Required" is sent
- If you set up your registration form to require admin approval, "Application Awaiting Activation" is sent.
- In both scenarios 2 or 3 above, once activated, "Account Activated" is sent.
- If the member purchases a product as part of the registration process, or directly from the shop, "Cart Receipt" is sent.
- If the product purchased is a subscription, "Subscription Created" is also sent.
- When a subscription is about to renew, "Subscription: Upcoming Renewal Notice" is sent.
- When this email is sent is controlled by the "Upcoming Renewal Reminder" option found in "Shop > Subscriptions > Options"
- When the subscription renews successfully, "Subscription Renewed" is sent.
- If the subscription fails to renew, "Subscription renewal failure notice" is sent.
- When this email is sent is controlled by the "*Maximum Failed Retries*" and "*Retry Spacing*" options found in "Shop > Subscriptions > Options"
- If the subscription fails to renew a certain number of times (as set in your options), or if the member manually cancels his/her subscription, "Subscription Canceled" is sent.
- If a subscription attempts to renew but there is no credit card on file for the member, an invoice is created and "Invoice" is sent.
- Whenever an invoice is created, "Invoice" is sent.
- Members are reminded before the invoice is due and "Invoice payment reminder" is sent.
- Under "Shop > Invoices > Options", option named "*Reminder No. 1*" controls how long before the invoice's due date
- If an invoice is overdue, the member is notified and "Overdue invoice notice" is sent.
- The number of times the member is notified depends on your options found in "Shop > Invoices > Options"
- "*Overdue Reminders*" tells the program how often after an invoice is overdue to e-mail the member to let them know it is overdue.
- "*Maximum Reminders*" tells the program how many times to inform the member the invoice is overdue before marking it as "Overdue with Unresponsive Client"
- If an invoice is paid in full, "Invoice Settled" is sent, as well as "Cart Receipt", and potentially "Subscription Renewed" is the invoice in linked to a subscription.

### Article Links

- No internal page links.

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2017/04/13.  
Last updated on 2017/04/13.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)
