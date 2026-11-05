# Upgrade HTML Tables — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_html_tables.html

---

# Upgrade HTML Tables[](#upgrade-html-tables "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [HTML Table Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/table.html)
- [HTML Table Documentation CodeIgniter 4.x](outgoing__table.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- Only small things like the method names and the loading of the library have changed.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. Within your class change the `$this->load->library('table');` to `$table = new \CodeIgniter\View\Table();`.
2. From that on you have to replace every line starting with `$this->table` to `$table`. For example: `echo $this->table->generate($query);` will become `echo $table->generate($query);`
3. The methods in the HTML Table class could be named slightly different. The most important change in the naming is the switch from underscored method names to camelCase. The method `set_heading()` from version 3 is now named `setHeading()` and so on.

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

```
<?php

$this->load->library('table');

$this->table->set_heading('Name', 'Color', 'Size');

$this->table->add_row('Fred', 'Blue', 'Small');
$this->table->add_row('Mary', 'Red', 'Large');
$this->table->add_row('John', 'Green', 'Medium');

echo $this->table->generate();
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

```
<?php

$table = new \CodeIgniter\View\Table();

$table->setHeading('Name', 'Color', 'Size');

$table->addRow('Fred', 'Blue', 'Small');
$table->addRow('Mary', 'Red', 'Large');
$table->addRow('John', 'Green', 'Medium');

echo $table->generate();
```
