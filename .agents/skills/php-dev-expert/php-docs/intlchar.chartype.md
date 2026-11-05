# Obtém o valor da categoria geral para um ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.chartype.php

---

# IntlChar::charType

(PHP 7, PHP 8)

IntlChar::charType — Obtém o valor da categoria geral para um ponto de código

### Descrição

public static function **IntlChar::charType**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[int](language.types.integer.md)

Retorna o valor da categoria geral para um ponto de código.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna o tipo de categoria geral, que pode ser uma das constantes a seguir:

- **`IntlChar::CHAR_CATEGORY_UNASSIGNED`**
- **`IntlChar::CHAR_CATEGORY_GENERAL_OTHER_TYPES`**
- **`IntlChar::CHAR_CATEGORY_UPPERCASE_LETTER`**
- **`IntlChar::CHAR_CATEGORY_LOWERCASE_LETTER`**
- **`IntlChar::CHAR_CATEGORY_TITLECASE_LETTER`**
- **`IntlChar::CHAR_CATEGORY_MODIFIER_LETTER`**
- **`IntlChar::CHAR_CATEGORY_OTHER_LETTER`**
- **`IntlChar::CHAR_CATEGORY_NON_SPACING_MARK`**
- **`IntlChar::CHAR_CATEGORY_ENCLOSING_MARK`**
- **`IntlChar::CHAR_CATEGORY_COMBINING_SPACING_MARK`**
- **`IntlChar::CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER`**
- **`IntlChar::CHAR_CATEGORY_LETTER_NUMBER`**
- **`IntlChar::CHAR_CATEGORY_OTHER_NUMBER`**
- **`IntlChar::CHAR_CATEGORY_SPACE_SEPARATOR`**
- **`IntlChar::CHAR_CATEGORY_LINE_SEPARATOR`**
- **`IntlChar::CHAR_CATEGORY_PARAGRAPH_SEPARATOR`**
- **`IntlChar::CHAR_CATEGORY_CONTROL_CHAR`**
- **`IntlChar::CHAR_CATEGORY_FORMAT_CHAR`**
- **`IntlChar::CHAR_CATEGORY_PRIVATE_USE_CHAR`**
- **`IntlChar::CHAR_CATEGORY_SURROGATE`**
- **`IntlChar::CHAR_CATEGORY_DASH_PUNCTUATION`**
- **`IntlChar::CHAR_CATEGORY_START_PUNCTUATION`**
- **`IntlChar::CHAR_CATEGORY_END_PUNCTUATION`**
- **`IntlChar::CHAR_CATEGORY_CONNECTOR_PUNCTUATION`**
- **`IntlChar::CHAR_CATEGORY_OTHER_PUNCTUATION`**
- **`IntlChar::CHAR_CATEGORY_MATH_SYMBOL`**
- **`IntlChar::CHAR_CATEGORY_CURRENCY_SYMBOL`**
- **`IntlChar::CHAR_CATEGORY_MODIFIER_SYMBOL`**
- **`IntlChar::CHAR_CATEGORY_OTHER_SYMBOL`**
- **`IntlChar::CHAR_CATEGORY_INITIAL_PUNCTUATION`**
- **`IntlChar::CHAR_CATEGORY_FINAL_PUNCTUATION`**
- **`IntlChar::CHAR_CATEGORY_CHAR_CATEGORY_COUNT`**

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::charType("A") === IntlChar::CHAR_CATEGORY_UPPERCASE_LETTER);
var_dump(IntlChar::charType(".") === IntlChar::CHAR_CATEGORY_OTHER_PUNCTUATION);
var_dump(IntlChar::charType("\t") === IntlChar::CHAR_CATEGORY_CONTROL_CHAR);
var_dump(IntlChar::charType("\u{2603}") === IntlChar::CHAR_CATEGORY_OTHER_SYMBOL);
var_dump(IntlChar::charType("multiple chars") === null);
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
```

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
