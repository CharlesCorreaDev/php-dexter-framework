# API | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/api/

---

# LSCache for WordPress API[¶](#lscache-for-wordpress-api "Permanent link")

Any WordPress plugin that populates front-end content that can be publicly cached should work with LSCache. If your plugin needs to purge or vary cached pages, or opt your plugin’s content out of caching, use the hooks below rather than calling LSCWP classes directly. The hook layer works whether or not LSCWP is active, so you do not need to gate your code with `class_exists()` checks.

Most hooks are registered in [`src/api.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/api.cls.php) under `init()`. A few hooks, as noted in their entries, are defined in the classes they belong to.

## Background[¶](#background "Permanent link")

### How LSCache tags pages[¶](#how-lscache-tags-pages "Permanent link")

LSCache tags every cacheable response before storing it. In the simplest case, a post’s page is tagged with its post ID, and a later `edit_post`, `save_post`, `deleted_post`, `trashed_post`, or `delete_attachment` event tells the server to purge everything tagged with that ID.

If your plugin has other events that should invalidate a page, you can:

- Add tags to pages as they render with `litespeed_tag_add` or `litespeed_tag_add_post`.
- Purge pages by those tags later with `litespeed_purge`.

Because a page can carry many tags and a tag can span many pages, the same tag system lets you purge one item, a group, or everything at once.

Example

A forum plugin stores the same post on several axes. It tags page 1 with `MTPP_F.1`, `MTPP_G.4`, and `MTPP_S.wyoming`, and it tags page 2 with `MTPP_F.1`, `MTPP_G.2`, and `MTPP_S.iowa`. Purging `MTPP_F.1` clears both pages; purging `MTPP_S.wyoming` clears only page 1.

### What counts as non-cacheable[¶](#what-counts-as-non-cacheable "Permanent link")

LSCWP does not cache a response if it is an admin page, a POST request, `is_trackback()`, `is_search()`, has no active theme, or has a URI, query string, category, tag, cookie, user agent, or role on one of the **Do Not Cache** lists. If your plugin produces private or transient output in situations LSCWP does not know about, mark the response with `litespeed_control_set_nocache` or `litespeed_control_set_private`.

## Hook reference[¶](#hook-reference "Permanent link")

| Category | Description |
| --- | --- |
| [Init](#init) | LSCWP initialization lifecycle. |
| [Config](#config) | Read, override, and save LSCWP configuration. |
| [Cache control](#cache-control) | Determine cacheability, cache visibility, TTL, and vary-cookie behavior. |
| [Tag](#tag) | Add cache tags to pages and ESI blocks. |
| [Purge](#purge) | Initiate purges and modify pending purge tags. |
| [Purge events](#purge-events) | Actions that fire after LSCWP completes a purge. |
| [ESI](#esi) | Register, render, and configure Edge Side Includes blocks. |
| [Vary](#vary) | Manage cache varies and vary cookies. |
| [Cloud](#cloud) | QUIC.cloud CDN integration. |
| [Optimize](#optimize) | Control page optimization, including CSS, JavaScript, CCSS, UCSS, and VPI. |
| [Media](#media) | Affect image and media processing. |
| [GUI](#gui) | Render LSCWP admin-bar shortcuts and HTML wrappers. |
| [Debug](#debug) | Write LSCWP debug logs and disable features. |
| [Buffer](#buffer) | Modify page HTML before or after LSCWP transformations. |
| [Deprecated and removed hooks](#deprecated-and-removed-hooks) | Hooks that are no longer fired or supported. |

## Init[¶](#init "Permanent link")

Lifecycle hooks fire as LSCWP boots. They are registered in [`src/api.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/api.cls.php) and fired from [`src/core.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/core.cls.php).

| Hook | Type | Purpose |
| --- | --- | --- |
| [`litespeed_init`](#litespeed_init) | Action | Runs once LSCWP has finished its own `init`; safe hook-in point for other plugins. |
| [`litespeed_initing`](#litespeed_initing) | Action | Runs earlier, while LSCWP is still initializing. |
| [`litespeed_after_admin_init`](#litespeed_after_admin_init) | Action | Runs after the admin-side `init` pass. |
| [`litespeed_load_thirdparty`](#litespeed_load_thirdparty) | Action | Fires when LSCWP loads its bundled third-party integrations. |

### `litespeed_init`[¶](#litespeed_init "Permanent link")

```
do_action( 'litespeed_init' );
```

This hook has no parameters.

Fires once LSCWP has completed initialization. Use this instead of WordPress’s `init` when your code needs the LSCWP API to be ready.

Example

```
add_action( 'litespeed_init', function () {
    // LSCWP is ready. It is safe to call litespeed_* hooks here.
} );
```

### `litespeed_initing`[¶](#litespeed_initing "Permanent link")

```
do_action( 'litespeed_initing' );
```

This hook has no parameters.

Fires while LSCWP is still initializing. Prefer `litespeed_init` unless you specifically need to run before the rest of LSCWP is available.

### `litespeed_after_admin_init`[¶](#litespeed_after_admin_init "Permanent link")

```
do_action( 'litespeed_after_admin_init' );
```

This hook has no parameters.

Fires after LSCWP has finished its admin-side `init` pass. Use it to add admin-only integrations that depend on LSCWP admin classes.

### `litespeed_load_thirdparty`[¶](#litespeed_load_thirdparty "Permanent link")

```
do_action( 'litespeed_load_thirdparty' );
```

This hook has no parameters.

Fires when LSCWP loads the integrations under `thirdparty/`. Hook here if you are shipping your own third-party integration file and want it loaded alongside the bundled integrations.

## Config[¶](#config "Permanent link")

Read, override, and persist LSCWP settings, and filter the `.htaccess` file that LSCWP writes to `wp-content/litespeed/`. See [`src/conf.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/conf.cls.php) and [`src/file.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/file.cls.php). Setting slugs are defined in [`src/base.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/base.cls.php).

