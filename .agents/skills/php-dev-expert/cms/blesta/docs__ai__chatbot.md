# AI Chatbot | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/ai/chatbot

---

Version: 6

On this page

The AI Chatbot is a conversational assistant for staff embedded in the admin UI. It's designed to help with Blesta-specific questions â billing flows, module setup, automation, plugin management, security best practices â and to provide developer-oriented help for SQL reports, API queries, and extension development.

- [Accessing the chatbot](#accessing-the-chatbot)
- [Conversation UI](#conversation-ui)
- [Empty state and suggestion cards](#empty-state-and-suggestion-cards)
  - [Prompt-Mode suggestion cards](#prompt-mode-suggestion-cards)
- [Conversation features](#conversation-features)
- [Token truncation](#token-truncation)
- [Empty-input and stream errors](#empty-input-and-stream-errors)
- [Privacy reminder](#privacy-reminder)

## Accessing the chatbot[â](#accessing-the-chatbot "Direct link to Accessing the chatbot")

The chatbot is accessed from the **AI chatbot icon** in the top icon bar of the admin UI. Click it to open the chat panel.

Access requires:

1. A valid API key configured under Settings > System > AI (see [Configuration](docs__ai__configuration.md)).
2. The **Chatbot** feature checkbox enabled under Settings > System > AI > Enabled Features.
3. Your staff group selected under Settings > System > AI > Staff Group Access (Chatbot).
4. The chatbot icon not hidden via your personal preference under My Info.

If you have permission but the global configuration is missing, the chat panel shows *"AI Not Configured"* with a button to Configure AI (admins only).

If you don't have permission, the chat panel shows *"Access Restricted"* with a Go Back button â ask an administrator to add your staff group to the Chatbot access list.

## Conversation UI[â](#conversation-ui "Direct link to Conversation UI")

The chatbot panel has two regions:

- **Sidebar** (left) â list of your past conversations, with a search box and a New Chat button.
- **Chat area** (right) â the active conversation. Messages stream in as the AI generates them.

The header of the chat area includes a **Model** selector that overrides the default model for the current conversation. Other defaults from Settings > System > AI (temperature, max tokens, system prompt) still apply.

## Empty state and suggestion cards[â](#empty-state-and-suggestion-cards "Direct link to Empty state and suggestion cards")

When you start a new conversation, the empty state shows the heading "How can I help you today?" plus a grid of **suggestion cards**. Each card is a one-click starter prompt covering a common topic:

| Card | Topic |
| --- | --- |
| Billing Help | Invoicing, recurring invoices, delivery methods |
| Service Management | Provisioning services, packages, module selection |
| Module Setup | Installing and configuring modules (cPanel and similar) |
| Support Tickets | Support Manager basics: departments, statuses, replies |
| Automation | Cron setup, automated tasks, scheduling |
| Plugins | Installing, configuring, permissions |
| Client Management | Profiles, groups, defaults, payment accounts |
| Security | Permissions, 2FA, password policies, logs |

Each card sends a guided prompt with Blesta-specific context (navigation paths, common patterns) baked in.

### Prompt-Mode suggestion cards[â](#prompt-mode-suggestion-cards "Direct link to Prompt-Mode suggestion cards")

A second set of cards is marked **Prompt-Mode** (look for the badge on the card):

- **Custom Report** â Ask the AI to write a SQL query against the Blesta schema for a custom report.
- **API Query** â Get help constructing a Blesta API request for a specific task.
- **Developer Help** â Get help building a plugin or module for Blesta.

Prompt-Mode cards prompt you for a free-text description (e.g. "Describe the report you need...") and then ask the AI to produce code-oriented output.

## Conversation features[â](#conversation-features "Direct link to Conversation features")

- **Streaming responses** â replies stream in token-by-token rather than appearing all at once, so you can read or interrupt as soon as the AI starts.
- **Conversation history** â every conversation is saved to your account and listed in the sidebar. Click any to resume.
- **Search** â filter the conversation list by keyword.
- **View toggle** â switch between "Show all conversations" and "Show chatbot conversations only" (the chatbot shares the underlying conversation store with other plugin-level AI features in some configurations).
- **Delete** â remove a conversation via the trash icon. A confirmation dialog asks "Are you sure you want to delete this conversation?".
- **Timestamps** â relative for recent activity (Just now, X min ago, X hr ago) and date-based for older entries (Today, Yesterday).

## Token truncation[â](#token-truncation "Direct link to Token truncation")

If a response is cut off by the **Max Tokens** limit, the chatbot displays a truncation notice:

> *"This response was truncated due to token limits. You can increase Max Tokens under Settings > System > AI, or ask the AI to continue."*

Asking the AI to *"continue"* in a follow-up message will usually pick up where it left off. Raising Max Tokens permanently in Settings > System > AI eliminates the issue but costs more credits per long response.

## Empty-input and stream errors[â](#empty-input-and-stream-errors "Direct link to Empty-input and stream errors")

- **Empty message:** *"Please enter a message."*
- **No model selected:** *"Please select a model before sending a message."*
- **Stream failure:** *"Failed to get a response from the AI. Please try again."* Common causes are network issues, an expired or revoked API key, or running out of Blesta AI credits.

## Privacy reminder[â](#privacy-reminder "Direct link to Privacy reminder")

Every new conversation shows a reminder in the empty state subtitle:

> *"AI-generated content may contain inaccuracies, biases, or hallucinations and should not be considered professional advice. This tool must not be used for any illegal or harmful purposes."*

Treat AI output as a starting point for research, not as authoritative. See the [Privacy posture](docs__ai.md#privacy-posture) section of the overview for the data-handling model.
