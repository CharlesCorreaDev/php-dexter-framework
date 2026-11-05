# Obtém a classe de combinação de um ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getcombiningclass.php

---

# IntlChar::getCombiningClass

(PHP 7, PHP 8)

IntlChar::getCombiningClass — Obtém a classe de combinação de um ponto de código

### Descrição

public static function **IntlChar::getCombiningClass**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[int](language.types.integer.md)

Retorna a classe de combinação de um ponto de código.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna a classe de combinação do caractere. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::getCombiningClass("A"));
var_dump(IntlChar::getCombiningClass("\u{0334}"));
var_dump(IntlChar::getCombiningClass("\u{0358}"));
?>
```

O exemplo acima produzirá:

```
int(0)
int(1)
int(232)
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
