# CLI | WP Cache Management | LiteSpeed Plugin | DirectAdmin | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/directadmin/da-litespeed-plugin/cli-lscmctl/

---

# Cache Management CLI[¶](#cache-management-cli "Permanent link")

Our `lscmctl` CLI script provides command-line access to many of the options available through our [LiteSpeed plugin for DirectAdmin](lsws__cp__directadmin__da-litespeed-plugin__wp-cache-management.md).

The command-line interface script is located at `/usr/local/lsws/admin/misc/lscmctl` and is used to execute basic cache-management actions through the terminal or in a cron job. You may also recommend a plugin or broadcast a message to all discovered WordPress installations through the CLI tool.

Syntax:

```
./lscmctl [-php path/to/php] <command> [parameters]
```

The following commands are available:

| Command | Description |
| --- | --- |
| [setcacheroot](#setcacheroot) | List or set server or virtual host cache root |
| [setversion](#setversion) | List or set active LSCWP version |
| [scan](#scan) | Scan for all WordPress installations |
| [scannew](#scannew) | Scan for WordPress installations not already discovered in a previous scan |
| [enable](#enable) | Enable LSCWP for one or all discovered WordPress installations |
| [disable](#disable) | Disable LSCWP for one or all discovered WordPress installations |
| [upgrade](#upgrade) | Upgrade LSCWP for one or all discovered WordPress installations |
| [flag](#flag) | Flag a single WordPress installation |
| [unflag](#unflag) | Unflag one or all discovered WordPress installations |
| [status](#status) | Get status for a WordPress installation |
| [dashnotify](#dashnotify) | Broadcast a notification on one or all discovered WordPress installations |
| [dashnotifyremove](#dashnotifyremove) | Remove notification and Dash Notifier plugin from one or all discovered WordPress installations |
| [addinstalls](#addinstalls) | Add a WordPress installation to existing scan data |
| [--update-lib](#update-lib) | Update the lscmctl script and the required shared library, if needed |
| [--force-update-lib](#force-update-lib) | Force an update for the lscmctl script and the required shared library |

## setcacheroot[¶](#setcacheroot "Permanent link")

```
./lscmctl setcacheroot [-svr <cache root>] [-vh <cache root>]
```

List or set server or virtual host cache root. This command will list the current server and virtual host cache roots when no additional input is given.

| Flag or Parameter | Description |
| --- | --- |
| `-svr` | Set a cache root at the server level |
| `-vh` | Set a cache root for virtual hosts |
| `<cache root>` | Cache root path to set |

Use `-svr` and `-vh` to set those cache roots. The `$` character is not allowed when setting virtual host cache root. Virtual host cache root values starting with a `/` will automatically have `/$vh_user` appended to the end (this format was chosen to maintain compatibility with CageFS).

Examples

List server and virtual host cache roots:

```
./lscmctl setcacheroot
```

Set virtual host cache root:

```
./lscmctl setcacheroot -vh /path/to/ssd/lscache
```

## setversion[¶](#setversion "Permanent link")

```
./lscmctl setversion [{--list | --latest | <version>}]
```

List or set the active LSCWP version. This command will list the currently active version when no additional input is given.

| Flag or Parameter | Description |
| --- | --- |
| `--list` | Show available versions |
| `--latest` | Switch to latest available version |
| `<version>` | Version number to switch to |

Use `--list` to show available versions or `--latest` to switch to the latest available version. A valid version number can also be provided to switch to that version specifically. This must be set before performing other `lscmctl` operations.

Examples

Display currently active LSCWP version:

```
./lscmctl setversion
```

Display selectable LSCWP versions:

```
./lscmctl setversion --list
```

Set active LSCWP version to latest available:

```
./lscmctl setversion --latest
```

Set active LSCWP version to v7.5:

```
./lscmctl setversion 7.5
```

## scan[¶](#scan "Permanent link")

```
./lscmctl scan [-n] [-e]
```

Scan for all WordPress installations. This command will create an `lscm.data` file under the `lsws/admin/lscdata` directory.

| Flag or Parameter | Description |
| --- | --- |
| `-n` | Discover only new installations |
| `-e` | Enable LSCWP on discovered installations |

Add the `-n` flag to only discover new installations. By adding the `-e` flag, LSCWP will be enabled on all known installations after scanning is complete.

Example

Discover all installations:

```
./lscmctl scan
```

## scannew[¶](#scannew "Permanent link")

```
./lscmctl scannew [-en]
```

Scan for WordPress installations not already discovered in a previous scan. This command will create an `lscm.data` file under the `lsws/admin/lscdata` directory.

| Flag or Parameter | Description |
| --- | --- |
| `-en` | Enable LSCWP for newly discovered installations |

By adding the `-en` flag, LSCWP will be enabled only on newly discovered installations after scanning is complete. If you would rather enable LSCWP for all known installations, after scanning for previously undiscovered installations, please use `scan -n -e` instead, as described [here](#scan).

Example

Discover new installations only, and specify a path for the PHP binary:

```
./lscmctl -php /path/to/php/ scannew
```

## enable[¶](#enable "Permanent link")

```
./lscmctl enable {-m | <wp path>}
```

Enable LSCWP for all discovered WordPress installations or for a single installation.

| Flag or Parameter | Description |
| --- | --- |
| `-m` | Enable LSCWP for all discovered WordPress installations |
| `<wp path>` | Path to a single WordPress installation |

By adding the `-m` flag, LSCWP will be enabled for all discovered WordPress installations. By providing the path to a WordPress installation directory, LSCWP will be enabled for only that installation.

Example

Enable LSCWP on all discovered installations:

```
./lscmctl enable -m
```

## disable[¶](#disable "Permanent link")

```
./lscmctl disable {-m | <wp path>}
```

Disable LSCWP for all discovered WordPress installations or for a single installation.

| Flag or Parameter | Description |
| --- | --- |
| `-m` | Disable LSCWP for all discovered WordPress installations |
| `<wp path>` | Path to a single WordPress installation |

By adding the `-m` flag, LSCWP will be disabled for all discovered WordPress installations. By providing the path to a WordPress installation directory, LSCWP will be disabled for only that installation.

Example

Disable LSCWP for a single installation:

```
./lscmctl disable /home/user/public_html/wp
```

## upgrade[¶](#upgrade "Permanent link")

```
./lscmctl upgrade {-m | <wp path>}
```

Upgrade LSCWP to the current active version for all discovered WordPress installations or for a single installation.

| Flag or Parameter | Description |
| --- | --- |
| `-m` | Upgrade LSCWP for all discovered WordPress installations |
| `<wp path>` | Path to a single WordPress installation |

By adding the `-m` flag, LSCWP will be upgraded for all discovered WordPress installations. By providing the path to a WordPress installation directory, LSCWP will be upgraded for only that installation.

## flag[¶](#flag "Permanent link")

```
./lscmctl flag <wp path>
```

Flag a single WordPress installation. Flagged installations will be skipped during mass operations.

| Flag or Parameter | Description |
| --- | --- |
| `<wp path>` | Path to a single WordPress installation |

## unflag[¶](#unflag "Permanent link")

```
./lscmctl unflag {-m | <wp path>}
```

Unflag all discovered WordPress installations or a single installation. Flagged installations will be skipped during mass operations.

| Flag or Parameter | Description |
| --- | --- |
| `-m` | Unflag all discovered WordPress installations |
| `<wp path>` | Path to a single WordPress installation |

By adding the `-m` flag, all discovered WordPress installations will be unflagged. By providing the path to a WordPress installation directory, only that installation will be unflagged.

## status[¶](#status "Permanent link")

```
./lscmctl status <wp path>
```

Get the most up to date LSCWP status for the provided WordPress installation.

| Flag or Parameter | Description |
| --- | --- |
| `<wp path>` | Path to a single WordPress installation |

Example

Get LSCWP status for a single installation:

```
./lscmctl status /home/user/public_html/wp
```

## dashnotify[¶](#dashnotify "Permanent link")

```
./lscmctl dashnotify {-m | -wppath <wp path>} [-plugin <plugin slug>] {-msgfile <message file path> | -msg <message>}
```

Notify all discovered WordPress installations or a single installation with the provided message using the Dash Notifier WordPress plugin. Installations containing a `.dash_notifier_bypass` file will not be notified.

| Flag or Parameter | Description |
| --- | --- |
| `-m` | Notify all discovered WordPress installations |
| `-wppath` | Notify a single WordPress installation |
| `<wp path>` | Path to a single WordPress installation |
| `-plugin` | Include an install/activate button for a plugin |
| `<plugin slug>` | Slug for a plugin to be installed |
| `-msgfile` | Get the message from a file |
| `<message file path>` | Path to the plain text or HTML message |
| `-msg` | Specify the message inline |
| `<message>` | Message to be sent |

By adding the `-m` flag, all discovered WordPress installations will be notified. By providing the path to a WordPress installation directory, only that installation will be notified. A plugin slug can be included to have an install/activate button for that plugin added to the message as well.

Examples

Send a simple dashboard message to a single discovered WordPress installation:

```
./lscmctl dashnotify -wppath /path/to/wp/install -msg "Hello World!"
```

Broadcast a dashboard message recommending the LiteSpeed Cache for WordPress plugin to all discovered WordPress installations:

```
./lscmctl dashnotify -m -plugin litespeed-cache -msgfile /path/to/msg/file
```

## dashnotifyremove[¶](#dashnotifyremove "Permanent link")

```
./lscmctl dashnotifyremove {-m | <wp path>}
```

Remove Dash Notifier plugin (and notification messages) from all discovered WordPress installations or a single installation.

| Flag or Parameter | Description |
| --- | --- |
| `-m` | Remove from all discovered WordPress installations |
| `<wp path>` | Path to a single WordPress installation |

By adding the `-m` flag, Dash Notifier will be removed from all discovered WordPress installations. By providing the path to a WordPress installation directory, Dash Notifier will be removed from only that installation.

Example

Remove dashboard notifications (and Dash Notifier plugin) from all discovered WordPress installations:

```
./lscmctl dashnotifyremove -m
```

## addinstalls[¶](#addinstalls "Permanent link")

```
./lscmctl addinstalls {-wpinstall <wp path> <docroot> <server name> <site url>} | -wpinstallsfile <installs file path>}
```

Add a WordPress installation to existing scan data. This "custom" data will be stored in its own `lscm.data.cust` data file under the `lsws/admin/lscdata` directory.

| Flag or Parameter | Description |
| --- | --- |
| `-wpinstall` | Add the specified WordPress installation to existing scan data |
| `<wp path>` | Path to a single WordPress installation |
| `<docroot>` | Document root for a single WordPress installation |
| `<server name>` | Server name for a single WordPress installation |
| `<site url>` | URL for a single WordPress installation |
| `-wpinstallsfile` | Add WordPress installations to existing scan data from a file |
| `<installs file path>` | Path to file with WordPress installations information |

A single installation can be added using the `-wpinstall` parameter a space-separated list of installation info in the required order (`<wp path> <docroot> <server name> <site url>`). Multiple installations can be added at once using the `-wpinstallsfile` parameter to provide the path to an installs file containing a newline-separated list of installation info in the expected format.

Examples

Add a single WordPress installation to custom data file:

```
./lscmctl addinstalls -wpinstall /home/user/public_html/wp /home/user/public_html example.com example.com/wp
```

Add multiple WordPress installations to custom data file:

```
./lscmctl addinstalls -wpinstallsfile /path/to/installs/file
```

## --update-lib[¶](#-update-lib "Permanent link")

```
./lscmctl --update-lib
```

Update the `lscmctl` script and the required shared library to their latest versions, only if the currently installed versions are no longer supported. No parameters.

## --force-update-lib[¶](#-force-update-lib "Permanent link")

```
./lscmctl --force-update-lib
```

Force update the `lscmctl` script and the required shared library to their latest versions. This command should not be used in automated scripts or cron jobs. Use the `--update-lib` command instead.

## Scan and enable using a cron job[¶](#scan-and-enable-using-a-cron-job "Permanent link")

If you do not want to continue manually running the CLI script you can set up a cronjob to run the script at fixed intervals instead.

First, as root, open crontab cron jobs with the following command:

```
crontab -e
```

After that, you can add a CLI command in [the usual cronjob format](https://en.wikipedia.org/wiki/Cron#Overview), similar to the following examples.

Examples

At 3:00am, perform a full re-scan and enable LSCWP for all discovered installations:

```
00 03 * * * /usr/local/lsws/admin/misc/lscmctl scan -e
```

At 3:00am, scan only for new installations and enable LSCWP for all known installations:

```
00 03 * * * /usr/local/lsws/admin/misc/lscmctl scan -n -e
```

At 3:00am, scan only for new installations and enable LSCWP only for those newly discovered installations (this is a recommended usage):

```
00 03 * * * /usr/local/lsws/admin/misc/lscmctl scannew -en
```
