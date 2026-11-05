# Security | Configuration | LiteSpeed Web ADC | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsadc/security/

---

# Security Configuration[¶](#security-configuration "Permanent link")

## mod\_security[¶](#mod_security "Permanent link")

**It is possible to enable mod\_security at the Web ADC level, but we do not recommend it.**

mod\_security at the ADC level will dramatically slow down the distribution of data. Instead, you should let the backend LiteSpeed Web Servers handle the heavy load incurred by loading, checking, and filtering mod\_security rules.

If you still wish to enable mod\_security, you may do so following [our LiteSpeed Web Server instructions](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:waf:standalone).

## Anti-DDoS ConfigServer or iptables[¶](#anti-ddos-configserver-or-iptables "Permanent link")

LiteSpeed ADC's Anti-DDoS feature can be used to modify a firewall via `ifconfig` and `ipset` to block suspicious IPs. This guide explains how to integrate the ADC's Anti-DDoS feature with either ConfigServer Security & Firewall (csf), or iptables.

### LiteSpeed ADC Configuration[¶](#litespeed-adc-configuration "Permanent link")

Log into the ADC WebAdmin Console at `https://SERVER_IP:7090`. navigate to **Configuration > Security**.

Set **Enable Anti-DDoS Protection** and **Enable Firewall Modifications** to `Yes` to enable Anti-DDoS protection.

