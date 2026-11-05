# Sending Emails · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Sending-Emails

---

1. [FreeScout Email Sending Methods](#1-freescout-email-sending-methods)
2. [Email Delivery Services](#2-email-delivery-services)
3. [Email Service Providers (ESP)](#3-email-service-providers-esp)
   1. [Send Rate Limits](#31-send-rate-limits)
   2. [SMTP Configuration](#32-smtp-configuration)

## Introduction

Each mailbox in FreeScout has an **email address**. This email is set as a sender for all outgoing emails sent to customers and support agents.

There are 3 main approaches for sending emails:

- Send emails from the server where FreeScout is installed (via `PHP's mail() function` or `sendmail`).
- Set up your own SMTP server and use it to send emails (for example [Postal](https://github.com/atech/postal)).
- Use one of the [email delivery services](#email-delivery-services) (SendGrid, SendinBlue, Mailgun, etc) or [email service providers](#email-service-providers-esp) (Gmail, G Suite, Office 365, Yahoo, Hotmail, etc.) to send emails. Popular email service providers do have some [limitations](#send-rate-limits-for-email-service-providers) on amount of emails sent per day, so keep this in mind.

## 1. FreeScout Email Sending Methods

**FreeScout** provides out of the box the following methods of sending emails to customers and support agents:

- `PHP's mail() function` — emails are sent directly from your server.
- `Sendmail` — emails are sent from your server.
- `SMTP` — emails are sent via SMTP by email service provider (Gmail, Yahoo, Hotmail, etc.) or by email delivery service (Mailgun, SendGrid, etc).

## 2. Email Delivery Services

You are free to use any of the existing email delivery services to send emails from FreeScout:

- [Elastic Email](https://elasticemail.com/account#/create-account?r=bc0975e9-3d6b-462f-be7c-629e7672a4a8) — 150,000 free emails per month (5,000 per day), requires to specify your company address in each outgoing email.
- [Amazon SES](https://aws.amazon.com/ses/pricing/) — If your are using their [EC2 server](https://aws.amazon.com/ec2/) you get free 62,000 emails sent per month, and $0.10 per 1,000 emails sent thereafter.
- [SendinBlue](https://www.sendinblue.com/?tap_a=30591-fb13f0&tap_s=294678-0b81e5) — 9,000 free emails per month (300 per day).
- [Mailjet](https://www.mailjet.com/?tap_a=25852-4bddf6&tap_s=545617-55177a&aff=545617-55177a) — 6,000 free emails per month (200 per day).
- [Mailgun](https://www.mailgun.com) — 5,000 free emails per month.
- [SendGrid](https://sendgrid.com) — 6,000 free emails per month (100 per day).
- etc.

Just sign up with any email delivery service and fill out SMTP connection settings in your FreeScout installation under `Manage » Mailboxes » Connection Settings`

#### Amazon SES

- Regions and Amazon SES: <https://docs.aws.amazon.com/ses/latest/DeveloperGuide/regions.html>
- Obtaining Amazon SES SMTP Credentials: <https://docs.aws.amazon.com/ses/latest/DeveloperGuide/smtp-credentials.html>
- Configuring SPF-record for the domain: <https://docs.aws.amazon.com/ses/latest/DeveloperGuide/spf.html>

SMTP server: <https://docs.aws.amazon.com/ses/latest/DeveloperGuide/smtp-connect.html>

SMTP Port: 465 ([How to open access to external hosts on Amazon instance](https://serverfault.com/questions/377093/ec2-instance-is-blocking-all-outbound-connections-how-to-diagnose-fix))

Encryption: SSL

## 3. Email Service Providers (ESP)

### 3.1. Send Rate Limits

- **[G Suite](https://gsuite.google.com/intl/en_sg/pricing.html)** (paid, [free for nonprofits](https://www.google.com/nonprofits/offerings/apps-for-nonprofits/)): 3000 unique recipients per day (10 000 with relay configured).
- **[Microsoft Office 365 Echange](https://www.microsoft.com/en-ww/microsoft-365/exchange/exchange-online)** (paid, [free for nonprofits](https://www.microsoft.com/en/microsoft-365/nonprofit/office-365-nonprofit)): 10 000 emails per day.
- **Gmail**: 100-150 emails per day.
- **Yahoo**: 500 recipients per day.
- **Hotmail / Live / Outlook**: 100 emails per day.

### 3.2. SMTP Configuration

#### Gmail

- SMTP Server: smtp.gmail.com
- Port: 465
- Username: [example@gmail.com](mailto:example@gmail.com)
- Encryption: SSL

Enable 2-Step Verification, create an App Password and use it in FreeScout ([read more](wiki__Connect-Gmail-to-FreeScout.md)). When entering the App Password make sure not to enter any spaces (the are not needed).

#### Google Workspace (G Suite)

Follow [this instruction](wiki__Connect-FreeScout-to-Google-Workspace.md).

#### Microsoft 365 Exchange

- SMTP Server: smtp.office365.com
- Port: 587
- Encryption: TLS

Emails in Microsoft Exchange are sent via SMTP oAuth (see [this instruction](wiki__Connect-FreeScout-to-Microsoft-365-Exchange-via-OAuth.md)).

#### Yandex.Connect Mail

- SMTP Server: smtp.yandex.com
- Port: 465
- Username: [example@domain.com](mailto:example@domain.com)
- Encryption: SSL

More info [here](https://yandex.com/support/mail/mail-clients.html)
