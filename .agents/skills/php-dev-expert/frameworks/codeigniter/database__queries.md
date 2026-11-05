# Queries — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/database/queries.html

---

# Queries[](#queries "Link to this heading")

## [Query Basics](#id4)[](#query-basics "Link to this heading")

Note

CodeIgniter doesn’t support dots (`.`) in the table and column names.
Since v4.5.0, database names with dots are supported.

### [Regular Queries](#id5)[](#regular-queries "Link to this heading")

#### $db->query()[](#db-query "Link to this heading")

To submit a query, use the `query()` method:

```
<?php

$db = db_connect();
$db->query('YOUR QUERY HERE');
```

The `query()` method returns a database result **object** when “read”
type queries are run which you can use to [show your
results](database__results.md). When “write” type queries are run it simply
returns true or false depending on success or failure. When retrieving
data you will typically assign the query to your own variable, like
this:

```
<?php

$query = $db->query('YOUR QUERY HERE');
```

Note

If you are using OCI8 Driver, SQL statements should not end with a semi-colon (`;`).
PL/SQL statements should end with a semi-colon (`;`).

### [Simplified Queries](#id6)[](#simplified-queries "Link to this heading")

#### $db->simpleQuery()[](#db-simplequery "Link to this heading")

The `simpleQuery()` method is a simplified version of the
`$db->query()` method. It DOES
NOT return a database result set, nor does it set the query timer, or
compile bind data, or store your query for debugging. It simply lets you
submit a query. Most users will rarely use this function.

It returns whatever the database drivers “execute” function returns.
That typically is true/false on success or failure for write type queries
such as INSERT, DELETE or UPDATE statements (which is what it really
should be used for) and a resource/object on success for queries with
fetchable results.

```
<?php

if ($db->simpleQuery('YOUR QUERY')) {
    echo 'Success!';
} else {
    echo 'Query failed!';
}
```

Note

PostgreSQL’s `pg_exec()` function (for example) always
returns a resource on success even for write type queries.
So keep that in mind if you’re looking for a boolean value.

## [Working with Database Prefixes Manually](#id7)[](#working-with-database-prefixes-manually "Link to this heading")

### [$db->prefixTable()](#id8)[](#db-prefixtable "Link to this heading")

If you have configured a database prefix and would like to prepend it to
a table name for use in a native SQL query for example, then you can use
the following:

```
<?php

$db->prefixTable('tablename'); // outputs prefix_tablename
```

### [$db->setPrefix()](#id9)[](#db-setprefix "Link to this heading")

If for any reason you would like to change the prefix programmatically
without needing to create a new connection you can use this method:

```
<?php

$db->setPrefix('newprefix_');
$db->prefixTable('tablename'); // outputs newprefix_tablename
```

### [$db->getPrefix()](#id10)[](#db-getprefix "Link to this heading")

You can get the current prefix any time with this method:

```
<?php

$DBPrefix = $db->getPrefix();
```

## [Protecting Identifiers](#id11)[](#protecting-identifiers "Link to this heading")

### [$db->protectIdentifiers()](#id12)[](#db-protectidentifiers "Link to this heading")

In many databases, it is advisable to protect table and field names - for
example with backticks in MySQL. **Query Builder queries are
automatically protected**, but if you need to manually protect an
identifier you can use:

```
<?php

$db->protectIdentifiers('table_name');
```

Important

Although the Query Builder will try its best to properly
quote any field and table names that you feed it. Note that it
is NOT designed to work with arbitrary user input. DO NOT feed it
with unsanitized user data.

This function will also add a **table prefix** to your table, assuming you
have a prefix specified in your database config file. To enable the
prefixing set `true` (boolean) via the second parameter:

```
<?php

$db->protectIdentifiers('table_name', true);
```

## [Escaping Values](#id13)[](#escaping-values "Link to this heading")

It’s a very good security practice to escape your data before submitting
it into your database. CodeIgniter has three methods that help you do
this:

### [1. $db->escape()](#id14)[](#db-escape "Link to this heading")

This function determines the data type so that it can escape only string
data. It also automatically adds single quotes around the data so you
don’t have to:

```
<?php

$sql = 'INSERT INTO table (title) VALUES(' . $db->escape($title) . ')';
```

### [2. $db->escapeString()](#id15)[](#db-escapestring "Link to this heading")

This function escapes the data passed to
it, regardless of type. Most of the time you’ll use the above
function rather than this one. Use the function like this:

