# Verifica se um ponto de código é um caractere imprimível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isprint.php

---

# IntlChar::isprint

(PHP 7, PHP 8)

IntlChar::isprint — Verifica se um ponto de código é um caractere imprimível

### Descrição

public static function **IntlChar::isprint**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é um caractere imprimível.

**`true`** para categoria geral diferente de "C" (controles).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere imprimível, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isprint("A"));
var_dump(IntlChar::isprint(" "));
var_dump(IntlChar::isprint("\n"));
var_dump(IntlChar::isprint("\u{200e}"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
bool(false)
```

### Veja também

- [IntlChar::iscntrl()](intlchar.iscntrl.md) - Verifica se um ponto de código é um caractere de controle
- **`IntlChar::PROPERTY_DEFAULT_IGNORABLE_CODE_POINT`**
- [ctype\_print()](function.ctype-print.md) - Verifica se os caracteres são imprimíveis

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
