# HTMLPurifier: Class List

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/annotated.html

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

Class List

Here are the classes, structs, unions and interfaces with brief descriptions:

|  |  |
| --- | --- |
| [ConfigDoc\_HTMLXSLTProcessor](doxygen__classConfigDoc__HTMLXSLTProcessor.md) | Decorator/extender XSLT processor specifically for HTML documents |
| [FSTools](doxygen__classFSTools.md) | Filesystem tools not provided by default; can recursively create, copy and delete folders |
| [FSTools\_File](doxygen__classFSTools__File.md) | Represents a file in the filesystem |
| [HTML5](doxygen__classHTML5.md) |  |
| [HTML5TreeConstructer](doxygen__classHTML5TreeConstructer.md) |  |
| [HTMLPurifier](doxygen__classHTMLPurifier.md) | Facade that coordinates HTML Purifier's subsystems in order to purify HTML |
| [HTMLPurifier\_AttrCollections](doxygen__classHTMLPurifier__AttrCollections.md) | Defines common attribute collections that modules reference |
| [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md) | Base class for all validating attribute definitions |
| [HTMLPurifier\_AttrDef\_Clone](doxygen__classHTMLPurifier__AttrDef__Clone.md) | Dummy AttrDef that mimics another AttrDef, BUT it generates clones with make |
| [HTMLPurifier\_AttrDef\_CSS](doxygen__classHTMLPurifier__AttrDef__CSS.md) | Validates the HTML attribute style, otherwise known as CSS |
| [HTMLPurifier\_AttrDef\_CSS\_AlphaValue](doxygen__classHTMLPurifier__AttrDef__CSS__AlphaValue.md) |  |
| [HTMLPurifier\_AttrDef\_CSS\_Background](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md) | Validates shorthand CSS property background |
| [HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md) | Validates the value of background-position |
| [HTMLPurifier\_AttrDef\_CSS\_Border](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md) | Validates the border property as defined by CSS |
| [HTMLPurifier\_AttrDef\_CSS\_Color](doxygen__classHTMLPurifier__AttrDef__CSS__Color.md) | Validates Color as defined by CSS |
| [HTMLPurifier\_AttrDef\_CSS\_Composite](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md) | Allows multiple validators to attempt to validate attribute |
| [HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md) | Decorator which enables CSS properties to be disabled for specific elements |
| [HTMLPurifier\_AttrDef\_CSS\_Filter](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md) | Microsoft's proprietary filter: CSS property |
| [HTMLPurifier\_AttrDef\_CSS\_Font](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md) | Validates shorthand CSS property font |
| [HTMLPurifier\_AttrDef\_CSS\_FontFamily](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md) | Validates a font family list according to CSS spec |
| [HTMLPurifier\_AttrDef\_CSS\_Ident](doxygen__classHTMLPurifier__AttrDef__CSS__Ident.md) | Validates based on {ident} CSS grammar production |
| [HTMLPurifier\_AttrDef\_CSS\_ImportantDecorator](doxygen__classHTMLPurifier__AttrDef__CSS__ImportantDecorator.md) | Decorator which enables !important to be used in CSS values |
| [HTMLPurifier\_AttrDef\_CSS\_Length](doxygen__classHTMLPurifier__AttrDef__CSS__Length.md) | Represents a Length as defined by CSS |
| [HTMLPurifier\_AttrDef\_CSS\_ListStyle](doxygen__classHTMLPurifier__AttrDef__CSS__ListStyle.md) | Validates shorthand CSS property list-style |
| [HTMLPurifier\_AttrDef\_CSS\_Multiple](doxygen__classHTMLPurifier__AttrDef__CSS__Multiple.md) | Framework class for strings that involve multiple values |
| [HTMLPurifier\_AttrDef\_CSS\_Number](doxygen__classHTMLPurifier__AttrDef__CSS__Number.md) | Validates a number as defined by the CSS spec |
| [HTMLPurifier\_AttrDef\_CSS\_Percentage](doxygen__classHTMLPurifier__AttrDef__CSS__Percentage.md) | Validates a Percentage as defined by the CSS spec |
| [HTMLPurifier\_AttrDef\_CSS\_TextDecoration](doxygen__classHTMLPurifier__AttrDef__CSS__TextDecoration.md) | Validates the value for the CSS property text-decoration |
| [HTMLPurifier\_AttrDef\_CSS\_URI](doxygen__classHTMLPurifier__AttrDef__CSS__URI.md) | Validates a URI in CSS syntax, which uses url('http://example.com') |
| [HTMLPurifier\_AttrDef\_Enum](doxygen__classHTMLPurifier__AttrDef__Enum.md) | Validates a keyword against a list of valid values |
| [HTMLPurifier\_AttrDef\_HTML\_Bool](doxygen__classHTMLPurifier__AttrDef__HTML__Bool.md) | Validates a boolean attribute |
| [HTMLPurifier\_AttrDef\_HTML\_Class](doxygen__classHTMLPurifier__AttrDef__HTML__Class.md) | Implements special behavior for class attribute (normally NMTOKENS) |
| [HTMLPurifier\_AttrDef\_HTML\_Color](doxygen__classHTMLPurifier__AttrDef__HTML__Color.md) | Validates a color according to the HTML spec |
| [HTMLPurifier\_AttrDef\_HTML\_FrameTarget](doxygen__classHTMLPurifier__AttrDef__HTML__FrameTarget.md) | Special-case enum attribute definition that lazy loads allowed frame targets |
| [HTMLPurifier\_AttrDef\_HTML\_ID](doxygen__classHTMLPurifier__AttrDef__HTML__ID.md) | Validates the HTML attribute ID |
| [HTMLPurifier\_AttrDef\_HTML\_Length](doxygen__classHTMLPurifier__AttrDef__HTML__Length.md) | Validates the HTML type length (not to be confused with CSS's length) |
| [HTMLPurifier\_AttrDef\_HTML\_LinkTypes](doxygen__classHTMLPurifier__AttrDef__HTML__LinkTypes.md) | Validates a rel/rev link attribute against a directive of allowed values |
| [HTMLPurifier\_AttrDef\_HTML\_MultiLength](doxygen__classHTMLPurifier__AttrDef__HTML__MultiLength.md) | Validates a MultiLength as defined by the HTML spec |
| [HTMLPurifier\_AttrDef\_HTML\_Nmtokens](doxygen__classHTMLPurifier__AttrDef__HTML__Nmtokens.md) | Validates contents based on NMTOKENS attribute type |
| [HTMLPurifier\_AttrDef\_HTML\_Pixels](doxygen__classHTMLPurifier__AttrDef__HTML__Pixels.md) | Validates an integer representation of pixels according to the HTML spec |
| [HTMLPurifier\_AttrDef\_Integer](doxygen__classHTMLPurifier__AttrDef__Integer.md) | Validates an integer |
| [HTMLPurifier\_AttrDef\_Lang](doxygen__classHTMLPurifier__AttrDef__Lang.md) | Validates the HTML attribute lang, effectively a language code |
| [HTMLPurifier\_AttrDef\_Switch](doxygen__classHTMLPurifier__AttrDef__Switch.md) | Decorator that, depending on a token, switches between two definitions |
| [HTMLPurifier\_AttrDef\_Text](doxygen__classHTMLPurifier__AttrDef__Text.md) | Validates arbitrary text according to the HTML spec |
| [HTMLPurifier\_AttrDef\_URI](doxygen__classHTMLPurifier__AttrDef__URI.md) | Validates a URI as defined by RFC 3986 |
| [HTMLPurifier\_AttrDef\_URI\_Email](doxygen__classHTMLPurifier__AttrDef__URI__Email.md) |  |
| [HTMLPurifier\_AttrDef\_URI\_Email\_SimpleCheck](doxygen__classHTMLPurifier__AttrDef__URI__Email__SimpleCheck.md) | Primitive email validation class based on the regexp found at <http://www.regular-expressions.info/email.html> |
| [HTMLPurifier\_AttrDef\_URI\_Host](doxygen__classHTMLPurifier__AttrDef__URI__Host.md) | Validates a host according to the IPv4, IPv6 and DNS (future) specifications |
| [HTMLPurifier\_AttrDef\_URI\_IPv4](doxygen__classHTMLPurifier__AttrDef__URI__IPv4.md) | Validates an IPv4 address |
| [HTMLPurifier\_AttrDef\_URI\_IPv6](doxygen__classHTMLPurifier__AttrDef__URI__IPv6.md) | Validates an IPv6 address |
| [HTMLPurifier\_AttrTransform](doxygen__classHTMLPurifier__AttrTransform.md) | Processes an entire attribute array for corrections needing multiple values |
| [HTMLPurifier\_AttrTransform\_Background](doxygen__classHTMLPurifier__AttrTransform__Background.md) | Pre-transform that changes proprietary background attribute to CSS |
| [HTMLPurifier\_AttrTransform\_BdoDir](doxygen__classHTMLPurifier__AttrTransform__BdoDir.md) | Post-trasnform that ensures that bdo tags have the dir attribute set |
| [HTMLPurifier\_AttrTransform\_BgColor](doxygen__classHTMLPurifier__AttrTransform__BgColor.md) | Pre-transform that changes deprecated bgcolor attribute to CSS |
| [HTMLPurifier\_AttrTransform\_BoolToCSS](doxygen__classHTMLPurifier__AttrTransform__BoolToCSS.md) | Pre-transform that changes converts a boolean attribute to fixed CSS |
| [HTMLPurifier\_AttrTransform\_Border](doxygen__classHTMLPurifier__AttrTransform__Border.md) | Pre-transform that changes deprecated border attribute to CSS |
| [HTMLPurifier\_AttrTransform\_EnumToCSS](doxygen__classHTMLPurifier__AttrTransform__EnumToCSS.md) | Generic pre-transform that converts an attribute with a fixed number of values (enumerated) to CSS |
| [HTMLPurifier\_AttrTransform\_ImgRequired](doxygen__classHTMLPurifier__AttrTransform__ImgRequired.md) | Transform that supplies default values for the src and alt attributes in img tags, as well as prevents the img tag from being removed because of a missing alt tag |
| [HTMLPurifier\_AttrTransform\_ImgSpace](doxygen__classHTMLPurifier__AttrTransform__ImgSpace.md) | Pre-transform that changes deprecated hspace and vspace attributes to CSS |
| [HTMLPurifier\_AttrTransform\_Input](doxygen__classHTMLPurifier__AttrTransform__Input.md) | Performs miscellaneous cross attribute validation and filtering for input elements |
| [HTMLPurifier\_AttrTransform\_Lang](doxygen__classHTMLPurifier__AttrTransform__Lang.md) | Post-transform that copies lang's value to xml:lang (and vice-versa) |
| [HTMLPurifier\_AttrTransform\_Length](doxygen__classHTMLPurifier__AttrTransform__Length.md) | Class for handling width/height length attribute transformations to CSS |
| [HTMLPurifier\_AttrTransform\_Name](doxygen__classHTMLPurifier__AttrTransform__Name.md) | Pre-transform that changes deprecated name attribute to ID if necessary |
| [HTMLPurifier\_AttrTransform\_NameSync](doxygen__classHTMLPurifier__AttrTransform__NameSync.md) | Post-transform that performs validation to the name attribute; if it is present with an equivalent id attribute, it is passed through; otherwise validation is performed |
| [HTMLPurifier\_AttrTransform\_Nofollow](doxygen__classHTMLPurifier__AttrTransform__Nofollow.md) | Adds rel="nofollow" to all outbound links |
| [HTMLPurifier\_AttrTransform\_SafeEmbed](doxygen__classHTMLPurifier__AttrTransform__SafeEmbed.md) |  |
| [HTMLPurifier\_AttrTransform\_SafeObject](doxygen__classHTMLPurifier__AttrTransform__SafeObject.md) | Writes default type for all objects |
| [HTMLPurifier\_AttrTransform\_SafeParam](doxygen__classHTMLPurifier__AttrTransform__SafeParam.md) | Validates name/value pairs in param tags to be used in safe objects |
| [HTMLPurifier\_AttrTransform\_ScriptRequired](doxygen__classHTMLPurifier__AttrTransform__ScriptRequired.md) | Implements required attribute stipulation for <script> |
| [HTMLPurifier\_AttrTransform\_TargetBlank](doxygen__classHTMLPurifier__AttrTransform__TargetBlank.md) | Adds target="blank" to all outbound links |
| [HTMLPurifier\_AttrTransform\_Textarea](doxygen__classHTMLPurifier__AttrTransform__Textarea.md) | Sets height/width defaults for <textarea> |
| [HTMLPurifier\_AttrTypes](doxygen__classHTMLPurifier__AttrTypes.md) | Provides lookup array of attribute types to [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md "Base class for all validating attribute definitions.") objects |
| [HTMLPurifier\_AttrValidator](doxygen__classHTMLPurifier__AttrValidator.md) | Validates the attributes of a token |
| [HTMLPurifier\_Bootstrap](doxygen__classHTMLPurifier__Bootstrap.md) | Bootstrap class that contains meta-functionality for HTML Purifier such as the autoload function |
| [HTMLPurifier\_ChildDef](doxygen__classHTMLPurifier__ChildDef.md) | Defines allowed child nodes and validates tokens against it |
| [HTMLPurifier\_ChildDef\_Chameleon](doxygen__classHTMLPurifier__ChildDef__Chameleon.md) | Definition that uses different definitions depending on context |
| [HTMLPurifier\_ChildDef\_Custom](doxygen__classHTMLPurifier__ChildDef__Custom.md) | Custom validation class, accepts DTD child definitions |
| [HTMLPurifier\_ChildDef\_Empty](doxygen__classHTMLPurifier__ChildDef__Empty.md) | Definition that disallows all elements |
| [HTMLPurifier\_ChildDef\_List](doxygen__classHTMLPurifier__ChildDef__List.md) | Definition for list containers ul and ol |
| [HTMLPurifier\_ChildDef\_Optional](doxygen__classHTMLPurifier__ChildDef__Optional.md) | Definition that allows a set of elements, and allows no children |
| [HTMLPurifier\_ChildDef\_Required](doxygen__classHTMLPurifier__ChildDef__Required.md) | Definition that allows a set of elements, but disallows empty children |
| [HTMLPurifier\_ChildDef\_StrictBlockquote](doxygen__classHTMLPurifier__ChildDef__StrictBlockquote.md) | Takes the contents of blockquote when in strict and reformats for validation |
| [HTMLPurifier\_ChildDef\_Table](doxygen__classHTMLPurifier__ChildDef__Table.md) | Definition for tables |
| [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md) | Configuration object that triggers customizable behavior |
| [HTMLPurifier\_ConfigSchema](doxygen__classHTMLPurifier__ConfigSchema.md) | Configuration definition, defines directives and their defaults |
| [HTMLPurifier\_ConfigSchema\_Builder\_ConfigSchema](doxygen__classHTMLPurifier__ConfigSchema__Builder__ConfigSchema.md) | Converts [HTMLPurifier\_ConfigSchema\_Interchange](doxygen__classHTMLPurifier__ConfigSchema__Interchange.md "Generic schema interchange format that can be converted to a runtime representation (HTMLPurifier_Con...") to our runtime representation used to perform checks on user configuration |
| [HTMLPurifier\_ConfigSchema\_Builder\_Xml](doxygen__classHTMLPurifier__ConfigSchema__Builder__Xml.md) | Converts [HTMLPurifier\_ConfigSchema\_Interchange](doxygen__classHTMLPurifier__ConfigSchema__Interchange.md "Generic schema interchange format that can be converted to a runtime representation (HTMLPurifier_Con...") to an XML format, which can be further processed to generate documentation |
| [HTMLPurifier\_ConfigSchema\_Exception](doxygen__classHTMLPurifier__ConfigSchema__Exception.md) | Exceptions related to configuration schema |
| [HTMLPurifier\_ConfigSchema\_Interchange](doxygen__classHTMLPurifier__ConfigSchema__Interchange.md) | Generic schema interchange format that can be converted to a runtime representation ([HTMLPurifier\_ConfigSchema](doxygen__classHTMLPurifier__ConfigSchema.md "Configuration definition, defines directives and their defaults.")) or HTML documentation |
| [HTMLPurifier\_ConfigSchema\_Interchange\_Directive](doxygen__classHTMLPurifier__ConfigSchema__Interchange__Directive.md) | Interchange component class describing configuration directives |
| [HTMLPurifier\_ConfigSchema\_Interchange\_Id](doxygen__classHTMLPurifier__ConfigSchema__Interchange__Id.md) | Represents a directive ID in the interchange format |
| [HTMLPurifier\_ConfigSchema\_InterchangeBuilder](doxygen__classHTMLPurifier__ConfigSchema__InterchangeBuilder.md) |  |
| [HTMLPurifier\_ConfigSchema\_Validator](doxygen__classHTMLPurifier__ConfigSchema__Validator.md) | Performs validations on [HTMLPurifier\_ConfigSchema\_Interchange](doxygen__classHTMLPurifier__ConfigSchema__Interchange.md "Generic schema interchange format that can be converted to a runtime representation (HTMLPurifier_Con...") |
| [HTMLPurifier\_ConfigSchema\_ValidatorAtom](doxygen__classHTMLPurifier__ConfigSchema__ValidatorAtom.md) | Fluent interface for validating the contents of member variables |
| [HTMLPurifier\_ContentSets](doxygen__classHTMLPurifier__ContentSets.md) |  |
| [HTMLPurifier\_Context](doxygen__classHTMLPurifier__Context.md) | Registry object that contains information about the current context |
| [HTMLPurifier\_CSSDefinition](doxygen__classHTMLPurifier__CSSDefinition.md) | Defines allowed CSS attributes and what their values are |
| [HTMLPurifier\_Definition](doxygen__classHTMLPurifier__Definition.md) | Super-class for definition datatype objects, implements serialization functions for the class |
| [HTMLPurifier\_DefinitionCache](doxygen__classHTMLPurifier__DefinitionCache.md) | Abstract class representing Definition cache managers that implements useful common methods and is a factory |
| [HTMLPurifier\_DefinitionCache\_Decorator](doxygen__classHTMLPurifier__DefinitionCache__Decorator.md) |  |
| [HTMLPurifier\_DefinitionCache\_Decorator\_Cleanup](doxygen__classHTMLPurifier__DefinitionCache__Decorator__Cleanup.md) | Definition cache decorator class that cleans up the cache whenever there is a cache miss |
| [HTMLPurifier\_DefinitionCache\_Decorator\_Memory](doxygen__classHTMLPurifier__DefinitionCache__Decorator__Memory.md) | Definition cache decorator class that saves all cache retrievals to PHP's memory; good for unit tests or circumstances where there are lots of configuration objects floating around |
| [HTMLPurifier\_DefinitionCache\_Null](doxygen__classHTMLPurifier__DefinitionCache__Null.md) | Null cache object to use when no caching is on |
| [HTMLPurifier\_DefinitionCache\_Serializer](doxygen__classHTMLPurifier__DefinitionCache__Serializer.md) |  |
| [HTMLPurifier\_DefinitionCacheFactory](doxygen__classHTMLPurifier__DefinitionCacheFactory.md) | Responsible for creating definition caches |
| [HTMLPurifier\_Doctype](doxygen__classHTMLPurifier__Doctype.md) | Represents a document type, contains information on which modules need to be loaded |
| [HTMLPurifier\_DoctypeRegistry](doxygen__classHTMLPurifier__DoctypeRegistry.md) |  |
| [HTMLPurifier\_ElementDef](doxygen__classHTMLPurifier__ElementDef.md) | Structure that stores an HTML element definition |
| [HTMLPurifier\_Encoder](doxygen__classHTMLPurifier__Encoder.md) | A UTF-8 specific character encoder that handles cleaning and transforming |
| [HTMLPurifier\_EntityLookup](doxygen__classHTMLPurifier__EntityLookup.md) | Object that provides entity lookup table from entity name to character |
| [HTMLPurifier\_EntityParser](doxygen__classHTMLPurifier__EntityParser.md) | Handles referencing and derefencing character entities |
| [HTMLPurifier\_ErrorCollector](doxygen__classHTMLPurifier__ErrorCollector.md) | Error collection class that enables HTML Purifier to report HTML problems back to the user |
| [HTMLPurifier\_ErrorStruct](doxygen__classHTMLPurifier__ErrorStruct.md) | Records errors for particular segments of an HTML document such as tokens, attributes or CSS properties |
| [HTMLPurifier\_Exception](doxygen__classHTMLPurifier__Exception.md) | Global exception class for HTML Purifier; any exceptions we throw are from here |
| [HTMLPurifier\_Filter](doxygen__classHTMLPurifier__Filter.md) | Represents a pre or post processing filter on HTML Purifier's output |
| [HTMLPurifier\_Filter\_ExtractStyleBlocks](doxygen__classHTMLPurifier__Filter__ExtractStyleBlocks.md) | This filter extracts <style> blocks from input HTML, cleans them up using CSSTidy, and then places them in $purifier->context->get('StyleBlocks') so they can be used elsewhere in the document |
| [HTMLPurifier\_Filter\_YouTube](doxygen__classHTMLPurifier__Filter__YouTube.md) |  |
| [HTMLPurifier\_Generator](doxygen__classHTMLPurifier__Generator.md) | Generates HTML from tokens |
| [HTMLPurifier\_HTMLDefinition](doxygen__classHTMLPurifier__HTMLDefinition.md) | Definition of the purified HTML that describes allowed children, attributes, and many other things |
| [HTMLPurifier\_HTMLModule](doxygen__classHTMLPurifier__HTMLModule.md) | Represents an XHTML 1.1 module, with information on elements, tags and attributes |
| [HTMLPurifier\_HTMLModule\_Bdo](doxygen__classHTMLPurifier__HTMLModule__Bdo.md) | XHTML 1.1 Bi-directional Text Module, defines elements that declare directionality of content |
| [HTMLPurifier\_HTMLModule\_CommonAttributes](doxygen__classHTMLPurifier__HTMLModule__CommonAttributes.md) |  |
| [HTMLPurifier\_HTMLModule\_Edit](doxygen__classHTMLPurifier__HTMLModule__Edit.md) | XHTML 1.1 Edit Module, defines editing-related elements |
| [HTMLPurifier\_HTMLModule\_Forms](doxygen__classHTMLPurifier__HTMLModule__Forms.md) | XHTML 1.1 Forms module, defines all form-related elements found in HTML 4 |
| [HTMLPurifier\_HTMLModule\_Hypertext](doxygen__classHTMLPurifier__HTMLModule__Hypertext.md) | XHTML 1.1 Hypertext Module, defines hypertext links |
| [HTMLPurifier\_HTMLModule\_Iframe](doxygen__classHTMLPurifier__HTMLModule__Iframe.md) | XHTML 1.1 Iframe Module provides inline frames |
| [HTMLPurifier\_HTMLModule\_Image](doxygen__classHTMLPurifier__HTMLModule__Image.md) | XHTML 1.1 Image Module provides basic image embedding |
| [HTMLPurifier\_HTMLModule\_Legacy](doxygen__classHTMLPurifier__HTMLModule__Legacy.md) | XHTML 1.1 Legacy module defines elements that were previously deprecated |
| [HTMLPurifier\_HTMLModule\_List](doxygen__classHTMLPurifier__HTMLModule__List.md) | XHTML 1.1 List Module, defines list-oriented elements |
| [HTMLPurifier\_HTMLModule\_Name](doxygen__classHTMLPurifier__HTMLModule__Name.md) |  |
| [HTMLPurifier\_HTMLModule\_Nofollow](doxygen__classHTMLPurifier__HTMLModule__Nofollow.md) | Module adds the nofollow attribute transformation to a tags |
| [HTMLPurifier\_HTMLModule\_NonXMLCommonAttributes](doxygen__classHTMLPurifier__HTMLModule__NonXMLCommonAttributes.md) |  |
| [HTMLPurifier\_HTMLModule\_Object](doxygen__classHTMLPurifier__HTMLModule__Object.md) | XHTML 1.1 Object Module, defines elements for generic object inclusion |
| [HTMLPurifier\_HTMLModule\_Presentation](doxygen__classHTMLPurifier__HTMLModule__Presentation.md) | XHTML 1.1 Presentation Module, defines simple presentation-related markup |
| [HTMLPurifier\_HTMLModule\_Proprietary](doxygen__classHTMLPurifier__HTMLModule__Proprietary.md) | Module defines proprietary tags and attributes in HTML |
| [HTMLPurifier\_HTMLModule\_Ruby](doxygen__classHTMLPurifier__HTMLModule__Ruby.md) | XHTML 1.1 Ruby Annotation Module, defines elements that indicate short runs of text alongside base text for annotation or pronounciation |
| [HTMLPurifier\_HTMLModule\_SafeEmbed](doxygen__classHTMLPurifier__HTMLModule__SafeEmbed.md) | A "safe" embed module |
| [HTMLPurifier\_HTMLModule\_SafeObject](doxygen__classHTMLPurifier__HTMLModule__SafeObject.md) | A "safe" object module |
| [HTMLPurifier\_HTMLModule\_Scripting](doxygen__classHTMLPurifier__HTMLModule__Scripting.md) | XHTML 1.1 Scripting module, defines elements that are used to contain information pertaining to executable scripts or the lack of support for executable scripts |
| [HTMLPurifier\_HTMLModule\_StyleAttribute](doxygen__classHTMLPurifier__HTMLModule__StyleAttribute.md) | XHTML 1.1 Edit Module, defines editing-related elements |
| [HTMLPurifier\_HTMLModule\_Tables](doxygen__classHTMLPurifier__HTMLModule__Tables.md) | XHTML 1.1 Tables Module, fully defines accessible table elements |
| [HTMLPurifier\_HTMLModule\_Target](doxygen__classHTMLPurifier__HTMLModule__Target.md) | XHTML 1.1 Target Module, defines target attribute in link elements |
| [HTMLPurifier\_HTMLModule\_TargetBlank](doxygen__classHTMLPurifier__HTMLModule__TargetBlank.md) | Module adds the target=blank attribute transformation to a tags |
| [HTMLPurifier\_HTMLModule\_Text](doxygen__classHTMLPurifier__HTMLModule__Text.md) | XHTML 1.1 Text Module, defines basic text containers |
| [HTMLPurifier\_HTMLModule\_Tidy](doxygen__classHTMLPurifier__HTMLModule__Tidy.md) | Abstract class for a set of proprietary modules that clean up (tidy) poorly written HTML |
| [HTMLPurifier\_HTMLModule\_Tidy\_Name](doxygen__classHTMLPurifier__HTMLModule__Tidy__Name.md) | Name is deprecated, but allowed in strict doctypes, so onl |
| [HTMLPurifier\_HTMLModule\_Tidy\_Proprietary](doxygen__classHTMLPurifier__HTMLModule__Tidy__Proprietary.md) |  |
| [HTMLPurifier\_HTMLModule\_Tidy\_Strict](doxygen__classHTMLPurifier__HTMLModule__Tidy__Strict.md) |  |
| [HTMLPurifier\_HTMLModule\_Tidy\_Transitional](doxygen__classHTMLPurifier__HTMLModule__Tidy__Transitional.md) |  |
| [HTMLPurifier\_HTMLModule\_Tidy\_XHTML](doxygen__classHTMLPurifier__HTMLModule__Tidy__XHTML.md) |  |
| [HTMLPurifier\_HTMLModule\_Tidy\_XHTMLAndHTML4](doxygen__classHTMLPurifier__HTMLModule__Tidy__XHTMLAndHTML4.md) |  |
| [HTMLPurifier\_HTMLModule\_XMLCommonAttributes](doxygen__classHTMLPurifier__HTMLModule__XMLCommonAttributes.md) |  |
| [HTMLPurifier\_HTMLModuleManager](doxygen__classHTMLPurifier__HTMLModuleManager.md) |  |
| [HTMLPurifier\_IDAccumulator](doxygen__classHTMLPurifier__IDAccumulator.md) | Component of HTMLPurifier\_AttrContext that accumulates IDs to prevent dupes |
| [HTMLPurifier\_Injector](doxygen__classHTMLPurifier__Injector.md) | Injects tokens into the document while parsing for well-formedness |
| [HTMLPurifier\_Injector\_AutoParagraph](doxygen__classHTMLPurifier__Injector__AutoParagraph.md) | Injector that auto paragraphs text in the root node based on double-spacing |
| [HTMLPurifier\_Injector\_DisplayLinkURI](doxygen__classHTMLPurifier__Injector__DisplayLinkURI.md) | Injector that displays the URL of an anchor instead of linking to it, in addition to showing the text of the link |
| [HTMLPurifier\_Injector\_Linkify](doxygen__classHTMLPurifier__Injector__Linkify.md) | Injector that converts http, https and ftp text URLs to actual links |
| [HTMLPurifier\_Injector\_PurifierLinkify](doxygen__classHTMLPurifier__Injector__PurifierLinkify.md) | Injector that converts configuration directive syntax Namespace.Directive to links |
| [HTMLPurifier\_Injector\_RemoveEmpty](doxygen__classHTMLPurifier__Injector__RemoveEmpty.md) |  |
| [HTMLPurifier\_Injector\_RemoveSpansWithoutAttributes](doxygen__classHTMLPurifier__Injector__RemoveSpansWithoutAttributes.md) | Injector that removes spans with no attributes |
| [HTMLPurifier\_Injector\_SafeObject](doxygen__classHTMLPurifier__Injector__SafeObject.md) | Adds important param elements to inside of object in order to make things safe |
| [HTMLPurifier\_Language](doxygen__classHTMLPurifier__Language.md) | Represents a language and defines localizable string formatting and other functions, as well as the localized messages for HTML Purifier |
| [HTMLPurifier\_Language\_en\_x\_test](doxygen__classHTMLPurifier__Language__en__x__test.md) |  |
| [HTMLPurifier\_LanguageFactory](doxygen__classHTMLPurifier__LanguageFactory.md) | Class responsible for generating [HTMLPurifier\_Language](doxygen__classHTMLPurifier__Language.md "Represents a language and defines localizable string formatting and other functions, as well as the localized messages for HTML Purifier.") objects, managing caching and fallbacks |
| [HTMLPurifier\_Length](doxygen__classHTMLPurifier__Length.md) | Represents a measurable length, with a string numeric magnitude and a unit |
| [HTMLPurifier\_Lexer](doxygen__classHTMLPurifier__Lexer.md) | Forgivingly lexes HTML (SGML-style) markup into tokens |
| [HTMLPurifier\_Lexer\_DirectLex](doxygen__classHTMLPurifier__Lexer__DirectLex.md) | Our in-house implementation of a parser |
| [HTMLPurifier\_Lexer\_DOMLex](doxygen__classHTMLPurifier__Lexer__DOMLex.md) | Parser that uses PHP 5's DOM extension (part of the core) |
| [HTMLPurifier\_Lexer\_PH5P](doxygen__classHTMLPurifier__Lexer__PH5P.md) | Experimental HTML5-based parser using Jeroen van der Meer's PH5P library |
| [HTMLPurifier\_PercentEncoder](doxygen__classHTMLPurifier__PercentEncoder.md) | Class that handles operations involving percent-encoding in URIs |
| [HTMLPurifier\_Printer](doxygen__classHTMLPurifier__Printer.md) |  |
| [HTMLPurifier\_Printer\_ConfigForm](doxygen__classHTMLPurifier__Printer__ConfigForm.md) |  |
| [HTMLPurifier\_Printer\_ConfigForm\_bool](doxygen__classHTMLPurifier__Printer__ConfigForm__bool.md) | Bool form field printer |
| [HTMLPurifier\_Printer\_ConfigForm\_default](doxygen__classHTMLPurifier__Printer__ConfigForm__default.md) | Swiss-army knife configuration form field printer |
| [HTMLPurifier\_Printer\_ConfigForm\_NullDecorator](doxygen__classHTMLPurifier__Printer__ConfigForm__NullDecorator.md) | Printer decorator for directives that accept null |
| [HTMLPurifier\_Printer\_CSSDefinition](doxygen__classHTMLPurifier__Printer__CSSDefinition.md) |  |
| [HTMLPurifier\_Printer\_HTMLDefinition](doxygen__classHTMLPurifier__Printer__HTMLDefinition.md) |  |
| [HTMLPurifier\_PropertyList](doxygen__classHTMLPurifier__PropertyList.md) | Generic property list implementation |
| [HTMLPurifier\_PropertyListIterator](doxygen__classHTMLPurifier__PropertyListIterator.md) | Property list iterator |
| [HTMLPurifier\_Strategy](doxygen__classHTMLPurifier__Strategy.md) | Supertype for classes that define a strategy for modifying/purifying tokens |
| [HTMLPurifier\_Strategy\_Composite](doxygen__classHTMLPurifier__Strategy__Composite.md) | Composite strategy that runs multiple strategies on tokens |
| [HTMLPurifier\_Strategy\_Core](doxygen__classHTMLPurifier__Strategy__Core.md) | Core strategy composed of the big four strategies |
| [HTMLPurifier\_Strategy\_FixNesting](doxygen__classHTMLPurifier__Strategy__FixNesting.md) | Takes a well formed list of tokens and fixes their nesting |
| [HTMLPurifier\_Strategy\_MakeWellFormed](doxygen__classHTMLPurifier__Strategy__MakeWellFormed.md) | Takes tokens makes them well-formed (balance end tags, etc.) |
| [HTMLPurifier\_Strategy\_RemoveForeignElements](doxygen__classHTMLPurifier__Strategy__RemoveForeignElements.md) | Removes all unrecognized tags from the list of tokens |
| [HTMLPurifier\_Strategy\_ValidateAttributes](doxygen__classHTMLPurifier__Strategy__ValidateAttributes.md) | Validate all attributes in the tokens |
| [HTMLPurifier\_StringHash](doxygen__classHTMLPurifier__StringHash.md) | This is in almost every respect equivalent to an array except that it keeps track of which keys were accessed |
| [HTMLPurifier\_StringHashParser](doxygen__classHTMLPurifier__StringHashParser.md) | Parses string hash files |
| [HTMLPurifier\_TagTransform](doxygen__classHTMLPurifier__TagTransform.md) | Defines a mutation of an obsolete tag into a valid tag |
| [HTMLPurifier\_TagTransform\_Font](doxygen__classHTMLPurifier__TagTransform__Font.md) | Transforms FONT tags to the proper form (SPAN with CSS styling) |
| [HTMLPurifier\_TagTransform\_Simple](doxygen__classHTMLPurifier__TagTransform__Simple.md) | Simple transformation, just change tag name to something else, and possibly add some styling |
| [HTMLPurifier\_Token](doxygen__classHTMLPurifier__Token.md) | Abstract base token class that all others inherit from |
| [HTMLPurifier\_Token\_Comment](doxygen__classHTMLPurifier__Token__Comment.md) | Concrete comment token class |
| [HTMLPurifier\_Token\_Empty](doxygen__classHTMLPurifier__Token__Empty.md) | Concrete empty token class |
| [HTMLPurifier\_Token\_End](doxygen__classHTMLPurifier__Token__End.md) | Concrete end token class |
| [HTMLPurifier\_Token\_Start](doxygen__classHTMLPurifier__Token__Start.md) | Concrete start token class |
| [HTMLPurifier\_Token\_Tag](doxygen__classHTMLPurifier__Token__Tag.md) | Abstract class of a tag token (start, end or empty), and its behavior |
| [HTMLPurifier\_Token\_Text](doxygen__classHTMLPurifier__Token__Text.md) | Concrete text token class |
| [HTMLPurifier\_TokenFactory](doxygen__classHTMLPurifier__TokenFactory.md) | Factory for token generation |
| [HTMLPurifier\_UnitConverter](doxygen__classHTMLPurifier__UnitConverter.md) | Class for converting between different unit-lengths as specified by CSS |
| [HTMLPurifier\_URI](doxygen__classHTMLPurifier__URI.md) | HTML Purifier's internal representation of a URI |
| [HTMLPurifier\_URIDefinition](doxygen__classHTMLPurifier__URIDefinition.md) |  |
| [HTMLPurifier\_URIFilter](doxygen__classHTMLPurifier__URIFilter.md) | Chainable filters for custom URI processing |
| [HTMLPurifier\_URIFilter\_DisableExternal](doxygen__classHTMLPurifier__URIFilter__DisableExternal.md) |  |
| [HTMLPurifier\_URIFilter\_DisableExternalResources](doxygen__classHTMLPurifier__URIFilter__DisableExternalResources.md) |  |
| [HTMLPurifier\_URIFilter\_DisableResources](doxygen__classHTMLPurifier__URIFilter__DisableResources.md) |  |
| [HTMLPurifier\_URIFilter\_HostBlacklist](doxygen__classHTMLPurifier__URIFilter__HostBlacklist.md) |  |
| [HTMLPurifier\_URIFilter\_MakeAbsolute](doxygen__classHTMLPurifier__URIFilter__MakeAbsolute.md) |  |
| [HTMLPurifier\_URIFilter\_Munge](doxygen__classHTMLPurifier__URIFilter__Munge.md) |  |
| [HTMLPurifier\_URIFilter\_SafeIframe](doxygen__classHTMLPurifier__URIFilter__SafeIframe.md) | Implements safety checks for safe iframes |
| [HTMLPurifier\_URIParser](doxygen__classHTMLPurifier__URIParser.md) | Parses a URI into the components and fragment identifier as specified by RFC 3986 |
| [HTMLPurifier\_URIScheme](doxygen__classHTMLPurifier__URIScheme.md) | Validator for the components of a URI for a specific scheme |
| [HTMLPurifier\_URIScheme\_data](doxygen__classHTMLPurifier__URIScheme__data.md) | Implements data: URI for base64 encoded images supported by GD |
| [HTMLPurifier\_URIScheme\_file](doxygen__classHTMLPurifier__URIScheme__file.md) | Validates file as defined by RFC 1630 and RFC 1738 |
| [HTMLPurifier\_URIScheme\_ftp](doxygen__classHTMLPurifier__URIScheme__ftp.md) | Validates ftp (File Transfer Protocol) URIs as defined by generic RFC 1738 |
| [HTMLPurifier\_URIScheme\_http](doxygen__classHTMLPurifier__URIScheme__http.md) | Validates http (HyperText Transfer Protocol) as defined by RFC 2616 |
| [HTMLPurifier\_URIScheme\_https](doxygen__classHTMLPurifier__URIScheme__https.md) | Validates https (Secure HTTP) according to http scheme |
| [HTMLPurifier\_URIScheme\_mailto](doxygen__classHTMLPurifier__URIScheme__mailto.md) | Validates mailto (for E-mail) according to RFC 2368 |
| [HTMLPurifier\_URIScheme\_news](doxygen__classHTMLPurifier__URIScheme__news.md) | Validates news (Usenet) as defined by generic RFC 1738 |
| [HTMLPurifier\_URIScheme\_nntp](doxygen__classHTMLPurifier__URIScheme__nntp.md) | Validates nntp (Network News Transfer Protocol) as defined by generic RFC 1738 |
| [HTMLPurifier\_URISchemeRegistry](doxygen__classHTMLPurifier__URISchemeRegistry.md) | Registry for retrieving specific URI scheme validator objects |
| [HTMLPurifier\_VarParser](doxygen__classHTMLPurifier__VarParser.md) | Parses string representations into their corresponding native PHP variable type |
| [HTMLPurifier\_VarParser\_Flexible](doxygen__classHTMLPurifier__VarParser__Flexible.md) | Performs safe variable parsing based on types which can be used by users |
| [HTMLPurifier\_VarParser\_Native](doxygen__classHTMLPurifier__VarParser__Native.md) | This variable parser uses PHP's internal code engine |
| [HTMLPurifier\_VarParserException](doxygen__classHTMLPurifier__VarParserException.md) | Exception type for [HTMLPurifier\_VarParser](doxygen__classHTMLPurifier__VarParser.md "Parses string representations into their corresponding native PHP variable type.") |
| [HTMLPurifierExtras](doxygen__classHTMLPurifierExtras.md) | Meta-class for HTML Purifier's extra class hierarchies, similar to [HTMLPurifier\_Bootstrap](doxygen__classHTMLPurifier__Bootstrap.md "Bootstrap class that contains meta-functionality for HTML Purifier such as the autoload function...") |

- Generated on Wed Jan 18 2012 22:58:18 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
