# Miscellaneous | MyWebSQL

> **Fonte / Source:** https://samnan.github.io/MyWebSQL/docs/miscellaneous/

---

- [Installation](installation.md)
  - [System requirements](installation__system-requirements.md)
  - [Downloading the package](installation__downloading.md)
  - [Unpacking the archive](installation__unpacking-the-archive.md)
  - [Basic configuration](installation__basic-configuration.md)
  - [Advanced configuration](installation__advanced-configuration.md)
  - [Changing authentication mechanism](installation__changing-authentication-mechanism.md)
- [Connecting to database servers](connecting-to-database-servers.md)
  - [Connecting to a MySQL database server](connecting-to-database-servers__connecting-to-mysql-server.md)
  - [Connecting to PostgreSQL database server](connecting-to-database-servers__connecting-to-postgresql-server.md)
  - [Connecting to SQLite databases](connecting-to-database-servers__connecting-to-sqlite-databases.md)
  - [Defining and selecting multiple servers](connecting-to-database-servers__connecting-to-multiple-servers.md)
  - [User defined connections](connecting-to-database-servers__user-defined-connections.md)
- [Interface Basics](interface-basics.md)
  - [Using Application Menus](interface-basics__using-application-menus.md)
  - [Using context menus](interface-basics__using-context-menus.md)
  - [Performing queries](interface-basics__performing-queries.md)
  - [Performing multiple queries](interface-basics__performing-multiple-queries.md)
  - [Working with the results](interface-basics__working-with-the-results.md)
  - [Editing records](interface-basics__editing-records.md)
  - [Using Keyboard Shortcuts](interface-basics__using-keyboard-shortcuts.md)
- [Database management](database-management.md)
  - [Creating/Editing tables](database-management__creating-editing-tables.md)
  - [Working with tables and views](database-management__working-with-tables.md)
  - [Working with procedures/functions](database-management__working-with-proceduresfunctions.md)
  - [Managing triggers](database-management__managing-triggers.md)
  - [Managing Table Indexes](database-management__managing-table-indexes.md)
  - [Managing Users and Privileges](database-management__managing-users-and-privileges.md)
  - [Exporting Database objects](database-management__exporting-database-objects.md)
  - [Importing Batch Files](database-management__importing-batch-files.md)
  - [Server side Backups](database-management__server-side-backups.md)
- [Customizing the user interface](customizing-user-interface.md)
  - [Confirmation dialogs](customizing-user-interface__confirmation-dialogs.md)
  - [Customizing the main interface](customizing-user-interface__customizing-interface.md)
  - [Customizing object list](customizing-user-interface__customizing-object-list.md)
- [Troubleshooting Guide](troubleshooting-guide.md)
  - [General issues](troubleshooting-guide__general-issues.md)
  - [Garbage output on first run](troubleshooting-guide__garbage-output.md)
  - [Blank screen / login issues](troubleshooting-guide__blank-screen-login-issues.md)
  - [Server Errors](troubleshooting-guide__server-errors.md)
- [Advanced usage](advanced-usage.md)
  - [Using session variables in queries](advanced-usage__using-session-variables-in-queries.md)
  - [Implementing Custom Authentication](advanced-usage__implementing-custom-authentication.md)
- [Tools and utilities](tools-and-utilities.md)
  - [Repair Tables](tools-and-utilities__repair-tables.md)
  - [Process manager](tools-and-utilities__process-manager.md)
  - [Server variables](tools-and-utilities__server-variables.md)
- [Miscellaneous](miscellaneous.md)
  - [Browser related issues and workarounds](miscellaneous__browser-related-issues-and-workarounds.md)
  - [Reviewing changes between versions](miscellaneous__version-changes.md)
  - [Feature Requests and Bug reports](miscellaneous__feature-requests-and-bug-reports.md)
  - [Creating themes](miscellaneous__creating-themes.md)
  - [Adding/changing sql editors](miscellaneous__adding-changing-sql-editors.md)

# Miscellaneous

### [Browser related issues and workarounds](miscellaneous__browser-related-issues-and-workarounds.md "Browser related issues and workarounds")

This section contains a few glitches with browsers and some workarounds in order to get the maximum out of your MyWebSQL experience. Opera The opera browser has a default security mechanism which makes web applications NOT be able to receive right click and context menus events. Since MyWebSQL utilizes the context menu functionality, the menus […]

### [Reviewing changes between versions](miscellaneous__version-changes.md "Reviewing changes between versions")

You can use the following links on the project website to review changes that have taken place in the code and functionality of the application. The changelog describes both functionality updates and code level issues that are resolved in new version. Most of the code related changes are only useful to you if you are […]

### [Feature Requests and Bug reports](miscellaneous__feature-requests-and-bug-reports.md "Feature Requests and Bug reports")

If you would like to submit a feature request of enhancement to MyWebSQL, you are more than welcome to submit it on the sourceforge.net site. If you encounter a bug or a problem while using the application, please do report the same on the sourceforge.net tracker. For your convenience, both links are shown on this […]

### [Creating themes](miscellaneous__creating-themes.md "Creating themes")

Themes provided with MyWebSQL are a good starting point for creating new themes. To create a new theme, follow these steps: Create a copy of any theme inside the ‘themes’ folder with a different name of choice, for example ‘my\_theme’ Edit .css files inside the new theme folder, and search and replace the path to […]

### [Adding/changing sql editors](miscellaneous__adding-changing-sql-editors.md "Adding/changing sql editors")

Starting with version 2.3, MyWebSQL uses configurable sql editors, so that you can add/edit or delete sql editors according to your requirements. The following steps describes how to change the sql editor functionality. The current editor used by MyWebSQL is defined in the ‘config/config.php’ file. Changing the value of the config directive ‘SQL\_EDITORTYPE’ sets the […]
