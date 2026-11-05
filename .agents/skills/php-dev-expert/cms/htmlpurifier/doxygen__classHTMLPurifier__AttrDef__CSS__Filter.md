# HTMLPurifier: HTMLPurifier_AttrDef_CSS_Filter Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrDef__CSS__Filter.html

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

HTMLPurifier\_AttrDef\_CSS\_Filter Class Reference

Microsoft's proprietary filter: CSS property.
[More...](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md#details)

Inheritance diagram for HTMLPurifier\_AttrDef\_CSS\_Filter:

![](classHTMLPurifier__AttrDef__CSS__Filter.png)

[List of all members.](doxygen__classHTMLPurifier__AttrDef__CSS__Filter-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md#a1378e49320549442863b7469db7e4c10) () |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md#a8f258367099bd1f1b6b900165e1f5e4d) ($value, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md#a1378e49320549442863b7469db7e4c10) () |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md#a8f258367099bd1f1b6b900165e1f5e4d) ($value, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
| Protected Attributes | |
|  | [$intValidator](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md#a3871246e8ca0c94a91efddeb818d45af) |

---

## Detailed Description

Microsoft's proprietary filter: CSS property.

**Note:**
:   Currently supports the alpha filter. In the future, this will probably need an extensible framework

Definition at line [8](doxygen__AttrDef_2CSS_2Filter_8php_source.md#l00008) of file [Filter.php](doxygen__AttrDef_2CSS_2Filter_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Filter::\_\_construct | ( |  | ) |  |

Definition at line [13](doxygen__AttrDef_2CSS_2Filter_8php_source.md#l00013) of file [Filter.php](doxygen__AttrDef_2CSS_2Filter_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Filter::\_\_construct | ( |  | ) |  |

Definition at line [9157](doxygen__HTMLPurifier_8standalone_8php_source.md#l09157) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Filter::validate | ( | $ | *string*, |
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

Definition at line [17](doxygen__AttrDef_2CSS_2Filter_8php_source.md#l00017) of file [Filter.php](doxygen__AttrDef_2CSS_2Filter_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Filter::validate | ( | $ | *string*, |
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

Definition at line [9161](doxygen__HTMLPurifier_8standalone_8php_source.md#l09161) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_AttrDef\_CSS\_Filter::$intValidator `[protected]` |

Definition at line [11](doxygen__AttrDef_2CSS_2Filter_8php_source.md#l00011) of file [Filter.php](doxygen__AttrDef_2CSS_2Filter_8php_source.md).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/[Filter.php](doxygen__AttrDef_2CSS_2Filter_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrDef\_CSS\_Filter](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md)
- Generated on Wed Jan 18 2012 22:58:19 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
