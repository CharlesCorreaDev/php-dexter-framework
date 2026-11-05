# HTMLPurifier: FSTools_File Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classFSTools__File.html

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
[Protected Attributes](#pro-attribs)

FSTools\_File Class Reference

Represents a file in the filesystem.
[More...](doxygen__classFSTools__File.md#details)

[List of all members.](doxygen__classFSTools__File-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classFSTools__File.md#ae9e9e91959a55a3e903e497f2817130b) ($name, $fs=false) |
|  | Filename of file you wish to instantiate. |
|  | [getName](doxygen__classFSTools__File.md#ac9e4597ae6c43056b9f6f52d96982e3e) () |
|  | Returns the filename of the file. |
|  | [getDirectory](doxygen__classFSTools__File.md#a425a202639e917e9e5cfe46dcca3928d) () |
|  | Returns directory of the file without trailing slash. |
|  | [get](doxygen__classFSTools__File.md#a0b25c10279b67d191912e8de618aa64c) () |
|  | Retrieves the contents of a file. |
|  | [write](doxygen__classFSTools__File.md#a1f2b09ba999c32d267d58dccd83e8d19) ($contents) |
|  | Writes contents to a file, creates new file if necessary. |
|  | [delete](doxygen__classFSTools__File.md#a29f88bef2defda3366b4beb9baee9b4b) () |
|  | Deletes the file. |
|  | [exists](doxygen__classFSTools__File.md#a758d5886cc4a6bbb0e3868f7f043f8ad) () |
|  | Returns true if file exists and is a file. |
|  | [getMTime](doxygen__classFSTools__File.md#afe50b54cb082acd9639468c0c1b292b2) () |
|  | Returns last file modification time. |
|  | [chmod](doxygen__classFSTools__File.md#ad6fd9bb81c2e60ec3d50a8a9854722b9) ($octal\_code) |
|  | Chmod a file. |
|  | [open](doxygen__classFSTools__File.md#ac5c96a5de941103d98b84908e673cad0) ($mode) |
|  | Opens file's handle. |
|  | [close](doxygen__classFSTools__File.md#afc88b5d14c3afa3300f3b6facce84903) () |
|  | Closes file's handle. |
|  | [getLine](doxygen__classFSTools__File.md#ad58edb07274b87e5268029184b3b0213) ($length=null) |
|  | Retrieves a line from an open file, with optional max length $length. |
|  | [getChar](doxygen__classFSTools__File.md#a34bfb24dfcd3815cf1ba8ba1736d227c) () |
|  | Retrieves a character from an open file. |
|  | [read](doxygen__classFSTools__File.md#a2f5b634edd27233e746eb3e0b14077af) ($length) |
|  | Retrieves an $length bytes of data from an open data. |
|  | [put](doxygen__classFSTools__File.md#a9ad26298312d0137e78da7dd1293157f) ($string) |
|  | Writes to an open file. |
|  | [eof](doxygen__classFSTools__File.md#a6c33e30b43080b32512d364ce0b30f37) () |
|  | Returns TRUE if the end of the file has been reached. |
|  | [\_\_destruct](doxygen__classFSTools__File.md#a1048efe351c0ea16808134d9a66c813c) () |
| Protected Attributes | |
|  | [$name](doxygen__classFSTools__File.md#a4a60f5eb0bfa0c806e3022522066b316) |
|  | Filename of file this object represents. |
|  | [$handle](doxygen__classFSTools__File.md#a0b73197faed2780d8a9fdecd80fef952) = false |
|  | Handle for the file. |
|  | [$fs](doxygen__classFSTools__File.md#aa605b4e17f205df14dc096dbf077050e) |
|  | Instance of [FSTools](doxygen__classFSTools.md "Filesystem tools not provided by default; can recursively create, copy and delete folders...") for interfacing with filesystem. |

---

## Detailed Description

Represents a file in the filesystem.

**Warning:**
:   Be sure to distinguish between [get()](doxygen__classFSTools__File.md#a0b25c10279b67d191912e8de618aa64c "Retrieves the contents of a file.") and [write()](doxygen__classFSTools__File.md#a1f2b09ba999c32d267d58dccd83e8d19 "Writes contents to a file, creates new file if necessary.") versus [read()](doxygen__classFSTools__File.md#a2f5b634edd27233e746eb3e0b14077af "Retrieves an $length bytes of data from an open data.") and [put()](doxygen__classFSTools__File.md#a9ad26298312d0137e78da7dd1293157f "Writes to an open file."), the former operates on the entire file, while the latter operates on a handle.

Definition at line [10](doxygen__File_8php_source.md#l00010) of file [File.php](doxygen__File_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| FSTools\_File::\_\_construct | ( | $ | *name*, |
|  |  | $ | *fs* = `false` |
|  | ) |  |  |

Filename of file you wish to instantiate.

**Note:**
:   This file need not exist

Definition at line [26](doxygen__File_8php_source.md#l00026) of file [File.php](doxygen__File_8php_source.md).

References [$fs](doxygen__File_8php_source.md#l00020), [$name](doxygen__File_8php_source.md#l00014), and [FSTools::singleton()](doxygen__FSTools_8php_source.md#l00018).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| FSTools\_File::\_\_destruct | ( |  | ) |  |

Definition at line [120](doxygen__File_8php_source.md#l00120) of file [File.php](doxygen__File_8php_source.md).

References [close()](doxygen__File_8php_source.md#l00082).

---

## Member Function Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| FSTools\_File::chmod | ( | $ | *octal\_code* | ) |  |

Chmod a file.

**Note:**
:   We ignore errors because of some weird owner trickery due to SVN duality

Definition at line [70](doxygen__File_8php_source.md#l00070) of file [File.php](doxygen__File_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| FSTools\_File::close | ( |  | ) |  |

Closes file's handle.

Definition at line [82](doxygen__File_8php_source.md#l00082) of file [File.php](doxygen__File_8php_source.md).

Referenced by [\_\_destruct()](doxygen__File_8php_source.md#l00120), and [open()](doxygen__File_8php_source.md#l00075).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| FSTools\_File::delete | ( |  | ) |  |

Deletes the file.

Definition at line [51](doxygen__File_8php_source.md#l00051) of file [File.php](doxygen__File_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| FSTools\_File::eof | ( |  | ) |  |

Returns TRUE if the end of the file has been reached.

Definition at line [115](doxygen__File_8php_source.md#l00115) of file [File.php](doxygen__File_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| FSTools\_File::exists | ( |  | ) |  |

Returns true if file exists and is a file.

Definition at line [56](doxygen__File_8php_source.md#l00056) of file [File.php](doxygen__File_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| FSTools\_File::get | ( |  | ) |  |

Retrieves the contents of a file.

**[Todo:](doxygen__todo.md#_todo000002)**
:   Throw an exception if file doesn't exist

Definition at line [41](doxygen__File_8php_source.md#l00041) of file [File.php](doxygen__File_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| FSTools\_File::getChar | ( |  | ) |  |

Retrieves a character from an open file.

Definition at line [97](doxygen__File_8php_source.md#l00097) of file [File.php](doxygen__File_8php_source.md).

References [open()](doxygen__File_8php_source.md#l00075).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| FSTools\_File::getDirectory | ( |  | ) |  |

Returns directory of the file without trailing slash.

Definition at line [35](doxygen__File_8php_source.md#l00035) of file [File.php](doxygen__File_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| FSTools\_File::getLine | ( | $ | *length* = `null` | ) |  |

Retrieves a line from an open file, with optional max length $length.

Definition at line [90](doxygen__File_8php_source.md#l00090) of file [File.php](doxygen__File_8php_source.md).

References [open()](doxygen__File_8php_source.md#l00075).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| FSTools\_File::getMTime | ( |  | ) |  |

Returns last file modification time.

Definition at line [61](doxygen__File_8php_source.md#l00061) of file [File.php](doxygen__File_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| FSTools\_File::getName | ( |  | ) |  |

Returns the filename of the file.

Definition at line [32](doxygen__File_8php_source.md#l00032) of file [File.php](doxygen__File_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| FSTools\_File::open | ( | $ | *mode* | ) |  |

Opens file's handle.

Definition at line [75](doxygen__File_8php_source.md#l00075) of file [File.php](doxygen__File_8php_source.md).

References [close()](doxygen__File_8php_source.md#l00082).

Referenced by [getChar()](doxygen__File_8php_source.md#l00097), [getLine()](doxygen__File_8php_source.md#l00090), [put()](doxygen__File_8php_source.md#l00109), and [read()](doxygen__File_8php_source.md#l00103).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| FSTools\_File::put | ( | $ | *string* | ) |  |

Writes to an open file.

Definition at line [109](doxygen__File_8php_source.md#l00109) of file [File.php](doxygen__File_8php_source.md).

References [open()](doxygen__File_8php_source.md#l00075).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| FSTools\_File::read | ( | $ | *length* | ) |  |

Retrieves an $length bytes of data from an open data.

Definition at line [103](doxygen__File_8php_source.md#l00103) of file [File.php](doxygen__File_8php_source.md).

References [open()](doxygen__File_8php_source.md#l00075).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| FSTools\_File::write | ( | $ | *contents* | ) |  |

Writes contents to a file, creates new file if necessary.

Definition at line [46](doxygen__File_8php_source.md#l00046) of file [File.php](doxygen__File_8php_source.md).

---

## Member Data Documentation

|  |
| --- |
| FSTools\_File::$fs `[protected]` |

Instance of [FSTools](doxygen__classFSTools.md "Filesystem tools not provided by default; can recursively create, copy and delete folders...") for interfacing with filesystem.

Definition at line [20](doxygen__File_8php_source.md#l00020) of file [File.php](doxygen__File_8php_source.md).

Referenced by [\_\_construct()](doxygen__File_8php_source.md#l00026).

|  |
| --- |
| FSTools\_File::$handle = false `[protected]` |

Handle for the file.

Definition at line [17](doxygen__File_8php_source.md#l00017) of file [File.php](doxygen__File_8php_source.md).

|  |
| --- |
| FSTools\_File::$name `[protected]` |

Filename of file this object represents.

Definition at line [14](doxygen__File_8php_source.md#l00014) of file [File.php](doxygen__File_8php_source.md).

Referenced by [\_\_construct()](doxygen__File_8php_source.md#l00026).

---

The documentation for this class was generated from the following file:

- /home/ezyang/Dev/htmlpurifier/extras/FSTools/[File.php](doxygen__File_8php_source.md)

- [FSTools\_File](doxygen__classFSTools__File.md)
- Generated on Wed Jan 18 2012 22:58:18 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
