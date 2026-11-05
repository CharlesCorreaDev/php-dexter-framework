# Verifica se um ponto de código é um caractere de dígito

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isdigit.php

---

# IntlChar::isdigit

(PHP 7, PHP 8)

IntlChar::isdigit — Verifica se um ponto de código é um caractere de dígito

### Descrição

public static function **IntlChar::isdigit**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se um ponto de código especificado é um caractere de dígito.

**`true`** para caracteres com categoria geral "Nd" (números de dígito decimal). A partir do Unicode 4, isto é o mesmo que testar se a propriedade Numeric\_Type é Decimal.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` é um caractere de dígito, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isdigit("A"));
var_dump(IntlChar::isdigit("1"));
var_dump(IntlChar::isdigit("\t"));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(false)
```

### Veja também

- [IntlChar::isalpha()](intlchar.isalpha.md) - Verifica se um ponto de código é uma letra
- [IntlChar::isalnum()](intlchar.isalnum.md) - Verifica se um ponto de código é um caractere alfanumérico
- [IntlChar::isxdigit()](intlchar.isxdigit.md) - Verifica se um ponto de código é um dígito hexadecimal
- [ctype\_digit()](function.ctype-digit.md) - Verifica se os caracteres são numéricos

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
