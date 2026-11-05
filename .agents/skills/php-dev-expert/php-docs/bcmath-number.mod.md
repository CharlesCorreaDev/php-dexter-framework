# Obtém o resto de um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.mod.php

---

# BcMath\Number::mod

(PHP 8 >= 8.4.0)

BcMath\Number::mod — Obtém o resto de um número de precisão arbitrária

### Descrição

public function **BcMath\Number::mod**([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

Obtém o resto da divisão de $this por `num`.
A menos que `num` seja `0`, o resultado tem o mesmo sinal
de $this.

### Parâmetros

`num`
:   O divisor.

`scale`
:   A propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) especifica explicitamente a escala para os resultados de cálculo.
    Se for **`null`**, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado do cálculo será definida automaticamente.

### Valor Retornado

Retorna o resto como um novo objeto [BcMath\Number](class.bcmath-number.md).

Quando a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante é definida automaticamente,
a maior [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) dos dois números da operação de resto é usada.

Isto é, com a propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) de dois valores `2`
e `5` respectivamente, a propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado
será `5`.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num` é [string](language.types.string.md) e não é uma string numérica BCMath bem formada
- `scale` está fora do intervalo válido

Este método lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md) se
`num` for `0`.

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::mod()** quando `scale` não for especificado**

```
<?php
$number = new BcMath\Number('8.3');

$ret1 = $number->mod(new BcMath\Number('2.22'));
$ret2 = $number->mod('8.3');
$ret3 = $number->mod(-5);

var_dump($number, $ret1, $ret2, $ret3);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(3) "8.3"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(4) "1.64"
  ["scale"]=>
  int(2)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(3) "0.0"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(3) "3.3"
  ["scale"]=>
  int(1)
}
```

**Exemplo #2 Exemplo de **BcMath\Number::mod()** especificando `scale` explicitamente**

```
<?php
$number = new BcMath\Number('8.3');

$ret1 = $number->mod(new BcMath\Number('2.22'), 1);
$ret2 = $number->mod('8.3', 3);
$ret3 = $number->mod(-5, 0);

var_dump($number, $ret1, $ret2, $ret3);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#1 (2) {
  ["value"]=>
  string(3) "8.3"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(3) "1.6"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(5) "0.000"
  ["scale"]=>
  int(3)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(1) "3"
  ["scale"]=>
  int(0)
}
```

### Veja também

- [bcmod()](function.bcmod.md) - Obtém o resto de uma divisão com precisão arbitrária
- [BcMath\Number::div()](bcmath-number.div.md) - Divide por um número de precisão arbitrária
- [BcMath\Number::divmod()](bcmath-number.divmod.md) - Obtém quociente e resto de um número de precisão arbitrária
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
