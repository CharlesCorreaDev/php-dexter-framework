# Subtrai um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.sub.php

---

# BcMath\Number::sub

(PHP 8 >= 8.4.0)

BcMath\Number::sub — Subtrai um número de precisão arbitrária

### Descrição

public function **BcMath\Number::sub**([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

Subtrai `num` de $this.

### Parâmetros

`num`
:   O valor a subtrair.

`scale`
:   A propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) especifica explicitamente a escala para os resultados de cálculo.
    Se for **`null`**, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado do cálculo será definida automaticamente.

### Valor Retornado

Retorna o resultado da subtração como um novo objeto [BcMath\Number](class.bcmath-number.md).

Quando a propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante é definida automaticamente,
o maior valor de [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) dos dois números da subtração será usado.

Isto é, com a propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) de dois valores `2`
e `5` respectivamente, a propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado
será `5`.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num` é [string](language.types.string.md) e não é uma string numérica BCMath bem formada
- `scale` está fora do intervalo válido

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::sub()** quando `scale` não é especificado**

```
<?php
$number = new BcMath\Number('1.234');

$ret1 = $number->sub(new BcMath\Number('2.34567'));
$ret2 = $number->sub('-3.456');
$ret3 = $number->sub(7);

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
  string(8) "-1.11167"
  ["scale"]=>
  int(5)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(5) "4.690"
  ["scale"]=>
  int(3)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(6) "-5.766"
  ["scale"]=>
  int(3)
}
```

**Exemplo #2 Exemplo de **BcMath\Number::sub()** com `scale` especificado explicitamente**

```
<?php
$number = new BcMath\Number('1.234');

$ret1 = $number->sub(new BcMath\Number('2.34567'), 1);
$ret2 = $number->sub('-3.456', 10);
$ret3 = $number->sub(7, 0);

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
  string(4) "-1.1"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(12) "4.6900000000"
  ["scale"]=>
  int(10)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(2) "-5"
  ["scale"]=>
  int(0)
}
```

### Veja também

- [bcsub()](function.bcsub.md) - Subtrai um número de precisão arbitrária de outro
- [BcMath\Number::add()](bcmath-number.add.md) - Adiciona um número de precisão arbitrária

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
