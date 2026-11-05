# Working with Files — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/libraries/files.html

---

# Working with Files[](#working-with-files "Link to this heading")

CodeIgniter provides a File class that wraps the [SplFileInfo](https://www.php.net/manual/en/class.splfileinfo.php) class
and provides some additional convenience methods. This class is the base class for [uploaded files](libraries__uploaded_files.md)
and [images](libraries__images.md).

## [Getting a File instance](#id1)[](#getting-a-file-instance "Link to this heading")

You create a new File instance by passing in the path to the file in the constructor.

```
$file = new \CodeIgniter\Files\File($path);
```

By default, the file does not need to exist. However, you can pass an additional argument of `true`
to check that the file exists and throw `FileNotFoundException()` if it does not.

## [Taking Advantage of Spl](#id2)[](#taking-advantage-of-spl "Link to this heading")

Once you have an instance, you have the full power of the SplFileInfo class at the ready, including:

```
// Get the file's basename
echo $file->getBasename();
// Get last modified time
echo $file->getMTime();
// Get the true real path
echo $file->getRealPath();
// Get the file permissions
echo $file->getPerms();

// Write CSV rows to it.
if ($file->isWritable()) {
    $csv = $file->openFile('w');

    foreach ($rows as $row) {
        $csv->fputcsv($row);
    }
}
```

## [New Features](#id3)[](#new-features "Link to this heading")

In addition to all of the methods in the SplFileInfo class, you get some new tools.

### [getRandomName()](#id4)[](#getrandomname "Link to this heading")

You can generate a cryptographically secure random filename, with the current timestamp prepended, with the `getRandomName()`
method. This is especially useful to rename files when moving it so that the filename is unguessable:

```
// Generates something like: 1465965676_385e33f741.jpg
$newName = $file->getRandomName();
```

### [getSize()](#id5)[](#getsize "Link to this heading")

Returns the size of the file in bytes:

```
$size = $file->getSize(); // 256901
```

A `RuntimeException` will be thrown if the file does not exist or an error occurs.

### [getSizeByUnit()](#id6)[](#getsizebyunit "Link to this heading")

Deprecated since version 4.6.0.

Returns the size of the file default in bytes. You can pass in either `'kb'` or `'mb'` as the first parameter to get
the results in kibibytes or mebibytes, respectively:

```
$bytes     = $file->getSizeByUnit(); // 256901
$kilobytes = $file->getSizeByUnit('kb'); // 250.880
$megabytes = $file->getSizeByUnit('mb'); // 0.245
```

A `RuntimeException` will be thrown if the file does not exist or an error occurs.

### [getSizeByBinaryUnit()](#id7)[](#getsizebybinaryunit "Link to this heading")

Added in version 4.6.0.

Returns the size of the file default in bytes. You can pass in different FileSizeUnit values as the first parameter to get
the results in kibibytes, mebibytes etc. respectively. You can pass in a precision value as the second parameter to define
the amount of decimal places.

```
$bytes     = $file->getSizeByBinaryUnit(); // 256901
$kibibytes = $file->getSizeByBinaryUnit(FileSizeUnit::KB); // 250.880
$mebibytes = $file->getSizeByBinaryUnit(FileSizeUnit::MB); // 0.245
```

A `RuntimeException` will be thrown if the file does not exist or an error occurs.

### [getSizeByMetricUnit()](#id8)[](#getsizebymetricunit "Link to this heading")

Added in version 4.6.0.

Returns the size of the file default in bytes. You can pass in different FileSizeUnit values as the first parameter to get
the results in kilobytes, megabytes etc. respectively. You can pass in a precision value as the second parameter to define
the amount of decimal places.

```
$bytes     = $file->getSizeByMetricUnit(); // 256901
$kilobytes = $file->getSizeByMetricUnit(FileSizeUnit::KB); // 256.901
$megabytes = $file->getSizeByMetricUnit(FileSizeUnit::MB); // 0.256
```

A `RuntimeException` will be thrown if the file does not exist or an error occurs.

### [getMimeType()](#id9)[](#getmimetype "Link to this heading")

Retrieve the media type (mime type) of the file. Uses methods that are considered as secure as possible when determining
the type of file:

```
$type = $file->getMimeType();

echo $type; // image/png
```

### [guessExtension()](#id10)[](#guessextension "Link to this heading")

Attempts to determine the file extension based on the trusted `getMimeType()` method. If the mime type is unknown,
will return null. This is often a more trusted source than simply using the extension provided by the filename. Uses
the values in **app/Config/Mimes.php** to determine extension:

```
// Returns 'jpg' (WITHOUT the period)
$ext = $file->guessExtension();
```

### [Moving Files](#id11)[](#moving-files "Link to this heading")

Each file can be moved to its new location with the aptly named `move()` method. This takes the directory to move
the file to as the first parameter:

```
$file->move(WRITEPATH . 'uploads');
```

By default, the original filename was used. You can specify a new filename by passing it as the second parameter:

```
$newName = $file->getRandomName();
$file->move(WRITEPATH . 'uploads', $newName);
```

The `move()` method returns a new File instance that for the relocated file, so you must capture the result if the
resulting location is needed:

```
$file = $file->move(WRITEPATH . 'uploads');
```
