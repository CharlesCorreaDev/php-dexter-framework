# Hosting Live Helper Chat on DigitalOcean | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/development/hosting-on-digitalocean

---

On this page

## Introduction[​](#introduction "Direct link to Introduction")

[DigitalOcean](https://m.do.co/c/09c74421e3c2) allows you to easily start a preconfigured Live Helper Chat instance.

You can now host Live Helper Chat directly on DigitalOcean using their marketplace: <https://marketplace.digitalocean.com/apps/live-helper-chat>

## Requirements[​](#requirements "Direct link to Requirements")

Live Helper Chat runs well on the smallest available DigitalOcean droplet, which costs $5 per month. It is more cost-effective to run it on [DigitalOcean](https://m.do.co/c/09c74421e3c2) than on my own hosting solution 😄. My hosting provides automated updates and directly supports the project.

## Configured Extensions[​](#configured-extensions "Direct link to Configured Extensions")

The following extensions are included and configured in this package:

- [NodeJS-Helper](https://github.com/LiveHelperChat/NodeJS-Helper): This extension provides real-time chatting functionality without message delays.
- [lhc-php-resque](https://github.com/LiveHelperChat/lhc-php-resque): This extension runs background workers for external tasks, enabling background [Rest API](docs__docs__bot__rest-api.md) calls.

The snapshot also has the following configured:

- [cronjobs](docs__docs__development__cronjob.md)
- Co-Browsing NodeJS server

## Core Software Stack[​](#core-software-stack "Direct link to Core Software Stack")

- CentOS 7.6
- MariaDB 10.4.12-MariaDB
- NodeJS v10.20.1
- PHP 7.4.5
- PHP-FPM 7.4.5 (fpm-fcgi)
- Nginx 1.16.1

## How to Disable Installed Extensions[​](#how-to-disable-installed-extensions "Direct link to How to Disable Installed Extensions")

If you want to disable any of the installed extensions, follow these steps:

### Disabling [lhc-php-resque](https://github.com/LiveHelperChat/lhc-php-resque)[​](#disabling-lhc-php-resque "Direct link to disabling-lhc-php-resque")

Prevent the service from starting again:

```
sudo rm -f /opt/livehelperchat/resque/.enable-cron
```

Stop the service:

```
sudo kill -9 $(ps aux | grep "[0-9] resque-1.2: *" | awk '{print $2}')
```

Update `/var/www/html/settings/settings.ini.php`:

From:

```
...  
'extensions' =>   
      array (  
        0 => 'nodejshelper',  
        1 => 'lhcphpresque',  
),  
...
```

To:

```
...  
'extensions' =>   
      array (  
        0 => 'nodejshelper',  
),  
...
```

[Clear cache](docs__docs__system__clearing-cache.md) from the back office.

### Disabling Co-Browsing NodeJS Server[​](#disabling-co-browsing-nodejs-server "Direct link to Disabling Co-Browsing NodeJS Server")

If you do not plan to use screen sharing, disabling this service can save memory.

```
sudo systemctl stop nodejscobrowser  
sudo systemctl disable nodejscobrowser
```

### Disabling [NodeJS-Helper](https://github.com/LiveHelperChat/NodeJS-Helper) Extension[​](#disabling-nodejs-helper-extension "Direct link to disabling-nodejs-helper-extension")

If you want to further optimize, you can disable this extension.

```
sudo systemctl stop nodejshelper  
sudo systemctl disable nodejshelper
```

Update `/var/www/html/settings/settings.ini.php`:

From:

```
...  
'extensions' =>   
      array (  
        0 => 'nodejshelper',  
        1 => 'lhcphpresque',  
),  
...
```

To:

```
...  
'extensions' =>   
      array (  
        0 => 'lhcphpresque',  
),  
...
```

[Clear cache](docs__docs__system__clearing-cache.md) from the back office.

## Database Logins[​](#database-logins "Direct link to Database Logins")

The database root login credentials can be found in this file:

> /root/.digitalocean\_password

## How to Update Live Helper Chat[​](#how-to-update-live-helper-chat "Direct link to How to Update Live Helper Chat")

I have prepared a shell script for updating. Run this command after logging into the server, but only after you have installed Live Helper Chat.

```
sudo /opt/livehelperchat/lhc_upgrade.sh
```

If you are running an older version, you can also run this command:

```
cd /var/www/git/NodeJS-Helper/ && git pull origin master
```

If you encounter an issue like this:

```
Updating nodejs extension  
remote: Enumerating objects: 144, done.  
remote: Counting objects: 100% (144/144), done.  
remote: Compressing objects: 100% (39/39), done.  
remote: Total 118 (delta 72), reused 104 (delta 58), pack-reused 0  
Receiving objects: 100% (118/118), 12.58 KiB | 0 bytes/s, done.  
Resolving deltas: 100% (72/72), completed with 15 local objects.  
From https://github.com/LiveHelperChat/NodeJS-Helper  
* branch            master     -> FETCH_HEAD  
  Updating 636aeb4..5631e10  
  error: Your local changes to the following files would be overwritten by merge:  
  nodejshelper/serversc/lhc/server.js  
  Please, commit your changes or stash them before you can merge.  
  Aborting  
  Redirecting to /bin/systemctl restart nodejshelper.service
```

Run this command:

```
cd /var/www/git/NodeJS-Helper && git checkout -f && git pull origin master
```

After that, modify `/var/www/git/NodeJS-Helper/nodejshelper/serversc/lhc/server.js` and replace `<use_your_secret_hash>` with the value of the `secrethash` variable found in `/var/www/html/settings/settings.ini.php`.

Then, restart the NodeJS-Helper service:

```
service nodejshelper restart
```

Finally, clear the cache in the back office.

## To-Dos After Installation[​](#to-dos-after-installation "Direct link to To-Dos After Installation")

- [Generate embed code](docs__docs__integrating.md) and add it to your website.
- Go to your account and configure your username and last name. Also, set your default nick as a support agent.
- Configure your DNS records (SPF) so the server can send legitimate emails.
- If you plan to use the Rest API response type for a bot, edit `/var/www/html/extension/lhcphpresque/settings/settings.ini.php` and set `site_address` to `http://<server_ip>` or `http(s)://example.org`.

## SWAP[​](#swap "Direct link to SWAP")

DigitalOcean does not recommend adding SWAP. However, if you still want to, you can follow this [tutorial](https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-centos-7).
