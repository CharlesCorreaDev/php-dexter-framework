# WordPress Brute Force Protection in LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/wp-protect/

---

# WordPress Brute Force Attack Protection[¶](#wordpress-brute-force-attack-protection "Permanent link")

A 'brute force' login attack is a type of attack against a website to gain access to the site by guessing the username and password, over and over again. WordPress is the most popular CMS and therefore it's a frequent target of this type of attack. The `wp-login.php` and `xmlrpc.php` pages are the most common target of brute force attack by POST method. WordPress doesn't have any built-in protection to prevent this, hence the need for a third-party solution.

Starting with version 5.2.3, LiteSpeed Enterprise has a built-in WordPress brute force attack protection system. It will protect shared hosting WordPress environments from large-scale brute force attacks, which have the potential to bring down entire servers.

## How Brute Force Protection Works[¶](#how-brute-force-protection-works "Permanent link")

The WordPress Protection directive is:

```
WordPressProtect [off|on|drop|deny|throttle|captcha|full_captcha, ] <limit>
```

Note

You can use the `captcha` or `full_captcha` option without setting up the **reCAPTCHA Protection** feature separately. The reCAPTCHA option within **WordPress Protection** is independent of LSWS's separate **reCAPTCHA Protection** feature.

The action is optional, and defaults to `throttle`. The limit can be set together with the action, and has a value of (`0`|`1`|`2`-`1000`)

- `0` disables WordPress Protection.
- `1`, when used by a virtual host, defers to the setting used by the server.
- `2`-`1000` enables WordPress protection and also specifies the login limit.

Hint

Values lower than `2` will be treated as `2`, and values higher than `1000` will be treated as `1000`

**Example:**

- `WordPressProtect drop, 10`
- `WordPressProtect throttle, 20`
- `WordPressProtect captcha, 2`
- `WordPressProtect full_captcha`

Note

`full_captcha` is a special mode which will always show CAPTCHA on wp-login.php page, no need to add extra limit value. Set `<wpProtectAction>6</wpProtectAction>` on the LSWS native configuration file will also take effect.

This directive can be used at server or virtual host level in the Apache configuration or in the `.htaccess` under a virtual host document root. The login limit value specifies the maximum number of `wp-login.php` and `xmlrpc.php` login attempts allowed within 5 minutes before the IP is blocked.

This limit is handled using a quota system that works as follows:

- The quota starts at the specified limit value.
- Each POST attempt decreases the quota by 1
- Once the quota reaches half of the limit, the IP will be throttled, slowing more as the quota drops further.
- When the quota reaches 0, the desired action (drop, deny, or throttle) is taken.
- Over the course of 5 minutes without further POST attempts, the quota gradually increases back to the set limit.
- Restarting LSWS will reset the quota back to the specified limit value.

### Examples[¶](#examples "Permanent link")

#### Low Limit Example[¶](#low-limit-example "Permanent link")

- Assume the limit is set to `10`.
- When there are more than 5 attempts within a short period of time, the IP will be throttled.
- Once the quota reaches 0, the desired action (drop, deny, or throttle) will be taken.
- Every 30 seconds (5 minutes divided by the limit = 30 seconds), if there are no further POST attempts, the quota will increase by 1.

#### High Limit Example[¶](#high-limit-example "Permanent link")

- Assume the limit is set to `300`.
- When there are more than 150 attempts within a short period of time, the IP will be throttled.
- Once the quota reaches 0, the desired action (drop, deny, or throttle) will be taken.
- After 1 second (5 minutes divided by the limit = 1 second) without further POST attempts, the quota will increase by 1.

### How to Enable LSWS WordPressProtect Feature[¶](#how-to-enable-lsws-wordpressprotect-feature "Permanent link")

As long as LSWS version is 5.2.3 or above, the LSWS WordPressProtect feature is enabled by default and does not need any extra configuration in the LSWS WebAdmin GUI or in Apache configurations. (WordPressProtect is *disabled* by default in LiteSpeed Web ADC.)

You may wish to override the default settings at the server level, virtual-host level or even the `.htaccess` level. Before making any changes, it helps to understand the logic that drives WordPressProtect at the different levels.

Changing the settings at the Apache-server-level configuration will override the setting for any Apache-based virtual host, but will have no impact on LSWS-native virtual hosts, which can only be controlled by LSWS-native settings.

Changing the settings at the Apache-virtual-host level configuration will override the server-level configuration as well as the `.htaccess`- level. This means that the server administrator's virtual host setting will override the end user's setting in `.htaccess`.

Let's look at some examples for a WHM/cpanel environment:

You may wish to overide the default limit of `10` to another value such as `5`. You will need to set it at the server level of the Apache configuration file here `/etc/apache2/conf.d/includes/pre_main_global.conf` and add the following:

```
<IfModule Litespeed>
WordPressProtect throttle, 5
</IfModule>
```

