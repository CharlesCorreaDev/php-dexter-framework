# AI for HTML Templates | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/ai/html-templates

---

Version: 6

On this page

In addition to per-email AI generation, Blesta 6.0 includes AI assistance for the **HTML templates** that wrap your email bodies. HTML templates control the outer markup, branding, and styling that every email uses, so AI here is helpful for producing on-brand, well-structured outer shells without writing email-safe HTML by hand.

- [Where to find it](#where-to-find-it)
- [Prerequisites](#prerequisites)
- [How it differs from per-email generation](#how-it-differs-from-per-email-generation)
- [Typical use cases](#typical-use-cases)
- [Working with the result](#working-with-the-result)
- [Caveats specific to HTML templates](#caveats-specific-to-html-templates)
- [Related](#related)

## Where to find it[â](#where-to-find-it "Direct link to Where to find it")

HTML templates live under **Settings > Company > Emails > HTML Templates**. From the add or edit screen for an HTML template, an **AI Content Assistant** button opens a generation/rewrite modal â the same UI used for per-email AI generation, scoped to the HTML template instead.

## Prerequisites[â](#prerequisites "Direct link to Prerequisites")

Same as per-email AI generation:

1. A valid API key configured under Settings > System > AI.
2. **Email Templates** feature checkbox enabled in Settings > System > AI > Enabled Features (the same checkbox covers both per-email and HTML template AI).
3. Privacy notice acknowledged.

## How it differs from per-email generation[â](#how-it-differs-from-per-email-generation "Direct link to How it differs from per-email generation")

HTML templates are structurally different from email body templates:

- They use **email-safe HTML** â heavy use of inline styles, table-based layouts, and `<head>` with non-standard restrictions.
- They include placeholders for the **inner email body** (the actual per-email content rendered into the wrapper).
- They include placeholders for **branding** (logo URL, company name, contact info).

The AI assistant is prompted to produce output suitable for email rendering: inline styles, tables for layout, fallbacks for clients that strip CSS, and predictable placeholders for the inner content.

## Typical use cases[â](#typical-use-cases "Direct link to Typical use cases")

- **Initial HTML template.** Start from a generated baseline rather than pasting a template from elsewhere on the web. Provide an instruction like *"clean, single-column, dark logo header, light body, brand color #2f739d"*.
- **Variant for a campaign.** Generate a holiday or seasonal variant by rewriting an existing template with an instruction like *"adjust palette for winter, keep layout identical"*.
- **Modernize an old template.** Rewrite an existing HTML template for better mobile rendering or accessibility (e.g. *"add a viewport meta, ensure all text has 4.5:1 contrast, replace center-tag with margin auto"*).

## Working with the result[â](#working-with-the-result "Direct link to Working with the result")

The modal behavior is identical to [per-email AI generation](docs__ai__email-templates.md#working-with-the-result):

- Generated output appears in the modal with an HTML preview.
- Accepting populates the editor; you still click Save to persist.
- Iterate by adjusting your instruction and regenerating.

## Caveats specific to HTML templates[â](#caveats-specific-to-html-templates "Direct link to Caveats specific to HTML templates")

- **Test before saving.** AI may produce HTML that renders fine in your browser preview but breaks in older email clients (Outlook in particular). Send a test email and view in a few clients before committing to a generated template for production sends.
- **Branding consistency.** The AI doesn't know your brand colors, logo URL, or tagline. Either include them in your instruction every time, or accept a generated baseline and edit branding by hand once before saving.
- **Compatibility with email body templates.** If you change the inner-body placeholder name in a generated HTML template, your existing email body templates may not render correctly. Keep placeholder names aligned with what Blesta expects (the system documents the expected placeholders inline in the editor).

## Related[â](#related "Direct link to Related")

- [Email Templates](docs__ai__email-templates.md) â AI generation for the per-email body content rendered inside an HTML template.
- [Configuration](docs__ai__configuration.md) â global AI settings including the model parameters that affect output quality.
