# File Advanced - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/file/advanced.html

---

### Areas

#### Introduction

File areas are used to influence file system behaviour. By setting basic restrictions you can
set boundaries to allow a flexible use inside those limits without worrying about unauthorized
access of files and directories.

#### Configuration

By default file areas have unlimited access through all directories. (The default area is defined as `base_config` in File config file.) There are two ways to set
these configuration values. The quickest way is to pass an array intro the
File::forge() method.

```
$config = array(
	'basedir'		=> DOCROOT.'uploads',
	'use_locks'		=> true,
);

$area = \File::forge($config);
```

A more centralized way is by defining an area (or more) inside your File config file. To do so,
copy *core/config/file.php* into *app/config/file.php* (or create a new one) and
define your area inside the *'areas'* array. Now you can get the area by supplying the
string identifier to the File::forge() method.

```
// inside app/config/file.php
'areas' => array(
	'my_area' => array(
		'basedir'		=> DOCROOT.'uploads',
		'use_locks'		=> true,
	),
),

// Now get the area

$area = \File::instance('my_area');
					
```

### Usage

There are 2 ways to use areas in the File class.   
The first is to use areas in a static context, supply a File\_Area instance or identifier to the
function you're calling.

```
// Read the contents of a directory
try
{
	$dir = File::read_dir('somedir', 0, null, 'my_area');
}
catch(\FileAccessException $e)
{
	// Operation failed
}
```

The second way is to call the functions directly from the area itself.

```
// Get the area
$area = File::instance('my_area');

try
{
	$dir = $area->read_dir('somedir', 0, null);
}
catch(\FileAccessException $e)
{
	// Operation failed
}
```
