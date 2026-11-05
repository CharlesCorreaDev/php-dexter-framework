# AI for Email Templates | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/ai/email-templates

---

Version: 6

On this page

The email template editor under **Settings > Company > Emails** includes an AI Content Assistant that can **generate** new email content from scratch or **rewrite** existing content. The assistant understands the available email template tags and the data those tags will be populated with at send time.

- [Prerequisites](#prerequisites)
- [How to invoke it](#how-to-invoke-it)
- [What the AI sees (context)](#what-the-ai-sees-context)
- [Working with the result](#working-with-the-result)
- [Tips](#tips)
- [Related](#related)

## Prerequisites[â](#prerequisites "Direct link to Prerequisites")

To use AI in the email template editor:

1. A valid API key configured under **Settings > System > AI**.
2. The **Email Templates** feature checkbox enabled under Settings > System > AI > Enabled Features.
3. The privacy notice acknowledged.

If any of these are missing, the AI button is hidden from the template editor.

## How to invoke it[â](#how-to-invoke-it "Direct link to How to invoke it")

In the email template editor, an **AI Content Assistant** button opens a modal with two modes:

- **Generate Email Content** â produces a complete email body based on the template type and a short instruction you provide.
- **Rewrite Email Content** â rewrites the current template content according to your instruction (e.g. *"make this more concise"* or *"shift the tone to friendly and informal"*).

Both modes operate on the *currently-edited template*, so the AI understands which event the email is for (e.g. invoice created, service suspended, password reset) without you needing to spell that out.

## What the AI sees (context)[â](#what-the-ai-sees-context "Direct link to What the AI sees (context)")

To produce output that uses correct template tags and reflects real data shapes, Blesta sends the AI a structured context bundle alongside your prompt. What's included is controlled by **Email Template Context Settings** under Settings > System > AI:

- **Relationship Depth (1â5, default 2)** â how many levels of related models to include. Depth 2 is usually enough; depth 3+ uses significantly more tokens for marginal benefit.
- **Include Schema Definitions** â adds field type information (decimal, date, string, etc.) to the context. Useful when generating templates that need precise formatting.
- **Include Example Data** â adds sample values so the AI sees realistic strings (e.g. an actual-looking invoice number) rather than just field names.

Tuning these up improves output quality at higher credit cost per request. Leaving them at defaults is a good starting point.

## Working with the result[â](#working-with-the-result "Direct link to Working with the result")

After clicking Generate (or Rewrite), the modal shows:

- **Generated Content** â the AI's output, with an HTML preview tab when the template is HTML.
- **Initial Instructions** â *"Click Generate to create email content based on the template type and available tags."* (shown before the first generation).
- **HTML Preview** â rendered HTML preview of the generated content.

You can:

- **Accept** the generated content, which replaces the template body in the editor â at which point you can fine-tune by hand before saving.
- **Reject and try again**, optionally adjusting the instruction.
- **Cancel** to leave the editor untouched.

The AI never saves directly to the template â accepting only populates the editor; you still have to click **Update Settings** to persist.

## Tips[â](#tips "Direct link to Tips")

- **Iterate.** Treat the first generation as a draft. Add an instruction like *"shorter, less formal, and end with a clear next-step CTA"* and regenerate.
- **Don't paste secrets.** Email template content occasionally includes login URLs or temp passwords via tags. Tags are safe (they're placeholders, not values), but if you paste actual customer data into the instruction box, that data goes to the AI provider. See [Privacy posture](docs__ai.md#privacy-posture).
- **Review before saving.** AI output is a starting point, not a finished message. Check tag spelling, tone, and any compliance-sensitive content (e.g. payment terms, legal disclaimers) before saving the template.

## Related[â](#related "Direct link to Related")

- [HTML Templates](docs__ai__html-templates.md) â AI generation for the outer HTML wrapper templates that style your emails.
- [Configuration](docs__ai__configuration.md) â global AI settings including the context-tuning controls referenced above.
