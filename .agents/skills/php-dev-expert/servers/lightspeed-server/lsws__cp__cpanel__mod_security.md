# ModSecurity/WAF in LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/mod_security/

---

# ModSecurity/WAF[¶](#modsecuritywaf "Permanent link")

LiteSpeed Web Server has its own high-performance ModSecurity engine, offering excellent compatibility and performance. LSWS works well with popular ModSecurity rules sets such as **OWASP**, **Atomicorp**, **Comodo** and **CloudLinux Imunify360**. Additionally, LiteSpeed works well with firewalls such as ConfigServer Security & Firewall (CSF).

## Disable `Concurrent` Audit logging[¶](#disable-concurrent-audit-logging "Permanent link")

ModSecurity rules are directly managed by WHM. LiteSpeed works in the same way as Apache, usually, and there is no extra configuration required. However, WHM ModSecurity integration may act differently based on ModSecurity configuration.

Warning

Do not configure ModSecurity rules via LiteSpeed WebAdmin Console. Those rules are only applied to LSWS native virtual hosts. Virtual hosts configured through Apache configuration files are only protected with ModSecurity rules that are also configured through Apache configuration files.

There are two ModSecurity log modes: `Concurrent` and `Serial`.

```
SecAuditLogType Concurrent
```

or

```
SecAuditLogType Serial
```

Apache supports both modes while LSWS only supports `Serial` mode.

When `Concurrent` mode is used, "ModSecurity Tools" looks for a log file created in concurrent mode. Since LiteSpeed only uses `Serial` mode regardless of `SecAuditLogType` configuration, "ModSecurity Tools" will be looking in the wrong place and won't report any hits.

To fix the problem and get LiteSpeed Web Server logging, turn off the ModSecurity concurrent logger configuration and change it to serial mode.

## Compatibility[¶](#compatibility "Permanent link")

### Supported Features List (Not Comprehensive)[¶](#supported-features-list-not-comprehensive "Permanent link")

- **@rbl** - real time block list. (since 5.1)
- **@fileinspect** - scan attached files. (since 5.1)
- Scan request header and body.
- Scan response header and body.
- Audit logging (Serial mode only)

Note

LSWS only supports the serial mode for audit logging, since LiteSpeed is event driven. Unlike Apache, which can have multiple processes and could change UID.

Note

