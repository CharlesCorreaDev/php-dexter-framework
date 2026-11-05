# Ticket Page - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/helpdesk/ticket-page.html

---

# Ticket Page

Display ticket details with a conversation thread and reply form.

- [Creating the Ticket Page](docs__user-guide__helpdesk__ticket-page.md#creating-the-ticket-page)
- [How the Conversation Thread Works](docs__user-guide__helpdesk__ticket-page.md#how-the-conversation-thread-works)
- [The isPrimary Property](docs__user-guide__helpdesk__ticket-page.md#the-isprimary-property)
- [Responding from the Backend](docs__user-guide__helpdesk__ticket-page.md#responding-from-the-backend)
- [Closing a Ticket](docs__user-guide__helpdesk__ticket-page.md#closing-a-ticket)
- [Try It Out](docs__user-guide__helpdesk__ticket-page.md#try-it-out)
- [Next Steps](docs__user-guide__helpdesk__ticket-page.md#next-steps)

[More...](#)

The ticket page shows the full conversation between the user and support staff. It displays the original ticket message, all follow-up replies, and a form for posting new messages. Users can also close their tickets from this page.

## [#](#creating-the-ticket-page) Creating the Ticket Page

Create a new page at `pages/support/ticket.htm`:

```
title = "Support Ticket"
url = "/support/ticket/:id"
layout = "default"

[supportTicket]
updatePage = "support/update"
isPrimary = "1"

[session]
security = "user"
redirect = "account/login"
```

```
___TWIG0___

___TWIG1___

    <div class="mb-4">
        <a href="___TWIG2___" class="text-sm text-blue-600 hover:underline">
            &larr; Back to My Tickets
        </a>
    </div>

    <!-- Ticket header -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold">
                Ticket #___TWIG3___: ___TWIG4___
            </h1>
            <div class="flex items-center gap-2 mt-1">
                <span class="text-xs font-medium px-2 py-0.5 rounded
                    ___TWIG5___
                        text-gray-700 bg-gray-100
                    ___TWIG6___
                        text-blue-700 bg-blue-100
                    ___TWIG7___
                        text-green-700 bg-green-100
                    ___TWIG8___
                ">
                    ___TWIG9___
                </span>
                ___TWIG10___
                    <span class="text-xs text-gray-500">
                        ___TWIG11___
                    </span>
                ___TWIG12___
            </div>
        </div>
        ___TWIG13___
            <button
                data-request="onCloseTicket"
                data-request-confirm="Are you sure you want to close this ticket?"
                data-request-flash
                class="px-3 py-1.5 text-sm text-red-600 border border-red-300 rounded-md hover:bg-red-50"
            >
                Close ticket
            </button>
        ___TWIG14___
    </div>

    <!-- Original message -->
    <div class="bg-white rounded-lg border border-gray-200 mb-6">
        <div class="p-4">
            <div class="flex items-center gap-3 mb-3">
                <img
                    src="___TWIG15___"
                    alt="___TWIG16___"
                    class="w-10 h-10 rounded-full"
                />
                <div>
                    <span class="text-sm font-medium text-gray-900">
                        ___TWIG17___
                    </span>
                    <span class="text-xs text-gray-400 ml-2">
                        ___TWIG18___
                    </span>
                </div>
            </div>
            <div class="prose prose-sm max-w-none text-gray-700">
                ___TWIG19___
            </div>
            ___TWIG20___
                <div class="mt-3 pt-3 border-t border-gray-100">
                    <p class="text-xs font-medium text-gray-500 mb-1">
                        Attachments
                    </p>
                    ___TWIG21___
                        <a href="___TWIG22___" class="text-xs text-blue-600 hover:underline block">
                            ___TWIG23___ (___TWIG24___)
                        </a>
                    ___TWIG25___
                </div>
            ___TWIG26___
            <div class="mt-3">
                <a href="___TWIG27___?mode=ticket" class="text-xs text-gray-400 hover:text-blue-600">
                    Edit
                </a>
            </div>
        </div>
    </div>

    <!-- Messages -->
    ___TWIG28___
        <div class="bg-white rounded-lg border mb-4
            ___TWIG29___
        ">
            <div class="p-4">
                <div class="flex items-center gap-3 mb-3">
                    ___TWIG30___
                        <img
                            src="___TWIG31___"
                            alt="___TWIG32___"
                            class="w-10 h-10 rounded-full"
                        />
                        <div>
                            <span class="text-sm font-medium text-gray-900">
                                ___TWIG33___
                            </span>
                            <span class="text-xs text-gray-400 ml-2">
                                ___TWIG34___
                            </span>
                        </div>
                    ___TWIG35___
                        <img
                            src="___TWIG36___"
                            alt="___TWIG37___"
                            class="w-10 h-10 rounded-full"
                        />
                        <div>
                            <span class="text-sm font-medium text-gray-900">
                                ___TWIG38___
                            </span>
                            <span class="text-xs font-medium text-blue-600 ml-1">
                                Staff
                            </span>
                            <span class="text-xs text-gray-400 ml-2">
                                ___TWIG39___
                            </span>
                        </div>
                    ___TWIG40___
                </div>
                <div class="prose prose-sm max-w-none text-gray-700">
                    ___TWIG41___
                </div>
                ___TWIG42___
                    <div class="mt-3 pt-3 border-t border-gray-100">
                        <p class="text-xs font-medium text-gray-500 mb-1">
                            Attachments
                        </p>
                        ___TWIG43___
                            <a href="___TWIG44___" class="text-xs text-blue-600 hover:underline block">
                                ___TWIG45___ (___TWIG46___)
                            </a>
                        ___TWIG47___
                    </div>
                ___TWIG48___
                ___TWIG49___
                    <div class="mt-3">
                        <a href="___TWIG50___" class="text-xs text-gray-400 hover:text-blue-600">
                            Edit
                        </a>
                    </div>
                ___TWIG51___
            </div>
        </div>
    ___TWIG52___

    <!-- Reply form -->
    ___TWIG53___
        <div class="mt-6">
            <h3 class="text-lg font-semibold mb-3">
                Post a Reply
            </h3>
            ___TWIG54___
                <div class="mb-4">
                    <textarea
                        name="content"
                        rows="5"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm"
                        placeholder="Write your reply... Markdown is supported."
                    >___TWIG55___</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Attachments
                    </label>
                    <input
                        name="files[]"
                        type="file"
                        class="text-sm text-gray-600"
                    />
                </div>
                <button
                    type="submit"
                    data-attach-loading
                    class="px-4 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700"
                >
                    Submit reply
                </button>
            ___TWIG56___
        </div>
    ___TWIG57___
        <div class="mt-6 p-4 bg-gray-50 rounded-lg text-center text-sm text-gray-500">
            This ticket has been closed.
        </div>
    ___TWIG58___

___TWIG59___

    <p class="text-gray-500">
        Ticket not found.
    </p>

___TWIG60___
```

## [#](#how-the-conversation-thread-works) How the Conversation Thread Works

The `supportTicket` component provides the `ticket` variable, which includes `ticket.messages` (the follow-up messages in the conversation). Each message has:

- `is_user_message`: true for messages sent by the user, false for staff responses
- `is_internal`: true for internal staff notes that should not be shown to the user
- `content_html`: the message content rendered from Markdown to HTML
- `created_user`: the backend user who sent the message (for staff messages)
- `attachments`: any files attached to the message
- `url`: a link to the editing page for this message

The template filters out internal messages with `if not message.is_internal` and styles user and staff messages differently using the border color.

## [#](#the-isprimary-property) The isPrimary Property

Setting `isPrimary = "1"` marks this page as the canonical ticket page. When the plugin sends email notifications about ticket activity, it generates links that point to this page. Only one ticket page should be marked as primary.

## [#](#responding-from-the-backend) Responding from the Backend

Support staff respond to tickets through the backend:

1. Navigate to **Support > Tickets** in the backend
2. Click on a ticket to open it
3. Type a response in the message area
4. Click **Post** to send the reply

The user will see the staff response when they visit the ticket page. Staff can also check the **Internal** checkbox to post a note that is only visible to other staff members.

## [#](#closing-a-ticket) Closing a Ticket

The "Close ticket" button calls `onCloseTicket`, which marks the ticket as closed and refreshes the page. Once closed, the reply form is replaced with a notice, and the close button is hidden. All participants receive a notification when a ticket is closed.

## [#](#try-it-out) Try It Out

1. Submit a ticket from the frontend
2. Reply to it from the backend as support staff
3. Visit the ticket page to see the conversation thread
4. Post a reply from the frontend
5. Close the ticket and verify the form is replaced with the closed notice

## [#](#next-steps) Next Steps

Continue to [Editing Messages](docs__user-guide__helpdesk__editing-messages.md) to let users update their submitted tickets and messages.

← [Submit Ticket](docs__user-guide__helpdesk__submit-ticket.md)[Editing Messages](docs__user-guide__helpdesk__editing-messages.md) →
