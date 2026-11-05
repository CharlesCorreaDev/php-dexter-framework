# Introduction - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/intro.html

---

## Orm

Orm is short for [Object
Relational Mapper](http://en.wikipedia.org/wiki/Object_relational_mapper) which does 2 things: it maps your database table rows to objects and it allows you
to establish relations between those objects.  
It follows the [Active Record Pattern](http://en.wikipedia.org/wiki/Active_record_pattern) closely, but was also influenced by other systems.

## Introduction

Unlike many other ActiveRecord implementations, ours is small, fast and dead simple to use. It attempts
to make creating, updating and deleting items from your database as easy as possible. It does this by
doing all the hard work for you.

## Installation

The Orm package is included in the Fuel download. All you need to do is enable it in your config.

```
'always_load' => array(
	'packages' => array(
		'orm',
	),
),
```

## Object Caching

By default, the ORM implements object caching, to ensure data consistency. Consider the following example:

```
// fetch a customer record from the client table by its id key
$customer = Model_Clients::find($id);

// give the user a minumum discount of 10%
if ($customer->discount < 10)
{
	$customer->discount = 10;
}

// fetch the same customer record
$client = Model_Client($id);

// print the clients discount
echo $client->discount;
```

If you would have used standard database queries, you would expect the printout to show the value of "discount"
as it is stored in the table record for this customer. With the ORM, thanks to object caching, this is not the
case. Both queries return the same object (by reference), so the change to **$customer** will be reflected in **$client**.
If you would **var\_dump()** both variables, you will see that they are identical, with the same object #id.

You can disable the retrieval from cache for a subsequent query using:

```
// fetch a customer record from the client table by its id key
$customer = Model_Clients::find($id);

// fetch as a new object using array notation
$client1 = Model_Client($id, array('from_cache' => false));

// fetch as a new object using chaining
$client2 = Model_Client::query()->from_cache(false)->where('id', '=', $id)->get_one();
```

If you would dump these three variables, you will see that the objects will have unique #id's, and modifying one will
not change the other. You can also enable this behaviour globally, so ORM results will never be cached. You need this
for example in tasks, for batch operations. You wouldn't want to store thousands of objects in memory!

```
// globally disable the ORM object cache
\Orm\Query::caching(false);
```

If you have disabled the caching globally, you can enable it on a per-query basis:

```
// fetch a customer record from the client table by its id key
$customer = Model_Clients::find($id);

// fetch as a new object using array notation
$client1 = Model_Client($id, array('from_cache' => true));

// fetch as a new object using chaining
$client2 = Model_Client::query()->from_cache(true)->where('id', '=', $id)->get_one();
```

And finally, if you really know you are not going to need or use ORM object caching, you can also create an **orm.php**
configuration file in your application config directory, and add:

```
<?php
return array(
    // global query settings
    'caching' => true,
);
```

Under specific circumstances, you may need to flush the complete ORM cache, or part of it. For example it you run a batch processor
or queue worker, to run background tasks. Since it always runs, it will always re-use it's cache, which can lead to cached values
being reused while the database has been altered in the meantime. To flush, use:

```
// flush the complete ORM cache
\Orm\Model::flush_cache(null);

// flush the cache for a specific model
\Some\Model\Name::flush::cache();

// or by class name
\Orm\Model::flush_cache('Some\Model\Name');
```

## Troubleshooting

Some common problems and frequent questions.

### My relations/foreign keys aren't being saved (1)

This happens most often when you're using the wrong type of relationship. Especially Has-one and
Belongs-to tend to get mixed up. Reread the examples in the docs to make sure you're using the
correct relation types and check if everything is configured correctly.

### I can't relate objects (2)

Make sure your model is extending `Orm\Model` and not `Model_Crud`.

### I get an exception that my related model in a package/module can't be found

Make sure the package or module is loaded by Fuel, otherwise the Autoloader won't be able to find
the class.  
And when configuring the related model `"model_to"` make sure you configure the full
classname, this includes the namespace *even if you're in that namespace*. Classnames in
strings are always taken from global context, no matter the current namespace context.

### I get an Orm\FrozenObject exception

Objects can't be edited while being saved to the database, that prevents circular saving and resaving
already saved objects. This shouldn't happen during normal usage and is most often caused by faulty
configuration of relations.  
Sometimes this can be caused by a bug, especially when you're not using a stable release.

### I have defined a limit and offset, but the results are not correct

The ORM always makes sure that query results are consistent. If you run a query that contains related
models, a subquery will be generated to make sure the entire related resultset is fetched. Even if this
means more records then the limit you have set will be fetched. This is because once you start manipulating
incomplete resultsets, very bad things might happen to your related models.

If you are absolutely sure you are not going to manipulate the results, for example because you need them
for pagination only, you can use `rows_limit()` and `rows_offset()` instead, which will
force them on the entire query.

### My query result doesn't reflect the record values in the database

Familiarize yourself with ORM object caching, see the explanation given above.
