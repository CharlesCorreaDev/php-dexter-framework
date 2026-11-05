# HTMLPurifier: HTMLPurifier_AttrDef_CSS_Background Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrDef__CSS__Background.html

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

HTMLPurifier\_AttrDef\_CSS\_Background Class Reference

Validates shorthand CSS property background.
[More...](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md#details)

Inheritance diagram for HTMLPurifier\_AttrDef\_CSS\_Background:

![](classHTMLPurifier__AttrDef__CSS__Background.png)

[List of all members.](doxygen__classHTMLPurifier__AttrDef__CSS__Background-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md#af9eed2a432cc5bcf3b8dea73f28477ce) ($config) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md#a2ed23ea624d8b2ded7979b33e259b834) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md#af9eed2a432cc5bcf3b8dea73f28477ce) ($config) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md#a2ed23ea624d8b2ded7979b33e259b834) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
| Protected Attributes | |
|  | [$info](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md#a7d0f96826ddc1cc7fcd9e7dd605fd6c8) |
|  | Local copy of component validators. |

---

## Detailed Description

Validates shorthand CSS property background.

**Warning:**
:   Does not support url tokens that have internal spaces.

Definition at line [7](doxygen__AttrDef_2CSS_2Background_8php_source.md#l00007) of file [Background.php](doxygen__AttrDef_2CSS_2Background_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Background::\_\_construct | ( | $ | *config* | ) |  |

Definition at line [16](doxygen__AttrDef_2CSS_2Background_8php_source.md#l00016) of file [Background.php](doxygen__AttrDef_2CSS_2Background_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [$def](doxygen__test2_8php_source.md#l00010).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Background::\_\_construct | ( | $ | *config* | ) |  |

Definition at line [8747](doxygen__HTMLPurifier_8standalone_8php_source.md#l08747) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [$def](doxygen__test2_8php_source.md#l00010).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Background::validate | ( | $ | *string*, |
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

Definition at line [25](doxygen__AttrDef_2CSS_2Background_8php_source.md#l00025) of file [Background.php](doxygen__AttrDef_2CSS_2Background_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), [HTMLPurifier\_AttrDef::mungeRgb()](doxygen__AttrDef_8php_source.md#l00081), and [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058).

Referenced by [validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08756).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Background::validate | ( | $ | *string*, |
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

Definition at line [8756](doxygen__HTMLPurifier_8standalone_8php_source.md#l08756) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), [HTMLPurifier\_AttrDef::mungeRgb()](doxygen__AttrDef_8php_source.md#l00081), [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058), and [validate()](doxygen__AttrDef_2CSS_2Background_8php_source.md#l00025).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_AttrDef\_CSS\_Background::$info `[protected]` |

Local copy of component validators.

**Note:**
:   See HTMLPurifier\_AttrDef\_Font::$info for a similar impl.

Definition at line [14](doxygen__AttrDef_2CSS_2Background_8php_source.md#l00014) of file [Background.php](doxygen__AttrDef_2CSS_2Background_8php_source.md).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/[Background.php](doxygen__AttrDef_2CSS_2Background_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrDef\_CSS\_Background](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md)
- Generated on Wed Jan 18 2012 22:58:19 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
