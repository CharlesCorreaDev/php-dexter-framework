# Transactions — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/database/transactions.html

---

# Transactions[](#transactions "Link to this heading")

CodeIgniter’s database abstraction allows you to use transactions with
databases that support transaction-safe table types. In MySQL, you’ll
need to be running InnoDB or BDB table types rather than the more common
MyISAM. Most other database platforms support transactions natively.

If you are not familiar with transactions we recommend you find a good
online resource to learn about them for your particular database. The
information below assumes you have a basic understanding of
transactions.

## [CodeIgniter’s Approach to Transactions](#id1)[](#codeigniter-s-approach-to-transactions "Link to this heading")

CodeIgniter utilizes an approach to transactions that is very similar to
the process used by the popular database class ADODB. We’ve chosen that
approach because it greatly simplifies the process of running
transactions. In most cases, all that is required is two lines of code.

Traditionally, transactions have required a fair amount of work to
implement since they demand that you keep track of your queries and
determine whether to commit or rollback based on the success or failure
of your queries. This is particularly cumbersome with nested queries. In
contrast, we’ve implemented a smart transaction system that does all
this for you automatically (you can also manage your transactions
manually if you choose to, but there’s really no benefit).

Note

Since v4.3.0, during transactions, exceptions are not thrown by default
even if `DBDebug` is true.

## [Running Transactions](#id2)[](#running-transactions "Link to this heading")

To run your queries using transactions you will use the
`$this->db->transStart()` and `$this->db->transComplete()` methods as
follows:

```
<?php

$this->db->transStart();
$this->db->query('AN SQL QUERY...');
$this->db->query('ANOTHER QUERY...');
$this->db->query('AND YET ANOTHER QUERY...');
$this->db->transComplete();
```

You can run as many queries as you want between the `transStart()`/`transComplete()`
methods and they will all be committed or rolled back based on the success
or failure of any given query.

## [Strict Mode](#id3)[](#strict-mode "Link to this heading")

By default, CodeIgniter runs all transactions in Strict Mode.

When strict mode is enabled, if you are running multiple groups of transactions,
if one group fails all subsequent groups will be rolled back.

If strict mode is disabled, each group is treated independently, meaning a failure
of one group will not affect any others.

Strict Mode can be disabled as follows:

```
<?php

$this->db->transStrict(false);
```

### [Resetting Transaction Status](#id4)[](#resetting-transaction-status "Link to this heading")

Added in version 4.6.0.

When strict mode is enabled, if one transaction fails, all subsequent transactions
will be rolled back.

If you wan to restart transactions after a failure, you can reset the transaction
status:

```
<?php

$this->db->resetTransStatus();
```

## [Managing Errors](#id5)[](#managing-errors "Link to this heading")

Note

Since v4.3.0, during transactions, exceptions are not thrown by default
even if `DBDebug` is true.

You can manage your own errors like this:

```
<?php

$this->db->transStart();
$this->db->query('AN SQL QUERY...');
$this->db->query('ANOTHER QUERY...');
$this->db->transComplete();

if ($this->db->transStatus() === false) {
    // generate an error... or use the log_message() function to log your error
}
```

## [Throwing Exceptions](#id6)[](#throwing-exceptions "Link to this heading")

Added in version 4.3.0.

Note

Since v4.3.0, during transactions, exceptions are not thrown by default
even if `DBDebug` is true.

If you want an exception to be thrown when a query error occurs, you can use
`$this->db->transException(true)`:

```
<?php

// When DBDebug in the Database Config must be true.

use CodeIgniter\Database\Exceptions\DatabaseException;

try {
    $this->db->transException(true)->transStart();
    $this->db->query('AN SQL QUERY...');
    $this->db->query('ANOTHER QUERY...');
    $this->db->query('AND YET ANOTHER QUERY...');
    $this->db->transComplete();
} catch (DatabaseException $e) {
    // Automatically rolled back already.
}
```

If a query error occurs, all the queries will be rolled backed, and a
`DatabaseException` will be thrown.

## [Disabling Transactions](#id7)[](#disabling-transactions "Link to this heading")

Transactions are enabled by default. If you would like to disable transactions you
can do so using `$this->db->transOff()`:

```
<?php

$this->db->transOff();
$this->db->transStart();
$this->db->query('AN SQL QUERY...');
$this->db->transComplete();
```

When transactions are disabled, your queries will be auto-committed, just
as they are when running queries without transactions.

## [Test Mode](#id8)[](#test-mode "Link to this heading")

You can optionally put the transaction system into “test mode”, which
will cause your queries to be rolled back – even if the queries produce
a valid result. To use test mode simply set the first parameter in the
`$this->db->transStart()` method to true:

```
<?php

$this->db->transStart(true); // Query will be rolled back
$this->db->query('AN SQL QUERY...');
$this->db->transComplete();
```

## [Running Transactions Manually](#id9)[](#running-transactions-manually "Link to this heading")

When you have `DBDebug` false in your **app/Config/Database.php** file, and
if you would like to run transactions manually you can do so as follows:

```
<?php

$this->db->transBegin();

$this->db->query('AN SQL QUERY...');
$this->db->query('ANOTHER QUERY...');
$this->db->query('AND YET ANOTHER QUERY...');

if ($this->db->transStatus() === false) {
    $this->db->transRollback();
} else {
    $this->db->transCommit();
}
```

Note

Make sure to use `$this->db->transBegin()` when running manual
transactions, **NOT** `$this->db->transStart()`.

## [Nested Transactions](#id10)[](#nested-transactions "Link to this heading")

In CodeIgniter, transactions can be nested in a way such that only the
outmost or top-level transaction commands are executed. You can include as
many pairs of `transStart()`/`transComplete()` or `transBegin()`/`transCommit()`/`transRollback()`
as you want inside a transaction block and so on. CodeIgniter will keep
track of the transaction “depth” and only take action at the outermost layer
(zero depth).

```
<?php

$this->db->transStart(); // actually starts a transaction
$this->db->query('SOME QUERY 1 ...');
$this->db->transStart(); // doesn't necessarily start another transaction
$this->db->query('SOME QUERY 2 ...');
$this->db->transComplete(); // doesn't necessarily end the transaction, but required to finish the inner transaction
$this->db->query('SOME QUERY 3 ...');
$this->db->transComplete(); // actually ends the transaction
```

Note

In case the structure is far more complex, it’s your responsibility
to ensure that the inner transactions can reach the outermost layer again
in order to be fully executed by the database, thus prevents unintended
commits/rollbacks.
