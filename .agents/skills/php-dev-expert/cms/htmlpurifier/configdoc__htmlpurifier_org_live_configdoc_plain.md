# Configuration Documentation - HTML Purifier

> **Fonte / Source:** http://htmlpurifier.org/live/configdoc/plain.html

---

HTML Purifier

# Configuration Documentation

## Table of Contents

- [Attr](#Attr)
  - [AllowedClasses](#Attr.AllowedClasses)
  - [AllowedFrameTargets](#Attr.AllowedFrameTargets)
  - [AllowedRel](#Attr.AllowedRel)
  - [AllowedRev](#Attr.AllowedRev)
  - [ClassUseCDATA](#Attr.ClassUseCDATA)
  - [DefaultImageAlt](#Attr.DefaultImageAlt)
  - [DefaultInvalidImage](#Attr.DefaultInvalidImage)
  - [DefaultInvalidImageAlt](#Attr.DefaultInvalidImageAlt)
  - [DefaultTextDir](#Attr.DefaultTextDir)
  - [EnableID](#Attr.EnableID)
  - [ForbiddenClasses](#Attr.ForbiddenClasses)
  - [ID.HTML5](#Attr.ID.HTML5)
  - [IDBlacklist](#Attr.IDBlacklist)
  - [IDBlacklistRegexp](#Attr.IDBlacklistRegexp)
  - [IDPrefix](#Attr.IDPrefix)
  - [IDPrefixLocal](#Attr.IDPrefixLocal)
- [AutoFormat](#AutoFormat)
  - [AutoParagraph](#AutoFormat.AutoParagraph)
  - [Custom](#AutoFormat.Custom)
  - [DisplayLinkURI](#AutoFormat.DisplayLinkURI)
  - [Linkify](#AutoFormat.Linkify)
  - [PurifierLinkify.DocURL](#AutoFormat.PurifierLinkify.DocURL)
  - [PurifierLinkify](#AutoFormat.PurifierLinkify)
  - [RemoveEmpty.Predicate](#AutoFormat.RemoveEmpty.Predicate)
  - [RemoveEmpty.RemoveNbsp.Exceptions](#AutoFormat.RemoveEmpty.RemoveNbsp.Exceptions)
  - [RemoveEmpty.RemoveNbsp](#AutoFormat.RemoveEmpty.RemoveNbsp)
  - [RemoveEmpty](#AutoFormat.RemoveEmpty)
  - [RemoveSpansWithoutAttributes](#AutoFormat.RemoveSpansWithoutAttributes)
- [CSS](#CSS)
  - [AllowDuplicates](#CSS.AllowDuplicates)
  - [AllowImportant](#CSS.AllowImportant)
  - [AllowTricky](#CSS.AllowTricky)
  - [AllowedFonts](#CSS.AllowedFonts)
  - [AllowedProperties](#CSS.AllowedProperties)
  - [DefinitionRev](#CSS.DefinitionRev)
  - [ForbiddenProperties](#CSS.ForbiddenProperties)
  - [MaxImgLength](#CSS.MaxImgLength)
  - [Proprietary](#CSS.Proprietary)
  - [Trusted](#CSS.Trusted)
- [Cache](#Cache)
  - [DefinitionImpl](#Cache.DefinitionImpl)
  - [SerializerPath](#Cache.SerializerPath)
  - [SerializerPermissions](#Cache.SerializerPermissions)
- [Core](#Core)
  - [AggressivelyFixLt](#Core.AggressivelyFixLt)
  - [AggressivelyRemoveScript](#Core.AggressivelyRemoveScript)
  - [AllowHostnameUnderscore](#Core.AllowHostnameUnderscore)
  - [CollectErrors](#Core.CollectErrors)
  - [ColorKeywords](#Core.ColorKeywords)
  - [ConvertDocumentToFragment](#Core.ConvertDocumentToFragment)
  - [DirectLexLineNumberSyncInterval](#Core.DirectLexLineNumberSyncInterval)
  - [DisableExcludes](#Core.DisableExcludes)
  - [EnableIDNA](#Core.EnableIDNA)
  - [Encoding](#Core.Encoding)
  - [EscapeInvalidChildren](#Core.EscapeInvalidChildren)
  - [EscapeInvalidTags](#Core.EscapeInvalidTags)
  - [EscapeNonASCIICharacters](#Core.EscapeNonASCIICharacters)
  - [HiddenElements](#Core.HiddenElements)
  - [Language](#Core.Language)
  - [LegacyEntityDecoder](#Core.LegacyEntityDecoder)
  - [LexerImpl](#Core.LexerImpl)
  - [MaintainLineNumbers](#Core.MaintainLineNumbers)
  - [NormalizeNewlines](#Core.NormalizeNewlines)
  - [RemoveInvalidImg](#Core.RemoveInvalidImg)
  - [RemoveProcessingInstructions](#Core.RemoveProcessingInstructions)
- [Filter](#Filter)
  - [Custom](#Filter.Custom)
  - [ExtractStyleBlocks.Escaping](#Filter.ExtractStyleBlocks.Escaping)
  - [ExtractStyleBlocks.Scope](#Filter.ExtractStyleBlocks.Scope)
  - [ExtractStyleBlocks.TidyImpl](#Filter.ExtractStyleBlocks.TidyImpl)
  - [ExtractStyleBlocks](#Filter.ExtractStyleBlocks)
  - [YouTube](#Filter.YouTube)
- [HTML](#HTML)
  - [Allowed](#HTML.Allowed)
  - [AllowedAttributes](#HTML.AllowedAttributes)
  - [AllowedComments](#HTML.AllowedComments)
  - [AllowedCommentsRegexp](#HTML.AllowedCommentsRegexp)
  - [AllowedElements](#HTML.AllowedElements)
  - [AllowedModules](#HTML.AllowedModules)
  - [Attr.Name.UseCDATA](#HTML.Attr.Name.UseCDATA)
  - [BlockWrapper](#HTML.BlockWrapper)
  - [CoreModules](#HTML.CoreModules)
  - [CustomDoctype](#HTML.CustomDoctype)
  - [DefinitionID](#HTML.DefinitionID)
  - [DefinitionRev](#HTML.DefinitionRev)
  - [Doctype](#HTML.Doctype)
  - [FlashAllowFullScreen](#HTML.FlashAllowFullScreen)
  - [ForbiddenAttributes](#HTML.ForbiddenAttributes)
  - [ForbiddenElements](#HTML.ForbiddenElements)
  - [MaxImgLength](#HTML.MaxImgLength)
  - [Nofollow](#HTML.Nofollow)
  - [Parent](#HTML.Parent)
  - [Proprietary](#HTML.Proprietary)
  - [SafeEmbed](#HTML.SafeEmbed)
  - [SafeIframe](#HTML.SafeIframe)
  - [SafeObject](#HTML.SafeObject)
  - [SafeScripting](#HTML.SafeScripting)
  - [TargetBlank](#HTML.TargetBlank)
  - [TargetNoopener](#HTML.TargetNoopener)
  - [TargetNoreferrer](#HTML.TargetNoreferrer)
  - [TidyAdd](#HTML.TidyAdd)
  - [TidyLevel](#HTML.TidyLevel)
  - [TidyRemove](#HTML.TidyRemove)
  - [Trusted](#HTML.Trusted)
- [Output](#Output)
  - [CommentScriptContents](#Output.CommentScriptContents)
  - [FixInnerHTML](#Output.FixInnerHTML)
  - [FlashCompat](#Output.FlashCompat)
  - [Newline](#Output.Newline)
  - [SortAttr](#Output.SortAttr)
  - [TidyFormat](#Output.TidyFormat)
- [Test](#Test)
  - [ForceNoIconv](#Test.ForceNoIconv)
- [URI](#URI)
  - [AllowedSchemes](#URI.AllowedSchemes)
  - [Base](#URI.Base)
  - [DefaultScheme](#URI.DefaultScheme)
  - [DefinitionID](#URI.DefinitionID)
  - [DefinitionRev](#URI.DefinitionRev)
  - [Disable](#URI.Disable)
  - [DisableExternal](#URI.DisableExternal)
  - [DisableExternalResources](#URI.DisableExternalResources)
  - [DisableResources](#URI.DisableResources)
  - [Host](#URI.Host)
  - [HostBlacklist](#URI.HostBlacklist)
  - [MakeAbsolute](#URI.MakeAbsolute)
  - [Munge](#URI.Munge)
  - [MungeResources](#URI.MungeResources)
  - [MungeSecretKey](#URI.MungeSecretKey)
  - [OverrideAllowedSchemes](#URI.OverrideAllowedSchemes)
  - [SafeIframeRegexp](#URI.SafeIframeRegexp)

## Types

### `string`: String

A [sequence
of characters](http://docs.php.net/manual/en/language.types.string.php).

### `istring`: Case-insensitive string

A series of case-insensitive characters. Internally, upper-case
ASCII characters will be converted to lower-case.

### `text`: Text

A series of characters that may contain newlines. Text tends to
indicate human-oriented text, as opposed to a machine format.

### `itext`: Case-insensitive text

A series of case-insensitive characters that may contain newlines.

### `int`: Integer

An [integer](http://docs.php.net/manual/en/language.types.integer.php). You are alternatively permitted to pass a string of
digits instead, which will be cast to an integer using
`(int)`.

### `float`: Float

A [floating point number](http://docs.php.net/manual/en/language.types.float.php). You are alternatively permitted to
pass a numeric string (as defined by `is_numeric()`),
which will be cast to a float using `(float)`.

### `bool`: Boolean

A [boolean](http://docs.php.net/manual/en/language.types.boolean.php).
You are alternatively permitted to pass an integer `0` or
`1` (other integers are not permitted) or a string
`"on"`, `"true"` or `"1"` for
`true`, and `"off"`, `"false"` or
`"0"` for `false`.

### `lookup`: Lookup array

An array whose values are `true`, e.g. `array('key'
=> true, 'key2' => true)`. You are alternatively permitted
to pass an array list of the keys `array('key', 'key2')`
or a comma-separated string of keys `"key, key2"`. If
you pass an array list of values, ensure that your values are
strictly numerically indexed: `array('key1', 2 =>
'key2')` will not do what you expect and emits a warning.

### `list`: Array list

An array which has consecutive integer indexes, e.g.
`array('val1', 'val2')`. You are alternatively permitted
to pass a comma-separated string of keys `"val1, val2"`.
If your array is not in this form, `array_values` is run
on the array and a warning is emitted.

### `hash`: Associative array

An array which is a mapping of keys to values, e.g.
`array('key1' => 'val1', 'key2' => 'val2')`. You are
alternatively permitted to pass a comma-separated string of
key-colon-value strings, e.g. `"key1: val1, key2: val2"`.

### `mixed`: Mixed

An arbitrary PHP value of any type.

## Attr

### Attr.AllowedClasses

|  |  |
| --- | --- |
| Version added | 4.0.0 |
| Type | [Lookup array (or null)](#type-lookup) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/AttrDef/HTML/Class.php* on line 33 |

List of allowed class values in the class attribute. By default, this is null,
which means all classes are allowed.

### Attr.AllowedFrameTargets

|  |  |
| --- | --- |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array() ``` |
| Used in | - *HTMLPurifier/AttrDef/HTML/FrameTarget.php* on line 32 |

Lookup table of all allowed link frame targets. Some commonly used link
targets include \_blank, \_self, \_parent and \_top. Values should be
lowercase, as validation will be done in a case-sensitive manner despite
W3C's recommendation. XHTML 1.0 Strict does not permit the target attribute
so this directive will have no effect in that doctype. XHTML 1.1 does not
enable the Target module by default, you will have to manually enable it
(see the module documentation for more details.)

### Attr.AllowedRel

|  |  |
| --- | --- |
| Version added | 1.6.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array() ``` |

List of allowed forward document relationships in the rel attribute. Common
values may be nofollow or print. By default, this is empty, meaning that no
document relationships are allowed.

### Attr.AllowedRev

|  |  |
| --- | --- |
| Version added | 1.6.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array() ``` |

List of allowed reverse document relationships in the rev attribute. This
attribute is a bit of an edge-case; if you don't know what it is for, stay
away.

### Attr.ClassUseCDATA

|  |  |
| --- | --- |
| Version added | 4.0.0 |
| Type | [Boolean (or null)](#type-bool) |
| Default | ``` NULL ``` |

If null, class will auto-detect the doctype and, if matching XHTML 1.1 or
XHTML 2.0, will use the restrictive NMTOKENS specification of class. Otherwise,
it will use a relaxed CDATA definition. If true, the relaxed CDATA definition
is forced; if false, the NMTOKENS definition is forced. To get behavior
of HTML Purifier prior to 4.0.0, set this directive to false.
Some rational behind the auto-detection:
in previous versions of HTML Purifier, it was assumed that the form of
class was NMTOKENS, as specified by the XHTML Modularization (representing
XHTML 1.1 and XHTML 2.0). The DTDs for HTML 4.01 and XHTML 1.0, however
specify class as CDATA. HTML 5 effectively defines it as CDATA, but
with the additional constraint that each name should be unique (this is not
explicitly outlined in previous specifications).

### Attr.DefaultImageAlt

|  |  |
| --- | --- |
| Version added | 3.2.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/AttrTransform/ImgRequired.php* on line 33 |

This is the content of the alt tag of an image if the user had not
previously specified an alt attribute. This applies to all images without
a valid alt attribute, as opposed to [%Attr.DefaultInvalidImageAlt](#Attr.DefaultInvalidImageAlt), which
only applies to invalid images, and overrides in the case of an invalid image.
Default behavior with null is to use the basename of the src tag for the alt.

### Attr.DefaultInvalidImage

|  |  |
| --- | --- |
| Type | [String](#type-string) |
| Default | ``` '' ``` |
| Used in | - *HTMLPurifier/AttrTransform/ImgRequired.php* on line 27 |

This is the default image an img tag will be pointed to if it does not have
a valid src attribute. In future versions, we may allow the image tag to
be removed completely, but due to design issues, this is not possible right
now.

### Attr.DefaultInvalidImageAlt

|  |  |
| --- | --- |
| Type | [String](#type-string) |
| Default | ``` 'Invalid image' ``` |
| Used in | - *HTMLPurifier/AttrTransform/ImgRequired.php* on line 40 |

This is the content of the alt tag of an invalid image if the user had not
previously specified an alt attribute. It has no effect when the image is
valid but there was no alt attribute present.

### Attr.DefaultTextDir

|  |  |
| --- | --- |
| Type | [String](#type-string) |
| Allowed values | "ltr", "rtl" |
| Default | ``` 'ltr' ``` |
| Used in | - *HTMLPurifier/AttrTransform/BdoDir.php* on line 22 |

Defines the default text direction (ltr or rtl) of the document being
parsed. This generally is the same as the value of the dir attribute in
HTML, or ltr if that is not specified.

### Attr.EnableID

|  |  |
| --- | --- |
| Version added | 1.2.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Aliases | HTML.EnableAttrID |
| Used in | - *HTMLPurifier/AttrDef/HTML/ID.php* on line 41 |

Allows the ID attribute in HTML. This is disabled by default due to the
fact that without proper configuration user input can easily break the
validation of a webpage by specifying an ID that is already on the
surrounding HTML. If you don't mind throwing caution to the wind, enable
this directive, but I strongly recommend you also consider blacklisting IDs
you use ([%Attr.IDBlacklist](#Attr.IDBlacklist)) or prefixing all user supplied IDs
([%Attr.IDPrefix](#Attr.IDPrefix)). When set to true HTML Purifier reverts to the behavior of
pre-1.2.0 versions.

### Attr.ForbiddenClasses

|  |  |
| --- | --- |
| Version added | 4.0.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array() ``` |
| Used in | - *HTMLPurifier/AttrDef/HTML/Class.php* on line 34 |

List of forbidden class values in the class attribute. By default, this is
empty, which means that no classes are forbidden. See also [%Attr.AllowedClasses](#Attr.AllowedClasses).

### Attr.ID.HTML5

|  |  |
| --- | --- |
| Version added | 4.8.0 |
| Type | [Boolean (or null)](#type-bool) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/AttrDef/HTML/ID.php* on line 75 |

In HTML5, restrictions on the format of the id attribute have been significantly
relaxed, such that any string is valid so long as it contains no spaces and
is at least one character. In lieu of a general HTML5 compatibility flag,
set this configuration directive to true to use the relaxed rules.

### Attr.IDBlacklist

|  |  |
| --- | --- |
| Type | [Array list](#type-list) |
| Default | ``` array() ``` |
| Used in | - *HTMLPurifier/IDAccumulator.php* on line 27 |

Array of IDs not allowed in the document.

### Attr.IDBlacklistRegexp

|  |  |
| --- | --- |
| Version added | 1.6.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/AttrDef/HTML/ID.php* on line 97 |

PCRE regular expression to be matched against all IDs. If the expression is
matches, the ID is rejected. Use this with care: may cause significant
degradation. ID matching is done after all other validation.

### Attr.IDPrefix

|  |  |
| --- | --- |
| Version added | 1.2.0 |
| Type | [String](#type-string) |
| Default | ``` '' ``` |
| Used in | - *HTMLPurifier/AttrDef/HTML/ID.php* on line 51 |

String to prefix to IDs. If you have no idea what IDs your pages may use,
you may opt to simply add a prefix to all user-submitted ID attributes so
that they are still usable, but will not conflict with core page IDs.
Example: setting the directive to 'user\_' will result in a user submitted
'foo' to become 'user\_foo' Be sure to set [%HTML.EnableAttrID](#HTML.EnableAttrID) to true
before using this.

### Attr.IDPrefixLocal

|  |  |
| --- | --- |
| Version added | 1.2.0 |
| Type | [String](#type-string) |
| Default | ``` '' ``` |
| Used in | - *HTMLPurifier/AttrDef/HTML/ID.php* on lines 53, 58 |

Temporary prefix for IDs used in conjunction with [%Attr.IDPrefix](#Attr.IDPrefix). If you
need to allow multiple sets of user content on web page, you may need to
have a seperate prefix that changes with each iteration. This way,
seperately submitted user content displayed on the same page doesn't
clobber each other. Ideal values are unique identifiers for the content it
represents (i.e. the id of the row in the database). Be sure to add a
seperator (like an underscore) at the end. Warning: this directive will
not work unless [%Attr.IDPrefix](#Attr.IDPrefix) is set to a non-empty value!

## AutoFormat

### AutoFormat.AutoParagraph

|  |  |
| --- | --- |
| Version added | 2.0.1 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

This directive turns on auto-paragraphing, where double newlines are
converted in to paragraphs whenever possible. Auto-paragraphing:

- Always applies to inline elements or text in the root node,
- Applies to inline elements or text with double newlines in nodes
  that allow paragraph tags,
- Applies to double newlines in paragraph tags

`p` tags must be allowed for this directive to take effect.
We do not use `br` tags for paragraphing, as that is
semantically incorrect.

To prevent auto-paragraphing as a content-producer, refrain from using
double-newlines except to specify a new paragraph or in contexts where
it has special meaning (whitespace usually has no meaning except in
tags like `pre`, so this should not be difficult.) To prevent
the paragraphing of inline text adjacent to block elements, wrap them
in `div` tags (the behavior is slightly different outside of
the root node.)

### AutoFormat.Custom

|  |  |
| --- | --- |
| Version added | 2.0.1 |
| Type | [Array list](#type-list) |
| Default | ``` array() ``` |

This directive can be used to add custom auto-format injectors.
Specify an array of injector names (class name minus the prefix)
or concrete implementations. Injector class must exist.

### AutoFormat.DisplayLinkURI

|  |  |
| --- | --- |
| Version added | 3.2.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

This directive turns on the in-text display of URIs in <a> tags, and disables
those links. For example, [example](http://example.com) becomes
example (http://example.com).

### AutoFormat.Linkify

|  |  |
| --- | --- |
| Version added | 2.0.1 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

This directive turns on linkification, auto-linking http, ftp and
https URLs. `a` tags with the `href` attribute
must be allowed.

### AutoFormat.PurifierLinkify.DocURL

|  |  |
| --- | --- |
| Version added | 2.0.1 |
| Type | [String](#type-string) |
| Default | ``` '#%s' ``` |
| Aliases | AutoFormatParam.PurifierLinkifyDocURL |
| Used in | - *HTMLPurifier/Injector/PurifierLinkify.php* on line 31 |

Location of configuration documentation to link to, let %s substitute
into the configuration's namespace and directive names sans the percent
sign.

### AutoFormat.PurifierLinkify

|  |  |
| --- | --- |
| Version added | 2.0.1 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

Internal auto-formatter that converts configuration directives in
syntax %Namespace.Directive to links. `a` tags
with the `href` attribute must be allowed.

### AutoFormat.RemoveEmpty.Predicate

|  |  |
| --- | --- |
| Version added | 4.7.0 |
| Type | [Associative array](#type-hash) |
| Default | ``` array (   'colgroup' =>    array (   ),   'th' =>    array (   ),   'td' =>    array (   ),   'iframe' =>    array (     0 => 'src',   ), ) ``` |
| Used in | - *HTMLPurifier/Injector/RemoveEmpty.php* on line 48 |

Given that an element has no contents, it will be removed by default, unless
this predicate dictates otherwise. The predicate can either be an associative
map from tag name to list of attributes that must be present for the element
to be considered preserved: thus, the default always preserves `colgroup`,
`th` and `td`, and also `iframe` if it
has a `src`.

### AutoFormat.RemoveEmpty.RemoveNbsp.Exceptions

|  |  |
| --- | --- |
| Version added | 4.0.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array (   'td' => true,   'th' => true, ) ``` |
| Used in | - *HTMLPurifier/Injector/RemoveEmpty.php* on line 47 |

When [%AutoFormat.RemoveEmpty](#AutoFormat.RemoveEmpty) and [%AutoFormat.RemoveEmpty](#AutoFormat.RemoveEmpty).RemoveNbsp
are enabled, this directive defines what HTML elements should not be
removede if they have only a non-breaking space in them.

### AutoFormat.RemoveEmpty.RemoveNbsp

|  |  |
| --- | --- |
| Version added | 4.0.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/Injector/RemoveEmpty.php* on line 46 |

When enabled, HTML Purifier will treat any elements that contain only
non-breaking spaces as well as regular whitespace as empty, and remove
them when [%AutoForamt.RemoveEmpty](#AutoForamt.RemoveEmpty) is enabled.

See [%AutoFormat.RemoveEmpty](#AutoFormat.RemoveEmpty).RemoveNbsp.Exceptions for a list of elements
that don't have this behavior applied to them.

### AutoFormat.RemoveEmpty

|  |  |
| --- | --- |
| Version added | 3.2.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

When enabled, HTML Purifier will attempt to remove empty elements that
contribute no semantic information to the document. The following types
of nodes will be removed:

- Tags with no attributes and no content, and that are not empty
  elements (remove `<a></a>` but not
  `<br />`), and
- Tags with no content, except for:
  - The `colgroup` element, or
  - Elements with the `id` or `name` attribute,
    when those attributes are permitted on those elements.

Please be very careful when using this functionality; while it may not
seem that empty elements contain useful information, they can alter the
layout of a document given appropriate styling. This directive is most
useful when you are processing machine-generated HTML, please avoid using
it on regular user HTML.

Elements that contain only whitespace will be treated as empty. Non-breaking
spaces, however, do not count as whitespace. See
[%AutoFormat.RemoveEmpty](#AutoFormat.RemoveEmpty).RemoveNbsp for alternate behavior.

This algorithm is not perfect; you may still notice some empty tags,
particularly if a node had elements, but those elements were later removed
because they were not permitted in that context, or tags that, after
being auto-closed by another tag, where empty. This is for safety reasons
to prevent clever code from breaking validation. The general rule of thumb:
if a tag looked empty on the way in, it will get removed; if HTML Purifier
made it empty, it will stay.

### AutoFormat.RemoveSpansWithoutAttributes

|  |  |
| --- | --- |
| Version added | 4.0.1 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

This directive causes `span` tags without any attributes
to be removed. It will also remove spans that had all attributes
removed during processing.

## CSS

### CSS.AllowDuplicates

|  |  |
| --- | --- |
| Version added | 4.8.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/AttrDef/CSS.php* on line 28 |

By default, HTML Purifier removes duplicate CSS properties,
like `color:red; color:blue`. If this is set to
true, duplicate properties are allowed.

### CSS.AllowImportant

|  |  |
| --- | --- |
| Version added | 3.1.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/CSSDefinition.php* on line 335 |

This parameter determines whether or not !important cascade modifiers should
be allowed in user CSS. If false, !important will stripped.

### CSS.AllowTricky

|  |  |
| --- | --- |
| Version added | 3.1.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/CSSDefinition.php* on line 327 |

This parameter determines whether or not to allow "tricky" CSS properties and
values. Tricky CSS properties/values can drastically modify page layout or
be used for deceptive practices but do not directly constitute a security risk.
For example, `display:none;` is considered a tricky property that
will only be allowed if this directive is set to true.

### CSS.AllowedFonts

|  |  |
| --- | --- |
| Version added | 4.3.0 |
| Type | [Lookup array (or null)](#type-lookup) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/AttrDef/CSS/FontFamily.php* on line 64 |

Allows you to manually specify a set of allowed fonts. If
`NULL`, all fonts are allowed. This directive
affects generic names (serif, sans-serif, monospace, cursive,
fantasy) as well as specific font families.

### CSS.AllowedProperties

|  |  |
| --- | --- |
| Version added | 3.1.0 |
| Type | [Lookup array (or null)](#type-lookup) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/CSSDefinition.php* on line 464 |

If HTML Purifier's style attributes set is unsatisfactory for your needs,
you can overload it with your own list of tags to allow. Note that this
method is subtractive: it does its job by taking away from HTML Purifier
usual feature set, so you cannot add an attribute that HTML Purifier never
supported in the first place.

**Warning:** If another directive conflicts with the
elements here, *that* directive will win and override.

### CSS.DefinitionRev

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Integer](#type-int) |
| Default | ``` 1 ``` |

Revision identifier for your custom definition. See
[%HTML.DefinitionRev](#HTML.DefinitionRev) for details.

### CSS.ForbiddenProperties

|  |  |
| --- | --- |
| Version added | 4.2.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array() ``` |
| Used in | - *HTMLPurifier/CSSDefinition.php* on line 480 |

This is the logical inverse of [%CSS.AllowedProperties](#CSS.AllowedProperties), and it will
override that directive or any other directive. If possible,
[%CSS.AllowedProperties](#CSS.AllowedProperties) is recommended over this directive,
because it can sometimes be difficult to tell whether or not you've
forbidden all of the CSS properties you truly would like to disallow.

### CSS.MaxImgLength

|  |  |
| --- | --- |
| Version added | 3.1.1 |
| Type | [String (or null)](#type-string) |
| Default | ``` '1200px' ``` |
| Used in | - *HTMLPurifier/CSSDefinition.php* on line 226 |

This parameter sets the maximum allowed length on `img` tags,
effectively the `width` and `height` properties.
Only absolute units of measurement (in, pt, pc, mm, cm) and pixels (px) are allowed. This is
in place to prevent imagecrash attacks, disable with null at your own risk.
This directive is similar to [%HTML.MaxImgLength](#HTML.MaxImgLength), and both should be
concurrently edited, although there are
subtle differences in the input format (the CSS max is a number with
a unit).

### CSS.Proprietary

|  |  |
| --- | --- |
| Version added | 3.0.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/CSSDefinition.php* on line 323 |

Whether or not to allow safe, proprietary CSS values.

### CSS.Trusted

|  |  |
| --- | --- |
| Version added | 4.2.1 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/CSSDefinition.php* on line 331 |

Indicates whether or not the user's CSS input is trusted or not. If the
input is trusted, a more expansive set of allowed properties. See
also [%HTML.Trusted](#HTML.Trusted).

## Cache

### Cache.DefinitionImpl

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` 'Serializer' ``` |
| Aliases | Core.DefinitionCache |
| Used in | - *HTMLPurifier/DefinitionCacheFactory.php* on line 66 |

This directive defines which method to use when caching definitions,
the complex data-type that makes HTML Purifier tick. Set to null
to disable caching (not recommended, as you will see a definite
performance degradation).

### Cache.SerializerPath

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/DefinitionCache/Serializer.php* on line 185 |

Absolute path with no trailing slash to store serialized definitions in.
Default is within the
HTML Purifier library inside DefinitionCache/Serializer. This
path must be writable by the webserver.

### Cache.SerializerPermissions

|  |  |
| --- | --- |
| Version added | 4.3.0 |
| Type | [Integer (or null)](#type-int) |
| Default | ``` 493 ``` |
| Used in | - *HTMLPurifier/DefinitionCache/Serializer.php* on lines 202, 218 |

Directory permissions of the files and directories created inside
the DefinitionCache/Serializer or other custom serializer path.

In HTML Purifier 4.8.0, this also supports `NULL`,
which means that no chmod'ing or directory creation shall
occur.

## Core

### Core.AggressivelyFixLt

|  |  |
| --- | --- |
| Version added | 2.1.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Used in | - *HTMLPurifier/Lexer/DOMLex.php* on line 54 |

This directive enables aggressive pre-filter fixes HTML Purifier can
perform in order to ensure that open angled-brackets do not get killed
during parsing stage. Enabling this will result in two preg\_replace\_callback
calls and at least two preg\_replace calls for every HTML document parsed;
if your users make very well-formed HTML, you can set this directive false.
This has no effect when DirectLex is used.

**Notice:** This directive's default turned from false to true
in HTML Purifier 3.2.0.

### Core.AggressivelyRemoveScript

|  |  |
| --- | --- |
| Version added | 4.9.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Used in | - *HTMLPurifier/Lexer.php* on line 351 |

This directive enables aggressive pre-filter removal of
script tags. This is not necessary for security,
but it can help work around a bug in libxml where embedded
HTML elements inside script sections cause the parser to
choke. To revert to pre-4.9.0 behavior, set this to false.
This directive has no effect if [%Core.Trusted](#Core.Trusted) is true,
[%Core.RemoveScriptContents](#Core.RemoveScriptContents) is false, or [%Core.HiddenElements](#Core.HiddenElements)
does not contain script.

### Core.AllowHostnameUnderscore

|  |  |
| --- | --- |
| Version added | 4.6.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/AttrDef/URI/Host.php* on line 77 |

By RFC 1123, underscores are not permitted in host names.
(This is in contrast to the specification for DNS, RFC
2181, which allows underscores.)
However, most browsers do the right thing when faced with
an underscore in the host name, and so some poorly written
websites are written with the expectation this should work.
Setting this parameter to true relaxes our allowed character
check so that underscores are permitted.

### Core.CollectErrors

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier.php* on line 162 - *HTMLPurifier/Lexer.php* on lines 85, 326 - *HTMLPurifier/Lexer/DirectLex.php* on lines 67, 87, 385 - *HTMLPurifier/Strategy/RemoveForeignElements.php* on line 57 |

Whether or not to collect errors found while filtering the document. This
is a useful way to give feedback to your users. **Warning:**
Currently this feature is very patchy and experimental, with lots of
possible error messages not yet implemented. It will not cause any
problems, but it may not help your users either.

### Core.ColorKeywords

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Associative array](#type-hash) |
| Default | ``` array (   'maroon' => '#800000',   'red' => '#FF0000',   'orange' => '#FFA500',   'yellow' => '#FFFF00',   'olive' => '#808000',   'purple' => '#800080',   'fuchsia' => '#FF00FF',   'white' => '#FFFFFF',   'lime' => '#00FF00',   'green' => '#008000',   'navy' => '#000080',   'blue' => '#0000FF',   'aqua' => '#00FFFF',   'teal' => '#008080',   'black' => '#000000',   'silver' => '#C0C0C0',   'gray' => '#808080', ) ``` |
| Used in | - *HTMLPurifier/AttrDef/CSS/Color.php* on line 29 - *HTMLPurifier/AttrDef/HTML/Color.php* on line 19 |

Lookup array of color names to six digit hexadecimal number corresponding
to color, with preceding hash mark. Used when parsing colors. The lookup
is done in a case-insensitive manner.

### Core.ConvertDocumentToFragment

|  |  |
| --- | --- |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Aliases | Core.AcceptFullDocuments |
| Used in | - *HTMLPurifier/Lexer.php* on line 324 |

This parameter determines whether or not the filter should convert
input that is a full document with html and body tags to a fragment
of just the contents of a body tag. This parameter is simply something
HTML Purifier can do during an edge-case: for most inputs, this
processing is not necessary.

### Core.DirectLexLineNumberSyncInterval

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Integer](#type-int) |
| Default | ``` 0 ``` |
| Used in | - *HTMLPurifier/Lexer/DirectLex.php* on line 84 |

Specifies the number of tokens the DirectLex line number tracking
implementations should process before attempting to resyncronize the
current line count by manually counting all previous new-lines. When
at 0, this functionality is disabled. Lower values will decrease
performance, and this is only strictly necessary if the counting
algorithm is buggy (in which case you should report it as a bug).
This has no effect when [%Core.MaintainLineNumbers](#Core.MaintainLineNumbers) is disabled or DirectLex is
not being used.

### Core.DisableExcludes

|  |  |
| --- | --- |
| Version added | 4.5.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/Strategy/FixNesting.php* on line 54 |

This directive disables SGML-style exclusions, e.g. the exclusion of
`<object>` in any descendant of a
`<pre>` tag. Disabling excludes will allow some
invalid documents to pass through HTML Purifier, but HTML Purifier
will also be less likely to accidentally remove large documents during
processing.

### Core.EnableIDNA

|  |  |
| --- | --- |
| Version added | 4.4.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/AttrDef/URI/Host.php* on line 105 |

Allows international domain names in URLs. This configuration option
requires the PEAR Net\_IDNA2 module to be installed. It operates by
punycoding any internationalized host names for maximum portability.

### Core.Encoding

|  |  |
| --- | --- |
| Type | [Case-insensitive string](#type-istring) |
| Default | ``` 'utf-8' ``` |
| Used in | - *HTMLPurifier/Encoder.php* on lines 380, 428 |

If for some reason you are unable to convert all webpages to UTF-8, you can
use this directive as a stop-gap compatibility change to let HTML Purifier
deal with non UTF-8 input. This technique has notable deficiencies:
absolutely no characters outside of the selected character encoding will be
preserved, not even the ones that have been ampersand escaped (this is due
to a UTF-8 specific *feature* that automatically resolves all
entities), making it pretty useless for anything except the most I18N-blind
applications, although [%Core.EscapeNonASCIICharacters](#Core.EscapeNonASCIICharacters) offers fixes this
trouble with another tradeoff. This directive only accepts ISO-8859-1 if
iconv is not enabled.

### Core.EscapeInvalidChildren

|  |  |
| --- | --- |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

**Warning:** this configuration option is no longer does anything as of 4.6.0.

When true, a child is found that is not allowed in the context of the
parent element will be transformed into text as if it were ASCII. When
false, that element and all internal tags will be dropped, though text will
be preserved. There is no option for dropping the element but preserving
child nodes.

### Core.EscapeInvalidTags

|  |  |
| --- | --- |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/Strategy/MakeWellFormed.php* on line 72 - *HTMLPurifier/Strategy/RemoveForeignElements.php* on line 26 |

When true, invalid tags will be written back to the document as plain text.
Otherwise, they are silently dropped.

### Core.EscapeNonASCIICharacters

|  |  |
| --- | --- |
| Version added | 1.4.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/Encoder.php* on line 429 |

This directive overcomes a deficiency in [%Core.Encoding](#Core.Encoding) by blindly
converting all non-ASCII characters into decimal numeric entities before
converting it to its native encoding. This means that even characters that
can be expressed in the non-UTF-8 encoding will be entity-ized, which can
be a real downer for encodings like Big5. It also assumes that the ASCII
repetoire is available, although this is the case for almost all encodings.
Anyway, use UTF-8!

### Core.HiddenElements

|  |  |
| --- | --- |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array (   'script' => true,   'style' => true, ) ``` |
| Used in | - *HTMLPurifier/Lexer.php* on line 353 - *HTMLPurifier/Strategy/RemoveForeignElements.php* on line 36 |

This directive is a lookup array of elements which should have their
contents removed when they are not allowed by the HTML definition.
For example, the contents of a `script` tag are not
normally shown in a document, so if script tags are to be removed,
their contents should be removed to. This is opposed to a `b`
tag, which defines some presentational changes but does not hide its
contents.

### Core.Language

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [String](#type-string) |
| Default | ``` 'en' ``` |
| Used in | - *HTMLPurifier/LanguageFactory.php* on line 93 |

ISO 639 language code for localizable things in HTML Purifier to use,
which is mainly error reporting. There is currently only an English (en)
translation, so this directive is currently useless.

### Core.LegacyEntityDecoder

|  |  |
| --- | --- |
| Version added | 4.9.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/Lexer.php* on lines 215, 337 |

Prior to HTML Purifier 4.9.0, entities were decoded by performing
a global search replace for all entities whose decoded versions
did not have special meanings under HTML, and replaced them with
their decoded versions. We would match all entities, even if they did
not have a trailing semicolon, but only if there weren't any trailing
alphanumeric characters.

| Original | Text | Attribute |
| --- | --- | --- |
| &yen; | Â¥ | Â¥ |
| &yen | Â¥ | Â¥ |
| &yena | &yena | &yena |
| &yen= | Â¥= | Â¥= |

In HTML Purifier 4.9.0, we changed the behavior of entity parsing
to match entities that had missing trailing semicolons in less
cases, to more closely match HTML5 parsing behavior:

| Original | Text | Attribute |
| --- | --- | --- |
| &yen; | Â¥ | Â¥ |
| &yen | Â¥ | Â¥ |
| &yena | Â¥a | &yena |
| &yen= | Â¥= | &yen= |

This flag reverts back to pre-HTML Purifier 4.9.0 behavior.

### Core.LexerImpl

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Mixed (or null)](#type-mixed) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/Lexer.php* on line 80 |

This parameter determines what lexer implementation can be used. The
valid values are:

*null*
:   Recommended, the lexer implementation will be auto-detected based on
    your PHP-version and configuration.

*string* lexer identifier
:   This is a slim way of manually overridding the implementation.
    Currently recognized values are: DOMLex (the default PHP5
    implementation)
    and DirectLex (the default PHP4 implementation). Only use this if
    you know what you are doing: usually, the auto-detection will
    manage things for cases you aren't even aware of.

*object* lexer instance
:   Super-advanced: you can specify your own, custom, implementation that
    implements the interface defined by `HTMLPurifier_Lexer`.
    I may remove this option simply because I don't expect anyone
    to use it.

### Core.MaintainLineNumbers

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Boolean (or null)](#type-bool) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/Lexer.php* on line 84 - *HTMLPurifier/Lexer/DirectLex.php* on line 62 |

If true, HTML Purifier will add line number information to all tokens.
This is useful when error reporting is turned on, but can result in
significant performance degradation and should not be used when
unnecessary. This directive must be used with the DirectLex lexer,
as the DOMLex lexer does not (yet) support this functionality.
If the value is null, an appropriate value will be selected based
on other configuration.

### Core.NormalizeNewlines

|  |  |
| --- | --- |
| Version added | 4.2.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Used in | - *HTMLPurifier/Generator.php* on line 122 - *HTMLPurifier/Lexer.php* on line 308 |

Whether or not to normalize newlines to the operating
system default. When `false`, HTML Purifier
will attempt to preserve mixed newline files.

### Core.RemoveInvalidImg

|  |  |
| --- | --- |
| Version added | 1.3.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Used in | - *HTMLPurifier/AttrTransform/ImgRequired.php* on line 24 - *HTMLPurifier/Strategy/RemoveForeignElements.php* on line 27 |

This directive enables pre-emptive URI checking in `img`
tags, as the attribute validation strategy is not authorized to
remove elements from the document. Revert to pre-1.3.0 behavior by setting to false.

### Core.RemoveProcessingInstructions

|  |  |
| --- | --- |
| Version added | 4.2.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/Lexer.php* on line 347 |

Instead of escaping processing instructions in the form `<? ...
?>`, remove it out-right. This may be useful if the HTML
you are validating contains XML processing instruction gunk, however,
it can also be user-unfriendly for people attempting to post PHP
snippets.

### Core.RemoveScriptContents

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Boolean (or null)](#type-bool) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/Lexer.php* on line 352 - *HTMLPurifier/Strategy/RemoveForeignElements.php* on line 35 |

**Warning:**
This directive was deprecated in version 2.1.0.
[%Core.HiddenElements](#Core.HiddenElements) should be used instead.

This directive enables HTML Purifier to remove not only script tags
but all of their contents.

## Filter

### Filter.Custom

|  |  |
| --- | --- |
| Version added | 3.1.0 |
| Type | [Array list](#type-list) |
| Default | ``` array() ``` |

This directive can be used to add custom filters; it is nearly the
equivalent of the now deprecated `HTMLPurifier->addFilter()`
method. Specify an array of concrete implementations.

### Filter.ExtractStyleBlocks.Escaping

|  |  |
| --- | --- |
| Version added | 3.0.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Aliases | Filter.ExtractStyleBlocksEscaping, FilterParam.ExtractStyleBlocksEscaping |
| Used in | - *HTMLPurifier/Filter/ExtractStyleBlocks.php* on line 330 |

Whether or not to escape the dangerous characters <, > and &
as \3C, \3E and \26, respectively. This is can be safely set to false
if the contents of StyleBlocks will be placed in an external stylesheet,
where there is no risk of it being interpreted as HTML.

### Filter.ExtractStyleBlocks.Scope

|  |  |
| --- | --- |
| Version added | 3.0.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |
| Aliases | Filter.ExtractStyleBlocksScope, FilterParam.ExtractStyleBlocksScope |
| Used in | - *HTMLPurifier/Filter/ExtractStyleBlocks.php* on line 125 |

If you would like users to be able to define external stylesheets, but
only allow them to specify CSS declarations for a specific node and
prevent them from fiddling with other elements, use this directive.
It accepts any valid CSS selector, and will prepend this to any
CSS declaration extracted from the document. For example, if this
directive is set to `#user-content` and a user uses the
selector `a:hover`, the final selector will be
`#user-content a:hover`.

The comma shorthand may be used; consider the above example, with
`#user-content, #user-content2`, the final selector will
be `#user-content a:hover, #user-content2 a:hover`.

**Warning:** It is possible for users to bypass this measure
using a naughty + selector. This is a bug in CSS Tidy 1.3, not HTML
Purifier, and I am working to get it fixed. Until then, HTML Purifier
performs a basic check to prevent this.

### Filter.ExtractStyleBlocks.TidyImpl

|  |  |
| --- | --- |
| Version added | 3.1.0 |
| Type | [Mixed (or null)](#type-mixed) |
| Default | ``` NULL ``` |
| Aliases | FilterParam.ExtractStyleBlocksTidyImpl |
| Used in | - *HTMLPurifier/Filter/ExtractStyleBlocks.php* on line 94 |

If left NULL, HTML Purifier will attempt to instantiate a `csstidy`
class to use for internal cleaning. This will usually be good enough.

However, for trusted user input, you can set this to `false` to
disable cleaning. In addition, you can supply your own concrete implementation
of Tidy's interface to use, although I don't know why you'd want to do that.

### Filter.ExtractStyleBlocks

|  |  |
| --- | --- |
| Version added | 3.1.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| External deps | - CSSTidy |

This directive turns on the style block extraction filter, which removes
`style` blocks from input HTML, cleans them up with CSSTidy,
and places them in the `StyleBlocks` context variable, for further
use by you, usually to be placed in an external stylesheet, or a
`style` block in the `head` of your document.

Sample usage:

```
<?php
    header('Content-type: text/html; charset=utf-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>Filter.ExtractStyleBlocks</title>
<?php
    require_once '/path/to/library/HTMLPurifier.auto.php';
    require_once '/path/to/csstidy.class.php';

    $dirty = '<style>body {color:#F00;}</style> Some text';

    $config = HTMLPurifier_Config::createDefault();
    $config->set('Filter', 'ExtractStyleBlocks', true);
    $purifier = new HTMLPurifier($config);

    $html = $purifier->purify($dirty);

    // This implementation writes the stylesheets to the styles/ directory.
    // You can also echo the styles inside the document, but it's a bit
    // more difficult to make sure they get interpreted properly by
    // browsers; try the usual CSS armoring techniques.
    $styles = $purifier->context->get('StyleBlocks');
    $dir = 'styles/';
    if (!is_dir($dir)) mkdir($dir);
    $hash = sha1($_GET['html']);
    foreach ($styles as $i => $style) {
        file_put_contents($name = $dir . $hash . "_$i");
        echo '<link rel="stylesheet" type="text/css" href="'.$name.'" />';
    }
?>
</head>
<body>
  <div>
    <?php echo $html; ?>
  </div>
</body>
</html>
```

**Warning:** It is possible for a user to mount an
imagecrash attack using this CSS. Counter-measures are difficult;
it is not simply enough to limit the range of CSS lengths (using
relative lengths with many nesting levels allows for large values
to be attained without actually specifying them in the stylesheet),
and the flexible nature of selectors makes it difficult to selectively
disable lengths on image tags (HTML Purifier, however, does disable
CSS width and height in inline styling). There are probably two effective
counter measures: an explicit width and height set to auto in all
images in your document (unlikely) or the disabling of width and
height (somewhat reasonable). Whether or not these measures should be
used is left to the reader.

### Filter.YouTube

|  |  |
| --- | --- |
| Version added | 3.1.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

**Warning:** Deprecated in favor of [%HTML.SafeObject](#HTML.SafeObject) and
[%Output.FlashCompat](#Output.FlashCompat) (turn both on to allow YouTube videos and other
Flash content).

This directive enables YouTube video embedding in HTML Purifier. Check
[this document
on embedding videos](http://htmlpurifier.org/docs/enduser-youtube.html) for more information on what this filter does.

## HTML

### HTML.Allowed

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Case-insensitive text (or null)](#type-itext) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/HTMLDefinition.php* on line 295 |

This is a preferred convenience directive that combines
[%HTML.AllowedElements](#HTML.AllowedElements) and [%HTML.AllowedAttributes](#HTML.AllowedAttributes).
Specify elements and attributes that are allowed using:
`element1[attr1|attr2],element2...`. For example,
if you would like to only allow paragraphs and links, specify
`a[href],p`. You can specify attributes that apply
to all elements using an asterisk, e.g. `*[lang]`.
You can also use newlines instead of commas to separate elements.

**Warning**:
All of the constraints on the component directives are still enforced.
The syntax is a *subset* of TinyMCE's `valid_elements`
whitelist: directly copy-pasting it here will probably result in
broken whitelists. If [%HTML.AllowedElements](#HTML.AllowedElements) or [%HTML.AllowedAttributes](#HTML.AllowedAttributes)
are set, this directive has no effect.

### HTML.AllowedAttributes

|  |  |
| --- | --- |
| Version added | 1.3.0 |
| Type | [Lookup array (or null)](#type-lookup) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/HTMLDefinition.php* on line 292 |

If HTML Purifier's attribute set is unsatisfactory, overload it!
The syntax is "tag.attr" or "\*.attr" for the global attributes
(style, id, class, dir, lang, xml:lang).

**Warning:** If another directive conflicts with the
elements here, *that* directive will win and override. For
example, [%HTML.EnableAttrID](#HTML.EnableAttrID) will take precedence over \*.id in this
directive. You must set that directive to true before you can use
IDs at all.

### HTML.AllowedComments

|  |  |
| --- | --- |
| Version added | 4.4.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array() ``` |
| Used in | - *HTMLPurifier/Strategy/RemoveForeignElements.php* on line 31 |

A whitelist which indicates what explicit comment bodies should be
allowed, modulo leading and trailing whitespace. See also [%HTML.AllowedCommentsRegexp](#HTML.AllowedCommentsRegexp)
(these directives are union'ed together, so a comment is considered
valid if any directive deems it valid.)

### HTML.AllowedCommentsRegexp

|  |  |
| --- | --- |
| Version added | 4.4.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/Strategy/RemoveForeignElements.php* on line 32 |

A regexp, which if it matches the body of a comment, indicates that
it should be allowed. Trailing and leading spaces are removed prior
to running this regular expression.
**Warning:** Make sure you specify
correct anchor metacharacters `^regex$`, otherwise you may accept
comments that you did not mean to! In particular, the regex `/foo|bar/`
is probably not sufficiently strict, since it also allows `foobar`.
See also [%HTML.AllowedComments](#HTML.AllowedComments) (these directives are union'ed together,
so a comment is considered valid if any directive deems it valid.)

### HTML.AllowedElements

|  |  |
| --- | --- |
| Version added | 1.3.0 |
| Type | [Lookup array (or null)](#type-lookup) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/HTMLDefinition.php* on line 291 |

If HTML Purifier's tag set is unsatisfactory for your needs, you can
overload it with your own list of tags to allow. If you change
this, you probably also want to change [%HTML.AllowedAttributes](#HTML.AllowedAttributes); see
also [%HTML.Allowed](#HTML.Allowed) which lets you set allowed elements and
attributes at the same time.

If you attempt to allow an element that HTML Purifier does not know
about, HTML Purifier will raise an error. You will need to manually
tell HTML Purifier about this element by using the
[advanced customization features.](http://htmlpurifier.org/docs/enduser-customize.html)

**Warning:** If another directive conflicts with the
elements here, *that* directive will win and override.

### HTML.AllowedModules

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Lookup array (or null)](#type-lookup) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/HTMLModuleManager.php* on line 241 |

A doctype comes with a set of usual modules to use. Without having
to mucking about with the doctypes, you can quickly activate or
disable these modules by specifying which modules you wish to allow
with this directive. This is most useful for unit testing specific
modules, although end users may find it useful for their own ends.

If you specify a module that does not exist, the manager will silently
fail to use it, so be careful! User-defined modules are not affected
by this directive. Modules defined in [%HTML.CoreModules](#HTML.CoreModules) are not
affected by this directive.

### HTML.Attr.Name.UseCDATA

|  |  |
| --- | --- |
| Version added | 4.0.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/AttrTransform/Name.php* on line 18 - *HTMLPurifier/HTMLModule/Name.php* on line 19 |

The W3C specification DTD defines the name attribute to be CDATA, not ID, due
to limitations of DTD. In certain documents, this relaxed behavior is desired,
whether it is to specify duplicate names, or to specify names that would be
illegal IDs (for example, names that begin with a digit.) Set this configuration
directive to true to use the relaxed parsing rules.

### HTML.BlockWrapper

|  |  |
| --- | --- |
| Version added | 1.3.0 |
| Type | [String](#type-string) |
| Default | ``` 'p' ``` |
| Used in | - *HTMLPurifier/HTMLDefinition.php* on line 263 |

String name of element to wrap inline elements that are inside a block
context. This only occurs in the children of blockquote in strict mode.

Example: by default value,
`<blockquote>Foo</blockquote>` would become
`<blockquote><p>Foo</p></blockquote>`.
The `<p>` tags can be replaced with whatever you desire,
as long as it is a block level element.

### HTML.CoreModules

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array (   'Structure' => true,   'Text' => true,   'Hypertext' => true,   'List' => true,   'NonXMLCommonAttributes' => true,   'XMLCommonAttributes' => true,   'CommonAttributes' => true, ) ``` |
| Used in | - *HTMLPurifier/HTMLModuleManager.php* on line 242 |

Certain modularized doctypes (XHTML, namely), have certain modules
that must be included for the doctype to be an conforming document
type: put those modules here. By default, XHTML's core modules
are used. You can set this to a blank array to disable core module
protection, but this is not recommended.

### HTML.CustomDoctype

|  |  |
| --- | --- |
| Version added | 2.0.1 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/DoctypeRegistry.php* on line 123 |

A custom doctype for power-users who defined their own document
type. This directive only applies when [%HTML.Doctype](#HTML.Doctype) is blank.

### HTML.DefinitionID

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |

Unique identifier for a custom-built HTML definition. If you edit
the raw version of the HTMLDefinition, introducing changes that the
configuration object does not reflect, you must specify this variable.
If you change your custom edits, you should change this directive, or
clear your cache. Example:

```
$config = HTMLPurifier_Config::createDefault();
$config->set('HTML', 'DefinitionID', '1');
$def = $config->getHTMLDefinition();
$def->addAttribute('a', 'tabindex', 'Number');
```

In the above example, the configuration is still at the defaults, but
using the advanced API, an extra attribute has been added. The
configuration object normally has no way of knowing that this change
has taken place, so it needs an extra directive: [%HTML.DefinitionID](#HTML.DefinitionID).
If someone else attempts to use the default configuration, these two
pieces of code will not clobber each other in the cache, since one has
an extra directive attached to it.

You *must* specify a value to this directive to use the
advanced API features.

### HTML.DefinitionRev

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Integer](#type-int) |
| Default | ``` 1 ``` |

Revision identifier for your custom definition specified in
[%HTML.DefinitionID](#HTML.DefinitionID). This serves the same purpose: uniquely identifying
your custom definition, but this one does so in a chronological
context: revision 3 is more up-to-date then revision 2. Thus, when
this gets incremented, the cache handling is smart enough to clean
up any older revisions of your definition as well as flush the
cache.

### HTML.Doctype

|  |  |
| --- | --- |
| Type | [String (or null)](#type-string) |
| Allowed values | "HTML 4.01 Transitional", "HTML 4.01 Strict", "XHTML 1.0 Transitional", "XHTML 1.0 Strict", "XHTML 1.1" |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/DoctypeRegistry.php* on line 119 |

Doctype to use during filtering. Technically speaking this is not actually
a doctype (as it does not identify a corresponding DTD), but we are using
this name for sake of simplicity. When non-blank, this will override any
older directives like [%HTML.XHTML](#HTML.XHTML) or [%HTML.Strict](#HTML.Strict).

### HTML.FlashAllowFullScreen

|  |  |
| --- | --- |
| Version added | 4.2.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/AttrTransform/SafeParam.php* on line 53 |

Whether or not to permit embedded Flash content from
[%HTML.SafeObject](#HTML.SafeObject) to expand to the full screen. Corresponds to
the `allowFullScreen` parameter.

### HTML.ForbiddenAttributes

|  |  |
| --- | --- |
| Version added | 3.1.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array() ``` |
| Used in | - *HTMLPurifier/HTMLDefinition.php* on line 400 |

While this directive is similar to [%HTML.AllowedAttributes](#HTML.AllowedAttributes), for
forwards-compatibility with XML, this attribute has a different syntax. Instead of
`tag.attr`, use `tag@attr`. To disallow `href`
attributes in `a` tags, set this directive to
`a@href`. You can also disallow an attribute globally with
`attr` or `*@attr` (either syntax is fine; the latter
is provided for consistency with [%HTML.AllowedAttributes](#HTML.AllowedAttributes)).

**Warning:** This directive complements [%HTML.ForbiddenElements](#HTML.ForbiddenElements),
accordingly, check
out that directive for a discussion of why you
should think twice before using this directive.

### HTML.ForbiddenElements

|  |  |
| --- | --- |
| Version added | 3.1.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array() ``` |
| Used in | - *HTMLPurifier/HTMLDefinition.php* on line 399 |

This was, perhaps, the most requested feature ever in HTML
Purifier. Please don't abuse it! This is the logical inverse of
[%HTML.AllowedElements](#HTML.AllowedElements), and it will override that directive, or any
other directive.

If possible, [%HTML.Allowed](#HTML.Allowed) is recommended over this directive, because it
can sometimes be difficult to tell whether or not you've forbidden all of
the behavior you would like to disallow. If you forbid `img`
with the expectation of preventing images on your site, you'll be in for
a nasty surprise when people start using the `background-image`
CSS property.

### HTML.MaxImgLength

|  |  |
| --- | --- |
| Version added | 3.1.1 |
| Type | [Integer (or null)](#type-int) |
| Default | ``` 1200 ``` |
| Used in | - *HTMLPurifier/HTMLModule/Image.php* on line 21 - *HTMLPurifier/HTMLModule/SafeEmbed.php* on line 18 - *HTMLPurifier/HTMLModule/SafeObject.php* on line 24 |

This directive controls the maximum number of pixels in the width and
height attributes in `img` tags. This is
in place to prevent imagecrash attacks, disable with null at your own risk.
This directive is similar to [%CSS.MaxImgLength](#CSS.MaxImgLength), and both should be
concurrently edited, although there are
subtle differences in the input format (the HTML max is an integer).

### HTML.Nofollow

|  |  |
| --- | --- |
| Version added | 4.3.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/HTMLModuleManager.php* on line 268 |

If enabled, nofollow rel attributes are added to all outgoing links.

### HTML.Parent

|  |  |
| --- | --- |
| Version added | 1.3.0 |
| Type | [String](#type-string) |
| Default | ``` 'div' ``` |
| Used in | - *HTMLPurifier/HTMLDefinition.php* on line 273 |

String name of element that HTML fragment passed to library will be
inserted in. An interesting variation would be using span as the
parent element, meaning that only inline tags would be allowed.

### HTML.Proprietary

|  |  |
| --- | --- |
| Version added | 3.1.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/HTMLModuleManager.php* on line 256 |

Whether or not to allow proprietary elements and attributes in your
documents, as per `HTMLPurifier_HTMLModule_Proprietary`.
**Warning:** This can cause your documents to stop
validating!

### HTML.SafeEmbed

|  |  |
| --- | --- |
| Version added | 3.1.1 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/HTMLModuleManager.php* on line 262 |

Whether or not to permit embed tags in documents, with a number of extra
security features added to prevent script execution. This is similar to
what websites like MySpace do to embed tags. Embed is a proprietary
element and will cause your website to stop validating; you should
see if you can use [%Output.FlashCompat](#Output.FlashCompat) with [%HTML.SafeObject](#HTML.SafeObject) instead
first.

### HTML.SafeIframe

|  |  |
| --- | --- |
| Version added | 4.4.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/HTMLModule/Iframe.php* on line 28 - *HTMLPurifier/URIFilter/SafeIframe.php* on line 48 |

Whether or not to permit iframe tags in untrusted documents. This
directive must be accompanied by a whitelist of permitted iframes,
such as [%URI.SafeIframeRegexp](#URI.SafeIframeRegexp), otherwise it will fatally error.
This directive has no effect on strict doctypes, as iframes are not
valid.

### HTML.SafeObject

|  |  |
| --- | --- |
| Version added | 3.1.1 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/HTMLModuleManager.php* on line 259 |

Whether or not to permit object tags in documents, with a number of extra
security features added to prevent script execution. This is similar to
what websites like MySpace do to object tags. You should also enable
[%Output.FlashCompat](#Output.FlashCompat) in order to generate Internet Explorer
compatibility code for your object tags.

### HTML.SafeScripting

|  |  |
| --- | --- |
| Version added | 4.5.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array() ``` |
| Used in | - *HTMLPurifier/HTMLModuleManager.php* on line 265 - *HTMLPurifier/HTMLModule/SafeScripting.php* on line 22 |

Whether or not to permit script tags to external scripts in documents.
Inline scripting is not allowed, and the script must match an explicit whitelist.

### HTML.Strict

|  |  |
| --- | --- |
| Version added | 1.3.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/DoctypeRegistry.php* on line 133 |

**Warning:**
This directive was deprecated in version 1.7.0.
[%HTML.Doctype](#HTML.Doctype) should be used instead.

Determines whether or not to use Transitional (loose) or Strict rulesets.

### HTML.TargetBlank

|  |  |
| --- | --- |
| Version added | 4.4.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/HTMLModuleManager.php* on line 271 |

If enabled, `target=blank` attributes are added to all outgoing links.
(This includes links from an HTTPS version of a page to an HTTP version.)

### HTML.TargetNoopener

|  |  |
| --- | --- |
| Version added | 4.8.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Used in | - *HTMLPurifier/HTMLModuleManager.php* on line 279 |

If enabled, noopener rel attributes are added to links which have
a target attribute associated with them. This prevents malicious
destinations from overwriting the original window.

### HTML.TargetNoreferrer

|  |  |
| --- | --- |
| Version added | 4.8.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Used in | - *HTMLPurifier/HTMLModuleManager.php* on line 276 |

If enabled, noreferrer rel attributes are added to links which have
a target attribute associated with them. This prevents malicious
destinations from overwriting the original window.

### HTML.TidyAdd

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array() ``` |
| Used in | - *HTMLPurifier/HTMLModule/Tidy.php* on line 54 |

Fixes to add to the default set of Tidy fixes as per your level.

### HTML.TidyLevel

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [String](#type-string) |
| Allowed values | "none", "light", "medium", "heavy" |
| Default | ``` 'medium' ``` |
| Used in | - *HTMLPurifier/HTMLModule/Tidy.php* on line 50 |

General level of cleanliness the Tidy module should enforce.
There are four allowed values:

none
:   No extra tidying should be done

light
:   Only fix elements that would be discarded otherwise due to
    lack of support in doctype

medium
:   Enforce best practices

heavy
:   Transform all deprecated elements and attributes to standards
    compliant equivalents

### HTML.TidyRemove

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array() ``` |
| Used in | - *HTMLPurifier/HTMLModule/Tidy.php* on line 55 |

Fixes to remove from the default set of Tidy fixes as per your level.

### HTML.Trusted

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/HTMLModuleManager.php* on line 234 - *HTMLPurifier/Lexer.php* on lines 313, 352 - *HTMLPurifier/HTMLModule/Image.php* on line 37 - *HTMLPurifier/Lexer/DirectLex.php* on line 47 - *HTMLPurifier/Strategy/RemoveForeignElements.php* on line 30 |

Indicates whether or not the user input is trusted or not. If the input is
trusted, a more expansive set of allowed tags and attributes will be used.
See also [%CSS.Trusted](#CSS.Trusted).

### HTML.XHTML

|  |  |
| --- | --- |
| Version added | 1.1.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Aliases | Core.XHTML |
| Used in | - *HTMLPurifier/DoctypeRegistry.php* on line 128 |

**Warning:**
This directive was deprecated in version 1.7.0.
[%HTML.Doctype](#HTML.Doctype) should be used instead.

Determines whether or not output is XHTML 1.0 or HTML 4.01 flavor.

## Output

### Output.CommentScriptContents

|  |  |
| --- | --- |
| Version added | 2.0.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Aliases | Core.CommentScriptContents |
| Used in | - *HTMLPurifier/Generator.php* on line 70 |

Determines whether or not HTML Purifier should attempt to fix up the
contents of script tags for legacy browsers with comments.

### Output.FixInnerHTML

|  |  |
| --- | --- |
| Version added | 4.3.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Used in | - *HTMLPurifier/Generator.php* on line 71 |

If true, HTML Purifier will protect against Internet Explorer's
mishandling of the `innerHTML` attribute by appending
a space to any attribute that does not contain angled brackets, spaces
or quotes, but contains a backtick. This slightly changes the
semantics of any given attribute, so if this is unacceptable and
you do not use `innerHTML` on any of your pages, you can
turn this directive off.

### Output.FlashCompat

|  |  |
| --- | --- |
| Version added | 4.1.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/Generator.php* on line 73 |

If true, HTML Purifier will generate Internet Explorer compatibility
code for all object code. This is highly recommended if you enable
[%HTML.SafeObject](#HTML.SafeObject).

### Output.Newline

|  |  |
| --- | --- |
| Version added | 2.0.1 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/Generator.php* on line 123 |

Newline string to format final output with. If left null, HTML Purifier
will auto-detect the default newline type of the system and use that;
you can manually override it here. Remember, \r\n is Windows, \r
is Mac, and \n is Unix.

### Output.SortAttr

|  |  |
| --- | --- |
| Version added | 3.2.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/Generator.php* on line 72 |

If true, HTML Purifier will sort attributes by name before writing them back
to the document, converting a tag like: `<el b="" a="" c="" />`
to `<el a="" b="" c="" />`. This is a workaround for
a bug in FCKeditor which causes it to swap attributes order, adding noise
to text diffs. If you're not seeing this bug, chances are, you don't need
this directive.

### Output.TidyFormat

|  |  |
| --- | --- |
| Version added | 1.1.1 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Aliases | Core.TidyFormat |
| Used in | - *HTMLPurifier/Generator.php* on line 104 |

Determines whether or not to run Tidy on the final output for pretty
formatting reasons, such as indentation and wrap.

This can greatly improve readability for editors who are hand-editing
the HTML, but is by no means necessary as HTML Purifier has already
fixed all major errors the HTML may have had. Tidy is a non-default
extension, and this directive will silently fail if Tidy is not
available.

If you are looking to make the overall look of your page's source
better, I recommend running Tidy on the entire page rather than just
user-content (after all, the indentation relative to the containing
blocks will be incorrect).

## Test

### Test.ForceNoIconv

|  |  |
| --- | --- |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/Encoder.php* on lines 388, 439 |

When set to true, HTMLPurifier\_Encoder will act as if iconv does not exist
and use only pure PHP implementations.

## URI

### URI.AllowedSchemes

|  |  |
| --- | --- |
| Type | [Lookup array](#type-lookup) |
| Default | ``` array (   'http' => true,   'https' => true,   'mailto' => true,   'ftp' => true,   'nntp' => true,   'news' => true,   'tel' => true, ) ``` |
| Used in | - *HTMLPurifier/URISchemeRegistry.php* on line 48 |

Whitelist that defines the schemes that a URI is allowed to have. This
prevents XSS attacks from using pseudo-schemes like javascript or mocha.
There is also support for the `data` and `file`
URI schemes, but they are not enabled by default.

### URI.Base

|  |  |
| --- | --- |
| Version added | 2.1.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/URIDefinition.php* on line 77 |

The base URI is the URI of the document this purified HTML will be
inserted into. This information is important if HTML Purifier needs
to calculate absolute URIs from relative URIs, such as when [%URI.MakeAbsolute](#URI.MakeAbsolute)
is on. You may use a non-absolute URI for this value, but behavior
may vary ([%URI.MakeAbsolute](#URI.MakeAbsolute) deals nicely with both absolute and
relative paths, but forwards-compatibility is not guaranteed).
**Warning:** If set, the scheme on this URI
overrides the one specified by [%URI.DefaultScheme](#URI.DefaultScheme).

### URI.DefaultScheme

|  |  |
| --- | --- |
| Type | [String (or null)](#type-string) |
| Default | ``` 'http' ``` |
| Used in | - *HTMLPurifier/URIDefinition.php* on line 84 |

Defines through what scheme the output will be served, in order to
select the proper object validator when no scheme information is present.

Starting with HTML Purifier 4.9.0, the default scheme can be null, in
which case we reject all URIs which do not have explicit schemes.

### URI.DefinitionID

|  |  |
| --- | --- |
| Version added | 2.1.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |

Unique identifier for a custom-built URI definition. If you want
to add custom URIFilters, you must specify this value.

### URI.DefinitionRev

|  |  |
| --- | --- |
| Version added | 2.1.0 |
| Type | [Integer](#type-int) |
| Default | ``` 1 ``` |

Revision identifier for your custom definition. See
[%HTML.DefinitionRev](#HTML.DefinitionRev) for details.

### URI.Disable

|  |  |
| --- | --- |
| Version added | 1.3.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Aliases | Attr.DisableURI |
| Used in | - *HTMLPurifier/AttrDef/URI.php* on line 47 |

Disables all URIs in all forms. Not sure why you'd want to do that
(after all, the Internet's founded on the notion of a hyperlink).

### URI.DisableExternal

|  |  |
| --- | --- |
| Version added | 1.2.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

Disables links to external websites. This is a highly effective anti-spam
and anti-pagerank-leech measure, but comes at a hefty price: nolinks or
images outside of your domain will be allowed. Non-linkified URIs will
still be preserved. If you want to be able to link to subdomains or use
absolute URIs, specify [%URI.Host](#URI.Host) for your website.

### URI.DisableExternalResources

|  |  |
| --- | --- |
| Version added | 1.3.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

Disables the embedding of external resources, preventing users from
embedding things like images from other hosts. This prevents access
tracking (good for email viewers), bandwidth leeching, cross-site request
forging, goatse.cx posting, and other nasties, but also results in a loss
of end-user functionality (they can't directly post a pic they posted from
Flickr anymore). Use it if you don't have a robust user-content moderation
team.

### URI.DisableResources

|  |  |
| --- | --- |
| Version added | 4.2.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

Disables embedding resources, essentially meaning no pictures. You can
still link to them though. See [%URI.DisableExternalResources](#URI.DisableExternalResources) for why
this might be a good idea.

*Note:* While this directive has been available since 1.3.0,
it didn't actually start doing anything until 4.2.0.

### URI.Host

|  |  |
| --- | --- |
| Version added | 1.2.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/URIDefinition.php* on line 76 - *HTMLPurifier/URIScheme.php* on line 89 |

Defines the domain name of the server, so we can determine whether or
an absolute URI is from your website or not. Not strictly necessary,
as users should be using relative URIs to reference resources on your
website. It will, however, let you use absolute URIs to link to
subdomains of the domain you post here: i.e. example.com will allow
sub.example.com. However, higher up domains will still be excluded:
if you set [%URI.Host](#URI.Host) to sub.example.com, example.com will be blocked.
**Note:** This directive overrides [%URI.Base](#URI.Base) because
a given page may be on a sub-domain, but you wish HTML Purifier to be
more relaxed and allow some of the parent domains too.

### URI.HostBlacklist

|  |  |
| --- | --- |
| Version added | 1.3.0 |
| Type | [Array list](#type-list) |
| Default | ``` array() ``` |
| Used in | - *HTMLPurifier/URIFilter/HostBlacklist.php* on line 25 |

List of strings that are forbidden in the host of any URI. Use it to kill
domain names of spam, etc. Note that it will catch anything in the domain,
so moo.com will catch moo.com.example.com.

### URI.MakeAbsolute

|  |  |
| --- | --- |
| Version added | 2.1.0 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |

Converts all URIs into absolute forms. This is useful when the HTML
being filtered assumes a specific base path, but will actually be
viewed in a different context (and setting an alternate base URI is
not possible). [%URI.Base](#URI.Base) must be set for this directive to work.

### URI.Munge

|  |  |
| --- | --- |
| Version added | 1.3.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |

Munges all browsable (usually http, https and ftp)
absolute URIs into another URI, usually a URI redirection service.
This directive accepts a URI, formatted with a `%s` where
the url-encoded original URI should be inserted (sample:
`http://www.google.com/url?q=%s`).

Uses for this directive:

- Prevent PageRank leaks, while being fairly transparent
  to users (you may also want to add some client side JavaScript to
  override the text in the statusbar). **Notice**:
  Many security experts believe that this form of protection does not deter spam-bots.
- Redirect users to a splash page telling them they are leaving your
  website. While this is poor usability practice, it is often mandated
  in corporate environments.

Prior to HTML Purifier 3.1.1, this directive also enabled the munging
of browsable external resources, which could break things if your redirection
script was a splash page or used `meta` tags. To revert to
previous behavior, please use [%URI.MungeResources](#URI.MungeResources).

You may want to also use [%URI.MungeSecretKey](#URI.MungeSecretKey) along with this directive
in order to enforce what URIs your redirector script allows. Open
redirector scripts can be a security risk and negatively affect the
reputation of your domain name.

Starting with HTML Purifier 3.1.1, there is also these substitutions:

| Key | Description | Example `<a href="">` |
| --- | --- | --- |
| %r | 1 - The URI embeds a resource (blank) - The URI is merely a link |  |
| %n | The name of the tag this URI came from | a |
| %m | The name of the attribute this URI came from | href |
| %p | The name of the CSS property this URI came from, or blank if irrelevant |  |

Admittedly, these letters are somewhat arbitrary; the only stipulation
was that they couldn't be a through f. r is for resource (I would have preferred
e, but you take what you can get), n is for name, m
was picked because it came after n (and I couldn't use a), p is for
property.

### URI.MungeResources

|  |  |
| --- | --- |
| Version added | 3.1.1 |
| Type | [Boolean](#type-bool) |
| Default | ``` false ``` |
| Used in | - *HTMLPurifier/URIFilter/Munge.php* on line 48 |

If true, any URI munging directives like [%URI.Munge](#URI.Munge)
will also apply to embedded resources, such as `<img src="">`.
Be careful enabling this directive if you have a redirector script
that does not use the `Location` HTTP header; all of your images
and other embedded resources will break.

**Warning:** It is strongly advised you use this in conjunction
[%URI.MungeSecretKey](#URI.MungeSecretKey) to mitigate the security risk of an open redirector.

### URI.MungeSecretKey

|  |  |
| --- | --- |
| Version added | 3.1.1 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/URIFilter/Munge.php* on line 49 |

This directive enables secure checksum generation along with [%URI.Munge](#URI.Munge).
It should be set to a secure key that is not shared with anyone else.
The checksum can be placed in the URI using %t. Use of this checksum
affords an additional level of protection by allowing a redirector
to check if a URI has passed through HTML Purifier with this line:

```
$checksum === hash_hmac("sha256", $url, $secret_key)
```

If the output is TRUE, the redirector script should accept the URI.

Please note that it would still be possible for an attacker to procure
secure hashes en-mass by abusing your website's Preview feature or the
like, but this service affords an additional level of protection
that should be combined with website blacklisting.

Remember this has no effect if [%URI.Munge](#URI.Munge) is not on.

### URI.OverrideAllowedSchemes

|  |  |
| --- | --- |
| Type | [Boolean](#type-bool) |
| Default | ``` true ``` |
| Used in | - *HTMLPurifier/URISchemeRegistry.php* on line 49 |

If this is set to true (which it is by default), you can override
[%URI.AllowedSchemes](#URI.AllowedSchemes) by simply registering a HTMLPurifier\_URIScheme to the
registry. If false, you will also have to update that directive in order
to add more schemes.

### URI.SafeIframeRegexp

|  |  |
| --- | --- |
| Version added | 4.4.0 |
| Type | [String (or null)](#type-string) |
| Default | ``` NULL ``` |
| Used in | - *HTMLPurifier/URIFilter/SafeIframe.php* on line 35 |

A PCRE regular expression that will be matched against an iframe URI. This is
a relatively inflexible scheme, but works well enough for the most common
use-case of iframes: embedded video. This directive only has an effect if
[%HTML.SafeIframe](#HTML.SafeIframe) is enabled. Here are some example values:

- `%^http://www.youtube.com/embed/%` - Allow YouTube videos
- `%^http://player.vimeo.com/video/%` - Allow Vimeo videos
- `%^http://(www.youtube.com/embed/|player.vimeo.com/video/)%` - Allow both

Note that this directive does not give you enough granularity to, say, disable
all `autoplay` videos. Pipe up on the HTML Purifier forums if this
is a capability you want.
