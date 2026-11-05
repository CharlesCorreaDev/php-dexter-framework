# Query Builder Select - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/database/usage.html

---

### Query results

A database query always returns the result in an iterator object.   
There are two types of result object available, each with their pros and cons.  

- Database\_Result
- Database\_Cached

A Database\_Result object fetches rows from the result one at the time, and doesn't store it.
This means that this object has a low memory footprint, but only allows sequential access to
the rows retrieved, in the sequence they are returned, one at the time, from start to finish.  
  
In plain PHP, you can roughly compare it to:

```
while ($row = $pdoResult->fetch())
{
	// do something with $row
}
```

A Database\_Cached object however fetches all rows from the result at once, and stores it in
the object. This means that, depending on the size of the resultset, it might have quite a
substantial memoty footprint. But the plus side is, it allows you random access to the rows
retrieved, and you access all rows simultaneously, multiple times, iterate over it backwards,
anything you could do with an array of values.  
  
In plain PHP, you can roughly compare it to:

```
$rows = $pdoResult->fetchAll(PDO::FETCH_NUM); // or FETCH_ASSOC, depending on your db config
foreach ($rows as $row)
{
	// do something with $row
}
```

You can control the type of result object returned globally, per database connection, using
the *enable\_cache* configuration item, on the defined database connection, in your db.php
config file. By default, caching is enabled. You can override the global setting per query, using:  

```
// this returns a Database_Result, independent of the global setting
$result = \DB::select()->from('table')->caching(false)->execute();

// this returns a Database_Cached, independent of the global setting
$result = \DB::select()->from('table')->caching(true)->execute();
```
