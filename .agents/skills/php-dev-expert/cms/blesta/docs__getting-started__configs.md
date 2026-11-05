# Config Changes | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/getting-started/configs

---

Version: 6

On this page

Sometimes it's necessary to adjust the config files.

The primary configuration file is located at:

```
~/config/blesta.php
```

Thhis config file ncludes database details as well as options that you may wish to change. Below is a common list of options that you may wish to change.

### Blesta.sticky\_notes\_to\_show[â](#blestasticky_notes_to_show "Direct link to Blesta.sticky_notes_to_show")

```
// Number of sticky notes to show before viewing more  
Configure::set('Blesta.sticky_notes_to_show', 2);
```

Determines the number of sticky notes to display at the top of a client profile page before you have to click to show more.

### Blesta.cron\_log\_retention\_days[â](#blestacron_log_retention_days "Direct link to Blesta.cron_log_retention_days")

```
// Number of days in the past to retain cron logs  
Configure::set('Blesta.cron_log_retention_days', 10);
```

Determines the number of days that the cron log should be kept for. Reducing this will result in a smaller database, but less retention.

### Blesta.auto\_delete\_\*\_logs[â](#blestaauto_delete__logs "Direct link to Blesta.auto_delete_*_logs")

```
// Whether or not to delete account access logs according to the cron log retention policy  
Configure::set('Blesta.auto_delete_accountaccess_logs', false);  
// Whether or not to delete client setting logs according to the cron log retention policy  
Configure::set('Blesta.auto_delete_client_setting_logs', false);  
// Whether or not to delete contact logs according to the cron log retention policy  
Configure::set('Blesta.auto_delete_contact_logs', false);  
// Whether or not to delete email logs according to the cron log retention policy  
Configure::set('Blesta.auto_delete_email_logs', false);  
// Whether or not to delete gateway logs according to the cron log retention policy  
Configure::set('Blesta.auto_delete_gateway_logs', true);  
// Whether or not to delete module logs according to the cron log retention policy  
Configure::set('Blesta.auto_delete_module_logs', true);  
// Whether or not to delete service logs according to the cron log retention policy  
Configure::set('Blesta.auto_delete_service_logs', false);  
// Whether or not to delete transaction logs according to the cron log retention policy  
Configure::set('Blesta.auto_delete_transaction_logs', false);  
// Whether or not to delete user logs according to the cron log retention policy  
Configure::set('Blesta.auto_delete_user_logs', false);
```

Determines what kind of logs to automatically delete.Â  Setting any of these to true will cause old logs of the chosen type to be automatically deletedÂ according to the cron log retention policy.

### Blesta.reset\_password\_ttl[â](#blestareset_password_ttl "Direct link to Blesta.reset_password_ttl")

```
// Length of time that a reset password request will be valid for  
Configure::set('Blesta.reset_password_ttl', '4 hours');
```

Determines the length of time that a password reset email link will be valid for. The link will expire after this time and must be re-requested.

### Blesta.default\_password\_reset\_value[â](#blestadefault_password_reset_value "Direct link to Blesta.default_password_reset_value")

```
// Default password reset value. Set to true for improved security, false for more accurate error reporting  
Configure::set('Blesta.default_password_reset_value', true);
```

When users reset their password, the following message is returned regardless if there was a match on the username: **A confirmation email has been sent to the address on record.**

Changing the value of the above setting fromÂ true toÂ false will result in a different message when there is no match on the username: **That username is not recognized or the password is not capable of being reset.**

### Blesta.step\_up\_authentication[â](#blestastep_up_authentication "Direct link to Blesta.step_up_authentication")

When accessing settings a step up authentication is required by default, but this can be disabled by setting the value to false in `~/config/blesta.php`

```
// Enable step-up authentication for admin actions  
Configure::set('Blesta.step_up_authentication', true);
```

#### Step-up session controls (Blesta 6.0+)[â](#step-up-session-controls-blesta-60 "Direct link to Step-up session controls (Blesta 6.0+)")

While a step-up session is active, the admin icon bar shows a "Step Up Authentication Active" menu with:

- A live **Time Remaining** countdown for the elevated session.
- An **Extend Session** button to reset the timer without re-authenticating.
- An **End Session Now** button to immediately drop back to the unelevated state.

