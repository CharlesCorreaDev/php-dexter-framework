# CloudLinux Issues | Troubleshooting | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/ts-cloudlinux/

---

# Troubleshooting CloudLinux[¶](#troubleshooting-cloudlinux "Permanent link")

## 508 Resource Limit Reached[¶](#508-resource-limit-reached "Permanent link")

This is a CloudLinux-generated error.

LiteSpeed Web Server allows you to enable CloudLinux's Lightweight Virtual Environment (LVE) from **WebAdmin Console > Server General > Server Process > CloudLinux**. If you are seeing the `508 Resource Limit Reached` error, then you have LVE enabled, and you have reached the concurrent connections limit.

You may be able to fix the issue by increasing the LVE limit.

Please see [CloudLinux documentation](https://docs.cloudlinux.com/cloudlinuxos/limits/#controlling-lve-limits) for more details.

## Resource temporarily unavailable[¶](#resource-temporarily-unavailable "Permanent link")

You may encounter the following error in LiteSpeed error logs when accessing Node.js applications:

```
lscgid: execve():/home/username/nodevenv/domain/api/XX/bin/node: Resource temporarily unavailable
```

This is **not** usually a traditional LVE resource limit violation. It is caused by excessive process accumulation under a single user account, which leads to `execve()` failures when LiteSpeed's `lscgid` tries to spawn new Node.js processes.

- The error repeats for multiple Node.js instances.
- Switching to Apache resolves the issue temporarily.
- No LVE limits are explicitly set, and CageFS is enabled.
- Investigation reveals hundreds of `lsnode` processes running under the same user account (many idle or with very old timestamps, e.g., from 2025).
- Running `pkill node` (or `pkill -f lsnode`) clears the processes and immediately restores functionality.

### Root cause[¶](#root-cause "Permanent link")

LiteSpeed Web Server handles Node.js applications (via CloudLinux Node.js Selector or `lsnode`) by spawning `lsnode` processes on demand.

Common reasons for the problem:

- Node.js applications do not always exit cleanly when idle.
- Idle or "stale" `lsnode` processes accumulate over time, especially when multiple Node.js apps run under the same cPanel/CloudLinux user.
- With 10–20+ Node.js applications per user, the total process count under that UID grows unchecked.
- The Linux kernel returns `EAGAIN` ("Resource temporarily unavailable") when it cannot allocate a new process slot for the user.
- Apache handles Node.js process lifecycle differently (usually via CloudLinux Selector + Passenger), making it less prone to this issue.

### Quick fix (temporary)[¶](#quick-fix-temporary "Permanent link")

As root (or via **WHM Terminal**), run the following command:

```
pkill -f lsnode
```

Alternatively, you can use this command:

```
pkill node
```

LiteSpeed will automatically spawn fresh `lsnode` processes on the next request.

You can check current processes with the following commands:

```
ps -ef | grep lsnode
ps -ef | grep <username>
```

### Permanent solution[¶](#permanent-solution "Permanent link")

For shared hosting, we recommend a daily cron job to automatically clean up idle/hanging processes.

Edit the root crontab with the following command:

```
crontab -e
```

To schedule the daily cleanup of idle `lsnode` processes at 3:00 AM, add the following line:

```
0 3 * * * pkill -f lsnode >/dev/null 2>&1 || true
```

If you don't want to run a cleanup for the whole server, you can do it for a specific user:

```
0 3 * * * pkill -u <username> -f lsnode >/dev/null 2>&1 || true
```

## Site Capacity Limit Reached[¶](#site-capacity-limit-reached "Permanent link")

If you encounter a `Site reached its capacity limit!` error in a shared hosting environment with CloudLinux installed, and PHP won't start, it may be a CageFS problem. Try the following:

1. Force update the cage
2. Turn off CageFS for the affected user
3. Turn CageFS back on for that user

This should fix the problem and allow PHP to start for the user.

### Troubleshooting steps[¶](#troubleshooting-steps "Permanent link")

These are the steps we took to diagnose this issue for one user. You may find these steps helpful.

First, we checked the stderr.log

```
[STDERR] Unable to create lock file: Permission denied
[STDERR] Wed May 27 17:28:51 2015 (19046): Fatal Error Unable to create lock file: Bad file descriptor (9)
```

Debugging logging was activated, and we saw the following:

```
No Request has been processed successfully through this connection, the maximum connections allowed will be reduced!
HttpExtConnector::tryRecover()...
Max retries has been reached, 503!
```

Disabling opcode cache didn't help, and PHP couldn't be started successfully, so we ran the PHP binary as the affected user account to find out why.

```
sudo -u <user_name> /path/to/lsphp5/binary -i
```

Fixing any error in the output may fix the overall problem.

`Unable to create lock file: Permission denied` could be a Zend Opcache problem, however the same problem occurred with PHP 5.3 and 5.4 using APC. Therefore disabling Zend Opcache in PHP 5.5 and 5.6 didn't help.

We looked for correlated log entries in `error.log` and `stderr.log` by matching the timestamps. We found this in the error log:

```
  2015-05-27 17:28:49.760 [INFO] Remove pid: 18989, exitcode: 254
```

It means that a PHP process exited with code 254.

We located the related error in stderr.log:

```
2015-05-27 17:28:51.069 [STDERR] Unable to create lock file: Permission denied
2015-05-27 17:28:51.070 [STDERR] Wed May 27 17:28:51 2015 (19046): Fatal Error Unable to create lock file: Bad file descriptor (9)
```

These are from another process. If process `18989` got the same error, it is definitely an issue relating to opcache. If Zend Opcache has a permission issue, other opcode cache may have it as well.

We checked whether the CloudLinux CageFS was setup correctly since other users do not have the same error.

After remounting CageFS, the website worked fine.

## PHP suEXEC Max Conn is too High[¶](#php-suexec-max-conn-is-too-high "Permanent link")

LiteSpeed Web Server's PHP suEXEC Max Conn setting should always be set to a value less than the CloudLinux LVE EP limit.

LVE is a kernel-level technology developed by the CloudLinux team.

Each LVE limits the amount of entry processes (web server processes entering into the LVE) to prevent a single site exhausting all web server processes. If the limit is reached, then `mod_hostinglimits` will not be able to place web server processes into the LVE and will return a 508 error. This results in very heavy sites slowing down and returning 508 errors without impacting other users.

If the site is limited by CPU or IO, then the site will start responding slower. If the site has limits set on memory or its number of processes, then the user will receive 500 or 503 errors that the server cannot execute the script.

[PHP suEXEC Max Conn](https://www.litespeedtech.com/docs/webserver/config/general#phpSuExecMaxConn) is a LiteSpeed Web Server setting which specifies the maximum number of concurrent PHP processes that can be created by LSWS for each user when running PHP scripts in suEXEC mode. The default value for this setting is 5. This limit is per user per lshttpd process. Thus, if you have a Web Host Professional license, this limit will be doubled. The limit will be 4x for a Web Host Enterprise license, and so on.

Limits on entry processes(EP) control the number of entries into an LVE. NPROC controls the total number of processes within an LVE. Once the limit is reached, no new processes can be created (until another one dies). When that happens, the NPROC counter is incremented. In these cases, LSWS might return 500 or 503 errors.

For shared hosting environments, `PHP suEXEC Max Conn` should not be set too high. Generally 5 or 10 is acceptable. Under normal circumstances, this value should not exceed 50. If the `PHP suEXEC Max Conn` limit is reached, another php connection will be created. `PHP suEXEC Max Conn` should always be set to a value that is less than the CloudLinux user account EP limit. A high `PHP suEXEC Max Conn` value doesn't necessarily result in a performance gain. A lot of the time, setting this too high may over kill the server. Good practice is to start it at 5 or 10 and monitor the real time stats for your busiest domain during the peak traffic time. If the waitQ is constantly > 0, `PHP suEXEC Max Conn` should be gradually increased but it must always be less than the EP limit for all LVE accounts. `PHP suEXEC Max Conn` is a global setting which will impact all shared hosting accounts.

For non-shared hosting environments, `PHP suEXEC Max Conn` can be adjusted to values a little higher such as 50 or even 500 but generally not over 1000.

The easiest way to determine what the SuExec Max Conn limit should be is to use the following equation:

```
SuExec_MaxConn = CloudLinux EP / Number of CPU License
```

For example, if you have an EP limit of 20 and a Web Host Professional license:

```
SuExec_MaxConn = 20 / 2
```

The result of this equation is the maximum number that the SuExec Max Conn field should be; in this case SuExec Max Conn should be set to 10. If the CloudLinux EP or Number of CPU License is an odd number ( other than 1 ), be sure to round the SuExec Max Conn result down as rounding up may go over the maximum CloudLinux EP limit and create additional issues.

## Node.js Code is Visible[¶](#nodejs-code-is-visible "Permanent link")

When viewing the application, you may only see the code of the file like this:

[![!nodejstb](../images/cloudlinux01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/cloudlinux01.png)

Navigate to **cPanel > NodeJS selector** and check if your application is started. You can start it from there or restart it. If you still see only the source code make sure that your server is running LiteSpeed Web Server version 5.3 or higher.

You can also verify that the 'Litespeed NodeJS Service' is running. From a command prompt enter:

```
ps -ef|grep node
```

One of the displayed running processes should be shown like this

```
lsnode:/home/USER/public_html/APPDIR/
```

When troubleshooting, you may want to bring up a stand-alone Node.js server and verify that the software works through that, to be sure that the problem is not in the Javascript itself.

## Application does not work[¶](#application-does-not-work "Permanent link")

If your application does not work properly, you can try two simple steps to check if the application has been set up properly:

- If possible, switch back to Apache temporarily to verify if the application works properly under Apache.
- Check if any error has been logged into `<APP_ROOT_DIR>/stderr.log`. If it has, fix the error and try again.

For example:

A Python application writes an error to stderr.log under the application root directory, `/home/user1/dingodossier/mbntp/stderr.log`:

```
Traceback (most recent call last):
  File "/home/user1/dingodossier/mbntp/passenger_wsgi.py", line 8, in <module>
    wsgi = imp.load_source('wsgi', 'mbntp/wsgi.py')
  File "/home/user1/virtualenv/dingodossier_mbntp/3.4/lib64/python3.4/imp.py", line 171, in load_source
    module = methods.load()
  File "<frozen importlib._bootstrap>", line 1220, in load
  File "<frozen importlib._bootstrap>", line 1200, in _load_unlocked
  File "<frozen importlib._bootstrap>", line 1129, in _exec
  File "<frozen importlib._bootstrap>", line 1471, in exec_module
  File "<frozen importlib._bootstrap>", line 321, in _call_with_frames_removed
  File "mbntp/wsgi.py", line 10, in <module>
    from django.core.wsgi import get_wsgi_application
ImportError: No module named 'django'
```

This indicates Django was not properly set up for the application.

## Disable X-Sendfile for Ruby[¶](#disable-x-sendfile-for-ruby "Permanent link")

By default LiteSpeed supports `X-Sendfile` internal redirects for Ruby on Rails, but for shared hosting environments, that can trigger problems. For example, the user will not have permissions to access the Redmine directory.

Go to your Redmine folder and put the following in the `.htaccess` file:

```
SetEnv RACK_NO_XSENDFILE 1
```

Note

This is an example for Redmine but you can use the same solution in any Ruby on Rails application.

## Ignored Environment Variables in Node.js[¶](#ignored-environment-variables-in-nodejs "Permanent link")

Normally, entering the environment variables in the Node.js selector should be enough but if you find they are not taking effect then you can manually do it.

Go to your Node.js folder and put the following in the `.htaccess` file (or add to the existing entry if applicable):

```
SetEnv SAMPLE_ENV_VAR ...
```

## Unexplained site downtime[¶](#unexplained-site-downtime "Permanent link")

If you have sites experiencing unexplained downtime, and you are using Imunify360, we recommend disabling it. If the downtime ceases, then this is likely not a LiteSpeed or cPanel issue. Please contact CloudLinux support.

## WebAdmin Console returns 503 error[¶](#webadmin-console-returns-503-error "Permanent link")

If LiteSpeed's WebAdmin URL returns a 503 error, and the error log shows `cannot allocate memory`, it is due to a discrepancy between the way that CloudLinux and LiteSpeed indicate "unlimited."

WebAdmin Console runs `admin_php` as the `lsadm` user, normally set as `pmem=0K` in LVE, which means "unlimited." However, CloudLinux reads `0K` as "zero" instead of "unlimited." As such, the `execve()` function will fail with `cannot allocate memory`.

A quick fix for this is:

```
lvectl set-user lsadm --pmem=2G
```

## nobody user limited by LVE[¶](#nobody-user-limited-by-lve "Permanent link")

LSWS and LSPHP run as `nobody` by default. If the `nobody` user is being limited by CloudLinux LVE, it could cause some problems.

To check whether `nobody` is being limited, run the following:

```
lvectl list-user | grep nobody
```

If it is limited, you can set it to unlimited with this command:

```
lvectl set-user nobody --unlimited
```

## Missing MySQL extension[¶](#missing-mysql-extension "Permanent link")

If you see the following error, it could indicate a misconfiguration with the PHP Selector:

```
Your PHP installation appears to be missing the MySQL extension which is required by WordPress.
```

When you install CloudLinux PHP Selector along with CloudLinux `alternative-phpxx`, there is a native option. Alternative PHP binaries are installed to `/opt/alt/phpxx/usr/local/bin/php` or `/opt/alt/phpxx/usr/local/bin/lsphp`, while native versions are installed to `/usr/local/bin/php` or `/usr/local/bin/lsphp`.

For cPanel with EasyApache 4, PHP binaries are normally copied over from cPanel `ea-phpxx` packages. For example, if the default PHP is 5.6, `/usr/local/bin/php` should be copied from `/opt/cpanel/ea-php56/root/usr/bin/php` and `/usr/local/bin/lsphp` should be copied from `/opt/cpanel/ea-php56/root/usr/bin/lsphp`.

To confirm that the native version works and determine which PHP modules are enabled, run the following commands:

```
/usr/local/bin/php -i | more
/usr/local/bin/lsphp -i | more
```

These commands may indicate that the native MySQL model is enabled. But it must also be enabled in CloudLinux PHP Selector, otherwise you may encounter the missing MYSQL extension error above.

Check whether the native version has been enabled for use in CloudLinux PHP Selector, by running the following command:

```
selectorctl --summary --show-native-version
```

The output should look something like this:

```
4.4 e -
5.1 e -
5.2 e -
5.3 e -
5.4 e -
5.5 e d
5.6 e -
7.0 e -
native(5.4) - -
```

There is no `e` after `native(5.4)`, which indicates that native is not enabled.

To enable it run the following:

```
/usr/bin/cl-selector --interpreter=php --set-enabled=native
```

Verify again:

```
 selectorctl --summary --show-native-version
 4.4 e -
 5.1 e -
 5.2 e -
 5.3 e -
 5.4 e -
 5.5 e d
 5.6 e -
 7.0 e -
 native(5.4) e -
```

There is now an `e` displayed next to `native(5.4)`, which indicates that native is enabled. This should eliminate the missing MySQL extension error.
