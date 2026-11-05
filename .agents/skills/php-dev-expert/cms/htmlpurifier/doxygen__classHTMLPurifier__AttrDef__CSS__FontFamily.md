# HTMLPurifier: HTMLPurifier_AttrDef_CSS_FontFamily Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrDef__CSS__FontFamily.html

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

HTMLPurifier\_AttrDef\_CSS\_FontFamily Class Reference

Validates a font family list according to CSS spec.
[More...](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md#details)

Inheritance diagram for HTMLPurifier\_AttrDef\_CSS\_FontFamily:

![](classHTMLPurifier__AttrDef__CSS__FontFamily.png)

[List of all members.](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md#a285d211f6841685e937afaf4f8cb225f) () |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md#adaf9df746058627ec0c049430fb7ad5d) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md#a285d211f6841685e937afaf4f8cb225f) () |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md#adaf9df746058627ec0c049430fb7ad5d) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
| Protected Attributes | |
|  | [$mask](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md#ad4bc4fe0cf0e0873eab19f9a94163c4c) = null |

---

## Detailed Description

Validates a font family list according to CSS spec.

Definition at line [6](doxygen__FontFamily_8php_source.md#l00006) of file [FontFamily.php](doxygen__FontFamily_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_FontFamily::\_\_construct | ( |  | ) |  |

Definition at line [11](doxygen__FontFamily_8php_source.md#l00011) of file [FontFamily.php](doxygen__FontFamily_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_FontFamily::\_\_construct | ( |  | ) |  |

Definition at line [9360](doxygen__HTMLPurifier_8standalone_8php_source.md#l09360) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_FontFamily::validate | ( | $ | *string*, |
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

Definition at line [42](doxygen__FontFamily_8php_source.md#l00042) of file [FontFamily.php](doxygen__FontFamily_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_AttrDef::expandCSSEscape()](doxygen__AttrDef_8php_source.md#l00089).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_FontFamily::validate | ( | $ | *string*, |
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

Definition at line [9391](doxygen__HTMLPurifier_8standalone_8php_source.md#l09391) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_AttrDef::expandCSSEscape()](doxygen__AttrDef_8php_source.md#l00089).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_AttrDef\_CSS\_FontFamily::$mask = null `[protected]` |

Definition at line [9](doxygen__FontFamily_8php_source.md#l00009) of file [FontFamily.php](doxygen__FontFamily_8php_source.md).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/[FontFamily.php](doxygen__FontFamily_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrDef\_CSS\_FontFamily](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md)
- Generated on Wed Jan 18 2012 22:58:19 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
