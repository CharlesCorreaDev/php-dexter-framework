# Upgrade Database — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_database.html

---

# Upgrade Database[](#upgrade-database "Link to this heading")

## [Documentations](#id2)[](#documentations "Link to this heading")

- [Database Reference Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/database/index.html)
- [Working with Databases Documentation CodeIgniter 4.x](database__index.md)

## [What has been changed](#id3)[](#what-has-been-changed "Link to this heading")

- The functionality in CI3 is basically the same as in CI4.
- [Database Caching](https://www.codeigniter.com/userguide3/database/caching.html) functionality known from CI3 was removed.
- The method names have changed to camelCase and the [Query Builder](database__query_builder.md)
  now needs to be initialized before you can run queries on it.

## [Upgrade Guide](#id4)[](#upgrade-guide "Link to this heading")

1. Add your database credentials to **app/Config/Database.php**. The options are pretty much the same as in CI3 only some names have changed slightly.
2. Everywhere you have used the database you have to replace `$this->load->database();` with `$db = db_connect();`.
3. If you use multiple databases use the following code to load additional databases `$db = db_connect('group_name');`.
4. Now you have to change all database queries. The most important change here is to replace `$this->db` with just `$db` and adjust the method name and `$db`. Here are some examples:

   > - `$this->db->query('YOUR QUERY HERE');` to `$db->query('YOUR QUERY HERE');`
   > - `$this->db->simple_query('YOUR QUERY')` to `$db->simpleQuery('YOUR QUERY')`
   > - `$this->db->escape("something")` to `$db->escape("something");`
   > - `$this->db->affected_rows();` to `$db->affectedRows();`
   > - `$query->result();` to `$query->getResult();`
   > - `$query->result_array();` to `$query->getResultArray();`
   > - `echo $this->db->count_all('my_table');` to `echo $db->table('my_table')->countAll();`
5. To use the new Query Builder Class you have to initialize the builder `$builder = $db->table('mytable');` after that you can run the queries on the `$builder`. Here are some examples:

   > - `$this->db->get()` to `$builder->get();`
   > - `$this->db->get_where('mytable', array('id' => $id), $limit, $offset);` to `$builder->getWhere(['id' => $id], $limit, $offset);`
   > - `$this->db->select('title, content, date');` to `$builder->select('title, content, date');`
   > - `$this->db->select_max('age');` to `$builder->selectMax('age');`
   > - `$this->db->join('comments', 'comments.id = blogs.id');` to `$builder->join('comments', 'comments.id = blogs.id');`
   > - `$this->db->having('user_id',  45);` to `$builder->having('user_id',  45);`
6. CI4 does not provide [Database Caching](https://www.codeigniter.com/userguide3/database/caching.html)
   layer known from CI3, so if you need to cache the result, use [Caching Driver](libraries__caching.md) instead.
7. If you use `limit(0)` in Query Builder, CI4 returns all records in stead of no records due to a bug. But since v4.5.0, you can change the incorrect behavior with a setting. So change the setting. See [limit(0) Behavior](changelogs__v4.5.0.md#v450-query-builder-limit-0-behavior) for details.

## [Code Example](#id5)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id6)[](#codeigniter-version-3-x "Link to this heading")

```
<?php

$query = $this->db->select('title')
             ->where('id', $id)
             ->limit(10, 20)
             ->get('mytable');
```

### [CodeIgniter Version 4.x](#id7)[](#codeigniter-version-4-x "Link to this heading")

```
<?php

$builder = $db->table('mytable');

$query = $builder->select('title')
    ->where('id', $id)
    ->limit(10, 20)
    ->get();
```
