# Guides: Development | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/development

---

Search Knowledge Base

# Development Articles

- [Connecting to Multiple Databases

  Craft typically reads and writes data to and from a single database. In some situations, though, it may be necessary to connect to one or more additional databases:
  Importing content from a legacy system without a public API;
  Cross-referencing or validating data in external systems;
  Storing data in proprietary or optimized formats, outside of Craft’s schema;
  Using features of other PDO drivers that Craft doesn’t support as the primary connection;
  Replication, read-write splitting, caching, and other performance reasons;
  Configuration
  Craft’s database configuration is a developer-friendly layer that translates a variety of configuration schemes into an instance of craft\db\Connection, which is mounted to the application as the db component. You do not need to change how you establish Craft’s primary database connection.
  Additional database components, however, must be defined directly via app.php:
  `php
  use craft\helpers\App;
  use craft\db\Connection;
  return [
  'components' => [
  'altDb' => [
  'class' => Connection::class,
  'dsn' => App::env('ALT\_DB\_DSN'),
  'username' => App::env('ALT\_DB\_USERNAME'),
  'password' => App::env('ALT\_DB\_PASSWORD'),
  ],
  ],
  ];
  `
  Your database’s dsn is typically in this format, but it may differ slightly based on the PDO adapter (designated by the leading mysql:):
  mysql:host=localhost;port=3307;dbname=testdb
  The username and password must be explicitly set in the config array. If your platform or provider uses database “URLs,” you can use craft\helpers\Db::url2config($url) helper to convert it to a compatible array:
  `php
  use craft\helpers\App;
  use craft\helpers\Db;
  use craft\db\Connection;
  return [
  'components' => [
  'altDb' => array\_merge(
  Db::url2config(App::env('ALT\_DB\_URL')),
  [
  'class' => Connection::class,
  ]
  ),
  ],
  ];
  `](kb__connecting-to-multiple-databases.md "Connecting to Multiple Databases")
- [Craft CMS for WordPress Developers

  Trying out new technology always brings about a mix of excitement and fear. We’ve assembled a few tools and resources here to help make your first steps with Craft CMS as comfortable and rewarding as possible. Let’s dig in!
  🪴 Get to know the Craft ecosystem →
  🪄 Spin up our WordPress starter project →
  🗃️ Import content from an existing project →](kb__for-wordpress-devs.md "Craft CMS for WordPress Developers")
- [Custom Commerce Checkout Flow with Stripe

  Commerce’s checkout experience can be tailored to meet the specific needs of your storefront. In this article, we’ll cover a basic custom checkout implementation using our first-party Stripe gateway and Stripe’s Payment Elements product.](kb__custom-stripe-commerce-checkout.md "Custom Commerce Checkout Flow with Stripe")
- [Local Development with Docker

  Requirements
  Craft will run in any environment that meets its base requirements—and with a bit of configuration, it can take advantage of all kinds of modern development tools and infrastructure technology.
  This article covers a minimal Docker Compose configuration that meets Craft’s requirements, and explores a couple of opportunities for more advanced tooling.
  We’ll show you how to combine serversideup/php base images into a fully-functional application—but you are free to use some, all, or none of the services in your own containerized environment.](kb__docker-for-local-development.md "Local Development with Docker")
- [Setting up a Craft Project from Scratch

  While we recommend using the official starter project, there are only a couple of things you need to know to start completely from scratch. This guide is intended for advanced users and tinkerers who want to experiment with how Craft is initialized.
  Please be aware that downloading or installing Craft binds you to its license.
  Initializing with Composer
  All projects will involve Composer at some point—so we might as well get started on the right foot, with the init command:
  `bash
  mkdir my-custom-project
  cd my-custom-project
  composer init
  `
  Skip or accept defaults for all the prompts, except for these:
  Package Type → project
  Would you like to define your dependencies (require) interactively? → y for “Yes”
  Search for a package: → craftcms/cms
  Allow Composer to find the latest version.
  Press Enter when prompted to search again to exit dependency declaration, and answer no when prompted to declare require-dev dependencies.
  Add PSR-4 autoload mapping? → n to skip
  Do you trust yiisoft/yii2-composer to execute code and wish to enable it now? → y for “Yes”
  Do you trust craftcms/plugin-installer to execute code and wish to enable it now? → y for “Yes”
  You will be left with a fresh vendor/ directory and a composer.json file that looks something like this:
  `json
  {
  "name": "me/my-custom-project",
  "require": {
  "craftcms/cms": "^5.1"
  },
  "authors": [
  {
  "name": "My Name",
  "email": "email@domain.com"
  }
  ],
  "config": {
  "allow-plugins": {
  "yiisoft/yii2-composer": true,
  "craftcms/plugin-installer": true
  }
  }
  }
  `
  Comparing this to the starter kit, you’ll notice it’s pretty similar.
  Bootstrapping Craft
  Now that Craft’s source files are installed, you’ll need to create “entry scripts” for web and console requests.
  `treeview
  my-custom-project/
  ├── vendor/
  │ └── ...
  ├── web/
  │ ├── .htaccess
  │ └── index.php ← (1) Web
  │ bootstrap.php ← (3) Bootstrap
  ├── composer.json
  ├── composer.lock
  └── craft ← (2) Console
  `
  Create a web/ directory, and two files inside it: index.php (1), to serve web requests…
  `php
  <?php
  require dirname(DIR) . '/bootstrap.php';
  /\*\* @var craft\web\Application $app \*/
  $app = require CRAFT\_VENDOR\_PATH . '/craftcms/cms/bootstrap/web.php';
  $app->run();
  `
  …and—if you plan on using Apache—a boilerplate .htaccess file that reroutes any request that doesn’t match a “real” file through index.php:
  `apacheconf
  RewriteEngine On
  # Send would-be 404 requests to Craft
  RewriteCond %{REQUEST\_FILENAME} !-f
  RewriteCond %{REQUEST\_FILENAME} !-d
  RewriteCond %{REQUEST\_URI} !^/(favicon\.ico|apple-touch-icon.\*\.png)$ [NC]
  RewriteRule (.+) index.php?p=$1 [QSA,L]
  `
  Note that index.php contains a reference to a shared “bootstrap” file in the directory above it. We’ll create that in a moment.](kb__setting-up-a-craft-project-from-scratch.md "Setting up a Craft Project from Scratch")
