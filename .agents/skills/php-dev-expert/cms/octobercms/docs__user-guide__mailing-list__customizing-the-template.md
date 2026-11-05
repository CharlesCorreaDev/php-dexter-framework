# Customizing the Template - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/mailing-list/customizing-the-template.html

---

# Customizing the Template

Customize the campaign email template with your own branding and layout.

- [Opening the Template](docs__user-guide__mailing-list__customizing-the-template.md#opening-the-template)
- [Understanding the Syntax Fields](docs__user-guide__mailing-list__customizing-the-template.md#understanding-the-syntax-fields)
- [Text](#text)
- [Textarea](#textarea)
- [Rich Editor](#rich-editor)
- [File Upload](#file-upload)
- [Repeater](#repeater)
- [Template Tags](docs__user-guide__mailing-list__customizing-the-template.md#template-tags)
- [Customizing the Design](docs__user-guide__mailing-list__customizing-the-template.md#customizing-the-design)
- [Creating Multiple Templates](docs__user-guide__mailing-list__customizing-the-template.md#creating-multiple-templates)
- [Next Steps](docs__user-guide__mailing-list__customizing-the-template.md#next-steps)

[More...](#)

The default campaign template provides a working starting point, but you will want to match it to your site's branding. In this step, you will learn how the template syntax works and create a custom email design.

## [#](#opening-the-template) Opening the Template

The campaign template lives at `campaign/default-template.htm` in your theme. Open it in the CMS Editor. You will notice it looks different from your regular site pages:

- It does not use a layout. Campaign templates are standalone HTML email documents.
- The HTML uses table-based formatting with inline styles. This is required because email clients like Gmail and Outlook strip `<style>` blocks and ignore modern CSS features like flexbox and grid.
- The `[campaignTemplate]` component handles email verification, unsubscribe links, and open tracking.

## [#](#understanding-the-syntax-fields) Understanding the Syntax Fields

The template uses a special syntax for defining editable fields. When you create a campaign and select this template, these fields appear as a form in the backend where you can enter your content.

Here are the field types available:

### [#](#text) Text

A single-line input for short text like headings and labels.

```
{text name="greeting" label="Greeting"}Hello, {first_name}!{/text}
```

The text between the opening and closing tags is the default value.

### [#](#textarea) Textarea

A multi-line input for paragraphs of plain text.

```
{textarea name="intro" label="Introduction" size="small"}{/textarea}
```

The optional `size` attribute controls the height of the textarea in the backend form (`small`, `large`).

### [#](#rich-editor) Rich Editor

A WYSIWYG content editor for formatted HTML content.

```
{richeditor name="body" label="Email content" size="huge"}{/richeditor}
```

### [#](#file-upload) File Upload

A file upload field. The output value is the full URL path to the uploaded file.

```
{fileupload name="banner" label="Banner image" imageWidth="600" imageHeight="200"}{/fileupload}
```

Use the output as an `<img>` src attribute:

```
<img src="{fileupload name="banner" label="Banner image"}http://placehold.it/600x200{/fileupload}" />
```

### [#](#repeater) Repeater

A repeating group of fields. Each instance adds another set of the inner fields.

```
{repeater name="sections" prompt="Add another section"}
    <h2>{text name="heading" label="Heading"}{/text}</h2>
    {richeditor name="content" label="Content"}{/richeditor}
{/repeater}
```

The `prompt` attribute sets the button text for adding new instances.

## [#](#template-tags) Template Tags

In addition to the syntax fields, campaign templates support bracket tags that are resolved per subscriber when the email is sent. These tags work both inside syntax field content and directly in the template HTML.

| Tag | Output |
| --- | --- |
| `{first_name}` | Subscriber's first name |
| `{last_name}` | Subscriber's last name |
| `{email}` | Subscriber's email address |
| `{browser_url}` | URL to view the email in a web browser |
| `{unsubscribe_url}` | URL for the subscriber to opt out |
| `{tracking_pixel}` | Invisible image tag for open tracking. The plugin injects one automatically before `</body>`, so only add this tag when you need to control its placement |

Always include an `{unsubscribe_url}` link in your templates. Most email providers require it, and campaigns without one are more likely to be flagged as spam.

## [#](#customizing-the-design) Customizing the Design

Here is a simplified template you can use as a starting point. It replaces the default with a cleaner structure while keeping the table-based email HTML pattern required for compatibility.

Open `campaign/default-template.htm` in the CMS Editor and replace its contents:

```
title = "Newsletter"
url = "/campaign/message/:code"
description = "Clean newsletter template with a rich editor"

[campaignTemplate]
verifyPage = "subscribe/confirmed"
unsubscribePage = "subscribe/goodbye"
```

```
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
        Newsletter
    </title>
</head>

<body style="margin: 0; padding: 0; background-color: #f3f4f6;">

    <table cellspacing="0" cellpadding="0" border="0" width="100%">
    <tr>
    <td align="center" style="padding: 24px 0;">

        <!-- Email container -->
        <table cellspacing="0" cellpadding="0" border="0" width="600" style="width: 600px; background-color: #ffffff; border-radius: 8px; overflow: hidden;">

            <!-- Header -->
            <tr>
                <td style="background-color: #1e3a5f; padding: 24px 32px; text-align: center;">
                    <h1 style="margin: 0; color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold;">
                        My Site
                    </h1>
                </td>
            </tr>

            <!-- Body -->
            <tr>
                <td style="padding: 32px;">
                    <div style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 1.6; color: #333333;">
                        <p style="margin: 0 0 16px;">
                            {text name="greeting" label="Greeting"}Hello, {first_name}!{/text}
                        </p>
                        {richeditor name="body" label="Email content" size="huge"}{/richeditor}
                    </div>
                </td>
            </tr>

            <!-- Footer -->
            <tr>
                <td style="background-color: #f9fafb; padding: 24px 32px; border-top: 1px solid #e5e7eb;">
                    <div style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #6b7280; text-align: center; line-height: 1.5;">
                        <p style="margin: 0 0 8px;">
                            You received this email because you subscribed to our newsletter.
                        </p>
                        <p style="margin: 0;">
                            <a href="{browser_url}" style="color: #2563eb; text-decoration: none;">
                                View in browser
                            </a>
                            &nbsp;&bull;&nbsp;
                            <a href="{unsubscribe_url}" style="color: #2563eb; text-decoration: none;">
                                Unsubscribe
                            </a>
                        </p>
                    </div>
                </td>
            </tr>

        </table>

    </td>
    </tr>
    </table>

</body>
</html>
```

This template has:

- A branded header with your site name and color
- A greeting field with the subscriber's first name
- A single rich editor for the main email content
- A footer with "View in browser" and "Unsubscribe" links
- An invisible tracking pixel for open rate tracking, injected automatically before the closing `</body>` tag

You can adjust the colors, add a logo image, or restructure the sections to match your brand. Just remember to keep using HTML tables with inline styles for email compatibility.

## [#](#creating-multiple-templates) Creating Multiple Templates

You can create multiple CMS pages with the `campaignTemplate` component, and each one becomes a selectable template when creating a campaign. For example:

- **Newsletter**: the template above with a greeting and rich editor for general updates
- **Announcement**: a minimal template with just a heading and short text for urgent notices
- **Product Update**: a template with a file upload for product images and repeating feature sections

Each template page needs its own URL with a `:code` parameter (e.g., `/campaign/announcement/:code`). The `verifyPage` and `unsubscribePage` settings should be the same across all templates.

## [#](#next-steps) Next Steps

Continue to [Dynamic Campaigns](docs__user-guide__mailing-list__dynamic-campaigns.md) to build a template that automatically includes your latest blog posts.

← [Sending Campaigns](docs__user-guide__mailing-list__sending-campaigns.md)[Dynamic Campaigns](docs__user-guide__mailing-list__dynamic-campaigns.md) →
