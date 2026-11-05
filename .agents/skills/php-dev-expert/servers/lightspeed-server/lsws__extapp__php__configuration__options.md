# LSPHP Options | Configuration | PHP | External Applications | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/php/configuration/options/

---

# LSPHP Options[¶](#lsphp-options "Permanent link")

LSPHP supports multiple configuration options, depending on the setup. Directives are used when configuring Apache configuration files, while environment variables are used specifically within LiteSpeed Web Server.

## Directives[¶](#directives "Permanent link")

Use directives when using LiteSpeed Web Server with Apache configuration files. These directives can be used at either the Server or Virtual Host level.

Warning

Apache does not understand LiteSpeed-specific directives and may fail to start when switching between LiteSpeed Web Server and Apache. Wrap all LiteSpeed-specific directives in the following tags to disable them for Apache and enable them for LiteSpeed Web Server:

```
<IfModule LiteSpeed>
...
</IfModule>
```

Example

LiteSpeed directives enclosed in `<IfModule LiteSpeed>` tags:

```
<IfModule LiteSpeed>
LSPHP_ProcessGroup on
LSPHP_Workers 15
</IfModule>
```

This example applies only to directives. Variables are handled differently, as shown [below](#variables).

### LSPHP\_Workers[¶](#lsphp_workers "Permanent link")

The `LSPHP_Workers` directive controls the maximum number of worker or child processes per account in a shared-hosting environment. This directive allows you to set higher concurrency for specific Virtual Hosts.

Note

**PHP suEXEC Max Conn** is per worker. If you have two workers and set **PHP suEXEC Max Conn** to `10`, you will have 20 (`2 × 10`) LSPHP processes.

### LSPHP\_ProcessGroup[¶](#lsphp_processgroup "Permanent link")

The `LSPHP_ProcessGroup` directive turns ProcessGroup mode on and off when using Apache configuration files. By default, this directive is set to `on`.

### LSPHP\_MaxWaitQ[¶](#lsphp_maxwaitq "Permanent link")

The `LSPHP_MaxWaitQ` directive sets the maximum number of processes that can be in the PHP external application wait queue. When this limit is reached, new requests return a `508 “Resource Limit Reached”` error. This is the same WaitQ that can be monitored in the WebAdmin Console under **Actions > Real-Time Stats**.

## Variables[¶](#variables "Permanent link")

Use variables when settings must be configured globally in LiteSpeed Web Server. Set these variables in the WebAdmin Console. Navigate to **Server > PHP > Environment**.

For Apache-configuration-based servers, such as those using cPanel, Plesk, and DirectAdmin, set variable values in the Virtual Host's Apache configuration file:

```
<IfModule LiteSpeed>
LS_EXTAPP_ENV <variable_name>=<variable_value>
</IfModule>
```

Example

Set `LSAPI_MAX_PROCESS_TIME` to `3600`:

```
<IfModule LiteSpeed>
LS_EXTAPP_ENV LSAPI_MAX_PROCESS_TIME=3600
</IfModule>
```

### LSAPI\_CHILDREN[¶](#lsapi_children "Permanent link")

**Default Value:** `35`

Tip

`LSAPI_CHILDREN` can also be referenced as `PHP_LSAPI_CHILDREN`.

PHP LSAPI supports a variety of process modes. Two of these modes, Worker and ProcessGroup, can be configured using this environment variable.

Setting `LSAPI_CHILDREN` to `1` puts LSWS in Worker mode. In Worker mode, LiteSpeed Web Server dynamically spawns new PHP processes as needed and kills them when they are no longer needed.

Setting `LSAPI_CHILDREN` to a number greater than `1` puts LSWS in ProcessGroup mode. In ProcessGroup mode, the web server starts one PHP parent process that runs continuously. This process then forks child PHP processes, rather than spawning new processes, as needed. The value set for `LSAPI_CHILDREN` controls the number of child processes that can be created.

ProcessGroup mode is generally preferred because all PHP processes can share one memory block for opcode caching.

Tip

In Worker mode, an external application's **Instances** and **Max Connections** values should be the same. Find both settings in the WebAdmin Console under **Configuration > External App > your\_external\_application**.

In ProcessGroup mode, **Instances** should be set to `1`, and **Max Connections** should match the value of `LSAPI_CHILDREN`.

### LSAPI\_AVOID\_FORK[¶](#lsapi_avoid_fork "Permanent link")

**Default Value:** `0`

The `LSAPI_AVOID_FORK` environment variable specifies whether the internal process manager in ProcessGroup mode should try to avoid forking new child processes.

When set to `0`, the internal process manager does not try to avoid forking new processes. To save system resources, it stops processes when they finish and starts child processes only when needed. This setting is often preferred in shared-hosting environments.

When set to `1`, the internal process manager tries to avoid frequently stopping and starting child processes. This setting might be preferred in a dedicated-hosting environment because recycling existing processes may be faster, even if it sometimes results in unused processes remaining active.

Note

`LSAPI_AVOID_FORK=1` keeps child processes alive only if sufficient memory is available. By default, sufficient memory is set to `1GB`. If your server has less than `1 GB` available, setting `LSAPI_AVOID_FORK=1` does not work. Instead, set a limit such as `LSAPI_AVOID_FORK=100M`.

### LSAPI\_EXTRA\_CHILDREN[¶](#lsapi_extra_children "Permanent link")

**Default Values:**

- If `LSAPI_AVOID_FORK` is set to `0`: `LSAPI_CHILDREN` / `3`
- If `LSAPI_AVOID_FORK` is set to `1`: `0`

In ProcessGroup mode, the `LSAPI_EXTRA_CHILDREN` environment variable controls the maximum number of extra child processes that can be started when existing child processes malfunction. The total number of child processes is reduced to the level set in `LSAPI_CHILDREN` as soon as service returns to normal.

### LSAPI\_MAX\_REQS[¶](#lsapi_max_reqs "Permanent link")

**Default Value:** `10000`

Tip

`LSAPI_MAX_REQS` can also be referenced as `PHP_LSAPI_MAX_REQUESTS`.

In ProcessGroup mode, this environment variable controls the number of requests each child process handles before exiting automatically. Several PHP functions have been identified as having memory leaks. This parameter can help reduce memory usage caused by leaky PHP functions.

### LSAPI\_MAX\_IDLE[¶](#lsapi_max_idle "Permanent link")

**Default Value:** `300` seconds

In ProcessGroup mode, `LSAPI_MAX_IDLE` controls how long an idle child process waits for a new request before exiting. This option helps release system resources used by idle processes.

### LSAPI\_MAX\_IDLE\_CHILDREN[¶](#lsapi_max_idle_children "Permanent link")

**Default Values:**

- If `LSAPI_AVOID_FORK` is set to `0`: `LSAPI_CHILDREN` / `3`
- If `LSAPI_AVOID_FORK` is set to `1`: `LSAPI_CHILDREN`

In ProcessGroup mode, `LSAPI_MAX_IDLE_CHILDREN` controls how many idle child processes are allowed. The parent process immediately kills extra idle child processes.

### LSAPI\_MAX\_PROCESS\_TIME[¶](#lsapi_max_process_time "Permanent link")

**Default Value:** `3600` seconds

The `LSAPI_MAX_PROCESS_TIME` environment variable controls the total time that a PHP process can spend processing a request. It is effective only in ProcessGroup or Daemon mode. The parent process kills child processes that exceed this threshold.

In ProcessGroup mode, `LSAPI_MAX_PROCESS_TIME` controls the maximum processing time allowed for a request. If a child process cannot finish processing a request within the specified time frame, the parent process kills it. This option can help remove dead or runaway child processes.

### LSAPI\_PGRP\_MAX\_IDLE[¶](#lsapi_pgrp_max_idle "Permanent link")

**Default Value:** `FOREVER`

In ProcessGroup mode, the `LSAPI_PGRP_MAX_IDLE` environment variable controls how long the parent process waits before exiting when no child processes are running. This option can help release system resources used by an idle parent process. This environment variable has the same function as the **Max Idle Time** setting in the WebAdmin Console under **Configuration > External App > your\_external\_application**.

### LSAPI\_PPID\_NO\_CHECK[¶](#lsapi_ppid_no_check "Permanent link")

**Default Value:** `0`

By default, an LSAPI external application exits automatically when the parent process dies. This behavior reduces orphaned processes when the web server is restarted. However, disabling this feature may be desirable in certain situations, such as when an LSAPI process is started manually from the command line.

Adding the `LSAPI_PPID_NO_CHECK` environment variable and setting it to `1` disables the parent-process existence check. To turn this setting off, remove the environment variable completely. When PHP is started from the command line using the `-b` option, this check is disabled automatically.

### LSAPI\_ALLOW\_CORE\_DUMP[¶](#lsapi_allow_core_dump "Permanent link")

**Default Value:** `0`

By default, an LSAPI application does not leave a core dump file when it crashes. To have LSPHP dump a core file, add this environment variable and set it to `1`. When set to `1`, core files are created in the current working directory, which is generally the directory of the PHP script that crashed. To turn off this setting, remove the environment variable completely.

### LSAPI\_ACCEPT\_NOTIFY[¶](#lsapi_accept_notify "Permanent link")

**Default Value:** `0`

By default, an LSAPI application sends a notification packet whenever it receives a request. Set this environment variable to `1` to notify the server only for newly established connections. This setting is recommended to improve LiteSpeed Web Server performance.

### LSAPI\_SLOW\_REQ\_MSECS[¶](#lsapi_slow_req_msecs "Permanent link")

**Default Value:** `0`

When set to a nonzero value, LiteSpeed Web Server logs requests to an error log file if a request takes longer than the specified number of milliseconds. This option can help identify scripts that are slowing down the server.

### LSAPI\_CLEAN\_SHUTDOWN[¶](#lsapi_clean_shutdown "Permanent link")

**Default Value:**

- If PHP version is greater than `5.6`: `1`
- If PHP version is `5.6` or lower: `0`

Available as of PHP LSAPI `v7.6`, the `LSAPI_CLEAN_SHUTDOWN` environment variable instructs LSPHP to automatically perform a clean shutdown. A clean shutdown performs cleanup after a PHP crash or abnormal exit, such as manually killing the process. Setting `LSAPI_CLEAN_SHUTDOWN` to `0` disables the clean-shutdown feature, while setting it to `1` enables it.

### LS\_OOM\_SCORE\_ADJ[¶](#ls_oom_score_adj "Permanent link")

As of LiteSpeed Web Server `v6.0.12` build `2`, the external application environment variable `LS_OOM_SCORE_ADJ` can apply `oom_score_adj` values to PHP processes independently of the value set for the parent LSWS process. The assigned value is applied to external applications started by the web server.

Use `LS_OOM_SCORE_ADJ=<desired_value>`, where `<desired_value>` is an integer in the `-1000` to `1000` range. The lower the value, the lower the chance that the process is killed.

To illustrate why you might use this variable, consider a common scenario:

Your server has low free memory, and the OOM killer is invoked. You want to ensure that processes are sacrificed according to their importance, so you have set `oom_score_adj` accordingly. The problem is that setting `oom_score_adj` for the `litespeed` process also sets it for the process's children, including `lsphp` processes. While it is highly desirable to protect LiteSpeed Web Server from the OOM killer, it is also desirable for `lsphp` processes to be sacrificed to free memory.

In this scenario, use `oom_score_adj` to set the priority for the `litespeed` process as usual. In the WebAdmin Console, add the `LS_OOM_SCORE_ADJ` environment variable to the **PHP** tab. You may also add the variable to the configuration for an individual PHP application if it requires a different priority than PHP in general.

### LSAPI\_MAX\_CMD\_SCRIPT\_PATH\_LEN[¶](#lsapi_max_cmd_script_path_len "Permanent link")

When using `top` or `ps` to view PHP scripts run through LiteSpeed, the paths to the PHP scripts may be truncated at the beginning:

```
lsphp:ublic_html/example.com/wp-content/plugins/sample/plugin.php
```

The beginning of the full path is truncated, but you can configure LiteSpeed to display the full path:

```
/home/username/public_html/example.com/wp-content/plugins/sample/plugin.php
```

To display the full path, add `LSAPI_MAX_CMD_SCRIPT_PATH_LEN=80` to the environment variables under the **PHP** tab or to your external applications, as applicable.

The maximum value is `255`, and the default is `46`.

Tip

High values may cause PHP to crash.

Restart PHP to apply the change. Run the `pkill lsphp` command to do so.

### LSAPI\_STDERR\_LOG[¶](#lsapi_stderr_log "Permanent link")

When PHP has standard error output, it normally uses the server-level `stderr.log`, which can be helpful for troubleshooting PHP-related issues, such as `503` errors.

You can enable and disable `stderr.log` in the WebAdmin Console using **Configuration > Server Log > Server Log > Enable stderr Log**.

To customize the log location, set `LSAPI_STDERR_LOG` relative to a user directory. For example, call a PHP script with the following content:

```
<?php
ini_set('error_log', '');
error_log("This test message to stderr, will go to LSWS error log!");
```

You should then see output similar to the following in the `/var/log/apache2/error_log` server log:

```
2025-11-07 07:07:56.568378 [NOTICE] [2677731] [T0] [192.0.2.10:56660:HTTP2-3#APVH_example.example.com:443] [STDERR] This test message to stderr, will go to LSWS error log!\n
```

You can also redirect output by using `LSAPI_STDERR_LOG` in the PHP environment.

In the WebAdmin Console, navigate to **Configuration > PHP > PHP Handler Defaults > Environment** and add the following:

```
<env>LSAPI_STDERR_LOG=/var/log/user/lsphp_stderr.log</env>
```

`/var/log/user/` is a per-user mount through CloudLinux CageFS. The environment is set for all `lsphp` processes. When a user calls `error_log()` with an invalid file or directory configured, the output is written to that file instead of the LSWS server error log.

Alternatively, configure this at the Virtual Host level instead of at the PHP runtime level:

```
<IfModule LiteSpeed>
LS_EXTAPP_ENV LSAPI_STDERR_LOG=/path/to/your/vhost/stderr.log
</IfModule>
```

You may also want to use this configuration if `stderr.log` grows quickly and rapidly fills the disk with PHP warning messages:

```
PHP Warning: next() expects parameter 1 to be array, null given in /home/username/example.com/wp-includes/class-wp-hook.php on line 291
PHP Warning: current() expects parameter 1 to be array, null given in /home/username/example.com/wp-includes/class-wp-hook.php on line 275
PHP Warning: Invalid argument supplied for foreach() in /home/username/example.com/wp-includes/class-wp-hook.php on line 277
PHP Warning: next() expects parameter 1 to be array, null given in /home/username/example.com/wp-includes/class-wp-hook.php on line 291
```

The warnings may originate from different shared-hosting users, but all are logged to the main server `stderr.log`.

Excessive logging may occur because the PHP engine generates a large number of error and warning messages. To stop all `stderr.log` output, navigate to **Configuration > Server Log > Server Log** and set **Enable stderr Log** to `No`.

To stop only PHP-related error reporting in `stderr.log`, leave **Enable stderr Log** set to `Yes`, then add the following environment variable to the LSPHP external application configuration:

```
LSAPI_STDERR_LOG=/dev/null
```

This discards PHP-generated warning messages while still logging other errors.

### LS\_STDERR\_LOG[¶](#ls_stderr_log "Permanent link")

`LS_STDERR_LOG` is similar to [`LSAPI_STDERR_LOG`](#lsapi-stderr-log), but `lscgid` handles it before the external application process begins. As such, it applies to all types of external applications, such as Node.js, not only LSAPI applications.

### LSPHP\_ENABLE\_USER\_INI[¶](#lsphp_enable_user_ini "Permanent link")

To make `.user.ini` work with LSPHP, change the `lsphpxx` external application configuration by adding the following environment variable:

```
LSPHP_ENABLE_USER_INI=on
```

This directive has been supported since PHP LSAPI version `v6.10`.
