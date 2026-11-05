# Arredonda número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcround.php

---

# bcround

(PHP 8 >= 8.4.0)

bcround — Arredonda número de precisão arbitrária

### Descrição

function **bcround**([string](language.types.string.md) `$num`, [int](language.types.integer.md) `$precision` = 0, [RoundingMode](enum.roundingmode.md) `$mode` = **`RoundingMode::HalfAwayFromZero`**): [string](language.types.string.md)

Retorna o valor arredondado de `num` para a
precisão informada em `precision`
(número de dígitos após o separador decimal).
`precision` também pode ser negativo ou zero (padrão).

### Parâmetros

`num`
:   Valor a ser arredondado.

`precision`
:   O número opcional de dígitos decimais para arredondar.

    Se `precision` for positivo, `num` será
    arredondado para `precision` de dígitos significativos depois do ponto decimal.

    Se `precision` for negativo, `num` será
    arredondado para `precision` de dígitos significativos depois do ponto decimal,
    isto é: o múltiplo mais próximo de `pow(10, -$precision)`, por exemplo: para um
    `precision` de -1 `num` é arredondado para dezenas,
    para um `precision` de -2 para centenas, etc.

`mode`
:   Especifica o modo de arredondamento. Para mais informação sobre os modos, consulte [RoundingMode](enum.roundingmode.md).

### Valor Retornado

Retorna uma string numérica representando `num` arredondado para a precisão especificada.

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num` não é uma string numérica BCMath bem formada.
- Um `mode` inválido é especificado.

### Examples

**Exemplo #1 Exemplos de **bcround()****

```
<?php
var_dump(bcround('3.4'));
var_dump(bcround('3.5'));
var_dump(bcround('3.6'));
var_dump(bcround('3.6', 0));
var_dump(bcround('5.045', 2));
var_dump(bcround('5.055', 2));
var_dump(bcround('345', -2));
var_dump(bcround('345', -3));
var_dump(bcround('678', -2));
var_dump(bcround('678', -3));
?>
```

O exemplo acima produzirá:

```
string(1) "3"
string(1) "4"
string(1) "4"
string(1) "4"
string(4) "5.05"
string(4) "5.06"
string(3) "300"
string(1) "0"
string(3) "700"
string(4) "1000"
```

**Exemplo #2
Exemplo de uso de **bcround()** com diferentes valores de `precision`**

```
<?php
$number = '123.45';

var_dump(bcround($number, 3));
var_dump(bcround($number, 2));
var_dump(bcround($number, 1));
var_dump(bcround($number, 0));
var_dump(bcround($number, -1));
var_dump(bcround($number, -2));
var_dump(bcround($number, -3));
?>
```

O exemplo acima produzirá:

```
string(7) "123.450"
string(6) "123.45"
string(5) "123.5"
string(3) "123"
string(3) "120"
string(3) "100"
string(1) "0"
```

**Exemplo #3
Exemplo de uso de **bcround()** com diferentes valores de `mode`**

```
<?php
echo 'Modos de arredondamento com 9.5' . PHP_EOL;
var_dump(bcround('9.5', 0, RoundingMode::HalfAwayFromZero));
var_dump(bcround('9.5', 0, RoundingMode::HalfTowardsZero));
var_dump(bcround('9.5', 0, RoundingMode::HalfEven));
var_dump(bcround('9.5', 0, RoundingMode::HalfOdd));
var_dump(bcround('9.5', 0, RoundingMode::TowardsZero));
var_dump(bcround('9.5', 0, RoundingMode::AwayFromZero));
var_dump(bcround('9.5', 0, RoundingMode::NegativeInfinity));
var_dump(bcround('9.5', 0, RoundingMode::PositiveInfinity));

echo PHP_EOL;
echo 'Modos de arredondamento com 8.5' . PHP_EOL;
var_dump(bcround('8.5', 0, RoundingMode::HalfAwayFromZero));
var_dump(bcround('8.5', 0, RoundingMode::HalfTowardsZero));
var_dump(bcround('8.5', 0, RoundingMode::HalfEven));
var_dump(bcround('8.5', 0, RoundingMode::HalfOdd));
var_dump(bcround('8.5', 0, RoundingMode::TowardsZero));
var_dump(bcround('8.5', 0, RoundingMode::AwayFromZero));
var_dump(bcround('8.5', 0, RoundingMode::NegativeInfinity));
var_dump(bcround('8.5', 0, RoundingMode::PositiveInfinity));
?>
```

O exemplo acima produzirá:

```
Modos de arredondamento com 9.5
string(2) "10"
string(1) "9"
string(2) "10"
string(1) "9"
string(1) "9"
string(2) "10"
string(1) "9"
string(2) "10"

