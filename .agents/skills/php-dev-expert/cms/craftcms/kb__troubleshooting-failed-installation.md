# Troubleshooting a Failed Craft Installation | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/troubleshooting-failed-installation

---

Search Knowledge Base

# Troubleshooting a Failed Craft Installation

This article covers common ways a Craft installation might go wrong with suggestions to help get you back on track.

## 503 Unavailable [#](#503-unavailable "Direct link to 503 Unavailable")

You may be seeing an error page like this in your browser:

![](https://craftcms.com/dist/images/icon-loading.png)

![503]()

HTTP 503 – Service Unavailable error message.

If that’s the case, Craft probably isn’t installed yet so you’ll need to visit the installer URL at `/index.php?p=admin/install` or `/admin/install`.

If your full site URL is `https://mysite.test`, for example, you’ll need to visit `https://mysite.test/index.php?p=admin/install` instead.

## 404 Not Found [#](#404-not-found "Direct link to 404 Not Found")

You may be seeing an error page like this in your browser:

![](https://craftcms.com/dist/images/icon-loading.png)

![Nginx 404]()

Error page from the nginx web server.

A 404 error typically occurs when an important connection isn’t being made to the web server. Your 404 page may look different, but a reference to `nginx` or `Apache` will confirm the error is coming from your web server.

![](https://craftcms.com/dist/images/icon-tip.svg)

The error page’s formatting can be a hint about where the error is coming from. Unlike this example screenshot from nginx, Craft’s error messages typically have some nicer formatting applied like the [503 example](#503-unavailable) above.

### URL Rewrites [#](#url-rewrites "Direct link to URL Rewrites")

Craft can use nice-looking URLs that sometimes don’t work because of the server’s configuration. If you’re attempting to visit `https://mysite.test` and getting a 404, try `https://mysite.test/index.php`.

If `https://mysite.test/admin/install` doesn’t work, try `https://mysite.test/index.php?p=admin/install` instead. (This is the equivalent URL without relying on web server support for the cleaner-looking version.)

![](https://craftcms.com/dist/images/icon-tip.svg)

If changing the URL format worked, you’ll need to investigate your nginx or Apache configuration for the site. Apache needs `mod_rewrite` to be enabled, and some hosting environments require [using `RewriteBase`](https://stackoverflow.com/a/21348047) to fix the relative beginning point of URL customization.

### Server Configuration [#](#server-configuration "Direct link to Server Configuration")

Craft is a PHP application that runs dynamically, meaning your web server needs to be able to take the browser request and pass it off to Craft properly.

One way you can quickly check your web server is to give it a much simpler job: add a plain text file to the web root and see if you can access it in your browser.

If your site’s webroot is `web/`, create a file like `web/hi.txt` in your text editor, add `Hey there, you!` or something friendly, and then try accessing it at `https://mysite.test/hi.txt`.

If you see the message you wrote to yourself in your browser, the web server is at least able to serve static files but may have some other problem with PHP or URLs meant for Craft.

If you don’t see your test message, your site setup needs to be configured properly before Craft can do anything.

One last thing you can try if you’re unable to access Craft from a web browser is to run `php craft` from your terminal. This probably won’t point to a specific issue, but you could get different information between the browser and terminal that could help narrow the cause.

Be sure to check Craft’s logs at `storage/logs/` for any additional clues.

If visiting your site in a browser prints PHP source, lists files in your web root, or downloads a file, you’ll definitely need to troubleshoot your local environment configuration and make sure it can run PHP and meet Craft’s [requirements](https://craftcms.com/docs/3.x/requirements.html).

## Database Connection Error [#](#database-connection-error "Direct link to Database Connection Error")

You may see an error like this:

![](https://craftcms.com/dist/images/icon-loading.png)

![Database Connection Error]()

Database Connection Error – craft\errors\DbConnectException

While the details on the page may look different, the problem is that Craft isn’t able to use the database settings you’ve provided. The correct settings will depend on your environment, and looking closely at the page’s error output might identify the culprit.

For example, a message like this indicates the `oli` database user’s password is wrong:

> FATAL: password authentication failed for user "oli"

This message might indicate that the database server name is incorrect:

> (...) could not connect to server: Connection refused

Make sure you can connect to your database with a GUI client [or a quick test script](https://gist.github.com/mattstein/c4a42e16989bcd488ce969d96fc8598b), and update any Craft database settings that are incorrect.

![](https://craftcms.com/dist/images/icon-tip.svg)

If you’re using a container-based development environment like [DDEV](https://ddev.com), keep in mind the settings Craft needs may differ from those you’d use connecting to a GUI like [TablePlus](https://tableplus.com) since those are internal vs. external connections.

## Unexpected Installer [#](#unexpected-installer "Direct link to Unexpected Installer")

You might have installed Craft only to end up back at the installer when you expected the control panel:

![](https://craftcms.com/dist/images/icon-loading.png)

![Installer]()

The first step of Craft’s web-based installer.

This can happen when Craft has a valid database connection, but not to the data you’d expect.

Make sure your settings are for the right database and engine if you have more than one running.

If you’re setting up a Craft install using an existing database dump, make sure you didn’t forget to add or remove a relevant `DB_TABLE_PREFIX` setting.

## Files Missing or Not Writable [#](#files-missing-or-not-writable "Direct link to Files Missing or Not Writable")

You may get an unstyled error from Craft if it failed early in its startup attempt:

> [file or directory] doesn't exist or isn't writable by PHP. Please fix that.

Your error will have an actual name in place of the `[file or directory]`, and you may encounter several until Craft is able to work with the files and directories it needs to get started.

This usually has to do with permissions since Craft will attempt to create most of the files it needs when it can. Double check [step 2 of the installation instructions](https://craftcms.com/docs/3.x/installation.html#step-2-set-the-file-permissions).

## Further Reading [#](#further-reading "Direct link to Further Reading")

Knowledge Base articles:

- [Resolving PHP Requirement Conflicts](kb__resolving-php-requirement-conflicts.md)
- [Troubleshooting Composer Errors](kb__troubleshooting-composer-errors.md)

Stack Exchange:

- [Getting $craftPath error on server trying to get Craft running](https://craftcms.stackexchange.com/questions/2576/getting-craftpath-error-on-server-trying-to-get-craft-running)
- [Craft 3 via composer with Mamp Pro](https://craftcms.stackexchange.com/questions/23064/craft-3-via-composer-with-mamp-pro)
- [Problem setting security key when installing Craft 3](https://craftcms.stackexchange.com/questions/23391/problem-setting-security-key-when-installing-craft-3)
- [Blank screen for /admin and public site with Craft 3](https://craftcms.stackexchange.com/questions/23854/blank-screen-for-admin-and-public-site-with-craft-3)
- [How do I get past this MySQL error installing Craft 3 using CLI](https://craftcms.stackexchange.com/questions/23429/how-do-i-get-past-this-mysql-error-installing-craft-3-using-cli)
- [Craft install via composer: install to public\_html?](https://craftcms.stackexchange.com/questions/27417/craft-install-via-composer-install-to-public-html)

Applies to
Craft CMS 4 and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
