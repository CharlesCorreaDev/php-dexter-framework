# HTMLPurifier: ConfigDoc_HTMLXSLTProcessor Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classConfigDoc__HTMLXSLTProcessor.html

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

ConfigDoc\_HTMLXSLTProcessor Class Reference

Decorator/extender XSLT processor specifically for HTML documents.
[More...](doxygen__classConfigDoc__HTMLXSLTProcessor.md#details)

[List of all members.](doxygen__classConfigDoc__HTMLXSLTProcessor-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classConfigDoc__HTMLXSLTProcessor.md#a857f4bb5dcdd05d483a13d5bdfe5985b) ($proc=false) |
|  | [importStylesheet](doxygen__classConfigDoc__HTMLXSLTProcessor.md#a0e67afde86db9e0daf8438e032c7c1d0) ($xsl) |
|  | [transformToHTML](doxygen__classConfigDoc__HTMLXSLTProcessor.md#a76993836168ce016a531b4d1825bc61e) ($xml) |
|  | Transforms an XML file into compatible XHTML based on the stylesheet. |
|  | [setParameters](doxygen__classConfigDoc__HTMLXSLTProcessor.md#a65511e35e6bf59ec09c37ab43dde4b21) ($options) |
|  | Bulk sets parameters for the XSL stylesheet. |
|  | [\_\_call](doxygen__classConfigDoc__HTMLXSLTProcessor.md#a054a38734072347acd2fdf22706d32ff) ($name, $arguments) |
|  | Forward any other calls to the XSLT processor. |
| Protected Attributes | |
|  | [$xsltProcessor](doxygen__classConfigDoc__HTMLXSLTProcessor.md#ae43820369a41154eaa1de88361459dfb) |
|  | Instance of XSLTProcessor. |

---

## Detailed Description

Decorator/extender XSLT processor specifically for HTML documents.

Definition at line [6](doxygen__HTMLXSLTProcessor_8php_source.md#l00006) of file [HTMLXSLTProcessor.php](doxygen__HTMLXSLTProcessor_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| ConfigDoc\_HTMLXSLTProcessor::\_\_construct | ( | $ | *proc* = `false` | ) |  |

Definition at line [14](doxygen__HTMLXSLTProcessor_8php_source.md#l00014) of file [HTMLXSLTProcessor.php](doxygen__HTMLXSLTProcessor_8php_source.md).

---

## Member Function Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| ConfigDoc\_HTMLXSLTProcessor::\_\_call | ( | $ | *name*, |
|  |  | $ | *arguments* |
|  | ) |  |  |

Forward any other calls to the XSLT processor.

Definition at line [80](doxygen__HTMLXSLTProcessor_8php_source.md#l00080) of file [HTMLXSLTProcessor.php](doxygen__HTMLXSLTProcessor_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| ConfigDoc\_HTMLXSLTProcessor::importStylesheet | ( | $ | *xsl* | ) |  |

**Note:**
:   Allows a string $xsl filename to be passed

Definition at line [22](doxygen__HTMLXSLTProcessor_8php_source.md#l00022) of file [HTMLXSLTProcessor.php](doxygen__HTMLXSLTProcessor_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| ConfigDoc\_HTMLXSLTProcessor::setParameters | ( | $ | *options* | ) |  |

Bulk sets parameters for the XSL stylesheet.

**Parameters:**
:   |  |  |  |
    | --- | --- | --- |
    | array | $options | Associative array of options to set |

Definition at line [71](doxygen__HTMLXSLTProcessor_8php_source.md#l00071) of file [HTMLXSLTProcessor.php](doxygen__HTMLXSLTProcessor_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| ConfigDoc\_HTMLXSLTProcessor::transformToHTML | ( | $ | *xml* | ) |  |

Transforms an XML file into compatible XHTML based on the stylesheet.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $xml | XML DOM tree, or string filename |

**Returns:**
:   string HTML output

**[Todo:](doxygen__todo.md#_todo000001)**
:   Rename to transformToXHTML, as transformToHTML is misleading

Definition at line [37](doxygen__HTMLXSLTProcessor_8php_source.md#l00037) of file [HTMLXSLTProcessor.php](doxygen__HTMLXSLTProcessor_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003).

---

## Member Data Documentation

|  |
| --- |
| ConfigDoc\_HTMLXSLTProcessor::$xsltProcessor `[protected]` |

Instance of XSLTProcessor.

Definition at line [12](doxygen__HTMLXSLTProcessor_8php_source.md#l00012) of file [HTMLXSLTProcessor.php](doxygen__HTMLXSLTProcessor_8php_source.md).

---

The documentation for this class was generated from the following file:

- /home/ezyang/Dev/htmlpurifier/extras/ConfigDoc/[HTMLXSLTProcessor.php](doxygen__HTMLXSLTProcessor_8php_source.md)

- [ConfigDoc\_HTMLXSLTProcessor](doxygen__classConfigDoc__HTMLXSLTProcessor.md)
- Generated on Wed Jan 18 2012 22:58:18 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
