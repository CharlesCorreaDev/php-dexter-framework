# Changing authentication mechanism | MyWebSQL

> **Fonte / Source:** https://samnan.github.io/MyWebSQL/docs/installation/changing-authentication-mechanism/

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

# Changing authentication mechanism

MyWebSQL supports three basic and one custom method of authentication. In order to change the authentication type, please manually edit the file ‘config/auth.php’ in the installation folder.

Change the directive ‘AUTH\_TYPE’ to either of these possible values to change your authentication mechanism.

These methods are described below:

**Authentication type: NONE**

When AUTH\_TYPE is set to NONE, the application assumes the authentication is already confirmed and uses the predefined values in the other three configuration directives in auth.php, in order to connect to the database server. These directives are AUTH\_SERVER, AUTH\_LOGIN and AUTH\_PASSWORD.

Please note that if either of the three configuration directives are missing on invalid, the browser will display an error page containing an error message that database connection has failed.

This settings is usually required for demonstration purposes, where a single database with a few tables are required to be shown to allow user to use MyWebSQL in a test environment. The same setting is used on the MyWebSQL demo site also. NEVER set AUTH\_TYPE to NONE on any production server as it will expose the database completely to anyone who has access to the application url.

**Authentication type: BASIC**

When authentication is set to BASIC, the application uses the built-in browser user authentication dialog to ask the user for a username and password. The AUTH\_SERVER directive defined in the configuration file is used to connect to that database server, using the username and password provided by the user. If authentication fails, user is repeatedly asked for the credentials until a successful connection is made to database, or the browser times out the operation. On production servers, this is the least secure method of authentication as the credentials are sent over the network with each request, and should only be used if you are having problems with other authentication methods to work.

**Authentication type: LOGIN**

This is the default authentication mechanism in MyWebSQL and should be used on production servers.

When authentication is set to LOGIN, the application shows the username and password form to the user when it is first started in the browser. Just like the BASIC authentication method. In this case, one of the following will occur:

If you have defined at least one server configuration in ‘config/servers.php’, then the selected server from that list is used as the database connection.

If no server configuration is found in ‘config/servers.php’, then the AUTH\_SERVER directive defined in the ‘config/auth.php’ is used to connect to the database server defined in the same file, using the username and password provided by the user.

In either of the above case, if authentication fails, user is shown the login screen again with the error message.

**Authentication type: CUSTOM**

When authentication is set to CUSTOM, the application uses a custom made (coded) driver for authentication users. To see the details about implementing custom authentication, please [view this page](advanced-usage__implementing-custom-authentication.md).