This will set the limit to `5` for all virtual hosts.

You can also disable the feature globally:

```
<IfModule Litespeed>
WordPressProtect off
</IfModule>
```

No matter how the server level is set, the end user has the ability to enable or disable it through `.htaccess` by adding the following:

```
<IfModule Litespeed>
WordPressProtect throttle, 15
</IfModule>
```

or

```
<IfModule Litespeed>
WordPressProtect throttle, 0
</IfModule>
```

However, the end user's preference does not override the virtual-host-level, if any setting is specified at that level. For example, if the feature is disabled in the virtual-host-level include file, e.g. `vi /etc/apache2/conf.d/userdata/std/2_4/$USER/example.com/wordpress.conf`, then any directives in `.htaccess` will be ignored.

```
<IfModule Litespeed>
WordPressProtect throttle, 0
</IfModule>
```

To verify the server and virtual host level settings, you may run the following command:

```
grep -i -r wordpressprotect * /etc/apache2/
```

The design logic looks like the following:

| Server Level | VHost Level | .htaccess | Result |
| --- | --- | --- | --- |
| not set | not set | not set | 10 |
| 5 | not set | not set | 5 |
| 5 | not set | 20 | 20 |
| 5 | 10 | not set | 10 |
| 5 | 10 | 20 | 10 |

## Testing[¶](#testing "Permanent link")

### Drop case[¶](#drop-case "Permanent link")

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

### Deny Case[¶](#deny-case "Permanent link")

This test was conducted with `WordPressProtect` set to `deny 10`. We can see the time start to increase at Round 6 and by Round 10, the 403 (Denied) status code is sent.

Tip

The `deny` action returns a 403 error in the access log but it does't block the IP from continuing to try to gain access. If you wish to block the IP, you will need to use the `drop` action.

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

### Throttle Case[¶](#throttle-case "Permanent link")

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

## Advanced[¶](#advanced "Permanent link")

### Whitelisting[¶](#whitelisting "Permanent link")

Since LSWS v5.4, you have been able to set `Trusted <ip>` in .htaccess to bypass the block and reCAPTCHA check.

Use `Trusted 192.0.2.0, 192.0.2.1` for IPv4 or `Trusted [2001:db8:85a3:8d3:1319:8a2e:370:7348]` for IPv6 in Virtual Host document root .htaccess to unblock a blocked IP and make that IP trusted for that vhost.

## Troubleshooting[¶](#troubleshooting "Permanent link")

### WordPress Protection Block Never Seems to Expire[¶](#wordpress-protection-block-never-seems-to-expire "Permanent link")

Normally the WordPress protection block is expected to expire after 10 minutes, but a visitor is receiving constant 403 errors due to WordPress protection. The error log entry is as follows:

```
    2018-11-06 15:41:30.862784 [NOTICE] [192.0.2.0] bot detected for vhost [APVH_example.com], reason: WordPressBruteForce, close connection!
    2018-11-06 16:52:10.591124 [INFO] [203.0.113.0:58160] Client IP from header: 24.96.xxx.xxx, conn limit: 10000, cur conns: 13, access denied
    2018-11-06 16:54:10.851797 [INFO] [203.0.*.*:57936] Client IP from header: 192.0.2.0, conn limit: 10000, cur conns: 13, access denied
    2018-11-06 16:56:11.349033 [INFO] [203.0.*.*:57976] Client IP from header: 192.0.2.0, conn limit: 10000, cur conns: 13, access denied
    2018-11-06 16:58:11.819620 [INFO] [203.0.*.*:58196] Client IP from header: 192.0.2.0, conn limit: 10000, cur conns: 13, access denied
    2018-11-06 17:00:12.607042 [INFO] [203.0.*.*:58606] Client IP from header: 192.0.2.0, conn limit: 10000, cur conns: 13, access denied
    2018-11-06 17:02:13.371969 [INFO] [203.0.*.*:56922] Client IP from header: 192.0.2.0, conn limit: 10000, cur conns: 13, access denied
```

The visitor has been blocked for a few hours, and the block is removed after restarting LSWS.

#### The Explanation[¶](#the-explanation "Permanent link")

WP protection blocking is only removed if the IP stops access attempts for a full 10 minutes. If the visitor constantly hits the server, the blocking won't be lifted. Restarting the web server will remove all IP blocks immediately.

The bot-detection `bot detected` or `WordPressBruteForce` only log when a `drop` action is set. There won't be log entries for the `deny` and `throttle` actions. It is designed this way because `drop` is a more serious action, which blocks further requests from that IP (it's treated as an unwanted botnet) and the log is for robot detection.

```
2018-11-06 15:41:30.862784 [NOTICE] [192.0.2.0] bot detected for vhost [APVH_example.com], reason: WordPressBruteForce, close connection!
```

Bot detection is one-time logging, while `deny` and `throttle` are per request. To log those would be excessive.
