# Cache Redis for Users CLI | WHM LiteSpeed plugin | cPanel | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/whm-litespeed-plugin/cli-redis/

---

# Cache Redis for Users CLI[¶](#cache-redis-for-users-cli "Permanent link")

Using a control panel to roll out a large number of Redis installations for LiteSpeed might be too difficult. To address this, we provide a command-line interface (CLI). This can also help when installing on systems where use of a control panel may be problematic.

This is done with the `redis_user_action.sh` program, found in `/usr/local/cpanel/whostmgr/docroot/cgi/lsws/bin/`.

This program must be run as root and can be used to do almost everything that can be done with the Cache Redis interface. If there is an error, it will return a non-zero exit code.

Tip

If you want to set—but not enable—a package for Redis, you must use `lspkgctl` to do so. [See the `lspkgctl` documentation](lsws__cgroups.md#lspkgctl) for syntax and usage.

This program begins with an action as the first parameter. Additional parameters depend on the action specified.

Syntax:

```
./redis_user_action.sh <action> [parameters]
```

The following actions are available:

| Action | Description |
| --- | --- |
| [cleanup](#cleanup) | Stop and delete the service for a user, and delete the configuration |
| [cleanupsvc](#cleanupsvc) | Stop and delete the service for a user, and preserve the configuration |
| [configdel](#configdel) | Remove the Redis configuration file from the Redis user services and restart them |
| [configupd](#configupd) | Add or update the Redis configuration file for the Redis user services and restart them |
| [defaultsizeget](#defaultsizeget) | Display the default Redis configuration size |
| [defaultsizeset](#defaultsizeset) | Create a default Redis configuration size |
| [disableenablecache](#disableenablecache) | Future service enable operations will not have the LiteSpeed Cache for WordPress plugin enabled |
| [disablepkg](#disablepkg) | Delete all of the services for the users in a package |
| [enable](#enable) | Configure and activate the Redis service for one or more users |
| [enablepkg](#enablepkg) | Create and start Redis services for each user referenced in a package |
| [getdefaultenabled](#getdefaultenabled) | Return a `0` return code if a default Redis size is configured |
| [getenablecache](#getenablecache) | Return a `0` return code if `setenablecache` has been specified |
| [getuseredis](#getuseredis) | Return a `0` return code if Redis is enabled, or `1` if Valkey is enabled |
| [getusevalkey](#getusevalkey) | Return a `0` return code if Valkey is enabled, or `1` if Redis is enabled |
| [list](#list) | List running services |
| [list-setup](#list-setup) | List users who have been individually configured |
| [listdefaultusers](#listdefaultusers) | List users who use the default Redis size |
| [setenablecache](#setenablecache) | All future service enable operations will cause cache to be enabled if WordPress and the plugin are installed |
| [setuseredis](#setuseredis) | Set Redis as the default cache program, and unset Valkey |
| [setusevalkey](#setusevalkey) | Set Valkey as the default cache program, and unset Redis |
| [syncpkgfiles](#syncpkgfiles) | Reconcile per-user package files against current package sizing |
| [togglenewuserpkg](#togglenewuserpkg) | Toggle whether newly added package users have Redis enabled automatically |

## cleanup[¶](#cleanup "Permanent link")

```
./redis_user_action.sh cleanup <UID>
```

Stop and delete the service for a user, and delete the configuration.

| Parameter | Description |
| --- | --- |
| `<UID>` | ID of user to stop the service for |

Example

Stop and delete the service and configuration for user `1011`:

```
./redis_user_action.sh cleanup 1011
```

## cleanupsvc[¶](#cleanupsvc "Permanent link")

```
./redis_user_action.sh cleanupsvc <username>
```

Stop and delete the service for a user, and preserve the configuration.

| Parameter | Description |
| --- | --- |
| `<username>` | Name of user to stop the service for |

Example

Stop and delete the service for user `example`:

```
./redis_user_action.sh cleanupsvc example
```

## configdel[¶](#configdel "Permanent link")

```
./redis_user_action.sh configdel
```

Remove the Redis configuration file from the Redis user services and restart them. No parameters.

## configupd[¶](#configupd "Permanent link")

```
./redis_user_action.sh configupd <filename>
```

Add or update the Redis configuration file for the Redis user services and restart them.

| Parameter | Description |
| --- | --- |
| `<filename>` | Fully qualified configuration file name |

Example

Update the configuration file found at `/usr/local/lsws/lsns/conf/redis.conf`:

```
./redis_user_action.sh configupd /usr/local/lsws/lsns/conf/redis.conf
```

## defaultsizeget[¶](#defaultsizeget "Permanent link")

```
./redis_user_action.sh defaultsizeget
```

Display the default Redis configuration size. No parameters.

## defaultsizeset[¶](#defaultsizeset "Permanent link")

```
./redis_user_action.sh defaultsizeset <size>
```

Create a default Redis configuration size.

| Parameter | Description |
| --- | --- |
| `<size>` | Size in MB |

To delete, set `<size>` to `0`.

Example

Set the default Redis configuration size to 10 MB:

```
./redis_user_action.sh defaultsizeset 10
```

## disableenablecache[¶](#disableenablecache "Permanent link")

```
./redis_user_action.sh disableenablecache
```

Future service enable operations will not have the LiteSpeed Cache for WordPress plugin enabled. No parameters.

## disablepkg[¶](#disablepkg "Permanent link")

```
./redis_user_action.sh disablepkg <package>
```

Delete all of the services for the users in a package.

| Parameter | Description |
| --- | --- |
| `<package>` | Package name |

Example

Delete all of the services for the users in the `default` package:

```
./redis_user_action.sh disablepkg default
```

## enable[¶](#enable "Permanent link")

```
./redis_user_action.sh enable <lsws-home> <username> <user-home> <size>
```

Configure and activate the Redis service for one or more users.

| Parameter | Description |
| --- | --- |
| `<lsws-home>` | LiteSpeed Web Server home directory |
| `<username>` | Username to enable the service for |
| `<user-home>` | User's home directory |
| `<size>` | Redis size in MB for this service |

The `<username>`, `<user-home>`, and `<size>` triplet can repeat one or more times.

Example

Activate a 10 MB service for the `example` user, and a 20 MB service for the `example2` user:

```
./redis_user_action.sh enable /usr/local/lsws example /home/example 10 example2 /home/example2 20
```

## enablepkg[¶](#enablepkg "Permanent link")

```
./redis_user_action.sh enablepkg <package>
```

Create and start Redis services for each user referenced in a package.

| Parameter | Description |
| --- | --- |
| `<package>` | Package name |

Tip

You must run [`lspkgctl`](lsws__cgroups.md#lspkgctl) to define the size of the package before enabling it.

Example

Create and start Redis services for each user referenced in the `default` package:

```
./redis_user_action.sh enablepkg default
```

## getdefaultenabled[¶](#getdefaultenabled "Permanent link")

```
./redis_user_action.sh getdefaultenabled
```

Returns `0` if a default Redis size is configured, or `1` if it is not. No parameters.

Example

In a script, perform an action if a default size is set:

```
if ./redis_user_action.sh getdefaultenabled; then
    # do some action
fi
```

## getenablecache[¶](#getenablecache "Permanent link")

```
./redis_user_action.sh getenablecache
```

Returns `0` if Redis cache enabling for the LiteSpeed Cache for WordPress plugin is active, or `1` if it is not. No parameters.

Example

In a script, perform an action if cache enabling is active:

```
if ./redis_user_action.sh getenablecache; then
    # do some action
fi
```

## getuseredis[¶](#getuseredis "Permanent link")

```
./redis_user_action.sh getuseredis
```

Returns `0` if Redis is the default, or `1` if Valkey is the default. No parameters.

Example

In a script, perform an action if Redis is the default:

```
if ./redis_user_action.sh getuseredis; then
    # do some action
fi
```

## getusevalkey[¶](#getusevalkey "Permanent link")

```
./redis_user_action.sh getusevalkey
```

Returns `0` if Valkey is the default, or `1` if Redis is the default. No parameters.

Example

In a script, perform an action if Valkey is the default:

```
if ./redis_user_action.sh getusevalkey; then
    # do some action
fi
```

## list[¶](#list "Permanent link")

```
./redis_user_action.sh list
```

List running services. No parameters.

## list-setup[¶](#list-setup "Permanent link")

```
./redis_user_action.sh list-setup
```

List users who have been individually configured (not by default or package). No parameters.

## listdefaultusers[¶](#listdefaultusers "Permanent link")

```
./redis_user_action.sh listdefaultusers
```

List users who use the default Redis size, meaning users who have neither an individual size nor a package size set. No parameters.

## setenablecache[¶](#setenablecache "Permanent link")

```
./redis_user_action.sh setenablecache
```

All future service enable operations will attempt to find WordPress and the LiteSpeed Cache plugin. If both are found, the plugin will be configured to use the service, removing the need for manual configuration. Note that this operation is limited to the time when the service is enabled. If you want to configure services that were left unconfigured, use the `./validate_redis.sh` program. No parameters.

## setuseredis[¶](#setuseredis "Permanent link")

```
./redis_user_action.sh setuseredis
```

Set Redis as the default cache program, and unset Valkey as the default program. No parameters.

## setusevalkey[¶](#setusevalkey "Permanent link")

```
./redis_user_action.sh setusevalkey
```

Set Valkey as the default cache program, and unset Redis as the default program. No parameters.

## syncpkgfiles[¶](#syncpkgfiles "Permanent link")

```
./redis_user_action.sh syncpkgfiles
```

Reconcile the per-user package files against the current package sizing. For every user in a package that has a size set, the package file is written or refreshed; for every user in a package whose size has been cleared, any stale package file is removed. The Redis service consults this file to look up the package default size when it starts. No parameters.

## togglenewuserpkg[¶](#togglenewuserpkg "Permanent link")

```
./redis_user_action.sh togglenewuserpkg
```

Toggle whether newly added package users have Redis enabled automatically. Each run flips the setting and echoes the resulting state: `New users will have Redis enabled` or `New users will no longer have Redis enabled`. No parameters.
