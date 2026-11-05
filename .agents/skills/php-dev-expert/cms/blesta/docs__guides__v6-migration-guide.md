# v6 Migration Guide | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/guides/v6-migration-guide

---

Version: 6

On this page

Blesta 6.0 is a major release with intentional removals, runtime requirement changes, and behavior changes that can affect existing installations, customizations, and extensions. Read this page **before** upgrading from 5.x.

For the upgrade procedure itself, see [Upgrading](docs__upgrade.md). For the full per-ticket release notes, see [6.0.0 release notes](docs__support__releases__6__600.md).

- [Removed](#removed)
  - [Coinbase Commerce gateway](#coinbase-commerce-gateway)
  - [Legacy default admin template](#legacy-default-admin-template)
  - [Staff color scheme options](#staff-color-scheme-options)
- [Runtime requirements changed](#runtime-requirements-changed)
  - [PHP 8.2 minimum](#php-82-minimum)
  - [Database defaults to utf8mb4](#database-defaults-to-utf8mb4)
  - [Cache directory moves above the document root](#cache-directory-moves-above-the-document-root)
  - [Composer v2](#composer-v2)
  - [Optional: Redis cache layer](#optional-redis-cache-layer)
- [Gateway and module behavior changes](#gateway-and-module-behavior-changes)
  - [GoCardless: upgraded to gateway v2](#gocardless-upgraded-to-gateway-v2)
  - [OpenSRS: expiration, nameservers, additional TLDs](#opensrs-expiration-nameservers-additional-tlds)
  - [OVH module: ovh/ovh v3](#ovh-module-ovhovh-v3)
  - [OpenProvider module: rest-client-php v2](#openprovider-module-rest-client-php-v2)
- [UI and behavior changes worth surfacing](#ui-and-behavior-changes-worth-surfacing)
  - [Bootstrap 5 admin UI (Paradigm)](#bootstrap-5-admin-ui-paradigm)
  - [Settings navigation reorganized; new Iconbar](#settings-navigation-reorganized-new-iconbar)
  - [Standardized button language across the admin UI](#standardized-button-language-across-the-admin-ui)
  - [Step-up authentication: timer with extend](#step-up-authentication-timer-with-extend)
  - [Dashboard and widget changes](#dashboard-and-widget-changes)
- [For extension authors](#for-extension-authors)
- [Deprecated (still present, scheduled for removal)](#deprecated-still-present-scheduled-for-removal)

## Removed[â](#removed "Direct link to Removed")

### Coinbase Commerce gateway[â](#coinbase-commerce-gateway "Direct link to Coinbase Commerce gateway")

The Coinbase Commerce gateway has been removed. **Coinbase shut down the Coinbase Commerce service**, so the gateway no longer functions and has been dropped from 6.0. The page for this gateway is no longer present in the 6.x documentation.

**What to do:** If you were using Coinbase Commerce, migrate to another supported cryptocurrency gateway (BTCPay, BitPay, CoinGate, CoinPayments, or Blockonomics) before upgrading. Update any client-facing pricing or workflows that referenced the gateway. The 5.x documentation still describes Coinbase Commerce for users on the 5.x branch.

### Legacy default admin template[â](#legacy-default-admin-template "Direct link to Legacy default admin template")

The legacy `default` admin template has been removed. **Paradigm is now the only admin template.** All staff views now live under `public_html/app/views/admin/paradigm/`; the `public_html/app/views/admin/default/` tree no longer exists.

**What to do:** If you maintain a custom admin theme based on the default template, you will need to port it to Paradigm. References to selecting an admin template have been removed from the admin UI. Custom templates that extended files under `admin/default/` will not load.

### Staff color scheme options[â](#staff-color-scheme-options "Direct link to Staff color scheme options")

The staff color scheme options have been removed in favor of light/dark mode customization under Look and Feel.

**What to do:** Reconfigure your light-mode and dark-mode logos and icons under **Settings > Company > Look and Feel** after the upgrade. The upgrade will strip the obsolete `staff_color_scheme` setting; existing logo uploads are preserved but may need to be re-assigned to the new light/dark slots. Colors and other modifications can still be made by adding custom CSS to the theme.

## Runtime requirements changed[â](#runtime-requirements-changed "Direct link to Runtime requirements changed")

### PHP 8.2 minimum[â](#php-82-minimum "Direct link to PHP 8.2 minimum")

Blesta 6.0 requires **PHP 8.2** at minimum. Supported versions:

| Version | Status |
| --- | --- |
| PHP 8.2 | Supported |
| PHP 8.3 | Supported, **recommended** |
| PHP 8.4 | Supported |
| PHP 8.1 and earlier | **Not supported** |

**What to do:** Upgrade PHP **before** running the Blesta upgrade. Running the 6.0 upgrade on PHP 8.1 or earlier will fail at the requirements check. There is no Source Guardian or PHP 7.x hotfix for the 6.x series â Ioncube is the only supported loader, and **version 15 loaders (or newer)** are required.

### Database defaults to utf8mb4[â](#database-defaults-to-utf8mb4 "Direct link to Database defaults to utf8mb4")

New installs now use `utf8mb4` with `utf8mb4_unicode_ci` collation. **The upgrade automatically converts existing databases** â it detects any table or column still using a non-`utf8mb4_unicode_ci` collation and runs `ALTER TABLE ... CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci` for each.

**What to do for most users:** Nothing â the conversion runs as part of the upgrade. You will notice the upgrade taking longer than past releases if you have a large database.

**What to do if you have customizations:** Custom tables, columns, or indexes that aren't recognized by Blesta's migration list are still converted automatically by the upgrade because the conversion scans `information_schema` for any non-utf8mb4 collations. If you have a column with a `VARCHAR(255)` index, you may encounter a "Specified key was too long" error â see the [error guidance in the upgrade docs](docs__upgrade.md#error-pdoexception---specified-key-too-long) for the resolution (requires MySQL 5.7.7+ / MariaDB 10.2.2+, which are already the documented minimums).

### Cache directory moves above the document root[â](#cache-directory-moves-above-the-document-root "Direct link to Cache directory moves above the document root")

The cache directory has moved from `public_html/cache/` to a `cache_blesta/` directory **one level above** your document root, alongside `uploads/`. The upgrade copies existing cache contents and writes a deny-all `.htaccess` at the new location.

**What to do:**

- If your web user can write one directory above the docroot, no action is needed.
- If you have a hardened `open_basedir` setting, **add the new cache path to your `open_basedir` allow list** before upgrading, otherwise the upgrader cannot create the new directory.
- If you run Blesta in a chrooted environment or with strict filesystem permissions, verify the new path is writable before upgrading.

### Composer v2[â](#composer-v2 "Direct link to Composer v2")

Blesta 6.0 moves to **Composer v2**, and `composer.lock` is now shipped with the distribution (previously git-ignored).

**What to do:** If you maintain extensions with Composer dependencies, ensure your Composer is at least 2.x and update your extension's `composer.json` as needed. Vendored extension trees in your installation will continue to work; only authoring/build workflows change.

### Optional: Redis cache layer[â](#optional-redis-cache-layer "Direct link to Optional: Redis cache layer")

Blesta 6.0 adds an optional Redis-backed cache layer that serves frequent settings queries from Redis in under 1 ms instead of the 15â45 ms typical of a database round-trip. It is **optional** and most useful for dedicated, performance-sensitive environments â small installs will not see a meaningful benefit. [Valkey](https://valkey.io), the drop-in-compatible fork of Redis, works identically â it is what AlmaLinux 10 ships in place of Redis (AlmaLinux 8 and 9 still ship Redis), and the config key is named `Blesta.redis` either way.

**What to do:**

- On a fresh 6.0 install, the Redis config block ships in `~/config/blesta.php` already (commented out). To enable, install Redis (or Valkey) on the server, then uncomment and configure the block.
- On an upgrade from 5.x, the Redis config block lands in `~/config/blesta-new.php` (the new-config sample) so the upgrade does not overwrite your existing `blesta.php`. Copy the block into your live `~/config/blesta.php` and configure to enable.
- Falls back silently to local cache if Redis is unreachable, so enabling it is safe to roll back.
- **Security:** Redis has no authentication by default. **Bind it to `127.0.0.1`** in `redis.conf` (`valkey.conf` for Valkey) so it is not reachable from the Internet, or block port `6379` (or your chosen port) at the firewall. If Redis must run on a separate host, set a strong `requirepass` and restrict access to the Blesta web servers only.

See [Blesta.redis](docs__getting-started__configs.md#blestaredis-blesta-60) in the config documentation for the full configuration reference and verification tips.

## Gateway and module behavior changes[â](#gateway-and-module-behavior-changes "Direct link to Gateway and module behavior changes")

### GoCardless: upgraded to gateway v2[â](#gocardless-upgraded-to-gateway-v2 "Direct link to GoCardless: upgraded to gateway v2")

The GoCardless gateway has been bumped to v2 of the gateway plugin (upstream `gocardless/gocardless-pro` PHP client upgraded to 7.x). The form fields are unchanged: your existing **Access Token** and **Webhook Secret** continue to work, and the webhook URL is the same. A new **Developer Mode** toggle has been added to post test transactions to the GoCardless **Sandbox** environment.

**What to do:** No action required. Existing GoCardless configurations work as-is after upgrading. See the [GoCardless gateway](docs__integrations__gateways__gocardless.md) doc for the new Developer Mode field.

### OpenSRS: expiration, nameservers, additional TLDs[â](#opensrs-expiration-nameservers-additional-tlds "Direct link to OpenSRS: expiration, nameservers, additional TLDs")

OpenSRS module fixes: expiration and registration date handling, nameserver updates, and support for additional TLDs.

**What to do:** Mostly a "this works correctly now" change. Re-sync domain data for OpenSRS-managed domains after upgrading if you previously hit any of these issues.

### OVH module: ovh/ovh v3[â](#ovh-module-ovhovh-v3 "Direct link to OVH module: ovh/ovh v3")

The OVH module's upstream `ovh/ovh` client library has been bumped to v3.

**What to do:** No user-facing change. If you have a custom fork of the OVH module, rebase against the upstream module to pick up the new client library.

### OpenProvider module: rest-client-php v2[â](#openprovider-module-rest-client-php-v2 "Direct link to OpenProvider module: rest-client-php v2")

The OpenProvider module's `openprovider/rest-client-php` library has been bumped to v2.

**What to do:** No user-facing change. If you have a custom fork of the OpenProvider module, rebase against the upstream module.

## UI and behavior changes worth surfacing[â](#ui-and-behavior-changes-worth-surfacing "Direct link to UI and behavior changes worth surfacing")

### Bootstrap 5 admin UI (Paradigm)[â](#bootstrap-5-admin-ui-paradigm "Direct link to Bootstrap 5 admin UI (Paradigm)")

The entire admin UI is rebuilt on Bootstrap 5 (Paradigm). Visual changes are extensive but functional flows are equivalent. The legacy default template is gone.

**What to do:** Expect every admin screenshot in your internal docs to be out of date. Walk through the major flows after upgrading to familiarize your staff. Plugins and modules have been updated for Paradigm; third-party or custom extensions targeting the default template will need conversion.

### Settings navigation reorganized; new Iconbar[â](#settings-navigation-reorganized-new-iconbar "Direct link to Settings navigation reorganized; new Iconbar")

Settings has a new **Iconbar** and the navigation tree has been reorganized to group related screens more tightly. Settings search has also been improved with keyword and description metadata.

**What to do:** No data change. Allow some time to relearn where common settings live.

### Standardized button language across the admin UI[â](#standardized-button-language-across-the-admin-ui "Direct link to Standardized button language across the admin UI")

Button labels have been standardized for consistency (e.g. "Save" / "Cancel" used uniformly where previously a mix of "Update" / "OK" / "Apply" appeared).

**What to do:** Documentation and training materials that quote specific button labels may need updates.

### Step-up authentication: timer with extend[â](#step-up-authentication-timer-with-extend "Direct link to Step-up authentication: timer with extend")

The step-up authentication menu now shows a countdown timer with an option to extend the elevated session rather than re-authenticating each time it expires.

**What to do:** Inform staff of the new behavior. Step-up auth is still controlled by the `Blesta.step_up_authentication` config flag.

### Dashboard and widget changes[â](#dashboard-and-widget-changes "Direct link to Dashboard and widget changes")

The dashboard has been redesigned. Client profile widgets are now sortable, the client profile has a new quick-jump shortcut, and the contacts widget has been linked to a new contact listing page.

**What to do:** No action â visual change only.

## For extension authors[â](#for-extension-authors "Direct link to For extension authors")

This page focuses on user-facing changes. Developer-facing changes â including the new plugin event-validation API (plugins can halt model operations from event handlers), the navigation `icon` field for `config.json`, widget helper updates, the image-upload config option value type, the Database Query Logger, and the Example Objects Library â are documented in the developer documentation. See the [6.0.0 release notes](docs__support__releases__6__600.md#developer-notes-for-blesta-6) for a high-level summary.

At minimum, after rebasing an extension for 6.0:

- Update `composer.json` for Composer v2 and re-tag the extension.
- Verify your extension renders under Paradigm; default-template-only markup will not display.
- Consider adding an `icon` field to your plugin's `config.json` so it shows a proper navigation icon.
- Review any code using `data-bs-toggle="collapse"` for expandable rows â the pattern is now `data-collapse-row`.
- Test against PHP 8.2, 8.3, and 8.4.

The [Extension Development Kit](https://github.com/blesta/extension-dev-kit) can help with all of this â it provides AI-ready reference guides for converting 5.x extensions to 6.0, converting WHMCS extensions to Blesta, and writing new 6.0 extensions from scratch. See the [v6 Extension Conversion Guide](docs__developers__v6-extension-conversion.md) for details.

## Deprecated (still present, scheduled for removal)[â](#deprecated-still-present-scheduled-for-removal "Direct link to Deprecated (still present, scheduled for removal)")

*Pending â to be populated by auditing the v6 source for `@deprecated` annotations and confirming each is genuinely scheduled for removal in a future 6.x release. As items here are removed in subsequent 6.x versions, they should be moved to the **Removed** section above.*
