# Eleva um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.pow.php

---

# BcMath\Number::pow

(PHP 8 >= 8.4.0)

BcMath\Number::pow — Eleva um número de precisão arbitrária

### Descrição

public function **BcMath\Number::pow**([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$exponent`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

Eleva $this à potência `exponent`.

### Parâmetros

`exponent`
:   O expoente. Precisa ser um valor sem parte fracionária.
    O intervalo válido de `exponent` é específico por plataforma,
    mas é pelo menos de `-2147483648` a `2147483647`.

`scale`
:   A propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) especifica explicitamente a escala para os resultados de cálculo.
    Se for **`null`**, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado do cálculo será definida automaticamente.

### Valor Retornado

Retorna o resultado da potenciação como um novo objeto [BcMath\Number](class.bcmath-number.md).

Quando a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante é definida automaticamente,
dependendo do valor de `exponent`, a BcMath\Number::scale
 do resultado será o seguinte:

| `exponent` | [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado |
| --- | --- |
| positivo | ([BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) da base) \* (valor do `exponent`) |
| `0` | `0` |
| negativo | Entre ([BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) da base) e (BcMath\Number::scale  da base + `10`) |

Se uma divisão indivisível ocorrer devido a um `exponent` negativo, a 
BcMath\Number::scale do resultado é expandida. A expansão é feita conforme necessidade, até
um máximo de `+10`.
Este comportamento é o mesmo de [BcMath\Number::div()](bcmath-number.div.md), portanto consulte esse método para detalhes.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) nos casos a seguir:

- `exponent` é uma [string](language.types.string.md) e não é uma string numérica BCMath bem formada
- `exponent` tem uma parte fracionária
- `exponent` ou `scale` está fora do intervalo válido
- [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante está fora do intervalo válido

Este método lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md) se o valor de $this
for `0` e o `exponent` for um valor negativo.

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::pow()** quando `scale` não é especificado**

```
<?php
$number = new BcMath\Number('3.0');

$ret1 = $number->pow(new BcMath\Number('5'));
$ret2 = $number->pow('-1');
$ret3 = $number->pow(0);

var_dump($number, $ret1, $ret2, $ret3);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(3) "3.0"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(9) "243.00000"
  ["scale"]=>
  int(5)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(13) "0.33333333333"
  ["scale"]=>
  int(11)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(1) "1"
  ["scale"]=>
  int(0)
}
```

**Exemplo #2 Exemplo de **BcMath\Number::pow()** especificando `scale` explicitamente**

```
<?php
$number = new BcMath\Number('3.0');

$ret1 = $number->pow(new BcMath\Number('5'), 0);
$ret2 = $number->pow('-1', 2);
$ret3 = $number->pow(0, 10);

var_dump($number, $ret1, $ret2, $ret3);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(3) "3.0"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(3) "243"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(4) "0.33"
  ["scale"]=>
  int(2)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(12) "1.0000000000"
  ["scale"]=>
  int(10)
}
```

### Veja também

- [bcpow()](function.bcpow.md) - Eleva um número de precisão arbitrária a outro
- [BcMath\Number::powmod()](bcmath-number.powmod.md) - Eleva um número de precisão arbitrária, reduzido por um módulo especificado
- [BcMath\Number::mul()](bcmath-number.mul.md) - Multiplica um número de precisão arbitrária
- [BcMath\Number::sqrt()](bcmath-number.sqrt.md) - Obtém a raiz quadrada de um número de precisão arbitrária
- [BcMath\Number::div()](bcmath-number.div.md) - Divide por um número de precisão arbitrária

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
