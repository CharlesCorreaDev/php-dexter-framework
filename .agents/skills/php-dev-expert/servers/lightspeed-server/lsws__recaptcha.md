# CAPTCHA | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/recaptcha/

---

# CAPTCHA[¶](#captcha "Permanent link")

CAPTCHA is available as a method of defense against DDoS attack.

Note

CAPTCHA may also be used as a method of WordPress Brute Force Attack Protection. Please see the [WP-Protect Guide](lsws__cp__cpanel__wp-protect.md) for more information about that.

Note

CAPTCHA activation is dependent on the URL being accessed. It does not activate for API URLs. CAPTCHA only activates for URLs accessed by real clients.

## Enable globally at the server level[¶](#enable-globally-at-the-server-level "Permanent link")

[![!CAPTCHA protection](/shared/images/recaptcha01.png)](https://docs.litespeedtech.com/shared/images/recaptcha01.png)

1. Access the WebAdmin console via `https://YOUR_SERVER_IP:7080`
2. Navigate to **Configuration > Server > Security > CAPTCHA Protection**
3. Set **Enable CAPTCHA** to `Yes`. This is the master switch and it is required for both a control panel environment and an LSWS native environment. It will enable the CAPTCHA feature for all control panel Apache virtual hosts as well as LSWS native virtual hosts globally. It may be overridden at the virtual host level.
4. Choose the **CAPTCHA Type** you'd like to use for your server. As of v6.4, LiteSpeed Web Server supports the following options:
   - `reCAPTCHA Checkbox`
   - `reCAPTCHA invisible`
   - `hCaptcha`
   - `ALTCHA`
   - `ALTCHA (invisible)`

For other options, hover over the `?` symbol to view detailed information about that option.

For demonstration purposes, we will set **Trigger Sensitivity** to maximum (`100`), and **CAPTCHA Type** to `reCAPTCHA Checkbox`. You may adjust these values according to your needs. Save and restart LSWS. This sensitivity setting will be inherited by all control panel Apache virtual hosts and LSWS native virtual hosts unless overridden at the virtual host level.

After making the change described above, the appropriate directives will be added to the LiteSpeed configuration file found at `/usr/local/lsws/conf/httpd_config.xml`.

Alternatively, you can add them yourself. Edit the file, and place the following code after the `<security>...</security>` section:

```
  <lsrecaptcha>
   <enabled>1</enabled>
   <type>1</type>
   <sensitivity>100</sensitivity>
  </lsrecaptcha>
```

You can also enable CAPTCHA on an individual virtual host that is under attack, while leaving other websites disabled.

## Validation expiration time[¶](#validation-expiration-time "Permanent link")

When a visitor accesses the website, they will need to go through CAPTCHA validation. This validation protects the server against HTTP Flood and other DDoS attacks.

After passing the CAPTCHA validation, the visitor is temporarily whitelisted as long as they continue to browse the site. This makes for a better user experience. Once the visitor has been inactive for a specified time, CAPTCHA is once again enabled for that visitor's next request.

Expiration defaults to one day, but is configurable to any number of seconds via the **Verification Expires** field.

[![!CAPTCHA verification](/shared/images/recaptcha02.jpg)](https://docs.litespeedtech.com/shared/images/recaptcha02.jpg)

## Override/disable at the virtual host level[¶](#overridedisable-at-the-virtual-host-level "Permanent link")

Assuming you have enabled CAPTCHA at the server level globally, you can override the settings at a virtual host level, but how you do so depends on which environment you are using.

### Override/disable for Apache virtual hosts[¶](#overridedisable-for-apache-virtual-hosts "Permanent link")

You can configure vhost-level CAPTCHA via the `LsRecaptcha` directive in the virtual host configuration, like so, and it will override the server setting:

```
<IfModule LiteSpeed>
   LsRecaptcha 100
</IfModule>
```

`LsRecaptcha` has a valid range from `0` to `100`.

- `0` disables CAPTCHA for the virtual host
- `100` turns on CAPTCHA for every request to the virtual host

You can set it to any value in between `0` and `100` if you want to set **Trigger Sensitivity**, but we [do not recommend this](#set-trigger-sensitivity).

Note

The `LsRecaptcha` directive cannot be used in `.htaccess` files.

### Set max\_conn to trigger CAPTCHA[¶](#set-max_conn-to-trigger-captcha "Permanent link")

In an Apache configuration file, either at the server level, or at the virtual-host level, you can add the LiteSpeed-specific configuration `LsRecaptcha max_conn`. The parameter value defines the maximum number of concurrent connections you can have before CAPTCHA is automatically triggered.

Example

To set the maximum number of concurrent requests to `1000`, use:

```
<IfModule LiteSpeed>
LsRecaptcha max_conn 1000
</IfModule>
```

Set the parameter value to `1` if you want to always have CAPTCHA on. Set the value to `0` to disable CAPTCHA.

`LsRecaptcha max_conn` used at the server level applies to all Apache virtual hosts, but the server-level setting may be overridden with a vhost-level configuration.

### Override for LiteSpeed native virtual hosts[¶](#override-for-litespeed-native-virtual-hosts "Permanent link")

Use the LSWS WebAdmin console to override CAPTCHA in LSWS native mode.

Navigate to **Configuration > Virtual Hosts > Security > CAPTCHA Protection**

### Set Trigger Sensitivity[¶](#set-trigger-sensitivity "Permanent link")

**Trigger Sensitivity** refers to the automatic CAPTCHA sensitivity. The higher the value, the more likely CAPTCHA protection will be used. A value of `0` is equivalent to "Off" while a value of `100` is equivalent to "Always On".

#### Default values[¶](#default-values "Permanent link")

Server level: `0`. Virtual Host level: inherits server-level setting. Syntax: Integer value between `0` and `100`.

LiteSpeed calculates **Trigger Sensitivity** as the percentage of your server capacity used, based on the number of active connections. CAPTCHA is activated when this formula is true:

Active connections \* 100 / **Max Connections** > (100 - **Trigger Sensitivity**)

For example:

If **Max Connections** = `1000`, **Trigger Sensitivity** = `20`, and you currently have 900 connections, the formula would be evaluated like so:

900 \* 100 / 1000 > 100 - 20

90 > 80

The result is true, so the incoming connection *will* be given a CAPTCHA test.

Calculating backwards, you can see that when the number of connections drops to less than 800, CAPTCHA will not be invoked.

Warning

We've discovered in real world usage that **Trigger Sensitivity** can be ineffective in some setups.

Here's why: **Trigger Sensitivity** is based on the number of active connections. But sometimes, sites have a large number of connections that are unrelated to the main page HTML. These extra connections don't result in anything that is visible to the user, but they require a high connection limit. The high connection limit negatively impacts the **Trigger Sensitivity** calculation, making most values under `100` behave effectively like `0`.

In our experience, the headaches caused by trying to use **Trigger Sensitivity** under these conditions are not worth the benefits. If you have high connection limits set, we recommend two possible courses of action:

- Go all or nothing: set the sensitivity to `100` (always on) or `0` (always off)
- Use rewrite rules: Set sensitivity to `0` at the virtual host level, and then selectively enable CAPTCHA for certain URLs via rewrite rules, like the following example, which applies to all URLs in the `/admin/` directory.

This is how it would appear if added to the Apache virtual host configuration:

```
<IfModule LiteSpeed>
RewriteRule /admin/ - [E=verifycaptcha:deny]
</IfModule>
```

The same rule would need to look a bit different (no beginning `/` on `admin/`) if added to .htaccess, like this:

```
<IfModule LiteSpeed>
RewriteRule admin/ - [E=verifycaptcha:deny]
</IfModule>
```

## Advanced Configuration[¶](#advanced-configuration "Permanent link")

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

### CAPTCHA in ModSecurity Rules[¶](#captcha-in-modsecurity-rules "Permanent link")

You can trigger CAPTCHA through the ModSecurity engine via an environment variable, by adding a rule like this one:

```
SecRule REQUEST_URI "@contains /test.php" "id:9812419,phase:2,pass,setenv:verifycaptcha=1"
```

The example above triggers for any URI that contains `/test.php`.

The value of `verifycaptcha` should be set to one of the following:

- `deny`: Returns a 403 error.
- `drop`: Drops the connection.
- `1`: Enables CAPTCHA verification without limits. It does not drop the connection or return a 403 error.

## Troubleshooting[¶](#troubleshooting "Permanent link")

### CAPTCHA Returns 403 and Drops Connection[¶](#captcha-returns-403-and-drops-connection "Permanent link")

If CAPTCHA fails a few times, it will return a 403 error and then drop the connection from that IP. It works this way in order to block attacks. If the `reCAPTCHA invisible` keeps auto-refreshing and then fails, try changing the **CAPTCHA Type**.
