# Multiplica um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.mul.php

---

# BcMath\Number::mul

(PHP 8 >= 8.4.0)

BcMath\Number::mul — Multiplica um número de precisão arbitrária

### Descrição

public function **BcMath\Number::mul**([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

Multiplica $this por `num`.

### Parâmetros

`num`
:   O multiplicador.

`scale`
:   A propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) especifica explicitamente a escala para os resultados de cálculo.
    Se for **`null`**, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado do cálculo será definida automaticamente.

### Valor Retornado

Retorna o resultado da multiplicação como um novo objeto [BcMath\Number](class.bcmath-number.md).

Quando a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante é definida automaticamente,
a soma das [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale)s dos dois valores da multiplicação é usada.

Isto é, se as [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale)s de dois valores forem `2`
e `5` respectivamente, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado
será `7`.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num` é uma [string](language.types.string.md) e não é uma string numérica BCMath bem formada
- `scale` está fora do intervalo válido
- [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante está fora do intervalo válido

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::mul()** quando `scale` não é especificado**

```
<?php
$number = new BcMath\Number('1.234');

$ret1 = $number->mul(new BcMath\Number('2.3456'));
$ret2 = $number->mul('-3.4');
$ret3 = $number->mul(7);

var_dump($number, $ret1, $ret2, $ret3);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(5) "1.234"
  ["scale"]=>
  int(3)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(9) "2.8944704"
  ["scale"]=>
  int(7)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(7) "-4.1956"
  ["scale"]=>
  int(4)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(5) "8.638"
  ["scale"]=>
  int(3)
}
```

**Exemplo #2 Exemplo de **BcMath\Number::mul()** especificando `scale` explicitamente**

```
<?php
$number = new BcMath\Number('1.234');

$ret1 = $number->mul(new BcMath\Number('2.3456'), 1);
$ret2 = $number->mul('-3.4', 10);
$ret3 = $number->mul(7, 0);

var_dump($number, $ret1, $ret2, $ret3);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(5) "1.234"
  ["scale"]=>
  int(3)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(3) "2.8"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(13) "-4.1956000000"
  ["scale"]=>
  int(10)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(1) "8"
  ["scale"]=>
  int(0)
}
```

### Veja também

- [bcmul()](function.bcmul.md) - Multiplica dois números de precisão arbitrária
- [BcMath\Number::div()](bcmath-number.div.md) - Divide por um número de precisão arbitrária
- [BcMath\Number::pow()](bcmath-number.pow.md) - Eleva um número de precisão arbitrária
- [BcMath\Number::powmod()](bcmath-number.powmod.md) - Eleva um número de precisão arbitrária, reduzido por um módulo especificado

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