- [Migrating from Craft Nitro to DDEV

  With Nitro being discontinued, we recommend DDEV as a great local development environment:
  It’s Docker-based, freely available, and it works on macOS, Windows, and Linux.
  It’s well documented and has an active community.
  It’s perfect for PHP-based projects like Craft.
  It’s a convenient layer on top of Docker, and you can bring as little or as much Docker as you want.
  For each site you migrate, you’ll need to grab a database export (from Nitro or your production environment), create and configure a new DDEV site, and import the database.
  Most sites should only take a few minutes to migrate.
  1. Export existing databases
  Pick either method for exporting each site’s database:
  From your production environment, you can visit the Craft control panel (with sufficient permissions) and navigate to Utilities → Database Backup, make sure Download backup is checked, and press Backup. This will create and download a compressed database dump.
  From your local machine with Nitro installed, you can run nitro db backup and choose each engine and database. (Take note of the directories these are saved to, or collect the backups someplace more convenient for step 5.)](kb__migrating-from-craft-nitro-to-ddev.md "Migrating from Craft Nitro to DDEV")
- [Preparing for Craft 4

  Craft 4 is coming in 2022, and you can take steps right now that’ll make your sites easier to upgrade on launch day.](kb__preparing-for-craft-4.md "Preparing for Craft 4")
- [Listing Products on Sale

  A common need for an online store is to list all products that are on sale.
  A Craft Commerce sale affects the pricing of a product’s variants. To list products on sale, we can use an element query to find all products with variants that are on sale:
  `twig
  {% set saleProducts = craft.products()
  .hasVariant({
  hasSales: true,
  })
  .all() %}
  `
  Sales only apply to purchasables (or variants in this case). Even if a sale is configured to match based on a product condition, it’s still the variants that it affects. As such, we have to use the hasVariant() method to discover those variants (with hasSales), then restrict the outer product query to only those that own a matching variant.
  The equivalent GraphQL query would look like this:
  `graphql
  {
  saleProducts: products(hasVariant: { hasSales: true }) {
  title
  url
  }
  }
  `
  We could then list those in one place by looping through them:
  `twig
  Products on Sale
  {% for product in saleProducts %}
  <h3>{{ product.title }}</h3>
  {% endfor %}
  `
  This is a simple example, but you could further tailor your query using product and/or variant query parameters to get a list of exactly the products you need.
  For example, to list products with on-sale variants that are also in stock, you would use the hasStock property in the variant query to achieve this:
  `twig
  {% set saleProducts = craft.products()
  .hasVariant({
  hasSales: true,
  hasStock: true,
  })
  .all() %}
  `
  `graphql
  {
  saleProducts: products(hasVariant: { hasSales: true, hasStock: true }) {
  title
  url
  }
  }
  `
  Similarly, the outer product query can be honed—say, to discover all products within a specific category that are on-sale and in-stock:
  `twig
  {% set saleProducts = craft.products()
  .relatedTo(category)
  .hasVariant({
  hasSales: true,
  hasStock: true,
  })
  .all() %}
  `
  Using Catalog Pricing
  The strategy differs in the new catalog pricing system, because there are multiple sources for pricing information, and multiple ways to compare them that might fit different definitions of being “on sale.” A similar conundrum exists with the legacy sales system: a variant would still be considered “on sale” even if a matching promotion didn’t actually discount the price!
  Commerce 5.2.0 introduced a method equivalent with the effective promotional pricing example, below. This will limit the results to variants with a promotional price less than their base price:
  `twig
  {% set hasPromotionalPrice = craft.variants()
  .onPromotion(true)
  .all() %}
  `
  The source of that promotional price is not taken into consideration—it could be present directly on the variant, or come from a pricing rule.](kb__listing-products-on-sale.md "Listing Products on Sale")
- [Upgrading to Craft 3.7

  Craft 3.7 introduced a few changes to be aware of.
  Template Caches and CSS/JavaScript Snippets
  Previously, it wasn’t possible to place {% css %} and {% js %} tags within {% cache %} tags. The dynamic CSS or JavaScript snippet would only get registered the first time the template was loaded, when the cache was still cold. They’d be missing from subsequent page loads, though.
  As of Craft 3.7, any CSS and JavaScript snippets will get stored alongside the cached HTML, and re-registered on subsequent page loads, so there’s no need to work around that limitation any longer.
  This example would have been problematic prior to Craft 3.7 and now gets cached as you might expect:
  `twig
  {% cache %}
  {% css %}
  #article {
  background-color: {{ entry.bgColor.hex }};
  }
  {% endcss %}
  {% endcache %}
  `
  This only works for CSS and JavaScript snippets that render template output directly; not file includes.
  Randomized Database Column Names
  Any new fields you create in Craft 3.7 will get a random string appended to their database column name. For example, instead of field\_text, you’d get something like field\_text\_abcdefgh. This helps avoid potential column name conflicts that arose from time to time. If you have any code that is making assumptions about a field’s column name, you will need to adjust it accordingly. (The random column suffix can be obtained from the field’s columnSuffix setting.)
  Revving Asset URLs
  Previously any assets that belonged to a volume with an expires setting would automatically get revved URLs, to avoid browsers loading outdated asset files from cache when the asset (or a transform or focal point) changed.
  As of Craft 3.7, asset URL revving is determined by the new revAssetUrls config setting, meaning that it’s now available to all assets. If you were relying on the automatic revving behavior, make sure you set that config setting to true in config/general.php.
  `php
  'revAssetUrls' => true,
  `
  Element Editor Slideouts
  Element editor HUDs have been replaced with slideouts in Craft 3.7, which can contain the element’s full field layout (including custom tabs), plus a sidebar that can show additional meta fields and metadata for the element.
  Element types can register meta fields for the sidebar from their metaFieldsHtml() method. For example, the following code prepends a Slug field:
  `php
  protected function metaFieldsHtml(bool $static): string
  {
  return implode('', [
  $this->slugFieldHtml(),
  parent::metaFieldsHtml(),
  ]);
  }
  `](kb__upgrading-to-craft-3-7.md "Upgrading to Craft 3.7")
