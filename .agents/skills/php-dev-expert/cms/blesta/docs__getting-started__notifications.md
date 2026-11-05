# Notifications | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/getting-started/notifications

---

Version: 6

On this page

Blesta 6.0 introduces an in-admin notification system that surfaces operational events â new support tickets, new orders, and other plugin- or module-driven events â directly in the admin UI rather than relying on email alone.

- [Where notifications appear](#where-notifications-appear)
- [Choosing which notifications you receive](#choosing-which-notifications-you-receive)
- [What sends notifications](#what-sends-notifications)
- [Timezone behavior](#timezone-behavior)
- [Email companions and ACLs](#email-companions-and-acls)
- [For plugin authors](#for-plugin-authors)

## Where notifications appear[â](#where-notifications-appear "Direct link to Where notifications appear")

A **bell icon** in the top icon bar of the admin UI shows the count of unread notifications. Click it to open a dropdown listing the most recent items.

Each entry shows:

- An **icon** with a type-specific color (info, success, warning, error, etc.).
- A **title** and a short **message** preview.
- The **timestamp** of the event, formatted in the company's configured timezone (see [Timezone behavior](#timezone-behavior)).

Two actions are available from the dropdown:

- **Mark all as read** â clears the unread count without dismissing individual items.
- **Dismiss** (the X on each entry) â removes the notification from the list.

When there are no unread notifications, the dropdown shows a "No new notifications" message with a muted bell-slash icon.

## Choosing which notifications you receive[â](#choosing-which-notifications-you-receive "Direct link to Choosing which notifications you receive")

Each staff member controls which notifications they personally receive under **My Info > Notifications**:

1. Click your name in the top-right of the admin UI.
2. Choose **My Info**, then the **Notifications** tab.
3. Check the notification types you want to receive. Hover the info icon next to each option for a description of when it fires.
4. Click **Update Notifications** to save.

The available notification types are filtered by your **staff group's permissions** â if your group doesn't have access to a feature, notifications for that feature don't appear. New staff members start with no notifications enabled and should review this page after their account is created.

If the page shows *"There are no notifications available to your staff group,"* your staff group does not have access to any features that emit notifications. Adjust the group's permissions under Settings > System > Staff > Staff Groups, or have an administrator do so.

## What sends notifications[â](#what-sends-notifications "Direct link to What sends notifications")

Blesta core, and plugins that opt in, can emit notifications. The most common sources at launch:

- **Support Manager** â new tickets, replies, assignments (configurable per staff member).
- **Order System** â new orders requiring review.

Additional plugins may register their own notification types. The list under My Info > Notifications is generated from whichever plugins are currently installed and active for the company.

## Timezone behavior[â](#timezone-behavior "Direct link to Timezone behavior")

Notification timestamps display in the **company's configured timezone**, set under Settings > Company > General. If your installation spans multiple companies, each company's notifications use its own timezone setting.

## Email companions and ACLs[â](#email-companions-and-acls "Direct link to Email companions and ACLs")

Some notification types also send a companion email. Email notifications follow the standard Email settings under Settings > Company > Emails. If you find email companions are not delivering:

- Check the Mail Log under Tools > Logs to see whether the email was queued.
- Verify the SMTP/return-path configuration under Settings > Company > General > SMTP.

If your staff role uses the email snapshot feature for support-side message tracking, ensure the relevant ACL permissions are granted for your staff group under Settings > System > Staff > Staff Groups.

## For plugin authors[â](#for-plugin-authors "Direct link to For plugin authors")

Plugins emit notifications by calling the `Notifications` model's `add()` method with the target staff (or staff group), title, message, and optional icon/color/type metadata. *(Developer documentation for the Notifications API is a separate documentation task â see the developer docs section once it lands.)*
