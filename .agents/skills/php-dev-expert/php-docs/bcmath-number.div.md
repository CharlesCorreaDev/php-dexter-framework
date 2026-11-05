# Divide por um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.div.php

---

# BcMath\Number::div

(PHP 8 >= 8.4.0)

BcMath\Number::div — Divide por um número de precisão arbitrária

### Descrição

public function **BcMath\Number::div**([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

Divide $this por `num`.

### Parâmetros

`num`
:   O divisor.

`scale`
:   A propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) especifica explicitamente a escala para os resultados de cálculo.
    Se for **`null`**, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado do cálculo será definida automaticamente.

### Valor Retornado

Retorna o resultado da divisão como um novo objeto [BcMath\Number](class.bcmath-number.md).

Quando a propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante é definida automaticamente,
a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do dividendo é usada. Entretanto, em casos como
uma divisão indivisível, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado é expandida.
A expansão é feita apenas quando necessário, até um limite de `+10`.

Ou seja, se a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do dividendo for `5`,
a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado estará entre `5` e
`15`.

Mesmo em cálculos indivisíveis, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) não será sempre
`+10`.
Considera-se que um `0` no final do resultado não precisa de expansão, então a
[BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) é reduzida por essa quantidade.
A [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) nunca será menor que a
[BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) anterior à expansão.
Consulte também o [exemplo de código](bcmath-number.div.md#bcmath-number.div.example.expansion-scale).

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num` é uma [string](language.types.string.md) e não é uma string numérica BCMath bem formada
- `scale` está fora do intervalo válido
- [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante está fora do intervalo válido

Este método lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md) se
`num` for `0`.

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::div()** quando `scale` não for especificado**

```
<?php
$number = new BcMath\Number('0.002');

$ret1 = $number->div(new BcMath\Number('2.000'));
$ret2 = $number->div('-3');
$ret3 = $number->div(32);

var_dump($number, $ret1, $ret2, $ret3);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(5) "0.002"
  ["scale"]=>
  int(3)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(5) "0.001"
  ["scale"]=>
  int(3)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(16) "-0.0006666666666"
  ["scale"]=>
  int(13)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(9) "0.0000625"
  ["scale"]=>
  int(7)
}
```

**Exemplo #2 Exemplo de **BcMath\Number::div()** especificando `scale` explicitamente**

```
<?php
$number = new BcMath\Number('0.002');

$ret1 = $number->div(new BcMath\Number('2.000'), 15);
$ret2 = $number->div('-3', 5);
$ret3 = $number->div(32, 2);

var_dump($number, $ret1, $ret2, $ret3);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(5) "0.002"
  ["scale"]=>
  int(3)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(17) "0.001000000000000"
  ["scale"]=>
  int(15)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(8) "-0.00066"
  ["scale"]=>
  int(5)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(4) "0.00"
  ["scale"]=>
  int(2)
}
```

**Exemplo #3 Exemplo de **BcMath\Number::div()** expandindo [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante**

```
<?php
var_dump(
    new BcMath\Number('0.001')->div('10001'),
    new BcMath\Number('0.001')->div('10001', 13),
    new BcMath\Number('0.001')->div('100000000000001'),
);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(13) "0.00000009999"
  ["scale"]=>
  int(11)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(15) "0.0000000999900"
  ["scale"]=>
  int(13)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(5) "0.000"
  ["scale"]=>
  int(3)
}
```

### Veja também

- [bcdiv()](function.bcdiv.md) - Divide dois números de precisão arbitrária
- [BcMath\Number::divmod()](bcmath-number.divmod.md) - Obtém quociente e resto de um número de precisão arbitrária
- [BcMath\Number::mod()](bcmath-number.mod.md) - Obtém o resto de um número de precisão arbitrária
- [BcMath\Number::sqrt()](bcmath-number.sqrt.md) - Obtém a raiz quadrada de um número de precisão arbitrária
- [BcMath\Number::pow()](bcmath-number.pow.md) - Eleva um número de precisão arbitrária
- [BcMath\Number::mul()](bcmath-number.mul.md) - Multiplica um número de precisão arbitrária

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
