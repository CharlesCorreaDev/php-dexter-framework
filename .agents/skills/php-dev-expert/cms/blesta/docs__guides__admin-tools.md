# Admin Tools | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/guides/admin-tools

---

Version: 6

On this page

The **Tools** menu in the admin UI groups maintenance and observability features that don't belong on any particular settings page. This guide documents the utilities and viewers added or expanded in Blesta 6.0.

For ad-hoc troubleshooting techniques (curl checks, manual SQL recovery queries, IMAP diagnostics), see [Debugging / Tools](docs__support__debugging-tools.md) instead â these are different in scope.

- [Utilities](#utilities)
  - [Clear File Cache](#clear-file-cache)
  - [System Integrity Check](#system-integrity-check)
- [Logs](#logs)
  - [Tools Logs (file-based system logs)](#tools-logs-file-based-system-logs)

## Utilities[â](#utilities "Direct link to Utilities")

Found under **Tools > Utilities** in the admin UI. Two new buttons in Blesta 6.0.

### Clear File Cache[â](#clear-file-cache "Direct link to Clear File Cache")

Clears Blesta's on-disk caches in one click: navigation cache, view cache, and plugin caches. Useful when:

- You've manually edited template files and want changes to appear immediately.
- A plugin or module installation didn't register correctly.
- The navigation appears stale after a settings change.

Expect slightly slower page loads for the first few requests after clearing while the caches rebuild. No data is lost; this only clears regenerable cache files.

Previously, clearing these caches required SSH access to delete files under `public_html/cache/` (now `cache_blesta/` in 6.0 â see the [v6 Migration Guide](docs__guides__v6-migration-guide.md#cache-directory-moves-above-the-document-root)). The button is the recommended way to do this in 6.0.

### System Integrity Check[â](#system-integrity-check "Direct link to System Integrity Check")

Verifies installed core files against the SHA-256 manifest (`manifest.json`) shipped with each official release. Useful for:

- Troubleshooting unexpected behavior â a modified core file is a common culprit.
- Pre-upgrade sanity check â ensure no unexpected modifications are about to be overwritten.
- Post-incident verification â confirm the install is in a known-good state.

Click **Run Integrity Check** to start. The check compares the SHA-256 of every file listed in `manifest.json` against what's currently on disk. Results are categorized:

- **Modified** â file exists but its hash doesn't match the manifest.
- **Missing** â file is listed in the manifest but not present on disk.

Categories indicate the source of the file:

- **Core** â a Blesta core file.
- **Vendor** â a dependency under `vendors/` (Composer-managed).

When everything is clean, the page shows *"All files match the manifest. No modifications or missing files detected."*

Use **Download Report** to save the results as a file for sharing with support.

Requires a manifest

The integrity check requires `manifest.json` in the installation root. Official releases ship this file. If you see *"The manifest file (manifest.json) was not found"*, you are likely on a development build or a release predating 6.0. Reinstall from the official release ZIP to restore the manifest.

Modifications are not automatically wrong

Some installations legitimately modify core files (custom branding patches, hotfixes from support, etc.). The integrity check reports them so you can confirm they're expected, not so you can panic. The intent is visibility, not enforcement.

## Logs[â](#logs "Direct link to Logs")

Found under **Tools > Logs**. The existing log viewers (gateway, module, messenger, cron, etc.) remain unchanged. Blesta 6.0 adds one new entry:

### Tools Logs (file-based system logs)[â](#tools-logs-file-based-system-logs "Direct link to Tools Logs (file-based system logs)")

A new in-admin viewer for the on-disk log files that Blesta writes to the configured log directory (`Settings > System > General > Basic Setup > Log Directory`). Previously these files were only accessible via SSH or a file manager; now they render as a sortable table in the admin UI with the following columns:

| Column | Description |
| --- | --- |
| Date | Timestamp from the log entry. |
| Level | PSR-3 log level â one of Emergency, Alert, Critical, Error, Warning, Notice, Info, or Debug. |
| Message | The log message body. |

If the log directory is unconfigured or unreadable, the page shows *"The log directory is not configured or is not readable. Configure it under Settings > System > General."*

This complements (rather than replaces) the SSH-based workflow described in [Checking Error Logs](docs__support__debugging-tools.md#checking-error-logs). Use the in-admin viewer for quick spot-checks; SSH/tail remains the right tool for live monitoring during reproducible-error chasing.