[![!](../images/security01.jpg)](https://docs.litespeedtech.com/lsadc/images/security01.jpg)

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

There are several cases where LiteSpeed will consider an incoming request suspicious. For example, a failed [reCAPTCHA](lsadc__security.md#recaptcha) test, or a badly formatted request.

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

## WordPress Brute Force Attack Protection[¶](#wordpress-brute-force-attack-protection "Permanent link")

A ‘brute force’ login attack is a type of attack against a website to gain access to the site by guessing the username and password, over and over again. WordPress is the most popular CMS and therefore it’s a frequent target of this type of attack. The `wp-login.php` and `xmlrpc.php` pages are the most common target of brute force attack by POST method. WordPress doesn’t have any built-in protection to prevent this, hence the need for a third-party solution.

LiteSpeed Web ADC has a built-in WordPress brute force attack protection system. It will protect shared hosting WordPress environments from large-scale brute force attacks, which have the potential to bring down entire servers.

### How Brute Force Protection Works[¶](#how-brute-force-protection-works "Permanent link")

The WordPress Protection directive is: `[Throttle, Deny, Drop, Disable ]`  
 The action is optional, and defaults to `Disable`. The `Allowed Login Attempts` can be set as value of (`0`|`1`|`5`-`1000`)

- `0` disables WordPress Protection.
- `1`, when used by a virtual host, defers to the setting used by the server.
- `5`-`1000` enables WordPress protection and also specifies the login value. (Values lower than `5` will be treated as `5`, and values higher than `1000` will be treated as `1000`)

The `Allowed Login Attempts` value specifies the maximum number of `wp-login.php` and `xmlrpc.php` login attempts allowed within 5 minutes before the IP is blocked.

This `Allowed Login Attempts` is handled using a quota system that works as follows:

- The quota starts at the specified Allowed Login Attempts value.
- Each POST attempt decreases the quota by 1
- Once the quota reaches half of the value, the IP will be throttled, slowing more as the quota drops further.
- When the quota reaches 0, the desired action (drop, deny, or throttle) is taken.
- Over the course of 5 minutes without further POST attempts, the quota gradually increases back to the set `Allowed Login Attempts`.
- Restarting LSADC will reset the quota back to the specified value.

Example

- Assume the `Allowed Login Attempts` is set to `10`.
- When there are more than 5 attempts within a short period of time, the IP will be throttled.
- Once the quota reaches 0, the desired action (drop, deny, or throttle) will be taken.
- Every 30 seconds (5 minutes divided by the value = 30 seconds), if there are no further POST attempts, the quota will increase by 1.

Example

- Assume the value is set to `300`.
- When there are more than 150 attempts within a short period of time, the IP will be throttled.
- Once the quota reaches 0, the desired action (drop, deny, or throttle) will be taken.
- After 1 second (5 minutes divided by the value = 1 second) without further POST attempts, the quota will increase by 1.

### Enable from Web Console[¶](#enable-from-web-console "Permanent link")

The LSADC WordPressProtect feature is disabled by default.

You may wish to override the default settings at the server level, or virtual-host level. Before making any changes, it helps to understand the logic that drives WordPressProtect at the different levels.

Changing the settings at the Virtual-Host level configuration will override the Server-Level configuration.

Server Level:  
 [![!](../images/security02.png)](https://docs.litespeedtech.com/lsadc/images/security02.png)

Virtual Host Level : [![!](../images/security03.png)](https://docs.litespeedtech.com/lsadc/images/security03.png)

The design logic looks like the following:

| Server Level | VHost Level | Result |
| --- | --- | --- |
| not set | not set | X |
| 5 | not set | 5 |
| 5 | 10 | 10 |
| Disable | 10 | 10 |

### Real Testing[¶](#real-testing "Permanent link")

#### Drop[¶](#drop "Permanent link")

This test was conducted with `WordPressProtect` set to `drop 10`. We can see the time start to increase at Round 6 and finally get a connection error at Round 10.

```
Round:  1
fail 0.291 status: 200
Round:  2
fail 0.256 status: 200
Round:  3
fail 0.256 status: 200
Round:  4
fail 0.279 status: 200
Round:  5
fail 0.249 status: 200
Round:  6
fail 1.275 status: 200
Round:  7
fail 2.287 status: 200
Round:  8
fail 3.267 status: 200
Round:  9
fail 4.271 status: 200
Round:  10
Erro MSG:  ('Connection aborted.', RemoteDisconnected('Remote end closed connection without response',))
```

#### Deny[¶](#deny "Permanent link")

This test was conducted with `WordPressProtect` set to `deny 10`. We can see the time start to increase at Round 6 and start getting permission deny 403 status code from Round 10.

```
Round:  1
fail 0.292 status: 200
Round:  2
fail 0.267 status: 200
Round:  3
fail 0.270 status: 200
Round:  4
fail 0.253 status: 200
Round:  5
fail 0.268 status: 200
Round:  6
fail 1.257 status: 200
Round:  7
fail 2.276 status: 200
Round:  8
fail 3.260 status: 200
Round:  9
fail 4.182 status: 200
Round:  10
fail 1.010 status: 403
```

Log:

```
Brute force detected, deny
```

#### Throttle[¶](#throttle "Permanent link")

This test was conducted with `WordPressProtect` set to `throttle 10`. We can see the time start to increase at Round 6 and start throttling from Round 10.

```
Round:  1
fail 0.289 status: 200
Round:  2
fail 0.269 status: 200
Round:  3
fail 0.268 status: 200
Round:  4
fail 0.243 status: 200
Round:  5
fail 0.263 status: 200
Round:  6
fail 1.269 status: 200
Round:  7
fail 2.266 status: 200
Round:  8
fail 3.280 status: 200
Round:  9
fail 4.182 status: 200
Round:  10
fail 29.249 status: 200
```

Log:

```
Brute force detected, throttle
```

## reCAPTCHA[¶](#recaptcha "Permanent link")

reCAPTCHA is available as a method of defense against DDoS attack.

### Enable Globally at the Server Level[¶](#enable-globally-at-the-server-level "Permanent link")

Access the WebAdmin console via `https://YOUR_SERVER_IP:7090`

Navigate to **Configuration > Server > Security > reCAPTCHA Protection**

[![!recaptchaconf0](../images/security04.png)](https://docs.litespeedtech.com/lsadc/images/security04.png)

Set **Enable reCAPTCHA** to `Yes`. This is the master switch. It will enable the reCAPTCHA feature for the entire Web ADC. It may be overridden at the virtual host level.

For other options, hover over the `?` symbol to view detailed information about that option.

For demonstration purposes, we will set **Connection Limit** and **SSL Connection Limit** to `1`, and **reCAPTCHA Type** to `Checkbox`. You may adjust these values according to your needs. Save and restart the Web ADC. This conneciton limit setting will be inherited by all virtual hosts unless overridden at the virtual host level.

[![!recaptchaconf1](../images/security05.png)](https://docs.litespeedtech.com/lsadc/images/security05.png)

When a visitor accesses the website, they will need to go though reCAPTCHA validation. This validation protects the server against HTTP Flood and other DDoS attacks.

After passing the reCAPTCHA validation, the visitor is temporarily whitelisted as long as they continue to browse the site. This makes for a better user experience. Once the visitor has been inactive for more than 20 minutes, reCAPTCHA is once again enabled for that visitor's next request.

[![!recaptchaverify](../images/security06.jpg)](https://docs.litespeedtech.com/lsadc/images/security06.jpg)

You can also enable reCAPTCHA on an individual virtual host that is under attack, while leaving other websites disabled.

### Override/Disable at the Virtual Host Level[¶](#overridedisable-at-the-virtual-host-level "Permanent link")

Assuming you have enabled reCAPTCHA at the server level globally, you can override the settings at a virtual host level.

Use the Web ADC WebAdmin console to override reCAPTCHA for the VHost.

Navigate to **Configuration > Virtual Hosts > Security > reCAPTCHA Protection**.

[![!recaptchaconf2](../images/security07.png)](https://docs.litespeedtech.com/lsadc/images/security07.png)

### Define CAPTCHA actions through rewrite rules[¶](#define-captcha-actions-through-rewrite-rules "Permanent link")

If you want to further define the CAPTCHA action as `deny` or `drop`, or you want to turn CAPTCHA `off`, you can use one of the following rewrite rule directives:

- `[E=verifycaptcha]`
- `[E=verifycaptcha:deny]`
- `[E=verifycaptcha:drop]`
- `[E=verifycaptcha:off]`

`[E=verifycaptcha]` will redirect to CAPTCHA until verified (unless it is set to `off`, which will disable CAPTCHA).

`deny` will return a 403, and `drop` will drop the connection when **Max Tries** is reached. Until **Max Tries** is reached, the client will be redirected to a CAPTCHA challenge.

Example

```
RewriteCond SOME-CONDITIONAL-CHECK
RewriteRule .* - [E=verifycaptcha]
```

(`SOME-CONDITIONAL-CHECK` would be a suspicious UA, IP address, etc.)

Note

In most cases, rewrite rules will override the default server behavior. However, in cases where **Trigger Sensitivity** is high, visitors may be sent directly to CAPTCHA before the rewrite rules can even be processed.

### Enable CAPTCHA protection for any URL[¶](#enable-captcha-protection-for-any-url "Permanent link")

You can enable CAPTCHA for a specific URL. For example, you might want to protect the admin area (`/administrator/`) for all Joomla sites on the server.

Example

In cPanel, create `/etc/apache2/conf.d/userdata/joomlaprotection.conf` with the following content:

```
<IfModule LiteSpeed>
RewriteRule /administrator/ - [E=verifycaptcha:deny]
</IfModule>
```

Apply to all cPanel virtual hosts and restart LiteSpeed:

```
/usr/local/cpanel/scripts/rebuildhttpdconf
service lsws restart
```

### Customize the good bots list[¶](#customize-the-good-bots-list "Permanent link")

Google bots are considered good bots because they help index your site. However, they cannot do their job properly without receiving the correct page. The **Bot White List** configuration may be used to specify bots that you may need for your site.

[![!Updating Bot White List](/shared/images/advancedconf02.png)](https://docs.litespeedtech.com/shared/images/advancedconf02.png)

Here, we have configured `Edge` in the **Bot White List** text area. **Bot White List** is a case-sensitive "contains" match, but regex may be used as well.

After restarting, browsers containing `Edge` in the user-agent header will bypass CAPTCHA:

[![!reCAPTCHATest](/shared/images/advancedconf01.png)](https://docs.litespeedtech.com/shared/images/advancedconf01.png)

The **Allowed Robot Hits** configuration may be used to limit how many times a good bot (including Googlebot) is allowed to hit a URL before it is redirected to CAPTCHA as well. This may be useful to prevent bad actors from bypassing CAPTCHA using a custom user agent.

Tip

Google and Bing bots are automatically whitelisted. You will need to add any other bots you wish to allow.

### Customize the CAPTCHA page[¶](#customize-the-captcha-page "Permanent link")

The default CAPTCHA page is generic. If you would like to customize the page, you may do so by creating a file at `$SERVER_ROOT/lsrecaptcha/_recaptcha_custom.shtml`.

There are two script tags that are required and it is strongly recommended to avoid changing the form and the `recaptchadiv` unless you know what you are doing. There are three echos within the page itself. Those are used by the web server to customize the CAPTCHA type and keys and specify any query string used.

Beyond those required attributes, everything else is customizable. As noted before, please ensure that you have backups of the default page and your customized page. Note that the `.shtml` extension is required in order to use the LSWS configured type and keys.

### Add headers to the CAPTCHA page[¶](#add-headers-to-the-captcha-page "Permanent link")

You can customize the headers on the CAPTCHA page. To do so, add a static context with the URL `/.lsrecap/`, then add the desired response header for that context, like so:

```
<IfModule LiteSpeed>
    <Location "/.lsrecap/">
        Header set Access-Control-Allow-Origin "*"
    </Location>
</IfModule>
```

This snippet cannot be added to `.htaccess`. It must either be added to an Apache config file, or via the WebAdmin Console for an LSWS Native virtual host.

Example

To add a CORS header to the CAPTCHA page in a WHM/cPanel environment:

- Add a `<Location "/.lsrecap/">` context to a global include file at `/etc/apache2/conf.d/userdata/lsrecaptcha.conf` to apply the customization to all virtual hosts
- Add a `<Location "/.lsrecap/">` context to a virtual host include at `/etc/apache2/conf.d/userdata/ssl/2_4/$USER/example.com/lsrecaptcha.conf` to apply the customization only to `$USER` virtual host

### Apply your own site key[¶](#apply-your-own-site-key "Permanent link")

You can apply your own reCAPTCHA key and adjust the configuration as you like from the [Google developer reCAPTCHA page](https://developers.google.com/recaptcha/intro).

Tip

When applying for your own key, sign up for reCAPTCHA v2, not v3.

The style of client verification is completely determined on Google's end via their reCAPTCHA service. When given the choice of a checkbox or an invisible badge, you may choose whichever you like. Be aware that the invisible type may sometimes display a difficult puzzle.

For server-wide protection that needs to cover a lot of domains, uncheck `Verify the origin of reCAPTCHA solutions`. Otherwise, you may need to apply a separate key for each domain. Please refer to [the Google doc](https://developers.google.com/recaptcha/docs/domain_validation) for more information.
