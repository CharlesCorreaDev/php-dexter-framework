# Verifica se um ponto de código é um caractere alfanumérico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isalnum.php

---

# IntlChar::isalnum

(PHP 7, PHP 8)

IntlChar::isalnum — Verifica se um ponto de código é um caractere alfanumérico

### Descrição

public static function **IntlChar::isalnum**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é um caractere alfanumérico (letra ou dígito). **`true`** para caracteres com categoria geral "L" (letras) e "Nd" (números de dígito decimal).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere alfanumérico, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isalnum("A"));
var_dump(IntlChar::isalnum("1"));
var_dump(IntlChar::isalnum("\u{2603}"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
```

### Veja também

- [IntlChar::isalpha()](intlchar.isalpha.md) - Verifica se um ponto de código é uma letra
- [IntlChar::isdigit()](intlchar.isdigit.md) - Verifica se um ponto de código é um caractere de dígito
- [ctype\_alnum()](function.ctype-alnum.md) - Verifica se os caracteres são alfanuméricos

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
