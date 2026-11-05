# IntlChar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.intlchar.php

---

# IntlChar

(PHP 7, PHP 8)

## Introdução

**IntlChar** fornece acesso a um número de métodos
utilitários que podem ser usados para acessar informações sobre caracteres Unicode.

Os métodos e constantes são aderentes de maneira muito próxima aos nomes e comportamentos utilizados pela biblioteca ICU subjacente.

## Resumo da classe

class ****IntlChar****
{

/\* Constantes \*/

public
const
[string](language.types.string.md)
[UNICODE\_VERSION](class.intlchar.md#intlchar.constants.unicode-version);

public
const
[int](language.types.integer.md)
[CODEPOINT\_MIN](class.intlchar.md#intlchar.constants.codepoint-min);

public
const
[int](language.types.integer.md)
[CODEPOINT\_MAX](class.intlchar.md#intlchar.constants.codepoint-max);

public
const
[float](language.types.float.md)
[NO\_NUMERIC\_VALUE](class.intlchar.md#intlchar.constants.no-numeric-value);

public
const
[int](language.types.integer.md)
[PROPERTY\_ALPHABETIC](class.intlchar.md#intlchar.constants.property-alphabetic);

public
const
[int](language.types.integer.md)
[PROPERTY\_BINARY\_START](class.intlchar.md#intlchar.constants.property-binary-start);

public
const
[int](language.types.integer.md)
[PROPERTY\_ASCII\_HEX\_DIGIT](class.intlchar.md#intlchar.constants.property-ascii-hex-digit);

public
const
[int](language.types.integer.md)
[PROPERTY\_BIDI\_CONTROL](class.intlchar.md#intlchar.constants.property-bidi-control);

public
const
[int](language.types.integer.md)
[PROPERTY\_BIDI\_MIRRORED](class.intlchar.md#intlchar.constants.property-bidi-mirrored);

public
const
[int](language.types.integer.md)
[PROPERTY\_DASH](class.intlchar.md#intlchar.constants.property-dash);

public
const
[int](language.types.integer.md)
[PROPERTY\_DEFAULT\_IGNORABLE\_CODE\_POINT](class.intlchar.md#intlchar.constants.property-default-ignorable-code-point);

public
const
[int](language.types.integer.md)
[PROPERTY\_DEPRECATED](class.intlchar.md#intlchar.constants.property-deprecated);

public
const
[int](language.types.integer.md)
[PROPERTY\_DIACRITIC](class.intlchar.md#intlchar.constants.property-diacritic);

public
const
[int](language.types.integer.md)
[PROPERTY\_EXTENDER](class.intlchar.md#intlchar.constants.property-extender);

public
const
[int](language.types.integer.md)
[PROPERTY\_FULL\_COMPOSITION\_EXCLUSION](class.intlchar.md#intlchar.constants.property-full-composition-exclusion);

public
const
[int](language.types.integer.md)
[PROPERTY\_GRAPHEME\_BASE](class.intlchar.md#intlchar.constants.property-grapheme-base);

public
const
[int](language.types.integer.md)
[PROPERTY\_GRAPHEME\_EXTEND](class.intlchar.md#intlchar.constants.property-grapheme-extend);

public
const
[int](language.types.integer.md)
[PROPERTY\_GRAPHEME\_LINK](class.intlchar.md#intlchar.constants.property-grapheme-link);

public
const
[int](language.types.integer.md)
[PROPERTY\_HEX\_DIGIT](class.intlchar.md#intlchar.constants.property-hex-digit);

public
const
[int](language.types.integer.md)
[PROPERTY\_HYPHEN](class.intlchar.md#intlchar.constants.property-hyphen);

public
const
[int](language.types.integer.md)
[PROPERTY\_ID\_CONTINUE](class.intlchar.md#intlchar.constants.property-id-continue);

public
const
[int](language.types.integer.md)
[PROPERTY\_ID\_START](class.intlchar.md#intlchar.constants.property-id-start);

public
const
[int](language.types.integer.md)
[PROPERTY\_IDEOGRAPHIC](class.intlchar.md#intlchar.constants.property-ideographic);

public
const
[int](language.types.integer.md)
[PROPERTY\_IDS\_BINARY\_OPERATOR](class.intlchar.md#intlchar.constants.property-ids-binary-operator);

public
const
[int](language.types.integer.md)
[PROPERTY\_IDS\_TRINARY\_OPERATOR](class.intlchar.md#intlchar.constants.property-ids-trinary-operator);

public
const
[int](language.types.integer.md)
[PROPERTY\_IDS\_UNARY\_OPERATOR](class.intlchar.md#intlchar.constants.property-ids-unary-operator);

public
const
[int](language.types.integer.md)
[PROPERTY\_ID\_COMPAT\_MATH\_START](class.intlchar.md#intlchar.constants.property-id-compat-math-start);

public
const
[int](language.types.integer.md)
[PROPERTY\_ID\_COMPAT\_MATH\_CONTINUE](class.intlchar.md#intlchar.constants.property-id-compat-math-continue);

public
const
[int](language.types.integer.md)
[PROPERTY\_JOIN\_CONTROL](class.intlchar.md#intlchar.constants.property-join-control);

public
const
[int](language.types.integer.md)
[PROPERTY\_LOGICAL\_ORDER\_EXCEPTION](class.intlchar.md#intlchar.constants.property-logical-order-exception);

public
const
[int](language.types.integer.md)
[PROPERTY\_LOWERCASE](class.intlchar.md#intlchar.constants.property-lowercase);

public
const
[int](language.types.integer.md)
[PROPERTY\_MATH](class.intlchar.md#intlchar.constants.property-math);

public
const
[int](language.types.integer.md)
[PROPERTY\_NONCHARACTER\_CODE\_POINT](class.intlchar.md#intlchar.constants.property-noncharacter-code-point);

public
const
[int](language.types.integer.md)
[PROPERTY\_QUOTATION\_MARK](class.intlchar.md#intlchar.constants.property-quotation-mark);

public
const
[int](language.types.integer.md)
[PROPERTY\_RADICAL](class.intlchar.md#intlchar.constants.property-radical);

public
const
[int](language.types.integer.md)
[PROPERTY\_SOFT\_DOTTED](class.intlchar.md#intlchar.constants.property-soft-dotted);

public
const
[int](language.types.integer.md)
[PROPERTY\_TERMINAL\_PUNCTUATION](class.intlchar.md#intlchar.constants.property-terminal-punctuation);

public
const
[int](language.types.integer.md)
[PROPERTY\_UNIFIED\_IDEOGRAPH](class.intlchar.md#intlchar.constants.property-unified-ideograph);

public
const
[int](language.types.integer.md)
[PROPERTY\_UPPERCASE](class.intlchar.md#intlchar.constants.property-uppercase);

public
const
[int](language.types.integer.md)
[PROPERTY\_WHITE\_SPACE](class.intlchar.md#intlchar.constants.property-white-space);

public
const
[int](language.types.integer.md)
[PROPERTY\_XID\_CONTINUE](class.intlchar.md#intlchar.constants.property-xid-continue);

public
const
[int](language.types.integer.md)
[PROPERTY\_XID\_START](class.intlchar.md#intlchar.constants.property-xid-start);

public
const
[int](language.types.integer.md)
[PROPERTY\_CASE\_SENSITIVE](class.intlchar.md#intlchar.constants.property-case-sensitive);

public
const
[int](language.types.integer.md)
[PROPERTY\_S\_TERM](class.intlchar.md#intlchar.constants.property-s-term);

public
const
[int](language.types.integer.md)
[PROPERTY\_VARIATION\_SELECTOR](class.intlchar.md#intlchar.constants.property-variation-selector);

public
const
[int](language.types.integer.md)
[PROPERTY\_NFD\_INERT](class.intlchar.md#intlchar.constants.property-nfd-inert);

public
const
[int](language.types.integer.md)
[PROPERTY\_NFKD\_INERT](class.intlchar.md#intlchar.constants.property-nfkd-inert);

public
const
[int](language.types.integer.md)
[PROPERTY\_NFC\_INERT](class.intlchar.md#intlchar.constants.property-nfc-inert);

public
const
[int](language.types.integer.md)
[PROPERTY\_NFKC\_INERT](class.intlchar.md#intlchar.constants.property-nfkc-inert);

public
const
[int](language.types.integer.md)
[PROPERTY\_SEGMENT\_STARTER](class.intlchar.md#intlchar.constants.property-segment-starter);

public
const
[int](language.types.integer.md)
[PROPERTY\_PATTERN\_SYNTAX](class.intlchar.md#intlchar.constants.property-pattern-syntax);

public
const
[int](language.types.integer.md)
[PROPERTY\_PATTERN\_WHITE\_SPACE](class.intlchar.md#intlchar.constants.property-pattern-white-space);

public
const
[int](language.types.integer.md)
[PROPERTY\_POSIX\_ALNUM](class.intlchar.md#intlchar.constants.property-posix-alnum);

public
const
[int](language.types.integer.md)
[PROPERTY\_POSIX\_BLANK](class.intlchar.md#intlchar.constants.property-posix-blank);

public
const
[int](language.types.integer.md)
[PROPERTY\_POSIX\_GRAPH](class.intlchar.md#intlchar.constants.property-posix-graph);

public
const
[int](language.types.integer.md)
[PROPERTY\_POSIX\_PRINT](class.intlchar.md#intlchar.constants.property-posix-print);

public
const
[int](language.types.integer.md)
[PROPERTY\_POSIX\_XDIGIT](class.intlchar.md#intlchar.constants.property-posix-xdigit);

public
const
[int](language.types.integer.md)
[PROPERTY\_CASED](class.intlchar.md#intlchar.constants.property-cased);

public
const
[int](language.types.integer.md)
[PROPERTY\_CASE\_IGNORABLE](class.intlchar.md#intlchar.constants.property-case-ignorable);

public
const
[int](language.types.integer.md)
[PROPERTY\_CHANGES\_WHEN\_LOWERCASED](class.intlchar.md#intlchar.constants.property-changes-when-lowercased);

public
const
[int](language.types.integer.md)
[PROPERTY\_CHANGES\_WHEN\_UPPERCASED](class.intlchar.md#intlchar.constants.property-changes-when-uppercased);

public
const
[int](language.types.integer.md)
[PROPERTY\_CHANGES\_WHEN\_TITLECASED](class.intlchar.md#intlchar.constants.property-changes-when-titlecased);

public
const
[int](language.types.integer.md)
[PROPERTY\_CHANGES\_WHEN\_CASEFOLDED](class.intlchar.md#intlchar.constants.property-changes-when-casefolded);

public
const
[int](language.types.integer.md)
[PROPERTY\_CHANGES\_WHEN\_CASEMAPPED](class.intlchar.md#intlchar.constants.property-changes-when-casemapped);

public
const
[int](language.types.integer.md)
[PROPERTY\_CHANGES\_WHEN\_NFKC\_CASEFOLDED](class.intlchar.md#intlchar.constants.property-changes-when-nfkc-casefolded);

public
const
[int](language.types.integer.md)
[PROPERTY\_BINARY\_LIMIT](class.intlchar.md#intlchar.constants.property-binary-limit);

public
const
[int](language.types.integer.md)
[PROPERTY\_BIDI\_CLASS](class.intlchar.md#intlchar.constants.property-bidi-class);

public
const
[int](language.types.integer.md)
[PROPERTY\_INT\_START](class.intlchar.md#intlchar.constants.property-int-start);

public
const
[int](language.types.integer.md)
[PROPERTY\_BLOCK](class.intlchar.md#intlchar.constants.property-block);

public
const
[int](language.types.integer.md)
[PROPERTY\_CANONICAL\_COMBINING\_CLASS](class.intlchar.md#intlchar.constants.property-canonical-combining-class);

public
const
[int](language.types.integer.md)
[PROPERTY\_DECOMPOSITION\_TYPE](class.intlchar.md#intlchar.constants.property-decomposition-type);

public
const
[int](language.types.integer.md)
[PROPERTY\_EAST\_ASIAN\_WIDTH](class.intlchar.md#intlchar.constants.property-east-asian-width);

public
const
[int](language.types.integer.md)
[PROPERTY\_GENERAL\_CATEGORY](class.intlchar.md#intlchar.constants.property-general-category);

public
const
[int](language.types.integer.md)
[PROPERTY\_JOINING\_GROUP](class.intlchar.md#intlchar.constants.property-joining-group);

public
const
[int](language.types.integer.md)
[PROPERTY\_JOINING\_TYPE](class.intlchar.md#intlchar.constants.property-joining-type);

public
const
[int](language.types.integer.md)
[PROPERTY\_LINE\_BREAK](class.intlchar.md#intlchar.constants.property-line-break);

public
const
[int](language.types.integer.md)
[PROPERTY\_NUMERIC\_TYPE](class.intlchar.md#intlchar.constants.property-numeric-type);

public
const
[int](language.types.integer.md)
[PROPERTY\_SCRIPT](class.intlchar.md#intlchar.constants.property-script);

public
const
[int](language.types.integer.md)
[PROPERTY\_HANGUL\_SYLLABLE\_TYPE](class.intlchar.md#intlchar.constants.property-hangul-syllable-type);

public
const
[int](language.types.integer.md)
[PROPERTY\_NFD\_QUICK\_CHECK](class.intlchar.md#intlchar.constants.property-nfd-quick-check);

public
const
[int](language.types.integer.md)
[PROPERTY\_NFKD\_QUICK\_CHECK](class.intlchar.md#intlchar.constants.property-nfkd-quick-check);

public
const
[int](language.types.integer.md)
[PROPERTY\_NFC\_QUICK\_CHECK](class.intlchar.md#intlchar.constants.property-nfc-quick-check);

public
const
[int](language.types.integer.md)
[PROPERTY\_NFKC\_QUICK\_CHECK](class.intlchar.md#intlchar.constants.property-nfkc-quick-check);

public
const
[int](language.types.integer.md)
[PROPERTY\_LEAD\_CANONICAL\_COMBINING\_CLASS](class.intlchar.md#intlchar.constants.property-lead-canonical-combining-class);

public
const
[int](language.types.integer.md)
[PROPERTY\_TRAIL\_CANONICAL\_COMBINING\_CLASS](class.intlchar.md#intlchar.constants.property-trail-canonical-combining-class);

public
const
[int](language.types.integer.md)
[PROPERTY\_GRAPHEME\_CLUSTER\_BREAK](class.intlchar.md#intlchar.constants.property-grapheme-cluster-break);

public
const
[int](language.types.integer.md)
[PROPERTY\_SENTENCE\_BREAK](class.intlchar.md#intlchar.constants.property-sentence-break);

public
const
[int](language.types.integer.md)
[PROPERTY\_WORD\_BREAK](class.intlchar.md#intlchar.constants.property-word-break);

public
const
[int](language.types.integer.md)
[PROPERTY\_BIDI\_PAIRED\_BRACKET\_TYPE](class.intlchar.md#intlchar.constants.property-bidi-paired-bracket-type);

public
const
[int](language.types.integer.md)
[PROPERTY\_INT\_LIMIT](class.intlchar.md#intlchar.constants.property-int-limit);

public
const
[int](language.types.integer.md)
[PROPERTY\_GENERAL\_CATEGORY\_MASK](class.intlchar.md#intlchar.constants.property-general-category-mask);

public
const
[int](language.types.integer.md)
[PROPERTY\_MASK\_START](class.intlchar.md#intlchar.constants.property-mask-start);

public
const
[int](language.types.integer.md)
[PROPERTY\_MASK\_LIMIT](class.intlchar.md#intlchar.constants.property-mask-limit);

public
const
[int](language.types.integer.md)
[PROPERTY\_NUMERIC\_VALUE](class.intlchar.md#intlchar.constants.property-numeric-value);

public
const
[int](language.types.integer.md)
[PROPERTY\_DOUBLE\_START](class.intlchar.md#intlchar.constants.property-double-start);

public
const
[int](language.types.integer.md)
[PROPERTY\_DOUBLE\_LIMIT](class.intlchar.md#intlchar.constants.property-double-limit);

public
const
[int](language.types.integer.md)
[PROPERTY\_AGE](class.intlchar.md#intlchar.constants.property-age);

public
const
[int](language.types.integer.md)
[PROPERTY\_STRING\_START](class.intlchar.md#intlchar.constants.property-string-start);

public
const
[int](language.types.integer.md)
[PROPERTY\_BIDI\_MIRRORING\_GLYPH](class.intlchar.md#intlchar.constants.property-bidi-mirroring-glyph);

public
const
[int](language.types.integer.md)
[PROPERTY\_CASE\_FOLDING](class.intlchar.md#intlchar.constants.property-case-folding);

public
const
[int](language.types.integer.md)
[PROPERTY\_ISO\_COMMENT](class.intlchar.md#intlchar.constants.property-iso-comment);

public
const
[int](language.types.integer.md)
[PROPERTY\_LOWERCASE\_MAPPING](class.intlchar.md#intlchar.constants.property-lowercase-mapping);

public
const
[int](language.types.integer.md)
[PROPERTY\_NAME](class.intlchar.md#intlchar.constants.property-name);

public
const
[int](language.types.integer.md)
[PROPERTY\_SIMPLE\_CASE\_FOLDING](class.intlchar.md#intlchar.constants.property-simple-case-folding);

public
const
[int](language.types.integer.md)
[PROPERTY\_SIMPLE\_LOWERCASE\_MAPPING](class.intlchar.md#intlchar.constants.property-simple-lowercase-mapping);

public
const
[int](language.types.integer.md)
[PROPERTY\_SIMPLE\_TITLECASE\_MAPPING](class.intlchar.md#intlchar.constants.property-simple-titlecase-mapping);

public
const
[int](language.types.integer.md)
[PROPERTY\_SIMPLE\_UPPERCASE\_MAPPING](class.intlchar.md#intlchar.constants.property-simple-uppercase-mapping);

public
const
[int](language.types.integer.md)
[PROPERTY\_TITLECASE\_MAPPING](class.intlchar.md#intlchar.constants.property-titlecase-mapping);

public
const
[int](language.types.integer.md)
[PROPERTY\_UNICODE\_1\_NAME](class.intlchar.md#intlchar.constants.property-unicode-1-name);

public
const
[int](language.types.integer.md)
[PROPERTY\_UPPERCASE\_MAPPING](class.intlchar.md#intlchar.constants.property-uppercase-mapping);

public
const
[int](language.types.integer.md)
[PROPERTY\_BIDI\_PAIRED\_BRACKET](class.intlchar.md#intlchar.constants.property-bidi-paired-bracket);

public
const
[int](language.types.integer.md)
[PROPERTY\_STRING\_LIMIT](class.intlchar.md#intlchar.constants.property-string-limit);

public
const
[int](language.types.integer.md)
[PROPERTY\_SCRIPT\_EXTENSIONS](class.intlchar.md#intlchar.constants.property-script-extensions);

public
const
[int](language.types.integer.md)
[PROPERTY\_OTHER\_PROPERTY\_START](class.intlchar.md#intlchar.constants.property-other-property-start);

public
const
[int](language.types.integer.md)
[PROPERTY\_OTHER\_PROPERTY\_LIMIT](class.intlchar.md#intlchar.constants.property-other-property-limit);

public
const
[int](language.types.integer.md)
[PROPERTY\_INVALID\_CODE](class.intlchar.md#intlchar.constants.property-invalid-code);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_UNASSIGNED](class.intlchar.md#intlchar.constants.char-category-unassigned);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_GENERAL\_OTHER\_TYPES](class.intlchar.md#intlchar.constants.char-category-general-other-types);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_UPPERCASE\_LETTER](class.intlchar.md#intlchar.constants.char-category-uppercase-letter);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_LOWERCASE\_LETTER](class.intlchar.md#intlchar.constants.char-category-lowercase-letter);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_TITLECASE\_LETTER](class.intlchar.md#intlchar.constants.char-category-titlecase-letter);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_MODIFIER\_LETTER](class.intlchar.md#intlchar.constants.char-category-modifier-letter);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_OTHER\_LETTER](class.intlchar.md#intlchar.constants.char-category-other-letter);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_NON\_SPACING\_MARK](class.intlchar.md#intlchar.constants.char-category-non-spacing-mark);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_ENCLOSING\_MARK](class.intlchar.md#intlchar.constants.char-category-enclosing-mark);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_COMBINING\_SPACING\_MARK](class.intlchar.md#intlchar.constants.char-category-combining-spacing-mark);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_DECIMAL\_DIGIT\_NUMBER](class.intlchar.md#intlchar.constants.char-category-decimal-digit-number);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_LETTER\_NUMBER](class.intlchar.md#intlchar.constants.char-category-letter-number);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_OTHER\_NUMBER](class.intlchar.md#intlchar.constants.char-category-other-number);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_SPACE\_SEPARATOR](class.intlchar.md#intlchar.constants.char-category-space-separator);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_LINE\_SEPARATOR](class.intlchar.md#intlchar.constants.char-category-line-separator);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_PARAGRAPH\_SEPARATOR](class.intlchar.md#intlchar.constants.char-category-paragraph-separator);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_CONTROL\_CHAR](class.intlchar.md#intlchar.constants.char-category-control-char);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_FORMAT\_CHAR](class.intlchar.md#intlchar.constants.char-category-format-char);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_PRIVATE\_USE\_CHAR](class.intlchar.md#intlchar.constants.char-category-private-use-char);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_SURROGATE](class.intlchar.md#intlchar.constants.char-category-surrogate);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_DASH\_PUNCTUATION](class.intlchar.md#intlchar.constants.char-category-dash-punctuation);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_START\_PUNCTUATION](class.intlchar.md#intlchar.constants.char-category-start-punctuation);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_END\_PUNCTUATION](class.intlchar.md#intlchar.constants.char-category-end-punctuation);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_CONNECTOR\_PUNCTUATION](class.intlchar.md#intlchar.constants.char-category-connector-punctuation);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_OTHER\_PUNCTUATION](class.intlchar.md#intlchar.constants.char-category-other-punctuation);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_MATH\_SYMBOL](class.intlchar.md#intlchar.constants.char-category-math-symbol);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_CURRENCY\_SYMBOL](class.intlchar.md#intlchar.constants.char-category-currency-symbol);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_MODIFIER\_SYMBOL](class.intlchar.md#intlchar.constants.char-category-modifier-symbol);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_OTHER\_SYMBOL](class.intlchar.md#intlchar.constants.char-category-other-symbol);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_INITIAL\_PUNCTUATION](class.intlchar.md#intlchar.constants.char-category-initial-punctuation);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_FINAL\_PUNCTUATION](class.intlchar.md#intlchar.constants.char-category-final-punctuation);

public
const
[int](language.types.integer.md)
[CHAR\_CATEGORY\_CHAR\_CATEGORY\_COUNT](class.intlchar.md#intlchar.constants.char-category-char-category-count);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_LEFT\_TO\_RIGHT](class.intlchar.md#intlchar.constants.char-direction-left-to-right);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_RIGHT\_TO\_LEFT](class.intlchar.md#intlchar.constants.char-direction-right-to-left);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_EUROPEAN\_NUMBER](class.intlchar.md#intlchar.constants.char-direction-european-number);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_EUROPEAN\_NUMBER\_SEPARATOR](class.intlchar.md#intlchar.constants.char-direction-european-number-separator);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_EUROPEAN\_NUMBER\_TERMINATOR](class.intlchar.md#intlchar.constants.char-direction-european-number-terminator);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_ARABIC\_NUMBER](class.intlchar.md#intlchar.constants.char-direction-arabic-number);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_COMMON\_NUMBER\_SEPARATOR](class.intlchar.md#intlchar.constants.char-direction-common-number-separator);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_BLOCK\_SEPARATOR](class.intlchar.md#intlchar.constants.char-direction-block-separator);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_SEGMENT\_SEPARATOR](class.intlchar.md#intlchar.constants.char-direction-segment-separator);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_WHITE\_SPACE\_NEUTRAL](class.intlchar.md#intlchar.constants.char-direction-white-space-neutral);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_OTHER\_NEUTRAL](class.intlchar.md#intlchar.constants.char-direction-other-neutral);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_LEFT\_TO\_RIGHT\_EMBEDDING](class.intlchar.md#intlchar.constants.char-direction-left-to-right-embedding);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_LEFT\_TO\_RIGHT\_OVERRIDE](class.intlchar.md#intlchar.constants.char-direction-left-to-right-override);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_RIGHT\_TO\_LEFT\_ARABIC](class.intlchar.md#intlchar.constants.char-direction-right-to-left-arabic);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_RIGHT\_TO\_LEFT\_EMBEDDING](class.intlchar.md#intlchar.constants.char-direction-right-to-left-embedding);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_RIGHT\_TO\_LEFT\_OVERRIDE](class.intlchar.md#intlchar.constants.char-direction-right-to-left-override);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_POP\_DIRECTIONAL\_FORMAT](class.intlchar.md#intlchar.constants.char-direction-pop-directional-format);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_DIR\_NON\_SPACING\_MARK](class.intlchar.md#intlchar.constants.char-direction-dir-non-spacing-mark);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_BOUNDARY\_NEUTRAL](class.intlchar.md#intlchar.constants.char-direction-boundary-neutral);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_FIRST\_STRONG\_ISOLATE](class.intlchar.md#intlchar.constants.char-direction-first-strong-isolate);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_LEFT\_TO\_RIGHT\_ISOLATE](class.intlchar.md#intlchar.constants.char-direction-left-to-right-isolate);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_RIGHT\_TO\_LEFT\_ISOLATE](class.intlchar.md#intlchar.constants.char-direction-right-to-left-isolate);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_POP\_DIRECTIONAL\_ISOLATE](class.intlchar.md#intlchar.constants.char-direction-pop-directional-isolate);

public
const
[int](language.types.integer.md)
[CHAR\_DIRECTION\_CHAR\_DIRECTION\_COUNT](class.intlchar.md#intlchar.constants.char-direction-char-direction-count);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_NO\_BLOCK](class.intlchar.md#intlchar.constants.block-code-no-block);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BASIC\_LATIN](class.intlchar.md#intlchar.constants.block-code-basic-latin);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LATIN\_1\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-latin-1-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LATIN\_EXTENDED\_A](class.intlchar.md#intlchar.constants.block-code-latin-extended-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LATIN\_EXTENDED\_B](class.intlchar.md#intlchar.constants.block-code-latin-extended-b);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_IPA\_EXTENSIONS](class.intlchar.md#intlchar.constants.block-code-ipa-extensions);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SPACING\_MODIFIER\_LETTERS](class.intlchar.md#intlchar.constants.block-code-spacing-modifier-letters);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_COMBINING\_DIACRITICAL\_MARKS](class.intlchar.md#intlchar.constants.block-code-combining-diacritical-marks);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GREEK](class.intlchar.md#intlchar.constants.block-code-greek);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CYRILLIC](class.intlchar.md#intlchar.constants.block-code-cyrillic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ARMENIAN](class.intlchar.md#intlchar.constants.block-code-armenian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_HEBREW](class.intlchar.md#intlchar.constants.block-code-hebrew);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ARABIC](class.intlchar.md#intlchar.constants.block-code-arabic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SYRIAC](class.intlchar.md#intlchar.constants.block-code-syriac);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_THAANA](class.intlchar.md#intlchar.constants.block-code-thaana);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_DEVANAGARI](class.intlchar.md#intlchar.constants.block-code-devanagari);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BENGALI](class.intlchar.md#intlchar.constants.block-code-bengali);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GURMUKHI](class.intlchar.md#intlchar.constants.block-code-gurmukhi);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GUJARATI](class.intlchar.md#intlchar.constants.block-code-gujarati);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ORIYA](class.intlchar.md#intlchar.constants.block-code-oriya);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TAMIL](class.intlchar.md#intlchar.constants.block-code-tamil);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TELUGU](class.intlchar.md#intlchar.constants.block-code-telugu);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KANNADA](class.intlchar.md#intlchar.constants.block-code-kannada);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MALAYALAM](class.intlchar.md#intlchar.constants.block-code-malayalam);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SINHALA](class.intlchar.md#intlchar.constants.block-code-sinhala);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_THAI](class.intlchar.md#intlchar.constants.block-code-thai);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LAO](class.intlchar.md#intlchar.constants.block-code-lao);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TIBETAN](class.intlchar.md#intlchar.constants.block-code-tibetan);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MYANMAR](class.intlchar.md#intlchar.constants.block-code-myanmar);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GEORGIAN](class.intlchar.md#intlchar.constants.block-code-georgian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_HANGUL\_JAMO](class.intlchar.md#intlchar.constants.block-code-hangul-jamo);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ETHIOPIC](class.intlchar.md#intlchar.constants.block-code-ethiopic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CHEROKEE](class.intlchar.md#intlchar.constants.block-code-cherokee);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_UNIFIED\_CANADIAN\_ABORIGINAL\_SYLLABICS](class.intlchar.md#intlchar.constants.block-code-unified-canadian-aboriginal-syllabics);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_OGHAM](class.intlchar.md#intlchar.constants.block-code-ogham);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_RUNIC](class.intlchar.md#intlchar.constants.block-code-runic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KHMER](class.intlchar.md#intlchar.constants.block-code-khmer);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MONGOLIAN](class.intlchar.md#intlchar.constants.block-code-mongolian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LATIN\_EXTENDED\_ADDITIONAL](class.intlchar.md#intlchar.constants.block-code-latin-extended-additional);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GREEK\_EXTENDED](class.intlchar.md#intlchar.constants.block-code-greek-extended);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GENERAL\_PUNCTUATION](class.intlchar.md#intlchar.constants.block-code-general-punctuation);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SUPERSCRIPTS\_AND\_SUBSCRIPTS](class.intlchar.md#intlchar.constants.block-code-superscripts-and-subscripts);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CURRENCY\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-currency-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_COMBINING\_MARKS\_FOR\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-combining-marks-for-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LETTERLIKE\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-letterlike-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_NUMBER\_FORMS](class.intlchar.md#intlchar.constants.block-code-number-forms);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ARROWS](class.intlchar.md#intlchar.constants.block-code-arrows);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MATHEMATICAL\_OPERATORS](class.intlchar.md#intlchar.constants.block-code-mathematical-operators);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MISCELLANEOUS\_TECHNICAL](class.intlchar.md#intlchar.constants.block-code-miscellaneous-technical);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CONTROL\_PICTURES](class.intlchar.md#intlchar.constants.block-code-control-pictures);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_OPTICAL\_CHARACTER\_RECOGNITION](class.intlchar.md#intlchar.constants.block-code-optical-character-recognition);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ENCLOSED\_ALPHANUMERICS](class.intlchar.md#intlchar.constants.block-code-enclosed-alphanumerics);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BOX\_DRAWING](class.intlchar.md#intlchar.constants.block-code-box-drawing);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BLOCK\_ELEMENTS](class.intlchar.md#intlchar.constants.block-code-block-elements);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GEOMETRIC\_SHAPES](class.intlchar.md#intlchar.constants.block-code-geometric-shapes);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MISCELLANEOUS\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-miscellaneous-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_DINGBATS](class.intlchar.md#intlchar.constants.block-code-dingbats);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BRAILLE\_PATTERNS](class.intlchar.md#intlchar.constants.block-code-braille-patterns);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_RADICALS\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-cjk-radicals-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KANGXI\_RADICALS](class.intlchar.md#intlchar.constants.block-code-kangxi-radicals);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_IDEOGRAPHIC\_DESCRIPTION\_CHARACTERS](class.intlchar.md#intlchar.constants.block-code-ideographic-description-characters);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_SYMBOLS\_AND\_PUNCTUATION](class.intlchar.md#intlchar.constants.block-code-cjk-symbols-and-punctuation);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_HIRAGANA](class.intlchar.md#intlchar.constants.block-code-hiragana);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KATAKANA](class.intlchar.md#intlchar.constants.block-code-katakana);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BOPOMOFO](class.intlchar.md#intlchar.constants.block-code-bopomofo);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_HANGUL\_COMPATIBILITY\_JAMO](class.intlchar.md#intlchar.constants.block-code-hangul-compatibility-jamo);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KANBUN](class.intlchar.md#intlchar.constants.block-code-kanbun);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BOPOMOFO\_EXTENDED](class.intlchar.md#intlchar.constants.block-code-bopomofo-extended);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ENCLOSED\_CJK\_LETTERS\_AND\_MONTHS](class.intlchar.md#intlchar.constants.block-code-enclosed-cjk-letters-and-months);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_COMPATIBILITY](class.intlchar.md#intlchar.constants.block-code-cjk-compatibility);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_UNIFIED\_IDEOGRAPHS\_EXTENSION\_A](class.intlchar.md#intlchar.constants.block-code-cjk-unified-ideographs-extension-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_UNIFIED\_IDEOGRAPHS](class.intlchar.md#intlchar.constants.block-code-cjk-unified-ideographs);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_YI\_SYLLABLES](class.intlchar.md#intlchar.constants.block-code-yi-syllables);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_YI\_RADICALS](class.intlchar.md#intlchar.constants.block-code-yi-radicals);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_HANGUL\_SYLLABLES](class.intlchar.md#intlchar.constants.block-code-hangul-syllables);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_HIGH\_SURROGATES](class.intlchar.md#intlchar.constants.block-code-high-surrogates);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_HIGH\_PRIVATE\_USE\_SURROGATES](class.intlchar.md#intlchar.constants.block-code-high-private-use-surrogates);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LOW\_SURROGATES](class.intlchar.md#intlchar.constants.block-code-low-surrogates);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PRIVATE\_USE\_AREA](class.intlchar.md#intlchar.constants.block-code-private-use-area);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PRIVATE\_USE](class.intlchar.md#intlchar.constants.block-code-private-use);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_COMPATIBILITY\_IDEOGRAPHS](class.intlchar.md#intlchar.constants.block-code-cjk-compatibility-ideographs);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ALPHABETIC\_PRESENTATION\_FORMS](class.intlchar.md#intlchar.constants.block-code-alphabetic-presentation-forms);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ARABIC\_PRESENTATION\_FORMS\_A](class.intlchar.md#intlchar.constants.block-code-arabic-presentation-forms-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_COMBINING\_HALF\_MARKS](class.intlchar.md#intlchar.constants.block-code-combining-half-marks);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_COMPATIBILITY\_FORMS](class.intlchar.md#intlchar.constants.block-code-cjk-compatibility-forms);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SMALL\_FORM\_VARIANTS](class.intlchar.md#intlchar.constants.block-code-small-form-variants);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ARABIC\_PRESENTATION\_FORMS\_B](class.intlchar.md#intlchar.constants.block-code-arabic-presentation-forms-b);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SPECIALS](class.intlchar.md#intlchar.constants.block-code-specials);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_HALFWIDTH\_AND\_FULLWIDTH\_FORMS](class.intlchar.md#intlchar.constants.block-code-halfwidth-and-fullwidth-forms);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_OLD\_ITALIC](class.intlchar.md#intlchar.constants.block-code-old-italic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GOTHIC](class.intlchar.md#intlchar.constants.block-code-gothic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_DESERET](class.intlchar.md#intlchar.constants.block-code-deseret);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BYZANTINE\_MUSICAL\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-byzantine-musical-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MUSICAL\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-musical-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MATHEMATICAL\_ALPHANUMERIC\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-mathematical-alphanumeric-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_UNIFIED\_IDEOGRAPHS\_EXTENSION\_B](class.intlchar.md#intlchar.constants.block-code-cjk-unified-ideographs-extension-b);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_COMPATIBILITY\_IDEOGRAPHS\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-cjk-compatibility-ideographs-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TAGS](class.intlchar.md#intlchar.constants.block-code-tags);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CYRILLIC\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-cyrillic-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CYRILLIC\_SUPPLEMENTARY](class.intlchar.md#intlchar.constants.block-code-cyrillic-supplementary);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TAGALOG](class.intlchar.md#intlchar.constants.block-code-tagalog);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_HANUNOO](class.intlchar.md#intlchar.constants.block-code-hanunoo);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BUHID](class.intlchar.md#intlchar.constants.block-code-buhid);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TAGBANWA](class.intlchar.md#intlchar.constants.block-code-tagbanwa);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MISCELLANEOUS\_MATHEMATICAL\_SYMBOLS\_A](class.intlchar.md#intlchar.constants.block-code-miscellaneous-mathematical-symbols-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SUPPLEMENTAL\_ARROWS\_A](class.intlchar.md#intlchar.constants.block-code-supplemental-arrows-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SUPPLEMENTAL\_ARROWS\_B](class.intlchar.md#intlchar.constants.block-code-supplemental-arrows-b);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MISCELLANEOUS\_MATHEMATICAL\_SYMBOLS\_B](class.intlchar.md#intlchar.constants.block-code-miscellaneous-mathematical-symbols-b);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SUPPLEMENTAL\_MATHEMATICAL\_OPERATORS](class.intlchar.md#intlchar.constants.block-code-supplemental-mathematical-operators);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KATAKANA\_PHONETIC\_EXTENSIONS](class.intlchar.md#intlchar.constants.block-code-katakana-phonetic-extensions);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_VARIATION\_SELECTORS](class.intlchar.md#intlchar.constants.block-code-variation-selectors);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SUPPLEMENTARY\_PRIVATE\_USE\_AREA\_A](class.intlchar.md#intlchar.constants.block-code-supplementary-private-use-area-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SUPPLEMENTARY\_PRIVATE\_USE\_AREA\_B](class.intlchar.md#intlchar.constants.block-code-supplementary-private-use-area-b);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LIMBU](class.intlchar.md#intlchar.constants.block-code-limbu);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TAI\_LE](class.intlchar.md#intlchar.constants.block-code-tai-le);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KHMER\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-khmer-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PHONETIC\_EXTENSIONS](class.intlchar.md#intlchar.constants.block-code-phonetic-extensions);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MISCELLANEOUS\_SYMBOLS\_AND\_ARROWS](class.intlchar.md#intlchar.constants.block-code-miscellaneous-symbols-and-arrows);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_YIJING\_HEXAGRAM\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-yijing-hexagram-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LINEAR\_B\_SYLLABARY](class.intlchar.md#intlchar.constants.block-code-linear-b-syllabary);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LINEAR\_B\_IDEOGRAMS](class.intlchar.md#intlchar.constants.block-code-linear-b-ideograms);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_AEGEAN\_NUMBERS](class.intlchar.md#intlchar.constants.block-code-aegean-numbers);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_UGARITIC](class.intlchar.md#intlchar.constants.block-code-ugaritic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SHAVIAN](class.intlchar.md#intlchar.constants.block-code-shavian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_OSMANYA](class.intlchar.md#intlchar.constants.block-code-osmanya);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CYPRIOT\_SYLLABARY](class.intlchar.md#intlchar.constants.block-code-cypriot-syllabary);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TAI\_XUAN\_JING\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-tai-xuan-jing-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_VARIATION\_SELECTORS\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-variation-selectors-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ANCIENT\_GREEK\_MUSICAL\_NOTATION](class.intlchar.md#intlchar.constants.block-code-ancient-greek-musical-notation);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ANCIENT\_GREEK\_NUMBERS](class.intlchar.md#intlchar.constants.block-code-ancient-greek-numbers);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ARABIC\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-arabic-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BUGINESE](class.intlchar.md#intlchar.constants.block-code-buginese);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_STROKES](class.intlchar.md#intlchar.constants.block-code-cjk-strokes);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_COMBINING\_DIACRITICAL\_MARKS\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-combining-diacritical-marks-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_COPTIC](class.intlchar.md#intlchar.constants.block-code-coptic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ETHIOPIC\_EXTENDED](class.intlchar.md#intlchar.constants.block-code-ethiopic-extended);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ETHIOPIC\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-ethiopic-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GEORGIAN\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-georgian-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GLAGOLITIC](class.intlchar.md#intlchar.constants.block-code-glagolitic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KHAROSHTHI](class.intlchar.md#intlchar.constants.block-code-kharoshthi);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MODIFIER\_TONE\_LETTERS](class.intlchar.md#intlchar.constants.block-code-modifier-tone-letters);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_NEW\_TAI\_LUE](class.intlchar.md#intlchar.constants.block-code-new-tai-lue);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_OLD\_PERSIAN](class.intlchar.md#intlchar.constants.block-code-old-persian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PHONETIC\_EXTENSIONS\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-phonetic-extensions-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SUPPLEMENTAL\_PUNCTUATION](class.intlchar.md#intlchar.constants.block-code-supplemental-punctuation);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SYLOTI\_NAGRI](class.intlchar.md#intlchar.constants.block-code-syloti-nagri);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TIFINAGH](class.intlchar.md#intlchar.constants.block-code-tifinagh);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_VERTICAL\_FORMS](class.intlchar.md#intlchar.constants.block-code-vertical-forms);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_NKO](class.intlchar.md#intlchar.constants.block-code-nko);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BALINESE](class.intlchar.md#intlchar.constants.block-code-balinese);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LATIN\_EXTENDED\_C](class.intlchar.md#intlchar.constants.block-code-latin-extended-c);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LATIN\_EXTENDED\_D](class.intlchar.md#intlchar.constants.block-code-latin-extended-d);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PHAGS\_PA](class.intlchar.md#intlchar.constants.block-code-phags-pa);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PHOENICIAN](class.intlchar.md#intlchar.constants.block-code-phoenician);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CUNEIFORM](class.intlchar.md#intlchar.constants.block-code-cuneiform);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CUNEIFORM\_NUMBERS\_AND\_PUNCTUATION](class.intlchar.md#intlchar.constants.block-code-cuneiform-numbers-and-punctuation);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_COUNTING\_ROD\_NUMERALS](class.intlchar.md#intlchar.constants.block-code-counting-rod-numerals);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SUNDANESE](class.intlchar.md#intlchar.constants.block-code-sundanese);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LEPCHA](class.intlchar.md#intlchar.constants.block-code-lepcha);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_OL\_CHIKI](class.intlchar.md#intlchar.constants.block-code-ol-chiki);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CYRILLIC\_EXTENDED\_A](class.intlchar.md#intlchar.constants.block-code-cyrillic-extended-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_VAI](class.intlchar.md#intlchar.constants.block-code-vai);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CYRILLIC\_EXTENDED\_B](class.intlchar.md#intlchar.constants.block-code-cyrillic-extended-b);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SAURASHTRA](class.intlchar.md#intlchar.constants.block-code-saurashtra);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KAYAH\_LI](class.intlchar.md#intlchar.constants.block-code-kayah-li);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_REJANG](class.intlchar.md#intlchar.constants.block-code-rejang);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CHAM](class.intlchar.md#intlchar.constants.block-code-cham);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ANCIENT\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-ancient-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PHAISTOS\_DISC](class.intlchar.md#intlchar.constants.block-code-phaistos-disc);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LYCIAN](class.intlchar.md#intlchar.constants.block-code-lycian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CARIAN](class.intlchar.md#intlchar.constants.block-code-carian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LYDIAN](class.intlchar.md#intlchar.constants.block-code-lydian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MAHJONG\_TILES](class.intlchar.md#intlchar.constants.block-code-mahjong-tiles);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_DOMINO\_TILES](class.intlchar.md#intlchar.constants.block-code-domino-tiles);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SAMARITAN](class.intlchar.md#intlchar.constants.block-code-samaritan);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_UNIFIED\_CANADIAN\_ABORIGINAL\_SYLLABICS\_EXTENDED](class.intlchar.md#intlchar.constants.block-code-unified-canadian-aboriginal-syllabics-extended);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TAI\_THAM](class.intlchar.md#intlchar.constants.block-code-tai-tham);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_VEDIC\_EXTENSIONS](class.intlchar.md#intlchar.constants.block-code-vedic-extensions);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LISU](class.intlchar.md#intlchar.constants.block-code-lisu);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BAMUM](class.intlchar.md#intlchar.constants.block-code-bamum);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_COMMON\_INDIC\_NUMBER\_FORMS](class.intlchar.md#intlchar.constants.block-code-common-indic-number-forms);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_DEVANAGARI\_EXTENDED](class.intlchar.md#intlchar.constants.block-code-devanagari-extended);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_HANGUL\_JAMO\_EXTENDED\_A](class.intlchar.md#intlchar.constants.block-code-hangul-jamo-extended-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_JAVANESE](class.intlchar.md#intlchar.constants.block-code-javanese);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MYANMAR\_EXTENDED\_A](class.intlchar.md#intlchar.constants.block-code-myanmar-extended-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TAI\_VIET](class.intlchar.md#intlchar.constants.block-code-tai-viet);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MEETEI\_MAYEK](class.intlchar.md#intlchar.constants.block-code-meetei-mayek);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_HANGUL\_JAMO\_EXTENDED\_B](class.intlchar.md#intlchar.constants.block-code-hangul-jamo-extended-b);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_IMPERIAL\_ARAMAIC](class.intlchar.md#intlchar.constants.block-code-imperial-aramaic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_OLD\_SOUTH\_ARABIAN](class.intlchar.md#intlchar.constants.block-code-old-south-arabian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_AVESTAN](class.intlchar.md#intlchar.constants.block-code-avestan);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_INSCRIPTIONAL\_PARTHIAN](class.intlchar.md#intlchar.constants.block-code-inscriptional-parthian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_INSCRIPTIONAL\_PAHLAVI](class.intlchar.md#intlchar.constants.block-code-inscriptional-pahlavi);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_OLD\_TURKIC](class.intlchar.md#intlchar.constants.block-code-old-turkic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_RUMI\_NUMERAL\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-rumi-numeral-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KAITHI](class.intlchar.md#intlchar.constants.block-code-kaithi);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_EGYPTIAN\_HIEROGLYPHS](class.intlchar.md#intlchar.constants.block-code-egyptian-hieroglyphs);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ENCLOSED\_ALPHANUMERIC\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-enclosed-alphanumeric-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ENCLOSED\_IDEOGRAPHIC\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-enclosed-ideographic-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_UNIFIED\_IDEOGRAPHS\_EXTENSION\_C](class.intlchar.md#intlchar.constants.block-code-cjk-unified-ideographs-extension-c);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MANDAIC](class.intlchar.md#intlchar.constants.block-code-mandaic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BATAK](class.intlchar.md#intlchar.constants.block-code-batak);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ETHIOPIC\_EXTENDED\_A](class.intlchar.md#intlchar.constants.block-code-ethiopic-extended-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BRAHMI](class.intlchar.md#intlchar.constants.block-code-brahmi);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BAMUM\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-bamum-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KANA\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-kana-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PLAYING\_CARDS](class.intlchar.md#intlchar.constants.block-code-playing-cards);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MISCELLANEOUS\_SYMBOLS\_AND\_PICTOGRAPHS](class.intlchar.md#intlchar.constants.block-code-miscellaneous-symbols-and-pictographs);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_EMOTICONS](class.intlchar.md#intlchar.constants.block-code-emoticons);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TRANSPORT\_AND\_MAP\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-transport-and-map-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ALCHEMICAL\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-alchemical-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CJK\_UNIFIED\_IDEOGRAPHS\_EXTENSION\_D](class.intlchar.md#intlchar.constants.block-code-cjk-unified-ideographs-extension-d);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ARABIC\_EXTENDED\_A](class.intlchar.md#intlchar.constants.block-code-arabic-extended-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ARABIC\_MATHEMATICAL\_ALPHABETIC\_SYMBOLS](class.intlchar.md#intlchar.constants.block-code-arabic-mathematical-alphabetic-symbols);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CHAKMA](class.intlchar.md#intlchar.constants.block-code-chakma);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MEETEI\_MAYEK\_EXTENSIONS](class.intlchar.md#intlchar.constants.block-code-meetei-mayek-extensions);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MEROITIC\_CURSIVE](class.intlchar.md#intlchar.constants.block-code-meroitic-cursive);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MEROITIC\_HIEROGLYPHS](class.intlchar.md#intlchar.constants.block-code-meroitic-hieroglyphs);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MIAO](class.intlchar.md#intlchar.constants.block-code-miao);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SHARADA](class.intlchar.md#intlchar.constants.block-code-sharada);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SORA\_SOMPENG](class.intlchar.md#intlchar.constants.block-code-sora-sompeng);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SUNDANESE\_SUPPLEMENT](class.intlchar.md#intlchar.constants.block-code-sundanese-supplement);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TAKRI](class.intlchar.md#intlchar.constants.block-code-takri);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_BASSA\_VAH](class.intlchar.md#intlchar.constants.block-code-bassa-vah);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_CAUCASIAN\_ALBANIAN](class.intlchar.md#intlchar.constants.block-code-caucasian-albanian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_COPTIC\_EPACT\_NUMBERS](class.intlchar.md#intlchar.constants.block-code-coptic-epact-numbers);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_COMBINING\_DIACRITICAL\_MARKS\_EXTENDED](class.intlchar.md#intlchar.constants.block-code-combining-diacritical-marks-extended);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_DUPLOYAN](class.intlchar.md#intlchar.constants.block-code-duployan);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ELBASAN](class.intlchar.md#intlchar.constants.block-code-elbasan);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GEOMETRIC\_SHAPES\_EXTENDED](class.intlchar.md#intlchar.constants.block-code-geometric-shapes-extended);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_GRANTHA](class.intlchar.md#intlchar.constants.block-code-grantha);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KHOJKI](class.intlchar.md#intlchar.constants.block-code-khojki);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_KHUDAWADI](class.intlchar.md#intlchar.constants.block-code-khudawadi);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LATIN\_EXTENDED\_E](class.intlchar.md#intlchar.constants.block-code-latin-extended-e);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_LINEAR\_A](class.intlchar.md#intlchar.constants.block-code-linear-a);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MAHAJANI](class.intlchar.md#intlchar.constants.block-code-mahajani);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MANICHAEAN](class.intlchar.md#intlchar.constants.block-code-manichaean);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MENDE\_KIKAKUI](class.intlchar.md#intlchar.constants.block-code-mende-kikakui);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MODI](class.intlchar.md#intlchar.constants.block-code-modi);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MRO](class.intlchar.md#intlchar.constants.block-code-mro);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_MYANMAR\_EXTENDED\_B](class.intlchar.md#intlchar.constants.block-code-myanmar-extended-b);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_NABATAEAN](class.intlchar.md#intlchar.constants.block-code-nabataean);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_OLD\_NORTH\_ARABIAN](class.intlchar.md#intlchar.constants.block-code-old-north-arabian);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_OLD\_PERMIC](class.intlchar.md#intlchar.constants.block-code-old-permic);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_ORNAMENTAL\_DINGBATS](class.intlchar.md#intlchar.constants.block-code-ornamental-dingbats);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PAHAWH\_HMONG](class.intlchar.md#intlchar.constants.block-code-pahawh-hmong);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PALMYRENE](class.intlchar.md#intlchar.constants.block-code-palmyrene);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PAU\_CIN\_HAU](class.intlchar.md#intlchar.constants.block-code-pau-cin-hau);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_PSALTER\_PAHLAVI](class.intlchar.md#intlchar.constants.block-code-psalter-pahlavi);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SHORTHAND\_FORMAT\_CONTROLS](class.intlchar.md#intlchar.constants.block-code-shorthand-format-controls);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SIDDHAM](class.intlchar.md#intlchar.constants.block-code-siddham);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SINHALA\_ARCHAIC\_NUMBERS](class.intlchar.md#intlchar.constants.block-code-sinhala-archaic-numbers);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_SUPPLEMENTAL\_ARROWS\_C](class.intlchar.md#intlchar.constants.block-code-supplemental-arrows-c);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_TIRHUTA](class.intlchar.md#intlchar.constants.block-code-tirhuta);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_WARANG\_CITI](class.intlchar.md#intlchar.constants.block-code-warang-citi);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_COUNT](class.intlchar.md#intlchar.constants.block-code-count);

public
const
[int](language.types.integer.md)
[BLOCK\_CODE\_INVALID\_CODE](class.intlchar.md#intlchar.constants.block-code-invalid-code);

public
const
[int](language.types.integer.md)
[BPT\_NONE](class.intlchar.md#intlchar.constants.bpt-none);

public
const
[int](language.types.integer.md)
[BPT\_OPEN](class.intlchar.md#intlchar.constants.bpt-open);

public
const
[int](language.types.integer.md)
[BPT\_CLOSE](class.intlchar.md#intlchar.constants.bpt-close);

public
const
[int](language.types.integer.md)
[BPT\_COUNT](class.intlchar.md#intlchar.constants.bpt-count);

public
const
[int](language.types.integer.md)
[EA\_NEUTRAL](class.intlchar.md#intlchar.constants.ea-neutral);

public
const
[int](language.types.integer.md)
[EA\_AMBIGUOUS](class.intlchar.md#intlchar.constants.ea-ambiguous);

public
const
[int](language.types.integer.md)
[EA\_HALFWIDTH](class.intlchar.md#intlchar.constants.ea-halfwidth);

public
const
[int](language.types.integer.md)
[EA\_FULLWIDTH](class.intlchar.md#intlchar.constants.ea-fullwidth);

public
const
[int](language.types.integer.md)
[EA\_NARROW](class.intlchar.md#intlchar.constants.ea-narrow);

public
const
[int](language.types.integer.md)
[EA\_WIDE](class.intlchar.md#intlchar.constants.ea-wide);

public
const
[int](language.types.integer.md)
[EA\_COUNT](class.intlchar.md#intlchar.constants.ea-count);

public
const
[int](language.types.integer.md)
[UNICODE\_CHAR\_NAME](class.intlchar.md#intlchar.constants.unicode-char-name);

public
const
[int](language.types.integer.md)
[UNICODE\_10\_CHAR\_NAME](class.intlchar.md#intlchar.constants.unicode-10-char-name);

public
const
[int](language.types.integer.md)
[EXTENDED\_CHAR\_NAME](class.intlchar.md#intlchar.constants.extended-char-name);

public
const
[int](language.types.integer.md)
[CHAR\_NAME\_ALIAS](class.intlchar.md#intlchar.constants.char-name-alias);

public
const
[int](language.types.integer.md)
[CHAR\_NAME\_CHOICE\_COUNT](class.intlchar.md#intlchar.constants.char-name-choice-count);

public
const
[int](language.types.integer.md)
[SHORT\_PROPERTY\_NAME](class.intlchar.md#intlchar.constants.short-property-name);

public
const
[int](language.types.integer.md)
[LONG\_PROPERTY\_NAME](class.intlchar.md#intlchar.constants.long-property-name);

public
const
[int](language.types.integer.md)
[PROPERTY\_NAME\_CHOICE\_COUNT](class.intlchar.md#intlchar.constants.property-name-choice-count);

public
const
[int](language.types.integer.md)
[DT\_NONE](class.intlchar.md#intlchar.constants.dt-none);

public
const
[int](language.types.integer.md)
[DT\_CANONICAL](class.intlchar.md#intlchar.constants.dt-canonical);

public
const
[int](language.types.integer.md)
[DT\_COMPAT](class.intlchar.md#intlchar.constants.dt-compat);

public
const
[int](language.types.integer.md)
[DT\_CIRCLE](class.intlchar.md#intlchar.constants.dt-circle);

public
const
[int](language.types.integer.md)
[DT\_FINAL](class.intlchar.md#intlchar.constants.dt-final);

public
const
[int](language.types.integer.md)
[DT\_FONT](class.intlchar.md#intlchar.constants.dt-font);

public
const
[int](language.types.integer.md)
[DT\_FRACTION](class.intlchar.md#intlchar.constants.dt-fraction);

public
const
[int](language.types.integer.md)
[DT\_INITIAL](class.intlchar.md#intlchar.constants.dt-initial);

public
const
[int](language.types.integer.md)
[DT\_ISOLATED](class.intlchar.md#intlchar.constants.dt-isolated);

public
const
[int](language.types.integer.md)
[DT\_MEDIAL](class.intlchar.md#intlchar.constants.dt-medial);

public
const
[int](language.types.integer.md)
[DT\_NARROW](class.intlchar.md#intlchar.constants.dt-narrow);

public
const
[int](language.types.integer.md)
[DT\_NOBREAK](class.intlchar.md#intlchar.constants.dt-nobreak);

public
const
[int](language.types.integer.md)
[DT\_SMALL](class.intlchar.md#intlchar.constants.dt-small);

public
const
[int](language.types.integer.md)
[DT\_SQUARE](class.intlchar.md#intlchar.constants.dt-square);

public
const
[int](language.types.integer.md)
[DT\_SUB](class.intlchar.md#intlchar.constants.dt-sub);

public
const
[int](language.types.integer.md)
[DT\_SUPER](class.intlchar.md#intlchar.constants.dt-super);

public
const
[int](language.types.integer.md)
[DT\_VERTICAL](class.intlchar.md#intlchar.constants.dt-vertical);

public
const
[int](language.types.integer.md)
[DT\_WIDE](class.intlchar.md#intlchar.constants.dt-wide);

public
const
[int](language.types.integer.md)
[DT\_COUNT](class.intlchar.md#intlchar.constants.dt-count);

public
const
[int](language.types.integer.md)
[JT\_NON\_JOINING](class.intlchar.md#intlchar.constants.jt-non-joining);

public
const
[int](language.types.integer.md)
[JT\_JOIN\_CAUSING](class.intlchar.md#intlchar.constants.jt-join-causing);

public
const
[int](language.types.integer.md)
[JT\_DUAL\_JOINING](class.intlchar.md#intlchar.constants.jt-dual-joining);

public
const
[int](language.types.integer.md)
[JT\_LEFT\_JOINING](class.intlchar.md#intlchar.constants.jt-left-joining);

public
const
[int](language.types.integer.md)
[JT\_RIGHT\_JOINING](class.intlchar.md#intlchar.constants.jt-right-joining);

public
const
[int](language.types.integer.md)
[JT\_TRANSPARENT](class.intlchar.md#intlchar.constants.jt-transparent);

public
const
[int](language.types.integer.md)
[JT\_COUNT](class.intlchar.md#intlchar.constants.jt-count);

public
const
[int](language.types.integer.md)
[JG\_NO\_JOINING\_GROUP](class.intlchar.md#intlchar.constants.jg-no-joining-group);

public
const
[int](language.types.integer.md)
[JG\_AIN](class.intlchar.md#intlchar.constants.jg-ain);

public
const
[int](language.types.integer.md)
[JG\_ALAPH](class.intlchar.md#intlchar.constants.jg-alaph);

public
const
[int](language.types.integer.md)
[JG\_ALEF](class.intlchar.md#intlchar.constants.jg-alef);

public
const
[int](language.types.integer.md)
[JG\_BEH](class.intlchar.md#intlchar.constants.jg-beh);

public
const
[int](language.types.integer.md)
[JG\_BETH](class.intlchar.md#intlchar.constants.jg-beth);

public
const
[int](language.types.integer.md)
[JG\_DAL](class.intlchar.md#intlchar.constants.jg-dal);

public
const
[int](language.types.integer.md)
[JG\_DALATH\_RISH](class.intlchar.md#intlchar.constants.jg-dalath-rish);

public
const
[int](language.types.integer.md)
[JG\_E](class.intlchar.md#intlchar.constants.jg-e);

public
const
[int](language.types.integer.md)
[JG\_FEH](class.intlchar.md#intlchar.constants.jg-feh);

public
const
[int](language.types.integer.md)
[JG\_FINAL\_SEMKATH](class.intlchar.md#intlchar.constants.jg-final-semkath);

public
const
[int](language.types.integer.md)
[JG\_GAF](class.intlchar.md#intlchar.constants.jg-gaf);

public
const
[int](language.types.integer.md)
[JG\_GAMAL](class.intlchar.md#intlchar.constants.jg-gamal);

public
const
[int](language.types.integer.md)
[JG\_HAH](class.intlchar.md#intlchar.constants.jg-hah);

public
const
[int](language.types.integer.md)
[JG\_TEH\_MARBUTA\_GOAL](class.intlchar.md#intlchar.constants.jg-teh-marbuta-goal);

public
const
[int](language.types.integer.md)
[JG\_HAMZA\_ON\_HEH\_GOAL](class.intlchar.md#intlchar.constants.jg-hamza-on-heh-goal);

public
const
[int](language.types.integer.md)
[JG\_HE](class.intlchar.md#intlchar.constants.jg-he);

public
const
[int](language.types.integer.md)
[JG\_HEH](class.intlchar.md#intlchar.constants.jg-heh);

public
const
[int](language.types.integer.md)
[JG\_HEH\_GOAL](class.intlchar.md#intlchar.constants.jg-heh-goal);

public
const
[int](language.types.integer.md)
[JG\_HETH](class.intlchar.md#intlchar.constants.jg-heth);

public
const
[int](language.types.integer.md)
[JG\_KAF](class.intlchar.md#intlchar.constants.jg-kaf);

public
const
[int](language.types.integer.md)
[JG\_KAPH](class.intlchar.md#intlchar.constants.jg-kaph);

public
const
[int](language.types.integer.md)
[JG\_KNOTTED\_HEH](class.intlchar.md#intlchar.constants.jg-knotted-heh);

public
const
[int](language.types.integer.md)
[JG\_LAM](class.intlchar.md#intlchar.constants.jg-lam);

public
const
[int](language.types.integer.md)
[JG\_LAMADH](class.intlchar.md#intlchar.constants.jg-lamadh);

public
const
[int](language.types.integer.md)
[JG\_MEEM](class.intlchar.md#intlchar.constants.jg-meem);

public
const
[int](language.types.integer.md)
[JG\_MIM](class.intlchar.md#intlchar.constants.jg-mim);

public
const
[int](language.types.integer.md)
[JG\_NOON](class.intlchar.md#intlchar.constants.jg-noon);

public
const
[int](language.types.integer.md)
[JG\_NUN](class.intlchar.md#intlchar.constants.jg-nun);

public
const
[int](language.types.integer.md)
[JG\_PE](class.intlchar.md#intlchar.constants.jg-pe);

public
const
[int](language.types.integer.md)
[JG\_QAF](class.intlchar.md#intlchar.constants.jg-qaf);

public
const
[int](language.types.integer.md)
[JG\_QAPH](class.intlchar.md#intlchar.constants.jg-qaph);

public
const
[int](language.types.integer.md)
[JG\_REH](class.intlchar.md#intlchar.constants.jg-reh);

public
const
[int](language.types.integer.md)
[JG\_REVERSED\_PE](class.intlchar.md#intlchar.constants.jg-reversed-pe);

public
const
[int](language.types.integer.md)
[JG\_SAD](class.intlchar.md#intlchar.constants.jg-sad);

public
const
[int](language.types.integer.md)
[JG\_SADHE](class.intlchar.md#intlchar.constants.jg-sadhe);

public
const
[int](language.types.integer.md)
[JG\_SEEN](class.intlchar.md#intlchar.constants.jg-seen);

public
const
[int](language.types.integer.md)
[JG\_SEMKATH](class.intlchar.md#intlchar.constants.jg-semkath);

public
const
[int](language.types.integer.md)
[JG\_SHIN](class.intlchar.md#intlchar.constants.jg-shin);

public
const
[int](language.types.integer.md)
[JG\_SWASH\_KAF](class.intlchar.md#intlchar.constants.jg-swash-kaf);

public
const
[int](language.types.integer.md)
[JG\_SYRIAC\_WAW](class.intlchar.md#intlchar.constants.jg-syriac-waw);

public
const
[int](language.types.integer.md)
[JG\_TAH](class.intlchar.md#intlchar.constants.jg-tah);

public
const
[int](language.types.integer.md)
[JG\_TAW](class.intlchar.md#intlchar.constants.jg-taw);

public
const
[int](language.types.integer.md)
[JG\_TEH\_MARBUTA](class.intlchar.md#intlchar.constants.jg-teh-marbuta);

public
const
[int](language.types.integer.md)
[JG\_TETH](class.intlchar.md#intlchar.constants.jg-teth);

public
const
[int](language.types.integer.md)
[JG\_WAW](class.intlchar.md#intlchar.constants.jg-waw);

public
const
[int](language.types.integer.md)
[JG\_YEH](class.intlchar.md#intlchar.constants.jg-yeh);

public
const
[int](language.types.integer.md)
[JG\_YEH\_BARREE](class.intlchar.md#intlchar.constants.jg-yeh-barree);

public
const
[int](language.types.integer.md)
[JG\_YEH\_WITH\_TAIL](class.intlchar.md#intlchar.constants.jg-yeh-with-tail);

public
const
[int](language.types.integer.md)
[JG\_YUDH](class.intlchar.md#intlchar.constants.jg-yudh);

public
const
[int](language.types.integer.md)
[JG\_YUDH\_HE](class.intlchar.md#intlchar.constants.jg-yudh-he);

public
const
[int](language.types.integer.md)
[JG\_ZAIN](class.intlchar.md#intlchar.constants.jg-zain);

public
const
[int](language.types.integer.md)
[JG\_FE](class.intlchar.md#intlchar.constants.jg-fe);

public
const
[int](language.types.integer.md)
[JG\_KHAPH](class.intlchar.md#intlchar.constants.jg-khaph);

public
const
[int](language.types.integer.md)
[JG\_ZHAIN](class.intlchar.md#intlchar.constants.jg-zhain);

public
const
[int](language.types.integer.md)
[JG\_BURUSHASKI\_YEH\_BARREE](class.intlchar.md#intlchar.constants.jg-burushaski-yeh-barree);

public
const
[int](language.types.integer.md)
[JG\_FARSI\_YEH](class.intlchar.md#intlchar.constants.jg-farsi-yeh);

public
const
[int](language.types.integer.md)
[JG\_NYA](class.intlchar.md#intlchar.constants.jg-nya);

public
const
[int](language.types.integer.md)
[JG\_ROHINGYA\_YEH](class.intlchar.md#intlchar.constants.jg-rohingya-yeh);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_ALEPH](class.intlchar.md#intlchar.constants.jg-manichaean-aleph);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_AYIN](class.intlchar.md#intlchar.constants.jg-manichaean-ayin);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_BETH](class.intlchar.md#intlchar.constants.jg-manichaean-beth);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_DALETH](class.intlchar.md#intlchar.constants.jg-manichaean-daleth);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_DHAMEDH](class.intlchar.md#intlchar.constants.jg-manichaean-dhamedh);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_FIVE](class.intlchar.md#intlchar.constants.jg-manichaean-five);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_GIMEL](class.intlchar.md#intlchar.constants.jg-manichaean-gimel);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_HETH](class.intlchar.md#intlchar.constants.jg-manichaean-heth);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_HUNDRED](class.intlchar.md#intlchar.constants.jg-manichaean-hundred);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_KAPH](class.intlchar.md#intlchar.constants.jg-manichaean-kaph);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_LAMEDH](class.intlchar.md#intlchar.constants.jg-manichaean-lamedh);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_MEM](class.intlchar.md#intlchar.constants.jg-manichaean-mem);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_NUN](class.intlchar.md#intlchar.constants.jg-manichaean-nun);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_ONE](class.intlchar.md#intlchar.constants.jg-manichaean-one);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_PE](class.intlchar.md#intlchar.constants.jg-manichaean-pe);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_QOPH](class.intlchar.md#intlchar.constants.jg-manichaean-qoph);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_RESH](class.intlchar.md#intlchar.constants.jg-manichaean-resh);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_SADHE](class.intlchar.md#intlchar.constants.jg-manichaean-sadhe);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_SAMEKH](class.intlchar.md#intlchar.constants.jg-manichaean-samekh);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_TAW](class.intlchar.md#intlchar.constants.jg-manichaean-taw);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_TEN](class.intlchar.md#intlchar.constants.jg-manichaean-ten);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_TETH](class.intlchar.md#intlchar.constants.jg-manichaean-teth);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_THAMEDH](class.intlchar.md#intlchar.constants.jg-manichaean-thamedh);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_TWENTY](class.intlchar.md#intlchar.constants.jg-manichaean-twenty);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_WAW](class.intlchar.md#intlchar.constants.jg-manichaean-waw);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_YODH](class.intlchar.md#intlchar.constants.jg-manichaean-yodh);

public
const
[int](language.types.integer.md)
[JG\_MANICHAEAN\_ZAYIN](class.intlchar.md#intlchar.constants.jg-manichaean-zayin);

public
const
[int](language.types.integer.md)
[JG\_STRAIGHT\_WAW](class.intlchar.md#intlchar.constants.jg-straight-waw);

public
const
[int](language.types.integer.md)
[JG\_COUNT](class.intlchar.md#intlchar.constants.jg-count);

public
const
[int](language.types.integer.md)
[GCB\_OTHER](class.intlchar.md#intlchar.constants.gcb-other);

public
const
[int](language.types.integer.md)
[GCB\_CONTROL](class.intlchar.md#intlchar.constants.gcb-control);

public
const
[int](language.types.integer.md)
[GCB\_CR](class.intlchar.md#intlchar.constants.gcb-cr);

public
const
[int](language.types.integer.md)
[GCB\_EXTEND](class.intlchar.md#intlchar.constants.gcb-extend);

public
const
[int](language.types.integer.md)
[GCB\_L](class.intlchar.md#intlchar.constants.gcb-l);

public
const
[int](language.types.integer.md)
[GCB\_LF](class.intlchar.md#intlchar.constants.gcb-lf);

public
const
[int](language.types.integer.md)
[GCB\_LV](class.intlchar.md#intlchar.constants.gcb-lv);

public
const
[int](language.types.integer.md)
[GCB\_LVT](class.intlchar.md#intlchar.constants.gcb-lvt);

public
const
[int](language.types.integer.md)
[GCB\_T](class.intlchar.md#intlchar.constants.gcb-t);

public
const
[int](language.types.integer.md)
[GCB\_V](class.intlchar.md#intlchar.constants.gcb-v);

public
const
[int](language.types.integer.md)
[GCB\_SPACING\_MARK](class.intlchar.md#intlchar.constants.gcb-spacing-mark);

public
const
[int](language.types.integer.md)
[GCB\_PREPEND](class.intlchar.md#intlchar.constants.gcb-prepend);

public
const
[int](language.types.integer.md)
[GCB\_REGIONAL\_INDICATOR](class.intlchar.md#intlchar.constants.gcb-regional-indicator);

public
const
[int](language.types.integer.md)
[GCB\_COUNT](class.intlchar.md#intlchar.constants.gcb-count);

public
const
[int](language.types.integer.md)
[WB\_OTHER](class.intlchar.md#intlchar.constants.wb-other);

public
const
[int](language.types.integer.md)
[WB\_ALETTER](class.intlchar.md#intlchar.constants.wb-aletter);

public
const
[int](language.types.integer.md)
[WB\_FORMAT](class.intlchar.md#intlchar.constants.wb-format);

public
const
[int](language.types.integer.md)
[WB\_KATAKANA](class.intlchar.md#intlchar.constants.wb-katakana);

public
const
[int](language.types.integer.md)
[WB\_MIDLETTER](class.intlchar.md#intlchar.constants.wb-midletter);

public
const
[int](language.types.integer.md)
[WB\_MIDNUM](class.intlchar.md#intlchar.constants.wb-midnum);

public
const
[int](language.types.integer.md)
[WB\_NUMERIC](class.intlchar.md#intlchar.constants.wb-numeric);

public
const
[int](language.types.integer.md)
[WB\_EXTENDNUMLET](class.intlchar.md#intlchar.constants.wb-extendnumlet);

public
const
[int](language.types.integer.md)
[WB\_CR](class.intlchar.md#intlchar.constants.wb-cr);

public
const
[int](language.types.integer.md)
[WB\_EXTEND](class.intlchar.md#intlchar.constants.wb-extend);

public
const
[int](language.types.integer.md)
[WB\_LF](class.intlchar.md#intlchar.constants.wb-lf);

public
const
[int](language.types.integer.md)
[WB\_MIDNUMLET](class.intlchar.md#intlchar.constants.wb-midnumlet);

public
const
[int](language.types.integer.md)
[WB\_NEWLINE](class.intlchar.md#intlchar.constants.wb-newline);

public
const
[int](language.types.integer.md)
[WB\_REGIONAL\_INDICATOR](class.intlchar.md#intlchar.constants.wb-regional-indicator);

public
const
[int](language.types.integer.md)
[WB\_HEBREW\_LETTER](class.intlchar.md#intlchar.constants.wb-hebrew-letter);

public
const
[int](language.types.integer.md)
[WB\_SINGLE\_QUOTE](class.intlchar.md#intlchar.constants.wb-single-quote);

public
const
[int](language.types.integer.md)
[WB\_DOUBLE\_QUOTE](class.intlchar.md#intlchar.constants.wb-double-quote);

public
const
[int](language.types.integer.md)
[WB\_COUNT](class.intlchar.md#intlchar.constants.wb-count);

public
const
[int](language.types.integer.md)
[SB\_OTHER](class.intlchar.md#intlchar.constants.sb-other);

public
const
[int](language.types.integer.md)
[SB\_ATERM](class.intlchar.md#intlchar.constants.sb-aterm);

public
const
[int](language.types.integer.md)
[SB\_CLOSE](class.intlchar.md#intlchar.constants.sb-close);

public
const
[int](language.types.integer.md)
[SB\_FORMAT](class.intlchar.md#intlchar.constants.sb-format);

public
const
[int](language.types.integer.md)
[SB\_LOWER](class.intlchar.md#intlchar.constants.sb-lower);

public
const
[int](language.types.integer.md)
[SB\_NUMERIC](class.intlchar.md#intlchar.constants.sb-numeric);

public
const
[int](language.types.integer.md)
[SB\_OLETTER](class.intlchar.md#intlchar.constants.sb-oletter);

public
const
[int](language.types.integer.md)
[SB\_SEP](class.intlchar.md#intlchar.constants.sb-sep);

public
const
[int](language.types.integer.md)
[SB\_SP](class.intlchar.md#intlchar.constants.sb-sp);

public
const
[int](language.types.integer.md)
[SB\_STERM](class.intlchar.md#intlchar.constants.sb-sterm);

public
const
[int](language.types.integer.md)
[SB\_UPPER](class.intlchar.md#intlchar.constants.sb-upper);

public
const
[int](language.types.integer.md)
[SB\_CR](class.intlchar.md#intlchar.constants.sb-cr);

public
const
[int](language.types.integer.md)
[SB\_EXTEND](class.intlchar.md#intlchar.constants.sb-extend);

public
const
[int](language.types.integer.md)
[SB\_LF](class.intlchar.md#intlchar.constants.sb-lf);

public
const
[int](language.types.integer.md)
[SB\_SCONTINUE](class.intlchar.md#intlchar.constants.sb-scontinue);

public
const
[int](language.types.integer.md)
[SB\_COUNT](class.intlchar.md#intlchar.constants.sb-count);

public
const
[int](language.types.integer.md)
[LB\_UNKNOWN](class.intlchar.md#intlchar.constants.lb-unknown);

public
const
[int](language.types.integer.md)
[LB\_AMBIGUOUS](class.intlchar.md#intlchar.constants.lb-ambiguous);

public
const
[int](language.types.integer.md)
[LB\_ALPHABETIC](class.intlchar.md#intlchar.constants.lb-alphabetic);

public
const
[int](language.types.integer.md)
[LB\_BREAK\_BOTH](class.intlchar.md#intlchar.constants.lb-break-both);

public
const
[int](language.types.integer.md)
[LB\_BREAK\_AFTER](class.intlchar.md#intlchar.constants.lb-break-after);

public
const
[int](language.types.integer.md)
[LB\_BREAK\_BEFORE](class.intlchar.md#intlchar.constants.lb-break-before);

public
const
[int](language.types.integer.md)
[LB\_MANDATORY\_BREAK](class.intlchar.md#intlchar.constants.lb-mandatory-break);

public
const
[int](language.types.integer.md)
[LB\_CONTINGENT\_BREAK](class.intlchar.md#intlchar.constants.lb-contingent-break);

public
const
[int](language.types.integer.md)
[LB\_CLOSE\_PUNCTUATION](class.intlchar.md#intlchar.constants.lb-close-punctuation);

public
const
[int](language.types.integer.md)
[LB\_COMBINING\_MARK](class.intlchar.md#intlchar.constants.lb-combining-mark);

public
const
[int](language.types.integer.md)
[LB\_CARRIAGE\_RETURN](class.intlchar.md#intlchar.constants.lb-carriage-return);

public
const
[int](language.types.integer.md)
[LB\_EXCLAMATION](class.intlchar.md#intlchar.constants.lb-exclamation);

public
const
[int](language.types.integer.md)
[LB\_GLUE](class.intlchar.md#intlchar.constants.lb-glue);

public
const
[int](language.types.integer.md)
[LB\_HYPHEN](class.intlchar.md#intlchar.constants.lb-hyphen);

public
const
[int](language.types.integer.md)
[LB\_IDEOGRAPHIC](class.intlchar.md#intlchar.constants.lb-ideographic);

public
const
[int](language.types.integer.md)
[LB\_INSEPARABLE](class.intlchar.md#intlchar.constants.lb-inseparable);

public
const
[int](language.types.integer.md)
[LB\_INSEPERABLE](class.intlchar.md#intlchar.constants.lb-inseperable);

public
const
[int](language.types.integer.md)
[LB\_INFIX\_NUMERIC](class.intlchar.md#intlchar.constants.lb-infix-numeric);

public
const
[int](language.types.integer.md)
[LB\_LINE\_FEED](class.intlchar.md#intlchar.constants.lb-line-feed);

public
const
[int](language.types.integer.md)
[LB\_NONSTARTER](class.intlchar.md#intlchar.constants.lb-nonstarter);

public
const
[int](language.types.integer.md)
[LB\_NUMERIC](class.intlchar.md#intlchar.constants.lb-numeric);

public
const
[int](language.types.integer.md)
[LB\_OPEN\_PUNCTUATION](class.intlchar.md#intlchar.constants.lb-open-punctuation);

public
const
[int](language.types.integer.md)
[LB\_POSTFIX\_NUMERIC](class.intlchar.md#intlchar.constants.lb-postfix-numeric);

public
const
[int](language.types.integer.md)
[LB\_PREFIX\_NUMERIC](class.intlchar.md#intlchar.constants.lb-prefix-numeric);

public
const
[int](language.types.integer.md)
[LB\_QUOTATION](class.intlchar.md#intlchar.constants.lb-quotation);

public
const
[int](language.types.integer.md)
[LB\_COMPLEX\_CONTEXT](class.intlchar.md#intlchar.constants.lb-complex-context);

public
const
[int](language.types.integer.md)
[LB\_SURROGATE](class.intlchar.md#intlchar.constants.lb-surrogate);

public
const
[int](language.types.integer.md)
[LB\_SPACE](class.intlchar.md#intlchar.constants.lb-space);

public
const
[int](language.types.integer.md)
[LB\_BREAK\_SYMBOLS](class.intlchar.md#intlchar.constants.lb-break-symbols);

public
const
[int](language.types.integer.md)
[LB\_ZWSPACE](class.intlchar.md#intlchar.constants.lb-zwspace);

public
const
[int](language.types.integer.md)
[LB\_NEXT\_LINE](class.intlchar.md#intlchar.constants.lb-next-line);

public
const
[int](language.types.integer.md)
[LB\_WORD\_JOINER](class.intlchar.md#intlchar.constants.lb-word-joiner);

public
const
[int](language.types.integer.md)
[LB\_H2](class.intlchar.md#intlchar.constants.lb-h2);

public
const
[int](language.types.integer.md)
[LB\_H3](class.intlchar.md#intlchar.constants.lb-h3);

public
const
[int](language.types.integer.md)
[LB\_JL](class.intlchar.md#intlchar.constants.lb-jl);

public
const
[int](language.types.integer.md)
[LB\_JT](class.intlchar.md#intlchar.constants.lb-jt);

public
const
[int](language.types.integer.md)
[LB\_JV](class.intlchar.md#intlchar.constants.lb-jv);

public
const
[int](language.types.integer.md)
[LB\_CLOSE\_PARENTHESIS](class.intlchar.md#intlchar.constants.lb-close-parenthesis);

public
const
[int](language.types.integer.md)
[LB\_CONDITIONAL\_JAPANESE\_STARTER](class.intlchar.md#intlchar.constants.lb-conditional-japanese-starter);

public
const
[int](language.types.integer.md)
[LB\_HEBREW\_LETTER](class.intlchar.md#intlchar.constants.lb-hebrew-letter);

public
const
[int](language.types.integer.md)
[LB\_REGIONAL\_INDICATOR](class.intlchar.md#intlchar.constants.lb-regional-indicator);

public
const
[int](language.types.integer.md)
[LB\_COUNT](class.intlchar.md#intlchar.constants.lb-count);

public
const
[int](language.types.integer.md)
[NT\_NONE](class.intlchar.md#intlchar.constants.nt-none);

public
const
[int](language.types.integer.md)
[NT\_DECIMAL](class.intlchar.md#intlchar.constants.nt-decimal);

public
const
[int](language.types.integer.md)
[NT\_DIGIT](class.intlchar.md#intlchar.constants.nt-digit);

public
const
[int](language.types.integer.md)
[NT\_NUMERIC](class.intlchar.md#intlchar.constants.nt-numeric);

public
const
[int](language.types.integer.md)
[NT\_COUNT](class.intlchar.md#intlchar.constants.nt-count);

public
const
[int](language.types.integer.md)
[HST\_NOT\_APPLICABLE](class.intlchar.md#intlchar.constants.hst-not-applicable);

public
const
[int](language.types.integer.md)
[HST\_LEADING\_JAMO](class.intlchar.md#intlchar.constants.hst-leading-jamo);

public
const
[int](language.types.integer.md)
[HST\_VOWEL\_JAMO](class.intlchar.md#intlchar.constants.hst-vowel-jamo);

public
const
[int](language.types.integer.md)
[HST\_TRAILING\_JAMO](class.intlchar.md#intlchar.constants.hst-trailing-jamo);

public
const
[int](language.types.integer.md)
[HST\_LV\_SYLLABLE](class.intlchar.md#intlchar.constants.hst-lv-syllable);

public
const
[int](language.types.integer.md)
[HST\_LVT\_SYLLABLE](class.intlchar.md#intlchar.constants.hst-lvt-syllable);

public
const
[int](language.types.integer.md)
[HST\_COUNT](class.intlchar.md#intlchar.constants.hst-count);

public
const
[int](language.types.integer.md)
[FOLD\_CASE\_DEFAULT](class.intlchar.md#intlchar.constants.fold-case-default);

public
const
[int](language.types.integer.md)
[FOLD\_CASE\_EXCLUDE\_SPECIAL\_I](class.intlchar.md#intlchar.constants.fold-case-exclude-special-i);

/\* Métodos \*/

public static function [charAge](intlchar.charage.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[array](language.types.array.md)

public static function [charDigitValue](intlchar.chardigitvalue.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[int](language.types.integer.md)

public static function [charDirection](intlchar.chardirection.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[int](language.types.integer.md)

public static function [charFromName](intlchar.charfromname.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$type` = **`IntlChar::UNICODE_CHAR_NAME`**): [?](language.types.null.md)[int](language.types.integer.md)

public static function [charMirror](intlchar.charmirror.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

public static function [charName](intlchar.charname.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`, [int](language.types.integer.md) `$type` = **`IntlChar::UNICODE_CHAR_NAME`**): [?](language.types.null.md)[string](language.types.string.md)

public static function [charType](intlchar.chartype.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[int](language.types.integer.md)

public static function [chr](intlchar.chr.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[string](language.types.string.md)

public static function [digit](intlchar.digit.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`, [int](language.types.integer.md) `$base` = 10): [int](language.types.integer.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

public static function [enumCharNames](intlchar.enumcharnames.md)(  
    [int](language.types.integer.md)|[string](language.types.string.md) `$start`,  
    [int](language.types.integer.md)|[string](language.types.string.md) `$end`,  
    [callable](language.types.callable.md) `$callback`,  
    [int](language.types.integer.md) `$type` = **`IntlChar::UNICODE_CHAR_NAME`**  
): [bool](language.types.boolean.md)

public static function [enumCharTypes](intlchar.enumchartypes.md)([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public static function [foldCase](intlchar.foldcase.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`, [int](language.types.integer.md) `$options` = **`IntlChar::FOLD_CASE_DEFAULT`**): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

public static function [forDigit](intlchar.fordigit.md)([int](language.types.integer.md) `$digit`, [int](language.types.integer.md) `$base` = 10): [int](language.types.integer.md)

public static function [getBidiPairedBracket](intlchar.getbidipairedbracket.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

public static function [getBlockCode](intlchar.getblockcode.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[int](language.types.integer.md)

public static function [getCombiningClass](intlchar.getcombiningclass.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[int](language.types.integer.md)

public static function [getFC\_NFKC\_Closure](intlchar.getfc-nfkc-closure.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

public static function [getIntPropertyMaxValue](intlchar.getintpropertymaxvalue.md)([int](language.types.integer.md) `$property`): [int](language.types.integer.md)

public static function [getIntPropertyMinValue](intlchar.getintpropertyminvalue.md)([int](language.types.integer.md) `$property`): [int](language.types.integer.md)

public static function [getIntPropertyValue](intlchar.getintpropertyvalue.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`, [int](language.types.integer.md) `$property`): [?](language.types.null.md)[int](language.types.integer.md)

public static function [getNumericValue](intlchar.getnumericvalue.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[float](language.types.float.md)

public static function [getPropertyEnum](intlchar.getpropertyenum.md)([string](language.types.string.md) `$alias`): [int](language.types.integer.md)

public static function [getPropertyName](intlchar.getpropertyname.md)([int](language.types.integer.md) `$property`, [int](language.types.integer.md) `$type` = **`IntlChar::LONG_PROPERTY_NAME`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getPropertyValueEnum](intlchar.getpropertyvalueenum.md)([int](language.types.integer.md) `$property`, [string](language.types.string.md) `$name`): [int](language.types.integer.md)

public static function [getPropertyValueName](intlchar.getpropertyvaluename.md)([int](language.types.integer.md) `$property`, [int](language.types.integer.md) `$value`, [int](language.types.integer.md) `$type` = **`IntlChar::LONG_PROPERTY_NAME`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getUnicodeVersion](intlchar.getunicodeversion.md)(): [array](language.types.array.md)

public static function [hasBinaryProperty](intlchar.hasbinaryproperty.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`, [int](language.types.integer.md) `$property`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isalnum](intlchar.isalnum.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isalpha](intlchar.isalpha.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isbase](intlchar.isbase.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isblank](intlchar.isblank.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [iscntrl](intlchar.iscntrl.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isdefined](intlchar.isdefined.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isdigit](intlchar.isdigit.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isgraph](intlchar.isgraph.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isIDIgnorable](intlchar.isidignorable.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isIDPart](intlchar.isidpart.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isIDStart](intlchar.isidstart.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isISOControl](intlchar.isisocontrol.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isJavaIDPart](intlchar.isjavaidpart.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isJavaIDStart](intlchar.isjavaidstart.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isJavaSpaceChar](intlchar.isjavaspacechar.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [islower](intlchar.islower.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isMirrored](intlchar.ismirrored.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isprint](intlchar.isprint.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [ispunct](intlchar.ispunct.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isspace](intlchar.isspace.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [istitle](intlchar.istitle.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isUAlphabetic](intlchar.isualphabetic.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isULowercase](intlchar.isulowercase.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isupper](intlchar.isupper.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isUUppercase](intlchar.isuuppercase.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isUWhiteSpace](intlchar.isuwhitespace.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isWhitespace](intlchar.iswhitespace.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [isxdigit](intlchar.isxdigit.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

public static function [ord](intlchar.ord.md)([int](language.types.integer.md)|[string](language.types.string.md) `$character`): [?](language.types.null.md)[int](language.types.integer.md)

public static function [tolower](intlchar.tolower.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

public static function [totitle](intlchar.totitle.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

public static function [toupper](intlchar.toupper.md)([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

}

## Constantes predefinidas

**`IntlChar::UNICODE_VERSION`** [string](language.types.string.md)

**`IntlChar::CODEPOINT_MIN`** [int](language.types.integer.md)

**`IntlChar::CODEPOINT_MAX`** [int](language.types.integer.md)

**`IntlChar::NO_NUMERIC_VALUE`** [int](language.types.integer.md)
:   Valor especial retornado por
    [IntlChar::getNumericValue()](intlchar.getnumericvalue.md) quando nenhum valor numérico
    estiver difinido para um ponto de código.

**`IntlChar::PROPERTY_ALPHABETIC`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_BINARY_START`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_ASCII_HEX_DIGIT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_BIDI_CONTROL`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_BIDI_MIRRORED`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_DASH`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_DEFAULT_IGNORABLE_CODE_POINT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_DEPRECATED`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_DIACRITIC`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_EXTENDER`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_FULL_COMPOSITION_EXCLUSION`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_GRAPHEME_BASE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_GRAPHEME_EXTEND`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_GRAPHEME_LINK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_HEX_DIGIT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_HYPHEN`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_ID_CONTINUE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_ID_START`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_IDEOGRAPHIC`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_IDS_BINARY_OPERATOR`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_IDS_TRINARY_OPERATOR`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_IDS_UNARY_OPERATOR`** [int](language.types.integer.md)
:   Para determinação programática de Sequências de Descrição Ideográficas. Disponível a partir do PHP 8.4.0.

**`IntlChar::PROPERTY_ID_COMPAT_MATH_START`** [int](language.types.integer.md)
:   Usada em perfil de identificação matemática no UAX 31. Disponível a partir do PHP 8.4.0.

**`IntlChar::PROPERTY_ID_COMPAT_MATH_CONTINUE`** [int](language.types.integer.md)
:   Usada em perfil de identificação matemática no UAX 31. Disponível a partir do PHP 8.4.0.

**`IntlChar::PROPERTY_JOIN_CONTROL`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_LOGICAL_ORDER_EXCEPTION`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_LOWERCASE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_MATH`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NONCHARACTER_CODE_POINT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_QUOTATION_MARK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_RADICAL`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_SOFT_DOTTED`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_TERMINAL_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_UNIFIED_IDEOGRAPH`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_UPPERCASE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_WHITE_SPACE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_XID_CONTINUE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_XID_START`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_CASE_SENSITIVE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_S_TERM`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_VARIATION_SELECTOR`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NFD_INERT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NFKD_INERT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NFC_INERT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NFKC_INERT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_SEGMENT_STARTER`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_PATTERN_SYNTAX`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_PATTERN_WHITE_SPACE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_POSIX_ALNUM`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_POSIX_BLANK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_POSIX_GRAPH`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_POSIX_PRINT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_POSIX_XDIGIT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_CASED`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_CASE_IGNORABLE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_CHANGES_WHEN_LOWERCASED`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_CHANGES_WHEN_UPPERCASED`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_CHANGES_WHEN_TITLECASED`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_CHANGES_WHEN_CASEFOLDED`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_CHANGES_WHEN_CASEMAPPED`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_CHANGES_WHEN_NFKC_CASEFOLDED`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_BINARY_LIMIT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_BIDI_CLASS`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_INT_START`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_BLOCK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_CANONICAL_COMBINING_CLASS`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_DECOMPOSITION_TYPE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_EAST_ASIAN_WIDTH`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_GENERAL_CATEGORY`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_JOINING_GROUP`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_JOINING_TYPE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_LINE_BREAK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NUMERIC_TYPE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_SCRIPT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_HANGUL_SYLLABLE_TYPE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NFD_QUICK_CHECK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NFKD_QUICK_CHECK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NFC_QUICK_CHECK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NFKC_QUICK_CHECK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_LEAD_CANONICAL_COMBINING_CLASS`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_TRAIL_CANONICAL_COMBINING_CLASS`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_GRAPHEME_CLUSTER_BREAK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_SENTENCE_BREAK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_WORD_BREAK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_BIDI_PAIRED_BRACKET_TYPE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_INT_LIMIT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_GENERAL_CATEGORY_MASK`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_MASK_START`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_MASK_LIMIT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NUMERIC_VALUE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_DOUBLE_START`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_DOUBLE_LIMIT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_AGE`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_STRING_START`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_BIDI_MIRRORING_GLYPH`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_CASE_FOLDING`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_ISO_COMMENT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_LOWERCASE_MAPPING`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NAME`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_SIMPLE_CASE_FOLDING`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_SIMPLE_LOWERCASE_MAPPING`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_SIMPLE_TITLECASE_MAPPING`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_SIMPLE_UPPERCASE_MAPPING`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_TITLECASE_MAPPING`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_UNICODE_1_NAME`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_UPPERCASE_MAPPING`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_BIDI_PAIRED_BRACKET`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_STRING_LIMIT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_SCRIPT_EXTENSIONS`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_OTHER_PROPERTY_START`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_OTHER_PROPERTY_LIMIT`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_INVALID_CODE`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_UNASSIGNED`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_GENERAL_OTHER_TYPES`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_UPPERCASE_LETTER`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_LOWERCASE_LETTER`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_TITLECASE_LETTER`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_MODIFIER_LETTER`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_OTHER_LETTER`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_NON_SPACING_MARK`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_ENCLOSING_MARK`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_COMBINING_SPACING_MARK`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_LETTER_NUMBER`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_OTHER_NUMBER`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_SPACE_SEPARATOR`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_LINE_SEPARATOR`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_PARAGRAPH_SEPARATOR`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_CONTROL_CHAR`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_FORMAT_CHAR`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_PRIVATE_USE_CHAR`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_SURROGATE`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_DASH_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_START_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_END_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_CONNECTOR_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_OTHER_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_MATH_SYMBOL`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_CURRENCY_SYMBOL`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_MODIFIER_SYMBOL`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_OTHER_SYMBOL`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_INITIAL_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_FINAL_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::CHAR_CATEGORY_CHAR_CATEGORY_COUNT`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_ARABIC_NUMBER`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_BLOCK_SEPARATOR`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_SEGMENT_SEPARATOR`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_WHITE_SPACE_NEUTRAL`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_OTHER_NEUTRAL`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_DIR_NON_SPACING_MARK`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_BOUNDARY_NEUTRAL`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_FIRST_STRONG_ISOLATE`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE`** [int](language.types.integer.md)

**`IntlChar::CHAR_DIRECTION_CHAR_DIRECTION_COUNT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_NO_BLOCK`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BASIC_LATIN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LATIN_1_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LATIN_EXTENDED_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LATIN_EXTENDED_B`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_IPA_EXTENSIONS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SPACING_MODIFIER_LETTERS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_COMBINING_DIACRITICAL_MARKS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GREEK`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CYRILLIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ARMENIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_HEBREW`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ARABIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SYRIAC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_THAANA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_DEVANAGARI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BENGALI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GURMUKHI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GUJARATI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ORIYA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TAMIL`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TELUGU`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KANNADA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MALAYALAM`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SINHALA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_THAI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LAO`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TIBETAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MYANMAR`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GEORGIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_HANGUL_JAMO`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ETHIOPIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CHEROKEE`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_OGHAM`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_RUNIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KHMER`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MONGOLIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LATIN_EXTENDED_ADDITIONAL`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GREEK_EXTENDED`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GENERAL_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SUPERSCRIPTS_AND_SUBSCRIPTS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CURRENCY_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_COMBINING_MARKS_FOR_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LETTERLIKE_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_NUMBER_FORMS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ARROWS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MATHEMATICAL_OPERATORS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MISCELLANEOUS_TECHNICAL`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CONTROL_PICTURES`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_OPTICAL_CHARACTER_RECOGNITION`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ENCLOSED_ALPHANUMERICS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BOX_DRAWING`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BLOCK_ELEMENTS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GEOMETRIC_SHAPES`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MISCELLANEOUS_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_DINGBATS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BRAILLE_PATTERNS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_RADICALS_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KANGXI_RADICALS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_IDEOGRAPHIC_DESCRIPTION_CHARACTERS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_SYMBOLS_AND_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_HIRAGANA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KATAKANA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BOPOMOFO`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_HANGUL_COMPATIBILITY_JAMO`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KANBUN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BOPOMOFO_EXTENDED`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ENCLOSED_CJK_LETTERS_AND_MONTHS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_COMPATIBILITY`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_YI_SYLLABLES`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_YI_RADICALS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_HANGUL_SYLLABLES`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_HIGH_SURROGATES`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_HIGH_PRIVATE_USE_SURROGATES`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LOW_SURROGATES`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PRIVATE_USE_AREA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PRIVATE_USE`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ALPHABETIC_PRESENTATION_FORMS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ARABIC_PRESENTATION_FORMS_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_COMBINING_HALF_MARKS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_COMPATIBILITY_FORMS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SMALL_FORM_VARIANTS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ARABIC_PRESENTATION_FORMS_B`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SPECIALS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_HALFWIDTH_AND_FULLWIDTH_FORMS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_OLD_ITALIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GOTHIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_DESERET`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BYZANTINE_MUSICAL_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MUSICAL_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MATHEMATICAL_ALPHANUMERIC_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TAGS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CYRILLIC_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CYRILLIC_SUPPLEMENTARY`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TAGALOG`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_HANUNOO`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BUHID`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TAGBANWA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SUPPLEMENTAL_ARROWS_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SUPPLEMENTAL_ARROWS_B`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SUPPLEMENTAL_MATHEMATICAL_OPERATORS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KATAKANA_PHONETIC_EXTENSIONS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_VARIATION_SELECTORS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_B`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LIMBU`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TAI_LE`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KHMER_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PHONETIC_EXTENSIONS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_ARROWS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_YIJING_HEXAGRAM_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LINEAR_B_SYLLABARY`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LINEAR_B_IDEOGRAMS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_AEGEAN_NUMBERS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_UGARITIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SHAVIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_OSMANYA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CYPRIOT_SYLLABARY`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TAI_XUAN_JING_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_VARIATION_SELECTORS_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ANCIENT_GREEK_MUSICAL_NOTATION`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ANCIENT_GREEK_NUMBERS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ARABIC_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BUGINESE`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_STROKES`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_COPTIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ETHIOPIC_EXTENDED`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ETHIOPIC_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GEORGIAN_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GLAGOLITIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KHAROSHTHI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MODIFIER_TONE_LETTERS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_NEW_TAI_LUE`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_OLD_PERSIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PHONETIC_EXTENSIONS_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SUPPLEMENTAL_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SYLOTI_NAGRI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TIFINAGH`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_VERTICAL_FORMS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_NKO`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BALINESE`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LATIN_EXTENDED_C`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LATIN_EXTENDED_D`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PHAGS_PA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PHOENICIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CUNEIFORM`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CUNEIFORM_NUMBERS_AND_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_COUNTING_ROD_NUMERALS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SUNDANESE`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LEPCHA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_OL_CHIKI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CYRILLIC_EXTENDED_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_VAI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CYRILLIC_EXTENDED_B`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SAURASHTRA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KAYAH_LI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_REJANG`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CHAM`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ANCIENT_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PHAISTOS_DISC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LYCIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CARIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LYDIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MAHJONG_TILES`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_DOMINO_TILES`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SAMARITAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TAI_THAM`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_VEDIC_EXTENSIONS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LISU`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BAMUM`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_COMMON_INDIC_NUMBER_FORMS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_DEVANAGARI_EXTENDED`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_HANGUL_JAMO_EXTENDED_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_JAVANESE`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MYANMAR_EXTENDED_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TAI_VIET`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MEETEI_MAYEK`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_HANGUL_JAMO_EXTENDED_B`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_IMPERIAL_ARAMAIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_OLD_SOUTH_ARABIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_AVESTAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_INSCRIPTIONAL_PARTHIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_INSCRIPTIONAL_PAHLAVI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_OLD_TURKIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_RUMI_NUMERAL_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KAITHI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_EGYPTIAN_HIEROGLYPHS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ENCLOSED_ALPHANUMERIC_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ENCLOSED_IDEOGRAPHIC_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MANDAIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BATAK`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ETHIOPIC_EXTENDED_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BRAHMI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BAMUM_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KANA_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PLAYING_CARDS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_EMOTICONS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TRANSPORT_AND_MAP_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ALCHEMICAL_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ARABIC_EXTENDED_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CHAKMA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MEETEI_MAYEK_EXTENSIONS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MEROITIC_CURSIVE`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MEROITIC_HIEROGLYPHS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MIAO`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SHARADA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SORA_SOMPENG`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SUNDANESE_SUPPLEMENT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TAKRI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_BASSA_VAH`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_CAUCASIAN_ALBANIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_COPTIC_EPACT_NUMBERS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_EXTENDED`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_DUPLOYAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ELBASAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GEOMETRIC_SHAPES_EXTENDED`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_GRANTHA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KHOJKI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_KHUDAWADI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LATIN_EXTENDED_E`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_LINEAR_A`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MAHAJANI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MANICHAEAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MENDE_KIKAKUI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MODI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MRO`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_MYANMAR_EXTENDED_B`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_NABATAEAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_OLD_NORTH_ARABIAN`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_OLD_PERMIC`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_ORNAMENTAL_DINGBATS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PAHAWH_HMONG`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PALMYRENE`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PAU_CIN_HAU`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_PSALTER_PAHLAVI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SHORTHAND_FORMAT_CONTROLS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SIDDHAM`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SINHALA_ARCHAIC_NUMBERS`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_SUPPLEMENTAL_ARROWS_C`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_TIRHUTA`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_WARANG_CITI`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_COUNT`** [int](language.types.integer.md)

**`IntlChar::BLOCK_CODE_INVALID_CODE`** [int](language.types.integer.md)

**`IntlChar::BPT_NONE`** [int](language.types.integer.md)

**`IntlChar::BPT_OPEN`** [int](language.types.integer.md)

**`IntlChar::BPT_CLOSE`** [int](language.types.integer.md)

**`IntlChar::BPT_COUNT`** [int](language.types.integer.md)

**`IntlChar::EA_NEUTRAL`** [int](language.types.integer.md)

**`IntlChar::EA_AMBIGUOUS`** [int](language.types.integer.md)

**`IntlChar::EA_HALFWIDTH`** [int](language.types.integer.md)

**`IntlChar::EA_FULLWIDTH`** [int](language.types.integer.md)

**`IntlChar::EA_NARROW`** [int](language.types.integer.md)

**`IntlChar::EA_WIDE`** [int](language.types.integer.md)

**`IntlChar::EA_COUNT`** [int](language.types.integer.md)

**`IntlChar::UNICODE_CHAR_NAME`** [int](language.types.integer.md)

**`IntlChar::UNICODE_10_CHAR_NAME`** [int](language.types.integer.md)

**`IntlChar::EXTENDED_CHAR_NAME`** [int](language.types.integer.md)

**`IntlChar::CHAR_NAME_ALIAS`** [int](language.types.integer.md)

**`IntlChar::CHAR_NAME_CHOICE_COUNT`** [int](language.types.integer.md)

**`IntlChar::SHORT_PROPERTY_NAME`** [int](language.types.integer.md)

**`IntlChar::LONG_PROPERTY_NAME`** [int](language.types.integer.md)

**`IntlChar::PROPERTY_NAME_CHOICE_COUNT`** [int](language.types.integer.md)

**`IntlChar::DT_NONE`** [int](language.types.integer.md)

**`IntlChar::DT_CANONICAL`** [int](language.types.integer.md)

**`IntlChar::DT_COMPAT`** [int](language.types.integer.md)

**`IntlChar::DT_CIRCLE`** [int](language.types.integer.md)

**`IntlChar::DT_FINAL`** [int](language.types.integer.md)

**`IntlChar::DT_FONT`** [int](language.types.integer.md)

**`IntlChar::DT_FRACTION`** [int](language.types.integer.md)

**`IntlChar::DT_INITIAL`** [int](language.types.integer.md)

**`IntlChar::DT_ISOLATED`** [int](language.types.integer.md)

**`IntlChar::DT_MEDIAL`** [int](language.types.integer.md)

**`IntlChar::DT_NARROW`** [int](language.types.integer.md)

**`IntlChar::DT_NOBREAK`** [int](language.types.integer.md)

**`IntlChar::DT_SMALL`** [int](language.types.integer.md)

**`IntlChar::DT_SQUARE`** [int](language.types.integer.md)

**`IntlChar::DT_SUB`** [int](language.types.integer.md)

**`IntlChar::DT_SUPER`** [int](language.types.integer.md)

**`IntlChar::DT_VERTICAL`** [int](language.types.integer.md)

**`IntlChar::DT_WIDE`** [int](language.types.integer.md)

**`IntlChar::DT_COUNT`** [int](language.types.integer.md)

**`IntlChar::JT_NON_JOINING`** [int](language.types.integer.md)

**`IntlChar::JT_JOIN_CAUSING`** [int](language.types.integer.md)

**`IntlChar::JT_DUAL_JOINING`** [int](language.types.integer.md)

**`IntlChar::JT_LEFT_JOINING`** [int](language.types.integer.md)

**`IntlChar::JT_RIGHT_JOINING`** [int](language.types.integer.md)

**`IntlChar::JT_TRANSPARENT`** [int](language.types.integer.md)

**`IntlChar::JT_COUNT`** [int](language.types.integer.md)

**`IntlChar::JG_NO_JOINING_GROUP`** [int](language.types.integer.md)

**`IntlChar::JG_AIN`** [int](language.types.integer.md)

**`IntlChar::JG_ALAPH`** [int](language.types.integer.md)

**`IntlChar::JG_ALEF`** [int](language.types.integer.md)

**`IntlChar::JG_BEH`** [int](language.types.integer.md)

**`IntlChar::JG_BETH`** [int](language.types.integer.md)

**`IntlChar::JG_DAL`** [int](language.types.integer.md)

**`IntlChar::JG_DALATH_RISH`** [int](language.types.integer.md)

**`IntlChar::JG_E`** [int](language.types.integer.md)

**`IntlChar::JG_FEH`** [int](language.types.integer.md)

**`IntlChar::JG_FINAL_SEMKATH`** [int](language.types.integer.md)

**`IntlChar::JG_GAF`** [int](language.types.integer.md)

**`IntlChar::JG_GAMAL`** [int](language.types.integer.md)

**`IntlChar::JG_HAH`** [int](language.types.integer.md)

**`IntlChar::JG_TEH_MARBUTA_GOAL`** [int](language.types.integer.md)

**`IntlChar::JG_HAMZA_ON_HEH_GOAL`** [int](language.types.integer.md)

**`IntlChar::JG_HE`** [int](language.types.integer.md)

**`IntlChar::JG_HEH`** [int](language.types.integer.md)

**`IntlChar::JG_HEH_GOAL`** [int](language.types.integer.md)

**`IntlChar::JG_HETH`** [int](language.types.integer.md)

**`IntlChar::JG_KAF`** [int](language.types.integer.md)

**`IntlChar::JG_KAPH`** [int](language.types.integer.md)

**`IntlChar::JG_KNOTTED_HEH`** [int](language.types.integer.md)

**`IntlChar::JG_LAM`** [int](language.types.integer.md)

**`IntlChar::JG_LAMADH`** [int](language.types.integer.md)

**`IntlChar::JG_MEEM`** [int](language.types.integer.md)

**`IntlChar::JG_MIM`** [int](language.types.integer.md)

**`IntlChar::JG_NOON`** [int](language.types.integer.md)

**`IntlChar::JG_NUN`** [int](language.types.integer.md)

**`IntlChar::JG_PE`** [int](language.types.integer.md)

**`IntlChar::JG_QAF`** [int](language.types.integer.md)

**`IntlChar::JG_QAPH`** [int](language.types.integer.md)

**`IntlChar::JG_REH`** [int](language.types.integer.md)

**`IntlChar::JG_REVERSED_PE`** [int](language.types.integer.md)

**`IntlChar::JG_SAD`** [int](language.types.integer.md)

**`IntlChar::JG_SADHE`** [int](language.types.integer.md)

**`IntlChar::JG_SEEN`** [int](language.types.integer.md)

**`IntlChar::JG_SEMKATH`** [int](language.types.integer.md)

**`IntlChar::JG_SHIN`** [int](language.types.integer.md)

**`IntlChar::JG_SWASH_KAF`** [int](language.types.integer.md)

**`IntlChar::JG_SYRIAC_WAW`** [int](language.types.integer.md)

**`IntlChar::JG_TAH`** [int](language.types.integer.md)

**`IntlChar::JG_TAW`** [int](language.types.integer.md)

**`IntlChar::JG_TEH_MARBUTA`** [int](language.types.integer.md)

**`IntlChar::JG_TETH`** [int](language.types.integer.md)

**`IntlChar::JG_WAW`** [int](language.types.integer.md)

**`IntlChar::JG_YEH`** [int](language.types.integer.md)

**`IntlChar::JG_YEH_BARREE`** [int](language.types.integer.md)

**`IntlChar::JG_YEH_WITH_TAIL`** [int](language.types.integer.md)

**`IntlChar::JG_YUDH`** [int](language.types.integer.md)

**`IntlChar::JG_YUDH_HE`** [int](language.types.integer.md)

**`IntlChar::JG_ZAIN`** [int](language.types.integer.md)

**`IntlChar::JG_FE`** [int](language.types.integer.md)

**`IntlChar::JG_KHAPH`** [int](language.types.integer.md)

**`IntlChar::JG_ZHAIN`** [int](language.types.integer.md)

**`IntlChar::JG_BURUSHASKI_YEH_BARREE`** [int](language.types.integer.md)

**`IntlChar::JG_FARSI_YEH`** [int](language.types.integer.md)

**`IntlChar::JG_NYA`** [int](language.types.integer.md)

**`IntlChar::JG_ROHINGYA_YEH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_ALEPH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_AYIN`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_BETH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_DALETH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_DHAMEDH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_FIVE`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_GIMEL`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_HETH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_HUNDRED`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_KAPH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_LAMEDH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_MEM`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_NUN`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_ONE`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_PE`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_QOPH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_RESH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_SADHE`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_SAMEKH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_TAW`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_TEN`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_TETH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_THAMEDH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_TWENTY`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_WAW`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_YODH`** [int](language.types.integer.md)

**`IntlChar::JG_MANICHAEAN_ZAYIN`** [int](language.types.integer.md)

**`IntlChar::JG_STRAIGHT_WAW`** [int](language.types.integer.md)

**`IntlChar::JG_COUNT`** [int](language.types.integer.md)

**`IntlChar::GCB_OTHER`** [int](language.types.integer.md)

**`IntlChar::GCB_CONTROL`** [int](language.types.integer.md)

**`IntlChar::GCB_CR`** [int](language.types.integer.md)

**`IntlChar::GCB_EXTEND`** [int](language.types.integer.md)

**`IntlChar::GCB_L`** [int](language.types.integer.md)

**`IntlChar::GCB_LF`** [int](language.types.integer.md)

**`IntlChar::GCB_LV`** [int](language.types.integer.md)

**`IntlChar::GCB_LVT`** [int](language.types.integer.md)

**`IntlChar::GCB_T`** [int](language.types.integer.md)

**`IntlChar::GCB_V`** [int](language.types.integer.md)

**`IntlChar::GCB_SPACING_MARK`** [int](language.types.integer.md)

**`IntlChar::GCB_PREPEND`** [int](language.types.integer.md)

**`IntlChar::GCB_REGIONAL_INDICATOR`** [int](language.types.integer.md)

**`IntlChar::GCB_COUNT`** [int](language.types.integer.md)

**`IntlChar::WB_OTHER`** [int](language.types.integer.md)

**`IntlChar::WB_ALETTER`** [int](language.types.integer.md)

**`IntlChar::WB_FORMAT`** [int](language.types.integer.md)

**`IntlChar::WB_KATAKANA`** [int](language.types.integer.md)

**`IntlChar::WB_MIDLETTER`** [int](language.types.integer.md)

**`IntlChar::WB_MIDNUM`** [int](language.types.integer.md)

**`IntlChar::WB_NUMERIC`** [int](language.types.integer.md)

**`IntlChar::WB_EXTENDNUMLET`** [int](language.types.integer.md)

**`IntlChar::WB_CR`** [int](language.types.integer.md)

**`IntlChar::WB_EXTEND`** [int](language.types.integer.md)

**`IntlChar::WB_LF`** [int](language.types.integer.md)

**`IntlChar::WB_MIDNUMLET`** [int](language.types.integer.md)

**`IntlChar::WB_NEWLINE`** [int](language.types.integer.md)

**`IntlChar::WB_REGIONAL_INDICATOR`** [int](language.types.integer.md)

**`IntlChar::WB_HEBREW_LETTER`** [int](language.types.integer.md)

**`IntlChar::WB_SINGLE_QUOTE`** [int](language.types.integer.md)

**`IntlChar::WB_DOUBLE_QUOTE`** [int](language.types.integer.md)

**`IntlChar::WB_COUNT`** [int](language.types.integer.md)

**`IntlChar::SB_OTHER`** [int](language.types.integer.md)

**`IntlChar::SB_ATERM`** [int](language.types.integer.md)

**`IntlChar::SB_CLOSE`** [int](language.types.integer.md)

**`IntlChar::SB_FORMAT`** [int](language.types.integer.md)

**`IntlChar::SB_LOWER`** [int](language.types.integer.md)

**`IntlChar::SB_NUMERIC`** [int](language.types.integer.md)

**`IntlChar::SB_OLETTER`** [int](language.types.integer.md)

**`IntlChar::SB_SEP`** [int](language.types.integer.md)

**`IntlChar::SB_SP`** [int](language.types.integer.md)

**`IntlChar::SB_STERM`** [int](language.types.integer.md)

**`IntlChar::SB_UPPER`** [int](language.types.integer.md)

**`IntlChar::SB_CR`** [int](language.types.integer.md)

**`IntlChar::SB_EXTEND`** [int](language.types.integer.md)

**`IntlChar::SB_LF`** [int](language.types.integer.md)

**`IntlChar::SB_SCONTINUE`** [int](language.types.integer.md)

**`IntlChar::SB_COUNT`** [int](language.types.integer.md)

**`IntlChar::LB_UNKNOWN`** [int](language.types.integer.md)

**`IntlChar::LB_AMBIGUOUS`** [int](language.types.integer.md)

**`IntlChar::LB_ALPHABETIC`** [int](language.types.integer.md)

**`IntlChar::LB_BREAK_BOTH`** [int](language.types.integer.md)

**`IntlChar::LB_BREAK_AFTER`** [int](language.types.integer.md)

**`IntlChar::LB_BREAK_BEFORE`** [int](language.types.integer.md)

**`IntlChar::LB_MANDATORY_BREAK`** [int](language.types.integer.md)

**`IntlChar::LB_CONTINGENT_BREAK`** [int](language.types.integer.md)

**`IntlChar::LB_CLOSE_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::LB_COMBINING_MARK`** [int](language.types.integer.md)

**`IntlChar::LB_CARRIAGE_RETURN`** [int](language.types.integer.md)

**`IntlChar::LB_EXCLAMATION`** [int](language.types.integer.md)

**`IntlChar::LB_GLUE`** [int](language.types.integer.md)

**`IntlChar::LB_HYPHEN`** [int](language.types.integer.md)

**`IntlChar::LB_IDEOGRAPHIC`** [int](language.types.integer.md)

**`IntlChar::LB_INSEPARABLE`** [int](language.types.integer.md)

**`IntlChar::LB_INSEPERABLE`** [int](language.types.integer.md)

**`IntlChar::LB_INFIX_NUMERIC`** [int](language.types.integer.md)

**`IntlChar::LB_LINE_FEED`** [int](language.types.integer.md)

**`IntlChar::LB_NONSTARTER`** [int](language.types.integer.md)

**`IntlChar::LB_NUMERIC`** [int](language.types.integer.md)

**`IntlChar::LB_OPEN_PUNCTUATION`** [int](language.types.integer.md)

**`IntlChar::LB_POSTFIX_NUMERIC`** [int](language.types.integer.md)

**`IntlChar::LB_PREFIX_NUMERIC`** [int](language.types.integer.md)

**`IntlChar::LB_QUOTATION`** [int](language.types.integer.md)

**`IntlChar::LB_COMPLEX_CONTEXT`** [int](language.types.integer.md)

**`IntlChar::LB_SURROGATE`** [int](language.types.integer.md)

**`IntlChar::LB_SPACE`** [int](language.types.integer.md)

**`IntlChar::LB_BREAK_SYMBOLS`** [int](language.types.integer.md)

**`IntlChar::LB_ZWSPACE`** [int](language.types.integer.md)

**`IntlChar::LB_NEXT_LINE`** [int](language.types.integer.md)

**`IntlChar::LB_WORD_JOINER`** [int](language.types.integer.md)

**`IntlChar::LB_H2`** [int](language.types.integer.md)

**`IntlChar::LB_H3`** [int](language.types.integer.md)

**`IntlChar::LB_JL`** [int](language.types.integer.md)

**`IntlChar::LB_JT`** [int](language.types.integer.md)

**`IntlChar::LB_JV`** [int](language.types.integer.md)

**`IntlChar::LB_CLOSE_PARENTHESIS`** [int](language.types.integer.md)

**`IntlChar::LB_CONDITIONAL_JAPANESE_STARTER`** [int](language.types.integer.md)

**`IntlChar::LB_HEBREW_LETTER`** [int](language.types.integer.md)

**`IntlChar::LB_REGIONAL_INDICATOR`** [int](language.types.integer.md)

**`IntlChar::LB_COUNT`** [int](language.types.integer.md)

**`IntlChar::NT_NONE`** [int](language.types.integer.md)

**`IntlChar::NT_DECIMAL`** [int](language.types.integer.md)

**`IntlChar::NT_DIGIT`** [int](language.types.integer.md)

**`IntlChar::NT_NUMERIC`** [int](language.types.integer.md)

**`IntlChar::NT_COUNT`** [int](language.types.integer.md)

**`IntlChar::HST_NOT_APPLICABLE`** [int](language.types.integer.md)

**`IntlChar::HST_LEADING_JAMO`** [int](language.types.integer.md)

**`IntlChar::HST_VOWEL_JAMO`** [int](language.types.integer.md)

**`IntlChar::HST_TRAILING_JAMO`** [int](language.types.integer.md)

**`IntlChar::HST_LV_SYLLABLE`** [int](language.types.integer.md)

**`IntlChar::HST_LVT_SYLLABLE`** [int](language.types.integer.md)

**`IntlChar::HST_COUNT`** [int](language.types.integer.md)

**`IntlChar::FOLD_CASE_DEFAULT`** [int](language.types.integer.md)

**`IntlChar::FOLD_CASE_EXCLUDE_SPECIAL_I`** [int](language.types.integer.md)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Adicionadas as constantes **`IntlChar::PROPERTY_IDS_UNARY_OPERATOR`**, **`IntlChar::PROPERTY_ID_COMPAT_MATH_START`** e **`IntlChar::PROPERTY_ID_COMPAT_MATH_CONTINUE`**. |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 7.0.6 | A constante **`IntlChar::NO_NUMERIC_VALUE`** foi adicionada. |

## Índice

- [IntlChar::charAge](intlchar.charage.md) — Obtém a "idade" do ponto de código
- [IntlChar::charDigitValue](intlchar.chardigitvalue.md) — Obtém o valor do dígito decimal de um caractere de dígito decimal
- [IntlChar::charDirection](intlchar.chardirection.md) — Obtém o valor de categoria bidirecional para um ponto de código
- [IntlChar::charFromName](intlchar.charfromname.md) — Encontra um caractere Unicode pelo nome e retorna seu valor de ponto de código
- [IntlChar::charMirror](intlchar.charmirror.md) — Obtém o caractere "espelho" para um ponto de código
- [IntlChar::charName](intlchar.charname.md) — Obtém o nome de um caractere Unicode
- [IntlChar::charType](intlchar.chartype.md) — Obtém o valor da categoria geral para um ponto de código
- [IntlChar::chr](intlchar.chr.md) — Retorna um caractere Unicode por valor de ponto de código
- [IntlChar::digit](intlchar.digit.md) — Obtém o valor de dígito decimal de um ponto de código para uma base fornecida
- [IntlChar::enumCharNames](intlchar.enumcharnames.md) — Enumera todos os caracteres Unicode atribuídos dentro de um intervalo
- [IntlChar::enumCharTypes](intlchar.enumchartypes.md) — Enumera todos os pontos de código com suas categorias gerais Unicode
- [IntlChar::foldCase](intlchar.foldcase.md) — Converte maiúscula/minúscula em um ponto de código
- [IntlChar::forDigit](intlchar.fordigit.md) — Obtém a representação em caractere para um dígito e uma base fornecidos
- [IntlChar::getBidiPairedBracket](intlchar.getbidipairedbracket.md) — Obtém o caractere de par de abertura/fechamento para um ponto de código
- [IntlChar::getBlockCode](intlchar.getblockcode.md) — Obtém o bloco de alocação Unicode contendo um ponto de código
- [IntlChar::getCombiningClass](intlchar.getcombiningclass.md) — Obtém a classe de combinação de um ponto de código
- [IntlChar::getFC\_NFKC\_Closure](intlchar.getfc-nfkc-closure.md) — Obtém a propriedade FC\_NFKC\_Closure para um ponto de código
- [IntlChar::getIntPropertyMaxValue](intlchar.getintpropertymaxvalue.md) — Obtém o valor máximo para uma propriedade Unicode
- [IntlChar::getIntPropertyMinValue](intlchar.getintpropertyminvalue.md) — Obtém o valor mínimo para uma propriedade Unicode
- [IntlChar::getIntPropertyValue](intlchar.getintpropertyvalue.md) — Obtém o valor de uma propriedade Unicode de um ponto de código
- [IntlChar::getNumericValue](intlchar.getnumericvalue.md) — Obtém o valor numérico para um ponto de código Unicode
- [IntlChar::getPropertyEnum](intlchar.getpropertyenum.md) — Obtém o valor da constante da propriedade para uma propriedade informada
- [IntlChar::getPropertyName](intlchar.getpropertyname.md) — Obtém o nome Unicode de uma propriedade
- [IntlChar::getPropertyValueEnum](intlchar.getpropertyvalueenum.md) — Obtém o valor da propriedade para um nome de valor fornecido
- [IntlChar::getPropertyValueName](intlchar.getpropertyvaluename.md) — Obtém o nome Unicode para um valor de propriedade
- [IntlChar::getUnicodeVersion](intlchar.getunicodeversion.md) — Obtém a versão do Unicode
- [IntlChar::hasBinaryProperty](intlchar.hasbinaryproperty.md) — Verifica uma propriedade binária Unicode para um ponto de código
- [IntlChar::isalnum](intlchar.isalnum.md) — Verifica se um ponto de código é um caractere alfanumérico
- [IntlChar::isalpha](intlchar.isalpha.md) — Verifica se um ponto de código é uma letra
- [IntlChar::isbase](intlchar.isbase.md) — Verifica se um ponto de código é um caractere base
- [IntlChar::isblank](intlchar.isblank.md) — Verifica se um ponto de código é um caractere "vazio" ou um "espaço horizontal"
- [IntlChar::iscntrl](intlchar.iscntrl.md) — Verifica se um ponto de código é um caractere de controle
- [IntlChar::isdefined](intlchar.isdefined.md) — Verifica se o ponto de código está definido
- [IntlChar::isdigit](intlchar.isdigit.md) — Verifica se um ponto de código é um caractere de dígito
- [IntlChar::isgraph](intlchar.isgraph.md) — Verifica se um ponto de código é um caractere gráfico
- [IntlChar::isIDIgnorable](intlchar.isidignorable.md) — Verifica se um ponto de código é um caractere ignorável
- [IntlChar::isIDPart](intlchar.isidpart.md) — Verifica se um ponto de código é permissível em um identificador
- [IntlChar::isIDStart](intlchar.isidstart.md) — Verifica se um ponto de código é permissível como o primeiro caractere em um identificador
- [IntlChar::isISOControl](intlchar.isisocontrol.md) — Verifica se o ponto de código é um código de controle ISO
- [IntlChar::isJavaIDPart](intlchar.isjavaidpart.md) — Verifica se um ponto de código é permissível em um identificador Java
- [IntlChar::isJavaIDStart](intlchar.isjavaidstart.md) — Verifica se um ponto de código é permissível como o primeiro caractere em um identificador Java
- [IntlChar::isJavaSpaceChar](intlchar.isjavaspacechar.md) — Verifica se um ponto de código é um caractere de espaçamento de acordo com o Java
- [IntlChar::islower](intlchar.islower.md) — Verifica se um ponto de código é uma letra minúscula
- [IntlChar::isMirrored](intlchar.ismirrored.md) — Verifica se um ponto de código tem a propriedade Bidi\_Mirrored
- [IntlChar::isprint](intlchar.isprint.md) — Verifica se um ponto de código é um caractere imprimível
- [IntlChar::ispunct](intlchar.ispunct.md) — Verifica se um ponto de código é um caractere de pontuação
- [IntlChar::isspace](intlchar.isspace.md) — Verifica se um ponto de código é um caractere de espaçamento
- [IntlChar::istitle](intlchar.istitle.md) — Verifica se um ponto de código é uma letra com grafia mista
- [IntlChar::isUAlphabetic](intlchar.isualphabetic.md) — Verifica se um ponto de código tem a propriedade Alphabetic do Unicode
- [IntlChar::isULowercase](intlchar.isulowercase.md) — Verifica se um ponto de código tem a propriedade Lowercase do Unicode
- [IntlChar::isupper](intlchar.isupper.md) — Verifica se um ponto de código tem a categoria geral "Lu" (letra maiúscula)
- [IntlChar::isUUppercase](intlchar.isuuppercase.md) — Verifica se um ponto de código tem a propriedade Uppercase do Unicode
- [IntlChar::isUWhiteSpace](intlchar.isuwhitespace.md) — Verifica se um ponto de código tem a propriedade White\_Space do Unicode
- [IntlChar::isWhitespace](intlchar.iswhitespace.md) — Verifica se um ponto de código é um caractere de espaço em branco de acordo com a ICU
- [IntlChar::isxdigit](intlchar.isxdigit.md) — Verifica se um ponto de código é um dígito hexadecimal
- [IntlChar::ord](intlchar.ord.md) — Retorna o valor do ponto de código Unicode do caractere
- [IntlChar::tolower](intlchar.tolower.md) — Transforma o caractere Unicode em minúscula
- [IntlChar::totitle](intlchar.totitle.md) — Transforma o caractere Unicode em letra de título
- [IntlChar::toupper](intlchar.toupper.md) — Transforma um caractere Unicode em maiúscula

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
