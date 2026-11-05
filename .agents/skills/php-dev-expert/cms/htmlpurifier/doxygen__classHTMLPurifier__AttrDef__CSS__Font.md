# HTMLPurifier: HTMLPurifier_AttrDef_CSS_Font Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrDef__CSS__Font.html

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

HTMLPurifier\_AttrDef\_CSS\_Font Class Reference

Validates shorthand CSS property font.
[More...](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md#details)

Inheritance diagram for HTMLPurifier\_AttrDef\_CSS\_Font:

![](classHTMLPurifier__AttrDef__CSS__Font.png)

[List of all members.](doxygen__classHTMLPurifier__AttrDef__CSS__Font-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md#aa55f2a88733e1958baf14f8aa2a0e1b4) ($config) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md#a8fbc1f20fd2dabc9c5b5a59338e647ac) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md#aa55f2a88733e1958baf14f8aa2a0e1b4) ($config) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md#a8fbc1f20fd2dabc9c5b5a59338e647ac) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
| Protected Attributes | |
|  | [$info](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md#a18be00fdfbebb2803a53d1590569f05e) = array() |
|  | Local copy of component validators. |

---

## Detailed Description

Validates shorthand CSS property font.

Definition at line [6](doxygen__AttrDef_2CSS_2Font_8php_source.md#l00006) of file [Font.php](doxygen__AttrDef_2CSS_2Font_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Font::\_\_construct | ( | $ | *config* | ) |  |

Definition at line [19](doxygen__AttrDef_2CSS_2Font_8php_source.md#l00019) of file [Font.php](doxygen__AttrDef_2CSS_2Font_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [$def](doxygen__test2_8php_source.md#l00010).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Font::\_\_construct | ( | $ | *config* | ) |  |

Definition at line [9218](doxygen__HTMLPurifier_8standalone_8php_source.md#l09218) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [$def](doxygen__test2_8php_source.md#l00010).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Font::validate | ( | $ | *string*, |
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

Definition at line [29](doxygen__AttrDef_2CSS_2Font_8php_source.md#l00029) of file [Font.php](doxygen__AttrDef_2CSS_2Font_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Font::validate | ( | $ | *string*, |
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

Definition at line [9228](doxygen__HTMLPurifier_8standalone_8php_source.md#l09228) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_AttrDef\_CSS\_Font::$info = array() `[protected]` |

Local copy of component validators.

**Note:**
:   If we moved specific CSS property definitions to their own classes instead of having them be assembled at run time by CSSDefinition, this wouldn't be necessary. We'd instantiate our own copies.

Definition at line [17](doxygen__AttrDef_2CSS_2Font_8php_source.md#l00017) of file [Font.php](doxygen__AttrDef_2CSS_2Font_8php_source.md).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/[Font.php](doxygen__AttrDef_2CSS_2Font_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrDef\_CSS\_Font](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md)
- Generated on Wed Jan 18 2012 22:58:19 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
