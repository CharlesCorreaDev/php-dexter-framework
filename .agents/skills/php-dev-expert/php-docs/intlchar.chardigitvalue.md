# Obtém o valor do dígito decimal de um caractere de dígito decimal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.chardigitvalue.php

---

# IntlChar::charDigitValue

(PHP 7, PHP 8)

IntlChar::charDigitValue — Obtém o valor do dígito decimal de um caractere de dígito decimal

### Descrição

public static function **IntlChar::charDigitValue**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[int](language.types.integer.md)

Retorna o valor do dígito decimal de um caractere de dígito decimal.

Tais caracteres têm a categoria geral "Nd" (números de dígitos decimais) e um Numeric\_Type igual a Decimal.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

O valor de dígito decimal de `codepoint`,
ou `-1` se não for um caractere de dígito decimal. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::charDigitValue("1"));
var_dump(IntlChar::charDigitValue("\u{0662}"));
var_dump(IntlChar::charDigitValue("\u{0E53}"));
?>
```

O exemplo acima produzirá:

```
int(1)
int(2)
int(3)
```

### Veja também

- [IntlChar::getNumericValue()](intlchar.getnumericvalue.md) - Obtém o valor numérico para um ponto de código Unicode

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
