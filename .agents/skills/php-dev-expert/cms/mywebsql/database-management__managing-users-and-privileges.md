# Managing Users and Privileges | MyWebSQL

> **Fonte / Source:** https://samnan.github.io/MyWebSQL/docs/database-management/managing-users-and-privileges/

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

# Managing Users and Privileges

The ‘User Manager’ tool, which can be accessed from the main menu option ‘Tools’, can be used to add / edit / delete database users and manage their access rights on the database server.

#### Database Users

Each database user is identified by its user name and hostname. It is possible for one user name to have multiple host names, which allows the same user to be setup with different access rights depending on the host from where the database connection is initiated.

The hostnames ‘%’, ‘localhost’ and ‘127.0.0.1’ represent special hostnames. For all other hosts, you can specify either the ip address or the machine name of the host.  
For example, If you would like to create a user called ‘manager’ that should be allowed access from any host, the host should be set to ‘%’ (without the quotes).

The host name ‘localhost’ and ‘127.0.0.1’ represents the local machine on which the database server resides. For root / admin users, this is the default host name so that the database access by the root is restricted to the server machine for security reasons.

#### Access Rights

Each database user has a set of ‘Global’ rights and specific access right to each database on the server and its objects. Privilege is a complimentary word for the access rights given to a user.

The global privileges enable a user to access all databases with that particular privileges on the server. For example, a user with the global ‘select’ privilege will be able to perform select queries on all tables in all databases. Similarly, a user with the global privilege of ‘Super’ is able to perform everything that a root user can. For complete details of each global privilege and its meaning, please refer to the mysql documentation.

Database privileges are normally assigned to users created for accessing a particular database on the server. Similar to the set of global privileges, there is a set of privileges per database that can be assigned to the user. For example, a user can be granted full read access to a database, but denied access to any changes by giving the user ‘select’ privilege on that database.

To see the complete list and the meaning of each database privilege, please refer to the mysql documentation.
