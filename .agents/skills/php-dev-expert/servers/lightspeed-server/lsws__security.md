# Security | Configuration | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/security/

---

# Security Configuration[¶](#security-configuration "Permanent link")

## ModSecurity without a Control Panel[¶](#modsecurity-without-a-control-panel "Permanent link")

In the LSWS Web Admin console, there is a **Web Application Firewall (WAF)** section which allows you to enable ModSecurity and add a rule set on an LSWS native server. (For a control panel environment, these steps are unnecessary. Simply enable the ModSecurity rule set from the control panel, the same way you would enable a rule set for Apache.)

Navigate to **Server > Security**

[![](../images/security08.png)](https://docs.litespeedtech.com/lsws/images/security08.png)

In the **Web Application Firewall (WAF)** section, you can choose whether or not to enable **Request Content Deep Inspection**. This feature is equivalent to Apache's ModSecurity, which can be used to detect and block requests with ill intention by matching them to known signatures.

There are many rule sets you can choose from, such as:

- OWASP
- Comodo
- Atomicorp
- Imunify360

LSWS is compatible with these rule sets, and you may choose your favorite. You may also define your own customized rules, if you are familiar with crafting ModSecurity rule sets.

Let's see how to enable a ModSecurity rule set, using Comodo as an example.

[Comodo](https://waf.comodo.com/) is a ModSecurity rule set created by the Comodo Team. It provides real-time protection for web apps running on LiteSpeed Web Server. Its functions include:

- Protecting sensitive customer data
- Meeting PCI compliance requirements
- Blocking unauthorized access
- Preventing SQL injection and Cross Site Scripting (XSS) attacks

### Download and Extract Rules[¶](#download-and-extract-rules "Permanent link")

First, download Comodo rules that are compatible with LiteSpeed, like so:

```
cd /usr/local/lsws/conf
wget https://waf.comodo.com/api/cpanel_litespeed_vendor
unzip cpanel_litespeed_vendor
cd comodo_litespeed/
mv rules.conf.main rules.conf
```

This will download Comodo LiteSpeed rules, and move `rules.conf.main` to `rules.conf`. This is the master file including all rules. You can reference this master file in the WebAdmin Console.

### Add WAF Rule Set[¶](#add-waf-rule-set "Permanent link")

Navigate to **Configuration > Server > Security > WAF Rule Set**

[![](../images/security09.png)](https://docs.litespeedtech.com/lsws/images/security09.png)

Click **Add** to edit the **WAF Rule Set**.

[![](../images/security10.png)](https://docs.litespeedtech.com/lsws/images/security10.png)

- **Name**: `Comodo Litespeed`
- **Action**: `None`
- **Enabled**: `Yes`
- **Rules Definition**: `Include $SERVER_ROOT/conf/comodo_litespeed/rules.conf`

Click **Save** to activate the rules.

You can include as many rule files as you like in the **Rules Definition** area.

The Comodo `Rules.conf.main` file is a Comodo master file to include all rules in order. It the same as manually entering the following:

```
Include 00_Init_Initialization.conf
Include 01_Init_AppsInitialization.conf
Include 02_Global_Generic.conf
Include 03_Global_Agents.conf
Include 04_Global_Domains.conf
Include 05_Global_Incoming.conf
Include 06_Global_Backdoor.conf
Include 07_XSS_XSS.conf
Include 08_Global_Other.conf
Include 09_Bruteforce_Bruteforce.conf
Include 10_HTTP_HTTP.conf
Include 11_HTTP_HTTPDoS.conf
Include 12_HTTP_Protocol.conf
Include 13_HTTP_Request.conf
Include 14_Outgoing_FilterGen.conf
Include 15_Outgoing_FilterASP.conf
Include 16_Outgoing_FilterPHP.conf
Include 17_Outgoing_FilterSQL.conf
Include 18_Outgoing_FilterOther.conf
Include 19_Outgoing_FilterInFrame.conf
Include 20_Outgoing_FiltersEnd.conf
Include 21_PHP_PHPGen.conf
Include 22_SQL_SQLi.conf
Include 23_ROR_RORGen.conf
Include 24_Apps_Joomla.conf
Include 25_Apps_JComponent.conf
Include 26_Apps_WordPress.conf
Include 27_Apps_WPPlugin.conf
Include 28_Apps_WHMCS.conf
Include 29_Apps_Drupal.conf
Include 30_Apps_OtherApps.conf
```

If using some commercial rules set (like the Atomic rule set) or your own rules set, which does not have such a master file, you have two options:

- Include rules with absolute path one by one in the **Rules Definition** field.
- Make a master file to include all rules with full path, then include only that master file in the **Rules Definition** field.

If including multi-rule files for mod\_security, the files must be included in the right order to make them work properly.

### Enable Firewall[¶](#enable-firewall "Permanent link")

Navigate to **Configuration > Server > Security > Web Application Firewall (WAF)**

[![](../images/security11.png)](https://docs.litespeedtech.com/lsws/images/security11.png)

- **Enable WAF**: `Yes`
- **Log Level**: `0`
- **Default Action**: `deny,log,status:403`
- **Scan Request Body**: `Yes` (If set to `Yes` will scan post request body)
- **Temporary File Path**: `/tmp`
- **Disable .htaccess Override**: `Not Set`
- **Enable Security Audit Log**: `Not Set`
- **Security Audit Log**: `$SERVER_ROOT/logs/security_audit.log`

Click **Save** to enable the firewall, and perform a Graceful Restart.

### Test ModSecurity rule set[¶](#test-modsecurity-rule-set "Permanent link")

#### Method 1[¶](#method-1 "Permanent link")

To check CWAF for protection, send this request:

```
http://$server_domain/?a=b AND 1=1
```

If it's working, the server should respond with a 403 status code.

[![](../images/security12.png)](https://docs.litespeedtech.com/lsws/images/security12.png)

#### Method 2:[¶](#method-2 "Permanent link")

You can check that CWAF works properly by sending a GET or POST request parameter `cwaf_test_request=a12875a9e62e1ecbcd1dded1879ab06949566276`

Like this:

```
http://$server_domain/?cwaf_test_request=a12875a9e62e1ecbcd1dded1879ab06949566276
```

If the web server returns a 403 Forbidden status, then CWAF works fine.

### Troubleshooting[¶](#troubleshooting "Permanent link")

To learn how to test for command injection attack protection, you may need to consult the corresponding ModSecurity rules providers. As LiteSpeed is not a ModSecurity rule set provider, we are not in a position to provide such recommendations.

## Set up Site Authentication[¶](#set-up-site-authentication "Permanent link")

Authentication is the process of confirming a user's identity, and it provides a way to ensure that only legitimate users can create content on your site. The steps in the methods below (WebAdmin Console and By Hand) are interchangeable. You can manually create a database file and then load it via the WebAdmin Console, or vice versa.

### WebAdmin Console[¶](#webadmin-console "Permanent link")

There are three steps in this method: 1. Create Authorization Realms Database 2. Create Authorized User 3. Add Access Required by Context

#### Create Authorization Realms Database[¶](#create-authorization-realms-database "Permanent link")

To create a new Authorization Realm for Virtual Host `Example`, navigate to **Virtual Hosts > Example > Security** and click **Add**.

[![](../images/security02.png)](https://docs.litespeedtech.com/lsws/images/security02.png)

Set **DB Type** to `Password File`.

[![](../images/security03.png)](https://docs.litespeedtech.com/lsws/images/security03.png)

Set:

1. **Realm name**, e.g. `TEST`
2. **DB Location**, e.g. `$VH_ROOT/conf/TESTDB`

#### Create Authorized User[¶](#create-authorized-user "Permanent link")

[![](../images/security04.png)](https://docs.litespeedtech.com/lsws/images/security04.png)

Set **User**/**Password**, e.g. `TEST`/`TEST`

#### Add Access Required by Context[¶](#add-access-required-by-context "Permanent link")

[![](../images/security05.png)](https://docs.litespeedtech.com/lsws/images/security05.png) [![](../images/security06.png)](https://docs.litespeedtech.com/lsws/images/security06.png)

Add a Context and select type as `Static`

Set:

1. **URI** `/`
2. **Location** `$VH_ROOT/html/`
3. **Accessible** `Yes`
4. **Realm** `TEST`
5. **Access Allowed** `*`

### By Hand[¶](#by-hand "Permanent link")

There are two steps to this method:

1. Create Account Through `htpasswd`
2. Add Access Required by `htaccess`

#### Create Account Through htpasswd[¶](#create-account-through-htpasswd "Permanent link")

Run the following command to generate `TESTDB` file from console, making sure this file and its parent directory are both readable for the web server user (typically `nobody` or `apache`):

```
htpasswd -c /PATH_YOU_WANT/TESTDB TEST
```

Then enter the password (e.g.`TEST`) two times.

#### Add Access Required by htaccess[¶](#add-access-required-by-htaccess "Permanent link")

Add the following rules into your .htaccess file.

```
AuthType Basic
AuthName "My Protected Area"
AuthUserFile /path/to/.htpasswd
Require valid-user
```

- `AuthName` can be set to anything, e.g. `TEST`
- `AuthUserFile` needs a valid file, e.g.`/usr/local/lsws/DEFAULT/conf/TESTDB`

### How to Verify[¶](#how-to-verify "Permanent link")

Access the site. It will require an authorized login.

[![](../images/security07.png)](https://docs.litespeedtech.com/lsws/images/security07.png)

## ModSecurity and Cache[¶](#modsecurity-and-cache "Permanent link")

When a page is cached, it is not scanned through the ModSecurity engine again. ModSecurity scans can be CPU intensive, and are best avoided in the interest of superior performance. In many cases it is not necessary to scan a static request anyway.

However, you may have a reason to block certain requests based on server environment variables, for example, requests submitted by a particular user agent, or requests that have a specific query string attached.

In ModSecurity, you may have a rule like this:

```
SecRule REQUEST_HEADERS:User-Agent "abc"
"id:1000001,phase:1,log,deny,status:403,msg:'Blocking exact User-Agent abc'"
```

For cache misses that are processed through the ModSecurity engine, this rule will block the request for user agent `abc`. But if the requested page is already cached, it will not be processed again through ModSecurity, and the request will not be blocked.

**The Cache Engine always takes precedence over the ModSecurity engine.** For a cache hit, the content is served directly from cache, bypassing any other processing.

To work around this for our user-agent example above, we can use the Rewrite Engine, or the `SetEnvIf` method.

Tip

A rewrite rule is better to use at the virtual host level. It should be added to the vhost configuration file.

If you need the rule globally, `SetEnvIf` is the better option, as it is faster and uses fewer resources than ModSecurity.

The only drawback to using either of these methods instead of ModSecurity is that any denied requests are not going to show up in ModSecurity's audit log. They will appear in your access log, though.

### Rewrite Rule[¶](#rewrite-rule "Permanent link")

The ModSecurity rule above would look like this as a rewrite rule:

```
<IfModule LiteSpeed>
RewriteCond %{HTTP_USER_AGENT} abc [NC]
RewriteRule ^ - [F,L]
</IfModule>
```

Restart LSWS to put this rule into effect.

### SetEnvIf[¶](#setenvif "Permanent link")

We can use `SetEnvIf` to reproduce the ModSecurity example rule like this:

```
<IfModule LiteSpeed>
SetEnvIfNoCase User-Agent "abc" block_bot
Order allow,deny
Allow from all
Deny from env=block_bot
</IfModule>
```

Restart LSWS to put this into effect.

## HTTP Strict Transport Security[¶](#http-strict-transport-security "Permanent link")

HTTP Strict Transport Security (HSTS) informs all user agents that they should only communicate with the web server using HTTPS. This can be used to prevent some attacks that downgrade connections from HTTPS to HTTP.

You can set up HSTS with LiteSpeed Web Server (LSWS) using either Apache configuration files or LSWS-native configurations. In both cases, it is only a matter of adding the following header:

```
Header always set Strict-Transport-Security "max-age=31536000"
```

This header tells the client that interactions with the configured sites should always use HTTPS for one year (31536000 seconds).

=== Apache Configuration Add the header directive to your server or `.htaccess` configs. If you would like to enable it globally instead of on any particular virtual host, add it to the server level configuration.

=== Native LSWS Add a context with the new header. To do this, navigate to **WebAdmin Console > Virtual Hosts > your virtual host > Context** and click **Add**, or select a context you have already set up.

```
Set **Type** to `Static` and click **Next**.

Set **URI** to `/`, so that it applies to all pages of this virtual host
Add the HSTS header to the **Extra Headers** setting.

Click **Save** and perform a graceful restart to apply the changes.
```

Once the HSTS header has been added, you should be able to see `Strict-Transport-Security: max-age=31536000` when viewing response headers. Run a `curl -i` script directed to one of the configured pages to see the headers in addition to the site content.

## Block a Bot Attack[¶](#block-a-bot-attack "Permanent link")

Your server may experience heavy hits from bots. Here are three different examples of bot attacks and how to block them using rewrite rules.

### "BUbiNG" bot[¶](#bubing-bot "Permanent link")

The ["BUbiNG" bot](http://law.di.unimi.it/BUbiNG.html#wc) can cause a massive load spike in the server. To prevent further problems, you can deny the `BUbiNG` user agent globally.

Use a rewrite rule to detect the user agent, and set the environment with the action `[E=blockbot]`. This will drop the direct connection from that client IP.

Add the following to the `.htaccess` of your `example.com` domain:

```
RewriteEngine On
RewriteCond %{HTTP_USER_AGENT} "BUbiNG"
RewriteRule .* - [E=blockbot:1]
```

To verify that the rules are effectively blocking the user agent, you can run the following command:

```
curl -A "BUbiNG" example.com
```

If your rules need further debugging, you can enable the rewrite log for more details.

### "xmlrpc.php" bot[¶](#xmlrpcphp-bot "Permanent link")

In this example, cPanel Piped Logging was configured to push entries to `/usr/local/apache/logs/error_log`. The log shows many entries like this:

```
404 File not found [/var/www/html/xmlrpc.php]
```

Because these requests look like they are being processed by the default virtual host, LiteSpeed's WordPress Protection feature is not triggered.

To block this bot, locate the virtual host serving the requests, and add a vhost-level rewrite rule to drop the connection using `[E=blockbot]`:

```
RewriteRule ^/xmlrpc.php - [E=blockbot:1]
```

Warning

Do not apply the above rewrite rule at the server level since it will block *everyone* accessing `xmlrpc.php` globally.

### Cookie Bots[¶](#cookie-bots "Permanent link")

If the bots are cookie related, you can also try a rule like the following, and tailor it to what you need:

```
RewriteCond %{HTTP_COOKIE} yourcookiename
RewriteRule .* - [F]
```

## Avoid Fake Googlebot[¶](#avoid-fake-googlebot "Permanent link")

LiteSpeed's CAPTCHA feature is helpful for avoiding attacks, but CAPTCHA may be bypassed when bad actors fake user-agents and IPs, and hit random URIs. In particular, an attacker may pretend to be googlebot, originating from an IP within the real Google IP range.

There are a few ways to deal with this problem:

1. Update `robots.txt` to tell Google to be more gentle crawling the site.
2. Customize rewrite rules to test against the user agent, and redirect to the home page.

Usually, googlebot is not aggressive, so when you observe excessive googlebot behavior, it's reasonable to assume you are under attack. If someone fakes the googlebot IP through the `X-Forwarded-For` header, you will need to detect and stop it.

For example, you might see these headers:

```
CF-IPCountry: XX
X-Forwarded-For: 39.33.93.175,66.249.93.199
CF-RAY: 5473956aa9d2cde3-CDG
X-Forwarded-Proto: http
CF-Visitor: {"scheme":"http"}
Accept: image/webp,image/apng,image/, /*;q=0.8
Accept-Language: en-NZ,en-GB;q=0.9,en-US;q=0.8,en;q=0.7
Forwarded: for=39.33.93.175
```

There are two ip adresses `39.33.93.175`(the faked google IP) and `66.249.93.199`(the real google IP).

Configure LiteSpeed Web Server to only update the client IP if the original IP is trusted. Navigate to **LiteSpeed WebAdmin Console > Configuration > General Settings** and set **Use Client IP in Header** to `Trusted IP Only`(never set to `Yes`), and add the google IPs/subnets to the trusted list.

Google doesn't post a public list of IP addresses for webmasters to whitelist, but you can [verify googlebot IPs](https://developers.google.com/crawling/docs/crawlers-fetchers/verify-google-requests) before adding them to allowed list.

## ConfigServer Security and Firewall[¶](#configserver-security-and-firewall "Permanent link")

[ConfigServer Security & Firewall (CSF)](https://configserver.com/cp/csf.html) with Login Failure Daemon (LFD) is "A Stateful Packet Inspection (SPI) firewall, Login/Intrusion Detection and Security application for Linux servers." This comes pre-installed on our cPanel servers and has many useful features to assist you with detecting events which might be indicative of security issues in your server.

When you use CSF with LiteSpeed Web Server, a few configuration changes may be required:

- Prevent Symlink Alert from LFD
- Prevent LSPHP Alert from LFD
- Prevent LSHTTPD Alert from LFD
- Open Port UDP 443

### Prevent Symlink Alert From LFD[¶](#prevent-symlink-alert-from-lfd "Permanent link")

In LiteSpeed Web Server version 5.3.6, we moved `/tmp/lshttpd/.rtreport` to `/dev/shm` to decrease disk IO. As a result, we introduced a symlink from the original location so any existing configuration doesn't break.

However, this can cause alerts from CSF/LFD such as this:

```
Time:   Wed Feb 13 06:05:29 2019 +0100
File:   /tmp/lshttpd/.rtreport
Reason: Suspicious symlink (->/dev/shm/lsws/lshttpd/status/.rtreport)
Owner:  nobody:nobody (99:99)
Action: No action taken
```

Add `/tmp/lshttpd/\.rtreport.*` to `/etc/csf/csf.fignore` to suppress this alert, and then restart CSF using `csf -ra`.

### Prevent LSPHP Alert From LFD[¶](#prevent-lsphp-alert-from-lfd "Permanent link")

Depending on your settings, or the amount of traffic your customers receive, you can easily end up with `lsphp` processes that run for a long time. This happens because we spawn a parent lsphp process for each vhost or customer. This process is used for a few things including shared memory for opcache and keeping the process alive for faster traffic handling (we skip the startup delay).

However, this can trigger some LFD alerts such as the one below:

```
Time:         Tue Feb 12 16:33:02 2019 +0100
Account:      XXXXXXXX
Resource:     Process Time
Exceeded:     64846 > 43200 (seconds)
Executable:   /opt/cpanel/ea-php56/root/usr/bin/lsphp
Command Line: lsphp                                  
PID:          14899 (Parent PID:14899)
Killed:       No
```

We can prevent this by adding `pexe:/opt/cpanel/ea-php.*/root/usr/bin/lsphp.*` to `/etc/csf/csf.pignore`, and then restarting CSF using `csf -ra`.

### Prevent LSHTTPD Alert From LFD[¶](#prevent-lshttpd-alert-from-lfd "Permanent link")

The `lshttpd` binary is unknown to LFD, so you may also receive alerts like this:

```
Time:    Tue Feb 12 19:03:40 2019 +0100
PID:     13751 (Parent PID:13739)
Account: nobody
Uptime:  21627 seconds

Executable:
/usr/local/lsws/bin/lshttpd.5.3.1

Command Line (often faked in exploits):
litespeed (lshttpd - #01)

Network connections by the process (if any):
tcp: xx.xx.xx.xx:80 -> xx.xx.xx.xx:4007
```

We can prevent this by adding `pexe:/usr/local/lsws/bin/lshttpd.*` to `/etc/csf/csf.pignore`, and then restarting CSF using `csf -ra`.

### Open Port UDP 443[¶](#open-port-udp-443 "Permanent link")

If you're using QUIC, then make sure to open up port UDP 443 on your firewall. This can be done in CSF under `UDP_IN` and `UDP_OUT`. You can read more about enabling QUIC [here](lsws__cp__cpanel__quic-http3.md).

## Anti-DDoS for ConfigServer or iptables[¶](#anti-ddos-for-configserver-or-iptables "Permanent link")

LiteSpeed Web Server features a built-in Anti-DDoS Protection system, which detects and mitigates HTTP-level DoS/DDoS attacks (e.g., bot detection, IP banning via firewall integration) and blocks IPs from firewall automatically.

In the WebAdmin Console, navigate to **Configuration > Server > Security**, and set **Enable Anti-DDoS Protection** and **Enable Firewall Modifications** to `Yes` to enable Anti-DDoS protection.

This will enable bot detection and address bots by denying or redirecting the client to a CAPTCHA challenge. If firewall is enabled, the client IP will be denied at the firewall level.

Note

These two settings are only available under a [Web Host Elite](https://litespeedtech.com/products/litespeed-web-server/lsws-pricing) license! Do not confuse this anti-DDoS protection system with the general category of anti-DDoS settings which are available with *all* LiteSpeed server products. [Learn more](#general-anti-ddos-protection).

LiteSpeed Web Server's **Enable Anti-DDoS** setting can be used to modify a firewall via `ifconfig` and `ipset` to block suspicious IPs. Read on to learn how to integrate this feature with either ConfigServer Security & Firewall (CSF), or iptables.

### LiteSpeed Web Server Configuration[¶](#litespeed-web-server-configuration "Permanent link")

Log into your WebAdmin Console at `https://SERVER_IP:7080`. Navigate to **Configuration > Security**.

Set **Enable Anti-DDoS Protection** and **Enable Firewall Modifications** to `Yes` to enable Anti-DDoS protection.

[![!](../images/security01.jpg)](https://docs.litespeedtech.com/lsws/images/security01.jpg)

### ConfigServer Security & Firewall Configuration[¶](#configserver-security-firewall-configuration "Permanent link")

For csf, create the file `/etc/csf/csfpost.sh`, and add the following content:

```
#!/bin/bash
ipset create ls-anti-ddos hash:ip hashsize 4096
ipset create ls-quic-ports bitmap:port range 0-65535 -exist
iptables -I INPUT -m set --match-set ls-anti-ddos src -j DROP
iptables -I FORWARD -m set --match-set ls-anti-ddos src -j DROP
iptables -I INPUT -p udp -m set --match-set ls-quic-ports dst -j ACCEPT
```

Reload with the command `csf -r`.

### iptables Configuration[¶](#iptables-configuration "Permanent link")

For iptables, run the following commands to set up the list and rules:

```
ipset create ls-anti-ddos hash:ip hashsize 4096
ipset create ls-quic-ports bitmap:port range 0-65535 -exist
iptables -I INPUT -m set --match-set ls-anti-ddos src -j DROP
iptables -I FORWARD -m set --match-set ls-anti-ddos src -j DROP
iptables -I INPUT -p udp -m set --match-set ls-quic-ports dst -j ACCEPT
```

Verify the script works as intended by checking with the `ipset list` command. You should see two blocks: **ls-anti-ddos** and **ls-quic-ports**.

```
[root@test]# ipset list
...
...
Name: ls-anti-ddos
Type: hash:ip
Revision: 1
Header: family inet hashsize 4096 maxelem 65536
Size in memory: 65680
References: 2
Members:

Name: ls-quic-ports
Type: bitmap:port
Revision: 1
Header: range 0-65535
Size in memory: 524432
References: 1
Members:
```

### Test[¶](#test "Permanent link")

There are several cases where LiteSpeed will consider an incoming request suspicious. For example, a failed [reCAPTCHA](lsws__security.md#recaptcha) test, or a badly formatted request.

For demonstration purposes, we will use a reCAPTCHA failed verification to trigger the block. So, if a visitor fails to verify repeatedly in a short period of time, the firewall block will be triggered and a log generated, like this one:

```
[root@test logs]# grep ipset error.log
2019-12-04 20:27:15.594490 [NOTICE] [24606] [T0] [FIREWALL] execute command: 'ipset add ls-anti-ddos 192.0.2.0 ', ret: -1, status: 0
```

If you run `ipset list` again, you will see content like this:

```
Name: ls-anti-ddos
Type: hash:ip
Revision: 1
Header: family inet hashsize 4096 maxelem 65536
Size in memory: 65696
References: 1
Members:
192.0.2.0
```

The block on the IP will be removed in 10 minutes, if the suspicious behavior stops. At that point, you should see this in the log:

```
2019-12-04 20:37:20.304327 [NOTICE] [24823] [T0] [FIREWALL] execute command: 'ipset del ls-anti-ddos 192.0.2.0 ', ret: -1, status: 0
```

### General Anti-DDoS Protection[¶](#general-anti-ddos-protection "Permanent link")

The Anti-DDoS feature described above should not be confused with the general DDoS protection that has always been available with LiteSpeed server products. The term "anti-DDoS" refers broadly to protective measures, such as CAPTCHA, ModSecurity rules, and per-IP throttling, all of which are included with every license plan. To learn more about these widely available features, see the following docs:

- [ModSecurity](lsws__cp__cpanel__mod_security.md)
- [CAPTCHA](lsws__cp__cpanel__recaptcha.md)
- [WP Protect](lsws__cp__cpanel__wp-protect.md)
- [Other Anti-DDoS Settings](lsws__cp__cpanel__antiddos.md)

## Cipher Configuration[¶](#cipher-configuration "Permanent link")

In a control-panel environment, ciphers are configured via the Apache configuration. Please refer to your control panel's documentation for instructions.

You can configure ciphers in a LiteSpeed Native environment via the WebAdmin Console.

### Server-Level Cipher[¶](#server-level-cipher "Permanent link")

Navigate to **Server > Tuning > SSL Global Settings** and update the value of **Default Cipher Suite**. This server-level cipher will be applied to all virtual hosts unless it is overridden by a virtual-host-level cipher configuration.

### Virtual Host Cipher[¶](#virtual-host-cipher "Permanent link")

Virtual-host-level ciphers are configured at **Virtual Host > SSL > Virtual Host SSL Protocol > Ciphers**. When you set an SSL certificate at the domain level, the SSL handshake uses SNI mode to switch to the domain-level SSL configuration.

### Listener-Level Cipher[¶](#listener-level-cipher "Permanent link")

Listener level ciphers can be configured at **Listeners > 443 Listener > SSL > SSL Protocol > Ciphers**. The listener-level configuration is never used with domain names, like `https://example.com`, as they are handled at the virtual-host level or the server level. The listener-level cipher is used when there is no domain-level configuration, as with requests addressed to IPs like `https://192.0.2.0/`.

## Disable HTTP Methods[¶](#disable-http-methods "Permanent link")

HTTP defines a set of request methods to indicate the desired action to be performed for a given resource, such as `OPTIONS`, `TRACE`, `TRACK`, etc.

`OPTIONS` are analytical protocols commonly utilized to repair and clear up web servers. However, most frequently, they serve as cracks that let attackers have an easy way to launch an attack.

Also problematic are the `TRACE` and `TRACK` methods, which may introduce a Cross-Site Tracing vulnerability.

It is thus recommended to disable the `OPTIONS`, `TRACE`, and `TRACK` methods, thereby blocking possible malicious access.

You can use rewrite rules to do so:

```
RewriteCond %{REQUEST_METHOD} ^(OPTIONS|TRACE|TRACK)
RewriteRule .* - [F]
```

Add the above rule to the domain's document root `.htaccess`. If you use a control panel and want to disable the `OPTIONS`, `TRACE`, and `TRACK` methods for all virtual hosts, you can add the same lines to the virtual host include files. Please refer to the control panel's documentation to learn how to add/modify such include files for all virtual hosts.

## chroot Jail[¶](#chroot-jail "Permanent link")

`chroot` is a function on Unix-like systems which can change the root directory of a process. A changed root process and its child processes cannot access any file beyond the new root directory. It is like putting a process in a jail with physical file access boundaries. Fittingly, this mechanism is often referred to as "chroot jail".

### Why chroot a web server?[¶](#why-chroot-a-web-server "Permanent link")

`chroot` is a great way to enhance the security of any web-facing server. It is not possible to guarantee that a system will never be compromised by a hacker. However, by running the server inside a chroot jail, potential damage can be minimized.

### How to set up chroot environment[¶](#how-to-set-up-chroot-environment "Permanent link")

LiteSpeed Web Server has built-in `chroot` support which can automatically build a working chroot environment with PHP support at installation time, and provide a general tool to help you identify missing files required by a CGI application.
