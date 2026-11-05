# Self Host QuickBooks | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/self-host/self-host-quickbooks

---

On this page

## Overview[​](#overview "Direct link to Overview")

The [QuickBooks Online integration](docs__user-guide__quickbooks.md) is available on self-hosted installs. Because the hosted platform's QuickBooks keys can't be shared, you need to register your own app with Intuit and add its keys to your `.env` file. Once that's done, connecting works the same way as on the hosted platform.

## Create an Intuit app[​](#create-an-intuit-app "Direct link to Create an Intuit app")

1. Sign in at [developer.intuit.com](https://developer.intuit.com) and create a new app for **QuickBooks Online and Payments**, with the **Accounting** scope.
2. In the app's **Keys & credentials** (OAuth) settings, add this Redirect URI, replacing the domain with your own:

```
https://your-invoiceninja-domain.com/quickbooks/authorized
```

3. Copy the **Client ID** and **Client Secret**.

info

The redirect path is `/quickbooks/authorized`, with no `/api/v1` prefix. It must match the value in your `.env` exactly, and Intuit requires HTTPS on a public domain for production keys.

Use the **Production** keys to connect a real QuickBooks company. Development keys only connect to Intuit sandbox companies.

## Configure your .env[​](#configure-your-env "Direct link to Configure your .env")

Add the following to your `.env` file:

```
QUICKBOOKS_CLIENT_ID=your_client_id

QUICKBOOKS_CLIENT_SECRET=your_client_secret

QUICKBOOKS_REDIRECT_URI=https://your-invoiceninja-domain.com/quickbooks/authorized

QUICKBOOKS_ENV=production
```

warning

`QUICKBOOKS_ENV` defaults to `sandbox`. If you leave it unset, production keys will fail because the application is talking to the QuickBooks sandbox.

Also check that `APP_URL` (and `REACT_URL`, if you set it) points at your install. After you connect, Intuit sends you back there.

Then clear the cached config so the new values are picked up:

```
php artisan optimize:clear
```

If you run Invoice Ninja in Docker, restart the container instead.

## Connect QuickBooks[​](#connect-quickbooks "Direct link to Connect QuickBooks")

In Invoice Ninja, go to Settings > Account Management > Integrations > QuickBooks and click **Connect**. Sign in to Intuit, choose the company to link, and you'll be redirected back to Invoice Ninja. From there, follow the [QuickBooks user guide](docs__user-guide__quickbooks.md) to import your data and choose sync options.

Imports and pushes run as background jobs, so your [queue worker and cron](docs__self-host__self-host-installation.md#after-installation) need to be running.

## Troubleshooting[​](#troubleshooting "Direct link to Troubleshooting")

### Connect returns a 403 / unauthorized error[​](#connect-returns-a-403--unauthorized-error "Direct link to Connect returns a 403 / unauthorized error")

The application can't see your QuickBooks keys. Check that `QUICKBOOKS_CLIENT_ID` and `QUICKBOOKS_CLIENT_SECRET` are set in `.env`, then run `php artisan optimize:clear` again.

### Intuit says the redirect URI is invalid[​](#intuit-says-the-redirect-uri-is-invalid "Direct link to Intuit says the redirect URI is invalid")

The Redirect URI in your Intuit app doesn't exactly match `QUICKBOOKS_REDIRECT_URI`. Check for `http` vs `https`, `www`, and trailing slashes.

### The connection fails after signing in to Intuit[​](#the-connection-fails-after-signing-in-to-intuit "Direct link to The connection fails after signing in to Intuit")

Complete the Intuit sign-in within about three minutes of clicking **Connect**, or the handshake expires and you'll need to start again. Your application cache must also be working, because the connection state is held there while you sign in.

### It connects, but nothing syncs[​](#it-connects-but-nothing-syncs "Direct link to It connects, but nothing syncs")

Make sure your queue worker is running and cron is calling `php artisan schedule:run` every minute. Only admin users can start an import.
