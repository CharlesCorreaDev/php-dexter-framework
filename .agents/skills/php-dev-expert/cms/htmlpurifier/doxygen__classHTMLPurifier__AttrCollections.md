# HTMLPurifier: HTMLPurifier_AttrCollections Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrCollections.html

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
[Public Attributes](#pub-attribs)

HTMLPurifier\_AttrCollections Class Reference

Defines common attribute collections that modules reference.
[More...](doxygen__classHTMLPurifier__AttrCollections.md#details)

[List of all members.](doxygen__classHTMLPurifier__AttrCollections-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrCollections.md#a96838bb7ed7cc2ca7d5297570b7d783b) ($attr\_types, $modules) |
|  | Performs all expansions on internal data for use by other inclusions It also collects all attribute collection extensions from modules. |
|  | [performInclusions](doxygen__classHTMLPurifier__AttrCollections.md#a8ce2225ead783c0c9cfb48735d965e33) (&$attr) |
|  | Takes a reference to an attribute associative array and performs all inclusions specified by the zero index. |
|  | [expandIdentifiers](doxygen__classHTMLPurifier__AttrCollections.md#a206c1287255373a31cb8534da5eb7c5d) (&$attr, $attr\_types) |
|  | Expands all string identifiers in an attribute array by replacing them with the appropriate values inside [HTMLPurifier\_AttrTypes](doxygen__classHTMLPurifier__AttrTypes.md "Provides lookup array of attribute types to HTMLPurifier_AttrDef objects."). |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrCollections.md#a96838bb7ed7cc2ca7d5297570b7d783b) ($attr\_types, $modules) |
|  | Performs all expansions on internal data for use by other inclusions It also collects all attribute collection extensions from modules. |
|  | [performInclusions](doxygen__classHTMLPurifier__AttrCollections.md#a8ce2225ead783c0c9cfb48735d965e33) (&$attr) |
|  | Takes a reference to an attribute associative array and performs all inclusions specified by the zero index. |
|  | [expandIdentifiers](doxygen__classHTMLPurifier__AttrCollections.md#a206c1287255373a31cb8534da5eb7c5d) (&$attr, $attr\_types) |
|  | Expands all string identifiers in an attribute array by replacing them with the appropriate values inside [HTMLPurifier\_AttrTypes](doxygen__classHTMLPurifier__AttrTypes.md "Provides lookup array of attribute types to HTMLPurifier_AttrDef objects."). |
| Public Attributes | |
|  | [$info](doxygen__classHTMLPurifier__AttrCollections.md#a588bcab5f5978c50456dbba61e695900) = array() |
|  | Associative array of attribute collections, indexed by name. |

---

## Detailed Description

Defines common attribute collections that modules reference.

Definition at line [7](doxygen__AttrCollections_8php_source.md#l00007) of file [AttrCollections.php](doxygen__AttrCollections_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrCollections::\_\_construct | ( | $ | *attr\_types*, |
|  |  | $ | *modules* |
|  | ) |  |  |

Performs all expansions on internal data for use by other inclusions It also collects all attribute collection extensions from modules.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $attr\_types | [HTMLPurifier\_AttrTypes](doxygen__classHTMLPurifier__AttrTypes.md "Provides lookup array of attribute types to HTMLPurifier_AttrDef objects.") instance |
    | $modules | Hash array of [HTMLPurifier\_HTMLModule](doxygen__classHTMLPurifier__HTMLModule.md "Represents an XHTML 1.1 module, with information on elements, tags and attributes.") members |

Definition at line [22](doxygen__AttrCollections_8php_source.md#l00022) of file [AttrCollections.php](doxygen__AttrCollections_8php_source.md).

References [expandIdentifiers()](doxygen__AttrCollections_8php_source.md#l00082), and [performInclusions()](doxygen__AttrCollections_8php_source.md#l00054).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrCollections::\_\_construct | ( | $ | *attr\_types*, |
|  |  | $ | *modules* |
|  | ) |  |  |

Performs all expansions on internal data for use by other inclusions It also collects all attribute collection extensions from modules.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $attr\_types | [HTMLPurifier\_AttrTypes](doxygen__classHTMLPurifier__AttrTypes.md "Provides lookup array of attribute types to HTMLPurifier_AttrDef objects.") instance |
    | $modules | Hash array of [HTMLPurifier\_HTMLModule](doxygen__classHTMLPurifier__HTMLModule.md "Represents an XHTML 1.1 module, with information on elements, tags and attributes.") members |

Definition at line [280](doxygen__HTMLPurifier_8standalone_8php_source.md#l00280) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [expandIdentifiers()](doxygen__AttrCollections_8php_source.md#l00082), and [performInclusions()](doxygen__AttrCollections_8php_source.md#l00054).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrCollections::expandIdentifiers | ( | &$ | *attr*, |
|  |  | $ | *attr\_types* |
|  | ) |  |  |

Expands all string identifiers in an attribute array by replacing them with the appropriate values inside [HTMLPurifier\_AttrTypes](doxygen__classHTMLPurifier__AttrTypes.md "Provides lookup array of attribute types to HTMLPurifier_AttrDef objects.").

**Parameters:**
:   |  |  |
    | --- | --- |
    | &$attr | Reference to attribute array |
    | $attr\_types | [HTMLPurifier\_AttrTypes](doxygen__classHTMLPurifier__AttrTypes.md "Provides lookup array of attribute types to HTMLPurifier_AttrDef objects.") instance |

Definition at line [82](doxygen__AttrCollections_8php_source.md#l00082) of file [AttrCollections.php](doxygen__AttrCollections_8php_source.md).

References [$def](doxygen__test2_8php_source.md#l00010).

Referenced by [\_\_construct()](doxygen__HTMLPurifier_8standalone_8php_source.md#l00280).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrCollections::expandIdentifiers | ( | &$ | *attr*, |
|  |  | $ | *attr\_types* |
|  | ) |  |  |

Expands all string identifiers in an attribute array by replacing them with the appropriate values inside [HTMLPurifier\_AttrTypes](doxygen__classHTMLPurifier__AttrTypes.md "Provides lookup array of attribute types to HTMLPurifier_AttrDef objects.").

**Parameters:**
:   |  |  |
    | --- | --- |
    | &$attr | Reference to attribute array |
    | $attr\_types | [HTMLPurifier\_AttrTypes](doxygen__classHTMLPurifier__AttrTypes.md "Provides lookup array of attribute types to HTMLPurifier_AttrDef objects.") instance |

Definition at line [340](doxygen__HTMLPurifier_8standalone_8php_source.md#l00340) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$def](doxygen__test2_8php_source.md#l00010).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrCollections::performInclusions | ( | &$ | *attr* | ) |  |

Takes a reference to an attribute associative array and performs all inclusions specified by the zero index.

**Parameters:**
:   |  |  |
    | --- | --- |
    | &$attr | Reference to attribute array |

Definition at line [312](doxygen__HTMLPurifier_8standalone_8php_source.md#l00312) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrCollections::performInclusions | ( | &$ | *attr* | ) |  |

Takes a reference to an attribute associative array and performs all inclusions specified by the zero index.

**Parameters:**
:   |  |  |
    | --- | --- |
    | &$attr | Reference to attribute array |

Definition at line [54](doxygen__AttrCollections_8php_source.md#l00054) of file [AttrCollections.php](doxygen__AttrCollections_8php_source.md).

Referenced by [\_\_construct()](doxygen__HTMLPurifier_8standalone_8php_source.md#l00280).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_AttrCollections::$info = array() |

Associative array of attribute collections, indexed by name.

Definition at line [13](doxygen__AttrCollections_8php_source.md#l00013) of file [AttrCollections.php](doxygen__AttrCollections_8php_source.md).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/[AttrCollections.php](doxygen__AttrCollections_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrCollections](doxygen__classHTMLPurifier__AttrCollections.md)
- Generated on Wed Jan 18 2012 22:58:18 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
