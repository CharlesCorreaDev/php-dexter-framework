# Guides: Localization | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/localization

---

Search Knowledge Base

# Localization Articles

- [Database Character Set and Collation

  If your Craft project uses the default MySQL database driver (or MariaDB), it’s worth taking a moment to consider how the selected character set (charset) and collation will affect things like sorting or searching.
  Definitions
  The character set is the set of symbols and encodings (an “alphabet”) used by the database to store text.
  The collation is the set of rules used to compare and order those characters when querying.
  Craft 5.x defaults to the utf8mb4 character set and utf8mb4\_0900\_ai\_ci collation, when using MySQL. This is also the default combination for MySQL 8.x; it’s language-nonspecific, accent-insensitive (ai), case-insensitive (ci), and is based on Unicode Collation Algorithm version 9.0.0 weight keys (0900).
  Languages
  If your project has a primary language with accents or other character sequences that require special handling in element queries (as constraints, search keywords, or when sorting), you may want to use the corresponding language-specific collation. Keep in mind that all of your content will use a single charset and collation.
  Craft provides the db/convert-charset command to simplify the process of switching character sets and collations. You can either…
  - …run the command with the new charset and collation…
  `bash
  craft db/convert-charset [charset] [collation]
  `
  …and then add the same values to your .env under CRAFT\_DB\_CHARSET and CRAFT\_DB\_COLLATION.
  - …set the CRAFT\_DB\_CHARSET and CRAFT\_DB\_COLLATION environment variables, then run db/convert-charset without any arguments (accepting the suggested values when prompted) to apply those settings.](https://craftcms.com/knowledge-base/database-character-set-and-collation "Database Character Set and Collation")
- [Running Multiple Craft Sites with Craft Commerce

  Craft Commerce 5.x comes with a brand new multi-store feature to complement Craft’s native multi-site architecture.
  Stores are configured independently—and then attached to—one or more sites (each site having one store). Your product content is still managed per-site (so it can be localized for each audience), but some core properties like prices, dimensions, and SKUs are defined for each store, or globally.
  In addition to connecting each site to a store, stores support multiple currencies. When you create a store, you select a primary currency; store managers can then enable additional currencies for customers to select while shopping (and to use at checkout).
  Limitations
  Commerce is currently limited to five distinct stores and five inventory locations, but has no restrictions on the number of sites those stores are connected to. There are no limits on the number of product types, SKUs, orders, stock, revenue, customers, and so on.
  Start building your storefront with Commerce by checking out the documentation, or read more about its key features!](https://craftcms.com/knowledge-base/commerce-multiple-sites "Running Multiple Craft Sites with Craft Commerce")
- [Managing static message translations with Crowdin

  If your site takes advantage of Craft’s static message translations feature, you can improve your translation workflow using Crowdin. Crowdin provides a platform for collaborating on translations, and also integrates with professional translation services such as Alconost, Gengo, and Acclaro.](https://craftcms.com/knowledge-base/managing-static-message-translations-with-crowdin "Managing static message translations with Crowdin")
- [Accessing Locale Data from Templates

  Yii, the framework Craft is built on, ships with a tremendous amount of data for various locales, pulled from the Unicode Common Locale Data Repository. (You can see it all by peeking in craft/app/framework/i18n/data/.)
  Craft exposes it in its templates, via craft.i18n.getLocaleData():
  `twig
  {% set localeData = craft.i18n.getLocaleData() %}
  {% for month in localeData.getMonthNames() %}
  <option value="{{ loop.index }}">{{ month }}</option>
  {% endfor %}
  `
  By default, getLocaleData() will return data for the active locale (whatever craft.locale returns), but it’s possible to override that by passing in a different locale ID:
  `twig
  {% set month0 = now.month - 1 %}
  {% for locale in craft.i18n.getSiteLocales() %}
  {% set localeData = craft.i18n.getLocaleData(locale.id) %}
  Month in {{ locale.name }}:
  {{ localeData.getMonthName(month0) }}
  {% endfor %}
  `](https://craftcms.com/knowledge-base/accessing-locale-data-from-templates "Accessing Locale Data from Templates")
- [Control Panel Translations

  Craft’s control panel is currently translated into the following languages:
  Arabic
  Chinese (Simplified)
  Czech
  Danish
  Dutch
  English (United Kingdom)
  English (United States)
  French
  French (Canada)
  German
  German (Switzerland)
  Hebrew
  Hungarian
  Italian
  Japanese
  Korean
  Norwegian Bokmal
  Persian
  Polish
  Portuguese
  Russian
  Slovak
  Spanish
  Swedish
  Thai
  Turkish
  Ukrainian
  Contributing to Control Panel Translations
  If you’d like to help improve Craft’s translations, please contribute to Craft’s project on Crowdin.](https://craftcms.com/knowledge-base/control-panel-translations "Control Panel Translations")
- [Adding Additional Locales in Craft 2

  Craft ships with locale data for just over 100 locales, which is only a small subset of the 774 locales supported by Yii. If you need to add support for one of the locales Craft has omitted, just follow these steps:
  Click on the locale’s filename in Yii’s GitHub repo.
  Click Raw in the toolbar above the file contents.
  Save the file within your craft/app/framework/i18n/data/ folder, using the same filename as the one it had in the repo.
  In Craft’s control panel, go to Settings → Locales, and search for your new locale. It will appear in the results list just like all the others.](https://craftcms.com/knowledge-base/adding-additional-locales-in-craft-2 "Adding Additional Locales in Craft 2")
- [Using Classic Live Preview Across Multiple Subdomains

  If your site has multiple locales whose base URLs span across multiple subdomains, you will need to make some special configuration changes in order to get Live Preview in cross-domain scenarios.
  As an example, let’s say your site has two locales: English (located at mydomain.com), and German (located at de.mydomain.com). If you are accessing the control panel from mydomain.com/admin and edit an entry’s German translation, you will likely get a JavaScript error about a cross-domain security restriction if you try to open Live Preview.
  To work around this, two changes must be made:
  Open craft/config/general.php and set the defaultCookieDomain config setting to '.mydomain.com':
  `php
  'defaultCookieDomain' => '.mydomain.com',
  `
  This will cause user session cookies generated by Craft to apply to all subdomains of your domain name, so user sessions can persist across them.
  Open up the .htaccess file in each of your public web-roots, and add the following code to them:
  `bash
  Header set Access-Control-Allow-Origin "http://mydomain.com"
  Header set Access-Control-Allow-Credentials true
  `
  On the first line, replace http://mydomain.com with the domain name you will be accessing the control panel with.
  Once those changes have been made, you will need to either clear your browser’s cookies or restart the browser, so the new defaultCookieDomain config value can take effect.](https://craftcms.com/knowledge-base/using-live-preview-across-multiple-subdomains "Using Classic Live Preview Across Multiple Subdomains")

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
