# Troubleshooting | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/troubleshooting/

---

# General Troubleshooting[¶](#general-troubleshooting "Permanent link")

## Linux OS Tuning[¶](#linux-os-tuning "Permanent link")

### Too Many Open Files[¶](#too-many-open-files "Permanent link")

You can address a `Too many open files` error by increasing the operating system's file descriptor imit.

`Too many open files` errors happen when a process needs to open more files than it is allowed by the operating system. This number is controlled by the maximum number of file descriptors the process has.

File descriptors are used by your OS to store information about each open file and thus facilitate communication. The OS puts limits on how big file descriptor tables can get and therefore constrain how many concurrent requests the server can handle.

In UNIX-like operating systems, there are system-level and process-level file descriptor limits. The system-level file descriptor limit restricts how much your server can handle, but, because LiteSpeed Web Server only uses a small number of server processes to serve all clients, LSWS can also require a higher process-level file descriptor limit. Therefore, to use your server to its maximum potential, it is important to set both of these limits to a high enough value.

If the server is started by the root user when this limit is too low, the system will automatically try to adjust the limit based on server configurations. If the server was not started by the root user, this limit has to be manually adjusted with root privilege. You may want to put the following commands into your startup scripts in order to automatically set the limit after rebooting the machine.

#### Process-level file descriptor limits[¶](#process-level-file-descriptor-limits "Permanent link")

Use the command `ulimit -n` to check current process-level file descriptor limit. The output may be something like `32768`.

You can reset these limits by adding a number after the command, such as:

```
ulimit -n 3276800
```

Note: In Linux, non-root users can also use `ulimit -n xxxx` to change the process-level limit (at least in Kernel 2.4.x), but you need to add the following lines in `/etc/security/limits.conf` to give these users permission:

```
soft nofile 2048
hard nofile 8192
```

#### System-level file descriptor limits[¶](#system-level-file-descriptor-limits "Permanent link")

Setting system-level file descriptor limits is different for each system.

=== Linux kernels Check the system-level limit for open files:

```
more /proc/sys/fs/file-max
```

```
If it looks low, increase the limit with:
```
echo 40000 > /proc/sys/fs/file-max
```

You may also need to increase `fs.nr_open`
```
echo "10000" >  /proc/sys/fs/nr_open
```

For kernel 2.2.x, you may also need to adjust the inode limit (the maximum number of files that can be stored in the file system):
```
echo 65535 > /proc/sys/fs/inode-max
```
```

=== Solaris 2.4+ Add the following lines in `/etc/system`:

```
To reset the hard file descriptor limit:
```
set rlim_fd_max = XXXX
```

To reset the soft file descriptor limit:
```
set rlim_fd_cur = XXXX
```
```

=== FreeBSD Add the following line in `/boot/loader.conf`:

```
set kern.maxfiles=XXXX
```

## Too many bad requests[¶](#too-many-bad-requests "Permanent link")

If your server starts to return a blank white page occasionally, and restarting the server fixes the issue temporarily, take a look at the last few entries in the log file. You may see something like this:

```
2015-07-01 16:41:11.611 [INFO] [192.0.2.0:49248-0] Status 400: Bad request method: Connection: Close
2015-07-01 16:41:11.611 [INFO] [192.0.2.0:49249-0] Status 400: Bad request method: Connection: Close
2015-07-01 16:41:11.611 [INFO] [192.0.2.0:49250-0] Status 400: Bad request method: Connection: Close
2015-07-01 16:41:11.611 [INFO] [192.0.2.0:49251-0] Status 400: Bad request method: Connection: Close
2015-07-01 16:41:11.611 [NOTICE] [192.0.2.0:49251-0] too many bad requests, block.
2015-07-01 16:41:11.611 [NOTICE] [192.0.2.0] bot detected, close connection!
```

What can cause this?

For this particular example, a poorly written script was sending bad HTTP requests starting with something like this:

```
Connection: Close\r\n
```

It should start with a request line like this:

```
GET / HTTP/1.1\r\n
```

