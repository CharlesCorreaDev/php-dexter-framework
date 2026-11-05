# Guides: Troubleshooting | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/troubleshooting

---

Search Knowledge Base

# Troubleshooting Articles

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
  - …set the CRAFT\_DB\_CHARSET and CRAFT\_DB\_COLLATION environment variables, then run db/convert-charset without any arguments (accepting the suggested values when prompted) to apply those settings.](kb__database-character-set-and-collation.md "Database Character Set and Collation")
- [Troubleshooting Composer Errors

  Why Composer?
  Like any modern PHP application, Craft CMS manages dependencies with Composer. (If you’ve used npm, it’s a similar idea for PHP.)
  If you’re new to package managers in general, Composer may first seem like a cumbersome and frustrating tool because of its tendency to get stuck on incompatibilities and errors. This is actually Composer’s primary benefit; it exposes software conflicts before updates are applied, rescuing clients, customers, and visitors from errors that never had a chance to happen in production.
  What Composer Does
  Composer looks for a valid composer.json file that describes the PHP packages you intend to use in your project—that’s what the all-important require section is for, while require-dev describes a subset of items meant strictly for development and testing rather than production use.
  These packages will be installed in your project’s vendor/ directory, and you’ll see more items there than you specified in your composer.json file because each of your required packages may also require dependencies of its own. Managing all these packages and requirements safely is exactly the problem Composer is designed to solve.
  When you run composer update, composer traverses the complex web of dependencies to update packages according to your constraints and those of every other dependency in the tree. If there are no conflicts, the relevant files in vendor/ are updated and composer.lock is written to record precisely what was downloaded and at what version.](kb__troubleshooting-composer-errors.md "Troubleshooting Composer Errors")
- [Troubleshooting Database Connection Issues

  Craft requires a healthy database connection, and the following pointers may help identify and fix common connection issues.
  Troubleshooting a “Craft can’t connect” error
  Trouble connecting to your database may result in one of the following errors:
  Craft CMS can’t connect to the database with the credentials in config/db.php
  Craft can’t connect to the database. Check your connection settings.
  Start by checking the contents of config/db.php, which should indicate what environment variables Craft is checking for its database connection settings. Generally, that file should look something like this and it may be a good idea to update yours if it doesn’t.
  If another developer has customized config/db.php or introduced additional parts to it, you may need to follow their setup instructions instead.](kb__troubleshooting-database-connection-issues.md "Troubleshooting Database Connection Issues")
- [How to Temporarily Disable a Plugin

  If you suspect a plugin is causing issues for your Craft project, you can temporarily disable it from the control panel, or via configuration.
  Control Panel
  Log in to the control panel with an Admin account, and navigate to Settings → Plugins.](kb__disable-a-plugin.md "How to Temporarily Disable a Plugin")
- [Troubleshooting Failed Updates

  There are a few things that can go wrong when updating Craft or installing/updating/removing plugins.](kb__failed-updates.md "Troubleshooting Failed Updates")
- [Troubleshooting ​“index.php” in URLs

  By default, Craft is unsure about whether your server is set up to handle URLs without “index.php”, so it makes an educated guess by sending requests to itself without it and checking the response. It caches the results of its findings for 24 hours, or until Craft’s data caches are cleared.
  While most of the time it works well, there still may be a false negative now and then. The only way to ensure that your site never includes “index.php” in its generated URLs is to explicitly tell it not to.
  You can do that by by opening up craft/config/general.php, and adding this to the array:
  `php
  'omitScriptNameInUrls' => true,
  `
  Once you’ve set omitScriptNameInUrls like this, Craft will take your word for it and stop performing its daily checks.](kb__troubleshooting-index-php-in-urls.md "Troubleshooting “index.php” in URLs")
- [Troubleshooting Unexpected JSON Output

  When you submit a form in Craft, if you’re getting JSON output rather than a normal webpage, chances are you’re hosting with MediaTemple and in your web root’s .htaccess file you have the following code:
  `txt
  AddHandler fcgid-script .php
  Options +ExecCGI
  `
  Comment it out to solve the issue:
  `txt
  AddHandler fcgid-script .php
  Options +ExecCGI
  `](kb__troubleshooting-unexpected-json-output.md "Troubleshooting Unexpected JSON Output")
- [Locating Error Logs and Database Backups

  Error Logs](kb__locating-error-logs-and-database-backups.md "Locating Error Logs and Database Backups")
- [Troubleshooting ​“preg\_​replace\_​callback()” Errors

  There is a known bug between some versions of PHP and the eAccelerator PHP extension that causes the following error:
  `txt
  preg\_replace\_callback(): Requires argument 2, '', to be a valid callback
  `
  If you are seeing this error when attempting to run Craft, you will need to disable the eAccelerator extension in your php.ini file, and then restart your web server.](kb__troubleshooting-preg-replace-callback-errors.md "Troubleshooting “preg_replace_callback()” Errors")
