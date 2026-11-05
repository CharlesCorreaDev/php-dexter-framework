# HTMLPurifier: HTMLPurifier_AttrDef_Clone Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrDef__Clone.html

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

HTMLPurifier\_AttrDef\_Clone Class Reference

Dummy AttrDef that mimics another AttrDef, BUT it generates clones with make.
[More...](doxygen__classHTMLPurifier__AttrDef__Clone.md#details)

Inheritance diagram for HTMLPurifier\_AttrDef\_Clone:

![](classHTMLPurifier__AttrDef__Clone.png)

[List of all members.](doxygen__classHTMLPurifier__AttrDef__Clone-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__Clone.md#a8548c9a4eab4797e4d19fba593e7a2e3) ($clone) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__Clone.md#ace270eb306c3cf6fcc966317cd54f8f9) ($v, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [make](doxygen__classHTMLPurifier__AttrDef__Clone.md#a89b35bf7694347b513cc93073ee8b846) ($string) |
|  | Factory method for creating this class from a string. |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__Clone.md#a8548c9a4eab4797e4d19fba593e7a2e3) ($clone) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__Clone.md#ace270eb306c3cf6fcc966317cd54f8f9) ($v, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [make](doxygen__classHTMLPurifier__AttrDef__Clone.md#a89b35bf7694347b513cc93073ee8b846) ($string) |
|  | Factory method for creating this class from a string. |
| Protected Attributes | |
|  | [$clone](doxygen__classHTMLPurifier__AttrDef__Clone.md#a5d374993e70cf416ba63e8c2424ad79a) |
|  | What we're cloning. |

---

## Detailed Description

Dummy AttrDef that mimics another AttrDef, BUT it generates clones with make.

Definition at line [7](doxygen__Clone_8php_source.md#l00007) of file [Clone.php](doxygen__Clone_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_Clone::\_\_construct | ( | $ | *clone* | ) |  |

Definition at line [14](doxygen__Clone_8php_source.md#l00014) of file [Clone.php](doxygen__Clone_8php_source.md).

References [$clone](doxygen__Clone_8php_source.md#l00012).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_Clone::\_\_construct | ( | $ | *clone* | ) |  |

Definition at line [8281](doxygen__HTMLPurifier_8standalone_8php_source.md#l08281) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$clone](doxygen__Clone_8php_source.md#l00012).

---

## Member Function Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_Clone::make | ( | $ | *string* | ) |  |

Factory method for creating this class from a string.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $string | String construction info |

**Returns:**
:   Created AttrDef object corresponding to $string

Reimplemented from [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md#ac18259010bd7a7755cd4e1b47b54a549).

Definition at line [22](doxygen__Clone_8php_source.md#l00022) of file [Clone.php](doxygen__Clone_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_Clone::make | ( | $ | *string* | ) |  |

Factory method for creating this class from a string.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $string | String construction info |

**Returns:**
:   Created AttrDef object corresponding to $string

Reimplemented from [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md#ac18259010bd7a7755cd4e1b47b54a549).

Definition at line [8289](doxygen__HTMLPurifier_8standalone_8php_source.md#l08289) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_Clone::validate | ( | $ | *string*, |
|  |  | $ | *config*, |
|  |  | $ | *context* |
|  | ) |  |  |

Validates and cleans passed string according to a definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $string | String to be validated and cleaned. |
    | $config | Mandatory [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object. |
    | $context | Mandatory HTMLPurifier\_AttrContext object. |

Reimplemented from [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md#ace1ff1a828cc98b27018cf894d1deca2).

Definition at line [8285](doxygen__HTMLPurifier_8standalone_8php_source.md#l08285) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_Clone::validate | ( | $ | *string*, |
|  |  | $ | *config*, |
|  |  | $ | *context* |
|  | ) |  |  |

Validates and cleans passed string according to a definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $string | String to be validated and cleaned. |
    | $config | Mandatory [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object. |
    | $context | Mandatory HTMLPurifier\_AttrContext object. |

Reimplemented from [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md#ace1ff1a828cc98b27018cf894d1deca2).

Definition at line [18](doxygen__Clone_8php_source.md#l00018) of file [Clone.php](doxygen__Clone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_AttrDef\_Clone::$clone `[protected]` |

What we're cloning.

Definition at line [12](doxygen__Clone_8php_source.md#l00012) of file [Clone.php](doxygen__Clone_8php_source.md).

Referenced by [\_\_construct()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08281).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/AttrDef/[Clone.php](doxygen__Clone_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrDef\_Clone](doxygen__classHTMLPurifier__AttrDef__Clone.md)
- Generated on Wed Jan 18 2012 22:58:19 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
