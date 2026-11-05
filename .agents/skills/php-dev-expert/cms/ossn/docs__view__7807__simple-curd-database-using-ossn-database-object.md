# Simple CURD database using OSSN database object | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/7807/simple-curd-database-using-ossn-database-object

---

Lightweight CRUD database system built using the OSSN database object, designed to simplify create, read, update, and delete operations.

## READ

Retrieve records from the database using the OSSN database object.

### Read a single record

Fetch a single row from the database based on defined conditions.

### Option values

| Code | Type | Description |
| --- | --- | --- |
| from | String | Table name |
| wheres | array | Where conditions using `OssnDatabase::wheres()` |
| limit | string | Example: `0, 10` |
| order\_by | string | Order by clause (default: null) |
| group\_by | string | Group by value |

```
$database = new \OssnDatabase();
$params  = array(
		'from' => 'table_name',
 		'wheres' => array(
				OssnDatabase::wheres('col', '=', 1),
				OssnDatabase::wheres('col2', '!=', 2),
		)
);
$single   = $database->select($params);
```

### Read multiple records

To retrieve multiple rows, pass `true` as the second argument to the `select` method.

```
$database = new \OssnDatabase();
$params   = array(
		'from' => 'table_name',
		'order_by' => 'name DESC',
 		'wheres' => array(
				OssnDatabase::wheres('col', '=', 1),
				OssnDatabase::wheres('col2', '!=', 2),
		)
);
$result   = $database->select($params, true);
```

## CREATE

Insert a new record into the database.

### Option values

| Code | Type | Description |
| --- | --- | --- |
| table | String | Table name |

Ensure that the `names` and `values` arrays match by index.

```
$database = new \OssnDatabase();
$insert   = $db->insert(array(
		'table' => 'table_name',
 		'names' => array('col1', 'col2', 'col3'),
		'values' => array('col1_value', 'col2_value', 'col3_value'),
));
```

## DELETE

Remove records from the database based on specified conditions.

### Option values

| Code | Type | Description |
| --- | --- | --- |
| from | String | Table name |
| wheres | array | Where conditions using `OssnDatabase::wheres()` |

```
$database = new \OssnDatabase();
$params  = array(
		'from' => 'table_name',
 		'wheres' => array(
				OssnDatabase::wheres('col', '=', 1),
				OssnDatabase::wheres('col2', '!=', 2),
		)
);
$delete   = $database->delete($params);
```

## UPDATE

Update existing records in the database.

### Option values

| Code | Type | Description |
| --- | --- | --- |
| table | String | Table name |

Ensure that the `names` and `values` arrays match by index.

```
$database = new \OssnDatabase();
$update   = $db->update(array(
		'table' => 'table_name',
 		'names' => array('col1', 'col2', 'col3'),
		'values' => array('col1_value', 'col2_value', 'col3_value'),
		'wheres' => array(
				OssnDatabase::wheres('col', '=', 1),
		)
));
```

**WHERES**

```
OssnDatabase::wheres(string, string, string|int|float|array)
```
