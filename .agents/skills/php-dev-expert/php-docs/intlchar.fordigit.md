# Obtém a representação em caractere para um dígito e uma base fornecidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.fordigit.php

---

# IntlChar::forDigit

(PHP 7, PHP 8)

IntlChar::forDigit — Obtém a representação em caractere para um dígito e uma base fornecidos

### Descrição

public static function **IntlChar::forDigit**([int](language.types.integer.md) `$digit`, [int](language.types.integer.md) `$base` = 10): [int](language.types.integer.md)

Determina a representação em caractere para um dígito específico na base fornecida.

E o valor de base não for válido, ou se o valor do dígito não for válido na base especificada,
o caractere nulo (`U+0000`) é retornado.

A base (radix) é válida se for maior ou igual a `2` e menor ou igual a `36`.
O dígito (digit) é válido se `0 <= digit < radix`.

Se o dígito for menor que `10`, '0' + dígito é retornado. Caso contrário, o valor 'a' + dígito - 10 é retornado.

### Parâmetros

`digit`
:   O número a ser convertido para um caractere.

`base`
:   A base (o padrão é `10`).

### Valor Retornado

A representação em caractere (como um [int](language.types.integer.md)) do dígito especificado na base fornecida.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::forDigit(0));
var_dump(IntlChar::forDigit(3));
var_dump(IntlChar::forDigit(3, 10));
var_dump(IntlChar::forDigit(10));
var_dump(IntlChar::forDigit(10, 16));
?>
```

O exemplo acima produzirá:

```
int(48)
int(51)
int(51)
int(0)
int(97)
```

### Veja também

- [IntlChar::digit()](intlchar.digit.md) - Obtém o valor de dígito decimal de um ponto de código para uma base fornecida
- [IntlChar::charDigitValue()](intlchar.chardigitvalue.md) - Obtém o valor do dígito decimal de um caractere de dígito decimal
- [IntlChar::isdigit()](intlchar.isdigit.md) - Verifica se um ponto de código é um caractere de dígito
- **`IntlChar::PROPERTY_NUMERIC_TYPE`**

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
