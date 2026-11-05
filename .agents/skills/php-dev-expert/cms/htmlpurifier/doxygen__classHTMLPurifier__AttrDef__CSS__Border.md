# HTMLPurifier: HTMLPurifier_AttrDef_CSS_Border Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrDef__CSS__Border.html

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

HTMLPurifier\_AttrDef\_CSS\_Border Class Reference

Validates the border property as defined by CSS.
[More...](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md#details)

Inheritance diagram for HTMLPurifier\_AttrDef\_CSS\_Border:

![](classHTMLPurifier__AttrDef__CSS__Border.png)

[List of all members.](doxygen__classHTMLPurifier__AttrDef__CSS__Border-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md#ab212854484f59d82a3c280f7d4949b6b) ($config) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md#a844bfa8c5106dd37f5e56f972b7cf9d9) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md#ab212854484f59d82a3c280f7d4949b6b) ($config) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md#a844bfa8c5106dd37f5e56f972b7cf9d9) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
| Protected Attributes | |
|  | [$info](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md#aa9fb4d4dfd690be373acff02889c8096) = array() |
|  | Local copy of properties this property is shorthand for. |

---

## Detailed Description

Validates the border property as defined by CSS.

Definition at line [6](doxygen__AttrDef_2CSS_2Border_8php_source.md#l00006) of file [Border.php](doxygen__AttrDef_2CSS_2Border_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Border::\_\_construct | ( | $ | *config* | ) |  |

Definition at line [14](doxygen__AttrDef_2CSS_2Border_8php_source.md#l00014) of file [Border.php](doxygen__AttrDef_2CSS_2Border_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [$def](doxygen__test2_8php_source.md#l00010).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Border::\_\_construct | ( | $ | *config* | ) |  |

Definition at line [8967](doxygen__HTMLPurifier_8standalone_8php_source.md#l08967) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [$def](doxygen__test2_8php_source.md#l00010).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Border::validate | ( | $ | *string*, |
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

Definition at line [21](doxygen__AttrDef_2CSS_2Border_8php_source.md#l00021) of file [Border.php](doxygen__AttrDef_2CSS_2Border_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), [HTMLPurifier\_AttrDef::mungeRgb()](doxygen__AttrDef_8php_source.md#l00081), and [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Border::validate | ( | $ | *string*, |
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

Definition at line [8974](doxygen__HTMLPurifier_8standalone_8php_source.md#l08974) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), [HTMLPurifier\_AttrDef::mungeRgb()](doxygen__AttrDef_8php_source.md#l00081), and [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_AttrDef\_CSS\_Border::$info = array() `[protected]` |

Local copy of properties this property is shorthand for.

Definition at line [12](doxygen__AttrDef_2CSS_2Border_8php_source.md#l00012) of file [Border.php](doxygen__AttrDef_2CSS_2Border_8php_source.md).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/[Border.php](doxygen__AttrDef_2CSS_2Border_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrDef\_CSS\_Border](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md)
- Generated on Wed Jan 18 2012 22:58:19 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
