# HTMLPurifier: HTMLPurifier_AttrDef_CSS_Composite Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrDef__CSS__Composite.html

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

HTMLPurifier\_AttrDef\_CSS\_Composite Class Reference

Allows multiple validators to attempt to validate attribute.
[More...](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md#details)

Inheritance diagram for HTMLPurifier\_AttrDef\_CSS\_Composite:

![](classHTMLPurifier__AttrDef__CSS__Composite.png)

[List of all members.](doxygen__classHTMLPurifier__AttrDef__CSS__Composite-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md#afe93a1159bad0049329c36fba090e71c) ($defs) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md#a4f145b8a5c7a853ea01927714708ab40) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md#afe93a1159bad0049329c36fba090e71c) ($defs) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md#a4f145b8a5c7a853ea01927714708ab40) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
| Public Attributes | |
|  | [$defs](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md#a7e99e8d8ab6507cf5e6cb4b1cc8935fc) |
|  | List of [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md "Base class for all validating attribute definitions.") objects that may process strings. |

---

## Detailed Description

Allows multiple validators to attempt to validate attribute.

Composite is just what it sounds like: a composite of many validators. This means that multiple [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md "Base class for all validating attribute definitions.") objects will have a whack at the string. If one of them passes, that's what is returned. This is especially useful for CSS values, which often are a choice between an enumerated set of predefined values or a flexible data type.

Definition at line [12](doxygen__AttrDef_2CSS_2Composite_8php_source.md#l00012) of file [Composite.php](doxygen__AttrDef_2CSS_2Composite_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Composite::\_\_construct | ( | $ | *defs* | ) |  |

**Parameters:**
:   |  |  |
    | --- | --- |
    | $defs | List of [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md "Base class for all validating attribute definitions.") objects |

Definition at line [24](doxygen__AttrDef_2CSS_2Composite_8php_source.md#l00024) of file [Composite.php](doxygen__AttrDef_2CSS_2Composite_8php_source.md).

References [$defs](doxygen__AttrDef_2CSS_2Composite_8php_source.md#l00019).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Composite::\_\_construct | ( | $ | *defs* | ) |  |

**Parameters:**
:   |  |  |
    | --- | --- |
    | $defs | List of [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md "Base class for all validating attribute definitions.") objects |

Definition at line [9100](doxygen__HTMLPurifier_8standalone_8php_source.md#l09100) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$defs](doxygen__AttrDef_2CSS_2Composite_8php_source.md#l00019).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Composite::validate | ( | $ | *string*, |
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

Definition at line [28](doxygen__AttrDef_2CSS_2Composite_8php_source.md#l00028) of file [Composite.php](doxygen__AttrDef_2CSS_2Composite_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [$def](doxygen__test2_8php_source.md#l00010).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_Composite::validate | ( | $ | *string*, |
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

Definition at line [9104](doxygen__HTMLPurifier_8standalone_8php_source.md#l09104) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [$def](doxygen__test2_8php_source.md#l00010).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_AttrDef\_CSS\_Composite::$defs |

List of [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md "Base class for all validating attribute definitions.") objects that may process strings.

**[Todo:](doxygen__todo.md#_todo000003)**
:   Make protected

**[Todo:](doxygen__todo.md#_todo000057)**
:   Make protected

Definition at line [19](doxygen__AttrDef_2CSS_2Composite_8php_source.md#l00019) of file [Composite.php](doxygen__AttrDef_2CSS_2Composite_8php_source.md).

Referenced by [\_\_construct()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09100).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/[Composite.php](doxygen__AttrDef_2CSS_2Composite_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrDef\_CSS\_Composite](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md)
- Generated on Wed Jan 18 2012 22:58:19 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
