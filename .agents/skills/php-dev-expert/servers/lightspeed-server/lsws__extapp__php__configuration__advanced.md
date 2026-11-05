# Advanced Configuration | Configuration | PHP | External Applications | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/php/configuration/advanced/

---

# Advanced LSPHP Configuration[¶](#advanced-lsphp-configuration "Permanent link")

## PHP Max Connections[¶](#php-max-connections "Permanent link")

### suEXEC[¶](#suexec "Permanent link")

LSWS offers three different PHP suEXEC modes: [Worker](https://www.litespeedtech.com/docs/litespeed-sapi/php-lsapi/suexec-worker), [Daemon](https://www.litespeedtech.com/docs/litespeed-sapi/php-lsapi/suexec-daemon-mode), and [ProcessGroup](https://www.litespeedtech.com/docs/litespeed-sapi/php-lsapi/suexec-processgroup).

In suEXEC PHP, LSWS allows you to control the number of PHP processes per user.

1. Worker: Concurrency is controlled by the [PHP suEXEC Max Conn setting](https://www.litespeedtech.com/docs/webserver/config/general#phpSuExecMaxConn) **Configuration > Server > General > PHP suEXEC Max Conn**. This controls the number of PHP processes allowed per user.
2. Daemon: Same as above. Concurrency is controlled by the [PHP suEXEC Max Conn setting](https://www.litespeedtech.com/docs/webserver/config/general#phpSuExecMaxConn) **Configuration > Server > General > PHP suEXEC Max Conn**. This controls the number of PHP processes allowed per user.
3. ProcessGroup: The [PHP suEXEC Max Conn](https://www.litespeedtech.com/docs/webserver/config/general#phpSuExecMaxConn) setting controls the default concurrency.

PHP suEXEC Max Connections can be customized or overridden at virtual host and account level with the `LSPHP_Workers` directive in an Apache configuration file for all three modes: ProcessGroup, Daemon, and Worker.

Example

The **PHP suEXEC Max Conn** setting in the WebAdmin Console is set to `40`, but you would like to raise it to `100` for a particular account. Add the following to the account's Apache virtual host configuration to override the global WebAdmin setting:

```
<IfModule LiteSpeed>
LSPHP_Workers 100
</IfModule>
```

Tip

If you are in a control panel environment and you get an error similar to the following:

`` [STDERR] Reached max children process limit: 10, extra: 3, current: 13, please increase LSAPI_CHILDREN` in `stderr.log ``

try to increase the **PHP suEXEC Max Conn** setting, found under **Configuration > Server > General > Using Apache Configuration File**, *not* the **LSAPI\_CHILDREN** setting in **External Apps**.

### Non-suEXEC[¶](#non-suexec "Permanent link")

LSWS offers two non-suEXEC PHP modes: Worker and ProcessGroup.

In non-suEXEC modes, there is only one PHP user. PHP concurrency is thus controlled by the the number of connections allowed between LSWS and the PHP engine: the External Application [Max Connections setting](https://www.litespeedtech.com/docs/webserver/config/extapps#maxConns) found at **Configuration > Server > External App > your\_external\_application**.

You must make sure that your external application is also supplied with enough processes to serve these connections. The number of processes should always be set to be equal the Max Connections. This is set differently depending on your PHP mode:

1. Worker: Simply set the [Instances setting](https://www.litespeedtech.com/docs/webserver/config/extapps#instances) at **Configuration > Server > External App > your\_external\_application**.
2. ProcessGroup: In ProcessGroup, the Instances setting must be set to 1. Control the number of processes instead with the [PHP\_LSAPI\_CHILDREN environment variable](https://www.litespeedtech.com/docs/litespeed-sapi/php-lsapi/configuration).

### Determining Which PHP Setup is in Use[¶](#determining-which-php-setup-is-in-use "Permanent link")

If you are unsure which PHP setup you are using, ask yourself these questions:

- Is the **PHP suEXEC** setting set to `Yes` or `User's Home Directory Only`? If so, then you are using suEXEC. If not, then you are not using suEXEC.
- Is the **Run on Start Up** setting set to `Yes (Daemon mode)`? If so, then you are running **Daemon mode**. If not, then you are running **Worker mode**.
- Do you have an `LSPHP_ProcessGroup on` directive in your Apache configuration files? If so, then users with that configuration are using **ProcessGroup mode**. (This can be set at the server or virtual host level.)
- Is **Instances** set to `1`? If so, you are running **ProcessGroup mode**. If not, you are running **Worker mode**.

These setups are explained further in [PHP Process Modes](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:php:process-mode "litespeed_wiki:php:process-mode").)

### Troubleshooting Max Connections[¶](#troubleshooting-max-connections "Permanent link")

#### Reached Max Children Process Limit[¶](#reached-max-children-process-limit "Permanent link")

Let's say you have increased **LSAPI\_CHILDREN** from `20` to `50`, but you are still experiencing an error message like this:

```
Reached max children process limit: 15, extra: 5, current: 20, please increase LSAPI_CHILDREN.
```

Why?

In PHP suEXEC ProcessGroup mode, the instruction `increase LSAPI_CHILDREN` is actually asking you to increase the **PHP SuEXEC Max Conn** setting, *not* the PHP external app setting for **LSAPI\_CHILDREN**.

You may not want to increase **PHP SuEXEC Max Conn** because it is a global setting applied to all virtual hosts. In this case you can increase PHP processes for only one virtual host via **LSPHP\_Workers** in that vhost's configuration, like so:

```
<IfModule LiteSpeed>
LSPHP_Workers 50
</IfModule>
```

Another option may be to use the **LSAPI\_EXTRA\_CHILDREN** environment variable. It cannot be overridden.

Increasing **LSAPI\_CHILDREN** will allow more foreground PHP processes running. Increasing **LSAPI\_EXTRA\_CHILDREN** will allow more background PHP processes running.

More details about this configuration can be found in the [LiteSpeed SAPI Configuration documentation](https://www.litespeedtech.com/docs/litespeed-sapi/php-lsapi/configuration).

Tip

You should verify whether it is normal to have so many PHP processes. Try [enabling LiteSpeed Cache](https://docs.litespeedtech.com/lscache/start/) to avoid having to deal with a high number of PHP processes.

#### New PHP suEXEC Max Conn Being Ignored[¶](#new-php-suexec-max-conn-being-ignored "Permanent link")

Let's say you've changed **PHP suEXEC Max Conn** from `10` to `20`. Error messages inconsistently list the old value (`10`) and the new value (`20`). Why?

```
(14715) Reached max children process limit: 10, extra: 3, current: 13, busy: 12, please increase LSAPI_CHILDREN.
(28253) Reached max children process limit: 20, extra: 6, current: 26, busy: 26, please increase LSAPI_CHILDREN.
(14715) Reached max children process limit: 10, extra: 3, current: 13, busy: 12, please increase LSAPI_CHILDREN.
(28253) Reached max children process limit: 20, extra: 6, current: 26, busy: 26, please increase LSAPI_CHILDREN.
```

You must restart LiteSpeed Web Server to apply your changes to **PHP suEXEC Max Conn**:

```
service lsws restart
```

If you are running LSWS 5.3+ you will also need to restart any detached PHP processes:

```
killall lsphp
```
