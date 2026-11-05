# Arredonda um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.round.php

---

# BcMath\Number::round

(PHP 8 >= 8.4.0)

BcMath\Number::round — Arredonda um número de precisão arbitrária

### Descrição

public function **BcMath\Number::round**([int](language.types.integer.md) `$precision` = 0, [RoundingMode](enum.roundingmode.md) `$mode` = **`RoundingMode::HalfAwayFromZero`**): [BcMath\Number](class.bcmath-number.md)

Retorna o valor arredondado de $this para a precisão
especificada em `precision`
(número de dígitos fracionários).
`precision` pode ser também negativo ou zero (padrão).

### Parâmetros

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

Retorna o resultado como um novo objeto [BcMath\Number](class.bcmath-number.md).

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) se um parâmetro `mode` inválido for especificado.

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::round()****

```
<?php
var_dump(
    new BcMath\Number('3.4')->round(),
    new BcMath\Number('3.5')->round(),
    new BcMath\Number('3.6')->round(),
    new BcMath\Number('3.6')->round(0),
    new BcMath\Number('5.045')->round(2),
    new BcMath\Number('5.055')->round(2),
    new BcMath\Number('345')->round(-2),
    new BcMath\Number('345')->round(-3),
    new BcMath\Number('678')->round(-2),
    new BcMath\Number('678')->round(-3),
);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(1) "3"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(1) "4"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(1) "4"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(1) "4"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#6 (2) {
  ["value"]=>
  string(4) "5.05"
  ["scale"]=>
  int(2)
}
object(BcMath\Number)#7 (2) {
  ["value"]=>
  string(4) "5.06"
  ["scale"]=>
  int(2)
}
object(BcMath\Number)#8 (2) {
  ["value"]=>
  string(3) "300"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#9 (2) {
  ["value"]=>
  string(1) "0"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#10 (2) {
  ["value"]=>
  string(3) "700"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#11 (2) {
  ["value"]=>
  string(4) "1000"
  ["scale"]=>
  int(0)
}
```

**Exemplo #2
Exemplo de uso de **BcMath\Number::round()** com valores diferentes de `precision`**

```
<?php
$number = new BcMath\Number('123.45');

var_dump(
    $number->round(3),
    $number->round(2),
    $number->round(1),
    $number->round(0),
    $number->round(-1),
    $number->round(-2),
    $number->round(-3),
);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(7) "123.450"
  ["scale"]=>
  int(3)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(6) "123.45"
  ["scale"]=>
  int(2)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(5) "123.5"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(3) "123"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#6 (2) {
  ["value"]=>
  string(3) "120"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#7 (2) {
  ["value"]=>
  string(3) "100"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#8 (2) {
  ["value"]=>
  string(1) "0"
  ["scale"]=>
  int(0)
}
```

**Exemplo #3
Exemplo de uso de **BcMath\Number::round()** com valores diferentes de `mode`**

```
<?php
echo 'Modos de arredondamento com 9.5' . PHP_EOL;
$number = new BcMath\Number('9.5');
var_dump(
    $number->round(0, RoundingMode::HalfAwayFromZero),
    $number->round(0, RoundingMode::HalfTowardsZero),
    $number->round(0, RoundingMode::HalfEven),
    $number->round(0, RoundingMode::HalfOdd),
    $number->round(0, RoundingMode::TowardsZero),
    $number->round(0, RoundingMode::AwayFromZero),
    $number->round(0, RoundingMode::NegativeInfinity),
    $number->round(0, RoundingMode::PositiveInfinity),
);

echo PHP_EOL;
echo 'Modos de arredondamento com 8.5' . PHP_EOL;
$number = new BcMath\Number('8.5');
var_dump(
    $number->round(0, RoundingMode::HalfAwayFromZero),
    $number->round(0, RoundingMode::HalfTowardsZero),
    $number->round(0, RoundingMode::HalfEven),
    $number->round(0, RoundingMode::HalfOdd),
    $number->round(0, RoundingMode::TowardsZero),
    $number->round(0, RoundingMode::AwayFromZero),
    $number->round(0, RoundingMode::NegativeInfinity),
    $number->round(0, RoundingMode::PositiveInfinity),
);
?>
```

O exemplo acima produzirá:

```
Modos de arredondamento com 9.5
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(2) "10"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(1) "9"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#7 (2) {
  ["value"]=>
  string(2) "10"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#9 (2) {
  ["value"]=>
  string(1) "9"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#11 (2) {
  ["value"]=>
  string(1) "9"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#13 (2) {
  ["value"]=>
  string(2) "10"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#15 (2) {
  ["value"]=>
  string(1) "9"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#17 (2) {
  ["value"]=>
  string(2) "10"
  ["scale"]=>
  int(0)
}

Modos de arredondamento com 8.5
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(1) "9"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#15 (2) {
  ["value"]=>
  string(1) "8"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#13 (2) {
  ["value"]=>
  string(1) "8"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#11 (2) {
  ["value"]=>
  string(1) "9"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#9 (2) {
  ["value"]=>
  string(1) "8"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#7 (2) {
  ["value"]=>
  string(1) "9"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(1) "8"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(1) "9"
  ["scale"]=>
  int(0)
}
```

