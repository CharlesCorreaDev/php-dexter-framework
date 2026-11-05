# Connect FreeScout to Microsoft 365 Exchange via OAuth · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Connect-FreeScout-to-Microsoft-365-Exchange-via-OAuth

---

*If you need to connect a shared Microsoft 365 mailbox to FreeScout you need to apply a Business Basic license to the shared Microsoft 365 mailbox (or Microsoft Exchange Online Plan 1 license - read more [here](https://github.com/freescout-help-desk/freescout/issues/3919)).*

*Make sure that your FreeScout uses HTTPS protocol, otherwise you'll be unable to connect it to Microsoft Office 365 as it requires HTTPS Redirect URI. You can change protocol in your FreeScout via `APP_URL` parameter in the .env file and after that configure HTTPS on your server (see [Installation Guide](wiki__Installation-Guide.md#6-configuring-web-server)).*

This guide explains how to send and fetch emails via SMTL and IMAP. There is also [Community Module](https://github.com/tombruton87/freescout-mail365) allowing to send & fetch emails via Microsoft 365 Graph API.

## Sending Emails

Sending and fetching emails works via the same Microsoft Exchange app (you don't need to create two different Microsoft Exchange apps). Instructions on how to create and configure the app are provided below in "Fetching Emails" section.

If you haven't been using SMTP, you may need to enable it using [these Microsoft instructions](https://docs.microsoft.com/en-us/exchange/clients-and-mobile-in-exchange-online/authenticated-client-smtp-submission). You'll also have to set a password if using a shared mailbox, and you may have to disable security defaults in Azure or it will override SMTP settings. Connection details for FreeScout are provided [here](wiki__Sending-emails.md#microsoft-365-exchange).

If you are receiving `CN='your.server.com' did not match expected CN='smtp.office365.com'` error - see [this](https://smackdown.blogsblogsblogs.com/2021/08/28/peer-certificate-did-not-match-smtp-office365-com/).

*Keep in mind that invitations to users are sent not on behalf of some mailbox but using global "System Emails" settings under "Manage > Mail Settings". And System Emails can't be sent via OAuth - use some SMTP server with login/password authentication.*

Here are "Sending Emails" connection details:

- Protocol: SMTP
- Server: smtp.office365.com
- Port: 587
- Encryption: TLS

![Image](https://private-user-images.githubusercontent.com/172874623/540196391-be2c933a-bd5f-4406-9f1f-67d2c3f2d1f9.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1ODMsIm5iZiI6MTc5MzIxMzI4MywicGF0aCI6Ii8xNzI4NzQ2MjMvNTQwMTk2MzkxLWJlMmM5MzNhLWJkNWYtNDQwNi05ZjFmLTY3ZDJjM2YyZDFmOS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYxMDI4JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MTAyOFQxODQ4MDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0xYTU0YTlhN2JlYmFhYjljMzI2OTM1MGMwNTM4NjQ2MzZlMDMyYWJiYjNhNjdkZjRkOGQzNGNkMDU4MTE1ZWYwJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZyZXNwb25zZS1jb250ZW50LXR5cGU9aW1hZ2UlMkZwbmcifQ.y423ZZZHm00cbFytZ41DFBOfetJy09AGj5nFIrJRU6M)

## Fetching Emails

> Keep in mind that sometimes MS365 mail is experiencing some [technical issues](https://github.com/freescout-help-desk/freescout/issues/2264#issuecomment-1255149413) which may result in errors like `connection setup failed` or `Connected, but no IMAP folders found`.

The MS365 user you will be using to connect to FreeScout must have a MS365 mailbox and a license allowing to access it (try to open <https://outlook.office365.com/mail/>). Also make sure to disable [Dynamic attachment scanning](https://learn.microsoft.com/en-us/microsoft-365/security/office-365-security/safe-attachments-about?view=o365-worldwide) in MS365 (see [this issue](https://github.com/freescout-help-desk/freescout/issues/2979)).

1. Register an app in "Azure Active Directory » App registrations » New Registration". Select "Accounts in any organizational directory (Any Azure AD directory - Multitenant)
   " in Supported account types. Set **Web** as Redirect URI and enter URL: <https://yourdomain.com/mailbox/oauth> *(make sure to change the domain to yours*). Also you can read more on creating Microsoft Exchange apps [here](https://docs.microsoft.com/en-us/azure/active-directory/develop/quickstart-register-app).
2. In the app settings in "API permissions" click "Add a permission", then click "Microsoft Graph" and choose Delegated permissions: `IMAP.AccessAsUser.All`, `Mail.Read`, `Mail.Read.Shared`, `Mail.ReadBasic`, `Mail.ReadBasic.Shared`, `Mail.ReadWrite`, `Mail.ReadWrite.Shared`, `Mail.Send`, `Mail.Send.Shared`, `offline_access`, `SMTP.Send`, `User.Read`.

![2](https://user-images.githubusercontent.com/40499291/213097702-c3bef7c6-0305-45cc-9aa2-f1a348eef618.png)

3. In "Authentication » Supported account types" make sure that **Accounts in any organizational directory (Any Azure AD directory - Multitenant)** is selected.
4. Open app's Overview copy "Application (client) ID" to FreeScout into **Username** field in "Fetching Emails" for the mailbox.

![2022-03-09_16-57-26](https://user-images.githubusercontent.com/40499291/157456097-80b11ae7-3c30-4ddc-89f7-8eb2ea7eec1e.png)

5. Create secret in "Certificates & secrets" (set expiration date as far as possible - usually 2 years) and copy Secret Value (not Secret ID!!!) to FreeScout into **Password** field in "Fetching Emails" for the mailbox.

![2022-03-18_08-23-14](https://user-images.githubusercontent.com/40499291/158942584-fa2536f3-db05-4551-9ae2-16d4d6c3ce0c.png)

6. In "Fetching Emails" enter connection details and save settings:

- Protocol: IMAP
- Server: outlook.office365.com
- Port: 993
- Encryption: SSL

7. Click "Connect" next to "Microsoft Exchange" and authenticate Microsoft Exchange under the user corresponding to the email address your are using for the mailbox in FreeScout ("Connect" button appears only after you enter Username and Password). **Make sure to authenticate in Microsoft Exchange under mailbox user!!! Otherwise you will be getting "Connected, but no IMAP folders found" error (like in [this case](https://github.com/freescout-help-desk/freescout/issues/2264))**

![2022-03-09_17-05-51](https://user-images.githubusercontent.com/40499291/157457902-158b6ef5-ead8-409d-ae35-88d920dff5c0.png)

8. If you want to restrict the specific MS 365 mailboxes that the registered Azure App has access to — see `1. Set Application Access Policies in Exchange Online` section [here](https://m365scripts.com/exchange-online/how-to-limit-app-permissions-to-specific-exchange-online-mailboxes/).

### Email Address in Username Field

If needed you can specify email address in the Username fields for Fetching and Sending like this:

`test@example.org:123-456-789` (where `123-456-789` - oAuth Client ID)

![Image](https://private-user-images.githubusercontent.com/172874623/519600777-c2af4e3e-6ff4-4632-a9c4-e331d99ebcf0.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1ODMsIm5iZiI6MTc5MzIxMzI4MywicGF0aCI6Ii8xNzI4NzQ2MjMvNTE5NjAwNzc3LWMyYWY0ZTNlLTZmZjQtNDYzMi1hOWM0LWUzMzFkOTllYmNmMC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYxMDI4JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MTAyOFQxODQ4MDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04NDM3MzYwZmExMzVhMWI5YzA4NzFjMDNlM2U3ZDdiNDNkYTk4YzhjYjU5ZGNiYThhOTcxYzViNTg2ZDFiMDYxJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZyZXNwb25zZS1jb250ZW50LXR5cGU9aW1hZ2UlMkZwbmcifQ.fpD1mpwNM83RhutBUMc0-CsEzsbWxTCv8RQG21zi5NA)

### Troubleshooting OAuth Emails Fetching

If you need to debug the process of fetching emails via IMAP & OAuth, add `APP_DEBUG=true` to the .env file and [clear cache](wiki__Clearing-the-Cache.md). After that run the following console command which will show the process of interaction between FreeScout and MS365 IMAP server:

```
php artisan freescout:fetch-emails
```

After that you can also connect via console directly to the MS365 IMAP server and pass obtained from `php artisan freescout:fetch-emails` instructions:

```
openssl s_client -crlf -connect outlook.office365.com:993
```

#### — Emails are fetched from MS365 mailbox without attachments.

Disable [Dynamic attachment scanning](https://learn.microsoft.com/en-us/microsoft-365/security/office-365-security/safe-attachments-about?view=o365-worldwide) in MS365 (see [this issue](https://github.com/freescout-help-desk/freescout/issues/2979)).

#### — If you see "Error: connection setup failed" in logs from time to time

Check "Manage » Logs » Fetch Errors". If you see something like *"Error occurred refreshing oAuth Access Token: The redirect URI '<http://example.org/mailbox/oauth>' specified in the request does not match the redirect URIs configured for the application"* it means you need to add '<http://example.org/mailbox/oauth>' to the App settings in Azure.

Try to increase "Fetching Interval" in "Manage » Settings » Mail Settings". If it does not help - just ignore it (see [this discussion](https://github.com/freescout-help-desk/freescout/issues/2757#issuecomment-1439949811)).

#### — Error: connection failed; File: /overrides/webklex/php-imap/src/Connection/Protocols/ImapProtocol.php

This may mean that something is wrong in "Fetching Emails" settings - check Server, Port, etc.

#### — Connected, but no IMAP folders found

Sometimes it may be related to technical issues in MS365 or you can try [this solution](https://github.com/freescout-help-desk/freescout/issues/3847#issuecomment-1984097403).

#### — Error occurred refreshing oAuth Access Token

Go to your Azure AD portal (Entra ID), open Applications > App Registration, open the FreeScout app, then click on "Certificates and secrets" and create a new secret. Copy the Value ID. Then enter that as the password in the Fetch Emails section of the mailbox in FreeScout.
