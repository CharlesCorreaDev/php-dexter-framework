# File Collections — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/libraries/file_collections.html

---

# File Collections[](#file-collections "Link to this heading")

Working with groups of files can be cumbersome, so the framework supplies the
`FileCollection` class to facilitate locating and working with groups of files
across the filesystem.

## [Basic Usage](#id1)[](#basic-usage "Link to this heading")

At its most basic, `FileCollection` is an array
of files you set or build:

```
<?php

use CodeIgniter\Files\FileCollection;

$files = new FileCollection([
    FCPATH . 'index.php',
    ROOTPATH . 'spark',
]);
$files->addDirectory(APPPATH . 'Filters');
```

After you have input the files you would like to work with you may remove files
or use the filtering commands to remove or retain files matching a certain regex
or glob-style pattern:

```
<?php

$files->removeFile(APPPATH . 'Filters/DevelopToolbar.php');

$files->removePattern('#\.gitkeep#');
$files->retainPattern('*.php');
```

When your collection is complete, you can use `get()` to retrieve the final
list of file paths, or take advantage of `FileCollection` being countable and
iterable to work directly with each `File`:

```
<?php

echo 'My files: ' . implode(PHP_EOL, $files->get());
echo 'I have ' . count($files) . ' files!';

foreach ($files as $file) {
    echo 'Moving ' . $file->getBasename() . ', ' . $file->getSizeByUnit('mb');
    $file->move(WRITABLE . $file->getRandomName());
}
```

Below are the specific methods for working with a `FileCollection`.

## [Starting a Collection](#id2)[](#starting-a-collection "Link to this heading")

### [\_\_construct(string[] $files = [])](#id3)[](#construct-string-files "Link to this heading")

The constructor accepts an optional array of file paths to use as the initial
collection. These are passed to `add()` so any files supplied by child classes
in the `$files` will remain.

### [define()](#id4)[](#define "Link to this heading")

Allows child classes to define their own initial files. This method is called by
the constructor and allows predefined collections without having to use their
methods.

Example:

```
<?php

namespace App;

use CodeIgniter\Files\FileCollection;

class ConfigCollection extends FileCollection
{
    protected function define(): void
    {
        $this->add(APPPATH . 'Config', true)->retainPattern('*.php');
    }
}
```

Now you may use the `ConfigCollection` anywhere in your project to access all
PHP files in **app/Config/** without having to re-call the collection methods
every time.

### [set(array $files)](#id5)[](#set-array-files "Link to this heading")

Sets the list of input files to the provided string array of file paths. This
will remove any existing files from the collection, so `$collection->set([])`
is essentially a hard reset.

## [Inputting Files](#id6)[](#inputting-files "Link to this heading")

### [add(string[]|string $paths, bool $recursive = true)](#id7)[](#add-string-string-paths-bool-recursive-true "Link to this heading")

Adds all files indicated by the path or array of paths. If the path resolves to
a directory then `$recursive` will include sub-directories.

### [addFile(string $file) / addFiles(array $files)](#id8)[](#addfile-string-file-addfiles-array-files "Link to this heading")

Adds the file or files to the current list of input files. Files are absolute
paths to actual files.

### [removeFile(string $file) / removeFiles(array $files)](#id9)[](#removefile-string-file-removefiles-array-files "Link to this heading")

Removes the file or files from the current list of input files.

### [addDirectory(string $directory, bool $recursive = false)](#id10)[](#adddirectory-string-directory-bool-recursive-false "Link to this heading")

### [addDirectories(array $directories, bool $recursive = false)](#id11)[](#adddirectories-array-directories-bool-recursive-false "Link to this heading")

Adds all files from the directory or directories, optionally recursing into
sub-directories. Directories are absolute paths to actual directories.

## [Filtering Files](#id12)[](#filtering-files "Link to this heading")

### [removePattern(string $pattern, string $scope = null)](#id13)[](#removepattern-string-pattern-string-scope-null "Link to this heading")

### [retainPattern(string $pattern, string $scope = null)](#id14)[](#retainpattern-string-pattern-string-scope-null "Link to this heading")

Filters the current file list through the pattern (and optional scope), removing
or retaining matched files.

`$pattern` may be a complete regex (like `'#\A[A-Za-z]+\.php\z#'`) or a
pseudo-regex similar to `glob()` (like `'*.css'`).

If a `$scope` is provided then only files in or under that directory will be
considered (i.e. files outside of `$scope` are always retained). When no scope
is provided then all files are subject.

Examples:

```
<?php

use CodeIgniter\Files\FileCollection;

$files = new FileCollection();
$files->add(APPPATH . 'Config', true); // Adds all Config files and directories

$files->removePattern('*tion.php'); // Would remove Encryption.php, Validation.php, and boot/production.php
$files->removePattern('*tion.php', APPPATH . 'Config/boot'); // Would only remove boot/production.php

$files->retainPattern('#A.+php$#'); // Would keep only Autoload.php
$files->retainPattern('#d.+php$#', APPPATH . 'Config/boot'); // Would keep everything but boot/production.php and boot/testing.php
```

### [retainMultiplePatterns(array $pattern, string $scope = null)](#id15)[](#retainmultiplepatterns-array-pattern-string-scope-null "Link to this heading")

Provides the same functionality as `retainPattern()` but accepts an array of patterns to retain files from all patterns.

Example:

```
<?php

$files->retainMultiplePatterns(['*.css', '*.js']); // Would keep only *.css and *.js files
```

## [Retrieving Files](#id16)[](#retrieving-files "Link to this heading")

### [get(): string[]](#id17)[](#get-string "Link to this heading")

Returns an array of all the loaded input files.

Note

`FileCollection` is an `IteratorAggregate` so you can work with it
directly (e.g. `foreach ($collection as $file)`).
