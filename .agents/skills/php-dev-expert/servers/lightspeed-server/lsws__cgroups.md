# cgroups | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cgroups/

---

# cgroups[¶](#cgroups "Permanent link")

If you are a web server administrator and your users are creating CGI services that are chewing up your server's CPU, memory, or tasks, you have a powerful tool to deal with it in LiteSpeed Web Server: cgroups.

"cgroup" is short for "control group". cgroups is a Linux kernel feature that, according to [Wikipedia](https://en.wikipedia.org/wiki/cgroups), "limits, accounts for, and isolates the resource usage (CPU, memory, disk I/O, network, etc.) of a collection of processes."

The feature is part of the Linux Operating System and can be activated and utilized with version 6.0 or higher of LiteSpeed Web Server.  LiteSpeed uses cgroups v2 requiring a kernel 5.2 or higher and some additional configuration discussed below.

cgroups v2 has a much richer set of features supported for control than cgroups v1 as discussed [here](https://www.freedesktop.org/software/systemd/man/systemd.resource-control.html). User features enforced by cgroups include:

- CPU utilization
- virtual memory
- file read and write maximum bandwidth and counts per second
- maximum tasks

## Things to Know About cgroups[¶](#things-to-know-about-cgroups "Permanent link")

cgroups is only available for applications started by the CGI agent which include PHP.  Below we discuss the details for enabling it, but it works on the operating system resource definitions for the owner of the CGI script file.

Containers (like Docker containers) are operating system facilities that run within the base OS.  Containers may use cgroups to avoid completely dominating the machine, and they can *only* do this if using cgroups. This is because cgroups is one of the few methods that can be used to address overuse of resources without killing the processes (unlike ulimit and other limiting schemes).  cgroups helps you better balance the use of your system, keeping it active and functional for all of your users.

cgroups affects more than just LiteSpeed Web Server, since it is a kernel feature. It also affects tasks running as specific users that start their own user sessions, like SSH or SFTP sessions.  Thus, if you set a CPUQuota of 10% for a user, *all accesses by the user must not exceed 10%*. This includes those in LiteSpeed Web Server *and* user login sessions. All will be shared fairly by the operating system.  If you start more processes, the total percentage for the user does not change, but each process runs a bit slower so as to avoid monopolizing the CPU.

Note

This is managed by systemd, which means that all services within your operating system can be controlled similarly, but only at the service level.  To control it at the user level, LiteSpeed Web Server's CGI functions utilize specific user-management code.

The reason why this method is not more widespread is that users who are logged in with `su` or a screen window manager (KDE, Gnome, etc.) can't use cgroups, as their sessions are managed by the service that initialized the slice rather than the user slice.  LiteSpeed Web Server creates its CGI tasks (when configured to) within the user's sessions and thus can take advantage of them.

## Using cgroups with LiteSpeed Web Server[¶](#using-cgroups-with-litespeed-web-server "Permanent link")

### Step 1. System Configuration[¶](#step-1-system-configuration "Permanent link")

To verify that you are running cgroups v2 check to see if you have the cgroups v2 controllers file:

```
ls /sys/fs/cgroup/cgroup.controllers
```

If this file is not there then you are not running v2 cgroups.

Tip

You need an OS with cgroups v2 and you have to have it booted to the Unified hierarchy. [This site](https://github.com/opencontainers/runc/blob/main/docs/cgroup-v2.md) lists some appropriate operating systems. Some operating systems can be booted into cgroups v2. For example if you are running a version 8 variant of RedHat Linux (RedHat, CentOS, AlmaLinux, etc.), [this will explain how to boot into cgroups v2](https://docs.redhat.com/en/documentation/red_hat_enterprise_linux/8/html/managing_monitoring_and_updating_the_kernel/using-cgroups-v2-to-control-distribution-of-cpu-time-for-applications_managing-monitoring-and-updating-the-kernel#mounting-cgroups-v2_using-cgroups-v2-to-control-distribution-of-cpu-time-for-applications).

By default only a limited number of commands can be controlled through cgroups. You can see this list:

```
cat /sys/fs/cgroup/cgroup.subtree_control
```

If this list does not include the features you wish to control, then you will need to add them:

- `cpu` for CPU utilization, `memory` for virtual memory management
- `io` for file read/write throttling
- `tasks` for process throttling

If these features are already included or you use one of our control panel plugins, for cPanel or Plesk, you can skip this step and proceed to **LiteSpeed Web Server Setup** below.

Note

All configuration will need to be done either running as root, or by using the `sudo` command as a prefix for your command. The notes below will show the entries as if you were running as root. Add the `sudo` prefix if you need to on your system.

The easiest way to do this is by running the `lssetup` script in the `$SERVER ROOT` (typically `/usr/local/lsws`) and stored in `$SERVER_ROOT/lsns/bin`. This script will set up your system if it is missing a cgroups featur. It also modifies the LiteSpeed configuration, enabling cgroups and namespaces so they can be enabled at the virtual host level.

Most users will simply run it without command line parameters, allowing it to set up the operating system if necessary and the configuration file.

```
sudo /usr/local/lsws/lsns/bin/lssetup
```

Most users will be able to proceed to [Step 2](#step-2-litespeed-web-server-setup).

#### Advanced setup[¶](#advanced-setup "Permanent link")

Run the help option from a bash command line:

```
/usr/local/lsws/lsns/bin/lssetup --h
```

From which you would get back:

```
usage: setup [-h] [-l LOG] [-q] [-s SERVER_ROOT] [-c CGROUPS] [-i CGROUPS_INIT] [-n NAMESPACE] [-m NAMESPACE_INIT] [-g] [-t] [-u] [-r]

LiteSpeed Containers Setup Program

options:
  -h, --help            show this help message and exit
  -l LOG, --log LOG     set logging level, 10=Debug, 20=Info, 30=Warning, 40=Error. Default is Info
  -q, --quiet           turns off all logging and only outputs what is requested.
  -s SERVER_ROOT, --server_root SERVER_ROOT
                        the LiteSpeed SERVER_ROOT
  -c CGROUPS, --cgroups CGROUPS
                        The minimum value for cgroups
  -i CGROUPS_INIT, --cgroups-init CGROUPS_INIT
                        The cgroups value if not set currently
  -n NAMESPACE, --namespace NAMESPACE
                        The minimum value for namespace
  -m NAMESPACE_INIT, --namespace-init NAMESPACE_INIT
                        The namespace value if not set currently
  -g, --no-config       Skips checking of LiteSpeed Config
  -t, --no-subtree_control
                        Skips checking of system cgroup.subtree_control file
  -u, --no-upgrade      Does not check the version of LiteSpeed
  -r, --revert-config   Reverts modified LiteSpeed config file
```

If you have a problem with cgroups after using `lssetup`, you can revert to your prior configuration file by entering:

```
/usr/local/lsws/lsns/bin/lssetup -r
```

See [Namespaces and cgroups CLI](lsws__cli-cgroups.md#lssetup) for more details about this program.

### Step 2. LiteSpeed Web Server Setup.[¶](#step-2-litespeed-web-server-setup "Permanent link")

In the WebAdmin Console, configure native LiteSpeed Web Server so that CGI apps use the user ID of the owner of the file. Navigate to **Configuration > Virtual Hosts** and select the virtual host you wish to manage. In the **Basic** tab, modify the **Security** entry and set the **ExtApp Set UID Mode** to `CGI File UID`. Save the entry.

To enable cgroups at the server level, in LiteSpeed Web Server WebAdmin, navigate to **Server Configuration > Security** and edit the **CGI Settings** group. The parameter **cgroups** controls whether cgroups can be used and if so, sets the default value:

- `Off` (the same as `not set`): Allows cgroups to be used by LiteSpeed Web Server, but does not enable cgroups by default. cgroups must be explicitly enabled at the virtual host level (see below).
- `On`: Allows cgroups to be used by LiteSpeed Web Server and enables cgroups by default. cgroups can be disabled at the virtual host level.
- `Disabled`: No matter the setting at the virtual host level, the cgroups feature is disabled.

Save the group to proceed. If you do not want to set cgroups at the virtual host level, do a graceful restart of LiteSpeed Web Server to activate your configuration and proceed to [Step 3](#step-3-user-configuration).

#### Optional Virtual Host Configuration[¶](#optional-virtual-host-configuration "Permanent link")

If you have not disabled cgroups at the server level and want to further control them at the vhost level, navigate to **Configuration > Virtual Hosts** and select the virtual host you wish to manage. In the **General** tab, modify the **General** entry and set **cgroups**:

- `Off`: Disables cgroups for this vhost, regardless of the server setting.
- `On`: Enables cgroups for this vhost if not disabled at the server level.

Save the group to proceed. Do a graceful restart of LiteSpeed Web Server to activate your configuration and proceed to [Step 3](#step-3-user-configuration).

#### Modifying the Configuration in Files[¶](#modifying-the-configuration-in-files "Permanent link")

This is only for reference if you're using the WebAdmin Console.

In `$SERVER_ROOT/conf/httpd.config.xml` there is a single parameter in the `CGIRLimit` section with parameters like `procHardLimit`:

- **cgroups**: The possible values of `0`, `1`, and `2` correspond to `Disabled`, `Off`, and `On`, respectively, as described above.

#### Configuring Apache Virtual Hosts[¶](#configuring-apache-virtual-hosts "Permanent link")

The previous instructions refer to native LiteSpeed Web Server. To enable or disable cgroups for an Apache virtual host, use `LsCgroups` with a value of either `off` or `on` in the vhost's Apache configuration file.

### Step 3. User Configuration[¶](#step-3-user-configuration "Permanent link")

User configuration is within the operating system.  To make this easier to perform, we provide plugins for LiteSpeed Containers in [WHM/cPanel](lsws__cp__cpanel__lscntr.md) and [Plesk](lsws__cp__plesk__lscntr.md) and we strongly recommend that configuration be done there. If you do not have one of those control panels, you can use the methods described here.

The control panels use the LiteSpeed Containers API programs which are in the LiteSpeed home directory, typically `/usr/local/lsws` and referred to as `$SERVER ROOT` and stored in `$SERVER_ROOT/lsns/bin`.

`lscgctl` is the primary tool for LiteSpeed Container cgroups management. It controls access to system resources including CPU, block I/O, memory and task creation. It is a command line tool and is typically run from a bash command prompt. For example:

```
/usr/local/lsws/lsns/bin/lscgctl --h
```

From which you would get back:

```
usage: lscgctl [-h] [--cpu CPU] [--io IO] [--iops IOPS] [-l LOG] [--mem MEM] [-q] [--tasks TASKS] {list,list-all,list-user,reset,reset-all,reset-user,set,set-all,set-user,version} [uid ...]

LiteSpeed cgroups Control Program

positional arguments:
  {list,list-all,list-user,reset,reset-all,reset-user,set,set-all,set-user,version}
                        The cgroups command
  uid                   uid or user name for -user commands

options:
  -h, --help            show this help message and exit
  --cpu CPU             limit CPU access. Specify a percentage of a complete core, 100 is 1 complete core. Default is no limit (-1).
  --io IO               limit I/O access. Specify in bytes/sec. Default is no limit (-1).
  --iops IOPS           limit I/O access. Specify in IOs per second. Default is no limit (-1).
  -l LOG, --log LOG     set logging level, 10=Debug, 20=Info, 30=Warning, 40=Error. Default is Info
  --mem MEM             limit virtual memory access. Specify in bytes. Default is no limit (-1).
  -q, --quiet           turns off all logging and only outputs what is requested.
  --tasks TASKS         limit number of tasks. Specify a maximum count of tasks that can be started.
```

All commands except the list command require that you run it as root, typically with the `sudo` command.

To list the settings for the user `user2`:

```
/usr/local/lsws/lsns/bin/lscgctl list user2
```

Which on this system would return:

```
2024-07-25 15:22:13.230 [INFO] Error opening /usr/local/lsws/lsns/conf/lsns.conf: [Errno 2] No such file or directory: '/usr/local/lsws/lsns/conf/lsns.conf', continuing with default min uid 1000
{
    "1001": {
        "name": "user2",
        "cpu": "20",
        "io": "100M",
        "iops": "",
        "mem": "500M",
        "tasks": "20K"
    }
}
```

You can suppress the initial error by setting the minimum user ID, which on most systems is typically 1000 and on Plesk systems is 10000 using the `lsnsctl` program. An examination of the `/etc/passwd` file will show you the users on the system and you can see where the standard users begin there. For example for a typical system to suppress the message and set the minimum UID as 1000, specify:

```
sudo /usr/local/lsws/lsns/bin/lsnsctl set-min-uid --uid 1000
```

The error message above will be displayed for this command, but will in the future be permanently suppressed.

To set the CPU utilization for user2 to 30% enter the following:

```
sudo /usr/local/lsws/lsns/bin/lscgctl set user2 --cpu 30
```

Which on this system would return:

```
{
    "1001": {
        "name": "user2",
        "cpu": "30",
        "io": "100M",
        "iops": "",
        "mem": "500M",
        "tasks": "20K"
    }
}
2024-07-25 15:35:20.952 [INFO] Set successful
```

#### lscgctl[¶](#lscgctl "Permanent link")

With `lscgctl` you can specify 1 or more uids and any number of options.

The results of a command may be logged messages (to stderr) or JSON output (to stdout). All JSON output returned as a string, even if it is a numeric value. Numeric values are either exact numbers or quantified number (xxK, xxM, etc.). If the output is the empty string, there is no resource limit applied for that feature. If you wish to remove a resource limit, specify an option value of `-1`.

Commands include:

| Command | Description |
| --- | --- |
| `list` or `list-user` | List loaded user and its limits. User(s) can be specified as a UID or a user name. Lists are returned in JSON format. |
| `list-all` | List all loaded users and their limits. |
| `set` or `set-user` | Set resource limits for user(s). See below for options and at least one option is required. Note any option not specified is left at its previous value. |
| `set-all` | Set resource limits for all users. See below for options and at least one option is required. Note any option not specified is left at its previous value. |
| `version` | Display the version number. Can be combined with the `–quiet` option to display just the version number (no timestamp). |

Options. Note that setting an option to -1 resets it to the system default (no limit).

| Option | Description |
| --- | --- |
| `--cpu=N` | Limit CPU usage in percentage; `100` is one complete core. Applied as CPUQuota |
| `-h`,`–help` | Show usage information |
| `--io=N` | Defines read/write I/O limits. Applied as IOReadBandwidthMax and IOWriteBandwidthMax for each device. |
| `--iops=N` | Defines read/write I/O's per second. Applied as IOReadIOPSMax and IOWriteIOPSMax for each device. |
| `-l`, `–log LEVEL` | `10`=debug, `20`=info (default), `30`=warning, `40`=error. |
| `--mem=N` | Limits virtual memory for applications inside the cgroup. Applied as MemoryMax. |
| `-q`, `--quiet` | Disables logging messages and suppresses output. Success or failure of the operation is determined by the program return code. |
| `--tasks=N` | Limits number of processes. Applied as TasksMax. |

See [Namespaces and cgroups CLI](lsws__cli-cgroups.md#lscgctl) for more details about this program.

#### lspkgctl[¶](#lspkgctl "Permanent link")

If you have a control panel but do not wish to use the PlugIn, you can use the LiteSpeed Containers API to control all of the users in a package for cPanel or Plesk with the `lspkgctl` program.

```
/usr/local/lsws/lsns/bin/lspkgctl --h
```

From which you would get back:

```
usage: lspkgctl [-h] [--cpu CPU] [--io IO] [--iops IOPS] [-l LOG] [--mem MEM] [-q] [--tasks TASKS] {default,list,list-all,set,set-force,validate,validate-all,version} [pkg ...]

LiteSpeed Packages Control Program

positional arguments:
  {default,list,list-all,set,set-force,validate,validate-all,version}
                        The packages command
  pkg                   package name                                                                                                                                                                                                                                                    

options:                                                                                                                                                                                                                                                                                
  -h, --help            show this help message and exit                                                                                                                                                                                                                                 
  --cpu CPU             limit CPU access. Specify a percentage of a complete core, 100 is 1 complete core. Default is no limit (-1).                                                                                                                                                    
  --io IO               limit I/O access. Specify in bytes/sec. Default is no limit (-1).                                                                                                                                                                                               
  --iops IOPS           limit I/O access. Specify in IOs per second. Default is no limit (-1).                                                                                                                                                                                          
  -l LOG, --log LOG     set logging level, 10=Debug, 20=Info, 30=Warning, 40=Error. Default is Info                                                                                                                                                                                     
  --mem MEM             limit virtual memory access. Specify in bytes. Default is no limit (-1).                                                                                                                                                                                        
  -q, --quiet           turns off all logging and only outputs what is requested.                                                                                                                                                                                                       
  -s SLEEP, 
  --sleep SLEEP         number of seconds to pause. Should only be used when running in the background
  --size MB             use with the set command for the "Cache Redis for Users" tool, sets the MB default for a given package.
  --tasks TASKS         limit number of tasks. Specify a maximum count of tasks that can be started.                                                                                                                                                                                   
  --user NAME           the user to request the size or package for.  Required for the commands usersize and userpkg
```

See [Namespaces and cgroups CLI](lsws__cli-cgroups.md#lspkgctl) for more details about this program.

#### systemctl[¶](#systemctl "Permanent link")

In the option descriptions above, the way a resource limit is applied becomes a systemd option. You can see and manipulate systemd options using the program `systemctl`

`systemctl` is the primary tool for accessing services, slices and units on a machine.  It is accessed from a terminal session.  You can see its options by using:

```
systemctl --help
```

You may have noted that this is the same command used to start and stop services on your system.  This is not an accident; these facilities were initially intended for services and have been extended by kernel developers for users.

`systemctl` requires that you specify the user using the userid (uid) in the form `user-UID.slice`, where UID is replaced by the userid.

Example

If `user2` has a uid of `1001`, then you'd specify the user as `user-1001.slice`

```
systemctl show user-1001.slice
```

The titles and values for the properties are mentioned above (`CPUQuota=xx%`, `TasksMax=xx`, and `MemoryMax=xx`).  To set a property like CPUQuota to 10% for user2 (uid=1001), enter:

```
systemctl set-property user-1001.slice CPUQuota=10%
```

Properties are set in the system and take effect immediately for future processes.  Current ones are not affected, as mentioned above, they are also saved and may work on reboot.  If you don't want them saved, you can avoid this by adding the modifier `--runtime` after systemctl and before the command.  For example:

```
systemctl --runtime set-property user-1001.slice CPUQuota=10%
```

To see its current value, enter (as you did above):

```
systemctl show user-1001.slice
```

Its current value will be buried within all of the other parameters, but it will be there.  Except CPUQuota, which is listed in a `systemctl show` command as `CPUQuotaPerSecUSec` (USec means microseconds, but it's displayed in milliseconds).  10% is displayed as `100ms`.

You can see where the information you update gets stored by using systemctl with the status command and the user slice.  For example:

```
$ systemctl status user-1001.slice
● user-1001.slice 
  Loaded: loaded 
 Drop-In: /etc/systemd/system/user-1001.slice.d 
          └─50-CPUQuota.conf, 50-TasksMax.conf 
  Active: active since Wed 2019-01-23 15:56:52 EST; 1 day 22h ago 
   Tasks: 0 (limit: 1000)
```

Note

It shows its status and the names and locations of the drop-in files.

You will need to repeat the steps above for all of the users you wish to control.

## Validation[¶](#validation "Permanent link")

After configuring users and LiteSpeed Web Server to use cgroups, you want to make sure that they are applied correctly.  Configure a user to use a small amount of CPU (like 10%).  Then create a CGI file in your virtual host directory which is owned by your configured user (with a command like `chown`).  Below is an example.

Danger

This is a dangerous example as it uses 100% of CPU so it should only be used on test systems.

Name the file `$SERVER_ROOT/<virtual host>/cgi-bin/pound` and change it's owner to be `user2`:

```
#!/bin/sh

date=date -u '+%a, %d %b %Y %H:%M:%S %Z'
results=/usr/bin/dd if=/dev/zero of=/dev/null 
cat << EOF
Content-type: text/plain
Expires: $date

$results

EOF
```

Then change its owner:

```
chown user2:users pound
```

Note

In Ubuntu, the `dd` command is in `/bin/dd` rather than `/usr/bin/dd` (on the results line).

When you specify the site in your browser: `http://127.0.0.1/cgi-bin/pound` the `dd` command should be owned by `user2` and it should take only 10%.  You can view this with the top program and kill it there.  If there are problems you should check the `$SERVER_ROOT/logs/error.log` file to see if there are any cgroup messages.

## Statistics[¶](#statistics "Permanent link")

The LiteSpeed Prometheus Exporter will scrape not only LiteSpeed's real-time data files, but if cgroups is enabled for LiteSpeed, it will also scrape the real-time stats for cgroups. See the [github page for the LiteSpeed Prometheus Exporter](https://github.com/litespeedtech/litespeed-prometheus-exporter) for more information.

cgroups information can also be obtained from the LiteSpeed Containers program `lscgstats`

### lscgstats[¶](#lscgstats "Permanent link")

With `lscgstats` you can specify 1 or more uids and any number of options.

The results of a command may be logged messages (to stderr) or JSON output (to stdout). All JSON output returned as a string, even if it is a numeric value. Numeric values are always exact numbers and may be quite large. 0 values most likely indicate that there is no data for that user.

Each field will represent a value similar suffix from the Prometheus Exporter and come from a file in the user-UID.slice directory.

A `.` user will be used to represent ALL of the users in the system and will be returned on all operations.

Options:

| Option | Description |
| --- | --- |
| `-h`, `–help` | Show usage information |
| `-l`, `–log LEVEL` | `10`=debug, `20`=info (default), `30`=warning, `40`=error. |
| `-q`, `--quiet` | Disables logging messages. |

JSON field output for each user:

| Json Title | Prometheus Suffix | File name (param) | Description |  |
| --- | --- | --- | --- | --- |
| `cpu` | `microseconds` | `cpu.stat` (`usage_usec`) | Total CPU usage in nanoseconds since system boot. |  |
| `io` | `read_bytes` + `write_bytes` | `io.stat` (`rbytes` + `wbytes` for all devices) | Total number of bytes read and written. |  |
| `iops` | `rios` + `wios` | `io.stat` (`rios` + `wios` for all devices) | Total number of read and write operations. |  |
| `mem` | `memory_current` | `memory.current` | Total amount of memory currently being used. |  |
| `tasks` | `pids_current` | `pids.current` | Number of active pids. |  |

## Other Useful Tools[¶](#other-useful-tools "Permanent link")

There are other useful tools which can help you understand how configuration is implemented in your system:

- `systemd-cgls -a`:  Enter this command to display a tree-like structure of the processes and under which slice and scope they are running.  The `dd` command in the `pound` example above should be running under `user-1001.slice`.
- The `/proc/<process-id>/cgroup` file:  In the `1:name` line you should see the slice that the process is running in.