LiteSpeed Web Server v6.0 and above features a separate worker thread pool for ModSecurity processing. When a request needs to be scanned, it is offloaded to the dedicated thread pool. The benefits of this are numerous, and are explained in detail in [this blog post](https://blog.litespeedtech.com/2021/02/22/asynchronous-modsecurity-engine/).

### Not Yet Supported Features[¶](#not-yet-supported-features "Permanent link")

- PDF functions
- LUA
- Parsing XML

Reasons They are Unsupported

- The feature is not often used.
- Requests to static files bypass ModSecurity scanning as they are unlikely to cause any real security issues.

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

## FAQ[¶](#faq "Permanent link")

### Does LSWS Support "@inspectFile" ?[¶](#does-lsws-support-inspectfile "Permanent link")

Yes, but please make sure when using `@inspectFile` with a 3rd-party scanner, that the script returns `0` for block , and `1` for continue/pass.

Example code from the [ModSecurity reference manual](https://github.com/SpiderLabs/ModSecurity/wiki/Reference-Manual-%28v2.x%29#inspectfile):

```
$output = "0 Unable to parse clamscan output [$1]";

if ($error_message =~ m/: Empty file.?$/) {
    $output = "1 empty file";
}
elsif ($error_message =~ m/: (.+) ERROR$/) {
    $output = "0 clamscan: $1";
}
elsif ($error_message =~ m/: (.+) FOUND$/) {
    $output = "0 clamscan: $1";
}
elsif ($error_message =~ m/: OK$/) {
    $output = "1 clamscan: OK";
}
print "$outputn";
```

### Does LSWS Support the "Concurrent" Type of Audit Log?[¶](#does-lsws-support-the-concurrent-type-of-audit-log "Permanent link")

No. LiteSpeed Web Server only supports the `serial` mode for audit logging.

A concurrent-mode audit log is only useful for servers like Apache which is process-driven and has multiple processes that may change UID. LiteSpeed is event-driven, and as such, concurrent mode is not needed.

### What is Unsupported Variable Error?[¶](#what-is-unsupported-variable-error "Permanent link")

Sometimes you may see some errors like the following:

```
    2018-10-08 15:51:43.075081  ERROR   [ModSecurity] FILES:import_file "@rx <": Rule not supported.
    2018-10-08 15:51:43.077152  ERROR   [ModSecurity] failed to parse a modsec variable. while parsing: %{TIME_EPOCH}
    2018-10-08 15:51:43.077934  ERROR   [ModSecurity] unknown server variable while parsing: FILES:import_file
    2018-10-08 15:51:43.077942  ERROR   [ModSecurity] FILES:import_file "@contains <": Rule not supported.
    2018-10-08 15:51:43.081368  ERROR   [ModSecurity] unknown server variable while parsing: MATCHED_VARS_NAMES
    2018-10-08 15:51:43.081385  ERROR   [ModSecurity] MATCHED_VARS_NAMES "@rx ^ARGS:AGENDA_EXT_(?:NAME|SRC|COLOR)__[d]{1}$" "t:none": Rule not supported.
    2018-10-08 15:51:43.104981  ERROR   [ModSecurity] unknown server variable while parsing: FILES:file
    2018-10-08 15:51:43.105000  ERROR   [ModSecurity] FILES:file "@contains <" "t:none,t:urlDecodeUni,t:htmlEntityDecode": Rule not supported.
    2018-10-08 15:51:43.110779  ERROR   [ModSecurity] failed to parse a modsec variable. while parsing: %{REQUEST_COOKIES.pwg_id}
    2018-10-08 15:51:43.110937  ERROR   [ModSecurity] failed to parse a modsec variable. while parsing: %{REQUEST_COOKIES.pwg_id}
```

or

```
    2018-09-26 16:57:36.700054 [INFO] Processing config file:
    /etc/apache2/conf.d/modsec_vendor_configs/imunify360_full_litespeed/001_i360_1_generic.conf
    2018-09-26 16:57:36.700631 [ERROR] [ModSecurity] unknown server variable while parsing: FILES_COMBINED_SIZE
    2018-09-26 16:57:36.700669 [ERROR] [ModSecurity] FILES_COMBINED_SIZE "@gt %{tx.combined_file_sizes}" "t:none": Rule not supported.
    2018-09-26 16:57:36.703233 [ERROR] [ModSecurity] unknown server variable while parsing: MATCHED_VARS_NAMES
    2018-09-26 16:57:36.703266 [ERROR] [ModSecurity] MATCHED_VARS_NAMES "TX:paramcounter_(.*)" "capture": Rule not supported.
    2018-09-26 16:57:36.706773 [ERROR] [ModSecurity] unknown server variable while parsing: ARGS_COMBINED_SIZE
    2018-09-26 16:57:36.706802 [ERROR] [ModSecurity] ARGS_COMBINED_SIZE "@gt %{tx.total_arg_length}" "t:none": Rule not supported.
    2018-09-26 16:57:36.707414 [ERROR] [ModSecurity] unknown server variable while parsing: REQBODY_ERROR
    2018-09-26 16:57:36.707456 [ERROR] [ModSecurity] REQBODY_ERROR "!@eq 0" "msg:'Failed to parse request body.||MVN:%{MATCHED_VAR_NAME}||T:LITESPEED||MV:%{MATCHED_VAR}||PC:%{PERF_COMBINED}',tag:'i360',id:88139653,rev:'1',maturity:'9',accuracy:'9',phase:request,pass,t:none,tag:'noshow',severity:7,tag:'o'": Rule not supported.
    2018-09-26 16:57:36.708774 [INFO] Processing config file:
    /etc/apache2/conf.d/modsec_vendor_configs/imunify360_full_litespeed/002_i360_2_bruteforce.conf
    2018-09-26 16:57:36.709169 [INFO] Processing config file:
    /etc/apache2/conf.d/modsec_vendor_configs/imunify360_full_litespeed/003_i360_3_wallarm.conf
    2018-09-26 16:57:36.709222 [INFO] Processing config file:
    /etc/apache2/conf.d/modsec_vendor_configs/imunify360_full_litespeed/004_i360_4_webshells.conf
    2018-09-26 16:57:36.907572 [INFO] Processing config file:
    /etc/apache2/conf.d/modsec_vendor_configs/imunify360_full_litespeed/005_i360_5_custom.conf
    2018-09-26 16:57:36.908424 [INFO] Processing config file:
    /etc/apache2/conf.d/modsec_vendor_configs/imunify360_full_litespeed/100_Init_Initialization.conf
```

We try to keep LSWS compatible with the latest ModSecurity (2.5 and above) and GotRoot rules. LSWS supports most of these rules. We attempt not to miss any really important features/rules used in the real world, and we regularly add support for more features based on our user feedback. However, because of the complexity and fluctuating nature of these security rules, it is not possible to be 100% compatible with Apache at any one time.

The above error messages simply mean the given variables are not supported by LSWS yet. The errors can simply be ignored. We periodically review our ModSecurity engine and frequently add new support. Stay tuned.

### Does LSWS Support the "LocationMatch" directive?[¶](#does-lsws-support-the-locationmatch-directive "Permanent link")

When you use `SecDebugLogLevel`, `SecAuditLogParts` or `SecAuditLog` within the `LocationMatch` directive, you may see the following errors on LSWS:

```
Directive 'SecDebugLogLevel' is not allowed in current context.
Directive 'SecAuditLogParts' is not allowed in current context.
Directive 'SecAuditLog' is not allowed in current context.
```

LiteSpeed Web Server *does* support the `LocationMatch` context, however the above three directives may not be configured within it. On LSWS, audit log can only be set at the server level, and the debug log level can be set at vhost level. We have no plans to make these directives available at the matching context level, as it would be counterproductive to the optimization applied to the engine.

### Can I Disable ModSecurity for a Single Domain?[¶](#can-i-disable-modsecurity-for-a-single-domain "Permanent link")

Yes. While ModSecurity is normally enabled at the server level and applied to all domains on the shared hosting server, it is possible to disable it for a single domain using .htacess, if particular rules are causing an application to break the site.

As long as `AllowOverride` is permitted, you can place the following directives in .htaccess.

To disable ModSecurity entirely for a virtual host:

```
<IfModule mod_security.c>
  SecRuleEngine Off
  SecRequestBodyAccess Off
</IfModule>
```

To disable a particular ModSecurity rule for a virtual host:

```
<IfModule mod_security.c>
  SecRuleRemoveById 1234567
</IfModule>
```

## Set up Comodo[¶](#set-up-comodo "Permanent link")

[Comodo](https://waf.comodo.com/) is a ModSecurity rule set created by the Comodo Team. It provides real time protection for web apps running on LiteSpeed Web Server. Its functions include:

- Protecting sensitive customer data
- Meeting PCI compliance requirements
- Blocking unauthorized access
- Preventing SQL injection and Cross Site Scripting (XSS) attacks

### Deploy Rule Set[¶](#deploy-rule-set "Permanent link")

There are two ways to install a Comodo ModSecurity rule set in cPanel: through cPanel's ModSecurity vendor manager, or through Comodo's cPanel plugin.

#### cPanel ModSecurity Vendors Manager[¶](#cpanel-modsecurity-vendors-manager "Permanent link")

[![](../images/mod_security01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/mod_security01.png) Log into WHM and navigate to **Security Center > ModSecurity Vendors**. Click **Add vendor**.

[![](../images/mod_security02.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/mod_security02.png)

Set the **Vendor Configuration URL** to the following and then click the **Load** button:

```
https://waf.comodo.com/doc/meta_comodo_litespeed.yaml
```

The vendor details will be fetched and automatically filled in. Click **Save**.

#### Comodo cPanel Plugin[¶](#comodo-cpanel-plugin "Permanent link")

Sign up for a Comodo user account [here](https://waf.comodo.com/).

Install the CWAF script, like so:

```
wget <https://waf.comodo.com/cpanel/cwaf_client_install.sh>
sh cwaf_client_install.sh</code>
```

[![](../images/mod_security03.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/mod_security03.png)

Follow the step-by-step prompts. The installation will detect which web server is running (Apache, LiteSpeed or Nginx)

Log into the WHM control panel, search for `comodo` from the search bar. You will see the main Comodo WAF plugin dashboard

Navigate to **Configuration** and update your SWAF credentials.

[![](../images/mod_security04.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/mod_security04.png)

Navigate to **Main** and update rule versions. Once completed, you will notice that the **Current rules version** shows the correct `Latest version` .

### Verify Comodo[¶](#verify-comodo "Permanent link")

There are two ways to verify CWAF protection:

1. Send this request, using the domain you want to test:

   ```
   http://example.com/?a=b AND 1=1
   ```

   If it's working, the server will respond with a 403 status code.
2. Send a GET or POST request with the exact parameter shown, using the domain you want to test:

   ```
   http://example.com/?cwaf_test_request=a12875a9e62e1ecbcd1dded1879ab06949566276
   ```

   If the web server returns a 403 Forbidden status, then CWAF works fine.

### Uninstall Comodo[¶](#uninstall-comodo "Permanent link")

You can uninstall Comodo rule sets using the same method you used to install them.

#### Vendors Manager[¶](#vendors-manager "Permanent link")

[![](../images/mod_security06.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/mod_security06.png)

If you installed a Comodo rules set through cPanel's ModSecurity Vendors manager, you can click **Delete** to uninstall the set.

#### Plugin[¶](#plugin "Permanent link")

If you installed a Comodo rules set through Comodo's cPanel plugin, run the following uninstall script and answer `y` when prompted:

```
cd /var/cpanel/cwaf
```

Once completed, Comodo WAF will be uninstalled.

## Troubleshooting[¶](#troubleshooting "Permanent link")

We recommend turning on debug logging when looking to troubleshoot an issue. Turn on logging, reproduce the issue, and check the log.

To turn on ModSecurity debug logging, edit the config, like so:

```
vi /etc/apache2/conf.d/modsec2.conf
```

Change `SecDebugLogLevel 0` to `SecDebugLogLevel 9`, and restart LSWS.

Tip

`SecDebugLog logs/modsec_debug.log` is for Apache only. LiteSpeed doesn't use the `SecDebugLog` directive and logs ModSecurity errors directly to the server's error log.

After you enable debug logging, you can check the server error log see if ModSecurity rules have been executed, or find details explaining why ModSecurity didn't properly execute.

Here are some common troubleshooting scenarios.

### ModSecurity Disabled for Magento 2[¶](#modsecurity-disabled-for-magento-2 "Permanent link")

In a LiteSpeed environment, ModSecurity is erroneously disabled by Magento 2's default .htaccess rules. This doesn't happen with other apps on the system, and it doesn't happen when Apache is running.

This is because Magento 2's doc root .htaccess contains ModSecurity rules within `<IfModule mod_security.c>` or `<IfModule mod_security2.c>` conditionals. These are not processed by LiteSpeed, because ModSecurity is an Apache module, and not a LiteSpeed one.

To make sure that LiteSpeed doesn't execute the code in Magento 2's .htaccess, you can do one of three things: adjust .htaccess directly, turn off .htaccess override in WebAdmin, or turn off .htaccess override in the config file.

1. Comment out the following rules in Magento 2's doc root .htaccess:

   ```
       <IfModule mod_security.c>
       ###########################################
       ## disable POST processing to not break multiple image upload
       SecFilterEngine Off
       SecFilterScanPOST Off
       </IfModule>
   ```
2. Use [Disable .htaccess Override](https://www.litespeedtech.com/docs/webserver/config/security#disableSecHtaccess). Navigate to **LSWS WebAdmin Console > Configuration > Server > Security > Web Application Firewall (WAF)** and set **Disable .htaccess Override** to `Yes`. This is a global setting only available at the server level.
3. Edit the LiteSpeed configuration file: `vi /usr/local/lsws/conf/httpd_config.xml`, look for the `<security>...</security>` section within `<censorshipControl>...</censorshipControl>` and add `<disableSecHtaccess>1</disableSecHtaccess>`.
