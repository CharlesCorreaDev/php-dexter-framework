# HTMLPurifier: HTMLPurifier_AttrDef_CSS_DenyElementDecorator Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.html

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

HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator Class Reference

Decorator which enables CSS properties to be disabled for specific elements.
[More...](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md#details)

Inheritance diagram for HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator:

![](classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.png)

[List of all members.](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md#a2651e77499d9e26d0b2026ead4f857fb) ($def, $element) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md#a2985a1b17d7ce52fc0baaac4d7723891) ($string, $config, $context) |
|  | Checks if CurrentToken is set and equal to $this->element. |
|  | [\_\_construct](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md#a2651e77499d9e26d0b2026ead4f857fb) ($def, $element) |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md#a2985a1b17d7ce52fc0baaac4d7723891) ($string, $config, $context) |
|  | Checks if CurrentToken is set and equal to $this->element. |
| Public Attributes | |
|  | [$def](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md#ac5768a4c2e8de0873fcd2cc5c2b0ab68) |
|  | [$element](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md#a83ed8157a77ab74cbe87f6c882f2af2d) |

---

## Detailed Description

Decorator which enables CSS properties to be disabled for specific elements.

Definition at line [6](doxygen__DenyElementDecorator_8php_source.md#l00006) of file [DenyElementDecorator.php](doxygen__DenyElementDecorator_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator::\_\_construct | ( | $ | *def*, |
|  |  | $ | *element* |
|  | ) |  |  |

**Parameters:**
:   |  |  |
    | --- | --- |
    | $def | Definition to wrap |
    | $element | Element to deny |

Definition at line [14](doxygen__DenyElementDecorator_8php_source.md#l00014) of file [DenyElementDecorator.php](doxygen__DenyElementDecorator_8php_source.md).

References [$def](doxygen__DenyElementDecorator_8php_source.md#l00008), and [$element](doxygen__DenyElementDecorator_8php_source.md#l00008).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator::\_\_construct | ( | $ | *def*, |
|  |  | $ | *element* |
|  | ) |  |  |

**Parameters:**
:   |  |  |
    | --- | --- |
    | $def | Definition to wrap |
    | $element | Element to deny |

Definition at line [9129](doxygen__HTMLPurifier_8standalone_8php_source.md#l09129) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$def](doxygen__DenyElementDecorator_8php_source.md#l00008), and [$element](doxygen__DenyElementDecorator_8php_source.md#l00008).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator::validate | ( | $ | *string*, |
|  |  | $ | *config*, |
|  |  | $ | *context* |
|  | ) |  |  |

Checks if CurrentToken is set and equal to $this->element.

Reimplemented from [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md#ace1ff1a828cc98b27018cf894d1deca2).

Definition at line [21](doxygen__DenyElementDecorator_8php_source.md#l00021) of file [DenyElementDecorator.php](doxygen__DenyElementDecorator_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator::validate | ( | $ | *string*, |
|  |  | $ | *config*, |
|  |  | $ | *context* |
|  | ) |  |  |

Checks if CurrentToken is set and equal to $this->element.

Reimplemented from [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md#ace1ff1a828cc98b27018cf894d1deca2).

Definition at line [9136](doxygen__HTMLPurifier_8standalone_8php_source.md#l09136) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator::$def |

Definition at line [8](doxygen__DenyElementDecorator_8php_source.md#l00008) of file [DenyElementDecorator.php](doxygen__DenyElementDecorator_8php_source.md).

Referenced by [\_\_construct()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09129).

|  |
| --- |
| HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator::$element |

Definition at line [8](doxygen__DenyElementDecorator_8php_source.md#l00008) of file [DenyElementDecorator.php](doxygen__DenyElementDecorator_8php_source.md).

Referenced by [\_\_construct()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09129).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/[DenyElementDecorator.php](doxygen__DenyElementDecorator_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md)
- Generated on Wed Jan 18 2012 22:58:19 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