This replaces the prior behavior in 5.x where staff had to wait for the session to expire or re-authenticate from scratch.

### Blesta.redis (Blesta 6.0+)[â](#blestaredis-blesta-60 "Direct link to Blesta.redis (Blesta 6.0+)")

Redis or Valkey

[Valkey](https://valkey.io) is the open-source, drop-in-compatible fork of Redis created after Redis changed its license in 2024, and newer distributions ship it in place of Redis â AlmaLinux 10 provides Valkey, while AlmaLinux 8 and 9 still provide Redis. Everything in this section applies equally to both; just substitute `valkey.conf`, `valkey-cli`, and the `valkey` service name where their Redis equivalents are shown. The config key is named `Blesta.redis` either way.

Optional Redis- or Valkey-backed cache layer for cross-request caching of expensive queries. When enabled, frequent settings lookups are served from Redis in **under 1 ms** instead of the 15â45 ms typical of a database round-trip. If Redis is unreachable at request time, Blesta **silently falls back** to its existing cache behavior â Redis is purely an acceleration layer and is not required for correctness.

This setting is **optional** and is most useful for dedicated, performance-sensitive environments. Small or shared-hosting installs typically will not see a benefit large enough to justify running Redis.

#### Where it lives[â](#where-it-lives "Direct link to Where it lives")

- **Fresh installs of 6.0+:** the Redis block ships in `~/config/blesta.php` (commented out). Uncomment and configure to enable.
- **Upgrades from 5.x:** the Redis block lands in `~/config/blesta-new.php` (also commented out) so the upgrade does not overwrite your existing `blesta.php`. Copy the block into your `blesta.php` and configure to enable.

#### Configuration[â](#configuration "Direct link to Configuration")

Do not expose Redis to the Internet

Redis has no authentication by default and was not designed to be exposed publicly. **Bind Redis to `127.0.0.1`** (the loopback interface) in your `redis.conf` (`valkey.conf` for Valkey) so it only accepts connections from the same host as Blesta. If Redis must run on a different host, restrict access at the **firewall** to only the Blesta web servers, and set a strong password via Redis' `requirepass` directive (then provide it in the `password` key below). A publicly accessible Redis instance is a well-known target for ransomware and cryptominers.

After installing and verifying Redis is running, uncomment and configure the block in `~/config/blesta.php`:

```
////////////////////////////////////////////////////////////////////////////////  
// Redis Cache (optional)  
////////////////////////////////////////////////////////////////////////////////  
// Uncomment and configure to enable Redis as a cross-request cache layer.  
// When enabled, expensive settings queries are cached in Redis and served  
// in <1ms instead of 15-45ms. Falls back silently if unavailable.  
Configure::set('Blesta.redis', [  
    'host' => '127.0.0.1',  
    'port' => 6379,  
    'password' => null,  
    'database' => 0,  
    'prefix' => 'blesta:',  
    'timeout' => 2.0,       // connection timeout in seconds  
    'read_timeout' => 2.0,  // read timeout in seconds  
]);
```

| Key | Description |
| --- | --- |
| `host` | Redis server hostname or IP. Use `127.0.0.1` for a local install. |
| `port` | Redis TCP port. Default is `6379`. |
| `password` | Redis password (set if `requirepass` is configured in `redis.conf` / `valkey.conf`), or `null` for no auth. |
| `database` | Redis logical database number (0â15 by default). Use a dedicated DB number if you share the Redis instance with other applications. |
| `prefix` | Key prefix applied to every cache entry. Lets multiple Blesta installs share a Redis instance without colliding. |
| `timeout` | Connection timeout in seconds. Falling back is preferable to long stalls, so keep this small. |
| `read_timeout` | Read timeout in seconds. Same rationale. |

Verifying it's working

After uncommenting the block and reloading a few admin pages, check the Redis server with `redis-cli MONITOR` (or `valkey-cli MONITOR` for Valkey) â you should see `GET` and `SETEX` commands prefixed with whatever you set in `prefix`. If you see nothing, Blesta has fallen back to local cache; check the PHP error log for the reason (typically connection refused, auth failure, or the `phpredis`/`predis` client extension not being available).
