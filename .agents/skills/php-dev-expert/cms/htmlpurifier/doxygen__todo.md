# HTMLPurifier: Todo List

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/todo.html

---

|  |
| --- |
| HTMLPurifier 4.4.0 |

- [Main Page](doxygen__index.md)
- [Related Pages](doxygen__pages.md)
- [Classes](doxygen__annotated.md)
- [Files](doxygen__files.md)

Todo List

Member [ConfigDoc\_HTMLXSLTProcessor::transformToHTML](doxygen__classConfigDoc__HTMLXSLTProcessor.md#a76993836168ce016a531b4d1825bc61e) ($xml)
:   Rename to transformToXHTML, as transformToHTML is misleading

Member [FSTools\_File::get](doxygen__classFSTools__File.md#a0b25c10279b67d191912e8de618aa64c) ()
:   Throw an exception if file doesn't exist

Class [HTMLPurifier](doxygen__classHTMLPurifier.md)
:   We need an easier way to inject strategies using the configuration object.

    We need an easier way to inject strategies using the configuration object.

Member [HTMLPurifier\_AttrDef\_CSS\_Composite::$defs](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md#a7e99e8d8ab6507cf5e6cb4b1cc8935fc)
:   Make protected

    Make protected

Member [HTMLPurifier\_AttrDef\_CSS\_Multiple::$max](doxygen__classHTMLPurifier__AttrDef__CSS__Multiple.md#a65da5b3ca816d32bb1698add3e0a3576)
:   Make protected

    Make protected

Member [HTMLPurifier\_AttrDef\_CSS\_Multiple::$single](doxygen__classHTMLPurifier__AttrDef__CSS__Multiple.md#a52fb60d24dfe202beeaa7f7c6bad97f1)
:   Make protected

    Make protected

Member [HTMLPurifier\_AttrDef\_Enum::$valid\_values](doxygen__classHTMLPurifier__AttrDef__Enum.md#abc1df45b8d1bb628e037beae48b951d4)
:   Make protected

    Make protected

Class [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md)
:   Reconsider some of the public member variables

    Reconsider some of the public member variables

Class [HTMLPurifier\_ContentSets](doxygen__classHTMLPurifier__ContentSets.md)
:   Unit test

    Unit test

Member [HTMLPurifier\_CSSDefinition::setupConfigStuff](doxygen__classHTMLPurifier__CSSDefinition.md#a3e7210170e6f01e3b9149174e673977e) ($config)
:   Refactor duplicate elements into common class (probably using composition, not inheritance).

    Refactor duplicate elements into common class (probably using composition, not inheritance).

Class [HTMLPurifier\_DefinitionCache](doxygen__classHTMLPurifier__DefinitionCache.md)
:   Create a separate maintenance file advanced users can use to cache their custom HTMLDefinition, which can be loaded via a configuration directive

    Implement memcached

    Create a separate maintenance file advanced users can use to cache their custom HTMLDefinition, which can be loaded via a configuration directive

    Implement memcached

Member [HTMLPurifier\_DefinitionCache\_Serializer::generateBaseDirectoryPath](doxygen__classHTMLPurifier__DefinitionCache__Serializer.md#ad5ea17d7c17ea67852f3aeaff3707057) ($config)
:   Make protected

    Make protected

Member [HTMLPurifier\_DefinitionCache\_Serializer::generateDirectoryPath](doxygen__classHTMLPurifier__DefinitionCache__Serializer.md#a5d91bdfc11200a585a6d4fdbea54c0be) ($config)
:   Make protected

    Make protected

Member [HTMLPurifier\_DefinitionCache\_Serializer::generateFilePath](doxygen__classHTMLPurifier__DefinitionCache__Serializer.md#ad18f778e5a8ca5f9ba921b23078bb983) ($config)
:   Make protected

    Make protected

Member [HTMLPurifier\_Filter\_ExtractStyleBlocks::preFilter](doxygen__classHTMLPurifier__Filter__ExtractStyleBlocks.md#ab7d60f87d1311c0392a763984ec2fbbf) ($html, $config, $context)
:   Extend to indicate non-text/css style blocks

Class [HTMLPurifier\_Generator](doxygen__classHTMLPurifier__Generator.md)
:   Refactor interface so that configuration/context is determined upon instantiation, no need for messy generateFromTokens() calls

    Make some of the more internal functions protected, and have unit tests work around that

    Refactor interface so that configuration/context is determined upon instantiation, no need for messy generateFromTokens() calls

    Make some of the more internal functions protected, and have unit tests work around that

Member [HTMLPurifier\_Generator::escape](doxygen__classHTMLPurifier__Generator.md#a99506b7d90f173bba8a26ddc0ced9657) ($string, $quote=null)
:   This really ought to be protected, but until we have a facility for properly generating HTML here w/o using tokens, it stays public.

    This really ought to be protected, but until we have a facility for properly generating HTML here w/o using tokens, it stays public.

Member [HTMLPurifier\_HTMLDefinition::parseTinyMCEAllowedList](doxygen__classHTMLPurifier__HTMLDefinition.md#ac01c1b5601e259814b907c4d25680712) ($list)
:   Give this its own class, probably static interface

    Give this its own class, probably static interface

Class [HTMLPurifier\_HTMLModule](doxygen__classHTMLPurifier__HTMLModule.md)
:   Consider making some member functions protected

    Consider making some member functions protected

Class [HTMLPurifier\_HTMLModule\_Tidy](doxygen__classHTMLPurifier__HTMLModule__Tidy.md)
:   Figure out how to protect some of these methods/properties

    Figure out how to protect some of these methods/properties

Member [HTMLPurifier\_HTMLModule\_Tidy::setup](doxygen__classHTMLPurifier__HTMLModule__Tidy.md#a6323f0f69fdfff474a74d06e8f3cd243) ($config)
:   Wildcard matching and error reporting when an added or subtracted fix has no effect.

    Wildcard matching and error reporting when an added or subtracted fix has no effect.

Class [HTMLPurifier\_Injector](doxygen__classHTMLPurifier__Injector.md)
:   Allow injectors to request a re-run on their output. This would help if an operation is recursive.

    Allow injectors to request a re-run on their output. This would help if an operation is recursive.

Class [HTMLPurifier\_Injector\_AutoParagraph](doxygen__classHTMLPurifier__Injector__AutoParagraph.md)
:   Ensure all states are unit tested, including variations as well.

    Make a graph of the flow control for this Injector.

    Ensure all states are unit tested, including variations as well.

    Make a graph of the flow control for this Injector.

Member [HTMLPurifier\_Language::$\_loaded](doxygen__classHTMLPurifier__Language.md#a972e2795bb72936c59aa28d6b893e7e9)
:   Make it private, fix usage in HTMLPurifier\_LanguageTest

    Make it private, fix usage in HTMLPurifier\_LanguageTest

Member [HTMLPurifier\_Language::formatMessage](doxygen__classHTMLPurifier__Language.md#a50e09a143464f808615cf1db550f033c) ($key, $args=array())
:   Implement conditionals? Right now, some messages make reference to line numbers, but those aren't always available

    Implement conditionals? Right now, some messages make reference to line numbers, but those aren't always available

Class [HTMLPurifier\_LanguageFactory](doxygen__classHTMLPurifier__LanguageFactory.md)
:   Serialized cache for languages

    Serialized cache for languages

Member [HTMLPurifier\_Lexer::extractBody](doxygen__classHTMLPurifier__Lexer.md#abdcd2d9949060713eb7b02d65803dfce) ($html)
:   Consider making protected

    Consider making protected

Member [HTMLPurifier\_Lexer::normalize](doxygen__classHTMLPurifier__Lexer.md#a01c2ce000fe0856a77532d749c3c7160) ($html, $config, $context)
:   Consider making protected

    Consider making protected

Class [HTMLPurifier\_Lexer\_DirectLex](doxygen__classHTMLPurifier__Lexer__DirectLex.md)
:   Reread XML spec and document differences.

    Reread XML spec and document differences.

Class [HTMLPurifier\_Printer\_ConfigForm](doxygen__classHTMLPurifier__Printer__ConfigForm.md)
:   Rewrite to use Interchange objects

Member [HTMLPurifier\_Printer\_HTMLDefinition::listifyObjectList](doxygen__classHTMLPurifier__Printer__HTMLDefinition.md#a6341eb4dcfa1a0539b1fdc50e52ae772) ($array)
:   Also add information about internal state

Class [HTMLPurifier\_Strategy\_FixNesting](doxygen__classHTMLPurifier__Strategy__FixNesting.md)
:   Enable nodes to be bubbled out of the structure.

    Enable nodes to be bubbled out of the structure.

Class [HTMLPurifier\_TokenFactory](doxygen__classHTMLPurifier__TokenFactory.md)
:   Port DirectLex to use this

    Port DirectLex to use this

Class [HTMLPurifier\_URIScheme\_mailto](doxygen__classHTMLPurifier__URIScheme__mailto.md)
:   Validate the email address

    Filter allowed query parameters

    Validate the email address

    Filter allowed query parameters

- Generated on Wed Jan 18 2012 22:58:18 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
