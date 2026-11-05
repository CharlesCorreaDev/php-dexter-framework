# cgroups | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cli-cgroups/

---

# Namespaces and cgroups Management[¶](#namespaces-and-cgroups-management "Permanent link")

LiteSpeed provides several command-line programs for managing [Namespaces](lsws__namespaces.md) and [cgroups](lsws__cgroups.md). These programs are all found in the `$SERVER ROOT` (typically `/usr/local/lsws`) and stored in `$SERVER_ROOT/lsns/bin`.

The following programs are available:

| Action | Description |
| --- | --- |
| [lsnsctl](#lsnsctl) | Manage Namespace Containers |
| [lssetup](#lssetup) | Set up LiteSpeed Web Server for cgroups |
| [lscgctl](#lscgctl) | Configure users for cgroups |
| [lspkgctl](#lspkgctl) | Control users within a cPanel or Plesk package for cgroups |

## lsnsctl[¶](#lsnsctl "Permanent link")

LiteSpeed includes a program to help you manage namespaces at run-time: `lsnsctl`. It provides access to a number of features including:

- The ability to disable namespace management for a user that is configured to use it. This is particularly useful if you have enabled namespaces at the global level and want to exclude specific users.
- The ability to set a minimum UID to be examined (`set-min-uid`). Until you do this, the LiteSpeed Containers API programs, including this one will complain that this has not been done.
- unmount one or all users.

Syntax:

```
./lsnsctl <command> [options]
```

| Command | Description |
| --- | --- |
| `disable-uid` | Disable a configured user for namespaces. |
| `enable-uid` | Enable a configured user previously disabled. |
| `get-min-uid` | Display current `min_uid` setting. |
| `list-disabled-uids` | List the configured disabled users as a JSON array. |
| `list-mount` | List users mounted and the directories mounted for them in JSON form. |
| `set-min-uid` | Set or modify the`min_uid` value in `uid.conf` file. |
| `unmount` | Unmount the mounts mounted for a container by UID mounted by a namespace. |
| `unmount-all` | Unmount all mounts for all namespaced containers. |
| `version` | List the version number of the API program. |

### lsnsctl disable-uid[¶](#lsnsctl-disable-uid "Permanent link")

```
./lsnsctl disable-uid --uid <userid> | <username> [other options]
```

Disable a configured user for namespaces. You must specify a `-–uid` option.

| Option | Description |
| --- | --- |
| `-h`, `–help` | Show usage information |
| `-l`, `–log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error. |
| `-–uid <userid>` or `<username>` | Specify a user id or username |

Example

Disable namespace management for `example` user:

```
./lsnsctl disable-uid --uid example
```

### lsnsctl enable-uid[¶](#lsnsctl-enable-uid "Permanent link")

```
./lsnsctl enable-uid --uid <userid> | <username> [other options]
```

Enable a configured user previously disabled. You must specify a `-–uid` option.

| Option | Description |
| --- | --- |
| `-h`, `–help` | Show usage information |
| `-l`, `–log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error. |
| `-–uid <userid>` or `<username>` | Specify a user id or username |

### lsnsctl get-min-uid[¶](#lsnsctl-get-min-uid "Permanent link")

```
./lsnsctl get-min-uid [options]
```

Display current `min_uid` setting.

| Option | Description |
| --- | --- |
| `-h`, `–help` | Show usage information |
| `-l`, `–log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error. |

### lsnsctl list-disabled-uid[¶](#lsnsctl-list-disabled-uid "Permanent link")

```
./lsnsctl list-disabled-uid [options]
```

List the configured disabled users as a JSON array.

| Option | Description |
| --- | --- |
| `-h`, `–help` | Show usage information |
| `-l`, `–log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error. |
| `-–uid <userid>` or `<username>` | Specify a user id or username |

### lsnsctl list-mount[¶](#lsnsctl-list-mount "Permanent link")

```
./lsnsctl list-mount [options]
```

List users mounted and the directories mounted for them in JSON form. Can have an optional `--uid`.

| Option | Description |
| --- | --- |
| `-h`, `–help` | Show usage information |
| `-l`, `–log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error. |
| `-–uid <userid>` or `<username>` | Specify a user id or username |

### lsnsctl set-min-uid[¶](#lsnsctl-set-min-uid "Permanent link")

```
./lsnsctl set-min-uid [options]
```

Set or modify the`min_uid` value in `uid.conf` file.

| Option | Description |
| --- | --- |
| `-h`, `–help` | Show usage information |
| `-l`, `–log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error. |
| `-–uid <userid>` or `<username>` | Specify a user id or username |

### lsnsctl unmount[¶](#lsnsctl-unmount "Permanent link")

```
./lsnsctl unmount [options]
```

Unmount the mounts mounted for a container by user id mounted by a namespace.

| Option | Description |
| --- | --- |
| `-h`, `–help` | Show usage information |
| `-l`, `–log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error. |
| `-–uid <userid>` or `<username>` | Specify a user id or username |

### lsnsctl unmount-all[¶](#lsnsctl-unmount-all "Permanent link")

```
./lsnsctl unmount-all [options]
```

Unmount all mounts for all namespace containers.

| Option | Description |
| --- | --- |
| `-h`, `–help` | Show usage information |
| `-l`, `–log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error. |

### lsnsctl version[¶](#lsnsctl-version "Permanent link")

```
./lsnsctl version [options]
```

List the version number of the API program.

| Option | Description |
| --- | --- |
| `-h`, `–help` | Show usage information |
| `-l`, `–log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error. |

## lssetup[¶](#lssetup "Permanent link")

This program will set up your system if it is missing a cgroups feature. It also modifies the LiteSpeed Configuration, enabling cgroups and namespaces to they can be enabled at the virtual host level.

Note

All configuration will need to be done either running as root, or by using the `sudo` command as a prefix for your command.

Syntax:

```
./lssetup [options]
```

| Option | Description |
| --- | --- |
| `-h`, `--help` | Show usage information |
| `-l <level>`, `--log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error |
| `-q`, `--quiet` | Turn off all logging and only output what is requested |
| `-s <server-root>`, `--server_root <server-root>` | Set the LiteSpeed server root |
| `-c <cgroups>`, `--cgroups <cgroups>` | Set the minimum value for cgroups |
| `-i <cgroups>`, `--cgroups-init <cgroups>` | Set the cgroups value if not set currently |
| `-n <namespace>`, `--namespace <namespace>` | Set the minimum value for namespace |
| `-m <namespace>`, `--namespace-init <namespace>` | Set the namespace value if not set currently |
| `-g`, `--no-config` | Skip checking of LiteSpeed Config |
| `-t`, `--no-subtree_control` | Skip checking of system `cgroup.subtree_control` file |
| `-u`, `--no-upgrade` | Do not check the version of LiteSpeed |
| `-r`, `--revert-config` | Revert modified LiteSpeed config file |

Examples

Set up default configuration from a non-root account (using `sudo`):

```
sudo /usr/local/lsws/lsns/bin/lssetup
```

Revert to a prior configuration

```
./lssetup -r
```

## lscgctl[¶](#lscgctl "Permanent link")

The results of a `lscgctl` command may be logged messages (to stderr) or JSON output (to stdout). All JSON output is returned as a string, even if it is a numeric value. Numeric values are either exact numbers or quantified numbers (10K, 10M, etc.). If the output is the empty string, there is no resource limit applied for that feature. If you wish to remove a resource limit, specify an option value of `-1`.

Syntax:

```
./lscgctl <command> [<user> ...] [options]
```

| Command | Description |
| --- | --- |
| `list` or `list-user` | List loaded user and its limits |
| `list-all` | List all loaded users and their limits |
| `set` or `set-user` | Set resource limits for user(s) |
| `set-all` | Set resource limits for all users |
| `version` | Display the version number |

All of the above commands accept one of the following options. Set an option to `-1` to reset to the system default of "no limit."

| Global Option | Description |
| --- | --- |
| `--cpu=<cpu>` | Limit CPU usage in percentage; `100` is one complete core. Applied as `CPUQuota` |
| `-h`,`–help` | Show usage information |
| `--io=<io>` | Define read/write I/O limits. Applied as `IOReadBandwidthMax` and `IOWriteBandwidthMax` for each device. |
| `--iops=<io per second>` | Defines read/write I/O's per second. Applied as `IOReadIOPSMax` and `IOWriteIOPSMax` for each device. |
| `-l`, `–log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error. |
| `--mem=<memory>` | Limit virtual memory for applications inside the cgroup. Applied as `MemoryMax`. |
| `-q`, `--quiet` | Disable logging messages and suppress output. Success or failure of the operation is determined by the program return code. |
| `--tasks=<processes>` | Limit number of processes. Applied as `TasksMax`. |

### lscgctl list[¶](#lscgctl-list "Permanent link")

```
./lscgctl list <user> [<user> ...] [options]
```

List loaded user and its limits. `<user>` can be specified as a user id or a user name. Lists are returned in JSON format.

### lscgctl list-all[¶](#lscgctl-list-all "Permanent link")

```
./lscgctl list-all [options]
```

List all loaded users and their limits. May be used with the `–log <level>` and `--quiet` options.

### lscgctl set[¶](#lscgctl-set "Permanent link")

```
./lscgctl set <user> [<user> ...] <option> [option ...]
```

Set resource limits for user(s). `<user>` can be specified as a user id or a user name. At least one setting option is required. Any setting value not specified is left at its previous value.

### lscgctl set-all[¶](#lscgctl-set-all "Permanent link")

```
./lscgctl set-all <option> [option ...]
```

Set resource limits for all users. May be used with the `–log <level>` and `--quiet` options. At least one setting option is required. Any setting value not specified is left at its previous value.

### lscgctl version[¶](#lscgctl-version "Permanent link")

```
./lscgctl version [options]
```

Display the version number. Can be combined with the `–-quiet` option to display just the version number (no timestamp).

## lspkgctl[¶](#lspkgctl "Permanent link")

If you have a control panel but do not wish to use the PlugIn, you can use the LiteSpeed Containers API to control all of the users in a package for cPanel or Plesk with the `lspkgctl` program.

Syntax:

```
./lspkgctl [options] <command> [pkg ...]
```

| Command | Description |
| --- | --- |
| `list` | List package default value and its limits |
| `list-all` | List all packages and their limits. |
| `set` | Modify the package defaults and set resource limits for user(s) in the package currently using the default settings. |
| `set-force` | Modifiy the package defaults and set resource limits for all users regardless of their existing setting. |
| `userpkg` | Output the package the given user is in. |
| `usersize` | Output the default size for the package the given user is in. |
| `validate` | Identify new user for the specified package and set it to the package defaults. |
| `validate-all` | Identify new users for all packages and set them to its package defaults. |
| `version` | Display the version number. |

All of the above commands accept one of the following options. Set an option to `-1` to reset to the system default of "no limit."

| Global Option | Description |
| --- | --- |
| `--cpu=<cpu>` | Limit CPU usage in percentage; `100` is one complete core. Applied as `CPUQuota` |
| `-h`,`–help` | Show usage information |
| `--io=<io>` | Define read/write I/O limits. Applied as `IOReadBandwidthMax` and `IOWriteBandwidthMax` for each device. |
| `--iops=<io per second>` | Defines read/write I/O's per second. Applied as `IOReadIOPSMax` and `IOWriteIOPSMax` for each device. |
| `-l`, `–log <level>` | Set log level: `10`=debug, `20`=info (default), `30`=warning, `40`=error. |
| `--mem=<memory>` | Limit virtual memory for applications inside the cgroup. Applied as `MemoryMax`. |
| `-q`, `--quiet` | Disable logging messages and suppress output. Success or failure of the operation is determined by the program return code. |
| `-s`, `--sleep` | Number of seconds to pause. Should only be used when running in the background and just pauses before any actions performed. |
| `--tasks=<processes>` | Limit number of processes. Applied as `TasksMax`. |
| `--prune` | Can be used with `validate` or `validate-all` to remove stale packages from the list. |

### lspkgctl list[¶](#lspkgctl-list "Permanent link")

```
./lspkgctl [options] list [pkg ...]
```

List package default value and its limits. Unlisted values are set at infinite. New users are set to the package settings.

### lspkgctl list-all[¶](#lspkgctl-list-all "Permanent link")

```
./lspkgctl [options] list-all
```

List all packages and their limits. This also sets any new users for any package to that package settings.

### lspkgctl set[¶](#lspkgctl-set "Permanent link")

```
./lspkgctl --size <size> [options] set [pkg ...]
```

Modifies the package defaults and sets resource limits for user(s) in the package currently using the default settings. At least one option is required. Note any option not specified is left at its previous value.

| Option | Description |
| --- | --- |
| `--size <size>` | Set the default size in MB for a given package. |

### lspkgctl set-force[¶](#lspkgctl-set-force "Permanent link")

```
./lspkgctl [options] set-force [pkg ...]
```

Modifies the package defaults and sets resource limits for all users regardless of their existing setting. At least one option is required. Note any option not specified is left at its previous value.

### lspkgctl userpkg[¶](#lspkgctl-userpkg "Permanent link")

```
./lspkgctl --user <username> [options] userpkg
```

Output the package the given user is in.

| Option | Description |
| --- | --- |
| `--user <username>` | Specify the user to request the package for. |

### lspkgctl usersize[¶](#lspkgctl-usersize "Permanent link")

```
./lspkgctl --user <username> [options] usersize
```

Output the default size for the package the given user is in.

| Option | Description |
| --- | --- |
| `--user <username>` | Specify the user to request the size for. |

### lspkgctl validate[¶](#lspkgctl-validate "Permanent link")

```
./lspkgctl [options] validate [pkg ...]
```

Identifies new user for the specified package and sets it to the package defaults. Does not do a list (though `list` does the validation as well). `--prune` can be used to remove empty (stale) packages from the list.

### lspkgctl validate-all[¶](#lspkgctl-validate-all "Permanent link")

```
./lspkgctl [options] validate-all
```

Identifies new users for all packages and sets them to its package defaults. Does not do a list (though `list-all` does the validation as well). `--prune` can be used to remove empty (stale) packages from the list.

### lspkgctl version[¶](#lspkgctl-version "Permanent link")

```
./lspkgctl [options] version
```

Display the version number. Can be combined with the `–quiet` option to display just the version number (no timestamp).