```
<?php

$sql = "INSERT INTO table (title) VALUES('" . $db->escapeString($title) . "')";
```

### [3. $db->escapeLikeString()](#id16)[](#db-escapelikestring "Link to this heading")

This method should be used when
strings are to be used in LIKE conditions so that LIKE wildcards
(`%`, `_`) in the string are also properly escaped.

```
<?php

$search = '20% raise';
$sql    = "SELECT id FROM table WHERE column LIKE '%" . $db->escapeLikeString($search) . "%' ESCAPE '!'";
```

Important

The `escapeLikeString()` method uses `'!'` (exclamation mark)
to escape special characters for `LIKE` conditions. Because this
method escapes partial strings that you would wrap in quotes
yourself, it cannot automatically add the `ESCAPE '!'`
condition for you, and so you’ll have to manually do that.

## [Query Bindings](#id17)[](#query-bindings "Link to this heading")

Bindings enable you to simplify your query syntax by letting the system
put the queries together for you. Consider the following example:

```
<?php

$sql = 'SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?';
$db->query($sql, [3, 'live', 'Rick']);
```

The question marks in the query are automatically replaced with the
values in the array in the second parameter of the query function.

Binding also work with arrays, which will be transformed to IN sets:

```
<?php

$sql = 'SELECT * FROM some_table WHERE id IN ? AND status = ? AND author = ?';
$db->query($sql, [[3, 6], 'live', 'Rick']);
```

The resulting query will be:

```
SELECT * FROM some_table WHERE id IN (3,6) AND status = 'live' AND author = 'Rick'
```

The secondary benefit of using binds is that the values are
automatically escaped producing safer queries.
You don’t have to remember to manually escape data - the engine does it automatically for you.

### [Named Bindings](#id18)[](#named-bindings "Link to this heading")

Instead of using the question mark to mark the location of the bound values,
you can name the bindings, allowing the keys of the values passed in to match
placeholders in the query:

```
<?php

$sql = 'SELECT * FROM some_table WHERE id = :id: AND status = :status: AND author = :name:';
$db->query($sql, [
    'id'     => 3,
    'status' => 'live',
    'name'   => 'Rick',
]);
```

Note

Each name in the query MUST be surrounded by colons.

## [Handling Errors](#id19)[](#handling-errors "Link to this heading")

### [$db->error()](#id20)[](#db-error "Link to this heading")

If you need to get the last error that has occurred, the `error()` method
will return an array containing its code and message. Here’s a quick
example:

```
<?php

if (! $db->simpleQuery('SELECT `example_field` FROM `example_table`')) {
    $error = $db->error(); // Has keys 'code' and 'message'
}
```

## [Prepared Queries](#id21)[](#prepared-queries "Link to this heading")

Most database engines support some form of prepared statements, that allow you to prepare a query once, and then run
that query multiple times with new sets of data. This eliminates the possibility of SQL injection since the data is
passed to the database in a different format than the query itself. When you need to run the same query multiple times
it can be quite a bit faster, too. However, to use it for every query can have major performance hits, since you’re calling
out to the database twice as often. Since the Query Builder and Database connections already handle escaping the data
for you, the safety aspect is already taken care of for you. There will be times, though, when you need the ability
to optimize the query by running a prepared statement, or prepared query.

### [Preparing the Query](#id22)[](#preparing-the-query "Link to this heading")

This can be easily done with the `prepare()` method. This takes a single parameter, which is a Closure that returns
a query object. Query objects are automatically generated by any of the “final” type queries, including **insert**,
**update**, **delete**, **replace**, and **get**. This is handled the easiest by using the Query Builder to
run a query. The query is not actually run, and the values don’t matter since they’re never applied, acting instead
as placeholders. This returns a PreparedQuery object:

```
<?php

$pQuery = $db->prepare(static fn ($db) => $db->table('user')->insert([
    'name'    => 'x',
    'email'   => 'y',
    'country' => 'US',
]));
```

If you don’t want to use the Query Builder you can create the Query object manually using question marks for
value placeholders:

```
<?php

use CodeIgniter\Database\Query;

$pQuery = $db->prepare(static function ($db) {
    $sql = 'INSERT INTO user (name, email, country) VALUES (?, ?, ?)';

    return (new Query($db))->setQuery($sql);
});
```

If the database requires an array of options passed to it during the prepare statement phase you can pass that
array through in the second parameter:

```
<?php

use CodeIgniter\Database\Query;

$pQuery = $db->prepare(static function ($db) {
    $sql = 'INSERT INTO user (name, email, country) VALUES (?, ?, ?)';

    return (new Query($db))->setQuery($sql);
}, $options);
```

Note

Currently, the only database that actually uses the array of option is SQLSRV.

### [Executing the Query](#id23)[](#executing-the-query "Link to this heading")

Once you have a prepared query you can use the `execute()` method to actually run the query. You can pass in as
many variables as you need in the query parameters. The number of parameters you pass must match the number of
placeholders in the query. They must also be passed in the same order as the placeholders appear in the original
query:

```
<?php

// Prepare the Query
$pQuery = $db->prepare(static fn ($db) => $db->table('user')->insert([
    'name'    => 'x',
    'email'   => 'y',
    'country' => 'US',
]));

// Collect the Data
$name    = 'John Doe';
$email   = '[email protected]';
$country = 'US';

// Run the Query
$results = $pQuery->execute($name, $email, $country);
```

For queries of type “write” it returns true or false, indicating the success or failure of the query.
For queries of type “read” it returns a standard [result set](database__results.md).

### [Other Methods](#id24)[](#other-methods "Link to this heading")

In addition to these two primary methods, the prepared query object also has the following methods:

#### close()[](#close "Link to this heading")

While PHP does a pretty good job of closing all open statements with the database it’s always a good idea to
close out the prepared statement when you’re done with it:

```
<?php

if ($pQuery->close()) {
    echo 'Success!';
} else {
    echo 'Deallocation of prepared statements failed!';
}
```

Note

Since v4.3.0, the `close()` method deallocates the prepared statement in all DBMS. Previously, they were not deallocated in Postgre, SQLSRV and OCI8.

#### getQueryString()[](#getquerystring "Link to this heading")

This returns the prepared query as a string.

#### hasError()[](#haserror "Link to this heading")

Returns boolean true/false if the last `execute()` call created any errors.

#### getErrorCode()[](#geterrorcode "Link to this heading")

#### getErrorMessage()[](#geterrormessage "Link to this heading")

If any errors were encountered these methods can be used to retrieve the error code and string.

## [Working with Query Objects](#id25)[](#working-with-query-objects "Link to this heading")

Internally, all queries are processed and stored as instances of
`CodeIgniter\Database\Query`. This class is responsible for binding
the parameters, otherwise preparing the query, and storing performance
data about its query.

### [$db->getLastQuery()](#id26)[](#db-getlastquery "Link to this heading")

When you just need to retrieve the last Query object, use the
`getLastQuery()` method:

```
<?php

$query = $db->getLastQuery();
echo (string) $query;
```

### [The Query Class](#id27)[](#the-query-class "Link to this heading")

Each query object stores several pieces of information about the query itself.
This is used, in part, by the Timeline feature, but is available for your use
as well.

#### getQuery()[](#getquery "Link to this heading")

Returns the final query after all processing has happened. This is the exact
query that was sent to the database:

```
<?php

$sql = $query->getQuery();
```

This same value can be retrieved by casting the Query object to a string:

```
<?php

$sql = (string) $query;
```

#### getOriginalQuery()[](#getoriginalquery "Link to this heading")

Returns the raw SQL that was passed into the object. This will not have any
binds in it, or prefixes swapped out, etc:

```
<?php

$sql = $query->getOriginalQuery();
```

#### hasError()[](#id3 "Link to this heading")

If an error was encountered during the execution of this query this method
will return true:

```
<?php

if ($query->hasError()) {
    echo 'Code: ' . $query->getErrorCode();
    echo 'Error: ' . $query->getErrorMessage();
}
```

#### isWriteType()[](#iswritetype "Link to this heading")

Returns true if the query was determined to be a write-type query (i.e.,
INSERT, UPDATE, DELETE, etc):

```
<?php

if ($query->isWriteType()) {
    // ... do something
}
```

#### swapPrefix()[](#swapprefix "Link to this heading")

Replaces one table prefix with another value in the SQL. The first
parameter is the original prefix that you want replaced, and the second
parameter is the value you want it replaced with:

```
<?php

$sql = $query->swapPrefix('ci3_', 'ci4_');
```

#### getStartTime()[](#getstarttime "Link to this heading")

Gets the time the query was executed in seconds with microseconds:

```
<?php

$microtime = $query->getStartTime();
```

#### getDuration()[](#getduration "Link to this heading")

Returns a float with the duration of the query in seconds with microseconds:

```
<?php

$microtime = $query->getDuration();
```
