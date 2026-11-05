# Dev Docs · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Dev-Docs

---

# Roundcube Documentation

## Code Layout

### Controller

- The controller (index.php) creates an instance of the main application class `rcmail` which is a singleton
- Configuration is read from `config/config.inc.php` and `config/defaults.inc.php`
- Login to the IMAP server (-> user authentication) is triggered from index.php
- Basic sequence: `rcmail::get_instance()` -> `rcmail::load_gui()` -> `new rcmail_template()` -> `rcmail_template::send()`

### Tasks & Actions

- index.php limits tasks to set list
- and includes a specific PHP file (`from program/steps/<taskname>/`) for the requested action

### View

- Templates for each task/action are stored in `skins/default/templates`
- In templates `<roundcube: />` tokens will be replaced with dynamic content by the `rcmail_template` class
- All absolute paths (starting with "/") within the templates will be altered to point to the skin directory
- AJAX requests are handled by the rcube\_json\_output class which is created by `rcmail::init_json()`

[Image(mvc\_diagram.png)](wiki__Image_28mvc_diagram.png_29.md)

## Directory structure

The root folder of a Roundcube installation contains the following folders:

- `config/`
  Home of the local configurations files
- `program/`
  All application files are stored in this folder.
  These files will be replaced when upgrading the installation.
- `program/js/`
  Client JavaScript files
- `program/lib/Roundcube`
  The Roundcube framework classes which can be used outside the webmail package
- `program/lib/*`
  External libraries used for Roundcube
- `program/include/`
  Webmail-specific classes and core functions
- `program/localization/`
  Contains subfolders with localization files.
- `program/steps/`
  Include files for every task/action
- `plugins/`
  Container for all plugins. Each plugins is represented in a separate subfolder
- `bin/`
  Commandline tools and shell scripts for internal use and maintainance
- `logs/`
  Contains log files. This folder has to be writable for the webserver.
- `temp/`
  Location of temporary saved files such as attachments and cache files
  This folder has to be writable for the webserver.
- `skins/`
  Contains skin subfolders
- `SQL/`
  SQL files for database initialization and updates. Only needed for installations or upgrades.

## Important files

All requests from the client are sent to *index.php*. This index file - together with the `rcmail` class loads all core components and establishes connections to the database and the IMAP server. It analyzes the request and then includes one of the step files. Direct access to `config`, `log` and `temp` folders should not be permitted.

For Apache webservers which allow local overrides, the `.htaccess` file includes some PHP configuration settings as well as file access directives. More `.htaccess` files are located in the protected folders mentioned above.

## Code Documentation

For a detailed documentation please refer to the [Online PHPDoc](http://docs.roundcube.net/doc/phpdoc/).
