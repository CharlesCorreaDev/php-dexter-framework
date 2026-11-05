# User defined connections | MyWebSQL

> **Fonte / Source:** https://samnan.github.io/MyWebSQL/docs/connecting-to-database-servers/user-defined-connections/

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

# User defined connections

Starting with version 3.4 and above, MyWebSQL allows a custom database configuration to be defined on the login screen, other than selecting from one of the already defined options. This option is by default disabled when you download and install MyWebSQL, but it can be easily enabled if you want. After you have downloaded and installed MyWebSQL, follow these simple steps to enable custom server option:

- Edit servers.php file in the config folder and find the line that reads:

  ```
  $ALLOW_CUSTOM_SERVERS = FALSE;
  ```

  Edit and change the line to:

  ```
  $ALLOW_CUSTOM_SERVERS = TRUE;
  ```

  Refresh the login page for MyWebSQL and now you will be able to select ‘Custom Server’ option and define the IP/hostname for the database server you want to connect to.
- In order to avoid file system hacks on your server, SQLite database connections are not enabled for custom server option. If you are working on your development machine and would like to allow custom SQLite databases to be managed using MyWebSQL, just open the servers.php file and find this line:

  ```
  $ALLOW_CUSTOM_SERVER_TYPES = "mysql,pgsql";
  ```

  Edit and change the line to:

  ```
  $ALLOW_CUSTOM_SERVER_TYPES = "mysql,pgsql,sqlite";
  ```

  After that you can also use SQLite database connection on login screen using Custom Server option. Also note that you will need to provide the full path to the database file in the ‘Server Name’ box, since SQLite databases are regular files.
