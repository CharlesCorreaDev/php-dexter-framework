# Ticket List - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/helpdesk/ticket-list.html

---

# Ticket List

Create the ticket list page where users can see their submitted tickets.

- [Creating the Ticket List Page](docs__user-guide__helpdesk__ticket-list.md#creating-the-ticket-list-page)
- [How This Page Works](docs__user-guide__helpdesk__ticket-list.md#how-this-page-works)
- [Try It Out](docs__user-guide__helpdesk__ticket-list.md#try-it-out)
- [Next Steps](docs__user-guide__helpdesk__ticket-list.md#next-steps)

The ticket list page is the main dashboard for users to see all their submitted support tickets. It shows the ticket ID, subject, status, and creation date, with a link to submit new tickets.

## [#](#creating-the-ticket-list-page) Creating the Ticket List Page

Create a new page at `pages/support/tickets.htm`:

```
title = "Support Tickets"
url = "/support"
layout = "default"

[supportTickets]
submitPage = "support/submit"
ticketPage = "support/ticket"

[session]
security = "user"
redirect = "account/login"
```

```
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold">
        My Tickets
    </h1>
    <a
        href="___TWIG0___"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700"
    >
        Submit a new ticket
    </a>
</div>

___TWIG1___

___TWIG2___
    <div class="bg-white rounded-lg border border-gray-200 divide-y divide-gray-200">
        ___TWIG3___
            <a href="___TWIG4___" class="block p-4 hover:bg-gray-50">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        ___TWIG5___
                            <span class="w-2 h-2 bg-blue-600 rounded-full shrink-0">
                            </span>
                        ___TWIG6___
                        <div>
                            <span class="text-sm text-gray-400">
                                #___TWIG7___
                            </span>
                            <span class="font-medium text-gray-900 ml-1">
                                ___TWIG8___
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 text-sm text-gray-500 shrink-0 ml-4">
                        <span>
                            ___TWIG9___
                        </span>
                        <span>
                            ___TWIG10___
                        </span>
                    </div>
                </div>
            </a>
        ___TWIG11___
    </div>

    ___TWIG12___
        <div class="flex items-center justify-center gap-2 mt-6">
            ___TWIG13___
                <a href="___TWIG14______TWIG15___" class="px-3 py-1.5 text-sm text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                    Previous
                </a>
            ___TWIG16___
            <span class="text-sm text-gray-500">
                Page ___TWIG17___ of ___TWIG18___
            </span>
            ___TWIG19___
                <a href="___TWIG20______TWIG21___" class="px-3 py-1.5 text-sm text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                    Next
                </a>
            ___TWIG22___
        </div>
    ___TWIG23___
___TWIG24___
    <div class="bg-white rounded-lg border border-gray-200 p-8 text-center">
        <p class="text-gray-500 mb-4">
            You have not submitted any support tickets yet.
        </p>
        <a
            href="___TWIG25___"
            class="text-blue-600 hover:underline"
        >
            Submit your first ticket
        </a>
    </div>
___TWIG26___
```

## [#](#how-this-page-works) How This Page Works

The `[session]` component with `security = "user"` requires the visitor to be logged in. If they are not, they are redirected to the login page.

The `supportTickets` component provides the `tickets` variable, a paginated collection of the logged-in user's tickets sorted by newest first. Each ticket has a `url` property that links to the ticket detail page (set by the `ticketPage` property).

The `has_new` property is true when the last message on the ticket was from support staff, indicating there is a response the user has not seen yet. The blue dot makes these tickets easy to spot.

## [#](#try-it-out) Try It Out

1. Navigate to `/support` while logged in
2. The list should be empty since no tickets exist yet
3. The "Submit a new ticket" button links to the submission page, which you will create next

## [#](#next-steps) Next Steps

Continue to [Submit Ticket](docs__user-guide__helpdesk__submit-ticket.md) to create the ticket submission form.

← [Installing the Plugin](docs__user-guide__helpdesk__installing-the-plugin.md)[Submit Ticket](docs__user-guide__helpdesk__submit-ticket.md) →
