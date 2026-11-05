# Verifica se um ponto de código é uma letra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isalpha.php

---

# IntlChar::isalpha

(PHP 7, PHP 8)

IntlChar::isalpha — Verifica se um ponto de código é uma letra

### Descrição

public static function **IntlChar::isalpha**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é uma letra. **`true`** para categoria geral "L" (letras).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` é uma letra, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isalpha("A"));
var_dump(IntlChar::isalpha("1"));
var_dump(IntlChar::isalpha("\u{2603}"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(false)
```

### Veja também

- [IntlChar::isalnum()](intlchar.isalnum.md) - Verifica se um ponto de código é um caractere alfanumérico
- [IntlChar::isdigit()](intlchar.isdigit.md) - Verifica se um ponto de código é um caractere de dígito
- [ctype\_alpha()](function.ctype-alpha.md) - Verifica se os caracteres são alfabéticos

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
