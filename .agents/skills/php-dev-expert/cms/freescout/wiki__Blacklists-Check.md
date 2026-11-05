# Blacklists Check · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Blacklists-Check

---

If you are planning to send outgoing emails from [your own server or your own SMTP server](https://github.com/freescout-helpdesk/freescout/wiki/Sending-Methods), before starting **FreeScout** installation you need to make sure that server's IP, from which you are going to send emails, is not blacklisted by email blacklists.

If you are sending emails from **FreeScout** via PHP's `mail()` function or sendmail, you need to check your server's IP address. If you are sending emails via your own SMTP server, you need to check SMTP's server IP address.

You can check IP against blacklists using the following tools:

- [Spamhaus DROP list](https://www.spamhaus.org/drop/drop.txt) - First check just two numbers of your IP address (for example `91.220.`) and if it is in the list, use this [tool](https://www.ipaddressguide.com/cidr) to check if your IP address is in the range.
- <https://www.whatismyip.com/blacklist-check/>
- <https://www.dnsbl.info/dnsbl-database-check.php>
- <https://whatismyipaddress.com/blacklist-check>
- <https://www.webiron.com/i/> - There should be no errors in BLACKLIST STATUS section.
- [HetrixTools](https://hetrixtools.com/661050.html) - You can also configure permanent monitoring of up to 3 IPs for free with HetrixTools.

If any of the blacklists says that IP is listed in **dnsbl.spfbl.net** or **UCEPROTECTL3**, just ignore it, you still will be able to send emails without any problems.

If your server is blacklisted, just recreate an instance/droplet to get a new IP address and check again.
