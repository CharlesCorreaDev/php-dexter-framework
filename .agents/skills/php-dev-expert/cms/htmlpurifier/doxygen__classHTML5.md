# HTMLPurifier: HTML5 Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTML5.html

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
[Private Member Functions](#pri-methods) |
[Private Attributes](#pri-attribs)

HTML5 Class Reference

[List of all members.](doxygen__classHTML5-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTML5.md#a76befd6b0e4f28d4f0186243cb4eac44) ($data) |
|  | [save](doxygen__classHTML5.md#aa7db54ebf4368f074dedf6ea3327287c) () |
| Public Attributes | |
| const | [PCDATA](doxygen__classHTML5.md#a01abf67d982563ea48ab1a966dfa6ed5) = 0 |
| const | [RCDATA](doxygen__classHTML5.md#a520a3576293ae3cb17f4e8c20e594597) = 1 |
| const | [CDATA](doxygen__classHTML5.md#a101b02982ccb6d7f4410b305f295fd16) = 2 |
| const | [PLAINTEXT](doxygen__classHTML5.md#afa0753128f661db20e6ce76aaf642a7d) = 3 |
| const | [DOCTYPE](doxygen__classHTML5.md#a9b83432e009926311f6ccf80412bf1cf) = 0 |
| const | [STARTTAG](doxygen__classHTML5.md#a94502c69fea29c30b3c2a74fc729a60d) = 1 |
| const | [ENDTAG](doxygen__classHTML5.md#abdb3e01603102e86b3183fcd6c844e17) = 2 |
| const | [COMMENT](doxygen__classHTML5.md#a524946c9d8a275b583b50b4342f00a99) = 3 |
| const | [CHARACTR](doxygen__classHTML5.md#a19976cfde8e4bbf3fe516cc44cb0baf4) = 4 |
| const | [EOF](doxygen__classHTML5.md#a1cf386934bc9b550f918a596e668f9c1) = 5 |
| Private Member Functions | |
|  | [char](doxygen__classHTML5.md#a7377750e8b209c73bf7195722849ba3c) () |
|  | [character](doxygen__classHTML5.md#a7a30d0f736021d2ce9a3ed8fa94f08cb) ($s, $l=0) |
|  | [characters](doxygen__classHTML5.md#ae63e9f28d984f639101a333665f14f50) ($char\_class, $start) |
|  | [dataState](doxygen__classHTML5.md#ae00364f2a7a32022cb750ccdabb0a2e9) () |
|  | [entityDataState](doxygen__classHTML5.md#a66807bdd944daf0d445725bf1ef6925f) () |
|  | [tagOpenState](doxygen__classHTML5.md#af7a0d1740e98f514c9a5cea9da0268eb) () |
|  | [closeTagOpenState](doxygen__classHTML5.md#a6a292fa975f4d4987dc727ce51df8f5d) () |
|  | [tagNameState](doxygen__classHTML5.md#aebecae22b003de470c348d299ebae9d9) () |
|  | [beforeAttributeNameState](doxygen__classHTML5.md#a25dbcfa7a4628c12aa8acbd5342ffd76) () |
|  | [attributeNameState](doxygen__classHTML5.md#aaef4dd2871738cece8979b46bbd2efd9) () |
|  | [afterAttributeNameState](doxygen__classHTML5.md#af4c07f14a79d3d4c176b3b0da9343f1f) () |
|  | [beforeAttributeValueState](doxygen__classHTML5.md#a1ab162b5e52acdff6699badbf259060c) () |
|  | [attributeValueDoubleQuotedState](doxygen__classHTML5.md#a494321c45f9c7a2e43f2ab155dfcb025) () |
|  | [attributeValueSingleQuotedState](doxygen__classHTML5.md#a8a95eb25245bfd79d8feec65fb5cf942) () |
|  | [attributeValueUnquotedState](doxygen__classHTML5.md#aa8aa12fe745b4e5252422299fff7a73a) () |
|  | [entityInAttributeValueState](doxygen__classHTML5.md#af80c9836b3ff40f37e612873137ef196) () |
|  | [bogusCommentState](doxygen__classHTML5.md#a33a85b07ff5bfd62e5907c2de5cf98c6) () |
|  | [markupDeclarationOpenState](doxygen__classHTML5.md#a58a03407bc82b31400ec9edcf794bee8) () |
|  | [commentState](doxygen__classHTML5.md#a0ee364e11f0320e1a28be1b7322fdd36) () |
|  | [commentDashState](doxygen__classHTML5.md#aebcac3cce30a951ab5690f257d9af32f) () |
|  | [commentEndState](doxygen__classHTML5.md#aef6e8b9382adc88b1c0c315ddae5434d) () |
|  | [doctypeState](doxygen__classHTML5.md#ab2602a037f5c47fec0a08c7151899616) () |
|  | [beforeDoctypeNameState](doxygen__classHTML5.md#ab69884250a1355399b3a39856d207513) () |
|  | [doctypeNameState](doxygen__classHTML5.md#ae8cd18201af874db8b8bd55bb029eec6) () |
|  | [afterDoctypeNameState](doxygen__classHTML5.md#ae094e30c4b9a0b93cfae42b70dd2f7ab) () |
|  | [bogusDoctypeState](doxygen__classHTML5.md#ab4db98923dbbd1708dcdc693b1394d29) () |
|  | [entity](doxygen__classHTML5.md#a41221490482a5effb3cfc4fa780716e5) () |
|  | [emitToken](doxygen__classHTML5.md#a0dedf6e5b904204a94a74e111c3f76d2) ($token) |
|  | [EOF](doxygen__classHTML5.md#a36e63529471db8bacd668d9bd4f9ca17) () |
| Private Attributes | |
|  | [$data](doxygen__classHTML5.md#a8e0f659dc55fbe991a411166df801fda) |
|  | [$char](doxygen__classHTML5.md#aa280e0c674d9ea539fda13a17442c7e6) |
|  | [$EOF](doxygen__classHTML5.md#a7cc3d98fdc08cf8e15303be3521cb593) |
|  | [$state](doxygen__classHTML5.md#a79ca4710787eb6958d3a0546a4c6d0e6) |
|  | [$tree](doxygen__classHTML5.md#a460f98f638f2b93f1fc59f4c4a87adbf) |
|  | [$token](doxygen__classHTML5.md#af20c2c1352a8c0ab42a6b16f6c7b823b) |
|  | [$content\_model](doxygen__classHTML5.md#a88f895434ad4922b6c8e8f92d61c18dc) |
|  | [$escape](doxygen__classHTML5.md#ab6d09284d0cad0418264f28af2a521ad) = false |
|  | [$entities](doxygen__classHTML5.md#a267752b65dcad31239420fc56d3c1b56) |

---

## Detailed Description

Definition at line [63](doxygen__PH5P_8php_source.md#l00063) of file [PH5P.php](doxygen__PH5P_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5::\_\_construct | ( | $ | *data* | ) |  |

Definition at line [127](doxygen__PH5P_8php_source.md#l00127) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$data](doxygen__PH5P_8php_source.md#l00064), [EOF()](doxygen__PH5P_8php_source.md#l01170), and [PCDATA](doxygen__PH5P_8php_source.md#l00115).

---

## Member Function Documentation

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::afterAttributeNameState | ( |  | ) | `[private]` |

Definition at line [584](doxygen__PH5P_8php_source.md#l00584) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [character()](doxygen__PH5P_8php_source.md#l00152), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::afterDoctypeNameState | ( |  | ) | `[private]` |

Definition at line [1027](doxygen__PH5P_8php_source.md#l01027) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [char()](doxygen__PH5P_8php_source.md#l00146), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::attributeNameState | ( |  | ) | `[private]` |

Definition at line [533](doxygen__PH5P_8php_source.md#l00533) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [character()](doxygen__PH5P_8php_source.md#l00152), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::attributeValueDoubleQuotedState | ( |  | ) | `[private]` |

Definition at line [686](doxygen__PH5P_8php_source.md#l00686) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [character()](doxygen__PH5P_8php_source.md#l00152), [emitToken()](doxygen__PH5P_8php_source.md#l01159), [entityInAttributeValueState()](doxygen__PH5P_8php_source.md#l00792), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::attributeValueSingleQuotedState | ( |  | ) | `[private]` |

Definition at line [721](doxygen__PH5P_8php_source.md#l00721) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [character()](doxygen__PH5P_8php_source.md#l00152), [emitToken()](doxygen__PH5P_8php_source.md#l01159), [entityInAttributeValueState()](doxygen__PH5P_8php_source.md#l00792), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::attributeValueUnquotedState | ( |  | ) | `[private]` |

Definition at line [756](doxygen__PH5P_8php_source.md#l00756) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [character()](doxygen__PH5P_8php_source.md#l00152), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [entityInAttributeValueState()](doxygen__PH5P_8php_source.md#l00792).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::beforeAttributeNameState | ( |  | ) | `[private]` |

Definition at line [484](doxygen__PH5P_8php_source.md#l00484) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [character()](doxygen__PH5P_8php_source.md#l00152), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::beforeAttributeValueState | ( |  | ) | `[private]` |

Definition at line [638](doxygen__PH5P_8php_source.md#l00638) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [character()](doxygen__PH5P_8php_source.md#l00152), and [emitToken()](doxygen__PH5P_8php_source.md#l01159).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::beforeDoctypeNameState | ( |  | ) | `[private]` |

Definition at line [951](doxygen__PH5P_8php_source.md#l00951) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [char()](doxygen__PH5P_8php_source.md#l00146), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::bogusCommentState | ( |  | ) | `[private]` |

Definition at line [807](doxygen__PH5P_8php_source.md#l00807) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$data](doxygen__PH5P_8php_source.md#l00064), [characters()](doxygen__PH5P_8php_source.md#l00162), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::bogusDoctypeState | ( |  | ) | `[private]` |

Definition at line [1050](doxygen__PH5P_8php_source.md#l01050) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [char()](doxygen__PH5P_8php_source.md#l00146), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::char | ( |  | ) | `[private]` |

Definition at line [146](doxygen__PH5P_8php_source.md#l00146) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [EOF()](doxygen__PH5P_8php_source.md#l01170).

Referenced by [afterDoctypeNameState()](doxygen__PH5P_8php_source.md#l01027), [beforeDoctypeNameState()](doxygen__PH5P_8php_source.md#l00951), [bogusDoctypeState()](doxygen__PH5P_8php_source.md#l01050), [closeTagOpenState()](doxygen__PH5P_8php_source.md#l00367), [commentDashState()](doxygen__PH5P_8php_source.md#l00887), [commentEndState()](doxygen__PH5P_8php_source.md#l00914), [commentState()](doxygen__PH5P_8php_source.md#l00861), [dataState()](doxygen__PH5P_8php_source.md#l00166), [doctypeNameState()](doxygen__PH5P_8php_source.md#l00998), [doctypeState()](doxygen__PH5P_8php_source.md#l00937), [entity()](doxygen__PH5P_8php_source.md#l01069), and [tagOpenState()](doxygen__PH5P_8php_source.md#l00282).

|  |  |  |  |
| --- | --- | --- | --- |
| HTML5::character | ( | $ | *s*, |
|  |  | $ | *l* = `0` |
|  | ) |  | `[private]` |

Definition at line [152](doxygen__PH5P_8php_source.md#l00152) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [EOF()](doxygen__PH5P_8php_source.md#l01170).

Referenced by [afterAttributeNameState()](doxygen__PH5P_8php_source.md#l00584), [attributeNameState()](doxygen__PH5P_8php_source.md#l00533), [attributeValueDoubleQuotedState()](doxygen__PH5P_8php_source.md#l00686), [attributeValueSingleQuotedState()](doxygen__PH5P_8php_source.md#l00721), [attributeValueUnquotedState()](doxygen__PH5P_8php_source.md#l00756), [beforeAttributeNameState()](doxygen__PH5P_8php_source.md#l00484), [beforeAttributeValueState()](doxygen__PH5P_8php_source.md#l00638), [closeTagOpenState()](doxygen__PH5P_8php_source.md#l00367), [dataState()](doxygen__PH5P_8php_source.md#l00166), [entity()](doxygen__PH5P_8php_source.md#l01069), [markupDeclarationOpenState()](doxygen__PH5P_8php_source.md#l00833), [tagNameState()](doxygen__PH5P_8php_source.md#l00440), and [tagOpenState()](doxygen__PH5P_8php_source.md#l00282).

|  |  |  |  |
| --- | --- | --- | --- |
| HTML5::characters | ( | $ | *char\_class*, |
|  |  | $ | *start* |
|  | ) |  | `[private]` |

Definition at line [162](doxygen__PH5P_8php_source.md#l00162) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [bogusCommentState()](doxygen__PH5P_8php_source.md#l00807), [closeTagOpenState()](doxygen__PH5P_8php_source.md#l00367), and [entity()](doxygen__PH5P_8php_source.md#l01069).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::closeTagOpenState | ( |  | ) | `[private]` |

Definition at line [367](doxygen__PH5P_8php_source.md#l00367) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [char()](doxygen__PH5P_8php_source.md#l00146), [character()](doxygen__PH5P_8php_source.md#l00152), [characters()](doxygen__PH5P_8php_source.md#l00162), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::commentDashState | ( |  | ) | `[private]` |

Definition at line [887](doxygen__PH5P_8php_source.md#l00887) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [char()](doxygen__PH5P_8php_source.md#l00146), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::commentEndState | ( |  | ) | `[private]` |

Definition at line [914](doxygen__PH5P_8php_source.md#l00914) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [char()](doxygen__PH5P_8php_source.md#l00146), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::commentState | ( |  | ) | `[private]` |

Definition at line [861](doxygen__PH5P_8php_source.md#l00861) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [char()](doxygen__PH5P_8php_source.md#l00146), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::dataState | ( |  | ) | `[private]` |

Definition at line [166](doxygen__PH5P_8php_source.md#l00166) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [char()](doxygen__PH5P_8php_source.md#l00146), [character()](doxygen__PH5P_8php_source.md#l00152), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::doctypeNameState | ( |  | ) | `[private]` |

Definition at line [998](doxygen__PH5P_8php_source.md#l00998) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [char()](doxygen__PH5P_8php_source.md#l00146), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::doctypeState | ( |  | ) | `[private]` |

Definition at line [937](doxygen__PH5P_8php_source.md#l00937) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), and [char()](doxygen__PH5P_8php_source.md#l00146).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5::emitToken | ( | $ | *token* | ) | `[private]` |

Definition at line [1159](doxygen__PH5P_8php_source.md#l01159) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$token](doxygen__PH5P_8php_source.md#l00069), and [PCDATA](doxygen__PH5P_8php_source.md#l00115).

Referenced by [afterAttributeNameState()](doxygen__PH5P_8php_source.md#l00584), [afterDoctypeNameState()](doxygen__PH5P_8php_source.md#l01027), [attributeNameState()](doxygen__PH5P_8php_source.md#l00533), [attributeValueDoubleQuotedState()](doxygen__PH5P_8php_source.md#l00686), [attributeValueSingleQuotedState()](doxygen__PH5P_8php_source.md#l00721), [attributeValueUnquotedState()](doxygen__PH5P_8php_source.md#l00756), [beforeAttributeNameState()](doxygen__PH5P_8php_source.md#l00484), [beforeAttributeValueState()](doxygen__PH5P_8php_source.md#l00638), [beforeDoctypeNameState()](doxygen__PH5P_8php_source.md#l00951), [bogusCommentState()](doxygen__PH5P_8php_source.md#l00807), [bogusDoctypeState()](doxygen__PH5P_8php_source.md#l01050), [closeTagOpenState()](doxygen__PH5P_8php_source.md#l00367), [commentDashState()](doxygen__PH5P_8php_source.md#l00887), [commentEndState()](doxygen__PH5P_8php_source.md#l00914), [commentState()](doxygen__PH5P_8php_source.md#l00861), [dataState()](doxygen__PH5P_8php_source.md#l00166), [doctypeNameState()](doxygen__PH5P_8php_source.md#l00998), [entityDataState()](doxygen__PH5P_8php_source.md#l00266), [tagNameState()](doxygen__PH5P_8php_source.md#l00440), and [tagOpenState()](doxygen__PH5P_8php_source.md#l00282).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::entity | ( |  | ) | `[private]` |

Definition at line [1069](doxygen__PH5P_8php_source.md#l01069) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [char()](doxygen__PH5P_8php_source.md#l00146), [character()](doxygen__PH5P_8php_source.md#l00152), and [characters()](doxygen__PH5P_8php_source.md#l00162).

Referenced by [entityDataState()](doxygen__PH5P_8php_source.md#l00266), and [entityInAttributeValueState()](doxygen__PH5P_8php_source.md#l00792).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::entityDataState | ( |  | ) | `[private]` |

Definition at line [266](doxygen__PH5P_8php_source.md#l00266) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [entity()](doxygen__PH5P_8php_source.md#l01069).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::entityInAttributeValueState | ( |  | ) | `[private]` |

Definition at line [792](doxygen__PH5P_8php_source.md#l00792) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), and [entity()](doxygen__PH5P_8php_source.md#l01069).

Referenced by [attributeValueDoubleQuotedState()](doxygen__PH5P_8php_source.md#l00686), [attributeValueSingleQuotedState()](doxygen__PH5P_8php_source.md#l00721), and [attributeValueUnquotedState()](doxygen__PH5P_8php_source.md#l00756).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| [HTML5::EOF](doxygen__classHTML5.md#a1cf386934bc9b550f918a596e668f9c1) | ( |  | ) | `[private]` |

Definition at line [1170](doxygen__PH5P_8php_source.md#l01170) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [\_\_construct()](doxygen__PH5P_8php_source.md#l00127), [afterAttributeNameState()](doxygen__PH5P_8php_source.md#l00584), [afterDoctypeNameState()](doxygen__PH5P_8php_source.md#l01027), [attributeNameState()](doxygen__PH5P_8php_source.md#l00533), [attributeValueDoubleQuotedState()](doxygen__PH5P_8php_source.md#l00686), [attributeValueSingleQuotedState()](doxygen__PH5P_8php_source.md#l00721), [beforeAttributeNameState()](doxygen__PH5P_8php_source.md#l00484), [beforeDoctypeNameState()](doxygen__PH5P_8php_source.md#l00951), [bogusCommentState()](doxygen__PH5P_8php_source.md#l00807), [bogusDoctypeState()](doxygen__PH5P_8php_source.md#l01050), [char()](doxygen__PH5P_8php_source.md#l00146), [character()](doxygen__PH5P_8php_source.md#l00152), [closeTagOpenState()](doxygen__PH5P_8php_source.md#l00367), [commentDashState()](doxygen__PH5P_8php_source.md#l00887), [commentEndState()](doxygen__PH5P_8php_source.md#l00914), [commentState()](doxygen__PH5P_8php_source.md#l00861), [dataState()](doxygen__PH5P_8php_source.md#l00166), [doctypeNameState()](doxygen__PH5P_8php_source.md#l00998), [HTML5TreeConstructer::initPhase()](doxygen__PH5P_8php_source.md#l01251), [HTML5TreeConstructer::mainPhase()](doxygen__PH5P_8php_source.md#l01348), [HTML5TreeConstructer::rootElementPhase()](doxygen__PH5P_8php_source.md#l01301), [tagNameState()](doxygen__PH5P_8php_source.md#l00440), and [HTML5TreeConstructer::trailingEndPhase()](doxygen__PH5P_8php_source.md#l03496).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::markupDeclarationOpenState | ( |  | ) | `[private]` |

Definition at line [833](doxygen__PH5P_8php_source.md#l00833) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [character()](doxygen__PH5P_8php_source.md#l00152).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::save | ( |  | ) |  |

Definition at line [142](doxygen__PH5P_8php_source.md#l00142) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::tagNameState | ( |  | ) | `[private]` |

Definition at line [440](doxygen__PH5P_8php_source.md#l00440) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [character()](doxygen__PH5P_8php_source.md#l00152), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [EOF()](doxygen__PH5P_8php_source.md#l01170).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5::tagOpenState | ( |  | ) | `[private]` |

Definition at line [282](doxygen__PH5P_8php_source.md#l00282) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$char](doxygen__PH5P_8php_source.md#l00065), [char()](doxygen__PH5P_8php_source.md#l00146), [character()](doxygen__PH5P_8php_source.md#l00152), and [emitToken()](doxygen__PH5P_8php_source.md#l01159).

---

## Member Data Documentation

|  |
| --- |
| HTML5::$char `[private]` |

Definition at line [65](doxygen__PH5P_8php_source.md#l00065) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [afterAttributeNameState()](doxygen__PH5P_8php_source.md#l00584), [afterDoctypeNameState()](doxygen__PH5P_8php_source.md#l01027), [attributeNameState()](doxygen__PH5P_8php_source.md#l00533), [attributeValueDoubleQuotedState()](doxygen__PH5P_8php_source.md#l00686), [attributeValueSingleQuotedState()](doxygen__PH5P_8php_source.md#l00721), [attributeValueUnquotedState()](doxygen__PH5P_8php_source.md#l00756), [beforeAttributeNameState()](doxygen__PH5P_8php_source.md#l00484), [beforeAttributeValueState()](doxygen__PH5P_8php_source.md#l00638), [beforeDoctypeNameState()](doxygen__PH5P_8php_source.md#l00951), [bogusDoctypeState()](doxygen__PH5P_8php_source.md#l01050), [closeTagOpenState()](doxygen__PH5P_8php_source.md#l00367), [commentDashState()](doxygen__PH5P_8php_source.md#l00887), [commentEndState()](doxygen__PH5P_8php_source.md#l00914), [commentState()](doxygen__PH5P_8php_source.md#l00861), [dataState()](doxygen__PH5P_8php_source.md#l00166), [doctypeNameState()](doxygen__PH5P_8php_source.md#l00998), [doctypeState()](doxygen__PH5P_8php_source.md#l00937), [entity()](doxygen__PH5P_8php_source.md#l01069), [entityDataState()](doxygen__PH5P_8php_source.md#l00266), [entityInAttributeValueState()](doxygen__PH5P_8php_source.md#l00792), [tagNameState()](doxygen__PH5P_8php_source.md#l00440), and [tagOpenState()](doxygen__PH5P_8php_source.md#l00282).

|  |
| --- |
| HTML5::$content\_model `[private]` |

Definition at line [70](doxygen__PH5P_8php_source.md#l00070) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5::$data `[private]` |

Definition at line [64](doxygen__PH5P_8php_source.md#l00064) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [\_\_construct()](doxygen__PH5P_8php_source.md#l00127), and [bogusCommentState()](doxygen__PH5P_8php_source.md#l00807).

|  |
| --- |
| HTML5::$entities `[private]` |

Definition at line [72](doxygen__PH5P_8php_source.md#l00072) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5::$[EOF](doxygen__classHTML5.md#a1cf386934bc9b550f918a596e668f9c1) `[private]` |

Definition at line [66](doxygen__PH5P_8php_source.md#l00066) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5::$escape = false `[private]` |

Definition at line [71](doxygen__PH5P_8php_source.md#l00071) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5::$state `[private]` |

Definition at line [67](doxygen__PH5P_8php_source.md#l00067) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5::$token `[private]` |

Definition at line [69](doxygen__PH5P_8php_source.md#l00069) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [emitToken()](doxygen__PH5P_8php_source.md#l01159).

|  |
| --- |
| HTML5::$tree `[private]` |

Definition at line [68](doxygen__PH5P_8php_source.md#l00068) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| const [HTML5::CDATA](doxygen__classHTML5.md#a101b02982ccb6d7f4410b305f295fd16) = 2 |

Definition at line [117](doxygen__PH5P_8php_source.md#l00117) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [HTML5TreeConstructer::inBody()](doxygen__PH5P_8php_source.md#l01632), and [HTML5TreeConstructer::inHead()](doxygen__PH5P_8php_source.md#l01452).

|  |
| --- |
| const [HTML5::CHARACTR](doxygen__classHTML5.md#a19976cfde8e4bbf3fe516cc44cb0baf4) = 4 |

Definition at line [124](doxygen__PH5P_8php_source.md#l00124) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [HTML5TreeConstructer::afterBody()](doxygen__PH5P_8php_source.md#l03359), [HTML5TreeConstructer::afterFrameset()](doxygen__PH5P_8php_source.md#l03461), [HTML5TreeConstructer::afterHead()](doxygen__PH5P_8php_source.md#l01576), [HTML5TreeConstructer::beforeHead()](doxygen__PH5P_8php_source.md#l01398), [HTML5TreeConstructer::inBody()](doxygen__PH5P_8php_source.md#l01632), [HTML5TreeConstructer::inColumnGroup()](doxygen__PH5P_8php_source.md#l02875), [HTML5TreeConstructer::inFrameset()](doxygen__PH5P_8php_source.md#l03398), [HTML5TreeConstructer::inHead()](doxygen__PH5P_8php_source.md#l01452), [HTML5TreeConstructer::initPhase()](doxygen__PH5P_8php_source.md#l01251), [HTML5TreeConstructer::inSelect()](doxygen__PH5P_8php_source.md#l03210), [HTML5TreeConstructer::inTable()](doxygen__PH5P_8php_source.md#l02630), [HTML5TreeConstructer::rootElementPhase()](doxygen__PH5P_8php_source.md#l01301), and [HTML5TreeConstructer::trailingEndPhase()](doxygen__PH5P_8php_source.md#l03496).

|  |
| --- |
| const [HTML5::COMMENT](doxygen__classHTML5.md#a524946c9d8a275b583b50b4342f00a99) = 3 |

Definition at line [123](doxygen__PH5P_8php_source.md#l00123) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [HTML5TreeConstructer::afterBody()](doxygen__PH5P_8php_source.md#l03359), [HTML5TreeConstructer::afterFrameset()](doxygen__PH5P_8php_source.md#l03461), [HTML5TreeConstructer::afterHead()](doxygen__PH5P_8php_source.md#l01576), [HTML5TreeConstructer::beforeHead()](doxygen__PH5P_8php_source.md#l01398), [HTML5TreeConstructer::inBody()](doxygen__PH5P_8php_source.md#l01632), [HTML5TreeConstructer::inColumnGroup()](doxygen__PH5P_8php_source.md#l02875), [HTML5TreeConstructer::inFrameset()](doxygen__PH5P_8php_source.md#l03398), [HTML5TreeConstructer::inHead()](doxygen__PH5P_8php_source.md#l01452), [HTML5TreeConstructer::initPhase()](doxygen__PH5P_8php_source.md#l01251), [HTML5TreeConstructer::inSelect()](doxygen__PH5P_8php_source.md#l03210), [HTML5TreeConstructer::inTable()](doxygen__PH5P_8php_source.md#l02630), [HTML5TreeConstructer::rootElementPhase()](doxygen__PH5P_8php_source.md#l01301), and [HTML5TreeConstructer::trailingEndPhase()](doxygen__PH5P_8php_source.md#l03496).

|  |
| --- |
| const [HTML5::DOCTYPE](doxygen__classHTML5.md#a9b83432e009926311f6ccf80412bf1cf) = 0 |

Definition at line [120](doxygen__PH5P_8php_source.md#l00120) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [HTML5TreeConstructer::mainPhase()](doxygen__PH5P_8php_source.md#l01348), [HTML5TreeConstructer::rootElementPhase()](doxygen__PH5P_8php_source.md#l01301), and [HTML5TreeConstructer::trailingEndPhase()](doxygen__PH5P_8php_source.md#l03496).

|  |
| --- |
| const [HTML5::ENDTAG](doxygen__classHTML5.md#abdb3e01603102e86b3183fcd6c844e17) = 2 |

Definition at line [122](doxygen__PH5P_8php_source.md#l00122) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [HTML5TreeConstructer::afterBody()](doxygen__PH5P_8php_source.md#l03359), [HTML5TreeConstructer::afterFrameset()](doxygen__PH5P_8php_source.md#l03461), [HTML5TreeConstructer::beforeHead()](doxygen__PH5P_8php_source.md#l01398), [HTML5TreeConstructer::closeCell()](doxygen__PH5P_8php_source.md#l03885), [HTML5TreeConstructer::inBody()](doxygen__PH5P_8php_source.md#l01632), [HTML5TreeConstructer::inCaption()](doxygen__PH5P_8php_source.md#l02807), [HTML5TreeConstructer::inCell()](doxygen__PH5P_8php_source.md#l03103), [HTML5TreeConstructer::inColumnGroup()](doxygen__PH5P_8php_source.md#l02875), [HTML5TreeConstructer::inFrameset()](doxygen__PH5P_8php_source.md#l03398), [HTML5TreeConstructer::inHead()](doxygen__PH5P_8php_source.md#l01452), [HTML5TreeConstructer::initPhase()](doxygen__PH5P_8php_source.md#l01251), [HTML5TreeConstructer::inRow()](doxygen__PH5P_8php_source.md#l03018), [HTML5TreeConstructer::inSelect()](doxygen__PH5P_8php_source.md#l03210), [HTML5TreeConstructer::inTable()](doxygen__PH5P_8php_source.md#l02630), [HTML5TreeConstructer::inTableBody()](doxygen__PH5P_8php_source.md#l02932), [HTML5TreeConstructer::rootElementPhase()](doxygen__PH5P_8php_source.md#l01301), and [HTML5TreeConstructer::trailingEndPhase()](doxygen__PH5P_8php_source.md#l03496).

|  |
| --- |
| const [HTML5::EOF](doxygen__classHTML5.md#a1cf386934bc9b550f918a596e668f9c1) = 5 |

Definition at line [125](doxygen__PH5P_8php_source.md#l00125) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| const [HTML5::PCDATA](doxygen__classHTML5.md#a01abf67d982563ea48ab1a966dfa6ed5) = 0 |

Definition at line [115](doxygen__PH5P_8php_source.md#l00115) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [\_\_construct()](doxygen__PH5P_8php_source.md#l00127), [emitToken()](doxygen__PH5P_8php_source.md#l01159), and [HTML5TreeConstructer::inHead()](doxygen__PH5P_8php_source.md#l01452).

|  |
| --- |
| const [HTML5::PLAINTEXT](doxygen__classHTML5.md#afa0753128f661db20e6ce76aaf642a7d) = 3 |

Definition at line [118](doxygen__PH5P_8php_source.md#l00118) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [HTML5TreeConstructer::inBody()](doxygen__PH5P_8php_source.md#l01632).

|  |
| --- |
| const [HTML5::RCDATA](doxygen__classHTML5.md#a520a3576293ae3cb17f4e8c20e594597) = 1 |

Definition at line [116](doxygen__PH5P_8php_source.md#l00116) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [HTML5TreeConstructer::inBody()](doxygen__PH5P_8php_source.md#l01632), and [HTML5TreeConstructer::inHead()](doxygen__PH5P_8php_source.md#l01452).

|  |
| --- |
| const [HTML5::STARTTAG](doxygen__classHTML5.md#a94502c69fea29c30b3c2a74fc729a60d) = 1 |

Definition at line [121](doxygen__PH5P_8php_source.md#l00121) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [HTML5TreeConstructer::afterFrameset()](doxygen__PH5P_8php_source.md#l03461), [HTML5TreeConstructer::afterHead()](doxygen__PH5P_8php_source.md#l01576), [HTML5TreeConstructer::beforeHead()](doxygen__PH5P_8php_source.md#l01398), [HTML5TreeConstructer::inBody()](doxygen__PH5P_8php_source.md#l01632), [HTML5TreeConstructer::inCaption()](doxygen__PH5P_8php_source.md#l02807), [HTML5TreeConstructer::inCell()](doxygen__PH5P_8php_source.md#l03103), [HTML5TreeConstructer::inColumnGroup()](doxygen__PH5P_8php_source.md#l02875), [HTML5TreeConstructer::inFrameset()](doxygen__PH5P_8php_source.md#l03398), [HTML5TreeConstructer::inHead()](doxygen__PH5P_8php_source.md#l01452), [HTML5TreeConstructer::initPhase()](doxygen__PH5P_8php_source.md#l01251), [HTML5TreeConstructer::inRow()](doxygen__PH5P_8php_source.md#l03018), [HTML5TreeConstructer::inSelect()](doxygen__PH5P_8php_source.md#l03210), [HTML5TreeConstructer::inTable()](doxygen__PH5P_8php_source.md#l02630), [HTML5TreeConstructer::inTableBody()](doxygen__PH5P_8php_source.md#l02932), [HTML5TreeConstructer::mainPhase()](doxygen__PH5P_8php_source.md#l01348), [HTML5TreeConstructer::rootElementPhase()](doxygen__PH5P_8php_source.md#l01301), and [HTML5TreeConstructer::trailingEndPhase()](doxygen__PH5P_8php_source.md#l03496).

---

The documentation for this class was generated from the following file:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/Lexer/[PH5P.php](doxygen__PH5P_8php_source.md)

- [HTML5](doxygen__classHTML5.md)
- Generated on Wed Jan 18 2012 22:58:18 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
