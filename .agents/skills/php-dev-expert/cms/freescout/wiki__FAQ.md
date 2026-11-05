# FAQ · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/FAQ

---

> *Also see [Modules FAQ](https://freescout.net/modules-faq/), FreeScout [Troubleshooting](wiki__Installation-Guide.md#11-troubleshooting), [Sending Issues](wiki__Sending-Issues.md) and [Fetching Issues](wiki__Fetching-Emails.md#troubleshooting-fetching-issues)*.

### Are there any limitations on the number of agents or tickets?

No. There are no any limitations.

### Is there any migration tool which can be used to migrate to FreeScout from another help desk?

No for now. Migration will be possible after FreeScout API will be implemented ([#148](https://github.com/freescout-help-desk/freescout/issues/148)).

### How do customers create their own conversations?

Customers create conversations by sending emails to the mailbox's email address or they can submit tickets from [End-User Portal](https://freescout.net/module/end-user-portal/).

### Is it possible to have separate contacts/customers per mailbox?

Customers in FreeScout are not divided by mailboxes and support agents can see and modify all customers in the system. Most people are using FreeScout inside one company/organization and prefer this behaviour.

And there is a way to hide from non-admins customers from non-visible mailboxes - use "Manage » Settings » Customer Visibility" option. Keep in mind that on pages where customers are being searched or listed this option may reduce the performance if you have quite a lot of conversations.

Customers are not duplicated and not stored on a per-mailbox basis, instead there is *one table* containing *all* customers. And if some support agent wants to send a message to the invisible yet customer, the conversation or draft is being created and that customer becomes visible to the support agent.

### Is it possible to change "Waiting Since" field to show the time of the first unanswered customer message?

By default "Waiting Since" field shows the "Time of the last customer activity". In order to treat Waiting Since column as "Time of the first unanswered customer message" set `WAITING_SINCE_AS_FIRST_UNANSWERED_CUSTOMER_MESSAGE=true` in the .env file and [clear cache](wiki__Clearing-the-Cache.md).

### How to remove branding from emails to customers

![2024-05-06_20-14-31](https://private-user-images.githubusercontent.com/40499291/328260495-c594449b-08a4-489a-abfe-5fe6cc6e1164.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1NzQsIm5iZiI6MTc5MzIxMzI3NCwicGF0aCI6Ii80MDQ5OTI5MS8zMjgyNjA0OTUtYzU5NDQ0OWItMDhhNC00ODlhLWFiZmUtNWZlNmNjNmUxMTY0LnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNjEwMjglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjYxMDI4VDE4NDc1NFomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPWJiMTRhMTM5YTgyZjM1ZjQ1M2ZhMDc3MTljNGM1ZTY5NWFiZDAyZGI1ZjVlYjI4ZDcwMzVlZTJkYzRiZWEzNGImWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JnJlc3BvbnNlLWNvbnRlbnQtdHlwZT1pbWFnZSUyRnBuZyJ9.TClBbqueqcw2OfHqEBbFu7vY671bI0011wkhfwKGq4Y)

Uncheck "Spread the Word" in "Manage » Settings".

### Is there any way to put on my website a contact form submitting tickets to the FreeScout?

Yes. See [End-User Portal Module](https://freescout.net/module/end-user-portal/).

### When I assign a task to someone do they get an email notifying them that they have a task assigned to them?

Yes, you need to configure Notifications for the user:

![](https://user-images.githubusercontent.com/40499291/64145699-7f368480-ce22-11e9-9ead-1ac3ef29ba9b.png)

### Users do not receive notification emails.

1. Make sure that your mailbox is able to send emails in the mailbox's Connection Settings.
2. Make sure that users have proper notification settings in their "Profile » Notifications".
3. Make sure that background job is working in "System » Status".
4. Make sure that emails successfully sent in "Manage » Logs » Outgoing Emails".

### FreeScout sends multiple duplicate emails to customers

See [this](https://github.com/freescout-help-desk/freescout/issues/870#issuecomment-786477909).

### Is it possible to configure SLA rules?

Use [Workflows](https://freescout.net/module/workflows/) module.

### I've fetched emails from my mailbox, but older emails were not fetched. How can I fetch the entire inbox messages?

Go to "Manage » System » Tools" and fetch all undread emails.

### I'm trying to fetch large amount of email but getting 504 Gateway Time-out

If you are running the fetch command from "Manage » System » Tools" your web server won't allow it to run for a long time. Instead use the following [console command](wiki__Console-Commands.md#fetch-emails).

### Is it possible to set priorities for tickets?

Use [Custom Fields](https://freescout.net/module/custom-fields/) module.

### How to send an email to a customer on closing a support ticket?

Use [Workflows](https://freescout.net/module/workflows/) module.

### When viewing a ticket in FreeScout, the original formatting and styles are removed

Some styles are removed not to break FreeScout layout (see [this issue](https://github.com/freescout-help-desk/freescout/issues/1719)). There is no workaround for this for now. You can view original email like this:

![2020-10-28_16-45-10](https://user-images.githubusercontent.com/40499291/97444267-00ad7800-193d-11eb-9069-0d14f0444320.png)

### Is it possible to forward customer's email to FreeScout and make it look like it came from this customer?

Support agent just need to add a `@fwd` text to the very beginning of the email when forwarding it:

![2023-03-10_13-23-17](https://user-images.githubusercontent.com/40499291/224291730-c05e4e79-1166-4709-9e39-e6eb23fb40e8.png)

FreeScout will grab customer's email from the email body (first email found in the body) and create a conversation on behalf of this customer. This won't happen if the email is forwarded to more than one recipient. No auto-reply is being sent when new conversation is created from forwarded customer's email.

The email should be a proper forwarded email. It should have `In-Reply-To` header set and have subject starting with "FWD:", "Fwd:", "FW:" "F:", etc.

FreeScout searches for the first email address it can find in the email body to use as a customer email address. If no email address is found FreeScout, creates a conversation as usually using sender (from "From:" header) as a customer. If support agent forwarding an email to FreeScout has an email address mentioned in his/her signature, this email address will be used as a customer email address for the new ticket. See an example marked with red on the image below.

![2023-02-23_17-31-43](https://user-images.githubusercontent.com/40499291/220936798-14f05bcb-21eb-4300-83fb-8991b6d85e60.png)

To prevent this behavior the support agent should remove his/her signature from the email when forwarding it (or simply remove his/her email address from the signature in the email body).

### Is it possible to create a conversation on behalf of a customer in FreeScout?

Use "New Conversation" button in the message's dropdown menu:

![](https://user-images.githubusercontent.com/40499291/61270986-eda88000-a7ab-11e9-90b0-9bfd5d31f362.png)

### How can I determine what happens after replying, changing conversation status or assigning a conversation?

You can do so in the Send dropdown.

![2022-04-24_08-47-04](https://user-images.githubusercontent.com/40499291/164958473-d1ee28d6-03cf-4d0d-999c-61a59fb6dab9.png)

### How can I create departments in FreeScout?

In FreeScout departments are implemented as mailboxes.

### How to backup and restore the FreeScout?

[https://github.com/freescout-help-desk/freescout/wiki/Backup](wiki__Backup.md)

### Does FreeScout make any external or third party API calls?

When you activate some [official module](https://freescout.net/modules/), application domain name is sent to <https://freescout.net> API to register module license.

### Where can we see FreeScout's roadmap?

- [Todo-list](https://github.com/freescout-help-desk/freescout/labels/help%20wanted)
- [Wish-list](https://freescout.net/request-feature/)

### Who is behind the project? Is there a list of developers working on the FreeScout?

The team is international and consist of volunteers. Team members prefer to work anonymously and do not want to be disclosed.

### Do you have developers for custom development, managing and helping out?

No. But you can find someone [here](wiki__Hire-Developer.md).

### Why FreeScout is still using Laravel 5?

See [this](wiki__Development-Guide.md#maintaining-security-and-laravel-no-upgrade-policy).

### How can I merge customers?

Open a customer profile, add additional email addresses and customers will be merged automatically (only email and conversations will be moved, no customer data is copied/moved).

Or open customer profile and scroll down to the "Merge" button.

### Show Original window is too slow

The original email is being fetched from the mail server. So performance of the "Original Message" window depends only on the speed of your mail server's IMAP.

### Why does Show Original window shows truncated message without previous history?

FreeScout first tries to fetch the email via IMAP and get its body. If IMAP connection fails or original email has been deleted from the mail server it will show truncated message stored in the DB.

Original message also can not be obtained if conversation has been moved to another mailbox.

### How can I change FreeScout domain?

1. Change APP\_URL in `/.env` file and clear cache.
2. Delete all `.js` files form `/public/js/builds/` folder.
3. Make sure that `/public/storage` symlink leads to the proper location.
4. [Reactivate](wiki__FreeScout-Modules.md#is-it-possible-to-transferdisable-the-module-licenses-from-the-old-domain-and-reactivate-them-on-the-new-domain) modules' licenses on a new domain.

*URLs of the embedded images in conversations will stay the same. The only way to change URLs is by editing messages in conversations or edit records in `threads` table in database - see [this](https://github.com/freescout-help-desk/freescout/issues/4408#issuecomment-2525209885).*

### Is email deleted from my mail server when I delete it in FreeScout?

No. The [GDPR Module](https://freescout.net/module/gdpr/) allows to enable this feature.

### Why am I receiving "Unable to process your update" email?

![136544734-3c9b99e4-2afd-49c7-b4a5-c710d7ea6af9](https://user-images.githubusercontent.com/40499291/137299684-c795c903-5e56-49e5-b847-45fd6e3c8b10.png)

User is allowed to reply to email notifications only from his/her email or Alternate emails (specified in user's profile). In other cases if some mailbox receives a reply to the user notification from some other email you will get the error described above.

### Do you provide source code of mobile apps?

You can download APK file using [apkcombo tool](https://apkcombo.com/) for example and unzip it. Original source code is not provided.

### I want to have an extra status for conversations - Resolved

We are not planning to add more statuses to conversations. Feel free to use [Tags](https://freescout.net/module/tags/) or [Custom Felds](https://freescout.net/module/custom-fields/).

### Is it possible to show numbers of messages in folders?

No. FreeScout shows number of active conversations only.

### How can I move a conversation to some mailbox to which I don't have access?

Select "Move" in the conversation's actions dropdown and enter those mailbox's email address.

### Modules cannot be loaded via Proxy

If you are using a Web Proxy and cannot see Modules, enable access to <https://freescout.net> on your server. Also you can use `APP_PROXY` variable in .env file in order to specify your proxy.

### How to clear the Outgoing Emails logs?

Outgoing Emails log is cleaned automatically once a month and keeps logs for the last 6 months.

### Does freescout.net collect any statistics after FreeScout is installed locally?

No. Helpdesk just makes API calls to freescout.net in "Manage » Modules" page.

### Admins get notifications for all mailboxes. What to do?

Admins have access to all mailboxes and receive notifications from all mailboxes. Admins (and other users too) can mute notifications for specific mailboxes this way:

![2022-03-29_09-25-19](https://user-images.githubusercontent.com/40499291/160547017-8942248e-471b-4a76-b5e5-69e85dd3c19a.png)

### How does the collision detection work?

![2022-04-12_20-17-37](https://user-images.githubusercontent.com/40499291/163018215-9e7325b1-93a1-4987-9d79-8d3f07446242.png)

When support agent is replying his/her icon is highlighted with the red border:

![2023-11-15_09-16-39](https://private-user-images.githubusercontent.com/40499291/283021603-7be36eee-f465-4a05-9c8c-7b2cf0a7c45d.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1NzQsIm5iZiI6MTc5MzIxMzI3NCwicGF0aCI6Ii80MDQ5OTI5MS8yODMwMjE2MDMtN2JlMzZlZWUtZjQ2NS00YTA1LTljOGMtN2IyY2YwYTdjNDVkLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNjEwMjglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjYxMDI4VDE4NDc1NFomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTdhMzk3ZDkzYTQ2MDBhYjQxYTlmNWRlODViYWY2MzI4NTAzMDk1MTgzMjk0NTcyNzJlYWQ4OTQzNGU3N2JhYjYmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JnJlc3BvbnNlLWNvbnRlbnQtdHlwZT1pbWFnZSUyRnBuZyJ9.0mKgh9lXE2oF8_4Gtxn4xaz7RPeDQ1HOaKqRSki9s1E)

### How can I restrict some user to see only tickets assigned to him/her?

There is a "User can see only assigned conversations" option in profiles of non-admin users:

![Image](https://private-user-images.githubusercontent.com/172874623/604019137-7fc777a6-ce3c-4441-bb75-83c609a72bd7.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1NzQsIm5iZiI6MTc5MzIxMzI3NCwicGF0aCI6Ii8xNzI4NzQ2MjMvNjA0MDE5MTM3LTdmYzc3N2E2LWNlM2MtNDQ0MS1iYjc1LTgzYzYwOWE3MmJkNy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYxMDI4JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MTAyOFQxODQ3NTRaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0xOTUyZjE4YTM4NzlmMjI4Y2Y1ODJhZDdkYWFlMzM4MTQ0MmI4NWQxYWVlZGQzNGNjNmQ1ZDI1MmUyNWFlNjEyJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZyZXNwb25zZS1jb250ZW50LXR5cGU9aW1hZ2UlMkZwbmcifQ.TwsE_YgIPJL1YE6hK3QRldhGctpbqHPPOwkGJcdjTO8)

Such users will not see UNASSIGNED conversations. For such users only Mine folder shows actual number of conversations. Users who can see only assigned conversations still can see all customers in the system.

### How can attachments be stored in Amazon AWS S3 or Digital Ocean spaces?

Use [S3 Storage Module](https://freescout.net/module/s3-storage/).

### FreeScout attachments are available via direct link

Attachments **have** to be publicly accessible. If we make attachments non-publicly accessible, your customers will be unable to download your attachments or view embedded images in received emails.

### Auto replies are not being sent

Make sure that it's not connected to the [Office Hours](https://freescout.net/module/office-hours/) module or [Noreply Emails](https://freescout.net/module/noreply/) module.

### Endless tickets due to Auto-Reply

It means that the external system sends an auto-reply but does not add a special autoresponder header to the email. One of the following headers must be present for auto-replies:

```
'x-autoreply'    => '',
'x-autorespond'  => '',
'auto-submitted' => 'auto-replied',
'precedence' => ['auto_reply', 'bulk', 'junk'],
'x-precedence' => ['auto_reply', 'bulk', 'junk'],
```

### How to disable auto replies for some senders?

It can be done via [Workflows Module](https://freescout.net/module/workflows/).

### The Search shows more conversations than I see in the mailbox

The Search by default shows also Deleted conversations - this can be adjusted using "State" filter in the Search.

### How can I search conversations by number?

Prepend conversation number with `#` when searching, for example: `#12345`.

### Can't add to CC extra mailbox when replying to an email notification.

It's a known limitation. See [this](https://github.com/freescout-help-desk/freescout/issues/2251).

### Trash (Deleted) folder is not visible.

It's by design. `Deleted` folder becomes visible only after opening `Closed` folder.

### How can I create a ticket without sending an email to the customer?

See [this](https://github.com/freescout-help-desk/freescout/issues/4403#issuecomment-2538263663).

### App\Jobs\TriggerAction has been attempted too many times or run too long

This error may happen for example when your mail server is not available. Check all logs in Manage > Logs.

### Some emails are empty or truncated in FreeScout

In such cases the email can be viewed using "Show Original" button. If "Show Original" shows a warning it means you need to find out why FreeScout can't load original email from your mail server - maybe you've deleted the email from your mail server.

Also you can try to enable the alternative reply separation method - set `APP_ALTERNATIVE_REPLY_SEPARATION=true` parameter in the .env file and [clear cache](wiki__Clearing-the-Cache.md).

### When a customer replies within the cited text FreeScout does not show it.

It is a known thing. The only solution for now is to use "Show Original" button under message's dropdown menu.

Also feel free to enable the following option in Mailbox settings:

![2023-08-04_08-28-29](https://private-user-images.githubusercontent.com/40499291/258303493-d572ab2e-6d90-400a-ba5c-c54906f485c6.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1NzQsIm5iZiI6MTc5MzIxMzI3NCwicGF0aCI6Ii80MDQ5OTI5MS8yNTgzMDM0OTMtZDU3MmFiMmUtNmQ5MC00MDBhLWJhNWMtYzU0OTA2ZjQ4NWM2LnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNjEwMjglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjYxMDI4VDE4NDc1NFomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPWFiMWYwZDBiYzIyY2M0MjQzMWZlMzdkNWEwNzA3NGU2YmU3YmQ5ZGMwZmY0YzU5YjIxMDA1NzU3NDdlNDU1ODImWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JnJlc3BvbnNlLWNvbnRlbnQtdHlwZT1pbWFnZSUyRnBuZyJ9.O5GrKKHYdl0JO-IB1DwclizfQD3aUPuBR2wmRxrQKJc)

### How can I prefill To and Subject fields when creating a conversation?

You can do it via GET parameters: `/mailbox/1/new-ticket?to=test1@example.org,test2@example.org&subject=Test`

### How to convert phone conversation into email conversation?

Simply add an email to the customer or change the customer to another one having an email address. After that reply to the phone conversation and it will be automatically converted into standard email conversation.

### How can I show customer fields like Company or Country in conversation list?

Use [CRM Module](https://freescout.net/module/crm/).

### Is there such thing as SLA in FreeScout?

You can use [Workflows Module](https://freescout.net/module/workflows/) to set up all kinds of SLA rules.

### When CCed customer replies, conversation's customer changes to this customer.

It's by design (see [#1504](https://github.com/freescout-help-desk/freescout/issues/1504)).

### Is it possible to fetch emails more often than every minute?

1. Standard cron does not allow to run commands more often than every minute.
2. If you will connect by IMAP too often your mail server may start blocking FreeScout connections via IMAP.
3. Laravel commands system is designed to be executed every minute. Running it more often may have unpredictable results.

### When delete an email address is deleted from a customer, a new client appears with this email address.

When deleting an email from some customer if there is a conversation with 'customer\_email` field equal to the deleted email address, new customer with this email address will be created.

### Why do some attachments get underscores added to file extensions?

Underscores are added for security reasons. For example if a PDF file contains JavaScript then its extension will be changed to `.pdf_`.

### How can I make customer photo size larger than 64px?

You can do so via `APP_CUSTOMER_PHOTO_SIZE` variable in .env file (don't forget to clear cache after setting it).

### How can I make user photo size larger than 50px?

You can do so via `APP_USER_PHOTO_SIZE` variable in .env file (don't forget to clear cache after setting it).

### Timezone setting does not work

Keep in mind that each user has Timezone settings in their profile - it has precedence over global Timezone setting.

### How can support team know that there are problems with sending emails and emails are not being sent?

1. In FreeScout admin is responsible for monitoring email sending issues. Admin should enable Logs Monitoring in "Manage » Settings » Alerts" to be notified by email on Send Errors.

![2023-08-19_08-29-25](https://private-user-images.githubusercontent.com/40499291/261775156-036772be-4902-408f-898a-92049eaa34da.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1NzQsIm5iZiI6MTc5MzIxMzI3NCwicGF0aCI6Ii80MDQ5OTI5MS8yNjE3NzUxNTYtMDM2NzcyYmUtNDkwMi00MDhmLTg5OGEtOTIwNDllYWEzNGRhLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNjEwMjglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjYxMDI4VDE4NDc1NFomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTBhMmVkOTEzZmU2MTk3OWQ1ZTlkNjUwZGNjOTY4ZjA2Y2QxNDZiOTM3ODZiMDliYmJlZmUzMjE1NGEyNGQxY2EmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JnJlc3BvbnNlLWNvbnRlbnQtdHlwZT1pbWFnZSUyRnBuZyJ9.7P5ODfnl1CBflqokLEtEUnJQodJKRILc8Ps-4IfkzvA)

2. If some message has not been sent after 1 hour of trying the corresponding message will be shown to support agent in the conversation:

![image](https://private-user-images.githubusercontent.com/96336813/260776183-5542f813-1c99-467a-8a46-03698cf2d983.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1NzQsIm5iZiI6MTc5MzIxMzI3NCwicGF0aCI6Ii85NjMzNjgxMy8yNjA3NzYxODMtNTU0MmY4MTMtMWM5OS00NjdhLThhNDYtMDM2OThjZjJkOTgzLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNjEwMjglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjYxMDI4VDE4NDc1NFomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPWI5ZjA4ODkzN2U3YjNhZjUxMWUzNzY1NmI5MWQ5YTFhNDFjMzhlY2RhZmY0ZGNiZmQyMGMxMGJlNTk5MWZhYmMmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JnJlc3BvbnNlLWNvbnRlbnQtdHlwZT1pbWFnZSUyRnBuZyJ9.CSSc8nB8B9dqsGsIVPKUSC8Xsk_TOCQo9V6I3qVQ9zg)

3. If there are any problems with background mail queue processing the following alert will be shown in the mailbox to all support agents:

![2023-03-09_10-58-23](https://user-images.githubusercontent.com/40499291/223957682-6910be23-880b-42ce-87a9-9a51682542f6.png)

FreeScout is trying to resend emails for a week re-trying every hour. You can manage sending queue in "Manage » System » Background Jobs" (search for "SendReplyToCustomer" jobs).

### How to start ticket number from a higher value?

Go to "Manage » Settings"

![2023-06-21_09-15-11](https://private-user-images.githubusercontent.com/40499291/247450012-0498c3b6-26e0-4f23-b4e0-877c8a819efc.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1NzQsIm5iZiI6MTc5MzIxMzI3NCwicGF0aCI6Ii80MDQ5OTI5MS8yNDc0NTAwMTItMDQ5OGMzYjYtMjZlMC00ZjIzLWI0ZTAtODc3YzhhODE5ZWZjLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNjEwMjglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjYxMDI4VDE4NDc1NFomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTY4OWY5M2Q2YTU2M2ZhMzI1M2U5ZGJmYmE0OTliNzk5MDE1M2RlMjZiYjBjYmU2ZmVmY2M0ODNlNTJkOThjNmUmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JnJlc3BvbnNlLWNvbnRlbnQtdHlwZT1pbWFnZSUyRnBuZyJ9.o4k7Ysofi6oL_aupqKJa136oSghCkjTgXtwkR6xKo6k)

### How can I support this project?

If you want to support the project simply star this repo or see other options [here](https://github.com/freescout-help-desk/freescout/issues/288). We don't need donations.

### How to stop or pause email fetching for a mailbox?

Just remove the password from mailbox "Fetching Emails" settings.

### How can I let a customer reply to a ticket by mentioning its number in the email Subject?

See [this](https://feedback.userreport.com/25a3cb5f-e4bd-4470-b6f3-79fcfaa8e90f/#idea/405355)

### How can we import old emails from mail server and keep their original dates?

Set `APP_USE_MAIL_DATE_ON_FETCHING=true` parameter in the .env file and clear cache. After that import your old emails, remove this parameter from the .env file and clear cache again. Use this parameter ONLY TO FETCH OLD EMAILS, do not keep it ON all the time as it may cause problems with new incoming emails dates - see [this issue](https://github.com/freescout-help-desk/freescout/issues/3380).

### GitHub API error: 403 rate limit exceeded

If when checking new updates you are receiving `GET https://api.github.com/repos/freescout-help-desk/freescout/tags resulted in a 403 rate limit exceeded` error: if you are using a shared hosting the only solution in this case is to move to a dedicated IP as apparently someone else on this IP is making requests to <https://api.github.com>.

### I'm receiving "...sameorigin..." error in the browser when embedding FreeScout via iframe on another website

By default FreeScout sets `X-Frame-Options` header to `SAMEORIGIN`. In order to allow embedding your FreeScout via iframe set `APP_X_FRAME_OPTIONS=false` in .env file and clear cache.

### How can I change some texts in the English version of the FreeScout?

See [this instruction](wiki__Translate.md#change-english-texts).

### What is the proper way to move FreeScout to another server?

You need to move all the files (along with modules) and the database. After transfer make sure to update .env file with the new info and [clear cache](wiki__Clearing-the-Cache.md). If FreeScout's domain has changed [move modules licenses](https://freescout.net/modules-faq/#deactivate-license) to the new domain.

### Inline images do not display or attachments lead to 404 error

See [Troubleshooting](wiki__Installation-Guide.md#-inline-images-do-not-display-and-attachments-lead-to-404-errors).

### I can't delete logs from Manage » Logs

It means your server is not powerful enough to delete records from your DB, so possible solution is to upgrade your DB server. See [this issue](https://github.com/freescout-help-desk/freescout/issues/3715).

### FreeScout repeatedly sends multiple emails to customers

If you are using AWS, see the solution [here](https://github.com/freescout-help-desk/freescout/issues/3632#issuecomment-1916214425)

### I want to set up DKIM for outgoing emails

DKIM is configured on your SMTP mail server (see [this](https://github.com/freescout-help-desk/freescout/issues/3419)).

### Clients do not see images sent by support agents

Make sure that your FreeScout is available from the Internet and not protected using Basic HTTP Authentication. Otherwise use [Embed Images Module](https://freescout.net/module/embed-images/).

### Sometimes authenticated user unexpectedly logs in under another user

If you are using NGINX Proxy Manager or any other proxy, disable all kinds of Assets Cache (like in [this issue](https://github.com/freescout-help-desk/freescout/issues/3837#issuecomment-1971856397)).

### FreeScout allows support agents and customers to upload PHP and ZIP files. Is it a security threat?

No as FreeScout does not allow to execute those files.

### How can I hide admins from mailbox's Assignee dropdown list?

Got to mailbox's "Permissions" and set "Hide from Assign list" checkbox for admins.

### How can I open conversations in Search and links inside a conversation in a new tab by default?

Set `APP_OPEN_LINKS_IN_NEW_TAB=true` parameter in the .env file and clear cache.

### The Search times out or takes too much time

It means you have a lot of conversations and your server is not powerful enough to search through them:

1. Try to upgrade your server CPU.
2. If still no luck - use <https://freescout.net/module/faster-search/>

### How can I integrate FreeScout with Google Groups?

See [this](https://github.com/freescout-help-desk/freescout/issues/3992#issuecomment-2071804123).

### Why am I receiving "Your email update couldn't be processed" emails?

It means your support agents are trying to reply to the email notification from some random email. They should reply from the email address they have in your FreeScout or you should add extra emails to user's "Alternate Emails" on user's profile page.

### How can I hide admins from mailbox Assignee dropdown?

Got to mailbox Permissions and set "Hide from Assign list" checkbox for admins.

### As number of conversations in my FreeScout grew to few hundred thousands how can I increase FreeScout performance?

This [this discussion](https://github.com/freescout-help-desk/freescout/issues/4069).

### FreeScout is not working after installing a module

See [this](wiki__FreeScout-Modules.md#-freescout-or-module-is-not-working-after-installing-a-module).

### I see there are some security warning for FreeScout composer dependencies

See [this](wiki__FreeScout-Dependencies-Security.md).

### Bounce emails sent by Amazon SES are not linked to conversations

It is a known thing - see [this](https://github.com/freescout-help-desk/freescout/issues/4605).

### How to enable Redis on FreeScout?

See [this](https://github.com/freescout-help-desk/freescout/issues/4650#issuecomment-2759620827).

### Why can't mailbox and support agent have the same email address?

See [this](https://github.com/freescout-help-desk/freescout/issues/4720#issuecomment-2829217914).

### Why FreeScout is called free helpdesk when there are non-free modules?

We've created FreeScout back in 2018 for our own usage and generously [shared it with the world](https://freescout.medium.com/phasing-out-help-scouts-free-plan-pushes-the-development-of-a-free-self-hosted-alternative-d1b3d007b8a6) using Freemium model (which means free core and non-free extensions). That time there were no modules, just free bare core application. This was already enough for us and many others to switch from Zendesk / Help Scout and provide professional customer support without having to pay any monthly fee to anyone. Then over the years we've developed many awesome extensions...
