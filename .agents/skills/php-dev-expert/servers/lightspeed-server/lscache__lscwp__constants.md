# Constants | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/constants/

---

# LiteSpeed Cache Constants[¶](#litespeed-cache-constants "Permanent link")

LiteSpeed Cache for WordPress provides a number of constants that you can use in `wp-config.php` to override settings, or review values such as plugin version and content folder.

Define a constant value like so:

```
define('CONSTANT_NAME', value);
```

## Configuration Override Constants[¶](#configuration-override-constants "Permanent link")

Constants that begin with `LITESPEED_CONF__` may be used in `wp-config.php` to override configuration settings. Every LiteSpeed Cache setting has a corresponding constant, which is built according to the following rule:

`LITESPEED_CONF__` + setting variable name, converted to all CAPS, and hyphens (`-`) replaced with double underscores `__`.

Examples

The constant for the `media-iframe_lazy_parent_cls_exc` setting is `LITESPEED_CONF__MEDIA__IFRAME_LAZY_PARENT_CLS_EXC`.

The constant for the `cache-exc` setting is `LITESPEED_CONF__CACHE__EXC`.

Before defining any specific `LITESPEED_CONF__` constant, you must define `LITESPEED_CONF`, like so:

```
define('LITESPEED_CONF', true);
```

Some important things to know about `LITESPEED_CONF__` constants: - They are not initialized, and overridden values are not saved in the database. - They should be defined before the plugin loads. - Boolean values should be `true` or `false` (not strings). - String values should be properly quoted.

Example

Configure object cache by setting `object-host`, `object-db_id`, `object-user`, and `object-pswd`:

```
define('LITESPEED_CONF__OBJECT__HOST', 'redis-server.example.com');
define('LITESPEED_CONF__OBJECT__DB_ID', 1);
define('LITESPEED_CONF__OBJECT__USER', 'redis_user');
define('LITESPEED_CONF__OBJECT__PSWD', 'redis_password');
```

## General Constants[¶](#general-constants "Permanent link")

### Core plugin constants[¶](#core-plugin-constants "Permanent link")

The following core plugin constants are initialized by LSCWP, with the shown default values:

- `LITESPEED_DATA_FOLDER`: `litespeed`
- `LITESPEED_STATIC_URL`: wp-content URL + data folder
- `LITESPEED_STATIC_DIR`: wp-content path + data folder
- `LITESPEED_TIME_OFFSET`: WordPress GMT offset in seconds
- `LITESPEED_PLACEHOLDER`: Base64 encoded 1x1 transparent GIF
- `LITESPEED_CLI`: `true` when running CLI

The values of these constants **should never be changed**, as they are set by LiteSpeed and used for specific purposes:

- `LITESPEED_ON`: `true` when plugin is enabled
- `LITESPEED_ALLOWED`: `true` when LiteSpeed server detected
- `LITESPEED_SERVER_TYPE`: `ADC`, `OLS`, `ENT`, or `NONE`
- `LSWCP_ESI_SUPPORT`: Based on server type
- `LSOC_PREFIX`: Object cache key prefix

### Control constants[¶](#control-constants "Permanent link")

These are commonly used control constants:

- `LITESPEED_DISABLE_ALL`: Set to `true` to disable all plugin features
- `LITESPEED_DEV`: Set to `true` to enable development mode

### Direct constants[¶](#direct-constants "Permanent link")

You can set these constants to affect LSCWP behavior, with no `LITESPEED_CONF` required:

#### Image Optimization[¶](#image-optimization "Permanent link")

- `LITESPEED_IMG_OPTM_PULL_CRON`: Disable image optimization cron (set to `false`)
- `LITESPEED_IMG_OPTM_PULL_THREADS`: Number of threads for image optimization

Example

Disable the image optimization pull cron:

```
define('LITESPEED_IMG_OPTM_PULL_CRON', false);
```

#### Crawler[¶](#crawler "Permanent link")

- `LITESPEED_CRAWLER_RUN_INTERVAL`: Crawler run interval in seconds
- `LITESPEED_CRAWLER_DURATION`: Crawler run duration in seconds
- `LITESPEED_CRAWLER_THREADS`: Number of crawler threads
- `LITESPEED_CRAWLER_TIMEOUT`: Crawler timeout in seconds
- `LITESPEED_CRAWLER_MAP_TIMEOUT`: Sitemap parsing timeout in seconds
- `LITESPEED_CRAWLER_DROP_DOMAIN`: Drop domain from sitemap URLs (set to `true`)
- `LITESPEED_CRAWLER_USLEEP`: Delay between crawler requests in microseconds
- `LITESPEED_CRAWLER_IGNORE_NONCACHEABLE`: Ignore non-cacheable pages (set to `true`)
- `LITESPEED_CRAWLER_DISABLE_BLOCKLIST`: Disable crawler blocklist (set to `true`)
- `LITESPEED_CRAWLER_LOCAL_PORT`: Local port for crawler testing

Example

Configure the crawler threads and run interval:

```
define('LITESPEED_CRAWLER_THREADS', 5);
define('LITESPEED_CRAWLER_RUN_INTERVAL', 300);
```

#### .htaccess[¶](#htaccess "Permanent link")

- `LITESPEED_CFG_HTACCESS`: Custom frontend `.htaccess` file path
- `LITESPEED_CFG_HTACCESS_BACKEND`: Custom backend `.htaccess` file path

#### Guest Optimization[¶](#guest-optimization "Permanent link")

`LITESPEED_GUEST_OPTM`: Enable guest optimization (auto-detected) `LITESPEED_GUEST`: Enable guest mode (auto-detected)

#### Optimization controls[¶](#optimization-controls "Permanent link")

- `LITESPEED_FORCE_WP_REMOTE_GET`: Force WordPress remote GET for image optimization
- `LITESPEED_ESI_OFF`: Disable ESI (set by third-party plugins)
- `LITESPEED_NO_PAGEOPTM`: Disable page optimization (set by third-party plugins)
- `LITESPEED_NO_LAZY`: Disable lazy loading (set by third-party plugins)
- `LITESPEED_NO_OPTM`: Disable all optimization (set by third-party plugins)

#### WordPress Path[¶](#wordpress-path "Permanent link")

- `LITESPEED_WP_REALPATH`: Custom WordPress real path

#### Purge Control[¶](#purge-control "Permanent link")

- `LITESPEED_PURGE_SILENT`: Silent purge (suppress success messages)

### Other constants[¶](#other-constants "Permanent link")

These are other available constants that you can use for lookups. These are initialized by LSCWP, though you may change their values if you have a use case that requires it.

- `LSCWP_V`: The current LiteSpeed Cache for WordPress plugin version
- `LSCWP_DIR`: The full absolute path for the LiteSpeed Cache plugin, for example `/var/www/html/USER/wp-content/plugins/litespeed-cache/`
- `LSCWP_BASENAME`: This is always set to `litespeed-cache/litespeed-cache.php`
- `LSCWP_CONTENT_FOLDER`: `wp-content`
- `LSWCP_PLUGIN_URL`: The full URL path for the LiteSpeed Cache plugin folder, for example, `//example.com/wp-content/plugins/litespeed-cache/`
