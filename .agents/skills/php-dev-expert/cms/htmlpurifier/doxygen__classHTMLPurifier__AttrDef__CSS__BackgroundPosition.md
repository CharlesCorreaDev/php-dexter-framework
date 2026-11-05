# HTMLPurifier: HTMLPurifier_AttrDef_CSS_BackgroundPosition Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrDef__CSS__BackgroundPosition.html

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

HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition Class Reference

Validates the value of background-position.
[More...](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md#details)

Inheritance diagram for HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition:

![](classHTMLPurifier__AttrDef__CSS__BackgroundPosition.png)

[List of all members.](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md#a24aa0616368504ddd0357e3692ae7c21) () |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md#a330c8e7bba0fb4f241bdc73b93af21b6) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md#a24aa0616368504ddd0357e3692ae7c21) () |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md#a330c8e7bba0fb4f241bdc73b93af21b6) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
| Protected Attributes | |
|  | [$length](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md#ad61228f5654ccd804ec390999c5b6bf5) |
|  | [$percentage](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md#af726a396376661d1b536ef8cf3c17150) |

---

## Detailed Description

Validates the value of background-position.

Definition at line [44](doxygen__BackgroundPosition_8php_source.md#l00044) of file [BackgroundPosition.php](doxygen__BackgroundPosition_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition::\_\_construct | ( |  | ) |  |

Definition at line [50](doxygen__BackgroundPosition_8php_source.md#l00050) of file [BackgroundPosition.php](doxygen__BackgroundPosition_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition::\_\_construct | ( |  | ) |  |

Definition at line [8869](doxygen__HTMLPurifier_8standalone_8php_source.md#l08869) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition::validate | ( | $ | *string*, |
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

Definition at line [55](doxygen__BackgroundPosition_8php_source.md#l00055) of file [BackgroundPosition.php](doxygen__BackgroundPosition_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition::validate | ( | $ | *string*, |
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

Definition at line [8874](doxygen__HTMLPurifier_8standalone_8php_source.md#l08874) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition::$length `[protected]` |

Definition at line [47](doxygen__BackgroundPosition_8php_source.md#l00047) of file [BackgroundPosition.php](doxygen__BackgroundPosition_8php_source.md).

|  |
| --- |
| HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition::$percentage `[protected]` |

Definition at line [48](doxygen__BackgroundPosition_8php_source.md#l00048) of file [BackgroundPosition.php](doxygen__BackgroundPosition_8php_source.md).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/[BackgroundPosition.php](doxygen__BackgroundPosition_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md)
- Generated on Wed Jan 18 2012 22:58:19 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