- [Troubleshooting Unsuccessful File Uploads

  If Craft is hanging or timing out while you’re uploading a large file, or if you get the error message “The uploaded file is empty”, you’re probably running into a limitation imposed by your server’s configuration.
  The usual culprits are PHP’s memory\_limit, post\_max\_size and upload\_max\_filesize config settings. Try increasing their values and see if that helps.
  If you’re running into a memory\_limit problem, you can verify that by opening up your craft/storage/runtime/logs folder and looking for a phperrors.log file that has entries similar to this:
  `txt
  [29-May-2014 17:22:29 UTC] PHP Fatal error: Allowed memory size of 33554432 bytes exhausted (tried to allocate 16000001 bytes) in /some/path/to/site/craft/app/vendor/imagine/imagine/lib/Imagine/Gd/Image.php on line 622
  `
  Changing your php.ini file’s memory\_limit setting from something low like 32M to 128M or 256M will fix it.](kb__troubleshooting-unsuccessful-file-uploads.md "Troubleshooting Unsuccessful File Uploads")
- [Troubleshooting ​“504 Gateway Timed Out” Errors

  504 errors indicate that the request timed out. If you get one while updating Craft, it probably means that the Craft update process took longer than your web server is configured to allow PHP scripts to run (usually 30 seconds).
  Craft tries to prevent these errors by calling set\_time\_limit(0);, but that’s not always reliable due to conflicting Apache/Nginx configuration settings, or because PHP is being run through FastCGI.
  If you’re getting 504 error when updating Craft, you can try setting the backupOnUpdate config setting to false, and start backing up manually instead.
  If you’re still having trouble, try contacting your host and see if there’s anything you can do to increase your server’s allowed execution time.](kb__504-gateway-timed-out-error.md "Troubleshooting “504 Gateway Timed Out” Errors")
