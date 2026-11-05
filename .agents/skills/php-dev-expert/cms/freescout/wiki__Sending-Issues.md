# Sending Issues · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Sending-Issues

---

- [How emails are being sent](#how-emails-are-being-sent)
- [1) If emails are not sent or sent with delay](#1-if-emails-are-not-sent-or-sent-with-delay)
- [2) If emails are sent but not delivered to the recipient](#2-if-emails-are-sent-but-not-delivered-to-the-recipient)

## How emails are being sent

There are two steps:

- **Step 1. FreeScout passes an email to the mail server for delivery.** If there is an error on this step FreeScout shows this error in Outgoing Emails window, in "Manage > Logs > Send Errors" and to the customer in the conversation (after 1 hour of attempts).
- **Step 2. Mail server delivers an email to the recipient.** If there is an error on this step the only way for FreeScout to know about it - is to receive a bounce email from the mail server responsible for delivering the email. If FreeScout receives a bounce email it tries to link it to the conversation it's related and show corresponding info in the related conversation and thread.

So here can be issues of two kinds:

1. Emails are not sent or sent with delay.
2. Emails are sent but not delivered to the recipient.

## 1. If emails are not sent or sent with delay

### 1.2. Diagnosing the issue

1. Check `Sending Emails` errors in `Manage » Logs`.
2. Go to Mailbox "Sending Emails" section, try to send test email and you will get full SMTP log.
3. Check errors in `Manage » Logs » App Logs`.
4. Check `Outgoing Emails` under three dots in conversation threads.
5. Make sure that you have all the required PHP extensions enabled in `Manage » System » PHP` and run `php -m` in console to check if those extensions are also enabled in console version of PHP.
6. Check your mail driver's logs according to the sending method specified for the mailbox (in `Connection Settings`):
   - PHP's mail() function: `/var/log/mail.log` or `/var/log/exim4/mainlog`
   - Sendmail: `/var/log/mail.log`
   - SMTP: see your SMTP server logs
   - Email Service Provider: see your Email Service Provider's logs
7. Make sure that [Background Jobs](wiki__Background-Jobs.md) are running.
8. Try to [clear cache](wiki__Clearing-the-Cache.md).

### 1.2. Possible Issues

— **System emails, invites to support agents or replies to customers are garbled or sent as HTML code**

This may happen when you are using "PHP's mail() function" or "sendmail" as a sending method in "Manage » Settings » Mail Settings". In this case change sending method to your SMTP server. See [this issue](https://github.com/freescout-help-desk/freescout/issues/3208).

It's also possible when using SMTP as a sending method - see [this issue](https://github.com/freescout-help-desk/freescout/issues/3600#issuecomment-1850379038).

— **Connection to ssl://smtp.gmail.com:465 Timed Out**

Default SMTP timeout is 30 seconds, so try to increase SMTP timeout by adding the following parameter to the .env file and clear cache (make sure you are using FreeScout 1.8.109 or higher):

```
MAIL_SMTP_TIMEOUT=120
```

— **Connection could not be established with host smtp.gmail.com [Connection timed out #110]**

This error may happen if your server can not resolve your mail server host name into IP address (see [this](https://stackoverflow.com/questions/25517281/swiftmailer-connection-could-not-be-established-with-host-smtp-gmail-com-conne)). Also make sure that your hosting provider has not [blocked SMTP ports](https://github.com/freescout-help-desk/freescout/issues/4199#issuecomment-2322612989).

— **FreeScout sends emails infinitely in a loop**

Make sure that you don't have any forwardings, routings or autoresponders configured in the email account which you connect to FreeScout (same applies to support agent emails). As it may cause infinite email loops like in [this](https://github.com/freescout-help-desk/freescout/issues/1697#issuecomment-1031719221) or [this case](https://github.com/freescout-help-desk/freescout/issues/4143#issuecomment-2252093100).

The issue also may happen due to misspelled recipient's address - in [such cases](https://github.com/freescout-help-desk/freescout/issues/870#issuecomment-786477909) try to find the exact error message under "Outgoing Emails" (in the dropdown) or in "Manage » Logs » Send Errors".

## 2. If emails are sent but not delivered to the recipient

If you are using your own mail server, sometimes email service providers (especially Yahoo and Hotmail/Outlook/Live) may start to reject emails sent by your mailing server. Here is the list of common issues and solutions.

### Yahoo.com

> 553 5.7.2 [TSS09] All messages from 123.45.67.890 will be permanently deferred; Retrying will NOT succeed. See <https://help.yahoo.com/kb/postmaster/SLN3436.html>

Solution. Submit the following [form](https://io.help.yahoo.com/contact/index?y=PROD_POST&token=w5FCchB1dWHZDkMtMbkiWS%2FolUOf8at02BNo0Vv4K5ZVXo60zVrIKWKK47bbe4sOwkpvLfgNeQP%2FC%205zFtbBR09YD0536rfHLp%20Bjf%20GQIJpuCbt%20vRoU8qX8EKygEWITTl2J2TV04sXtxFpC7fMMwrpuNoxvWgo2EYloKkaFtqTLwKOUmR7kg%3D%3D&locale=en_US&page=contactform&selectedChannel=email-icon&isVip=false). If some of our emails were breaking their rules, after few days you they will send examples of those emails to your email.

### Hotmail.com / Live.com / Outlook.com

> 550 5.7.1 Unfortunately, messages from [123.45.67.890] weren't sent. Please contact your Internet service provider since part of their network is on our block list (AS3140). You can also refer your provider to <http://mail.live.com/mail/troubleshooting.aspx#errors>. [SN1NAM04FT055.eop-NAM04.prod.protection.outlook.com]

Submit the following [form](https://support.microsoft.com/en-us/getsupport?oaspworkflow=start_1.0.0.0&wfname=capsub&productkey=edfsmsbl3&locale=en-us&ccsid=635611717755428181). Most likely after few days they will allow to send emails from your IP.

### QQ.com

> 550 Ip frequency limited [Blocked IP 123.45.67.890]. <http://service.mail.qq.com/cgi-bin/help?subtype=1&&id=20022&&no=1000725>

Chinese QQ mail usually does not accept emails from servers located far away from China. Submitting this [form](http://mail.qq.com/cgi-bin/help_feedback_rcverr) usually does not help. Possible solution is to get a [server in Singapore](wiki__Choosing-a-Server.md) or use one of the [email delivery services](wiki__Sending-Emails.md#email-delivery-services) to send outgoing emails.
