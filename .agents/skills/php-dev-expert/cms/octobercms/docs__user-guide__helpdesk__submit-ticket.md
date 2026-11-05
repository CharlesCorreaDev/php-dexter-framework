# Submit Ticket - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/helpdesk/submit-ticket.html

---

# Submit Ticket

Create a form for submitting new support tickets.

- [Creating the Submit Page](docs__user-guide__helpdesk__submit-ticket.md#creating-the-submit-page)
- [How File Attachments Work](docs__user-guide__helpdesk__submit-ticket.md#how-file-attachments-work)
- [How the Redirect Works](docs__user-guide__helpdesk__submit-ticket.md#how-the-redirect-works)
- [Try It Out](docs__user-guide__helpdesk__submit-ticket.md#try-it-out)
- [Next Steps](docs__user-guide__helpdesk__submit-ticket.md#next-steps)

The submission page lets users create new support tickets. They select a ticket type, write a subject and description (with Markdown support), and optionally attach files.

## [#](#creating-the-submit-page) Creating the Submit Page

Create a new page at `pages/support/submit.htm`:

```
title = "Submit Ticket"
url = "/support/submit"
layout = "default"

[supportTicketSubmit]
redirect = "support/ticket"

[session]
security = "user"
redirect = "account/login"
```

```
<div class="mb-4">
    <a href="___TWIG0___" class="text-sm text-blue-600 hover:underline">
        &larr; Back to My Tickets
    </a>
</div>

<h1 class="text-2xl font-bold mb-6">
    Submit a Ticket
</h1>

___TWIG1___

___TWIG2___

    <div class="mb-4">
        <label for="ticketType" class="block text-sm font-medium text-gray-700 mb-1">
            Ticket type
        </label>
        <select
            name="type_id"
            id="ticketType"
            class="w-full px-3 py-2 border border-gray-300 rounded-md"
        >
            <option value="">
                Select a type...
            </option>
            ___TWIG3___
                <option value="___TWIG4___">
                    ___TWIG5___
                </option>
            ___TWIG6___
        </select>
    </div>

    <div class="mb-4">
        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">
            Subject
        </label>
        <input
            name="subject"
            type="text"
            id="subject"
            class="w-full px-3 py-2 border border-gray-300 rounded-md"
            maxlength="255"
            value="___TWIG7___"
        />
    </div>

    <div class="mb-4">
        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">
            Description
        </label>
        <textarea
            name="content"
            id="content"
            rows="8"
            class="w-full px-3 py-2 border border-gray-300 rounded-md"
        >___TWIG8___</textarea>
        <p class="text-xs text-gray-500 mt-1">
            You can use Markdown syntax for formatting.
        </p>
    </div>

    <div class="mb-6">
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
        Submit ticket
    </button>

___TWIG9___
```

## [#](#how-file-attachments-work) How File Attachments Work

The `{{ form_open({ files: true }) }}` helper adds `enctype="multipart/form-data"` to the form, which is required for file uploads. The `files[]` input name uses array syntax so the plugin can process multiple files if needed.

If you want to allow users to attach more than one file, you can add additional file inputs or use JavaScript to dynamically add more.

## [#](#how-the-redirect-works) How the Redirect Works

The `redirect = "support/ticket"` property tells the component where to send the user after a successful submission. The `onSubmitTicket` handler creates the ticket and redirects to the ticket page, passing the new ticket's ID as the `:id` URL parameter. This takes the user directly to their newly created ticket.

## [#](#try-it-out) Try It Out

1. Navigate to `/support/submit` and fill in the form
2. Select a ticket type, enter a subject and description
3. Click "Submit ticket"
4. You should be redirected to the new ticket's detail page
5. Check **Support > Tickets** in the backend to see the ticket

## [#](#next-steps) Next Steps

Continue to [Ticket Page](docs__user-guide__helpdesk__ticket-page.md) to build the page where users view their tickets and have conversations with support staff.

← [Ticket List](docs__user-guide__helpdesk__ticket-list.md)[Ticket Page](docs__user-guide__helpdesk__ticket-page.md) →