- [How Craft Determines the Site URL

  Craft can typically infer the requested URL and the requested site based on your server’s configuration. In some rare cases, you may need to explicitly set the CRAFT\_WEB\_URL bootstrap variable. Complete URLs are not stored in the database, which means launching a site (or changing domains) is only ever a matter of adjusting config and clearing caches.
  The most stable and secure way to set URLs for your sites is using environment variables.
  Site Settings
  When you create a new project, Craft looks for (or sets) a PRIMARY\_SITE\_URL variable in your .env file. Our recommended local development environment DDEV automatically populates this variable with the project’s hostname, like https://my-project.ddev.site. A reference to that variable is then stored in project config, and is visible to administrators by navigating to Settings → Sites → Default (or whatever the name of your primary site is).
  When it comes time to deploy, all you need to do is replace that URL in the live .env file:
  `bash
  PRIMARY\_SITE\_URL="https://my-domain.com"
  `
  Multi-site URLs
  Craft also uses the hostname and path to determine which site a request will be handled by. Sites are differentiated by domains, subdomains, and paths—so it’s important that each of them is defined consistently, across requests. Ambiguous settings for multiple sites may cause a request to be served in the wrong context.
  For this reason, we recommend using environment variables to define each site’s Base URL. You don’t need a separate variable for every site—but at least one for each hostname you expect the installation to be accessible from. Let’s look at an example:
  `bash
  GLOBAL\_SITE\_URL="https://acme-labs.com"
  CORPORATE\_SITE\_URL="https://corp.acme-labs.com"
  B2B\_SITE\_URL="https://b2b.acme-labs.com"
  `
  We can then create variations on these URLs to make content available in different languages:
  | Site | Language | Base URL |
  | ------------ | -------- | ----------------------------- |
  | Global | English | https://acme-labs.com |
  |   | Spanish | https://acme-labs.com/es |
  |   | Chinese | https://acme-labs.com/cn |
  | Corporate | English | https://corp.acme-labs.com |
  |   | Spanish | https://corp.acme-labs.com/es |
  |   | Chinese | https://corp.acme-labs.com/cn |
  | Distributors | English | https://b2b.acme-labs.com. |
  |   | Spanish | https://b2b.acme-labs.com/es |
  |   | Chinese | https://b2b.acme-labs.com/cn |
  In this table, the Spanish corporate site (https://corp.acme-labs.com/es) might have a Base URL setting of $CORPORATE\_SITE\_URL/es.
  The @web Alias
  Craft defines a number of aliases corresponding to commonly-accessed paths and URLs.
  @web is intended to reflect the current hostname, and in most cases is determined automatically. For multi-site projects that use different domains or subdomains, this means that @web may evaluate to different hostnames or URLs, depending on which site was requested. It will only include a path if the index.php file serving the request is located in a folder beneath the web root.](kb__how-craft-determines-the-site-url.md "How Craft Determines the Site URL")
- [Troubleshooting Missing CSS/​JS in the Control Panel

  You’re trying to install Craft for the first time and the installer isn’t loading CSS or JavaScript. Or maybe you view your browser’s inspector and the response to the CSS/JS files are all garbled.
  Chances are you have zlib.output\_compression enabled in your php.ini file and you need to disable it. This is most likely related to this PHP bug report.
  Even if you’re not getting garbled CSS/JS in the response, you might see this error as in your browser or in the response for the CSS/JS:
  `txt
  Failed to delete buffer zlib output compression
  `
  The fix for that error is the same.
  You will probably have to restart your web server for any changes to the php.ini file to take affect.](kb__troubleshooting-missing-css-js-in-the-control-panel.md "Troubleshooting Missing CSS/JS in the Control Panel")
- [Troubleshooting an Error when Installing Craft on DreamHost

  If you’re trying to install Craft on a DreamHost shared hosting account and keep getting the "Oops" screen before it finishes, you’re not alone.
  Craft’s install process usually takes anywhere between 10-20 seconds on the vast majority of server configurations. But for whatever reason, Craft’s SQL queries can take 15-20 times longer on some DreamHost shared hosting servers. When this occurs, PHP will generally time out, resulting in an incomplete Craft installation.
  You can try contacting DreamHost and explain to them what you’re seeing. We’ve seen some occurrences where they will “fix” your shared hosting MySQL instance and speed up the queries, but more often than not, they’ll request that you move to a dedicated VPS plan.](kb__troubleshooting-an-error-when-installing-craft-on-dreamhost.md "Troubleshooting an Error when Installing Craft on DreamHost")
- [Resolving Failed Queue Jobs

  This article walks through common causes and troubleshooting tips for failed Craft queue jobs.](kb__resolving-failed-queue-jobs.md "Resolving Failed Queue Jobs")
- [Troubleshooting Email Errors

  Craft may not be able to send email for a number of reasons. Let’s look at some common causes and methods for troubleshooting them.
  First, we need to get Craft to attempt to send an email to narrow down where the problem is. In the control panel, go to Settings → Email, scroll down to the bottom of the page, and press Test.](kb__troubleshooting-email-errors.md "Troubleshooting Email Errors")
- [Backing Up Your Database With MAMP

  Craft relies on the mysqldump command being available to the PHP process (via exec()) to create database backups.
  This is the most reliable way to dump a database (large or small) without hitting resource limits. The problem for MAMP users, however, is that its mysql and mysqldump executables are not available to the PHP process during HTTP requests.
  Craft provides two configuration settings to help with this: backupCommand and restoreCommand.
  You can set these directly via environment overrides, so there’s no need to touch general.php or any other project files.
  `bash
  CRAFT\_BACKUP\_COMMAND="/Applications/MAMP/Library/bin/mysql80/bin/mysqldump -h localhost -u root -proot --add-drop-table --comments --create-options --dump-date --no-autocommit --routines --set-charset --triggers --single-transaction --no-data --result-file=\"{file}\" {database} && /Applications/MAMP/Library/bin/mysql80/bin/mysqldump -h localhost -u root -proot --add-drop-table --comments --create-options --dump-date --no-autocommit --routines --set-charset --triggers --no-create-info --ignore-table={database}.assetindexdata --ignore-table={database}.assettransformindex --ignore-table={database}.cache --ignore-table={database}.sessions --ignore-table={database}.templatecaches --ignore-table={database}.templatecachecriteria --ignore-table={database}.templatecacheelements --ignore-table={database}.templatecachequeries {database} >> \"{file}\""
  CRAFT\_RESTORE\_COMMAND="/Applications/MAMP/Library/bin/mysql80/bin/mysql -h localhost -u root -proot {database} < \"{file}\""
  `
  Copy and paste these variables exactly as they appear above into your .env file, each on their own line. If you changed your MySQL password via MAMP’s preferences, find and replace -proot with -pyourpassword.
  These commands replace Craft’s defaults by using the full filesystem path to MAMP’s own mysql and mysqldump executables (/Applications/MAMP/Library/bin/mysql80/bin/mysqldump).](kb__database-backups-with-mamp.md "Backing Up Your Database With MAMP")
- [Why Doesn’t Craft Send Emails?

  Craft needs to send some important system emails now and then. These include (but are not limited to)…
  A password reset email;
  An activation email to a newly added user;
  A notification that a visitor has submitted a contact form;
  An order confirmation or other notification;
  Out-of-the-box, Craft only knows how to use your server’s sendmail program. It may appear as though emails are being sent when they are actually stuck in a misconfigured system outbox. Take a moment to review some general troubleshooting tips for email, then follow these steps to reconfigure your mailer.](kb__why-doesnt-craft-send-emails.md "Why Doesn’t Craft Send Emails?")
- [Using PHP on the Command Line with MAMP

  MAMP is a popular local development environment for macOS users.
  If you are new to Craft and don’t have an existing local development environment, we strongly recommend that you check out DDEV!
  Background
  Craft is primarily used over HTTP, but it also has a command-line interface (or “CLI”) for common developer tasks like clearing caches, running migrations, or rebuilding search indexes. Accessing the application in both ways may require some configuration.
  Using MAMP’s PHP Executable in Terminal
  When you run php on the command line, it uses whichever PHP executable your shell finds among the configured $PATHs. This is often not one bundled with MAMP; it could be the macOS default, installed via Brew, or none at all. As a result, the terminal’s PHP version (and php.ini settings like memory\_limit) can be different than the one MAMP uses for HTTP requests.](kb__mamp-php-composer-cli.md "Using PHP on the Command Line with MAMP")

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
