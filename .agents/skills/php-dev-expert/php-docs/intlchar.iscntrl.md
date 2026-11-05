# Verifica se um ponto de código é um caractere de controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.iscntrl.php

---

# IntlChar::iscntrl

(PHP 7, PHP 8)

IntlChar::iscntrl — Verifica se um ponto de código é um caractere de controle

### Descrição

public static function **IntlChar::iscntrl**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é um caractere de controle.

Um caractere de controle é um dos seguintes:

- Caractere de controle ISO de 8 bits (U+0000..U+001f e U+007f..U+009f)
- **`IntlChar::CHAR_CATEGORY_CONTROL_CHAR`** (Cc)
- **`IntlChar::CHAR_CATEGORY_FORMAT_CHAR`** (Cf)
- **`IntlChar::CHAR_CATEGORY_LINE_SEPARATOR`** (Zl)
- **`IntlChar::CHAR_CATEGORY_PARAGRAPH_SEPARATOR`** (Zp)

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere de controle, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::iscntrl("A"));
var_dump(IntlChar::iscntrl(" "));
var_dump(IntlChar::iscntrl("\n"));
var_dump(IntlChar::iscntrl("\u{200e}"));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(false)
bool(true)
bool(true)
```

### Veja também

- [IntlChar::isprint()](intlchar.isprint.md) - Verifica se um ponto de código é um caractere imprimível
- **`IntlChar::PROPERTY_DEFAULT_IGNORABLE_CODE_POINT`**
- [ctype\_cntrl()](function.ctype-cntrl.md) - Verifica se os caracteres são de controle

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
