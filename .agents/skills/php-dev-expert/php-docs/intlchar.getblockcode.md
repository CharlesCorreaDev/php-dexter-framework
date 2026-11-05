# Obtém o bloco de alocação Unicode contendo um ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.getblockcode.php

---

# IntlChar::getBlockCode

(PHP 7, PHP 8)

IntlChar::getBlockCode — Obtém o bloco de alocação Unicode contendo um ponto de código

### Descrição

public static function **IntlChar::getBlockCode**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[int](language.types.integer.md)

Obtém o bloco de alocação Unicode que contém o caractere.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna o valor do bloco para o `codepoint`.
Veja as constantes `IntlChar::BLOCK_CODE_*` para possíveis valores de retorno. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::getBlockCode("A") === IntlChar::BLOCK_CODE_BASIC_LATIN);
var_dump(IntlChar::getBlockCode("Φ") === IntlChar::BLOCK_CODE_GREEK);
var_dump(IntlChar::getBlockCode("\u{2603}") === IntlChar::BLOCK_CODE_MISCELLANEOUS_SYMBOLS);
?>
```

O exemplo acima produzirá:

```
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
