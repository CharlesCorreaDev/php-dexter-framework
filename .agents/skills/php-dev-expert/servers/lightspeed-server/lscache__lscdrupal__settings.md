# Configuration | LiteSpeed Cache for Drupal | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscdrupal/settings/

---

# Configuration[¶](#configuration "Permanent link")

Configuration is optional. Once the module is activated, your cache is already up and running, but you can customize a few settings on the configuration screen, if you wish.

Visit `http://example.com/admin/config/development/lscache`.

[![!](../images/configure-lscache.png)](https://docs.litespeedtech.com/lscache/lscdrupal/images/configure-lscache.png)

## LSCache of This Site[¶](#lscache-of-this-site "Permanent link")

### Clear this site[¶](#clear-this-site "Permanent link")

It is not necessary to clear the cache under normal everyday usage. Content can be added and edited on your site and LSCache will clear the impacted pages automatically.

If, however, you are upgrading your website, changing the site theme and/or logo, adding a new extension, etc, you will want to clear the whole cache then. Use this button to do so.

This option only clears the current Drupal installation. If you have multiple Drupal installations on the same virtual host, they will not be affected.

### Warm up this site[¶](#warm-up-this-site "Permanent link")

Warms up the public cache of this Drupal installation. If you have multiple Drupal installations on the same virtual host, they will not be affected. If **Private Cache Status** is set to `ON`, private cache will also be warmed up.

## LSCache Settings[¶](#lscache-settings "Permanent link")

The settings in this section refer to public cache.

### Cache Status[¶](#cache-status "Permanent link")

This should be `On` if you want to use LSCache. Turn it `Off` to stop caching your site.

### Public Cache TTL[¶](#public-cache-ttl "Permanent link")

This value determines the number of seconds the pages on your Drupal site can remain in cache before they are considered out-of-date. Default is `64800`, the equivalent of 18 hours.

### Debug[¶](#debug "Permanent link")

If turned `On`, LiteSpeed Cache will emit extra headers for testing while developing or deploying.

## Private Cache for Logged in Users[¶](#private-cache-for-logged-in-users "Permanent link")

LiteSpeed Cache supports ESI, so that you may include blocks of privately cached content on public pages for logged in users.

To learn more about what ESI is and how it works, please see [ESI (Edge Side Includes)](lscache__basics.md#esi-edge-side-includes).

### Private Cache Status[¶](#private-cache-status "Permanent link")

This should be `On` if you want to create privately cached ESI blocks for logged-in users. Turn it `Off` to stop using private cache.

### Private Cache TTL[¶](#private-cache-ttl "Permanent link")

This value determines the number of seconds the privately cached ESI blocks on your Drupal site can remain in cache before they are considered out-of-date. Default is `3600`, the equivalent of 1 hour.

### ESI Blocks Setting[¶](#esi-blocks-setting "Permanent link")

Privately cached ESI blocks are identified by their `div id`s. To treat particular `div`s as ESI blocks, enter them in the text box, one per line.

Example

To make the following `div` an ESI Block, enter it in the **ESI Blocks Setting** as `id=bar-administrator`

```
<div id="bar-administrator">...<div>
```

## Drupal CLI Commands[¶](#drupal-cli-commands "Permanent link")

LiteSpeed CLI commands may be executed from the website host server through Drupal’s `drush` CLI, found in the `/drupal_root/vendor/bin` directory.

LiteSpeed provides the `lscache` command and two subcommands to facilitate cache management.

Syntax:

```
./drush lscache:<subcommand> [parameters]
```

| Subcommand | Description |
| --- | --- |
| `purgeall` | Clear the cache for a specified site |
| `warmup` | Warm up the cache for a specified site |

### purgeall[¶](#purgeall "Permanent link")

```
./drush lscache:purgeall <domain>
```

Clear the cache for a specified site.

| Parameter | Description |
| --- | --- |
| `<domain>` | Domain of the site to purge |

Example

Purge all cache from `example.com`:

```
./drush lscache:purgeall example.com
```

cURL alternative:

```
curl -N "http://example.com/lscpurgeall"
```

### warmup[¶](#warmup "Permanent link")

```
./drush lscache:warmup <domain>
```

Warm up the cache for a specified site.

| Parameter | Description |
| --- | --- |
| `<domain>` | Domain of the site to warm up |

Example

Warm up all cache from `example.com`:

```
./drush lscache:warmup example.com
```

cURL alternative:

```
curl -N "http://example.com/lscwarmup"
```

Note

The CLI `warmup` command can only warm up public page caches. If you want to warm up private cache, you need to use the [**Warm up this site** button](#warm-up-this-site) in the Web GUI's LSCache admin panel.