Modos de arredondamento com 8.5
string(1) "9"
string(1) "8"
string(1) "8"
string(1) "9"
string(1) "8"
string(1) "9"
string(1) "8"
string(1) "9"
```

**Exemplo #4
Exemplo de uso de **bcround()** com diferentes valores de `mode`
ao especificar `precision`**

```
<?php
echo 'Usando RoundingMode::HalfAwayFromZero com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(bcround( 1.55, 1, RoundingMode::HalfAwayFromZero));
var_dump(bcround(-1.55, 1, RoundingMode::HalfAwayFromZero));

echo PHP_EOL;
echo 'Usando RoundingMode::HalfTowardsZero com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(bcround( 1.55, 1, RoundingMode::HalfTowardsZero));
var_dump(bcround(-1.55, 1, RoundingMode::HalfTowardsZero));

echo PHP_EOL;
echo 'Usando RoundingMode::HalfEven com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(bcround( 1.55, 1, RoundingMode::HalfEven));
var_dump(bcround(-1.55, 1, RoundingMode::HalfEven));

echo PHP_EOL;
echo 'Usando RoundingMode::HalfOdd com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(bcround( 1.55, 1, RoundingMode::HalfOdd));
var_dump(bcround(-1.55, 1, RoundingMode::HalfOdd));

echo PHP_EOL;
echo 'Usando RoundingMode::TowardsZero com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(bcround( 1.55, 1, RoundingMode::TowardsZero));
var_dump(bcround(-1.55, 1, RoundingMode::TowardsZero));

echo PHP_EOL;
echo 'Usando RoundingMode::AwayFromZero com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(bcround( 1.55, 1, RoundingMode::AwayFromZero));
var_dump(bcround(-1.55, 1, RoundingMode::AwayFromZero));

echo PHP_EOL;
echo 'Usando RoundingMode::NegativeInfinity com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(bcround( 1.55, 1, RoundingMode::NegativeInfinity));
var_dump(bcround(-1.55, 1, RoundingMode::NegativeInfinity));

echo PHP_EOL;
echo 'Usando RoundingMode::PositiveInfinity com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(bcround( 1.55, 1, RoundingMode::PositiveInfinity));
var_dump(bcround(-1.55, 1, RoundingMode::PositiveInfinity));
?>
```

O exemplo acima produzirá:

```
Usando RoundingMode::HalfAwayFromZero com precisão de 1 dígito decimal
string(3) "1.6"
string(4) "-1.6"

Usando RoundingMode::HalfTowardsZero com precisão de 1 dígito decimal
string(3) "1.5"
string(4) "-1.5"

Usando RoundingMode::HalfEven com precisão de 1 dígito decimal
string(3) "1.6"
string(4) "-1.6"

Usando RoundingMode::HalfOdd com precisão de 1 dígito decimal
string(3) "1.5"
string(4) "-1.5"

Usando RoundingMode::TowardsZero com precisão de 1 dígito decimal
string(3) "1.5"
string(4) "-1.5"

Usando RoundingMode::AwayFromZero com precisão de 1 dígito decimal
string(3) "1.6"
string(4) "-1.6"

Usando RoundingMode::NegativeInfinity com precisão de 1 dígito decimal
string(3) "1.5"
string(4) "-1.6"

Usando RoundingMode::PositiveInfinity com precisão de 1 dígito decimal
string(3) "1.6"
string(4) "-1.5"
```

### Veja também

- [bcceil()](function.bcceil.md) - Arredonda para cima um número de precisão arbitrária
- [bcfloor()](function.bcfloor.md) - Arredonda para baixo um número de precisão arbitrária
- [BcMath\Number::round()](bcmath-number.round.md) - Arredonda um número de precisão arbitrária

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
