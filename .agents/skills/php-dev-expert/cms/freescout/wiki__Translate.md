# Translate · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Translate

---

## Translate core application and modules

This instruction allows to translate the core application and Modules.

1. Log in as admin and update application to the latest version in "Manage » System".
2. Go to "Manage » Modules" and update all modules to the latest versions.
3. Go to "Manage » Translate".
4. Click `Import Translations` (*if your FreeScout is in debug mode and importing is not working, disable debugging in `.env` file: `#APP_DEBUG=true`*). If importing process timeouts, you can execute importing using the following console command: `php artisan translations:import`
5. Choose a group in the dropdown to display translations.
6. Translate texts.
7. Click `Publish translations` to apply translations in your app.
8. Now there are two ways to add translations to the FreeScout build:

   - If you are a developer, commit translations and create a [pull request](wiki__Development-Guide.md#step-by-step-instruction) into **master** branch.
   - Otherwise click `Send Translations` to send translations to FreeScout team. If sending does not work, download translations using `Download as ZIP` button and send to [support@freescout.net](mailto:support@freescout.net)

If after switching to the newly added language you receive "File '/public/js/flatpickr/l10n/xx.js" does not exist`error simply create an empty`/public/js/flatpickr/l10n/xx.js` file as a workaround.

## Change English texts

1. Go to "Manage » Translations".
2. Click "Import Translations".
3. Select "App" in "Choose a group to display translations".
4. Select English in "Language" dropdown.
5. Add translations for words/phrases you want to change.
6. Click "Back" button.
7. Click "Publish translations".

## Troubleshooting

If some string or modules are missing after importing translations, it means the process of importing could fail due to memory limits or script execution time limits of your server.
