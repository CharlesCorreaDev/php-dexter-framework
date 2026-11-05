# Testing · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Testing

---

This page describes OWA's automated test suites: what they cover, how to run each one manually, and how they run in GitHub Actions CI.

OWA has four test layers:

| Layer | Tool | What it covers | Needs a DB? |
| --- | --- | --- | --- |
| PHP unit / ingestion | PHPUnit | `\OWA\Core\Lib` helpers, the full server-side ingestion pipeline, REST controllers, template XSS | Some (ingestion/REST tests skip cleanly if no DB) |
| JavaScript unit | Jest | The ES6 tracker (beacon contract, transport, state, cookies, DOM streams) and the reporting bundle's build integrity | No |
| End-to-end (browser) | Playwright | Real browser flows: reporting dashboard, admin write flows, tracker beacon, heatmap overlay, install wizard, access hardening | Yes |
| Static analysis / lint | PHPStan, `php -l` | Type/def errors and parse errors across the PHP tree | No |

All test infrastructure lives under `tests/` and is **excluded from the release tarball** — it never ships to end users.

---

## PHP unit & ingestion tests (PHPUnit)

Configured by `phpunit.xml` (bootstrap `tests/bootstrap.php`, all suites under `tests/`).

```
composer install          # once, to get phpunit + deps
composer test             # runs phpunit
# or directly:
vendor/bin/phpunit
vendor/bin/phpunit tests/PageRequestIngestionTest.php   # a single file
```

**Two kinds of PHP test:**

- **Pure-helper tests** (e.g. `OwaLibTest`, `TemplateXssTest`) load only the class under test — no framework, no DB.
- **Ingestion / REST tests** (e.g. `PageRequestIngestionTest`, `*RestControllerTest`) boot the full OWA framework in the `logger` role (via `tests/bootstrap_owa.php`, the same role `log.php` uses) and drive `\OWA\Core\CoreAPI::logEvent()` through the **real** ingestion pipeline down to the fact-table INSERT. These write to the database configured in `owa-config.php`.

**DB handling:** each ingestion test uses a unique GUID per row and removes its own rows in `tearDown()`, so residue is bounded to a single row even on failure. If no database is reachable, `owa_test_db_available()` returns false and those tests **skip cleanly** (`markTestSkipped`) rather than error — so `composer test` is safe to run with no DB present (helper tests still run). When there is no `owa-config.php`, the bootstrap pre-defines `OWA_DB_TYPE='mysql'` so the storage-layer constants resolve.

---

## JavaScript tests (Jest)

Configured by `jest.config.js`; specs live in `tests/js/`.

```
npm install               # once
npm test                  # runs jest
npx jest Tracker.test.js  # a single file
```

Covers the ES6 tracker (beacon contract, transport, cross-domain state, cookie domain, Do-Not-Track, DOM stream capture/playback, traffic attribution, etc.) and the reporting bundle under `tests/js/reporting/`.

**Important:** the reporting bundle tests (`BundleIntegrity`, `BundleLoad`, `CssBundleIntegrity`) load the **built** artifacts from `public/base/dist/`. Run a build first or they skip:

```
npm run build
npm test
```

---

## End-to-end tests (Playwright)

The browser specs live in `tests/e2e/*.spec.js`. They are ordinary app-behavior tests written entirely against relative URLs + Playwright's `baseURL` (`tests/e2e/fixtures.js`) plus a deterministic PHP seeder, so they don't care *what* serves OWA — only that an installed OWA answers at `baseURL`.

There are **three Playwright configs**, each a different way of standing up (or pointing at) an install:

| npm script | Config | What it does |
| --- | --- | --- |
| `npm run test:e2e` | `playwright.config.js` | Runs against an **already-running** install — the live site, or any host via `OWA_E2E_BASE_URL`. Seeds fixtures into that install's DB. Runs the `@server-config` specs. |
| `npm run test:e2e:selfhost` | `playwright.selfhost.config.js` | **Stands everything up from scratch** on a bare machine: `php -S` + a throwaway scratch install. The CI-friendly runner. |
| `npm run test:e2e:install` | `playwright.install.config.js` | Exercises the **installer itself** (web wizard + CLI) into throwaway scratch DBs. |

First-time setup for any of them:

```
npm install
npm run build                              # specs load the BUILT tracker/reporting bundles
npx playwright install --with-deps chromium
```

### Self-hosted runner (recommended for local/CI)

`npm run test:e2e:selfhost` is fully self-contained — no dependency on this box's Apache / installed config. `tests/e2e/selfhost_harness.php` stands up a throwaway install:

- **up:** if a live `owa-config.php` exists it is stashed; DB creds come from `OWA_E2E_DB_*` env (CI) or by parsing the live/stashed config (local, reusing its DB server); a sentinel scratch DB `owa_e2e_selfhost` is CREATEd; a fresh config is written pointing at the scratch DB + the `php -S` URL; the real CLI installer builds the schema.
- **down:** drop the scratch DB, remove the scratch config, restore the live backup. Runs even on failure.

Playwright owns the `php -S` lifecycle (default `127.0.0.1:8964`). This runner **skips** `install-*.spec.js` (they own their own config/DB lifecycle) and **grep-inverts `@server-config`** — see below.

If a run is interrupted and leaves a stashed config or scratch DB behind:

```
npm run test:e2e:selfhost:doctor          # recover an aborted self-hosted run
```

### Install-flow runner

