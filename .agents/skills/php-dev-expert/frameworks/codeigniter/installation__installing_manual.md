# Manual Installation — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/installing_manual.html

---

# Manual Installation[](#manual-installation "Link to this heading")

The [CodeIgniter 4 framework](https://github.com/codeigniter4/framework)
repository holds the released versions of the framework.
It is intended for developers who do not wish to use Composer.

Develop your app inside the **app** folder, and the **public** folder
will be your public-facing document root. Do not change anything inside the **system**
folder!

Note

This is the installation technique closest to that described
for [CodeIgniter 3](https://codeigniter.com/userguide3/installation/index.html).

## [Installation](#id1)[](#installation "Link to this heading")

Download the [latest version](https://github.com/CodeIgniter4/framework/releases/latest),
and extract it to become your project root.

Note

Before v4.4.0, CodeIgniter autoloader did not allow special
characters that are illegal in filenames on certain operating systems.
The symbols that can be used are `/`, `_`, `.`, `:`, `\` and space.
So if you installed CodeIgniter under the folder that contains the special
characters like `(`, `)`, etc., CodeIgniter didn’t work. Since v4.4.0,
this restriction has been removed.

## [Initial Configuration](#id2)[](#initial-configuration "Link to this heading")

After installation, a few initial configurations are required.
See [Initial Configuration](installation__running.md#initial-configuration) for the detail.

## [Upgrading](#id3)[](#upgrading "Link to this heading")

Download a new copy of the framework, and then replace the **system** folder.

Read the [upgrade instructions](installation__upgrading.md) and [change log](changelogs__index.md),
and check Breaking Changes and Enhancements.

## [Pros](#id4)[](#pros "Link to this heading")

Download and run.

## [Cons](#id5)[](#cons "Link to this heading")

You need to check for file changes in the **project space**
(root, app, public, tests, writable) and merge them by yourself.

## [Structure](#id6)[](#structure "Link to this heading")

Folders in your project after set up:

- app, public, tests, writable, system

## [Translations Installation](#id7)[](#translations-installation "Link to this heading")

If you want to take advantage of the system message translations,
they can be added to your project in a similar fashion.

Download the [latest version of them](https://github.com/codeigniter4/translations/releases/latest).
Extract the downloaded zip, and copy the **Language** folder contents in it
to your **app/Languages** folder.

This would need to be repeated to incorporate any updates
to the translations.