LSWS will block the IP (`192.0.2.0` in this example) if it is getting too many bad requests, if **[Block Bad Request](https://www.litespeedtech.com/docs/webserver/config/security#blockBadReq)** is enabled. This setting can be turned on or off as you wish.

## Child process was killed[¶](#child-process-was-killed "Permanent link")

You may encounter entries similar to the following in stderr log:

```
2015-03-31 17:28:24.730 [STDERR] Child process with pid: 21506 was killed by signal: 15, core dump: 0
2015-03-31 20:24:58.729 [STDERR] Child process with pid: 8619 was killed by signal: 15, core dump: 0
2015-03-31 20:40:04.730 [STDERR] Child process with pid: 9648 was killed by signal: 15, core dump: 0
2015-04-01 02:00:35.731 [STDERR] Child process with pid: 9976 was killed by signal: 15, core dump: 0
```

These types of entries are actually quite normal. They normally happen during LSWS's graceful restart and are simply informational. They are not errors and can be safely ignored.

## LiteSpeed appears inactive[¶](#litespeed-appears-inactive "Permanent link")

Sometimes, you may experience an issue where LiteSpeed processes are running, but LiteSpeed appears to be inactive in the system status:

The `ps aux|grep http` command shows that LiteSpeed processes are running:

```
root      8806  0.2  0.1 190080 143460 ?       S    03:58   0:36 litespeed (lshttpd)
root      8809  0.0  0.0  18256   568 ?        S    03:58   0:00 httpd (lscgid)
nobody    8847  0.5  0.1 208280 144056 ?       Sl   03:58   1:09 litespeed (lshttpd)
nobody    8848  5.1  0.3 396704 224876 ?       Sl   03:58  10:50 litespeed (lshttpd)
```

But according to `systemctl status lshttpd.service`, LiteSpeed is inactive::

```
● lshttpd.service - LiteSpeed HTTP Server
 Loaded: loaded (/etc/systemd/system/lshttpd.service; enabled; vendor preset: disabled)
 Active: failed (Result: exit-code) since Thu 2018-02-22 03:55:26 CET; 3h 35min ago
 Main PID: 29752 (code=killed, signal=KILL)
 CGroup: /system.slice/lshttpd.service
```

This can be caused by a shared memory issue. Take a look in the `/dev/shm/lsws/` directory via the `ls -alt ; date` command. Your output will look something like this:

```
total 3536
-rw------- 1 nobody nobody  147456 Feb 23 04:58 .store.0.shm
-rw-r----- 1 root   nobody 2637824 Feb 23 04:06 .quicshmdata.shm
-rw-r----- 1 root   nobody    8192 Feb 23 04:01 .quicshmmap.lock
-rw-r----- 1 root   nobody    8192 Feb 23 04:01 .quicshmdata.lock
-rw------- 1 nobody nobody  262144 Feb 22 23:02 .store.1.shm
-rw------- 1 nobody nobody  212992 Feb 22 20:32 .store.2.shm
-rw------- 1 nobody nobody   98304 Feb 21 14:49 .store.3.shm
-rw------- 1 nobody nobody    8192 Feb 21 07:40 .cachemanidx.lock
-rw------- 1 nobody nobody  147456 Feb 15 01:59 .cachemanidx.shm
-rw-r----- 1 root   nobody   32768 Feb 12 20:54 .quicshmmap.shm
-rw------- 1 nobody nobody    8192 Feb 10 00:29 .store.2.lock
-rw------- 1 nobody nobody    8192 Feb 10 00:28 .store.1.lock
-rw------- 1 nobody nobody    8192 Feb 10 00:23 .store.3.lock
-rw------- 1 nobody nobody    8192 Feb 10 00:22 .store.0.lock
drwxr-x--- 2 nobody nobody     360 Feb 10 00:22 ./
-rw------- 1 nobody nobody    8192 Feb 10 00:22 adns_cache.lock
-rw------- 1 nobody nobody   16384 Feb 10 00:22 adns_cache.shm
drwxrwxrwt 6 root   root       500 Jan  5 00:20 ../
```

In this example, the current date is February 23, and there are some `.lock` files dating back to February 10th. These are likely the cause of the problem.

To fix the problem, remove all of the files in the `/dev/shm/lsws` directory and restart the server with the following commands:

```
rm -rf /dev/shm/lsws
service lsws restart
```

You will see that the system status is correct now:

```
 ● lshttpd.service - LiteSpeed HTTP Server
 Loaded: loaded (/etc/systemd/system/lshttpd.service; enabled; vendor preset: disabled)
 Active: active (running) since Fri 2018-02-23 07:35:46 CET; 9s ago
Process: 1620 ExecStart=/usr/local/lsws/bin/lswsctrl start (code=exited, status=0/SUCCESS)
Main PID: 1639 (litespeed)
 CGroup: /system.slice/lshttpd.service
         ‣ 1639 litespeed (lshttpd)
```

## Failed to bring up LiteSpeed[¶](#failed-to-bring-up-litespeed "Permanent link")

When trying to start or switch to a newly-installed LiteSpeed Web Server on cPanel, you may see the following message:

```
Failed to bring up LiteSpeed
Stopping httpd: [ OK ]
Apache Stopped.
LiteSpeed is not up within 30 secs, try again by removing /tmp/lshttpd/.
ERROR LiteSpeed is not up within 60 secs, please check the error log and try again.
Apache port offset has been set to 0.
```

While there may be a technical reason, it also may be caused by an incorrect license type.

Before going to the effort of troubleshooting, check the license first, like so:

```
/usr/local/lsws/bin/lshttpd -V
```

You may see something similar to the following:

```
2025-09-03 04:45:17.415890 [NOTICE] [T0] Memory size is: 32598148KB. 
2025-09-03 04:45:17.457508 [ERROR] [T0] [LICENSE] License key operation failure: 
ERR LR.R: Memory limited license cannot be used on server with more than 8GB memory.
```

Upgrading your license should fix the error.

## Server instability[¶](#server-instability "Permanent link")

You may notice that the LiteSpeed service on WHM stops every day at a certain time, and you need to restart LSWS to bring it back. `wswarch.sh` is running well. So, what is causing such LiteSpeed instability?

While there may be a technical reason, it also may be caused by an incorrect license type.

Before going to the effort of troubleshooting, check the license first, like so:

```
/usr/local/lsws/bin/lshttpd -V
```

You may see something similar to the following:

```
2025-09-03 04:45:17.415890 [NOTICE] [T0] Memory size is: 32598148KB. 
2025-09-03 04:45:17.457508 [ERROR] [T0] [LICENSE] License key operation failure: 
ERR LR.R: Memory limited license cannot be used on server with more than 8GB memory.
```

Upgrading your license should fix the error.

## LiteSpeed kills recycled PIDs[¶](#litespeed-kills-recycled-pids "Permanent link")

A small `pid_max` value may cause applications to be accidentally killed when they are using a recycled PID.

For example, this log shows that LiteSpeed killed MySQL:

```
[Wed Mar 20 04:11:42 2019] SIGTERM to mysqld (12289) by litespeed (6133),0,99 <- systemd (1),0,0
[Wed Mar 20 04:11:49 2019] SIGTERM to mysqld (12289) by mysqld (12289),994,991 <- mysqld_safe (12121),0,0 <- systemd (1),0,0
```

If you check `/proc/sys/kernel/pid_max` you may find `kernel.pid_max = 32768`.

`32768` is too small for some situations, particularly where PIDs are used up very fast and recycled quickly. For example, LiteSpeed may try to kill an unused lsphp process, but that PID may already have been recycled and reused as a MySQL PID. When LiteSpeed kills the process, MySQL is killed unintentionally.

To solve this problem, increase `pid_max` from `32768` to a larger number, such as `1048576`.

Verify `pid_max` via the `sysctl kernel.pid_max` command:

```
kernel.pid_max = 32768
```

Set `pid_max` via the `sysctl -w kernel.pid_max=1048576` command.:

```
kernel.pid_max = 1048576
```

Note

Sometimes the CRIU feature may cause similar trouble when it resets the PID to restore a process. This causes the PID to be reused too quickly, and can be a problem even with a large `pid_max` setting.

## Resume All Listeners[¶](#resume-all-listeners "Permanent link")

When the server-level **[Max connections](https://www.litespeedtech.com/docs/webserver/config/tuning#maxConnections)** limit is reached, HTTP and HTTPS requests stop being served correctly. First this happens on a handful of sites, but it gradually affects all sites on the server. LiteSpeed will appear to be running, however the error log will contain a continuous stream of `Resume All Listeners` errors until you manually restart LiteSpeed.

```
2019-04-09 12:43:20.252694 [NOTICE] Resume All Listeners
2019-04-09 12:43:20.322407 [NOTICE] Resume All Listeners
2019-04-09 12:43:20.359544 [NOTICE] Resume All Listeners
2019-04-09 12:43:20.435074 [NOTICE] Resume All Listeners
2019-04-09 12:43:20.469055 [NOTICE] Resume All Listeners
```

A server restart fixes the problem temporarily.

For a more permanent solution, you can increase the server-level **Max Connections** limit. The default value of this limit in new installations is `10000`. However, for an older installation, it may be necessary to manually update the value.

## sendKillCmdToWatchdog[¶](#sendkillcmdtowatchdog "Permanent link")

You may ignore `SendKillCmdToWatchdog`, if you see it in your error log, like so:

```
2019-04-22 20:35:30.124450 NOTICE [2348767] Cmd from child: [extappkill:2348876:-3:0]
2019-04-22 20:35:36.113564 NOTICE [2348803] sendKillCmdToWatchdog: 'extappkill:2349000:-3:0'.
2019-04-22 20:35:36.113670 NOTICE [2348767] Cmd from child: [extappkill:2349000:-3:0]
2019-04-22 20:35:36.293086 NOTICE [2348803] sendKillCmdToWatchdog: 'extappkill:2349042:-3:0'.
```

It does not indicate any trouble.

If you'd like to suppress `sendKillCmdToWatchdog` messages, set the log level to `WARNING`.

## Large File Upload Failures[¶](#large-file-upload-failures "Permanent link")

Many site applications allow users to upload files, and sometimes the files may be big, possibly 1GB or more. Such large uploads may fail if they are limited by server-level settings

If you are experiencing upload failures, here are some settings you can check.

### External App Settings[¶](#external-app-settings "Permanent link")

Take a look at the following settings for external apps (typically PHP):

- `upload_max_filesize`
- `post_max_size`
- `max_execution_time`: Some PHP scripts may need to do post-upload processing, like resizing or watermarking, so `max_execution_time` could be a factor.
- `memory_limit`
- `upload_tmp_dir`: By default this would be `/tmp`. Many systems limit this directory to 2GB in size, which can be a problem if you upload a file bigger than 2GB. If your `/tmp` is too small and you cannot resize it, you can choose to change the location. For example, you could make it `/var/tmp`. This setting can not be overridden by `.htaccess`. It must be set in `php.ini`. Make sure the new directory has permission to allow the PHP user to read and write files. If you have `open_basedir` in action, the new path must be included there as well.

### Server Settings[¶](#server-settings "Permanent link")

- In **Server Configuration > General**, check **Swapping Directory**. This could be a problem for the same reason as PHP's `upload_tmp_dir` setting. You can change it to something like `/var/tmp/lshttpd/swap`, with default ownership and permission as shown in the `ls -l /tmp/lshttpd/ | grep swap` command, like so:

  ```
  drwxr-x--x 22 nobody nobody 4096 Aug 22 17:35 swap
  ```
- In **Server Configuration > Tuning**, check **Max Request Body Size (bytes)**
- **External App Timeout** ([Learn more](lsws__cp__cpanel__long-run-script.md))
- In **External App**, check **Memory Soft Limit (bytes)** and **Memory Hard Limit (bytes)**. If you don't see **PHP** under **External App**, then go to the **PHP** tab instead, and raise to a number higher than the default `2047M`. For testing purposes, you could blindly raise it to something like `20470M`.
- `wait-req-full-body` ( [Learn more](lsws__configuration.md#wait-req-full-body))

### PHP Testing Script[¶](#php-testing-script "Permanent link")

Here is a simple PHP upload script that you can use to test large file uploads.

```
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "uplaod max size: ".ini_get('upload_max_filesize');
echo "<br>";
echo "post max size: ".ini_get('post_max_size');
echo "<br>";
echo "max execution time : ".ini_get('max_execution_time');
echo "<br>";
echo "memory limit: ".ini_get('memory_limit');
echo "<br>";
echo "upload tmp dir: ".ini_get('upload_tmp_dir');
echo "<br>";
echo "<br>";

   if(isset($_FILES['test'])){
      $errors= array();
      $file_name = $_FILES['test']['name'];
      $file_size =$_FILES['test']['size'];
      $file_tmp =$_FILES['test']['tmp_name'];
      $file_type=$_FILES['test']['type'];
      if (!file_exists('upload_test')) {
        mkdir('upload_test', 0777, true);
        }
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload_test/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="test" />
         <input type="submit"/>
      </form>
   </body>
</html>
```

This script will determine if there is something wrong with PHP, LiteSpeed Web Server, or your site's application.

If this script works, but your site is still experiencing uploading problems, then there is probably something wrong in your site code.

## Fix high i/o wait[¶](#fix-high-io-wait "Permanent link")

In the WebAdmin Console, navigate to **Server > General**, and change **Priority** to `-19`. Process priority can be set between `-19` and `20`, with `-19` being the highest priority, and `20` being the lowest.

## Switch to 'deadline' I/O scheduler[¶](#switch-to-deadline-io-scheduler "Permanent link")

From the command line use the following command to change the device `sda` to the appropriate device:

```
echo “deadline” > /sys/block/sda/queue/scheduler
```

Edit `/boot/grub/menu.lst`, and add the kernel parameter:

```
elevator=deadline
```

## Change VM parameters[¶](#change-vm-parameters "Permanent link")

There are two variables which control the behavior of VM flushing and allocation and affect network and disk performance

- `vm.dirty\_background\_ratio`
- `vm.dirty\_ratio`

To set these values from command line

```
echo 20 > /proc/sys/vm/dirty_background_ratio
echo 60 > /proc/sys/vm/dirty_ratio
```

to make it permanent, edit `/etc/sysctl.conf` and add the following:

```
vm.dirty_background_ratio = 20
vm.dirty_ratio = 60
```

## Increase readahead[¶](#increase-readahead "Permanent link")

To get the current readahead value run the following command:

```
$ blockdev --getra /dev/sda
```

To increase it to a higher value like 16K:

```
$ blockdev --setra 16384 /dev/sda
```

## Disable access time stamp update[¶](#disable-access-time-stamp-update "Permanent link")

Edit `/etc/fstab`, remove the `atime` attribute if there is one, and add the `noatime` attribute. The `noatime` change can significantly improve your server's file i/o performance.

```
#sample /etc/fstab line before change
LABEL=/                 /                       ext3    defaults        1 1
```

```
#sample /etc/fstab line after noatime change
LABEL=/                 /                       ext3    defaults ,noatime       1 1
```

## Kernel Network Tuning[¶](#kernel-network-tuning "Permanent link")

Add the following to `/etc/sysctl.conf`:

```
#increase local ports
net.ipv4.ip_local_port_range = 1024 65535

#reduce the number of time_wait connections
#these 3 lines can reduce your time_wait count by several hundred percent.
#however you should not use the following lines in a NATed configuration.
net.ipv4.tcp_tw_reuse = 1
net.ipv4.tcp_tw_recycle = 1
net.ipv4.tcp_fin_timeout = 30
```

Then call `sysctl` to make them active:

```
sysctl -p
```

## Mitigating SYN Floods[¶](#mitigating-syn-floods "Permanent link")

Note

For an explanation of how SYN floods work and why they are not related to your HTTP server, please see [this blog article](http://blog.litespeedtech.com/?p=926). From this point on, we will assume you understand SYN floods and the TCP handshake.

Defending against SYN floods and other TCP-level attacks is a matter of hardening your kernel. It is not something LiteSpeed Web Server or any other HTTP server can deal with. That being said, here are some simple steps for hardening your Linux kernel:

1. Turn on syncookies
2. Set your backlog limit
3. Lower the number of SYN-ACK retries
4. Apply all changes

To accomplish the first three steps, edit `/etc/sysctl.conf` and add the following:

```
net.ipv4.tcp_syncookies = 1
net.ipv4.tcp_max_syn_backlog = 2048
net.ipv4.tcp_synack_retries = 3
```

Perform a graceful restart to apply all changes.

To apply these values now without restarting, run the following commands:

```
echo 1 > /proc/sys/net/ipv4/tcp_syncookies
echo 2048 > /proc/sys/net/ipv4/tcp_max_syn_backlog
echo 3 > /proc/sys/net/ipv4/tcp_synack_retries
```

Tip

Doing only the above echo commands without altering `/etc/sysctl.conf` will mean that the changes will be lost next time you reboot.

### Understanding all of the above[¶](#understanding-all-of-the-above "Permanent link")

`tcp_syncookies` allows your system to serve more TCP connection requests. Instead of logging each TCP connection request and waiting for a response, the system will instead send a cookie with its SYN-ACK response and delete the original SYN message. Any ACK response the system receives from the client will then contain information about this cookie, allowing the server to recreate the original entry. `1` enables this feature, `0` disables it. This setting is off by default.

`tcp_max_syn_backlog` tells the system when to start using syncookies. When you have more than 2,048 (or whatever number you set it to) TCP connection requests in your queue, the system will start using syncookies. Keep this number pretty high to prevent from using syncookies with normal traffic. (Syncookies can be taxing for the CPU.)

`tcp_synack_retries` tells your system how many times to retry sending the SYN-ACK reply before giving up. The default is `5`. Lowering it to `3` essentially lowers the turnaround time on a TCP connection request to about 45 seconds. (It takes about 15 seconds per attempt.)

## Conntrack table full[¶](#conntrack-table-full "Permanent link")

A website that is fine during times of low traffic may become slow when traffic is high. A typical example is a download server, which can feel slow when there are many concurrent connections to download. One potential cause of this is a full Linux conntrack table.

To verify this is the case, run the following command:

```
dmesg | tail
```

If the conntrack table is full, you will see output like this:

```
nf_conntrack: table full, dropping packet.
nf_conntrack: table full, dropping packet.
nf_conntrack: table full, dropping packet.
```

You can get more information with these two commands:

```
sysctl -a | grep conntrack
...
net.netfilter.nf_conntrack_max = 65536
net.netfilter.nf_conntrack_count = 68999
net.netfilter.nf_conntrack_buckets = 16384
...
```

```
cat /sys/module/nf_conntrack/parameters/hashsize
16384
```

if `nf_conntrack_count` is close to or exceeds `nf_conntrack_max` you will have a problem.

To temporarily address the problem, run the following:

```
sysctl -w net.netfilter.nf_conntrack_max=655360
echo 163840 > /sys/module/nf_conntrack/parameters/hashsize
```

To make this change permanent you'll need to edit two files, and then restart the server:

1. Edit `/etc/sysctl.conf`, and add the following line:

   ```
   net.netfilter.nf_conntrack_max=655360
   ```
2. Edit `/etc/rc.local`, and add following line:

   ```
   echo 163840 > /sys/module/nf_conntrack/parameters/hashsize
   ```
3. Perform a graceful restart.

## Script Restriction Error[¶](#script-restriction-error "Permanent link")

If your site is down and the error log shows `file permission is restricted for script`, it is probably due to the **[Script Restricted Permission Mask"](https://www.litespeedtech.com/docs/webserver/config/security#restrictedScriptPermissionMask)** setting.

This setting is used to specify the restricted permission mask for script files that LiteSpeed Web Server is not allowed to serve. For example, to prohibit serving PHP scripts that are group- and world-writable, set the mask to `022`. The default value is `000`.

Resetting back to the default value of `000` may fix your script restriction issue and restore your site.

## Bad MAGIC for ClientShmInfo[¶](#bad-magic-for-clientshminfo "Permanent link")

After upgrading to a new version of LiteSpeed Web Server, you may see a warning like the following in your log file:

```
2025-08-05 18:59:55.089505 [WARN] [647] Bad MAGIC [1985229329] for ClientShmInfo at [4017116], end current list.
2025-08-05 18:59:57.613818 [WARN] [647] Corrupted client_stats detected, MAGIC for [192.168.1.1] is bad at 4480
```

This occurs if shared memory was changes during the upgrade. To fix the problem, you will need to remove `stats_clients.*` and restart LSWS to update the shared memory.

On FreeBSD with the default configuration, that would look like this:

```
rm /dev/shm/lsws/stats_clients.*
service lsws restart
```

If shared memory is located in a different directory for your system, be sure to replace `/tmp/lsws/shm/` with the correct location.

## Reporting an unreachable site[¶](#reporting-an-unreachable-site "Permanent link")

Quite often, we receive tickets that say nothing more than "My site is unreachable" or "LiteSpeed is down, can you check?" This leads to many messages back-and-forth, because without sufficient information, nobody can tell what happened.

To expedite the troubleshooting process, please review these tips and include any relevant information in your ticket.

- An unreachable website is not the same as LiteSpeed being "down." Is the LiteSpeed process still running? You can run the following command to check: `ps -ef | grep litespeed`
- Is only one domain unreachable? A few domains? All domains on the server? Provide a few domain examples.
- Are any errors showing on the browser, such as 503, 403, or 500? Please provide such errors.
- Check the server's `error_log` and find entries that match the above errors. Provide related log entries.
- Are you aware of any temporary network issues?
- If you use a control panel, can you switch to Apache and see if the error persists?
- If it is a WordPress site, and on some of your users are being denied access, it is likely LiteSpeed's WP protection feature, or per-client throttling in effect.

If you provide as much information and as many details as you can when you create your ticket, it will speed up the troubleshooting process, and we may better assist you. Thank you!