**Exemplo #4
Exemplo de uso de **BcMath\Number::round()** com valores diferentes de `mode`
quando `precision` é especificado**

```
<?php
$positive = new BcMath\Number('1.55');
$negative = new BcMath\Number('-1.55');

echo 'Usando RoundingMode::HalfAwayFromZero com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(
    $positive->round(1, RoundingMode::HalfAwayFromZero),
    $negative->round(1, RoundingMode::HalfAwayFromZero),
);

echo PHP_EOL;
echo 'Usando RoundingMode::HalfTowardsZero com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(
    $positive->round(1, RoundingMode::HalfTowardsZero),
    $negative->round(1, RoundingMode::HalfTowardsZero),
);

echo PHP_EOL;
echo 'Usando RoundingMode::HalfEven com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(
    $positive->round(1, RoundingMode::HalfEven),
    $negative->round(1, RoundingMode::HalfEven),
);

echo PHP_EOL;
echo 'Usando RoundingMode::HalfOdd com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(
    $positive->round(1, RoundingMode::HalfOdd),
    $negative->round(1, RoundingMode::HalfOdd),
);

echo PHP_EOL;
echo 'Usando RoundingMode::TowardsZero com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(
    $positive->round(1, RoundingMode::TowardsZero),
    $negative->round(1, RoundingMode::TowardsZero),
);

echo PHP_EOL;
echo 'Usando RoundingMode::AwayFromZero com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(
    $positive->round(1, RoundingMode::AwayFromZero),
    $negative->round(1, RoundingMode::AwayFromZero),
);

echo PHP_EOL;
echo 'Usando RoundingMode::NegativeInfinity com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(
    $positive->round(1, RoundingMode::NegativeInfinity),
    $negative->round(1, RoundingMode::NegativeInfinity),
);

echo PHP_EOL;
echo 'Usando RoundingMode::PositiveInfinity com precisão de 1 dígito decimal' . PHP_EOL;
var_dump(
    $positive->round(1, RoundingMode::PositiveInfinity),
    $negative->round(1, RoundingMode::PositiveInfinity),
);
?>
```

O exemplo acima produzirá:

```
Usando RoundingMode::HalfAwayFromZero com precisão de 1 dígito decimal
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(3) "1.6"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(4) "-1.6"
  ["scale"]=>
  int(1)
}

Usando RoundingMode::HalfTowardsZero com precisão de 1 dígito decimal
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(3) "1.5"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#6 (2) {
  ["value"]=>
  string(4) "-1.5"
  ["scale"]=>
  int(1)
}

Usando RoundingMode::HalfEven com precisão de 1 dígito decimal
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(3) "1.6"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#7 (2) {
  ["value"]=>
  string(4) "-1.6"
  ["scale"]=>
  int(1)
}

Usando RoundingMode::HalfOdd com precisão de 1 dígito decimal
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(3) "1.5"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#8 (2) {
  ["value"]=>
  string(4) "-1.5"
  ["scale"]=>
  int(1)
}

Usando RoundingMode::TowardsZero com precisão de 1 dígito decimal
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(3) "1.5"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#9 (2) {
  ["value"]=>
  string(4) "-1.5"
  ["scale"]=>
  int(1)
}

Usando RoundingMode::AwayFromZero com precisão de 1 dígito decimal
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(3) "1.6"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#10 (2) {
  ["value"]=>
  string(4) "-1.6"
  ["scale"]=>
  int(1)
}

Usando RoundingMode::NegativeInfinity com precisão de 1 dígito decimal
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(3) "1.5"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#11 (2) {
  ["value"]=>
  string(4) "-1.6"
  ["scale"]=>
  int(1)
}

Usando RoundingMode::PositiveInfinity com precisão de 1 dígito decimal
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(3) "1.6"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#12 (2) {
  ["value"]=>
  string(4) "-1.5"
  ["scale"]=>
  int(1)
}
```

### Veja também

- [bcround()](function.bcround.md) - Arredonda número de precisão arbitrária
- [BcMath\Number::ceil()](bcmath-number.ceil.md) - Arredonda para cima um número de precisão arbitrária
- [BcMath\Number::floor()](bcmath-number.floor.md) - Arredonda para baixo um número de precisão arbitrária

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
