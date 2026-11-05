# Query Helper Methods — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/database/helpers.html

---

# Query Helper Methods[](#query-helper-methods "Link to this heading")

## [Information From Executing a Query](#id1)[](#information-from-executing-a-query "Link to this heading")

### [$db->insertID()](#id2)[](#db-insertid "Link to this heading")

The insert ID number when performing database inserts.

Note

If using the PDO driver with PostgreSQL, or using the Interbase
driver, this function requires a $name parameter, which specifies the
appropriate sequence to check for the insert id.

### [$db->affectedRows()](#id3)[](#db-affectedrows "Link to this heading")

Displays the number of affected rows, when doing “write” type queries
(insert, update, etc.).

Note

In MySQL “DELETE FROM TABLE” returns 0 affected rows. The database
class has a small hack that allows it to return the correct number of
affected rows. By default this hack is enabled but it can be turned off
in the database driver file.

### [$db->getLastQuery()](#id4)[](#db-getlastquery "Link to this heading")

Returns a Query object that represents the last query that was run (the query string, not the result).

## [Information About Your Database](#id5)[](#information-about-your-database "Link to this heading")

### [$db->countAll()](#id6)[](#db-countall "Link to this heading")

Permits you to determine the number of rows in a particular table.
Submit the table name in the first parameter. This is part of Query Builder.

```
<?php

echo $db->table('my_table')->countAll();
// Produces an integer, like 25
```

### [$db->countAllResults()](#id7)[](#db-countallresults "Link to this heading")

Permits you to determine the number of rows in a particular result set.
Submit the table name in the first parameter. This is part of Query Builder.

```
<?php

echo $db->table('my_table')->like('title', 'match')->countAllResults();
// Produces an integer, like 5
```

### [$db->getPlatform()](#id8)[](#db-getplatform "Link to this heading")

Outputs the database platform (DBDriver) you are running (MySQLi, SQLSRV, Postgre,
etc…):

```
<?php

echo $db->getPlatform();
```

### [$db->getVersion()](#id9)[](#db-getversion "Link to this heading")

Outputs the database version you are running:

```
<?php

echo $db->getVersion();
```
