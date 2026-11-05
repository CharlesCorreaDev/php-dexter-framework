# AI Configuration | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/ai/configuration

---

Version: 6

On this page

All AI configuration in Blesta lives under **Settings > System > AI**. This page documents each field and the privacy acknowledgement workflow.

- [API configuration](#api-configuration)
  - [API Key](#api-key)
- [Default model](#default-model)
  - [Default Model](#default-model-1)
- [Model parameters](#model-parameters)
  - [Temperature](#temperature)
  - [Max Tokens](#max-tokens)
- [System prompts](#system-prompts)
  - [Global System Prompt (Default)](#global-system-prompt-default)
- [Enabled features](#enabled-features)
  - [Staff Group Access (Chatbot)](#staff-group-access-chatbot)
  - [Chatbot icon visibility (per staff member)](#chatbot-icon-visibility-per-staff-member)
- [Email Template Context Settings](#email-template-context-settings)
  - [Relationship Depth](#relationship-depth)
  - [Include Schema Definitions](#include-schema-definitions)
  - [Include Example Data](#include-example-data)
- [Privacy notice](#privacy-notice)
  - [Beta Feature Notice](#beta-feature-notice)
  - [Privacy Notice](#privacy-notice-1)
  - [Privacy Acknowledgment](#privacy-acknowledgment)

## API configuration[â](#api-configuration "Direct link to API configuration")

### API Key[â](#api-key "Direct link to API Key")

Your Blesta AI service API key. Two ways to set it:

- **Manual entry:** paste an existing key into the API Key field and click **Update Settings**. Validation runs against the Blesta AI service and you'll see "API key validated and saved" on success, or "Invalid API key" otherwise.
- **Fetch From My Blesta Account:** click the **Fetch From My Blesta Account** button to open a modal, enter your `account.blesta.com` username, and click **Authenticate**. Blesta uses your installed license key plus the username to retrieve (or generate) an API key automatically.

  Notes on the fetch flow:

  - Your license key must already be configured under Settings > System > License â the fetch will fail with "No Blesta license key found" otherwise.
  - If a key has already been issued for your account, it is **revoked** and a new key is issued. Update any other Blesta installs that were using the old key.

After a valid key is saved, the AI Settings page also displays:

- **API Status** â *Active* when the gateway is reachable.
- **Remaining Credits** â credit balance on your Blesta AI account.
- **Credits Used (This Month)** â usage running total.
- **Last API Call** â timestamp of the most recent successful request, or "No calls yet".

## Default model[â](#default-model "Direct link to Default model")

### Default Model[â](#default-model-1 "Direct link to Default Model")

The model used by default for chat completions. Available models are populated from the Blesta AI service after a valid API key is saved. Choose any of the listed models from the dropdown.

The chatbot lets staff override the default per-conversation, so the Default Model setting only applies to the *initial* chatbot model and to non-chatbot AI features (email/HTML/package description generators).

## Model parameters[â](#model-parameters "Direct link to Model parameters")

### Temperature[â](#temperature "Direct link to Temperature")

Controls how deterministic vs. creative the AI's responses are. Range: **0.0 to 2.0**.

- Lower values (e.g. 0.2) produce more focused, repeatable responses. Good for factual replies and structured generation.
- Higher values (e.g. 1.2) produce more varied and creative responses. Good for marketing copy and brainstorming.
- The default is balanced for general use.

### Max Tokens[â](#max-tokens "Direct link to Max Tokens")

The upper limit on the number of tokens the AI is allowed to generate in a single response. Lower values save credits but may cause longer responses to be truncated; higher values allow long-form output at higher cost per request.

If the AI returns a truncated response, the chatbot displays a notice with a link back to this setting.

## System prompts[â](#system-prompts "Direct link to System prompts")

### Global System Prompt (Default)[â](#global-system-prompt-default "Direct link to Global System Prompt (Default)")

The default instructions sent to the AI model with every request â sometimes called a "system prompt." It defines the AI's persona, tone, and constraints across all features.

Most features (email templates, support ticket summarize, etc.) layer their own feature-specific prompt on top. The Global prompt sets the baseline.

## Enabled features[â](#enabled-features "Direct link to Enabled features")

Toggle individual AI features on or off. Toggling a feature off here hides the related AI buttons throughout the admin UI without disabling AI globally.

- **Package Descriptions** â Generate marketing-style descriptions on the Packages add/edit page.
- **Email Templates** â AI-assisted edits and improvements in the email template editor (see [Email Templates](docs__ai__email-templates.md)).
- **Chatbot** â The AI chatbot in the top bar (see [Chatbot](docs__ai__chatbot.md)).

### Staff Group Access (Chatbot)[â](#staff-group-access-chatbot "Direct link to Staff Group Access (Chatbot)")

Multi-select list of staff groups permitted to use the chatbot. Hold **Ctrl** (or **Cmd** on macOS) to select more than one group. Staff in groups not selected here will see "Access Restricted" if they navigate to the chatbot.

This is independent of the per-staff icon-bar visibility setting (below).

### Chatbot icon visibility (per staff member)[â](#chatbot-icon-visibility-per-staff-member "Direct link to Chatbot icon visibility (per staff member)")

Each staff member can additionally hide the AI chatbot icon from their own icon bar under My Info â useful if you have access but rarely use the feature. This is purely a UI preference; the chatbot itself remains reachable by direct URL.

## Email Template Context Settings[â](#email-template-context-settings "Direct link to Email Template Context Settings")

Controls how much context Blesta sends to the AI when generating email template content (see [Email Templates](docs__ai__email-templates.md)).

### Relationship Depth[â](#relationship-depth "Direct link to Relationship Depth")

How many levels of model relationships to traverse when assembling context for the AI. Range: **1 to 5**. Default: **2**.

Example for an invoice template:

- Depth 1: Just the invoice fields.
- Depth 2: Invoice + client.
- Depth 3: Invoice + client + contacts.

Higher depths include more related data but use more tokens per request, increasing credit cost.

### Include Schema Definitions[â](#include-schema-definitions "Direct link to Include Schema Definitions")

When checked, includes field type information (e.g. "amount is a decimal currency value") in the AI context. Useful when generating templates that need precise formatting.

### Include Example Data[â](#include-example-data "Direct link to Include Example Data")

When checked, includes sample data values alongside field names, so the AI can see formats like "ABC-12345" or "2026-01-15" rather than guessing. Recommended for most cases.

## Privacy notice[â](#privacy-notice "Direct link to Privacy notice")

### Beta Feature Notice[â](#beta-feature-notice "Direct link to Beta Feature Notice")

A persistent banner at the top of the AI settings page reminds you the feature is in beta and may produce unexpected results.

### Privacy Notice[â](#privacy-notice-1 "Direct link to Privacy Notice")

Explains that AI requests are sent to third-party providers (OpenAI, Anthropic, etc.) for processing, that the Blesta AI service does not store conversation data, but that Blesta cannot control upstream provider data handling.

### Privacy Acknowledgment[â](#privacy-acknowledgment "Direct link to Privacy Acknowledgment")

You must check **"I have read and understand the privacy notice above"** before saving AI settings for the first time. The page records when you last acknowledged the notice â re-acknowledgement may be required if the notice text changes in a future release.

Trying to save without acknowledging produces an error: *"You must agree to the privacy notice before saving."*
