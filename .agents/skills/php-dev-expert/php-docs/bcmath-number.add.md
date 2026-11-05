# Adiciona um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.add.php

---

# BcMath\Number::add

(PHP 8 >= 8.4.0)

BcMath\Number::add — Adiciona um número de precisão arbitrária

### Descrição

public function **BcMath\Number::add**([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

Adiciona $this e `num`.

### Parâmetros

`num`
:   O valor a adicionar.

`scale`
:   A propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) especifica explicitamente a escala para os resultados de cálculo.
    Se for **`null`**, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado do cálculo será definida automaticamente.

### Valor Retornado

Retorna o resultado da adição como um novo objeto [BcMath\Number](class.bcmath-number.md).

Quando a propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante é definida automaticamente,
o maior valor de [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) dos dois números usados para adição será usado.

Isto é, com a propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) de dois valores `2`
e `5` respectivamente, a propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado
será `5`.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num` é [string](language.types.string.md) e não é uma string numérica BCMath bem formada
- `scale` está fora do intervalo válido

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::add()** quando `scale` não é especificado**

```
<?php
$number = new BcMath\Number('1.234');

$ret1 = $number->add(new BcMath\Number('2.34567'));
$ret2 = $number->add('-3.456');
$ret3 = $number->add(7);

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
  string(7) "3.57967"
  ["scale"]=>
  int(5)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(6) "-2.222"
  ["scale"]=>
  int(3)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(5) "8.234"
  ["scale"]=>
  int(3)
}
```

**Exemplo #2 Exemplo de **BcMath\Number::add()** com `scale` especificado explicitamente**

```
<?php
$number = new BcMath\Number('1.234');

$ret1 = $number->add(new BcMath\Number('2.34567'), 1);
$ret2 = $number->add('-3.456', 10);
$ret3 = $number->add(7, 0);

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
  string(3) "3.5"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(13) "-2.2220000000"
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

- [bcadd()](function.bcadd.md) - Adiciona dois números de precisão arbitrária
- [BcMath\Number::sub()](bcmath-number.sub.md) - Subtrai um número de precisão arbitrária

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
