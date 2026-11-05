# Database Utilities — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/database/utilities.html

---

# Database Utilities[](#database-utilities "Link to this heading")

The Database Utility Class contains methods that help you manage your database.

## [Initializing the Utility Class](#id1)[](#initializing-the-utility-class "Link to this heading")

Load the Utility Class as follows:

```
$dbutil = \Config\Database::utils();
```

You can also pass another database group to the DB Utility loader, in case
the database you want to manage isn’t the default one:

```
$dbutil = \Config\Database::utils('group_name');
```

In the above example, we’re passing a database group name as the first
parameter.

## [Using the Database Utilities](#id2)[](#using-the-database-utilities "Link to this heading")

### [Retrieve List of Database Names](#id3)[](#retrieve-list-of-database-names "Link to this heading")

Returns an array of database names:

```
$dbutil = \Config\Database::utils();

$dbs = $dbutil->listDatabases();

foreach ($dbs as $db) {
    echo $db;
}
```

### [Determine If a Database Exists](#id4)[](#determine-if-a-database-exists "Link to this heading")

Sometimes it’s helpful to know whether a particular database exists.
Returns a boolean `true`/`false`. Usage example:

```
$dbutil = \Config\Database::utils();

if ($dbutil->databaseExists('database_name')) {
    // some code...
}
```

Note

Replace `database_name` with the name of the database you are
looking for. This method is case sensitive.

### [Optimize a Table](#id5)[](#optimize-a-table "Link to this heading")

Permits you to optimize a table using the table name specified in the
first parameter. Returns `true`/`false` based on success or failure:

```
$dbutil = \Config\Database::utils();

if ($dbutil->optimizeTable('table_name')) {
    echo 'Success!';
}
```

Note

Not all database platforms support table optimization. It is
mostly for use with MySQL.

### [Optimize a Database](#id6)[](#optimize-a-database "Link to this heading")

Permits you to optimize the database your DB class is currently
connected to. Returns an array containing the DB status messages or
`false` on failure:

```
$dbutil = \Config\Database::utils();

$result = $dbutil->optimizeDatabase();

if ($result !== false) {
    print_r($result);
}
```

Note

Not all database platforms support database optimization. It
it is mostly for use with MySQL.

### [Export a Query Result as a CSV File](#id7)[](#export-a-query-result-as-a-csv-file "Link to this heading")

Permits you to generate a CSV file from a query result. The first
parameter of the method must contain the result object from your
query. Example:

```
$db     = db_connect();
$dbutil = \Config\Database::utils();

$query = $db->query('SELECT * FROM mytable');

echo $dbutil->getCSVFromResult($query);
```

The second, third, and fourth parameters allow you to set the delimiter
newline, and enclosure characters respectively. By default commas are
used as the delimiter, `"\n"` is used as a new line, and a double-quote
is used as the enclosure. Example:

```
$db     = db_connect();
$dbutil = \Config\Database::utils();

$query = $db->query('SELECT * FROM mytable');

$delimiter = ',';
$newline   = "\r\n";
$enclosure = '"';

echo $dbutil->getCSVFromResult($query, $delimiter, $newline, $enclosure);
```

Important

This method will NOT write the CSV file for you. It
simply creates the CSV layout. If you need to write the file
use the [`write_file()`](helpers__filesystem_helper.md#write_file "write_file") helper.

### [Export a Query Result as an XML Document](#id8)[](#export-a-query-result-as-an-xml-document "Link to this heading")

Permits you to generate an XML file from a query result. The first
parameter expects a query result object, the second may contain an
optional array of config parameters. Example:

```
<?php

$db     = db_connect();
$dbutil = \Config\Database::utils();

$query = $db->query('SELECT * FROM mytable');

$config = [
    'root'    => 'root',
    'element' => 'element',
    'newline' => "\n",
    'tab'     => "\t",
];

echo $dbutil->getXMLFromResult($query, $config);
```

and it will get the following xml result when the `mytable` has columns `id` and `name`:

```
<root>
    <element>
        <id>1</id>
        <name>bar</name>
    </element>
</root>
```

Important

This method will NOT write the XML file for you. It
simply creates the XML layout. If you need to write the file
use the [`write_file()`](helpers__filesystem_helper.md#write_file "write_file") helper.
