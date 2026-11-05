# HTMLPurifier: HTMLPurifier Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier.html

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
[Static Public Member Functions](#pub-static-methods) |
[Public Attributes](#pub-attribs) |
[Protected Attributes](#pro-attribs) |
[Private Attributes](#pri-attribs) |
[Static Private Attributes](#pri-static-attribs)

HTMLPurifier Class Reference

Facade that coordinates HTML Purifier's subsystems in order to purify HTML.
[More...](doxygen__classHTMLPurifier.md#details)

[List of all members.](doxygen__classHTMLPurifier-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier.md#aad4cc7dd37f8e30bbdf78c09b81e8b2a) ($config=null) |
|  | Initializes the purifier. |
|  | [addFilter](doxygen__classHTMLPurifier.md#aa857bddec7c98354aa2e6277202e4206) ($filter) |
|  | Adds a filter to process the output. |
|  | [purify](doxygen__classHTMLPurifier.md#a5b1f6f579594aa52ce4c2dd412d9b249) ($html, $config=null) |
|  | Filters an HTML snippet/document to be XSS-free and standards-compliant. |
|  | [purifyArray](doxygen__classHTMLPurifier.md#a31d7d9b7bde5ec86c462de8b30f87b10) ($array\_of\_html, $config=null) |
|  | Filters an array of HTML snippets. |
|  | [\_\_construct](doxygen__classHTMLPurifier.md#aad4cc7dd37f8e30bbdf78c09b81e8b2a) ($config=null) |
|  | Initializes the purifier. |
|  | [addFilter](doxygen__classHTMLPurifier.md#aa857bddec7c98354aa2e6277202e4206) ($filter) |
|  | Adds a filter to process the output. |
|  | [purify](doxygen__classHTMLPurifier.md#a5b1f6f579594aa52ce4c2dd412d9b249) ($html, $config=null) |
|  | Filters an HTML snippet/document to be XSS-free and standards-compliant. |
|  | [purifyArray](doxygen__classHTMLPurifier.md#a31d7d9b7bde5ec86c462de8b30f87b10) ($array\_of\_html, $config=null) |
|  | Filters an array of HTML snippets. |
| Static Public Member Functions | |
| static | [instance](doxygen__classHTMLPurifier.md#a56e73512fe8bbf9d6337e13efed8f78d) ($prototype=null) |
|  | Singleton for enforcing just one HTML Purifier in your system. |
| static | [getInstance](doxygen__classHTMLPurifier.md#a90c1a1d29bd1bd822db48e2005e165aa) ($prototype=null) |
| static | [instance](doxygen__classHTMLPurifier.md#a56e73512fe8bbf9d6337e13efed8f78d) ($prototype=null) |
|  | Singleton for enforcing just one HTML Purifier in your system. |
| static | [getInstance](doxygen__classHTMLPurifier.md#a90c1a1d29bd1bd822db48e2005e165aa) ($prototype=null) |
| Public Attributes | |
|  | [$version](doxygen__classHTMLPurifier.md#a1950375d91cbecb0260bbfc4eca926f0) = '4.4.0' |
|  | Version of HTML Purifier. |
| const | [VERSION](doxygen__classHTMLPurifier.md#a0c6a00193ac814390551621656389a67) = '4.4.0' |
|  | Constant with version of HTML Purifier. |
|  | [$config](doxygen__classHTMLPurifier.md#a0cc1609717991f9ac7a42065f0114c33) |
|  | Global configuration object. |
|  | [$generator](doxygen__classHTMLPurifier.md#ae3fac678235d4807eb71825f5a45d3d8) |
|  | [$context](doxygen__classHTMLPurifier.md#a496b488a6ca3bac2684bc876a027a897) |
|  | Resultant [HTMLPurifier\_Context](doxygen__classHTMLPurifier__Context.md "Registry object that contains information about the current context.") of last run purification. |
| Protected Attributes | |
|  | [$strategy](doxygen__classHTMLPurifier.md#a43bcd3ebc364d2fe66b412df5ce03200) |
| Private Attributes | |
|  | [$filters](doxygen__classHTMLPurifier.md#a35bcf973b9c7c7178bcbe4313d1fb119) = array() |
|  | Array of extra [HTMLPurifier\_Filter](doxygen__classHTMLPurifier__Filter.md "Represents a pre or post processing filter on HTML Purifier's output.") objects to run on HTML, for backwards compatibility. |
| Static Private Attributes | |
| static | [$instance](doxygen__classHTMLPurifier.md#a7cd1dc86b3b284a3e98066b43f3f073c) |
|  | Single instance of HTML Purifier. |

---

## Detailed Description

Facade that coordinates HTML Purifier's subsystems in order to purify HTML.

**Note:**
:   There are several points in which configuration can be specified for HTML Purifier. The precedence of these (from lowest to highest) is as follows:

    1. Instance: new [HTMLPurifier](doxygen__classHTMLPurifier.md "Facade that coordinates HTML Purifier's subsystems in order to purify HTML.")($config)
    2. Invocation: purify($html, $config) These configurations are entirely independent of each other and are \*not\* merged (this behavior may change in the future).

**[Todo:](doxygen__todo.md#_todo000034)**
:   We need an easier way to inject strategies using the configuration object.

**Note:**
:   There are several points in which configuration can be specified for HTML Purifier. The precedence of these (from lowest to highest) is as follows:

    1. Instance: new [HTMLPurifier](doxygen__classHTMLPurifier.md "Facade that coordinates HTML Purifier's subsystems in order to purify HTML.")($config)
    2. Invocation: purify($html, $config) These configurations are entirely independent of each other and are \*not\* merged (this behavior may change in the future).

**[Todo:](doxygen__todo.md#_todo000035)**
:   We need an easier way to inject strategies using the configuration object.

Definition at line [54](doxygen__HTMLPurifier_8php_source.md#l00054) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier::\_\_construct | ( | $ | *config* = `null` | ) |  |

Initializes the purifier.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $config | Optional [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object for all instances of the purifier, if omitted, a default configuration is supplied (which can be overridden on a per-use basis). The parameter can also be any type that [HTMLPurifier\_Config::create()](doxygen__classHTMLPurifier__Config.md#a063a082504e63d10551ec5472b2a54d9 "Convenience constructor that creates a config object based on a mixed var.") supports. |

Definition at line [88](doxygen__HTMLPurifier_8php_source.md#l00088) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

References [$config](doxygen__HTMLPurifier_8php_source.md#l00064), and [HTMLPurifier\_Config::create()](doxygen__Config_8php_source.md#l00109).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier::\_\_construct | ( | $ | *config* = `null` | ) |  |

Initializes the purifier.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $config | Optional [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object for all instances of the purifier, if omitted, a default configuration is supplied (which can be overridden on a per-use basis). The parameter can also be any type that [HTMLPurifier\_Config::create()](doxygen__classHTMLPurifier__Config.md#a063a082504e63d10551ec5472b2a54d9 "Convenience constructor that creates a config object based on a mixed var.") supports. |

Definition at line [108](doxygen__HTMLPurifier_8standalone_8php_source.md#l00108) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__HTMLPurifier_8php_source.md#l00064), and [HTMLPurifier\_Config::create()](doxygen__Config_8php_source.md#l00109).

---

## Member Function Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier::addFilter | ( | $ | *filter* | ) |  |

Adds a filter to process the output.

First come first serve

**Parameters:**
:   |  |  |
    | --- | --- |
    | $filter | [HTMLPurifier\_Filter](doxygen__classHTMLPurifier__Filter.md "Represents a pre or post processing filter on HTML Purifier's output.") object |

Definition at line [100](doxygen__HTMLPurifier_8php_source.md#l00100) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier::addFilter | ( | $ | *filter* | ) |  |

Adds a filter to process the output.

First come first serve

**Parameters:**
:   |  |  |
    | --- | --- |
    | $filter | [HTMLPurifier\_Filter](doxygen__classHTMLPurifier__Filter.md "Represents a pre or post processing filter on HTML Purifier's output.") object |

Definition at line [120](doxygen__HTMLPurifier_8standalone_8php_source.md#l00120) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| static HTMLPurifier::getInstance | ( | $ | *prototype* = `null` | ) | `[static]` |

**Note:**
:   Backwards compatibility, see [instance()](doxygen__classHTMLPurifier.md#a56e73512fe8bbf9d6337e13efed8f78d "Singleton for enforcing just one HTML Purifier in your system.")

Definition at line [231](doxygen__HTMLPurifier_8php_source.md#l00231) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

References [instance()](doxygen__HTMLPurifier_8php_source.md#l00215).

Referenced by [phorum\_htmlpurifier\_before\_editor()](doxygen__htmlpurifier_8php_source.md#l00235), [phorum\_htmlpurifier\_common()](doxygen__htmlpurifier_8php_source.md#l00203), [phorum\_htmlpurifier\_editor\_after\_subject()](doxygen__htmlpurifier_8php_source.md#l00251), [phorum\_htmlpurifier\_format()](doxygen__htmlpurifier_8php_source.md#l00031), [phorum\_htmlpurifier\_quote()](doxygen__htmlpurifier_8php_source.md#l00191), and [HTMLPurifier\_ConfigSchema\_Builder\_Xml::writeHTMLDiv()](doxygen__Xml_8php_source.md#l00013).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| static HTMLPurifier::getInstance | ( | $ | *prototype* = `null` | ) | `[static]` |

**Note:**
:   Backwards compatibility, see [instance()](doxygen__classHTMLPurifier.md#a56e73512fe8bbf9d6337e13efed8f78d "Singleton for enforcing just one HTML Purifier in your system.")

Definition at line [251](doxygen__HTMLPurifier_8standalone_8php_source.md#l00251) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [instance()](doxygen__HTMLPurifier_8php_source.md#l00215).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| static HTMLPurifier::instance | ( | $ | *prototype* = `null` | ) | `[static]` |

Singleton for enforcing just one HTML Purifier in your system.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $prototype | Optional prototype [HTMLPurifier](doxygen__classHTMLPurifier.md "Facade that coordinates HTML Purifier's subsystems in order to purify HTML.") instance to overload singleton with, or [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") instance to configure the generated version with. |

Definition at line [235](doxygen__HTMLPurifier_8standalone_8php_source.md#l00235) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$instance](doxygen__HTMLPurifier_8php_source.md#l00070), and [HTMLPurifier()](doxygen__HTMLPurifier_8func_8php_source.md#l00015).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| static HTMLPurifier::instance | ( | $ | *prototype* = `null` | ) | `[static]` |

Singleton for enforcing just one HTML Purifier in your system.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $prototype | Optional prototype [HTMLPurifier](doxygen__classHTMLPurifier.md "Facade that coordinates HTML Purifier's subsystems in order to purify HTML.") instance to overload singleton with, or [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") instance to configure the generated version with. |

Definition at line [215](doxygen__HTMLPurifier_8php_source.md#l00215) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

References [$instance](doxygen__HTMLPurifier_8php_source.md#l00070), and [HTMLPurifier()](doxygen__HTMLPurifier_8func_8php_source.md#l00015).

Referenced by [getInstance()](doxygen__HTMLPurifier_8php_source.md#l00231), and [purify()](doxygen__HTMLPurifier_8php_source.md#l00115).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier::purify | ( | $ | *html*, |
|  |  | $ | *config* = `null` |
|  | ) |  |  |

Filters an HTML snippet/document to be XSS-free and standards-compliant.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $html | String of HTML to purify |
    | $config | [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object for this operation, if omitted, defaults to the config object specified during this object's construction. The parameter can also be any type that [HTMLPurifier\_Config::create()](doxygen__classHTMLPurifier__Config.md#a063a082504e63d10551ec5472b2a54d9 "Convenience constructor that creates a config object based on a mixed var.") supports. |

**Returns:**
:   Purified HTML

Definition at line [115](doxygen__HTMLPurifier_8php_source.md#l00115) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

References [$config](doxygen__HTMLPurifier_8php_source.md#l00064), [$context](doxygen__HTMLPurifier_8php_source.md#l00078), [$filters](doxygen__HTMLPurifier_8php_source.md#l00067), [$html](doxygen__lotto_8php_source.md#l00009), [HTMLPurifier\_IDAccumulator::build()](doxygen__IDAccumulator_8php_source.md#l00024), [HTMLPurifier\_Encoder::convertFromUTF8()](doxygen__Encoder_8php_source.md#l00366), [HTMLPurifier\_Encoder::convertToUTF8()](doxygen__Encoder_8php_source.md#l00336), [HTMLPurifier\_Lexer::create()](doxygen__Lexer_8php_source.md#l00068), [HTMLPurifier\_Config::create()](doxygen__Config_8php_source.md#l00109), and [instance()](doxygen__HTMLPurifier_8php_source.md#l00215).

Referenced by [purifyArray()](doxygen__HTMLPurifier_8php_source.md#l00199).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier::purify | ( | $ | *html*, |
|  |  | $ | *config* = `null` |
|  | ) |  |  |

Filters an HTML snippet/document to be XSS-free and standards-compliant.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $html | String of HTML to purify |
    | $config | [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object for this operation, if omitted, defaults to the config object specified during this object's construction. The parameter can also be any type that [HTMLPurifier\_Config::create()](doxygen__classHTMLPurifier__Config.md#a063a082504e63d10551ec5472b2a54d9 "Convenience constructor that creates a config object based on a mixed var.") supports. |

**Returns:**
:   Purified HTML

Definition at line [135](doxygen__HTMLPurifier_8standalone_8php_source.md#l00135) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__HTMLPurifier_8php_source.md#l00064), [$context](doxygen__HTMLPurifier_8php_source.md#l00078), [$filters](doxygen__HTMLPurifier_8php_source.md#l00067), [$html](doxygen__lotto_8php_source.md#l00009), [HTMLPurifier\_IDAccumulator::build()](doxygen__IDAccumulator_8php_source.md#l00024), [HTMLPurifier\_Encoder::convertFromUTF8()](doxygen__Encoder_8php_source.md#l00366), [HTMLPurifier\_Encoder::convertToUTF8()](doxygen__Encoder_8php_source.md#l00336), [HTMLPurifier\_Lexer::create()](doxygen__Lexer_8php_source.md#l00068), [HTMLPurifier\_Config::create()](doxygen__Config_8php_source.md#l00109), and [instance()](doxygen__HTMLPurifier_8php_source.md#l00215).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier::purifyArray | ( | $ | *array\_of\_html*, |
|  |  | $ | *config* = `null` |
|  | ) |  |  |

Filters an array of HTML snippets.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $config | Optional [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object for this operation. See [HTMLPurifier::purify()](doxygen__classHTMLPurifier.md#a5b1f6f579594aa52ce4c2dd412d9b249 "Filters an HTML snippet/document to be XSS-free and standards-compliant.") for more details. |

**Returns:**
:   Array of purified HTML

Definition at line [199](doxygen__HTMLPurifier_8php_source.md#l00199) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

References [$config](doxygen__HTMLPurifier_8php_source.md#l00064), [$html](doxygen__lotto_8php_source.md#l00009), and [purify()](doxygen__HTMLPurifier_8php_source.md#l00115).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier::purifyArray | ( | $ | *array\_of\_html*, |
|  |  | $ | *config* = `null` |
|  | ) |  |  |

Filters an array of HTML snippets.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $config | Optional [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object for this operation. See [HTMLPurifier::purify()](doxygen__classHTMLPurifier.md#a5b1f6f579594aa52ce4c2dd412d9b249 "Filters an HTML snippet/document to be XSS-free and standards-compliant.") for more details. |

**Returns:**
:   Array of purified HTML

Definition at line [219](doxygen__HTMLPurifier_8standalone_8php_source.md#l00219) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__HTMLPurifier_8php_source.md#l00064), [$html](doxygen__lotto_8php_source.md#l00009), and [purify()](doxygen__HTMLPurifier_8php_source.md#l00115).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier::$config |

Global configuration object.

Definition at line [64](doxygen__HTMLPurifier_8php_source.md#l00064) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

Referenced by [\_\_construct()](doxygen__HTMLPurifier_8php_source.md#l00088), [purify()](doxygen__HTMLPurifier_8php_source.md#l00115), and [purifyArray()](doxygen__HTMLPurifier_8php_source.md#l00199).

|  |
| --- |
| HTMLPurifier::$context |

Resultant [HTMLPurifier\_Context](doxygen__classHTMLPurifier__Context.md "Registry object that contains information about the current context.") of last run purification.

Is an array of contexts if the last called method was [purifyArray()](doxygen__classHTMLPurifier.md#a31d7d9b7bde5ec86c462de8b30f87b10 "Filters an array of HTML snippets.").

Definition at line [78](doxygen__HTMLPurifier_8php_source.md#l00078) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

Referenced by [purify()](doxygen__HTMLPurifier_8php_source.md#l00115).

|  |
| --- |
| HTMLPurifier::$filters = array() `[private]` |

Array of extra [HTMLPurifier\_Filter](doxygen__classHTMLPurifier__Filter.md "Represents a pre or post processing filter on HTML Purifier's output.") objects to run on HTML, for backwards compatibility.

Definition at line [67](doxygen__HTMLPurifier_8php_source.md#l00067) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

Referenced by [purify()](doxygen__HTMLPurifier_8php_source.md#l00115).

|  |
| --- |
| HTMLPurifier::$generator |

Definition at line [72](doxygen__HTMLPurifier_8php_source.md#l00072) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

|  |
| --- |
| static HTMLPurifier::$instance `[static, private]` |

Single instance of HTML Purifier.

Definition at line [70](doxygen__HTMLPurifier_8php_source.md#l00070) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

Referenced by [instance()](doxygen__HTMLPurifier_8php_source.md#l00215).

|  |
| --- |
| HTMLPurifier::$strategy `[protected]` |

Definition at line [72](doxygen__HTMLPurifier_8php_source.md#l00072) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

|  |
| --- |
| HTMLPurifier::$version = '4.4.0' |

Version of HTML Purifier.

Definition at line [58](doxygen__HTMLPurifier_8php_source.md#l00058) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

|  |
| --- |
| const [HTMLPurifier::VERSION](doxygen__classHTMLPurifier.md#a0c6a00193ac814390551621656389a67) = '4.4.0' |

Constant with version of HTML Purifier.

Definition at line [61](doxygen__HTMLPurifier_8php_source.md#l00061) of file [HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.php](doxygen__HTMLPurifier_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier](doxygen__classHTMLPurifier.md)
- Generated on Wed Jan 18 2012 22:58:18 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
