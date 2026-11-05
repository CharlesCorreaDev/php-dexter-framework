# Working with tables and views | MyWebSQL

> **Fonte / Source:** https://samnan.github.io/MyWebSQL/docs/database-management/working-with-tables/

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

# Working with tables and views

The object list on the left side of screen shows the tables and other database objects in a tree view format. You can expand/collapse the nodes to make up space to view other items in case the database contains lots of tables/views or other objects.

You can click on the tables and views to quickly see records from the table or view in the result pane. If the table more records than the limit specified in the configuration files, then the results pane show previous and next links, along with page numbers so that you can directly go to a particular page instead of using previous/next links.

You can also quickly generate selec/insert and update statements for the selected table by using the appropriate menu commands. After that, edit the generated sql in the sql editor and execute it to complete the operation.

You can use the right click menu to see the creation command for views also. This is particulary useful if you want to alter the view command. Simply drop the view and recreate it with the new command after modifying the original one.
