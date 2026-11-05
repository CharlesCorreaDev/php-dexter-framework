# Choosing a Server · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Choosing-a-Server

---

## Recommended Hosting Providers

**One-Click Installs**

- [One-Click Installs](wiki__Cloud-Hosted-FreeScout.md)

**Shared Hosting**

- [DreamHost](https://www.dreamhost.com/) *$2.95/mo*

**VPS**

- [DigitalOcean](https://m.do.co/c/d094555af590) *$4/mo*

## General Info

**FreeScout** can be ran on any hosting which allows to use PHP and MySQL 5 / MariaDB 5 / PostgreSQL, even on a shared hosting (for example **[DreamHost](https://www.dreamhost.com/)**). Cheapest **$5/mo** server at [DigitalOcean](https://m.do.co/c/d094555af590) or [Amazon EC2](https://aws.amazon.com/ec2/pricing/on-demand/) (t2.nano) will be enough to run FreeScout. There are also [Cloud Solutions](wiki__Cloud-Hosted-FreeScout.md) available. There is no any minimal or recommended system requirements (CPU / RAM).

## Cron Jobs

Your server must allow to configure a [cron job](wiki__Installation-Guide.md#9-configuring-cron-jobs) to run a command every minute.

## Ports

If you are planning to send emails via SMTP, keep in mind that some shared hostings may restrict outgoing connection to SMTP ports (25, 587, 2525, etc) - so check this with your hosting before your start. If ports are closed check with the hosting if one of them can be opened. But usually hostings keep open at elast 2525 port, so you should be able to connect to some [Email Delivery Services](wiki__Sending-emails.md#email-delivery-services).

## Sending Emails

If you want to send emails using PHP's mail() function, keep in mind that shared hostings may have an outgoing mail quota limits (for example [DreamHost](https://mbsy.co/mVSLc) allows 200 recipients per hour).

If you are planning to send outgoing emails from [your own SMTP server](wiki__Sending-Methods.md), before starting **FreeScout** installation you need to make sure that SMTP server's IP is not [blacklisted](wiki__Blacklists-Check.md).

If you are planning to provide support via FreeScout to customers with Chinese emails (`qq.com` for example) and want to send emails **from your own server** (via PHP's mail function or sendmail) instead of using [email service providers](wiki__Sending-Methods.md#user-content-email-service-providers), it is highly recommended to set up your server closer to China, as `qq.com` most likely will rejet all emails sent from servers located far from China with `"550 Ip frequency limited"` error message. So if you are using [DigitalOcean](https://m.do.co/c/d094555af590) or [Amazon EC2](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html) you can get a server in Singapore and most likely your server will be able to send emails to `qq.com`.
