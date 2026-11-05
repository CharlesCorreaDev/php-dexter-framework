# Joomla! CMS 2.5 API » \CMS.Library

> **Fonte / Source:** https://api.joomla.org/cms-2.5/packages/CMS.Library.html

---

## Classes

### JSchemaChangeitem

Each object represents one query, which is one line from a DDS SQL query.

This class is used to check the site's database to see if the DDL query has been run.
If not, it provides the ability to fix the database by re-running the DDL query.
The queries are parsed from the update files in the folder
administrator/components/com\_admin/sql/updates/<database>.
These updates are run automatically if the site was updated using com\_installer.
However, it is possible that the program files could be updated without udpating
the database (for example, if a user just copies the new files over the top of an
existing installation).
This is an abstract class. We need to extend it for each database and add a
buildCheckQuery() method that creates the query to check that a DDL query has been run.

[« More »](api_cms-2.5__classes__JSchemaChangeitem.md)

### JSchemaChangeitemmysql

Checks the database schema against one MySQL DDL query to see if it has been run.

This class is used to check the site's database to see if the DDL query has been run.
If not, it provides the ability to fix the database by re-running the DDL query.
The queries are parsed from the update files in the folder
administrator/components/com\_admin/sql/updates/<database>.
These updates are run automatically if the site was updated using com\_installer.
However, it is possible that the program files could be updated without udpating
the database (for example, if a user just copies the new files over the top of an
existing installation).
This is an abstract class. We need to extend it for each database and add a
buildCheckQuery() method that creates the query to check that a DDL query has been run.

[« More »](api_cms-2.5__classes__JSchemaChangeitemmysql.md)

### JSchemaChangeitemsqlazure

Checks the database schema against one MySQL DDL query to see if it has been run.

This class is used to check the site's database to see if the DDL query has been run.
If not, it provides the ability to fix the database by re-running the DDL query.
The queries are parsed from the update files in the folder
administrator/components/com\_admin/sql/updates/<database>.
These updates are run automatically if the site was updated using com\_installer.
However, it is possible that the program files could be updated without udpating
the database (for example, if a user just copies the new files over the top of an
existing installation).
This is an abstract class. We need to extend it for each database and add a
buildCheckQuery() method that creates the query to check that a DDL query has been run.

[« More »](api_cms-2.5__classes__JSchemaChangeitemsqlazure.md)

### JSchemaChangeitemsqlsrv

Checks the database schema against one MySQL DDL query to see if it has been run.

This class is used to check the site's database to see if the DDL query has been run.
If not, it provides the ability to fix the database by re-running the DDL query.
The queries are parsed from the update files in the folder
administrator/components/com\_admin/sql/updates/<database>.
These updates are run automatically if the site was updated using com\_installer.
However, it is possible that the program files could be updated without udpating
the database (for example, if a user just copies the new files over the top of an
existing installation).
This is an abstract class. We need to extend it for each database and add a
buildCheckQuery() method that creates the query to check that a DDL query has been run.

[« More »](api_cms-2.5__classes__JSchemaChangeitemsqlsrv.md)

### JSchemaChangeset

Contains a set of JSchemaChange objects for a particular instance of Joomla.

Each of these objects contains a DDL query that should have been run against
the database when this database was created or updated. This enables the
Installation Manager to check that the current database schema is up to date.

[« More »](api_cms-2.5__classes__JSchemaChangeset.md)
