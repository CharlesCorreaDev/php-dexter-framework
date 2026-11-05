# HTMLPurifier: FSTools Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classFSTools.html

---

|  |
| --- |
| HTMLPurifier 4.4.0 |

- [Main Page](doxygen__index.md)
- [Related Pages](doxygen__pages.md)
- [Classes](doxygen__annotated.md)
- [Files](doxygen__files.md)

- [Class List](doxygen__annotated.md)
- [Class Hierarchy](doxygen__hierarchy.md)
- [Class Members](doxygen__functions.md)

[Public Member Functions](#pub-methods) |
[Static Public Member Functions](#pub-static-methods) |
[Static Private Attributes](#pri-static-attribs)

FSTools Class Reference

Filesystem tools not provided by default; can recursively create, copy and delete folders.
[More...](doxygen__classFSTools.md#details)

[List of all members.](doxygen__classFSTools-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [mkdirr](doxygen__classFSTools.md#a20f631efdc07049c40462e4235198a26) ($folder) |
|  | Recursively creates a directory. |
|  | [copyr](doxygen__classFSTools.md#a52285c51631f6d21d332a6ea6f8cfacf) ($source, $dest) |
|  | Copy a file, or recursively copy a folder and its contents; modified so that copied files, if PHP, have includes removed. |
|  | [copyable](doxygen__classFSTools.md#a6c153e6565e3ef1da213583301fc133d) ($file) |
|  | Overloadable function that tests a filename for copyability. |
|  | [rmdirr](doxygen__classFSTools.md#afd689a410de4ba3d5689e713ed2cb820) ($dirname) |
|  | Delete a file, or a folder and its contents. |
|  | [globr](doxygen__classFSTools.md#a7d01eef8016faa3a347d5294f54f023b) ($dir, $pattern, $flags=NULL) |
|  | Recursively globs a directory. |
|  | [\_\_call](doxygen__classFSTools.md#ab1887d8d297a8a107fbc38754e2faf1a) ($name, $args) |
|  | Allows for PHP functions to be called and be stubbed. |
| Static Public Member Functions | |
| static | [singleton](doxygen__classFSTools.md#ab72687e5bb6155b8ca2e4b227d374a11) () |
|  | Returns a global instance of [FSTools](doxygen__classFSTools.md "Filesystem tools not provided by default; can recursively create, copy and delete folders..."). |
| static | [setSingleton](doxygen__classFSTools.md#a69a6890a1674ec0c39ff74d4aa6e7f00) ($singleton) |
|  | Sets our global singleton to something else; useful for overloading functions. |
| Static Private Attributes | |
| static | [$singleton](doxygen__classFSTools.md#aa7d8f37e42c789788bc34bf518618930) |

---

## Detailed Description

Filesystem tools not provided by default; can recursively create, copy and delete folders.

Some template methods are provided for extensibility.

**Note:**
:   This class must be instantiated to be used, although it does not maintain state.

Definition at line [10](doxygen__FSTools_8php_source.md#l00010) of file [FSTools.php](doxygen__FSTools_8php_source.md).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| FSTools::\_\_call | ( | $ | *name*, |
|  |  | $ | *args* |
|  | ) |  |  |

Allows for PHP functions to be called and be stubbed.

**Warning:**
:   This function will not work for functions that need to pass references; manually define a stub function for those.

Definition at line [151](doxygen__FSTools_8php_source.md#l00151) of file [FSTools.php](doxygen__FSTools_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| FSTools::copyable | ( | $ | *file* | ) |  |

Overloadable function that tests a filename for copyability.

By default, everything should be copied; you can restrict things to ignore hidden files, unreadable files, etc. This function applies to [copyr()](doxygen__classFSTools.md#a52285c51631f6d21d332a6ea6f8cfacf "Copy a file, or recursively copy a folder and its contents; modified so that copied files...").

Definition at line [95](doxygen__FSTools_8php_source.md#l00095) of file [FSTools.php](doxygen__FSTools_8php_source.md).

Referenced by [copyr()](doxygen__FSTools_8php_source.md#l00060).

|  |  |  |  |
| --- | --- | --- | --- |
| FSTools::copyr | ( | $ | *source*, |
|  |  | $ | *dest* |
|  | ) |  |  |

Copy a file, or recursively copy a folder and its contents; modified so that copied files, if PHP, have includes removed.

**Note:**
:   Adapted from <http://aidanlister.com/repos/v/function.copyr.php>

Definition at line [60](doxygen__FSTools_8php_source.md#l00060) of file [FSTools.php](doxygen__FSTools_8php_source.md).

References [copyable()](doxygen__FSTools_8php_source.md#l00095).

|  |  |  |  |
| --- | --- | --- | --- |
| FSTools::globr | ( | $ | *dir*, |
|  |  | $ | *pattern*, |
|  |  | $ | *flags* = `NULL` |
|  | ) |  |  |

Recursively globs a directory.

Definition at line [134](doxygen__FSTools_8php_source.md#l00134) of file [FSTools.php](doxygen__FSTools_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| FSTools::mkdirr | ( | $ | *folder* | ) |  |

Recursively creates a directory.

**Parameters:**
:   |  |  |  |
    | --- | --- | --- |
    | string | $folder | Name of folder to create |

**Note:**
:   Adapted from the PHP manual comment 76612

Definition at line [36](doxygen__FSTools_8php_source.md#l00036) of file [FSTools.php](doxygen__FSTools_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| FSTools::rmdirr | ( | $ | *dirname* | ) |  |

Delete a file, or a folder and its contents.

**Note:**
:   Adapted from <http://aidanlister.com/repos/v/function.rmdirr.php>

Definition at line [103](doxygen__FSTools_8php_source.md#l00103) of file [FSTools.php](doxygen__FSTools_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| static FSTools::setSingleton | ( | $ | *singleton* | ) | `[static]` |

Sets our global singleton to something else; useful for overloading functions.

Definition at line [27](doxygen__FSTools_8php_source.md#l00027) of file [FSTools.php](doxygen__FSTools_8php_source.md).

References [$singleton](doxygen__FSTools_8php_source.md#l00013).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| static FSTools::singleton | ( |  | ) | `[static]` |

Returns a global instance of [FSTools](doxygen__classFSTools.md "Filesystem tools not provided by default; can recursively create, copy and delete folders...").

Definition at line [18](doxygen__FSTools_8php_source.md#l00018) of file [FSTools.php](doxygen__FSTools_8php_source.md).

References [$singleton](doxygen__FSTools_8php_source.md#l00013).

Referenced by [FSTools\_File::\_\_construct()](doxygen__File_8php_source.md#l00026).

---

## Member Data Documentation

|  |
| --- |
| FSTools::$singleton `[static, private]` |

Definition at line [13](doxygen__FSTools_8php_source.md#l00013) of file [FSTools.php](doxygen__FSTools_8php_source.md).

Referenced by [setSingleton()](doxygen__FSTools_8php_source.md#l00027), and [singleton()](doxygen__FSTools_8php_source.md#l00018).

---

The documentation for this class was generated from the following file:

- /home/ezyang/Dev/htmlpurifier/extras/[FSTools.php](doxygen__FSTools_8php_source.md)

- [FSTools](doxygen__classFSTools.md)
- Generated on Wed Jan 18 2012 22:58:18 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
