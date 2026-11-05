# Rewrite Logs in LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/rewrite-logs/

---

# Enabling Rewrite Logs[¶](#enabling-rewrite-logs "Permanent link")

The first step to debugging rewrite rules is to enable rewrite logging. Once rewrite logging has been enabled, you will be able to check the log to see which rewrite rule is not working and what is going wrong.

## Using Apache Configuration[¶](#using-apache-configuration "Permanent link")

Tips

- The `RewriteLog` directive doesn't work for LiteSpeed since LSWS will write rewrite logs to the server's error log.
- LiteSpeed supports the `RewriteLogLevel` directive to define rewrite log level.

Locate the virtual host where the error is occurring.

Note

Make sure you find the correct virtual host (i.e. 80, 443, or both if required). You won't see any rewrite log output if you set it to the wrong virtual host.

Open the relevant config file and add the `RewriteLogLevel` directive followed by a number for how detailed you want your logs to be. `1` is least detailed. `9` is most detailed. `0` will turn off rewrite logging.

Example

```
<IfModule LiteSpeed>
RewriteLogLevel 9
</IfModule>
```

Graceful restart LiteSpeed Web Server so the changes will take effect.

Important

The Apache 2.4 rewrite log directive `LogLevel alert rewrite:trace3` is not supported by LiteSpeed. You must use `RewriteLogLevel` to enable rewrite logging for LiteSpeed, even if you run Apache 2.4.

More information on Apache rewrite log configuration can be found in [the Apache mod\_rewrite documentation](http://httpd.apache.org/docs/2.2/mod/mod_rewrite.html).

## In Native Mode[¶](#in-native-mode "Permanent link")

[![](../images/rewrite-logs01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/rewrite-logs01.png)

Enabling rewrite logging in the WebAdmin console is very simple. First, locate the virtual host that is having the problem. Rewrite log entries will go in the virtual host's main log, so make sure the virtual host's **Log Level** setting (**WebAdmin Console > Configuration > Virtual Hosts > Log**) is set to `INFO` or `DEBUG`. (Rewrite log entries are considered info level.)

[![](../images/rewrite-logs02.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/rewrite-logs02.png)

Now, go to the Rewrite tab (**Configuration > Virtual Hosts > Rewrite**), and raise the **Log Level** setting.

[![](../images/rewrite-logs03.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/rewrite-logs03.png) Start the log level at a lower level so that you don't get flooded with information. Raise the level if you don't find the errors you need. (Raising your rewrite log level may slow down your server.)

Graceful restart so the changes will take effect.
