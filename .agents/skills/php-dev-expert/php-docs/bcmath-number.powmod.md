# Eleva um número de precisão arbitrária, reduzido por um módulo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bcmath-number.powmod.php

---

# BcMath\Number::powmod

(PHP 8 >= 8.4.0)

BcMath\Number::powmod — Eleva um número de precisão arbitrária, reduzido por um módulo especificado

### Descrição

public function **BcMath\Number::powmod**([BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$exponent`, [BcMath\Number](class.bcmath-number.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$modulus`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [BcMath\Number](class.bcmath-number.md)

Usa o método de exponenciação rápida para elevar $this à potência de
`exponent` em relação ao módulo `modulus`.

### Parâmetros

`exponent`
:   O expoente, com um número inteiro não negativo (a escala precisa ser zero).

`modulus`
:   O módulo, como um inteiro (a escala precisa ser zero).

`scale`
:   A propriedade [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) especifica explicitamente a escala para os resultados de cálculo.
    Se for **`null`**, a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do resultado do cálculo será definida automaticamente.

### Valor Retornado

Retorna o resultado como um novo objeto [BcMath\Number](class.bcmath-number.md).

Quando a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante é definida automaticamente,
a [BcMath\Number::scale](class.bcmath-number.md#bcmath-number.props.scale) do objeto resultante será sempre `0`.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) nos casos a seguir:

- `exponent` ou `modulus` é uma [string](language.types.string.md) e não
  é uma string numérica BCMath bem formada
- $this, `exponent` ou `modulus` tem uma parte fracionária
- `exponent` é um valor negativo
- `scale` está fora do intervalo válido

Este método lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md) se o valor de `modulus`
for igual a `0`.

### Examples

**Exemplo #1 Exemplo de **BcMath\Number::powmod()** quando `scale` não é especificado**

```
<?php
var_dump(
    new BcMath\Number('8')->powmod(new BcMath\Number('3'), 5),
    new BcMath\Number('-8')->powmod(new BcMath\Number('3'), 5),
    new BcMath\Number('8')->powmod('2', -3),
    new BcMath\Number('-8')->powmod(5, 7),
);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(1) "2"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(2) "-2"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(1) "1"
  ["scale"]=>
  int(0)
}
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(2) "-1"
  ["scale"]=>
  int(0)
}
```

**Exemplo #2 Exemplo de **BcMath\Number::powmod()** especificando `scale` explicitamente**

```
<?php
var_dump(
    new BcMath\Number('8')->powmod(new BcMath\Number('3'), 5, 1),
    new BcMath\Number('-8')->powmod(new BcMath\Number('3'), 5, 2),
    new BcMath\Number('8')->powmod('2', -3, 3),
    new BcMath\Number('-8')->powmod(5, 7, 4),
);
?>
```

O exemplo acima produzirá:

```
object(BcMath\Number)#3 (2) {
  ["value"]=>
  string(3) "2.0"
  ["scale"]=>
  int(1)
}
object(BcMath\Number)#4 (2) {
  ["value"]=>
  string(5) "-2.00"
  ["scale"]=>
  int(2)
}
object(BcMath\Number)#2 (2) {
  ["value"]=>
  string(5) "1.000"
  ["scale"]=>
  int(3)
}
object(BcMath\Number)#5 (2) {
  ["value"]=>
  string(7) "-1.0000"
  ["scale"]=>
  int(4)
}
```

### Veja também

- [bcpowmod()](function.bcpowmod.md) - Eleva um número de precisão arbitrária para outro, reduzido por um módulo especificado
- [BcMath\Number::pow()](bcmath-number.pow.md) - Eleva um número de precisão arbitrária
- [BcMath\Number::mod()](bcmath-number.mod.md) - Obtém o resto de um número de precisão arbitrária

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
