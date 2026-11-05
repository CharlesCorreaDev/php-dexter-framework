# Server Errors | MyWebSQL

> **Fonte / Source:** https://samnan.github.io/MyWebSQL/docs/troubleshooting-guide/server-errors/

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

# Server Errors

Some server packages and a few online hosting providers have a restricted php environment, or missing extensions/features that sometimes cause MyWebSQL to show internal server error when you try to run it in your browser. If you are having such problems, you can try the following fixes to get MyWebSQL working:

- Make sure you have the “bcmath” extension installed. It is normally a part of PHP installation but some linux package managers install PHP without this extension.
- [For versions 3.4 and below only] Edit auth.php file in the config folder and find the line that reads:

  ```
  SECURE_LOGIN=TRUE
  ```

  Edit and change the line to:

  ```
  SECURE_LOGIN=FALSE
  ```

  Now try accessing the url again to see if the fix works for you.  
  If the fix works, it usually means you are missing the “gmp” and/or “openssl” extensions in your php installation. You should try and enable those extensions and set the SECURE\_LOGIN flag to true, as it usually protects from plain password submission hacks over the web.
