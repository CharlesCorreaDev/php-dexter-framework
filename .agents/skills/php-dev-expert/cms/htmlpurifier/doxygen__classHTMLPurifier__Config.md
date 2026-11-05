# HTMLPurifier: HTMLPurifier_Config Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__Config.html

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
[Protected Member Functions](#pro-methods) |
[Protected Attributes](#pro-attribs) |
[Private Member Functions](#pri-methods) |
[Private Attributes](#pri-attribs)

HTMLPurifier\_Config Class Reference

Configuration object that triggers customizable behavior.
[More...](doxygen__classHTMLPurifier__Config.md#details)

[List of all members.](doxygen__classHTMLPurifier__Config-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTMLPurifier__Config.md#aa44fad3c8858c98b59c1051bb9d3481a) ($definition, $parent=null) |
|  | [get](doxygen__classHTMLPurifier__Config.md#ab94944fe3daf78d8acb100617073d0d7) ($key, $a=null) |
|  | Retreives a value from the configuration. |
|  | [getBatch](doxygen__classHTMLPurifier__Config.md#a5af7e5ab7e960f78f6fffb14c86cce9a) ($namespace) |
|  | Retreives an array of directives to values from a given namespace. |
|  | [getBatchSerial](doxygen__classHTMLPurifier__Config.md#a48a81383e2d9a5f93e0c757204a70829) ($namespace) |
|  | Returns a md5 signature of a segment of the configuration object that uniquely identifies that particular configuration. |
|  | [getSerial](doxygen__classHTMLPurifier__Config.md#af8bf913306ef7f975c0eb02686272f06) () |
|  | Returns a md5 signature for the entire configuration object that uniquely identifies that particular configuration. |
|  | [getAll](doxygen__classHTMLPurifier__Config.md#af2654d806c22b83c1abebf1f6501a365) () |
|  | Retrieves all directives, organized by namespace. |
|  | [set](doxygen__classHTMLPurifier__Config.md#a62dafd885e17cb0f0a3baf0bd9ad1681) ($key, $value, $a=null) |
|  | Sets a value to configuration. |
|  | [getHTMLDefinition](doxygen__classHTMLPurifier__Config.md#a79634932a0f13bf3b255c647cc87294f) ($raw=false, $optimized=false) |
|  | Retrieves object reference to the HTML definition. |
|  | [getCSSDefinition](doxygen__classHTMLPurifier__Config.md#a788e57cc194d84dd3d627177ce600dfd) ($raw=false, $optimized=false) |
|  | Retrieves object reference to the CSS definition. |
|  | [getURIDefinition](doxygen__classHTMLPurifier__Config.md#a4073764baa30ed93009c20b05253b5d6) ($raw=false, $optimized=false) |
|  | Retrieves object reference to the URI definition. |
|  | [getDefinition](doxygen__classHTMLPurifier__Config.md#af77400c39daefd9b9dd2be49aa60e48f) ($type, $raw=false, $optimized=false) |
|  | Retrieves a definition. |
|  | [maybeGetRawDefinition](doxygen__classHTMLPurifier__Config.md#a9891ef3146aa080560a8502b6372a2b5) ($name) |
|  | [maybeGetRawHTMLDefinition](doxygen__classHTMLPurifier__Config.md#ac59e34fcfc4cfdc0176939e16b9b57fc) () |
|  | [maybeGetRawCSSDefinition](doxygen__classHTMLPurifier__Config.md#a3931eb8b3952ab671ad2946ccd16c55b) () |
|  | [maybeGetRawURIDefinition](doxygen__classHTMLPurifier__Config.md#a66e2c78fd18baeca286ecf6728a51897) () |
|  | [loadArray](doxygen__classHTMLPurifier__Config.md#a6e4ab9eb2f6a9080713bf09aa3dd3719) ($config\_array) |
|  | Loads configuration values from an array with the following structure: Namespace.Directive => Value. |
|  | [mergeArrayFromForm](doxygen__classHTMLPurifier__Config.md#a8d242c24105157f5ea9a85dacea926c8) ($array, $index=false, $allowed=true, $mq\_fix=true) |
|  | Merges in configuration values from $\_GET/$\_POST to object. |
|  | [loadIni](doxygen__classHTMLPurifier__Config.md#acf5ebf3cb8b1496c9e0c9e84738acd0d) ($filename) |
|  | Loads configuration values from an ini file. |
|  | [isFinalized](doxygen__classHTMLPurifier__Config.md#aa8b46c649747e0ceb8860cdd673ff1ac) ($error=false) |
|  | Checks whether or not the configuration object is finalized. |
|  | [autoFinalize](doxygen__classHTMLPurifier__Config.md#a8f2653854dec7eb305c547fd6f4a43dd) () |
|  | Finalizes configuration only if auto finalize is on and not already finalized. |
|  | [finalize](doxygen__classHTMLPurifier__Config.md#a38fa0b59bebd8f820bff43e1135bce04) () |
|  | Finalizes a configuration object, prohibiting further change. |
|  | [serialize](doxygen__classHTMLPurifier__Config.md#ab1f52da877edc9da5205921da7b4e191) () |
|  | Returns a serialized form of the configuration object that can be reconstituted. |
|  | [\_\_construct](doxygen__classHTMLPurifier__Config.md#aa44fad3c8858c98b59c1051bb9d3481a) ($definition, $parent=null) |
|  | [get](doxygen__classHTMLPurifier__Config.md#ab94944fe3daf78d8acb100617073d0d7) ($key, $a=null) |
|  | Retreives a value from the configuration. |
|  | [getBatch](doxygen__classHTMLPurifier__Config.md#a5af7e5ab7e960f78f6fffb14c86cce9a) ($namespace) |
|  | Retreives an array of directives to values from a given namespace. |
|  | [getBatchSerial](doxygen__classHTMLPurifier__Config.md#a48a81383e2d9a5f93e0c757204a70829) ($namespace) |
|  | Returns a md5 signature of a segment of the configuration object that uniquely identifies that particular configuration. |
|  | [getSerial](doxygen__classHTMLPurifier__Config.md#af8bf913306ef7f975c0eb02686272f06) () |
|  | Returns a md5 signature for the entire configuration object that uniquely identifies that particular configuration. |
|  | [getAll](doxygen__classHTMLPurifier__Config.md#af2654d806c22b83c1abebf1f6501a365) () |
|  | Retrieves all directives, organized by namespace. |
|  | [set](doxygen__classHTMLPurifier__Config.md#a62dafd885e17cb0f0a3baf0bd9ad1681) ($key, $value, $a=null) |
|  | Sets a value to configuration. |
|  | [getHTMLDefinition](doxygen__classHTMLPurifier__Config.md#a79634932a0f13bf3b255c647cc87294f) ($raw=false, $optimized=false) |
|  | Retrieves object reference to the HTML definition. |
|  | [getCSSDefinition](doxygen__classHTMLPurifier__Config.md#a788e57cc194d84dd3d627177ce600dfd) ($raw=false, $optimized=false) |
|  | Retrieves object reference to the CSS definition. |
|  | [getURIDefinition](doxygen__classHTMLPurifier__Config.md#a4073764baa30ed93009c20b05253b5d6) ($raw=false, $optimized=false) |
|  | Retrieves object reference to the URI definition. |
|  | [getDefinition](doxygen__classHTMLPurifier__Config.md#af77400c39daefd9b9dd2be49aa60e48f) ($type, $raw=false, $optimized=false) |
|  | Retrieves a definition. |
|  | [maybeGetRawDefinition](doxygen__classHTMLPurifier__Config.md#a9891ef3146aa080560a8502b6372a2b5) ($name) |
|  | [maybeGetRawHTMLDefinition](doxygen__classHTMLPurifier__Config.md#ac59e34fcfc4cfdc0176939e16b9b57fc) () |
|  | [maybeGetRawCSSDefinition](doxygen__classHTMLPurifier__Config.md#a3931eb8b3952ab671ad2946ccd16c55b) () |
|  | [maybeGetRawURIDefinition](doxygen__classHTMLPurifier__Config.md#a66e2c78fd18baeca286ecf6728a51897) () |
|  | [loadArray](doxygen__classHTMLPurifier__Config.md#a6e4ab9eb2f6a9080713bf09aa3dd3719) ($config\_array) |
|  | Loads configuration values from an array with the following structure: Namespace.Directive => Value. |
|  | [mergeArrayFromForm](doxygen__classHTMLPurifier__Config.md#a8d242c24105157f5ea9a85dacea926c8) ($array, $index=false, $allowed=true, $mq\_fix=true) |
|  | Merges in configuration values from $\_GET/$\_POST to object. |
|  | [loadIni](doxygen__classHTMLPurifier__Config.md#acf5ebf3cb8b1496c9e0c9e84738acd0d) ($filename) |
|  | Loads configuration values from an ini file. |
|  | [isFinalized](doxygen__classHTMLPurifier__Config.md#aa8b46c649747e0ceb8860cdd673ff1ac) ($error=false) |
|  | Checks whether or not the configuration object is finalized. |
|  | [autoFinalize](doxygen__classHTMLPurifier__Config.md#a8f2653854dec7eb305c547fd6f4a43dd) () |
|  | Finalizes configuration only if auto finalize is on and not already finalized. |
|  | [finalize](doxygen__classHTMLPurifier__Config.md#a38fa0b59bebd8f820bff43e1135bce04) () |
|  | Finalizes a configuration object, prohibiting further change. |
|  | [serialize](doxygen__classHTMLPurifier__Config.md#ab1f52da877edc9da5205921da7b4e191) () |
|  | Returns a serialized form of the configuration object that can be reconstituted. |
| Static Public Member Functions | |
| static | [create](doxygen__classHTMLPurifier__Config.md#a063a082504e63d10551ec5472b2a54d9) ($config, $schema=null) |
|  | Convenience constructor that creates a config object based on a mixed var. |
| static | [inherit](doxygen__classHTMLPurifier__Config.md#aa1f8206990c7a583a752abeef734cb64) ([HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md) $config) |
|  | Creates a new config object that inherits from a previous one. |
| static | [createDefault](doxygen__classHTMLPurifier__Config.md#a1cdaef492d3ad4ea89c38d53779c4800) () |
|  | Convenience constructor that creates a default configuration object. |
| static | [getAllowedDirectivesForForm](doxygen__classHTMLPurifier__Config.md#a48e83ac386e03419ebc3a2019710eb96) ($allowed, $schema=null) |
|  | Returns a list of array(namespace, directive) for all directives that are allowed in a web-form context as per an allowed namespaces/directives list. |
| static | [loadArrayFromForm](doxygen__classHTMLPurifier__Config.md#a0c79e80b32c02aac6e404b910a178c1a) ($array, $index=false, $allowed=true, $mq\_fix=true, $schema=null) |
|  | Loads configuration values from $\_GET/$\_POST that were posted via ConfigForm. |
| static | [prepareArrayFromForm](doxygen__classHTMLPurifier__Config.md#ad9dba68ee02d1ed26be7a1371cbba5eb) ($array, $index=false, $allowed=true, $mq\_fix=true, $schema=null) |
|  | Prepares an array from a form into something usable for the more strict parts of [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior."). |
| static | [create](doxygen__classHTMLPurifier__Config.md#a063a082504e63d10551ec5472b2a54d9) ($config, $schema=null) |
|  | Convenience constructor that creates a config object based on a mixed var. |
| static | [inherit](doxygen__classHTMLPurifier__Config.md#aa1f8206990c7a583a752abeef734cb64) ([HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md) $config) |
|  | Creates a new config object that inherits from a previous one. |
| static | [createDefault](doxygen__classHTMLPurifier__Config.md#a1cdaef492d3ad4ea89c38d53779c4800) () |
|  | Convenience constructor that creates a default configuration object. |
| static | [getAllowedDirectivesForForm](doxygen__classHTMLPurifier__Config.md#a48e83ac386e03419ebc3a2019710eb96) ($allowed, $schema=null) |
|  | Returns a list of array(namespace, directive) for all directives that are allowed in a web-form context as per an allowed namespaces/directives list. |
| static | [loadArrayFromForm](doxygen__classHTMLPurifier__Config.md#a0c79e80b32c02aac6e404b910a178c1a) ($array, $index=false, $allowed=true, $mq\_fix=true, $schema=null) |
|  | Loads configuration values from $\_GET/$\_POST that were posted via ConfigForm. |
| static | [prepareArrayFromForm](doxygen__classHTMLPurifier__Config.md#ad9dba68ee02d1ed26be7a1371cbba5eb) ($array, $index=false, $allowed=true, $mq\_fix=true, $schema=null) |
|  | Prepares an array from a form into something usable for the more strict parts of [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior."). |
| Public Attributes | |
|  | [$version](doxygen__classHTMLPurifier__Config.md#a90113c09843f976f69f37031f7eb9023) = '4.4.0' |
|  | HTML Purifier's version. |
|  | [$autoFinalize](doxygen__classHTMLPurifier__Config.md#a951b10546b388ab4c6242931096aa97e) = true |
|  | Bool indicator whether or not to automatically finalize the object if a read operation is done. |
|  | [$def](doxygen__classHTMLPurifier__Config.md#aa76555df1991f670de3b1b3019929673) |
|  | Reference [HTMLPurifier\_ConfigSchema](doxygen__classHTMLPurifier__ConfigSchema.md "Configuration definition, defines directives and their defaults.") for value checking. |
|  | [$chatty](doxygen__classHTMLPurifier__Config.md#aba285c9cecc61c82b95bab05f8931539) = true |
|  | Set to false if you do not want line and file numbers in errors (useful when unit testing). |
| Protected Member Functions | |
|  | [triggerError](doxygen__classHTMLPurifier__Config.md#ab263fd9906646718fd19a24fcee646af) ($msg, $no) |
|  | Produces a nicely formatted error message by supplying the stack frame information OUTSIDE of [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior."). |
|  | [triggerError](doxygen__classHTMLPurifier__Config.md#ab263fd9906646718fd19a24fcee646af) ($msg, $no) |
|  | Produces a nicely formatted error message by supplying the stack frame information OUTSIDE of [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior."). |
| Protected Attributes | |
|  | [$serials](doxygen__classHTMLPurifier__Config.md#afe003339baa3446423bde92d230c1333) = array() |
|  | Namespace indexed array of serials for specific namespaces (see [getSerial()](doxygen__classHTMLPurifier__Config.md#af8bf913306ef7f975c0eb02686272f06 "Returns a md5 signature for the entire configuration object that uniquely identifies that particular ...") for more info). |
|  | [$serial](doxygen__classHTMLPurifier__Config.md#a69593d42c4c4f7a9c285ac2bf892fa15) |
|  | Serial for entire configuration object. |
|  | [$parser](doxygen__classHTMLPurifier__Config.md#a4b3bfa5d185c17c911db346bbf1cfb49) = null |
|  | Parser for variables. |
|  | [$definitions](doxygen__classHTMLPurifier__Config.md#a744bb585ea736e15c14e308ce34a89cf) |
|  | Indexed array of definitions. |
|  | [$finalized](doxygen__classHTMLPurifier__Config.md#a6f4aab5c90546e30139d6c57657c7008) = false |
|  | Bool indicator whether or not config is finalized. |
|  | [$plist](doxygen__classHTMLPurifier__Config.md#a11e37c608d947d71495b700b2e350e1c) |
|  | Property list containing configuration directives. |
| Private Member Functions | |
|  | [\_listify](doxygen__classHTMLPurifier__Config.md#a63ac11a7e7227b7c8b6311f12004db59) ($lookup) |
|  | Convenience function for error reporting. |
|  | [initDefinition](doxygen__classHTMLPurifier__Config.md#a1c10b9d758d875fc62765f3580183ca9) ($type) |
|  | [\_listify](doxygen__classHTMLPurifier__Config.md#a63ac11a7e7227b7c8b6311f12004db59) ($lookup) |
|  | Convenience function for error reporting. |
|  | [initDefinition](doxygen__classHTMLPurifier__Config.md#a1c10b9d758d875fc62765f3580183ca9) ($type) |
| Private Attributes | |
|  | [$aliasMode](doxygen__classHTMLPurifier__Config.md#a3a358de0bb33654989a7f02369ac37b5) |
|  | Whether or not a set is taking place due to an alias lookup. |
|  | [$lock](doxygen__classHTMLPurifier__Config.md#a5bd9ca2728ab90c3ed0b272e801a7acb) |
|  | Current lock; only gets to this namespace are allowed. |

---

## Detailed Description

Configuration object that triggers customizable behavior.

**Warning:**
:   This class is strongly defined: that means that the class will fail if an undefined directive is retrieved or set.

**Note:**
:   Many classes that could (although many times don't) use the configuration object make it a mandatory parameter. This is because a configuration object should always be forwarded, otherwise, you run the risk of missing a parameter and then being stumped when a configuration directive doesn't work.

**[Todo:](doxygen__todo.md#_todo000007)**
:   Reconsider some of the public member variables

**Warning:**
:   This class is strongly defined: that means that the class will fail if an undefined directive is retrieved or set.

**Note:**
:   Many classes that could (although many times don't) use the configuration object make it a mandatory parameter. This is because a configuration object should always be forwarded, otherwise, you run the risk of missing a parameter and then being stumped when a configuration directive doesn't work.

**[Todo:](doxygen__todo.md#_todo000036)**
:   Reconsider some of the public member variables

Definition at line [17](doxygen__Config_8php_source.md#l00017) of file [Config.php](doxygen__Config_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::\_\_construct | ( | $ | *definition*, |
|  |  | $ | *parent* = `null` |
|  | ) |  |  |

**Parameters:**
:   |  |  |
    | --- | --- |
    | $definition | [HTMLPurifier\_ConfigSchema](doxygen__classHTMLPurifier__ConfigSchema.md "Configuration definition, defines directives and their defaults.") that defines what directives are allowed. |

Definition at line [93](doxygen__Config_8php_source.md#l00093) of file [Config.php](doxygen__Config_8php_source.md).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::\_\_construct | ( | $ | *definition*, |
|  |  | $ | *parent* = `null` |
|  | ) |  |  |

**Parameters:**
:   |  |  |
    | --- | --- |
    | $definition | [HTMLPurifier\_ConfigSchema](doxygen__classHTMLPurifier__ConfigSchema.md "Configuration definition, defines directives and their defaults.") that defines what directives are allowed. |

Definition at line [1445](doxygen__HTMLPurifier_8standalone_8php_source.md#l01445) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

---

## Member Function Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::\_listify | ( | $ | *lookup* | ) | `[private]` |

Convenience function for error reporting.

Definition at line [312](doxygen__Config_8php_source.md#l00312) of file [Config.php](doxygen__Config_8php_source.md).

Referenced by [set()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01589).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::\_listify | ( | $ | *lookup* | ) | `[private]` |

Convenience function for error reporting.

Definition at line [1664](doxygen__HTMLPurifier_8standalone_8php_source.md#l01664) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::autoFinalize | ( |  | ) |  |

Finalizes configuration only if auto finalize is on and not already finalized.

Definition at line [658](doxygen__Config_8php_source.md#l00658) of file [Config.php](doxygen__Config_8php_source.md).

References [finalize()](doxygen__Config_8php_source.md#l00669).

Referenced by [autoFinalize()](doxygen__HTMLPurifier_8standalone_8php_source.md#l02010), [get()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01500), [getAll()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01574), [getBatch()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01532), and [getDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01728).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::autoFinalize | ( |  | ) |  |

Finalizes configuration only if auto finalize is on and not already finalized.

Definition at line [2010](doxygen__HTMLPurifier_8standalone_8php_source.md#l02010) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [autoFinalize()](doxygen__Config_8php_source.md#l00658), and [finalize()](doxygen__Config_8php_source.md#l00669).

|  |  |  |  |
| --- | --- | --- | --- |
| static HTMLPurifier\_Config::create | ( | $ | *config*, |
|  |  | $ | *schema* = `null` |
|  | ) |  | `[static]` |

Convenience constructor that creates a config object based on a mixed var.

**Parameters:**
:   |  |  |  |
    | --- | --- | --- |
    | mixed | $config | Variable that defines the state of the config object. Can be: a HTMLPurifier\_Config() object, an array of directives based on [loadArray()](doxygen__classHTMLPurifier__Config.md#a6e4ab9eb2f6a9080713bf09aa3dd3719 "Loads configuration values from an array with the following structure: Namespace.Directive => Value..."), or a string filename of an ini file. |
    |  | [HTMLPurifier\_ConfigSchema](doxygen__classHTMLPurifier__ConfigSchema.md "Configuration definition, defines directives and their defaults.") | Schema object |

**Returns:**
:   Configured [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object

Definition at line [109](doxygen__Config_8php_source.md#l00109) of file [Config.php](doxygen__Config_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [createDefault()](doxygen__Config_8php_source.md#l00138).

Referenced by [HTMLPurifier::\_\_construct()](doxygen__HTMLPurifier_8php_source.md#l00088), [loadArrayFromForm()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01946), [phorum\_htmlpurifier\_get\_config()](doxygen__init-config_8php_source.md#l00008), and [HTMLPurifier::purify()](doxygen__HTMLPurifier_8php_source.md#l00115).

|  |  |  |  |
| --- | --- | --- | --- |
| static HTMLPurifier\_Config::create | ( | $ | *config*, |
|  |  | $ | *schema* = `null` |
|  | ) |  | `[static]` |

Convenience constructor that creates a config object based on a mixed var.

**Parameters:**
:   |  |  |  |
    | --- | --- | --- |
    | mixed | $config | Variable that defines the state of the config object. Can be: a HTMLPurifier\_Config() object, an array of directives based on [loadArray()](doxygen__classHTMLPurifier__Config.md#a6e4ab9eb2f6a9080713bf09aa3dd3719 "Loads configuration values from an array with the following structure: Namespace.Directive => Value..."), or a string filename of an ini file. |
    |  | [HTMLPurifier\_ConfigSchema](doxygen__classHTMLPurifier__ConfigSchema.md "Configuration definition, defines directives and their defaults.") | Schema object |

**Returns:**
:   Configured [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object

Definition at line [1461](doxygen__HTMLPurifier_8standalone_8php_source.md#l01461) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [createDefault()](doxygen__Config_8php_source.md#l00138).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| static HTMLPurifier\_Config::createDefault | ( |  | ) | `[static]` |

Convenience constructor that creates a default configuration object.

**Returns:**
:   Default [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object.

Definition at line [1490](doxygen__HTMLPurifier_8standalone_8php_source.md#l01490) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_ConfigSchema::instance()](doxygen__ConfigSchema_8php_source.md#l00075).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| static HTMLPurifier\_Config::createDefault | ( |  | ) | `[static]` |

Convenience constructor that creates a default configuration object.

**Returns:**
:   Default [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object.

Definition at line [138](doxygen__Config_8php_source.md#l00138) of file [Config.php](doxygen__Config_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), and [HTMLPurifier\_ConfigSchema::instance()](doxygen__ConfigSchema_8php_source.md#l00075).

Referenced by [create()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01461), [HTMLPurifier\_URISchemeRegistry::getScheme()](doxygen__HTMLPurifier_8standalone_8php_source.md#l07725), [kses()](doxygen__HTMLPurifier_8kses_8php_source.md#l00010), and [phorum\_htmlpurifier\_get\_config()](doxygen__init-config_8php_source.md#l00008).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::finalize | ( |  | ) |  |

Finalizes a configuration object, prohibiting further change.

Definition at line [2021](doxygen__HTMLPurifier_8standalone_8php_source.md#l02021) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::finalize | ( |  | ) |  |

Finalizes a configuration object, prohibiting further change.

Definition at line [669](doxygen__Config_8php_source.md#l00669) of file [Config.php](doxygen__Config_8php_source.md).

Referenced by [autoFinalize()](doxygen__HTMLPurifier_8standalone_8php_source.md#l02010).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::get | ( | $ | *key*, |
|  |  | $ | *a* = `null` |
|  | ) |  |  |

Retreives a value from the configuration.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $key | String key |

Definition at line [1500](doxygen__HTMLPurifier_8standalone_8php_source.md#l01500) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [autoFinalize()](doxygen__Config_8php_source.md#l00658), and [triggerError()](doxygen__Config_8php_source.md#l00678).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::get | ( | $ | *key*, |
|  |  | $ | *a* = `null` |
|  | ) |  |  |

Retreives a value from the configuration.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $key | String key |

Definition at line [148](doxygen__Config_8php_source.md#l00148) of file [Config.php](doxygen__Config_8php_source.md).

References [autoFinalize()](doxygen__Config_8php_source.md#l00658), and [triggerError()](doxygen__Config_8php_source.md#l00678).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::getAll | ( |  | ) |  |

Retrieves all directives, organized by namespace.

**Warning:**
:   This is a pretty inefficient function, avoid if you can

Definition at line [222](doxygen__Config_8php_source.md#l00222) of file [Config.php](doxygen__Config_8php_source.md).

References [autoFinalize()](doxygen__Config_8php_source.md#l00658).

Referenced by [getBatch()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01532), and [getSerial()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01563).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::getAll | ( |  | ) |  |

Retrieves all directives, organized by namespace.

**Warning:**
:   This is a pretty inefficient function, avoid if you can

Definition at line [1574](doxygen__HTMLPurifier_8standalone_8php_source.md#l01574) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [autoFinalize()](doxygen__Config_8php_source.md#l00658).

|  |  |  |  |
| --- | --- | --- | --- |
| static HTMLPurifier\_Config::getAllowedDirectivesForForm | ( | $ | *allowed*, |
|  |  | $ | *schema* = `null` |
|  | ) |  | `[static]` |

Returns a list of array(namespace, directive) for all directives that are allowed in a web-form context as per an allowed namespaces/directives list.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $allowed | List of allowed namespaces/directives |

Definition at line [548](doxygen__Config_8php_source.md#l00548) of file [Config.php](doxygen__Config_8php_source.md).

References [$def](doxygen__Config_8php_source.md#l00054), and [HTMLPurifier\_ConfigSchema::instance()](doxygen__ConfigSchema_8php_source.md#l00075).

Referenced by [prepareArrayFromForm()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01965), and [HTMLPurifier\_Printer\_ConfigForm::render()](doxygen__ConfigForm_8php_source.md#l00078).

|  |  |  |  |
| --- | --- | --- | --- |
| static HTMLPurifier\_Config::getAllowedDirectivesForForm | ( | $ | *allowed*, |
|  |  | $ | *schema* = `null` |
|  | ) |  | `[static]` |

Returns a list of array(namespace, directive) for all directives that are allowed in a web-form context as per an allowed namespaces/directives list.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $allowed | List of allowed namespaces/directives |

Definition at line [1900](doxygen__HTMLPurifier_8standalone_8php_source.md#l01900) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$def](doxygen__Config_8php_source.md#l00054), and [HTMLPurifier\_ConfigSchema::instance()](doxygen__ConfigSchema_8php_source.md#l00075).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::getBatch | ( | $ | *namespace* | ) |  |

Retreives an array of directives to values from a given namespace.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $namespace | String namespace |

Definition at line [1532](doxygen__HTMLPurifier_8standalone_8php_source.md#l01532) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [autoFinalize()](doxygen__Config_8php_source.md#l00658), [getAll()](doxygen__Config_8php_source.md#l00222), and [triggerError()](doxygen__Config_8php_source.md#l00678).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::getBatch | ( | $ | *namespace* | ) |  |

Retreives an array of directives to values from a given namespace.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $namespace | String namespace |

Definition at line [180](doxygen__Config_8php_source.md#l00180) of file [Config.php](doxygen__Config_8php_source.md).

References [autoFinalize()](doxygen__Config_8php_source.md#l00658), [getAll()](doxygen__Config_8php_source.md#l00222), and [triggerError()](doxygen__Config_8php_source.md#l00678).

Referenced by [getBatchSerial()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01550).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::getBatchSerial | ( | $ | *namespace* | ) |  |

Returns a md5 signature of a segment of the configuration object that uniquely identifies that particular configuration.

**Note:**
:   Revision is handled specially and is removed from the batch before processing!

**Parameters:**
:   |  |  |
    | --- | --- |
    | $namespace | Namespace to get serial for |

Definition at line [1550](doxygen__HTMLPurifier_8standalone_8php_source.md#l01550) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [getBatch()](doxygen__Config_8php_source.md#l00180), and [serialize()](doxygen__Config_8php_source.md#l00700).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::getBatchSerial | ( | $ | *namespace* | ) |  |

Returns a md5 signature of a segment of the configuration object that uniquely identifies that particular configuration.

**Note:**
:   Revision is handled specially and is removed from the batch before processing!

**Parameters:**
:   |  |  |
    | --- | --- |
    | $namespace | Namespace to get serial for |

Definition at line [198](doxygen__Config_8php_source.md#l00198) of file [Config.php](doxygen__Config_8php_source.md).

References [getBatch()](doxygen__Config_8php_source.md#l00180), and [serialize()](doxygen__Config_8php_source.md#l00700).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::getCSSDefinition | ( | $ | *raw* = `false`, |
|  |  | $ | *optimized* = `false` |
|  | ) |  |  |

Retrieves object reference to the CSS definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $raw | Return a copy that has not been setup yet. Must be called before it's been setup, otherwise won't work. |
    | $optimized | If true, this method may return null, to indicate that a cached version of the modified definition object is available and no further edits are necessary. Consider using maybeGetRawCSSDefinition, which is more explicitly named, instead. |

Definition at line [1696](doxygen__HTMLPurifier_8standalone_8php_source.md#l01696) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::getCSSDefinition | ( | $ | *raw* = `false`, |
|  |  | $ | *optimized* = `false` |
|  | ) |  |  |

Retrieves object reference to the CSS definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $raw | Return a copy that has not been setup yet. Must be called before it's been setup, otherwise won't work. |
    | $optimized | If true, this method may return null, to indicate that a cached version of the modified definition object is available and no further edits are necessary. Consider using maybeGetRawCSSDefinition, which is more explicitly named, instead. |

Definition at line [344](doxygen__Config_8php_source.md#l00344) of file [Config.php](doxygen__Config_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::getDefinition | ( | $ | *type*, |
|  |  | $ | *raw* = `false`, |
|  |  | $ | *optimized* = `false` |
|  | ) |  |  |

Retrieves a definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $type | Type of definition: HTML, CSS, etc |
    | $raw | Whether or not definition should be returned raw |
    | $optimized | Only has an effect when $raw is true. Whether or not to return null if the result is already present in the cache. This is off by default for backwards compatibility reasons, but you need to do things this way in order to ensure that caching is done properly. Check out enduser-customize.html for more details. We probably won't ever change this default, as much as the maybe semantics is the "right thing to do." |

Definition at line [1728](doxygen__HTMLPurifier_8standalone_8php_source.md#l01728) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$def](doxygen__Config_8php_source.md#l00054), [$lock](doxygen__Config_8php_source.md#l00087), [autoFinalize()](doxygen__Config_8php_source.md#l00658), [initDefinition()](doxygen__Config_8php_source.md#l00490), [HTMLPurifier\_DefinitionCacheFactory::instance()](doxygen__DefinitionCacheFactory_8php_source.md#l00023), and [triggerError()](doxygen__Config_8php_source.md#l00678).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::getDefinition | ( | $ | *type*, |
|  |  | $ | *raw* = `false`, |
|  |  | $ | *optimized* = `false` |
|  | ) |  |  |

Retrieves a definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $type | Type of definition: HTML, CSS, etc |
    | $raw | Whether or not definition should be returned raw |
    | $optimized | Only has an effect when $raw is true. Whether or not to return null if the result is already present in the cache. This is off by default for backwards compatibility reasons, but you need to do things this way in order to ensure that caching is done properly. Check out enduser-customize.html for more details. We probably won't ever change this default, as much as the maybe semantics is the "right thing to do." |

Definition at line [376](doxygen__Config_8php_source.md#l00376) of file [Config.php](doxygen__Config_8php_source.md).

References [$def](doxygen__Config_8php_source.md#l00054), [$lock](doxygen__Config_8php_source.md#l00087), [autoFinalize()](doxygen__Config_8php_source.md#l00658), [initDefinition()](doxygen__Config_8php_source.md#l00490), [HTMLPurifier\_DefinitionCacheFactory::instance()](doxygen__DefinitionCacheFactory_8php_source.md#l00023), and [triggerError()](doxygen__Config_8php_source.md#l00678).

Referenced by [getCSSDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01696), [getHTMLDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01681), [getURIDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01711), [maybeGetRawCSSDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01865), [maybeGetRawDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01857), [maybeGetRawHTMLDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01861), [maybeGetRawURIDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01869), and [serialize()](doxygen__HTMLPurifier_8standalone_8php_source.md#l02052).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::getHTMLDefinition | ( | $ | *raw* = `false`, |
|  |  | $ | *optimized* = `false` |
|  | ) |  |  |

Retrieves object reference to the HTML definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $raw | Return a copy that has not been setup yet. Must be called before it's been setup, otherwise won't work. |
    | $optimized | If true, this method may return null, to indicate that a cached version of the modified definition object is available and no further edits are necessary. Consider using maybeGetRawHTMLDefinition, which is more explicitly named, instead. |

Definition at line [1681](doxygen__HTMLPurifier_8standalone_8php_source.md#l01681) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::getHTMLDefinition | ( | $ | *raw* = `false`, |
|  |  | $ | *optimized* = `false` |
|  | ) |  |  |

Retrieves object reference to the HTML definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $raw | Return a copy that has not been setup yet. Must be called before it's been setup, otherwise won't work. |
    | $optimized | If true, this method may return null, to indicate that a cached version of the modified definition object is available and no further edits are necessary. Consider using maybeGetRawHTMLDefinition, which is more explicitly named, instead. |

Definition at line [329](doxygen__Config_8php_source.md#l00329) of file [Config.php](doxygen__Config_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::getSerial | ( |  | ) |  |

Returns a md5 signature for the entire configuration object that uniquely identifies that particular configuration.

Definition at line [1563](doxygen__HTMLPurifier_8standalone_8php_source.md#l01563) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [getAll()](doxygen__Config_8php_source.md#l00222), and [serialize()](doxygen__Config_8php_source.md#l00700).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::getSerial | ( |  | ) |  |

Returns a md5 signature for the entire configuration object that uniquely identifies that particular configuration.

Definition at line [211](doxygen__Config_8php_source.md#l00211) of file [Config.php](doxygen__Config_8php_source.md).

References [getAll()](doxygen__Config_8php_source.md#l00222), and [serialize()](doxygen__Config_8php_source.md#l00700).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::getURIDefinition | ( | $ | *raw* = `false`, |
|  |  | $ | *optimized* = `false` |
|  | ) |  |  |

Retrieves object reference to the URI definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $raw | Return a copy that has not been setup yet. Must be called before it's been setup, otherwise won't work. |
    | $optimized | If true, this method may return null, to indicate that a cached version of the modified definition object is available and no further edits are necessary. Consider using maybeGetRawURIDefinition, which is more explicitly named, instead. |

Definition at line [1711](doxygen__HTMLPurifier_8standalone_8php_source.md#l01711) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::getURIDefinition | ( | $ | *raw* = `false`, |
|  |  | $ | *optimized* = `false` |
|  | ) |  |  |

Retrieves object reference to the URI definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $raw | Return a copy that has not been setup yet. Must be called before it's been setup, otherwise won't work. |
    | $optimized | If true, this method may return null, to indicate that a cached version of the modified definition object is available and no further edits are necessary. Consider using maybeGetRawURIDefinition, which is more explicitly named, instead. |

Definition at line [359](doxygen__Config_8php_source.md#l00359) of file [Config.php](doxygen__Config_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| static HTMLPurifier\_Config::inherit | ( | [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md) $ | *config* | ) | `[static]` |

Creates a new config object that inherits from a previous one.

**Parameters:**
:   |  |  |  |
    | --- | --- | --- |
    | [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") | $config | Configuration object to inherit from. |

**Returns:**
:   [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object with $config as its parent.

Definition at line [130](doxygen__Config_8php_source.md#l00130) of file [Config.php](doxygen__Config_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| static HTMLPurifier\_Config::inherit | ( | [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md) $ | *config* | ) | `[static]` |

Creates a new config object that inherits from a previous one.

**Parameters:**
:   |  |  |  |
    | --- | --- | --- |
    | [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") | $config | Configuration object to inherit from. |

**Returns:**
:   [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object with $config as its parent.

Definition at line [1482](doxygen__HTMLPurifier_8standalone_8php_source.md#l01482) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::initDefinition | ( | $ | *type* | ) | `[private]` |

Definition at line [1842](doxygen__HTMLPurifier_8standalone_8php_source.md#l01842) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$def](doxygen__Config_8php_source.md#l00054).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::initDefinition | ( | $ | *type* | ) | `[private]` |

Definition at line [490](doxygen__Config_8php_source.md#l00490) of file [Config.php](doxygen__Config_8php_source.md).

References [$def](doxygen__Config_8php_source.md#l00054).

Referenced by [getDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01728).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::isFinalized | ( | $ | *error* = `false` | ) |  |

Checks whether or not the configuration object is finalized.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $error | String error message, or false for no error |

Definition at line [1999](doxygen__HTMLPurifier_8standalone_8php_source.md#l01999) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [triggerError()](doxygen__Config_8php_source.md#l00678).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::isFinalized | ( | $ | *error* = `false` | ) |  |

Checks whether or not the configuration object is finalized.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $error | String error message, or false for no error |

Definition at line [647](doxygen__Config_8php_source.md#l00647) of file [Config.php](doxygen__Config_8php_source.md).

References [triggerError()](doxygen__Config_8php_source.md#l00678).

Referenced by [loadArray()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01878), [loadIni()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01989), and [set()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01589).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::loadArray | ( | $ | *config\_array* | ) |  |

Loads configuration values from an array with the following structure: Namespace.Directive => Value.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $config\_array | Configuration associative array |

Definition at line [1878](doxygen__HTMLPurifier_8standalone_8php_source.md#l01878) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [isFinalized()](doxygen__Config_8php_source.md#l00647).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::loadArray | ( | $ | *config\_array* | ) |  |

Loads configuration values from an array with the following structure: Namespace.Directive => Value.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $config\_array | Configuration associative array |

Definition at line [526](doxygen__Config_8php_source.md#l00526) of file [Config.php](doxygen__Config_8php_source.md).

References [isFinalized()](doxygen__Config_8php_source.md#l00647).

Referenced by [loadIni()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01989), and [mergeArrayFromForm()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01956).

|  |  |  |  |
| --- | --- | --- | --- |
| static HTMLPurifier\_Config::loadArrayFromForm | ( | $ | *array*, |
|  |  | $ | *index* = `false`, |
|  |  | $ | *allowed* = `true`, |
|  |  | $ | *mq\_fix* = `true`, |
|  |  | $ | *schema* = `null` |
|  | ) |  | `[static]` |

Loads configuration values from $\_GET/$\_POST that were posted via ConfigForm.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $array | $\_GET or $\_POST array to import |
    | $index | Index/name that the config variables are in |
    | $allowed | List of allowed namespaces/directives |
    | $mq\_fix | Boolean whether or not to enable magic quotes fix |
    | $schema | Instance of [HTMLPurifier\_ConfigSchema](doxygen__classHTMLPurifier__ConfigSchema.md "Configuration definition, defines directives and their defaults.") to use, if not global copy |

Definition at line [594](doxygen__Config_8php_source.md#l00594) of file [Config.php](doxygen__Config_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), [create()](doxygen__Config_8php_source.md#l00109), and [prepareArrayFromForm()](doxygen__Config_8php_source.md#l00613).

|  |  |  |  |
| --- | --- | --- | --- |
| static HTMLPurifier\_Config::loadArrayFromForm | ( | $ | *array*, |
|  |  | $ | *index* = `false`, |
|  |  | $ | *allowed* = `true`, |
|  |  | $ | *mq\_fix* = `true`, |
|  |  | $ | *schema* = `null` |
|  | ) |  | `[static]` |

Loads configuration values from $\_GET/$\_POST that were posted via ConfigForm.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $array | $\_GET or $\_POST array to import |
    | $index | Index/name that the config variables are in |
    | $allowed | List of allowed namespaces/directives |
    | $mq\_fix | Boolean whether or not to enable magic quotes fix |
    | $schema | Instance of [HTMLPurifier\_ConfigSchema](doxygen__classHTMLPurifier__ConfigSchema.md "Configuration definition, defines directives and their defaults.") to use, if not global copy |

Definition at line [1946](doxygen__HTMLPurifier_8standalone_8php_source.md#l01946) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$config](doxygen__form_8php_source.md#l00003), [create()](doxygen__Config_8php_source.md#l00109), and [prepareArrayFromForm()](doxygen__Config_8php_source.md#l00613).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::loadIni | ( | $ | *filename* | ) |  |

Loads configuration values from an ini file.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $filename | Name of ini file |

Definition at line [1989](doxygen__HTMLPurifier_8standalone_8php_source.md#l01989) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [isFinalized()](doxygen__Config_8php_source.md#l00647), and [loadArray()](doxygen__Config_8php_source.md#l00526).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::loadIni | ( | $ | *filename* | ) |  |

Loads configuration values from an ini file.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $filename | Name of ini file |

Definition at line [637](doxygen__Config_8php_source.md#l00637) of file [Config.php](doxygen__Config_8php_source.md).

References [isFinalized()](doxygen__Config_8php_source.md#l00647), and [loadArray()](doxygen__Config_8php_source.md#l00526).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::maybeGetRawCSSDefinition | ( |  | ) |  |

Definition at line [513](doxygen__Config_8php_source.md#l00513) of file [Config.php](doxygen__Config_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::maybeGetRawCSSDefinition | ( |  | ) |  |

Definition at line [1865](doxygen__HTMLPurifier_8standalone_8php_source.md#l01865) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::maybeGetRawDefinition | ( | $ | *name* | ) |  |

Definition at line [505](doxygen__Config_8php_source.md#l00505) of file [Config.php](doxygen__Config_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::maybeGetRawDefinition | ( | $ | *name* | ) |  |

Definition at line [1857](doxygen__HTMLPurifier_8standalone_8php_source.md#l01857) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::maybeGetRawHTMLDefinition | ( |  | ) |  |

Definition at line [1861](doxygen__HTMLPurifier_8standalone_8php_source.md#l01861) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::maybeGetRawHTMLDefinition | ( |  | ) |  |

Definition at line [509](doxygen__Config_8php_source.md#l00509) of file [Config.php](doxygen__Config_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::maybeGetRawURIDefinition | ( |  | ) |  |

Definition at line [1869](doxygen__HTMLPurifier_8standalone_8php_source.md#l01869) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::maybeGetRawURIDefinition | ( |  | ) |  |

Definition at line [517](doxygen__Config_8php_source.md#l00517) of file [Config.php](doxygen__Config_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::mergeArrayFromForm | ( | $ | *array*, |
|  |  | $ | *index* = `false`, |
|  |  | $ | *allowed* = `true`, |
|  |  | $ | *mq\_fix* = `true` |
|  | ) |  |  |

Merges in configuration values from $\_GET/$\_POST to object.

NOT STATIC.

**Note:**
:   Same parameters as loadArrayFromForm

Definition at line [604](doxygen__Config_8php_source.md#l00604) of file [Config.php](doxygen__Config_8php_source.md).

References [loadArray()](doxygen__Config_8php_source.md#l00526), and [prepareArrayFromForm()](doxygen__Config_8php_source.md#l00613).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::mergeArrayFromForm | ( | $ | *array*, |
|  |  | $ | *index* = `false`, |
|  |  | $ | *allowed* = `true`, |
|  |  | $ | *mq\_fix* = `true` |
|  | ) |  |  |

Merges in configuration values from $\_GET/$\_POST to object.

NOT STATIC.

**Note:**
:   Same parameters as loadArrayFromForm

Definition at line [1956](doxygen__HTMLPurifier_8standalone_8php_source.md#l01956) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [loadArray()](doxygen__Config_8php_source.md#l00526), and [prepareArrayFromForm()](doxygen__Config_8php_source.md#l00613).

|  |  |  |  |
| --- | --- | --- | --- |
| static HTMLPurifier\_Config::prepareArrayFromForm | ( | $ | *array*, |
|  |  | $ | *index* = `false`, |
|  |  | $ | *allowed* = `true`, |
|  |  | $ | *mq\_fix* = `true`, |
|  |  | $ | *schema* = `null` |
|  | ) |  | `[static]` |

Prepares an array from a form into something usable for the more strict parts of [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.").

Definition at line [1965](doxygen__HTMLPurifier_8standalone_8php_source.md#l01965) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [getAllowedDirectivesForForm()](doxygen__Config_8php_source.md#l00548).

|  |  |  |  |
| --- | --- | --- | --- |
| static HTMLPurifier\_Config::prepareArrayFromForm | ( | $ | *array*, |
|  |  | $ | *index* = `false`, |
|  |  | $ | *allowed* = `true`, |
|  |  | $ | *mq\_fix* = `true`, |
|  |  | $ | *schema* = `null` |
|  | ) |  | `[static]` |

Prepares an array from a form into something usable for the more strict parts of [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.").

Definition at line [613](doxygen__Config_8php_source.md#l00613) of file [Config.php](doxygen__Config_8php_source.md).

References [getAllowedDirectivesForForm()](doxygen__Config_8php_source.md#l00548).

Referenced by [loadArrayFromForm()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01946), and [mergeArrayFromForm()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01956).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::serialize | ( |  | ) |  |

Returns a serialized form of the configuration object that can be reconstituted.

Definition at line [2052](doxygen__HTMLPurifier_8standalone_8php_source.md#l02052) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376), and [serialize()](doxygen__Config_8php_source.md#l00700).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTMLPurifier\_Config::serialize | ( |  | ) |  |

Returns a serialized form of the configuration object that can be reconstituted.

Definition at line [700](doxygen__Config_8php_source.md#l00700) of file [Config.php](doxygen__Config_8php_source.md).

References [getDefinition()](doxygen__Config_8php_source.md#l00376).

Referenced by [getBatchSerial()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01550), [getSerial()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01563), and [serialize()](doxygen__HTMLPurifier_8standalone_8php_source.md#l02052).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::set | ( | $ | *key*, |
|  |  | $ | *value*, |
|  |  | $ | *a* = `null` |
|  | ) |  |  |

Sets a value to configuration.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $key | String key |
    | $value | Mixed value |

Definition at line [237](doxygen__Config_8php_source.md#l00237) of file [Config.php](doxygen__Config_8php_source.md).

References [$def](doxygen__Config_8php_source.md#l00054), [\_listify()](doxygen__Config_8php_source.md#l00312), [HTMLPurifier\_VarParser::getTypeName()](doxygen__VarParser_8php_source.md#l00142), [isFinalized()](doxygen__Config_8php_source.md#l00647), and [triggerError()](doxygen__Config_8php_source.md#l00678).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::set | ( | $ | *key*, |
|  |  | $ | *value*, |
|  |  | $ | *a* = `null` |
|  | ) |  |  |

Sets a value to configuration.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $key | String key |
    | $value | Mixed value |

Definition at line [1589](doxygen__HTMLPurifier_8standalone_8php_source.md#l01589) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [$def](doxygen__Config_8php_source.md#l00054), [\_listify()](doxygen__Config_8php_source.md#l00312), [HTMLPurifier\_VarParser::getTypeName()](doxygen__VarParser_8php_source.md#l00142), [isFinalized()](doxygen__Config_8php_source.md#l00647), and [triggerError()](doxygen__Config_8php_source.md#l00678).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::triggerError | ( | $ | *msg*, |
|  |  | $ | *no* |
|  | ) |  | `[protected]` |

Produces a nicely formatted error message by supplying the stack frame information OUTSIDE of [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.").

Definition at line [678](doxygen__Config_8php_source.md#l00678) of file [Config.php](doxygen__Config_8php_source.md).

Referenced by [get()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01500), [getBatch()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01532), [getDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01728), [isFinalized()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01999), and [set()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01589).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_Config::triggerError | ( | $ | *msg*, |
|  |  | $ | *no* |
|  | ) |  | `[protected]` |

Produces a nicely formatted error message by supplying the stack frame information OUTSIDE of [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.").

Definition at line [2030](doxygen__HTMLPurifier_8standalone_8php_source.md#l02030) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_Config::$aliasMode `[private]` |

Whether or not a set is taking place due to an alias lookup.

Definition at line [75](doxygen__Config_8php_source.md#l00075) of file [Config.php](doxygen__Config_8php_source.md).

|  |
| --- |
| HTMLPurifier\_Config::$autoFinalize = true |

Bool indicator whether or not to automatically finalize the object if a read operation is done.

Definition at line [29](doxygen__Config_8php_source.md#l00029) of file [Config.php](doxygen__Config_8php_source.md).

|  |
| --- |
| HTMLPurifier\_Config::$chatty = true |

Set to false if you do not want line and file numbers in errors (useful when unit testing).

This will also compress some errors and exceptions.

Definition at line [82](doxygen__Config_8php_source.md#l00082) of file [Config.php](doxygen__Config_8php_source.md).

|  |
| --- |
| HTMLPurifier\_Config::$def |

Reference [HTMLPurifier\_ConfigSchema](doxygen__classHTMLPurifier__ConfigSchema.md "Configuration definition, defines directives and their defaults.") for value checking.

**Note:**
:   This is public for introspective purposes. Please don't abuse!

Definition at line [54](doxygen__Config_8php_source.md#l00054) of file [Config.php](doxygen__Config_8php_source.md).

Referenced by [getAllowedDirectivesForForm()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01900), [getDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01728), [initDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01842), and [set()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01589).

|  |
| --- |
| HTMLPurifier\_Config::$definitions `[protected]` |

Indexed array of definitions.

Definition at line [59](doxygen__Config_8php_source.md#l00059) of file [Config.php](doxygen__Config_8php_source.md).

|  |
| --- |
| HTMLPurifier\_Config::$finalized = false `[protected]` |

Bool indicator whether or not config is finalized.

Definition at line [64](doxygen__Config_8php_source.md#l00064) of file [Config.php](doxygen__Config_8php_source.md).

|  |
| --- |
| HTMLPurifier\_Config::$lock `[private]` |

Current lock; only gets to this namespace are allowed.

Definition at line [87](doxygen__Config_8php_source.md#l00087) of file [Config.php](doxygen__Config_8php_source.md).

Referenced by [getDefinition()](doxygen__HTMLPurifier_8standalone_8php_source.md#l01728).

|  |
| --- |
| HTMLPurifier\_Config::$parser = null `[protected]` |

Parser for variables.

Definition at line [47](doxygen__Config_8php_source.md#l00047) of file [Config.php](doxygen__Config_8php_source.md).

|  |
| --- |
| HTMLPurifier\_Config::$plist `[protected]` |

Property list containing configuration directives.

Definition at line [69](doxygen__Config_8php_source.md#l00069) of file [Config.php](doxygen__Config_8php_source.md).

|  |
| --- |
| HTMLPurifier\_Config::$serial `[protected]` |

Serial for entire configuration object.

Definition at line [42](doxygen__Config_8php_source.md#l00042) of file [Config.php](doxygen__Config_8php_source.md).

|  |
| --- |
| HTMLPurifier\_Config::$serials = array() `[protected]` |

Namespace indexed array of serials for specific namespaces (see [getSerial()](doxygen__classHTMLPurifier__Config.md#af8bf913306ef7f975c0eb02686272f06 "Returns a md5 signature for the entire configuration object that uniquely identifies that particular ...") for more info).

Definition at line [37](doxygen__Config_8php_source.md#l00037) of file [Config.php](doxygen__Config_8php_source.md).

|  |
| --- |
| HTMLPurifier\_Config::$version = '4.4.0' |

HTML Purifier's version.

Definition at line [23](doxygen__Config_8php_source.md#l00023) of file [Config.php](doxygen__Config_8php_source.md).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/[Config.php](doxygen__Config_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md)
- Generated on Wed Jan 18 2012 22:58:22 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
