# Creating a Helpdesk - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/helpdesk/introduction.html

---

# Creating a Helpdesk

Build a helpdesk ticket system with October CMS using the Responsiv Support plugin.

- [What You Will Build](docs__user-guide__helpdesk__introduction.md#what-you-will-build)
- [Premium Plugins](docs__user-guide__helpdesk__introduction.md#premium-plugins)
- [Prerequisites](docs__user-guide__helpdesk__introduction.md#prerequisites)
- [Overview](docs__user-guide__helpdesk__introduction.md#overview)
- [Next Steps](docs__user-guide__helpdesk__introduction.md#next-steps)

In this tutorial, you will build a helpdesk ticket system where registered users can submit support requests and your team can respond from the backend. The system includes ticket types, file attachments, a conversation thread, and automated email notifications, all powered by the Responsiv Support plugin.

## [#](#what-you-will-build) What You Will Build

You will create a helpdesk powered by two plugins: RainLab.User for authentication and Responsiv.Support for the ticketing system. The finished helpdesk includes:

- **A ticket list page** where users see their submitted tickets and their current status
- **A submission form** for creating new tickets with type selection, Markdown content, and file attachments
- **A ticket detail page** with a conversation thread showing user and staff messages
- **A message editing page** for updating posted tickets and replies
- **Backend management** where support staff respond to tickets, add internal notes, and assign tickets

## [#](#premium-plugins) Premium Plugins

Responsiv.Support is a premium plugin available from the [October CMS Marketplace  (opens new window)](http://octobercms.com/plugin/responsiv-support). Premium plugins work exactly like free plugins: you install them the same way and use their components identically. The only difference is that premium plugins require a license to install.

## [#](#prerequisites) Prerequisites

Before starting, you should have:

- October CMS installed and running
- A theme with a default layout that includes Tailwind CSS
- User authentication set up with RainLab.User, including the session component on your layout and login/registration pages

If you need to set up user authentication, work through [Part 1 of the Forum tutorial](docs__user-guide__forum__installing-the-user-plugin.md) first. It covers installing RainLab.User, configuring the session component, and building login, registration, and password reset pages.

## [#](#overview) Overview

1. [Installing the Plugin](docs__user-guide__helpdesk__installing-the-plugin.md): install Responsiv.Support and configure ticket types
2. [Ticket List](docs__user-guide__helpdesk__ticket-list.md): create the ticket list page for browsing submitted tickets
3. [Submit Ticket](docs__user-guide__helpdesk__submit-ticket.md): build the ticket submission form
4. [Ticket Page](docs__user-guide__helpdesk__ticket-page.md): display ticket details with a conversation thread and reply form
5. [Editing Messages](docs__user-guide__helpdesk__editing-messages.md): allow users to edit their submitted tickets and messages

## [#](#next-steps) Next Steps

Continue to [Installing the Plugin](docs__user-guide__helpdesk__installing-the-plugin.md) to get started.

[Installing the Plugin](docs__user-guide__helpdesk__installing-the-plugin.md) →