- [How Much Content Can a Craft Site Have?

  People often ask how much content Craft CMS or Craft Commerce can handle with specific numbers in mind for entries, users, orders, assets, and other element types.
  Craft’s license doesn’t put any limitations on your content, but the number of elements it can support depends on how your site is built, optimized, and hosted.
  Craft CMS and Craft Commerce sites are in the wild, running smoothly with tens of millions of elements, and we’ve seen smaller sites struggle to keep up with modest amounts of traffic. The answer is usually “Yes, Craft can handle that,” but you should take care with a few things that maximize your site’s ability to handle a growing body of content:
  Mind your site count
  Every site you add to an installation is generally a multiplier for the number of queries that need to be executed. A site with complex information architecture may trigger 200 queries for a single site but could generate 800 queries for a four-site installation. Consider your content modeling and propagation along with however many sites you plan to use.
  Craft’s multi-site implementation is meant for a single Craft installation where each site shares some common content (entries, users, templates, etc.) with each other. It is not designed to manage completely independent sites with no relationship to each other under a single Craft installation.
  Craft’s multi-site implementation is not meant to be infinitely scalable. Craft 5 has a soft-limit of 100 sites in a multi-site installation. You probably shouldn’t get anywhere close to that, much less go over it.
  If you want to use Craft’s multi-site capabilities to sell “sites” to multiple clients, you’re probably using the wrong tool for the job.
  Infrastructure and resources
  Make sure you’ve got adequate infrastructure with enough resources for PHP, the database, Redis, and your traffic patterns.
  Utilize smart caching strategies
  The fastest requests are the ones where PHP and a database never get involved. If you can return cached content to a user, you should. Your caching strategies should balance how the site is built and deployed with how it needs to be used by each visitor.
  Tune database indexes
  Tune them specifically for your site’s needs and queries. Craft provides a reasonable set of indexes for the most common types of queries a site might use. On modestly sized sites, any missed opportunities for index tailoring will probably go unnoticed. Those same issues, however, will gradually be amplified as the size of the database grows.
  Be cautious with information architecture
  Content modeling complexity comes with more database queries. These queries may need more time to execute and closer attention to measure and optimize. A Plain Text field, for example, will be vastly more efficient than a Neo field inside a Super Table field in a Matrix field. Your site’s intended scale and resources should factor into content modeling design decisions.
  Eager load your data
  Eager load your data wherever possible to maximize database query efficiency.](kb__how-much-content-can-a-craft-site-have.md "How Much Content Can a Craft Site Have?")
- [Upgrading to Craft 3.6

  Craft 3.6 introduced a few changes to be aware of.
  PHP 7.2
  Craft 3.6 requires PHP 7.2.5 or later, while previous versions of Craft 3 required PHP 7.0 or later.](kb__upgrading-to-craft-3-6.md "Upgrading to Craft 3.6")
- [Entry Form

  To add an entry form to the front-end of your website, create a template with a form that posts to the entries/save-entry controller action. Creating and editing entries requires an active user session, and the corresponding permissions for the target section.](kb__entry-form.md "Entry Form")
- [Front-End User Accounts

  The Craft control panel provides authentication and permissions systems designed to support content authors in a business or organization with a baseline level of trust.
  When you want to provide a service to users outside that group (say, submitting content via an entry form), it doesn’t usually make sense to give them access to the control panel—either for security reasons, or because it leaves the branded space of your front-end. In these cases, you can set up Craft to use custom templates for public registration and account management.](kb__front-end-user-accounts.md "Front-End User Accounts")
