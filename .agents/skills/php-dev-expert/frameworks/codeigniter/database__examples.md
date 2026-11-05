# Quick Start: Usage Examples — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/database/examples.html

---

# Quick Start: Usage Examples[](#quick-start-usage-examples "Link to this heading")

The following page contains example code showing how the database class
is used. For complete details please read the individual pages
describing each function.

Note

CodeIgniter doesn’t support dots (`.`) in the table and column names.
Since v4.5.0, database names with dots are supported.

## [Initializing the Database Class](#id1)[](#initializing-the-database-class "Link to this heading")

The following code loads and initializes the database class based on
your [configuration](database__configuration.md) settings:

```
<?php

$db = \Config\Database::connect();
```

Once loaded the class is ready to be used as described below.

Note

If all your pages require database access you can connect
automatically. See the [Connecting to a Database](database__connecting.md) page for details.

## [Standard Query With Multiple Results (Object Version)](#id2)[](#standard-query-with-multiple-results-object-version "Link to this heading")

```
<?php

$query   = $db->query('SELECT name, title, email FROM my_table');
$results = $query->getResult();

foreach ($results as $row) {
    echo $row->title;
    echo $row->name;
    echo $row->email;
}

echo 'Total Results: ' . count($results);
```

The above `getResult()` function returns an array of **objects**.

Example: `$row->title`

## [Standard Query With Multiple Results (Array Version)](#id3)[](#standard-query-with-multiple-results-array-version "Link to this heading")

```
<?php

$query   = $db->query('SELECT name, title, email FROM my_table');
$results = $query->getResultArray();

foreach ($results as $row) {
    echo $row['title'];
    echo $row['name'];
    echo $row['email'];
}
```

The above `getResultArray()` function returns an array of standard array
indexes.

Example: `$row['title']`

## [Standard Query With Single Result](#id4)[](#standard-query-with-single-result "Link to this heading")

```
<?php

$query = $db->query('SELECT name FROM my_table LIMIT 1');
$row   = $query->getRow();
echo $row->name;
```

The above `getRow()` function returns an **object**. Example: `$row->name`

## [Standard Query With Single Result (Array version)](#id5)[](#standard-query-with-single-result-array-version "Link to this heading")

```
<?php

$query = $db->query('SELECT name FROM my_table LIMIT 1');
$row   = $query->getRowArray();
echo $row['name'];
```

The above `getRowArray()` function returns an **array**. Example:
`$row['name']`.

## [Standard Insert](#id6)[](#standard-insert "Link to this heading")

```
<?php

$sql = 'INSERT INTO mytable (title, name) VALUES (' . $db->escape($title) . ', ' . $db->escape($name) . ')';
$db->query($sql);
echo $db->affectedRows();
```

## [Query Builder Query](#id7)[](#query-builder-query "Link to this heading")

The [Query Builder](database__query_builder.md) gives you a simplified
means of retrieving data:

```
<?php

$query = $db->table('table_name')->get();

foreach ($query->getResult() as $row) {
    echo $row->title;
}
```

The above `get()` function retrieves all the results from the supplied
table. The [Query Builder](database__query_builder.md) class contains a full
complement of functions for working with data.

## [Query Builder Insert](#id8)[](#query-builder-insert "Link to this heading")

```
<?php

$data = [
    'title' => $title,
    'name'  => $name,
    'date'  => $date,
];

$db->table('mytable')->insert($data);
// Produces: INSERT INTO mytable (title, name, date) VALUES ('{$title}', '{$name}', '{$date}')
```
