# Troubleshooting | LiteSpeed Web ADC | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsadc/troubleshoot/

---

# Troubleshooting[¶](#troubleshooting "Permanent link")

We do our best to document and provide solutions for any situation you may encounter with LiteSpeed Web ADC. If you don't see your issue listed here, there are [additional support options](lsadc__index.md#additional-support) available.

Tip

Before contacting the support team, please verify that you have upgraded to the most recent version of the software.

## Caching[¶](#caching "Permanent link")

### No "Cache-Control:max-age" header when using LSCache[¶](#no-cache-controlmax-age-header-when-using-lscache "Permanent link")

This is expected behavior.

`Cache-Control:max-age` is a regular cache response header which controls the cache behavior of a browser or public proxy. It *does not* control LSCache from the server side.

You may have seen `[E=cache-control:max-age=120]` in rewrite rules but it is not the same thing. It is used to control LiteSpeed's internal server cache, and *won't* affect browser cache.

THe LSCache engine doesn't insert the regular client/browser `Cache-Control` header, because it is not desired to let the browser or proxy cache the dynamic content. This would remove cache control from the server, and if LSCache no longer has control, it will be unable to purge updated content. That would lead to the browser serving out of date pages.

If there is still a need to let the browser cache content, you can configure the backend to insert regular "Cache-Control" headers.

## High Availability[¶](#high-availability "Permanent link")

### Problems After Configuration Changes[¶](#problems-after-configuration-changes "Permanent link")

When making changes to the configuration, such as changing the listener from `192.0.2.0:443` to `*:443`, a full stop/start is required.

### Inconsistent HA Configuraton Between Boxes[¶](#inconsistent-ha-configuraton-between-boxes "Permanent link")

When you see an error similar to the following:

```
2018-08-03 16:24:20.099467 [WARN] [REPL] HA configures are inconsistent between boxes, full replicaton can't proceed
2018-08-03 16:24:20.099520 [ERROR] [REPL] peer HA replication config is inconsistent, it must be fixed!
```

It is because the configuration is out of sync between two LS ADC instances. Replication only works if the two ADCs are serving the exact same sites. You need to keep ADC configuration in sync. If it is out of sync temporarily, it will break the synchronization. Once the configurations are synced, ADC will restore replication synchronization.

### Keepalived Indicates Multiple Masters[¶](#keepalived-indicates-multiple-masters "Permanent link")

When the configured VIP is shown on multiple nodes, it usually indicates a Split-Brain issue with keepalived.

Keepalived defaults to using multicast packets. Please verify that multicast packets are not filtered/blocked by your firewall.

## Advanced Reverse Proxy[¶](#advanced-reverse-proxy "Permanent link")

If you are having trouble with rewrite rules, you can enable rewrite logging to help you to see the breakdown on how the rules were processed & what the results were.

[![!](../images/troubleshoot01.jpg)](https://docs.litespeedtech.com/lsadc/images/troubleshoot01.jpg)

In the ADC WebAdmin **Virtual Host > Rewrite** tab, set **Log Level** to `9`.

You can check the rewrite log in the server log. By default it’s in `/usr/local/lslb/logs/error.log`. The contents should look like this:

```
[REWRITE] Rule: Match '/index.php' with pattern '^/index.php', result: 1
[REWRITE] set ENV: 'Proxy-Host:adc3.litespeed.dev'
[REWRITE] Source URI: '/index.php' => Result URI: '/new-uri.php'
```

The first line that ends with result: 1 can be helpful since any positive value means the condition matches. A negative value means the condition does not match.

Another useful tool is [regular expression test tool](https://regexr.com/), this will also help you to tweak and check your rewrite rules.

Additionally, as LiteSpeed ADC is compatible with Apache mod\_rewrite syntax, you can check [Apache docs](https://httpd.apache.org/docs/current/en/mod/mod_rewrite.html).

## mod\_security[¶](#mod_security "Permanent link")

## Invalid request filter directive[¶](#invalid-request-filter-directive "Permanent link")

If you followed [our instructions](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:waf:standalone) to enable Comodo mod\_security rules on the ADC, you may run into the following errors:

```
2019-01-21 15:56:07.542332 [ERROR] Invalid request filter directive: SecComponentSignature "CWAF_Litespeed"
2019-01-21 15:56:07.542355 [ERROR] Invalid request filter directive: SecResponseBodyAccess Off
2019-01-21 15:56:07.542362 [ERROR] Invalid request filter directive: SecDefaultAction "phase:2,deny,status:403,log,auditlog"
2019-01-21 15:56:07.746495 [ERROR] Invalid request filter directive: <LocationMatch /wp-admin/(admin|admin-ajax|edit|options|options-general|plugin-editor|themes|theme-editor|tools|plugin-install|post|page|widgets|media|edit-tags).php
2019-01-21 15:56:07.757162 [ERROR] Invalid request filter directive: <LocationMatch phpmyadmin
2019-01-21 15:56:07.758772 [ERROR] Invalid request filter directive: <LocationMatch "/index.php
2019-01-21 15:56:07.838504 [ERROR] Invalid request filter directive: <LocationMatch "wp-admin/.*$
2019-01-21 15:56:08.003946 [ERROR] Invalid request filter directive: <LocationMatch /options-general.php
```

LiteSpeed's ADC *does* support WAF, and most of the rule sets should work without any problem. However, `LocationMatch` is *not* supported by the ADC. The above error can be safely ignored. Though, [as stated](lsadc__security.md#mod_security), we recommend you avoid using mod\_security rules at the ADC level whenever possible.

## reCAPTCHA[¶](#recaptcha "Permanent link")

### CAPTCHA Returns 403 and Drops Connection[¶](#captcha-returns-403-and-drops-connection "Permanent link")

If CAPTCHA fails a few times, it will return a 403 error and then drop the connection from that IP. It works this way in order to block attacks. If the `reCAPTCHA invisible` keeps auto-refreshing and then fails, try changing the **CAPTCHA Type**.
