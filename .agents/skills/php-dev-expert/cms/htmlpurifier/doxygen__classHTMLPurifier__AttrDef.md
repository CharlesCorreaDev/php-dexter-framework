# HTMLPurifier: HTMLPurifier_AttrDef Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTMLPurifier__AttrDef.html

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
[Public Attributes](#pub-attribs) |
[Protected Member Functions](#pro-methods)

HTMLPurifier\_AttrDef Class Reference

Base class for all validating attribute definitions.
[More...](doxygen__classHTMLPurifier__AttrDef.md#details)

Inheritance diagram for HTMLPurifier\_AttrDef:

![](classHTMLPurifier__AttrDef.png)

[List of all members.](doxygen__classHTMLPurifier__AttrDef-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [validate](doxygen__classHTMLPurifier__AttrDef.md#ace1ff1a828cc98b27018cf894d1deca2) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [parseCDATA](doxygen__classHTMLPurifier__AttrDef.md#a5260aa6ee70d13a454297a1d78ede45f) ($string) |
|  | Convenience method that parses a string as if it were CDATA. |
|  | [make](doxygen__classHTMLPurifier__AttrDef.md#ac18259010bd7a7755cd4e1b47b54a549) ($string) |
|  | Factory method for creating this class from a string. |
|  | [validate](doxygen__classHTMLPurifier__AttrDef.md#ace1ff1a828cc98b27018cf894d1deca2) ($string, $config, $context) |
|  | Validates and cleans passed string according to a definition. |
|  | [parseCDATA](doxygen__classHTMLPurifier__AttrDef.md#a5260aa6ee70d13a454297a1d78ede45f) ($string) |
|  | Convenience method that parses a string as if it were CDATA. |
|  | [make](doxygen__classHTMLPurifier__AttrDef.md#ac18259010bd7a7755cd4e1b47b54a549) ($string) |
|  | Factory method for creating this class from a string. |
| Public Attributes | |
|  | [$minimized](doxygen__classHTMLPurifier__AttrDef.md#a970c87d71a9c82781741194fd67a62df) = false |
|  | Tells us whether or not an HTML attribute is minimized. |
|  | [$required](doxygen__classHTMLPurifier__AttrDef.md#a900a27ff615bbe5e080f04e46d584367) = false |
|  | Tells us whether or not an HTML attribute is required. |
| Protected Member Functions | |
|  | [mungeRgb](doxygen__classHTMLPurifier__AttrDef.md#aa328733d85f54dcac5ee892f82bd662e) ($string) |
|  | Removes spaces from rgb(0, 0, 0) so that shorthand CSS properties work properly. |
|  | [expandCSSEscape](doxygen__classHTMLPurifier__AttrDef.md#aacd0d096844eaa658678b459cee9d703) ($string) |
|  | Parses a possibly escaped CSS string and returns the "pure" version of it. |
|  | [mungeRgb](doxygen__classHTMLPurifier__AttrDef.md#aa328733d85f54dcac5ee892f82bd662e) ($string) |
|  | Removes spaces from rgb(0, 0, 0) so that shorthand CSS properties work properly. |
|  | [expandCSSEscape](doxygen__classHTMLPurifier__AttrDef.md#aacd0d096844eaa658678b459cee9d703) ($string) |
|  | Parses a possibly escaped CSS string and returns the "pure" version of it. |

---

## Detailed Description

Base class for all validating attribute definitions.

This family of classes forms the core for not only HTML attribute validation, but also any sort of string that needs to be validated or cleaned (which means CSS properties and composite definitions are defined here too). Besides defining (through code) what precisely makes the string valid, subclasses are also responsible for cleaning the code if possible.

Definition at line [13](doxygen__AttrDef_8php_source.md#l00013) of file [AttrDef.php](doxygen__AttrDef_8php_source.md).

---

## Member Function Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef::expandCSSEscape | ( | $ | *string* | ) | `[protected]` |

Parses a possibly escaped CSS string and returns the "pure" version of it.

Definition at line [89](doxygen__AttrDef_8php_source.md#l00089) of file [AttrDef.php](doxygen__AttrDef_8php_source.md).

References [HTMLPurifier\_Encoder::cleanUTF8()](doxygen__Encoder_8php_source.md#l00109), and [HTMLPurifier\_Encoder::unichr()](doxygen__Encoder_8php_source.md#l00288).

Referenced by [HTMLPurifier\_AttrDef\_CSS\_URI::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09898), and [HTMLPurifier\_AttrDef\_CSS\_FontFamily::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09391).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef::expandCSSEscape | ( | $ | *string* | ) | `[protected]` |

Parses a possibly escaped CSS string and returns the "pure" version of it.

Definition at line [476](doxygen__HTMLPurifier_8standalone_8php_source.md#l00476) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

References [HTMLPurifier\_Encoder::cleanUTF8()](doxygen__Encoder_8php_source.md#l00109), and [HTMLPurifier\_Encoder::unichr()](doxygen__Encoder_8php_source.md#l00288).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef::make | ( | $ | *string* | ) |  |

Factory method for creating this class from a string.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $string | String construction info |

**Returns:**
:   Created AttrDef object corresponding to $string

Reimplemented in [HTMLPurifier\_AttrDef\_Clone](doxygen__classHTMLPurifier__AttrDef__Clone.md#a89b35bf7694347b513cc93073ee8b846), [HTMLPurifier\_AttrDef\_Enum](doxygen__classHTMLPurifier__AttrDef__Enum.md#ab2992164766fee262e6f60db84635456), [HTMLPurifier\_AttrDef\_HTML\_Bool](doxygen__classHTMLPurifier__AttrDef__HTML__Bool.md#ab73069a01ae55b134a25431b7accae3f), [HTMLPurifier\_AttrDef\_HTML\_Pixels](doxygen__classHTMLPurifier__AttrDef__HTML__Pixels.md#a4d27cb83b6a1915191e2aea7e0da2763), [HTMLPurifier\_AttrDef\_URI](doxygen__classHTMLPurifier__AttrDef__URI.md#af16c627201a453ea6aaf3add966e358d), [HTMLPurifier\_AttrDef\_Clone](doxygen__classHTMLPurifier__AttrDef__Clone.md#a89b35bf7694347b513cc93073ee8b846), [HTMLPurifier\_AttrDef\_Enum](doxygen__classHTMLPurifier__AttrDef__Enum.md#ab2992164766fee262e6f60db84635456), [HTMLPurifier\_AttrDef\_URI](doxygen__classHTMLPurifier__AttrDef__URI.md#af16c627201a453ea6aaf3add966e358d), [HTMLPurifier\_AttrDef\_HTML\_Bool](doxygen__classHTMLPurifier__AttrDef__HTML__Bool.md#ab73069a01ae55b134a25431b7accae3f), and [HTMLPurifier\_AttrDef\_HTML\_Pixels](doxygen__classHTMLPurifier__AttrDef__HTML__Pixels.md#a4d27cb83b6a1915191e2aea7e0da2763).

Definition at line [456](doxygen__HTMLPurifier_8standalone_8php_source.md#l00456) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef::make | ( | $ | *string* | ) |  |

Factory method for creating this class from a string.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $string | String construction info |

**Returns:**
:   Created AttrDef object corresponding to $string

Reimplemented in [HTMLPurifier\_AttrDef\_Clone](doxygen__classHTMLPurifier__AttrDef__Clone.md#a89b35bf7694347b513cc93073ee8b846), [HTMLPurifier\_AttrDef\_Enum](doxygen__classHTMLPurifier__AttrDef__Enum.md#ab2992164766fee262e6f60db84635456), [HTMLPurifier\_AttrDef\_HTML\_Bool](doxygen__classHTMLPurifier__AttrDef__HTML__Bool.md#ab73069a01ae55b134a25431b7accae3f), [HTMLPurifier\_AttrDef\_HTML\_Pixels](doxygen__classHTMLPurifier__AttrDef__HTML__Pixels.md#a4d27cb83b6a1915191e2aea7e0da2763), [HTMLPurifier\_AttrDef\_URI](doxygen__classHTMLPurifier__AttrDef__URI.md#af16c627201a453ea6aaf3add966e358d), [HTMLPurifier\_AttrDef\_Clone](doxygen__classHTMLPurifier__AttrDef__Clone.md#a89b35bf7694347b513cc93073ee8b846), [HTMLPurifier\_AttrDef\_Enum](doxygen__classHTMLPurifier__AttrDef__Enum.md#ab2992164766fee262e6f60db84635456), [HTMLPurifier\_AttrDef\_URI](doxygen__classHTMLPurifier__AttrDef__URI.md#af16c627201a453ea6aaf3add966e358d), [HTMLPurifier\_AttrDef\_HTML\_Bool](doxygen__classHTMLPurifier__AttrDef__HTML__Bool.md#ab73069a01ae55b134a25431b7accae3f), and [HTMLPurifier\_AttrDef\_HTML\_Pixels](doxygen__classHTMLPurifier__AttrDef__HTML__Pixels.md#a4d27cb83b6a1915191e2aea7e0da2763).

Definition at line [69](doxygen__AttrDef_8php_source.md#l00069) of file [AttrDef.php](doxygen__AttrDef_8php_source.md).

Referenced by [HTMLPurifier\_AttrDef\_CSS\_Length::\_\_construct()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09628), and [HTMLPurifier\_AttrDef\_CSS\_Length::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09633).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef::mungeRgb | ( | $ | *string* | ) | `[protected]` |

Removes spaces from rgb(0, 0, 0) so that shorthand CSS properties work properly.

THIS IS A HACK!

Definition at line [81](doxygen__AttrDef_8php_source.md#l00081) of file [AttrDef.php](doxygen__AttrDef_8php_source.md).

Referenced by [HTMLPurifier\_AttrDef\_CSS\_Border::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08974), and [HTMLPurifier\_AttrDef\_CSS\_Background::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08756).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef::mungeRgb | ( | $ | *string* | ) | `[protected]` |

Removes spaces from rgb(0, 0, 0) so that shorthand CSS properties work properly.

THIS IS A HACK!

Definition at line [468](doxygen__HTMLPurifier_8standalone_8php_source.md#l00468) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef::parseCDATA | ( | $ | *string* | ) |  |

Convenience method that parses a string as if it were CDATA.

This method process a string in the manner specified at <<http://www.w3.org/TR/html4/types.html#h-6.2>> by removing leading and trailing whitespace, ignoring line feeds, and replacing carriage returns and tabs with spaces. While most useful for HTML attributes specified as CDATA, it can also be applied to most CSS values.

**Note:**
:   This method is not entirely standards compliant, as trim() removes more types of whitespace than specified in the spec. In practice, this is rarely a problem, as those extra characters usually have already been removed by [HTMLPurifier\_Encoder](doxygen__classHTMLPurifier__Encoder.md "A UTF-8 specific character encoder that handles cleaning and transforming.").

**Warning:**
:   This processing is inconsistent with XML's whitespace handling as specified by section 3.3.3 and referenced XHTML 1.0 section 4.7. However, note that we are NOT necessarily parsing XML, thus, this behavior may still be correct. We assume that newlines have been normalized.

Definition at line [445](doxygen__HTMLPurifier_8standalone_8php_source.md#l00445) of file [HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTMLPurifier\_AttrDef::parseCDATA | ( | $ | *string* | ) |  |

Convenience method that parses a string as if it were CDATA.

This method process a string in the manner specified at <<http://www.w3.org/TR/html4/types.html#h-6.2>> by removing leading and trailing whitespace, ignoring line feeds, and replacing carriage returns and tabs with spaces. While most useful for HTML attributes specified as CDATA, it can also be applied to most CSS values.

**Note:**
:   This method is not entirely standards compliant, as trim() removes more types of whitespace than specified in the spec. In practice, this is rarely a problem, as those extra characters usually have already been removed by [HTMLPurifier\_Encoder](doxygen__classHTMLPurifier__Encoder.md "A UTF-8 specific character encoder that handles cleaning and transforming.").

**Warning:**
:   This processing is inconsistent with XML's whitespace handling as specified by section 3.3.3 and referenced XHTML 1.0 section 4.7. However, note that we are NOT necessarily parsing XML, thus, this behavior may still be correct. We assume that newlines have been normalized.

Definition at line [58](doxygen__AttrDef_8php_source.md#l00058) of file [AttrDef.php](doxygen__AttrDef_8php_source.md).

Referenced by [HTMLPurifier\_AttrDef\_HTML\_LinkTypes::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l10313), [HTMLPurifier\_AttrDef\_CSS\_URI::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09898), [HTMLPurifier\_AttrDef\_CSS\_TextDecoration::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09851), [HTMLPurifier\_AttrDef\_CSS\_Percentage::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09820), [HTMLPurifier\_AttrDef\_CSS\_Multiple::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09778), [HTMLPurifier\_AttrDef\_CSS\_ListStyle::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09684), [HTMLPurifier\_AttrDef\_CSS\_Length::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09633), [HTMLPurifier\_AttrDef\_CSS\_Font::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09228), [HTMLPurifier\_AttrDef\_CSS\_Filter::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l09161), [HTMLPurifier\_AttrDef\_CSS\_Border::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08974), [HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08874), [HTMLPurifier\_AttrDef\_CSS\_Background::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08756), [HTMLPurifier\_AttrDef\_CSS\_Number::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08664), [HTMLPurifier\_AttrDef\_URI::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08587), [HTMLPurifier\_AttrDef\_Text::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08554), [HTMLPurifier\_AttrDef\_Integer::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08403), and [HTMLPurifier\_AttrDef\_CSS::validate()](doxygen__HTMLPurifier_8standalone_8php_source.md#l08196).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef::validate | ( | $ | *string*, |
|  |  | $ | *config*, |
|  |  | $ | *context* |
|  | ) |  | `[abstract]` |

Validates and cleans passed string according to a definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $string | String to be validated and cleaned. |
    | $config | Mandatory [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object. |
    | $context | Mandatory HTMLPurifier\_AttrContext object. |

Reimplemented in [HTMLPurifier\_AttrDef\_Clone](doxygen__classHTMLPurifier__AttrDef__Clone.md#ace270eb306c3cf6fcc966317cd54f8f9), [HTMLPurifier\_AttrDef\_CSS\_AlphaValue](doxygen__classHTMLPurifier__AttrDef__CSS__AlphaValue.md#a9b6e090e417ca736003632276b99ff81), [HTMLPurifier\_AttrDef\_CSS\_Background](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md#a2ed23ea624d8b2ded7979b33e259b834), [HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md#a330c8e7bba0fb4f241bdc73b93af21b6), [HTMLPurifier\_AttrDef\_CSS\_Border](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md#a844bfa8c5106dd37f5e56f972b7cf9d9), [HTMLPurifier\_AttrDef\_CSS\_Color](doxygen__classHTMLPurifier__AttrDef__CSS__Color.md#af72a63bb49c6541a20e046859f935515), [HTMLPurifier\_AttrDef\_CSS\_Composite](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md#a4f145b8a5c7a853ea01927714708ab40), [HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md#a2985a1b17d7ce52fc0baaac4d7723891), [HTMLPurifier\_AttrDef\_CSS\_Filter](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md#a8f258367099bd1f1b6b900165e1f5e4d), [HTMLPurifier\_AttrDef\_CSS\_Font](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md#a8fbc1f20fd2dabc9c5b5a59338e647ac), [HTMLPurifier\_AttrDef\_CSS\_FontFamily](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md#adaf9df746058627ec0c049430fb7ad5d), [HTMLPurifier\_AttrDef\_CSS\_Ident](doxygen__classHTMLPurifier__AttrDef__CSS__Ident.md#aaae669ed95c45e33fbc79ae68459077c), [HTMLPurifier\_AttrDef\_CSS\_ImportantDecorator](doxygen__classHTMLPurifier__AttrDef__CSS__ImportantDecorator.md#a8a9cd2da389c44090b9946f353812d31), [HTMLPurifier\_AttrDef\_CSS\_Length](doxygen__classHTMLPurifier__AttrDef__CSS__Length.md#ad02120ae395d4bba9a978630b7024cbb), [HTMLPurifier\_AttrDef\_CSS\_ListStyle](doxygen__classHTMLPurifier__AttrDef__CSS__ListStyle.md#a7f8390636297da07df77965be3bc4bc1), [HTMLPurifier\_AttrDef\_CSS\_Multiple](doxygen__classHTMLPurifier__AttrDef__CSS__Multiple.md#ac1ce16e5b3fe062e3254a82b6b05fec0), [HTMLPurifier\_AttrDef\_CSS\_Number](doxygen__classHTMLPurifier__AttrDef__CSS__Number.md#a244b9c43b189f376676d2b0b67d1b4cf), [HTMLPurifier\_AttrDef\_CSS\_Percentage](doxygen__classHTMLPurifier__AttrDef__CSS__Percentage.md#a829a101293ed4b8ba023fee78a317998), [HTMLPurifier\_AttrDef\_CSS\_TextDecoration](doxygen__classHTMLPurifier__AttrDef__CSS__TextDecoration.md#a11fe370cb5ffc3b14c2d08d1d0353876), [HTMLPurifier\_AttrDef\_CSS\_URI](doxygen__classHTMLPurifier__AttrDef__CSS__URI.md#ad04ca62bfb7bf5d281cec47c597cf200), [HTMLPurifier\_AttrDef\_CSS](doxygen__classHTMLPurifier__AttrDef__CSS.md#ace0c1bcf604a2fd44b62b0564ec1a6de), [HTMLPurifier\_AttrDef\_Enum](doxygen__classHTMLPurifier__AttrDef__Enum.md#abd19eb5ae772435d88664e53aa6900ab), [HTMLPurifier\_AttrDef\_HTML\_Bool](doxygen__classHTMLPurifier__AttrDef__HTML__Bool.md#aba41bf423cd3a8c9e2ffc31e138e9d68), [HTMLPurifier\_AttrDef\_HTML\_Color](doxygen__classHTMLPurifier__AttrDef__HTML__Color.md#ab7bfcee3090f851f95d53eeed8a5a8f6), [HTMLPurifier\_AttrDef\_HTML\_FrameTarget](doxygen__classHTMLPurifier__AttrDef__HTML__FrameTarget.md#a8862dd31211da7035a6ff57a99badd88), [HTMLPurifier\_AttrDef\_HTML\_ID](doxygen__classHTMLPurifier__AttrDef__HTML__ID.md#a19e1d09ba0961fd2d64c35eb3c22957a), [HTMLPurifier\_AttrDef\_HTML\_Length](doxygen__classHTMLPurifier__AttrDef__HTML__Length.md#a4899718554d545c292792d7f7eb15c8b), [HTMLPurifier\_AttrDef\_HTML\_LinkTypes](doxygen__classHTMLPurifier__AttrDef__HTML__LinkTypes.md#ab1e067c121979d1b63125e16646cf1b1), [HTMLPurifier\_AttrDef\_HTML\_MultiLength](doxygen__classHTMLPurifier__AttrDef__HTML__MultiLength.md#a4f1d7ed98745371ad4b00e79de71013b), [HTMLPurifier\_AttrDef\_HTML\_Nmtokens](doxygen__classHTMLPurifier__AttrDef__HTML__Nmtokens.md#a336b7483eff4c0f5be7ba853d733b0cd), [HTMLPurifier\_AttrDef\_HTML\_Pixels](doxygen__classHTMLPurifier__AttrDef__HTML__Pixels.md#a87d84a5a93ea287a239aa2c8b2f9632c), [HTMLPurifier\_AttrDef\_Integer](doxygen__classHTMLPurifier__AttrDef__Integer.md#af59cbb87c7f5cc92e79f9e4ebcfb1f46), [HTMLPurifier\_AttrDef\_Lang](doxygen__classHTMLPurifier__AttrDef__Lang.md#a6f17a3a8e59a27e9dea0bd9494ec158c), [HTMLPurifier\_AttrDef\_Text](doxygen__classHTMLPurifier__AttrDef__Text.md#a8aaed2fdd47742cbd24bc70f08afece0), [HTMLPurifier\_AttrDef\_URI\_Email\_SimpleCheck](doxygen__classHTMLPurifier__AttrDef__URI__Email__SimpleCheck.md#ab59eb8d68c2cefed8c58d93e741aea0f), [HTMLPurifier\_AttrDef\_URI\_Host](doxygen__classHTMLPurifier__AttrDef__URI__Host.md#acebcd21c25862e8f3db07b829163bf77), [HTMLPurifier\_AttrDef\_URI\_IPv4](doxygen__classHTMLPurifier__AttrDef__URI__IPv4.md#a28a583f0503d93efd25c586e2a8f24eb), [HTMLPurifier\_AttrDef\_URI\_IPv6](doxygen__classHTMLPurifier__AttrDef__URI__IPv6.md#a06719a4cb80fe8c83f905f5debb22177), [HTMLPurifier\_AttrDef\_URI](doxygen__classHTMLPurifier__AttrDef__URI.md#a25866f9117d08ef97a81d86662edc1fb), [HTMLPurifier\_AttrDef\_CSS](doxygen__classHTMLPurifier__AttrDef__CSS.md#ace0c1bcf604a2fd44b62b0564ec1a6de), [HTMLPurifier\_AttrDef\_Clone](doxygen__classHTMLPurifier__AttrDef__Clone.md#ace270eb306c3cf6fcc966317cd54f8f9), [HTMLPurifier\_AttrDef\_Enum](doxygen__classHTMLPurifier__AttrDef__Enum.md#abd19eb5ae772435d88664e53aa6900ab), [HTMLPurifier\_AttrDef\_Integer](doxygen__classHTMLPurifier__AttrDef__Integer.md#af59cbb87c7f5cc92e79f9e4ebcfb1f46), [HTMLPurifier\_AttrDef\_Lang](doxygen__classHTMLPurifier__AttrDef__Lang.md#a6f17a3a8e59a27e9dea0bd9494ec158c), [HTMLPurifier\_AttrDef\_Text](doxygen__classHTMLPurifier__AttrDef__Text.md#a8aaed2fdd47742cbd24bc70f08afece0), [HTMLPurifier\_AttrDef\_URI](doxygen__classHTMLPurifier__AttrDef__URI.md#a25866f9117d08ef97a81d86662edc1fb), [HTMLPurifier\_AttrDef\_CSS\_Number](doxygen__classHTMLPurifier__AttrDef__CSS__Number.md#a244b9c43b189f376676d2b0b67d1b4cf), [HTMLPurifier\_AttrDef\_CSS\_AlphaValue](doxygen__classHTMLPurifier__AttrDef__CSS__AlphaValue.md#a9b6e090e417ca736003632276b99ff81), [HTMLPurifier\_AttrDef\_CSS\_Background](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md#a2ed23ea624d8b2ded7979b33e259b834), [HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md#a330c8e7bba0fb4f241bdc73b93af21b6), [HTMLPurifier\_AttrDef\_CSS\_Border](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md#a844bfa8c5106dd37f5e56f972b7cf9d9), [HTMLPurifier\_AttrDef\_CSS\_Color](doxygen__classHTMLPurifier__AttrDef__CSS__Color.md#af72a63bb49c6541a20e046859f935515), [HTMLPurifier\_AttrDef\_CSS\_Composite](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md#a4f145b8a5c7a853ea01927714708ab40), [HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md#a2985a1b17d7ce52fc0baaac4d7723891), [HTMLPurifier\_AttrDef\_CSS\_Filter](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md#a8f258367099bd1f1b6b900165e1f5e4d), [HTMLPurifier\_AttrDef\_CSS\_Font](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md#a8fbc1f20fd2dabc9c5b5a59338e647ac), [HTMLPurifier\_AttrDef\_CSS\_FontFamily](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md#adaf9df746058627ec0c049430fb7ad5d), [HTMLPurifier\_AttrDef\_CSS\_Ident](doxygen__classHTMLPurifier__AttrDef__CSS__Ident.md#aaae669ed95c45e33fbc79ae68459077c), [HTMLPurifier\_AttrDef\_CSS\_ImportantDecorator](doxygen__classHTMLPurifier__AttrDef__CSS__ImportantDecorator.md#a8a9cd2da389c44090b9946f353812d31), [HTMLPurifier\_AttrDef\_CSS\_Length](doxygen__classHTMLPurifier__AttrDef__CSS__Length.md#ad02120ae395d4bba9a978630b7024cbb), [HTMLPurifier\_AttrDef\_CSS\_ListStyle](doxygen__classHTMLPurifier__AttrDef__CSS__ListStyle.md#a7f8390636297da07df77965be3bc4bc1), [HTMLPurifier\_AttrDef\_CSS\_Multiple](doxygen__classHTMLPurifier__AttrDef__CSS__Multiple.md#ac1ce16e5b3fe062e3254a82b6b05fec0), [HTMLPurifier\_AttrDef\_CSS\_Percentage](doxygen__classHTMLPurifier__AttrDef__CSS__Percentage.md#a829a101293ed4b8ba023fee78a317998), [HTMLPurifier\_AttrDef\_CSS\_TextDecoration](doxygen__classHTMLPurifier__AttrDef__CSS__TextDecoration.md#a11fe370cb5ffc3b14c2d08d1d0353876), [HTMLPurifier\_AttrDef\_CSS\_URI](doxygen__classHTMLPurifier__AttrDef__CSS__URI.md#ad04ca62bfb7bf5d281cec47c597cf200), [HTMLPurifier\_AttrDef\_HTML\_Bool](doxygen__classHTMLPurifier__AttrDef__HTML__Bool.md#aba41bf423cd3a8c9e2ffc31e138e9d68), [HTMLPurifier\_AttrDef\_HTML\_Nmtokens](doxygen__classHTMLPurifier__AttrDef__HTML__Nmtokens.md#a336b7483eff4c0f5be7ba853d733b0cd), [HTMLPurifier\_AttrDef\_HTML\_Color](doxygen__classHTMLPurifier__AttrDef__HTML__Color.md#ab7bfcee3090f851f95d53eeed8a5a8f6), [HTMLPurifier\_AttrDef\_HTML\_FrameTarget](doxygen__classHTMLPurifier__AttrDef__HTML__FrameTarget.md#a8862dd31211da7035a6ff57a99badd88), [HTMLPurifier\_AttrDef\_HTML\_ID](doxygen__classHTMLPurifier__AttrDef__HTML__ID.md#a19e1d09ba0961fd2d64c35eb3c22957a), [HTMLPurifier\_AttrDef\_HTML\_Pixels](doxygen__classHTMLPurifier__AttrDef__HTML__Pixels.md#a87d84a5a93ea287a239aa2c8b2f9632c), [HTMLPurifier\_AttrDef\_HTML\_Length](doxygen__classHTMLPurifier__AttrDef__HTML__Length.md#a4899718554d545c292792d7f7eb15c8b), [HTMLPurifier\_AttrDef\_HTML\_LinkTypes](doxygen__classHTMLPurifier__AttrDef__HTML__LinkTypes.md#ab1e067c121979d1b63125e16646cf1b1), [HTMLPurifier\_AttrDef\_HTML\_MultiLength](doxygen__classHTMLPurifier__AttrDef__HTML__MultiLength.md#a4f1d7ed98745371ad4b00e79de71013b), [HTMLPurifier\_AttrDef\_URI\_Host](doxygen__classHTMLPurifier__AttrDef__URI__Host.md#acebcd21c25862e8f3db07b829163bf77), [HTMLPurifier\_AttrDef\_URI\_IPv4](doxygen__classHTMLPurifier__AttrDef__URI__IPv4.md#a28a583f0503d93efd25c586e2a8f24eb), [HTMLPurifier\_AttrDef\_URI\_IPv6](doxygen__classHTMLPurifier__AttrDef__URI__IPv6.md#a06719a4cb80fe8c83f905f5debb22177), and [HTMLPurifier\_AttrDef\_URI\_Email\_SimpleCheck](doxygen__classHTMLPurifier__AttrDef__URI__Email__SimpleCheck.md#ab59eb8d68c2cefed8c58d93e741aea0f).

|  |  |  |  |
| --- | --- | --- | --- |
| HTMLPurifier\_AttrDef::validate | ( | $ | *string*, |
|  |  | $ | *config*, |
|  |  | $ | *context* |
|  | ) |  | `[abstract]` |

Validates and cleans passed string according to a definition.

**Parameters:**
:   |  |  |
    | --- | --- |
    | $string | String to be validated and cleaned. |
    | $config | Mandatory [HTMLPurifier\_Config](doxygen__classHTMLPurifier__Config.md "Configuration object that triggers customizable behavior.") object. |
    | $context | Mandatory HTMLPurifier\_AttrContext object. |

Reimplemented in [HTMLPurifier\_AttrDef\_Clone](doxygen__classHTMLPurifier__AttrDef__Clone.md#ace270eb306c3cf6fcc966317cd54f8f9), [HTMLPurifier\_AttrDef\_CSS\_AlphaValue](doxygen__classHTMLPurifier__AttrDef__CSS__AlphaValue.md#a9b6e090e417ca736003632276b99ff81), [HTMLPurifier\_AttrDef\_CSS\_Background](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md#a2ed23ea624d8b2ded7979b33e259b834), [HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md#a330c8e7bba0fb4f241bdc73b93af21b6), [HTMLPurifier\_AttrDef\_CSS\_Border](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md#a844bfa8c5106dd37f5e56f972b7cf9d9), [HTMLPurifier\_AttrDef\_CSS\_Color](doxygen__classHTMLPurifier__AttrDef__CSS__Color.md#af72a63bb49c6541a20e046859f935515), [HTMLPurifier\_AttrDef\_CSS\_Composite](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md#a4f145b8a5c7a853ea01927714708ab40), [HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md#a2985a1b17d7ce52fc0baaac4d7723891), [HTMLPurifier\_AttrDef\_CSS\_Filter](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md#a8f258367099bd1f1b6b900165e1f5e4d), [HTMLPurifier\_AttrDef\_CSS\_Font](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md#a8fbc1f20fd2dabc9c5b5a59338e647ac), [HTMLPurifier\_AttrDef\_CSS\_FontFamily](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md#adaf9df746058627ec0c049430fb7ad5d), [HTMLPurifier\_AttrDef\_CSS\_Ident](doxygen__classHTMLPurifier__AttrDef__CSS__Ident.md#aaae669ed95c45e33fbc79ae68459077c), [HTMLPurifier\_AttrDef\_CSS\_ImportantDecorator](doxygen__classHTMLPurifier__AttrDef__CSS__ImportantDecorator.md#a8a9cd2da389c44090b9946f353812d31), [HTMLPurifier\_AttrDef\_CSS\_Length](doxygen__classHTMLPurifier__AttrDef__CSS__Length.md#ad02120ae395d4bba9a978630b7024cbb), [HTMLPurifier\_AttrDef\_CSS\_ListStyle](doxygen__classHTMLPurifier__AttrDef__CSS__ListStyle.md#a7f8390636297da07df77965be3bc4bc1), [HTMLPurifier\_AttrDef\_CSS\_Multiple](doxygen__classHTMLPurifier__AttrDef__CSS__Multiple.md#ac1ce16e5b3fe062e3254a82b6b05fec0), [HTMLPurifier\_AttrDef\_CSS\_Number](doxygen__classHTMLPurifier__AttrDef__CSS__Number.md#a244b9c43b189f376676d2b0b67d1b4cf), [HTMLPurifier\_AttrDef\_CSS\_Percentage](doxygen__classHTMLPurifier__AttrDef__CSS__Percentage.md#a829a101293ed4b8ba023fee78a317998), [HTMLPurifier\_AttrDef\_CSS\_TextDecoration](doxygen__classHTMLPurifier__AttrDef__CSS__TextDecoration.md#a11fe370cb5ffc3b14c2d08d1d0353876), [HTMLPurifier\_AttrDef\_CSS\_URI](doxygen__classHTMLPurifier__AttrDef__CSS__URI.md#ad04ca62bfb7bf5d281cec47c597cf200), [HTMLPurifier\_AttrDef\_CSS](doxygen__classHTMLPurifier__AttrDef__CSS.md#ace0c1bcf604a2fd44b62b0564ec1a6de), [HTMLPurifier\_AttrDef\_Enum](doxygen__classHTMLPurifier__AttrDef__Enum.md#abd19eb5ae772435d88664e53aa6900ab), [HTMLPurifier\_AttrDef\_HTML\_Bool](doxygen__classHTMLPurifier__AttrDef__HTML__Bool.md#aba41bf423cd3a8c9e2ffc31e138e9d68), [HTMLPurifier\_AttrDef\_HTML\_Color](doxygen__classHTMLPurifier__AttrDef__HTML__Color.md#ab7bfcee3090f851f95d53eeed8a5a8f6), [HTMLPurifier\_AttrDef\_HTML\_FrameTarget](doxygen__classHTMLPurifier__AttrDef__HTML__FrameTarget.md#a8862dd31211da7035a6ff57a99badd88), [HTMLPurifier\_AttrDef\_HTML\_ID](doxygen__classHTMLPurifier__AttrDef__HTML__ID.md#a19e1d09ba0961fd2d64c35eb3c22957a), [HTMLPurifier\_AttrDef\_HTML\_Length](doxygen__classHTMLPurifier__AttrDef__HTML__Length.md#a4899718554d545c292792d7f7eb15c8b), [HTMLPurifier\_AttrDef\_HTML\_LinkTypes](doxygen__classHTMLPurifier__AttrDef__HTML__LinkTypes.md#ab1e067c121979d1b63125e16646cf1b1), [HTMLPurifier\_AttrDef\_HTML\_MultiLength](doxygen__classHTMLPurifier__AttrDef__HTML__MultiLength.md#a4f1d7ed98745371ad4b00e79de71013b), [HTMLPurifier\_AttrDef\_HTML\_Nmtokens](doxygen__classHTMLPurifier__AttrDef__HTML__Nmtokens.md#a336b7483eff4c0f5be7ba853d733b0cd), [HTMLPurifier\_AttrDef\_HTML\_Pixels](doxygen__classHTMLPurifier__AttrDef__HTML__Pixels.md#a87d84a5a93ea287a239aa2c8b2f9632c), [HTMLPurifier\_AttrDef\_Integer](doxygen__classHTMLPurifier__AttrDef__Integer.md#af59cbb87c7f5cc92e79f9e4ebcfb1f46), [HTMLPurifier\_AttrDef\_Lang](doxygen__classHTMLPurifier__AttrDef__Lang.md#a6f17a3a8e59a27e9dea0bd9494ec158c), [HTMLPurifier\_AttrDef\_Text](doxygen__classHTMLPurifier__AttrDef__Text.md#a8aaed2fdd47742cbd24bc70f08afece0), [HTMLPurifier\_AttrDef\_URI\_Email\_SimpleCheck](doxygen__classHTMLPurifier__AttrDef__URI__Email__SimpleCheck.md#ab59eb8d68c2cefed8c58d93e741aea0f), [HTMLPurifier\_AttrDef\_URI\_Host](doxygen__classHTMLPurifier__AttrDef__URI__Host.md#acebcd21c25862e8f3db07b829163bf77), [HTMLPurifier\_AttrDef\_URI\_IPv4](doxygen__classHTMLPurifier__AttrDef__URI__IPv4.md#a28a583f0503d93efd25c586e2a8f24eb), [HTMLPurifier\_AttrDef\_URI\_IPv6](doxygen__classHTMLPurifier__AttrDef__URI__IPv6.md#a06719a4cb80fe8c83f905f5debb22177), [HTMLPurifier\_AttrDef\_URI](doxygen__classHTMLPurifier__AttrDef__URI.md#a25866f9117d08ef97a81d86662edc1fb), [HTMLPurifier\_AttrDef\_CSS](doxygen__classHTMLPurifier__AttrDef__CSS.md#ace0c1bcf604a2fd44b62b0564ec1a6de), [HTMLPurifier\_AttrDef\_Clone](doxygen__classHTMLPurifier__AttrDef__Clone.md#ace270eb306c3cf6fcc966317cd54f8f9), [HTMLPurifier\_AttrDef\_Enum](doxygen__classHTMLPurifier__AttrDef__Enum.md#abd19eb5ae772435d88664e53aa6900ab), [HTMLPurifier\_AttrDef\_Integer](doxygen__classHTMLPurifier__AttrDef__Integer.md#af59cbb87c7f5cc92e79f9e4ebcfb1f46), [HTMLPurifier\_AttrDef\_Lang](doxygen__classHTMLPurifier__AttrDef__Lang.md#a6f17a3a8e59a27e9dea0bd9494ec158c), [HTMLPurifier\_AttrDef\_Text](doxygen__classHTMLPurifier__AttrDef__Text.md#a8aaed2fdd47742cbd24bc70f08afece0), [HTMLPurifier\_AttrDef\_URI](doxygen__classHTMLPurifier__AttrDef__URI.md#a25866f9117d08ef97a81d86662edc1fb), [HTMLPurifier\_AttrDef\_CSS\_Number](doxygen__classHTMLPurifier__AttrDef__CSS__Number.md#a244b9c43b189f376676d2b0b67d1b4cf), [HTMLPurifier\_AttrDef\_CSS\_AlphaValue](doxygen__classHTMLPurifier__AttrDef__CSS__AlphaValue.md#a9b6e090e417ca736003632276b99ff81), [HTMLPurifier\_AttrDef\_CSS\_Background](doxygen__classHTMLPurifier__AttrDef__CSS__Background.md#a2ed23ea624d8b2ded7979b33e259b834), [HTMLPurifier\_AttrDef\_CSS\_BackgroundPosition](doxygen__classHTMLPurifier__AttrDef__CSS__BackgroundPosition.md#a330c8e7bba0fb4f241bdc73b93af21b6), [HTMLPurifier\_AttrDef\_CSS\_Border](doxygen__classHTMLPurifier__AttrDef__CSS__Border.md#a844bfa8c5106dd37f5e56f972b7cf9d9), [HTMLPurifier\_AttrDef\_CSS\_Color](doxygen__classHTMLPurifier__AttrDef__CSS__Color.md#af72a63bb49c6541a20e046859f935515), [HTMLPurifier\_AttrDef\_CSS\_Composite](doxygen__classHTMLPurifier__AttrDef__CSS__Composite.md#a4f145b8a5c7a853ea01927714708ab40), [HTMLPurifier\_AttrDef\_CSS\_DenyElementDecorator](doxygen__classHTMLPurifier__AttrDef__CSS__DenyElementDecorator.md#a2985a1b17d7ce52fc0baaac4d7723891), [HTMLPurifier\_AttrDef\_CSS\_Filter](doxygen__classHTMLPurifier__AttrDef__CSS__Filter.md#a8f258367099bd1f1b6b900165e1f5e4d), [HTMLPurifier\_AttrDef\_CSS\_Font](doxygen__classHTMLPurifier__AttrDef__CSS__Font.md#a8fbc1f20fd2dabc9c5b5a59338e647ac), [HTMLPurifier\_AttrDef\_CSS\_FontFamily](doxygen__classHTMLPurifier__AttrDef__CSS__FontFamily.md#adaf9df746058627ec0c049430fb7ad5d), [HTMLPurifier\_AttrDef\_CSS\_Ident](doxygen__classHTMLPurifier__AttrDef__CSS__Ident.md#aaae669ed95c45e33fbc79ae68459077c), [HTMLPurifier\_AttrDef\_CSS\_ImportantDecorator](doxygen__classHTMLPurifier__AttrDef__CSS__ImportantDecorator.md#a8a9cd2da389c44090b9946f353812d31), [HTMLPurifier\_AttrDef\_CSS\_Length](doxygen__classHTMLPurifier__AttrDef__CSS__Length.md#ad02120ae395d4bba9a978630b7024cbb), [HTMLPurifier\_AttrDef\_CSS\_ListStyle](doxygen__classHTMLPurifier__AttrDef__CSS__ListStyle.md#a7f8390636297da07df77965be3bc4bc1), [HTMLPurifier\_AttrDef\_CSS\_Multiple](doxygen__classHTMLPurifier__AttrDef__CSS__Multiple.md#ac1ce16e5b3fe062e3254a82b6b05fec0), [HTMLPurifier\_AttrDef\_CSS\_Percentage](doxygen__classHTMLPurifier__AttrDef__CSS__Percentage.md#a829a101293ed4b8ba023fee78a317998), [HTMLPurifier\_AttrDef\_CSS\_TextDecoration](doxygen__classHTMLPurifier__AttrDef__CSS__TextDecoration.md#a11fe370cb5ffc3b14c2d08d1d0353876), [HTMLPurifier\_AttrDef\_CSS\_URI](doxygen__classHTMLPurifier__AttrDef__CSS__URI.md#ad04ca62bfb7bf5d281cec47c597cf200), [HTMLPurifier\_AttrDef\_HTML\_Bool](doxygen__classHTMLPurifier__AttrDef__HTML__Bool.md#aba41bf423cd3a8c9e2ffc31e138e9d68), [HTMLPurifier\_AttrDef\_HTML\_Nmtokens](doxygen__classHTMLPurifier__AttrDef__HTML__Nmtokens.md#a336b7483eff4c0f5be7ba853d733b0cd), [HTMLPurifier\_AttrDef\_HTML\_Color](doxygen__classHTMLPurifier__AttrDef__HTML__Color.md#ab7bfcee3090f851f95d53eeed8a5a8f6), [HTMLPurifier\_AttrDef\_HTML\_FrameTarget](doxygen__classHTMLPurifier__AttrDef__HTML__FrameTarget.md#a8862dd31211da7035a6ff57a99badd88), [HTMLPurifier\_AttrDef\_HTML\_ID](doxygen__classHTMLPurifier__AttrDef__HTML__ID.md#a19e1d09ba0961fd2d64c35eb3c22957a), [HTMLPurifier\_AttrDef\_HTML\_Pixels](doxygen__classHTMLPurifier__AttrDef__HTML__Pixels.md#a87d84a5a93ea287a239aa2c8b2f9632c), [HTMLPurifier\_AttrDef\_HTML\_Length](doxygen__classHTMLPurifier__AttrDef__HTML__Length.md#a4899718554d545c292792d7f7eb15c8b), [HTMLPurifier\_AttrDef\_HTML\_LinkTypes](doxygen__classHTMLPurifier__AttrDef__HTML__LinkTypes.md#ab1e067c121979d1b63125e16646cf1b1), [HTMLPurifier\_AttrDef\_HTML\_MultiLength](doxygen__classHTMLPurifier__AttrDef__HTML__MultiLength.md#a4f1d7ed98745371ad4b00e79de71013b), [HTMLPurifier\_AttrDef\_URI\_Host](doxygen__classHTMLPurifier__AttrDef__URI__Host.md#acebcd21c25862e8f3db07b829163bf77), [HTMLPurifier\_AttrDef\_URI\_IPv4](doxygen__classHTMLPurifier__AttrDef__URI__IPv4.md#a28a583f0503d93efd25c586e2a8f24eb), [HTMLPurifier\_AttrDef\_URI\_IPv6](doxygen__classHTMLPurifier__AttrDef__URI__IPv6.md#a06719a4cb80fe8c83f905f5debb22177), and [HTMLPurifier\_AttrDef\_URI\_Email\_SimpleCheck](doxygen__classHTMLPurifier__AttrDef__URI__Email__SimpleCheck.md#ab59eb8d68c2cefed8c58d93e741aea0f).

---

## Member Data Documentation

|  |
| --- |
| HTMLPurifier\_AttrDef::$minimized = false |

Tells us whether or not an HTML attribute is minimized.

Has no meaning in other contexts.

Reimplemented in [HTMLPurifier\_AttrDef\_HTML\_Bool](doxygen__classHTMLPurifier__AttrDef__HTML__Bool.md#aaca2ecb54c295f3b65bfa1e81a7b8583).

Definition at line [20](doxygen__AttrDef_8php_source.md#l00020) of file [AttrDef.php](doxygen__AttrDef_8php_source.md).

|  |
| --- |
| HTMLPurifier\_AttrDef::$required = false |

Tells us whether or not an HTML attribute is required.

Has no meaning in other contexts

Definition at line [26](doxygen__AttrDef_8php_source.md#l00026) of file [AttrDef.php](doxygen__AttrDef_8php_source.md).

---

The documentation for this class was generated from the following files:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/[AttrDef.php](doxygen__AttrDef_8php_source.md)
- /home/ezyang/Dev/htmlpurifier/library/[HTMLPurifier.standalone.php](doxygen__HTMLPurifier_8standalone_8php_source.md)

- [HTMLPurifier\_AttrDef](doxygen__classHTMLPurifier__AttrDef.md)
- Generated on Wed Jan 18 2012 22:58:19 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
