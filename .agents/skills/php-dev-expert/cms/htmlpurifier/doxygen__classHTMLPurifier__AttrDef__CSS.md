# HTMLPurifier: HTMLPurifier_AttrDef_CSS Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrDef__CSS.html

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

[Public Member Functions](#pub-methods)

HTMLPurifier\_AttrDef\_CSS Class Reference

Validates the HTML attribute style, otherwise known as CSS.
[More...](doxygen__classHTMLPurifier__AttrDef__CSS.md#details)

Inheritance diagram for HTMLPurifier\_AttrDef\_CSS:

![](classHTMLPurifier__AttrDef__CSS.png)

[List of all members.](doxygen__classHTMLPurifier__AttrDef__CSS-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS.md#ace0c1bcf604a2fd44b62b0564ec1a6de) ($css, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [validate](doxygen__classHTMLPurifier__AttrDef__CSS.md#ace0c1bcf604a2fd44b62b0564ec1a6de) ($css, $config, $context) |
|  | Validates and cleans passed string according to a definition. |

---

## Detailed Description

Validates the HTML attribute style, otherwise known as CSS.

**Note:**
:   We don't implement the whole CSS specification, so it might be difficult to reuse this component in the context of validating actual stylesheet declarations.
:   If we were really serious about validating the CSS, we would tokenize the styles and then parse the tokens. Obviously, we are not doing that. Doing that could seriously harm performance, but would make these components a lot more viable for a CSS filtering solution.

Definition at line [14](doxygen__CSS_8php_source.md#l00014) of file [CSS.php](doxygen__CSS_8php_source.md).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS::validate | ( | $ | *string*, |
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

Name of the current CSS property being validated.

Reimplemented from [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md#ace1ff1a828cc98b27018cf894d1deca2).

Definition at line [17](doxygen__CSS_8php_source.md#l00017) of file [CSS.php](doxygen__CSS_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef\_CSS::validate | ( | $ | *string*, |
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

Name of the current CSS property being validated.

Reimplemented from [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md#ace1ff1a828cc98b27018cf894d1deca2).

Definition at line [8196](doxygen__HTMLPurifier_8standalone_8php_source.md#l08196) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_AttrDef::parseCDATA()](doxygen__AttrDef_8php_source.md#l00058).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/AttrDef/[CSS.php](doxygen__CSS_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrDef\_CSS](doxygen__classHTMLPurifier__AttrDef__CSS.md)
- Generated on Wed Jan 18 2012 22:58:19 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