- [Search Form

  The same search features that are available throughout the control panel can be made available to front-end users with a simple HTML form. This guide covers a basic entry search tool—but search works across all of Craft’s element types!
  Search Results
  We’ll start by creating a template to display results. This might sound backwards, but it’ll help inform how we build the form, afterwards!
  Start by creating templates/search.twig, and add this basic entry query and loop:
  `twig
  {# Load entries from all sections (but skip nested entries): #}
  {% set results = craft.entries()
  .section('\*')
  .all() %}
  {% if results is not empty %}
  {% for result in results %}
  <li>{{ result.getLink() }}</li>
  {% endfor %}
  {% else %}
  No results, sorry!
  {% endif %}
  `
  At this stage, the “results” don’t provide any value for the user. Let’s update the query so it reacts to a query string parameter.
  `twig
  {% set query = craft.app.request.getQueryParam('query') %}
  {% set results = craft.entries()
  .section('\*')
  .search(query)
  .all() %}
  {# ... #}
  `
  Capturing the query parameter (query) allows us to pass it to the .search() query method—and make the “no results” state more responsive:
  `twig
  Sorry, we searched high and low for “{{ query }}” but couldn’t find anything!
  `
  In your browser, visit https://my-project.ddev.site/search?query={term}, where {term} is a keyword you would expect to be indexed for entries in your project.](kb__search-form.md "Search Form")
- [RSS and Atom Feeds

  You can add RSS and/or Atom feeds to your site using Twig templates.
  The following examples assume that:
  - You have a global set with the handle globals, which has a Plain Text field a field with the handle siteDescription.
  - You have a section with the handle news, which has a Redactor field with the handle body.
  RSS 2.0 Example](kb__rss-and-atom-feeds.md "RSS and Atom Feeds")
- [Integrating Disqus

  You can add commenting to your site’s entry pages using Disqus.
  To do that, first create an account with Disqus, then go to Admin → Edit Settings → Installation, and click the I don't see my platform listed, install manually with Universal Code link at the bottom of the page.
  Copy the code block on that page, and paste it into your entry’s template, where you want Disqus comments to appear.
  Then find this code, and remove the /\* and \*/ comment delimiters from the beginning and end:
  `js
  /
  var disqus\_config = function () {
  this.page.url = PAGE\_URL; // Replace PAGE\_URL with your page's canonical URL variable
  this.page.identifier = PAGE\_IDENTIFIER; // Replace PAGE\_IDENTIFIER with your page's unique identifier variable
  };
  /
  `
  Finally, replace the PAGE\_URL and PAGE\_IDENTIFIER placeholders with your entry’s canonical URL and a unique identifier for the entry.
  `twig
  var disqus\_config = function () {
  this.page.url = '{{ entry.url }}';
  this.page.identifier = '{{ entry.uid }}';
  };
  `
  That’s it! Your site should now be accepting and displaying comments.](kb__integrating-disqus.md "Integrating Disqus")
- [Troubleshooting Composer Errors

  Why Composer?
  Like any modern PHP application, Craft CMS manages dependencies with Composer. (If you’ve used npm, it’s a similar idea for PHP.)
  If you’re new to package managers in general, Composer may first seem like a cumbersome and frustrating tool because of its tendency to get stuck on incompatibilities and errors. This is actually Composer’s primary benefit; it exposes software conflicts before updates are applied, rescuing clients, customers, and visitors from errors that never had a chance to happen in production.
  What Composer Does
  Composer looks for a valid composer.json file that describes the PHP packages you intend to use in your project—that’s what the all-important require section is for, while require-dev describes a subset of items meant strictly for development and testing rather than production use.
  These packages will be installed in your project’s vendor/ directory, and you’ll see more items there than you specified in your composer.json file because each of your required packages may also require dependencies of its own. Managing all these packages and requirements safely is exactly the problem Composer is designed to solve.
  When you run composer update, composer traverses the complex web of dependencies to update packages according to your constraints and those of every other dependency in the tree. If there are no conflicts, the relevant files in vendor/ are updated and composer.lock is written to record precisely what was downloaded and at what version.](kb__troubleshooting-composer-errors.md "Troubleshooting Composer Errors")
- [Using Events in a Custom Module

  One way to customize Craft’s behavior is by listening to events it emits, and reacting, altering, or suppressing them using your own logic.](kb__custom-module-events.md "Using Events in a Custom Module")
- [Using Local Volumes for Development

  If your project’s assets are stored in remote volumes, such as Amazon S3, Google Cloud Storage, or DigitalOcean Spaces, then you may wish to use a local volume for your development environment—especially if you are working with an intermittent or metered internet connection.](kb__using-local-volumes-for-development.md "Using Local Volumes for Development")
- [Upgrading to Craft 3.5

  Craft 3.5 introduced a few changes to be aware of.
  Control Panel Base URL
  If you have the baseCpUrl config setting set, Craft 3.5 will only allow the control panel to be accessed from that URL, so make sure you notify your content managers accordingly.](kb__upgrading-to-craft-3-5.md "Upgrading to Craft 3.5")
- [Displaying A Category’s Related Entries

  You can fetch the entries related to a given category with a little help from the relatedTo param.
  From your category group’s template, it’d look like this:
  `twig
  {# Fetch all entries related to this category #}
  {% set entries = craft.entries()
  .relatedTo(category)
  .all() %}
  {# Output them #}
  {% for entry in entries %}
  {{ entry.title }}
  {% endfor %}
  `
  If you’re working outside your category template where the category variable isn’t automatically available, first you’ll need to query your desired category:
  `twig
  {# Query a single category with the slug 'my-category' #}
  {% set category = craft.categories()
  .slug('my-category')
  .one() %}
  {# ... Continue with previous example ... #}
  `
  The relatedTo param works the same with a categories field you’ve added to a custom field layout: loop over the categories or pick the one you want, then use it like that first example. From the entry’s template, it might look like this, where myCategoryFieldHandle is the name of the field handle you chose for your custom field:
  `twig
  {# Get first related category from entry’s categories field #}
  {% set category = entry.myCategoryFieldHandle.one() %}
  {# ... Continue with first example ... #}
  `](kb__displaying-entries-related-to-a-category.md "Displaying A Category’s Related Entries")
- [Displaying a Navigation for a Structure Section

  Craft makes it easy to create navigations based on Structure sections. The way you’ll do it depends on whether you want the nav to be flat or multi-level.
  Top Level Only
  If you only want to show entries in the top level of your section, use the level param to find just those top-level entries:
  `twig
  {% set pages = craft.entries().section('pages').level(1).all() %}
  `
  You can now loop through those entries using plain ol’ for-loop:
  `twig
  {% for page in pages %}
  <li>{{ page.getLink() }}</li>
  {% endfor %}
  `
  Multi-Level
  If you want to create a multi-level nav with nested <ul>s, first get the entries you want to show.
  If you want all the section’s entries, do this:
  `twig
  {% set pages = craft.entries().section('pages').all() %}
  `
  You can also just fetch the entries up to a certain level using the level param:
  `twig
  {% set pages = craft.entries().section('pages').level('<= 2').all() %}
  `
  To output the entries as nested <ul>s, use the {% nav %} tag:
  `twig
  {% nav page in pages %}
  <li>
  {{ page.getLink() }}
  {% ifchildren %}
  <ul>
  {% children %}
  </ul>
  {% endifchildren %}
  </li>
  {% endnav %}
  `
  The {% nav %} tag’s syntax mimics the {% for %} tag, with the key addition of the {% ifchildren %}, {% children %}, and {% endifchildren %} sub-tags.
  {% children %} is the only required sub-tag. It tells Craft where to insert any child entries. It will be replaced by the entire contents of your {% nav %}…{% endnav %} tag pair, and it works recursively; if you have three or more levels of entries to loop through, the second level’s {% children %} tag will get swapped out once more with the third level’s entries, and so on.
  {% ifchildren %} and {% endifchildren %} are optional, and allow you to set some HTML that wraps the {% children %} tag, but only if there actually are children.](kb__displaying-a-navigation-for-a-structure-section.md "Displaying a Navigation for a Structure Section")
- [What Dev Mode Does

  Enabling devMode
  devMode is enabled with the general config setting of the same name…
  `php
  use craft\config\GeneralConfig;
  return GeneralConfig::create()
  // ... other settings
  ->devMode(true);
  `
  …or by setting the CRAFT\_DEV\_MODE environment variable:
  `bash
  ... other environment variables
  CRAFT\_DEV\_MODE=true
  `
  It is also on by default for new projects, so that you can use the web-based installer.
  devMode Features
  With devMode enabled, you have access to extra information and tools that make working on your project (or a plugin) easier:
  PHP errors and exceptions will be reported in the browser window, with a complete stack trace and code previews;
  Template syntax errors will be reported in the browser with a preview of the offending template;
  Craft will log the following items for each request (some support in Craft 3, expanded Craft 4):
  Query string variables
  GET query params or POST body data
  Active cookies
  Active session variables
  Multi-line log messages are permitted (Craft 4 and later);
  Info-level messages are written to logs, in addition to those of greater severity;
  PHP warnings and notices are logged (as opposed to just PHP errors and exceptions);
  PHP errors that happen during a request that includes an Accept: application/json header are returned (along with a stack trace) as JSON (Craft 4 and later);
  The Yii debug toolbar can be forced on for the request by sending the X-Debug: enable header;
  Verbose errors are sent when using GraphQL;
  Queue errors are reported more verbosely in the control panel;
  The control panel’s front-end resource files won’t get cached;
  Twig’s dump() function will be enabled;
  Twig’s debug and strict\_variables options will be set to true (see Twig’s Environment Options for more info);
  The global devMode variable in Twig templates is set to true;
  Craft’s graphical setup wizard is enabled;
  To reduce the chance of accidentally leaving devMode enabled, each page of the control panel gets a “caution tape” indicator at the bottom of the left sidebar:](kb__what-dev-mode-does.md "What Dev Mode Does")
- [Creating Templates for Each Individual Entry Type

  If you have a section with multiple Entry Types and you want to give each one its own template, here’s a quick tutorial that shows how you can do it.
  For the purposes of this tutorial, we’ll call our section “Media”, and give it a Template setting of “media/\_entry”. Our section will have three Entry Types: “Audio”, “Photo”, and “Video”.
  First you’ll need to create the actual templates for each Entry Type, as well as the main section template. We’ll put them in a hidden \_types folder alongside media/\_entry.html. Our complete craft/templates/media/ folder might end up looking something like this:
  media/\_entry.html
  media/\_types/audio.html
  media/\_types/photo.html
  media/\_types/video.html
  media/index.html
  Now that we’ve got our templates in place, with the template names matching the Entry Type handles, routing requests to the Entry Type-specific templates will be as simple as an {% include %} tag.
  Here’s media/\_entry.html:
  `twig
  {% include "media/\_types/" ~ entry.type %}
  `
  If you have any entry types that don’t need their own special template, you can create a default template located at media/\_types/default.html, and tell the {% include %} tag to use it as a fallback:
  `twig
  {% include ["media/\_types/" ~ entry.type, "media/\_types/default"] %}
  `
  That’s it! When a request comes in for one of the Media section’s entries, it will get routed to media/\_entry.html, which in turn will include the appropriate Entry Type template (or possibly the fallback template). The entry variable that automatically gets set in media/\_entry.html will also be available to the included templates.](kb__entry-type-templates.md "Creating Templates for Each Individual Entry Type")
- [Including the Entry Type in a Section’s URL Format

  You can tailor your section’s URI Format to include the Entry Type handle simply by adding a {type} tag to it:
  `txt
  media/{type}/{slug}
  `](kb__entry-type-urls.md "Including the Entry Type in a Section’s URL Format")
- [Assigning URLs to Tags

  There is currently no built-in support for giving each tag its own URL like there is with entries. That doesn’t mean you can’t do it yourself, though.
  For the purposes of this guide, let’s say we want our tag URLs to look like example.com/tags/[tag title], and we want those URLs to point to a template located at tags/\_tag.html.
  Create the Route
  First thing’s first: let’s create a new route from \*Settings → Routes\*\* with the following settings:
  URI: tags/( ‘tag’ token )
  Template: tags/\_tag
  Now, incoming requests pointing to example.com/tags/[anything] are going to be routed to our tags/\_tag.html template, and there will be a tag variable predefined, set to whatever is in the second URL segment.
  Create the Template
  The first thing we need to do in our tags/\_tag.html template is fetch the requested tag:
  `twig
  {% set tag = craft.tags().slug(tag).one() %}
  `
  Note: Up until this line, the tag variable will be set to whatever matched our ‘tag’ Route token, but after this line, it will either be a Tag Element or null if no matching tag was found.
  If someone tries to go to the page with an unknown tag title we’ll want to return a 404, so let’s do that:
  `twig
  {% if not tag %}
  {% exit 404 %}
  {% endif %}
  `
  Any template code after that can be sure that tag is set to an actual Tag Element. So what do we do with it? Let’s output a list of entries that are tagged with it:
  `twig
  Entries tagged with “{{ tag.title }}”
  {% set entries = craft.entries().relatedTo(tag).order('title').all() %}
  {% if entries|length %}
  {% for entry in entries %}
  <li>{{ entry.getLink() }}</li>
  {% endfor %}
  {% else %}
  No entries could be found with that tag.
  {% endif %}
  `
  Link to the Tag URLs
  Now that we’re all set up to handle tags URLs, we need to link to them.
  Let’s say we want to output a list of the tags an entry is tagged with, at the bottom of each entry page. And we want to link those tags to their new tag URLs. Here’s how we’d do that, assuming our Tags field has a handle called “tags”:
  `twig
  {% if entry.tags | length %}
  This entry is tagged with:
  {% for tag in entry.tags %}
  <li><a href="{{ siteUrl }}tags/{{ tag.title|url\_encode }}">{{ tag.title }}</a></li>
  {% endfor %}
  {% endif %}
  `
  We’re using the url\_encode filter to ensure the tag title will be URL-safe when it’s output in the link URL.
  Now our site has some nice tag support!](kb__assigning-urls-to-tags.md "Assigning URLs to Tags")
- [Downloading Previous Commerce Versions

  Commerce 3+
  Specific versions of Commerce can be installed by altering the version constraint for craftcms/commerce in your project’s composer.json. Run composer update to resolve, lock, and install the dependencies. Keep in mind that you may also need to change the root Craft version to maintain compatibility!
  Do not manually modify files in your project’s vendor/ directory. They will be wiped out the next time composer install is run.
  Commerce 1 and 2
  You can download previous Commerce versions directly from the Github repository’s tags page. Version numbers can be found in the sidebar on Packagist and used in this pseudo-template to download a ZIP archive:
  https://github.com/craftcms/commerce/archive/refs/tags/{version}.zip
  Note that downloading Commerce releases directly still binds you to its license agreement.](kb__downloading-previous-commerce-versions.md "Downloading Previous Commerce Versions")
- [Displaying Tags that are In Use

  Once you create a tag, it’s in the system whether you delete it later or not. Because of that, outputting a craft.tags() list might include tags that are not actually in use anywhere.
  To output a list of tags that are “in use”, you must first identify what “in use” means. Do you want the tags that are selected by any entry? Or just the tags that are are selected by your News entries? Whatever it is, start by creating a variable that identifies those entries, using craft.entries():
  `twig
  {% set entries = craft.entries()
  .section('news')
  .limit(null)
  .all()
  %}
  `
  From there it’s just a matter of grabbing the tags that are related to those entries:
  `twig
  {% for tag in craft.tags().relatedTo(entries) %}
  <li>{{ tag.title }}</li>
  {% endfor %}
  `](kb__displaying-tags-that-are-in-use.md "Displaying Tags that are In Use")
- [Displaying Breadcrumbs for an Entry

  There are a couple ways to output a list of breadcrumbs for an entry depending on how your site’s built.
  Outputting the Entry’s Ancestors in a Structure Section
  If your entry is within a Structure section and you want to output the actual trail of entries leading up to the current entry, you can do that by looping through the entry’s ancestors:
  `twig
  {% if entry.level > 1 %}
  {% for crumb in entry.getAncestors() %}
  <li>{{ crumb.getLink() }}</li>
  {% endfor %}
  {% endif %}
  `
  Outputting a Custom List of Entries
  If your entry is not within a Structure section, or you want to give it a custom list of breadcrumbs, you can do that by creating an Entries field called “Breadcrumbs”, and assigning it to your entry’s section. After you’ve done that and re-saved your entry with breadcrumb entries selected, you can output your breadcrumbs by looping through that field’s value:
  `twig
  {% if entry.breadcrumbs | length %}
  {% for crumb in entry.breadcrumbs %}
  <li>{{ crumb.getLink() }}</li>
  {% endfor %}
  {% endif %}
  `](kb__displaying-breadcrumbs-for-an-entry.md "Displaying Breadcrumbs for an Entry")
- [Creating an ​“Archive” Page for Entries

  You can create an “Archive” page, with entries grouped by month/year using Craft’s group filter:
  `twig
  {% set allEntries = craft.entries()
  .section('blog')
  .all() %}
  {% for date, entries in allEntries|group("postDate|date('F Y')") %}
  {{ date }}
  {% for entry in entries %}
  <li>{{ entry.getLink() }}</li>
  {% endfor %}
  {% endfor %}
  `
  The group filter takes an array of items—entries, in this case—and groups them based on a common value. In this case we’re grouping them by a common Post Date format, F Y (month name + four-digit year), using the date filter.
  Grouping by Year and then Month
  In the previous example we were only creating one level of headings: a combination of the month name and the year. If you would prefer to group entries by year first, and then by month, you can do that too using a nested group filter:
  `twig
  {% set allEntries = craft.entries()
  .section('blog')
  .all() %}
  {% for year, entriesInYear in allEntries|group("postDate|date('Y')") %}
  {{ year }}
  {% for month, entriesInMonth in entriesInYear|group("postDate|date('F')") %}
  <h3>{{ month }}</h3>
  <ul>
  {% for entry in entriesInMonth %}
  <li>{{ entry.getLink() }}</li>
  {% endfor %}
  </ul>
  {% endfor %}
  {% endfor %}
  `
  Paginating the Archive
  If you have a ton of entries and feel it makes sense to span it across multiple pages, there are two ways you might want to go about that:
  Paginate the entries, so each page gets the same number of resulting entries
  Create yearly archive pages
  Let’s look at each approach.
  Paginating the Entries
  To paginate the entries, we’ll use the paginate tag.
  `twig
  {% set entryQuery = craft.entries()
  .section('blog')
  .limit(100) %}
  {% paginate entryQuery as pageEntries %}
  {% for date, entries in pageEntries|group("postDate|date('F Y')") %}
  <h2>{{ date }}</h2>
  <ul>
  {% for entry in entries %}
  <li>{{ entry.getLink() }}</li>
  {% endfor %}
  </ul>
  {% endfor %}
  {% if paginate.prevUrl %}
  <a href="{{ paginate.prevUrl }}">Previous Page</a>
  {% endif %}
  {% if paginate.nextUrl %}
  <a href="{{ paginate.nextUrl }}">Next Page</a>
  {% endif %}
  {% endpaginate %}
  `
  Yearly Archive Pages
  If you’d prefer to dedicate each page to a full year of entries, you must first create a new route with the following settings:
  Set the URI pattern to whatever you want the URI to look like leading up to the year (e..g blog/archive/), and then click on the year token.
  Set the Template setting to the path to your archive template.
  If your template is publicly accessible (its name doesn’t start with an underscore), the first thing it should do is check to make sure that year has been defined. If it’s not, you have two choices on how to react:
  Just default to the current year:
  `twig
  {% if year is not defined %}
  {% set year = now|date('Y') %}
  {% endif %}
  `
  Redirect to the current year’s URL:
  `twig
  {% if year is not defined %}
  {% redirect 'blog/archive/' ~ now|date('Y') %}
  {% endif %}
  `
  Now let’s output the entries in the year, grouped by month:
  `twig
  {{ year }}
  {% set entriesInYear = craft.entries()
  .section('blog')
  .after(year)
  .before(year+1)
  .all() %}
  {% for month, entries in entriesInYear|group("postDate|date('F')") %}
  {{ month }}
  {% for entry in entries %}
  <li>{{ entry.getLink() }}</li>
  {% endfor %}
  {% endfor %}
  `
  To make this example complete, we’ll need to work in a custom navigation. Chances are you’re going to want to display all years between now and whenever the first entry was published. To do that, first we must fetch the first entry ever:
  `twig
  {% set firstEntryEver = craft.entries()
  .section('blog')
  .order('postDate asc')
  .one() %}
  `
  Now loop through all of the possible years between then and now:
  `twig
  {% for year in now|date('Y') .. firstEntryEver.postDate|date('Y') %}
  <li><a href="{{ url('blog/archive/' ~ year) }}">{{ year }}</a></li>
  {% endfor %}
  `](kb__creating-an-archive-page-for-entries.md "Creating an “Archive” Page for Entries")
- [Updating Redactor Configs for Redactor II

  Craft 2.5 includes “Redactor II”, a major update to the Redactor rich text editor that’s powering Rich Text fields.
  The update introduced breaking changes, so Craft sites with Rich Text fields will need to make the following changes to their Redactor configs, located in craft/config/redactor:
  Editing HTML Code
  If your Redactor config included an "html" value in the "buttons" array, you can remove that, and add a "source" value to the "plugins" array instead.
  `javascript
  // Old:
  "buttons": [ "html" / , ... / ],
  // New:
  "plugins": [ "source" / , ... / ]
  `
  Paragraph Formatting
  If your Redactor config included a "formatting" value in the "buttons" array, you need to rename that to "format".
  `javascript
  // Old:
  "buttons": [ "formatting" / , ... / ]
  // New:
  "buttons": [ "format" / , ... / ]
  `
  Lists
  If your Redactor config included "unorderedlist", "orderedlist", "undent" or "indent" values in the "buttons" array, those can all be replaced with a single "lists" value.
  `javascript
  // Old:
  "buttons": [ "unorderedlist", "orderedlist", "undent", "indent" / , ... / ]
  // New:
  "buttons": [ "lists" / , ... / ]
  `
  Linking to Assets
  If you want to allow editors to create hyperlinks to assets, add a "file" value to your "buttons" array, as “Link to an asset” is no longer an option in the “Link” button menu.
  `javascript
  // Old:
  "buttons": [ "link" / , ... / ]
  // New:
  "buttons": [ "link", "file" / , ... / ]
  `](kb__updating-redactor-configs-for-redactor-ii.md "Updating Redactor Configs for Redactor II")
- [Creating SEO-Friendly Pagination Links

  Google recommends that paginated webpages should have rel="next" and rel="prev" links in the <head> section, to help search engines better understand the content.
  The {% paginate %} tag makes this extremely easy to do.
  Let’s say you have a base layout template with the following code:
  `twig
  <!DOCTYPE html>
  {% block head %}
  <title>{% block title %}{{ siteName }}{% endblock %}</title>
  {% endblock %}
  {% block body %}
  <h1>{{ siteName }}</h1>
  {% endblock %}
  `
  Our goal is to add rel="next" and rel="prev" links within the head block, and your normal paginated content and user-facing navigation within the body block, from an extended template.
  To do that, start by adding your {% paginate %} tag at the top of your extended template, outside any {% block %} tags:
  `twig
  {% extends "\_layout" %}
  {# Set the pagination variables #}
  {% paginate craft.entries().section('news').limit(10) as pageInfo, pageEntries %}
  `
  Now you will be able to access those pageInfo and pageEntries variables anywhere within your template, including within your blocks. So let’s extend the head block to append our SEO-friendly pagination links to it:
  `twig
  {% block head %}
  {{ parent() }}
  {# SEO-friendly pagination links #}
  {% if pageInfo.prevUrl %}{% endif %}
  {% if pageInfo.nextUrl %}{% endif %}
  {% endblock %}
  `
  And then we can extend the body block and loop through pageEntries as usual:
  `twig
  {% block body %}
  {{ parent() }}
  {# Paginated entries #}
  {% for entry in pageEntries %}
  <article>
  <h1><a href="{{ entry.url }}">{{ entry.title }}</a></h1>
  {{ entry.excerpt }}
  <a href="{{ entry.url }}">Continue reading</a>
  </article>
  {% endfor %}
  {# Pagination nav #}
  {% if pageInfo.prevUrl %}<a href="{{ pageInfo.prevUrl }}">Previous Page</a>{% endif %}
  {% if pageInfo.nextUrl %}<a href="{{ pageInfo.nextUrl }}">Next Page</a>{% endif %}
  {% endblock %}
  `](kb__creating-seo-friendly-pagination-links.md "Creating SEO-Friendly Pagination Links")
- [Duplicating a Craft Site

  If you’ve got a Craft site you’d like to use as a starting point for a new Craft project, you can either clone the entire install including its content, or re-use the original site’s structure and configuration leaving it ready for fresh users and content.
  Complete Clone
  To clone an entire site, you’ll need to copy its files and database and give it a new URL.
  Create a database backup of the original site.
  Create a new database for the cloned site, and import the backup you created in the previous step.
  Copy the original project directory to a new one you’ll use for the cloned site.
  Edit the cloned .env and config/general.php files to point to the new database and use the cloned project’s desired URL(s).
  Configure your web server for the new site.
  That’s it! You should have a fully-cloned project, content and all, ready at the new URL you set up.
  Structure Only
  Craft 3.1.0 and higher use project config to store configuration in YAML files. Craft can sync this YAML to replicate the entire project configuration in a new environment—including a fresh Craft install using the same version—without any need for a database dump.
  Make sure Craft and your plugins are all up to date for the original project.
  In the original site’s control panel, go to Utilities → Project Config and press Rebuild. (You can alternatively use php craft project-config/rebuild from your terminal.)
  Create a new database for the cloned site.
  Copy the original project directory to a new one you’ll use for the cloned site. If you’d rather be more selective, at minimum copy composer.json, composer.lock, config/project/\*, craft, web/index.php, .env, and .env.example.
  Edit the cloned .env and config/general.php files to point to the new database and use the cloned project’s desired URL(s).
  Run composer install (not composer update!) for the new site.
  Configure your web server for the new site.
  In your terminal, run php craft setup and follow the prompts to create an admin account and configure basic site settings. Your project config YAML will automatically be applied toward the end of the install process:
  `sh
  (...) > applying existing project config ... done
  > saving the first user ... done
  \*\*\* installed Craft successfully (time: 8s)
  `
  Your cloned site should be all ready for new content.](kb__duplicating-a-craft-site.md "Duplicating a Craft Site")
- [Craft 3.1 Dev Preview Notes

  About Craft 3.1 Dev Preview
  You can read a high level overview of the new features in Craft 3.1 in the announcement.
  How to Install 3.1 Dev Preview
  To install Craft 3.1 Dev Preview, follow these steps:
  Install Craft 3 normally, or use an existing Craft 3 installation.
  Update your craftcms/cms constraint in composer.json to 3.1.x-dev as 3.1.0-alpha.1:
  `json
  "require": {
  "craftcms/cms": "3.1.x-dev as 3.1.0-alpha.1",
  "...": "..."
  }
  `
  Run composer update.
  Once Composer is finished, access your Control Panel and click the “Finish up” button.
  Soft Deletes
  Support for Element Types
  All element types are soft-deletable without any extra effort. However, element types must opt-into being restorable, if desired.
  To make an element type restorable, give it the Restore element action:
  `php
  use craft\elements\actions\Restore;
  // ...
  protected static function defineActions(string $source = null): array
  {
  $action = [];
  // ...
  $actions[] = \Craft::$app->elements->createAction([
  'type' => Restore::class,
  'successMessage' => Craft::t('<plugin-handle>', '<Type> restored.'),
  'partialSuccessMessage' => Craft::t('<plugin-handle>', 'Some <type> restored.'),
  'failMessage' => Craft::t('<plugin-handle>', '<Type> not restored.'),
  ]);
  return $actions;
  }
  `
  With that in place, users will be able to type is:trashed into the search bar on your element index page to see trashed elements, and restore the ones they didn’t mean to delete.
  Support for Other Things
  If your plugin introduces a concept to Craft that isn’t an element type, that too can be soft-deletable by following these steps:
  Create a migration that adds a new dateDeleted column to the database table.
  `php
  public function safeUp()
  {
  $this->addColumn('{{%tablename}}', 'dateDeleted', $this->dateTime()->null()->after('dateUpdated'));
  $this->createIndex(null, '{{%tablename}}', ['tablename'], false);
  }
  `
  If you have an Active Record class for this table, add the SoftDeleteTrait to it.
  `php
  use craft\db\ActiveRecord;
  use craft\db\SoftDeleteTrait;
  // ...
  class MyRecord extends ActiveRecord
  {
  use SoftDeleteTrait;
  // ...
  }
  `
  Update any code that currently calls your record’s delete() method, and have it call softDelete() instead.
  Update any code that deletes rows via Craft::$app->db->createCommand()->delete(), and have it call softDelete() instead.
  Project Config
  How to Enable project.yaml
  Using project.yaml to store your Project Config could have unexpected consequences if you’re not prepared for it, so that feature is disabled by default.
  Before you enable it, make a database backup from your production environment, and restore it on all other environments. That way you can be sure that the UIDs of your sections, fields, etc., are all consistent across environments. (If you don’t have a production environment yet, pick whichever environment has the most recent administrative changes.)
  Once all environments are synced up with the same database backup, open up config/general.php and enable the useProjectConfigFile config setting.
  `php
  return [
  'useProjectConfigFile' => true,
  // ...
  ];
  `
  When to Add Support for Project Config
  Project Config support should only be added to things that only Admin users can edit, which could be considered part of the project’s configuration. For example, sections and custom fields are stored in the project config, but individual entries are not.
  How to Add Support for Project Config
  To add Project Config support to a plugin, the service’s CRUD methods will need to be shifted around a bit.
  CRUD methods should update the Project Config, rather than changing things in the database directly.
  Database changes should only happen as a result of changes to the Project Config.
  Here’s a high level look at what a save action might look like:
  `php
  ┌──────────────────────────────────────────┐
  │ │
  │ Sections::saveSection($recipe) │
  │ │
  └──────────────────────────────────────────┘
  │
  ▼
  ┌──────────────────────────────────────────┐
  │ │
  │ ProjectConfig::set('', $config) │
  │ │
  └──────────────────────────────────────────┘
  │
  ▼
  ┌──────────────────────────────────────────┐
  │ │
  │ Sections::handleChangedSection($event) │
  │ │
  └──────────────────────────────────────────┘
  │
  ▼
  ┌──────────────────────────────────────────┐
  │ │
  │ Command::insert('', '$data) │
  │ │
  └──────────────────────────────────────────┘
  `
  Relevant ProjectConfig Service functions:
  The craft\services\ProjectConfig class provides the API for working with the Project Config. You can access it from your plugin via Craft::$app->projectConfig.
  To add or update an item in the Project Config, use set().
  To Remove an item from the Project Config, use remove().
  To be notified when something is added to the Project Config, use onAdd().
  To be notified when something is updated in the Project Config, use onUpdate().
  To be notified when something is removed from the Project Config, use onRemove().
  These methods work the same regardless of whether the useProjectConfigFile config setting is enabled.](kb__craft-3-1-dev-preview-notes.md "Craft 3.1 Dev Preview Notes")

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
