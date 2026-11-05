# Adding/changing sql editors | MyWebSQL

> **Fonte / Source:** https://samnan.github.io/MyWebSQL/docs/miscellaneous/adding-changing-sql-editors/

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

# Adding/changing sql editors

Starting with version 2.3, MyWebSQL uses configurable sql editors, so that you can add/edit or delete sql editors according to your requirements. The following steps describes how to change the sql editor functionality.

- The current editor used by MyWebSQL is defined in the ‘config/config.php’ file. Changing the value of the config directive ‘SQL\_EDITORTYPE’ sets the editor be used for the application. Possible values are ‘simple’, ‘codemirror’ and ‘codemirror2’. Codemirror is default which provides syntax highlighting and is pretty stable.
- In ‘simple’ mode there is no syntax highlighting and is the fastest mode for sql editor. If you are having problems with syntax highlighted editor, you can switch to the simple one to avoid those issues.
- Codemirror2 is experimental and included for testing purposes. You are welcome to test it out and submit your bug reports.

Alternatively, you can also include a new editor for sql editing (e.g. ACE) using the following steps.

- create a folder inside the ‘js’ folder with the name of your editor. Put all related javascript files inside it.
- copy any one of the existing file inside the ‘lib/editors’ folder, and save in the same folder with the name of the editor (e.g. ‘ace.php’)
- Edit the newly created file and change the editor creation code. Refer to the editor’s documentation to complete this step.
- Edit the config/keys.php file in MyWebSQL installation folder, and add hotkey information for the editor at the end of that file.
- Edit the config/config.php file and change the value of the directive ‘SQL\_EDITORTYPE’ to the name of the new editor
- Now you can reload the MyWebSQL interface in browser to see your editor in action.
- If you require add additional css files to be included for the editor to work properly, you can do so in the file you created in ‘lib/editors’ folder earlier.
