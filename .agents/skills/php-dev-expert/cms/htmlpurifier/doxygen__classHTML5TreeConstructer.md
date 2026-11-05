# HTMLPurifier: HTML5TreeConstructer Class Reference

> **Fonte / Source:** http://htmlpurifier.org/doxygen/html/classHTML5TreeConstructer.html

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

HTML5TreeConstructer Class Reference

[List of all members.](doxygen__classHTML5TreeConstructer-members.md)

|  |  |
| --- | --- |
| Public Member Functions | |
|  | [\_\_construct](doxygen__classHTML5TreeConstructer.md#a36649232a8af7f8cf49fba9aa7b20db7) () |
|  | [emitToken](doxygen__classHTML5TreeConstructer.md#a37515b588cb103a618bdb0bf84fc7bc4) ($token) |
|  | [save](doxygen__classHTML5TreeConstructer.md#a3701007a7652945bb2d267b572bb38cc) () |
| Public Attributes | |
|  | [$stack](doxygen__classHTML5TreeConstructer.md#a6362d352c497f6289392b689bb08172a) = array() |
| const | [INIT\_PHASE](doxygen__classHTML5TreeConstructer.md#a025c5721f05fef6911dead9c3ce5dd17) = 0 |
| const | [ROOT\_PHASE](doxygen__classHTML5TreeConstructer.md#ad5bb6803e6dd56fba50eea900c9796c8) = 1 |
| const | [MAIN\_PHASE](doxygen__classHTML5TreeConstructer.md#ab47b9b28a03b9186cd5927e34a92ab00) = 2 |
| const | [END\_PHASE](doxygen__classHTML5TreeConstructer.md#a265916a150d9ab06d947eec0d62b3aec) = 3 |
| const | [BEFOR\_HEAD](doxygen__classHTML5TreeConstructer.md#ab5f3195766fbba1539208145439ce17b) = 0 |
| const | [IN\_HEAD](doxygen__classHTML5TreeConstructer.md#a1c19225b6fc03d03d65399bbf2775ea0) = 1 |
| const | [AFTER\_HEAD](doxygen__classHTML5TreeConstructer.md#aa7370b9a69df3ec094e3fcb46c61ef0d) = 2 |
| const | [IN\_BODY](doxygen__classHTML5TreeConstructer.md#a96dac03a6175a99d9c2b8061e3d91313) = 3 |
| const | [IN\_TABLE](doxygen__classHTML5TreeConstructer.md#ab0c451330ab3a1a0387ef62bb4b48f1c) = 4 |
| const | [IN\_CAPTION](doxygen__classHTML5TreeConstructer.md#a9f9f002cd7a7a52ebd86ce97f2949f3f) = 5 |
| const | [IN\_CGROUP](doxygen__classHTML5TreeConstructer.md#a8bf6f6afa477e700461837f1464a94b8) = 6 |
| const | [IN\_TBODY](doxygen__classHTML5TreeConstructer.md#acd979180a3036c84c5b04f9547189f9a) = 7 |
| const | [IN\_ROW](doxygen__classHTML5TreeConstructer.md#a9f89c87246db41e99ad83c2d6d87e0b4) = 8 |
| const | [IN\_CELL](doxygen__classHTML5TreeConstructer.md#a51864d0a059b9018f6ec895400802d06) = 9 |
| const | [IN\_SELECT](doxygen__classHTML5TreeConstructer.md#ac86b82d1e3aa08473a18619a63d409e4) = 10 |
| const | [AFTER\_BODY](doxygen__classHTML5TreeConstructer.md#a999b3e3c17749259563c2c102e2c09e9) = 11 |
| const | [IN\_FRAME](doxygen__classHTML5TreeConstructer.md#aaf68c3f35587123a0dadd2a12750f279) = 12 |
| const | [AFTR\_FRAME](doxygen__classHTML5TreeConstructer.md#ac3eb8ac4105201ad4e98ce9c9a81347a) = 13 |
| const | [SPECIAL](doxygen__classHTML5TreeConstructer.md#a7f4e05d3df089320a8b4cca78d04a176) = 0 |
| const | [SCOPING](doxygen__classHTML5TreeConstructer.md#ae58e4a6b6175f5b0c373a6ec20706b88) = 1 |
| const | [FORMATTING](doxygen__classHTML5TreeConstructer.md#a11bb5cd773c1da3131fda7655326d498) = 2 |
| const | [PHRASING](doxygen__classHTML5TreeConstructer.md#a668f156805a33544101e8b616242bf35) = 3 |
| const | [MARKER](doxygen__classHTML5TreeConstructer.md#a223a988344485fd8d6a7eb62da0bd6f2) = 0 |
| Private Member Functions | |
|  | [initPhase](doxygen__classHTML5TreeConstructer.md#a984fe8c7715afac08ab86342d1a940d7) ($token) |
|  | [rootElementPhase](doxygen__classHTML5TreeConstructer.md#a214912197d48e1fca1ba1b6e2db819d0) ($token) |
|  | [mainPhase](doxygen__classHTML5TreeConstructer.md#a471c16f0fdde7738bb3b22fe61ecb328) ($token) |
|  | [beforeHead](doxygen__classHTML5TreeConstructer.md#adf97accfae130c2f48754616b025179a) ($token) |
|  | [inHead](doxygen__classHTML5TreeConstructer.md#a37db70c36b3d07303f1909b34bc21828) ($token) |
|  | [afterHead](doxygen__classHTML5TreeConstructer.md#ae4ceaad87901fafb2ea8a5ddc4ffa469) ($token) |
|  | [inBody](doxygen__classHTML5TreeConstructer.md#a1b1e455f9a9b7db90e7a6212b17f4075) ($token) |
|  | [inTable](doxygen__classHTML5TreeConstructer.md#ad19e5a4f851af3c0a4951ffb0315f0fa) ($token) |
|  | [inCaption](doxygen__classHTML5TreeConstructer.md#a3cbc46eb1520c1b49190bc9758d6a284) ($token) |
|  | [inColumnGroup](doxygen__classHTML5TreeConstructer.md#aec8fe1477f7bdb3a66df94965f1955ea) ($token) |
|  | [inTableBody](doxygen__classHTML5TreeConstructer.md#a175f5063f941cbf1c22a7ab3afa7d296) ($token) |
|  | [inRow](doxygen__classHTML5TreeConstructer.md#acc9432b6e0d1b12d55b88772624e8358) ($token) |
|  | [inCell](doxygen__classHTML5TreeConstructer.md#a6d699fcc3663fb91b00cdf228ca916b5) ($token) |
|  | [inSelect](doxygen__classHTML5TreeConstructer.md#a99ebae73cc9c9ae591672d9075ea1719) ($token) |
|  | [afterBody](doxygen__classHTML5TreeConstructer.md#a731130780508a3f398a1204acf779111) ($token) |
|  | [inFrameset](doxygen__classHTML5TreeConstructer.md#a0fa4a414466d9a4bec712b10b5fc8500) ($token) |
|  | [afterFrameset](doxygen__classHTML5TreeConstructer.md#a58507a17723f72912b2fc25c9befe450) ($token) |
|  | [trailingEndPhase](doxygen__classHTML5TreeConstructer.md#a7ebeae0cf70485a721ffe8368ce4d8d9) ($token) |
|  | [insertElement](doxygen__classHTML5TreeConstructer.md#a5e8f8e058fb48ff196988a1668fb3c40) ($token, $append=true, $check=false) |
|  | [insertText](doxygen__classHTML5TreeConstructer.md#ac4541f8d13e97307c6a10ef0f44e8d5f) ($data) |
|  | [insertComment](doxygen__classHTML5TreeConstructer.md#a3b070ee522fafb391dbf78f5894af917) ($data) |
|  | [appendToRealParent](doxygen__classHTML5TreeConstructer.md#a553655b55fb82d04ce066e79935ecf04) ($node) |
|  | [elementInScope](doxygen__classHTML5TreeConstructer.md#a37ee406ac44eb4873e0e3554232a20b5) ($el, $table=false) |
|  | [reconstructActiveFormattingElements](doxygen__classHTML5TreeConstructer.md#a82dbb4522532351efc1ca29dc4216747) () |
|  | [clearTheActiveFormattingElementsUpToTheLastMarker](doxygen__classHTML5TreeConstructer.md#a597511a1c43d82d1368c58769a13f7d1) () |
|  | [generateImpliedEndTags](doxygen__classHTML5TreeConstructer.md#a80bd96e42821d6951a210ca4a1523108) ($exclude=array()) |
|  | [getElementCategory](doxygen__classHTML5TreeConstructer.md#a0f52ce1dc0146db0b55bbce51afae6cc) ($node) |
|  | [clearStackToTableContext](doxygen__classHTML5TreeConstructer.md#a4844f035e23bd57b98713378acd0029d) ($elements) |
|  | [resetInsertionMode](doxygen__classHTML5TreeConstructer.md#a3824d7e2714db6b68f887c057f2cf834) () |
|  | [closeCell](doxygen__classHTML5TreeConstructer.md#a75143754c3b96b8c7d879b19c504616f) () |
| Private Attributes | |
|  | [$phase](doxygen__classHTML5TreeConstructer.md#ab722661083a0b2010f20cbfdc10313e0) |
|  | [$mode](doxygen__classHTML5TreeConstructer.md#ae18a8404bf51d96fa7f26af447d5c3a1) |
|  | [$dom](doxygen__classHTML5TreeConstructer.md#a527dbb89aad95ec863d3ce0da133658d) |
|  | [$foster\_parent](doxygen__classHTML5TreeConstructer.md#a9ff787821675aaa8d22eb575032bf261) = null |
|  | [$a\_formatting](doxygen__classHTML5TreeConstructer.md#abaa2d4379e49084c1b85b278a39a61c8) = array() |
|  | [$head\_pointer](doxygen__classHTML5TreeConstructer.md#a8506b7d36c0298f9173bac37a97172cf) = null |
|  | [$form\_pointer](doxygen__classHTML5TreeConstructer.md#aa4ae4201c3ced71278b2642d19ac3dd1) = null |
|  | [$scoping](doxygen__classHTML5TreeConstructer.md#ab5724fe06cfb76df24ca3d149c9b1697) = array('button','caption','html','marquee','object','table','td','th') |
|  | [$formatting](doxygen__classHTML5TreeConstructer.md#a9245b271bc81f4d44b437ba92a092617) = array('a','b','big','em','font','i','nobr','s','small','strike','strong','tt','u') |
|  | [$special](doxygen__classHTML5TreeConstructer.md#aa8847875486bd18d277674de6d9dc954) |

---

## Detailed Description

Definition at line [1178](doxygen__PH5P_8php_source.md#l01178) of file [PH5P.php](doxygen__PH5P_8php_source.md).

---

## Constructor & Destructor Documentation

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5TreeConstructer::\_\_construct | ( |  | ) |  |

Definition at line [1230](doxygen__PH5P_8php_source.md#l01230) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [BEFOR\_HEAD](doxygen__PH5P_8php_source.md#l01207), and [INIT\_PHASE](doxygen__PH5P_8php_source.md#l01201).

---

## Member Function Documentation

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::afterBody | ( | $ | *token* | ) | `[private]` |

Definition at line [3359](doxygen__PH5P_8php_source.md#l03359) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [END\_PHASE](doxygen__PH5P_8php_source.md#l01204), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [IN\_BODY](doxygen__PH5P_8php_source.md#l01210), and [inBody()](doxygen__PH5P_8php_source.md#l01632).

Referenced by [inBody()](doxygen__PH5P_8php_source.md#l01632), and [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::afterFrameset | ( | $ | *token* | ) | `[private]` |

Definition at line [3461](doxygen__PH5P_8php_source.md#l03461) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [END\_PHASE](doxygen__PH5P_8php_source.md#l01204), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [inBody()](doxygen__PH5P_8php_source.md#l01632), [insertComment()](doxygen__PH5P_8php_source.md#l03567), [insertText()](doxygen__PH5P_8php_source.md#l03562), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::afterHead | ( | $ | *token* | ) | `[private]` |

Definition at line [1576](doxygen__PH5P_8php_source.md#l01576) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [IN\_BODY](doxygen__PH5P_8php_source.md#l01210), [IN\_FRAME](doxygen__PH5P_8php_source.md#l01219), [IN\_HEAD](doxygen__PH5P_8php_source.md#l01208), [inBody()](doxygen__PH5P_8php_source.md#l01632), [inHead()](doxygen__PH5P_8php_source.md#l01452), [insertComment()](doxygen__PH5P_8php_source.md#l03567), [insertElement()](doxygen__PH5P_8php_source.md#l03536), [insertText()](doxygen__PH5P_8php_source.md#l03562), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [inHead()](doxygen__PH5P_8php_source.md#l01452), and [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::appendToRealParent | ( | $ | *node* | ) | `[private]` |

Definition at line [3572](doxygen__PH5P_8php_source.md#l03572) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [insertComment()](doxygen__PH5P_8php_source.md#l03567), [insertElement()](doxygen__PH5P_8php_source.md#l03536), and [insertText()](doxygen__PH5P_8php_source.md#l03562).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::beforeHead | ( | $ | *token* | ) | `[private]` |

Definition at line [1398](doxygen__PH5P_8php_source.md#l01398) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [IN\_HEAD](doxygen__PH5P_8php_source.md#l01208), [inHead()](doxygen__PH5P_8php_source.md#l01452), [insertComment()](doxygen__PH5P_8php_source.md#l03567), [insertElement()](doxygen__PH5P_8php_source.md#l03536), [insertText()](doxygen__PH5P_8php_source.md#l03562), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::clearStackToTableContext | ( | $ | *elements* | ) | `[private]` |

Definition at line [3770](doxygen__PH5P_8php_source.md#l03770) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inRow()](doxygen__PH5P_8php_source.md#l03018), [inTable()](doxygen__PH5P_8php_source.md#l02630), and [inTableBody()](doxygen__PH5P_8php_source.md#l02932).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5TreeConstructer::clearTheActiveFormattingElementsUpToTheLastMarker | ( |  | ) | `[private]` |

Definition at line [3720](doxygen__PH5P_8php_source.md#l03720) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inCaption()](doxygen__PH5P_8php_source.md#l02807), and [inCell()](doxygen__PH5P_8php_source.md#l03103).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5TreeConstructer::closeCell | ( |  | ) | `[private]` |

Definition at line [3885](doxygen__PH5P_8php_source.md#l03885) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [elementInScope()](doxygen__PH5P_8php_source.md#l03600), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), and [inCell()](doxygen__PH5P_8php_source.md#l03103).

Referenced by [inCell()](doxygen__PH5P_8php_source.md#l03103).

|  |  |  |  |
| --- | --- | --- | --- |
| HTML5TreeConstructer::elementInScope | ( | $ | *el*, |
|  |  | $ | *table* = `false` |
|  | ) |  | `[private]` |

Definition at line [3600](doxygen__PH5P_8php_source.md#l03600) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [closeCell()](doxygen__PH5P_8php_source.md#l03885), [inBody()](doxygen__PH5P_8php_source.md#l01632), [inCaption()](doxygen__PH5P_8php_source.md#l02807), [inCell()](doxygen__PH5P_8php_source.md#l03103), [inRow()](doxygen__PH5P_8php_source.md#l03018), [inSelect()](doxygen__PH5P_8php_source.md#l03210), [inTable()](doxygen__PH5P_8php_source.md#l02630), and [inTableBody()](doxygen__PH5P_8php_source.md#l02932).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::emitToken | ( | $ | *token* | ) |  |

Definition at line [1242](doxygen__PH5P_8php_source.md#l01242) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [initPhase()](doxygen__PH5P_8php_source.md#l01251), [mainPhase()](doxygen__PH5P_8php_source.md#l01348), [rootElementPhase()](doxygen__PH5P_8php_source.md#l01301), and [trailingEndPhase()](doxygen__PH5P_8php_source.md#l03496).

Referenced by [inBody()](doxygen__PH5P_8php_source.md#l01632).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::generateImpliedEndTags | ( | $ | *exclude* = `array()` | ) | `[private]` |

Definition at line [3741](doxygen__PH5P_8php_source.md#l03741) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inBody()](doxygen__PH5P_8php_source.md#l01632), [inCaption()](doxygen__PH5P_8php_source.md#l02807), [inCell()](doxygen__PH5P_8php_source.md#l03103), [inTable()](doxygen__PH5P_8php_source.md#l02630), and [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::getElementCategory | ( | $ | *node* | ) | `[private]` |

Definition at line [3755](doxygen__PH5P_8php_source.md#l03755) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [FORMATTING](doxygen__PH5P_8php_source.md#l01225), [PHRASING](doxygen__PH5P_8php_source.md#l01226), [SCOPING](doxygen__PH5P_8php_source.md#l01224), and [SPECIAL](doxygen__PH5P_8php_source.md#l01223).

Referenced by [inBody()](doxygen__PH5P_8php_source.md#l01632).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::inBody | ( | $ | *token* | ) | `[private]` |

Definition at line [1632](doxygen__PH5P_8php_source.md#l01632) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [AFTER\_BODY](doxygen__PH5P_8php_source.md#l01218), [afterBody()](doxygen__PH5P_8php_source.md#l03359), [HTML5::CDATA](doxygen__PH5P_8php_source.md#l00117), [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [elementInScope()](doxygen__PH5P_8php_source.md#l03600), [emitToken()](doxygen__PH5P_8php_source.md#l01242), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [generateImpliedEndTags()](doxygen__PH5P_8php_source.md#l03741), [getElementCategory()](doxygen__PH5P_8php_source.md#l03755), [IN\_SELECT](doxygen__PH5P_8php_source.md#l01217), [IN\_TABLE](doxygen__PH5P_8php_source.md#l01211), [inHead()](doxygen__PH5P_8php_source.md#l01452), [insertComment()](doxygen__PH5P_8php_source.md#l03567), [insertElement()](doxygen__PH5P_8php_source.md#l03536), [insertText()](doxygen__PH5P_8php_source.md#l03562), [MARKER](doxygen__PH5P_8php_source.md#l01228), [HTML5::PLAINTEXT](doxygen__PH5P_8php_source.md#l00118), [HTML5::RCDATA](doxygen__PH5P_8php_source.md#l00116), [reconstructActiveFormattingElements()](doxygen__PH5P_8php_source.md#l03649), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [afterBody()](doxygen__PH5P_8php_source.md#l03359), [afterFrameset()](doxygen__PH5P_8php_source.md#l03461), [afterHead()](doxygen__PH5P_8php_source.md#l01576), [inCaption()](doxygen__PH5P_8php_source.md#l02807), [inCell()](doxygen__PH5P_8php_source.md#l03103), [inFrameset()](doxygen__PH5P_8php_source.md#l03398), [inTable()](doxygen__PH5P_8php_source.md#l02630), and [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::inCaption | ( | $ | *token* | ) | `[private]` |

Definition at line [2807](doxygen__PH5P_8php_source.md#l02807) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [clearTheActiveFormattingElementsUpToTheLastMarker()](doxygen__PH5P_8php_source.md#l03720), [elementInScope()](doxygen__PH5P_8php_source.md#l03600), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [generateImpliedEndTags()](doxygen__PH5P_8php_source.md#l03741), [IN\_TABLE](doxygen__PH5P_8php_source.md#l01211), [inBody()](doxygen__PH5P_8php_source.md#l01632), [inTable()](doxygen__PH5P_8php_source.md#l02630), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::inCell | ( | $ | *token* | ) | `[private]` |

Definition at line [3103](doxygen__PH5P_8php_source.md#l03103) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [clearTheActiveFormattingElementsUpToTheLastMarker()](doxygen__PH5P_8php_source.md#l03720), [closeCell()](doxygen__PH5P_8php_source.md#l03885), [elementInScope()](doxygen__PH5P_8php_source.md#l03600), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [generateImpliedEndTags()](doxygen__PH5P_8php_source.md#l03741), [IN\_ROW](doxygen__PH5P_8php_source.md#l01215), [inBody()](doxygen__PH5P_8php_source.md#l01632), [inRow()](doxygen__PH5P_8php_source.md#l03018), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [closeCell()](doxygen__PH5P_8php_source.md#l03885), [inRow()](doxygen__PH5P_8php_source.md#l03018), and [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::inColumnGroup | ( | $ | *token* | ) | `[private]` |

Definition at line [2875](doxygen__PH5P_8php_source.md#l02875) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [IN\_TABLE](doxygen__PH5P_8php_source.md#l01211), [insertElement()](doxygen__PH5P_8php_source.md#l03536), [inTable()](doxygen__PH5P_8php_source.md#l02630), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [inTable()](doxygen__PH5P_8php_source.md#l02630), and [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::inFrameset | ( | $ | *token* | ) | `[private]` |

Definition at line [3398](doxygen__PH5P_8php_source.md#l03398) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [AFTR\_FRAME](doxygen__PH5P_8php_source.md#l01220), [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [inBody()](doxygen__PH5P_8php_source.md#l01632), [insertComment()](doxygen__PH5P_8php_source.md#l03567), [insertElement()](doxygen__PH5P_8php_source.md#l03536), [insertText()](doxygen__PH5P_8php_source.md#l03562), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::inHead | ( | $ | *token* | ) | `[private]` |

Definition at line [1452](doxygen__PH5P_8php_source.md#l01452) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [AFTER\_HEAD](doxygen__PH5P_8php_source.md#l01209), [afterHead()](doxygen__PH5P_8php_source.md#l01576), [HTML5::CDATA](doxygen__PH5P_8php_source.md#l00117), [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [insertComment()](doxygen__PH5P_8php_source.md#l03567), [insertElement()](doxygen__PH5P_8php_source.md#l03536), [insertText()](doxygen__PH5P_8php_source.md#l03562), [HTML5::PCDATA](doxygen__PH5P_8php_source.md#l00115), [HTML5::RCDATA](doxygen__PH5P_8php_source.md#l00116), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [afterHead()](doxygen__PH5P_8php_source.md#l01576), [beforeHead()](doxygen__PH5P_8php_source.md#l01398), [inBody()](doxygen__PH5P_8php_source.md#l01632), and [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::initPhase | ( | $ | *token* | ) | `[private]` |

Definition at line [1251](doxygen__PH5P_8php_source.md#l01251) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [HTML5::EOF()](doxygen__PH5P_8php_source.md#l01170), [ROOT\_PHASE](doxygen__PH5P_8php_source.md#l01202), [rootElementPhase()](doxygen__PH5P_8php_source.md#l01301), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [emitToken()](doxygen__PH5P_8php_source.md#l01242).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::inRow | ( | $ | *token* | ) | `[private]` |

Definition at line [3018](doxygen__PH5P_8php_source.md#l03018) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [clearStackToTableContext()](doxygen__PH5P_8php_source.md#l03770), [elementInScope()](doxygen__PH5P_8php_source.md#l03600), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [IN\_CELL](doxygen__PH5P_8php_source.md#l01216), [IN\_TBODY](doxygen__PH5P_8php_source.md#l01214), [inCell()](doxygen__PH5P_8php_source.md#l03103), [insertElement()](doxygen__PH5P_8php_source.md#l03536), [inTable()](doxygen__PH5P_8php_source.md#l02630), [MARKER](doxygen__PH5P_8php_source.md#l01228), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [inCell()](doxygen__PH5P_8php_source.md#l03103), [inTableBody()](doxygen__PH5P_8php_source.md#l02932), and [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::inSelect | ( | $ | *token* | ) | `[private]` |

Definition at line [3210](doxygen__PH5P_8php_source.md#l03210) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [elementInScope()](doxygen__PH5P_8php_source.md#l03600), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [insertComment()](doxygen__PH5P_8php_source.md#l03567), [insertElement()](doxygen__PH5P_8php_source.md#l03536), [insertText()](doxygen__PH5P_8php_source.md#l03562), [mainPhase()](doxygen__PH5P_8php_source.md#l01348), [resetInsertionMode()](doxygen__PH5P_8php_source.md#l03787), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::insertComment | ( | $ | *data* | ) | `[private]` |

Definition at line [3567](doxygen__PH5P_8php_source.md#l03567) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$data](doxygen__test-settings_8sample_8php_source.md#l00014), and [appendToRealParent()](doxygen__PH5P_8php_source.md#l03572).

Referenced by [afterFrameset()](doxygen__PH5P_8php_source.md#l03461), [afterHead()](doxygen__PH5P_8php_source.md#l01576), [beforeHead()](doxygen__PH5P_8php_source.md#l01398), [inBody()](doxygen__PH5P_8php_source.md#l01632), [inFrameset()](doxygen__PH5P_8php_source.md#l03398), [inHead()](doxygen__PH5P_8php_source.md#l01452), and [inSelect()](doxygen__PH5P_8php_source.md#l03210).

|  |  |  |  |
| --- | --- | --- | --- |
| HTML5TreeConstructer::insertElement | ( | $ | *token*, |
|  |  | $ | *append* = `true`, |
|  |  | $ | *check* = `false` |
|  | ) |  | `[private]` |

Definition at line [3536](doxygen__PH5P_8php_source.md#l03536) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [appendToRealParent()](doxygen__PH5P_8php_source.md#l03572).

Referenced by [afterHead()](doxygen__PH5P_8php_source.md#l01576), [beforeHead()](doxygen__PH5P_8php_source.md#l01398), [inBody()](doxygen__PH5P_8php_source.md#l01632), [inColumnGroup()](doxygen__PH5P_8php_source.md#l02875), [inFrameset()](doxygen__PH5P_8php_source.md#l03398), [inHead()](doxygen__PH5P_8php_source.md#l01452), [inRow()](doxygen__PH5P_8php_source.md#l03018), [inSelect()](doxygen__PH5P_8php_source.md#l03210), [inTable()](doxygen__PH5P_8php_source.md#l02630), and [inTableBody()](doxygen__PH5P_8php_source.md#l02932).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::insertText | ( | $ | *data* | ) | `[private]` |

Definition at line [3562](doxygen__PH5P_8php_source.md#l03562) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$data](doxygen__test-settings_8sample_8php_source.md#l00014), and [appendToRealParent()](doxygen__PH5P_8php_source.md#l03572).

Referenced by [afterFrameset()](doxygen__PH5P_8php_source.md#l03461), [afterHead()](doxygen__PH5P_8php_source.md#l01576), [beforeHead()](doxygen__PH5P_8php_source.md#l01398), [inBody()](doxygen__PH5P_8php_source.md#l01632), [inFrameset()](doxygen__PH5P_8php_source.md#l03398), [inHead()](doxygen__PH5P_8php_source.md#l01452), and [inSelect()](doxygen__PH5P_8php_source.md#l03210).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::inTable | ( | $ | *token* | ) | `[private]` |

Definition at line [2630](doxygen__PH5P_8php_source.md#l02630) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [clearStackToTableContext()](doxygen__PH5P_8php_source.md#l03770), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [elementInScope()](doxygen__PH5P_8php_source.md#l03600), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [generateImpliedEndTags()](doxygen__PH5P_8php_source.md#l03741), [IN\_CAPTION](doxygen__PH5P_8php_source.md#l01212), [IN\_CGROUP](doxygen__PH5P_8php_source.md#l01213), [IN\_TBODY](doxygen__PH5P_8php_source.md#l01214), [inBody()](doxygen__PH5P_8php_source.md#l01632), [inColumnGroup()](doxygen__PH5P_8php_source.md#l02875), [insertElement()](doxygen__PH5P_8php_source.md#l03536), [inTableBody()](doxygen__PH5P_8php_source.md#l02932), [mainPhase()](doxygen__PH5P_8php_source.md#l01348), [MARKER](doxygen__PH5P_8php_source.md#l01228), [resetInsertionMode()](doxygen__PH5P_8php_source.md#l03787), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [inCaption()](doxygen__PH5P_8php_source.md#l02807), [inColumnGroup()](doxygen__PH5P_8php_source.md#l02875), [inRow()](doxygen__PH5P_8php_source.md#l03018), [inTableBody()](doxygen__PH5P_8php_source.md#l02932), and [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::inTableBody | ( | $ | *token* | ) | `[private]` |

Definition at line [2932](doxygen__PH5P_8php_source.md#l02932) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [clearStackToTableContext()](doxygen__PH5P_8php_source.md#l03770), [elementInScope()](doxygen__PH5P_8php_source.md#l03600), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [IN\_ROW](doxygen__PH5P_8php_source.md#l01215), [IN\_TABLE](doxygen__PH5P_8php_source.md#l01211), [inRow()](doxygen__PH5P_8php_source.md#l03018), [insertElement()](doxygen__PH5P_8php_source.md#l03536), [inTable()](doxygen__PH5P_8php_source.md#l02630), [mainPhase()](doxygen__PH5P_8php_source.md#l01348), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [inTable()](doxygen__PH5P_8php_source.md#l02630), and [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::mainPhase | ( | $ | *token* | ) | `[private]` |

Definition at line [1348](doxygen__PH5P_8php_source.md#l01348) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [afterBody()](doxygen__PH5P_8php_source.md#l03359), [afterFrameset()](doxygen__PH5P_8php_source.md#l03461), [afterHead()](doxygen__PH5P_8php_source.md#l01576), [beforeHead()](doxygen__PH5P_8php_source.md#l01398), [HTML5::DOCTYPE](doxygen__PH5P_8php_source.md#l00120), [HTML5::EOF()](doxygen__PH5P_8php_source.md#l01170), [generateImpliedEndTags()](doxygen__PH5P_8php_source.md#l03741), [inBody()](doxygen__PH5P_8php_source.md#l01632), [inCaption()](doxygen__PH5P_8php_source.md#l02807), [inCell()](doxygen__PH5P_8php_source.md#l03103), [inColumnGroup()](doxygen__PH5P_8php_source.md#l02875), [inFrameset()](doxygen__PH5P_8php_source.md#l03398), [inHead()](doxygen__PH5P_8php_source.md#l01452), [inRow()](doxygen__PH5P_8php_source.md#l03018), [inSelect()](doxygen__PH5P_8php_source.md#l03210), [inTable()](doxygen__PH5P_8php_source.md#l02630), [inTableBody()](doxygen__PH5P_8php_source.md#l02932), [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121), and [trailingEndPhase()](doxygen__PH5P_8php_source.md#l03496).

Referenced by [emitToken()](doxygen__PH5P_8php_source.md#l01242), [inSelect()](doxygen__PH5P_8php_source.md#l03210), [inTable()](doxygen__PH5P_8php_source.md#l02630), [inTableBody()](doxygen__PH5P_8php_source.md#l02932), [rootElementPhase()](doxygen__PH5P_8php_source.md#l01301), and [trailingEndPhase()](doxygen__PH5P_8php_source.md#l03496).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5TreeConstructer::reconstructActiveFormattingElements | ( |  | ) | `[private]` |

Definition at line [3649](doxygen__PH5P_8php_source.md#l03649) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inBody()](doxygen__PH5P_8php_source.md#l01632).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5TreeConstructer::resetInsertionMode | ( |  | ) | `[private]` |

Definition at line [3787](doxygen__PH5P_8php_source.md#l03787) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [IN\_BODY](doxygen__PH5P_8php_source.md#l01210), [IN\_CAPTION](doxygen__PH5P_8php_source.md#l01212), [IN\_CELL](doxygen__PH5P_8php_source.md#l01216), [IN\_CGROUP](doxygen__PH5P_8php_source.md#l01213), [IN\_FRAME](doxygen__PH5P_8php_source.md#l01219), [IN\_ROW](doxygen__PH5P_8php_source.md#l01215), [IN\_SELECT](doxygen__PH5P_8php_source.md#l01217), [IN\_TABLE](doxygen__PH5P_8php_source.md#l01211), and [IN\_TBODY](doxygen__PH5P_8php_source.md#l01214).

Referenced by [inSelect()](doxygen__PH5P_8php_source.md#l03210), and [inTable()](doxygen__PH5P_8php_source.md#l02630).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::rootElementPhase | ( | $ | *token* | ) | `[private]` |

Definition at line [1301](doxygen__PH5P_8php_source.md#l01301) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [$html](doxygen__lotto_8php_source.md#l00009), [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [HTML5::DOCTYPE](doxygen__PH5P_8php_source.md#l00120), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [HTML5::EOF()](doxygen__PH5P_8php_source.md#l01170), [MAIN\_PHASE](doxygen__PH5P_8php_source.md#l01203), [mainPhase()](doxygen__PH5P_8php_source.md#l01348), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [emitToken()](doxygen__PH5P_8php_source.md#l01242), and [initPhase()](doxygen__PH5P_8php_source.md#l01251).

|  |  |  |  |  |
| --- | --- | --- | --- | --- |
| HTML5TreeConstructer::save | ( |  | ) |  |

Definition at line [3900](doxygen__PH5P_8php_source.md#l03900) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |  |  |  |  |  |
| --- | --- | --- | --- | --- | --- |
| HTML5TreeConstructer::trailingEndPhase | ( | $ | *token* | ) | `[private]` |

Definition at line [3496](doxygen__PH5P_8php_source.md#l03496) of file [PH5P.php](doxygen__PH5P_8php_source.md).

References [HTML5::CHARACTR](doxygen__PH5P_8php_source.md#l00124), [HTML5::COMMENT](doxygen__PH5P_8php_source.md#l00123), [HTML5::DOCTYPE](doxygen__PH5P_8php_source.md#l00120), [HTML5::ENDTAG](doxygen__PH5P_8php_source.md#l00122), [HTML5::EOF()](doxygen__PH5P_8php_source.md#l01170), [MAIN\_PHASE](doxygen__PH5P_8php_source.md#l01203), [mainPhase()](doxygen__PH5P_8php_source.md#l01348), and [HTML5::STARTTAG](doxygen__PH5P_8php_source.md#l00121).

Referenced by [emitToken()](doxygen__PH5P_8php_source.md#l01242), and [mainPhase()](doxygen__PH5P_8php_source.md#l01348).

---

## Member Data Documentation

|  |
| --- |
| HTML5TreeConstructer::$a\_formatting = array() `[private]` |

Definition at line [1185](doxygen__PH5P_8php_source.md#l01185) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5TreeConstructer::$dom `[private]` |

Definition at line [1183](doxygen__PH5P_8php_source.md#l01183) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5TreeConstructer::$form\_pointer = null `[private]` |

Definition at line [1188](doxygen__PH5P_8php_source.md#l01188) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5TreeConstructer::$formatting = array('a','b','big','em','font','i','nobr','s','small','strike','strong','tt','u') `[private]` |

Definition at line [1191](doxygen__PH5P_8php_source.md#l01191) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5TreeConstructer::$foster\_parent = null `[private]` |

Definition at line [1184](doxygen__PH5P_8php_source.md#l01184) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5TreeConstructer::$head\_pointer = null `[private]` |

Definition at line [1187](doxygen__PH5P_8php_source.md#l01187) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5TreeConstructer::$mode `[private]` |

Definition at line [1182](doxygen__PH5P_8php_source.md#l01182) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5TreeConstructer::$phase `[private]` |

Definition at line [1181](doxygen__PH5P_8php_source.md#l01181) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5TreeConstructer::$scoping = array('button','caption','html','marquee','object','table','td','th') `[private]` |

Definition at line [1190](doxygen__PH5P_8php_source.md#l01190) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5TreeConstructer::$special `[private]` |

**Initial value:**

```
 array('address','area','base','basefont','bgsound',
    'blockquote','body','br','center','col','colgroup','dd','dir','div','dl',
    'dt','embed','fieldset','form','frame','frameset','h1','h2','h3','h4','h5',
    'h6','head','hr','iframe','image','img','input','isindex','li','link',
    'listing','menu','meta','noembed','noframes','noscript','ol','optgroup',
    'option','p','param','plaintext','pre','script','select','spacer','style',
    'tbody','textarea','tfoot','thead','title','tr','ul','wbr')
```

Definition at line [1192](doxygen__PH5P_8php_source.md#l01192) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| HTML5TreeConstructer::$stack = array() |

Definition at line [1179](doxygen__PH5P_8php_source.md#l01179) of file [PH5P.php](doxygen__PH5P_8php_source.md).

|  |
| --- |
| const [HTML5TreeConstructer::AFTER\_BODY](doxygen__classHTML5TreeConstructer.md#a999b3e3c17749259563c2c102e2c09e9) = 11 |

Definition at line [1218](doxygen__PH5P_8php_source.md#l01218) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inBody()](doxygen__PH5P_8php_source.md#l01632).

|  |
| --- |
| const [HTML5TreeConstructer::AFTER\_HEAD](doxygen__classHTML5TreeConstructer.md#aa7370b9a69df3ec094e3fcb46c61ef0d) = 2 |

Definition at line [1209](doxygen__PH5P_8php_source.md#l01209) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inHead()](doxygen__PH5P_8php_source.md#l01452).

|  |
| --- |
| const [HTML5TreeConstructer::AFTR\_FRAME](doxygen__classHTML5TreeConstructer.md#ac3eb8ac4105201ad4e98ce9c9a81347a) = 13 |

Definition at line [1220](doxygen__PH5P_8php_source.md#l01220) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inFrameset()](doxygen__PH5P_8php_source.md#l03398).

|  |
| --- |
| const [HTML5TreeConstructer::BEFOR\_HEAD](doxygen__classHTML5TreeConstructer.md#ab5f3195766fbba1539208145439ce17b) = 0 |

Definition at line [1207](doxygen__PH5P_8php_source.md#l01207) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [\_\_construct()](doxygen__PH5P_8php_source.md#l01230).

|  |
| --- |
| const [HTML5TreeConstructer::END\_PHASE](doxygen__classHTML5TreeConstructer.md#a265916a150d9ab06d947eec0d62b3aec) = 3 |

Definition at line [1204](doxygen__PH5P_8php_source.md#l01204) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [afterBody()](doxygen__PH5P_8php_source.md#l03359), and [afterFrameset()](doxygen__PH5P_8php_source.md#l03461).

|  |
| --- |
| const [HTML5TreeConstructer::FORMATTING](doxygen__classHTML5TreeConstructer.md#a11bb5cd773c1da3131fda7655326d498) = 2 |

Definition at line [1225](doxygen__PH5P_8php_source.md#l01225) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [getElementCategory()](doxygen__PH5P_8php_source.md#l03755).

|  |
| --- |
| const [HTML5TreeConstructer::IN\_BODY](doxygen__classHTML5TreeConstructer.md#a96dac03a6175a99d9c2b8061e3d91313) = 3 |

Definition at line [1210](doxygen__PH5P_8php_source.md#l01210) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [afterBody()](doxygen__PH5P_8php_source.md#l03359), [afterHead()](doxygen__PH5P_8php_source.md#l01576), and [resetInsertionMode()](doxygen__PH5P_8php_source.md#l03787).

|  |
| --- |
| const [HTML5TreeConstructer::IN\_CAPTION](doxygen__classHTML5TreeConstructer.md#a9f9f002cd7a7a52ebd86ce97f2949f3f) = 5 |

Definition at line [1212](doxygen__PH5P_8php_source.md#l01212) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inTable()](doxygen__PH5P_8php_source.md#l02630), and [resetInsertionMode()](doxygen__PH5P_8php_source.md#l03787).

|  |
| --- |
| const [HTML5TreeConstructer::IN\_CELL](doxygen__classHTML5TreeConstructer.md#a51864d0a059b9018f6ec895400802d06) = 9 |

Definition at line [1216](doxygen__PH5P_8php_source.md#l01216) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inRow()](doxygen__PH5P_8php_source.md#l03018), and [resetInsertionMode()](doxygen__PH5P_8php_source.md#l03787).

|  |
| --- |
| const [HTML5TreeConstructer::IN\_CGROUP](doxygen__classHTML5TreeConstructer.md#a8bf6f6afa477e700461837f1464a94b8) = 6 |

Definition at line [1213](doxygen__PH5P_8php_source.md#l01213) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inTable()](doxygen__PH5P_8php_source.md#l02630), and [resetInsertionMode()](doxygen__PH5P_8php_source.md#l03787).

|  |
| --- |
| const [HTML5TreeConstructer::IN\_FRAME](doxygen__classHTML5TreeConstructer.md#aaf68c3f35587123a0dadd2a12750f279) = 12 |

Definition at line [1219](doxygen__PH5P_8php_source.md#l01219) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [afterHead()](doxygen__PH5P_8php_source.md#l01576), and [resetInsertionMode()](doxygen__PH5P_8php_source.md#l03787).

|  |
| --- |
| const [HTML5TreeConstructer::IN\_HEAD](doxygen__classHTML5TreeConstructer.md#a1c19225b6fc03d03d65399bbf2775ea0) = 1 |

Definition at line [1208](doxygen__PH5P_8php_source.md#l01208) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [afterHead()](doxygen__PH5P_8php_source.md#l01576), and [beforeHead()](doxygen__PH5P_8php_source.md#l01398).

|  |
| --- |
| const [HTML5TreeConstructer::IN\_ROW](doxygen__classHTML5TreeConstructer.md#a9f89c87246db41e99ad83c2d6d87e0b4) = 8 |

Definition at line [1215](doxygen__PH5P_8php_source.md#l01215) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inCell()](doxygen__PH5P_8php_source.md#l03103), [inTableBody()](doxygen__PH5P_8php_source.md#l02932), and [resetInsertionMode()](doxygen__PH5P_8php_source.md#l03787).

|  |
| --- |
| const [HTML5TreeConstructer::IN\_SELECT](doxygen__classHTML5TreeConstructer.md#ac86b82d1e3aa08473a18619a63d409e4) = 10 |

Definition at line [1217](doxygen__PH5P_8php_source.md#l01217) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inBody()](doxygen__PH5P_8php_source.md#l01632), and [resetInsertionMode()](doxygen__PH5P_8php_source.md#l03787).

|  |
| --- |
| const [HTML5TreeConstructer::IN\_TABLE](doxygen__classHTML5TreeConstructer.md#ab0c451330ab3a1a0387ef62bb4b48f1c) = 4 |

Definition at line [1211](doxygen__PH5P_8php_source.md#l01211) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inBody()](doxygen__PH5P_8php_source.md#l01632), [inCaption()](doxygen__PH5P_8php_source.md#l02807), [inColumnGroup()](doxygen__PH5P_8php_source.md#l02875), [inTableBody()](doxygen__PH5P_8php_source.md#l02932), and [resetInsertionMode()](doxygen__PH5P_8php_source.md#l03787).

|  |
| --- |
| const [HTML5TreeConstructer::IN\_TBODY](doxygen__classHTML5TreeConstructer.md#acd979180a3036c84c5b04f9547189f9a) = 7 |

Definition at line [1214](doxygen__PH5P_8php_source.md#l01214) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inRow()](doxygen__PH5P_8php_source.md#l03018), [inTable()](doxygen__PH5P_8php_source.md#l02630), and [resetInsertionMode()](doxygen__PH5P_8php_source.md#l03787).

|  |
| --- |
| const [HTML5TreeConstructer::INIT\_PHASE](doxygen__classHTML5TreeConstructer.md#a025c5721f05fef6911dead9c3ce5dd17) = 0 |

Definition at line [1201](doxygen__PH5P_8php_source.md#l01201) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [\_\_construct()](doxygen__PH5P_8php_source.md#l01230).

|  |
| --- |
| const [HTML5TreeConstructer::MAIN\_PHASE](doxygen__classHTML5TreeConstructer.md#ab47b9b28a03b9186cd5927e34a92ab00) = 2 |

Definition at line [1203](doxygen__PH5P_8php_source.md#l01203) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [rootElementPhase()](doxygen__PH5P_8php_source.md#l01301), and [trailingEndPhase()](doxygen__PH5P_8php_source.md#l03496).

|  |
| --- |
| const [HTML5TreeConstructer::MARKER](doxygen__classHTML5TreeConstructer.md#a223a988344485fd8d6a7eb62da0bd6f2) = 0 |

Definition at line [1228](doxygen__PH5P_8php_source.md#l01228) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [inBody()](doxygen__PH5P_8php_source.md#l01632), [inRow()](doxygen__PH5P_8php_source.md#l03018), and [inTable()](doxygen__PH5P_8php_source.md#l02630).

|  |
| --- |
| const [HTML5TreeConstructer::PHRASING](doxygen__classHTML5TreeConstructer.md#a668f156805a33544101e8b616242bf35) = 3 |

Definition at line [1226](doxygen__PH5P_8php_source.md#l01226) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [getElementCategory()](doxygen__PH5P_8php_source.md#l03755).

|  |
| --- |
| const [HTML5TreeConstructer::ROOT\_PHASE](doxygen__classHTML5TreeConstructer.md#ad5bb6803e6dd56fba50eea900c9796c8) = 1 |

Definition at line [1202](doxygen__PH5P_8php_source.md#l01202) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [initPhase()](doxygen__PH5P_8php_source.md#l01251).

|  |
| --- |
| const [HTML5TreeConstructer::SCOPING](doxygen__classHTML5TreeConstructer.md#ae58e4a6b6175f5b0c373a6ec20706b88) = 1 |

Definition at line [1224](doxygen__PH5P_8php_source.md#l01224) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [getElementCategory()](doxygen__PH5P_8php_source.md#l03755).

|  |
| --- |
| const [HTML5TreeConstructer::SPECIAL](doxygen__classHTML5TreeConstructer.md#a7f4e05d3df089320a8b4cca78d04a176) = 0 |

Definition at line [1223](doxygen__PH5P_8php_source.md#l01223) of file [PH5P.php](doxygen__PH5P_8php_source.md).

Referenced by [getElementCategory()](doxygen__PH5P_8php_source.md#l03755).

---

The documentation for this class was generated from the following file:

- /home/ezyang/Dev/htmlpurifier/library/HTMLPurifier/Lexer/[PH5P.php](doxygen__PH5P_8php_source.md)

- [HTML5TreeConstructer](doxygen__classHTML5TreeConstructer.md)
- Generated on Wed Jan 18 2012 22:58:18 for HTMLPurifier by 
  [![doxygen](doxygen.png)](http://www.doxygen.org/index.html) 1.7.4
