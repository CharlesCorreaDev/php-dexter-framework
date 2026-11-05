# Fetching Emails · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Fetching-Emails

---

- [Troubleshooting Fetching](#troubleshooting-fetching)
- [Common Issues](#common-issues)
- [Checking EML file](#checking-eml-file)
- [Popular Mail Providers Configuration](#popular-mail-providers-configuration)
- - [Google Workspace (G Suite)](#google-workspace-g-suite)
- - [Gmail](#gmail)
- - [Microsoft 365 Office Exchange](#microsoft-365-office-exchange)
- - [Zoho Mail](#zoho-mail)

> Make sure that you don't have any forwardings, routings or autoresponders configured in the email account which you connect to FreeScout (same applies to support agent emails). As it may cause infinite email loops like in [this](https://github.com/freescout-help-desk/freescout/issues/1697#issuecomment-1031719221) or [this case](https://github.com/freescout-help-desk/freescout/issues/4143#issuecomment-2252093100).

# Troubleshooting Fetching

1. Check **Fetching Emails** errors in "Manage » Logs".
2. Check **fetch-emails.log** in "Manage » Logs » App Logs".
3. Check errors in **laravel** logs in "Manage » Logs » App Logs".
4. Try to disable "Validate Certificate" option in Fetching settings.
5. If your mail server requires "TLS" Encryption try "TLS (+StartTLS)" and vice versa.
6. Go to "Manage » System » Tools", click "Fetch Emails" and check the output. You can also set "Debug" checkbox to see full IMAP communication log.
7. Make sure that `schedule:run` cron job is [configured](wiki__Installation-Guide.md#10-configuring-cron-jobs) are running in `System » Status`. Some shared hostings may require to specify full path to the PHP executable (for example, `/usr/local/bin/php-7.2`).
8. Check `freescout fetch-emails` jobs via `htop` tool and if there are multiple or old processes - kill them via "Kill" menu.
9. If emails are still not being fetched try to clear cache.
10. If your mail server does not like frequent connections try to increase "Fetch Mail Schedule" option in "Manage » Settings » Mail Settings".
11. Make sure that something does not mark emails as "READ" in your mail server. Background fetching fetches only unread emails ([see this issue](https://github.com/freescout-help-desk/freescout/issues/3694#issuecomment-1896384591)).
12. If you've accidentally changed `APP_KEY` in the .env file you'll need to re-enter and re-save all passwords, including passwords for Mailbox IMAP/POP3.
13. If email is fetched but missing its body (or something else) try to check it [this way](wiki__Fetching-Emails.md#checking-eml-file).

# Common Issues

— **Error: connection setup failed: Authentication failed**

It means something is not OK with verifying peer during while connecting to the mail server. Try to set `APP_CURL_SSL_VERIFYPEER=false` in the .env file and clear cache. Please note that this reduces security, so proceed at your own risk.

— **imap\_open(): Couldn't open stream {example.org:143/imap/novalidate-cert}. TLS/SSL failure for example.org: SSL negotiation failed**

Try to change TLS to SSL or vice versa (<https://stackoverflow.com/a/72376387>). Also see the solution [here](https://github.com/freescout-help-desk/freescout/issues/2591#issuecomment-1434150716).

If you are using Microsoft Exchange on premises, make sure that `ImapProxy` and `PopProxy` components are active in your Microsoft Exchange (see [this issue](https://github.com/freescout-help-desk/freescout/issues/2848)).

— **connection setup failed**

Mail service may have limitations on number of connections per minute. So if you have a lot mailboxes from time to time your mail service may block IMAP connection. You can adjust Fetching interval in "Manage » Mail Settings".

This error may be seen from time to time when using Microsoft Office 365 (see [this discussion](https://github.com/freescout-help-desk/freescout/issues/2757#issuecomment-1439949811)).

— **connection setup failed: Authentication failed**

Check your IMAP login and password.

Also sometimes Microsoft Exchange IMAP connection may simply stop working throwing this error (like in [this issue](https://github.com/freescout-help-desk/freescout/issues/4079#issuecomment-2175796754)). In this case try to delete that account in your mail server and re-add it to FreeScout.

— **connection failed - stream\_socket\_client(): Unable to connect to ssl://imap.gmail.com:993 (Connection timed out)**

This error may happen if your server can not resolve your mail server host name into IP address (see [this](https://stackoverflow.com/a/28014425)). Also make sure that your hosting provider has not [blocked IMAP/POP3 ports](https://github.com/freescout-help-desk/freescout/issues/4199#issuecomment-2322612989).

— **imap\_open(): Couldn't open stream {mydomain.com:993/imap/ssl}. Can not authenticate to IMAP server: [CLOSED] IMAP connection broken (authenticate)**

— **imap\_open(): Couldn't open stream {imap.gmail.com:993/imap/novalidate-cert/ssl}. No such host as imap.gmail.com**

These errors indicate a connection issue between your server and mail server.

— **imap\_open(): Couldn't open stream {imap.gmail.com:993/imap/novalidate-cert/ssl}. Retrying PLAIN authentication after [AUTHENTICATIONFAILED]**

Sometimes Google Workspace can ban your server's IP address - see [this issue](https://github.com/freescout-help-desk/freescout/issues/3272#issuecomment-1680285260). In this case contact Google Workspace support.

— **imap\_open(): Couldn't open stream {mail.myserver.domain:587/imap/tls}. [CLOSED] IMAP connection broken**

Solution is described [here](https://github.com/freescout-help-desk/freescout/issues/3823#issuecomment-1965724963)

— **'Allowed memory size of NNN bytes exhausted' error when fetching emails**

This may happen when among fetched emails there is or there are emails with large attachment(s). Increase `memory_limit` value in php.ini (keep in mind that the console PHP may have it's own php.ini file).

Also adjusting the `APP_FETCHING_BUNCH_SIZE` parameter in the .env file may help (like in [this case](https://github.com/freescout-help-desk/freescout/issues/4343)). Don't forget to [clear cache](wiki__Clearing-the-Cache.md) after changing it.

— **IMAP connection broken (server response)**

See the solution [here](https://github.com/freescout-help-desk/freescout/issues/2591#issuecomment-1434150716) and discussion [here](https://github.com/freescout-help-desk/freescout/issues/3345).

— **Unexpected characters at end of address**

See the solution [here](https://github.com/freescout-help-desk/freescout/issues/1999#issuecomment-1774142197).

— **internal error: Bad token (expecting date specification)**

See [this](https://github.com/freescout-help-desk/freescout/issues/4175#issuecomment-2293605167).

— **stream\_socket\_client(): php\_network\_getaddresses: getaddrinfo failed: Temporary failure in name resolution**

Try [this](https://stackoverflow.com/a/6275627).

— **Emails are not being fetched or fetched with delay when using POP3**

Try to add `APP_USE_NEW_POP3_LIB=true` to the .env file and clear cache. Read more in [this issuethis](https://github.com/freescout-help-desk/freescout/issues/5048).

# Checking EML file

If you have EML file of an email and would like to check how FreeScout would parse it do the following:

1. Put the file into /storage/logs/email.eml
2. Run the following console command and check the output:

```
php artisan freescout:parse-eml
```

# Popular Mail Providers Configuration

You can connect FreeScout to any mail provider. Below you can find instructions for some popular mail providers.

## Google Workspace (G Suite)

Follow [this instruction](wiki__Connect-FreeScout-to-Google-Workspace.md).

New Google Wordspace accounts may receive the following error: **imap\_open(): Couldn't open stream {imap.gmail.com:993/imap/ssl}. Retrying PLAIN authentication after [ALERT] Please log in via your web browser: support.google.com/mail/acco;** (see [this](https://github.com/freescout-help-desk/freescout/issues/2594) issue). Just wait for a day and it will disappear.

## Gmail

Fetching via OAuth is not possible.

- Protocol: IMAP
- Server: imap.gmail.com
- Port: 993
- Username: [your-email@gmail.com](mailto:your-email@gmail.com)
- Password: [App-Specific Password](wiki__Connect-Gmail-to-FreeScout.md)
- Encryption: SSL

1. Enable 2-Step Verification, create an App Password and use it in FreeScout ([read more](wiki__Connect-Gmail-to-FreeScout.md)). When entering the App Password make sure not to enter any spaces (the are not needed). According to Google support App Passwords will work forever - this authentication method will not be deprecated in the future.
2. In Gmail enable IMAP in "Settings -> Forwarding and POP/IMAP -> IMAP access".

You can test IMAP authentication from command line:

```
openssl s_client -connect imap.gmail.com:993 -crlf
```

After that enter the following:

```
a login your-email@gmail.com app_password_no_spaces
```

### Possible Issues

— **imap\_open(): Couldn't open stream {imap.gmail.com:993/imap/ssl}. Retrying PLAIN authentication after [ALERT] Please log in via your web browser: support.google.com/mail/acco;**

Allow **Unknown device** at <https://myaccount.google.com/u/1/device-activity>

You may also need to do Google's "Captcha Unlock" (<https://accounts.google.com/DisplayUnlockCaptcha>) to unblock FreeScout from Gmail if you are getting this error.

If you keep getting this error over and over, make sure you turn on 2FA in your Google account and set up an ["App Specific Password"](https://www.lifewire.com/get-a-password-to-access-gmail-by-pop-imap-2-1171882) for FreeScout. Google seems less likely to block FreeScout using this method.

— **imap\_open(): Couldn't open stream {imap.gmail.com:993/imap/ssl}. Certificate failure for imap.gmail.com**

This happens due to some issues on your hosting provider, just disable `Validate Certificate` option on Fetching page.

— **imap\_open(): Couldn't open stream {imap.gmail.com:993/imap/novalidate-cert/ssl}. Retrying PLAIN authentication after [AUTHENTICATIONFAILED]**

Sometimes Google Workspace can ban your server's IP address - see [this issue](https://github.com/freescout-help-desk/freescout/issues/3272#issuecomment-1680285260). In this case contact Google Workspace support.

## Microsoft 365 Office Exchange

- Protocol: IMAP
- Server: outlook.office365.com
- Port: 993
- Encryption: SSL

Follow [this](wiki__Connect-FreeScout-to-Microsoft-365-Exchange-via-OAuth.md) instruction for OAuth.

## Zoho Mail

Fetching from Zoho Mail via POP3 does not work (see [this issue](https://github.com/freescout-help-desk/freescout/issues/1560#issuecomment-981961294)). Switch Zoho settings to allow IMAP connections, then set up FreeScout to retrieve via IMAP.