| Hook | Type | Purpose |
| --- | --- | --- |
| [`litespeed_conf`](#litespeed_conf) | Filter | Read a setting by slug. |
| [`litespeed_save_conf`](#litespeed_save_conf) | Action | Save settings and regenerate rewrite rules. |
| [`litespeed_conf_multi_switch`](#litespeed_conf_multi_switch) | Action | Registers a config option as a multi-state switch instead of an on/off toggle. |
| [`litespeed_conf_append`](#litespeed_conf_append) | Action | Add a new option to the configuration store. |
| [`litespeed_conf_force`](#litespeed_conf_force) | Action | Override an option in memory for the rest of the request. |
| [`litespeed_update_confs`](#litespeed_update_confs) | Action | Persist a batch of setting changes. |
| [`litespeed_conf_load_option_{$option}`](#litespeed_conf_load_option_option) | Filter | Rewrite one option value as it loads. |
| [`litespeed_static_dir_htaccess`](#litespeed_static_dir_htaccess) | Filter | Rewrite the `.htaccess` file LSCWP generates in its static directory. |

### `litespeed_conf`[¶](#litespeed_conf "Permanent link")

```
apply_filters( 'litespeed_conf', string $slug );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$slug` | string | Required | Setting slug. |
| Return | mixed | — | Current setting value. |

Reads a single LSCWP setting. Pass the setting slug to retrieve the current value. Setting slugs are defined in [`src/base.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/base.cls.php), and defaults are in [`data/const.default.ini`](https://github.com/litespeedtech/lscache_wp/blob/master/data/const.default.ini).

Example

```
if ( apply_filters( 'litespeed_conf', 'cache-priv' ) ) {
    // Private cache is enabled.
}
```

### `litespeed_save_conf`[¶](#litespeed_save_conf "Permanent link")

```
do_action( 'litespeed_save_conf', array|false $the_matrix = false );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$the_matrix` | array|false | Optional | Settings to save. Defaults to `false`. |

Saves the supplied settings and regenerates the `.htaccess` rewrite rules. The array is optional; call the hook without arguments to regenerate rules from current settings.

### `litespeed_conf_multi_switch`[¶](#litespeed_conf_multi_switch "Permanent link")

```
do_action( 'litespeed_conf_multi_switch', string $option_id, int $states );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$option_id` | string | Required | The option constant to register (e.g. `Base::O_UPDATE_INTERVAL`). |
| `$states` | int | Required | Number of valid states the switch accepts. |

Registers a config option as a **multi-state switch** — an integer with N possible values — instead of a plain on/off toggle. Must be fired before `litespeed_conf_append` for the same option, or the option will be treated as a boolean. Added in v3.0. Fired in [`src/conf.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/conf.cls.php); handled by `Base::set_multi_switch()` in [`src/base.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/base.cls.php).

Example

```
// Register a 3-state switch, then append it as a config option.
do_action( 'litespeed_conf_multi_switch', 'my_plugin_mode', 3 );
do_action( 'litespeed_conf_append', 'my_plugin_mode', 0 );
```

### `litespeed_conf_append`[¶](#litespeed_conf_append "Permanent link")

```
do_action( 'litespeed_conf_append', string $key, mixed $default_value );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$key` | string | Required | Option key. |
| `$default_value` | mixed | Required | Initial option value. |

Registers a new option in the configuration store with an initial value. Use this once, during setup, for options that your integration owns.

### `litespeed_conf_force`[¶](#litespeed_conf_force "Permanent link")

```
do_action( 'litespeed_conf_force', string $key, mixed $value );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$key` | string | Required | Setting slug to override. |
| `$value` | mixed | Required | Replacement value for the current request. |

Overrides a setting **in memory only** for the remainder of the current request. Nothing is persisted, and reads that have already occurred are not retroactively changed.

Note

Only reads that occur *after* this action see the new value.

### `litespeed_update_confs`[¶](#litespeed_update_confs "Permanent link")

```
do_action( 'litespeed_update_confs', array $update_confs );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$update_confs` | array | Required | Map of setting slugs to values. |

Persists an array of `slug => value` setting changes at once. Use this action for bulk updates rather than looping over `litespeed_save_conf`.

### `litespeed_conf_load_option_{$option}`[¶](#litespeed_conf_load_option_option "Permanent link")

```
apply_filters( "litespeed_conf_load_option_{$option}", mixed $value );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$value` | mixed | Required | Value loaded for the named setting. |
| Return | mixed | — | Modified setting value. |

Runs when the named option loads, allowing you to rewrite its value. Replace `{$option}` with a setting slug.

Example

Force ESI off site-wide:

```
add_filter( 'litespeed_conf_load_option_esi', '__return_false' );
```

### `litespeed_static_dir_htaccess`[¶](#litespeed_static_dir_htaccess "Permanent link")

*Defined in [`src/file.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/file.cls.php).*

```
apply_filters( 'litespeed_static_dir_htaccess', string $htaccess );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$htaccess` | string | Required | Generated static-directory `.htaccess` contents. |
| Return | string | — | Modified file contents. |

Filters the contents LSCWP writes to `wp-content/litespeed/.htaccess`. LSCWP rewrites this file whenever it differs byte-for-byte from the built-in template, so manual edits are reverted. Use this filter to make a persistent change.

The default block contains an `Options -Indexes` directive and a `RewriteRule .* - [F,L]` deny rule. Some shared hosts forbid `Options` in `.htaccess` and return HTTP 500 for the whole directory when they encounter it, blocking combined CSS and JavaScript files from loading. Use this filter to remove those lines or replace the entire file.

Remove the `Options -Indexes` line

```
add_filter( 'litespeed_static_dir_htaccess', function ( $htaccess ) {
    return preg_replace( '/^\s*Options\s+-Indexes\s*\R?/mi', '', $htaccess );
} );
```

## Cache control[¶](#cache-control "Permanent link")

Use these hooks to decide whether the current response is cacheable, whether it is public or private, and how long it lives. See [`src/control.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/control.cls.php).

| Hook | Type | Purpose |
| --- | --- | --- |
| [`litespeed_control_finalize`](#litespeed_control_finalize) | Action | End-of-request hook for late cache-control decisions. |
| [`litespeed_control_set_private`](#litespeed_control_set_private) | Action | Mark the response as private. |
| [`litespeed_control_set_nocache`](#litespeed_control_set_nocache) | Action | Mark the response as non-cacheable. |
| [`litespeed_control_set_cacheable`](#litespeed_control_set_cacheable) | Action | Mark the response as cacheable. |
| [`litespeed_control_force_cacheable`](#litespeed_control_force_cacheable) | Action | Cache the response even if normal rules would say no. |
| [`litespeed_control_force_public`](#litespeed_control_force_public) | Action | Cache as public even if normal rules would choose private. |
| [`litespeed_control_cacheable`](#litespeed_control_cacheable) | Filter (read-only) | Query the current cacheable status. |
| [`litespeed_control_set_ttl`](#litespeed_control_set_ttl) | Action | Set the TTL for this response or ESI block. |
| [`litespeed_control_ttl`](#litespeed_control_ttl) | Filter | Read the current TTL. |
| [`litespeed_can_change_vary`](#litespeed_can_change_vary) | Filter | Determine whether the vary cookie can still change. |

### `litespeed_control_finalize`[¶](#litespeed_control_finalize "Permanent link")

```
do_action( 'litespeed_control_finalize', string|false $esi_id );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$esi_id` | string|false | Required | Current ESI block ID, or `false` for a full-page request. |

Fires at the end of every cacheable request, immediately before headers are sent. Hook here to make cache-control decisions that depend on the fully rendered page. For example, mark the page non-cacheable because a warning rendered mid-page.

This action does not fire for admin pages or responses that are already known to be non-cacheable.

### `litespeed_control_set_private`[¶](#litespeed_control_set_private "Permanent link")

```
do_action( 'litespeed_control_set_private', string|false $reason = false );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$reason` | string|false | Optional | Debug-log reason. Defaults to `false`. |

Marks the current response as private cache content for one user rather than public cache content.

### `litespeed_control_set_nocache`[¶](#litespeed_control_set_nocache "Permanent link")

```
do_action( 'litespeed_control_set_nocache', string|false $reason = false );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$reason` | string|false | Optional | Debug-log reason. Defaults to `false`. |

Marks the current response as non-cacheable. The string argument is recorded in the debug log.

### `litespeed_control_set_cacheable`[¶](#litespeed_control_set_cacheable "Permanent link")

```
do_action( 'litespeed_control_set_cacheable', string|false $reason = false );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$reason` | string|false | Optional | Debug-log reason. Defaults to `false`. |

Marks the response as cacheable. This is primarily useful for scripted or REST-style endpoints where the standard `wp` action does not run and LSCWP cannot decide on its own.

### `litespeed_control_force_cacheable`[¶](#litespeed_control_force_cacheable "Permanent link")

```
do_action( 'litespeed_control_force_cacheable', string|false $reason = false );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$reason` | string|false | Optional | Debug-log reason. Defaults to `false`. |

Behaves like `litespeed_control_set_cacheable`, but overrides most non-cacheable conditions that LSCWP would otherwise apply. Use sparingly because this action tells LSCWP to ignore its safety checks.

### `litespeed_control_force_public`[¶](#litespeed_control_force_public "Permanent link")

```
do_action( 'litespeed_control_force_public', string|false $reason = false );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$reason` | string|false | Optional | Debug-log reason. Defaults to `false`. |

Forces the response into public cache even when normal rules would otherwise send it to private cache.

### `litespeed_control_cacheable`[¶](#litespeed_control_cacheable "Permanent link")

```
apply_filters( 'litespeed_control_cacheable', bool $cacheable );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$cacheable` | bool | Required | Current cacheable state. |
| Return | bool | — | Current cacheable state. This filter is read-only. |

Reads the current cacheable status. **Read-only**: adding a filter that changes the return value does nothing. To change cacheability, use a `litespeed_control_set_*` or `litespeed_control_force_*` action.

### `litespeed_control_set_ttl`[¶](#litespeed_control_set_ttl "Permanent link")

```
do_action( 'litespeed_control_set_ttl', int|string $ttl, string|false $reason = false );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$ttl` | int|string | Required | TTL in seconds. |
| `$reason` | string|false | Optional | Debug-log reason. Defaults to `false`. |

Sets the TTL, in seconds, for the current cache entry or ESI block.

### `litespeed_control_ttl`[¶](#litespeed_control_ttl "Permanent link")

```
apply_filters( 'litespeed_control_ttl', int $ttl );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$ttl` | int | Required | Current TTL in seconds. |
| Return | int | — | TTL to use for the response. |

Reads the TTL that LSCWP plans to use for the current response.

### `litespeed_can_change_vary`[¶](#litespeed_can_change_vary "Permanent link")

*Defined in [`src/vary.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/vary.cls.php).*

```
apply_filters( 'litespeed_can_change_vary', bool $can_change );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$can_change` | bool | Required | Whether the vary cookie may change. |
| Return | bool | — | Whether to allow the change. |

Returns `true` if the vary cookie can still change for the current request. LSCWP does not change the vary cookie during unsupported request methods, crawler requests, or when other conditions prevent a change. Filter here to impose an additional constraint.

## Tag[¶](#tag "Permanent link")

Attach cache tags to the current response so you can later purge groups of pages together. See [`src/tag.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/tag.cls.php).

| Hook | Type | Purpose |
| --- | --- | --- |
| [`litespeed_tag_finalize`](#litespeed_tag_finalize) | Action | End-of-request hook to add tags. |
| [`litespeed_tag_add`](#litespeed_tag_add) | Action | Add a tag to the current page. |
| [`litespeed_tag_add_post`](#litespeed_tag_add_post) | Action | Add a post-scoped tag. |
| [`litespeed_tag_add_widget`](#litespeed_tag_add_widget) | Action | Add a widget-scoped tag. |
| [`litespeed_tag_add_private`](#litespeed_tag_add_private) | Action | Add a private cache tag. |
| [`litespeed_tag_add_private_esi`](#litespeed_tag_add_private_esi) | Action | Add a private ESI cache tag. |

### `litespeed_tag_finalize`[¶](#litespeed_tag_finalize "Permanent link")

```
do_action( 'litespeed_tag_finalize' );
```

This hook has no parameters.

Fires at the end of every cacheable request. Hook here if you need to add tags based on what the request produced, such as queried objects or taxonomy terms, rather than information known before rendering.

### `litespeed_tag_add`[¶](#litespeed_tag_add "Permanent link")

```
do_action( 'litespeed_tag_add', string|array $tags );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$tags` | string|array | Required | One cache tag or an array of cache tags. |

Adds one or more tags to the current page’s tag list in addition to the built-in tags that LSCWP generates. You can later purge every page that carries the tag with `litespeed_purge`.

### `litespeed_tag_add_post`[¶](#litespeed_tag_add_post "Permanent link")

```
do_action( 'litespeed_tag_add_post', int|string $post_id );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$post_id` | int|string | Required | Post ID to add as a post-scoped tag. |

Adds a tag scoped to a post ID. Use this inside a loop, or after a conditional, to tag posts that share a property your plugin needs to track.

### `litespeed_tag_add_widget`[¶](#litespeed_tag_add_widget "Permanent link")

```
do_action( 'litespeed_tag_add_widget', string|int $widget_id );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$widget_id` | string|int | Required | Widget ID to add as a widget-scoped tag. |

Adds a tag scoped to a widget so that the widget’s cached output can be purged independently.

### `litespeed_tag_add_private`[¶](#litespeed_tag_add_private "Permanent link")

```
do_action( 'litespeed_tag_add_private', string|array $tags );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$tags` | string|array | Required | One private cache tag or an array of private cache tags. |

Adds one or more tags to the private cache tag list for the current page. Purge these tags later with `litespeed_purge_private`.

### `litespeed_tag_add_private_esi`[¶](#litespeed_tag_add_private_esi "Permanent link")

```
do_action( 'litespeed_tag_add_private_esi', string $tag );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$tag` | string | Required | ESI tag name. |

Adds a tag to the private ESI tag list. Use it for ESI blocks that have per-user content.

## Purge[¶](#purge "Permanent link")

Trigger cache purges, redefine which WordPress events cause a post purge, or modify the list of tags that a purge is about to send. See [`src/purge.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/purge.cls.php).

| Hook | Type | Purpose |
| --- | --- | --- |
| [`litespeed_purge_post_events`](#litespeed_purge_post_events) | Filter | Replace the list of post events that automatically purge. |
| [`litespeed_purge_finalize`](#litespeed_purge_finalize) | Action | End-of-request hook to add purge tags. |
| [`litespeed_purge`](#litespeed_purge) | Action | Purge one or more tags. |
| [`litespeed_purge_tags`](#litespeed_purge_tags) | Filter | Modify the outgoing purge tag list. |
| [`litespeed_purge_all`](#litespeed_purge_all) | Action | Purge all caches managed by LSCWP. |
| [`litespeed_purge_post`](#litespeed_purge_post) | Action | Purge one post by ID. |
| [`litespeed_purge_posttype`](#litespeed_purge_posttype) | Action | Purge every page of one post type. |
| [`litespeed_purge_url`](#litespeed_purge_url) | Action | Purge one URL. |
| [`litespeed_purge_widget`](#litespeed_purge_widget) | Action | Purge a widget’s cached output. |
| [`litespeed_purge_esi`](#litespeed_purge_esi) | Action | Purge a public ESI block. |
| [`litespeed_purge_private`](#litespeed_purge_private) | Action | Purge a private cache tag. |
| [`litespeed_purge_private_esi`](#litespeed_purge_private_esi) | Action | Purge a private ESI block. |
| [`litespeed_purge_private_all`](#litespeed_purge_private_all) | Action | Purge all private cache entries. |
| [`litespeed_purge_all_object`](#litespeed_purge_all_object) | Action | Purge the object cache. |
| [`litespeed_api_purge_post`](#litespeed_api_purge_post) | Action | Fires before a post's purge tags are collected, so third parties can add related tags. |

### `litespeed_purge_post_events`[¶](#litespeed_purge_post_events "Permanent link")

```
apply_filters( 'litespeed_purge_post_events', array $events );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$events` | array | Required | WordPress event names that trigger a post purge. |
| Return | array | — | Replacement list of event names. |

Replaces LSCWP’s built-in list of WordPress events that trigger an automatic post purge. Return an array of hook names.

Example

Purge only on `delete_post` and `wp_trash_post`:

```
add_filter( 'litespeed_purge_post_events', function () {
    return array( 'delete_post', 'wp_trash_post' );
} );
```

### `litespeed_purge_finalize`[¶](#litespeed_purge_finalize "Permanent link")

```
do_action( 'litespeed_purge_finalize' );
```

This hook has no parameters.

Fires at the end of the request, analogous to `litespeed_tag_finalize`, but for purge tags. Use it when the decision to purge depends on what the request produced.

### `litespeed_purge`[¶](#litespeed_purge "Permanent link")

```
do_action( 'litespeed_purge', string|array $tags, bool $purge2 = false );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$tags` | string|array | Required | One public cache tag or an array of public cache tags to purge. |
| `$purge2` | bool | Optional | Whether to send the purge through `X-LiteSpeed-Purge2`. Defaults to `false`. |

Purges every cached page carrying the specified tag or tags.

### `litespeed_purge_tags`[¶](#litespeed_purge_tags "Permanent link")

```
apply_filters( 'litespeed_purge_tags', array $purge_tags, bool $is_private );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$purge_tags` | array | Required | Pending purge tags. |
| `$is_private` | bool | Required | Whether the purge targets private cache. |
| Return | array | — | Modified purge-tag list. |

Runs immediately before purge tags are sent to the server, allowing you to add, remove, or replace them. `$is_private` is `true` when the pending purge targets private cache.

Returning `array( '_nothing' )` is the standard method for canceling a purge.

Suppress automated purges but allow manual purges

```
add_filter( 'litespeed_purge_tags', function ( $purge_tags, $is_private ) {
    if ( isset( $_SERVER['REQUEST_URI'] ) && strpos( $_SERVER['REQUEST_URI'], 'LSCWP_CTRL=purge' ) !== false ) {
        do_action( 'litespeed_debug2', 'Preserve manual purge action' );
        return $purge_tags;
    }

    return array( '_nothing' );
}, 10, 2 );
```

### `litespeed_purge_all`[¶](#litespeed_purge_all "Permanent link")

```
do_action( 'litespeed_purge_all', string|false $reason = false );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$reason` | string|false | Optional | Debug-log reason. Defaults to `false`. |

Purges all caches managed by LSCWP for the current site, including LSCache, CSS, JavaScript, local resources, object cache, and OPcache.

### `litespeed_purge_post`[¶](#litespeed_purge_post "Permanent link")

```
do_action( 'litespeed_purge_post', int $post_id );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$post_id` | int | Required | Post ID to purge. |

Purges everything tagged with the specified post ID, including the post’s own page and any archives that LSCWP tagged with the ID.

### `litespeed_purge_posttype`[¶](#litespeed_purge_posttype "Permanent link")

```
do_action( 'litespeed_purge_posttype', string $post_type );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$post_type` | string | Required | Post type to purge. |

Purges every cached page for the specified post type.

### `litespeed_purge_url`[¶](#litespeed_purge_url "Permanent link")

```
do_action( 'litespeed_purge_url', string $url );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$url` | string | Required | Relative path or complete URL to purge. |

Purges one URL. The hook accepts either a path such as `/path/to/page/` or a complete URL such as `https://example.com/path/to/page/`.

### `litespeed_purge_widget`[¶](#litespeed_purge_widget "Permanent link")

```
do_action( 'litespeed_purge_widget', string|int $widget_id );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$widget_id` | string|int | Required | Widget ID to purge. |

Purges a widget’s cached fragment.

### `litespeed_purge_esi`[¶](#litespeed_purge_esi "Permanent link")

```
do_action( 'litespeed_purge_esi', string $tag );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$tag` | string | Required | Public ESI block name. |

Purges a public ESI block by name.

### `litespeed_purge_private`[¶](#litespeed_purge_private "Permanent link")

```
do_action( 'litespeed_purge_private', string|array $tags );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$tags` | string|array | Required | One private cache tag or an array of private cache tags to purge. |

Purges one or more tags from the current user’s private cache.

### `litespeed_purge_private_esi`[¶](#litespeed_purge_private_esi "Permanent link")

```
do_action( 'litespeed_purge_private_esi', string $tag );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$tag` | string | Required | Private ESI block name. |

Purges a private ESI block by name.

### `litespeed_purge_private_all`[¶](#litespeed_purge_private_all "Permanent link")

```
do_action( 'litespeed_purge_private_all' );
```

This hook has no parameters.

Purges every entry in the current user’s private cache.

### `litespeed_purge_all_object`[¶](#litespeed_purge_all_object "Permanent link")

```
do_action( 'litespeed_purge_all_object' );
```

This hook has no parameters.

Flushes the WordPress object cache, such as Memcached or Redis, when LSCWP manages it.

### `litespeed_api_purge_post`[¶](#litespeed_api_purge_post "Permanent link")

```
do_action( 'litespeed_api_purge_post', int $post_id );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$post_id` | int | Required | ID of the post being purged. |

Fires at the start of building the purge tag list for a single post, before any built-in tags are collected. Third parties can hook in and call [`Purge::add()`](https://github.com/litespeedtech/lscache_wp/blob/master/src/purge.cls.php) (or fire `litespeed_purge`) to push additional tags that should be purged alongside the post. Added in v1.0.0. Fired in [`src/purge.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/purge.cls.php).

Example

```
add_action( 'litespeed_api_purge_post', function( $post_id ) {
    // Also purge a custom tag whenever this post is purged.
    do_action( 'litespeed_purge', 'my_plugin_related_' . $post_id );
} );
```

## Purge events[¶](#purge-events "Permanent link")

These actions fire after LSCWP completes a purge. Add listeners with `add_action()` to run your own code, such as logging, cache warming, or external notifications, after LSCWP purges content. See [`src/purge.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/purge.cls.php).

| Hook | Fires after | Passes |
| --- | --- | --- |
| [`litespeed_purged_all_lscache`](#litespeed_purged_all_lscache) | **Purge All LSCache** | — |
| [`litespeed_purged_pages`](#litespeed_purged_pages) | **Purge All Pages** | — |
| [`litespeed_purged_cat`](#litespeed_purged_cat) | **Purge Category** | `$category` |
| [`litespeed_purged_tag`](#litespeed_purged_tag) | **Purge Tag** | `$tag` |
| [`litespeed_purged_link`](#litespeed_purged_link) | **Purge URL** | `$url` |
| [`litespeed_purged_frontpage`](#litespeed_purged_frontpage) | **Purge Front Page** | — |
| [`litespeed_purged_all`](#litespeed_purged_all) | **Purge All** | — |
| [`litespeed_purged_all_object`](#litespeed_purged_all_object) | **Purge All Object Cache** | — |
| [`litespeed_purged_all_opcache`](#litespeed_purged_all_opcache) | **Purge All OPcache** | — |
| [`litespeed_purged_single`](#litespeed_purged_single) | **Purge Single Tag** | — |
| [`litespeed_purged_esi`](#litespeed_purged_esi) | **Purge ESI Tag** | `$tag` |
| [`litespeed_purged_front`](#litespeed_purged_front) | **Purge This Page** | `$ref` |
| [`litespeed_purged_posttype`](#litespeed_purged_posttype) | **Purge Post Type** | `$post_type` |
| [`litespeed_purged_post`](#litespeed_purged_post) | **Purge Post** | `$pid` |
| [`litespeed_purged_widget`](#litespeed_purged_widget) | **Purge Widget** | `$widget_id` |
| [`litespeed_purged_comment_widget`](#litespeed_purged_comment_widget) | Comment count update | `$widget_id` |
| [`litespeed_purged_feeds`](#litespeed_purged_feeds) | Comment count update | — |
| [`litespeed_purged_on_logout`](#litespeed_purged_on_logout) | **User Logout** | — |

### `litespeed_purged_all_lscache`[¶](#litespeed_purged_all_lscache "Permanent link")

```
do_action( 'litespeed_purged_all_lscache' );
```

This hook has no parameters.

Fires after Purge All LSCache.

### `litespeed_purged_pages`[¶](#litespeed_purged_pages "Permanent link")

```
do_action( 'litespeed_purged_pages' );
```

This hook has no parameters.

Fires after Purge All Pages.

### `litespeed_purged_cat`[¶](#litespeed_purged_cat "Permanent link")

```
do_action( 'litespeed_purged_cat', string $category );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$category` | string | Required | Purged category slug. |

Fires after Purge Category.

### `litespeed_purged_tag`[¶](#litespeed_purged_tag "Permanent link")

```
do_action( 'litespeed_purged_tag', string $tag );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$tag` | string | Required | Purged tag slug. |

Fires after Purge Tag.

### `litespeed_purged_link`[¶](#litespeed_purged_link "Permanent link")

```
do_action( 'litespeed_purged_link', string $url );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$url` | string | Required | Purged URL. |

Fires after Purge URL.

### `litespeed_purged_frontpage`[¶](#litespeed_purged_frontpage "Permanent link")

```
do_action( 'litespeed_purged_frontpage' );
```

This hook has no parameters.

Fires after Purge Front Page.

### `litespeed_purged_all`[¶](#litespeed_purged_all "Permanent link")

```
do_action( 'litespeed_purged_all' );
```

This hook has no parameters.

Fires after LSCWP purges all caches, including LSCache, object cache, and other managed stores.

### `litespeed_purged_all_object`[¶](#litespeed_purged_all_object "Permanent link")

```
do_action( 'litespeed_purged_all_object' );
```

This hook has no parameters.

Fires after Purge All Object Cache.

### `litespeed_purged_all_opcache`[¶](#litespeed_purged_all_opcache "Permanent link")

```
do_action( 'litespeed_purged_all_opcache' );
```

This hook has no parameters.

Fires after Purge All OPcache.

### `litespeed_purged_single`[¶](#litespeed_purged_single "Permanent link")

```
do_action( 'litespeed_purged_single' );
```

This hook has no parameters.

Fires after Purge Single Tag.

### `litespeed_purged_esi`[¶](#litespeed_purged_esi "Permanent link")

```
do_action( 'litespeed_purged_esi', string $tag );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$tag` | string | Required | Purged ESI tag. |

Fires after Purge ESI Tag.

### `litespeed_purged_front`[¶](#litespeed_purged_front "Permanent link")

```
do_action( 'litespeed_purged_front', string $ref );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$ref` | string | Required | Purged URL, taken from the `HTTP_REFERER` of the request. |

Fires after **Purge This Page** in the Admin Bar purges the URL of the page the request came from. Added in v1.3. Fired in [`src/purge.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/purge.cls.php).

### `litespeed_purged_posttype`[¶](#litespeed_purged_posttype "Permanent link")

```
do_action( 'litespeed_purged_posttype', string $post_type );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$post_type` | string | Required | Slug of the purged post type. |

Fires after LSCWP adds the post type archive tag and the post type tag to the purge list. Added in v3.0. Fired in [`src/purge.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/purge.cls.php).

### `litespeed_purged_post`[¶](#litespeed_purged_post "Permanent link")

```
do_action( 'litespeed_purged_post', int $pid );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$pid` | int | Required | ID of the purged post. |

Fires after LSCWP adds all tags related to a post to the purge list. It does not fire for posts that have no purge tags. Added in v1.0.0. Fired in [`src/purge.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/purge.cls.php).

Example

```
add_action( 'litespeed_purged_post', function( $pid ) {
    error_log( 'Post purged: ' . $pid );
} );
```

### `litespeed_purged_widget`[¶](#litespeed_purged_widget "Permanent link")

```
do_action( 'litespeed_purged_widget', string $widget_id );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$widget_id` | string | Required | ID of the purged widget. |

Fires after LSCWP adds the widget's public and private tags to the purge list. Added in v1.1.3. Fired in [`src/purge.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/purge.cls.php).

### `litespeed_purged_comment_widget`[¶](#litespeed_purged_comment_widget "Permanent link")

```
do_action( 'litespeed_purged_comment_widget', string $widget_id );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$widget_id` | string | Required | ID of the `WP_Widget_Recent_Comments` instance purged. |

Fires after LSCWP adds the Recent Comments widget to the purge list in response to a comment-count update. Use it to trigger side effects (logging, purging related caches) when the widget is invalidated. Added in v1.1.3. Fired in [`src/purge.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/purge.cls.php).

Example

```
add_action( 'litespeed_purged_comment_widget', function( $widget_id ) {
    error_log( 'Recent Comments widget purged: ' . $widget_id );
} );
```

### `litespeed_purged_feeds`[¶](#litespeed_purged_feeds "Permanent link")

```
do_action( 'litespeed_purged_feeds' );
```

This hook has no parameters.

Fires after the feed tag is added to the purge list on a comment-count update. Only fires when the **Feed TTL** setting is greater than 0. Use it to purge any custom feed-related caches your plugin maintains. Added in v1.0.9. Fired in [`src/purge.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/purge.cls.php).

Example

```
add_action( 'litespeed_purged_feeds', function() {
    // Invalidate a custom cached feed.
    delete_transient( 'my_plugin_custom_feed' );
} );
```

### `litespeed_purged_on_logout`[¶](#litespeed_purged_on_logout "Permanent link")

```
do_action( 'litespeed_purged_on_logout' );
```

This hook has no parameters.

Fires after the user’s private cache is purged on logout.

## ESI[¶](#esi "Permanent link")

Edge Side Includes (ESI) lets you “punch holes” in an otherwise cached page so that specific fragments, such as nonces, shopping carts, and greeting banners, can be cached separately, cached per user, or not cached. See [`src/esi.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/esi.cls.php). For background information, see [ESI and LiteSpeed Cache](https://blog.litespeedtech.com/2017/09/06/wpw-esi-and-litespeed-cache/).

Info

For a video demonstration, see [What is Edge Side Includes (ESI)?](https://www.youtube.com/watch?v=uYpR6D8n3oE).

Default WordPress nonces are already treated as ESI blocks automatically. They are cached for 12 hours independently of the surrounding page’s TTL. Register custom nonces with `litespeed_nonce`.

| Hook | Type | Purpose |
| --- | --- | --- |
| [`litespeed_nonce`](#litespeed_nonce) | Action | Register a custom nonce for ESI. |
| [`litespeed_esi_status`](#litespeed_esi_status) | Filter | Query whether ESI is enabled. |
| [`litespeed_esi_url`](#litespeed_esi_url) | Filter | Generate an ESI include tag for a named block. |
| [`litespeed_esi_load-{block}`](#litespeed_esi_load-block) | Action | Render a named ESI block. |
| [`litespeed_esi_params`](#litespeed_esi_params) | Filter | Modify parameters passed to an ESI block. |
| [`litespeed_widget_default_options`](#litespeed_widget_default_options) | Filter | Provide default ESI settings for a widget. |
| [`litespeed_tpl_normal`](#litespeed_tpl_normal) / `litespeed_is_not_esi_template` | Action | Signal a normal template request rather than an ESI subrequest. |

### `litespeed_nonce`[¶](#litespeed_nonce "Permanent link")

```
do_action( 'litespeed_nonce', string $action );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$action` | string | Required | Nonce action to register. You may append an ESI cache-control value after a space. |

Registers a custom nonce action so LSCWP serves it through ESI. Call this action **before** the code that creates the nonce.

If ESI is disabled for the request, LSCWP falls back to a normal `wp_create_nonce()` call, so it is safe to leave this action in place.

Example

Register the nonce action before the code that calls `wp_create_nonce( 'example_nonce' )`:

```
do_action( 'litespeed_nonce', 'example_nonce' );
```

### `litespeed_esi_status`[¶](#litespeed_esi_status "Permanent link")

```
apply_filters( 'litespeed_esi_status', bool $enabled );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$enabled` | bool | Required | Current ESI status. |
| Return | bool | — | Whether ESI is enabled for the request. |

Returns `true` when ESI is enabled for the current request. Use it as a guard before performing ESI-specific work.

### `litespeed_esi_url`[¶](#litespeed_esi_url "Permanent link")

```
apply_filters(
    'litespeed_esi_url',
    string $block_id,
    string $wrapper,
    array $params = array(),
    string $control = 'private,no-vary',
    bool $silence = false,
    bool $preserved = false,
    bool $svar = false,
    array $inline_param = array()
);
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$block_id` | string | Required | ESI block ID. Use only alphanumeric characters, hyphens, and underscores. |
| `$wrapper` | string | Required | Human-readable wrapper label. |
| `$params` | array | Optional | Parameters passed to the block callback. Defaults to an empty array. |
| `$control` | string | Optional | Cache-control value. Defaults to `private,no-vary`. |
| `$silence` | bool | Optional | Whether to suppress wrapper comments. Defaults to `false`. |
| `$preserved` | bool | Optional | Whether to preserve ESI output through HTML filtering. Defaults to `false`. |
| `$svar` | bool | Optional | Whether to store the ESI output as a server variable. Defaults to `false`. |
| `$inline_param` | array | Optional | Inline-value data. Defaults to an empty array. |
| Return | string|false | — | ESI include markup, or `false` when the input is invalid. |

Generates an ESI include tag. Pair it with an `add_action( 'litespeed_esi_load-{block_id}', ... )` callback that renders the block’s HTML.

Warning

Uncached ESI blocks require a subrequest each. Keep their number low. If a page needs many uncached blocks, leave the entire page uncached instead.

Basic block

Insert the ESI include:

```
<div>
    <?php
    echo apply_filters( 'litespeed_esi_url', 'my_esi_block', 'Custom ESI block' );
    ?>
</div>
```

Render the block in `functions.php` or a plugin:

```
add_action( 'litespeed_esi_load-my_esi_block', function () {
    do_action( 'litespeed_control_set_ttl', 300 );
    echo 'Hello world ' . rand( 1, 99999 );
} );
```

In this example, `my_esi_block` is the block ID, `Custom ESI block` is a debug label, and `300` is the block TTL in seconds.

### `litespeed_esi_load-{block}`[¶](#litespeed_esi_load-block "Permanent link")

```
do_action( "litespeed_esi_load-{$block}", array $params );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$params` | array | Required | Decoded parameters supplied through `litespeed_esi_url`. |

Fires when the server requests the body of an ESI block named `{block}`. Your callback must output the block HTML. Inside the callback, use `litespeed_control_set_ttl` or `litespeed_control_set_nocache` to control block caching.

### `litespeed_esi_params`[¶](#litespeed_esi_params "Permanent link")

```
apply_filters( 'litespeed_esi_params', array $params, string $block_id );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$params` | array | Required | Parameters that will be serialized into the ESI subrequest. |
| `$block_id` | string | Required | ESI block ID. |
| Return | array | — | Modified parameter array. |

Filters the parameter array attached to an ESI include immediately before it is serialized into the subrequest URL. Use it to add or remove context that the block requires.

### `litespeed_widget_default_options`[¶](#litespeed_widget_default_options "Permanent link")

```
apply_filters( 'litespeed_widget_default_options', array $options, WP_Widget $widget );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$options` | array | Required | Widget ESI options. |
| `$widget` | WP\_Widget | Required | Widget instance. |
| Return | array | — | Modified widget ESI options. |

Filters default ESI options, including TTL and cache mode, for a widget. See [`thirdparty/woocommerce.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/thirdparty/woocommerce.cls.php) for an implementation example.

### `litespeed_tpl_normal` / `litespeed_is_not_esi_template`[¶](#litespeed_tpl_normal-litespeed_is_not_esi_template "Permanent link")

```
do_action( 'litespeed_tpl_normal' );
```

These hooks have no parameters.

`litespeed_tpl_normal` signals that the current request is a normal top-level template request rather than an ESI subrequest. Third-party integrations use this to prevent ESI-only helpers from running twice. See `thirdparty/yith-wishlist.cls.php` and `thirdparty/woocommerce.cls.php` for implementation examples.

## Vary[¶](#vary "Permanent link")

The vary cookie allows one URL to cache multiple versions, such as logged-in and guest versions, currencies, or languages. Use these hooks to control which cookies contribute to the vary value. See [`src/vary.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/vary.cls.php).

| Hook | Type | Purpose |
| --- | --- | --- |
| [`litespeed_vary_cookies`](#litespeed_vary_cookies) | Filter | Add cookies to the site-wide vary list. |
| [`litespeed_vary_curr_cookies`](#litespeed_vary_curr_cookies) | Filter | Add cookies to the vary list for the current page only. |
| [`litespeed_vary`](#litespeed_vary) | Filter | Modify the default vary-cookie value before finalization. |
| [`litespeed_vary_ajax_force`](#litespeed_vary_ajax_force) | Action | Force vary finalization during an AJAX request. |
| [`litespeed_vary_no`](#litespeed_vary_no) | Action | Do not vary the current page. |
| [`litespeed_is_mobile`](#litespeed_is_mobile) | Filter | Read or modify the current mobile-vary status. |

### `litespeed_vary_cookies`[¶](#litespeed_vary_cookies "Permanent link")

```
apply_filters( 'litespeed_vary_cookies', array $cookies );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$cookies` | array | Required | Registered site-wide vary-cookie names. |
| Return | array | — | Modified cookie-name list. |

Adds cookies to the **site-wide** vary list. Every URL varies on a cookie added through this filter.

### `litespeed_vary_curr_cookies`[¶](#litespeed_vary_curr_cookies "Permanent link")

```
apply_filters( 'litespeed_vary_curr_cookies', array $cookies );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$cookies` | array | Required | Vary-cookie names for the current request. |
| Return | array | — | Modified cookie-name list. |

Adds cookies to the vary list for the **current request only**. Use this filter when a cookie should affect caching only on some pages, such as a shopping-cart cookie relevant only at checkout.

GDPR consent cookie

Vary every page by the presence or value of `GDPR_cookie`:

```
function lscwp_add_custom_cookie( $list ) {
    $list[] = 'GDPR_cookie';

    return $list;
}

add_filter( 'litespeed_vary_curr_cookies', 'lscwp_add_custom_cookie' );
add_filter( 'litespeed_vary_cookies', 'lscwp_add_custom_cookie' );
```

### `litespeed_vary`[¶](#litespeed_vary "Permanent link")

```
apply_filters( 'litespeed_vary', array $vary );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$vary` | array | Required | Current vary map before hashing. |
| Return | array | — | Modified vary map. |

Filters the in-progress vary value. Before finalization, it is an array. Afterwards, LSCWP converts it into a string stored in the default vary cookie.

### `litespeed_vary_ajax_force`[¶](#litespeed_vary_ajax_force "Permanent link")

```
do_action( 'litespeed_vary_ajax_force' );
```

This hook has no parameters.

Forces vary finalization during the current request even when it is an AJAX request. Use it when an AJAX endpoint sets a vary-relevant cookie that must persist before the response is sent.

### `litespeed_vary_no`[¶](#litespeed_vary_no "Permanent link")

```
do_action( 'litespeed_vary_no' );
```

This hook has no parameters.

Tells LSCWP not to create a vary for the current page.

### `litespeed_is_mobile`[¶](#litespeed_is_mobile "Permanent link")

```
apply_filters( 'litespeed_is_mobile', bool $is_mobile );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$is_mobile` | bool | Required | Current mobile-request state. |
| Return | bool | — | Modified mobile-request state. |

Reads or modifies the mobile-vary status that LSCWP uses for the current request.

## Cloud[¶](#cloud "Permanent link")

These hooks relate to QUIC.cloud CDN integration. See [`src/cloud.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/cloud.cls.php).

### `litespeed_is_from_cloud`[¶](#litespeed_is_from_cloud "Permanent link")

Deprecated as of v7.9.1

Each callback is now authorized by its own signature instead of by a request-wide flag, making this filter unnecessary.

```
apply_filters( 'litespeed_is_from_cloud', bool $is_from_cloud );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$is_from_cloud` | bool | Required | Whether the request originated from QUIC.cloud. |
| Return | bool | — | Modified origin state. |

When active, the filter returned `true` if the current request originated from a recognized QUIC.cloud CDN node. It was previously used to restrict custom REST endpoints to QUIC.cloud requests.

## Optimize[¶](#optimize "Permanent link")

Use these hooks to control CSS, JavaScript, and UCSS optimization. See [`src/optimize.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/optimize.cls.php), [`src/css.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/css.cls.php), and [`src/ucss.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/ucss.cls.php).

| Hook | Type | Purpose |
| --- | --- | --- |
| [`litespeed_can_optm`](#litespeed_can_optm) | Filter | Enable or disable page optimization for the current request. |
| [`litespeed_optm`](#litespeed_optm) | Action | Fires when LSCWP is about to run optimizations. |
| [`litespeed_ccss_url`](#litespeed_ccss_url) | Filter | Modify the URL used to generate CCSS. |
| [`litespeed_ucss_url`](#litespeed_ucss_url) | Filter | Modify the URL used to generate UCSS. |
| [`litespeed_ucss_per_pagetype`](#litespeed_ucss_per_pagetype) | Filter | Generate one shared UCSS file per post type. |
| [`litespeed_optm_uri_exc`](#litespeed_optm_uri_exc) | Filter | Add URIs to the optimization exclusion list. |
| [`litespeed_optimize_js_excludes`](#litespeed_optimize_js_excludes) | Filter | Add files to **JS Excludes**. |
| [`litespeed_optm_js_defer_exc`](#litespeed_optm_js_defer_exc) | Filter | Add files to **JS Deferred/Delayed Excludes**. |
| [`litespeed_optm_gm_js_exc`](#litespeed_optm_gm_js_exc) | Filter | Add files to **Guest Mode JS Excludes**. |
| [`litespeed_vpi_should_queue`](#litespeed_vpi_should_queue) | Filter | Determine whether a URL joins the VPI queue. |
| [`litespeed_optm_html_after_head`](#litespeed_optm_html_after_head) | Filter | Place optimized output before `</head>`. |

### `litespeed_can_optm`[¶](#litespeed_can_optm "Permanent link")

```
apply_filters( 'litespeed_can_optm', bool $can_optm );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$can_optm` | bool | Required | Whether page optimization may run. |
| Return | bool | — | Whether page optimization may run. |

Return `false` to skip page optimization, including CSS and JavaScript combining, minification, and deferral, for the current request.

### `litespeed_optm`[¶](#litespeed_optm "Permanent link")

```
do_action( 'litespeed_optm' );
```

This hook has no parameters.

Fires when LSCWP is about to run its optimization pass. Hook here to make a last-minute configuration change with `litespeed_conf_force` that affects optimization only for the current request.

Bypass UCSS for pages

```
add_action( 'litespeed_optm', function () {
    if ( get_post_type() === 'page' ) {
        do_action( 'litespeed_conf_force', 'optm-ucss', false );
    }
} );
```

### `litespeed_ccss_url`[¶](#litespeed_ccss_url "Permanent link")

```
apply_filters( 'litespeed_ccss_url', string $url );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$url` | string | Required | URL used as the Critical CSS key. |
| Return | string | — | Modified URL. |

Modifies the URL that LSCWP treats as the page being generated for CCSS. Use it when several front-end URLs should share generated CCSS.

### `litespeed_ucss_url`[¶](#litespeed_ucss_url "Permanent link")

```
apply_filters( 'litespeed_ucss_url', string $url );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$url` | string | Required | URL used as the Unique CSS key. |
| Return | string | — | Modified URL. |

Works like `litespeed_ccss_url`, but for UCSS.

### `litespeed_ucss_per_pagetype`[¶](#litespeed_ucss_per_pagetype "Permanent link")

```
apply_filters( 'litespeed_ucss_per_pagetype', bool $enabled );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$enabled` | bool | Required | Whether UCSS is generated per post type. |
| Return | bool | — | Whether to use per-post-type UCSS. |

By default, LSCWP generates UCSS per URL. Return `true` to generate one shared UCSS file for the current post type. URLs whose post types return `false` continue to use per-URL UCSS.

### `litespeed_optm_uri_exc`[¶](#litespeed_optm_uri_exc "Permanent link")

```
apply_filters( 'litespeed_optm_uri_exc', array $list );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$list` | array | Required | Optimization-excluded URI patterns. |
| Return | array | — | Modified exclusion list. |

Adds URI patterns to the LSCWP optimization exclusion list. Requests matching an entry are served without optimization.

### `litespeed_optimize_js_excludes`[¶](#litespeed_optimize_js_excludes "Permanent link")

```
apply_filters( 'litespeed_optimize_js_excludes', array $list );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$list` | array | Required | JavaScript exclusion patterns. |
| Return | array | — | Modified exclusion list. |

Adds files to **JS Excludes**. See [JS Excludes](lscache__lscwp__pageopt.md#js-excludes).

### `litespeed_optm_js_defer_exc`[¶](#litespeed_optm_js_defer_exc "Permanent link")

```
apply_filters( 'litespeed_optm_js_defer_exc', array $list );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$list` | array | Required | Deferred or delayed JavaScript exclusion patterns. |
| Return | array | — | Modified exclusion list. |

Adds files to **JS Deferred/Delayed Excludes**. See [JS Deferred/Delayed Excludes](lscache__lscwp__pageopt.md#js-deferreddelayed-excludes).

### `litespeed_optm_gm_js_exc`[¶](#litespeed_optm_gm_js_exc "Permanent link")

```
apply_filters( 'litespeed_optm_gm_js_exc', array $list );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$list` | array | Required | Guest Mode JavaScript exclusion patterns. |
| Return | array | — | Modified exclusion list. |

Adds files to **Guest Mode JS Excludes**. See [Guest Mode JS Excludes](lscache__lscwp__pageopt.md#guest-mode-js-excludes).

### `litespeed_vpi_should_queue`[¶](#litespeed_vpi_should_queue "Permanent link")

```
apply_filters( 'litespeed_vpi_should_queue', bool $should_queue, string $request_url );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$should_queue` | bool | Required | Whether to queue the URL for VPI. |
| `$request_url` | string | Required | URL being evaluated. |
| Return | bool | — | Whether to queue the URL. |

Return `true` or `false` to include or exclude a URL from the Viewport Images (VPI) queue.

### `litespeed_optm_html_after_head`[¶](#litespeed_optm_html_after_head "Permanent link")

```
apply_filters( 'litespeed_optm_html_after_head', bool $after_head );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$after_head` | bool | Required | Whether optimized output goes immediately before `</head>`. |
| Return | bool | — | Whether to use the end of `<head>`. |

By default, LSCWP places optimized UCSS, CCSS, combined CSS, and combined JavaScript blocks near the top of `<head>`. Return `true` to place them immediately before `</head>`.

## Media[¶](#media "Permanent link")

These hooks affect image and media processing. See [`src/media.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/media.cls.php).

### `litespeed_media_add_missing_sizes`[¶](#litespeed_media_add_missing_sizes "Permanent link")

```
apply_filters( 'litespeed_media_add_missing_sizes', bool $enabled );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$enabled` | bool | Required | Whether to add missing image dimensions. |
| Return | bool | — | Whether to add missing image dimensions. |

Return `false` to bypass the **Add Missing Sizes** media option. This can be useful in **Guest Optimization** flows that do not need `width` and `height` attributes added.

## GUI[¶](#gui "Permanent link")

These hooks relate to the admin bar and HTML wrappers used by the LSCWP front-end UI. See [`src/gui.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/gui.cls.php).

| Hook | Type | Purpose |
| --- | --- | --- |
| [`litespeed_clean_wrapper_begin`](#litespeed_clean_wrapper_begin) | Filter | Open a marker that LSCWP removes from final HTML. |
| [`litespeed_clean_wrapper_end`](#litespeed_clean_wrapper_end) | Filter | Close the marker. |
| [`litespeed_frontend_shortcut`](#litespeed_frontend_shortcut) / `litespeed_backend_shortcut` | Action | Render LSCWP admin-bar quick actions. |

### `litespeed_clean_wrapper_begin`[¶](#litespeed_clean_wrapper_begin "Permanent link")

```
apply_filters( 'litespeed_clean_wrapper_begin', string $marker );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$marker` | string | Required | Opening clean-wrapper marker. |
| Return | string | — | Modified opening marker. |

Outputs an opening marker. LSCWP removes everything between it and the matching closing marker from the final HTML sent to browsers. Use the markers to wrap admin-only diagnostics.

### `litespeed_clean_wrapper_end`[¶](#litespeed_clean_wrapper_end "Permanent link")

```
apply_filters( 'litespeed_clean_wrapper_end', string $marker );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$marker` | string | Required | Closing clean-wrapper marker. |
| Return | string | — | Modified closing marker. |

Outputs the closing marker for `litespeed_clean_wrapper_begin`.

### `litespeed_frontend_shortcut` / `litespeed_backend_shortcut`[¶](#litespeed_frontend_shortcut-litespeed_backend_shortcut "Permanent link")

```
do_action( 'litespeed_frontend_shortcut' );
```

These hooks have no parameters.

`litespeed_frontend_shortcut` fires when LSCWP renders front-end admin-bar shortcuts. `litespeed_backend_shortcut` renders corresponding admin-side shortcuts.

## Debug[¶](#debug "Permanent link")

Use these hooks to write to `wp-content/debug.log` through the LSCWP logging channel. See [`src/debug2.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/debug2.cls.php).

| Hook | Type | Purpose |
| --- | --- | --- |
| [`litespeed_debug`](#litespeed_debug) | Action | Log a standard-level message. |
| [`litespeed_debug2`](#litespeed_debug2) | Action | Log an advanced-level message. |
| [`litespeed_disable_all`](#litespeed_disable_all) | Action | Disable all debug logging for the rest of the request. |

### `litespeed_debug`[¶](#litespeed_debug "Permanent link")

```
do_action( 'litespeed_debug', string $message, mixed $context = null );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$message` | string | Required | Message to write to the debug log. |
| `$context` | mixed | Optional | Additional debug context. |

Writes a standard-level entry to `wp-content/debug.log` through the LSCWP log channel.

### `litespeed_debug2`[¶](#litespeed_debug2 "Permanent link")

```
do_action( 'litespeed_debug2', string $message, mixed $context = null );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$message` | string | Required | Verbose message to write to the debug log. |
| `$context` | mixed | Optional | Additional debug context. |

Writes an advanced-level entry. It appears only when **Admin IP Only** or **Debug Level: Advanced** is active.

### `litespeed_disable_all`[¶](#litespeed_disable_all "Permanent link")

```
do_action( 'litespeed_disable_all', string $reason );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$reason` | string | Required | Reason to disable LiteSpeed Cache features. |

Disables all LSCWP debug logging for the remainder of the current request.

## Buffer[¶](#buffer "Permanent link")

Use these filters to modify page HTML before or after LSCWP transformations. See [`src/core.cls.php`](https://github.com/litespeedtech/lscache_wp/blob/master/src/core.cls.php).

Note

Because full-page caching serves saved HTML on cache hits, these filters run only on cache **misses**, while LSCWP builds the buffer to cache. Cached responses do not run buffer filters again.

| Hook | Type | Purpose |
| --- | --- | --- |
| [`litespeed_buffer_before`](#litespeed_buffer_before) | Filter | Modify HTML before LSCWP transforms it. |
| [`litespeed_buffer_after`](#litespeed_buffer_after) | Filter | Modify HTML after LSCWP transforms it. |

### `litespeed_buffer_before`[¶](#litespeed_buffer_before "Permanent link")

```
apply_filters( 'litespeed_buffer_before', string $content );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$content` | string | Required | Page HTML before LSCWP transformations. |
| Return | string | — | Modified page HTML. |

Runs on the page buffer **before** LSCWP applies CDN URL rewrites, CSS and JavaScript optimization, image lazy loading, and other transformations.

Remove the pingback `<link>`

```
add_filter( 'litespeed_buffer_before', function ( $content ) {
    return str_replace(
        '<link rel="pingback" href="https://example.com/xmlrpc.php">',
        '',
        $content
    );
}, 0 );
```

### `litespeed_buffer_after`[¶](#litespeed_buffer_after "Permanent link")

```
apply_filters( 'litespeed_buffer_after', string $content );
```

| Parameter | Type | Required | Description |
| --- | --- | --- | --- |
| `$content` | string | Required | Page HTML after LSCWP transformations. |
| Return | string | — | Modified page HTML. |

Runs on the page buffer **after** LSCWP completes its transformations.

## Debugging and developer tips[¶](#debugging-and-developer-tips "Permanent link")

Working usage examples for most public hooks are under [`thirdparty/`](https://github.com/litespeedtech/lscache_wp/tree/master/thirdparty) in the plugin source. Searching that directory locally is often faster than searching GitHub.

Beyond the basic [compatibility tests](lscache__lscwp__thirdparty.md#testing-for-compatibility) and [troubleshooting steps](lscache__lscwp__troubleshoot.md), you can open a support ticket or join the [#wpcache-dev channel on Slack](https://golitespeed.slack.com/archives/CC0UB7EKA) for help and to share integration work.
