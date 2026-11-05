# Connect Microsoft Office 365 Exchange to FreeScout · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Connect-Microsoft-Office-365-Exchange-to-FreeScout

---

**Method for fetching emails from Microsoft Exchange described below does not work anymore. See updated instruction [here](https://github.com/freescout-helpdesk/freescout/wiki/Connect-FreeScout-to-Microsoft-365-Exchange-via-OAuth).**

Usually you can **send** emails from FreeScout on behalf of your Microsoft Office 365 Exchange email without any problems (see instruction [here](https://github.com/freescout-helpdesk/freescout/wiki/Sending-emails#microsoft-office-365-exchange)). If sending is not working for you, see instructions below.

In order to **fetch** emails from Microsoft 365 mailbox give Microsoft's shared mailbox's user (same alias) a password by 'resetting' it and use that to authenticate. When creating a shared mailbox, Exchange assigns a 'user' to it with the same alias. So when you, for example, create a shared mailbox called [info@example.org](mailto:info@example.org), Exchange will create a user called info with the same mail address. Obviously, you can't login to this user because it has no password until you give it one!

1. Make sure you've got a shared mailbox at Microsoft Office 365 Exchange.
2. Log in to the Microsoft 365 Admin Center. You must be an admin to do so at [admin.microsoft.com](wiki__admin.microsoft.com.md).
3. Go to "Users > Active users" and select the user with the same mail address (aka 'alias' or 'UPN') as your shared mailbox.
4. Click Reset password and select `Let me create the password` and enter the desired password. Save it.

You can now enter the shared mailbox as username and the password in FreeScout's mailbox connection settings.

Microsoft made some changes. So after performing steps above see also this [instruction](https://github.com/freescout-helpdesk/freescout/issues/1769#issuecomment-1054713140).
