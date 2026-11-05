# Obtém o valor de categoria bidirecional para um ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.chardirection.php

---

# IntlChar::charDirection

(PHP 7, PHP 8)

IntlChar::charDirection — Obtém o valor de categoria bidirecional para um ponto de código

### Descrição

public static function **IntlChar::charDirection**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[int](language.types.integer.md)

Retorna o valor de categoria bidirecional para um ponto de código, que é usado no [» Algoritmo Bidirecional Unicode (UAX #9)](https://www.unicode.org/reports/tr9/).

> **Nota**:
>
> Alguns pontos de código não atribuídos têm valores bidirecionais de R ou AL porque estão em blocos reservador para escrita da direita para a esquerda.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

O valor da categoria bidirecional; uma das constantes a seguir:

- **`IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT`**
- **`IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT`**
- **`IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER`**
- **`IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR`**
- **`IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR`**
- **`IntlChar::CHAR_DIRECTION_ARABIC_NUMBER`**
- **`IntlChar::CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR`**
- **`IntlChar::CHAR_DIRECTION_BLOCK_SEPARATOR`**
- **`IntlChar::CHAR_DIRECTION_SEGMENT_SEPARATOR`**
- **`IntlChar::CHAR_DIRECTION_WHITE_SPACE_NEUTRAL`**
- **`IntlChar::CHAR_DIRECTION_OTHER_NEUTRAL`**
- **`IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING`**
- **`IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE`**
- **`IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC`**
- **`IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING`**
- **`IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE`**
- **`IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT`**
- **`IntlChar::CHAR_DIRECTION_DIR_NON_SPACING_MARK`**
- **`IntlChar::CHAR_DIRECTION_BOUNDARY_NEUTRAL`**
- **`IntlChar::CHAR_DIRECTION_FIRST_STRONG_ISOLATE`**
- **`IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE`**
- **`IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE`**
- **`IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE`**
- **`IntlChar::CHAR_DIRECTION_CHAR_DIRECTION_COUNT`**

Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::charDirection("A") === IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT);
var_dump(IntlChar::charDirection("\u{05E9}") === IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT);
var_dump(IntlChar::charDirection("+") === IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR);
var_dump(IntlChar::charDirection(".") === IntlChar::CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR);
?>
```

O exemplo acima produzirá:

```
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
