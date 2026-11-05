# AI Features Overview | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/ai/

---

Version: 6

On this page

Blesta 6.0 introduces AI features across the admin UI, powered by the Blesta AI service. AI is a **system-level** setting and is disabled by default â you must configure an API key under **Settings > System > AI** and acknowledge the privacy notice before any feature becomes available.

Most AI features are controlled centrally under Settings > System > AI. The **Support Manager** is the exception: because it is installed per-company, it has its own AI-related settings that can disable AI assistance within Support Manager independently of system AI being configured.

- [What's included](#whats-included)
- [How the Blesta AI service works](#how-the-blesta-ai-service-works)
- [Privacy posture](#privacy-posture)
- [Bypass protection](#bypass-protection)
- [Package descriptions](#package-descriptions)
- [Disabling AI](#disabling-ai)

## What's included[â](#whats-included "Direct link to What's included")

Blesta 6.0 ships with AI capability in the following surfaces:

| Feature | Where | Documented in |
| --- | --- | --- |
| **Chatbot** | Top-right of the admin UI | [Chatbot](docs__ai__chatbot.md) |
| **Email template generation / rewrite** | Settings > Company > Emails (per-template editor) | [Email Templates](docs__ai__email-templates.md) |
| **HTML template generation** | Settings > Company > Emails > HTML Templates | [HTML Templates](docs__ai__html-templates.md) |
| **Package description generation** | Packages > Add/Edit Package | This page (below) |
| **Support Manager: AI Summarize** | Support > Tickets (reply view) | [Support Manager](docs__integrations__plugins__support-manager.md) |
| **Configuration & global controls** | Settings > System > AI | [Configuration](docs__ai__configuration.md) |

Plugins can also opt into AI features independently â see the plugin's own documentation for details.

## How the Blesta AI service works[â](#how-the-blesta-ai-service-works "Direct link to How the Blesta AI service works")

AI features in Blesta route through the **Blesta AI** service rather than calling third-party providers directly:

1. Your Blesta installation holds a **Blesta AI API key** (obtained from your `account.blesta.com` account, see [Configuration](docs__ai__configuration.md#api-key)).
2. Requests from Blesta's admin UI are sent to the Blesta AI service over HTTPS.
3. The Blesta AI service relays the request to a third-party model provider (e.g. OpenAI, Anthropic) and returns the response.
4. Blesta AI is **not** a separate model â it's a managed gateway that handles authentication, model selection, rate limiting, and credit tracking on your behalf.

Beta feature

AI in Blesta 6.0 is marked **Beta**. Generated content may contain inaccuracies, biases, or fabricated information ("hallucinations"). Always review AI output before sending to clients, publishing, or executing.

## Privacy posture[â](#privacy-posture "Direct link to Privacy posture")

Two layers of privacy apply when you enable AI features:

- **Blesta AI service:** Blesta does **not** store AI conversation data on its servers beyond what is needed to complete the request and bill for usage.
- **Upstream provider (OpenAI, Anthropic, etc.):** Blesta cannot control how upstream providers handle or retain data. Each provider has its own data-handling policies. **Do not submit sensitive or confidential information** (passwords, full credit card numbers, government identifiers, etc.) to any AI feature.

When you first save AI settings, you must check **"I have read and understand the privacy notice above"** under Settings > System > AI. The acknowledgement timestamp is recorded; re-acknowledgement may be required when the privacy notice text changes.

## Bypass protection[â](#bypass-protection "Direct link to Bypass protection")

AI controllers verify on every request that AI is configured and that the relevant feature is enabled. If a feature is disabled (or the API key is missing), AI endpoints return an "AI Not Configured" response regardless of how the request was made.

This means disabling AI features under Settings > System > AI â or removing the API key entirely â is a real off switch, not just a UI toggle that hides buttons.

## Package descriptions[â](#package-descriptions "Direct link to Package descriptions")

Package add/edit pages include an AI-assisted description generator behind the **Generate Description** button. Provide a short product name and the AI returns a marketing-style description you can edit before saving. The feature is gated by the **Package Descriptions** checkbox under Settings > System > AI > Enabled Features and is off by default.

There is no separate page for this feature in the documentation â the inline tooltip on the Generate Description button covers the per-request controls. The behavior is identical to the email/HTML template generators in structure.

## Disabling AI[â](#disabling-ai "Direct link to Disabling AI")

There is no single master switch. To disable AI you can either turn off individual features, or remove the API key entirely.

**Disable specific features** under **Settings > System > AI > Enabled Features** by unchecking any combination of:

- **Package Descriptions** â hides the Generate Description button on Packages add/edit.
- **Email Templates** â hides the AI Content Assistant button in the email template and HTML template editors.
- **Chatbot** â removes the chatbot icon from the top bar for all staff.

**Disable AI entirely** by removing the API Key field's value under Settings > System > AI and saving. With no API key, every AI feature returns an "AI Not Configured" state.

The chatbot icon is also separately toggleable per staff member â see [Configuration](docs__ai__configuration.md#chatbot-icon-visibility-per-staff-member).

Support Manager AI assistance is controlled separately within the Support Manager's own settings â see the [Support Manager AI features](docs__integrations__plugins__support-manager.md#ai-features-blesta-60) section.
