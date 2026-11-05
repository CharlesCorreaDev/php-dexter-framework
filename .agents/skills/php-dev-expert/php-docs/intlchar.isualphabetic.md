# Verifica se um ponto de código tem a propriedade Alphabetic do Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isualphabetic.php

---

# IntlChar::isUAlphabetic

(PHP 7, PHP 8)

IntlChar::isUAlphabetic — Verifica se um ponto de código tem a propriedade Alphabetic do Unicode

### Descrição

public static function **IntlChar::isUAlphabetic**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Verifica se um ponto de código tem a propriedade Alphabetic do Unicode.

É o mesmo que `IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_ALPHABETIC)`

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` tiver a propriedade Alphabetic do Unicode, **`false`** se não tiver. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isUAlphabetic("A"));
var_dump(IntlChar::isUAlphabetic("1"));
var_dump(IntlChar::isUAlphabetic("\u{2603}"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(false)
```

### Veja também

- [IntlChar::isalpha()](intlchar.isalpha.md) - Verifica se um ponto de código é uma letra
- [IntlChar::hasBinaryProperty()](intlchar.hasbinaryproperty.md) - Verifica uma propriedade binária Unicode para um ponto de código
- **`IntlChar::PROPERTY_ALPHABETIC`**

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
