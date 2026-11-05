# Getting Metadata — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/database/metadata.html

---

# Getting Metadata[](#getting-metadata "Link to this heading")

## [Table Metadata](#id1)[](#table-metadata "Link to this heading")

These functions let you fetch table information.

### [List the Tables in Your Database](#id2)[](#list-the-tables-in-your-database "Link to this heading")

#### $db->listTables()[](#db-listtables "Link to this heading")

Returns an array containing the names of all the tables in the database
you are currently connected to. Example:

```
<?php

$db = db_connect();

$tables = $db->listTables();

foreach ($tables as $table) {
    echo $table;
}
```

Note

Some drivers have additional system tables that are excluded from this return.

### [Determine If a Table Exists](#id3)[](#determine-if-a-table-exists "Link to this heading")

#### $db->tableExists()[](#db-tableexists "Link to this heading")

Sometimes it’s helpful to know whether a particular table exists before
running an operation on it. Returns a boolean true/false. Usage example:

```
<?php

$db = db_connect();

if ($db->tableExists('table_name')) {
    // some code...
}
```

Note

Replace *table\_name* with the name of the table you are looking for.

## [Field Metadata](#id4)[](#field-metadata "Link to this heading")

### [List the Fields in a Table](#id5)[](#list-the-fields-in-a-table "Link to this heading")

#### $db->getFieldNames()[](#db-getfieldnames "Link to this heading")

Returns an array containing the field names. This query can be called
two ways:

1. You can supply the table name and call it from the `$db` object:

   > ```
   > <?php
   >
   > $db = db_connect();
   >
   > $fields = $db->getFieldNames('table_name');
   >
   > foreach ($fields as $field) {
   >     echo $field;
   > }
   > ```
2. You can gather the field names associated with any query you run by
   calling the function from your query result object:

   > ```
   > <?php
   >
   > $db = db_connect();
   >
   > $query = $db->query('SELECT * FROM some_table');
   >
   > foreach ($query->getFieldNames() as $field) {
   >     echo $field;
   > }
   > ```

### [Determine If a Field is Present in a Table](#id6)[](#determine-if-a-field-is-present-in-a-table "Link to this heading")

#### $db->fieldExists()[](#db-fieldexists "Link to this heading")

Sometimes it’s helpful to know whether a particular field exists before
performing an action. Returns a boolean true/false. Usage example:

```
<?php

$db = db_connect();

if ($db->fieldExists('field_name', 'table_name')) {
    // some code...
}
```

Note

Replace *field\_name* and *table\_name* with the column name and the table name you are looking for.

### [Retrieve Field Metadata](#id7)[](#retrieve-field-metadata "Link to this heading")

#### $db->getFieldData()[](#db-getfielddata "Link to this heading")

Returns an array of objects containing field information.

Sometimes it’s helpful to gather the field names or other metadata, like
the column type, max length, etc.

Note

Not all databases provide metadata.

Usage example:

```
<?php

$db = db_connect();

$fields = $db->getFieldData('table_name');

foreach ($fields as $field) {
    echo $field->name;
    echo $field->type;
    echo $field->max_length;
    echo $field->primary_key;
}
```

The following data is available from this function if supported by your
database:

- `name` - column name
- `type` - the type of the column
- `max_length` - maximum length of the column
- `nullable` - boolean `true` if the column is nullable, otherwise boolean `false`
- `default` - the default value
- `primary_key` - integer `1` if the column is a primary key (all integer `1`, even if there are multiple primary keys), otherwise integer `0` (This field is currently only available for `MySQLi` and `SQLite3`)

Note

Since v4.4.0, SQLSRV supported `nullable`.

#### $query->getFieldData()[](#query-getfielddata "Link to this heading")

If you have run a query already you can use the result object instead of
supplying the table name:

```
<?php

$db = db_connect();

$query  = $db->query('YOUR QUERY');
$fields = $query->getFieldData();
```

Note

The data returned is different from the data from `$db->getFieldData()`.
If you cannot get the data you need, use `$db->getFieldData()`.

### [List the Indexes in a Table](#id8)[](#list-the-indexes-in-a-table "Link to this heading")

#### $db->getIndexData()[](#db-getindexdata "Link to this heading")

Returns an array of objects containing index information.

Usage example:

```
<?php

$db = db_connect();

$keys = $db->getIndexData('table_name');

foreach ($keys as $key) {
    echo $key->name;
    echo $key->type;
    echo $key->fields; // array of field names
}
```

The key types may be unique to the database you are using.
For instance, MySQL will return one of primary, fulltext, spatial, index or unique
for each key associated with a table.

SQLite3 returns a pseudo index named `PRIMARY`. But it is a special index, and you can’t use it in your SQL commands.

#### $db->getForeignKeyData()[](#db-getforeignkeydata "Link to this heading")

Returns an array of objects containing foreign key information.

Usage example:

```
<?php

$db = db_connect();

$keys = $db->getForeignKeyData('table_name');

foreach ($keys as $key => $object) {
    echo $key === $object->constraint_name;
    echo $object->constraint_name;
    echo $object->table_name;
    echo $object->column_name[0]; // array
    echo $object->foreign_table_name;
    echo $object->foreign_column_name[0]; // array
    echo $object->on_delete;
    echo $object->on_update;
    echo $object->match;
}
```

Foreign keys use the naming convention `tableprefix_table_column1_column2_foreign`. Oracle uses a slightly different suffix of `_fk`.
