# Connect FreeScout to Google Workspace · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Connect-FreeScout-to-Google-Workspace

---

*Make sure that your FreeScout uses HTTPS protocol, otherwise you may be unable to connect it to Google Workspace as it requires **Authorized redirect URI**. You can change protocol in your FreeScout via `APP_URL` parameter in the .env file and after that configure HTTPS on your server (see [Installation Guide](wiki__Installation-Guide.md#6-configuring-web-server)).*

## Sending Emails

Sending and fetching emails works via the same Google Cloud Console OAuth client (you don't need to create two different OAuth clients). Instructions on how to create and configure the OAuth client are provided below in "Fetching Emails" section.

*Keep in mind that invitations to users are sent not on behalf of some mailbox but using global "System Emails" settings under "Manage > Mail Settings". And System Emails can't be sent via OAuth - use some SMTP server with login/password authentication.*

Here are "Sending Emails" connection details:

- Protocol: SMTP
- Server: smtp.gmail.com
- Port: 465
- Encryption: SSL

## Fetching Emails

1. Enable IMAP in Google Workspace.

   - Login to [Google Admin Console](https://admin.google.com/) under any of your Google Workspace administrators.
   - Navigate to **Apps > Google Workspace > Gmail**.
   - On the **End User Access** page, ensure that the option **Enable IMAP access for all users** is set to **On**. If it is set to **Off**, you can select the **Edit** button on the right side and change the value.
     *Note: If you don't want to enable IMAP for everyone for security reasons, you can utilize Organizational Units (OU) to apply different policy settings to different groups of users. For example, you can create an OU called **IMAP Users**, place users there, then select this OU on the left side of the configuration page to override the global policy*
2. Create a Project in Google Cloud Console.

   - Go to the [Google Cloud Console](https://console.cloud.google.com/).
   - Sign in with the Google Workspace account that will own the project. It can be any of your Google Workspace administrators.
   - Click "Select a project" button at the top of the page and select "New Project" . Give it a name and click "Create". ![1](https://private-user-images.githubusercontent.com/172874623/555168364-fb8f80f9-13a9-4027-8660-9ea8b6538336.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1ODMsIm5iZiI6MTc5MzIxMzI4MywicGF0aCI6Ii8xNzI4NzQ2MjMvNTU1MTY4MzY0LWZiOGY4MGY5LTEzYTktNDAyNy04NjYwLTllYThiNjUzODMzNi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYxMDI4JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MTAyOFQxODQ4MDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04NGFhYWVmNTJhZTQxODI2ZmU3NTNkYjg1NzBlZmUyNjY0MWM4MTIwZmQ3ODg1NjQwM2VjOWM4NjFlZGRjMDA0JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZyZXNwb25zZS1jb250ZW50LXR5cGU9aW1hZ2UlMkZwbmcifQ.rg9DT9TBlWWlPzrcKTquHqRPOwYxwApIa1XQydNodKk)
   - Again click "Select a project" button at the top of the page, select the Organization (if not selected) and select newly created project.
3. Configure the OAuth Consent Screen.

   - In your new project, navigate to **APIs & Services > OAuth consent screen** using the left-hand menu.
   - Click **Get started** button, enter App Information and click Next button: ![2](https://private-user-images.githubusercontent.com/172874623/555182533-05a5a0dd-40d3-4e42-9b43-c15b098fb280.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1ODMsIm5iZiI6MTc5MzIxMzI4MywicGF0aCI6Ii8xNzI4NzQ2MjMvNTU1MTgyNTMzLTA1YTVhMGRkLTQwZDMtNGU0Mi05YjQzLWMxNWIwOThmYjI4MC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYxMDI4JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MTAyOFQxODQ4MDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0wZjE5ZWJhM2Y5YTFiYmRhMzFmZGNhZmYyYmM3YTIzODdmNDEyMWRjYmRhOWY2MDYwY2QxYTYwMWIyZTczOTU5JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZyZXNwb25zZS1jb250ZW50LXR5cGU9aW1hZ2UlMkZwbmcifQ.ZPpBMmAcRZDTUMeRyWJTlVh4sG95TkfmMBKuMecXwew)
   - Select "**Internal**" on the "Audience" step.
   - Enter email address on "Contact Information" step and finish the process.
4. Configure OAuth client in Google Workspace.

   - Click **Create OAuth client** button on "OAuth Overview" page and enter the following data: ![3](https://private-user-images.githubusercontent.com/172874623/555184062-82e67e2a-910b-4483-b1f3-aadad797594e.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1ODMsIm5iZiI6MTc5MzIxMzI4MywicGF0aCI6Ii8xNzI4NzQ2MjMvNTU1MTg0MDYyLTgyZTY3ZTJhLTkxMGItNDQ4My1iMWYzLWFhZGFkNzk3NTk0ZS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYxMDI4JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MTAyOFQxODQ4MDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1jMzJlMzBiMjk4MDc5ZGQ4OTA3YWU4Zjg5NzllMDU3MGVkYWUwYzViMjdlNjEzYTk2NTNjMmE5YjQ4MTEwZDEwJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZyZXNwb25zZS1jb250ZW50LXR5cGU9aW1hZ2UlMkZwbmcifQ.rCgf4czWKyS61iebF9ziMlP7Lpwz5O3MxlffULPKEz0)
   - In **Authorized redirect URIs** click "ADD URI" and enter <https://yourdomain.com/mailbox/oauth> (*make sure to change the domain to yours*).
   - In the "OAuth client created" window copy "**Client ID**" and paste in FreeScout into **Username** field in "Fetching Emails" for the mailbox. Copy "**Client secret**" and paste into the **Password** field in FreeScout.

![4](https://private-user-images.githubusercontent.com/172874623/555186456-9a319ef0-80c6-4005-a31d-a75beec903dd.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1ODMsIm5iZiI6MTc5MzIxMzI4MywicGF0aCI6Ii8xNzI4NzQ2MjMvNTU1MTg2NDU2LTlhMzE5ZWYwLTgwYzYtNDAwNS1hMzFkLWE3NWJlZWM5MDNkZC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYxMDI4JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MTAyOFQxODQ4MDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1lZWRmOTIzNTI3Yzc3MGExZDVmYTExOWZkODk1NjU3NDBlY2VhODk5MWMwMGI0YTQyMjFlZDFiYjE4NzY0ZTRhJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZyZXNwb25zZS1jb250ZW50LXR5cGU9aW1hZ2UlMkZwbmcifQ.c8XZl0pfTjRnHHxCBm-0tQEpUx8kaHz0EFxTfGe3VfQ)

Client Secret can be also found in the newly created OAuth Client in "Client secrets" section.

5. Add Required Scopes.

   - Go the "Data Access" in the left menu and click **Add or remove scopes**
   - In the "Manually add scopes" field at the bottom enter **<https://mail.google.com/>** and click "Add to table". This scope is required for full IMAP, POP, and SMTP access to a user's mailbox.
   - Click "Update", then "Save".
6. Enable the Gmail API (to use OAuth with IMAP, the Gmail API must be enabled for your project).

   - Go to the Welcome page of Google Cloud (<https://console.cloud.google.com/welcome>) and make sure you are logged in as Google Workspace administrator.
   - Go to **APIs & Services > Library**.
   - Search for "**Gmail API**" and select it.
   - Click the Enable button.
7. In "Fetching Emails" section in FreeScout enter connection details and save settings:

- **Protocol**: IMAP
- **Server**: imap.gmail.com
- **Port**: 993
- **Encryption**: SSL

8. Click "Connect" next to "Google Workspace" in FreeScout and authenticate under the user corresponding to the email address your are using for the mailbox in FreeScout ("Connect" button appears only after you enter Username and Password). **Make sure to authenticate in Google Workspace under mailbox user! Otherwise you will be getting "Invalid credentials (Failure) / status:400" error**

![5](https://private-user-images.githubusercontent.com/172874623/555248832-ba0b3b40-c753-462b-8c0d-ad703f50c9c0.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1ODMsIm5iZiI6MTc5MzIxMzI4MywicGF0aCI6Ii8xNzI4NzQ2MjMvNTU1MjQ4ODMyLWJhMGIzYjQwLWM3NTMtNDYyYi04YzBkLWFkNzAzZjUwYzljMC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYxMDI4JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MTAyOFQxODQ4MDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1lM2UyOTE4ZDIyYWM4NjUyNDBhNGVkMDJjYjJhOGUwM2Y1NmJlODBjN2U4ZGM5YjFlMDFkMTgyZDE1Yjg0Y2E4JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZyZXNwb25zZS1jb250ZW50LXR5cGU9aW1hZ2UlMkZwbmcifQ.CTzN4lKY3_3Zill4KvzLhd17JpBCF8s1XSZHBhqV2LI)

## Email Address in Username Field

If needed you can specify email address in the Username fields for Fetching and Sending like this:

`test@example.org:123-456-789` (where `123-456-789` - OAuth Client ID)

![Image](https://private-user-images.githubusercontent.com/172874623/519600777-c2af4e3e-6ff4-4632-a9c4-e331d99ebcf0.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3OTMyMTM1ODMsIm5iZiI6MTc5MzIxMzI4MywicGF0aCI6Ii8xNzI4NzQ2MjMvNTE5NjAwNzc3LWMyYWY0ZTNlLTZmZjQtNDYzMi1hOWM0LWUzMzFkOTllYmNmMC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYxMDI4JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MTAyOFQxODQ4MDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04NDM3MzYwZmExMzVhMWI5YzA4NzFjMDNlM2U3ZDdiNDNkYTk4YzhjYjU5ZGNiYThhOTcxYzViNTg2ZDFiMDYxJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZyZXNwb25zZS1jb250ZW50LXR5cGU9aW1hZ2UlMkZwbmcifQ.fpD1mpwNM83RhutBUMc0-CsEzsbWxTCv8RQG21zi5NA)

## Troubleshooting OAuth Emails Fetching

If you need to debug the process of fetching emails via IMAP & OAuth, add `APP_DEBUG=true` to the .env file and [clear cache](wiki__Clearing-the-Cache.md). After that run the following console command which will show the process of interaction between FreeScout and MS365 IMAP server:

```
php artisan freescout:fetch-emails
```

After that you can also connect via console directly to the Google Workspace IMAP server and pass obtained from `php artisan freescout:fetch-emails` instructions:

```
openssl s_client -crlf -connect imap.gmail.com:993
```

#### Invalid credentials (Failure)

It means you've connected to Google Workspace OAuth via Google Workspace user whose email is different from mailbox's email address.

#### If your FreeScout can't connect via IMAP anymore: imap\_open(): Couldn't open stream {imap.gmail.com:993/imap/novalidate-cert/ssl}

Sometimes Google can ban your server's IP address - see [this issue](https://github.com/freescout-help-desk/freescout/issues/3272#issuecomment-1680285260). In this case contact Google support.