`npm run test:e2e:install` drives the installer end to end via `tests/e2e/install_harness.php`, into two scratch schemas (`owa_e2e_install_scratch` for the web wizard, `owa_e2e_installcli_scratch` for CLI). Because the installer owns the config file and the DB — the two pieces of global state everything else depends on — it MUST stash the live config and install into throwaway DBs. Its recovery command:

```
npm run test:e2e:install:doctor           # recover an aborted install run
```

### Live-server runner

`npm run test:e2e` targets an already-running install. By default that's `https://test.openwebanalytics.com/owa/index.php`; override with `OWA_E2E_BASE_URL` to point at a staging host. This is the only runner that executes the `@server-config` specs.

### Seeding fixtures manually

All runners seed via `tests/e2e/seed_reporting_fixtures.php`, which creates a stable, documented set of fixtures (a tracked site, an analyst user, an admin user, a password-change user, and a small deterministic set of pageviews spread across several days so charts have real shape). You can drive it directly:

```
npm run test:e2e:seed        # php tests/e2e/seed_reporting_fixtures.php seed
npm run test:e2e:teardown    # php tests/e2e/seed_reporting_fixtures.php teardown
php tests/e2e/seed_reporting_fixtures.php info   # print fixture identifiers as JSON
```

The seeder is **idempotent** — it tops the fixture site up to a fixed number of pageviews rather than piling on new rows, so re-running is safe.

### `@server-config` specs (`access-hardening.spec.js`)

`access-hardening.spec.js` asserts **real web-server** (`.htaccess`) deny/allow behavior. `php -S` serves every file itself and knows nothing about `.htaccess`, so this spec can only pass against a real Apache/nginx. Its `describe` title is tagged `@server-config` and the self-hosted/install runners grep-invert it, so a green self-hosted run never implies hardening was checked. It runs only in the live-server runner against real Apache.

---

## Static analysis & lint

```
composer run-script lint       # php -l across the whole PHP tree (excludes vendor/node_modules)
composer run-script phpstan    # PHPStan (memory limit 1G)
```

---

## GitHub Actions CI

CI is defined in `.github/workflows/ci.yml` with five jobs, run on every push to `master` and every pull request:

### 1. `test` — Lint, analyse & test (PHP matrix)

Runs on a **matrix of PHP 8.2, 8.3, 8.4**. Steps: `composer install` → `composer lint` (`php -l`) → `composer phpstan` → `composer test` (PHPUnit). This job has **no MySQL service**, so the ingestion/REST tests skip cleanly there (via `owa_test_db_available()`); the pure-helper tests, lint, and static analysis run for real across all three PHP versions.

### 2. `js` — Tracker JS tests (Jest)

Node 20. Steps: `npm ci` → `npm run build` (so the reporting bundle integrity tests run for real instead of skipping) → `npm test`.

### 3. `isolation` — Test isolation sweep (each file alone)

Runs on a matrix of both database drivers (`mysql` and `mysqli`), with a MySQL
service. It runs **each test file in its own PHPUnit process** rather than the
whole suite in one.

A test that passes in the suite but fails alone is inheriting state an earlier
test set up — a registry the dispatcher builds lazily, or a legacy `owa_*` alias
that only exists once something else has autoloaded it. PHPUnit runs the whole
suite in a single process, so neither is visible in an ordinary run.

### 4. `upgrade` — Schema upgrade cycle (rewind, then upgrade)

**The only job in which the updates actually run.** Every other environment —
the unit job, the isolation sweep, the e2e runner and a developer's own box —
*installs*: `Module::install()` builds every table from the current entity
definitions and stamps `schema_version` at the latest, so the update walk is
always over an empty range and `modules/*/Update/*` is dead code under test.

This job installs, rewinds the recorded schema version, and then upgrades
forward, so each update is executed against a database an earlier version built.
See [Schema Updater](Schema-Updater.md).

### 5. `e2e` — E2E (self-hosted, `php -S` + MySQL)

Node 20 + PHP 8.2, with a **`mysql:8.0` service** (root / empty password — nothing here is a real install). Job-level env points the harness at the service:

```
OWA_E2E_DB_HOST: 127.0.0.1
OWA_E2E_DB_PORT: 3306
OWA_E2E_DB_USER: root
OWA_E2E_DB_PASSWORD: ''
OWA_E2E_DB_NAME:  owa_e2e_selfhost
```

Setup: `composer install` → `npm ci` → `npm run build` (specs load the built bundles) → `npx playwright install --with-deps chromium`. Then two ordered steps:

- **Step 1 — install suite:** `npm run test:e2e:install` (with `OWA_E2E_BASE_URL: http://127.0.0.1:8965/index.php`). Exercises the web wizard and CLI installers, each into its own scratch DB, self-served by `php -S`. This certifies the exact `installManager` schema/admin/site provisioning code the next step relies on.
- **Step 2 — app-behavior suite:** `npm run test:e2e:selfhost`. Provisions a throwaway install via the CLI installer + `php -S` (derives its own `127.0.0.1:8964` URL) and runs the reporting / admin / tracker / cookie / overlay specs.

On failure the Playwright HTML report is uploaded as an artifact (`playwright-report`, retained 7 days).

---

See also: [Development](Development.md), [Installation](Installation.md), [Command Line Interface (CLI)](Command-Line-Interface-_CLI.md), [Tracking Event Pipeline](Tracking-Event-Pipeline.md).
