# Installing the Plugin - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/helpdesk/installing-the-plugin.html

---

# Installing the Plugin

Install the Responsiv Support plugin and configure ticket types.

- [Installing the Plugin](docs__user-guide__helpdesk__installing-the-plugin.md#installing-the-plugin)
- [Creating Ticket Types](docs__user-guide__helpdesk__installing-the-plugin.md#creating-ticket-types)
- [Updating the Navigation](docs__user-guide__helpdesk__installing-the-plugin.md#updating-the-navigation)
- [Next Steps](docs__user-guide__helpdesk__installing-the-plugin.md#next-steps)

With user authentication in place, you can now add the helpdesk functionality. The Responsiv Support plugin provides a ticketing system with ticket types, conversation threads, file attachments, staff assignment, and email notifications.

## [#](#installing-the-plugin) Installing the Plugin

Navigate to **Settings > Updates & Plugins > Install Packages** and search for "Responsiv.Support". Click **Install** to add it to your project.

Alternatively, install via the command line:

```
php artisan plugin:install Responsiv.Support
```

The Support plugin depends on RainLab.User, which you already installed when setting up authentication. After installation, you will see a new **Support** section in the backend navigation with links to manage tickets and ticket types.

## [#](#creating-ticket-types) Creating Ticket Types

Ticket types categorize incoming requests so your team can prioritize and route them. The plugin ships with some example types (General, Sales, Technical, Account, Press) that you can keep or remove. Navigate to **Support > Ticket types** and create a few of your own:

| Type | Code |
| --- | --- |
| General Inquiry | `general` |
| Bug Report | `bug-report` |
| Feature Request | `feature-request` |

Each type can optionally auto-assign tickets to a specific staff member. You can configure this later as your team grows.

## [#](#updating-the-navigation) Updating the Navigation

Add a "Support" link to your layout navigation so logged-in users can access the helpdesk. Update the nav section in your default layout:

```
<div class="flex items-center gap-4">
    <a href="___TWIG0___" class="text-sm text-gray-600 hover:text-gray-900">
        Forum
    </a>
    ___TWIG1___
        <a href="___TWIG2___" class="text-sm text-gray-600 hover:text-gray-900">
            Support
        </a>
        <a href="___TWIG3___" class="text-sm text-gray-600 hover:text-gray-900">
            Account
        </a>
        <a
            href="javascript:;"
            data-request="onLogout"
            data-request-data="redirect: '/'"
            class="text-sm text-gray-600 hover:text-gray-900"
        >
            Sign out
        </a>
    ___TWIG4___
        <a href="___TWIG5___" class="text-sm text-gray-600 hover:text-gray-900">
            Sign in
        </a>
    ___TWIG6___
</div>
```

The "Support" link is inside the `{% if user %}` block because only logged-in users can submit and view tickets.

## [#](#next-steps) Next Steps

Continue to [Ticket List](docs__user-guide__helpdesk__ticket-list.md) to create the page where users browse their submitted tickets.

← [Creating a Helpdesk](docs__user-guide__helpdesk__introduction.md)[Ticket List](docs__user-guide__helpdesk__ticket-list.md) →
